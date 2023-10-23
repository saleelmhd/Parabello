-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 01, 2020 at 07:06 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `parabello`
--
CREATE DATABASE `parabello` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `parabello`;

-- --------------------------------------------------------

--
-- Table structure for table `add_car_details`
--

CREATE TABLE IF NOT EXISTS `add_car_details` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(35) NOT NULL,
  `model` int(11) NOT NULL,
  `color` varchar(30) NOT NULL,
  `kms_driven` int(60) NOT NULL,
  `fuel_type` varchar(25) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL,
  `image4` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `rate` int(60) NOT NULL,
  `status` varchar(20) NOT NULL,
  `priority` int(11) NOT NULL,
  `seller_no` int(11) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `add_car_details`
--

INSERT INTO `add_car_details` (`no`, `company`, `model`, `color`, `kms_driven`, `fuel_type`, `image`, `image2`, `image3`, `image4`, `city`, `rate`, `status`, `priority`, `seller_no`) VALUES
(13, 'hyundai', 2016, 'white', 15000, 'petrol', 'Capture.JPG', 'Capture2.JPG', 'Capture3.JPG', 'Capture4.JPG', 'malappuram', 125000, '', 2, 0),
(14, 'renault', 2016, 'blue', 10000, 'petrol', 'Capture.JPG', 'Capture2.JPG', 'Capture3.JPG', 'Captur.JPG', 'malappuram', 3500, 'Available', 1, 9),
(15, 'hyundai', 2013, 'red', 15000, 'petrol', '68e64f_e9808f1e94c84af496c88665ec2c5dd9.jpg', '116788_78850.jpg', 'images (3).jpg', 'Toyota_Etios_Valco_aka_Etios_Liva_(front).jpg', 'malappuRAM', 10000, 'Not Available', 2, 9),
(16, 'MRUTI', 2013, 'red', 14000, 'petrol', '357868.jpg', '357886.jpg', '2018_ktm_790_duke.jpg', '2017-KTM-Duke-200-Black-tank.jpg', 'Malappuram', 110000, 'Available', 2, 17),
(17, 'Etios Liva', 2012, 'White', 15000, 'Petrol', '68e64f_e9808f1e94c84af496c88665ec2c5dd9.jpg', '116788_78850.jpg', 'images (3).jpg', 'Toyota_Etios_Valco_aka_Etios_Liva_(front).jpg', 'Malappuram', 110000, 'Not Available', 3, 9);

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `password`) VALUES
('ramees777', '8137');

-- --------------------------------------------------------

--
-- Table structure for table `buyer_register`
--

CREATE TABLE IF NOT EXISTS `buyer_register` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `adhar_no` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `status` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `buyer_register`
--

