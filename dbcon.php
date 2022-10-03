
<<<<<<< HEAD
<?php
/* Development Connection
$con = mysqli_connect("localhost","root","","swe4633_grade_average");
=======
$host = 'DB_HOST';
$username = 'DB_USERNAME';
$password = 'DB_PASSWORD';
$db_name = 'DB_DATABASE';
>>>>>>> 12a216638d3be5437a4783f9dad07c7f2e7fa396

$con = mysqli_init();

$con=mysqli_init(); [mysqli_ssl_set($con, NULL, NULL, {MYSQL_ATTR_SSL_CA}, NULL, NULL);] mysqli_real_connect($con, $host, $username, $password, $db_name, 3306);

if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
*/

// Remote Connection
$host = 'us-cdbr-east-06.cleardb.net';
$user = 'b6792ab368ddb3';
$pass = 'bda03ad9';
$db = 'heroku_c43a872891278a3';
$charset = 'utf8mb4';

$con = mysqli_connect($host,$user,$pass,$db,$charset);

?>
