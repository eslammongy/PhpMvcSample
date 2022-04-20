<?php

class User
{

    function login($POST)
    {
        $db = new Database();
        $_SESSION['error'] = "";
        if (isset($POST['username']) && isset($POST['password'])) {
            $userArr['username'] = $POST['username'];
            $userArr['password'] = $POST['password'];
            $query = "select * from users where username = :username && password = :password limit 1";
            $data = $db->read($query, $userArr);

            if (is_array($data)) {
                // printed user logged in
                $_SESSION['id'] = $data[0]->id;
                $_SESSION['user_name'] = $data[0]->username;
                $_SESSION['user_url'] = $data[0]->url_address;

                header("Location:" . ROOT . "home");
                die;
            } else {
                $_SESSION['error'] = "wrong username and password";
            }
        } else {
            $_SESSION['error'] = "please enter the valid username and password";
        }
    }

    function signup($POST)
    {

        $DB = new Database();

        $_SESSION['error'] = "";
        if (isset($POST['username']) && isset($POST['password'])) {

            $arr['username'] = $POST['username'];
            $arr['password'] = $POST['password'];
            $arr['email'] = $POST['email'];
            $arr['url_address'] = getRandomStrinMAx(60);
            $arr['date'] = date("Y-m-d H:i:s");

            $query = "insert into users (username,password,email,url_address,date) values (:username,:password,:email,:url_address,:date)";
            $data = $DB->write($query, $arr);
            if ($data) {

                header("Location:" . ROOT . "login");
                die;
            }
        } else {

            $_SESSION['error'] = "please enter a valid username and password";
        }
    }

    function checkUserLogin()
    {
        $db = new Database();
        if (isset($_SESSION['user_url'])) {
            $userArr['user_url'] = $_SESSION['user_url'];
            $query = "select * from users where url_address = :user_url limit 1";
            $data = $db->read($query, $userArr);

            if (is_array($data)) {
                // printed user logged in
                $_SESSION['id'] = $data[0]->id;
                $_SESSION['user_name'] = $data[0]->username;
                $_SESSION['user_url'] = $data[0]->url_address;

                return true;
            }
        }

        return false;
    }
}