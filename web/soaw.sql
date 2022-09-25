-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 25 Wrz 2022, 13:48
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `soaw`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL COMMENT 'Klucz gółwny nadany automatycznie',
  `emial` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Adres email- nazwa użytkownika potrzebna do logowania.',
  `haslo` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Niezaszyfrowane hasło',
  `imie` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'mie użytkownika',
  `nazwisko` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Nazwisko użytkownika',
  `telefon` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Telefon użytkownika 9-io cyfrowy'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Posiada informacje o userach zarejestrowanych w programie.';

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`id_user`, `emial`, `haslo`, `imie`, `nazwisko`, `telefon`) VALUES
(3, 'abc@abc1.pl', '12345qwert', 'Jarek', 'Lubokotny', '509000000'),
(4, 'abc@abc2.pl', '12345qwert', 'Andrew', 'Dudilsky', '111111111');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `emial` (`emial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Klucz gółwny nadany automatycznie', AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
