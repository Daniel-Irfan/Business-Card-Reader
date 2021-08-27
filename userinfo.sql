-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 27, 2021 at 06:31 AM
-- Server version: 8.0.21
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) DEFAULT NULL,
  `job` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `fname`, `job`, `company`, `phone`, `mobile`, `address`, `email`, `category`, `image`, `status`) VALUES
(1, 'Feder John', 'Graphic Designer', 'Feder John Company', '+123-456-789O', '0192507007', '', 'www.rea||ygreatsite.com', 'Smart Transportation & Mobility,Smart Home & Environment,', 'all_images/63b27de820db14728b74d335c29c5796business-card.jpg', 0),
(2, 'MUHAMMAD RUSHDI BIN ABU HASSAN', 'Ketua Penolong Pengarah', 'Perbadanan Putrajaya', ' 603-8887 7126 ', '6010-400 3007', '', 'm_rushdi@ppj.gov.my', 'Smart Transportation & Mobility,Smart Home & Environment,', 'all_images/6d567d653ebee5c7abfbf096ce2de509test1.jpg', 0),
(3, '', 'Graphic Designer', '', '', '', '', '', '', 'all_images/67d3e2880aa306023f54ddde62fdb610business-card.jpg', 1),
(4, 'Feder', 'Graphic Designer', '', '', '', '', '', 'Smart Transportation & Mobility,Smart Home & Environment,', 'all_images/62614177f59501c1068348e34a32657abusiness-card.jpg', 1),
(5, 'Feder', '123', '', '', '', '', '', 'Smart Transportation & Mobility,Smart Home & Environment,', 'all_images/ba60f6303d866148e2549038e0172597business-card.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `phone`) VALUES
('Daniel', '123', '', ''),
('Daniel', '123', '', ''),
('Ali', '123', '123', 'das'),
('Niel', '123', 'dad', '01924507'),
('Irfan', '123', 'irfan@gmail.com', '0192507007');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
