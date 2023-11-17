<?php
    $name = $_POST['name'];
    $telegram = $_POST['telegram'];
    $message = $_POST['message'];
    $mysql = new mysqli("127.0.0.1", "root", "", "project-russkiy-2023");
    $mysql->query("INSERT INTO otvets(name, telegram, message) VALUES ('$name','$telegram','$message')");

    header("Location: /#");
?>