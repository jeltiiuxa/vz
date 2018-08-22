<?php 
include('db.php');

mysqli_query($connection, 'SET NAMES utf8');

function search ($query) 
{ include('db.php');
    $query = trim($query); 
    $query = mysqli_real_escape_string($connection, $query);
    $query = htmlspecialchars($query);

    if (!empty($query)) 
    { 
        if (strlen($query) < 3) {
            $text = '<p>Слишком короткий поисковый запрос.</p>';
        } else if (strlen($query) > 20) {
            $text = '<p>Слишком длинный поисковый запрос.</p>';
        } else { 
            $q = "SELECT `orgName`, `phone1`, `phone2`, `phone3`, `address`, `tags`, `price`, `sale`
                  FROM `org` WHERE 
                  `orgName` LIKE '%$query%'
                  OR `phone1` LIKE '%$query%' 
                  OR `phone2` LIKE '%$query%'
                  OR `phone3` LIKE '%$query%'   OR `address` LIKE '%$query%' OR `tags` LIKE '%$query%' OR `price` LIKE '%$query%' OR `sale` LIKE '%$query%'
                  ";

            $result = mysqli_query($connection,$q);

            if (mysqli_affected_rows($connection) > 0) { 
                $row = mysqi_fetch_assoc($result); 
                $num = mysql_num_rows($result);

                $text = '<p>По запросу <b>'.$query.'</b> найдено совпадений: '.$num.'</p>';

                do {
                    // Делаем запрос, получающий ссылки на статьи
                    $q1 = "SELECT `link` FROM `table_name` WHERE `uniq_id` = '$row[page_id]'";
                    $result1 = mysql_query($q1);

                    if (mysql_affected_rows() > 0) {
                        $row1 = mysql_fetch_assoc($result1);
                    }

                    $text .= '<p><a> href="'.$row1['link'].'/'.$row['category'].'/'.$row['uniq_id'].'" title="'.$row['title_link'].'">'.$row['title'].'</a></p>
                    <p>'.$row['desc'].'</p>';

                } while ($row = mysql_fetch_assoc($result)); 
            } else {
                $text = '<p>По вашему запросу ничего не найдено.</p>';
            }
        } 
    } else {
        $text = '<p>Задан пустой поисковый запрос.</p>';
    }

    return $text; 
} 
?>
<?php 
if (!empty($_POST['query'])) { 
    $search_result = search ($_POST['query']); 
    echo $search_result; 
}
?>