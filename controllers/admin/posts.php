<?php

$AllPosts = getAll('posts');
$settings = getSettings('settings');



// dd($AllPosts);

require_once(BASE_PATH . '/views/backend/posts.php');