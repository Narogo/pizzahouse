-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 11 Paź 2020, 10:55
-- Wersja serwera: 10.4.13-MariaDB
-- Wersja PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `pizzahouse`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pizzas`
--

CREATE TABLE `pizzas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `base` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `toppings` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`toppings`)),
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `pizzas`
--

INSERT INTO `pizzas` (`id`, `created_at`, `updated_at`, `type`, `base`, `name`, `toppings`, `price`) VALUES
(20, '2020-10-07 15:48:37', '2020-10-07 15:48:37', 'szynkowa', 'Cienkie', 'test', '[\"pieczarki\",\"papryczka chili\",\"cebula\",\"papryka\",\"kurczak\"]', 20),
(21, '2020-10-09 18:06:50', '2020-10-09 18:06:50', 'pepperoni', 'Grube', 'test 2', '[\"pieczarki\",\"papryczka chili\",\"cebula\",\"papryka\",\"kurczak\"]', 20),
(22, '2020-10-09 18:07:17', '2020-10-09 18:07:17', 'szynkowa', 'Cienkie', 'test 3', '[\"pieczarki\",\"papryka\"]', 20);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `pizzas`
--
ALTER TABLE `pizzas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `pizzas`
--
ALTER TABLE `pizzas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
