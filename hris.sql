-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2022 at 07:56 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hris`
--

-- --------------------------------------------------------

--
-- Table structure for table `absens`
--

CREATE TABLE `absens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `periode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shift1` int(11) NOT NULL,
  `shift2` int(11) NOT NULL,
  `telat` int(11) NOT NULL,
  `stb` int(11) NOT NULL,
  `tr` int(11) NOT NULL,
  `jumlah_hari_kerja` int(11) NOT NULL,
  `jumlah_lembur` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absens`
--

INSERT INTO `absens` (`id`, `nip`, `periode`, `shift1`, `shift2`, `telat`, `stb`, `tr`, `jumlah_hari_kerja`, `jumlah_lembur`, `created_at`, `updated_at`) VALUES
(1, '1.0916.74.001', 'Mei', 10, 10, 5, 0, 2, 22, 120, '2022-08-01 10:10:02', '2022-08-01 10:10:02'),
(2, '1.0916.74.001', 'Juni', 10, 12, 5, 0, 2, 24, 180, '2022-08-01 18:40:32', '2022-08-01 18:40:32'),
(3, '1222332331', 'Juli', 8, 12, 3, 7, 5, 25, 180, '2022-08-02 04:54:06', '2022-08-02 04:54:06'),
(4, '87897987', 'Juli', 10, 12, 5, 7, 2, 24, 180, '2022-08-03 11:06:04', '2022-08-03 11:06:04');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gajis`
--

CREATE TABLE `gajis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `periode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upah_pokok_bulan` double(12,2) NOT NULL,
  `bpjs_kesehatan_perusahaan` double(12,2) NOT NULL,
  `bpjs_ketenagakerjaan_jht` double(12,2) NOT NULL,
  `bpjs_ketenagakerjaan_jkk` double(12,2) NOT NULL,
  `bpjs_ketenagakerjaan_jkm` double(12,2) NOT NULL,
  `bpjs_ketenagakerjaan_jp` double(12,2) NOT NULL,
  `total_lembur` double(12,2) NOT NULL,
  `tunjangan_HM` double(12,2) NOT NULL,
  `tunjangan_kinerja` double(12,2) NOT NULL,
  `uang_saku` double(12,2) NOT NULL,
  `tunjangan_kehadiran` double(12,2) NOT NULL,
  `tunjangan_makan` double(12,2) NOT NULL,
  `tunjangan_field` double(12,2) NOT NULL,
  `tunjangan_komunikasi` double(12,2) NOT NULL,
  `tunjangan_unit` double(12,2) NOT NULL,
  `kurang_bayar` double(12,2) NOT NULL,
  `iuran_bpjs_kesehatan_karyawan` double(12,2) NOT NULL,
  `iuran_bpjs_kesehatan_perusahaan` double(12,2) NOT NULL,
  `iuran_bpjs_ketenagakerjaan_karyawan` double(12,2) NOT NULL,
  `iuran_bpjs_ketenagakerjaan_perusahaan` double(12,2) NOT NULL,
  `iuran_pph_21` double(12,2) NOT NULL,
  `lebih_bayar` double(12,2) NOT NULL,
  `unpaid` double(12,2) NOT NULL,
  `potongan_koperasi` double(12,2) NOT NULL,
  `potongan_lain_lain` double(12,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gajis`
--

INSERT INTO `gajis` (`id`, `nip`, `periode`, `upah_pokok_bulan`, `bpjs_kesehatan_perusahaan`, `bpjs_ketenagakerjaan_jht`, `bpjs_ketenagakerjaan_jkk`, `bpjs_ketenagakerjaan_jkm`, `bpjs_ketenagakerjaan_jp`, `total_lembur`, `tunjangan_HM`, `tunjangan_kinerja`, `uang_saku`, `tunjangan_kehadiran`, `tunjangan_makan`, `tunjangan_field`, `tunjangan_komunikasi`, `tunjangan_unit`, `kurang_bayar`, `iuran_bpjs_kesehatan_karyawan`, `iuran_bpjs_kesehatan_perusahaan`, `iuran_bpjs_ketenagakerjaan_karyawan`, `iuran_bpjs_ketenagakerjaan_perusahaan`, `iuran_pph_21`, `lebih_bayar`, `unpaid`, `potongan_koperasi`, `potongan_lain_lain`, `created_at`, `updated_at`) VALUES
(4, '1.0916.74.001', 'Mei', 3000000.00, 120000.00, 111000.00, 52200.00, 9000.00, 60000.00, 2160000.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 30000.00, 120000.00, 90000.00, 232200.00, 162000.00, 0.00, 0.00, 0.00, 0.00, '2022-08-01 18:44:13', '2022-08-01 18:44:13'),
(5, '1.0916.74.001', 'Juni', 3000000.00, 120000.00, 111000.00, 52200.00, 9000.00, 60000.00, 3240000.00, 200000.00, 210000.00, 4321123.00, 1232342.00, 4232231.00, 4543543.00, 234322.00, 4343333.00, 333333.00, 30000.00, 120000.00, 90000.00, 232200.00, 162000.00, 43432.00, 32111.00, 123213.00, 321323.00, '2022-08-01 18:46:59', '2022-08-01 18:46:59'),
(6, '1222332331', 'Juli', 3450000.00, 138000.00, 127650.00, 60030.00, 10350.00, 69000.00, 2160000.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 34500.00, 138000.00, 103500.00, 267030.00, 130000.00, 0.00, 0.00, 0.00, 0.00, '2022-08-02 05:13:51', '2022-08-02 05:13:51'),
(7, '87897987', 'Juli', 2999999.00, 119999.96, 110999.96, 52199.98, 9000.00, 59999.98, 1800000.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 29999.99, 119999.96, 89999.97, 232199.92, 90000.00, 0.00, 0.00, 0.00, 0.00, '2022-08-03 11:06:32', '2022-08-03 11:06:32');

