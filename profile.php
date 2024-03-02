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
<link rel="stylesheet" href="profstyle.css">
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
        <a href="index.php">О нас</a>
        <a href="katalog.php">Каталог</a>
        <a href="">Отзывы</a>
        <a href="">FAQ</a>
    </div>

    <div class="profile">
        <div class="profileimg">
            <img width="300px" style="height: 350px; margin-bottom: 20px;" src="img/fotoprof.jpg" alt="">
            <h2><?php print_r($_SESSION ['user']['login']) ?></h2>
            <h2><?php print_r($_SESSION ['user']['email']) ?></h2>
            <a href="profile.php">Редактировать профиль</a>
        </div>
        
        
        <div style="display: flex;
                    flex-direction: column;
                    width: 60%;
                    color: white;" class="tovars">
        <?php
           $log = $_SESSION['user']['login'];
            $check = mysqli_query($connect, "SELECT * FROM `korzina` WHERE `login` = '$log'");

            if (mysqli_num_rows($check)>0){
                echo('<h2>Ваши товары:</h2>');
                while ($row = mysqli_fetch_assoc($check)) {
                    echo(' 
                    <div style="display: flex;
                                width: 70%;
                                justify-content: space-between;
                                background-color:grey;
                                padding:10px 20px;
                                margin-bottom:20px;
                                align-items: center;" class="stroka">
                    <img height="100px" src="'.$row["foto"].'">
                    <div><p>Наименование товара:</p><p>'.$row["product"].'</p></div>
                    <div><p>Количество:</p><p>'.$row["quantity"].'</p></div>
                    <div><p>Цена:</p><p>'.$row["summa"].'p</p></div>
                    <button style="margin-top: 80px;">Оплатить</button>
                    </div>
                   
        ');
            }
            echo(' <form action="delete.php">
            <button type="submit">Удалить товары</button>
        </form>
                ');
        
        } else{
            echo('<div style="width:100%;" class="xyu">
        <img src="img/korzina.png" width="150px" alt="">
            <h2>Ваша корзина пуста!</h2>
            <p style="text-align: center;">Выберите нужный Вам товар из каталога интернет-магазина и добавьте его в корзину.
Оплатить созданный заказ, а также проверить его статус вы можете в личном кабине. </p>
            <a href="katalog.php">Перейти в каталог</a>
            </div>');

        }
            ?>
        </div>
        </div>
    </div>
    
    
    
    <h2 style="color: white; margin-bottom: 30px" >Рекомендуемые товары:</h2>
    <div class="catalog">
    <div class="tovar"><img src="img/sunboy.jpg" alt=""><h4>Санбой</h4><p>краткое описание книги</p><div class="invisible"><a href="buy.php">799р</a></div></div>
    <div class="tovar"><img src="img/ursa.jpg" alt=""><h4>Урса</h4><p>краткое описание книги</p><div class="invisible"><a href="buy.php">499р</a></div></div>
    <div class="tovar"><img src="img/fight.jpg" alt=""><h4>Бойцовский клуб</h4><p>краткое описание книги</p><div class="invisible"><a href="buy.php">899р</a></div></div>
    <div class="tovar"><img src="img/drive.jpg" alt=""><h4>Драйв</h4><p>краткое описание книги</p><div class="invisible"><a href="buy.php">999р</a></div></div>
    <div class="tovar"><img src="img/sunboy.jpg" alt=""><h4>Санбой</h4><p>краткое описание книги</p><div class="invisible"><a href="buy.php">799р</a></div></div>
</div>
    
    <footer>
    никакие права не защищены
    <hr>
<div class="foot">
    <div class="questions">Часто задаваемые вопросы:
        <a href="">Вопрос 1</a>
        <a href="">Вопрос 2</a>
        <a href="">Вопрос 3</a>
        <a href="">Вопрос 4</a>
    </div>
    <div class="images">
        <a href="https://t.me/gaiderito"><img src="img/tg.png" alt=""></a>
        <a href="https://instagram.org/gaiderito"><img src="img/inst.png" alt=""></a>
        <a href="https://vk.com/gaiderito_bohhroma"><img src="img/vk.png" alt=""></a>
    </div>
</div>
<p style="font-size: 14px;">copy and paste</p>
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
</body>
</html>