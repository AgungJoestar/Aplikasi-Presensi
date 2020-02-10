-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2020 at 06:30 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kerja_praktik`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensiguru`
--

CREATE TABLE `absensiguru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` bigint(20) NOT NULL,
  `absen` char(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_absen` date NOT NULL,
  `keterangan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absensiguru`
--

INSERT INTO `absensiguru` (`id`, `nip`, `absen`, `tgl_absen`, `keterangan`, `created_at`, `updated_at`) VALUES
(3, 1, 'hadir', '2020-01-26', 'hadir', '2020-01-26 13:50:59', '2020-01-26 13:50:59'),
(4, 2, 'sakit', '2020-01-26', NULL, '2020-01-26 13:50:59', '2020-01-26 13:50:59'),
(5, 3, 'alfa', '2020-01-26', NULL, '2020-01-26 13:51:00', '2020-01-26 13:51:00'),
(6, 5, 'izin', '2020-01-26', NULL, '2020-01-26 13:51:00', '2020-01-26 13:51:00'),
(7, 6, 'hadir', '2020-01-26', NULL, '2020-01-26 13:51:00', '2020-01-26 13:51:00');

-- --------------------------------------------------------

--
-- Table structure for table `absensi_bimbel`
--

CREATE TABLE `absensi_bimbel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` bigint(20) NOT NULL,
  `id_kelas` bigint(20) UNSIGNED NOT NULL,
  `pertemuan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `absen` char(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_absen` date NOT NULL,
  `keterangan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `absensi_pascamubaligh`
--

CREATE TABLE `absensi_pascamubaligh` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` bigint(20) NOT NULL,
  `id_kelas` bigint(20) UNSIGNED NOT NULL,
  `pertemuan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `absen` char(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_absen` date NOT NULL,
  `keterangan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `absensi_pesantren`
--

CREATE TABLE `absensi_pesantren` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` bigint(20) NOT NULL,
  `id_kelas` bigint(20) UNSIGNED NOT NULL,
  `pertemuan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `absen` char(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_absen` date NOT NULL,
  `keterangan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `absensi_pramubaligh`
--

CREATE TABLE `absensi_pramubaligh` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` bigint(20) NOT NULL,
  `id_kelas` bigint(20) UNSIGNED NOT NULL,
  `pertemuan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `absen` char(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_absen` date NOT NULL,
  `keterangan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `absensi_siswa_sekolah`
--

CREATE TABLE `absensi_siswa_sekolah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` bigint(20) NOT NULL,
  `id_kelas` bigint(20) UNSIGNED NOT NULL,
  `pertemuan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `absen` char(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_absen` date NOT NULL,
  `keterangan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absensi_siswa_sekolah`
--

INSERT INTO `absensi_siswa_sekolah` (`id`, `nis`, `id_kelas`, `pertemuan`, `absen`, `tgl_absen`, `keterangan`, `created_at`, `updated_at`) VALUES
(35, 111232080020190625, 6, '1', 'hadir', '2020-01-27', NULL, '2020-01-27 01:05:17', '2020-01-27 01:05:17'),
(36, 111232080020190626, 6, '1', 'sakit', '2020-01-27', NULL, '2020-01-27 01:05:17', '2020-01-27 01:05:17'),
(37, 111232080020190627, 6, '1', 'alfa', '2020-01-27', NULL, '2020-01-27 01:05:17', '2020-01-27 01:05:17'),
(38, 111232080020190628, 6, '1', 'izin', '2020-01-27', NULL, '2020-01-27 01:05:17', '2020-01-27 01:05:17'),
(39, 111232080020190629, 6, '1', 'alfa', '2020-01-27', NULL, '2020-01-27 01:05:17', '2020-01-27 01:05:17'),
(40, 111232080020190630, 6, '1', 'sakit', '2020-01-27', NULL, '2020-01-27 01:05:17', '2020-01-27 01:05:17'),
(41, 111232080020190631, 6, '1', 'hadir', '2020-01-27', NULL, '2020-01-27 01:05:18', '2020-01-27 01:05:18'),
(42, 111232080020190632, 6, '1', 'sakit', '2020-01-27', NULL, '2020-01-27 01:05:18', '2020-01-27 01:05:18'),
(43, 111232080020190633, 6, '1', 'alfa', '2020-01-27', NULL, '2020-01-27 01:05:18', '2020-01-27 01:05:18'),
(44, 111232080020190634, 6, '1', 'izin', '2020-01-27', NULL, '2020-01-27 01:05:18', '2020-01-27 01:05:18'),
(45, 111232080020190635, 6, '1', 'alfa', '2020-01-27', NULL, '2020-01-27 01:05:18', '2020-01-27 01:05:18'),
(46, 111232080020190636, 6, '1', 'sakit', '2020-01-27', NULL, '2020-01-27 01:05:18', '2020-01-27 01:05:18'),
(47, 111232080020190637, 6, '1', 'hadir', '2020-01-27', NULL, '2020-01-27 01:05:18', '2020-01-27 01:05:18'),
(48, 111232080020190638, 6, '1', 'sakit', '2020-01-27', NULL, '2020-01-27 01:05:18', '2020-01-27 01:05:18'),
(49, 111232080020190639, 6, '1', 'alfa', '2020-01-27', NULL, '2020-01-27 01:05:18', '2020-01-27 01:05:18'),
(50, 111232080020190640, 6, '1', 'izin', '2020-01-27', NULL, '2020-01-27 01:05:18', '2020-01-27 01:05:18'),
(51, 111232080020190641, 6, '1', 'alfa', '2020-01-27', NULL, '2020-01-27 01:05:18', '2020-01-27 01:05:18'),
(52, 111232080020190642, 6, '1', 'sakit', '2020-01-27', NULL, '2020-01-27 01:05:18', '2020-01-27 01:05:18'),
(53, 111232080020190643, 6, '1', 'hadir', '2020-01-27', NULL, '2020-01-27 01:05:18', '2020-01-27 01:05:18'),
(54, 111232080020190644, 6, '1', 'sakit', '2020-01-27', NULL, '2020-01-27 01:05:18', '2020-01-27 01:05:18'),
(55, 111232080020190645, 6, '1', 'alfa', '2020-01-27', NULL, '2020-01-27 01:05:18', '2020-01-27 01:05:18'),
(56, 111232080020190646, 6, '1', 'izin', '2020-01-27', NULL, '2020-01-27 01:05:18', '2020-01-27 01:05:18'),
(57, 111232080020190647, 6, '1', 'alfa', '2020-01-27', NULL, '2020-01-27 01:05:19', '2020-01-27 01:05:19'),
(58, 111232080020190648, 6, '1', 'sakit', '2020-01-27', NULL, '2020-01-27 01:05:19', '2020-01-27 01:05:19');

-- --------------------------------------------------------

--
-- Table structure for table `absenstaf`
--

CREATE TABLE `absenstaf` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip_staf` bigint(20) NOT NULL,
  `absen_staf` char(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_absen_staf` date NOT NULL,
  `keterangan_staf` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absenstaf`
--

INSERT INTO `absenstaf` (`id`, `nip_staf`, `absen_staf`, `tgl_absen_staf`, `keterangan_staf`, `created_at`, `updated_at`) VALUES
(1, 1, 'hadir', '2020-01-26', NULL, '2020-01-26 14:08:42', '2020-01-26 14:08:42'),
(2, 2, 'sakit', '2020-01-26', NULL, '2020-01-26 14:08:42', '2020-01-26 14:08:42');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` bigint(20) NOT NULL,
  `id_kelas` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_telp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `pend_terakhir` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `boarding` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_nikah` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_kel` int(10) UNSIGNED DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `id_kelas`, `nama`, `email`, `alamat`, `tempat_lahir`, `tgl_lahir`, `no_telp`, `tgl_masuk`, `pend_terakhir`, `jabatan`, `boarding`, `status_nikah`, `jumlah_kel`, `image`, `created_at`, `updated_at`) VALUES
(1, 'X-IPA-A', 'YOGA ABDIKA ALFAZA', NULL, 'Cinunuk', 'Bandung', '1993-02-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-26 06:29:49', '2020-01-26 06:29:49'),
(2, NULL, 'MIDKAL FARAN', NULL, 'Rancaekek', 'Bandung', '1995-05-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-26 06:31:06', '2020-01-26 06:31:06'),
(3, NULL, 'VIKA HURI RAHMADANI', NULL, 'Cibiru', 'Bandung', '1992-07-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-26 06:32:19', '2020-01-26 06:32:19'),
(5, NULL, 'DEDE HERMANSYAH', NULL, 'Bandung', 'Bandung', '1987-11-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-26 06:34:00', '2020-01-26 06:34:00'),
(6, NULL, 'MOHAMAD BESTMAN', NULL, 'Bandung', 'Bandung', '1990-11-27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-26 06:36:29', '2020-01-26 06:36:29');

-- --------------------------------------------------------

--
-- Table structure for table `jns_kegiatan`
--

CREATE TABLE `jns_kegiatan` (
  `id_kegiatan` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_kelas` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelas` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `kode_kelas`, `nama`, `jenis_kelas`, `created_at`, `updated_at`) VALUES
(5, '2019XIS-A', 'X-IPS-A', 'Reguler', '2020-01-26 17:53:52', '2020-01-26 17:53:52'),
(6, '2019XIA-A', 'X-IPA-A', 'Reguler', '2020-01-26 17:55:19', '2020-01-26 17:55:19');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` bigint(20) UNSIGNED NOT NULL,
  `username` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_06_07_134824_create_siswa_table', 1),
(4, '2019_06_07_134957_create_login_table', 1),
(5, '2019_06_09_171033_create_gurus_table', 1),
(6, '2019_06_11_012240_create_jns_kegiatan_table', 1),
(7, '2019_06_11_050807_create_kelas_table', 1),
(8, '2019_06_14_231132_create_absensiguru', 1),
(9, '2019_06_18_071344_create_wali_kelas', 1),
(10, '2019_06_20_144915_create_admins_table', 1),
(11, '2019_06_21_063821_siswa_constraint', 1),
(12, '2019_06_22_054500_create__absensi_siswa_sekolah', 1),
(13, '2019_06_27_032723_create_absensi_bimbel', 1),
(14, '2019_06_27_050747_create_absensi_pasca_mubaligh', 1),
(15, '2019_06_27_095933_create_absensi_pesantren', 1),
(16, '2019_06_29_125516_create__absensi_pra_mubaligh_table', 1),
(17, '2019_06_29_135206_create__staf_table', 1),
(18, '2019_06_29_135325_create__absensi__staf_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` bigint(20) NOT NULL,
  `nisn` bigint(20) UNSIGNED NOT NULL,
  `angkatan` bigint(20) UNSIGNED NOT NULL,
  `id_kelas` bigint(20) UNSIGNED DEFAULT NULL,
  `id_pramubaligh` bigint(20) UNSIGNED DEFAULT NULL,
  `id_pascamubaligh` bigint(20) UNSIGNED DEFAULT NULL,
  `id_bimbel` bigint(20) UNSIGNED DEFAULT NULL,
  `id_pesantren` bigint(20) UNSIGNED DEFAULT NULL,
  `nama_siswa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` date NOT NULL,
  `tmpt_lahir` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk_siswa` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_siswa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nisn`, `angkatan`, `id_kelas`, `id_pramubaligh`, `id_pascamubaligh`, `id_bimbel`, `id_pesantren`, `nama_siswa`, `email`, `tgl_lahir`, `tmpt_lahir`, `jk_siswa`, `image`, `alamat_siswa`, `no_telp`, `created_at`, `updated_at`) VALUES
(111232080020190625, 45071267, 2019, 6, NULL, NULL, NULL, NULL, 'ANGGITA AYU DIANSIH', NULL, '2004-05-04', 'Bandung', 'Perempuan', 'af4OyPhrrbG0fm9gJsfa0q74JUaON7ifysAwfhGc.jpeg', 'Bandung', NULL, '1971-06-25 17:34:28', NULL),
(111232080020190626, 45071268, 2019, 6, NULL, NULL, NULL, NULL, 'AHMADI TAUFIKUROHMAN', NULL, '2004-04-06', 'Bandung', 'Laki-laki', NULL, 'Bandung', NULL, '2005-08-08 10:16:32', NULL),
(111232080020190627, 45071343, 2019, 6, NULL, NULL, NULL, NULL, 'AZZAHRA', NULL, '2004-08-22', 'Bandung', 'Perempuan', NULL, 'Bandung', NULL, '1992-12-04 22:16:47', NULL),
(111232080020190628, 45071453, 2019, 6, NULL, NULL, NULL, NULL, 'AZZAHRA AULIA S.P.', NULL, '2004-02-06', 'Bandung', 'Perempuan', NULL, 'Bandung', NULL, '1997-03-31 20:32:30', NULL),
(111232080020190629, 45071435, 2019, 6, NULL, NULL, NULL, NULL, 'BILQIS TRESHVA AULIA', NULL, '2004-04-07', 'Bandung', 'Perempuan', NULL, 'Bandung', NULL, '1973-10-19 04:26:34', NULL),
(111232080020190630, 45071464, 2019, 6, NULL, NULL, NULL, NULL, 'DIMAS ARYO IBRAHIM', NULL, '2004-05-12', 'Bandung', 'Laki-laki', NULL, 'Bandung', NULL, '1972-06-12 08:43:57', NULL),
(111232080020190631, 45071475, 2019, 6, NULL, NULL, NULL, NULL, 'ELVINA RAHMA KHOIRUNNISA', NULL, '2004-12-02', 'Bandung', 'Perempuan', NULL, 'Bandung', NULL, '1974-04-09 02:23:38', NULL),
(111232080020190632, 45071485, 2019, 6, NULL, NULL, NULL, NULL, 'FABIAN DWIKY AGHNIA FIRDAUS', NULL, '2003-12-28', 'Bandung', 'Laki-laki', NULL, 'Bandung', NULL, '1988-08-17 22:54:35', NULL),
(111232080020190633, 45071632, 2019, 6, NULL, NULL, NULL, NULL, 'FAQIH ABDUL SIDIQ', NULL, '2004-02-18', 'Bandung', 'Laki-laki', NULL, 'Bandung', NULL, '1995-08-13 20:15:49', NULL),
(111232080020190634, 45071654, 2019, 6, NULL, NULL, NULL, NULL, 'FARHANDO NIAGARA', NULL, '2004-06-12', 'Bandung', 'Laki-laki', NULL, 'Bandung', NULL, '1988-04-24 19:07:47', NULL),
(111232080020190635, 45071655, 2019, 6, NULL, NULL, NULL, NULL, 'FARREL MAHARDHIKA A.', NULL, '2004-04-05', 'Bandung', 'Laki-laki', NULL, 'Bandung', NULL, '2003-08-31 04:02:21', NULL),
(111232080020190636, 45071656, 2019, 6, NULL, NULL, NULL, NULL, 'FAZA RUZIQYANI FIRDAUSA', NULL, '2004-07-26', 'Bandung', 'Perempuan', NULL, 'Bandung', NULL, '2013-05-18 08:10:18', NULL),
(111232080020190637, 45071657, 2019, 6, NULL, NULL, NULL, NULL, 'FERLY ROICHAN FIRDAUS', NULL, '2004-04-26', 'Bandung', 'Laki-laki', NULL, 'Bandung', NULL, '1989-03-27 22:10:47', NULL),
(111232080020190638, 45071658, 2019, 6, NULL, NULL, NULL, NULL, 'GHANIA PUTRI VISTYANI', NULL, '2004-09-04', 'Bandung', 'Perempuan', NULL, 'Bandung', NULL, '1989-12-12 15:41:57', NULL),
(111232080020190639, 45071670, 2019, 6, NULL, NULL, NULL, NULL, 'KRISNA NALENDRA', NULL, '2004-04-08', 'Bandung', 'Laki-laki', NULL, 'Bandung', NULL, '2010-07-03 10:06:57', NULL),
(111232080020190640, 45071672, 2019, 6, NULL, NULL, NULL, NULL, 'LU\'LU ROFIATUSHOLIHAH AS SHOFA MARWAH', NULL, '2004-11-15', 'Bandung', 'Perempuan', NULL, 'Bandung', NULL, '1977-06-12 01:52:34', NULL),
(111232080020190641, 45071675, 2019, 6, NULL, NULL, NULL, NULL, 'MUHAMMAD DANENDRA ARLIANSYAH', NULL, '2004-07-22', 'Bandung', 'Laki-laki', NULL, 'Bandung', NULL, '1973-10-23 17:27:49', NULL),
(111232080020190642, 45071687, 2019, 6, NULL, NULL, NULL, NULL, 'MUHAMMAD LUTHFI SALIM', NULL, '2004-08-16', 'Bandung', 'Laki-laki', NULL, 'Bandung', NULL, '1985-06-02 13:25:58', NULL),
(111232080020190643, 45071689, 2019, 6, NULL, NULL, NULL, NULL, 'MUKHAMAD RAFFA', NULL, '2004-02-27', 'Bandung', 'Laki-laki', NULL, 'Bandung', NULL, '2001-07-21 09:15:11', NULL),
(111232080020190644, 45071693, 2019, 6, NULL, NULL, NULL, NULL, 'MULKI HURINA AZKA', NULL, '2004-02-24', 'Bandung', 'Laki-laki', NULL, 'Bandung', NULL, '2008-08-30 05:52:26', NULL),
(111232080020190645, 45071696, 2019, 6, NULL, NULL, NULL, NULL, 'NASYWA ULYA VANIA RACHMA', NULL, '2004-05-13', 'Bandung', 'Perempuan', NULL, 'Bandung', NULL, '1985-08-04 20:48:22', NULL),
(111232080020190646, 45071698, 2019, 6, NULL, NULL, NULL, NULL, 'RONALDY HAIDIR AL LUBIS', NULL, '2004-06-29', 'Bandung', 'Laki-laki', NULL, 'Bandung', NULL, '1972-12-12 14:04:11', NULL),
(111232080020190647, 45071701, 2019, 6, NULL, NULL, NULL, NULL, 'SITI NURASHRI AZKATYA', NULL, '2004-08-20', 'Bandung', 'Perempuan', NULL, 'Bandung', NULL, '1988-02-19 15:20:53', NULL),
(111232080020190648, 45071705, 2019, 6, NULL, NULL, NULL, NULL, 'WULAN NUR IMANIA', NULL, '2004-05-26', 'Bandung', 'Perempuan', NULL, 'Bandung', NULL, '1993-06-24 02:24:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staf`
--

CREATE TABLE `staf` (
  `nip_staf` bigint(20) NOT NULL,
  `nama_staf` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_staf` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_staf` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir_staf` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir_staf` date NOT NULL,
  `no_telp_staf` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_masuk_staf` date DEFAULT NULL,
  `pend_terakhir_staf` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan_staf` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `boarding_staf` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_nikah_staf` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_kel_staf` int(10) UNSIGNED DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staf`
--

INSERT INTO `staf` (`nip_staf`, `nama_staf`, `email_staf`, `alamat_staf`, `tempat_lahir_staf`, `tgl_lahir_staf`, `no_telp_staf`, `tgl_masuk_staf`, `pend_terakhir_staf`, `jabatan_staf`, `boarding_staf`, `status_nikah_staf`, `jumlah_kel_staf`, `image`, `created_at`, `updated_at`) VALUES
(1, 'M. NURDIN', NULL, 'Bandung', 'Bandung', '1985-02-25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-26 06:38:41', '2020-01-26 06:38:41'),
(2, 'RAMA RAMADHAN', NULL, 'Bandung', 'Bandung', '1991-07-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-26 06:39:39', '2020-01-26 06:39:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `user_type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'PSDI_Admin', 'psdi@admin.com', NULL, '$2y$10$jTiHpOXZeGrvqqByrAaT3Ol3yPmdb1T5laK/fQxZFT//vsZYIehGi', 'super_admin', NULL, '2020-01-30 19:01:06', '2020-01-30 19:01:06'),
(2, '1', '1@1.1', NULL, '$2y$10$54yrMrwSABVshxSP0Vq5Xussuz.jur6nvuqHBQ1/JUEVrx0oiJdnW', 'reguler', NULL, '2020-01-26 09:17:54', '2020-01-26 09:17:54'),
(3, '2', '2@2.2', NULL, '$2y$10$1wzUVCHu5sSf57gXI36gWesx1nHiWwGxA6Al4G/0wp8KCKpIimi5m', 'bimbel', NULL, '2020-01-26 09:18:12', '2020-01-26 09:18:12'),
(4, '3', '3@3.3', NULL, '$2y$10$e5GsLTT2/Rfn2vOTMCNvheVxGYijd6Ku11I34UHY1D7zlG81DylN.', 'pasca_mubaligh', NULL, '2020-01-26 09:18:46', '2020-01-26 09:18:46'),
(5, '4', '4@4.4', NULL, '$2y$10$KAqX7Gg94RT9XVjqdOz7duhHAJBAfijiSimJfPgghrypfGG95O.Be', 'pra_mubaligh', NULL, '2020-01-26 09:18:59', '2020-01-26 09:18:59');

-- --------------------------------------------------------

--
-- Table structure for table `walikelas`
--

CREATE TABLE `walikelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` bigint(20) UNSIGNED NOT NULL,
  `id_kelas` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensiguru`
--
ALTER TABLE `absensiguru`
  ADD PRIMARY KEY (`id`),
  ADD KEY `absensiguru_nip_foreign` (`nip`);

--
-- Indexes for table `absensi_bimbel`
--
ALTER TABLE `absensi_bimbel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `absensi_bimbel_id_kelas_foreign` (`id_kelas`),
  ADD KEY `absensi_bimbel_nis_foreign` (`nis`);

--
-- Indexes for table `absensi_pascamubaligh`
--
ALTER TABLE `absensi_pascamubaligh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `absensi_pascamubaligh_id_kelas_foreign` (`id_kelas`),
  ADD KEY `absensi_pascamubaligh_nis_foreign` (`nis`);

--
-- Indexes for table `absensi_pesantren`
--
ALTER TABLE `absensi_pesantren`
  ADD PRIMARY KEY (`id`),
  ADD KEY `absensi_pesantren_nis_foreign` (`nis`),
  ADD KEY `absensi_pesantren_id_kelas_foreign` (`id_kelas`);

--
-- Indexes for table `absensi_pramubaligh`
--
ALTER TABLE `absensi_pramubaligh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `absensi_pramubaligh_id_kelas_foreign` (`id_kelas`),
  ADD KEY `absensi_pramubaligh_nis_foreign` (`nis`);

--
-- Indexes for table `absensi_siswa_sekolah`
--
ALTER TABLE `absensi_siswa_sekolah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `absensi_siswa_sekolah_id_kelas_foreign` (`id_kelas`),
  ADD KEY `absensi_siswa_sekolah_nis_foreign` (`nis`);

--
-- Indexes for table `absenstaf`
--
ALTER TABLE `absenstaf`
  ADD PRIMARY KEY (`id`),
  ADD KEY `absenstaf_nip_staf_foreign` (`nip_staf`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `jns_kegiatan`
--
ALTER TABLE `jns_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

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
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `siswa_nisn_unique` (`nisn`),
  ADD KEY `siswa_id_kelas_foreign` (`id_kelas`),
  ADD KEY `siswa_id_bimbel_foreign` (`id_bimbel`),
  ADD KEY `siswa_id_pramubaligh_foreign` (`id_pramubaligh`),
  ADD KEY `siswa_id_pascamubaligh_foreign` (`id_pascamubaligh`),
  ADD KEY `siswa_id_pesantren_foreign` (`id_pesantren`);

--
-- Indexes for table `staf`
--
ALTER TABLE `staf`
  ADD PRIMARY KEY (`nip_staf`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `walikelas`
--
ALTER TABLE `walikelas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensiguru`
--
ALTER TABLE `absensiguru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `absensi_bimbel`
--
ALTER TABLE `absensi_bimbel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `absensi_pascamubaligh`
--
ALTER TABLE `absensi_pascamubaligh`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `absensi_pesantren`
--
ALTER TABLE `absensi_pesantren`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `absensi_pramubaligh`
--
ALTER TABLE `absensi_pramubaligh`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `absensi_siswa_sekolah`
--
ALTER TABLE `absensi_siswa_sekolah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `absenstaf`
--
ALTER TABLE `absenstaf`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `nip` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14336;

--
-- AUTO_INCREMENT for table `jns_kegiatan`
--
ALTER TABLE `jns_kegiatan`
  MODIFY `id_kegiatan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `nis` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000000000000000000;

--
-- AUTO_INCREMENT for table `staf`
--
ALTER TABLE `staf`
  MODIFY `nip_staf` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `walikelas`
--
ALTER TABLE `walikelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensiguru`
--
ALTER TABLE `absensiguru`
  ADD CONSTRAINT `absensiguru_nip_foreign` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `absensi_bimbel`
--
ALTER TABLE `absensi_bimbel`
  ADD CONSTRAINT `absensi_bimbel_id_kelas_foreign` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `absensi_bimbel_nis_foreign` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `absensi_pascamubaligh`
--
ALTER TABLE `absensi_pascamubaligh`
  ADD CONSTRAINT `absensi_pascamubaligh_id_kelas_foreign` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `absensi_pascamubaligh_nis_foreign` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `absensi_pesantren`
--
ALTER TABLE `absensi_pesantren`
  ADD CONSTRAINT `absensi_pesantren_id_kelas_foreign` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `absensi_pesantren_nis_foreign` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE;

--
-- Constraints for table `absensi_pramubaligh`
--
ALTER TABLE `absensi_pramubaligh`
  ADD CONSTRAINT `absensi_pramubaligh_id_kelas_foreign` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `absensi_pramubaligh_nis_foreign` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `absensi_siswa_sekolah`
--
ALTER TABLE `absensi_siswa_sekolah`
  ADD CONSTRAINT `absensi_siswa_sekolah_id_kelas_foreign` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `absensi_siswa_sekolah_nis_foreign` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `absenstaf`
--
ALTER TABLE `absenstaf`
  ADD CONSTRAINT `absenstaf_nip_staf_foreign` FOREIGN KEY (`nip_staf`) REFERENCES `staf` (`nip_staf`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_id_bimbel_foreign` FOREIGN KEY (`id_bimbel`) REFERENCES `kelas` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `siswa_id_kelas_foreign` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `siswa_id_pascamubaligh_foreign` FOREIGN KEY (`id_pascamubaligh`) REFERENCES `kelas` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `siswa_id_pesantren_foreign` FOREIGN KEY (`id_pesantren`) REFERENCES `kelas` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `siswa_id_pramubaligh_foreign` FOREIGN KEY (`id_pramubaligh`) REFERENCES `kelas` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
