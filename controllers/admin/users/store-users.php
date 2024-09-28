<?php

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

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
  $errors[] = "Username is required";
 }
 if(empty($password)){
  $errors[] = "Password is required";
 }


 
   

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        // $_SESSION['project_name'] = PROJECT_NAME;
        // dd($_SERVER['HTTP_REFERER']);
        header("Location: ?admin=show_store_users" );
    }
      else {

        $sql = "INSERT INTO `users` (`name`,username,password) VALUES ('$name','$username','$hashed_password')";
        //  dd($sql);
        mysqli_query($conn,$sql);
            $_SESSION['success'] = 'User Added Successfully';
            header("Location: ?admin=users" );
        
     }
}








//  dd([$title , $content ,$small_desc ,$status ,$user_id,$category_id]);


