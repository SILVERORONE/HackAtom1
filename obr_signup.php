<?php


$mail = filter_var(trim($_POST['mail']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
$fio = filter_var(trim($_POST['fio']), FILTER_SANITIZE_STRING);
$tel = filter_var(trim($_POST['tel']), FILTER_SANITIZE_STRING);


$mysql = new mysqli('localhost','root','root','hackatom');
$mysql->query("INSERT INTO `user` (`mail`, `password`, `fio`, `tel`, `id_resume`, `id_project`, `average_ball`) 
VALUES('$mail', '$password', '$fio', '$tel', NULL, NULL, NULL)");



$link = new mysqli('localhost','root','root','hackatom');
$result = $link->query("SELECT * FROM `user` WHERE `mail` = '$mail' AND `password` = '$password'");
$user = $result->fetch_assoc();
$mysql->close();

setcookie('mail', $user['mail'], time() + 3600, "/");
setcookie('fio', $user['fio'], time() + 3600, "/");
setcookie('password', $user['password'], time() + 3600, "/");



header('Location: http://test.local/HackAtom/');
exit();

