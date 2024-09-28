<?php

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = test_data($_POST['title']);
    $content = test_data($_POST['content']);
    $small_desc = test_data($_POST['small_desc']);
    $status = test_data($_POST['status']);
    $user_id  = test_data($_POST['user_id']);
    $category_id  = test_data($_POST['category_id']);
    

   if(empty($title)){
    $errors[] = "Title is required";
   }
   if(empty($content)){
    $errors[] = "Content is required";
   }
   if(empty($small_desc)){
    $errors[] = "Descriptions is required";
   }
   if(empty($status)){
    $errors[] = "Status is required";
   }
   if(empty($user_id)){
    $errors[] = "User Created is required";
   }
   if(empty($category_id)){
    $errors[] = "Category is required";
   }
   

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        // $_SESSION['project_name'] = PROJECT_NAME;
        // dd($_SERVER['HTTP_REFERER']);
        header("Location: ?admin=add-post" );
    }
      else {

        $sql = "INSERT INTO `posts` (`title`,`content`,`small_desc`,`status`,`user_id`,`category_id`,`created_at`) VALUES ('$title', '$content', '$small_desc','$status','$user_id','$category_id',current_timestamp())";
        //  dd($sql);
        mysqli_query($conn,$sql);
            $_SESSION['success'] = 'Post Added Successfully';
            header("Location: ?admin=posts" );
        
     }
}








//  dd([$title , $content ,$small_desc ,$status ,$user_id,$category_id]);


