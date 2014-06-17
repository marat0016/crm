<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manager extends CI_Controller {

    public function add()
    {
        $this->load->model('User/managerM');
        $this->load->model('User/account');
        $this->theme->setTitle("Добавление менеджера");
        
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|md5|callback_check_database');
        if ( $this->form_validation->run() )
        {
            $data = array(
                'email' => $this->input->post("email"),
                'passhash' => $this->input->post("password"),
                'name' => $this->input->post("name"),
                'class' => "0",
                'cloud_id' => $this->account->getInfo()->cloud_id
            );
            $this->managerM->add($data);
            $this->load->view('user/manager/add');
        }
        else
        {
            $this->load->view('user/manager/add');
        }
    }
    
    function check_database($password){
        $userInfo = array(
            "email" => $this->input->post("email"),
            "passhash" => $password
        );
        if( $this->account->hasUser( $userInfo ) )
            return FALSE;
        else
        {
           // $this->form_validation->set_message("check_database", lang('not_valid_email_or_pass'));
            return TRUE;
        }
    }
    
}