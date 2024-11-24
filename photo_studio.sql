-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Час створення: Лис 23 2024 р., 19:40
-- Версія сервера: 9.0.1
-- Версія PHP: 8.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `photo_studio`
--

-- --------------------------------------------------------

--
-- Структура таблиці `clients`
--

CREATE TABLE `clients` (
  `client_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `registration_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `clients`
--

INSERT INTO `clients` (`client_id`, `name`, `phone`, `registration_date`) VALUES
(1, 'Олександр Іванов', '+380123456789', '2024-11-23'),
(2, 'Марія Петренко', '+380987654321', '2024-11-22'),
(3, 'Ірина Ковальчук', '+380654321987', '2024-11-20');

-- --------------------------------------------------------

--
-- Структура таблиці `equipment`
--

CREATE TABLE `equipment` (
  `equipment_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `availability` tinyint(1) NOT NULL,
  `equipment_condition` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `equipment`
--

INSERT INTO `equipment` (`equipment_id`, `name`, `availability`, `equipment_condition`) VALUES
(1, 'Камера Canon EOS R5', 1, 'Нова'),
(2, 'Стіл для зйомки', 0, 'Відмінний стан');

-- --------------------------------------------------------

--
-- Структура таблиці `photographers`
--

CREATE TABLE `photographers` (
  `photographer_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `specialization` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `photographers`
--

INSERT INTO `photographers` (`photographer_id`, `name`, `specialization`, `phone`) VALUES
(1, 'Сергій Шевченко', 'Весільна фотографія', '+380123123123'),
(2, 'Оксана Довженко', 'Портретна фотографія', '+380321321321'),
(3, 'Іван Петров', 'Комерційна фотографія', '+380432432432');

-- --------------------------------------------------------

--
-- Структура таблиці `photo_session`
--

CREATE TABLE `photo_session` (
  `session_id` int NOT NULL,
  `client_id` int NOT NULL,
  `photographer_id` int NOT NULL,
  `type` varchar(100) NOT NULL,
  `date_time` datetime NOT NULL,
  `duration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `photo_session`
--

INSERT INTO `photo_session` (`session_id`, `client_id`, `photographer_id`, `type`, `date_time`, `duration`) VALUES
(1, 2, 1, 'Весільна фотосесія', '2024-11-25 10:00:00', 4),
(2, 1, 2, 'Портретна фотосесія', '2024-11-26 14:00:00', 2),
(3, 3, 3, 'Комерційна зйомка', '2024-11-27 14:00:00', 2);

-- --------------------------------------------------------

--
-- Структура таблиці `photo_session_equipment`
--

CREATE TABLE `photo_session_equipment` (
  `session_id` int NOT NULL,
  `equipment_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `photo_session_equipment`
--

INSERT INTO `photo_session_equipment` (`session_id`, `equipment_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Структура таблиці `photo_session_services`
--

CREATE TABLE `photo_session_services` (
  `session_id` int NOT NULL,
  `service_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `photo_session_services`
--

INSERT INTO `photo_session_services` (`session_id`, `service_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Структура таблиці `services`
--

CREATE TABLE `services` (
  `services_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `services`
--

INSERT INTO `services` (`services_id`, `name`, `price`, `description`) VALUES
(1, 'Весільна фотосесія', 1000, 'Повна зйомка весільного дня, включаючи підготовку, церемонію та святкову частину.'),
(2, 'Портретна фотосесія', 800, 'Індивідуальна фотосесія для портретних фото.');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Індекси таблиці `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`equipment_id`);

--
-- Індекси таблиці `photographers`
--
ALTER TABLE `photographers`
  ADD PRIMARY KEY (`photographer_id`);

--
-- Індекси таблиці `photo_session`
--
ALTER TABLE `photo_session`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `photographer_id` (`photographer_id`);

--
-- Індекси таблиці `photo_session_equipment`
--
ALTER TABLE `photo_session_equipment`
  ADD KEY `session_id` (`session_id`,`equipment_id`),
  ADD KEY `equipment_id` (`equipment_id`);

--
-- Індекси таблиці `photo_session_services`
--
ALTER TABLE `photo_session_services`
  ADD KEY `session_id` (`session_id`,`service_id`),
  ADD KEY `service_id` (`service_id`);

--
-- Індекси таблиці `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`services_id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `equipment`
--
ALTER TABLE `equipment`
  MODIFY `equipment_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблиці `photographers`
--
ALTER TABLE `photographers`
  MODIFY `photographer_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `photo_session`
--
ALTER TABLE `photo_session`
  MODIFY `session_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `services`
--
ALTER TABLE `services`
  MODIFY `services_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `photo_session`
--
ALTER TABLE `photo_session`
  ADD CONSTRAINT `photo_session_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `photo_session_ibfk_2` FOREIGN KEY (`photographer_id`) REFERENCES `photographers` (`photographer_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Обмеження зовнішнього ключа таблиці `photo_session_equipment`
--
ALTER TABLE `photo_session_equipment`
  ADD CONSTRAINT `photo_session_equipment_ibfk_1` FOREIGN KEY (`equipment_id`) REFERENCES `equipment` (`equipment_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `photo_session_equipment_ibfk_2` FOREIGN KEY (`session_id`) REFERENCES `photo_session` (`session_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Обмеження зовнішнього ключа таблиці `photo_session_services`
--
ALTER TABLE `photo_session_services`
  ADD CONSTRAINT `photo_session_services_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `services` (`services_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `photo_session_services_ibfk_2` FOREIGN KEY (`session_id`) REFERENCES `photo_session` (`session_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
