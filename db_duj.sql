-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 25, 2020 at 02:53 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_duj`
--

-- --------------------------------------------------------

--
-- Table structure for table `absent`
--

CREATE TABLE `absent` (
  `id_absent` int(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absent`
--

INSERT INTO `absent` (`id_absent`, `id_user`, `date_login`) VALUES
(1, 1, '2020-08-24 23:19:21'),
(2, 1, '2020-08-25 11:48:14'),
(3, 1, '2020-08-25 11:49:03'),
(4, 1, '2020-08-25 11:49:13'),
(5, 1, '2020-08-25 11:49:15'),
(6, 1, '2020-08-25 11:50:05'),
(7, 1, '2020-08-25 11:50:25'),
(8, 1, '2020-08-25 11:50:55'),
(9, 1, '2020-08-25 11:51:16'),
(10, 1, '2020-08-25 11:51:18'),
(11, 1, '2020-08-25 11:51:46'),
(12, 1, '2020-08-25 11:51:51'),
(13, 1, '2020-08-25 11:52:04'),
(14, 1, '2020-08-25 11:52:16'),
(15, 1, '2020-08-25 12:04:15'),
(16, 1, '2020-08-25 12:04:46'),
(17, 1, '2020-08-25 12:36:45'),
(18, 1, '2020-08-25 13:01:35'),
(19, 1, '2020-08-25 13:02:10'),
(20, 1, '2020-08-25 15:00:58'),
(21, 1, '2020-08-25 15:01:31'),
(22, 1, '2020-08-25 19:21:11'),
(23, 1, '2020-08-25 19:21:15'),
(24, 1, '2020-08-25 19:22:04'),
(25, 1, '2020-08-25 19:22:13'),
(26, 1, '2020-08-25 19:24:25'),
(27, 1, '2020-08-25 19:24:49'),
(28, 1, '2020-08-25 19:24:55'),
(29, 1, '2020-08-25 19:25:00'),
(30, 1, '2020-08-25 19:25:06'),
(31, 1, '2020-08-25 19:26:13'),
(32, 1, '2020-08-25 19:41:42'),
(33, 1, '2020-08-25 19:43:43'),
(34, 1, '2020-08-25 19:44:14');

-- --------------------------------------------------------

--
-- Table structure for table `anggaran`
--

CREATE TABLE `anggaran` (
  `id_anggaran` int(11) NOT NULL,
  `nama_anggaran` varchar(30) NOT NULL,
  `total_anggaran` int(10) NOT NULL,
  `tgl_anggaran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggaran`
--

INSERT INTO `anggaran` (`id_anggaran`, `nama_anggaran`, `total_anggaran`, `tgl_anggaran`) VALUES
(1, 'laptop', 15000000, '2020-08-25');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nik` int(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `phone_number` int(55) NOT NULL,
  `address` varchar(11) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nik`, `full_name`, `job`, `phone_number`, `address`, `date_created`) VALUES
(1, 2132132131, 'susiCustomer', 'specialist', 81234213, 'jalan kates', '2020-08-25 00:29:40');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `name`, `price`, `quantity`, `date_created`, `date_updated`) VALUES
('B213Kslv222', 'asus dddvvv', 1000, 400, '2020-08-25 19:18:41', '2020-08-25 19:18:41'),
('B213s', 'xiaomay', 4000000, 4, '2020-08-25 19:23:34', '2020-08-25 19:23:34');

-- --------------------------------------------------------

--
-- Table structure for table `realisasi`
--

CREATE TABLE `realisasi` (
  `id_realisasi` int(11) NOT NULL,
  `id_anggaran` int(11) NOT NULL,
  `jml_realisasi` int(10) NOT NULL,
  `tgl_realisasi` date NOT NULL,
  `nama_realisasi` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `realisasi`
--

INSERT INTO `realisasi` (`id_realisasi`, `id_anggaran`, `jml_realisasi`, `tgl_realisasi`, `nama_realisasi`) VALUES
(1, 1, 6000000, '2020-08-26', 'laptop lenovo');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role`) VALUES
('assitent_director'),
('kasir'),
('kasir1'),
('kasir12'),
('kasir123'),
('kasir1234'),
('manager');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id_transaction` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `is_paid_off` tinyint(1) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id_transaction`, `id_customer`, `id_user`, `is_paid_off`, `date_created`) VALUES
(1, 1, 2, 1, '2020-08-24 00:32:26');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_details`
--

CREATE TABLE `transaction_details` (
  `id_transaction_details` int(11) NOT NULL,
  `id_transaction` int(11) NOT NULL,
  `cost` int(255) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction_details`
--

INSERT INTO `transaction_details` (`id_transaction_details`, `id_transaction`, `cost`, `date_created`) VALUES
(1, 1, 1000, '2020-08-25 00:32:48'),
(2, 1, 9000, '2020-08-25 00:32:48');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_products`
--

CREATE TABLE `transaction_products` (
  `id_transaction_products` int(11) NOT NULL,
  `id_transaction` int(11) NOT NULL,
  `id_product` varchar(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction_products`
--

INSERT INTO `transaction_products` (`id_transaction_products`, `id_transaction`, `id_product`, `quantity`, `cost`) VALUES
(1, 1, 'b4jns3', 1, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `role` varchar(55) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `role`, `username`, `password`, `full_name`, `address`, `date_created`, `date_updated`) VALUES
(1, 'manager', 'bossGilang', 'bossGilang', 'bossGilang', 'rumah mewah', '2020-08-24 23:18:19', '2020-08-24 23:18:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absent`
--
ALTER TABLE `absent`
  ADD PRIMARY KEY (`id_absent`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `anggaran`
--
ALTER TABLE `anggaran`
  ADD PRIMARY KEY (`id_anggaran`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `realisasi`
--
ALTER TABLE `realisasi`
  ADD PRIMARY KEY (`id_realisasi`),
  ADD KEY `id_anggaran` (`id_anggaran`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id_transaction`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`id_transaction_details`),
  ADD KEY `id_transaction` (`id_transaction`);

--
-- Indexes for table `transaction_products`
--
ALTER TABLE `transaction_products`
  ADD PRIMARY KEY (`id_transaction_products`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_transaction` (`id_transaction`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absent`
--
ALTER TABLE `absent`
  MODIFY `id_absent` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `anggaran`
--
ALTER TABLE `anggaran`
  MODIFY `id_anggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `realisasi`
--
ALTER TABLE `realisasi`
  MODIFY `id_realisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id_transaction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `id_transaction_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaction_products`
--
ALTER TABLE `transaction_products`
  MODIFY `id_transaction_products` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absent`
--
ALTER TABLE `absent`
  ADD CONSTRAINT `absent_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `realisasi`
--
ALTER TABLE `realisasi`
  ADD CONSTRAINT `realisasi_ibfk_1` FOREIGN KEY (`id_anggaran`) REFERENCES `anggaran` (`id_anggaran`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`role`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
