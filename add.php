<?php include 'includes/header.php'; ?>
<?php include 'includes/menu.php'; ?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<div class="container">
    <div class="row">
        Что Вы хотите добавить?              
        <body>
            <form action="addorgindb.php" method="POST" >
                <div class="vizitka"> 
                    <fieldset> 
                            <legend align="left"><input type="text" placeholder="Наименование" name="orgName"required>
                            </legend>
                        <input type="text" placeholder="категория" name="categories" required>
                        <!-- время работы-->
                            <fieldset> 
                                <legend align="left">
                                Время работы
                                </legend>
                                <div class="timework"> 
                                    <div class="row">
                                        <div class="col-1">
                                        &nbsp;
                                        </div>
                                        <div class="col-1">
                                        c
                                        </div>
                                        <div class="col-10">
                                        <input type="time"placeholder="время работы" name="timework8" ><br>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1">
                                        &nbsp;
                                        </div>
                                        <div class="col-1">
                                        по
                                        </div>
                                        <div class="col-10">
                                            <input type="time"placeholder="время работы" name="timework9"> <br>
                                        </div>
                                    </div>
                                        <div>
                                        <input type="checkbox" name="timework1"  checked>понедельник<br>
                                            <input type="checkbox" name="timework2"  checked>Вторник<br>
                                            <input type="checkbox" name="timework3"  checked>Среда<br>
                                            <input type="checkbox" name="timework4" checked>Четверг<br>
                                            <input type="checkbox" name="timework5"  checked>Пятница<br>
                                            <input type="checkbox" name="timework6"  >Суббота<br>
                                            <input type="checkbox" name="timework7"  >Воскресенье<br>
                                        </div>
                                </div>
                            </fieldset>
                        <!-- время работы-->
                        <!-- КОНТАКТЫ-->
                            <fieldset> 
                                <legend align="left">
                                    Контакты:
                                </legend>
                                <div class="contacts"> 
                                    <input type="tel"placeholder="телефон, телефон" name="phone"required>
                                    <input type="text"placeholder="адрес" name="address">
                                    <input type="email"placeholder="e-mail" name="email">
                                </div>
                            </fieldset> 
                        <!-- КОНТАКТЫ-->
                         <!-- ТЕГИ-->
                            <fieldset> 
                                <legend align="left">
                                    Теги
                                </legend>
                                <div class="tag"> 
                                    <input type="text"placeholder="#теги" name="tags"required> <br>
                                    минимум 3 тега, разделеные запятыми(без пробелов в словах) - при нажатии на которые будет осуществляться поиск с базы
                                </div>
                            </fieldset>
                         <!-- ТЕГИ-->
                         <!--акции скрыть блок если нет акций-->
                            <fieldset> <legend align="left">АКЦИИ!/РАСПРОДАЖИ!</legend>
                                <div class="action"> 
                                     <div class="row">
                                        <div class="col-1">&nbsp;</div>
                                        <div class="col-11">
                                        <textarea name="sale">    </textarea></div>
                                    </div>
                                </div>                             
                            </fieldset>
                        <!--акции скрыть блок если нет акций-->
                        <!-- About-->
                            <fieldset>
                                <legend align="left">
                                         Условия/тарифы
                                </legend>
                                <div class="row">
                                    <div class="col-1">&nbsp;</div>
                                        <div class="col-11">
                                    <textarea name="price" placeholder="13.1 % годовых депозит, беззалоговый кредит от 20 % годовых, шины michelin от 29990"></textarea></div>
                                </div>
                            </fieldset>
                        <!-- About-->
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
                    </fieldset>
                </div>
            </form>
        </body>
    </div>
</div>
<?php include 'includes/footer.php'; ?>

























