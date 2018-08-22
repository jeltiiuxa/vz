<?php 
require "db.php";


// проверить авторизован пользователь или нет

if(isset($_SESSION['logged_user'])):?>
авторизован! <br>
привет, <?php echo $_SESSION['logged_user']->login; ?>!
<hr>

<a href="logout.php">Выйти</a>
<?php  else : ?>
<a href="login.php">Авторизоваться</a> <br>
<a href="signup.php">Регистрация</a>

<?php endif; ?>