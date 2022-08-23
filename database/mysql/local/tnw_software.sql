-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 17, 2022 at 11:42 AM
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
(17, 'appointments_log', 'created', 'App\\Models\\Appointment', 1, 'App\\User', 1, '{\"attributes\":{\"appointment_date_time\":\"2022-06-17 12:00 AM\",\"appointment_person\":\"asdf\",\"appointment_location\":\"asdf\",\"appointment_remark\":\"asdf\",\"user_id\":1,\"marketing_team_id\":6,\"created_at\":\"2022-06-16T18:06:20.000000Z\",\"updated_at\":\"2022-06-16T18:06:20.000000Z\"}}', '2022-06-16 11:36:20', '2022-06-16 11:36:20'),
(18, 'marketing_teams_log', 'created', 'App\\Models\\MarketingTeam', 1, 'App\\User', 1, '{\"attributes\":{\"marketing_date\":\"2022-06-17\",\"ward_no\":\"9\",\"road\":\"Insein\",\"wide\":\"40x60\",\"permission\":null,\"type\":\"SaleOwner\",\"price\":\"5000\",\"owner_or_agent_type\":\"Owner\",\"name\":\"U Zin\",\"phone_no\":\"09444161997, 09255678874\",\"code\":\"M-00001\",\"remark\":\"U Zin\",\"interest_rate\":\"70%\",\"user_id\":1,\"created_at\":\"2022-06-17T07:30:45.000000Z\",\"updated_at\":\"2022-06-17T07:30:45.000000Z\"}}', '2022-06-17 07:30:45', '2022-06-17 07:30:45'),
(19, 'marketing_teams_log', 'created', 'App\\Models\\MarketingTeam', 3, 'App\\User', 1, '{\"attributes\":{\"marketing_date\":\"2022-06-17\",\"ward_no\":\"9\",\"road\":\"Hlaing\",\"wide\":\"40x90\",\"permission\":null,\"type\":\"SaleOwner\",\"price\":\"5000\",\"owner_or_agent_type\":\"Owner\",\"name\":\"U Soe Mg\",\"phone_no\":\"09444161998\",\"code\":\"M-00002\",\"remark\":null,\"interest_rate\":\"50%\",\"user_id\":1,\"created_at\":\"2022-06-17T08:13:42.000000Z\",\"updated_at\":\"2022-06-17T08:13:42.000000Z\"}}', '2022-06-17 08:13:42', '2022-06-17 08:13:42'),
(20, 'follow_ups_log', 'created', 'App\\Models\\FollowUp', 1, 'App\\User', 1, '{\"attributes\":{\"date_time\":\"2022-06-17 02:00 PM\",\"follow_up_type\":\"Call\",\"follow_up_remark\":\"Call\",\"additional_note\":\"No\",\"user_id\":1,\"marketing_team_id\":3,\"created_at\":\"2022-06-17T08:13:42.000000Z\",\"updated_at\":\"2022-06-17T08:13:42.000000Z\"}}', '2022-06-17 08:13:42', '2022-06-17 08:13:42'),
(21, 'appointments_log', 'created', 'App\\Models\\Appointment', 1, 'App\\User', 1, '{\"attributes\":{\"appointment_date_time\":\"2022-06-21 03:00 PM\",\"appointment_person\":\"U Soe Mg\",\"appointment_location\":\"Yangon, Hlaing\",\"appointment_remark\":\"No\",\"user_id\":1,\"marketing_team_id\":3,\"created_at\":\"2022-06-17T08:13:42.000000Z\",\"updated_at\":\"2022-06-17T08:13:42.000000Z\"}}', '2022-06-17 08:13:42', '2022-06-17 08:13:42'),
(22, 'marketing_teams_log', 'updated', 'App\\Models\\MarketingTeam', 1, 'App\\User', 1, '{\"attributes\":{\"marketing_date\":\"2022-06-17\",\"ward_no\":\"9\",\"road\":\"Insein\",\"wide\":\"40x60\",\"permission\":null,\"type\":\"SaleOwner\",\"price\":\"5000\",\"owner_or_agent_type\":\"Owner\",\"name\":\"U Zin\",\"phone_no\":\"09444161997, 09255678874\",\"code\":\"M-00001\",\"remark\":\"U Zin\",\"interest_rate\":\"70%\",\"user_id\":1,\"created_at\":\"2022-06-17T07:30:45.000000Z\",\"updated_at\":\"2022-06-17T09:07:03.000000Z\"},\"old\":{\"marketing_date\":\"2022-06-17\",\"ward_no\":\"9\",\"road\":\"Insein\",\"wide\":\"40x60\",\"permission\":null,\"type\":\"SaleOwner\",\"price\":\"5000\",\"owner_or_agent_type\":\"Owner\",\"name\":\"U Zin\",\"phone_no\":\"09444161997, 09255678874\",\"code\":\"M-00001\",\"remark\":\"U Zin\",\"interest_rate\":\"70%\",\"user_id\":1,\"created_at\":\"2022-06-17T07:30:45.000000Z\",\"updated_at\":\"2022-06-17T07:30:45.000000Z\"}}', '2022-06-17 09:07:03', '2022-06-17 09:07:03');

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
  `no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `township_id` int(11) DEFAULT NULL,
  `property_type_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `reject_status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reject_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(14, '2022_06_16_171958_create_follow_ups_table', 8),
(15, '2022_06_16_172255_create_appointments_table', 8),
(16, '2022_06_17_110526_create_regions_table', 9),
(17, '2022_06_17_110709_create_townships_table', 9),
(18, '2022_06_17_112434_create_property_types_table', 10),
(19, '2022_06_16_110109_create_marketing_teams_table', 11),
(20, '2022_06_17_152826_create_rejects_table', 12),
(21, '2022_06_17_153047_add_reject_field_to_marketing_teams_table', 13);

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
-- Table structure for table `property_types`
--

CREATE TABLE `property_types` (
  `id` int(11) NOT NULL,
  `property_type` varchar(255) NOT NULL,
  `property_type_mm` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `property_types`
--

INSERT INTO `property_types` (`id`, `property_type`, `property_type_mm`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Apartment', 'တိုက်ခန်း', '', NULL, '2022-06-17 11:43:27'),
(2, 'Condo', 'ကွန်ဒိုအခန်း', '1', NULL, NULL),
(3, 'House', 'လုံးချင်းအိမ်', '1', NULL, NULL),
(4, 'Land', 'မြေ', '1', NULL, NULL),
(5, 'Shops', 'စျေးဆိုင်', '1', NULL, NULL),
(6, 'Offices', 'Office', '1', NULL, NULL),
(7, 'Industrial Zone', 'စက်မှုဇုန်', '1', NULL, NULL),
(8, 'Hotel', 'ဟိုတယ်', '1', NULL, NULL),
(9, 'Restaurant', 'စားသောက်ဆိုင်', '1', NULL, NULL),
(11, 'New House', 'New House', '1', NULL, NULL),
(12, 'Showroom', 'Showroom', '1', NULL, NULL),
(13, 'Warehouse', 'ဂိုဒေါင်', '1', NULL, NULL),
(14, 'Penthouse', 'Penthouse', '1', NULL, NULL),
(15, 'Hostel', 'Hostel', '', '2022-06-17 05:09:32', '2022-06-17 11:39:32'),
(16, 'Apartmentasdf', 'တိုက်ခန်း', '', '2022-06-17 05:12:53', '2022-06-17 11:42:53');

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` int(11) NOT NULL,
  `region` varchar(255) NOT NULL,
  `region_mm` varchar(225) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `region`, `region_mm`, `status`) VALUES
