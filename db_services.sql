-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2022 at 05:30 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_services`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(11) NOT NULL,
  `room_num` varchar(45) NOT NULL,
  `id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `date_bill` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `pay_id` int(11) NOT NULL,
  `slip` varchar(255) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `date_pay` date NOT NULL,
  `id` int(11) NOT NULL,
  `room_num` varchar(45) NOT NULL,
  `status` varchar(50) NOT NULL,
  `bank_number` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`pay_id`, `slip`, `bank`, `price`, `date_pay`, `id`, `room_num`, `status`, `bank_number`) VALUES
(38, '8888888.jpg', 'ธนาคารออมสิน', 0, '0000-00-00', 0, '701', 'ชำระเงินแล้ว', '020290707072'),
(39, '8888888.jpg', 'ธนาคารไทยพาณิชย์', 0, '0000-00-00', 0, '701', 'ชำระเงินแล้ว', '0260659059'),
(40, 'IMG_20220303_145356.jpg', 'ธนาคารกรุงเทพ', 0, '0000-00-00', 0, '701', 'ชำระเงินแล้ว', '9191917777'),
(41, 'IMG_20220303_145356.jpg', 'ธนาคารกรุงไทย', 1600, '0000-00-00', 0, '701', 'ชำระเงินแล้ว', '8956251981'),
(42, '', '', 0, '0000-00-00', 0, '', 'ชำระเงินแล้ว', ''),
(33, 'Screenshot_20220221_224837.jpg', 'ธนาคารกรุงไทย', 900, '2022-02-24', 14, '101', 'ยืนยันแล้ว', '8956251981'),
(34, 'Screenshot_20220221_224837.jpg', 'ธนาคารไทยพาณิชย์', 500, '2022-02-24', 14, '101', 'ยืนยันแล้ว', '58584781771'),
(35, 'Screenshot_20220221_224837.jpg', 'ธนาคารไทยพาณิชย์', 8000, '2022-02-22', 14, '101', 'ชำระเงินแล้ว', '5825178282'),
(36, '274462507_283345297207135_7926309665414637696_n.jpg', 'ธนาคารออมสิน', 1600, '0000-00-00', 61, '601', 'ชำระเงินแล้ว', '020290707072'),
(37, '274462507_283345297207135_7926309665414637696_n.jpg', 'ธนาคารออมสิน', 1600, '0000-00-00', 61, '601', 'ชำระเงินแล้ว', '020290707072');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `unit_id` int(11) NOT NULL,
  `unit_water` int(11) NOT NULL,
  `unit_elec` int(11) NOT NULL,
  `water_price` int(11) NOT NULL,
  `elec_price` int(11) NOT NULL,
  `total_water` int(11) NOT NULL,
  `total_elec` int(11) NOT NULL,
  `date` date NOT NULL,
  `room_num` varchar(45) NOT NULL,
  `sum` int(11) NOT NULL,
  `dateLimits` varchar(2) NOT NULL COMMENT 'กำหนดวันที่เกินกำหนดชำระเงิน ของทุกเดือน'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`unit_id`, `unit_water`, `unit_elec`, `water_price`, `elec_price`, `total_water`, `total_elec`, `date`, `room_num`, `sum`, `dateLimits`) VALUES
(2, 20, 20, 900, 900, 0, 0, '2022-03-16', '701', 1600, '');

-- --------------------------------------------------------

--
-- Table structure for table `room_information`
--

CREATE TABLE `room_information` (
  `room_num` varchar(50) NOT NULL,
  `floor_level` varchar(50) NOT NULL,
  `room_type` varchar(100) NOT NULL,
  `room_status` varchar(50) NOT NULL,
  `room_price` varchar(50) NOT NULL,
  `room_note` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room_information`
--

INSERT INTO `room_information` (`room_num`, `floor_level`, `room_type`, `room_status`, `room_price`, `room_note`) VALUES
('101', '1', 'พัดลม', 'ห้องว่าง', '3500', 'กกกกกกก'),
('701', '7', 'เครื่องปรับอากาศ', 'ห้องว่าง', '5000', 'ddddddddd');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `date_birth` date NOT NULL,
  `room_num` varchar(45) NOT NULL,
  `userlevel` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `firstname`, `lastname`, `address`, `email`, `tel`, `date_birth`, `room_num`, `userlevel`) VALUES
(1, 'admin', '123456', 'admin', 'god', '1 rattanawiboon Road Hatyai Songkhla 90110', 'godza4587@hotmail.com', '0958088533', '2001-12-31', '', 'a'),
(64, 'godza8899', '123456', 'dddddddd', 'dddddddd', 'dddddddd', 'dawdaw@gmail.com', '0859985874', '2022-03-06', '', 'm'),
(65, 'godza8888', '123456', 'ddddddddddddddd', 'ddddddddddddddd', 'ddddddddddddddd', 'dawdaw@gmail.com', 'dddddddddd', '2022-03-06', '', 'm'),
(66, 'godza7777', '123456', 'dddddddd', 'dddddddd', 'dawdwadwa', 'xlurfex_89@hotmail.com', '0958088533', '2022-03-06', '', 'm'),
(63, 'godza1474', '123456', 'thapanat', 'kannarong', 'dddddddddd', 'godza4587@gmail.com', '0958088533', '2022-03-04', '101', 'm'),
(61, 'godza', '123456', 'thapanat', 'kannarong', '1 Rattanawiboon Road Hatyai Songkhla 90110', 'godza4587@hotmail.com', '0958088533', '2001-12-31', '701', 'm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `pay`
--
ALTER TABLE `pay`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`unit_water`,`unit_id`);

--
-- Indexes for table `room_information`
--
ALTER TABLE `room_information`
  ADD PRIMARY KEY (`room_num`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pay`
--
ALTER TABLE `pay`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
