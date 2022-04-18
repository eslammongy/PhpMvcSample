<?php

class Upload extends Controller
{

    function index()
    {

        $data['page_title'] = "Upload";
        $this->getView("Minimalista/upload", $data);
    }
}