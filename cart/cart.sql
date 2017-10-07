-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2017 at 02:41 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `Account_ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Account_Description` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`Account_ID`, `Name`, `Username`, `Email`, `Password`, `Account_Description`) VALUES
(1, 'Admin', 'gigagamesadmin', 'gigagames@gmail.com', 'cabusolapuzseverino', 'Admin'),
(4, 'shernon', 'shernon', 'shernonseverino@yahoo.com', 'qwe', 'Customer'),
(7, 'Arlan', 'arlancabuso', 'arlancabuso@yahoo.com', 'qwe', 'Admin'),
(8, 'mark', 'markdungo', 'markdungo@gmail.com', 'mark12345', 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(11) UNSIGNED NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `address1`, `address2`, `city`, `postal_code`, `created_at`, `updated_at`) VALUES
(1, 'Banda keta', 'Banda keni', 'San Fernando', '2000', '2017-09-27 17:39:07', '2017-09-27 17:39:07'),
(2, 'angeles', 'angeles', 'angeles', '2009', '2017-09-27 22:02:46', '2017-09-27 22:02:46'),
(3, 'San Fernando', 'San Fernando', 'San Fernando', '2000', '2017-10-01 07:15:34', '2017-10-01 07:15:34'),
(4, 'Holy Angel Village Phase 4', 'Holy Angel Village Phase 4', 'San Fernando City', '2000', '2017-10-02 11:23:30', '2017-10-02 11:23:30');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Shernon Amiel V. Severino', 'shernonseverino@yahoo.com', '2017-09-27 17:39:07', '2017-09-27 17:39:07'),
(2, 'mark dungo', 'markdungo@gmail.com', '2017-09-27 22:02:46', '2017-09-27 22:02:46'),
(3, 'Shernon Amiel V. Severino', 'shernon_severino@yahoo.com', '2017-10-01 07:15:34', '2017-10-01 07:15:34'),
(4, 'Mar Michael G. Lapuz', 'khel@marlapuz.com', '2017-10-02 11:23:30', '2017-10-02 11:23:30');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) UNSIGNED NOT NULL,
  `hash` varchar(255) NOT NULL,
  `total` float NOT NULL,
  `address_id` int(11) NOT NULL,
  `paid` tinyint(1) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `hash`, `total`, `address_id`, `paid`, `customer_id`, `created_at`, `updated_at`) VALUES
(1, '2f28ef7da98b24a2693c66cedd6f0174c452b31349e8a4b37879272e82999699', 14350, 1, 1, 1, '2017-09-27 23:39:10', '2017-09-27 17:39:10'),
(2, '3db5e8af8b360adfa1d94a5ab506af3b9b4fe2d851491e33cb62edf0dc17256c', 390, 2, 1, 2, '2017-09-28 04:02:48', '2017-09-27 22:02:48'),
(3, '59e33ea73464010c1e0538ce17959cf4e4b2de30314fa41d684191009c18b2ca', 550, 2, 1, 2, '2017-09-28 04:06:09', '2017-09-27 22:06:09'),
(4, 'baa66a2852d54e02d22ec504833438d0d80e8b24c16cb65830656c67fedbb95f', 242, 3, 1, 3, '2017-10-01 13:15:36', '2017-10-01 07:15:36'),
(5, 'cacc79de9785938911588165e6c9a033b77c2a21b6b0bf941463961cc31e779b', 230, 4, 1, 4, '2017-10-02 17:23:32', '2017-10-02 11:23:32');

-- --------------------------------------------------------

--
-- Table structure for table `orders_products`
--

CREATE TABLE `orders_products` (
  `id` int(11) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders_products`
--

INSERT INTO `orders_products` (`id`, `order_id`, `product_id`, `quantity`) VALUES
(1, 1, 1, 1),
(2, 1, 6, 4),
(3, 2, 1, 3),
(4, 3, 1, 5),
(5, 4, 6, 1),
(6, 5, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `failed` tinyint(1) NOT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `failed`, `transaction_id`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 'bpxwg757', '2017-09-27 17:39:10', '2017-09-27 17:39:10'),
(2, 2, 0, 'aqz9vcwg', '2017-09-27 22:02:48', '2017-09-27 22:02:48'),
(3, 3, 0, '6v5d1g1s', '2017-09-27 22:06:09', '2017-09-27 22:06:09'),
(4, 4, 0, 'h4zg4wdx', '2017-10-01 07:15:36', '2017-10-01 07:15:36'),
(5, 5, 0, 'j5r1av9h', '2017-10-02 11:23:32', '2017-10-02 11:23:32');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text,
  `price` float NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `slug`, `description`, `price`, `image`, `stock`, `created_at`, `updated_at`) VALUES
(1, 'Battlefield 3', 'Battlefield 3', 'XBOX', 80, 'http://www.levelupvideogames.net/wp-content/uploads/2011/10/Battlefield-3-Cover.jpg', 4, '0000-00-00 00:00:00', '2017-10-02 11:23:32'),
(2, 'Call of Duty Black Ops III', 'Call of Duty Black Ops III', 'PS3', 78, 'https://img.cinemablend.com/cb/e/a/6/b/9/e/ea6b9e8a7005e7e7c85697b6f4bbf29fb983ab9d52fb9d77ff14c108694e39dd.jpg', 10, '0000-00-00 00:00:00', '2017-09-27 07:58:55'),
(3, 'Assassin\'s Creed Syndicate', 'Assassin\'s Creed Syndicate', 'PS4', 75, 'http://img2.gram.pl/box-assassins-creed-syndicate-ps4.jpg', 10, '0000-00-00 00:00:00', '2017-09-27 07:58:56'),
(4, 'Dragon Ball Ultimate Tenkaichi', 'Dragon Ball Ultimate Tenkaichi', 'XBOX', 88, 'https://www.lukiegames.com/assets/images/Xbox-360/x360_dragon_ball_z_ult_tenkaichi_p_1u4bzz.jpg', 10, '0000-00-00 00:00:00', '2017-09-27 07:41:43'),
(5, 'Halo 3', 'Halo 3', 'PS3', 60, 'https://orig00.deviantart.net/1ea5/f/2010/092/b/8/halo_3_ps3_cover_by_tl_owns_u.png', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Far Cry 5', 'Far Cry 5', 'PS4', 92, 'http://wololo.net/wagic/wp-content/uploads/2017/05/far_cry_5-806x1024.jpg', 9, '0000-00-00 00:00:00', '2017-10-01 07:15:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`Account_ID`);

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_products`
--
ALTER TABLE `orders_products`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `Account_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `orders_products`
--
ALTER TABLE `orders_products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
