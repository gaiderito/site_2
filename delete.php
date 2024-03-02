<?php 
session_start();
require_once ('db.php');

$login = $_SESSION['user']['login'];

$sql = mysqli_query($connect, "DELETE FROM `korzina` WHERE `login` = '$login' ");

header("Location:profile.php");

?>