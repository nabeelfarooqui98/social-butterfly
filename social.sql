-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2018 at 10:18 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `social`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `Name` varchar(25) NOT NULL,
  `EmailId` varchar(35) NOT NULL,
  `PhoneNo` int(11) DEFAULT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `EmailId`, `PhoneNo`, `Message`) VALUES
('Hira Kamal', 'abc@gmail.com', 7888, 'hshkhad'),
('Hira Kamal', 'abc@gmail.com', 7888, 'hshkhad'),
('Hira', 'hirakamal98@gmail.com', 900000, 'helllooo'),
('Hiraa', 'hirakamal98@hotmail.com', 999999, 'jhhhhhh'),
('hiiiii', 'abc@gmail.com', 0, 'mar jao.'),
('hiraa', 'abc@gmail.com', 89999, 'hhshahaha'),
('myname', 'abc@gmail.com', 0, '12:02 min'),
('hhhh', 'abcd@ho', 999, 'hhhh'),
('newuser', 'new@mail.com', 90078601, 'new messageeeeeee'),
('Abc', 'xyz@gmail.com', 12345, 'checking mail sent or not'),
('sendkrdo', 'new@mail.com', 12345, 'please krdo send'),
('check', 'abc@gmail.com', 99999, 'sending or not?');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE IF NOT EXISTS `education` (
`id` int(11) NOT NULL,
  `school` text NOT NULL,
  `syear` int(11) NOT NULL,
  `college` text NOT NULL,
  `cyear` int(11) NOT NULL,
  `university` text NOT NULL,
  `uyear` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `UserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `friendrequest`
--

CREATE TABLE IF NOT EXISTS `friendrequest` (
  `sender_id` int(11) NOT NULL DEFAULT '0',
  `receiver_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `dob` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `gender` char(1) NOT NULL,
  `image` text NOT NULL,
  `info` longtext NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `pass`, `dob`, `city`, `country`, `gender`, `image`, `info`, `timestamp`) VALUES
(3, 'Hira', 'Kamal', 'hira@gmail.com', 'hira', '1998-10-08', 'Karachi', 'PAK', 'F', '', '', '2018-11-25 16:33:14'),
(4, 'muhammad', 'shoaib', 'salar123@gmail.com', 'vcbvx', '1998-10-08', 'Karachi', 'ABW', 'M', '', '', '2018-11-25 16:33:14'),
(6, 'Maham', 'Shoaib', 'maham_shoaib@hotmail.com', 'maham', '1998-12-12', 'Karachi', 'PAK', 'F', 'pp.jpg', 'Write something about your self', '2018-11-25 16:33:14'),
(7, 'Shees', 'Shoaib', 'shees@gmail.com', 'shees', '27 jan 2003', 'Lahore', 'PAK', 'M', '', '', '2018-11-25 19:54:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education`
--
ALTER TABLE `education`
 ADD PRIMARY KEY (`id`), ADD KEY `UserId` (`UserId`);

--
-- Indexes for table `friendrequest`
--
ALTER TABLE `friendrequest`
 ADD PRIMARY KEY (`sender_id`,`receiver_id`), ADD KEY `sender_id` (`sender_id`), ADD KEY `receiver_id` (`receiver_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `education`
--
ALTER TABLE `education`
ADD CONSTRAINT `education_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `education` (`id`);

--
-- Constraints for table `friendrequest`
--
ALTER TABLE `friendrequest`
ADD CONSTRAINT `friendrequest_ibfk_1` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `friendrequest_ibfk_2` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
