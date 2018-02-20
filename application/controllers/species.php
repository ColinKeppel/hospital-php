<?php

class species extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('species_model');
    }

    public function index()
    {
        $this->load->view('templates/header');
        $data['metadata'] = $this->species_model->show();
        $this->load->view('species/species_view', $data);
        $this->load->view('templates/footer');
    }

//    Love you Thommie xxx colin Keppel
    public function create_species()
    {
        $this->load->view('templates/header');
        $this->load->model('species_model');
        if (!empty($_POST)){
            $species = $this->input->post('species_description');
            if ($species){
                $this->load->model('species_model');
                $data = array(
                    'species_description' => $species
                );

                $id = $this->species_model->insert($data);
            }
        }
        $this->load->view('species/species_create');
        $this->load->view('templates/footer');
    }

    public function edit_species()
    {
        $this->load->view('templates/header');
        $id = $this->uri->segment(3);
        $data['species'] = $this->species_model->show();
        $data['species_id'] = $this->species_model->show_id($id);
        $this->load->view('species/species_edit', $data);
        $this->load->view('templates/footer');
    }

    public function update_species()
    {
        $this->load->model('species_model');
        $id = $this->input->post('species_id');
        $species = $this->input->post('species_description');
        $data = array(
            'species_description' => $species
        );
        $this->species_model->update($id,$data);
        redirect('species/index');
    }

    public function delete_species($species_id)
    {
        $this->load->model("species_model");
        $this->species_model->delete($species_id);
        redirect('species/index');
    }






}





