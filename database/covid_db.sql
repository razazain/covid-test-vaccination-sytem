-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 12:04 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `admin_name` varchar(200) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `admin_number` varchar(15) NOT NULL,
  `admin_designation` varchar(200) NOT NULL,
  `admin_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `username`, `admin_name`, `admin_email`, `password`, `admin_number`, `admin_designation`, `admin_img`) VALUES
(1, 'adminzain', 'Muhammad Zain Raza', 'razazain@gmail.com', 'admin', '031258585', 'ADMIN', 'adminzain.jpg'),
(3, 'adminhammad', 'Muhammad Hammad', 'hk@admin.com', 'admin', '0312856854', 'ADMIN', 'image0.jpeg'),
(4, 'adminwajhi', 'Waji ul Hussain ', 'waji@admin.com', 'admin', '03158455001', 'Admin', 'picture.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `covid_test_report`
--

CREATE TABLE `covid_test_report` (
  `test_id` int(11) NOT NULL,
  `r_name` varchar(200) NOT NULL,
  `r_address` varchar(200) NOT NULL,
  `r_city` varchar(200) NOT NULL,
  `r_number` varchar(15) NOT NULL,
  `r_test` varchar(100) NOT NULL,
  `r_time` varchar(200) NOT NULL,
  `r_report` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covid_test_report`
--

INSERT INTO `covid_test_report` (`test_id`, `r_name`, `r_address`, `r_city`, `r_number`, `r_test`, `r_time`, `r_report`) VALUES
(8, 'Ahmed Ali', 'Naya Nazimabad', 'Karachi', '031569589', 'Antibody ', '2022-11-28T02:59', 'POSITIVE'),
(10, 'hammad kIng', 'bahria town', 'karachi', '03125694', 'CB-NAAT', '2022-11-25T02:26', 'NEGATIVE');

-- --------------------------------------------------------

--
-- Table structure for table `covid_test_request`
--

