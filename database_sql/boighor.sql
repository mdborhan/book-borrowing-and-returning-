-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2018 at 06:21 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boighor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Super Admin' COMMENT 'Admin|Super Admin',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `phone_no`, `avatar`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Nazrul Islam', 'nazrulislam94bd@gmail.com', '$2y$10$kCEXU.JgVugo1mLKRqEo.eY0xRSko4cgKfWI9tatS4JerP2ucpuYe', '01917497927', NULL, 'Super Admin', 'KmHAb8zgUp3OpmXnf7vaCpAMwvyj6d9mReM87ZrmTrj91dnF2zaIzOhcFdxa', '2018-11-07 10:47:44', '2018-11-07 13:56:10');

-- --------------------------------------------------------

--
-- Table structure for table `book_sellings`
--

CREATE TABLE `book_sellings` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_sellings`
--

INSERT INTO `book_sellings` (`id`, `user_id`, `user_name`, `book_name`, `author_name`, `book_type`, `price`, `quantity`, `phone_no`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'borhanuddin', 'Agni Bina', 'kazi nazrul', 'new', 200, 1, '01682180100', '1544330629.PNG', '2018-12-08 22:43:49', '2018-12-08 22:43:49'),
(2, 1, 'borhanuddin', 'Blackholer Bacchal', 'Mohammad Zafar Iqbal', 'old', 100, 1, '01682180100', '1544330795.PNG', '2018-12-08 22:46:35', '2018-12-08 22:46:35');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Kazi Najrul Islam', 'Kazi Najrul Islam', '1542015847.jpeg', '2018-11-12 03:44:07', '2018-11-12 03:44:07'),
(2, 'Robindronath Tagor', 'Robindronath Tagor', '1542015890.jpg', '2018-11-12 03:44:50', '2018-11-12 03:44:50'),
(3, 'Saratchandra Chattopadhay', 'Saratchandra Chattopadhay', '1542015977.jpg', '2018-11-12 03:46:17', '2018-11-12 03:46:17'),
(4, 'Humayn Ahmed', 'Humayn Ahmed', '1542016007.jpg', '2018-11-12 03:46:47', '2018-11-12 03:46:47'),
(5, 'Begum Rokeya', 'Begum Rokeya', '1542016039.jpg', '2018-11-12 03:47:19', '2018-11-12 03:47:19'),
(6, 'Muhammed Zafar Iqbal', 'Muhammed Zafar Iqbal', '1542016088.jpg', '2018-11-12 03:48:08', '2018-11-12 03:48:08'),
(7, 'Samaresh Majumdar', 'Samaresh Majumdar', NULL, '2018-12-08 17:29:27', '2018-12-08 17:29:27'),
(8, 'Michael Madhusudan Dutta', 'Michael Madhusudan Dutta', NULL, '2018-12-08 17:54:16', '2018-12-08 17:54:16'),
(9, 'Other', NULL, NULL, '2018-12-08 18:15:18', '2018-12-08 18:15:18');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_quantity` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `user_id`, `order_id`, `ip_address`, `product_quantity`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 1, '::1', 1, '2018-12-08 07:48:56', '2018-12-08 07:50:00'),
(2, 1, 1, 2, '::1', 2, '2018-12-08 12:43:44', '2018-12-08 22:40:05'),
(3, 14, 1, 2, '::1', 1, '2018-12-08 22:38:11', '2018-12-08 22:40:05'),
(4, 9, NULL, 3, '::1', 1, '2018-12-09 00:56:44', '2018-12-09 00:59:39');

-- --------------------------------------------------------

--
-- Table structure for table `cart_rents`
--

CREATE TABLE `cart_rents` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_quantity` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_rents`
--

