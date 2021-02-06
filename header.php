<?php
$fio = $_COOKIE['fio'];
$img = $_COOKIE['img'];





echo '
<header>
    <div class="container main-header">
        <div class="main-menu-left">
           <div class="logo">
                <a href="index.php">
                    <img src="images/Logo.svg" alt="">
                </a>
            </div>
            <div class="main-menu">
                <ul class="main-menu-list">
                    <li><a href="">Проекты</a></li>
                    <li><a href="course.php?id=1">Обучение</a></li>
                    <li><a href="about.php">О нас</a></li>
                </ul>
            </div>
        </div>
        ';

if ((empty($_COOKIE['mail'])) and (empty($_COOKIE['password']))) {
    echo '
        <div class="main-menu-right">
            <a class="btn-login" href="signin.php">Вход/Регистрация</a>   
        </div>
    </div>';
}
else{







    // Выход
    echo'

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
            ';

}
?>
    

</header>



