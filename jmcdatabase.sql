-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 26 2017 г., 20:56
-- Версия сервера: 5.6.31
-- Версия PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `jmcdatabase`
--

-- --------------------------------------------------------

--
-- Структура таблицы `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(10) unsigned NOT NULL,
  `link_foto` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `full_description` text NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `currency`
--

CREATE TABLE IF NOT EXISTS `currency` (
  `id` int(11) unsigned NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `currency`
--

INSERT INTO `currency` (`id`, `name`) VALUES
(1, 'грн');

-- --------------------------------------------------------

--
-- Структура таблицы `directions`
--

CREATE TABLE IF NOT EXISTS `directions` (
  `id` int(10) unsigned NOT NULL,
  `name_of_direction` varchar(255) NOT NULL,
  `link_foto_direction` text NOT NULL,
  `description_direction` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `directions`
--

INSERT INTO `directions` (`id`, `name_of_direction`, `link_foto_direction`, `description_direction`) VALUES
(1, 'Гинекология', '', ''),
(2, 'Хирургия', '', ''),
(3, 'Педиатрия', '', ''),
(4, 'Терапия', '', ''),
(5, 'Диетология', '', ''),
(6, 'Травматология', '', ''),
(7, 'Мануальная терапия', '', ''),
(8, 'Массаж', '', ''),
(9, 'Урология', '', ''),
(10, 'Дерматология', '', ''),
(11, 'Косметология', '', ''),
(12, 'Гастроэнтерология', '', ''),
(13, 'Эндокринология', '', ''),
(14, 'Неврология', '', ''),
(15, 'Офтальмология', '', ''),
(16, 'Пульмонология', '', ''),
(17, 'Оторинолярингология', '', ''),
(18, 'Детская неврология', '', ''),
(19, 'Кардиология', '', ''),
(20, 'Проктология', '', ''),
(21, 'Ревматология', '', ''),
(22, 'Сосудистая хирургия', '', ''),
(23, 'Профилактика', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `directions_fd`
--

CREATE TABLE IF NOT EXISTS `directions_fd` (
  `id` int(10) unsigned NOT NULL,
  `dir_id` int(10) unsigned NOT NULL,
  `fd_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `doctors`
--

