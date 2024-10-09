<?php 

if($_SERVER['SERVER_NAME'] == 'localhost')
{
	define('DBNAME', 'mvc');
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBDRIVER', '');
	
	define('ROOT', 'http://localhost/MVC/public');

}else
{
	define('DBNAME', 'my_db');
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBDRIVER', '');

	define('ROOT', '.');

}

define('APP_NAME', "Mvc");
define('APP_DESC', "mvc site");

define('DEBUG', true);
