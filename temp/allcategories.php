<?php 
include('../db.php');
$result = mysqli_query($connection, "SELECT * FROM `org` ORDER BY `org`.`categories` ASC");
 /* доделать блок. 
 1- вывод списка всех категорий -ссылок
 2. - после выбора категорий показать организации из списка (добавить сортировку по названию) -название организации, теги. описание- 
 3.  -при переходе по названию организации отображалась бы уже страница организации*/
?>
<select> <?php
 while ($cat=mysqli_fetch_assoc($result))
{
echo 
'<option>' . $cat['categories'].'</option>';
}

mysqli_close($connection); ?></select>