INSERT INTO `buyer_register` (`no`, `name`, `mobile_no`, `adhar_no`, `email`, `city`, `address`, `status`, `photo`) VALUES
(4, 'Mohammed Ramees', 2147483647, 2147483647, 'mohammedramees776@gmail.com', 'malappuram', 'perinthalmana', 1, ''),
(5, 'Mohammed Ramees', 813706689, 1212, 'mohammedramees776@gmail.com', 'perinthalmanna', 'Jubilee road', 0, 'Captur.JPG'),
(6, 'raja', 45565, 2147483647, 'raja123@gmail.com', 'melatur', 'adssadsadas', 0, 'dp.JPG'),
(7, 'Jaseem', 45565, 2147483647, 'manniljaseem@gmail.com', 'Anakkayam', 'Mannil (H),Anakkayam,majeri', 1, 'zayn-malik-hair-transformation.jpg'),
(8, 'Sreerag', 2147483647, 2147483647, 'sreerag123@gmail.com', 'Melattur', 'Karkidam kunnu(p.o)\r\nAlanellur via jndsfnelknfas\r\nsdnsaidnasnd\r\nsdasdsadsadwa', 0, 'dp.JPG'),
(9, 'sajad', 2147483647, 2147483647, 'raja123@gmail.com', 'melatur', 'adssadsadas', 1, '116788_78850.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `compare_car`
--

CREATE TABLE IF NOT EXISTS `compare_car` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `car_name` varchar(50) NOT NULL,
  `yom` int(11) NOT NULL,
  `mileage` int(11) NOT NULL,
  `seat_capacity` int(11) NOT NULL,
  `transmission_type` varchar(50) NOT NULL,
  `safety` varchar(150) NOT NULL,
  `price` int(60) NOT NULL,
  `body_type` varchar(150) NOT NULL,
  `comfort_convinience` varchar(60) NOT NULL,
  `maintenance_cost` int(11) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `compare_car`
--

INSERT INTO `compare_car` (`no`, `car_name`, `yom`, `mileage`, `seat_capacity`, `transmission_type`, `safety`, `price`, `body_type`, `comfort_convinience`, `maintenance_cost`) VALUES
(1, 'liva', 2018, 22, 5, 'petrol', '6', 25000, 'suv', '5', 2000),
(2, 'innova', 2012, 15, 8, 'petrol', '62', 150000, 'suv', '79', 22000);

-- --------------------------------------------------------

--
-- Table structure for table `compare_carb`
--

CREATE TABLE IF NOT EXISTS `compare_carb` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `car_name` varchar(50) NOT NULL,
  `yom` int(11) NOT NULL,
  `mileage` int(11) NOT NULL,
  `seat_capacity` int(11) NOT NULL,
  `transmission_type` varchar(50) NOT NULL,
  `safety` varchar(150) NOT NULL,
  `price` int(60) NOT NULL,
  `body_type` varchar(150) NOT NULL,
  `comfort_convinience` varchar(60) NOT NULL,
  `maintenance_cost` int(11) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `compare_carb`
--

INSERT INTO `compare_carb` (`no`, `car_name`, `yom`, `mileage`, `seat_capacity`, `transmission_type`, `safety`, `price`, `body_type`, `comfort_convinience`, `maintenance_cost`) VALUES
(1, 'etios', 2018, 52, 5, 'petrol', '6', 25000, 'suv', '5', 2000),
(2, 'innova crysta', 2012, 15, 8, 'petrol', '62', 10000, 'suv', '36', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(35) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `comment`) VALUES
(1, 'ajmal', 'etios liva 2017'),
(2, 'sajad', 'fortuner\r\n'),
(3, 'ramees', 'swift desire'),
(4, 'ziyad', 'alto 800'),
(5, 'vsv', 'alto800');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `ID` int(11) NOT NULL,
  `role` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `ID`, `role`) VALUES
('Jaseem18', '789635458918', 18, 'SELLER'),
('Jaseem7', '455657', 7, 'BUYER'),
('mahir9', '123', 9, 'SELLER'),
('Mohammed Ramees12', '121212', 12, 'SELLER'),
('Mohammed Ramees13', '121213', 13, 'SELLER'),
('Mohammed Ramees14', '65564514', 14, 'SELLER'),
('Mohammed Ramees17', '813706689017', 17, 'SELLER'),
('Mohammed Ramees4', '21474836474', 4, 'BUYER'),
('Mohammed Ramees5', '123', 5, 'BUYER'),
('Mohammed Ramees8', '21474836478', 8, 'SELLER'),
('raja15', '761312345615', 15, 'SELLER'),
('raja16', '123', 16, 'SELLER'),
('raja6', '455656', 6, 'BUYER'),
('ramu11', '94161615211', 11, 'SELLER'),
('rava10', '701295928710', 10, 'SELLER'),
('sajad9', '21474836479', 9, 'BUYER');

-- --------------------------------------------------------

--
-- Table structure for table `rent_car_details`
--

CREATE TABLE IF NOT EXISTS `rent_car_details` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(35) NOT NULL,
  `model` int(11) NOT NULL,
  `color` varchar(30) NOT NULL,
  `kms_driven` varchar(60) NOT NULL,
  `fuel_type` varchar(25) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL,
  `image4` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `rate` int(60) NOT NULL,
  `status` varchar(20) NOT NULL,
  `priority` int(11) NOT NULL,
  `seller_no` int(11) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `rent_car_details`
