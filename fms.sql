-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2018 at 04:17 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fms`
--

-- --------------------------------------------------------

--
-- Table structure for table `brainvita`
--

CREATE TABLE `brainvita` (
  `id` int(10) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `collagename` varchar(255) NOT NULL,
  `year` varchar(20) NOT NULL,
  `contactnumber` bigint(15) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `fees` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brainvita`
--

INSERT INTO `brainvita` (`id`, `name`, `collagename`, `year`, `contactnumber`, `email_id`, `fees`) VALUES
(NULL, 'Siddhant Sontakke', 'BDCE', '4th year', 9284316302, 'siddhantsontakke1995@gmail.com', 50),
(NULL, 'Mayur', 'BDCE', '3rd year', 7873643, 'mayur@gmail.com', 50);

-- --------------------------------------------------------

--
-- Table structure for table `campusdrive`
--

CREATE TABLE `campusdrive` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `collagename` varchar(255) NOT NULL,
  `year` varchar(20) NOT NULL,
  `contactnumber` bigint(15) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `fees` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campusdrive`
--

INSERT INTO `campusdrive` (`id`, `name`, `collagename`, `year`, `contactnumber`, `email_id`, `fees`) VALUES
(1, 'Siddhant Sontakke', 'BDCE', '4th year', 8623046674, 'siddhantsontakke1995@gmail.com', 50),
(2, 'Aksha Khopde', 'BDCE', '4th year', 8899656520, 'akshakhopde@gmail.com', 50);

-- --------------------------------------------------------

--
-- Table structure for table `codechef`
--

CREATE TABLE `codechef` (
  `id` int(10) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `collagename` varchar(255) NOT NULL,
  `year` varchar(20) NOT NULL,
  `contactnumber` bigint(15) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `fees` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codechef`
--

INSERT INTO `codechef` (`id`, `name`, `collagename`, `year`, `contactnumber`, `email_id`, `fees`) VALUES
(NULL, 'Siddhant Sontakke', 'BDCE', '4th year', 9284316302, 'siddhantsontakke1995@gmail.com', 50),
(NULL, 'Mayur Waghmare', 'BDCE', '3rd year', 9764859504, 'mayurwaghmare@gmail.com', 50),
(NULL, 'Tabish Sayyed', 'BDCE', '4th year', 9988776655, 'tabishsayyad@gmail.com', 50),
(NULL, 'Shubham Saral', 'BDCE', '4th year', 7789889090, 'shubham.saral@gmail.com', 50);

-- --------------------------------------------------------

--
-- Table structure for table `darkcode`
--

CREATE TABLE `darkcode` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `collagename` varchar(255) NOT NULL,
  `year` varchar(20) NOT NULL,
  `contactnumber` bigint(20) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `fees` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `darkcode`
--

INSERT INTO `darkcode` (`id`, `name`, `collagename`, `year`, `contactnumber`, `email_id`, `fees`) VALUES
(1, 'Siddhant Sontakke', 'BDCE', '4th year', 9284316302, 'siddhantsontakke1995@gmail.com', 50),
(2, 'Rahul Sawarkar', 'BDCE', '4th year', 7789697789, 'rahulsawarkar@gmail.com', 50),
(3, 'Akshay Supare', 'BDCE', '3rd year', 9923456789, 'akshay@gmail.com', 50),
(4, 'Dixit Sontakke', 'BDCE', '4th year', 8623046724, 'mayursontakke7@gmail.com', 50),
(5, 'Akshay Shrivastav', 'Shipna Amrawati', '4th year', 9765238879, 'akshay.shrivastav@gmail.com', 50),
(6, 'Akshay Shrivastav', 'Shipna Amrawati', '4th year', 9765238879, 'akshay.shrivastav@gmail.com', 50),
(7, 'Anurag Waghmare', 'DMIETR', '3rd year', 9576896754, 'anurag@gmail.com', 50),
(11, 'asda', 'agsfd', '2nd Year', 747246786, 'sada@g.com', 50),
(10, 'adsa', 'asdad', '2nd Year', 736427683, 'ada@gmail.com', 50),
(12, 'asda', 'agsfd', '2nd Year', 747246786, 'sada@g.com', 50),
(13, 'asda', 'agsfd', '2nd Year', 747246786, 'sada@g.com', 50),
(14, 'asda', 'agsfd', '2nd Year', 747246786, 'sada@g.com', 50),
(15, 'adad', 'dahsdj', '2nd Year', 324273, 'gdsahg@ga.com', 50),
(16, 'asdad', 'adga', '3rd year', 43653, 'asdah@gmail.com', 50),
(17, 'Pratiksha Yelane', 'BDCE', '4th year', 8888192199, 'pratikshayelne21@gmail.com', 50),
(18, 'Ashwini Wagh', 'BDCE', '4th year', 7654893223, 'ashwiniwagh@gmail.com', 50),
(19, 'Aditya Vyas', 'BDCE', '4th year', 8786454644, 'adityavyas@gmail.com', 50),
(20, 'Siddhant Sontakke', 'BDCE', '4th year', 9284316302, 'siddhantsontakke1995@gmail.com', 50),
(21, 'Ishan Ladole', 'BDCE', '4th year', 999999999, 'ishanladole@gmail.com', 50),
(22, 'Pratiksha', 'BDCE', '4th year', 8888192199, 'pratiksha@gmail.com', 50),
(23, 'Siddhant', 'BDCE', '4th year', 7777777, 'siddhant@gmail.com', 50),
(24, 'Siddhant', 'BDCE', '1st Year', 777, 'Sidda@gmail.com', 50),
(25, 'asda', 'dada', '3rd year', 3254, 'sadsa@gmail.cm', 50),
(26, 'asda', 'ada', '3rd year', 324, 'asd@gmail.com', 50),
(27, 'adaa', 'abda', '3rd year', 56, 'asdas@gmail.com', 50),
(28, 'Siddhant', 'BDCE', '4th year', 2342, 'adad#@gmail.com', 50),
(29, 'Siddhant', 'BDCE', '4th year', 8867676767, 'siddhant@gmail.com', 50),
(30, 'Mayur', 'BDCE', '3rd year', 6666, 'siddhant@gmail.com', 50),
(31, 'siddhant', 'bdce', '3rd year', 7677, 'mayur@gm.com', 50),
(32, 'zkajh', 'jhdajh', '3rd year', 674362, 'ashdga@gmail.com', 50),
(33, 'Siddhant Sontakke', 'BDCE', '4th year', 862304674, 'siddhantsontakke1995@gmail.com', 50);

