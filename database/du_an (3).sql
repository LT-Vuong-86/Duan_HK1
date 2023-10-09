-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3308
-- Thời gian đã tạo: Th10 07, 2023 lúc 06:50 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `du_an`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `anh_banner` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_baner` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_sale` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_left` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nd_baner` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `anh_banner`, `name_baner`, `images_sale`, `image_left`, `nd_baner`) VALUES
(1, 'girl1.jpg', 'Đến với chúng tôi hôm nay', 'pricing.png', 'shipping.jpg', '- Shop hỗ trợ đổi size sản phẩm áo thun nữ khi khách hàng giữ nguyên tem mác , sản phẩm chưa giặt và không dơ bẩn, hư hỏng bởi những tác nhân bên ngoài. Quý khách vui lòng chụp toàn bộ bao bì, sản phẩm để shop xác nhận, gửi lại shop chậm nhất trong 07 ngày.'),
(2, 'girl2.jpg', 'Ảnh đầu 2', 'pricing.png', 'shipping.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(3, 'girl3.jpg', 'Ảnh đầu 3', 'pricing.png', 'shipping.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(4, 'gallery4.jpg', 'Ảnh đầu 4', 'pricing.png', 'shipping.jpg', '- Shop hỗ trợ đổi size sản phẩm áo thun nữ khi khách hàng giữ nguyên tem mác , sản phẩm chưa giặt và không dơ bẩn, hư hỏng bởi những tác nhân bên ngoài. Quý khách vui lòng chụp toàn bộ bao bì, sản phẩm để shop xác nhận, gửi lại shop chậm nhất trong 07 ngày.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctdonhang`
--

CREATE TABLE `ctdonhang` (
  `id_donhang` int(11) DEFAULT NULL,
  `id_sanpham` int(11) DEFAULT NULL,
  `id_loaisp` int(11) DEFAULT NULL,
  `loai_sp` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluongsp` int(10) DEFAULT NULL,
  `ngaydat` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghichu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `ctdonhang`
--

INSERT INTO `ctdonhang` (`id_donhang`, `id_sanpham`, `id_loaisp`, `loai_sp`, `soluongsp`, `ngaydat`, `ghichu`, `size`) VALUES
(73, 78, NULL, 'Màu khói xám', 1, '19/09/23', 'daban', 'l'),
(73, 85, NULL, 'Loại 1', 2, '19/09/23', 'daban', 'l'),
(74, 77, NULL, 'Vest 1', 1, '19/09/23', 'daban', 'l'),
(74, 80, NULL, 'Đỏ', 3, '19/09/23', 'daban', 'xl'),
(75, 80, NULL, 'Xám', 1, '19/09/23', 'daban', 'l'),
(75, 78, NULL, 'Màu khói xám', 2, '19/09/23', 'daban', 'm'),
(76, 72, NULL, 'Trắng', 1, '19/09/23', '', 'l'),
(77, 84, NULL, 'Loại 2', 1, '19/09/23', 'daban', 'xl'),
(77, 81, NULL, 'Trắng', 1, '19/09/23', 'daban', 'l'),
(78, 84, 43, 'Loại 2', 1, '22/09/23', 'alot test idloaissp', 'l'),
(78, 78, 17, 'Màu khói xám', 2, '22/09/23', 'alot test idloaissp', 'xxl'),
(79, 78, 18, 'Màu vàng nhạt', 1, '22/09/23', 'test da ban và size', 'm'),
(79, 81, 34, 'Xanh ', 1, '22/09/23', 'test da ban và size', 'xxl'),
(80, 78, 17, 'Màu khói xám', 4, '22/09/23', 'size daban', 'xl'),
(81, 78, 19, 'Trắng', 7, '22/09/23', 'size', 'xl'),
(82, 82, 37, 'Hồng đào', 2, '22/09/23', 'size', 'xxl'),
(83, 77, 15, 'Vest 2', 1, '22/09/23', 'd', 'xxl'),
(84, 96, 76, 'Loại 2', 2, '22/09/23', 'testtttt', 'xl'),
(85, 77, 15, 'Vest 2', 4, '22/09/23', 't', 'xl'),
(86, 85, 47, 'Loại 3', 5, '22/09/23', 'đv', 'xxl'),
(87, 78, 19, 'Trắng', 1, '22/09/23', '', 'xxl'),
(88, 59, 2, 'Loại 2', 1, '22/09/23', '', 'xl'),
(89, 59, 2, 'Loại 2', 1, '22/09/23', '', 'xl'),
(90, 59, 2, 'Loại 2', 1, '22/09/23', '', 'xl'),
(91, 59, 2, 'Loại 2', 1, '22/09/23', '', 'xl'),
(92, 59, 2, 'Loại 2', 1, '22/09/23', '', 'xl'),
(93, 59, 2, 'Loại 2', 1, '22/09/23', '', 'xl'),
(94, 59, 2, 'Loại 2', 1, '22/09/23', '', 'xl'),
(95, 59, 2, 'Loại 2', 4, '22/09/23', '', 'xl');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `danhmuc` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id_danhmuc`, `danhmuc`) VALUES
(1, 'áo nữ'),
(2, 'Quần nữ'),
(3, 'Váy đầm nữ'),
(4, 'Áo nam'),
(5, 'Quần nam'),
(6, 'Vest nam'),
(7, 'Áo trẻ em'),
(8, 'Quần trẻ em'),
(9, 'Bộ quần áo trẻ em'),
(10, 'test');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhsachyeuthich`
--

CREATE TABLE `danhsachyeuthich` (
  `id_taikhoan` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhsachyeuthich`
--

INSERT INTO `danhsachyeuthich` (`id_taikhoan`, `id_sanpham`) VALUES
(27, 83);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id_donhang` int(11) NOT NULL,
  `id_kh` int(11) DEFAULT NULL,
  `tong` int(20) DEFAULT NULL,
  `id_tinhtrang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id_donhang`, `id_kh`, `tong`, `id_tinhtrang`) VALUES
(73, 72, 3860000, 5),
(74, 73, 3085000, 5),
(75, 74, 729000, 4),
(76, 75, 369000, 4),
(77, 76, 962000, 5),
(78, 77, 733000, 1),
(79, 78, 589000, 1),
(80, 79, 480000, 1),
(81, 80, 840000, 1),
(82, 81, 1250000, 1),
(83, 82, 1618000, 1),
(84, 83, 2400000, 1),
(85, 84, 6472000, 1),
(86, 85, 9350000, 1),
(87, 86, 120000, 1),
(88, 87, 349000, 1),
(89, 88, 349000, 1),
(90, 89, 349000, 1),
(91, 90, 349000, 1),
(92, 91, 349000, 1),
(93, 92, 349000, 1),
(94, 93, 349000, 1),
(95, 94, 1396000, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id_taikhoan` int(11) DEFAULT NULL,
  `id_sanpham` int(11) DEFAULT NULL,
  `id_loaisp` int(11) DEFAULT NULL,
  `loai_sp` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `soluong` int(11) DEFAULT NULL,
  `tong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id_kh` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdt` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diachi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id_kh`, `username`, `sdt`, `email`, `diachi`) VALUES
(72, 'vương', '0333630360', 'nguyenhienvuong666@gmail.com', 'Hà n?i'),
(73, 'vương', '0333630360', 'nguyenhienvuong666@gmail.com', 'Hà n?i'),
(74, 'vương', '0333630360', 'nguyenhienvuong666@gmail.com', 'Hà n?i'),
(75, 'vương', '0333630360', 'nguyenhienvuong666@gmail.com', 'Hà n?i'),
(76, 'vương', '0333630360', 'nguyenhienvuong666@gmail.com', 'Hà n?i'),
(77, 'Nguyễn Hiền Hoàng Khôi', '0333630360', 'nguyenhienvuong666@gmail.com', 'li?u châu phú châu ba vì hà  nội'),
(78, 'Nguyễn Công Bảo An', '0333630360', 'telex0399@gmail.com', 'li?u châu phú châu ba vì hà  nội'),
(79, 'Nguyễn Hiền Hoàng Khôi', '0854646754', 'bamisnv@gmail.com', 'Quán Ăn 678 ,Nhơn Nghĩa, Phong Điền, Cần Thơ, Việt Nam'),
(80, 'Đỗ Viết Nguyên', '0854646745', 'telex0399@gmail.com', 'Hà nội'),
(81, 'Đỗ Viết Nguyên', '0333630360', 'telex0399@gmail.com', 'li?u châu phú châu ba vì hà  nội'),
(82, 'Nguyễn Hiền Hoàng Khôi', '0854646766', 'telex0399@gmail.com', 'li?u châu phú châu ba vì hà  nội'),
(83, 'Nguyễn Hiền Hoàng Khôi', '0333630360', '', 'Hà nội'),
(84, 'Đỗ Viết Nguyên', '0854646766', '', 'TP Ha noi'),
(85, 'Nguyễn Tiến Dũng', '0333630360', '', 'li?u châu phú châu ba vì hà  nội'),
(86, 'Nguyễn Hiền Hoàng Khôi', '0854646766', 'nguyenhienvuong666@gmail.com', 'Quán Ăn 678 ,Nhơn Nghĩa, Phong Điền, Cần Thơ, Việt Nam'),
(87, 'Nguyễn Hiền Hoàng Khôi', '0854646733', '', 'li?u châu phú châu ba vì hà  nội'),
(88, 'Nguyễn Hiền Hoàng Khôi', '0854646733', '', 'li?u châu phú châu ba vì hà  nội'),
(89, 'Nguyễn Hiền Hoàng Khôi', '0854646733', '', 'li?u châu phú châu ba vì hà  nội'),
(90, 'Nguyễn Hiền Hoàng Khôi', '0854646733', '', 'li?u châu phú châu ba vì hà  nội'),
(91, 'Nguyễn Hiền Hoàng Khôi', '0854646733', '', 'li?u châu phú châu ba vì hà  nội'),
(92, 'Nguyễn Hiền Hoàng Khôi', '0854646733', '', 'li?u châu phú châu ba vì hà  nội'),
(93, 'Nguyễn Hiền Hoàng Khôi', '0854646733', '', 'li?u châu phú châu ba vì hà  nội'),
(94, 'Nguyễn Hiền Hoàng Khôi', '0333630360', '', 'Hà nội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_sp`
--

CREATE TABLE `loai_sp` (
  `id_loaisp` int(11) NOT NULL,
  `id_sanpham` int(11) DEFAULT NULL,
  `anh_phu` varchar(50) NOT NULL,
  `type_name` varchar(50) DEFAULT NULL,
  `s` int(11) NOT NULL,
  `m` int(11) NOT NULL,
  `l` int(11) NOT NULL,
  `xl` int(11) NOT NULL,
  `xxl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_sp`
--

INSERT INTO `loai_sp` (`id_loaisp`, `id_sanpham`, `anh_phu`, `type_name`, `s`, `m`, `l`, `xl`, `xxl`) VALUES
(1, 59, 'quan_nu (22).jpg', 'Loại 1', 112, 32, 42, 344, 23),
(2, 59, 'quan_nu (23).jpg', 'Loại 2', 22, 33, 43, 224, 12),
(3, 59, 'quan_nu (24).jpg', 'Loại 3', 123, 11, 334, 234, 467),
(4, 72, 'vaybo_nu (35).jpg', 'Trắng', 123, 541, 234, -11, 151),
(5, 72, 'vaybo_nu (36).jpg', 'Xanh biển nhạt', 222, 432, 123, -11, 121),
(6, 72, 'vaybo_nu (33).jpg', 'Xanh ', 124, 45, 457, -11, 231),
(7, 73, 'ao_nu (23).jpg', 'Đen', 123, 123, -5, 142, -4),
(8, 73, 'ao_nu (22).jpg', 'Trắng', 11, 123, -5, 167, -4),
(9, 73, 'ao_nu (21).jpg', 'Xanh than', 112, 134, -5, 452, -4),
(10, 73, 'ao_nu (20).jpg', 'Nâu nhạt', 100, 111, -5, 134, -4),
(11, 73, 'ao_nu (19).jpg', 'Vàng', 213, 142, -5, 123, -4),
(12, 76, 'ao_nu (14).jpg', 'Trắng', 112, 432, 52, 14, 465),
(13, 76, 'ao_nu (12).jpg', 'Trắng', 123, 443, 212, 468, 345),
(14, 77, 'ao_nu (24).jpg', 'Vest 1', 123, 432, 222, 230, -1),
(15, 77, 'ao_nu (26).jpg', 'Vest 2', 1213, 2122, 123, 439, -1),
(16, 78, 'ao_nu (3).jpeg', 'Đen', 111, 109, 111, 100, 110),
(17, 78, 'ao_nu (1).jpeg', 'Màu khói xám', 111, 220, 111, 100, 110),
(18, 78, 'ao_nu (2).jpeg', 'Màu vàng nhạt', 111, 109, 111, 100, 110),
(19, 78, 'ao_nu (3).jpeg', 'Trắng', 111, 109, 111, 100, 110),
(20, 79, 'ao_nu (7).jpg', 'Trắng', 111, 111, 111, -10, 111),
(21, 79, 'ao_nu (8).jpg', 'Nâu sữa', 111, 111, 111, -10, 111),
(22, 79, 'ao_nu (9).jpg', 'Xanh ngọc lục bảo', 111, 111, 111, -10, 111),
(23, 79, 'ao_nu (10).jpg', 'Đen', 111, 111, 111, -10, 111),
(24, 79, 'ao_nu (33).jpg', 'Hồng', 111, 111, 111, -10, 111),
(25, 79, 'ao_nu (34).jpg', 'Xanh rêu', 111, 111, 111, -10, 111),
(26, 80, 'vaybo_nu (1).jpg', 'Xám', 111, 111, 1111, 111, 1111),
(27, 80, 'vaybo_nu (2).jpg', 'Đỏ', 111, 1111, 111, 111, 111),
(28, 80, 'vaybo_nu (3).jpg', 'Trắng', 111, 111, 111, 111, 111),
(29, 80, 'vaybo_nu (4).jpg', 'Đen', 1111, 111, 1111, 113, 1111),
(30, 80, 'vaybo_nu (5).jpg', 'Hồng đào', 111, 111, 111, 111, 111),
(31, 80, 'vaybo_nu (47).jpg', 'Vàng', 111, 111, 1111, 111, 111),
(32, 81, 'vaybo_nu (12).jpg', 'Trắng', 111, 111, 111, 1111, 110),
(33, 81, 'vaybo_nu (8).jpg', 'Đen', 1111, 1111, 111, 1111, 110),
(34, 81, 'vaybo_nu (7).jpg', 'Xanh ', 111, 1111, 111, 111, 1110),
(35, 82, 'vaybo_nu (41).jpg', 'Trắng', 111, 111, 111, 111, -2),
(36, 82, 'vaybo_nu (40).jpg', 'Màu da', 111, 111, 111, 111, -2),
(37, 82, 'vaybo_nu (39).jpg', 'Hồng đào', 111, 1111, 111, 1111, -2),
(38, 82, 'vaybo_nu (38).jpg', 'Đen', 111, 111, 111, 111, -2),
(39, 83, 'vaybo_nu (45).jpg', 'Đen', 111, 111, 111, 1111, 111),
(40, 83, 'vaybo_nu (44).jpg', 'Trắng', 1111, 1111, 1111, 111, 111),
(41, 83, 'vaybo_nu (43).jpg', 'Nâu sáng', 111, 111, 1111, 1111, 111),
(42, 84, 'ao_nu (4).jpg', 'Loại 1', 1111, 1111, 111, 111, 1111),
(43, 84, 'ao_nu (6).jpg', 'Loại 2', 111, 1111, 111, 1111, 111),
(44, 84, 'ao_nu (5).jpg', 'Loại 3', 111, 111, 111, 111, 111),
(45, 85, 'ao_nu (30).jpg', 'Loại 1', 111, 111, 111, 111, 106),
(46, 85, 'ao_nu (32).jpg', 'Loại 2', 111, 111, 111, 111, 106),
(47, 85, 'ao_nu (31).jpg', 'Loại 3', 111, 111, 111, 111, 106),
(48, 86, 'vaybo_nu (30).jpg', 'Loại 1', 1111, 111, 1111, 1111, 1111),
(49, 86, 'vaybo_nu (29).jpg', 'Loại 2', 1111, 111, 111, 1111, 111),
(50, 87, 'vaybo_nu (25).jpg', 'Loại 1', 111, 111, 111, 111, 111),
(51, 87, 'vaybo_nu (26).jpg', 'Loại 2', 1111, 111, 111, 111, 11),
(52, 87, 'vaybo_nu (27).jpg', 'Loại 3', 1111, 111, 111, 111, 111),
(53, 88, 'vaybo_nu (21).jpg', 'Loại 1', 111, 111, -7, 111, 111),
(54, 88, 'vaybo_nu (22).jpg', 'Loại 2', 111, 111, -7, 111, 111),
(55, 89, 'vaybo_nu (17).jpg', 'Loại 1', 1111, 111, 111, 1111, 111),
(56, 89, 'vaybo_nu (16).jpg', 'Loại 2', 111, 1111, 111, 111, 1111),
(57, 89, 'vaybo_nu (20).jpg', 'Loại 3', 111, 1111, 111, 1111, 111),
(58, 90, 'vaybo_nu (50).jpg', 'Loại 1', 111, 11, 111, 1111, 11),
(59, 90, 'vaybo_nu (51).jpg', 'Loại 2', 111, 11, 1111, 111, 111),
(60, 90, 'vaybo_nu (12).jpg', 'Loại 3', 111, 111, 111, 1111, 111),
(61, 90, 'vaybo_nu (49).jpg', 'Loại 4', 111, 111, 111, 1111, 111),
(62, 91, 'quan_nu (11).jpg', 'Loại 1', 111, 1111, 111, -5, 111),
(63, 91, 'quan_nu (10).jpg', 'Loại 2', 111, 111, 1111, -5, 111),
(64, 91, 'quan_nu (9).jpg', 'Loại 3', 111, 1111, 1111, -5, 11),
(65, 92, 'quan_nu (3).jpeg', 'Loại 1', 111, 111, 11, 1111, 111),
(66, 92, 'quan_nu (2).jpeg', 'Loại 2', 111, 111, 111, 111, 111),
(67, 93, 'quan_nu (13).jpg', 'Loại 1', 111, 111, 1111, 1111, 111),
(68, 93, 'quan_nu (14).jpg', 'Loại 2', 111, 1111, 111, 111, 11),
(69, 94, 'vest_nam (13).jpg', 'Loại 1', 111, 111, 111, 111, 111),
(70, 94, 'vest_nam (12).jpg', 'Loại 2', 111, 1111, 111, 111, 111),
(71, 94, 'vest_nam (21).jpg', 'Loại 3', 1111, 111, 1111, 111, 111),
(72, 95, 'vest_nam (22).jpg', 'Loại 1', 1111, 111, 1111, 1111, 1111),
(73, 95, 'vest_nam (20).jpg', 'Loại 2', 111, 111, 111, 111, 111),
(74, 95, 'vest_nam (17).jpg', 'Loại 3', 111, 111, 111, 111, 111),
(75, 96, 'vest_nam (2).jpg', 'Loại 1', 111, 11, 111, 9, 1111),
(76, 96, 'vest_nam (3).jpg', 'Loại 2', 111, 111, 111, 109, 111),
(77, 96, 'vest_nam (7).jpg', 'Loại 3', 111, 111, 111, 9, 111),
(78, 96, 'vest_nam (11).jpg', 'Loại 4', 1111, 111, 111, 109, 111),
(79, 97, 'vest_nam (6).jpg', 'Loại 1', 111, 111, 111, -4, 111),
(80, 97, 'vest_nam (9).jpg', 'Loại 2', 111, 111, 111, -4, 111),
(81, 97, 'vest_nam (19).jpg', 'Loại 3', 111, 111, 111, -4, 111),
(82, 97, 'vest_nam (5).jpg', 'Loại 4', 111, 111, 111, -4, 111),
(83, 111, 'bo_kid (14).jpg', 'Loại 1', 111, 111, 111, 111, 111),
(84, 111, 'bo_kid (1).jpg', 'Loại 2', 111, 111, 1111, 111, 1111),
(85, 112, 'ao_nam (4).png', 'Màu da', 111, 111, 111, 111, 111),
(86, 112, 'ao_nam (5).png', 'Trắng', 111, 111, 111, 111, 111),
(87, 112, 'ao_nam (3).png', 'Xanh than', 111, 111, 111, 111, 111),
(88, 113, 'ao_nam (6).png', 'Trắng', 111, 111, 111, 111, 111),
(89, 113, 'ao_nam (2).png', 'Xanh biển ', 111, 111, 111, 1111, 111),
(90, 113, 'ao_nam (7).png', 'Đen', 111, 111, 111, 111, 111),
(91, 114, 'ao_nam (37).png', 'Xanh công sở', 111, 111, 111, 1111, 1111),
(92, 114, 'ao_nam (38).png', 'Xanh than huyền bí', 111, 111, 111, 111, 111),
(93, 114, 'ao_nam (40).png', 'Trắng thuần khiết', 1111, 111, 1111, 111, 111),
(94, 115, 'ao_nam (29).png', 'Đen', 111, 111, 111, 111, 111),
(95, 115, 'ao_nam (32).png', 'Tím nhạt', 1111, 111, 111, 111, 111),
(96, 115, 'ao_nam (42).png', 'Trắng', 1111, 1111, 111, 1111, 111),
(97, 116, 'ao_nam.png', 'Trắng', 111, 1111, 111, 1111, 1111),
(98, 116, 'ao_nam (44).png', 'Xanh đậm', 111, 111, 111, 1111, 111),
(99, 116, 'ao_nam (19).png', 'Đen', 1111, 111, 1111, 111, 111),
(100, 117, 'quan_nam (33).png', 'Loại 1', 111, 111, 111, 111, 1111),
(101, 117, 'quan_nam (34).png', 'Loại 2', 111, 111, 111, 111, 111),
(102, 118, 'quan_nam (25).png', 'Trắng', 111, 111, 111, 111, 111),
(103, 118, 'quan_nam (26).png', 'Xanh đậm', 111, 111, 111, 1111, 111),
(104, 118, 'quan_nam (27).png', 'Nâu cam', 1111, 111, 111, 11111, 1111),
(105, 119, 'quan_nam (39).png', 'Đen', 111, 111, 111, 111, 111),
(106, 119, 'quan_nam (38).png', 'Xanh ngọc', 111, 111, 1111, 111, 111),
(107, 119, 'quan_nam (36).png', 'Xanh than', 111, 111, 111, 1111, 111),
(108, 119, 'quan_nam (35).png', 'Trắng', 111, 111, 1111, 111, 111),
(109, 120, 'quan_nam (10).png', 'Xanh rêu', 111, 111, 111, 1111, 111),
(110, 120, 'quan_nam (9).png', 'Nâu đất', 111, 111, 111, 111, 1111),
(111, 120, 'quan_nam (8).png', 'Trắng sữa', 111, 111, 111, 111, 111),
(112, 121, 'bo_kid (22).jpg', 'Loại 1', 111, 111, 1111, 1111, 111),
(113, 121, 'bo_kid (34).jpg', 'Loại 2', 111, 1111, 111, 111, 111),
(114, 121, 'bo_kid (21).jpg', 'Loại 3', 111, 111, 111, 111, 111),
(115, 122, '1.1.jpg', 'xanh', 1234, 2345, 234, 123, 2345),
(116, 122, '1.2.jpg', 'sám', 3, 45, 345, 34, 345),
(117, 122, '1.3jpg.jpg', 'dài', 234, 345, 345, 345, 345),
(118, 122, '1.4.jpg', 'hồng', 5423, 34, 23, 34, 345);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rate_sp`
--

CREATE TABLE `rate_sp` (
  `id_rate` int(11) NOT NULL,
  `id_sanpham` int(11) DEFAULT NULL,
  `rate_rating` int(1) DEFAULT NULL,
  `rate_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_taikhoan` int(11) NOT NULL,
  `date_rate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `rate_sp`
--

INSERT INTO `rate_sp` (`id_rate`, `id_sanpham`, `rate_rating`, `rate_content`, `id_taikhoan`, `date_rate`) VALUES
(1, 81, 5, 'Hàng quá tuyệt vời', 17, '13/09/23'),
(2, 87, 1, 'Hàng lỗi', 17, '13/09/23'),
(3, 59, 5, 'Quá ổn', 17, '13/09/23'),
(4, 89, 3, 'Bình thường', 23, '14/09/23'),
(5, 76, 4, 'Tốt', 26, '14/09/23'),
(6, 76, 4, 'tốt', 27, '14/09/23'),
(7, 77, 4, 'ok', 27, '19/09/23'),
(8, 88, 4, 'ok', 27, '19/09/23'),
(9, 89, 4, 'ok', 27, '19/09/23'),
(10, 93, 2, 'fake', 27, '19/09/23'),
(11, 76, 4, 'ok', 27, '19/09/23'),
(12, 72, 2, 'ok', 27, '19/09/23'),
(13, 72, 4, 'ôk', 27, '19/09/23'),
(14, 93, 4, '', 27, '19/09/23'),
(15, 84, 5, 'đẹp', 27, '19/09/23'),
(16, 78, 4, '', 27, '19/09/23'),
(17, 85, 4, '', 27, '19/09/23'),
(18, 77, 3, '', 27, '19/09/23'),
(19, 80, 4, 'ok', 27, '19/09/23'),
(20, 80, 4, 'ok', 27, '19/09/23'),
(21, 78, 1, 'đểu', 27, '19/09/23'),
(22, 84, 4, 'ok', 27, '19/09/23'),
(23, 81, 1, 'đểu\r\n', 27, '19/09/23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anh_chinh` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gia` int(11) DEFAULT NULL,
  `tonkho` int(11) DEFAULT NULL,
  `xuatxu` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_danhmuc` int(11) DEFAULT NULL,
  `nd_sp` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaytao` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nguoitao` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `daban` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `tensanpham`, `anh_chinh`, `gia`, `tonkho`, `xuatxu`, `id_danhmuc`, `nd_sp`, `ngaytao`, `nguoitao`, `daban`) VALUES
(59, 'Quần ống loe xẻ gấu', 'quan_nu (25).jpg', 349000, 1494, 'H?n Qu?c', 2, 'SHOP CAM KẾT\r\n- Đổi/ trả nếu  sản phẩm không đúng với hình ảnh và video đã đăng\r\n- Đổi/trả nếu sản phẩm bị lỗi, hỏng do bât cứ lý do gi trước khi đến tay khách hàng ( kể cả lỗi do đơn vị vận chuyển)\r\n- Tất cả các đơn hàng của shop đều được kiể tra cả về số lượng và chất lượng trước khi gửi đi.\r\n\r\nLƯU Ý QUAN TRỌNG: Quý khách hàng hãy quay video khi bóc hàng để làm căn cứ giải quyết khiếu nại nếu hàng bị thiếu, hỏng đặc biệt với các gói hàng bị rách, móp méo.\r\n\r\nQUYỀN LỢI CỦA KHÁCH HÀNG \r\n- Chính sách bao đổi trả hàng miễn phí khi sản phẩm kém chất lượng và không giống hình, nhầm số lượng và loại hàng. \r\n\r\nMÔ TẢ SẢN PHẨM\r\n- Quần jean nữ được làm bằng chất liệu bò jeans co dãn 4 chiều đàn hồi cực tốt mặc cực kỳ dễ chịu \r\n- Quần ống loe có 3 màu đen, xanh đậm, xanh nhạt\r\n- Quần bò nữ có 4 size S < 44kg, M < 48kg, L < 53kg\r\n- Quần ống loe lưng cao được thiết kế form dài rách gấu mặc siêu hách dáng\r\n- Quần jean hàng chuẩn đẹp, co giãn tốt, đàn hồi cao, không bai nhão, cắn chỉ, xùi vải. \r\nTên và địa chỉ của tổ chức, cá nhân chịu trách nhiệm về hàng hóa : thoitrangthoanguyen81\r\nXuất xứ hàng hóa: Tại Việt Nam\r\nĐịa chỉ: Dân Hoà, Thanh Oai, Hà Nội', '23/09/08', 'TrisPhan123', 1),
(72, 'Đầm Body Cánh Tiên', 'vaybo_nu (33).jpg', 369000, 2603, 'Philippin', 3, 'SHOP CAM KẾT\r\n- Đổi/ trả nếu  sản phẩm không đúng với hình ảnh và video đã đăng\r\n- Đổi/trả nếu sản phẩm bị lỗi, hỏng do bât cứ lý do gi trước khi đến tay khách hàng ( kể cả lỗi do đơn vị vận chuyển)\r\n- Tất cả các đơn hàng của shop đều được kiể tra cả về số lượng và chất lượng trước khi gửi đi.\r\n\r\nLƯU Ý QUAN TRỌNG: Quý khách hàng hãy quay video khi bóc hàng để làm căn cứ giải quyết khiếu nại nếu hàng bị thiếu, hỏng đặc biệt với các gói hàng bị rách, móp méo.\r\n\r\nQUYỀN LỢI CỦA KHÁCH HÀNG \r\n- Chính sách bao đổi trả hàng miễn phí khi sản phẩm kém chất lượng và không giống hình, nhầm số lượng và loại hàng. \r\n\r\nMÔ TẢ SẢN PHẨM\r\n- Quần jean nữ được làm bằng chất liệu bò jeans co dãn 4 chiều đàn hồi cực tốt mặc cực kỳ dễ chịu \r\n- Quần ống loe có 3 màu đen, xanh đậm, xanh nhạt\r\n- Quần bò nữ có 4 size S < 44kg, M < 48kg, L < 53kg\r\n- Quần ống loe lưng cao được thiết kế form dài rách gấu mặc siêu hách dáng\r\n- Quần jean hàng chuẩn đẹp, co giãn tốt, đàn hồi cao, không bai nhão, cắn chỉ, xùi vải. \r\nTên và địa chỉ của tổ chức, cá nhân chịu trách nhiệm về hàng hóa : thoitrangthoanguyen81\r\nXuất xứ hàng hóa: Tại Việt Nam\r\nĐịa chỉ: Dân Hoà, Thanh Oai, Hà Nội', '23/09/08', 'TrisPhan123', 2),
(73, 'Áo 2 dây nữ cổ tim dọc gân trơn', 'ao_nu (19).jpg', 179000, 3456, 'H?n Qu?c', 1, 'SHOP CAM KẾT\r\n- Đổi/ trả nếu  sản phẩm không đúng với hình ảnh và video đã đăng\r\n- Đổi/trả nếu sản phẩm bị lỗi, hỏng do bât cứ lý do gi trước khi đến tay khách hàng ( kể cả lỗi do đơn vị vận chuyển)\r\n- Tất cả các đơn hàng của shop đều được kiể tra cả về số lượng và chất lượng trước khi gửi đi.\r\n\r\nLƯU Ý QUAN TRỌNG: Quý khách hàng hãy quay video khi bóc hàng để làm căn cứ giải quyết khiếu nại nếu hàng bị thiếu, hỏng đặc biệt với các gói hàng bị rách, móp méo.\r\n\r\nQUYỀN LỢI CỦA KHÁCH HÀNG \r\n- Chính sách bao đổi trả hàng miễn phí khi sản phẩm kém chất lượng và không giống hình, nhầm số lượng và loại hàng. \r\n\r\nMÔ TẢ SẢN PHẨM\r\n- Quần jean nữ được làm bằng chất liệu bò jeans co dãn 4 chiều đàn hồi cực tốt mặc cực kỳ dễ chịu \r\n- Quần ống loe có 3 màu đen, xanh đậm, xanh nhạt\r\n- Quần bò nữ có 4 size S < 44kg, M < 48kg, L < 53kg\r\n- Quần ống loe lưng cao được thiết kế form dài rách gấu mặc siêu hách dáng\r\n- Quần jean hàng chuẩn đẹp, co giãn tốt, đàn hồi cao, không bai nhão, cắn chỉ, xùi vải. \r\nTên và địa chỉ của tổ chức, cá nhân chịu trách nhiệm về hàng hóa : thoitrangthoanguyen81\r\nXuất xứ hàng hóa: Tại Việt Nam\r\nĐịa chỉ: Dân Hoà, Thanh Oai, Hà Nội', '23/09/08', 'TrisPhan123', 0),
(76, 'Áo ren trắng tay ngắn dáng rộng', 'ao_nu (13).jpg', 211300, 1582, 'H?n Qu?c', 1, 'SHOP CAM KẾT\r\n- Đổi/ trả nếu  sản phẩm không đúng với hình ảnh và video đã đăng\r\n- Đổi/trả nếu sản phẩm bị lỗi, hỏng do bât cứ lý do gi trước khi đến tay khách hàng ( kể cả lỗi do đơn vị vận chuyển)\r\n- Tất cả các đơn hàng của shop đều được kiể tra cả về số lượng và chất lượng trước khi gửi đi.\r\n\r\nLƯU Ý QUAN TRỌNG: Quý khách hàng hãy quay video khi bóc hàng để làm căn cứ giải quyết khiếu nại nếu hàng bị thiếu, hỏng đặc biệt với các gói hàng bị rách, móp méo.\r\n\r\nQUYỀN LỢI CỦA KHÁCH HÀNG \r\n- Chính sách bao đổi trả hàng miễn phí khi sản phẩm kém chất lượng và không giống hình, nhầm số lượng và loại hàng. \r\n\r\nMÔ TẢ SẢN PHẨM\r\n- Quần jean nữ được làm bằng chất liệu bò jeans co dãn 4 chiều đàn hồi cực tốt mặc cực kỳ dễ chịu \r\n- Quần ống loe có 3 màu đen, xanh đậm, xanh nhạt\r\n- Quần bò nữ có 4 size S < 44kg, M < 48kg, L < 53kg\r\n- Quần ống loe lưng cao được thiết kế form dài rách gấu mặc siêu hách dáng\r\n- Quần jean hàng chuẩn đẹp, co giãn tốt, đàn hồi cao, không bai nhão, cắn chỉ, xùi vải. \r\nTên và địa chỉ của tổ chức, cá nhân chịu trách nhiệm về hàng hóa : thoitrangthoanguyen81\r\nXuất xứ hàng hóa: Tại Việt Nam\r\nĐịa chỉ: Dân Hoà, Thanh Oai, Hà Nội', '23/09/10', 'TrisPhan123', 2),
(77, 'Áo vest vải tuýt cổ tròn', 'ao_nu (25).jpg', 1618000, 4538, 'H?n Qu?c', 1, '1. Thông tin sản phẩm: Quần jean ống loe cạp cao cắt gấu co dãn hàng cao cấp\r\n- Size: S-M-L-XL\r\n- Chất liệu: Jean Co giãn\r\nKho buôn: Thanh Oai Hà Nội    ĐT/Zalo: 036.8604.968\r\n2. Thông số sản phẩm: Quần jean bò baggy nữ cạp cao\r\n-	Size S: Vòng eo 58-63cm, Vòng mông 86 - 90 cm, Cân nặng 40 - 45 kg, Chiều cao 150 - 160cm.\r\n-	Size M: Vòng eo 63-68cm, Vòng mông 90 - 94 cm, Cân nặng 45-50kg, Chiều cao 156 - 165 cm. \r\n-	Size L: Vòng eo 68-72cm, Vòng mông 94 - 98 cm. Cân nặng 50-54kg, Chiều cao 155- 165cm.\r\n- Size Xl: Vòng eo 72-76 cm. Vòng mông 96-100cm. Cân nặng 55-58kg Chiều cao 1m55-165cm.\r\n3. Hướng dẫn sử dụng quần jean\r\n Sử dụng đi học, đi làm, đi chơi,... \r\n-- Giặt tay hoặc giặt máy ở nhiệt độ thường \r\n-- Không ngâm chung với chất tẩy rửa \r\n-- Lật mặt trái của quần khi phơi để tránh tình trạng phai, bạc màu\r\nLưu ý: \r\nKích thước sản phẩm có thể sai lệch - + 2cm. Sản phẩm khi chụp dưới điều kiện sáng/ tối , xem bằng các loại màn hình khác nhau hay lô hàng khác nhau màu sắc có thể đậm nhạt một chút là bình thường các bạn nhé!\r\nCác bạn vui lòng xem kỹ thông tin sản phẩm ở hình ảnh để chọn size cho phù hợp. Nếu bạn thấy khó khăn trong việc chọn size hay có câu hỏi bất kỳ, hãy liên hệ cho chúng tôi qua công cụ chat\r\n4. Chế độ hỗ trợ khách hàng\r\n- Cam kết 100% đổi Size nếu sản phẩm khách đặt không vừa (hỗ trợ đổi size trong vòng 7 ngày)\r\n- Shop hỗ trợ đổi sang sản phẩm khác cùng giá hoặc cao hơn nếu khách có nhu cầu đổi mẫu khác.\r\n- Nếu có bất kì khiếu nại cần Shop hỗ trợ về sản phẩm, khi mở sản phẩm các Chị vui lòng quay lại video quá trình mở sản phẩm để được đảm bảo 100% đổi lại sản phẩm mới nếu Shop giao bị lỗi.\r\n- Các Chị nhận được sản phẩm, vui lòng đánh giá giúp Shop để hưởng thêm nhiều ưu đãi hơn nhé.', '23/09/10', 'TrisPhan123', 10),
(78, 'Áo 2 dây lụa cổ tim trắng', 'ao_nu (3).jpeg', 120000, 1775, 'Ph?p', 1, '1. Thông tin sản phẩm: Quần jean ống loe cạp cao cắt gấu co dãn hàng cao cấp\r\n- Size: S-M-L-XL\r\n- Chất liệu: Jean Co giãn\r\nKho buôn: Thanh Oai Hà Nội    ĐT/Zalo: 036.8604.968\r\n2. Thông số sản phẩm: Quần jean bò baggy nữ cạp cao\r\n-	Size S: Vòng eo 58-63cm, Vòng mông 86 - 90 cm, Cân nặng 40 - 45 kg, Chiều cao 150 - 160cm.\r\n-	Size M: Vòng eo 63-68cm, Vòng mông 90 - 94 cm, Cân nặng 45-50kg, Chiều cao 156 - 165 cm. \r\n-	Size L: Vòng eo 68-72cm, Vòng mông 94 - 98 cm. Cân nặng 50-54kg, Chiều cao 155- 165cm.\r\n- Size Xl: Vòng eo 72-76 cm. Vòng mông 96-100cm. Cân nặng 55-58kg Chiều cao 1m55-165cm.\r\n3. Hướng dẫn sử dụng quần jean\r\n Sử dụng đi học, đi làm, đi chơi,... \r\n-- Giặt tay hoặc giặt máy ở nhiệt độ thường \r\n-- Không ngâm chung với chất tẩy rửa \r\n-- Lật mặt trái của quần khi phơi để tránh tình trạng phai, bạc màu\r\nLưu ý: \r\nKích thước sản phẩm có thể sai lệch - + 2cm. Sản phẩm khi chụp dưới điều kiện sáng/ tối , xem bằng các loại màn hình khác nhau hay lô hàng khác nhau màu sắc có thể đậm nhạt một chút là bình thường các bạn nhé!\r\nCác bạn vui lòng xem kỹ thông tin sản phẩm ở hình ảnh để chọn size cho phù hợp. Nếu bạn thấy khó khăn trong việc chọn size hay có câu hỏi bất kỳ, hãy liên hệ cho chúng tôi qua công cụ chat\r\n4. Chế độ hỗ trợ khách hàng\r\n- Cam kết 100% đổi Size nếu sản phẩm khách đặt không vừa (hỗ trợ đổi size trong vòng 7 ngày)\r\n- Shop hỗ trợ đổi sang sản phẩm khác cùng giá hoặc cao hơn nếu khách có nhu cầu đổi mẫu khác.\r\n- Nếu có bất kì khiếu nại cần Shop hỗ trợ về sản phẩm, khi mở sản phẩm các Chị vui lòng quay lại video quá trình mở sản phẩm để được đảm bảo 100% đổi lại sản phẩm mới nếu Shop giao bị lỗi.\r\n- Các Chị nhận được sản phẩm, vui lòng đánh giá giúp Shop để hưởng thêm nhiều ưu đãi hơn nhé.', '23/09/10', 'TrisPhan123', 23),
(79, 'Áo thun rút eo', 'ao_nu (11).jpg', 249000, 34567, 'H?n Qu?c', 1, '1. Thông tin sản phẩm: Quần jean ống loe cạp cao cắt gấu co dãn hàng cao cấp\r\n- Size: S-M-L-XL\r\n- Chất liệu: Jean Co giãn\r\nKho buôn: Thanh Oai Hà Nội    ĐT/Zalo: 036.8604.968\r\n2. Thông số sản phẩm: Quần jean bò baggy nữ cạp cao\r\n-	Size S: Vòng eo 58-63cm, Vòng mông 86 - 90 cm, Cân nặng 40 - 45 kg, Chiều cao 150 - 160cm.\r\n-	Size M: Vòng eo 63-68cm, Vòng mông 90 - 94 cm, Cân nặng 45-50kg, Chiều cao 156 - 165 cm. \r\n-	Size L: Vòng eo 68-72cm, Vòng mông 94 - 98 cm. Cân nặng 50-54kg, Chiều cao 155- 165cm.\r\n- Size Xl: Vòng eo 72-76 cm. Vòng mông 96-100cm. Cân nặng 55-58kg Chiều cao 1m55-165cm.\r\n3. Hướng dẫn sử dụng quần jean\r\n Sử dụng đi học, đi làm, đi chơi,... \r\n-- Giặt tay hoặc giặt máy ở nhiệt độ thường \r\n-- Không ngâm chung với chất tẩy rửa \r\n-- Lật mặt trái của quần khi phơi để tránh tình trạng phai, bạc màu\r\nLưu ý: \r\nKích thước sản phẩm có thể sai lệch - + 2cm. Sản phẩm khi chụp dưới điều kiện sáng/ tối , xem bằng các loại màn hình khác nhau hay lô hàng khác nhau màu sắc có thể đậm nhạt một chút là bình thường các bạn nhé!\r\nCác bạn vui lòng xem kỹ thông tin sản phẩm ở hình ảnh để chọn size cho phù hợp. Nếu bạn thấy khó khăn trong việc chọn size hay có câu hỏi bất kỳ, hãy liên hệ cho chúng tôi qua công cụ chat\r\n4. Chế độ hỗ trợ khách hàng\r\n- Cam kết 100% đổi Size nếu sản phẩm khách đặt không vừa (hỗ trợ đổi size trong vòng 7 ngày)\r\n- Shop hỗ trợ đổi sang sản phẩm khác cùng giá hoặc cao hơn nếu khách có nhu cầu đổi mẫu khác.\r\n- Nếu có bất kì khiếu nại cần Shop hỗ trợ về sản phẩm, khi mở sản phẩm các Chị vui lòng quay lại video quá trình mở sản phẩm để được đảm bảo 100% đổi lại sản phẩm mới nếu Shop giao bị lỗi.\r\n- Các Chị nhận được sản phẩm, vui lòng đánh giá giúp Shop để hưởng thêm nhiều ưu đãi hơn nhé.', '23/09/10', 'TrisPhan123', 0),
(80, 'Đàm Body Nơ Lưng', 'vaybo_nu (6).jpg', 489000, 7776, 'Ph?p', 3, '1. Thông tin sản phẩm: Quần jean ống loe cạp cao cắt gấu co dãn hàng cao cấp\r\n- Size: S-M-L-XL\r\n- Chất liệu: Jean Co giãn\r\nKho buôn: Thanh Oai Hà Nội    ĐT/Zalo: 036.8604.968\r\n2. Thông số sản phẩm: Quần jean bò baggy nữ cạp cao\r\n-	Size S: Vòng eo 58-63cm, Vòng mông 86 - 90 cm, Cân nặng 40 - 45 kg, Chiều cao 150 - 160cm.\r\n-	Size M: Vòng eo 63-68cm, Vòng mông 90 - 94 cm, Cân nặng 45-50kg, Chiều cao 156 - 165 cm. \r\n-	Size L: Vòng eo 68-72cm, Vòng mông 94 - 98 cm. Cân nặng 50-54kg, Chiều cao 155- 165cm.\r\n- Size Xl: Vòng eo 72-76 cm. Vòng mông 96-100cm. Cân nặng 55-58kg Chiều cao 1m55-165cm.\r\n3. Hướng dẫn sử dụng quần jean\r\n Sử dụng đi học, đi làm, đi chơi,... \r\n-- Giặt tay hoặc giặt máy ở nhiệt độ thường \r\n-- Không ngâm chung với chất tẩy rửa \r\n-- Lật mặt trái của quần khi phơi để tránh tình trạng phai, bạc màu\r\nLưu ý: \r\nKích thước sản phẩm có thể sai lệch - + 2cm. Sản phẩm khi chụp dưới điều kiện sáng/ tối , xem bằng các loại màn hình khác nhau hay lô hàng khác nhau màu sắc có thể đậm nhạt một chút là bình thường các bạn nhé!\r\nCác bạn vui lòng xem kỹ thông tin sản phẩm ở hình ảnh để chọn size cho phù hợp. Nếu bạn thấy khó khăn trong việc chọn size hay có câu hỏi bất kỳ, hãy liên hệ cho chúng tôi qua công cụ chat\r\n4. Chế độ hỗ trợ khách hàng\r\n- Cam kết 100% đổi Size nếu sản phẩm khách đặt không vừa (hỗ trợ đổi size trong vòng 7 ngày)\r\n- Shop hỗ trợ đổi sang sản phẩm khác cùng giá hoặc cao hơn nếu khách có nhu cầu đổi mẫu khác.\r\n- Nếu có bất kì khiếu nại cần Shop hỗ trợ về sản phẩm, khi mở sản phẩm các Chị vui lòng quay lại video quá trình mở sản phẩm để được đảm bảo 100% đổi lại sản phẩm mới nếu Shop giao bị lỗi.\r\n- Các Chị nhận được sản phẩm, vui lòng đánh giá giúp Shop để hưởng thêm nhiều ưu đãi hơn nhé.', '23/09/10', 'TrisPhan123', 6),
(81, 'Đầm xoè tay phong cách cổ điển', 'vaybo_nu (10).jpg', 469000, 6097, 'H?n Qu?c', 3, '1. Thông tin sản phẩm: Quần jean ống loe cạp cao cắt gấu co dãn hàng cao cấp\r\n- Size: S-M-L-XL\r\n- Chất liệu: Jean Co giãn\r\nKho buôn: Thanh Oai Hà Nội    ĐT/Zalo: 036.8604.968\r\n2. Thông số sản phẩm: Quần jean bò baggy nữ cạp cao\r\n-	Size S: Vòng eo 58-63cm, Vòng mông 86 - 90 cm, Cân nặng 40 - 45 kg, Chiều cao 150 - 160cm.\r\n-	Size M: Vòng eo 63-68cm, Vòng mông 90 - 94 cm, Cân nặng 45-50kg, Chiều cao 156 - 165 cm. \r\n-	Size L: Vòng eo 68-72cm, Vòng mông 94 - 98 cm. Cân nặng 50-54kg, Chiều cao 155- 165cm.\r\n- Size Xl: Vòng eo 72-76 cm. Vòng mông 96-100cm. Cân nặng 55-58kg Chiều cao 1m55-165cm.\r\n3. Hướng dẫn sử dụng quần jean\r\n Sử dụng đi học, đi làm, đi chơi,... \r\n-- Giặt tay hoặc giặt máy ở nhiệt độ thường \r\n-- Không ngâm chung với chất tẩy rửa \r\n-- Lật mặt trái của quần khi phơi để tránh tình trạng phai, bạc màu\r\nLưu ý: \r\nKích thước sản phẩm có thể sai lệch - + 2cm. Sản phẩm khi chụp dưới điều kiện sáng/ tối , xem bằng các loại màn hình khác nhau hay lô hàng khác nhau màu sắc có thể đậm nhạt một chút là bình thường các bạn nhé!\r\nCác bạn vui lòng xem kỹ thông tin sản phẩm ở hình ảnh để chọn size cho phù hợp. Nếu bạn thấy khó khăn trong việc chọn size hay có câu hỏi bất kỳ, hãy liên hệ cho chúng tôi qua công cụ chat\r\n4. Chế độ hỗ trợ khách hàng\r\n- Cam kết 100% đổi Size nếu sản phẩm khách đặt không vừa (hỗ trợ đổi size trong vòng 7 ngày)\r\n- Shop hỗ trợ đổi sang sản phẩm khác cùng giá hoặc cao hơn nếu khách có nhu cầu đổi mẫu khác.\r\n- Nếu có bất kì khiếu nại cần Shop hỗ trợ về sản phẩm, khi mở sản phẩm các Chị vui lòng quay lại video quá trình mở sản phẩm để được đảm bảo 100% đổi lại sản phẩm mới nếu Shop giao bị lỗi.\r\n- Các Chị nhận được sản phẩm, vui lòng đánh giá giúp Shop để hưởng thêm nhiều ưu đãi hơn nhé.', '23/09/10', 'TrisPhan123', 2),
(82, 'Đầm xoè nhún ngực', 'vaybo_nu (42).jpg', 625000, 1234, 'Philippin', 3, '1. Thông tin sản phẩm: Quần jean ống loe cạp cao cắt gấu co dãn hàng cao cấp\r\n- Size: S-M-L-XL\r\n- Chất liệu: Jean Co giãn\r\nKho buôn: Thanh Oai Hà Nội    ĐT/Zalo: 036.8604.968\r\n2. Thông số sản phẩm: Quần jean bò baggy nữ cạp cao\r\n-	Size S: Vòng eo 58-63cm, Vòng mông 86 - 90 cm, Cân nặng 40 - 45 kg, Chiều cao 150 - 160cm.\r\n-	Size M: Vòng eo 63-68cm, Vòng mông 90 - 94 cm, Cân nặng 45-50kg, Chiều cao 156 - 165 cm. \r\n-	Size L: Vòng eo 68-72cm, Vòng mông 94 - 98 cm. Cân nặng 50-54kg, Chiều cao 155- 165cm.\r\n- Size Xl: Vòng eo 72-76 cm. Vòng mông 96-100cm. Cân nặng 55-58kg Chiều cao 1m55-165cm.\r\n3. Hướng dẫn sử dụng quần jean\r\n Sử dụng đi học, đi làm, đi chơi,... \r\n-- Giặt tay hoặc giặt máy ở nhiệt độ thường \r\n-- Không ngâm chung với chất tẩy rửa \r\n-- Lật mặt trái của quần khi phơi để tránh tình trạng phai, bạc màu\r\nLưu ý: \r\nKích thước sản phẩm có thể sai lệch - + 2cm. Sản phẩm khi chụp dưới điều kiện sáng/ tối , xem bằng các loại màn hình khác nhau hay lô hàng khác nhau màu sắc có thể đậm nhạt một chút là bình thường các bạn nhé!\r\nCác bạn vui lòng xem kỹ thông tin sản phẩm ở hình ảnh để chọn size cho phù hợp. Nếu bạn thấy khó khăn trong việc chọn size hay có câu hỏi bất kỳ, hãy liên hệ cho chúng tôi qua công cụ chat\r\n4. Chế độ hỗ trợ khách hàng\r\n- Cam kết 100% đổi Size nếu sản phẩm khách đặt không vừa (hỗ trợ đổi size trong vòng 7 ngày)\r\n- Shop hỗ trợ đổi sang sản phẩm khác cùng giá hoặc cao hơn nếu khách có nhu cầu đổi mẫu khác.\r\n- Nếu có bất kì khiếu nại cần Shop hỗ trợ về sản phẩm, khi mở sản phẩm các Chị vui lòng quay lại video quá trình mở sản phẩm để được đảm bảo 100% đổi lại sản phẩm mới nếu Shop giao bị lỗi.\r\n- Các Chị nhận được sản phẩm, vui lòng đánh giá giúp Shop để hưởng thêm nhiều ưu đãi hơn nhé.', '23/09/10', 'TrisPhan123', 7),
(83, 'Đầm 2 dây dáng xoè', 'vaybo_nu (46).jpg', 590000, 6099, 'H?n Qu?c', 3, '1. Thông tin sản phẩm: Quần jean bò ống đứng nữ cạp cao\r\n- Size: S-M-L-XL\r\n- Chất liệu: Jean co giãn 4 chiều\r\n2. Thông số sản phẩm: Quần jean bò ống đứng nữ cạp cao\r\n- Size S: Vòng eo 56-61cm, Vòng mông 83 - 87 cm, Cân nặng 38 - 43 kg, Chiều cao 150 - 160cm.\r\n- Size M: Vòng eo 62-66cm, Vòng mông 87 - 91 cm, Cân nặng 43-48kg, Chiều cao 156 - 165 cm. \r\n- Size L: Vòng eo 66-70cm, Vòng mông 91 - 95 cm. Cân nặng 50-53kg, Chiều cao 155- 165cm.\r\n- Size Xl: Vòng eo 70-74 cm. Vòng mông 95-97cm. Cân nặng 53-56kg. Chiều cao 1m55-165cm\r\n3. Hướng dẫn sử dụng quần jean\r\n Sử dụng đi học, đi làm, đi chơi,... \r\n-- Giặt tay hoặc giặt máy ở nhiệt độ thường \r\n-- Không ngâm chung với chất tẩy rửa \r\n-- Lật mặt trái của quần khi phơi để tránh tình trạng phai, bạc màu\r\nLưu ý: \r\nKích thước sản phẩm có thể sai lệch - + 2cm. Sản phẩm khi chụp dưới điều kiện sáng/ tối , xem bằng các loại màn hình khác nhau hay lô hàng khác nhau màu sắc có thể đậm nhạt một chút là bình thường các bạn nhé!\r\nCác bạn vui lòng xem kỹ thông tin sản phẩm ở hình ảnh để chọn size cho phù hợp. Nếu bạn thấy khó khăn trong việc chọn size hay có câu hỏi bất kỳ, hãy liên hệ cho chúng tôi qua công cụ chat\r\n4. Chế độ hỗ trợ khách hàng\r\n- Cam kết 100% đổi Size nếu sản phẩm khách đặt không vừa (hỗ trợ đổi size trong vòng 7 ngày)\r\n- Shop hỗ trợ đổi sang sản phẩm khác cùng giá hoặc cao hơn nếu khách có nhu cầu đổi mẫu khác.\r\n- Nếu có bất kì khiếu nại cần Shop hỗ trợ về sản phẩm, khi mở sản phẩm các Chị vui lòng quay lại video quá trình mở sản phẩm để được đảm bảo 100% đổi lại sản phẩm mới nếu Shop giao bị lỗi.\r\n- Các Chị nhận được sản phẩm, vui lòng đánh giá giúp Shop để hưởng thêm nhiều ưu đãi hơn nhé.', '23/09/10', 'TrisPhan123', 2),
(84, 'Áo lụa phối line trắng', 'ao_nu (5).jpg', 493000, 345677, 'H?n Qu?c', 1, 'Quần jeans nữ ống đứng cạp cao túi nhọn 2 màu đậm nhạt co giãn kiểu dáng Hàn Quốc\r\n- Đã Kèm Ảnh thật và Video Thật ở Cuối\r\n HƯỚNG DẪN BẢO QUẢN VÀ SỬ DỤNG \r\n- Giặt riêng sản phẩm với lần giặt đầu tiên. \r\n- Không sử dụng bột giặt có chất tẩy nồng độ cao. \r\n- Khi phơi các bạn nên lộn ngược lại để màu của sản phẩm được bền lâu.\r\n\r\n CHÍNH SÁCH ĐỔI TRẢ: \r\n- Đổi trả trong vòng 3 ngày sau khi nhận hàng \r\n- Sản phẩm đổi trả phải còn nguyên tem, nhãn, bao bì, chưa qua sử dụng giặt tẩy. Nguyên vẹn như ban đầu shop giao\r\n- Đổi trả miễn phí 100% nếu có lỗi từ nhà sản xuất hoặc do shop gửi nhầm size, nhầm mẫu\r\n- Hỗ trợ đổi size (nếu chật)\r\n', '23/09/10', 'TrisPhan123', 3),
(85, 'Áo croptop màu đen trẻ trung', 'ao_nu (30).jpg', 1870000, 1110, 'Ph?p', 1, 'Quần jeans nữ ống đứng cạp cao túi nhọn 2 màu đậm nhạt co giãn kiểu dáng Hàn Quốc\r\n- Đã Kèm Ảnh thật và Video Thật ở Cuối\r\n HƯỚNG DẪN BẢO QUẢN VÀ SỬ DỤNG \r\n- Giặt riêng sản phẩm với lần giặt đầu tiên. \r\n- Không sử dụng bột giặt có chất tẩy nồng độ cao. \r\n- Khi phơi các bạn nên lộn ngược lại để màu của sản phẩm được bền lâu.\r\n\r\n CHÍNH SÁCH ĐỔI TRẢ: \r\n- Đổi trả trong vòng 3 ngày sau khi nhận hàng \r\n- Sản phẩm đổi trả phải còn nguyên tem, nhãn, bao bì, chưa qua sử dụng giặt tẩy. Nguyên vẹn như ban đầu shop giao\r\n- Đổi trả miễn phí 100% nếu có lỗi từ nhà sản xuất hoặc do shop gửi nhầm size, nhầm mẫu\r\n- Hỗ trợ đổi size (nếu chật)\r\n', '23/09/10', 'TrisPhan123', 11),
(86, 'Đầm xoè đính đá', 'vaybo_nu (32).jpg', 549000, 2555, 'H?n ', 3, 'Quần jeans nữ ống đứng cạp cao túi nhọn 2 màu đậm nhạt co giãn kiểu dáng Hàn Quốc\r\n- Đã Kèm Ảnh thật và Video Thật ở Cuối\r\n HƯỚNG DẪN BẢO QUẢN VÀ SỬ DỤNG \r\n- Giặt riêng sản phẩm với lần giặt đầu tiên. \r\n- Không sử dụng bột giặt có chất tẩy nồng độ cao. \r\n- Khi phơi các bạn nên lộn ngược lại để màu của sản phẩm được bền lâu.\r\n\r\n CHÍNH SÁCH ĐỔI TRẢ: \r\n- Đổi trả trong vòng 3 ngày sau khi nhận hàng \r\n- Sản phẩm đổi trả phải còn nguyên tem, nhãn, bao bì, chưa qua sử dụng giặt tẩy. Nguyên vẹn như ban đầu shop giao\r\n- Đổi trả miễn phí 100% nếu có lỗi từ nhà sản xuất hoặc do shop gửi nhầm size, nhầm mẫu\r\n- Hỗ trợ đổi size (nếu chật)\r\n', '23/09/10', 'TrisPhan123', 0),
(87, 'Áo Peplum tay phồng', 'vaybo_nu (27).jpg', 439000, 3008, 'H?n Qu?c', 3, 'Quần jeans nữ ống đứng cạp cao túi nhọn 2 màu đậm nhạt co giãn kiểu dáng Hàn Quốc\r\n- Đã Kèm Ảnh thật và Video Thật ở Cuối\r\n HƯỚNG DẪN BẢO QUẢN VÀ SỬ DỤNG \r\n- Giặt riêng sản phẩm với lần giặt đầu tiên. \r\n- Không sử dụng bột giặt có chất tẩy nồng độ cao. \r\n- Khi phơi các bạn nên lộn ngược lại để màu của sản phẩm được bền lâu.\r\n\r\n CHÍNH SÁCH ĐỔI TRẢ: \r\n- Đổi trả trong vòng 3 ngày sau khi nhận hàng \r\n- Sản phẩm đổi trả phải còn nguyên tem, nhãn, bao bì, chưa qua sử dụng giặt tẩy. Nguyên vẹn như ban đầu shop giao\r\n- Đổi trả miễn phí 100% nếu có lỗi từ nhà sản xuất hoặc do shop gửi nhầm size, nhầm mẫu\r\n- Hỗ trợ đổi size (nếu chật)\r\n', '23/09/10', 'TrisPhan123', 0),
(88, 'Đầm dáng ôm tay ngắn', 'vaybo_nu (24).jpg', 449000, 554, 'H?n Qu?c', 3, 'Quần jeans nữ ống đứng cạp cao túi nhọn 2 màu đậm nhạt co giãn kiểu dáng Hàn Quốc\r\n- Đã Kèm Ảnh thật và Video Thật ở Cuối\r\n HƯỚNG DẪN BẢO QUẢN VÀ SỬ DỤNG \r\n- Giặt riêng sản phẩm với lần giặt đầu tiên. \r\n- Không sử dụng bột giặt có chất tẩy nồng độ cao. \r\n- Khi phơi các bạn nên lộn ngược lại để màu của sản phẩm được bền lâu.\r\n\r\n CHÍNH SÁCH ĐỔI TRẢ: \r\n- Đổi trả trong vòng 3 ngày sau khi nhận hàng \r\n- Sản phẩm đổi trả phải còn nguyên tem, nhãn, bao bì, chưa qua sử dụng giặt tẩy. Nguyên vẹn như ban đầu shop giao\r\n- Đổi trả miễn phí 100% nếu có lỗi từ nhà sản xuất hoặc do shop gửi nhầm size, nhầm mẫu\r\n- Hỗ trợ đổi size (nếu chật)\r\n', '23/09/10', 'TrisPhan123', 1),
(89, 'Đầm cổ yến dập ly', 'vaybo_nu (20).jpg', 499000, 5099, 'Ph?p', 3, 'Quần jeans nữ ống đứng cạp cao túi nhọn 2 màu đậm nhạt co giãn kiểu dáng Hàn Quốc\r\n- Đã Kèm Ảnh thật và Video Thật ở Cuối\r\n HƯỚNG DẪN BẢO QUẢN VÀ SỬ DỤNG \r\n- Giặt riêng sản phẩm với lần giặt đầu tiên. \r\n- Không sử dụng bột giặt có chất tẩy nồng độ cao. \r\n- Khi phơi các bạn nên lộn ngược lại để màu của sản phẩm được bền lâu.\r\n\r\n CHÍNH SÁCH ĐỔI TRẢ: \r\n- Đổi trả trong vòng 3 ngày sau khi nhận hàng \r\n- Sản phẩm đổi trả phải còn nguyên tem, nhãn, bao bì, chưa qua sử dụng giặt tẩy. Nguyên vẹn như ban đầu shop giao\r\n- Đổi trả miễn phí 100% nếu có lỗi từ nhà sản xuất hoặc do shop gửi nhầm size, nhầm mẫu\r\n- Hỗ trợ đổi size (nếu chật)\r\n', '23/09/10', 'TrisPhan123', 8),
(90, 'Đầm xoè a xếp ly', 'vaybo_nu (48).jpg', 419000, 4561, 'H?n Qu?c', 3, 'Quần jeans nữ ống đứng cạp cao túi nhọn 2 màu đậm nhạt co giãn kiểu dáng Hàn Quốc\r\n- Đã Kèm Ảnh thật và Video Thật ở Cuối\r\n HƯỚNG DẪN BẢO QUẢN VÀ SỬ DỤNG \r\n- Giặt riêng sản phẩm với lần giặt đầu tiên. \r\n- Không sử dụng bột giặt có chất tẩy nồng độ cao. \r\n- Khi phơi các bạn nên lộn ngược lại để màu của sản phẩm được bền lâu.\r\n\r\n CHÍNH SÁCH ĐỔI TRẢ: \r\n- Đổi trả trong vòng 3 ngày sau khi nhận hàng \r\n- Sản phẩm đổi trả phải còn nguyên tem, nhãn, bao bì, chưa qua sử dụng giặt tẩy. Nguyên vẹn như ban đầu shop giao\r\n- Đổi trả miễn phí 100% nếu có lỗi từ nhà sản xuất hoặc do shop gửi nhầm size, nhầm mẫu\r\n- Hỗ trợ đổi size (nếu chật)\r\n', '23/09/10', 'TrisPhan123', 0),
(91, 'Set bộ quần gym nữ giá rẻ', 'quan_nu (12).jpg', 199000, -29, 'Singapore', 2, 'Quần jeans nữ ống đứng cạp cao túi nhọn 2 màu đậm nhạt co giãn kiểu dáng Hàn Quốc\r\n- Đã Kèm Ảnh thật và Video Thật ở Cuối\r\n HƯỚNG DẪN BẢO QUẢN VÀ SỬ DỤNG \r\n- Giặt riêng sản phẩm với lần giặt đầu tiên. \r\n- Không sử dụng bột giặt có chất tẩy nồng độ cao. \r\n- Khi phơi các bạn nên lộn ngược lại để màu của sản phẩm được bền lâu.\r\n\r\n CHÍNH SÁCH ĐỔI TRẢ: \r\n- Đổi trả trong vòng 3 ngày sau khi nhận hàng \r\n- Sản phẩm đổi trả phải còn nguyên tem, nhãn, bao bì, chưa qua sử dụng giặt tẩy. Nguyên vẹn như ban đầu shop giao\r\n- Đổi trả miễn phí 100% nếu có lỗi từ nhà sản xuất hoặc do shop gửi nhầm size, nhầm mẫu\r\n- Hỗ trợ đổi size (nếu chật)\r\n', '23/09/10', 'TrisPhan123', 0),
(92, 'Quần jean lưng cao nữ co giãn', 'quan_nu (4).jpeg', 295000, 552, 'H?n Qu?c', 2, 'Quần jeans nữ ống đứng cạp cao túi nhọn 2 màu đậm nhạt co giãn kiểu dáng Hàn Quốc\r\n- Đã Kèm Ảnh thật và Video Thật ở Cuối\r\n HƯỚNG DẪN BẢO QUẢN VÀ SỬ DỤNG \r\n- Giặt riêng sản phẩm với lần giặt đầu tiên. \r\n- Không sử dụng bột giặt có chất tẩy nồng độ cao. \r\n- Khi phơi các bạn nên lộn ngược lại để màu của sản phẩm được bền lâu.\r\n\r\n CHÍNH SÁCH ĐỔI TRẢ: \r\n- Đổi trả trong vòng 3 ngày sau khi nhận hàng \r\n- Sản phẩm đổi trả phải còn nguyên tem, nhãn, bao bì, chưa qua sử dụng giặt tẩy. Nguyên vẹn như ban đầu shop giao\r\n- Đổi trả miễn phí 100% nếu có lỗi từ nhà sản xuất hoặc do shop gửi nhầm size, nhầm mẫu\r\n- Hỗ trợ đổi size (nếu chật)\r\n', '23/09/10', 'TrisPhan123', 0),
(93, 'Quần jean nữ thun lửng ', 'quan_nu (15).jpg', 309000, 1455, 'Philippin', 2, '', '23/09/10', 'TrisPhan123', 3),
(94, 'Vest Nam 2 hàng nút kẻ sọc', 'vest_nam (21).jpg', 1240000, 4106, 'Ph?p', 6, '', '10/09/23', 'NguyenC', 0),
(95, 'Vest trơn 2 hàng nút sang xịn', 'vest_nam (17).jpg', 1360000, 1104, 'Ph?p', 6, '', '10/09/23', 'NguyenC', 0),
(96, 'Vest cổ điển mê ly', 'vest_nam (11).jpg', 1200000, 2554, 'H?n Qu?c', 6, '', '10/09/23', 'NguyenC', 2),
(97, 'Vest nam cổ điển quyến rũ', 'vest_nam (5).jpg', 1500000, -8, 'H?n Qu?c', 6, '', '10/09/23', 'NguyenC', 0),
(111, 'Bộ quần áo trẻ em siêu dễ thương', 'bo_kid (1).jpg', 69000, 2546, 'Ph?p', 9, '', '12/09/23', 'NguyenC', 0),
(112, 'Áo sơ mi nam cotton cổ tàu tay dài dáng suông', 'ao_nam (3).png', 295000, 1110, 'H?n Qu?c', 4, '', '12/09/23', 'NguyenC', 0),
(113, 'Áo ba lỗ nam active có in chữ', 'ao_nam (7).png', 209300, 2110, 'H?n Qu?c', 4, '', '12/09/23', 'NguyenC', 0),
(114, 'Áo sơ mi nam cổ bẻ dài tay dáng suông', 'ao_nam (39).png', 499000, 3107, 'H?n Qu?c', 4, '', '12/09/23', 'NguyenC', 0),
(115, 'Áo phông nam cotton có hình in Mickey dáng rộng', 'ao_nam (29).png', 174000, 5099, 'Singapore', 4, '', '12/09/23', 'NguyenC', 0),
(116, 'Áo phông nam cotton hình in Captain America dáng rộng', 'ao_nam (43).png', 244300, 4110, 'Nh?t B?n', 4, '', '12/09/23', 'NguyenC', 0),
(117, 'Quần soóc nam cotton jeans dáng suông', 'quan_nam (32).png', 384300, 545, 'H?n Qu?c', 5, '', '12/09/23', 'NguyenC', 0),
(118, 'Quần soóc nam chất nỉ cạp chun', 'quan_nam (24).png', 111111, 15110, 'H?n Qu?c', 5, '', '12/09/23', 'NguyenC', 0),
(119, 'Quần soóc nam cạp chun moi giả', 'quan_nam (37).png', 174000, 4651, 'H?n Qu?c', 5, '', '12/09/23', 'NguyenC', 0),
(120, 'Quần soóc nam có túi hai bên', 'quan_nam (11).png', 549000, 2110, 'H?n Qu?c', 5, '', '12/09/23', 'NguyenC', 0),
(121, 'Bộ quần áo bé trai dễ thương', 'bo_kid (21).jpg', 99000, 2110, 'H?n Qu?c', 9, '', '12/09/23', 'NguyenC', 0),
(122, 'quần bò ', '1.jpg', 234000, 8245, 'america', 8, '', '14/09/23', 'admin11', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `sdt` varchar(15) DEFAULT NULL,
  `vaitro` varchar(100) DEFAULT NULL,
  `ngaytao` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diachi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `full_name`, `username`, `pass`, `email`, `sdt`, `vaitro`, `ngaytao`, `diachi`) VALUES
(11, 'Người Dùng Hai', 'Nguoidung2', 'fcea920f7412b5da7be0cf42b8c93759', 'phantris982005@gmail.com', '0123423823', 'user', NULL, 'S? nhà 20, khu t?p th? Nh?t Quán'),
(17, 'balala asda sá ', 'dfiasddfjd', 'e10adc3949ba59abbe56e057f20f883e', 'phantattri123@gmail.com', '0123812342', 'user', '2013-09-23', 'Hà N?i'),
(18, 'admin', 'admin11', 'e10adc3949ba59abbe56e057f20f883e', 'trissphan982004@gmail.com', '0123456789', 'admin', '13/09/23', 'Hà N?i'),
(20, 'Người Dùng Một', 'Nguoidung1', 'e10adc3949ba59abbe56e057f20f883e', 'trissphan982004@gmail.com', '0123456789', 'manager', NULL, 'Hà N?i'),
(23, 'Nguyễn Hiền Vương', 'toitenvuong', 'e10adc3949ba59abbe56e057f20f883e', 'nguyenhienvuong666@gmail.com', '0333630360', 'user', '14/09/23', 'Li?u Châu, Phú Châu, Ba vì, Hà N?i'),
(24, 'Nguyễn', 'toidsvbds', 'e10adc3949ba59abbe56e057f20f883e', '', '0898755555', 'user', '14/09/23', 'TP Ha noi'),
(26, 'Nguyễn Vương', 'toivuong6', 'e10adc3949ba59abbe56e057f20f883e', '', '0333630360', 'user', '14/09/23', 'Thành ph? Hà N?i'),
(27, 'vươngNguyen', 'toitenvuong12', 'e10adc3949ba59abbe56e057f20f883e', 'nguyenhienvuong666@gmail.com', '0333630360', 'user', '14/09/23', 'Hà n?i');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtinshop`
--

CREATE TABLE `thongtinshop` (
  `id` int(11) NOT NULL,
  `logo_shop` varchar(50) NOT NULL,
  `ten_shop` varchar(50) NOT NULL,
  `matkhau_shop` varchar(50) NOT NULL,
  `sdt_shop` varchar(50) NOT NULL,
  `email_shop` varchar(50) NOT NULL,
  `diachi_shop` text NOT NULL,
  `id_fanpage_fb` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thongtinshop`
--

INSERT INTO `thongtinshop` (`id`, `logo_shop`, `ten_shop`, `matkhau_shop`, `sdt_shop`, `email_shop`, `diachi_shop`, `id_fanpage_fb`) VALUES
(1, 'logo.png', 'TVT-Shop', 'hziobfiqqbshbxrq', '0323456789', 'nguyenhienvuong666@gmail.com', 'Hà Nội', '141601539033801');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinhtrang_dh`
--

CREATE TABLE `tinhtrang_dh` (
  `id_tinhtrang` int(11) NOT NULL,
  `tinhtrang` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `tinhtrang_dh`
--

INSERT INTO `tinhtrang_dh` (`id_tinhtrang`, `tinhtrang`) VALUES
(1, 'Chờ xác nhận'),
(2, 'Hàng đang giao'),
(3, 'Giao thành công'),
(4, 'Hàng đã bị hủy'),
(5, 'Đã mua');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `token`
--

CREATE TABLE `token` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `code_token` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ctdonhang`
--
ALTER TABLE `ctdonhang`
  ADD KEY `donhang_ctdonhang` (`id_donhang`),
  ADD KEY `sanpham_ctdonhang` (`id_sanpham`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id_donhang`),
  ADD KEY `donhang_khachhang` (`id_kh`),
  ADD KEY `donhang_tinhtrang_dh` (`id_tinhtrang`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD KEY `id_sanpham` (`id_sanpham`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id_kh`);

--
-- Chỉ mục cho bảng `loai_sp`
--
ALTER TABLE `loai_sp`
  ADD PRIMARY KEY (`id_loaisp`),
  ADD KEY `fk_loaisp` (`id_sanpham`);

--
-- Chỉ mục cho bảng `rate_sp`
--
ALTER TABLE `rate_sp`
  ADD PRIMARY KEY (`id_rate`),
  ADD KEY `fk_rate_sp` (`id_sanpham`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tinhtrang_dh`
--
ALTER TABLE `tinhtrang_dh`
  ADD PRIMARY KEY (`id_tinhtrang`);

--
-- Chỉ mục cho bảng `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id_donhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT cho bảng `loai_sp`
--
ALTER TABLE `loai_sp`
  MODIFY `id_loaisp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT cho bảng `rate_sp`
--
ALTER TABLE `rate_sp`
  MODIFY `id_rate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `tinhtrang_dh`
--
ALTER TABLE `tinhtrang_dh`
  MODIFY `id_tinhtrang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `token`
--
ALTER TABLE `token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ctdonhang`
--
ALTER TABLE `ctdonhang`
  ADD CONSTRAINT `donhang_ctdonhang` FOREIGN KEY (`id_donhang`) REFERENCES `donhang` (`id_donhang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ctdonhang` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id_sanpham`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_khachhang` FOREIGN KEY (`id_kh`) REFERENCES `khachhang` (`id_kh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donhang_tinhtrang_dh` FOREIGN KEY (`id_tinhtrang`) REFERENCES `tinhtrang_dh` (`id_tinhtrang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id_sanpham`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `loai_sp`
--
ALTER TABLE `loai_sp`
  ADD CONSTRAINT `fk_loaisp` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id_sanpham`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `rate_sp`
--
ALTER TABLE `rate_sp`
  ADD CONSTRAINT `fk_rate_sp` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id_sanpham`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhmuc` (`id_danhmuc`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
