<?php

class Home extends Controller
{

    function index()
    {

        $data['page_title'] = "Home";
        $posts = $this->loadModel("post");
        $result = $posts->getAllPosts();
        $pagination = $this->loadModel('Pagination');

        $data['prev_page'] = $pagination->generate_link($pagination->current_page_number() - 1);
        $data['next_page'] = $pagination->generate_link($pagination->current_page_number() + 1);
        $data['posts'] = $result;
        $image_class = $this->loadModel('image_class');
        if (is_array($data['posts'])) {
            foreach ($data['posts'] as $key => $value) {
                $currentImage = $data['posts'][$key]->image;
                $data['posts'][$key]->image = $image_class->get_thumbnail($currentImage);
            }
        }

        $this->getView("Minimalista/index", $data);
    }
}