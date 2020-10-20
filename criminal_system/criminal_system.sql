-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 20, 2020 at 04:33 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `criminal_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `against`
--

CREATE TABLE `against` (
  `Fir_no` int(11) NOT NULL,
  `Prisoner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fir`
--

CREATE TABLE `fir` (
  `Fir_no` int(11) NOT NULL,
  `Description` longtext DEFAULT NULL,
  `Fir_date` date DEFAULT NULL,
  `Case_Type` varchar(25) DEFAULT NULL,
  `Officer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jailor`
--

CREATE TABLE `jailor` (
  `Jailor_id` int(11) NOT NULL,
  `Jailor_uname` tinytext NOT NULL,
  `Jailor_pwd` longtext NOT NULL,
  `First_name` varchar(25) DEFAULT NULL,
  `Last_name` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jailor`
--

INSERT INTO `jailor` (`Jailor_id`, `Jailor_uname`, `Jailor_pwd`, `First_name`, `Last_name`) VALUES
(1, 'jailor1', 'jailor1', 'Kamd', 'Jind');

-- --------------------------------------------------------

--
-- Table structure for table `jailor_phone`
--

CREATE TABLE `jailor_phone` (
  `Jailor_phone` int(10) NOT NULL,
  `Jailor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `Officer_id` int(11) NOT NULL,
  `Officer_uname` tinytext NOT NULL,
  `Officer_pwd` longtext NOT NULL,
  `First_name` varchar(25) DEFAULT NULL,
  `Last_name` varchar(25) DEFAULT NULL,
  `Title` varchar(20) DEFAULT NULL,
  `Date_of_birth` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`Officer_id`, `Officer_uname`, `Officer_pwd`, `First_name`, `Last_name`, `Title`, `Date_of_birth`) VALUES
(1, 'user1', 'user1', 'Raj', 'Maha', 'captain', '1990-01-17');

-- --------------------------------------------------------

--
-- Table structure for table `officer_phone`
--

CREATE TABLE `officer_phone` (
  `oficer_phone` int(10) NOT NULL,
  `officer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prisoner`
--

CREATE TABLE `prisoner` (
  `Prisoner_id` int(11) NOT NULL,
  `First_name` varchar(25) DEFAULT NULL,
  `Last_name` varchar(25) DEFAULT NULL,
  `Date_in` date DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Height` int(3) DEFAULT NULL,
  `Date_out` date DEFAULT NULL,
  `Address` longtext DEFAULT NULL,
  `Section_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `Section_id` int(3) NOT NULL,
  `Section_name` varchar(25) DEFAULT NULL,
  `Jailor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `Visitor_id` int(4) NOT NULL,
  `First_name` varchar(25) DEFAULT NULL,
  `Last_name` varchar(25) DEFAULT NULL,
  `Visit_date` date DEFAULT NULL,
  `Prisoner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `against`
--
ALTER TABLE `against`
  ADD KEY `fk_c1` (`Fir_no`),
  ADD KEY `fk_c2` (`Prisoner_id`);

--
-- Indexes for table `fir`
--
ALTER TABLE `fir`
  ADD PRIMARY KEY (`Fir_no`),
  ADD KEY `fk_oid` (`Officer_id`);

--
-- Indexes for table `jailor`
--
ALTER TABLE `jailor`
  ADD PRIMARY KEY (`Jailor_id`);

--
-- Indexes for table `jailor_phone`
--
ALTER TABLE `jailor_phone`
  ADD KEY `fk_c4` (`Jailor_id`);

--
-- Indexes for table `officer`
--
ALTER TABLE `officer`
  ADD PRIMARY KEY (`Officer_id`);

--
-- Indexes for table `officer_phone`
--
ALTER TABLE `officer_phone`
  ADD KEY `fk_c3` (`officer_id`);

--
-- Indexes for table `prisoner`
--
ALTER TABLE `prisoner`
  ADD PRIMARY KEY (`Prisoner_id`),
  ADD KEY `fk_secid` (`Section_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`Section_id`),
  ADD KEY `fk_jid` (`Jailor_id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`Visitor_id`),
  ADD KEY `fk_pid` (`Prisoner_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jailor`
--
ALTER TABLE `jailor`
  MODIFY `Jailor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `officer`
--
ALTER TABLE `officer`
  MODIFY `Officer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prisoner`
--
ALTER TABLE `prisoner`
  MODIFY `Prisoner_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `Section_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `Visitor_id` int(4) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `against`
--
ALTER TABLE `against`
  ADD CONSTRAINT `fk_c1` FOREIGN KEY (`Fir_no`) REFERENCES `fir` (`Fir_no`),
  ADD CONSTRAINT `fk_c2` FOREIGN KEY (`Prisoner_id`) REFERENCES `prisoner` (`Prisoner_id`);

--
-- Constraints for table `fir`
--
ALTER TABLE `fir`
  ADD CONSTRAINT `fk_oid` FOREIGN KEY (`Officer_id`) REFERENCES `officer` (`Officer_id`);

--
-- Constraints for table `jailor_phone`
--
ALTER TABLE `jailor_phone`
  ADD CONSTRAINT `fk_c4` FOREIGN KEY (`Jailor_id`) REFERENCES `jailor` (`Jailor_id`);

--
-- Constraints for table `officer_phone`
--
ALTER TABLE `officer_phone`
  ADD CONSTRAINT `fk_c3` FOREIGN KEY (`officer_id`) REFERENCES `officer` (`Officer_id`);

--
-- Constraints for table `prisoner`
--
ALTER TABLE `prisoner`
  ADD CONSTRAINT `fk_secid` FOREIGN KEY (`Section_id`) REFERENCES `section` (`Section_id`);

--
-- Constraints for table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `fk_jid` FOREIGN KEY (`Jailor_id`) REFERENCES `jailor` (`Jailor_id`);

--
-- Constraints for table `visitor`
--
ALTER TABLE `visitor`
  ADD CONSTRAINT `fk_pid` FOREIGN KEY (`Prisoner_id`) REFERENCES `prisoner` (`Prisoner_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
