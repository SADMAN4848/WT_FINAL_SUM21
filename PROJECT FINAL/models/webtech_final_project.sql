-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2021 at 08:30 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtech_final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(20) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `c_uname` varchar(20) NOT NULL,
  `c_pass` varchar(20) NOT NULL,
  `c_dob_day` varchar(30) NOT NULL,
  `c_dob_month` varchar(20) NOT NULL,
  `c_dob_year` varchar(20) NOT NULL,
  `c_gender` varchar(20) NOT NULL,
  `c_email` varchar(20) NOT NULL,
  `c_address` varchar(100) NOT NULL,
  `c_phone` varchar(20) NOT NULL,
  `c_nid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_name`, `c_uname`, `c_pass`, `c_dob_day`, `c_dob_month`, `c_dob_year`, `c_gender`, `c_email`, `c_address`, `c_phone`, `c_nid`) VALUES
(1, 'Md. Sadman Rahman', 'SADMAN4848', '123456', '9', 'June', '1998', 'Male', 'sadmandrmc@gmail.com', '1/E, Block-C, Bashundhara R/A, Dhaka', '018648546066', '457395766'),
(2, 'Mehrab Faisal', 'mehrab99', '123456', '7', 'July', '1996', 'Male', 'mehrab@gmail.com', '93, Janata Housing, Mirpur, Dhaka', '888888888888888', '437569464769846'),
(8, 'Navid Kaiser', 'Raafi22', '123456', '5', 'February', '2000', 'Male', 'raffii@yahoo.com', '34, Middle Paikpara, Dhaka', '01557575758', '9696969'),
(9, 'Nishat Tasnim', 'tithee99', '123456', '16', 'July', '2001', 'Female', 'tithee@hotmail.com', '4/3, Eastern Housing, Dhaka', '01653495469', '64564577775'),
(10, 'Ali Bin Rashid', 'Shaishab23', '123456', '13', 'May', '1997', 'Male', 'shaishab@yahoo.com', '4/8, Station Road, Gazipur', '018648546066', '65768556464'),
(11, 'Hasan Sanjary Islam', 'Sanjary123', '123456', '3', 'February', '1998', 'Male', 'sanjary@gmail.com', '3, Iqbal Road, Mohammadpur', '01667543988', '54676869674664');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `f_id` int(11) NOT NULL,
  `f_details` varchar(50) NOT NULL,
  `f_reply` varchar(50) DEFAULT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`f_id`, `f_details`, `f_reply`, `c_id`) VALUES
(2, 'Why error?', 'This is why', 1),
(3, 'Why am I getting an error?', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `householder`
--

CREATE TABLE `householder` (
  `h_id` int(11) NOT NULL,
  `h_name` varchar(30) NOT NULL,
  `h_uname` varchar(30) NOT NULL,
  `h_pass` varchar(30) NOT NULL,
  `h_dob` varchar(30) NOT NULL,
  `h_gender` varchar(30) NOT NULL,
  `h_email` varchar(30) NOT NULL,
  `h_address` varchar(30) NOT NULL,
  `h_phone` varchar(30) NOT NULL,
  `h_nid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `householder`
--

INSERT INTO `householder` (`h_id`, `h_name`, `h_uname`, `h_pass`, `h_dob`, `h_gender`, `h_email`, `h_address`, `h_phone`, `h_nid`) VALUES
(1, 'Sidrat Alam', 'sidratrafi', '123456', '2/2/22', 'Male', 'sid@gmial.com', '93.janata', '0129838', '243433'),
(2, 'Ahnaf Murshed', 'sakib99', '123456', '23/06/1991', 'Male', 'ahnaf@gmail.com', '7/3, Rapmura', '016495947964', '46586876979'),
(3, 'Fariha Israt', 'fariha99', '123456', '23/06/1997', 'Female', 'fariha@gmail.com', '4/7, Rupnagar Abashik Elaka', '016494447964', '43534564657757');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `p_id` int(10) NOT NULL,
  `p_type` varchar(30) NOT NULL,
  `p_category` varchar(30) NOT NULL,
  `p_area` varchar(20) NOT NULL,
  `p_location` varchar(100) NOT NULL,
  `p_price` varchar(20) NOT NULL,
  `p_description` varchar(100) NOT NULL,
  `p_photo` varchar(100) NOT NULL,
  `h_id` int(30) DEFAULT NULL,
  `c_uname` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`p_id`, `p_type`, `p_category`, `p_area`, `p_location`, `p_price`, `p_description`, `p_photo`, `h_id`, `c_uname`) VALUES
(1, 'For Sell', 'Flat', '1200 sq. ft.', 'Mirpur', '1000000', 'Very nice flat', 'images/properties/1Mirpur.jpg', 1, 'SADMAN4848'),
(2, 'For Rent', 'House', '1400 sq. ft.', 'Banani', '2000000', 'Nice environment', 'images/properties/2Banani.jpg', 2, 'SADMAN4848'),
(3, 'For Sell', 'Plot', '2100 sq. ft.', 'Mohammadpur', '1500000', 'Nice plot ready to be sold', 'images/properties/3Mohammadpur.jpg', 1, NULL),
(4, 'For Sell', 'Flat', '1550 sq. ft.', 'Mirpur', '1350000', 'Ready flat', 'images/properties/4Mirpur.jpg', 2, NULL),
(5, 'For Rent', 'Flat', '1330 sq. ft.', 'Mohammadpur', '1450000', 'Ready flat need to be painted', 'images/properties/5Mohammadpur.jpg', 2, NULL),
(6, 'For Sell', 'House', '2200 sq. ft.', 'Dhanmondi', '2300000', 'Very nice house', 'images/properties/6Dhanmondi.jpg', 3, NULL),
(7, 'For Sell', 'Plot', '1400sq', 'Bashabo', '1340000', 'Very open area', 'images/properties/7Bashabo.jpg', 1, NULL),
(8, 'For Rent', 'House', '2100 sq. ft.', 'Gulshan', '200000', 'Very spacious', 'images/properties/8Gulshan.jpg', 1, NULL),
(9, 'For Sell', 'Plot', '1330 sq. ft.', 'Ramna', '1500000', 'Nice plot', 'images/properties/9Ramna.jpg', 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `r_id` int(11) NOT NULL,
  `r_details` varchar(40) NOT NULL,
  `r_rating` varchar(32) NOT NULL,
  `c_uname` varchar(30) NOT NULL,
  `h_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`r_id`, `r_details`, `r_rating`, `c_uname`, `h_id`) VALUES
(2, 'He is nice', '3', 'SADMAN4848', 1),
(3, 'He is nice but weird', '5', 'SADMAN4848', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `fk_customer_faq` (`c_id`);

--
-- Indexes for table `householder`
--
ALTER TABLE `householder`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `fk_householder_properties` (`h_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `fk_review_householder` (`h_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `householder`
--
ALTER TABLE `householder`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faq`
--
ALTER TABLE `faq`
  ADD CONSTRAINT `fk_customer_faq` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`);

--
-- Constraints for table `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `fk_householder_properties` FOREIGN KEY (`h_id`) REFERENCES `householder` (`h_id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `fk_review_householder` FOREIGN KEY (`h_id`) REFERENCES `householder` (`h_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
