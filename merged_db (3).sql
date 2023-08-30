-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 19 jun 2023 om 12:47
-- Serverversie: 10.4.28-MariaDB
-- PHP-versie: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `merged_db`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `phone`, `address`, `created_at`) VALUES
(14, 'Bradley van Welij', 'bradleyvanwelij@gmail.com', 'bradleyvanwelij@gmai', 'Pompenburg 118', '2023-04-11'),
(15, 'Bradley van Welij', 'bradleyvanwelij@gmail.com', 'bradleyvanwelij@gmai', 'Pompenburg 14535', '2023-04-11'),
(18, 'Bradley van Welij', 'bradleyvanwelij@gmail.com', '0636048479', 'Pompenburg 118', '2023-04-11');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `uploaded_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `file_size` int(11) NOT NULL,
  `file_path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `files`
--

INSERT INTO `files` (`id`, `filename`, `title`, `description`, `uploaded_at`, `file_size`, `file_path`) VALUES
(14, '64902bf08eb02_mopfoj80rwoa1.png', '', '', '2023-06-19 10:20:32', 5, ''),
(15, '64902c6309705_fist.jpg', '', '', '2023-06-19 10:22:27', 0, ''),
(16, '64902c763a7a9_Kniprawgawrsel.PNG', '', '', '2023-06-19 10:22:46', 0, '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `records`
--

CREATE TABLE `records` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `users_uid` tinytext NOT NULL,
  `users_pwd` longtext NOT NULL,
  `users_email` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`user_id`, `users_uid`, `users_pwd`, `users_email`) VALUES
(2, 'Bradley', '$2y$10$OzGDaebERnuDjVF6KYqrLu7GW8YrbtAPHn.xHM9RxyD9/WnJFP3si', 'bradleyvanwelij@gmail.com'),
(3, 'jan', '$2y$10$lNpvc7F2LMev2SGai8nHROF547IQzmmw9l2rXQ1V6OSb3TKjQWCgO', 'mortax500@gmail.com'),
(4, 'luca', '$2y$10$i42V6fRgVeuliqMt.15rO.K.omn2ZVvD3WBqkKXuahffJS9jf41HG', 'luca@gmail.com'),
(5, 'test1', '$2y$10$kj9tST1Ys9FQfW5.CyjmYefkYiC3577axbaC6.DCr60.FN8n/JMUu', 'test1@gmail.com');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT voor een tabel `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT voor een tabel `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
