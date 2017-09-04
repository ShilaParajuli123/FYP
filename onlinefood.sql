-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2017 at 06:02 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `onlinefood`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(30) NOT NULL,
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `id`, `password`, `email`) VALUES
('admin', 4, 'admin', 'suvu777@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(10) NOT NULL AUTO_INCREMENT,
  `item_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `quantity` int(1) NOT NULL,
  `total_price` float NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=82 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `item_id`, `customer_id`, `quantity`, `total_price`) VALUES
(1, 23, 0, 1, 400),
(2, 22, 0, 1, 120),
(25, 6, 22, 1, 200),
(27, 13, 0, 1, 40),
(28, 13, 0, 1, 40),
(29, 14, 0, 1, 90),
(30, 14, 0, 1, 90),
(31, 14, 0, 1, 90),
(36, 25, 22, 1, 300),
(75, 14, 23, 3, 270),
(80, 19, 23, 1, 150),
(81, 13, 15, 1, 40);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(5) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `address` varchar(20) NOT NULL,
  `phonenumber` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `reenterpassword` varchar(20) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `firstname`, `lastname`, `address`, `phonenumber`, `email`, `password`, `reenterpassword`) VALUES
(15, 'suvu', 'acharya', 'ktm', 2147483647, 'suvu777@gmail.com', 'suvu', 'suvu'),
(17, 'niki', 'dahal', 'ilam', 2147483647, 'niki@gmail.com', 'niki', 'niki'),
(18, 'kiran', 'shrestha', 'pokhara', 2147483647, 'kiran@gmail.com', 'kiran', 'kiran'),
(19, 'Aaramva', 'Acharya', 'ktm', 987755664, 'aaramva@yahoo.com', 'aaramva', 'aaramva'),
(22, 'rezy', 'shrestha', 'ktm', 987654358, 'rezy@gmail.com', 'rezy', 'rezy'),
(23, 'ijana', 'kumpakha', 'bkt', 2147483647, 'ijana@gmail.com', 'ijana', 'ijana'),
(24, 'sila', 'parajuli', 'chabel', 2147483647, 'sila@gmail.com', 'sila', 'sila'),
(25, 'john', 'snow', 'winterfell', 2147483647, 'john@gmail.com', 'john', 'john'),
(26, 'hari', 'kc', 'jhapa', 2147483647, 'ada@gmail.com', 'hari', 'hari'),
(27, 'Arya', 'Stark', 'winterfell', 2147483647, 'arya@gmail.com', 'arya', 'arya'),
(43, 'Sansa', 'Stark', 'winterfell', 2147483647, 'sansa@gmail.com', 'Sansa1', 'Sansa1'),
(44, 'Jenny', 'Shrestha', 'texas', 2147483647, 'jenny@yahoo.com', 'Jenny1', 'Jenny1');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `item_id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `name`, `type`) VALUES
(2, 'Veg Pizza', 'veg'),
(3, 'Veg Momo ', 'veg'),
(4, 'Chicken Chilly', 'nonveg'),
(5, ' Veg Sphaggeti', 'veg'),
(6, 'Chicken Momo', 'nonveg'),
(12, 'Bundiya laddu', 'veg'),
(13, 'Coconut Barfi', 'veg'),
(14, 'Kaju kesar', 'veg'),
(15, 'Karachi Halwa', 'veg'),
(18, 'Fish Chilly', 'nonveg'),
(19, 'French Fries', 'veg'),
(20, 'Pork Chilly', 'nonveg'),
(21, 'Aalo Sadeko', 'veg'),
(22, 'Chicken Noodles', 'nonveg'),
(23, 'Fish Fry', 'nonveg'),
(24, 'Salad', 'veg'),
(25, 'Fokso', 'nonveg'),
(26, 'Buff Momo', 'nonveg'),
(27, 'Mutton Momo', 'nonveg'),
(28, 'Chicken Burger', 'nonveg'),
(29, 'Veg Burger', 'veg'),
(30, 'Cheese Burger', 'veg'),
(31, 'Fish Burger', 'nonveg'),
(32, 'Wine', 'veg'),
(33, 'Chicken Biryani', 'nonveg'),
(34, 'Veg Kabab', 'veg'),
(35, 'Chana Masala', 'veg'),
(36, 'Bhuttan', 'nonveg'),
(37, 'Chicken Sekuwa', 'nonveg'),
(38, 'Gidi Fry', 'nonveg');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE IF NOT EXISTS `price` (
  `item_id` int(11) NOT NULL,
  `bota_price` float NOT NULL,
  `sangam_price` float NOT NULL,
  `nanglo_price` float NOT NULL,
  `cafereena_price` float NOT NULL,
  `royalalina_price` float NOT NULL,
  `letrio_price` float NOT NULL,
  `momobar_price` float NOT NULL,
  `indreni_price` float NOT NULL,
  `burgershack_price` float NOT NULL,
  `cafemitra_price` float NOT NULL,
  `bigb_price` float NOT NULL,
  `trisara_price` float NOT NULL,
  `vino_price` float NOT NULL,
  `masala_price` float NOT NULL,
  `bajeko_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`item_id`, `bota_price`, `sangam_price`, `nanglo_price`, `cafereena_price`, `royalalina_price`, `letrio_price`, `momobar_price`, `indreni_price`, `burgershack_price`, `cafemitra_price`, `bigb_price`, `trisara_price`, `vino_price`, `masala_price`, `bajeko_price`) VALUES
(2, 150, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 120, 0, 0, 0, 0, 100, 150, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 180, 0, 250, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 165, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 200, 0, 0, 0, 0, 250, 180, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 0, 35, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 0, 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 0, 90, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 0, 0, 350, 0, 0, 0, 0, 0, 0, 400, 0, 300, 0, 0, 0),
(19, 0, 0, 150, 0, 170, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 0, 0, 0, 200, 0, 0, 0, 0, 0, 280, 0, 250, 0, 0, 0),
(21, 0, 0, 0, 100, 130, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 0, 0, 0, 0, 120, 0, 0, 100, 0, 90, 0, 0, 0, 0, 0),
(23, 0, 0, 0, 0, 400, 0, 0, 0, 0, 0, 0, 450, 0, 0, 0),
(24, 0, 0, 0, 0, 0, 120, 0, 0, 0, 150, 0, 0, 200, 0, 0),
(25, 0, 0, 0, 0, 0, 300, 0, 0, 0, 0, 0, 0, 350, 0, 0),
(26, 0, 0, 0, 0, 0, 0, 90, 100, 0, 0, 0, 0, 0, 0, 0),
(27, 0, 0, 0, 0, 0, 0, 200, 250, 0, 0, 0, 0, 0, 0, 0),
(28, 0, 0, 0, 0, 0, 0, 0, 0, 250, 0, 200, 0, 0, 0, 0),
(29, 0, 0, 0, 0, 0, 0, 0, 0, 190, 0, 200, 0, 0, 0, 0),
(30, 0, 0, 0, 0, 0, 0, 0, 0, 300, 0, 340, 0, 0, 0, 0),
(31, 0, 0, 0, 0, 0, 0, 0, 0, 450, 0, 0, 0, 0, 0, 0),
(32, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 500, 0, 0),
(4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 275, 0),
(24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 180, 0),
(33, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 350, 0),
(34, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 285, 0),
(35, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 190, 0),
(36, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 300),
(37, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 400),
(38, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 135);

-- --------------------------------------------------------

--
-- Table structure for table `ratinglist`
--

CREATE TABLE IF NOT EXISTS `ratinglist` (
  `rating_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) NOT NULL,
  `resturant_id` int(11) NOT NULL,
  `ratings` int(5) NOT NULL,
  PRIMARY KEY (`rating_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `ratinglist`
--

INSERT INTO `ratinglist` (`rating_id`, `customer_id`, `resturant_id`, `ratings`) VALUES
(1, 15, 3, 4),
(2, 15, 5, 4),
(3, 15, 15, 3),
(4, 23, 9, 4),
(5, 24, 12, 2),
(6, 15, 19, 5);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE IF NOT EXISTS `restaurant` (
  `r_id` int(5) NOT NULL AUTO_INCREMENT,
  `address` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact_no` int(100) NOT NULL,
  `rating` int(5) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`r_id`, `address`, `name`, `contact_no`, `rating`, `image`) VALUES
