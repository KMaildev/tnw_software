-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 16, 2022 at 09:16 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tnw_software`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `log_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `causer_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`properties`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `subject_id`, `causer_type`, `causer_id`, `properties`, `created_at`, `updated_at`) VALUES
(1, 'interest_rates_log', 'created', 'App\\Models\\InterestRate', 6, 'App\\User', 1, '{\"attributes\":{\"title\":\"90%\",\"created_at\":\"2022-06-16T11:00:10.000000Z\",\"updated_at\":\"2022-06-16T11:00:10.000000Z\"}}', '2022-06-16 04:30:10', '2022-06-16 04:30:10'),
(2, 'marketing_teams_log', 'created', 'App\\Models\\MarketingTeam', 3, 'App\\User', 1, '{\"attributes\":{\"marketing_date\":\"2022-06-16\",\"ward_no\":\"10\",\"road\":\"1000\",\"wide\":\"10\",\"permission\":\"No\",\"type\":\"RentOwner\",\"price\":\"50000\",\"owner_or_agent_type\":\"Owner\",\"name\":\"U Mg Mg\",\"phone_no\":\"091231231\",\"code\":\"M-00002\",\"remark\":\"No Remark\",\"interest_rate\":\"30%\",\"user_id\":1,\"created_at\":\"2022-06-16T16:19:02.000000Z\",\"updated_at\":\"2022-06-16T16:19:02.000000Z\"}}', '2022-06-16 09:49:03', '2022-06-16 09:49:03'),
(3, 'marketing_teams_log', 'created', 'App\\Models\\MarketingTeam', 4, 'App\\User', 1, '{\"attributes\":{\"marketing_date\":\"2022-06-16\",\"ward_no\":\"No\",\"road\":\"No\",\"wide\":\"No\",\"permission\":\"No\",\"type\":\"SaleOwner\",\"price\":\"5000\",\"owner_or_agent_type\":\"Owner\",\"name\":\"mgmg\",\"phone_no\":\"09444161554, 09222343392\",\"code\":\"M-00003\",\"remark\":\"Ok\",\"interest_rate\":\"30%\",\"user_id\":1,\"created_at\":\"2022-06-16T16:31:04.000000Z\",\"updated_at\":\"2022-06-16T16:31:04.000000Z\"}}', '2022-06-16 10:01:04', '2022-06-16 10:01:04'),
(4, 'marketing_teams_log', 'created', 'App\\Models\\MarketingTeam', 1, 'App\\User', 1, '{\"attributes\":{\"marketing_date\":\"2022-06-16\",\"ward_no\":\"001\",\"road\":\"10\",\"wide\":\"20\",\"permission\":null,\"type\":\"SaleOwner\",\"price\":\"1000\",\"owner_or_agent_type\":\"Owner\",\"name\":\"Mg Mg\",\"phone_no\":\"09444151443, 0987656765\",\"code\":\"Mg Mg\",\"remark\":\"No\",\"interest_rate\":\"90%\",\"user_id\":1,\"created_at\":\"2022-06-16T17:28:32.000000Z\",\"updated_at\":\"2022-06-16T17:28:32.000000Z\"}}', '2022-06-16 10:58:32', '2022-06-16 10:58:32'),
(5, 'marketing_teams_log', 'created', 'App\\Models\\MarketingTeam', 2, 'App\\User', 1, '{\"attributes\":{\"marketing_date\":\"2022-06-16\",\"ward_no\":\"10\",\"road\":\"20\",\"wide\":\"10\",\"permission\":\"10\",\"type\":\"BuyOffer\",\"price\":\"1000\",\"owner_or_agent_type\":\"Agent\",\"name\":\"U Myo\",\"phone_no\":\"09444161554, 09888736554\",\"code\":\"M-00001\",\"remark\":null,\"interest_rate\":\"50%\",\"user_id\":1,\"created_at\":\"2022-06-16T17:32:02.000000Z\",\"updated_at\":\"2022-06-16T17:32:02.000000Z\"}}', '2022-06-16 11:02:02', '2022-06-16 11:02:02'),
(6, 'appointments_log', 'created', 'App\\Models\\Appointment', 2, 'App\\User', 1, '{\"attributes\":{\"appointment_date_time\":\"2022-06-16\",\"appointment_person\":\"U Myo\",\"appointment_location\":\"Myo Myo\",\"appointment_remark\":\"No\",\"user_id\":1,\"marketing_team_id\":2,\"created_at\":\"2022-06-16T17:32:02.000000Z\",\"updated_at\":\"2022-06-16T17:32:02.000000Z\"}}', '2022-06-16 11:02:02', '2022-06-16 11:02:02'),
(7, 'marketing_teams_log', 'created', 'App\\Models\\MarketingTeam', 3, 'App\\User', 1, '{\"attributes\":{\"marketing_date\":\"2022-06-17\",\"ward_no\":\"asdf\",\"road\":\"asdf\",\"wide\":\"asdf\",\"permission\":\"asdf\",\"type\":\"SaleOwner\",\"price\":\"5000\",\"owner_or_agent_type\":\"Owner\",\"name\":\"asdf\",\"phone_no\":\"09444171665\",\"code\":\"asdf\",\"remark\":\"asdfasd\",\"interest_rate\":\"30%\",\"user_id\":1,\"created_at\":\"2022-06-16T17:52:23.000000Z\",\"updated_at\":\"2022-06-16T17:52:23.000000Z\"}}', '2022-06-16 11:22:23', '2022-06-16 11:22:23'),
(8, 'follow_ups_log', 'created', 'App\\Models\\FollowUp', 2, 'App\\User', 1, '{\"attributes\":{\"date_time\":\"asdf\",\"follow_up_type\":\"Call,Email\",\"follow_up_remark\":\"asdf\",\"additional_note\":\"adsf\",\"user_id\":1,\"marketing_team_id\":3,\"created_at\":\"2022-06-16T17:52:23.000000Z\",\"updated_at\":\"2022-06-16T17:52:23.000000Z\"}}', '2022-06-16 11:22:23', '2022-06-16 11:22:23'),
(9, 'appointments_log', 'created', 'App\\Models\\Appointment', 3, 'App\\User', 1, '{\"attributes\":{\"appointment_date_time\":\"adsf\",\"appointment_person\":\"asdf\",\"appointment_location\":\"adsfa\",\"appointment_remark\":\"sdf\",\"user_id\":1,\"marketing_team_id\":3,\"created_at\":\"2022-06-16T17:52:23.000000Z\",\"updated_at\":\"2022-06-16T17:52:23.000000Z\"}}', '2022-06-16 11:22:23', '2022-06-16 11:22:23'),
(10, 'marketing_teams_log', 'created', 'App\\Models\\MarketingTeam', 4, 'App\\User', 1, '{\"attributes\":{\"marketing_date\":\"2022-06-17\",\"ward_no\":\"asdf\",\"road\":\"asdf\",\"wide\":\"asdfasd\",\"permission\":\"asdf\",\"type\":\"SaleOwner\",\"price\":\"1000\",\"owner_or_agent_type\":\"Owner\",\"name\":\"Mg Mg\",\"phone_no\":\"1341234234\",\"code\":\"asdfasd\",\"remark\":\"asdfasd\",\"interest_rate\":\"90%\",\"user_id\":1,\"created_at\":\"2022-06-16T17:54:19.000000Z\",\"updated_at\":\"2022-06-16T17:54:19.000000Z\"}}', '2022-06-16 11:24:19', '2022-06-16 11:24:19'),
(11, 'follow_ups_log', 'created', 'App\\Models\\FollowUp', 3, 'App\\User', 1, '{\"attributes\":{\"date_time\":\"2022-06-17 12:00 AM\",\"follow_up_type\":\"Call,Email\",\"follow_up_remark\":\"asdf\",\"additional_note\":\"adsf\",\"user_id\":1,\"marketing_team_id\":4,\"created_at\":\"2022-06-16T17:54:19.000000Z\",\"updated_at\":\"2022-06-16T17:54:19.000000Z\"}}', '2022-06-16 11:24:19', '2022-06-16 11:24:19'),
(12, 'appointments_log', 'created', 'App\\Models\\Appointment', 4, 'App\\User', 1, '{\"attributes\":{\"appointment_date_time\":\"2022-06-17 12:00 AM\",\"appointment_person\":null,\"appointment_location\":\"asdf\",\"appointment_remark\":\"asdf\",\"user_id\":1,\"marketing_team_id\":4,\"created_at\":\"2022-06-16T17:54:19.000000Z\",\"updated_at\":\"2022-06-16T17:54:19.000000Z\"}}', '2022-06-16 11:24:19', '2022-06-16 11:24:19'),
(13, 'marketing_teams_log', 'created', 'App\\Models\\MarketingTeam', 5, 'App\\User', 1, '{\"attributes\":{\"marketing_date\":\"2022-06-17\",\"ward_no\":\"asdf\",\"road\":\"asdf\",\"wide\":\"asdf\",\"permission\":\"asdf\",\"type\":\"SaleOwner\",\"price\":\"1234124\",\"owner_or_agent_type\":\"Owner\",\"name\":\"asdfas\",\"phone_no\":\"143242\",\"code\":\"asdfasdfa\",\"remark\":null,\"interest_rate\":\"30%\",\"user_id\":1,\"created_at\":\"2022-06-16T18:05:21.000000Z\",\"updated_at\":\"2022-06-16T18:05:21.000000Z\"}}', '2022-06-16 11:35:21', '2022-06-16 11:35:21'),
(14, 'follow_ups_log', 'created', 'App\\Models\\FollowUp', 1, 'App\\User', 1, '{\"attributes\":{\"date_time\":\"2022-06-17 12:00 AM\",\"follow_up_type\":\"Call,Email\",\"follow_up_remark\":null,\"additional_note\":null,\"user_id\":1,\"marketing_team_id\":5,\"created_at\":\"2022-06-16T18:05:21.000000Z\",\"updated_at\":\"2022-06-16T18:05:21.000000Z\"}}', '2022-06-16 11:35:21', '2022-06-16 11:35:21'),
(15, 'marketing_teams_log', 'created', 'App\\Models\\MarketingTeam', 6, 'App\\User', 1, '{\"attributes\":{\"marketing_date\":\"2022-06-17\",\"ward_no\":\"asdf\",\"road\":\"Mg\",\"wide\":\"asdf\",\"permission\":\"asdf\",\"type\":\"SaleOwner\",\"price\":\"5000\",\"owner_or_agent_type\":\"Owner\",\"name\":\"Mg Mg\",\"phone_no\":\"09222392887\",\"code\":\"asdfasdfasd\",\"remark\":null,\"interest_rate\":\"90%\",\"user_id\":1,\"created_at\":\"2022-06-16T18:06:20.000000Z\",\"updated_at\":\"2022-06-16T18:06:20.000000Z\"}}', '2022-06-16 11:36:20', '2022-06-16 11:36:20'),
(16, 'follow_ups_log', 'created', 'App\\Models\\FollowUp', 2, 'App\\User', 1, '{\"attributes\":{\"date_time\":\"2022-06-17 12:00 AM\",\"follow_up_type\":\"Call,Email\",\"follow_up_remark\":\"asdfasd\",\"additional_note\":\"asdfasdf\",\"user_id\":1,\"marketing_team_id\":6,\"created_at\":\"2022-06-16T18:06:20.000000Z\",\"updated_at\":\"2022-06-16T18:06:20.000000Z\"}}', '2022-06-16 11:36:20', '2022-06-16 11:36:20'),
(17, 'appointments_log', 'created', 'App\\Models\\Appointment', 1, 'App\\User', 1, '{\"attributes\":{\"appointment_date_time\":\"2022-06-17 12:00 AM\",\"appointment_person\":\"asdf\",\"appointment_location\":\"asdf\",\"appointment_remark\":\"asdf\",\"user_id\":1,\"marketing_team_id\":6,\"created_at\":\"2022-06-16T18:06:20.000000Z\",\"updated_at\":\"2022-06-16T18:06:20.000000Z\"}}', '2022-06-16 11:36:20', '2022-06-16 11:36:20');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(10) UNSIGNED NOT NULL,
  `appointment_date_time` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appointment_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appointment_person` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appointment_location` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appointment_remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `marketing_team_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `appointment_date_time`, `appointment_date`, `appointment_person`, `appointment_location`, `appointment_remark`, `user_id`, `marketing_team_id`, `created_at`, `updated_at`) VALUES
