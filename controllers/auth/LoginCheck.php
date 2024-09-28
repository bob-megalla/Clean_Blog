<?php session_start(); ?>
<?php
require_once('../../env.php');
require_once(BASE_PATH.'core/functions.php');
require_once(BASE_PATH.'core/connection.php');
require_once(BASE_PATH.'core/database.php');

?>
<?php
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim(test_data($_POST["username"]));
    $password = trim(test_data($_POST["password"]));
    $hashed_password = hash('md5', $password);
//    dd($hashed_password);
    

    if (empty($username)) {
        $errors['username'] = "Please Enter Your Username";
    }
     elseif (is_numeric($username)) {
            $errors['username'] = "Username must Letters Only ";
        } elseif (!is_numeric($username)) {
        if (strlen($username) <= 3) {
            $errors['username'] = "Username must be more than 3 numbers ";

        } elseif (strlen($username) >= 255) {
            $errors['username'] = "Username must be less than 255 numbers ";
        }
    }
    if (empty($password)) {
        $errors['password'] = "Please Enter Your Password";
    } elseif (strlen($password) <= 3) {
        $errors['password'] = "Password must be more than 3 characters ";
    }


    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        // $_SESSION['project_name'] = PROJECT_NAME;
        header("Location: ".$_SERVER['HTTP_REFERER'] );
    }
      else {

      $result = getUser('users',$username,$hashed_password);
    //   dd($result);
    //   die;

        if(empty($result)){
            $errors['username'] = "Username or Password is incorrect";
            $_SESSION['errors'] = $errors;
            // dd($hashed_password);
            // dd($password);
            header("Location: ".$_SERVER['HTTP_REFERER'] );
        }elseif($result['type'] == 1){
            $_SESSION['user_id'] = $result['id'];
            $_SESSION['username'] = $result['username'];
            $_SESSION['userpassword'] = $result['password'];
            $_SESSION['usertype'] = $result['type'];
            $_SESSION['success'] = 'Logged Successfully';
            header("Location: ../../?admin=dashboard" );
        }
     }
}

