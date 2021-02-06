<!DOCTYPE html>
<html lang="en">
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
    <title>О нас</title>
</head>
<body>
    <!-- header -->
    <?php
    require 'header.php';
    ?>

<section class="contacts">
    <div class="container about-contacts-block">
        <h2 class="m-0 about-title">Наши контакты</h2>
        <div class="about-contacts-row-style">
            <div class="contacts-info">
                <p class="about-spec about-info-title">Мы в мессенджерах</p>
                <ul class="about-ul-style">
                    <li><a class="about-contacts-text">Telegram <img src="images/telegram-about.svg" alt=""></a>
                    <li><a class="about-contacts-text">Whats App <img src="images/whatsapp-about.svg" alt=""></a></li>
                    <li><a class="about-contacts-text">Viber <img src="images/viber-about.svg" alt=""></a></li></li>
                </ul>
            </div>
            <div class="contacts-info">
                <p class="about-spec about-info-title">Электронная почта</p>
                <ul class="about-ul-style">
                    <li><a class="about-contacts-text">business-lab@mail.ru <img src="images/mail-about.svg" alt=""></a></li>
                </ul>
            </div>
        </div>
        <div class="about-contacts-row-style">
            <div class="">
                <p class="about-spec about-info-title">Наш телефон</p>
                <div class="about-contacts-row-style">
                    <div class="">
                        <img class="phone-img" src="images/phone.svg" alt="">
                        <a href="tel:88005553535" class="number-phone">8 800 555 35 35</a>
                    </div> 
                </div> 
            </div>
        </div>
    </div>
</section>

<section class="about-courses">
    <div class="container">
        <h2 class="about-title">Кому подойдут наши курсы</h2>
        <div class="direction-row">
            <div class="about-block">
                <p class="about-spec"> <span>✓</span> Новичкам</p>
                <p class="about-spec-text">Тем, кто хочет освоить профессию с нуля и помогать компаниям всегда оставаться в плюсе</p>
            </div>
            <div class="about-block">
                <p class="about-spec"> <span>✓</span> Экономистам и бухгалтерам</p>
                <p class="about-spec-text">Тем, кто хочет научиться анализировать финансовые показатели компании, сменить профиль и зарабатывать больше</p>
            </div>
        </div>
        <div class="direction-row">
            <div class="about-block">
                <p class="about-spec"> <span>✓</span> Начинающим финансистам</p>
                <p class="about-spec-text">Тем, кто хочет получить комплексные знания, прокачать навыки работы с отчётностью и получить опыт работы с продвинутыми инструментами, методологиями, стандартами</p>
            </div>
            <div class="about-block">
                <p class="about-spec"> <span>✓</span> Руководителям проектов</p>
                <p class="about-spec-text">Тем, кто хочет посмотреть на бизнес-процессы с точки зрения финансов, научиться выявлять точки роста, строить финансовые модели и познакомиться с кейсами крупных компаний</p>
            </div>
        </div>
    </div>
</section>

<section class="about-plus">
    <div class="container">
        <h2 class="about-title">Наши приемущества</h2>
        <div class="about-row-style">
            <img src="images/money.svg" alt="">
            <p class="about-plus-text">Ресурс Бизнес-лаб помогает предпринимателям в поисках инвестора</p>
        </div>
        <div class="about-row-style">
            <img class="pl-4 pr-4" src="images/galstuk.svg" alt="">
            <p class="about-plus-text">База из более 2 000 потенциальных инвесторов (частные инвесторы, коммерческие организации, инвестиционные фонды, венчурные фонды)</p>
        </div>
        <div class="about-row-style">
            <img src="images/plus-phone.svg" alt="">
            <p class="about-plus-text">Прямое взаимодействие с потенциальным инвестором, доступны контактные данные</p>
        </div>
    </div>
</section>

<!-- mainfooter -->
    <?php
    require 'footer.php';
    ?>

<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
