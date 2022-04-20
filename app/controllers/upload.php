<?php

class Upload extends Controller
{

    function index()
    {
        header("Location:" . ROOT . "upload/image");
        die;
    }

    function image()
    {

        $user = $this->loadModel("user");
        $result = $user->checkUserLogin();
        if (!$result) {
            header("Location:" . ROOT . "login");
            die;
        }
        $data['page_title'] = "Upload";
        $this->getView("Minimalista/upload", $data);
    }
}