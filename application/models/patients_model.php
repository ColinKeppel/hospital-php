<?php
class patients_model extends CI_Model
{
    public function insert($dbdata)
    {
        $this->db->insert('patients', $dbdata);
    }

    public function read()
    {
        $this->load->model('species_model');
        $species_records = $this->species_model->read();
        $species = [];
        foreach ($species_records as $data){
            $species[$data['species_id']] = $data['species_description'];
        }
        $this->load->model('clients_model');
        $client_records = $this->clients_model->read();
        $clients = [];
        foreach ($client_records as $data){
            $clients[$data['client_id']] = $data['client_firstname'];
        }

        $patients_records = array();
        $this->db->from('patients');
        $this->db->order_by('patient_name');
        $this->db->select('*');
        $query = $this->db->get();
        if ($query->num_rows()) {
            foreach ($query->result_array() as $row) {
                $patients_records[] = array(
                    'patient_id' => $row['patient_id'],
                    'patient_name' => $row['patient_name'],
                    'patient_status' => $row['patient_status'],
                    'species_id' => $row['species_id'],
                    'species_name' => $species[$row['species_id']],
                    'client_id' => $row['client_id'],
                    'client_name' => $clients[$row['client_id']]
                );
            }
        }
        return $patients_records;
    }

    public function show_patients(){
        $query = $this->db->get('patients');
        $query_result = $query->result();
        return $query_result;
    }

    public function show_patients_id($data){
        $this->db->select('*');
        $this->db->from('patients');
        $this->db->where('patient_id', $data);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }

    public function update_patients_id($id,$data){
        $this->db->where('patient_id', $id);
        $this->db->update('patients', $data);
    }
    public function delete($id)
    {
        $this->db->where('patient_id',$id);
        $this->db->delete('patients');
    }
}
