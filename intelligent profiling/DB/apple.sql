-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 05, 2020 at 06:06 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `apple`
--
CREATE DATABASE `apple` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `apple`;

-- --------------------------------------------------------

--
-- Table structure for table `add_vehicle`
--

CREATE TABLE IF NOT EXISTS `add_vehicle` (
  `car_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_name` varchar(20) NOT NULL,
  `model` int(10) NOT NULL,
  `mileage` int(11) NOT NULL,
  `f_type` varchar(10) NOT NULL,
  `cc` int(11) NOT NULL,
  `s_capacity` int(11) NOT NULL,
  `f_capacity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `p_steering` tinyint(1) NOT NULL,
  `fog_lights` tinyint(1) NOT NULL,
  PRIMARY KEY (`car_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `add_vehicle_rent`
--

CREATE TABLE IF NOT EXISTS `add_vehicle_rent` (
  `rentcar_id` int(30) NOT NULL AUTO_INCREMENT,
  `company` varchar(11) NOT NULL,
  `model` int(11) NOT NULL,
  `color` varchar(10) NOT NULL,
  `kms_driven` int(11) NOT NULL,
  `fuel_type` varchar(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL,
  `city` varchar(10) NOT NULL,
  `rent_rate` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`rentcar_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `add_vehicle_rent`
--

INSERT INTO `add_vehicle_rent` (`rentcar_id`, `company`, `model`, `color`, `kms_driven`, `fuel_type`, `image`, `image2`, `image3`, `city`, `rent_rate`, `status`) VALUES
(5, 'asdfs', 2010, 'f', 55, 'kjkjg', 'Rose_Flower.jpg', 'Rose_Flower.jpg', 'Rose_Flower.jpg', 'trty', 54, ''),
(6, 'sadf', 545, 'red', 44454, 'desea', 'B7aTmzeIYAAi5_z.jpg', 'hennessey-car-pis-1024x512.jpg', 'hqdefault.jpg', 'manrkkad', 445, ''),
(7, 'asdfs', 2010, 'f', 55, 'kjkjg', 'Rose_Flower.jpg', 'Rose_Flower.jpg', 'Rose_Flower.jpg', 'trty', 54, ''),
(8, 'uytrtye', 245, 'hfh', 45, 'hghh', 'hqdefault.jpg', 'Rose_Flower.jpg', 'Rose_floweriytgy.jpg', 'hg', 545, ''),
(9, 'dgffddfd', 4, 'jjghgh', 45, 'ggg', 'Rose_floweriytgy.jpg', 'Rose_Flower.jpg', 'Rose_Flower.jpg', 'hg', 45, '');

-- --------------------------------------------------------

--
-- Table structure for table `add_vehicle_seller`
--

CREATE TABLE IF NOT EXISTS `add_vehicle_seller` (
  `car_id` int(30) NOT NULL AUTO_INCREMENT,
  `seller_id` int(15) NOT NULL,
  `company` varchar(20) NOT NULL,
  `model` varchar(20) NOT NULL,
  `color` varchar(10) NOT NULL,
  `kms_driven` int(11) NOT NULL,
  `fuel_type` varchar(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL,
  `city` varchar(15) NOT NULL,
  `rate` int(11) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`car_id`),
  KEY `seller_id` (`seller_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `add_vehicle_seller`
--

INSERT INTO `add_vehicle_seller` (`car_id`, `seller_id`, `company`, `model`, `color`, `kms_driven`, `fuel_type`, `image`, `image2`, `image3`, `city`, `rate`, `status`) VALUES
(1, 0, 'dgffddfd', '435', 'jjghgh', 45, 'ggg', 'hennessey-car-pis-1024x512.jpg', 'hqdefault.jpg', 'Rose_floweriytgy.jpg', 'hfgg', 45, ''),
(2, 0, 'maruti', '2018', 'jjghgh', 45, 'ggg', 'hqdefault.jpg', 'Rose_Flower.jpg', 'Rose_floweriytgy.jpg', 'mannarkkad', 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `admin_id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `password`) VALUES
('ramees', '58811819');

-- --------------------------------------------------------

--
-- Table structure for table `changepass`
--

CREATE TABLE IF NOT EXISTS `changepass` (
  `currentpass` varchar(20) NOT NULL,
  `newpass` varchar(20) NOT NULL,
  `newpass2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `edit_details`
--

CREATE TABLE IF NOT EXISTS `edit_details` (
  `name` varchar(20) NOT NULL,
  `phone-num` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `roll` varchar(10) NOT NULL,
  `adhar_num` int(11) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `passsword` varchar(20) NOT NULL,
  PRIMARY KEY (`username`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `adhar_num` int(11) NOT NULL,
  `address` text NOT NULL,
  `roll` varchar(10) NOT NULL,
  `contactno` int(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`user_id`, `name`, `email`, `password`, `adhar_num`, `address`, `roll`, `contactno`) VALUES
(3, 'RAMEES', 'RAMEESRMS00@GMAIL.CO', '12345', 2147483647, 'dfgdfg', 'seller', 2147483647),
(4, 'RAMEES', 'RAMEESRMS00@GMAIL.CO', '12345', 2147483647, 'dfgdfg', 'seller', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `sold_cars`
--

CREATE TABLE IF NOT EXISTS `sold_cars` (
  `sold_car_id` varchar(20) NOT NULL,
  `car_id` varchar(20) NOT NULL,
  `buyer_id` varchar(20) NOT NULL,
  PRIMARY KEY (`sold_car_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sold_cars`
--

INSERT INTO `sold_cars` (`sold_car_id`, `car_id`, `buyer_id`) VALUES
('sddsd', 'sdsdds', 'sdsd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