-- --------------------------------------------------------

--
-- Table structure for table `draftrix`
--

CREATE TABLE `draftrix` (
  `id` int(10) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `collagename` varchar(255) NOT NULL,
  `year` varchar(20) NOT NULL,
  `contactnumber` bigint(15) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `fees` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `draftrix`
--

INSERT INTO `draftrix` (`id`, `name`, `collagename`, `year`, `contactnumber`, `email_id`, `fees`) VALUES
(NULL, 'Sheena Shaha', 'BDCE', '4th year', 9988753456, 'sheenashaha1@gmail.com', 100);

-- --------------------------------------------------------

--
-- Table structure for table `ignite`
--

CREATE TABLE `ignite` (
  `id` int(10) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `collagename` varchar(255) NOT NULL,
  `year` varchar(20) NOT NULL,
  `contactnumber` bigint(15) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `fees` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keatso`
--

CREATE TABLE `keatso` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `collagename` varchar(255) NOT NULL,
  `year` varchar(20) NOT NULL,
  `contactnumber` bigint(15) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `fees` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keatso`
--

INSERT INTO `keatso` (`id`, `name`, `collagename`, `year`, `contactnumber`, `email_id`, `fees`) VALUES
(1, 'Siddhant Sontakke', 'BDCE', '4th year', 9284316302, 'siddhantsontakke1995@gmail.com', 100),
(2, 'Mayur Waghmare', 'BDCE', '3rd year', 7788996655, 'mayurwaghmare@gmail.com', 100);

-- --------------------------------------------------------

--
-- Table structure for table `langamming`
--

CREATE TABLE `langamming` (
  `id` int(10) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `collagename` varchar(255) NOT NULL,
  `year` varchar(20) NOT NULL,
  `contactnumber` bigint(15) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `fees` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `langamming`
--

INSERT INTO `langamming` (`id`, `name`, `collagename`, `year`, `contactnumber`, `email_id`, `fees`) VALUES
(NULL, 'Mayur Waghmare', 'BDCE', '3rd year', 889894442, 'mayurwahgmare@gmail.com', 50);

-- --------------------------------------------------------

--
-- Table structure for table `nirman`
--

CREATE TABLE `nirman` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `collagename` varchar(255) NOT NULL,
  `year` varchar(20) NOT NULL,
  `contactnumber` bigint(15) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `fees` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sr` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sr`, `username`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `webatrix`
--

CREATE TABLE `webatrix` (
  `id` int(10) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `collagename` varchar(255) NOT NULL,
  `year` varchar(20) NOT NULL,
  `contactnumber` bigint(15) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `fees` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webatrix`
--

INSERT INTO `webatrix` (`id`, `name`, `collagename`, `year`, `contactnumber`, `email_id`, `fees`) VALUES
(NULL, 'Djgsad', 'asdajdg', '4th year', 326476, 'asdjkha@gmail.com', 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campusdrive`
--
ALTER TABLE `campusdrive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `darkcode`
--
ALTER TABLE `darkcode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keatso`
--
ALTER TABLE `keatso`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nirman`
--
ALTER TABLE `nirman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`sr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campusdrive`
--
ALTER TABLE `campusdrive`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `darkcode`
--
ALTER TABLE `darkcode`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `keatso`
--
ALTER TABLE `keatso`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nirman`
--
ALTER TABLE `nirman`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `sr` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
