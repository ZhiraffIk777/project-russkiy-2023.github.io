<?php
    $user = $_COOKIE['user'];

    $mysql = new mysqli("127.0.0.1", "root", "", "project-russkiy-2023");
    $admin = $mysql->query("SELECT `admin` FROM `users` WHERE `login`='$user'");

    $value = $admin->fetch_assoc();

    if(count($user) == 0){
        header("Location: /#");
    }else{
        header("Location: /admin_page.php");
    }
?>