-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2022 at 06:31 PM
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
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `booking_date` varchar(11) DEFAULT NULL,
  `amount` varchar(211) DEFAULT NULL,
  `booking_time` varchar(211) DEFAULT NULL,
  `status` varchar(211) DEFAULT NULL,
  `patient_phone` varchar(211) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `doctor_id`, `patient_id`, `booking_date`, `amount`, `booking_time`, `status`, `patient_phone`) VALUES
(14, 24, 23, '2022-04-11', '68', '10:52:00pm', 'pending', NULL),
(15, 24, 23, '2022-04-12', '68', '10:26:00pm', 'pending', NULL);

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
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `prescription` varchar(255) NOT NULL,
  `pres_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`id`, `doctor_id`, `patient_id`, `prescription`, `pres_date`) VALUES
(1, 24, 23, 'dlfasjfl', '12/04/2022'),
(2, 24, 23, 'Hey patient how are You', '12/04/2022');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `day` varchar(255) NOT NULL,
  `start_time` varchar(223) NOT NULL,
  `end_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(24, 'doctor', 'Ezekiel Gilmore', 'doctor@gmail.com', 'Screenshot (18).png', 'Pa$$w0rd!', '1981-04-01', 'Harum exercitationem', 'Sapiente qui volupta', '372045', 'male', 'pending', NULL, '24.8607343', '67.0011364', '68', 'Ea in provident con', '542', '130', 1),
(25, 'patient', 'Herrod Wells', 'yasirkhaskheli1@gmail.com', 'sample.png', 'Pa$$w0rd!', '1989-05-25', 'Facilis minim nihil ', NULL, '618246', 'male', 'pending', NULL, NULL, NULL, NULL, 'Recusandae Eveniet', '3', '668', 1);

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
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `clinics`
--
ALTER TABLE `clinics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
