<?php
class species_model extends CI_Model
{
    public function insert($data)
    {
        $this->db->insert('species', $data);
    }

    public function read()
    {
        $dbdata = array();
        $this->db->from('species');
        $this->db->select('*');
        $query = $this->db->get();
        if ($query->num_rows()) {
            foreach ($query->result_array() as $row) {
                $dbdata[] = array(
                    'species_id' => $row['species_id'],
                    'species_description' => $row['species_description']
                );
            }
        }
        return $dbdata;
    }

    public function show_species(){
        $query = $this->db->get('species');
        $query_result = $query->result();
        return $query_result;
    }

    public function show_species_id($data){
        $this->db->select('*');
        $this->db->from('species');
        $this->db->where('species_id', $data);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }

    public function update_species_id($id,$data){
        $this->db->where('species_id', $id);
        $this->db->update('species', $data);
    }
    public function delete($id)
    {
        $this->db->where('species_id', $id);
        $this->db->delete('species');
    }
}
