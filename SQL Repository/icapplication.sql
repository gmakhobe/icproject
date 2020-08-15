-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2020 at 03:22 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
CREATE Database `icapplication`;
--

-- --------------------------------------------------------

--
-- Table structure for table `quoteslandingpage`
--

CREATE TABLE `quoteslandingpage` (
  `QuoteID` bigint(20) NOT NULL,
  `ProviderName` varchar(150) DEFAULT NULL,
  `FromCurrencyCode` varchar(3) DEFAULT NULL,
  `FromCurrencyName` varchar(150) DEFAULT NULL,
  `ToCurrencyCode` varchar(3) DEFAULT NULL,
  `ToCurrencyName` varchar(150) NOT NULL,
  `ExchangeRate` float DEFAULT NULL,
  `BidRate` float DEFAULT NULL,
  `AskRate` float DEFAULT NULL,
  `TimeZone` varchar(3) DEFAULT NULL,
  `LastRefreshed` datetime DEFAULT NULL,
  `CreatedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quoteslandingpage`
--

INSERT INTO `quoteslandingpage` (`QuoteID`, `ProviderName`, `FromCurrencyCode`, `FromCurrencyName`, `ToCurrencyCode`, `ToCurrencyName`, `ExchangeRate`, `BidRate`, `AskRate`, `TimeZone`, `LastRefreshed`, `CreatedDate`) VALUES
(14, 'www.alphavantage.co', 'USD', 'United States Dollar', 'ZAR', 'South African Rand', 17.3676, 17.367, 17.3683, 'UTC', '2020-08-15 11:28:04', '2020-08-15 11:28:21'),
(15, 'www.alphavantage.co', 'GBP', 'British Pound Sterling', 'ZAR', 'South African Rand', 22.7157, 22.7147, 22.7166, 'UTC', '2020-08-15 11:28:13', '2020-08-15 11:28:21'),
(16, 'www.alphavantage.co', 'EUR', 'Euro', 'ZAR', 'South African Rand', 20.5604, 20.5597, 20.5604, 'UTC', '2020-08-15 11:28:13', '2020-08-15 11:28:21'),
(17, 'www.alphavantage.co', 'JPY', 'Japanese Yen', 'ZAR', 'South African Rand', 0.1631, 0.163095, 0.163107, 'UTC', '2020-08-15 11:28:18', '2020-08-15 11:28:21'),
(18, 'www.alphavantage.co', 'USD', 'United States Dollar', 'ZAR', 'South African Rand', 17.3676, 17.3675, 17.3677, 'UTC', '2020-08-15 11:31:21', '2020-08-15 11:32:07'),
(19, 'www.alphavantage.co', 'GBP', 'British Pound Sterling', 'ZAR', 'South African Rand', 22.7157, 22.7155, 22.716, 'UTC', '2020-08-15 11:32:00', '2020-08-15 11:32:07'),
(20, 'www.alphavantage.co', 'EUR', 'Euro', 'ZAR', 'South African Rand', 20.5604, 20.5594, 20.5607, 'UTC', '2020-08-15 11:32:02', '2020-08-15 11:32:07'),
(21, 'www.alphavantage.co', 'JPY', 'Japanese Yen', 'ZAR', 'South African Rand', 0.1631, 0.163093, 0.163108, 'UTC', '2020-08-15 11:32:04', '2020-08-15 11:32:07'),
(26, 'www.alphavantage.co', 'USD', 'United States Dollar', 'ZAR', 'South African Rand', 17.3676, 17.3675, 17.3679, 'UTC', '2020-08-15 12:55:10', '2020-08-15 12:55:21'),
(27, 'www.alphavantage.co', 'GBP', 'British Pound Sterling', 'ZAR', 'South African Rand', 22.7157, 22.7147, 22.7165, 'UTC', '2020-08-15 12:55:12', '2020-08-15 12:55:21'),
(28, 'www.alphavantage.co', 'EUR', 'Euro', 'ZAR', 'South African Rand', 20.5604, 20.5594, 20.5607, 'UTC', '2020-08-15 12:55:03', '2020-08-15 12:55:21'),
(29, 'www.alphavantage.co', 'JPY', 'Japanese Yen', 'ZAR', 'South African Rand', 0.1631, 0.163094, 0.163104, 'UTC', '2020-08-15 12:55:17', '2020-08-15 12:55:21'),
(30, 'www.alphavantage.co', 'USD', 'United States Dollar', 'ZAR', 'South African Rand', 17.3676, 17.3671, 17.3681, 'UTC', '2020-08-15 12:56:02', '2020-08-15 12:56:38'),
(31, 'www.alphavantage.co', 'GBP', 'British Pound Sterling', 'ZAR', 'South African Rand', 22.9142, 22.9135, 22.9145, 'UTC', '2020-08-15 12:56:31', '2020-08-15 12:56:38'),
(32, 'www.alphavantage.co', 'EUR', 'Euro', 'ZAR', 'South African Rand', 20.5604, 20.5603, 20.561, 'UTC', '2020-08-15 12:56:01', '2020-08-15 12:56:38'),
(33, 'www.alphavantage.co', 'JPY', 'Japanese Yen', 'ZAR', 'South African Rand', 0.1631, 0.163094, 0.163105, 'UTC', '2020-08-15 12:56:34', '2020-08-15 12:56:38'),
(34, 'www.alphavantage.co', 'USD', 'United States Dollar', 'ZAR', 'South African Rand', 17.3676, 17.3673, 17.3682, 'UTC', '2020-08-15 12:57:12', '2020-08-15 12:57:19'),
(35, 'www.alphavantage.co', 'GBP', 'British Pound Sterling', 'ZAR', 'South African Rand', 22.7157, 22.7148, 22.7161, 'UTC', '2020-08-15 12:57:12', '2020-08-15 12:57:19'),
(36, 'www.alphavantage.co', 'EUR', 'Euro', 'ZAR', 'South African Rand', 20.5604, 20.5597, 20.561, 'UTC', '2020-08-15 12:57:01', '2020-08-15 12:57:19'),
(37, 'www.alphavantage.co', 'JPY', 'Japanese Yen', 'ZAR', 'South African Rand', 0.1631, 0.163095, 0.163107, 'UTC', '2020-08-15 12:57:16', '2020-08-15 12:57:19'),
(38, 'www.alphavantage.co', 'USD', 'United States Dollar', 'ZAR', 'South African Rand', 17.3676, 17.367, 17.3678, 'UTC', '2020-08-15 12:58:02', '2020-08-15 12:58:11'),
(39, 'www.alphavantage.co', 'GBP', 'British Pound Sterling', 'ZAR', 'South African Rand', 22.7157, 22.7155, 22.716, 'UTC', '2020-08-15 12:58:04', '2020-08-15 12:58:11'),
(40, 'www.alphavantage.co', 'EUR', 'Euro', 'ZAR', 'South African Rand', 20.5604, 20.5599, 20.5612, 'UTC', '2020-08-15 12:58:06', '2020-08-15 12:58:11'),
(41, 'www.alphavantage.co', 'JPY', 'Japanese Yen', 'ZAR', 'South African Rand', 0.1631, 0.163097, 0.163104, 'UTC', '2020-08-15 12:58:07', '2020-08-15 12:58:11'),
(42, 'www.alphavantage.co', 'USD', 'United States Dollar', 'ZAR', 'South African Rand', 17.3676, 17.3671, 17.3676, 'UTC', '2020-08-15 13:16:34', '2020-08-15 13:17:08'),
(43, 'www.alphavantage.co', 'GBP', 'British Pound Sterling', 'ZAR', 'South African Rand', 22.7157, 22.7148, 22.7161, 'UTC', '2020-08-15 13:16:59', '2020-08-15 13:17:08'),
(44, 'www.alphavantage.co', 'EUR', 'Euro', 'ZAR', 'South African Rand', 20.5604, 20.5601, 20.5611, 'UTC', '2020-08-15 13:17:01', '2020-08-15 13:17:08'),
(45, 'www.alphavantage.co', 'JPY', 'Japanese Yen', 'ZAR', 'South African Rand', 0.1631, 0.1631, 0.163104, 'UTC', '2020-08-15 13:17:05', '2020-08-15 13:17:08');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `Id` bigint(20) NOT NULL,
  `EmailAddress` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`Id`, `EmailAddress`) VALUES
(1, 'nzilanegiven@gmai.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserId` bigint(20) NOT NULL,
  `EmailAddress` varchar(200) DEFAULT NULL,
  `Passcode` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `EmailAddress`, `Passcode`) VALUES
(9, 'nzilanegiven@gmail.com', '$2y$10$Z5tKlojvtRPRBd.LeNdN/.UpqGPG/7hoAnw2iAL9nCgqw8yhDEzHq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quoteslandingpage`
--
ALTER TABLE `quoteslandingpage`
  ADD PRIMARY KEY (`QuoteID`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `EmailAddress` (`EmailAddress`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`),
  ADD UNIQUE KEY `EmailAddress` (`EmailAddress`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quoteslandingpage`
--
ALTER TABLE `quoteslandingpage`
  MODIFY `QuoteID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
