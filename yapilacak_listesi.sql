-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 15 Eki 2019, 00:48:38
-- Sunucu sürümü: 10.1.38-MariaDB
-- PHP Sürümü: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `yapilacak_listesi`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yapilacak_listesi`
--

CREATE TABLE `yapilacak_listesi` (
  `id` int(11) NOT NULL,
  `baslik` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `detay` varchar(200) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yapilacak_listesi`
--

INSERT INTO `yapilacak_listesi` (`id`, `baslik`, `detay`) VALUES
(5, 'Ye', 'sebzeli ramen ye'),
(7, 'Kitap', 'Dava syf 60 oku');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `yapilacak_listesi`
--
ALTER TABLE `yapilacak_listesi`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `yapilacak_listesi`
--
ALTER TABLE `yapilacak_listesi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
