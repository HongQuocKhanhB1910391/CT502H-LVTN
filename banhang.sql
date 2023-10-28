-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 24, 2023 lúc 08:29 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `banhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bienlai`
--

CREATE TABLE `bienlai` (
  `MaBL` int(10) NOT NULL,
  `MaKH` varchar(10) NOT NULL,
  `HoTenKH` varchar(20) NOT NULL,
  `STT` int(8) NOT NULL,
  `MaSP` varchar(10) NOT NULL,
  `LoaiSP` varchar(10) NOT NULL,
  `TenSP` varchar(50) NOT NULL,
  `GiaTien` int(10) NOT NULL,
  `SoLuong` int(3) NOT NULL,
  `ThanhTien` int(10) NOT NULL,
  `TongCong` int(10) NOT NULL,
  `ThanhChu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `STT` int(8) NOT NULL,
  `MaSP` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `LoaiSP` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TenSP` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Gia` int(9) NOT NULL,
  `SoLuong` int(2) NOT NULL,
  `GiaTri` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `HoTenKH` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `GioiTinh` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DiaChi` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SoDienThoai` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `HoTenKH`, `GioiTinh`, `DiaChi`, `SoDienThoai`, `username`, `password`, `email`) VALUES
('HG7345', 'Hoang Van Muoi', '1', 'Phuong Cai Rang, TP. Can Tho', '0123465978', 'van10', 'van10', 'van10@gmail.com'),
('MK3265', 'Nguyen Van A', '1', 'Phường Xuân Khánh, quận Nình Kiều, TP. Cần Thơ', '0544561335', 'vana123', 'vana123', 'vana123@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `MaLoaiSP` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `TenLoaiSP` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`MaLoaiSP`, `TenLoaiSP`) VALUES
('AC', 'Acer'),
('AS', 'Asus'),
('CPU', 'CPU'),
('DL', 'Dell'),
('DR', 'DVD-ROM'),
('FC', 'Quạt tản nhiệt'),
('GPU', 'GPU'),
('HD', 'Ổ cứng'),
('HP', 'HP'),
('KB', 'Bàn phím'),
('LE', 'Lenovo'),
('MB', 'Mainboard'),
('MC', 'Micro'),
('MS', 'chuột máy tính'),
('PSU', 'PSU'),
('RAM', 'RAM'),
('SC', 'Màn hình'),
('TN', 'Tai nghe'),
('WC', 'W');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `LoaiSP` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `MaLoaiSP` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `TenSP` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SoLuong` int(4) NOT NULL,
  `Gia` int(10) NOT NULL,
  `GhiChu` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `LoaiSP`, `MaLoaiSP`, `TenSP`, `SoLuong`, `Gia`, `GhiChu`) VALUES
('CPU1563', 'CPU', 'CPU', 'CPU Intel Core i7 14700KF (Up to 5.6 GHz | 20 Nhân', 99, 12290000, 'Số nhân, số luồng: 20 nhân 28 luồng\r\nXung nhịp CPU: 3.4 – 5.6 GHz\r\nBộ nhớ Cache: 33 MB\r\nTDP: 125 W\r\nHỗ trợ ram tối đa: 128 GB\r\nBus ram hỗ trợ: DDR4 3200 MT/s, DDR5 5600 MT/s\r\nCard đồ họa: Không tích hợp (Sử dụng card rời)'),
('DL8943', 'Dell', 'DL', 'Laptop Dell Vostro 3530 80GG92', 66, 12490000, 'Dòng sản phẩm: Vostro 3530\r\nCPU: Intel i3 1305U\r\nVGA: Intel UHD Graphics\r\nRAM: 1 x 8GB DDR 4 3200MHz\r\nSSD: 256GB SSD M.2 NVMe\r\n'),
('KB756', 'Bàn phím', 'KB', 'Bàn phím cơ DareU EK75 White Black (Type-C, DareU ', 70, 699000, 'Kết nối: Có dây (1.8m)\r\nLayout: 80 phím + 1 núm\r\nKeycap: ABS double injection\r\nSwitch: DAREU Dream switch (LINEAR)\r\nLED Light: RGB (Tích hợp thêm dải led RGB bên sườn)\r\nKích thước: 30.2 x 333.2 x140.4mm\r\nTrọng lượng: 651g'),
('TN802', 'Tai nghe', 'TN', 'Tai nghe không dây Corsair HS80 MAX', 50, 3550000, '– Kết nối: Wireless\r\n– Cân nặng: 0.717\r\n– Micro: Omni-directional\r\n– Chất lượng âm thanh: Dolby Atmos\r\n– Tần số: 20Hz – 40 kHz\r\n– Trở kháng: 2.2k Ohms\r\n– Tương thích: PC, Mac, PlayStation 4/5\r\n– Đêm tai memory foam giả da');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhtoan`
--

CREATE TABLE `thanhtoan` (
  `id` int(8) NOT NULL,
  `MaKH` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `HoTenKH` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `MaBL` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MaSP` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TenSP` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `GiaTri` int(10) NOT NULL,
  `SoLuong` int(4) NOT NULL,
  `TongCong` int(10) NOT NULL,
  `DaThanhToan` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bienlai`
--
ALTER TABLE `bienlai`
  ADD PRIMARY KEY (`MaBL`),
  ADD KEY `STT` (`STT`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`STT`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`MaLoaiSP`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `MaLoaiSP` (`MaLoaiSP`);

--
-- Chỉ mục cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `MaKH` (`MaKH`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bienlai`
--
ALTER TABLE `bienlai`
  ADD CONSTRAINT `bienlai_ibfk_1` FOREIGN KEY (`STT`) REFERENCES `giohang` (`STT`);

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`MaLoaiSP`) REFERENCES `loaisp` (`MaLoaiSP`);

--
-- Các ràng buộc cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD CONSTRAINT `thanhtoan_ibfk_1` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
