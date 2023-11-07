-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 07 Nov 2023 pada 15.58
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `UniqueItemsDB`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `UniqueItems`
--

CREATE TABLE `UniqueItems` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_description` text DEFAULT NULL,
  `item_category` varchar(50) DEFAULT NULL,
  `item_condition` varchar(20) DEFAULT NULL,
  `item_price` decimal(10,2) DEFAULT NULL,
  `item_owner` varchar(255) DEFAULT NULL,
  `item_image_url` varchar(255) DEFAULT NULL,
  `item_location` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `UniqueItems`
--

INSERT INTO `UniqueItems` (`item_id`, `item_name`, `item_description`, `item_category`, `item_condition`, `item_price`, `item_owner`, `item_image_url`, `item_location`) VALUES
(10, 'Lukisan Mona lisa', 'Lukisan \"Mona Lisa\" adalah salah satu karya seni paling terkenal di dunia, dilukis oleh Leonardo da Vinci antara tahun 1503 dan 1506, dan kemudian diperbarui pada tahun 1517. Lukisan ini menggambarkan seorang wanita dengan senyuman misterius yang duduk di depan latar belakang yang indah.', 'Barang Antik', 'Koleksi', 999.00, 'Louvre Museum', 'https://th.bing.com/th/id/OIP.ZIvq9oKdubjd7EwbZjUa7gHaF7?pid=ImgDet&rs=1', 'Paris, France');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `UniqueItems`
--
ALTER TABLE `UniqueItems`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `UniqueItems`
--
ALTER TABLE `UniqueItems`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
