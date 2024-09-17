<?php 

$host = 'localhost'; // hostnames
$user = 'root'; // database usernames
$pwd = ''; // database passwords
$database = 'rsdb'; //database name

// connection to database
$konek = mysqli_connect($host, $user, $pwd, $database);

if(!$konek) {
   die('Could not connect to database:' .mysql_error());
} 
