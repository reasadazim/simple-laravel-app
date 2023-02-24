-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2023 at 07:44 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_9`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agent_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `working_area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commission` bigint(20) NOT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agent_license` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `agent_code`, `agent_name`, `working_area`, `commission`, `phone_no`, `country`, `agent_photo`, `agent_license`, `created_at`, `updated_at`) VALUES
(1, 'Voluptatem ut eius l', 'Oleg Moore', 'Ipsum eos deleniti', 2, '+1 (479) 122-7745', 'Switzerland', 'files/DdRTaZFYClXh4BglZj9Jcuht52YMPtnj3NAnGJPs.jpg', 'files/5BQcF5cgamN9lSewRQHxyMOa4u23KFrJBL8IR1ws.pdf', '2023-02-24 06:23:28', '2023-02-24 06:24:09'),
(2, 'Dolore earum eaque p', 'India Mcknight', 'Atque rem fugit vol', 92, '+1 (807) 143-3237', 'Kiribati', 'files/RH6XExP7gcDJ79iAxIydK0jf3VAZcP3EnosEyAtU.jpg', 'files/HLllHMluMlgtfK0Aw8Ec4Ousfqqfg6GwhGidSvXx.pdf', '2023-02-24 06:26:33', '2023-02-24 06:26:33'),
(3, 'Est commodi qui sint', 'Noel Oneal', 'Enim repellendus En', 38, '+1 (954) 703-1394', 'Somalia', 'files/x9R3BZRlg14i1JFUfcuoHtq2z700MRC3Ph5bUIZN.jpg', 'files/wVnbdMaVr4H2EB0SlwvVg9kGYHmGX1JAUaDDDGHX.pdf', '2023-02-24 06:26:46', '2023-02-24 06:26:46'),
(4, 'Fuga Quia neque dol', 'Candice Medina', 'Dolor ad quisquam qu', 17, '+1 (649) 864-7312', 'Chad', 'files/wj95i1H2ge7TpwDcjpUhrZIim2FPtv5LUbU5gWXS.jpg', 'files/1WI7c4YtTlVftWn0rZs3NgdCh9EiPi4qmyEfIVt2.pdf', '2023-02-24 06:27:05', '2023-02-24 06:27:05'),
(5, 'Minim facilis est r', 'Wing Bass', 'Autem velit hic est', 1, '+1 (948) 437-5625', 'Uganda', 'files/cdGFn5q4X8RALlRSL1VCAT14B2osUGA5hv2HCfpg.jpg', 'files/ldOTswVORGHSGcKzHZ8jWiJ9SwZl0Fc6r27x9cZN.pdf', '2023-02-24 06:27:16', '2023-02-24 06:27:16'),
(6, 'Ea ex sed ad sequi q', 'Moses Daniels', 'Aute veniam quisqua', 27, '+1 (295) 166-6328', 'Panama', 'files/TSVlVMy8I3KKUZEdPBxezJzB6qNqIZ1QC5IBdtvf.jpg', 'files/p5VKC3tWLJ98Jy4kLrvCDwEXhIlQ84XpfkjTQKco.pdf', '2023-02-24 06:27:31', '2023-02-24 06:27:31');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cust_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `working_area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade` bigint(20) NOT NULL,
  `opening_amt` decimal(8,2) NOT NULL,
  `receive_amt` decimal(8,2) NOT NULL,
  `payment_amt` decimal(8,2) NOT NULL,
  `outstanding_amt` decimal(8,2) NOT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agent_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `cust_code`, `cust_name`, `cust_city`, `working_area`, `cust_country`, `grade`, `opening_amt`, `receive_amt`, `payment_amt`, `outstanding_amt`, `phone_no`, `cust_photo`, `agent_id`, `created_at`, `updated_at`) VALUES
