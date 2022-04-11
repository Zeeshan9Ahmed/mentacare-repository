-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2022 at 07:57 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mentcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` varchar(211) DEFAULT NULL,
  `name` varchar(211) DEFAULT NULL,
  `email` varchar(211) DEFAULT NULL,
  `avatar` varchar(211) DEFAULT NULL,
  `password` varchar(211) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `occupation` varchar(211) DEFAULT NULL,
  `speciality` varchar(211) DEFAULT NULL,
  `verification_code` varchar(211) DEFAULT NULL,
  `gender` varchar(211) DEFAULT NULL,
  `status` varchar(211) DEFAULT 'pending',
  `address` varchar(211) DEFAULT NULL,
  `latitude` varchar(211) DEFAULT NULL,
  `longitude` varchar(211) DEFAULT NULL,
  `fees` varchar(211) DEFAULT NULL,
  `national_id` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `emergency_contact` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `avatar`, `password`, `date_of_birth`, `occupation`, `speciality`, `verification_code`, `gender`, `status`, `address`, `latitude`, `longitude`, `fees`, `national_id`, `phone_number`, `emergency_contact`, `is_active`) VALUES
(23, 'patient', 'Yasir Mercado', 'patient@gmail.com', 'sample.png', 'Pa$$w0rd!', '1978-01-28', 'Voluptatem et libero', NULL, '178930', 'male', 'pending', NULL, NULL, NULL, NULL, 'Sed minus officia du', '303', '930', 1),
(24, 'doctor', 'Ezekiel Gilmore', 'doctor@gmail.com', 'Screenshot (18).png', 'Pa$$w0rd!', '1981-04-01', 'Harum exercitationem', 'Sapiente qui volupta', '372045', 'male', 'pending', NULL, '24.8607343', '67.0011364', '68', 'Ea in provident con', '542', '130', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
