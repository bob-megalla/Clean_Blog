<?php 
require_once('core/database.php');

$posts = getAll('posts',limit:"LIMIT 10");

require_once('views/frontend/index.php');