<?php

class ChangeExtraFields extends CI_Controller{
    
    public function index(){
        $this->load->model("Other/extraFields");
        if(!$_POST)
        {
            echo "0";
            return;
        }
        $this->extraFields->changeInClouds( $this->input->post("json") );
        echo "1";
    }
    
}