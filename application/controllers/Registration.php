<?php 
defined("BASEPATH") or exit("No direct script allowed");

class Registration extends CI_Controller{
    public function index(){
        $this->load->view("sign_up");
        $this->load->database();
    }

    public function login(){
        $this->load->view("login");
        $this->load->database();
    }
}

?>