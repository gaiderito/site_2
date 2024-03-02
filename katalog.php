<?php 
session_start();
require_once('db.php');

if ($_SESSION['user']){
    $session = "okay";
} else{
    $session = "not";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;1,300&family=Roboto+Slab&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Titillium+Web:wght@300&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;1,300&family=Roboto+Slab&display=swap" rel="stylesheet">
    <title>Top-Website-ITW</title>
</head>
<body>
<header>
        <div class="nazv"><img src="img/logo2.png">
       МАГАЗИН КНИГ <br> НА ЛЮБОЙ ВКУС</div>
        <div class="oficial">KniggeR</div>
        <div class="search">
            <div class="reg">
                <div class="op"><a href=""><img src="img/korzina.png" alt=""></a><a href="">Корзина</a></div>
                <div class="op"><a href="login.php" id="profile"><img src="img/profile2.png" alt=""></a><a href="login.php" id="profile1">
                    <?php if ($_SESSION['user']){ print_r($_SESSION ['user']['login']); } else{ echo("Профиль"); } ?></a></div>
            </div>
            <form>
            <input type="search" placeholder="Поиск">
            <button type="submit"></button>
        </form>
        </div>
</header>

<div class="container">
    <div class="menu">
        <a href="index.php">Главная</a>
        <a href="katalog.php">Каталог</a>
        <a href="">Отзывы</a>
        <a href="">FAQ</a>
    </div>


<div class="sort">
    <button>&equiv; Сортировать</button>
    <button>Фильтры &hArr; </button>
</div>

<div class="catalog">
    <?php 
    $query = "SELECT * FROM `katalog`";

    $result = mysqli_query($connect, $query);
    
    /* извлечение ассоциативного массива */
    while ($row = mysqli_fetch_assoc($result)) {
        echo('<div class="tovar"><img src="'.$row["foto"].'" alt=""><h4>'.$row["product"].'</h4><p>краткое описание книги</p><a href="buy.php">'.$row["price"].'р</a></div>');
       
    }
    ?>
    
</div>
<?php
    if ($_SESSION ['user']['login'] == "Admin" ){
    echo('<div style="width: 100%; margin-bottom: 70px; height: 200px;"><form style="height:100%; width: 250px; padding:25px; align-items:center; background-color:grey; display: flex; flex-direction: column; justify-content: space-between;" novalidate style="display: flex; flex-direction: column;" action="add.php" method="post">
    <h4 style="margin:0; color: greenyellow;">Фото товара:</h4><input type="file">
    <input required placeholder="Название" style="background-color: white; color: black;" type="text" name="nazva">
    <input placeholder="Цена" style="background-color: white; color: black;" type="text" name="pricee">
    <button type="submit">Добавить в каталог</button></form></div>');}
?>

<script src="script.js">
    
</script>
<footer>
    Все права защищены, копирование строго запрещено
    <hr>
<div class="foot">
    <div class="questions">Часто задаваемые вопросы:
        <a  style="margin-top: 20px;"  href="">Сколько ждать доставку?</a>
        <a href="">В каких странах действует магазин?</a>
        <a href="">Партнеры</a>
        <a href="">Возврат товара</a>
    </div>
    <div class="images">
        <a href="https://t.me/gaiderito"><img src="img/tg.png" alt=""></a>
        <a href="https://instagram.org/gaiderito"><img src="img/inst.png" alt=""></a>
        <a href="https://vk.com/gaiderito_bohhroma"><img src="img/vk.png" alt=""></a>
    </div>
</div>
<p style="font-size: 14px;">ТЭК 2024</p>
</footer>
<script>
    
    let proverka = "<?php echo $session;?>";
    if (proverka == "okay"){
        document.getElementById("profile").href="profile.php";
        document.getElementById("profile1").href="profile.php";
    } //Передал переменную php в JavaScript и заменил значение href если пользователь авторизирован. Теперь при нажатии на кнопку
    //его перебрасывает на страницу профиля

</script>

<script>

</script>
</body>
</html>
</body>
</html>