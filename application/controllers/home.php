<?php

class Home extends CI_Controller {



    public function index()
    {
        $this->load->view('templates/header');
        $this->load->model('user_model');
        $data['metadata'] = $this->user_model->show();
//      var_dump($data); //laat de data zien die hij ophaalt. Het is een array in een array en in die array zitten de clien names
        $this->load->view('home_view', $data);
        $this->load->view('templates/footer');
    }



    public function create_client()
    {

//        $this->form_validation->set_rules('client_firstname', 'Firstname', 'trim|required|min_length[3]');
//        $this->form_validation->set_rules('client_lastname', 'Lastname', 'trim|required|min_length[3]');
        if (!empty($_POST)) {
            $firstname = $this->input->post('client_firstname');
            $lastname = $this->input->post('client_lastname');
            // Checking if everything is there
            if ($firstname && $lastname) {
                // Loading model
                $this->load->model('User_model');
                $data = array(
                    'client_firstname' => $firstname,
                    'client_lastname' => $lastname,
                );

                // Calling model
                $id = $this->User_model->insert($data);

                // You can do something else here
            }
        }
        // Loading view
        $this->load->view('create_view');
        $this->load->view('templates/header');
        $this->load->view('templates/footer');
    }

    public function edit_client()
    {
        $this->load->view('templates/header');
        $id = $this->uri->segment(3);
        $data['clients'] = $this->user_model->show();
        $data['client_id'] = $this->user_model->show_id($id);
        $this->load->view('update_view', $data);
        $this->load->view('templates/footer');
    }

    public function update_client()
    {
        $this->load->model('User_model');
        $id = $this->input->post('client_id');
        $firstname = $this->input->post('client_firstname');
        $lastname = $this->input->post('client_lastname');
        $data = array(
            'client_firstname' => $firstname,
            'client_lastname' => $lastname
        );
        $this->user_model->update($id,$data);
        redirect('home/index');
    }

    public function delete_client($client_id)
    {
        $this->load->model("user_model");
        $this->user_model->delete($client_id);
        redirect('home/index');
    }










}