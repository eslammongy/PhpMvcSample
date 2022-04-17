<?php

class Home extends Controller{

    function index(){
        $db_object = new Database();
        $data['result'] = $db_object->read("SELECT * FROM images");
        $data['page_title'] = "Home Screen";
        $this->getView("home", $data);
    }


}