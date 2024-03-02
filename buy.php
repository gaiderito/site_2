<?php 
session_start();
require_once('db.php');
if ($_SESSION['user']){
    $session = "okay";
} else{
    $session = "not";
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" href="profstyle.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Titillium+Web:wght@300&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;1,300&family=Roboto+Slab&display=swap" rel="stylesheet">
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

    <?php 
    $check_product = mysqli_query($connect, "SELECT * FROM `katalog` WHERE `product` = 'Бойцовский клуб'");
    $kniga = mysqli_fetch_assoc($check_product);  
    echo('<div class="kniga">
    <img width="350px" src="'.$kniga["foto"].'" alt="">
    <div class="all" style="width:100%;">
    <div class="attr">
        <h2>'.$kniga["product"].'</h2>
        <h3>«Бойцовский клуб» – самый знаменитый роман Чака Паланика. Все помнят фильм режиссера Дэвида Финчера с Брэдом Питтом в главной роли? Он именно по этой книге. Это роман-вызов, роман, созданный всем назло и вопреки всему, в нем описывается поколение озлобившихся людей, потерявших представление о том, что можно и чего нельзя, где добро и зло, кто они сами и кто их окружает. Сам Паланик называет свой «Бойцовский клуб» новым «Великим Гэтсби». Какие же они – эти Гэтсби конца XX века?
        </h3>
        <h2>Цена:</h2>
        <h2 style="color: greenyellow;">'.$kniga["price"].'p</h2>
        </div>
        <form action="korzina.php" method="post">
        <input type="number" placeholder="Количество" name="skolko">
        <button type="submit">Добавить в корзину</button>
        </form>
        </div>

    
</div>
');
    ?>


    



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
    }

</script>
    </body>
    </html>