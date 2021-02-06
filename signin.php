<?php
require 'header.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
   
</head>
<body>
<div class="wrapper">
<section class="auth-form">
        <div class="container">
          <form class="auth-form-style" action="obr_signin.php" method="post">
              <h1 class="auth-title">Авторизация</h1>
            <div class="auth-input auth-input-style">
              <input type="email" name="mail" required="">
              <label class="auth-label">E-mail</label><span class="line"></span>
            </div>
            <div class="auth-input auth-input-style">
              <input type="password" name="password" required=""/>
              <label class="auth-label">Пароль</label><span class="line"></span>
            </div>
            <div class="align-items-auth">
              <button class="auth-btn-style" type="submit">Войти</button>
            </div>
              <div class="auth-reg">
                  <a href="signup.php">Нет аккаунта? Региcтрация</a>
              </div>
          </form>
        </div>
      </section>

    <?php

    require 'footer.php';
    ?>
</div>






<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
