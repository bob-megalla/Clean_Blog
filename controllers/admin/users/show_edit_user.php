<?php 
$settings = getSettings('settings');

$Selected_user = getRow('users',$_GET['id']);

require_once (BASE_PATH . 'views/backend/users/edit-users.php');