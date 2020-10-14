-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 14 2020 г., 22:09
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gallery`
--

-- --------------------------------------------------------

--
-- Структура таблицы `img_info`
--

CREATE TABLE `img_info` (
  `id` int(11) NOT NULL,
  `addres` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` float NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `img_info`
--

INSERT INTO `img_info` (`id`, `addres`, `img`, `size`, `count`) VALUES
(1, 'img\\1.jpg', '1.jpg', 356, 3),
(2, 'img\\2.jpg', '2.jpg', 232, 1),
(3, 'img\\3.jpg', '3.jpg', 232, 14),
(4, 'img\\4.jpg', '4.jpg', 232, 1),
(5, 'img\\5.jpg', '5.jpg', 232, 0),
(6, 'img\\6.jpg', '6.jpg', 232, 2),
(7, 'img\\7.jpg', '7.jpg', 232, 1),
(8, 'img\\8.jpg', '8.jpg', 232, 0),
(9, 'img\\9.jpg', '9.jpg', 232, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `img_info`
--
ALTER TABLE `img_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `img_info`
--
ALTER TABLE `img_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
