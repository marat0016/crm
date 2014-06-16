<?php

class Theme extends CI_Model {

    private $title = '';

    function __construct()
    {
        parent::__construct();
    }
    
    public function setTitle($t){
        $this->title = $t;
    }
    
    public function getTitle(){
        return $this->title;
    }
    
    /*
     * Метод создает фон для ошибки по выбранным параметрам
     */
    public function setErrorDelimiters($type = 'warning', $existCloseButton = true){
        $this->form_validation->set_error_delimiters('<div class="alert alert-'.$type.' alert-block">'.($existCloseButton ? '<button type="button" class="close" data-dismiss="alert">&times;</button>':'').'<p>', '</p> </div>');
    }

}