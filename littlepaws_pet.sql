-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2022 at 07:16 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `littlepaws_pet`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `fname`, `lname`, `role`, `description`, `email`, `linkedin`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Juan', 'Gutierrez', 'developer', 'Full Stack Developer +3 years of experience. Especially interested in React, Node and Java Spring Boot', 'jgutierrezoa2@gmail.com', 'https://www.linkedin.com/in/-juan-gutierrez/', 'juan.png', '2022-12-14 09:19:04', '2022-12-14 09:19:04'),
(2, 'Sourav', 'Choudhary', 'developer', 'IT Student at Humber College | Java | MERN Stack | HTML | CSS | JavaScript | SQL | Php | Laravel', 'souravchoudhary1998@gmail.com', 'https://www.linkedin.com/in/sourav009', 'sourav.png', '2022-12-14 09:19:04', '2022-12-14 09:19:04'),
(3, 'Rutvik', 'Joshi', 'developer', 'Passionate about quality kitchen and front-end development', 'rutvik@gmail.com', '', 'rutvik.png', '2022-12-14 09:19:04', '2022-12-14 09:19:04'),
(4, 'Jordan', 'Chan', 'developer', 'Curious about Web Programming and SQL databases', 'jordan.14chan@gmail.com', 'https://www.linkedin.com/in/jordan-chan49/', 'jordan.png', '2022-12-14 09:19:04', '2022-12-14 09:19:04');

-- --------------------------------------------------------

--
-- Table structure for table `characteristics`
--

CREATE TABLE `characteristics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pet_id` bigint(20) UNSIGNED NOT NULL,
  `characteristic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `characteristics`
--

INSERT INTO `characteristics` (`id`, `pet_id`, `characteristic`, `created_at`, `updated_at`) VALUES
(1, 1, 'Cute', '2022-12-14 09:24:16', '2022-12-14 09:24:16'),
(2, 1, 'Loyal', '2022-12-14 09:24:16', '2022-12-14 09:24:16'),
(3, 1, 'Friendly', '2022-12-14 09:24:16', '2022-12-14 09:24:16'),
(4, 1, 'Intelligent', '2022-12-14 09:24:16', '2022-12-14 09:24:16'),
(5, 1, 'Affectionate', '2022-12-14 09:24:16', '2022-12-14 09:24:16'),
(6, 2, 'Cute', '2022-12-14 09:25:39', '2022-12-14 09:25:39'),
(7, 2, 'Friendly', '2022-12-14 09:25:39', '2022-12-14 09:25:39'),
(8, 2, 'Playful', '2022-12-14 09:25:39', '2022-12-14 09:25:39'),
(9, 3, 'Cute', '2022-12-14 09:29:04', '2022-12-14 09:29:04'),
(10, 3, 'Loyal', '2022-12-14 09:29:04', '2022-12-14 09:29:04'),
(11, 3, 'Friendly', '2022-12-14 09:29:04', '2022-12-14 09:29:04'),
(12, 3, 'Playful', '2022-12-14 09:29:04', '2022-12-14 09:29:04'),
(17, 4, 'Loyal', '2022-12-14 09:30:16', '2022-12-14 09:30:26'),
(18, 4, 'Friendly', '2022-12-14 09:30:16', '2022-12-14 09:30:26'),
(19, 4, 'Intelligent', '2022-12-14 09:30:16', '2022-12-14 09:30:26'),
(20, 4, 'Affectionate', '2022-12-14 09:30:16', '2022-12-14 09:30:26');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `pet_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favourites`
--

INSERT INTO `favourites` (`id`, `user_id`, `pet_id`, `created_at`, `updated_at`) VALUES
(1, 20, 2, '2022-12-14 04:36:34', '2022-12-14 04:36:34'),
(2, 20, 3, '2022-12-14 05:38:22', '2022-12-14 05:38:22');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Sourav', 'sourav@gmail.com', 'hello', NULL, NULL),
(2, 'sourav', 'sourav@gmail.com', 'Hello how are u?', NULL, NULL),
(3, 'rutvik', 'rutvik.joshi@live.com', 'rr', NULL, NULL),
(4, 'rj', 'rutvik.joshi@live.com', 'jjj', NULL, NULL);

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
(49, '2014_10_12_000000_create_users_table', 1),
(50, '2014_10_12_100000_create_password_resets_table', 1),
(51, '2019_08_19_000000_create_failed_jobs_table', 1),
(52, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(53, '2022_11_15_222148_create_pets_table', 1),
(54, '2022_11_15_222241_create_favourites_table', 1),
(55, '2022_11_15_222257_create_characteristics_table', 1),
(56, '2022_11_15_222325_create_about_table', 1),
(57, '2022_12_10_215441_create_messages_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('sourav@gmail.com', '$2y$10$I5p5OdyM/RbsD/ZmXhjRwO.pMkCoylKuZD29ZU17f79cME1lf9xX.', '2022-12-14 20:56:17');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `pet_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `animal_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coat_length` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pet_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pet_default.png',
  `is_adopted` tinyint(1) NOT NULL DEFAULT 0,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`id`, `user_id`, `pet_name`, `age`, `gender`, `animal_type`, `color`, `coat_length`, `pet_image`, `is_adopted`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Duke', 'Adult', 'Male', 'Dog', 'Golden', 'Long', '1670991856celine-sayuri-tagami-2s6ORaJY6gI-unsplash.jpg', 0, 'Duke is an energetic and friendly dog who was rescued from a neglectful owner in Mexico. That doesn’t stop duke from being an amazing dog now. He is very well behaved indoors and loves to lie next to you while watching TV. He loves to play outside and go to the park.', '2022-12-14 09:24:16', '2022-12-14 09:24:16'),
