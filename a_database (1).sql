-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2018 at 07:09 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'bharat', 'kumar'),
(2, 'adarsh', 'shah');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `id` int(11) NOT NULL,
  `clg_id` varchar(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `branches` varchar(30) NOT NULL,
  `city` varchar(15) NOT NULL,
  `manager` varchar(15) NOT NULL,
  `fees` bigint(10) NOT NULL,
  `seats` bigint(10) NOT NULL,
  `placement_record` varchar(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `status` int(1) NOT NULL,
  `clgimg` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id`, `clg_id`, `name`, `branches`, `city`, `manager`, `fees`, `seats`, `placement_record`, `address`, `contact`, `status`, `clgimg`) VALUES
(5, '8745', 'vit', 'cs,ec,ex,it', 'chennai', 'vivek', 1200000, 8000, '90%', 'chennai', 9436334342, 1, '99665.jpg'),
(7, '9451', 'galgotias', 'cs,ex', 'delhi', 'amit', 600000, 7000, '74%', 'noida', 746576446, 1, '14147.jpg'),
(8, '8567', 'bit mesra', 'ex,cs,ec,me', 'ranchi', 'bharat', 800000, 6500, '98%', 'mesra', 96462465, 1, '2249.jpg'),
(9, '6584', 'uit rgpv', 'cs,ec,ex,me,ce', 'bhopal', 'adarsh', 400000, 50000, '70%', 'asaram', 7551458, 1, '76211.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `contact` bigint(15) NOT NULL,
  `city` varchar(15) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id`, `name`, `password`, `contact`, `city`, `status`) VALUES
(10, 'bharat', 'kumar', 8602510486, 'ranchi', 1),
(11, 'adarsh', 'shah', 98548616565, 'bhopal', 1),
(12, 'amit', 'singh', 99713468, 'delhi', 1),
(13, 'vivek', 'kumar', 8754964856, 'chennai', 1),
(14, 'sachin', '12345', 9587665, 'mumbai', 1),
(15, 'gajendra', '123', 9565, 'delhi', 0),
(16, 'robin', '123', 8794, 'delhi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `surname` varchar(40) NOT NULL,
  `gender` char(1) NOT NULL,
  `email` varchar(20) NOT NULL,
  `city` varchar(15) NOT NULL,
  `contact` bigint(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `surname`, `gender`, `email`, `city`, `contact`) VALUES
(30, 'bharat', 'kumar', 'bharat', 'mehta', 'M', 'kumarbharat878@gmail', 'ranchi', 860251076),
(31, 'adarsh', 'shah', 'adarsh', 'shah', 'M', 'adarsh@gmail.com', 'bhopal', 985332656),
(32, 'virat', '12345', 'virat', 'kholi', 'M', 'virat@gmail.com', 'bhopal', 975248808),
(33, 'sanjeet', '12345', 'sanjeet', 'kumar', 'M', 'sanjeet@gmail.com', 'muzaffarpur', 9546548555),
(34, 'wasim', '12345', 'wasim', 'khan', 'M', 'wasim@gmail.com', 'bhopal', 9752488654),
(35, 'gaurav', '12345', 'gaurav', 'kumar', 'M', 'gaurav@gmail.com', 'bhopal', 9875246123),
(36, 'sunny', '12345', 'sunny', 'kumar', 'M', 'sunny@gmail.com', 'bhopal', 975248080);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
