-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 05:38 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `study_earth`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` bigint(20) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `name`, `email`, `mobile`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Akash', 'akashtarapara222@gmail.com', 9924298272, 'sajjasjklsanjnjnlllmkads', '2021-06-03 14:56:42', '2021-06-03 14:56:42'),
(2, 'Akash', 'akashtarapara222@gmail.com', 9924298272, 'sajjasjklsanjnjnlllmkads', '2021-06-03 14:57:30', '2021-06-03 14:57:30'),
(3, 'Akash', 'akashtarapara222@gmail.com', 9924298272, 'sajjasjklsanjnjnlllmkads', '2021-06-03 14:57:44', '2021-06-03 14:57:44'),
(4, 'test', 'akashtarapara222@gmail.com', 9924298272, 'sajjasjklsanjnjnlllmkads', '2021-06-03 14:59:40', '2021-06-03 14:59:40'),
(5, 'Akash', 'akashtarapara222@gmail.com', 9924298272, 'sajjasjklsanjnjnlllmkads', '2021-06-03 15:06:54', '2021-06-03 15:06:54'),
(6, 'Akash', 'akashtarapara222@gmail.com', 9924298272, 'sajjasjklsanjnjnlllmkads', '2021-06-03 15:08:04', '2021-06-03 15:08:04'),
(7, 'Akash', 'akashtarapara222@gmail.com', 9924298272, 'sajjasjklsanjnjnlllmkads', '2021-06-03 15:09:32', '2021-06-03 15:09:32'),
(8, 'Akash', 'akashtarapara222@gmail.com', 9924298272, 'sajjasjklsanjnjnlllmkads', '2021-06-03 15:12:02', '2021-06-03 15:12:02'),
(9, 'Akash', 'akashtarapara222@gmail.com', 9924298272, 'sajjasjklsanjnjnlllmkads', '2021-06-03 15:12:07', '2021-06-03 15:12:07'),
(10, 'Akash', 'akashtarapara222@gmail.com', 9924298272, 'sajjasjklsanjnjnlllmkads', '2021-06-03 15:14:44', '2021-06-03 15:14:44'),
(11, 'Akash', 'akashtarapara222@gmail.com', 9924298272, 'sajjasjklsanjnjnlllmkads', '2021-06-03 15:19:58', '2021-06-03 15:19:58'),
(12, 'Akash', 'akashtarapara222@gmail.com', 9924298272, 'sajjasjklsanjnjnlllmkads', '2021-06-03 15:24:16', '2021-06-03 15:24:16'),
(13, 'Akash', 'akashtarapara222@gmail.com', 9924298272, 'sajjasjklsanjnjnlllmkads', '2021-06-03 15:25:25', '2021-06-03 15:25:25'),
(14, 'Akash', 'akashtarapara222@gmail.com', 9924298272, 'sajjasjklsanjnjnlllmkads', '2021-06-03 15:25:39', '2021-06-03 15:25:39'),
(15, 'Akash', 'akashtarapara222@gmail.com', 9924298272, 'sajjasjklsanjnjnlllmkads', '2021-06-03 15:27:40', '2021-06-03 15:27:40'),
(16, 'Akash', 'akashtarapara222@gmail.com', 9924298272, 'sajjasjklsanjnjnlllmkads', '2021-06-03 15:28:23', '2021-06-03 15:28:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