INSERT INTO `cart_rents` (`id`, `product_id`, `user_id`, `order_id`, `ip_address`, `product_quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '::1', 2, '2018-12-08 10:03:33', '2018-12-08 10:06:52'),
(4, 1, 1, 2, '::1', 1, '2018-12-08 13:06:46', '2018-12-08 22:41:24');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'SCIENCE', 'Science', NULL, NULL, '2018-11-12 03:49:00', '2018-12-07 13:45:07'),
(2, 'STORY', 'Story', NULL, NULL, '2018-11-12 03:49:44', '2018-12-07 13:44:52'),
(3, 'KOBITA', 'kobita', NULL, NULL, '2018-11-12 03:50:12', '2018-12-07 13:44:35'),
(4, 'HISTORY', NULL, NULL, NULL, '2018-12-07 13:49:18', '2018-12-07 13:49:18'),
(8, 'Muhammed Zafar Iqbal', 'Muhammed Zafar IqbalMuhammed Zafar Iqbal', NULL, 1, '2018-12-08 01:35:03', '2018-12-08 01:35:03'),
(9, 'Humayn Ahmed', 'Humayn Ahmed	Humayn Ahmed', NULL, 4, '2018-12-08 01:35:34', '2018-12-08 01:35:59'),
(10, 'Kazi Najrul Islam', 'Kazi Najrul Islam 	Kazi Najrul Islam', NULL, 3, '2018-12-08 01:36:32', '2018-12-08 01:36:32'),
(11, 'Robindronath Tagor', 'Robindronath Tagor Robindronath Tagor', NULL, 2, '2018-12-08 01:37:04', '2018-12-08 01:37:04'),
(12, 'NOVEL', NULL, NULL, NULL, '2018-12-08 17:20:38', '2018-12-08 17:20:38'),
(13, 'Humayun Ahmed', NULL, NULL, 12, '2018-12-08 17:21:24', '2018-12-08 17:21:24'),
(14, 'Robindronath Tagor', 'Robindronath Tagor', NULL, 12, '2018-12-08 17:22:58', '2018-12-08 17:22:58'),
(15, 'Kazi Najrul Islam', NULL, NULL, 12, '2018-12-08 17:23:39', '2018-12-08 17:23:39'),
(16, 'Robindronath Tagor', 'Robindronath Tagor', NULL, 3, '2018-12-08 17:25:01', '2018-12-08 17:25:01'),
(17, 'Samaresh Majumdar', 'Samaresh Majumdar', NULL, 12, '2018-12-08 17:26:18', '2018-12-08 17:26:18'),
(18, 'Muhammed Zafar Iqbal', 'Muhammed Zafar Iqbal', NULL, 12, '2018-12-08 17:35:51', '2018-12-08 17:35:51'),
(19, 'Michael Madhusudan Dutta', 'Michael Madhusudan Dutta', NULL, 12, '2018-12-08 17:54:54', '2018-12-08 17:54:54'),
(20, 'Islamic', NULL, NULL, NULL, '2018-12-08 18:15:03', '2018-12-08 18:15:03'),
(21, 'Islamic', NULL, NULL, 20, '2018-12-08 18:16:33', '2018-12-08 18:16:46');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `body` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `commentable_id` int(11) DEFAULT NULL,
  `commentagle_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `body`, `product_id`, `commentable_id`, `commentagle_type`, `created_at`, `updated_at`) VALUES
(1, 1, 'Good Book.', 17, NULL, NULL, '2018-12-08 19:19:31', '2018-12-08 19:19:31');

-- --------------------------------------------------------

--
-- Table structure for table `dates`
--

