-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2018 at 05:03 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ksrtc`
--

-- --------------------------------------------------------

--
-- Table structure for table `busdetails`
--

CREATE TABLE IF NOT EXISTS `busdetails` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `typeid` int(11) NOT NULL,
  `regno` varchar(40) NOT NULL,
  `depotid` int(11) NOT NULL,
  `routeid` int(11) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB  DEFAULT CHARSET=hp8 AUTO_INCREMENT=1001 ;

--
-- Dumping data for table `busdetails`
--

INSERT INTO `busdetails` (`bid`, `typeid`, `regno`, `depotid`, `routeid`) VALUES
(12, 0, '   kl r 345', 9, 15),
(143, 0, ' kl 15 2', 9, 17),
(1000, 0, '   kl u 87', 9, 16);

-- --------------------------------------------------------

--
-- Table structure for table `bustype`
--

CREATE TABLE IF NOT EXISTS `bustype` (
  `typeid` int(11) NOT NULL AUTO_INCREMENT,
  `bustype` varchar(40) NOT NULL,
  PRIMARY KEY (`typeid`)
) ENGINE=InnoDB  DEFAULT CHARSET=hp8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `bustype`
--

INSERT INTO `bustype` (`typeid`, `bustype`) VALUES
(4, 'ORDINARY'),
(5, 'LIMITED STOP ORDINARY'),
(6, 'TOWN TO TOWN ORDINARY'),
(7, 'FAST PASSENGER'),
(8, 'LIMITED STOP FAST PASSENGER'),
(9, 'POINT TO POINT FAST PASSENGER'),
(10, 'SUPER FAST'),
(11, 'SUPER EXPRESS'),
(12, 'SUPER DELUXE'),
(13, 'GARUDA KING CLASS VOLVO'),
(14, 'LOW FLOOR AC VOLVO'),
(15, 'SILVER LINE JET'),
(16, 'LOW FLOOR NON AC'),
(17, 'ANANTHAPURI FAST'),
(18, 'GARUDA MAHARAJA SCANIA');

-- --------------------------------------------------------

--
-- Table structure for table `courier`
--

CREATE TABLE IF NOT EXISTS `courier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(40) NOT NULL,
  `scnct` int(11) NOT NULL,
  `rcnct` int(11) NOT NULL,
  `item` varchar(40) NOT NULL,
  `weight` float NOT NULL,
  `delivery` varchar(40) NOT NULL,
  `amount` double NOT NULL,
  `from` int(11) NOT NULL,
  `to` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=hp8 AUTO_INCREMENT=88 ;

--
-- Dumping data for table `courier`
--

INSERT INTO `courier` (`id`, `date`, `scnct`, `rcnct`, `item`, `weight`, `delivery`, `amount`, `from`, `to`, `status`, `uid`) VALUES
(66, '18/03/18', 2147483647, 2147483647, 'Electronics', 40000, 'ndd', 1025, 7, 20, 3, 34),
(67, '18/03/18', 2147483647, 2147483647, 'Electronics', 231, 'ndd', 50, 9, 24, 1, 34),
(79, '19/03/18', 11, 11, 'Electronics', 11, 'sdd', 60, 8, 23, 0, 34),
(80, '18/2/18', 421, 124124, 'food', 34, 'sdd', 60, 7, 20, 3, 34),
(81, '18/4/18', 421, 124124, 'food', 34, 'sdd', 60, 20, 7, 3, 34),
(82, '18/2/18', 421, 124124, 'food', 34, 'sdd', 60, 20, 7, 4, 12),
(83, '18/1/18', 421, 124124, 'food', 34, 'sdd', 60, 7, 20, 3, 12),
(84, '19/4/18', 421, 124124, 'food', 34, 'sdd', 60, 20, 7, 2, 12),
(85, '31/03/18', 22, 22, 'Electronics', 33, 'ndd', 30, 7, 7, 0, 12),
(86, '124', 142, 142, '412', 412, '142', 124, 412, 41, 412, 2),
(87, '18/2/18', 421, 124124, 'food', 34, 'sdd', 60, 7, 20, 3, 34);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `id` varchar(20) NOT NULL,
  `dstname` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `dstname`) VALUES
