<?php

$settings = getSettings('settings');
$AllCategories = getAll('categories');
$AllUsers = getAll('users');
$Selected_Post = getRow('posts',$_GET['id']);


require_once(BASE_PATH . 'views/backend/posts/edit-post.php');
