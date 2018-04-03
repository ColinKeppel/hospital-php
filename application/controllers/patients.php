<?php

class patients extends CI_Controller{

    public function __construct() {
        parent::__construct();
        $this->load->model('patients_model');
    }

    public function index()
    {
        $this->load->view('templates/header');
        $data['metadata'] = $this->patients_model->show();
        $this->load->model('species_model');
        $data['species'] = $this->species_model->show();
        $this->load->view('patients/patients_view', $data);
        $this->load->view('templates/footer');
    }

//    public function create_patients()
//    {
//        $this->load->model('patients_model');
//        $this->load->model('species_model');
//        $data['species'] = $this->species_model->show();
//        $this->load->model('user_model');
//        $data['clients'] = $this->user_model->show();
//
//        if (!empty($_POST)) {
//            // process the form
//            $this->form_validation->set_rules('patient_name', 'Patient', 'trim|required');
//            $this->form_validation->set_rules('species_id', 'Species', 'required');
//            $this->form_validation->set_rules('client_id', 'Client', 'required');
//            $this->form_validation->set_rules('patient_status', 'Status', 'required');
//            $this->form_validation->set_rules('gender', 'Gender', 'required');
//
//            if ($this->form_validation->run() == FALSE) {
//                // errors on form
//                $errors = array(
//                    'errors' => validation_errors()
//                );
//                //Dit print de error op de login pagina
//                $this->session->set_flashdata('record_failed', $errors);
//
////                $data['old_data'] = $_POST;
//
//                // show form with the previous entered data
//                $this->load->view('templates/header');
//                $this->load->view('patients/patients_create', $data);
//                $this->load->view('templates/footer');
//
//
//            } else {
//                // valid form
//                $patient = $this->input->post('patient_name');
//                $species = $this->input->post('species_id');
//                $client = $this->input->post('client_id');
//                $status = $this->input->post('patient_status');
//                $gender = $this->input->post('gender');
//                if ($patient && $species && $client && $status && $gender){
//                    $this->load->model('patients_model');
//                    $data = array(
//                        'patient_name' => $patient,
//                        'species_id' => $species,
//                        'client_id' => $client,
//                        'patient_status' => $status,
//                        'gender' => $gender
//                    );
//                    $insert_data = array (
//                        'patient' => $patient,
//                        'record_created' => true
//                    );
//                    $this->patients_model->insert($data);
//                    $this->session->set_userdata($insert_data);
//                    $this->session->flashdata('record_succes', 'Record is created succesfull');
//                    redirect('patients/index');
//                } else {
//                    $this->session->flashdata('record_failed', 'Failed to create record');
//                    redirect('patients/index');
//                }
//
//            }
//
//        }
//
//        // show empty form
//        $this->load->view('templates/header');
//        $this->load->view('patients/patients_create', $data);
//        $this->load->view('templates/footer');
//
//    }
    public function create_patients()
    {
        $this->load->view('templates/header');
        $this->load->model('patients_model');
        $this->load->model('species_model');
        $data['species'] = $this->species_model->show();
        $this->load->model('user_model');
        $data['clients'] = $this->user_model->show();

        if (!empty($_POST)){
            //hier
            $patient = $this->input->post('patient_name');
            $species = $this->input->post('species_id');
            $client = $this->input->post('client_id');
            $status = $this->input->post('patient_status');
            $gender = $this->input->post('gender');
            if ($patient && $species && $client && $status && $gender){
                $this->load->model('patients_model');
                $data = array(
                    'patient_name' => $patient,
                    'species_id' => $species,
                    'client_id' => $client,
                    'patient_status' => $status,
                    'gender' => $gender
                );

                $this->patients_model->insert($data);

            }
        } else {

        }
        $this->load->view('patients/patients_create', $data);
        $this->load->view('templates/footer');

    }


    public function delete_patients($patient_id)
    {
        $this->load->model("patients_model");
        $this->patients_model->delete($patient_id);
        redirect('patients/index');

    }

    public function edit_patients()
    {
        $this->load->view('templates/header');
        $id = $this->uri->segment(3);
        $this->load->model('species_model');
        $data['species'] = $this->species_model->show();
        $this->load->model('user_model');
        $data['clients'] = $this->user_model->show();
        $data['patients'] = $this->patients_model->show();
        $data['patients_id'] = $this->patients_model->show_id($id);
        $this->load->view('patients/patients_edit', $data);
        $this->load->view('templates/footer');
    }

    public function update_patients()
    {
        $this->load->model('patients_model');
        $id = $this->input->post('patient_id');
        $patient = $this->input->post('patient_name');
        $species = $this->input->post('species_id');
        $client = $this->input->post('client_id');
        $status = $this->input->post('patient_status');
        $gender = $this->input->post('gender');
        $data = array(
            'patient_name' => $patient,
            'species_id' => $species,
            'client_id' => $client,
            'patient_status' => $status,
            'gender' => $gender
        );
        $this->patients_model->update($id,$data);
        redirect('patients/index');
    }



}