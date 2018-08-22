<?php include 'includes/header.php'; ?>
<?php include 'includes/menu.php'; ?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<br>
<br>
<style>
.hrbold {height:40px;width:10px;background:black;} 
</style>

<?php 

include('db.php');
$query=$_POST['query'];

$querycl = mysqli_query($connection, "SELECT * FROM `org` WHERE `orgName` or `phone1` or `tags` LIKE '%$query%'");
 /* доделать блок. 
 1- вывод списка всех категорий -ссылок
 2. - после выбора категорий показать организации из списка (добавить сортировку по названию) -название организации, теги. описание- 
 3.  -при переходе по названию организации отображалась бы уже страница организации*/
while ($qyerysrv=mysqli_fetch_assoc($querycl))
{

echo 
'<fieldset> <legend align="left">' .$qyerysrv['orgName']. 
'</legend>'.$qyerysrv['categories'].'<br>
 <a href="tel:'.$qyerysrv['phone1'] . '">'.$qyerysrv['phone1'].'</a>. '
 .'<a href="tel:'.$qyerysrv['phone2'] . '">'.$qyerysrv['phone2'].'</a> <br> '
 
 . $qyerysrv['timework8'].' '.$qyerysrv['timework9'].'
</fieldset>';
}


mysqli_close($connection); ?>



<?php include 'includes/footer.php'; ?>