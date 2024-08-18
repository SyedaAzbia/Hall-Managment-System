-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2023 at 10:25 AM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `ch_id` int(10) NOT NULL,
  `Name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Booking_date` date NOT NULL,
  `Card_no` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Expire_date` varchar(100) NOT NULL,
  `Guest` int(10) NOT NULL,
  `Total` int(10) NOT NULL,
  `Catering` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`ch_id`, `Name`, `Booking_date`, `Card_no`, `Expire_date`, `Guest`, `Total`, `Catering`) VALUES
(1, 'dfgd', '0000-00-00', '567', '0000-00-00', 546, 456, 'dsgd'),
(2, 'kaleem', '2023-09-22', '12345', '0000-00-00', 160, 2428, 'Buffet Service'),
(3, 'uzaiar', '2023-09-30', '12345', '420', 165, 2503, 'Table Service'),
(4, 'uzair', '2023-09-27', '335455678', '1234', 155, 2353, 'Table Service'),
(5, 'mahnoor', '2023-09-25', '123456789', '123', 145, 2204, 'Buffet Service'),
(6, 'saboor', '2023-09-30', '123456789', '2023', 160, 2428, 'Table Service'),
(7, 'amaan', '2023-09-30', '123456789', '2023', 160, 2428, '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `c_id` int(15) NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `message` varchar(5000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `name`, `email`, `message`) VALUES
(1, 'ali', 'ali@gmail.com', 'hello '),
(2, 'ss', 'admin@gmail.com', '          FDFDFD'),
(3, 'ghfghghjghj', 'admin@gmail.com', '          jhghj'),
(4, 'saboor', 'avengerneew@gmail.com', '          k'),
(5, 'saboor', 'avengerneew@gmail.com', '          k');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(15) NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `text` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

CREATE TABLE `hall` (
  `h_id` int(15) NOT NULL,
  `h_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `h_contact` int(11) NOT NULL,
  `h_address` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `h_category` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `h_description` varchar(1000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `minimum_rent` int(11) DEFAULT NULL,
  `Accommodation` int(11) NOT NULL,
  `h_image` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`h_id`, `h_name`, `h_contact`, `h_address`, `h_category`, `h_description`, `minimum_rent`, `Accommodation`, `h_image`) VALUES
(2, 'CASABLANCA BANQUET', 2136721090, 'D-1 Shahrah-e-Sher Shah Suri, Block J North Nazima', 'banquet', 'Accessibility:\r\n\r\nWheelchair accessible entrance\r\n\r\nWheelchair accessible parking lot\r\n\r\n', 500000, 160, 'casablanca.jpg'),
(3, 'ROYAL BANQUET', 2136673254, 'X334+26P, Shahrah-Sher Shah Suri Service Rd N, Blo', 'banquet', 'Accessibility\r\n\r\nWheelchair-accessible car park\r\n\r\nWheelchair-accessible entrance\r\n', 700000, 400, 'royal.jpeg'),
(5, 'CRYSTAL BANQUET', 2136645195, 'D-3, Shahrah-Sher Shah Suri Service Rd S, N Block ', 'banquet', 'Accessibility:\r\n\r\nWheelchair accessible entrance', 800000, 300, 'crystal.jpg'),
(12, 'MODERN BANQUET', 2136637071, 'Plot#D, 07, Block J North Nazimabad Town, Karachi,', 'banquet', 'Accessibility:\r\n\r\nWheelchair accessible entrance\r\n\r\nWheelchair accessible parking lot', 4545, 200, 'modern.jpeg'),
(13, 'IMPERIAL BANQUET', 332221021, 'Shahjahan Ave, Federal B Area Block 12 Gulberg Tow', 'banquet', 'Accessibility:\r\n\r\nWheelchair accessible entrance', 70000, 600, 'imperial.jpg'),
(14, 'EMERALD BANQUET', 316028846, 'W3X3+RQV, Block N North Nazimabad Town, Karachi, K', 'banquet', ' Accessibility:\r\n\r\nWheelchair accessible entrance\r\n\r\nWheelchair accessible parking lot', 80000, 700, 'emerald.jpg'),
(15, 'EDEN GARDEN', 2136638586, 'ffffX334+596, Block J North Nazimabad Town, Karach', 'Hall', 'Accessibility:\r\n\r\nWheelchair accessible entrance', 90000, 650, 'c9.jpg'),
(16, 'CASPIA BANQUET', 2136679449, 'Star Chorangi? D-8 Shahrah-e-Sher Shah Suri, near ', 'banquet', '\r\nAccessibility:\r\n\r\nWheelchair accessible entrance      ', 50000, 675, 'c6.jpg'),
(17, 'ELEGANT BANQUET', 2136639820, 'W2VX+VC North Nazimabad Town, Karachi, Pakistan', 'Banquet', 'Accessibility:\r\n\r\nWheelchair accessible entrance', 46000, 750, 'elegant.jpg'),
(34, 'Resort', 2136673254, 'Plot#D, 07, Block J North Nazimabad Town, Karachi,', 'banquet', 'best around you', 700000, 2000, 'r1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `singup`
--

CREATE TABLE `singup` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `contact` varchar(11) NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `role` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `singup`
--

INSERT INTO `singup` (`id`, `name`, `contact`, `email`, `password`, `role`) VALUES
(1, 'hall', '0315524922', 'Hallmanagment@gmail.com', 'admin', 0),
(2, 'uzair', '5555555', 'jandc@gmail.com', 'admin123', 2),
(3, 'uzair', '5555555', 'beyauzair@gmail.com', 'admin123', 2),
(5, 'asd', '234213', 'saboor@gmail.com', 'admin123', 2),
(6, 'uzair', '45676543456', 'azbia@gmail.com', 'admin123', 1),
(7, 'uzair', '+9231616149', 'kaleem_ullah93@live.com', 'jjj', 1),
(8, 'uzair', '5555555', 'kaleem_ullah93@live.com', 'j', 1),
(9, 'ghfghghjghj', '45656', 'ok03102340@gmail.com', 'ss', 1),
(10, 'ghfghghjghj', '03495823485', 'ok03102340@gmail.com', 'sss', 1),
(11, 'ghfghghjghj', '03495823485', 'ok03102340@gmail.com', 'sss', 1),
(12, 'ghfghghjghj', '46636', '123@gmail.com', 'admin', 1),
(13, 'ghfghghjghj', '46636', '123@gmail.com', 'admin', 1),
(14, 'ghfghghjghj', '0968045', 'jand@gmail.com', 'admin', 1),
(15, 'ghfghghjghj', '5645', 'jand@gmail.com', 'admin', 1),
(16, 'ghfghghjghj', '0968045', 'ok03102349@gmail.com', 'admin', 1),
(17, 'uzair', '03160277467', 'avengerneew@gmail.com', 'wasd', 1),
(18, 'saboor', '03161614968', 'kaleem_ullah93@live.com', 'admin123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`ch_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `hall`
--
ALTER TABLE `hall`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `singup`
--
ALTER TABLE `singup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `ch_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `c_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hall`
--
ALTER TABLE `hall`
  MODIFY `h_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `singup`
--
ALTER TABLE `singup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
