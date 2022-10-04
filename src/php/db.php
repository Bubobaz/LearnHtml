<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "dbname";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn ->connect_error){
    die("failed to connect ".$conn->connect_error);
}
?>