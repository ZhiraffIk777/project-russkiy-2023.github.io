<?php
    session_start();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $id = $_POST['id'];
    $admin = $_POST['admin'];

    $mysql = new mysqli("127.0.0.1", "root", "", "project-russkiy-2023");
    $result = $mysql->query("SELECT * FROM users");
    $row = $result->fetch_assoc();
    
    if(password_verify($pass, $row['pass'])){
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['admin'] = $row['admin'];
        header("Location: /#")
    }else{
        header("Location: /#")
    }
?>