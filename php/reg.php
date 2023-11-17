<?php
    $login = $_POST['login'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass_1 = $_POST['pass'];
    $pass_2 = md5($pass_1."dsayhgdiasdygasdygagds");
    $mysql = new mysqli("127.0.0.1", "root", "", "project-russkiy-2023");
    $mysql->query("INSERT INTO users(login, name, email, pass) VALUES ('$login','$name','$email','$pass_2')");

    header("Location: /login.php");
?>