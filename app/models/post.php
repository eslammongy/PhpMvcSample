<?php
class Post
{

    function getAllPosts()
    {

        $pageNum = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $pageNum = $pageNum < 1 ? 1 : $pageNum;
        $limit = 1;
        $offset = ($pageNum - 1) * $limit;
        $query = "select * from images order by id desc limit $limit offset $offset";

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