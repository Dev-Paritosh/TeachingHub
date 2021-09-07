-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2021 at 11:09 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'shivam', '$2y$10$WzrIsd4CZFaduxRtPqlXAOOEywvbLw2K4siIDcPhmh4');

-- --------------------------------------------------------

--
-- Table structure for table `admint`
--

CREATE TABLE `admint` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admint`
--

INSERT INTO `admint` (`id`, `username`, `password`) VALUES
(2, 'paritosh', 'mishra'),
(1, 'shivam', '$2y$10$WzrIsd4CZFaduxRtPqlXAOOEywvbLw2K4siIDcPhmh4rvUpr7xVf2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `name`, `email`) VALUES
(5, '1907340130037', '$2y$10$WS2y6MhIyo7WXKCyYbftGe22Z6K5AN9bQeIIbM4eYWT.GVVcWHa5O', '2021-07-29 15:25:50', 'blog4pm', 'ashumissra1@gmail.com'),
(18, '222222', '$2y$10$ggLdx3yC.MilI/q858LdcOMACbpk2uJDGhd33Llq19aowWQK8MJ/u', '2021-08-30 11:26:34', '222222', '222222'),
(11, 'adasd', '$2y$10$XplXbXlLdOvwxnL5Folh2.YznqN/uVoLrOcTmMcTebIiE6kTyq/r6', '2021-08-30 09:26:23', 'asdas', 'asdas'),
(26, 'ajay', '$2y$10$mavxcek5Qrl/hKhXGe4NHOLohJjZ3CoqArCs9oVeQy8eJ2QThGEcy', '2021-09-01 10:26:47', 'sasa', 'asas'),
(23, 'akg', '$2y$10$XLkr3zdDYR2XDNHhVwQYjecZuHcvNFgu7Lw/32XZKtyLQOR2rNLke', '2021-09-01 10:04:20', 'asa', 'sas'),
(24, 'akga', '$2y$10$BforKCJ1c6YHhr.iYcwsBOdAdQ65R13d3x.8f.zBhO9ntJ7EO9IOi', '2021-09-01 10:06:30', 'as', 'asa'),
(27, 'akgg', '$2y$10$bzR52/dvEvxTRkob2bHku.0yFhHxe9XwWbbSGGVXA8xd19sMztvuq', '2021-09-01 10:40:00', 'ashu mishra', 'asasa'),
(12, 'asasadd', '$2y$10$9CYonA7PUOmBwcMgSVf88e.GKIDlQ81dLWxdzL/IjXZ1G7D.ZK0ai', '2021-08-30 09:28:44', '111111', 'asas'),
(15, 'asasdadad', '$2y$10$ZgwD3ThvoWkwa8sK7zYQ4u2WKJSPG1BoYGpzY3afGPlNo9EpVpwCa', '2021-08-30 10:53:33', 'sasas', 'caca'),
(13, 'ashumissra', '$2y$10$ORFoR/ly9wuc0f.unGLOBO2BM461C0AtCkLZOEd.3BqXodpmwIX9S', '2021-08-30 09:30:32', 'ashu', 'aa'),
(25, 'czx', '$2y$10$4c5Squ2sgoBHeEEA4I8guexHALKiRYExUM0DKxOpThEo8sHeuFsYa', '2021-09-01 10:26:06', 'czxczc', 'zxc'),
(9, 'mishra', '$2y$10$ODuv8CTHTiOm/odQ4b4ZouzzqvEinKuokI1kN7G/.Y6NWR/nqtiHG', '2021-08-30 03:44:06', 'ashu', 'asdf'),
(2, 'PAR1TOSH', '$2y$10$WzrIsd4CZFaduxRtPqlXAOOEywvbLw2K4siIDcPhmh4rvUpr7xVf2', '2021-07-12 03:32:20', 'PARITOSH MISHRA', 'ashumissra1@gmail.com'),
(19, 'paritosh', '$2y$10$kmsvixVUpw7zUUGwtcy6mu2ndeVwpCt6vRb1/BLlxU233Bol/KctK', '2021-09-01 09:09:59', 'paritosh', 'paritosh@gmail.com'),
(4, 'paritosh_mishra_', '$2y$10$qTzFWGYbHoRPEcb9Dtpjju6E/.X3/JL8zfCs9Dj5Nfd.TbCO4yz.y', '2021-07-29 15:25:04', 'sd', 'ashumissra1@gmail.com'),
(10, 'pramod', '$2y$10$3Cx1TuBKYDRIbqHs2QcfuusbLA50DDiG3QpNMaZjgBKGJf6vP.mI2', '2021-08-30 09:12:17', 'pramod dubey', 'random'),
(14, 'qqqqqq', '$2y$10$108xR5rBfqeUxMREI.mFFeGTb4Yadxp67exgfEav5jz83XJU9.uOG', '2021-08-30 09:32:13', 'qqqqqq', 'qqqqqq'),
(8, 'random', '$2y$10$ZvpupDB2Zl.bkwGmaBxHaOqTkjNBaabjNOlZmbcTPNvAEUfsLI7rG', '2021-08-23 17:06:22', 'PARITOSH MISHRA', 'ashumissra1@gmail.com'),
(16, 'register', '$2y$10$d7oeugCH5yjxUAuFghdriufBINV.yZ9s4TJrUhGao9pyyGH.uzDp.', '2021-08-30 10:54:22', 'asdas', 'asas'),
(3, 'shivam', '$2y$10$G5qZPl5jqyQqsE3wMd7dyuM2gddcrw53I3yHSw5PCLZSH5.rv5vyi', '2021-07-29 10:49:17', 'shivam gu[ta', 'ashumissra1@gmail.com'),
(6, 'unknown', '$2y$10$sBylvgvpXZR9G8ofr8V7c.W53wAE7/LHat/Rgi1rpoYL5urVIhVtW', '2021-07-30 00:45:29', 'blog4pm', 'ashumissra1@gmail.com'),
(7, 'unknown1', '$2y$10$CDfAe/pcD3sopl85EK9J7eKzFJXKqJ2h8egP83c5kb.kJn/bK3YdK', '2021-07-30 09:57:27', 'PARITOSH MISHRA', 'ashumissra1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `title` varchar(50) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `sub_topic` varchar(100) NOT NULL,
  `discription` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `location`, `title`, `topic`, `sub_topic`, `discription`) VALUES
(18, 'Lionel Messi vs Germany _ 2014 World Cup Final 1080i.mp4', 'videos/Lionel Messi vs Germany _ 2014 World Cup Final 1080i.mp4', 'title', 'asdf', 'sub topic', 'descriptionLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, bu'),
(19, 'Lionel Messi vs Germany _ 2014 World Cup Final 1080i.mp4', 'videos/Lionel Messi vs Germany _ 2014 World Cup Final 1080i.mp4', 'this is title', 'this is topic', 'this is sub topic', 'descriptionLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, bu'),
(20, 'Lionel Messi vs Germany _ 2014 World Cup Final 1080i.mp4', 'videos/Lionel Messi vs Germany _ 2014 World Cup Final 1080i.mp4', 'again', 'copa', 'america', 'nothingLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but al'),
(21, 'Lionel Messi vs Germany _ 2014 World Cup Final 1080i.mp4', 'videos/Lionel Messi vs Germany _ 2014 World Cup Final 1080i.mp4', 'checking', 'checking', 'phase', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `videos_liked`
--

CREATE TABLE `videos_liked` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `video` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos_liked`
--

INSERT INTO `videos_liked` (`id`, `user`, `video`) VALUES
(4, 8, 16),
(5, 8, 17),
(6, 3, 17),
(7, 3, 16),
(8, 3, 18),
(9, 17, 18),
(10, 17, 19),
(11, 3, 20),
(12, 3, 19),
(13, 3, 21),
(14, 2, 19),
(15, 2, 18),
(16, 2, 20),
(17, 2, 21),
(18, 26, 18),
(19, 26, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `admint`
--
ALTER TABLE `admint`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos_liked`
--
ALTER TABLE `videos_liked`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admint`
--
ALTER TABLE `admint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `videos_liked`
--
ALTER TABLE `videos_liked`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
