<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = test_data($_POST['id']);
    $name = test_data($_POST['name']);
    $comment = test_data($_POST['comment']);
  

    // dd($id);
    // die;

   if(empty($name)){
    $errors[] = "Name is required";
   }
   if(empty($comment)){
    $errors[] = "Comment is required";
   }
   
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        // $_SESSION['project_name'] = PROJECT_NAME;
        // dd($_SERVER['HTTP_REFERER']);
        header("Location: ?page=post&id=$id" );
    }
      else {

        $sql = "INSERT INTO `comments` (`name`,`comment`,`post_id`,`created_at`) VALUES ('$name', '$comment', '$id',current_timestamp())";
          // dd($sql);
        mysqli_query($conn,$sql);
            $_SESSION['success'] = 'comment Sent Successfully';
            header("Location: ?page=post&id=$id" );
        
     }
}
