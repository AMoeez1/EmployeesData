<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Test_model extends CI_Model {
    public function index() {
        $a = 10;
        $b = 10;
        return $a + $b;
    }
}
?>
