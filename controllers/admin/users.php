<?php
$settings = getSettings('settings');
$AllUsers  = getAll(table_name: 'users');

require_once(BASE_PATH . 'views/backend/users.php');