(1, 'Yangon Region', 'ရန်ကုန်', '1'),
(2, 'Mandalay Region', 'မန္တလေးတိုင်းဒေသကြီး', '1'),
(3, 'Nay Pyi Taw', 'နေပြည်တော်', '1'),
(4, 'Bago Region', 'ပဲခူးတိုင်းဒေသကြီး', '1'),
(5, 'Ayeyarwady Region', 'ဧရာဝတီတိုင်းဒေသကြီး', '1'),
(6, 'Magway Region', 'မကွေးတိုင်းဒေသကြီး', '1'),
(7, 'Sagaing Region', 'စစ်ကိုင်းတိုင်းဒေသကြီ', '1'),
(8, 'Tanintharyi Region', 'တနင်္သာရီတိုင်းဒေသကြီ', '1'),
(9, 'Shan State', 'ရှမ်းပြည်နယ်', '1'),
(10, 'Kayin State', 'ကရင်ပြည်နယ်', '1'),
(11, 'Mon State', 'မွန်ပြည်နယ်', '1'),
(12, 'Rakhine State', 'ရခိုင်ပြည်နယ်', '1'),
(13, 'Chin State', 'ချင်းပြည်နယ်', '1'),
(14, 'Kachin State', 'ကချင်ပြည်နယ်', '1'),
(15, 'Kayah State', 'ကယားပြည်နယ်', '1');

