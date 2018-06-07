-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 11, 2018 at 02:57 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ql_banh`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `hoten`, `username`, `password`) VALUES
(1, 'tiến', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `chitietgiaodich`
--

DROP TABLE IF EXISTS `chitietgiaodich`;
CREATE TABLE IF NOT EXISTS `chitietgiaodich` (
  `magiaodich` int(10) NOT NULL,
  `masp` int(5) NOT NULL,
  `soluong` int(5) NOT NULL,
  `thanhtien` float NOT NULL,
  PRIMARY KEY (`magiaodich`,`masp`),
  KEY `masp` (`masp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitietgiaodich`
--

INSERT INTO `chitietgiaodich` (`magiaodich`, `masp`, `soluong`, `thanhtien`) VALUES
(22, 2, 2, 100000),
(22, 36, 1, 35000),
(23, 3, 1, 50000),
(24, 4, 1, 45000);

-- --------------------------------------------------------

--
-- Table structure for table `giaodich`
--

DROP TABLE IF EXISTS `giaodich`;
CREATE TABLE IF NOT EXISTS `giaodich` (
  `magiaodich` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(5) NOT NULL,
  `ngaygiaodich` date NOT NULL,
  `tongtien` float NOT NULL,
  PRIMARY KEY (`magiaodich`,`user_id`,`ngaygiaodich`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `giaodich`
--

INSERT INTO `giaodich` (`magiaodich`, `user_id`, `ngaygiaodich`, `tongtien`) VALUES
(22, 1, '2018-04-11', 135000),
(23, 1, '2018-04-11', 50000),
(24, 1, '2018-04-11', 45000);

-- --------------------------------------------------------

--
-- Table structure for table `loaibanh`
--

DROP TABLE IF EXISTS `loaibanh`;
CREATE TABLE IF NOT EXISTS `loaibanh` (
  `maloai` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `tenloai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `luu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`maloai`),
  UNIQUE KEY `tenloai` (`tenloai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaibanh`
--

INSERT INTO `loaibanh` (`maloai`, `tenloai`, `luu`) VALUES
('L01', 'donuts', 'BANH'),
('L02', 'bánh mì', 'BANH'),
('L03', 'món ăn khác', 'BANH'),
('L04', 'đá xay', 'NUOC'),
('L05', 'thức uống khác', 'NUOC');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `masp` int(5) NOT NULL AUTO_INCREMENT,
  `tensp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `maloai` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `gia` float NOT NULL,
  `hinhanh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`masp`),
  UNIQUE KEY `tensp` (`tensp`),
  KEY `maloai` (`maloai`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `maloai`, `gia`, `hinhanh`) VALUES
(1, 'Gà Biết Bơi', 'L01', 50000, 'ga-biet-boi.png'),
(2, 'Lẩu 1 Người', 'L01', 50000, 'lau-1-nguoi.png'),
(3, 'Tuần Lộc Nhảy Đầm', 'L01', 50000, 'tuan-loc-nhay-dam.png'),
(4, 'Donut Phủ Socola Dâu Rừng', 'L01', 45000, 'DunkinDonuts-Liverpool.png'),
(5, 'Donut Nhân Kem Phủ Socola', 'L01', 45000, 'DunkinDonuts-BostonKreme.png'),
(6, 'Donut MoCha Nhân Socola', 'L01', 45000, 'DunkinDonuts-MochaCoffee.png'),
(7, 'Donut Socola Phủ Socola', 'L01', 45000, 'DunkinDonuts-DoubleChoco-.png'),
(8, 'Donut Socola Trắng Phủ Cốm', 'L01', 45000, 'DunkinDonuts-VanillaFrosted.png'),
(9, 'Donut Socola DâuPhủ Cốm', 'L01', 45000, 'DunkinDonuts-StrawberryFrosted.png'),
(10, 'Donut Phủ Socola & Cốm', 'L01', 45000, 'DunkinDonuts-DunkinChocoFrosted.png'),
(11, 'Donut Socola Phủ Dừa', 'L01', 40000, 'DunkinDonuts-ChocoCoconut.png'),
(12, 'Donut Socola Phủ Hạt Điều', 'L01', 40000, 'DunkinDonuts-Peanut.png'),
(13, 'Donut Phủ Đậu Phộng & Dừa', 'L01', 40000, 'DunkinDonuts-CashewandCoconut.png'),
(14, 'Donut Nhân Dâu Phủ Socola Trắng', 'L01', 40000, 'DunkinDonuts-StrawberryTart-02.png'),
(15, 'Donut Nhân Dâu', 'L01', 40000, 'DunkinDonuts-RingStrawTart.png'),
(16, 'Donut Nhân Kem', 'L01', 35000, 'DunkinDonuts-BavarianTart.png'),
(17, 'Donut Nhân Kem Phủ Socola Vàng', 'L01', 35000, 'DunkinDonuts-MrHappy.png'),
(18, 'Donut Phủ Đường Bột', 'L01', 35000, 'DunkinDonuts-SugarRised.png'),
(19, 'Donut Chà Bông', 'L01', 35000, 'DunkinDonuts-PorkPloss.png'),
(20, 'Donut Nhân Dâu Nhỏ', 'L01', 35000, 'DunkinDonuts-StrawberryFilled.png'),
(21, 'Donut Nhân Kem Nhỏ', 'L01', 30000, 'DunkinDonuts-BaravianFilled.png'),
(22, 'Donut Cuộn Phủ Đường Nhân Quế', 'L01', 30000, 'DunkinDonuts-GlazesCoffeRoll.png'),
(23, 'Donut Phủ Đường', 'L01', 30000, 'DunkinDonuts-BaravianFilled.png'),
(24, 'DoKin\' Donut', 'L01', 30000, 'DunkinDonuts-DunkinDonuts.png'),
(25, 'Bánh Mì Vòng,Thịt Nguội,Trứng và Phô Mai', 'L02', 50000, 'DunkinDonuts-BagelwithEggHamandCheese.png'),
(26, 'Bánh Mì Vòng, Thịt và Phô Mai', 'L02', 40000, 'DunkinDonuts-DonutSandwich.png'),
(27, 'Bánh mì thịt nguội', 'L02', 35000, 'FootlongSubSurfMarket.png'),
(28, 'Pizza Sandwich', 'L03', 50000, 'pizza sandwich.png'),
(29, 'Khoai Tây Nướng', 'L03', 30000, 'DunkinDonuts-Hashbrown.png'),
(30, 'Bánh Kẹp DD Wrap', 'L03', 45000, 'DunkinDonuts-DDWrap.png'),
(31, 'Bánh Crolssant Ba Rọi Xông Khói, Trứng và Phô Mai', 'L03', 40000, 'DunkinDonuts-CroissantBaconEggandCheese.png'),
(32, 'Bánh Crolssant Cá Ngừ', 'L03', 35000, 'DunkinDonuts-TunaCroissant.png'),
(33, 'Cà Phê Sữa Vị Caramel Đá Xay', 'L04', 40000, 'caramel-suada.png'),
(34, 'Cà Phê Vị Sữa Hạt Dẻ Đá Xay', 'L04', 40000, 'Hazelnut Suada.png'),
(35, 'Cà Phê Đá Xay Hương Caramel', 'L04', 35000, 'DunkinDonuts-Fudgaccino.png'),
(36, 'Cà Phê Capuchino', 'L04', 35000, 'DunkinDonuts-Cappuccino.png'),
(37, 'Cà Phê Đá Xay Truyền Thống', 'L04', 30000, 'TrasuaDunkinThachNhaDam.png'),
(38, 'Cà Phê Đá Xay Fudgaccino', 'L04', 30000, 'TrasuaDunkinThachSuongSao.png'),
(39, 'Trà Sữa Cola', 'L05', 35000, 'tra sua cloa.png'),
(40, 'Cam Đỏ Bạc Hà', 'L05', 30000, 'CAM-DO-BAC-HA.png'),
(41, 'Trà Sữa Dunkin\' Nha Đam', 'L05', 40000, 'TrasuaDunkinThachNhaDam.png'),
(42, 'Trà Sữa Dunkin\' Sương Sáo', 'L05', 35000, 'TrasuaDunkinThachSuongSao.png'),
(43, 'Trà Sữa Oolong Sương Sáo', 'L05', 45000, 'TrasuaOolongThachSuongSao.png'),
(44, 'Dunkin\' Macchiato', 'L05', 40000, 'dunkin-01_1.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` char(11) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `hoten`, `username`, `password`, `email`, `sdt`, `diachi`) VALUES
(1, 'Hồ minh tiến', 'hominhtien', '123', 'buckblack44@gmail.com', '01629683646', 'hcm'),
(2, 'Nguyễn A', 'abc', '123', 'abc@gmail.com', '', ''),
(7, 'dsfsdf', 'abcb', 'dfs', 'sdfsdf', 'sdfsfd', 'sdfsfd'),
(21, 'sa', 'sa', 'sa', '', '', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietgiaodich`
--
ALTER TABLE `chitietgiaodich`
  ADD CONSTRAINT `chitietgiaodich_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`),
  ADD CONSTRAINT `chitietgiaodich_ibfk_2` FOREIGN KEY (`magiaodich`) REFERENCES `giaodich` (`magiaodich`);

--
-- Constraints for table `giaodich`
--
ALTER TABLE `giaodich`
  ADD CONSTRAINT `giaodich_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`maloai`) REFERENCES `loaibanh` (`maloai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
