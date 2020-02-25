-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2020 at 07:07 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feecollectionsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `id` int(255) NOT NULL,
  `stdntRoll` int(8) NOT NULL,
  `date` date NOT NULL,
  `feeComment` varchar(200) NOT NULL,
  `admitionFee` int(7) NOT NULL,
  `CourseFee` int(7) NOT NULL,
  `registrationFee` int(7) NOT NULL,
  `certificateFee` int(5) NOT NULL,
  `examinationFee` int(5) NOT NULL,
  `lateFee` int(5) NOT NULL,
  `booksFee` int(5) NOT NULL,
  `idCardFee` int(5) NOT NULL,
  `libraryCardFee` int(4) NOT NULL,
  `tcFee` int(5) NOT NULL,
  `ibitHostel` int(5) NOT NULL,
  `moneyReceiptFee` int(4) NOT NULL,
  `others` int(7) NOT NULL,
  `totalFee` int(7) NOT NULL,
  `deleteStatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`id`, `stdntRoll`, `date`, `feeComment`, `admitionFee`, `CourseFee`, `registrationFee`, `certificateFee`, `examinationFee`, `lateFee`, `booksFee`, `idCardFee`, `libraryCardFee`, `tcFee`, `ibitHostel`, `moneyReceiptFee`, `others`, `totalFee`, `deleteStatus`) VALUES
(7, 313235, '2020-01-15', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20, 0, 20, 0),
(8, 845151, '2020-01-16', 'à§¨à§«à§¦à§¦ à¦Ÿà¦¾à¦•à¦¾ à¦›à¦¾à§œ à¦¦à§‡à¦“à§Ÿà¦¾ à¦¯à§‡à¦¤à§‡ à¦ªà¦¾à¦°à§‡à¥¤', 4000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4000, 0),
(9, 845154, '2020-01-16', '', 0, 0, 0, 0, 1500, 0, 0, 0, 0, 0, 0, 0, 0, 1500, 0),
(10, 313235, '2020-01-16', 'à¦¬à¦•à§‡à§Ÿà¦¾ à¦¸à¦¾à¦®à¦¨à§‡ à¦®à¦¾à¦¸à§‡à¦° à§§à§« à¦¤à¦¾à¦°à¦¿à¦–à§‡à¦° à¦­à¦¿à¦¤à¦°à§‡ à¦ªà¦°à¦¿à¦¶à§‹à¦§ à¦•à¦°à¦¾ à¦¹à¦¬à§‡à¥¤', 0, 3000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3000, 0),
(11, 1111, '2020-01-16', 'à¦¬à¦•à§‡à§Ÿà¦¾ à¦¸à¦¾à¦®à¦¨à§‡ à¦®à¦¾à¦¸à§‡à¦° à§§à§« à¦¤à¦¾à¦°à¦¿à¦–à§‡à¦° à¦­à¦¿à¦¤à¦°à§‡ à¦ªà¦°à¦¿à¦¶à§‹à¦§ à¦•à¦°à¦¾ à¦¹à¦¬à§‡à¥¤', 0, 5000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5000, 0),
(12, 845151, '2020-01-16', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20, 0, 20, 0);

-- --------------------------------------------------------

--
-- Table structure for table `lms_student`
--

CREATE TABLE `lms_student` (
  `student_id` int(100) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `fathersName` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `PhoneNumber` text NOT NULL,
  `student_roll` int(10) NOT NULL,
  `student_image` varchar(255) NOT NULL,
  `student_technology` text NOT NULL,
  `deleteStatus` int(1) NOT NULL,
  `activeStatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lms_student`
--

INSERT INTO `lms_student` (`student_id`, `student_name`, `fathersName`, `Address`, `PhoneNumber`, `student_roll`, `student_image`, `student_technology`, `deleteStatus`, `activeStatus`) VALUES
(8, 'zahid hasan', '', '', '', 845151, 'assets/frontend/img/student/1.jpg', 'Computer', 0, 1),
(9, 'nahid hasan', '', '', '', 313235, 'assets/frontend/img/student/3.jpg', 'Computer', 0, 1),
(10, 'Joynab Khatun', '', '', '', 845154, 'assets/frontend/img/student/j.jpg', 'Computer', 0, 1),
(11, 'Jamal', '', '', '', 1111, 'assets/frontend/img/student/default.jpg', 'Computer', 0, 1),
(12, 'kamal', '', '', '', 1112, 'assets/frontend/img/student/default.jpg', 'Computer', 0, 1),
(13, 'nazir', '', '', '', 1113, 'assets/frontend/img/student/default.jpg', 'Computer', 0, 0),
(14, 'sultan', '', '', '', 1114, 'assets/frontend/img/student/default.jpg', 'Electrical', 0, 1),
(15, 'kamal', '', '', '', 1115, 'assets/frontend/img/student/default.jpg', 'Civil', 1, 1),
(16, 'Jamal', '', '', '', 1116, 'assets/frontend/img/student/default.jpg', 'Civil', 0, 1),
(17, 'elius', '', '', '', 1117, 'assets/frontend/img/student/default.jpg', 'Electrical', 0, 0),
(18, 'selim', '', '', '', 1118, 'assets/frontend/img/student/default.jpg', 'Civil', 0, 1),
(19, 'Al amin', '', '', '', 1119, 'assets/frontend/img/student/default.jpg', 'Computer', 0, 1),
(20, 'Atul habib', '', '', '', 1120, 'assets/frontend/img/student/default.jpg', 'Electrical', 0, 1),
(21, 'abdul alim', '', '', '', 1121, 'assets/frontend/img/student/default.jpg', 'Electrical', 0, 1),
(22, 'Jakiya sultana', '', '', '', 1122, 'assets/frontend/img/student/default.jpg', 'Electrical', 0, 1),
(23, 'Shahar ali', '', '', '', 1123, 'assets/frontend/img/student/default.jpg', 'Electrical', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(8) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(80) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_level` tinyint(1) NOT NULL,
  `activation_status` tinyint(1) NOT NULL,
  `deleteStatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_image`, `user_name`, `user_email`, `user_password`, `user_level`, `activation_status`, `deleteStatus`) VALUES
(68, 'assets/backend/img/user/1.jpg', 'Zahid Hasan', 'zahid@gmail.com', 'admin', 1, 1, 0),
(69, 'assets/backend/img/user/ibit-logo-new-red-new-full-copy----------gif-version.gif', 'IBIT', 'ibit@ibf.com', 'admin', 3, 0, 0),
(70, 'assets/backend/img/user/default.jpg', 'iitb', 'iitb@gmail.com', 'admin', 0, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lms_student`
--
ALTER TABLE `lms_student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fee`
--
ALTER TABLE `fee`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `lms_student`
--
ALTER TABLE `lms_student`
  MODIFY `student_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
