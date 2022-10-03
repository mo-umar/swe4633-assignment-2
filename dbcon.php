
<?php
/* Development Connection
$con = mysqli_connect("localhost","root","","swe4633_grade_average");

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
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
