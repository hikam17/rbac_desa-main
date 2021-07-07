-- Adminer 4.7.7 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `action`;
CREATE TABLE `action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `controller_id` varchar(50) NOT NULL,
  `action_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=173 DEFAULT CHARSET=latin1;

INSERT INTO `action` (`id`, `controller_id`, `action_id`, `name`) VALUES
(12,	'site',	'index',	'Index'),
(13,	'site',	'profile',	'Profile'),
(14,	'site',	'login',	'Login'),
(15,	'site',	'logout',	'Logout'),
(16,	'site',	'contact',	'Contact'),
(17,	'site',	'about',	'About'),
(18,	'menu',	'index',	'Index'),
(19,	'menu',	'view',	'View'),
(20,	'menu',	'create',	'Create'),
(21,	'menu',	'update',	'Update'),
(22,	'menu',	'delete',	'Delete'),
(23,	'role',	'index',	'Index'),
(24,	'role',	'view',	'View'),
(25,	'role',	'create',	'Create'),
(26,	'role',	'update',	'Update'),
(27,	'role',	'delete',	'Delete'),
(28,	'role',	'detail',	'Detail'),
(29,	'user',	'index',	'Index'),
(30,	'user',	'view',	'View'),
(31,	'user',	'create',	'Create'),
(32,	'user',	'update',	'Update'),
(33,	'user',	'delete',	'Delete'),
(34,	'site',	'register',	'Register'),
(35,	'menu',	'save',	'Save'),
(36,	'alat',	'index',	'Index'),
(37,	'alat',	'view',	'View'),
(38,	'alat',	'create',	'Create'),
(39,	'alat',	'update',	'Update'),
(40,	'alat',	'delete',	'Delete'),
(41,	'jenis-air',	'index',	'Index'),
(42,	'jenis-air',	'view',	'View'),
(43,	'jenis-air',	'create',	'Create'),
(44,	'jenis-air',	'update',	'Update'),
(45,	'jenis-air',	'delete',	'Delete'),
(46,	'konsumen-pengguna',	'index',	'Index'),
(47,	'konsumen-pengguna',	'view',	'View'),
(48,	'konsumen-pengguna',	'create',	'Create'),
(49,	'konsumen-pengguna',	'update',	'Update'),
(50,	'konsumen-pengguna',	'delete',	'Delete'),
(51,	'pencatatan-usaha',	'index',	'Index'),
(52,	'pencatatan-usaha',	'view',	'View'),
(53,	'pencatatan-usaha',	'create',	'Create'),
(54,	'pencatatan-usaha',	'update',	'Update'),
(55,	'pencatatan-usaha',	'delete',	'Delete'),
(56,	'pendaftaran-usaha',	'index',	'Index'),
(57,	'pendaftaran-usaha',	'view',	'View'),
(58,	'pendaftaran-usaha',	'create',	'Create'),
(59,	'pendaftaran-usaha',	'update',	'Update'),
(60,	'pendaftaran-usaha',	'delete',	'Delete'),
(61,	'bbm',	'index',	'Index'),
(62,	'bbm',	'view',	'View'),
(63,	'bbm',	'create',	'Create'),
(64,	'bbm',	'update',	'Update'),
(65,	'bbm',	'delete',	'Delete'),
(66,	'jenis-usaha',	'index',	'Index'),
(67,	'jenis-usaha',	'view',	'View'),
(68,	'jenis-usaha',	'create',	'Create'),
(69,	'jenis-usaha',	'update',	'Update'),
(70,	'jenis-usaha',	'delete',	'Delete'),
(71,	'kebutuhan-bbm',	'index',	'Index'),
(72,	'kebutuhan-bbm',	'view',	'View'),
(73,	'kebutuhan-bbm',	'create',	'Create'),
(74,	'kebutuhan-bbm',	'update',	'Update'),
(75,	'kebutuhan-bbm',	'delete',	'Delete'),
(76,	'pencatatan-usaha',	'unduh-pendukung',	'Unduh Pendukung'),
(77,	'pencatatan-usaha',	'unduh-bukti-pemilikan',	'Unduh Bukti Pemilikan'),
(78,	'pendaftaran-usaha',	'approve-pelaksana',	'Approve Pelaksana'),
(79,	'pendaftaran-usaha',	'approve-kasi',	'Approve Kasi'),
(80,	'pendaftaran-usaha',	'approve-kabid',	'Approve Kabid'),
(81,	'pendaftaran-usaha',	'approve-kepala-dinas',	'Approve Kepala Dinas'),
(82,	'rekomendasi-bbm',	'index',	'Index'),
(83,	'rekomendasi-bbm',	'view',	'View'),
(84,	'rekomendasi-bbm',	'create',	'Create'),
(85,	'rekomendasi-bbm',	'update',	'Update'),
(86,	'rekomendasi-bbm',	'approve-pelaksana',	'Approve Pelaksana'),
(87,	'rekomendasi-bbm',	'approve-kasi',	'Approve Kasi'),
(88,	'rekomendasi-bbm',	'approve-kabid',	'Approve Kabid'),
(89,	'rekomendasi-bbm',	'delete',	'Delete'),
(90,	'pencatatan-usaha',	'report',	'Report'),
(91,	'pencatatan-usaha',	'approve-pelaksana',	'Approve Pelaksana'),
(92,	'pencatatan-usaha',	'approve-kasi',	'Approve Kasi'),
(93,	'pencatatan-usaha',	'approve-kabid',	'Approve Kabid'),
(94,	'pencatatan-usaha',	'approve-kepala-dinas',	'Approve Kepala Dinas'),
(95,	'rekomendasi-bbm',	'report',	'Report'),
(96,	'rekomendasi-bbm',	'update-exp',	'Update Exp'),
(97,	'pencatatan-usaha',	'update-exp',	'Update Exp'),
(98,	'site',	'kab',	'Kab'),
(99,	'site',	'kec',	'Kec'),
(100,	'site',	'des',	'Des'),
(101,	'rekomendasi-bbm',	'cetak',	'Cetak'),
(102,	'pencatatan-usaha',	'cetak',	'Cetak'),
(103,	'rekomendasi-bbm',	'unduh-foto-copy',	'Unduh Foto Copy'),
(104,	'rekomendasi-bbm',	'unduh-surat-permohonan',	'Unduh Surat Permohonan'),
(105,	'rekomendasi-bbm',	'unduh-surat-keterangan',	'Unduh Surat Keterangan'),
(106,	'rekomendasi-bbm',	'unduh-surat-pernyataan',	'Unduh Surat Pernyataan'),
(107,	'tempat-spbu',	'index',	'Index'),
(108,	'tempat-spbu',	'view',	'View'),
(109,	'tempat-spbu',	'create',	'Create'),
(110,	'tempat-spbu',	'update',	'Update'),
(111,	'tempat-spbu',	'delete',	'Delete'),
(112,	'spbu',	'index',	'Index'),
(113,	'spbu',	'view',	'View'),
(114,	'spbu',	'create',	'Create'),
(115,	'spbu',	'update',	'Update'),
(116,	'spbu',	'delete',	'Delete'),
(117,	'komoditi',	'index',	'Index'),
(118,	'komoditi',	'view',	'View'),
(119,	'komoditi',	'create',	'Create'),
(120,	'komoditi',	'update',	'Update'),
(121,	'komoditi',	'delete',	'Delete'),
(122,	'pencatatan-usaha',	'unduh-bukti-pemilikan-tanah',	'Unduh Bukti Pemilikan Tanah'),
(123,	'site',	'lokasi',	'Lokasi'),
(124,	'site',	'nomor',	'Nomor'),
(125,	'pencatatan-usaha',	'unduh-bukti-tanah',	'Unduh Bukti Tanah'),
(126,	'jabatan',	'index',	'Index'),
(127,	'jabatan',	'view',	'View'),
(128,	'jabatan',	'create',	'Create'),
(129,	'jabatan',	'update',	'Update'),
(130,	'jabatan',	'delete',	'Delete'),
(131,	'kategori-berita',	'index',	'Index'),
(132,	'kategori-berita',	'view',	'View'),
(133,	'kategori-berita',	'create',	'Create'),
(134,	'kategori-berita',	'update',	'Update'),
(135,	'kategori-berita',	'delete',	'Delete'),
(136,	'berita',	'index',	'Index'),
(137,	'berita',	'view',	'View'),
(138,	'berita',	'create',	'Create'),
(139,	'berita',	'update',	'Update'),
(140,	'berita',	'delete',	'Delete'),
(141,	'demografi',	'index',	'Index'),
(142,	'demografi',	'view',	'View'),
(143,	'demografi',	'create',	'Create'),
(144,	'demografi',	'update',	'Update'),
(145,	'demografi',	'delete',	'Delete'),
(146,	'galeri',	'index',	'Index'),
(147,	'galeri',	'view',	'View'),
(148,	'galeri',	'create',	'Create'),
(149,	'galeri',	'update',	'Update'),
(150,	'galeri',	'delete',	'Delete'),
(151,	'perangkat-desa',	'index',	'Index'),
(152,	'perangkat-desa',	'view',	'View'),
(153,	'perangkat-desa',	'create',	'Create'),
(154,	'perangkat-desa',	'update',	'Update'),
(155,	'perangkat-desa',	'delete',	'Delete'),
(156,	'profil-desa',	'index',	'Index'),
(157,	'profil-desa',	'view',	'View'),
(158,	'profil-desa',	'create',	'Create'),
(159,	'profil-desa',	'update',	'Update'),
(160,	'profil-desa',	'delete',	'Delete'),
(161,	'slider-gambar',	'index',	'Index'),
(162,	'slider-gambar',	'view',	'View'),
(163,	'slider-gambar',	'create',	'Create'),
(164,	'slider-gambar',	'update',	'Update'),
(165,	'slider-gambar',	'delete',	'Delete'),
(166,	'berita',	'unduh-gambar',	'Unduh Gambar'),
(167,	'berita',	'aktif',	'Aktif'),
(168,	'berita',	'non-aktif',	'Non Aktif'),
(169,	'demografi',	'unduh-foto',	'Unduh Foto'),
(170,	'galeri',	'unduh-gambar',	'Unduh Gambar'),
(171,	'galeri',	'aktif',	'Aktif'),
(172,	'galeri',	'non-aktif',	'Non Aktif');

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `berita`;
CREATE TABLE `berita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `isi_berita` mediumtext NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `deleted_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `created_by` (`created_by`),
  KEY `kategori_id` (`kategori_id`),
  CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `user` (`id`),
  CONSTRAINT `berita_ibfk_2` FOREIGN KEY (`kategori_id`) REFERENCES `kategori_berita` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

