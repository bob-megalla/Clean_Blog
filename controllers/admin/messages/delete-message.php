<?php 
// dd($_GET['id']) ;
$id = $_GET['id'];
// dd($_GET['id']);
// die;

if (!isset($_GET['id'])) {
    $errors[]='Error!! Please try again Later';
    $_SESSION['errors'] = $errors;
    // $_SESSION['project_name'] = PROJECT_NAME;
    // dd($_SERVER['HTTP_REFERER']);
    header("Location: ?admin=messages" );
}else {
    // DELETE FROM `posts` WHERE id='12';
    $sql = "DELETE FROM `messages` WHERE id = $id";  
    // dd($sql); 
    mysqli_query($conn,$sql);
        $_SESSION['success'] = 'Message Deleted Successfully';
        header("Location: ?admin=messages" );
    
 }

