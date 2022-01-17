<?php
require_once ('models/Posts.php');
$posts = new Posts();
$posts = $posts->listerPosts();
require_once ('views/posts-list.php');