INSERT INTO `berita` (`id`, `judul`, `isi_berita`, `kategori_id`, `gambar`, `slug`, `created_at`, `updated_at`, `created_by`, `deleted_status`) VALUES
(2,	'testing alamat',	'<p>asdas</p>',	1,	'm1BTCVVrstmBKFjwlCHfVy3VKvgEKsf7.jpg',	'testing-alamat',	'2021-06-22 07:49:29',	'2021-06-22 08:16:18',	1,	0);

DROP TABLE IF EXISTS `demografi`;
CREATE TABLE `demografi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(255) DEFAULT NULL,
  `isi_demografi` mediumtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO `demografi` (`id`, `foto`, `isi_demografi`, `created_at`, `updated_at`) VALUES
(1,	'9lt7wbxuK4W11S9k_nHVxrYvyKGrLX6-.jpg',	'<p>asdas</p>',	'2021-06-22 08:31:00',	'2021-06-22 08:40:02');

DROP TABLE IF EXISTS `galeri`;
CREATE TABLE `galeri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO `galeri` (`id`, `judul`, `gambar`, `created_at`, `updated_at`, `deleted_status`) VALUES
(1,	'Galeri 1',	'9ER41aOTtucFg9l33X1WPQGiSNrjiVL-.jpg',	'2021-06-22 08:48:33',	'2021-06-22 08:49:08',	0);

