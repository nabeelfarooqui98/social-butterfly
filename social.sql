-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2018 at 11:24 AM
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
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`, `email`) VALUES
(30, 'admin123', 'admin@gmail,com');

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
('hiraa', 'hira@gmail.com', 90078601, 'ahhahahahahahha'),
('sjdusf', 'hira@gmail.com', 2147483647, 'nakdjhkashdfkafhaklsf');

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
  `uyear` text NOT NULL,
  `description` longtext NOT NULL,
  `UserId` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `school`, `syear`, `college`, `cyear`, `university`, `uyear`, `description`, `UserId`) VALUES
(1, 'Federal Secondary School', 2014, 'BAMM PECHS Govt College for Women', 2016, 'Fast University', 'Under Graduate', '..............', 6);

-- --------------------------------------------------------

--
-- Table structure for table `friendrequest`
--

CREATE TABLE IF NOT EXISTS `friendrequest` (
  `sender_id` int(11) NOT NULL DEFAULT '0',
  `receiver_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friendrequest`
--

INSERT INTO `friendrequest` (`sender_id`, `receiver_id`) VALUES
(3, 6),
(3, 11),
(6, 3),
(11, 3),
(16, 3),
(16, 6),
(16, 11);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
`msgid` int(11) NOT NULL,
  `user_from` int(11) NOT NULL,
  `user_to` int(11) NOT NULL,
  `message` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msgid`, `user_from`, `user_to`, `message`, `time`) VALUES
(9, 6, 3, 'heeeee', '2018-12-04 03:43:06'),
(10, 6, 3, 'mymsg1', '2018-12-04 03:49:49'),
(11, 3, 12, '123', '2018-12-04 09:22:28');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
`post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `image` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=1300 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `user_id`, `content`, `image`, `timestamp`) VALUES
(1285, 3, 'hello', '', '2018-12-04 20:09:36'),
(1286, 11, 'my first post yayy', '', '2018-12-04 20:09:36'),
(1287, 11, 'my second post', '', '2018-12-04 20:09:36'),
(1288, 11, 'my third post', '', '2018-12-04 20:09:36'),
(1291, 3, 'This is my posstttt', '', '2018-12-04 20:09:36'),
(1292, 16, 'abcd', '', '2018-12-04 20:09:36'),
(1294, 16, '', '275.JPG', '2018-12-04 20:11:55'),
(1295, 16, 'text post', '', '2018-12-04 20:12:10'),
(1296, 3, 'abcd', '', '2018-12-06 09:21:41'),
(1297, 3, '', 'images.png', '2018-12-06 09:21:58'),
(1298, 3, 'hello ', '', '2018-12-06 09:44:54'),
(1299, 3, '', 'Jellyfish.jpg', '2018-12-06 09:45:32');

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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `pass`, `dob`, `city`, `country`, `gender`, `image`, `info`, `timestamp`) VALUES
(3, 'Hira', 'Kamal', 'hira@gmail.com', 'hira', '', 'Karachi', 'country', 'F', '12716335_10205593905142745_3801586977755909885_o.jpg', 'Write something about your self', '2018-11-25 16:33:14'),
(6, 'Maham', 'Shoaib', 'maham_shoaib@hotmail.com', 'maham', '1998-12-12', 'Karachi', 'PAK', 'F', 'pp.jpg', 'Write something about your self', '2018-11-25 16:33:14'),
(11, 'Afroz', 'Pasha', 'afroz@gmail.com', 'afroz', '', 'Karachi', 'country', 'M', 'Desert.jpg', 'Write something about your self', '2018-12-03 09:30:46'),
(12, 'abc', 'xyz', 'abc123@gmail.com', 'asdf', '', 'karachi', 'PAK', 'M', '', '', '2018-12-04 09:05:26'),
(16, 'Nabeel', 'Farooqui', 'nabeel@gmail.com', 'nabeel', '', 'Karachi', 'country', '', 'Lighthouse.jpg', 'Write something about your self', '2018-12-04 19:17:41');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE IF NOT EXISTS `work` (
`id` int(11) NOT NULL,
  `company` text NOT NULL,
  `pos` text NOT NULL,
  `city` text NOT NULL,
  `descr` longtext NOT NULL,
  `UId` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`id`, `company`, `pos`, `city`, `descr`, `UId`) VALUES
(1, 'kahin bhi nai :(', 'na kam ki na kaaj ki dushman anaaj ki', 'nowhere', 'bla bla bla ', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`,`email`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD KEY `EmailId` (`EmailId`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
 ADD PRIMARY KEY (`id`), ADD KEY `edu_user` (`UserId`);

--
-- Indexes for table `friendrequest`
--
ALTER TABLE `friendrequest`
 ADD PRIMARY KEY (`sender_id`,`receiver_id`), ADD KEY `sender_id` (`sender_id`), ADD KEY `receiver_id` (`receiver_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
 ADD PRIMARY KEY (`msgid`), ADD KEY `user_from` (`user_from`,`user_to`), ADD KEY `user_to` (`user_to`), ADD KEY `user_to_2` (`user_to`), ADD KEY `user_from_2` (`user_from`), ADD KEY `user_from_3` (`user_from`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
 ADD PRIMARY KEY (`id`), ADD KEY `UId` (`UId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
MODIFY `msgid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1300;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
ADD CONSTRAINT `fkemail` FOREIGN KEY (`EmailId`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `education`
--
ALTER TABLE `education`
ADD CONSTRAINT `edu_user` FOREIGN KEY (`UserId`) REFERENCES `users` (`id`);

--
-- Constraints for table `friendrequest`
--
ALTER TABLE `friendrequest`
ADD CONSTRAINT `friendrequest_ibfk_1` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `friendrequest_ibfk_2` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
ADD CONSTRAINT `msgFromFK` FOREIGN KEY (`user_from`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `msgToFK` FOREIGN KEY (`user_to`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `work`
--
ALTER TABLE `work`
ADD CONSTRAINT `work_ibfk_1` FOREIGN KEY (`UId`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
