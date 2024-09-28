<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = test_data($_POST['name']);
    $email = test_data($_POST['email']);
    $phone = test_data($_POST['phone']);
    $content = test_data($_POST['content']);

    // dd($_REQUEST);
    // die;

   if(empty($name)){
    $errors[] = "Name is required";
   }
   if(empty($email)){
    $errors[] = "Email is required";
   }
   if(empty($phone)){
    $errors[] = "Phone is required";
   }
   if(empty($content)){
    $errors[] = "Message is required";
   }
   
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        // $_SESSION['project_name'] = PROJECT_NAME;
        // dd($_SERVER['HTTP_REFERER']);
        header("Location: ?page=contact" );
    }
      else {

        $sql = "INSERT INTO `messages` (`name`,`email`,`phone`,`content`,`created_at`) VALUES ('$name', '$email', '$phone','$content',current_timestamp())";
          // dd($sql);
        mysqli_query($conn,$sql);
            $_SESSION['success'] = 'Messages Sent Successfully';
            header("Location: ?page=contact" );
        
     }
}
