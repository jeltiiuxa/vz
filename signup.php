<?php include 'includes/header.php'; ?>
<?php include 'includes/menu.php'; ?>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<style>
body {text-align:center;padding:0px;margin:0px;}
#lkreglogin, #lkinpass {width:50%;}
.error{background:salmon;}
p~p,.zaglk {margin:0px;}
</style>
<br><br>
<?php 
$data = $_POST;
if( isset($data['do_signup']) )
{//тут регистрируем 
    if(trim($data['login'])=='' )
    {
        $errors[]='
        <div class="error">Введите логин</div>';
    }
    if(trim($data['email'])=='' )
    {
        $errors[]='
        <div class="error">Введите email</div>';
    }
    if(($data['password'])=='' )
    {
        $errors[]='
        <div class="error">Введите пароль</div>';
    }
    if(($data['password_2'])!= $data['password'] )
    {
        $errors[]='
        <div class="error">введеные пароли не совпадают!</div>';
    }

    //проверка на повторный логни/пароль
    if(R::count('users', "login = ?", array($data['login'])) > 0  )
    {
        $errors[]='<div class="error">пользователь с таким логином уже существует</div>';
    }
    if(R::count('users', "email = ?", array($data['email'])) > 0  )
    {
        $errors[]='<div class="error">пользователь с таким Email уже существует</div>';
    }
    if (empty($errors)){
        //все хорошо можно зарегистрировать
       $user=R::dispense('users');
       $user->login = $data['login'];
       $user->email = $data['email'];
       $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
       R::store($user);
       echo '<div style="color:green;">Вы успешно зарегистрировались! <br> Можете перейти на <a href="/vz"> главную</a> страницу!</div><hr>';

    } else 
    {
        echo '<div class="error">'.array_shift($errors).'</div><hr>';
    }
}
?>

<form action="signup.php" method="POST">
    <p>
        <p class="zaglk"><strong>Введите логин:</strong></p>  
        <input type="text" name="login" id="lkreglogin" value="<?php echo @$data['login'];?>">
    </p>
    <p>
        <p class="zaglk"><strong>Введите email:</strong></p>
        <input type="email" name="email" value="<?php echo @$data['email'];?>">
    </p>
    <p>
        <p class="zaglk"><strong>Введите Пароль</strong></p>
        <input type="password" name="password"value="<?php echo @$data['password'];?>">
    </p>
    <p>
        <p class="zaglk"><strong>Введите Ваш пароль еще раз</strong></p>
        <input type="password" name="password_2"value="<?php echo @$data['password_2'];?>">
    </p>
    <p>
    <button type="submit" name="do_signup">Зарегестрироваться</button>
    </p>
</form>
