<?php

//DB

define('DB_HOST', 'localhost');
define('DB_NAME', 'bookstore');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

define('ROOT_PATH', '/Bookstore/');
define('ROOT_URL', 'http://localhost/Bookstore');

/* 
** Function for debugging.
*/


function dnd($data){

	echo "<pre>";
	var_dump($data);
	echo "</pre>";
	die();
}
