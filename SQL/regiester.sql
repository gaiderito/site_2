-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 09 2024 г., 20:54
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `regiester`
--

-- --------------------------------------------------------

--
-- Структура таблицы `katalog`
--

CREATE TABLE `katalog` (
  `id` int NOT NULL,
  `product` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `foto` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `katalog`
--

INSERT INTO `katalog` (`id`, `product`, `price`, `foto`) VALUES
(1, 'Бойцовский клуб', 799, 'img/fight.jpg'),
(2, 'История 5-й класс', 599, 'img/book5.jpg'),
(3, 'Дневник 3', 1499, 'img/book3.jpg'),
(4, 'Талант', 999, 'img/book1.jpg'),
(5, 'Санбой', 799, 'img/sunboy.jpg'),
(6, 'Death Note', 499, 'img/book4.png'),
(7, 'Drive', 999, 'img/drive.jpg'),
(29, 'Гарри Поттер и кубок огня', 999, 'img/harry.jpg'),
(30, 'Уличный кот по имени Боб', 799, 'img/kot.jpg'),
(32, 'Капитал', 1199, 'img/marcs.jpg'),
(34, 'Криминальное чтиво', 1300, 'img/kriminal.png'),
(35, 'Оно', 899, 'img/it.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `korzina`
--

CREATE TABLE `korzina` (
  `id` int NOT NULL,
  `login` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int NOT NULL,
  `summa` int NOT NULL,
  `foto` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `email`) VALUES
(31, 'Vlados', '123', 'wdawws@gmial.com'),
(33, 'Admin', 'Adminsky', 'adminadminovich@gmail.com'),
(35, 'Leo_Messi', '2323', 'fcbarcelonaforever@gmail.com'),
(36, 'Serega_Pirat', 'pirat228', 'vibeman@gmail.com'),
(37, 'asd', 'asd', 'asd@asd.ru'),
(38, 'BOMJ', '12356', 'adsgbuesbguyh@suhdbgsubhb.com'),
(39, 'BOMJ', '12356', 'adsgbuesbguyh@suhdbgsubhb.com'),
(40, 'BOMJ', '12356', 'adsgbuesbguyh@suhdbgsubhb.com'),
(41, 'BOMJ', '12356', 'adsgbuesbguyh@suhdbgsubhb.com'),
(42, 'BOMJ', '12356', 'adsgbuesbguyh@suhdbgsubhb.com');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `korzina`
--
ALTER TABLE `korzina`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `katalog`
--
ALTER TABLE `katalog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT для таблицы `korzina`
--
ALTER TABLE `korzina`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
