index - главная

db.php подключение к бд.

    раздел добавления компаний:
add.php - с хейдера кнопка добавить- добавить организацию. 
addorgindb.php- обработчик добавления организации.


    раздел логирования:
stat.php обработчик логов- подключать на каждой нужной странице
seestats.php - показать логи 
seestatsbot.php- показать логи по ботам
base_bot, base_user- базы логов.

    раздел поиска:
search.php - поиск
searchout.php - ответ сервера по поиску

    раздел личного кабинета:
lk.php

<<<<<<< HEAD:info.php


<?php 
/*запрос на поиск */
$querycl = mysqli_query($connection, "SELECT * FROM `org` WHERE `orgName` LIKE '%$query%'"); 

?>


куски кода - хлам

    echo'' .'<hr class="hrbold">';

    
echo 
'<fieldset> <legend align="left">' .$qyerysrv['orgName']. 
'</legend>'.$qyerysrv['categories'].'<br>
 <a href="tel:'.$qyerysrv['phone1'] . '">'.$qyerysrv['phone1'].'</a>. '
 .'<a href="tel:'.$qyerysrv['phone2'] . '">'.$qyerysrv['phone2'].'</a> <br> '
 
 . $qyerysrv['timework8'].' '.$qyerysrv['timework9'].'
</fieldset>';
=======
 uh
>>>>>>> a786640243112a1f9afed20193638b3baa9e9af0:info
