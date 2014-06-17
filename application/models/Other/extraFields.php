<?php

class ExtraFields extends CI_Model{
    
    public function changeInClouds($json = ""){
        $cloud_id = $this->account->getInfo()->cloud_id;
        $data = array("deal_fields" => $json);
        $this->db->where("id", $cloud_id);
        $this->db->update("clouds", $data);
    }
    
    public function loadFromJson($json = ""){
        $fields = json_decode($json);
        foreach($fields AS $field){ //Разбиваем массив на поля
            switch($field[1]){
                case "text": $this->loadText($field[0]); break;
                case "number": $this->loadNumber($field[0]); break;
                case "flag": $this->loadFlag($field[0]); break;
                case "list": $this->loadList($field[0], $field[2]); break;
                case "multilist": $this->loadMultiList($field[0], $field[2]); break;
                case "date": $this->loadDate($field[0]); break;
                case "url": $this->loadUrl($field[0]); break;
                case "switch": $this->loadSwitch($field[0], $field[2]); break;
            }
        }
    }
    
    /*
     * loads fields
     */
    public function loadText($name){
        $this->load->view("deals/ExtraFields/text", array("name" => $name));
    }
    
    public function loadNumber($name){
        $this->load->view("deals/ExtraFields/number", array("name" => $name));
    }
    
    public function loadFlag($name){
        $this->load->view("deals/ExtraFields/flag", array("name" => $name));
    }
    
    public function loadList($name, $values = array()){
        $this->load->view("deals/ExtraFields/list", array("name" => $name, "values" => $values));
    }
    
    public function loadMultiList($name, $values = array()){
        $this->load->view("deals/ExtraFields/multilist", array("name" => $name, "values" => $values));
    }
    
    public function loadDate($name){
        $this->load->view("deals/ExtraFields/date", array("name" => $name));
    }
    
    public function loadUrl($name){
        $this->load->view("deals/ExtraFields/url", array("name" => $name));
    }
    
    public function loadSwitch($name, $values = array()){
        $this->load->view("deals/ExtraFields/switch", array("name" => $name, "values" => $values));
    }
    
}