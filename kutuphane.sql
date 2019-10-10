-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 13 Ara 2017, 21:35:44
-- Sunucu sürümü: 5.6.13
-- PHP Sürümü: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `kutuphane`
--
CREATE DATABASE IF NOT EXISTS `kutuphane` DEFAULT CHARACTER SET latin5 COLLATE latin5_turkish_ci;
USE `kutuphane`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `emanet`
--

CREATE TABLE IF NOT EXISTS `emanet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uyeid` int(11) NOT NULL,
  `kitapid` int(11) NOT NULL,
  `emanettarihi` varchar(50) NOT NULL,
  `teslimtarihi` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin5 AUTO_INCREMENT=14 ;

--
-- Tablo döküm verisi `emanet`
--

INSERT INTO `emanet` (`id`, `uyeid`, `kitapid`, `emanettarihi`, `teslimtarihi`) VALUES
(13, 36, 7, '2017-10-10', '2017-12-12');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kitap`
--

CREATE TABLE IF NOT EXISTS `kitap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kitap_adi` varchar(255) CHARACTER SET latin5 NOT NULL,
  `yazaradi` varchar(255) CHARACTER SET latin5 NOT NULL,
  `yayinyili` varchar(255) CHARACTER SET latin5 NOT NULL,
  `yayinciadi` varchar(255) CHARACTER SET latin5 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=13 ;

--
-- Tablo döküm verisi `kitap`
--

INSERT INTO `kitap` (`id`, `kitap_adi`, `yazaradi`, `yayinyili`, `yayinciadi`) VALUES
(7, 'r', 'w', 'w', 'w'),
(6, 'calikusu', 'sdfsdf', 'sdf', 'sdf'),
(9, 'fgh', 'fgh', 'fgh', 'fgh'),
(10, 'hh', 'hh', 'h', 'h'),
(11, '?ncir Ku?lar?', 'ooo', 'ooo', 'ooo');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `stok`
--

CREATE TABLE IF NOT EXISTS `stok` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kitapid` int(11) NOT NULL,
  `kitapadet` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin5 AUTO_INCREMENT=5 ;

--
-- Tablo döküm verisi `stok`
--

INSERT INTO `stok` (`id`, `kitapid`, `kitapadet`) VALUES
(1, 6, 12),
(2, 7, 10),
(3, 11, 34);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE IF NOT EXISTS `uyeler` (
  `uyeid` bigint(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(225) CHARACTER SET latin5 NOT NULL,
  `soyadi` varchar(225) CHARACTER SET latin5 NOT NULL,
  `sifre` varchar(225) CHARACTER SET latin5 NOT NULL,
  `eposta` varchar(225) CHARACTER SET latin5 NOT NULL,
  `adres` varchar(225) CHARACTER SET latin5 NOT NULL,
  `resim` varchar(255) CHARACTER SET latin5 NOT NULL,
  `aciklama` varchar(500) CHARACTER SET latin5 NOT NULL,
  PRIMARY KEY (`uyeid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=41 ;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`uyeid`, `adi`, `soyadi`, `sifre`, `eposta`, `adres`, `resim`, `aciklama`) VALUES
(36, 'a', 'Asf', 'a', 'af', 'asfa', '', 'asf'),
(38, 'SDg', 'SDG', 'sdG', 'sdG', 'sg', '', 'sdg'),
(39, 'k', 'ghk', 'ghk', 'ghk', 'ghk', '', 'ghk'),
(40, 'zvfa', 'zv', 'zxv', 'zxv', 'zxv', '', 'zxvxzv');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yonetici`
--

CREATE TABLE IF NOT EXISTS `yonetici` (
  `yonetici_id` int(11) NOT NULL AUTO_INCREMENT,
  `yonetici_ad` varchar(55) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `yonetici_soyad` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `yonetici_kullanici` varchar(25) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `yonetici_sifre` varchar(25) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `yonetici_email` varchar(55) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`yonetici_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Tablo döküm verisi `yonetici`
--

INSERT INTO `yonetici` (`yonetici_id`, `yonetici_ad`, `yonetici_soyad`, `yonetici_kullanici`, `yonetici_sifre`, `yonetici_email`) VALUES
(1, 'KutuphaneOtomasyonu', 'KutuphaneOtomasyonu', 'admin', 'admin', 'cihan@hotmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
