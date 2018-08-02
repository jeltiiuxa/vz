<?php include 'includes/menu.php'; ?>
<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="css/bootstrap.min.css">

<br>
<link rel="stylesheet" href="css/style.css">
<style type="text/css">
.feedback {
    width: 550px;
    margin: 15px auto;
    padding: 5px;
    text-align: center;
    background-color: #CCCCCC;
    border-radius: 7px;
    border: 1px solid #666666;
}
.feedback textarea { width: 540px; height: 80px; resize: none; }
.feedback>div { margin: 4px 0; }
.feedback input[type="text"] { border: 1px solid #666666; }
#login { float: left; }
#key, #mail { text-align: right; }
</style>

<?php
if (session_id()=='') session_start();
if (isset($_POST["key"])) {
 $mail='jeltiiuxa@mail.ru';                //Ваш почтовый ящик
 $redirect=$_SERVER['HTTP_REFERER'];
 $_SESSION["login"]=$_POST["login"];
 $_SESSION["mail"]=$_POST["mail"];
 $_SESSION["message"]=$_POST["message"];

 if ($_POST["key"]==md5($_POST["summ_key"])) {
    if ($_POST["login"]!='' and $_POST["message"]!='' and $_POST["mail"]!='') {
        $subject="Сообщение через форму обратной связи";
        $msg='Имя: '.htmlspecialchars($_SESSION["login"]).PHP_EOL;
        $msg.='E-mail: '.htmlspecialchars($_SESSION["mail"]).PHP_EOL;
        $msg.=htmlspecialchars($_SESSION["message"]);

        $headers="MIME-Version: 1.0\r\n";
        $headers.="Content-type: text/plain; charset=utf-8\r\n";
        $headers.="From: site.ru";
        mail($mail, $subject, $msg, $headers);
        $_SESSION["notice"]='Ваше сообщение было отправлено!';
        $_SESSION["login"]='';
        $_SESSION["message"]='';
        $_SESSION["mail"]='';
        header("Location: $redirect");
        exit;
    }
    else $_SESSION["notice"]="Вы заполнили не все поля!";
 }
 else {
    $_SESSION["notice"]="Неправильный проверочный код!";
    header("Location: $redirect");
    exit;
 }
}
?>





<div class="container">
    <div class="row">
        <div class="col-12">
            <?php
            $c=rand(100,450);
            $c2=rand(1,50);
            echo '<form method="POST" class="feedback">Отправить сообщение администрации';
            echo '<textarea name="message">'.$_SESSION["message"].'</textarea>';
            echo '<div id="login">Ваше имя: ';
            echo '<input type="text" name="login" value="'.$_SESSION["login"].'"></div>';
            echo '<div id="mail">E-mail: ';
            echo '<input type="text" name="mail" value="'.$_SESSION["mail"].'"></div>';
            echo '<div id="key">'.$c.' + '.$c2.' = ';
            echo '<input type="hidden" name="key" value="'.md5($c+$c2).'">';
            echo '<input type="text" name="summ_key" size="4"> ';
            echo '<input type="submit" value="Отправить"></div></form>';
            if ($_SESSION["notice"]!=''){
            echo $_SESSION["notice"];
            $_SESSION["notice"]='';
            }
            ?>

        </div>
    </div>
</div>

<br>


<?php include 'includes/footer.php'; ?>