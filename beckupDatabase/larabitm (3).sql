-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2019 at 05:39 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `larabitm`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brandName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brandDescription` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brandName`, `brandDescription`, `status`, `created_at`, `updated_at`) VALUES
(1, 'T-Shirt', 'Men\'s tshirt', 1, '2019-07-23 23:02:35', '2019-07-29 10:07:38'),
(2, 'Ecstasy', 'Ecstasy shirt', 1, '2019-07-23 23:06:26', '2019-07-24 03:03:27'),
(3, 'Rich Man', 'Rich men t-shirt', 0, '2019-07-23 23:07:30', '2019-07-29 10:07:34'),
(4, 'Darjibari', 'Darjibari lungi', 1, '2019-07-23 23:07:57', '2019-07-23 23:47:52'),
(18, 'Edited', 'Last', 0, '2019-07-29 10:07:15', '2019-07-29 10:07:31'),
(19, 'RichMan', 'Edited done', 1, '2019-08-10 11:49:32', '2019-08-10 11:49:32'),
(20, 'Ecstasy', 'men\'s tshirt', 1, '2019-08-10 11:49:39', '2019-08-10 11:49:39'),
(21, 'Easy', 'Shirt', 0, '2019-08-10 11:49:54', '2019-08-10 11:49:54'),
(22, 'Ecstasy', 'top', 1, '2019-08-10 11:50:14', '2019-08-10 11:50:14');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cateName` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cateDescription` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cateName`, `cateDescription`, `status`, `created_at`, `updated_at`) VALUES
(31, 'Men', 'T-shirt', 1, '2019-07-29 23:10:01', '2019-07-29 23:10:01'),
(32, 'Women', 'Top', 1, '2019-07-29 23:10:12', '2019-08-11 03:12:42'),
(33, 'Kid', 'kid dress', 1, '2019-07-29 23:10:19', '2019-07-29 23:10:19'),
(35, 'Shoes', 'Shoes details', 1, '2019-08-07 03:31:02', '2019-08-07 03:31:02');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `fname`, `lname`, `email`, `phone`, `password`, `address`, `created_at`, `updated_at`) VALUES
(9, 'Gracious', 'Zad', 'gracious.zad@protonmail.com', '43434341', '$2y$10$EMvRRhdkXjf/HH1VwycUU.ivRlR7ogdU19/FhXiHwtlXxb9vWmoUi', 'Feni', '2019-08-24 07:30:51', '2019-08-24 07:30:51'),
(10, 'amzad', 'hossain', 'amzad_hossain8@outlook.com', '1627335800', '$2y$10$FUrCG/wm8SLDtWD2Qlcnnea5DO011.XgQk05N3IpcapzYD8Apt.Da', 'Dhanmondi Zigatola', '2019-08-24 22:40:11', '2019-08-24 22:40:11'),
(11, 'Gracious', 'Zad', 'gracious.zad@protonmail.com', '434343433', '$2y$10$9TpJdItNzzPFU3Zu2XhoWefmXmcp8lpXZwCJgfPOAYlErCwJyBniW', 'Dhaka', '2019-08-26 08:55:09', '2019-08-26 08:55:09');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_21_164252_create_categories_table', 2),
(4, '2019_07_21_165354_create_categories_table', 3),
(5, '2019_07_24_045318_create_brands_table', 4),
(6, '2019_07_28_062235_create_products_table', 5),
(7, '2019_08_23_161849_create_customers_table', 6),
(8, '2019_08_24_131411_create_shippings_table', 7),
(9, '2019_08_25_044259_create_orders_table', 8),
(10, '2019_08_25_044423_create_payments_table', 8),
(11, '2019_08_25_044452_create_orderdetails_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` int(10) UNSIGNED NOT NULL,
  `orderId` int(11) NOT NULL,
  `proId` int(11) NOT NULL,
  `proName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `orderId`, `proId`, `proName`, `price`, `qty`, `created_at`, `updated_at`) VALUES
(1, 1, 29, 'Women\'s bag', 8000.00, 1, '2019-08-24 23:33:53', '2019-08-24 23:33:53'),
(2, 1, 35, 'shirt', 500.00, 2, '2019-08-24 23:33:53', '2019-08-24 23:33:53'),
(3, 2, 31, 'Jeans', 2500.00, 1, '2019-08-26 02:12:45', '2019-08-26 02:12:45'),
(4, 2, 33, 'Watch', 9500.00, 1, '2019-08-26 02:12:45', '2019-08-26 02:12:45'),
(5, 3, 29, 'Women\'s bag', 8000.00, 2, '2019-08-26 02:43:42', '2019-08-26 02:43:42'),
(6, 4, 25, 'T-shirt', 1500.00, 1, '2019-08-26 08:55:42', '2019-08-26 08:55:42'),
(7, 4, 26, 'shirt', 2000.00, 2, '2019-08-26 08:55:42', '2019-08-26 08:55:42'),
(8, 4, 28, 'Watch', 4000.00, 2, '2019-08-26 08:55:42', '2019-08-26 08:55:42'),
(9, 4, 30, 'Kid shirt', 800.00, 1, '2019-08-26 08:55:42', '2019-08-26 08:55:42'),
(10, 4, 35, 'shirt', 500.00, 2, '2019-08-26 08:55:42', '2019-08-26 08:55:42'),
(11, 4, 27, 'Women\'s shoe', 5000.00, 1, '2019-08-26 08:55:42', '2019-08-26 08:55:42'),
(12, 4, 34, 'Sandle', 4000.00, 1, '2019-08-26 08:55:42', '2019-08-26 08:55:42'),
(13, 4, 31, 'Jeans', 2500.00, 1, '2019-08-26 08:55:42', '2019-08-26 08:55:42');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `custId` int(11) NOT NULL,
  `shipId` int(11) NOT NULL,
  `orderTotal` double(10,2) NOT NULL,
  `orderStatus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `custId`, `shipId`, `orderTotal`, `orderStatus`, `created_at`, `updated_at`) VALUES
