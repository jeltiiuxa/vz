<?php include 'includes/header.php'; ?>
<?php include 'includes/menu.php'; ?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<style>
input[type=text] {
  width: 100px;
  -webkit-transition: width .35s ease-in-out;
  transition: width .35s ease-in-out;
}
input[type=text]:focus {
  width: 100%;
}
    </style>
    <br>
    <br>
<form action="searchout.php" method="POST">
<div class="search">
    <input type="text" name="query" placeholder="что будем искать? =)">             
</div>   
          <!--КНОПКА ОТПРАВИТЬ И СБРОС-->
          <div class="row">
                            <div class="col-3 col-xl-3">
                            &nbsp;
                            </div>
                            <div class="col-3 col-xl-3">
                                <input type="submit"value="Сохранить"  >
                            </div>
                            <div class="col-3 col-xl-3">
                            <input type="reset" value="Очистить">
                            </div>
                            <div class="col-3 col-xl-3">
                            &nbsp;
                            </div>
                        </div>
                        <!--КНОПКА ОТПРАВИТЬ И СБРОС-->

</form>

                
               
















<code>
d:\laragon\www\viz (master) <br>
λ cd ..<br>
d:\laragon\www<br>
λ git clone https://github.com/jeltiiuxa/vz.git<br>
d:\laragon\www<br>
λ cd vz<br>
λ git status<br>
λ git add .<br>
λ git status<br>
λ git commit -m "add files"<br>
d:\laragon\www\vz (master)<br>
λ git push<br>
git pull<br>
</code>



<?php include 'includes/footer.php'; ?>