(1, 'Recusandae Commodo', 'Leila Williamson', 'Nam in et exercitati', 'Iure molestiae volup', 'Cayman Islands', 31, '11.00', '62.00', '86.00', '14.00', '+1 (283) 305-6257', 'files/RfuiGxiQLJE6vOnTCf1lx89jZj8zTsSDQwdx9QJV.jpg', 3, '2023-02-24 06:28:13', '2023-02-24 06:28:13'),
(2, 'Soluta quod velit vo', 'Lars Myers', 'Atque ea reprehender', 'Molestiae nostrud vo', 'Palau', 64, '38.00', '52.00', '25.00', '43.00', '+1 (377) 138-8813', 'files/rOsxRxIkrHT180nKgjTpv1aUsoTvnLFehsT1lldj.jpg', 2, '2023-02-24 06:28:38', '2023-02-24 06:28:38'),
(3, 'Est non quam conseq', 'Natalie Bowman', 'Dolore voluptas omni', 'Ut recusandae Quia', 'New Caledonia', 7, '24.00', '41.00', '91.00', '4.00', '+1 (771) 802-9513', 'files/VCur6pn8IQRNa7gRnE14AY3acvFQffcMhcMTytvH.jpg', 2, '2023-02-24 06:28:51', '2023-02-24 12:38:30'),
(4, 'Iste cum aliquam ips', 'Oren Clayton', 'Quae earum repudiand', 'Culpa consequatur Q', 'Trinidad and Tobago', 83, '74.00', '51.00', '65.00', '58.00', '+1 (625) 264-5207', 'files/fazY42azEUqs5oPA06Ug6tyNUfwHmomNjfRXmNfh.jpg', 5, '2023-02-24 06:29:03', '2023-02-24 06:29:03'),
(5, 'Est enim enim offic', 'Damon Guzman', 'Dolor mollit et cupi', 'Sequi officia ad mod', 'Bhutan', 95, '65.00', '20.00', '46.00', '63.00', '+1 (468) 785-6203', 'files/uoiGHheY69HXsaHl4Vz2vuk6Ne2vSqAWwXt3tbtC.jpg', 3, '2023-02-24 06:29:15', '2023-02-24 12:38:15'),
(6, 'Facilis non velit in', 'Mikayla Morrow', 'Dolorem illum molli', 'Quis incididunt est', 'Holy See (Vatican City State)', 52, '96.00', '33.00', '5.00', '92.00', '+1 (756) 974-6683', 'files/BKdIP6P9hfLir9hyAgUn1HIdVmRNr5wSYiMYjmt3.jpg', 3, '2023-02-24 06:29:23', '2023-02-24 06:29:23'),
(7, 'Iure ut consequat L', 'Wing Gentry', 'Ut ut obcaecati qui', 'Qui consequatur Mol', 'Bahrain', 40, '40.00', '54.00', '13.00', '91.00', '+1 (325) 369-2926', 'files/oQA7V4rketfHQ718SOzqy6X5j2dzuKmLiTzlVBZB.jpg', 1, '2023-02-24 06:29:32', '2023-02-24 06:29:32'),
(8, 'Qui obcaecati occaec', 'Claire Kelley', 'Temporibus impedit', 'Id dolor aliquid nul', 'Belgium', 51, '25.00', '100.00', '81.00', '5.00', '+1 (858) 747-6761', 'files/j9ksZXgsBMhbLFSXJa92lFSskraozayjuEKeY4IX.jpg', 2, '2023-02-24 06:29:42', '2023-02-24 06:29:42');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_23_162652_create_agents_table', 1),
(6, '2023_02_23_163745_create_customers_table', 1),
(7, '2023_02_23_164405_create_orders_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ord_num` bigint(20) NOT NULL,
  `ord_amount` decimal(8,2) NOT NULL,
  `advance_amount` decimal(8,2) NOT NULL,
  `ord_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `ord_num`, `ord_amount`, `advance_amount`, `ord_description`, `customer_id`, `created_at`, `updated_at`) VALUES
(1, 8, '64.78', '69.00', 'Eu blanditiis nostru', 8, '2023-02-24 12:35:11', '2023-02-24 12:37:27'),
(2, 3, '25.00', '55.00', 'Neque omnis pariatur', 4, '2023-02-24 12:35:17', '2023-02-24 12:36:25'),
(3, 72, '88.00', '13.00', 'Earum autem dolor ma', 7, '2023-02-24 12:35:22', '2023-02-24 12:35:22'),
(4, 30, '10.00', '12.00', 'Ut optio natus eaqu', 1, '2023-02-24 12:35:32', '2023-02-24 12:35:32'),
(5, 46, '60.00', '38.00', 'Repudiandae est Nam', 7, '2023-02-24 12:35:37', '2023-02-24 12:35:37'),
(6, 39, '98.00', '1.00', 'Dolor et impedit en', 6, '2023-02-24 12:35:40', '2023-02-24 12:35:40'),
(7, 47, '87.00', '9.00', 'Consequatur qui fugi', 5, '2023-02-24 12:35:44', '2023-02-24 12:35:44'),
(8, 45, '16.19', '82.00', 'Quas esse expedita', 6, '2023-02-24 12:35:50', '2023-02-24 12:37:39'),
(9, 16, '17.00', '74.00', 'Laboriosam id sed', 1, '2023-02-24 12:36:03', '2023-02-24 12:36:03'),
(10, 50, '88.00', '85.00', 'Optio ut dolor aut', 8, '2023-02-24 12:36:12', '2023-02-24 12:36:12');

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@xyz.com', NULL, '$2y$10$hkgzHzLT.HvlZuFwMaAxb.MvFrc1yAJDbZM2sXBIRgfH8OB1fznuW', NULL, '2023-02-24 12:34:58', '2023-02-24 12:44:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `agents_agent_code_unique` (`agent_code`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_cust_code_unique` (`cust_code`),
  ADD KEY `customers_agent_id_foreign` (`agent_id`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_ord_num_unique` (`ord_num`),
  ADD KEY `orders_customer_id_foreign` (`customer_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
