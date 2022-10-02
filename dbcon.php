<?php

$host = 'DB_HOST';
$username = 'DB_USERNAME';
$password = 'DB_PASSWORD';
$db_name = 'DB_DATABASE';

$con = mysqli_init();

mysqli_real_connect($con, $host, username, password, db_name, 3306, NULL, MYSQL_ATTR_SSL_CA);

if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

?>
