-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2022 at 06:39 PM
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
-- Database: `adb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `message`) VALUES
(1, 'krupali@gmail.com', 'plz resolve my login issue.'),
(2, 'd@gmail.com', 'sfdh');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `mobile` int(10) NOT NULL,
  `dob` date NOT NULL,
  `hadd` varchar(20) NOT NULL,
  `oadd` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`id`, `fname`, `lname`, `mobile`, `dob`, `hadd`, `oadd`) VALUES
(1, 'abc', 'xyz', 1234567890, '2022-04-12', 'edwfs', 'sc'),
(2, 'Div', 'Parmar', 1234567890, '2022-04-07', 'asb', 'asb'),
(3, 'Div', 'Parmar', 1234567890, '2022-04-06', 'skkm', 'wsnk'),
(4, 'q', 's', 1234567890, '2022-04-12', 'addf', 'sdaddf');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(10) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `hadd` varchar(50) NOT NULL,
  `oadd` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `fname`, `lname`, `email`, `mobile`, `gender`, `dob`, `hadd`, `oadd`, `city`, `state`) VALUES
(1, 'krupali', 'khunt', 'krupali@gmail.com', 1234567890, 'female', '0000-00-00', 'abc', 'abc', 'abc', 'abc'),
(2, 'Div', 'Parmar', 'd@gmail.com', 1234567890, 'female', '2022-04-28', 'abc', '', 'adssf', 'sdadf'),
(3, 'Div', 'Parmar', 'd@gmail.com', 1234567890, 'female', '2022-04-07', 'zxscxz', '', 'sssc', 'scxc'),
(4, 'Krupa', 'khunt', 'k@gmail.com', 1234567890, 'female', '2022-03-28', 'sasd', 'sdasd', 'scs', 'scc'),
(5, '', '', '', 0, '', '0000-00-00', '', '', '', ''),
(6, '', '', '', 0, '', '0000-00-00', '', '', '', ''),
(7, '', 'nbjhkh', 'hkhikh', 2147483647, '', '2022-04-05', 'dcv', 'nff', '', ''),
(8, '', '', '', 0, '', '0000-00-00', '', '', '', ''),
(9, '', 'a', 'b', 987654321, '', '2022-03-04', 'fgfhj', 'wrdthfy', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `cpwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pwd`, `cpwd`) VALUES
(1, 'krupali', 'krupali@gmail.com', 'Krupali', 'Krupali'),
(2, 'krupali', '', '', ''),
(3, 'krupali', 'krupali@gmail.com', 'Krupali', 'Krupali'),
(4, '', '', '', ''),
(5, 'kp', 'kp@gmail.com', 'kp1234', 'kp1234'),
(6, 'vensi', 'v@gmail.com', 'abcdefghi', 'abcdefghi'),
(7, 'vensi', 'v@gmail.com', 'abcdefghi', 'abcdefghi'),
(8, '', '', '', ''),
(9, '', '', '', ''),
(10, '', 'dfdf', '234567', '234567'),
(11, 'eddfdfdf', 'wdsd', 'wdd', 'wded'),
(12, '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
