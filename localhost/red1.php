<?php
require 'config.php';

$id = $_POST['id'];


$query=mysqli_query($db, "UPDATE  `mydata` SET `data`='$data' WHERE `id` = $id");



header('Location: /');
?>


<?
require 'config.php';

$query1 = "SELECT data FROM mydata WHERE `id` = $id";
$row = mysqli_query($db, $query1);
$row_data = mysqli_fetch_row($row);

$data = $row_data[0];
$new_data = $_GET['cn-text'];

if (isset($new_name))
{
    $query_cn = "UPDATE `mydata` SET `data` = '$new_data' WHERE `id` = '$id'";
    $result_cn = mysqli_query($db, $query_cn);

}

mysqli_close($db);
header('Location: /');
exit();
?>