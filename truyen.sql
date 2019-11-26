-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 25, 2019 lúc 02:22 PM
-- Phiên bản máy phục vụ: 5.7.26
-- Phiên bản PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `truyen`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chapter`
--

DROP TABLE IF EXISTS `chapter`;
CREATE TABLE IF NOT EXISTS `chapter` (
  `id_chuong` int(11) NOT NULL,
  `comic_id` int(11) NOT NULL,
  `ten_chuong` varchar(128) NOT NULL,
  `anh` varchar(128) NOT NULL,
  PRIMARY KEY (`id_chuong`),
  UNIQUE KEY `comic_id` (`comic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiet_truyen`
--

DROP TABLE IF EXISTS `chitiet_truyen`;
CREATE TABLE IF NOT EXISTS `chitiet_truyen` (
  `comic_detail_id` int(50) NOT NULL AUTO_INCREMENT,
  `the_loai` varchar(128) NOT NULL,
  PRIMARY KEY (`comic_detail_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `chitiet_truyen`
--

INSERT INTO `chitiet_truyen` (`comic_detail_id`, `the_loai`) VALUES
(4, 'hanhdong'),
(5, 'phieuluu'),
(6, 'vientuong');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comic_box`
--

DROP TABLE IF EXISTS `comic_box`;
CREATE TABLE IF NOT EXISTS `comic_box` (
  `comic_box_id` int(11) NOT NULL,
  `comic_id` int(8) NOT NULL,
  `ten_truyen` varchar(128) NOT NULL,
  `chuong_cuoi` int(128) NOT NULL,
  `ngay_dang` date NOT NULL,
  `tinh_trang` int(4) NOT NULL,
  PRIMARY KEY (`comic_box_id`),
  KEY `comic_id` (`comic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sub_team`
--

DROP TABLE IF EXISTS `sub_team`;
CREATE TABLE IF NOT EXISTS `sub_team` (
  `nhom_id` int(7) NOT NULL,
  `user_id` int(7) NOT NULL,
  `ten_nhom` varchar(128) NOT NULL,
  `comic_box_id` int(11) NOT NULL,
  PRIMARY KEY (`nhom_id`),
  KEY `user_id` (`user_id`),
  KEY `comic_box_id` (`comic_box_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `truyen`
--

DROP TABLE IF EXISTS `truyen`;
CREATE TABLE IF NOT EXISTS `truyen` (
  `comic_id` int(11) NOT NULL,
  `ten_truyen` varchar(128) NOT NULL,
  `tinh_trang` int(4) NOT NULL,
  `mota` text NOT NULL,
  `danh_gia` int(10) DEFAULT NULL,
  `comic_detail_id` int(11) NOT NULL,
  `nhom_id` int(11) NOT NULL,
  `tacgia` varchar(255) NOT NULL,
  PRIMARY KEY (`comic_id`),
  KEY `comic_detail_id` (`comic_detail_id`),
  KEY `nhom_id` (`nhom_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(7) NOT NULL AUTO_INCREMENT,
  `nhom_id` int(11) DEFAULT NULL,
  `username` varchar(32) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(16) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `nhom_id` (`nhom_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `nhom_id`, `username`, `email`, `password`) VALUES
(0, NULL, 'kfc300', 'eae@', '123456'),
(5, NULL, 'kfc30000', 'tranlapdu2@gmail.com', '12345678'),
(6, NULL, 'kfc300004', 'tranlapdu2@gmail.com', '12345'),
(7, NULL, 'kfc300004', 'tranlapdu2@gmail.com', '123'),
(8, NULL, '23411234', 'tranlapdu2@gmail.com', '123'),
(9, NULL, '23411234', 'tranlapdu2@gmail.com', '12345'),
(10, NULL, '23411234', 'tranlapdu2@gmail.com', '12345'),
(11, NULL, '23411234', 'tranlapdu2@gmail.com', '12345');

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chapter`
--
ALTER TABLE `chapter`
  ADD CONSTRAINT `chapter_ibfk_1` FOREIGN KEY (`comic_id`) REFERENCES `truyen` (`comic_id`);

--
-- Các ràng buộc cho bảng `sub_team`
--
ALTER TABLE `sub_team`
  ADD CONSTRAINT `sub_team_ibfk_1` FOREIGN KEY (`comic_box_id`) REFERENCES `comic_box` (`comic_box_id`);

--
-- Các ràng buộc cho bảng `truyen`
--
ALTER TABLE `truyen`
  ADD CONSTRAINT `truyen_ibfk_4` FOREIGN KEY (`comic_detail_id`) REFERENCES `chitiet_truyen` (`comic_detail_id`),
  ADD CONSTRAINT `truyen_ibfk_5` FOREIGN KEY (`nhom_id`) REFERENCES `sub_team` (`nhom_id`);

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`nhom_id`) REFERENCES `sub_team` (`nhom_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
