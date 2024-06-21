<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Employee extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model("crud_model");
    }

    public function index()
    {
        $this->load->view("home");
    }

    public function records()
    {
        $data['employees'] = $this->crud_model->employees();
        $this->load->view("records", $data);
    }

    public function store_data()
    {
        $data = array(
            'fname' => $this->input->post('fname'),
            'lname' => $this->input->post('lname'),
            'email' => $this->input->post('email'),
            'job_type' => $this->input->post('job_type'),
            'salary' => $this->input->post('salary'),
            'joining_date' => $this->input->post('date'),
        );
        if ($this->crud_model->add_employee($data)) {
            redirect('employee/records');
        } else echo 'Failed To insert';
    }

}
?>