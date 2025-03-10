-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2025 at 02:11 AM
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
-- Database: `multicouriersolutions`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(500) NOT NULL,
  `Name` varchar(500) DEFAULT NULL,
  `Email` varchar(500) DEFAULT NULL,
  `Phone` varchar(500) DEFAULT NULL,
  `Password` varchar(500) DEFAULT NULL,
  `timeAdded` timestamp NOT NULL DEFAULT current_timestamp(),
  `AddedBy` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Name`, `Email`, `Phone`, `Password`, `timeAdded`, `AddedBy`) VALUES
('2988e364-e336-11ef-9dc0-e0db55de3119', 'Yahya Ahmed Mughal', 'ysreality@gmail.com', '03132952131', '$2y$10$grdfgDa9JxYXeyZ09Qme8eEJV1a.vIfTreXbeLOlxKiCAL8VSU23i', '2025-02-04 20:25:23', 'current_admin_id');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` varchar(500) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(10000) NOT NULL,
  `timeAdded` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `id` varchar(500) NOT NULL,
  `parcelId` varchar(500) NOT NULL,
  `paymentMethod` varchar(10) NOT NULL,
  `payment` float NOT NULL,
  `paymentStatus` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `pickupAddress` varchar(500) NOT NULL,
  `pickupLat` varchar(255) NOT NULL,
  `pickupLong` varchar(255) NOT NULL,
  `deliveryAddress` varchar(500) NOT NULL,
  `deliveryLat` varchar(255) NOT NULL,
  `deliveryLong` varchar(255) NOT NULL,
  `recieverName` varchar(100) NOT NULL,
  `recieverPhone` varchar(100) NOT NULL,
  `riderId` varchar(255) NOT NULL,
  `timeAdded` timestamp NOT NULL DEFAULT current_timestamp(),
  `addedBy` varchar(500) NOT NULL,
  `OrderNumber` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id`, `parcelId`, `paymentMethod`, `payment`, `paymentStatus`, `status`, `pickupAddress`, `pickupLat`, `pickupLong`, `deliveryAddress`, `deliveryLat`, `deliveryLong`, `recieverName`, `recieverPhone`, `riderId`, `timeAdded`, `addedBy`, `OrderNumber`) VALUES
('67a85e3aaa3fd', '67a85e0dcab68', 'delivery', 420, 'unpaid', 'booked', 'Zubaida Medical Complex, Mujahidabad Sector 1 C Mujahidabad, Karachi, Pakistan', '', '', 'Aptech Metro Star Gate, Shah Faisal Colony Flyover, Faisal Cantonment, Karachi, Pakistan', '', '', 'Yahya Ahmed Mughal', '03132952131', '14', '2025-02-09 07:50:18', 'e1454794fc85b0ac60c64776df67dc0e', NULL),
('67a864f16ce78', '67a8649736097', 'delivery', 42, 'unpaid', 'booked', 'Zubaida Medical Centre (ZMC), Ghazi Salahuddin Road, near Dhoraji Colony، C.P. & Berar Society Cp & Berar Chs, Karachi, Pakistan', '', '', 'Zubaida Medical Complex, Mujahidabad Sector 1 C Mujahidabad, Karachi, Pakistan', '', '', 'Dr Siraj', '045134342342', '14', '2025-02-09 08:18:57', 'e1454794fc85b0ac60c64776df67dc0e', NULL),
('67a8670365e8b', '67a866d2e0bfd', 'pickup', 21, 'unpaid', 'booked', 'https://www.google.com/maps/?q=24.9393333,67.01674229999999', '', '', 'https://www.google.com/maps/?q=24.9264997,67.0456542', '', '', 'Yahya Ahmed Mughal', '03132952131', '14', '2025-02-09 08:27:47', 'e1454794fc85b0ac60c64776df67dc0e', NULL),
('67cca61bb3d0e', '67cca4b796598', 'pickup', 126, 'unpaid', 'booked', 'https://www.google.com/maps/?q=24.8632639,67.0743981', '', '', 'https://www.google.com/maps/?q=11.050507,75.9557286', '', '', 'Yahya Ahmed Mughal', '03132952131', '14', '2025-03-08 20:18:35', 'e1454794fc85b0ac60c64776df67dc0e', '25945745'),
('67cce571b484b', '67cce54fba95c', 'pickup', 98.7, 'unpaid', 'booked', 'Airport Rd, Dabolim, Goa 403801, India', '', '', 'Azad Jammu and Kashmir', '', '', 'Prem Raj', '03001234567', '14', '2025-03-09 00:48:49', 'e1454794fc85b0ac60c64776df67dc0e', '56201392');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` varchar(500) NOT NULL,
  `Name` varchar(500) DEFAULT NULL,
  `Email` varchar(500) DEFAULT NULL,
  `Phone` varchar(500) DEFAULT NULL,
  `Password` varchar(500) DEFAULT NULL,
  `Type` varchar(500) NOT NULL,
  `timeAdded` timestamp NOT NULL DEFAULT current_timestamp(),
  `AddedBy` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `Name`, `Email`, `Phone`, `Password`, `Type`, `timeAdded`, `AddedBy`) VALUES
