-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2022 at 02:03 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

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
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `date` int(11) DEFAULT NULL,
  `amount` varchar(211) DEFAULT NULL,
  `patient_name` varchar(211) DEFAULT NULL,
  `patient_email` varchar(211) DEFAULT NULL,
  `patient_phone` varchar(211) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `doctor_id`, `patient_id`, `date`, `amount`, `patient_name`, `patient_email`, `patient_phone`) VALUES
(1, NULL, NULL, 2022, NULL, 'kashif', 'user@gmail.com', '40773555'),
(2, NULL, NULL, 2022, NULL, 'abc', 'yasirkhaskheli1@gmail.com', '03003632781'),
(3, NULL, NULL, 2022, NULL, 'ali', 'yasirkhaskheli1@gmail.com', '40773555');

-- --------------------------------------------------------

--
-- Table structure for table `clinics`
--

CREATE TABLE `clinics` (
  `id` int(11) NOT NULL,
  `name` varchar(211) DEFAULT NULL,
  `address` varchar(211) DEFAULT NULL,
  `latitude` varchar(211) DEFAULT NULL,
  `longitude` varchar(211) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clinics`
--

INSERT INTO `clinics` (`id`, `name`, `address`, `latitude`, `longitude`, `user_id`) VALUES
(1, 'clicnic here', 'aaaa', '123456', '12222334', 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` varchar(211) DEFAULT NULL,
  `name` varchar(211) DEFAULT NULL,
  `email` varchar(211) DEFAULT NULL,
  `phone` varchar(211) DEFAULT NULL,
  `password` varchar(211) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `occupation` varchar(211) DEFAULT NULL,
  `speciality` varchar(211) DEFAULT NULL,
  `doctor_id` varchar(211) DEFAULT NULL,
  `gender` varchar(211) DEFAULT NULL,
  `status` varchar(211) DEFAULT 'pending',
  `address` varchar(211) DEFAULT NULL,
  `latitude` varchar(211) DEFAULT NULL,
  `longitude` varchar(211) DEFAULT NULL,
  `fees` varchar(211) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `phone`, `password`, `date_of_birth`, `occupation`, `speciality`, `doctor_id`, `gender`, `status`, `address`, `latitude`, `longitude`, `fees`) VALUES
(8, 'doctor', 'yasir', 'user@gmail.com', '03003632781', '12345678', '1992-06-18', 'ocp', 'aaaa', NULL, 'Male', 'pending', '0', '0', '0', '200'),
(9, 'doctor', 'user1', 'user1@gmail.com', '03003632781', 'Abcd1234', '2022-04-23', 'ocp', 'ccddddss', NULL, 'male', 'pending', '0', '0', '0', '0'),
(10, 'doctor', 'user', 'user@gmail.com', '03003632781', 'Abcd1234', '1992-06-18', 'ocp', 'kkkkkkk', NULL, 'male', 'pending', '0', '0', '0', '0'),
(11, 'patient', 'use51', 'user4@gmail.com', '03003632781', 'Abcd1234', '2022-04-23', 'ocp', NULL, NULL, 'male', 'pending', '0', '0', '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clinics`
--
ALTER TABLE `clinics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `clinics`
--
ALTER TABLE `clinics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
