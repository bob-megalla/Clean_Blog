<?php

$errors = [];
// hash('md5', $password);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = test_data($_POST['id']);

    $name = test_data($_POST['name']);
    $username = test_data($_POST['username']);
    $password = test_data($_POST['password']);
    $hashed_password = hash('md5', $password);
  
    //  dd($_REQUEST);
    //  die;

   if(empty($name)){
    $errors[] = "Name is required";
   }
   if(empty($username)){
    $errors[] = "username is required";
   }
  

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        // $_SESSION['project_name'] = PROJECT_NAME;
        // dd($_SERVER['HTTP_REFERER']);
        header("Location: ?admin=users" );
    }
      else {
      
        $sql = "UPDATE `users` SET `name` = '$name' ,`username` = '$username',`password` = '$hashed_password' WHERE id=$id";
          dd($sql);
        mysqli_query($conn,$sql);
            $_SESSION['success'] = 'User Updated Successfully';
            header("Location: ?admin=users" );
        
     }
}








//  dd([$title , $content ,$small_desc ,$status ,$user_id,$category_id]);


