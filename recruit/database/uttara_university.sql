-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2016 at 04:24 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uttara_university`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contract` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `password`, `firstname`, `lastname`, `gender`, `address`, `contract`, `email`, `status`) VALUES
(3, 'admin', 'admin', 'Saqawat', 'Hossen', 'male', '12 uttara, 70 sector, dhaka', '016894523687', 'islam@gmail.com', 'active'),
(4, 'admin2', 'admin2', 'Abul', 'Basar', 'male', '45 nikungo, 85 sector ,dhaka', '0158756371852987', 'basar@gmail.com', 'deactive');

-- --------------------------------------------------------

--
-- Table structure for table `booklist`
--

CREATE TABLE `booklist` (
  `book_id` int(11) NOT NULL,
  `book_title` varchar(100) NOT NULL,
  `department` varchar(50) NOT NULL,
  `author` varchar(100) NOT NULL,
  `book_copies` int(11) NOT NULL,
  `book_pablication` varchar(100) NOT NULL,
  `publisher_name` varchar(100) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `copyright_year` year(4) NOT NULL,
  `date_added` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booklist`
--

INSERT INTO `booklist` (`book_id`, `book_title`, `department`, `author`, `book_copies`, `book_pablication`, `publisher_name`, `isbn`, `copyright_year`, `date_added`, `status`) VALUES
(1, 'computer knowledge', 'CSE', 'Md. Mostafa kamal', 50, 'bismillah corporation', 'Abdur Rahim', '1-000-1234', 2016, '2016-11-17', 'New'),
(7, 'amar bangla', 'Bangla', 'sorif uddin', 15, 'l.m. foundation', 'halim khondokar', '2-458-1234', 2016, '2016-11-14', 'Old'),
(8, 'bangladesh', 'Bangla', 'mostafa kamal', 20, 'queen pablication', 'khayrul alom', '1-21-2415', 2016, '2016-11-25', 'New'),
(9, 'bichar bibag', 'LOW', 'anowar', 40, 'akushey publication', 'amzad', '2-14-7895', 2016, '2016-11-14', 'New'),
(10, 'computer', 'CSE', 'J.K Khan', 0, 'Hamza printers', 'Hamidur rahman', '1-5986-458', 2016, '2016-11-04', 'Old'),
(11, 'Electrical', 'EEE', 'William Kary', 30, 'Brardau Printers', 'Sanka Mari', '2-1458-789', 2016, '2016-11-16', 'New'),
(12, 'Fashion', 'Fashion Design', 'Jamil Akondho', 20, 'kamal palication', 'samsul alom', '7-5845-85987', 2012, '2012-08-15', 'Old'),
(13, 'Islamic Knowledge', 'Islamic Studies', 'Abdur rahman molla', 30, 'Bismillah Publication', 'Gazi Arafat Rahman', '9-4875-89542', 2016, '2016-11-14', 'Old'),
(14, 'English Learning', 'English', 'Soyod Habibul Akondo', 20, 'komero printers', '1-584-8795', '1-458-7895', 2010, '2010-07-13', 'Old'),
(15, 'wewewr', 'English', 'fghj', 0, 'tfyguhhi', 'yguhioj', 'ytuydfg', 2016, '2016-11-15', 'Damage'),
(16, 'business rules', 'BBA', 'sikkikur rahman', 20, 'lak publication', 'kadir', '1-458-4587-555', 2016, '2016-12-28', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `borrow_id` int(11) NOT NULL,
  `member_id` bigint(50) NOT NULL,
  `date_borrow` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `due_date` varchar(100) DEFAULT NULL,
  `fine` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`borrow_id`, `member_id`, `date_borrow`, `due_date`, `fine`) VALUES
(624, 1, '2016-12-12 02:00:55', '2016-12-17', ''),
(627, 1, '2016-12-01 02:03:02', '2016-12-08', ''),
(629, 3, '2016-12-14 19:34:40', '2016-12-20', '');

-- --------------------------------------------------------

--
-- Table structure for table `borrowdetails`
--

CREATE TABLE `borrowdetails` (
  `borrow_details_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `borrow_id` int(11) NOT NULL,
  `borrow_status` varchar(50) NOT NULL,
  `date_return` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrowdetails`
--

INSERT INTO `borrowdetails` (`borrow_details_id`, `book_id`, `borrow_id`, `borrow_status`, `date_return`) VALUES
(321, 7, 624, 'pending', NULL),
(324, 8, 627, 'pending', NULL),
(326, 9, 629, 'pending', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contract` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `firstname`, `lastname`, `gender`, `address`, `contract`, `email`, `password`, `type`, `level`, `status`) VALUES
(1, 'Mohammad', 'Abdullah', 'male', 'ABC, 37,Dhaka.', '0168137415892', 'user@gmail.com', 'user', 'student', 'First Year', 'Active'),
(2, 'Jakir', 'Hossen', 'male', '25,jigatola, gulshan, Dhaka', '019328445845', 'asadnobi@gmail.com', '', 'Faculty', 'Junior Teacher', 'Banned'),
(3, 'Abdur', 'Rahim', 'male', '07,motijil, dhaka,bangladesh', '+088017921548', 'rahim123@yahoo.com', '', 'student', 'second_year', 'Active'),
(9, 'Rohim', 'Mia', 'Male', 'hjklrdtyf', 'ghjkltfy', 'rahim@gmail.com', '', 'Student', 'First Year', 'Active'),
(10, 'Liton', 'Das', 'Male', '34, hajipara, Khilghaw, Malibag', '0173125489655', 'dasliton@gmail.com', '', 'Student', 'Third Year', 'Request');

