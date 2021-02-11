-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 17, 2020 at 04:50 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ima`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`admin_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_ID`, `name`, `username`, `password`) VALUES
(1, 'Mr Admin', 'admin', 'imammalik'),
(4, 'Administrator', 'admin2', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

DROP TABLE IF EXISTS `lesson`;
CREATE TABLE IF NOT EXISTS `lesson` (
  `lesson_ID` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) DEFAULT NULL,
  `topic` varchar(100) DEFAULT NULL,
  `video` varchar(100) DEFAULT NULL,
  `pdf` varchar(100) DEFAULT NULL,
  `class` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`lesson_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`lesson_ID`, `subject`, `topic`, `video`, `pdf`, `class`) VALUES
(7, 'Maths', 'multi', '', '', 'Jss 2'),
(8, 'chem', 'neutron', 'video_535846.3gp', 'doc_633089.pdf', 'ss3'),
(3, 'Maths', 'matrix3', 'video_539274.3gp', 'doc_387469.docx', 'Primary 5'),
(4, 'Maths', 'matrix113', 'video_726626.3gp', 'doc_581216.docx', 'Jss 2'),
(5, 'Maths', 'matrix111', 'video_621723.3gp', 'doc_500450.docx', 'Primary 1'),
(6, 'Eng.', 'Verb', 'video_731470.3gp', 'doc_830651.docx', 'Primary 1'),
(32, 'physics', 'Electrons', 'video_208616.mp4', 'doc_460526.pdf', 'SS3'),
(11, 'm', 'lo', '', '', 'kk'),
(12, 'Maths', 'Verb', 'Image_790664.3gp', '', 'Primary 5'),
(13, 'Maths', 'lo', 'Video_290900.3gp', '', 'Primary 1'),
(23, 'Maths', 'Verb', 'Video_upload/video_712004.3gp', 'PDF_upload/doc_803771.docx', 'Jss 2'),
(16, 'Maths', 'Verb', 'Video_550404.3gp', '', 'Primary 5'),
(17, 'Maths', 'Verb', 'Video_655770.3gp', '', 'Primary 5'),
(19, 'Maths', 'Verb', 'video_423134.3gp', 'doc_574354.docx', 'Primary 5'),
(20, 'Maths', 'Verb', 'video_596586.3gp', 'doc_110232.pptx', 'Jss 2'),
(21, 'Maths', 'Verb', '../Video_upload/video_237233.3gp', '../PDF_upload/doc_256035.docx', 'Jss 3'),
(22, 'physics', 'Verb', 'Video_upload/video_314097.3gp', 'PDF_upload/doc_639947.docx', 'kk'),
(24, 'Maths', 'matrix', 'Video_upload/video_499238.3gp', 'PDF_upload/doc_475580.docx', 'ss3'),
(31, 'Maths', 'new', 'video_147802.mp4', 'doc_579051.pptx', 'Jss 2'),
(26, 'm', 'lovi', 'Video_Upload/Image_739476.3gp', '', 'Jss 3'),
(27, 'physics', 'star', 'Video_Upload/Image_762811.3gp', '', 'Primary 1'),
(28, 'Maths', 'loviw', 'Video_Upload/Image_168922.3gp', '', 'ss3'),
(29, 'chem', 'lovi', 'Video_Upload/Image_872935.mp4', '', 'kk'),
(30, 'Maths', 'Verb', '../Video_upload/video_698850.mp4', '../PDF_upload/doc_376052.docx', 'Primary 5'),
(33, 'Maths', 'matrix', 'video_217237.mp4', 'doc_586975.pdf', 'Primary 5');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `message_ID` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(100) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `receiver` varchar(100) NOT NULL,
  `subject` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`message_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `Student_ID` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(100) DEFAULT NULL,
  `l_name` varchar(100) DEFAULT NULL,
  `class` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Student_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Student_ID`, `f_name`, `l_name`, `class`, `username`, `password`) VALUES
(1, 'Student', 'Me', 'Primary 5', 'stutest21', 'V1RCa1IyVnRUWHBhU0ZwcVlsWkZPUT09'),
(3, 'mm', 'lk', 'Jss 2', 'ue', 'cGFzc3dvcmQ='),
(4, 'Student', 'learn', 'Jss 2', 'mee', 'cGFzc3dvcmQ=');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `Teacher_ID` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(100) DEFAULT NULL,
  `l_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Teacher_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`Teacher_ID`, `f_name`, `l_name`, `email`, `username`, `password`, `phone`) VALUES
(5, 'Mr ', 'Teaher', 'jk@gmail.com', 'test1', 'Y0dGemMzZHZjbVE9', '081'),
(6, 'Mr ', 'teach', 'jkl@gmail.com', 'testeach', 'cGFzc3dvcmQ=', '081316627');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
