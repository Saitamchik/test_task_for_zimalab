-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 05 2021 г., 16:29
-- Версия сервера: 5.7.33-log
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_1` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_2` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_3` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `account`
--

INSERT INTO `account` (`id`, `first_name`, `last_name`, `email`, `company_name`, `position`, `phone_1`, `phone_2`, `phone_3`) VALUES
(10, 'Savva', 'Syrkashev', 'sa', 'zimalab', 'sadfdas', 'dasfasf', 'dasdsff', 'asdfasfd'),
(11, 'aasdasdad', 'asdasdasd', 'addfgdgfg', 'gsfdgsg', 'sdfgdsfgs', 'fsdgfsd', 'dfgdsgfsg', 'gdfsgsdsg'),
(12, 'asdsadas', 'asdsd', 'sdfdf', 'sdfsd', 'sdfdsfs', 'sdfsd', 'sdf', 'sdf'),
(13, 'asdasdd', 'asdasfsgf', 'sdfgfhgfgh', 'fdfdghdf', 'hhd', 'ghdfhhdgfh', 'fgdhg', NULL),
(14, 'fdgfd', 'dfsdadfsbv', 'fsdgdaf', 'sdagfdffsgh', 'dfgsdadf', 'sadfdfdfa', 'adfdfda', 'sadf'),
(15, 'adadfsfasd', 'dsaffafdasdf', 'afsfdadsfffa', 'asdf', 'aasd', 'fsadf', 'asdsf', 'asdf'),
(16, 'adsfasdf', 'adsfadf', 'asdfasd', 'sdfsdafads', 'sdaf', 'asdf', 'sdaf', 'adf'),
(17, 'sdfgfsd', 'dfsg', 'dfsg', 'fsdg', 'fsdg', 'fdsg', 'fsdg', 'sdfgsh'),
(18, 'fdsfsdgg', 'dsgfsggsg', 'affdgdf', 'ggffdfg', 'asdff', 'kljkh', 'jhk', NULL),
(19, 'tyur', 'hgfgdvbn', 'chdrt', 'hbd', 'afsdaf', 'dfsd', 'vcbn', 'dtyrt'),
(20, 'yuiyui', 'ghjfgjhg', 'gjhkjk', 'hjk', 'jkl', 'fdsgkjlh', 'hjlk', 'hjkl'),
(21, 'fsdgs', 'dsfasdf', 'sdf', 'sadf', 'dsaf', 'dsaf', 'asdf', 'sadf'),
(22, 'fgsdf', 'sdfgdsfg', 'dfsgfsdg', 'dfsg', 'dsfg', 'dsfg', 'fsdg', 'sdfg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
