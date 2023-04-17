-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2021 at 03:35 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `Message_ID` int(11) NOT NULL,
  `income_message_id` int(11) NOT NULL,
  `outing_message_id` int(11) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`Message_ID`, `income_message_id`, `outing_message_id`, `message`) VALUES
(1, 1417377483, 1120413321, 'test'),
(2, 1417377483, 1120413321, 'test'),
(3, 1417377483, 1120413321, 'test'),
(4, 1120413321, 1417377483, 'test'),
(5, 1512834865, 1417377483, 'hello'),
(6, 1512834865, 1417377483, 'test'),
(7, 1512834865, 1417377483, 'test message'),
(8, 1055970062, 1417377483, 'micheal'),
(9, 1512834865, 1417377483, 'sasa'),
(10, 1512834865, 1417377483, 'sa'),
(11, 1417377483, 1120413321, 'bisho'),
(12, 1120413321, 1417377483, 'fady'),
(13, 1120413321, 1417377483, 'hell'),
(14, 1417377483, 1120413321, 'hi'),
(15, 1417377483, 1120413321, 'nice too meet'),
(16, 1120413321, 1417377483, 'sure'),
(17, 1120413321, 1417377483, 'test'),
(18, 1417377483, 1120413321, 'nice'),
(19, 1417377483, 1120413321, 'test nice to meet you'),
(20, 1120413321, 1417377483, 'hello from chat'),
(21, 1120413321, 1417377483, 'this last message'),
(22, 1120413321, 1417377483, 'ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff'),
(23, 1512834865, 1417377483, 'test'),
(24, 1055970062, 1417377483, 'micheal'),
(25, 1512834865, 1120413321, 'sasa'),
(26, 1055970062, 1120413321, 'test'),
(27, 1055970062, 1417377483, '3bet'),
(28, 1120413321, 1417377483, '2'),
(29, 1512834865, 1417377483, '8'),
(30, 1247857358, 1464076091, 'hello'),
(31, 1431058541, 1247857358, 'test'),
(32, 1464076091, 1431058541, 'bisho'),
(33, 1464076091, 1247857358, 'test'),
(34, 1464076091, 1247857358, 'hhsgdj'),
(35, 1464076091, 1247857358, 'jhgjsdgj'),
(36, 1464076091, 1247857358, 'jlhsfajhdj'),
(37, 1464076091, 1247857358, 'kghdjf'),
(38, 1464076091, 1247857358, 'kgfdjhg'),
(39, 1464076091, 1247857358, 'kfgjhgf'),
(40, 1464076091, 1247857358, 'kjfdkjfh'),
(41, 1464076091, 1247857358, 'jhfgjd'),
(42, 1464076091, 1247857358, 'kjfdkj'),
(43, 1464076091, 1247857358, 'jkdkhf'),
(44, 1464076091, 1247857358, 'kjkfhh'),
(45, 1269149970, 1247857358, 'helo test'),
(46, 1269149970, 1247857358, 'test'),
(47, 1247857358, 1269149970, 'test come');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` int(11) NOT NULL,
  `unique_id` int(200) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'offline'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `unique_id`, `First_Name`, `Last_Name`, `email`, `password`, `image`, `status`) VALUES
(9, 1247857358, 'Fady', 'Reda', 'fadyreda1212@gmail.com', '123', '16193651001.png', 'Active now'),
(10, 1464076091, 'bisho', 'rafat', 'bisho@gmail.com', '123', '1619365120Screenshot (11).png', 'Active now'),
(11, 1431058541, 'sasa', 'yousef', 'sasa@gmail.com', '123', '16193652043.png', 'offline now'),
(12, 1269149970, 'test', 'test', 'test@gmail.com', '123', '16193656254.png', 'Active now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`Message_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `Message_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
