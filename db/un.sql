-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Час створення: Жов 23 2016 р., 18:37
-- Версія сервера: 5.5.41-log
-- Версія PHP: 5.4.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База даних: `un`
--

-- --------------------------------------------------------

--
-- Структура таблиці `usr`
--

DROP TABLE IF EXISTS `usr`;
CREATE TABLE IF NOT EXISTS `usr` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `surname` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп даних таблиці `usr`
--

INSERT INTO `usr` (`id`, `name`, `surname`, `city`, `email`, `pass`) VALUES
(1, 'Сергій', 'Щуцький', 'Хмельницький', 'schucky@gmail.com', 'schucky123'),
(2, 'Дмитро', 'Горяк', 'Хмельницький', 'dratyti@mail.ru', 'dratyti)))0)'),
(3, 'Іван', 'Сухарєв', 'Харків', 'edward@gmail.com', 'edward228'),
(4, 'Данило', 'Тесленко', 'Харків', 'danyazeus@yandex.ru', 'yazeus!'),
(5, 'Данило', 'Ішутін', 'Харків', 'dendiboss@yandex.ru', 'dendi1488'),
(6, 'Андрій', 'Михаленко', 'Мінськ', 'andrusha@mail.ru', 'andrusha1337');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