(2, 'Kamalpokhari', 'Bota momo', 14567890, 4, 'bota.jpg'),
(3, 'Kamaladi', 'Nanglo', 2147483647, 5, 'nanglo.jpg'),
(4, 'Kamaladi', 'Sangam Sweets', 14567283, 5, 'sangam.jpg'),
(5, 'Durbarmarg', 'Cafereena', 2147483647, 3, 'cafe.jpg'),
(9, 'Durbarmarg', 'Le Trio', 2147483647, 5, 'letrio.jpg'),
(10, 'Lazimpat', 'Momo Bar', 156998778, 4, 'momobar.jpg'),
(11, 'Baneshwor', 'Indreni Foodland', 143210987, 3, 'indreni.jpg'),
(12, 'Jawalakhel', 'Burger Shack', 15788778, 2, 'burgershack.jpg'),
(13, 'Thamel', 'Cafe Mitra', 2147483647, 4, 'cafemitra.jpg'),
(14, 'Lazimpat', 'BigB', 148778998, 3, 'bigb.jpg'),
(15, 'Lazimpat', 'Trisara', 2147483647, 5, 'trisara.jpg'),
(16, 'Lazimpat', 'Vino Bistro', 2147483647, 3, 'vino.jpg'),
(17, 'Baneshwor', 'Royal Cafe', 2147483647, 3, 'royalalina.jpg'),
(18, 'Baneshwor', 'Masala Cottage', 2147483647, 0, 'masala.jpg'),
(19, 'Baneshwor', 'Bajeko Sekuwa', 2147483647, 0, 'bajeko.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_employee`
--

CREATE TABLE IF NOT EXISTS `restaurant_employee` (
  `re_id` int(5) NOT NULL AUTO_INCREMENT,
  `password` varchar(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  PRIMARY KEY (`re_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `restaurant_employee`
--

INSERT INTO `restaurant_employee` (`re_id`, `password`, `username`) VALUES
(1, 'admin', 'resturant_admin');

-- --------------------------------------------------------

--
-- Table structure for table `restitem`
--

CREATE TABLE IF NOT EXISTS `restitem` (
  `restitem_id` int(10) NOT NULL AUTO_INCREMENT,
  `item_id` int(10) NOT NULL,
  `restaurant_id` int(10) NOT NULL,
  PRIMARY KEY (`restitem_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `restitem`
--

INSERT INTO `restitem` (`restitem_id`, `item_id`, `restaurant_id`) VALUES
(1, 2, 2),
(2, 3, 2),
(3, 3, 9),
(4, 3, 10),
(5, 4, 2),
(6, 4, 3),
(7, 5, 2),
(8, 6, 2),
(9, 6, 9),
(10, 6, 10),
(11, 12, 4),
(12, 13, 4),
(13, 14, 4),
(14, 15, 4),
(15, 18, 3),
(16, 18, 13),
(17, 18, 15),
(18, 19, 3),
(19, 19, 17),
(20, 20, 5),
(21, 20, 13),
(22, 20, 15),
(23, 21, 5),
(24, 21, 17),
(25, 22, 17),
(26, 22, 11),
(27, 22, 13),
(28, 23, 17),
(29, 23, 15),
(30, 24, 9),
(31, 24, 13),
(32, 24, 16),
(33, 25, 9),
(34, 25, 16),
(35, 26, 10),
(36, 26, 11),
(37, 27, 10),
(38, 27, 11),
(39, 28, 12),
(40, 28, 14),
(41, 29, 12),
(42, 29, 14),
(43, 30, 12),
(44, 30, 14),
(45, 31, 12),
(46, 32, 16),
(47, 4, 18),
(48, 24, 18),
(49, 33, 18),
(50, 34, 18),
(51, 35, 18),
(52, 36, 19),
(53, 37, 19),
(54, 38, 19);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
