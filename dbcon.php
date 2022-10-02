<?php

$servername = "swe4633-assignment-2-server.mysql.database.azure.com";
$username = "DB_USERNAME";
$password = "DB_PASSWORD";
$dbname = "DB_DATABASE";

$con = mysqli_connect($servername, $username, $password, $dbname);

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}

?>
