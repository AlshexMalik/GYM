-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2024 at 10:18 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gymbody`
--

-- --------------------------------------------------------

--
-- Table structure for table `cartexercises`
--

CREATE TABLE `cartexercises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exercise_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coach_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requist_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `repetion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cartexercises`
--

INSERT INTO `cartexercises` (`id`, `user_id`, `exercise_id`, `coach_id`, `requist_id`, `repetion`, `day`, `created_at`, `updated_at`) VALUES
(39, '7', '1', '4', '8', '15-15-15', '1', '2023-09-07 03:12:54', '2023-09-07 03:12:54'),
(40, '7', '6', '4', '8', '15-12-10', '1', '2023-09-07 03:28:29', '2023-09-07 03:28:29'),
(41, '7', '10', '4', '8', '12-10-10-8', '1', '2023-09-07 03:28:33', '2023-09-07 03:28:33'),
(42, '7', '11', '4', '8', '15-12-10', '1', '2023-09-07 03:28:38', '2023-09-07 03:28:38'),
(43, '7', '4', '4', '8', '15-15-15', '2', '2023-09-07 03:28:42', '2023-09-07 03:28:42'),
(44, '7', '14', '4', '8', '15-12-10', '2', '2023-09-07 03:28:56', '2023-09-07 03:28:56'),
(45, '7', '9', '4', '8', '15-12-10', '2', '2023-09-07 03:31:52', '2023-09-07 03:31:52'),
(46, '7', '2', '4', '8', '15-12-10', '2', '2023-09-07 03:31:59', '2023-09-07 03:31:59'),
(47, '7', '7', '4', '8', '15-15-15', '3', '2023-09-07 03:32:05', '2023-09-07 03:32:05'),
(57, '8', '1', '5', '11', '15-12-10', '3', '2023-09-07 05:23:38', '2023-09-07 05:23:38'),
(58, '8', '2', '5', '11', '15-12-10', '3', '2023-09-07 05:23:42', '2023-09-07 05:23:42'),
(59, '8', '3', '5', '11', '12-10-10-8', '3', '2023-09-07 05:23:46', '2023-09-07 05:23:46'),
(60, '8', '4', '5', '11', '12-10-10-8', '3', '2023-09-07 05:23:50', '2023-09-07 05:23:50'),
(61, '8', '6', '5', '11', '12-10-10-8', '3', '2023-09-07 05:23:54', '2023-09-07 05:23:54'),
(69, '2', '7', '4', '20', '12-10-10-8', 'nullo', '2023-11-26 03:02:34', '2023-11-26 03:02:34'),
(70, '2', '4', '4', '20', '15-12-10', 'nullo', '2023-11-26 03:02:41', '2023-11-26 03:02:41'),
(71, '2', '6', '4', '20', '15-12-10', 'nullo', '2023-11-26 03:02:47', '2023-11-26 03:02:47'),
(72, '2', '16', '4', '20', '15-12-10', 'nullo', '2023-11-26 03:02:54', '2023-11-26 03:02:54'),
(73, '2', '18', '4', '20', '15-15-15', 'nullo', '2023-11-26 03:03:00', '2023-11-26 03:03:00');

-- --------------------------------------------------------

--
-- Table structure for table `courserequist`
--

