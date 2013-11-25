Database Dump

-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 25, 2013 at 10:57 AM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `search`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(11) NOT NULL,
  `movie_genre_code` varchar(5) NOT NULL,
  `mpaa_rating_code` varchar(5) NOT NULL,
  `movie_title` varchar(100) NOT NULL,
  `retail_price_vhs` float NOT NULL,
  `retail_price_dvd` float NOT NULL,
  `year_produced` varchar(4) NOT NULL,
  PRIMARY KEY (`movie_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `movie_genre_code`, `mpaa_rating_code`, `movie_title`, `retail_price_vhs`, `retail_price_dvd`, `year_produced`) VALUES
(1, 'drama', 'r', 'mystic river', 58.97, 19.96, '2003'),
(2, 'actad', 'r', 'the last samurai', 15.95, 19.96, '2003'),
(3, 'comdy', 'pg-13', 'something''s gotta give', 14.95, 29.99, '2003'),
(4, 'actad', 'pg-13', 'the italian job', 11.95, 19.99, '2003'),
(5, 'actad', 'r', 'kill bill: vol. 1', 24.99, 29.99, '2003'),
(6, 'actad', 'pg-13', 'pirates of the caribbean: the curse of the black pearl', 24.99, 29.99, '2003'),
(7, 'drama', 'pg-13', 'big fish', 14.95, 19.94, '2003'),
(8, 'actad', 'r', 'man on fire', 50.99, 29.98, '2004'),
(9, 'actad', 'pg-13', 'master and commander: the far side of the world', 12.98, 39.99, '2003'),
(10, 'drama', 'r', 'lost in translation', 49.99, 14.98, '2003'),
(11, 'rmce', 'pg-13', 'two weeks notice', 6.93, 14.97, '2002'),
(12, 'comdy', 'pg-13', '50 first dates', 9.95, 19.94, '2004'),
(13, 'comdy', 'pg-13', 'matchstick men', 6.93, 19.97, '2003'),
(14, 'drama', 'r', 'cold mountain', 24.99, 29.99, '2003'),
(15, 'drama', 'r', 'road to perdition', 9.99, 14.99, '2002'),
(16, 'comdy', 'pg-13', 'the school of rock', 11.69, 29.99, '2003'),
(17, 'rmce', 'pg-13', '13 going on 30', 14.94, 28.95, '2004'),
(18, 'drama', 'r', 'monster', 24.99, 29.99, '2003'),
(19, 'actad', 'pg-13', 'the day after tomorrow', 12.98, 29.98, '2004'),
(20, 'forgn', 'r', 'das boot', 17.99, 19.94, '1981');
