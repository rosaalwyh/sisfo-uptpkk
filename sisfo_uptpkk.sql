-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Nov 2021 pada 14.34
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisfo_uptpkk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `announcements`
--

CREATE TABLE `announcements` (
  `pengumuman_id` bigint(20) UNSIGNED NOT NULL,
  `pengumuman_judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengumuman_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengumuman_konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengumuman_sampul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengumuman_author` bigint(20) UNSIGNED NOT NULL,
  `pengumuman_kategori` bigint(20) UNSIGNED NOT NULL,
  `pengumuman_status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `announcements`
--

INSERT INTO `announcements` (`pengumuman_id`, `pengumuman_judul`, `pengumuman_slug`, `pengumuman_konten`, `pengumuman_sampul`, `pengumuman_author`, `pengumuman_kategori`, `pengumuman_status`, `created_at`, `updated_at`) VALUES
(4, 'pengumuman', 'pengumuman', '<p>\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"</p>', 'pengumuman.png', 1, 1, 1, '2021-11-11 10:03:45', '2021-11-04 07:32:46'),
(5, 'sfsf', 'sfsf', '<p>sffssssssss</p>', 'pengumuman.png', 1, 1, 1, '2021-11-12 08:31:53', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `announcement_categories`
--

CREATE TABLE `announcement_categories` (
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `kategori_nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `announcement_categories`
--

INSERT INTO `announcement_categories` (`kategori_id`, `kategori_nama`, `kategori_slug`, `created_at`, `updated_at`) VALUES
(1, 'Pekerjaan', 'pekerjaan', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `histories`
--

CREATE TABLE `histories` (
  `sejarah_id` bigint(20) UNSIGNED NOT NULL,
  `sejarah_konten` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sejarah_foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `histories`
--

INSERT INTO `histories` (`sejarah_id`, `sejarah_konten`, `sejarah_foto`, `created_at`, `updated_at`) VALUES
(3, '<p><strong>Unit ini didirikan sebagai pusat pengembangan karir dan kewirausahaan mahasiswa dalam menghasilkan lulusan yang disiplin, mandiri, inovatif, kreatif dan mampu bersaing di pasar kerja nasional/global sesuai dengan kompetensi dan perkembangan dunia industri serta berjiwa wirausaha sehingga mampu menciptakan peluang kerja. Berbagai macaminfo layanan seperti informasi lowongan pekerjaan, bimbingan karir, bimbingan kewirausahaan, pelacakan alumni dan kerjasama industri dapat dimanfaatkan untuk pengukuran kepuasan pengguna dan digunakan untuk akreditasi program studi atau institusi. Untuk melaksanakan tugas-tugasnya UPT Pengembangan Karir dan Kewirausahaan langsung berkoordinasi dengan&nbsp;Wakil Direktur Bidang Kemahasiswaan serta dilengkapi dengan personalia sebagai berikut: Kepala Unit Pelaksana Teknis, Koordinator Pengembangan Karir, Koordinator Kewirausahaan Mahasiswa</strong></p>', 'roman-kraft-_Zua2hyvTBk-unsplash.jpg', '2021-11-04 07:36:44', '2021-11-04 07:37:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi_kewirausahaans`
--

CREATE TABLE `informasi_kewirausahaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `informasi_judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `informasi_penulis` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `informasi_konten` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `informasi_tanggal` date NOT NULL,
  `informasi_foto` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `informasi_kewirausahaans`
--

INSERT INTO `informasi_kewirausahaans` (`id`, `informasi_judul`, `informasi_penulis`, `informasi_konten`, `informasi_tanggal`, `informasi_foto`, `created_at`, `updated_at`) VALUES
(2, 'das', 'das', '<p>ads</p>', '2021-11-02', 'news.jpg', '2021-11-04 05:27:32', '2021-11-04 07:05:57'),
(3, 'sadsad', 'asdasd', '<p>dasssssssssssssssss</p>', '2021-11-19', 'roman-kraft-_Zua2hyvTBk-unsplash.jpg', '2021-11-04 06:57:18', '2021-11-04 06:57:18'),
(4, 'Informasi', 'penulisnya', '<p>\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"</p>', '2021-11-08', 'news (1).png', '2021-11-04 07:03:18', '2021-11-04 07:03:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konseling_karirs`
--

CREATE TABLE `konseling_karirs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `konseling_judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konseling_penulis` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konseling_konten` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konseling_tanggal` date NOT NULL,
  `konseling_foto` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `konseling_karirs`
--

INSERT INTO `konseling_karirs` (`id`, `konseling_judul`, `konseling_penulis`, `konseling_konten`, `konseling_tanggal`, `konseling_foto`, `created_at`, `updated_at`) VALUES
(4, 'Judul konseling karir', 'penulis', '<p>\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"</p>', '2021-11-24', 'giulia-may-8JFMYz-a8Xo-unsplash.jpg', '2021-11-04 07:13:52', '2021-11-04 07:15:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konseling_kewirausahaans`
--

CREATE TABLE `konseling_kewirausahaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `konseling_judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konseling_penulis` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konseling_konten` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konseling_tanggal` date NOT NULL,
  `konseling_foto` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `konseling_kewirausahaans`
--

INSERT INTO `konseling_kewirausahaans` (`id`, `konseling_judul`, `konseling_penulis`, `konseling_konten`, `konseling_tanggal`, `konseling_foto`, `created_at`, `updated_at`) VALUES
(3, 'judul', 'penulis', '<p>\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"</p>', '2021-11-12', 'roman-kraft-_Zua2hyvTBk-unsplash.jpg', '2021-11-04 07:22:38', '2021-11-04 07:22:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_09_03_203722_create_announcement_categories', 1),
(6, '2021_09_03_203917_create_announcements_table', 1),
(7, '2021_09_03_205559_create_news_categories_table', 1),
(8, '2021_09_03_205713_create_news_table', 1),
(9, '2021_09_03_212254_create_visi_table', 1),
(10, '2021_09_03_212423_create_organizational_structures_table', 1),
(11, '2021_09_09_201508_create_histories_table', 1),
(12, '2021_10_31_135250_create_seminar_karirs_table', 2),
(13, '2021_10_31_155542_create_konseling_karirs_table', 3),
(14, '2021_10_31_164024_create_seminar_kewirausahaans_table', 4),
(15, '2021_10_31_164131_create_konseling_kewirausahaans_table', 5),
(16, '2021_10_31_164205_create_konseling_kewirausahaans_table', 6),
(17, '2021_10_31_171224_create_informasi_kewirausahaans_table', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `berita_id` bigint(20) UNSIGNED NOT NULL,
  `berita_judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berita_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berita_konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `berita_sampul` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `berita_author` bigint(20) UNSIGNED NOT NULL,
  `berita_kategori` bigint(20) UNSIGNED NOT NULL,
  `berita_status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`berita_id`, `berita_judul`, `berita_slug`, `berita_konten`, `berita_sampul`, `berita_author`, `berita_kategori`, `berita_status`, `created_at`, `updated_at`) VALUES
(11, 'judul berita', 'judul-berita', '<p>\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"</p>', 'roman-kraft-_Zua2hyvTBk-unsplash.jpg', 1, 2, 1, '2021-11-17 08:32:15', '2021-11-04 05:19:32'),
(12, 'sasa', 'sasa', '<p>asss</p>', 'thea-y3ZcWAgVphU-unsplash.jpg', 1, 1, 1, '2021-11-23 08:32:19', '2021-11-04 08:54:01'),
(16, 'Judul', 'judul', '<p>isi beritaisi beritaisi beritaisi beritaisi beritaisi beritaisi beritaisi beritaisi beritaisi beritaisi beritaisi beritaisi beritaisi beritaisi beritaisi beritaisi beritaisi beritaisi beritaisi beritaisi beritaisi beritaisi beritaisi beritaisi beritaisi beritaisi beritaisi beritaisi beritaisi beritaisi beritaisi beritaisi beritaisi beritaisi berita</p>', 'news.jpg', 1, 2, 1, '2021-11-05 08:45:15', '2021-11-05 08:45:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `news_categories`
--

CREATE TABLE `news_categories` (
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `kategori_nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `news_categories`
--

INSERT INTO `news_categories` (`kategori_id`, `kategori_nama`, `kategori_slug`, `created_at`, `updated_at`) VALUES
(1, 'Investigasi', 'investigasi', NULL, NULL),
(2, 'Umum', 'umum', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `organizational_structures`
--

CREATE TABLE `organizational_structures` (
  `struktur_id` bigint(20) UNSIGNED NOT NULL,
  `struktur_foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `organizational_structures`
--

INSERT INTO `organizational_structures` (`struktur_id`, `struktur_foto`, `created_at`, `updated_at`) VALUES
(6, 'strukturuptpkk.png', '2021-11-04 07:49:21', '2021-11-04 07:50:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `seminar_karirs`
--

CREATE TABLE `seminar_karirs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `seminar_judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seminar_penulis` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seminar_konten` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seminar_tanggal` date NOT NULL,
  `seminar_foto` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `seminar_karirs`
--

INSERT INTO `seminar_karirs` (`id`, `seminar_judul`, `seminar_penulis`, `seminar_konten`, `seminar_tanggal`, `seminar_foto`, `created_at`, `updated_at`) VALUES
(4, 'judul seminar', 'penulis', '<p>\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"</p>', '2021-11-08', 'thea-y3ZcWAgVphU-unsplash.jpg', '2021-11-04 07:43:19', '2021-11-04 07:43:19'),
(5, 'judul seminar karir 1', 'penulisnya', '<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas mole...At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas mole...At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas mole...At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas mole...</p>', '2021-11-20', 'roman-kraft-_Zua2hyvTBk-unsplash.jpg', '2021-11-05 05:56:37', '2021-11-05 05:56:37'),
(6, 'new judul', 'penulis baru', '<p><i><strong>Laravel</strong></i> is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly&nbsp;...<i><strong>Laravel</strong></i> is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly&nbsp;...<i><strong>Laravel</strong></i> is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly&nbsp;...<i><strong>Laravel</strong></i> is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly&nbsp;...</p>', '2021-11-18', 'news (1).png', '2021-11-05 06:00:07', '2021-11-05 06:00:07'),
(7, 'sdas', 'sda', '<p><i><strong>Laravel</strong></i> is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly&nbsp;...<i><strong>Laravel</strong></i> is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly&nbsp;...<i><strong>Laravel</strong></i> is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly&nbsp;...<i><strong>Laravel</strong></i> is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly&nbsp;...<i><strong>Laravel</strong></i> is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly&nbsp;...</p>', '2021-11-25', 'roman-kraft-_Zua2hyvTBk-unsplash.jpg', '2021-11-05 06:00:22', '2021-11-05 06:00:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `seminar_kewirausahaans`
--

CREATE TABLE `seminar_kewirausahaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `seminar_judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seminar_penulis` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seminar_konten` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seminar_tanggal` date NOT NULL,
  `seminar_foto` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `seminar_kewirausahaans`
--

INSERT INTO `seminar_kewirausahaans` (`id`, `seminar_judul`, `seminar_penulis`, `seminar_konten`, `seminar_tanggal`, `seminar_foto`, `created_at`, `updated_at`) VALUES
(3, 'judul', 'penulis', '<p>\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"</p>', '2021-11-16', 'roman-kraft-_Zua2hyvTBk-unsplash.jpg', '2021-11-04 07:46:57', '2021-11-04 07:47:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_nip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_kontak` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_level` enum('superadmin','admin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user_foto/avatar.png',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `user_nama`, `user_nip`, `user_kontak`, `user_level`, `user_foto`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', '1111', '08128828829', 'superadmin', 'user_foto/avatar.png', '$2y$10$QtYfbvW2u.w5WlNQlVZ67.A4fIq4BYfaYyeZNjJAttKds7R6NnJGq', NULL, '2021-10-29 02:00:56', '2021-10-29 02:00:56'),
(2, 'Admin', '2222', '08128829992', 'admin', 'user_foto/avatar.png', '$2y$10$rIv5RbtxWdaOVAH0a.hkE.9N8BXf5St9ewk/QQMmwZhO6ppSkUSZi', NULL, '2021-10-29 02:00:56', '2021-10-29 02:00:56'),
(4, 'Oca', '9999', '081273602929', 'superadmin', 'oca.jpg', '$2y$10$tZGjpBQfWSZgEXUCHI1NP.GKTVB5rBB6QApd2iaid1DHVQLOt5tZy', NULL, '2021-11-05 06:31:39', '2021-11-05 07:51:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi`
--

CREATE TABLE `visi` (
  `visi_id` bigint(20) UNSIGNED NOT NULL,
  `visi_konten` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi_konten` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tujuan_konten` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visi_foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `visi`
--

INSERT INTO `visi` (`visi_id`, `visi_konten`, `misi_konten`, `tujuan_konten`, `visi_foto`, `created_at`, `updated_at`) VALUES
(7, '<p>Menjadi pusat informasi lowongan kerja, pelatihan, pembinaan, pengembangan karir dan kewirausahaan dalam mempersiapkan mahasiswa dan alumni untuk menghadapi persaingan global yang kompetitif pada dunia kerja dan dunia usaha.</p>', '<ol><li>Meningkatkan dan mengembangkan kualitas mahasiswa dan alumni yang sesuai standar kompetensi sebagai bekal di dunia kerja dan dunia usaha.</li><li>Memfasilitasi dan mengembangkan jiwa wirausaha mahasiswa.</li><li>Menjalin hubungan dan kerjasama dengan dunia industri dan dunia usaha yang bertaraf nasional maupun internasional.</li><li>Memberikan informasi yang berkaitan dengan dunia kerja dan dunia usaha secara berkelanjutan kepada mahasiswa dan alumni.</li></ol>', '<ol><li>Mengembangkan <i>softskill</i> mahasiswa untuk persiapan di dunia kerja.</li><li>Mempersingkat masa tunggu lulusan mendapatkan pekerjaan.</li><li>Mendekatkan lulusan dengan <i>user</i> (perusahaan, lembaga).</li><li>Mempersiapkan kompetensi karir didunia kerja yang terintegrasi dengan kegiatan kurikuler dan ekstrakurikuler.</li><li>Mengembangkan kegiatan civitas akademika dalam kerjasama dengan <i>stakeholders</i> (masyarakat dan dunia usaha) untuk mengintegrasikan kegiatan akademik dengan dunia kerja.</li><li>Memberikan masukan untuk perbaikan pendidikan berdasarkan hasil analisis kebutuhan dunia kerja.</li><li>Pengembangan dan pemasyarakatan usaha mandiri (kewirausahaan) bagi civitas akademika agar mampu menciptakan lapangan kerja.</li><li>Melaksanakan pelacakan alumni (<i>tracer study</i>)</li><li>Menjalin hubungan atau membangun jaringan dengan dunia usaha dan dunia industri.</li><li>Mendorong lulusan untuk memiliki profesionalisme dan jiwa kewirausahaan.</li><li>Menciptakan model pendidikan kewirausahaan yang sesuai dengan Politeknik sebagai pendidikan vokasi.</li></ol>', 'polsri.jpeg', '2021-11-03 07:44:16', '2021-11-04 07:54:34');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`pengumuman_id`),
  ADD KEY `announcements_pengumuman_author_foreign` (`pengumuman_author`),
  ADD KEY `announcements_pengumuman_kategori_foreign` (`pengumuman_kategori`);

--
-- Indeks untuk tabel `announcement_categories`
--
ALTER TABLE `announcement_categories`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`sejarah_id`);

--
-- Indeks untuk tabel `informasi_kewirausahaans`
--
ALTER TABLE `informasi_kewirausahaans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `konseling_karirs`
--
ALTER TABLE `konseling_karirs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `konseling_kewirausahaans`
--
ALTER TABLE `konseling_kewirausahaans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`berita_id`),
  ADD KEY `news_berita_author_foreign` (`berita_author`),
  ADD KEY `news_berita_kategori_foreign` (`berita_kategori`);

--
-- Indeks untuk tabel `news_categories`
--
ALTER TABLE `news_categories`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `organizational_structures`
--
ALTER TABLE `organizational_structures`
  ADD PRIMARY KEY (`struktur_id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `seminar_karirs`
--
ALTER TABLE `seminar_karirs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `seminar_kewirausahaans`
--
ALTER TABLE `seminar_kewirausahaans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_user_nip_unique` (`user_nip`);

--
-- Indeks untuk tabel `visi`
--
ALTER TABLE `visi`
  ADD PRIMARY KEY (`visi_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `announcements`
--
ALTER TABLE `announcements`
  MODIFY `pengumuman_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `announcement_categories`
--
ALTER TABLE `announcement_categories`
  MODIFY `kategori_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `histories`
--
ALTER TABLE `histories`
  MODIFY `sejarah_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `informasi_kewirausahaans`
--
ALTER TABLE `informasi_kewirausahaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `konseling_karirs`
--
ALTER TABLE `konseling_karirs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `konseling_kewirausahaans`
--
ALTER TABLE `konseling_kewirausahaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `berita_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `news_categories`
--
ALTER TABLE `news_categories`
  MODIFY `kategori_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `organizational_structures`
--
ALTER TABLE `organizational_structures`
  MODIFY `struktur_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `seminar_karirs`
--
ALTER TABLE `seminar_karirs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `seminar_kewirausahaans`
--
ALTER TABLE `seminar_kewirausahaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `visi`
--
ALTER TABLE `visi`
  MODIFY `visi_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `announcements`
--
ALTER TABLE `announcements`
  ADD CONSTRAINT `announcements_pengumuman_author_foreign` FOREIGN KEY (`pengumuman_author`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `announcements_pengumuman_kategori_foreign` FOREIGN KEY (`pengumuman_kategori`) REFERENCES `announcement_categories` (`kategori_id`);

--
-- Ketidakleluasaan untuk tabel `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_berita_author_foreign` FOREIGN KEY (`berita_author`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `news_berita_kategori_foreign` FOREIGN KEY (`berita_kategori`) REFERENCES `news_categories` (`kategori_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
