-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 29, 2019 at 09:10 PM
-- Server version: 5.7.23
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
-- Database: `quizdbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
CREATE TABLE IF NOT EXISTS `answers` (
  `aid` int(250) NOT NULL AUTO_INCREMENT,
  `answer` varchar(250) DEFAULT NULL,
  `ans_id` int(250) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`aid`, `answer`, `ans_id`) VALUES
(1, 'Latin', 1),
(2, 'French', 1),
(3, 'Sanskrit', 1),
(4, 'German', 1),
(5, 'Charles Babbage', 2),
(9, 'Marlin Bundo', 3),
(13, 'First In First Out', 4),
(19, 'Personal Computers', 5),
(6, 'Bob Marley', 2),
(7, 'Oma Rosa', 2),
(8, 'Hugh Hefner', 2),
(10, 'Alan Turing', 3),
(11, 'Billy Piper', 3),
(12, 'David Tenant', 3),
(14, 'Lots in First Out', 4),
(15, 'Lost in Fist Out', 4),
(16, 'Last in First Out', 4),
(17, 'Personal Calculators', 5),
(18, 'Private Computationals', 5),
(20, 'Private Calculators\r\n', 5);

-- --------------------------------------------------------

--
-- Table structure for table `answers_2`
--

DROP TABLE IF EXISTS `answers_2`;
CREATE TABLE IF NOT EXISTS `answers_2` (
  `aid` int(250) NOT NULL AUTO_INCREMENT,
  `answer` varchar(250) DEFAULT NULL,
  `ans_id` int(250) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers_2`
--

INSERT INTO `answers_2` (`aid`, `answer`, `ans_id`) VALUES
(1, '(a) 10', 1),
(2, '(b) 20', 1),
(3, '(c) 30', 1),
(4, '(d) 40', 1),
(5, '(a) 100', 2),
(6, '(b) 200', 2),
(7, '(c) 1', 2),
(8, '(d) 0', 2),
(9, '(a) infinity', 3),
(10, '(b) googol', 3),
(11, '(c) googolplex', 3),
(12, 'd) gram', 3),
(13, '(a) 1 followed by hundred zeros', 4),
(14, '(b) 1 followed by thousand zeros', 4),
(15, '(c) 1 followed by ten thousand zeros', 4),
(16, '(d) 1 followed by 1 lakh zeros', 4),
(17, '(a) Hindu Arabic system', 5),
(18, '(b) Roman', 5),
(19, '(c) Egyptian', 5),
(20, '(d) Mesopotamia', 5);

-- --------------------------------------------------------

--
-- Table structure for table `answers_3`
--

