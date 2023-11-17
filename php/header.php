
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ОГЭ по Русскому</title>
        <link rel="stylesheet" href="<?= $style ?>">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/1fea131cc0.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-md">
          <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <a href='/#' target='_blank'><img src='img/icon.png' width="30" height="24" alt='icon'/></a>
              </a>
              <a class="navbar-brand text-white" href="/#">ОГЭ по Русскому</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars" style="color: #ffffff;"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Пункты
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/#">Теория</a></li>
                        <li><a class="dropdown-item" href="/#">Практика</a></li>
                      </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="#">Онлайн Тесты</a>
                  </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                <?php
                  if($_COOKIE['user'] == ''):
                ?>
                <li class="nav-item dropdown mx-4">
                      <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Учетная запись
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/register.php">Регистрация</a></li>
                        <li><a class="dropdown-item" href="/login.php">Вход</a></li>
                      </ul>
                </li>
                <?php else: ?>
                    <li class="nav-item dropdown mx-4">
                      <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Учетная запись
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/php/check_admin.php"><strong><?=$_COOKIE['user'] ?></strong></a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/php/exit_login.php">Выйти</a></li>
                      </ul>
                </li>
                <?php endif; ?>
                <iframe src="https://yoomoney.ru/quickpay/fundraise/button?billNumber=gn3ZIwQpf9M.231109&" width="330" height="50" frameborder="0" allowtransparency="true" scrolling="no"></iframe>
              </ul>
            </div>
          </div>
        </nav>