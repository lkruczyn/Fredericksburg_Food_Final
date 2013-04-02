-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2013 at 05:33 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `restaurant_reviews`
--

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE IF NOT EXISTS `restaurants` (
  `Name` varchar(50) NOT NULL,
  `Street_Number` int(11) DEFAULT NULL,
  `Street_Name` varchar(40) NOT NULL,
  `Area` varchar(40) NOT NULL,
  `Phone` int(10) DEFAULT NULL,
  `Has_Bar` char(1) NOT NULL DEFAULT 'U',
  `Open_Past_10` char(1) NOT NULL DEFAULT 'U',
  `Accepts_EagleOne` char(1) NOT NULL DEFAULT 'U',
  `Price_Rating` int(11) NOT NULL DEFAULT '1',
  `Avg_Rating` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`Name`, `Street_Number`, `Street_Name`, `Area`, `Phone`, `Has_Bar`, `Open_Past_10`, `Accepts_EagleOne`, `Price_Rating`, `Avg_Rating`) VALUES
('Seafood Place', 22222, 'Waffle Way', 'Dahlgren', 123, 'U', 'U', 'U', 1, 1),
('', 0, '', '', 0, 'U', 'U', 'U', 1, 1),
('test', 0, '1113', 'test', 0, 'U', 'U', 'U', 1, 1),
('Testing Restaurant', 65820, 'H Street', 'Fredericksburg', 555, 'U', 'U', 'U', 1, 1),
('Chipotle', 67800, 'Long Street', 'Stafford', 2147483647, 'U', 'U', 'U', 1, 1),
('Red Lobster', 67111, 'River Road', 'Fredericksburg', 2147483647, 'U', 'U', 'U', 1, 1),
('Baskin & Robbins', 7462, 'Ice Cream Way', 'Dahlgren', 2147483647, 'U', 'U', 'U', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `Restaurant_Name` varchar(50) NOT NULL,
  `Reviewed_By` varchar(30) NOT NULL,
  `Num_Stars` int(11) NOT NULL DEFAULT '1',
  `Price_Rating` int(11) NOT NULL DEFAULT '1',
  `Review_Text` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`Restaurant_Name`, `Reviewed_By`, `Num_Stars`, `Price_Rating`, `Review_Text`) VALUES
('Burger King', 'admin', 1, 1, ''),
('Seafood Place', 'admin', 1, 1, 0x49742077617320616d617a696e6720776f7720736f20676f6f64),
('', 'admin', 1, 1, ''),
('test', 'admin', 1, 1, 0x74657374),
('Testing Restaurant', 'admin', 1, 1, 0x616c73646b6a66616c736a64666c3b6173),
('Chipotle', 'admin', 1, 1, 0x616b7366646a613b646b6a6661646a666173646b6a663b61646b6664613b646a663b616a64613b),
('Red Lobster', 'admin', 1, 1, 0x476f6f6420736561666f6f64),
('Red Lobster', 'admin', 4, 3, 0x457870656e736976652062757420666f6f6420697320676f6f64),
('Baskin & Robbins', 'admin', 1, 1, 0x49206c696b652069636520637265616d),
('Red Lobster', 'admin', 3, 4, 0x49206c696b652069636520637265616d20746f6f),
('Baskin & Robbins', 'admin', 4, 3, 0x74657374);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `isAdmin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`username`, `password`, `isAdmin`) VALUES
('admin', 'password', 1),
('bob', 'marley', 0),
('newAccount', 'goodpassword', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
