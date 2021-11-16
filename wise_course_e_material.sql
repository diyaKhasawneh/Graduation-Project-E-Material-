-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 12:44 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wise course e material`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(70) NOT NULL,
  `first` varchar(40) NOT NULL,
  `last` varchar(40) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `pic` varchar(40) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first`, `last`, `username`, `password`, `email`, `contact`, `pic`, `status`) VALUES
(1, 'feras', 'mahfouz', 'ferasmahfouz', '777', 'ferasmahfouz61@gmail.com', '', 'fals2.png', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(60) NOT NULL,
  `username` varchar(40) NOT NULL,
  `comment` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `username`, `comment`) VALUES
(2, 'Admin', 'Hi'),
(3, 'AliAhmad', 'Hi'),
(4, 'AliAhmad', 'Hello'),
(5, 'Admin', 'CAN I help you '),
(6, 'AliAhmad', 'No Thanks');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `bid` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `doctor` varchar(40) NOT NULL,
  `department` varchar(40) NOT NULL,
  `Major` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`bid`, `name`, `doctor`, `department`, `Major`) VALUES
(1, 'modeling', 'Ali naimat', 'IT', 'software'),
(4, 'Cryptography and   Computer Security', 'Waleed Amin', 'IT', 'All'),
(5, 'discrete', 'Waleed Amin', 'IT', 'ALL'),
(6, 'Software engineering', 'Moath Tarawneh', 'IT', 'software'),
(7, 'walled', 'Waleed Amin', 'شريعة ', 'حقوق'),
(21, 'Network management', 'sami smadi', 'it', 'cs'),
(22, 'rquerment', 'Moath Tarawneh', 'IT', 'software'),
(24, 'wireless computer networks', 'Mohammed Abdul Latif Al Shalabi', 'IT', 'Networks'),
(25, 'Networking and Security', 'sami smadi', 'IT', 'cyber security'),
(26, 'Modeling', 'issa atoum', 'IT', 'software'),
(27, 'Software Testing and Quality Assurance', 'issa atoum', 'IT', 'software'),
(70, 'book4', 'ali', 'it', 'computer cience');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `first` varchar(40) NOT NULL,
  `last` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` varchar(40) NOT NULL,
  `pic` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`first`, `last`, `username`, `password`, `email`, `contact`, `pic`) VALUES
('Ali', 'Ahmad', 'AliAhmad', '123', 'ali@gmail.com', '', '4mwddytfrZ4fHJSmBqdsTkZn.jpeg'),
('diya', 'dada', 'alii', '123', 'diya@gg.com', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`bid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `bid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
