<?php

class Home extends Controller{

    function index(){
      
        $data['page_title'] = "Home";
        $this->getView("Minimalista/index", $data);
    }


}