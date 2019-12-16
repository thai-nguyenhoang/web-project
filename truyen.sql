CREATE TABLE `baoloi`  (
  `sobaocao` int(11) NOT NULL AUTO_INCREMENT,
  `memberID` int(11) NOT NULL,
  `chapID` int(11) NOT NULL,
  `comicID` int(11) NOT NULL,
  `ngaybao` datetime(0) NOT NULL,
  `noidung` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`sobaocao`, `memberID`, `chapID`, `comicID`) USING BTREE,
  INDEX `chapID`(`chapID`) USING BTREE,
  INDEX `comicID`(`comicID`) USING BTREE,
  INDEX `memberID`(`memberID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

CREATE TABLE `chuong`  (
  `chapID` int(11) NOT NULL AUTO_INCREMENT,
  `comicID` int(11) NOT NULL,
  `ten` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ngaydang` date NOT NULL,
  `url` longblob NOT NULL,
  PRIMARY KEY (`chapID`, `comicID`) USING BTREE,
  INDEX `comicID`(`comicID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

CREATE TABLE `hoptruyen`  (
  `boxID` int(11) NOT NULL AUTO_INCREMENT,
  `memberID` int(11) NOT NULL,
  PRIMARY KEY (`boxID`) USING BTREE,
  INDEX(`memberID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

CREATE TABLE `luutruyen`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `boxID` int(11) NOT NULL,
  `comicID` int(11) NOT NULL,
  `memberID` int(11) NOT NULL,
  `chapID` int(11) NOT NULL,
  PRIMARY KEY (`id`, `boxID`, `comicID`, `memberID`, `chapID`) USING BTREE,
  INDEX `chapID`(`chapID`) USING BTREE,
  INDEX `comicID`(`comicID`) USING BTREE,
  INDEX `memberID`(`memberID`) USING BTREE,
  INDEX `boxID`(`boxID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

CREATE TABLE `mem_team`  (
  `memberID` int(11) NOT NULL,
  `teamID` int(11) NOT NULL,
  `vaitro` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`memberID`, `teamID`) USING BTREE,
  INDEX `teamID`(`teamID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

CREATE TABLE `nhom`  (
  `teamID` int(11) NOT NULL AUTO_INCREMENT,
  `tennhom` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `mota` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`teamID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

CREATE TABLE `phanhoi`  (
  `sophanhoi` int(11) NOT NULL AUTO_INCREMENT,
  `memberID` int(11) NOT NULL,
  `adminID` int(11) NOT NULL,
  `noidung` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`sophanhoi`, `memberID`, `adminID`) USING BTREE,
  INDEX `adminID`(`adminID`) USING BTREE,
  INDEX `memberID`(`memberID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

CREATE TABLE `quantrivien`  (
  `adminID` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sdt` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pass` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `vaitro` int(5) NOT NULL,
  PRIMARY KEY (`adminID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

CREATE TABLE `quocgia`  (
  `countryID` int(11) NOT NULL AUTO_INCREMENT,
  `quocgia` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`countryID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

CREATE TABLE `tacgia`  (
  `authorID` int(11) NOT NULL AUTO_INCREMENT,
  `tacgia` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`authorID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

CREATE TABLE `thanhvien`  (
  `memberID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sdt` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pass` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `url` blob NOT NULL,
  PRIMARY KEY (`memberID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

CREATE TABLE `theloai`  (
  `tagID` int(11) NOT NULL AUTO_INCREMENT,
  `theloai` int(11) NOT NULL,
  PRIMARY KEY (`tagID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

CREATE TABLE `theloai_truyen`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tagID` int(11) NOT NULL,
  `comicID` int(11) NOT NULL,
  PRIMARY KEY (`id`, `tagID`, `comicID`) USING BTREE,
  INDEX `comicID`(`comicID`) USING BTREE,
  INDEX `tagID`(`tagID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

CREATE TABLE `truyen`  (
  `comicID` int(11) NOT NULL AUTO_INCREMENT,
  `tentruyen` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `mota` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `trangthai` int(3) NOT NULL,
  `luotxem` int(11) NOT NULL,
  `adminID` int(11) NOT NULL,
  `countryID` int(11) NOT NULL,
  `authorID` int(11) NOT NULL,
  `teamID` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`comicID`) USING BTREE,
  INDEX `adminID`(`adminID`) USING BTREE,
  INDEX `authorID`(`authorID`) USING BTREE,
  INDEX `countryID`(`countryID`) USING BTREE,
  INDEX `teamID`(`teamID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

ALTER TABLE `baoloi` ADD CONSTRAINT `baoloi_ibfk_1` FOREIGN KEY (`chapID`) REFERENCES `chuong` (`chapID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `baoloi` ADD CONSTRAINT `baoloi_ibfk_2` FOREIGN KEY (`comicID`) REFERENCES `truyen` (`comicID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `baoloi` ADD CONSTRAINT `baoloi_ibfk_3` FOREIGN KEY (`memberID`) REFERENCES `thanhvien` (`memberID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `chuong` ADD CONSTRAINT `chuong_ibfk_1` FOREIGN KEY (`comicID`) REFERENCES `truyen` (`comicID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `hoptruyen` ADD FOREIGN KEY (`memberID`) REFERENCES `thanhvien` (`memberID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `luutruyen` ADD CONSTRAINT `luutruyen_ibfk_1` FOREIGN KEY (`chapID`) REFERENCES `chuong` (`chapID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `luutruyen` ADD CONSTRAINT `luutruyen_ibfk_2` FOREIGN KEY (`comicID`) REFERENCES `truyen` (`comicID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `luutruyen` ADD CONSTRAINT `luutruyen_ibfk_3` FOREIGN KEY (`memberID`) REFERENCES `thanhvien` (`memberID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `luutruyen` ADD CONSTRAINT `luutruyen_ibfk_4` FOREIGN KEY (`boxID`) REFERENCES `hoptruyen` (`boxID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `mem_team` ADD CONSTRAINT `mem_team_ibfk_1` FOREIGN KEY (`memberID`) REFERENCES `thanhvien` (`memberID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `mem_team` ADD CONSTRAINT `mem_team_ibfk_2` FOREIGN KEY (`teamID`) REFERENCES `nhom` (`teamID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `phanhoi` ADD CONSTRAINT `phanhoi_ibfk_1` FOREIGN KEY (`adminID`) REFERENCES `quantrivien` (`adminID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `phanhoi` ADD CONSTRAINT `phanhoi_ibfk_2` FOREIGN KEY (`memberID`) REFERENCES `thanhvien` (`memberID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `theloai_truyen` ADD CONSTRAINT `theloai_truyen_ibfk_1` FOREIGN KEY (`comicID`) REFERENCES `truyen` (`comicID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `theloai_truyen` ADD CONSTRAINT `theloai_truyen_ibfk_2` FOREIGN KEY (`tagID`) REFERENCES `theloai` (`tagID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `truyen` ADD CONSTRAINT `truyen_ibfk_1` FOREIGN KEY (`adminID`) REFERENCES `quantrivien` (`adminID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `truyen` ADD CONSTRAINT `truyen_ibfk_2` FOREIGN KEY (`authorID`) REFERENCES `tacgia` (`authorID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `truyen` ADD CONSTRAINT `truyen_ibfk_3` FOREIGN KEY (`countryID`) REFERENCES `quocgia` (`countryID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `truyen` ADD CONSTRAINT `truyen_ibfk_4` FOREIGN KEY (`teamID`) REFERENCES `nhom` (`teamID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