DROP TABLE IF EXISTS `jabatan`;
CREATE TABLE `jabatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jabatan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO `jabatan` (`id`, `nama_jabatan`) VALUES
(1,	'Kepala Desa');

DROP TABLE IF EXISTS `kategori_berita`;
CREATE TABLE `kategori_berita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO `kategori_berita` (`id`, `nama_kategori`) VALUES
(1,	'Tes');

DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `controller` varchar(50) NOT NULL,
  `action` varchar(50) NOT NULL DEFAULT 'index',
  `icon` varchar(50) NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`),
  CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `menu` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

INSERT INTO `menu` (`id`, `name`, `controller`, `action`, `icon`, `order`, `parent_id`) VALUES
(1,	'Home',	'site',	'index',	'fa fa-home',	1,	NULL),
(2,	'Master',	'',	'index',	'fa fa-database',	2,	NULL),
(3,	'Menu',	'menu',	'index',	'fa fa-list',	5,	2),
(4,	'Role',	'role',	'index',	'fa fa-user',	6,	2),
(5,	'User',	'user',	'index',	'fa fa-users',	7,	2),
(17,	'Jabatan',	'jabatan',	'index',	'fa fa-user-md',	3,	2),
(18,	'Kategori Berita',	'kategori-berita',	'index',	'fa fa-newspaper-o',	4,	2),
(19,	'Berita',	'berita',	'index',	'fa fa-newspaper-o',	1,	NULL),
(20,	'Demografi',	'demografi',	'index',	'fa fa-building',	1,	NULL),
(21,	'Galeri',	'galeri',	'index',	'fa fa-image',	1,	NULL),
(22,	'Perangkat Desa',	'perangkat-desa',	'index',	'fa fa-users',	1,	NULL),
(23,	'Profil Desa',	'profil-desa',	'index',	'fa fa-building-o',	1,	NULL),
(24,	'Slider Gambar',	'slider-gambar',	'index',	'fa fa-image',	1,	NULL);

DROP TABLE IF EXISTS `perangkat_desa`;
CREATE TABLE `perangkat_desa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `jabatan` int(11) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tanggal_mulai_tugas` date DEFAULT NULL,
  `sk_pengangkatan` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `jabatan` (`jabatan`),
  CONSTRAINT `perangkat_desa_ibfk_1` FOREIGN KEY (`jabatan`) REFERENCES `jabatan` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO `perangkat_desa` (`id`, `nama`, `alamat`, `jabatan`, `tanggal_lahir`, `tanggal_mulai_tugas`, `sk_pengangkatan`, `foto`) VALUES
(1,	'Budi Tercinta',	'bogor',	1,	'2021-06-02',	'2021-06-02',	'Sk - 0989',	'MMvCoDY7YNfzgSCC39bKNeDsk_BAotGl.png');

DROP TABLE IF EXISTS `profil_desa`;
CREATE TABLE `profil_desa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_desa` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `nomor_telepon` varchar(20) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `visi_misi` mediumtext DEFAULT NULL,
  `sejarah` mediumtext DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO `profil_desa` (`id`, `nama_desa`, `alamat`, `nomor_telepon`, `logo`, `visi_misi`, `sejarah`, `instagram`, `facebook`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1,	'Desa Kita',	'alamatnya Jauh',	'08977878687',	'2jyK7pIXjWOs894cDe81aK075U4rbMC5.png',	'<p>Visi Misi</p>',	'<p>Sejarah</p>',	'https://www.youtube.com/watch?v=6GUm5g8SG4o',	'https://html.com/attributes/a-target/',	-7.8709096,	112.5115303,	'2021-06-23 02:27:21',	'2021-06-23 03:17:46');

DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO `role` (`id`, `name`) VALUES
(1,	'Super Administrator'),
(2,	'Administrator'),
(3,	'Regular User');

DROP TABLE IF EXISTS `role_action`;
CREATE TABLE `role_action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `action_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`),
  KEY `action_id` (`action_id`),
  CONSTRAINT `role_action_ibfk_2` FOREIGN KEY (`action_id`) REFERENCES `action` (`id`),
  CONSTRAINT `role_action_ibfk_3` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=1900 DEFAULT CHARSET=latin1;

