<?php

require_once '../connect.php';

$account_id = $_GET['id'];

// С помощью id получаем данные пользователя, для дальнейших изменений

$account = mysqli_query($connect, "SELECT * FROM `account` WHERE `id` = '$account_id'");
$account = mysqli_fetch_assoc($account);

?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/Styles.css">
    <link rel="icon" href="img/favicon.jpg" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.jpg" type="image/x-icon">
</head>
<body>
<div id="container">
    <h3>Редактирование</h3>
    <form action=/functions/update_script.php method="post">
        <input type="hidden" name="id" value="<?=$account['id']?>">
        <p>Имя</p>
        <input type="text" name="first_name" value="<?=$account['first_name']?>">
        <p>Фамилия</p>
        <input type="text" name="last_name" value="<?=$account['last_name']?>">
        <p>Email</p>
        <input type="text" name="email" value="<?=$account['email']?>">
        <p>Название компании(необязательно)</p>
        <input type="text" name="company_name" value="<?=$account['company_name']?>">
        <p>Местонахождение(необязательно)</p>
        <input type="text" name="position" value="<?=$account['position']?>">
        <p>Телефон(необязательно)</p>
        <input type="text" name="phone1" value="<?=$account['phone_1']?>">
        <input type="text" name="phone2" value="<?=$account['phone_2']?>">
        <input type="text" name="phone3" value="<?=$account['phone_3']?>">
        <br><br>
        <button type="submit" >Изменить</button><br><br>
        <input type="submit" formaction="../index.php" value="На лавную">
    </form>
</div>
</body>
</html>
