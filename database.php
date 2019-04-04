-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Feb 25, 2019 at 04:20 PM
-- Server version: 5.5.42
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `accountOmmantracrafts`
--

-- --------------------------------------------------------

--
-- Table structure for table `balanced_ladgers`
--

CREATE TABLE `balanced_ladgers` (
  `id` int(11) NOT NULL,
  `cr_dr` int(11) NOT NULL,
  `ladger_id` int(11) NOT NULL,
  `balanced` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `balanced_ladgers`
--

INSERT INTO `balanced_ladgers` (`id`, `cr_dr`, `ladger_id`, `balanced`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1900, '2019-01-27 01:41:55', '2019-01-27 08:41:55'),
(2, 2, 2, 1505000, '2019-01-27 07:44:03', '2019-01-27 14:44:03'),
(3, 2, 3, 295320, '2019-02-01 12:12:22', '2019-02-01 19:12:22'),
(4, 1, 4, 85000, '2019-01-29 06:30:38', '2019-01-29 13:30:38'),
(5, 1, 5, 1831000, '2019-02-01 12:01:18', '2019-02-01 19:01:18'),
(6, 1, 7, 578368, '2019-02-03 13:34:21', '2019-02-03 20:34:21'),
(7, 2, 8, 0, '2019-01-30 13:13:20', '2019-01-30 13:13:20'),
(8, 2, 9, 10979, '2019-01-30 13:16:42', '2019-01-30 13:16:42'),
(9, 2, 10, 0, '2019-01-30 13:17:47', '2019-01-30 13:17:47'),
(10, 2, 11, 0, '2019-01-30 13:18:48', '2019-01-30 13:18:48'),
(11, 2, 13, 0, '2019-01-30 13:23:44', '2019-01-30 13:23:44'),
(12, 1, 14, 16760, '2019-01-30 06:25:37', '2019-01-30 13:25:37'),
(13, 2, 15, 142135, '2019-01-30 13:28:39', '2019-01-30 13:28:39'),
(14, 2, 16, 0, '2019-01-30 13:30:54', '2019-01-30 13:30:54'),
(15, 2, 17, 474, '2019-01-30 13:32:07', '2019-01-30 13:32:07'),
(16, 1, 18, 2394, '2019-01-30 06:39:45', '2019-01-30 13:39:45'),
(17, 2, 19, 96265, '2019-01-30 13:46:35', '2019-01-30 13:46:35'),
(18, 2, 20, 23550, '2019-01-30 13:47:28', '2019-01-30 13:47:28'),
(19, 2, 21, 32520, '2019-01-30 13:48:20', '2019-01-30 13:48:20'),
(20, 2, 22, 279181, '2019-01-30 13:49:21', '2019-01-30 13:49:21'),
(21, 1, 23, 4950, '2019-01-30 06:52:37', '2019-01-30 13:52:37'),
(22, 2, 24, 14547, '2019-01-30 13:54:03', '2019-01-30 13:54:03'),
(23, 2, 25, 3800, '2019-01-30 13:54:49', '2019-01-30 13:54:49'),
(24, 2, 26, 57945, '2019-01-30 13:55:44', '2019-01-30 13:55:44'),
(25, 1, 27, 65460, '2019-01-30 06:57:39', '2019-01-30 13:57:39'),
(26, 2, 28, 12470, '2019-01-30 14:05:02', '2019-01-30 14:05:02'),
(27, 2, 29, 97260, '2019-01-30 14:07:24', '2019-01-30 14:07:24'),
(28, 2, 30, 0, '2019-01-30 14:08:32', '2019-01-30 14:08:32'),
(29, 2, 31, 0, '2019-01-30 14:09:27', '2019-01-30 14:09:27'),
(30, 2, 32, 91770, '2019-01-30 14:10:41', '2019-01-30 14:10:41'),
(31, 2, 33, 9585, '2019-01-30 14:17:26', '2019-01-30 14:17:26'),
(32, 1, 34, 5800, '2019-02-21 08:43:42', '2019-02-21 02:58:42'),
(33, 2, 35, 778444, '2019-01-30 14:20:24', '2019-01-30 14:20:24'),
(34, 2, 36, 0, '2019-01-30 14:21:42', '2019-01-30 14:21:42'),
(35, 2, 37, 26400, '2019-01-30 14:22:36', '2019-01-30 14:22:36'),
(36, 2, 38, 0, '2019-01-30 14:24:37', '2019-01-30 14:24:37'),
(37, 2, 39, 51026, '2019-01-30 14:26:14', '2019-01-30 14:26:14'),
(38, 2, 40, 0, '2019-01-30 14:26:57', '2019-01-30 14:26:57'),
(39, 2, 41, 0, '2019-01-30 14:27:32', '2019-01-30 14:27:32'),
(40, 2, 42, 11, '2019-01-30 16:47:23', '2019-01-30 16:47:23'),
(41, 2, 43, 409252, '2019-01-30 16:54:21', '2019-01-30 16:54:21'),
(42, 2, 44, 0, '2019-01-30 16:55:19', '2019-01-30 16:55:19'),
(43, 2, 45, 2200, '2019-01-30 16:55:53', '2019-01-30 16:55:53'),
(44, 2, 46, 0, '2019-01-30 17:00:04', '2019-01-30 17:00:04'),
(45, 2, 47, 800, '2019-02-03 06:33:18', '2019-02-03 13:33:18');

-- --------------------------------------------------------

--
-- Table structure for table `billmasters`
--

CREATE TABLE `billmasters` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `date` date NOT NULL,
  `billnumber` bigint(20) NOT NULL,
  `pannumber` varchar(200) NOT NULL,
  `advanced` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billmasters`
--

INSERT INTO `billmasters` (`id`, `name`, `address`, `date`, `billnumber`, `pannumber`, `advanced`, `created_at`, `updated_at`) VALUES
(1, 'Amrti Kafle', 'Kathmandu', '2019-02-20', 101, '9866', 0, '2019-02-20 08:33:09', '2019-02-20 08:33:09'),
(2, 'Puga Gurung', 'Kapan', '2019-02-19', 105, '123', 0, '2019-02-20 08:34:18', '2019-02-20 08:34:18'),
(3, 'Puga Gurung', 'Kapan', '2019-02-19', 105, '123', 0, '2019-02-20 09:11:10', '2019-02-20 09:11:10'),
(4, 'Amrti Kafle', 'KBD', '2019-02-19', 901, '123', 500, '2019-02-20 09:26:02', '2019-02-20 09:26:02');

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(11) NOT NULL,
  `particular` varchar(200) DEFAULT NULL,
  `code` varchar(20) DEFAULT NULL,
  `size` bigint(20) DEFAULT NULL,
  `weight` bigint(20) DEFAULT NULL,
  `qty` bigint(20) DEFAULT NULL,
  `rate` bigint(20) DEFAULT NULL,
  `date` varchar(200) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `amount` bigint(20) DEFAULT NULL,
  `billnumber` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `particular`, `code`, `size`, `weight`, `qty`, `rate`, `date`, `name`, `address`, `amount`, `billnumber`, `created_at`, `updated_at`) VALUES
(1, '1', '1', 1, 1, 1, 1, NULL, NULL, NULL, 1, 101, '2019-02-20 14:18:09', NULL),
(2, '1', '1', 1, 1, 1, 1, NULL, NULL, NULL, 1, 101, '2019-02-20 14:18:09', NULL),
(3, '1', '1', 1, 1, 1, 1, NULL, NULL, NULL, 1, 101, '2019-02-20 14:18:09', NULL),
(4, '1', '1', 1, 1, 1, 1, NULL, NULL, NULL, 1, 105, '2019-02-20 14:19:18', NULL),
(5, '1', '1', 1, 1, 1, 1, NULL, NULL, NULL, 1, 105, '2019-02-20 14:19:18', NULL),
(6, '1', '1', 1, 1, 1, 1, NULL, NULL, NULL, 1, 105, '2019-02-20 14:56:10', NULL),
(7, '1', '1', 1, 1, 1, 1, NULL, NULL, NULL, 1, 105, '2019-02-20 14:56:10', NULL),
(8, '1', '1', 1, 1, 1, 1, NULL, NULL, NULL, 1, 901, '2019-02-20 15:11:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `entries`
--

CREATE TABLE `entries` (
  `id` int(10) unsigned NOT NULL,
  `entrie_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dr_cr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ladger` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drAmount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `crAmount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chequeNumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `narration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balanced_cr_dr` int(11) DEFAULT NULL,
  `balanceds` bigint(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `entries`
--

INSERT INTO `entries` (`id`, `entrie_date`, `dr_cr`, `ladger`, `drAmount`, `crAmount`, `chequeNumber`, `narration`, `tag`, `create_by`, `balanced_cr_dr`, `balanceds`, `created_at`, `updated_at`) VALUES
(1, '2075-10-11', '2', '1', NULL, '1000', NULL, 'singing boql 12', 'ss', NULL, 2, 2600, '2019-01-27 08:33:54', '2019-01-27 08:33:54'),
(2, '2075-10-12', '2', '1', NULL, '1500', NULL, 'gonh', 'ss', NULL, 2, 4100, '2019-01-27 08:39:21', '2019-01-27 08:39:21'),
(3, '2075-10-12', '2', '1', '1000', NULL, NULL, 'cash', 'ss', NULL, 2, 3100, '2019-01-27 08:40:49', '2019-01-27 08:40:49'),
(4, '2075-10-12', '2', '1', '5000', NULL, NULL, 'cash', 'ss', NULL, 1, 1900, '2019-01-27 08:41:55', '2019-01-27 08:41:55'),
(5, '2075-10-13', '2', '2', NULL, '5000', NULL, 'cash paid', 'Factory', NULL, 2, 1605000, '2019-01-27 13:51:20', '2019-01-27 13:51:20'),
(6, '2075-10-04', '2', '2', '100000', '0', NULL, 'Against of brass raw purchased from Rajaram on 16 jan,', 'Factory', NULL, 2, 1505000, '2019-01-27 14:44:03', '2019-01-27 14:44:03'),
(7, '2019-01-16', '2', '3', NULL, '282840', NULL, 'Brass scrap purchased 4710400 kg @ 600/ kg = Rs. 2,82,840.00', 'Factory', NULL, 2, 282840, '2019-01-27 15:00:25', '2019-01-27 15:00:25'),
(8, '2019-01-16', '2', '3', '100000', NULL, '38 MO', 'Previous Due  2,82,840.00     Chq. paid 1,00,000.00    Balance  1,82,840.00', 'Factory', NULL, 2, 182840, '2019-01-27 15:07:09', '2019-01-27 15:07:09'),
(9, '2075-10-15', '2', '4', '100000', NULL, NULL, 'Cash paid', 'Singing Bowl', NULL, 1, 100000, '2019-01-29 13:28:48', '2019-01-29 13:28:48'),
(10, '2075-10-15', '2', '4', NULL, '15000', NULL, 'Singingbowl 15kg@1000', 'Singing Bowl', NULL, 1, 85000, '2019-01-29 13:30:38', '2019-01-29 13:30:38'),
(11, '2075-10-15', '2', '5', '1600000', NULL, NULL, 'Total transaction till today', 'Factory', NULL, 1, 1600000, '2019-01-29 13:59:00', '2019-01-29 13:59:00'),
(12, '2075-10-15', '2', '5', '100000', NULL, NULL, 'cash paid', 'Factory', NULL, 1, 1700000, '2019-01-29 14:04:59', '2019-01-29 14:04:59'),
(13, '2075-10-15', '2', '5', NULL, '50000', NULL, 'Singing bowl 50kg@1000=Rs 50,000', 'Factory', NULL, 1, 1650000, '2019-01-29 14:06:02', '2019-01-29 14:06:02'),
(14, '2019-01-29', '2', '5', '20000', NULL, NULL, 'Cash for workers grinder & Dhalai', 'Factory', NULL, 1, 1670000, '2019-01-29 16:19:12', '2019-01-29 16:19:12'),
(15, '2075-10-14', '2', '7', NULL, '15050', NULL, 'Brass wire plain bangles 98@40= Rs 3920.00\r\nCopper wire plain bangles 137@40= Rs 5840.00\r\nCopper Om mantra + 8 Mandala carved wire bangles 53@60=Rs 3180\r\n1'''' Copper Sheet 8 mandala carved flat bangles 19@130= Rs 2470.00', 'Jewelery', NULL, 2, 15050, '2019-01-29 20:13:16', '2019-01-29 20:13:16'),
(16, '2075-10-14', '2', '7', '15000', NULL, NULL, 'cash paid', 'Jewelery', NULL, 2, 50, '2019-01-29 20:21:03', '2019-01-29 20:21:03'),
(17, '2075-10-16', '2', '14', '16760', NULL, NULL, 'Total Transaction', 'Bangles', NULL, 1, 16760, '2019-01-30 13:25:37', '2019-01-30 13:25:37'),
(18, '2019-01-28', '2', '18', '2394', NULL, NULL, 'Total transaction', 'Metal Bangles', NULL, 1, 2394, '2019-01-30 13:39:45', '2019-01-30 13:39:45'),
(19, '2019-01-28', '2', '23', '4950', NULL, NULL, 'Transaction till today', 'Hammer gulpa', NULL, 1, 4950, '2019-01-30 13:52:37', '2019-01-30 13:52:37'),
(20, '2019-01-28', '2', '27', '65460', NULL, NULL, 'Transaction till Today', 'siku', NULL, 1, 65460, '2019-01-30 13:57:39', '2019-01-30 13:57:39'),
(21, '2019-01-31', '2', '5', '100000', NULL, NULL, 'charcoal, friday,duwakot= 500kg brass', 'Factory', NULL, 1, 1770000, '2019-01-31 20:59:44', '2019-01-31 20:59:44'),
(22, '2019-02-01', '2', '5', NULL, '22000', NULL, 'taken cash back to pay rent for the month of Poush Rs. 22,000.00', 'Factory', NULL, 1, 1748000, '2019-02-01 13:24:53', '2019-02-01 13:24:53'),
(23, '2019-02-01', '2', '5', '83000', NULL, NULL, 'Cash paid for brass scrap due amount of Rajaram', 'Factory', NULL, 1, 1831000, '2019-02-01 19:01:18', '2019-02-01 19:01:18'),
(24, '2019-02-01', '2', '3', '100000', NULL, NULL, 'left to entry online but entry in j.v. in last week 10 days before paid from shop', 'Factory', NULL, 2, 82840, '2019-02-01 19:09:44', '2019-02-01 19:09:44'),
(25, '2019-02-01', '2', '3', '82840', NULL, NULL, 'cash paid nill', 'Factory', NULL, 2, 0, '2019-02-01 19:10:31', '2019-02-01 19:10:31'),
(26, '2019-02-01', '2', '3', NULL, '295320', NULL, 'brass scrap purchase     492.200 kg @ 600  = Rs', 'Factory', NULL, 2, 295320, '2019-02-01 19:12:22', '2019-02-01 19:12:22'),
(27, '2075-10-18', '2', '34', NULL, '2000', NULL, 'w/m single bajra pendant   100 pcs  @ 20.00   =  Rs. 2,000.00', 'Factory', NULL, 1, 1800, '2019-02-01 19:15:59', '2019-02-01 19:15:59'),
(28, '2075-10-18', '2', '34', '5000', NULL, NULL, 'Cash paid', 'Factory', NULL, 1, 6800, '2019-02-01 19:17:09', '2019-02-01 19:17:09'),
(29, '2019-02-01', '2', '47', NULL, '2000', NULL, 'W/M bajra pendant 100pcs@20= Rs 2000.00', 'bajra', NULL, 2, 5800, '2019-02-03 13:32:21', '2019-02-03 13:32:21'),
(30, '2019-02-01', '2', '47', '5000', NULL, NULL, 'Cash paid', 'bajra', NULL, 2, 800, '2019-02-03 13:33:18', '2019-02-03 13:33:18'),
(31, '2019-02-01', '2', '7', '468418', NULL, NULL, 'Amount taken from ledger.', 'jewelery', NULL, 1, 468368, '2019-02-03 20:28:00', '2019-02-03 20:28:00'),
(32, '2019-01-25', '2', '7', '65000', NULL, NULL, 'cash given', 'jewelery', NULL, 1, 533368, '2019-02-03 20:29:37', '2019-02-03 20:29:37'),
(33, '2019-01-30', '2', '7', '15000', NULL, NULL, 'cash paid', 'jewelery', NULL, 1, 548368, '2019-02-03 20:30:37', '2019-02-03 20:30:37'),
(34, '2019-01-31', '2', '7', '20000', NULL, NULL, 'cash paid', 'jewelery', NULL, 1, 568368, '2019-02-03 20:31:43', '2019-02-03 20:31:43'),
(35, '2019-02-03', '2', '7', '10000', NULL, NULL, 'cash paid', 'jewelery', NULL, 1, 578368, '2019-02-03 20:34:21', '2019-02-03 20:34:21'),
(36, '2019-02-21', '1', '34', NULL, NULL, NULL, 'Text', 'ok', NULL, 1, 6800, '2019-02-21 02:42:37', '2019-02-21 02:42:37'),
(37, '2019-02-21', '1', '34', NULL, NULL, NULL, 'Text', 'ok', NULL, 1, 6800, '2019-02-21 02:43:14', '2019-02-21 02:43:14'),
(38, '2019-02-21', '1', '34', NULL, NULL, NULL, 'Text', 'ok', NULL, 1, 6800, '2019-02-21 02:46:06', '2019-02-21 02:46:06'),
(39, '2019-02-21', '1', '34', NULL, NULL, NULL, 'Text', 'ok', NULL, 1, 6800, '2019-02-21 02:46:31', '2019-02-21 02:46:31'),
(40, '2019-02-21', '1', '34', NULL, NULL, NULL, 'shjdfds', 'iusdvoiusd v', NULL, 1, 5900, '2019-02-21 02:56:22', '2019-02-21 02:56:22'),
(41, '2019-02-21', '2', '34', NULL, NULL, NULL, 'sdjfhsdf', 'd hsid vaiudf', NULL, 1, 5800, '2019-02-21 02:57:21', '2019-02-21 02:57:21'),
(42, '2019-02-21', '1', '34', '100', NULL, NULL, 'sjkfhdfks g', 'dflgk fdg', NULL, 1, 5900, '2019-02-21 02:57:53', '2019-02-21 02:57:53'),
(43, '2019-02-22', '1', '34', NULL, NULL, NULL, 'sdkjfhgds', 'iufhsiu vgfiusy', NULL, 1, 5800, '2019-02-21 02:58:42', '2019-02-21 02:58:42');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(10) unsigned NOT NULL,
  `parent_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `parent_group`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, '1', 'Sundary Creditors', '005', '2019-01-27 17:22:35', '2019-01-30 13:26:51'),
(2, '2', 'Sundary Debtors', '009', '2019-01-30 13:10:49', '2019-01-30 13:26:36');

-- --------------------------------------------------------

--
-- Table structure for table `ladgers`
--

CREATE TABLE `ladgers` (
  `id` int(10) unsigned NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opBalanceDc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opBalance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ladgers`
--

INSERT INTO `ladgers` (`id`, `group`, `name`, `code`, `opBalanceDc`, `opBalance`, `note`, `created_at`, `updated_at`) VALUES
(3, '1', 'Rajaram Shah', '11', '1', '0.00', 'Factory', '2019-01-27 14:51:35', '2019-01-27 14:58:34'),
(4, '2', 'Shyam', '003', '2', '0.00', 'Singing Bowl', '2019-01-29 13:27:34', '2019-01-29 13:27:34'),
(5, '2', 'Wosim', '004', '2', '0.00', 'Factory', '2019-01-29 13:56:57', '2019-01-29 13:56:57'),
(7, '1', 'Ranjit Dai', '004', '2', '0.00', 'Jewelery', '2019-01-29 20:06:55', '2019-01-29 20:06:55'),
(8, '1', 'A.A. Handicraft', '11', '2', '0.00', 'Basantapur', '2019-01-30 13:13:12', '2019-01-30 13:13:12'),
(9, '1', 'Arjun Gupta', '12', '2', '10979', 'Conch', '2019-01-30 13:16:28', '2019-01-30 13:16:28'),
(10, '1', 'Akash Handicraft', '13', '2', '0.00', 'Cushion', '2019-01-30 13:17:39', '2019-01-30 13:17:39'),
(11, '1', 'Anjuman Seikh', '14', '2', '0.00', 'India', '2019-01-30 13:18:41', '2019-01-30 13:18:41'),
(12, '1', 'Adil', '14', '2', '0.00', 'Bronze Gulpa', '2019-01-30 13:21:23', '2019-01-30 13:21:23'),
(13, '1', 'Bikash Kaji Dangol', '14', '2', '0.00', 'Cushion', '2019-01-30 13:23:37', '2019-01-30 13:23:37'),
(14, '1', 'Binod Rijal', '15', '2', '0.00', 'Bangles', '2019-01-30 13:24:26', '2019-01-30 13:24:26'),
(15, '1', 'Bishwo Gajurel', '16', '2', '142135', 'Tingshya', '2019-01-30 13:28:23', '2019-01-30 13:28:23'),
(16, '1', 'Badri Rasaili', '16', '2', '0.00', 'Tingshya', '2019-01-30 13:30:47', '2019-01-30 13:30:47'),
(17, '1', 'Bhimsen B.K', '17', '2', '474', 'Bangles', '2019-01-30 13:31:53', '2019-01-30 13:31:53'),
(18, '1', 'Bhim Bdr B.k', '17', '2', '0.00', 'Metal Bangles', '2019-01-30 13:32:55', '2019-01-30 13:32:55'),
(19, '1', 'Bells', '17', '2', '96265', 'Bells', '2019-01-30 13:46:26', '2019-01-30 13:46:26'),
(20, '1', 'Basnet Handicraft', '18', '2', '23550', 'Shop', '2019-01-30 13:47:20', '2019-01-30 13:47:20'),
(21, '1', 'Bikram Maharjan', '19', '2', '32520', 'Mane', '2019-01-30 13:48:10', '2019-01-30 13:48:10'),
(22, '1', 'Chandi Rana', '20', '2', '279181', 'Handmade singing bowl', '2019-01-30 13:49:12', '2019-01-30 13:49:12'),
(23, '1', 'Dilip Thapa', '21', '2', '0.00', 'Hammer gulpa', '2019-01-30 13:50:06', '2019-01-30 13:50:06'),
(24, '1', 'Dinesh Panjiyar', '23', '2', '14547', 'khukuri', '2019-01-30 13:53:51', '2019-01-30 13:53:51'),
(25, '1', 'Dharma Dai', '24', '2', '3800', 'unknown', '2019-01-30 13:54:40', '2019-01-30 13:54:40'),
(26, '1', 'Faiyaz AMD', '25', '2', '57945', 'Mala', '2019-01-30 13:55:36', '2019-01-30 13:55:36'),
(27, '1', 'Gautam Bajracharya', '26', '2', '0.00', 'Siku', '2019-01-30 13:56:46', '2019-01-30 13:56:46'),
(28, '1', 'Gautam Maharjan', '27', '2', '12470', 'filigiri mandala', '2019-01-30 14:04:52', '2019-01-30 14:04:52'),
(29, '1', 'Gaurab Shrestha', '28', '2', '97260', 'Singing Bowl', '2019-01-30 14:07:13', '2019-01-30 14:07:13'),
(30, '1', 'Hera Maharjan', '29', '2', '0.00', 'Metal Bangles', '2019-01-30 14:08:22', '2019-01-30 14:08:22'),
(31, '1', 'Indira', '30', '2', '0.00', 'Metal rings', '2019-01-30 14:09:17', '2019-01-30 14:09:17'),
(32, '1', 'Jahir Alam', '31', '2', '91770', 'Mala', '2019-01-30 14:10:28', '2019-01-30 14:10:28'),
(33, '1', 'jivan shakya', '32', '2', '9585', 'mane', '2019-01-30 14:17:02', '2019-01-30 14:17:02'),
(34, '1', 'not', '33', '1', '0.00', 'Bajra', '2019-01-30 14:18:06', '2019-02-03 13:29:30'),
(35, '1', 'Krishlal Maharjan', '34', '2', '778444', 'mix jewelery', '2019-01-30 14:18:59', '2019-01-30 14:18:59'),
(36, '1', 'Kailash Raimaji', '35', '2', '0.00', 'Stick', '2019-01-30 14:21:36', '2019-01-30 14:21:36'),
(37, '1', 'Kiran Maharjan', '36', '2', '26400', 'carving conch', '2019-01-30 14:22:27', '2019-01-30 14:22:27'),
(38, '1', 'K.p sir', '37', '2', '0.00', 'bhaktapur', '2019-01-30 14:24:23', '2019-01-30 14:24:23'),
(39, '1', 'Krishnaman maharjan', '38', '2', '51026', 'mane', '2019-01-30 14:25:59', '2019-01-30 14:25:59'),
(40, '1', 'Kashi Shrestha', '39', '2', '0.00', 'Statue', '2019-01-30 14:26:48', '2019-01-30 14:26:48'),
(41, '1', 'Kamal Bk', '40', '2', '0.00', 'unknown', '2019-01-30 14:27:25', '2019-01-30 14:27:25'),
(42, '1', 'Maila Bk', '41', '2', '11', 'Pendant', '2019-01-30 16:47:10', '2019-01-30 16:47:10'),
(43, '1', 'Maqsud Ali', '42', '2', '409252', 'Mala', '2019-01-30 16:54:10', '2019-01-30 16:54:10'),
(44, '1', 'Mahesh Dai', '43', '2', '0.00', 'Singing Bowl', '2019-01-30 16:54:59', '2019-01-30 16:54:59'),
(45, '1', 'Noman', '44', '2', '2200', 'unknown', '2019-01-30 16:55:44', '2019-01-30 16:55:44'),
(46, '1', 'Noor MD', '45', '2', '0.00', 'mala', '2019-01-30 16:59:56', '2019-01-30 16:59:56'),
(47, '1', 'Janak Thankot', '50', '2', '3800', 'bajra', '2019-02-03 13:30:09', '2019-02-03 13:30:09');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL,
  `delivary_date` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_user_id` int(11) NOT NULL,
  `particular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `print_status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `delivary_date`, `order_user_id`, `particular`, `qty`, `weight`, `rate`, `amount`, `status`, `image`, `print_status`, `created_at`, `updated_at`) VALUES
(1, '2075-09-11', 1, 'singing Bowl', '100', '13', '1050', '13000', '2', '1548572546.jpg', 1, '2019-01-27 14:02:26', '2019-01-27 14:02:26'),
(2, '2075-09-11', 1, 'tingshya', '100', '0.00', '375', '375', '2', '1548572626.jpg', 1, '2019-01-27 14:03:46', '2019-01-27 14:03:46'),
(3, '2075-10-05', 2, 'S/p etching Shree Yantra pendants', '250', '2', '115', '0.00', '3', '1548578614.jpg', 1, '2019-01-27 15:43:34', '2019-01-27 15:43:34'),
(4, '2075-09-28', 2, 'Jali lapis stone finger rings', '250', '1', '75', '18750', '1', '1548663890.jpg', 1, '2019-01-28 15:24:51', '2019-01-28 15:24:51'),
(5, '2075-10-05', 1, 'S/p etching Shree Yantra pendants', '250', '20', '115', '0.00', 'Select Status', '1548859786.png', 0, '2019-01-30 21:49:47', '2019-01-30 21:49:47'),
(6, '0000-00-00', 1, 'Amrit Kafle', '1', '1', '1', '1', '1', '1549267706.jpg', 0, '2019-02-04 02:23:26', '2019-02-04 02:23:26'),
(7, '0000-00-00', 1, 'Amrit Kafle', '1', '1', '1', '1', '1', '1549267742.jpg', 0, '2019-02-04 02:24:02', '2019-02-04 02:24:02'),
(8, '0000-00-00', 1, 'Amrit Kafle', '1', '1', '1', '1', '1', '1549267765.jpg', 0, '2019-02-04 02:24:26', '2019-02-04 02:24:26'),
(9, '2019-02-20', 2, 'Amrit Kafle', '10', '0', '10', '100', '2', '1550740349.jpg', NULL, '2019-02-21 03:27:29', '2019-02-21 03:27:29'),
(10, '2019-02-20', 2, 'Amrit Kafle', '10', '0', '10', '100', '2', '1550740471.jpg', NULL, '2019-02-21 03:29:31', '2019-02-21 03:29:31'),
(11, '2019-02-21', 1, 'Tets', '0', '20', '100', '2000', '2', '1550740515.jpg', NULL, '2019-02-21 03:30:15', '2019-02-21 03:30:15');

-- --------------------------------------------------------

--
-- Table structure for table `order_users`
--

CREATE TABLE `order_users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_users`
--

INSERT INTO `order_users` (`id`, `name`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'ERIC', 'd', '11111111', '2019-01-27 08:28:57', '2019-01-27 08:28:57'),
(2, 'Ranjit Dai', 'Gaun', '9851071676', '2019-01-27 15:35:07', '2019-01-27 15:35:07'),
(3, 'sonam Dai(Freedom)', 'spain', '00', '2019-02-01 14:01:47', '2019-02-01 14:01:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$XHdA0uMJBPpw2aus2M6F0OGO/oR8lHD1zfmniJrInq65t6FrqMbiS', 'PKhokkWLa0usSts4VSJ5RcHvcVg5eM12eQiFDEsEf1q9VyebuKBPF0PzNWPG', '2019-01-27 02:43:08', '2019-01-27 02:43:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `balanced_ladgers`
--
ALTER TABLE `balanced_ladgers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billmasters`
--
ALTER TABLE `billmasters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entries`
--
ALTER TABLE `entries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ladgers`
--
ALTER TABLE `ladgers`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_users`
--
ALTER TABLE `order_users`
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
-- AUTO_INCREMENT for table `balanced_ladgers`
--
ALTER TABLE `balanced_ladgers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `billmasters`
--
ALTER TABLE `billmasters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `entries`
--
ALTER TABLE `entries`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ladgers`
--
ALTER TABLE `ladgers`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `order_users`
--
ALTER TABLE `order_users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;