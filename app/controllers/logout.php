<?php

class Logout extends Controller
{

    function index()
    {

        $data['page_title'] = "Sign Out";

        $user = $this->loadModel("user");
        $user->logout();
    }
}