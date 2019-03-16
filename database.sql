-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Mar 2019 pada 14.54
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `person`
--

CREATE TABLE `person` (
  `id_person` int(5) NOT NULL,
  `person_name` varchar(50) NOT NULL,
  `region_id` int(11) NOT NULL,
  `address` varchar(300) NOT NULL,
  `income` int(10) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `person`
--

INSERT INTO `person` (`id_person`, `person_name`, `region_id`, `address`, `income`, `created_at`) VALUES
(2, 'Adi', 101, 'Jalan Cinta', 1000000, '2019-03-16 06:28:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `regions`
--

CREATE TABLE `regions` (
  `id_regions` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `regions`
--

INSERT INTO `regions` (`id_regions`, `name`, `created_at`) VALUES
(101, 'Jakarta Barat', '2019-03-16 20:03:45'),
(102, 'Jakarta Timur', '2019-03-16 20:01:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_users` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `email`, `password`, `created_at`) VALUES
(1, 'admin@gmail.com', 'admin', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id_person`),
  ADD KEY `region_id` (`region_id`);

--
-- Indeks untuk tabel `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id_regions`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `fk_region` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id_regions`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
