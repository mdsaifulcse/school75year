-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 23, 2019 at 02:10 AM
-- Server version: 10.1.38-MariaDB-cll-lve
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leamimav_patronus`
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
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `branch_id` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `name`, `branch_id`, `address`, `details`, `created_at`, `updated_at`) VALUES
(1, 'Panthapath Branch', 81, '69/B (3rd Floor), Monwara Plaza, Panthapath Signal, Panthapath, Dhaka', '', '2019-05-16 09:23:01', NULL),
(2, 'Mouchak Branch', 83, '240, Outer Circular Road,(Above Pubali bank, Opposite Mouchak Market), Dhaka', '', '2019-05-16 09:24:22', NULL),
(3, 'Uttara Branch', 84, 'House #2, Road #12, Sector #6, Rafa Tower (Lift-6), (Uttara House building, East side of foot over bridge), Uttara, Dhaka', '', '2019-05-16 09:26:20', NULL),
(4, 'Mirpur-10 Branch', 82, 'Plot #11/1, Road #1, Block # kha, Haji Tower,(2nd floor) Opposite side of the Mosque/Graveyard of the phalpatti, Mirpur-10, Roundabout, Dhaka', '', '2019-05-16 09:30:31', NULL);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `icon_class`, `url`, `status`, `serial_num`, `slug`, `created_at`, `updated_at`) VALUES
(3, 'Student Info', 'fa fa-graduation-cap', '#', 1, 1, '[\"student\"]', '2019-03-07 08:43:28', '2019-05-22 13:06:06'),
(13, 'Payment History', 'fa fa-files-o', 'payment-history', 1, 2, '[\"payment\"]', '2019-05-21 09:50:07', '2019-05-22 13:08:37'),
(14, 'Make Payment', 'fa fa-money', 'search-student', 1, 3, '[\"payment\"]', '2019-05-21 09:51:47', '2019-05-22 13:08:56'),
(15, 'Admin', NULL, 'all-users', 1, 4, '[\"users\"]', '2019-05-22 12:32:56', '2019-05-22 12:32:56'),
(16, 'Menu', NULL, 'menu', 1, 5, '[\"menu\"]', '2019-05-22 12:33:25', '2019-05-22 12:33:25'),
(17, 'ACL Roles', NULL, 'acl-role', 1, 6, '[\"acl\"]', '2019-05-22 12:34:15', '2019-05-22 12:34:15'),
(18, 'Primary Info', 'fa fa-folder', 'primary-info', 1, 7, '[\"primary-info\"]', '2019-05-22 12:59:38', '2019-05-22 13:01:38');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 2),
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
(55, '2019_03_23_113611_create_contact_details_table', 44);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ban` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ban` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `notices` (`id`, `title`, `title_ban`, `description_ban`, `description`, `fk_notice_cat`, `show_popop`, `pdf`, `show_homepage`, `created_at`, `updated_at`) VALUES
(1, 'Business Process Analysist', 'বাংলাদেশি শিক্ষার্থীদের আইআইটি জয়', '<p>1996 সালের জুলাই মাসে ঢাকা বিশ্ববিদ্যালয়ের একটি পৃথক প্রতিষ্ঠান হিসেবে ঢাকা আসেন। নৌবাহিনীর সদরদপ্তরের নির্দেশনা অনুযায়ী, বাংলাদেশ নৌযান ও স্কুলকে অক্টোবর 1998 সালে একক শিক্ষা প্রতিষ্ঠান হিসাবে গণ্য করা হয় এবং এটি BN কলেজ ঢাকা নামে পরিচিত।<br></p>', '<p>\r\n\r\nBN College Dhaka came into being in July 1996 as a separate institution. As per directives of Naval Headquarters, Bangladesh Navy College and School were combined to be regarded as a single educational institution in October 1998 and named as BN College Dhaka.\r\n\r\n</p>', 1, 1, 'images/notice/SN_4.pdf', 0, '2019-03-04 04:29:27', '2019-04-11 02:15:26'),
(2, 'Business Process Analysist', 'ডিরেক্টর বার্তা', '<p>#</p>', '<p>\r\n\r\n</p><h2>Where does it come from?</h2><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n\r\n<br><p></p>', 1, 0, 'images/notice/Class-1-Lottery-Result-1.pdf', 1, '2019-03-04 04:36:56', '2019-03-28 02:25:15'),
(4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'বি সি আই সিকলেজ', '', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br></p>', 5, 0, 'images/notice/fig01.pdf', 1, '2019-03-04 06:01:25', '2019-04-04 02:12:16'),
(5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum কেবল মুদ্রণ এবং টাইপসটিং শিল্পের ডামি টেক্সট।', '<p>\r\n\r\n1996 সালের জুলাই মাসে ঢাকা বিশ্ববিদ্যালয়ের একটি পৃথক প্রতিষ্ঠান হিসেবে ঢাকা আসেন। নৌবাহিনীর সদরদপ্তরের নির্দেশনা অনুযায়ী, বাংলাদেশ নৌযান ও স্কুলকে অক্টোবর 1998 সালে একক শিক্ষা প্রতিষ্ঠান হিসাবে গণ্য করা হয় এবং এটি BN কলেজ ঢাকা নামে পরিচিত।\r\n\r\n<br></p>', '<p>\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n\r\n</p>', 2, 0, 'images/notice/myPdf.pdf', 1, '2019-03-05 05:59:16', '2019-04-18 06:17:19');

-- --------------------------------------------------------

--
-- Table structure for table `notice_cat`
--

CREATE TABLE `notice_cat` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_name_ban` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(7, 'primary info', 'primary-info', '', 1, '2019-02-26 10:57:09', '2019-02-26 10:57:09'),
(8, 'Users', 'users', '', 1, '2019-02-26 10:57:33', '2019-02-26 10:57:33'),
(9, 'ACL', 'acl', '', 1, '2019-02-26 10:59:25', '2019-02-26 10:59:25'),
(11, 'Menu', 'menu', '', 1, '2019-02-27 08:05:00', '2019-02-27 08:05:00'),
(23, 'payment', 'payment', '', 1, '2019-05-22 04:36:39', '2019-05-22 04:36:39'),
(24, 'student', 'student', '', 1, '2019-05-22 04:36:51', '2019-05-22 04:36:51');

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
(155, 7, 3, NULL, NULL),
(156, 8, 3, NULL, NULL),
(157, 9, 3, NULL, NULL),
(158, 11, 3, NULL, NULL),
(159, 23, 3, NULL, NULL),
(160, 24, 3, NULL, NULL),
(165, 23, 1, NULL, NULL),
(166, 24, 1, NULL, NULL),
(167, 24, 4, NULL, NULL);

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
  `mobile_no` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, 'Patronus Education', 'images/logo/logo.png', 'images/logo/logo_ban.png', '69/B (3rd Floor), Monowara Plaza,                                Panthapath Signal, Panthapath, Dhaka 1209, Bangladesh.Phone: 01701 66 55 81, 01701 66 55 88', '018', 'Patronus', '৬৭৬৫৭৬৫৭৫', 'বি এন সি সি  32 Isha Kha Avenue, Sector: 06, Uttara model town, Dhaka-1230', '<p>Bangladesh National Cadet Corps 32 Isha Kha Avenue, Sector: 06, Uttara model town, Dhaka-1230<br></p>', 'বি এন সি সি  32 Isha Kha Avenue, Sector: 06, Uttara model town, Dhaka-1230', 'info@bcic.edu.bd', 2, '1', 'images/logo/favicon.png', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3069.4631575554663!2d90.3464098882933!3d23.810510546088658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c11d7d1f4f9d%3A0x6e6633665517f8db!2sBCIC+College!5e0!3m2!1sen!2s!4v1500972819849', 'Bangladesh National Cadet Corps 32 Isha Kha Avenue, Sector: 06, Uttara model town, Dhaka-1230', '<p>\r\n\r\n</p><p></p>\r\n\r\n<p></p>\r\n\r\nBangladesh National Cadet Corps 32 Isha Kha Avenue, Sector: 06, Uttara model town, Dhaka-1230\r\n\r\n<p></p>\r\n\r\n<p><br></p><p></p>', NULL, '2019-05-22 12:36:52');

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
(1, 'admin', 'admin', 'admin', 1, NULL, NULL),
(2, 'Super Admin', 'super-admin', 'super admin', 1, NULL, NULL),
(3, 'Developer', 'developer', 'Developer', 1, NULL, NULL),
(4, 'Users', 'users', 'users', 1, NULL, NULL);

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
(30, 3, 30, NULL, NULL),
(100, 4, 100, NULL, NULL),
(101, 4, 101, NULL, NULL),
(102, 4, 102, NULL, NULL),
(104, 4, 104, NULL, NULL),
(105, 4, 105, NULL, NULL),
(106, 4, 106, NULL, NULL),
(107, 1, 107, NULL, NULL),
(108, 1, 109, NULL, NULL),
(109, 4, 110, NULL, NULL),
(110, 4, 111, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption_bn` varchar(755) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serial` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `caption`, `caption_bn`, `image`, `serial`, `created_at`, `updated_at`) VALUES
(1, 'Knowledge Discipline', 'জ্ঞান শৃঙ্খলা', 'images/slider/2019/04/27/slider-02027-04-201905-07-04.jpg', '3', '2019-02-20 01:07:18', '2019-04-26 23:07:05'),
(2, 'Grooming Good Citizen', 'ভাল নাগরিক বিবাহের', 'images/slider/2019/04/27/yep2018-sl-27-min27-04-201905-09-02.jpg', '4', '2019-02-20 03:42:49', '2019-04-26 23:09:02');

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
-- Table structure for table `student_payment`
--