('5597ed5e-fbf4-11ef-97fb-e0db55de3119', 'Yahya Ahmed Mughal', 'ysreality@gmail.com', '03132952131', '$2y$10$iH9TNI5VNsRTccZ.U5kkrujB.zGxOe32HOqTMSEh1jn0tNP2B8DTu', 'operation', '2025-03-08 08:07:09', 'current_admin_id'),
('14f0579e-fcc0-11ef-83b6-e0db55de3119', 'Azhar Shah', 'ww657483@gmail.com', '03197956192', '$2y$10$6FjyQ3Uej9ye8K/X9MRwI.oltSm7zdMjVdn/egy2.0z9NShRJDl2u', 'rider', '2025-03-09 08:25:38', 'current_admin_id');

-- --------------------------------------------------------

--
-- Table structure for table `parcel`
--

CREATE TABLE `parcel` (
  `id` varchar(500) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `weight` float NOT NULL,
  `type` varchar(80) NOT NULL,
  `timeAdded` timestamp NOT NULL DEFAULT current_timestamp(),
  `addedBy` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parcel`
--

INSERT INTO `parcel` (`id`, `description`, `weight`, `type`, `timeAdded`, `addedBy`) VALUES
('67a7c87f0a9f6', 'Pack of 12 Pakistan Champion Trophy 2024 Jerseys', 2.35, 'clothing', '2025-02-08 21:11:27', 'e1454794fc85b0ac60c64776df67dc0e'),
('67a85e0dcab68', 'Sweet Meat Boxes so be careful', 10, 'food', '2025-02-09 07:49:33', 'e1454794fc85b0ac60c64776df67dc0e'),
('67a85f7decfe0', 'Demo Parcel', 3, 'other', '2025-02-09 07:55:41', 'e1454794fc85b0ac60c64776df67dc0e'),
('67a8649736097', 'Kuch bhi', 1, 'toys', '2025-02-09 08:17:27', 'e1454794fc85b0ac60c64776df67dc0e'),
('67a866d2e0bfd', 'Building Bricks', 0.5, 'toys', '2025-02-09 08:26:58', 'e1454794fc85b0ac60c64776df67dc0e'),
('67cc3d9cbfbfe', 'Iftari Box', 3, 'food', '2025-03-08 12:52:44', 'e1454794fc85b0ac60c64776df67dc0e'),
('67cc40bd8bc19', 'Iftar Box', 1.45, 'food', '2025-03-08 13:06:05', 'e1454794fc85b0ac60c64776df67dc0e'),
('67cca4b796598', 'Iftari Box', 3, 'food', '2025-03-08 20:12:39', 'e1454794fc85b0ac60c64776df67dc0e'),
('67cce54fba95c', 'Sehri Box', 2.35, 'food', '2025-03-09 00:48:15', 'e1454794fc85b0ac60c64776df67dc0e');

-- --------------------------------------------------------

--
-- Table structure for table `pricings`
--

CREATE TABLE `pricings` (
  `id` varchar(500) NOT NULL,
  `walkin` float NOT NULL,
  `corporate` float NOT NULL,
  `timeAdded` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pricings`
--

INSERT INTO `pricings` (`id`, `walkin`, `corporate`, `timeAdded`) VALUES
('qedfewfsdgve353g5dfs', 42, 50, '2025-02-06 12:37:39');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` varchar(500) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `password` varchar(500) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT current_timestamp(),
  `timeAdded` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `FirstName`, `LastName`, `Email`, `Phone`, `password`, `type`, `timeAdded`) VALUES
('e1454794fc85b0ac60c64776df67dc0e', 'Yahya Ahmed', 'Mughal', 'ysreality@gmail.com', '03132952131', '$2y$10$nJJkC7akc/zuRsB3WF3ywO3wbg7uPONTVDYumtO6NPAxZhqVW7LaC', 'walkin', '2025-02-05 08:48:59'),
('9572a23eb82e6993889433c2abdd8e8d', 'Azhar', 'Shah', 'ww657483@gmail.com', '03197956192', '$2y$10$jWQbIIPdGrh5MWPrQG1miud6On7JVB.1N7gOkF3KvlB0xk.bGgSbi', 'walkin', '2025-02-05 08:51:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD UNIQUE KEY `OrderNumber` (`OrderNumber`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
