<?php 
require "db.php";
$data = $_POST;
//если нажата кнопка do_login
if (isset($data['do_login']) ) 
{   
    $errors = array();
    $user=R::findOne('users', 'login= ?', array($data['login']     ));
    if( $user )
    {   
    //если логин существует - проверяем пароль
        if(password_verify($data['password'], $user->password)) 
        {//все хорошо, логиним полльзователя
            $_SESSION['logged_user'] = $user;
            echo '<div style="color:green;">Вы авторизованы! Моежте перейти на <a href="/kabinet/"> главную</a> страницу! </div><hr>';
        }   else 
        {
            $errors[]= 'неверно введен пароль!';
        }



    } else //если не найден
    {
        $errors[]='пользователь с таким логином не найден!';
    }
    if (!empty($errors))
    {
        echo '<div style="color:red;">'.array_shift($errors).'</div><hr>';
    }


}



?>

<form action="login.php" method="post">
    <p>
      <p><strong>Логин:</strong></p>
      <input type="text" name="login" value="<?php echo @$data['login'];?>">
    </p>

     <p>
       <p><strong>Пароль:</strong></p>
       <input type="password" name="password" value="<?php echo @$data['password'];?>">
    </p>

     <p>
    <button type="submit" name="do_login">Войти</button>
    </p>

</form>