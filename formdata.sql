-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2018 at 07:18 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datacollected`
--

-- --------------------------------------------------------

--
-- Table structure for table `formdata`
--

CREATE TABLE `formdata` (
  `gender` varchar(255) NOT NULL,
  `Age` varchar(45) NOT NULL,
  `period` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `living` varchar(255) NOT NULL,
  `marriage` varchar(255) NOT NULL,
  `residence` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `ethnicity` varchar(255) NOT NULL,
  `otherlanguage` varchar(255) NOT NULL,
  `health` varchar(255) NOT NULL,
  `household` varchar(255) NOT NULL,
  `rent` varchar(255) NOT NULL,
  `rooms` int(55) NOT NULL,
  `cars` varchar(255) NOT NULL,
  `computer` varchar(255) NOT NULL,
  `employment` varchar(255) NOT NULL,
  `income` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formdata`
--

INSERT INTO `formdata` (`gender`, `Age`, `period`, `education`, `living`, `marriage`, `residence`, `nationality`, `religion`, `ethnicity`, `otherlanguage`, `health`, `household`, `rent`, `rooms`, `cars`, `computer`, `employment`, `income`) VALUES
('male', '21', '5 years', 'Phd', 'nairobi', 'yes', 'Kiambu', 'Kenyan', 'Budhist', 'Taita', 'German', 'perfect', 'owned', '4000', 13, '8', '9', 'employer', '60000'),
('male', '35', '12', 'Masters', 'Nairobi', 'yes', 'Nairobi', 'kenyan', 'Hindu', 'Indian', 'Hungarian', 'perfect', 'owned', '800', 11, '6', '2', 'employer', '900000'),
('Female', '56', '9', 'Degree', 'good', 'single', 'Nairobi', 'Ethiopian', 'Islamic', 'Arab', 'Yes', 'Excellent', 'own', '600', 6, '3', 'yes', 'employed', '600000'),
('Male', '13', '9 years', 'Degree', 'average', 'single', 'Nakuru', 'Afghan', 'Arab', 'Arab', 'Yes, Arabic', 'good', 'owned', 'none', 3, '1', 'no', 'employed', '10000'),
('Male', '78', '10 years', 'Masters', 'Perfect', 'married', 'Kiambu', 'Kenyan', 'Christian', 'Luo', 'NO', 'Excellent', 'rent', '60000', 5, '3', 'yes', 'employed', '700000'),
('Female', '18', '2 years', 'Masters', 'good', 'married', 'Kericho', 'Ugandan', 'Pagan', 'Idakho', 'yes, Somali', 'average', 'rent', '7000', 2, '0', 'no', 'unemployed', 'none'),
('Female', '34', '2 years', 'Masters', 'good', 'married', 'Bungoma', 'Kenyan', 'Christian', 'Kamba', 'Yes, Spanish', 'Excellent', 'own', 'N/A', 3, '1', 'no', 'employed', '10000'),
('Male', '34', '2 years', 'Diploma', 'average', 'married', 'Nairobi', 'Somali', 'Islamic', 'Arab', 'Yes, Arabic', 'Excellent', 'own', 'none', 6, '3', 'no', 'unemployed', 'none');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
