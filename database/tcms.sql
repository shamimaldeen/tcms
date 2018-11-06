-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2018 at 08:09 PM
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
(1, 'Administrator', 'Savar, Dhaka', 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', '4567890-', 'admin', 'activve');

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
(1, 'Marking Cost Analysis', 5, '2018-11-06 13:21:03', 500.00, 5000.00, 'active');

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
(5, 'Marketings', 'active'),
(6, 'Cost', 'active'),
(7, 'Management', 'active'),
(8, 'Advertisements', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_payment`
--

CREATE TABLE `tbl_admin_payment` (
  `apay_id` int(11) NOT NULL,
  `apay_fee` varchar(100) DEFAULT NULL,
  `stu_id` int(100) DEFAULT NULL,
  `apay_method` varchar(20) NOT NULL,
  `apay_tra_id` varchar(20) DEFAULT NULL,
  `apay_status` varchar(20) DEFAULT 'pending',
  `apay_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin_payment`
--

INSERT INTO `tbl_admin_payment` (`apay_id`, `apay_fee`, `stu_id`, `apay_method`, `apay_tra_id`, `apay_status`, `apay_date`) VALUES
(14, '250', 26, 'SureCash', '3456789RTYUI', 'approved', '2018-11-06'),
(16, '250', 26, 'SureCash', '3456789RTYUI', 'pending', '2018-11-06');

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
(5, 25, 10, '2018-11-06', 'present'),
(6, 26, 10, '2018-11-06', 'present'),
(7, 26, 8, '2018-11-06', 'absent'),
(8, 26, 10, '2018-11-05', 'present'),
(9, 26, 10, '2018-11-06', 'present');

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
(8, 'Spring 2018', 'active'),
(9, 'Summer 2018', 'active'),
(10, 'Fall 2018', 'active');

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
(7, 'Microsoft Office', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum numquam laudantium iusto beatae perspiciatis. Animi similique delectus, ipsum veniam aliquam!', '6', 4500.00, 'active'),
(8, 'Database Managements', 'LLLLorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum numquam laudantium iusto beatae perspiciatis. Animi similique delectus, ipsum veniam aliquam! ', '4', 48000.00, 'unavailable'),
(10, 'C Programming', ' course_statuscourse_status', '2', 5000.00, 'unavailable');

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
  `capply_result_publish` date DEFAULT NULL,
  `capply_ending_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_courseapply`
--

INSERT INTO `tbl_courseapply` (`capply_id`, `stu_id`, `course_id`, `batch_id`, `pay_id`, `capply_result`, `capply_status`, `capply_result_publish`, `capply_ending_date`) VALUES
(1, 25, 10, 10, 22, 'A-', 'Complete', '2018-11-06', '2018-11-30'),
(2, 26, 10, 10, 24, 'A', 'Incomplete', '2018-11-06', '2018-11-07'),
(3, 26, 8, 8, 25, 'B', 'Complete', '2018-11-06', '2018-11-14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inquiry`
--

CREATE TABLE `tbl_inquiry` (
  `inquiry_id` int(11) NOT NULL,
  `stu_id` int(50) DEFAULT NULL,
  `inquiry_details` varchar(300) DEFAULT NULL,
  `inquiry_status` varchar(100) NOT NULL DEFAULT 'unread',
  `inquiry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inquiry`
--

INSERT INTO `tbl_inquiry` (`inquiry_id`, `stu_id`, `inquiry_details`, `inquiry_status`, `inquiry_date`) VALUES
(2, 26, ' es', 'answered', '2018-11-06 19:01:20');

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
(1, '\r\n         abc\r\n         \r\n         ', 'active');

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
  `pay_date` date DEFAULT NULL,
  `pay_approved_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`pay_id`, `pay_paidamount`, `stu_id`, `pay_method`, `pay_tra_id`, `pay_status`, `pay_date`, `pay_approved_date`) VALUES
(22, '5000', 25, 'Rocket', '3652222222544rtdx', 'approved', '2018-11-06', '2018-11-06'),
(23, '5000', 25, 'Rocket', '3652222222544rtdx', 'pending', '2018-11-06', NULL),
(24, '1400', 25, 'Bkash', '3655844564', 'approved', '2018-11-06', '2018-11-06'),
(25, '1200', 26, 'Bkash', '111111111111111ERTD', 'approved', '2018-11-06', '2018-11-06');

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
(1, 8, 'PPPPorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, repudiandae perspiciatis, voluptatem expedita sapiente fugit odio quisquam. Velit non beatae magni aliquid inventore id sapiente saepe consequuntur hic rem, error accusantium labore veniam obcaecati odio dolor omnis maxime voluptate expedita nisi eius quibusdam accusamus rerum? Sed culpa repellendus, excepturi dignissimos? Repellendus blanditiis beatae quasi voluptates, nostrum! Rem, incidunt, nostrum. Tempora deleniti alias ipsam minima veniam dolorum recusandae quos eveniet commodi eos ducimus animi maiores nihil dolorem sint expedita nisi aliquid nobis, laudantium aperiam illum nesciunt iste magni. Vel inventore praesentium cum aliquid debitis ullam recusandae, eaque voluptatibus velit sunt saepe.', '2018-11-06 18:11:39');

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
(1, 'Mofidul Islam', 'Office Attendant', 'back-to-top2.jpg', 'Porag', '2018-11-06 18:17:05', 'active'),
(2, 'Azizul Islam', 'Clerk', 'phone_icon.png', 'Aziz', '2018-11-06 18:17:40', 'active');

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
(25, 'Khayrul Islam', '2018-11-21', 'Male', 'Islam', 'Unmarried', '45678908765434', 'Students', '45278500_551614365309382_407282424305680384_n.jpg', 'Ibraim Khan', 'Kharun Nesa', 'ABCs', 'ABCs', '345678945678900000', '01738298666', 'khayrul1776@gmail.com', 'f333ac7be13a4b3873996ecc965914e6', 'Dhalapara, Ghatail, Tangaillll', 'Dhalapara, Ghatail, Tangail', 'Yes', 'Dhaka Politecnic Institute', '2017-19', 'Microsoft Office', '45645678', 'SSC', 'Dhaka', 'Science', '2012', '4.55', '2018-11-06 16:44:14', 'pending'),
(26, 'Hasan Khan', '2018-11-07', 'Male', 'Islam', 'Unmarried', '', '', NULL, 'Ibraim Khan', 'Somla Begum', 'SHarif', 'SHarif', '0155555555', '01750840217', 'arifsofg@gmail.com', 'b3bd32ef0fac2199db2efb95681a0bb9', 'Dhaka', 'Dhaka', 'Yes', 'Dhaka College', '2014-15', 'Excel ', '2365', 'HSC', 'Dhaka', 'Arts', '2012', '3.75', '2018-11-06 17:44:20', 'pending');

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
-- Indexes for table `tbl_admin_payment`
--
ALTER TABLE `tbl_admin_payment`
  ADD PRIMARY KEY (`apay_id`),
  ADD KEY `stu_id` (`stu_id`);

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
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_account_category`
--
ALTER TABLE `tbl_account_category`
  MODIFY `acc_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_admin_payment`
--
ALTER TABLE `tbl_admin_payment`
  MODIFY `apay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  MODIFY `att_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_batch`
--
ALTER TABLE `tbl_batch`
  MODIFY `batch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_courseapply`
--
ALTER TABLE `tbl_courseapply`
  MODIFY `capply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_inquiry`
--
ALTER TABLE `tbl_inquiry`
  MODIFY `inquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_notice`
--
ALTER TABLE `tbl_notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbl_routine`
--
ALTER TABLE `tbl_routine`
  MODIFY `routine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `stu_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_account`
--
ALTER TABLE `tbl_account`
  ADD CONSTRAINT `tbl_account_ibfk_1` FOREIGN KEY (`acc_cat_id`) REFERENCES `tbl_account_category` (`acc_cat_id`);

--
-- Constraints for table `tbl_admin_payment`
--
ALTER TABLE `tbl_admin_payment`
  ADD CONSTRAINT `tbl_admin_payment_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `tbl_student` (`stu_id`);

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
