-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2019 at 03:03 PM
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
-- Database: `creditms`
--

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `from_user` varchar(50) DEFAULT NULL,
  `to_user` varchar(50) DEFAULT NULL,
  `credits_transferred` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`from_user`, `to_user`, `credits_transferred`) VALUES
('', 'Angela martin', 5),
('Andy', 'Angela', 5),
('Angela', 'Dwight', 50),
('Dwight', 'Angela', 50),
('Andy', 'Angela', 5),
('Sohum ', 'Angela', 10),
('Andy', 'Sohum ', 40),
('Angela', 'Dwight', 65),
('Dwight', 'Angela', 65),
('Sohum ', 'Andy', 80),
('Dwight', 'Michael', 50),
('Andy', 'Dwight', 35),
('Angela', 'Dwight', 15),
('Michael', 'Sohum ', 50);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `credit` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `credit`) VALUES
('Andy', 'andybernard@cornell.com', 50),
('Angela', 'angelamartin@gmail.com', 50),
('Dwight', 'dwightschrute@schrutefarms.com', 50),
('Jim', 'jimhalpert@gmail.com', 50),
('Kelly', 'kellykapoor@yahoo.com', 50),
('Kevin', 'kevinmalone@gmail.com', 50),
('Michael', 'manager@dundermifflin.com', 50),
('Pam', 'pambeesly@gmail.com', 50),
('Phyllis', 'vancerefrigeration@gmail.com', 50),
('Sohum ', 'sohum@yahoo.com', 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
