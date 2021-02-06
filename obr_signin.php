<?php
$link = new mysqli('localhost','root','root','hackatom');
$mail = filter_var(trim($_POST['mail']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
$result = $link->query("SELECT * FROM `user` WHERE `mail` = '$mail' AND `password` = '$password'");
$user = $result->fetch_assoc();
if (count($user) == 0) {
    echo "Логин или пароль введен неправильно";
    exit();}
else {
        setcookie('mail', $user['mail'], time() + 3600, "/");
        setcookie('password', $user['password'], time() + 3600, "/");
        setcookie('fio', $user['fio'], time() + 3600, "/");
        setcookie('img', $user['img'], time() + 3600, "/");
        setcookie('tel', $user['tel'], time() + 3600, "/");
header('Location: http://test.local/HackAtom/');

    }




