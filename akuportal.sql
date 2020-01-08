/*
Navicat MySQL Data Transfer

Source Server         : localxampp3308
Source Server Version : 50505
Source Host           : localhost:3308
Source Database       : akuportal

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-07-12 10:45:36
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `application`
-- ----------------------------
DROP TABLE IF EXISTS `application`;
CREATE TABLE `application` (
  `idApplicationGuid` int(11) NOT NULL AUTO_INCREMENT,
  `idApplication` int(11) DEFAULT NULL,
  `ReviewNo` int(11) DEFAULT NULL,
  `title_of_study` varchar(255) DEFAULT NULL,
  `PID_title` varchar(255) DEFAULT NULL,
  `PID_first_name` varchar(255) DEFAULT NULL,
  `PID_surname` varchar(255) DEFAULT NULL,
  `PID_department` varchar(255) DEFAULT NULL,
  `PID_designation` varchar(255) DEFAULT NULL,
  `PID_campus` varchar(255) DEFAULT NULL,
  `PID_country` varchar(255) DEFAULT NULL,
  `PID_telephone` varchar(255) DEFAULT NULL,
  `PID_ext` varchar(255) DEFAULT NULL,
  `PID_certificate_expiry_date` varchar(255) DEFAULT NULL,
  `DCD_title` varchar(255) DEFAULT NULL,
  `DCD_first_name` varchar(255) DEFAULT NULL,
  `DCD_surname` varchar(255) DEFAULT NULL,
  `DCD_department` varchar(255) DEFAULT NULL,
  `DCD_designation` varchar(255) DEFAULT NULL,
  `DCD_campus` varchar(255) DEFAULT NULL,
  `DCD_country` varchar(255) DEFAULT NULL,
  `DCD_telephone` varchar(255) DEFAULT NULL,
  `DCD_ext` varchar(255) DEFAULT NULL,
  `DCD_certificate_expiry_date` varchar(255) DEFAULT NULL,
  `TMD_title` varchar(255) DEFAULT NULL,
  `TMD_first_name` varchar(255) DEFAULT NULL,
  `TMD_surname` varchar(255) DEFAULT NULL,
  `TMD_department` varchar(255) DEFAULT NULL,
  `TMD_designation` varchar(255) DEFAULT NULL,
  `TMD_campus` varchar(255) DEFAULT NULL,
  `TMD_country` varchar(255) DEFAULT NULL,
  `TMD_telephone` varchar(255) DEFAULT NULL,
  `TMD_ext` varchar(255) DEFAULT NULL,
  `TMD_certificate_expiry_date` varchar(255) DEFAULT NULL,
  `study_part` varchar(10) DEFAULT NULL,
  `study_part_options` varchar(255) DEFAULT NULL,
  `study_part_other` varchar(255) DEFAULT NULL,
  `study_fund` varchar(255) DEFAULT NULL,
  `study_fund_payment` varchar(255) DEFAULT NULL,
  `study_fund_other` varchar(255) DEFAULT NULL,
  `COI_1A` varchar(10) DEFAULT NULL,
  `COI_1B` varchar(10) DEFAULT NULL,
  `COI_1C` varchar(10) DEFAULT NULL,
  `COI_1D` varchar(10) DEFAULT NULL,
  `COI_2` varchar(10) DEFAULT NULL,
  `COI_3` varchar(10) DEFAULT NULL,
  `ERC_1` varchar(255) DEFAULT NULL,
  `ERC_1A` varchar(255) DEFAULT NULL,
  `ERC_1A_other` varchar(255) DEFAULT NULL,
  `ERC_2` varchar(10) DEFAULT NULL,
  `ERC_3` varchar(10) DEFAULT NULL,
  `ERC_4` varchar(10) DEFAULT NULL,
  `ERC_5` varchar(10) DEFAULT NULL,
  `ERC_6` varchar(10) DEFAULT NULL,
  `ERC_7` varchar(10) DEFAULT NULL,
  `ERC_7A` varchar(10) DEFAULT NULL,
  `ERC_8` varchar(10) DEFAULT NULL,
  `ERC_9` varchar(10) DEFAULT NULL,
  `ERC_10` varchar(10) DEFAULT NULL,
  `ERC_11` varchar(10) DEFAULT NULL,
  `ERC_11A` varchar(10) DEFAULT NULL,
  `ERC_12` varchar(10) DEFAULT NULL,
  `ERC_13` varchar(10) DEFAULT NULL,
  `PD_1` longtext,
  `PD_2` longtext,
  `PD_3` longtext,
  `PD_4_start_date` varchar(255) DEFAULT NULL,
  `PD_4_end_date` varchar(255) DEFAULT NULL,
  `PD_4_total_time` varchar(255) DEFAULT NULL,
  `PD_5` varchar(255) DEFAULT NULL,
  `PD_6` varchar(255) DEFAULT NULL,
  `PD_7` varchar(255) DEFAULT NULL,
  `PD_8` varchar(255) DEFAULT NULL,
  `PD_9` longtext,
  `PD_10` longtext,
  `PD_11` longtext,
  `PD_12` longtext,
  `PD_13` longtext,
  `PD_14` longtext,
  `PD_15` longtext,
  `PD_16` longtext,
  `PD_17` longtext,
  `PD_18` longtext,
  `PD_19` longtext,
  `PD_20` longtext,
  `PD_21` longtext,
  `PD_22` longtext,
  `PD_22_other` varchar(255) DEFAULT NULL,
  `PD_23` longtext,
  `PD_24` varchar(10) DEFAULT NULL,
  `PD_24A` varchar(10) DEFAULT NULL,
  `PD_25` varchar(10) DEFAULT NULL,
  `PD_25A` varchar(10) DEFAULT NULL,
  `PD_26` varchar(10) DEFAULT NULL,
  `PD_26A` longtext,
  `CD_1` longtext,
  `CD_2` varchar(10) DEFAULT NULL,
  `CD_2A` varchar(10) DEFAULT NULL,
  `CD_2B` longtext,
  `CD_3` longtext,
  `attach_files` longtext,
  `isSubmit` varchar(1) DEFAULT '0' COMMENT '1 means draft, 0 means submit',
  `isNew` bit(1) DEFAULT b'1',
  `AimsProject` varchar(10) DEFAULT NULL,
  `assignTo` varchar(255) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `createdBy` varchar(255) DEFAULT NULL,
  `createdDateTime` datetime DEFAULT NULL,
  `isActive` bit(1) DEFAULT b'1',
  PRIMARY KEY (`idApplicationGuid`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of application
-- ----------------------------
INSERT INTO `application` VALUES ('28', '1002', '1', 'test', 'Mr', 'waqar', 'farooqui', 'dmu', 'dio', 'aku', 'pakistan', '03472455594', '8247', '12.31.2019', 'Mr', 'wasim', 'abbas', 'dmu', 'cordinator', 'aku', 'pakistan', '03002455594', '8247', '12.30.2019', 'Mr', 'sheroz', 'khan', 'dmu', 'programmer', 'aku', 'pakistan', '03332455594', '8247', '12.29.2019', 'Yes', 'PhD', '', 'Funded or Sponsored', 'In Process', 'none', 'Yes', 'No', 'Yes', 'No', 'Yes', 'No', 'Exemption', 'Experimental drug(s)', 'none', 'Yes', 'No', 'Yes', 'No', 'Yes', 'No', 'Yes', 'No', 'Yes', 'No', 'Yes', 'No', 'Yes', 'No', 'none', 'bs', 'pratices', '01.01.2019', '04.18.2019', '04.18.2019', 'normal', 'none', 'none', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'Secure network', 'none', 'test', 'Yes', 'No', 'Yes', 'No', 'Yes', '', 'test', 'Yes', 'No', 'none', 'none', null, '1', '', null, 'C2931A389-2A58-79E8-F076-67504C955H18', 'Open', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-04-18 12:04:30', '');
INSERT INTO `application` VALUES ('29', '1002', '2', 'test', '', 'waqar', 'farooqui', 'dmu', 'dio', 'aku', 'pakistan', '03472455594', '8247', '12.31.2019', '', 'wasim', 'abbas', 'dmu', 'cordinator', 'aku', 'pakistan', '03002455594', '8247', '12.30.2019', '', 'sheroz', 'khan', 'dmu', 'programmer', 'aku', 'pakistan', '03332455594', '8247', '12.29.2019', null, '', '', '', '', 'none', null, null, null, null, null, null, '', '', 'none', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '', '', '', '01.01.2019', '04.18.2019', '04.18.2019', 'normal', 'none', 'none', 'test', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'none', '', null, null, null, null, null, '', '', null, null, '', '', null, '1', '', null, 'C2931A389-2A58-79E8-F076-67504C955H18', 'Open', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-04-18 12:12:47', '');
INSERT INTO `application` VALUES ('39', '1005', '1', 'AIMS project test', 'Mrs', 'mnop', 'xyz', 'ooo', 'ppp', 'www', 'rrr', '1234213123', '123123', '04.26.2019', 'Mrs', 'abcd_easd', 'asdasd', 'aaa', 'bbb', 'ccc', 'ddd', '12312321321', '122', '04.25.2019', 'Mr', 'hhh', 'jjj', 'kkk', 'llll', 'mmm', 'Pakistan', '03432855294', '111', '04.24.2019', 'Yes', 'PhD', '', 'URC', 'In Process', 'sad', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '1', '', 'Yes', 'C2931A389-2A58-79E8-F076-67504C955H18', 'Completed', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-04-25 16:44:18', '');
INSERT INTO `application` VALUES ('43', '1006', '1', 'Aims Application Submit', 'Mr', 'sk_khan', '911', 'paeds', 'abcd', 'karachi', 'Pakistan', '03432855294', '1231', '04.26.2019', 'Mrs', 'KKKK', 'llll', 'abcd', 'ooo', 'ppp', 'qqq', '03425568894', '12312', '04.30.2019', 'Mrs', 'zzz', 'yyy', 'ttt', 'uuu', 'iii', 'ooo', '2222333366', '12312', '04.29.2019', 'Yes', 'PhD', '', 'URC', 'In Process', 'abcd xyz ', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '1006_1.zip', '1', '', 'Yes', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'Open', 'BCDFB392-D7BB-E305-1A0D-A028A8A062A1', '2019-04-26 12:11:59', '');
INSERT INTO `application` VALUES ('44', '1007', '1', 'test title', 'Mr', 'waqar', 'farooqui', 'dmu', 'dio', 'aku', 'Pakistan', '+923472455594', '8247', '04.18.2019', 'Mr', 'mussawer', 'afridi', 'amu', 'dio', 'aku', 'Pakistan', '+923472455594', '8247', '04.23.2019', 'Mr', 'adadad', 'aafaf', 'afaf', 'afaf', 'afaf', 'Pakistan', '+923472455594', '8247', '04.27.2019', 'No', '', '', 'URC', 'In Process', 'afafa', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '1007_1.zip', '1', '', 'Yes', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'New', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-04-29 11:47:47', '');
INSERT INTO `application` VALUES ('45', '1008', '1', 'AIMS application test', 'Mr', 'Waqar', 'Farooqui', 'Paeds', 'DIO', 'Main', 'Pakistan', '03422564125', '8247', '05.11.2019', 'Mr', 'Shahroz', 'Khan', 'Paeds', 'Analyst', 'karachi', 'Pakistan', '03432855294', '8247', '05.09.2019', 'Mr', 'abcd', 'xyz', 'asd', 'asdas', 'asd', 'asd', '03432855294', '12321', '', 'Yes', 'PhD', '', 'Funded or Sponsored', 'In Process', 'asd', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '1008_1.zip', '1', '', 'Yes', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'New', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-03 11:19:39', '');
INSERT INTO `application` VALUES ('46', '1009', '1', 'Test Aims 1', 'Mr', 'test', 'test', 'test', 'test', 'test', 'test', '12312312', '12312', '05.22.2019', 'Mr', 'test', 'test', 'test', 'test', 'test', 'test', '12312312321', '1231', '05.28.2019', 'Mrs', 'test', 'test', 'test', 'test', 'test', 'test', '03432855294', '123', '05.28.2019', 'Yes', 'PhD', '', 'URC', 'Received', 'asd', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '1009_1.zip', '1', '', 'Yes', 'C2931A389-2A58-79E8-F076-67504C955H18', 'New', '9A9F3A0B-433F-3DFB-05C6-3761B4C38D50', '2019-05-06 11:55:51', '');
INSERT INTO `application` VALUES ('47', '1008', '2', 'AIMS application test 2', '', 'Waqar', 'Farooqui', 'Paeds', 'DIO', 'Main', 'Pakistan', '03422564125', '8247', '05.11.2019', '', 'Shahroz', 'Khan', 'Paeds', 'Analyst', 'karachi', 'Pakistan', '03432855294', '8247', '05.09.2019', '', 'abcd', 'xyz', 'asd', 'asdas', 'asd', 'asd', '03432855294', '12321', '', null, '', '', '', '', 'asd', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '1008_2.zip', '1', '', 'Yes', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'New', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-07 11:30:53', '');
INSERT INTO `application` VALUES ('51', '1010', '1', 'aims draft', 'Mrs', 'test', 'test', 'test', 'test', 'test', 'Pakistan', '03432855294', '123', '05.15.2019', 'Mrs', 'mnop', 'mnop', 'mnop', 'mnop', 'mnop', 'Pakistan', '03432855294', '123', '05.23.2019', 'Mrs', 'xyz', 'xyz', 'xyz', 'xyz', 'xyz', 'Pakistan', '0343285222', '123', '05.22.2019', 'No', '', '', '', '', 'asda', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '1010_1.zip', '1', '', 'Yes', 'C2931A389-2A58-79E8-F076-67504C955H18', 'New', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 11:16:01', '');
INSERT INTO `application` VALUES ('52', '1010', '2', 'aims draft review 2', 'Mrs', 'test', 'test', 'test', 'test', 'test', 'Pakistan', '03432855294', '123', '05.15.2019', 'Mrs', 'mnop', 'mnop', 'mnop', 'mnop', 'mnop', 'Pakistan', '03432855294', '123', '05.23.2019', 'Mrs', 'xyz', 'xyz', 'xyz', 'xyz', 'xyz', 'Pakistan', '0343285222', '123', '05.22.2019', 'No', '', '', 'URC', 'In Process', 'asda', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '1010_2.zip', '1', '', 'Yes', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'New', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 11:41:41', '');
INSERT INTO `application` VALUES ('53', '1010', '3', 'aims draft review 3', 'Mrs', 'test', 'test', 'test', 'test', 'test', 'Pakistan', '03432855294', '123', '05.15.2019', 'Mrs', 'mnop', 'mnop', 'mnop', 'mnop', 'mnop', 'Pakistan', '03432855294', '123', '05.23.2019', 'Mrs', 'xyz', 'xyz', 'xyz', 'xyz', 'xyz', 'Pakistan', '0343285222', '123', '05.22.2019', 'No', '', '', '', '', 'asda', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '1010_3.zip', '1', '', 'Yes', 'C2931A389-2A58-79E8-F076-67504C955H18', 'New', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 11:44:47', '');
INSERT INTO `application` VALUES ('54', '1010', '4', 'aims draft review 4', 'Mrs', 'test', 'test', 'test', 'test', 'test', 'Pakistan', '03432855294', '123', '05.15.2019', 'Mrs', 'mnop', 'mnop', 'mnop', 'mnop', 'mnop', 'Pakistan', '03432855294', '123', '05.23.2019', 'Mrs', 'xyz', 'xyz', 'xyz', 'xyz', 'xyz', 'Pakistan', '0343285222', '123', '05.22.2019', 'No', '', '', '', '', 'asda', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '1010_4.zip', '1', '', 'Yes', 'C2931A389-2A58-79E8-F076-67504C955H18', 'New', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 11:57:52', '');
INSERT INTO `application` VALUES ('70', '1010', '5', 'aims draft review 5', 'Mrs', 'test', 'test', 'test', 'test', 'test', 'Pakistan', '03432855294', '123', '05.15.2019', 'Mrs', 'mnop', 'mnop', 'mnop', 'mnop', 'mnop', 'Pakistan', '03432855294', '123', '05.23.2019', 'Mrs', 'xyz', 'xyz', 'xyz', 'xyz', 'xyz', 'Pakistan', '0343285222', '123', '05.22.2019', 'No', '', '', '', '', 'asda', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '', '1', '', 'Yes', 'C2931A389-2A58-79E8-F076-67504C955H18', 'New', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 12:47:40', '');
INSERT INTO `application` VALUES ('71', '1011', '1', 'DRC appliation', 'Mrs', 'asd', 'asd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, '', '', '', '', '', null, 'No', 'No', 'Yes', 'Yes', 'No', 'Exemption', 'Radioactive agents', 'das', 'No', 'Yes', 'No', 'Yes', 'Yes', 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'asd', 'asd', 'asasd', '05.03.2019', '05.10.2019', '05.10.2019', '', '', '', '', 'asd', 'asd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, 'No', null, 'No', null, '', 'asd', 'No', 'Yes', 'asdas', 'asd', '', '1', '', null, '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'New', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 14:06:00', '');
INSERT INTO `application` VALUES ('72', '1012', '1', 'adasdas', 'Mrs', 'asd', 'asdas', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, '', '', '', '', '', null, null, null, null, null, null, '', '', '', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, null, null, null, null, '', '', null, null, '', '', '1012_1.zip', '1', '', null, '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'New', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 14:08:04', '');
INSERT INTO `application` VALUES ('73', '1013', '1', 'test test', 'Mrs', 'test test', 'test test', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, '', '', '', '', '', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '1013_1.zip', '1', '', 'Yes', 'C2931A389-2A58-79E8-F076-67504C955H18', 'New', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 14:41:31', '');
INSERT INTO `application` VALUES ('74', '1013', '2', 'test test 2222', 'Mrs', 'test test', 'test test', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, '', '', '', '', '', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '1013_2.zip', '1', '', 'Yes', 'C2931A389-2A58-79E8-F076-67504C955H18', 'New', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 14:49:54', '');
INSERT INTO `application` VALUES ('75', '1014', '1', 'HEALTH FACILITY ASSESSMENT', 'Mr', 'Muhammad ', 'Fazal', 'peads', 'SRA', 'gulshan', 'Pakistan', '03121234567', '8246', '05.16.2019', 'Mr', 'Hassan', 'Naqvi', 'peads', 'Research Specialist', 'Gulshan', 'Pakistan', '03121234567', '8246', '05.25.2019', 'Dr', 'Shahroz', 'Khan', 'Peads', 'Programmer Analyst', 'Gulshan', 'Pakistan', '03121234567', '8484', '05.23.2019', 'Yes', 'MScN', '', 'Department Fund', 'In Process', '', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '', '0', '', 'Yes', 'C2931A389-2A58-79E8-F076-67504C955H18', 'New', '623D0E32-25D5-AF5E-9356-990F36E0EE0B', '2019-05-13 15:21:38', '');
INSERT INTO `application` VALUES ('76', '1015', '1', 'tyetasd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, '', '', '', '', '', null, null, null, null, null, null, '', '', '', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, null, null, null, null, '', '', null, null, '', '', '1', '1', '', null, 'C2931A389-2A58-79E8-F076-67504C955H18', null, '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-28 11:56:09', '');
INSERT INTO `application` VALUES ('77', '1016', '1', 'test asdd', 'Mrs', 'test asdd', 'test asdd', 'test asdd', 'test asdd', 'test asdd', 'Pakistan', '03432855294', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, '', '', '', '', '', null, null, null, null, null, null, '', '', '', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, null, null, null, null, '', '', null, null, '', '', '1016_1.txt', '1', '', null, 'C2931A389-2A58-79E8-F076-67504C955H18', null, '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-28 11:58:40', '');
INSERT INTO `application` VALUES ('78', '1017', '1', 'Test 26 june 19', 'Mr', 'test', 'test', 'test', 'test', 'test', 'Pakistan', '03432855294', '1234', '06.27.2019', 'Mrs', 'test', 'test', 'test', 'test', 'test', 'Pakistan', '03432855294', 'test', '06.29.2019', 'Dr', 'testtest', 'test', 'test test', 'test', 'test', 'test', '12321312312', '123', '06.13.2019', 'Yes', 'PhD', '', 'URC', 'In Process', 'test', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '1017_1.zip', '1', '', 'Yes', 'C2931A389-2A58-79E8-F076-67504C955H18', 'New', 'B859AC63-F662-E48F-D6E3-F382F85050A5', '2019-06-26 09:51:46', '');
INSERT INTO `application` VALUES ('79', '1018', '1', 'babasdsadasd', 'Miss', 'sadsa', 'asd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, '', '', '', '', '', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '', '1', '', 'Yes', '', 'New', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-07-08 15:21:59', '');

-- ----------------------------
-- Table structure for `application_comment`
-- ----------------------------
DROP TABLE IF EXISTS `application_comment`;
CREATE TABLE `application_comment` (
  `idApplicationComment` int(11) NOT NULL AUTO_INCREMENT,
  `idApplication` int(11) DEFAULT NULL,
  `ReviewNo` varchar(10) DEFAULT NULL,
  `title_of_study_comment` longtext,
  `PID_title_comment` longtext,
  `PID_first_name_comment` longtext,
  `PID_surname_comment` longtext,
  `PID_department_comment` longtext,
  `PID_designation_comment` longtext,
  `PID_campus_comment` longtext,
  `PID_country_comment` longtext,
  `PID_telephone_comment` longtext,
  `PID_ext_comment` longtext,
  `PID_certificate_expiry_date_comment` longtext,
  `DCD_title_comment_comment` longtext,
  `DCD_first_name_comment` longtext,
  `DCD_surname_comment` longtext,
  `DCD_department_comment` longtext,
  `DCD_designation_comment` longtext,
  `DCD_campus_comment` longtext,
  `DCD_country_comment` longtext,
  `DCD_telephone_comment` longtext,
  `DCD_ext_comment` longtext,
  `DCD_certificate_expiry_date_comment` longtext,
  `TMD_title_comment` longtext,
  `TMD_first_name_comment` longtext,
  `TMD_surname_comment` longtext,
  `TMD_department_comment` longtext,
  `TMD_designation_comment` longtext,
  `TMD_campus_comment` longtext,
  `TMD_country_comment` longtext,
  `TMD_telephone_comment` longtext,
  `TMD_ext_comment` longtext,
  `TMD_certificate_expiry_date_comment` longtext,
  `study_part_comment` longtext,
  `study_part_options_comment` longtext,
  `study_part_other_comment` longtext,
  `study_fund_comment` longtext,
  `study_fund_payment_comment` longtext,
  `study_fund_other_comment` longtext,
  `COI_1A_comment` longtext,
  `COI_1B_comment` longtext,
  `COI_1C_comment` longtext,
  `COI_1D_comment` longtext,
  `COI_2_comment` longtext,
  `COI_3_comment` longtext,
  `ERC_1_comment` longtext,
  `ERC_1A_comment` longtext,
  `ERC_1A_other_comment` longtext,
  `ERC_2_comment` longtext,
  `ERC_3_comment` longtext,
  `ERC_4_comment` longtext,
  `ERC_5_comment` longtext,
  `ERC_6_comment` longtext,
  `ERC_7_comment` longtext,
  `ERC_7A_comment` longtext,
  `ERC_8_comment` longtext,
  `ERC_9_comment` longtext,
  `ERC_10_comment` longtext,
  `ERC_11_comment` longtext,
  `ERC_11A_comment` longtext,
  `ERC_12_comment` longtext,
  `ERC_13_comment` longtext,
  `PD_1_comment` longtext,
  `PD_2_comment` longtext,
  `PD_3_comment` longtext,
  `PD_4_start_date_comment` longtext,
  `PD_4_end_date_comment` longtext,
  `PD_4_total_time_comment` longtext,
  `PD_5_comment` longtext,
  `PD_6_comment` longtext,
  `PD_7_comment` longtext,
  `PD_8_comment` longtext,
  `PD_9_comment` longtext,
  `PD_10_comment` longtext,
  `PD_11_comment` longtext,
  `PD_12_comment` longtext,
  `PD_13_comment` longtext,
  `PD_14_comment` longtext,
  `PD_15_comment` longtext,
  `PD_16_comment` longtext,
  `PD_17_comment` longtext,
  `PD_18_comment` longtext,
  `PD_19_comment` longtext,
  `PD_20_comment` longtext,
  `PD_21_comment` longtext,
  `PD_22_comment` longtext,
  `PD_22_other_comment` longtext,
  `PD_23_comment` longtext,
  `PD_24_comment` longtext,
  `PD_24A_comment` longtext,
  `PD_25_comment` longtext,
  `PD_25A_comment` longtext,
  `PD_26_comment` longtext,
  `PD_26A_comment` longtext,
  `CD_1_comment` longtext,
  `CD_2_comment` longtext,
  `CD_2A_comment` longtext,
  `CD_2B_comment` longtext,
  `CD_3_comment` longtext,
  `attach_files_comment` varchar(255) DEFAULT NULL,
  `isComment` bit(1) DEFAULT b'0' COMMENT '1 means draft, 0 means submit',
  `createdBy` varchar(255) DEFAULT NULL,
  `createdDateTime` datetime DEFAULT NULL,
  `isActive` bit(1) DEFAULT b'1',
  PRIMARY KEY (`idApplicationComment`)
) ENGINE=InnoDB AUTO_INCREMENT=63000072 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of application_comment
-- ----------------------------
INSERT INTO `application_comment` VALUES ('63000039', '1006', '1', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '', null, '2019-04-26 12:12:00', '');
INSERT INTO `application_comment` VALUES ('63000040', '1007', '1', null, 'test', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-04-29 11:47:48', '');
INSERT INTO `application_comment` VALUES ('63000041', '1008', '1', null, 'test', null, 'testting', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '1008_1_comment', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', '2019-05-03 11:19:40', '');
INSERT INTO `application_comment` VALUES ('63000042', '1009', '1', null, 'testing', 'testing', 'testing', 'testing', 'testing', 'testing', null, null, null, 'testing', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '1009_1_comment', '', 'C2931A389-2A58-79E8-F076-67504C955H18', '2019-05-06 11:55:51', '');
INSERT INTO `application_comment` VALUES ('63000043', '1008', '2', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '', null, '2019-05-07 11:30:55', '');
INSERT INTO `application_comment` VALUES ('63000044', '1010', '1', null, 'change name', 'change this', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'comment', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '1010_1_comment.zip', '', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-05-13 11:19:54', '');
INSERT INTO `application_comment` VALUES ('63000045', '1010', '2', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '', null, '2019-05-13 11:41:41', '');
INSERT INTO `application_comment` VALUES ('63000046', '1010', '3', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '1010_3_comment', '', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-05-13 11:53:57', '');
INSERT INTO `application_comment` VALUES ('63000047', '1010', '4', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 'assets/uploads/1010/1010_4_comment.zip', '', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-05-13 11:57:53', '');
INSERT INTO `application_comment` VALUES ('63000063', '1010', '5', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '1010_5_comment.zip', '', null, '2019-05-13 12:47:40', '');
INSERT INTO `application_comment` VALUES ('63000064', '1011', '1', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '', null, '2019-05-13 14:06:00', '');
INSERT INTO `application_comment` VALUES ('63000065', '1012', '1', null, null, 'asda', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '1012_1_comment.zip', '', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-05-13 14:08:04', '');
INSERT INTO `application_comment` VALUES ('63000066', '1013', '1', null, 'asdsa', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '1013_1_comment.zip', '', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-05-13 14:41:31', '');
INSERT INTO `application_comment` VALUES ('63000067', '1013', '2', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '', null, '2019-05-13 14:49:54', '');
INSERT INTO `application_comment` VALUES ('63000068', '1015', '1', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '', null, '2019-05-28 11:56:10', '');
INSERT INTO `application_comment` VALUES ('63000069', '1016', '1', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '', null, '2019-05-28 11:58:40', '');
INSERT INTO `application_comment` VALUES ('63000070', '1017', '1', null, 'testing', 'testing', 'change asd', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '1017_1_comment.zip', '', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-06-26 09:51:46', '');
INSERT INTO `application_comment` VALUES ('63000071', '1018', '1', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '', null, '2019-07-08 15:21:59', '');

-- ----------------------------
-- Table structure for `emaillog`
-- ----------------------------
DROP TABLE IF EXISTS `emaillog`;
CREATE TABLE `emaillog` (
  `idEmailLog` int(11) NOT NULL AUTO_INCREMENT,
  `idForm` int(11) DEFAULT NULL,
  `EmailSubject` longtext,
  `Sender` varchar(255) DEFAULT NULL,
  `Reciever` longtext,
  `isSend` bit(1) DEFAULT b'0',
  `createdBy` varchar(255) DEFAULT NULL,
  `send_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idEmailLog`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of emaillog
-- ----------------------------
INSERT INTO `emaillog` VALUES ('6', '994864', 'Test Form', 'sk_khan911@hotmail.com', 'shehroz.altaf92@gmail.com', '', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-03-21 17:26:16');
INSERT INTO `emaillog` VALUES ('7', '994865', 'Test Form', 'sk_khan911@hotmail.com', 'shehroz.altaf92@gmail.com', '', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-03-21 17:28:51');
INSERT INTO `emaillog` VALUES ('8', '994866', 'Test Form', 'sk_khan911@hotmail.com', 'shehroz.altaf92@gmail.com', '', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-03-22 11:18:04');
INSERT INTO `emaillog` VALUES ('9', '994869', 'Test Form', 'sk_khan911@hotmail.com', 'shehroz.altaf92@gmail.com', '', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-03-22 11:43:10');
INSERT INTO `emaillog` VALUES ('10', '994871', 'Test Form', 'sk_khan911@hotmail.com', 'shehroz.altaf92@gmail.com', '', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-03-22 11:47:49');
INSERT INTO `emaillog` VALUES ('11', '994872', 'Test Form', 'sk_khan911@hotmail.com', 'shahroz.khan@aku.edu', '', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-03-25 11:04:06');
INSERT INTO `emaillog` VALUES ('12', '994874', 'Test Form', 'sk_khan911@hotmail.com', 'shehroz.altaf92@gmail.com', '', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-03-25 11:14:34');
INSERT INTO `emaillog` VALUES ('13', '994877', 'Test Form', 'sk_khan911@hotmail.com', 'shehroz.altaf92@gmail.com', '', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-03-25 12:00:32');
INSERT INTO `emaillog` VALUES ('14', '994878', 'Test Form', 'sk_khan911@hotmail.com', 'shahroz.khan@aku.edu', '', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-03-25 13:16:56');
INSERT INTO `emaillog` VALUES ('15', '994878', 'Test Form', 'sk_khan911@hotmail.com', 'shahroz.khan@aku.edu', '', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-03-25 16:07:08');
INSERT INTO `emaillog` VALUES ('16', '994877', 'Test Form', 'sk_khan911@hotmail.com', 'shahroz.khan@aku.edu', '', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-03-25 17:09:50');
INSERT INTO `emaillog` VALUES ('17', '994877', 'Test Form', 'sk_khan911@hotmail.com', 'shahroz.khan@aku.edu', '', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-03-25 17:18:13');
INSERT INTO `emaillog` VALUES ('18', '994877', 'Test Form', 'sk_khan911@hotmail.com', 'shahroz.khan@aku.edu', '', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-03-25 17:19:23');
INSERT INTO `emaillog` VALUES ('19', '994879', 'Test Form', 'sk_khan911@hotmail.com', 'imran.nisar@aku.edu', '', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-03-26 11:02:46');
INSERT INTO `emaillog` VALUES ('20', '994880', 'Test Form', 'sk_khan911@hotmail.com', 'imran.ahmed@aku.edu', '', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-03-26 11:04:23');

-- ----------------------------
-- Table structure for `group`
-- ----------------------------
DROP TABLE IF EXISTS `group`;
CREATE TABLE `group` (
  `idGroup` varchar(255) NOT NULL,
  `GroupName` varchar(255) DEFAULT NULL,
  `isActive` bit(1) DEFAULT b'1',
  PRIMARY KEY (`idGroup`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of group
-- ----------------------------
INSERT INTO `group` VALUES ('1AA4943C-B01F-61DF-A582-04A3E8150048', 'Applicant', '');
INSERT INTO `group` VALUES ('5PJ0CBA5-G72F-4280-CA41-1F2933C5B90D', 'Admin', '');
INSERT INTO `group` VALUES ('B80AA3B7-B792-722D-8553-B676C5908A72', 'Reviewer', '');

-- ----------------------------
-- Table structure for `notification`
-- ----------------------------
DROP TABLE IF EXISTS `notification`;
CREATE TABLE `notification` (
  `idNotification` int(11) NOT NULL AUTO_INCREMENT,
  `Icon` varchar(255) DEFAULT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Message` longtext,
  `Seen` bit(1) DEFAULT b'0' COMMENT '1=seen',
  `To` varchar(255) DEFAULT NULL,
  `Url` varchar(255) DEFAULT NULL,
  `Class` varchar(255) DEFAULT NULL,
  `createdBy` varchar(255) DEFAULT NULL,
  `createdDateTime` datetime DEFAULT NULL,
  `isActive` bit(1) DEFAULT b'1',
  PRIMARY KEY (`idNotification`)
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of notification
-- ----------------------------
INSERT INTO `notification` VALUES ('18', 'mail', 'New Application', 'You have received a new applciation.<br> Application No - 1001', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1001', 'uk-text-success', 'BCDFB392-D7BB-E305-1A0D-A028A8A062A1', '2019-04-17 12:26:53', '');
INSERT INTO `notification` VALUES ('19', 'mail', 'New Application', 'You have received a new applciation.<br> Application No - 1001', '', '85350B41-338C-BDA7-B021-E4BA9CF0076C', 'project_detail/1001', 'uk-text-success', 'BCDFB392-D7BB-E305-1A0D-A028A8A062A1', '2019-04-17 12:27:01', '');
INSERT INTO `notification` VALUES ('20', 'comment', 'New Comments Recieved', 'You have received a new comment', '', 'BCDFB392-D7BB-E305-1A0D-A028A8A062A1', 'project_detail/1001', 'uk-text-primary', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', '2019-04-17 16:14:47', '');
INSERT INTO `notification` VALUES ('21', 'mail', 'New Application', 'You have received a new applciation.<br> Application No - 1001', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1001', 'uk-text-success', 'BCDFB392-D7BB-E305-1A0D-A028A8A062A1', '2019-04-17 16:47:43', '');
INSERT INTO `notification` VALUES ('22', 'mail', 'New Application', 'You have received a new applciation.<br> Application No - 1001', '', '85350B41-338C-BDA7-B021-E4BA9CF0076C', 'project_detail/1001', 'uk-text-success', 'BCDFB392-D7BB-E305-1A0D-A028A8A062A1', '2019-04-17 16:47:54', '');
INSERT INTO `notification` VALUES ('23', 'mail', 'New Application', 'You have received a new applciation.<br> Application No - 1002', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1002', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-04-18 12:04:30', '');
INSERT INTO `notification` VALUES ('24', 'mail', 'New Application', 'You have received a new applciation.<br> Application No - 1002', '', '85350B41-338C-BDA7-B021-E4BA9CF0076C', 'project_detail/1002', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-04-18 12:04:40', '');
INSERT INTO `notification` VALUES ('25', 'comment', 'New Comments Recieved', 'You have received a new comment', '', '83A4FFAC-6813-DCD0-3125-BF8002A70384', 'project_detail/1002', 'uk-text-primary', '85350B41-338C-BDA7-B021-E4BA9CF0076C', '2019-04-18 12:10:59', '');
INSERT INTO `notification` VALUES ('26', 'mail', 'New Application', 'You have received a new applciation.<br> Application No - 1002', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1002', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-04-18 12:12:48', '');
INSERT INTO `notification` VALUES ('27', 'mail', 'New Application', 'You have received a new applciation.<br> Application No - 1002', '', '85350B41-338C-BDA7-B021-E4BA9CF0076C', 'project_detail/1002', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-04-18 12:12:59', '');
INSERT INTO `notification` VALUES ('28', 'mail', 'New Application 1003-1', 'You have received a new applciation. <br> Title: ', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1003', 'uk-text-success', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', '2019-04-18 14:26:44', '');
INSERT INTO `notification` VALUES ('29', 'mail', 'New Application 1003-1', 'You have received a new applciation. <br> Title: ', '', '85350B41-338C-BDA7-B021-E4BA9CF0076C', 'project_detail/1003', 'uk-text-success', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', '2019-04-18 14:26:51', '');
INSERT INTO `notification` VALUES ('30', 'mail', 'New Application 1003-2', 'You have received a new applciation. <br> Title: test review 2 Lorem ipsum', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1003', 'uk-text-success', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', '2019-04-18 14:30:18', '');
INSERT INTO `notification` VALUES ('31', 'mail', 'New Application 1003-2', 'You have received a new applciation. <br> Title: test review 2 Lorem ipsum', '', '85350B41-338C-BDA7-B021-E4BA9CF0076C', 'project_detail/1003', 'uk-text-success', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', '2019-04-18 14:30:24', '');
INSERT INTO `notification` VALUES ('32', 'mail', 'New Application 1003-1', 'You have received a new applciation. <br> Title: Lorem ipsum, or lipsum as', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1003', 'uk-text-success', 'BCDFB392-D7BB-E305-1A0D-A028A8A062A1', '2019-04-18 14:40:18', '');
INSERT INTO `notification` VALUES ('33', 'mail', 'New Application 1003-1', 'You have received a new applciation. <br> Title: Lorem ipsum, or lipsum as', '', '85350B41-338C-BDA7-B021-E4BA9CF0076C', 'project_detail/1003', 'uk-text-success', 'BCDFB392-D7BB-E305-1A0D-A028A8A062A1', '2019-04-18 14:40:26', '');
INSERT INTO `notification` VALUES ('34', 'comment', 'New Comments Recieved', 'You have received a new comment', '', 'BCDFB392-D7BB-E305-1A0D-A028A8A062A1', 'project_detail/1003', 'uk-text-primary', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', '2019-04-18 14:55:13', '');
INSERT INTO `notification` VALUES ('35', 'mail', 'New Application 1003-2', 'You have received a new applciation. <br> Title: Review 2 Lorem ipsum, or ', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1003', 'uk-text-success', 'BCDFB392-D7BB-E305-1A0D-A028A8A062A1', '2019-04-18 14:57:46', '');
INSERT INTO `notification` VALUES ('36', 'mail', 'New Application 1003-2', 'You have received a new applciation. <br> Title: Review 2 Lorem ipsum, or ', '', '85350B41-338C-BDA7-B021-E4BA9CF0076C', 'project_detail/1003', 'uk-text-success', 'BCDFB392-D7BB-E305-1A0D-A028A8A062A1', '2019-04-18 14:57:53', '');
INSERT INTO `notification` VALUES ('37', 'mail', 'New Application 1003-3', 'You have received a new applciation. <br> Title: Review 3 Lorem ipsum, or ', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1003', 'uk-text-success', 'BCDFB392-D7BB-E305-1A0D-A028A8A062A1', '2019-04-18 15:21:46', '');
INSERT INTO `notification` VALUES ('38', 'mail', 'New Application 1003-3', 'You have received a new applciation. <br> Title: Review 3 Lorem ipsum, or ', '', '85350B41-338C-BDA7-B021-E4BA9CF0076C', 'project_detail/1003', 'uk-text-success', 'BCDFB392-D7BB-E305-1A0D-A028A8A062A1', '2019-04-18 15:21:52', '');
INSERT INTO `notification` VALUES ('39', 'comment', 'New Comments Recieved', 'You have received a new comment', '', 'BCDFB392-D7BB-E305-1A0D-A028A8A062A1', 'project_detail/1003', 'uk-text-primary', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', '2019-04-18 15:54:26', '');
INSERT INTO `notification` VALUES ('40', 'comment', 'New Comments Recieved', 'You have received a new comment', '', 'BCDFB392-D7BB-E305-1A0D-A028A8A062A1', 'project_detail/1003', 'uk-text-primary', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', '2019-04-18 16:51:13', '');
INSERT INTO `notification` VALUES ('41', 'mail', 'New Application 1003-4', 'You have received a new applciation. <br> Title: Review 4orem ipsum, or li', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1003', 'uk-text-success', 'BCDFB392-D7BB-E305-1A0D-A028A8A062A1', '2019-04-18 16:53:16', '');
INSERT INTO `notification` VALUES ('42', 'mail', 'New Application 1003-4', 'You have received a new applciation. <br> Title: Review 4orem ipsum, or li', '', '85350B41-338C-BDA7-B021-E4BA9CF0076C', 'project_detail/1003', 'uk-text-success', 'BCDFB392-D7BB-E305-1A0D-A028A8A062A1', '2019-04-18 16:53:23', '');
INSERT INTO `notification` VALUES ('43', 'mail', 'New Application 1005-1', 'You have received a new applciation. <br> Title: ', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1005', 'uk-text-success', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-04-22 11:28:00', '');
INSERT INTO `notification` VALUES ('44', 'mail', 'New Application 1005-1', 'You have received a new applciation. <br> Title: ', '', '85350B41-338C-BDA7-B021-E4BA9CF0076C', 'project_detail/1005', 'uk-text-success', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-04-22 11:28:09', '');
INSERT INTO `notification` VALUES ('45', 'mail', 'New Application 1005-1', 'You have received a new applciation. <br> Title: AIMS project test', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1005', 'uk-text-success', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-04-25 16:44:18', '');
INSERT INTO `notification` VALUES ('46', 'mail', 'New Application 1005-1', 'You have received a new applciation. <br> Title: AIMS project test', '', '85350B41-338C-BDA7-B021-E4BA9CF0076C', 'project_detail/1005', 'uk-text-success', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-04-25 16:44:29', '');
INSERT INTO `notification` VALUES ('47', 'mail', 'New Application 1006-1', 'You have received a new applciation. <br> Title: Aims Application Submit', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1006', 'uk-text-success', 'BCDFB392-D7BB-E305-1A0D-A028A8A062A1', '2019-04-26 12:00:00', '');
INSERT INTO `notification` VALUES ('48', 'mail', 'New Application 1007-1', 'You have received a new applciation. <br> Title: Aims Application Submit', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1007', 'uk-text-success', 'BCDFB392-D7BB-E305-1A0D-A028A8A062A1', '2019-04-26 12:05:19', '');
INSERT INTO `notification` VALUES ('49', 'mail', 'New Application 1008-1', 'You have received a new applciation. <br> Title: Aims Application Submit', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1008', 'uk-text-success', 'BCDFB392-D7BB-E305-1A0D-A028A8A062A1', '2019-04-26 12:10:43', '');
INSERT INTO `notification` VALUES ('50', 'mail', 'New Application 1006-1', 'You have received a new applciation. <br> Title: Aims Application Submit', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1006', 'uk-text-success', 'BCDFB392-D7BB-E305-1A0D-A028A8A062A1', '2019-04-26 12:12:00', '');
INSERT INTO `notification` VALUES ('51', 'mail', 'New Application 1007-1', 'You have received a new applciation. <br> Title: test title', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1007', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-04-29 11:47:48', '');
INSERT INTO `notification` VALUES ('52', 'mail', 'New Application 1007-1', 'You have received a new applciation. <br> Title: test title', '', 'C2931A389-2A58-79E8-F076-67504C955H18', 'project_detail/1007', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-04-29 11:47:59', '');
INSERT INTO `notification` VALUES ('53', 'mail', 'New Application 1008-1', 'You have received a new applciation. <br> Title: AIMS application test', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1008', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-03 11:19:40', '');
INSERT INTO `notification` VALUES ('54', 'mail', 'New Application 1008-1', 'You have received a new applciation. <br> Title: AIMS application test', '', 'C2931A389-2A58-79E8-F076-67504C955H18', 'project_detail/1008', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-03 11:19:49', '');
INSERT INTO `notification` VALUES ('55', 'comment', 'New Comments Recieved', 'You have received a new comment', '', '83A4FFAC-6813-DCD0-3125-BF8002A70384', 'project_detail/1008', 'uk-text-primary', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', '2019-05-03 11:40:31', '');
INSERT INTO `notification` VALUES ('56', 'comment', 'New Comments Recieved', 'You have received a new comment', '', '83A4FFAC-6813-DCD0-3125-BF8002A70384', 'project_detail/1008', 'uk-text-primary', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', '2019-05-03 12:13:10', '');
INSERT INTO `notification` VALUES ('57', 'mail', 'New Application 1009-1', 'You have received a new applciation. <br> Title: Test Aims 1', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1009', 'uk-text-success', '9A9F3A0B-433F-3DFB-05C6-3761B4C38D50', '2019-05-06 11:55:51', '');
INSERT INTO `notification` VALUES ('58', 'mail', 'New Application 1009-1', 'You have received a new applciation. <br> Title: Test Aims 1', '', 'C2931A389-2A58-79E8-F076-67504C955H18', 'project_detail/1009', 'uk-text-success', '9A9F3A0B-433F-3DFB-05C6-3761B4C38D50', '2019-05-06 11:56:00', '');
INSERT INTO `notification` VALUES ('59', 'comment', 'New Comments Recieved', 'You have received a new comment', '', '9A9F3A0B-433F-3DFB-05C6-3761B4C38D50', 'project_detail/1009', 'uk-text-primary', 'C2931A389-2A58-79E8-F076-67504C955H18', '2019-05-06 11:59:38', '');
INSERT INTO `notification` VALUES ('60', 'comment', 'New Comments Recieved', 'You have received a new comment', '', '9A9F3A0B-433F-3DFB-05C6-3761B4C38D50', 'project_detail/1009', 'uk-text-primary', 'C2931A389-2A58-79E8-F076-67504C955H18', '2019-05-06 11:59:49', '');
INSERT INTO `notification` VALUES ('61', 'mail', 'New Application 1008-2', 'You have received a new applciation. <br> Title: AIMS application test 2', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1008', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-07 11:30:56', '');
INSERT INTO `notification` VALUES ('62', 'mail', 'New Application 1008-2', 'You have received a new applciation. <br> Title: AIMS application test 2', '', 'C2931A389-2A58-79E8-F076-67504C955H18', 'project_detail/1008', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-07 11:31:13', '');
INSERT INTO `notification` VALUES ('63', 'mail', 'New Application 1010-1', 'You have received a new applciation. <br> Title: aims draft', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 11:19:54', '');
INSERT INTO `notification` VALUES ('64', 'mail', 'New Application 1010-1', 'You have received a new applciation. <br> Title: aims draft', '', 'C2931A389-2A58-79E8-F076-67504C955H18', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 11:20:05', '');
INSERT INTO `notification` VALUES ('65', 'comment', 'New Comments Recieved', 'You have received a new comment', '', '83A4FFAC-6813-DCD0-3125-BF8002A70384', 'project_detail/1010', 'uk-text-primary', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-05-13 11:24:50', '');
INSERT INTO `notification` VALUES ('66', 'mail', 'New Application 1010-2', 'You have received a new applciation. <br> Title: aims draft review 2', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 11:41:41', '');
INSERT INTO `notification` VALUES ('67', 'mail', 'New Application 1010-2', 'You have received a new applciation. <br> Title: aims draft review 2', '', 'C2931A389-2A58-79E8-F076-67504C955H18', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 11:41:48', '');
INSERT INTO `notification` VALUES ('68', 'mail', 'New Application 1010-3', 'You have received a new applciation. <br> Title: aims draft review 3', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 11:53:57', '');
INSERT INTO `notification` VALUES ('69', 'mail', 'New Application 1010-3', 'You have received a new applciation. <br> Title: aims draft review 3', '', 'C2931A389-2A58-79E8-F076-67504C955H18', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 11:54:04', '');
INSERT INTO `notification` VALUES ('70', 'comment', 'New Comments Recieved', 'You have received a new comment', '', '83A4FFAC-6813-DCD0-3125-BF8002A70384', 'project_detail/1010', 'uk-text-primary', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-05-13 11:54:22', '');
INSERT INTO `notification` VALUES ('71', 'mail', 'New Application 1010-4', 'You have received a new applciation. <br> Title: aims draft review 4', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 11:57:53', '');
INSERT INTO `notification` VALUES ('72', 'mail', 'New Application 1010-4', 'You have received a new applciation. <br> Title: aims draft review 4', '', 'C2931A389-2A58-79E8-F076-67504C955H18', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 11:57:59', '');
INSERT INTO `notification` VALUES ('73', 'mail', 'New Application 1010-5', 'You have received a new applciation. <br> Title: aims draft review 5', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 12:03:14', '');
INSERT INTO `notification` VALUES ('74', 'mail', 'New Application 1010-5', 'You have received a new applciation. <br> Title: aims draft review 5', '', 'C2931A389-2A58-79E8-F076-67504C955H18', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 12:03:21', '');
INSERT INTO `notification` VALUES ('75', 'mail', 'New Application 1010-5', 'You have received a new applciation. <br> Title: aims draft review 5', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 12:05:43', '');
INSERT INTO `notification` VALUES ('76', 'mail', 'New Application 1010-5', 'You have received a new applciation. <br> Title: aims draft review 5', '', 'C2931A389-2A58-79E8-F076-67504C955H18', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 12:05:50', '');
INSERT INTO `notification` VALUES ('77', 'mail', 'New Application 1010-5', 'You have received a new applciation. <br> Title: aims draft review 7', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 12:11:48', '');
INSERT INTO `notification` VALUES ('78', 'mail', 'New Application 1010-5', 'You have received a new applciation. <br> Title: aims draft review 7', '', 'C2931A389-2A58-79E8-F076-67504C955H18', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 12:11:55', '');
INSERT INTO `notification` VALUES ('79', 'mail', 'New Application 1010-5', 'You have received a new applciation. <br> Title: aims draft review 5', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 12:12:59', '');
INSERT INTO `notification` VALUES ('80', 'mail', 'New Application 1010-5', 'You have received a new applciation. <br> Title: aims draft review 5', '', 'C2931A389-2A58-79E8-F076-67504C955H18', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 12:13:05', '');
INSERT INTO `notification` VALUES ('81', 'mail', 'New Application 1010-5', 'You have received a new applciation. <br> Title: aims draft review 6', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 12:14:33', '');
INSERT INTO `notification` VALUES ('82', 'mail', 'New Application 1010-5', 'You have received a new applciation. <br> Title: aims draft review 6', '', 'C2931A389-2A58-79E8-F076-67504C955H18', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 12:14:40', '');
INSERT INTO `notification` VALUES ('83', 'mail', 'New Application 1010-5', 'You have received a new applciation. <br> Title: aims draft review 5', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 12:17:28', '');
INSERT INTO `notification` VALUES ('84', 'mail', 'New Application 1010-5', 'You have received a new applciation. <br> Title: aims draft review 5', '', 'C2931A389-2A58-79E8-F076-67504C955H18', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 12:17:35', '');
INSERT INTO `notification` VALUES ('85', 'mail', 'New Application 1010-6', 'You have received a new applciation. <br> Title: aims draft review 5', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 12:18:31', '');
INSERT INTO `notification` VALUES ('86', 'mail', 'New Application 1010-6', 'You have received a new applciation. <br> Title: aims draft review 5', '', 'C2931A389-2A58-79E8-F076-67504C955H18', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 12:18:38', '');
INSERT INTO `notification` VALUES ('87', 'mail', 'New Application 1010-5', 'You have received a new applciation. <br> Title: aims draft review 4', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 12:20:32', '');
INSERT INTO `notification` VALUES ('88', 'mail', 'New Application 1010-5', 'You have received a new applciation. <br> Title: aims draft review 4', '', 'C2931A389-2A58-79E8-F076-67504C955H18', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 12:20:40', '');
INSERT INTO `notification` VALUES ('89', 'mail', 'New Application 1010-6', 'You have received a new applciation. <br> Title: aims draft review 5', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 12:21:24', '');
INSERT INTO `notification` VALUES ('90', 'mail', 'New Application 1010-6', 'You have received a new applciation. <br> Title: aims draft review 5', '', 'C2931A389-2A58-79E8-F076-67504C955H18', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 12:21:31', '');
INSERT INTO `notification` VALUES ('91', 'mail', 'New Application 1010-6', 'You have received a new applciation. <br> Title: aims draft review 6', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 12:22:03', '');
INSERT INTO `notification` VALUES ('92', 'mail', 'New Application 1010-6', 'You have received a new applciation. <br> Title: aims draft review 6', '', 'C2931A389-2A58-79E8-F076-67504C955H18', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 12:22:10', '');
INSERT INTO `notification` VALUES ('93', 'mail', 'New Application 1010-7', 'You have received a new applciation. <br> Title: aims draft review 7', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 12:22:25', '');
INSERT INTO `notification` VALUES ('94', 'mail', 'New Application 1010-7', 'You have received a new applciation. <br> Title: aims draft review 7', '', 'C2931A389-2A58-79E8-F076-67504C955H18', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 12:22:31', '');
INSERT INTO `notification` VALUES ('95', 'mail', 'New Application 1010-7', 'You have received a new applciation. <br> Title: aims draft review 7', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 12:24:25', '');
INSERT INTO `notification` VALUES ('96', 'mail', 'New Application 1010-7', 'You have received a new applciation. <br> Title: aims draft review 7', '', 'C2931A389-2A58-79E8-F076-67504C955H18', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 12:24:31', '');
INSERT INTO `notification` VALUES ('97', 'mail', 'New Application 1010-7', 'You have received a new applciation. <br> Title: aims draft review 7', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 12:28:34', '');
INSERT INTO `notification` VALUES ('98', 'mail', 'New Application 1010-7', 'You have received a new applciation. <br> Title: aims draft review 7', '', 'C2931A389-2A58-79E8-F076-67504C955H18', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 12:28:41', '');
INSERT INTO `notification` VALUES ('99', 'mail', 'New Application 1010-8', 'You have received a new applciation. <br> Title: aims draft review 8', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 12:33:02', '');
INSERT INTO `notification` VALUES ('100', 'mail', 'New Application 1010-8', 'You have received a new applciation. <br> Title: aims draft review 8', '', 'C2931A389-2A58-79E8-F076-67504C955H18', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 12:33:09', '');
INSERT INTO `notification` VALUES ('101', 'mail', 'New Application 1010-9', 'You have received a new applciation. <br> Title: aims draft review9', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 12:33:25', '');
INSERT INTO `notification` VALUES ('102', 'mail', 'New Application 1010-9', 'You have received a new applciation. <br> Title: aims draft review9', '', 'C2931A389-2A58-79E8-F076-67504C955H18', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 12:33:30', '');
INSERT INTO `notification` VALUES ('103', 'comment', 'New Comments Recieved', 'You have received a new comment', '', '83A4FFAC-6813-DCD0-3125-BF8002A70384', 'project_detail/1010', 'uk-text-primary', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-05-13 12:34:35', '');
INSERT INTO `notification` VALUES ('104', 'comment', 'New Comments Recieved', 'You have received a new comment', '', '83A4FFAC-6813-DCD0-3125-BF8002A70384', 'project_detail/1010', 'uk-text-primary', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-05-13 12:41:38', '');
INSERT INTO `notification` VALUES ('105', 'comment', 'New Comments Recieved', 'You have received a new comment', '', '83A4FFAC-6813-DCD0-3125-BF8002A70384', 'project_detail/1010', 'uk-text-primary', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-05-13 12:42:17', '');
INSERT INTO `notification` VALUES ('106', 'comment', 'New Comments Recieved', 'You have received a new comment', '', '83A4FFAC-6813-DCD0-3125-BF8002A70384', 'project_detail/1010', 'uk-text-primary', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-05-13 12:44:33', '');
INSERT INTO `notification` VALUES ('107', 'mail', 'New Application 1010-5', 'You have received a new applciation. <br> Title: aims draft review 5', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 12:47:40', '');
INSERT INTO `notification` VALUES ('108', 'mail', 'New Application 1010-5', 'You have received a new applciation. <br> Title: aims draft review 5', '', 'C2931A389-2A58-79E8-F076-67504C955H18', 'project_detail/1010', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 12:47:46', '');
INSERT INTO `notification` VALUES ('109', 'mail', 'New Application 1011-1', 'You have received a new applciation. <br> Title: DRC appliation', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1011', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 14:06:00', '');
INSERT INTO `notification` VALUES ('110', 'mail', 'New Application 1011-1', 'You have received a new applciation. <br> Title: DRC appliation', '', 'C2931A389-2A58-79E8-F076-67504C955H18', 'project_detail/1011', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 14:06:12', '');
INSERT INTO `notification` VALUES ('111', 'mail', 'New Application 1012-1', 'You have received a new applciation. <br> Title: adasdas', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1012', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 14:08:04', '');
INSERT INTO `notification` VALUES ('112', 'mail', 'New Application 1012-1', 'You have received a new applciation. <br> Title: adasdas', '', 'C2931A389-2A58-79E8-F076-67504C955H18', 'project_detail/1012', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 14:08:11', '');
INSERT INTO `notification` VALUES ('113', 'comment', 'New Comments Recieved', 'You have received a new comment', '', '83A4FFAC-6813-DCD0-3125-BF8002A70384', 'project_detail/1012', 'uk-text-primary', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-05-13 14:08:52', '');
INSERT INTO `notification` VALUES ('114', 'mail', 'New Application 1013-1', 'You have received a new applciation. <br> Title: test test', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1013', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 14:41:31', '');
INSERT INTO `notification` VALUES ('115', 'mail', 'New Application 1013-1', 'You have received a new applciation. <br> Title: test test', '', 'C2931A389-2A58-79E8-F076-67504C955H18', 'project_detail/1013', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 14:41:40', '');
INSERT INTO `notification` VALUES ('116', 'comment', 'New Comments Recieved', 'You have received a new comment', '', '83A4FFAC-6813-DCD0-3125-BF8002A70384', 'project_detail/1013', 'uk-text-primary', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-05-13 14:48:53', '');
INSERT INTO `notification` VALUES ('117', 'mail', 'New Application 1013-2', 'You have received a new applciation. <br> Title: test test 2222', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1013', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 14:49:54', '');
INSERT INTO `notification` VALUES ('118', 'mail', 'New Application 1013-2', 'You have received a new applciation. <br> Title: test test 2222', '', 'C2931A389-2A58-79E8-F076-67504C955H18', 'project_detail/1013', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-13 14:50:00', '');
INSERT INTO `notification` VALUES ('119', 'mail', 'New Application 1015-1', 'You have received a new applciation. <br> Title: tyetasd', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1015', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-28 11:56:10', '');
INSERT INTO `notification` VALUES ('120', 'mail', 'New Application 1015-1', 'You have received a new applciation. <br> Title: tyetasd', '', 'C2931A389-2A58-79E8-F076-67504C955H18', 'project_detail/1015', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-28 11:56:20', '');
INSERT INTO `notification` VALUES ('121', 'mail', 'New Application 1016-1', 'You have received a new applciation. <br> Title: test asdd', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1016', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-28 11:58:40', '');
INSERT INTO `notification` VALUES ('122', 'mail', 'New Application 1016-1', 'You have received a new applciation. <br> Title: test asdd', '', 'C2931A389-2A58-79E8-F076-67504C955H18', 'project_detail/1016', 'uk-text-success', '83A4FFAC-6813-DCD0-3125-BF8002A70384', '2019-05-28 11:58:47', '');
INSERT INTO `notification` VALUES ('123', 'mail', 'New Application 1017-1', 'You have received a new applciation. <br> Title: Test 26 june 19', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1017', 'uk-text-success', 'B859AC63-F662-E48F-D6E3-F382F85050A5', '2019-06-26 09:51:46', '');
INSERT INTO `notification` VALUES ('124', 'mail', 'New Application 1017-1', 'You have received a new applciation. <br> Title: Test 26 june 19', '', 'C2931A389-2A58-79E8-F076-67504C955H18', 'project_detail/1017', 'uk-text-success', 'B859AC63-F662-E48F-D6E3-F382F85050A5', '2019-06-26 09:51:52', '');
INSERT INTO `notification` VALUES ('125', 'comment', 'New Comments Recieved', 'You have received a new comment', '', 'B859AC63-F662-E48F-D6E3-F382F85050A5', 'project_detail/1017', 'uk-text-primary', 'C2931A389-2A58-79E8-F076-67504C955H18', '2019-06-26 09:56:01', '');
INSERT INTO `notification` VALUES ('126', 'mail', 'New Application 1018-1', 'You have received a new applciation. <br> Title: babasdsadasd', '', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'project_detail/1018', 'uk-text-success', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-07-08 15:21:59', '');
INSERT INTO `notification` VALUES ('127', 'mail', 'New Application 1018-1', 'You have received a new applciation. <br> Title: babasdsadasd', '', 'C2931A389-2A58-79E8-F076-67504C955H18', 'project_detail/1018', 'uk-text-success', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-07-08 15:22:12', '');
INSERT INTO `notification` VALUES ('128', 'comment', 'New Comments Recieved', 'You have received a new comment', '', 'B859AC63-F662-E48F-D6E3-F382F85050A5', 'project_detail/1017', 'uk-text-primary', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-07-08 15:25:11', '');

-- ----------------------------
-- Table structure for `pagegroup`
-- ----------------------------
DROP TABLE IF EXISTS `pagegroup`;
CREATE TABLE `pagegroup` (
  `idPageGroup` varchar(255) NOT NULL,
  `idGroup` varchar(255) DEFAULT NULL,
  `idPages` varchar(255) DEFAULT NULL,
  `CanAdd` bit(1) DEFAULT b'0',
  `CanEdit` bit(1) DEFAULT b'0',
  `CanDelete` bit(1) DEFAULT b'0',
  `CanView` bit(1) DEFAULT b'0',
  `CanViewAllDetail` bit(1) DEFAULT b'0',
  `isActive` bit(1) DEFAULT b'1',
  PRIMARY KEY (`idPageGroup`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pagegroup
-- ----------------------------
INSERT INTO `pagegroup` VALUES ('08444cb3-0a47-4e58-b110-13e5058cac3f', '5PJ0CBA5-G72F-4280-CA41-1F2933C5B90D', '7b668b0f-b90e-467d-9c8b-c2e2a6911981', '', '', '', '', '', '');
INSERT INTO `pagegroup` VALUES ('0E6A3956-83E1-F8B3-BC8B-DB5C1D651154', 'B80AA3B7-B792-722D-8553-B676C5908A72', '72bd808d-8033-47e9-a580-7ab5b5492837', '', '', '', '', '', '');
INSERT INTO `pagegroup` VALUES ('2cc64fd6-4c56-4164-8801-190c5f5c149e', '5PJ0CBA5-G72F-4280-CA41-1F2933C5B90D', 'ff0d3248-2fe9-4157-a922-e131eaa1efe4', '', '', '', '', '', '');
INSERT INTO `pagegroup` VALUES ('3FBC940D-72CA-19C3-6233-087DAAECDF7B', 'B80AA3B7-B792-722D-8553-B676C5908A72', '1263d139-3698-46aa-b8c6-35b20019fd69', '', '', '', '', '', '');
INSERT INTO `pagegroup` VALUES ('42406577-46C9-1A3A-19B5-9E0A502E1A1E', '1AA4943C-B01F-61DF-A582-04A3E8150048', '208FA412-F700-3339-CA7E-4E9EE459F6C0', '', '', '', '', '', '');
INSERT INTO `pagegroup` VALUES ('48FE9A0A-54ED-72B5-B227-A4F0CF854A0D', 'B80AA3B7-B792-722D-8553-B676C5908A72', 'cc5f8e7a-c74d-419b-82dd-7c59b026e8f5', '', '', '', '', '', '');
INSERT INTO `pagegroup` VALUES ('58a8f49f-3363-40f9-bdc1-14c0ea120b97', '1AA4943C-B01F-61DF-A582-04A3E8150048', 'ae40d56c-1f44-46e8-82f4-6360a26b30b8', '', '', '', '', '', '');
INSERT INTO `pagegroup` VALUES ('5B24D6B6-1ED9-6D2C-1AAD-60A447A4C67D', '5PJ0CBA5-G72F-4280-CA41-1F2933C5B90D', '97E36CB6-A673-9ADC-711A-2A574A24CBC0', '', '', '', '', '', '');
INSERT INTO `pagegroup` VALUES ('5ce26d33-b3e5-4c07-aecc-d40bb7d39ce1', '1AA4943C-B01F-61DF-A582-04A3E8150048', 'cc5f8e7a-c74d-419b-82dd-7c59b026e8f5', '', '', '', '', '', '');
INSERT INTO `pagegroup` VALUES ('67B24AE4-7FDF-80DB-0E67-D03F75FE9CD6', 'B80AA3B7-B792-722D-8553-B676C5908A72', '7b668b0f-b90e-467d-9c8b-c2e2a6911981', '', '', '', '', '', '');
INSERT INTO `pagegroup` VALUES ('68a19c68-4326-4b7c-a66c-eea13866c306', '5PJ0CBA5-G72F-4280-CA41-1F2933C5B90D', 'ae40d56c-1f44-46e8-82f4-6360a26b30b8', '', '', '', '', '', '');
INSERT INTO `pagegroup` VALUES ('6cf1b0cf-4312-4fee-8d27-1a66b22fc477', '1AA4943C-B01F-61DF-A582-04A3E8150048', 'T70d3248-2fe9-4157-a932-e131eaa1efe1', '', '', '', '', '', '');
INSERT INTO `pagegroup` VALUES ('6EC22485-D3EF-AE2B-08A6-5B3D830251B5', 'B80AA3B7-B792-722D-8553-B676C5908A72', 'ff0d3248-2fe9-4157-a922-e131eaa1efe4', '', '', '', '', '', '');
INSERT INTO `pagegroup` VALUES ('728A2AE1-8EA6-E7B3-B53A-F03BC55882FD', '1AA4943C-B01F-61DF-A582-04A3E8150048', 'ff0d3248-2fe9-4157-a922-e131eaa1efe4', '', '', '', '', '', '');
INSERT INTO `pagegroup` VALUES ('81D905E7-B704-FC1F-A15B-F1F20E107241', '5PJ0CBA5-G72F-4280-CA41-1F2933C5B90D', 'BB2E4401-D405-55E8-A3C6-CC37A27DC327', '', '', '', '', '', '');
INSERT INTO `pagegroup` VALUES ('8398EE0C-BEF5-F263-3680-483B66FDBD97', '1AA4943C-B01F-61DF-A582-04A3E8150048', 'BB2E4401-D405-55E8-A3C6-CC37A27DC327', '', '', '', '', '', '');
INSERT INTO `pagegroup` VALUES ('90B3A59A-9035-BB47-0F67-8719C68E87EA', 'B80AA3B7-B792-722D-8553-B676C5908A72', '208FA412-F700-3339-CA7E-4E9EE459F6C0', '', '', '', '', '', '');
INSERT INTO `pagegroup` VALUES ('92860DF8-7D3F-B160-02D7-94E86F809143', 'B80AA3B7-B792-722D-8553-B676C5908A72', '97E36CB6-A673-9ADC-711A-2A574A24CBC0', '', '', '', '', '', '');
INSERT INTO `pagegroup` VALUES ('97739515-c587-4849-aa53-c51f026b3b5c', '5PJ0CBA5-G72F-4280-CA41-1F2933C5B90D', 'T70d3248-2fe9-4157-a932-e131eaa1efe1', '', '', '', '', '', '');
INSERT INTO `pagegroup` VALUES ('A34130B7-DA0A-18D1-1F32-91E85C0E4138', 'B80AA3B7-B792-722D-8553-B676C5908A72', 'ae40d56c-1f44-46e8-82f4-6360a26b30b8', '', '', '', '', '', '');
INSERT INTO `pagegroup` VALUES ('A8722A7F-0D57-97D1-AB09-3EC7BC1261F2', '1AA4943C-B01F-61DF-A582-04A3E8150048', '72bd808d-8033-47e9-a580-7ab5b5492837', '', '', '', '', '', '');
INSERT INTO `pagegroup` VALUES ('B86BE76A-7D01-20F0-319B-03D02955ECD2', '5PJ0CBA5-G72F-4280-CA41-1F2933C5B90D', '208FA412-F700-3339-CA7E-4E9EE459F6C0', '', '', '', '', '', '');
INSERT INTO `pagegroup` VALUES ('badcde94-4323-4619-b914-236553e0bf54', '5PJ0CBA5-G72F-4280-CA41-1F2933C5B90D', '72bd808d-8033-47e9-a580-7ab5b5492837', '', '', '', '', '', '');
INSERT INTO `pagegroup` VALUES ('BF3FADEF-0BEC-661A-8556-60E427CAFB43', 'B80AA3B7-B792-722D-8553-B676C5908A72', 'BB2E4401-D405-55E8-A3C6-CC37A27DC327', '', '', '', '', '', '');
INSERT INTO `pagegroup` VALUES ('C3624BCE-5F6A-3808-FB25-783FABAF658F', 'B80AA3B7-B792-722D-8553-B676C5908A72', 'T70d3248-2fe9-4157-a932-e131eaa1efe1', '', '', '', '', '', '');
INSERT INTO `pagegroup` VALUES ('E2675622-8B7A-3866-5A06-AB0FAC334ED0', '1AA4943C-B01F-61DF-A582-04A3E8150048', '7b668b0f-b90e-467d-9c8b-c2e2a6911981', '', '', '', '', '', '');
INSERT INTO `pagegroup` VALUES ('e359a33c-3e82-4505-a9ea-b13ba64d9622', '5PJ0CBA5-G72F-4280-CA41-1F2933C5B90D', 'cc5f8e7a-c74d-419b-82dd-7c59b026e8f5', '', '', '', '', '', '');
INSERT INTO `pagegroup` VALUES ('F4195EEF-0527-066A-0F0A-646FB287EEBF', '1AA4943C-B01F-61DF-A582-04A3E8150048', '97E36CB6-A673-9ADC-711A-2A574A24CBC0', '', '', '', '', '', '');

-- ----------------------------
-- Table structure for `pages`
-- ----------------------------
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `idPages` varchar(255) NOT NULL,
  `page_name` varchar(255) DEFAULT NULL,
  `page_url` varchar(255) DEFAULT NULL,
  `isParent` bit(1) DEFAULT b'0',
  `idParent` varchar(255) DEFAULT NULL,
  `controller_name` varchar(255) DEFAULT NULL,
  `model_name` varchar(255) DEFAULT NULL,
  `sort_no` int(11) DEFAULT NULL,
  `isActive` bit(1) DEFAULT b'1',
  PRIMARY KEY (`idPages`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pages
-- ----------------------------
INSERT INTO `pages` VALUES ('1263d139-3698-46aa-b8c6-35b20019fd69', 'Admin', '#', '', null, null, null, '10', '');
INSERT INTO `pages` VALUES ('208FA412-F700-3339-CA7E-4E9EE459F6C0', 'Teams', 'Teams', '', '1263d139-3698-46aa-b8c6-35b20019fd69', 'Teams', 'MTeams', '11', '');
INSERT INTO `pages` VALUES ('72bd808d-8033-47e9-a580-7ab5b5492837', 'Dashboard', 'dashboard', '', null, 'Dashboard', 'MDashboard', '1', '');
INSERT INTO `pages` VALUES ('7b668b0f-b90e-467d-9c8b-c2e2a6911981', 'Settings', 'setting', '', '1263d139-3698-46aa-b8c6-35b20019fd69', 'Setting', 'MSetting', '14', '');
INSERT INTO `pages` VALUES ('97E36CB6-A673-9ADC-711A-2A574A24CBC0', 'Drafts', 'form_drafts', '', null, 'Form', 'MForm_View', '5', '');
INSERT INTO `pages` VALUES ('ae40d56c-1f44-46e8-82f4-6360a26b30b8', 'Applications', 'form_view', '', null, 'Form_View', 'MForm_View', '4', '');
INSERT INTO `pages` VALUES ('BB2E4401-D405-55E8-A3C6-CC37A27DC327', 'AIMS Applications', 'aims_applications', '', null, 'Form', 'MForm', '2', '');
INSERT INTO `pages` VALUES ('cc5f8e7a-c74d-419b-82dd-7c59b026e8f5', 'Pages', 'pages', '', '1263d139-3698-46aa-b8c6-35b20019fd69', 'Pages', 'MPages', '12', '');
INSERT INTO `pages` VALUES ('ff0d3248-2fe9-4157-a922-e131eaa1efe4', 'Users', 'users', '', '1263d139-3698-46aa-b8c6-35b20019fd69', 'Users', 'MUsers', '13', '');
INSERT INTO `pages` VALUES ('T70d3248-2fe9-4157-a932-e131eaa1efe1', 'DRC Application', 'form', '', null, 'Form', 'MForm', '3', '');

-- ----------------------------
-- Table structure for `teams`
-- ----------------------------
DROP TABLE IF EXISTS `teams`;
CREATE TABLE `teams` (
  `idTeam` varchar(255) NOT NULL,
  `team_name` varchar(255) DEFAULT NULL,
  `isActive` bit(1) DEFAULT b'1',
  PRIMARY KEY (`idTeam`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of teams
-- ----------------------------
INSERT INTO `teams` VALUES ('2a9898c4-8720-41cc-89e1-59e047b957ab', 'Team B', '');
INSERT INTO `teams` VALUES ('65b157c5-45b8-4317-8aeb-030a88961264', 'Team A', '');

-- ----------------------------
-- Table structure for `teamuser`
-- ----------------------------
DROP TABLE IF EXISTS `teamuser`;
CREATE TABLE `teamuser` (
  `idTeamUser` int(11) NOT NULL AUTO_INCREMENT,
  `idTeam` varchar(255) DEFAULT NULL,
  `idUser` varchar(255) DEFAULT NULL,
  `isActive` bit(1) DEFAULT b'1',
  PRIMARY KEY (`idTeamUser`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of teamuser
-- ----------------------------
INSERT INTO `teamuser` VALUES ('1', '65b157c5-45b8-4317-8aeb-030a88961264', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', '');
INSERT INTO `teamuser` VALUES ('2', '65b157c5-45b8-4317-8aeb-030a88961264', 'BCDFB392-D7BB-E305-1A0D-A028A8A062A1', '');
INSERT INTO `teamuser` VALUES ('3', '2a9898c4-8720-41cc-89e1-59e047b957ab', '461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', '');
INSERT INTO `teamuser` VALUES ('4', '2a9898c4-8720-41cc-89e1-59e047b957ab', 'B931A389-1F58-79E8-F076-67504C955A90', '');

-- ----------------------------
-- Table structure for `testform`
-- ----------------------------
DROP TABLE IF EXISTS `testform`;
CREATE TABLE `testform` (
  `idTestForm` varchar(255) NOT NULL,
  `idForm` int(11) NOT NULL AUTO_INCREMENT,
  `ReviewNo` int(11) DEFAULT NULL,
  `idParentDraft` int(11) DEFAULT NULL,
  `attach_files` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `wizard_address__0` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `wizard_birth_place` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `application_number` varchar(255) DEFAULT NULL,
  `application_starting_date` varchar(255) DEFAULT NULL,
  `application_end_date` varchar(255) DEFAULT NULL,
  `example_1` varchar(255) DEFAULT NULL,
  `example_2` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `isSubmit` bit(1) DEFAULT b'0' COMMENT '1 means draft, 0 means submit',
  `createdBy` varchar(255) DEFAULT NULL,
  `createdDateTime` datetime DEFAULT NULL,
  `isActive` bit(1) DEFAULT b'1',
  PRIMARY KEY (`idForm`,`idTestForm`)
) ENGINE=InnoDB AUTO_INCREMENT=994883 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of testform
-- ----------------------------
INSERT INTO `testform` VALUES ('869AF6FF-F04D-851F-DC11-F78769DC1432', '994874', '1', '994873', 'assets/uploads/994874.xlsx', 'testing', 'Johar More karachi', '03.25.2019', 'Lahore', 'Male', '3432855294', 'shehroz.altaf92@gmail.com', '', '', '', '', '', 'High', '', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-03-25 07:14:28', '');
INSERT INTO `testform` VALUES ('8AC7888D-34B1-CFD7-33BF-792DF56C3182', '994875', '1', '0', '', 'shehroz test', 'Johar More karachi', '03.25.2019', '0', 'Male', '3432855294', 'shehroz.altaf92@gmail.com', 'sdsd', '03.25.2019', '03.13.2019', '', 'dsfds', 'High', '', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-03-25 07:52:52', '');
INSERT INTO `testform` VALUES ('4A4BBDC8-6E65-8FFE-1B91-56D7632EC496', '994876', '1', '994875', 'assets/uploads/994876.txt', 'My TEST', 'Johar More karachi', '03.25.2019', 'Lahore', 'Male', '3432855294', 'shehroz.altaf92@gmail.com', 'asbcd', '03.25.2019', '03.26.2019', 'abcd', 'xtz', 'High', '', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-03-25 12:00:00', '');
INSERT INTO `testform` VALUES ('0BEC9457-5821-CC06-76C7-491D8A812C6A', '994877', '4', '994877', '', 'Review 4', 'abcd', '03.21.2019', 'Lahore', 'Male', '3432855294', 'shahroz.khan@aku.edu', 'test', '03.26.2019', '03.26.2019', '11', '11', 'High', '', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-03-25 17:09:40', '');
INSERT INTO `testform` VALUES ('1411D45B-B257-4642-F1AA-8AF04226029B', '994877', '1', '0', 'assets/uploads/994878.txt', 'Review 1', 'abcd', '03.21.2019', 'Lahore', 'Male', '3432855294', 'shahroz.khan@aku.edu', 'test', '03.26.2019', '03.26.2019', '11', '11', 'High', '', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-03-25 13:16:48', '');
INSERT INTO `testform` VALUES ('1FDF179F-2989-99DB-187B-775694B970A0', '994877', '2', '994877', 'assets/uploads/994877.txt', 'Review 2', 'Johar More karachi', '03.25.2019', 'Lahore', 'Male', '3432855294', 'shehroz.altaf92@gmail.com', 'asbcd', '03.25.2019', '03.26.2019', 'abcd', 'xtz', 'High', '', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-03-25 12:00:25', '');
INSERT INTO `testform` VALUES ('389C6715-4BFB-863D-F999-F9A8D782ABA1', '994877', '5', '994877', '', 'Review 5', 'abcd', '03.21.2019', 'Lahore', 'Male', '3432855294', 'shahroz.khan@aku.edu', 'test', '03.26.2019', '03.26.2019', '11', '11', 'High', '', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-03-25 17:19:16', '');
INSERT INTO `testform` VALUES ('3E7B3562-D330-86BA-C68C-652808DC876A', '994877', '6', '994877', 'assets/uploads/994877.xlsx', 'Review 6', 'abcd', '03.21.2019', 'Lahore', 'Male', '3432855294', 'shahroz.khan@aku.edu', 'test', '03.26.2019', '03.26.2019', '11', '11', 'High', '', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-03-25 17:18:06', '');
INSERT INTO `testform` VALUES ('8F6318EC-E765-9D68-7F2D-682AAA508D58', '994877', '3', '994877', 'assets/uploads/994877.txt', 'Review 3', 'abcd', '03.21.2019', 'Lahore', 'Male', '3432855294', 'shahroz.khan@aku.edu', 'test', '03.26.2019', '03.26.2019', '11', '11', 'High', '', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-03-25 16:06:59', '');
INSERT INTO `testform` VALUES ('E6EF9C2C-0EC2-FA3C-DFBC-5D8A6AB1F8E8', '994878', '1', '0', '', 'asdasd', '', '', '0', null, '', '', '', '', '', '', '', 'High', '', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-03-26 11:02:10', '');
INSERT INTO `testform` VALUES ('777E0FA7-3B26-0367-DA40-CAAAA141F474', '994879', '1', '0', 'assets/uploads/994879.txt', 'Imran Ahmed', 'my adress', '03.03.2019', 'Lahore', 'Male', '3212435677', 'imran.nisar@aku.edu', '12', '03.01.2019', '03.03.2019', 'q', 'q', 'High', '', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-03-26 11:02:36', '');
INSERT INTO `testform` VALUES ('D29D8038-0D24-CF3E-60D8-FCCB8800D1DD', '994880', '1', '0', 'assets/uploads/994880.txt', 'Imran Ahmed', 'my adress', '03.03.2019', 'Lahore', 'Male', '3212435677', 'imran.ahmed@aku.edu', '12', '03.01.2019', '03.03.2019', 'q', 'q', 'High', '', '3EC0CBA5-F78F-4F80-BA41-052933C5B90D', '2019-03-26 11:04:16', '');
INSERT INTO `testform` VALUES ('19230566-563B-3B24-122D-30189840CC46', '994881', '1', '0', '', 'sk test draft', '', '', '0', null, '', '', '', '', '', '', '', 'High', '', 'BCDFB392-D7BB-E305-1A0D-A028A8A062A1', '2019-03-26 17:26:57', '');
INSERT INTO `testform` VALUES ('3489A047-2A19-2443-DA44-74F583A5B020', '994882', '2', '994881', '', 'sk test draft', 'test address', '', '0', null, '', '', '', '', '', '', '', 'High', '', 'BCDFB392-D7BB-E305-1A0D-A028A8A062A1', '2019-03-26 18:03:03', '');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `idUser` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_org` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idGroup` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isActive` bit(1) DEFAULT b'1',
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('057AEE66-BD59-ACB9-BEDE-E7C8B4FDD296', 'shehroz.altaf92s@gmail.com', 'dr/xbyOumM+A7PreLaZzSahklq8UJva0eVadcrHOnqwtmj+NwS7FKvaU+V++Jg6n60UHA+iWDqYYfiMX6HFQgA==', 'asd', '', '1', '1AA4943C-B01F-61DF-A582-04A3E8150048', '');
INSERT INTO `users` VALUES ('1B87B8C4-1762-4560-3FE0-2EAA0140CB35', 'shehroz.altaf92as@gmail.com', 'XZiGGlNiNxFDhfIzk05WNemFKYWE1U2tzkMthyyTGV1yDJV1eVqNTjaytFdWoQCpynkfWxk9SA6SM95QUyjSZA==', 'asdas', '', '1', '1AA4943C-B01F-61DF-A582-04A3E8150048', '');
INSERT INTO `users` VALUES ('3EC0CBA5-F78F-4F80-BA41-052933C5B90D', 'dmu@aku', 'yvAV9WPVrPW4Ht0T8WskzZZ5WUBswUUq6KwCxdvaLeKzn5EqBsr4nATLf2GlPILl8SPeg1LUkblDWqTVtA9TGQ==', 'AKU DMU', 'admin', '1', '5PJ0CBA5-G72F-4280-CA41-1F2933C5B90D', '');
INSERT INTO `users` VALUES ('461BFBAA-71E5-3B15-3D27-3E7ECD6FBE97', 'shehroz.altaf92@gmail.com', 'stLLxok0A7i1aRBxOQo2Po2Wh3cz4NxHhnHYicyFSPzvFD6nSchzGQ5Z3M1ToH0sResDapHYlhdw0BdUCA7VpA==', 'Shehroz', 'Programmer Analyst', '1', 'B80AA3B7-B792-722D-8553-B676C5908A72', '');
INSERT INTO `users` VALUES ('623D0E32-25D5-AF5E-9356-990F36E0EE0B', 'muhammad.fazal@aku.edu', 'EvsZMOuzR8nt7fd4vzVQuozAbmg83i3j81sulJJL8t/2HBW8hQweC8Hm5qF7j0T3XY0SU8Wxdb1QWG0zuWcXgA==', 'Muhammad Fazal', 'sra', '1', '1AA4943C-B01F-61DF-A582-04A3E8150048', '');
INSERT INTO `users` VALUES ('83A4FFAC-6813-DCD0-3125-BF8002A70384', 'muhammad.farooqui@aku.edu', 'OD2M+Adt5SIN55zgMn97EHCoYGstu8EYCdFBBmLZrAr2w33yjU2TR6sqR8ujRX2wL7WFWhXzm74OSIuTyQ8ZOg==', 'Waqar Farooqui', 'DIO', '1', '1AA4943C-B01F-61DF-A582-04A3E8150048', '');
INSERT INTO `users` VALUES ('85350B41-338C-BDA7-B021-E4BA9CF0076C', 'hassan.naqvi@aku.edu', 'Ekd4NvUYIUAykZktJVmowpoWrveelDIyxskEUyDDHTiYtxxcUiaTLyiTKMmX985DHjzyD9oLEFKpOODV0lcJPA==', 'Hassan Naqvi', 'SR', '1', '1AA4943C-B01F-61DF-A582-04A3E8150048', '');
INSERT INTO `users` VALUES ('9A9F3A0B-433F-3DFB-05C6-3761B4C38D50', 'shehroz.altafasd92@gmail.com', 'wmmYJodBwVkFx54i/h/WolhpDtNgkpaHo4O+H88t5XLkiQJemrwo/pIgaywWuFPoPzsEeaK5Kq4m5a0pyyFHiA==', 'Test SignUp', 'asd', '1', '1AA4943C-B01F-61DF-A582-04A3E8150048', '');
INSERT INTO `users` VALUES ('A05CB172-68C6-D3D3-8392-4DA98B640400', 'testsignupemail@aku.edu', 'T50S646iEHr0bUqzutCBhRiKVjMxiPozXntzOHLnRT3A3BFtLyYIUpleB+CJ/XQ85FmN+zpjOPZwMXT8MhOmEg==', 'texst signup email', 'Test', '1', '1AA4943C-B01F-61DF-A582-04A3E8150048', '');
INSERT INTO `users` VALUES ('B859AC63-F662-E48F-D6E3-F382F85050A5', 'newtest@gmail.com', 'lunI7oNj8J6gPoTSMzA7CJ/hzV2CMbZNXUmqrcC2ImQZdj6gHnsffyq0bHGt/AiwVy+9qKRVm5Q5FHg4DDO+WA==', 'newtest Signup', 'Dummy', '1', '1AA4943C-B01F-61DF-A582-04A3E8150048', '');
INSERT INTO `users` VALUES ('B931A389-1F58-79E8-F076-67504C955A90', 'abcd@xyz.com', 'Lt18e6yLMAu9VTHjZCAH28TJuZq3YLQcjpBqLBKvf98Qw2RxxsPDB4lbYF9Q4CKY0f8K4l6l46Bajs2RSULYvg==', 'Test User 2', 'Test', '1', '1AA4943C-B01F-61DF-A582-04A3E8150048', '');
INSERT INTO `users` VALUES ('BCDFB392-D7BB-E305-1A0D-A028A8A062A1', 'sk_khan911@hotmail.com', 'GzKDtGZpXsYy7H65kTAFpEKoyb4KkIpKfm64PXckoXmG3ArlfDMoB/cktEBORK5Rtig9QCXBCvrcRBaj71ssig==', 'Test Test', 'test', '1', '1AA4943C-B01F-61DF-A582-04A3E8150048', '');
INSERT INTO `users` VALUES ('C06A806F-99AB-C865-DD49-863478C64881', 'test2@gmail.com', 'iv7kqlnax5ceUkq/fmpwqsIcK6Zdw9dZ+Cc7lk2msS1A0X4NrZyP4p1LCIfAvAk/qDC5zXcuxj8rSGHb7wFLhQ==', 'Test SignUp', 'aaa', '1', '1AA4943C-B01F-61DF-A582-04A3E8150048', '');
INSERT INTO `users` VALUES ('C2931A389-2A58-79E8-F076-67504C955H18', 'Reviewer@gmail.com', 'stLLxok0A7i1aRBxOQo2Po2Wh3cz4NxHhnHYicyFSPzvFD6nSchzGQ5Z3M1ToH0sResDapHYlhdw0BdUCA7VpA==', 'Reviewer', 'Programmer Analyst', '1', 'B80AA3B7-B792-722D-8553-B676C5908A72', '');
