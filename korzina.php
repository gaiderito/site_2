<?php

require_once('db.php');
session_start();


$check_product = mysqli_query($connect, "SELECT * FROM `katalog` WHERE `product` = 'Бойцовский клуб'");
if (mysqli_num_rows($check_product) > 0) {

    $kniga = mysqli_fetch_assoc($check_product);   

    $_SESSION['kniga'] = [
        "id" => $kniga['id'],
        "product" => $kniga['product'],
        "price" => $kniga['price'],
        "foto" => $kniga['foto']
    ];

} else {
    echo("что то не так");
}


$login = $_SESSION['user']['login'];
$quantity = $_POST['skolko'];
$price = $quantity * $_SESSION['kniga']['price'];
$product = $_SESSION['kniga']['product'];
$foto = $_SESSION['kniga']['foto'];

if (is_null($login)||is_null($quantity)){
    header('Location: buy.php'); 
}
else{

mysqli_query($connect, "INSERT INTO `korzina` (`login`, `product`, `quantity`, `summa`, `foto`) VALUES ('$login', '$product', '$quantity', '$price', '$foto')");
unset($_SESSION['kniga']);
header('Location: profile.php');
}

?>