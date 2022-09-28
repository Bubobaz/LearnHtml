<?php
$servername = "localhost";
$username = "UserName";
$password = "Password";
$dbname = "db_name";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn ->connect_error){

die("failed to connect ".$conn->connect_error);

}
?>
