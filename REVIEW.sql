-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2023 at 10:24 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `review`
--

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `name` varchar(50) NOT NULL,
  `review` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`name`, `review`) VALUES
('uzair', 'best website'),
('uzair', 'jdv,sad'),
('saboor', 'SDFGHJK\r\n'),
('Muneeb Jalal', 'So far i saw a very impressive  and different project. best of luck for the team '),
('huzaifa', 'excellent'),
('ahmed', 'brilliant'),
('usama', 'very good'),
('mahnoor jalal', 'ecellent website bas thori attention ki kami hain or namak thora kam hain thankyou'),
('muhammad khan', 'need to update some incomplete functionalities'),
('noorunnisa', 'Great Work:)'),
('ahmed', 'keep it up!!'),
('ahmed', 'keep it up!!'),
('Hassan', 'Good'),
('syeda zoha fatima', 'it was an interesting website we have gained alot of knowledge from this management.... it was good.\r\n\r\n'),
('habib', 'very nice'),
('haseeb', 'very nice website'),
('Aqsa Asam', 'User friendly layout, easy to understand'),
('aitazar khan', 'bhtt achaa hai'),
('tayyab elahi', 'bhott acha'),
('saman', 'great'),
('aman', 'innovative idea'),
('haris', 'good'),
('adil', 'good effort using core php but you havr to improve your idea little bit'),
('umer khan', 'good work'),
('Abdul basit', 'good website at all\r\n'),
('Mehak abid', 'good work\r\n'),
('iqra asif', 'good idea'),
('hamna muneeb', 'very good efforts for this project. website designing were good and very good styling.\r\n '),
('hamna muneeb', 'very nice efforts for this\r\n');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
