-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2019 at 03:15 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bncd1`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_companies`
--

CREATE TABLE `about_companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ban` varchar(700) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission_ban` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ban` longtext COLLATE utf8mb4_unicode_ci,
  `short_description_ban` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vision_ban` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `vision` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_companies`
--

INSERT INTO `about_companies` (`id`, `title`, `short_description`, `image`, `title_ban`, `mission_ban`, `description_ban`, `short_description_ban`, `vision_ban`, `description`, `vision`, `mission`, `created_at`, `updated_at`) VALUES
(1, 'BCIC COLLEGE', '<p>\r\n\r\n</p><p></p>\r\n\r\nBCIC College started its journey in 1983 with the slogan “Education for Humanization”. The motto of this institution is to make the students worthy citizens and able leaders to serve the country and the world community. Besides, academic programs, we do duly emphasize on curricular and co-curricular activities to explore their hidden talents. Our efforts are also directed to ensure their sound state of mind and body.<div>\r\n\r\nIt really gives me immense pleasure to learn that the students of BCIC College are groomed with digital contents and well acquainted with the ICT devices to face the challenges of the 21st century. I wish BCIC College will keep up its tempo of excellence in the years to come.\r\n\r\n<br>&nbsp;\r\n\r\n<p></p>\r\n\r\n<br><p></p>                                </div>', 'images/about/about.jpg', 'বি সি আই সি কলেজ', '<p>বিসিআইসি কলেজ ঢাকা পৃথক পৃথক প্রতিষ্ঠান হিসেবে জুলাই 1991 সালে আসছে। সময় থেকে প্রাচীনতম শিক্ষা বর্তমান উত্থিত সভ্যতার প্রধান অনুঘটক হিসাবে গণ্য করা হয়েছে। কিন্তু বিদ্যমান শিক্ষা ব্যবস্থায় বাণিজ্যিক উদ্দেশ্য এবং ব্যবহারিক শিক্ষার অভাব, আমাদের মোট সামাজিক ব্যবস্থা অন্ধকারে আটকে আছে। এটি মনে রেখে বাংলাদেশ কেমিক্যাল ইন্ডাস্ট্রিজ কর্পোরেশন এই প্রতিষ্ঠানটিকে অন্ধকার থেকে একটি ধাপের পাথর হিসাবে প্রতিষ্ঠা করেছে, এই প্রতিষ্ঠানটি মিরপুর বোটানিকাল গার্ডেন এবং ঢাকা ন্যাশনাল চিড়িয়াখানায় অবস্থিত 6২6 একর জমিতে আরামদায়ক এবং ঠাণ্ডা পরিবেশের আওতায় অবস্থিত।<br></p>', '<p>বিসিআইসি কলেজ ঢাকা পৃথক পৃথক প্রতিষ্ঠান হিসেবে জুলাই 1991 সালে আসছে। সময় থেকে প্রাচীনতম শিক্ষা বর্তমান উত্থিত সভ্যতার প্রধান অনুঘটক হিসাবে গণ্য করা হয়েছে। কিন্তু বিদ্যমান শিক্ষা ব্যবস্থায় বাণিজ্যিক উদ্দেশ্য এবং ব্যবহারিক শিক্ষার অভাব, আমাদের মোট সামাজিক ব্যবস্থা অন্ধকারে আটকে আছে। এটি মনে রেখে বাংলাদেশ কেমিক্যাল ইন্ডাস্ট্রিজ কর্পোরেশন এই প্রতিষ্ঠানটিকে অন্ধকার থেকে একটি ধাপের পাথর হিসাবে প্রতিষ্ঠা করেছে, এই প্রতিষ্ঠানটি মিরপুর বোটানিকাল গার্ডেন এবং ঢাকা ন্যাশনাল চিড়িয়াখানায় অবস্থিত 6২6 একর জমিতে আরামদায়ক এবং ঠাণ্ডা পরিবেশের আওতায় অবস্থিত।<br></p>', '<p>বিসিআইসি কলেজ ঢাকা পৃথক পৃথক প্রতিষ্ঠান হিসেবে জুলাই 1991 সালে আসছে। সময় থেকে প্রাচীনতম শিক্ষা বর্তমান উত্থিত সভ্যতার প্রধান অনুঘটক হিসাবে গণ্য করা হয়েছে। কিন্তু বিদ্যমান শিক্ষা ব্যবস্থায় বাণিজ্যিক উদ্দেশ্য এবং ব্যবহারিক শিক্ষার অভাব, আমাদের মোট সামাজিক ব্যবস্থা অন্ধকারে আটকে আছে। এটি মনে রেখে বাংলাদেশ কেমিক্যাল ইন্ডাস্ট্রিজ কর্পোরেশন এই প্রতিষ্ঠানটিকে অন্ধকার থেকে একটি ধাপের পাথর হিসাবে প্রতিষ্ঠা করেছে, এই প্রতিষ্ঠানটি মিরপুর বোটানিকাল গার্ডেন এবং ঢাকা ন্যাশনাল চিড়িয়াখানায় অবস্থিত 6২6 একর জমিতে আরামদায়ক এবং ঠাণ্ডা পরিবেশের আওতায় অবস্থিত।<br></p>', '<p>বিসিআইসি কলেজ ঢাকা পৃথক পৃথক প্রতিষ্ঠান হিসেবে জুলাই 1991 সালে আসছে। সময় থেকে প্রাচীনতম শিক্ষা বর্তমান উত্থিত সভ্যতার প্রধান অনুঘটক হিসাবে গণ্য করা হয়েছে। কিন্তু বিদ্যমান শিক্ষা ব্যবস্থায় বাণিজ্যিক উদ্দেশ্য এবং ব্যবহারিক শিক্ষার অভাব, আমাদের মোট সামাজিক ব্যবস্থা অন্ধকারে আটকে আছে। এটি মনে রেখে বাংলাদেশ কেমিক্যাল ইন্ডাস্ট্রিজ কর্পোরেশন এই প্রতিষ্ঠানটিকে অন্ধকার থেকে একটি ধাপের পাথর হিসাবে প্রতিষ্ঠা করেছে, এই প্রতিষ্ঠানটি মিরপুর বোটানিকাল গার্ডেন এবং ঢাকা ন্যাশনাল চিড়িয়াখানায় অবস্থিত 6২6 একর জমিতে আরামদায়ক এবং ঠাণ্ডা পরিবেশের আওতায় অবস্থিত।<br></p>', '<p>\r\n\r\n\r\n\r\nBCIC College started its journey in 1983 with the slogan “Education for Humanization”. The motto of this institution is to make the students worthy citizens and able leaders to serve the country and the world community. Besides, academic programs, we do duly emphasize on curricular and co-curricular activities to explore their hidden talents. Our efforts are also directed to ensure their sound state of mind and body.\r\n\r\n\r\n<br></p><p>\r\n\r\nIt really gives me immense pleasure to learn that the students of BCIC College are groomed with digital contents and well acquainted with the ICT devices to face the challenges of the 21st century. I wish BCIC College will keep up its tempo of excellence in the years to come.\r\n\r\n<br></p>', '<p>\r\n\r\n\r\n\r\nBCIC College Dhaka came into being in July 1991 as a separate institution. From time immemorial education has been regarded as the main catalyst of the present flourished civilization. But in the existing education system commercial purpose and lack of pragmatic education, our total social system is gripping in the darkness. Keeping it in mind Bangladesh Chemical Industries Corporation has established this institution as a stepping stone from the darkness, This institution is situated in the lap of Mirpur Botanical Garden and Dhaka National Zoo covering 6.16 Acres of land with congenial and fasciuating atmosphere.\r\n\r\n\r\n<br></p>', '<p>\r\n\r\n\r\n\r\nThe College authority has always been keen to keep all kinds of developing activities continued. With the flow of development, the college has been constructed as a three-storied building and the facilities of laboratory rooms, students´ common rooms and the library room have been increased. From the beginning of the session there is an access for all students to cultural and sports competitions in keeping with regular class lessons on pre-arranged schedule such as general knowledge, science exhibition, recitation, music, painting, spelling, extempore speech, essay writing, debating, wall magazine, football, cricket, badminton, hand ball, volley ball, and so on.\r\n\r\n\r\n<br></p>', NULL, '2019-04-02 02:18:34');

-- --------------------------------------------------------

--
-- Table structure for table `academic_years`
--

