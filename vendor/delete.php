<?php

require_once '../connect.php';

// Скрипт-обработчик для удаления аккаунтов из бд

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `account` WHERE `account`.`id` = '$id'");

header('Location: ../');