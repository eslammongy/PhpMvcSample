<?php

class Login extends Controller
{

    function index()
    {

        $data['page_title'] = "Login";
        $this->getView("Minimalista/login", $data);
    }
}