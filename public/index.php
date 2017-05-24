<?php


include '../bootstrap/bootstrap.php';


//echo PUBLIC_DIR.'<br>';
//echo __FILE__;
//echo __DIR__;
//echo SYSTEM_DIR;

echo request::GET('route', '404');
echo ' I will playing ' . request::get('name', 'with my hands');

?>
