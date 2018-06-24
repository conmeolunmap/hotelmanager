-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 24, 2018 at 06:15 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(255) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `news_avatar` varchar(255) NOT NULL,
  `news_content` varchar(2000) NOT NULL,
  `news_admin` varchar(255) NOT NULL COMMENT 'Nguoi viet'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_avatar`, `news_content`, `news_admin`) VALUES
(5, 'sdfasfdsaf', '35460121_1027534230729478_7963322520193466368_n.jpg', '<p>asdfadsf</p>\r\n', ''),
(6, 'Hệ Thống Phòng Nghỉ', 'img_4.jpg', '<p>Được thiết kế với 107 ph&ograve;ng rộng r&atilde;i, thoải m&aacute;i v&agrave; hiện đại nhất để đ&aacute;p ứng sự h&agrave;i l&ograve;ng của du kh&aacute;ch. Kh&aacute;ch sạn TTC Hotel Premium - Cần Thơ c&oacute; 5 loại ph&ograve;ng kh&aacute;c nhau từ: Deluxe City View, Deluxe River View, Premium Suite, TTC Suite v&agrave; loại ph&ograve;ng cao cấp nhất President Suite - nơi du kh&aacute;ch c&oacute; thể ngắm nh&igrave;n cảnh b&igrave;nh minh v&agrave; ho&agrave;ng h&ocirc;n từ ph&iacute;a ban c&ocirc;ng; đồng thời tận hưởng to&agrave;n bộ phong cảnh th&agrave;nh phố v&agrave; s&ocirc;ng Hậu, hứa hẹn sẽ mang đ&ecirc;́n cho du kh&aacute;ch những gi&acirc;y phút thư giãn tuyệt vời c&ugrave;ng các dịch vụ hoàn hảo nh&acirc;́t.</p>\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(255) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `name` varchar(100) NOT NULL COMMENT 'Tên người đặt phòng',
  `phone` int(255) NOT NULL,
  `room_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` varchar(100) NOT NULL,
  `room_type` varchar(100) NOT NULL,
  `room_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `type_of_room`
--

CREATE TABLE `type_of_room` (
  `type_id` varchar(100) NOT NULL,
  `type_name` varchar(100) NOT NULL,
  `type_people` int(100) NOT NULL COMMENT 'số người ',
  `type_priceonday` double NOT NULL,
  `type_priceonmonth` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `type_of_room`
--
ALTER TABLE `type_of_room`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
