-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 20 Sty 2022, 13:22
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `muzyka`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `jan`
--

CREATE TABLE `jan` (
  `wpisID` int(11) NOT NULL,
  `tytul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `autor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `pora_dnia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `samopoczucie` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `jan`
--

INSERT INTO `jan` (`wpisID`, `tytul`, `autor`, `data`, `pora_dnia`, `samopoczucie`) VALUES
(1, 'Ale w koło jest wesoło', 'Perfect', '2022-01-20', 'popołudnie', 'Radość'),
(2, 'Perfect', 'Ed Sheeran', '2022-01-25', 'rano', 'Radość'),
(3, 'Ale w koło jest wesoło', 'Perfect', '2022-01-20', 'popołudnie', 'Radość'),
(4, 'Ale w koło jest wesoło', 'Perfect', '2022-01-20', 'popołudnie', 'Radość'),
(5, 'Byle było tak', 'Krzysztof Krawczyk', '2022-01-11', 'wieczór', 'Nostalgia');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `jan`
--
ALTER TABLE `jan`
  ADD PRIMARY KEY (`wpisID`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `jan`
--
ALTER TABLE `jan`
  MODIFY `wpisID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
