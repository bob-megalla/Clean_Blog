<?php
require_once('core/database.php');
if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $post_id = $_GET['id'];
    $post = getRow('posts',$post_id);
    $post_title = $post['title'];
}else{
   echo "not found";
   die;
}


require_once('views/frontend/post.php');