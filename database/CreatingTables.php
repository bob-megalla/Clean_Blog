<?php
require_once(BASE_PATH . 'core/connection.php');

//////// START CREATING USERS TABLE //////////////
$sql = "CREATE TABLE IF NOT EXISTS `users`(
    `id` int(11)  PRIMARY KEY  AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `username` varchar(255) UNIQUE NOT NULL,
    `type` TINYINT NOT NULL default(1),
    `password` varchar(255) NOT NULL
)";

mysqli_query($conn,$sql);
//////// END CREATING USERS TABLE //////////////

//////// START CREATING CATEGORIES TABLE //////////////
$sql = "CREATE TABLE IF NOT EXISTS `categories`(
    `id` int(11)  PRIMARY KEY  AUTO_INCREMENT,
    `name` varchar(255) NOT NULL
)";

mysqli_query($conn,$sql);
//////// END CREATING CATEGORIES TABLE //////////////

//////// START CREATING POSTS TABLE //////////////
$sql = "CREATE TABLE IF NOT EXISTS `posts`(
    `id` int(11)  PRIMARY KEY  AUTO_INCREMENT,
    `title` varchar(255) NOT NULL,
    `content` TeXT  NOT NULL,
    `small_desc` VARCHAR(250) NOT NULL,
    `status` ENUM('active','not_active') NOT NULL DEFAULT('active'),
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `user_id` int(11) NOT NULL,
    `category_id` int(11) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (category_id) REFERENCES categories(id)
)";

mysqli_query($conn,$sql);
//////// END CREATING POSTS TABLE //////////////

//////// START CREATING MESSAGES TABLE //////////////
$sql = "CREATE TABLE IF NOT EXISTS `messages`(
    `id` int(11)  PRIMARY KEY  AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `phone` varchar(255) NOT NULL,
    `content` TEXT NOT NULL,
    `is_readed` int(11) DEFAULT 0,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

mysqli_query($conn,$sql);
//////// END CREATING MESSAGES TABLE //////////////

//////// START CREATING SETTINGS TABLE //////////////
$sql = "CREATE TABLE IF NOT EXISTS `settings`(
    `id` int(11)  PRIMARY KEY  AUTO_INCREMENT,
    `site_name` varchar(255) NOT NULL,
    `logo` varchar(255) NOT NULL,
    `home_title` varchar(255) NOT NULL,
    `about_title` varchar(255) NOT NULL,
    `about_content` TEXT NOT NULL,
    `contact_title` varchar(255) NOT NULL,
    `facebook` varchar(255) NOT NULL,
    `linkedin` varchar(255) NOT NULL,
    `github` varchar(255) NOT NULL
)";

mysqli_query($conn,$sql);
//////// END CREATING SETTINGS TABLE //////////////

//////// START CREATING COMMENTS TABLE //////////////
$sql = "CREATE TABLE IF NOT EXISTS `comments`(
    `id` int(11)  PRIMARY KEY  AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `comment` TEXT NOT NULL,
    `post_id` int(11) NOT NULL,
    `is_readed` int(11) DEFAULT 0,
    FOREIGN KEY (post_id) REFERENCES posts(id),
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP

)";

mysqli_query($conn,$sql);
//////// END CREATING COMMENTS TABLE //////////////

echo('tables created succussfully <br>');






