-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 24 2021 г., 20:02
-- Версия сервера: 5.7.33
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `restaurant`
--

-- --------------------------------------------------------

--
-- Структура таблицы `dish`
--

CREATE TABLE `dish` (
  `dish_id` bigint(20) UNSIGNED NOT NULL,
  `dish_name` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dish_country` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dish_deliver_name` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_company` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `dish`
--

INSERT INTO `dish` (`dish_id`, `dish_name`, `dish_country`, `dish_deliver_name`, `delivery_company`) VALUES
(2, 'Борщ', 'Украинская', 'Алексеев Георгий', 'Еда под дверь'),
(3, 'Бургер', 'Американская', 'Кондратьева Евгения', 'Yandex'),
(4, 'Вареники', 'Украинская', 'Кочетов Святослав', 'Доставка24'),
(5, 'Банга', 'Африканская', 'Кудряшова Анна', 'Just For You'),
(6, 'Гаспачо', 'Испанская', 'Мальцева Алиса', 'Ikura'),
(7, 'Пицца', 'Итальянская', 'Соколов Мирон', 'EmDoma'),
(8, 'Такко', 'Мексиканская', 'Соколов Мирон', 'EmDoma'),
(9, 'Жульен', 'Французская', 'Ткачев Андрей', 'Delivery Club'),
(10, 'Суши', 'Японская', 'Ткачев Андрей', 'Delivery Club'),
(11, 'Менудо', 'Мексиканская', 'Филиппов Максим', 'GREENS'),
(12, 'Тонкоцу рамен', 'Японская', 'Фирсова Мария', 'Дядя Чебурек'),
(13, 'Гамбо', 'Американская', 'Чистяков Семён', 'Top Deliver'),
(14, 'Буйабес', 'Французская', 'Чистяков Семён', 'Top Deliver'),
(15, 'Креветочный Суп', 'Мексиканская', 'Яковлев Даниэль', 'Kai Fui'),
(16, 'Калу Верде', 'Африканская', 'Яковлев Даниэль', 'Kai Fui');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `dish`
--
ALTER TABLE `dish`
  ADD PRIMARY KEY (`dish_id`),
  ADD UNIQUE KEY `dish_id` (`dish_id`) USING BTREE,
  ADD KEY `dish_deliver_name` (`dish_deliver_name`) USING BTREE,
  ADD KEY `delivery_company` (`delivery_company`) USING BTREE,
  ADD KEY `dish_country` (`dish_country`,`dish_deliver_name`,`delivery_company`) USING BTREE;

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `dish`
--
ALTER TABLE `dish`
  MODIFY `dish_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
