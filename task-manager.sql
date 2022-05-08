-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Aug 07, 2021 at 04:16 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task-manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `message`, `date`) VALUES
(2, 'Akshay Deodhar', 'akddr123@gmail.com', 'nice', '2021-06-18'),
(7, 'Tejal', 'khadetejal11@gmail.com', 'thankyou', '2021-06-18');

-- --------------------------------------------------------

--
-- Table structure for table `task_table`
--

CREATE TABLE `task_table` (
  `id` int(11) NOT NULL,
  `task_name` varchar(300) NOT NULL,
  `added_tiime` timestamp NOT NULL DEFAULT current_timestamp(),
  `user` varchar(30) NOT NULL,
  `priority` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task_table`
--

INSERT INTO `task_table` (`id`, `task_name`, `added_tiime`, `user`, `priority`) VALUES
(3, 'hello', '2021-06-15 11:25:10', 'dhechu', 'Medium'),
(4, 'yash', '2021-06-15 11:37:25', 'Yash', 'Medium'),
(27, 'dfd', '2021-06-15 16:16:18', 'dhechu', 'Low'),
(28, 'homework', '2021-06-15 16:21:11', 'dhechu', 'High'),
(29, 'homework', '2021-06-15 17:30:47', 'dhechu', 'High'),
(30, 'hi', '2021-06-16 13:16:40', 'dhechu', 'Low'),
(31, 'hi i am raj', '2021-06-16 14:31:49', 'raj', 'Low'),
(33, 'designing website before tomorrow', '2021-06-17 04:19:17', 'Akshay', 'High'),
(34, 'painting landscape', '2021-06-17 05:03:22', 'Tejal', 'Medium'),
(35, 'hosting website', '2021-06-17 05:30:37', 'Tejal', 'High'),
(36, 'homework', '2021-06-18 09:56:34', 'Yash', 'High'),
(37, 'painting', '2021-06-18 10:07:20', 'Yash', 'Low'),
(38, 'homework', '2021-06-18 10:33:30', 'Yash', 'Low'),
(39, 'work till tom', '2021-06-18 18:13:00', 'Tejal', 'Low'),
(40, 'assignments', '2021-06-19 19:37:30', 'Tejal', 'Medium'),
(41, 'games', '2021-06-19 19:37:45', 'Tejal', 'Low');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `squestion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`name`, `email`, `password`, `squestion`) VALUES
('Akshay', 'akshay@gmail.com', '900', 'akki'),
('raj', 'raj@gmail.com', '1234', 'Rajuuu'),
('Tejal', 'tejal123@gmail.com', '12345', 'teju'),
('Yash', 'yash123@gmail.com', '123', 'yash');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_table`
--
ALTER TABLE `task_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `task_table`
--
ALTER TABLE `task_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
