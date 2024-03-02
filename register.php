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
    <div class="block-reg">
        <form action="reg.php" method="post" class="register">
            <h2>Регистрация</h2>
            <input type="text" name="login" placeholder="Логин" required>
            <input type="text" name="pass" placeholder="Пароль" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="repeatpass" placeholder="Повторите пароль" required>
            <div style="font-size: 14px;"><input class="check" type="checkbox"> Я соглaсен с обработкой <a>персональнынх данных</a></div>
            <button class="but" type="submit">Зарегистрироваться</button>
            <p>Уже есть аккаунт? <a href="login.php">Войти</a></p>
        </form> 
    </div>

</body>
</html>