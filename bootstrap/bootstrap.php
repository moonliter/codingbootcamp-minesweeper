


<?php
//define constants containing folder paths
define('SYSTEM_DIR', __DIR__ . '/..'); //Defines the root folder
define('PUBLIC_DIR', SYSTEM_DIR . '/public'); //the public accesible folder
define('VENDOR_DIR', SYSTEM_DIR. '/vendor');
define('APP_DIR',    SYSTEM_DIR. '/app');
define('ROUTES_DIR', SYSTEM_DIR. '/routes');
require_once VENDOR_DIR.'/codingbootcamp/tinymvc/request.php'
?>