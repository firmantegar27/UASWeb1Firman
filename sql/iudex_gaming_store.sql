-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Feb 2024 pada 15.47
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iudex_gaming_store`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin1@gmail.com', '$2y$10$RD8wHqob.LaFXvTqohH49uoKZmderDuhpBq.SvwRZeYpnFGGD3mtG', '2024-02-07 09:53:40', '2024-02-07 09:53:40'),
(2, 'admin2@gmail.com', '$2y$10$iCU2JpRojgzcpzBEMzNWe.HZeypZ8J6T0uRI5FVCaVhTapG8CeYau', '2024-02-07 09:55:16', '2024-02-07 09:55:16'),
(4, 'admin@gmail.com', '$2y$10$d5mnDRrP9kWGDrRYI1zklewpRRC3v8eBW7j1UKPAy8a3aPaimOED2', '2024-02-08 03:50:58', '2024-02-08 03:50:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `game_alls`
--

CREATE TABLE `game_alls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dev` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `game_alls`
--

INSERT INTO `game_alls` (`id`, `dev`, `title`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(1, 'HoYoverse', 'Genshin Impact', 'genshin-impact', 'Icon-genshin.jpg', '2024-01-23 04:27:18', '2024-01-23 04:27:18'),
(2, 'VNGGAMES', 'Metal Slug:Awakening', 'metal-slug', 'Icon-MSA.jpg', '2024-01-23 04:27:18', '2024-01-23 04:27:18'),
(3, 'Tencent', 'Brawl Star', 'brawl-star', 'Icon-Brawl.jpg', '2024-01-23 04:27:18', '2024-01-23 04:27:18'),
(4, 'Garena', 'Call of Duty Mobile', 'codm', 'Icon-CODM.jpg', '2024-01-23 04:27:18', '2024-01-23 04:27:18'),
(5, 'Garena', 'Free Fire', 'free-fire', 'Icon-ff.jpg', '2024-01-23 04:27:18', '2024-01-23 04:27:18'),
(6, 'Gravity Game Hub', 'Ragnarok Origin Global', 'R-O-G', 'Icon-ROO.jpg', '2024-01-23 04:27:18', '2024-01-23 04:27:18'),
(7, 'Tencent', 'Tower of Fantasy', 'T-O-F', 'Icon-ToF.jpg', '2024-01-23 04:27:18', '2024-01-23 04:27:18'),
(8, 'Garena', 'Arena of Valor', 'AOV', 'Icon-AOV.jpg', '2024-01-23 04:27:18', '2024-01-23 04:27:18'),
(9, 'EA Games', 'Apex Legend', 'apex-legend', 'Icon-Apex.jpg', '2024-01-23 04:27:18', '2024-01-23 04:27:18'),
(10, 'Epic Games', 'Fortnite', 'fortnite', 'Icon-FORTNITE-.jpg', '2024-01-23 04:27:18', '2024-01-23 04:27:18'),
(11, 'Riot Games', 'League of Legend', 'LOL', 'Icon-LOL.webp', '2024-01-23 04:27:18', '2024-01-23 04:27:18'),
(12, 'Tencent', 'Goddes of Victory:nikke', 'nikke', 'Icon-nikke.jpg', '2024-01-23 04:27:18', '2024-01-23 04:27:18'),
(13, 'Zeppeto', 'Point Blank', 'PB', 'Icon-PB.jpg', '2024-01-23 04:27:18', '2024-01-23 04:27:18'),
(14, 'Tencent', 'PUBG', 'pubg', 'Icon-PUBG.jpg', '2024-01-23 04:27:18', '2024-01-23 04:27:18'),
(15, 'Riot Games', 'Valorant', 'valorant', 'Icon-VALORANT.jpg', '2024-01-23 04:27:18', '2024-01-23 04:27:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `game_mobiles`
--

CREATE TABLE `game_mobiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dev` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `game_mobiles`
--

INSERT INTO `game_mobiles` (`id`, `dev`, `title`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(1, 'HoYoverse', 'Genshin Impact', 'genshin-impact', 'Icon-genshin.jpg', '2024-01-23 04:27:28', '2024-01-23 04:27:28'),
(2, 'VNGGAMES', 'Metal Slug:Awakening', 'metal-slug', 'Icon-MSA.jpg', '2024-01-23 04:27:28', '2024-01-23 04:27:28'),
(3, 'Tencent', 'Brawl Star', 'brawl-star', 'Icon-Brawl.jpg', '2024-01-23 04:27:28', '2024-01-23 04:27:28'),
(4, 'Garena', 'Call of Duty Mobile', 'codm', 'Icon-CODM.jpg', '2024-01-23 04:27:28', '2024-01-23 04:27:28'),
(5, 'Garena', 'Free Fire', 'free-fire', 'Icon-ff.jpg', '2024-01-23 04:27:28', '2024-01-23 04:27:28'),
(6, 'Gravity Game Hub', 'Ragnarok Origin Global', 'R-O-G', 'Icon-ROO.jpg', '2024-01-23 04:27:28', '2024-01-23 04:27:28'),
(7, 'Tencent', 'Tower of Fantasy', 'T-O-F', 'Icon-ToF.jpg', '2024-01-23 04:27:28', '2024-01-23 04:27:28'),
(8, 'Garena', 'Arena of Valor', 'AOV', 'Icon-AOV.jpg', '2024-01-23 04:27:28', '2024-01-23 04:27:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `game_p_c_s`
--

CREATE TABLE `game_p_c_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dev` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `game_p_c_s`
--

INSERT INTO `game_p_c_s` (`id`, `dev`, `title`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(1, 'EA Games', 'Apex Legend', 'apex-legend', 'Icon-Apex.jpg', '2024-01-23 04:27:06', '2024-01-23 04:27:06'),
(2, 'Epic Games', 'Fortnite', 'fortnite', 'Icon-FORTNITE-.jpg', '2024-01-23 04:27:06', '2024-01-23 04:27:06'),
(3, 'Riot Games', 'League of Legend', 'LOL', 'Icon-LOL.webp', '2024-01-23 04:27:06', '2024-01-23 04:27:06'),
(4, 'Tencent', 'Goddes of Victory:nikke', 'nikke', 'Icon-nikke.jpg', '2024-01-23 04:27:06', '2024-01-23 04:27:06'),
(5, 'Zeppeto', 'Point Blank', 'PB', 'Icon-PB.jpg', '2024-01-23 04:27:06', '2024-01-23 04:27:06'),
(6, 'Tencent', 'PUBG', 'pubg', 'Icon-PUBG.jpg', '2024-01-23 04:27:06', '2024-01-23 04:27:06'),
(7, 'Riot Games', 'Valorant', 'valorant', 'Icon-VALORANT.jpg', '2024-01-23 04:27:06', '2024-01-23 04:27:06'),
(8, 'HoYoverse', 'Genshin Impact', 'genshin-impact', 'Icon-Genshin.jpg', '2024-01-23 04:27:06', '2024-01-23 04:27:06');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_08_022531_create_topups_table', 1),
(6, '2024_01_08_022604_create_purchase_histories_table', 1),
(7, '2024_01_08_132920_create_categories_table', 1),
(8, '2024_01_09_084057_create_game_mobiles_table', 1),
(9, '2024_01_09_084126_create_game_p_c_s_table', 1),
(10, '2024_01_09_084140_create_game_alls_table', 1),
(11, '2024_01_21_172826_create_topup_history_table', 1),
(12, '2024_02_07_162337_create_admins_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `purchase_histories`
--

CREATE TABLE `purchase_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `topups`
--

CREATE TABLE `topups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `topup_histories`
--

CREATE TABLE `topup_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(20, 'user@gmail.com', '$2y$10$8ZdBBQ4U1Wp5BvIHjJFjgO33ylp8jWoiUOyuCeeYGdq9ztWnwR6tq', 0, NULL, '2024-02-07 18:20:09', '2024-02-07 18:20:09');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `game_alls`
--
ALTER TABLE `game_alls`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `game_mobiles`
--
ALTER TABLE `game_mobiles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `game_p_c_s`
--
ALTER TABLE `game_p_c_s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `purchase_histories`
--
ALTER TABLE `purchase_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `topups`
--
ALTER TABLE `topups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `topup_histories`
--
ALTER TABLE `topup_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `game_alls`
--
ALTER TABLE `game_alls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `game_mobiles`
--
ALTER TABLE `game_mobiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `game_p_c_s`
--
ALTER TABLE `game_p_c_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `purchase_histories`
--
ALTER TABLE `purchase_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `topups`
--
ALTER TABLE `topups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `topup_histories`
--
ALTER TABLE `topup_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