INSERT INTO `role_action` (`id`, `role_id`, `action_id`) VALUES
(33,	2,	12),
(34,	2,	13),
(35,	2,	14),
(36,	2,	15),
(37,	2,	16),
(38,	2,	17),
(39,	2,	18),
(40,	2,	19),
(41,	2,	20),
(42,	2,	21),
(43,	2,	22),
(44,	2,	23),
(45,	2,	24),
(46,	2,	25),
(47,	2,	26),
(48,	2,	27),
(49,	2,	28),
(50,	2,	29),
(51,	2,	30),
(52,	2,	31),
(53,	2,	32),
(54,	2,	33),
(1464,	3,	12),
(1465,	3,	13),
(1466,	3,	14),
(1467,	3,	15),
(1468,	3,	16),
(1469,	3,	17),
(1470,	3,	51),
(1471,	3,	52),
(1472,	3,	53),
(1473,	3,	54),
(1474,	3,	91),
(1475,	3,	92),
(1476,	3,	93),
(1477,	3,	94),
(1478,	3,	76),
(1479,	3,	77),
(1480,	3,	125),
(1481,	3,	97),
(1482,	3,	55),
(1483,	3,	82),
(1484,	3,	83),
(1485,	3,	84),
(1486,	3,	85),
(1487,	3,	86),
(1488,	3,	87),
(1489,	3,	88),
(1490,	3,	96),
(1491,	3,	89),
(1492,	3,	103),
(1493,	3,	104),
(1494,	3,	105),
(1495,	3,	106),
(1833,	1,	12),
(1834,	1,	13),
(1835,	1,	14),
(1836,	1,	15),
(1837,	1,	18),
(1838,	1,	19),
(1839,	1,	20),
(1840,	1,	21),
(1841,	1,	22),
(1842,	1,	23),
(1843,	1,	24),
(1844,	1,	25),
(1845,	1,	26),
(1846,	1,	27),
(1847,	1,	28),
(1848,	1,	29),
(1849,	1,	30),
(1850,	1,	31),
(1851,	1,	32),
(1852,	1,	33),
(1853,	1,	126),
(1854,	1,	127),
(1855,	1,	128),
(1856,	1,	129),
(1857,	1,	130),
(1858,	1,	131),
(1859,	1,	132),
(1860,	1,	133),
(1861,	1,	134),
(1862,	1,	135),
(1863,	1,	136),
(1864,	1,	166),
(1865,	1,	137),
(1866,	1,	138),
(1867,	1,	139),
(1868,	1,	167),
(1869,	1,	168),
(1870,	1,	140),
(1871,	1,	141),
(1872,	1,	169),
(1873,	1,	142),
(1874,	1,	143),
(1875,	1,	144),
(1876,	1,	145),
(1877,	1,	146),
(1878,	1,	170),
(1879,	1,	147),
(1880,	1,	148),
(1881,	1,	149),
(1882,	1,	171),
(1883,	1,	172),
(1884,	1,	150),
(1885,	1,	151),
(1886,	1,	152),
(1887,	1,	153),
(1888,	1,	154),
(1889,	1,	155),
(1890,	1,	156),
(1891,	1,	157),
(1892,	1,	158),
(1893,	1,	159),
(1894,	1,	160),
(1895,	1,	161),
(1896,	1,	162),
(1897,	1,	163),
(1898,	1,	164),
(1899,	1,	165);

