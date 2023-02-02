-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 02, 2023 at 08:21 AM
-- Server version: 8.0.31
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tt-flute`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Sáo Trúc', NULL, NULL, NULL),
(2, 'Sáo Dọc', NULL, NULL, NULL),
(3, 'Sáo Hmoong', NULL, NULL, NULL),
(4, 'Sáo Dizi', NULL, NULL, NULL),
(5, 'Sáo Bầu', NULL, NULL, NULL),
(6, 'Tiêu', NULL, NULL, NULL),
(7, 'Sáo Trúc', NULL, NULL, NULL),
(8, 'Sáo Dọc', NULL, NULL, NULL),
(9, 'Sáo Hmoong', NULL, NULL, NULL),
(10, 'Sáo Dizi', NULL, NULL, NULL),
(11, 'Sáo Bầu', NULL, NULL, NULL),
(12, 'Tiêu', NULL, NULL, NULL),
(13, 'Sáo Trúc', NULL, NULL, NULL),
(14, 'Sáo Dọc', NULL, NULL, NULL),
(15, 'Sáo Hmoong', NULL, NULL, NULL),
(16, 'Sáo Dizi', NULL, NULL, NULL),
(17, 'Sáo Bầu', NULL, NULL, NULL),
(18, 'Tiêu', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `address`, `email`, `phone`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Mai Xuân Cường', 'Cam Hiếu - Cam Lộ - Quảng Trị', 'cuong12@gmail.com', '0123456789', '$2y$10$KceyDv9VSJM4Out16W6wr.wdfj6.IFjiFiilNtSd/tenezzg1sy2q', NULL, NULL),
(2, 'Nguyễn Đình Phong', 'Triệu Phong - Quảng Trị', 'phongdinh@gmail.com', '0123456789', '$2y$10$.gudJ74XAqEuvUosceHHXefH46H5f9iCX3G5/6kYhu1RGBc42pkZC', NULL, NULL),
(3, 'Nguyễn Văn Nho', 'Triệu Phong', 'nhonguyengmail.com', '0123456789', '$2y$10$16FLaXs00bHPA4KGD4rx7uHo8HPnhWCmNNpxcHePVAuVKcj7Y8/lm', NULL, NULL),
(4, 'Mai Xuân Cường', 'Cam Hiếu - Cam Lộ - Quảng Trị', 'cuong12@gmail.com', '0123456789', '$2y$10$z7ojpMSd6U61AWqWWyxX6uMZkAdTeIaCGapGKaeaPlybkCt.1uRZq', NULL, NULL),
(5, 'Nguyễn Đình Phong', 'Triệu Phong - Quảng Trị', 'phongdinh@gmail.com', '0123456789', '$2y$10$wr/jS8wTFzwO74aR5sUS1O1sPHIG/ifn8AsVN4z8CUzyDCPhfEiVW', NULL, NULL),
(6, 'Nguyễn Văn Nho', 'Triệu Phong', 'nhonguyengmail.com', '0123456789', '$2y$10$YFLIRq7/1/wuBht9Jl5UCuhZ78hDtAmKMHy.D/CD3kqhJYK0f5rh.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Supper Admin', NULL, NULL, NULL),
(2, 'Quản Lý', NULL, NULL, NULL),
(3, 'Giám Đốc', NULL, NULL, NULL),
(4, 'Nhân Viên', NULL, NULL, NULL),
(5, 'Supper Admin', NULL, '2023-02-02 01:16:17', '2023-02-02 01:16:17'),
(6, 'Quản Lý', NULL, '2023-02-02 01:16:07', '2023-02-02 01:16:07'),
(7, 'Giám Đốc', NULL, '2023-02-02 01:16:04', '2023-02-02 01:16:04'),
(8, 'Nhân Viên', NULL, '2023-02-02 01:15:57', '2023-02-02 01:15:57');

-- --------------------------------------------------------

--
-- Table structure for table `group_role`
--

CREATE TABLE `group_role` (
  `id` bigint UNSIGNED NOT NULL,
  `group_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `image_products`
--

