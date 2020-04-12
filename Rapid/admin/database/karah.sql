-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Apr 2020 pada 08.38
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `AdminUserName` varchar(255) NOT NULL,
  `AdminPassword` varchar(255) NOT NULL,
  `AdminEmailId` varchar(255) NOT NULL,
  `Is_Active` int(11) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `AdminUserName`, `AdminPassword`, `AdminEmailId`, `Is_Active`, `CreationDate`, `UpdationDate`) VALUES
(1, 'admin', '$2y$12$aTvdM7SoX28fKZZ.N0/eRuPJtEJ7Rx3Om/rnyiAS2Bg9x4LAg8aRG', 'phpgurukulofficial@gmail.com', 1, '2018-05-27 17:51:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblberanda`
--

CREATE TABLE `tblberanda` (
  `id` int(11) NOT NULL,
  `PageName` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `Description` longtext DEFAULT NULL,
  `PageImage` varchar(255) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblberanda`
--

INSERT INTO `tblberanda` (`id`, `PageName`, `PageTitle`, `Description`, `PageImage`, `PostingDate`, `UpdationDate`) VALUES
(1, 'sambutanlurah', 'Sambutan Lurah Kelurahan Karah', '<p>Assalamualaikum Wr. Wb.</p><p>Salam sejahtera bagi kita semua, Puji syukur kehadirat Allah SWT atas segala ridhonya, dalam rangka mempublikasikan informasi dan dokumentasi kegiatan Kelurahan Karah, dihadirkan portal Kelurahan Karah &amp; TP PKK Kelurahan Karah. Dengan hadirnya portal ini diharapkan bisa menjadi media informasi dan publikasi untuk memenuhi kebutuhan informasi masyarakat. Portal ini dapat diakses melalui internet, dimana saja, kapan saja dan siapa saja, berbagai info tentang kegiatan Kelurahan Karah, dan informasi lain yang bermanfaat. Informasi tidak terbatas hanya kegiatan Kelurahan Karah saja, namun juga berbagai informasi penting yang harus dan wajib diketahui seluruh warga masyarakat Se Kelurahan Karah dan sekitarnya.</p><p>Wassalamualaikum Wr. Wb.</p><p><b>Lurah Kelurahan Karah</b></p><p>ALI PRANOTO, SKM.,M.Kes</p>', '', '2018-06-30 18:01:03', '2020-04-12 06:37:07'),
(2, 'sambutantppkk', 'Sambutan Ketua TP-PKK Kelurahan Karah', '<p>Assalamualaikum Wr. Wb.</p><p>Salam sejahtera bagi kita semua, Puji syukur kehadirat Allah SWT atas segala ridhonya, dalam rangka mempublikasikan informasi dan dokumentasi kegiatan PKK Kelurahan Karah, dihadirkan portal Kelurahan Karah &amp; TP PKK Kelurahan Karah. Dengan hadirnya portal ini diharapkan bisa menjadi media informasi dan publikasi untuk memenuhi kebutuhan informasi masyarakat. Portal ini dapat diakses melalui internet, dimana saja, apan saja dan siapa saja, berbagai info tentang kegiatan PKK Kelurahan Karah, dan informasi lain yang bermanfaat. Informasi tidak terbatas hanya kegiatan PKK Kelurahan Karah saja, namun juga berbagai informasi penting yang harus dan wajib diketahui seluruh warga masyarakat Se Kelurahan Karah dan sekitarnya.</p><p>Wassalamualaikum Wr. Wb.</p><p><b>Ketua TP-PKK Kelurahan Karah</b></p><p>Ir. DIAH GAJATRI KUSUMAWINAHJU</p>', '', '2018-06-30 18:01:36', '2020-04-12 06:38:01');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tblberanda`
--
ALTER TABLE `tblberanda`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tblberanda`
--
ALTER TABLE `tblberanda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
