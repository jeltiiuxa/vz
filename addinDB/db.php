<?php 
$connection =mysqli_connect('127.0.0.1', 'root', '12345', 'vz');

if ($connection==false)
{
        echo 'не удалось подключиться к базе данных!<br>';
        echo mysqli_connect_error();
        exit (); }
mysqli_set_charset($connection,'utf8'); //чтобы вместо букв не отображались знаки вопроса или крукозябры

?>