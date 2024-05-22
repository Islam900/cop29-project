-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 17 May 2024, 14:56:37
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `cop29`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dsngs`
--

CREATE TABLE `dsngs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `period` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `zone` varchar(255) NOT NULL,
  `vehicle_mounted` varchar(255) NOT NULL,
  `vehicle_make` varchar(255) NOT NULL,
  `vehicle_model` varchar(255) NOT NULL,
  `vehicle_registration_number` varchar(255) NOT NULL,
  `studio_name` varchar(255) NOT NULL,
  `studio_city` varchar(255) NOT NULL,
  `satellite_network` varchar(255) NOT NULL,
  `satellite_orbital_position` varchar(255) NOT NULL,
  `coder_equipment_manufacturer` varchar(255) NOT NULL,
  `coder_equipment_model` varchar(255) NOT NULL,
  `antenna_manufacturer` varchar(255) NOT NULL,
  `antenna_model` varchar(255) NOT NULL,
  `antenna_gain` varchar(255) NOT NULL,
  `antenna_freq_range_start` varchar(255) NOT NULL,
  `antenna_freq_range_end` varchar(255) NOT NULL,
  `coder_freq_min` varchar(255) NOT NULL,
  `coder_freq_max` varchar(255) NOT NULL,
  `customs_clearance` varchar(255) NOT NULL,
  `comments` text DEFAULT NULL,
  `data_sheet` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `dsngs`
--

