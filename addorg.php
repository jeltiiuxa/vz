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



<?php 

include('db.php');

$result = mysqli_query($connection, "SELECT * FROM `org`");


while ($cat=mysqli_fetch_assoc($result))
{
echo 
'<fieldset> <legend align="left">' . $cat['orgName']. '</legend>'.$cat['categories'].'<br>
 <a href="tel:'.$cat['phone'] . '">'.$cat['phone'].'</a><br> '. $cat['timework8'].' '. $cat['timework9'].'
</fieldset>';
}


mysqli_close($connection); ?>
