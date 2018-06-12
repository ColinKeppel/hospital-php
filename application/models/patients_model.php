<?php
class patients_model extends CI_Model
{
    public function insert($dbdata)
    {
        $this->db->insert('patients', $dbdata);
    }

    // returns everything if no ID given; returns only single row if matched ID is found; returns false in case of errors
    public function read($id = null)
    {

        // $this->load->model('species_model');
        /*
        $species_records = $this->species_model->read();
        $species = [];
        foreach ($species_records as $data){
            $species[$data['species_id']] = $data['species_description'];
        }
        */

        //$this->load->model('clients_model');
        /*
        $client_records = $this->clients_model->read();
        $clients = [];
        foreach ($client_records as $data){
            $clients[$data['client_id']] = $data['client_firstname'] . ' ' . $data['client_lastname'] ;
        }
        */

        $patients_records = array();

        if($id != null) {
            $query = $this->db->query('SELECT * FROM patients LEFT JOIN species on patients.species_id = species.species_id LEFT JOIN clients on patients.client_id = clients.client_id where patient_id = ' . $id);
        } else {
            $query = $this->db->query('SELECT * FROM patients LEFT JOIN species on patients.species_id = species.species_id LEFT JOIN clients on patients.client_id = clients.client_id');
        }

        if ($query->num_rows()) {
            foreach ($query->result_array() as $row) {
                $patients_records[] = array(
                    'patient_id' => $row['patient_id'],
                    'patient_name' => $row['patient_name'],
                    'patient_status' => $row['patient_status'],
                    'species_id' => $row['species_id'],
                    'species_name' => $row['species_description'],
                    'client_id' => $row['client_id'],
                    'client_name' => $row['client_firstname'] . ' ' . $row['client_lastname'],
                    'gender' => $row['gender']
                );
            }
        }
        return $patients_records;
    }

    public function update_patients_id($patient_id,$data){
        $this->db->where('patient_id', $patient_id);
        $this->db->update('patients', $data);
    }
    public function delete($patient_id)
    {
        $this->db->where('patient_id',$patient_id);
        $this->db->delete('patients');
    }
}
