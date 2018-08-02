<?php 
$connection =mysqli_connect(
    'localhost', 'id6529924_root', '12345', 'id6529924_vz');

if ($connection==false)
{
        echo 'не удалось подключиться к базе данных!<br>';
        echo mysqli_connect_error();
        exit (); }
mysqli_set_charset($connection,'utf8'); //чтобы вместо букв не отображались знаки вопроса или крукозябры




?>