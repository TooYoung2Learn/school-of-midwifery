-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2019 at 07:20 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student_result`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `s/n` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(13) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  PRIMARY KEY (`s/n`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`s/n`, `user_id`, `user_name`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `s/n` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` varchar(8) NOT NULL,
  `course_name` varchar(80) NOT NULL,
  `acronym` varchar(8) NOT NULL,
  PRIMARY KEY (`s/n`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`s/n`, `course_id`, `course_name`, `acronym`) VALUES
(1, 'cu01', 'uses of english', 'eng101'),
(2, 'cu02', 'physical anatomy', 'anatomy1'),
(3, 'phar103', 'pharmacology', ''),
(7, 'nur117', 'nursing practice with adults', ''),
(8, 'nurse118', 'nursing leadership and management', '');

-- --------------------------------------------------------

--
-- Table structure for table `courses_registered`
--

CREATE TABLE IF NOT EXISTS `courses_registered` (
  `s/n` int(8) NOT NULL AUTO_INCREMENT,
  `admission_no` varchar(17) NOT NULL,
  `course_id` varchar(15) NOT NULL,
  `scores` int(3) NOT NULL,
  PRIMARY KEY (`s/n`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `courses_registered`
--

INSERT INTO `courses_registered` (`s/n`, `admission_no`, `course_id`, `scores`) VALUES
(1, '2014/04/12345ME', 'cu01', 50),
(2, '2014/04/12345ME', 'cu01', 50),
(3, '2014/04/12345ME', 'cu01', 50),
(4, '2014/04/12345ME', 'cu02', 65),
(5, '2014/04/12345ME', 'phar103', 87),
(6, '2014/04/12345ME', 'nur117', 78),
(7, '2014/04/12345ME', 'nurse118', 55),
(8, '2014/04/12345ME', 'cu01', 54),
(9, '2014/04/12345ME', 'cu02', 99),
(10, '2014/04/12345ME', 'phar103', 54),
(11, '2014/04/12345ME', 'nur117', 39),
(12, '2014/04/12345ME', 'nurse118', 65),
(13, '2014/04/14345ME', 'cu01', 54),
(14, '2014/04/14345ME', 'cu02', 66),
(15, '2014/04/14345ME', 'phar103', 87),
(16, '2014/04/14345ME', 'nur117', 98),
(17, '2014/04/14345ME', 'nurse118', 54);

-- --------------------------------------------------------

--
-- Table structure for table `student_infor`
--

CREATE TABLE IF NOT EXISTS `student_infor` (
  `name_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(35) NOT NULL,
  `middle_name` varchar(35) DEFAULT NULL,
  `sur_name` varchar(35) NOT NULL,
  `admission_no` varchar(17) NOT NULL,
  `remark` varchar(8) NOT NULL,
  PRIMARY KEY (`name_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `student_infor`
--

INSERT INTO `student_infor` (`name_id`, `first_name`, `middle_name`, `sur_name`, `admission_no`, `remark`) VALUES
(1, 'Aliyu', 'Garba', 'Isah', '2014/04/12345ME', 'pass'),
(2, 'mohammed', '', 'Dawa', '2014/04/14345ME', 'pass'),
(3, 'John', '', 'Mike', '2014/04/12765ME', 'pass'),
(4, 'goodwil', 'Garba', 'samuel', '2014/04/23345ME', 'Fail'),
(5, 'emmanue', NULL, 'john', '2014/12354ME', 'pass'),
(6, 'Fati', NULL, 'Dauda', '2014/1242ME', 'pass'),
(7, 'Daniel', NULL, 'baba', '2014/1256ME', 'pass'),
(8, 'Amina', NULL, 'Dooma', '2014/12378', 'pass'),
(9, 'Gogo', NULL, 'Garba', '2014/12789ME', 'pass'),
(10, 'Gogo', NULL, 'Danladi', '2014/13245ME', 'Fail'),
(11, 'sisilia', NULL, 'Dagana', '2014/12657ME', 'pass'),
(12, 'Dora', NULL, 'Afolabi', '2014/34267ME', 'pass'),
(13, 'serah', NULL, 'isa', '2014/54326ME', 'Fail'),
(14, 'Precat', NULL, 'social', '2014/23187ME', 'Fail'),
(15, 'kaziel', NULL, 'timothy', '2014/17553ME', 'fail'),
(17, 'Jumai', NULL, 'Dalladi', '2019/35536ME', 'Fail'),
(18, 'hauta', NULL, 'sheshi', '2014/76443ME', 'fail');

-- --------------------------------------------------------

--
-- Table structure for table `student_score`
--

CREATE TABLE IF NOT EXISTS `student_score` (
  `s/n` int(3) NOT NULL AUTO_INCREMENT,
  `admission_no` varchar(17) NOT NULL,
  `cu01` int(3) NOT NULL,
  `cu02` int(3) NOT NULL,
  `phar103` int(3) NOT NULL,
  `nur117` int(3) NOT NULL,
  `nurse118` int(3) NOT NULL,
  PRIMARY KEY (`s/n`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `student_score`
--

INSERT INTO `student_score` (`s/n`, `admission_no`, `cu01`, `cu02`, `phar103`, `nur117`, `nurse118`) VALUES
(1, '2014/04/12345ME', 23, 34, 56, 87, 67),
(2, '2014/04/14345ME', 33, 65, 60, 39, 54);

-- --------------------------------------------------------

--
-- Table structure for table `years_of_exam`
--

CREATE TABLE IF NOT EXISTS `years_of_exam` (
  `s/n` int(10) NOT NULL AUTO_INCREMENT,
  `years` varchar(10) NOT NULL,
  `set_of_exam` varchar(10) NOT NULL,
  PRIMARY KEY (`s/n`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `years_of_exam`
--

INSERT INTO `years_of_exam` (`s/n`, `years`, `set_of_exam`) VALUES
(2, '2018/2019', '2010'),
(3, '2011/2012', '2011');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
