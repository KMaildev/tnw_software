-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 30, 2022 at 10:58 PM
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
  `properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `subject_id`, `causer_type`, `causer_id`, `properties`, `created_at`, `updated_at`) VALUES
(1, 'users_log', 'updated', 'App\\User', 1, 'App\\User', 1, '{\"attributes\":{\"name\":\"admin\",\"email\":\"admin@gmail.com\",\"employee_id\":\"EMP-0001\",\"phone\":\"09444161997\",\"nrc_number\":\"5\\/abc(n)009112\",\"address\":\"Yangon\",\"department_id\":1,\"created_at\":\"2022-05-25T07:46:08.000000Z\",\"updated_at\":\"2022-06-23T12:05:59.000000Z\"},\"old\":{\"name\":\"admin\",\"email\":\"admin@gmail.com\",\"employee_id\":\"EMP-0001\",\"phone\":\"09444161997\",\"nrc_number\":\"5\\/abc(n)009112\",\"address\":\"Yangon\",\"department_id\":1,\"created_at\":\"2022-05-25T07:46:08.000000Z\",\"updated_at\":\"2022-06-23T23:07:57.000000Z\"}}', '2022-06-23 12:05:59', '2022-06-23 12:05:59'),
(2, 'users_log', 'updated', 'App\\User', 1, 'App\\User', 1, '{\"attributes\":{\"name\":\"admin\",\"email\":\"admin@gmail.com\",\"employee_id\":\"EMP-0001\",\"phone\":\"09444161997\",\"nrc_number\":\"5\\/abc(n)009112\",\"address\":\"Yangon\",\"department_id\":1,\"created_at\":\"2022-05-25T07:46:08.000000Z\",\"updated_at\":\"2022-06-23T12:07:16.000000Z\"},\"old\":{\"name\":\"admin\",\"email\":\"admin@gmail.com\",\"employee_id\":\"EMP-0001\",\"phone\":\"09444161997\",\"nrc_number\":\"5\\/abc(n)009112\",\"address\":\"Yangon\",\"department_id\":1,\"created_at\":\"2022-05-25T07:46:08.000000Z\",\"updated_at\":\"2022-06-23T12:05:59.000000Z\"}}', '2022-06-23 12:07:16', '2022-06-23 12:07:16'),
(3, 'users_log', 'updated', 'App\\User', 1, 'App\\User', 1, '{\"attributes\":{\"name\":\"admin\",\"email\":\"admin@gmail.com\",\"employee_id\":\"EMP-0001\",\"phone\":\"09444161997\",\"nrc_number\":\"5\\/abc(n)009112\",\"address\":\"Yangon\",\"department_id\":1,\"created_at\":\"2022-05-25T07:46:08.000000Z\",\"updated_at\":\"2022-06-24T14:30:22.000000Z\"},\"old\":{\"name\":\"admin\",\"email\":\"admin@gmail.com\",\"employee_id\":\"EMP-0001\",\"phone\":\"09444161997\",\"nrc_number\":\"5\\/abc(n)009112\",\"address\":\"Yangon\",\"department_id\":1,\"created_at\":\"2022-05-25T07:46:08.000000Z\",\"updated_at\":\"2022-06-23T12:07:16.000000Z\"}}', '2022-06-24 14:30:22', '2022-06-24 14:30:22'),
(4, 'users_log', 'updated', 'App\\User', 11, 'App\\User', 11, '{\"attributes\":{\"name\":\"Ma Thu Thu\",\"email\":\"thuthu19501@gmail.com\",\"employee_id\":\"EMP-0002\",\"phone\":\"09425313335\",\"nrc_number\":\"12\\/MAYAKA(N)139326\",\"address\":\"North Dagon\",\"department_id\":2,\"created_at\":\"2022-06-18T17:16:43.000000Z\",\"updated_at\":\"2022-06-25T07:57:03.000000Z\"},\"old\":{\"name\":\"Ma Thu Thu\",\"email\":\"thuthu19501@gmail.com\",\"employee_id\":\"EMP-0002\",\"phone\":\"09425313335\",\"nrc_number\":\"12\\/MAYAKA(N)139326\",\"address\":\"North Dagon\",\"department_id\":2,\"created_at\":\"2022-06-18T17:16:43.000000Z\",\"updated_at\":\"2022-06-20T16:00:19.000000Z\"}}', '2022-06-25 07:57:03', '2022-06-25 07:57:03'),
(5, 'marketing_teams_log', 'created', 'App\\Models\\MarketingTeam', 1, 'App\\User', 11, '{\"attributes\":{\"offer_status\":\"sale_offer\",\"code\":\"TNW-000001\",\"marketing_date\":\"2022-06-25 02:27 PM\",\"no\":\"10\",\"road\":\"10\",\"township_id\":\"16\",\"ward\":\"10\",\"property_type_id\":1,\"floor\":\"\",\"house_style\":\"\",\"price\":\"5000\",\"rent_offer_contract_status\":\"\",\"deposit_amount\":\"0\",\"area_width\":\"40\",\"area_height\":\"60\",\"area\":\"\",\"area_type\":\"Sqft\",\"bcc_status\":\"true\",\"owner_status\":\"\\u1019\\u103c\\u1031\\u101b\\u103e\\u1004\\u103a\",\"lift_status\":\"Yes\",\"property_status\":\"Hall\",\"extra_charge\":\"Yes\",\"rooms\":\"\",\"shrine\":\"\",\"bathrooms\":\"\",\"dining\":\"\",\"living\":\"\",\"bedrooms\":\"\",\"master_bedrooms\":\"\",\"other_rooms\":\"\",\"permission_type\":\"grant\",\"grant_type\":\"\\u1021\\u1019\\u100a\\u103a\\u1015\\u1031\\u102b\\u1000\\u103a\",\"orginal_or_copy\":\"Orginal\",\"owner_agent\":\"Owner\",\"name\":\"asdf\",\"phone\":\"09666151443\",\"email\":\"\",\"address\":\"\",\"remark\":\"\",\"photo_status\":\"no\",\"user_id\":11,\"created_at\":\"2022-06-25T07:57:53.000000Z\",\"updated_at\":\"2022-06-25T07:57:53.000000Z\"}}', '2022-06-25 07:57:53', '2022-06-25 07:57:53'),
(6, 'users_log', 'updated', 'App\\User', 1, 'App\\User', 1, '{\"attributes\":{\"name\":\"admin\",\"email\":\"admin@gmail.com\",\"employee_id\":\"EMP-0001\",\"phone\":\"09444161997\",\"nrc_number\":\"5\\/abc(n)009112\",\"address\":\"Yangon\",\"department_id\":1,\"created_at\":\"2022-05-25T07:46:08.000000Z\",\"updated_at\":\"2022-06-27T09:48:50.000000Z\"},\"old\":{\"name\":\"admin\",\"email\":\"admin@gmail.com\",\"employee_id\":\"EMP-0001\",\"phone\":\"09444161997\",\"nrc_number\":\"5\\/abc(n)009112\",\"address\":\"Yangon\",\"department_id\":1,\"created_at\":\"2022-05-25T07:46:08.000000Z\",\"updated_at\":\"2022-06-24T14:30:22.000000Z\"}}', '2022-06-27 09:48:50', '2022-06-27 09:48:50'),
(7, 'users_log', 'updated', 'App\\User', 1, 'App\\User', 1, '{\"attributes\":{\"name\":\"Admin\",\"email\":\"admin@gmail.com\",\"employee_id\":\"EMP-0001\",\"phone\":\"09444161997\",\"nrc_number\":\"5\\/abc(n)009112\",\"address\":\"Yangon\",\"department_id\":1,\"created_at\":\"2022-05-25T07:46:08.000000Z\",\"updated_at\":\"2022-06-27T16:36:43.000000Z\"},\"old\":{\"name\":\"Admin\",\"email\":\"admin@gmail.com\",\"employee_id\":\"EMP-0001\",\"phone\":\"09444161997\",\"nrc_number\":\"5\\/abc(n)009112\",\"address\":\"Yangon\",\"department_id\":1,\"created_at\":\"2022-05-25T07:46:08.000000Z\",\"updated_at\":\"2022-06-27T16:12:10.000000Z\"}}', '2022-06-27 16:36:43', '2022-06-27 16:36:43'),
(8, 'users_log', 'updated', 'App\\User', 1, 'App\\User', 1, '{\"attributes\":{\"name\":\"Admin\",\"email\":\"admin@gmail.com\",\"employee_id\":\"EMP-0001\",\"phone\":\"09444161997\",\"nrc_number\":\"5\\/abc(n)009112\",\"address\":\"Yangon\",\"department_id\":1,\"created_at\":\"2022-05-25T07:46:08.000000Z\",\"updated_at\":\"2022-06-28T01:55:38.000000Z\"},\"old\":{\"name\":\"Admin\",\"email\":\"admin@gmail.com\",\"employee_id\":\"EMP-0001\",\"phone\":\"09444161997\",\"nrc_number\":\"5\\/abc(n)009112\",\"address\":\"Yangon\",\"department_id\":1,\"created_at\":\"2022-05-25T07:46:08.000000Z\",\"updated_at\":\"2022-06-27T16:36:43.000000Z\"}}', '2022-06-28 01:55:38', '2022-06-28 01:55:38'),
(9, 'users_log', 'updated', 'App\\User', 1, 'App\\User', 1, '{\"attributes\":{\"name\":\"Admin\",\"email\":\"admin@gmail.com\",\"employee_id\":\"EMP-0001\",\"phone\":\"09444161997\",\"nrc_number\":\"5\\/abc(n)009112\",\"address\":\"Yangon\",\"department_id\":1,\"created_at\":\"2022-05-25T07:46:08.000000Z\",\"updated_at\":\"2022-06-28T15:33:36.000000Z\"},\"old\":{\"name\":\"Admin\",\"email\":\"admin@gmail.com\",\"employee_id\":\"EMP-0001\",\"phone\":\"09444161997\",\"nrc_number\":\"5\\/abc(n)009112\",\"address\":\"Yangon\",\"department_id\":1,\"created_at\":\"2022-05-25T07:46:08.000000Z\",\"updated_at\":\"2022-06-28T01:55:38.000000Z\"}}', '2022-06-28 15:33:36', '2022-06-28 15:33:36'),
(10, 'users_log', 'updated', 'App\\User', 1, 'App\\User', 1, '{\"attributes\":{\"name\":\"Admin\",\"email\":\"admin@gmail.com\",\"employee_id\":\"EMP-0001\",\"phone\":\"09444161997\",\"nrc_number\":\"5\\/abc(n)009112\",\"address\":\"Yangon\",\"department_id\":1,\"created_at\":\"2022-05-25T07:46:08.000000Z\",\"updated_at\":\"2022-06-29T10:13:25.000000Z\"},\"old\":{\"name\":\"Admin\",\"email\":\"admin@gmail.com\",\"employee_id\":\"EMP-0001\",\"phone\":\"09444161997\",\"nrc_number\":\"5\\/abc(n)009112\",\"address\":\"Yangon\",\"department_id\":1,\"created_at\":\"2022-05-25T07:46:08.000000Z\",\"updated_at\":\"2022-06-28T15:33:36.000000Z\"}}', '2022-06-29 10:13:25', '2022-06-29 10:13:25'),
(11, 'marketing_teams_log', 'deleted', 'App\\Models\\MarketingTeam', 1, 'App\\User', 1, '{\"attributes\":{\"offer_status\":\"sale_offer\",\"code\":\"TNW-000001\",\"marketing_date\":\"2022\\/06\\/23 18:30\",\"no\":\"1\",\"road\":\"Insein\",\"township_id\":\"16\",\"ward\":\"28\",\"property_type_id\":1,\"floor\":\"3\",\"house_style\":\"\",\"price\":\"9000\",\"rent_offer_contract_status\":\"\",\"deposit_amount\":\"0\",\"area_width\":\"40\",\"area_height\":\"60\",\"area\":\"\",\"area_type\":\"Sqft\",\"bcc_status\":\"true\",\"owner_status\":\"\\u1019\\u103c\\u1031\\u101b\\u103e\\u1004\\u103a\",\"lift_status\":\"Yes\",\"property_status\":\"Hall\",\"extra_charge\":\"No\",\"rooms\":\"1\",\"shrine\":\"2\",\"bathrooms\":\"1\",\"dining\":\"3\",\"living\":\"1\",\"bedrooms\":\"2\",\"master_bedrooms\":\"1\",\"other_rooms\":\"0\",\"permission_type\":\"grant\",\"grant_type\":\"\\u1021\\u1019\\u100a\\u103a\\u1015\\u1031\\u102b\\u1000\\u103a\",\"orginal_or_copy\":\"Orginal\",\"owner_agent\":\"Owner\",\"name\":\"U Mg Mg\",\"phone\":\"09123123123\",\"email\":\"\",\"address\":\"YGN\",\"remark\":\"\",\"photo_status\":\"yes\",\"user_id\":1,\"created_at\":\"2022-06-23T23:31:12.000000Z\",\"updated_at\":\"2022-06-23T23:32:00.000000Z\"}}', '2022-06-29 10:25:02', '2022-06-29 10:25:02'),
(12, 'users_log', 'updated', 'App\\User', 1, 'App\\User', 1, '{\"attributes\":{\"name\":\"Admin\",\"email\":\"admin@gmail.com\",\"employee_id\":\"EMP-0001\",\"phone\":\"09444161997\",\"nrc_number\":\"5\\/abc(n)009112\",\"address\":\"Yangon\",\"department_id\":1,\"created_at\":\"2022-05-25T07:46:08.000000Z\",\"updated_at\":\"2022-06-30T16:07:49.000000Z\"},\"old\":{\"name\":\"Admin\",\"email\":\"admin@gmail.com\",\"employee_id\":\"EMP-0001\",\"phone\":\"09444161997\",\"nrc_number\":\"5\\/abc(n)009112\",\"address\":\"Yangon\",\"department_id\":1,\"created_at\":\"2022-05-25T07:46:08.000000Z\",\"updated_at\":\"2022-06-29T10:13:25.000000Z\"}}', '2022-06-30 16:07:49', '2022-06-30 16:07:49'),
(13, 'marketing_teams_log', 'created', 'App\\Models\\MarketingTeam', 56, 'App\\User', 1, '{\"attributes\":{\"offer_status\":\"sale_offer\",\"code\":null,\"marketing_date\":\"2022-06-30 10:44 PM\",\"no\":\"99\",\"road\":\"\\u1007\\u1031\\u101a\\u103b\\u102c\\u1012\\u102e\\u1015\",\"township_id\":\"16\",\"ward\":\"31\",\"property_type_id\":4,\"floor\":\"\",\"house_style\":\"\",\"price\":\"2600\",\"rent_offer_contract_status\":\"\",\"deposit_amount\":\"0\",\"area_width\":\"44\",\"area_height\":\"60\",\"area\":\"\",\"area_type\":\"Sqft\",\"bcc_status\":\"\",\"owner_status\":\"\",\"lift_status\":\"\",\"property_status\":\"\",\"extra_charge\":\"\",\"rooms\":\"\",\"shrine\":\"\",\"bathrooms\":\"\",\"dining\":\"\",\"living\":\"\",\"bedrooms\":\"\",\"master_bedrooms\":\"\",\"other_rooms\":\"\",\"permission_type\":\"permit\",\"grant_type\":\"\",\"orginal_or_copy\":\"Orginal\",\"owner_agent\":\"Owner\",\"name\":\"Ko Myo Win\",\"phone\":\"09425313335\",\"email\":\"\",\"address\":\"\",\"remark\":\"\",\"photo_status\":\"no\",\"user_id\":1,\"created_at\":\"2022-06-30T16:14:48.000000Z\",\"updated_at\":\"2022-06-30T16:14:48.000000Z\"}}', '2022-06-30 16:14:48', '2022-06-30 16:14:48'),
(14, 'marketing_teams_log', 'created', 'App\\Models\\MarketingTeam', 57, 'App\\User', 1, '{\"attributes\":{\"offer_status\":\"sale_offer\",\"code\":null,\"marketing_date\":\"2022-06-30 10:44 PM\",\"no\":\"96\",\"road\":\"\\u1007\\u1031\\u101a\\u103b\\u102c\\u1012\\u102e\\u1015\",\"township_id\":\"16\",\"ward\":\"31\",\"property_type_id\":4,\"floor\":\"\",\"house_style\":\"\",\"price\":\"2600\",\"rent_offer_contract_status\":\"\",\"deposit_amount\":\"0\",\"area_width\":\"44\",\"area_height\":\"60\",\"area\":\"\",\"area_type\":\"Sqft\",\"bcc_status\":\"\",\"owner_status\":\"\",\"lift_status\":\"\",\"property_status\":\"\",\"extra_charge\":\"\",\"rooms\":\"\",\"shrine\":\"\",\"bathrooms\":\"\",\"dining\":\"\",\"living\":\"\",\"bedrooms\":\"\",\"master_bedrooms\":\"\",\"other_rooms\":\"\",\"permission_type\":\"permit\",\"grant_type\":\"\",\"orginal_or_copy\":\"Orginal\",\"owner_agent\":\"Owner\",\"name\":\"Ko Myo Win\",\"phone\":\"09425313335\",\"email\":\"\",\"address\":\"\",\"remark\":\"\",\"photo_status\":\"no\",\"user_id\":1,\"created_at\":\"2022-06-30T16:14:52.000000Z\",\"updated_at\":\"2022-06-30T16:14:52.000000Z\"}}', '2022-06-30 16:14:52', '2022-06-30 16:14:52'),
(15, 'marketing_teams_log', 'updated', 'App\\Models\\MarketingTeam', 2, 'App\\User', 1, '{\"attributes\":{\"offer_status\":\"sale_offer\",\"code\":\"TNW-000002\",\"marketing_date\":\"2022-06-30 10:45 PM\",\"no\":\"96\",\"road\":\"\\u1007\\u1031\\u101a\\u103b\\u102c\\u1012\\u102e\\u1015\",\"township_id\":\"16\",\"ward\":\"31\",\"property_type_id\":4,\"floor\":\"\",\"house_style\":\"\",\"price\":\"2600\",\"rent_offer_contract_status\":\"\",\"deposit_amount\":\"0\",\"area_width\":\"44\",\"area_height\":\"60\",\"area\":\"\",\"area_type\":\"Sqft\",\"bcc_status\":\"\",\"owner_status\":\"\",\"lift_status\":\"\",\"property_status\":\"\",\"extra_charge\":\"\",\"rooms\":\"\",\"shrine\":\"\",\"bathrooms\":\"\",\"dining\":\"\",\"living\":\"\",\"bedrooms\":\"\",\"master_bedrooms\":\"\",\"other_rooms\":\"\",\"permission_type\":\"permit\",\"grant_type\":\"\",\"orginal_or_copy\":\"Orginal\",\"owner_agent\":\"Owner\",\"name\":\"Ko Myo Win\",\"phone\":\"09425313335\",\"email\":\"\",\"address\":\"\",\"remark\":\"\",\"photo_status\":\"no\",\"user_id\":1,\"created_at\":\"2022-06-25T17:02:19.000000Z\",\"updated_at\":\"2022-06-30T16:15:28.000000Z\"},\"old\":{\"offer_status\":\"sale_offer\",\"code\":\"TNW-000002\",\"marketing_date\":\"2022\\/06\\/25 11:58\",\"no\":\"95\",\"road\":\"\\u1007\\u1031\\u101a\\u103b\\u102c\\u1012\\u102e\\u1015\",\"township_id\":\"16\",\"ward\":\"31\",\"property_type_id\":4,\"floor\":\"\",\"house_style\":\"\",\"price\":\"2600\",\"rent_offer_contract_status\":\"\",\"deposit_amount\":\"0\",\"area_width\":\"44\",\"area_height\":\"60\",\"area\":\"\",\"area_type\":\"Sqft\",\"bcc_status\":\"\",\"owner_status\":\"\",\"lift_status\":\"\",\"property_status\":\"\",\"extra_charge\":\"\",\"rooms\":\"\",\"shrine\":\"\",\"bathrooms\":\"\",\"dining\":\"\",\"living\":\"\",\"bedrooms\":\"\",\"master_bedrooms\":\"\",\"other_rooms\":\"\",\"permission_type\":\"permit\",\"grant_type\":\"\",\"orginal_or_copy\":\"Orginal\",\"owner_agent\":\"Owner\",\"name\":\"Ko Myo Win\",\"phone\":\"09425313335\",\"email\":\"\",\"address\":\"\",\"remark\":\"\",\"photo_status\":\"no\",\"user_id\":1,\"created_at\":\"2022-06-25T17:02:19.000000Z\",\"updated_at\":\"2022-06-25T17:02:19.000000Z\"}}', '2022-06-30 16:15:28', '2022-06-30 16:15:28'),
(16, 'marketing_teams_log', 'updated', 'App\\Models\\MarketingTeam', 2, 'App\\User', 1, '{\"attributes\":{\"offer_status\":\"sale_offer\",\"code\":\"TNW-000002\",\"marketing_date\":\"2022-06-30 10:45 PM\",\"no\":\"99\",\"road\":\"\\u1007\\u1031\\u101a\\u103b\\u102c\\u1012\\u102e\\u1015\",\"township_id\":\"16\",\"ward\":\"31\",\"property_type_id\":4,\"floor\":\"\",\"house_style\":\"\",\"price\":\"2600\",\"rent_offer_contract_status\":\"\",\"deposit_amount\":\"0\",\"area_width\":\"44\",\"area_height\":\"60\",\"area\":\"\",\"area_type\":\"Sqft\",\"bcc_status\":\"\",\"owner_status\":\"\",\"lift_status\":\"\",\"property_status\":\"\",\"extra_charge\":\"\",\"rooms\":\"\",\"shrine\":\"\",\"bathrooms\":\"\",\"dining\":\"\",\"living\":\"\",\"bedrooms\":\"\",\"master_bedrooms\":\"\",\"other_rooms\":\"\",\"permission_type\":\"permit\",\"grant_type\":\"\",\"orginal_or_copy\":\"Orginal\",\"owner_agent\":\"Owner\",\"name\":\"Ko Myo Win\",\"phone\":\"09425313335\",\"email\":\"\",\"address\":\"\",\"remark\":\"\",\"photo_status\":\"no\",\"user_id\":1,\"created_at\":\"2022-06-25T17:02:19.000000Z\",\"updated_at\":\"2022-06-30T16:15:31.000000Z\"},\"old\":{\"offer_status\":\"sale_offer\",\"code\":\"TNW-000002\",\"marketing_date\":\"2022-06-30 10:45 PM\",\"no\":\"96\",\"road\":\"\\u1007\\u1031\\u101a\\u103b\\u102c\\u1012\\u102e\\u1015\",\"township_id\":\"16\",\"ward\":\"31\",\"property_type_id\":4,\"floor\":\"\",\"house_style\":\"\",\"price\":\"2600\",\"rent_offer_contract_status\":\"\",\"deposit_amount\":\"0\",\"area_width\":\"44\",\"area_height\":\"60\",\"area\":\"\",\"area_type\":\"Sqft\",\"bcc_status\":\"\",\"owner_status\":\"\",\"lift_status\":\"\",\"property_status\":\"\",\"extra_charge\":\"\",\"rooms\":\"\",\"shrine\":\"\",\"bathrooms\":\"\",\"dining\":\"\",\"living\":\"\",\"bedrooms\":\"\",\"master_bedrooms\":\"\",\"other_rooms\":\"\",\"permission_type\":\"permit\",\"grant_type\":\"\",\"orginal_or_copy\":\"Orginal\",\"owner_agent\":\"Owner\",\"name\":\"Ko Myo Win\",\"phone\":\"09425313335\",\"email\":\"\",\"address\":\"\",\"remark\":\"\",\"photo_status\":\"no\",\"user_id\":1,\"created_at\":\"2022-06-25T17:02:19.000000Z\",\"updated_at\":\"2022-06-30T16:15:28.000000Z\"}}', '2022-06-30 16:15:31', '2022-06-30 16:15:31'),
(17, 'marketing_teams_log', 'updated', 'App\\Models\\MarketingTeam', 2, 'App\\User', 1, '{\"attributes\":{\"offer_status\":\"sale_offer\",\"code\":\"TNW-000002\",\"marketing_date\":\"2022-06-30 10:45 PM\",\"no\":\"95\",\"road\":\"\\u1007\\u1031\\u101a\\u103b\\u102c\\u1012\\u102e\\u1015\",\"township_id\":\"16\",\"ward\":\"31\",\"property_type_id\":4,\"floor\":\"\",\"house_style\":\"\",\"price\":\"2600\",\"rent_offer_contract_status\":\"\",\"deposit_amount\":\"0\",\"area_width\":\"44\",\"area_height\":\"60\",\"area\":\"\",\"area_type\":\"Sqft\",\"bcc_status\":\"\",\"owner_status\":\"\",\"lift_status\":\"\",\"property_status\":\"\",\"extra_charge\":\"\",\"rooms\":\"\",\"shrine\":\"\",\"bathrooms\":\"\",\"dining\":\"\",\"living\":\"\",\"bedrooms\":\"\",\"master_bedrooms\":\"\",\"other_rooms\":\"\",\"permission_type\":\"permit\",\"grant_type\":\"\",\"orginal_or_copy\":\"Orginal\",\"owner_agent\":\"Owner\",\"name\":\"Ko Myo Win\",\"phone\":\"09425313335\",\"email\":\"\",\"address\":\"\",\"remark\":\"\",\"photo_status\":\"no\",\"user_id\":1,\"created_at\":\"2022-06-25T17:02:19.000000Z\",\"updated_at\":\"2022-06-30T16:15:34.000000Z\"},\"old\":{\"offer_status\":\"sale_offer\",\"code\":\"TNW-000002\",\"marketing_date\":\"2022-06-30 10:45 PM\",\"no\":\"99\",\"road\":\"\\u1007\\u1031\\u101a\\u103b\\u102c\\u1012\\u102e\\u1015\",\"township_id\":\"16\",\"ward\":\"31\",\"property_type_id\":4,\"floor\":\"\",\"house_style\":\"\",\"price\":\"2600\",\"rent_offer_contract_status\":\"\",\"deposit_amount\":\"0\",\"area_width\":\"44\",\"area_height\":\"60\",\"area\":\"\",\"area_type\":\"Sqft\",\"bcc_status\":\"\",\"owner_status\":\"\",\"lift_status\":\"\",\"property_status\":\"\",\"extra_charge\":\"\",\"rooms\":\"\",\"shrine\":\"\",\"bathrooms\":\"\",\"dining\":\"\",\"living\":\"\",\"bedrooms\":\"\",\"master_bedrooms\":\"\",\"other_rooms\":\"\",\"permission_type\":\"permit\",\"grant_type\":\"\",\"orginal_or_copy\":\"Orginal\",\"owner_agent\":\"Owner\",\"name\":\"Ko Myo Win\",\"phone\":\"09425313335\",\"email\":\"\",\"address\":\"\",\"remark\":\"\",\"photo_status\":\"no\",\"user_id\":1,\"created_at\":\"2022-06-25T17:02:19.000000Z\",\"updated_at\":\"2022-06-30T16:15:31.000000Z\"}}', '2022-06-30 16:15:34', '2022-06-30 16:15:34'),
(18, 'marketing_teams_log', 'updated', 'App\\Models\\MarketingTeam', 2, 'App\\User', 1, '{\"attributes\":{\"offer_status\":\"sale_offer\",\"code\":\"TNW-000002\",\"marketing_date\":\"2022-06-30 10:45 PM\",\"no\":\"95\",\"road\":\"\\u1007\\u1031\\u101a\\u103b\\u102c\\u1012\\u102e\\u1015\",\"township_id\":\"16\",\"ward\":\"20\",\"property_type_id\":4,\"floor\":\"\",\"house_style\":\"\",\"price\":\"2600\",\"rent_offer_contract_status\":\"\",\"deposit_amount\":\"0\",\"area_width\":\"44\",\"area_height\":\"60\",\"area\":\"\",\"area_type\":\"Sqft\",\"bcc_status\":\"\",\"owner_status\":\"\",\"lift_status\":\"\",\"property_status\":\"\",\"extra_charge\":\"\",\"rooms\":\"\",\"shrine\":\"\",\"bathrooms\":\"\",\"dining\":\"\",\"living\":\"\",\"bedrooms\":\"\",\"master_bedrooms\":\"\",\"other_rooms\":\"\",\"permission_type\":\"permit\",\"grant_type\":\"\",\"orginal_or_copy\":\"Orginal\",\"owner_agent\":\"Owner\",\"name\":\"Ko Myo Win\",\"phone\":\"09425313335\",\"email\":\"\",\"address\":\"\",\"remark\":\"\",\"photo_status\":\"no\",\"user_id\":1,\"created_at\":\"2022-06-25T17:02:19.000000Z\",\"updated_at\":\"2022-06-30T16:15:37.000000Z\"},\"old\":{\"offer_status\":\"sale_offer\",\"code\":\"TNW-000002\",\"marketing_date\":\"2022-06-30 10:45 PM\",\"no\":\"95\",\"road\":\"\\u1007\\u1031\\u101a\\u103b\\u102c\\u1012\\u102e\\u1015\",\"township_id\":\"16\",\"ward\":\"31\",\"property_type_id\":4,\"floor\":\"\",\"house_style\":\"\",\"price\":\"2600\",\"rent_offer_contract_status\":\"\",\"deposit_amount\":\"0\",\"area_width\":\"44\",\"area_height\":\"60\",\"area\":\"\",\"area_type\":\"Sqft\",\"bcc_status\":\"\",\"owner_status\":\"\",\"lift_status\":\"\",\"property_status\":\"\",\"extra_charge\":\"\",\"rooms\":\"\",\"shrine\":\"\",\"bathrooms\":\"\",\"dining\":\"\",\"living\":\"\",\"bedrooms\":\"\",\"master_bedrooms\":\"\",\"other_rooms\":\"\",\"permission_type\":\"permit\",\"grant_type\":\"\",\"orginal_or_copy\":\"Orginal\",\"owner_agent\":\"Owner\",\"name\":\"Ko Myo Win\",\"phone\":\"09425313335\",\"email\":\"\",\"address\":\"\",\"remark\":\"\",\"photo_status\":\"no\",\"user_id\":1,\"created_at\":\"2022-06-25T17:02:19.000000Z\",\"updated_at\":\"2022-06-30T16:15:34.000000Z\"}}', '2022-06-30 16:15:37', '2022-06-30 16:15:37'),
(19, 'marketing_teams_log', 'updated', 'App\\Models\\MarketingTeam', 2, 'App\\User', 1, '{\"attributes\":{\"offer_status\":\"sale_offer\",\"code\":\"TNW-000002\",\"marketing_date\":\"2022-06-30 10:45 PM\",\"no\":\"95\",\"road\":\"\\u1007\\u1031\\u101a\\u103b\\u102c\\u1012\\u102e\\u1015\",\"township_id\":\"16\",\"ward\":\"20\",\"property_type_id\":4,\"floor\":\"\",\"house_style\":\"\",\"price\":\"2600\",\"rent_offer_contract_status\":\"\",\"deposit_amount\":\"0\",\"area_width\":\"44\",\"area_height\":\"60\",\"area\":\"9000\",\"area_type\":\"Acre\",\"bcc_status\":\"\",\"owner_status\":\"\",\"lift_status\":\"\",\"property_status\":\"\",\"extra_charge\":\"\",\"rooms\":\"\",\"shrine\":\"\",\"bathrooms\":\"\",\"dining\":\"\",\"living\":\"\",\"bedrooms\":\"\",\"master_bedrooms\":\"\",\"other_rooms\":\"\",\"permission_type\":\"permit\",\"grant_type\":\"\",\"orginal_or_copy\":\"Orginal\",\"owner_agent\":\"Owner\",\"name\":\"Ko Myo Win\",\"phone\":\"09425313335\",\"email\":\"\",\"address\":\"\",\"remark\":\"\",\"photo_status\":\"no\",\"user_id\":1,\"created_at\":\"2022-06-25T17:02:19.000000Z\",\"updated_at\":\"2022-06-30T16:15:45.000000Z\"},\"old\":{\"offer_status\":\"sale_offer\",\"code\":\"TNW-000002\",\"marketing_date\":\"2022-06-30 10:45 PM\",\"no\":\"95\",\"road\":\"\\u1007\\u1031\\u101a\\u103b\\u102c\\u1012\\u102e\\u1015\",\"township_id\":\"16\",\"ward\":\"20\",\"property_type_id\":4,\"floor\":\"\",\"house_style\":\"\",\"price\":\"2600\",\"rent_offer_contract_status\":\"\",\"deposit_amount\":\"0\",\"area_width\":\"44\",\"area_height\":\"60\",\"area\":\"\",\"area_type\":\"Sqft\",\"bcc_status\":\"\",\"owner_status\":\"\",\"lift_status\":\"\",\"property_status\":\"\",\"extra_charge\":\"\",\"rooms\":\"\",\"shrine\":\"\",\"bathrooms\":\"\",\"dining\":\"\",\"living\":\"\",\"bedrooms\":\"\",\"master_bedrooms\":\"\",\"other_rooms\":\"\",\"permission_type\":\"permit\",\"grant_type\":\"\",\"orginal_or_copy\":\"Orginal\",\"owner_agent\":\"Owner\",\"name\":\"Ko Myo Win\",\"phone\":\"09425313335\",\"email\":\"\",\"address\":\"\",\"remark\":\"\",\"photo_status\":\"no\",\"user_id\":1,\"created_at\":\"2022-06-25T17:02:19.000000Z\",\"updated_at\":\"2022-06-30T16:15:37.000000Z\"}}', '2022-06-30 16:15:45', '2022-06-30 16:15:45'),
(20, 'marketing_teams_log', 'updated', 'App\\Models\\MarketingTeam', 2, 'App\\User', 1, '{\"attributes\":{\"offer_status\":\"sale_offer\",\"code\":\"TNW-000002\",\"marketing_date\":\"2022-06-30 10:45 PM\",\"no\":\"95\",\"road\":\"\\u1007\\u1031\\u101a\\u103b\\u102c\\u1012\\u102e\\u1015\",\"township_id\":\"16\",\"ward\":\"20\",\"property_type_id\":4,\"floor\":\"\",\"house_style\":\"\",\"price\":\"2600\",\"rent_offer_contract_status\":\"\",\"deposit_amount\":\"0\",\"area_width\":\"44\",\"area_height\":\"60\",\"area\":\"9000\",\"area_type\":\"Acre\",\"bcc_status\":\"\",\"owner_status\":\"\",\"lift_status\":\"\",\"property_status\":\"\",\"extra_charge\":\"\",\"rooms\":\"1\",\"shrine\":\"1\",\"bathrooms\":\"1\",\"dining\":\"1\",\"living\":\"1\",\"bedrooms\":\"1\",\"master_bedrooms\":\"1\",\"other_rooms\":\"1\",\"permission_type\":\"permit\",\"grant_type\":\"\\u1021\\u1019\\u100a\\u103a\\u1015\\u1031\\u102b\\u1000\\u103a\",\"orginal_or_copy\":\"Copy\",\"owner_agent\":\"Owner\",\"name\":\"Ko Myo Win\",\"phone\":\"09425313335\",\"email\":\"mgmg@gmail.com\",\"address\":\"Yangon\",\"remark\":\"NO\",\"photo_status\":\"no\",\"user_id\":1,\"created_at\":\"2022-06-25T17:02:19.000000Z\",\"updated_at\":\"2022-06-30T16:16:13.000000Z\"},\"old\":{\"offer_status\":\"sale_offer\",\"code\":\"TNW-000002\",\"marketing_date\":\"2022-06-30 10:45 PM\",\"no\":\"95\",\"road\":\"\\u1007\\u1031\\u101a\\u103b\\u102c\\u1012\\u102e\\u1015\",\"township_id\":\"16\",\"ward\":\"20\",\"property_type_id\":4,\"floor\":\"\",\"house_style\":\"\",\"price\":\"2600\",\"rent_offer_contract_status\":\"\",\"deposit_amount\":\"0\",\"area_width\":\"44\",\"area_height\":\"60\",\"area\":\"9000\",\"area_type\":\"Acre\",\"bcc_status\":\"\",\"owner_status\":\"\",\"lift_status\":\"\",\"property_status\":\"\",\"extra_charge\":\"\",\"rooms\":\"\",\"shrine\":\"\",\"bathrooms\":\"\",\"dining\":\"\",\"living\":\"\",\"bedrooms\":\"\",\"master_bedrooms\":\"\",\"other_rooms\":\"\",\"permission_type\":\"permit\",\"grant_type\":\"\",\"orginal_or_copy\":\"Orginal\",\"owner_agent\":\"Owner\",\"name\":\"Ko Myo Win\",\"phone\":\"09425313335\",\"email\":\"\",\"address\":\"\",\"remark\":\"\",\"photo_status\":\"no\",\"user_id\":1,\"created_at\":\"2022-06-25T17:02:19.000000Z\",\"updated_at\":\"2022-06-30T16:15:45.000000Z\"}}', '2022-06-30 16:16:13', '2022-06-30 16:16:13'),
(21, 'marketing_teams_log', 'updated', 'App\\Models\\MarketingTeam', 3, 'App\\User', 1, '{\"attributes\":{\"offer_status\":\"sale_offer\",\"code\":\"TNW-000003\",\"marketing_date\":\"2022-06-30 10:49 PM\",\"no\":\"90\",\"road\":\"\\u101e\\u1001\\u1004\\u103a\\u1017\\u1005\\u102d\\u1014\\u103a\",\"township_id\":\"16\",\"ward\":\"28\",\"property_type_id\":5,\"floor\":\"\",\"house_style\":\"\",\"price\":\"3500\",\"rent_offer_contract_status\":\"\",\"deposit_amount\":\"0\",\"area_width\":\"40\",\"area_height\":\"60\",\"area\":\"\",\"area_type\":\"Sqft\",\"bcc_status\":\"\",\"owner_status\":\"\",\"lift_status\":\"\",\"property_status\":\"\",\"extra_charge\":\"\",\"rooms\":\"\",\"shrine\":\"\",\"bathrooms\":\"\",\"dining\":\"\",\"living\":\"\",\"bedrooms\":\"\",\"master_bedrooms\":\"\",\"other_rooms\":\"\",\"permission_type\":\"grant\",\"grant_type\":\"SP\",\"orginal_or_copy\":\"Orginal\",\"owner_agent\":\"Agent\",\"name\":\"Housing for All\",\"phone\":\"09400067109\",\"email\":\"\",\"address\":\"\",\"remark\":\"\",\"photo_status\":\"no\",\"user_id\":1,\"created_at\":\"2022-06-25T18:45:39.000000Z\",\"updated_at\":\"2022-06-30T16:19:22.000000Z\"},\"old\":{\"offer_status\":\"sale_offer\",\"code\":\"TNW-000003\",\"marketing_date\":\"2022\\/06\\/25 13:40\",\"no\":\"623\",\"road\":\"\\u101e\\u1001\\u1004\\u103a\\u1017\\u1005\\u102d\\u1014\\u103a\",\"township_id\":\"16\",\"ward\":\"28\",\"property_type_id\":5,\"floor\":\"\",\"house_style\":\"\",\"price\":\"3500\",\"rent_offer_contract_status\":\"\",\"deposit_amount\":\"0\",\"area_width\":\"40\",\"area_height\":\"60\",\"area\":\"\",\"area_type\":\"Sqft\",\"bcc_status\":\"\",\"owner_status\":\"\",\"lift_status\":\"\",\"property_status\":\"\",\"extra_charge\":\"\",\"rooms\":\"\",\"shrine\":\"\",\"bathrooms\":\"\",\"dining\":\"\",\"living\":\"\",\"bedrooms\":\"\",\"master_bedrooms\":\"\",\"other_rooms\":\"\",\"permission_type\":\"grant\",\"grant_type\":\"SP\",\"orginal_or_copy\":\"Orginal\",\"owner_agent\":\"Agent\",\"name\":\"Housing for All\",\"phone\":\"09400067109\",\"email\":\"\",\"address\":\"\",\"remark\":\"\",\"photo_status\":\"no\",\"user_id\":1,\"created_at\":\"2022-06-25T18:45:39.000000Z\",\"updated_at\":\"2022-06-25T18:45:39.000000Z\"}}', '2022-06-30 16:19:22', '2022-06-30 16:19:22'),
(22, 'marketing_teams_log', 'updated', 'App\\Models\\MarketingTeam', 2, 'App\\User', 1, '{\"attributes\":{\"offer_status\":\"sale_offer\",\"code\":\"TNW-000002\",\"marketing_date\":\"2022-06-30 10:45 PM\",\"no\":\"95\",\"road\":\"\\u1007\\u1031\\u101a\\u103b\\u102c\\u1012\\u102e\\u1015\",\"township_id\":\"16\",\"ward\":\"20\",\"property_type_id\":4,\"floor\":\"\",\"house_style\":\"\",\"price\":\"2600\",\"rent_offer_contract_status\":\"\",\"deposit_amount\":\"0\",\"area_width\":\"44\",\"area_height\":\"60\",\"area\":\"9000\",\"area_type\":\"Acre\",\"bcc_status\":\"\",\"owner_status\":\"\",\"lift_status\":\"\",\"property_status\":\"\",\"extra_charge\":\"\",\"rooms\":\"1\",\"shrine\":\"1\",\"bathrooms\":\"1\",\"dining\":\"1\",\"living\":\"1\",\"bedrooms\":\"1\",\"master_bedrooms\":\"1\",\"other_rooms\":\"1\",\"permission_type\":\"permit\",\"grant_type\":\"\\u1021\\u1019\\u100a\\u103a\\u1015\\u1031\\u102b\\u1000\\u103a\",\"orginal_or_copy\":\"Copy\",\"owner_agent\":\"Owner\",\"name\":\"Ko Myo Win\",\"phone\":\"09425313335\",\"email\":\"mgmg@gmail.com\",\"address\":\"Yangon\",\"remark\":\"NO\",\"photo_status\":\"yes\",\"user_id\":1,\"created_at\":\"2022-06-25T17:02:19.000000Z\",\"updated_at\":\"2022-06-30T17:44:03.000000Z\"},\"old\":{\"offer_status\":\"sale_offer\",\"code\":\"TNW-000002\",\"marketing_date\":\"2022-06-30 10:45 PM\",\"no\":\"95\",\"road\":\"\\u1007\\u1031\\u101a\\u103b\\u102c\\u1012\\u102e\\u1015\",\"township_id\":\"16\",\"ward\":\"20\",\"property_type_id\":4,\"floor\":\"\",\"house_style\":\"\",\"price\":\"2600\",\"rent_offer_contract_status\":\"\",\"deposit_amount\":\"0\",\"area_width\":\"44\",\"area_height\":\"60\",\"area\":\"9000\",\"area_type\":\"Acre\",\"bcc_status\":\"\",\"owner_status\":\"\",\"lift_status\":\"\",\"property_status\":\"\",\"extra_charge\":\"\",\"rooms\":\"1\",\"shrine\":\"1\",\"bathrooms\":\"1\",\"dining\":\"1\",\"living\":\"1\",\"bedrooms\":\"1\",\"master_bedrooms\":\"1\",\"other_rooms\":\"1\",\"permission_type\":\"permit\",\"grant_type\":\"\\u1021\\u1019\\u100a\\u103a\\u1015\\u1031\\u102b\\u1000\\u103a\",\"orginal_or_copy\":\"Copy\",\"owner_agent\":\"Owner\",\"name\":\"Ko Myo Win\",\"phone\":\"09425313335\",\"email\":\"mgmg@gmail.com\",\"address\":\"Yangon\",\"remark\":\"NO\",\"photo_status\":\"no\",\"user_id\":1,\"created_at\":\"2022-06-25T17:02:19.000000Z\",\"updated_at\":\"2022-06-30T16:16:13.000000Z\"}}', '2022-06-30 17:44:03', '2022-06-30 17:44:03'),
(23, 'visitors_log', 'created', 'App\\Models\\Models\\Visitor', 2, 'App\\User', 1, '{\"attributes\":{\"name\":\"U Moe\",\"phone\":\"09444161997\",\"email\":\"\",\"address\":\"\",\"remark\":\"\",\"marketing_team_id\":2,\"user_id\":1,\"created_at\":\"2022-06-30T20:42:41.000000Z\",\"updated_at\":\"2022-06-30T20:42:41.000000Z\"}}', '2022-06-30 20:42:41', '2022-06-30 20:42:41'),
(24, 'visitors_log', 'created', 'App\\Models\\Models\\Visitor', 3, 'App\\User', 1, '{\"attributes\":{\"name\":\"U Mya\",\"phone\":\"09444161776\",\"email\":\"\",\"address\":\"\",\"remark\":\"\",\"marketing_team_id\":2,\"user_id\":1,\"created_at\":\"2022-06-30T20:43:10.000000Z\",\"updated_at\":\"2022-06-30T20:43:10.000000Z\"}}', '2022-06-30 20:43:10', '2022-06-30 20:43:10');

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
(1, 'CEO', '2022-06-20 15:52:24', '2022-06-20 15:52:24'),
(2, 'Managing Director', '2022-06-20 15:52:45', '2022-06-20 15:52:45'),
(3, 'Director', '2022-06-20 15:52:58', '2022-06-20 15:52:58'),
(4, 'General Manager', '2022-06-20 15:53:25', '2022-06-20 15:53:25'),
(5, 'Marketing Manager', '2022-06-20 15:53:43', '2022-06-20 15:53:43'),
(6, 'Sale Manager', '2022-06-20 15:53:49', '2022-06-20 15:53:49'),
(7, 'Social Media', '2022-06-20 15:54:03', '2022-06-20 15:54:03'),
(8, 'Marketing Executive', '2022-06-20 15:54:25', '2022-06-20 15:54:25'),
(9, 'Marketing', '2022-06-20 15:54:41', '2022-06-20 15:54:41'),
(10, 'Sale Executive', '2022-06-20 15:54:52', '2022-06-20 15:54:52'),
(11, 'Sale', '2022-06-20 15:56:19', '2022-06-20 15:56:32'),
(12, 'Senior', '2022-06-20 15:58:02', '2022-06-20 15:58:02'),
(13, 'Junior', '2022-06-20 15:58:09', '2022-06-20 15:58:09'),
(14, 'Office Staff', '2022-06-20 15:58:24', '2022-06-20 15:58:24');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `follow_up_status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `follow_up_user_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `follow_ups`
--

INSERT INTO `follow_ups` (`id`, `date_time`, `follow_up_date`, `follow_up_type`, `follow_up_remark`, `additional_note`, `user_id`, `marketing_team_id`, `created_at`, `updated_at`, `follow_up_status`, `follow_up_user_id`) VALUES
(1, '2022-06-18 01:00 PM', '2022-06-18', 'Call', 'Follow-up Remark', NULL, 1, 7, '2022-06-18 18:16:51', '2022-06-18 18:17:39', 'finished', '1');

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
-- Table structure for table `lawyers`
--

CREATE TABLE `lawyers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `degree` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marketing_files`
--

CREATE TABLE `marketing_files` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `original_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marketing_team_id` int(11) DEFAULT NULL,
  `user_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marketing_files`
--

INSERT INTO `marketing_files` (`id`, `photo`, `original_name`, `marketing_team_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'public/marketing_files/ADZqOGH026ICrEsfZjvtMKHOlIBXU1DPkncDO0kY.jpg', 'floor_plan_3.jpeg', 1, '1', '2022-06-23 11:34:47', '2022-06-23 11:34:47'),
(4, 'public/marketing_files/LkuTNITdihuBCIwijwTgE6PUu4rMB01zrfE9N7SJ.jpg', 'floor_plan_3.jpeg', 2, '1', '2022-06-30 17:44:03', '2022-06-30 17:44:03'),
(5, 'public/marketing_files/K0qUgmha5uHdQ4ka4sU2E36IHdPYSYbe3bncv0T5.jpg', 'floor_plan_2.jpeg', 2, '1', '2022-06-30 17:44:03', '2022-06-30 17:44:03'),
(6, 'public/marketing_files/Uz4vSAp5CmXu6oeoKo6OH3RCOQm9SAKGnkdATvDM.jpg', 'floor_plan_1.jpeg', 2, '1', '2022-06-30 17:44:03', '2022-06-30 17:44:03'),
(7, 'public/marketing_files/2EN3HYkPGOpJ105SiyJKo4NoZrcCE2jeK69vDHWR.jpg', 'floor_plan_3.jpeg', 2, '1', '2022-06-30 17:46:56', '2022-06-30 17:46:56'),
(8, 'public/marketing_files/jH5RUqEg9knzq0x5Qi07WvbduJ6qcEBtrmT9920k.jpg', 'floor_plan_2.jpeg', 2, '1', '2022-06-30 17:46:56', '2022-06-30 17:46:56'),
(9, 'public/marketing_files/LMG2Ewm9KDkZ7kM9x57Wcqk789E3QqEee4wpG6nK.jpg', 'floor_plan_1.jpeg', 2, '1', '2022-06-30 17:46:56', '2022-06-30 17:46:56');

