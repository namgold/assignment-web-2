-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 08, 2019 at 05:23 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_asgm`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `timestamp` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `quantity`, `price`, `image`, `description`) VALUES
(1, 'Áo thun ba lỗ thể thao Nam Y5 màu đen', 11, 195000, NULL, NULL),
(2, 'Áo thun thể thao Function xám', 11, 245000, NULL, NULL),
(3, 'Quần Sweatpants Joggers thể thao Nam 360s Compress đen', 15, 290000, NULL, NULL),
(4, 'Quần dài Joggers thể thao nam 360s LX xanh đen', 10, 260000, NULL, NULL),
(5, 'Quần short training tập GYM Nam 360s E9 xám', 15, 260000, NULL, NULL),
(6, 'Quần short training tập GYM Nam 360s E9 xám', 10, 245000, NULL, NULL),
(7, 'Thảm TPE 6mm 360s Venus 2 lớp màu tím', 11, 350000, NULL, 'Thảm tập Yoga 2 lớp dày 6mm sản xuất từ TPE – cao su non với chất lượng tốt. Cam kết các loại thảm Sporter cung cấp an toàn cho người sử dụng và không chứa chất gây ung thư.\\n Được sản xuất trên dây chuyền công nghệ hiện đại ép khuôn bằng nhiệt, loại bỏ hóa chất độc hại, thân thiện với môi trường (có thể tái sử dụng) và an toàn khi tiếp xúc với da, tuyệt đối an toàn kể cả cho trẻ nhỏ và phụ nữ mang thai.\\n Thảm được thiết kế 2 lớp có độ dày 6mm – đây là kích thước lý tưởng đối với nhiều hình thức tập Yoga.'),
(8, 'Thảm TPE 6mm 360s Venus 2 lớp màu xanh bích', 20, 350000, NULL, NULL),
(9, 'Thảm cao su thiên nhiên chính hãng Hummal 6mm purple', 100, 1200000, NULL, NULL),
(10, 'Thảm cao su thiên nhiên chính hãng Hummal 6mm Navy', 20, 1200000, NULL, NULL),
(11, 'Thảm cao su thiên nhiên chính hãng Hummal 6mm black', 10, 1200000, NULL, NULL),
(12, 'Thảm PU định tuyến 360s Light màu hồng', 11, 790000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `displayname` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `active` int(11) DEFAULT '1',
  `role` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `displayname`, `active`, `role`) VALUES
(3, 'leehun', '123456', 'Hun', 1, 0),
(5, 'hieupm', '123123', 'Hieu', 1, 1),
(7, 'hanghh', 'hhh', 'Mặp', 1, 0),
(11, 'xixinhdep', 'gogo', 'Xi', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
