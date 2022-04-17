<?php

class Contact extends Controller{

    function index(){
         $data['page_title'] = "Contact";
        $this->getView("Minimalista/contact", $data);
    }

}