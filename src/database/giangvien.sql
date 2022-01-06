-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 06, 2022 lúc 09:25 AM
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
-- Cơ sở dữ liệu: `1951060949_university`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `magv` int(11) NOT NULL,
  `hovaten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `gioitinh` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trinhdo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chuyenmon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hocham` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hocvi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coquan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giangvien`
--

INSERT INTO `giangvien` (`magv`, `hovaten`, `ngaysinh`, `gioitinh`, `trinhdo`, `chuyenmon`, `hocham`, `hocvi`, `coquan`) VALUES
(1, 'Trung Quan', '2012-01-01', 'nam', 'Dai hoc', 'CNTT', 'Dai hoc', 'Dai hoc', 'DHTL'),
(2, 'Quan', '2022-01-04', 'nam', 'Dai Hoc', 'CNTT', 'Dai Hoc', 'Dai hoc', 'Dai hoc'),
(3, 'Quanhip', '2022-01-05', 'nam', 'Dai Hoc', 'CNTT', 'Dai Hoc', '', 'Dai hoc'),
(4, 'Quana', '2021-02-12', 'nam', 'Dai Hoc', 'CNTT', 'Dai Hoc', 'Dai hoc', 'Dai hoc');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`magv`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  MODIFY `magv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
