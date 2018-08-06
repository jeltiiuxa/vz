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
$result = mysqli_query($connection, "SELECT * FROM `org`");
 /* доделать блок. 
 1- вывод списка всех категорий -ссылок
 2. - после выбора категорий показать организации из списка (добавить сортировку по названию) -название организации, теги. описание- 
 3.  -при переходе по названию организации отображалась бы уже страница организации*/
while ($cat=mysqli_fetch_assoc($result))
{
echo 
'<fieldset> <legend align="left">' . $cat['orgName']. '</legend>'.$cat['categories'].'<br>
 <a href="tel:'.$cat['phone1'] . '">'.$cat['phone1'].'</a>. '
 .'<a href="tel:'.$cat['phone2'] . '">'.$cat['phone2'].'</a> <br> '
 
 . $cat['timework8'].' '. $cat['timework9'].'
</fieldset>';
}


mysqli_close($connection); ?>
