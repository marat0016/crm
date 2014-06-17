<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Deals extends CI_Controller {

    public function add()
    {
        $this->load->model("Other/extraFields");
        $this->theme->setTitle( lang("page_index_title") );
        $this->load->view('deals/new');
    }
}