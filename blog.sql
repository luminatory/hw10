-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 02 2015 г., 15:24
-- Версия сервера: 5.5.41-log
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `description`) VALUES
(1, 'PHP', 'PHP is a server-side scripting language created in 1995 and designed for web development.'),
(2, 'CSS', 'Cascading Style Sheets (CSS) is a style sheet language used for describing the look and formatting of a document written in a markup language.\n'),
(3, 'HTML', 'HTML is a markup language for describing web documents (web pages).');

-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` tinytext NOT NULL,
  `text` text NOT NULL,
  `author_id` int(11) NOT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `post`
--

INSERT INTO `post` (`id`, `title`, `category_id`, `description`, `text`, `author_id`, `create_at`, `update_at`) VALUES
(1, 'Arrays ', 1, 'Short introduction', 'An array stores multiple values in one single variable. An array is a special variable, which can hold more than one value at a time. In PHP, the array() function is used to create an array:\narray().\nIn PHP, there are three types of arrays: indexed arrays - arrays with a numeric index; associative arrays - arrays with named keys; \nmultidimensional arrays - arrays containing one or more arrays.\nThe count() function is used to return the length (the number of elements) of an array.\n\n', 0, '2015-05-07 21:00:00', NULL),
(2, 'CSS Selectors', 2, 'Briefly about selectors', 'In CSS, selectors are patterns used to select the element(s) you want to style.\n\nUse our CSS Selector Tester to demonstrate the different selectors.\n\nIn CSS, selectors are used to declare which part of the markup a style applies to by matching tags and attributes in the markup itself.', 0, '0000-00-00 00:00:00', NULL),
(3, 'CSS Syntax ', 2, 'CSS rule set', 'A CSS rule set consists of a selector and a declaration block. The selector points to the HTML element you want to style.\n\nThe declaration block contains one or more declarations separated by semicolons.\n\nEach declaration includes a property name and a value, separated by a colon. CSS Example\nA CSS declaration always ends with a semicolon, and declaration groups are surrounded by curly braces:\np {color:red;text-align:center;}.\nTo make the CSS code more readable, you can put one declaration on each line.\n', 0, '0000-00-00 00:00:00', NULL),
(4, 'HTML Headings', 3, 'Few words about headings ', 'Headings are important in HTML documents.\nHeadings are defined with the <b>h1</b> to <b>h6</b> tags.\n<b>h1</b> defines the most important heading. <b>h6</b> defines the least important heading.\nUse HTML headings for headings only. Don''t use headings to make text <b>BIG</b> or <b>bold</b>.\n\nSearch engines use your headings to index the structure and content of your web pages.\n\nUsers skim your pages by its headings. It is important to use headings to show the document structure.\n\nh1 headings should be main headings, followed by <b>h2</b> headings, then the less important <b>h3</b>, and so on.', 0, '0000-00-00 00:00:00', NULL),
(5, 'Data types in php', 1, 'Variables can store data of different types, and different data types can do different things.', 'PHP supports the following data types:\nString\nInteger\nFloat (floating point numbers - also called double)\nBoolean\nArray\nObject\nNULL\nResource', 0, '0000-00-00 00:00:00', NULL),
(6, 'HTML Attributes', 3, 'Attributes provide additional information about HTML elements.', 'Attributes provide additional information about HTML elements.\nThe document language can be declared in the <html> tag.\n\nThe language is declared in the lang attribute.\n\nDeclaring a language is important for accessibility applications (screen readers) and search engines\n\n', 0, '0000-00-00 00:00:00', NULL),
(7, 'Working with arrays', 1, 'Implode, explode, foreach', 'PHP implode() Function joins array elements with a string. The implode() function returns a string from the elements of an array.\nThe separator parameter of implode() is optional. However, it is recommended to always use two parameters for backwards compatibility.\nPHP explode() Function breaks a string into an array. The explode() function breaks a string into an array. Note: The "separator" parameter cannot be an empty string.\nTo loop through and print all the values of an associative array, you could use a foreach loop\n', 0, '2015-05-07 21:00:00', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
