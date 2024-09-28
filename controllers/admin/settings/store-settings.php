<?php

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = test_data($_POST['id']);

    $site_name = test_data($_POST['site_name']);
    $logo = test_data($_POST['logo']);
    $home_title = test_data($_POST['home_title']);
    $about_title = test_data($_POST['about_title']);
    $about_content  = test_data($_POST['about_content']);
    $contact_title  = test_data($_POST['contact_title']);
    $facebook  = test_data($_POST['facebook']);
    $linkedin  = test_data($_POST['linkedin']);
    $github  = test_data($_POST['github']);
    //   dd($_REQUEST);
    //  die;

   if(empty($site_name)){
    $errors[] = "site_name is required";
   }
   if(empty($logo)){
    $errors[] = "logo is required";
   }
   if(empty($home_title)){
    $errors[] = "Home Title is required";
   }
   if(empty($about_title)){
    $errors[] = "About Title is required";
   }
   if(empty($about_content)){
    $errors[] = "About Content Created is required";
   }
   if(empty($contact_title)){
    $errors[] = "Content Title is required";
   }
   if(empty($facebook)){
    $errors[] = "Facebook is required";
   }
   if(empty($linkedin)){
    $errors[] = "Linkedin is required";
   }
   if(empty($github)){
    $errors[] = "Github is required";
   }
   

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        // $_SESSION['project_name'] = PROJECT_NAME;
        // dd($_SERVER['HTTP_REFERER']);
        header("Location: ?admin=settings" );
    }
      else {
      
        $sql = "UPDATE `settings` SET `site_name` = '$site_name' , `logo` = '$logo',`home_title` = '$home_title',`about_title` ='$about_title',`about_content`='$about_content',`contact_title`='$contact_title',`facebook`='$facebook',`linkedin`='$linkedin',`github`='$github' WHERE id=$id";
          dd($sql);
     
        mysqli_query($conn,$sql);
            $_SESSION['success'] = 'Settings Updated Successfully';
            header("Location: ?admin=settings" );
        
     }
}








//  dd([$title , $content ,$small_desc ,$status ,$user_id,$category_id]);


