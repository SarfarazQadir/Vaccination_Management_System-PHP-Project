-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2024 at 10:15 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaccination_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_email` varchar(255) DEFAULT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`admin_id`, `admin_username`, `admin_email`, `admin_password`) VALUES
(1, '@admin', 'admin12@gmail.com', 'admin1234');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `booking_id` int(11) NOT NULL,
  `child_id` int(11) DEFAULT NULL,
  `hospital_id` int(11) DEFAULT NULL,
  `booking_time` varchar(255) DEFAULT NULL,
  `booking_date` date DEFAULT NULL,
  `b_status` varchar(255) DEFAULT 'Reject',
  `vaccine_id` int(255) NOT NULL,
  `Report` varchar(255) NOT NULL DEFAULT 'Process',
  `parent_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`booking_id`, `child_id`, `hospital_id`, `booking_time`, `booking_date`, `b_status`, `vaccine_id`, `Report`, `parent_id`) VALUES
(21, 14, 1, '11-1', '2024-02-25', 'Approve', 2, 'Positive', 1),
(22, 15, 1, '11-1', '2024-02-28', 'Approve', 2, 'Negative', 31),
(23, 16, 1, '11-1', '2024-02-29', 'Reject', 2, 'Process', 43),
(24, 17, 15, '11-1', '2024-02-28', 'Approve', 2, 'Negative', 45);

-- --------------------------------------------------------

--
-- Table structure for table `child_details`
--

