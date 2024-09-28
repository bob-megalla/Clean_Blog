<?php

$settings = getSettings('settings');
$AllCategories  = getAll(table_name: 'categories');

require_once(BASE_PATH . 'views/backend/categories.php');
