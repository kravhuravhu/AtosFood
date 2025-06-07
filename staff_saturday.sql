-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 21, 2024 at 10:26 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `staff`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `userID` varchar(10) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `activeSince` date NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`userID`, `firstName`, `lastName`, `email`, `phone`, `activeSince`, `password`) VALUES
('JR240721', 'Junior', 'Ravhuravhu', 'junior@atosfood.net', '0677343682', '2024-07-21', '$2y$10$0.io/ulwb7f/Hri/NAnBPuFvaJibAm8bI5ZalK/ppFPaoQi8SxSou');

-- --------------------------------------------------------

--
-- Table structure for table `order_history`
--

CREATE TABLE `order_history` (
  `orderID` varchar(20) NOT NULL,
  `ordItemname` varchar(2000) DEFAULT NULL,
  `ordTotalprice` int(11) DEFAULT NULL,
  `ordCusname` varchar(100) DEFAULT NULL,
  `ordEmail` varchar(100) DEFAULT NULL,
  `ordDeliveryadress` varchar(255) DEFAULT NULL,
  `ordPhonenumber` int(11) DEFAULT NULL,
  `ordPaymentmethod` varchar(100) DEFAULT NULL,
  `ordDate` date DEFAULT current_timestamp(),
  `ordTime` time DEFAULT current_timestamp(),
  `ordStatus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_history`
--

INSERT INTO `order_history` (`orderID`, `ordItemname`, `ordTotalprice`, `ordCusname`, `ordEmail`, `ordDeliveryadress`, `ordPhonenumber`, `ordPaymentmethod`, `ordDate`, `ordTime`, `ordStatus`) VALUES
('ORD20001', 'Vanilla Cappuccino;4;20.00;Beverages|Chocolate Cappuccino;10;25.00;Beverages|Caramel Cappuccino;20;25.00;Beverages', 830, 'Khuliso', 'khuliso@atos.net', 'No options selected.', 1234567899, 'credit_card', '2024-07-20', '23:57:56', 'Delivered'),
('ORD21001', 'Crispy Bacon Sandwich;6;30.00;Breakfast|Ham and Cheese Sandwich;2;35.00;Breakfast|Cheese and Tomato Sandwich;15;35.00;Breakfast', 775, 'Junior', 'junior@atos.net', 'Atos I1', 1234567899, 'paypal', '2024-07-21', '00:05:00', 'Cancelled'),
('ORD21002', 'Vanilla Cappuccino;1;20.00;Beverages', 20, 'Arrithnius', 'admin_@atosfood.net', 'This Address', 1234567899, 'credit_card', '2024-07-21', '01:15:06', 'Processing');

--
-- Triggers `order_history`
--
DELIMITER $$
CREATE TRIGGER `generate_orderID_trigger` BEFORE INSERT ON `order_history` FOR EACH ROW BEGIN
    DECLARE curr_day VARCHAR(2);
    DECLARE nextval INT;

    -- Get current day in DD format
    SET curr_day = DATE_FORMAT(NOW(), '%d');

    -- Get the next sequential value for orderID within the same day
    SELECT COALESCE(MAX(CAST(SUBSTRING(orderID, 7) AS UNSIGNED)), 0) + 1 INTO nextval
    FROM staff.order_history
    WHERE SUBSTRING(orderID, 4, 2) = curr_day;

    -- If there's an existing entry with the same orderID, increment nextval
    IF nextval <= 0 THEN
        SET nextval = 1;
    END IF;

    -- Format the orderID as ORDMMDDNNN (where NNN is the padded order number)
    SET NEW.orderID = CONCAT('ORD', curr_day, LPAD(nextval, 3, '0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `order_id_seq`
--

CREATE TABLE `order_id_seq` (
  `next_not_cached_value` bigint(21) NOT NULL,
  `minimum_value` bigint(21) NOT NULL,
  `maximum_value` bigint(21) NOT NULL,
  `start_value` bigint(21) NOT NULL COMMENT 'start value when sequences is created or value if RESTART is used',
  `increment` bigint(21) NOT NULL COMMENT 'increment value',
  `cache_size` bigint(21) UNSIGNED NOT NULL,
  `cycle_option` tinyint(1) UNSIGNED NOT NULL COMMENT '0 if no cycles are allowed, 1 if the sequence should begin a new cycle when maximum_value is passed',
  `cycle_count` bigint(21) NOT NULL COMMENT 'How many cycles have been done'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_id_seq`
--

INSERT INTO `order_id_seq` (`next_not_cached_value`, `minimum_value`, `maximum_value`, `start_value`, `increment`, `cache_size`, `cycle_option`, `cycle_count`) VALUES
(1, 1, 9223372036854775806, 1, 1, 1000, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `to_do_list`
--

CREATE TABLE `to_do_list` (
  `ID` int(11) NOT NULL,
  `listItem` varchar(250) DEFAULT NULL,
  `timePosted` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `order_history`
--
ALTER TABLE `order_history`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `to_do_list`
--
ALTER TABLE `to_do_list`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `to_do_list`
--
ALTER TABLE `to_do_list`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
