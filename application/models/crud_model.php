<?php
class Crud_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function employees()
    {
        return $this->db->get("employee")->result_array();
    }

    public function add_employee($data)
    {
        if ($this->db->insert("employee", $data))
            return true;
        else {
            // return $this->db->error();
            log_message('error', 'Failed to insert employee: ' . $this->db->error()['message']);
        }
    }
}


?>