('ALP', 'ALAPPUZHA'),
('BNG', 'BANGALORE'),
('EKM', 'ERNAKULAM'),
('IDK', 'IDUKKI'),
('KGD', 'KASARAGOD'),
('KKD', 'KOZHIKODE'),
('KLM', 'KOLLAM'),
('KNR', 'KANNUR'),
('KTM', 'KOTTAYAM'),
('MLP', 'MALAPPURAM'),
('PLK', 'PALAKKAD'),
('PTA', 'PATHANAMTHITTA'),
('TSR', 'THRISSUR'),
('TVM', 'THIRUVANANTHAPURAM'),
('WND', 'WAYANAD');

-- --------------------------------------------------------

--
-- Table structure for table `dregister`
--

CREATE TABLE IF NOT EXISTS `dregister` (
  `depotid` int(11) NOT NULL AUTO_INCREMENT,
  `depotname` varchar(20) NOT NULL,
  `district` varchar(40) NOT NULL,
  `lid` int(11) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`depotid`)
) ENGINE=InnoDB  DEFAULT CHARSET=hp8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `dregister`
--

INSERT INTO `dregister` (`depotid`, `depotname`, `district`, `lid`, `contact`, `email`) VALUES
(7, 'ADOOR', 'PTA', 13, 473, 'adr@kerala.gov.in '),
(8, 'ALAPPUZHA ', 'ALP', 14, 477, 'alp@kerala.gov.in'),
(9, 'ALUVA', 'EKM', 15, 484, 'alv@kerala.gov.in '),
(10, 'ANAYARA ', 'TVM', 16, 471, 'anr.ksrtc@kerala.gov'),
(11, 'ANKAMALI', 'EKM', 17, 484, 'ank@kerala.gov.in'),
(12, 'ARYANAD', 'TVM', 18, 472, 'ard@kerala.gov.in'),
(13, 'ARYANKAVU', 'KLM', 19, 475, 'ark@kerala.gov.in'),
(14, 'ATTINGAL', 'TVM', 20, 470, 'atl@kerala.gov.in'),
(15, 'BANGALORE', 'BNG', 21, 802, 'bng.ksrtc@kerala.gov'),
(16, 'CHADAYAMANGALAM', 'KLM', 22, 474, 'cdm@kerala.gov.in'),
(17, 'CHALAKUDY', 'TSR', 23, 480, 'cld@kerala.gov.in'),
(18, 'CHANGANASSERY', 'KTM', 24, 481, 'chr@kerala.gov.in'),
(19, 'CHATHANNUR', 'KLM', 25, 474, 'cht@kerala.gov.in'),
(20, 'CHENGANOOR', 'ALP', 26, 479, 'cgr@kerala.gov.in'),
(21, 'CHERTHALA', 'ALP', 27, 478, 'ctl@kerala.gov.in'),
(22, 'CHITOOR', 'PLK', 28, 492, 'ctr@kerala.gov.in'),
(23, 'EDATHUVA', 'ALP', 29, 477, 'edt@kerala.gov.in'),
(24, 'EENCHAKKAL', 'TVM', 30, 471, 'ekl@kerala.gov.in'),
(25, 'EERATTUPETTAH', 'KTM', 31, 482, 'etp@kerala.gov.in');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` varchar(500) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=hp8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `date`, `name`, `email`, `rating`, `comment`) VALUES
(5, '04/03/18', 'casc', 'a@mail.vom', 3, 'xxsaxasx'),
(6, '06/03/18', 'Arunkumar', 'arunkumar@gmail.com', 5, 'its very helpful.........\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(20) NOT NULL,
  `pswd` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB  DEFAULT CHARSET=hp8 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`lid`, `uname`, `pswd`, `role`) VALUES
(10, 'admin', '123', 'ADMIN'),
(12, 'mocha ', '123', 'USER'),
(13, 'adoor', '123', 'DEPOT'),
(14, 'alappuzha', '123', 'DEPOT'),
(15, 'aluva', '123', 'DEPOT'),
(16, 'anayara', '123', 'DEPOT'),
(17, 'ankamali', '123', 'DEPOT'),
(18, 'aryanad', '123', 'DEPOT'),
(19, 'aryankavu', '123', 'DEPOT'),
(20, 'attingal', '123', 'DEPOT'),
(21, 'bangalore', '123', 'DEPOT'),
(22, 'chadayamangalam', '123', 'DEPOT'),
(23, 'chalakudy', '123', 'DEPOT'),
(24, 'changanassery', '123', 'DEPOT'),
(25, 'chathannur', '123', 'DEPOT'),
(26, 'CHENGANOOR', '123', 'DEPOT'),
(27, 'CHERTHALA', '123', 'DEPOT'),
(28, 'CHITOOR', '123', 'DEPOT'),
(29, 'EDATHUVA', '123', 'DEPOT'),
(30, 'EENCHAKKAL', '123', 'DEPOT'),
(31, 'EERATTUPETTAH', '123', 'DEPOT'),
(32, 't', 'y', 'USER'),
(33, 'a', 'a', 'USER'),
(34, 'arunkumar', 'mochaman', 'USER');

-- --------------------------------------------------------

--
-- Table structure for table `mailbox`
--

CREATE TABLE IF NOT EXISTS `mailbox` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(40) NOT NULL,
  `message` text NOT NULL,
  `subject` varchar(120) NOT NULL,
  `lid` int(11) NOT NULL,
  `depotid` int(11) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=hp8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `mailbox`
--

INSERT INTO `mailbox` (`mid`, `date`, `message`, `subject`, `lid`, `depotid`) VALUES
(1, '17/01/18', 'hii man\r\ni am mocha', 'COMPLAINT', 12, 11),
(2, '18/01/18', 'gigaagi...', 'COMPLAINT', 12, 11),
(3, '18/01/18', 'sss', 'ENQUIRY', 12, 9),
(4, '18/01/18', 'hello guys !!', 'ENQUIRY', 12, 11),
(5, '19/01/18', 'sadasfasfsaf', 'ENQUIRY', 12, 11),
(6, '19/02/18', 'yo guys i am the best over here,\r\nYou can be more grateful than be but i wont let you be.hehe !!\r\n#ManiK bHaa@shA.', 'GRIEVANCE OF PASSENGER', 12, 9),
(7, '06/03/18', 'IS there any bus to Alappuzha @11.30 am?', 'ENQUIRY', 34, 8),
(9, '06/04/18', 'go man', 'REPLY', 12, 9);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `nid` int(11) NOT NULL AUTO_INCREMENT,
  `did` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `color` varchar(20) NOT NULL,
  `body` varchar(500) NOT NULL,
  PRIMARY KEY (`nid`)
) ENGINE=InnoDB  DEFAULT CHARSET=hp8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`nid`, `did`, `date`, `title`, `color`, `body`) VALUES
(2, 9, '03/03/18', 'India strikes down pak', '#ff0000', 'ddqwfdwqdqfdqwfqwfqwfqw\r\nwq\r\nfwq\r\nfqw\r\nf\r\nqwf\r\nqf\r\nqw\r\nfqw'),
(3, 9, '03/03/18', 'Yoman', '#000000', 'aaaaaaaaaaa aaaaaaaa aaaaaaaa  jjj jjjjjjjjjjjjjjjj jjjjjjjjjjjjjjjjjj  jjjjjjjjjjjjjj jjjjjjjjjjjjjj jjjjjjjjjjjjjjjjjjjjj jjjjjjjjjjjjjj jjjjjjjjjjjjjjjjjjj jjjjjjjjjj  jjjjjjjjjjjjjjjjjjjjjjjjjjjj'),
(4, 9, '03/03/18', 'asdD', '#9999', 'xsadghngbvsas'),
(5, 9, '03/03/18', 'asdD', '#9999', 'xsadghngbvsas'),
(6, 9, '04/03/18', 'asdD', '#9999', 'xsadghngbvsas'),
(7, 9, '01/03/18', 'asdD', '#FFFFF', 'xsadghngbvsas');

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE IF NOT EXISTS `routes` (
  `routeid` int(11) NOT NULL AUTO_INCREMENT,
  `rname` varchar(40) NOT NULL,
  PRIMARY KEY (`routeid`)
) ENGINE=InnoDB  DEFAULT CHARSET=hp8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`routeid`, `rname`) VALUES
(1, 'KOTTAYAM-ERNAKULAM'),
(2, 'KUMARAKOM-ERNAKULAM'),
(3, 'ERNAKULAM-VAIKOM'),
(6, 'KOTTAYAM-ETTUMANOOR'),
(11, 'KASARGOD - VAIKOM'),
(14, ' KOTTAYAM-ETTUMANOOR'),
(15, '  KOTTAYAM-ETTUMANOOR'),
(16, '   KOTTAYAM-ETTUMANOOR'),
(17, ' KUMARAKOM-ERNAKULAM');

-- --------------------------------------------------------

--
-- Table structure for table `stopdetails`
--

CREATE TABLE IF NOT EXISTS `stopdetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bid` int(11) NOT NULL,
  `stopid` int(11) NOT NULL,
  `time` time NOT NULL,
  `routeid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=hp8 AUTO_INCREMENT=147 ;

