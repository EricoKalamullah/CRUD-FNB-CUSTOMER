-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jan 2023 pada 03.05
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_pelanggan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_pelanggan`
--

CREATE TABLE `daftar_pelanggan` (
  `id_peserta` int(11) NOT NULL,
  `nama_pembeli` varchar(50) NOT NULL,
  `paket_menu_ayam` varchar(50) NOT NULL,
  `jumlah_pesanan` varchar(50) NOT NULL,
  `no_meja` char(13) NOT NULL,
  `total_biaya` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_pelanggan`
--

INSERT INTO `daftar_pelanggan` (`id_peserta`, `nama_pembeli`, `paket_menu_ayam`, `jumlah_pesanan`, `no_meja`, `total_biaya`) VALUES
(8, 'Galih', 'Argen 3 (Ayam+Kentang)', '2', '03', 'Rp.16.000'),
(9, 'Bima', 'Argen 2 (Ayam+Nasi)', '1', '10', 'Rp.10.000'),
(10, 'Erico P', 'Argen 1 (Ayam+Nasi+Es Teh)', '1', '14', 'Rp.13.000'),
(15, 'Galih Lato', 'Argen 1 (Ayam+Nasi+Es Teh)', '1', '14', 'Rp.13.000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar_pelanggan`
--
ALTER TABLE `daftar_pelanggan`
  ADD PRIMARY KEY (`id_peserta`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar_pelanggan`
--
ALTER TABLE `daftar_pelanggan`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
