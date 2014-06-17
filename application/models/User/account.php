<?php

class Account extends CI_Model{
    
    private $lang = "russian";
    private $isLogin = false;
    private $info = null;

    public function __construct(){
        parent::__construct();
        //При каждой загрузке страницы, мы проверяем, залогинен ли он
        $info = $this->getUserInfo( 
                array("email" => $this->session->userdata("email"), "passhash" => $this->session->userdata("passhash"))
                );
        $this->info = $info->row();
        if($info->num_rows() > 0)
        {
            $this->isLogin = true;
        }
        //Если пользователь не залонинен, то перенаправляем его на страницу авторизации
        if(!$this->isLogin() && $this->uri->segment(1) != "user" && $this->uri->segment(2) != "login")
        {
            redirect("user/login");
        }
    }
    
    public function getInfo(){
        return $this->info;
    }
    
    public function isLogin(){
        return $this->isLogin;
    }
    
    private function setLang($l){
        $this->lang = $l;
    }
    
    public function getLang(){
        return $this->lang;
    }
    
    public function getUserInfo($array = array(), $limit = 0){        
        if(count($array) != 0)
            foreach($array AS $key => $value)
                $this->db->where($key, $value);        
        if($limit)
            $this->db->limit($limit);
        return $this->db->get("users");
    }
    
    //Проверяет наличие пользователя в БД по емайлу и паролю
    public function hasUser($array = array()){
        if(empty($array["email"]) || empty($array["passhash"]))
            return false;
        $query = $this->getUserInfo( array('email' => $array["email"], "passhash" => $array["passhash"] ) );
        if($query->num_rows() > 0)
            return TRUE;
        return FALSE;
    }
    
    //Получаем информацию об облаке пользователя
    public function getCloudInfo(){
        $this->db->where("id", $this->getInfo()->cloud_id);
        $query = $this->db->get("clouds");
        return $query->row();
    }
    
    public function saveUserDataToCookies($array = array()){
        $this->session->set_userdata( $array );
    }
}