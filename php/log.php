<?php
    $login = $_POST['login'];
    $pass_1 = $_POST['pass'];

    $pass_2 = md5($pass_1."dsayhgdiasdygasdygagds");

    $mysql = new mysqli("127.0.0.1", "root", "", "project-russkiy-2023");
    $real_login = $mysql->query("SELECT * FROM `users` WHERE `login`='$login' AND `pass`='$pass_2'");

    $user = $real_login->fetch_assoc();

    if(count($user) == 0){
        echo "Такой пользователь не найден!";
        exit();
    }

    setcookie('user', $user['name'], time() + 3600*24*7, "/");
    header("Location: /#");
?>