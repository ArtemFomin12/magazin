-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 10 2019 г., 04:41
-- Версия сервера: 5.6.41
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `artem_pn_09`
--

-- --------------------------------------------------------

--
-- Структура таблицы `magazin`
--

CREATE TABLE `magazin` (
  `img` varchar(355) NOT NULL,
  `name` varchar(355) NOT NULL,
  `price` varchar(355) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `magazin`
--

INSERT INTO `magazin` (`img`, `name`, `price`, `id`) VALUES
('2.jpg', 'FarCry New Dawn', '1299p', 2),
('1.jpg', 'Just Cause 4', '2000p', 3),
('3.jpg', 'Jagged Alliance RAGE!', '1500p', 10),
('4.jpg', 'Hellblade Senua\'s Sacrifice', '2999p', 11),
('5.jpg', 'RDR 2', '3000p', 12),
('tmp.png', '', '', 14);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `magazin`
--
ALTER TABLE `magazin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `magazin`
--
ALTER TABLE `magazin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
