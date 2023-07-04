-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 04, 2023 at 09:09 PM
-- Server version: 8.0.33
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practice`
--

-- --------------------------------------------------------

--
-- Table structure for table `accesstype`
--

CREATE TABLE `accesstype` (
  `access_id` int NOT NULL,
  `access_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `accesstype`
--

INSERT INTO `accesstype` (`access_id`, `access_type`) VALUES
(1, 'Admin'),
(2, 'Teacher'),
(3, 'Student'),
(4, 'Principle');

-- --------------------------------------------------------

--
-- Table structure for table `Chapter`
--

CREATE TABLE `Chapter` (
  `id` int NOT NULL,
  `sbj_id` int DEFAULT NULL,
  `chp_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Chapter`
--

INSERT INTO `Chapter` (`id`, `sbj_id`, `chp_name`) VALUES
(1, 1, 'Number Theory'),
(5, 1, 'Number Theory');

-- --------------------------------------------------------

--
-- Table structure for table `Standard`
--

CREATE TABLE `Standard` (
  `id` int NOT NULL,
  `std_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Standard`
--

INSERT INTO `Standard` (`id`, `std_name`) VALUES
(1, 'hkg'),
(15, '1st'),
(16, '2nd'),
(17, '3rd'),
(18, '4th'),
(19, '5th'),
(20, '6th'),
(21, '7th'),
(22, '8th'),
(23, '9th'),
(24, '10th'),
(25, '11th science');

-- --------------------------------------------------------

--
-- Table structure for table `Subject`
--

CREATE TABLE `Subject` (
  `id` int NOT NULL,
  `std_id` int DEFAULT NULL,
  `sbj_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Subject`
--

INSERT INTO `Subject` (`id`, `std_id`, `sbj_name`) VALUES
(1, 1, 'Math');

-- --------------------------------------------------------

--
-- Table structure for table `Task_1`
--

CREATE TABLE `Task_1` (
  `id` int NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `subject` varchar(255) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Task_1`
--

INSERT INTO `Task_1` (`id`, `f_name`, `l_name`, `dob`, `subject`, `gender`, `image`) VALUES
(1, 'Jay', 'Doshi', '2001-03-05', 'English', 'M', 'Jay_1.jpeg'),
(2, 'yashvi', 'Suthar', '2000-02-14', 'Maths', 'F', 'yashvi_2.jpg'),
(3, 'Subham', 'kumar', '2001-01-01', 'Science', 'M', 'Subham_3.jpeg'),
(4, 'Faruk', 'Khan', '2000-12-11', 'Gujarati', 'M', 'Faruk_4.jpg'),
(5, 'Malika', 'Singh', '2000-02-09', 'Hindi', 'F', 'Malika_5.jpeg'),
(6, 'Aditya', 'Roy', '2000-11-10', 'Maths', 'M', 'Aditya_6.jpeg'),
(7, 'Fenny', 'Patel', '2000-03-08', 'Gujarati', 'F', 'Fenny_7.jpeg'),
(8, 'Manish', 'Gandhi', '2000-04-01', 'Science', 'M', 'Manish_8.jpeg'),
(9, 'Jenny', 'Shah', '2000-08-09', 'Physics', 'F', 'Jenny_9.jpg'),
(10, 'Jay', 'Doshi', '2001-03-05', 'English', 'M', NULL),
(11, 'yashvi', 'Suthar', '2000-02-14', 'Maths', 'F', NULL),
(12, 'Subham', 'kumar', '2001-01-01', 'Science', 'M', NULL),
(13, 'Faruk', 'Khan', '2000-12-11', 'Gujarati', 'M', NULL),
(14, 'Malika', 'Singh', '2000-02-09', 'Hindi', 'F', NULL),
(15, 'Aditya', 'Roy', '2000-11-10', 'Maths', 'M', NULL),
(16, 'Fenny', 'Patel', '2000-03-08', 'Gujarati', 'F', NULL),
(17, 'Manish', 'Gandhi', '2000-04-01', 'Science', 'M', NULL),
(18, 'Jenny', 'Shah', '2000-08-09', 'Physics', 'F', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Task_2`
--

CREATE TABLE `Task_2` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `contact_no` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `std_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Task_2`
--

INSERT INTO `Task_2` (`id`, `username`, `city`, `contact_no`, `email`, `password`, `image`, `std_id`) VALUES
(1, 'rew', 'wer', 456456, 'xvcxv@hijh.comzcxzxczx', '123', NULL, NULL),
(2, 'pathik', 'rajkot', 798796431, 'dsdfs@gsd.com', '123', NULL, NULL),
(4, 'mitul', 'morbi', 78795643, 'dsdfs@gsd.com', '123', NULL, 18),
(6, 'mitul', 'rajkot', 123456789, 'hello@Hi.com', '123', NULL, NULL),
(7, 'tushar', 'Rajkot', 123789456, 'xvcxv@hijh.comzcxzxczx', '123', NULL, 25);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `access_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`id`, `user_id`, `access_type`) VALUES
(1, 2, 'Admin'),
(2, 3, 'Student'),
(3, 4, 'Teacher'),
(4, 5, 'Student'),
(5, 4, 'Student'),
(6, 7, 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Chapter`
--
ALTER TABLE `Chapter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Chapter_ibfk_1` (`sbj_id`);

--
-- Indexes for table `Standard`
--
ALTER TABLE `Standard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Subject`
--
ALTER TABLE `Subject`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Subject_ibfk_1` (`std_id`);

--
-- Indexes for table `Task_1`
--
ALTER TABLE `Task_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Task_2`
--
ALTER TABLE `Task_2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Task_2_ibfk_1` (`std_id`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Chapter`
--
ALTER TABLE `Chapter`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Standard`
--
ALTER TABLE `Standard`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `Subject`
--
ALTER TABLE `Subject`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `Task_1`
--
ALTER TABLE `Task_1`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `Task_2`
--
ALTER TABLE `Task_2`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Chapter`
--
ALTER TABLE `Chapter`
  ADD CONSTRAINT `Chapter_ibfk_1` FOREIGN KEY (`sbj_id`) REFERENCES `Subject` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Subject`
--
ALTER TABLE `Subject`
  ADD CONSTRAINT `Subject_ibfk_1` FOREIGN KEY (`std_id`) REFERENCES `Standard` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Task_2`
--
ALTER TABLE `Task_2`
  ADD CONSTRAINT `Task_2_ibfk_1` FOREIGN KEY (`std_id`) REFERENCES `Standard` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