DROP TABLE IF EXISTS `role_menu`;
CREATE TABLE `role_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`),
  KEY `menu_id` (`menu_id`),
  CONSTRAINT `role_menu_ibfk_3` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_menu_ibfk_4` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=398 DEFAULT CHARSET=latin1;

INSERT INTO `role_menu` (`id`, `role_id`, `menu_id`) VALUES
(56,	2,	1),
(57,	2,	2),
(58,	2,	3),
(59,	2,	4),
(60,	2,	5),
(310,	3,	1),
(385,	1,	1),
(386,	1,	2),
(387,	1,	3),
(388,	1,	4),
(389,	1,	5),
(390,	1,	17),
(391,	1,	18),
(392,	1,	19),
(393,	1,	20),
(394,	1,	21),
(395,	1,	22),
(396,	1,	23),
(397,	1,	24);

DROP TABLE IF EXISTS `slider_gambar`;
CREATE TABLE `slider_gambar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO `slider_gambar` (`id`, `judul`, `gambar`, `created_at`, `updated_at`, `deleted_status`) VALUES
(1,	'asdas',	'1LlkT_KQp8SDucUb5V0E0YGpA9BX9_2O.jpg',	'2021-06-22 08:59:11',	'2021-06-22 08:59:32',	0);

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_hp` varchar(20) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nip` varchar(25) DEFAULT NULL,
  `alamat` text NOT NULL,
  `ttd_digital` varchar(255) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `photo_url` varchar(255) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `last_logout` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

INSERT INTO `user` (`id`, `username`, `password`, `name`, `email`, `no_hp`, `nik`, `nip`, `alamat`, `ttd_digital`, `role_id`, `photo_url`, `last_login`, `last_logout`) VALUES
(1,	'admin',	'21232f297a57a5a743894a0e4a801fc3',	'Administrator',	'fachruwildan@gmail.com',	'08976788768',	'1',	'',	'Malang',	'default_tanda_tangan.png',	1,	'lBKiQL5E7HsGeKjttkUuM5dPyrWAEXQV.png',	'2021-07-01 11:50:41',	'2021-07-01 11:54:35'),
(2,	'user',	'81dc9bdb52d04dc20036dbd8313ed055',	'Regular User',	'',	'',	'2',	NULL,	'',	'',	3,	'default.png',	'2021-06-14 11:05:33',	NULL);

DROP TABLE IF EXISTS `view_perangkat_desa`;
CREATE TABLE `view_perangkat_desa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foto_1` varchar(255) DEFAULT NULL,
  `foto_2` varchar(255) DEFAULT NULL,
  `isi_perangkat_desa` mediumtext DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- 2021-07-01 05:40:03
