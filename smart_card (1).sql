-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2022 at 02:22 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart_card`
--

-- --------------------------------------------------------

--
-- Table structure for table `apointmenttb`
--

CREATE TABLE `apointmenttb` (
  `first_name` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `mesage` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apointmenttb`
--

INSERT INTO `apointmenttb` (`first_name`, `lastname`, `username`, `mesage`, `phone`, `email`, `pass`, `date`) VALUES
('richard', 'ishimwe', '22101121', 'I WANT TO MEET WITH ', '07804172', 'ishim', 'RI12CH34', '2022-08-03 12:18:27.831811'),
('richard', 'ishimwe', '22101121', 'I WANT TO MEET WITH ', '07804172', 'ishim', 'RI12CH34', '2022-08-03 12:18:27.831811'),
('richard', 'ishimwe', '22101121', 'I WANT TO MEET WITH ', '07804172', 'ishim', 'RI12CH34', '2022-08-03 12:18:27.831811'),
('MBABAZI', 'DIANE', '222222', 'I WANT TO MEET ENGLISH LECTURE', '07803567', 'MBABA', 'diane', '2022-08-03 12:18:27.831811'),
('kananura', 'abdoul', '4445533', 'metting with head of department', '07804179', 'abdoul@.com', '34545t', '2022-08-03 12:18:27.831811');

-- --------------------------------------------------------

--
-- Table structure for table `login_form`
--

CREATE TABLE `login_form` (
  `email` varchar(11) NOT NULL,
  `pass` varchar(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_form`
--

INSERT INTO `login_form` (`email`, `pass`, `username`, `date`) VALUES
('32445', '344345', '221076', '2022-08-03 12:18:12.011750'),
('32445', '344345', '221076', '2022-08-03 12:18:12.011750'),
('ishimwerich', 'RICH', '345343', '2022-08-03 12:18:12.011750'),
('mbabazi@gma', '6777778', '344', '2022-08-03 12:18:12.011750');

-- --------------------------------------------------------

--
-- Table structure for table `requesttb1`
--

CREATE TABLE `requesttb1` (
  `reg` int(12) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `second_name` varchar(20) NOT NULL,
  `gender` char(10) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `department` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requesttb1`
--

INSERT INTO `requesttb1` (`reg`, `first_name`, `second_name`, `gender`, `phone`, `email`, `department`, `password`, `date`) VALUES
(2233443, 'richard', 'ishimwe', '', '07804172', 'ishimwerichard26@gmail.com', 'engineer', '3333333', '2022-08-03 12:16:30.110162'),
(2233443, 'richard', 'ishimwe', '', '07804172', 'ishimwerichard26@gmail.com', 'engineer', '3333333', '2022-08-03 12:19:01.052897'),
(221011590, 'richard', 'ishimwe', '', '07804172', 'ishimwerichard26@gmail.com', 'engineer', '235', '2022-08-03 12:19:20.838600');

-- --------------------------------------------------------

--
-- Table structure for table `unregister`
--

CREATE TABLE `unregister` (
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `reg` int(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unregister`
--

INSERT INTO `unregister` (`first_name`, `last_name`, `email`, `reg`, `password`) VALUES
('richard', 'ishimwe', 'ishimwerichard26@gma', 0, 'fds');

-- --------------------------------------------------------

--
-- Table structure for table `usertb`
--

CREATE TABLE `usertb` (
  `reg` int(100) NOT NULL,
  `full_names` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(115) NOT NULL,
  `pass` int(11) NOT NULL,
  `department` varchar(11) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `phone` varchar(112) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usertb`
--
ALTER TABLE `usertb`
  ADD PRIMARY KEY (`reg`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