--

INSERT INTO `rent_car_details` (`no`, `company`, `model`, `color`, `kms_driven`, `fuel_type`, `image`, `image2`, `image3`, `image4`, `city`, `rate`, `status`, `priority`, `seller_no`) VALUES
(1, 'TOYOTA', 2016, 'blue', '15000', 'petrol', 'Captur.JPG', 'Capture2.JPG', 'Capture3.JPG', 'Capture4.JPG', 'malappuram', 3500, 'Available', 2, 0),
(2, 'hyundai', 2013, 'white', '15000', 'petrol', '68e64f_e9808f1e94c84af496c88665ec2c5dd9.jpg', '116788_78850.jpg', 'images (3).jpg', 'Toyota_Etios_Valco_aka_Etios_Liva_(front).jpg', 'malappuRAM', 10000, 'Available', 3, 9),
(3, 'hyundai', 2012, 'blue', '15000', 'petrol', '68e64f_e9808f1e94c84af496c88665ec2c5dd9.jpg', '116788_78850.jpg', 'images (3).jpg', 'Toyota_Etios_Valco_aka_Etios_Liva_(front).jpg', 'malappuRAM', 10000, 'Available', 4, 9),
(4, 'hyundai', 2013, 'zxc', '125522', 'petrol', '68e64f_e9808f1e94c84af496c88665ec2c5dd9.jpg', '116788_78850.jpg', 'images (3).jpg', 'Toyota_Etios_Valco_aka_Etios_Liva_(front).jpg', 'malappuRAM', 10000, 'Available', 1, 16);

-- --------------------------------------------------------

--
-- Table structure for table `seller_register`
--

CREATE TABLE IF NOT EXISTS `seller_register` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` bigint(20) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `status` int(5) NOT NULL,
  `photo` varchar(100) NOT NULL,
  KEY `no` (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `seller_register`
--

INSERT INTO `seller_register` (`no`, `name`, `email`, `mobile_no`, `city`, `address`, `status`, `photo`) VALUES
(8, 'Mohammed Ramees', 'mohammedramees776@gmail.com', 2147483647, 'malappuram', 'perinthalmana', 1, ''),
(9, 'mahir', 'mahirhussain@gmail.com', 7012959287, 'MAMPAD', 'NILAMBUR', 1, 'dp.JPG'),
(10, 'rava', 'asd24@gmail.com', 7012959287, 'pmna', 'fsdafdsaf', 1, ''),
(11, 'ramu', 'ramu123@gmail.com', 941616152, 'malappuram', '', 1, ''),
(12, 'Mohammed Ramees', 'mohammedramees776@gmail.com', 1212, 'malappuram', 'perinthalmana', 1, 'Captur.JPG'),
(13, 'Mohammed Ramees', 'mohammedramees776@gmail.com', 1212, 'malappuram', 'perinthalmana', 1, 'Captur.JPG'),
(14, 'Mohammed Ramees', 'syam776@gmail.com', 655645, 'malappuram', 'perinthalmana', 1, 'Captur.JPG'),
(15, 'raja', 'raja123@gmail.com', 7613123456, 'melatur', 'adssadsadas', 1, '116788_78850.jpg'),
(16, 'raja', 'raja123@gmail.com', 7613123456, 'melatur', 'adssadsadas', 1, 'dp.JPG'),
(17, 'Mohammed Ramees', 'ramees776@gmail.com', 8137066890, 'perinthalmanna', 'Jubilee road,pmna(p.o)\r\npin-679322', 1, '5500x3094-1516528-anonymous-mask-wallpapers-hd.jpg'),
(18, 'Jaseem', 'manniljaseem@gmail.com', 7896354589, 'Anakkayam', 'Mannil (H),Anakkayam,majeri', 1, 'zayn-malik.jpg'),
(19, 'Jaseem', 'manniljaseem@gmail.com', 761361132, 'Anakkayam', 'Mannil (H),Anakkayam,majeri', 0, 'zayn-malik-2015-one-direction-38344921-1838-2500.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
