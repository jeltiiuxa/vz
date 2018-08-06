<?php 
/*
$vzhost="localhost";
$vzlogin="id6529924_root";
$vzpass="12345";
$vzbase="id6529924_vz";
*/

$vzhost="localhost";
$vzlogin="root";
$vzpass="12345";
$vzbase="vz";


$connection =mysqli_connect(
    $vzhost, $vzlogin, $vzpass, $vzbase);

if ($connection==false)
{
        echo 'не удалось подключиться к базе данных!<br>';
        echo mysqli_connect_error();
        exit (); }
mysqli_set_charset($connection,'utf8'); //чтобы вместо букв не отображались знаки вопроса или крукозябры




?>