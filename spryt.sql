-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2016 at 04:05 PM
-- Server version: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spryt`
--

-- --------------------------------------------------------

--
-- Table structure for table `download_log`
--

CREATE TABLE IF NOT EXISTS `download_log` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Download_date` date DEFAULT NULL,
  `Download_filename` varchar(300) DEFAULT NULL,
  `Table_name` varchar(300) DEFAULT NULL,
  `Start_Update_Date` date DEFAULT NULL,
  `End_Update_Date` date DEFAULT NULL,
  `Start_Id` int(11) DEFAULT NULL,
  `End_Id` int(11) DEFAULT NULL,
  `Last_Id` int(11) DEFAULT NULL,
  `Full_downLoad` varchar(1) DEFAULT 'N',
  `Incremental_download` varchar(1) DEFAULT 'Y',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `download_log`
--

INSERT INTO `download_log` (`Id`, `Download_date`, `Download_filename`, `Table_name`, `Start_Update_Date`, `End_Update_Date`, `Start_Id`, `End_Id`, `Last_Id`, `Full_downLoad`, `Incremental_download`) VALUES
(1, '2015-04-08', 'dataDownload2015-04-09-03-53-47', 'dyn_tbl_menu_12_submenu_18', '0000-00-00', '0000-00-00', 0, 0, 1, 'N', 'Y'),
(2, '2015-04-08', 'dataDownload2015-04-09-04-11-24', 'dyn_tbl_menu_12_submenu_18', '2015-03-29', '2015-04-01', 0, 0, 1, 'N', 'Y'),
(3, '2015-04-08', 'dataDownload2015-04-09-04-36-14', 'dyn_tbl_menu_12_submenu_18', '0000-00-00', '0000-00-00', 1, 2, 1, 'N', 'Y'),
(4, '2015-04-09', 'dataDownload2015-04-10-04-27-52', 'dyn_tbl_menu_12_submenu_18', '2015-03-30', '2015-04-01', 0, 0, 2, 'N', 'Y'),
(5, '2015-04-09', 'dataDownload2015-04-10-04-33-03', 'dyn_tbl_menu_12_submenu_18', '0000-00-00', '0000-00-00', 1, 2, 2, 'N', 'Y'),
(6, '2015-04-09', 'dataDownload2015-04-10-04-34-59', 'dyn_tbl_menu_12_submenu_18', '0000-00-00', '0000-00-00', 0, 0, 2, 'N', 'Y'),
(7, '2015-04-09', 'dataDownload2015-04-10-04-36-04', 'dyn_tbl_menu_12_submenu_18', '0000-00-00', '0000-00-00', 0, 0, 2, 'N', 'Y'),
(8, '2015-04-15', 'dataDownload2015-04-15-19-54-52', 'dyn_tbl_menu_12_submenu_18', NULL, NULL, NULL, NULL, 2, 'N', 'Y'),
(9, '2015-04-15', 'dataDownload2015-04-15-19-55-58', 'dyn_tbl_menu_12_submenu_18', NULL, NULL, NULL, NULL, 2, 'N', 'Y'),
(10, '2015-04-15', 'dataDownload2015-04-16-03-46-06', 'dyn_tbl_menu_10_submenu_17', NULL, NULL, NULL, NULL, 2, 'N', 'Y'),
(11, '2015-04-15', 'dataDownload2015-04-16-03-48-19', 'dyn_tbl_menu_10_submenu_17', NULL, NULL, NULL, NULL, 2, 'N', 'Y'),
(12, '2015-04-15', 'dataDownload2015-04-16-03-50-49', 'dyn_tbl_menu_10_submenu_17', NULL, NULL, NULL, NULL, 2, 'N', 'Y'),
(13, '2015-04-15', 'dataDownload2015-04-16-04-05-57', 'dyn_tbl_menu_1_submenu_1', NULL, NULL, 1, 5, 5, 'N', 'Y'),
(14, '2015-04-15', 'dataDownload2015-04-16-04-07-57', 'dyn_tbl_menu_10_submenu_17', '2015-03-25', '2015-04-01', NULL, NULL, 2, 'N', 'Y'),
(15, '2015-04-15', 'dataDownload2015-04-16-04-08-32', 'dyn_tbl_menu_10_submenu_17', NULL, NULL, NULL, NULL, 0, 'N', 'Y'),
(16, '2015-04-15', 'dataDownload2015-04-16-04-38-49', 'dyn_tbl_menu_10_submenu_17', NULL, NULL, NULL, NULL, 0, 'N', 'Y'),
(17, '2015-04-15', 'dataDownload2015-04-16-04-40-16', 'dyn_tbl_menu_10_submenu_17', NULL, NULL, NULL, NULL, 2, 'N', 'Y'),
(18, '2015-04-15', 'dataDownload2015-04-16-04-42-03', 'dyn_tbl_menu_10_submenu_17', NULL, NULL, NULL, NULL, 2, 'Y', 'N'),
(19, '2015-04-16', 'dataDownload2015-04-16-20-16-58', 'dyn_tbl_menu_10_submenu_17', NULL, NULL, NULL, NULL, 2, 'Y', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `dyn_tbl_menu_1_submenu_1`
--

CREATE TABLE IF NOT EXISTS `dyn_tbl_menu_1_submenu_1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyName_64` varchar(50) NOT NULL,
  `RegistrationNumber_66` varchar(50) NOT NULL,
  `TAXRegn_79` varchar(50) NOT NULL,
  `TAN_89` varchar(50) NOT NULL,
  `IncorporatedOn_36` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `dyn_tbl_menu_1_submenu_1`
--

INSERT INTO `dyn_tbl_menu_1_submenu_1` (`id`, `CompanyName_64`, `RegistrationNumber_66`, `TAXRegn_79`, `TAN_89`, `IncorporatedOn_36`) VALUES
(1, 'CUSTOMER', 'Customer or Client', '123', '45', '45'),
(2, 'BUYER', 'Buyer of the button ', '125', '102', '11'),
(3, 'JINDAL OFFICE', 'Jindal New Delhi Office', '13', '31', '31'),
(4, 'HISAR FACTORY', 'Factory Site', '123', '121', '11'),
(5, 'HOME', 'Residence of the hawki users', '012', '12', '10');

-- --------------------------------------------------------

--
-- Table structure for table `dyn_tbl_menu_2_submenu_2`
--

CREATE TABLE IF NOT EXISTS `dyn_tbl_menu_2_submenu_2` (
  `insert_date` datetime DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `DELIVERYSTATE_55` varchar(20) DEFAULT NULL,
  `ProductColor_98` varchar(15) DEFAULT NULL,
  `RequestedBy_39` varchar(30) DEFAULT NULL,
  `TEST_15` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dyn_tbl_menu_10_submenu_17`
--

CREATE TABLE IF NOT EXISTS `dyn_tbl_menu_10_submenu_17` (
  `insert_date` datetime DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Color_89` varchar(10) DEFAULT NULL,
  `ButtonStyle_66` varchar(10) DEFAULT NULL,
  `Size_33` smallint(6) DEFAULT NULL,
  `UOM_27` varchar(10) DEFAULT NULL,
  `Quantity_21` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `dyn_tbl_menu_10_submenu_17`
--

INSERT INTO `dyn_tbl_menu_10_submenu_17` (`insert_date`, `update_date`, `id`, `Color_89`, `ButtonStyle_66`, `Size_33`, `UOM_27`, `Quantity_21`) VALUES
('2015-03-26 03:57:56', '2015-03-26 10:57:56', 1, 'RED', 'Real Shell', 10, 'KG', 100),
('2015-03-26 03:58:30', '2015-03-26 10:58:30', 2, 'GREEN', 'Real Wood', 20, 'KG', 200);

-- --------------------------------------------------------

--
-- Table structure for table `dyn_tbl_menu_11_submenu_15`
--

CREATE TABLE IF NOT EXISTS `dyn_tbl_menu_11_submenu_15` (
  `insert_date` datetime DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Color_62` varchar(15) DEFAULT NULL,
  `ButtonStyle_75` varchar(10) DEFAULT NULL,
  `Size_54` varchar(10) DEFAULT NULL,
  `Quantity_56` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dyn_tbl_menu_11_submenu_16`
--

CREATE TABLE IF NOT EXISTS `dyn_tbl_menu_11_submenu_16` (
  `insert_date` datetime DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Color_18` varchar(15) DEFAULT NULL,
  `ButtonStyle_81` varchar(10) DEFAULT NULL,
  `Size_58` varchar(10) DEFAULT NULL,
  `Quantity_99` varchar(10) DEFAULT NULL,
  `Notes_12` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dyn_tbl_menu_12_submenu_18`
--

CREATE TABLE IF NOT EXISTS `dyn_tbl_menu_12_submenu_18` (
  `insert_date` datetime DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Color_23` varchar(25) DEFAULT NULL,
  `ButtonStyle_96` varchar(25) DEFAULT NULL,
  `Size_21` varchar(5) DEFAULT NULL,
  `Quantity_85` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `dyn_tbl_menu_12_submenu_18`
--

INSERT INTO `dyn_tbl_menu_12_submenu_18` (`insert_date`, `update_date`, `id`, `Color_23`, `ButtonStyle_96`, `Size_21`, `Quantity_85`) VALUES
('2015-03-30 09:39:57', '2015-03-30 16:39:57', 1, 'BLACK', 'WOOD COCONUT', '12', 'PIECES'),
('2015-03-30 09:40:16', '2015-03-30 16:40:16', 2, 'PINK', 'WOOD COCONUT', 'BS', 'INCH');

-- --------------------------------------------------------

--
-- Table structure for table `dyn_tbl_menu_12_submenu_19`
--

CREATE TABLE IF NOT EXISTS `dyn_tbl_menu_12_submenu_19` (
  `insert_date` datetime DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Color_19` varchar(20) DEFAULT NULL,
  `ButtonStyle_11` varchar(20) DEFAULT NULL,
  `Size_72` varchar(5) DEFAULT NULL,
  `Quantity_10` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `key_value`
--

CREATE TABLE IF NOT EXISTS `key_value` (
  `CREATED_BY` varchar(60) NOT NULL DEFAULT '-1',
  `CREATED_DATE` date NOT NULL DEFAULT '0000-00-00',
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `GROUP_NAME` varchar(30) NOT NULL,
  `KEY_NAME` varchar(30) NOT NULL,
  `VALUE_ID` varchar(30) NOT NULL,
  `VALUE_NAME` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `key_value`
--

INSERT INTO `key_value` (`CREATED_BY`, `CREATED_DATE`, `ID`, `GROUP_NAME`, `KEY_NAME`, `VALUE_ID`, `VALUE_NAME`) VALUES
('-1', '2015-04-16', 25, 'BLOOD', 'GROUPS', 'A', 'negative'),
('-1', '2015-04-16', 26, 'BLOOD', 'GROUPS', 'AB', 'negative'),
('-1', '2015-04-16', 27, 'BLOOD', 'GROUPS', 'C', 'passtive'),
('-1', '2015-04-16', 28, 'BLOOD', 'GROUPS', 'D', 'negative');

-- --------------------------------------------------------

--
-- Table structure for table `key_value_int`
--

CREATE TABLE IF NOT EXISTS `key_value_int` (
  `PROCESS_REC_NUMBER` int(10) NOT NULL AUTO_INCREMENT,
  `PROCESS_DATE` date DEFAULT NULL,
  `PROCESS_FILE_NAME` varchar(30) DEFAULT NULL,
  `PROCESS_MODE` varchar(20) DEFAULT NULL,
  `PROCESS_STATUS` varchar(1) DEFAULT NULL,
  `PROCESS_MESSAGE` varchar(240) DEFAULT NULL,
  `GROUP_NAME` varchar(50) DEFAULT NULL,
  `KEY_NAME` varchar(50) DEFAULT NULL,
  `VALUE_ID` varchar(30) DEFAULT NULL,
  `VALUE_NAME` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`PROCESS_REC_NUMBER`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=649 ;

--
-- Dumping data for table `key_value_int`
--

INSERT INTO `key_value_int` (`PROCESS_REC_NUMBER`, `PROCESS_DATE`, `PROCESS_FILE_NAME`, `PROCESS_MODE`, `PROCESS_STATUS`, `PROCESS_MESSAGE`, `GROUP_NAME`, `KEY_NAME`, `VALUE_ID`, `VALUE_NAME`) VALUES
(640, '2015-04-16', 'save.csv', 'U', 'X', 'Record does not exist for Update', 'blood', 'groups', 'O', 'ng'),
(641, '2015-04-16', 'save.csv', 'U', 'X', 'Record does not exist for Update', 'blood', 'groups', 'AB', 'pass'),
(642, '2015-04-16', 'save.csv', 'U', 'X', 'Record does not exist for Update', 'blood', 'groups', 'X', 'pass'),
(643, '2015-04-16', 'save.csv', '', 'X', 'Incorrect Process Mode. Valid values are I(nsert) or U(pdate) only. ', 'blood', 'groups', 'O', 'passtive'),
(644, '2015-04-16', 'save.csv', 'I', 'X', 'Interface Success', 'blood', 'groups', 'A', 'negative'),
(645, '2015-04-16', 'save.csv', 'I', 'X', 'Interface Success', 'blood', 'groups', 'AB', 'negative'),
(646, '2015-04-16', 'save.csv', 'I', 'X', 'exception PDOException with message SQLSTATE[22001]: String data, right truncated: 1406 Data too long for column GROUP_NAME at row 1 in C:Progr', 'bloodbloodbloodbloodbloodbloodbloodbloodbloodblood', 'groups', 'B', 'passtive'),
(647, '2015-04-16', 'save.csv', 'I', 'X', 'Interface Success', 'blood', 'groups', 'C', 'passtive'),
(648, '2015-04-16', 'save.csv', 'I', 'X', 'Interface Success', 'blood', 'groups', 'D', 'negative');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `insert_date` date DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(50) NOT NULL,
  `sys_gen_menu_name` varchar(50) NOT NULL,
  `short_desc` varchar(100) DEFAULT NULL,
  `long_desc` varchar(1000) DEFAULT NULL,
  `display_order` tinyint(4) NOT NULL,
  PRIMARY KEY (`menu_id`),
  UNIQUE KEY `menu_uidx` (`menu_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`insert_date`, `update_date`, `menu_id`, `menu_name`, `sys_gen_menu_name`, `short_desc`, `long_desc`, `display_order`) VALUES
('2015-02-25', '2015-02-25', 1, 'Configurations', '', 'Configure the Application', 'Data commonly used across the application are entered here', 1),
('2015-02-25', '2015-02-25', 2, 'ORDER ENTRY', '', '', '', 2),
('2015-03-07', '2015-03-07', 3, 'SOP', '', 'SOP', 'Standard Operating Procedures', 3),
('2015-03-07', '2015-03-07', 4, 'SOP_STAGE', '', 'Stage of SOP', '', 4),
('2015-03-25', '2015-03-26', 8, 'CUSTOMER DATA', '', 'Customer Data Entry', 'Enter Customer Data', 5),
('2015-03-26', '2015-03-30', 10, 'RMG 2017 WINTER PRODUCTION', '', '2017 Winter Production', 'Process Menu for 2017 Winter Production of RMG', 8),
('2015-03-26', '2015-03-30', 11, 'RMG 2016 SUMMER PRODUCTION', '', '2016 Summer Production Schedule', 'Schedule Processes for 2016 Summer Production of RMG', 6),
('2015-03-30', '2015-03-30', 12, 'RMG 2016 WINTER PRODUCTION', '', '2016 Winter Production', 'Schedule Processes for 2016 Winter Production of RMG', 7);

-- --------------------------------------------------------

--
-- Table structure for table `online_feedback`
--

CREATE TABLE IF NOT EXISTS `online_feedback` (
  `CREATED_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `CONTACT_NAME` varchar(60) NOT NULL,
  `EMAIL_ID` varchar(60) NOT NULL,
  `PHONE_NO` varchar(15) DEFAULT NULL,
  `FEEDBACK_SUBJECT` varchar(60) NOT NULL,
  `FEEDBACK_MESSAGE` varchar(2000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `online_feedback`
--

INSERT INTO `online_feedback` (`CREATED_DATE`, `ID`, `CONTACT_NAME`, `EMAIL_ID`, `PHONE_NO`, `FEEDBACK_SUBJECT`, `FEEDBACK_MESSAGE`) VALUES
('2015-03-14 21:50:16', 1, '', '', '', '', ''),
('2015-03-14 21:51:01', 2, 'Arunkumar', 'narun.infotech@gmail.com', '9629762717', 'job', 'resume'),
('2015-03-14 21:59:03', 3, 'SATHEESH', 'satheesh8892@gmail.com', '9524549005', 'JOB', 'Resume'),
('2015-03-21 09:47:45', 4, 'VICTOR', 'victor.a@gaddieltech.com', '9791755690', 'TESTING', 'Testing spryt.gaddieltech.com'),
('2015-03-23 10:03:01', 5, 'PETER', 'peterfrank01@yahoo.com', '+919840677199', 'TESTING', 'Testing the Contact us form in Spryt.'),
('2015-03-23 10:36:29', 6, 'ARUN', 'narun.infotech@gmail.com', '9629762717', 'TEST', '');

-- --------------------------------------------------------

--
-- Table structure for table `screen`
--

CREATE TABLE IF NOT EXISTS `screen` (
  `SCREEN_ID` int(10) NOT NULL AUTO_INCREMENT,
  `DISPLAY_NAME` varchar(30) NOT NULL,
  `DB_COL_NAME` varchar(30) NOT NULL,
  `DATA_TYPE` varchar(30) NOT NULL,
  `COL_NAME_DESC` varchar(100) DEFAULT NULL,
  `REQUIRED_FLAG` char(1) NOT NULL,
  `ACTIVE_FLAG` char(1) NOT NULL,
  `DISPLAY_ORDER` int(3) NOT NULL,
  `COL_VALIDATION` varchar(100) DEFAULT NULL,
  `COL_LENGTH` int(8) DEFAULT NULL,
  `DATA_ENTRY_TYPE` varchar(30) DEFAULT NULL,
  `DATA_SAMPLE` varchar(100) DEFAULT NULL,
  `LOV_SQL` varchar(1000) DEFAULT NULL,
  `HTML_INPUT_TAG` varchar(1000) DEFAULT NULL,
  `PHP_MANDATORY_CHECK` varchar(1000) DEFAULT NULL,
  `PHP_DATATYPE_CHECK` varchar(1000) DEFAULT NULL,
  `TABLE_NAME` varchar(30) NOT NULL,
  `SYSTEM_FLAG` varchar(1) NOT NULL,
  `CATEGORY_NAME` varchar(30) NOT NULL,
  `SUBMENU_ID` int(10) NOT NULL,
  PRIMARY KEY (`SCREEN_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `screen`
--

INSERT INTO `screen` (`SCREEN_ID`, `DISPLAY_NAME`, `DB_COL_NAME`, `DATA_TYPE`, `COL_NAME_DESC`, `REQUIRED_FLAG`, `ACTIVE_FLAG`, `DISPLAY_ORDER`, `COL_VALIDATION`, `COL_LENGTH`, `DATA_ENTRY_TYPE`, `DATA_SAMPLE`, `LOV_SQL`, `HTML_INPUT_TAG`, `PHP_MANDATORY_CHECK`, `PHP_DATATYPE_CHECK`, `TABLE_NAME`, `SYSTEM_FLAG`, `CATEGORY_NAME`, `SUBMENU_ID`) VALUES
(7, 'Product Category', 'ProductCategory_94', 'VARCHAR(30)', 'Product Category', 'Y', 'Y', 1, 'NULL', 30, 'TEXTBOX', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''COLOR''', '<div class="span4"><label>%s%s</label><input type="text" name="%s" id="%s"  value="<?php echo !empty($ProductCategory_94)?$ProductCategory_94:'''';?>"  class="span4"></div>', 'if (empty($_POST["ProductCategory_94"])) {  $ErrorMsg .= "\\nProduct Category is required;<br>";  $valid = false;  } else { $ProductCategory_94= $_POST["ProductCategory_94"]; }', '$ProductCategory_94= $_POST["ProductCategory_94"];', 'dyn_tbl_menu_2_submenu_2', 'N', 'UNKNOWN', 2),
(5, 'Registration Number', 'RegistrationNumber_66', 'VARCHAR(60)', 'Legal Company Registration Number', 'Y', 'Y', 2, 'NULL', 60, 'TEXTBOX', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''COLOR''', '<div class="span4"><label>%s%s</label><input type="text" name="%s" id="%s"  value="<?php echo !empty($RegistrationNumber_66)?$RegistrationNumber_66:'''';?>"  class="span4"></div>', 'if (empty($_POST["RegistrationNumber_66"])) {  $ErrorMsg .= "\\nRegistration Number is required;<br>";  $valid = false;  } else { $RegistrationNumber_66= $_POST["RegistrationNumber_66"]; }', '$RegistrationNumber_66= $_POST["RegistrationNumber_66"];', 'dyn_tbl_menu_1_submenu_1', 'N', 'UNKNOWN', 1),
(6, 'TAX Regn#', 'TAXRegn_79', 'VARCHAR(30)', 'Taxation Registration Number', 'Y', 'Y', 3, 'NULL', 30, 'TEXTBOX', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''COLOR''', '<div class="span4"><label>%s%s</label><input type="text" name="%s" id="%s"  value="<?php echo !empty($TAXRegn_79)?$TAXRegn_79:'''';?>"  class="span4"></div>', 'if (empty($_POST["TAXRegn_79"])) {  $ErrorMsg .= "\\nTAX Regn# is required;<br>";  $valid = false;  } else { $TAXRegn_79= $_POST["TAXRegn_79"]; }', '$TAXRegn_79= $_POST["TAXRegn_79"];', 'dyn_tbl_menu_1_submenu_1', 'N', 'UNKNOWN', 1),
(4, 'Company Name', 'CompanyName_64', 'VARCHAR(60)', 'Name as in the legal registration document', 'Y', 'Y', 1, 'NULL', 60, 'TEXTBOX', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''COLOR''', '<div class="span4"><label>%s%s</label><input type="text" name="%s" id="%s"  value="<?php echo !empty($CompanyName_64)?$CompanyName_64:'''';?>"  class="span4"></div>', 'if (empty($_POST["CompanyName_64"])) {  $ErrorMsg .= "\\nCompany Name is required;<br>";  $valid = false;  } else { $CompanyName_64= $_POST["CompanyName_64"]; }', '$CompanyName_64= $_POST["CompanyName_64"];', 'dyn_tbl_menu_1_submenu_1', 'N', 'UNKNOWN', 1),
(8, 'No of Units', 'NoofUnits_72', 'FLOAT', 'Total Quantity Required', 'Y', 'Y', 2, 'NULL', 0, 'TEXTBOX', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''COLOR''', '<div class="span4"><label>%s%s</label><input type="text" name="%s" id="%s"  value="<?php echo !empty($NoofUnits_72)?$NoofUnits_72:'''';?>"  class="span4"></div>', 'if (empty($_POST["NoofUnits_72"])) {  $ErrorMsg .= "\\nNo of Units is required;<br>";  $valid = false;  } else { $NoofUnits_72= $_POST["NoofUnits_72"]; }', 'if (!is_numeric($_POST["NoofUnits_72"])) {  $ErrorMsg .= "\\nNo of Units must be a number;<br>";  $valid = false; } else { $NoofUnits_72= $_POST["NoofUnits_72"]; }', 'dyn_tbl_menu_2_submenu_2', 'N', 'UNKNOWN', 2),
(9, 'Item UOM', 'ItemUOM_31', 'VARCHAR(30)', 'UOM ', 'Y', 'Y', 3, 'NULL', 30, 'DROPDOWN', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''UOM''', '', 'if (empty($_POST["ItemUOM_31"])) {  $ErrorMsg .= "\\nItem UOM is required;<br>";  $valid = false;  } else { $ItemUOM_31= $_POST["ItemUOM_31"]; }', '$ItemUOM_31= $_POST["ItemUOM_31"];', 'dyn_tbl_menu_2_submenu_2', 'N', 'UNKNOWN', 2),
(10, 'Customer', 'Customer_42', 'VARCHAR(60)', 'Customer', 'Y', 'Y', 4, 'NULL', 60, 'TEXTBOX', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''COLOR''', '<div class="span4"><label>%s%s</label><input type="text" name="%s" id="%s"  value="<?php echo !empty($Customer_42)?$Customer_42:'''';?>"  class="span4"></div>', 'if (empty($_POST["Customer_42"])) {  $ErrorMsg .= "\\nCustomer is required;<br>";  $valid = false;  } else { $Customer_42= $_POST["Customer_42"]; }', '$Customer_42= $_POST["Customer_42"];', 'dyn_tbl_menu_2_submenu_2', 'N', 'UNKNOWN', 2),
(11, 'Buyer', 'Buyer_64', 'VARCHAR(40)', 'Buyer', 'Y', 'Y', 3, 'NULL', 40, 'TEXTBOX', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''COLOR''', '<div class="span4"><label>%s%s</label><input type="text" name="%s" id="%s"  value="<?php echo !empty($Buyer_64)?$Buyer_64:'''';?>"  class="span4"></div>', 'if (empty($_POST["Buyer_64"])) {  $ErrorMsg .= "\\nBuyer is required;<br>";  $valid = false;  } else { $Buyer_64= $_POST["Buyer_64"]; }', '$Buyer_64= $_POST["Buyer_64"];', 'dyn_tbl_menu_2_submenu_2', 'N', 'UNKNOWN', 2),
(12, 'Created Date', 'CreatedDate_95', 'VARCHAR(20)', 'Date of Creation', 'N', 'Y', 1, 'NULL', 20, 'TEXTBOX', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''COLOR''', '<div class="span4"><label>%s%s</label><input type="text" name="%s" id="%s"  value="<?php echo !empty($CreatedDate_95)?$CreatedDate_95:'''';?>"  class="span4"></div>', '', '$CreatedDate_95= $_POST["CreatedDate_95"];', 'dyn_tbl_menu_3_submenu_4', 'N', 'UNKNOWN', 4),
(13, 'Update Date', 'UpdateDate_92', 'VARCHAR(20)', 'Date of Update', 'N', 'Y', 2, 'NULL', 20, 'TEXTBOX', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''COLOR''', '<div class="span4"><label>%s%s</label><input type="text" name="%s" id="%s"  value="<?php echo !empty($UpdateDate_92)?$UpdateDate_92:'''';?>"  class="span4"></div>', '', '$UpdateDate_92= $_POST["UpdateDate_92"];', 'dyn_tbl_menu_3_submenu_4', 'N', 'UNKNOWN', 4),
(14, 'Sl#', 'Sl_53', 'VARCHAR(10)', 'Serial Number', 'N', 'Y', 3, 'NULL', 10, 'TEXTBOX', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''COLOR''', '<div class="span4"><label>%s%s</label><input type="text" name="%s" id="%s"  value="<?php echo !empty($Sl_53)?$Sl_53:'''';?>"  class="span4"></div>', '', 'if (!ctype_alpha($_POST["Sl_53"])) {  $ErrorMsg .= "\\nSl# must have only alphabets;<br>";  $valid = false; } else { $Sl_53= $_POST["Sl_53"]; }', 'dyn_tbl_menu_3_submenu_4', 'N', 'UNKNOWN', 4),
(15, 'SOP Code', 'SOPCode_10', 'VARCHAR(30)', 'SOP Code', 'N', 'Y', 4, 'NULL', 30, 'TEXTBOX', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''COLOR''', '<div class="span4"><label>%s%s</label><input type="text" name="%s" id="%s"  value="<?php echo !empty($SOPCode_10)?$SOPCode_10:'''';?>"  class="span4"></div>', '', '$SOPCode_10= $_POST["SOPCode_10"];', 'dyn_tbl_menu_3_submenu_4', 'N', 'UNKNOWN', 4),
(16, 'Description', 'Description_65', 'VARCHAR(120)', 'Description', 'N', 'Y', 5, 'NULL', 120, 'TEXTBOX', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''COLOR''', '<div class="span4"><label>%s%s</label><input type="text" name="%s" id="%s"  value="<?php echo !empty($Description_65)?$Description_65:'''';?>"  class="span4"></div>', '', '$Description_65= $_POST["Description_65"];', 'dyn_tbl_menu_3_submenu_4', 'N', 'UNKNOWN', 4),
(17, 'Created Date', 'CreatedDate_96', 'VARCHAR(10)', 'Date of Creation', 'N', 'Y', 1, 'NULL', 10, 'TEXTBOX', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''COLOR''', '<div class="span4"><label>%s%s</label><input type="text" name="%s" id="%s"  value="<?php echo !empty($CreatedDate_96)?$CreatedDate_96:'''';?>"  class="span4"></div>', '', '$CreatedDate_96= $_POST["CreatedDate_96"];', '', 'N', 'UNKNOWN', 0),
(18, 'Created Date', 'CreatedDate_61', 'VARCHAR(10)', 'Date of Creation', 'N', 'Y', 1, 'NULL', 10, 'TEXTBOX', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''COLOR''', '<div class="span4"><label>%s%s</label><input type="text" name="%s" id="%s"  value="<?php echo !empty($CreatedDate_61)?$CreatedDate_61:'''';?>"  class="span4"></div>', '', '$CreatedDate_61= $_POST["CreatedDate_61"];', '', 'N', 'UNKNOWN', 0),
(19, 'Name', 'Name_30', 'VARCHAR(10)', 'name', 'N', 'Y', 1, 'NULL', 10, 'TEXTBOX', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''COLOR''', '<div class="span4"><label>%s%s</label><input type="text" name="%s" id="%s"  value="<?php echo !empty($Name_30)?$Name_30:'''';?>"  class="span4"></div>', '', '$Name_30= $_POST["Name_30"];', 'dyn_tbl_menu_4_submenu_5', 'N', 'UNKNOWN', 5),
(20, 'ABC', 'ABC_19', 'DECIMAL(,2)', 'ABC', 'N', 'Y', 1, 'NULL', 0, 'TEXTBOX', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''COLOR''', '<div class="span4"><label>%s%s</label><input type="text" name="%s" id="%s"  value="<?php echo !empty($ABC_19)?$ABC_19:'''';?>"  class="span4"></div>', '', 'if (!is_numeric($_POST["ABC_19"])) {  $ErrorMsg .= "\\nABC must be a number;<br>";  $valid = false; } else { $ABC_19= $_POST["ABC_19"]; }', 'dyn_tbl_menu_-- SELECT --_subm', 'N', 'UNKNOWN', 7),
(21, 'ABC', 'ABC_17', 'VARCHAR(12)', 'ABC', 'N', 'Y', 1, 'NULL', 12, 'TEXTBOX', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''COLOR''', '<div class="span4"><label>%s%s</label><input type="text" name="%s" id="%s"  value="<?php echo !empty($ABC_17)?$ABC_17:'''';?>"  class="span4"></div>', '', '$ABC_17= $_POST["ABC_17"];', 'dyn_tbl_menu_-- SELECT --_subm', 'N', 'UNKNOWN', 7),
(22, 'TAN#', 'TAN_89', 'VARCHAR(30)', 'Taxation Numbere', 'Y', 'Y', 5, 'NULL', 30, 'TEXTBOX', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''COLOR''', '<div class="span4"><label>%s%s</label><input type="text" name="%s" id="%s"  value="<?php echo !empty($TAN_89)?$TAN_89:'''';?>"  class="span4"></div>', 'if (empty($_POST["TAN_89"])) {  $ErrorMsg .= "\\nTAN# is required;<br>";  $valid = false;  } else { $TAN_89= $_POST["TAN_89"]; }', '$TAN_89= $_POST["TAN_89"];', 'dyn_tbl_menu_1_submenu_1', 'N', 'UNKNOWN', 1),
(23, 'Incorporated On', 'IncorporatedOn_36', 'VARCHAR(10)', 'Date of Incorporation', 'N', 'Y', 6, 'NULL', 10, 'TEXTBOX', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''COLOR''', '<div class="span4"><label>%s%s</label><input type="text" name="%s" id="%s"  value="<?php echo !empty($IncorporatedOn_36)?$IncorporatedOn_36:'''';?>"  class="span4"></div>', '', 'if (!ctype_alpha($_POST["IncorporatedOn_36"])) {  $ErrorMsg .= "\\nIncorporated On must have only alphabets;<br>";  $valid = false; } else { $IncorporatedOn_36= $_POST["IncorporatedOn_36"]; }', 'dyn_tbl_menu_1_submenu_1', 'N', 'UNKNOWN', 1),
(24, 'Deliver By', 'DeliverBy_45', 'DECIMAL(,2)', 'Deliver By Date', 'N', 'Y', 6, 'NULL', 0, 'TEXTBOX', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''COLOR''', '<div class="span4"><label>%s%s</label><input type="text" name="%s" id="%s"  value="<?php echo !empty($DeliverBy_45)?$DeliverBy_45:'''';?>"  class="span4"></div>', '', 'if (!is_numeric($_POST["DeliverBy_45"])) {  $ErrorMsg .= "\\nDeliver By must be a number;<br>";  $valid = false; } else { $DeliverBy_45= $_POST["DeliverBy_45"]; }', 'dyn_tbl_menu_2_submenu_2', 'N', 'UNKNOWN', 2),
(25, 'Deliver By', 'DeliverBy_86', 'VARCHAR(12)', 'Deliver By Date', 'N', 'Y', 6, 'NULL', 12, 'TEXTBOX', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''COLOR''', '<div class="span4"><label>%s%s</label><input type="text" name="%s" id="%s"  value="<?php echo !empty($DeliverBy_86)?$DeliverBy_86:'''';?>"  class="span4"></div>', '', '$DeliverBy_86= $_POST["DeliverBy_86"];', 'dyn_tbl_menu_2_submenu_2', 'N', 'UNKNOWN', 2),
(26, 'DELIVERY STATE', 'DELIVERYSTATE_55', 'VARCHAR(20)', 'State in which it will be delivered', 'N', 'Y', 14, 'NULL', 20, 'DROPDOWN', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ALL'' AND KEY_NAME = ''Indian States''', '', '', '$DELIVERYSTATE_55= $_POST["DELIVERYSTATE_55"];', 'dyn_tbl_menu_2_submenu_2', 'N', 'UNKNOWN', 2),
(27, 'Product Color', 'ProductColor_98', 'VARCHAR(15)', 'Colour of the Product', 'N', 'Y', 8, 'NULL', 15, 'DROPDOWN', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''COLOR''', '', '', '$ProductColor_98= $_POST["ProductColor_98"];', 'dyn_tbl_menu_2_submenu_2', 'N', 'UNKNOWN', 2),
(28, 'Blood Group', 'BloodGroup_79', 'VARCHAR(10)', 'Group of Blood', 'N', 'Y', 9, 'NULL', 10, 'DROPDOWN', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''BLOOD'' AND KEY_NAME = ''GROUP''', '', '', '$BloodGroup_79= $_POST["BloodGroup_79"];', 'dyn_tbl_menu_2_submenu_2', 'N', 'UNKNOWN', 2),
(29, 'Requested By', 'RequestedBy_39', 'VARCHAR(30)', 'Requested by Supplier Employee Name', 'N', 'Y', 19, 'NULL', 30, 'TEXTBOX', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''COLOR''', '<div class="span4"><label>%s%s</label><input type="text" name="%s" id="%s"  value="<?php echo !empty($RequestedBy_39)?$RequestedBy_39:'''';?>"  class="span4"></div>', '', '$RequestedBy_39= $_POST["RequestedBy_39"];', 'dyn_tbl_menu_2_submenu_2', 'N', 'UNKNOWN', 2),
(30, 'TEST', 'TEST_15', 'VARCHAR(20)', 'TEST', 'N', 'Y', 10, 'NULL', 20, 'TEXTBOX', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''COLOR''', '<div class="span4"><label>%s%s</label><input type="text" name="%s" id="%s"  value="<?php echo !empty($TEST_15)?$TEST_15:'''';?>"  class="span4"></div>', '', '$TEST_15= $_POST["TEST_15"];', 'dyn_tbl_menu_2_submenu_2', 'N', 'UNKNOWN', 2),
(31, 'Color', 'Color_18', 'VARCHAR(15)', 'Color of the RMG', 'N', 'Y', 1, 'NULL', 15, 'TEXTBOX', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''COLOR''', '<div class="span4"><label>%s%s</label><input type="text" name="%s" id="%s"  value="<?php echo !empty($Color_18)?$Color_18:'''';?>"  class="span4"></div>', '', '$Color_18= $_POST["Color_18"];', 'dyn_tbl_menu_11_submenu_16', 'N', 'UNKNOWN', 16),
(32, 'Button Style', 'ButtonStyle_81', 'VARCHAR(10)', 'Style of Button', 'N', 'Y', 2, 'NULL', 10, 'TEXTBOX', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''COLOR''', '<div class="span4"><label>%s%s</label><input type="text" name="%s" id="%s"  value="<?php echo !empty($ButtonStyle_81)?$ButtonStyle_81:'''';?>"  class="span4"></div>', '', 'if (!ctype_alpha($_POST["ButtonStyle_81"])) {  $ErrorMsg .= "\\nButton Style must have only alphabets;<br>";  $valid = false; } else { $ButtonStyle_81= $_POST["ButtonStyle_81"]; }', 'dyn_tbl_menu_11_submenu_16', 'N', 'UNKNOWN', 16),
(33, 'Size', 'Size_58', 'VARCHAR(10)', 'Sizes', 'N', 'Y', 3, 'NULL', 10, 'TEXTBOX', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''COLOR''', '<div class="span4"><label>%s%s</label><input type="text" name="%s" id="%s"  value="<?php echo !empty($Size_58)?$Size_58:'''';?>"  class="span4"></div>', '', 'if (!ctype_alpha($_POST["Size_58"])) {  $ErrorMsg .= "\\nSize must have only alphabets;<br>";  $valid = false; } else { $Size_58= $_POST["Size_58"]; }', 'dyn_tbl_menu_11_submenu_16', 'N', 'UNKNOWN', 16),
(34, 'Quantity', 'Quantity_99', 'VARCHAR(10)', 'Quantity for the Size', 'N', 'Y', 4, 'NULL', 10, 'TEXTBOX', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''COLOR''', '<div class="span4"><label>%s%s</label><input type="text" name="%s" id="%s"  value="<?php echo !empty($Quantity_99)?$Quantity_99:'''';?>"  class="span4"></div>', '', 'if (!ctype_alpha($_POST["Quantity_99"])) {  $ErrorMsg .= "\\nQuantity must have only alphabets;<br>";  $valid = false; } else { $Quantity_99= $_POST["Quantity_99"]; }', 'dyn_tbl_menu_11_submenu_16', 'N', 'UNKNOWN', 16),
(35, 'Color', 'Color_62', 'VARCHAR(15)', 'Colour of the Product', 'N', 'Y', 1, 'NULL', 15, 'DROPDOWN', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''COLOR''', '', '', 'if (!ctype_alpha($_POST["Color_62"])) {  $ErrorMsg .= "\\nColor must have only alphabets;<br>";  $valid = false; } else { $Color_62= $_POST["Color_62"]; }', 'dyn_tbl_menu_11_submenu_15', 'N', 'UNKNOWN', 15),
(36, 'Button Style', 'ButtonStyle_75', 'VARCHAR(10)', 'Style of Button', 'N', 'Y', 2, 'NULL', 10, 'DROPDOWN', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''COLOR''', '', '', 'if (!ctype_alpha($_POST["ButtonStyle_75"])) {  $ErrorMsg .= "\\nButton Style must have only alphabets;<br>";  $valid = false; } else { $ButtonStyle_75= $_POST["ButtonStyle_75"]; }', 'dyn_tbl_menu_11_submenu_15', 'N', 'UNKNOWN', 15),
(37, 'Size', 'Size_54', 'VARCHAR(10)', 'Sizes', 'N', 'Y', 3, 'NULL', 10, 'DROPDOWN', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''SIZE''', '', '', 'if (!ctype_alpha($_POST["Size_54"])) {  $ErrorMsg .= "\\nSize must have only alphabets;<br>";  $valid = false; } else { $Size_54= $_POST["Size_54"]; }', 'dyn_tbl_menu_11_submenu_15', 'N', 'UNKNOWN', 15),
(38, 'Quantity', 'Quantity_56', 'VARCHAR(10)', 'Quantity for the Size', 'N', 'Y', 4, 'NULL', 10, 'TEXTBOX', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''COLOR''', '<div class="span4"><label>%s%s</label><input type="text" name="%s" id="%s"  value="<?php echo !empty($Quantity_56)?$Quantity_56:'''';?>"  class="span4"></div>', '', 'if (!ctype_alpha($_POST["Quantity_56"])) {  $ErrorMsg .= "\\nQuantity must have only alphabets;<br>";  $valid = false; } else { $Quantity_56= $_POST["Quantity_56"]; }', 'dyn_tbl_menu_11_submenu_15', 'N', 'UNKNOWN', 15),
(39, 'Color', 'Color_89', 'VARCHAR(10)', 'Colour of the Product', 'N', 'Y', 1, 'NULL', 10, 'DROPDOWN', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''COLOR''', '', '', '$Color_89= $_POST["Color_89"];', 'dyn_tbl_menu_10_submenu_17', 'N', 'UNKNOWN', 17),
(40, 'Button Style', 'ButtonStyle_66', 'VARCHAR(10)', 'Style of Button', 'N', 'Y', 2, 'NULL', 10, 'TEXTBOX', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''RMG'' AND KEY_NAME = ''MEN TROUSERS''', '<div class="span4"><label>%s%s</label><input type="text" name="%s" id="%s"  value="<?php echo !empty($ButtonStyle_66)?$ButtonStyle_66:'''';?>"  class="span4"></div>', '', '$ButtonStyle_66= $_POST["ButtonStyle_66"];', 'dyn_tbl_menu_10_submenu_17', 'N', 'UNKNOWN', 17),
(41, 'Size', 'Size_33', 'SMALLINT', 'Sizes', 'N', 'Y', 3, 'NULL', 5, 'DROPDOWN', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''SIZE''', '', '', 'if (!is_numeric($_POST["Size_33"])) {  $ErrorMsg .= "\\nSize must be a number;<br>";  $valid = false; } else { $Size_33= $_POST["Size_33"]; }', 'dyn_tbl_menu_10_submenu_17', 'N', 'UNKNOWN', 17),
(42, 'UOM', 'UOM_27', 'VARCHAR(10)', 'Unit of Measure', 'N', 'Y', 4, 'NULL', 10, 'DROPDOWN', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''UOM''', '', '', '$UOM_27= $_POST["UOM_27"];', 'dyn_tbl_menu_10_submenu_17', 'N', 'UNKNOWN', 17),
(43, 'Quantity', 'Quantity_21', 'INT', 'Quantity for the Size', 'N', 'Y', 5, 'NULL', 10, 'TEXTBOX', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''COLOR''', '<div class="span4"><label>%s%s</label><input type="text" name="%s" id="%s"  value="<?php echo !empty($Quantity_21)?$Quantity_21:'''';?>"  class="span4"></div>', '', 'if (!is_numeric($_POST["Quantity_21"])) {  $ErrorMsg .= "\\nQuantity must be a number;<br>";  $valid = false; } else { $Quantity_21= $_POST["Quantity_21"]; }', 'dyn_tbl_menu_10_submenu_17', 'N', 'UNKNOWN', 17),
(44, 'Color', 'Color_19', 'VARCHAR(20)', 'Colour of the Product', 'N', 'Y', 1, 'NULL', 20, 'DROPDOWN', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''COLOR'' AND KEY_NAME = ''BLUE''', '', '', '$Color_19= $_POST["Color_19"];', 'dyn_tbl_menu_12_submenu_19', 'N', 'UNKNOWN', 19),
(45, 'Button Style', 'ButtonStyle_11', 'VARCHAR(20)', 'Style of Button', 'N', 'Y', 2, 'NULL', 20, 'DROPDOWN', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''BUTTON'' AND KEY_NAME = ''CLOTH''', '', '', '$ButtonStyle_11= $_POST["ButtonStyle_11"];', 'dyn_tbl_menu_12_submenu_19', 'N', 'UNKNOWN', 19),
(46, 'Size', 'Size_72', 'VARCHAR(5)', 'Sizes', 'N', 'Y', 3, 'NULL', 5, 'DROPDOWN', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''SIZE ''', '', '', '$Size_72= $_POST["Size_72"];', 'dyn_tbl_menu_12_submenu_19', 'N', 'UNKNOWN', 19),
(47, 'Quantity', 'Quantity_10', 'VARCHAR(5)', 'Quantity for the Size', 'N', 'Y', 4, 'NULL', 5, 'DROPDOWN', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''SIZE ''', '', '', '$Quantity_10= $_POST["Quantity_10"];', 'dyn_tbl_menu_12_submenu_19', 'N', 'UNKNOWN', 19),
(48, 'Color', 'Color_23', 'VARCHAR(25)', 'Colour of the Product', 'N', 'Y', 1, 'NULL', 25, 'DROPDOWN', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''COLOR''', '', '', '$Color_23= $_POST["Color_23"];', 'dyn_tbl_menu_12_submenu_18', 'N', 'UNKNOWN', 18),
(49, 'Button Style', 'ButtonStyle_96', 'VARCHAR(25)', 'Style of Button', 'N', 'Y', 2, 'NULL', 25, 'DROPDOWN', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''BUTTON'' AND KEY_NAME = ''GARMENTS''', '', '', '$ButtonStyle_96= $_POST["ButtonStyle_96"];', 'dyn_tbl_menu_12_submenu_18', 'N', 'UNKNOWN', 18),
(50, 'Size', 'Size_21', 'VARCHAR(5)', 'Sizes', 'N', 'Y', 3, 'NULL', 5, 'DROPDOWN', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''SIZE ''', '', '', '$Size_21= $_POST["Size_21"];', 'dyn_tbl_menu_12_submenu_18', 'N', 'UNKNOWN', 18),
(51, 'Quantity', 'Quantity_85', 'VARCHAR(16)', 'Quantity for the Size', 'N', 'Y', 4, 'NULL', 16, 'DROPDOWN', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''ITEM'' AND KEY_NAME = ''UOM''', '', '', '$Quantity_85= $_POST["Quantity_85"];', 'dyn_tbl_menu_12_submenu_18', 'N', 'UNKNOWN', 18),
(52, 'Tiick', 'Tiick_44', 'VARCHAR(10)', 'Double Tick', 'N', 'Y', 3, 'NULL', 10, 'TEXTBOX', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''RMG'' AND KEY_NAME = ''BABY FROCK''', '<div class="span4"><label>%s%s</label><input type="text" name="%s" id="%s"  value="<?php echo !empty($Tiick_44)?$Tiick_44:'''';?>"  class="span4"></div>', '', 'if (!ctype_alpha($_POST["Tiick_44"])) {  $ErrorMsg .= "\\nTiick must have only alphabets;<br>";  $valid = false; } else { $Tiick_44= $_POST["Tiick_44"]; }', 'dyn_tbl_menu_-- SELECT --_subm', 'N', 'UNKNOWN', 7),
(53, 'Notes', 'Notes_12', 'VARCHAR(100)', 'Delivery Notes', 'N', 'Y', 6, 'NULL', 100, 'TEXTBOX', 'N/A', 'SELECT VALUE_ID, VALUE_NAME FROM key_value WHERE GROUP_NAME = ''RMG'' AND KEY_NAME = ''BABY FROCK''', '<div class="span4"><label>%s%s</label><input type="text" name="%s" id="%s"  value="<?php echo !empty($Notes_12)?$Notes_12:'''';?>"  class="span4"></div>', '', 'if (!ctype_alpha($_POST["Notes_12"])) {  $ErrorMsg .= "\\nNotes must have only alphabets;<br>";  $valid = false; } else { $Notes_12= $_POST["Notes_12"]; }', 'dyn_tbl_menu_11_submenu_16', 'N', 'UNKNOWN', 16);

-- --------------------------------------------------------

--
-- Table structure for table `submenu`
--

CREATE TABLE IF NOT EXISTS `submenu` (
  `insert_date` date DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  `menu_id` int(11) NOT NULL,
  `submenu_id` int(11) NOT NULL AUTO_INCREMENT,
  `submenu_name` varchar(50) NOT NULL,
  `sys_gen_sub_menu_name` varchar(50) NOT NULL,
  `short_desc` varchar(100) DEFAULT NULL,
  `long_desc` varchar(1000) DEFAULT NULL,
  `table_name` varchar(60) NOT NULL,
  `display_order` tinyint(4) NOT NULL,
  `table_select_sql` varchar(5000) DEFAULT NULL,
  `table_insert_sql` varchar(5000) DEFAULT NULL,
  `table_update_sql` varchar(5000) DEFAULT NULL,
  `table_delete_sql` varchar(5000) DEFAULT NULL,
  PRIMARY KEY (`submenu_id`),
  UNIQUE KEY `submenu_uidx` (`menu_id`,`submenu_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `submenu`
--

INSERT INTO `submenu` (`insert_date`, `update_date`, `menu_id`, `submenu_id`, `submenu_name`, `sys_gen_sub_menu_name`, `short_desc`, `long_desc`, `table_name`, `display_order`, `table_select_sql`, `table_insert_sql`, `table_update_sql`, `table_delete_sql`) VALUES
('2015-02-25', '2015-03-23', 1, 1, 'Company Data', '', 'Organization Information', 'Basic Information about the Organization', 'dyn_tbl_menu_1_submenu_1', 1, 'SELECT id,CompanyName_64,RegistrationNumber_66,TAXRegn_79,TAN_89,IncorporatedOn_36 FROM dyn_tbl_menu_1_submenu_1', NULL, NULL, NULL),
('2015-02-25', '2015-03-23', 2, 2, 'PI Entry', '', '', '', 'dyn_tbl_menu_2_submenu_2', 1, 'SELECT id,ProductCategory_94,NoofUnits_72,ItemUOM_31,Buyer_64,Customer_42,DeliverBy_45,DeliverBy_86,ProductColor_98,BloodGroup_79,TEST_15,DELIVERYSTATE_55,RequestedBy_39 FROM dyn_tbl_menu_2_submenu_2', NULL, NULL, NULL),
('2015-02-25', '2015-03-23', 2, 3, 'Confirmed Order Entry', '', '', '', 'dyn_tbl_menu_2_submenu_3', 2, NULL, NULL, NULL, NULL),
('2015-03-07', '2015-03-23', 3, 4, 'SOP', '', 'SOP', 'Standard Operating Procedures', 'dyn_tbl_menu_3_submenu_4', 6, 'SELECT id,CreatedDate_95,UpdateDate_92,Sl_53,SOPCode_10,Description_65 FROM dyn_tbl_menu_3_submenu_4', NULL, NULL, NULL),
('2015-03-07', '2015-03-23', 4, 5, 'SOP_STAGE', '', '', '', 'dyn_tbl_menu_4_submenu_5', 6, 'SELECT id,Name_30 FROM dyn_tbl_menu_4_submenu_5', NULL, NULL, NULL),
('2015-03-09', '2015-03-23', 3, 6, 'Doc Master', '', 'df', 'df', 'dyn_tbl_menu_3_submenu_6', 5, NULL, NULL, NULL, NULL),
('2015-03-09', '2015-03-09', 0, 7, '', '', '', '', 'dyn_tbl_menu_-- SELECT --_submenu_7', 0, NULL, NULL, NULL, NULL),
('2015-03-09', '2015-03-23', 3, 8, 'Quality Checklist', '', '', '', 'dyn_tbl_menu_3_submenu_8', 3, NULL, NULL, NULL, NULL),
('2015-03-09', '2015-03-23', 2, 9, 'Quotes', '', 'Quotations', 'Quotations or Proforma Invoice', 'dyn_tbl_menu_2_submenu_9', 7, NULL, NULL, NULL, NULL),
('2015-03-26', '2015-03-26', 11, 15, 'MJEANBLUTROUSERS', '', 'Men Jean Blue Trousers', '2016 Summer Men Jean Blue Trousers Process', 'dyn_tbl_menu_11_submenu_15', 2, 'SELECT id,Color_62,ButtonStyle_75,Size_54,Quantity_56 FROM dyn_tbl_menu_11_submenu_15', NULL, NULL, NULL),
('2015-03-26', '2015-03-26', 11, 16, 'MJEANBLKTROUSERS', '', 'Men Jean Black Trousers', '2016 Summer Men Jean Black Trousers Process', 'dyn_tbl_menu_11_submenu_16', 1, 'SELECT id,Color_18,ButtonStyle_81,Size_58,Quantity_99,Notes_12 FROM dyn_tbl_menu_11_submenu_16', NULL, NULL, NULL),
('2015-03-26', '2015-03-26', 10, 17, 'FBWLSKIRT', '', 'Girl Baby Woolen Skirt', '2017 Winter Girl Baby Woolen Skirt Production Process', 'dyn_tbl_menu_10_submenu_17', 1, 'SELECT id,Color_89,ButtonStyle_66,Size_33,UOM_27,Quantity_21 FROM dyn_tbl_menu_10_submenu_17', NULL, NULL, NULL),
('2015-03-30', '2015-03-30', 12, 18, 'MJEANBLUPANTS', '', 'Men Jean Blue Pants', '2016 Winter Mean Jean Blue Pant Process', 'dyn_tbl_menu_12_submenu_18', 1, 'SELECT id,Color_23,ButtonStyle_96,Size_21,Quantity_85 FROM dyn_tbl_menu_12_submenu_18', NULL, NULL, NULL),
('2015-03-30', '2015-03-30', 12, 19, 'MJEANBLKPANTS', '', 'Men Jean Black Pants', '2016 Winter Mean Jean Black Pant Process', 'dyn_tbl_menu_12_submenu_19', 2, 'SELECT id,Color_19,ButtonStyle_11,Size_72,Quantity_10 FROM dyn_tbl_menu_12_submenu_19', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `support_ticket`
--

CREATE TABLE IF NOT EXISTS `support_ticket` (
  `CREATED_BY` varchar(60) NOT NULL DEFAULT '-1',
  `CREATED_DATE` date NOT NULL DEFAULT '0000-00-00',
  `LAST_UPDATE_BY` varchar(60) NOT NULL DEFAULT '-1',
  `LAST_UPDATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `USER_ID` int(10) NOT NULL,
  `SUPPORT_TICKET_NO` varchar(60) NOT NULL,
  `SUPPORT_SUBJECT` varchar(30) NOT NULL,
  `SUPPORT_MESSAGE` varchar(2000) NOT NULL,
  `COPY_EMAIL_ID` varchar(1200) DEFAULT NULL,
  `FILE_ATTACHMENT` blob,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `SUPPORT_TICKET_NO` (`SUPPORT_TICKET_NO`),
  KEY `XFK_USER_ID` (`USER_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `support_ticket`
--

INSERT INTO `support_ticket` (`CREATED_BY`, `CREATED_DATE`, `LAST_UPDATE_BY`, `LAST_UPDATE_DATE`, `ID`, `USER_ID`, `SUPPORT_TICKET_NO`, `SUPPORT_SUBJECT`, `SUPPORT_MESSAGE`, `COPY_EMAIL_ID`, `FILE_ATTACHMENT`) VALUES
('admin@gmail.com', '2015-03-21', '-1', '2015-03-21 10:01:33', 1, 1, 'ST1EMR20150321123133', 'Enhancement Request', 'Testing spryt@gaddieltech.com', 'victor.a@gaddieltech.com', ''),
('user@gmail.com', '2015-03-21', '-1', '2015-03-21 10:33:27', 2, 2, 'ST2SUG20150321130327', 'Suggestion', 'testing', 'victor.a@gaddieltech.com', ''),
('user@gmail.com', '2015-03-21', '-1', '2015-03-21 10:36:13', 3, 2, 'ST2SUG20150321130613', 'Suggestion', 'testing', 'victor.a@gaddieltech.com', ''),
('admin@gmail.com', '2015-03-23', '-1', '2015-03-23 10:16:35', 4, 1, 'ST1DNS20150323124635', 'Data Not Seen', 'Check the picture', 'peterfrank01@yahoo.com', ''),
('admin@gmail.com', '2015-03-23', '-1', '2015-03-23 10:19:30', 5, 1, 'ST1UGH20150323124930', 'User Guide Help', 'Testing Support Ticket', '', ''),
('admin@gmail.com', '2015-03-23', '-1', '2015-03-23 10:27:41', 6, 1, 'ST1DNS20150323125741', 'Data Not Seen', 'test', 'narun.infotech@gmail.com', ''),
('admin@gmail.com', '2015-03-23', '-1', '2015-03-23 10:31:40', 7, 1, 'ST1IIU20150323130140', 'Issue in UI', 'Checking support ticket submission', 'peterfrank01@yahoo.com', ''),
('admin@gmail.com', '2015-03-23', '-1', '2015-03-23 10:35:22', 8, 1, 'ST1IIU20150323130522', 'Issue in UI', 'test', 'narun.infotech@gmail.com', ''),
('admin@gmail.com', '2015-03-23', '-1', '2015-03-23 12:12:18', 9, 1, 'ST1DNS20150323144218', 'Data Not Seen', 'test', 'peter.franklin@gaddieltech.com', ''),
('admin@gmail.com', '2015-03-23', '-1', '2015-03-23 12:13:00', 10, 1, 'ST1IIU20150323144300', 'Issue in UI', 'test', 'arunkumarvn@yahoo.in', ''),
('admin@gmail.com', '2015-03-23', '-1', '2015-03-23 13:06:57', 11, 1, 'ST120150323153657', 'select', '', '', ''),
('user@gmail.com', '2015-03-24', '-1', '2015-03-24 15:26:12', 12, 2, 'ST2UGH20150324175612', 'User Guide', 'hi', 'victor.gaddiel@gmail.com', ''),
('user@gmail.com', '2015-03-24', '-1', '2015-03-24 15:26:49', 13, 2, 'ST2SUG20150324175649', 'Suggestion', 'hi', 'victor.a@gaddieltech.com', ''),
('admin@gmail.com', '2015-03-24', '-1', '2015-03-24 15:26:55', 14, 1, 'ST1IID20150324175655', 'Issue in Data', 'test', 'narun.infotech@gmail.com;arunkumarvn@yahoo.in', ''),
('admin@gmail.com', '2015-03-24', '-1', '2015-03-24 17:21:27', 15, 1, 'ST1IID20150324195127', 'Issue in Data', 'hi', 'victor.a@gaddieltech.com;arunkumarvn@yahoo.in;peter.franklin@gaddieltech.com', ''),
('admin@gmail.com', '2015-03-24', '-1', '2015-03-24 17:31:22', 16, 1, 'ST1IID20150324200122', 'Issue in Data', 'hi', 'peterfrank01@yahoo.com;speterfranklin@gmail.com', ''),
('peter.franklin@gaddieltech.com', '2015-03-24', '-1', '2015-03-24 19:13:36', 17, 16, 'ST16SUG20150324214336', 'Suggestion', 'Please ensure bug free application', 'victor.a@gaddieltech.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `CREATED_BY` varchar(60) NOT NULL DEFAULT '-1',
  `CREATED_DATE` date NOT NULL DEFAULT '0000-00-00',
  `LAST_UPDATE_BY` varchar(60) NOT NULL DEFAULT '-1',
  `LAST_UPDATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `USER_NAME` varchar(60) NOT NULL,
  `ROLE` varchar(60) NOT NULL,
  `PASS_WORD` varchar(60) NOT NULL DEFAULT '54321',
  `DEFAULT_PASSWORD_CHANGED` varchar(1) NOT NULL DEFAULT 'N',
  `PASSWORD_QUESTION1` varchar(60) NOT NULL DEFAULT '123',
  `PASSWORD_ANSWER1` varchar(60) NOT NULL DEFAULT '123',
  `PASSWORD_QUESTION2` varchar(60) NOT NULL DEFAULT '123',
  `PASSWORD_ANSWER2` varchar(60) NOT NULL DEFAULT '123',
  `PASSWORD_QUESTION3` varchar(60) NOT NULL DEFAULT '123',
  `PASSWORD_ANSWER3` varchar(60) NOT NULL DEFAULT '123',
  `ACTIVE_FLAG` varchar(1) NOT NULL,
  `DELETE_FLAG` varchar(1) NOT NULL,
  `START_DATE` date DEFAULT NULL,
  `END_DATE` date DEFAULT NULL,
  `LAST_SUCCESS_LOGIN_DATE` date DEFAULT NULL,
  `LAST_FAILED_LOGIN_DATE` date DEFAULT NULL,
  `NEXT_PASSWORD_CHANGE_DATE` date DEFAULT NULL,
  `REMARKS` varchar(240) DEFAULT NULL,
  `SESSION_ID` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `USER_NAME` (`USER_NAME`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`CREATED_BY`, `CREATED_DATE`, `LAST_UPDATE_BY`, `LAST_UPDATE_DATE`, `ID`, `USER_NAME`, `ROLE`, `PASS_WORD`, `DEFAULT_PASSWORD_CHANGED`, `PASSWORD_QUESTION1`, `PASSWORD_ANSWER1`, `PASSWORD_QUESTION2`, `PASSWORD_ANSWER2`, `PASSWORD_QUESTION3`, `PASSWORD_ANSWER3`, `ACTIVE_FLAG`, `DELETE_FLAG`, `START_DATE`, `END_DATE`, `LAST_SUCCESS_LOGIN_DATE`, `LAST_FAILED_LOGIN_DATE`, `NEXT_PASSWORD_CHANGE_DATE`, `REMARKS`, `SESSION_ID`) VALUES
('-1', '0000-00-00', 'admin@gmail.com', '2015-12-23 10:28:35', 1, 'admin@gmail.com', 'ADMIN', 'admin', 'Y', '123', '123', '123', '123', '123', '123', 'Y', 'N', '0000-00-00', '0000-00-00', '2015-12-23', NULL, NULL, '', NULL),
('-1', '0000-00-00', '-1', '2015-04-01 08:50:06', 2, 'user@gmail.com', 'USER', 'User123', 'Y', '123', 'green', '123', 'jetlee', '123', 'kool', 'Y', 'N', NULL, NULL, '2015-04-01', NULL, NULL, NULL, NULL),
('-1', '2015-03-15', '-1', '2015-03-15 13:30:45', 3, 'amuthan@yahoo.com', 'USER', '54321', 'N', '123', '123', '123', '123', '123', '123', 'Y', 'N', '0000-00-00', '0000-00-00', NULL, NULL, NULL, '', NULL),
('-1', '2015-03-24', '-1', '2015-03-24 18:50:33', 14, 'vg707@hotmail.com', 'ADMIN', '54321', 'N', '123', '123', '123', '123', '123', '123', 'Y', 'N', '0000-00-00', '0000-00-00', NULL, NULL, NULL, 'This is a temporary access', NULL),
('-1', '2015-03-24', '-1', '2015-03-24 18:46:59', 13, 'manueldas.sebastian@gmail.com', 'ADMIN', '54321', 'N', '123', '123', '123', '123', '123', '123', 'Y', 'N', '0000-00-00', '0000-00-00', NULL, NULL, NULL, '', NULL),
('-1', '2015-03-24', '-1', '2015-03-25 09:21:32', 10, 'victor.a@gaddieltech.com', 'USER', 'Gaddiel15', 'Y', '123', 'black', '123', 'black', '123', 'black', 'Y', 'N', '0000-00-00', '0000-00-00', '2015-03-25', NULL, '2015-09-21', '', NULL),
('-1', '2015-03-24', '-1', '2015-04-08 09:56:32', 16, 'peter.franklin@gaddieltech.com', 'ADMIN', 'Gaddiel8', 'Y', '123', 'Gray', '123', 'Me', '123', 'Paratha', 'Y', 'N', '0000-00-00', '0000-00-00', '2015-04-08', NULL, '2015-09-20', '', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
