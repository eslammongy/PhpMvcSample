<?php

class Single_post extends Controller
{

    function index($link = '')
    {

        if ($link == "") {
            $data['page_title'] = "Image Not Found";
            $this->getView("Minimalista/not_found", $data);
        } else {
            $posts = $this->loadModel("post");
            $result = $posts->getSinglePost($link);

            $data['post'] = $result;
            // $image_class = $this->loadModel('image_class');
            $data['page_title'] = "Single Post";
            $this->getView("Minimalista/single_post", $data);
        }
    }
}