<?php
$mail = $_COOKIE['mail'];
$link = new mysqli('localhost','root','root','hackatom');
$result = $link->query("SELECT * FROM `user` WHERE `mail` = '$mail'");
$dia = mysqli_fetch_array($result);
    include('dia.php');
    $instance = new dia();
    if(($dia["ball_1"] == 0) and ($dia["ball_2"] == 0) and ($dia["ball_3"] == 0) and ($dia["ball_4"] == 0)){
        $data = array('000000' => 60, '000000' => 50, '000000' => 23, '000000' => 45);
        $instance->generate($data);
    }
    else{
    $data = array('d6a700' => $dia["ball_1"], '0049a6' => $dia["ball_2"], '00ac4f' => $dia["ball_3"], 'a60063' => $dia["ball_4"]);
    $instance->generate($data);
}
