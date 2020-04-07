<?php

$data = $_POST['list']; # Получаем данные за POST запроса
if ($data == '') {
    header('Location: /'); # Перенаправляем на главную страницу
}

require 'config.php'; # Подключаем файл базы данных


$query=mysqli_query($db, "INSERT INTO `mydata`(`data`) VALUES ('$data')");



header('Location: /');
?>

