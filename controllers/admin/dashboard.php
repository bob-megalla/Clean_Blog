<?php
$user_data = getRow('users',$_SESSION['user_id']);
$AllUsers = getAll('users');
$AllPosts = getAll('posts');
$AllMessages = getAll('messages');
$AllComments = getAll('comments');
// $unreaded_messages = getAll('messages',where:"WHERE `is_readed` = 0");
// dd(count($unreaded_comments));
// die;

$AllCategories = getAll('categories');
$settings = getSettings('settings');
require_once(BASE_PATH.'/views/backend/dashboard.php');