CREATE TABLE `dates` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `division_id`, `created_at`, `updated_at`) VALUES
(9, 'Jatrabari', 2, '2018-12-08 01:11:57', '2018-12-08 01:11:57'),
(10, 'Panthapath', 2, '2018-12-08 01:12:15', '2018-12-08 01:12:15'),
(11, 'Banani', 2, '2018-12-08 01:12:29', '2018-12-08 01:12:29'),
(12, 'Gulistan', 2, '2018-12-08 01:12:44', '2018-12-08 01:12:44'),
(13, 'Dhmondi', 2, '2018-12-08 01:13:05', '2018-12-08 01:13:05'),
(14, 'Gulshan', 2, '2018-12-08 01:13:21', '2018-12-08 01:13:21'),
(16, 'Farmgate', 2, '2018-12-08 01:14:00', '2018-12-08 01:14:00'),
(17, 'Mirpur', 2, '2018-12-08 01:14:15', '2018-12-08 01:14:15'),
(18, 'Badda', 2, '2018-12-08 01:32:26', '2018-12-08 01:32:26');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `name`, `priority`, `created_at`, `updated_at`) VALUES
(2, 'DHAKA', 1, '2018-12-08 01:03:38', '2018-12-08 01:03:38');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2018_02_23_014906_create_categories_table', 1),
(5, '2018_02_23_015040_create_brands_table', 1),
(8, '2018_07_21_115850_create_divisions_table', 1),
(9, '2018_07_21_115908_create_districts_table', 1),
(12, '2018_11_04_153551_create_settings_table', 2),
(13, '2018_11_04_162311_create_payments_table', 3),
(15, '2018_08_28_033110_create_orders_table', 4),
(16, '2018_02_23_015128_create_admins_table', 5),
(26, '2018_11_12_200639_create_book_sellings_table', 9),
(34, '2018_08_28_034133_create_carts_table', 13),
(35, '2014_10_12_000000_create_users_table', 14),
(36, '2018_11_10_012529_create_order_rents_table', 15),
(37, '2018_11_10_012619_create_cart_rents_table', 15),
(38, '2018_11_12_150017_create_comments_table', 15),
(39, '2018_02_22_165732_create_products_table', 16),
(40, '2018_02_23_020211_create_product_images_table', 16),
(41, '2018_12_08_170101_create_dates_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `payment_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `is_paid` tinyint(1) NOT NULL DEFAULT '0',
  `is_completed` tinyint(1) NOT NULL DEFAULT '0',
  `is_seen_by_admin` tinyint(1) NOT NULL DEFAULT '0',
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `payment_id`, `ip_address`, `name`, `phone_no`, `shipping_address`, `email`, `message`, `is_paid`, `is_completed`, `is_seen_by_admin`, `transaction_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 2, '::1', 'nazrul', '01682180100', 'gulshan', 'mdborhan410@gmail.com', 'hello', 1, 1, 1, '145555', '2018-12-08 07:50:00', '2018-12-08 22:49:34'),
(2, 1, 2, '::1', 'borhan uddin', '01682180100', 'cha-53,Gulshan,dhaka-12', 'mdborhan410@gmail.com', NULL, 0, 0, 0, '248966', '2018-12-08 22:40:05', '2018-12-08 22:40:05'),
(3, NULL, 2, '::1', 'Borhan Uddin', '01682180100', 'badda', 'mdborhan410@gmail.com', NULL, 0, 1, 1, '12255', '2018-12-09 00:59:38', '2018-12-09 01:07:56');

-- --------------------------------------------------------

--
-- Table structure for table `order_rents`
--

CREATE TABLE `order_rents` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `payment_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `is_paid` tinyint(1) NOT NULL DEFAULT '0',
  `is_completed` tinyint(1) NOT NULL DEFAULT '0',
  `is_seen_by_admin` tinyint(1) NOT NULL DEFAULT '0',
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_rents`
--

INSERT INTO `order_rents` (`id`, `user_id`, `payment_id`, `ip_address`, `name`, `phone_no`, `shipping_address`, `email`, `message`, `is_paid`, `is_completed`, `is_seen_by_admin`, `transaction_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '::1', 'borhan uddin', '01682180100', 'cha-53,gulshan dhaka-1212', 'mdborhan410@gmail.com', NULL, 1, 1, 1, '123456', '2018-12-08 10:06:52', '2018-12-08 10:29:12'),
(2, 1, 2, '::1', 'borhan uddin', '01682180100', 'Gulshan, dhaka1212', 'mdborhan410@gmail.com', NULL, 0, 0, 0, '2546621', '2018-12-08 22:41:24', '2018-12-08 22:41:24');

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
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` tinyint(4) NOT NULL DEFAULT '1',
  `short_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Payment NO',
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'agent|personal',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `name`, `image`, `priority`, `short_name`, `no`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Cash In', 'cash_in.jpg', 1, 'cash_in', NULL, NULL, '2018-11-04 16:32:57', '2018-11-04 16:32:57'),
(2, 'Bkash', 'bkash.jpg', 2, 'bkash', '01917497927', 'personal', '2018-11-04 16:39:14', '2018-11-04 16:39:14'),
(3, 'Rocket', 'rocket.jpg', 3, 'rocket', '01917497927', 'personal', '2018-11-04 16:43:28', '2018-11-04 16:43:28');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_condition` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `price` int(11) NOT NULL,
  `rent_charge` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `offer_price` int(11) DEFAULT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `title`, `book_condition`, `description`, `slug`, `quantity`, `price`, `rent_charge`, `status`, `offer_price`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, 9, 4, '1971', 'New Book', '1971  written by Humayun Ahmed.', '1971', 3, 200, 80, 0, NULL, 1, '2018-12-08 09:43:48', '2018-12-08 17:11:22'),
(2, 17, 7, 'Aat Kuthori Noy DorojaSamaresh Majumdar', 'New Book', 'Aat Kuthori Noy DorojaSamaresh Majumdar', 'aat-kuthori-noy-dorojasamaresh-majumdar', 3, 320, 180, 0, NULL, 1, '2018-12-08 17:33:24', '2018-12-08 17:33:24'),
(3, 8, 6, 'Adhunik Ishoper Golpo', 'New Book', 'Adhunik Ishoper Golpo Muhammed Zafar Iqbal', 'adhunik-ishoper-golpo', 5, 350, 200, 0, NULL, 1, '2018-12-08 17:35:10', '2018-12-08 17:35:10'),
(4, 10, 1, 'Agni Bina', 'Old Book', 'Agni Bina  written by Kazi Najrul Islam', 'agni-bina', 4, 200, 50, 0, NULL, 1, '2018-12-08 17:42:28', '2018-12-08 17:42:28'),
(5, 10, 1, 'Agranthita Gaan', 'Old Book', 'Agranthita Gaan written by Kazi Najrul Islam', 'agranthita-gaan', 10, 150, 50, 0, NULL, 1, '2018-12-08 17:44:44', '2018-12-08 17:44:44'),
(6, 13, 4, 'Aaj Ami Kothao Jabo Naa', 'New Book', 'Aaj Ami Kothao Jabo Naa By Humayun Ahmed', 'aaj-ami-kothao-jabo-naa', 2, 280, 150, 0, NULL, 1, '2018-12-08 17:46:15', '2018-12-08 17:46:15'),
(7, 8, 6, 'Andhokarer Groho', 'New Book', 'Andhokarer Groho By Muhammed Zafar Iqbal', 'andhokarer-groho', 3, 310, 210, 0, NULL, 1, '2018-12-08 17:48:25', '2018-12-08 17:48:25'),
(8, 13, 4, 'Akash Jora Megh', 'Old Book', 'Akash Jora Megh By Humayun Ahmed', 'akash-jora-megh', 2, 220, 80, 0, NULL, 1, '2018-12-08 17:49:45', '2018-12-08 17:49:45'),
(9, 15, 1, 'Badhon Hara', 'New Book', 'Badhon Hara By Kazi Najrul Islam', 'badhon-hara', 3, 380, 250, 0, NULL, 1, '2018-12-08 17:51:28', '2018-12-08 17:51:28'),
(10, 14, 2, 'Bhanu Singher Padabali', 'Old Book', 'Bhanu Singher Padabali By  Rabindranath Tagore', 'bhanu-singher-padabali', 2, 360, 200, 0, NULL, 1, '2018-12-08 17:53:04', '2018-12-08 17:53:04'),
(11, 19, 8, 'Buro Shaliker Ghare Ro', 'New Book', 'Buro Shaliker Ghare Ro ByMichael Madhusudan Dutta', 'buro-shaliker-ghare-ro', 5, 320, 150, 0, NULL, 1, '2018-12-08 17:56:48', '2018-12-08 17:56:48'),
(12, 10, 1, 'Bon GeetiKazi', 'New Book', 'Bon GeetiKazi By Najrul Islam', 'bon-geetikazi', 1, 220, 80, 0, NULL, 1, '2018-12-08 17:59:04', '2018-12-08 17:59:04'),
(13, 21, 9, 'Tafsir Ibn Kasir p1,2,3', 'New Book', 'Tafsir Ibn Kasir p1,2,3', 'tafsir-ibn-kasir-p123', 10, 1000, 200, 0, NULL, 1, '2018-12-08 18:18:03', '2018-12-08 18:18:03'),
(14, 21, 9, 'The Hundred', 'New Book', 'The HundredThe Hundred', 'the-hundred', 8, 100, 50, 0, NULL, 1, '2018-12-08 18:19:13', '2018-12-08 18:19:13'),
(15, 21, 9, 'shirat bishokos prothom khondo', 'New Book', 'shirat_bishokos_prothom_khondo', 'shirat-bishokos-prothom-khondo', 7, 300, 100, 0, NULL, 1, '2018-12-08 18:20:54', '2018-12-08 18:20:54'),
(16, 21, 9, 'Forbidden Work in Shariah', 'New Book', 'Forbidden Work in Shariah', 'forbidden-work-in-shariah', 5, 500, 250, 0, NULL, 1, '2018-12-08 18:21:54', '2018-12-08 18:21:54'),
(17, 11, 2, 'Tumi ChroKal Shak', 'Old Book', 'Tumi ChroKal Shak Abdul Hakim', 'tumi-chrokal-shak', 4, 290, 200, 0, NULL, 1, '2018-12-08 18:24:37', '2018-12-08 18:24:37'),
(18, 19, 8, 'Meghnath Vadh', 'Old Book', 'Meghnath Vadh Michael Madhusudan Dutta', 'meghnath-vadh', 6, 120, 50, 0, NULL, 1, '2018-12-08 18:27:28', '2018-12-08 18:27:28');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `pdf`, `created_at`, `updated_at`) VALUES
(1, 1, '1544283828.PNG', 'edit1971Humayun Ahmed.pdf', '2018-12-08 09:43:48', '2018-12-08 09:43:48'),
(2, 2, '1544312004.PNG', NULL, '2018-12-08 17:33:24', '2018-12-08 17:33:24'),
(3, 3, '1544312110.PNG', NULL, '2018-12-08 17:35:10', '2018-12-08 17:35:10'),
(4, 4, '1544312548.PNG', 'AGNI BINA (www.amarbooks.com).pdf', '2018-12-08 17:42:28', '2018-12-08 17:42:28'),
(5, 5, '1544312684.PNG', 'Agranthita GaanKazi Najrul Islam.pdf', '2018-12-08 17:44:44', '2018-12-08 17:44:44'),
(6, 6, '1544312775.PNG', 'Aaj Ami Kothao Jabo NaaHumayun Ahmed.pdf', '2018-12-08 17:46:15', '2018-12-08 17:46:15'),
(7, 7, '1544312905.PNG', NULL, '2018-12-08 17:48:25', '2018-12-08 17:48:25'),
(8, 8, '1544312985.PNG', NULL, '2018-12-08 17:49:46', '2018-12-08 17:49:46'),
(9, 9, '1544313088.PNG', 'Badhon Hara Kazi Najrul Islam.pdf', '2018-12-08 17:51:28', '2018-12-08 17:51:28'),
(10, 10, '1544313184.PNG', 'Bhanu Singher Padabali Rabindranath Tagore.pdf', '2018-12-08 17:53:04', '2018-12-08 17:53:04'),
(11, 11, '1544313408.PNG', 'Buro Shaliker Ghare RoMichael Madhusudan Dutta.pdf', '2018-12-08 17:56:48', '2018-12-08 17:56:49'),
(12, 12, '1544313545.PNG', 'Bon GeetiKazi Najrul Islam.pdf', '2018-12-08 17:59:05', '2018-12-08 17:59:05'),
(13, 13, '1544314683.PNG', NULL, '2018-12-08 18:18:03', '2018-12-08 18:18:03'),
(14, 14, '1544314753.PNG', NULL, '2018-12-08 18:19:13', '2018-12-08 18:19:13'),
(15, 15, '1544314854.PNG', NULL, '2018-12-08 18:20:54', '2018-12-08 18:20:54'),
(16, 16, '1544314914.PNG', 'Forbidden-Work-in-Shariah.pdf', '2018-12-08 18:21:54', '2018-12-08 18:21:54'),
(17, 17, '1544315078.PNG', NULL, '2018-12-08 18:24:38', '2018-12-08 18:24:38'),
(18, 18, '1544315248.PNG', 'Meghnath Vadh Michael Madhusudan Dutta.pdf', '2018-12-08 18:27:28', '2018-12-08 18:27:28');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_cost` int(10) UNSIGNED NOT NULL DEFAULT '30',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `email`, `phone`, `address`, `shipping_cost`, `created_at`, `updated_at`) VALUES
(1, 'nazrulislam94bd@gmail.com', '01917497927', 'Jatrabari', 30, '2018-11-04 15:42:28', '2018-11-04 15:42:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_id` int(10) UNSIGNED NOT NULL COMMENT 'Division Table ID',
  `district_id` int(10) UNSIGNED NOT NULL COMMENT 'District Table ID',
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '0' COMMENT '0=Inactive|1=Active|2=Ban',
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_address` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `phone_no`, `email`, `password`, `street_address`, `division_id`, `district_id`, `status`, `ip_address`, `avatar`, `shipping_address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'borhan', 'uddin', 'borhanuddin', '01682180100', 'mdborhan410@gmail.com', '$2y$10$ywlmvoKn10mBqJ38aaf0OOgkX5zVQ9w3WOQ23RxkNZzN5xKL8ENBW', 'badda', 2, 14, 1, '::1', NULL, NULL, 'GF5cxrI0Jh4CeQCu63pczfckdBFeCvfAnTK4KJceZsj8mvk6ZDQt81qZQusb', '2018-12-08 09:46:24', '2018-12-08 10:02:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `book_sellings`
--
ALTER TABLE `book_sellings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`),
  ADD KEY `carts_order_id_foreign` (`order_id`);

--
-- Indexes for table `cart_rents`
--
ALTER TABLE `cart_rents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_rents_user_id_foreign` (`user_id`),
  ADD KEY `cart_rents_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dates`
--
ALTER TABLE `dates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `districts_division_id_foreign` (`division_id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_payment_id_foreign` (`payment_id`);

--
-- Indexes for table `order_rents`
--
ALTER TABLE `order_rents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_rents_user_id_foreign` (`user_id`),
  ADD KEY `order_rents_payment_id_foreign` (`payment_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payments_short_name_unique` (`short_name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_phone_no_unique` (`phone_no`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `book_sellings`
--
ALTER TABLE `book_sellings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart_rents`
--
ALTER TABLE `cart_rents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dates`
--
ALTER TABLE `dates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_rents`
--
ALTER TABLE `order_rents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cart_rents`
--
ALTER TABLE `cart_rents`
  ADD CONSTRAINT `cart_rents_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_rents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_rents`
--
ALTER TABLE `order_rents`
  ADD CONSTRAINT `order_rents_payment_id_foreign` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_rents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