-- --------------------------------------------------------

--
-- Table structure for table `marketing_teams`
--

CREATE TABLE `marketing_teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `offer_status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marketing_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `road` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `township_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ward` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_type_id` int(11) DEFAULT NULL,
  `floor` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `house_style` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rent_offer_contract_status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deposit_amount` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_width` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_height` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bcc_status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner_status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lift_status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_charge` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rooms` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shrine` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bathrooms` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dining` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `living` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bedrooms` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `master_bedrooms` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_rooms` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permission_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grant_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orginal_or_copy` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `reject_status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marketing_teams`
--

INSERT INTO `marketing_teams` (`id`, `offer_status`, `code`, `marketing_date`, `no`, `road`, `township_id`, `ward`, `property_type_id`, `floor`, `house_style`, `price`, `rent_offer_contract_status`, `deposit_amount`, `area_width`, `area_height`, `area`, `area_type`, `bcc_status`, `owner_status`, `lift_status`, `property_status`, `extra_charge`, `rooms`, `shrine`, `bathrooms`, `dining`, `living`, `bedrooms`, `master_bedrooms`, `other_rooms`, `permission_type`, `grant_type`, `orginal_or_copy`, `owner_agent`, `name`, `phone`, `email`, `address`, `remark`, `photo_status`, `user_id`, `reject_status`, `created_at`, `updated_at`) VALUES
(2, 'sale_offer', 'TNW-000002', '2022-06-30 10:45 PM', '95', 'ဇေယျာဒီပ', '16', '20', 4, '', '', '2600', '', '0', '44', '60', '9000', 'Acre', '', '', '', '', '', '1', '1', '1', '1', '1', '1', '1', '1', 'permit', 'အမည်ပေါက်', 'Copy', 'Owner', 'Ko Myo Win', '09425313335', 'mgmg@gmail.com', 'Yangon', 'NO', 'yes', 1, NULL, '2022-06-25 17:02:19', '2022-06-30 17:44:03'),
(3, 'sale_offer', 'TNW-000003', '2022-06-30 10:49 PM', '90', 'သခင်ဗစိန်', '16', '28', 5, '', '', '3500', '', '0', '40', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', 'SP', 'Orginal', 'Agent', 'Housing for All', '09400067109', '', '', '', 'no', 1, NULL, '2022-06-25 18:45:39', '2022-06-30 16:19:22'),
(4, 'sale_offer', 'TNW-000004', '2022/06/25 13:48', '354', 'သခင်အုန်းခင်', '16', '28', 3, '', 'Brick Nogging House', '2550', '', '0', '40', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', 'အမည်ပေါက်', 'Orginal', 'Agent', 'မသန်းသန်းဝေ', '09421153967', '', '', '', 'no', 1, NULL, '2022-06-25 18:52:53', '2022-06-25 18:52:53'),
(5, 'sale_offer', 'TNW-000005', '2022/06/25 14:13', '651', 'အောင်သီရိ(၇)', '16', '28', 3, '', 'Steel Structure', '2350', '', '0', '40', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', 'SP', 'Orginal', 'Agent', 'ကိုသောမတ်', '09779919866', '', '', '', 'no', 1, NULL, '2022-06-25 19:16:21', '2022-06-25 19:16:21'),
(6, 'sale_offer', 'TNW-000006', '2022/06/25 14:19', '652', 'အောင်သီရိ(၇)', '16', '28', 3, '', '2RC', '3150', '', '0', '40', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', '', 'Orginal', 'Agent', 'ကိုသောမတ်', '09779919866', '', '', '', 'no', 1, NULL, '2022-06-25 19:23:08', '2022-06-25 19:23:08'),
(7, 'sale_offer', 'TNW-000007', '2022/06/25 14:24', '151', 'ဆရာစံ', '16', '28', 4, '', '', '4100', '', '0', '40', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', 'အမည်ပေါက်', 'Orginal', 'Owner', 'ကိုကျော်မျိုးဝင်း', '09777117936', '', '', '', 'no', 1, NULL, '2022-06-25 19:26:27', '2022-06-25 19:26:27'),
(9, 'sale_offer', 'TNW-000009', '2022/06/24 14:20', '569', 'သမာဓိ(4)လမ္း', '16', '39(B)', 3, '', 'RC', '2000', '', '0', '20', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', '', 'Copy', 'Agent', 'အန္တီမာ', '095172253', '', '', '', 'no', 1, NULL, '2022-06-25 19:30:01', '2022-06-25 19:30:01'),
(10, 'sale_offer', 'TNW-000010', '2022/06/25 14:28', '433', 'အောင်ရိပ်သာ(၂)', '16', '28', 3, '', 'Brick Nogging House', '2800', '', '0', '40', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', 'SP', 'Orginal', 'Owner', 'ဦးဘဟန်', '09254313532', '', '', '', 'no', 1, NULL, '2022-06-25 19:30:39', '2022-06-25 19:30:39'),
(11, 'sale_offer', 'TNW-000011', '2022/06/25 14:32', '23', 'အေးရိပ်သာ(၃)', '16', '28', 3, '', 'Brick Nogging House', '2500', '', '0', '40', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', 'SP', 'Orginal', 'Agent', 'Home GP', '09773264499', '', '', '', 'no', 15, NULL, '2022-06-25 19:34:34', '2022-06-25 19:34:34'),
(12, 'sale_offer', 'TNW-000012', '2022/06/25 14:25', '659', 'ဇေယျာအေးမြ(၁)လမ်း', '16', '31', 3, '', '', '1850', '', '0', '40', '60', '', 'Sqft', '', '', 'No', '', '', '', '', '', '', '', '', '', '', 'grant', 'SP', 'Orginal', 'Agent', 'ကိုစည်သူ', '09-265555044', '', '', 'He is an agent', 'no', 1, NULL, '2022-06-25 19:37:02', '2022-06-25 19:37:02'),
(13, 'sale_offer', 'TNW-000013', '2022/06/25 14:39', '590', 'ဇေယျာသီရိ(၄)လမ်း', '16', '31', 4, '', '', '2000', '', '0', '42', '63', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', 'SP', 'Orginal', 'Agent', 'Housing for all', '09777906630', '', '', '', 'no', 17, NULL, '2022-06-25 19:44:25', '2022-06-25 19:44:25'),
(14, 'sale_offer', 'TNW-000014', '2022/06/19 14:36', '224', 'သစၥာ', '16', '39(A)', 3, '', 'Brick Nogging House', '2400', '', '0', '40', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', 'အမည်ပေါက်', 'Orginal', 'Agent', 'ဦးဆန္းလြင္', '09260194463', '', '', '', 'no', 16, NULL, '2022-06-25 19:54:49', '2022-06-25 19:54:49'),
(15, 'sale_offer', 'TNW-000015', '2022/06/25 14:45', '521', 'ဇေယျာသီရိ(၂)လမ်း', '16', '31', 4, '', '', '1900', '', '0', '40', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'permit', '', 'Orginal', 'Agent', 'Zaw Ye Win', '09798384997', '', '', '', 'no', 17, NULL, '2022-06-25 19:58:25', '2022-06-25 19:58:25'),
(16, 'sale_offer', 'TNW-000016', '2022/06/18 14:55', '446', 'တပင္ေရြွထီး', '16', '39(B)', 3, '', 'Brick Nogging House', '4200', '', '0', '40', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', 'SP', 'Orginal', 'Agent', 'ႈဦးသိန္းတင့္', '09795381077', '', '', '', 'no', 16, NULL, '2022-06-25 20:00:09', '2022-06-25 20:00:09'),
(17, 'sale_offer', 'TNW-000017', '2022/06/17 15:03', '657', 'တပင္ေရြွထီး', '16', '39(B)', 3, '', 'Brick Nogging House', '3600', '', '0', '40', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', 'SP', 'Orginal', 'Agent', 'မသန္းသန္းေဝ', '09421153967', '', '', '', 'no', 16, NULL, '2022-06-25 20:21:18', '2022-06-25 20:21:18'),
(18, 'sale_offer', 'TNW-000018', '2022/06/16 15:29', '173', 'အေကာက္ခြန္(6)', '16', '39(B)', 3, '', 'Brick Nogging House', '1900', '', '0', '40', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', 'GP', '', 'Owner', 'Wutt Yee', '09458183714', '', '', '', 'no', 16, NULL, '2022-06-25 20:47:22', '2022-06-25 20:47:22'),
(19, 'sale_offer', 'TNW-000019', '2022/06/12 16:55', '618', 'ဗိုလ္စြန္ပက္', '16', '39(A)', 4, '', '', '2800', '', '0', '50', '50', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', '', '', 'Agent', 'မခင္ျမတ္မြန္', '09446303788', '', '', '', 'no', 16, NULL, '2022-06-25 22:10:36', '2022-06-25 22:10:36'),
(20, 'sale_offer', 'TNW-000020', '2022/06/12 17:11', '616', 'ဗိုလ္စြန္ပက္', '16', '39(A)', 4, '', '', '2800', '', '0', '50', '50', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', '', '', 'Agent', 'မခင္ျမတ္မြန္', '09446303788', '', '', '', 'no', 16, NULL, '2022-06-25 22:14:31', '2022-06-25 22:14:31'),
(21, 'sale_offer', 'TNW-000021', '2022/06/12 17:15', '558', 'ဗိုလ္စြန္ပက္', '16', '39(A)', 3, '', '', '2500', '', '0', '50', '50', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', '', '', 'Agent', 'မခင္ျမတ္မြန္', '09446303788', '', '', '', 'no', 16, NULL, '2022-06-25 22:17:40', '2022-06-25 22:17:40'),
(22, 'sale_offer', 'TNW-000022', '2022/06/12 17:19', '173', 'အေကာက္ခြန္(6)', '16', '39(B)', 3, '', 'Brick Nogging House', '1900', '', '0', '40', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', '', '', 'Agent', 'ကိုသီဟ', '09250008790', '', '', '', 'no', 16, NULL, '2022-06-25 22:22:21', '2022-06-25 22:22:21'),
(23, 'sale_offer', 'TNW-000023', '2022/06/27 11:17', '572', 'ဗိုလ်ဆွန်ပတ်လမ်း', '16', '39A', 3, '', 'Brick Nogging House', '2500', '', '0', '50', '50', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', '', 'Orginal', 'Agent', 'Ma Khin Myat Mon', '09446303788', '', '', '', 'no', 1, NULL, '2022-06-27 16:29:04', '2022-06-27 16:29:04'),
(24, 'sale_offer', 'TNW-000024', '2022/06/27 11:30', '558', 'ဗိုလ်ဆွန်ပတ်လမ်း', '16', '39(A)', 3, '', 'RC', '2500', '', '0', '50', '50', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', '', 'Orginal', 'Owner', 'Ma Khin Myat Mon', '09446303788', '', '', '', 'no', 1, NULL, '2022-06-27 16:41:58', '2022-06-27 16:41:58'),
(25, 'sale_offer', 'TNW-000025', '2022/06/27 11:43', '616', 'ဗိုလ်ဆွန်ပတ်လမ်း', '16', '39(A)', 4, '', '', '2800', '', '0', '50', '50', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', '', '', 'Agent', 'Ma Khin Myat Mon', '09446303788', '', '', '', 'no', 1, NULL, '2022-06-27 16:52:44', '2022-06-27 16:52:44'),
(26, 'sale_offer', 'TNW-000026', '2022/06/27 11:52', '618', 'ဗိုလ်ဆွန်ပတ်လမ်း', '16', '39(A)', 4, '', '', '2800', '', '0', '50', '50', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', '', 'Orginal', 'Agent', 'Ma Khin Myat Mon', '09446303788', '', '', '', 'no', 1, NULL, '2022-06-27 17:00:23', '2022-06-27 17:00:23'),
(27, 'sale_offer', 'TNW-000027', '2022/06/27 12:04', '657', 'တပင်ရွှေထီး', '16', '39(B)', 3, '', 'Brick Nogging House', '3600', '', '0', '40', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', '', '', 'Agent', 'Ma Than Than Wai', '09421153967', '', '', '', 'no', 1, NULL, '2022-06-27 17:40:19', '2022-06-27 17:40:19'),
(28, 'sale_offer', 'TNW-000028', '2022/06/27 12:41', '173', 'အကောက်ခွန်(၆)လမ်း', '16', '39(B)', 3, '', '(2)Brick Nogging House', '1900', '', '0', '40', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', 'GP', '', 'Owner', 'Wutt Yee', '09458183714', '', '', '', 'no', 1, NULL, '2022-06-27 17:45:35', '2022-06-27 17:45:35'),
(29, 'sale_offer', 'TNW-000029', '2022/06/25 13:10', '66', 'အကောက်ခွန်(၂)', '16', '39(B)', 4, '', '', '2150', '', '0', '40', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', 'အမည်ပေါက်', 'Orginal', 'Owner', 'Thura Yeeyint', '095157035', '', '', '', 'no', 16, NULL, '2022-06-27 18:15:55', '2022-06-27 18:15:55'),
(30, 'sale_offer', 'TNW-000030', '2022/06/25 13:28', '235', 'သစ္စာ', '16', '39(A)', 3, '', '2RC', '2250', '', '0', '20', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', 'အမည်ပေါက်', 'Orginal', 'Agent', 'ဉီးအောင်သန်း', '0943179298', '', '', '', 'no', 16, NULL, '2022-06-27 18:32:54', '2022-06-27 18:32:54'),
(31, 'sale_offer', 'TNW-000031', '2022/08/12 13:37', '103', 'အကောက်ခွန်(၄)', '16', '39(B)', 3, '', '1RC', '2700', '', '0', '40', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', '', 'Orginal', 'Agent', 'ကိုသီဟ', '09250008790, 09449291114', '', '', '', 'no', 16, NULL, '2022-06-27 19:16:16', '2022-06-27 19:16:16'),
(32, 'sale_offer', 'TNW-000032', '2022/06/12 14:16', '487', 'သမာဓိ(၂)', '16', '39(B)', 4, '', '', '1680', '', '0', '40', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', '', 'Orginal', 'Agent', 'ကိုသီဟ', '09250008790, 09449291114', '', '', '', 'no', 16, NULL, '2022-06-27 19:29:53', '2022-06-27 19:29:53'),
(33, 'sale_offer', 'TNW-000033', '2022/06/24 14:31', '99', 'ဗိုလ်စွန်ပက်', '16', '39(B)', 4, '', '', '2700', '', '0', '40', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', '', 'Orginal', 'Agent', 'မဂျူးဂျူး', '09798144912', '', '', '', 'no', 16, NULL, '2022-06-27 19:39:21', '2022-06-27 19:39:21'),
(34, 'sale_offer', 'TNW-000034', '2022/06/12 14:41', '508', 'နတ်မောက်', '16', '39(B)', 3, '', 'ပျဉ်ထောင်အိမ်', '1850', '', '0', '40', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', '', 'Orginal', 'Agent', 'ကိုသီဟ', '09250008790, 09449291114', '', '', '', 'no', 16, NULL, '2022-06-27 19:46:44', '2022-06-27 19:46:44'),
(35, 'sale_offer', 'TNW-000035', '2022/06/12 15:44', '361', 'နတ်မောက်', '16', '39(B)', 3, '', 'ပျဉ်ထောင်အိမ်', '1800', '', '0', '40', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', '', 'Orginal', 'Agent', 'ကိုသီဟ', '09250008790, 09449291114', '', '', '', 'no', 16, NULL, '2022-06-27 20:47:17', '2022-06-27 20:47:17'),
(36, 'sale_offer', 'TNW-000036', '2022/06/12 15:47', '224', 'သစ္စာ', '16', '39(A)', 3, '', 'Brick Nogging House', '2150', '', '0', '40', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', '', 'Orginal', 'Agent', 'ကိုသီဟ', '09250008790, 09449291114', '', '', '', 'no', 16, NULL, '2022-06-27 20:51:52', '2022-06-27 20:51:52'),
(37, 'sale_offer', 'TNW-000037', '2022/06/11 15:53', '275', 'ဥဿဖယား', '16', '39(B)', 4, '', '', '2650', '', '0', '40', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', 'အမည်ပေါက်', 'Orginal', 'Agent', 'မဂျူးဂျူး', '09798144912', '', '', '', 'no', 16, NULL, '2022-06-27 20:57:53', '2022-06-27 20:57:53'),
(38, 'sale_offer', 'TNW-000038', '2022/06/27 15:57', '379', 'အောင်ရိပ်သာ(၄)', '16', '28', 3, '', '', '2300', '', '0', '40', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', 'SP', 'Orginal', 'Agent', 'မမော်လီ', '09-791977762', '', '', '', 'no', 15, NULL, '2022-06-27 21:01:32', '2022-06-27 21:01:32'),
(39, 'sale_offer', 'TNW-000039', '2022/06/27 16:04', '429', 'အောင်ရိပ်သာ(2)', '16', '28', 3, '', '', '2200', '', '0', '44', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', 'SP', '', 'Owner', 'ကိုမျိုးဝင်း', '095114569', '', '', '', 'no', 15, NULL, '2022-06-27 21:05:50', '2022-06-27 21:05:50'),
(40, 'sale_offer', 'TNW-000040', '2022/06/27 16:07', '97', 'အောင်ရတနာ', '16', '28', 4, '', '', '2850', '', '0', '46', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', 'SP', '', 'Owner', 'ကိုမျိုးဝင်း', '09-5114569', '', '', '', 'no', 15, NULL, '2022-06-27 21:08:59', '2022-06-27 21:08:59'),
(41, 'sale_offer', 'TNW-000041', '2022/06/27 16:21', '280', 'အောင်တံခွန်(၂)', '16', '29', 4, '', '', '2550', '', '0', '45', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', 'အမည်ပေါက်', '', 'Owner', 'Thae Darli Win Kyaw', '09-958471358, 09-423333121', '', '', '', 'no', 15, NULL, '2022-06-27 21:29:12', '2022-06-27 21:29:12'),
(42, 'sale_offer', 'TNW-000042', '2022/06/27 16:30', '12', 'နွယ်သာကီ', '16', '29', 4, '', '', '1150', '', '0', '20', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', 'အမည်ပေါက်', '', 'Agent', 'မအေးမြတ်', '09-250190987', '', '', '', 'no', 15, NULL, '2022-06-27 21:34:27', '2022-06-27 21:34:27'),
(43, 'sale_offer', 'TNW-000043', '2022/06/11 16:10', '65', 'သစၥာ', '16', '39(A)', 3, '', 'Brick Nogging House', '2000', '', '0', '40', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ancestral_land', '', 'Orginal', 'Agent', 'မဂ်ူးဂ်ူး', '09798144912', '', '', '', 'no', 16, NULL, '2022-06-27 21:40:56', '2022-06-27 21:40:56'),
(44, 'sale_offer', 'TNW-000044', '2022/06/27 16:48', '95', 'ဇေယျာလမ်း', '16', '31', 4, '', '', '2600', '', '0', '40', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', '', 'Orginal', 'Agent', 'Ko Tun Tun', '09-254297373', '', '', '', 'no', 16, NULL, '2022-06-27 21:51:53', '2022-06-27 21:51:53'),
(45, 'sale_offer', 'TNW-000045', '2022/06/10 16:41', '350', 'နီလာနွင့္ နတ္ေမာက္ေထာင့္', '16', '39(B)', 3, '', 'ပျဉ်ထောင်အိမ်', '1330', '', '0', '27', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'permit', '', 'Copy', 'Owner', '႔႔႔႔Yadanar Aung', '095403874', '', '', '', 'no', 16, NULL, '2022-06-27 21:55:33', '2022-06-27 21:55:33'),
(46, 'sale_offer', 'TNW-000046', '2022/06/27 16:53', '306', 'ဇေယျာသိန္ဒီ', '16', '31', 4, '', '', '1950', '', '0', '40', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', 'SP', '', 'Agent', 'မဂျူးဂျူး', '09-798144912', '', '', '', 'no', 16, NULL, '2022-06-27 21:58:15', '2022-06-27 21:58:15'),
(47, 'sale_offer', 'TNW-000047', '2022/06/27 16:58', '24', 'သခင်ဗစိန်', '16', '31', 4, '', '', '3000', '', '0', '40', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', '', '', 'Agent', 'Ma Shwe Theint', '09-43152679', '', '', '', 'no', 16, NULL, '2022-06-27 22:01:21', '2022-06-27 22:01:21'),
(48, 'sale_offer', 'TNW-000048', '2022/06/27 17:01', '29', 'သခင်ဗစိန်', '16', '31', 3, '', 'RC', '2700', '', '0', '20', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', '', '', 'Agent', 'Ma Shwe Theint', '09-43152679', '', '', '', 'no', 16, NULL, '2022-06-27 22:04:38', '2022-06-27 22:04:38'),
(49, 'sale_offer', 'TNW-000049', '2022/06/27 17:04', '123', 'ဇေယျာဒီပလမ်း', '16', '31', 3, '', 'Brick Nogging House', '1150', '', '0', '20', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', 'SP', 'Orginal', 'Agent', 'Ma Ju Ju', '09-798144912', '', '', '', 'no', 16, NULL, '2022-06-27 22:07:10', '2022-06-27 22:07:10'),
(50, 'sale_offer', 'TNW-000050', '2022/06/27 17:08', '292', 'လှိုင်သီတာလမ်း', '16', '31', 4, '', '', '2500', '', '0', '40', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', '', '', 'Agent', 'Ma Marlar', '09-423749778', '', '', '', 'no', 16, NULL, '2022-06-27 22:11:08', '2022-06-27 22:11:08'),
(51, 'sale_offer', 'TNW-000051', '2022/06/02 16:55', '440', 'ဘုရင့္ေနာင္', '16', '39(A)', 5, '', '', '4000', '', '0', '40', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', '', 'Orginal', 'Agent', 'မသန္းသန္းေဝ', '09421153967', '', '', '', 'no', 16, NULL, '2022-06-27 22:11:54', '2022-06-27 22:11:54'),
(52, 'sale_offer', 'TNW-000052', '2022/06/27 17:11', '67', 'ဇေယျာဒီပလမ်း', '16', '31', 3, '', 'ပျဉ်ထောင် အုတ်တွဲ', '3500', '', '0', '57', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', '', '', 'Agent', 'ဆရာမြ', '09-5143286', '', '', '', 'no', 16, NULL, '2022-06-27 22:20:03', '2022-06-27 22:20:03'),
(53, 'sale_offer', 'TNW-000053', '2022/06/27 17:20', '839(A)', 'လှိုင်စံပယ်လမ်း', '16', '31', 3, '', 'RC', '4000', '', '0', '27', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', '', 'Orginal', 'Owner', 'Thiri Hlaing', '09-967975500', '', '', '', 'no', 16, NULL, '2022-06-27 22:22:19', '2022-06-27 22:22:19'),
(54, 'sale_offer', 'TNW-000054', '2022/06/28 10:24', '948', 'အောင်မေတ္တာ', '16', '29', 3, '', 'Brick Nogging House', '2500', '', '0', '40', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', 'အမည်ပေါက်', '', 'Agent', 'မအေးမြတ်', '09-250190987', '', '', '', 'no', 15, NULL, '2022-06-28 15:26:25', '2022-06-28 15:26:25'),
(55, 'sale_offer', 'TNW-000055', '2022/06/28 10:31', '853', 'အောင်သစ္စာ(၃)', '16', '29', 3, '', 'Brick Nogging House', '2500', '', '0', '40', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'grant', 'အမည်ပေါက်', '', 'Owner', 'မအေးမြတ်', '09-250190987', '', '', '', 'no', 15, NULL, '2022-06-28 15:35:20', '2022-06-28 15:35:20'),
(56, 'sale_offer', NULL, '2022-06-30 10:44 PM', '99', 'ဇေယျာဒီပ', '16', '31', 4, '', '', '2600', '', '0', '44', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'permit', '', 'Orginal', 'Owner', 'Ko Myo Win', '09425313335', '', '', '', 'no', 1, NULL, '2022-06-30 16:14:48', '2022-06-30 16:14:48'),
(57, 'sale_offer', NULL, '2022-06-30 10:44 PM', '96', 'ဇေယျာဒီပ', '16', '31', 4, '', '', '2600', '', '0', '44', '60', '', 'Sqft', '', '', '', '', '', '', '', '', '', '', '', '', '', 'permit', '', 'Orginal', 'Owner', 'Ko Myo Win', '09425313335', '', '', '', 'no', 1, NULL, '2022-06-30 16:14:52', '2022-06-30 16:14:52');

-- --------------------------------------------------------

--
-- Table structure for table `marketing_team_counts`
--

CREATE TABLE `marketing_team_counts` (
  `id` int(10) UNSIGNED NOT NULL,
  `offer_status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marketing_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marketing_team_counts`
--

INSERT INTO `marketing_team_counts` (`id`, `offer_status`, `code`, `marketing_date`, `created_at`, `updated_at`) VALUES
(1, 'sale_offer', 'TNW-000001', '2022-06-25 02:27 PM', '2022-06-25 07:57:53', '2022-06-25 07:57:53');

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
(20, '2022_06_17_152826_create_rejects_table', 12),
(21, '2022_06_17_153047_add_reject_field_to_marketing_teams_table', 13),
(23, '2022_06_17_232918_add_follow_user_to_follow_ups_table', 15),
(24, '2022_06_18_005118_add_login_info_to_users_table', 16),
(26, '2022_06_18_012525_create_web_authn_tables', 17),
(27, '2022_06_18_091559_create_marketing_files_table', 18),
(28, '2022_06_18_114637_create_lawyers_table', 19),
(29, '2022_06_20_121631_add_employee_photo_to_users_table', 19),
(30, '2022_06_22_174842_create_wards_table', 20),
(33, '2022_06_23_123505_create_marketing_team_counts_table', 22),
(34, '2022_06_16_110109_create_marketing_teams_table', 23),
(36, '2022_07_01_024024_create_visitors_table', 24);

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
(4, 'App\\User', 12),
(4, 'App\\User', 13),
(4, 'App\\User', 14),
(4, 'App\\User', 15),
(5, 'App\\User', 1),
(5, 'App\\User', 6),
(5, 'App\\User', 10),
(5, 'App\\User', 11);

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
(14, 'Penthouse', 'Penthouse', '1', NULL, NULL);

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
  `employment_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login_at` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login_ip` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `employee_id`, `phone`, `nrc_number`, `gender`, `address`, `department_id`, `contact_person`, `emergency_contact`, `join_date`, `employment_type`, `last_login_at`, `last_login_ip`, `agent`, `employee_photo`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$iY.PTOOlASzaLY549BHGH.aQorS3bbzjX7P9wcQ2QbJH/sGWI0aXa', NULL, '2022-05-25 07:46:08', '2022-06-30 16:07:49', 'EMP-0001', '09444161997', '5/abc(n)009112', 'male', 'Yangon', 1, NULL, NULL, '0001-01-20', 'Probation', '2022-06-30 22:37:49', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', ''),
(11, 'Ma Thu Thu', 'thuthu19501@gmail.com', NULL, '$2y$10$p3QjaT5H7QjW7Y2AvMmVTupnl8nqLEd.Co3hk1OJati4vOis.pCou', NULL, '2022-06-18 17:16:43', '2022-06-25 17:09:46', 'EMP-0002', '09425313335', '12/MAYAKA(N)139326', 'male', 'North Dagon', 2, NULL, NULL, '2022-06-18', 'Probation', '2022-06-18 15:44:24', '103.70.249.206', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.124 Safari/537.36 Edg/102.0.1245.44', ''),
(12, 'Ko Pyae Phyo', 'kopyaephyo2626@gmail.com', NULL, '$2y$10$j7UUecvkT8qFeNuJ/vjGXO50DHsDko1u5pfXjPgFOYD.kPt44BMQS', NULL, '2022-06-18 17:22:02', '2022-06-25 17:10:01', 'EMP-0003', '09268858885', '12/OKAMA(N)199658', 'male', 'Nortg Dagon', 2, NULL, NULL, '2022-06-18', 'Probation', '2022-06-18 12:23:33', '103.70.249.206', 'Mozilla/5.0 (Linux; Android 12; SM-G986N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Mobile Safari/537.36', ''),
(13, 'U Kyaw', 'ukaywgyi269@gmail.com', NULL, '$2y$10$qcvC.TrqosUiIwNd1ZoIJ.797p39UUzIGnKbl8ka4k/RaKB/8pBxC', NULL, '2022-06-18 17:29:29', '2022-06-25 17:10:16', 'EMP-0004', '09448025742', '12/OKAMA(N)103225', 'male', 'North Dagon', 1, NULL, NULL, '2022-06-18', 'Probation', NULL, NULL, NULL, ''),
(14, 'Ko Soe Thu Ya', 'soegyi11045678@gmail.com', NULL, '$2y$10$HAbf2MfF/qpApTIpXqJnD.j1oSqRueLKr.w4XhbRWipEtrTlqsyv6', NULL, '2022-06-18 21:00:32', '2022-06-25 19:28:11', 'EMP-0005', '09420107021', '12/Dakaya(N)016945', 'male', 'North Dagon', 7, NULL, NULL, '2022-06-18', 'Probation', '2022-06-25 14:28:11', '45.125.4.189', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', ''),
(15, 'Ma Theint Dar Li Lin', 'theint6966@gmail.com', NULL, '$2y$10$/JvjOpcojWZj1g1VhckGQeouMN9dUncKAntl8Eam7CP2DFe.UJwvu', NULL, '2022-06-25 19:11:17', '2022-06-27 20:52:57', 'EMP0006', '09989048170', '12/DaGaYa(C)020667', 'female', 'NO,915.thakywal street,12 Ward', 7, NULL, NULL, '25.6.22', 'Other', '2022-06-27 15:52:57', '103.70.249.211', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', ''),
(16, 'Ma April Sein Myint', 'kimhwarhyung@gmail.com', NULL, '$2y$10$CcqbAStL5Fjop3/giyGuVuBK2ORXPHCYcmXHcklZlQYgiPjpieLN.', NULL, '2022-06-25 19:17:21', '2022-06-27 21:08:38', 'EMP0007', '09890489953', '12/DaGaMa(N)035756', 'female', 'No,115.Thuya street,38Ward,North Dagon', 7, NULL, NULL, '25.6.2022', 'Other', '2022-06-27 16:08:38', '103.70.249.211', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', ''),
(17, 'Ma  Thet Lyar Nwe Tun', 'thetlyar024@gmail.com', NULL, '$2y$10$T1NUeaxYXygUiynfX09j5u8gH3cwEhu3HrhEjNbRzgDNN6mJYIITi', NULL, '2022-06-25 19:24:27', '2022-06-25 22:03:17', 'EMP0008', '09791110876', '12/OuKaTa(N)194079', 'female', 'No-389,Min Khaung street,6Ward,South Okkala', 7, NULL, NULL, '25.6.2022', 'Other', '2022-06-25 17:03:17', '103.70.249.250', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marketing_team_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `name`, `phone`, `email`, `address`, `remark`, `marketing_team_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'U Mg Mg Soe', '09444161997', '', '', '', 2, 1, '2022-06-30 20:36:39', '2022-06-30 20:36:39'),
(2, 'U Moe', '09444161997', '', '', '', 2, 1, '2022-06-30 20:42:41', '2022-06-30 20:42:41'),
(3, 'U Mya', '09444161776', '', '', '', 2, 1, '2022-06-30 20:43:10', '2022-06-30 20:43:10');

-- --------------------------------------------------------

--
-- Table structure for table `wards`
--

CREATE TABLE `wards` (
  `id` int(10) UNSIGNED NOT NULL,
  `township_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `township_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ward_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wards`
--

INSERT INTO `wards` (`id`, `township_id`, `township_name`, `ward_no`, `created_at`, `updated_at`) VALUES
(1, '16', '', '16 (CAIB)', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(2, '16', '', '27', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(3, '16', '', '28', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(4, '16', '', '29', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(5, '16', '', '30', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(6, '16', '', '31', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(7, '16', '', '32', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(8, '16', '', '33', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(9, '16', '', '34', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(10, '16', '', '35', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(11, '16', '', '36', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(12, '16', '', '37', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(13, '16', '', '38', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(14, '16', '', '39(AIB)', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(15, '16', '', '40', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(16, '16', '', '41', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(17, '16', '', '42', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(18, '16', '', '43', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(19, '16', '', '44', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(20, '16', '', '45', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(21, '16', '', '46', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(22, '16', '', '47', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(23, '16', '', '48 (U9)', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(24, '16', '', '48 (U10)', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(25, '16', '', '49', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(26, '16', '', '50', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(27, '16', '', '51', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(28, '15', '', 'UE 1', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(29, '15', '', '1', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(30, '15', '', '2', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(31, '15', '', '3', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(32, '15', '', '4', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(33, '15', '', '5', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(34, '15', '', '6', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(35, '15', '', '7', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(36, '15', '', '8', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(37, '15', '', '9', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(38, '15', '', '10', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(39, '15', '', '11', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(40, '15', '', '12', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(41, '15', '', '13', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(42, '15', '', '14', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(43, '15', '', '15', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(44, '15', '', '52', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(45, '15', '', '108', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(46, '15', '', '117', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(47, '15', '', '118', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(48, '15', '', '119', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(49, '15', '', '120', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(50, '15', '', '121', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(51, '15', '', '122', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(52, '15', '', '123', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(53, '15', '', '124', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(54, '15', '', '125', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(55, '15', '', '126', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(56, '15', '', '127', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(57, '15', '', '128', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(58, '15', '', '129', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(59, '15', '', '130', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(60, '15', '', '131', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(61, '15', '', '132', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(62, '15', '', '133', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(63, '15', '', '134', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(64, '15', '', '135', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(65, '15', '', '136', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(66, '15', '', '137', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(67, '15', '', '138', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(68, '15', '', '139', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(69, '15', '', '155', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(70, '15', '', '156', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(71, '15', '', '157', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(72, '15', '', '158', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(73, '18', '', '60', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(74, '18', '', '61', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(75, '18', '', '69', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(76, '18', '', '58', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(77, '18', '', '59', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(78, '18', '', '68', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(79, '18', '', '77', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(80, '18', '', '78', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(81, '18', '', '79', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(82, '18', '', '80', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(83, '18', '', '81', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(84, '18', '', '82', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(85, '18', '', '83', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(86, '18', '', '84', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(87, '18', '', '85', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(88, '18', '', '86', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(89, '18', '', '87', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(90, '18', '', '88', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(91, '18', '', '89', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(92, '18', '', '90', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(93, '18', '', '91', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(94, '18', '', '148', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(95, '18', '', '149', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(96, '18', '', '150', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(97, '18', '', '151', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(98, '18', '', '168 (အပိုင် 1)', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(99, '18', '', '168 (အပိုင် 2)', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(100, '18', '', '168 (အပိုင် 3)', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(101, '18', '', '168 (အပိုင် 4)', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(102, '18', '', '168 (အပိုင် 5)', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(103, '17', '', '17', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(104, '17', '', '18', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(105, '17', '', '19', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(106, '17', '', '20', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(107, '17', '', '21', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(108, '17', '', '22', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(109, '17', '', '23', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(110, '17', '', '24', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(111, '17', '', '25', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(112, '17', '', '26', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(113, '17', '', '53', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(114, '17', '', '54', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(115, '17', '', '55', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(116, '17', '', '56', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(117, '17', '', '57', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(118, '17', '', '70', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(119, '17', '', '71', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(120, '17', '', '72', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(121, '17', '', '73', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(122, '17', '', '74', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(123, '17', '', '75', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(124, '17', '', '76', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(125, '17', '', '63', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(126, '17', '', '64', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(127, '17', '', '65', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(128, '17', '', '104', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(129, '17', '', '105', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(130, '17', '', '106', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(131, '17', '', '107', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(132, '17', '', '140', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(133, '17', '', '141', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(134, '17', '', '142', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(135, '17', '', '143', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(136, '17', '', '144', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(137, '17', '', '145', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(138, '17', '', '146', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(139, '17', '', '147', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(140, '17', '', '152', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(141, '17', '', '153', '2022-06-15 10:25:37', '2022-06-15 10:25:37'),
(142, '17', '', '154', '2022-06-15 10:25:37', '2022-06-15 10:25:37');

-- --------------------------------------------------------

--
-- Table structure for table `web_authn_credentials`
--

CREATE TABLE `web_authn_credentials` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transports` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `attestation_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trust_path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `aaguid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `public_key` blob NOT NULL,
  `counter` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_handle` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `disabled_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `web_authn_credentials`
--

INSERT INTO `web_authn_credentials` (`id`, `user_id`, `name`, `type`, `transports`, `attestation_type`, `trust_path`, `aaguid`, `public_key`, `counter`, `user_handle`, `created_at`, `updated_at`, `disabled_at`) VALUES
('ATATSAei58u0J_0EJ3u0nund2Fp46_GlWNDrmh8_oNUf82JJVCAX-25sCzrG9jcLokhxl97IP86avOf0Xpk7xs8', 1, NULL, 'public-key', '[]', 'none', '{\"type\":\"Webauthn\\\\TrustPath\\\\EmptyTrustPath\"}', '00000000-0000-0000-0000-000000000000', 0xa5010203262001215820261f007df9db49e44743068572ab827efe2938446351ad480444ac43d310bc6d225820ff1c3fb7aebbc8b8261a29c510c57f3a472f74732eaebb1c8fc536d43ece2808, 0, 'f6c38825-db68-471a-999b-afe47eb98cb9', '2022-06-17 20:08:07', '2022-06-17 20:08:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `web_authn_recoveries`
--

CREATE TABLE `web_authn_recoveries` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `lawyers`
--
ALTER TABLE `lawyers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marketing_files`
--
ALTER TABLE `marketing_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marketing_teams`
--
ALTER TABLE `marketing_teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marketing_team_counts`
--
ALTER TABLE `marketing_team_counts`
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
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wards`
--
ALTER TABLE `wards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_authn_credentials`
--
ALTER TABLE `web_authn_credentials`
  ADD PRIMARY KEY (`id`,`user_id`);

--
-- Indexes for table `web_authn_recoveries`
--
ALTER TABLE `web_authn_recoveries`
  ADD KEY `web_authn_recoveries_email_index` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `follow_ups`
--
ALTER TABLE `follow_ups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `interest_rates`
--
ALTER TABLE `interest_rates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lawyers`
--
ALTER TABLE `lawyers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marketing_files`
--
ALTER TABLE `marketing_files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `marketing_teams`
--
ALTER TABLE `marketing_teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `marketing_team_counts`
--
ALTER TABLE `marketing_team_counts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `townships`
--
ALTER TABLE `townships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=326;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wards`
--
ALTER TABLE `wards`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

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
