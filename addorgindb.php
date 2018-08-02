<?php include 'includes/header.php'; ?>
<?php include 'includes/menu.php'; ?>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- наш сайт будет подстариватся под разные типы дейвайсов-->
    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="menu.css">
<meta charset="utf-8" />
<title>Визитка.kz</title>
<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<style>
/*    article, aside, details, figcaption, figure, footer,header,
hgroup, menu, nav, section { display: block; } */
</style>
<br>
<br>
<?php 

include('db.php');
$orgName=$_POST['orgName'];
$categories=$_POST['categories'];
$timework8=$_POST['timework8'];
$timework9=$_POST['timework9'];

if (!empty($_POST['timework1'])){$timework1='checked';}else {$timework1='';}
if (!empty($_POST['timework2'])){$timework2='checked';}else {$timework2='';}
if (!empty($_POST['timework3'])){$timework3='checked';}else {$timework3='';}
if (!empty($_POST['timework4'])){$timework4='checked';}else {$timework4='';}
if (!empty($_POST['timework5'])){$timework5='checked';}else {$timework5='';}
if (!empty($_POST['timework6'])){$timework6='checked';}else {$timework6='';}
if (!empty($_POST['timework7'])){$timework7='checked';}else {$timework7='';}

$phone=$_POST['phone'];
$address=$_POST['address'];
$email=$_POST['email'];
$tags=$_POST['tags'];
$price=$_POST['price'];
$sale=$_POST['sale'];




$count = mysqli_query($connection, 
"INSERT INTO org 
(orgName, 
categories, 
timework1, 
timework2, 
timework3,
timework4,
timework5,
timework6,
timework7,
timework8,
timework9, 
phone, 
tags, 
price) 
VALUES 
('$orgName', 
'$categories', 
'$timework1', 
'$timework2', 
'$timework3', 
'$timework4', 
'$timework5', 
'$timework6', 
'$timework7', 
'$timework8', 
'$timework9', 
'$phone', 
'$tags', 
'$price')");


/* if( mysqli_num_rows($count) > 0 )
{
echo 'вы не зареганы';
}else 
{
    echo 'успешно! ' ; 
} */

mysqli_close($connection);
?>
<br>
<br>
 Добавленная информация отправлена модераторам. Спасибо за внесенный вклад в нашу базу!

