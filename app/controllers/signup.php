<?php

class SignUp extends Controller
{

    function index()
    {


        $data['page_title'] = "Signup";

        if (isset($_POST['email'])) {
            $user = $this->loadModel("user");
            $user->signup($_POST);
        } elseif (isset($_POST['username']) && !isset($_POST['email'])) {

            $user = $this->loadModel("user");
            $user->login($_POST);
        }

        $this->getView("Minimalista/signup", $data);
    }
}