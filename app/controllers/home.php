<?php

class Home extends Controller{

    function index(){
        $image = $this->loadModel("image_class");
        showURL($image);
        $this->getView("home");
    }


}