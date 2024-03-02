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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Titillium+Web:wght@300&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;1,300&family=Roboto+Slab&display=swap" rel="stylesheet">
<script src="script.js"></script>
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
                    <a href="logout.php">quit</a>
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


    <div class="first-disp">
        <div class="big-text">
            <h1>Мы точно знаем,<br>что вы  хотите!</h1>
            <p>Вас приветствует лучший книжный магазин города Щекино! <br>
                Романы, комедии, ужасы, наука - у нас вы найдете <br>
                все, что вашей душе угодно!</p>
            <a href="katalog.php">Перейти в каталог</a>
        </div>
        <div class="information">
            <div class="top-content">
                <div class="blocks">
                    <div class="bigblock">Крупнейшая онлайн<br>библиотека прямо на вашем<br>устройстве!</div>
                    <div class="littleblocks">
                        <a class="blocha">Жанры</a>
                        <a class="blocha">Авторы</a>
                        <a class="blocha">Популярное</a>
                    </div>
                </div>
                <div class="fotos">
                    <img src="img/Anton.jpg" alt="">
                    <img src="img/king_stiven.jpg" alt="">
                </div>
            </div>
            <div class="bot-content">Покупая книги в нашем магазине, вы помогаете фонду А. Ю. Травомана<br> по борьбе с вырубкой леса!</div>
        </div>
    </div>

    <h2 style="color: white;">Популярные разделы</h2>

    <div class="info">
        <div class="card">
            <a href="">Ужасы</a>
        </div>
        <div class="card">
            <a href="">Психология</a>
        </div>
        <div class="card">
            <a href="">Комедии</a>
        </div>
        <div class="card">
            <a href="">Приключения</a>
        </div>
</div>

<div style="  display: flex; margin: 40px 0;
    width: 100%;
    justify-content: space-between;" class="mapa">
    <div style="color: white;" class="contacts">
        <h2>Контакты:</h2>
        <p>Адрес: Тульская обл. Заокский район,<br> д. Малахово, ул Магистральная д.40 2-й этаж</p>
        <h3>+7 (915) 788 20-23</h3>
        <h3 style="color: greenyellow;">knigafromniga@gmail.com</h3>
    </div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7597.874202417117!2d37.443464255194584!3d54.7487557260074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4135044462c85fb5%3A0x6f3290d7d1ccfeac!2z0JzQsNC70LDRhdC-0LLQviwg0KLRg9C70YzRgdC60LDRjyDQvtCx0LsuLCAzMDEwMDc!5e0!3m2!1sru!2sru!4v1708961744936!5m2!1sru!2sru" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

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
    }  //Передал переменную php в JavaScript и заменил значение href если пользователь авторизирован. Теперь при нажатии на кнопку
    //его перебрасывает на страницу профиля

</script>
</body>
</html>