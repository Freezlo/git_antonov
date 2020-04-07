<?php
require 'config.php';

$id = $_GET['id'];


$query =mysqli_query($db, "DELETE FROM `mydata` WHERE `id` = $id");

header('Location: /');

?>
