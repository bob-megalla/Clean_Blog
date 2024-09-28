<?php
require_once('core/database.php');
require_once('core/functions.php');
$active_id = 0;
if(isset($_GET['category']) && is_numeric($_GET['category'])){
    $categoryId = $_GET['category'];
    // $posts = getAll('posts', where:"WHERE `category_id` = $categoryId");
    $posts = joinTable("posts","categories","category_id","id","WHERE `category_id` = '$categoryId' ");

    $active_id = $categoryId;
}else{
    // $posts = getAll('posts');
    $posts = joinTable("posts","categories","category_id","id" , "WHERE `status` = 'active'");
   
}
$categories = getAll('categories');
require_once('views/frontend/posts.php');