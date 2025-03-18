-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2023 at 07:06 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ultimateparessilog`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `deleted`) VALUES
(1, 'Beef Pares', 60, 0),
(2, 'Beef Pares with Bone Marrow', 120, 0),
(3, 'Long Silog', 60, 0),
(4, 'Tapsilog', 75, 0),
(5, 'Bangsilog', 75, 0),
(6, 'Cornsilog', 60, 0),
(7, 'Buffalo Silog (Standard)', 65, 0),
(8, 'Buffalo Silog (Special)', 95, 0),
(9, 'Beef Sisig', 95, 0),
(10, 'Sizzling Wings', 95, 0),
(11, 'Burger Steak', 75, 0),
(12, 'Bone Marrow on Beef Sisig', 150, 0);

-- --------------------------------------------------------

--
-- Table structure for table `linechart`
--

CREATE TABLE `linechart` (
  `chart_id` int(100) NOT NULL,
  `MonthYear` date NOT NULL,
  `Quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `linechart`
--

INSERT INTO `linechart` (`chart_id`, `MonthYear`, `Quantity`) VALUES
(1, '2023-04-01', 0),
(2, '2023-05-14', 3),
(10, '2023-05-15', 77);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `address` varchar(300) NOT NULL,
  `description` varchar(300) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `payment_type` varchar(16) NOT NULL DEFAULT 'Wallet',
  `total` int(11) NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'Yet to be delivered',
  `deleted` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `address`, `description`, `date`, `payment_type`, `total`, `status`, `deleted`) VALUES
(1, 2, 'Tetuan', 'Extra Spicy', '2023-05-16 00:50:44', 'Cash On Delivery', 280, 'Cancelled by Customer', 1),
(2, 2, 'Tumaga', 'Extra Sabaw', '2023-05-16 00:52:31', 'Cash On Delivery', 405, 'Delivered', 0),
(3, 2, 'Tetuan, Zamboanga City', 'No description', '2023-05-16 00:59:30', 'Cash On Delivery', 75, 'Cancelled by Admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `item_id`, `quantity`, `price`) VALUES
(1, 1, 5, 2, 150),
(2, 1, 1, 2, 130),
(3, 1, 2, 0, 0),
(4, 1, 9, 0, 0),
(5, 1, 12, 0, 0),
(6, 1, 8, 0, 0),
(7, 1, 7, 0, 0),
(8, 1, 11, 0, 0),
(9, 1, 6, 0, 0),
(10, 1, 3, 0, 0),
(11, 1, 10, 0, 0),
(12, 1, 4, 0, 0),
(13, 2, 5, 0, 0),
(14, 2, 1, 0, 0),
(15, 2, 2, 1, 120),
(16, 2, 9, 3, 285),
(17, 2, 12, 0, 0),
(18, 2, 8, 0, 0),
(19, 2, 7, 0, 0),
(20, 2, 11, 0, 0),
(21, 2, 6, 0, 0),
(22, 2, 3, 0, 0),
(23, 2, 10, 0, 0),
(24, 2, 4, 0, 0),
(25, 3, 5, 1, 75),
(26, 3, 1, 0, 0),
(27, 3, 2, 0, 0),
(28, 3, 9, 0, 0),
(29, 3, 12, 0, 0),
(30, 3, 8, 0, 0),
(31, 3, 7, 0, 0),
(32, 3, 11, 0, 0),
(33, 3, 6, 0, 0),
(34, 3, 3, 0, 0),
(35, 3, 10, 0, 0),
(36, 3, 4, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` varchar(15) NOT NULL DEFAULT 'Customer',
  `name` varchar(15) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(35) DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  `contact` bigint(11) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `deleted` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `username`, `password`, `email`, `address`, `contact`, `verified`, `deleted`) VALUES
(1, 'Administrator', 'Admin', 'admin', '$2y$10$vSCV6JHGpGn7Iwyb/DCZYuMA.6h.3qeL6ku35vjvfgK21cLNiETbO', 'paresSilog.pares.com', 'W3MR+JXG, Beside Simosa Appliance Center, Maria Clara Lorenzo Lobregat Hwy, Zamboanga, 7000 Zamboanga del Sur', 9362539440, 1, 0),
(2, 'Customer', 'Andrae', 'Andrae25', '$2y$10$v17G/IqJaTMrV.bRZYfPEuJld/cujrEdIu2n0Lq6U8ISg0cvoayKe', 'AndraeFanny25@gmail.com', 'Tetuan, Zamboanga City', 9272750894, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `linechart`
--
ALTER TABLE `linechart`
  ADD PRIMARY KEY (`chart_id`),
  ADD UNIQUE KEY `MonthYear` (`MonthYear`),
  ADD KEY `chart_id` (`chart_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `linechart`
--
ALTER TABLE `linechart`
  MODIFY `chart_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
