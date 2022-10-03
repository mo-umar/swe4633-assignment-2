<?php
/* Development Connection
$con = mysqli_connect("localhost","root","","swe4633_grade_average");

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}
*/

// Remote Connection

$con = mysqli_connect("us-cdbr-east-06.cleardb.net","b6792ab368ddb3","bda03ad9","heroku_c43a872891278a3");

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}

?>