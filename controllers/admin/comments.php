<?php 

$AllComments  = getAll('comments');
$settings = getSettings('settings');


require_once(BASE_PATH .'views/backend/comments.php');