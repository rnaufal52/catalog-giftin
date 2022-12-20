-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Des 2022 pada 15.21
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `giftin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `auth_activation_attempts`
--

INSERT INTO `auth_activation_attempts` (`id`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:107.0) Gecko/20100101 Firefox/107.0', 'd2e505a4a528888b2752ee6e2f2f7938', '2022-12-08 07:34:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'rnaufal52', NULL, '2022-12-08 07:34:25', 0),
(2, '::1', 'r.naufal2911@gmail.com', 1, '2022-12-08 07:34:34', 1),
(3, '::1', 'r.naufal2911@gmail.com', 1, '2022-12-08 09:25:40', 1),
(4, '::1', 'r.naufal2911@gmail.com', 1, '2022-12-08 09:26:15', 1),
(5, '::1', 'rnaufal52', NULL, '2022-12-08 09:28:23', 0),
(6, '::1', 'r.naufal2911@gmail.com', 1, '2022-12-08 09:28:30', 1),
(7, '::1', 'r.naufal2911@gmail.com', 1, '2022-12-08 09:29:29', 1),
(8, '::1', 'rnaufal52', NULL, '2022-12-08 09:30:40', 0),
(9, '::1', 'r.naufal2911@gmail.com', 1, '2022-12-08 09:30:48', 1),
(10, '::1', 'r.naufal2911@gmail.com', 1, '2022-12-09 02:03:42', 1),
(11, '::1', 'r.naufal2911@gmail.com', 1, '2022-12-10 01:54:00', 1),
(12, '::1', 'r.naufal2911@gmail.com', 1, '2022-12-11 02:50:23', 1),
(13, '::1', 'rnaufal', NULL, '2022-12-13 23:16:44', 0),
(14, '::1', 'rnaufal', NULL, '2022-12-13 23:16:57', 0),
(15, '::1', 'r.naufal2911@gmail.com', 1, '2022-12-13 23:17:13', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner`
--