CREATE TABLE `covid_test_request` (
  `request_id` int(11) NOT NULL,
  `patient_name` varchar(200) NOT NULL,
  `patient_address` varchar(200) NOT NULL,
  `patient_city` varchar(200) NOT NULL,
  `patient_num` varchar(15) NOT NULL,
  `test_name` varchar(200) NOT NULL,
  `test_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `covid_test_timeslot`
--

CREATE TABLE `covid_test_timeslot` (
  `time_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `datetime` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covid_test_timeslot`
--

INSERT INTO `covid_test_timeslot` (`time_id`, `c_id`, `datetime`) VALUES
(1, 4, '2022-11-28T14:15'),
(2, 3, '2022-11-25T02:26'),
(3, 5, '2022-11-28T02:59'),
(4, 5, '2022-12-01T00:48');

-- --------------------------------------------------------

--
-- Table structure for table `covid_test_type`
--

CREATE TABLE `covid_test_type` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(200) NOT NULL,
  `c_available` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covid_test_type`
--

INSERT INTO `covid_test_type` (`c_id`, `c_name`, `c_available`) VALUES
(2, 'RT_PCR', 'AVAILABLE'),
(3, 'CB-NAAT', 'AVAILABLE'),
(4, 'ANTIGEN', 'AVAILABLE'),
(5, 'Antibody ', 'AVAILABLE'),
(6, 'covid test', 'NOT AVAILABLE');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_login`
--

CREATE TABLE `hospital_login` (
  `hospital_id` int(11) NOT NULL,
  `hospital_name` varchar(200) NOT NULL,
  `hospital_address` varchar(200) NOT NULL,
  `hospital_num` varchar(15) NOT NULL,
  `hospital_email` varchar(200) NOT NULL,
  `hospital_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital_login`
--

INSERT INTO `hospital_login` (`hospital_id`, `hospital_name`, `hospital_address`, `hospital_num`, `hospital_email`, `hospital_password`) VALUES
(1, 'HMZ Hospital', 'sd 2 Orangi Town Karachi', '03122694250', 'hmz@gmail.com', 'admin'),
(3, 'ABC Hospital', 'North Nazimabad', '222222', 'abc@admin.com', 'admin'),
(4, 'Agha Khan ', 'somewhere On Earth', '032158689', 'aghakhan@admin.com', 'admin'),
(5, 'SAIFEE HOSPITAL', 'North Naziimabad', '02158963', 'saifee@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `m_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `patient_email` varchar(200) NOT NULL,
  `dateposted` varchar(80) NOT NULL,
  `msg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`m_id`, `name`, `patient_email`, `dateposted`, `msg`) VALUES
(23, 'Muhammad Zain Raza', 'zainraza@gmail.com', '2022-11-23 03:42:52', 'project is continue'),
(24, 'Muhammad Zain Raza', 'zainraza@gmail.com', '2022-11-29 00:16:57', 'HI THIS IS COMMENT'),
(26, 'Muhammad Zain Raza', 'zainraza@gmail.com', '2022-11-29 01:26:11', 'HI THIS IS COMMENT'),
(27, 'Muhammad Zain Raza', 'zainraza@gmail.com', '2022-11-29 01:26:26', 'HI THIS IS COMMENT');

-- --------------------------------------------------------

--
-- Table structure for table `patient_detail`
--

CREATE TABLE `patient_detail` (
  `patient_id` int(11) NOT NULL,
  `patient_name` varchar(200) NOT NULL,
  `patient_address` varchar(200) NOT NULL,
  `patient_city` varchar(200) NOT NULL,
  `patient_num` varchar(15) NOT NULL,
  `patient_email` varchar(100) NOT NULL,
  `patient_age` int(50) NOT NULL,
  `patient_img` varchar(200) NOT NULL,
  `patient_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_detail`
--

INSERT INTO `patient_detail` (`patient_id`, `patient_name`, `patient_address`, `patient_city`, `patient_num`, `patient_email`, `patient_age`, `patient_img`, `patient_password`) VALUES
(7, 'Muhammad zain raza', 'New Town ', 'karachi', '031255895', 'zainraza@gmail.com', 21, 'images.png', 'zain123'),
(8, 'Hammad King', 'Bahria Town', 'karachi', '03152549', 'hammad@gmail.com', 19, 'image0.jpeg', 'hammad123');

-- --------------------------------------------------------

--
-- Table structure for table `vaccination_report`
--

CREATE TABLE `vaccination_report` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(200) NOT NULL,
  `t_address` varchar(200) NOT NULL,
  `t_city` varchar(200) NOT NULL,
  `t_number` varchar(200) NOT NULL,
  `t_test` varchar(200) NOT NULL,
  `t_time` varchar(200) NOT NULL,
  `t_report` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccination_report`
--

INSERT INTO `vaccination_report` (`t_id`, `t_name`, `t_address`, `t_city`, `t_number`, `t_test`, `t_time`, `t_report`) VALUES
(1, 'Muhammad Zain Raza', 'sd1 block 7', 'Multan', '03122694250', 'Moderna', '2022-10-31 12:00:00', 'VACCINATED'),
(2, 'ZULFIQAR ALI', 'house no90 ', 'karachi', '66666', 'Moderna', '2022-10-31 12:00:00', 'VACCCINATED'),
(3, 'OWAIS', 'North Nazimabad', 'karachi', '555888999', 'MODERNA', '2022-11-19 21:59:35', 'VACCCINATED'),
(4, 'Ahmed ALi', 'Naya Nazimabad', 'Karachi', '03156985', 'XEBRA', '2022-11-28T02:58', 'VACCINATED'),
(6, 'Raza Iqbal', 'sd1 block 7', 'karachi', '222222', 'Moderna', '2022-10-31 12:00:00', 'VACCINATED'),
(7, 'Hammad King', 'Bahria Town', 'Karachi', '03125892', 'Pfizer/BioNTech', '2022-12-01T12:45', 'VACCINATED');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine_details`
--

CREATE TABLE `vaccine_details` (
  `vaccine_id` int(11) NOT NULL,
  `vaccine_name` varchar(200) NOT NULL,
  `vaccine_availabilty` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccine_details`
--

INSERT INTO `vaccine_details` (`vaccine_id`, `vaccine_name`, `vaccine_availabilty`) VALUES
(2, 'Sinopharm', 'AVAILABLE'),
(3, 'Sputnik V', 'AVAILABLE'),
(4, 'Moderna', 'AVAILABLE'),
(5, 'Sinovac', 'AVAILABLE'),
(6, 'Pfizer/BioNTech', 'NOT AVAILABLE'),
(7, 'AstraZeneca', 'AVAILABLE'),
(8, 'Paxlovid', 'NOT AVAILABLE'),
(9, 'XEBRA', 'NOT AVAILABLE'),
(10, 'GTR', 'AVAILABLE');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine_request`
--

CREATE TABLE `vaccine_request` (
  `request_id` int(11) NOT NULL,
  `patient_name` varchar(200) NOT NULL,
  `patient_address` varchar(200) NOT NULL,
  `patient_city` varchar(200) NOT NULL,
  `patient_num` varchar(15) NOT NULL,
  `vaccine_name` varchar(200) NOT NULL,
  `vaccine_time_slot` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccine_request`
--

INSERT INTO `vaccine_request` (`request_id`, `patient_name`, `patient_address`, `patient_city`, `patient_num`, `vaccine_name`, `vaccine_time_slot`) VALUES
(25, 'ALI ahmed', 'North Nazimabad', 'Peshawar', '0312589', 'Sinopharm', '2022-11-20 12:50:33');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine_timeslot`
--

CREATE TABLE `vaccine_timeslot` (
  `vaccine_time_id` int(11) NOT NULL,
  `datetime` varchar(200) NOT NULL,
  `vaccine_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccine_timeslot`
--

INSERT INTO `vaccine_timeslot` (`vaccine_time_id`, `datetime`, `vaccine_id`) VALUES
(1, '2022-11-30T19:55', 6),
(3, '2022-11-26T02:24', 4),
(4, '2022-11-28T02:25', 7),
(5, '2022-11-28T02:58', 9),
(6, '2022-12-01T12:45', 6),
(7, '2022-11-30T16:50', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `covid_test_report`
--
ALTER TABLE `covid_test_report`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `covid_test_request`
--
ALTER TABLE `covid_test_request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `covid_test_timeslot`
--
ALTER TABLE `covid_test_timeslot`
  ADD PRIMARY KEY (`time_id`),
  ADD KEY `covid_fk` (`c_id`);

--
-- Indexes for table `covid_test_type`
--
ALTER TABLE `covid_test_type`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `hospital_login`
--
ALTER TABLE `hospital_login`
  ADD PRIMARY KEY (`hospital_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `patient_detail`
--
ALTER TABLE `patient_detail`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `vaccination_report`
--
ALTER TABLE `vaccination_report`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `vaccine_details`
--
ALTER TABLE `vaccine_details`
  ADD PRIMARY KEY (`vaccine_id`);

--
-- Indexes for table `vaccine_request`
--
ALTER TABLE `vaccine_request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `vaccine_timeslot`
--
ALTER TABLE `vaccine_timeslot`
  ADD PRIMARY KEY (`vaccine_time_id`),
  ADD KEY `vacc_fk` (`vaccine_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `covid_test_report`
--
ALTER TABLE `covid_test_report`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `covid_test_request`
--
ALTER TABLE `covid_test_request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `covid_test_timeslot`
--
ALTER TABLE `covid_test_timeslot`
  MODIFY `time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `covid_test_type`
--
ALTER TABLE `covid_test_type`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hospital_login`
--
ALTER TABLE `hospital_login`
  MODIFY `hospital_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `patient_detail`
--
ALTER TABLE `patient_detail`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vaccination_report`
--
ALTER TABLE `vaccination_report`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vaccine_details`
--
ALTER TABLE `vaccine_details`
  MODIFY `vaccine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vaccine_request`
--
ALTER TABLE `vaccine_request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `vaccine_timeslot`
--
ALTER TABLE `vaccine_timeslot`
  MODIFY `vaccine_time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `covid_test_timeslot`
--
ALTER TABLE `covid_test_timeslot`
  ADD CONSTRAINT `covid_fk` FOREIGN KEY (`c_id`) REFERENCES `covid_test_type` (`c_id`);

--
-- Constraints for table `vaccine_timeslot`
--
ALTER TABLE `vaccine_timeslot`
  ADD CONSTRAINT `vacc_fk` FOREIGN KEY (`vaccine_id`) REFERENCES `vaccine_details` (`vaccine_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
