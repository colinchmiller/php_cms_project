<?php

//put values of the connection in an array and make them constant and more secure
$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "CMS";

foreach($db as $key => $value){

  define(strtoupper($key), $value);

}


$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if($connection){
  echo "We are connected to CMS";
}



 ?>
