-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 05:57 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_super` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `is_super`, `created_at`) VALUES
(1, 'Hassan El-Sobky', 'hassan@admin.com', '$2y$10$kES3mJ6/bEe2xWRSQw2wbOsS0PNrK/NYWftEfGudCeqaGb6tCxtZ2', 'no', '2021-04-11 01:05:33');

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE `cats` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cats`
--

INSERT INTO `cats` (`id`, `name`, `Created_at`) VALUES
(1, 'Laptops', '2021-04-11 00:50:11'),
(2, 'Mobiles', '2021-04-11 00:50:11'),
(3, 'PCs', '2021-04-11 00:50:11');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('pending','approved','canceled') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `status`, `created_at`) VALUES
(4, 'Hassan', 'ahmed@yahoo.com', '01148414150', 'adada', 'pending', '2021-04-14 00:08:17'),
(15, 'Owner', 'hassan_elsobky@hotmail.com', '4788484asd', 'a', 'pending', '2021-04-14 00:20:59'),
(16, 'marwan', 'maro@m.com', '478955', 'asdad\r\n', 'pending', '2021-04-14 00:21:15'),
(17, 'Kotshi', 'owner@nozol-hospitality.com', '478955', 'da', 'pending', '2021-04-14 00:22:35'),
(18, 'Kotshi', 'owner@nozol-hospitality.com', '478955', 'da', 'pending', '2021-04-14 00:24:29'),
(20, 'Kotshi', 'owner@nozol-hospitality.com', '478955', 'da', 'pending', '2021-04-14 00:28:58'),
(21, 'Kotshi', 'owner@nozol-hospitality.com', '478955', 'da', 'pending', '2021-04-14 00:31:00'),
(29, 'hussien', 'husseinashraf66@yahoo.com', '123131', 'asdasda\r\n', 'pending', '2021-04-14 00:44:46'),
(30, 'hussien', 'husseinashraf66@yahoo.com', '123131', 'asdasda\r\n', 'pending', '2021-04-14 00:45:12'),
(31, 'hussien', 'husseinashraf66@yahoo.com', '123131', 'asdasda\r\n', 'pending', '2021-04-14 00:45:43'),
(32, 'hussien', 'husseinashraf66@yahoo.com', '123131', 'asdasda\r\n', 'pending', '2021-04-14 00:46:14'),
(33, 'hussien', 'husseinashraf66@yahoo.com', '123131', 'asdasda\r\n', 'pending', '2021-04-14 00:47:05'),
(34, 'hussien', 'husseinashraf66@yahoo.com', '123131', 'asdasda\r\n', 'pending', '2021-04-14 00:47:18'),
(35, 'hussien', 'husseinashraf66@yahoo.com', '123131', 'asdasda\r\n', 'pending', '2021-04-14 00:47:32'),
(36, 'hussien', 'husseinashraf66@yahoo.com', '123131', 'asdasda\r\n', 'pending', '2021-04-14 00:47:58'),
(37, 'hussien', 'husseinashraf66@yahoo.com', '123131', 'asdasda\r\n', 'pending', '2021-04-14 00:48:19'),
(38, 'hussien', 'husseinashraf66@yahoo.com', '123131', 'asdasda\r\n', 'pending', '2021-04-14 00:50:46'),
(39, 'hussien', 'husseinashraf66@yahoo.com', '123131', 'asdasda\r\n', 'pending', '2021-04-14 00:51:06'),
(40, 'hussien', 'husseinashraf66@yahoo.com', '123131', 'asdasda\r\n', 'pending', '2021-04-14 00:51:21'),
(41, 'hussien', 'husseinashraf66@yahoo.com', '123131', 'asdasda\r\n', 'pending', '2021-04-14 00:54:26'),
(42, 'hussien', 'husseinashraf66@yahoo.com', '123131', 'asdasda\r\n', 'pending', '2021-04-14 00:54:57'),
(43, 'boolaa', 'husseinashraf66@yahoo.com', '123131', 'asdasda\r\n', 'pending', '2021-04-14 01:04:17'),
(44, 'Hassan Ahmed', 'hassan@hassan.com', '01148414150', 'Helwan 2-b ', 'pending', '2021-04-14 13:00:50'),
(45, 'boolaa', NULL, '01148414150', 'aaaa', 'pending', '2021-04-14 13:13:32');

-- --------------------------------------------------------

--
-- Table structure for table `ordersdetails`
--

CREATE TABLE `ordersdetails` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `qty` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ordersdetails`
--

INSERT INTO `ordersdetails` (`id`, `order_id`, `product_id`, `qty`) VALUES
(8, 20, 1, 4),
(9, 20, 2, 2),
(10, 20, 2, 4),
(11, 20, 2, 4),
(12, 43, 2, 1),
(13, 43, 4, 5),
(14, 44, 3, 3),
(16, 45, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `pieces_no` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cat_id` int(10) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `pieces_no`, `img`, `cat_id`, `created_at`) VALUES
(1, 'Lenovo ideapad', 'this is dummy description for products', '15000', 10, '1.jpg', 1, '2021-04-11 00:54:31'),
(2, 'HP CORE5', 'this is dummy description for products', '10000', 10, '2.png', 1, '2021-04-11 00:55:07'),
(3, 'Dell inspiron', 'this is dummy description for products', '13000', 10, '3.jpg', 1, '2021-04-11 00:55:07'),
(4, 'Realme', 'this is dummy description for products', '5000', 30, '4.jpg', 2, '2021-04-11 00:55:07'),
(5, 'xiami', 'this is dummy description for products', '3000', 33, '5.jpg', 2, '2021-04-11 00:55:07'),
(6, 'Samsung', 'this is dummy description for products', '15000', 20, '6.jpg', 2, '2021-04-11 00:55:07'),
(7, 'DELL PC', 'this is dummy description for products', '25000', 10, '7.jpg', 3, '2021-04-11 00:55:07'),
(8, 'Accer PC', 'this is dummy description for products', '25000', 10, '8.jpg', 3, '2021-04-11 00:55:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordersdetails`
--
ALTER TABLE `ordersdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cats`
--
ALTER TABLE `cats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `ordersdetails`
--
ALTER TABLE `ordersdetails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ordersdetails`
--
ALTER TABLE `ordersdetails`
  ADD CONSTRAINT `ordersdetails_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `ordersdetails_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `cats` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
