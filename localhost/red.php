
<?php

require 'config.php'; # Подключаем файл базы данных
?>




<html>
    <head>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <title>Редактировать запись</title>
    </head>
    <body>
        <form action="/red1.php" method="GET">
             
    <p><b>Редактировать заметку:</b></p>


    <p><textarea name="list" rows="15" cols="65" >
        
<?php 
            $id = $_GET['id'];
            
            //Получаем данные из таблицы
            $sql = mysqli_query($db,"SELECT * FROM mydata WHERE id = $id");
            //выводим данные

            while ($result = mysqli_fetch_array($sql))  

echo $result['data'];

?>

    </textarea></p>
    

    <p><input type="submit" value="Редактировать"></p>      
<li> <a href="index.php"> Вернуться </a> </li>
        </form>

    </body>
    </html>






