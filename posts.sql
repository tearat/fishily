-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `fishily`;
CREATE DATABASE `fishily` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `fishily`;

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag` varchar(100) NOT NULL,
  `tag_title` varchar(100) NOT NULL,
  `title` varchar(300) NOT NULL,
  `body` text NOT NULL,
  `img` varchar(300) NOT NULL,
  `date` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `posts` (`id`, `tag`, `tag_title`, `title`, `body`, `img`, `date`) VALUES
(1,	'economics',	'экономика',	'Первая из новостей',	'lorem ipsum?',	'test.jpg',	'11.11.2011'),
(2,	'politics',	'политика',	'А это наверное вторая???',	'3535345',	'',	'45.57.3456'),
(3,	'donuts',	'пончики',	'Третья!',	'767676',	'three.jpg',	'45.57.5655');

-- 2017-11-01 11:31:44
