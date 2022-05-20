<?php

class Views extends Controller

{
    function index() 
    {
        $data['page_title'] = 'Views';
        $this->view("views", $data);
    }
}

?>