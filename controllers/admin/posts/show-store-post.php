<?php

$settings = getSettings('settings');
$AllCategories = getAll('categories');
$AllUsers = getAll('users');


require_once(BASE_PATH . 'views/backend/posts/add-post.php');
