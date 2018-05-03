-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2018 at 12:09 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sanjeev`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `customer` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `totalamount` int(10) NOT NULL,
  `tot` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `itemname` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `rating` varchar(3) NOT NULL,
  `popularity` int(1) NOT NULL,
  `taste` varchar(10) NOT NULL,
  `img` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`itemname`, `price`, `region`, `type`, `rating`, `popularity`, `taste`, `img`, `name`, `id`) VALUES
('Kakori Kebabs', 70, 'indian', 'starters', '4.7', 5, 'normal', 'pics/KakoriKebabs.jpg', 'KakoriKebabs', 1),
('Stir Fried Chilli Chicken', 70, 'american', 'starters', '4.3', 4, 'normal', 'pics/StirFriedChilliChicken.jpg', 'StirFriedChilliChicken', 2),
('Microwave Paneer Tikkas', 100, 'indian', 'starters', '4.7', 4, 'normal', 'pics/MicrowavePaneerTikkas.jpg', 'MicrowavePaneerTikkas', 3),
('Aloo and Dalki Tikki', 50, 'indian', 'starters', '4.4', 4, 'normal', 'pics/AlooandDalkiTikki.jpg', 'AlooandDalkiTikki', 4),
('Cheese Balls', 50, 'australian', 'starters', '3.6', 4, 'normal', 'pics/CheeseBalls.jpg', 'CheeseBalls', 5),
('Chicken Satay', 100, 'china', 'starters', '4.4', 5, 'spicy', 'pics/ChickenSatay.jpg', 'ChickenSatay', 6),
('Hot Basil Chicken Cups', 60, 'japan', 'starters', '4.8', 3, 'spicy', 'pics/HotBasilChickenCups.jpg', 'HotBasilChickenCups', 7),
('Crumb Fried Chicken', 100, 'american', 'starters', '4.1', 5, 'spicy', 'pics/CrumbFriedChicken.jpg', 'CrumbFriedChicken', 8),
('Vegetable Lasagne', 150, 'china', 'main dish', '3.9', 5, 'normal', 'pics/VegetableLasagne.jpg', 'VegetableLasagne', 9),
('Sweet Potato Rice', 140, 'indian', 'main dish', '3.3', 3, 'normal', 'pics/SweetPotatoRice .jpg', 'SweetPotatoRice', 10),
('Tomato Pulao', 120, 'indian', 'main dish', '4.6', 4, 'normal', 'pics/TomatoPulao.jpg', 'TomatoPulao', 11),
('Olive Paratha', 200, 'indian', 'main dish', '4.9', 5, 'normal', 'pics/OliveParatha.jpg', 'OliveParatha', 12),
('Chole Bhature', 170, 'indian', 'main dish', '4.2', 5, 'spicy', 'pics/CholeBhature.jpg', 'CholeBhature', 13),
('Chicken Dum Biryani', 210, 'indian', 'main dish', '4.8', 5, 'spicy', 'pics/ChickenDumBiryani.jpg', 'ChickenDumBiryani', 14),
('Aloor Dum', 170, 'indian', 'main dish', '4.2', 4, 'spicy', 'pics/AloorDum.jpg', 'AloorDum', 15),
('Noodles', 100, 'china', 'main dish', '4.8', 5, 'spicy', 'pics/noodles.jpg', 'noodles', 16),
('Chocolate Ice Cream', 50, 'indian', 'desert', '4.9', 5, 'sweet', 'pics/ChocolateIceCream.jpg', 'ChocolateIceCream', 17),
('Masala Chai Ice Cream', 80, 'indian', 'desert', '4.6', 5, 'sweet', 'pics/MasalaChaiIceCream.jpg', 'MasalaChaiIceCream', 18),
('Mango Ice Cream', 40, 'indian', 'desert', '4.9', 4, 'sweet', 'pics/MangoIceCream.jpg', 'MangoIceCream', 19),
('Vanilla Ice Cream', 40, 'indian', 'desert', '4.8', 4, 'sweet', 'pics/VanillaIceCream.jpg', 'VanillaIceCream', 20),
('Apricot Ice cream', 70, 'australian', 'desert', '4.5', 3, 'sweet', 'pics/ApricotIce cream.jpg', 'ApricotIcecream', 21),
('Cereal Milk Ice Cream', 120, 'japan', 'desert', '4.0', 5, 'sweet', 'pics/CerealMilkIce-Cream.jpg', 'CerealMilkIce-Cream', 22),
('Jamun Mint Popsicles', 140, 'china', 'desert', '4.3', 5, 'sweet', 'pics/JamunMintPopsicles.jpg', 'JamunMintPopsicles', 23),
('Mango and Coconut', 130, 'indian', 'desert', '4.5', 4, 'sweet', 'pics/MangoandCoconut.jpg', 'MangoandCoconut', 24),
('Watermelon and Mint Juice', 100, 'american', 'cool drink', '4.9', 5, 'sweet', 'pics/WatermelonandMintJuice.jpg', 'WatermelonandMintJuice', 25),
('Cool Kiwi Juice', 100, 'indian', 'cool drink', '4.7', 4, 'sweet', 'pics/CoolKiwiJuice.jpg', 'CoolKiwiJuice', 26),
('mango juice', 80, 'indian', 'cool drink', '4.9', 4, 'sweet', 'pics/mangojuice.jpg', 'mangojuice', 27),
('pine apple juice', 70, 'indian', 'cool drink', '4.8', 3, 'sweet', 'pics/pineapplejuice.jpg', 'pineapplejuice', 28),
('Lychee and Dill Juice', 140, 'indian', 'cool drink', '4.6', 4, 'sweet', 'pics/Lychee and Dill Juice.JPG', 'LycheeandDillJuice', 29),
('Berry Khatta ', 150, 'indian', 'cool drink', '4.6', 4, 'sweet', 'pics/Berry Khatta.jpg', 'BerryKhatta', 30),
('Virgin Punch', 140, 'indian', 'cool drink', '4.9', 4, 'sweet', 'pics/Virgin Punch.jpg', 'VirginPunch', 31),
('Grape Nectar ', 90, 'indian', 'cool drink', '4.9', 4, 'sweet', 'pics/Grape Nectar.jpg', 'GrapeNectar', 32);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `cname` varchar(100) NOT NULL,
  `itemname` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `username` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`customer`),
  ADD UNIQUE KEY `customer` (`customer`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`itemname`),
  ADD UNIQUE KEY `unique` (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD UNIQUE KEY `mobile_2` (`mobile`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
