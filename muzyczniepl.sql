-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 16 Kwi 2023, 19:35
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
  `ProductAuthor` varchar(50) COLLATE utf8_polish_ci DEFAULT NULL,
  `bestseller` varchar(3) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `products`
--

INSERT INTO `products` (`ProductID`, `ProductName`, `ProductGenre`, `ProductRelease`, `ProductCountry`, `ProductType`, `ProductDemo`, `ProductPrize`, `ProductPhoto`, `ProductDiscography`, `ProductAuthor`, `bestseller`) VALUES
(1, 'Gold Rush Kid', 'Pop', '2022', 'Wielka Brytania', 'MP3', 'pop/popgoldrushkid.mp3', '49.99', 'pop/popgoldrushkid.jpg', 'Album', 'George Ezra', 'no'),
(2, 'Lost on you', 'Pop', '2016', 'Stany Zjednoczone', 'Winyl', 'pop/poplostonyou.mp3', '129.99', 'pop/poplostonyou.jpg', 'Album', 'LP', 'yes'),
(3, 'Making Mirrors', 'Pop', '2011', 'Australia', 'CD', 'pop/popmakingmirrors.mp3', '69.99', 'pop/popmakingmirrors.jpg', 'Album', 'Gotye', 'no'),
(4, 'Tribute', 'Pop', '2013', 'Wielka Brytania', 'CD', 'pop/poptribute.mp3', '74.99', 'pop/poptribute.jpg', 'Album', 'John Newman', 'no'),
(5, 'Art Brut 2', 'Rap', '2020', 'Polska', 'Winyl', 'rap/rapartbrut2.mp3', '149.99', 'rap/rapartbrut2.jpg', 'Album', 'PRO8L3M', 'yes'),
(6, 'Graduation', 'Rap', '2007', 'Stany Zjednoczone', 'CD', 'rap/rapgraduation.mp3', '39.99', 'rap/rapgraduation.jpg', 'Album', 'Kanye West', 'yes'),
(7, 'Plansze', 'Rap', '2019', 'Polska', 'MP3', 'rap/rapplanszejan.mp3', '54.99', 'rap/rapplanszejan.jpg', 'Album', 'Jan-Rapowanie', 'no'),
(8, 'Romantic Psycho', 'Rap', '2020', 'Polska', 'MP3', 'rap/rapromanticpsycho.mp3', '49.99', 'rap/rapromanticpsycho.jpg', 'Album', 'Quebonafide', 'yes'),
(9, 'Aftermath', 'Rock', '1966', 'Wielka Brytania', 'Winyl', 'rock/rockaftermath.mp3', '149.99', 'rock/rockaftermath.jpg', 'Album', 'The Rolling Stones', 'no'),
(10, 'A night at the opera', 'Rock', '1975', 'Wielka Brytania', 'CD', 'rock/rockanightattheopera.mp3', '49.99', 'rock/rockanightattheopera.jpg', 'Album', 'Queen', 'yes'),
(11, 'Back in Black', 'Rock', '1980', 'Australia', 'MP3', 'rock/rockbackinblack.mp3', '39.99', 'rock/rockbackinblack.jpg', 'Album', 'AC/DC', 'yes'),
(12, 'Aerosmith', 'Rock', '1973', 'Stany Zjednoczone', 'Winyl', 'rock/rockaerosmith.mp3', '119.99', 'rock/rockaerosmith.jpg', 'Album', 'Aerosmith', 'no');

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
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