-- --------------------------------------------------------

--
-- Table structure for table `karyawans`
--

CREATE TABLE `karyawans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departemen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gol_darah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_rek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_masuk` date NOT NULL,
  `ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bpjs_ketenagakerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bpjs_kesehatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npwp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upah_pokok` double(12,2) NOT NULL,
  `lembur` double NOT NULL,
  `pph_21` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `karyawans`
--

INSERT INTO `karyawans` (`id`, `nip`, `nama`, `status`, `posisi`, `departemen`, `agama`, `tempat_lahir`, `tgl_lahir`, `alamat`, `gol_darah`, `no_hp`, `no_rek`, `pendidikan`, `tgl_masuk`, `ktp`, `bpjs_ketenagakerjaan`, `bpjs_kesehatan`, `npwp`, `upah_pokok`, `lembur`, `pph_21`, `created_at`, `updated_at`) VALUES
(1, '1.0916.74.001', 'Nindy', 'Aktif', 'Drafter', 'Head Office', 'Islam', 'Jakarta', '2000-12-12', 'KOMP.BOSTER BLOK 23 PALEMBANG', 'O', '08231333311', '4543532342', 'S1', '2020-02-12', '167490092109', '76576876311312', '45664546456', '98080982112', 3000000.00, 18000, 162000, '2022-08-01 04:55:43', '2022-08-01 04:55:43'),
(2, '1222332331', 'Sandro', 'Aktif', 'Staff', 'Head Office', 'Katolik', 'Jakarta', '2000-10-16', 'KOMP.MEGA ASRI BLOK A3 PALEMBANG', 'O', '0812223331', '90909890', 'S1', '2021-02-12', '167490092123', '765768763213', '328989897183', '98080921132', 3450000.00, 12000, 130000, '2022-08-02 04:43:50', '2022-08-02 04:43:50'),
(3, '87897987', 'Yusri', 'Aktif', 'Operator', 'Water Pump', 'Buddha', 'Jakarta', '1999-03-12', 'Perumahan Bukit Sejahtera Blok BS No.3', 'O', '0812332112', '9998909898', 'S1', '2019-02-12', '1726121312212', '765768763213', '2392987398712', '98080921132', 2999999.00, 10000, 90000, '2022-08-03 10:42:15', '2022-08-03 10:42:15');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_25_104534_create_karyawans_table', 1),
(6, '2022_07_27_233139_create_gajis_table', 1),
(7, '2022_07_28_023801_create_absens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `nip`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aisyah Diniaty', 'admin@admin.com', NULL, '$2y$10$izImGHm5dDxvLYJ8MGqV8OqKzMzfrJmBYwx8awjZpsYvkn3BLd8Ru', '1.1016.94.005', '1', NULL, '2022-08-01 04:34:55', '2022-08-01 04:34:55'),
(2, 'Okiki Onedinata', 'manager@manager.com', NULL, '$2y$10$qPayxzIV9HpA39sWw32ID.3uO0UWUw9Y4MBT4e/o6EoTtPI55o9h.', '2.0916.85.002', '3', NULL, '2022-08-01 19:16:14', '2022-08-01 19:16:14'),
(3, 'Yusri Antoni', 'user@user.com', NULL, '$2y$10$gpoSX2PzXWJRssf9NFJWVOIybBfLRgKwzy6XkxygUNp0GTMf4V1pW', '87897987', '2', NULL, '2022-08-02 05:35:51', '2022-08-02 05:35:51'),
(4, 'Karisma', 'karisma@gmail.com', NULL, '$2y$10$fdogD/Ca5ikSRdk56DI/2eg.6PNfXke7pNVx4DKPfqxPlnINLDE3i', '098098', '2', NULL, '2022-08-03 12:06:46', '2022-08-03 12:06:46'),
(5, 'Kus', 'kus@gmail.com', NULL, '$2y$10$dPNtfiTaNcOjax46o5PUeuNs1aO7TraEn79H6hu.bAP5NM.AGg6G6', '667879898', '2', NULL, '2022-08-03 12:10:03', '2022-08-03 12:10:03'),
(6, 'Megan', 'megan@gmail.com', NULL, '$2y$10$0TbbooBKvfUkzp0A6YrGTOjkbEe9QVW3YPBDDgR6a6CW2pO39lnca', '13123134555', '2', NULL, '2022-08-03 12:12:05', '2022-08-03 12:12:05'),
(7, 'Habib', 'supervisor@supervisor.com', NULL, '$2y$10$iWiVeWuB7B6/AWtSXB9MYeE6MqTSVm7/RoD4ft4CuTWv0NkRJekrW', '99999888', '4', NULL, '2022-08-19 05:22:41', '2022-08-19 05:22:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absens`
--
ALTER TABLE `absens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gajis`
--
ALTER TABLE `gajis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawans`
--
ALTER TABLE `karyawans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absens`
--
ALTER TABLE `absens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gajis`
--
ALTER TABLE `gajis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `karyawans`
--
ALTER TABLE `karyawans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
