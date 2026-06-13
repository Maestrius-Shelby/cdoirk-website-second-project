-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 02 2023 г., 14:18
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
-- База данных: `ssuwt_center_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `announcements`
--

CREATE TABLE `announcements` (
  `id` int NOT NULL,
  `announcements text` varchar(350) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `announcements`
--

INSERT INTO `announcements` (`id`, `announcements text`) VALUES
(1, 'Подать заявку можно на нашем сайте или по телефону: +7 383 316 20 50.'),
(2, '18 сентября – новый набор старшеклассников на курсы подготовки к ОГЭ/ЕГЭ.'),
(3, '10 октября – старт общеразвивающей программы для старшеклассников и студентов-первокурсников \"English for beginners\".'),
(4, '19 октября, в 17:45 – начало обучения по общеразвивающей программе \"Английский для начинающих\".');

-- --------------------------------------------------------

--
-- Структура таблицы `applications`
--

CREATE TABLE `applications` (
  `id` int NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `surname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone_number` varchar(18) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `applications`
--

INSERT INTO `applications` (`id`, `name`, `surname`, `email`, `phone_number`) VALUES
(88, 'Максим', 'Корченко', 'korchenko6484@gnil.com', '+7 (896) 597-84-10'),
(90, 'Максим', 'Корченко', 'korchenko6484@gmail.com', '+7 (896) 597-84-11'),
(92, 'Евгений', 'Аладко', 'aladko23@gmail.com', '+7 (913) 723-48-46'),
(93, 'Кирилл', 'Жуков', 'kik227@gmail.com', '+7 (946) 154-61-52'),
(94, 'Александр', 'Волков', 'alexwolf228777@mail.ru', '+7 (895) 454-65-46');

-- --------------------------------------------------------

--
-- Структура таблицы `calendar of events`
--

CREATE TABLE `calendar of events` (
  `id` int NOT NULL,
  `calendar of events text` varchar(350) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `calendar of events`
--

INSERT INTO `calendar of events` (`id`, `calendar of events text`) VALUES
(1, '1 августа, вторник – Родительское онлайн-собрание.'),
(2, '1 сентября, пятница – Праздник День знаний.'),
(3, '9 сентября, суббота, в 14:30 – Организационное собрание для выпускников и их родителей.'),
(4, '12 сентября, вторник, в 18:00 – День открытых дверей Центра.'),
(5, '16 сентября, суббота, в 14:00 – День открытых дверей Центра.'),
(6, '18 сентября, понедельник – начало работы курсов подготовки к ОГЭ/ЕГЭ.'),
(7, '29 октября, воскресенье, в 12:00 – День открытых дверей в Сибирском государственном университете водного транспорта.');

-- --------------------------------------------------------

--
-- Структура таблицы `direction_of_training`
--

CREATE TABLE `direction_of_training` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `direction of training` varchar(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `course` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `direction_of_training`
--

INSERT INTO `direction_of_training` (`id`, `user_id`, `direction of training`, `course`, `date`) VALUES
(20, 88, 'Для взрослых', 'Web-дизайн. Визуальное оформление и верстка сайта', '2023-10-17'),
(21, 88, 'Для взрослых', 'Astra Linux для пользователей', '2023-10-17'),
(22, 92, 'Для школьников, студентов, курсантов', 'ЕГЭ Русский язык', '2023-10-18'),
(23, 92, 'Для школьников, студентов, курсантов', 'ЕГЭ Математика', '2023-10-18'),
(24, 92, 'Для школьников, студентов, курсантов', 'ЕГЭ Информатика и ИКТ', '2023-10-18'),
(25, 92, 'Для школьников, студентов, курсантов', 'ЕГЭ Физика', '2023-10-18'),
(26, 93, 'Для школьников, студентов, курсантов', 'ЕГЭ Обществознание', '2023-10-18'),
(27, 93, 'Для взрослых', 'General English (Общий английский)', '2023-10-18'),
(28, 93, 'Для взрослых', 'Общие вопросы охраны труда', '2023-10-18'),
(29, 93, 'Для взрослых', 'Рекрутер и инструменты подбора персонала', '2023-10-18'),
(30, 92, 'Для взрослых', 'General English (Общий английский)', '2023-10-18'),
(31, 92, 'Для взрослых', 'Общие вопросы охраны труда', '2023-10-18'),
(32, 92, 'Для взрослых', 'Рекрутер и инструменты подбора персонала', '2023-10-18'),
(33, 88, 'Для школьников, студентов, курсантов', 'ОГЭ Русский язык', '2023-10-18'),
(34, 88, 'Для школьников, студентов, курсантов', 'ОГЭ Математика', '2023-10-18'),
(35, 92, 'Для взрослых', 'Оборудование и технология сварочного производства', '2023-10-18'),
(36, 92, 'Для школьников, студентов, курсантов', 'ЕГЭ Русский язык', '2023-10-18'),
(37, 92, 'Для школьников, студентов, курсантов', 'ЕГЭ Математика', '2023-10-18'),
(38, 92, 'Для школьников, студентов, курсантов', 'ЕГЭ Информатика и ИКТ', '2023-10-18'),
(39, 92, 'Для школьников, студентов, курсантов', 'ЕГЭ Физика', '2023-10-18'),
(40, 94, 'Для взрослых', 'General English (Общий английский)', '2023-10-18'),
(41, 94, 'Для взрослых', 'Web-дизайн. Визуальное оформление и верстка сайта', '2023-10-18'),
(42, 94, 'Для взрослых', 'Astra Linux для пользователей', '2023-10-18'),
(43, 94, 'Для взрослых', 'Оператор конвейера', '2023-10-18'),
(44, 94, 'Для взрослых', 'Подготовка стропальщиков', '2023-10-18'),
(45, 94, 'Для взрослых', 'Оборудование и технология сварочного производства', '2023-10-18'),
(46, 92, 'Для взрослых', 'Общие вопросы охраны труда', '2023-10-24');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `news text` varchar(350) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `news text`) VALUES
(1, '1 сентября: С Днём знаний, друзья! Мы поздравляем вас с началом нового учебного года. Желаем новых успехов и новых побед!'),
(2, '8 сентября: С международным днём грамотности! Давайте говорить и писать по-русски правильно!'),
(3, 'С днём учителя! Поздравляем всех школьников и студентов, учителей и преподавателей с замечательным праздником! Желаем новых успехов и новых побед!'),
(4, 'СМИ о нас: На сайте НГС опубликована статья о нашем Центре.');

-- --------------------------------------------------------

--
-- Структура таблицы `users_messages`
--

CREATE TABLE `users_messages` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `message` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users_messages`
--

INSERT INTO `users_messages` (`id`, `user_id`, `message`) VALUES
(4, 88, 'привет'),
(8, 92, 'привет'),
(9, 93, 'крыжик'),
(11, 92, 'варпварав'),
(12, 88, 'парапр'),
(13, 94, 'аперпаорпаопа'),
(14, 94, 'бобик');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `calendar of events`
--
ALTER TABLE `calendar of events`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `direction_of_training`
--
ALTER TABLE `direction_of_training`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users_messages`
--
ALTER TABLE `users_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT для таблицы `calendar of events`
--
ALTER TABLE `calendar of events`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `direction_of_training`
--
ALTER TABLE `direction_of_training`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `users_messages`
--
ALTER TABLE `users_messages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `direction_of_training`
--
ALTER TABLE `direction_of_training`
  ADD CONSTRAINT `direction_of_training_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `applications` (`id`);

--
-- Ограничения внешнего ключа таблицы `users_messages`
--
ALTER TABLE `users_messages`
  ADD CONSTRAINT `users_messages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `applications` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
