<?php

require_once '../connect.php';

// Скрипт-обработчик для изменения данных в бд

$id = $_POST['id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$company_name = $_POST['company_name'];
$position = $_POST['position'];
$phone_1 = $_POST['phone1'];
$phone_2 = $_POST['phone2'];
$phone_3 = $_POST['phone3'];

mysqli_query($connect, "UPDATE `account` SET `first_name` = '$first_name', `last_name` = '$last_name', `email` = '$email', `company_name` = '$company_name', `position` = '$position', `phone_1` = '$phone_1', `phone_2` = '$phone_2', `phone_3` = '$phone_3' WHERE `account`.`id` = '$id'");

header('Location: ../');

?>