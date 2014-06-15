<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class IndexPage extends CI_Controller {

    public function index()
    {
        $this->theme->setTitle( lang("page_index_title") );
        $this->load->view('index');
    }
}