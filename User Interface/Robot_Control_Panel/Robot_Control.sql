-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 02, 2020 at 10:50 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Robot_Control`
--

-- --------------------------------------------------------

--
-- Table structure for table `control_instructions`
--

CREATE TABLE `control_instructions` (
  `id` int(255) NOT NULL,
  `instruction` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `control_instructions`
--

INSERT INTO `control_instructions` (`id`, `instruction`, `code`) VALUES
(2, 'Ahead', 'H'),
(3, 'Back', 'B'),
(4, 'Right', 'R'),
(5, 'Left', 'L'),
(6, 'Stop', 'S');

-- --------------------------------------------------------

--
-- Table structure for table `steps_instructions`
--

CREATE TABLE `steps_instructions` (
  `id` int(255) NOT NULL,
  `right_steps` int(255) NOT NULL,
  `left_steps` int(255) NOT NULL,
  `up_steps` int(255) NOT NULL,
  `down_steps` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `steps_instructions`
--

INSERT INTO `steps_instructions` (`id`, `right_steps`, `left_steps`, `up_steps`, `down_steps`) VALUES
(1, 0, 0, 0, 0),
(2, 0, 0, 0, 0),
(3, 1, 3, 2, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `control_instructions`
--
ALTER TABLE `control_instructions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `steps_instructions`
--
ALTER TABLE `steps_instructions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `control_instructions`
--
ALTER TABLE `control_instructions`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `steps_instructions`
--
ALTER TABLE `steps_instructions`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
