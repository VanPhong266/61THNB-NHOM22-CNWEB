-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 14, 2022 lúc 11:06 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `edmodo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giadinh`
--

CREATE TABLE `giadinh` (
  `ma_gd` int(11) NOT NULL,
  `tenph` varchar(50) NOT NULL,
  `sodienthoai` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `ma_hs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaovien`
--

CREATE TABLE `giaovien` (
  `ma_gv` int(11) NOT NULL,
  `tengv` varchar(50) NOT NULL,
  `gioitinh` varchar(10) NOT NULL,
  `chuyenmon` varchar(50) NOT NULL,
  `trinhdo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocsinh`
--

CREATE TABLE `hocsinh` (
  `ma_hs` int(11) NOT NULL,
  `tenhs` varchar(50) NOT NULL,
  `gioitinh` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lophoc`
--

CREATE TABLE `lophoc` (
  `ma_lop` int(11) NOT NULL,
  `tenlop` varchar(50) NOT NULL,
  `ma_gv` int(11) DEFAULT NULL,
  `ma_hs` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `giadinh`
--
ALTER TABLE `giadinh`
  ADD PRIMARY KEY (`ma_gd`),
  ADD KEY `ma_hs` (`ma_hs`);

--
-- Chỉ mục cho bảng `giaovien`
--
ALTER TABLE `giaovien`
  ADD PRIMARY KEY (`ma_gv`);

--
-- Chỉ mục cho bảng `hocsinh`
--
ALTER TABLE `hocsinh`
  ADD PRIMARY KEY (`ma_hs`);

--
-- Chỉ mục cho bảng `lophoc`
--
ALTER TABLE `lophoc`
  ADD PRIMARY KEY (`ma_lop`),
  ADD KEY `ma_gv` (`ma_gv`),
  ADD KEY `ma_hs` (`ma_hs`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `giadinh`
--
ALTER TABLE `giadinh`
  ADD CONSTRAINT `giadinh_ibfk_1` FOREIGN KEY (`ma_hs`) REFERENCES `hocsinh` (`ma_hs`);

--
-- Các ràng buộc cho bảng `lophoc`
--
ALTER TABLE `lophoc`
  ADD CONSTRAINT `lophoc_ibfk_1` FOREIGN KEY (`ma_gv`) REFERENCES `giaovien` (`ma_gv`),
  ADD CONSTRAINT `lophoc_ibfk_2` FOREIGN KEY (`ma_hs`) REFERENCES `hocsinh` (`ma_hs`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
