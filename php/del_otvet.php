<?php
    $name = $row['name']
    $message = $row['message']

    $mysql = new mysqli("127.0.0.1", "root", "", "project-russkiy-2023");
    $result = $mysql->query("DELETE FROM `otvets` WHERE name='$name' AND message='$message'");
    header(Location: "/admin_page.php")
?>