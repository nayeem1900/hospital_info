-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2024 at 06:19 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hreport`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `branch_name`, `branch_type`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Islami Bank Central Hospital', 'Bank Hospital', 'Kakrial, Dhaka.', '2024-02-16 03:16:45', '2024-02-20 09:06:24'),
(2, 'Islami Bank Hospital Motijheel', 'Bank Hospital', 'Motijheel,Dhaka-1000', '2024-02-16 11:20:03', '2024-02-20 09:06:34'),
(3, 'Islami Bank Community Hospital, Dinajpur', 'Community Hospital', 'Dinajpur', '2024-02-20 09:07:42', '2024-02-20 09:07:42'),
(4, 'Islami Bank Foundation', 'Head Office', 'Purana Paltan,Dhaka', '2024-02-20 23:29:39', '2024-02-20 23:29:39'),
(5, 'Islami Bank Hospital, Mirpur', 'Bank Hospital', 'Mirpur', '2024-02-22 08:49:14', '2024-02-22 08:49:14'),
(6, 'Islami Bank Cardiac Center & Hospital, Mirpur', 'Bank Hospital', 'Mirpur', '2024-02-22 08:50:25', '2024-02-22 08:50:40'),
(7, 'Islami Bank Hospital, Mugdha', 'Bank Hospital', 'Mudha', '2024-02-22 08:51:25', '2024-02-22 08:51:25'),
(8, 'Islami Bank Specialitize Hospital, Nayapaltan', 'Bank Hospital', 'Nayapaltan', '2024-02-22 08:52:02', '2024-02-22 08:52:02'),
(9, 'Islami Bank Hospital, Khulna', 'Bank Hospital', 'Khulna', '2024-02-22 08:52:31', '2024-02-22 08:52:31'),
(10, 'Islami Bank Hospital, Barishal', 'Bank Hospital', 'Barishal', '2024-02-22 08:52:58', '2024-02-22 08:52:58'),
(11, 'Islami Bank Hospital Agrabad', 'Bank Hospital', 'Chottagram', '2024-02-22 08:53:42', '2024-02-22 08:53:42'),
(12, 'Islami Bank Hospital, Luxmipur Rajshahi', 'Bank Hospital', 'Rajshahi, Luxmipur', '2024-02-22 08:54:51', '2024-02-22 08:54:51'),
(13, 'Islami Bank Medical College & Hospital, Rajshahi', 'Bank Hospital', 'Nawdapara, Rajshahi', '2024-02-22 08:55:49', '2024-02-22 08:55:49'),
(14, 'Islami Bank Community Hospital, Jenaidah', 'Community Hospital', 'Jenadiah', '2024-02-22 08:56:45', '2024-02-22 08:56:45'),
(15, 'Islami Bank Community Hospital, Madaripur', 'Community Hospital', 'Madaripur', '2024-02-22 08:57:17', '2024-02-22 08:57:17'),
(16, 'Islami Bank Community Hospital, Manikgong', 'Community Hospital', 'Manikgong', '2024-02-22 08:57:42', '2024-02-22 08:57:42'),
(17, 'Islami Bank Community Hospital, Naogaon', 'Community Hospital', 'Nagaon', '2024-02-22 08:58:05', '2024-02-22 08:58:05'),
(18, 'Islami Bank Community Hospital, Satkhira', 'Community Hospital', 'Satkhira', '2024-02-22 08:58:37', '2024-02-22 08:58:37'),
(19, 'Islami Bank Community Hospital, Faridpur', 'Community Hospital', 'Faridpur', '2024-02-22 08:58:58', '2024-02-22 08:58:58');

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
-- Table structure for table `hospital_entries`
--

CREATE TABLE `hospital_entries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `admit_emergency` int(11) DEFAULT NULL,
  `ward_no` int(11) DEFAULT NULL,
  `ward_occuiped` int(11) DEFAULT NULL,
  `cabin_no` int(11) DEFAULT NULL,
  `cabin_occupied` int(255) DEFAULT NULL,
  `total_bed` int(11) DEFAULT NULL,
  `total_bed_occuiped` int(11) DEFAULT NULL,
  `admited_patient_no` int(11) DEFAULT NULL,
  `released_patient_no` int(11) DEFAULT NULL,
  `emergency_patient` int(11) DEFAULT NULL,
  `consultant_no` int(11) DEFAULT NULL,
  `opd_no` int(11) DEFAULT NULL,
  `physiotherapy_patient` int(11) DEFAULT NULL,
  `dental_patient` int(11) DEFAULT NULL,
  `ctscan_no` int(11) DEFAULT NULL,
  `mri_no` int(11) DEFAULT NULL,
  `imaging_no` int(11) DEFAULT NULL,
  `lab_investigation_no` int(11) DEFAULT NULL,
  `ot_no` int(11) DEFAULT NULL,
  `canteen_sales` int(11) DEFAULT NULL,
  `drug_outdoor_sales` int(11) DEFAULT NULL,
  `drug_indoor_sales` int(11) DEFAULT NULL,
  `total_drug_sales` int(11) DEFAULT NULL,
  `collection_imaging` int(11) DEFAULT NULL,
  `collection_lab` int(11) DEFAULT NULL,
  `collection_hospital` int(11) DEFAULT NULL,
  `estimated_income` int(11) DEFAULT NULL,
  `estimated_expense` int(11) DEFAULT NULL,
  `estimated_netincome` int(11) DEFAULT NULL,
  `entry_date` date NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hospital_entries`
--

INSERT INTO `hospital_entries` (`id`, `user_id`, `admit_emergency`, `ward_no`, `ward_occuiped`, `cabin_no`, `cabin_occupied`, `total_bed`, `total_bed_occuiped`, `admited_patient_no`, `released_patient_no`, `emergency_patient`, `consultant_no`, `opd_no`, `physiotherapy_patient`, `dental_patient`, `ctscan_no`, `mri_no`, `imaging_no`, `lab_investigation_no`, `ot_no`, `canteen_sales`, `drug_outdoor_sales`, `drug_indoor_sales`, `total_drug_sales`, `collection_imaging`, `collection_lab`, `collection_hospital`, `estimated_income`, `estimated_expense`, `estimated_netincome`, `entry_date`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(5, 39, 1, 12, 1, 1, 5, 1, 1, 10, 1, 1, 12, 1, 12, 1, 1, 12, 11, 1, 1, 1, 1, 1, 1, 1, 1, 1, 10, 11, 12, '2024-02-23', 39, NULL, '2024-02-23 02:30:17', '2024-02-23 02:30:17');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(18, '2022_01_09_082448_create_roles_table', 10),
(19, '2022_01_09_083035_create_users_table', 10),
(20, '2022_01_09_083743_create_failed_jobs_table', 10),
(22, '2022_01_09_091510_create_permissions_table', 11),
(23, '2022_01_09_093204_create_logos_table', 12),
(24, '2022_01_09_093650_create_sliders_table', 13),
(28, '2022_01_09_095936_create_etenders_table', 15),
(29, '2022_01_09_100235_create_carriers_table', 16),
(30, '2022_01_09_113233_create_ibchk_deps_table', 17),
(31, '2022_01_09_113448_create_ibchks_table', 18),
(32, '2022_10_10_072856_create_galleries_table', 19),
(33, '2023_03_23_054812_create_jakats_table', 20),
(36, '2024_02_16_091221_create_branches_table', 21),
(38, '2024_02_17_145907_create_hospital_entries_table', 22);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `role_id`, `permission`, `created_at`, `updated_at`) VALUES
(2, 9, '{\"report\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"hospital_info\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"}}', NULL, '2024-02-22 10:31:45'),
(10, 1, '{\"branch\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"report\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"hospital_info\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"permission\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"},\"role\":{\"view\":\"1\"},\"subadmin\":{\"view\":\"1\",\"add\":\"1\",\"edit\":\"1\",\"delete\":\"1\"}}', '2024-02-22 10:32:31', '2024-02-22 10:42:45');

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'user', NULL, NULL),
(9, 'IBH', '2024-02-22 08:47:38', '2024-02-22 08:47:38'),
(10, 'IBCH', '2024-02-22 08:47:51', '2024-02-22 08:47:51'),
(11, 'SubAdmin', '2024-02-22 09:00:59', '2024-02-22 09:00:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_id` int(255) DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT 2,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `branch_id`, `role_id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Harun', 4, 1, 'nayeembd84@gmail.com', NULL, '$2y$10$k1uBpUIL4/Jh5oc.DPrY7epWNu.ewARbIeZhmfcicj3tQhQMnGodm', NULL, NULL, '2023-07-06 11:05:12'),
(39, 'kamrul', 8, 9, 'kamrul@gmail.com', NULL, '$2y$10$MxE3pMdqmJjMx3N0cuUrq.B5SvnoezlFogmNYPJsf/zSSvqp2Jz4G', NULL, '2024-02-22 09:27:29', '2024-02-22 09:27:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital_entries`
--
ALTER TABLE `hospital_entries`
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
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`(191),`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `hospital_entries`
--
ALTER TABLE `hospital_entries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