CREATE TABLE `academic_years` (
  `id` int(10) UNSIGNED NOT NULL,
  `academic_year` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `academic_years`
--

INSERT INTO `academic_years` (`id`, `academic_year`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '2019', 1, 1, NULL, NULL, NULL),
(2, '2020', 0, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blood_groups`
--

CREATE TABLE `blood_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blood_groups`
--

INSERT INTO `blood_groups` (`id`, `blood_group`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'A+', 1, 1, NULL, NULL, NULL),
(2, 'AB+', 1, 1, NULL, NULL, NULL),
(3, 'O+', 1, 1, NULL, NULL, NULL),
(4, 'O-', 1, 1, NULL, NULL, NULL),
(5, 'B+', 1, 1, NULL, NULL, NULL),
(6, 'B-', 1, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `has_group` tinyint(1) NOT NULL COMMENT '1=This class has group, 0=This class has no group',
  `division` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=School (junior) , 2=College (Senior)',
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `name`, `has_group`, `division`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'I', 0, 1, 1, NULL, NULL, NULL, NULL),
(2, 'II', 0, 1, 1, NULL, NULL, NULL, NULL),
(3, 'III', 0, 1, 1, NULL, NULL, NULL, NULL),
(4, 'IV', 0, 1, 1, NULL, NULL, NULL, NULL),
(5, 'V', 0, 1, 1, NULL, NULL, NULL, NULL),
(6, 'VI', 0, 1, 1, NULL, NULL, NULL, NULL),
(7, 'VII', 0, 1, 1, NULL, NULL, NULL, NULL),
(8, 'VIII', 0, 1, 1, NULL, NULL, NULL, NULL),
(9, 'IX', 1, 1, 1, NULL, NULL, NULL, NULL),
(10, 'X', 1, 1, 1, NULL, NULL, NULL, NULL),
(11, 'XI', 1, 2, 1, NULL, NULL, NULL, '2019-07-01 04:10:11'),
(12, 'XII', 1, 2, 1, NULL, NULL, NULL, '2019-07-01 04:10:04'),
(13, 'SSC Examinee', 1, 2, 1, NULL, NULL, NULL, NULL),
(14, 'HSC Examinee', 1, 2, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `class_routine`
--

CREATE TABLE `class_routine` (
  `id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `class_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `class_routine`
--

INSERT INTO `class_routine` (`id`, `batch_id`, `branch_id`, `class_date`, `start_time`, `end_time`, `teacher_id`, `subject_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2019-09-01', '10:00:00', '15:00:00', 2055, 4, '2019-09-11 17:03:52', '2019-09-11 17:03:52'),
(2, 2, 1, '2019-09-02', '10:00:00', '15:00:00', 2055, 3, '2019-09-11 17:03:52', '2019-09-11 17:03:52'),
(3, 2, 1, '2019-09-03', '10:00:00', '15:00:00', 2055, 4, '2019-09-11 17:03:52', '2019-09-11 17:03:52'),
(4, 2, 1, '2019-09-04', '10:00:00', '15:00:00', 2055, 5, '2019-09-11 17:03:52', '2019-09-11 17:03:52'),
(5, 2, 1, '2019-09-05', '10:00:00', '15:00:00', 2055, 4, '2019-09-11 17:03:52', '2019-09-11 17:03:52'),
(6, 2, 1, '2019-09-06', '10:00:00', '15:00:00', 2055, 5, '2019-09-11 17:03:52', '2019-09-11 17:03:52'),
(7, 2, 1, '2019-09-07', '10:00:00', '15:00:00', 2055, 3, '2019-09-11 17:03:52', '2019-09-11 17:03:52'),
(8, 2, 1, '2019-09-08', '10:00:00', '15:00:00', 2055, 5, '2019-09-11 17:03:52', '2019-09-11 17:03:52'),
(9, 2, 1, '2019-09-09', '10:00:00', '15:00:00', 2055, 5, '2019-09-11 17:03:52', '2019-09-11 17:03:52'),
(10, 2, 1, '2019-09-10', '10:00:00', '15:00:00', 2055, 4, '2019-09-11 17:03:52', '2019-09-11 17:03:52'),
(11, 2, 1, '2019-09-11', '10:00:00', '15:00:00', 2055, 5, '2019-09-11 17:03:52', '2019-09-11 17:03:52'),
(12, 2, 1, '2019-09-12', '10:00:00', '15:00:00', 2055, 3, '2019-09-11 17:03:52', '2019-09-11 17:03:52'),
(13, 2, 1, '2019-10-20', '10:00:00', '15:00:00', 2055, 4, '2019-09-11 17:03:52', '2019-09-11 17:03:52');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ban` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_ban` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `web_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map_embed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_contact_cat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_regiment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_regiment_ban` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`id`, `name`, `name_ban`, `address`, `address_ban`, `mobile_no`, `web_address`, `map_embed`, `fk_contact_cat`, `contact_regiment`, `contact_regiment_ban`, `created_at`, `updated_at`) VALUES
(1, 'RAMNA REGIMENT', 'রমনা রেজিমেন্ট', 'Bangladesh National Cadet Corps  32 Isha Kha Avenue, Sector: 06, Uttara moded town, Dhaka-1230', 'বাংলাদেশ জাতীয় ক্যাডেট কর্পস  32 ইশা খ এভিনিউ, সেক্টর: 06, উত্তরা মোডেড শহর, ঢাকা -২30', '018', 'bncc.gov.bd', 'https://www.google.com/maps/embed?pb=', '2', '<p>\r\n\r\nRegiment CommanderLt Col M Khaled Mahmud Tarek, G88-01709993100regtcomd_ramna@bncc.gov.bd\r\n\r\n<br></p>', '<p>বাংলাদেশ জাতীয় ক্যাডেট কর্পস  32 ইশা খ এভিনিউ, সেক্টর: 06, উত্তরা মোডেড শহর, ঢাকা -২30<br></p>', '2019-04-23 05:45:33', '2019-04-23 06:05:27');

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_percent` tinyint(4) DEFAULT NULL,
  `days_limit` tinyint(4) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `batches`
--

INSERT INTO `courses` (`id`, `name`, `discount_percent`, `days_limit`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(4, 'BCS', 40, 30, 1, 1, 1, '2019-07-25 03:00:13', '2019-08-05 23:10:50'),
(5, 'Bank Job', 10, 7, 1, 1, 1, '2019-07-25 03:00:40', '2019-08-05 22:22:57');

-- --------------------------------------------------------

--
-- Table structure for table `curricula`
--

CREATE TABLE `curricula` (
  `id` int(10) UNSIGNED NOT NULL,
  `curriculum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `curricula`
--

INSERT INTO `curricula` (`id`, `curriculum`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'English Medium', 1, 1, 1, '2019-09-16 18:00:00', '2019-09-16 18:00:00'),
(2, 'Bangla Medium', 1, 1, 1, '2019-09-16 18:00:00', '2019-09-16 18:00:00'),
(3, 'English Version', 1, 1, 1, '2019-09-16 18:00:00', '2019-09-16 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `discounts_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`id`, `discounts_name`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Stipend Holder', 1, 1, NULL, NULL, NULL),
(2, 'Scholarship Discount', 1, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `created_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Science', 1, NULL, NULL),
(2, 'Business', 1, '2019-09-17 18:00:00', '2019-09-17 18:00:00'),
(3, 'Humanities Studies', 1, '2019-09-17 18:00:00', '2019-09-17 18:00:00'),
(4, 'N/A', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `guardian_types`
--

CREATE TABLE `guardian_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guardian_types`
--

INSERT INTO `guardian_types` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Departmental', 1, NULL, NULL),
(2, 'Non-Departmental', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `important_links`
--

CREATE TABLE `important_links` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ban` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `important_links`
--

INSERT INTO `important_links` (`id`, `name`, `name_ban`, `url`, `created_at`, `updated_at`) VALUES
(1, 'e-Book', 'ই-বুক', 'http://www.ebook.gov.bd/', '2019-03-16 06:29:37', '2019-04-04 03:53:47'),
(2, 'Ministry of Education', 'মিনিস্ট্রি অব এডুকেশন', 'https://moedu.gov.bd/', '2019-03-25 00:13:01', '2019-04-04 04:23:07'),
(3, 'Shikkhok Batayon', 'শিক্ষক বাতায়ন', 'https://www.teachers.gov.bd/', '2019-03-25 00:14:04', '2019-04-04 04:14:22'),
(4, 'NCTB', 'এনসিটিবি', 'http://www.nctb.gov.bd/', '2019-03-25 00:17:46', '2019-04-04 03:56:06'),
(5, 'Ministry of Primary and Mass Education', '', 'https://mopme.gov.bd/', '2019-03-25 00:18:13', '2019-03-25 00:18:38'),
(6, 'Muktopaath', '', 'http://www.muktopaath.gov.bd/login/auth', '2019-03-25 00:19:04', '2019-03-25 00:19:04'),
(7, 'Bangladesh Portal', '', 'https://bangladesh.gov.bd/index.php', '2019-03-25 00:19:26', '2019-03-25 00:19:26'),
(8, 'Public Library', '', 'http://www.centralpubliclibrarydhaka.org/', '2019-03-25 00:20:18', '2019-03-25 00:20:18'),
(9, 'Dhaka Board', 'ঢাকা বোর্ড', 'http://dhakaeducationboard.portal.gov.bd/', '2019-03-25 00:20:45', '2019-04-04 03:56:28'),
(10, 'Directorate of Primary Education', '', 'http://www.dpe.gov.bd/', '2019-03-25 00:21:45', '2019-03-25 00:21:45'),
(11, 'Directorate of Secondary and Higher Education', '', 'http://www.dshe.gov.bd/', '2019-03-25 00:22:05', '2019-03-25 00:22:05');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(10) UNSIGNED NOT NULL,
  `study_class_id` int(10) UNSIGNED NOT NULL,
  `total_amount` int(11) NOT NULL DEFAULT '0',
  `discount_amount` int(11) DEFAULT '0',
  `total_payable` int(11) DEFAULT '0',
  `paid_amount` int(11) DEFAULT '0',
  `due_amount` int(11) DEFAULT '0',
  `due_for_next_amount` int(11) DEFAULT '0',
  `split_invoice_no` int(11) DEFAULT '0',
  `main_invoice_no` int(11) DEFAULT '0',
  `academic_year_id` int(10) UNSIGNED NOT NULL,
  `invoice_category_id` int(10) UNSIGNED NOT NULL,
  `payment_date_from` date NOT NULL,
  `payment_date_to` date DEFAULT NULL,
  `barcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=Unpaid, 1=Total Paid, 2=due, 3=Partial Paid',
  `verify_date` date DEFAULT NULL,
  `verify_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `study_class_id`, `total_amount`, `discount_amount`, `total_payable`, `paid_amount`, `due_amount`, `due_for_next_amount`, `split_invoice_no`, `main_invoice_no`, `academic_year_id`, `invoice_category_id`, `payment_date_from`, `payment_date_to`, `barcode`, `payment_status`, `verify_date`, `verify_time`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(86, 27, 1800, 1, 1799, 0, 1800, 0, 0, 0, 1, 1, '2019-10-09', '0000-00-00', '27A1800Y19', 0, NULL, NULL, 1, NULL, '2019-10-09 09:36:24', '2019-10-13 09:06:12'),
(87, 28, 1915, 0, 1915, 0, 1915, 0, 0, 0, 1, 1, '2019-10-09', '0000-00-00', '28A1915Y19', 0, NULL, NULL, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(88, 29, 1800, 0, 1800, 0, 1800, 0, 0, 0, 1, 1, '2019-10-09', '0000-00-00', '29A1800Y19', 0, NULL, NULL, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_categories`
--

CREATE TABLE `invoice_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `collection_type` tinyint(2) UNSIGNED DEFAULT '2' COMMENT '1=Yearly Collection, 2=Monthly Collection,3=Any Type Collection',
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoice_categories`
--

INSERT INTO `invoice_categories` (`id`, `name`, `collection_type`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Promotional Invoice', 1, 1, 1, NULL, '2019-06-29 18:00:00', NULL),
(2, 'Monthly Invoice', 2, 1, 1, NULL, '2019-06-29 18:00:00', NULL),
(3, 'Exam Invoice', 3, 1, 1, NULL, '2019-06-29 18:00:00', NULL),
(4, 'Report Card', 3, 1, 1, NULL, '2019-06-29 18:00:00', NULL),
(5, 'Promoted Invoice', 1, 1, 1, NULL, '2019-09-30 18:00:00', '2019-09-30 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_details`
--

CREATE TABLE `invoice_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `invoice_id` int(10) UNSIGNED NOT NULL,
  `study_class_id` int(10) UNSIGNED NOT NULL,
  `invoice_category_id` int(10) UNSIGNED NOT NULL,
  `discount_id` int(10) UNSIGNED DEFAULT NULL,
  `guardian_type_id` int(10) UNSIGNED DEFAULT NULL,
  `group_id` int(10) UNSIGNED DEFAULT NULL,
  `total_amount` int(11) NOT NULL DEFAULT '0',
  `discount_amount` int(11) DEFAULT '0',
  `total_payable` int(11) DEFAULT '0',
  `paid_amount` int(11) DEFAULT '0',
  `due_amount` int(11) DEFAULT '0',
  `payment_month` tinyint(1) DEFAULT NULL,
  `academic_year_id` int(10) UNSIGNED NOT NULL,
  `payment_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoice_details`
--

INSERT INTO `invoice_details` (`id`, `invoice_id`, `study_class_id`, `invoice_category_id`, `discount_id`, `guardian_type_id`, `group_id`, `total_amount`, `discount_amount`, `total_payable`, `paid_amount`, `due_amount`, `payment_month`, `academic_year_id`, `payment_status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(203, 86, 27, 1, NULL, 1, 4, 300, 0, 300, 0, 0, NULL, 1, 0, 1, NULL, '2019-10-09 09:36:24', '2019-10-09 09:36:24'),
(204, 86, 27, 2, NULL, 1, 4, 150, 0, 150, 0, 0, 1, 1, 0, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(205, 86, 27, 2, NULL, 1, 4, 150, 0, 150, 0, 0, 2, 1, 0, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(206, 86, 27, 2, NULL, 1, 4, 150, 0, 150, 0, 0, 3, 1, 0, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(207, 86, 27, 2, NULL, 1, 4, 150, 0, 150, 0, 0, 4, 1, 0, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(208, 86, 27, 2, NULL, 1, 4, 150, 0, 150, 0, 0, 5, 1, 0, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(209, 86, 27, 2, NULL, 1, 4, 150, 0, 150, 0, 0, 6, 1, 0, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(210, 86, 27, 2, NULL, 1, 4, 150, 0, 150, 0, 0, 7, 1, 0, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(211, 86, 27, 2, NULL, 1, 4, 150, 0, 150, 0, 0, 8, 1, 0, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(212, 86, 27, 2, NULL, 1, 4, 150, 0, 150, 0, 0, 9, 1, 0, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(213, 86, 27, 2, NULL, 1, 4, 150, 0, 150, 0, 0, 10, 1, 0, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(214, 87, 28, 1, NULL, 2, 4, 315, 0, 315, 0, 0, NULL, 1, 0, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(215, 87, 28, 2, NULL, 2, 4, 160, 0, 160, 0, 0, 1, 1, 0, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(216, 87, 28, 2, NULL, 2, 4, 160, 0, 160, 0, 0, 2, 1, 0, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(217, 87, 28, 2, NULL, 2, 4, 160, 0, 160, 0, 0, 3, 1, 0, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(218, 87, 28, 2, NULL, 2, 4, 160, 0, 160, 0, 0, 4, 1, 0, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(219, 87, 28, 2, NULL, 2, 4, 160, 0, 160, 0, 0, 5, 1, 0, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(220, 87, 28, 2, NULL, 2, 4, 160, 0, 160, 0, 0, 6, 1, 0, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(221, 87, 28, 2, NULL, 2, 4, 160, 0, 160, 0, 0, 7, 1, 0, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(222, 87, 28, 2, NULL, 2, 4, 160, 0, 160, 0, 0, 8, 1, 0, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(223, 87, 28, 2, NULL, 2, 4, 160, 0, 160, 0, 0, 9, 1, 0, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(224, 87, 28, 2, NULL, 2, 4, 160, 0, 160, 0, 0, 10, 1, 0, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(225, 88, 29, 1, NULL, 1, 4, 300, 0, 300, 0, 0, NULL, 1, 0, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(226, 88, 29, 2, NULL, 1, 4, 150, 0, 150, 0, 0, 1, 1, 0, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(227, 88, 29, 2, NULL, 1, 4, 150, 0, 150, 0, 0, 2, 1, 0, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(228, 88, 29, 2, NULL, 1, 4, 150, 0, 150, 0, 0, 3, 1, 0, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(229, 88, 29, 2, NULL, 1, 4, 150, 0, 150, 0, 0, 4, 1, 0, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(230, 88, 29, 2, NULL, 1, 4, 150, 0, 150, 0, 0, 5, 1, 0, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(231, 88, 29, 2, NULL, 1, 4, 150, 0, 150, 0, 0, 6, 1, 0, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(232, 88, 29, 2, NULL, 1, 4, 150, 0, 150, 0, 0, 7, 1, 0, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(233, 88, 29, 2, NULL, 1, 4, 150, 0, 150, 0, 0, 8, 1, 0, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(234, 88, 29, 2, NULL, 1, 4, 150, 0, 150, 0, 0, 9, 1, 0, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(235, 88, 29, 2, NULL, 1, 4, 150, 0, 150, 0, 0, 10, 1, 0, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_head_details`
--

CREATE TABLE `invoice_head_details` (
  `id` int(11) NOT NULL,
  `invoice_id` int(10) UNSIGNED NOT NULL,
  `invoice_detail_id` int(10) UNSIGNED NOT NULL,
  `head_id` int(10) UNSIGNED NOT NULL,
  `fee_head_amount` int(11) NOT NULL DEFAULT '0',
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoice_head_details`
--

INSERT INTO `invoice_head_details` (`id`, `invoice_id`, `invoice_detail_id`, `head_id`, `fee_head_amount`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(365, 86, 203, 1, 100, 1, NULL, '2019-10-09 09:36:24', '2019-10-09 09:36:24'),
(366, 86, 203, 4, 100, 1, NULL, '2019-10-09 09:36:24', '2019-10-09 09:36:24'),
(367, 86, 203, 5, 100, 1, NULL, '2019-10-09 09:36:24', '2019-10-09 09:36:24'),
(368, 86, 204, 6, 150, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(369, 86, 205, 6, 150, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(370, 86, 206, 6, 150, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(371, 86, 207, 6, 150, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(372, 86, 208, 6, 150, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(373, 86, 209, 6, 150, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(374, 86, 210, 6, 150, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(375, 86, 211, 6, 150, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(376, 86, 212, 6, 150, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(377, 86, 213, 6, 150, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(378, 87, 214, 1, 105, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(379, 87, 214, 4, 105, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(380, 87, 214, 5, 105, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(381, 87, 215, 6, 160, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(382, 87, 216, 6, 160, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(383, 87, 217, 6, 160, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(384, 87, 218, 6, 160, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(385, 87, 219, 6, 160, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(386, 87, 220, 6, 160, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(387, 87, 221, 6, 160, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(388, 87, 222, 6, 160, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(389, 87, 223, 6, 160, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(390, 87, 224, 6, 160, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(391, 88, 225, 1, 100, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(392, 88, 225, 4, 100, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(393, 88, 225, 5, 100, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(394, 88, 226, 6, 150, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(395, 88, 227, 6, 150, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(396, 88, 228, 6, 150, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(397, 88, 229, 6, 150, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(398, 88, 230, 6, 150, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(399, 88, 231, 6, 150, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(400, 88, 232, 6, 150, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(401, 88, 233, 6, 150, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(402, 88, 234, 6, 150, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25'),
(403, 88, 235, 6, 150, 1, NULL, '2019-10-09 09:36:25', '2019-10-09 09:36:25');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_class` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `serial_num` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `big_icon` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=For Admin / Student, 2=For Applicant',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `icon_class`, `url`, `status`, `serial_num`, `slug`, `icon`, `big_icon`, `type`, `created_at`, `updated_at`) VALUES
(14, 'Payment', 'fa fa-money', '#', 1, 7, '[\"payment-history\",\"receive-student-payment\"]', 'images/menu/icon/2019/09/14/payment-b14-09-201914-55-54.png', 'images/menu/big-icon/2019/09/14/payment-b14-09-201914-55-54.png', 1, '2019-05-21 13:51:47', '2019-09-14 06:55:54'),
(15, 'Admin', 'fa fa-user-plus', 'all-users', 1, 12, '[\"users\"]', 'images/menu/icon/2019/08/20/admin-up20-08-201901-08-47.png', 'images/menu/big-icon/2019/08/20/admin-up20-08-201901-08-47.png', 1, '2019-05-22 16:32:56', '2019-09-09 16:02:53'),
(16, 'Settings', 'fa fa-wrench', '#', 1, 13, '[\"primary-info\",\"acl\",\"menu\"]', NULL, NULL, 1, '2019-05-22 16:33:25', '2019-09-09 16:03:08'),
(20, 'User Excel Import', 'fa fa-folder', 'user-import-form', 2, 31, '[\"menu\"]', NULL, NULL, 1, '2019-05-31 06:47:28', '2019-09-09 16:01:31'),
(23, 'SMS', 'fa fa-comments-o', 'single-sms', 1, 8, '[\"sms\",\"sms-log\"]', 'images/menu/icon/2019/09/15/sms-b15-09-201900-17-13.png', 'images/menu/big-icon/2019/09/15/sms-b15-09-201900-17-13.png', 1, '2019-06-19 03:49:56', '2019-09-14 16:17:13'),
(24, 'View Notice', 'fa fa-file-text-o', 'notice', 2, 9, '[\"notice-view\"]', 'images/menu/icon/2019/08/19/notes19-08-201918-55-36.png', 'images/menu/big-icon/2019/08/19/notes19-08-201918-55-36.png', 1, '2019-06-20 20:28:00', '2019-09-09 15:59:29'),
(25, 'Academic', 'fa fa-bars', '#', 1, 4, '[\"notice\",\"batches\",\"events\",\"calendar\"]', 'images/menu/icon/2019/09/05/academic05-09-201917-02-10.png', 'images/menu/big-icon/2019/09/05/academic05-09-201917-02-10.png', 1, '2019-06-20 20:28:45', '2019-09-09 15:56:59'),
(26, 'Attendance', 'fa fa-calendar-check-o', '#', 2, 5, '[\"attendance\"]', 'images/menu/icon/2019/09/08/attendance08-09-201917-03-00.png', 'images/menu/big-icon/2019/09/08/attendance08-09-201917-03-00.png', 1, '2019-06-20 20:31:09', '2019-09-10 00:15:45'),
(29, 'My Routine', 'fa fa-file-text', 'my-routine', 1, 19, '[\"my-routine\"]', 'images/menu/icon/2019/09/15/calendar-515-09-201919-51-31.png', 'images/menu/big-icon/2019/09/15/calendar-515-09-201919-51-31.png', 1, '2019-06-22 16:32:13', '2019-09-15 11:51:31'),
(30, 'My Profile', 'fa fa-user', 'my-profile', 1, 14, '[\"my-form\"]', 'images/menu/icon/2019/09/15/profile15-09-201919-32-01.png', 'images/menu/big-icon/2019/09/15/profile15-09-201919-32-01.png', 1, '2019-06-22 16:33:04', '2019-09-15 11:32:01'),
(32, 'My Form', 'fa fa-file-text', 'my-form', 1, 15, '[\"my-form\"]', 'images/menu/icon/2019/09/08/my-form08-09-201917-08-04.png', 'images/menu/big-icon/2019/09/08/my-form08-09-201917-08-04.png', 1, '2019-06-23 19:51:24', '2019-09-09 16:03:47'),
(35, 'My Attendance', 'fa fa-calendar-check-o', 'my-attendance', 1, 18, '[\"my-attendance\"]', 'images/menu/icon/2019/09/08/student-attendance08-09-201917-13-46.png', 'images/menu/big-icon/2019/09/08/student-attendance08-09-201917-13-46.png', 1, '2019-06-24 07:55:45', '2019-09-09 16:06:18'),
(38, 'Admission', 'fa fa-university', '#', 1, 2, '[\"student\"]', 'images/menu/icon/2019/09/08/admission08-09-201917-00-18.png', 'images/menu/big-icon/2019/09/08/admission08-09-201917-00-18.png', 1, '2019-06-27 08:10:56', '2019-09-09 15:56:15'),
(41, 'Digital Coach', 'fa fa-location-arrow', '#', 2, 6, '[\"my-form\",\"exam-question\"]', 'images/menu/icon/2019/08/23/digital-coach23-08-201910-34-35.png', 'images/menu/big-icon/2019/08/23/digital-coach23-08-201910-34-35.png', 1, '2019-06-29 11:05:34', '2019-09-09 15:57:37'),
(44, 'Make Payment', 'fa fa-money', 'payment', 1, 29, '[\"my-payment\"]', 'images/menu/icon/2019/09/08/payment08-09-201917-03-19.png', 'images/menu/big-icon/2019/09/08/payment08-09-201917-03-19.png', 2, '2019-06-29 14:22:50', '2019-09-09 15:53:25'),
(45, 'Information', 'fa fa-address-book-o', '#', 1, 3, '[\"student\",\"teacher\"]', 'images/menu/icon/2019/09/08/information08-09-201917-01-49.png', 'images/menu/big-icon/2019/09/08/information08-09-201917-01-49.png', 1, '2019-07-03 21:26:37', '2019-09-09 15:56:38'),
(46, 'Registration', 'fa fa-folder', 'personal-info', 1, 28, '[\"my-form\"]', 'images/menu/icon/2019/09/08/admission08-09-201917-02-23.png', 'images/menu/big-icon/2019/09/08/admission08-09-201917-02-23.png', 2, '2019-08-18 20:55:36', '2019-09-09 15:53:14'),
(47, 'Daily Statement', 'fa fa-folder', 'daily-statement', 1, 10, '[\"daily-statement\"]', 'images/menu/icon/2019/09/14/find-daily-statement-s14-09-201914-56-46.png', 'images/menu/big-icon/2019/09/14/find-daily-statement-s14-09-201914-56-46.png', 1, '2019-08-28 23:30:13', '2019-09-14 06:56:46'),
(48, 'Set-Up', 'fa fa-folder', '#', 1, 11, '[\"branches\"]', 'images/menu/icon/2019/09/14/setup-s14-09-201914-57-36.png', 'images/menu/big-icon/2019/09/14/setup-s14-09-201914-57-36.png', 1, '2019-08-28 23:51:16', '2019-09-14 06:57:37'),
(49, 'Dashboard', 'fa fa-folder', 'dashboard', 1, 1, '[\"calendar\",\"student-dashboard\"]', 'images/menu/icon/2019/09/15/dashboard-b15-09-201900-18-09.png', 'images/menu/big-icon/2019/09/15/dashboard-b15-09-201900-18-09.png', 1, '2019-09-01 23:06:23', '2019-09-14 16:18:09'),
(50, 'My Form', 'fa fa-folder', 'my-form', 1, 30, '[\"my-form\"]', 'images/menu/icon/2019/09/08/my-form08-09-201917-09-17.png', 'images/menu/big-icon/2019/09/08/my-form08-09-201917-09-17.png', 2, '2019-09-03 21:46:32', '2019-09-09 15:53:50'),
(52, 'Payment History', 'fa fa-lock', 'my-payment-history', 1, 17, '[\"my-payment-history\"]', 'images/menu/icon/2019/09/08/payment-history08-09-201917-15-44.png', 'images/menu/big-icon/2019/09/08/payment-history08-09-201917-15-44.png', 1, '2019-09-05 19:04:39', '2019-09-11 20:38:07'),
(53, 'Make Payment', 'fa fa-money', 'payment', 1, 16, '[\"my-payment\"]', 'images/menu/icon/2019/09/15/payment15-09-201919-35-42.png', 'images/menu/big-icon/2019/09/15/payment15-09-201919-35-42.png', 1, '2019-09-09 15:36:55', '2019-09-15 11:35:42');

-- --------------------------------------------------------

--
-- Table structure for table `menu_settings`
--

CREATE TABLE `menu_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL,
  `slider_bg_color` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_text_color` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bg_color` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_color` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_settings`
--

INSERT INTO `menu_settings` (`id`, `status`, `slider_bg_color`, `slider_text_color`, `bg_color`, `text_color`, `created_at`, `updated_at`) VALUES
(1, 1, '#38030f5e', '#edf2fb', '#ff6600', '#fff', NULL, '2019-03-11 05:40:28');

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
(3, '2015_12_20_100001_create_permissions_table', 3),
(4, '2015_12_20_100002_create_roles_table', 4),
(5, '2015_12_20_100003_create_permission_role_table', 4),
(6, '2015_12_20_100004_create_role_user_table', 4),
(8, '2019_02_19_083426_create_primary_infos_table', 5),
(9, '2019_02_19_113241_create_about_companies_table', 6),
(10, '2019_02_20_045227_create_sliders_table', 7),
(11, '2018_08_06_101634_create_menu_table', 8),
(12, '2018_08_06_101708_create_sub_menu_table', 8),
(13, '2018_08_06_101726_create_sub_sub_menu_table', 8),
(14, '2019_03_03_115155_create_teachers_table', 9),
(15, '2019_03_04_035913_create_teachers_cats_table', 10),
(16, '2019_03_04_063418_create_notice-cats_table', 11),
(17, '2019_03_04_083344_create_notices_table', 12),
(18, '2019_03_05_071949_create_academic_rules_table', 13),
(19, '2019_03_05_081602_create_student_infos_table', 14),
(20, '2019_03_05_093845_create_principal_infos_table', 15),
(21, '2019_03_07_042805_create__page_table', 16),
(22, '2019_03_07_042833_create__page_photo_table', 16),
(23, '2019_03_10_091800_create_calender_events_table', 17),
(24, '2019_03_11_091328_create_menu_settings_table', 18),
(25, '2019_03_16_115115_create_social_icons_table', 19),
(26, '2019_03_16_115251_create_important_links_table', 19),
(27, '2019_03_18_053638_create_three_points_table', 20),
(28, '2019_03_18_073801_create_advisors_table', 21),
(29, '2019_03_18_111920_create_director_messages_table', 22),
(30, '2019_03_19_035255_create_objective_reponsibilities_table', 23),
(31, '2019_03_19_050351_create_bncc_strengths_table', 24),
(32, '2019_03_19_061708_create_bncc_glances_table', 25),
(33, '2019_03_19_064605_create_bncc_evolutions_table', 26),
(34, '2019_03_19_085731_create_organizations_table', 27),
(35, '2019_03_19_093909_create_command_stuctures_table', 28),
(36, '2019_03_19_101642_create_cadet_bnccs_table', 29),
(37, '2019_03_20_062705_create_ex_directors_table', 30),
(38, '2019_03_20_082314_create_army_wings_table', 31),
(39, '2019_03_20_083912_create_naval_wings_table', 32),
(40, '2019_03_20_085942_create_air_wings_table', 33),
(42, '2019_03_20_094517_create_bncc_officers_table', 34),
(43, '2019_03_20_093833_create_bncc_tuos_table', 35),
(44, '2019_03_21_034844_create_bnccos_table', 36),
(45, '2019_03_21_052239_create_bncc_puos_table', 37),
(46, '2019_03_21_055435_create_bncc_cuos_table', 38),
(47, '2019_03_21_090600_create_trainings_table', 39),
(48, '2019_03_21_095035_create_social_activities_table', 40),
(49, '2019_03_21_112530_create_valunteer_activities_table', 41),
(50, '2019_03_21_121727_create_foreign_tours_table', 42),
(51, '2019_03_23_064856_create_bg_images_table', 43),
(54, '2019_03_23_113343_create_contact_cats_table', 44),
(55, '2019_03_23_113611_create_contact_details_table', 44),
(56, '2019_05_19_050705_create_user_infos_table', 45),
(57, '2019_06_01_091519_create_weekly_lectures_table', 46),
(58, '2019_06_11_115205_create_routine_table', 47),
(59, '2019_06_13_063734_create_tests_table', 48),
(60, '2019_06_15_095832_create_students_table', 49),
(61, '2019_06_16_055700_create_invoices_table', 49),
(62, '2019_06_18_110150_create_teachers_table', 50),
(63, '2019_06_19_095542_create_attendances_table', 50),
(64, '2019_07_02_103517_create_exams_table', 51),
(65, '2019_07_18_035836_create_courses_table', 52),
(67, '2019_07_18_0414391_create_sub_courses_table', 53),
(68, '2019_07_23_055737_create_academic_information_table', 54),
(71, '2019_05_18_042635_create_branches_table', 57),
(73, '2019_07_18_041439_create_sub_courses_table', 58),
(79, '2019_07_23_052003_create_batches_table', 59),
(80, '2019_07_24_051555_create_program_studies_table', 60),
(82, '2019_07_15_035836_create_courses_table', 61),
(83, '2019_07_16_102113_create_seasons_table', 62),
(85, '2019_07_19_045511_create_sub_course_prices_table', 63),
(86, '2019_07_21_050609_create_special_discounts_table', 64),
(87, '2019_07_23_082445_create_subjects_table', 65),
(88, '2019_09_17_164300_create_curricula_table', 66),
(89, '2019_09_17_170911_create_religions_table', 67),
(90, '2019_09_17_171557_create_blood_groups_table', 68),
(91, '2019_09_17_185929_create_academic_years_table', 69),
(93, '2019_09_18_110608_create_students_table', 70),
(95, '2019_09_18_112749_create_student_guardians_table', 71),
(97, '2019_09_15_143439_create_groups_table', 73),
(98, '2019_09_18_120004_create_study_classes_table', 74),
(100, '2019_09_18_144051_create_invoices_table', 20),
(101, '2014_10_12_000000_create_users_table', 76),
(102, '2014_10_12_100000_create_password_resets_table', 77),
(103, '2019_09_17_111734_create_study_sessions_table', 78),
(104, '2019_09_17_130545_create_discounts_table', 79);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `title_ban` text COLLATE utf8mb4_unicode_ci,
  `description_ban` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `fk_notice_cat` int(11) UNSIGNED NOT NULL,
  `show_popop` int(11) NOT NULL DEFAULT '0',
  `pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_homepage` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `date`, `title_ban`, `description_ban`, `description`, `fk_notice_cat`, `show_popop`, `pdf`, `show_homepage`, `created_at`, `updated_at`) VALUES
(3, 'সাজেশন ১', '2019-09-10', NULL, NULL, '<p>\r\n\r\n</p><h1><i>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;সাজেশন ১</i></h1><p><i><br></i></p>\r\n\r\n\r\n\r\n&nbsp; &nbsp;<img alt=\"No photo description available\" src=\"https://scontent.fdac3-1.fna.fbcdn.net/v/t1.0-9/69747081_142842256962545_8018171975572652032_n.jpg?_nc_cat=101&amp;_nc_eui2=AeGd34QytE21D8T7OsGXPLFbPwmu4RQpZ2ma1p_1NMnYXB6pZtoSVPuHMIAx-B776s1MMedKhSVjBwjjPRSgykpA8JsGS2cY0M4s4poyuihhTg&amp;_nc_oc=AQn3ufEQW0tsJeUqlXxOXYSFEvT_3JzbaQKeBcY9RQrwxCbRXr9yyR58M7r3CsjklLI&amp;_nc_ht=scontent.fdac3-1.fna&amp;oh=d85fa199f6237f1e00579354d2798122&amp;oe=5E0A3814\">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br><p></p>', 5, 0, NULL, 0, '2019-09-10 08:36:33', '2019-09-10 08:36:33');

-- --------------------------------------------------------

--
-- Table structure for table `notice_cat`
--

CREATE TABLE `notice_cat` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_name_ban` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notice_cat`
--

INSERT INTO `notice_cat` (`id`, `cat_name`, `cat_name_ban`, `keyword`, `created_at`, `updated_at`) VALUES
(1, 'Admission Notice', 'ভর্তি', 'adsmission Notice', '2019-03-04 02:09:46', '2019-03-27 23:19:55'),
(2, 'Academic', '', 'academic notice', '2019-03-04 02:19:23', '2019-03-04 02:19:23'),
(3, 'Exam', '', 'Exam', '2019-03-05 22:46:29', '2019-03-05 22:46:29'),
(4, 'Career', '', 'Career', '2019-03-05 22:46:54', '2019-03-05 22:46:54'),
(5, 'News & Event', '', 'Event', '2019-03-05 22:47:12', '2019-03-24 22:43:03'),
(6, 'Official', '', 'Official', '2019-03-05 22:47:31', '2019-03-05 22:47:31');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `user_id_skip` int(11) UNSIGNED DEFAULT NULL,
  `branch_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notification_read`
--

CREATE TABLE `notification_read` (
  `id` int(11) NOT NULL,
  `notification_id` int(11) NOT NULL,
  `read_by` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_bn` varchar(450) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ban` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ban` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `name`, `name_bn`, `title`, `title_ban`, `description_ban`, `description`, `status`, `link`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Dress Style', 'পোশাকরীতি', 'পোশাকরীতি', 'পোশাকরীতি', '<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: #333333; margin-top: 10px; margin-bottom: 10px; font-size: 20px; background-color: #ffffff; text-align: center;\">শীত কালঃ নভেম্বর-মার্চ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; গ্রীষ্ম কালঃ এপ্রিল-অক্টোবর</h4>\r\n<table style=\"box-sizing: border-box; border-collapse: collapse; width: 825px; background-color: #ffffff; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 13px; margin-left: auto; margin-right: auto;\" border=\"1\" width=\"99%\">\r\n<tbody style=\"box-sizing: border-box;\">\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px; text-align: center;\">প্লে গ্রুপ হতে ৩য় শ্রেণী (বালক)</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">শীত কালঃ সাদা ফুল শার্ট ও এ্যাশ টাই, এ্যাশ ফুলপ্যান্ট ও কালো বেল্ট, কালো স্কুল সু, সাদা মোজা, সবুজ (বটল গ্রীন) পুলওভার।</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">গ্রীষ্ম কালঃ সাদা হাফ শার্ট ও এ্যাশ টাই, এ্যাশ হাফপ্যান্ট ও কালো বেল্ট, কালো স্কুল সু, সাদা মোজা।</h4>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: #333333; margin-top: 10px; margin-bottom: 10px; font-size: 20px; background-color: #ffffff; text-align: justify;\">&nbsp;</h4>\r\n<table style=\"box-sizing: border-box; border-collapse: collapse; width: 825px; background-color: #ffffff; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 13px;\" border=\"1\" width=\"99%\">\r\n<tbody style=\"box-sizing: border-box;\">\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px; text-align: center;\">প্লে গ্রুপ হতে ৩য় শ্রেণী (বালিকা)</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">শীত কালঃ এ্যাশ স্কার্ট, সাদা শার্ট, এ্যাশ টাই, কালো স্কুল সু, সাদা মোজা, সবুজ (বটল গ্রীন) পুলওভার।</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">গ্রীষ্ম কালঃ এ্যাশ স্কার্ট, সাদা হাফশার্ট, কালো স্কুল সু, সাদা মোজা।</h4>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: #333333; margin-top: 10px; margin-bottom: 10px; font-size: 20px; background-color: #ffffff; text-align: justify;\">&nbsp;</h4>\r\n<table style=\"box-sizing: border-box; border-collapse: collapse; width: 825px; background-color: #ffffff; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 13px;\" border=\"1\" width=\"99%\">\r\n<tbody style=\"box-sizing: border-box;\">\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px; text-align: center;\">৪র্থ শ্রেণী হতে ১০ম শ্রেণী (বালক)</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">শীত কালঃ সাদা ফুল শার্ট ও এ্যাশ টাই, এ্যাশ ফুলপ্যান্ট ও কালো বেল্ট, কালো স্কুল সু, সাদা মোজা, সবুজ (বটল গ্রীন) কার্ডিগান।</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">গ্রীষ্ম কালঃ সাদা হাফ শার্ট ও এ্যাশ ফুলপ্যান্ট ও কালো বেল্ট, কালো স্কুল সু, সাদা মোজা।</h4>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: #333333; margin-top: 10px; margin-bottom: 10px; font-size: 20px; background-color: #ffffff; text-align: justify;\">&nbsp;</h4>\r\n<table style=\"box-sizing: border-box; border-collapse: collapse; width: 825px; background-color: #ffffff; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 13px;\" border=\"1\" width=\"99%\">\r\n<tbody style=\"box-sizing: border-box;\">\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px; text-align: center;\">৪র্থ শ্রেণী হতে ১০ম শ্রেণী (বালিকা)</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">শীত কালঃ এ্যাশ কামিজ, সাদা সালোয়ার ও দোপাট্টা, এ্যাশ বেল্ট ও কালো স্কুল সু, সাদা মোজা ও সবুজ (বটল গ্রীন) কার্ডিগান।</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">গ্রীষ্ম কালঃ এ্যাশ কামিজ, সাদা সালোয়ার ও দোপাট্টা, এ্যাশ বেল্ট ও কালো স্কুল সু, সাদা মোজা।</h4>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: #333333; margin-top: 10px; margin-bottom: 10px; font-size: 20px; background-color: #ffffff; text-align: justify;\">&nbsp;</h4>\r\n<table style=\"box-sizing: border-box; border-collapse: collapse; width: 825px; background-color: #ffffff; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 13px;\" border=\"1\" width=\"99%\">\r\n<tbody style=\"box-sizing: border-box;\">\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px; text-align: center;\">একাদশ-দ্বাদশ (বালক)</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">শীত কালঃ কালো প্যান্ট, সাদা ফুল শার্ট, টাই, সবুজ (বটল গ্রীন) রঙের পুলওভার, কালো বেল্ট, কালো সু, সাদা মোজা।</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">গ্রীষ্ম কালঃ কালো প্যান্ট, সাদা হাফ শার্ট, কালো বেল্ট, কালো সু, সাদা মোজা।</h4>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: #333333; margin-top: 10px; margin-bottom: 10px; font-size: 20px; background-color: #ffffff; text-align: justify;\">&nbsp;</h4>\r\n<table style=\"box-sizing: border-box; border-collapse: collapse; width: 825px; background-color: #ffffff; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 13px;\" border=\"1\" width=\"99%\">\r\n<tbody style=\"box-sizing: border-box;\">\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px; text-align: center;\">একাদশ-দ্বাদশ (বালিকা)</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">শীত কালঃ সাদা সালোয়ার কামিজ, দোপাট্টা, সবুজ (বটল গ্রীন) রঙের কার্ডিগান, কালো জুতা, সাদা মোজা।</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">গ্রীষ্ম কালঃ সাদা সালোয়ার কামিজ, দোপাট্টা, কালো জুতা, সাদা মোজা।</h4>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', '<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: #333333; margin-top: 10px; margin-bottom: 10px; font-size: 20px; background-color: #ffffff; text-align: center;\">শীত কালঃ নভেম্বর-মার্চ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; গ্রীষ্ম কালঃ এপ্রিল-অক্টোবর</h4>\r\n<table style=\"box-sizing: border-box; border-collapse: collapse; width: 825px; background-color: #ffffff; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 13px; margin-left: auto; margin-right: auto;\" border=\"1\" width=\"99%\">\r\n<tbody style=\"box-sizing: border-box;\">\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px; text-align: center;\">প্লে গ্রুপ হতে ৩য় শ্রেণী (বালক)</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">শীত কালঃ সাদা ফুল শার্ট ও এ্যাশ টাই, এ্যাশ ফুলপ্যান্ট ও কালো বেল্ট, কালো স্কুল সু, সাদা মোজা, সবুজ (বটল গ্রীন) পুলওভার।</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">গ্রীষ্ম কালঃ সাদা হাফ শার্ট ও এ্যাশ টাই, এ্যাশ হাফপ্যান্ট ও কালো বেল্ট, কালো স্কুল সু, সাদা মোজা।</h4>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: #333333; margin-top: 10px; margin-bottom: 10px; font-size: 20px; background-color: #ffffff; text-align: justify;\">&nbsp;</h4>\r\n<table style=\"box-sizing: border-box; border-collapse: collapse; width: 825px; background-color: #ffffff; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 13px;\" border=\"1\" width=\"99%\">\r\n<tbody style=\"box-sizing: border-box;\">\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px; text-align: center;\">প্লে গ্রুপ হতে ৩য় শ্রেণী (বালিকা)</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">শীত কালঃ এ্যাশ স্কার্ট, সাদা শার্ট, এ্যাশ টাই, কালো স্কুল সু, সাদা মোজা, সবুজ (বটল গ্রীন) পুলওভার।</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">গ্রীষ্ম কালঃ এ্যাশ স্কার্ট, সাদা হাফশার্ট, কালো স্কুল সু, সাদা মোজা।</h4>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: #333333; margin-top: 10px; margin-bottom: 10px; font-size: 20px; background-color: #ffffff; text-align: justify;\">&nbsp;</h4>\r\n<table style=\"box-sizing: border-box; border-collapse: collapse; width: 825px; background-color: #ffffff; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 13px;\" border=\"1\" width=\"99%\">\r\n<tbody style=\"box-sizing: border-box;\">\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px; text-align: center;\">৪র্থ শ্রেণী হতে ১০ম শ্রেণী (বালক)</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">শীত কালঃ সাদা ফুল শার্ট ও এ্যাশ টাই, এ্যাশ ফুলপ্যান্ট ও কালো বেল্ট, কালো স্কুল সু, সাদা মোজা, সবুজ (বটল গ্রীন) কার্ডিগান।</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">গ্রীষ্ম কালঃ সাদা হাফ শার্ট ও এ্যাশ ফুলপ্যান্ট ও কালো বেল্ট, কালো স্কুল সু, সাদা মোজা।</h4>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: #333333; margin-top: 10px; margin-bottom: 10px; font-size: 20px; background-color: #ffffff; text-align: justify;\">&nbsp;</h4>\r\n<table style=\"box-sizing: border-box; border-collapse: collapse; width: 825px; background-color: #ffffff; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 13px;\" border=\"1\" width=\"99%\">\r\n<tbody style=\"box-sizing: border-box;\">\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px; text-align: center;\">৪র্থ শ্রেণী হতে ১০ম শ্রেণী (বালিকা)</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">শীত কালঃ এ্যাশ কামিজ, সাদা সালোয়ার ও দোপাট্টা, এ্যাশ বেল্ট ও কালো স্কুল সু, সাদা মোজা ও সবুজ (বটল গ্রীন) কার্ডিগান।</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">গ্রীষ্ম কালঃ এ্যাশ কামিজ, সাদা সালোয়ার ও দোপাট্টা, এ্যাশ বেল্ট ও কালো স্কুল সু, সাদা মোজা।</h4>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: #333333; margin-top: 10px; margin-bottom: 10px; font-size: 20px; background-color: #ffffff; text-align: justify;\">&nbsp;</h4>\r\n<table style=\"box-sizing: border-box; border-collapse: collapse; width: 825px; background-color: #ffffff; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 13px;\" border=\"1\" width=\"99%\">\r\n<tbody style=\"box-sizing: border-box;\">\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px; text-align: center;\">একাদশ-দ্বাদশ (বালক)</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">শীত কালঃ কালো প্যান্ট, সাদা ফুল শার্ট, টাই, সবুজ (বটল গ্রীন) রঙের পুলওভার, কালো বেল্ট, কালো সু, সাদা মোজা।</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">গ্রীষ্ম কালঃ কালো প্যান্ট, সাদা হাফ শার্ট, কালো বেল্ট, কালো সু, সাদা মোজা।</h4>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: #333333; margin-top: 10px; margin-bottom: 10px; font-size: 20px; background-color: #ffffff; text-align: justify;\">&nbsp;</h4>\r\n<table style=\"box-sizing: border-box; border-collapse: collapse; width: 825px; background-color: #ffffff; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 13px;\" border=\"1\" width=\"99%\">\r\n<tbody style=\"box-sizing: border-box;\">\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px; text-align: center;\">একাদশ-দ্বাদশ (বালিকা)</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">শীত কালঃ সাদা সালোয়ার কামিজ, দোপাট্টা, সবুজ (বটল গ্রীন) রঙের কার্ডিগান, কালো জুতা, সাদা মোজা।</h4>\r\n</td>\r\n</tr>\r\n<tr style=\"box-sizing: border-box;\">\r\n<td style=\"box-sizing: border-box; padding: 0px; text-align: center;\" width=\"100%\">\r\n<h4 style=\"box-sizing: border-box; font-family: Verdana, SolaimanLipi; font-weight: 300; line-height: 1.1; color: inherit; margin-top: 10px; margin-bottom: 10px; font-size: 20px;\">গ্রীষ্ম কালঃ সাদা সালোয়ার কামিজ, দোপাট্টা, কালো জুতা, সাদা মোজা।</h4>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', 1, 'dress-style', '', '2019-04-13 01:38:00', '2019-04-13 01:38:00');

-- --------------------------------------------------------

--
-- Table structure for table `page_photo`
--

CREATE TABLE `page_photo` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_page_id` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_fees`
--

CREATE TABLE `payment_fees` (
  `id` int(10) UNSIGNED NOT NULL,
  `head_id` int(10) UNSIGNED NOT NULL,
  `invoice_category_id` int(10) UNSIGNED NOT NULL,
  `discount_id` int(10) UNSIGNED DEFAULT NULL,
  `class_id` int(10) UNSIGNED NOT NULL,
  `group_id` int(10) UNSIGNED DEFAULT NULL,
  `guardian_type_id` int(10) UNSIGNED NOT NULL,
  `payment_month` int(11) DEFAULT NULL,
  `academic_year_id` int(10) UNSIGNED NOT NULL,
  `fee_assign_date` date DEFAULT NULL,
  `fee_amount` int(10) UNSIGNED NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_fees`
--

INSERT INTO `payment_fees` (`id`, `head_id`, `invoice_category_id`, `discount_id`, `class_id`, `group_id`, `guardian_type_id`, `payment_month`, `academic_year_id`, `fee_assign_date`, `fee_amount`, `notes`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(178, 1, 1, NULL, 5, 4, 2, NULL, 1, '2019-10-09', 105, NULL, 1, 1, NULL, '2019-10-09 09:32:46', '2019-10-09 09:32:46'),
(179, 4, 1, NULL, 5, 4, 2, NULL, 1, '2019-10-09', 105, NULL, 1, 1, NULL, '2019-10-09 09:32:46', '2019-10-09 09:32:46'),
(180, 5, 1, NULL, 5, 4, 2, NULL, 1, '2019-10-09', 105, NULL, 1, 1, NULL, '2019-10-09 09:32:46', '2019-10-09 09:32:46'),
(181, 6, 2, NULL, 5, 4, 1, 1, 1, '2019-10-09', 150, NULL, 1, 1, NULL, '2019-10-09 09:33:43', '2019-10-09 09:33:43'),
(182, 6, 2, NULL, 5, 4, 1, 2, 1, '2019-10-09', 150, NULL, 1, 1, NULL, '2019-10-09 09:33:43', '2019-10-09 09:33:43'),
(183, 6, 2, NULL, 5, 4, 1, 3, 1, '2019-10-09', 150, NULL, 1, 1, NULL, '2019-10-09 09:33:43', '2019-10-09 09:33:43'),
(184, 6, 2, NULL, 5, 4, 1, 4, 1, '2019-10-09', 150, NULL, 1, 1, NULL, '2019-10-09 09:33:43', '2019-10-09 09:33:43'),
(185, 6, 2, NULL, 5, 4, 1, 5, 1, '2019-10-09', 150, NULL, 1, 1, NULL, '2019-10-09 09:33:43', '2019-10-09 09:33:43'),
(186, 6, 2, NULL, 5, 4, 1, 6, 1, '2019-10-09', 150, NULL, 1, 1, NULL, '2019-10-09 09:33:43', '2019-10-09 09:33:43'),
(187, 6, 2, NULL, 5, 4, 1, 7, 1, '2019-10-09', 150, NULL, 1, 1, NULL, '2019-10-09 09:33:43', '2019-10-09 09:33:43'),
(188, 6, 2, NULL, 5, 4, 1, 8, 1, '2019-10-09', 150, NULL, 1, 1, NULL, '2019-10-09 09:33:43', '2019-10-09 09:33:43'),
(189, 6, 2, NULL, 5, 4, 1, 9, 1, '2019-10-09', 150, NULL, 1, 1, NULL, '2019-10-09 09:33:43', '2019-10-09 09:33:43'),
(190, 6, 2, NULL, 5, 4, 1, 10, 1, '2019-10-09', 150, NULL, 1, 1, NULL, '2019-10-09 09:33:43', '2019-10-09 09:33:43'),
(191, 6, 2, NULL, 5, 4, 1, 11, 1, '2019-10-09', 150, NULL, 1, 1, NULL, '2019-10-09 09:33:43', '2019-10-09 09:33:43'),
(192, 6, 2, NULL, 5, 4, 1, 12, 1, '2019-10-09', 150, NULL, 1, 1, NULL, '2019-10-09 09:33:43', '2019-10-09 09:33:43'),
(193, 6, 2, NULL, 5, 4, 2, 1, 1, '2019-10-09', 160, NULL, 1, 1, NULL, '2019-10-09 09:34:06', '2019-10-09 09:34:06'),
(194, 6, 2, NULL, 5, 4, 2, 2, 1, '2019-10-09', 160, NULL, 1, 1, NULL, '2019-10-09 09:34:06', '2019-10-09 09:34:06'),
(195, 6, 2, NULL, 5, 4, 2, 3, 1, '2019-10-09', 160, NULL, 1, 1, NULL, '2019-10-09 09:34:06', '2019-10-09 09:34:06'),
(196, 6, 2, NULL, 5, 4, 2, 4, 1, '2019-10-09', 160, NULL, 1, 1, NULL, '2019-10-09 09:34:06', '2019-10-09 09:34:06'),
(197, 6, 2, NULL, 5, 4, 2, 5, 1, '2019-10-09', 160, NULL, 1, 1, NULL, '2019-10-09 09:34:06', '2019-10-09 09:34:06'),
(198, 6, 2, NULL, 5, 4, 2, 6, 1, '2019-10-09', 160, NULL, 1, 1, NULL, '2019-10-09 09:34:06', '2019-10-09 09:34:06'),
(199, 6, 2, NULL, 5, 4, 2, 7, 1, '2019-10-09', 160, NULL, 1, 1, NULL, '2019-10-09 09:34:06', '2019-10-09 09:34:06'),
(200, 6, 2, NULL, 5, 4, 2, 8, 1, '2019-10-09', 160, NULL, 1, 1, NULL, '2019-10-09 09:34:06', '2019-10-09 09:34:06'),
(201, 6, 2, NULL, 5, 4, 2, 9, 1, '2019-10-09', 160, NULL, 1, 1, NULL, '2019-10-09 09:34:06', '2019-10-09 09:34:06'),
(202, 6, 2, NULL, 5, 4, 2, 10, 1, '2019-10-09', 160, NULL, 1, 1, NULL, '2019-10-09 09:34:06', '2019-10-09 09:34:06'),
(203, 6, 2, NULL, 5, 4, 2, 11, 1, '2019-10-09', 160, NULL, 1, 1, NULL, '2019-10-09 09:34:06', '2019-10-09 09:34:06'),
(204, 6, 2, NULL, 5, 4, 2, 12, 1, '2019-10-09', 160, NULL, 1, 1, NULL, '2019-10-09 09:34:06', '2019-10-09 09:34:06'),
(205, 1, 1, NULL, 5, 4, 1, NULL, 1, '2019-10-09', 100, NULL, 1, 1, NULL, '2019-10-09 09:35:06', '2019-10-09 09:35:06'),
(206, 4, 1, NULL, 5, 4, 1, NULL, 1, '2019-10-09', 100, NULL, 1, 1, NULL, '2019-10-09 09:35:06', '2019-10-09 09:35:06'),
(207, 5, 1, NULL, 5, 4, 1, NULL, 1, '2019-10-09', 100, NULL, 1, 1, NULL, '2019-10-09 09:35:06', '2019-10-09 09:35:06');

-- --------------------------------------------------------

--
-- Table structure for table `payment_heads`
--

CREATE TABLE `payment_heads` (
  `id` int(10) UNSIGNED NOT NULL,
  `head_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_category_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_heads`
--

INSERT INTO `payment_heads` (`id`, `head_name`, `invoice_category_id`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Admission Fee', 1, 1, 1, NULL, '2019-08-22 04:57:15', '2019-08-22 04:57:15'),
(2, 'Tuition Fee 2', 2, 1, 1, NULL, '2019-08-22 04:57:32', '2019-10-01 08:41:40'),
(3, 'Tuition Fee', 2, 1, 2, NULL, '2019-09-29 09:29:28', '2019-09-29 09:29:28'),
(4, 'Admission 2', 1, 1, 1, NULL, '2019-09-30 18:00:00', '2019-09-30 18:00:00'),
(5, 'Admission 2020', 1, 1, 1, NULL, '2019-10-02 13:10:27', '2019-10-02 13:10:27'),
(6, 'Tuition Fee Jan 20', 2, 1, 1, NULL, '2019-10-02 13:11:27', '2019-10-02 13:11:27');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resource` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'System',
  `system` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `slug`, `resource`, `system`, `created_at`, `updated_at`) VALUES
(7, 'primary info', 'primary-info', '', 1, '2019-02-26 15:57:09', '2019-02-26 15:57:09'),
(8, 'Users', 'users', '', 1, '2019-02-26 15:57:33', '2019-02-26 15:57:33'),
(9, 'ACL', 'acl', '', 1, '2019-02-26 15:59:25', '2019-02-26 15:59:25'),
(11, 'Menu', 'menu', '', 1, '2019-02-27 13:05:00', '2019-02-27 13:05:00'),
(23, 'payment', 'payment', '', 1, '2019-05-22 08:36:39', '2019-06-29 14:24:44'),
(24, 'student', 'student', '', 1, '2019-05-22 08:36:51', '2019-05-22 08:36:51'),
(30, 'notice', 'notice', '', 1, '2019-06-20 17:25:36', '2019-06-20 17:25:36'),
(31, 'notice-view', 'notice-view', '', 1, '2019-06-20 20:25:36', '2019-06-20 20:25:36'),
(32, 'sms', 'sms', '', 1, '2019-06-20 20:35:54', '2019-06-20 20:35:54'),
(33, 'My Routine', 'my-routine', '', 1, '2019-06-22 14:59:46', '2019-06-22 15:00:02'),
(34, 'My Form', 'my-form', '', 1, '2019-06-22 15:01:51', '2019-06-22 15:01:51'),
(35, 'batches', 'batches', '', 1, '2019-06-22 15:44:12', '2019-06-22 15:44:12'),
(36, 'teacher', 'teacher', '', 1, '2019-06-22 16:23:02', '2019-06-22 16:23:02'),
(37, 'weekly-lecture', 'weekly-lecture', '', 1, '2019-06-22 19:06:18', '2019-06-22 19:06:18'),
(38, 'attendance', 'attendance', '', 1, '2019-06-23 18:15:26', '2019-06-23 18:15:26'),
(39, 'Aptitude Test', 'aptitude-test', '', 1, '2019-06-23 19:45:38', '2019-06-23 19:45:38'),
(40, 'Routine', 'routine', '', 1, '2019-06-23 19:50:08', '2019-06-23 19:50:08'),
(41, 'Events', 'events', '', 1, '2019-06-23 16:47:38', '2019-06-23 16:47:38'),
(42, 'Calendar', 'calendar', '', 1, '2019-06-23 16:47:46', '2019-06-23 16:47:46'),
(43, 'my-attendance', 'my-attendance', '', 1, '2019-06-24 07:55:05', '2019-06-24 07:55:05'),
(44, 'teacher-profile', 'teacher-profile', '', 1, '2019-06-24 10:54:38', '2019-06-24 10:54:38'),
(45, 'comingsoon', 'comingsoon', '', 1, '2019-06-29 11:01:35', '2019-06-29 11:01:35'),
(46, 'payment-history', 'payment-history', '', 1, '2019-06-29 13:08:57', '2019-06-29 13:08:57'),
(48, 'receive-student-payment', 'receive-student-payment', '', 1, '2019-06-29 14:16:00', '2019-06-29 14:16:00'),
(49, 'Sms log', 'sms-log', '', 1, '2019-07-01 22:07:43', '2019-07-01 22:07:43'),
(51, 'Exam Question', 'exam-question', '', 1, '2019-07-03 21:03:02', '2019-07-03 21:03:02'),
(52, 'exams', 'exams', '', 1, '2019-07-04 19:50:30', '2019-07-04 19:50:30'),
(53, 'Result Pdf Upload', 'result-pdf-upload', '', 1, '2019-07-04 21:44:10', '2019-07-04 21:44:10'),
(54, 'Marks Entry', 'marks-entry', '', 1, '2019-07-06 16:48:16', '2019-07-06 16:48:16'),
(55, 'branches', 'branches', '', 1, '2019-08-01 22:21:34', '2019-08-01 22:23:55'),
(56, 'My Payment', 'my-payment', '', 1, '2019-08-18 20:51:48', '2019-08-18 20:51:48'),
(57, 'admit-student', 'admit-student', '', 1, '2019-08-22 22:32:00', '2019-08-22 22:32:00'),
(58, 'sub-course', 'sub-course', '', 1, '2019-08-24 21:01:05', '2019-08-24 21:01:05'),
(59, 'subjects', 'subjects', '', 1, '2019-08-24 21:01:18', '2019-08-24 21:01:18'),
(60, 'batches', 'batches', '', 1, '2019-08-24 21:03:45', '2019-08-24 21:03:45'),
(61, 'deactivated-students', 'deactivated-students', '', 1, '2019-08-29 18:57:12', '2019-08-29 18:57:12'),
(62, 'students-batch-assign', 'students-batch-assign', '', 1, '2019-08-29 21:46:45', '2019-08-29 21:46:45'),
(63, 'student-dashboard', 'student-dashboard', '', 1, '2019-09-04 20:23:17', '2019-09-04 20:23:17'),
(64, 'my-payment-history', 'my-payment-history', '', 1, '2019-09-05 19:02:24', '2019-09-05 19:02:24'),
(65, 'student-filter', 'student-filter', '', 1, '2019-09-09 23:40:45', '2019-09-09 23:40:45'),
(66, 'Daily Statement', 'daily-statement', '', 1, '2019-09-10 00:24:10', '2019-09-10 00:24:10'),
(67, 'students-batch-change', 'students-batch-change', '', 1, '2019-09-12 16:45:04', '2019-09-12 16:45:04');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1200, 44, 5, NULL, NULL),
(1519, 33, 4, NULL, NULL),
(1520, 34, 4, NULL, NULL),
(1521, 43, 4, NULL, NULL),
(1522, 56, 4, NULL, NULL),
(1523, 63, 4, NULL, NULL),
(1524, 64, 4, NULL, NULL),
(1691, 23, 3, NULL, NULL),
(1692, 24, 3, NULL, NULL),
(1693, 30, 3, NULL, NULL),
(1694, 31, 3, NULL, NULL),
(1695, 32, 3, NULL, NULL),
(1696, 38, 3, NULL, NULL),
(1697, 40, 3, NULL, NULL),
(1698, 41, 3, NULL, NULL),
(1699, 42, 3, NULL, NULL),
(1700, 44, 3, NULL, NULL),
(1701, 45, 3, NULL, NULL),
(1702, 46, 3, NULL, NULL),
(1703, 48, 3, NULL, NULL),
(1704, 51, 3, NULL, NULL),
(1705, 52, 3, NULL, NULL),
(1706, 53, 3, NULL, NULL),
(1707, 54, 3, NULL, NULL),
(1708, 57, 3, NULL, NULL),
(1709, 60, 3, NULL, NULL),
(1710, 61, 3, NULL, NULL),
(1711, 62, 3, NULL, NULL),
(1712, 65, 3, NULL, NULL),
(1713, 7, 1, NULL, NULL),
(1714, 8, 1, NULL, NULL),
(1715, 9, 1, NULL, NULL),
(1716, 11, 1, NULL, NULL),
(1717, 23, 1, NULL, NULL),
(1718, 24, 1, NULL, NULL),
(1719, 30, 1, NULL, NULL),
(1720, 32, 1, NULL, NULL),
(1721, 35, 1, NULL, NULL),
(1722, 36, 1, NULL, NULL),
(1723, 37, 1, NULL, NULL),
(1724, 38, 1, NULL, NULL),
(1725, 40, 1, NULL, NULL),
(1726, 41, 1, NULL, NULL),
(1727, 42, 1, NULL, NULL),
(1728, 44, 1, NULL, NULL),
(1729, 45, 1, NULL, NULL),
(1730, 46, 1, NULL, NULL),
(1731, 48, 1, NULL, NULL),
(1732, 49, 1, NULL, NULL),
(1733, 51, 1, NULL, NULL),
(1734, 52, 1, NULL, NULL),
(1735, 53, 1, NULL, NULL),
(1736, 54, 1, NULL, NULL),
(1737, 55, 1, NULL, NULL),
(1738, 57, 1, NULL, NULL),
(1739, 58, 1, NULL, NULL),
(1740, 59, 1, NULL, NULL),
(1741, 60, 1, NULL, NULL),
(1742, 61, 1, NULL, NULL),
(1743, 62, 1, NULL, NULL),
(1744, 65, 1, NULL, NULL),
(1745, 66, 1, NULL, NULL),
(1746, 67, 1, NULL, NULL),
(1747, 23, 2, NULL, NULL),
(1748, 24, 2, NULL, NULL),
(1749, 30, 2, NULL, NULL),
(1750, 31, 2, NULL, NULL),
(1751, 32, 2, NULL, NULL),
(1752, 35, 2, NULL, NULL),
(1753, 36, 2, NULL, NULL),
(1754, 38, 2, NULL, NULL),
(1755, 40, 2, NULL, NULL),
(1756, 41, 2, NULL, NULL),
(1757, 42, 2, NULL, NULL),
(1758, 46, 2, NULL, NULL),
(1759, 48, 2, NULL, NULL),
(1760, 49, 2, NULL, NULL),
(1761, 51, 2, NULL, NULL),
(1762, 52, 2, NULL, NULL),
(1763, 53, 2, NULL, NULL),
(1764, 54, 2, NULL, NULL),
(1765, 55, 2, NULL, NULL),
(1766, 57, 2, NULL, NULL),
(1767, 58, 2, NULL, NULL),
(1768, 59, 2, NULL, NULL),
(1769, 60, 2, NULL, NULL),
(1770, 61, 2, NULL, NULL),
(1771, 62, 2, NULL, NULL),
(1772, 65, 2, NULL, NULL),
(1773, 66, 2, NULL, NULL),
(1774, 67, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `primary_info`
--

CREATE TABLE `primary_info` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_ban` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name_ban` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no_ban` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_ban` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ban` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description_ban` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language_name` int(11) NOT NULL COMMENT '1=English, 2=Bangla',
  `language` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map_embed` varchar(450) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `primary_info`
--

INSERT INTO `primary_info` (`id`, `company_name`, `logo`, `logo_ban`, `address`, `mobile_no`, `company_name_ban`, `mobile_no_ban`, `address_ban`, `description_ban`, `meta_description_ban`, `email`, `language_name`, `language`, `favicon`, `map_embed`, `meta_description`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Achievement Career Care', 'images/logo/logo.png', 'images/logo/logo_ban.png', 'Haji Tower (Level 3), Phol Patty Masjid Goli, Mirpur-10 Gol Chottor, Dhaka', '01701665544 / 01701665555 / 01701665566', 'Achievement', '৬৭৬৫৭৬৫৭৫', 'বি এন সি সি  32 Isha Kha Avenue, Sector: 06, Uttara model town, Dhaka-1230', '<p>Bangladesh National Cadet Corps 32 Isha Kha Avenue, Sector: 06, Uttara model town, Dhaka-1230<br></p>', 'বি এন সি সি  32 Isha Kha Avenue, Sector: 06, Uttara model town, Dhaka-1230', 'info@achievementcc.com', 2, '1', 'images/logo/favicon.png', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3069.4631575554663!2d90.3464098882933!3d23.810510546088658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c11d7d1f4f9d%3A0x6e6633665517f8db!2sBCIC+College!5e0!3m2!1sen!2s!4v1500972819849', '', NULL, NULL, '2019-08-28 23:47:43');

-- --------------------------------------------------------

--
-- Table structure for table `religions`
--

CREATE TABLE `religions` (
  `id` int(10) UNSIGNED NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `religions`
--

INSERT INTO `religions` (`id`, `religion`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Islama', 1, 1, 1, '2019-09-16 18:00:00', '2019-09-16 18:00:00'),
(2, 'Hinduism', 1, 1, 1, '2019-09-16 18:00:00', '2019-09-16 18:00:00'),
(3, 'Buddhism', 1, 1, 1, '2019-09-16 18:00:00', '2019-09-16 18:00:00'),
(4, 'Christianity', 1, 1, 1, '2019-09-16 18:00:00', '2019-09-16 18:00:00'),
(5, 'Other religions', 1, 1, 1, '2019-09-16 18:00:00', '2019-09-16 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `system` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `description`, `system`, `created_at`, `updated_at`) VALUES
(1, 'System Admin', 'system', 'System Admin', 1, NULL, NULL),
(2, 'Super Admin', 'super-admin', 'Super admin', 1, NULL, NULL),
(3, 'Branch Admin', 'admin', 'Branch Admin', 1, NULL, NULL),
(4, 'Student', 'students', 'Student', 1, NULL, NULL),
(5, 'Teacher', 'teacher', NULL, 1, NULL, NULL),
(6, 'HQ Office', 'hq-office', 'Office Execution', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(3, 2, 3, NULL, NULL),
(986, 1, 2, NULL, NULL),
(3987, 4, 4, NULL, NULL),
(3988, 4, 2, NULL, NULL),
(3990, 4, 4, NULL, NULL),
(3991, 4, 5, NULL, NULL),
(3992, 4, 6, NULL, NULL),
(3993, 4, 7, NULL, NULL),
(3994, 4, 8, NULL, NULL),
(3995, 4, 9, NULL, NULL),
(3996, 4, 10, NULL, NULL),
(3997, 4, 11, NULL, NULL),
(3998, 4, 12, NULL, NULL),
(4001, 4, 15, NULL, NULL),
(4002, 4, 16, NULL, NULL),
(4014, 4, 28, NULL, NULL),
(4015, 4, 29, NULL, NULL),
(4018, 4, 32, NULL, NULL),
(4019, 4, 33, NULL, NULL),
(4020, 4, 34, NULL, NULL),
(4021, 4, 35, NULL, NULL),
(4022, 4, 36, NULL, NULL),
(4023, 4, 37, NULL, NULL),
(4024, 4, 39, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `routine`
--

CREATE TABLE `routine` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `week_lecture_id` int(10) UNSIGNED NOT NULL,
  `class_date` date NOT NULL,
  `class_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seasons`
--

CREATE TABLE `seasons` (
  `id` int(10) UNSIGNED NOT NULL,
  `session` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seasons`
--

INSERT INTO `seasons` (`id`, `session`, `course_id`, `status`, `created_at`, `updated_at`) VALUES
(1, '40', 4, 1, '2019-08-07 04:00:00', '2019-08-07 04:00:00'),
(2, '41', 4, 1, '2019-08-07 04:00:00', '2019-08-07 04:00:00'),
(3, '29', 5, 1, '2019-08-07 04:00:00', '2019-08-07 04:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `section_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_id` int(10) UNSIGNED NOT NULL,
  `group_id` int(10) UNSIGNED DEFAULT NULL,
  `shift_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `section_name`, `class_id`, `group_id`, `shift_id`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'G1', 5, 4, 1, 1, 1, 1, '2019-07-02 06:33:39', '2019-07-02 06:33:39'),
(2, 'B1', 4, 4, 2, 1, 1, 1, '2019-07-02 21:32:11', '2019-07-02 21:32:11'),
(3, 'B1', 9, 2, 2, 1, 1, 1, '2019-07-02 21:34:51', '2019-07-03 05:38:34'),
(5, 'B2', 9, 1, 2, 1, 1, NULL, '2019-07-03 05:03:26', '2019-07-03 05:03:26'),
(6, 'G1', 9, 2, 1, 1, 1, 1, '2019-07-03 05:04:05', '2019-07-03 05:39:14');

-- --------------------------------------------------------

--
-- Table structure for table `shift`
--

CREATE TABLE `shift` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shift`
--

INSERT INTO `shift` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Morning', 1, NULL, NULL),
(2, 'Day', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sms_log`
--

CREATE TABLE `sms_log` (
  `id` int(11) NOT NULL,
  `sms_id` int(11) DEFAULT NULL,
  `sms` text NOT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `total_sms` int(11) NOT NULL DEFAULT '1',
  `created_by` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `delivery_time` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_log`
--

INSERT INTO `sms_log` (`id`, `sms_id`, `sms`, `mobile_number`, `total_sms`, `created_by`, `status`, `delivery_time`, `created_at`, `updated_at`) VALUES
(1, NULL, 'https://www.w3schools.com/php/php_file_upload.asp', '8801832817105', 1, 30, 1, NULL, '2019-06-30 16:53:27', '2019-06-30 16:53:27'),
(2, NULL, 'Close your desk.', '8801832817105', 1, 30, 1, NULL, '2019-06-30 16:55:19', '2019-06-30 16:55:19'),
(3, NULL, 'Welcome to the Patronus family. Your login ID: 01788562353 & CODE: 123456 Browse: https://ims.patronus.com.bd', '8801788562353', 1, 109, 1, NULL, '2019-07-01 01:39:58', '2019-07-01 01:39:58'),
(4, NULL, 'Test SMS', '8801811951215', 1, 30, 1, '2019-07-01 00:00:00', '2019-07-01 10:23:41', '2019-07-01 10:23:41'),
(5, NULL, 'Hello Dear sir', '8801811951215', 1, 30, 1, '2019-07-01 12:27:29', '2019-07-01 10:26:55', '2019-07-01 10:26:55'),
(6, NULL, 'Last SIngle Test', '8801811951215', 1, 30, 1, '2019-07-01 12:44:04', '2019-07-01 10:43:29', '2019-07-01 10:43:29'),
(7, NULL, 'Hello Eduleam Digital', '8801811951215', 1, 30, 1, '2019-07-01 13:19:40', '2019-07-01 11:19:07', '2019-07-01 11:19:07'),
(8, NULL, 'Hello Eduleam Digital', '8801087835849', 1, 30, 0, NULL, '2019-07-01 11:19:08', '2019-07-01 11:19:08'),
(9, NULL, 'Hello Eduleam Digital', '8801742140727', 1, 30, 1, '2019-07-01 13:19:40', '2019-07-01 11:19:08', '2019-07-01 11:19:08'),
(10, NULL, 'Hello Eduleam Digital Last', '8801811951215', 1, 30, 1, '2019-07-01 13:20:55', '2019-07-01 11:20:22', '2019-07-01 11:20:22'),
(11, NULL, 'Hello Eduleam Digital Last', '8801087835849', 1, 30, 0, NULL, '2019-07-01 11:20:22', '2019-07-01 11:20:22'),
(12, NULL, 'Hello Eduleam Digital Last', '8801742140727', 1, 30, 1, '2019-07-01 13:20:55', '2019-07-01 11:20:23', '2019-07-01 11:20:23'),
(13, NULL, 'ims.patronus.com.bd', '8801811951215', 1, 30, 1, '2019-07-01 13:22:54', '2019-07-01 11:22:23', '2019-07-01 11:22:23'),
(14, NULL, 'ims.patronus.com.bd', '8801087835849', 1, 30, 0, NULL, '2019-07-01 11:22:23', '2019-07-01 11:22:23'),
(15, NULL, 'ims.patronus.com.bd', '8801742140727', 1, 30, 1, '2019-07-01 13:22:57', '2019-07-01 11:22:24', '2019-07-01 11:22:24'),
(16, NULL, 'Hello Boss', '8801811951215', 1, 30, 0, NULL, '2019-07-01 11:41:48', '2019-07-01 11:41:48'),
(17, 68473774, 'Hello Ozayer Saheb', '8801515204302', 1, 30, 1, '2019-07-01 13:45:44', '2019-07-01 11:45:09', '2019-07-01 11:45:09'),
(18, 68473999, 'Hello All', '8801811951215', 1, 30, 1, '2019-07-01 13:46:16', '2019-07-01 11:45:42', '2019-07-01 11:45:42'),
(19, NULL, 'Hello All', '8801087835849', 1, 30, 0, NULL, '2019-07-01 11:45:42', '2019-07-01 11:45:42'),
(20, 68473997, 'Hello All', '8801742140727', 1, 30, 1, '2019-07-01 13:46:15', '2019-07-01 11:45:42', '2019-07-01 11:45:42'),
(21, 68497871, 'Last SMS', '8801733389000', 1, 30, 1, '2019-07-01 16:07:52', '2019-07-01 14:07:20', '2019-07-01 14:07:20'),
(22, 68501971, 'Resend SMS', '8801733389000', 1, 30, 1, '2019-07-01 16:32:17', '2019-07-01 14:31:42', '2019-07-01 14:31:42'),
(23, 68523870, 'Hello Sir.', '8801726821977', 1, 30, 1, '2019-07-01 18:01:48', '2019-07-01 22:01:15', '2019-07-01 22:01:15'),
(24, 68868770, 'Congrats! Your bKash payment of TK.9500 is successful. Your Dues: TK.0. You can complete payment by paying again from https://patronus.com.bd', '8801633582880', 1, 107, 1, '2019-07-03 18:23:52', '2019-07-03 22:23:17', '2019-07-03 22:23:17'),
(25, NULL, 'Congrats! Your bKash payment of TK.3750 is successful. Your Dues: TK.0. You can complete payment by paying again from https://patronus.com.bd', '8801991458376', 1, 107, 0, NULL, '2019-07-03 23:07:16', '2019-07-03 23:07:16'),
(26, 68889211, 'Congrats! Your bKash payment of TK.9500 is successful. Your Dues: TK.0. You can complete payment by paying again from https://patronus.com.bd', '8801404502696', 1, 107, 1, '2019-07-03 21:48:59', '2019-07-04 01:48:23', '2019-07-04 01:48:23'),
(27, NULL, 'Congrats! Your bKash payment of TK.12350 is successful. Your Dues: TK.0. You can complete payment by paying again from https://patronus.com.bd', '8801973761919', 1, 107, 0, NULL, '2019-07-04 01:52:18', '2019-07-04 01:52:18'),
(28, 68889535, 'Congrats! Your bKash payment of TK.11350 is successful. Your Dues: TK.0. You can complete payment by paying again from https://patronus.com.bd', '8801639188996', 1, 107, 1, '2019-07-03 21:56:20', '2019-07-04 01:55:44', '2019-07-04 01:55:44'),
(29, 69135299, 'Routine has been updated and it is available on your account. Please download the new routine to avoid any inconveniences. Call at 01701665588 if you have any queries. And don\'t forget to keep studying hard!', '8801791100069', 1, 107, 1, '2019-07-05 17:33:26', '2019-07-05 21:32:50', '2019-07-05 21:32:50'),
(30, NULL, 'Routine has been updated and it is available on your account. Please download the new routine to avoid any inconveniences. Call at 01701665588 if you have any queries. And don\'t forget to keep studying hard!', '8801994764200', 1, 107, 0, NULL, '2019-07-05 21:32:55', '2019-07-05 21:32:55'),
(31, 69135304, 'Routine has been updated and it is available on your account. Please download the new routine to avoid any inconveniences. Call at 01701665588 if you have any queries. And don\'t forget to keep studying hard!', '8801998390605', 1, 107, 1, '2019-07-05 17:33:38', '2019-07-05 21:33:00', '2019-07-05 21:33:00'),
(32, NULL, 'Routine has been updated and it is available on your account. Please download the new routine to avoid any inconveniences. Call at 01701665588 if you have any queries. And don\'t forget to keep studying hard!', '8801404502696', 1, 107, 0, NULL, '2019-07-05 21:33:05', '2019-07-05 21:33:05'),
(33, 69135316, 'Routine has been updated and it is available on your account. Please download the new routine to avoid any inconveniences. Call at 01701665588 if you have any queries. And don\'t forget to keep studying hard!', '8801842946264', 1, 107, 1, '2019-07-05 17:33:48', '2019-07-05 21:33:10', '2019-07-05 21:33:10'),
(34, 69135319, 'Routine has been updated and it is available on your account. Please download the new routine to avoid any inconveniences. Call at 01701665588 if you have any queries. And don\'t forget to keep studying hard!', '8801829940080', 1, 107, 1, '2019-07-05 17:33:52', '2019-07-05 21:33:15', '2019-07-05 21:33:15'),
(35, 69135321, 'Routine has been updated and it is available on your account. Please download the new routine to avoid any inconveniences. Call at 01701665588 if you have any queries. And don\'t forget to keep studying hard!', '8801633582880', 1, 107, 1, '2019-07-05 17:33:58', '2019-07-05 21:33:20', '2019-07-05 21:33:20'),
(36, 69135323, 'Routine has been updated and it is available on your account. Please download the new routine to avoid any inconveniences. Call at 01701665588 if you have any queries. And don\'t forget to keep studying hard!', '8801703341782', 1, 107, 1, '2019-07-05 17:34:03', '2019-07-05 21:33:25', '2019-07-05 21:33:25'),
(37, 69135324, 'Routine has been updated and it is available on your account. Please download the new routine to avoid any inconveniences. Call at 01701665588 if you have any queries. And don\'t forget to keep studying hard!', '8801303270829', 1, 107, 1, '2019-07-05 17:34:07', '2019-07-05 21:33:30', '2019-07-05 21:33:30'),
(38, 69135327, 'Routine has been updated and it is available on your account. Please download the new routine to avoid any inconveniences. Call at 01701665588 if you have any queries. And don\'t forget to keep studying hard!', '8801785758189', 1, 107, 1, '2019-07-05 17:34:13', '2019-07-05 21:33:35', '2019-07-05 21:33:35'),
(39, 69135332, 'Routine has been updated and it is available on your account. Please download the new routine to avoid any inconveniences. Call at 01701665588 if you have any queries. And don\'t forget to keep studying hard!', '8801918536485', 1, 107, 1, '2019-07-05 17:34:18', '2019-07-05 21:33:40', '2019-07-05 21:33:40'),
(40, 69135754, 'Routine has been updated and it is available on your account. Please download the new routine to avoid any inconveniences. Call at 01701665588 if you have any queries. And don\'t forget to keep studying hard!', '8801639188996', 1, 107, 1, '2019-07-05 17:39:03', '2019-07-05 21:38:26', '2019-07-05 21:38:26'),
(41, 69135767, 'Routine has been updated and it is available on your account. Please download the new routine to avoid any inconveniences. Call at 01701665588 if you have any queries. And don\'t forget to keep studying hard!', '8801973761919', 1, 107, 1, '2019-07-05 17:39:09', '2019-07-05 21:38:31', '2019-07-05 21:38:31'),
(42, 69135773, 'Routine has been updated and it is available on your account. Please download the new routine to avoid any inconveniences. Call at 01701665588 if you have any queries. And don\'t forget to keep studying hard!', '8801774239328', 1, 107, 1, '2019-07-05 17:39:12', '2019-07-05 21:38:36', '2019-07-05 21:38:36'),
(43, 69135782, 'Routine has been updated and it is available on your account. Please download the new routine to avoid any inconveniences. Call at 01701665588 if you have any queries. And don\'t forget to keep studying hard!', '8801786309209', 1, 107, 1, '2019-07-05 17:39:18', '2019-07-05 21:38:41', '2019-07-05 21:38:41'),
(44, NULL, 'Routine has been updated and it is available on your account. Please download the new routine to avoid any inconveniences. Call at 01701665588 if you have any queries. And don\'t forget to keep studying hard!', '8801991458376', 1, 107, 0, NULL, '2019-07-05 21:39:08', '2019-07-05 21:39:08'),
(45, 69135878, 'Routine has been updated and it is available on your account. Please download the new routine to avoid any inconveniences. Call at 01701665588 if you have any queries. And don\'t forget to keep studying hard!', '8801991458376', 1, 107, 1, '2019-07-05 17:40:20', '2019-07-05 21:39:43', '2019-07-05 21:39:43'),
(46, 69135888, 'Routine has been updated and it is available on your account. Please download the new routine to avoid any inconveniences. Call at 01701665588 if you have any queries. And don\'t forget to keep studying hard!', '8801640578111', 1, 107, 1, '2019-07-05 17:40:25', '2019-07-05 21:39:48', '2019-07-05 21:39:48'),
(47, 69135897, 'Routine has been updated and it is available on your account. Please download the new routine to avoid any inconveniences. Call at 01701665588 if you have any queries. And don\'t forget to keep studying hard!', '8801757521998', 1, 107, 1, '2019-07-05 17:40:31', '2019-07-05 21:39:53', '2019-07-05 21:39:53'),
(48, 69135904, 'Routine has been updated and it is available on your account. Please download the new routine to avoid any inconveniences. Call at 01701665588 if you have any queries. And don\'t forget to keep studying hard!', '8801686111704', 1, 107, 1, '2019-07-05 17:40:35', '2019-07-05 21:39:58', '2019-07-05 21:39:58'),
(49, 69135912, 'Routine has been updated and it is available on your account. Please download the new routine to avoid any inconveniences. Call at 01701665588 if you have any queries. And don\'t forget to keep studying hard!', '8801790152438', 1, 107, 1, '2019-07-05 17:40:39', '2019-07-05 21:40:03', '2019-07-05 21:40:03'),
(50, NULL, 'Routine has been updated and it is available on your account. Please download the new routine to avoid any inconveniences. Call at 01701665588 if you have any queries. And don\'t forget to keep studying hard!', '8801949094156', 1, 107, 0, NULL, '2019-07-05 21:40:08', '2019-07-05 21:40:08'),
(51, 69135933, 'Routine has been updated and it is available on your account. Please download the new routine to avoid any inconveniences. Call at 01701665588 if you have any queries. And don\'t forget to keep studying hard!', '8801834380108', 1, 107, 1, '2019-07-05 17:40:51', '2019-07-05 21:40:13', '2019-07-05 21:40:13'),
(52, 69135940, 'Routine has been updated and it is available on your account. Please download the new routine to avoid any inconveniences. Call at 01701665588 if you have any queries. And don\'t forget to keep studying hard!', '8801754374866', 1, 107, 1, '2019-07-05 17:40:55', '2019-07-05 21:40:18', '2019-07-05 21:40:18'),
(53, 69135952, 'Routine has been updated and it is available on your account. Please download the new routine to avoid any inconveniences. Call at 01701665588 if you have any queries. And don\'t forget to keep studying hard!', '8801869123584', 1, 107, 1, '2019-07-05 17:41:01', '2019-07-05 21:40:23', '2019-07-05 21:40:23'),
(54, 69135959, 'Routine has been updated and it is available on your account. Please download the new routine to avoid any inconveniences. Call at 01701665588 if you have any queries. And don\'t forget to keep studying hard!', '8801722519747', 1, 107, 1, '2019-07-05 17:41:06', '2019-07-05 21:40:28', '2019-07-05 21:40:28'),
(55, 69136492, 'Math Review Test 1 Results have been published. Detailed reports of the exam is now available for the students who appeared for the exam (accessible by each student at their respective accounts | Digital Coach > My Results). Contact 01701665588 for any queries. Best of luck!', '8801791100069', 1, 107, 1, '2019-07-05 17:45:37', '2019-07-05 21:44:59', '2019-07-05 21:44:59'),
(56, 69136503, 'Math Review Test 1 Results have been published. Detailed reports of the exam is now available for the students who appeared for the exam (accessible by each student at their respective accounts | Digital Coach > My Results). Contact 01701665588 for any queries. Best of luck!', '8801994764200', 1, 107, 1, '2019-07-05 17:45:42', '2019-07-05 21:45:05', '2019-07-05 21:45:05'),
(57, NULL, 'Math Review Test 1 Results have been published. Detailed reports of the exam is now available for the students who appeared for the exam (accessible by each student at their respective accounts | Digital Coach > My Results). Contact 01701665588 for any queries. Best of luck!', '8801998390605', 1, 107, 0, NULL, '2019-07-05 21:45:10', '2019-07-05 21:45:10'),
(58, 69136524, 'Math Review Test 1 Results have been published. Detailed reports of the exam is now available for the students who appeared for the exam (accessible by each student at their respective accounts | Digital Coach > My Results). Contact 01701665588 for any queries. Best of luck!', '8801404502696', 1, 107, 1, '2019-07-05 17:45:53', '2019-07-05 21:45:15', '2019-07-05 21:45:15'),
(59, 69136543, 'Math Review Test 1 Results have been published. Detailed reports of the exam is now available for the students who appeared for the exam (accessible by each student at their respective accounts | Digital Coach > My Results). Contact 01701665588 for any queries. Best of luck!', '8801842946264', 1, 107, 1, '2019-07-05 17:45:58', '2019-07-05 21:45:20', '2019-07-05 21:45:20'),
(60, 69136560, 'Math Review Test 1 Results have been published. Detailed reports of the exam is now available for the students who appeared for the exam (accessible by each student at their respective accounts | Digital Coach > My Results). Contact 01701665588 for any queries. Best of luck!', '8801829940080', 1, 107, 1, '2019-07-05 17:46:03', '2019-07-05 21:45:25', '2019-07-05 21:45:25'),
(61, 69136573, 'Math Review Test 1 Results have been published. Detailed reports of the exam is now available for the students who appeared for the exam (accessible by each student at their respective accounts | Digital Coach > My Results). Contact 01701665588 for any queries. Best of luck!', '8801633582880', 1, 107, 1, '2019-07-05 17:46:07', '2019-07-05 21:45:30', '2019-07-05 21:45:30'),
(62, 69136586, 'Math Review Test 1 Results have been published. Detailed reports of the exam is now available for the students who appeared for the exam (accessible by each student at their respective accounts | Digital Coach > My Results). Contact 01701665588 for any queries. Best of luck!', '8801703341782', 1, 107, 1, '2019-07-05 17:46:13', '2019-07-05 21:45:35', '2019-07-05 21:45:35'),
(63, 69136598, 'Math Review Test 1 Results have been published. Detailed reports of the exam is now available for the students who appeared for the exam (accessible by each student at their respective accounts | Digital Coach > My Results). Contact 01701665588 for any queries. Best of luck!', '8801303270829', 1, 107, 1, '2019-07-05 17:46:17', '2019-07-05 21:45:40', '2019-07-05 21:45:40'),
(64, 69136607, 'Math Review Test 1 Results have been published. Detailed reports of the exam is now available for the students who appeared for the exam (accessible by each student at their respective accounts | Digital Coach > My Results). Contact 01701665588 for any queries. Best of luck!', '8801785758189', 1, 107, 1, '2019-07-05 17:46:21', '2019-07-05 21:45:45', '2019-07-05 21:45:45'),
(65, NULL, 'Math Review Test 1 Results have been published. Detailed reports of the exam is now available for the students who appeared for the exam (accessible by each student at their respective accounts | Digital Coach > My Results). Contact 01701665588 for any queries. Best of luck!', '8801918536485', 1, 107, 0, NULL, '2019-07-05 21:45:50', '2019-07-05 21:45:50'),
(66, 69136947, 'Math Review Test 1 Results have been published. Detailed reports of the exam is now available for the students who appeared for the exam (accessible by each student at their respective accounts | Digital Coach > My Results). Contact 01701665588 for any queries. Best of luck!', '8801639188996', 1, 107, 1, '2019-07-05 17:49:20', '2019-07-05 21:48:43', '2019-07-05 21:48:43'),
(67, 69136957, 'Math Review Test 1 Results have been published. Detailed reports of the exam is now available for the students who appeared for the exam (accessible by each student at their respective accounts | Digital Coach > My Results). Contact 01701665588 for any queries. Best of luck!', '8801973761919', 1, 107, 1, '2019-07-05 17:49:25', '2019-07-05 21:48:48', '2019-07-05 21:48:48'),
(68, 69136967, 'Math Review Test 1 Results have been published. Detailed reports of the exam is now available for the students who appeared for the exam (accessible by each student at their respective accounts | Digital Coach > My Results). Contact 01701665588 for any queries. Best of luck!', '8801774239328', 1, 107, 1, '2019-07-05 17:49:31', '2019-07-05 21:48:53', '2019-07-05 21:48:53'),
(69, NULL, 'Math Review Test 1 Results have been published. Detailed reports of the exam is now available for the students who appeared for the exam (accessible by each student at their respective accounts | Digital Coach > My Results). Contact 01701665588 for any queries. Best of luck!', '8801786309209', 1, 107, 0, NULL, '2019-07-05 21:48:54', '2019-07-05 21:48:54'),
(70, NULL, 'Math Review Test 1 Results have been published. Detailed reports of the exam is now available for the students who appeared for the exam (accessible by each student at their respective accounts | Digital Coach > My Results). Contact 01701665588 for any queries. Best of luck!', '8801991458376', 1, 107, 0, NULL, '2019-07-05 21:49:41', '2019-07-05 21:49:41'),
(71, 69137050, 'Math Review Test 1 Results have been published. Detailed reports of the exam is now available for the students who appeared for the exam (accessible by each student at their respective accounts | Digital Coach > My Results). Contact 01701665588 for any queries. Best of luck!', '8801640578111', 1, 107, 1, '2019-07-05 17:50:24', '2019-07-05 21:49:46', '2019-07-05 21:49:46'),
(72, 69137063, 'Math Review Test 1 Results have been published. Detailed reports of the exam is now available for the students who appeared for the exam (accessible by each student at their respective accounts | Digital Coach > My Results). Contact 01701665588 for any queries. Best of luck!', '8801757521998', 1, 107, 1, '2019-07-05 17:50:28', '2019-07-05 21:49:51', '2019-07-05 21:49:51'),
(73, 69137073, 'Math Review Test 1 Results have been published. Detailed reports of the exam is now available for the students who appeared for the exam (accessible by each student at their respective accounts | Digital Coach > My Results). Contact 01701665588 for any queries. Best of luck!', '8801686111704', 1, 107, 1, '2019-07-05 17:50:34', '2019-07-05 21:49:56', '2019-07-05 21:49:56'),
(74, 69137083, 'Math Review Test 1 Results have been published. Detailed reports of the exam is now available for the students who appeared for the exam (accessible by each student at their respective accounts | Digital Coach > My Results). Contact 01701665588 for any queries. Best of luck!', '8801790152438', 1, 107, 1, '2019-07-05 17:50:39', '2019-07-05 21:50:02', '2019-07-05 21:50:02'),
(75, 69137096, 'Math Review Test 1 Results have been published. Detailed reports of the exam is now available for the students who appeared for the exam (accessible by each student at their respective accounts | Digital Coach > My Results). Contact 01701665588 for any queries. Best of luck!', '8801949094156', 1, 107, 1, '2019-07-05 17:50:46', '2019-07-05 21:50:07', '2019-07-05 21:50:07'),
(76, 69137105, 'Math Review Test 1 Results have been published. Detailed reports of the exam is now available for the students who appeared for the exam (accessible by each student at their respective accounts | Digital Coach > My Results). Contact 01701665588 for any queries. Best of luck!', '8801834380108', 1, 107, 1, '2019-07-05 17:50:50', '2019-07-05 21:50:12', '2019-07-05 21:50:12'),
(77, NULL, 'Math Review Test 1 Results have been published. Detailed reports of the exam is now available for the students who appeared for the exam (accessible by each student at their respective accounts | Digital Coach > My Results). Contact 01701665588 for any queries. Best of luck!', '8801754374866', 1, 107, 0, NULL, '2019-07-05 21:50:17', '2019-07-05 21:50:17'),
(78, 69137131, 'Math Review Test 1 Results have been published. Detailed reports of the exam is now available for the students who appeared for the exam (accessible by each student at their respective accounts | Digital Coach > My Results). Contact 01701665588 for any queries. Best of luck!', '8801869123584', 1, 107, 1, '2019-07-05 17:51:00', '2019-07-05 21:50:22', '2019-07-05 21:50:22'),
(79, 69137139, 'Math Review Test 1 Results have been published. Detailed reports of the exam is now available for the students who appeared for the exam (accessible by each student at their respective accounts | Digital Coach > My Results). Contact 01701665588 for any queries. Best of luck!', '8801722519747', 1, 107, 1, '2019-07-05 17:51:03', '2019-07-05 21:50:27', '2019-07-05 21:50:27'),
(80, 69424916, 'Congrats! Your bKash payment of TK.1.00 is successful. Your Dues: TK.49. You can complete payment by paying again from https://ims.patronus.com.bd', '8801687835849', 1, 276, 1, '2019-07-07 15:46:02', '2019-07-07 19:45:24', '2019-07-07 19:45:24'),
(81, 70035309, '219368 \n[OTP for password reset action]', '8801811951215', 1, 0, 1, '2019-07-11 16:34:38', '2019-07-11 20:33:56', '2019-07-11 20:33:56'),
(82, 70039379, '616622 \n[OTP for password reset action]', '8801811951215', 1, 0, 1, '2019-07-11 17:17:29', '2019-07-11 21:16:47', '2019-07-11 21:16:47'),
(83, 70040381, '616622 \n[OTP for password reset action]', '8801811951215', 1, 0, 1, '2019-07-11 17:29:59', '2019-07-11 21:29:16', '2019-07-11 21:29:16'),
(84, 70040807, '616622 \n[OTP for password reset action]', '8801811951215', 1, 0, 1, '2019-07-11 17:38:10', '2019-07-11 21:37:29', '2019-07-11 21:37:29'),
(85, 70042489, '616622 \n[OTP for password reset action]', '8801811951215', 1, 0, 1, '2019-07-11 17:41:19', '2019-07-11 21:40:36', '2019-07-11 21:40:36'),
(86, 70044044, '616622 \n[OTP for password reset action]', '8801811951215', 1, 0, 1, '2019-07-11 17:43:01', '2019-07-11 21:42:20', '2019-07-11 21:42:20'),
(87, 70048731, '454116 \n[OTP for password reset action]', '8801733389000', 1, 0, 1, '2019-07-11 17:49:26', '2019-07-11 21:48:45', '2019-07-11 21:48:45'),
(88, 70049237, '454116 \n[OTP for password reset action]', '8801733389000', 1, 0, 1, '2019-07-11 17:53:04', '2019-07-11 21:52:22', '2019-07-11 21:52:22'),
(89, NULL, '128427 \n[OTP for password reset action]', '8801733389000', 1, 0, 0, NULL, '2019-07-12 02:00:12', '2019-07-12 02:00:12'),
(90, NULL, 'Patronus Education introduces IELTS & SPOKEN ENGLISH course. The IELTS Workshop at Panthapath Branch will take place tomorrow [12th July] in two slots at 10 am & 4 pm. Join the workshop for FREE! Call at 01701665581-87 for any information.\r\n\r\nAddress: 69-B Monwara Plaza [Lift-3], Panthapath Signal, Panthapath, Dhaka,1215', '8801680049316', 1, 109, 0, NULL, '2019-07-12 02:01:32', '2019-07-12 02:01:32'),
(91, NULL, 'Patronus Education introduces IELTS & SPOKEN ENGLISH course. The IELTS Workshop at Panthapath Branch will take place tomorrow [12th July] in two slots at 10 am & 4 pm. Join the workshop for FREE! Call at 01701665581-87 for any information.\r\n\r\nAddress: 69-B Monwara Plaza [Lift-3], Panthapath Signal, Panthapath, Dhaka,1215', '8801680049316', 1, 109, 0, NULL, '2019-07-12 02:02:05', '2019-07-12 02:02:05'),
(92, NULL, 'Patronus Education introduces IELTS & SPOKEN ENGLISH course. The IELTS Workshop at Panthapath Branch will take place tomorrow [12th July] in two slots at 10 am & 4 pm. Join the workshop for FREE! Call at 01701665581-87 for any information.\r\n\r\nAddress: 69-B Monwara Plaza [Lift-3], Panthapath Signal, Panthapath, Dhaka,1215', '8801680049316', 1, 109, 0, NULL, '2019-07-12 02:02:51', '2019-07-12 02:02:51'),
(93, NULL, 'Patronus Education introduces IELTS & SPOKEN ENGLISH course. The IELTS Workshop at Panthapath Branch will take place tomorrow [12th July] in two slots at 10 am & 4 pm. Join the workshop for FREE! Call at 01701665581-87 for any information.\r\n\r\nAddress: 69-B Monwara Plaza [Lift-3], Panthapath Signal, Panthapath, Dhaka,1215', '8801680049316', 1, 109, 0, NULL, '2019-07-12 02:04:40', '2019-07-12 02:04:40'),
(94, 70105552, '128427 \n[OTP for password reset action]', '8801733389000', 1, 0, 1, '2019-07-11 22:06:11', '2019-07-12 02:05:28', '2019-07-12 02:05:28'),
(95, 70285157, '390732 \n[OTP for password reset action]', '8801811951215', 1, 0, 1, '2019-07-13 12:39:32', '2019-07-13 16:38:49', '2019-07-13 16:38:49'),
(96, 70291313, '390732 \n[OTP for password reset action]', '8801811951215', 1, 0, 1, '2019-07-13 12:58:55', '2019-07-13 16:58:12', '2019-07-13 16:58:12'),
(97, 70293790, '545327 \n[OTP for password reset action]', '8801680049316', 1, 0, 1, '2019-07-13 13:04:44', '2019-07-13 17:04:01', '2019-07-13 17:04:01'),
(98, 70297139, '390732 \n[OTP for password reset action]', '8801811951215', 1, 0, 1, '2019-07-13 13:18:25', '2019-07-13 17:17:41', '2019-07-13 17:17:41'),
(99, 70298040, '390732 \n[OTP for password reset action]', '8801811951215', 1, 0, 1, '2019-07-13 13:21:11', '2019-07-13 17:20:27', '2019-07-13 17:20:27'),
(100, 70299367, '390732 \n[OTP for password reset action]', '8801811951215', 1, 0, 1, '2019-07-13 13:29:03', '2019-07-13 17:28:18', '2019-07-13 17:28:18'),
(101, 70301483, '390732 \n[OTP for password reset action]', '8801811951215', 1, 0, 1, '2019-07-13 13:38:16', '2019-07-13 17:37:33', '2019-07-13 17:37:33'),
(102, 70302714, '390732 \n[OTP for password reset action]', '8801811951215', 1, 0, 1, '2019-07-13 13:41:02', '2019-07-13 17:40:18', '2019-07-13 17:40:18'),
(103, 70303116, '390732 \n[OTP for password reset action]', '8801811951215', 1, 0, 1, '2019-07-13 13:42:16', '2019-07-13 17:41:33', '2019-07-13 17:41:33'),
(104, 70408278, '505529 \n[OTP for password reset action]', '8801811951215', 1, 0, 1, '2019-07-14 10:16:43', '2019-07-14 14:15:59', '2019-07-14 14:15:59'),
(105, 70463664, '971980 \n[OTP for password reset action]', '8801733389000', 1, 0, 1, '2019-07-14 14:21:34', '2019-07-14 18:20:52', '2019-07-14 18:20:52'),
(106, NULL, '613340 \n[OTP for password reset action]', '8801811951215', 1, 0, 0, NULL, '2019-07-14 18:57:34', '2019-07-14 18:57:34'),
(107, 70522928, 'English Review Test 1 Result has been posted in your personal dashboard (Digital Coach > My Results). Please see it to assess your condition and consult any instructor of your choice if need be. Call at 01701665588/89 for queries.', '8801791100069', 1, 107, 1, '2019-07-14 21:57:09', '2019-07-15 01:56:24', '2019-07-15 01:56:24'),
(108, 70522931, 'English Review Test 1 Result has been posted in your personal dashboard (Digital Coach > My Results). Please see it to assess your condition and consult any instructor of your choice if need be. Call at 01701665588/89 for queries.', '8801994764200', 1, 107, 1, '2019-07-14 21:57:14', '2019-07-15 01:56:29', '2019-07-15 01:56:29'),
(109, NULL, 'English Review Test 1 Result has been posted in your personal dashboard (Digital Coach > My Results). Please see it to assess your condition and consult any instructor of your choice if need be. Call at 01701665588/89 for queries.', '8801998390605', 1, 107, 0, NULL, '2019-07-15 01:56:34', '2019-07-15 01:56:34'),
(110, 70522937, 'English Review Test 1 Result has been posted in your personal dashboard (Digital Coach > My Results). Please see it to assess your condition and consult any instructor of your choice if need be. Call at 01701665588/89 for queries.', '8801404502696', 1, 107, 1, '2019-07-14 21:57:23', '2019-07-15 01:56:39', '2019-07-15 01:56:39'),
(111, 70522947, 'English Review Test 1 Result has been posted in your personal dashboard (Digital Coach > My Results). Please see it to assess your condition and consult any instructor of your choice if need be. Call at 01701665588/89 for queries.', '8801842946264', 1, 107, 1, '2019-07-14 21:57:29', '2019-07-15 01:56:44', '2019-07-15 01:56:44'),
(112, 70522950, 'English Review Test 1 Result has been posted in your personal dashboard (Digital Coach > My Results). Please see it to assess your condition and consult any instructor of your choice if need be. Call at 01701665588/89 for queries.', '8801829940080', 1, 107, 1, '2019-07-14 21:57:33', '2019-07-15 01:56:49', '2019-07-15 01:56:49'),
(113, 70522953, 'English Review Test 1 Result has been posted in your personal dashboard (Digital Coach > My Results). Please see it to assess your condition and consult any instructor of your choice if need be. Call at 01701665588/89 for queries.', '8801633582880', 1, 107, 1, '2019-07-14 21:57:37', '2019-07-15 01:56:54', '2019-07-15 01:56:54'),
(114, 70522955, 'English Review Test 1 Result has been posted in your personal dashboard (Digital Coach > My Results). Please see it to assess your condition and consult any instructor of your choice if need be. Call at 01701665588/89 for queries.', '8801703341782', 1, 107, 1, '2019-07-14 21:57:43', '2019-07-15 01:56:59', '2019-07-15 01:56:59'),
(115, 70522959, 'English Review Test 1 Result has been posted in your personal dashboard (Digital Coach > My Results). Please see it to assess your condition and consult any instructor of your choice if need be. Call at 01701665588/89 for queries.', '8801303270829', 1, 107, 1, '2019-07-14 21:57:47', '2019-07-15 01:57:04', '2019-07-15 01:57:04'),
(116, 70522961, 'English Review Test 1 Result has been posted in your personal dashboard (Digital Coach > My Results). Please see it to assess your condition and consult any instructor of your choice if need be. Call at 01701665588/89 for queries.', '8801785758189', 1, 107, 1, '2019-07-14 21:57:54', '2019-07-15 01:57:09', '2019-07-15 01:57:09'),
(117, NULL, 'English Review Test 1 Result has been posted in your personal dashboard (Digital Coach > My Results). Please see it to assess your condition and consult any instructor of your choice if need be. Call at 01701665588/89 for queries.', '8801918536485', 1, 107, 0, NULL, '2019-07-15 01:57:14', '2019-07-15 01:57:14'),
(118, 70522964, 'English Review Test 1 Result has been posted in your personal dashboard (Digital Coach > My Results). Please see it to assess your condition and consult any instructor of your choice if need be. Call at 01701665588/89 for queries.', '8801687835849', 1, 107, 1, '2019-07-14 21:58:04', '2019-07-15 01:57:19', '2019-07-15 01:57:19'),
(119, 70522969, 'English Review Test 1 Result has been posted in your personal dashboard (Digital Coach > My Results). Please see it to assess your condition and consult any instructor of your choice if need be. Call at 01701665588/89 for queries.', '8801828637294', 1, 107, 1, '2019-07-14 21:58:10', '2019-07-15 01:57:25', '2019-07-15 01:57:25'),
(120, 70522971, 'English Review Test 1 Result has been posted in your personal dashboard (Digital Coach > My Results). Please see it to assess your condition and consult any instructor of your choice if need be. Call at 01701665588/89 for queries.', '8801711959207', 1, 107, 1, '2019-07-14 21:58:14', '2019-07-15 01:57:30', '2019-07-15 01:57:30'),
(121, 70522980, 'English Review Test 1 Result has been posted in your personal dashboard (Digital Coach > My Results). Please see it to assess your condition and consult any instructor of your choice if need be. Call at 01701665588/89 for queries.', '8801639188996', 1, 107, 1, '2019-07-14 21:58:34', '2019-07-15 01:57:50', '2019-07-15 01:57:50'),
(122, NULL, 'English Review Test 1 Result has been posted in your personal dashboard (Digital Coach > My Results). Please see it to assess your condition and consult any instructor of your choice if need be. Call at 01701665588/89 for queries.', '8801973761919', 1, 107, 0, NULL, '2019-07-15 01:57:55', '2019-07-15 01:57:55'),
(123, NULL, 'English Review Test 1 Result has been posted in your personal dashboard (Digital Coach > My Results). Please see it to assess your condition and consult any instructor of your choice if need be. Call at 01701665588/89 for queries.', '8801774239328', 1, 107, 0, NULL, '2019-07-15 01:58:00', '2019-07-15 01:58:00'),
(124, 70522988, 'English Review Test 1 Result has been posted in your personal dashboard (Digital Coach > My Results). Please see it to assess your condition and consult any instructor of your choice if need be. Call at 01701665588/89 for queries.', '8801786309209', 1, 107, 1, '2019-07-14 21:58:49', '2019-07-15 01:58:05', '2019-07-15 01:58:05'),
(125, NULL, 'English Review Test 1 Result has been posted in your personal dashboard (Digital Coach > My Results). Please see it to assess your condition and consult any instructor of your choice if need be. Call at 01701665588/89 for queries.', '8801991458376', 1, 107, 0, NULL, '2019-07-15 01:59:17', '2019-07-15 01:59:17'),
(126, 70523027, 'English Review Test 1 Result has been posted in your personal dashboard (Digital Coach > My Results). Please see it to assess your condition and consult any instructor of your choice if need be. Call at 01701665588/89 for queries.', '8801640578111', 1, 107, 1, '2019-07-14 22:00:06', '2019-07-15 01:59:22', '2019-07-15 01:59:22'),
(127, 70523031, 'English Review Test 1 Result has been posted in your personal dashboard (Digital Coach > My Results). Please see it to assess your condition and consult any instructor of your choice if need be. Call at 01701665588/89 for queries.', '8801757521998', 1, 107, 1, '2019-07-14 22:00:12', '2019-07-15 01:59:27', '2019-07-15 01:59:27'),
(128, 70523036, 'English Review Test 1 Result has been posted in your personal dashboard (Digital Coach > My Results). Please see it to assess your condition and consult any instructor of your choice if need be. Call at 01701665588/89 for queries.', '8801686111704', 1, 107, 1, '2019-07-14 22:00:16', '2019-07-15 01:59:32', '2019-07-15 01:59:32'),
(129, 70523039, 'English Review Test 1 Result has been posted in your personal dashboard (Digital Coach > My Results). Please see it to assess your condition and consult any instructor of your choice if need be. Call at 01701665588/89 for queries.', '8801790152438', 1, 107, 1, '2019-07-14 22:00:20', '2019-07-15 01:59:37', '2019-07-15 01:59:37'),
(130, NULL, 'English Review Test 1 Result has been posted in your personal dashboard (Digital Coach > My Results). Please see it to assess your condition and consult any instructor of your choice if need be. Call at 01701665588/89 for queries.', '8801949094156', 1, 107, 0, NULL, '2019-07-15 01:59:42', '2019-07-15 01:59:42'),
(131, 70523047, 'English Review Test 1 Result has been posted in your personal dashboard (Digital Coach > My Results). Please see it to assess your condition and consult any instructor of your choice if need be. Call at 01701665588/89 for queries.', '8801834380108', 1, 107, 1, '2019-07-14 22:00:32', '2019-07-15 01:59:47', '2019-07-15 01:59:47'),
(132, 70523049, 'English Review Test 1 Result has been posted in your personal dashboard (Digital Coach > My Results). Please see it to assess your condition and consult any instructor of your choice if need be. Call at 01701665588/89 for queries.', '8801754374866', 1, 107, 1, '2019-07-14 22:00:37', '2019-07-15 01:59:53', '2019-07-15 01:59:53'),
(133, 70523051, 'English Review Test 1 Result has been posted in your personal dashboard (Digital Coach > My Results). Please see it to assess your condition and consult any instructor of your choice if need be. Call at 01701665588/89 for queries.', '8801869123584', 1, 107, 1, '2019-07-14 22:00:43', '2019-07-15 01:59:58', '2019-07-15 01:59:58'),
(134, 70523053, 'English Review Test 1 Result has been posted in your personal dashboard (Digital Coach > My Results). Please see it to assess your condition and consult any instructor of your choice if need be. Call at 01701665588/89 for queries.', '8801722519747', 1, 107, 1, '2019-07-14 22:00:47', '2019-07-15 02:00:03', '2019-07-15 02:00:03'),
(135, 70523126, 'English Review Test 1 Result has been posted in your personal dashboard (Digital Coach > My Results). Please see it to assess your condition and consult any instructor of your choice if need be. Call at 01701665588/89 for queries.', '8801639188996', 1, 107, 1, '2019-07-14 22:01:07', '2019-07-15 02:00:22', '2019-07-15 02:00:22'),
(136, NULL, 'English Review Test 1 Result has been posted in your personal dashboard (Digital Coach > My Results). Please see it to assess your condition and consult any instructor of your choice if need be. Call at 01701665588/89 for queries.', '8801973761919', 1, 107, 0, NULL, '2019-07-15 02:00:27', '2019-07-15 02:00:27'),
(137, 70523131, 'English Review Test 1 Result has been posted in your personal dashboard (Digital Coach > My Results). Please see it to assess your condition and consult any instructor of your choice if need be. Call at 01701665588/89 for queries.', '8801774239328', 1, 107, 1, '2019-07-14 22:01:16', '2019-07-15 02:00:32', '2019-07-15 02:00:32'),
(138, 70523138, 'English Review Test 1 Result has been posted in your personal dashboard (Digital Coach > My Results). Please see it to assess your condition and consult any instructor of your choice if need be. Call at 01701665588/89 for queries.', '8801786309209', 1, 107, 1, '2019-07-14 22:01:22', '2019-07-15 02:00:37', '2019-07-15 02:00:37'),
(139, 70759312, 'Congrats! Your payment of TK.11350 is successful. Your Dues: TK.0. You can complete payment by paying again from https://ims.patronus.com.bd', '8801711959207', 1, 107, 1, '2019-07-16 13:54:36', '2019-07-16 17:53:50', '2019-07-16 17:53:50'),
(140, 70766358, 'Congrats! Your payment of TK.12350 is successful. Your Dues: TK.-1000. You can complete payment by paying again from https://ims.patronus.com.bd', '8801828637294', 1, 107, 1, '2019-07-16 14:01:03', '2019-07-16 18:00:17', '2019-07-16 18:00:17'),
(141, NULL, 'Excellent! Your seat has been reserved. Welcome to the Patronus family. Your login ID: 01928284628 & CODE: 214163 Browse: https://ims.patronus.com.bd', '8801928284628', 1, 118, 0, NULL, '2019-07-16 23:17:28', '2019-07-16 23:17:28'),
(142, 71329456, 'Hello Sir, Whats up?', '8801811951215', 1, 30, 1, '2019-07-17 10:24:07', '2019-07-17 14:31:04', '2019-07-17 14:31:04'),
(143, 71383407, '343051 \n[OTP for password reset action]', '8801811951215', 1, 0, 1, '2019-07-17 11:05:38', '2019-07-17 15:08:19', '2019-07-17 15:08:19'),
(144, 75432081, 'Hello Sir', '8801811951215', 1, 30, 1, '2019-08-01 10:01:44', '2019-08-01 14:00:48', '2019-08-01 14:00:48'),
(145, 78457687, 'Test SMS for ACC \"\'#@$%-&*()/?!', '8801933446862', 1, 1, 1, '2019-08-19 14:33:18', '2019-08-20 19:34:43', '2019-08-20 19:34:43'),
(146, 80056800, 'Today Admission: 20, Today Collections: 0, Total Collections in this month: 0. For more details click: http://bit.ly/demo', '8801811951215', 1, 0, 1, '2019-08-27 18:56:54', '2019-08-29 01:17:19', '2019-08-29 01:17:19'),
(147, 80056809, 'Today Admission: 20, Today Collections: 0, Total Collections in this month: 0. For more details click: http://bit.ly/demo', '8801733389001', 1, 0, 1, '2019-08-27 18:56:58', '2019-08-29 01:17:19', '2019-08-29 01:17:19'),
(148, 80057223, 'Today Admission: 20, Today Collections: 0, Total Collections in this month: 0. For more details click: http://bit.ly/demo', '8801811951215', 1, 0, 1, '2019-08-27 19:01:59', '2019-08-29 01:17:19', '2019-08-29 01:17:19'),
(149, 80057228, 'Today Admission: 20, Today Collections: 0, Total Collections in this month: 0. For more details click: http://bit.ly/demo', '8801733389001', 1, 0, 1, '2019-08-27 19:02:02', '2019-08-29 01:17:20', '2019-08-29 01:17:20'),
(150, 80075332, 'Congrats! Your admission & payment of TK. is successful. Your Dues: TK.16500. You can complete payment by paying again from https://bit.ly/2TFTuA3 Your login ID: 01758463254 & Password: RN6DCJHX', '8801758463254', 2, 1, 1, '2019-08-27 19:12:45', '2019-08-29 01:17:20', '2019-08-29 01:17:20'),
(151, 80079600, 'Today Admission: 20, Today Collections: 0, Total Collections in this month: 0. For more details click: http://bit.ly/demo', '8801811951215', 1, 0, 1, '2019-08-27 21:01:53', '2019-08-29 01:17:21', '2019-08-29 01:17:21'),
(152, 80079602, 'Today Admission: 20, Today Collections: 0, Total Collections in this month: 0. For more details click: http://bit.ly/demo', '8801733389001', 1, 0, 1, '2019-08-27 21:01:57', '2019-08-29 01:17:21', '2019-08-29 01:17:21'),
(153, 80088990, 'Congrats! Your payment of TK.1000 is successful. Your Dues: TK.9799. You can complete payment by paying again from https://ims.achievementcc.com', '8801701076345', 1, 3, 1, '2019-08-28 02:40:27', '2019-08-29 01:17:21', '2019-08-29 01:17:21'),
(154, 80089004, 'yoh', '8801711090052', 1, 3, 1, '2019-08-28 02:44:29', '2019-08-29 01:17:22', '2019-08-29 01:17:22'),
(155, 80202205, 'Today Admission: 20, Today Collections: 0, Total Collections in this month: 0. For more details click: http://bit.ly/demo', '8801811951215', 1, 0, 1, '2019-08-28 21:02:13', '2019-08-29 01:17:22', '2019-08-29 01:17:22'),
(156, 80202207, 'Today Admission: 20, Today Collections: 0, Total Collections in this month: 0. For more details click: http://bit.ly/demo', '8801733389001', 1, 0, 1, '2019-08-28 21:02:17', '2019-08-29 01:17:22', '2019-08-29 01:17:22'),
(157, 80206782, 'What\'s up?', '8801822022191', 1, 3, 1, '2019-08-28 22:16:28', '2019-08-29 02:55:01', '2019-08-29 02:55:01'),
(158, 80206866, 'Congrats! Your admission & payment of TK. is successful. Your Dues: TK.13580. You can complete payment by paying again from https://bit.ly/2TFTuA3 Your login ID: 01713185735 & Password: M337R4UK', '8801713185735', 2, 3, 1, '2019-08-28 22:20:11', '2019-08-29 02:55:01', '2019-08-29 02:55:01'),
(159, 80207853, 'Congrats! Your payment of TK.1 is successful. Your Dues: TK.13579. You can complete payment by paying again from https://ims.achievementcc.com', '8801713185735', 1, 3, 1, '2019-08-28 22:52:23', '2019-08-29 02:55:02', '2019-08-29 02:55:02'),
(160, 80207855, 'Congrats! Your payment of TK.1 is successful. Your Dues: TK.13578. You can complete payment by paying again from https://ims.achievementcc.com', '8801713185735', 1, 3, 1, '2019-08-28 22:52:37', '2019-08-29 02:55:02', '2019-08-29 02:55:02'),
(161, 80207866, 'Congrats! Your payment of TK.1 is successful. Your Dues: TK.13577. You can complete payment by paying again from https://ims.achievementcc.com', '8801713185735', 1, 3, 1, '2019-08-28 22:52:53', '2019-08-29 02:55:02', '2019-08-29 02:55:02'),
(162, 0, '\"Hello admins\"', '8801711090052', 1, 3, 1, '2019-08-28 22:56:05', '2019-08-29 02:55:03', '2019-08-29 02:55:03'),
(163, 0, '\"Hello admins\"', '8801788562353', 1, 3, 1, '2019-08-28 22:56:05', '2019-08-29 02:55:03', '2019-08-29 02:55:03'),
(164, 0, '\"?????? ?????\n???????\n??????????\"', '8801711090052', 1, 3, 1, '2019-08-28 22:58:16', '2019-08-29 02:58:23', '2019-08-29 02:58:23'),
(165, 0, '\"?????? ?????\n???????\n??????????\"', '8801788562353', 1, 3, 1, '2019-08-28 22:58:16', '2019-08-29 02:58:23', '2019-08-29 02:58:23'),
(166, 0, '\"?????? ?????\n???????\n??????????\"', '8801822022191', 1, 3, 1, '2019-08-28 22:58:17', '2019-08-29 02:58:23', '2019-08-29 02:58:23'),
(167, 80964075, 'Today\\\'s Summary: Admission - 20, Collections - 0, Total Collections in this month: 0. For more details check your email or click here: http://bit.ly/2Hz8cUG', '8801711090052', 1, 0, 1, '2019-09-02 21:02:13', '2019-09-04 04:36:51', '2019-09-04 04:36:51'),
(168, 81224813, 'Today\\\'s Summary: Admission - 20, Collections - 0, Total Collections in this month: 0. For more details check your email or click here: http://bit.ly/2Hz8cUG', '8801711090052', 1, 0, 1, '2019-09-03 21:01:46', '2019-09-04 04:36:51', '2019-09-04 04:36:51'),
(169, 81242139, 'Congrats! Your payment of TK.799 is successful. Your Dues: TK.10000. You can complete payment by paying again from https://ims.achievementcc.com', '8801822022191', 1, 3, 1, '2019-09-04 00:37:34', '2019-09-04 04:36:52', '2019-09-04 04:36:52'),
(170, 81242316, 'Congrats! Your payment of TK.100 is successful. Your Dues: TK.9900. You can complete payment by paying again from https://ims.achievementcc.com', '8801303504908', 1, 3, 1, '2019-09-04 00:40:52', '2019-09-04 16:03:05', '2019-09-04 16:03:05'),
(171, 81242405, 'Congrats! Your payment of TK.100 is successful. Your Dues: TK.9800. You can complete payment by paying again from https://ims.achievementcc.com', '8801303504908', 1, 3, 1, '2019-09-04 00:42:28', '2019-09-04 16:03:06', '2019-09-04 16:03:06'),
(172, 81242476, 'Congrats! Your payment of TK.10 is successful. Your Dues: TK.9790. You can complete payment by paying again from https://ims.achievementcc.com', '8801303504908', 1, 3, 1, '2019-09-04 00:43:44', '2019-09-04 16:03:06', '2019-09-04 16:03:06'),
(173, 81780993, 'Today\\\'s Summary: Admission - 20, Collections - 0, Total Collections in this month: 0. For more details check your email or click here: http://bit.ly/2Hz8cUG', '8801711090052', 1, 0, 1, '2019-09-04 21:01:41', '2019-09-05 19:31:28', '2019-09-05 19:31:28'),
(174, 83156325, 'Today\\\'s Summary: Admission - 20, Collections - 0, Total Collections in this month: 851650. For more details check your email or click here: http://bit.ly/2Hz8cUG', '8801711090052', 2, 0, 1, '2019-09-09 21:02:00', '2019-09-10 05:40:18', '2019-09-10 05:40:18'),
(175, 83172245, 'Congrats! Your admission & payment of TK. is successful. Your Dues: TK.11600. You can complete payment by paying again from https://bit.ly/2TFTuA3 Your login ID: 01977767227 & Password: J6VNB8JN', '8801977767227', 2, 3, 1, '2019-09-10 01:00:13', '2019-09-10 05:40:18', '2019-09-10 05:40:18'),
(176, 83172615, 'Congrats! Your payment of TK.200 is successful. Your Dues: TK.11400. You can complete payment by paying again from https://ims.achievementcc.com', '8801977767227', 1, 3, 1, '2019-09-10 01:25:22', '2019-09-10 05:40:18', '2019-09-10 05:40:18'),
(177, 83172619, 'Congrats! Your payment of TK.200 is successful. Your Dues: TK.11200. You can complete payment by paying again from https://ims.achievementcc.com', '8801977767227', 1, 3, 1, '2019-09-10 01:25:52', '2019-09-10 05:40:19', '2019-09-10 05:40:19'),
(178, 83172623, 'Congrats! Your payment of TK.200 is successful. Your Dues: TK.11000. You can complete payment by paying again from https://ims.achievementcc.com', '8801977767227', 1, 3, 1, '2019-09-10 01:26:22', '2019-09-10 05:40:19', '2019-09-10 05:40:19'),
(179, 83172659, ';(;', '8801822022191', 1, 3, 1, '2019-09-10 01:35:35', '2019-09-10 05:40:19', '2019-09-10 05:40:19'),
(180, 83173128, 'Congrats! Your admission & payment of TK. is successful. Your Dues: TK.11600. You can complete payment by paying again from https://bit.ly/2TFTuA3 Your login ID: 01822022190 & Password: 4UBXZZJ2', '8801822022190', 2, 2056, 1, '2019-09-10 03:49:55', '2019-09-10 19:36:36', '2019-09-10 19:36:36'),
(181, 83173177, 'Congrats! Your payment of TK.1000 is successful. Your Dues: TK.10600. You can complete payment by paying again from https://ims.achievementcc.com', '8801822022190', 1, 2056, 1, '2019-09-10 04:24:32', '2019-09-10 19:36:37', '2019-09-10 19:36:37'),
(182, 83173184, '?????? ?', '8801711090052', 1, 3, 1, '2019-09-10 04:34:16', '2019-09-10 19:36:37', '2019-09-10 19:36:37'),
(183, 83173232, 'Congrats! Your bKash payment of TK.1.00 is successful. Your Dues: TK.10599. You can complete payment by paying again from https://bit.ly/2TFTuA3', '8801822022190', 1, 2071, 1, '2019-09-10 05:06:51', '2019-09-10 19:36:37', '2019-09-10 19:36:37'),
(184, 0, '\"lelo\"', '8801711090052', 1, 3, 1, '2019-09-10 06:41:48', '2019-09-10 19:36:38', '2019-09-10 19:36:38'),
(185, 0, '\"lelo\"', '8801822022191', 1, 3, 1, '2019-09-10 06:41:49', '2019-09-10 19:36:38', '2019-09-10 19:36:38'),
(186, 83173462, 'Thrive ??? Achievement -?? ????? ??????????? ?????? ???????!', '8801711090052', 1, 3, 1, '2019-09-10 06:46:47', '2019-09-10 19:36:38', '2019-09-10 19:36:38'),
(187, 83173467, 'Thrive ??? Achievement -?? ???????? ??????????? ?????? ???????!', '8801711090052', 1, 3, 1, '2019-09-10 06:48:59', '2019-09-10 19:36:38', '2019-09-10 19:36:38'),
(188, 83233807, 'Congrats! Your payment of TK.599 is successful. Your Dues: TK.10000. You can complete payment by paying again from https://ims.achievementcc.com', '8801822022190', 1, 3, 1, '2019-09-10 09:30:40', '2019-09-10 19:36:39', '2019-09-10 19:36:39'),
(189, 83235538, 'Congrats! Your payment of TK.100 is successful. Your Dues: TK.9900. You can complete payment by paying again from https://ims.achievementcc.com', '8801822022190', 1, 3, 1, '2019-09-10 09:45:39', '2019-09-10 19:36:39', '2019-09-10 19:36:39'),
(190, 83241152, 'Congrats! Your payment of TK.200 is successful. Your Dues: TK.10800. You can complete payment by paying again from https://ims.achievementcc.com', '8801977767227', 1, 1, 1, '2019-09-10 10:01:23', '2019-09-10 19:36:40', '2019-09-10 19:36:40');
INSERT INTO `sms_log` (`id`, `sms_id`, `sms`, `mobile_number`, `total_sms`, `created_by`, `status`, `delivery_time`, `created_at`, `updated_at`) VALUES
(191, 83248230, 'Congrats! Your payment of TK.100 is successful. Your Dues: TK.10700. You can complete payment by paying again from https://ims.achievementcc.com', '8801977767227', 1, 1, 1, '2019-09-10 10:30:43', '2019-09-10 19:36:40', '2019-09-10 19:36:40'),
(192, 83249389, 'Congrats! Your payment of TK.100 is successful. Your Dues: TK.10696. You can complete payment by paying again from https://ims.achievementcc.com', '8801687835849', 1, 3, 1, '2019-09-10 10:52:54', '2019-09-10 19:36:40', '2019-09-10 19:36:40'),
(193, 83289546, 'Congrats! Your payment of TK.100 is successful. Your Dues: TK.9800. You can complete payment by paying again from https://ims.achievementcc.com', '8801822022190', 1, 3, 1, '2019-09-10 15:25:05', '2019-09-10 19:36:41', '2019-09-10 19:36:41'),
(194, 83294244, 'Congrats! Your admission & payment of TK. is successful. Your Dues: TK.10000. You can complete payment by paying again from https://bit.ly/2TFTuA3 Your login ID: 01701665520 & Password: 8UANUZME', '8801701665520', 2, 2056, 1, '2019-09-10 16:57:42', '2019-09-11 16:44:40', '2019-09-11 16:44:40'),
(195, 83294664, 'Congrats! Your payment of TK.6000 is successful. Your Dues: TK.4000. You can complete payment by paying again from https://ims.achievementcc.com', '8801701665520', 1, 2056, 1, '2019-09-10 17:07:27', '2019-09-11 16:44:40', '2019-09-11 16:44:40'),
(196, 83295165, 'Rana bhai kemon asen? Ajkei taka joma diben.', '8801701665530', 1, 2056, 1, '2019-09-10 17:16:09', '2019-09-11 16:44:41', '2019-09-11 16:44:41'),
(197, 0, '\"Thrive ??? Achievement -?? ???????? ??????????? ?????? ???????!\"', '8801680049316', 1, 2056, 1, '2019-09-10 17:20:15', '2019-09-11 16:44:41', '2019-09-11 16:44:41'),
(198, 0, '\"Thrive ??? Achievement -?? ???????? ??????????? ?????? ???????!\"', '8801701665502', 1, 2056, 1, '2019-09-10 17:20:16', '2019-09-11 16:44:41', '2019-09-11 16:44:41'),
(199, 0, '\"Thrive ??? Achievement -?? ???????? ??????????? ?????? ???????!\"', '8801701665530', 1, 2056, 1, '2019-09-10 17:20:16', '2019-09-11 16:44:41', '2019-09-11 16:44:41'),
(200, 0, '\"Thrive ??? Achievement -?? ???????? ??????????? ?????? ???????!\"', '8801701665542', 1, 2056, 1, '2019-09-10 17:20:16', '2019-09-11 16:44:41', '2019-09-11 16:44:41'),
(201, 0, '\"Thrive ??? Achievement -?? ???????? ??????????? ?????? ???????!\"', '8801701665544', 1, 2056, 1, '2019-09-10 17:20:16', '2019-09-11 16:44:42', '2019-09-11 16:44:42'),
(202, 0, '\"Thrive ??? Achievement -?? ???????? ??????????? ?????? ???????!\"', '8801701665549', 1, 2056, 1, '2019-09-10 17:20:15', '2019-09-11 16:44:42', '2019-09-11 16:44:42'),
(203, 0, '\"Thrive ??? Achievement -?? ???????? ??????????? ?????? ???????!\"', '8801701665550', 1, 2056, 1, '2019-09-10 17:20:16', '2019-09-11 16:44:42', '2019-09-11 16:44:42'),
(204, 0, '\"Thrive ??? Achievement -?? ???????? ??????????? ?????? ???????!\"', '8801701665551', 1, 2056, 1, '2019-09-10 17:20:15', '2019-09-11 16:44:42', '2019-09-11 16:44:42'),
(205, 0, '\"Thrive ??? Achievement -?? ???????? ??????????? ?????? ???????!\"', '8801701665554', 1, 2056, 1, '2019-09-10 17:20:16', '2019-09-11 16:44:42', '2019-09-11 16:44:42'),
(206, 0, '\"Thrive ??? Achievement -?? ???????? ??????????? ?????? ???????!\"', '8801701665557', 1, 2056, 1, '2019-09-10 17:20:15', '2019-09-11 16:44:42', '2019-09-11 16:44:42'),
(207, 0, '\"Thrive ??? Achievement -?? ???????? ??????????? ?????? ???????!\"', '8801701665558', 1, 2056, 1, '2019-09-10 17:20:16', '2019-09-11 16:44:42', '2019-09-11 16:44:42'),
(208, 0, '\"Thrive ??? Achievement -?? ???????? ??????????? ?????? ???????!\"', '8801701665559', 1, 2056, 1, '2019-09-10 17:20:15', '2019-09-11 16:44:42', '2019-09-11 16:44:42'),
(209, 0, '\"Thrive ??? Achievement -?? ???????? ??????????? ?????? ???????!\"', '8801701665564', 1, 2056, 1, '2019-09-10 17:20:16', '2019-09-11 16:44:42', '2019-09-11 16:44:42'),
(210, 0, '\"Thrive ??? Achievement -?? ???????? ??????????? ?????? ???????!\"', '8801701665565', 1, 2056, 1, '2019-09-10 17:20:16', '2019-09-11 16:44:42', '2019-09-11 16:44:42'),
(211, 0, '\"Thrive ??? Achievement -?? ???????? ??????????? ?????? ???????!\"', '8801701665567', 1, 2056, 1, '2019-09-10 17:20:15', '2019-09-11 16:44:42', '2019-09-11 16:44:42'),
(212, 0, '\"Thrive ??? Achievement -?? ???????? ??????????? ?????? ???????!\"', '8801701665568', 1, 2056, 1, '2019-09-10 17:20:16', '2019-09-11 16:44:42', '2019-09-11 16:44:42'),
(213, 0, '\"Thrive ??? Achievement -?? ???????? ??????????? ?????? ???????!\"', '8801701665590', 1, 2056, 1, '2019-09-10 17:20:16', '2019-09-11 16:44:42', '2019-09-11 16:44:42'),
(214, 0, '\"Thrive ??? Achievement -?? ???????? ??????????? ?????? ???????!\"', '8801711090052', 1, 2056, 1, '2019-09-10 17:20:15', '2019-09-11 16:44:42', '2019-09-11 16:44:42'),
(215, 0, '\"Thrive ??? Achievement -?? ???????? ??????????? ?????? ???????!\"', '8801711267906', 1, 2056, 1, '2019-09-10 17:20:16', '2019-09-11 16:44:42', '2019-09-11 16:44:42'),
(216, 0, '\"Thrive ??? Achievement -?? ???????? ??????????? ?????? ???????!\"', '8801822022191', 1, 2056, 1, '2019-09-10 17:20:16', '2019-09-11 16:44:42', '2019-09-11 16:44:42'),
(217, 0, '\"Thrive ??? Achievement -?? ???????? ??????????? ?????? ???????!\"', '8801954918519', 1, 2056, 1, '2019-09-10 17:20:20', '2019-09-11 16:44:42', '2019-09-11 16:44:42'),
(218, 83296081, 'Na apu, apnar icche moto sms send korte parben', '8801701665542', 1, 2056, 1, '2019-09-10 17:21:45', '2019-09-11 16:44:42', '2019-09-11 16:44:42'),
(219, 83297109, 'Congrats! Your admission & payment of TK. is successful. Your Dues: TK.5700. You can complete payment by paying again from https://bit.ly/2TFTuA3 Your login ID: 01701665552 & Password: BX3QHV7G', '8801701665552', 2, 2056, 1, '2019-09-10 17:41:15', '2019-09-11 16:44:42', '2019-09-11 16:44:42'),
(220, 83297330, 'Welcome to Achievement', '8801721160387', 1, 2056, 1, '2019-09-10 17:43:52', '2019-09-11 16:44:43', '2019-09-11 16:44:43'),
(221, 83300337, 'Congrats! Your admission & payment of TK. is successful. Your Dues: TK.6600. You can complete payment by paying again from https://bit.ly/2TFTuA3 Your login ID: 01822022198 & Password: JEA42G3K', '8801822022198', 2, 3, 1, '2019-09-10 18:46:11', '2019-09-11 16:44:43', '2019-09-11 16:44:43'),
(222, 83300497, 'Congrats! Your payment of TK.1000 is successful. Your Dues: TK.5600. You can complete payment by paying again from https://ims.achievementcc.com', '8801822022198', 1, 3, 1, '2019-09-10 18:49:26', '2019-09-11 16:44:43', '2019-09-11 16:44:43'),
(223, 83330937, 'Today\\\'s Summary: Admission - 20, Collections - 0, Total Collections in this month: 851650. For more details check your email or click here: http://bit.ly/2Hz8cUG', '8801711090052', 2, 0, 1, '2019-09-10 21:01:35', '2019-09-11 16:44:43', '2019-09-11 16:44:43'),
(224, 83403172, 'Test SMS', '8801822022190', 1, 2056, 1, '2019-09-11 12:45:28', '2019-09-11 16:44:44', '2019-09-11 16:44:44'),
(225, 83443937, 'Congrats! Your bKash payment of TK.1.00 is successful. Your Dues: TK.10695. You can complete payment by paying again from https://bit.ly/2TFTuA3', '8801687835849', 1, 988, 1, '2019-09-11 16:57:19', '2019-09-12 20:24:06', '2019-09-12 20:24:06'),
(226, 83470980, 'Mostafaaaa', '8801981849332', 1, 3, 1, '2019-09-11 18:58:09', '2019-09-12 20:24:06', '2019-09-12 20:24:06'),
(227, 83495084, 'Today\\\'s Summary: Admission - 20, Collections - 0, Total Collections in this month: 851650. For more details check your email or click here: http://bit.ly/2Hz8cUG', '8801711090052', 2, 0, 1, '2019-09-11 22:01:57', '2019-09-12 20:24:06', '2019-09-12 20:24:06'),
(228, 83545208, 'Congrats! Your payment of TK.5 is successful. Your Dues: TK.10690. You can complete payment by paying again from https://ims.achievementcc.com', '8801687835849', 1, 1, 1, '2019-09-12 11:37:22', '2019-09-12 20:24:07', '2019-09-12 20:24:07'),
(229, 83615868, 'Pepsi   Coke', '8801677231701', 1, 3, 1, '2019-09-12 12:42:41', '2019-09-12 20:24:07', '2019-09-12 20:24:07'),
(230, 83921103, 'Congrats! Your payment of TK.1000 is successful. Your Dues: TK.8000. You can complete payment by paying again from https://ims.achievementcc.com', '8801822022191', 1, 3, 1, '2019-09-15 01:33:11', '2019-09-16 05:43:09', '2019-09-16 05:43:09'),
(231, 83921112, 'Congrats! Your payment of TK.1000 is successful. Your Dues: TK.7000. You can complete payment by paying again from https://ims.achievementcc.com', '8801822022191', 1, 3, 1, '2019-09-15 01:34:01', '2019-09-16 05:43:10', '2019-09-16 05:43:10'),
(232, 84016923, 'Congrats! Your payment of TK.100 is successful. Your Dues: TK.10590. You can complete payment by paying again from https://ims.achievementcc.com', '8801687835849', 1, 1, 1, '2019-09-15 15:30:55', '2019-09-16 05:43:10', '2019-09-16 05:43:10'),
(233, 84017529, 'Congrats! Your admission & payment of TK. is successful. Your Dues: TK.15200. You can complete payment by paying again from https://bit.ly/2TFTuA3 Your login ID: 01833351613 & Password: KQGT4YEC', '8801833351613', 2, 3, 1, '2019-09-15 15:39:35', '2019-09-16 05:43:11', '2019-09-16 05:43:11'),
(234, 84037286, 'Congrats! Your payment of TK.500 is successful. Your Dues: TK.6500. You can complete payment by paying again from https://ims.achievementcc.com', '8801822022191', 1, 3, 1, '2019-09-15 17:20:10', '2019-09-16 05:43:11', '2019-09-16 05:43:11'),
(235, 84059432, 'Today\\\'s Summary: Admission - 3, Collections - 13800, Total Collections in this month: 553720. For more details check your email or click here: http://bit.ly/2Hz8cUG', '8801711090052', 2, 0, 1, '2019-09-15 22:01:40', '2019-09-16 05:43:12', '2019-09-16 05:43:12'),
(236, 84121713, 'Congrats! Your payment of TK.500 is successful. Your Dues: TK.6000. You can complete payment by paying again from https://ims.achievementcc.com', '8801822022191', 1, 3, 1, '2019-09-16 11:44:45', '2019-09-16 05:43:12', '2019-09-16 05:43:12'),
(237, 84138076, 'Congrats! Your payment of TK.1 is successful. Your Dues: TK.10798. You can complete payment by paying again from https://ims.achievementcc.com', '8801733389000', 1, 3, 1, '2019-09-16 13:39:58', '2019-09-16 05:43:13', '2019-09-16 05:43:13'),
(238, 84141203, 'Congrats! Your admission & payment of TK. is successful. Your Dues: TK.16000. You can complete payment by paying again from https://bit.ly/2TFTuA3 Your login ID: 01718485799 & Password: ZE5C54DK', '8801718485799', 2, 3, 1, '2019-09-16 14:06:55', '2019-09-16 17:07:57', '2019-09-16 17:07:57'),
(239, 84168980, 'Congrats! Your bKash payment of TK.1.00 is successful. Your Dues: TK.10589. You can complete payment by paying again from https://bit.ly/2TFTuA3', '8801687835849', 1, 988, 1, '2019-09-16 16:42:08', '2019-09-16 17:07:57', '2019-09-16 17:07:57'),
(240, 84176831, 'Congrats! Your bKash payment of TK.1.00 is successful. Your Dues: TK.10588. You can complete payment by paying again from https://bit.ly/2TFTuA3', '8801687835849', 1, 988, 1, '2019-09-16 17:49:51', '2019-09-16 17:07:58', '2019-09-16 17:07:58'),
(241, 84191160, 'Today\\\'s Summary: Admission - 3, Collections - 7703, Total Collections in this month: 563423. For more details check your email or click here: http://bit.ly/2Hz8cUG', '8801711090052', 2, 0, 1, '2019-09-16 22:01:40', '2019-09-16 17:07:58', '2019-09-16 17:07:58'),
(242, 84195611, 'Congrats! Your admission & payment of TK. is successful. Your Dues: TK.16000. You can complete payment by paying again from https://bit.ly/2TFTuA3 Your login ID: 01711090054 & Password: T6YB33MA', '8801711090054', 2, 3, 1, '2019-09-17 00:38:26', '2019-09-16 17:07:59', '2019-09-16 17:07:59'),
(243, 84195819, 'Congrats! Your payment of TK.1000 is successful. Your Dues: TK.5000. You can complete payment by paying again from https://ims.achievementcc.com', '8801822022191', 1, 3, 1, '2019-09-17 01:08:45', '2019-09-16 17:08:00', '2019-09-16 17:08:00');

-- --------------------------------------------------------

--
-- Table structure for table `sms_submit_id`
--

CREATE TABLE `sms_submit_id` (
  `id` int(11) NOT NULL,
  `submit_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(11) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sms_submit_id`
--

INSERT INTO `sms_submit_id` (`id`, `submit_id`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'C20041105d70fb080b54e', 1, '2019-09-05 22:08:19', '2019-09-05 22:08:19'),
(2, 'C20041105d712360e0225', NULL, '2019-09-06 01:00:28', '2019-09-06 01:00:28'),
(3, 'C20041105d715c5c3a01b', 3, '2019-09-06 05:03:35', '2019-09-06 05:03:35'),
(4, 'C20041105d715d06a688b', 3, '2019-09-06 05:06:25', '2019-09-06 05:06:25'),
(5, 'C20041105d7274d91ce80', NULL, '2019-09-07 01:00:19', '2019-09-07 01:00:19'),
(6, 'C20041105d73c66ecb6de', NULL, '2019-09-08 01:00:40', '2019-09-08 01:00:40'),
(7, 'C20041105d740fd8a799b', 3, '2019-09-08 06:13:54', '2019-09-08 06:13:54'),
(8, 'C20041105d741104b7d5e', 3, '2019-09-08 06:18:54', '2019-09-08 06:18:54'),
(9, 'C20041105d741146c4b43', 3, '2019-09-08 06:20:00', '2019-09-08 06:20:00'),
(10, 'C20041105d74dbb0c2afd', 1, '2019-09-08 20:43:38', '2019-09-08 20:43:38'),
(11, 'C20041105d74dc546a108', 1, '2019-09-08 20:46:21', '2019-09-08 20:46:21'),
(12, 'C20041105d74dca4e1b69', 1, '2019-09-08 20:47:42', '2019-09-08 20:47:42'),
(13, 'C20041105d74dd4342308', 1, '2019-09-08 20:50:22', '2019-09-08 20:50:22'),
(14, 'C20041105d7517e3e3e86', NULL, '2019-09-09 01:00:32', '2019-09-09 01:00:32'),
(18, 'C20041105d7d0edfdae70', NULL, '2019-09-14 14:00:04', '2019-09-14 14:00:04'),
(32, 'C20041105d7fd9f8025c6', 3, '2019-09-16 16:51:06', '2019-09-16 16:51:06'),
(33, 'C20041105d7fdbdb1bea2', 3, '2019-09-16 16:59:10', '2019-09-16 16:59:10'),
(35, 'C20041105d80b784ea051', 1, '2019-09-17 10:36:21', '2019-09-17 10:36:21'),
(36, 'C20041105d8b6b01a607f', 1, '2019-09-25 13:24:44', '2019-09-25 13:24:44'),
(37, 'C20041105d8c35e66c3b0', 1, '2019-09-26 03:50:25', '2019-09-26 03:50:25'),
(38, 'C20041105d9ad1f90f512', 1, '2019-10-07 05:50:15', '2019-10-07 05:50:15');

-- --------------------------------------------------------

--
-- Table structure for table `social_icons`
--

CREATE TABLE `social_icons` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `student_id` varchar(99) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_id` int(10) UNSIGNED DEFAULT NULL,
  `religion_id` int(10) UNSIGNED DEFAULT NULL,
  `present_address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `for_applied` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `previous_institution_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `previous_result` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `previous_institution_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `previous_institution_tc_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `previous_institution_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssc_institution` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssc_institution_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `with_ob_s_gpa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `without_o_s_gpa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssc_board` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssc_roll` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssc_registration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssc_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssc_session` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(3) UNSIGNED DEFAULT '1',
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `user_id`, `student_id`, `gender`, `blood_id`, `religion_id`, `present_address`, `permanent_address`, `birth_date`, `for_applied`, `previous_institution_name`, `previous_result`, `previous_institution_address`, `previous_institution_tc_no`, `previous_institution_date`, `ssc_institution`, `ssc_institution_address`, `with_ob_s_gpa`, `without_o_s_gpa`, `ssc_board`, `ssc_roll`, `ssc_registration`, `ssc_group`, `ssc_session`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(39, 36, NULL, 'Male', NULL, NULL, 'Dhaka', 'Dhaka', '2019-09-20', NULL, 'School', 'Result', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, '2019-09-30 07:05:11', '2019-09-30 07:05:11'),
(40, 37, NULL, 'Male', NULL, NULL, 'Dhaka', 'Dhaka', '2019-09-29', NULL, 'School', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, '2019-09-30 07:05:11', '2019-09-30 07:05:11'),
(41, 39, '19BNCD000001', 'male', NULL, 1, NULL, NULL, '2019-10-07', NULL, 'sdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, '2019-10-07 05:50:11', '2019-10-07 05:50:11');

-- --------------------------------------------------------

--
-- Table structure for table `student_attendances`
--

CREATE TABLE `student_attendances` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(11) NOT NULL,
  `attendance_date` date NOT NULL,
  `attendance` tinyint(3) UNSIGNED NOT NULL DEFAULT '1' COMMENT '1=Present,2=Absent',
  `week_lecture_id` int(10) UNSIGNED DEFAULT NULL,
  `class_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms_status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1' COMMENT '1=Sms Send Done, 2=Sms Send Later',
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_guardians`
--

CREATE TABLE `student_guardians` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `pg_number` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `father_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name_ba` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_occupation` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_designation` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `father_email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_nid` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_phone` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name_ba` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_occupation` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_designation` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mother_email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_nid` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_workplace` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_work_institution` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_designation` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_employee_no` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_work_section` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_income` int(10) UNSIGNED DEFAULT NULL,
  `others_guardian` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `others_guardian_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relation_othersguardian` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `others_g_house_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `others_g_rd_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `others_g_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `others_g_section` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `others_g_thana` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `others_g_dist` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `others_g_phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_guardians`
--

INSERT INTO `student_guardians` (`id`, `user_id`, `pg_number`, `father_name`, `father_name_ba`, `father_occupation`, `father_designation`, `father_email`, `father_nid`, `father_phone`, `mother_name`, `mother_name_ba`, `mother_occupation`, `mother_designation`, `mother_email`, `mother_nid`, `mother_phone`, `father_photo`, `mother_photo`, `parent_id`, `parent_workplace`, `parent_work_institution`, `parent_designation`, `parent_employee_no`, `parent_work_section`, `parent_phone`, `parent_income`, `others_guardian`, `others_guardian_name`, `relation_othersguardian`, `others_g_house_no`, `others_g_rd_no`, `others_g_block`, `others_g_section`, `others_g_thana`, `others_g_dist`, `others_g_phone`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(38, 36, '1578422', 'Father Name', NULL, 'Buseness', 'CEO', 'femail@gmail.com', '1578452315', '1478562391', 'Mother Name', NULL, 'House Wife', 'CEO', 'memail@gmail.com', '1587523168', '1587562314', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2019-09-30 07:05:11', '2019-09-30 07:05:11'),
(39, 37, '4554', 'Father Name', NULL, 'Buseness', 'CEO', 'femail1@gmail.com', '145465742', '1578452316', 'Mother Name', NULL, 'House Wife', 'CEO', 'memail2@gmail.com', '65764346546', '1578451258', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2019-09-30 07:05:11', '2019-09-30 07:05:11'),
(40, 39, NULL, 'Father name', NULL, NULL, NULL, NULL, NULL, '0178542698', 'Mother name', NULL, NULL, NULL, NULL, NULL, '01587542136', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2019-10-07 05:50:11', '2019-10-07 05:50:11');

-- --------------------------------------------------------

--
-- Table structure for table `study_classes`
--

CREATE TABLE `study_classes` (
  `id` int(10) UNSIGNED NOT NULL,
  `academic_year_id` int(10) UNSIGNED NOT NULL,
  `session_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `class_id` int(10) UNSIGNED NOT NULL,
  `section_id` int(10) UNSIGNED DEFAULT NULL,
  `sub_section_id` int(10) UNSIGNED DEFAULT NULL,
  `group_id` int(10) UNSIGNED DEFAULT NULL,
  `guardian_type_id` int(10) UNSIGNED DEFAULT NULL,
  `discount_id` int(10) UNSIGNED DEFAULT NULL,
  `shift_id` int(10) UNSIGNED DEFAULT NULL,
  `curricula_id` int(10) UNSIGNED DEFAULT NULL,
  `roll` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admission_date` date DEFAULT NULL,
  `admission_type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1=Newly Admitted Student, 2=Promoted Student',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1=Running Study Class, 2=Previous Study Class',
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `study_classes`
--

INSERT INTO `study_classes` (`id`, `academic_year_id`, `session_id`, `user_id`, `class_id`, `section_id`, `sub_section_id`, `group_id`, `guardian_type_id`, `discount_id`, `shift_id`, `curricula_id`, `roll`, `admission_date`, `admission_type`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(27, 1, NULL, 36, 5, NULL, NULL, 4, 1, NULL, 1, 2, NULL, '2019-09-30', 1, 1, 1, NULL, '2019-09-30 07:05:11', '2019-09-30 07:05:11'),
(28, 1, NULL, 37, 5, NULL, NULL, 4, 2, NULL, 2, 1, NULL, '2019-09-30', 1, 1, 1, NULL, '2019-09-30 07:05:11', '2019-09-30 07:05:11'),
(29, 1, NULL, 39, 5, NULL, NULL, 4, 1, NULL, 1, 1, NULL, '2019-10-07', 1, 1, 1, NULL, '2019-10-07 05:50:11', '2019-10-07 05:50:11');

-- --------------------------------------------------------

--
-- Table structure for table `study_sessions`
--

CREATE TABLE `study_sessions` (
  `id` int(10) UNSIGNED NOT NULL,
  `session_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `study_sessions`
--

INSERT INTO `study_sessions` (`id`, `session_name`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '2019-2020', 1, 1, NULL, '2019-09-25 18:00:00', '2019-09-25 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

CREATE TABLE `sub_menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_bn` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `serial_num` int(10) UNSIGNED NOT NULL,
  `fk_menu_id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `big_icon` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=For Admin / Student, 2=For Applicant',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`id`, `name`, `name_bn`, `url`, `status`, `serial_num`, `fk_menu_id`, `slug`, `icon`, `big_icon`, `type`, `created_at`, `updated_at`) VALUES
(13, 'Notice', NULL, '#', 1, 1, 25, '[\"notice\"]', 'images/menu/sub-menu/icon/2019/08/18/notice18-08-201910-31-03.png', 'images/menu/big-icon/2019/08/18/notice18-08-201910-31-03.png', 1, '2019-06-26 09:47:35', '2019-08-18 14:31:03'),
(14, 'Courses', NULL, 'all-batches', 2, 2, 25, '[\"batches\"]', 'images/menu/sub-menu/icon/2019/08/18/courses18-08-201910-31-14.png', 'images/menu/big-icon/2019/08/18/courses18-08-201910-31-14.png', 1, '2019-06-26 09:48:54', '2019-08-22 22:43:16'),
(17, 'Add Multiple Student', NULL, 'user-import-form', 2, 3, 38, '[\"student\"]', 'images/menu/sub-menu/icon/2019/08/17/add-multiple-students17-08-201918-36-48.png', 'images/menu/big-icon/2019/08/17/add-multiple-students17-08-201918-36-48.png', 1, '2019-06-27 08:26:45', '2019-08-22 22:40:36'),
(20, 'Student', NULL, '#', 1, 1, 45, '[\"student\"]', 'images/menu/sub-menu/icon/2019/08/29/student29-08-201923-06-28.png', 'images/menu/big-icon/2019/08/29/student29-08-201923-06-28.png', 1, '2019-07-03 21:27:00', '2019-08-30 03:06:28'),
(21, 'Teacher', NULL, 'teachers', 1, 2, 45, '[\"teacher\"]', 'images/menu/sub-menu/icon/2019/08/29/teacher29-08-201923-06-53.png', 'images/menu/big-icon/2019/08/29/teacher29-08-201923-06-53.png', 1, '2019-07-03 21:27:24', '2019-08-30 03:06:53'),
(22, 'Student Attendance', NULL, 'coming-soon', 1, 1, 26, '[\"attendance\"]', 'images/menu/sub-menu/icon/2019/08/17/student-attendance17-08-201918-37-31.png', 'images/menu/big-icon/2019/08/17/student-attendance17-08-201918-37-31.png', 1, '2019-07-03 21:50:48', '2019-08-22 22:00:26'),
(23, 'Receive Payment', NULL, 'search-student', 1, 1, 14, '[\"receive-student-payment\"]', 'images/menu/sub-menu/icon/2019/08/29/recieve-payment29-08-201923-08-30.png', 'images/menu/big-icon/2019/08/29/recieve-payment29-08-201923-08-30.png', 1, '2019-07-03 21:55:56', '2019-08-30 03:08:30'),
(24, 'Payment History', NULL, 'payment-history', 1, 2, 14, '[\"payment-history\"]', 'images/menu/sub-menu/icon/2019/08/29/payment-history29-08-201923-09-05.png', 'images/menu/big-icon/2019/08/29/payment-history29-08-201923-09-05.png', 1, '2019-07-03 21:57:24', '2019-08-30 03:09:05'),
(25, 'Calendar', NULL, 'calendar', 1, 3, 25, '[\"calendar\"]', 'images/menu/sub-menu/icon/2019/08/18/calendar18-08-201910-31-25.png', 'images/menu/big-icon/2019/08/18/calendar18-08-201910-31-25.png', 1, '2019-07-03 22:10:48', '2019-08-18 14:31:25'),
(26, 'Manage Events', NULL, 'events', 1, 4, 25, '[\"events\"]', 'images/menu/sub-menu/icon/2019/08/18/manage-events18-08-201910-31-35.png', 'images/menu/big-icon/2019/08/18/manage-events18-08-201910-31-35.png', 1, '2019-07-03 22:11:16', '2019-08-18 14:31:35'),
(27, 'Routine', NULL, '#', 2, 5, 25, '[\"routine\"]', 'images/menu/sub-menu/icon/2019/08/18/routine18-08-201910-31-47.png', 'images/menu/big-icon/2019/08/18/routine18-08-201910-31-47.png', 1, '2019-07-03 22:32:11', '2019-08-29 23:08:54'),
(28, 'Menu', NULL, 'menu', 1, 1, 16, '[\"menu\"]', NULL, NULL, 1, '2019-07-03 22:35:54', '2019-07-03 22:35:54'),
(29, 'ACL Roles', NULL, 'acl-role', 1, 2, 16, '[\"acl\"]', NULL, NULL, 1, '2019-07-03 22:36:13', '2019-07-03 22:36:13'),
(30, 'Primary Info', NULL, 'primary-info', 1, 3, 16, '[\"primary-info\"]', NULL, NULL, 1, '2019-07-03 22:36:30', '2019-07-03 22:36:30'),
(40, 'Manage Exam', NULL, 'exams', 1, 1, 41, '[\"exam-question\"]', 'images/menu/sub-menu/icon/2019/08/23/creative-writing23-08-201910-58-15.png', 'images/menu/big-icon/2019/08/23/creative-writing23-08-201910-58-15.png', 1, '2019-07-11 20:18:59', '2019-08-23 14:58:15'),
(41, 'Marks Single Entry', NULL, 'marks-entry/create', 1, 2, 41, '[\"marks-entry\"]', 'images/menu/sub-menu/icon/2019/08/23/792921-file-512x51223-08-201911-04-03.png', 'images/menu/big-icon/2019/08/23/792921-file-512x51223-08-201911-04-03.png', 1, '2019-07-11 20:19:21', '2019-08-23 15:04:03'),
(42, 'Generate Result', NULL, 'generate-result', 1, 4, 41, '[\"marks-entry\"]', 'images/menu/sub-menu/icon/2019/08/23/rating23-08-201911-01-33.png', 'images/menu/big-icon/2019/08/23/rating23-08-201911-01-33.png', 1, '2019-07-11 20:19:45', '2019-08-23 15:01:33'),
(43, 'View Result', NULL, 'marks-entry', 1, 5, 41, '[\"marks-entry\"]', 'images/menu/sub-menu/icon/2019/08/23/online-learning23-08-201911-09-50.png', 'images/menu/big-icon/2019/08/23/online-learning23-08-201911-09-50.png', 1, '2019-07-11 20:20:38', '2019-08-23 15:09:50'),
(44, 'My Result', NULL, 'my-result', 1, 6, 41, '[\"my-form\"]', 'images/menu/sub-menu/icon/2019/08/17/result17-08-201918-38-43.png', 'images/menu/big-icon/2019/08/17/result17-08-201918-38-43.png', 1, '2019-07-11 20:21:25', '2019-08-17 22:38:43'),
(45, 'Upload Exam Result', NULL, 'exam-result-pdf', 1, 7, 41, '[\"result-pdf-upload\"]', 'images/menu/sub-menu/icon/2019/08/23/exam23-08-201911-03-07.png', 'images/menu/big-icon/2019/08/23/exam23-08-201911-03-07.png', 1, '2019-07-11 20:21:46', '2019-08-23 15:03:07'),
(46, 'New SMS', NULL, 'single-sms', 1, 1, 23, '[\"sms\"]', 'images/menu/sub-menu/icon/2019/08/29/new-sms29-08-201923-10-53.png', 'images/menu/big-icon/2019/08/29/new-sms29-08-201923-10-53.png', 1, '2019-07-17 14:34:00', '2019-08-30 03:10:53'),
(47, 'SMS Log', NULL, 'sms-log', 1, 2, 23, '[\"sms-log\"]', 'images/menu/sub-menu/icon/2019/08/29/sms-log29-08-201923-11-10.png', 'images/menu/big-icon/2019/08/29/sms-log29-08-201923-11-10.png', 1, '2019-07-17 14:34:23', '2019-08-30 03:11:10'),
(48, 'Marks Bulk Entry', NULL, 'marks-bulk-entry', 1, 3, 41, '[\"marks-entry\"]', 'images/menu/sub-menu/icon/2019/08/23/report-4923-08-201911-07-05.png', 'images/menu/big-icon/2019/08/23/report-4923-08-201911-07-05.png', 1, '2019-08-01 13:58:13', '2019-08-23 15:07:05'),
(49, 'Branches', NULL, 'branches', 1, 4, 16, '[\"branches\"]', 'images/menu/sub-menu/icon/2019/08/01/apple-icon-144x14401-08-201918-26-29.png', 'images/menu/sub-menu/big-icon/2019/08/01/apple-icon-144x14401-08-201918-26-29.png', 1, '2019-08-01 22:26:29', '2019-08-01 22:26:29'),
(50, 'Courses', NULL, 'batches', 1, 5, 16, '[\"batches\"]', 'images/menu/sub-menu/icon/2019/08/20/apple-icon-144x14420-08-201915-44-34.png', 'images/menu/sub-menu/big-icon/2019/08/20/apple-icon-144x14420-08-201915-44-34.png', 1, '2019-08-20 19:44:34', '2019-08-20 19:44:34'),
(51, 'Admit Students', NULL, 'students/create', 1, 4, 38, '[\"admit-student\"]', 'images/menu/sub-menu/icon/2019/08/29/admit-new-student29-08-201923-01-35.png', 'images/menu/big-icon/2019/08/29/admit-new-student29-08-201923-01-35.png', 1, '2019-08-22 22:27:51', '2019-10-06 11:41:19'),
(52, 'Branches', NULL, 'branches', 1, 1, 48, '[\"branches\"]', 'images/menu/sub-menu/icon/2019/08/28/at28-08-201919-53-28.png', 'images/menu/sub-menu/big-icon/2019/08/28/at28-08-201919-53-28.png', 1, '2019-08-28 23:53:28', '2019-08-28 23:53:28'),
(53, 'Courses', NULL, 'batches', 1, 2, 48, '[\"batches\"]', 'images/menu/sub-menu/icon/2019/08/28/at28-08-201919-55-20.png', 'images/menu/sub-menu/big-icon/2019/08/28/at28-08-201919-55-20.png', 1, '2019-08-28 23:55:20', '2019-08-28 23:55:20'),
(54, 'Assign Batch', NULL, 'students-batch-assign', 1, 5, 38, '[\"students-batch-assign\"]', 'images/menu/sub-menu/icon/2019/08/29/admin-up29-08-201923-03-31.png', 'images/menu/big-icon/2019/08/29/admin-up29-08-201923-03-31.png', 1, '2019-08-29 21:47:29', '2019-08-30 03:03:31'),
(55, 'Batch Migration', NULL, 'students-batch-change', 1, 6, 38, '[\"students-batch-change\"]', 'images/menu/sub-menu/icon/2019/09/12/attendance-220-08-201917-42-4012-09-201912-39-31.png', 'images/menu/sub-menu/big-icon/2019/09/12/attendance-220-08-201917-42-4012-09-201912-39-31.png', 1, '2019-09-12 06:39:31', '2019-09-12 06:39:31');

-- --------------------------------------------------------

--
-- Table structure for table `sub_sections`
--

CREATE TABLE `sub_sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `sub_section_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_sections`
--

INSERT INTO `sub_sections` (`id`, `sub_section_name`, `section_id`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'S01', 3, 1, 1, 1, '2019-07-02 23:59:10', '2019-07-03 00:13:58');

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_menu`
--

CREATE TABLE `sub_sub_menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_bn` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `serial_num` int(10) UNSIGNED NOT NULL,
  `fk_menu_id` int(10) UNSIGNED NOT NULL,
  `fk_sub_menu_id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `big_icon` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=For Admin / Student, 2=For Applicant',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_sub_menu`
--

INSERT INTO `sub_sub_menu` (`id`, `name`, `name_bn`, `url`, `status`, `serial_num`, `fk_menu_id`, `fk_sub_menu_id`, `slug`, `icon`, `big_icon`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Booked Student', '', 'booked-student', 1, 1, 45, 20, '[\"student\"]', 'images/menu/sub-sub-menu/icon/2019/07/21/apple-icon-120x12021-07-201908-18-59.png', 'images/menu/sub-sub-menu/big-icon/2019/07/21/apple-icon-120x12021-07-201908-18-59.png', 1, '2019-07-03 21:28:04', '2019-07-21 02:18:59'),
(2, 'Registered Student', '', 'registered-student', 1, 2, 45, 20, '[\"student\"]', 'images/menu/sub-sub-menu/icon/2019/07/21/apple-icon-120x12021-07-201908-19-07.png', 'images/menu/sub-sub-menu/big-icon/2019/07/21/apple-icon-120x12021-07-201908-19-07.png', 1, '2019-07-03 21:28:31', '2019-07-21 02:19:07'),
(3, 'Enrolled Student', '', 'enrolled-student', 1, 3, 45, 20, '[\"student\"]', 'images/menu/sub-sub-menu/icon/2019/07/21/apple-icon-120x12021-07-201908-19-32.png', 'images/menu/sub-sub-menu/big-icon/2019/07/21/apple-icon-120x12021-07-201908-19-32.png', 1, '2019-07-03 21:29:14', '2019-07-21 02:19:32'),
(4, 'Manage Notice', '', 'notice-admin', 1, 1, 25, 13, '[\"notice\"]', NULL, NULL, 1, '2019-07-03 22:09:10', '2019-07-03 22:09:10'),
(5, 'View Notice', '', 'notice', 1, 2, 25, 13, '[\"notice\"]', NULL, NULL, 1, '2019-07-03 22:09:35', '2019-07-03 22:14:53'),
(6, 'View Routine', '', 'class-routine', 1, 2, 25, 27, '[\"routine\"]', NULL, NULL, 1, '2019-07-03 22:32:30', '2019-08-22 21:43:00'),
(8, 'Create Routine', '', 'class-routine/create', 1, 3, 25, 27, '[\"routine\"]', NULL, NULL, 1, '2019-07-04 22:05:24', '2019-08-22 22:45:34'),
(9, 'Student Black-List', '', 'deactivated-students', 1, 4, 45, 20, '[\"deactivated-students\"]', 'images/menu/sub-sub-menu/icon/2019/08/29/apple-icon-144x14429-08-201914-59-40.png', 'images/menu/sub-sub-menu/big-icon/2019/08/29/apple-icon-144x14429-08-201914-59-40.png', 1, '2019-08-29 18:59:40', '2019-08-29 18:59:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `mobile_no`, `adress`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Developer', NULL, '2019-09-25 18:00:00', '$2y$10$hwHEwd55x9V2uDCqQFXq0ObKcSKVUvjO/YoFMOEuFVmLJBNRijR/m', '01811951215', NULL, NULL, NULL, NULL, NULL),
(36, 'FMS', NULL, NULL, '$2y$10$nhtjGorFFI1dvHryomPY4ORq1Zv5ZMiFt/ItajOZQmAkcDmVFGWMy', '01733389000', NULL, NULL, NULL, '2019-09-30 07:05:11', '2019-09-30 07:05:11'),
(37, 'Md.Saiful Islam', NULL, NULL, '$2y$10$6Q88xhb.UH4A4burCHwQF.3uktXi/B7WYUGa5xc7uLhM/5X5G7GiW', '01687835848', NULL, NULL, NULL, '2019-09-30 07:05:11', '2019-09-30 07:05:11'),
(39, 'Md Saiful Islam', NULL, NULL, '$2y$10$cWuHFCEB/oG43dz/VwPm6eE0OZaC7v1/IeT3i.gvaJf2wOyQoKS.K', '01687835849', NULL, NULL, NULL, '2019-10-07 05:50:11', '2019-10-07 05:50:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_companies`
--
ALTER TABLE `about_companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `academic_years`
--
ALTER TABLE `academic_years`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `academic_years_academic_year_unique` (`academic_year`),
  ADD KEY `academic_years_created_by_foreign` (`created_by`),
  ADD KEY `academic_years_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `blood_groups`
--
ALTER TABLE `blood_groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blood_groups_created_by_foreign` (`created_by`),
  ADD KEY `blood_groups_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_routine`
--
ALTER TABLE `class_routine`
  ADD PRIMARY KEY (`id`),
  ADD KEY `batch_id` (`batch_id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batches`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_created_by_foreign` (`created_by`),
  ADD KEY `courses_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `curricula`
--
ALTER TABLE `curricula`
  ADD PRIMARY KEY (`id`),
  ADD KEY `curricula_created_by_foreign` (`created_by`),
  ADD KEY `curricula_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `discounts_created_by_foreign` (`created_by`),
  ADD KEY `discounts_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guardian_types`
--
ALTER TABLE `guardian_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `important_links`
--
ALTER TABLE `important_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoices_created_by_foreign` (`created_by`),
  ADD KEY `invoices_updated_by_foreign` (`updated_by`),
  ADD KEY `invoices_study_class_id_foreign` (`study_class_id`),
  ADD KEY `invoices_academic_year_id_foreign` (`academic_year_id`);

--
-- Indexes for table `invoice_categories`
--
ALTER TABLE `invoice_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice_categories_created_by_foreign` (`created_by`),
  ADD KEY `invoice_categories_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `invoice_details`
--
ALTER TABLE `invoice_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoices_invoice_category_id_foreign` (`invoice_category_id`),
  ADD KEY `invoices_created_by_foreign` (`created_by`),
  ADD KEY `invoices_updated_by_foreign` (`updated_by`),
  ADD KEY `invoices_study_class_id_foreign` (`study_class_id`),
  ADD KEY `invoices_academic_year_id_foreign` (`academic_year_id`),
  ADD KEY `invoice_id` (`invoice_id`);

--
-- Indexes for table `invoice_head_details`
--
ALTER TABLE `invoice_head_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice_details_invoice_id_foreign` (`invoice_id`),
  ADD KEY `invoice_details_head_id_foreign` (`head_id`),
  ADD KEY `invoice_details_created_by_foreign` (`created_by`),
  ADD KEY `invoice_details_updated_by_foreign` (`updated_by`),
  ADD KEY `invoice_head_details_invoice_detail_id_foreign` (`invoice_detail_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_settings`
--
ALTER TABLE `menu_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_notice_id_notice_cat_cat` (`fk_notice_cat`);

--
-- Indexes for table `notice_cat`
--
ALTER TABLE `notice_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `user_id_skip` (`user_id_skip`);

--
-- Indexes for table `notification_read`
--
ALTER TABLE `notification_read`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notification_id` (`notification_id`),
  ADD KEY `read_by` (`read_by`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_photo`
--
ALTER TABLE `page_photo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_page_photo_id_page_id` (`fk_page_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_fees`
--
ALTER TABLE `payment_fees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_fees_head_id_foreign` (`head_id`),
  ADD KEY `payment_fees_invoice_category_id_foreign` (`invoice_category_id`),
  ADD KEY `payment_fees_class_id_foreign` (`class_id`),
  ADD KEY `payment_fees_group_id_foreign` (`group_id`),
  ADD KEY `payment_fees_created_by_foreign` (`created_by`),
  ADD KEY `payment_fees_updated_by_foreign` (`updated_by`),
  ADD KEY `payment_fees_guardian_type_id_foreign` (`guardian_type_id`),
  ADD KEY `payment_fees_academic_year_id_foreign` (`academic_year_id`),
  ADD KEY `payment_fees_discount_id_foreign` (`discount_id`);

--
-- Indexes for table `payment_heads`
--
ALTER TABLE `payment_heads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_heads_invoice_category_id_foreign` (`invoice_category_id`),
  ADD KEY `payment_heads_created_by_foreign` (`created_by`),
  ADD KEY `payment_heads_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_slug_unique` (`slug`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `primary_info`
--
ALTER TABLE `primary_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `religions`
--
ALTER TABLE `religions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `religions_created_by_foreign` (`created_by`),
  ADD KEY `religions_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_index` (`role_id`),
  ADD KEY `role_user_user_id_index` (`user_id`);

--
-- Indexes for table `routine`
--
ALTER TABLE `routine`
  ADD PRIMARY KEY (`id`),
  ADD KEY `routine_user_id_index` (`user_id`),
  ADD KEY `routine_week_lecture_id_index` (`week_lecture_id`);

--
-- Indexes for table `seasons`
--
ALTER TABLE `seasons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seasons_course_id_foreign` (`course_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sections_class_id_foreign` (`class_id`),
  ADD KEY `sections_group_id_foreign` (`group_id`),
  ADD KEY `sections_created_by_foreign` (`created_by`),
  ADD KEY `sections_updated_by_foreign` (`updated_by`),
  ADD KEY `sections_shift_id_foreign` (`shift_id`);

--
-- Indexes for table `shift`
--
ALTER TABLE `shift`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_log`
--
ALTER TABLE `sms_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_submit_id`
--
ALTER TABLE `sms_submit_id`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `social_icons`
--
ALTER TABLE `social_icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id` (`student_id`),
  ADD KEY `students_user_id_foreign` (`user_id`),
  ADD KEY `students_blood_id_foreign` (`blood_id`),
  ADD KEY `students_religion_id_foreign` (`religion_id`),
  ADD KEY `students_created_by_foreign` (`created_by`),
  ADD KEY `students_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `student_attendances`
--
ALTER TABLE `student_attendances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_attendances_user_id_foreign` (`user_id`),
  ADD KEY `student_attendances_branch_id_foreign` (`branch_id`),
  ADD KEY `student_attendances_created_by_foreign` (`created_by`),
  ADD KEY `student_attendances_updated_by_foreign` (`updated_by`),
  ADD KEY `student_attendances_week_lecture_id_index` (`week_lecture_id`);

--
-- Indexes for table `student_guardians`
--
ALTER TABLE `student_guardians`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_guardians_user_id_foreign` (`user_id`),
  ADD KEY `student_guardians_created_by_foreign` (`created_by`),
  ADD KEY `student_guardians_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `study_classes`
--
ALTER TABLE `study_classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `study_classes_academic_year_id_foreign` (`academic_year_id`),
  ADD KEY `study_classes_user_id_foreign` (`user_id`),
  ADD KEY `study_classes_class_id_foreign` (`class_id`),
  ADD KEY `study_classes_section_id_foreign` (`section_id`),
  ADD KEY `study_classes_sub_section_id_foreign` (`sub_section_id`),
  ADD KEY `study_classes_group_id_foreign` (`group_id`),
  ADD KEY `study_classes_guardian_type_id_foreign` (`guardian_type_id`),
  ADD KEY `study_classes_discount_id_foreign` (`discount_id`),
  ADD KEY `study_classes_shift_id_foreign` (`shift_id`),
  ADD KEY `study_classes_curricula_id_foreign` (`curricula_id`),
  ADD KEY `study_classes_created_by_foreign` (`created_by`),
  ADD KEY `study_classes_updated_by_foreign` (`updated_by`),
  ADD KEY `id` (`id`),
  ADD KEY `study_classes_session_id_foreign` (`session_id`);

--
-- Indexes for table `study_sessions`
--
ALTER TABLE `study_sessions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `study_sessions_session_name_unique` (`session_name`),
  ADD KEY `study_sessions_created_by_foreign` (`created_by`),
  ADD KEY `study_sessions_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_menu_fk_menu_id_foreign` (`fk_menu_id`);

--
-- Indexes for table `sub_sections`
--
ALTER TABLE `sub_sections`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `sub_sections_section_id_foreign` (`section_id`),
  ADD KEY `sub_sections_created_by_foreign` (`created_by`),
  ADD KEY `sub_sections_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `sub_sub_menu`
--
ALTER TABLE `sub_sub_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_sub_menu_fk_menu_id_foreign` (`fk_menu_id`),
  ADD KEY `sub_sub_menu_fk_sub_menu_id_foreign` (`fk_sub_menu_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_companies`
--
ALTER TABLE `about_companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `academic_years`
--
ALTER TABLE `academic_years`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blood_groups`
--
ALTER TABLE `blood_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `class_routine`
--
ALTER TABLE `class_routine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `batches`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `curricula`
--
ALTER TABLE `curricula`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `guardian_types`
--
ALTER TABLE `guardian_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `important_links`
--
ALTER TABLE `important_links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `invoice_categories`
--
ALTER TABLE `invoice_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `invoice_details`
--
ALTER TABLE `invoice_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=236;

--
-- AUTO_INCREMENT for table `invoice_head_details`
--
ALTER TABLE `invoice_head_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=404;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `menu_settings`
--
ALTER TABLE `menu_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notice_cat`
--
ALTER TABLE `notice_cat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification_read`
--
ALTER TABLE `notification_read`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_photo`
--
ALTER TABLE `page_photo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_fees`
--
ALTER TABLE `payment_fees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

--
-- AUTO_INCREMENT for table `payment_heads`
--
ALTER TABLE `payment_heads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1775;

--
-- AUTO_INCREMENT for table `primary_info`
--
ALTER TABLE `primary_info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `religions`
--
ALTER TABLE `religions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4025;

--
-- AUTO_INCREMENT for table `routine`
--
ALTER TABLE `routine`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seasons`
--
ALTER TABLE `seasons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `shift`
--
ALTER TABLE `shift`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sms_log`
--
ALTER TABLE `sms_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;

--
-- AUTO_INCREMENT for table `sms_submit_id`
--
ALTER TABLE `sms_submit_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `social_icons`
--
ALTER TABLE `social_icons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `student_attendances`
--
ALTER TABLE `student_attendances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_guardians`
--
ALTER TABLE `student_guardians`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `study_classes`
--
ALTER TABLE `study_classes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `study_sessions`
--
ALTER TABLE `study_sessions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `sub_sections`
--
ALTER TABLE `sub_sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_sub_menu`
--
ALTER TABLE `sub_sub_menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `discounts`
--
ALTER TABLE `discounts`
  ADD CONSTRAINT `discounts_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `discounts_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_academic_year_id_foreign` FOREIGN KEY (`academic_year_id`) REFERENCES `academic_years` (`id`),
  ADD CONSTRAINT `invoices_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `invoices_study_class_id_foreign` FOREIGN KEY (`study_class_id`) REFERENCES `study_classes` (`id`),
  ADD CONSTRAINT `invoices_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `invoice_details`
--
ALTER TABLE `invoice_details`
  ADD CONSTRAINT `invoices_details_invoice_id_foreign` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`);

--
-- Constraints for table `invoice_head_details`
--
ALTER TABLE `invoice_head_details`
  ADD CONSTRAINT `invoice_details_head_id_foreign` FOREIGN KEY (`head_id`) REFERENCES `payment_heads` (`id`),
  ADD CONSTRAINT `invoice_details_invoice_id_foreign` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`),
  ADD CONSTRAINT `invoice_head_details_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `invoice_head_details_invoice_detail_id_foreign` FOREIGN KEY (`invoice_detail_id`) REFERENCES `invoice_details` (`id`),
  ADD CONSTRAINT `invoice_head_details_invoice_id_foreign` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`),
  ADD CONSTRAINT `invoice_head_details_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `payment_fees`
--
ALTER TABLE `payment_fees`
  ADD CONSTRAINT `payment_fees_academic_year_id_foreign` FOREIGN KEY (`academic_year_id`) REFERENCES `academic_years` (`id`),
  ADD CONSTRAINT `payment_fees_discount_id_foreign` FOREIGN KEY (`discount_id`) REFERENCES `discounts` (`id`),
  ADD CONSTRAINT `payment_fees_guardian_type_id_foreign` FOREIGN KEY (`guardian_type_id`) REFERENCES `guardian_types` (`id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_blood_id_foreign` FOREIGN KEY (`blood_id`) REFERENCES `blood_groups` (`id`),
  ADD CONSTRAINT `students_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `students_religion_id_foreign` FOREIGN KEY (`religion_id`) REFERENCES `religions` (`id`),
  ADD CONSTRAINT `students_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `student_guardians`
--
ALTER TABLE `student_guardians`
  ADD CONSTRAINT `student_guardians_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `study_classes`
--
ALTER TABLE `study_classes`
  ADD CONSTRAINT `study_classes_academic_year_id_foreign` FOREIGN KEY (`academic_year_id`) REFERENCES `academic_years` (`id`),
  ADD CONSTRAINT `study_classes_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`),
  ADD CONSTRAINT `study_classes_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `study_classes_curricula_id_foreign` FOREIGN KEY (`curricula_id`) REFERENCES `curricula` (`id`),
  ADD CONSTRAINT `study_classes_discount_id_foreign` FOREIGN KEY (`discount_id`) REFERENCES `discounts` (`id`),
  ADD CONSTRAINT `study_classes_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`),
  ADD CONSTRAINT `study_classes_guardian_type_id_foreign` FOREIGN KEY (`guardian_type_id`) REFERENCES `guardian_types` (`id`),
  ADD CONSTRAINT `study_classes_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`),
  ADD CONSTRAINT `study_classes_shift_id_foreign` FOREIGN KEY (`shift_id`) REFERENCES `shift` (`id`),
  ADD CONSTRAINT `study_classes_sub_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sub_sections` (`id`),
  ADD CONSTRAINT `study_classes_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `study_classes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `study_sessions`
--
ALTER TABLE `study_sessions`
  ADD CONSTRAINT `study_sessions_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `study_sessions_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
