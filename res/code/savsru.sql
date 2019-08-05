-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2017 at 10:32 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `savsru`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_order`(IN order_id int,item_id int,item_name varchar(50),quantity int)
begin
insert into order_details5 values(order_id,item_id,item_name,quantity);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `take`(IN order_id int,IN item_id int,IN quantity int)
BEGIN
INSERT INTO order_details5(order_id,item_id,quantity) VALUES(order_id,item_id,quantity);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `take_order`(IN order_id int,IN item_id int,IN quantity int)
BEGIN
INSERT into order_details5 VALUES(order_id,item_id,quantity);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
  `bill_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `order_id`, `total_price`) VALUES
(1, 111, 1560),
(2, 1, 225),
(3, 111, 0),
(4, 1, 1860),
(5, 1, 0),
(6, 2, 2445),
(7, 2, 0),
(8, 3, 1140),
(9, 111, 0),
(10, 111, 0),
(11, 111, 0),
(12, 111, 0),
(13, 111, 0),
(14, 111, 0),
(15, 111, 0),
(20, 1, 225),
(21, 1, 0),
(22, 1, 1575),
(23, 1, 0),
(24, 4, 750),
(25, 4, 0),
(26, 3, 1035),
(27, 2, 1890),
(28, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `delivered_orders`
--

CREATE TABLE IF NOT EXISTS `delivered_orders` (
  `order_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `delivered_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivered_orders`
--

INSERT INTO `delivered_orders` (`order_id`, `item_id`, `quantity`, `delivered_time`) VALUES
(3, 17, 3, '2017-12-01 02:53:29'),
(3, 8, 3, '2017-12-01 04:32:07');

-- --------------------------------------------------------

--
-- Table structure for table `manager5`
--

CREATE TABLE IF NOT EXISTS `manager5` (
  `manager_id` int(11) NOT NULL DEFAULT '0',
  `manager_name` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `phone_num` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager5`
--

INSERT INTO `manager5` (`manager_id`, `manager_name`, `password`, `phone_num`) VALUES
(11, 'kiran', 'kapachu', 9986733967),
(12, 'ajay kashyap', 'ajay;', 9980670913);

-- --------------------------------------------------------

--
-- Table structure for table `menu5`
--

CREATE TABLE IF NOT EXISTS `menu5` (
  `item_id` int(11) NOT NULL DEFAULT '0',
  `item_name` varchar(50) DEFAULT NULL,
  `item_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu5`
--

INSERT INTO `menu5` (`item_id`, `item_name`, `item_price`) VALUES
(1, 'south meals', 150),
(2, 'north meals', 130),
(3, 'veg friedrice', 100),
(4, 'veg noodles', 120),
(5, 'chicken biriyani', 180),
(6, 'tandori', 250),
(7, 'fish kabab', 150),
(8, 'egg friedrice', 120),
(9, 'death by chocolate', 250),
(10, 'hot chocolate fudge', 250),
(11, 'tiramisu', 150),
(12, 'mousse', 180),
(13, 'golden baby corn', 150),
(14, 'gobi manchurian', 130),
(15, 'paneer 65', 150),
(16, 'chilly mushroom', 120),
(17, 'lemon chicken', 180),
(18, 'pepper chicken', 190),
(19, 'fish biriyani', 250),
(20, 'mutton biriyani', 230);

-- --------------------------------------------------------

--
-- Table structure for table `order5`
--

CREATE TABLE IF NOT EXISTS `order5` (
  `order_id` int(11) NOT NULL DEFAULT '0',
  `manager_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order5`
--

INSERT INTO `order5` (`order_id`, `manager_id`) VALUES
(1, 11),
(2, 11),
(4, 11),
(5, 11),
(7, 11),
(9, 11),
(11, 11),
(12, 11),
(15, 11),
(111, 11),
(3, 12),
(6, 12),
(10, 12),
(112, 12);

-- --------------------------------------------------------

--
-- Table structure for table `order_details5`
--

CREATE TABLE IF NOT EXISTS `order_details5` (
  `order_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details5`
--

INSERT INTO `order_details5` (`order_id`, `item_id`, `quantity`) VALUES
(1, 18, 2),
(1, 11, 2),
(2, 3, 3),
(2, 12, 3);

--
-- Triggers `order_details5`
--
DELIMITER $$
CREATE TRIGGER `deleted` BEFORE DELETE ON `order_details5`
 FOR EACH ROW insert into delivered_orders values(old.order_id,old.item_id,old.quantity,NOW())
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`), ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `manager5`
--
ALTER TABLE `manager5`
  ADD PRIMARY KEY (`manager_id`);

--
-- Indexes for table `menu5`
--
ALTER TABLE `menu5`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `order5`
--
ALTER TABLE `order5`
  ADD PRIMARY KEY (`order_id`), ADD KEY `manager_id` (`manager_id`);

--
-- Indexes for table `order_details5`
--
ALTER TABLE `order_details5`
  ADD KEY `order_id` (`order_id`), ADD KEY `item_id` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order5` (`order_id`);

--
-- Constraints for table `order5`
--
ALTER TABLE `order5`
ADD CONSTRAINT `order5_ibfk_1` FOREIGN KEY (`manager_id`) REFERENCES `manager5` (`manager_id`) ON DELETE CASCADE;

--
-- Constraints for table `order_details5`
--
ALTER TABLE `order_details5`
ADD CONSTRAINT `order_details5_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order5` (`order_id`) ON DELETE CASCADE,
ADD CONSTRAINT `order_details5_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `menu5` (`item_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

