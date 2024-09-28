<?php

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $id = test_data($_GET['id']);


  
    //  dd($id);
    //  die;

   if(empty($id)){
    $errors[] = "Error Please Try Again Later";
   }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        // $_SESSION['project_name'] = PROJECT_NAME;
        // dd($_SERVER['HTTP_REFERER']);
        header("Location: ?admin=messages" );
    }
      else {
      
        $sql = "UPDATE `messages` SET `is_readed` = '1' WHERE id=$id";
          dd($sql);
        mysqli_query($conn,$sql);
            $_SESSION['success'] = 'Message Read Successfully';
            header("Location: ?admin=messages" );
        
     }
}








//  dd([$title , $content ,$small_desc ,$status ,$user_id,$category_id]);


