-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2021 at 10:27 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `documentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `username` varchar(12) NOT NULL,
  `online` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `password`, `username`, `online`) VALUES
(14, '21232f297a57a5a743894a0e4a801fc3', 'admin', 0),
(15, 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 0);

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `id` int(11) NOT NULL,
  `field1` varchar(254) CHARACTER SET latin1 NOT NULL,
  `field2` varchar(254) CHARACTER SET latin1 NOT NULL,
  `field3` varchar(254) CHARACTER SET latin1 NOT NULL,
  `field4` varchar(254) CHARACTER SET latin1 NOT NULL,
  `field5` varchar(254) CHARACTER SET latin1 NOT NULL,
  `field6` varchar(254) CHARACTER SET latin1 NOT NULL,
  `field7` varchar(254) CHARACTER SET latin1 NOT NULL,
  `field8` varchar(254) CHARACTER SET latin1 NOT NULL,
  `field9` varchar(254) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`id`, `field1`, `field2`, `field3`, `field4`, `field5`, `field6`, `field7`, `field8`, `field9`) VALUES
(1, 'Contract', 'Section', 'Subject', 'Description', 'Ref.No', 'Company', 'Employee', 'Date', '');

-- --------------------------------------------------------

--
-- Table structure for table `table2`
--

CREATE TABLE `table2` (
  `id` int(11) NOT NULL,
  `field1` varchar(254) NOT NULL,
  `field2` varchar(254) NOT NULL,
  `field3` varchar(254) NOT NULL,
  `field4` varchar(254) NOT NULL,
  `field5` varchar(254) NOT NULL,
  `field6` varchar(254) NOT NULL,
  `field7` varchar(254) NOT NULL,
  `field8` varchar(254) NOT NULL,
  `field9` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table2`
--

INSERT INTO `table2` (`id`, `field1`, `field2`, `field3`, `field4`, `field5`, `field6`, `field7`, `field8`, `field9`) VALUES
(53, '101-2021', 'external', 'New File', 'This is my new file', '1012021', 'ITSOURCECODE', 'Jude', '2021-03-22', 'New Files.txt'),
(54, '101-2021', 'external', 'New FileS', 'L;KK;L', '3232', 'ITSOURCECODE', 'Jude', '2021-03-22', 'New Files.txt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `password` (`password`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table2`
--
ALTER TABLE `table2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `table1`
--
ALTER TABLE `table1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `table2`
--
ALTER TABLE `table2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