CREATE TABLE `banner` (
  `banner_id` bigint(20) NOT NULL,
  `banner_name` varchar(90) NOT NULL,
  `banner_image` varchar(190) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `category_id` bigint(20) NOT NULL,
  `category_name` varchar(90) NOT NULL,
  `category_image` varchar(190) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_image`) VALUES
(1, 'Akrilik', 'image.jpg'),
(2, 'Glass dome', 'image.jpg'),
(3, 'Frame', 'image.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `color`
--

CREATE TABLE `color` (
  `color_id` bigint(20) NOT NULL,
  `color_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `color`
--

INSERT INTO `color` (`color_id`, `color_name`) VALUES
(1, 'Biru'),
(2, 'Putih'),
(3, 'Pink');

-- --------------------------------------------------------

--
-- Struktur dari tabel `diskon`
--

CREATE TABLE `diskon` (
  `Diskon_id` bigint(20) NOT NULL,
  `Diskon_Tanggal` varchar(10) NOT NULL,
  `Diskon_Image` varchar(190) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `diskon`
--

INSERT INTO `diskon` (`Diskon_id`, `Diskon_Tanggal`, `Diskon_Image`) VALUES
(1, '01-01', 'Januari.png'),
(2, '02-02', 'Februari.png'),
(3, '03-03', 'Maret.png'),
(4, '04-04', 'April.png'),
(5, '05-05', 'Mei.png'),
(6, '06-06', 'Juni.png'),
(7, '07-07', 'Juli.png'),
(8, '08-08', 'Agustus.png'),
(9, '09-09', 'September.png'),
(10, '10-10', 'Oktober.png'),
(11, '11-11', 'November.png'),
(12, '12-12', 'Desember.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `faq`
--

CREATE TABLE `faq` (
  `faq_id` bigint(20) NOT NULL,
  `faq_questions` text NOT NULL,
  `faq_answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `faq`
--

INSERT INTO `faq` (`faq_id`, `faq_questions`, `faq_answer`) VALUES
(1, 'Apakah Dried Flowers Bisa Layu ?', 'Karena sudah kering maka dried flowers tidak bisa layu lagi, namun karena bunga yang digunakan adalah bunga alami jadi akan tetap rontoh dan warna nya akan memudar seiring berjalannya waktu.'),
(2, 'Bagaimana cara merawat dried flowers?', 'Bunga kering tidak perlu di siram, cukup hindari tempat gelap dan sinar matahari langsung.'),
(3, 'Dried Flower tahan berapa lama?', 'Dried Flower umum nya tahan hitungan bulan, tetapi bisa bertahan sampe ber tahun tahun jika kondisi tempat penyimpanan nya baik.'),
(4, 'Estimasi pengerjaan nya berapa lama?', 'Untuk pengerjaan nya sekitar 1-2 hari tergantung dari pesanan pada hari itu, bisa lebih cepat atau bisa lebih lama.'),
(5, 'Apakah bisa dikirim ke luar kota, dan apakah aman?', 'Pengiriman keluar kota bisa melalui shopee, dan tiap pengiriman produk kami menambahkan bubble warp yang tetap serta memberikan stiker frigel agar tidak terkena bantingan yang keras sehingga produk aman jika di kirim ke luar kota.'),
(6, 'Apa yang akan didapatkan tiap pembelian produk?', 'Setiap pembelian produk akan mendapat kan produk yang dipesan, stiker 2 pcs, ganci nama, thanks card, dan packaging.'),
(7, 'Untuk illustrasi bisa diganti dengan ditempel foto gak?', 'Illustrasi tidak bisa diganti dengan foto ya'),
(8, 'Bisa jadi reseller gak, tapi pesanan nya tanpa tulisan di akrilik nya?', 'Bisa ya, tapi dengan minimal pembelian 20 pcs.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1670506015, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `product_id` bigint(20) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `product_description` text NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `product_image` varchar(190) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_description`, `category_id`, `product_image`) VALUES
(8, 'Memorie Roundie', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 1, 'image.jpg'),
(9, 'Memorie Cupola', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 1, 'image.jpg'),
(10, 'Memorie Woodie', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 1, 'image.jpg'),
(11, 'Rosie Roundie', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 2, 'image.jpg'),
(12, 'Rosie Cupola', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 2, 'image.jpg'),
(13, 'Pamka', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 3, 'image.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `setting_id` bigint(20) NOT NULL,
  `setting_tagline` varchar(190) NOT NULL,
  `setting_deskripsi` text NOT NULL,
  `setting_alamat` text NOT NULL,
  `setting_alamat_url` varchar(512) NOT NULL,
  `setting_alamat_image` varchar(190) NOT NULL,
  `setting_wa` varchar(20) NOT NULL,
  `setting_wa_url` varchar(256) NOT NULL,
  `setting_instagram` varchar(20) NOT NULL,
  `setting_instagram_url` varchar(256) NOT NULL,
  `setting_tiktok` varchar(20) NOT NULL,
  `setting_tiktok_url` varchar(256) NOT NULL,
  `setting_logo` varchar(190) NOT NULL,
  `setting_email` varchar(50) NOT NULL,
  `setting_email_url` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `setting`
--

INSERT INTO `setting` (`setting_id`, `setting_tagline`, `setting_deskripsi`, `setting_alamat`, `setting_alamat_url`, `setting_alamat_image`, `setting_wa`, `setting_wa_url`, `setting_instagram`, `setting_instagram_url`, `setting_tiktok`, `setting_tiktok_url`, `setting_logo`, `setting_email`, `setting_email_url`) VALUES
(1, 'We made especially for you', 'Gift in hadir sebagai penyedia produk/hadiah yang unik serta instagrammable dengan harga yang terjangkau. Selain itu, Gift in juga menggunakan packaging yang menarik sehingga memberi kesan tersendiri saat membuka.', 'Merpati V Rawa Makmur Kota Bengkulu, Bengkulu, Indonesia', 'https://goo.gl/maps/WZfQscvSi6Uhs39r7', 'maps.png', '+62 8137 3505 542', 'https://api.whatsapp.com/send/?phone=6281373505542&text=Hallo+kak%2C+saya+mau+pesan&type=phone_number&app_absent=0', '@gift.in_id', 'https://www.instagram.com/gift.in_id/', '@gift.in', 'https://www.tiktok.com/@gift.in?_t=8X6RlT0aSw6&_r=1', 'StikerLogo.png', 'maps.png', 'mailto:/gift.in115@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` bigint(20) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_token` varchar(256) NOT NULL,
  `user_password` varchar(256) NOT NULL,
  `user_repassword` varchar(256) NOT NULL,
  `user_image` varchar(190) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'Pdefault.svg',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'r.naufal2911@gmail.com', 'rnaufal', NULL, 'Pdefault.svg', '$2y$10$zctq46D3Paq8vT/WoyuAmuVBwPHd9s9KelBACOqaj0YAkRc4cAci.', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-12-08 07:33:07', '2022-12-08 07:34:13', NULL),
(2, 'gift.in115@gmail.com', 'giftin', NULL, 'Pdefault.svg', '$2y$10$TQpBG0BpQ1BsqTJieDfCxekaCpzLLAWwMz.U5QGi3QC0tTKPWeiYC', NULL, NULL, NULL, '17487f524c1219e4d364d3f294196861', NULL, NULL, 0, 0, '2022-12-13 23:15:36', '2022-12-13 23:15:36', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `variant`
--

CREATE TABLE `variant` (
  `variant_id` bigint(20) NOT NULL,
  `id_product` bigint(20) NOT NULL,
  `variant_size` varchar(50) NOT NULL,
  `variant_price` varchar(10) NOT NULL,
  `variant_discount` varchar(10) NOT NULL,
  `variant_image` varchar(190) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `variant`
--

INSERT INTO `variant` (`variant_id`, `id_product`, `variant_size`, `variant_price`, `variant_discount`, `variant_image`) VALUES
(1, 8, '15 cm', 'Rp. 45.000', 'Rp. 4.500', 'memorie roundie 15 cm.jpeg'),
(2, 8, '18 cm', 'Rp. 65.000', 'Rp. 6.500', 'memori roundie 18 cm_1.jpeg'),
(3, 8, '20 cm', 'Rp. 74.000', 'Rp. 7.400', 'memori roundie 18 cm.jpeg'),
(4, 8, 'LED - 15 Cm', 'Rp. 70.000', 'Rp. 7.000', 'memori roundie 15 cm led.jpeg'),
(5, 8, 'LED - 18 Cm', 'Rp. 82.000', 'Rp. 8.200', 'memori roundie 18 cm led_1.jpeg'),
(6, 8, 'LED - 20 Cm', 'Rp. 9.200', 'Rp. 9.200', 'memori roundie 18 cm led.jpeg'),
(7, 9, '11 x 15 cm', 'Rp. 45.000', 'Rp. 4.500', 'Memori cupola 11x15 cm_1.jpeg'),
(8, 9, '15 x 21 cm', 'Rp. 65.000', 'Rp. 6.500', 'memori cupola 15x21_1.jpeg'),
(9, 9, '21 x 29 cm', 'Rp. 79.000', 'Rp. 7.900', 'memori cupola 15x21.jpeg'),
(10, 9, 'LED - 11 x 15 cm', 'Rp. 70.000', 'Rp. 7.000', 'memori cupola 11x15 cm led.jpeg'),
(11, 9, 'LED - 15 x 21 cm', 'Rp. 82.000', 'Rp. 8.200', 'memori cupola 15x21 led_1.jpeg'),
(12, 9, 'LED -  21 x 29 cm', 'Rp. 92.000', 'Rp. 9.200', 'memori cupola 15x21 led.jpeg'),
(13, 10, '18 cm', 'Rp. 94.000', 'Rp. 9.400', 'memori woodie_1.jpeg'),
(14, 10, '20 cm', 'Rp. 115.00', 'Rp. 11.500', 'memori woodie.jpeg'),
(17, 11, '10 cm', 'Rp. 160.00', 'Rp. 16.000', 'Rosie Roundie_1.jpeg'),
(18, 11, '15 cm', 'Rp. 210.00', 'Rp. 21.000', 'Rosie Roundie.jpeg'),
(19, 12, '9 x 15 cm', 'Rp. 168.00', 'Rp. 16.800', 'Rosie Cupola 9 x15_1.jpeg'),
(20, 12, '10 x 20 cm', 'Rp. 224.00', 'Rp. 22.400', 'Rosie Cupola 9 x15.jpeg'),
(21, 13, '13 x 18 cm', 'Rp. 78.000', 'Rp. 7.800', 'Pamka.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeks untuk tabel `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`color_id`);

--
-- Indeks untuk tabel `diskon`
--
ALTER TABLE `diskon`
  ADD PRIMARY KEY (`Diskon_id`);

--
-- Indeks untuk tabel `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indeks untuk tabel `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`setting_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `variant`
--
ALTER TABLE `variant`
  ADD PRIMARY KEY (`variant_id`),
  ADD KEY `id_product` (`id_product`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `category_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `color`
--
ALTER TABLE `color`
  MODIFY `color_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `diskon`
--
ALTER TABLE `diskon`
  MODIFY `Diskon_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `faq`
--
ALTER TABLE `faq`
  MODIFY `faq_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `product_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `setting`
--
ALTER TABLE `setting`
  MODIFY `setting_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `variant`
--
ALTER TABLE `variant`
  MODIFY `variant_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `variant`
--
ALTER TABLE `variant`
  ADD CONSTRAINT `variant_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
