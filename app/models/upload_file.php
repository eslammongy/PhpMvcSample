<?php

class UploadFile
{

    function uploadFile($POST, $FILES)
    {
        $db = new Database();
        $_SESSION['error'] == "";
        if (isset($POST['title']) && isset($FILES['file'])) {

            if ($FILES['file']['name'] != "" && $FILES['file']['error'] == 0) {
                $folder = "uploads/";
                if (!file_exists($folder)) {
                    mkdir($folder, 880, true);
                }
                $destination = $folder . $FILES['file']['name'];
                move_uploaded_file($FILES['file']['tmp_name'], $destination);
            } else {
                $_SESSION['error'] == "Error happing when uploading your image";
            }

            if ($_SESSION['error'] == "") {
                $arr['title'] = $POST['title'];
                $arr['description'] = $POST['description'];
                $arr['url_address'] = getRandomStrinMAx(60);
                $arr['image'] = $destination;
                $arr['date'] = date("Y-m-d H:i:s");

                $query = "insert into images (url_address,image,date,description,title) values (:url_address,:image,:date,:description,:tile)";
                $data = $db->write($query, $arr);
                if ($data) {

                    header("Location:" . ROOT . "home");
                    die;
                }
            }
        }
    }
}