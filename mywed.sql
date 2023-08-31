-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 31, 2023 at 08:14 PM
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
-- Database: `mywed`
--

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `review` varchar(1000) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `review`, `email`) VALUES
(3, 'Emily and James', 'Working with \"DreamDay\" was an absolute pleasure. They took care of every detail and made our wedding day stress-free and magical. The team\'s professionalism and attention to detail exceeded our expectations. Highly recommended!', 'emily@gmail.com'),
(4, 'Hardik Ali', 'We cannot thank \"DreamDay\" enough for their exceptional service. From the initial planning stages to the actual day, they were dedicated and attentive. Our guests were blown away by the stunning decorations and seamless coordination. It was the wedding of our dreams!', 'hardikali@gmail.com'),
(6, 'Jessica and David', 'We were impressed by the expertise and professionalism of \"DreamDay\". The team guided us throughout the planning process, offering valuable insights and recommendations. On the day of our wedding, everything ran smoothly, allowing us to fully enjoy our celebration. Thank you!', 'jessi@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `username`, `password`, `email`) VALUES
(1, 'Fathima', 'Munazzaha', 'munazzahammf', '1234', 'munazzahammf@gmail.com'),
(13, 'Mohamed', 'Mushraf', 'user', '123', 'mushrafmim@gmail.com'),
(15, 'Mohamed', 'Mushraf', 'hi', '123', 'hi@gmail.com'),
(16, 'Mohamed', 'Mushraf', '1234', '1234', 'hello@gmail.com'),
(17, 'Mohamed', 'Mushraf', 'sfsd', 'sss', 'sfdf@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
