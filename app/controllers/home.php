<?php

class Home extends Controller{

    function index(){
        $db_object = new Database();
        $db_object->db_connect();
        $this->getView("home");
    }


}