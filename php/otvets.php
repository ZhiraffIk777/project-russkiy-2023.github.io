<?php
    $mysql = new mysqli("127.0.0.1", "root", "", "project-russkiy-2023");
    $result = $mysql->query("SELECT * FROM otvets");
?>

<div class="container">
    <?php while (($row = $result->fetch_assoc()) != null): ?>
        <h2><?= $row['name']?></h2>
        <p><?= $row['telegram']?></p>
        <p><?= $row['message']?></p>
        <hr>
    <?php endwhile; ?>
</div>
