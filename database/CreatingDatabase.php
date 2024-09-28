<?php
$conn = mysqli_connect("localhost","root","");
// dd($conn);
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}
$database_name = DATABASE_NAME;
$sql = "CREATE DATABASE IF NOT EXISTS `$database_name`";
echo 'Database created successfully <br>';
mysqli_query($conn,$sql);

require_once(BASE_PATH . 'database/CreatingTables.php');



