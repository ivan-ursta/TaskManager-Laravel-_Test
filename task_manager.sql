-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Час створення: Чрв 24 2022 р., 17:00
-- Версія сервера: 8.0.29-0ubuntu0.22.04.2
-- Версія PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `task_manager`
--

-- --------------------------------------------------------

--
-- Структура таблиці `Task`
--

CREATE TABLE `Task` (
  `Id` int NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Exec_status` varchar(20) NOT NULL,
  `User_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `Task`
--

INSERT INTO `Task` (`Id`, `Name`, `Description`, `Exec_status`, `User_id`, `created_at`, `updated_at`) VALUES
(1, 'Task1', 'Edit something', 'new', 10, NULL, NULL),
(2, 'Task2', 'Edit something', 'in work', 9, NULL, NULL),
(3, 'Task3', 'Edit something', 'on inspection', 8, NULL, NULL),
(4, 'Task4', 'Edit something', 'completed', 7, NULL, NULL),
(5, 'Task5', 'Edit something', 'new', 6, NULL, NULL),
(6, 'Task6', 'Edit something', 'completed', 5, NULL, NULL),
(7, 'Task7', 'Edit something', 'in work', 4, NULL, NULL),
(8, 'Task8', 'Edit something', 'on inspection', 3, NULL, NULL),
(9, 'Task9', 'Edit something', 'on inspection', 2, NULL, NULL),
(10, 'Task10', 'Edit something', 'in work', 1, NULL, NULL),
(11, 'Task11', 'Edit something', 'completed', 10, NULL, NULL),
(12, 'Task12', 'Edit something', 'new', 9, NULL, NULL),
(13, 'Task13', 'Edit something', 'in work', 8, NULL, NULL),
(14, 'Task14', 'Edit something', 'new', 7, NULL, NULL),
(15, 'Task15', 'Edit something', 'completed', 6, NULL, NULL),
(16, 'Task16', 'Edit something', 'on inspection', 5, NULL, NULL),
(17, 'Task17', 'Edit something', 'on inspection', 4, NULL, NULL),
(18, 'Task18', 'Edit something', 'new', 3, NULL, NULL),
(19, 'Task19', 'Edit something', 'new', 2, NULL, NULL),
(20, 'Task20', 'Edit something', 'in work', 1, NULL, NULL),
(21, 'Task21', 'do something', 'new', 1, '2022-06-24 10:53:54', '2022-06-24 10:53:54');

-- --------------------------------------------------------

--
-- Структура таблиці `Users`
--

CREATE TABLE `Users` (
  `Id` int NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Passwd` varchar(50) NOT NULL,
  `Role` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `Users`
--

INSERT INTO `Users` (`Id`, `Name`, `Email`, `Passwd`, `Role`, `created_at`) VALUES
(1, 'Ivan', 'ursta@gmail.com', '12345', 'admin', NULL),
(2, 'Kate', 'kate@gmail.com', '1111', 'user', NULL),
(3, 'John', 'John@gmail.com', '2222', 'moderator', NULL),
(4, 'Vasil', 'Vasil@gmail.com', '3333', 'user', NULL),
(5, 'Vitalii', 'Vitalii@gmail.com', '4444', 'user', NULL),
(6, 'Boris', 'Boris@gmail.com', '5555', 'moderator', NULL),
(7, 'Karoline', 'Karoline@gmail.com', '6666', 'moderator', NULL),
(8, 'Viktoria', 'Viktoria@gmail.com', '1122', 'user', NULL),
(9, 'Eugen', 'Eugen@gmail.com', '7777', 'user', NULL),
(10, 'Misha', 'Misha@gmail.com', '8888', 'user', NULL);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `Task`
--
ALTER TABLE `Task`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Name` (`Name`),
  ADD KEY `User_id` (`User_id`);

--
-- Індекси таблиці `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Name` (`Name`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `Task`
--
ALTER TABLE `Task`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблиці `Users`
--
ALTER TABLE `Users`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `Task`
--
ALTER TABLE `Task`
  ADD CONSTRAINT `Task_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `Users` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
