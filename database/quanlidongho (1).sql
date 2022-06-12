-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 29, 2022 lúc 12:15 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlidongho`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dongho`
--

CREATE TABLE `dongho` (
  `madh` int(50) NOT NULL,
  `tendh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `collection` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `mota` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `picture` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dongho`
--

INSERT INTO `dongho` (`madh`, `tendh`, `collection`, `soluong`, `mota`, `gia`, `picture`) VALUES
(1, 'CO‑AXIAL MASTER CHRONOMETER 41 MM', 'CONSTELLATION', 12, 'Giữa các vấu: 25 mm, Vòng đeo tay: Thép - vàng đỏ ,Vỏ: Thép - vàng đỏ\nĐường kính vỏ: 38 mm ,Màu quay số: Bạc ,Pha lê: Tinh thể sapphire chống xước \n,màu sáng với xử lý chống phản xạ ở cả hai mặt', 1200, 'a1.jpg'),
(2, 'CO‑AXIAL MASTER CHRONOMETER 42 MM', 'CONSTELLATION', 12, 'Giữa các vấu: 25 mm, Vòng đeo tay: Thép - vàng đỏ ,Vỏ: Thép - vàng đỏ Đường kính vỏ: 38 mm ,Màu quay số: Bạc ,Pha lê: Tinh thể sapphire chống xước  ,màu sáng với xử lý chống phản xạ ở cả hai mặt', 1380, 'a2.jpg'),
(3, 'CO‑AXIAL MASTER CHRONOMETER 39 MM', 'CONSTELLATION', 12, 'Giữa các vấu: 25 mm, Vòng đeo tay: Thép - vàng đỏ ,Vỏ: Thép - vàng đỏ Đường kính vỏ: 38 mm ,Màu quay số: Bạc ,Pha lê: Tinh thể sapphire chống xước  ,màu sáng với xử lý chống phản xạ ở cả hai mặt', 1400, 'a3.jpg'),
(4, 'CO‑AXIAL MASTER CHRONOMETER 38 MM', 'CONSTELLATION', 12, 'Giữa các vấu: 25 mm, Vòng đeo tay: Thép - vàng đỏ ,Vỏ: Thép - vàng đỏ Đường kính vỏ: 38 mm ,Màu quay số: Bạc ,Pha lê: Tinh thể sapphire chống xước  ,màu sáng với xử lý chống phản xạ ở cả hai mặt', 1200, 'a4.jpg'),
(5, 'CO‑AXIAL MASTER CHRONOMETER 51 MM', 'CONSTELLATION', 11, 'Giữa các vấu: 25 mm, Vòng đeo tay: Thép - vàng đỏ ,Vỏ: Thép - vàng đỏ Đường kính vỏ: 38 mm ,Màu quay số: Bạc ,Pha lê: Tinh thể sapphire chống xước  ,màu sáng với xử lý chống phản xạ ở cả hai mặt', 1930, 'a5.jpg'),
(6, 'CO‑AXIAL MASTER CHRONOMETER 26 MM', 'CONSTELLATION', 1, 'Giữa các vấu: 25 mm, Vòng đeo tay: Thép - vàng đỏ ,Vỏ: Thép - vàng đỏ Đường kính vỏ: 38 mm ,Màu quay số: Bạc ,Pha lê: Tinh thể sapphire chống xước  ,màu sáng với xử lý chống phản xạ ở cả hai mặt', 2100, 'a6.jpg'),
(7, 'CO‑AXIAL MASTER CHRONOMETER 12 MM', 'CONSTELLATION', 11, 'Giữa các vấu: 25 mm, Vòng đeo tay: Thép - vàng đỏ ,Vỏ: Thép - vàng đỏ Đường kính vỏ: 38 mm ,Màu quay số: Bạc ,Pha lê: Tinh thể sapphire chống xước  ,màu sáng với xử lý chống phản xạ ở cả hai mặt', 2900, 'a7.jpg'),
(8, 'CO‑AXIAL MASTER CHRONOMETER 88 MM', 'CONSTELLATION', 19, 'Giữa các vấu: 25 mm, Vòng đeo tay: Thép - vàng đỏ ,Vỏ: Thép - vàng đỏ Đường kính vỏ: 38 mm ,Màu quay số: Bạc ,Pha lê: Tinh thể sapphire chống xước  ,màu sáng với xử lý chống phản xạ ở cả hai mặt', 3100, 'a8.jpg'),
(9, 'CO‑AXIAL MASTER CHRONOMETER 96 MM', 'CONSTELLATION', 15, 'Giữa các vấu: 25 mm, Vòng đeo tay: Thép - vàng đỏ ,Vỏ: Thép - vàng đỏ Đường kính vỏ: 38 mm ,Màu quay số: Bạc ,Pha lê: Tinh thể sapphire chống xước  ,màu sáng với xử lý chống phản xạ ở cả hai mặt', 1420, 'a9.jpg'),
(10, 'CO‑AXIAL MASTER CHRONOMETER 11 MM', 'CONSTELLATION', 21, 'Giữa các vấu: 25 mm, Vòng đeo tay: Thép - vàng đỏ ,Vỏ: Thép - vàng đỏ Đường kính vỏ: 38 mm ,Màu quay số: Bạc ,Pha lê: Tinh thể sapphire chống xước  ,màu sáng với xử lý chống phản xạ ở cả hai mặt', 4109, 'a10.jpg'),
(11, 'Speedmaster Dark Side of the Moon Apollo 8', 'DARK SIDE OF THE MOON', 12, 'Giữa các vấu: 21 mm, Vòng đeo tay:da Vỏ: Gốm đen, Đường kính vỏ : 44,25 mm Màu quay số: Đen, Pha lê: Tinh thể sapphire ,chống xước với xử lý chống phản xạ cả hai mặt, Chống nước', 12500, 'd1.jpg'),
(12, 'Speedmaster Dark Side of the Moon Apollo 9', 'DARK SIDE OF THE MOON', 12, 'Giữa các vấu: 21 mm, Vòng đeo tay:da Vỏ: Gốm đen, Đường kính vỏ : 44,25 mm Màu quay số: Đen, Pha lê: Tinh thể sapphire ,chống xước với xử lý chống phản xạ cả hai mặt, Chống nước', 13600, 'd2.jpg'),
(13, 'Speedmaster Dark Side of the Moon Apollo 7', 'DARK SIDE OF THE MOON', 12, 'Giữa các vấu: 21 mm, Vòng đeo tay:da Vỏ: Gốm đen, Đường kính vỏ : 44,25 mm Màu quay số: Đen, Pha lê: Tinh thể sapphire ,chống xước với xử lý chống phản xạ cả hai mặt, Chống nước', 14000, 'd3.jpg'),
(14, 'Speedmaster Dark Side of the Moon Apollo 6', 'DARK SIDE OF THE MOON', 12, 'Giữa các vấu: 21 mm, Vòng đeo tay:da Vỏ: Gốm đen, Đường kính vỏ : 44,25 mm Màu quay số: Đen, Pha lê: Tinh thể sapphire ,chống xước với xử lý chống phản xạ cả hai mặt, Chống nước', 11500, 'd4.jpg'),
(15, 'Speedmaster Dark Side of the Moon Apollo 5', 'DARK SIDE OF THE MOON', 11, 'Giữa các vấu: 21 mm, Vòng đeo tay:da Vỏ: Gốm đen, Đường kính vỏ : 44,25 mm Màu quay số: Đen, Pha lê: Tinh thể sapphire ,chống xước với xử lý chống phản xạ cả hai mặt, Chống nước', 10500, 'd5.jpg'),
(16, '5370P - GRAND COMPLICATIONS', 'Patek Philippe Geneve X OMEGA', 1, 'Giữa các vấu: 26mm,vòng đeo tay: da cá sấu Vỏ: màu vàng gold. Mặt sau hoàn toàn có thể hoán đổi ,mặt sau bằng tinh thể sapphire.  Chống nước đến 30m. Đường kính vỏ: 39 mm. Chiều cao: 9,71 mm.', 125000, 'p1.jpg'),
(17, '5371P - GRAND COMPLICATIONS', 'Patek Philippe Geneve X OMEGA', 5, 'Giữa các vấu: 26mm,vòng đeo tay: da cá sấu Vỏ: màu vàng gold. Mặt sau hoàn toàn có thể hoán đổi ,mặt sau bằng tinh thể sapphire.  Chống nước đến 30m. Đường kính vỏ: 39 mm. Chiều cao: 9,71 mm.', 120000, 'p2.jpg'),
(18, '5369P - GRAND COMPLICATIONS', 'Patek Philippe Geneve X OMEGA', 5, 'Giữa các vấu: 26mm,vòng đeo tay: da cá sấu Vỏ: màu vàng gold. Mặt sau hoàn toàn có thể hoán đổi ,mặt sau bằng tinh thể sapphire.  Chống nước đến 30m. Đường kính vỏ: 39 mm. Chiều cao: 9,71 mm.', 125005, 'p3.jpg'),
(19, '5379P - GRAND COMPLICATIONS', 'Patek Philippe Geneve X OMEGA', 5, 'Giữa các vấu: 26mm,vòng đeo tay: da cá sấu Vỏ: màu vàng gold. Mặt sau hoàn toàn có thể hoán đổi ,mặt sau bằng tinh thể sapphire.  Chống nước đến 30m. Đường kính vỏ: 39 mm. Chiều cao: 9,71 mm.', 125000, 'p4.jpg'),
(20, '5470P - GRAND COMPLICATIONS', 'Patek Philippe Geneve X OMEGA', 5, 'Giữa các vấu: 26mm,vòng đeo tay: da cá sấu Vỏ: màu vàng gold. Mặt sau hoàn toàn có thể hoán đổi ,mặt sau bằng tinh thể sapphire.  Chống nước đến 30m. Đường kính vỏ: 39 mm. Chiều cao: 9,71 mm.', 136666, 'p5.jpg'),
(21, '5450P - GRAND COMPLICATIONS', 'Patek Philippe Geneve X OMEGA', 5, 'Giữa các vấu: 26mm,vòng đeo tay: da cá sấu Vỏ: màu vàng gold. Mặt sau hoàn toàn có thể hoán đổi ,mặt sau bằng tinh thể sapphire.  Chống nước đến 30m. Đường kính vỏ: 39 mm. Chiều cao: 9,71 mm.', 136669, 'p6.jpg'),
(22, '5491P - GRAND COMPLICATIONS', 'Patek Philippe Geneve X OMEGA', 5, 'Giữa các vấu: 26mm,vòng đeo tay: da cá sấu Vỏ: màu vàng gold. Mặt sau hoàn toàn có thể hoán đổi ,mặt sau bằng tinh thể sapphire.  Chống nước đến 30m. Đường kính vỏ: 39 mm. Chiều cao: 9,71 mm.', 146666, 'p7.jpg'),
(23, '5492P - GRAND COMPLICATIONS', 'Patek Philippe Geneve X OMEGA', 5, 'Giữa các vấu: 26mm,vòng đeo tay: da cá sấu Vỏ: màu vàng gold. Mặt sau hoàn toàn có thể hoán đổi ,mặt sau bằng tinh thể sapphire.  Chống nước đến 30m. Đường kính vỏ: 39 mm. Chiều cao: 9,71 mm.', 146660, 'p8.jpg'),
(24, '5493P - GRAND COMPLICATIONS', 'Patek Philippe Geneve X OMEGA', 5, 'Giữa các vấu: 26mm,vòng đeo tay: da cá sấu Vỏ: màu vàng gold. Mặt sau hoàn toàn có thể hoán đổi ,mặt sau bằng tinh thể sapphire.  Chống nước đến 30m. Đường kính vỏ: 39 mm. Chiều cao: 9,71 mm.', 146668, 'p9.jpg'),
(25, '5494P - GRAND COMPLICATIONS', 'Patek Philippe Geneve X OMEGA', 5, 'Giữa các vấu: 26mm,vòng đeo tay: da cá sấu Vỏ: màu vàng gold. Mặt sau hoàn toàn có thể hoán đổi ,mặt sau bằng tinh thể sapphire.  Chống nước đến 30m. Đường kính vỏ: 39 mm. Chiều cao: 9,71 mm.', 146666, 'p10.jpg'),
(26, '5511P - GRAND COMPLICATIONS', 'Patek Philippe Geneve X OMEGA', 5, 'Giữa các vấu: 26mm,vòng đeo tay: da cá sấu Vỏ: màu vàng gold. Mặt sau hoàn toàn có thể hoán đổi ,mặt sau bằng tinh thể sapphire.  Chống nước đến 30m. Đường kính vỏ: 39 mm. Chiều cao: 9,71 mm.', 146666, 'p11.jpg'),
(27, '5512P - GRAND COMPLICATIONS', 'Patek Philippe Geneve X OMEGA', 5, 'Giữa các vấu: 26mm,vòng đeo tay: da cá sấu Vỏ: màu vàng gold. Mặt sau hoàn toàn có thể hoán đổi ,mặt sau bằng tinh thể sapphire.  Chống nước đến 30m. Đường kính vỏ: 39 mm. Chiều cao: 9,71 mm.', 190000, 'p12.jpg'),
(28, '5521P - GRAND COMPLICATIONS', 'Patek Philippe Geneve X OMEGA', 5, 'Giữa các vấu: 26mm,vòng đeo tay: da cá sấu Vỏ: màu vàng gold. Mặt sau hoàn toàn có thể hoán đổi ,mặt sau bằng tinh thể sapphire.  Chống nước đến 30m. Đường kính vỏ: 39 mm. Chiều cao: 9,71 mm.', 210000, 'p13.jpg'),
(29, '5589P - GRAND COMPLICATIONS', 'Patek Philippe Geneve X OMEGA', 5, 'Giữa các vấu: 26mm,vòng đeo tay: da cá sấu Vỏ: màu vàng gold. Mặt sau hoàn toàn có thể hoán đổi ,mặt sau bằng tinh thể sapphire.  Chống nước đến 30m. Đường kính vỏ: 39 mm. Chiều cao: 9,71 mm.', 190000, 'p14.jpg'),
(30, '5599P - GRAND COMPLICATIONS', 'Patek Philippe Geneve X OMEGA', 5, 'Giữa các vấu: 26mm,vòng đeo tay: da cá sấu Vỏ: màu vàng gold. Mặt sau hoàn toàn có thể hoán đổi ,mặt sau bằng tinh thể sapphire.  Chống nước đến 30m. Đường kính vỏ: 39 mm. Chiều cao: 9,71 mm.', 210000, 'p15.jpg'),
(126, '5599P -a', 'test', 11, 'test', 12, 'IMG-62934732bc9b70.08869967.jpg'),
(132, 'ass', 'test', 11, 'dadfaf', 12, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `magh` int(11) NOT NULL,
  `matk` int(11) NOT NULL,
  `madh` int(11) NOT NULL,
  `sl` int(11) NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`magh`, `matk`, `madh`, `sl`, `gia`) VALUES
(18, 1, 1, 2, 1200),
(19, 1, 2, 1, 1380),
(20, 0, 1, 1, 1200);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `malh` int(11) NOT NULL,
  `matk` int(11) NOT NULL,
  `vande` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`malh`, `matk`, `vande`) VALUES
