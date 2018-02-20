<?php

class species_model extends CI_Model
{

    function show()
    {
        $siteData = array();
        $this->db->from('species');
        $this->db->select("species_description, species_id");
        $query = $this->db->get();
        if ($query->num_rows()) {
            foreach ($query->result_array() as $row) {
                $siteData[] = [
                    'description' => $row['species_description'],
                    'id' => $row['species_id']
                ];
            }
        }
        return $siteData;
    }

    public function insert($data)
    {
        $this->db->insert('species', $data);
    }

    public function delete($id)
    {
        $this->db->where('species_id', $id);
        $this->db->delete('species');
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