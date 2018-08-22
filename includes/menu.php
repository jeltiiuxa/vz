<?php 
require "libs/db.php"; ?>
 <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- наш сайт будет подстариватся под разные типы дейвайсов-->
<!-- Bootstrap CSS -->
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="../menu.css">
<link rel="stylesheet" href="menu.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
<!-- HTML-структурА МЕНЮ -->
<input type="checkbox" id="hmt" class="hidden-menu-ticker"> <!-- input нам необходим для определения видимости меню: то есть если он выбран, то меню видно и наоборот.-->
<label class="btn-menu" for="hmt"><!-- label – это наша кнопка-бургер, которая привязана к инпуту.-->
  <span class="first"></span>
  <span class="second"></span>
  <span class="third"></span>
</label>

<ul class="hidden-menu">   <!-- ul – сам блок меню.-->

<?php // проверить авторизован пользователь или нет
if(isset($_SESSION['logged_user'])):?>
аватарка <br>
Привет, <?php echo $_SESSION['logged_user']->login; ?>!
<br>
<a href="logout.php">Выйти</a><hr>
<?php  else : ?>
<li class="nav-item"><a href="login.php">Войти</a> </li>
<li class="nav-item"><a href="signup.php">Зарегистрироваться</a></li>
<?php endif; ?>
<br>

    <li class="nav-item"><a href="index.php"><i class="fas fa-home"></i>Главная</a></li>
    <li class="nav-item"><a href="addorg.php">Услуги</a></li>
    <li class="nav-item"><a href="#">Товары</a></li>
    <li class="nav-item"><a href="#">Личный кабинет</a></li>
    <li class="nav-item"><a href="#">Мои визитки</a></li>
    <li class="nav-item"><a href="#">Настройки</a></li>
    <li class="nav-item"><a href="#">Прочее</a></li>
    <hr>
    рабочие ссылки &#8659;(TEMP)&#8659;
    <hr>
    <li class="nav-item"><a href="vizitka.php">образец одной визитки</a></li>
    <li class="nav-item"><a href="close.php">выход</a></li>
</ul>

<!-- доп див для менюшки-->
<div id="divmenuhide" for="hmt">

</div>
