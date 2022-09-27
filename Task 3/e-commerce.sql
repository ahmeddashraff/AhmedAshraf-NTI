-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2022 at 12:45 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(5) UNSIGNED NOT NULL,
  `street` tinytext NOT NULL,
  `floor` smallint(3) DEFAULT NULL,
  `building` varchar(64) DEFAULT NULL,
  `flat` varchar(64) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(6) UNSIGNED NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(256) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(2048) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `phone`, `password`, `email_verified_at`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed Ashraf', 'ahmeddashraf02@yahoo.com', '01017118567', '$2y$10$osPER0nYSMYPVBiiI9W8DOBM8XAIdKGPI1LJHTlEnqIS6ZO4Js7qu', NULL, '2022-09-26 21:50:43', '2022-09-26 21:50:43');

-- --------------------------------------------------------

--
-- Table structure for table `admins_phone`
--

CREATE TABLE `admins_phone` (
  `phone` tinyint(2) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(64) NOT NULL,
  `name_ar` varchar(64) NOT NULL,
  `image` varchar(128) NOT NULL DEFAULT 'default.png',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name_en`, `name_ar`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Samsung', 'سامسونج', 'default.png', 1, '2022-09-23 17:04:43', '2022-09-27 20:59:58'),
(2, 'Apple', 'ابل', 'default.png', 1, '2022-09-23 17:04:43', '2022-09-27 21:00:02'),
(5, 'Lays', 'ليز', 'default.png', 1, '2022-09-23 17:05:58', '2022-09-27 21:00:04');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` tinyint(3) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(64) NOT NULL,
  `name_en` varchar(64) NOT NULL,
  `image` varchar(128) NOT NULL DEFAULT 'default.png',
  `status` varchar(128) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name_ar`, `name_en`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'الكترونيات', 'Electronics', 'default.png', 'active', '2022-09-23 16:45:28', '2022-09-23 16:54:41'),
(2, 'ملابس', 'Clothes', 'default.png', 'active', '2022-09-23 16:45:28', '2022-09-23 16:46:13'),
(5, 'سوبرماركت', 'Supermarket', 'default.png', 'active', '2022-09-23 16:53:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(6) UNSIGNED NOT NULL,
  `name_en` varchar(32) NOT NULL,
  `name_ar` varchar(32) NOT NULL,
  `status` tinytext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `address_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` bigint(6) UNSIGNED NOT NULL,
  `discount` varchar(255) NOT NULL,
  `discount_type` varchar(64) NOT NULL,
  `max_discount_value` smallint(4) DEFAULT NULL,
  `max_usage` smallint(4) NOT NULL,
  `max_usage_per_user` tinyint(2) NOT NULL,
  `mini_order` smallint(3) DEFAULT NULL,
  `start_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `end_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `title` varchar(255) NOT NULL,
  `image` varchar(128) NOT NULL,
  `discount` int(2) UNSIGNED DEFAULT NULL,
  `discount_type` varchar(64) NOT NULL,
  `start_at` timestamp NULL DEFAULT NULL,
  `end_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(5) UNSIGNED NOT NULL,
  `total_price` decimal(10,2) UNSIGNED NOT NULL DEFAULT 0.00,
  `status` tinytext DEFAULT '\'Order placed\'',
  `delivered_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `address_id` bigint(20) UNSIGNED NOT NULL,
  `coupon_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `total_price`, `status`, `delivered_at`, `updated_at`, `created_at`, `address_id`, `coupon_id`) VALUES
(1, '45.00', '\'Order Placed\'', NULL, NULL, '2022-09-24 10:24:12', 0, 0),
(2, '6000.00', '\'Order Placed\'', NULL, NULL, '2022-09-24 10:26:18', 0, 0),
(3, '90000.00', '\'Order Placed\'', NULL, NULL, '2022-09-24 10:28:51', 0, 0),
(4, '14020.00', '\'Order Placed\'', NULL, NULL, '2022-09-24 10:29:47', 0, 0),
(5, '15.00', '\'Order Placed\'', NULL, NULL, '2022-09-24 10:30:34', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(64) NOT NULL,
  `name_en` varchar(64) NOT NULL,
  `code` bigint(6) UNSIGNED NOT NULL,
  `image` varchar(128) NOT NULL DEFAULT 'default.png',
  `quantity` smallint(3) UNSIGNED NOT NULL DEFAULT 0,
  `price` decimal(6,2) UNSIGNED NOT NULL DEFAULT 1.00,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1->active, 0 -> inactive',
  `details_en` varchar(1024) NOT NULL,
  `details_ar` varchar(1024) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `subcategory_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name_ar`, `name_en`, `code`, `image`, `quantity`, `price`, `status`, `details_en`, `details_ar`, `created_at`, `updated_at`, `subcategory_id`, `brand_id`) VALUES
