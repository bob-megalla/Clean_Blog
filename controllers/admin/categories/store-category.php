<?php

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = test_data($_POST['name']);

    

   if(empty($name)){
    $errors[] = "Category Name is required";
   }
 
   

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        // $_SESSION['project_name'] = PROJECT_NAME;
        // dd($_SERVER['HTTP_REFERER']);
        header("Location: ?admin=show_store_categories" );
    }
      else {

        $sql = "INSERT INTO `categories` (`name`) VALUES ('$name')";
        //  dd($sql);
        mysqli_query($conn,$sql);
            $_SESSION['success'] = 'Category Added Successfully';
            header("Location: ?admin=categories" );
        
     }
}








//  dd([$title , $content ,$small_desc ,$status ,$user_id,$category_id]);


