-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th12 17, 2019 lúc 02:40 PM
-- Phiên bản máy phục vụ: 5.7.26
-- Phiên bản PHP: 7.3.5

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
-- Cấu trúc bảng cho bảng `baoloi`
--

DROP TABLE IF EXISTS `baoloi`;
CREATE TABLE IF NOT EXISTS `baoloi` (
  `sobaocao` int(11) NOT NULL AUTO_INCREMENT,
  `memberID` int(11) NOT NULL,
  `chapID` int(11) NOT NULL,
  `comicID` int(11) NOT NULL,
  `ngaybao` datetime NOT NULL,
  `noidung` text NOT NULL,
  PRIMARY KEY (`sobaocao`,`memberID`,`chapID`,`comicID`) USING BTREE,
  KEY `chapID` (`chapID`) USING BTREE,
  KEY `comicID` (`comicID`) USING BTREE,
  KEY `memberID` (`memberID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuong`
--

DROP TABLE IF EXISTS `chuong`;
CREATE TABLE IF NOT EXISTS `chuong` (
  `chapID` int(11) NOT NULL AUTO_INCREMENT,
  `comicID` int(11) NOT NULL,
  `sochuong` varchar(100) NOT NULL,
  `ngaydang` date NOT NULL,
  `url` varchar(1000) NOT NULL,
  PRIMARY KEY (`chapID`,`comicID`) USING BTREE,
  KEY `comicID` (`comicID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `chuong`
--

INSERT INTO `chuong` (`chapID`, `comicID`, `sochuong`, `ngaydang`, `url`) VALUES
(1, 5, 'a', '2019-12-17', '1.png 2.png'),
(2, 11, '1', '2019-12-17', '0.jpg 1.jpg 2.jpg.png 3.jpg.png 4.jpg.png 5.jpg.png'),
(3, 11, '1', '2019-12-17', '0.jpg 1.jpg 2.png 3.png 4.png 5.png'),
(4, 11, '1', '2019-12-17', '0.jpg 1.jpg 2.png 3.png 4.png 5.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoptruyen`
--

DROP TABLE IF EXISTS `hoptruyen`;
CREATE TABLE IF NOT EXISTS `hoptruyen` (
  `boxID` int(11) NOT NULL AUTO_INCREMENT,
  `memberID` int(11) NOT NULL,
  PRIMARY KEY (`boxID`) USING BTREE,
  KEY `memberID` (`memberID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `luutruyen`
--

DROP TABLE IF EXISTS `luutruyen`;
CREATE TABLE IF NOT EXISTS `luutruyen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `boxID` int(11) NOT NULL,
  `comicID` int(11) NOT NULL,
  `memberID` int(11) NOT NULL,
  `chapID` int(11) NOT NULL,
  PRIMARY KEY (`id`,`boxID`,`comicID`,`memberID`,`chapID`) USING BTREE,
  KEY `chapID` (`chapID`) USING BTREE,
  KEY `comicID` (`comicID`) USING BTREE,
  KEY `memberID` (`memberID`) USING BTREE,
  KEY `boxID` (`boxID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mem_team`
--

DROP TABLE IF EXISTS `mem_team`;
CREATE TABLE IF NOT EXISTS `mem_team` (
  `memberID` int(11) NOT NULL,
  `teamID` int(11) NOT NULL,
  `vaitro` varchar(100) NOT NULL,
  PRIMARY KEY (`memberID`,`teamID`) USING BTREE,
  KEY `teamID` (`teamID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhom`
--

DROP TABLE IF EXISTS `nhom`;
CREATE TABLE IF NOT EXISTS `nhom` (
  `teamID` int(11) NOT NULL AUTO_INCREMENT,
  `tennhom` varchar(50) NOT NULL,
  `motanhom` text NOT NULL,
  PRIMARY KEY (`teamID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `nhom`
--

INSERT INTO `nhom` (`teamID`, `tennhom`, `motanhom`) VALUES
(1, 'thai', 'aaa'),
(2, 'du', 'a');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanhoi`
--

DROP TABLE IF EXISTS `phanhoi`;
CREATE TABLE IF NOT EXISTS `phanhoi` (
  `sophanhoi` int(11) NOT NULL AUTO_INCREMENT,
  `memberID` int(11) NOT NULL,
  `adminID` int(11) NOT NULL,
  `noidung` text NOT NULL,
  PRIMARY KEY (`sophanhoi`,`memberID`,`adminID`) USING BTREE,
  KEY `adminID` (`adminID`) USING BTREE,
  KEY `memberID` (`memberID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quantrivien`
--

DROP TABLE IF EXISTS `quantrivien`;
CREATE TABLE IF NOT EXISTS `quantrivien` (
  `adminID` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(100) NOT NULL,
  `sdt` varchar(11) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `vaitro` int(5) NOT NULL,
  PRIMARY KEY (`adminID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quocgia`
--

DROP TABLE IF EXISTS `quocgia`;
CREATE TABLE IF NOT EXISTS `quocgia` (
  `countryID` int(11) NOT NULL AUTO_INCREMENT,
  `quocgia` varchar(30) NOT NULL,
  PRIMARY KEY (`countryID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `quocgia`
--

INSERT INTO `quocgia` (`countryID`, `quocgia`) VALUES
(1, 'c'),
(2, 'v'),
(3, 'c'),
(4, 'v');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tacgia`
--

DROP TABLE IF EXISTS `tacgia`;
CREATE TABLE IF NOT EXISTS `tacgia` (
  `authorID` int(11) NOT NULL AUTO_INCREMENT,
  `tacgia` varchar(50) NOT NULL,
  PRIMARY KEY (`authorID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `tacgia`
--

INSERT INTO `tacgia` (`authorID`, `tacgia`) VALUES
(1, 'x'),
(2, 'y'),
(3, 'a'),
(4, 'Aaaaa'),
(5, 'v'),
(6, ''),
(7, 'eiichiro');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

DROP TABLE IF EXISTS `thanhvien`;
CREATE TABLE IF NOT EXISTS `thanhvien` (
  `memberID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `sdt` varchar(11) DEFAULT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `avatar` varchar(50) NOT NULL DEFAULT 'guest.png',
  PRIMARY KEY (`memberID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`memberID`, `username`, `name`, `sdt`, `pass`, `email`, `avatar`) VALUES
(2, 'kfc30000', NULL, NULL, 'b835b1b81316272bba1d1808a899d62a55055215', 'tranlapdu2@gmail.com', 'guest.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

DROP TABLE IF EXISTS `theloai`;
CREATE TABLE IF NOT EXISTS `theloai` (
  `tagID` int(11) NOT NULL AUTO_INCREMENT,
  `theloai` varchar(50) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`tagID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`tagID`, `theloai`) VALUES
(1, 'Hành động'),
(2, 'Phiêu lưu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai_truyen`
--

DROP TABLE IF EXISTS `theloai_truyen`;
CREATE TABLE IF NOT EXISTS `theloai_truyen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tagID` int(11) NOT NULL,
  `comicID` int(11) NOT NULL,
  PRIMARY KEY (`id`,`tagID`,`comicID`) USING BTREE,
  KEY `comicID` (`comicID`) USING BTREE,
  KEY `tagID` (`tagID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `theloai_truyen`
--

INSERT INTO `theloai_truyen` (`id`, `tagID`, `comicID`) VALUES
(1, 1, 3),
(2, 2, 3),
(3, 1, 3),
(4, 2, 3),
(5, 1, 3),
(6, 2, 3),
(7, 1, 5),
(8, 2, 5),
(9, 2, 5),
(10, 1, 10),
(11, 2, 10),
(12, 1, 11),
(13, 2, 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `truyen`
--

DROP TABLE IF EXISTS `truyen`;
CREATE TABLE IF NOT EXISTS `truyen` (
  `comicID` int(11) NOT NULL AUTO_INCREMENT,
  `tentruyen` varchar(100) NOT NULL,
  `mota` text NOT NULL,
  `trangthai` int(3) NOT NULL DEFAULT '0',
  `luotxem` int(11) NOT NULL DEFAULT '0',
  `countryID` int(11) NOT NULL,
  `authorID` int(11) DEFAULT NULL,
  `teamID` int(11) DEFAULT NULL,
  `cover` varchar(1000) NOT NULL,
  PRIMARY KEY (`comicID`) USING BTREE,
  KEY `authorID` (`authorID`) USING BTREE,
  KEY `countryID` (`countryID`) USING BTREE,
  KEY `teamID` (`teamID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `truyen`
--

INSERT INTO `truyen` (`comicID`, `tentruyen`, `mota`, `trangthai`, `luotxem`, `countryID`, `authorID`, `teamID`, `cover`) VALUES
(3, 'a', 'a', 1, 0, 1, NULL, NULL, 'http://www.onepiecepodcast.com/wp-content/uploads/2019/09/94.jpg'),
(5, 'da', 'add', 1, 0, 1, NULL, NULL, 'http://www.onepiecepodcast.com/wp-content/uploads/2019/09/94.jpg'),
(6, 'reeeeeeeeeeeee', 'asdfrew', 2, 0, 2, 3, 1, 'http://www.onepiecepodcast.com/wp-content/uploads/2019/09/94.jpg'),
(7, 'areww', 'afb', 1, 0, 2, 3, 1, 'https://vignette.wikia.nocookie.net/beastars-eng/images/7/72/Cover_Jap_01.jpg/revision/latest?cb=20190317181607'),
(8, 'frew', 'fds', 1, 0, 2, 3, 1, 'https://images-eu.ssl-images-amazon.com/images/I/811p0wfA7kL.jpg'),
(9, 'kkkkkkkk', 'fda', 1, 0, 1, 3, 1, 'https://upload.wikimedia.org/wikipedia/vi/thumb/b/ba/Pokemon_Sun_Boxart.jpg/220px-Pokemon_Sun_Boxart.jpg'),
(10, 'ahihi', 'asd', 1, 0, 1, 5, 2, 'https://i.pinimg.com/originals/15/f1/e3/15f1e3abe8645e4844ba56cfd6becc68.jpg'),
(11, 'one piece', 'one piece ne', 1, 0, 2, 7, 2, 'http://www.onepiecepodcast.com/wp-content/uploads/2019/09/94.jpg');

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `baoloi`
--
ALTER TABLE `baoloi`
  ADD CONSTRAINT `baoloi_ibfk_1` FOREIGN KEY (`chapID`) REFERENCES `chuong` (`chapID`),
  ADD CONSTRAINT `baoloi_ibfk_2` FOREIGN KEY (`comicID`) REFERENCES `truyen` (`comicID`),
  ADD CONSTRAINT `baoloi_ibfk_3` FOREIGN KEY (`memberID`) REFERENCES `thanhvien` (`memberID`);

--
-- Các ràng buộc cho bảng `chuong`
--
ALTER TABLE `chuong`
  ADD CONSTRAINT `chuong_ibfk_1` FOREIGN KEY (`comicID`) REFERENCES `truyen` (`comicID`);

--
-- Các ràng buộc cho bảng `hoptruyen`
--
ALTER TABLE `hoptruyen`
  ADD CONSTRAINT `hoptruyen_ibfk_1` FOREIGN KEY (`memberID`) REFERENCES `thanhvien` (`memberID`);

--
-- Các ràng buộc cho bảng `luutruyen`
--
ALTER TABLE `luutruyen`
  ADD CONSTRAINT `luutruyen_ibfk_1` FOREIGN KEY (`chapID`) REFERENCES `chuong` (`chapID`),
  ADD CONSTRAINT `luutruyen_ibfk_2` FOREIGN KEY (`comicID`) REFERENCES `truyen` (`comicID`),
  ADD CONSTRAINT `luutruyen_ibfk_3` FOREIGN KEY (`memberID`) REFERENCES `thanhvien` (`memberID`),
  ADD CONSTRAINT `luutruyen_ibfk_4` FOREIGN KEY (`boxID`) REFERENCES `hoptruyen` (`boxID`);

--
-- Các ràng buộc cho bảng `mem_team`
--
ALTER TABLE `mem_team`
  ADD CONSTRAINT `mem_team_ibfk_1` FOREIGN KEY (`memberID`) REFERENCES `thanhvien` (`memberID`),
  ADD CONSTRAINT `mem_team_ibfk_2` FOREIGN KEY (`teamID`) REFERENCES `nhom` (`teamID`);

--
-- Các ràng buộc cho bảng `phanhoi`
--
ALTER TABLE `phanhoi`
  ADD CONSTRAINT `phanhoi_ibfk_1` FOREIGN KEY (`adminID`) REFERENCES `quantrivien` (`adminID`),
  ADD CONSTRAINT `phanhoi_ibfk_2` FOREIGN KEY (`memberID`) REFERENCES `thanhvien` (`memberID`);

--
-- Các ràng buộc cho bảng `theloai_truyen`
--
ALTER TABLE `theloai_truyen`
  ADD CONSTRAINT `theloai_truyen_ibfk_1` FOREIGN KEY (`comicID`) REFERENCES `truyen` (`comicID`),
  ADD CONSTRAINT `theloai_truyen_ibfk_2` FOREIGN KEY (`tagID`) REFERENCES `theloai` (`tagID`);

--
-- Các ràng buộc cho bảng `truyen`
--
ALTER TABLE `truyen`
  ADD CONSTRAINT `truyen_ibfk_2` FOREIGN KEY (`authorID`) REFERENCES `tacgia` (`authorID`),
  ADD CONSTRAINT `truyen_ibfk_3` FOREIGN KEY (`countryID`) REFERENCES `quocgia` (`countryID`),
  ADD CONSTRAINT `truyen_ibfk_4` FOREIGN KEY (`teamID`) REFERENCES `nhom` (`teamID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
