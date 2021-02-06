<?php
$link = new mysqli('localhost','root','root','hackatom');
$mail = filter_var(trim($_COOKIE['mail']), FILTER_SANITIZE_STRING);
$fio = filter_var(trim($_COOKIE['fio']), FILTER_SANITIZE_STRING);
$text = filter_var(trim($_POST['text']), FILTER_SANITIZE_STRING);
$time = time();
$result = $link->query("INSERT INTO `comments` (`time`, `author`, `text`, `mail`) VALUES ('$time', '$fio', '$text', '$mail')");
header('Location: http://test.local/HackAtom/');
