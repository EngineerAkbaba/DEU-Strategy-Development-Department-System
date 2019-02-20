-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 07 May 2015, 11:51:38
-- Sunucu sürümü: 5.6.15-log
-- PHP Sürümü: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `infodb`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `activity`
--

CREATE TABLE IF NOT EXISTS `activity` (
  `FID` int(11) NOT NULL AUTO_INCREMENT,
  `DepName` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `ActivityName` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `Number` int(11) NOT NULL,
  PRIMARY KEY (`FID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `egitimalanlari`
--

CREATE TABLE IF NOT EXISTS `egitimalanlari` (
  `EID` int(11) NOT NULL AUTO_INCREMENT,
  `Type` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `Capacity` int(11) NOT NULL,
  `Number` int(11) NOT NULL,
  PRIMARY KEY (`EID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Tablo döküm verisi `egitimalanlari`
--

INSERT INTO `egitimalanlari` (`EID`, `Type`, `Capacity`, `Number`) VALUES
(1, 'amfi', 50, 12),
(2, 'sınıf', 50, 444),
(3, 'Bilgilab', 50, 89),
(4, 'DiğerLab', 50, 212),
(5, 'amfi', 75, 3),
(6, 'amfi', 100, 7),
(7, 'amfi', 150, 7),
(8, 'amfi', 250, 13),
(9, 'amfi', 300, 2),
(10, 'sınıf', 75, 251),
(11, 'sınıf', 100, 103),
(12, 'sınıf', 150, 35),
(13, 'sınıf', 250, 0),
(14, 'sınıf', 300, 0),
(15, 'BilgiLab', 75, 12),
(16, 'BilgiLab', 100, 5),
(17, 'BilgiLab', 150, 0),
(18, 'BilgiLab', 250, 1),
(19, 'BilgiLab', 300, 0),
(20, 'DiğerLab', 75, 6),
(21, 'DiğerLab', 100, 27),
(22, 'DiğerLab', 150, 0),
(23, 'DiğerLab', 250, 0),
(24, 'DiğerLab', 300, 0),
(25, 'sınıf', 150, 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gelirler`
--

CREATE TABLE IF NOT EXISTS `gelirler` (
  `GelID` int(11) NOT NULL AUTO_INCREMENT,
  `GelName` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `Amount` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`GelID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `giderler`
--

CREATE TABLE IF NOT EXISTS `giderler` (
  `GidID` int(11) NOT NULL AUTO_INCREMENT,
  `GidName` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `Amount` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`GidID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kurul`
--

CREATE TABLE IF NOT EXISTS `kurul` (
  `KID` int(11) NOT NULL AUTO_INCREMENT,
  `Unvan` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `Surname` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `Gorev` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`KID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `projegider`
--

CREATE TABLE IF NOT EXISTS `projegider` (
  `PID` int(11) NOT NULL AUTO_INCREMENT,
  `ProjectName` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `Amount` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`PID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `UserId` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`UserId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`UserId`, `Username`, `password`, `category`) VALUES
(1, 'eqf', 'ewfv', NULL),
(2, 'efqdvsxcınm fc', 'wfsdbdfxc', NULL),
(3, 'ali aamak', 'qwdafnsdvx', NULL),
(4, 'ömer paylal', '123456', 'admin'),
(6, 'erdem akbaba', '23654', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