CREATE TABLE `student_payment` (
  `id` int(11) NOT NULL,
  `invoice` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_date` datetime NOT NULL,
  `payment_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `transaction_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `trx_id` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student_payment`
--

INSERT INTO `student_payment` (`id`, `invoice`, `user_id`, `amount`, `payment_date`, `payment_id`, `transaction_status`, `trx_id`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'PE-82-100-1', 100, 1000, '2019-05-20 13:41:50', '6ZSKV4T1558359710351', 'Completed', '6EK4IHG6C0', 100, '2019-05-20 17:54:40', '2019-05-20 17:54:40'),
(3, 'PE-81-105-2', 105, 1000, '2019-05-22 10:18:07', 'H92Y6061558520287733', 'Completed', '6EM0J6ZREO', 105, '2019-05-22 16:03:29', '2019-05-22 16:03:29');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

CREATE TABLE `sub_menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_bn` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `serial_num` int(10) UNSIGNED NOT NULL,
  `fk_menu_id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`id`, `name`, `name_bn`, `url`, `status`, `serial_num`, `fk_menu_id`, `slug`, `created_at`, `updated_at`) VALUES
(4, 'Booked Student', '', 'booked-student', 1, 1, 3, '[\"menu\"]', '2019-05-21 07:35:43', '2019-05-21 07:35:43'),
(5, 'Registered Student', '', 'registered-student', 1, 2, 3, '[\"menu\"]', '2019-05-21 07:36:33', '2019-05-21 07:36:33'),
(6, 'Enrolled Student', '', 'enrolled-student', 1, 3, 3, '[\"menu\"]', '2019-05-21 07:38:26', '2019-05-21 07:38:26');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch` int(11) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '2',
  `code_reset_counter` int(11) NOT NULL DEFAULT '3',
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `branch`, `password`, `mobile_no`, `type`, `code_reset_counter`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(30, 'Developer', 'nmbabor@gmail.com', 1, '$2y$10$BOqfqCCbcwP38uOi3/chK.ZGrEXezlt72ZMLUZR/d2XUaoR/6CJSC', '01811951215', 1, 0, 'images/users/2019/05/22/profile22-05-201905-32-29.jpg', 'DQjQ6o6MnktXDheK05A8SkK1iYxwB515dzVf1TdnJXgejNYzacJnrihXHyLq', '2019-05-09 17:16:52', '2019-05-22 09:32:29'),
(100, 'Syed Samiun Mostafa', 'samiunmohammad@gmail.com', 4, '$2y$10$G8ujnSpDCWWvBTQAKWqoOuHd8qYXZjogUClKgOKXXbjY./bRIVF/.', '01991458376', 2, 3, 'images/users/2019/05/19/img-20190519-19065619-05-201913-08-06.JPG', 'JoKseDRt30a81X6w9MyuaRQJtsqhtaCnxfuRKZolgZvR8dQY0FXRQyzI7CB3', '2019-05-19 16:57:01', '2019-05-19 17:08:06'),
(101, 'Minhaz Sadif', NULL, 4, '$2y$10$upNKKAnkXjUkeQ85ef658.IczBliipFNBB7PnrzgecWzFUkib0vJm', '01751832337', 2, 3, NULL, 'IrmgeKN9T2GoAoYiozfBNxZW9iG4kr0hLYQ0DCTok8Fm81Og0N0tfGFEVIn7', '2019-05-20 16:26:19', '2019-05-20 16:26:19'),
(102, 'Proggo', 'dh@ld.df', 1, '$2y$10$wg7XiY/fUON4q3yEgIZeKe2RKcJcfGp3RI1/E/rIFOXTWN5L3G98a', '01822022191', 2, 3, 'images/users/2019/05/20/3f7993a20-05-201913-48-09.jpg', 'HzeGL733a4y1BfuUh5DTPInUR3YSiNNW9L2KYEIe2eRUIimKCjivzShQgHJT', '2019-05-20 17:46:19', '2019-05-20 17:48:09'),
(104, 'SI Rafil', NULL, 1, '$2y$10$P1/Or9Rr9Lu7BkDUZIQg2utqIg9eQcj915GBVs9m8DjZGptl7zORG', '01600151028', 2, 3, NULL, NULL, '2019-05-20 22:20:25', '2019-05-20 22:20:25'),
(105, 'Tasnimul Hasan', 'th.rifat13012@gmail.com', 1, '$2y$10$Nh8/zuXLXn7pTHendZ5u8.Ph1NC.kodVa7HJANt4fcuY1vC8UipMO', '01791100069', 2, 3, 'images/users/2019/05/20/img-5132-01-20-05-201918-49-11.jpeg', '5UxefexXtZnaKoBxE1zvvMNdtowG730L5Ca3o7IyjH3NJy9U3k9CjrwNItmG', '2019-05-20 22:43:37', '2019-05-20 22:49:12'),
(106, 'Sayed Faiyaz', NULL, 1, '$2y$10$GWHQuabt9yLeZ12drnSAuejwq0TJwivbzn/ynP/E0gHGMntDRXd7.', '01670167309', 2, 3, NULL, NULL, '2019-05-21 22:21:41', '2019-05-21 22:21:41'),
(107, 'Patronus Admin', 'patronus.edubd@gmail.com', NULL, '$2y$10$VhqeX6./CJHaAOb4DwteLeeqn1nvJz.iyExbogXQwWungBaknRbva', '01680049316', 1, 3, 'images/users/2019/05/22/profile22-05-201911-32-09.jpg', NULL, '2019-05-22 09:31:42', '2019-05-22 15:32:09'),
(109, 'Thrive Admin', 'thrivebd@gmail.com', NULL, '$2y$10$NrpXhCBYCLC/e4rcDoa2puMJusFa0aq4V62mFGpWeNMuc0DiUBV6m', '01711090052', 1, 3, 'images/users/2019/05/22/profile22-05-201905-37-00.jpg', NULL, '2019-05-22 09:37:00', '2019-05-22 09:37:00'),
(110, 'Soumik Singho Roy', NULL, 1, '$2y$10$XBtwkOCe1274gTcNU1UMRe9pBhy7O/Lp7QW.kJ0FrxeeOFh9BQJc.', '01794905825', 2, 1, NULL, NULL, '2019-05-22 11:10:33', '2019-05-22 16:04:42'),
(111, 'Soumik Singho Roy', NULL, 1, '$2y$10$Msz8TKcCcHySaU.djbfAJurBe.6kczmbh.spyNgyLz77o4rU7iDLi', '01870454060', 2, 2, NULL, NULL, '2019-05-22 11:21:18', '2019-05-22 12:51:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `profession` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday` date NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `guardian_name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `relationship` varchar(20) CHARACTER SET utf8 NOT NULL,
  `guardian_mobile` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `guardian_occupation` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `how_find_us` varchar(50) CHARACTER SET utf8 NOT NULL,
  `education_meduim` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `education_group` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `second_timer` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `school` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `school_gpa` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `college` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `college_gpa` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `final_step` int(1) NOT NULL DEFAULT '0',
  `payable_amount` int(11) DEFAULT NULL,
  `total_paid` int(11) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `user_id`, `profession`, `gender`, `birthday`, `address`, `guardian_name`, `relationship`, `guardian_mobile`, `guardian_occupation`, `how_find_us`, `education_meduim`, `education_group`, `second_timer`, `school`, `school_gpa`, `college`, `college_gpa`, `final_step`, `payable_amount`, `total_paid`, `created_at`, `updated_at`) VALUES
(35, 100, NULL, 'Male', '2002-01-03', 'Tayabia Society,Baizid, Chattogram', 'S.M. Salim Uddin', 'Father', '01612218639', 'Service Holder', 'Others', 'English Version', 'Science', 'No', 'Faujdarhat Cadet College', '5.00', 'Faujdarhat Cadet College', '0', 1, 12350, 1000, '2019-05-19 17:08:06', '2019-05-20 17:54:40'),
(36, 30, NULL, 'Male', '2019-05-20', 'Dhaka', 'Hossain Helal', 'Father', '01811951211', 'Business', 'Social Media', 'English Medium', NULL, 'Yes', 'NBBHS', '4.25', 'FPI', '3.56', 1, 12350, 1500, '2019-05-20 13:13:59', '2019-05-22 17:36:22'),
(37, 102, NULL, 'Female', '2019-04-29', 'Hsh', 'H', 'Father', '0855', 'Gg', 'Friends', 'Bangla Medium', 'Business Studies', 'No', 'G', '2', 'G', '5', 1, 14250, 0, '2019-05-20 17:48:09', '2019-05-20 17:48:54'),
(39, 105, NULL, 'Male', '2000-03-13', 'dhanmondi', 'Md Helal Uddin', 'Father', '01993543983', 'Lawyer', 'Others', 'Bangla Medium', 'Science', 'Yes', 'Dhaka Residential Model College', '5', 'Police lines School & College', '4.92', 1, 12350, 1000, '2019-05-20 22:49:11', '2019-05-22 16:03:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_companies`
--
ALTER TABLE `about_companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `important_links`
--
ALTER TABLE `important_links`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_icons`
--
ALTER TABLE `social_icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_payment`
--
ALTER TABLE `student_payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_student_payment_users` (`user_id`),
  ADD KEY `FK_student_payment_users_2` (`created_by`);

--
-- Indexes for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_menu_fk_menu_id_foreign` (`fk_menu_id`);

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
  ADD UNIQUE KEY `mobile_no` (`mobile_no`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_user_info_users` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_companies`
--
ALTER TABLE `about_companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `important_links`
--
ALTER TABLE `important_links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `menu_settings`
--
ALTER TABLE `menu_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notice_cat`
--
ALTER TABLE `notice_cat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `primary_info`
--
ALTER TABLE `primary_info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `social_icons`
--
ALTER TABLE `social_icons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_payment`
--
ALTER TABLE `student_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sub_sub_menu`
--
ALTER TABLE `sub_sub_menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `notices`
--
ALTER TABLE `notices`
  ADD CONSTRAINT `fk_notice_id_notice_cat_cat` FOREIGN KEY (`fk_notice_cat`) REFERENCES `notice_cat` (`id`);

--
-- Constraints for table `page_photo`
--
ALTER TABLE `page_photo`
  ADD CONSTRAINT `fk_page_photo_id_page_id` FOREIGN KEY (`fk_page_id`) REFERENCES `page` (`id`);

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `student_payment`
--
ALTER TABLE `student_payment`
  ADD CONSTRAINT `FK_student_payment_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_student_payment_users_2` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD CONSTRAINT `sub_menu_fk_menu_id_foreign` FOREIGN KEY (`fk_menu_id`) REFERENCES `menu` (`id`);

--
-- Constraints for table `sub_sub_menu`
--
ALTER TABLE `sub_sub_menu`
  ADD CONSTRAINT `sub_sub_menu_fk_menu_id_foreign` FOREIGN KEY (`fk_menu_id`) REFERENCES `menu` (`id`),
  ADD CONSTRAINT `sub_sub_menu_fk_sub_menu_id_foreign` FOREIGN KEY (`fk_sub_menu_id`) REFERENCES `sub_menu` (`id`);

--
-- Constraints for table `user_info`
--
ALTER TABLE `user_info`
  ADD CONSTRAINT `FK_user_info_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
