-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3305
-- Thời gian đã tạo: Th12 18, 2023 lúc 07:55 AM
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
-- Cơ sở dữ liệu: `perfumeshopdb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `idBV` int(11) NOT NULL,
  `idSP` int(11) NOT NULL,
  `NoiDung` longtext DEFAULT NULL,
  `NgayCapNhat` date DEFAULT NULL,
  `AnHien` tinyint(3) NOT NULL,
  `TieuDe` varchar(100) NOT NULL,
  `img` text DEFAULT NULL,
  `MoTa` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT INTO `baiviet` (`idBV`, `idSP`, `NoiDung`, `NgayCapNhat`, `AnHien`, `TieuDe`, `img`, `MoTa`) VALUES
(2, 4, '<p><strong>DOMAINE TERRA NOE BLANC l&agrave; g&igrave; v&agrave; c&oacute; điểm nổi bật n&agrave;o về n&oacute;?</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>DOMAINE TERRA NOE BLANC l&agrave; một nh&atilde;n hiệu sản phẩm trong lĩnh vực nho v&agrave; sản xuất rượu vang. Được biết đến với sự kỳ c&ocirc;ng trong việc sản xuất rượu vang cao cấp, DOMAINE TERRA NOE BLANC nằm ở một v&ugrave;ng nghệ thuật nổi tiếng của nước Ph&aacute;p, nơi c&oacute; điều kiện tự nhi&ecirc;n tốt để trồng nho v&agrave; sản xuất rượu vang.</p>\r\n\r\n<p>Nh&atilde;n hiệu n&agrave;y nổi tiếng với sự s&aacute;ng tạo trong việc sử dụng c&aacute;c loại nho chất lượng để tạo ra những chai rượu vang trắng tinh tế v&agrave; độc đ&aacute;o. DOMAINE TERRA NOE BLANC đ&atilde; thu h&uacute;t sự ch&uacute; &yacute; của c&aacute;c người y&ecirc;u th&uacute; vị v&agrave; những người đam m&ecirc; về nghệ thuật của rượu vang bởi vị tr&iacute; địa l&yacute; xuất sắc, quy tr&igrave;nh sản xuất tinh tế v&agrave; chất lượng sản phẩm cao cấp.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2023-12-04', 1, 'Rượu ngon', '1p.jpg', '<p><strong>DOMAINE TERRA NOE BLANC l&agrave; g&igrave; v&agrave; c&oacute; điểm nổi bật n&agrave;o về n&oacute;?</strong></p>\r\n'),
(3, 5, '<p><strong>DOMAINE TERRA NOE BLANC c&oacute; bất kỳ sản phẩm rượu vang nổi bật n&agrave;o trong danh mục của họ?</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>C&oacute;, DOMAINE TERRA NOE BLANC nổi tiếng với một số sản phẩm rượu vang rất đặc biệt trong danh mục của họ. Một trong những sản phẩm nổi bật l&agrave; rượu vang trắng độc đ&aacute;o được sản xuất từ c&aacute;c loại nho tinh t&uacute;y v&agrave; chất lượng cao. DOMAINE TERRA NOE BLANC thường tập trung v&agrave;o việc tạo ra c&aacute;c loại rượu vang đa dạng về hương vị v&agrave; phong c&aacute;ch, từ những chai thanh khiết v&agrave; tươi m&aacute;t đến những chai nồng n&agrave;n v&agrave; tr&ograve;n vị.</p>\r\n\r\n<p>C&aacute;c sản phẩm của DOMAINE TERRA NOE BLANC thường được biết đến với hương thơm phức hợp, hương hoa quả tươi mới, v&agrave; cấu tr&uacute;c tuyệt vời. Những chai rượu vang n&agrave;y thường được xem x&eacute;t l&agrave; biểu tượng của nghệ thuật sản xuất rượu vang Ph&aacute;p v&agrave; thu h&uacute;t sự quan t&acirc;m của c&aacute;c người y&ecirc;u rượu tr&ecirc;n khắp thế giới.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2023-12-04', 1, 'sản phẩm rượu vang nổi bật', '2p.jpg', '<p><strong>DOMAINE TERRA NOE BLANC c&oacute; bất kỳ sản phẩm rượu vang nổi bật n&agrave;o trong danh mục của họ?</strong></p>\r\n'),
(5, 3, '<p>DOMAINE TERRA NOE BLANC l&agrave; một nh&agrave; m&aacute;y sản xuất rượu nổi tiếng với hơn 50 năm kinh nghiệm, chuy&ecirc;n sản xuất c&aacute;c loại rượu trắng chất lượng cao.</p>\r\n', '2023-12-04', 1, 'Lịch sử của DOMAINE TERRA ', '3p.jpg', '<p><strong>Lịch sử của DOMAINE TERRA NOE BLANC l&agrave; g&igrave;?</strong></p>\r\n'),
(7, 8, '<p><strong>Quy tr&igrave;nh sản xuất rượu tại DOMAINE TERRA NOE BLANC như thế n&agrave;o?</strong> DOMAINE TERRA NOE BLANC tu&acirc;n thủ c&aacute;c phương ph&aacute;p sản xuất truyền thống, từ việc thu hoạch nho đến quy tr&igrave;nh l&ecirc;n men v&agrave; ủ rượu.</p>\r\n', '2023-12-04', 1, 'Quy trình sản xuất rượu tại DOMAINE TERRA NOE BLANC', '4p.jpg', '<p><strong>Quy tr&igrave;nh sản xuất rượu tại DOMAINE TERRA NOE BLANC như thế n&agrave;o?</strong></p>\r\n'),
(8, 14, '<p><strong>Loại rượu DOMAINE TERRA NOE BLANC n&agrave;o được đ&aacute;nh gi&aacute; cao nhất?</strong></p>\r\n\r\n<p>Rượu DOMAINE TERRA NOE BLANC Reserve Blanc được đ&aacute;nh gi&aacute; cao với hương vị phức tạp, cấu tr&uacute;c tốt v&agrave; hậu vị k&eacute;o d&agrave;i.</p>\r\n', '2023-12-04', 1, 'đánh giá rượu DOMAINE TERRA NOE BLANC', '5p.jpg', '<p><strong>Loại rượu DOMAINE TERRA NOE BLANC n&agrave;o được đ&aacute;nh gi&aacute; cao nhất?</strong></p>\r\n'),
(9, 1, '<p><strong>DOMAINE TERRA NOE BLANC c&oacute; c&aacute;c chương tr&igrave;nh du lịch tham quan kh&ocirc;ng?</strong></p>\r\n\r\n<p>C&oacute;, DOMAINE TERRA NOE BLANC mở cửa cửa h&agrave;ng v&agrave; tổ chức c&aacute;c chương tr&igrave;nh tham quan cho du kh&aacute;ch để kh&aacute;m ph&aacute; quy tr&igrave;nh sản xuất rượu của họ.</p>\r\n', '2023-11-06', 1, 'DOMAINE TERRA NOE BLANC', '6p.jpg', '<p><strong>DOMAINE TERRA NOE BLANC c&oacute; c&aacute;c chương tr&igrave;nh du lịch tham quan kh&ocirc;ng?</strong></p>\r\n'),
(10, 1, '<p><strong>L&agrave;m thế n&agrave;o để lưu trữ v&agrave; phục vụ rượu DOMAINE TERRA NOE BLANC một c&aacute;ch đ&uacute;ng c&aacute;ch?</strong></p>\r\n\r\n<p>Rượu DOMAINE TERRA NOE BLANC n&ecirc;n được lưu trữ ở nhiệt độ v&agrave; độ ẩm ổn định, v&agrave; được phục vụ ở nhiệt độ ph&ograve;ng để tận hưởng hương vị tốt nhất.</p>\r\n', '2023-11-06', 1, 'DOMAINE TERRA NOE BLANC', '7p.jpg', '<p><strong>L&agrave;m thế n&agrave;o để lưu trữ v&agrave; phục vụ rượu DOMAINE TERRA NOE BLANC một c&aacute;ch đ&uacute;ng c&aacute;ch?</strong></p>\r\n'),
(11, 1, '<h2><strong>Những giải thưởng n&agrave;o DOMAINE TERRA NOE BLANC đ&atilde; đạt được?</strong></h2>\r\n\r\n<h2>DOMAINE TERRA NOE BLANC đ&atilde; đoạt nhiều giải thưởng quốc tế về chất lượng rượu, chứng minh cho sự xuất sắc trong sản xuất.</h2>\r\n', '2023-11-06', 1, 'DOMAINE TERRA NOE BLANC', '8p.jpg', '<h2><strong>Những giải thưởng n&agrave;o DOMAINE TERRA NOE BLANC đ&atilde; đạt được?</strong></h2>\r\n'),
(12, 1, '<p><strong>C&aacute;ch nhận biết rượu DOMAINE TERRA NOE BLANC ch&iacute;nh h&atilde;ng?</strong></p>\r\n\r\n<p>Rượu DOMAINE TERRA NOE BLANC ch&iacute;nh h&atilde;ng thường c&oacute; nh&atilde;n m&aacute;c chứng nhận v&agrave; số l&ocirc; sản xuất, v&agrave; n&ecirc;n mua từ c&aacute;c địa điểm uy t&iacute;n hoặc đại l&yacute; ch&iacute;nh thức.</p>\r\n', '2023-11-06', 1, 'DOMAINE TERRA NOE BLANC', '9p.jpg', '<p><strong>C&aacute;ch nhận biết rượu DOMAINE TERRA NOE BLANC ch&iacute;nh h&atilde;ng?</strong></p>\r\n'),
(15, 1, '<p><strong>Quy tr&igrave;nh sản xuất rượu tại DOMAINE TERRA NOE BLANC như thế n&agrave;o?</strong> DOMAINE TERRA NOE BLANC tu&acirc;n thủ c&aacute;c phương ph&aacute;p sản xuất truyền thống, từ việc thu hoạch nho đến quy tr&igrave;nh l&ecirc;n men v&agrave; ủ rượu.</p>\n', '2023-11-29', 1, 'DOMAINE TERRA NOE BLANC', '10p.jpg', '<p><strong>C&oacute; thể kết hợp rượu DOMAINE TERRA NOE BLANC với loại đồ uống n&agrave;o kh&aacute;c để tạo ra c&aacute;c cocktail độc đ&aacute;o kh&ocirc;ng?</strong></p>\n'),
(13, 1, '<p><strong>Quy tr&igrave;nh sản xuất rượu tại DOMAINE TERRA NOE BLANC như thế n&agrave;o?</strong> DOMAINE TERRA NOE BLANC tu&acirc;n thủ c&aacute;c phương ph&aacute;p sản xuất truyền thống, từ việc thu hoạch nho đến quy tr&igrave;nh l&ecirc;n men v&agrave; ủ rượu.</p>\n', '2023-11-29', 1, 'DOMAINE TERRA NOE BLANC', '8p.jpg', '<p><strong>C&oacute; thể kết hợp rượu DOMAINE TERRA NOE BLANC với loại đồ uống n&agrave;o kh&aacute;c để tạo ra c&aacute;c cocktail độc đ&aacute;o kh&ocirc;ng?</strong></p>\n'),
(14, 1, '<p><strong>Quy tr&igrave;nh sản xuất rượu tại DOMAINE TERRA NOE BLANC như thế n&agrave;o?</strong> DOMAINE TERRA NOE BLANC tu&acirc;n thủ c&aacute;c phương ph&aacute;p sản xuất truyền thống, từ việc thu hoạch nho đến quy tr&igrave;nh l&ecirc;n men v&agrave; ủ rượu.</p>\n', '2023-11-29', 1, 'DOMAINE TERRA NOE BLANC', '10p.jpg', '<p><strong>C&oacute; thể kết hợp rượu DOMAINE TERRA NOE BLANC với loại đồ uống n&agrave;o kh&aacute;c để tạo ra c&aacute;c cocktail độc đ&aacute;o kh&ocirc;ng?</strong></p>\n'),
(16, 1, '<p><strong>Quy tr&igrave;nh sản xuất rượu tại DOMAINE TERRA NOE BLANC như thế n&agrave;o?</strong> DOMAINE TERRA NOE BLANC tu&acirc;n thủ c&aacute;c phương ph&aacute;p sản xuất truyền thống, từ việc thu hoạch nho đến quy tr&igrave;nh l&ecirc;n men v&agrave; ủ rượu.</p>\n', '2023-11-29', 1, 'Bí quyết chọn DOMAINE TERRA NOE BLANC', '9p.jpg', '<p><strong>C&oacute; thể kết hợp rượu DOMAINE TERRA NOE BLANC với loại đồ uống n&agrave;o kh&aacute;c để tạo ra c&aacute;c cocktail độc đ&aacute;o kh&ocirc;ng?</strong></p>\n'),
(17, 1, '<p><strong>Quy tr&igrave;nh sản xuất rượu tại DOMAINE TERRA NOE BLANC như thế n&agrave;o?</strong> DOMAINE TERRA NOE BLANC tu&acirc;n thủ c&aacute;c phương ph&aacute;p sản xuất truyền thống, từ việc thu hoạch nho đến quy tr&igrave;nh l&ecirc;n men v&agrave; ủ rượu.</p>\n', '2023-11-29', 1, 'DOMAINE TERRA NOE BLANC', '10p.jpg', '<p><strong>C&oacute; thể kết hợp rượu DOMAINE TERRA NOE BLANC với loại đồ uống n&agrave;o kh&aacute;c để tạo ra c&aacute;c cocktail độc đ&aacute;o kh&ocirc;ng?</strong></p>\n'),
(18, 1, '<p><strong>Quy tr&igrave;nh sản xuất rượu tại DOMAINE TERRA NOE BLANC như thế n&agrave;o?</strong> DOMAINE TERRA NOE BLANC tu&acirc;n thủ c&aacute;c phương ph&aacute;p sản xuất truyền thống, từ việc thu hoạch nho đến quy tr&igrave;nh l&ecirc;n men v&agrave; ủ rượu.</p>\n', '2023-11-29', 1, 'DOMAINE TERRA NOE BLANC', '8p.jpg', '<p><strong>C&oacute; thể kết hợp rượu DOMAINE TERRA NOE BLANC với loại đồ uống n&agrave;o kh&aacute;c để tạo ra c&aacute;c cocktail độc đ&aacute;o kh&ocirc;ng?</strong></p>\n'),
(19, 1, '<p><strong>Quy tr&igrave;nh sản xuất rượu tại DOMAINE TERRA NOE BLANC như thế n&agrave;o?</strong> DOMAINE TERRA NOE BLANC tu&acirc;n thủ c&aacute;c phương ph&aacute;p sản xuất truyền thống, từ việc thu hoạch nho đến quy tr&igrave;nh l&ecirc;n men v&agrave; ủ rượu.</p>\n', '2023-11-29', 1, 'DOMAINE TERRA NOE BLANC', '7p.jpg', '<p><strong>C&oacute; thể kết hợp rượu DOMAINE TERRA NOE BLANC với loại đồ uống n&agrave;o kh&aacute;c để tạo ra c&aacute;c cocktail độc đ&aacute;o kh&ocirc;ng?</strong></p>\n'),
(20, 1, '<p><strong>Quy tr&igrave;nh sản xuất rượu tại DOMAINE TERRA NOE BLANC như thế n&agrave;o?</strong> DOMAINE TERRA NOE BLANC tu&acirc;n thủ c&aacute;c phương ph&aacute;p sản xuất truyền thống, từ việc thu hoạch nho đến quy tr&igrave;nh l&ecirc;n men v&agrave; ủ rượu.</p>\n', '2023-11-29', 1, 'DOMAINE TERRA NOE BLANC', '1p.jpg', '<p><strong>C&oacute; thể kết hợp rượu DOMAINE TERRA NOE BLANC với loại đồ uống n&agrave;o kh&aacute;c để tạo ra c&aacute;c cocktail độc đ&aacute;o kh&ocirc;ng?</strong></p>\n'),
(21, 1, '<p><strong>Quy tr&igrave;nh sản xuất rượu tại DOMAINE TERRA NOE BLANC như thế n&agrave;o?</strong> DOMAINE TERRA NOE BLANC tu&acirc;n thủ c&aacute;c phương ph&aacute;p sản xuất truyền thống, từ việc thu hoạch nho đến quy tr&igrave;nh l&ecirc;n men v&agrave; ủ rượu.</p>\n', '2023-11-29', 1, 'DOMAINE TERRA NOE BLANC', '2p.jpg', '<p><strong>C&oacute; thể kết hợp rượu DOMAINE TERRA NOE BLANC với loại đồ uống n&agrave;o kh&aacute;c để tạo ra c&aacute;c cocktail độc đ&aacute;o kh&ocirc;ng?</strong></p>\n'),
(22, 1, '<p><strong>Quy tr&igrave;nh sản xuất rượu tại DOMAINE TERRA NOE BLANC như thế n&agrave;o?</strong> DOMAINE TERRA NOE BLANC tu&acirc;n thủ c&aacute;c phương ph&aacute;p sản xuất truyền thống, từ việc thu hoạch nho đến quy tr&igrave;nh l&ecirc;n men v&agrave; ủ rượu.</p>\n', '2023-11-29', 1, 'DOMAINE TERRA NOE BLANC', '10p.jpg', '<p><strong>C&oacute; thể kết hợp rượu DOMAINE TERRA NOE BLANC với loại đồ uống n&agrave;o kh&aacute;c để tạo ra c&aacute;c cocktail độc đ&aacute;o kh&ocirc;ng?</strong></p>\n'),
(23, 1, '<p><strong>Quy tr&igrave;nh sản xuất rượu tại DOMAINE TERRA NOE BLANC như thế n&agrave;o?</strong> DOMAINE TERRA NOE BLANC tu&acirc;n thủ c&aacute;c phương ph&aacute;p sản xuất truyền thống, từ việc thu hoạch nho đến quy tr&igrave;nh l&ecirc;n men v&agrave; ủ rượu.</p>\n', '2023-11-29', 1, 'DOMAINE TERRA NOE BLANC', '2p.jpg', '<p><strong>C&oacute; thể kết hợp rượu DOMAINE TERRA NOE BLANC với loại đồ uống n&agrave;o kh&aacute;c để tạo ra c&aacute;c cocktail độc đ&aacute;o kh&ocirc;ng?</strong></p>\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `idDH` int(4) NOT NULL,
  `idUser` int(4) DEFAULT 0,
  `ThoiDiemDatHang` datetime DEFAULT NULL,
  `TenNguoiNhan` varchar(100) NOT NULL DEFAULT '',
  `DiaChi` varchar(255) NOT NULL,
  `SDT` varchar(12) NOT NULL,
  `TongTien` float DEFAULT NULL,
  `idPTGH` varchar(20) DEFAULT '1',
  `Tax` float DEFAULT 0.1,
  `DaXuLy` tinyint(1) DEFAULT 0,
  `Email` varchar(50) DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`idDH`, `idUser`, `ThoiDiemDatHang`, `TenNguoiNhan`, `DiaChi`, `SDT`, `TongTien`, `idPTGH`, `Tax`, `DaXuLy`, `Email`) VALUES
(17, 18, '2023-12-04 14:12:48', 'Phước Nguyễn', 'Vĩnh Long', '834002972', 0, '3', 0, 0, 'pn6172345@gmail.com'),
(18, 18, '2023-12-04 16:12:30', 'Phước Nguyễn', 'Vĩnh Long', '834002972', 0, '4', 0, 1, 'pn6172345@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhangchitiet`
--

