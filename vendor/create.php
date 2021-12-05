<?php

require_once '../connect.php';

// Скрипт для обработки формы

if (isset($_POST['create_acc']))
{
    if (empty($_REQUEST['first_name']) && empty($_REQUEST['last_name']) && empty($_REQUEST['email']))
    {
        echo 'Не все обязательные поля заполнены';
    }
    else
        {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $company_name = $_POST['company_name'];
        $position = $_POST['position'];
        $phone_1 = $_POST['phone1'];
        $phone_2 = $_POST['phone2'];
        $phone_3 = $_POST['phone3'];
        mysqli_query($connect, "INSERT INTO `account` (`id`, `first_name`, `last_name`, `email`, `company_name`, `position`, `phone_1`, `phone_2`, `phone_3`) VALUES (NULL , '$first_name', '$last_name', '$email', '$company_name', '$position', '$phone_1', '$phone_2', '$phone_3')");
        echo 'Аккаунт добавлен';
    }
}


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
        <h3>Создание аккаунта</h3>
        <form action=create.php method="post">
            <p>Имя</p>
            <input type="text" name="first_name">
            <p>Фамилия</p>
            <input type="text" name="last_name">
            <p>Email</p>
            <input type="text" name="email">
            <p>Название компании(необязательно)</p>
            <input type="text" name="company_name">
            <p>Местонахождение(необязательно)</p>
            <input type="text" name="position">
            <p>Телефон(необязательно)</p>
            <input type="text" name="phone1">
            <input type="text" name="phone2">
            <input type="text" name="phone3">
            <br><br>
            <input name="create_acc" type="submit" value="Созадть аккаунт"> <br><br>
            <input type="submit" formaction="../index.php" value="На лавную">
        </form>
	</div>
</body>
</html>