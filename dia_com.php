<?php
$link = new mysqli('localhost','root','root','hackatom');
$result = $link->query("SELECT * FROM `comments`");
if (mysqli_num_rows($result) > 0) ;
{
    $card = mysqli_fetch_array($result);
    do {

        $link = new mysqli('localhost','root','root','hackatom');
        $result1 = $link->query("SELECT * FROM `user` WHERE `mail` = '1@mail.ru'");
        $dia = mysqli_fetch_array($result1);
        include('dia.php');
        $instance = new dia();
        if(($dia["ball_1"] == 0) and ($dia["ball_2"] == 0) and ($dia["ball_3"] == 0) and ($dia["ball_4"] == 0)){
            $data = array('000000' => 60, '000000' => 50, '000000' => 23, '000000' => 45);
            $instance->generate($data);
        }
        else{
            $data = array('d6a700' => $dia["ball_1"], '00ac4f' => $dia["ball_2"], '0049a6' => $dia["ball_3"], 'a60063' => $dia["ball_4"]);
            $instance->generate($data);
        }
        print_r($card['mail']);
    }

 while ($card = mysqli_fetch_array($result));
}