(1, 10, 3, 9000.00, 'pending', '2019-08-24 23:33:53', '2019-08-24 23:33:53'),
(2, 9, 5, 12000.00, 'pending', '2019-08-26 02:12:45', '2019-08-26 02:12:45'),
(3, 9, 5, 16000.00, 'pending', '2019-08-26 02:43:42', '2019-08-26 02:43:42'),
(4, 11, 6, 26800.00, 'pending', '2019-08-26 08:55:42', '2019-08-26 08:55:42');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `orderId` int(11) NOT NULL,
  `paymentType` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paymentStatus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `orderId`, `paymentType`, `paymentStatus`, `created_at`, `updated_at`) VALUES
(1, 1, 'Cash', 'pending', '2019-08-24 23:33:53', '2019-08-24 23:33:53'),
(2, 2, 'Cash', 'pending', '2019-08-26 02:12:45', '2019-08-26 02:12:45'),
(3, 3, 'Cash', 'pending', '2019-08-26 02:43:42', '2019-08-26 02:43:42'),
(4, 4, 'Cash', 'pending', '2019-08-26 08:55:42', '2019-08-26 08:55:42');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cate_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `productName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `productImg` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cate_id`, `brand_id`, `productName`, `price`, `qty`, `short_desc`, `long_desc`, `productImg`, `status`, `created_at`, `updated_at`) VALUES
(25, 31, 2, 'T-shirt', 1500.00, 10, 'A quick brown fox jumps over the lazy dog.', '<p>A quick brown fox jumps over the lazy dog.A quick brown fox jumps over the lazy dog.A quick brown fox jumps over the lazy dog.A quick brown fox jumps over the lazy dog.A quick brown fox jumps over the lazy dog.A quick brown fox jumps over the lazy dog.</p>', 'productImages/review-3.png', 1, '2019-08-10 11:52:12', '2019-08-10 11:52:12'),
(26, 31, 4, 'shirt', 2000.00, 20, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'productImages/New-2018-Top-Quality-Man-s-Shirt-Casual-Men-s-Cotton-dress-shirt-Style-Personality-Wave.jpg_640x640.jpg', 1, '2019-08-10 12:19:59', '2019-08-10 12:19:59'),
(27, 35, 2, 'Women\'s shoe', 5000.00, 10, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'productImages/f-p-1.jpg', 1, '2019-08-10 12:21:34', '2019-08-10 12:21:34'),
(28, 31, 2, 'Watch', 4000.00, 20, 'Lorem Ipsum is simply dummy text of', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'productImages/f-p-3.jpg', 1, '2019-08-10 12:22:16', '2019-08-10 12:22:16'),
(29, 33, 4, 'Women\'s bag', 8000.00, 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'productImages/f-p-2.jpg', 1, '2019-08-10 12:24:21', '2019-08-10 12:24:21'),
(30, 33, 1, 'Kid shirt', 800.00, 50, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'productImages/61sEO4QQkbL._UX522_.jpg', 1, '2019-08-10 12:26:26', '2019-08-10 12:26:26'),
(31, 31, 19, 'Jeans', 2500.00, 50, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'productImages/i2.jpg', 1, '2019-08-10 12:27:15', '2019-08-10 12:27:15'),
(33, 31, 19, 'Watch', 9500.00, 15, 'and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'productImages/i5.jpg', 1, '2019-08-10 12:32:27', '2019-08-10 12:32:27'),
(34, 32, 2, 'Sandle', 4000.00, 30, 'It is a long established fact that a reader will be distracted by the readable content of a page', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, some</p>', 'productImages/m-product-1.jpg', 1, '2019-08-10 12:40:09', '2019-08-10 12:40:09'),
(35, 33, 4, 'shirt', 500.00, 30, 'It is a long established fact that a reader will be distracted by the readable', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, some</p>', 'productImages/new-product1.png', 1, '2019-08-10 12:41:15', '2019-08-10 12:41:15');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `fullName`, `email`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Gracious Zad', 'gracious.zad@protonmail.com', '43434341', 'Feni', '2019-08-24 07:32:50', '2019-08-24 07:32:50'),
(2, 'Gracious Zad', 'gracious.zad@protonmail.com', '43434341', 'Feni', '2019-08-24 07:41:43', '2019-08-24 07:41:43'),
(3, 'amzad hossain', 'amzad_hossain8@outlook.com', '1627335800', 'Dhanmondi Zigatola', '2019-08-24 22:40:23', '2019-08-24 22:40:23'),
(4, 'amzad hossain', 'amzad_hossain8@outlook.com', '1627335800', 'Dhanmondi Zigatola', '2019-08-25 08:08:17', '2019-08-25 08:08:17'),
(5, 'Gracious Zad', 'gracious.zad@protonmail.com', '43434341', 'Feni', '2019-08-26 02:12:41', '2019-08-26 02:12:41'),
(6, 'Gracious Zad', 'gracious.zad@protonmail.com', '434343433', 'Dhaka', '2019-08-26 08:55:38', '2019-08-26 08:55:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$8alR3yWNMZiL16XZHRs/OO/KsPNWSc6tgMuRZcxIG7l7/SHSYZDwe', NULL, '2019-07-18 09:01:16', '2019-07-18 09:01:16'),
(2, 'Foisal Hossain', 'foisal@gmail.com', NULL, '$2y$10$m4CnOYBMD.YKTqXSwfob.e2t0yrralL4pzyNUo0AAykMhm.EsvgYy', 'ItNia54UHidnupkBDhgJdsHsu4NstLmgKjdruRb63BeBT8GIi9RXKS3ZA03l', '2019-07-18 10:05:48', '2019-07-18 10:05:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
