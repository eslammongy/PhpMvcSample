<?php

class SignUp extends Controller
{

    function index()
    {

        $data['page_title'] = "SignUp";
        $this->getView("Minimalista/signup", $data);
    }
}