CREATE TABLE `donhangchitiet` (
  `idDH` int(4) NOT NULL DEFAULT 0,
  `idSP` int(4) NOT NULL DEFAULT 0,
  `TenSP` varchar(255) NOT NULL,
  `SoLuong` int(4) UNSIGNED NOT NULL DEFAULT 0,
  `DaXuLy` tinyint(1) UNSIGNED DEFAULT 0,
  `Gia` int(11) NOT NULL DEFAULT 0,
  `GiaKhuyenMai` float UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhangchitiet`
--

INSERT INTO `donhangchitiet` (`idDH`, `idSP`, `TenSP`, `SoLuong`, `DaXuLy`, `Gia`, `GiaKhuyenMai`) VALUES
(17, 2, 'DOMAINE TERRA NOE ROUGE', 1, 0, 1755000, 0),
(8, 8, 'Dior Eau Sauvage Men(Tester)', 3, 3, 1650000, 150000),
(11, 5, 'Chanel Allure Homme Sport Eau Extreme Men', 1, 3, 2855000, 0),
(5, 4, '4', 1, 3, 3835000, 0),
(5, 5, 'Chanel Allure Homme Sport Eau Extreme Men', 1, 3, 2855000, 0),
(10, 48, 'Nước Hoa Chanel Nam Allure Homme Sport EDT', 5, 3, 2150000, 0),
(6, 2, 'Calvin Klein Euphoria Blossom Women', 1, 3, 1755000, 50000),
(15, 3, 'DOMAINE TERRA NOE ESPRIT DE NOE ROSE', 1, 2, 1250000, 0),
(19, 2, 'DOMAINE TERRA NOE ROUGE', 1, 3, 1755000, 0),
(20, 2, 'DOMAINE TERRA NOE ROUGE', 2, 3, 1755000, 0),
(21, 3, 'DOMAINE TERRA NOE ESPRIT DE NOE ROSE', 1, 0, 1250000, 0),
(22, 5, 'DOMAINE TERRA NOE ESPRIT DE NOE ROUGE', 1, 0, 2855000, 0),
(23, 3, 'DOMAINE TERRA NOE ESPRIT DE NOE ROSE', 10, 0, 1250000, 0),
(1, 4, 'DOMAINE TERRA NOE ESPRIT DE NOE BLANC', 1, 0, 3835000, 0),
(6, 5, 'DOMAINE TERRA NOE ESPRIT DE NOE ROUGE', 2, 3, 2855000, 0),
(10, 4, 'DOMAINE TERRA NOE ESPRIT DE NOE BLANC', 1, 3, 3835000, 0),
(18, 51, 'HIGHLAND PARK 1984 - 37 NĂM GM', 21, 0, 2560000, 0),
(18, 2, 'DOMAINE TERRA NOE ROUGE', 1, 0, 1755000, 0),
(15, 4, 'DOMAINE TERRA NOE ESPRIT DE NOE BLANC', 1, 2, 3835000, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `idKM` int(11) NOT NULL,
  `MotaKM` varchar(200) DEFAULT NULL,
  `urlHinh` text DEFAULT NULL,
  `AnHien` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`idKM`, `MotaKM`, `urlHinh`, `AnHien`) VALUES
(1, 'Khuyến mãi 30/4	', 'holiday_sale_hp.gif', 0),
(4, 'Khuyến mãi mùa noel', 'noel.png', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `idL` int(12) NOT NULL,
  `TenL` varchar(100) NOT NULL DEFAULT '',
  `ThuTu` int(4) NOT NULL DEFAULT 1,
  `AnHien` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`idL`, `TenL`, `ThuTu`, `AnHien`) VALUES
(5, 'VANG', 1, 1),
(2, 'WHISKY', 2, 1),
(3, 'SPIRITS', 3, 1),
(4, 'BIA', 4, 1),
(1, 'khác', 5, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `momo`
--

CREATE TABLE `momo` (
  `id_momo` int(11) NOT NULL,
  `partner_Code` varchar(100) NOT NULL,
  `order_id` int(11) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `order_info` varchar(100) NOT NULL,
  `order_type` varchar(100) NOT NULL,
  `trans_id` int(11) NOT NULL,
  `pay_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanhieu`
--

CREATE TABLE `nhanhieu` (
  `idNH` int(12) NOT NULL,
  `idL` int(12) NOT NULL DEFAULT 1,
  `TenNH` varchar(100) NOT NULL DEFAULT '',
  `ThuTu` int(4) NOT NULL DEFAULT 1,
  `AnHien` int(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanhieu`
--

INSERT INTO `nhanhieu` (`idNH`, `idL`, `TenNH`, `ThuTu`, `AnHien`) VALUES
(20, 4, 'GEKKEIKAN', 1, 1),
(2, 4, 'CHIMAY', 1, 1),
(3, 4, 'DASSAI', 1, 1),
(4, 4, 'HEINEKEN', 1, 1),
(5, 3, 'GIN', 1, 1),
(6, 3, 'RUM', 1, 1),
(7, 3, 'VODKA', 1, 1),
(8, 1, 'RƯỢU SỮA', 1, 1),
(9, 1, 'MÙI CÀ PHÊ', 1, 1),
(10, 5, 'PRIMITIVO', 1, 1),
(11, 1, 'MÙI TRÁI CÂY', 1, 1),
(12, 1, 'THẢO MỘC', 1, 1),
(13, 1, 'LIQUEUR ỚT', 1, 1),
(14, 2, 'MACALLAN', 1, 1),
(15, 2, 'CHIVAS', 1, 1),
(16, 2, 'JOHNNIE WALKER', 1, 1),
(17, 2, 'BALLANTINES', 1, 1),
(18, 2, 'HIBIKI', 1, 1),
(19, 2, 'SINGLETON', 1, 1),
(1, 1, 'HẠT', 1, 1),
(22, 5, 'MALBEC', 1, 1),
(21, 5, 'GAMAY', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuongthucgiaohang`
--

CREATE TABLE `phuongthucgiaohang` (
  `idGH` int(11) NOT NULL,
  `TenGH` varchar(20) NOT NULL,
  `Phi` int(16) NOT NULL DEFAULT 0,
  `AnHien` tinyint(2) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phuongthucgiaohang`
--

INSERT INTO `phuongthucgiaohang` (`idGH`, `TenGH`, `Phi`, `AnHien`) VALUES
(1, 'Giao hàng nhanh', 0, 1),
(2, 'VNpost – EMS', 0, 1),
(3, 'Viettel post', 50, 1),
(4, 'Giao hàng tiết kiệm', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuongthucthanhtoan`
--

CREATE TABLE `phuongthucthanhtoan` (
  `idPTTT` int(2) NOT NULL,
  `TenPhuongThucTT` varchar(30) NOT NULL,
  `GhiChu` varchar(50) NOT NULL,
  `AnHien` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phuongthucthanhtoan`
--

INSERT INTO `phuongthucthanhtoan` (`idPTTT`, `TenPhuongThucTT`, `GhiChu`, `AnHien`) VALUES
(1, 'Nhận trực tiếp', 'Được kiểm tra hàng', 1),
(2, 'Thanh toán qua ví', 'Được kiểm tra hàng', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idSP` int(12) NOT NULL,
  `idNH` int(12) NOT NULL DEFAULT 1,
  `idL` int(9) NOT NULL DEFAULT 1,
  `TenSP` varchar(100) NOT NULL DEFAULT '',
  `MoTa` varchar(4000) NOT NULL DEFAULT 'Chưa có mô tả',
  `NgayCapNhat` date NOT NULL DEFAULT '2017-01-12',
  `GiaBan` float UNSIGNED NOT NULL DEFAULT 0,
  `GiaKhuyenmai` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `urlHinh` varchar(255) NOT NULL,
  `baiviet` text DEFAULT NULL,
  `SoLanXem` int(4) DEFAULT 0,
  `SoLuongTonKho` int(4) UNSIGNED DEFAULT 0,
  `GhiChu` varchar(255) DEFAULT NULL,
  `SoLanMua` int(4) DEFAULT 0,
  `AnHien` int(1) DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idSP`, `idNH`, `idL`, `TenSP`, `MoTa`, `NgayCapNhat`, `GiaBan`, `GiaKhuyenmai`, `urlHinh`, `baiviet`, `SoLanXem`, `SoLuongTonKho`, `GhiChu`, `SoLanMua`, `AnHien`) VALUES
(1, 1, 1, 'DOMAINE TERRA NOE BLANC', '', '2023-11-29', 1500000, 1150000, 'Domaine-Terra-Noe-Blanc.jpg', NULL, 0, 0, '', 0, 1),
(2, 18, 1, 'DOMAINE TERRA NOE ROUGE', '', '2023-11-29', 1755000, 1450000, 'Domaine-Terra-Noe-Rouge.jpg', NULL, 20, 1, '', 10, 1),
(3, 18, 1, 'DOMAINE TERRA NOE ESPRIT DE NOE ROSE', '', '2023-11-29', 1250000, 0, 'Domaine-Terra-Noe-Esprit-de-Noe-Rose.jpg', NULL, 7, 8, '', 6, 1),
(4, 10, 1, 'DOMAINE TERRA NOE ESPRIT DE NOE BLANC', '', '2023-11-29', 3835000, 3050000, '3.jpg', NULL, 10, 8, '', 5, 1),
(5, 10, 1, 'DOMAINE TERRA NOE ESPRIT DE NOE ROUGE', '', '2023-11-29', 2855000, 3050000, 'Domaine-Terra-Noe-Esprit-de-Noe-Rouge.jpg', NULL, 10, 14, '', 5, 1),
(7, 11, 1, 'BESTHEIM GEWURZTRAMINER VENDANGES TARDIVES', '', '2023-11-29', 1650000, 0, '7.jpg', NULL, 0, 20, '', 0, 1),
(8, 11, 1, 'BESTHEIM CREMANT D\'ALSACE BRUT COEUR DE LUNE', '', '2023-11-29', 1650000, 0, '8.jpg', NULL, 0, 11, '', 0, 1),
(9, 6, 1, 'BESTHEIM CREMANT D\'ALSACE BRUT PREMIUM', '', '2023-11-29', 3650000, 0, '9.jpg', NULL, 0, 5, '', 13, 1),
(10, 19, 2, 'WILD TURKEY MASTER\'S KEEP UNFORGOTTEN', '', '2023-11-29', 1850000, 0, '10.jpg', NULL, 0, 5, '', 0, 1),
(11, 19, 2, 'WOODFORD RESERVE DOUBLE OAKED', '', '2023-11-29', 2650000, 0, '11.jpg', NULL, 0, 40, '', 0, 1),
(12, 12, 2, 'WOODFORD RESERVE RYE', '', '2023-11-29', 1250000, 0, '1l.jpg', NULL, 0, 8, '', 1, 1),
(13, 12, 2, 'KNOB CREEK RYE', '', '2023-11-29', 1250000, 0, '13.jpg', NULL, 0, 15, '', 0, 1),
(14, 12, 2, 'WILD TURKEY KENTUCKY SPIRIT', '', '2023-11-29', 1250000, 0, '14.jpg', NULL, 0, 30, '', 0, 1),
(15, 5, 3, 'BEN LOMOND SCOTTISH GIN', '', '2023-11-29', 6800000, 0, '150.jpg', NULL, 0, 10, '', 4, 1),
(16, 5, 3, 'CRUZAN AGED DARK RUM', '', '2023-11-29', 6800000, 0, '16.jpg', NULL, 0, 0, '', 0, 1),
(17, 5, 3, 'GLEN\'S DARK RUM', '', '2023-11-29', 5950000, 0, '17.jpg', NULL, 0, 0, '', 0, 1),
(18, 13, 3, 'BEEFEATER 1L - LONDON DRY GIN', '', '2023-11-29', 1850000, 0, '18.jpg', NULL, 0, 10, '', 0, 1),
(19, 13, 3, 'VODKA SVEDKA VANILLA', '', '2023-11-29', 2250000, 0, '19.jpg', NULL, 0, 0, '', 0, 1),
(20, 9, 2, 'KAIBUTSU MONKI', '', '2023-11-29', 1850000, 0, '15.jpg', NULL, 0, 10, '', 0, 1),
(21, 9, 2, 'KAIBUTSU DORAGON\n', '', '2023-11-29', 900000, 0, '151.jpg', NULL, 0, 0, '', 0, 1),
(22, 9, 2, 'SUNTORY KAKUBIN 2 LY', '', '2023-11-29', 165000, 0, '22.jpg', NULL, 0, 0, '', 0, 1),
(23, 9, 2, 'YAMAZAKI 100TH ANNIVERSARY', '', '2023-11-29', 1850000, 0, '23.jpg', NULL, 0, 0, '', 0, 1),
(24, 4, 4, 'BIA VEDETT EXTRA BLOND', '', '2023-11-29', 3250000, 0, '241.jpg', NULL, 0, 0, '', 0, 1),
(25, 4, 4, 'BIA DUVEL 666', '', '2023-11-29', 2850000, 0, 'bia666.jpg', NULL, 0, 10, '', 0, 1),
(26, 4, 4, 'BIA GROLSCH', '', '2023-11-29', 3250000, 0, '26.jpg', NULL, 0, 0, '', 0, 1),
(28, 4, 4, 'BIA VEDETT EXTRA WHITE', '', '2023-11-29', 3250000, 0, '28.jpg', NULL, 0, 0, NULL, 0, 1),
(30, 1, 4, 'BIA VEDETT EXTRAORDINARY IPA', '', '2023-11-29', 3250000, 0, '30.jpg', NULL, 0, 10, '', 0, 1),
(31, 16, 4, 'BIA PREMIUM KRIEK', '', '2023-11-29', 3250000, 0, '310.jpg', NULL, 0, 0, '', 0, 1),
(32, 17, 4, 'BIA PECHE MEL BUSH', '', '2023-11-29', 7950000, 0, '320.jpg', NULL, 0, 0, '', 0, 1),
(33, 1, 4, 'BIA STAROPRAMEN LON', '', '2023-11-29', 1250000, 0, '330.jpg', NULL, 0, 0, '', 0, 1),
(34, 20, 4, 'BIA STAROPRAMEN CHAI', '', '2023-11-29', 2650000, 0, '340.jpg', NULL, 0, 10, '', 0, 1),
(35, 8, 4, 'BIA TRIPEL KARMELIET', '', '2023-11-29', 7950000, 0, '350.jpg', NULL, 0, 0, NULL, 0, 1),
(37, 2, 4, 'BIA KASTEEL DONKER', '', '2023-11-29', 1750000, 0, '370.jpg', NULL, 0, 20, '', 0, 1),
(38, 3, 4, 'BIA PIRAAT', '', '2023-11-29', 2250000, 0, '380.jpg', NULL, 0, 0, '', 0, 1),
(39, 3, 4, 'BIA SCHORSCHBOCK 30', '', '2023-11-29', 1550000, 0, '390.jpg', NULL, 0, 0, '', 0, 1),
(40, 10, 1, 'NICOLAS POTEL RULLY', '', '2023-11-29', 3650000, 3350000, '22.png', NULL, 5, 15, '', 4, 1),
(41, 20, 1, 'CHAMPAGNE TRIBAUT SCHLOESSER L’AUTHENTIQUE ROSE', '', '2023-11-29', 3150000, 2450000, 'p23.jpg', NULL, 15, 10, 'Không có', 1, 1),
(42, 7, 1, 'CHATEAU SAINT MAUR L\'EXCELLENCE WHITE\n', '', '2023-11-29', 2150000, 1650000, 'p27.jpg', NULL, 5, 20, '', 5, 1),
(43, 11, 1, 'GERARD BERTRAND NATURALYS CHARDONNAY\n', '', '2023-11-29', 3450000, 2650000, 'p34.jpg', NULL, 9, 18, '', 12, 1),
(44, 19, 1, 'CHATEAU DU VAL D’OR\n', '', '2023-11-29', 3650000, 2850000, 'p39.jpg', NULL, 9, 10, '', 2, 1),
(45, 20, 1, 'OCTOMORE 14.3', '', '2023-11-29', 6400000, 4950000, '1ph.jpg', NULL, 12, 50, '', 3, 1),
(50, 22, 1, 'SAKE GEKKEIKAN HORIN 1.8L', '', '2023-11-29', 2840000, 2650000, '2ph.jpg', NULL, 2, 25, '', 2, 1),
(47, 22, 1, 'LINKWOOD 14 NĂM - SILVER SEAL', '', '2023-11-04', 4350000, 4350000, '3ph.jpg', NULL, 5, 20, '', 5, 1),
(48, 10, 1, 'KNOCKDHU 1991 - 31 NĂM OLD AND RARE', '', '2023-11-29', 2150000, 1890000, '4ph.jpg', NULL, 2, 5, '', 1, 1),
(54, 5, 3, 'SIPSMITH LONDON SLOE GIN', '', '2023-11-29', 4500000, 3500000, '9ph.jpg', NULL, 2, 50, NULL, 0, 1),
(55, 5, 3, 'SIPSMITH LONDON SLOE GIN', '', '2023-11-29', 4500000, 3500000, '9ph.jpg', NULL, 2, 50, NULL, 1, 1),
(49, 21, 1, 'CRAIGELLACHIE 2007 - 14 NĂM', '', '2023-11-29', 1150000, 950000, '5ph.jpg', NULL, 0, 15, '', 0, 1),
(52, 10, 1, 'GLEN SCOTIA VICTORIANA', '<p>Rượu vang đỏ Artas Primitivo, được l&agrave;m từ 100% nho Primitivo v&ugrave;ng Puglia, &Yacute;. Những quả nho được thu hoạch thủ c&ocirc;ng v&agrave;o buổi s&aacute;ng m&aacute;t mẻ cho sản xuất, sau khi l&ecirc;n men, rượu trải qua 12 th&aacute;ng ủ trong th&ugrave;ng gỗ sồi.&nbsp;</p>\n\n<p>Th&ocirc;ng tin sản phẩm Rượu vang đỏ Artas Primitivo:</p>\n\n<ul>\n	<li>Loại vang: Vang đỏ</li>\n	<li>Xuất xứ: &Yacute;</li>\n	<li>V&ugrave;ng sản xuất: Puglia</li>\n	<li>Ph&acirc;n hạng: IGT (Indicazione Geografica Tipica)</li>\n	<li>Giống nho: Primitivo</li>\n	<li>Dung t&iacute;ch: 750ml</li>\n	<li>Độ mạnh cồn: 16% vol</li>\n</ul>\n', '2023-11-08', 1850000, 200000, 'marc jacobs lola - 50ml.jpg', NULL, 0, 20, '', 0, 1),
(51, 22, 1, 'HIGHLAND PARK 1984 - 37 NĂM GM', '', '2023-11-29', 2560000, 2110000, '8ph.jpg', NULL, 0, 21, '', 0, 1),
(57, 16, 2, 'JOHNNIE WALKER BLUE - RABBIT 2023', '', '2023-11-29', 1000000, 2000000, 'p55h.jpg', NULL, 0, 0, '', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham_comment`
--

CREATE TABLE `sanpham_comment` (
  `id_comment` int(11) NOT NULL,
  `idSP` int(11) NOT NULL,
  `hoten` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `tieude` varchar(200) NOT NULL,
  `noidung` text NOT NULL,
  `ngay_comment` date DEFAULT NULL,
  `kiem_duyet` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham_comment`
--

INSERT INTO `sanpham_comment` (`id_comment`, `idSP`, `hoten`, `email`, `tieude`, `noidung`, `ngay_comment`, `kiem_duyet`) VALUES
(6, 4, 'admin', '', '', '<p>Mua ủng hộ gi&ugrave;m shop nha mọi người!!</p>\r\n', '2023-12-03', 1),
(7, 9, 'Phước', '', '', '<p>N&agrave;y ngon n&egrave;</p>\r\n', '2023-12-03', 1),
(8, 3, 'phuocc', '', '', '<p>rượu n&agrave;y ngon</p>\r\n', '2023-12-04', 1),
(11, 25, 'phuocc', '', '', '<p>asd</p>\r\n', '2023-12-04', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham_hinh`
--

CREATE TABLE `sanpham_hinh` (
  `id_hinh` int(11) NOT NULL,
  `idSP` int(11) NOT NULL,
  `urlHinh` varchar(150) NOT NULL,
  `anhien` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham_hinh`
--

INSERT INTO `sanpham_hinh` (`id_hinh`, `idSP`, `urlHinh`, `anhien`) VALUES
(1, 2, '2.jpg', 1),
(2, 2, 'Domaine-Terra-Noe-Rouge_1.jpg', 1),
(7, 4, '32.jpg', 1),
(8, 4, '3.jpg', 1),
(9, 4, '31.jpg', 1),
(10, 5, '6.jpg', 1),
(11, 5, 'terra.jpg', 1),
(12, 5, 'esprit_de_noe.jpg', 1),
(13, 6, 'Dior Sauvage Men_2.PNG', 1),
(14, 6, 'Dior Sauvage Men_3.PNG', 1),
(15, 6, 'Dior Sauvage Men_4.PNG', 1),
(16, 7, '7.jpg', 1),
(17, 7, '71.jpg', 1),
(18, 7, '72.jpg', 1),
(19, 8, '8.jpg', 1),
(20, 9, '9.jpg', 1),
(21, 9, '91.jpg', 1),
(22, 9, '92.jpg', 1),
(23, 10, '101.jpg', 1),
(24, 10, '10.jpg', 1),
(25, 10, '102.jpg', 1),
(26, 10, '103.jpg', 1),
(27, 11, '11.jpg', 1),
(28, 11, '112.jpg', 1),
(29, 11, '114.jpg', 1),
(30, 11, '113.jpg', 1),
(31, 11, '115.jpg', 1),
(32, 12, '1l_1.jpg', 1),
(33, 12, '1l_2.jpg', 1),
(34, 13, '131.jpg', 1),
(35, 14, '14.jpg', 1),
(36, 14, '141.jpg', 1),
(37, 15, '155.jpg', 1),
(38, 15, '152.jpg', 1),
(39, 15, '150.jpg', 1),
(40, 15, '157.jpg', 1),
(41, 16, '161.jpg', 1),
(42, 16, '162.jpg', 1),
(43, 16, '163.jpg', 1),
(44, 17, '171.jpg', 1),
(45, 17, '17.jpg', 1),
(46, 17, '172.jpg', 1),
(47, 18, '18.jpg', 1),
(48, 18, '181.jpg', 1),
(49, 18, '182.jpg', 1),
(50, 19, '19.jpg', 1),
(51, 19, '191.jpg', 1),
(52, 19, '19.jpg', 1),
(53, 20, '15.jpg', 1),
(54, 20, '201.jpg', 1),
(55, 21, '151.jpg', 1),
(56, 21, '211.jpg', 1),
(57, 21, '151.jpg', 1),
(58, 22, '22.jpg', 1),
(59, 22, '221.jpg', 1),
(60, 23, '23.jpg', 1),
(61, 23, '231.jpg', 1),
(62, 23, '232.jpg', 1),
(63, 24, '242.jpg', 1),
(64, 25, 'BIADUVEL666.jpg', 1),
(65, 25, 'bia666.jpg', 1),
(66, 25, 'BIADUVEL666.jpg', 1),
(67, 25, 'bia666.jpg', 1),
(68, 26, '261.jpg', 1),
(69, 26, '263.jpg', 1),
(70, 27, 'Hermes Terre D\'Hermes Giftset 3PC_2.PNG', 1),
(71, 27, 'Hermes Terre D\'Hermes Giftset 3PC_3.PNG', 1),
(72, 27, 'Hermes Terre D\'Hermes Giftset 3PC_4.PNG', 1),
(73, 28, '281.jpg', 1),
(74, 28, '282.jpg', 1),
(75, 29, 'Jo Malon Peony & Blush Suede Cologne_3.PNG', 1),
(76, 30, '301.jpg', 1),
(77, 31, '310.jpg', 1),
(78, 31, '311.jpg', 1),
(79, 32, '321.jpg', 1),
(80, 32, '322.jpg', 1),
(81, 32, '323.jpg', 1),
(82, 33, '331.jpg', 1),
(83, 33, '332.jpg', 1),
(84, 33, '333.jpg', 1),
(85, 34, '341.jpg', 1),
(86, 35, '350.jpg', 1),
(87, 35, '351.jpg', 1),
(88, 35, '352.jpg', 1),
(89, 35, '353.jpg', 1),
(90, 35, '354.jpg', 1),
(91, 36, 'Penhaligon\'s Portraits The Duke_2.PNG', 1),
(92, 36, 'Penhaligon\'s Portraits The Duke_3.PNG', 1),
(93, 36, 'Penhaligon\'s Portraits The Duke_4.PNG', 1),
(94, 36, 'Penhaligon\'s Portraits The Duke_5.PNG', 1),
(95, 37, '371.jpg', 1),
(96, 37, '372.jpg', 1),
(97, 37, '370.jpg', 1),
(98, 38, '380.jpg', 1),
(99, 38, '382.jpg', 1),
(100, 39, '391.jpg', 1),
(101, 39, '392.jpg', 1),
(102, 40, 'nuoc-hoa-nam-blue-de-chanel-pour-home-edp-100ml-1.jpg', 1),
(103, 41, 'p24.jpg', 1),
(104, 41, 'p25.jpg', 1),
(105, 41, 'p26.jpg', 1),
(106, 42, 'p28.jpg', 1),
(107, 42, 'p29.jpg', 1),
(108, 42, 'p30.jpg', 1),
(109, 42, 'p33.jpg', 1),
(110, 43, 'p36.jpg', 1),
(111, 43, 'p35.jpg', 1),
(112, 43, 'p37.jpg', 1),
(113, 43, 'p38.jpg', 1),
(114, 44, 'p40.jpg', 1),
(115, 44, 'p41.jpg', 1),
(116, 44, 'p42.jpg', 1),
(117, 44, 'p43.jpg', 1),
(118, 45, 'p44.jpg', 1),
(119, 45, '1ph_1.jpg', 1),
(120, 45, '1ph_2.jpg', 1),
(122, 46, 'Byredo Rose Noir_1.PNG', 1),
(121, 45, '1ph_3.jpg', 1),
(123, 46, 'Byredo Rose Noir_2.PNG', 1),
(124, 46, 'Byredo Rose Noir_3.PNG', 1),
(125, 46, 'Byredo Rose Noir_4.PNG', 1),
(147, 47, '3ph_1.jpg', 1),
(148, 47, '3ph_2.jpg', 1),
(149, 47, '3ph_3.jpg', 1),
(150, 48, 'Chanel Allure Homme Sport Eau Extreme Men_3.png', 1),
(151, 48, 'Chanel Allure Homme Sport Eau Extreme Men_2.png', 1),
(152, 49, '5ph_1.jpg', 1),
(153, 49, '5ph_2.jpg', 1),
(154, 49, '5ph_3.jpg', 1),
(155, 50, '2ph_1.jpg', 1),
(156, 50, '2ph_2.jpg', 1),
(157, 50, '2ph_3.jpg', 1),
(158, 50, '2ph_4.jpg', 1),
(159, 51, '8ph_1.jpg', 1),
(160, 51, '8ph_2.jpg', 1),
(161, 51, '8ph_3.jpg', 1),
(162, 51, '8ph_4.jpg', 1),
(163, 52, '6ph_1.jpg', 1),
(164, 3, '1.jpg', 1),
(165, 3, 'terra.jpg', 1),
(166, 52, '6ph_2.jpg', 1),
(168, 54, '5phl.jpg', 1),
(169, 54, '6phh.jpg', 1),
(170, 54, '89ph.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `HoTen` varchar(30) DEFAULT NULL,
  `HoTenK` varchar(50) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `DiaChi` varchar(100) DEFAULT NULL,
  `DienThoai` varchar(12) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `NgayDangKy` datetime DEFAULT NULL,
  `idGroup` tinyint(4) DEFAULT 2,
  `randomkey` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`idUser`, `HoTen`, `HoTenK`, `Password`, `DiaChi`, `DienThoai`, `Email`, `NgayDangKy`, `idGroup`, `randomkey`) VALUES
(0, 'Khach', 'Khách', NULL, NULL, NULL, NULL, NULL, 3, 'abc'),
(1, 'admin', 'PERFUME STORE', '202cb962ac59075b964b07152d234b70', '40 Lưu Văn Việt, P.2, Tp.Vĩnh Long, Vĩnh Long', '0848433319', 'perfumestore@gmail.com', '2023-11-06 01:44:09', 1, 'abc'),
(11, 'Phước', 'Nguyễn Tấn Phước', '202cb962ac59075b964b07152d234b70', 'Vĩnh Long', '0123456789', 'phuoc@gmail.com', '2023-11-06 01:44:09', 4, 'abc'),
(15, 'loc', 'Nguyen Thanh Loc', '202cb962ac59075b964b07152d234b70', 'á', '808944456', 'loc@loc', '2023-11-06 01:44:09', 4, 'abc'),
(17, 'bum', 'tran hoang loc', '202cb962ac59075b964b07152d234b70', 'vinh long', '0939900613', 'tranhoangloc345@gmail.com', '2023-11-08 06:47:04', 2, 'abc'),
(18, 'phuocc', 'Phước Nguyễn', 'd88d534bab393b152aa84cc354e59e98', 'Vĩnh Long', '0834002972', 'pn6172345@gmail.com', '2023-12-03 10:56:39', 2, 'abc');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`idBV`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`idDH`);

--
-- Chỉ mục cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD PRIMARY KEY (`idDH`,`idSP`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`idKM`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`idL`);

--
-- Chỉ mục cho bảng `nhanhieu`
--
ALTER TABLE `nhanhieu`
  ADD PRIMARY KEY (`idNH`);

--
-- Chỉ mục cho bảng `phuongthucgiaohang`
--
ALTER TABLE `phuongthucgiaohang`
  ADD PRIMARY KEY (`idGH`);

--
-- Chỉ mục cho bảng `phuongthucthanhtoan`
--
ALTER TABLE `phuongthucthanhtoan`
  ADD PRIMARY KEY (`idPTTT`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idSP`);

--
-- Chỉ mục cho bảng `sanpham_comment`
--
ALTER TABLE `sanpham_comment`
  ADD PRIMARY KEY (`id_comment`);

--
-- Chỉ mục cho bảng `sanpham_hinh`
--
ALTER TABLE `sanpham_hinh`
  ADD PRIMARY KEY (`id_hinh`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `idBV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `idKM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `idL` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `nhanhieu`
--
ALTER TABLE `nhanhieu`
  MODIFY `idNH` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `phuongthucgiaohang`
--
ALTER TABLE `phuongthucgiaohang`
  MODIFY `idGH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `phuongthucthanhtoan`
--
ALTER TABLE `phuongthucthanhtoan`
  MODIFY `idPTTT` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idSP` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT cho bảng `sanpham_comment`
--
ALTER TABLE `sanpham_comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `sanpham_hinh`
--
ALTER TABLE `sanpham_hinh`
  MODIFY `id_hinh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