-- --------------------------------------------------------

--
-- Table structure for table `requestdetails`
--

CREATE TABLE `requestdetails` (
  `request_details_id` int(11) NOT NULL,
  `book_id` bigint(50) NOT NULL,
  `member_id` bigint(50) NOT NULL,
  `request_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `collecte_date` varchar(100) NOT NULL,
  `request_status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requestdetails`
--

INSERT INTO `requestdetails` (`request_details_id`, `book_id`, `member_id`, `request_date`, `collecte_date`, `request_status`) VALUES
(288, 7, 9, '2016-12-07 22:05:06', '2016-12-13', 'requested'),
(293, 11, 3, '2016-12-07 22:42:03', '2016-12-13', 'requested'),
(309, 7, 1, '2016-12-12 19:56:04', '2016-12-18', 'requested'),
(310, 8, 1, '2016-12-12 19:56:13', '2016-12-18', 'requested');

-- --------------------------------------------------------

--
-- Table structure for table `subadmin`
--

CREATE TABLE `subadmin` (
  `sub_admin_id` int(11) NOT NULL,
  `sub_admin_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contract` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subadmin`
--

INSERT INTO `subadmin` (`sub_admin_id`, `sub_admin_name`, `password`, `firstname`, `lastname`, `gender`, `address`, `contract`, `email`, `status`) VALUES
(3, 'subadmin', 'subadmin', 'Ariful', 'Islam', 'male', '12 uttara, 70 sector, dhaka', '016894523687', 'islam@gmail.com', 'active'),
(4, 'subadmin2', 'subadmin2', 'Shek yuns', 'ahmed', 'male', '45 nikungo, 85 sector ,dhaka', '0158756371852987', 'basar@gmail.com', 'deactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `booklist`
--
ALTER TABLE `booklist`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`borrow_id`),
  ADD KEY `borrowerid` (`member_id`),
  ADD KEY `borrowid` (`borrow_id`);

--
-- Indexes for table `borrowdetails`
--
ALTER TABLE `borrowdetails`
  ADD PRIMARY KEY (`borrow_details_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `requestdetails`
--
ALTER TABLE `requestdetails`
  ADD PRIMARY KEY (`request_details_id`);

--
-- Indexes for table `subadmin`
--
ALTER TABLE `subadmin`
  ADD PRIMARY KEY (`sub_admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `booklist`
--
ALTER TABLE `booklist`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `borrow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=630;
--
-- AUTO_INCREMENT for table `borrowdetails`
--
ALTER TABLE `borrowdetails`
  MODIFY `borrow_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=327;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `requestdetails`
--
ALTER TABLE `requestdetails`
  MODIFY `request_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=311;
--
-- AUTO_INCREMENT for table `subadmin`
--
ALTER TABLE `subadmin`
  MODIFY `sub_admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
