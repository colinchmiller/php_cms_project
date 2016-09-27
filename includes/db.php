<?php

//put values of the connection in an array and make them constant and more secure


//For Heroku and JawsDB
// $url = getenv('JAWSDB_URL');
// $dbparts = parse_url($url);
//
// $hostname = $dbparts['host'];
// $username = $dbparts['user'];
// $password = $dbparts['pass'];
// $database = ltrim($dbparts['path'],'/');
//
// //create connection
// $connection = new mysqli($hostname, $username, $password, $database);
//
// //check connection
// if($connection->connect_error){
//   die("Connection failed: " . $connection->connect_error);
// }

// For Local Hosting
$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "CMS";

foreach($db as $key => $value){

  define(strtoupper($key), $value);

}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if(!$connection){
  //need to place an error message in here indicating db connection problem
}



 ?>
