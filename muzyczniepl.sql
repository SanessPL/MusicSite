-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 15 Kwi 2023, 01:00
-- Wersja serwera: 10.4.16-MariaDB
-- Wersja PHP: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `muzyczniepl`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `products`
--

CREATE TABLE `products` (
  `ProductID` int(11) NOT NULL,
  `ProductName` varchar(50) COLLATE utf8_polish_ci DEFAULT NULL,
  `ProductGenre` varchar(50) COLLATE utf8_polish_ci DEFAULT NULL,
  `ProductRelease` varchar(4) COLLATE utf8_polish_ci DEFAULT NULL,
  `ProductCountry` varchar(50) COLLATE utf8_polish_ci DEFAULT NULL,
  `ProductType` varchar(30) COLLATE utf8_polish_ci DEFAULT NULL,
  `ProductDemo` varchar(40) COLLATE utf8_polish_ci DEFAULT NULL,
  `ProductPrize` decimal(9,2) DEFAULT NULL,
  `ProductPhoto` varchar(40) COLLATE utf8_polish_ci DEFAULT NULL,
  `ProductDiscography` varchar(40) COLLATE utf8_polish_ci DEFAULT NULL,
  `ProductAuthor` varchar(50) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `products`
--

INSERT INTO `products` (`ProductID`, `ProductName`, `ProductGenre`, `ProductRelease`, `ProductCountry`, `ProductType`, `ProductDemo`, `ProductPrize`, `ProductPhoto`, `ProductDiscography`, `ProductAuthor`) VALUES
(1, 'Gold Rush Kid', 'Pop', '2022', 'Wielka Brytania', 'MP3', 'popgoldrushkid.mp3', '49.99', 'popgoldrushkid.jpg', 'Album', 'George Ezra'),
(2, 'Lost on you', 'Pop', '2016', 'Stany Zjednoczone', 'Winyl', 'poplostonyou.mp3', '129.99', 'poplostonyou.jpg', 'Album', 'LP'),
(3, 'Making Mirrors', 'Pop', '2011', 'Australia', 'CD', 'popmakingmirrors.mp3', '69.99', 'popmakingmirrors.jpg', 'Album', 'Gotye'),
(4, 'Tribute', 'Pop', '2013', 'Wielka Brytania', 'CD', 'poptribute.mp3', '74.99', 'poptribute.jpg', 'Album', 'John Newman'),
(5, 'Art Brut 2', 'Rap', '2020', 'Polska', 'Winyl', 'rapartbrut2.mp3', '149.99', 'rapartbrut2.jpg', 'Album', 'PRO8L3M'),
(6, 'Graduation', 'Rap', '2007', 'Stany Zjednoczone', 'CD', 'rapgraduation.mp3', '39.99', 'rapgraduation.jpg', 'Album', 'Kanye West'),
(7, 'Plansze', 'Rap', '2019', 'Polska', 'MP3', 'rapplanszejan.mp3', '54.99', 'rapplanszejan.jpg', 'Album', 'Jan-Rapowanie'),
(8, 'Romantic Psycho', 'Rap', '2020', 'Polska', 'MP3', 'rapromanticpsycho.mp3', '49.99', 'rapromanticpsycho.jpg', 'Album', 'Quebonafide'),
(9, 'Aftermath', 'Rock', '1966', 'Wielka Brytania', 'Winyl', 'rockaftermath.mp3', '149.99', 'rockaftermath.jpg', 'Album', 'The Rolling Stones'),
(10, 'A night at the opera', 'Rock', '1975', 'Wielka Brytania', 'CD', 'rockanightattheopera.mp3', '49.99', 'rockanightattheopera.jpg', 'Album', 'Queen'),
(11, 'Back in Black', 'Rock', '1980', 'Australia', 'MP3', 'rockbackinblack.mp3', '39.99', 'rockbackinblack.jpg', 'Album', 'AC/DC'),
(12, 'Aerosmith', 'Rock', '1973', 'Stany Zjednoczone', 'Winyl', 'rockaerosmith.mp3', '119.99', 'rockaerosmith.jpg', 'Album', 'Aerosmith');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `UserLogin` varchar(30) COLLATE utf8_polish_ci DEFAULT NULL,
  `UserEmail` varchar(50) COLLATE utf8_polish_ci DEFAULT NULL,
  `UserPassword` varchar(100) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
