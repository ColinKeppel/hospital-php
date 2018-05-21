<?php

class patients_controller extends CI_Controller
{
    public function index()
    {
        $this->load->model('patients_model');
        $data['patientsdata'] = $this->patients_model->read();
        $this->load->view('patients/patients', $data);
        $data['species'] = $this->species_model->read();
    }

    public function create_patients()
    {
        $this->load->model('patients_model');
        $this->load->model('species_model');
        $this->load->model('clients_model');
        $data['patientsdata'] = $this->patients_model->read();
        $data['speciesdata'] = $this->species_model->read();
        $data['clientdata'] = $this->clients_model->read();
        $this->load->view('patients/create_patients', $data);
        if (!empty($_POST)) {
            $patient_name = $this->input->post('patient_name');
            $species_id = $this->input->post('species_id');
            $patient_status = $this->input->post('patient_status');
            $client_id = $this->input->post('client_id');
            if ($patient_name && $patient_status && $species_id && $client_id) {
                $data = array(
                    'patient_name' => $patient_name,
                    'patient_status' => $patient_status,
                    'species_id' => $species_id,
                    'client_id' => $client_id
                );
            }
            $this->load->model('patients_model');
            $this->patients_model->insert($data);
            redirect('patients_controller/index');
        }
    }
    public function edit_patients() {
        $id = $this->uri->segment(3);
        $data['patients'] = $this->patients_model->show_patients();
        $data['id'] = $this->patients_model->show_patients_id($id);
        $this->load->view('patients/edit_patients', $data);
    }

    public function update() {
        $id= $this->input->post('id');
        $data = array(
            'patient_name' => $this->input->post('patient_name'),
            'patient_status' => $this->input->post('patient_status'),
        );
        $this->patients_model->update_patients_id($id,$data);
        redirect('patients_controller/index');
    }

    public function delete($patient_id)
    {
        $this->load->model("patients_model");
        $this->patients_model->delete($patient_id);
        redirect('patients_controller/index');
    }
}