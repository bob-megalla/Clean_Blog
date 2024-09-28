<?php

// echo BASE_PATH;
// require_once(BASE_PATH."../core/database.php");

function dd($data){
    echo'<pre>';
    var_dump($data);
    echo'</pre>';
}

function url($path){
    return $path;
    // return BASE_URL . $path;
}

function test_data($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    // dd($data);
    return $data;
}

function activeLink($active_id,$id){
    if($active_id == $id){
        return 'active-link';
    }
    return '';
}
function activeAdminLink($active_id,$id){
    if($active_id == $id){
        return 'active';
    }
    return '';
}