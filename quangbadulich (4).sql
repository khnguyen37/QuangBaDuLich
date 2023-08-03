-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 29, 2023 lúc 04:51 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quangbadulich`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangnhapkh`
--

CREATE TABLE `dangnhapkh` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dangnhapkh`
--

INSERT INTO `dangnhapkh` (`id`, `username`, `email`, `password`) VALUES
(1, 'Kha', 'fessykeyf@gmail.com', '123456'),
(2, 'khnguyen37', 'khnguyen19112001@gmail.com', '0bb0a8'),
(3, 'Khả đẹp trai', 'khanguy19112001@gmail.com', '63e6bc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `Ma` int(11) NOT NULL,
  `MaTour` int(11) NOT NULL,
  `TenTour` varchar(100) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `Gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`Ma`, `MaTour`, `TenTour`, `SoLuong`, `Gia`) VALUES
(1, 2, 'Du Lịch Châu Âu: DuBai - Ả Rập Xê Us', 12, 8000000),
(3, 3, 'DU Lịch', 12, 8000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hdv_dulich`
--

CREATE TABLE `hdv_dulich` (
  `MaHDV` int(11) NOT NULL,
  `TenHDV` varchar(100) NOT NULL,
  `SDT` int(11) NOT NULL,
  `GioiTinh` char(5) NOT NULL,
  `DiaChi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hdv_dulich`
--

INSERT INTO `hdv_dulich` (`MaHDV`, `TenHDV`, `SDT`, `GioiTinh`, `DiaChi`) VALUES
(1, 'Nguyễn Văn A', 47544573, 'Name', 'Tây Ninh'),
(2, 'Nguyễn Văn B', 47535354, 'Nam', 'Hồ Chí Minh'),
(3, 'Châu Đức Thịnh', 43538732, 'Nam', 'Đà Nẵng'),
(4, 'Nguyễn Đình Khả', 393822028, 'Nam', 'Quảng Ngãi'),
(6, 'Nguyễn Đình Khả', 393822028, 'Nam', 'Quảng Ngãi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` int(11) NOT NULL,
  `TenKH` varchar(100) NOT NULL,
  `GioiTinh` char(5) NOT NULL,
  `DiaChi` varchar(200) NOT NULL,
  `SDT` int(11) NOT NULL,
  `CMND` int(11) NOT NULL,
  `TenDangNhap` varchar(50) NOT NULL,
  `MatKhau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `GioiTinh`, `DiaChi`, `SDT`, `CMND`, `TenDangNhap`, `MatKhau`) VALUES
(1, 'Nguyễn Đình Khả', 'nam', 'Quảng Ngãi', 393822028, 212884849, 'kha', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitour`
--

CREATE TABLE `loaitour` (
  `MaLoaiTour` int(11) NOT NULL,
  `TenLoaiTour` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaitour`
--

INSERT INTO `loaitour` (`MaLoaiTour`, `TenLoaiTour`) VALUES
(1, 'Trong nước'),
(2, 'Ngoài nước');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvienchamsoc`
--

CREATE TABLE `nhanvienchamsoc` (
  `MaNV` int(11) NOT NULL,
  `TenNV` varchar(100) NOT NULL,
  `SDT` int(11) NOT NULL,
  `DiaChi` varchar(200) NOT NULL,
  `GioiTinh` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvienchamsoc`
--

INSERT INTO `nhanvienchamsoc` (`MaNV`, `TenNV`, `SDT`, `DiaChi`, `GioiTinh`) VALUES
(1, 'Nguyễn Trần Anh Thư', 47587343, 'Tây Ninh  ', 'Nữ'),
(2, 'Nguyễn Văn Từ', 35748357, 'Hồ Chí Minh', 'Nam'),
(3, 'Nguyễn Đình Khả', 393822028, 'Quảng Ngãi', 'Nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuongtien`
--

CREATE TABLE `phuongtien` (
  `MaPT` int(11) NOT NULL,
  `TenPT` varchar(100) NOT NULL,
  `SoChoNgoi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phuongtien`
--

INSERT INTO `phuongtien` (`MaPT`, `TenPT`, `SoChoNgoi`) VALUES
(1, 'Xe Hơi', 20),
(2, 'Tàu Lửa', 200),
(3, 'Tàu', 100),
(4, 'Máy Bay', 200),
(1214, 'Khả ', 54);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour`
--

CREATE TABLE `tour` (
  `MaTour` int(11) NOT NULL,
  `TenTour` varchar(100) NOT NULL,
  `Gia` int(11) NOT NULL,
  `MaPT` int(11) NOT NULL,
  `MaLoaiTour` int(11) NOT NULL,
  `MoTa` varchar(200) NOT NULL,
  `HinhAnh` char(50) NOT NULL,
  `SoVe` int(11) NOT NULL,
  `MaNV` int(11) NOT NULL,
  `MaHDV` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tour`
--

INSERT INTO `tour` (`MaTour`, `TenTour`, `Gia`, `MaPT`, `MaLoaiTour`, `MoTa`, `HinhAnh`, `SoVe`, `MaNV`, `MaHDV`) VALUES
(1, 'Du Lịch Châu Âu:  DuBai - Ả Rập Xê Us', 123123123, 1, 1, 'Đất nước phát triễn và đi trước thời đại phồn vinh, cái nôi của tỷ phú trên thế giới', 'AnDo.jpg', 12, 3, 6),
(2, 'Du Lịch Châu Âu:  DuBai - Ả Rập Xê Us', 12334, 1, 1, 'Đất nước phát triễn và đi trước thời đại phồn vinh, cái nôi của tỷ phú trên thế giới', 'AnDo.jpg', 25, 1, 1),
(3, 'Du Lịch Châu Âu:  DuBai - Ả Rập Xê Us', 150000000, 3, 2, 'Đất nước phát triễn và đi trước thời đại phồn vinh, cái nôi của tỷ phú trên thế giới', 'Dubai.jpg', 20, 1, 4),
(4, 'Du Lịch Châu Âu: Thụy Điển - Thụy Sỹ', 83999999, 4, 1, 'Sự Hoang sơ và hào hùng vỹ đại của thiên nhiên', 'ChauAu_2.jpg', 45, 2, 2),
(5, 'Du Lịch Đông Âu: Đón Giáng sinh tại Thụy Điển', 600000000, 1, 1, 'Sự cổ trang, trung cổ của đất nước Trung Hoa, Cái nôi của sự dã dối', 'ChauAu_1.jpg', 15, 2, 3),
(6, 'Du Lịch Châu Âu : Pháp - Thụy Sĩ - Ý Xinh Đẹp', 8000000, 1, 1, 'Lãng mạng tình yêu - Giàu có và phồn vinh, Thiên đường của giới thượng lưu', 'ChauAu_1.jpg', 34, 3, 6),
(7, '', 0, 1, 1, '', '', 0, 1, 1),
(8, 'Du Lịch Châu Âu:  DuBai - Ả Rập Xê Us', 150000000, 3, 2, 'Đất nước phát triễn và đi trước thời đại phồn vinh, cái nôi của tỷ phú trên thế giới', 'Dubai.jpg', 20, 1, 4),
(9, 'Du Lịch Châu Âu: Thụy Điển - Thụy Sỹ', 83999999, 4, 1, 'Sự Hoang sơ và hào hùng vỹ đại của thiên nhiên', 'ChauAu_2.jpg', 45, 2, 2),
(10, 'Du Lịch Đông Âu: Đón Giáng sinh tại Thụy Điển', 600000000, 1, 1, 'Sự cổ trang, trung cổ của đất nước Trung Hoa, Cái nôi của sự dã dối', 'ChauAu_1.jpg', 15, 2, 3),
(12, 'Du Lịch Châu Âu:  DuBai - Ả Rập Xê Us', 112, 1, 1, '231313', 'AnDo.jpg', 123, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_name` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_name`, `Password`) VALUES
('kha', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vetour`
--

CREATE TABLE `vetour` (
  `MaVe` int(11) NOT NULL,
  `TenVe` varchar(100) NOT NULL,
  `NgayBatDau` date NOT NULL,
  `NgayKetThuc` date NOT NULL,
  `MaTour` int(11) NOT NULL,
  `MaKH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dangnhapkh`
--
ALTER TABLE `dangnhapkh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`Ma`),
  ADD KEY `MaTour` (`MaTour`);

--
-- Chỉ mục cho bảng `hdv_dulich`
--
ALTER TABLE `hdv_dulich`
  ADD PRIMARY KEY (`MaHDV`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Chỉ mục cho bảng `loaitour`
--
ALTER TABLE `loaitour`
  ADD PRIMARY KEY (`MaLoaiTour`);

--
-- Chỉ mục cho bảng `nhanvienchamsoc`
--
ALTER TABLE `nhanvienchamsoc`
  ADD PRIMARY KEY (`MaNV`);

--
-- Chỉ mục cho bảng `phuongtien`
--
ALTER TABLE `phuongtien`
  ADD PRIMARY KEY (`MaPT`);

--
-- Chỉ mục cho bảng `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`MaTour`),
  ADD KEY `MaLoaiTour` (`MaLoaiTour`),
  ADD KEY `MaPT` (`MaPT`),
  ADD KEY `MaHDV` (`MaHDV`),
  ADD KEY `MaNV` (`MaNV`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_name`);

--
-- Chỉ mục cho bảng `vetour`
--
ALTER TABLE `vetour`
  ADD PRIMARY KEY (`MaVe`),
  ADD KEY `MaTour` (`MaTour`),
  ADD KEY `MaKH` (`MaKH`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dangnhapkh`
--
ALTER TABLE `dangnhapkh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `Ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `hdv_dulich`
--
ALTER TABLE `hdv_dulich`
  MODIFY `MaHDV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `loaitour`
--
ALTER TABLE `loaitour`
  MODIFY `MaLoaiTour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `nhanvienchamsoc`
--
ALTER TABLE `nhanvienchamsoc`
  MODIFY `MaNV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `phuongtien`
--
ALTER TABLE `phuongtien`
  MODIFY `MaPT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1216;

--
-- AUTO_INCREMENT cho bảng `tour`
--
ALTER TABLE `tour`
  MODIFY `MaTour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT cho bảng `vetour`
--
ALTER TABLE `vetour`
  MODIFY `MaVe` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`MaTour`) REFERENCES `tour` (`MaTour`);

--
-- Các ràng buộc cho bảng `tour`
--
ALTER TABLE `tour`
  ADD CONSTRAINT `tour_ibfk_1` FOREIGN KEY (`MaLoaiTour`) REFERENCES `loaitour` (`MaLoaiTour`),
  ADD CONSTRAINT `tour_ibfk_2` FOREIGN KEY (`MaPT`) REFERENCES `phuongtien` (`MaPT`),
  ADD CONSTRAINT `tour_ibfk_3` FOREIGN KEY (`MaHDV`) REFERENCES `hdv_dulich` (`MaHDV`),
  ADD CONSTRAINT `tour_ibfk_4` FOREIGN KEY (`MaNV`) REFERENCES `nhanvienchamsoc` (`MaNV`);

--
-- Các ràng buộc cho bảng `vetour`
--
ALTER TABLE `vetour`
  ADD CONSTRAINT `vetour_ibfk_1` FOREIGN KEY (`MaTour`) REFERENCES `tour` (`MaTour`),
  ADD CONSTRAINT `vetour_ibfk_2` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
