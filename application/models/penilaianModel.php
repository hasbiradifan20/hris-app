<?php

class PenilaianModel Extends CI_Controller{

    public function get_data($table){
        return $this->db->get($table);
    } 
}
?>