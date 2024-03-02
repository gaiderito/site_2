<?php
require_once('db.php');

$nazv = $_POST['nazva'];
$fota = "img/drive.jpg";
$price = $_POST['pricee'];

mysqli_query($connect, "INSERT INTO `katalog` (`product`, `price`, `foto`) VALUES ('$nazv', '$price', '$fota')");

header('Location: katalog.php');
?>