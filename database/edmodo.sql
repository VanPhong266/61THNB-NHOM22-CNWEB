-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 15, 2022 lúc 11:59 AM
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
-- Cấu trúc bảng cho bảng `db_admin`
--

CREATE TABLE `db_admin` (
  `ma_nguoidung` int(10) UNSIGNED NOT NULL,
  `tendangnhap` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `db_admin`
--

INSERT INTO `db_admin` (`ma_nguoidung`, `tendangnhap`, `email`, `matkhau`) VALUES
(1, 'quanthangf5', 'quanthangsonic@gmail.com', 'thangngu1');

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
(1, 'Freddi Zannolli', '250-842-9531', 'fzannolli0@diigo.com', '03 Lake View Road', 1),
(2, 'Jemie Oman', '460-961-8700', 'joman1@europa.eu', '3 New Castle Park', 2),
(3, 'Cosimo Dukesbury', '333-782-6632', 'cdukesbury2@google.cn', '303 Bluejay Drive', 3),
(4, 'Dukey Rubes', '112-940-3431', 'drubes3@latimes.com', '2899 Florence Crossing', 4),
(5, 'Harold Gillhespy', '734-846-6319', 'hgillhespy4@usgs.gov', '89662 Becker Junction', 5),
(6, 'Hillard Bridgwater', '977-320-3433', 'hbridgwater5@wp.com', '36805 Arkansas Trail', 6),
(7, 'Amalle de Marco', '395-905-3663', 'ade6@storify.com', '1321 Gerald Court', 7),
(8, 'Antonie Coleby', '717-304-6375', 'acoleby7@scientificamerican.com', '78 Fulton Trail', 8),
(9, 'Georgeanne Divine', '679-969-4447', 'gdivine8@bbb.org', '17979 Pierstorff Trail', 9),
(10, 'Wynne Storton', '957-520-2573', 'wstorton9@amazonaws.com', '269 Utah Alley', 10);

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
(1, 'Tyne Schuler', 'Male', 'Toán', 'Thạc Sĩ'),
(2, 'Emanuele Pady', 'Female', 'Vật Lý', 'Thạc Sĩ'),
(3, 'Philippe Feragh', 'Female', 'Hóa Học', 'Thạc Sĩ'),
(4, 'Mala Matkovic', 'Female', 'Sinh Học', 'Thạc Sĩ'),
(5, 'Josi Bentsen', 'Female', 'Ngữ Văn', 'Thạc Sĩ'),
(6, 'Sterling Steeden', 'Female', 'Tiếng Anh', 'Thạc Sĩ'),
(7, 'Audre Hrinchenko', 'Female', 'Địa Lý', 'Thạc Sĩ'),
(8, 'Barney Writtle', 'Male', 'Lịch Sử', 'Thạc Sĩ'),
(9, 'Gal Poser', 'Female', 'Công Nghệ', 'Thạc Sĩ'),
(10, 'Langsdon Mervyn', 'Male', 'Thể Dục', 'Thạc Sĩ');

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
(1, 'Ariella Oguz', 'Male'),
(2, 'Beauregard Fabler', 'Female'),
(3, 'Eileen Rolf', 'Female'),
(4, 'Gwenny Djorevic', 'Female'),
(5, 'Margarette Speenden', 'Female'),
(6, 'Sim Lahy', 'Female'),
(7, 'Eleni Polfer', 'Male'),
(8, 'Tomlin Peret', 'Male'),
(9, 'Joannes Shurman', 'Female'),
(10, 'Cherilyn Egdal', 'Female');

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
(1, 'Mathian Osler', 1, 1),
(2, 'Eleen Eadmead', 2, 2),
(3, 'Geordie Westwick', 3, 3),
(4, 'Bink Klewer', 4, 4),
(5, 'Martie Gecke', 5, 5),
(6, 'Charmane Peyton', 6, 6),
(7, 'Torrance McIlmorow', 7, 7),
(8, 'Annabella Laviste', 8, 8),
(9, 'Nappy Mordin', 9, 9),
(10, 'Marlyn Peggrem', 10, 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `email_verification_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `name`, `email`, `password`, `status`, `email_verification_link`, `email_verified_at`) VALUES
(1, 'xinchao', '', '123123', 0, '', NULL),
(3, 'Hì', 'lotaynaongo@gmail.com', '$2y$10$DGgID4X2QxPTSuUoqFwD2u.c/vFt3UmraKtdMPjZyVUKErI5G1gPy', 0, '9457c62de6f7d7c8f9b10300eec991979761', NULL),
(4, 'Trần Hạ Yểm', 'tranhayem@gmail.com', '$2y$10$/ovtuKJAIRLhk58DDyrfXuR59mySgry8doavXsRogOBiON7ZlBmFm', 0, '7cd3e5b7556592606d95924eadcacf888314', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `db_admin`
--
ALTER TABLE `db_admin`
  ADD PRIMARY KEY (`ma_nguoidung`),
  ADD UNIQUE KEY `tendangnhap` (`tendangnhap`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `giadinh`
--
ALTER TABLE `giadinh`
  ADD PRIMARY KEY (`ma_gd`);

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
  ADD PRIMARY KEY (`ma_lop`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `db_admin`
--
ALTER TABLE `db_admin`
  MODIFY `ma_nguoidung` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `giadinh`
--
ALTER TABLE `giadinh`
  MODIFY `ma_gd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `giaovien`
--
ALTER TABLE `giaovien`
  MODIFY `ma_gv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `hocsinh`
--
ALTER TABLE `hocsinh`
  MODIFY `ma_hs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `lophoc`
--
ALTER TABLE `lophoc`
  MODIFY `ma_lop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
