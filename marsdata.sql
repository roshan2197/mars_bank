-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2021 at 03:03 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `sno.` int(255) NOT NULL,
  `username` varchar(20) NOT NULL,
  `beneficiary` varchar(20) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `amount` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(255) NOT NULL,
  `username` varchar(20) NOT NULL,
  `userID` varchar(25) NOT NULL,
  `bankBalance` double(23,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `username`, `userID`, `bankBalance`) VALUES
(1, 'Mohd Ilyas', 'ilyas9247', 9999999999.000),
(2, 'Mohd Roshan', 'roshan2197', 8000000.000),
(3, 'Mohd Faisal', 'faisal2001', 8000000.000),
(4, 'Pala Nitish', 'ripbros539', 8000000.000),
(5, 'Chelimela Nikhil', 'crazynani518', 8000000.000),
(6, 'Gopichand', 'gopi534', 8000000.000),
(7, 'Rashekar', 'rashekar522', 8000000.000),
(8, 'Mohd Mujeeb', 'mujeeb700', 8000000.000),
(9, 'Mohd Wajid', 'wajid333', 8000000.000),
(10, 'Shaik Zubair', 'zubair498', 8000000.000),
(11, 'Arfaaz Khan', 'arfaaz092', 8000000.000),
(12, 'Rohit', 'Rohit552', 8000000.000),
(13, 'Rahjan Sharma', 'ranjansharma518', 8000000.000),
(14, 'Sai Varshit', 'Varshit517', 8000000.000),
(15, 'Mohd Karim', 'iamkarim', 8000000.000),
(16, 'Sampath Kumar', 'sampath523', 8000000.000),
(17, 'Ram Nivas', 'ramnnivas544', 8000000.000),
(18, 'Akhil Dasari', 'akhil321', 8000000.000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
