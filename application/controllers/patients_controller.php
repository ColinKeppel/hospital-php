<?php

class patients_controller extends CI_Controller
{


    public function index()
    {
        $this->load->model('patients_model');
        $data['patientsdata'] = $this->patients_model->read();
        $this->load->view('patients/patients', $data);
        //$data['species'] = $this->species_model->read();
    }

    public function create_patients()
    {
        $this->load->model('patients_model');
        $this->load->model('species_model');
        $this->load->model('clients_model');
        $data['speciesdata'] = $this->species_model->read();
        $data['clientdata'] = $this->clients_model->read();

        $this->load->view('patients/create_patients', $data);
        if (!empty($_POST)) {
            $patient_name = $this->input->post('patient_name');
            $species_id = $this->input->post('species_id');
            $patient_status = $this->input->post('patient_status');
            $client_id = $this->input->post('client_id');
            $gender = $this->input->post('gender');
            $dbdata = [];
            if ($patient_name && $patient_status && $species_id && $client_id) {
                $dbdata = array(
                    'patient_name' => $patient_name,
                    'patient_status' => $patient_status,
                    'species_id' => $species_id,
                    'client_id' => $client_id,
                    'gender' => $gender
                );
            }
            $this->load->model('patients_model');
            $this->patients_model->insert($dbdata);
            redirect('patients_controller/index');
        }
    }

    // http://localhost/hospital/patients_controller/edit_patients/1
    public function edit_patients($id) {
        $this->load->model('patients_model');
        $this->load->model('species_model');
        $this->load->model('clients_model');
        $data['patient'] = $this->patients_model->read($id)[0];   // only pass the first item from records array
        $data['speciesdata'] = $this->species_model->read();
        $data['clientdata'] = $this->clients_model->read();
        $this->load->view('patients/edit_patients', $data);
    }

    public function update() {
        $this->load->model('patients_model');
        $patient_id = $this->input->post('id');
        $data = array(
            'patient_name' => $this->input->post('patient_name'),
            'species_id' => $this->input->post('species_id'),
            'patient_status' => $this->input->post('patient_status'),
            'client_id' => $this->input->post('client_id'),
            'gender' => $this->input->post('gender')
        );
        $this->patients_model->update_patients_id($patient_id,$data);
        redirect('patients_controller/index');
    }

    public function delete($patient_id)
    {
        $this->load->model("patients_model");
        $this->patients_model->delete($patient_id);
        redirect('patients_controller/index');
    }
}