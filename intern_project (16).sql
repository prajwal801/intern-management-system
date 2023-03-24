-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2023 at 07:42 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intern_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `intern`
--

CREATE TABLE `intern` (
  `intern_id` int(11) NOT NULL,
  `name_intern` varchar(255) NOT NULL,
  `internship_info` varchar(225) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `overall_progress` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `intern`
--

INSERT INTO `intern` (`intern_id`, `name_intern`, `internship_info`, `start_date`, `end_date`, `overall_progress`) VALUES
(23415, 'priya baniy', 'Long term', '2023-03-30', '2023-06-23', 0),
(23416, 'Prajwal Acharaya', 'short term', '2023-03-23', '2023-04-07', 0),
(23420, 'sameer', 'Long term', '2023-03-24', '2023-03-25', 0),
(23423, 'bibek', 'long term', '2023-03-24', '2023-03-25', 0),
(23424, 'shiozawa yu', 'short term', '2022-07-07', '2023-03-31', 0),
(23425, 'jane san 1', 'long ', '2023-03-23', '2023-03-24', 0);

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `task_id` int(11) NOT NULL,
  `task` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `total_task` int(11) NOT NULL,
  `intern_id` int(11) NOT NULL,
  `task_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`task_id`, `task`, `name`, `description`, `startdate`, `enddate`, `total_task`, `intern_id`, `task_status`) VALUES
(168, 'ji', '', '10 choti', '2023-03-18', '2023-03-16', 1, 23390, 'Done'),
(169, 'ji', '', '10 choti', '2023-03-18', '2023-03-16', 0, 23387, ''),
(170, 'ji', '', '10 choti', '2023-03-18', '2023-03-16', 0, 23387, ''),
(172, 'ji', '', '10 choti', '2023-03-18', '2023-03-16', 0, 23390, ''),
(173, 'ji', '', '10 choti', '2023-03-18', '2023-03-16', 0, 23392, ''),
(174, 'ji', '', '10 choti', '2023-03-18', '2023-03-16', 0, 23390, ''),
(175, 'ji', '', '10 choti', '2023-03-18', '2023-03-16', 0, 23391, ''),
(176, 'ji', '', '10 choti', '2023-03-18', '2023-03-16', 0, 23390, ''),
(177, 'ji', '', '10 choti', '2023-03-18', '2023-03-16', 0, 23390, ''),
(178, 'ji', '', '10 choti', '2023-03-18', '2023-03-16', 0, 23391, ''),
(179, 'ji', '', '10 choti', '2023-03-18', '2023-03-16', 0, 23391, ''),
(180, 'jin', '', '10 choti', '2023-03-18', '2023-03-16', 0, 23394, ''),
(181, 'ji', '', '10 choti', '2023-03-18', '2023-03-16', 0, 23403, ''),
(182, 'ji', '', '10 ', '2023-03-18', '2023-03-16', 0, 23394, ''),
(183, 'ji', '', '10 choti', '2023-03-18', '2023-03-16', 0, 23394, ''),
(184, 'jin', '', 'save', '2023-03-28', '2023-03-16', 0, 23394, ''),
(185, 'learn new tempate', '', 'do work mentioned', '2023-04-01', '2023-03-31', 0, 23402, ''),
(186, 'jai', '', 'do work mentioned', '2023-03-20', '2023-04-07', 0, 23400, ''),
(187, 'hi', '', 'learn php', '2023-03-09', '2023-03-18', 0, 23401, ''),
(188, 'learn new tempate', '', 'hiokaydone', '2023-03-21', '2023-03-23', 0, 23410, 'Finished'),
(191, 'learn new tempate', '', 'do work mentioned', '2023-03-18', '2023-04-03', 0, 23394, ''),
(192, 'learn html', '', 'check w3 school', '2023-04-06', '2023-04-01', 0, 23400, ''),
(193, 'jai', '', '10', '2023-03-29', '2023-03-29', 0, 23410, 'Finished'),
(194, 'learn new tempate', '', 'hi', '2023-04-06', '2023-04-08', 0, 23411, 'Started'),
(195, 'learn php', '', 'do work mentioned', '2023-04-08', '2023-04-06', 0, 23411, 'Finished'),
(196, 'learn new tempate', '', 'do it', '2023-03-21', '2023-03-23', 0, 23412, ''),
(197, 'learn new tempate', '', 'check w3 school', '2023-03-21', '2023-03-25', 0, 23410, ''),
(198, 'jai', '', 'do it', '2023-03-23', '2023-04-08', 0, 23411, 'Finished'),
(201, 'learn html', '', 'do it', '2023-04-05', '2023-03-30', 0, 23410, ''),
(202, 'learn new tempate', '', '10 choti', '2023-04-05', '2023-04-06', 0, 23410, ''),
(203, 'learn new tempate', '', 'do work mentioned', '2023-03-02', '2023-03-03', 0, 23412, ''),
(205, 'learn databas', '', 'learn from w3school', '2023-03-23', '2023-03-25', 0, 23416, 'Finished'),
(206, 'learn new tempate', '', 'do work mentioned', '2023-03-31', '2023-03-24', 0, 23419, 'Finished'),
(208, 'learn css', '', 'w3school', '2023-03-24', '2023-03-25', 0, 23416, 'Finished'),
(209, 'learn new tempate', '', 'w3 school', '2023-03-24', '2023-03-25', 0, 23423, 'Finished'),
(210, 'learn php', '', 'w3 school', '2023-03-29', '2023-03-30', 0, 23423, 'Finished'),
(211, 'learn javascript', '', 'w3school', '2023-04-01', '2023-04-02', 0, 23423, ''),
(212, 'learn database', '', 'search for https://socialblade.com/youtube/', '2023-03-30', '2023-03-31', 0, 23420, ''),
(213, 'learn php', '', 'w3 school', '2023-03-25', '2023-03-27', 0, 23415, ''),
(214, 'learn aws', '', 'learn aws', '2022-07-06', '2031-07-04', 0, 23424, 'Finished'),
(215, 'wqswq', '', 'wsqsz', '2023-03-24', '2023-03-25', 0, 23424, 'Finished'),
(216, 'learn new tempate', '', 'do work mentioned', '2023-03-24', '2023-03-25', 0, 23424, 'Finished'),
(217, '', '', '', '0000-00-00', '0000-00-00', 0, 23415, ''),
(218, 'do work mentioned', '', 'hi', '0000-00-00', '0000-00-00', 0, 23425, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `intern_id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `intern_id`, `username`, `password`, `role`) VALUES
(21, 0, 'test', 'hi', 'admin'),
(23, 0, 'admin_jgcorporation', 'hi', 'admin'),
(26, 23415, 'priya', 'test', 'intern'),
(27, 23416, 'prajwal', 'hi', 'intern'),
(33, 23422, 'hi', 'edew', 'intern'),
(34, 23423, 'bibek', 'hi', 'intern'),
(35, 23424, 'yshiozawa', '123456', 'intern'),
(36, 23425, 'janesan', 'hi', 'intern');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `intern`
--
ALTER TABLE `intern`
  ADD PRIMARY KEY (`intern_id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`task_id`),
  ADD KEY `task_ibfk_1` (`intern_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_ibfk_1` (`intern_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `intern`
--
ALTER TABLE `intern`
  MODIFY `intern_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23426;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
