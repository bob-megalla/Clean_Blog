<?php
// echo 'test';
require_once(BASE_PATH .'core/connection.php');
/////////// START INSERT DATA IN TABLE 'users' /////////////////////

$password = hash('md5', 'admin');
// $password = password_hash("admin",PASSWORD_DEFAULT);
$sql = "INSERT INTO `users` (`name`, `username`,`type`, `password`) VALUES('admin','admin',1,'$password')";
mysqli_query($conn,$sql);
/////////// END INSERT DATA IN TABLE 'users' /////////////////////

/////////// START INSERT DATA IN TABLE 'categories' /////////////////////
$sql = "INSERT INTO `categories` (`name`) VALUES('Historical')
,('News')
,('Health')
";
mysqli_query($conn,$sql);
/////////// END INSERT DATA IN TABLE 'categories' /////////////////////

/////////// START INSERT DATA IN TABLE 'posts' /////////////////////
$sql = "INSERT INTO `posts` (`title`, `small_desc`,`content`,`user_id`,`category_id`) 
VALUES('Man must explore, and this is exploration at its greatest','Man must explore, and this is exploration at its greatest','Many say exploration is part of our destiny, but it’s actually our duty to future generations Many say exploration is part of our destiny, but it’s actually our duty to future generations',1,1),

('Man must explore, and this is exploration at its greatest','Man must explore, and this is exploration at its greatest','Many say exploration is part of our destiny, but it’s actually our duty to future generations Many say exploration is part of our destiny, but it’s actually our duty to future generations',1,2),

('Man must explore, and this is exploration at its greatest','Man must explore, and this is exploration at its greatest','Many say exploration is part of our destiny, but it’s actually our duty to future generations Many say exploration is part of our destiny, but it’s actually our duty to future generations',1,1),

('Man must explore, and this is exploration at its greatest','Man must explore, and this is exploration at its greatest','Many say exploration is part of our destiny, but it’s actually our duty to future generations Many say exploration is part of our destiny, but it’s actually our duty to future generations',1,2),

('Man must explore, and this is exploration at its greatest','Man must explore, and this is exploration at its greatest','Many say exploration is part of our destiny, but it’s actually our duty to future generations Many say exploration is part of our destiny, but it’s actually our duty to future generations',1,1),

('Man must explore, and this is exploration at its greatest','Man must explore, and this is exploration at its greatest','Many say exploration is part of our destiny, but it’s actually our duty to future generations Many say exploration is part of our destiny, but it’s actually our duty to future generations',1,2)";
mysqli_query($conn,$sql);
/////////// END INSERT DATA IN TABLE 'posts' /////////////////////

/////////// START INSERT DATA IN TABLE 'categories' /////////////////////
$sql = "INSERT INTO `settings` (`site_name`, `logo`,`home_title`,`about_title`,`about_content`,`contact_title`,`facebook`,`linkedin`,`github`) 
VALUES('CLEAN BLOG','log.png','Home Page', 'About Page',
'but it’s actually our duty to future generations Many say exploration is part of our destiny, but it’s actually our duty to future generations','Contact Page','www.facebook.com','www.linkedin.com','www.github.com')
";
mysqli_query($conn,$sql);
/////////// END INSERT DATA IN TABLE 'categories' /////////////////////

echo 'INSERTED DATA INTO TABLES SUCCESSFULLY <br>';