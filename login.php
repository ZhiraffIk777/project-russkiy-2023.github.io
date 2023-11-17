<?php session_start(); 
    $style = "css/login.css"
?>
<?php require_once('php/header.php'); ?>

<div class="container my-5">
    <h1 class="text-center my-4">Авторизация</h1>
    <div class="col-md-5 mx-auto">
      <form action="/php/log.php" method="post">
        <div class="row">
            <div class="mb-3 input-group">
              <span class="input-group-text"><i class="fa-solid fa-arrow-right-to-bracket"></i></span>
              <input name="login" type="text" class="form-control" placeholder="Логин">
            </div>
        </div>
        <div class="mb-3 input-group">
          <span class="input-group-text"><i class="fa-solid fa-unlock"></i></span>
          <input name="pass" type="password" class="form-control" placeholder="Пароль">
        </div>
        <div class="container-2">
          <a class="a-1" href="register.php"><p class="h6">Еще нет аккаунта?</p></a>
          <a class="a-1" href="forget_password.php"><p class="h6">Забыли пароль?</p></a>
      </div>
        <div class="mb-3">
          <input type="submit" class="form-control btn-1" value="Авторизоваться">
        </div>
      </form>
    </div>
</div>
<?php require_once('php/footer_2.php'); ?>