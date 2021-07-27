-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jul 2021 pada 13.32
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rapot-online`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_id` int(15) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `user_id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `no_telp`, `alamat`, `avatar`, `created_at`, `updated_at`) VALUES
(3, 57, 'Lintang', 'Blora', '2001-01-05', 'L', 'Islam', '082226467404', 'Jalan Kyai Samanhudi', 'WhatsApp Image 2019-07-29 at 09.07.33.jpeg', '2020-05-05 19:50:02', '2020-05-31 08:12:07'),
(4, 60, 'lintang', 'blora', '2001-01-05', 'L', 'Islam', '082226461404', 'Kyai Samanhudi', NULL, '2020-05-11 02:48:23', '2020-05-11 10:48:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'TKJ', NULL, NULL),
(2, 'MM', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) UNSIGNED NOT NULL,
  `kode_kelas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan_id` int(11) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `kode_kelas`, `nama`, `jurusan_id`, `created_at`, `updated_at`) VALUES
(2, 'X-TKJ', 'X', 1, NULL, '2020-05-18 04:53:42'),
(3, 'XI-TKJ', 'XI', 1, NULL, '2020-05-20 07:59:11'),
(8, 'XII-TKJ', 'XII', 1, '2020-05-16 09:19:41', '2020-05-21 04:52:03'),
(15, 'XII-MM', 'XII', 2, '2020-05-25 20:53:35', '2020-05-25 20:53:35'),
(17, 'XI-MM', 'XI', 2, '2020-06-02 08:20:25', '2020-06-02 08:20:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas_mapel`
--

CREATE TABLE `kelas_mapel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_kelas_mapel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas_id` int(11) UNSIGNED NOT NULL,
  `mapel_id` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas_semester`
--

CREATE TABLE `kelas_semester` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semester` enum('ganjil','genap') COLLATE utf8mb4_unicode_ci NOT NULL,
  `mapel_id` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelas_semester`
--

INSERT INTO `kelas_semester` (`id`, `semester`, `mapel_id`, `created_at`, `updated_at`) VALUES
(1, 'genap', 5, '2020-06-04 13:41:18', '2020-06-04 13:41:17'),
(2, 'ganjil', 5, '2020-06-04 13:41:19', '2020-06-04 13:41:20'),
(3, 'genap', 6, '2020-06-04 13:41:22', '2020-06-04 13:41:21'),
(5, 'genap', 19, '2020-06-04 12:30:31', '2020-06-04 13:41:23'),
(6, 'genap', 25, '2020-06-04 12:33:35', '2020-06-04 12:33:36'),
(7, 'genap', 18, '2020-06-04 12:33:46', '2020-06-04 12:33:48'),
(8, 'genap', 10, '2020-06-04 12:34:03', '2020-06-04 12:34:04'),
(9, 'genap', 27, '2020-06-04 12:34:28', '2020-06-04 12:34:28'),
(10, 'genap', 24, '2020-06-04 12:34:43', '2020-06-04 12:34:43'),
(11, 'genap', 30, '2020-06-04 12:34:56', '2020-06-04 12:34:56'),
(12, 'genap', 15, '2020-06-04 12:35:08', '2020-06-04 12:35:08'),
(13, 'genap', 26, '2020-06-04 12:35:17', '2020-06-04 12:35:18'),
(14, 'genap', 13, '2020-06-04 12:35:38', '2020-06-04 12:35:38'),
(15, 'genap', 12, '2020-06-04 12:35:46', '2020-06-04 12:35:46'),
(16, 'genap', 23, '2020-06-04 12:35:56', '2020-06-04 12:35:56'),
(17, 'ganjil', 8, '2020-06-04 12:36:06', '2020-06-04 12:36:06'),
(18, 'genap', 11, '2020-06-04 12:36:24', '2020-06-04 12:36:24'),
(19, 'genap', 22, '2020-06-04 12:36:36', '2020-06-04 12:36:36'),
(20, 'genap', 9, '2020-06-04 12:36:46', '2020-06-04 12:36:46'),
(21, 'genap', 14, '2020-06-04 12:36:58', '2020-06-04 12:36:58'),
(22, 'genap', 17, '2020-06-04 12:37:06', '2020-06-04 12:37:06'),
(23, 'genap', 16, '2020-06-04 12:37:15', '2020-06-04 12:37:15'),
(24, 'genap', 28, '2020-06-04 12:37:30', '2020-06-04 12:37:30'),
(25, 'genap', 21, '2020-06-04 12:37:43', '2020-06-04 12:37:43'),
(26, 'genap', 20, '2020-06-04 12:37:55', '2020-06-04 12:37:55'),
(27, 'genap', 29, '2020-06-04 12:38:05', '2020-06-04 12:38:05'),
(30, 'genap', 39, '2020-06-04 05:43:24', '2020-06-04 05:43:24'),
(31, 'ganjil', 39, '2020-06-04 05:43:24', '2020-06-04 05:43:24'),
(32, 'genap', 40, '2021-07-18 00:39:40', '2021-07-18 00:39:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `id` int(11) UNSIGNED NOT NULL,
  `kode` varchar(191) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel_siswa`