DROP TABLE IF EXISTS `answers_3`;
CREATE TABLE IF NOT EXISTS `answers_3` (
  `aid` int(250) NOT NULL AUTO_INCREMENT,
  `answers` varchar(250) DEFAULT NULL,
  `ans_id` int(250) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers_3`
--

INSERT INTO `answers_3` (`aid`, `answers`, `ans_id`) VALUES
(1, 'Great Pyrenees', 1),
(2, 'Mastiff', 1),
(3, 'Great Dane', 1),
(4, 'Saint Bernard', 1),
(5, 'Pekingese', 2),
(6, 'Lhasa Apso', 2),
(7, 'Tibetan Spaniel', 2),
(8, 'Schipperke', 2),
(9, 'Irish Setter', 3),
(10, 'Cocker Spaniel', 3),
(11, 'Vizsla', 3),
(12, 'Golden Retriever', 3),
(13, 'Pomeranian', 4),
(14, 'Pekingese', 4),
(15, 'Papillon', 4),
(16, 'Maltese', 4),
(17, 'Basenji', 5),
(18, 'Dalmatian', 5),
(19, 'Belgian Malinois', 5),
(20, 'Great Dane', 5);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `qid` int(250) NOT NULL AUTO_INCREMENT,
  `question` varchar(250) DEFAULT NULL,
  `ans_id` int(250) DEFAULT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `question`, `ans_id`) VALUES
(1, 'The term Computer is derived from...?', 1),
(2, 'Who is the father of Computer? ', 5),
(3, 'Who is the father of Computer science? ', 10),
(4, 'LIFO stands for?', 16),
(5, 'What is full form of PC?', 19);

-- --------------------------------------------------------

--
-- Table structure for table `questions_2`
--

DROP TABLE IF EXISTS `questions_2`;
CREATE TABLE IF NOT EXISTS `questions_2` (
  `qid` int(250) NOT NULL AUTO_INCREMENT,
  `question` varchar(250) DEFAULT NULL,
  `ans_id` int(250) DEFAULT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions_2`
--

INSERT INTO `questions_2` (`qid`, `question`, `ans_id`) VALUES
(1, 'How many digits are there in Hindu-Arabic System?', 1),
(2, 'Among the following which natural number has no predecessor?', 7),
(3, 'Which among the following is the largest known number in the world?', 11),
(4, 'What does 1 googol means?', 13),
(5, 'In which number system, there is no symbol for zero?', 18);

-- --------------------------------------------------------

--
-- Table structure for table `questions_3`
--

DROP TABLE IF EXISTS `questions_3`;
CREATE TABLE IF NOT EXISTS `questions_3` (
  `qid` int(250) NOT NULL AUTO_INCREMENT,
  `question` varchar(250) DEFAULT NULL,
  `ans_id` int(250) DEFAULT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions_3`
--

INSERT INTO `questions_3` (`qid`, `question`, `ans_id`) VALUES
(1, 'Drawings of this huge dog were on Egyptian monuments 5,000 years ago.', 2),
(2, 'Which dog has a holy history?', 6),
(3, 'This popular family pet was first bred by Lord Tweedmouth to be the ultimate Scottish hunting dog.', 12),
(4, 'This \"lion dog\" often snores!\r\n', 2),
(5, 'Fire fighters love this dog.', 18);

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

DROP TABLE IF EXISTS `signin`;
CREATE TABLE IF NOT EXISTS `signin` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`id`, `name`, `password`) VALUES
(4, 'sawan', '123'),
(5, 'Esha', '123456'),
(6, 'anubhav', 'abdbbd01@'),
(7, 'abc', 'a'),
(8, 'odd', 'me'),
(14, 'onkar', 'onkar'),
(10, 'supriya ', 'sawan'),
(11, 'anubhav', 'anubhav'),
(12, 'rbadwe', 'admin'),
(13, 'manjusha', 'abcd1234'),
(15, 'jerry', 'jerry'),
(16, 'oo', '0000'),
(17, 'absd', '2232'),
(18, 'prasad', 'supriya'),
(19, 'rbadwe', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `tetristable`
--

DROP TABLE IF EXISTS `tetristable`;
CREATE TABLE IF NOT EXISTS `tetristable` (
  `name` varchar(255) DEFAULT NULL,
  `score` int(255) DEFAULT NULL,
  `level` int(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tetristable`
--

INSERT INTO `tetristable` (`name`, `score`, `level`) VALUES
('sawan', 150, 1),
('sawan', 350, 2),
('sawan', 300, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(250) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) DEFAULT NULL,
  `totalques` int(250) DEFAULT NULL,
  `answercorrect` int(250) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usersessionss`
--

DROP TABLE IF EXISTS `usersessionss`;
CREATE TABLE IF NOT EXISTS `usersessionss` (
  `name` varchar(255) NOT NULL,
  `u_q_id` int(255) NOT NULL,
  `u_a_id` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usersessionss`
--

INSERT INTO `usersessionss` (`name`, `u_q_id`, `u_a_id`) VALUES
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 1),
('Esha', 5, 1),
('Esha', 5, 1),
('Esha', 5, 1),
('anubhav', 5, 1),
('sawan', 5, 1),
('sawan', 5, 1),
('sawan', 5, 1),
('abc', 5, 1),
('sawan', 5, 1),
('sawan', 5, 1),
('sawan', 5, 1),
('sawan', 5, 1),
('sawan', 5, 1),
('sawan', 5, 1),
('supriya', 5, 1),
('sawan', 5, 1),
('sawan', 5, 2),
('', 5, 2),
('sawan', 5, 2),
('sawan', 5, 2),
('sawan', 5, 2),
('sawan', 5, 3),
('sawan', 5, 30),
('sawan', 5, 30),
('sawan', 5, 30),
('sawan', 5, 30),
('sawan', 5, 30),
('sawan', 5, 30),
('sawan', 5, 30),
('sawan', 5, 40),
('sawan', 5, 50),
('sawan', 5, 50),
('sawan', 5, 50),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 40),
('sawan', 5, 40),
('sawan', 5, 30),
('sawan', 5, 50),
('sawan', 5, 40),
('sawan', 5, 30),
('sawan', 5, 40),
('sawan', 5, 50),
('supriya', 5, 50),
('supriya', 5, 50),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 10),
('sawan', 5, 10),
('sawan', 5, 10),
('sawan', 5, 10),
('sawan', 5, 10),
('sawan', 5, 10),
('sawan', 5, 10),
('sawan', 5, 10),
('sawan', 5, 50),
('sawan', 5, 20),
('sawan', 5, 50),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('anubhav', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('rbadwe', 5, 20),
('rbadwe', 5, 0),
('manjusha', 5, 20),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('onkar', 5, 0),
('onkar', 5, 0),
('onkar', 5, 0),
('onkar', 5, 0),
('onkar', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('Esha', 5, 0),
('jerry', 5, 30),
('jerry', 5, 50),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('prasad', 5, 0),
('prasad', 5, 0),
('rbadwe', 5, 0),
('rbadwe', 5, 0),
('rbadwe', 5, 0),
('rbadwe', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('sawan', 5, 0),
('rbadwe', 5, 0),
('rbadwe', 5, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
