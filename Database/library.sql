-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 09, 2020 at 09:13 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `stock_books`
--

DROP TABLE IF EXISTS `stock_books`;
CREATE TABLE IF NOT EXISTS `stock_books` (
  `BID` bigint(100) NOT NULL AUTO_INCREMENT,
  `Category` varchar(30) NOT NULL,
  `Book_Name` varchar(50) NOT NULL,
  `Author` varchar(50) NOT NULL,
  `Quantity` bigint(20) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `Fine/Day` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`BID`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_books`
--

INSERT INTO `stock_books` (`BID`, `Category`, `Book_Name`, `Author`, `Quantity`, `pic`, `Fine/Day`) VALUES
(1, 'Computer Science', 'Data Structures', 'Niklaus Wirth', 5, 'Books/CS/1.jpg', 20),
(2, 'Computer Science', 'Let us c', 'Yeshwant', 5, 'Books/CS/2.jpg', 40),
(3, 'Computer Science', 'Introduction to CS', 'Gilbert Brands', 5, 'Books/CS/3.jpg', 30),
(4, 'Computer Science', 'CSE & Technology', 'Phillip Laplante', 5, 'Books/CS/4.jpg', 50),
(5, 'Computer Science', 'Advanced CS', 'Zafar Ali Khan', 5, 'Books/CS/5.jpg', 10),
(6, 'Computer Science', 'Introduction to Algorithms', 'Clifford Stein', 5, 'Books/CS/6.jpg', 25),
(7, 'Electronics & Electrical', 'Practical Electronics', 'Paul Scherz', 5, 'Books/EE/1.jpg', 55),
(8, 'Electronics & Electrical', 'Basic EE', 'K.V Kumar', 5, 'Books/EE/2.jpg', 35),
(9, 'Electronics & Electrical', 'Measurements & Instrument', 'S Bhattacharya', 5, 'Books/EE/3.jpg', 20),
(10, 'Electronics & Electrical', 'Electrical Estimation', 'M.N Talawar', 5, 'Books/EE/4.jpg', 45),
(11, 'Electronics & Electrical', 'EE Fundamentals', 'Dale R. Patrick', 5, 'Books/EE/5.jpeg', 15),
(12, 'Electronics & Electrical', 'Power Electronics', 'Alok Jain', 5, 'Books/EE/6.jpg', 65),
(13, 'Mechanical', 'Handbook of ME', 'Sadhu Singh', 5, 'Books/ME/1.png', 30),
(14, 'Mechanical', 'Standard Handbook for ME', 'Eugene Avolle', 5, 'Books/ME/2.jpg', 10),
(15, 'Mechanical', 'Gate Guide', 'Deepak Pathak', 5, 'Books/ME/3.jpg', 60),
(16, 'Mechanical', 'Thermodynamics', 'Michael A', 5, 'Books/ME/4.jpg', 25),
(17, 'Mechanical', 'CATIA V6', 'Mohit Gautam', 5, 'Books/ME/5.jpg', 5),
(18, 'Mechanical', 'Engineering Drawing', 'N.D Bhatt', 5, 'Books/ME/6.jpg', 30),
(19, 'Metallurgical', 'Physical Metallurgy', 'Gregory N.', 5, 'Books/MME/1.jpg', 25),
(20, 'Metallurgical', 'Material Science & Metallurgy', 'V.D Kodgire', 5, 'Books/MME/2.jpg', 25),
(21, 'Metallurgical', 'Mettalurgy Fundamentals', 'J.C Warner', 5, 'Books/MME/3.jpg', 35),
(22, 'Metallurgical', 'Powder Metallurgy', 'Aman G.', 5, 'Books/MME/4.jpg', 15),
(23, 'Metallurgical', 'Metal Injection Molding', 'Donald F. Henry', 5, 'Books/MME/5.gif', 75),
(24, 'Metallurgical', 'Chemical Metallurgy', 'J.J Moore', 5, 'Books/MME/6.jpg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `student_account`
--

DROP TABLE IF EXISTS `student_account`;
CREATE TABLE IF NOT EXISTS `student_account` (
  `Email` varchar(100) NOT NULL,
  `B1` int(100) DEFAULT NULL,
  `T1` date DEFAULT NULL,
  `B2` int(100) DEFAULT NULL,
  `B3` int(100) DEFAULT NULL,
  `B4` int(100) DEFAULT NULL,
  `B5` int(100) DEFAULT NULL,
  `B6` int(100) DEFAULT NULL,
  `B7` int(100) DEFAULT NULL,
  `B8` int(100) DEFAULT NULL,
  `B9` int(100) DEFAULT NULL,
  `B10` int(100) DEFAULT NULL,
  `B11` int(100) DEFAULT NULL,
  `B12` int(100) DEFAULT NULL,
  `B13` int(100) DEFAULT NULL,
  `B14` int(100) DEFAULT NULL,
  `B15` int(100) DEFAULT NULL,
  `B16` int(100) DEFAULT NULL,
  `B17` int(100) DEFAULT NULL,
  `B18` int(100) DEFAULT NULL,
  `B19` int(100) DEFAULT NULL,
  `B20` int(100) DEFAULT NULL,
  `B21` int(100) DEFAULT NULL,
  `B22` int(100) DEFAULT NULL,
  `B23` int(100) DEFAULT NULL,
  `B24` int(100) DEFAULT NULL,
  `T2` date DEFAULT NULL,
  `T3` date DEFAULT NULL,
  `T4` date DEFAULT NULL,
  `T5` date DEFAULT NULL,
  `T6` date DEFAULT NULL,
  `T7` date DEFAULT NULL,
  `T8` date DEFAULT NULL,
  `T9` date DEFAULT NULL,
  `T10` date DEFAULT NULL,
  `T11` date DEFAULT NULL,
  `T12` date DEFAULT NULL,
  `T13` date DEFAULT NULL,
  `T14` date DEFAULT NULL,
  `T15` date DEFAULT NULL,
  `T16` date DEFAULT NULL,
  `T17` date DEFAULT NULL,
  `T18` date DEFAULT NULL,
  `T19` date DEFAULT NULL,
  `T20` date DEFAULT NULL,
  `T21` date DEFAULT NULL,
  `T22` date DEFAULT NULL,
  `T23` date DEFAULT NULL,
  `T24` date DEFAULT NULL,
  `R1` date DEFAULT NULL,
  `R2` date DEFAULT NULL,
  `R3` date DEFAULT NULL,
  `R4` date DEFAULT NULL,
  `R5` date DEFAULT NULL,
  `R6` date DEFAULT NULL,
  `R7` date DEFAULT NULL,
  `R8` date DEFAULT NULL,
  `R9` date DEFAULT NULL,
  `R10` date DEFAULT NULL,
  `R11` date DEFAULT NULL,
  `R12` date DEFAULT NULL,
  `R13` date DEFAULT NULL,
  `R14` date DEFAULT NULL,
  `R15` date DEFAULT NULL,
  `R16` date DEFAULT NULL,
  `R17` date DEFAULT NULL,
  `R18` date DEFAULT NULL,
  `R19` date DEFAULT NULL,
  `R20` date DEFAULT NULL,
  `R21` date DEFAULT NULL,
  `R22` date DEFAULT NULL,
  `R23` date DEFAULT NULL,
  `R24` date DEFAULT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_account`
--

INSERT INTO `student_account` (`Email`, `B1`, `T1`, `B2`, `B3`, `B4`, `B5`, `B6`, `B7`, `B8`, `B9`, `B10`, `B11`, `B12`, `B13`, `B14`, `B15`, `B16`, `B17`, `B18`, `B19`, `B20`, `B21`, `B22`, `B23`, `B24`, `T2`, `T3`, `T4`, `T5`, `T6`, `T7`, `T8`, `T9`, `T10`, `T11`, `T12`, `T13`, `T14`, `T15`, `T16`, `T17`, `T18`, `T19`, `T20`, `T21`, `T22`, `T23`, `T24`, `R1`, `R2`, `R3`, `R4`, `R5`, `R6`, `R7`, `R8`, `R9`, `R10`, `R11`, `R12`, `R13`, `R14`, `R15`, `R16`, `R17`, `R18`, `R19`, `R20`, `R21`, `R22`, `R23`, `R24`) VALUES
('anju123@gmail.com', 0, '2020-03-30', 0, 1, 0, 0, 0, 0, 0, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-05', NULL, '2020-03-30', '2020-03-30', NULL, '2020-03-30', NULL, '2020-03-30', '2020-03-30', NULL, NULL, NULL, NULL, '2020-03-30', '2020-03-31', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-30', NULL, '2020-03-30', NULL, '2020-03-30', '2020-03-30', NULL, '2020-03-31', NULL, '2020-04-05', '2020-04-02', NULL, NULL, NULL, NULL, '2020-04-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('mohitgautam626@gmail.com', 1, '2020-04-06', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('amangautamagra@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_fine`
--

DROP TABLE IF EXISTS `student_fine`;
CREATE TABLE IF NOT EXISTS `student_fine` (
  `Email` varchar(100) NOT NULL,
  `Total_Fine` bigint(30) DEFAULT NULL,
  `Dues` bigint(20) DEFAULT NULL,
  `B1` int(10) DEFAULT NULL,
  `B2` int(10) DEFAULT NULL,
  `B3` int(10) DEFAULT NULL,
  `B4` int(10) DEFAULT NULL,
  `B5` int(10) DEFAULT NULL,
  `B6` int(10) DEFAULT NULL,
  `B7` int(10) DEFAULT NULL,
  `B8` int(10) DEFAULT NULL,
  `B9` int(10) DEFAULT NULL,
  `B10` int(10) DEFAULT NULL,
  `B11` int(10) DEFAULT NULL,
  `B12` int(10) DEFAULT NULL,
  `B13` int(10) DEFAULT NULL,
  `B14` int(10) DEFAULT NULL,
  `B15` int(10) DEFAULT NULL,
  `B16` int(10) DEFAULT NULL,
  `B17` int(10) DEFAULT NULL,
  `B18` int(10) DEFAULT NULL,
  `B19` int(10) DEFAULT NULL,
  `B20` int(10) DEFAULT NULL,
  `B21` int(10) DEFAULT NULL,
  `B22` int(10) DEFAULT NULL,
  `B23` int(10) DEFAULT NULL,
  `B24` int(10) DEFAULT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_fine`
--

INSERT INTO `student_fine` (`Email`, `Total_Fine`, `Dues`, `B1`, `B2`, `B3`, `B4`, `B5`, `B6`, `B7`, `B8`, `B9`, `B10`, `B11`, `B12`, `B13`, `B14`, `B15`, `B16`, `B17`, `B18`, `B19`, `B20`, `B21`, `B22`, `B23`, `B24`) VALUES
('anju123@gmail.com', 390, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('mohitgautam626@gmail.com', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('amangautamagra@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

DROP TABLE IF EXISTS `student_login`;
CREATE TABLE IF NOT EXISTS `student_login` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Pass` varchar(20) NOT NULL,
  `Contact` bigint(11) NOT NULL,
  `DOB` bigint(10) NOT NULL,
  `Registered_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `TAdd` varchar(100) DEFAULT NULL,
  `PAdd` varchar(100) DEFAULT NULL,
  `Interested` varchar(20) DEFAULT NULL,
  `Bgrp` varchar(5) DEFAULT NULL,
  `Special_mark` varchar(100) DEFAULT NULL,
  `DP_source` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`ID`, `Name`, `Email`, `Pass`, `Contact`, `DOB`, `Registered_date`, `TAdd`, `PAdd`, `Interested`, `Bgrp`, `Special_mark`, `DP_source`) VALUES
(1, 'Mohit Gautam', 'mohitgautam626@gmail.com', 'mohitgautam25', 9719702201, 9012001, '2020-03-30 06:07:57', 'D-409 Hostel K, NIT Jamshedpur, Jamshedpur-831014 ', '7 Vaibhavpuri, Pushpanjali Road, Dayalbagh, Agra-282005', 'Fun with Friends', 'B+', 'Mole on Right Hand', 'DP/WIN_20200311_12_45_49_Pro.jpg'),
(2, 'Aman Gautam', 'amangautamagra@gmail.com', 'ilu', 8171114465, 1022002, '2020-03-30 06:07:57', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Anju Gautam', 'anju123@gmail.com', 'mummy', 7037590295, 14011971, '2020-03-30 06:07:57', '7 tp nagar agra', '7 vaibhavpuri dayalbagh agra', 'ruskin bond', 'A+', 'none', 'DP/IMG_20181022_164451.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
