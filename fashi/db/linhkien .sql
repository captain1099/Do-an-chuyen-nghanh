-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Dec 09, 2020 at 07:04 PM
-- Server version: 5.7.28
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `linhkien`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

DROP TABLE IF EXISTS `chitietdonhang`;
CREATE TABLE IF NOT EXISTS `chitietdonhang` (
  `machitietdonhang` varchar(20) NOT NULL,
  `madonhang` varchar(20) NOT NULL,
  `masanpham` int(11) NOT NULL AUTO_INCREMENT,
  `soluong` int(11) NOT NULL,
  `gia` float NOT NULL,
  `giamgia` float NOT NULL,
  PRIMARY KEY (`machitietdonhang`),
  KEY `masanpham` (`masanpham`),
  KEY `chitietdonhang_ibfk_2` (`madonhang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chitietphieunhap`
--

DROP TABLE IF EXISTS `chitietphieunhap`;
CREATE TABLE IF NOT EXISTS `chitietphieunhap` (
  `machitietphieunhap` varchar(20) NOT NULL,
  `maphieunhap` varchar(20) NOT NULL,
  `masanpham` int(11) NOT NULL AUTO_INCREMENT,
  `soluong` int(11) NOT NULL,
  `gia` float NOT NULL,
  PRIMARY KEY (`machitietphieunhap`),
  KEY `maphieunhap` (`maphieunhap`),
  KEY `masanpham` (`masanpham`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

DROP TABLE IF EXISTS `danhmuc`;
CREATE TABLE IF NOT EXISTS `danhmuc` (
  `madanhmuc` varchar(20) NOT NULL,
  `tendanhmuc` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`madanhmuc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`madanhmuc`, `tendanhmuc`) VALUES
('case', 'Case-Thùng máy tính'),
('cpu', 'CPU-Bộ vi xử lý'),
('hdd', 'Ổ cứng HDD'),
('main', 'Mainboard'),
('power', 'Nguồn máy tính'),
('ram', 'RAM-Bộ nhớ'),
('ssd', 'Ổ cứng SSD'),
('vga', 'Card màn hình');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

DROP TABLE IF EXISTS `donhang`;
CREATE TABLE IF NOT EXISTS `donhang` (
  `madonhang` varchar(20) NOT NULL,
  `makhachhang` int(11) NOT NULL AUTO_INCREMENT,
  `ngaydat` date NOT NULL,
  `ngaygiao` date NOT NULL,
  `diachi` varchar(100) CHARACTER SET utf8 NOT NULL,
  `ghichu` varchar(100) CHARACTER SET utf8 NOT NULL,
  `hinhthucthanhtoan` tinyint(1) NOT NULL,
  `trangthaidonhang` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`madonhang`),
  KEY `makhachhang` (`makhachhang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE IF NOT EXISTS `khachhang` (
  `makhachhang` int(11) NOT NULL AUTO_INCREMENT,
  `tendangnhap` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hoten` varchar(50) CHARACTER SET utf8 NOT NULL,
  `gioitinh` int(11) NOT NULL,
  `diachi` varchar(100) CHARACTER SET utf8 NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  PRIMARY KEY (`makhachhang`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`makhachhang`, `tendangnhap`, `matkhau`, `email`, `hoten`, `gioitinh`, `diachi`, `sodienthoai`) VALUES
(1, 'vung', '123', 'vuvung@gmail.com', 'truong vu', 1, 'ho chi minh', 123456),
(2, 'nhan', '123', 'nh@gmail.com', 'nhan bn', 1, 'hcm', 451288);

-- --------------------------------------------------------

--
-- Table structure for table `nhacungcap`
--

DROP TABLE IF EXISTS `nhacungcap`;
CREATE TABLE IF NOT EXISTS `nhacungcap` (
  `manhacungcap` varchar(20) NOT NULL,
  `tennhacungcap` varchar(50) NOT NULL,
  `diachi` varchar(150) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(20) NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  PRIMARY KEY (`manhacungcap`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nhacungcap`
--

INSERT INTO `nhacungcap` (`manhacungcap`, `tennhacungcap`, `diachi`, `email`, `sodienthoai`) VALUES
('antech', 'ANTECH', '175 Nguyễn Thị Minh Khai, Phường 7, Quận 3, Thành phố Hồ Chí Minh', 'antechvn@gmail.com', -4250449),
('asrock', 'ASROCK', '146 Nguyễn Tri Phương, Phường 8, Quận 5, Thành phố Hồ Chí Minh', 'asrockvn@gmail.com', -34445679),
('asus', 'ASUS', '134 Lý Thường Kiệt, Phường 7, Quận 10, Thành phố Hồ Chí Minh', 'asusvn@gmail.com', -39250679),
('ggbyte', 'GYGABYTE', '175 Nguyễn Thị Minh Khai, Phường Phạm Ngũ Lão, Quận 1, Thành phố Hồ Chí Minh', 'gygabytevn@gmail.com', -4250679),
('int', 'Intel', ' Lô I2, đường D1, khu công nghệ cao, Phường Tân Phú, Quận 9', 'intelvn@gmail.com', 30429984),
('kmax', 'KINGMAX', '29 Gò Dầu, Tân Sơn Nhì, Tân Phú, Thành phố Hồ Chí Minh', 'kingmaxvn@gmail.com', -39250719),
('kton', 'KINGSTON', '146 Nguyễn Văn Trỗi, Phường 8, Phú Nhuận, Thành phố Hồ Chí Minh', 'kingstonvn@gmail.com', -39245679),
('msi', 'MSI', '13T Dương Bá Trạc, Phường 1, Quận 8, Thành phố Hồ Chí Minh', 'msivn@gmail.com', -39250399);

-- --------------------------------------------------------

--
-- Table structure for table `phieunhap`
--

DROP TABLE IF EXISTS `phieunhap`;
CREATE TABLE IF NOT EXISTS `phieunhap` (
  `maphieunhap` varchar(20) NOT NULL,
  `manhacungcap` varchar(20) NOT NULL,
  `ngaynhap` date NOT NULL,
  PRIMARY KEY (`maphieunhap`),
  KEY `manhacungcap` (`manhacungcap`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `masanpham` int(11) NOT NULL AUTO_INCREMENT,
  `madanhmuc` varchar(20) NOT NULL,
  `manhacungcap` varchar(20) NOT NULL,
  `tensanpham` varchar(100) CHARACTER SET utf8 NOT NULL,
  `motasanpham` varchar(400) CHARACTER SET utf8 NOT NULL,
  `gia` float NOT NULL,
  `hinhanh` varchar(20) NOT NULL,
  PRIMARY KEY (`masanpham`),
  KEY `madanhmuc` (`madanhmuc`),
  KEY `manhacungcap` (`manhacungcap`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`masanpham`, `madanhmuc`, `manhacungcap`, `tensanpham`, `motasanpham`, `gia`, `hinhanh`) VALUES
(1, 'case', 'int', 'Case Jetek Space X - G9326', 'Giao tiếp: 1x USB 3.0 + 2x USB 2.0 Chất liệu: Mặc hông kính cường lực 4mm; Mặt trước nhựa kết hợp bar Led RGB; Thép dày 0.5mm sơn tĩnh điện Fan: Đỉnh 2x 120mm - Trước : 3x 120mm - Sau : 1x 120mm - Cover nguồn 2x120mm (Không kèm fan)', 550000, 'imgs/case_3.png'),
(2, 'case', 'asus', 'Case Deepcool Matrexx 50 ADD-RGB 4F', '- Hỗ trợ mainboard: Mini-ITX, Micro-ATX, ATX, Extended-ATX\r\n- Khay mở rộng tối đa: 2 x 3.5, 4 x 2.5\r\n- USB: , 1 x USB 3.0, 2 x USB 2.0\r\n- Quạt tặng kèm: 4 x 120 mm RGB', 319000, 'imgs/case_2.png'),
(3, 'case', 'asus', 'Case Deepcool Matrexx 60 ADD-RGB', '- Hỗ trợ mainboard: Mini-ITX, Micro-ATX, ATX, Extended-ATX\r\n- Khay mở rộng tối đa: 2 x 3.5, 4 x 2.5\r\n- USB: , 1 x USB 3.0, 2 x USB 2.0\r\n- Quạt tặng kèm: 4 x 120 mm RGB', 333000, 'imgs/case_4.png'),
(4, 'case', 'antech', 'Case máy tính DEEPCOOL ADD-RGB 3F', '- Hỗ trợ mainboard: Mini-ITX, Micro-ATX, ATX, Extended-ATX\r\n- Khay mở rộng tối đa: 2 x 3.5, 4 x 2.5\r\n- USB: , 1 x USB 3.0, 2 x USB 2.0\r\n- Quạt tặng kèm: 4 x 120 mm RGB', 510000, 'imgs/case_5.png'),
(5, 'case', 'antech', 'Case máy tính DEEPCOOL Matrexx 70-RGB 3F - Mid Tower (Đen)', '- Hỗ trợ mainboard: Mini-ITX, Micro-ATX, ATX, Extended-ATX\r\n- Khay mở rộng tối đa: 2 x 3.5, 4 x 2.5\r\n- USB: , 1 x USB 3.0, 2 x USB 2.0\r\n- Quạt tặng kèm: 4 x 120 mm RGB', 319000, 'imgs/case_6.png'),
(6, 'case', 'int', 'Thùng máy/ Case 60 ADD-RGB', '- Hỗ trợ mainboard: Mini-ITX, Micro-ATX, ATX, Extended-ATX\r\n- Khay mở rộng tối đa: 2 x 3.5, 4 x 2.5\r\n- USB: , 1 x USB 3.0, 2 x USB 2.0\r\n- Quạt tặng kèm: 4 x 120 mm RGB', 433000, 'imgs/case_7.png'),
(7, 'case', 'int', 'Case máy tính DEEPCOOL Matrexx 30(Đen)', '- Hỗ trợ mainboard: Mini-ITX, Micro-ATX, ATX, Extended-ATX\r\n- Khay mở rộng tối đa: 2 x 3.5, 4 x 2.5\r\n- USB: , 1 x USB 3.0, 2 x USB 2.0\r\n- Quạt tặng kèm: 4 x 120 mm RGB', 470000, 'imgs/case_8.png'),
(8, 'cpu', 'int', 'CPU INTEL Core i7-9700', 'Socket: 1151-v2, Intel Core thế hệ thứ 9\r\nTốc độ: 3.00 GHz up to 4.70 GHz (8nhân, 8 luồng)\r\nBộ nhớ đệm: 12MB\r\nChip đồ họa tích hợp: Intel UHD Graphics 630', 7600000, 'imgs/cpu_1.jpg'),
(9, 'cpu', 'int', 'CPU INTEL Core i7-900', 'Socket: 1151-v2, Intel Core thế hệ thứ 9\r\nTốc độ: 3.00 GHz up to 4.70 GHz (8nhân, 8 luồng)\r\nBộ nhớ đệm: 12MB', 8600000, 'imgs/cpu_2.jpg'),
(10, 'cpu', 'int', 'CPU INTEL Core i7-1700', 'Socket: LGA 1151 , Intel Core thế hệ thứ 7\r\n- Tốc độ xử lý: 3.0 GHz - 3.5 GHz ( 4 nhân, 4 luồng)\r\n- Bộ nhớ đệm: 6MB\r\n- Đồ họa tích hợp: Intel HD Graphics 630', 7600000, 'imgs/cpu_3.jpg'),
(11, 'cpu', 'int', 'CPU INTEL Core i7-9700', 'Socket: 1151-v2, Intel Core thế hệ thứ 9\r\nTốc độ: 3.00 GHz up to 4.70 GHz (8nhân, 8 luồng)\r\nBộ nhớ đệm: 12MB\r\nChip đồ họa tích hợp: Intel 630', 4600000, 'imgs/cpu_4.jpg'),
(12, 'cpu', 'asrock', 'CPU Intel Core I7-7700K (4.2GHz)', '- Socket: LGA 1151 , Intel Core thế hệ thứ 7\r\n- Tốc độ xử lý: 4.2 GHz ( 4 nhân, 8 luồng)\r\n- Bộ nhớ đệm: 8MB\r\n- Đồ họa tích hợp: Intel HD Graphics 630', 5690000, 'imgs/cpu_5.jpg'),
(13, 'cpu', 'int', 'CPU INTEL Core i7-4700', 'Socket: 1151-v2, Intel Core thế hệ thứ 9\r\nTốc độ: 3.00 GHz up to 4.70 GHz (8nhân, 8 luồng)\r\nBộ nhớ đệm: 12MB\r\nChip đồ họa tích hợp: Intel UHD Graphics 630', 8500000, 'imgs/cpu_6.jpg'),
(14, 'main', 'asus', 'Mainboard ASUS Rog Strix B460-F GAMINGG', '- Chuẩn mainboard: ATX\r\n- Socket: 1200 , Chipset: B460\r\n- Hỗ trợ RAM: 4 khe DDR4, tối đa 128GB\r\n- Lưu trữ: 1 x M.2 NVMe, Hỗ trợ Intel Optane, 1 x M.2 SATA/NVMe, 6 x SATA 3 6Gb/s\r\n- Cổng xuất hình: 1 x HDMI, 1 x DisplayPort', 3970000, 'imgs/main_2.jpg'),
(15, 'main', 'asus', 'Mainboard ASUS STRIX B460-G GAMING', '- Chuẩn mainboard: Micro-ATX\r\n- Socket: 1200 ,\r\n- Hỗ trợ RAM: 4 khe DDR4, tối đa 128GB\r\n- Lưu trữ: 1 x M.2 NVMe, Hỗ trợ Intel Optane, 1 x M.2 SATA/NVMe, 6 x SATA 3 6Gb/s\r\n- Cổng xuất hình: 1 x HDMI, 1 x DisplayPort', 4870000, 'imgs/main_3.jpg'),
(16, 'main', 'msi', 'Mainboard MSI A320M-A PRO MAX', '- Chuẩn mainboard: Micro-ATX\r\n- Socket: AM4 , Chipset: A320\r\n- Hỗ trợ RAM: 2 khe DDR4, tối đa 32GB\r\n- Lưu trữ: 4 x SATA 3 6Gb/s, 1 x M.2 SATA/NVMe\r\n- Cổng xuất hình: 1 x HDMI, 1 x DVI-D', 1870000, 'imgs/main_4.jpg'),
(17, 'main', 'msi', 'Mainboard MSI B450M-A PRO MAX', '- Chuẩn mainboard: Micro-ATX\r\n- Socket: AM4 , Chipset: B450\r\n- Hỗ trợ RAM: 2 khe DDR4, tối đa 32GB\r\n- Lưu trữ: 4 x SATA 3 6Gb/s, 1 x M.2 SATA/NVMe\r\n- Cổng xuất hình: 1 x HDMI, 1 x DVI-D', 1870000, 'imgs/main_5.jpg'),
(18, 'main', 'ggbyte', 'Mainboard GIGABYTE C246-WU4', '- Chuẩn mainboard: ATX\r\n- Socket: 1151-v2 , Chipset: C246\r\n- Hỗ trợ RAM: 4 khe DDR4, tối đa 128GB\r\n- Lưu trữ: 1 x M.2 NVMe, Hỗ trợ Intel Optane, 1 x M.2 SATA/NVMe, 10 x SATA 3 6Gb/s\r\n- Cổng xuất hình: 2 x DisplayPort', 3870000, 'imgs/main_6.jpg'),
(19, 'main', 'ggbyte', 'Mainboard GIGABYTE AB350-Gaming 3', '- Chuẩn mainboard: ATX\r\n- Socket: AM4 , Chipset: B350\r\n- Hỗ trợ RAM: DDR4 , tối đa 64GB\r\n- Cổng cắm lưu trữ: 1 x M.2 SATA/NVMe; 6 x SATA 3 6Gb/s\r\n- Cổng xuất hình: 1 x DVI-D; 1 x HDMI', 3670000, 'imgs/main_7.jpg'),
(20, 'main', 'asus', 'Mainboard ASUS ROG STRIX B460-G GAMING', '- Chuẩn mainboard: Micro-ATX\r\n- Socket: 1200 , Chipset: B460\r\n- Hỗ trợ RAM: 4 khe DDR4, tối đa 128GB\r\n- Lưu trữ: 1 x M.2 NVMe, Hỗ trợ Intel Optane, 1 x M.2 SATA/NVMe, 6 x SATA 3 6Gb/s\r\n- Cổng xuất hình: 1 x HDMI, 1 x DisplayPort', 3870000, 'imgs/main_1.jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`masanpham`) REFERENCES `sanpham` (`masanpham`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`madonhang`) REFERENCES `donhang` (`madonhang`);

--
-- Constraints for table `chitietphieunhap`
--
ALTER TABLE `chitietphieunhap`
  ADD CONSTRAINT `chitietphieunhap_ibfk_1` FOREIGN KEY (`maphieunhap`) REFERENCES `phieunhap` (`maphieunhap`),
  ADD CONSTRAINT `chitietphieunhap_ibfk_2` FOREIGN KEY (`masanpham`) REFERENCES `sanpham` (`masanpham`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`makhachhang`) REFERENCES `khachhang` (`makhachhang`);

--
-- Constraints for table `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD CONSTRAINT `phieunhap_ibfk_1` FOREIGN KEY (`manhacungcap`) REFERENCES `nhacungcap` (`manhacungcap`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`madanhmuc`) REFERENCES `danhmuc` (`madanhmuc`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`manhacungcap`) REFERENCES `nhacungcap` (`manhacungcap`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