(2, 1, 'Timmy', 'Adult', 'Male', 'Rabbit', 'White', 'Medium', '1670991939satyabratasm-u_kMWN-BWyU-unsplash.jpg', 0, 'Timmy is a laid back bunny who loves to come to get attention. Timmy has been a good boy and he\'s written his letter to Santa and all he wants is a forever home. He is a volunteer and staff favorite. Timmy came to us as a stray and is now looking for a forever home.', '2022-12-14 09:25:39', '2022-12-14 09:25:39'),
(3, 20, 'Fluffy', 'Young', 'Female', 'Dog', 'White', 'Long', '1670992144peri-stojnic-5Vr_RVPfbMI-unsplash.jpg', 0, 'Fluffy is ready to be your new best friend. This happy pup was rescued from Mexico. We can’t confirm he speaks Spanish, but he definitely likes tacos. Fluffy is a playful dog who loves to socialize with others. He’s a young boy with special needs and is dying to be your snuggle buddy!', '2022-12-14 09:29:04', '2022-12-14 09:29:04'),
(4, 20, 'Milo', 'Young', 'Female', 'Cat', 'Black', 'Medium', '1670992216edgar-nKC772R_qog-unsplash.jpg', 1, 'Originally from Egypt, Milo was abandoned by his family and tossed onto the street. When he was rescued, he was thin, malnourished and quite weak. He was cleaned up and shaved. It took a few months for him to gain his strength and become the fluffball he is today.', '2022-12-14 09:30:16', '2022-12-14 09:30:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user.png',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `is_admin`, `email_verified_at`, `password`, `phone`, `street`, `city`, `province`, `postal_code`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sourav', 'Choudhary', 'sourav@gmail.com', '0', NULL, '$2y$10$gBlieWnRznuU4pt3xH7DJ.njkpzlwqp0eh8x3zoWAfCwHlBwWkbtK', '9056077655', '5100 Erin Mills Pkwy', 'Mississauga', 'Ontario', 'L5M7E1', '1671037806joseph-gonzalez-iFgRcqHznqg-unsplash.jpg', NULL, '2022-12-14 09:19:05', '2022-12-14 23:15:51'),
(2, 'Adolph', 'Brock', 'adolph@gmail.com', '0', NULL, '$2y$10$KUb2he9SBOoYYLVCAlU/2OM4i7dWtgHq04O6Dn0toaRTKad9LTI.q', NULL, NULL, NULL, NULL, NULL, 'user.png', NULL, '2022-12-14 09:19:05', '2022-12-14 09:19:05'),
(3, 'Hunter', 'Banks', 'hunter@gmail.com', '0', NULL, '$2y$10$NiF.LirPVXvJQR.eWuQqbO3WSOzACTgZZumbuFKnhmm79xgo6Dj8.', NULL, NULL, NULL, NULL, NULL, 'user.png', NULL, '2022-12-14 09:19:05', '2022-12-14 09:19:05'),
(4, 'Peter', 'Parker', 'peter@gmail.com', '0', NULL, '$2y$10$QlHo7rYCtsUt7WfdFHM3vuA12MB79mXRvtVk0dBUQxIXbrX4vsvWu', '6043840081', '1436 Portage Rd', 'Pemberton', 'Manitoba', 'V0N2L1', 'user.png', NULL, '2022-12-14 09:19:05', '2022-12-14 22:12:12'),
(5, 'Colton', 'Chung', 'colton@gmail.com', '0', NULL, '$2y$10$SmHQSMF29rGaKoBBbwunIuGv2vefi/Jx283tTQTeuu/i46.CFiJg.', '4033620147', '101 1 Ave E', 'Brooks', 'Alberta', 'T1R0G9', 'user.png', NULL, '2022-12-14 09:19:05', '2022-12-14 09:32:48'),
(6, 'Susie', 'Barajas', 'susie@gmail.com', '0', NULL, '$2y$10$BoT7.9MQHfvQOIn44RD62.OgmH2vZIaB/7mG6AvjWQc3IZX0xf8m2', NULL, NULL, NULL, NULL, NULL, 'user.png', NULL, '2022-12-14 09:19:05', '2022-12-14 09:19:05'),
(7, 'Matilda', 'Garcia', 'maltida@gmail.com', '0', NULL, '$2y$10$n3.F.E8Ve5n3QbU692peYe8u1j849/Dc/Cij4dWL1yfrQ/qgc68LK', '9059539025', '20 Davis Dr', 'Newmarket', 'Ontario', 'L3Y2M7', 'user.png', NULL, '2022-12-14 09:19:05', '2022-12-14 09:34:23'),
(8, 'Tony', 'Stark', 'tony@gmail.com', '0', NULL, '$2y$10$9ZbLvpea4IoG5Fb4oAYQzeTGhaJYDPdC8v27.OANYo1FxRIyGS3R2', NULL, NULL, NULL, NULL, NULL, 'user.png', NULL, '2022-12-14 09:19:05', '2022-12-14 09:19:05'),
(9, 'John', 'Brook', 'john@gmail.com', '0', NULL, '$2y$10$RZVbw1bOXxxg9.D1mCdLH.oTv3waWeQwcrmf2Nhw2uMZX/woJE5pW', NULL, NULL, NULL, NULL, NULL, 'user.png', NULL, '2022-12-14 09:19:05', '2022-12-14 09:19:05'),
(10, 'Tania', 'Pearson', 'tania@gmail.com', '0', NULL, '$2y$10$.4rAlkVXJYo4IaMk4if79udfR0h4lCU1QfpZk7dzOVgxMASjuMlwu', NULL, NULL, NULL, NULL, NULL, 'user.png', NULL, '2022-12-14 09:19:05', '2022-12-14 09:19:05'),
(11, 'Hank', 'Snow', 'hank@gmail.com', '0', NULL, '$2y$10$wDKwmPpTY7oH78T/2kWn8OnFcps.DxIdGqnho/AX5HqCgw2edEHra', NULL, NULL, NULL, NULL, NULL, 'user.png', NULL, '2022-12-14 09:19:05', '2022-12-14 09:19:05'),
(12, 'Andrew', 'Swanson', 'andrew@gmail.com', '0', NULL, '$2y$10$6rCR6HKGOzUVcL0t1rPM2ewFnCf0ZWPawVssxPu7nh93t2yN0utt6', NULL, NULL, NULL, NULL, NULL, 'user.png', NULL, '2022-12-14 09:19:05', '2022-12-14 09:19:05'),
(13, 'Chasity', 'York', 'chasity@gmail.com', '0', NULL, '$2y$10$nMKi38ORhfeQn7SToCp7Se4u/7PwHB2m0NIuna4JrbpZLRB5shoD6', NULL, NULL, NULL, NULL, NULL, 'user.png', NULL, '2022-12-14 09:19:05', '2022-12-14 09:19:05'),
(14, 'Tyron', 'Kelley', 'tyron@gmail.com', '0', NULL, '$2y$10$kUWWxOpydesjg1INAaR4Cu2BoEKoULmWmuIaFGyKWLcRpGdmasb2W', NULL, NULL, NULL, NULL, NULL, 'user.png', NULL, '2022-12-14 09:19:05', '2022-12-14 09:19:05'),
(15, 'Nickolas', 'Park', 'nickolas@gmail.com', '0', NULL, '$2y$10$xg.eTRw7edo.FfSSJRWEGexo5lfjo9dQXkyuWmMPPyd.RJ12j66DW', NULL, NULL, NULL, NULL, NULL, 'user.png', NULL, '2022-12-14 09:19:05', '2022-12-14 09:19:05'),
(16, 'Foster', 'Griffin', 'foster@gmail.com', '0', NULL, '$2y$10$1uVQhBs7uz2ozSLohem4CuLsaaHOf/5RajtiAn2KXjBrlF2Z2blfi', NULL, NULL, NULL, NULL, NULL, 'user.png', NULL, '2022-12-14 09:19:05', '2022-12-14 09:19:05'),
(17, 'Hal', 'Woods', 'hal@gmail.com', '0', NULL, '$2y$10$I65/IZMWra2bXznwWjEuNuuo05/g6fr.JCVSeLoleQlauJ8PhwXJC', NULL, NULL, NULL, NULL, NULL, 'user.png', NULL, '2022-12-14 09:19:05', '2022-12-14 09:19:05'),
(18, 'Kent', 'Frost', 'kent@gmail.com', '0', NULL, '$2y$10$KJBfKezQmDXHMRanlQELGuBoDOqZZ.DZXjlwdbiFSJ8.9V0t78J3m', NULL, NULL, NULL, NULL, NULL, 'user.png', NULL, '2022-12-14 09:19:05', '2022-12-14 09:19:05'),
(19, 'Joanna', 'King', 'joanna@gmail.com', '0', NULL, '$2y$10$yTBbN/1gA2KSRJqtI1Bn2.8Pm.x/Fx514J8wWQsggftVY6XfMQnku', NULL, NULL, NULL, NULL, NULL, 'user.png', NULL, '2022-12-14 09:19:05', '2022-12-14 09:19:05'),
(20, 'David', 'Miller', 'david@gmail.com', '1', NULL, '$2y$10$u5jpAbDok.lrG0uBrGLg3.mvlLzI/lf4LI/6RbKK7eTp4zX4Zd0wu', '7804546627', '13629 St Albert Trail', 'Edmonton', 'Alberta', 'T5L5E7', '1670992055ali-morshedlou-WMD64tMfc4k-unsplash.jpg', NULL, '2022-12-14 09:19:05', '2022-12-14 09:27:35'),
(21, 'Juan', 'Gito', 'jgutierrezoe1@gmail.com', '0', NULL, '$2y$10$QHmJKjU188yhVkUO/jSQ/.RApWAMTJn2TO6yAmaMpP7x9rcicrhmO', NULL, NULL, NULL, NULL, NULL, 'user.png', NULL, '2022-12-14 22:00:40', '2022-12-14 22:00:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `characteristics`
--
ALTER TABLE `characteristics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `characteristics_pet_id_foreign` (`pet_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favourites_user_id_foreign` (`user_id`),
  ADD KEY `favourites_pet_id_foreign` (`pet_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pets_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `characteristics`
--
ALTER TABLE `characteristics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `characteristics`
--
ALTER TABLE `characteristics`
  ADD CONSTRAINT `characteristics_pet_id_foreign` FOREIGN KEY (`pet_id`) REFERENCES `pets` (`id`);

--
-- Constraints for table `favourites`
--
ALTER TABLE `favourites`
  ADD CONSTRAINT `favourites_pet_id_foreign` FOREIGN KEY (`pet_id`) REFERENCES `pets` (`id`),
  ADD CONSTRAINT `favourites_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `pets`
--
ALTER TABLE `pets`
  ADD CONSTRAINT `pets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
