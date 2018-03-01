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
        $this->load->view('patients/patients_view', $data);
        $this->load->view('templates/footer');
    }

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
            if ($patient && $species && $client && $status){
                $this->load->model('patients_model');
                $data = array(
                    'patient_name' => $patient,
                    'species_id' => $species,
                    'client_id' => $client,
                    'patient_status' => $status
                );

                $this->patients_model->insert($data);

            }
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



}