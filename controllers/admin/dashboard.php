<?php
$user_data = getRow('users',$_SESSION['user_id']);
$AllUsers = getAll('users');
$AllPosts = getAll('posts');
$AllMessages = getAll('messages');
$AllCategories = getAll('categories');
$settings = getSettings('settings');
require_once(BASE_PATH.'/views/backend/dashboard.php');