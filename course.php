<?php
$link = new mysqli('localhost','root','root','hackatom');
$id = $_GET['id'];
$video = $_POST['one'];
$comments = $link->query("SELECT * FROM `comments`");
$result = $link->query("SELECT * FROM `modules` WHERE `id_direction` = '$id'");
$result_video = $link->query("SELECT * FROM `lesson` WHERE `id` = '$video'");
$vid = mysqli_fetch_array($result_video);

?>

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
    <title>Название курса </title>
</head>
<body>
    <!-- header -->
    <?php
    require 'header.php';
    ?>

    <div class="course-block container">
        <section class="course-sidebar">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                            <button id="headingOne" class="btn btn-link courses-btn" type="button" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                <?php
                                $modules = mysqli_fetch_array($result);
                                print_r( $modules["title"]);
                                ?>
                            </button>
                    </div>
            
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul class="courses-ul">
                                <form action="course.php?id=1" method="post" >
                                    <input  class="inviz" name="one" type="text" value="1">
                                <li><button class="course-lection" href="">Лекция №1</button></li>

                                </form>

                                <form action="course.php?id=1" method="post" >
                                    <input  class="inviz" name="one" type="text" value="2">
                                    <li><button class="course-lection" href="">Лекция №2</button></li>

                                </form>
                                <form action="course.php?id=1" method="post" >
                                    <input  class="inviz" name="one" type="text" value="3">
                                    <li><button class="course-lection" href="">Лекция №3</button></li>

                                </form>
                                <form action="course.php?id=1" method="post" >
                                    <input  class="inviz" name="one" type="text" value="4">
                                    <li><button class="course-lection" href="">Лекция №4</button></li>

                                </form>
                                <form action="course.php?id=1" method="post" >
                                    <input  class="inviz" name="one" type="text" value="5">
                                    <li><button class="course-lection" href="">Лекция №5</button></li>

                                </form>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed courses-btn" type="button" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                <?php
                                $modules = mysqli_fetch_array($result);
                                print_r( $modules["title"]);
                                ?>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul class="courses-ul">
                                <li><a href="">Лекция №1</a></li>
                                <li><a href="">Лекция №2</a></li>
                                <li><a href="">Лекция №3</a></li>
                                <li><a href="">Лекция №4</a></li>
                                <li><a href="">Лекция №5</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed courses-btn" type="button" data-toggle="collapse" data-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">
                                <?php
                                $modules = mysqli_fetch_array($result);
                                print_r( $modules["title"]);
                                ?>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul class="courses-ul">
                                <li><a href="">Лекция №1</a></li>
                                <li><a href="">Лекция №2</a></li>
                                <li><a href="">Лекция №3</a></li>
                                <li><a href="">Лекция №4</a></li>
                                <li><a href="">Лекция №5</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed courses-btn" type="button" data-toggle="collapse" data-target="#collapseFour"
                                aria-expanded="false" aria-controls="collapseFour">
                                <?php
                                $modules = mysqli_fetch_array($result);
                                print_r( $modules["title"]);
                                ?>
                            </button>
                        </h5>   
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul class="courses-ul">
                                <li><a href="">Лекция №1</a></li>
                                <li><a href="">Лекция №2</a></li>
                                <li><a href="">Лекция №3</a></li>
                                <li><a href="">Лекция №4</a></li>
                                <li><a href="">Лекция №5</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="course-content">
            <div class="course-video">
                <h2 class="course-name"><?php echo $vid['lesson']?></h2>
                <video class="course-player" width="870" height="490" controls="controls">
                    <source src="<?php echo $vid['url']?>" type="video/mp4">
                </video>
                <script>var player = new Playerjs({replace:"video"});</script>
                <div class="direction-row">
                    <div class="courses-video-download">
                        <button class="courses-video-btn">Скачать<img src="images/download.svg" alt=""></button>
                    </div>
                    <div class="courses-video-like">
                        <button class="courses-video-btn"><img src="images/like.svg" alt="">534</button>
                    </div>
                </div>
            </div>
            <div class="course-test">
                <h2 class="course-name">Обсуждения</h2>
<?php
                if (mysqli_num_rows($comments) > 0) ;
                {
                $card = mysqli_fetch_array($comments);
                do {

                echo '
                
                <div class="message-block">
                    <div class="direction-row">
                        <div class="msg-profile-block">
                            <div class="main-menu-right">
                                <a href="" class="user-profile">
                                    <div class="user-block direction-row">
                                        <img class="dia-img" src="dia_com.php">
                                        <img src="images/user-img.svg" alt="" class="user-img">
                                        <p class="user-name">' . $card["author"] . '</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <p class="datatime">' . $card["time"] . '</p>
                    </div>
                    <div class="user-msg">
                        <p class="user-msg-text">
                            ' . $card["text"] . '
                        </p>
                    </div>
                </div>
                ';
                } while ($card = mysqli_fetch_array($comments));
                }
?>






                <form action="obr_msg.php" method="post">
                <div class="message-write">
                    <div class="direction-row">

                        <input class="write-msg-input" type="text" name="text" placeholder="Ваш комментарий">
                        <button class="add-msg-btn">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- mainfooter -->
    <?php
    require 'footer.php';
    ?>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/playerjs.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
<?php

?>
