<?php 
require_once('env.php');
require_once('core/functions.php');
if(isset($_GET['database'])){
    $database_name = $_GET['database']; 
  require_once(BASE_PATH . 'database/CreatingDatabase.php');
}
if(isset($_GET['insert_data'])){
  $database_name = $_GET['insert_data']; 
require_once(BASE_PATH . 'database/InsertInTables.php');
}
// require_once('env.php');

require_once(BASE_PATH . 'routes/web.php');





