<?php

session_start();

$server="localhost";
$username="root";
$password="";
$database="hotel_5";

$server_con=mysql_connect($server,$username,$password);
$db_con=mysql_select_db($database);
if(!$server_con)
{
	echo "Server Not Connected". mysql_error();
	die();

}
if(!$db_con)
{
	echo "Database Not Connected". mysql_error();
	die();
}




?>