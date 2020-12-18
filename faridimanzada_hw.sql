-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: mysql-faridimanzada.alwaysdata.net
-- Generation Time: Dec 03, 2020 at 08:49 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faridimanzada_hw`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounting`
--

CREATE TABLE `accounting` (
  `idAccounting` tinyint(4) NOT NULL,
  `accountingType` varchar(10) NOT NULL,
  `multiplierCoefficient` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounting`
--

INSERT INTO `accounting` (`idAccounting`, `accountingType`, `multiplierCoefficient`) VALUES
(1, 'income', 1),
(2, 'expense', -1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `idCategory` tinyint(4) NOT NULL,
  `category` varchar(15) NOT NULL,
  `idAccounting` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`idCategory`, `category`, `idAccounting`) VALUES
(1, 'Transportation', 2),
(2, 'Entertainment', 2),
(3, 'Rent', 2),
(4, 'Phone', 2),
(5, 'Food', 2),
(6, 'Restaurant', 2),
(7, 'Cinema', 2),
(8, 'Theater', 2),
(9, 'Gas', 2),
(10, 'Postage', 2),
(11, 'Travel', 2),
(12, 'Leisure', 2),
(13, 'Salary', 1),
(14, 'Scholarship', 1),
(15, 'Pocket money', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `idPayment` tinyint(4) NOT NULL,
  `paymentMethod` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`idPayment`, `paymentMethod`) VALUES
(1, 'Cash'),
(2, 'Check'),
(3, 'Bank card'),
(4, 'Bank transfer');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `idTransaction` int(11) NOT NULL,
  `transactionAmount` float NOT NULL,
  `transactionDate` date NOT NULL,
  `idCategory` int(11) NOT NULL,
  `idPayment` tinyint(4) NOT NULL,
  `exist` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`idTransaction`, `transactionAmount`, `transactionDate`, `idCategory`, `idPayment`, `exist`) VALUES
(190, 8.92, '2019-11-04', 5, 3, 1),
(191, 5, '2019-11-04', 4, 4, 1),
(192, 436, '2019-11-05', 3, 4, 1),
(193, 15, '2019-11-05', 15, 1, 1),
(194, 15.19, '2019-11-07', 6, 3, 1),
(195, 0.2, '2019-11-08', 1, 1, 1),
(196, 20, '2019-11-09', 2, 3, 1),
(197, 0.2, '2019-11-11', 1, 1, 1),
(198, 21, '2019-11-14', 2, 1, 1),
(199, 54.55, '2019-11-16', 5, 3, 1),
(200, 7, '2019-11-17', 7, 3, 1),
(201, 33.2, '2019-11-19', 5, 2, 1),
(202, 0.2, '2019-11-19', 1, 1, 1),
(203, 15, '2019-11-21', 13, 1, 1),
(204, 0.2, '2019-11-23', 1, 1, 1),
(205, 28.13, '2019-11-24', 6, 1, 1),
(206, 800, '2019-12-01', 14, 4, 1),
(207, 0.2, '2019-12-01', 1, 1, 1),
(208, 32.84, '2019-12-04', 5, 3, 1),
(209, 15, '2019-12-04', 2, 3, 1),
(210, 5, '2019-12-04', 4, 4, 1),
(211, 436, '2019-12-05', 3, 4, 1),
(212, 22, '2019-12-05', 13, 1, 1),
(213, 22.53, '2019-12-10', 6, 2, 1),
(214, 0.2, '2019-12-16', 1, 1, 1),
(215, 36.72, '2019-12-18', 5, 1, 1),
(216, 18.95, '2019-12-20', 5, 2, 1),
(217, 22, '2019-12-20', 13, 1, 0),
(218, 7, '2019-12-22', 7, 3, 0),
(219, 0.2, '2019-12-22', 1, 1, 0),
(220, 23, '2019-12-26', 2, 2, 0),
(221, 123456, '2019-12-17', 2, 2, 0),
(222, 1020, '2019-12-19', 4, 4, 0),
(223, 4560, '2001-06-20', 12, 2, 1),
(224, 8, '2020-01-01', 1, 1, 1),
(225, 9872, '2020-01-24', 7, 3, 1),
(226, 505, '2020-01-10', 3, 2, 0),
(227, 789456, '2020-01-16', 7, 4, 0),
(228, 2324, '2020-01-20', 7, 3, 1),
(229, 961, '1999-02-07', 7, 3, 1),
(230, 9999, '2020-09-24', 13, 1, 1),
(231, 3000, '2020-10-23', 5, 4, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounting`
--
ALTER TABLE `accounting`
  ADD PRIMARY KEY (`idAccounting`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`idCategory`),
  ADD KEY `idAccounting` (`idAccounting`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`idPayment`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`idTransaction`),
  ADD KEY `idCategory` (`idCategory`),
  ADD KEY `idPayment` (`idPayment`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounting`
--
ALTER TABLE `accounting`
  MODIFY `idAccounting` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `idCategory` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `idPayment` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `idTransaction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
