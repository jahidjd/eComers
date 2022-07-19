-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 07:43 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vegist`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Jahid', 'jahidjd18@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'Jahid Hasan', 'jahid@gmail.com', '01627809808', '12345'),
(7, 'Rahim Mia', 'rahim@gmail.com', '01627809808', '12345'),
(8, 'Akash Mia', 'akash@gmail.com', '01627809808', '12345'),
(9, 'Ashik Mulla', 'ashik@mulla.com', '01627809808', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `general_table`
--

CREATE TABLE `general_table` (
  `id` int(11) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(15) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `help` varchar(100) NOT NULL,
  `shop_bennar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `home_bennar`
--

CREATE TABLE `home_bennar` (
  `id` int(11) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `bennar_text` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `shipping_details` varchar(155) DEFAULT NULL,
  `payment_method` varchar(30) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `status` enum('panding','complete','cancel') NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `customer_id`, `product_id`, `category_id`, `order_id`, `product_qty`, `name`, `phone`, `address`, `shipping_details`, `payment_method`, `total_amount`, `status`, `date`) VALUES
(8, 1, 12, 7, 'vegisT_1373759664', 2, 'jahid Hasan', '01627809808', '99/1, road no-04, Mohammadi Housing LTD, Mohammadpur, Dhaka', '', 'Cash On delevery', '2640.00', 'complete', '2022-05-20'),
(9, 1, 5, 8, 'vegisT_486805890', 1, 'jahid Hasan', '01627809808', 'Village/Town: Nabinagar, Road/House: Bijoypara', '', 'Cash On delevery', '360.00', 'complete', '2022-05-20'),
(10, 1, 5, 8, 'vegisT_1867715841', 1, 'jahid hasa', '01627809808', 'Village/Town: Nabinagar, Road/House: Bijoypara', '', 'Cash On delevery', '360.00', 'cancel', '2022-05-20'),
(11, 1, 3, 2, 'vegisT_1014758586', 1, 'Rahim Mia', '01627809808', 'Village/Town: Nabinagar, Road/House: Bijoypara', '', 'Cash On delevery', '550.00', 'complete', '2022-05-20'),
(12, 1, 3, 2, 'vegisT_1856219211', 1, 'jahid Mia', '01627809808', 'Village/Town: Nabinagar, Road/House: Bijoypara', '', 'Cash On delevery', '550.00', 'complete', '2022-05-20'),
(13, 1, 3, 2, 'vegisT_399792438', 1, 'Hasan hasa', '016278098083', 'Village/Town: Nabinagar, Road/House: Bijoypara', '', 'Cash On delevery', '550.00', 'complete', '2022-05-20'),
(16, 7, 5, 8, 'vegisT_654682075', 1, 'Rahim Mia', '01627809808', 'mohammadpur', 'erte', 'Cash On delevery', '670.00', 'complete', '2022-05-21'),
(17, 7, 3, 2, 'vegisT_654682075', 1, 'Rahim Mia', '01627809808', 'mohammadpur', 'erte', 'Cash On delevery', '670.00', 'complete', '2022-05-21'),
(18, 7, 5, 8, 'vegisT_708884861', 1, 'Rahim Mia', '01627809808', 'mohammadpur', 'erte', 'Cash On delevery', '670.00', 'cancel', '2022-05-21'),
(19, 7, 3, 2, 'vegisT_708884861', 1, 'Rahim Mia', '01627809808', 'mohammadpur', 'erte', 'Cash On delevery', '670.00', 'cancel', '2022-05-21'),
(20, 7, 5, 8, 'vegisT_1212890887', 1, 'Rahim Mia', '01627809808', 'mohammadpur', 'erte', 'Cash On delevery', '670.00', 'complete', '2022-05-21'),
(21, 7, 3, 2, 'vegisT_1212890887', 1, 'Rahim Mia', '01627809808', 'mohammadpur', 'erte', 'Cash On delevery', '670.00', 'complete', '2022-05-21'),
(22, 7, 5, 8, 'vegisT_680298866', 1, 'Rahim Mia', '01627809808', 'Mohammadpur', 'r3t', 'Cash On delevery', '670.00', 'complete', '2022-05-21'),
(23, 7, 3, 2, 'vegisT_680298866', 1, 'Rahim Mia', '01627809808', 'Mohammadpur', 'r3t', 'Cash On delevery', '670.00', 'complete', '2022-05-21'),
(24, 7, 4, 2, 'vegisT_1091817059', 1, 'Rahim Mia', '5605', 'Banani', '', 'Cash On delevery', '240.00', 'panding', '2022-05-21'),
(25, 1, 4, 2, 'vegisT_2002279298', 4, 'Rahim Mia', '0162780980', 'Banani', '', 'Cash On delevery', '1310.00', 'panding', '2022-05-21'),
(26, 1, 3, 2, 'vegisT_2002279298', 1, 'Rahim Mia', '0162780980', 'Banani', '', 'Cash On delevery', '1310.00', 'panding', '2022-05-21'),
(27, 1, 5, 8, 'vegisT_1601607328', 1, 'test test', '01627809808', 'test', '', 'Bank', '470.00', 'panding', '2022-05-21'),
(28, 1, 8, 8, 'vegisT_1601607328', 3, 'test test', '01627809808', 'test', '', 'Bank', '470.00', 'panding', '2022-05-21'),
(29, 1, 5, 8, 'vegisT_1823348064', 1, 'test test', '01627809808', 'aaaa', '', 'nagad', '470.00', 'panding', '2022-05-21'),
(30, 1, 8, 8, 'vegisT_1823348064', 3, 'test test', '01627809808', 'aaaa', '', 'nagad', '470.00', 'panding', '2022-05-21'),
(31, 1, 4, 2, 'vegisT_259736187', 3, 'Robin Mia', '01655', 'Japan', '', 'Bank', '740.00', 'panding', '2022-05-21'),
(32, 1, 14, 2, 'vegisT_259736187', 1, 'Robin Mia', '01655', 'Japan', '', 'Bank', '740.00', 'panding', '2022-05-21'),
(33, 1, 5, 8, 'vegisT_139813264', 4, 'Rahim hasa', '016278098083', 'Village/Town: Nabinagar, Road/House: Bijoypara', 'test', 'Cash On delevery', '710.00', 'complete', '2022-05-21'),
(34, 1, 6, 2, 'vegisT_139813264', 1, 'Rahim hasa', '016278098083', 'Village/Town: Nabinagar, Road/House: Bijoypara', 'test', 'Cash On delevery', '710.00', 'complete', '2022-05-21'),
(35, 9, 9, 5, 'vegisT_1888613364', 1, 'Ashik Mulla', '01627809808', 'Savar', '', 'Bank', '3350.00', 'complete', '2022-05-22'),
(36, 9, 12, 7, 'vegisT_1888613364', 2, 'Ashik Mulla', '01627809808', 'Savar', '', 'Bank', '3350.00', 'complete', '2022-05-22');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `photo_one` varchar(50) NOT NULL,
  `photo_two` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `details` varchar(155) NOT NULL,
  `product_description` text NOT NULL,
  `tag` varchar(15) NOT NULL,
  `trend` varchar(20) DEFAULT NULL,
  `tranding_product` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `photo_one`, `photo_two`, `price`, `details`, `product_description`, `tag`, `trend`, `tranding_product`) VALUES
