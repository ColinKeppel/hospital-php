<?php


class User_model extends CI_Model
{


    function show()
    {
        $siteData = array();
        $this->db->from('clients');
        $this->db->select("client_firstname, client_lastname, client_id");

        $query = $this->db->get();
        if ($query->num_rows()) {
            foreach ($query->result_array() as $row) {
                $siteData[] = [
                    'firstname' => $row['client_firstname'],
                    'lastname' => $row['client_lastname'],
                    'id' => $row['client_id']
                ];
            }
        }
        return $siteData;
    }


    public function insert($data)
    {
        // Inserting into table
        $this->db->insert('clients', $data);
        // Return the id of inserted row
        return $idOfInsertedData = $this->db->insert_id();
    }

    public function delete($id)
    {
        $this->db->where('client_id', $id);
        $this->db->delete('clients');
    }

    public function show_id($data)
    {
        $this->db->select('*');
        $this->db->from('clients');
        $this->db->where('client_id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function update($id,$data){
        $this->db->where('client_id',$id);
        $this->db->update('clients', $data);
    }


}