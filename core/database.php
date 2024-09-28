<?php
require_once('connection.php');
function getUser($table_name,$username,$password){
    global $conn;
    // dd($username);
    // dd($password);
    $sql = "SELECT * FROM `$table_name` WHERE `username`='$username' AND  `password` = '$password' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($result);
}
function getSettings($table_name){
    global $conn;
    $sql = "SELECT * FROM `$table_name`  LIMIT 1";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($result);
}

function getAll($table_name,$fileds = "*",$limit='',$where=''){
    global $conn;
    $sql = "SELECT $fileds FROM `$table_name` $where $limit ";
    $result = mysqli_query($conn, $sql);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function joinTable($table1,$table2,$field1,$field2,$where=''){

    global $conn;
    $sql = "SELECT $table1.*,$table2.$field2 AS cat_id,$table2.name FROM `$table1` 
            INNER JOIN `$table2` 
            ON `$table1`.$field1 = `$table2`.$field2
            $where 
    ";
    // dd([$sql]);
    $result = mysqli_query($conn, $sql);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function getRow($table_name,$id){
    global $conn;
    $sql = "SELECT * FROM `$table_name` WHERE `id`='$id'  LIMIT 1";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($result);
}