<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_event extends CI_Model {
    function getDataEvent(){
        $query = $this->db->get('events');
        return $query->result();
    }
}