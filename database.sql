-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2023 at 10:47 AM
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
-- Database: `ids`
--

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `exam-id` int(11) NOT NULL,
  `total-score` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `exam-date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `examquestions`
--

CREATE TABLE `examquestions` (
  `examId` int(11) NOT NULL,
  `questionId` int(11) NOT NULL,
  `answer` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `questionText` varchar(255) NOT NULL,
  `choice1` varchar(200) NOT NULL,
  `choice2` varchar(200) NOT NULL,
  `choice3` varchar(200) NOT NULL,
  `choice4` varchar(200) NOT NULL,
  `correctChoice` varchar(200) NOT NULL,
  `questionPhoto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `questionText`, `choice1`, `choice2`, `choice3`, `choice4`, `correctChoice`, `questionPhoto`) VALUES
(30, 'asfsdfsdf', '1', '2', '3', '4', 'b', 'PXL_20230104_095854994.PORTRAIT.jpg'),
(31, 'Iki kimenyetso ni ikihe', 'NI stop sign', 'ni gahunda 2', 'reka ntago mbizi', 'Ndabizi ark ntabyo nkubwiye', 'c', 'IMG-20230113-WA0002.jpg'),
(32, 'Umuntu akora ikizamini ryari', '../uploads/ai.jpg', '../uploads/Coverage 2.jpg', '../uploads/error.jpg', 'IMG-20230113-WA0008.jpg', 'a', 'NULL'),
(33, 'Iki ni ikibazo cya test', ';laksjdf', 'asdfsadf', 'sdafsdf', 'asdfsdf', 'c', 'NULL'),
(34, 'Really test questions', '../uploads/8.jpg', 'IMG-20230124-WA0006.jpg', 'IMG-20230124-WA0005.jpg', 'detached.jpg', 'b', 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `names` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `code` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `email`, `password`, `names`, `role`, `code`) VALUES
(1, 'ids@gmail.com', 'ids', 'IDS Admin', 'admin', ''),
(2, 'ids@gmail.com', 'ids', 'IDS Admin', 'admin', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`exam-id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `exam-id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
