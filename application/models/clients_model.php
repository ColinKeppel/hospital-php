<?php
    class clients_model extends CI_Model
    {
        public function insert($data)
        {
            $this->db->insert('clients', $data);
        }

        public function read()
        {
            $dbdata = array();
            $this->db->from('clients');
            $this->db->select('*');
            $query = $this->db->get();
            if ($query->num_rows()) {
                foreach ($query->result_array() as $row) {
                    $dbdata[] = array(
                        'client_id' => $row['client_id'],
                        'client_firstname' => $row['client_firstname'],
                        'client_lastname' => $row['client_lastname'],
                        'client_email' => $row['client_email'],
                        'client_number' => $row['client_number']
                    );
                }
            }
            return $dbdata;
        }

        public function show_clients(){
            $query = $this->db->get('clients');
            $query_result = $query->result();
            return $query_result;
        }

        public function show_client_id($data){
            $this->db->select('*');
            $this->db->from('clients');
            $this->db->where('client_id', $data);
            $query = $this->db->get();
            $result = $query->result_array();
            return $result;
        }

        public function update_client_id($id,$data){
        $this->db->where('client_id', $id);
        $this->db->update('clients', $data);
    }
        public function delete($id)
        {
            $this->db->where('client_id', $id);
            if (! $this->db->delete('clients') ) {
                //echo $this->db->error();
                $this->session->set_flashdata('error', 'Kon het record niet verwijderen; mogelijk zijn er nog patient records voor deze client');
                return false;
            }
            return true;
        }
    }
