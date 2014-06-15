<?php

class Login extends CI_Controller{
    
    public function index(){
        $this->lang->load("login", $this->account->getLang() );
        
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('passhash', 'Password', 'trim|required|md5|callback_check_database');
        $this->theme->setErrorDelimiters();
        $this->theme->setTitle( lang("page_signin_title") );
        if ( $this->form_validation->run() )
        {
            $this->account->saveUserDataToCookies( $this->input->post() );
            redirect( config_item("base_url") . "/" );
        }
        else
        {
            $this->load->view('pages/signin');
        }
    }
    
    function check_database($password){
        $userInfo = array(
            "email" => $this->input->post("email"),
            "passhash" => $password
        );
        if( $this->account->hasUser( $userInfo ) )
            return TRUE;
        else
        {
            $this->form_validation->set_message("check_database", lang('not_valid_email_or_pass'));
            return FALSE;
        }
    }
}

