<?php

class Client_model extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }


    public function get_clients()
    {
        $this->load->database('hospital');

        $query = $this->db->get('clients');

        return $query->result();

    }

    public function create_clients()
    {
        $this->load->database('hospital');

        $data = array(
            'client_firstname' => '$firstname',
            'client_lastname' => '$lastname'
        );

        $query = $this->db->insert('clients', $data);

    }



}