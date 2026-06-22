-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2026 at 08:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uas_pbo_ti1c_geryputrasetiawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_karyawan`
--

CREATE TABLE `tabel_karyawan` (
  `id_karyawan` varchar(10) NOT NULL,
  `nama_karyawan` varchar(100) NOT NULL,
  `departemen` varchar(50) NOT NULL,
  `hari_kerja_masuk` int(11) NOT NULL,
  `gaji_dasar_per_hari` decimal(12,2) NOT NULL,
  `jenis_karyawan` varchar(20) NOT NULL CHECK (`jenis_karyawan` in ('Kontrak','Tetap','Magang')),
  `tunjangan_kesehatan` decimal(12,2) DEFAULT NULL,
  `opsi_saham_id` varchar(20) DEFAULT NULL,
  `durasi_kontrak_bulan` int(11) DEFAULT NULL,
  `agensi_penyalur` varchar(100) DEFAULT NULL,
  `uang_saku_bulanan` decimal(12,2) DEFAULT NULL,
  `sertifikat_kampus_merdeka` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_karyawan`
--

INSERT INTO `tabel_karyawan` (`id_karyawan`, `nama_karyawan`, `departemen`, `hari_kerja_masuk`, `gaji_dasar_per_hari`, `jenis_karyawan`, `tunjangan_kesehatan`, `opsi_saham_id`, `durasi_kontrak_bulan`, `agensi_penyalur`, `uang_saku_bulanan`, `sertifikat_kampus_merdeka`) VALUES
('KAY-001', 'Andi Pratama', 'IT', 22, 350000.00, 'Tetap', 500000.00, 'ESOP-001', NULL, NULL, NULL, NULL),
('KAY-002', 'Budi Santoso', 'HRD', 21, 300000.00, 'Tetap', 450000.00, 'ESOP-002', NULL, NULL, NULL, NULL),
('KAY-003', 'Citra Lestari', 'Finance', 22, 400000.00, 'Tetap', 600000.00, 'ESOP-003', NULL, NULL, NULL, NULL),
('KAY-004', 'Dewi Sartika', 'Marketing', 20, 320000.00, 'Tetap', 500000.00, 'ESOP-004', NULL, NULL, NULL, NULL),
('KAY-005', 'Eko Prasetyo', 'IT', 23, 380000.00, 'Tetap', 550000.00, 'ESOP-005', NULL, NULL, NULL, NULL),
('KAY-006', 'Fany Indah', 'Legal', 22, 450000.00, 'Tetap', 700000.00, 'ESOP-006', NULL, NULL, NULL, NULL),
('KAY-007', 'Gilang Ramadan', 'Operations', 21, 310000.00, 'Tetap', 450000.00, 'ESOP-007', NULL, NULL, NULL, NULL),
('KAY-008', 'Hany Nuraini', 'IT', 22, 250000.00, 'Kontrak', NULL, NULL, 12, 'PT Mitratama', NULL, NULL),
('KAY-009', 'Indra Wijaya', 'Operations', 19, 220000.00, 'Kontrak', NULL, NULL, 6, 'PT Garda Utama', NULL, NULL),
('KAY-010', 'Joko Susilo', 'Security', 24, 180000.00, 'Kontrak', NULL, NULL, 24, 'PT Securitas Indo', NULL, NULL),
('KAY-011', 'Kartika Putri', 'Creative', 20, 260000.00, 'Kontrak', NULL, NULL, 12, 'PT Talent Scout', NULL, NULL),
('KAY-012', 'Lukman Hakim', 'IT', 22, 280000.00, 'Kontrak', NULL, NULL, 6, 'PT Mitratama', NULL, NULL),
('KAY-013', 'Mega Utami', 'Finance', 21, 270000.00, 'Kontrak', NULL, NULL, 12, 'PT Solusi Finansial', NULL, NULL),
('KAY-014', 'Naufal Abdi', 'Marketing', 18, 230000.00, 'Kontrak', NULL, NULL, 6, 'PT Media Promo', NULL, NULL),
('KAY-015', 'Oki Setiawan', 'IT', 20, 0.00, 'Magang', NULL, NULL, NULL, NULL, 2500000.00, 'MSIB-BATCH-6'),
('KAY-016', 'Putri Ayu', 'HRD', 22, 0.00, 'Magang', NULL, NULL, NULL, NULL, 2200000.00, 'MSIB-BATCH-6'),
('KAY-017', 'Rian Hidayat', 'Marketing', 21, 0.00, 'Magang', NULL, NULL, NULL, NULL, 2200000.00, 'NON-MSIB'),
('KAY-018', 'Siti Aminah', 'Finance', 22, 0.00, 'Magang', NULL, NULL, NULL, NULL, 2500000.00, 'MSIB-BATCH-5'),
('KAY-019', 'Taufik Hidayat', 'IT', 15, 0.00, 'Magang', NULL, NULL, NULL, NULL, 2000000.00, 'NON-MSIB'),
('KAY-020', 'Vina Panduwinata', 'Creative', 20, 0.00, 'Magang', NULL, NULL, NULL, NULL, 2400000.00, 'MSIB-BATCH-6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_karyawan`
--
ALTER TABLE `tabel_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
