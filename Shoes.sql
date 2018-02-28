-- Adminer 4.6.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `Shoes`;
CREATE TABLE `Shoes` (
  `ShoeID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Brand` varchar(50) DEFAULT NULL,
  `Type` varchar(50) DEFAULT NULL,
  `Color` varchar(50) DEFAULT NULL,
  `Style` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ShoeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `Shoes` (`ShoeID`, `Brand`, `Type`, `Color`, `Style`) VALUES
(1,	'Nike',	'Basketball',	'Black/Orange',	'High'),
(2,	'Nike',	'Basketball',	'Grey',	'High'),
(3,	'Nike',	'Casual',	'White',	'Low'),
(4,	'Adidas',	'Soccer',	'White',	'Low'),
(5,	'Adidas',	'Running',	'Grey/Black',	'Low'),
(6,	'Nike',	'Basketball',	'Black',	'High'),
(7,	'Nike',	'Running',	'Silver',	'Low'),
(8,	'Nike',	'Basketball',	'Blue',	'High'),
(9,	'New Balance',	'Running',	'Green',	'Low'),
(10,	'New Balance',	'Running',	'Black',	'Low'),
(11,	'Puma',	'Running',	'White',	'Low'),
(12,	'Puma',	'Running',	'Red',	'Low'),
(13,	'Puma',	'Running',	'Grey/Black/White',	'Low'),
(14,	'Asics',	'Running',	'Blue',	'Low'),
(15,	'Asics',	'Wrestling',	'Black/White',	'High'),
(16,	'Asics',	'Basketball',	'White/Black',	'High'),
(17,	'Reebok',	'Basketball',	'White/Black',	'High'),
(18,	'Reebok',	'Training',	'Grey',	'Low'),
(19,	'Under Armour',	'Football',	'White',	'High'),
(20,	'Under Armour',	'Training',	'Red',	'Low');

-- 2018-02-19 23:53:21
