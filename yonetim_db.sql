-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 30 Nis 2023, 14:53:20
-- Sunucu sürümü: 10.4.25-MariaDB
-- PHP Sürümü: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `yonetim_db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_fotogaleri`
--

CREATE TABLE `tbl_fotogaleri` (
  `sira` int(11) NOT NULL,
  `resim` varchar(255) NOT NULL,
  `aciklama` text NOT NULL,
  `etiket` varchar(500) NOT NULL,
  `yer` int(11) NOT NULL DEFAULT 99,
  `aktif` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `tbl_fotogaleri`
--

INSERT INTO `tbl_fotogaleri` (`sira`, `resim`, `aciklama`, `etiket`, `yer`, `aktif`) VALUES
(15, '1.png', 'animeler güzeldir', 'anime', 2, 1),
(16, 'd.png', 'anime', 'anime ', 99, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_haber`
--

CREATE TABLE `tbl_haber` (
  `sira` int(11) NOT NULL,
  `baslik` varchar(255) NOT NULL,
  `ozet` varchar(255) NOT NULL,
  `detay` text NOT NULL,
  `aktif` tinyint(1) NOT NULL DEFAULT 1,
  `yer` int(11) NOT NULL DEFAULT 99,
  `resim` varchar(255) NOT NULL DEFAULT 'yok.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `tbl_haber`
--

INSERT INTO `tbl_haber` (`sira`, `baslik`, `ozet`, `detay`, `aktif`, `yer`, `resim`) VALUES
(18, 'Patron Bebek', 'Patron Bebek Efsanedir', '<p>Patron Bebeği seviyorum</p>', 1, 99, 'Adsı.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_icerik`
--

CREATE TABLE `tbl_icerik` (
  `sira` int(11) NOT NULL,
  `baslik` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `detay` text NOT NULL,
  `kat` int(11) NOT NULL DEFAULT 0,
  `aktif` tinyint(1) NOT NULL DEFAULT 1,
  `yer` int(11) NOT NULL DEFAULT 99
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `tbl_icerik`
--

INSERT INTO `tbl_icerik` (`sira`, `baslik`, `link`, `detay`, `kat`, `aktif`, `yer`) VALUES
(2, 'tarihçe', 'TARİHÇE', 'BF NDJEKWOLP2ĞŞÜ', 4, 1, 1),
(4, 's', 'Hakkımızda', '<p>d</p>', 0, 1, 3),
(5, 'vizyon', 'vizyon', '<p>fvd</p>', 4, 1, 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_user`
--

CREATE TABLE `tbl_user` (
  `sira` int(11) NOT NULL,
  `isim` varchar(255) NOT NULL,
  `k_ad` varchar(255) NOT NULL,
  `k_sif` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `tbl_user`
--

INSERT INTO `tbl_user` (`sira`, `isim`, `k_ad`, `k_sif`) VALUES
(1, 'Fatma ERTAŞÇI', 'fatmaertascii', '123'),
(2, 'Goncagül ÇEVİKEL', 'goncimon', '123');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `tbl_fotogaleri`
--
ALTER TABLE `tbl_fotogaleri`
  ADD PRIMARY KEY (`sira`);

--
-- Tablo için indeksler `tbl_haber`
--
ALTER TABLE `tbl_haber`
  ADD PRIMARY KEY (`sira`);

--
-- Tablo için indeksler `tbl_icerik`
--
ALTER TABLE `tbl_icerik`
  ADD PRIMARY KEY (`sira`);

--
-- Tablo için indeksler `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`sira`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `tbl_fotogaleri`
--
ALTER TABLE `tbl_fotogaleri`
  MODIFY `sira` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `tbl_haber`
--
ALTER TABLE `tbl_haber`
  MODIFY `sira` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Tablo için AUTO_INCREMENT değeri `tbl_icerik`
--
ALTER TABLE `tbl_icerik`
  MODIFY `sira` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `sira` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
