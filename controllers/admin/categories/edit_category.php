<?php

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = test_data($_POST['id']);

    $name = test_data($_POST['name']);
  
    //  dd($id);
    //  die;

   if(empty($name)){
    $errors[] = "Category Name is required";
   }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        // $_SESSION['project_name'] = PROJECT_NAME;
        // dd($_SERVER['HTTP_REFERER']);
        header("Location: ?admin=categories" );
    }
      else {
      
        $sql = "UPDATE `categories` SET `name` = '$name' WHERE id=$id";
          dd($sql);
        mysqli_query($conn,$sql);
            $_SESSION['success'] = 'Category Updated Successfully';
            header("Location: ?admin=categories" );
        
     }
}








//  dd([$title , $content ,$small_desc ,$status ,$user_id,$category_id]);


