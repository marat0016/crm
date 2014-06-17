<?php

class ManagerM extends CI_Model{
    
    function add($data) {
        $this->db->insert('users', $data);
    }
}