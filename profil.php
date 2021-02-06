<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.svg">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <title>Профиль</title>
</head>
<body>

<!-- header -->
<?php
$fio = $_COOKIE['fio'];
$mail = $_COOKIE['mail'];
$tel = $_COOKIE['tel'];
$img = $_COOKIE['img'];
echo '
<header>

<div class="container main-header">
        <div class="main-menu-left">
            <div class="logo">
                <img src="images/Logo.svg" alt="">
            </div>
            <div class="main-menu">
                <ul class="main-menu-list">
                    <li><a href="">Проекты</a></li>
                    <li><a href="">Обучение</a></li>
                    <li><a href="">О нас</a></li>
                </ul>
            </div>
        </div>

    <div class="main-menu-right">
        <a href="profil.php?id=' . $fio . '" class="user-profile">
            <div class="user-block direction-row">
                <img class="dia-img" src="Diagram.php">
                <img src="'. $img.'" alt="" class="user-img">
                <p class="user-name">';echo $fio; echo'</p>
            </div>
        </a>

        <a class="btn-login" href="obr_exit.php">Выход</a>


    </div>
</header>
';
?>
<div class="container">
    <div class="profil">
        <h1>Профиль</h1>
        <?php
        $link = new mysqli('localhost','root','root','hackatom');
        $result = $link->query("SELECT * FROM `user` WHERE `mail` = '$mail'");

        $graf = mysqli_fetch_array($result);
        if (mysqli_num_rows($result) > 0) ;
        {
            $card = mysqli_fetch_array($result);
            do {

            echo '
        <div class="profil-row">
            <div class="profil-images-col">
                <img class="profil-images1" src="Diagram.php">
                <img class="profil-images" src="' .$img . '" alt="">
            </div>


            <div class="profil-right-col">
                <div class="profil-right-row">
                <h3>ФИО</h3>
                <p>' .$fio . '</p>
                <h3>E-mail</h3>
                <p>' .$mail . '</p>
                <h3>Телефон</h3>
                <p>' .$tel . '</p>
                </div>
                <div class="profil-right-row">
                <h3>Образование</h3>
                <p>Среднее</p>
                <h3>Студент</h3>
                <p>Да</p>
                <h3>Место работы</h3>
                <p>Завод</p>
                </div>
            </div>
            </div>
        ';
        } while ($card = mysqli_fetch_array($result));
        }
      
?>
            <div class="profil-o-sebe">
                <h3>О себе</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam porro voluptatum ut dicta, qui rerum, laudantium est veritatis quas dolorum aut nesciunt itaque asperiores modi velit cum ad mollitia explicabo.</p>
            </div>



        <div class="profil-progres">
            <h2>Прогресс</h2>
            <div class="profil-progres-row">
            <div class="profil-progres-block">
                <div class="profil-progres-block-header">
                    <img class="profil-progres-block-images" src="images/financial.svg" alt="" style="width: 50px; height: 50px;">
                    <h3>Финансовая аналитика</h3>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: <?php echo ( $graf["ball_1"] / 1000) * 100 . "%"; ?>; background-color: #d6a700;" aria-valuenow="<?php echo ( $graf["ball_1"] / 1000) *100?>" aria-valuemin="0" aria-valuemax="100"><?php echo ($graf["ball_1"] / 1000) *100 . "%";?></div>
                </div>
                </div>
            <div class="profil-progres-block">
                <div class="profil-progres-block-header">
                    <img class="profil-progres-block-images" src="images/analytics.svg" alt="" style="width: 50px; height: 50px;">
                    <h3>Анализ данных</h3>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: <?php echo ( $graf["ball_2"] / 1000) * 100 . "%"; ?>; background-color:#0049a6;" aria-valuenow="<?php echo ( $graf["ball_2"] / 1000) * 100?>;" aria-valuemin="0" aria-valuemax="100"><?php echo ( $graf["ball_2"] / 1000) * 100 . "%"; ?>;</div>
                </div>
                </div>
            
            </div>
            <div class="profil-progres-row">
                <div class="profil-progres-block">
                <div class="profil-progres-block-header">
                    <img class="profil-progres-block-images" src="images/projects.svg" alt="" style="width: 50px; height: 50px;">
                    <h3>Ведение проектов</h3>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: <?php echo ( $graf["ball_3"] / 1000) * 100 . "%"; ?>; background-color:  #00ac4f;" aria-valuenow="<?php echo ( $graf["ball_3"] / 1000) * 100?>;" aria-valuemin="0" aria-valuemax="100"><?php echo ( $graf["ball_3"] / 1000) * 100 . "%"; ?>;</div>
                </div>
                </div>
                <div class="profil-progres-block">
                    <div class="profil-progres-block-header">
                        <img class="profil-progres-block-images" src="images/metrology.svg" alt="" style="width: 50px; height: 50px;">
                        <h3>Метрология </h3>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?php echo ( $graf["ball_4"] / 1000) * 100 . "%"; ?>;; background-color: #a60063;" aria-valuenow="<?php echo ( $graf["ball_4"] / 1000) * 100 ?>;" aria-valuemin="0" aria-valuemax="100"><?php echo ( $graf["ball_4"] / 1000) * 100 . "%"; ?>;</div>
                    </div>
                    </div>
                
            </div>
        </div>
    </div>
</div>

<!-- mainfooter -->
<footer>
    <div class="footer-style">
        <div class="container direction-row">
            <div class="column">
                <ul class="footer-menu">
                    <li><a href="">Проекты</a></li>
                    <li><a href="">Обучение</a></li>
                    <li><a href="">О нас</a></li>
                </ul>
            </div>
            <div class="column-m">
                <div class="direction-row">
                    <a href=""><img src="images/facebook.svg" alt="" class="social-net"></a>
                    <a href=""><img src="images/instagram.svg" alt="" class="social-net"></a>
                    <a href=""><img src="images/twitter.svg" alt="" class="social-net"></a>
                    <a href=""><img src="images/vk.svg" alt="" class="social-net"></a>
                    <a href=""><img src="images/odnoklassniki.svg" alt="" class="social-net"></a>
                </div>
                <div class="footer-logo">
                    <img src="images/Logo.svg" alt="">
                </div>
            </div>
            <div class="column phone-block">
                <div class="phone-number-block">
                    <img class="phone-img" src="images/phone.svg" alt="">
                    <a href="tel:88005553535" class="number-phone">8 800 555 35 35</a>
                </div>
                <p class="footer-mail">business@mail.ru</p>
            </div>
        </div>
        <section class="copyright">
            <div class="container">
                <p class="text-copyright">© Бизнес-лаб Платформа. Все права защищены.</p>
            </div>
        </section>
    </div>
</footer>

<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
