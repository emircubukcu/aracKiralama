-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3340
-- Üretim Zamanı: 17 Haz 2021, 09:13:17
-- Sunucu sürümü: 10.4.18-MariaDB
-- PHP Sürümü: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `arackiralama`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `araclar`
--

CREATE TABLE `araclar` (
  `id` int(15) NOT NULL,
  `aracAd` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `aracFiyat` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `araclar`
--

INSERT INTO `araclar` (`id`, `aracAd`, `aracFiyat`) VALUES
(1, 'Renault Clio IV', 10000),
(2, 'Volkswagen Caddy', 12000),
(3, 'Audi A3', 11500),
(4, 'Skoda Octavia(2020)', 14750),
(5, 'Ford Courier', 9500),
(6, 'Seat Arona', 13500),
(7, 'Citroën C-Elysée', 9750),
(8, 'Renault Symbol', 7500),
(9, 'Renault Clio V', 11250),
(10, 'Dacia Duster', 10750),
(11, 'Citroën C3 Aircross', 13750),
(12, 'Skoda Octavia(2017)', 8500),
(13, 'Peugot 301', 9500),
(14, 'Fiat Egea', 13500),
(15, 'Renault Megane', 9750),
(16, 'Opel Crossland X', 7500),
(17, 'Kia Sportage', 10750),
(18, 'Dacia Logan SW', 10500),
(19, 'Fiat Doblo', 11250),
(20, 'Dacia Lodgy', 10000),
(21, 'Peugot Expert', 14500),
(22, 'Mercedes Vito', 17750),
(23, 'Honda Civic', 12500),
(24, 'Ford Focus', 13750);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kiralanan`
--

CREATE TABLE `kiralanan` (
  `islem_id` int(11) NOT NULL,
  `arac_id` int(11) NOT NULL,
  `kullanici_adi` varchar(45) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kiralanan`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(15) NOT NULL,
  `name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `number` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `araclar`
--
ALTER TABLE `araclar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kiralanan`
--
ALTER TABLE `kiralanan`
  ADD PRIMARY KEY (`islem_id`),
  ADD KEY `fk_arac_id` (`arac_id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `araclar`
--
ALTER TABLE `araclar`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Tablo için AUTO_INCREMENT değeri `kiralanan`
--
ALTER TABLE `kiralanan`
  MODIFY `islem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `kiralanan`
--
ALTER TABLE `kiralanan`
  ADD CONSTRAINT `fk_arac_id` FOREIGN KEY (`arac_id`) REFERENCES `araclar` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
