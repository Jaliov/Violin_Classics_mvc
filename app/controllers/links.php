<?php

class Links extends Controller

{
    function index() 
    {
        $data['page_title'] = 'Links';
        $this->view("links", $data);
    }
}

?>