<?php

require_once 'connect.php';

// Проверка подключения к бд

if(!$connect)
{
    echo 'Error';
}

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = '10';
$offset = $limit * $page;

// Получаем все данные из таблицы( Можно пойти другим путем. Получать по 10 строк, но тогда предёться менять управление пагинацией)

$result = mysqli_query($connect, "SELECT * FROM `account`");
for($data=[];$row=mysqli_fetch_assoc($result);$data[]=$row) ;
$result='';
$p = 1;
$page_count = floor(count($data) / $limit);

$mass = array();
$i = 0;

// Формируем строки с использованием верстки, и запиываем строку в массив

foreach($data as $elem) {

    $result.='<tr>';

    $result.='<td>'.$elem['id'].'</td>';
    $result.='<td>'.$elem['first_name'].'</td>';
    $result.='<td>'.$elem['last_name'].'</td>';
    $result.='<td>'.$elem['email'].'</td>';
    $result.='<td>'.$elem['company_name'].'</td>';
    $result.='<td>'.$elem['position'].'</td>';
    $result.='<td>'.$elem['phone_1'].'</td>';
    $result.='<td>'.$elem['phone_2'].'</td>';
    $result.='<td>'.$elem['phone_3'].'</td>';
    $result.='<td>'.'<a href="vendor/update.php?id='.$elem['id'].'">'.'Изменить'.'</a>'.'</td>'; // Создаем ссылки, которые перенаправят на форму и отправят id
    $result.='<td>'.'<a style="color:red;" href="vendor/delete.php?id='.$elem['id'].'">'.'Удалить'.'</a>'.'</td>';

    $result.='</tr>';

    $mass[$i] = $result;
    $i++;

    $result = '';

}


?>

<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/Styles.css">
	<link rel="icon" href="img/favicon.jpg" type="image/x-icon">
	<link rel="shortcut icon" href="img/favicon.jpg" type="image/x-icon">
</head>
<body>
	<div id="container">
        <br><br>
        <table>
            <tr>
                <th>ID</th>>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>email</th>
                <th>Имя компании</th>
                <th>Местонахождение</th>
                <th>Телефон 1</th>
                <th>телефон 2</th>
                <th>Телефон 3</th>
            </tr>
            <?php
            for($i = $page*$limit; $i < ($page+1)*$limit; $i++)     //Выводим массив в таблицу
                echo $mass[$i];
            ?>
        </table>
        <br>
        <?php for($p =0; $p <= $page_count; $p++) :?>
        <a href="?page=<?php echo $p; ?>"><button class="page_button"><?php echo $p + 1; ?></button> </a>
        <?php endfor;?>
        <br><br>
        <form>
            <input type="submit" formaction= "vendor/create.php" value="Создать">
        </form>
	</div>
</body>
</html>