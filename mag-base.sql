-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 03 Sty 2022, 17:14
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `mag-base`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` longtext NOT NULL,
  `author` text NOT NULL,
  `price` double NOT NULL,
  `status` text NOT NULL,
  `addedById` int(11) NOT NULL,
  `addedDate` datetime NOT NULL,
  `imgId` int(11) NOT NULL,
  `catalogNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `description`, `author`, `price`, `status`, `addedById`, `addedDate`, `imgId`, `catalogNumber`) VALUES
(22, 'sad', 'qwesda', 'Marzena Okuszko', 32, 'Dostępne', 1, '2021-08-28 17:51:44', 34, 24134),
(23, 'Marokańska plaża', 'dfsfds', 'Marzena Okuszko', 324235, 'Dostępne', 1, '2021-08-28 18:41:49', 35, 4323),
(24, 'ds', 'dsfs', 'dsf', 23, 'Dostępne', 1, '2021-12-17 17:21:30', 43, 231),
(25, 'dsfdsf', 'dsfsdf', 'sdfds', 231, 'Nie dostępne', 1, '2021-12-17 17:21:43', 42, 231);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `extension` text NOT NULL,
  `addedDate` datetime NOT NULL,
  `authorId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `library`
--

INSERT INTO `library` (`id`, `name`, `extension`, `addedDate`, `authorId`) VALUES
(34, 'img20210828175130900', 'jpg', '2021-08-28 17:51:30', 1),
(35, 'img2021082818413364', 'jpg', '2021-08-28 18:41:33', 1),
(37, 'img20211217170957654', 'png', '2021-12-17 17:09:57', 1),
(38, 'img20211217170957561', 'png', '2021-12-17 17:09:57', 1),
(39, 'img20211217170957894', 'png', '2021-12-17 17:09:57', 1),
(40, 'img20211217170957802', 'png', '2021-12-17 17:09:57', 1),
(41, 'img20211217171248770', 'png', '2021-12-17 17:12:48', 1),
(42, 'img20211217171248320', 'png', '2021-12-17 17:12:48', 1),
(43, 'img20211217171248704', 'png', '2021-12-17 17:12:48', 1),
(44, 'img2021121717124883', 'png', '2021-12-17 17:12:48', 1),
(45, 'img20211217171459110', 'jpg', '2021-12-17 17:14:59', 1),
(46, 'img20211217171459400', 'jpg', '2021-12-17 17:14:59', 1),
(47, 'img20211217171500713', 'jpg', '2021-12-17 17:15:00', 1),
(49, 'img20211217171500517', 'jpg', '2021-12-17 17:15:00', 1),
(50, 'img20211217171500983', 'jpg', '2021-12-17 17:15:00', 1),
(54, 'img20211217171500642', 'jpg', '2021-12-17 17:15:00', 1),
(55, 'img20211217171500858', 'jpg', '2021-12-17 17:15:00', 1),
(56, 'img20211217171500527', 'jpg', '2021-12-17 17:15:00', 1),
(57, 'img20211217171500258', 'jpg', '2021-12-17 17:15:00', 1),
(58, 'img20211217171500241', 'jpg', '2021-12-17 17:15:00', 1),
(59, 'img20211217171500295', 'jfif', '2021-12-17 17:15:00', 1),
(60, 'img20211217171500275', 'jpg', '2021-12-17 17:15:00', 1),
(61, 'img2021121717150022', 'jpg', '2021-12-17 17:15:00', 1),
(62, 'img20211217171500763', 'jpg', '2021-12-17 17:15:00', 1),
(63, 'img20211217171500736', 'jpg', '2021-12-17 17:15:00', 1),
(64, 'img20211217171500463', 'jpg', '2021-12-17 17:15:00', 1),
(65, 'img20211217171519521', '', '2021-12-17 17:15:19', 1),
(66, 'img20211217171607271', 'jpg', '2021-12-17 17:16:07', 1),
(68, 'img20211217171607999', 'jpg', '2021-12-17 17:16:07', 1),
(69, 'img20211217171607606', 'jpg', '2021-12-17 17:16:07', 1),
(70, 'img20211217171641490', 'jpg', '2021-12-17 17:16:41', 1),
(71, 'img2021121717164189', 'jpg', '2021-12-17 17:16:41', 1),
(72, 'img20211217171641826', 'jpg', '2021-12-17 17:16:41', 1),
(73, 'img20211217171641277', 'png', '2021-12-17 17:16:41', 1),
(74, 'img20211217171642963', 'jpg', '2021-12-17 17:16:42', 1),
(75, 'img20211217171642453', 'jpg', '2021-12-17 17:16:42', 1),
(76, 'img2021121717164282', 'jpg', '2021-12-17 17:16:42', 1),
(77, 'img20211217171642566', 'jpg', '2021-12-17 17:16:42', 1),
(78, 'img20211217171642438', 'jfif', '2021-12-17 17:16:42', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(32) COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `password_hash` varchar(96) COLLATE utf8_polish_ci NOT NULL,
  `is_activated` tinyint(1) NOT NULL,
  `rank` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password_hash`, `is_activated`, `rank`) VALUES
(1, 'admin', 'test@admin.com', '$2y$10$IbbqGGWqCWIElZGkr9BwgOhbftMspj9p.UrRzX2fJg5H0p21P6I6u', 0, 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT dla tabeli `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
