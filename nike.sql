-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 05:11 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nike`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `danhmuc_id` int(11) NOT NULL,
  `danhmuc_ten` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`danhmuc_id`, `danhmuc_ten`) VALUES
(20, 'Men'),
(21, 'Women'),
(22, 'Kids'),
(23, 'Sale');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donhang`
--

CREATE TABLE `tbl_donhang` (
  `donhang_id` int(11) NOT NULL,
  `donhang_ma` int(11) NOT NULL,
  `sanpham_tieude` varchar(255) NOT NULL,
  `sanpham_size` varchar(255) NOT NULL,
  `sanpham_sl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_donhang`
--

INSERT INTO `tbl_donhang` (`donhang_id`, `donhang_ma`, `sanpham_tieude`, `sanpham_size`, `sanpham_sl`) VALUES
(1, 22, 'Nike Dunk High', '7.5', 3),
(2, 22, 'Nike Dunk High', '9', 1),
(3, 22, 'Nike Dunk High', '9.5', 1),
(4, 23, 'Nike Zoom Fly 4', '7', 2),
(5, 23, 'Nike Zoom Fly 4', '6.5', 2),
(6, 23, 'NikeCourt Zoom Pro', '6.5', 1),
(7, 24, 'Nike Zoom Fly 4', '7', 1),
(8, 24, 'NikeCourt Zoom Pro', '7.5', 1),
(9, 26, 'Nike Blazer Mid 77 Vintage', '7', 1),
(10, 28, 'Nike Zoom Fly 4', '6', 1),
(11, 28, 'Nike Zoom Fly 4', '7', 1),
(12, 28, 'Nike Zoom Fly 4', '6.5', 1),
(13, 28, 'Nike Zoom Fly 4', '7.5', 2),
(14, 29, 'Nike men shoes', '6.5', 1),
(15, 30, 'Nike men shoe', '8', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loaisanpham`
--

CREATE TABLE `tbl_loaisanpham` (
  `loaisanpham_id` int(11) NOT NULL,
  `danhmuc_id` int(11) NOT NULL,
  `loaisanpham_ten` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_loaisanpham`
--

INSERT INTO `tbl_loaisanpham` (`loaisanpham_id`, `danhmuc_id`, `loaisanpham_ten`) VALUES
(19, 20, 'Lifestyle'),
(20, 20, 'Running'),
(21, 20, 'Basketball'),
(22, 20, 'Soccer'),
(23, 21, 'Lifestyle'),
(24, 22, 'Running'),
(25, 22, 'Basketball'),
(27, 22, 'Lifestyle'),
(29, 21, 'Running'),
(33, 21, 'Tennis'),
(34, 23, 'Sale 30%'),
(50, 0, ''),
(51, 0, ''),
(52, 0, ''),
(53, 0, ''),
(54, 0, ''),
(56, 0, ''),
(58, 0, ''),
(59, 0, ''),
(60, 0, ''),
(61, 37, '2'),
(62, 37, '2'),
(65, 0, ''),
(66, 0, ''),
(67, 0, ''),
(68, 0, ''),
(69, 0, ''),
(70, 46, 'sdfdsf'),
(71, 0, ''),
(72, 0, ''),
(73, 0, ''),
(74, 0, ''),
(76, 55, '123456');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `sanpham_id` int(11) NOT NULL,
  `sanpham_tieude` varchar(255) NOT NULL,
  `sanpham_ma` varchar(255) NOT NULL,
  `danhmuc_id` int(11) NOT NULL,
  `loaisanpham_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `sanpham_gia` varchar(255) NOT NULL,
  `sanpham_chitiet` text NOT NULL,
  `sanpham_baoquan` text NOT NULL,
  `sanpham_anh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`sanpham_id`, `sanpham_tieude`, `sanpham_ma`, `danhmuc_id`, `loaisanpham_id`, `color_id`, `sanpham_gia`, `sanpham_chitiet`, `sanpham_baoquan`, `sanpham_anh`) VALUES
(31, 'Nike Air Force 1 07', 'CW2288-111', 20, 19, 0, '110', 'The radiance lives on in the Nike Air Force 1 ’07, the b-ball OG that puts a fresh spin on what you know best: durably stitched overlays, clean finishes and the perfect amount of flash to make you shine.', '', '3ad8562cb6.png'),
(32, 'Nike Vaporfly NEXT', 'CU4111-103', 20, 20, 0, '250', 'Continue the next evolution of speed with a racing shoe made to help you chase new goals and records.', '', 'd53b1ea41a.png'),
(33, 'KD Trey 5 X', 'DD9538-010', 20, 21, 0, '90', 'With its lightweight upper and plush support system, the KD Trey 5 X can help you float like KD, waiting for the perfect moment to drive to the hoop.', '', 'e3ff89ab2b.png'),
(34, 'Nike Zoom Mercurial Superfly 9 Elite FG', 'DR5932-810', 20, 22, 0, '280', 'Celebrate the game’s biggest competition in a design ignited by the science of connectivity and gravity that the world stage inspires.', '', 'd815c167a5.png'),
(35, 'Nike Blazer Mid 77 Vintage', 'BQ6806-100', 20, 19, 0, '105', 'In the ‘70s, Nike was the new shoe on the block. So new in fact, we were still breaking into the basketball scene and testing prototypes on the feet of our local team.', '', '8cba3fd888.png'),
(36, 'Nike Air Max 90 Futura', 'DM9922-104', 21, 23, 0, '150', 'The Nike Air Max 90 Futura reimagines the icon of Air through your eyes—from design to testing to styling.', '', '019771afe2.png'),
(37, 'Nike Air Force 1 07 SE', 'DQ7583-001', 21, 23, 0, '120', 'Bring on the holiday cheer with this b-ball original. From soft fleece accents to cheerful graphics, its winter-ready details put a fresh spin on what you know best: era-echoing, ‘80s construction and nothin’-but-net style.', '', '4a5238b919.png'),
(38, 'NikeCourt Zoom Pro', 'DH0990-091', 21, 33, 0, '100', 'Harness the power of your serve in the NikeCourt Zoom Pro. Working in tandem with the Zoom Air unit in the forefoot, it has a full-length plate that acts like a springboard.', '', '2e2ae6a4a0.png'),
(39, 'Nike Zoom Fly 4', 'Nike Zoom Fly 4', 21, 29, 0, '160', 'Take it to the streets and find your tempo. From the moment you lace up, the webbing on the lacing system wraps around your foot for a secure feel from start to finish.', '', '61340fc4bb.png'),
(47, 'Nike Zoom Fly 4	', 'DH0990-091', 22, 27, 0, '155', 'Take it to the streets and find your tempo. From the moment you lace up, the webbing on the lacing system wraps around your foot for a secure feel from start to finish.', '', '09a7282f7d.png'),
(49, 'Nike men shoe', 'DH0990-091', 20, 20, 0, '250', 'In the ‘70s, Nike was the new shoe on the block. So new in fact, we were still breaking into the basketball scene and testing prototypes on the feet of our local team.	', '', '0a633331ec.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham_anh_test`
--

CREATE TABLE `tbl_sanpham_anh_test` (
  `sanpham_anh_id` int(11) NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `sanpham_anh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sanpham_anh_test`
--

INSERT INTO `tbl_sanpham_anh_test` (`sanpham_anh_id`, `sanpham_id`, `sanpham_anh`) VALUES
(1, 27, '2022-10-26 (7).png'),
(2, 27, '2022-11-15 (3).png'),
(3, 27, '2022-11-15 (4).png'),
(4, 28, '2022-10-15 (15).png'),
(5, 28, '2022-10-15 (16).png'),
(6, 28, '2022-10-15 (17).png'),
(7, 29, 'Screenshot_20221025_113426.png'),
(8, 29, 'Screenshot_20221025_114201.png'),
(9, 29, 'Screenshot_20221026_123053.png'),
(16, 31, 'Screenshot_20221129_022704.png'),
(17, 31, 'Screenshot_20221129_022713.png'),
(18, 31, 'Screenshot_20221129_022721.png'),
(19, 31, 'Screenshot_20221129_022733.png'),
(20, 32, 'Screenshot_20221129_032732.png'),
(21, 32, 'Screenshot_20221129_032738.png'),
(22, 32, 'Screenshot_20221129_032747.png'),
(23, 33, 'Screenshot_20221130_044011.png'),
(24, 33, 'Screenshot_20221130_044019.png'),
(25, 33, 'Screenshot_20221130_044027.png'),
(26, 33, 'Screenshot_20221130_044033.png'),
(27, 34, 'Screenshot_20221130_044413.png'),
(28, 34, 'Screenshot_20221130_044418.png'),
(29, 34, 'Screenshot_20221130_044426.png'),
(30, 34, 'Screenshot_20221130_044438.png'),
(31, 35, 'Screenshot_20221130_044711.png'),
(32, 35, 'Screenshot_20221130_044716.png'),
(33, 35, 'Screenshot_20221130_044723.png'),
(34, 35, 'Screenshot_20221130_044735.png'),
(35, 36, 'Screenshot_20221130_045500.png'),
(36, 36, 'Screenshot_20221130_045509.png'),
(37, 36, 'Screenshot_20221130_045517.png'),
(38, 36, 'Screenshot_20221130_045524.png'),
(39, 37, 'Screenshot_20221130_045745.png'),
(40, 37, 'Screenshot_20221130_045820.png'),
(41, 37, 'Screenshot_20221130_045825.png'),
(42, 37, 'Screenshot_20221130_045836.png'),
(43, 38, 'Screenshot_20221130_050140.png'),
(44, 38, 'Screenshot_20221130_050146.png'),
(45, 38, 'Screenshot_20221130_050152.png'),
(46, 38, 'Screenshot_20221130_050203.png'),
(47, 39, 'Screenshot_20221130_050600.png'),
(48, 39, 'Screenshot_20221130_050607.png'),
(49, 39, 'Screenshot_20221130_050612.png'),
(50, 39, 'Screenshot_20221130_050624.png'),
(51, 40, 'Screenshot_20221204_073838.png'),
(52, 40, 'Screenshot_20221204_073844.png'),
(53, 40, 'Screenshot_20221204_073851.png'),
(54, 40, 'Screenshot_20221204_073857.png'),
(107, 44, '4b724eef8c.png'),
(121, 45, '03c6243b5a.png'),
(122, 45, '3ad8562cb6.png'),
(123, 45, '4b724eef8c.png'),
(124, 45, '4c1662ca3c.png'),
(129, 46, '1b452c9142.png'),
(130, 46, '1f159921f8.png'),
(131, 46, '03c6243b5a.png'),
(132, 46, '3ad8562cb6.png'),
(154, 47, 'Screenshot_20221204_073838.png'),
(155, 47, 'Screenshot_20221204_073844.png'),
(156, 47, 'Screenshot_20221204_073851.png'),
(157, 47, 'Screenshot_20221204_073857.png'),
(233, 49, 'Screenshot_20221130_050146.png'),
(234, 49, 'Screenshot_20221130_050152.png'),
(235, 49, 'Screenshot_20221130_050203.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham_size_test`
--

CREATE TABLE `tbl_sanpham_size_test` (
  `sanpham_size_id` int(11) NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `sanpham_size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sanpham_size_test`
--

INSERT INTO `tbl_sanpham_size_test` (`sanpham_size_id`, `sanpham_id`, `sanpham_size`) VALUES
(1, 28, '7'),
(2, 28, '6'),
(3, 28, '6.5'),
(4, 28, '7.5'),
(5, 29, '7'),
(6, 29, '6'),
(16, 31, '7'),
(17, 31, '6'),
(18, 31, '6.5'),
(19, 31, '7.5'),
(20, 31, '8'),
(21, 31, '8.5'),
(22, 31, '9'),
(23, 31, '9.5'),
(24, 32, '7'),
(25, 32, '6'),
(26, 32, '6.5'),
(27, 32, '7.5'),
(28, 32, '8'),
(29, 32, '8.5'),
(30, 32, '9'),
(31, 32, '9.5'),
(32, 33, '7'),
(33, 33, '6'),
(34, 33, '6.5'),
(35, 33, '7.5'),
(36, 33, '8'),
(37, 33, '8.5'),
(38, 33, '9'),
(39, 33, '9.5'),
(40, 34, '7'),
(41, 34, '6'),
(42, 34, '6.5'),
(43, 34, '7.5'),
(44, 34, '8'),
(45, 34, '8.5'),
(46, 34, '9'),
(47, 34, '9.5'),
(48, 35, '7'),
(49, 35, '6'),
(50, 35, '6.5'),
(51, 35, '7.5'),
(52, 35, '8'),
(53, 35, '8.5'),
(54, 35, '9'),
(55, 35, '9.5'),
(56, 36, '7'),
(57, 36, '6'),
(58, 36, '6.5'),
(59, 36, '7.5'),
(60, 36, '8'),
(61, 36, '8.5'),
(62, 36, '9'),
(63, 36, '9.5'),
(64, 37, '7'),
(65, 37, '6'),
(66, 37, '6.5'),
(67, 37, '7.5'),
(68, 37, '8'),
(69, 37, '8.5'),
(70, 37, '9'),
(71, 37, '9.5'),
(72, 38, '7'),
(73, 38, '6'),
(74, 38, '6.5'),
(75, 38, '7.5'),
(76, 38, '8'),
(77, 38, '8.5'),
(78, 38, '9'),
(79, 38, '9.5'),
(80, 39, '7'),
(81, 39, '6'),
(82, 39, '6.5'),
(83, 39, '7.5'),
(84, 39, '8'),
(85, 39, '8.5'),
(86, 39, '9'),
(87, 39, '9.5'),
(88, 40, '6'),
(89, 40, '6.5'),
(90, 40, '7'),
(91, 40, '7.5'),
(92, 40, '8'),
(93, 40, '8.5'),
(94, 40, '9'),
(95, 40, '9.5'),
(128, 44, '6'),
(129, 44, '7.5'),
(145, 45, '7'),
(150, 46, '7'),
(151, 46, '6'),
(152, 46, '6.5'),
(153, 46, '7.5'),
(179, 47, '7'),
(180, 47, '6'),
(181, 47, '6.5'),
(182, 47, '7.5'),
(259, 49, '7'),
(260, 49, '6.5'),
(261, 49, '8'),
(262, 49, '9');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tin_tuc`
--

CREATE TABLE `tbl_tin_tuc` (
  `ID` int(11) NOT NULL,
  `Ten` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Mo_Ta` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `The_Loai` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Hinh_Anh` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_tin_tuc`
--

INSERT INTO `tbl_tin_tuc` (`ID`, `Ten`, `Mo_Ta`, `The_Loai`, `Hinh_Anh`) VALUES
(2, '<div>\r\n<div>Why Nike Is Making Shoes You Can Take Apart</div>\r\n</div>', '<div>\r\n<div>The ISPA Link and ISPA Link Axis, examples of design for disassembly, are innovative catalysts that move the brand closer to a circular future.</div>\r\n</div>', 'stories', '993453a2fe.png'),
(3, '<div>\r\n<div>The Nike Athlete Think Tank Invests in the Future of Womens Sport</div>\r\n</div>', '<div>\r\n<div>This collective of elite athletes is guiding the brand to make all female athletes feel seen, heard and supported.</div>\r\n</div>', 'company', 'ec12e3ec0d.png'),
(4, '<div>\r\n<div>NIKE, Inc. Reports Fiscal 2023 First Quarter Results</div>\r\n</div>', '<div>\r\n<div>Nikes commitment to womens football has a powerful history, and the brand continues to shape an even more powerful future for women in sport.</div>\r\n</div>', 'stories', 'faa6f95f3a.jpg'),
(5, '<div>\r\n<div>Inside Nikes History of Championing Womens Fooball</div>\r\n</div>', '<div>\r\n<div>Nikes commitment to womens football has a powerful history, and the brand continues to shape an even more powerful future for women in sport</div>\r\n</div>', 'stories', '806e21ba10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `ID` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `is_admin` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`ID`, `username`, `first_name`, `last_name`, `date_of_birth`, `password`, `is_admin`) VALUES
(1, 'admin@gmail.com', 'admin', '0', '2022-11-28', 'e10adc3949ba59abbe56e057f20f883e', '1'),
(2, 'onepunch497@gmail.com', 'Ngô', 'hoàng', '2022-11-28', 'c9130efba1317c16406d67270f657af3', '0'),
(3, 'hoangbmt6d@gmail.com', 'ngô ', 'hoàng', '2022-11-28', 'e10adc3949ba59abbe56e057f20f883e', '0'),
(7, 'admin789@gmail.com', 'admin', '2', '2022-11-23', 'e10adc3949ba59abbe56e057f20f883e', '0'),
(9, 'admin456@gmail.com', 'admin', '3', '2022-12-16', 'e10adc3949ba59abbe56e057f20f883e', '0'),
(10, 'admin123@gmail.com', 'admin', '1', '2022-12-06', 'e10adc3949ba59abbe56e057f20f883e', '0'),
(11, 'admin000@gmail.com', 'admin', '000', '2022-12-19', 'e10adc3949ba59abbe56e057f20f883e', '1');

-- --------------------------------------------------------

--
-- Table structure for table `thong_tin_giao_hang`
--

CREATE TABLE `thong_tin_giao_hang` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ship_method` enum('16h','30h') COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `luu_y` varchar(1000) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `total_price` varchar(1000) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `name_on_card` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `card_number` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `expired_date` date DEFAULT NULL,
  `cvv` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `promo` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `thong_tin_giao_hang`
--

INSERT INTO `thong_tin_giao_hang` (`ID`, `name`, `email`, `address`, `city`, `district`, `phone_number`, `ship_method`, `luu_y`, `total_price`, `name_on_card`, `card_number`, `expired_date`, `cvv`, `promo`) VALUES
(16, 'ni', 'anhni@gmail.com', 'Việt Nam', '123', '123', '123', '16h', '123456879', '7000', '123', '123', '0003-12-13', '123', '123'),
(17, 'ni', 'anhni@gmail.com', 'Việt Nam', '123', '123', '123', '16h', '123', '700', '123', '123', '0003-02-13', '123', '123'),
(18, 'ni1', 'anhni@gmail.com', 'Việt Nam', '123', '123', '123', '16h', '123', '700', '123', '123', '0123-03-12', '123', '123'),
(19, 'ni', 'anhni@gmail.com', 'Việt Nam', '123', '123', '123', '16h', '123', '315', '123', '123', '0123-03-12', '123', '123'),
(20, 'ni', 'anhni@gmail.com', 'Việt Nam', '123', '123', '123', '16h', '123', '320', '123', '123', '1233-03-12', '123', '123'),
(21, 'ni', 'anhni@gmail.com', 'Việt Nam', '123', '123', '123', '16h', '123', '210', '123', '123', '0213-03-12', '123', '123'),
(22, 'ni', 'anhni@gmail.com', 'Việt Nam', '123', '123', '123', '16h', '123', '210', '123', '123', '0231-03-12', '123', '123'),
(23, 'Anh Ni', 'anhni@gmail.com', '123', '123', '123', '123', '16h', '123', '740', '123', '123', '0123-03-12', '123', '123'),
(24, 'ni', 'anhni@gmail.com', 'Việt Nam', '123', '123', '123', '16h', '123', '260', '123', '123', '0000-00-00', '123', '123'),
(25, 'Ngô Huy Hoàng hoàng', 'onepunch@gmail.com', '22/29 BUI THI XUAN', 'BUON MA THUOT', 's', '+84563283715', '16h', '', '105', 's', 's', '2022-12-14', 's', 's'),
(26, 'Ngô Huy Hoàng hoàng', 'onepunch@gmail.com', '22/29 BUI THI XUAN', 'BUON MA THUOT', 's', '+84563283715', '16h', '', '105', 's', 's', '2022-12-14', 's', 's'),
(27, 'Ngô Huy Hoàng', 'onepunch497@gmail.com', 'Ký túc Xá Khu A đại học quốc gia Hồ Chí Minh', 'phường Linh Trung, Thành phố Thủ Đức', 'ewrewr', '0563283715', '16h', '', '0', 'ưerwer', 'rưerewr', '2022-12-01', 'ưerew', 'ewrewr'),
(28, 'Ngô Huy Hoàng', 'onepunch497@gmail.com', 'Ký túc Xá Khu A đại học quốc gia Hồ Chí Minh', 'phường Linh Trung, Thành phố Thủ Đức', 'ewrewr', '0563283715', '16h', '1111', '620', '11111', '1111', '1111-11-11', '1111', '1111'),
(29, 'Ngô Huy Hoàng', 'onepunch497@gmail.com', 'Ký túc Xá Khu A đại học quốc gia Hồ Chí Minh', 'phường Linh Trung, Thành phố Thủ Đức', 'ewrewr', '0563283715', '16h', 'zxcxzcxzczxcx', '250', 'xzcxzcxz', '5515', '2022-12-07', 'xzcxzc', 'xzczxczxc'),
(30, 'Ngô Huy Hoàng', 'onepunch497@gmail.com', 'Ký túc Xá Khu A đại học quốc gia Hồ Chí Minh', 'phường Linh Trung, Thành phố Thủ Đức', 'ewrewr', '0563283715', '16h', '1', '250', 'd', '1', '2022-12-01', '1', 'd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`danhmuc_id`);

--
-- Indexes for table `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  ADD PRIMARY KEY (`donhang_id`);

--
-- Indexes for table `tbl_loaisanpham`
--
ALTER TABLE `tbl_loaisanpham`
  ADD PRIMARY KEY (`loaisanpham_id`);

--
-- Indexes for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`sanpham_id`);

--
-- Indexes for table `tbl_sanpham_anh_test`
--
ALTER TABLE `tbl_sanpham_anh_test`
  ADD PRIMARY KEY (`sanpham_anh_id`);

--
-- Indexes for table `tbl_sanpham_size_test`
--
ALTER TABLE `tbl_sanpham_size_test`
  ADD PRIMARY KEY (`sanpham_size_id`);

--
-- Indexes for table `tbl_tin_tuc`
--
ALTER TABLE `tbl_tin_tuc`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `thong_tin_giao_hang`
--
ALTER TABLE `thong_tin_giao_hang`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `danhmuc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  MODIFY `donhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_loaisanpham`
--
ALTER TABLE `tbl_loaisanpham`
  MODIFY `loaisanpham_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `sanpham_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tbl_sanpham_anh_test`
--
ALTER TABLE `tbl_sanpham_anh_test`
  MODIFY `sanpham_anh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `tbl_sanpham_size_test`
--
ALTER TABLE `tbl_sanpham_size_test`
  MODIFY `sanpham_size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=266;

--
-- AUTO_INCREMENT for table `tbl_tin_tuc`
--
ALTER TABLE `tbl_tin_tuc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `thong_tin_giao_hang`
--
ALTER TABLE `thong_tin_giao_hang`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
