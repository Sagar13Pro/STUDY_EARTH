-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2021 at 05:31 AM
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
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transaction_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `txn_id` varchar(191) NOT NULL,
  `txn_amount` int(11) NOT NULL,
  `payment_mode` varchar(191) NOT NULL,
  `currency` varchar(191) NOT NULL,
  `txn_date` date NOT NULL,
  `status` varchar(191) NOT NULL,
  `resp_code` varchar(191) NOT NULL,
  `resp_msg` varchar(191) NOT NULL,
  `bank_txn_id` varchar(191) NOT NULL,
  `bank_name` varchar(191) NOT NULL,
  `checksum` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`transaction_id`, `user_id`, `order_id`, `txn_id`, `txn_amount`, `payment_mode`, `currency`, `txn_date`, `status`, `resp_code`, `resp_msg`, `bank_txn_id`, `bank_name`, `checksum`, `created_at`, `updated_at`) VALUES
(1, 18, 303550, '20210527111212800110168427102627925', 5, 'DC', 'INR', '2021-05-27', 'TXN_SUCCESS', '01', 'Txn Success', '777001451204590', 'Bank of Bahrain and Kuwait', '/8/gJhR3sUoYplugjCiIE5nA+pxwubX0yyJsTU7P9lPrk3J+7A6+/WcYXkxptlXxvnav0eXysLRhztA+EcJG78K4ezylGmaj7eGRQojVdi0=', '2021-05-27 03:29:06', '2021-05-27 03:29:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transaction_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transaction_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
