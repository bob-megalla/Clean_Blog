<?php
$user_data = getRow('users',$_SESSION['user_id']);
$AllUsers = getAll('users');
$AllPosts = getAll('posts');
$AllMessages = getAll('messages');
$unreaded_messages = getAll('messages',where:"WHERE `is_readed` = 0");


$AllCategories = getAll('categories');
$settings = getSettings('settings');
require_once(BASE_PATH.'/views/backend/dashboard.php');