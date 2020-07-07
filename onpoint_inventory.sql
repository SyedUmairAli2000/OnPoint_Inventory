-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 07, 2020 at 08:39 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onpoint_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `userpassword` varchar(255) NOT NULL,
  `user_type` enum('Admin','User') NOT NULL,
  `register_date` date NOT NULL,
  `last_login` datetime NOT NULL,
  `notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `userpassword`, `user_type`, `register_date`, `last_login`, `notes`) VALUES
(1, 'Admin', 'admin@gmail.com', '123456789', 'Admin', '2020-07-05', '2020-07-05 00:00:00', ''),
(2, 'User', 'user@gmail.com', '123456789', 'User', '2020-07-05', '2020-07-05 00:00:00', ''),
(3, 'User123', 'user1@gmail.com', '$2y$08$fX9TGKGyeLiiHneLnD0NkuN3Zj.xDa7pYGGQbv1tL2KQ5RO99nB6O', 'User', '2020-07-05', '2020-07-05 00:00:00', ''),
(4, 'User1', 'user123@gmail.com', '$2y$08$11RsSitM0paReoMiFWyqEelFlfHxWpGQg3aqNq5RtKKidVP/9nGTK', 'User', '2020-07-05', '2020-07-05 09:07:45', ''),
(5, 'Umair', 'umair@gmail.com', '1234', 'Admin', '2020-07-05', '2020-07-05 00:00:00', ''),
(6, 'Umair', 'umair1@gmail.com', '$2y$08$33GfWQGgrf5R4oSu9ACybeJrE4rOWTOarb38FBed68r02npFOPFdO', 'Admin', '2020-07-05', '2020-07-05 00:00:00', ''),
(7, 'Umair', 'umair12@gmail.com', '$2y$08$4ZXB8H2p0GzrlVdR5tZu5OpNBMHnC4LjzJIct.2Cpq8xc83WVdVsm', 'Admin', '2020-07-05', '2020-07-05 08:07:55', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
