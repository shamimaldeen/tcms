-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2018 at 09:03 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_address` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_username` varchar(20) NOT NULL,
  `admin_password` varchar(80) NOT NULL,
  `admin_contact` varchar(100) NOT NULL,
  `admin_role` varchar(100) NOT NULL,
  `admin_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_address`, `admin_email`, `admin_username`, `admin_password`, `admin_contact`, `admin_role`, `admin_status`) VALUES
(1, 'admin', 'dhaka', 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', '01738298666', 'admin', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account`
--

CREATE TABLE `tbl_account` (
  `account_id` int(11) NOT NULL,
  `account_description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `acc_cat_id` int(11) DEFAULT NULL,
  `account_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `account_cash_in` float(10,2) DEFAULT NULL,
  `account_cash_out` float(10,2) DEFAULT NULL,
  `account_status` varchar(20) DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_account`
--

INSERT INTO `tbl_account` (`account_id`, `account_description`, `acc_cat_id`, `account_date`, `account_cash_in`, `account_cash_out`, `account_status`) VALUES
(47, 'Rent Fee', 1, '2018-10-28 20:34:23', 1500.00, 1250.00, 'active'),
(53, 'YTYTYT', 3, '2018-10-28 20:58:16', 111.00, 222.00, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account_category`
--

CREATE TABLE `tbl_account_category` (
  `acc_cat_id` int(11) NOT NULL,
  `acc_cat_title` varchar(255) DEFAULT NULL,
  `acc_cat_status` varchar(20) DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_account_category`
--

INSERT INTO `tbl_account_category` (`acc_cat_id`, `acc_cat_title`, `acc_cat_status`) VALUES
(1, 'Rent Fee', 'active'),
(2, 'Other Cost', 'active'),
(3, 'Electric Fee', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE `tbl_attendance` (
  `att_id` int(11) NOT NULL,
  `stu_id` int(11) DEFAULT NULL,
  `batch_id` int(11) DEFAULT NULL,
  `att_date` date NOT NULL,
  `att_status` varchar(20) DEFAULT 'absent'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`att_id`, `stu_id`, `batch_id`, `att_date`, `att_status`) VALUES
(71, 19, 3, '2018-11-04', 'present'),
(72, 21, 3, '2018-11-04', 'absent'),
(73, 19, 6, '2018-11-04', 'present'),
(74, 21, 6, '2018-11-04', 'present'),
(75, 22, 6, '2018-11-04', 'absent');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_batch`
--

CREATE TABLE `tbl_batch` (
  `batch_id` int(11) NOT NULL,
  `batch_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `batch_status` varchar(20) DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_batch`
--

INSERT INTO `tbl_batch` (`batch_id`, `batch_title`, `batch_status`) VALUES
(3, 'Summer 2018', 'active'),
(4, 'Fall 2018', 'active'),
(5, 'Summer 2017', 'active'),
(6, 'Spring 2018', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `course_id` int(11) NOT NULL,
  `course_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `course_details` text,
  `course_duration` varchar(50) DEFAULT NULL,
  `course_fee` float(10,2) DEFAULT NULL,
  `course_status` varchar(20) DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`course_id`, `course_title`, `course_details`, `course_duration`, `course_fee`, `course_status`) VALUES
(1, 'abc', ' asdfghjklqwertyuiopzxcvbnm,asdfghjkwertyuiasdfghjkxcvbnm', '5 month', 5000.00, 'active'),
(2, 'Algorithm', '     wertyuiosdfghjcvbnm, mbn   ', ' 3 months', 60000.00, 'active'),
(3, 'framework', ' about  laravel framework', '10 month', 10000.00, 'active'),
(4, 'database', ' about database', '5 month', 500.00, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courseapply`
--

CREATE TABLE `tbl_courseapply` (
  `capply_id` int(11) NOT NULL,
  `stu_id` int(50) DEFAULT NULL,
  `course_id` int(50) DEFAULT NULL,
  `batch_id` int(11) DEFAULT NULL,
  `pay_id` int(50) DEFAULT NULL,
  `capply_result` varchar(10) DEFAULT NULL,
  `capply_status` varchar(20) NOT NULL DEFAULT 'incomplete',
  `capply_ending_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_courseapply`
--

INSERT INTO `tbl_courseapply` (`capply_id`, `stu_id`, `course_id`, `batch_id`, `pay_id`, `capply_result`, `capply_status`, `capply_ending_date`) VALUES
(1, 16, 2, 5, 13, 'A+', 'Complete', '2018-11-13'),
(2, 19, 2, 3, 14, NULL, 'incomplete', '0000-00-00'),
(3, 19, 2, 6, 15, NULL, 'incomplete', '0000-00-00'),
(4, 19, 2, 3, 16, 'F', 'Complete', '2018-11-06'),
(5, 21, 2, 3, 17, NULL, 'incomplete', '0000-00-00'),
(6, 21, 2, 3, 18, 'A+', 'Complete', '2018-11-06'),
(7, 21, 3, 6, 19, 'F', 'Incomplete', '2018-11-20'),
(8, 22, 3, 6, 20, 'F', 'Complete', '2018-11-14'),
(9, 22, 3, 6, 21, 'A+', 'Complete', '2018-11-14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inquiry`
--

CREATE TABLE `tbl_inquiry` (
  `inquiry_id` int(11) NOT NULL,
  `stu_id` int(50) DEFAULT NULL,
  `inquiry_details` varchar(300) DEFAULT NULL,
  `inquiry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inquiry`
--

INSERT INTO `tbl_inquiry` (`inquiry_id`, `stu_id`, `inquiry_details`, `inquiry_date`) VALUES
(1, 16, ' something', '2018-10-30 17:45:57'),
(2, 16, ' abc', '2018-10-30 17:47:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notice`
--

CREATE TABLE `tbl_notice` (
  `notice_id` int(11) NOT NULL,
  `notice_description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `notice_status` varchar(20) DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_notice`
--

INSERT INTO `tbl_notice` (`notice_id`, `notice_description`, `notice_status`) VALUES
(3, '\r\n         \r\n         \r\n         \r\n         \r\n         This  to inform you all that our all class will be postponed due to strikes        \r\n         \r\n         \r\n         \r\n         \r\n         \r\n         \r\n         \r\n         \r\n         \r\n         \r\n         \r\n         \r\n         \r\n         ', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `pay_id` int(11) NOT NULL,
  `pay_paidamount` varchar(100) DEFAULT NULL,
  `stu_id` int(100) DEFAULT NULL,
  `pay_method` varchar(20) NOT NULL,
  `pay_tra_id` varchar(20) DEFAULT NULL,
  `pay_status` varchar(20) DEFAULT 'pending',
  `pay_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`pay_id`, `pay_paidamount`, `stu_id`, `pay_method`, `pay_tra_id`, `pay_status`, `pay_date`) VALUES
(13, '36', 16, 'Rocket', '453fdgdf', 'approved', '2018-10-30'),
(14, '500', 19, 'Bkash', '456634', 'approved', '2018-11-03'),
(15, '500', 19, 'Bkash', '456634', 'approved', '2018-11-03'),
(16, '1000', 19, 'Rocket', '456634', 'approved', '2018-11-03'),
(17, '5000', 21, 'Bkash', '456634', 'approved', '2018-11-03'),
(18, '26554', 21, 'Rocket', 'sdfsd', 'approved', '2018-11-03'),
(19, '2353425', 21, 'Rocket', 'fgdg', 'approved', '2018-11-03'),
(20, '5000', 22, 'Bkash', '25622222222', 'approved', '2018-11-03'),
(21, '2000', 22, 'SureCash', '360076345780p34', 'approved', '2018-11-03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_routine`
--

CREATE TABLE `tbl_routine` (
  `routine_id` int(11) NOT NULL,
  `batch_id` int(11) DEFAULT NULL,
  `routine_details` text,
  `routine_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_routine`
--

INSERT INTO `tbl_routine` (`routine_id`, `batch_id`, `routine_details`, `routine_date`) VALUES
(3, 3, '  dsafasdfdsafsdafsdfsgvds', '2018-10-28 18:08:21'),
(5, 4, '  cvxbcvxbcxvbcxvbxcvb', '2018-10-29 00:18:22'),
(6, NULL, ' ', '2018-10-31 10:36:35'),
(7, 6, 'about database', '2018-11-03 00:55:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `staff_id` int(11) NOT NULL,
  `staff_fullname` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `staff_designation` varchar(50) DEFAULT NULL,
  `staff_image` varchar(255) DEFAULT NULL,
  `staff_cnumber` varchar(20) DEFAULT NULL,
  `staff_joining_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `staff_status` varchar(20) DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`staff_id`, `staff_fullname`, `staff_designation`, `staff_image`, `staff_cnumber`, `staff_joining_date`, `staff_status`) VALUES
(2, 'Albert Haughs', 'Project Manager', 'images_(5).jpg', 'Albert s', '2018-10-08 18:00:00', 'active'),
(6, 'hgfdgh', 'gfh', 'images1.jpg', 'dfhhh', '2018-10-29 00:24:10', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `stu_id` int(15) NOT NULL,
  `stu_name` varchar(100) DEFAULT NULL,
  `stu_dob` date DEFAULT NULL,
  `stu_sex` varchar(20) NOT NULL,
  `stu_religion` varchar(20) DEFAULT NULL,
  `stu_marital` varchar(20) DEFAULT NULL,
  `stu_nid` varchar(100) DEFAULT NULL,
  `stu_occupation` varchar(100) DEFAULT NULL,
  `stu_image` varchar(100) DEFAULT NULL,
  `stu_father` varchar(50) DEFAULT NULL,
  `stu_mother` varchar(100) DEFAULT NULL,
  `stu_guardian` varchar(100) DEFAULT NULL,
  `stu_relation` varchar(100) DEFAULT NULL,
  `stu_guardian_mobile` varchar(20) DEFAULT NULL,
  `stu_mobile` varchar(20) DEFAULT NULL,
  `stu_email` varchar(100) DEFAULT NULL,
  `stu_password` varchar(100) NOT NULL,
  `stu_present_address` varchar(100) DEFAULT NULL,
  `stu_permanent_address` varchar(100) DEFAULT NULL,
  `stu_have_experience` varchar(20) NOT NULL DEFAULT 'no',
  `stu_institute` varchar(50) DEFAULT NULL,
  `stu_session` varchar(100) DEFAULT NULL,
  `stu_trade` varchar(100) DEFAULT NULL,
  `stu_roll` varchar(100) DEFAULT NULL,
  `stu_examination` varchar(100) DEFAULT NULL,
  `stu_board` varchar(100) DEFAULT NULL,
  `stu_group` varchar(100) DEFAULT NULL,
  `stu_pass_year` varchar(100) DEFAULT NULL,
  `stu_result` varchar(100) DEFAULT NULL,
  `stu_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `stu_status` varchar(11) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`stu_id`, `stu_name`, `stu_dob`, `stu_sex`, `stu_religion`, `stu_marital`, `stu_nid`, `stu_occupation`, `stu_image`, `stu_father`, `stu_mother`, `stu_guardian`, `stu_relation`, `stu_guardian_mobile`, `stu_mobile`, `stu_email`, `stu_password`, `stu_present_address`, `stu_permanent_address`, `stu_have_experience`, `stu_institute`, `stu_session`, `stu_trade`, `stu_roll`, `stu_examination`, `stu_board`, `stu_group`, `stu_pass_year`, `stu_result`, `stu_date`, `stu_status`) VALUES
(16, 'ppp', '2018-10-25', 'Female', 'Christian', 'Married', '11111111111111', 'Students', 'images_(2).jpg', 'qqqqqqqqqqqqq', 'wwwwwwww', 'pickpic', 'pickpic', '22222', '3333', 'ppp@gmail.com', '05352c70dc56db7737bf32387ff8446c', '', '', 'Yes', 'Dhaka', '2017-18', 'dgf', 'dsfds', 'SSC', 'Dhaka', 'Commerce', '2018', '5', '2018-10-30 08:44:27', 'pending'),
(17, 'Ariful Islam', '2018-11-08', 'Male', 'Islam', 'Married', '34567887', '623', 'download_(4).jpg', 'sdfsdf', 'sdfsd', 'fsd', 'fsdfs', '0', '01750840217', 'sdfsd@ergfsd.sdfsd', '4b64d8fe612a4b863c40efc368629098', 'dsfsd', 's', 'Yes', 'sd', '3546', 'ds', 'dsfsd', 'sdfsd', 'sdfsd', 'Science', 'dsfsd', 'fsdf', '2018-11-01 10:03:16', 'pending'),
(19, 'John', '2018-11-12', 'Male', 'Christian', 'Unmarried', '222222222', 'Student', 'images_(5)2.jpg', 'john senior', 'dsfgfdg', 'fdsgdsfg', 'sdgffdgbdg', '16654', '01738298666', 'john@gmail.com', '8704103c7553203049eb445c7b184b90', 'fdsfgdsg', 'sdfgsdf', 'Yes', 'dfsgdfg', '2017-18', 'LKJD', 'dhdfhgh', 'hsc', 'gfdsg', 'Commerce', '2018', '5', '2018-11-03 00:46:50', 'pending'),
(21, 'abcdef', '2018-11-07', 'Female', 'Christian', 'Unmarried', '11111111111111', 'Student', 'download_(1)1.jpg', 'dsfsdf', 'hgfdgdfg', 'gfhh', 'fdghdfh', 'dfgfh', '01750840217', 'abcdef@gmail.com', '9290682f681ea0a77b056a904970d3e0', 'fsdfsdg', 'fdsgsdf', 'Yes', 'fdsgdfg', 'dfgd', 'dffg', 'dsfgdsg', 'dsfgdsfg', 'fdgdfsg', 'Technical', 'dfsgdsg', '5', '2018-11-03 00:51:34', 'pending'),
(22, 'Ali Hossen', '2018-11-21', 'Male', 'Islam', 'Married', '2563366', 'Employee', 'images_(4)1.jpg', 'ACD', 'VF', 'DDFD', 'Brother', '0175888888', '', 'shamim@gmail.com', 'eab821650a5747894b774a55c3b1b520', 'Savar', 'Ghatail', 'Yes', 'Dhaka', '2017-18', 'LKJD', 'dsfds', 'dsfgdsfg', 'Dhaka', 'Science', '2012', '4.75', '2018-11-03 10:12:08', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_account`
--
ALTER TABLE `tbl_account`
  ADD PRIMARY KEY (`account_id`),
  ADD KEY `acc_cat_id` (`acc_cat_id`);

--
-- Indexes for table `tbl_account_category`
--
ALTER TABLE `tbl_account_category`
  ADD PRIMARY KEY (`acc_cat_id`);

--
-- Indexes for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  ADD PRIMARY KEY (`att_id`),
  ADD KEY `stu_id` (`stu_id`),
  ADD KEY `batch_id` (`batch_id`);

--
-- Indexes for table `tbl_batch`
--
ALTER TABLE `tbl_batch`
  ADD PRIMARY KEY (`batch_id`);

--
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `tbl_courseapply`
--
ALTER TABLE `tbl_courseapply`
  ADD PRIMARY KEY (`capply_id`),
  ADD KEY `stu_id` (`stu_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `pay_id` (`pay_id`),
  ADD KEY `batch_id` (`batch_id`);

--
-- Indexes for table `tbl_inquiry`
--
ALTER TABLE `tbl_inquiry`
  ADD PRIMARY KEY (`inquiry_id`),
  ADD KEY `stu_id` (`stu_id`);

--
-- Indexes for table `tbl_notice`
--
ALTER TABLE `tbl_notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`pay_id`),
  ADD KEY `stu_id` (`stu_id`);

--
-- Indexes for table `tbl_routine`
--
ALTER TABLE `tbl_routine`
  ADD PRIMARY KEY (`routine_id`),
  ADD KEY `batch_id` (`batch_id`);

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`stu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_account`
--
ALTER TABLE `tbl_account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `tbl_account_category`
--
ALTER TABLE `tbl_account_category`
  MODIFY `acc_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  MODIFY `att_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `tbl_batch`
--
ALTER TABLE `tbl_batch`
  MODIFY `batch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_courseapply`
--
ALTER TABLE `tbl_courseapply`
  MODIFY `capply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_inquiry`
--
ALTER TABLE `tbl_inquiry`
  MODIFY `inquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_notice`
--
ALTER TABLE `tbl_notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tbl_routine`
--
ALTER TABLE `tbl_routine`
  MODIFY `routine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `stu_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_account`
--
ALTER TABLE `tbl_account`
  ADD CONSTRAINT `tbl_account_ibfk_1` FOREIGN KEY (`acc_cat_id`) REFERENCES `tbl_account_category` (`acc_cat_id`);

--
-- Constraints for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  ADD CONSTRAINT `tbl_attendance_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `tbl_student` (`stu_id`),
  ADD CONSTRAINT `tbl_attendance_ibfk_2` FOREIGN KEY (`batch_id`) REFERENCES `tbl_batch` (`batch_id`);

--
-- Constraints for table `tbl_courseapply`
--
ALTER TABLE `tbl_courseapply`
  ADD CONSTRAINT `tbl_courseapply_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `tbl_student` (`stu_id`),
  ADD CONSTRAINT `tbl_courseapply_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `tbl_course` (`course_id`),
  ADD CONSTRAINT `tbl_courseapply_ibfk_3` FOREIGN KEY (`pay_id`) REFERENCES `tbl_payment` (`pay_id`),
  ADD CONSTRAINT `tbl_courseapply_ibfk_4` FOREIGN KEY (`batch_id`) REFERENCES `tbl_batch` (`batch_id`);

--
-- Constraints for table `tbl_inquiry`
--
ALTER TABLE `tbl_inquiry`
  ADD CONSTRAINT `tbl_inquiry_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `tbl_student` (`stu_id`);

--
-- Constraints for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD CONSTRAINT `tbl_payment_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `tbl_student` (`stu_id`);

--
-- Constraints for table `tbl_routine`
--
ALTER TABLE `tbl_routine`
  ADD CONSTRAINT `tbl_routine_ibfk_1` FOREIGN KEY (`batch_id`) REFERENCES `tbl_batch` (`batch_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