CREATE TABLE `child_details` (
  `child_id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `child_details`
--

INSERT INTO `child_details` (`child_id`, `parent_id`, `name`, `date_of_birth`, `gender`) VALUES
(14, 1, 'Hashim', '2024-02-25', 'Male'),
(15, 31, 'Sameer', '2024-02-27', 'Male'),
(16, 43, 'Osama', '2024-02-15', 'Male'),
(17, 45, 'XYZ 123', '2023-12-04', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hospital_details`
--

CREATE TABLE `hospital_details` (
  `hospital_id` int(11) NOT NULL,
  `hospital_name` varchar(255) NOT NULL,
  `hospital_username` varchar(255) DEFAULT NULL,
  `hospital_password` varchar(255) DEFAULT NULL,
  `hospital_email` varchar(255) DEFAULT NULL,
  `hospital_contact` varchar(255) DEFAULT NULL,
  `hospital_address` varchar(255) DEFAULT NULL,
  `hospital_location` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT 'Reject'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospital_details`
--

INSERT INTO `hospital_details` (`hospital_id`, `hospital_name`, `hospital_username`, `hospital_password`, `hospital_email`, `hospital_contact`, `hospital_address`, `hospital_location`, `status`) VALUES
(1, 'Jinnah Hospitalsssssss', '@hospitaljinnah', '1234', 'hospitaljinnah@gmail.com', '2111111233', 'Rafiqui, Sarwar Shaheed Rd, Karachi Cantonment, Karachi, Karachi City,  75510', 'Karachi', 'Approve'),
(2, 'Liaquat National Hospital', '@hospitalliaquat', '1234', 'hospitalliaquat@gmail.com', '031111111111', 'National Stadium Rd, Liaquat National Hospital, Karachi, Karachi City, Sindh 74800', 'Karachi', 'Approve'),
(3, 'Dow Hospital', '@hospitaldow', '1234', 'dowhospital@gmail.com', '121444444444', ' V5PQ+H4M, Saudabad Shadman Town Kala Board, Karachi, Karachi City, Sindh', 'Karachi', 'Approve'),
(4, 'Ziauddin Hospital', '@hospitalziauddin', '1234', 'ziauddinhospital@gmail.com', '03666666666', ' Allama Rasheed Turabi Rd, Wahid Colony, Karachi, Karachi City, Sindh 74700', 'Karachi', 'Approve'),
(5, 'Indus Hospital', '@hospitalindus', '1234', 'indushospital@gmail.com', '037777777777', 'Plot C-76, Sector 31/5, Opposite، Crossing, Darussalam Society Sector 39 Korangi, Karachi, Karachi City, Sindh', 'Karachi', 'Reject'),
(14, 'abc', 'abc101', 'abc123', 'abc@gmail.com', '0303284387', 'abc karachi', 'Karachi', 'Reject'),
(15, 'XYZ', 'XYZ101', 'xyz123', 'XYZ@gmail.com', '0123123123', 'xyz karachi', 'karachi', 'Approve');

-- --------------------------------------------------------

--
-- Table structure for table `parent_details`
--

CREATE TABLE `parent_details` (
  `parent_id` int(11) NOT NULL,
  `parent_name` varchar(255) DEFAULT NULL,
  `parent_username` varchar(255) NOT NULL,
  `parent_password` varchar(255) NOT NULL,
  `parent_email` varchar(255) DEFAULT NULL,
  `parent_contact` int(11) DEFAULT NULL,
  `parent_city` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'Reject'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parent_details`
--

INSERT INTO `parent_details` (`parent_id`, `parent_name`, `parent_username`, `parent_password`, `parent_email`, `parent_contact`, `parent_city`, `status`) VALUES
(1, 'Waseem Baloch', '@waseem', '1234', 'waseem@gmail.com', 324245455, 'Karachi', 'Approve'),
(2, 'Shams', '@shams', '1234', 'shams@gmail.com', 34126789, 'Karachi', 'Approve'),
(3, 'Bilal', '@bilal', '1234', 'bilal@gmail.com', 33342234, 'Karachi', 'Reject'),
(4, 'Akbar', '@akbar', '1234', 'akbar@gmail.com', 3562768, 'Karachi', 'Reject'),
(5, 'Saleem', '@saleem', '1234', 'saleem@gmail.com', 23144454, 'Karachi', 'Reject'),
(31, 'Yaseen', 'Yaseen', '1234', 'yaseen@gmail.com', 1213434, 'Pasni', 'Reject'),
(43, '', 'Dawood', '1234', 'dawood@gmail.com', 89738974, 'Karachi', 'Reject'),
(44, NULL, 'Ali', '1234', 'ali@gmail.com', NULL, NULL, 'Reject'),
(45, 'Syed Muhammad Taha', 'taha101', 'taha123', 'taha@gmail.com', 2147483647, 'Karachi', 'Reject');

-- --------------------------------------------------------

--
-- Table structure for table `vaccination_schedule`
--

CREATE TABLE `vaccination_schedule` (
  `schedule_id` int(11) NOT NULL,
  `child_id` int(11) DEFAULT NULL,
  `vaccine_id` int(11) DEFAULT NULL,
  `vaccination_date` date DEFAULT NULL,
  `Report` varchar(20) DEFAULT NULL,
  `hospital_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vaccine_details`
--

CREATE TABLE `vaccine_details` (
  `vaccine_id` int(11) NOT NULL,
  `vaccine_name` varchar(255) NOT NULL,
  `vaccine_description` varchar(255) NOT NULL,
  `vaccine_availability` varchar(255) NOT NULL DEFAULT 'unavailable',
  `h_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaccine_details`
--

INSERT INTO `vaccine_details` (`vaccine_id`, `vaccine_name`, `vaccine_description`, `vaccine_availability`, `h_id`) VALUES
(1, 'Diphtheria, Tetanus, and Pertussis (DTaP)', 'Protects against diphtheria, tetanus, and whooping cough (pertussis)', 'unavailable', 1),
(2, 'Polio', 'Provides immunity against polio, a viral disease affecting the nervous system', 'available', 1),
(3, 'Measles, Mumps, and Rubella (MMR)', 'Guards against measles, mumps, and rubella (German measles)', 'available', 1),
(4, 'Hepatitis B (HepB)', 'Protects against the hepatitis B virus, which can cause liver infections', 'available', 1),
(5, 'Haemophilus influenzae type b (Hib)', 'Prevents infections caused by Haemophilus influenzae type b, such as meningitis', 'available', 1),
(7, 'Rotavirus Vaccine', 'Guards against rotavirus, a leading cause of severe diarrhea in young children.', 'available', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`booking_id`),
  ADD UNIQUE KEY `parent_id` (`booking_id`),
  ADD KEY `child_id` (`child_id`),
  ADD KEY `hospital_id` (`hospital_id`),
  ADD KEY `vaccine_id` (`vaccine_id`),
  ADD KEY `parent_id_2` (`parent_id`);

--
-- Indexes for table `child_details`
--
ALTER TABLE `child_details`
  ADD PRIMARY KEY (`child_id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique` (`email`);

--
-- Indexes for table `hospital_details`
--
ALTER TABLE `hospital_details`
  ADD PRIMARY KEY (`hospital_id`);

--
-- Indexes for table `parent_details`
--
ALTER TABLE `parent_details`
  ADD PRIMARY KEY (`parent_id`),
  ADD UNIQUE KEY `unique` (`parent_username`);

--
-- Indexes for table `vaccination_schedule`
--
ALTER TABLE `vaccination_schedule`
  ADD PRIMARY KEY (`schedule_id`),
  ADD KEY `child_id` (`child_id`),
  ADD KEY `vaccine_id` (`vaccine_id`),
  ADD KEY `hospital_id` (`hospital_id`);

--
-- Indexes for table `vaccine_details`
--
ALTER TABLE `vaccine_details`
  ADD PRIMARY KEY (`vaccine_id`),
  ADD KEY `h_id` (`h_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `child_details`
--
ALTER TABLE `child_details`
  MODIFY `child_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospital_details`
--
ALTER TABLE `hospital_details`
  MODIFY `hospital_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `parent_details`
--
ALTER TABLE `parent_details`
  MODIFY `parent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `vaccine_details`
--
ALTER TABLE `vaccine_details`
  MODIFY `vaccine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD CONSTRAINT `booking_details_ibfk_1` FOREIGN KEY (`child_id`) REFERENCES `child_details` (`child_id`),
  ADD CONSTRAINT `booking_details_ibfk_2` FOREIGN KEY (`hospital_id`) REFERENCES `hospital_details` (`hospital_id`),
  ADD CONSTRAINT `booking_details_ibfk_3` FOREIGN KEY (`vaccine_id`) REFERENCES `vaccine_details` (`vaccine_id`),
  ADD CONSTRAINT `booking_details_ibfk_4` FOREIGN KEY (`parent_id`) REFERENCES `parent_details` (`parent_id`);

--
-- Constraints for table `child_details`
--
ALTER TABLE `child_details`
  ADD CONSTRAINT `child_details_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `parent_details` (`parent_id`);

--
-- Constraints for table `vaccination_schedule`
--
ALTER TABLE `vaccination_schedule`
  ADD CONSTRAINT `vaccination_schedule_ibfk_1` FOREIGN KEY (`child_id`) REFERENCES `child_details` (`child_id`),
  ADD CONSTRAINT `vaccination_schedule_ibfk_2` FOREIGN KEY (`vaccine_id`) REFERENCES `vaccine_details` (`vaccine_id`),
  ADD CONSTRAINT `vaccination_schedule_ibfk_3` FOREIGN KEY (`hospital_id`) REFERENCES `hospital_details` (`hospital_id`);

--
-- Constraints for table `vaccine_details`
--
ALTER TABLE `vaccine_details`
  ADD CONSTRAINT `vaccine_details_ibfk_1` FOREIGN KEY (`h_id`) REFERENCES `hospital_details` (`hospital_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
