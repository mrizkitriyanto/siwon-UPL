-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 08:50 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siwon-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `food_recipes`
--

CREATE TABLE `food_recipes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food_recipes`
--

INSERT INTO `food_recipes` (`id`, `name`, `slug`, `description`, `photo`, `poster`, `created_at`, `updated_at`) VALUES
(1, 'Monster Berries Smoothie', 'monster-berries-smoothie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Etiam tempor orci eu lobortis elementum nibh tellus molestie nunc. Bibendum arcu vitae elementum curabitur vitae. Ut tortor pretium viverra suspendisse potenti nullam ac tortor vitae. Non arcu risus quis varius quam quisque. Tla est ullamcorper eget. Erat velit scelerisque in dictum non consectetur a. Diam maecenas ultricies mi eget mauris pharetra. Diam vel quam elementum pulvinar etiam non quam lacus.\r\n\r\nInterdum velit euismod in pellentesque massa. Ac tincidunt vitae semper quis lectus nulla at volutpat diam. Morbi tristique senectus et netus et malesuada fames ac turpis. Pulvinar etiam non quam lacus suspendisse faucibus. Netus et malesuada fames ac turpis egestas sed tempus urna. Habitant morbi tristique senectus et netus et malesuada fames. Bibendum neque egestas congue quisque egestas diam in arcu. Nisl nisi scelerisque eu ultrices vitae auctor eu augue ut. Convallis aenean et tortor at risus viverra adipiscing at in. Donec ac odio tempor orci dapibus ultrices in. Ullamcorper malesuada proin libero nunc consequat interdum varius. Id interdum velit laoreet id donec. Faucibus purus in massa tempor nec feugiat nisl. Non odio euismod lacinia at quis risus sed. Pellentesque habitant morbi tristique senectus et netus et.\r\n\r\nDiam donec adipiscing tristique risus nec feugiat. Nec nam aliquam sem et tortor consequat id. Scelerisque varius morbi enim nunc. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar. Tincidunt arcu non sodales neque. Purus sit a', '1638992386.png', '1638992386.png', '2021-12-08 12:39:46', '2021-12-08 12:39:46'),
(2, 'Honey Granola', 'honey-granola', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Etiam tempor orci eu lobortis elementum nibh tellus molestie nunc. Bibendum arcu vitae elementum curabitur vitae. Ut tortor pretium viverra suspendisse potenti nullam ac tortor vitae. Non arcu risus quis varius quam quisque. Tla est ullamcorper eget. Erat velit scelerisque in dictum non consectetur a. Diam maecenas ultricies mi eget mauris pharetra. Diam vel quam elementum pulvinar etiam non quam lacus.\r\n\r\nInterdum velit euismod in pellentesque massa. Ac tincidunt vitae semper quis lectus nulla at volutpat diam. Morbi tristique senectus et netus et malesuada fames ac turpis. Pulvinar etiam non quam lacus suspendisse faucibus. Netus et malesuada fames ac turpis egestas sed tempus urna. Habitant morbi tristique senectus et netus et malesuada fames. Bibendum neque egestas congue quisque egestas diam in arcu. Nisl nisi scelerisque eu ultrices vitae auctor eu augue ut. Convallis aenean et tortor at risus viverra adipiscing at in. Donec ac odio tempor orci dapibus ultrices in. Ullamcorper malesuada proin libero nunc consequat interdum varius. Id interdum velit laoreet id donec. Faucibus purus in massa tempor nec feugiat nisl. Non odio euismod lacinia at quis risus sed. Pellentesque habitant morbi tristique senectus et netus et.\r\n\r\nDiam donec adipiscing tristique risus nec feugiat. Nec nam aliquam sem et tortor consequat id. Scelerisque varius morbi enim nunc. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar. Tincidunt arcu non sodales neque. Purus sit a', '1638992409.png', '1638992409.png', '2021-12-08 12:40:09', '2021-12-08 12:40:09'),
(3, 'Sunset Remidial Smothie', 'sunset-remidial-smothie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Etiam tempor orci eu lobortis elementum nibh tellus molestie nunc. Bibendum arcu vitae elementum curabitur vitae. Ut tortor pretium viverra suspendisse potenti nullam ac tortor vitae. Non arcu risus quis varius quam quisque. Tla est ullamcorper eget. Erat velit scelerisque in dictum non consectetur a. Diam maecenas ultricies mi eget mauris pharetra. Diam vel quam elementum pulvinar etiam non quam lacus.\r\n\r\nInterdum velit euismod in pellentesque massa. Ac tincidunt vitae semper quis lectus nulla at volutpat diam. Morbi tristique senectus et netus et malesuada fames ac turpis. Pulvinar etiam non quam lacus suspendisse faucibus. Netus et malesuada fames ac turpis egestas sed tempus urna. Habitant morbi tristique senectus et netus et malesuada fames. Bibendum neque egestas congue quisque egestas diam in arcu. Nisl nisi scelerisque eu ultrices vitae auctor eu augue ut. Convallis aenean et tortor at risus viverra adipiscing at in. Donec ac odio tempor orci dapibus ultrices in. Ullamcorper malesuada proin libero nunc consequat interdum varius. Id interdum velit laoreet id donec. Faucibus purus in massa tempor nec feugiat nisl. Non odio euismod lacinia at quis risus sed. Pellentesque habitant morbi tristique senectus et netus et.\r\n\r\nDiam donec adipiscing tristique risus nec feugiat. Nec nam aliquam sem et tortor consequat id. Scelerisque varius morbi enim nunc. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar. Tincidunt arcu non sodales neque. Purus sit a', '1638992436.png', '1638992436.png', '2021-12-08 12:40:36', '2021-12-08 12:40:36'),
(4, 'Peanutbutter Granola', 'peanutbutter-granola', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Etiam tempor orci eu lobortis elementum nibh tellus molestie nunc. Bibendum arcu vitae elementum curabitur vitae. Ut tortor pretium viverra suspendisse potenti nullam ac tortor vitae. Non arcu risus quis varius quam quisque. Tla est ullamcorper eget. Erat velit scelerisque in dictum non consectetur a. Diam maecenas ultricies mi eget mauris pharetra. Diam vel quam elementum pulvinar etiam non quam lacus.\r\n\r\nInterdum velit euismod in pellentesque massa. Ac tincidunt vitae semper quis lectus nulla at volutpat diam. Morbi tristique senectus et netus et malesuada fames ac turpis. Pulvinar etiam non quam lacus suspendisse faucibus. Netus et malesuada fames ac turpis egestas sed tempus urna. Habitant morbi tristique senectus et netus et malesuada fames. Bibendum neque egestas congue quisque egestas diam in arcu. Nisl nisi scelerisque eu ultrices vitae auctor eu augue ut. Convallis aenean et tortor at risus viverra adipiscing at in. Donec ac odio tempor orci dapibus ultrices in. Ullamcorper malesuada proin libero nunc consequat interdum varius. Id interdum velit laoreet id donec. Faucibus purus in massa tempor nec feugiat nisl. Non odio euismod lacinia at quis risus sed. Pellentesque habitant morbi tristique senectus et netus et.\r\n\r\nDiam donec adipiscing tristique risus nec feugiat. Nec nam aliquam sem et tortor consequat id. Scelerisque varius morbi enim nunc. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar. Tincidunt arcu non sodales neque. Purus sit a', '1638992463.png', '1638992463.png', '2021-12-08 12:41:03', '2021-12-08 12:41:03'),
(5, 'Easy Yummy Overnight Oats', 'easy-yummy-overnight-oats', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Etiam tempor orci eu lobortis elementum nibh tellus molestie nunc. Bibendum arcu vitae elementum curabitur vitae. Ut tortor pretium viverra suspendisse potenti nullam ac tortor vitae. Non arcu risus quis varius quam quisque. Tla est ullamcorper eget. Erat velit scelerisque in dictum non consectetur a. Diam maecenas ultricies mi eget mauris pharetra. Diam vel quam elementum pulvinar etiam non quam lacus.\r\n\r\nInterdum velit euismod in pellentesque massa. Ac tincidunt vitae semper quis lectus nulla at volutpat diam. Morbi tristique senectus et netus et malesuada fames ac turpis. Pulvinar etiam non quam lacus suspendisse faucibus. Netus et malesuada fames ac turpis egestas sed tempus urna. Habitant morbi tristique senectus et netus et malesuada fames. Bibendum neque egestas congue quisque egestas diam in arcu. Nisl nisi scelerisque eu ultrices vitae auctor eu augue ut. Convallis aenean et tortor at risus viverra adipiscing at in. Donec ac odio tempor orci dapibus ultrices in. Ullamcorper malesuada proin libero nunc consequat interdum varius. Id interdum velit laoreet id donec. Faucibus purus in massa tempor nec feugiat nisl. Non odio euismod lacinia at quis risus sed. Pellentesque habitant morbi tristique senectus et netus et.\r\n\r\nDiam donec adipiscing tristique risus nec feugiat. Nec nam aliquam sem et tortor consequat id. Scelerisque varius morbi enim nunc. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar. Tincidunt arcu non sodales neque. Purus sit a', '1638992490.png', '1638992490.png', '2021-12-08 12:41:30', '2021-12-08 12:41:30'),
(6, 'Green Gondes Smoothie', 'green-gondes-smoothie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Etiam tempor orci eu lobortis elementum nibh tellus molestie nunc. Bibendum arcu vitae elementum curabitur vitae. Ut tortor pretium viverra suspendisse potenti nullam ac tortor vitae. Non arcu risus quis varius quam quisque. Tla est ullamcorper eget. Erat velit scelerisque in dictum non consectetur a. Diam maecenas ultricies mi eget mauris pharetra. Diam vel quam elementum pulvinar etiam non quam lacus.\r\n\r\nInterdum velit euismod in pellentesque massa. Ac tincidunt vitae semper quis lectus nulla at volutpat diam. Morbi tristique senectus et netus et malesuada fames ac turpis. Pulvinar etiam non quam lacus suspendisse faucibus. Netus et malesuada fames ac turpis egestas sed tempus urna. Habitant morbi tristique senectus et netus et malesuada fames. Bibendum neque egestas congue quisque egestas diam in arcu. Nisl nisi scelerisque eu ultrices vitae auctor eu augue ut. Convallis aenean et tortor at risus viverra adipiscing at in. Donec ac odio tempor orci dapibus ultrices in. Ullamcorper malesuada proin libero nunc consequat interdum varius. Id interdum velit laoreet id donec. Faucibus purus in massa tempor nec feugiat nisl. Non odio euismod lacinia at quis risus sed. Pellentesque habitant morbi tristique senectus et netus et.\r\n\r\nDiam donec adipiscing tristique risus nec feugiat. Nec nam aliquam sem et tortor consequat id. Scelerisque varius morbi enim nunc. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar. Tincidunt arcu non sodales neque. Purus sit a', '1638992562.png', '1638992562.png', '2021-12-08 12:41:46', '2021-12-08 12:42:42'),
(7, 'Semangka', 'semangka', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Etiam tempor orci eu lobortis elementum nibh tellus molestie nunc. Bibendum arcu vitae elementum curabitur vitae. Ut tortor pretium viverra suspendisse potenti nullam ac tortor vitae. Non arcu risus quis varius quam quisque. Tla est ullamcorper eget. Erat velit scelerisque in dictum non consectetur a. Diam maecenas ultricies mi eget mauris pharetra. Diam vel quam elementum pulvinar etiam non quam lacus.\r\n\r\nInterdum velit euismod in pellentesque massa. Ac tincidunt vitae semper quis lectus nulla at volutpat diam. Morbi tristique senectus et netus et malesuada fames ac turpis. Pulvinar etiam non quam lacus suspendisse faucibus. Netus et malesuada fames ac turpis egestas sed tempus urna. Habitant morbi tristique senectus et netus et malesuada fames. Bibendum neque egestas congue quisque egestas diam in arcu. Nisl nisi scelerisque eu ultrices vitae auctor eu augue ut. Convallis aenean et tortor at risus viverra adipiscing at in. Donec ac odio tempor orci dapibus ultrices in. Ullamcorper malesuada proin libero nunc consequat interdum varius. Id interdum velit laoreet id donec. Faucibus purus in massa tempor nec feugiat nisl. Non odio euismod lacinia at quis risus sed. Pellentesque habitant morbi tristique senectus et netus et.\r\n\r\nDiam donec adipiscing tristique risus nec feugiat. Nec nam aliquam sem et tortor consequat id. Scelerisque varius morbi enim nunc. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar. Tincidunt arcu non sodales neque. Purus sit a', '1638992578.png', '1638992578.png', '2021-12-08 12:42:58', '2021-12-08 12:42:58');

-- --------------------------------------------------------

--
-- Table structure for table `meal_plans`
--

CREATE TABLE `meal_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meal_plans`
--

INSERT INTO `meal_plans` (`id`, `name`, `slug`, `photo`, `poster`, `created_at`, `updated_at`) VALUES
(1, 'Morning Morning Eating Sugar', 'morning-morning-eating-sugar', '1638992095.png', '1638992095.png', '2021-12-08 12:34:55', '2021-12-08 12:34:55'),
(2, 'Healthy Summer Meal Plan 1', 'healthy-summer-meal-plan-1', '1638992118.png', '1638992118.png', '2021-12-08 12:35:18', '2021-12-08 12:35:18'),
(3, 'Breakfast Meal Plan', 'breakfast-meal-plan', '1638992138.png', '1638992138.png', '2021-12-08 12:35:38', '2021-12-08 12:35:38'),
(4, 'Meal Planner', 'meal-planner', '1638992154.png', '1638992154.png', '2021-12-08 12:35:54', '2021-12-08 12:35:54'),
(5, '6 Day Healthy Meal Plans', '6-day-healthy-meal-plans', '1638992186.png', '1638992186.png', '2021-12-08 12:36:26', '2021-12-08 12:36:26'),
(6, 'Vegetarian Meal Plan', 'vegetarian-meal-plan', '1638992204.png', '1638992204.png', '2021-12-08 12:36:44', '2021-12-08 12:36:44'),
(7, '5 Days with Hwalthy Snacks', '5-days-with-hwalthy-snacks', '1638992224.png', '1638992224.png', '2021-12-08 12:37:04', '2021-12-08 12:37:04');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2021_11_12_153029_users', 1),
(3, '2021_11_12_153519_suggestions', 1),
(4, '2021_11_12_153726_workouts', 1),
(5, '2021_11_12_154130_food_recipes', 1),
(6, '2021_11_12_154245_programs', 1),
(7, '2021_11_12_154824_meal_plans', 1),
(8, '2021_11_12_154932_workout_categories', 1),
(9, '2021_11_12_155052_program_categories', 1),
(10, '2021_11_28_151355_records', 1),
(11, '2021_12_01_011006_password_resets', 1);

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
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `category_id`, `name`, `description`, `slug`, `photo`, `poster`, `created_at`, `updated_at`) VALUES
(1, 1, '7 Days of Cardio', 'mauris sit amet massa vitae tortor condimentum lacinia quis vel eros donec ac odio tempor orci dapibus ultrices in iaculis nunc sed augue lacus viverra vitae congue eu consequat ac felis donec et odio pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae nunc sed velit dignissim sodales ut eu sem integer vitae justo eget magna fermentum iaculis eu non diam phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim tortor at auctor urna nunc id cursus metus aliquam eleifend mi in', '7-days-of-cardio', '1638990782.png', '1638990782.png', '2021-12-08 12:13:02', '2021-12-08 12:13:02'),
(2, 1, 'Daily Routine Exercise', 'mauris sit amet massa vitae tortor condimentum lacinia quis vel eros donec ac odio tempor orci dapibus ultrices in iaculis nunc sed augue lacus viverra vitae congue eu consequat ac felis donec et odio pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae nunc sed velit dignissim sodales ut eu sem integer vitae justo eget magna fermentum iaculis eu non diam phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim tortor at auctor urna nunc id cursus metus aliquam eleifend mi in', 'daily-routine-exercise', '1638990812.png', '1638990812.png', '2021-12-08 12:13:32', '2021-12-08 12:13:32'),
(3, 1, 'Intense Fat Burning Workout Routine', 'mauris sit amet massa vitae tortor condimentum lacinia quis vel eros donec ac odio tempor orci dapibus ultrices in iaculis nunc sed augue lacus viverra vitae congue eu consequat ac felis donec et odio pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae nunc sed velit dignissim sodales ut eu sem integer vitae justo eget magna fermentum iaculis eu non diam phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim tortor at auctor urna nunc id cursus metus aliquam eleifend mi in', 'intense-fat-burning-workout-routine', '1638990843.png', '1638990843.png', '2021-12-08 12:14:03', '2021-12-08 12:14:03'),
(4, 1, 'Lose Weight in 1 Week', 'mauris sit amet massa vitae tortor condimentum lacinia quis vel eros donec ac odio tempor orci dapibus ultrices in iaculis nunc sed augue lacus viverra vitae congue eu consequat ac felis donec et odio pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae nunc sed velit dignissim sodales ut eu sem integer vitae justo eget magna fermentum iaculis eu non diam phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim tortor at auctor urna nunc id cursus metus aliquam eleifend mi in', 'lose-weight-in-1-week', '1638990872.png', '1638990872.png', '2021-12-08 12:14:32', '2021-12-08 12:14:32'),
(5, 1, 'Zero to Hero', 'mauris sit amet massa vitae tortor condimentum lacinia quis vel eros donec ac odio tempor orci dapibus ultrices in iaculis nunc sed augue lacus viverra vitae congue eu consequat ac felis donec et odio pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae nunc sed velit dignissim sodales ut eu sem integer vitae justo eget magna fermentum iaculis eu non diam phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim tortor at auctor urna nunc id cursus metus aliquam eleifend mi in', 'zero-to-hero', '1638990902.png', '1638990902.png', '2021-12-08 12:15:02', '2021-12-08 12:15:02'),
(6, 1, 'Best Lazy Workout', 'mauris sit amet massa vitae tortor condimentum lacinia quis vel eros donec ac odio tempor orci dapibus ultrices in iaculis nunc sed augue lacus viverra vitae congue eu consequat ac felis donec et odio pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae nunc sed velit dignissim sodales ut eu sem integer vitae justo eget magna fermentum iaculis eu non diam phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim tortor at auctor urna nunc id cursus metus aliquam eleifend mi in', 'best-lazy-workout', '1638991101.png', '1638991101.png', '2021-12-08 12:18:21', '2021-12-08 12:18:21'),
(7, 1, 'Daily Routine', 'mauris sit amet massa vitae tortor condimentum lacinia quis vel eros donec ac odio tempor orci dapibus ultrices in iaculis nunc sed augue lacus viverra vitae congue eu consequat ac felis donec et odio pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae nunc sed velit dignissim sodales ut eu sem integer vitae justo eget magna fermentum iaculis eu non diam phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim tortor at auctor urna nunc id cursus metus aliquam eleifend mi in', 'daily-routine', '1638991125.png', '1638991125.png', '2021-12-08 12:18:45', '2021-12-08 12:18:45'),
(8, 2, 'Cardio Go', 'mauris sit amet massa vitae tortor condimentum lacinia quis vel eros donec ac odio tempor orci dapibus ultrices in iaculis nunc sed augue lacus viverra vitae congue eu consequat ac felis donec et odio pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae nunc sed velit dignissim sodales ut eu sem integer vitae justo eget magna fermentum iaculis eu non diam phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim tortor at auctor urna nunc id cursus metus aliquam eleifend mi in', 'cardio-go', '1638991161.png', '1638991161.png', '2021-12-08 12:19:21', '2021-12-08 12:19:21'),
(9, 2, 'Core Strength', 'mauris sit amet massa vitae tortor condimentum lacinia quis vel eros donec ac odio tempor orci dapibus ultrices in iaculis nunc sed augue lacus viverra vitae congue eu consequat ac felis donec et odio pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae nunc sed velit dignissim sodales ut eu sem integer vitae justo eget magna fermentum iaculis eu non diam phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim tortor at auctor urna nunc id cursus metus aliquam eleifend mi in', 'core-strength', '1638991185.png', '1638991185.png', '2021-12-08 12:19:45', '2021-12-08 12:19:45'),
(10, 2, 'Workout for Slim Legs 1 Month', 'mauris sit amet massa vitae tortor condimentum lacinia quis vel eros donec ac odio tempor orci dapibus ultrices in iaculis nunc sed augue lacus viverra vitae congue eu consequat ac felis donec et odio pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae nunc sed velit dignissim sodales ut eu sem integer vitae justo eget magna fermentum iaculis eu non diam phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim tortor at auctor urna nunc id cursus metus aliquam eleifend mi in', 'workout-for-slim-legs-1-month', '1638991218.png', '1638991218.png', '2021-12-08 12:20:18', '2021-12-08 12:20:18'),
(11, 2, 'Abs 1 month', 'mauris sit amet massa vitae tortor condimentum lacinia quis vel eros donec ac odio tempor orci dapibus ultrices in iaculis nunc sed augue lacus viverra vitae congue eu consequat ac felis donec et odio pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae nunc sed velit dignissim sodales ut eu sem integer vitae justo eget magna fermentum iaculis eu non diam phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim tortor at auctor urna nunc id cursus metus aliquam eleifend mi in', 'abs-1-month', '1638991244.png', '1638991244.png', '2021-12-08 12:20:44', '2021-12-08 12:20:44'),
(12, 2, 'Morning Workout 1 month', 'mauris sit amet massa vitae tortor condimentum lacinia quis vel eros donec ac odio tempor orci dapibus ultrices in iaculis nunc sed augue lacus viverra vitae congue eu consequat ac felis donec et odio pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae nunc sed velit dignissim sodales ut eu sem integer vitae justo eget magna fermentum iaculis eu non diam phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim tortor at auctor urna nunc id cursus metus aliquam eleifend mi in', 'morning-workout-1-month', '1638991275.png', '1638991275.png', '2021-12-08 12:21:15', '2021-12-08 12:21:15'),
(13, 2, 'Baseline 1 month', 'mauris sit amet massa vitae tortor condimentum lacinia quis vel eros donec ac odio tempor orci dapibus ultrices in iaculis nunc sed augue lacus viverra vitae congue eu consequat ac felis donec et odio pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae nunc sed velit dignissim sodales ut eu sem integer vitae justo eget magna fermentum iaculis eu non diam phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim tortor at auctor urna nunc id cursus metus aliquam eleifend mi in', 'baseline-1-month', '1638991300.png', '1638991300.png', '2021-12-08 12:21:40', '2021-12-08 12:21:40'),
(14, 2, 'base', 'mauris sit amet massa vitae tortor condimentum lacinia quis vel eros donec ac odio tempor orci dapibus ultrices in iaculis nunc sed augue lacus viverra vitae congue eu consequat ac felis donec et odio pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae nunc sed velit dignissim sodales ut eu sem integer vitae justo eget magna fermentum iaculis eu non diam phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim tortor at auctor urna nunc id cursus metus aliquam eleifend mi in', 'base', '1638991317.png', '1638991317.png', '2021-12-08 12:21:57', '2021-12-08 12:21:57'),
(15, 3, 'Arms of Steel', 'mauris sit amet massa vitae tortor condimentum lacinia quis vel eros donec ac odio tempor orci dapibus ultrices in iaculis nunc sed augue lacus viverra vitae congue eu consequat ac felis donec et odio pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae nunc sed velit dignissim sodales ut eu sem integer vitae justo eget magna fermentum iaculis eu non diam phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim tortor at auctor urna nunc id cursus metus aliquam eleifend mi in', 'arms-of-steel', '1638991349.png', '1638991349.png', '2021-12-08 12:22:29', '2021-12-08 12:22:29'),
(16, 3, 'core stamina', 'mauris sit amet massa vitae tortor condimentum lacinia quis vel eros donec ac odio tempor orci dapibus ultrices in iaculis nunc sed augue lacus viverra vitae congue eu consequat ac felis donec et odio pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae nunc sed velit dignissim sodales ut eu sem integer vitae justo eget magna fermentum iaculis eu non diam phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim tortor at auctor urna nunc id cursus metus aliquam eleifend mi in', 'core-stamina', '1638991444.png', '1638991444.png', '2021-12-08 12:24:04', '2021-12-08 12:24:04'),
(17, 3, 'Runner', 'mauris sit amet massa vitae tortor condimentum lacinia quis vel eros donec ac odio tempor orci dapibus ultrices in iaculis nunc sed augue lacus viverra vitae congue eu consequat ac felis donec et odio pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae nunc sed velit dignissim sodales ut eu sem integer vitae justo eget magna fermentum iaculis eu non diam phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim tortor at auctor urna nunc id cursus metus aliquam eleifend mi in', 'runner', '1638991464.png', '1638991464.png', '2021-12-08 12:24:24', '2021-12-08 12:24:24'),
(18, 3, '90 Days Yoga', 'mauris sit amet massa vitae tortor condimentum lacinia quis vel eros donec ac odio tempor orci dapibus ultrices in iaculis nunc sed augue lacus viverra vitae congue eu consequat ac felis donec et odio pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae nunc sed velit dignissim sodales ut eu sem integer vitae justo eget magna fermentum iaculis eu non diam phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim tortor at auctor urna nunc id cursus metus aliquam eleifend mi in', '90-days-yoga', '1638991493.png', '1638991493.png', '2021-12-08 12:24:53', '2021-12-08 12:24:53'),
(19, 3, 'High Gear', 'mauris sit amet massa vitae tortor condimentum lacinia quis vel eros donec ac odio tempor orci dapibus ultrices in iaculis nunc sed augue lacus viverra vitae congue eu consequat ac felis donec et odio pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae nunc sed velit dignissim sodales ut eu sem integer vitae justo eget magna fermentum iaculis eu non diam phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim tortor at auctor urna nunc id cursus metus aliquam eleifend mi in', 'high-gear', '1638991519.png', '1638991519.png', '2021-12-08 12:25:19', '2021-12-08 12:25:19'),
(20, 3, 'High intense', 'mauris sit amet massa vitae tortor condimentum lacinia quis vel eros donec ac odio tempor orci dapibus ultrices in iaculis nunc sed augue lacus viverra vitae congue eu consequat ac felis donec et odio pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae nunc sed velit dignissim sodales ut eu sem integer vitae justo eget magna fermentum iaculis eu non diam phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim tortor at auctor urna nunc id cursus metus aliquam eleifend mi in', 'high-intense', '1638991571.png', '1638991571.png', '2021-12-08 12:26:11', '2021-12-08 12:26:11'),
(21, 3, 'main activity', 'mauris sit amet massa vitae tortor condimentum lacinia quis vel eros donec ac odio tempor orci dapibus ultrices in iaculis nunc sed augue lacus viverra vitae congue eu consequat ac felis donec et odio pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae nunc sed velit dignissim sodales ut eu sem integer vitae justo eget magna fermentum iaculis eu non diam phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim tortor at auctor urna nunc id cursus metus aliquam eleifend mi in', 'main-activity', '1638991591.png', '1638991591.png', '2021-12-08 12:26:31', '2021-12-08 12:26:31');

-- --------------------------------------------------------

--
-- Table structure for table `program_categories`
--

CREATE TABLE `program_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `program_categories`
--

INSERT INTO `program_categories` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Beginner', '2021-12-08 11:51:34', '2021-12-08 11:51:34'),
(2, 'Intermediate', '2021-12-08 11:51:34', '2021-12-08 11:51:34'),
(3, 'Advanced', '2021-12-08 11:51:34', '2021-12-08 11:51:34');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `program_id` bigint(20) UNSIGNED NOT NULL,
  `day` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `user_id`, `program_id`, `day`, `created_at`, `updated_at`) VALUES
(1, 2, 5, 1, NULL, NULL),
(3, 2, 5, 2, NULL, NULL),
(4, 2, 16, 1, NULL, NULL),
(5, 2, 16, 13, NULL, NULL),
(6, 2, 16, 56, NULL, NULL),
(7, 2, 16, 62, NULL, NULL),
(8, 2, 16, 74, NULL, NULL),
(9, 2, 16, 86, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `suggestions`
--

CREATE TABLE `suggestions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suggestions`
--

INSERT INTO `suggestions` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Haris Manalu', 'haris@manalu.if', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Etiam tempor orci eu lobortis elementum nibh tellus molestie nunc. Bibendum arcu vitae elementum curabitur vitae. Ut tortor pretium viverra suspendisse potenti nullam ac tortor vitae. Non arcu risus quis varius quam quisque. Tla est ullamcorper eget. Erat velit scelerisque in dictum non consectetur a. Diam maecenas ultricies mi eget mauris pharetra. Diam vel quam elementum pulvinar etiam non quam lacus.\r\n\r\nInterdum velit euismod in pellentesque massa. Ac tincidunt vitae semper quis lectus nulla at volutpat diam. Morbi tristique senectus et netus et malesuada fames ac turpis. Pulvinar etiam non quam lacus suspendisse faucibus. Netus et malesuada fames ac turpis egestas sed tempus urna. Habitant morbi tristique senectus et netus et malesuada fames. Bibendum neque egestas congue quisque egestas diam in arcu. Nisl nisi scelerisque eu ultrices vitae auctor eu augue ut. Convallis aenean et tortor at risus viverra adipiscing at in. Donec ac odio tempor orci dapibus ultrices in. Ullamcorper malesuada proin libero nunc consequat interdum varius. Id interdum velit laoreet id donec. Faucibus purus in massa tempor nec feugiat nisl. Non odio euismod lacinia at quis risus sed. Pellentesque habitant morbi tristique senectus et netus et.\r\n\r\nDiam donec adipiscing tristique risus nec feugiat. Nec nam aliquam sem et tortor consequat id. Scelerisque varius morbi enim nunc. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar. Tincidunt arcu non sodales neque. Purus sit a', '2021-12-08 12:47:07', '2021-12-08 12:47:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_admin`, `created_at`, `updated_at`) VALUES
(2, 'Dariati Kurniawan S.I.Kom', 'admin@gmail.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, '2021-12-08 11:51:34', '2021-12-08 11:51:34'),
(3, 'Cayadi Prasetya', 'user2@gmail.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-12-08 11:51:34', '2021-12-08 11:51:34'),
(5, 'Hana Kusmawati S.E.', 'user1@gmail.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2021-12-08 11:51:34', '2021-12-08 11:51:34');

-- --------------------------------------------------------

--
-- Table structure for table `workouts`
--

CREATE TABLE `workouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workouts`
--

INSERT INTO `workouts` (`id`, `category_id`, `name`, `slug`, `photo`, `poster`, `created_at`, `updated_at`) VALUES
(1, 1, '5 Minutes Workout For ABS', '5-minutes-workout-for-abs', '1638989941.png', '1638989941.png', '2021-12-08 11:56:57', '2021-12-08 11:59:01'),
(2, 1, '7 Minutes Morning Workout', '7-minutes-morning-workout', '1638989992.png', '1638989992.png', '2021-12-08 11:59:52', '2021-12-08 11:59:52'),
(3, 1, 'Fat Burning Workout Just 10 Minutes', 'fat-burning-workout-just-10-minutes', '1638990026.png', '1638990026.png', '2021-12-08 12:00:26', '2021-12-08 12:00:26'),
(4, 1, 'Simple Workout For Things & Hips', 'simple-workout-for-things-hips', '1638990066.png', '1638990066.png', '2021-12-08 12:01:06', '2021-12-08 12:01:06'),
(5, 1, '5 Minutes Workout For Beginner', '5-minutes-workout-for-beginner', '1638990106.png', '1638990106.png', '2021-12-08 12:01:46', '2021-12-08 12:01:46'),
(6, 1, 'Workout for Slim Legs', 'workout-for-slim-legs', '1638990138.png', '1638990138.png', '2021-12-08 12:02:18', '2021-12-08 12:02:18'),
(7, 2, '15 Minute Workout For ABS', '15-minute-workout-for-abs', '1638990207.png', '1638990207.png', '2021-12-08 12:03:27', '2021-12-08 12:03:27'),
(8, 1, '15 Minutes Morning Workout', '15-minutes-morning-workout', '1638990264.png', '1638990264.png', '2021-12-08 12:04:24', '2021-12-08 12:04:24'),
(9, 2, 'Torches Calories', 'torches-calories', '1638990308.png', '1638990308.png', '2021-12-08 12:05:08', '2021-12-08 12:05:08'),
(10, 2, '25 Minutes Full Body Workout', '25-minutes-full-body-workout', '1638990356.png', '1638990356.png', '2021-12-08 12:05:56', '2021-12-08 12:05:56'),
(11, 2, 'Workout for Slim Legs', 'workout-for-slim-legs', '1638990392.png', '1638990392.png', '2021-12-08 12:06:32', '2021-12-08 12:06:32'),
(12, 3, '30 Minute Workout for ABS', '30-minute-workout-for-abs', '1638991988.png', '1638990446.png', '2021-12-08 12:07:26', '2021-12-08 12:33:08'),
(13, 2, 'Morning Work', 'morning-work', '1638991647.png', '1638991647.png', '2021-12-08 12:27:27', '2021-12-08 12:27:27'),
(14, 2, 'Torche 45', 'torche-45', '1638991679.png', '1638991679.png', '2021-12-08 12:27:59', '2021-12-08 12:27:59'),
(15, 2, 'Hips', 'hips', '1638991800.png', '1638991800.png', '2021-12-08 12:30:00', '2021-12-08 12:30:00'),
(16, 3, 'Abs 30', 'abs-30', '1638991839.png', '1638991839.png', '2021-12-08 12:30:39', '2021-12-08 12:30:39'),
(17, 3, 'Abs 30 2', 'abs-30-2', '1638991866.png', '1638991866.png', '2021-12-08 12:31:06', '2021-12-08 12:31:06'),
(18, 3, 'Morning Morning Workout', 'morning-morning-workout', '1638991897.png', '1638991897.png', '2021-12-08 12:31:37', '2021-12-08 12:31:37'),
(19, 3, 'Morning Morning Workout 2', 'morning-morning-workout-2', '1638991921.png', '1638991921.png', '2021-12-08 12:32:01', '2021-12-08 12:32:01'),
(20, 3, '45 Full Body', '45-full-body', '1638991940.png', '1638991940.png', '2021-12-08 12:32:20', '2021-12-08 12:32:20'),
(21, 3, 'Hard Intense', 'hard-intense', '1638991964.png', '1638991964.png', '2021-12-08 12:32:44', '2021-12-08 12:32:44');

-- --------------------------------------------------------

--
-- Table structure for table `workout_categories`
--

CREATE TABLE `workout_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workout_categories`
--

INSERT INTO `workout_categories` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Easy', '2021-12-08 11:51:34', '2021-12-08 11:51:34'),
(2, 'Medium', '2021-12-08 11:51:34', '2021-12-08 11:51:34'),
(3, 'Hard', '2021-12-08 11:51:34', '2021-12-08 11:51:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food_recipes`
--
ALTER TABLE `food_recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meal_plans`
--
ALTER TABLE `meal_plans`
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
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program_categories`
--
ALTER TABLE `program_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suggestions`
--
ALTER TABLE `suggestions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `workouts`
--
ALTER TABLE `workouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workout_categories`
--
ALTER TABLE `workout_categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food_recipes`
--
ALTER TABLE `food_recipes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `meal_plans`
--
ALTER TABLE `meal_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `program_categories`
--
ALTER TABLE `program_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `suggestions`
--
ALTER TABLE `suggestions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `workouts`
--
ALTER TABLE `workouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `workout_categories`
--
ALTER TABLE `workout_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