CREATE TABLE `image_products` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_products`
--

INSERT INTO `image_products` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, '1jCVdawgaYEAN8g7RCOxHH1mkA9IJcixSfQlmkNk.png', NULL, NULL),
(2, 1, '1jCVdawgaYEAN8g7RCOxHH1mkA9IJcixSfQlmkNk.png', NULL, NULL),
(3, 1, '1jCVdawgaYEAN8g7RCOxHH1mkA9IJcixSfQlmkNk.png', NULL, NULL),
(4, 1, '1jCVdawgaYEAN8g7RCOxHH1mkA9IJcixSfQlmkNk.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2023_01_31_040041_create_table_categories_table', 1),
(5, '2023_01_31_040824_create_table_products_table', 1),
(6, '2023_01_31_041305_create_table_customers_table', 1),
(7, '2023_01_31_041557_create_table_image_products_table', 1),
(8, '2023_01_31_041951_create_table_orders_table', 1),
(9, '2023_01_31_042323_create_table_order_detail_table', 1),
(10, '2023_01_31_043600_create_table_groups_table', 1),
(11, '2023_01_31_044623_create_table_users_table', 1),
(12, '2023_01_31_063535_create_table_roles_table', 1),
(13, '2023_01_31_064007_create_table_group_role_table', 1),
(14, '2023_01_31_142357_update_table_categories_table', 1),
(15, '2023_02_01_034044_update_table_products_table', 1),
(16, '2023_02_01_091439_update_table_groups_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_at` datetime NOT NULL,
  `date_ship` date NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL,
  `customer_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `total`, `date_at`, `date_ship`, `note`, `status`, `customer_id`, `created_at`, `updated_at`) VALUES
(1, '500000', '2022-12-25 00:00:00', '2022-12-27', 'giao hàng sau 17h00', 0, 1, NULL, NULL),
(2, '500000', '2022-12-25 00:00:00', '2022-12-27', 'giao hàng sau 17h00', 0, 2, NULL, NULL),
(3, '2000000', '2022-12-25 00:00:00', '2022-12-27', 'giao hàng sau 17h00', 0, 3, NULL, NULL),
(4, '500000', '2022-12-25 00:00:00', '2022-12-27', 'giao hàng sau 17h00', 0, 1, NULL, NULL),
(5, '500000', '2022-12-25 00:00:00', '2022-12-27', 'giao hàng sau 17h00', 0, 2, NULL, NULL),
(6, '2000000', '2022-12-25 00:00:00', '2022-12-27', 'giao hàng sau 17h00', 0, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `quantity` int NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `product_id`, `order_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 450000, NULL, NULL),
(2, 3, 1, 2, 450000, NULL, NULL),
(3, 4, 1, 1, 450000, NULL, NULL),
(4, 2, 1, 5, 450000, NULL, NULL),
(5, 1, 1, 2, 450000, NULL, NULL),
(6, 1, 1, 1, 450000, NULL, NULL),
(7, 3, 1, 2, 450000, NULL, NULL),
(8, 4, 1, 1, 450000, NULL, NULL),
(9, 2, 1, 5, 450000, NULL, NULL),
(10, 1, 1, 2, 450000, NULL, NULL);

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
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `quantity` int NOT NULL,
  `manufacture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `quantity`, `manufacture`, `category_id`, `description`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Sáo C5', 5000000, 99, 'Sáo Trúc Thanh Trường', 1, 'Sáo Đô  hay còn gọi là sáo C5. Đây là loại sáo có quãng âm không cao cũng không thấp. Khoảng cách giữa các lỗ khá gần nhau giúp cho người mới tập thổi sáo dễ dàng tập luyện và làm quen với cây sáo.', '8879017e44544c50d3bacac1228bc4ad.jpg', '2022-12-16 21:02:10', '2023-02-02 01:13:28', NULL),
(2, 'Sáo D5', 5000000, 126, 'Sáo Trúc Thanh Trường', 1, 'Sáo Rê cao hay còn được gọi là sáo D5 thuộc trong những dòng sáo trung cao, mang âm sắc thánh thót, thích hợp chơi được nhiều thể loại nhạc, đặc biệt là nhạc chèo, nhạc trữ tình,  quê hương, bolero tới nhạc trẻ, pop, rock hay Edm', 'https://vn-live-01.slatic.net/p/9adcf26e27973cf67a305728abaf8176.jpg', '2022-12-16 21:02:10', NULL, NULL),
(3, 'Sáo E5', 500000, 85, 'Sáo Trúc Thanh Trường', 1, 'Âm cao', 'https://vn-live-01.slatic.net/p/9adcf26e27973cf67a305728abaf8176.jpg', '2022-12-16 21:02:10', NULL, NULL),
(4, 'Sáo F4', 500000, 250, 'Sáo Trúc Thanh Trường', 1, 'Sáo F4 hay là sáo Fa Trầm có âm thanh trầm nhất trong tất cả các loại sáo, phù hợp với nhiều bản nhạc buồn, tâm trạng. Sáo Fa Trầm F4 là cây sáo có thể chơi được nhiều thể loại.', 'https://vn-live-01.slatic.net/p/9adcf26e27973cf67a305728abaf8176.jpg', '2022-12-16 21:02:10', NULL, NULL),
(5, 'Sáo G4', 500000, 300, 'Sáo Trúc Thanh Trường', 1, 'Sáo G4 hay còn gọi là Sáo Sol Trầm có âm thanh trầm ấm, phù hợp với nhiều bản nhạc buồn, tâm trạng. Có thể nói Sáo Sol Trầm G4 là cây sáo có thể chơi được nhiều thể loại. Nhất là nhạc nhạc Quê Hương trữ tình, nhạc Đỏ, nhạc Cách Mạng, nhạc Vàng…', 'https://vn-live-01.slatic.net/p/9adcf26e27973cf67a305728abaf8176.jpg', '2022-12-16 21:02:10', NULL, NULL),
(6, 'Sáo A4', 500000, 500, 'Sáo Trúc Thanh Trường', 1, 'Cây sáo A4 hay còn gọi là sáo la trầm, là sáo thông dụng chỉ đứng sau cây C5, có thể nói Sáo A4 la trầm là cây sáo có thể chơi được nhiều thể loại.', 'https://vn-live-01.slatic.net/p/9adcf26e27973cf67a305728abaf8176.jpg', '2022-12-16 21:02:10', NULL, NULL),
(7, 'Sáo Bb4', 500000, 170, 'Sáo Trúc Thanh Trường', 1, 'Âm thanh ngọt, Dễ bắt hơi, Thổi rất nhẹ', 'https://vn-live-01.slatic.net/p/9adcf26e27973cf67a305728abaf8176.jpg', '2022-12-16 21:02:10', NULL, NULL),
(8, 'Sáo B4', 500000, 130, 'Sáo Trúc Thanh Trường', 1, 'Si bình .Thường chơi nhạc trẻ', 'https://vn-live-01.slatic.net/p/9adcf26e27973cf67a305728abaf8176.jpg', '2022-12-16 21:02:10', NULL, NULL),
(9, 'Sáo C#', 500000, 450, 'Sáo Trúc Thanh Trường', 1, 'Đây là cây Sáo thường dành cho hát văn hoặc các ca khúc tác phẩm phù hợp với tone C5#', 'https://vn-live-01.slatic.net/p/9adcf26e27973cf67a305728abaf8176.jpg', '2022-12-16 21:02:10', NULL, NULL),
(10, 'Sáo F#', 500000, 230, 'Sáo Trúc Thanh Trường', 1, 'Âm trầm ấm', 'https://vn-live-01.slatic.net/p/9adcf26e27973cf67a305728abaf8176.jpg', '2022-12-16 21:02:10', NULL, NULL),
(11, 'Sáo C5', 5000000, 99, 'Sáo Trúc Thanh Trường', 1, 'Sáo Đô  hay còn gọi là sáo C5. Đây là loại sáo có quãng âm không cao cũng không thấp. Khoảng cách giữa các lỗ khá gần nhau giúp cho người mới tập thổi sáo dễ dàng tập luyện và làm quen với cây sáo.', 'https://vn-live-01.slatic.net/p/9adcf26e27973cf67a305728abaf8176.jpg', '2022-12-16 21:02:10', NULL, NULL),
(12, 'Sáo D5', 5000000, 126, 'Sáo Trúc Thanh Trường', 1, 'Sáo Rê cao hay còn được gọi là sáo D5 thuộc trong những dòng sáo trung cao, mang âm sắc thánh thót, thích hợp chơi được nhiều thể loại nhạc, đặc biệt là nhạc chèo, nhạc trữ tình,  quê hương, bolero tới nhạc trẻ, pop, rock hay Edm', 'https://vn-live-01.slatic.net/p/9adcf26e27973cf67a305728abaf8176.jpg', '2022-12-16 21:02:10', NULL, NULL),
(13, 'Sáo E5', 500000, 85, 'Sáo Trúc Thanh Trường', 1, 'Âm cao', 'https://vn-live-01.slatic.net/p/9adcf26e27973cf67a305728abaf8176.jpg', '2022-12-16 21:02:10', NULL, NULL),
(14, 'Sáo F4', 500000, 250, 'Sáo Trúc Thanh Trường', 1, 'Sáo F4 hay là sáo Fa Trầm có âm thanh trầm nhất trong tất cả các loại sáo, phù hợp với nhiều bản nhạc buồn, tâm trạng. Sáo Fa Trầm F4 là cây sáo có thể chơi được nhiều thể loại.', 'https://vn-live-01.slatic.net/p/9adcf26e27973cf67a305728abaf8176.jpg', '2022-12-16 21:02:10', NULL, NULL),
(15, 'Sáo G4', 500000, 300, 'Sáo Trúc Thanh Trường', 1, 'Sáo G4 hay còn gọi là Sáo Sol Trầm có âm thanh trầm ấm, phù hợp với nhiều bản nhạc buồn, tâm trạng. Có thể nói Sáo Sol Trầm G4 là cây sáo có thể chơi được nhiều thể loại. Nhất là nhạc nhạc Quê Hương trữ tình, nhạc Đỏ, nhạc Cách Mạng, nhạc Vàng…', 'https://vn-live-01.slatic.net/p/9adcf26e27973cf67a305728abaf8176.jpg', '2022-12-16 21:02:10', NULL, NULL),
(16, 'Sáo A4', 500000, 500, 'Sáo Trúc Thanh Trường', 1, 'Cây sáo A4 hay còn gọi là sáo la trầm, là sáo thông dụng chỉ đứng sau cây C5, có thể nói Sáo A4 la trầm là cây sáo có thể chơi được nhiều thể loại.', 'https://vn-live-01.slatic.net/p/9adcf26e27973cf67a305728abaf8176.jpg', '2022-12-16 21:02:10', NULL, NULL),
(17, 'Sáo Bb4', 500000, 170, 'Sáo Trúc Thanh Trường', 1, 'Âm thanh ngọt, Dễ bắt hơi, Thổi rất nhẹ', 'https://vn-live-01.slatic.net/p/9adcf26e27973cf67a305728abaf8176.jpg', '2022-12-16 21:02:10', NULL, NULL),
(18, 'Sáo B4', 500000, 130, 'Sáo Trúc Thanh Trường', 1, 'Si bình .Thường chơi nhạc trẻ', 'https://vn-live-01.slatic.net/p/9adcf26e27973cf67a305728abaf8176.jpg', '2022-12-16 21:02:10', NULL, NULL),
(19, 'Sáo C#', 500000, 450, 'Sáo Trúc Thanh Trường', 1, 'Đây là cây Sáo thường dành cho hát văn hoặc các ca khúc tác phẩm phù hợp với tone C5#', 'https://vn-live-01.slatic.net/p/9adcf26e27973cf67a305728abaf8176.jpg', '2022-12-16 21:02:10', NULL, NULL),
(20, 'Sáo F#', 500000, 230, 'Sáo Trúc Thanh Trường', 1, 'Âm trầm ấm', 'https://vn-live-01.slatic.net/p/9adcf26e27973cf67a305728abaf8176.jpg', '2022-12-16 21:02:10', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `address`, `phone`, `image`, `gender`, `group_id`, `created_at`, `updated_at`) VALUES
(1, 'Trần Văn Trường', 'truong@gmail.com', '$2y$10$/JcepoheiveqXNJFpIUKO.sgj2BEZgw/Vh5qgtzLzhmNJCbL.RJoK', 'Quảng Trị', '0343689757', 'truong.png', 'Nam', 1, '2023-02-02 01:10:13', '2023-02-02 01:10:13'),
(2, 'Trần Văn Trường', 'truong@gmail.com', '$2y$10$JEJbmT2Fb80oHVLdXIKmIutNFKe2QKyorse7KSMQB.qGGYFnkFlCO', 'Quảng Trị', '0343689757', 'truong.png', 'Nam', 1, '2023-02-02 01:11:52', '2023-02-02 01:11:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_role`
--
ALTER TABLE `group_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_role_group_id_foreign` (`group_id`),
  ADD KEY `group_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `image_products`
--
ALTER TABLE `image_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_products_product_id_foreign` (`product_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_detail_product_id_foreign` (`product_id`),
  ADD KEY `order_detail_order_id_foreign` (`order_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_group_id_foreign` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `group_role`
--
ALTER TABLE `group_role`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image_products`
--
ALTER TABLE `image_products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `group_role`
--
ALTER TABLE `group_role`
  ADD CONSTRAINT `group_role_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`),
  ADD CONSTRAINT `group_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `image_products`
--
ALTER TABLE `image_products`
  ADD CONSTRAINT `image_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_detail_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