(1, 'اي حاجة', 'ayhaga', 123456, 'qFDpb0jlmk3MCVOwJb7fNppAec6ddmuMMJU1q1HD.jpg', 3, '5000.00', 1, 'gamedd awyyyyyyyyyyy', 'جامد اوي', '2022-09-23 17:08:10', '2022-09-27 20:56:02', 13, 5),
(2, 'شيبسي', 'chips', 2, 'chepsi.jpg', 20, '5.00', 1, 'made in Egypt', 'صنع في مصر', '2022-09-23 21:33:14', '2022-09-25 23:27:09', 13, 5),
(3, 'لابتوب ديل', 'dell laptop', 3, 'dell.jpg', 60, '5000.00', 1, 'made in UK', 'صنع في المملكة المتحدة', '2022-09-23 21:33:16', '2022-09-25 23:27:09', 9, 1),
(4, 'جبنة فيتا', 'feta cheese', 4, 'feta.png', 50, '15.00', 1, 'made in Egypt', 'صنع في مصر', '2022-09-23 21:33:10', '2022-09-25 23:27:09', 13, 5),
(5, 'ابل ايفون 13', 'Apple iPhone 13', 5, 'iphone13.jpg', 80, '9000.00', 1, 'made in Vietnam', 'صنع في فيتنام', '2022-09-23 21:33:02', '2022-09-25 23:27:09', 10, 2),
(6, 'اي حاجة', 'ayhaga', 123457, 'PasX3MruXnmrvo9aLWtEvRSBU1mYUGXqBlQwZEzY.jpg', 3, '5000.00', 1, 'gamedd awyyyyyyyyyyy', 'جامد اوي', '2022-09-27 20:17:24', '2022-09-27 20:56:05', 13, 5);

-- --------------------------------------------------------

--
-- Table structure for table `products_offers`
--