-- --------------------------------------------------------

--
-- Table structure for table `rejects`
--

CREATE TABLE `rejects` (
  `id` int(10) UNSIGNED NOT NULL,
  `reject_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reject_reason` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marketing_team_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
-- Table structure for table `townships`
--

CREATE TABLE `townships` (
  `id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `township` varchar(255) NOT NULL,
  `townships_mm` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `townships`
--

INSERT INTO `townships` (`id`, `region_id`, `township`, `townships_mm`) VALUES
(1, 1, 'Lanmadaw', 'လမ်းမတော်'),
(2, 1, 'Latha', 'လသာ'),
(3, 1, 'Kyauktada', 'ကျောက်တံတား'),
(4, 1, 'Pabedan', 'ပန်းပဲတန်း'),
(5, 1, 'Pazundaung', 'ပုဇွန်တောင်'),
(6, 1, 'Ahlone', 'အလုံ'),
(7, 1, 'Kyeemyindaing', 'ကြည့်မြင်တိုင်'),
(8, 1, 'Sanchaung', 'စမ်းချောင်း'),
(9, 1, 'Bahan', 'ဗဟန်း'),
(10, 1, 'Botahtaung', 'ဗိုလ်တထောင်'),
(11, 1, 'Mingalartaungnyunt', 'မင်္ဂလာတောင်ညွန့်'),
(12, 1, 'Tamwe', 'တာမွေ'),
(13, 1, 'Yankin', 'ရန်ကင်း'),
(14, 1, 'Dagon', 'ဒဂုံ'),
(15, 1, 'East Dagon', 'ဒဂုံမြို့သစ် အရှေ့ပိုင်း'),
(16, 1, 'North Dagon', 'ဒဂုံမြို့သစ် မြောက်ပိုင်း'),
(17, 1, 'South Dagon', 'ဒဂုံမြို့သစ် တောင်ပိုင်း'),
(18, 1, 'Dagon Seikkan', 'ဒဂုံမြို့သစ် ဆိပ်ကမ်း'),
(19, 1, 'Kamaryut', 'ကမာရွတ်'),
(20, 1, 'Insein', 'အင်းစိန်'),
(21, 1, 'Hlaing', 'လှိုင်'),
(22, 1, 'Hlaingtharya', 'လှိုင်သာယာ'),
(23, 1, 'Mayangone', 'မရမ်းကုန်း'),
(24, 1, 'Mingaladon', 'မင်္ဂလာဒုံ'),
(25, 1, 'North Okkalapa', 'မြောက်ဥက္ကလာပ'),
(26, 1, 'South Okkalapa', 'တောင်ဥက္ကလာပ'),
(27, 1, 'Thingangyun', 'သင်္ဃန်းကျွန်း'),
(28, 1, 'Thaketa', 'သာကေတ'),
(29, 1, 'Thanlyin', 'သံလျင်'),
(30, 1, 'Dala', 'ဒလ'),
(31, 1, 'Dawbon', 'ဒေါပုံ'),
(32, 1, 'Hmawbi', 'မှော်ဘီ'),
(33, 1, 'Hlegu', 'လှည်းကူး'),
(34, 1, 'Htantabin', 'ထန်းတပင်'),
(35, 1, 'Kawhmu', 'ကော့မှူး'),
(36, 1, 'Kayan', 'ခရမ်း'),
(37, 1, 'Kungyangon', 'ကွမ်းခြံကုန်း'),
(38, 1, 'Shwepyithar', 'ရွှေပြည်သာ'),
(39, 1, 'Taikkyi', 'တိုက်ကြီး'),
(40, 1, 'Thongwa', 'သုံးခွ'),
(41, 1, 'Twantay', 'တွံ့တေး'),
(42, 1, 'Kyauktan', 'ကျောက်တန်း'),
(43, 1, 'Seikgyikanaungto', 'ဆိပ်ကြီးခနောင်တို'),
(44, 1, 'Palae Myothit', 'ပုလဲမြို့သစ်'),
(45, 2, 'Aung Myay Thar Zan', 'အောင်မြေသာဇံ'),
(46, 2, 'Chan Aye Thar Zan', 'ချမ်းအေးသာဇံ'),
(47, 2, 'Mahar Aung Myay', 'မဟာအောင်မြေ'),
(48, 2, 'Chan Mya Thar Si', 'ချမ်းမြသာစည်'),
(49, 2, 'Pyi Gyi Tan Kon', 'ပြည်ကြီးတံခွန်'),
(50, 2, 'Amarapura', 'အမရပူရ'),
(51, 2, 'Pa Thein Gyi', 'ပုသိမ်ကြီး'),
(52, 2, 'Pyin Oo Lwin', 'ပြင်ဦးလွင်'),
(53, 2, 'Madaya', 'မတ္တရာ'),
(54, 2, 'Singu', 'စဉ့်ကူး'),
(55, 2, 'Thabeikkyin', 'Thabeikkyin'),
(56, 2, 'Mogok', 'မိုးကုတ်'),
(57, 2, 'Kyaukpadaung', 'ကျောက်ပန်းတောင်း'),
(58, 2, 'Kyaukse', 'ကျောက်ဆည်'),
(59, 2, 'Sintgaing', 'စဉ့်ကိုင်'),
(60, 2, 'Myittha', 'မြစ်သား'),
(61, 2, 'Tada-U', 'တံတားဦး'),
(62, 2, 'Myingyan', 'မြင်းခြံ'),
(63, 2, 'Thaungtha', 'တောင်သာ'),
(64, 2, 'Natogyi', 'နွားထိုးကြီး'),
(65, 2, 'Nyaung-U', 'ညောင်ဦး'),
(66, 2, 'Meiktila', 'မိတ္ထီလာ'),
(67, 2, 'Mahlaing', 'မလှိုင်'),
(68, 2, 'Thazi', 'သာစည်'),
(69, 2, 'Wundwin', 'ဝမ်းတွင်း'),
(70, 2, 'Pyawbwe', 'ပျော်ဘွယ်'),
(71, 2, 'Yamethin', 'ရမည်းသင်း'),
(72, 3, 'Pyinmana', 'ပျဉ်းမနား'),
(73, 3, 'Tatkon', 'တပ်ကုန်း'),
(74, 3, 'Lewe', 'လယ်ဝေး'),
(75, 3, 'Dekkhinathiri', 'ဒက္ခိဏသီရိ'),
(76, 3, 'Ottarathiri', 'ဥတ္တရသီရိ'),
(77, 3, 'Pobbathiri', 'ပုပ္ဗသီရိ'),
(78, 3, 'Zabuthiri', 'ဇမ္မူသီရိ'),
(79, 3, 'Zeyathiri', 'ဇေယျာသီရိ'),
(80, 4, 'Bago', 'ပဲခူး'),
(81, 4, 'Daik-U', 'ဒိုက်ဦး'),
(82, 4, 'Kawa', 'ကဝ'),
(83, 4, 'Thanatpin', 'သနပ်ပင်'),
(84, 4, 'Waw', 'ဝေါ'),
(85, 4, 'Nyaunglebin', 'ညောင်လေးပင်'),
(86, 4, 'Shwegyin', 'ရွှေကျင်'),
(87, 4, 'Pyay', 'ပြည်'),
(88, 4, 'Paukkaung', 'ပေါက်ခေါင်း'),
(89, 4, 'Thegon', 'သဲကုန်း'),
(90, 4, 'Shwedaung', 'ရွှေတောင်'),
(91, 4, 'Padaung', 'ပန်းတောင်း'),
(92, 4, 'Paungde', 'ပေါင်းတည်'),
(93, 4, 'Nattalin', 'နတ်တလင်း'),
(94, 4, 'Zigon', 'ဇီးကုန်း'),
(95, 4, 'Tharrawaddy', 'သာယာဝတီ'),
(96, 4, 'Gyobingauk', 'ကြို့ပင်ကောက်'),
(97, 4, 'Letpadan', 'လက်ပံတန်း'),
(98, 4, 'Minhla', 'မင်းလှ'),
(99, 4, 'Monyo', 'မိုးညို'),
(100, 4, 'Okpho', 'အုတ်ဖို'),
(101, 4, 'Taungoo', 'တောင်ငူ'),
(102, 4, 'Oktwin', 'အုတ်တွင်း'),
(103, 4, 'Tantabin', 'ထန်းတပင်'),
(104, 4, 'Yedashe', 'ရေတာရှည်'),
(105, 4, 'Pyu', 'ဖြူ း'),
(106, 4, 'Kyauktaga', 'ကျောက်တံခါး'),
(107, 4, 'Kyaukkyi', 'ကျောက်ကြီး'),
(108, 4, 'Hpa Yar Gyi', 'ဘုရားကြီး'),
(109, 5, 'Bogale', 'ဘိုကလေး'),
(110, 5, 'Danubyu', 'ဓနုဖြူ'),
(111, 5, 'Einme', 'အိမ်မဲ'),
(112, 5, 'Hinthada', 'ဟင်္သာတ'),
(113, 5, 'Ingapu', 'အင်္ဂပူ'),
(114, 5, 'Kangyidaunt', 'ကန်ကြီးထောင့်'),
(115, 5, 'Kyaiklat', 'ကျိုက်လတ်'),
(116, 5, 'Kyangin', 'ကြံခင်း'),
(117, 5, 'Kyaunggon', 'ကျောင်းကုန်း'),
(118, 5, 'Kyonpyaw', 'ကျုံပျော်'),
(119, 5, 'Labutta', 'လပွတ္တာ'),
(120, 5, 'Lemyethna', 'လေးမျက်နှာ'),
(121, 5, 'Maubin', 'မအူပင်'),
(122, 5, 'Mawlamyinegyun', 'မော်လမြိုင်ကျွန်း'),
(123, 5, 'Myanaung', 'မြန်အောင်'),
(124, 5, 'Myaungmya', 'မြောင်းမြ'),
(125, 5, 'Ngapudaw', 'ငပုတော'),
(126, 5, 'Nyaungdon', 'ညောင်တုန်း'),
(127, 5, 'Pantanaw', 'ပန်းတနော်'),
(128, 5, 'Pathein', 'ပုသိမ်'),
(129, 5, 'Pyapon', 'ဖျာပုံ'),
(130, 5, 'Thabaung', 'သာပေါင်း'),
(131, 5, 'Wakema', 'ဝါးခယ်မ'),
(132, 5, 'Yegyi', 'ရေကြည်'),
(133, 5, 'Zalun', 'ဇလွန်'),
(134, 6, 'Aunglan', 'အောင်လံ'),
(135, 6, 'Chauk', 'ချောက်'),
(136, 6, 'Gangaw', 'ဂန့်ဂေါ'),
(137, 6, 'Kamma', 'ကံမ'),
(138, 6, 'Magway', 'မကွေး'),
(139, 6, 'Minbu', 'မင်းဘူး'),
(140, 6, 'Mindon', 'မင်းတုန်း'),
(141, 6, 'Minhla', 'မင်းလှ'),
(142, 6, 'Myaing', 'မြိုင်'),
(143, 6, 'Myothit', 'မြို့သစ်'),
(144, 6, 'Natmauk', 'နတ်မောက်'),
(145, 6, 'Ngape', 'ငဖဲ'),
(146, 6, 'Pakokku', 'ပခုက္ကူ'),
(147, 6, 'Pauk', 'ပေါက်'),
(148, 6, 'Pwintbyu', 'ပွင့်ဖြူ'),
(149, 6, 'Salin', 'စလင်း'),
(150, 6, 'Saw', 'ဆော'),
(151, 6, 'Seikphyu', 'ဆိပ်ဖြူ'),
(152, 6, 'Sidoktaya', 'စေတုတ္တရာ'),
(153, 6, 'Sinbaungwe', 'ဆင်ပေါင်ဝဲ'),
(154, 6, 'Taungdwingyi', 'တောင်တွင်းကြီး'),
(155, 6, 'Thayet', 'သရပ်'),
(156, 6, 'Tilin', 'ထီးလင်း'),
(157, 6, 'Yenangyaung', 'ရေနံချောင်း'),
(158, 6, 'Yesagyo', 'ရေစကြို'),
(159, 7, 'Sagaing', 'စစ်ကိုင်း'),
(160, 7, 'Monywa', 'မုံရွာ'),
(161, 7, 'Shwebo', 'ရွှေဘို'),
(162, 7, 'Tabayin', 'ဒီပဲယင်း'),
(163, 7, 'Katha', 'ကသာ'),
(164, 7, 'Ayadaw', 'အရာတော်'),
(165, 7, 'Banmauk', 'ဗန်းမောက်'),
(166, 7, 'Budalin', 'မုတလင်'),
(167, 7, 'Chaung-U', 'ချောင်ဦး'),
(168, 7, 'Hkamti', 'ခန္တီး'),
(169, 7, 'Homalin', 'ဟုမ္မလင်း'),
(170, 7, 'Indaw', 'အင်းတော်'),
(171, 7, 'Kale', 'ကလေး'),
(172, 7, 'Kalewa', 'ကလေးဝ'),
(173, 7, 'kanbalu', 'ကန့်ဘလူ'),
(174, 7, 'Kani', 'ကနီး'),
(175, 7, 'Kawlin', 'ကောလင်း'),
(176, 7, 'Khin-U', 'ခင်ဦး'),
(177, 7, 'Kyunhla', 'ကျွန်းလှ'),
(178, 7, 'Lahe', 'လဟယ်'),
(179, 7, 'Mawlaik', 'မော်လိုက်'),
(180, 7, 'Mingin', 'မင်းကင်း'),
(181, 7, 'Myaung', 'မြိုင်'),
(182, 7, 'Myinmu', 'မြင်းမူ'),
(183, 7, 'Nanyun', 'နန်းယွန်း'),
(184, 7, 'Pale', 'ပုလဲ'),
(185, 7, 'Paungbyin', 'ဖောင်းပြင်'),
(186, 7, 'Pinlebu', 'ပင်လယ်ဘူး'),
(187, 7, 'Salingyi', 'ဆားလင်းကြီး'),
(188, 7, 'Tamu', 'တမူး'),
(189, 7, 'Taze', 'တန့်ဆည်'),
(190, 7, 'Tigyaing', 'ထီးချိုင့်'),
(191, 7, 'Wetlet', 'ဝက်လက်'),
(192, 7, 'Wuntho', 'ဝန်းသို'),
(193, 7, 'Ye-U', 'ရေဦး'),
(194, 7, 'Yinmabin', 'ယင်းမာပင်'),
(195, 8, 'Dawei', 'ထားဝယ်'),
(196, 8, 'Kawthoung', 'ကော့သောင်း'),
(197, 8, 'Myeik', 'မြိတ်'),
(198, 8, 'Bokpyin', 'ဘုတ်ပြင်း'),
(199, 8, 'Kyunsu', 'ကျွန်းစု'),
(200, 8, 'Palaw', 'ပူလော'),
(201, 8, 'Tanintharyi', 'တနင်္သာရီ'),
(202, 8, 'Thayetchaung', 'သရက်ချောင်း'),
(203, 8, 'Yebyu', 'ရေဖြူ'),
(204, 9, 'Taunggyi', 'တောင်ကြီး'),
(205, 9, 'Kalaw', 'ကလော'),
(206, 9, 'Aung Ban', 'အောင်ပန်း'),
(207, 9, 'Kengtung', 'ကျိုင်းတုံ'),
(208, 9, 'Tachileik', 'တာချီလိတ်'),
(209, 9, 'Hsipaw', 'သီပေါ'),
(210, 9, 'Kyuakme', 'ကျောက်မဲ'),
(211, 9, 'Lashio', 'လားရှိုး'),
(212, 9, 'Muse', 'မူဆယ်'),
(213, 9, 'Nawnghkio', 'နောင်ချို'),
(214, 9, 'Hopong', 'ဟိုပုံး'),
(215, 9, 'Loilen', 'လွိုင်လင်'),
(216, 9, 'Nyaungshwe', 'ညောင်ရွှေ'),
(217, 9, 'Pindaya', 'ပင်းတယ'),
(218, 9, 'Pinlaung', 'ပင်လောင်း'),
(219, 9, 'Matman', 'မက်မန်း'),
(220, 9, 'Monghpyak', 'မိုင်းဖြတ်'),
(221, 9, 'Monghsat', 'မိုင်းဆတ်'),
(222, 9, 'Mongkhet', 'မိုင်းခတ်'),
(223, 9, 'Mongla', 'မိုင်းလား'),
(224, 9, 'Mongping', 'မိုင်းပြင်း'),
(225, 9, 'Mongton', 'မိုင်းတုန်း'),
(226, 9, 'Mongyang', 'မိုင်းယန်း'),
(227, 9, 'Mongyawng', 'မိုင်းယောင်း'),
(228, 9, 'Hopang', 'ဟိုပန်'),
(229, 9, 'Hseni', 'သိန္နီ'),
(230, 9, 'Konkyan', 'ကုန်းကြမ်း'),
(231, 9, 'Kunlong', 'ကွမ်းလုံ'),
(232, 9, 'Kutkai', 'ကွတ်ခိုင်'),
(233, 9, 'Laukkaing', 'လောက်ကိုင်'),
(234, 9, 'Mabein', 'မဘိန်း'),
(235, 9, 'Mongmao', 'မိုင်းမော'),
(236, 9, 'Mongmit', 'မိုးမိတ်'),
(237, 9, 'Mongyai', 'မိုင်းရယ်'),
(238, 9, 'Namhsan', 'နမ့်ဆန်'),
(239, 9, 'Namtu', 'နမ္မတူ'),
(240, 9, 'Nanhkan', 'နမ့်ခမ်း'),
(241, 9, 'Pangsang', 'ပန်ဆန်း'),
(242, 9, 'Pangwaun', 'ပန်ဝိုင်'),
(243, 9, 'Tangyan', 'တန့်ယန်း'),
(244, 9, 'Hsihseng', 'ဆီဆိုင်'),
(245, 9, 'Kunhing', 'ကွန်ဟိန်း'),
(246, 9, 'Kyethi', 'ကျေးသီး'),
(247, 9, 'Laihka', 'လဲချား'),
(248, 9, 'Langkho', 'လင်းခေး'),
(249, 9, 'Lawksawk', 'ရပ်စောက်'),
(250, 9, 'Mawkmai', 'မောက်မယ်'),
(251, 9, 'Monghsu', 'မိုင်းရှုး'),
(252, 9, 'Mongkaung', 'မိုင်းကောင်း'),
(253, 9, 'Mongnai', 'မိုးနဲ'),
(254, 9, 'Mongpan', 'မိုင်းပန်'),
(255, 9, 'Nansang', 'နမ့်စန်'),
(256, 9, 'Pekon', 'ဖယ်ခုံ'),
(257, 9, 'Ywangan', 'ရွာငံ'),
(258, 10, 'Hpa-An', 'ဘားအံ'),
(259, 10, 'Kawkareik', 'ကော့ကရိတ်'),
(260, 10, 'Myawaddy', 'မြဝတီ'),
(261, 10, 'Thandaung', 'သံတောင်'),
(262, 10, 'Hlaingbwe', 'လှိုင်းဘွဲ့'),
(263, 10, 'Hpapun', 'ဖာပွန်'),
(264, 10, 'Kyain Seikgyi', 'ကြာအင်းဆိပ်ကြီး'),
(265, 11, 'Kyaikto', 'ကျိုက်ထို'),
(266, 11, 'Mawlamyine', 'မော်လမြိုင်'),
(267, 11, 'Thaton', 'သထုံ'),
(268, 11, 'Bilin', 'ဘီးလင်း'),
(269, 11, 'Chaungzon', 'ချောင်းဆုံ'),
(270, 11, 'Kyaikmaraw', 'ကျိုက်မရော'),
(271, 11, 'Mudon', 'မုဒုံ'),
(272, 11, 'Paung', 'ပေါင်'),
(273, 11, 'Thanbyuzayat', 'သံဖြူဇရပ်'),
(274, 11, 'Ye', 'ရေး'),
(275, 12, 'Sittwe', 'စစ်တွေ'),
(276, 12, 'Thandwe', 'သံတွဲ'),
(277, 12, 'Toungup', 'တောင်ကုတ်'),
(278, 12, 'Ann', 'အမ်း'),
(279, 12, 'Buthidaung', 'ဘူးသီးတောင်'),
(280, 12, 'Gwa', 'ဂွ'),
(281, 12, 'Kyaukpyu', 'ကျောက်ဖြူ'),
(282, 12, 'Kyauktaw', 'ကျောက်တော်'),
(283, 12, 'Maungdaw', 'မောင်တော'),
(284, 12, 'Minbya', 'မင်းပြား'),
(285, 12, 'Mrauk-U', 'မြောက်ဦး'),
(286, 12, 'Munaung', 'မာန်အောင်'),
(287, 12, 'Myebon', 'မြေပုံ'),
(288, 12, 'Pauktaw', 'ပေါက်တော'),
(289, 12, 'Ponnagyun', 'ပုဏ္ဏားကျွန်း'),
(290, 12, 'Ramree', 'ရမ်းဗြဲ'),
(291, 12, 'Rathedaung', 'ရသေ့တောင်'),
(292, 13, 'Hakha', 'ဟားခါး'),
(293, 13, 'Mindat', 'မင်းတပ်'),
(294, 13, 'Falam', 'ဖလန်း'),
(295, 13, 'Htantlang', 'ထန်တလန်'),
(296, 13, 'Kanpetlet', 'ကန်ပက်လက်'),
(297, 13, 'Madupi', 'မတူပီ'),
(298, 13, 'Paletwa', 'ပလက်ဝ'),
(299, 13, 'Tiddim', 'တီးတိန်'),
(300, 13, 'Tonzang', 'တွမ်းဇံ'),
(301, 14, 'Myitkyina', 'မြစ်ကြီးနား'),
(302, 14, 'Puta-O', 'ပူတာအို'),
(303, 14, 'Bhamo', 'ဗန်းမော်'),
(304, 14, 'Hpakan', 'ဖားကန့်'),
(305, 14, 'Mogaung', 'မိုးကောင်း'),
(306, 14, 'Mohnyin', 'မိုးညှင်း'),
(307, 14, 'Momauk', 'မိုးမောက်'),
(308, 14, 'Shwegu', 'ရွှေကူ'),
(309, 14, 'Injangyang', 'အင်ဂျန်းယန်'),
(310, 14, 'Kawnglanghpu', 'ခေါင်လံဖူး'),
(311, 14, 'Machanbaw', 'မချမ်းဘော'),
(312, 14, 'Mansi', 'မံစီ'),
(313, 14, 'Nogmung', 'နောင်မွန်း'),
(314, 14, 'Sumprabum', 'ဆွမ်ပရာဘွမ်'),
(315, 14, 'Tanai', 'တနိုင်း'),
(316, 14, 'Tsawlaw', 'ဆော့လော်'),
(317, 14, 'Waingmaw', 'ဝိုင်းမော်'),
(318, 15, 'Loikaw', 'လွိုင်ကော်'),
(319, 15, 'Bawlakhe', 'ဘောလခဲ'),
(320, 15, 'Demoso', 'ဒီမောဆို'),
(321, 15, 'Hpasawng', 'ဖားဆောင်း'),
(322, 15, 'Hpruso', 'ဖရှုးဆိုး'),
(323, 15, 'Mese', 'မယ်ဆဲ့'),
(324, 15, 'Shadaw', 'ရှားတော'),
(325, 1, 'Thuwana', 'သုဝဏ္ဏ');

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
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$ACc0APOsRpxoHUWicc4Tc.59kRN1ttfhvoDhnuYbS4Z2GagiP0yHq', NULL, '2022-05-25 07:46:08', '2022-06-16 05:00:20', 'EMP-0001', '09333161998', '5/abc(n)009112', 'male', 'Yangon', 1, NULL, NULL, '1/1/2022', 'Probation');

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
-- Indexes for table `property_types`
--
ALTER TABLE `property_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rejects`
--
ALTER TABLE `rejects`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `townships`
--
ALTER TABLE `townships`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `interest_rates`
--
ALTER TABLE `interest_rates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `marketing_teams`
--
ALTER TABLE `marketing_teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `property_types`
--
ALTER TABLE `property_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `rejects`
--
ALTER TABLE `rejects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `townships`
--
ALTER TABLE `townships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=326;

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
