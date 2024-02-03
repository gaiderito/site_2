<?php
require_once('db.php');

$login = $_POST['login'];
$pass = $_POST['pass'];

    $sql = "SELECT * FROM `users` WHERE login = '$login' AND pass = '$pass'";
    $result = $conn->query($sql);
    $correct ="correct";
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
          $profile = $row['login'];
          
        
    }
}
else{
    $correct = "not";
}
?>

<script>
    let prof = "<?php echo $profile;?>";
    let okay = "<?php echo $correct;?>";
    if (okay =="correct"){
        alert("Добро пожаловать, " + prof);
    let timer = setTimeout(function(){
        window.location='index.php'
    }, 100);}
    else{
        alert("Пароли не совпадают!");
    let timer = setTimeout(function(){
        window.location='login.php'
    }, 100);}
</script>