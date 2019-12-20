-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 18, 2019 at 11:33 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `truyen`
--

-- --------------------------------------------------------

--
-- Table structure for table `baoloi`
--

DROP TABLE IF EXISTS `baoloi`;
CREATE TABLE IF NOT EXISTS `baoloi` (
  `sobaocao` int(11) NOT NULL AUTO_INCREMENT,
  `memberID` int(11) NOT NULL,
  `chapID` int(11) NOT NULL,
  `comicID` int(11) NOT NULL,
  `ngaybao` datetime NOT NULL,
  `noidung` mediumtext NOT NULL,
  PRIMARY KEY (`sobaocao`,`memberID`,`chapID`,`comicID`) USING BTREE,
  KEY `chapID` (`chapID`) USING BTREE,
  KEY `comicID` (`comicID`) USING BTREE,
  KEY `memberID` (`memberID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `chuong`
--

DROP TABLE IF EXISTS `chuong`;
CREATE TABLE IF NOT EXISTS `chuong` (
  `chapID` int(11) NOT NULL AUTO_INCREMENT,
  `comicID` int(11) NOT NULL,
  `sochuong` varchar(100) NOT NULL,
  `tenchuong` varchar(100) DEFAULT NULL,
  `ngaydang` date NOT NULL,
  `url` varchar(1000) NOT NULL,
  PRIMARY KEY (`chapID`,`comicID`) USING BTREE,
  KEY `comicID` (`comicID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `chuong`
--

INSERT INTO `chuong` (`chapID`, `comicID`, `sochuong`, `tenchuong`, `ngaydang`, `url`) VALUES
(9, 11, '1', 'ra đảo', '2019-12-18', 'blog-post.jpg blog-post2.jpg blog-post3.jpg blog-post4.jpg blog-post-small.jpg blog-secondary.jpg bootstrap.jpg imac.png ipad.png iphone.png logo.png macbook.png partner1.png partner2.png partner3.png partner4.png partner5.png partner6.png recent_post1.jpg recent_post2.jpg'),
(10, 6, '1', 'Cruelty', '2019-12-04', '1.jpg 2.jpg 3.jpg 4.jpg 5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hoptruyen`
--

DROP TABLE IF EXISTS `hoptruyen`;
CREATE TABLE IF NOT EXISTS `hoptruyen` (
  `boxID` int(11) NOT NULL AUTO_INCREMENT,
  `memberID` int(11) NOT NULL,
  PRIMARY KEY (`boxID`) USING BTREE,
  KEY `memberID` (`memberID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `luutruyen`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `mem_team`
--

DROP TABLE IF EXISTS `mem_team`;
CREATE TABLE IF NOT EXISTS `mem_team` (
  `memberID` int(11) NOT NULL,
  `teamID` int(11) NOT NULL,
  `vaitro` varchar(100) NOT NULL,
  PRIMARY KEY (`memberID`,`teamID`) USING BTREE,
  KEY `teamID` (`teamID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `nhom`
--

DROP TABLE IF EXISTS `nhom`;
CREATE TABLE IF NOT EXISTS `nhom` (
  `teamID` int(11) NOT NULL AUTO_INCREMENT,
  `tennhom` varchar(50) NOT NULL,
  `motanhom` mediumtext NOT NULL,
  PRIMARY KEY (`teamID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `nhom`
--

INSERT INTO `nhom` (`teamID`, `tennhom`, `motanhom`) VALUES
(1, 'Nguyễn Hoàng Thái', 'aaa'),
(2, 'Trần Lập Dũ', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `phanhoi`
--

DROP TABLE IF EXISTS `phanhoi`;
CREATE TABLE IF NOT EXISTS `phanhoi` (
  `sophanhoi` int(11) NOT NULL AUTO_INCREMENT,
  `memberID` int(11) NOT NULL,
  `adminID` int(11) NOT NULL,
  `noidung` mediumtext NOT NULL,
  PRIMARY KEY (`sophanhoi`,`memberID`,`adminID`) USING BTREE,
  KEY `adminID` (`adminID`) USING BTREE,
  KEY `memberID` (`memberID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `quantrivien`
--

DROP TABLE IF EXISTS `quantrivien`;
CREATE TABLE IF NOT EXISTS `quantrivien` (
  `adminID` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(100) NOT NULL,
  `sdt` varchar(11) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `vaitro` int(5) NOT NULL,
  PRIMARY KEY (`adminID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `quocgia`
--

DROP TABLE IF EXISTS `quocgia`;
CREATE TABLE IF NOT EXISTS `quocgia` (
  `countryID` int(11) NOT NULL AUTO_INCREMENT,
  `quocgia` varchar(30) NOT NULL,
  PRIMARY KEY (`countryID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `quocgia`
--

INSERT INTO `quocgia` (`countryID`, `quocgia`) VALUES
(1, 'Hàn Quốc'),
(2, 'Nhật Bản'),
(3, 'Trung Quốc');

-- --------------------------------------------------------

--
-- Table structure for table `tacgia`
--

DROP TABLE IF EXISTS `tacgia`;
CREATE TABLE IF NOT EXISTS `tacgia` (
  `authorID` int(11) NOT NULL AUTO_INCREMENT,
  `tacgia` varchar(50) NOT NULL,
  PRIMARY KEY (`authorID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tacgia`
--

INSERT INTO `tacgia` (`authorID`, `tacgia`) VALUES
(1, 'Gotouge Koyoharu'),
(2, 'Paru Itagaki'),
(3, 'Horikoshi Kohei'),
(4, 'Fuse'),
(5, 'Honobu Yonezawa'),
(7, 'Eiichiro Oda'),
(8, 'Trịnh Kiện Hoà - Đặng Chí Huy'),
(9, 'thai'),
(10, 'Tran Lap Du');

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `thanhvien`
--

INSERT INTO `thanhvien` (`memberID`, `username`, `name`, `sdt`, `pass`, `email`, `avatar`) VALUES
(2, 'kfc30000', NULL, NULL, 'b835b1b81316272bba1d1808a899d62a55055215', 'tranlapdu2@gmail.com', 'guest.png'),
(3, 'megadark', NULL, NULL, '299129b6ca094e4621e97d763f754a69fd436789', 'thai2719@gmail.com', 'guest.png');

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

DROP TABLE IF EXISTS `theloai`;
CREATE TABLE IF NOT EXISTS `theloai` (
  `tagID` int(11) NOT NULL AUTO_INCREMENT,
  `theloai` varchar(50) NOT NULL,
  PRIMARY KEY (`tagID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`tagID`, `theloai`) VALUES
(1, 'Hành động'),
(2, 'Phiêu lưu'),
(3, 'Đời thường'),
(4, 'Chuyển sinh');

-- --------------------------------------------------------

--
-- Table structure for table `theloai_truyen`
--

DROP TABLE IF EXISTS `theloai_truyen`;
CREATE TABLE IF NOT EXISTS `theloai_truyen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tagID` int(11) NOT NULL,
  `comicID` int(11) NOT NULL,
  PRIMARY KEY (`id`,`tagID`,`comicID`) USING BTREE,
  KEY `comicID` (`comicID`) USING BTREE,
  KEY `tagID` (`tagID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `theloai_truyen`
--

INSERT INTO `theloai_truyen` (`id`, `tagID`, `comicID`) VALUES
(20, 2, 5),
(19, 1, 6),
(18, 3, 7),
(17, 1, 8),
(16, 4, 9),
(15, 3, 10),
(14, 2, 11);

-- --------------------------------------------------------

--
-- Table structure for table `truyen`
--

DROP TABLE IF EXISTS `truyen`;
CREATE TABLE IF NOT EXISTS `truyen` (
  `comicID` int(11) NOT NULL AUTO_INCREMENT,
  `tentruyen` varchar(100) NOT NULL,
  `mota` mediumtext NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `truyen`
--

INSERT INTO `truyen` (`comicID`, `tentruyen`, `mota`, `trangthai`, `luotxem`, `countryID`, `authorID`, `teamID`, `cover`) VALUES
(5, 'Tây Du', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 2, 0, 3, 8, 2, 'tay-du.jpg'),
(6, 'Kimetsu no Yaiba', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 1, 4123, 2, 1, 1, 'kimetsu-no-yaiba.jpg'),
(7, 'Beastars', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 1, 12314, 2, 2, 1, 'beastars.jpg'),
(8, 'Boku no Hero Academia', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 1, 0, 2, 3, 1, 'hero.png'),
(9, 'Tensei Shitara Slime Datta Ken', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 1, 0, 2, 4, 2, 'slime.jpg'),
(10, 'Hyouka', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 2, 0, 2, 5, 2, 'hyouka.jpg'),
(11, 'One Piece', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 1, 0, 2, 7, 2, 'one-piece.jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baoloi`
--
ALTER TABLE `baoloi`
  ADD CONSTRAINT `baoloi_ibfk_1` FOREIGN KEY (`chapID`) REFERENCES `chuong` (`chapID`),
  ADD CONSTRAINT `baoloi_ibfk_2` FOREIGN KEY (`comicID`) REFERENCES `truyen` (`comicID`),
  ADD CONSTRAINT `baoloi_ibfk_3` FOREIGN KEY (`memberID`) REFERENCES `thanhvien` (`memberID`);

--
-- Constraints for table `chuong`
--
ALTER TABLE `chuong`
  ADD CONSTRAINT `chuong_ibfk_1` FOREIGN KEY (`comicID`) REFERENCES `truyen` (`comicID`);

--
-- Constraints for table `hoptruyen`
--
ALTER TABLE `hoptruyen`
  ADD CONSTRAINT `hoptruyen_ibfk_1` FOREIGN KEY (`memberID`) REFERENCES `thanhvien` (`memberID`);

--
-- Constraints for table `luutruyen`
--
ALTER TABLE `luutruyen`
  ADD CONSTRAINT `luutruyen_ibfk_1` FOREIGN KEY (`chapID`) REFERENCES `chuong` (`chapID`),
  ADD CONSTRAINT `luutruyen_ibfk_2` FOREIGN KEY (`comicID`) REFERENCES `truyen` (`comicID`),
  ADD CONSTRAINT `luutruyen_ibfk_3` FOREIGN KEY (`memberID`) REFERENCES `thanhvien` (`memberID`),
  ADD CONSTRAINT `luutruyen_ibfk_4` FOREIGN KEY (`boxID`) REFERENCES `hoptruyen` (`boxID`);

--
-- Constraints for table `mem_team`
--
ALTER TABLE `mem_team`
  ADD CONSTRAINT `mem_team_ibfk_1` FOREIGN KEY (`memberID`) REFERENCES `thanhvien` (`memberID`),
  ADD CONSTRAINT `mem_team_ibfk_2` FOREIGN KEY (`teamID`) REFERENCES `nhom` (`teamID`);

--
-- Constraints for table `phanhoi`
--
ALTER TABLE `phanhoi`
  ADD CONSTRAINT `phanhoi_ibfk_1` FOREIGN KEY (`adminID`) REFERENCES `quantrivien` (`adminID`),
  ADD CONSTRAINT `phanhoi_ibfk_2` FOREIGN KEY (`memberID`) REFERENCES `thanhvien` (`memberID`);

--
-- Constraints for table `theloai_truyen`
--
ALTER TABLE `theloai_truyen`
  ADD CONSTRAINT `theloai_truyen_ibfk_1` FOREIGN KEY (`comicID`) REFERENCES `truyen` (`comicID`),
  ADD CONSTRAINT `theloai_truyen_ibfk_2` FOREIGN KEY (`tagID`) REFERENCES `theloai` (`tagID`);

--
-- Constraints for table `truyen`
--
ALTER TABLE `truyen`
  ADD CONSTRAINT `truyen_ibfk_2` FOREIGN KEY (`authorID`) REFERENCES `tacgia` (`authorID`),
  ADD CONSTRAINT `truyen_ibfk_3` FOREIGN KEY (`countryID`) REFERENCES `quocgia` (`countryID`),
  ADD CONSTRAINT `truyen_ibfk_4` FOREIGN KEY (`teamID`) REFERENCES `nhom` (`teamID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