CREATE TABLE `products_offers` (
  `offer_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `price_after_discount` decimal(5,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products_orders`
--

CREATE TABLE `products_orders` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` smallint(3) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_orders`
--

INSERT INTO `products_orders` (`product_id`, `order_id`, `quantity`) VALUES
(1, 2, 2),
(2, 4, 4),
(3, 4, 1),
(4, 1, 3),
(4, 5, 1),
(5, 3, 10),
(5, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products_specs`
--

CREATE TABLE `products_specs` (
  `spec_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_details`
-- (See below for the actual view)
--
CREATE TABLE `product_details` (
`id` bigint(20) unsigned
,`name_ar` varchar(64)
,`name_en` varchar(64)
,`image` varchar(128)
,`quantity` smallint(3) unsigned
,`price` decimal(6,2) unsigned
,`status` tinyint(1)
,`details_en` varchar(1024)
,`details_ar` varchar(1024)
,`created_at` timestamp
,`updated_at` timestamp
,`subcategory_id` bigint(20) unsigned
,`brand_id` bigint(20) unsigned
,`subcategory_name_en` varchar(64)
,`brand_name_en` varchar(64)
,`category_id` bigint(20) unsigned
,`category_name_en` varchar(64)
,`reviews_count` bigint(21)
,`reviews_average` decimal(4,0)
);

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` bigint(6) UNSIGNED NOT NULL,
  `name_ar` varchar(64) NOT NULL,
  `name_en` varchar(64) NOT NULL,
  `status` tinyint(128) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `city_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `rate` tinyint(1) UNSIGNED NOT NULL DEFAULT 1,
  `comment` varchar(1024) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`user_id`, `product_id`, `rate`, `comment`, `created_at`, `updated_at`) VALUES
(8, 1, 3, 'nice product!!', '2022-09-23 20:23:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `specs`
--

CREATE TABLE `specs` (
  `id` bigint(6) UNSIGNED NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(64) NOT NULL,
  `name_en` varchar(64) NOT NULL,
  `image` varchar(128) NOT NULL DEFAULT 'default.png',
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0->inactive, 1->active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name_ar`, `name_en`, `image`, `status`, `created_at`, `updated_at`, `category_id`) VALUES
(9, 'لابتوب', 'Laptops', 'default.png', 1, '2022-09-23 16:51:36', '2022-09-27 20:54:07', 1),
(10, 'هواتف', 'phones', 'default.png', 1, '2022-09-23 16:51:36', '2022-09-27 20:54:12', 1),
(11, 'صيفي', 'summer clothes', 'default.png', 1, '2022-09-23 16:51:36', '2022-09-27 20:54:16', 2),
(12, 'شتوي', 'winter clothes', 'default.png', 1, '2022-09-23 16:51:36', '2022-09-27 20:54:23', 2),
(13, 'وجبات خفيفة', 'Snacks', 'default.png', 1, '2022-09-23 16:56:14', '2022-09-27 20:54:26', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email` varchar(319) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `image` tinytext NOT NULL DEFAULT 'default.png',
  `gender` enum('m','f') NOT NULL DEFAULT 'm' COMMENT 'm->male, f->female',
  `verification_code` bigint(5) UNSIGNED DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone`, `password`, `image`, `gender`, `verification_code`, `email_verified_at`, `created_at`, `updated_at`) VALUES
(8, 'mohammed', 'Ashraf', 'ahmeddashraff02@gmail.com', '01017118563', '$2y$10$gGDeQFQM5UWeQh987sHtFOGmSkncfbpxHrZXtnkF4q1hcTnCzRKhG', 'default.png', 'f', 754366, '2022-09-25 22:11:30', '2022-09-21 09:55:55', '2022-09-25 22:11:30');

-- --------------------------------------------------------

--
-- Table structure for table `users_phones`
--

CREATE TABLE `users_phones` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure for view `product_details`
--
DROP TABLE IF EXISTS `product_details`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_details`  AS SELECT `products`.`id` AS `id`, `products`.`name_ar` AS `name_ar`, `products`.`name_en` AS `name_en`, `products`.`image` AS `image`, `products`.`quantity` AS `quantity`, `products`.`price` AS `price`, `products`.`status` AS `status`, `products`.`details_en` AS `details_en`, `products`.`details_ar` AS `details_ar`, `products`.`created_at` AS `created_at`, `products`.`updated_at` AS `updated_at`, `products`.`subcategory_id` AS `subcategory_id`, `products`.`brand_id` AS `brand_id`, `subcategories`.`name_en` AS `subcategory_name_en`, `brands`.`name_en` AS `brand_name_en`, `categories`.`id` AS `category_id`, `categories`.`name_en` AS `category_name_en`, count(`reviews`.`product_id`) AS `reviews_count`, round(if(avg(`reviews`.`rate`) is null,0,avg(`reviews`.`rate`)),0) AS `reviews_average` FROM ((((`products` left join `brands` on(`brands`.`id` = `products`.`brand_id`)) left join `subcategories` on(`subcategories`.`id` = `products`.`subcategory_id`)) left join `categories` on(`categories`.`id` = `subcategories`.`category_id`)) left join `reviews` on(`products`.`id` = `reviews`.`product_id`)) GROUP BY `products`.`id``id`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `admins_phone`
--
ALTER TABLE `admins_phone`
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`user_id`,`product_id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`user_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`),
  ADD KEY `subcategory_id` (`subcategory_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `products_offers`
--
ALTER TABLE `products_offers`
  ADD PRIMARY KEY (`offer_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products_orders`
--
ALTER TABLE `products_orders`
  ADD PRIMARY KEY (`product_id`,`order_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `products_specs`
--
ALTER TABLE `products_specs`
  ADD PRIMARY KEY (`spec_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`user_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `specs`
--
ALTER TABLE `specs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `verification_code` (`verification_code`);

--
-- Indexes for table `users_phones`
--
ALTER TABLE `users_phones`
  ADD UNIQUE KEY `phone` (`phone`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `specs`
--
ALTER TABLE `specs`
  MODIFY `id` bigint(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `carts_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `favourites`
--
ALTER TABLE `favourites`
  ADD CONSTRAINT `favourites_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `favourites_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`);

--
-- Constraints for table `products_offers`
--
ALTER TABLE `products_offers`
  ADD CONSTRAINT `products_offers_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products_orders`
--
ALTER TABLE `products_orders`
  ADD CONSTRAINT `products_orders_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `products_orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products_specs`
--
ALTER TABLE `products_specs`
  ADD CONSTRAINT `products_specs_ibfk_2` FOREIGN KEY (`spec_id`) REFERENCES `specs` (`id`),
  ADD CONSTRAINT `products_specs_ibfk_3` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `users_phones`
--
ALTER TABLE `users_phones`
  ADD CONSTRAINT `users_phones_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
