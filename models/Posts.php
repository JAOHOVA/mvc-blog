<?php

class Posts
{
    use Model;

    public function getPosts()
    {
        if (!is_null($this->pdo)) {
            $stmt = $this->pdo->query('SELECT id, image, title FROM post');
        }
        $posts = [];
        while ($post = $stmt->fetchObject('Post')) {
            $posts[] = $post;
        }

        return $posts;
    }
}