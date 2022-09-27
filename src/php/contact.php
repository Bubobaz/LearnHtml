<?php
require_once('db.php');

$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$job = $_POST['job'];
$development = $_POST['development'];
$design = $_POST['design'];
$analysis = $_POST['analysis'];

$sql = "INSERT INTO contacts (name, email, age, profession, development, design, analysis)
         VALUES ('$name', '$email', '$age', '$job','$development','$design','$analysis')";

if ($conn->query($sql) === TRUE) {
    echo "Спасибо за отправку данных ". $name. "! Мы обязательно свяжемся с вами";
} else {
    echo 'Ошибка!'  . $conn->error;
}


?>