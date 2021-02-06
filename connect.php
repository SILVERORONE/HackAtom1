<?php
$link = new mysqli('localhost','root','root','hackatom');
$sql = "SELECT * FROM `user` WHERE average_ball BETWEEN 100 AND 500";
$info = $link->query($sql);
    if (mysqli_num_rows($info) > 0) {
        $asd = mysqli_fetch_array($info);
            do {
                echo '<p>Имя:' . $asd["name"] . '</p>';
            }
    while ($asd = mysqli_fetch_array($info));
    }
$count = $link->query("SELECT  * FROM `user` WHERE average_ball BETWEEN 100 AND 500");
$count_stud = mysqli_num_rows($count);
echo $count_stud;
?>