--
-- Dumping data for table `stopdetails`
--

INSERT INTO `stopdetails` (`id`, `bid`, `stopid`, `time`, `routeid`, `uid`) VALUES
(138, 12, 46, '01:59:00', 15, 1),
(139, 12, 44, '02:59:00', 15, 1),
(140, 12, 45, '03:59:00', 15, 1),
(141, 12, 45, '02:05:00', 15, 4),
(142, 12, 44, '03:05:00', 15, 4),
(143, 12, 46, '04:06:00', 15, 4),
(144, 143, 46, '08:08:00', 17, 2),
(145, 143, 47, '06:07:00', 17, 2),
(146, 143, 45, '07:07:00', 17, 2);

-- --------------------------------------------------------

--
-- Table structure for table `stops`
--

CREATE TABLE IF NOT EXISTS `stops` (
  `stopid` int(11) NOT NULL AUTO_INCREMENT,
  `stopname` varchar(40) NOT NULL,
  PRIMARY KEY (`stopid`)
) ENGINE=InnoDB  DEFAULT CHARSET=hp8 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `stops`
--

INSERT INTO `stops` (`stopid`, `stopname`) VALUES
(44, 'KOTTAYAM'),
(45, 'ETTUMANOOR'),
(46, 'ERNAKULAM'),
(47, 'KUMARAKOM'),
(48, 'VAIKOM'),
(68, 'KASARGOD');

-- --------------------------------------------------------

--
-- Table structure for table `uregister`
--

CREATE TABLE IF NOT EXISTS `uregister` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `lid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=hp8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `uregister`
--

INSERT INTO `uregister` (`id`, `name`, `age`, `gender`, `dob`, `contact`, `email`, `lid`) VALUES
(8, 'mocha', 21, 'male', '18/7/1997', 21312312, 'dddd4', 12),
(9, 'a', 0, '', '0/0/0', 0, 'r', 32),
(10, 'a', 0, 'male', '0/0/0', 0, 'a', 33),
(11, 'Arunkumar', 21, 'male', '17/11/1996', 8086238626, 'arun94202@gmail.com', 34);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
