<?php
class Post
{

    function getAllPosts()
    {
        $query = "select * from images order by id desc limit 12";

        $db = new Database();
        $posts = $db->read($query);
        if (is_array($posts)) {
            return $posts;
        }

        return false;
    }

    function getSinglePost($link)
    {
        $DB = new Database();
        $arr['link'] = $link;
        $query = "select * from images where url_address = :link limit 1";

        $data = $DB->read($query, $arr);
        if (is_array($data)) {

            return $data[0];
        }

        return false;
    }
}