-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2021 at 11:04 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `books_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone_number` varchar(50) DEFAULT NULL,
  `mesaage` varchar(1000) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `user_name`, `email`, `phone_number`, `mesaage`, `user_id`) VALUES
(1, 'mariam', 'ali@gmail.com', '109920', 'i have a problem', 3),
(2, 'aya', 'ali@gmail.com', '108820', 'i have a problem', 2);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `book_name` varchar(100) DEFAULT NULL,
  `book_type` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `phone_number` varchar(50) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `book_img` varchar(50) DEFAULT NULL,
  `trade_type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `book_name`, `book_type`, `city`, `phone_number`, `user_id`, `book_img`, `trade_type`) VALUES
(21, 'hebta2', 'food & cooking', 'cairo', '0321456900', 1, '1616371135.jpg', 'sell'),
(22, 'a5er ayam el ard', 'love & romance', 'cairo', '00556214', 1, '1616270484.jpg', 'exchange'),
(23, 'the lord of the rings', 'love & romance', 'cairo', '002314569', 1, '1616270538.jpg', 'exchange'),
(24, 'novil1', 'love & romance', 'cairo', '00332265', 1, '1616272566.jpg', 'exchange'),
(27, 'hebta2', 'love & romance', 'cairo', '33210654', 1, '1616275961.jpg', 'exchange'),
(32, 'rdr', 'love & romance', 'cairo', '023658900', 1, '1616369159.jpg', 'sell'),
(34, 'el arb3on', 'love & romance', 'alex', '0236589', 1, '1616348683.jpg', 'exchange'),
(37, 'rrty', NULL, 'cairo', '0103225000', 1, '1616365550.jpg', 'sell'),
(39, 'hnk', 'food & cooking', 'alex', '023155468', 1, '1616367433.jpg', 'sell'),
(40, 'hebta', 'food & cooking', 'cairo', '01023654', 1, '1616368454.jpg', 'exchange'),
(41, 'ard zekola', 'computer', 'cairo', '02136548', 1, '1616368574.jpg', 'exchange'),
(43, 'ard zekola', 'food & cooking', 'alex', '032145600', 12, '1616449495.jpeg', 'sell'),
(44, 'el arb3on', 'food & cooking', 'cairo', '0213654', 12, '1616433189.jpg', 'exchange'),
(46, 'ard zekola', 'computer', 'alex', '01026542', 12, '1616447934.jpg', 'sell'),
(47, 'el arb3on', 'computer', 'cairo', '03215468', 12, '1616449570.jpg', 'exchange');

-- --------------------------------------------------------

--
-- Stand-in structure for view `post_view`
-- (See below for the actual view)
--
CREATE TABLE `post_view` (
`id` int(11)
,`book_name` varchar(100)
,`book_type` varchar(100)
,`city` varchar(100)
,`phone_number` varchar(50)
,`user_id` int(11)
,`book_img` varchar(50)
,`trade_type` varchar(50)
,`user_name` varchar(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `phone_number` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `phone_number`, `email`, `password`, `gender`) VALUES
(1, 'belal', '100000', 'belal@gmail.com', '12345', 'male'),
(2, 'aya', '111111', 'aya@gmail.com', '112233', 'female'),
(3, 'mariam', '122222', 'mariam@gmail.com', '11122', 'female'),
(4, 'mostafa', '133333', 'mostafa@gmail.com', '222211', 'male'),
(5, 'radwa', '144444', 'radwa@gmail.com', '222333', 'female'),
(6, 'ali', '1555444', 'ali@gmail.com', '335544', 'male'),
(7, 'asmaa', '1666444', 'asmaa@gmail.com', '225544', 'female'),
(8, 'ahmed', '19995444', 'ahmed@gmail.com', '338844', 'male'),
(9, 'zeinab', '102020', 'zeinab@gmail.com', '3344dddjj', 'female'),
(10, 'rana', '010303050', 'rana@gmail.com', 'ooubhy5552211', 'female'),
(11, 'raaaa', '02013654', 'radaw@gmail', '$2y$10$TIf4hXT6J6ZxQWGFcB98leIyesSep5XsOf9CQ0ijCsCfuZPv9L2oW', 'female'),
(12, 'radwa', '010920', 'radwa@gmail', '$2y$10$/eEoFrC3CWW7Oc0uudtxFugXWsBke2xdOcNLLusPxF/bMFc.k2EAi', 'female');

-- --------------------------------------------------------

--
-- Structure for view `post_view`
--
DROP TABLE IF EXISTS `post_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `post_view`  AS  select `posts`.`id` AS `id`,`posts`.`book_name` AS `book_name`,`posts`.`book_type` AS `book_type`,`posts`.`city` AS `city`,`posts`.`phone_number` AS `phone_number`,`posts`.`user_id` AS `user_id`,`posts`.`book_img` AS `book_img`,`posts`.`trade_type` AS `trade_type`,`users`.`user_name` AS `user_name` from (`users` join `posts`) where (`users`.`id` = `posts`.`user_id`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone_number` (`phone_number`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