--

CREATE TABLE `mapel_siswa` (
  `id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `mapel_id` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mapel_siswa`
--

INSERT INTO `mapel_siswa` (`id`, `siswa_id`, `mapel_id`, `nilai`, `created_at`, `update_at`) VALUES
(9, 5, 6, 90, '2020-04-19 04:40:54', '0000-00-00 00:00:00'),
(10, 5, 5, 75, '2020-04-19 04:40:54', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_04_12_125007_create_siswa_table', 1),
(4, '2020_05_06_021445_create_walikelas_table', 2),
(5, '2020_05_11_132132_create_kelas_table', 3),
(6, '2020_05_19_123846_create__kelas__siswa_table', 4),
(7, '2020_05_19_141011_create_jurusan_table', 5),
(8, '2020_05_19_170135_create_nilai_table', 6),
(9, '2020_05_29_120843_create_kelas_mapel_table', 7),
(10, '2020_06_04_120501_create_kelas_semester_table', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nilai` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mapel_id` int(15) UNSIGNED DEFAULT NULL,
  `kelas_id` int(15) UNSIGNED DEFAULT NULL,
  `siswa_id` int(15) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(15) NOT NULL,
  `kelas_id` int(11) DEFAULT NULL,
  `nama_depan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_belakang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_orangtua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_orangtua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp_orangtua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_orangtua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_wali` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan_wali` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telp_wali` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_wali` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `user_id`, `kelas_id`, `nama_depan`, `nama_belakang`, `nis`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `no_telp`, `avatar`, `alamat`, `nama_orangtua`, `pekerjaan_orangtua`, `no_telp_orangtua`, `alamat_orangtua`, `nama_wali`, `pekerjaan_wali`, `no_telp_wali`, `alamat_wali`, `created_at`, `updated_at`) VALUES
(3, 106, 2, 'dwf', 'wqe', '12432', 'asd', '1232-12-12', 'P', 'Islam', '123', NULL, 'asdsad', 'asd', 'wqew', '12312', 'asdesad', 'qweq', 'qweq', '123', 'wsdwqwq', '2021-07-27 00:20:42', '2021-07-27 00:20:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(57, 'admin', 'lintang', 'lintangmangkulangit12@gmail.com', NULL, '$2y$10$g5F96x14S6wZQeS8H0eiAOJAhNnUW.PBOAUIIuAL9nlGjnKGeG1KW', 'RD90UXwzQSrwZPs5jBllsk129of4R3IFb313mnPoVTxOiRqXJempcsUFXi0l', '2020-05-05 19:50:02', '2020-05-05 19:50:02'),
(58, 'walikelas', 'Arif', 'arif@gmail.com', NULL, '$2y$10$5k1WASvsJwncvxjE421NZOooNUZIHaG14Bq/RWwdJxoQxKUdBEsJO', 'K9TnSnc5E4W6r0mPSkssaNBXYdgrKUHREOrakMOr7zUaiO2tioYd6SDkChTt', '2020-05-05 19:51:20', '2020-05-05 19:51:20'),
(59, 'siswa', 'muhammad', 'lintangmangkulangit123@gmail.com', NULL, '$2y$10$ul2WWGi/DeiswY0MmdxrT.W45njrVUbS5dCQadllFLeDsyUdho9Ti', 'vODa27jlOai9ra1X68MV8655abdlaYplPItmeJldqMt3c3o4Z3QYElPzDy6g', '2020-05-05 19:53:24', '2020-05-05 19:53:24'),
(60, 'admin', 'lintang', 'lintang1233@gmail.com', NULL, '$2y$10$B7utrCXN7T3CK0KJxMwpXuYcI8iIanbpKCbAQoChrpmkwWab5L24u', 'qjvuzHjUcKgZ6EyZICSp1neLfyeCLNBtN7ZuZfRhufUIri0ekQVF4ZEg7B8u', '2020-05-11 02:48:23', '2020-05-11 02:48:23'),
(61, 'walikelas', 'lintang', 'lintangmangkulangit@gmail.com', NULL, '$2y$10$7VNc3uCXKkOb1r/rOaEnXeAsOlbrrwbJDtRX6K.LGuHgVNIlde.6G', 'beMrSODOlVipwOci3xSV51Dg7IC9chYgezXrnzNqYAlXH5tV2utz5J0moBmL', '2020-05-14 00:21:41', '2020-05-14 00:21:41'),
(68, 'walikelas', 'andry', 'andry1@gmail.com', NULL, '$2y$10$/1R6DDDrhQd4CrBKZH1SR.1/JiGyQJu7swYLtSwZ411wWtlWSRQnK', 'ou86FnQ5YfpGn6rRiYzDMozh57Cjgs0moABHfxVnIjNqogppczDAt7IrCQri', '2020-05-15 01:04:38', '2020-05-15 01:04:38'),
(69, 'admin', 'eko', 'eko@gmail.com', NULL, '$2y$10$P4nxEZagEGD/Pfq8v4ln2OdYRSZtgiNLZqsyQS0ZqVQqx3aMh.eHa', 'hxDpZfl79ltrHJTSa1kb4fsO7OQakeZp92a6tC7I0xLJOXkoMfGFXkMc97zK', '2020-05-16 09:32:56', '2020-05-16 09:32:56'),
(70, 'siswa', 'ka eko', 'eko123@gmail.com', NULL, '$2y$10$a3EnNNjv8BQBLxhKjT9hW.jKt3JgPT/d7yt53BL3iB0Pd4EMpIZZa', 'j0icIgQeCNmXCd3hvbMqH6K2LchWM8c3jSm5DplHYVb3wy18tWARasG7nvni', '2020-05-16 09:36:25', '2020-05-16 09:36:25'),
(71, 'siswa', 'Langit', 'mengangkangi@gmail.com', NULL, '$2y$10$NL7.W3gEDoVFY8czOXYU8OCUbdR2U9NhHFsdxvB.Utx950BRv1wTa', 'x0Xf5zuzgW8jYEB1xFJdpOCxFVb3NKjjJTknauXjeSAMJPcGjsN09MXXsorv', '2020-05-18 03:35:38', '2020-05-18 03:35:38'),
(72, 'walikelas', 'litnang', 'lintangmangkulangit1234@gmail.com', NULL, '$2y$10$san3t3CTHiOvIhxwIMNCT.sbfRiAgSXdPgZT.HHl33NwXlnCOz5By', 'MSj1fy047iNmcx6aNQehxIs9MHDXgARSUWmAmmoY9XXu4iveQrn7qRg4ZcJD', '2020-05-19 08:25:46', '2020-05-19 08:25:46'),
(73, 'siswa', 'riska', 'riska@gmail.com', NULL, '$2y$10$ebH7z49.rcvWjBV.Q9Jxh.x/6Vv0CM4f4KRf6cz9HysL9tanLRV1q', 'HzYLvgLIfeZEy2kZ1i2r76rXgT6ARPiuLSTdxwmQZBlbwL5QZ6VNFOINwqcI', '2020-05-21 04:50:14', '2020-05-21 04:50:14'),
(74, 'walikelas', 'fikri', 'fikri@gmail.com', NULL, '$2y$10$SMoRLECdLy.9TCIVrCfnBesmQc.XNxhuU7Z3bN.9G3GfdMbO6MNoS', 'L5S854xgCZA9yD5vCWq7V3oRxmHxJQGd0ucyr0sAfW4uPKmk5pSPYXUETCI8', '2020-05-27 05:50:22', '2020-05-27 05:50:22'),
(75, 'walikelas', 'Lita', 'litajuwita123@gmail.com', NULL, '$2y$10$OK6iduQQysRFXS1Xu5/rjOLvcbbSmfa5HV7vxWco4p7YAXimRI03G', 'jb4n7LMJ7834yPvsas8rBwOk2V6kRKtCDu2anTI4VrL1L3L4E1tiEsfKMKSD', '2020-06-02 08:19:47', '2020-06-02 08:19:47'),
(76, 'siswa', 'Aliiii', 'ali@gmail.com', NULL, '$2y$10$wVDBA.o7EnW0uNitRXECT.YpRZ7h/at1eXMrL.1/JvNSkcWCfmeTy', '4xQOf9oCyVeH76ndpFiwE2dUdhNRyt4xHDV0bregXvvaPAGDTcMWM1DJmef2', '2020-06-02 08:30:35', '2020-06-02 08:30:35'),
(77, 'siswa', 'Ojiiiii', 'oji@gmail.com', NULL, '$2y$10$BjwGmfmYNiM/3phgHg6nv.xG2gh87QgJ6oi03GfTpIaBq1yQbR356', 'u9D1kjacGLksvduYxPm5meqlumoOWbWjslngZ3qcZULo8z5mKyo5S6B1znPS', '2020-06-02 08:36:52', '2020-06-02 08:36:52'),
(78, 'siswa', 'mustakim', 'mustakim@gmail.com', NULL, '$2y$10$u5Y5LnGLTxbPpkzhZ.TUkOs3/TMUNqrCacGk7hhb2wWY0IdFRAFAC', 'ZfbTcyvc016AeDRI5tsanIQJfIxY4vJYMKfkIL1lcKvQsIuHsVtyUQVFYOFT', '2020-06-02 08:41:26', '2020-06-02 08:41:26'),
(79, 'siswa', 'angga', 'angga@gmail.com', NULL, '$2y$10$LO1/WxtcBHgo5s4bW84ctu6w/AJJGjXxJyF9xAP55BsMobmqBVZ/2', 'fceov8cRGf7oJghG9tYGPqZzi9qfXRxSLvFw9FKMKjlDVKi4JVcPDTkPdHPD', '2020-06-02 08:49:44', '2020-06-02 08:49:44'),
(80, 'siswa', 'Adamm', 'adam@gmail.com', NULL, '$2y$10$VwzC.fIDXKaqeUCJRD0eOe0oLzCXTXI0WUamWwFSDJdCeULt.zUdK', 'o0KgiG9UPAfxzcMRIySCrHZKJsR6DAEWrLn0F8IaukLqF32C8FK52lqk8Gnw', '2020-06-02 08:58:00', '2020-06-02 08:58:00'),
(81, 'siswa', 'Roida', 'roid@gmail.com', NULL, '$2y$10$bcRBz4swQ/ZEVDbrIKyWoOIOK/sPfA/PNEuQZ2THjqwdmHWSiIWaK', 'IR2EJ9SO08BVsMb2fylzDVYS1U3LiervzgC667M2DlI5LFBHpzFyNNcEo15j', '2020-06-02 08:58:50', '2020-06-02 08:58:50'),
(82, 'siswa', 'Wulan', 'wulan@gmail.com', NULL, '$2y$10$P7tLh1xLAZgdWH1IpbukjuU8ir2w4g0BlfKoaOehyeIlWJdE34EWi', '8pmqHs32HPrYwHTUASeehvsbgm3UXL90QngYlxFSnnijwFMklGKIZ7UUKROa', '2020-06-02 09:02:31', '2020-06-02 09:02:31'),
(83, 'siswa', 'aminah', 'aminah@gmail.com', NULL, '$2y$10$3Uoh2ADm2Na9bdkBCtqZFua8YY0EKKUxAdzIBAWp7Km/FjBlG0kbO', 'NwqMh4DYhwUVQbbICupYrbC6MMz3XH82mKjPodJt1Zun1ZmQMRcee5iKQR3Y', '2020-06-02 09:03:45', '2020-06-02 09:03:45'),
(84, 'siswa', 'Ardy', 'ardy@gmail.com', NULL, '$2y$10$mv3UJ9sSxTZqGYu1wHI8qu5tfSbDL/QVR/uw29PS5dJDAv/mEVLJC', 'RGA2WNmvHXgo1HwrDSCW2Lvm43zS5BCHtTWeNlPOFPjdqMLF3BDu4DZuaWrz', '2020-06-02 09:05:02', '2020-06-02 09:05:02'),
(85, 'siswa', 'Puput', 'puput@gmail.com', NULL, '$2y$10$23P7PUiS7/Ja1ms1tCPDA.oVPW/W96LobIZX.Pr6pfK7E8tMMcL.C', 'RD07foY5NDtSyPxSPmlNM2701efDnXISWeKzvFD7cb3F0Hwaz6ZGeRSSykOl', '2020-06-02 09:06:22', '2020-06-02 09:06:22'),
(86, 'siswa', 'Anata', 'anata@gmail.com', NULL, '$2y$10$ZNUp2VjMwricGJD.RibdYOMOkod5X8hL9tE/F1OPwNE3X2C9NkUMS', 'Z859VBUDGx4tseUbe2E6m5NyU41GYWSic013Pwl1dmWvfStKyYMa9oRpEbC7', '2020-06-02 09:07:38', '2020-06-02 09:07:38'),
(88, 'siswa', 'Rudi', 'rudi@gmail.com', NULL, '$2y$10$Di/fVfyspuLoEdDXHpum8ef3FwwdTBQTaTiPxn.PHz.oPtulSMFv.', 'aquG7YataBH9YBMkqQxtfsClXQvZdf65mWfRQg6ADAPRmo9b5uDnDrocPwlU', '2020-06-02 09:10:13', '2020-06-02 09:10:13'),
(89, 'siswa', 'Lita', 'lita@gmail.com', NULL, '$2y$10$8BnTewFT7EJ6BRStIBeaaerHyvfOB/TiY5nNMfHFB1Ego3A.mx3kS', 'QVjWi1TWxUPGaL73RmFLUFGaVKeH7FqGXrItnI5XxYXar7iqk5jDjpvT5s4Y', '2020-06-02 09:11:28', '2020-06-02 09:11:28'),
(90, 'siswa', 'woi', 'woi@gmail.com', NULL, '$2y$10$t17Io8Wl0Na.oLosQ.I.NOmU1DwtoU7RQgZjPitWPBOdGqRCf7Gc6', '8bm0yYygdGC6MOQ8ZJVhA7uURfDx3oH726Agi1WnjMyGQIBQMpuXVZ8aNpiT', '2020-06-04 06:55:19', '2020-06-04 06:55:19'),
(91, 'walikelas', 'adda', 'sofyanarif659@yahoo.co.id', NULL, '$2y$10$meOGqLszZKZMHhZ555wBsOEzzgXklY3Ft5mnGunyO/BaadUg73XA2', 'Qayn8EWkoJSZ4jR2JcZrtdpXxitSJwaPTJ9l4zdjKFjWQvCCWTYhBVREnkng', '2021-07-18 00:58:06', '2021-07-18 00:58:06'),
(92, 'walikelas', 'ipa', 'sdfedfer@gmail.com', NULL, '$2y$10$5la91VYCXUQa1gCYUUU2yOmp6s2zfyswx5s6XRJaoA7fd0n4Um2Cu', 'pfvp6A6qTJgZOzCz8Vz4yypJAuOYydgoAtjPbL66PdyQZspoaTtWFfXLlbZu', '2021-07-21 07:00:58', '2021-07-21 07:00:58'),
(93, 'walikelas', 'ipa', 'arif123@gmail.com', NULL, '$2y$10$kPWi889hb5ZF5SQfdHokN.xJsvcFxjiTjg/z4urKGaWvCoAKIX07m', 'wvVu0oUemKUpt5necpUxwvCp4H4SLrvZcGWCbW6kqEAPthvxm9a7s793lOO7', '2021-07-22 04:56:16', '2021-07-22 04:56:16'),
(94, 'walikelas', 'adda', 'arif1234@gmail.com', NULL, '$2y$10$onCQ.S2xG7txazRhMnOEUuAZD3ZcoZB5jFMMCHD3OUhrmMCS1/dfa', 'yDIZNqbmKr4xXtrHrEZW8SrlfpcpLZWUyw9atk5IvLfiSodVPXiXCROW3FtX', '2021-07-22 04:58:01', '2021-07-22 04:58:01'),
(95, 'walikelas', 'adda', 'lintangmangkulangit122@gmail.com', NULL, '$2y$10$b3h2ay9lLp9jZc0IF4EWLewj5NynlyeeqoMQsFwS5AeMTWphcjkZS', 'eeZUuPxTvqYHzKA5eJawgvs6GhosquD8cQEi3IJgfE47BGNcFswySG9Br0Sb', '2021-07-22 04:59:30', '2021-07-22 04:59:30'),
(96, 'walikelas', 'ipa', 'sofyanarif651239@yahoo.co.id', NULL, '$2y$10$r4hj/ftwVa9LepD.P1N7E.kDr9kjfsf8JwO1K8jTy6HpGJq9Eaid2', 'W7JoakeIzJvlXrGbkw6WCChrOWglkdIEXfi637Ozo3iLCVQVE0YYYOGcBA8S', '2021-07-22 05:01:00', '2021-07-22 05:01:00'),
(97, 'walikelas', 'adda', '112312@gmail.com', NULL, '$2y$10$kOU9t6buZWX2mHwaaFGZueQWYhZwuWHuy2qy0VkE/1hF/Vjha4DIa', 'Va2xsOE757yHbkj3xrvuE91wDmlmphhkqI0ltH3pMhidpYDnnTffYxbXuQoz', '2021-07-22 05:04:25', '2021-07-22 05:04:25'),
(98, 'walikelas', 'adda', '11231122@gmail.com', NULL, '$2y$10$yX6a6QTryRD02s/9m79dSe2UdkPYBKkBcIVLLtGFHHWQ7XfDVszWu', 'PztKATQ5sT4eBIIkX4JdJlzj6551lN6eNOfuluElwacRFNtOMxx0L2KzKbVe', '2021-07-22 05:05:07', '2021-07-22 05:05:07'),
(99, 'walikelas', 'ipa', '1231233123@gmail.com', NULL, '$2y$10$wz.uBJApadfkIBmpVtGanuavp1PusIHu7XCJ.LSvBr3MCqVxIBhU2', '75mav2rP8GyC1ek3jEmOBYYmFM58vRHlUX7thUaYrjxrinUIpizJ5zmoovk7', '2021-07-22 05:09:07', '2021-07-22 05:09:07'),
(100, 'walikelas', '12321', '12321321321@gmail.com', NULL, '$2y$10$btzKM3I3ikZi4GJ5r5LNK.hg2Y2qb68FC5MMdg4BNecGBdNu9hHdi', 'VEJ0Wh77eL6gW93JpsKrhLoujpsIWrcjmN4CqEB96yAQ0VOoMQ453NXdMcL4', '2021-07-22 05:10:23', '2021-07-22 05:10:23'),
(101, 'walikelas', '12313', 'lintangmangkulangit11232@gmail.com', NULL, '$2y$10$pj499VKOkmMbx.0bm3f8KOhAbC5nOz9kixjiTtI/5N8jEll68/4wG', 'YvtdAVVlmvwjxWzQohL8ZWOHd5OrrG1SUY9SFg66aw3M3RHrOCFmKvEBf4UM', '2021-07-22 05:15:51', '2021-07-22 05:15:51'),
(103, 'siswa', 'dwf', 'arif1@gmail.com', NULL, '$2y$10$PlIjbdPifASQLudZBIbvjexC1ob13j0fX1ghF2pVaSq52lw0piDkq', 'ujoClUbbY0IrM2bKHeBhJtr2yF9nJ5v3LE7APh98LMCZKVpsKdxNfE7o61oD', '2021-07-22 08:55:44', '2021-07-22 08:55:44'),
(105, 'siswa', 'dwf', 'dudung1@gmail.com', NULL, '$2y$10$u1vf9coUJIDq5mGRXXTO5uz1SBxCroOhT.g6HepeOEeZWauTTWEv.', 'HJii06Zn8uVxdH3Rv7X3ZVTid8tJVoHg8G8bodlRGds1XurzWASU56ZSRtBS', '2021-07-27 00:03:13', '2021-07-27 00:03:13'),
(106, 'siswa', 'dwf', 'dudung2@gmail.com', NULL, '$2y$10$TNndJDoBg3KpqZk82Fkfdu3N8Ae.nV0ScWdzJoOhIJ.bKengqhBKO', 'KJzy1C0Ew0XaIUlAA2hdPR0b3LCKt87KFOCgxPeH2zdvVZjCnFBKLbMQqm8n', '2021-07-27 00:20:42', '2021-07-27 00:20:42'),
(107, 'walikelas', 'asdas', 'ari1@gmail.com', NULL, '$2y$10$1Yecco6qfiM5Fq9vWM8qCO2hslaiyIrn92QRSiVAsoUmw8zdoqhLi', 'vn5BeQoVVE5QOXYkWOu2IxnhyihlIcXQUijAAaAnffXiOUOoew8RVYVLX2xI', '2021-07-27 00:21:55', '2021-07-27 00:21:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `walikelas`
--

CREATE TABLE `walikelas` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(15) NOT NULL,
  `kelas_id` int(11) DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `walikelas`
--

INSERT INTO `walikelas` (`id`, `user_id`, `kelas_id`, `nama`, `nip`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `no_telp`, `alamat`, `avatar`, `created_at`, `updated_at`) VALUES
(4, 107, 2, 'asdas', '12312', 'sdfesd', '1232-12-12', 'Perempuan', 'Islam', '12312', 'sdfsdf', NULL, '2021-07-27 00:21:55', '2021-07-27 00:21:55');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas_mapel`
--
ALTER TABLE `kelas_mapel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_kelas_mapel_kelas` (`kelas_id`),
  ADD KEY `FK_kelas_mapel_mapel` (`mapel_id`);

--
-- Indeks untuk tabel `kelas_semester`
--
ALTER TABLE `kelas_semester`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_kelas_semester_mapel` (`mapel_id`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mapel_siswa`
--
ALTER TABLE `mapel_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_nilai_kelas` (`kelas_id`),
  ADD KEY `FK_nilai_siswa` (`siswa_id`),
  ADD KEY `FK_nilai_mapel` (`mapel_id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `walikelas`
--
ALTER TABLE `walikelas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kelas_mapel`
--
ALTER TABLE `kelas_mapel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `kelas_semester`
--
ALTER TABLE `kelas_semester`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mapel_siswa`
--
ALTER TABLE `mapel_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT untuk tabel `walikelas`
--
ALTER TABLE `walikelas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kelas_mapel`
--
ALTER TABLE `kelas_mapel`
  ADD CONSTRAINT `FK_kelas_mapel_kelas` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`),
  ADD CONSTRAINT `FK_kelas_mapel_mapel` FOREIGN KEY (`mapel_id`) REFERENCES `mapel` (`id`);

--
-- Ketidakleluasaan untuk tabel `kelas_semester`
--
ALTER TABLE `kelas_semester`
  ADD CONSTRAINT `FK_kelas_semester_mapel` FOREIGN KEY (`mapel_id`) REFERENCES `mapel` (`id`);

--
-- Ketidakleluasaan untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `FK_nilai_kelas` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`),
  ADD CONSTRAINT `FK_nilai_mapel` FOREIGN KEY (`mapel_id`) REFERENCES `mapel` (`id`),
  ADD CONSTRAINT `FK_nilai_siswa` FOREIGN KEY (`siswa_id`) REFERENCES `siswa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
