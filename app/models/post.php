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
}