<?php include 'includes/header.php'; ?>
<?php include 'includes/menu.php'; ?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">


<div class="add">
   Что Вы хотите добавить?              
</div>  

<fieldset><legend>введите данные:</legend>
    <div class="container">
        <div class="row">
            <div class="col-3">Наименование</div>
            <div class="col-8"><input type="text" placeholder="Наименование" name="orgName"></div>
        </div>
        <div class="row">
            <div class="col-3">категория</div>
            <div class="col-8"><input type="text"placeholder="например Аптеки" name="categories"></div>
        </div>
        <div class="row">
            <div class="col-3">Контакты</div>
            <div class="col-8"><input type="text"placeholder="адрес, телефон,e-mail" name="contacts"></div>
        </div>
        <div class="row">
            <div class="col-3">Теги для поиска</div>
            <div class="col-8"><input type="text"placeholder="лекарства, тонометр, здоровье" name="tags"></div>
        </div>
        
        <div class="row">
            <div class="col-3">тарифы/цены</div>
            <div class="col-8"><input type="text"placeholder="13.1 % годовых депозит, беззалоговый кредит от 20 % годовых, шины michelin от 29990" name="price"></div>
        </div>

        <div class="row">
            <div class="col-3">акции</div>
            <div class="col-8"><input type="text"placeholder="при покупке масла у нас-замена бесплатно до 31 декабря!" name="sale"></div>
        </div>

  <div class="row">
            <div class="col-3">о компании</div>
            <div class="col-8"><input type="text"placeholder="прочая информация о компании" name="aboutOrg"></div>
        </div>
    </div>

    <div class="row">
            <div class="col-3">Я, согласен(на) сс условиями публикации инфомрации (ЧЕКБОКС, и ссылка на слове условия)</div>
            <div class="col-8"><button> Кнопка с текстом</button></div>
        </div>
    </div>


</fieldset>










<?php include 'includes/footer.php'; ?>


























