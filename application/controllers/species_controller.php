<?php

class species_controller extends CI_Controller
{
    public function index()
    {
        $this->load->model('species_model');
        $data['dataview'] = $this->species_model->read();
        $this->load->view('species/species', $data);
    }

    public function create_species()
    {
        $this->load->model('species_model');
        $this->load->view('species/create_species');
        if (!empty($_POST)) {
            $species_description = $this->input->post('speciesdescription');
            if ($species_description) {
                $data = array(
                    'species_description' => $species_description
                );
            }
            $this->species_model->insert($data);
            redirect('species_controller/index');
        }
    }
    public function edit_species($id) {
        $this->load->model('species_model');
        $data['species'] = $this->species_model->show_species();
        $data['id'] = $this->species_model->show_species_id($id);
        $this->load->view('species/edit_species', $data);
    }

    public function update() {
        $this->load->model('species_model');
        $id= $this->input->post('id');
        $data = array(
            'species_description' => $this->input->post('species_description')
        );
        $this->species_model->update_species_id($id,$data);
        redirect('species_controller/index');
    }

    public function delete($id)
    {
        $this->load->model('species_model');
        $this->species_model->delete($id);
        redirect('species_controller/index');
    }
}