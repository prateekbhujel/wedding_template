<?php 

if($_SERVER['SERVER_NAME'] == 'localhost')
{
	/** database config for local **/
	define('DBNAME', 'jackandrose_db');
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBDRIVER', '');
	
	define('ROOT', 'http://localhost/templates/jackandrose/public');

}else
{
	/** database config for online **/
	define('DBNAME', 'jackandrose_db');
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBDRIVER', '');

	define('ROOT', 'https://www.yourwebsite.com');

}

define('APP_NAME', "My Wedding Day");
define('APP_DESC', "Best Day Ever !");

/** true means show errors **/
define('DEBUG', true);
