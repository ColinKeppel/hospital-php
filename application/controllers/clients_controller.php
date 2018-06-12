<?php

class clients_controller extends CI_Controller
{
    public function index()
    {
        $this->load->model('clients_model');
        $data['dataview'] = $this->clients_model->read();
        $this->load->view('clients/clients', $data);
    }

    public function create_client()
    {
        $this->load->model('clients_model');
        $this->load->view('clients/create_clients');
        if (!empty($_POST)) {
            $client_firstname = $this->input->post('clientfirstname');
            $client_lastname = $this->input->post('clientlastname');
            $client_email = $this->input->post('client_email');
            $client_number = $this->input->post('client_number');
            if ($client_firstname && $client_lastname) {
                $data = array(
                    'client_firstname' => $client_firstname,
                    'client_lastname' => $client_lastname,
                    'client_email' => $client_email,
                    'client_number' => $client_number
                );
            }
            $this->load->model('clients_model');
            $this->clients_model->insert($data);
            redirect('clients_controller/index');
        }
    }
        public function edit_client($id) {
            $this->load->model('clients_model');
            $data['clients'] = $this->clients_model->show_clients();
            $data['id'] = $this->clients_model->show_client_id($id);
            $this->load->view('clients/edit_clients', $data);
        }

        public function update() {
            $this->load->model('clients_model');
            $id= $this->input->post('id');
            $data = array(
                'client_firstname' => $this->input->post('clientfirstname'),
                'client_lastname' => $this->input->post('clientlastname'),
                'client_email' => $this->input->post('client_email'),
                'client_number' => $this->input->post('client_number')
        );
            $this->clients_model->update_client_id($id,$data);
            redirect('clients_controller/index');
        }

    public function delete($id)
    {
        $this->load->model('clients_model');
        $this->clients_model->delete($id);
        redirect('clients_controller/index');
    }
}