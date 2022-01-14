-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 14, 2022 lúc 03:42 PM
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

--
-- Đang đổ dữ liệu cho bảng `giadinh`
--

INSERT INTO `giadinh` (`ma_gd`, `tenph`, `sodienthoai`, `email`, `diachi`, `ma_hs`) VALUES
(1, 'Delcina Morrell', '881-278-6460', 'dmorrell0@amazon.com', '7 Arrowood Road', 1),
(2, 'Elia Eggleton', '679-789-3894', 'eeggleton1@seattletimes.com', '4549 Trailsway Parkway', 2),
(3, 'Magdalena Hemshall', '308-199-4345', 'mhemshall2@163.com', '74 Gina Trail', 3),
(4, 'Nathalia Skudder', '649-621-4508', 'nskudder3@blinklist.com', '2369 Bashford Plaza', 4),
(5, 'Lyssa Simmonite', '446-233-3698', 'lsimmonite4@bloglines.com', '43726 Holy Cross Terrace', 5),
(6, 'Berti Soares', '159-146-3517', 'bsoares5@xing.com', '96 Dovetail Way', 6),
(7, 'Risa Hesse', '737-174-6718', 'rhesse6@booking.com', '6 Kennedy Point', 7),
(8, 'Kerrin Humbie', '810-293-5061', 'khumbie7@wsj.com', '593 Messerschmidt Place', 8),
(9, 'Arvy Muehle', '922-813-0898', 'amuehle8@huffingtonpost.com', '2586 Fremont Place', 9),
(10, 'Pearl Joney', '858-604-2734', 'pjoney9@freewebs.com', '36 Forster Plaza', 10);

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

--
-- Đang đổ dữ liệu cho bảng `giaovien`
--

INSERT INTO `giaovien` (`ma_gv`, `tengv`, `gioitinh`, `chuyenmon`, `trinhdo`) VALUES
(1, 'Maurits Marushak', 'Female', 'Toán', 'Thạc Sĩ'),
(2, 'Pennie Rubin', 'Female', 'Vật Lý', 'Thạc Sĩ'),
(3, 'Jocelin Bending', 'Male', 'Hóa Học', 'Thạc Sĩ'),
(4, 'Cally Curness', 'Male', 'Sinh Học', 'Thạc Sĩ'),
(5, 'Veda Riggulsford', 'Female', 'Công Nghệ', 'Thạc Sĩ'),
(6, 'Philip Kingaby', 'Female', 'Tiếng Anh', 'Thạc Sĩ'),
(7, 'Thorndike Cockley', 'Female', 'Giáo Dục Công Dân', 'Thạc Sĩ'),
(8, 'Gayla Laidlaw', 'Female', 'Thể Dục', 'Thạc Sĩ'),
(9, 'Florenza Mill', 'Male', 'Ngữ Văn', 'Thạc Sĩ'),
(10, 'Hayward Kelshaw', 'Female', 'Địa Lý', 'Thạc Sĩ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocsinh`
--

CREATE TABLE `hocsinh` (
  `ma_hs` int(11) NOT NULL,
  `tenhs` varchar(50) NOT NULL,
  `gioitinh` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hocsinh`
--

INSERT INTO `hocsinh` (`ma_hs`, `tenhs`, `gioitinh`) VALUES
(1, 'Elissa Spadotto', 'Female'),
(2, 'Bartholomeus Brosini', 'Female'),
(3, 'Beatrix Brockton', 'Male'),
(4, 'Alberik Fayter', 'Male'),
(5, 'Michale de Keyser', 'Male'),
(6, 'Trever Norcliff', 'Male'),
(7, 'Farlay Schimann', 'Male'),
(8, 'Shep De Brett', 'Female'),
(9, 'Hermie Catlow', 'Female'),
(10, 'Katti Bernier', 'Male');

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
-- Đang đổ dữ liệu cho bảng `lophoc`
--

INSERT INTO `lophoc` (`ma_lop`, `tenlop`, `ma_gv`, `ma_hs`) VALUES
(1, '10A1', 1, 1),
(2, '10A2', 2, 2),
(3, '10A3', 3, 3),
(4, '10A4', 4, 4),
(5, '10A5', 5, 5),
(6, '10A6', 6, 6),
(7, '10A7', 7, 7),
(8, '10A8', 8, 8),
(9, '10A9', 9, 9),
(10, '10A10', 10, 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `ma_nguoidung` int(10) UNSIGNED NOT NULL,
  `tendangnhap` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `matkhau` varchar(30) NOT NULL
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
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`ma_nguoidung`),
  ADD UNIQUE KEY `tendangnhap` (`tendangnhap`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `ma_nguoidung` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

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
