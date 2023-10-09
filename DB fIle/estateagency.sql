-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2021 at 03:11 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estateagency`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(55) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Mobile_no` varchar(15) NOT NULL,
  `cnic_no` varchar(20) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `Name`, `Mobile_no`, `cnic_no`, `Address`, `email`, `password`, `image`, `status`) VALUES
(1, 'Yasir Shahzad', '+92 347 0982480', '4240398675434', 'Sabar Abad, KPK, Pakistan.', 'yasir@gmail.com', '1234', 'YASIR.jpg', '1'),
(2, 'Mussadiq Farid', '03428963951', '4440351208967', 'metakhel.', 'mussadiq@gmail.com', '1234', 'ag2.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `p_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `Name`, `email`, `contact_no`, `comments`, `date`, `p_id`) VALUES
(1, 'ali', 'ali@gmail.com', '03120976511', 'what will be the final price of the land. As the location is feasible. as it is located it road side. As there is way to land', '2015-11-20 04:19:00', 1),
(2, 'Seemab', 'seemab@gmail.com', '03120911521', 'The flat has good good location. As Electricity and wifi system present.', '2015-11-20 04:31:00', 2),
(3, 'Junaid', 'jani231@gmail.com', '03435431212', 'Which you are free then we meet to you, and we will check the building and all the conditions that are mention in the discription.', '2015-11-20 04:34:00', 2),
(4, 'Abid', 'ab@gmail.com', '03120762173', 'your number is switch off, we are trying to contact you to deal with you. we like the conditions. but we will like to sea your flat first. Then we will discuss it.', '2015-11-20 04:38:00', 2),
(5, 'Mussadiq Farid', 'mussadiq@gmail.com', '03122145342', 'This is Good land where you can build college and hostel for the people to get the benefit.', '2015-11-20 07:57:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `flats`
--

CREATE TABLE `flats` (
  `id` int(11) NOT NULL,
  `area` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `status` varchar(55) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `pic2` varchar(255) NOT NULL,
  `location` varchar(100) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `Date` datetime NOT NULL,
  `rooms` varchar(20) NOT NULL,
  `bathrooms` varchar(20) NOT NULL,
  `garage` varchar(10) NOT NULL,
  `kitchan` varchar(10) NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flats`
--

INSERT INTO `flats` (`id`, `area`, `price`, `status`, `pic`, `pic2`, `location`, `discription`, `Date`, `rooms`, `bathrooms`, `garage`, `kitchan`, `u_id`) VALUES
(1, '31', '35000', 'RENT', '14.jpg', '3.jpg', 'Tableghi Markaz karak, KPK.', 'It is available for the rent. the university will have oppertunity to leave near to the university. better Electricity and Water System.', '2015-11-20 06:47:00', '6', '6', '1', '1', 2),
(2, '20', '45000', 'RENT', '18.jpg', '18.jpg', 'KDA, KPK.', 'Near to Road And KDA Hospital.', '2015-11-20 06:40:00', '4', '3', '1', '1', 13);

-- --------------------------------------------------------

--
-- Table structure for table `lands`
--

CREATE TABLE `lands` (
  `id` int(11) NOT NULL,
  `area` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `status` varchar(55) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `pic2` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `Date` datetime NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lands`
--

INSERT INTO `lands` (`id`, `area`, `price`, `status`, `pic`, `pic2`, `location`, `discription`, `Date`, `u_id`) VALUES
(1, '23', '2740000', 'SALE', 'IMG-20200804-WA0039.jpg', 'IMG-20200804-WA0039.jpg', 'Karak, KPK.', 'This land is near to the Mother Plaza, Which is famous for the marketing and other things like..', '2008-11-20 08:18:00', 4),
(2, '23', '255000', 'SALE', '10.jpg', '11.jpg', 'wanna in pakistan', 'near to', '2015-11-20 06:43:00', 13),
(3, '17', '225000', 'LEASE', 'MagazinePic-01-2.3.001-bigpicture_01_7 (2).jpg', 'MagazinePic-01-2.3.001-bigpicture_01_7 (2).jpg', 'KDA hospital, Karak, Pakistan.', 'The Land is Near to the hospital. It has 24 hour electricity. it also contains the water facilities. The land is suited at the road side. So no need of the paths.', '2015-11-20 05:42:00', 13);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `Name`, `email`, `subject`, `message`) VALUES
(2, 'Mussadiq Farid', 'mussadiq@gmail.com', 'Suggestion for Feed Back', 'If it contains the feedback method, then it will be better than the present.'),
(4, 'khan', 'khan@gmail.com', 'Issue in Property', 'free contact us'),
(5, 'Afnan Khan', 'afnan@gmail.com', 'Some Issue in the Designing of the site', 'The whole site is good, but the form does not contains the label and directions for the user. It will be good for the new user to direct it, while using the this site.');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `property_type` varchar(255) NOT NULL,
  `area` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `rooms` varchar(20) NOT NULL,
  `bathrooms` varchar(20) NOT NULL,
  `garage` varchar(20) NOT NULL,
  `kitchan` varchar(20) NOT NULL,
  `year` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `pic2` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `u_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `location`, `property_type`, `area`, `price`, `rooms`, `bathrooms`, `garage`, `kitchan`, `year`, `status`, `pic`, `pic2`, `discription`, `u_id`) VALUES
(2, 'KDA, Karak, KPK.', 'HOUSE', '20', '255000', '4', '3', '1', '1', '2020-08-20', 'SALE', 'property-6.jpg', 'post-7.jpg', '', 0),
(3, 'Sabar Abad, KPK, Pakisatan.', 'LAND', '17', '176000', '0', '0', '0', '0', '2020-08-30', 'SALE', 'IMG-20200804-WA0039.jpg', 'IMG-20200804-WA0039.jpg', '', 0),
(4, 'Mita Khel, KPK, Pakistan.', 'HOSTEL', '400', '455000', '104', '65', '23', '4', '2020-08-31', 'RENT', 'post-1.jpg', 'post-1.jpg', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `reply` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `pic` varchar(255) NOT NULL,
  `u_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `F_name` varchar(100) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `cnic_no` varchar(20) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `user_status` varchar(20) NOT NULL DEFAULT '1',
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `F_name`, `Address`, `cnic_no`, `contact_no`, `user_status`, `email`, `password`, `image`) VALUES
(1, 'Yasir Shahzad', 'Khan ', 'aaaa', '1420356452331', '03120099221', '1', 'yasir@gmail.com', '12345', 'YASIR.jpg'),
(2, 'Mussadiq Farid', 'Khan Jan', 'Sabar Abad, Karak.', '1440353348967', '03122145342', '1', 'mussadiq@gmail.com', '1234', 'ag2.jpg'),
(3, 'khan', 'khattak', 'Karak', '3440353008967', '+923130976734', '0', 'khan@gmail.com', '12345', 'YASIR.jpg'),
(4, 'Bilal Ahmad', 'Shahid Ali', 'Karak, KPK, Pakistan.    ', '3434389671234', '03439867542', '1', 'bilal@gmail.com', '1234', 'b.jpg'),
(5, 'Ahmad', 'Khan', 'KPK', '4230398675434', '03129076543', '1', 'ahmad@gmail.com', '1234', 'YASIR.jgp'),
(6, 'Ali', 'sayad', 'KPK', '4230398675434', '03129076543', '1', 'ali@gmail.com', '1234', 'YASIR.jgp'),
(7, 'saif', 'Khan', 'KPK', '4230398675434', '03129076543', '1', 'saif@gmail.com', '1234', 'YASIR.jgp'),
(8, 'Ahmad khattak', 'wali', 'KPK', '4230398675434', '03129076543', '1', 'ak321@gmail.com', '1234', 'YASIR.jgp'),
(9, 'wali', 'Khan', 'KPK', '4230398675434', '03129076543', '1', 'wali@gmail.com', '1234', 'YASIR.jgp'),
(10, 'zeyad', 'asad', 'KPK', '4230398675434', '03129076543', '1', 'zayad@gmail.com', '1234', 'YASIR.jgp'),
(11, 'yar khan', 'khattak', 'KPK', '4230398675434', '03129076543', '1', 'yar@gmail.com', '1234', 'YASIR.jgp'),
(12, 'Ahmad', 'Khan', 'KPK', '4230398675434', '03129076543', '1', 'ah@gmail.com', '1234', 'YASIR.jgp'),
(13, 'balal', 'Khan wali', 'warana, kpk, Pakistan.    ', '1420233209679', '03318976543', '1', 'mussad2@gmail.com', '1313', 'IMG_20201027_175844.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flats`
--
ALTER TABLE `flats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lands`
--
ALTER TABLE `lands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `flats`
--
ALTER TABLE `flats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lands`
--
ALTER TABLE `lands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