CREATE TABLE `courserequist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wieght` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coach` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statuse` enum('active','deactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `up_front` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `up_back` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `up_left` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `up_right` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `do_front` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `do_back` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courserequist`
--

INSERT INTO `courserequist` (`id`, `userid`, `cover_text`, `hight`, `wieght`, `coach`, `statuse`, `up_front`, `up_back`, `up_left`, `up_right`, `do_front`, `do_back`, `created_at`, `updated_at`) VALUES
(1, '2', 'dfghjkl', '160', '78', '3', 'deactive', '2023082712380-900x900h.JPG', '2023082712380-900x900h.JPG', '2023082712380-900x900h.JPG', '2023082712380-900x900h.JPG', '2023082712380-900x900h.JPG', '2023082712380-900x900h.JPG', NULL, NULL),
(4, '2', 'wertyuiiutc kujygtrfewfty jhggyuyityjthrge kuyjthrgewjk jyhtrtjkjtehrgghr tjkyjthr jykujt tykujhtg kyujth kuyjthr kyujr', '160', '78', '5', 'deactive', '20230828New-BCF-Logo.png', '20230828New-BCF-Logo.png', '20230828New-BCF-Logo.png', '20230828New-BCF-Logo.png', '20230828New-BCF-Logo.png', '20230828New-BCF-Logo.png', NULL, NULL),
(6, '6', 'ertgfeffe', '150', '50', '3', 'deactive', '2023082899.PNG', '2023082899.PNG', '2023082812380-900x900h.JPG', '2023082812380-900x900h.JPG', '2023082812380-900x900h.JPG', '2023082812380-900x900h.JPG', NULL, NULL),
(7, '6', 'rfevff', '166', '555', '4', 'deactive', '2023083099.PNG', '20230830561870Image1.jpg', '20230830aa.jpg', '20230830activityinfo.jpg', '20230830bus.PNG', '20230830Screenshot 2023-05-11 094907.png', NULL, NULL),
(8, '7', 'Some of the button styles use a relatively light foreground color, and should only be used on a dark', '155', '45', '4', 'deactive', '2023083112380-900x900h.JPG', '2023083112380-900x900h.JPG', '2023083112380-900x900h.JPG', '2023083112380-900x900h.JPG', '2023083112380-900x900h.JPG', '2023083112380-900x900h.JPG', NULL, NULL),
(9, '8', 'ewfcrefrdfref frfrewfg f45g 43tg45t', '99', '55', '4', 'deactive', '2023083112380-900x900h.JPG', '20230831561870Image1.jpg', '2023083112380-900x900h.JPG', '20230831aa.jpg', '20230831activityinfo.jpg', '20230831bus.PNG', NULL, NULL),
(10, '8', 'please please', '160', '80', '5', 'deactive', '20230907New-BCF-Logo.png', '20230907bus.PNG', '20230907activityinfo.jpg', '20230907new.PNG', '20230907viber_image_2023-04-03_14-13-01-425.jpg', '20230907viber_image_2023-04-04_10-38-24-561.jpg', NULL, NULL),
(11, '8', 'ertyliujyhyui', '55', '10', '5', 'deactive', '20230907new.PNG', '20230907activityinfo.jpg', '2023090712380-900x900h.JPG', '2023090712380-900x900h.JPG', '20230907New-BCF-Logo.png', '2023090712380-900x900h.JPG', NULL, NULL),
(12, '7', '3rtgewfr', '120', '25', '5', 'active', '2023090712380-900x900h.JPG', '2023090712380-900x900h.JPG', '2023090799.PNG', '2023090799.PNG', '20230907561870Image1.jpg', '2023090799.PNG', '0000-00-00 00:00:00', '2023-09-07 04:50:54'),
(13, '8', 'fthjyuhgtf', '55', '10', '5', 'deactive', '20230907561870Image1.jpg', '20230907561870Image1.jpg', '20230907561870Image1.jpg', '20230907561870Image1.jpg', '20230907561870Image1.jpg', '20230907561870Image1.jpg', '2023-09-07 05:18:06', '2023-09-07 05:18:06'),
(14, '8', 'fthjyuhgtf', '55', '10', '5', 'deactive', '20230907561870Image1.jpg', '20230907561870Image1.jpg', '20230907561870Image1.jpg', '20230907561870Image1.jpg', '20230907561870Image1.jpg', '20230907561870Image1.jpg', '2023-09-07 05:18:34', '2023-09-07 05:18:34'),
(15, '8', 'fthjyuhgtf', '55', '10', '5', 'deactive', '20230907561870Image1.jpg', '20230907561870Image1.jpg', '20230907561870Image1.jpg', '20230907561870Image1.jpg', '20230907561870Image1.jpg', '20230907561870Image1.jpg', '2023-09-07 05:18:37', '2023-09-07 05:18:37'),
(16, '8', 'fthjyuhgtf', '55', '10', '5', 'deactive', '20230907561870Image1.jpg', '20230907561870Image1.jpg', '20230907561870Image1.jpg', '20230907561870Image1.jpg', '20230907561870Image1.jpg', '20230907561870Image1.jpg', '2023-09-07 05:18:46', '2023-09-07 05:18:46'),
(17, '8', 'rgthttr', '55', '10', '5', 'deactive', '2023090712380-900x900h.JPG', '20230907561870Image1.jpg', '2023090712380-900x900h.JPG', '2023090712380-900x900h.JPG', '2023090712380-900x900h.JPG', '2023090712380-900x900h.JPG', '2023-09-07 08:22:35', '2023-09-07 08:22:35'),
(18, '6', '\\][poiuytrewrtyju\'[p\r\n\'jyutrewrfgt', '1501', '50', '5', 'deactive', '2023091012380-900x900h.JPG', '2023091012380-900x900h.JPG', '2023091012380-900x900h.JPG', '2023091012380-900x900h.JPG', '2023091012380-900x900h.JPG', '2023091012380-900x900h.JPG', '2023-09-10 10:44:22', '2023-09-10 10:44:22'),
(19, '6', 'werthyjulkjuhyfedsa', '150', '505', '5', 'active', '2023091012380-900x900h.JPG', '2023091012380-900x900h.JPG', '20230910New-BCF-Logo.png', '20230910New-BCF-Logo.png', '2023091012380-900x900h.JPG', '2023091012380-900x900h.JPG', '2023-09-10 10:48:19', '2023-09-10 10:48:19'),
(20, '2', 'uiyutresgr yukyjhrg iuluy ,imunyf .ukiyuhtr kujyhtgr', '160', '78', '4', 'deactive', '20231126school2.jpg', '20231126Screenshot 2023-07-03 130433.png', '20231126Screenshot 2023-07-03 130433.png', '20231126Screenshot 2023-07-03 130433.png', '20231126Screenshot 2023-07-03 130433.png', '20231126Screenshot 2023-07-03 130433.png', '2023-11-26 05:59:51', '2023-11-26 05:59:51'),
(21, '6', 'htth', '150', '50', '5', 'active', '20240122New-BCF-Logo.png', '20240122New-BCF-Logo.png', '20240122New-BCF-Logo.png', '20240122New-BCF-Logo.png', '20240122New-BCF-Logo.png', '20240122New-BCF-Logo.png', '2024-01-22 12:54:10', '2024-01-22 12:54:10');

-- --------------------------------------------------------

--
-- Table structure for table `exercises`
--

CREATE TABLE `exercises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary_muscle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assist_muscle_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assist_muscle_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exercises`
--

INSERT INTO `exercises` (`id`, `name`, `photo`, `details`, `primary_muscle`, `assist_muscle_1`, `assist_muscle_2`, `created_at`, `updated_at`) VALUES
(1, 'Arm-Circles_Shoulders', '20230816Arm-Circles_Shoulders.gif', 'For bigger arm and shoulder use thi', 'Shoulder', 'Chest', 'Arm', '2023-08-16 09:57:30', '2023-08-16 09:57:30'),
(2, 'Baebell-Bench-Press', '20230816Barbell-Bench-Press.gif', 'For bigger arm and shoulder use thi', 'Chest', 'Chest', 'Arm', '2023-08-16 09:59:05', '2023-08-16 09:59:05'),
(3, 'Barbell-Curl', '20230817Barbell-Curl.gif', 'Use this for bigger Shoulder', 'Shoulder', 'Back', 'Arm', '2023-08-17 03:37:26', '2023-08-17 03:37:26'),
(4, 'Barbell-Deadlift', '20230817Barbell-Deadlift.gif', 'for bigger Legs use this', 'Leg', 'Chest', 'Shoulder', '2023-08-17 03:44:42', '2023-08-17 03:44:42'),
(5, 'Bent-Over-Dumbbell-Row', '20230817Bent-Over-Dumbbell-Row.gif', 'for bigger Back use thisBent-Over-Dumbbell-Row', 'Back', 'Arm', 'Leg', '2023-08-17 03:47:25', '2023-08-17 03:47:25'),
(6, 'bodyweight-lunges', '20230817bodyweight-lunges.gif', 'for bigger Leg use this bodyweight-lunges', 'Leg', 'leg', 'leg', '2023-08-17 03:48:07', '2023-08-17 03:48:07'),
(7, 'Cable-Lateral-Raise', '20230817Cable-Lateral-Raise.gif', 'for Bigger shoulder and triceps use this Cable-Lateral-Raise', 'Shoulder', 'Arm', 'Chest', '2023-08-17 03:48:53', '2023-08-17 03:48:53'),
(8, 'Chest-Press-Machine', '20230817Chest-Press-Machine.gif', 'for bigger shoulder use this Chest-Press-Machine', 'Chest', 'Shoulder', 'Arm', '2023-08-17 03:49:23', '2023-08-17 03:49:23'),
(9, 'Double-Arm-Dumbbell-Curl', '20230817Double-Arm-Dumbbell-Curl.gif', 'for bigger Armuse this Double-Arm-Dumbbell-Curl', 'Triceps', 'Biceps', 'shoulder', '2023-08-17 03:49:58', '2023-08-17 03:49:58'),
(10, 'Dumbbell-Kickback', '20230817Dumbbell-Kickback.gif', 'for back arm use this Dumbbell-Kickback', 'Back', 'Shoulder', 'Arm', '2023-08-17 03:50:50', '2023-08-17 03:50:50'),
(11, 'Dumbbell-Shoulder-Press', '20230817Dumbbell-Shoulder-Press.gif', 'for shoulder use this Dumbbell-Shoulder-Press', 'Shoulder', 'Chest', 'Arm', '2023-08-17 03:51:20', '2023-08-17 03:51:20'),
(12, 'LEG-EXTENSION', '20230817LEG-EXTENSION.gif', 'for LEG-EXTENSION  use this', 'Leg', 'Chest', 'Chest', '2023-08-17 03:51:52', '2023-08-17 03:51:52'),
(13, 'Leg-Press', '20230817Leg-Press.gif', 'for Leg-Press', 'Leg', 'Chest', 'Arm', '2023-08-17 03:52:34', '2023-08-17 03:52:34'),
(14, 'Lever-Overhand-Triceps-Dip', '20230817Lever-Overhand-Triceps-Dip.gif', 'for bigger Biceps use Lever-Overhand-Triceps-Dip', 'Biceps', 'Chest', 'triceps', '2023-08-17 03:53:27', '2023-08-17 03:53:27'),
(15, 'Lever-Preacher-Curl', '20230817Lever-Preacher-Curl.gif', 'for bigger Arm use Lever-Preacher-Curl', 'Triceps', 'biceps', 'Arm', '2023-08-17 03:54:02', '2023-08-17 03:54:02'),
(16, 'Low-Cable-Crossover', '20230817Low-Cable-Crossover.gif', 'for Low-Cable-Crossoverarm use this', 'Shoulder', 'Chest', 'Arm', '2023-08-17 03:55:06', '2023-08-17 03:55:06'),
(17, 'Pull-up', '20230817Pull-up.gif', 'for back and  arm use Pull-up', 'Back', 'Arm', 'Shoulder', '2023-08-17 03:55:37', '2023-08-17 03:55:37'),
(18, 'Triceps-Dips', '20230817Triceps-Dips.gif', 'for Triceps-Dips', 'Triceps', 'chest', 'Arm', '2023-08-17 03:58:31', '2023-08-17 03:58:31');

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
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2023_08_16_111456_exercises', 1),
(11, '2023_08_27_074810_requistcourse', 2),
(13, '2023_08_27_104536_requistcourseuser', 3),
(14, '2023_08_27_114939_courserequist', 4),
(15, '2023_08_31_091850_carcartexercises', 5),
(16, '2023_09_05_085430_course_user', 6),
(17, '2023_09_06_074110_usercourse', 7),
(18, '2023_09_06_114156_usercourse', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usercourse`
--

CREATE TABLE `usercourse` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coch_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state_es` enum('active','deactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usercourse`
--

INSERT INTO `usercourse` (`id`, `user_id`, `coch_id`, `date`, `day`, `state_es`, `created_at`, `updated_at`) VALUES
(7, '8', '4', '2023-09-06', 'sorknow', 'deactive', '2023-09-06 12:10:14', '2023-09-07 08:23:59'),
(8, '8', '4', '2023-09-06', 'sorknow', 'deactive', '2023-09-06 12:14:46', '2023-09-07 08:23:59'),
(9, '6', '4', '2023-09-07', 'sorknow', 'deactive', '2023-09-07 07:03:18', '2023-09-10 10:47:11'),
(10, '7', '4', '2023-09-07', 'sorknow', 'active', '2023-09-07 07:03:27', '2023-09-07 07:03:27'),
(11, '7', '4', '2023-09-07', 'sorknow', 'active', '2023-09-07 07:03:30', '2023-09-07 07:03:30'),
(12, '8', '4', '2023-09-07', 'sorknow', 'deactive', '2023-09-07 07:26:34', '2023-09-07 08:23:59'),
(13, '8', '4', '2023-09-07', 'sorknow', 'active', '2023-09-07 08:23:59', '2023-09-07 08:23:59'),
(14, '6', '4', '2023-09-10', 'sorknow', 'active', '2023-09-10 10:47:11', '2023-09-10 10:47:11'),
(15, '2', '4', '2023-11-26', 'sorknow', 'active', '2023-11-26 06:03:28', '2023-11-26 06:03:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `midlename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wieght` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('admin','agent','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
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

INSERT INTO `users` (`id`, `firstname`, `midlename`, `username`, `photo`, `phone`, `hight`, `wieght`, `address`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mhammd', 'Jameel', 'Mhammad99', '2023081612380-900x900h.JPG', '07507384168', '170', '76', 'shex ahmedfrf/erbil/kurdistan', 'admin', 'kakohama61@gmail.com', NULL, '$2y$10$TtcQV8PG8qRyF1WpitIoLebir368tzyQCwuTaeWnOrUSsOHBK3a8y', NULL, '2023-08-16 08:45:13', '2023-08-16 08:45:13'),
(2, 'mhammad', 'saleeme', 'saleem', '2023082812380-900x900h.JPG', '07507384169', '160', '78', 'shex ahmedfrf/erbil/kurdistan', 'user', 'kakohama62@gmail.com', NULL, '$2y$10$TtcQV8PG8qRyF1WpitIoLebir368tzyQCwuTaeWnOrUSsOHBK3a8y', NULL, '2023-08-21 04:59:17', '2023-08-23 04:40:46'),
(3, 'anso', 'fito', 'ft99', '2023082712380-900x900h.JPG', '07507384170', '190', '100', 'ankawa', 'agent', 'kakohama63@gmail.com', NULL, '$2y$10$PXVxzry4PTzl/AUr39RGHeGi/tJeQDBAayJgI9dXaMP2PjpS8w3WS', NULL, '2023-08-27 04:03:07', '2023-08-28 04:40:23'),
(4, 'alan', 'fitnees', 'alangalaxy', '2023082712380-900x900h.JPG', '07504827664', '180', '90', 'havalan', 'agent', 'kakohama64@gmail.com', NULL, '$2y$10$3c1taqOV4RiZsIAZuEC8POfW1tD7UXGLnVRSJSsSnOd9/vLqOWN06', NULL, '2023-08-27 04:04:18', '2023-08-27 04:04:18'),
(5, 'hazhar', 'fitnees', 'rawche', '2023082712380-900x900h.JPG', '07504394977', '181', '90', 'balashawa', 'agent', 'kakohama65@gmail.com', NULL, '$2y$10$o08k/tWQcdkyAuO8WM3rWuU1Y.t0uKGYMvRXCkcpOdAj1cL7ZgKT.', NULL, '2023-08-27 04:05:46', '2023-08-27 04:05:46'),
(6, 'ah,ed', 'ifimreif', 'enfiefiefi`', '2023082812380-900x900h.JPG', '95959595', '150', '50', 'emfekmrfkmre', 'user', 'kakohama66@gmail.com', NULL, '$2y$10$ELIf8vlWNZiM9cJaL82gre.G0pgJ7mEFCy0Gt0pWpocswB8Kn3Foq', NULL, '2023-08-28 09:06:00', '2023-08-28 09:06:00'),
(7, 'halgurd', 'hasan', 'hasan', '2023083112380-900x900h.JPG', '07778954126', '120', '25', 'sdf', 'user', 'kakohama67@gmail.com', NULL, '$2y$10$lxuPBoyIKZF2C3I.iCMKlOR6CsSlpaZnJ5UmiQP9OmrsUZsAhmvXa', NULL, '2023-08-31 06:00:22', '2023-08-31 06:00:22'),
(8, 'hezha', 'hezha', 'hezh', '2023083112380-900x900h.JPG', '9999999999', '55', '10', 'dfghgfds', 'user', 'kakohama70@gmail.com', NULL, '$2y$10$RskEpWdXJHta9qiL/L.35enCDp.c5IK2UsDgMJrWFqFqp7A.0WSCC', NULL, '2023-08-31 07:38:13', '2023-08-31 07:38:13');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_name`
-- (See below for the actual view)
--
CREATE TABLE `view_name` (
`id` bigint(20) unsigned
,`name` varchar(255)
,`photo` varchar(255)
,`details` text
,`primary_muscle` varchar(255)
,`assist_muscle_1` varchar(255)
,`assist_muscle_2` varchar(255)
,`created_at` timestamp
,`updated_at` timestamp
,`ename` varchar(255)
,`eprimary_muscle` varchar(255)
,`ccid` varchar(255)
,`uid` bigint(20) unsigned
,`repetion` varchar(255)
,`day` varchar(255)
);

-- --------------------------------------------------------

--
-- Structure for view `view_name`
--
DROP TABLE IF EXISTS `view_name`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_name`  AS SELECT `exercises`.`id` AS `id`, `exercises`.`name` AS `name`, `exercises`.`photo` AS `photo`, `exercises`.`details` AS `details`, `exercises`.`primary_muscle` AS `primary_muscle`, `exercises`.`assist_muscle_1` AS `assist_muscle_1`, `exercises`.`assist_muscle_2` AS `assist_muscle_2`, `exercises`.`created_at` AS `created_at`, `exercises`.`updated_at` AS `updated_at`, `exercises`.`name` AS `ename`, `exercises`.`primary_muscle` AS `eprimary_muscle`, `cartexercises`.`coach_id` AS `ccid`, `users`.`id` AS `uid`, `cartexercises`.`repetion` AS `repetion`, `cartexercises`.`day` AS `day` FROM ((`exercises` join `cartexercises`) join `users`) WHERE `cartexercises`.`user_id` = `users`.`id` AND `cartexercises`.`exercise_id` = `exercises`.`id``id`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cartexercises`
--
ALTER TABLE `cartexercises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courserequist`
--
ALTER TABLE `courserequist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exercises`
--
ALTER TABLE `exercises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `usercourse`
--
ALTER TABLE `usercourse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cartexercises`
--
ALTER TABLE `cartexercises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `courserequist`
--
ALTER TABLE `courserequist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `exercises`
--
ALTER TABLE `exercises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usercourse`
--
ALTER TABLE `usercourse`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
