<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class client extends CI_Controller {


    // http://localhost/hospital-php/index.php/client/
    // http://localhost/hospital-php/index.php/client/index
    public function index()
    {
        $this->load->model('client_model');

        $data['results'] = $this->client_model->get_clients();


        $this->load->view('clients_view', $data);

    }

    // http://localhost/hospital-php/index.php/client/create
    public function create()
    {
        $this->load->model('client_model');
        $this->load->view('client/create');

    }


}

