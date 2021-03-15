-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 15, 2021 at 05:56 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `News_Id` int(15) NOT NULL AUTO_INCREMENT,
  `News_Category` varchar(30) NOT NULL,
  `News_Titile` varchar(20) NOT NULL,
  `News_Content` varchar(300) NOT NULL,
  `Upload_Image` varchar(50) NOT NULL,
  `Show_Trending` varchar(50) NOT NULL,
  `Show_Featured` varchar(50) NOT NULL,
  `Enterd_On` varchar(30) NOT NULL,
  PRIMARY KEY (`News_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`News_Id`, `News_Category`, `News_Titile`, `News_Content`, `Upload_Image`, `Show_Trending`, `Show_Featured`, `Enterd_On`) VALUES
(3, 'Tourism', 'Kumbh Mela 2021', 'Kumbh Mela or Kumbha Mela is a major pilgrimage and festival in Hinduism.', './img/download.jpg', 'on', 'on', '15/03/2021 10:56:49'),
(4, 'Entertainment', 'tourism in kerala', 'This is your one stop to get all the latest news and updates from Kerala Tourism. ', './img/kerala.jpg', 'on', 'on', '15/03/2021 11:05:15');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
