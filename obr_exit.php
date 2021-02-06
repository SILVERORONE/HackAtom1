<?php

setcookie('mail','', time() - 3600, "/");
setcookie('password', '', time() - 3600, "/");
setcookie('fio', '', time() - 3600, "/");
setcookie('img', '', time() - 3600, "/");
setcookie('tel', '', time() - 3600, "/");
header('Location: http://test.local/HackAtom/');


?>
