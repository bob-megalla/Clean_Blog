<?php 
$settings = getSettings('settings');

$Selected_Cat = getRow('categories',$_GET['id']);

require_once (BASE_PATH . 'views/backend/categories/edit-category.php');