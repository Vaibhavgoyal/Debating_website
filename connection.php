<?php

$host = 'localhost';
$user = 'root';
$pwd = '';

$db = 'website';

$con = mysql_connect($host,$user,$pwd);
$condb = mysql_select_db('website');
if(!$con || !$condb)
{
		die('Connection error');
}


?>