(1, '2022-06-17 12:00 AM', '2022-06-17', 'asdf', 'asdf', 'asdf', 1, 6, '2022-06-16 11:36:20', '2022-06-16 11:36:20');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Marketing', '2022-06-15 10:25:37', '2022-06-15 10:27:56'),
(2, 'Accounting', '2022-06-15 10:25:42', '2022-06-15 10:25:42');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `follow_ups`
--

CREATE TABLE `follow_ups` (
  `id` int(10) UNSIGNED NOT NULL,
  `date_time` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `follow_up_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `follow_up_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `follow_up_remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additional_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `marketing_team_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `follow_ups`
--

INSERT INTO `follow_ups` (`id`, `date_time`, `follow_up_date`, `follow_up_type`, `follow_up_remark`, `additional_note`, `user_id`, `marketing_team_id`, `created_at`, `updated_at`) VALUES
(1, '2022-06-17 12:00 AM', '2022-06-17', 'Call,Email', NULL, NULL, 1, 5, '2022-06-16 11:35:21', '2022-06-16 11:35:21'),
(2, '2022-06-17 12:00 AM', '2022-06-17', 'Call,Email', 'asdfasd', 'asdfasdf', 1, 6, '2022-06-16 11:36:20', '2022-06-16 11:36:20');

-- --------------------------------------------------------

--
-- Table structure for table `interest_rates`
--

CREATE TABLE `interest_rates` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interest_rates`
--

INSERT INTO `interest_rates` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, '0%', '2022-06-16 04:14:48', '2022-06-16 04:20:39'),
(2, '30%', '2022-06-16 04:15:02', '2022-06-16 04:15:02'),
(3, '50%', '2022-06-16 04:15:06', '2022-06-16 04:15:06'),
(4, '70%', '2022-06-16 04:15:12', '2022-06-16 04:15:12'),
(6, '90%', '2022-06-16 04:30:10', '2022-06-16 04:30:10');

-- --------------------------------------------------------

--
-- Table structure for table `marketing_teams`
--

CREATE TABLE `marketing_teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `marketing_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ward_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `road` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wide` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permission` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner_or_agent_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interest_rate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marketing_teams`
--

INSERT INTO `marketing_teams` (`id`, `marketing_date`, `ward_no`, `road`, `wide`, `permission`, `type`, `price`, `owner_or_agent_type`, `name`, `phone_no`, `email`, `code`, `remark`, `interest_rate`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2022-06-16', '001', '10', '20', NULL, 'SaleOwner', '1000', 'Owner', 'Mg Mg', '09444151443, 0987656765', NULL, 'Mg Mg', 'No', '90%', 1, '2022-06-16 10:58:32', '2022-06-16 10:58:32'),
(2, '2022-06-16', '10', '20', '10', '10', 'BuyOffer', '1000', 'Agent', 'U Myo', '09444161554, 09888736554', NULL, 'M-00001', NULL, '50%', 1, '2022-06-16 11:02:02', '2022-06-16 11:02:02'),
(3, '2022-06-17', 'asdf', 'asdf', 'asdf', 'asdf', 'SaleOwner', '5000', 'Owner', 'asdf', '09444171665', 'asdf', 'asdf', 'asdfasd', '30%', 1, '2022-06-16 11:22:23', '2022-06-16 11:22:23'),
(4, '2022-06-17', 'asdf', 'asdf', 'asdfasd', 'asdf', 'SaleOwner', '1000', 'Owner', 'Mg Mg', '1341234234', NULL, 'asdfasd', 'asdfasd', '90%', 1, '2022-06-16 11:24:19', '2022-06-16 11:24:19'),
(5, '2022-06-17', 'asdf', 'asdf', 'asdf', 'asdf', 'SaleOwner', '1234124', 'Owner', 'asdfas', '143242', NULL, 'asdfasdfa', NULL, '30%', 1, '2022-06-16 11:35:21', '2022-06-16 11:35:21'),
(6, '2022-06-17', 'asdf', 'Mg', 'asdf', 'asdf', 'SaleOwner', '5000', 'Owner', 'Mg Mg', '09222392887', NULL, 'asdfasdfasd', NULL, '90%', 1, '2022-06-16 11:36:20', '2022-06-16 11:36:20');

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
(4, '2022_05_25_172942_add_users_fields_to_users_table', 2),
(5, '2022_06_15_153609_create_departments_table', 3),
(6, '2022_06_15_170823_create_permission_tables', 4),
(7, '2022_06_16_103335_create_interest_rates_table', 5),
(8, '2022_06_16_105818_create_activity_log_table', 6),
(11, '2022_06_16_110109_create_marketing_teams_table', 7),
(14, '2022_06_16_171958_create_follow_ups_table', 8),
(15, '2022_06_16_172255_create_appointments_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(4, 'App\\User', 1),
(4, 'App\\User', 10),
(5, 'App\\User', 1),
(5, 'App\\User', 6),
(5, 'App\\User', 10);

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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'hr_module', 'web', '2022-06-15 10:47:06', '2022-06-15 11:34:19'),
(2, 'file_manager_module', 'web', '2022-06-15 10:47:33', '2022-06-15 10:47:33'),
(3, 'setting', 'web', '2022-06-15 11:33:17', '2022-06-15 11:33:17');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(4, 'Admin', 'web', '2022-06-15 11:06:13', '2022-06-15 11:06:13'),
(5, 'HR', 'web', '2022-06-15 11:06:17', '2022-06-15 11:06:17'),
(6, 'Manager', 'web', '2022-06-15 11:22:09', '2022-06-15 11:22:09');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 4),
(1, 5),
(1, 6),
(2, 4),
(2, 6);

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `employee_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrc_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `contact_person` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_contact` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `join_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employment_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `employee_id`, `phone`, `nrc_number`, `gender`, `address`, `department_id`, `contact_person`, `emergency_contact`, `join_date`, `employment_type`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$ACc0APOsRpxoHUWicc4Tc.59kRN1ttfhvoDhnuYbS4Z2GagiP0yHq', NULL, '2022-05-25 07:46:08', '2022-06-16 05:00:20', 'EMP-0001', '09333161998', '5/abc(n)009112', 'male', 'Yangon', 1, NULL, NULL, '1/1/2022', 'Probation'),
(6, 'User', 'user@gmail.com', NULL, '$2y$10$ChD8p1aISNq9Usr2znknH.rsdrsZAVehmnHYJG4dmo7JH4AT0tKmm', NULL, '2022-06-15 08:52:12', '2022-06-15 21:58:48', 'EMP-00002', '09123123123', '5/abc(123)009443', 'male', 'Yangon', 2, NULL, '09123123', '1/1/2022', 'Probation'),
(7, 'User', 'mgmg@gmail.com', NULL, '$2y$10$IA2hM5nLx85PMKKNJi/L0.IPlWfSZeliUB.iZJtT9FM.g2vh1pNs.', NULL, '2022-06-15 11:58:01', '2022-06-15 11:58:01', 'EMP-00003', '09123123124', '5/', 'male', 'YGN', 2, NULL, NULL, NULL, 'Probation'),
(8, 'User', 'mgmgg@gmail.com', NULL, '$2y$10$bi4JsdrFxpGlmvuI1oOHqe2oCHjDXcOjBWXIAh2zOXjWCGFHpOYFC', NULL, '2022-06-15 11:59:01', '2022-06-15 11:59:01', 'EMP-00004', '09123123125', '5/', 'male', 'YGN', 2, NULL, NULL, NULL, 'Probation'),
(9, 'User', 'mgmggsoe@gmail.com', NULL, '$2y$10$Qxw/77i7t3KEGhw2FzcbQu/JPT5/dm5jrGAXLvFgV2FZzyHfx2OgS', NULL, '2022-06-15 12:00:52', '2022-06-15 12:00:52', 'EMP-00005', '09123123126', '5/', 'male', 'YGN', 2, NULL, NULL, NULL, 'Probation'),
(10, 'User', 'mgmggmyo@gmail.com', NULL, '$2y$10$/SqufMM9pzywE7CGGIth3uOrJlsyeuY25sUT1y/8v1kRC83X8dtKm', NULL, '2022-06-15 12:01:55', '2022-06-15 12:01:55', 'EMP-00006', '09123123127', '5/', 'male', 'YGN', 2, NULL, NULL, NULL, 'Probation');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject` (`subject_type`,`subject_id`),
  ADD KEY `causer` (`causer_type`,`causer_id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `follow_ups`
--
ALTER TABLE `follow_ups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interest_rates`
--
ALTER TABLE `interest_rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marketing_teams`
--
ALTER TABLE `marketing_teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `follow_ups`
--
ALTER TABLE `follow_ups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `interest_rates`
--
ALTER TABLE `interest_rates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `marketing_teams`
--
ALTER TABLE `marketing_teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