INSERT INTO `dsngs` (`id`, `user_id`, `period`, `start_date`, `end_date`, `zone`, `vehicle_mounted`, `vehicle_make`, `vehicle_model`, `vehicle_registration_number`, `studio_name`, `studio_city`, `satellite_network`, `satellite_orbital_position`, `coder_equipment_manufacturer`, `coder_equipment_model`, `antenna_manufacturer`, `antenna_model`, `antenna_gain`, `antenna_freq_range_start`, `antenna_freq_range_end`, `coder_freq_min`, `coder_freq_max`, `customs_clearance`, `comments`, `data_sheet`, `created_at`, `updated_at`) VALUES
(3, 9, '79', '1974-04-07', '1980-04-03', 'Blue zone', 'Perferendis exercitationem Nam ipsam ut', 'Accusantium aut occaecat aut dolorem fuga Facilis', 'Voluptatem Laborum sunt nulla facere', '675', 'Burke Weiss', 'Quos error sequi qui odio quia duis voluptatem duc', 'Garth Mosley', 'Est aut voluptate facilis aut', 'Iste est libero laboriosam sint autem voluptatem', 'Dolorum dolores nihil nihil nihil delectus dolore', 'Incidunt aut reiciendis ad voluptatem aut sit', 'Pariatur Quaerat est molestias id excepturi qui', '60', '40', '31', '68', '17', 'Yes', 'Ut voluptatem Conse', '1715947675_1715085920din.pdf', '2024-05-17 08:07:55', '2024-05-17 08:07:55');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_05_17_051944_create_operationals_table', 1),
(7, '2024_05_17_054258_create_dsngs_table', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `operationals`
--

CREATE TABLE `operationals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `service_type` varchar(255) NOT NULL,
  `period` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `zone` varchar(255) NOT NULL,
  `in_out_use` varchar(255) NOT NULL,
  `manufacturer` varchar(255) NOT NULL,
  `hand_model` varchar(255) NOT NULL,
  `hand_units` varchar(255) NOT NULL,
  `belt_pack_model` varchar(255) NOT NULL,
  `belt_pack_units` varchar(255) NOT NULL,
  `power_output` varchar(255) NOT NULL,
  `antenna_height` varchar(255) NOT NULL,
  `antenna_gain` varchar(255) NOT NULL,
  `frequency_range_start` varchar(255) NOT NULL,
  `frequency_range_end` varchar(255) NOT NULL,
  `tuning_step` varchar(255) NOT NULL,
  `bandwidth` varchar(255) NOT NULL,
  `customs_clearance` varchar(255) NOT NULL,
  `comments` text DEFAULT NULL,
  `data_sheet` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `operationals`
--

INSERT INTO `operationals` (`id`, `user_id`, `service_type`, `period`, `start_date`, `end_date`, `zone`, `in_out_use`, `manufacturer`, `hand_model`, `hand_units`, `belt_pack_model`, `belt_pack_units`, `power_output`, `antenna_height`, `antenna_gain`, `frequency_range_start`, `frequency_range_end`, `tuning_step`, `bandwidth`, `customs_clearance`, `comments`, `data_sheet`, `created_at`, `updated_at`) VALUES
(2, 9, 'Photographer Wireless Remote', '60', '2011-08-27', '2017-08-05', 'All locations', 'All locations', 'Vero consequatur aliqua Exercitation incidunt co', 'Voluptatem ipsam tempora asperiores rerum quis el', '447', 'Veritatis numquam officia est natus atque tempori', '696', '3', '25', '78', '76', '85', '7', '8', 'on', NULL, '1715947657_1715085920din.pdf', '2024-05-17 08:07:37', '2024-05-17 08:07:37');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `passport_number` varchar(50) DEFAULT NULL,
  `company_name` varchar(50) NOT NULL,
  `job_title` varchar(50) NOT NULL,
  `mobile_number` varchar(50) NOT NULL,
  `represent` varchar(255) DEFAULT NULL,
  `email_address` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `activity_status` int(11) NOT NULL DEFAULT 1,
  `confirmed_status` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `full_name`, `passport_number`, `company_name`, `job_title`, `mobile_number`, `represent`, `email_address`, `email_verified_at`, `password`, `type`, `activity_status`, `confirmed_status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Cavid', NULL, 'ICTA', 'Programmer', '+994 50 822 13 00', NULL, 'admin@example.com', NULL, '$2y$10$g.Ht1XgabMqLFCJNsusz3OvxF5YQu5a11Ho9R0bMEv6QevTHtb732', 'admin', 1, 1, NULL, '2024-05-17 07:53:29', '2024-05-17 07:53:29'),
(2, 'Catherine Erickson', '809', 'Frazier and Daugherty Co', 'Est laborum Dolor ut velit hic ut aut quia nobis', '308', 'Other', 'vupaviz@mailinator.com', NULL, '$2y$10$/YkbtNwUbkPa3ac8irjclu4f.jBpsWx2/ZB8vL.QnPjjBKvI6I9ai', 'user', 1, 0, NULL, '2024-05-17 07:55:03', '2024-05-17 07:55:03'),
(3, 'Fletcher Andrews', '176', 'Manning and Dennis Inc', 'Veniam numquam debitis quae tenetur corporis even', '503', 'Other', 'jyfi@mailinator.com', NULL, '$2y$10$gY4DkjCo9P1aRTXobXITIuY5XbNzmFu5YmHBCO6eJl8AV6ifLcb9a', 'user', 1, 0, NULL, '2024-05-17 07:56:29', '2024-05-17 07:56:29'),
(4, 'Phillip Hines', '989', 'Copeland Romero Trading', 'Quidem ab omnis ad laudantium voluptatem tempora', '14', 'test content', 'newevemuq@mailinator.com', NULL, '$2y$10$9Mab3A5V/y/CQpxxBDWpw.llaGDNzDFqug0QcDfQU8mfoLesGMN/m', 'user', 1, 0, NULL, '2024-05-17 07:57:28', '2024-05-17 07:57:28'),
(5, 'Ahmed Mcmillan', '24', 'Brooks and Gonzales Plc', 'Praesentium qui explicabo Molestiae dolore lorem', '445', 'Individual', 'vykoza@mailinator.com', NULL, '$2y$10$54Fclc9aHR92Km1JUKvBAeZPN4nw/M4scRirDas62OWYT2N3u58Ie', 'user', 1, 0, NULL, '2024-05-17 07:57:58', '2024-05-17 07:57:58'),
(6, 'Holmes Tillman', '828', 'Wood and Barber Trading', 'Aperiam delectus et est facere voluptates volupta', '413', 'test content', 'bagarim@mailinator.com', NULL, '$2y$10$/FTcuWyfwoLpsV0uGQC7UOXtaxRSSw3/Ftz/6oy8bsu8mk1G2m8wW', 'user', 1, 0, NULL, '2024-05-17 07:58:15', '2024-05-17 07:58:15'),
(7, 'Audrey Harris', '539', 'Strong and Garza LLC', 'Aut ut iure sunt ipsa culpa rerum alias beatae sa', '474', 'test content', 'nyjyl@mailinator.com', NULL, '$2y$10$9ksa0TLnaheox3uWFEFxL.FZWPJztBG1oyewXUKcFAP7Cacp0zwBC', 'user', 1, 0, NULL, '2024-05-17 07:58:28', '2024-05-17 07:58:28'),
(9, 'Esqin Memmedli', '156165615', 'HC accessories', 'Programmer', '0508221300', 'test content', 'chaparoglucavid@gmail.com', NULL, '$2y$10$Cv4iMTuLJ6CCncnvzmt.E.WQkvALEbktvF98oHZupDMEG7cqXNEdS', 'user', 1, 1, NULL, '2024-05-17 08:04:10', '2024-05-17 08:06:28');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `dsngs`
--
ALTER TABLE `dsngs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dsngs_user_id_foreign` (`user_id`);

--
-- Tablo için indeksler `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `operationals`
--
ALTER TABLE `operationals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `operationals_user_id_foreign` (`user_id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Tablo için indeksler `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Tablo için indeksler `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_address_unique` (`email_address`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `dsngs`
--
ALTER TABLE `dsngs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `operationals`
--
ALTER TABLE `operationals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `dsngs`
--
ALTER TABLE `dsngs`
  ADD CONSTRAINT `dsngs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `operationals`
--
ALTER TABLE `operationals`
  ADD CONSTRAINT `operationals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
