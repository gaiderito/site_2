<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="reg.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;1,300&family=Roboto+Slab&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="back"><a href="index.php">Вернуться на главную</a></div>
    <form action="log.php" method="post" class="block-reg">
        <div class="register">
            <h2>Авторизация</h2>
            <input type="text" name="login" placeholder="Логин" required>
            <input type="text" name="pass" placeholder="Пароль" required>
            <div><input type="checkbox" name=""> Чужой компьютер</div>
            <button type="submit">Войти</button>
            <p>У вас нет аккаунта?<a href="register.php"> Зарегистрироваться</a></p>
        </div>
    </form>
</body>
</html>