CREATE TABLE IF NOT EXISTS `doctors` (
  `id` int(10) unsigned NOT NULL,
  `name_of_doctor` varchar(255) NOT NULL,
  `link_foto_doctor` text NOT NULL,
  `expirience_of_work` varchar(255) NOT NULL,
  `specialty_of_doctor` text NOT NULL,
  `science_degree` text NOT NULL,
  `short_descr` varchar(255) NOT NULL,
  `full_descr` text NOT NULL,
  `price_first_time` decimal(9,2) NOT NULL,
  `price_after` decimal(9,2) NOT NULL,
  `currency_id` int(11) unsigned NOT NULL,
  `direction_id` int(11) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `doctors`
--

INSERT INTO `doctors` (`id`, `name_of_doctor`, `link_foto_doctor`, `expirience_of_work`, `specialty_of_doctor`, `science_degree`, `short_descr`, `full_descr`, `price_first_time`, `price_after`, `currency_id`, `direction_id`) VALUES
(1, 'Иванов Иван Иванович', '', '2 года', 'Хирург', 'дмн', 'очень хороший доктор', 'очень очень хороший доктор', '250.00', '220.00', 1, 2),
(2, 'Петрова Василиса Романовна', '', '3 года', 'педиатр', 'кмн', 'прекрасный доктор', 'прекрасный доктор очень прекрасный доктор', '300.00', '250.00', 1, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `functional_diagnostic`
--

CREATE TABLE IF NOT EXISTS `functional_diagnostic` (
  `id` int(10) unsigned NOT NULL,
  `name_of_fd` varchar(255) NOT NULL,
  `price_if_alone_fd` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `laboratory`
--

CREATE TABLE IF NOT EXISTS `laboratory` (
  `id` int(10) unsigned NOT NULL,
  `name_group_method` varchar(50) NOT NULL,
  `direction_id` int(10) unsigned NOT NULL,
  `price_if_alone` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `methods`
--

CREATE TABLE IF NOT EXISTS `methods` (
  `id` int(10) unsigned NOT NULL,
  `name_of_method` varchar(255) NOT NULL,
  `count_of_test` varchar(255) NOT NULL,
  `price` decimal(9,2) NOT NULL,
  `who_take_biomaterial` varchar(255) NOT NULL,
  `currency_id` int(10) unsigned NOT NULL,
  `lab_id` int(10) unsigned NOT NULL,
  `biomaterial` varchar(255) NOT NULL,
  `time_to_wait` varchar(255) NOT NULL,
  `result` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `methods_fd`
--

CREATE TABLE IF NOT EXISTS `methods_fd` (
  `id` int(10) unsigned NOT NULL,
  `name_of_method_fd` varchar(100) NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `currency_id` int(10) unsigned NOT NULL,
  `func_diagn_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `directions`
--
ALTER TABLE `directions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `directions_fd`
--
ALTER TABLE `directions_fd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dir_id` (`dir_id`),
  ADD KEY `fd_id` (`fd_id`);

--
-- Индексы таблицы `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `currency_id` (`currency_id`),
  ADD KEY `direction_id` (`direction_id`);

--
-- Индексы таблицы `functional_diagnostic`
--
ALTER TABLE `functional_diagnostic`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `laboratory`
--
ALTER TABLE `laboratory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `direction_id` (`direction_id`);

--
-- Индексы таблицы `methods`
--
ALTER TABLE `methods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `currency_id` (`currency_id`),
  ADD KEY `lab_id` (`lab_id`);

--
-- Индексы таблицы `methods_fd`
--
ALTER TABLE `methods_fd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `currency_id` (`currency_id`),
  ADD KEY `func_diagn_id` (`func_diagn_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `currency`
--
ALTER TABLE `currency`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `directions`
--
ALTER TABLE `directions`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT для таблицы `directions_fd`
--
ALTER TABLE `directions_fd`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `functional_diagnostic`
--
ALTER TABLE `functional_diagnostic`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `laboratory`
--
ALTER TABLE `laboratory`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `methods`
--
ALTER TABLE `methods`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `methods_fd`
--
ALTER TABLE `methods_fd`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `directions_fd`
--
ALTER TABLE `directions_fd`
  ADD CONSTRAINT `directions_fd_ibfk_1` FOREIGN KEY (`dir_id`) REFERENCES `directions` (`id`),
  ADD CONSTRAINT `directions_fd_ibfk_2` FOREIGN KEY (`fd_id`) REFERENCES `functional_diagnostic` (`id`);

--
-- Ограничения внешнего ключа таблицы `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `doctors_ibfk_1` FOREIGN KEY (`currency_id`) REFERENCES `currency` (`id`),
  ADD CONSTRAINT `doctors_ibfk_2` FOREIGN KEY (`direction_id`) REFERENCES `directions` (`id`);

--
-- Ограничения внешнего ключа таблицы `laboratory`
--
ALTER TABLE `laboratory`
  ADD CONSTRAINT `laboratory_ibfk_1` FOREIGN KEY (`direction_id`) REFERENCES `directions` (`id`);

--
-- Ограничения внешнего ключа таблицы `methods`
--
ALTER TABLE `methods`
  ADD CONSTRAINT `methods_ibfk_1` FOREIGN KEY (`currency_id`) REFERENCES `currency` (`id`),
  ADD CONSTRAINT `methods_ibfk_2` FOREIGN KEY (`lab_id`) REFERENCES `laboratory` (`id`);

--
-- Ограничения внешнего ключа таблицы `methods_fd`
--
ALTER TABLE `methods_fd`
  ADD CONSTRAINT `methods_fd_ibfk_1` FOREIGN KEY (`currency_id`) REFERENCES `currency` (`id`),
  ADD CONSTRAINT `methods_fd_ibfk_2` FOREIGN KEY (`func_diagn_id`) REFERENCES `functional_diagnostic` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
