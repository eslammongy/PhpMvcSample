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

        if (isset($_POST['title']) && isset($_FILES['file'])) {
            $uploader = $this->loadModel('upload_file');
            $uploader->uploadFile($_POST, $_FILES);
        }
        $data['page_title'] = "Upload";
        $this->getView("Minimalista/upload", $data);
    }
}