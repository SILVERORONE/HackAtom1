<!DOCTYPE html>
<html lang="en">
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

<!-- header -->
<?php

require 'header.php';
?>

<!-- register-form -->
<section class="auth-form">
    <div class="container">
        <form class="register-form-style" action="obr_signup.php" method="post">
            <h1 class="auth-title">Регистрация</h1>
            <div class="auth-input auth-input-style">
                <input type="email" name="mail" required="">
                <label class="auth-label">E-mail</label><span class="line"></span>
            </div>
            <div class="auth-input auth-input-style">
                <input type="fio" name="fio" required="" />
                <label class="auth-label">ФИО</label><span class="line"></span>
            </div>
            <div class="auth-input auth-input-style">
                <input type="text" name="tel" required="" />
                <label class="auth-label">Телефон</label><span class="line"></span>
            </div>
            <div class="auth-input auth-input-style">
                <input type="password" name="password" required="" />
                <label class="auth-label">Пароль</label><span class="line"></span>
            </div>

            <div class="align-items-auth">
                <button class="auth-btn-style" type="submit">Создать аккаунт</button>
            </div>
        </form>
    </div>
</section>



<!-- mainfooter -->
<?php

require 'footer.php';
?>

</body>
</html>