(3, 2, 'Rock Melon', 'pro-img-01.jpg', 'pro-img-1.jpg', '500.00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, wh', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\nLorem Ipsum has been the ‘s standard dummy text. Lorem Ipsumum is simply dummy text.\r\ntype here your detail one by one li more add\r\nhas been the industry’s standard dummy text ever since. Lorem Ips\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.\r\n\r\nKey specification\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry\r\nLorem Ipsum has been the ‘s standard dummy text. Lorem Ipsumum is simply dummy text.\r\ntype here your detail one by one li more add\r\nhas been the industry’s standard dummy text ever since. Lorem Ips\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.', 'New', 'home', 'tred-pro'),
(4, 2, 'Apple', 'pro-img-3.jpg', 'pro-img-03.jpg', '190.00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, wh', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\nLorem Ipsum has been the ‘s standard dummy text. Lorem Ipsumum is simply dummy text.\r\ntype here your detail one by one li more add\r\nhas been the industry’s standard dummy text ever since. Lorem Ips\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.\r\n\r\nKey specification\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry\r\nLorem Ipsum has been the ‘s standard dummy text. Lorem Ipsumum is simply dummy text.\r\ntype here your detail one by one li more add\r\nhas been the industry’s standard dummy text ever since. Lorem Ips\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.', '-20%', 'profile', 'tred-pro'),
(5, 8, 'Fresh Brijjal', 'image01.jpg', 'image1.jpg', '120.00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, wh', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\nLorem Ipsum has been the ‘s standard dummy text. Lorem Ipsumum is simply dummy text.\r\ntype here your detail one by one li more add\r\nhas been the industry’s standard dummy text ever since. Lorem Ips\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.\r\n\r\nKey specification\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry\r\nLorem Ipsum has been the ‘s standard dummy text. Lorem Ipsumum is simply dummy text.\r\ntype here your detail one by one li more add\r\nhas been the industry’s standard dummy text ever since. Lorem Ips\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.', 'New', 'contact', 'tred-pro'),
(6, 2, 'Fresh Orange', 'pro-img-013.jpg', 'pro-img-13.jpg', '180.00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, wh', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\nLorem Ipsum has been the ‘s standard dummy text. Lorem Ipsumum is simply dummy text.\r\ntype here your detail one by one li more add\r\nhas been the industry’s standard dummy text ever since. Lorem Ips\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.\r\n\r\nKey specification\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry\r\nLorem Ipsum has been the ‘s standard dummy text. Lorem Ipsumum is simply dummy text.\r\ntype here your detail one by one li more add\r\nhas been the industry’s standard dummy text ever since. Lorem Ips\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.', '-20%', 'home', NULL),
(7, 13, 'Dried Almond ', 'pro-img-7.jpg', 'pro-img-07.jpg', '300.00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, wh', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\nLorem Ipsum has been the ‘s standard dummy text. Lorem Ipsumum is simply dummy text.\r\ntype here your detail one by one li more add\r\nhas been the industry’s standard dummy text ever since. Lorem Ips\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.\r\n\r\nKey specification\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry\r\nLorem Ipsum has been the ‘s standard dummy text. Lorem Ipsumum is simply dummy text.\r\ntype here your detail one by one li more add\r\nhas been the industry’s standard dummy text ever since. Lorem Ips\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.', 'New', 'profile', 'tred-pro'),
(8, 8, 'Fresh Tomato ', 'pro-img-05.jpg', 'pro-img-5.jpg', '100.00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, wh', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\nLorem Ipsum has been the ‘s standard dummy text. Lorem Ipsumum is simply dummy text.\r\ntype here your detail one by one li more add\r\nhas been the industry’s standard dummy text ever since. Lorem Ips\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.\r\n\r\nKey specification\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry\r\nLorem Ipsum has been the ‘s standard dummy text. Lorem Ipsumum is simply dummy text.\r\ntype here your detail one by one li more add\r\nhas been the industry’s standard dummy text ever since. Lorem Ips\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.', 'New', 'contact', NULL),
(9, 5, 'Shrimp Jumbo ', 'pro-img-010.jpg', 'pro-img-10.jpg', '900.00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, wh', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\nLorem Ipsum has been the ‘s standard dummy text. Lorem Ipsumum is simply dummy text.\r\ntype here your detail one by one li more add\r\nhas been the industry’s standard dummy text ever since. Lorem Ips\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.\r\n\r\nKey specification\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry\r\nLorem Ipsum has been the ‘s standard dummy text. Lorem Ipsumum is simply dummy text.\r\ntype here your detail one by one li more add\r\nhas been the industry’s standard dummy text ever since. Lorem Ips\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.', 'New', 'home', 'tred-pro'),
(10, 2, 'Fresh Litchi ', 'pro-img-04.jpg', 'pro-img-4.jpg', '200.00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, wh', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\nLorem Ipsum has been the ‘s standard dummy text. Lorem Ipsumum is simply dummy text.\r\ntype here your detail one by one li more add\r\nhas been the industry’s standard dummy text ever since. Lorem Ips\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.\r\nKey specification\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry\r\nLorem Ipsum has been the ‘s standard dummy text. Lorem Ipsumum is simply dummy text.\r\ntype here your detail one by one li more add\r\nhas been the industry’s standard dummy text ever since. Lorem Ips\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.', '-15%', 'profile', NULL),
(11, 8, 'Natural Grassbean', 'pro-img-06.jpg', 'pro-img-6.jpg', '50.00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, wh', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\nLorem Ipsum has been the ‘s standard dummy text. Lorem Ipsumum is simply dummy text.\r\ntype here your detail one by one li more add\r\nhas been the industry’s standard dummy text ever since. Lorem Ips\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.\r\n\r\nKey specification\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry\r\nLorem Ipsum has been the ‘s standard dummy text. Lorem Ipsumum is simply dummy text.\r\ntype here your detail one by one li more add\r\nhas been the industry’s standard dummy text ever since. Lorem Ips\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.', 'New', 'contact', 'tred-pro'),
(12, 7, 'Fresh mussel ', 'pro-img-012.jpg', 'pro-img-12.jpg', '1200.00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, wh', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\nLorem Ipsum has been the ‘s standard dummy text. Lorem Ipsumum is simply dummy text.\r\ntype here your detail one by one li more add\r\nhas been the industry’s standard dummy text ever since. Lorem Ips\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.\r\n\r\nKey specification\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry\r\nLorem Ipsum has been the ‘s standard dummy text. Lorem Ipsumum is simply dummy text.\r\ntype here your detail one by one li more add\r\nhas been the industry’s standard dummy text ever since. Lorem Ips\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.', 'New', 'home', 'tred-pro'),
(13, 9, 'Organic Coconet', 'pro-img-09.jpg', 'pro-img-9.jpg', '120.00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, wh', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\nLorem Ipsum has been the ‘s standard dummy text. Lorem Ipsumum is simply dummy text.\r\ntype here your detail one by one li more add\r\nhas been the industry’s standard dummy text ever since. Lorem Ips\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.\r\n\r\nKey specification\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry\r\nLorem Ipsum has been the ‘s standard dummy text. Lorem Ipsumum is simply dummy text.\r\ntype here your detail one by one li more add\r\nhas been the industry’s standard dummy text ever since. Lorem Ips\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.', 'New', 'contact', NULL),
(14, 2, 'Sp.red fresh guava', 'pro-img-011.jpg', 'pro-img-11.jpg', '120.00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, wh', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\nLorem Ipsum has been the ‘s standard dummy text. Lorem Ipsumum is simply dummy text.\r\ntype here your detail one by one li more add\r\nhas been the industry’s standard dummy text ever since. Lorem Ips\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.\r\n\r\nKey specification\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry\r\nLorem Ipsum has been the ‘s standard dummy text. Lorem Ipsumum is simply dummy text.\r\ntype here your detail one by one li more add\r\nhas been the industry’s standard dummy text ever since. Lorem Ips\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy text ever since. Lorem Ipsum is simply dummy text.', '-20%', 'profile', 'tred-pro');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `name`, `photo`) VALUES
(2, 'Fresh Fruits', 'cat5.jpg'),
(5, 'Sea & Fish', 'cat62.jpg'),
(6, 'Spice', 'cat8.jpg'),
(7, 'Seafood', 'cat4.jpg'),
(8, 'Vegetable ', 'cat2.jpg'),
(9, 'Summer Fruit', 'cat11.jpg'),
(10, 'Fresh Meat', 'image2.jpg'),
(11, 'Out Side Spice', 'cat7.jpg'),
(12, 'Chili pepper', 'cat9.jpg'),
(13, 'Out Side Fruit', 'cat3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_purchase`
--

CREATE TABLE `product_purchase` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `date` date NOT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_purchase`
--

INSERT INTO `product_purchase` (`id`, `category_id`, `name`, `price`, `qty`, `date`, `total`) VALUES
(3, 2, 'Apple', '100.00', 50, '2022-05-14', '5000.00'),
(6, 2, 'Rock Melon', '300.00', 100, '2022-05-10', '30000.00'),
(7, 8, 'Fresh Brijjal', '80.00', 100, '2022-05-11', '8000.00'),
(8, 2, 'Fresh Orange', '120.00', 100, '2022-05-11', '12000.00'),
(9, 11, 'Dried Almond', '200.00', 100, '2022-05-10', '20000.00'),
(10, 8, 'Fresh Tomato', '50.00', 100, '2022-05-10', '5000.00'),
(11, 5, 'Shrimp Jumbo', '600.00', 50, '2022-05-10', '30000.00'),
(12, 2, 'Fresh Litchi', '120.00', 100, '2022-05-19', '12000.00'),
(13, 8, 'Natural Grassbean', '20.00', 100, '2022-05-18', '2000.00'),
(14, 7, 'Fresh mussel', '1000.00', 50, '2022-05-11', '50000.00'),
(15, 9, 'Organic Coconet', '60.00', 150, '2022-05-10', '9000.00'),
(16, 2, 'Sp.red fresh guava', '90.00', 100, '2022-05-15', '9000.00');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `slider_text_one` varchar(100) NOT NULL,
  `slider_text_two` varchar(100) NOT NULL,
  `button_text` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_table`
--
ALTER TABLE `general_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_bennar`
--
ALTER TABLE `home_bennar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_purchase`
--
ALTER TABLE `product_purchase`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `general_table`
--
ALTER TABLE `general_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_bennar`
--
ALTER TABLE `home_bennar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product_purchase`
--
ALTER TABLE `product_purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
