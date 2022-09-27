<?php
require_once('db.php');
$name = $_POST['name'];
$sum = 0;
for ($i = 0; $i < 9; $i++) { 
    $sum += $_POST['question'.$i];
}

$sql = "INSERT INTO results (name, result) VALUES ('$name', '$sum')";
if ($conn->query($sql) === TRUE) {
    echo "Поздравляю ". $name ."!<br> Ваш результат - " . $sum . ' из 8';
} else {
    echo 'Ошибка! '  . $conn->error;
}
?>