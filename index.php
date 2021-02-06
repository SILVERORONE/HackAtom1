<?php
$link = new mysqli('localhost','root','root','hackatom');
$count_now = $link->query("SELECT  * FROM `user` WHERE average_ball BETWEEN 0 AND 500");
$count_end = $link->query("SELECT  * FROM `user` WHERE average_ball BETWEEN 500 AND 1000");
$direction = $link->query("SELECT  * FROM `direction`");
$count_stud = mysqli_num_rows($count_now);
$count_job = mysqli_num_rows($count_end);

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

<div class="container">
    <div class="banner">
        <div class="left-banner">
            <p class="banner-text-title">Реализуйте свое<br><span>будущее</span><br>прямо сейчас!</p>
            <a href="" class="btn-banner">Подробнее</a>
    
        </div>
        <div class="right-banner">
            <img src="images/atom.svg" alt="">
        </div>
    </div>

</div>
<section class="stats">
    <div class="container">
        <div class="block-title">
            <h2>Статистика:</h2>
        </div>
        <div class="stats-block">
            <div class="stats-block-left">
                <p class="stats-block-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Est harum ex animi nostrum dignissimos, nobis aperiam, porro error laborum facere quo fugiat veritatis numquam fuga assumenda! Quisquam velit voluptatem sed.
                </p>
            </div>
            <div class="stats-block-center">
                <div class="stats-block-center-left">
                    <img class="stats-icon" src="images/book.svg" alt="">
                    <h2><?php echo"$count_stud";?></h2>
                    <p>Сейчас обучаются</p>

                </div>
                <div class="stats-block-center-right">
                    <img class="stats-icon" src="images/cap.svg" alt="">
                    <h2><?php echo"$count_job";?></h2>
                    <p>Закончили обучение</p>

                </div>

            </div>
            <div class="stats-block-right">
                <p class="stats-block-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius deserunt nihil ipsa dignissimos earum blanditiis impedit aut sequi maiores. Ullam pariatur fuga asperiores placeat. Assumenda harum illo ab vel earum!
                </p>
            </div>
        </div>

    </div>
</section>
<section class="charts">
    <div class="container charts-block">
        <div class="charts-title">
            <h3>С нами <br> вы доведете<span> идею </span><br>до финала</h3>
        </div>
        <div class="charts-images">
            <img src="images/charts.svg" alt="" style="width: 500px;">
        </div>
    </div>

</section>

<section class="idei">
    <div class="container">
        <div class="idei-title">
            <h3>Поделитесь своей идеей</h3>
        </div>
        <form action="">
            <input type="text" class="idei-input">
            <button class="idei-btn">Отправить</button>
        </form>
    </div>
</section>
<section>
    <div class="container direction">
        <div class="block-title">
            <h2>Направления:</h2>
        </div>
        <div class="direction-row">
            <a href="course.php?id=1" class="direction-link">
                <div class="direction-block orange-shadow">
                    <div class="direction-block-header">
                        <img class="direction-icon" src="images/financial.svg" alt="">
                        <h3 class="direction-block-title">
                            <?php
                            $dir = mysqli_fetch_array($direction);
                            print_r( $dir["name"]);
                            ?>
                        </h3>
                    </div>
                    <ul class="direction-block-text">
                        <li>Разработка финансовых моделей</li>
                        <li>Анализ экономических показателей</li>
                        <li>Финансовая эффективность предприятия</li>
                        <li>Финансовая отчетность</li>
                    </ul>
                </div>
            </a>
            <a href="course.php?id=2" class="direction-link">
                <div class="direction-block blue-shadow">
                    <div class="direction-block-header">
                        <img class="direction-icon" src="images/analytics.svg" alt="">
                        <h3 class="direction-block-title"><?php
                            $dir = mysqli_fetch_array($direction);
                            print_r( $dir["name"]);
                            ?></h3>
                    </div>
                    <ul class="direction-block-text">
                        <li>Визуализация данных</li>
                        <li>Работа с базами данных</li>
                        <li>Программирование на Python</li>
                        <li>Программирование на R</li>
                    </ul>
                </div>
            </a>
        </div>
        <div class="direction-row">
            <a href="course.php?id=3" class="direction-link">
                <div class="direction-block green-shadow">
                    <div class="direction-block-header">
                        <img class="direction-icon" src="images/projects.svg" alt="">
                        <h3 class="direction-block-title"><?php
                            $dir = mysqli_fetch_array($direction);
                            print_r( $dir["name"]);
                            ?> </h3>
                    </div>
                    <ul class="direction-block-text">
                        <li>Основы менеджента проекта</li>
                        <li>Управление командой</li>
                        <li>Проект и продукт</li>
                        <li>Питчинг проектов</li>
                    </ul>
                </div>
            </a>
            <a href="course.php?id=4" class="direction-link">
                <div class="direction-block purple-shadow">
                    <div class="direction-block-header">
                        <img class="direction-icon" src="images/metrology.svg" alt="">
                        <h3 class="direction-block-title"><?php
                            $dir = mysqli_fetch_array($direction);
                            print_r( $dir["name"]);
                            ?></h3>
                    </div>
                    <ul class="direction-block-text">
                        <li>Введение в специальность</li>
                        <li>Сертификация</li>
                        <li>Стандартизация</li>
                        <li>Требования к специалистам</li>
                    </ul>
                </div>
            </a>
        </div>
    </div>
</section>

<?php

require 'footer.php';
?>




<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
