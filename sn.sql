-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 02, 2018 lúc 03:17 PM
-- Phiên bản máy phục vụ: 10.1.34-MariaDB
-- Phiên bản PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `sn`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `des` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `images`
--

INSERT INTO `images` (`id`, `title`, `des`, `url`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Giao diện Admin', 'Giao diện setting trong Admin Cpanel', 'uploads/781065022-Screenshot (3).png', 1, '2018-09-02 00:28:22', '2018-09-02 06:01:28'),
(2, 'Reg Acc', 'Chat with supporter', 'uploads/984830059-Screenshot (14).png', 1, '2018-09-02 00:30:07', '2018-09-02 06:00:30'),
(3, 'Test Code HTML', 'Code HTML nghịch', 'uploads/360686211-Screenshot (13).png', 1, '2018-09-02 00:53:18', '2018-09-02 05:59:46'),
(4, 'Sublime Text 3', 'IDE', 'uploads/158337759-Screenshot (22).png', 1, '2018-09-02 00:53:28', '2018-09-02 05:59:17'),
(5, 'Desktop', 'My desktop', 'uploads/337646042-Screenshot (32).png', 1, '2018-09-02 00:55:08', '2018-09-02 05:46:15'),
(6, 'PayPal mất tiền oan', 'Mất 1m oan :(', 'uploads/496046828-Screenshot (9).png', 1, '2018-09-02 00:55:16', '2018-09-02 05:45:47'),
(7, 'LMHT', 'Cáng team :3', 'uploads/288131778-Screenshot (7).png', 1, '2018-09-02 00:55:31', '2018-09-02 05:45:20'),
(8, 'Bông hồng đỏ', 'Bông hoa hồng đỏ trong lọ thủy tinh', 'uploads/353746595-hinh-nen-hoa-hong-cho-dien-thoai (2).jpg', 1, '2018-09-02 00:56:32', '2018-09-02 05:44:55'),
(9, 'Cánh hoa hồng', 'Hình ảnh cánh hoa hồng đẹp', 'uploads/365277251-hinh-nen-hoa-hong-cho-dien-thoai (3).jpg', 1, '2018-09-02 00:57:01', '2018-09-02 05:44:30'),
(10, 'Bó hoa hồng', 'Hình nền bó hoa hồng đẹp', 'uploads/337384590-hinh-nen-hoa-hong-cho-dien-thoai (8).jpg', 1, '2018-09-02 00:57:08', '2018-09-02 05:44:07'),
(11, 'Cây hoa hồng', 'Hình cây hoa hồng đẹp', 'uploads/288484099-hinh-nen-hoa-hong-cho-dien-thoai (10).jpg', 1, '2018-09-02 00:57:14', '2018-09-02 05:43:39'),
(12, 'Hoa hồng', 'Hình nền hoa hồng cho điện thoại', 'uploads/143292996-hinh-nen-hoa-hong-cho-dien-thoai (14).jpg', 1, '2018-09-02 00:57:54', '2018-09-02 05:43:14'),
(13, 'Hoa hồng trắng', 'Ảnh nền hoa hồng trắng cho điện thoại', 'uploads/250584527-hinh-nen-hoa-hong-cho-dien-thoai (17).jpg', 1, '2018-09-02 00:57:59', '2018-09-02 05:42:03'),
(14, 'Hoa hồng đỏ', 'Ảnh nền hoa hồng đỏ cho điện thoại', 'uploads/562758410-hinh-nen-hoa-hong-cho-dien-thoai (24).jpg', 1, '2018-09-02 00:58:05', '2018-09-02 05:41:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_08_28_143809_create_images_table', 1),
(4, '2018_08_29_141321_add_level_to_users_table', 1),
(5, '2018_08_31_144903_add_url_to_images_table', 1),
(6, '2018_09_01_131351_add_avatar_to_users_table', 1),
(7, '2018_09_01_144625_create_settings_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'title', 'Album Ảnh', NULL, NULL),
(2, 'favicon', 'uploads/img/703136710-favicon.ico', NULL, NULL),
(3, 'des', 'Nơi lưu trữ những bức ảnh đẹp, những bức hình đáng nhớ.', NULL, NULL),
(4, 'header_code', '<h1><a href=\"/\"><strong>AntKing1109</strong></a></h1>', NULL, NULL),
(5, 'copyright', '&copy; Unttled. Design: <a href=\"fb.com/truongvp97\">AntKing</a>.', NULL, NULL),
(6, 'twitter', 'https://twitter.com/truongngt', NULL, NULL),
(7, 'facebook', 'fb.com/truongvp97', NULL, NULL),
(8, 'instagram', 'https://www.instagram.com/truongotaku/', NULL, NULL),
(9, 'github', 'https://github.com/antking1109', NULL, NULL),
(10, 'linkedin', 'https://www.linkedin.com/in/antking1109/', NULL, NULL),
(11, 'mail', 'congtruongvp97@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL DEFAULT '0',
  `avatar` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `level`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'AntKing', 'antking1109@gmail.com', '$2y$10$artdTlpNMHwinBLQiFfD9uDL6sHIJOJmbRqU4sZx227bQA6JsfDde', 1, 'uploads/avt/794540907-Ed_Avatar_CB_128x128.png', 'TrBGIiAyQpTwlOX1OkkZsrKfzQIV5Zgs4Upcimfm4OWc4OBrwIKNILlRuGJp', '2018-09-01 07:59:29', '2018-09-01 07:59:29');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
