<?php

require 'config.php'; # Подключаем файл базы данных
?>


<html>
	<head>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

		<title>Новая запись</title>
	</head>
	<body>
		<form action="/add.php" method="post">
             
    <p><b>Добавить заметку:</b></p>
    <p><textarea name="list" rows="15" cols="65" ></textarea></p>
    <p><input type="submit" value="Добавить"></p>



            

<li> <a href="index.php"> Вернуться </a> </li>
        </form>



	</body>
	</html>