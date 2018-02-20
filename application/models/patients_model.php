<?php

class patients_model extends CI_Model
{
    function show()
    {
        $siteData = array();
        $this->db->from('patients');
        $this->db->select("patient_id, patient_name, species_id, client_id, patient_status ");
        $query = $this->db->get();
        if ($query->num_rows()) {
            foreach ($query->result_array() as $row) {
                $siteData[] = [
                    'patient_id' => $row['patient_id'],
                    'patient_name' => $row['patient_name'],
                    'species_id' => $row['species_id'],
                    'client_id' => $row['client_id'],
                    'patient_status' => $row['patient_status']
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
        $this->db->from('species');
        $this->db->where('species_id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function update($id,$data){
        $this->db->where('species_id',$id);
        $this->db->update('species', $data);
    }


}