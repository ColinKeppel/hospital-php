<?php

class patients_model extends CI_Model
{
    function show()
    {
        $this->load->model('species_model');
        $query1 = $this->species_model->show();
        $species = [];
        foreach ($query1 as $data){
            $species[$data['id']] = $data['description'];
        }
        $this->load->model('user_model');
        $query2 = $this->user_model->show();
        $client = [];
        foreach ($query2 as $data){
            $client[$data['id']] = $data['firstname'];
        }
        //Het sorteren van de kolomen
        $url = $this->uri->segment(3);
        $order = $this->uri->segment(4);

        $siteData = array();
        $this->db->from('patients');
        $this->db->select("patient_id, patient_name, species_id, client_id, patient_status, gender");
        $this->db->order_by($url, $order);
        $query = $this->db->get();
        if ($query->num_rows()) {
            foreach ($query->result_array() as $row) {
                $siteData[] = [
                    'patient_id' => $row['patient_id'],
                    'patient_name' => $row['patient_name'],
                    'species_id' => $row['species_id'],
                    'species_name' => $species[$row['species_id']],
                    'client_id' => $row['client_id'],
                    'client_name' => $client[$row['client_id']],
                    'patient_status' => $row['patient_status'],
                    'gender' => $row['gender']
                ];
            }
        }
        return $siteData;
    }


    public function insert($data)
    {
        $this->db->insert('patients', $data);
    }

    public function delete($id)
    {
        $this->db->where('patient_id', $id);
        $this->db->delete('patients');
    }

    public function show_id($data)
    {
        $this->db->select('*');
        $this->db->from('patients');
        $this->db->where('patient_id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function update($id,$data){
        $this->db->where('patient_id',$id);
        $this->db->update('patients', $data);
    }


}