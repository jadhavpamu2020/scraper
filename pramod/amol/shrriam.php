<?php 
//ini_set('display_startup_errors',1);
//ini_set('display_errors',1);
//error_reporting(-1);
error_reporting(-1);
ini_set('display_errors','On');
$homepage = file_get_contents('http://m.lowes.com/product?productId=4766935');
echo $homepage;





?>