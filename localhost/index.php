
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<title>БЛОКНОТ</title>
		
		
</head>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<body>

<div class="container">
        
        <header>
            <h1> Блокнот </h1>
            <ul>
                <li> <a href="form_add.php"> Добавить новую запись </a></li>
                <h3>  Список дел </h3>
                
            </ul>
        </header>

        

 </div>


<div class="containerline">
<?php //Вывод сообщений
            require 'config.php';
            echo '<ul>';
            //Получаем данные из таблицы
            $sql = mysqli_query($db, 'SELECT * FROM `mydata`');
            //выводим данные
            while ($result = mysqli_fetch_array($sql)) 
            {
    		echo 	'<li>
    		<b>'.$result['data'].'</b> 
 
  			<p class="del">
  			<a href= "del.php?id='.$result['id'].'">Удалить</a></p>
  			<p class="red">
  			<a href= "red.php?id='.$result['id'].'">Редактировать</a></p>
    				</li>';
 			}


            echo '</ul>';
 ?>     
</div>





  </body>
  </html>
	
