<?php

require_once('db.php');
$login = $_POST['login'];
$pass = $_POST['pass'];
$repeatpass = $_POST['repeatpass'];
$email = $_POST['email'];

$sql = "INSERT INTO `users` (login,pass,email) VALUES ('$login', '$pass', '$email')";

$time = "good";

if ($pass != $repeatpass){
    $time = "not";
}
else{
$conn -> query($sql);
}
?>

<script>
    let time = "<?php echo $time;?>";
    if (time =="not"){
        alert("Пароли не совпадают!");
    let timer = setTimeout(function(){
        window.location='register.php'
    }, 100);
}

else{
    alert("Успешная регистрация! Вы будете перенаправлены на главную страницу через 3 секунды");
    let timer = setTimeout(function(){
        window.location='index.php'
    }, 100);
}
</script>