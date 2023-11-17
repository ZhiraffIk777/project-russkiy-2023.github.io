<?php session_start(); 
    $style = "css/login.css"
?>
<?php require_once('php/header.php'); ?>
<div class="container my-5">
    <h1 class="text-center my-4">Регистрация</h1>
    <div class="col-md-5 mx-auto">
    <form action="php/reg.php" method="post">
        <div class="row">
        <div class="col-sm-6">
            <div class="mb-3 input-group">
            <span class="input-group-text"><i class="fa-solid fa-arrow-right-to-bracket"></i></span>
            <input name="login" type="text" class="form-control" placeholder="Логин">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="mb-3 input-group">
            <span class="input-group-text"><i class="fa-solid fa-user-tie"></i></span>
            <input name="name" type="text" class="form-control" placeholder="Имя">
            </div>
        </div>
        <div class="mb-3 input-group">
            <span class="input-group-text"><i class="fa-regular fa-envelope"></i></span>
            <input name="email" type="email" class="form-control" placeholder="E-mail">
        </div>
        <div class="mb-3 input-group">
            <span class="input-group-text"><i class="fa-solid fa-unlock"></i></span>
            <input name="pass" type="password" class="form-control" placeholder="Пароль">
        </div>
        <div class="container-2">
            <a class="a-1" href="login.php"><p class="h6">Уже есть аккаунт?</p></a>
        </div>
        <div class="mb-3">
        <input type="submit" class="form-control btn-1" value="Зарегистрироваться">
        </div>
    </form>
    </div>
</div>
<?php require_once('php/footer_2.php'); ?>