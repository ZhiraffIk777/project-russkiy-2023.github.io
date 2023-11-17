<?php session_start(); 
    $style = "css/index.css"
?>
<?php require_once('php/header.php'); ?>

<div class="container">
    <p class="h1">Обратная связь:</p>
</div>

<?php
    $mysql = new mysqli("127.0.0.1", "root", "", "project-russkiy-2023");
    $result = $mysql->query("SELECT * FROM otvets");
?>
<div class="container" action="/php/del_otvet.php" method="post">
    <?php while (($row = $result->fetch_assoc()) != null): ?>
        <h4><?= $row['name']?></h4>
        <p><?= $row['telegram']?></p>
        <p><?= $row['message']?></p>
        <!-- <li><a href="/php/del_otvet.php">Delete</a></li> -->
        <hr>
    <?php endwhile; ?>
</div>

