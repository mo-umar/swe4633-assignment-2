<?php

$servername = "DB_HOST";
$username = "DB_USERNAME";
$password = "DB_PASSWORD";
$dbname = "DB_DATABASE";

$con = mysqli_connect($servername, $username, $password, $dbname);

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}

?>