(2, 6, 'trang web khá xấu,khó sử dụng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `matk` int(11) NOT NULL,
  `username` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hoten` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SDT` int(11) NOT NULL,
  `usertype` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`matk`, `username`, `password`, `email`, `hoten`, `diachi`, `gioitinh`, `SDT`, `usertype`) VALUES
(1, 'brandzess123', 'wertyui01', 'dangminhhieu123@gmail.com', 'đặng minh hiếu', '123 trường thi', 'nam', 91010101, 'admin'),
(3, 'FuckMeSoHard', '123456', 'sv.19103100078@uneti.edu.vn', 'đặng minh hiếu', '123', 'nam', 987123123, 'admin'),
(6, 'OnlyLoveCanHurtLikeHell', 'wertyui01', 'OnlyLoveCanHurtLikeHell@gmail.com', 'sabo no love', '123 nguyễn kiệm', 'nam', 98182122, 'admin'),
(19, 'admin', '1', 'testing123@gmail.com1', 'đặng minh hiếu1', '123 Nguyễn Kiệm1', 'nam', 9081212, 'admin'),
(20, 'qqq', '123', '123@gmail.com', 'hiếu', '123 a', 'nam', 902123123, 'admin'),
(21, 'test', '1', 'brandzess1s23@gmail.com', 'tesst', '12 dddndnd', 'nam', 988123123, 'user');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dongho`
--
ALTER TABLE `dongho`
  ADD PRIMARY KEY (`madh`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`magh`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`malh`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`matk`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dongho`
--
ALTER TABLE `dongho`
  MODIFY `madh` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `magh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `malh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `matk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
