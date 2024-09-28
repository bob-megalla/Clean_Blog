<?php 
$database_name = DATABASE_NAME;
$conn = mysqli_connect("localhost","root","",$database_name);
// dd($conn);
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}
 

