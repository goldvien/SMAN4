-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2017 at 07:56 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sman4`
--

-- --------------------------------------------------------

--
-- Table structure for table `privmsgs`
--

CREATE TABLE `privmsgs` (
  `privmsg_id` bigint(20) NOT NULL,
  `privmsg_author` bigint(20) NOT NULL,
  `privmsg_date` varchar(20) NOT NULL,
  `privmsg_subject` varchar(1024) NOT NULL,
  `privmsg_body` varchar(60000) NOT NULL,
  `privmsg_notify` tinyint(1) DEFAULT NULL,
  `privmsg_deleted` tinyint(1) DEFAULT NULL,
  `privmsg_ddate` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `privmsgs`
--

INSERT INTO `privmsgs` (`privmsg_id`, `privmsg_author`, `privmsg_date`, `privmsg_subject`, `privmsg_body`, `privmsg_notify`, `privmsg_deleted`, `privmsg_ddate`) VALUES
(1, 1, '2016-11-10 10:01:18', 'hahaha', 'noidandwaiolwdawd               ', 1, NULL, '2016-11-13 14:19:14'),
(2, 2, '2016-11-10 10:03:05', 'ahahahah', 'lnoawdjiawjdjawjd               ', 1, 0, NULL),
(3, 1, '2016-11-10 10:04:16', 'Hahahahah', 'lojiadwoiawikldoojilwaoikdiokloikloiklolkawd               ', 1, NULL, '2016-11-13 14:15:32'),
(4, 2, '2016-11-10 10:10:07', 'njouajnuwkd.jwid', 'nkjliaefuyahnucniwmahz               ', 1, 0, NULL),
(5, 3, '2016-11-10 10:56:19', 'Test Ahahajaja', '        kadawo idont care what clothse youe were int time to love and love again and if i       ', 1, NULL, '2016-11-13 14:36:55'),
(6, 1, '2016-11-10 11:17:05', 'kawdjoaiwd', '               olaiwdnaoiwlkdnmalowkdmws', 1, NULL, '2016-11-13 14:15:09'),
(7, 1, '2016-11-10 11:19:42', 'Subikjaw', '               lomiadimawld', 1, NULL, '2016-11-13 14:14:53'),
(8, 1, '2016-11-10 11:41:48', 'jajajajaja', '               hohohohohoo', 1, NULL, '2016-11-13 14:14:48'),
(9, 2, '2016-11-10 11:46:47', 'hahahha', '                       awndjkawdawd       ', 1, 0, NULL),
(10, 1, '2016-11-10 19:48:48', 'Hahahahahaha', 'Jajajajjajajaja               ', 1, NULL, '2016-11-13 14:12:57'),
(11, 1, '2016-11-10 19:49:27', 'Kalau', 'jakdjakjwdlkawdawd               ', 1, NULL, '2016-11-13 14:12:53'),
(12, 1, '2016-11-10 19:56:55', 'Test AJa Terus', '        lalwdjawdawld                      ', 1, NULL, '2016-11-13 14:12:46'),
(13, 1, '2016-11-12 12:25:34', 'Hehehe', '<h4><u>Yth. Hadist Laroibafi.M</u></h4><p>dada<u> kalau digureng kayanya enak<br></u></p>', 1, NULL, '2016-11-13 14:12:41'),
(14, 1, '2016-11-13 06:14:59', 'TEst terusss', 'kl.kladlawlkdklawlkd               ', 1, NULL, '2016-11-13 14:12:36'),
(15, 1, '2016-11-13 06:17:18', 'jajajja', 'lkjandjawndmlawdaw               ', 1, NULL, '2016-11-13 14:08:54'),
(16, 3, '2016-11-13 14:40:10', 'Jajajaj', 'ladjawdawd               ', 1, NULL, '2016-11-17 21:32:03'),
(17, 3, '2016-11-13 14:41:40', 'kaakkaka', 'joiadjawkdawd               ', 1, NULL, '2016-11-17 21:31:56'),
(18, 1, '2016-11-13 15:24:18', 'APa', 'PEsan sudah diterima dengan baik               ', 1, NULL, '2016-11-13 15:25:01'),
(19, 1, '2016-11-14 10:03:49', 'Haha', 'ajajkakajsasa               ', 1, NULL, '2016-11-14 17:06:20'),
(20, 1, '2016-11-14 10:14:49', 'hahahah', 'kalndawdaw               ', 1, NULL, '2016-11-14 17:06:16'),
(21, 1, '2016-11-14 10:23:24', 'jajaj', 'olmawdawd               ', 1, NULL, '2016-11-14 17:06:12'),
(22, 1, '2016-11-14 10:24:15', 'jajajja', 'lmawdawd               ', 1, NULL, '2016-11-14 17:06:09'),
(23, 1, '2016-11-14 11:59:05', 'ajjajaja', 'awldawdawd               ', 1, NULL, '2016-11-14 17:06:06'),
(24, 1, '2016-11-14 17:06:34', 'Test dan', '               niawdaliwdlkawdawd', 1, NULL, '2016-11-15 12:34:33'),
(25, 2, '2016-11-14 17:35:00', 'wkowkokwo', '               okadwawdawd', 1, 0, NULL),
(26, 1, '2016-11-15 12:35:05', 'jajaj', '               awdawdaw', 1, NULL, '2016-11-15 12:35:15'),
(27, 1, '2016-11-18 00:05:34', 'adwdaw', 'dqwawd               ', 1, 0, NULL),
(28, 3, '2016-11-21 14:44:12', 'hahah', 'kjaiuhiushnisjaknsu               ', 1, 0, NULL),
(29, 3, '2016-11-21 14:46:52', 'Jjajajja', 'ihuauihuiaihuajuija<br>               ', 1, NULL, '2017-01-25 12:41:13'),
(30, 1, '2017-01-25 12:39:06', 'hohohoho', 'aknodawkjdnawn.sdlknjwaswkdnjixujakisx', 1, NULL, '2017-02-23 22:53:36');

-- --------------------------------------------------------

--
-- Table structure for table `privmsgs_to`
--

CREATE TABLE `privmsgs_to` (
  `pmto_id` bigint(20) NOT NULL,
  `pmto_message` bigint(20) NOT NULL,
  `pmto_recipient` bigint(20) NOT NULL,
  `pmto_read` tinyint(1) DEFAULT NULL,
  `pmto_rdate` varchar(20) DEFAULT NULL,
  `pmto_deleted` tinyint(1) DEFAULT NULL,
  `pmto_ddate` varchar(20) DEFAULT NULL,
  `pmto_allownotify` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `privmsgs_to`
--

INSERT INTO `privmsgs_to` (`pmto_id`, `pmto_message`, `pmto_recipient`, `pmto_read`, `pmto_rdate`, `pmto_deleted`, `pmto_ddate`, `pmto_allownotify`) VALUES
(1, 1, 2, 1, '2016-11-10 11:46:22', 0, '2016-11-10 10:04:24', 1),
(2, 2, 1, 1, '2016-11-10 11:18:46', NULL, '2016-11-13 14:15:36', 1),
(3, 3, 2, 1, '2016-11-10 10:04:50', 0, '2016-11-10 10:04:24', 1),
(4, 4, 1, 1, '2016-11-10 12:15:04', NULL, '2016-11-13 14:15:29', 1),
(5, 5, 1, 1, '2016-11-12 01:26:44', NULL, '2016-11-13 14:15:26', 1),
(6, 6, 4, 1, '2016-11-10 11:18:39', 0, NULL, 1),
(7, 7, 3, 1, '2016-11-13 14:33:38', NULL, '2016-11-13 14:36:59', 1),
(8, 8, 2, 1, '2016-11-10 11:42:23', 0, NULL, 1),
(9, 9, 1, 1, '2016-11-12 12:25:38', NULL, '2016-11-13 14:13:02', 1),
(10, 10, 3, 1, '2016-11-11 10:42:50', NULL, '2016-11-13 15:25:24', 1),
(11, 11, 2, 1, '2016-11-10 19:50:50', 0, NULL, 1),
(12, 12, 5, 0, NULL, 0, NULL, NULL),
(13, 13, 3, 0, NULL, NULL, '2016-11-13 14:42:49', NULL),
(14, 14, 3, 1, '2016-11-13 14:33:05', NULL, '2016-11-13 14:37:04', 1),
(15, 15, 3, 1, '2016-11-13 14:31:44', NULL, '2016-11-13 14:37:10', 1),
(16, 16, 1, 1, '2016-11-14 00:46:16', NULL, '2016-11-14 00:46:27', 1),
(17, 17, 1, 1, '2016-11-14 00:46:06', NULL, '2016-11-14 00:46:30', 1),
(18, 18, 3, 1, '2016-11-13 15:25:31', NULL, '2016-11-13 15:25:47', 1),
(19, 19, 2, 1, '2016-11-14 17:35:15', 0, NULL, 1),
(20, 20, 4, 0, NULL, 0, NULL, NULL),
(21, 21, 3, 1, '2017-01-25 12:40:15', NULL, '2017-01-25 12:41:34', 1),
(22, 22, 3, 1, '2017-01-25 12:40:02', NULL, '2017-01-25 12:41:26', 1),
(23, 23, 4, 0, NULL, 0, NULL, NULL),
(24, 24, 4, 0, NULL, 0, NULL, NULL),
(25, 25, 1, 0, NULL, NULL, '2016-11-15 12:34:51', NULL),
(26, 26, 3, 1, '2016-11-21 14:45:39', NULL, '2017-01-25 12:41:20', 1),
(27, 29, 1, 1, '2017-01-25 12:38:47', NULL, '2017-02-23 22:53:31', 1),
(28, 30, 3, 1, '2017-01-25 12:39:54', NULL, '2017-01-25 12:40:42', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_dataguru`
--

CREATE TABLE `t_dataguru` (
  `id_guru` int(11) NOT NULL,
  `NIP` varchar(18) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nuptk` varchar(20) NOT NULL,
  `nrg` varchar(20) NOT NULL,
  `nokarpeg` varchar(20) NOT NULL,
  `tempat_lhr` varchar(50) NOT NULL,
  `tgl_lhr` varchar(50) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `alamat_diri` text NOT NULL,
  `kota_diri` varchar(20) NOT NULL,
  `kecamatan_diri` varchar(20) NOT NULL,
  `kode_pos` varchar(20) NOT NULL,
  `tentang` text NOT NULL,
  `image` varchar(35) NOT NULL,
  `id_pendidikan` int(11) NOT NULL,
  `id_pangkat` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `tmtjabatan` date NOT NULL,
  `masa_sk` int(2) NOT NULL,
  `id_tugas` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `masa_nilai_awal` date NOT NULL,
  `masa_nilai_akhir` date NOT NULL,
  `tgl_persetujuan` date DEFAULT NULL,
  `id_level` int(11) DEFAULT NULL,
  `id_penilai` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_dataguru`
--

INSERT INTO `t_dataguru` (`id_guru`, `NIP`, `nama`, `nuptk`, `nrg`, `nokarpeg`, `tempat_lhr`, `tgl_lhr`, `jk`, `alamat_diri`, `kota_diri`, `kecamatan_diri`, `kode_pos`, `tentang`, `image`, `id_pendidikan`, `id_pangkat`, `id_jabatan`, `tmtjabatan`, `masa_sk`, `id_tugas`, `id_sekolah`, `masa_nilai_awal`, `masa_nilai_akhir`, `tgl_persetujuan`, `id_level`, `id_penilai`, `status`) VALUES
(1, '1415115754', 'Administrator', 'ADMIN', 'ADMIN', 'ADMIN', 'Bandung', '23-September-1998', 'L', 'ADMIN', 'Bandung', 'Andir', '', 'ADMIN BEBAS NGAPAIN AJA', 'file_1487865077.jpg', 1, 17, 2, '2016-10-27', 1, 13, 1, '0000-00-00', '0000-00-00', '0000-00-00', 1, 0, 1),
(2, '1415535414', 'Drs. AAM AMARYANI', 'NUPKS', 'NRGS', 'KARPEGS', 'Jakarta', '22-June-1994', 'P', '', 'Bandung', '', '', '', 'file_1477753037.jpg', 1, 1, 2, '1990-11-30', 30, 2, 1, '2015-07-15', '1980-11-30', '2016-11-30', 2, 0, 1),
(3, '140000923', 'Hadist Laroibafi.M', 'NUPKSSS', 'NRGSSS', 'KARPEGSSS', 'Bandung', '18-June-1985', 'L', 'Griya Bandung Indah C.18 No.6', 'Bandung', 'Buah Batu', '', 'Pribadi Yang cukup tampil apa adanya tanpa malu untuk berekspresi', 'file_1485323097.gif', 3, 13, 1, '2015-05-01', 28, 5, 1, '0000-00-00', '2015-12-31', '2016-10-01', 3, 2, 0),
(4, '1415535050', 'Dadan Ramdana', 'NUPKSSS', 'NRGSS', 'KARPEGSSS', 'Bandung', '11-July-1984', 'L', '', '', '', '', '', 'file_1477752830.jpg', 4, 14, 1, '2015-05-01', 31, 2, 1, '0000-00-00', '0000-00-00', '0000-00-00', 3, 2, 0),
(5, '1415535410', 'Ryubi Nic', 'NUPKS', 'NRGS', 'KARPEGS', 'Susukan', '17-January-1950', 'P', '', '', '', '', '', 'file_1478830795.jpg', 7, 12, 1, '2015-05-01', 28, 4, 1, '0000-00-00', '0000-00-00', '0000-00-00', 3, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_jabatan`
--

CREATE TABLE `t_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_jabatan`
--

INSERT INTO `t_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Guru Madya'),
(2, 'Pengawas'),
(3, 'Kepala Sekolah');

-- --------------------------------------------------------

--
-- Table structure for table `t_level`
--

CREATE TABLE `t_level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_level`
--

INSERT INTO `t_level` (`id_level`, `nama_level`) VALUES
(1, 'Super User'),
(2, 'Penilai'),
(3, 'Guru');

-- --------------------------------------------------------

--
-- Table structure for table `t_login`
--

CREATE TABLE `t_login` (
  `id_login` int(11) NOT NULL,
  `NIP` varchar(18) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_login`
--

INSERT INTO `t_login` (`id_login`, `NIP`, `username`, `password`, `id_level`) VALUES
(1, '1415115754', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, '140000923', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 3),
(3, '1415535414', 'aam', '35c2d90f7c06b623fe763d0a4e5b7ed9', 2),
(4, '1415535050', '1415535050', 'fa3198a6b7e6b80a9eec102edfe1a1a4', 3),
(5, '1415535410', '1415535410', '22f6004cc6139a5080776b1c1979a81c', 3);

-- --------------------------------------------------------

--
-- Table structure for table `t_matpel`
--

CREATE TABLE `t_matpel` (
  `id_tugas` int(11) NOT NULL,
  `nama_matpel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_matpel`
--

INSERT INTO `t_matpel` (`id_tugas`, `nama_matpel`) VALUES
(1, 'Bimbingan Konseling'),
(2, 'Bahasa Indonesia'),
(3, 'PKn'),
(4, 'Ekonomi'),
(5, 'Bahasa Inggris'),
(6, 'Matematika'),
(7, 'Penjaskes'),
(8, 'Geografi'),
(9, 'Fisika'),
(10, 'Biologi'),
(11, 'Kimia'),
(12, 'Sosiologi'),
(13, 'Sejarah');

-- --------------------------------------------------------

--
-- Table structure for table `t_nilaihasil`
--

CREATE TABLE `t_nilaihasil` (
  `id_hasilnilai` int(11) NOT NULL,
  `id_penilaian` int(11) NOT NULL,
  `id_bagian` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `persentase` float NOT NULL,
  `total_nilai` int(5) NOT NULL,
  `jml_pk` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_nilaihasil`
--

INSERT INTO `t_nilaihasil` (`id_hasilnilai`, `id_penilaian`, `id_bagian`, `id_guru`, `jumlah`, `persentase`, `total_nilai`, `jml_pk`) VALUES
(12, 0, 2, 3, 6, 50, 2, 0),
(13, 0, 1, 1, 7, 58.3333, 3, 0),
(14, 0, 1, 3, 11, 91.6667, 4, 0),
(15, 0, 2, 1, 3, 25, 1, 0),
(16, 0, 9, 1, 0, 0, 0, 0),
(17, 0, 1, 2, 2, 16.6667, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_nilaihasilskp`
--

CREATE TABLE `t_nilaihasilskp` (
  `id_hasilskp` int(11) NOT NULL,
  `id_bagian` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `total` int(5) NOT NULL,
  `nilaiaspek` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_nilaihasil_c`
--

CREATE TABLE `t_nilaihasil_c` (
  `id_nilai` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `jumlah` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_nilaihasil_c`
--

INSERT INTO `t_nilaihasil_c` (`id_nilai`, `id_guru`, `jumlah`) VALUES
(1, 1, 24);

-- --------------------------------------------------------

--
-- Table structure for table `t_nilaikomp`
--

CREATE TABLE `t_nilaikomp` (
  `id_nilai` int(11) NOT NULL,
  `indikator` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_nilaikomp`
--

INSERT INTO `t_nilaikomp` (`id_nilai`, `indikator`) VALUES
(1, 'Guru dapat mengidentifikasi karakteristik belajar setiap peserta didik di kelasnya.\r\n'),
(2, 'Guru memastikan bahwa semua peserta didik mendapatkan kesempatan yang sama untuk berpartisipasi aktif dalam kegiatan pembelajaran.\r\n'),
(3, 'Guru dapat mengatur kelas untuk memberikan kesempatan belajar yang sama pada semua peserta didik dengan kelainan fisik dan kemampuan belajar yang berbeda.\r\n'),
(4, 'Guru mencoba mengetahui penyebab penyimpangan perilaku peserta didik untuk mencegah agar perilaku tersebut tidak merugikan peserta didik lainnya.\r\n'),
(5, 'Guru membantu mengembangkan potensi dan mengatasi kekurangan peserta didik.\r\n'),
(6, 'Guru memperhatikan peserta didik dengan kelemahan fisik tertentu agar dapat mengikuti aktivitas pembelajaran, sehingga peserta didik tersebut tidak termarginalkan (tersisihkan, diolok-olok, minder, dsb.).\r\n'),
(7, 'Guru memberi kesempatan kepada peserta didik untuk menguasai materi pembelajaran sesuai usia dan kemampuan belajarnya melalui pengaturan proses pembelajaran dan aktivitas yang bervariasi.'),
(8, 'Guru selalu memastikan tingkat pemahaman peserta didik terhadap materi pembelajaran tertentu dan menyesuaikan aktivitas pembelajaran berikutnya berdasarkan tingkat pemahaman tersebut.\r\n'),
(9, 'Guru menggunakan berbagai teknik untuk memotiviasi kemauan belajar peserta didik.\r\n'),
(10, 'Guru merencanakan kegiatan pembelajaran yang saling terkait satu sama lain, dengan memperhatikan tujuan pembelajaran maupun proses belajar peserta didik.\r\n'),
(11, 'Guru memperhatikan respon peserta didik yang belum/kurang memahami materi pembelajaran yang diajarkan dan mengguna- kannya untuk memperbaiki rancangan pem-belajaran berikutnya.\r\n'),
(12, 'Guru dapat menjelaskan alasan pelaksanaan kegiatan/aktivitas yang dilakukannya, baik yang sesuai maupun yang berbeda dengan rencana,terkait keberhasilan pembelajaran.'),
(13, 'Guru dapat menyusun silabus yang sesuai dengan kurikulum\r\n'),
(14, 'Guru merancang rencana pembelajaran yang sesuai dengan silabus untuk membahas materi ajar tertentu agar peserta didik dapat mencapai kompetensi dasar yang ditetapkan.'),
(15, 'Guru mengikuti urutan materi pembelajaran dengan memperhatikan tujuan pembelajaran.'),
(16, 'Guru memilih materi pembelajaran yang:           a) sesuai dengan tujuan pembelajaran, b) tepat dan mutakhir, c) sesuai dengan usia dan tingkat\r\nkemampuan belajar peserta didik, dan d) dapat\r\ndilaksanakan di kelas e) sesuai dengan konteks\r\nkehidupan sehari?hari peserta didik.'),
(17, 'Guru melaksanakan aktivitas pembelajaran sesuai dengan rancangan yang telah disusun secara lengkap dan pelaksanaan aktivitas tersebut mengindikasikan bahwa guru mengerti tentang tujuannya.'),
(18, 'Guru melaksanakan aktivitas pembelajaran yang bertujuan untuk membantu proses belajar peserta didik, bukan untuk menguji sehingga membuat peserta didik merasa tertekan.'),
(19, 'Guru mengkomunikasikan informasi baru (misalnya materi tambahan) sesuai dengan usia dan tingkat kemampuan belajar peserta didik.'),
(20, 'Guru menyikapi kesalahan yang dilakukan peserta didik sebagai tahapan proses pembelajaran, bukan semata?mata kesalahan yang harus dikoreksi. Misalnya: dengan mengetahui terlebih dahulu peserta didik lain yang setuju atau tidak setuju dengan jawaban tersebut, sebelum memberikan penjelasan tentang jawaban yang benar.'),
(21, 'Guru melaksanakan kegiatan pembelajaran sesuai isi kurikulum dan mengkaitkannya dengan konteks kehidupan sehari?hari peserta didik.'),
(22, 'Guru melakukan aktivitas pembelajaran secara bervariasi dengan waktu yang cukup untuk kegiatan pembelajaran yang sesuai dengan usia dan tingkat kemampuan belajar dan mempertahankan perhatian peserta didik.'),
(23, 'Guru mengelola kelas dengan efektif tanpa mendominasi atau sibuk dengan kegiatannya sendiri agar semua waktu peserta dapat termanfaatkan secara produktif.\r\n'),
(24, 'Guru mampu menyesuaikan aktivitas pembelajaran yang dirancang dengan kondisi kelas.\r\n'),
(25, 'Guru memberikan banyak kesempatan kepada peserta didik untuk bertanya, mempraktekkan dan berinteraksi dengan peserta didik lain\r\n'),
(26, 'Guru mengatur pelaksanaan aktivitas pembelajaran secara sistematis untuk membantu proses belajar peserta didik. Sebagai contoh:guru menambah informasi baru setelah mengevaluasi pemahaman peserta didik terhadap materi sebelumnya.'),
(27, 'Guru menggunakan alat bantu mengajar, dan/atau audio? visual (termasuk TIK) untuk meningkatkan motivasi belajar peserta didik dalam mencapai tujuan pembelajaran.\r\n'),
(28, 'Guru menganalisis hasil belajar berdasarkan segala bentuk penilaian terhadap setiap peserta didik untuk mengetahui tingkat kemajuan masing? masing.\r\n'),
(29, 'Guru merancang dan melaksanakan aktivitas pembelajaran yang mendorong peserta didik untuk belajar sesuai dengan kecakapan dan pola belajar masing?masing.'),
(30, 'Guru merancang dan melaksanakan aktivitas pembelajaran untuk memunculkan daya kreativitas dan kemampuan berfikir kritis peserta didik.'),
(31, 'Guru secara aktif membantu peserta didik dalam proses pembelajaran dengan memberikan perhatian kepada setiap individu.'),
(32, 'Guru dapat mengidentifikasi dengan benar\r\ntentang bakat, minat, potensi, dan kesulitan\r\nbelajar masing?masing peserta didik.'),
(33, 'Guru memberikan kesempatan belajar kepada peserta didik sesuai dengan cara belajarnya masing?masing.'),
(34, 'Guru memusatkan perhatian pada interaksi dengan peserta didik dan mendorongnya untuk memahami dan menggunakan informasi yang disampaikan.'),
(35, 'Guru menggunakan pertanyaan untuk mengetahui pemahaman dan menjaga partisipasi peserta didik, termasuk memberikan pertanyaan terbuka yang menuntut peserta didik untuk menjawab dengan ide dan pengetahuan mereka.'),
(36, 'Guru memberikan perhatian dan mendengarkan semua pertanyaan dan tanggapan peserta didik, tanpa menginterupsi, kecuali jika diperlukan untuk membantu atau mengklarifikasi pertanyaan/tanggapan tersebut.'),
(37, 'Guru menanggapinya pertanyaan peserta didik secara tepat, benar, dan mutakhir, sesuai tujuan pembelajaran dan isi kurikulum, tanpa mempermalukannya.'),
(38, 'Guru menyajikan kegiatan pembelajaran yang dapat menumbuhkan kerja sama yang baik antar pesertadidik.'),
(39, 'Guru mendengarkan dan memberikan perhatian terhadap semua jawaban peserta didik baik yang benar maupun yang dianggap salah untuk mengukur tingkat pemahaman peserta didik.'),
(40, 'Guru memberikan perhatian terhadap pertanyaan peserta didik dan meresponnya secara lengkap dan relevan untuk menghilangkan kebingungan pada peserta didik.'),
(41, 'Guru menyusun alat penilaian yang sesuai dengan tujuan pembelajaran untuk mencapai kompetensi tertentu seperti yang tertulis dalam RPP.'),
(42, 'Guru melaksanakan penilaian dengan berbagai teknik dan jenis penilaian, selain penilaian formal yang dilaksanakan sekolah, dan mengumumkan hasil serta implikasinya kepada peserta didik, tentang tingkat pemahaman terhadap materi pembelajaran yang telah dan akan dipelajari.'),
(43, 'Guru menganalisis hasil penilaian untuk mengidentifikasi topik/kompetensi dasar yang sulit sehingga diketahui kekuatan dan kelemahan masing?masing peserta didik untuk keperluan remedial dan pengayaan.'),
(44, 'Guru memanfaatkan masukan dari peserta didik dan merefleksikannya untuk meningkatkan pembelajaran selanjutnya, dan dapat membuktikannya melalui catatan, jurnal pembelajaran, rancangan pembelajaran, materi tambahan, dan sebagainya.'),
(45, 'Guru memanfatkan hasil penilaian sebagai bahan penyusunan rancangan pembelajaran yang akan dilakukan selanjutnya.'),
(46, 'Guru menghargai dan mempromosikan prinsip?prinsip Pancasila sebagai dasar ideologi dan etika bagi semua warga Indonesia.'),
(47, 'Guru mengembangkan kerjasama dan membina kebersamaan dengan teman sejawat tanpa memperhatikan perbedaan yang ada (misalnya: suku, agama, dan gender).'),
(48, 'Guru saling menghormati dan menghargai teman sejawat sesuai dengan kondisi dan keberadaan masing?masing.'),
(49, 'Guru memiliki rasa persatuan dan kesatuan sebagai bangsa Indonesia.'),
(50, 'Guru mempunyai pandangan yang luas tentang keberagaman bangsa Indonesia (misalnya: budaya, suku, agama).'),
(51, 'Guru bertingkah laku sopan dalam berbicara, berpenampilan, dan berbuat terhadap semua peserta didik, orang tua, dan teman sejawat.'),
(52, 'Guru mau membagi pengalamannya dengan teman sejawat, termasuk mengundang mereka untuk mengobservasi cara mengajarnya dan memberikan masukan.'),
(53, 'Guru mampu mengelola pembelajaran yang membuktikan bahwa guru dihormati oleh peserta didik, sehingga semua peserta didik selalu memperhatikan guru dan berpartisipasi aktif dalam proses pembelajaran.'),
(54, 'Guru bersikap dewasa dalam menerima masukan dari peserta didik dan memberikan kesempatan kepada peserta didik untuk berpartisipasi dalam proses pembelajaran.'),
(55, 'Guru berperilaku baik untuk mencitrakan nama baik sekolah.'),
(56, 'Guru mengawali dan mengakhiri pembelajaran dengan tepat waktu.'),
(57, 'Jika guru harus meninggalkan kelas, guru mengaktifkan siswa dengan melakukan hal?hal produktif terkait dengan mata pelajaran, dan meminta guru piket atau guru lain untuk mengawasi kelas.'),
(58, 'Guru memenuhi jam mengajar dan dapat melakukan semua kegiatan lain di luar jam mengajar berdasarkan ijin dan persetujuan pengelola sekolah.'),
(59, 'Guru meminta ijin dan memberitahu lebih awal, dengan memberikan alasan dan bukti yang sah jika tidak menghadiri kegiatan yang telah direncanakan, termasuk proses pembelajaran di kelas. '),
(60, 'Guru menyelesaikan semua tugas administratif dan non?pembelajaran dengan tepat waktu sesuai standar yang ditetapkan.'),
(61, 'Guru memanfaatkan waktu luang selain mengajar untuk kegiatan yang produktif terkait dengan tugasnya.'),
(62, 'Guru memberikan kontribusi terhadap pengembangan sekolah dan mempunyai prestasi yang berdampak positif terhadap nama baik sekolah.'),
(63, 'Guru merasa bangga dengan profesinya sebagai guru.'),
(64, 'Guru memperlakukan semua peserta didik secara adil, memberikan perhatian dan bantuan sesuai kebutuhan masing?masing, tanpa memperdulikan faktor personal.'),
(65, 'Guru menjaga hubungan baik dan peduli dengan teman sejawat (bersifat inklusif), serta berkontribusi positif terhadap semua diskusi formal dan informal terkait dengan pekerjaannya.'),
(66, 'Guru sering berinteraksi dengan peserta didik dan tidak membatasi perhatiannya hanya pada kelompok tertentu (misalnya: peserta didik yang pandai, kaya, berasal dari daerah yang sama dengan guru).'),
(67, 'Guru menyampaikan informasi tentang kemajuan, kesulitan, dan potensi peserta didik kepada orang tuanya, baik dalam pertemuan formal maupun tidak formal antara guru dan orang tua, teman sejawat,dan dapat menunjukkan buktinya.'),
(68, 'Guru ikut berperan aktif dalam kegiatan di luar pembelajaran yang diselenggarakan oleh sekolah dan masyarakat dan dapat memberikan bukti keikutsertaannya.'),
(69, 'Guru memperhatikan sekolah sebagai bagian dari masyarakat, berkomunikasi dengan masyarakat sekitar, serta berperan dalam kegiatan sosial di masyarakat.'),
(70, 'Guru melakukan pemetaan standar kompetensi dan kompetensi dasar untuk mata pelajaran yang diampunya, untuk mengidentifikasi materi pembelajaran yang dianggap sulit, melakukan perencanaan dan pelaksanaan pembelajaran, dan memperkirakan alokasi waktu yang diperlukan.'),
(71, 'Guru menyertakan informasi yang tepat dan mutakhir di dalam perencanaan dan pelaksanaan pembelajaran.'),
(72, 'Guru menyusun materi, perencanaan dan pelaksanaan pembelajaran yang berisi informasi yang tepat, mutakhir, dan yang membantu peserta didik untuk memahami konsep materi pembelajaran.'),
(74, 'Guru melakukan evaluasi diri secara spesifik, lengkap, dan  didukung dengan contoh pengalaman diri sendiri.\r\n'),
(75, 'Guru memiliki jurnal pembelajaran, catatan masukan dari kolega atau hasil penilaian proses pembelajaran sebagai bukti yang menggambarkan kinerjanya.\r\n'),
(76, 'Guru memanfaatkan bukti gambaran kinerjanya untuk mengembangkan  perencanaan dan pelaksanaan pembelajaran selanjutnya dalam program Pengembangan Keprofesian Berkelanjutan (PKB).\r\n'),
(77, 'Guru dapat mengaplikasikan pengalaman PKB dalam perencanaan, pelaksanaan, penilaian pembelajaran dan tindak lanjutnya.\r\n'),
(78, 'Guru melakukan penelitian, mengembangkan karya inovasi, mengikuti kegiatan ilmiah (misalnya seminar, konferensi), dan aktif dalam melaksanakan PKB.\r\n'),
(79, 'Guru dapat memanfaatkan TIK dalam berkomunikasi dan pelaksanaan PKB.');

-- --------------------------------------------------------

--
-- Table structure for table `t_nilaikompskp`
--

CREATE TABLE `t_nilaikompskp` (
  `id_nilskp` int(11) NOT NULL,
  `indikator_skp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_nilaikompskp`
--

INSERT INTO `t_nilaikompskp` (`id_nilskp`, `indikator_skp`) VALUES
(1, 'Guru bertingkah laku sopan dan ramah terhadap semua peserta didik, orang tua, dan teman sejawat.'),
(2, 'Guru ramah dalam berkomunikasi terhadap semua peserta didik, orang tua, danteman sejawat.'),
(3, 'Guru berpenampilan rapi dan sopan.'),
(4, 'Guru melaksanakan pembelajaran sesuai dengan kebutuhan peserta didik.'),
(5, 'Guru memberikan kesempatan kepada peserta didik untuk berpartisipasi dalam proses pembelajaran.'),
(6, 'Guru memperlakukan semua peserta didik secara adil, memberikan perhatian dan bantuan sesuai kebutuhan masing-masing, tanpa memperdulikanfaktorpersonal.'),
(7, 'Guru mau membagi pengalamannya dengan kolega, termasuk mengundang mereka untuk mengobservasi cara mengajarnya dan memberikan masukan.'),
(8, 'Guru menyediakan layanan informasi terkait dengan perkembangan prestasi dan potensi peserta didik kepada orang tua.'),
(9, 'Guru berperilaku baik dalam menjalankan profesinya sesuai dengan kode etik sebagai guru.'),
(10, 'Guru memanfaatkan waktu luang secara produktif terkait dengan tugasnya.'),
(11, 'Guru memberikan kontribusi positif terhadap peningkatan prestasi belajar peserta didik.'),
(12, 'Guru memberikan kontribusipositif terhadap pengembangan sekolah.'),
(13, 'Guru bangga terhadap profesinya.'),
(14, 'Guru konsisten antara perkataan dan perbuatan.'),
(15, 'Guru bersungguh-sungguh dalam melaksanakan tugas jabatannya.'),
(16, 'Guru bersedia menanggung segala resiko dari pekerjaan yang dilakukannya.'),
(17, 'Guru bersedia memperbaiki kesalahan.'),
(18, 'Guru memberikan teladan dalam bersikap, berperilaku, dan bertutur kata.'),
(19, 'Guru melaksanakan prinsip-prinsip Pancasila sebagai dasar ideologi.'),
(20, 'Guru menjunjung tinggi persatuan dan kesatuan NKRI.'),
(21, 'Guru menunjukkan apresiasi terhadap keberagaman budaya, suku, ras, dan agama.'),
(22, 'Guru mengutamakan kepentingan tugas jabatan di atas kepentingan pribadi dan/atau golongan.'),
(23, 'Guru bekerja keras untuk meningkatkan prestasi belajar peserta didik.'),
(24, 'Guru bekerja keras tanpa diminta untuk kemajuan satuan pendidikan.'),
(25, 'Guru melakukan tugas jabatannya dan menerima tanggung jawab lebih dari yang seharusnya di emban.'),
(26, 'Guru melaksanakan tugas jabatan (menyusun perencanaan, melaksanakan pembelajaran, menilai, dan membuat laporan) tepat waktu.'),
(27, 'Guru melaksanakan proses pembelajaran tepatwaktusesuai dengan beban kerjanya.'),
(28, 'Guru meminta ijin dan memberitahu lebih awal, dengan memberikan alasan dan bukti yang sah jika tidak dapat melaksanakan tugas jabatannya.'),
(29, 'Guru menyelesaikan tugas lain di luar pelaksanaan pembelajaran dengan tepat waktu.'),
(30, 'Guru memiliki rasa kebermilikan dan memelihara sarana dan prasarana sekolah untuk kepentingan pelaksanaan tugas.'),
(31, 'Guru mengembangkan kerjasama dan membina kebersamaan dengan teman sejawat.'),
(32, 'Guru menghormati dan menghargai teman sejawat sesuai dengan kondisi dan keberadaan masing-masing.'),
(33, 'Guru mendiskusikan data dan informasi tentang kemajuan, kesulitan, dan potensi peserta didik baik dalam pertemuan formal maupun tidak formal kepada teman sejawat untuk kepentingan peserta didik.'),
(34, 'Guru berkomunikasi dengan masyarakat sekitar untuk kemajuan sekolah, dan berperanserta secara aktif dalam kegiatan sosial di masyarakat.'),
(35, 'Guru bersedia menerima masukan dari peserta didik, orang tua, teman sejawat untuk kemajuan prestasi belajar peserta didik dan perkembangan sekolah.'),
(36, 'Guru menerima dan melaksanakan keputusan yang telah disepakati terkait dengan bidang tugas jabatan.');

-- --------------------------------------------------------

--
-- Table structure for table `t_nilaikomp_c`
--

CREATE TABLE `t_nilaikomp_c` (
  `id_komp` int(11) NOT NULL,
  `indikator` text NOT NULL,
  `bagian` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_nilaikomp_c`
--

INSERT INTO `t_nilaikomp_c` (`id_komp`, `indikator`, `bagian`) VALUES
(1, 'Menguasai Karakteristik Peserta Didik', 'A'),
(2, 'Mnguasai Teori Belajar dan prinsip-prinsip pembelajaran yang mendidik', 'A'),
(3, 'Pengembangan Kurikulum', 'A'),
(4, 'Kegiatan pembelajaran yang mendidik', 'A'),
(5, 'Pengembangan potensi peserta didik', 'A'),
(6, 'Komunikasi dengan peserta didik', 'A'),
(7, 'Penilaian dan evaluasi', 'A'),
(8, 'Bertindak sesuai dengan norma agama, hukum, sosial dan kebudayaan nasional Indonesia', 'B'),
(9, 'Menunjukan pribadi yang dewasa dan teladan', 'B'),
(10, 'Etos Kerja, tanggung jawab yang tinggi,dan rasa bangga menjadi guru', 'B'),
(11, 'Bersifat Inklusif, Bertindak objektif, serta tidak diskiminatif', 'C'),
(12, 'Komunikasi  dengan  sesama  guru,  tenaga  kependidikan,  orang tua peserta didik, dan masyarakat', 'C'),
(13, 'Penguasaan materi, struktur,  konsep dan pola pikir keilmuan yang mendukung mata pelajaran yang diampu', 'D'),
(14, 'Mengembangkan keprofesionalan melalui tindakan reflektif', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `t_pangkat`
--

CREATE TABLE `t_pangkat` (
  `id_pangkat` int(11) NOT NULL,
  `nama_pangkat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pangkat`
--

INSERT INTO `t_pangkat` (`id_pangkat`, `nama_pangkat`) VALUES
(1, 'Juru Muda, I/a'),
(2, 'Juru Muda Tingkat I, I/b'),
(3, 'Juru, I/c'),
(4, 'Juru Tingkat I,I /d'),
(5, 'Pengatur Muda, II/a'),
(6, 'Pengatur Muda Tingkat I, II/b'),
(7, 'Pengatur, II/c'),
(8, 'Pengatur Tingkat I, II/d'),
(9, 'Penata Muda, III/a'),
(10, 'Penata Muda Tingkat I, III/b'),
(11, 'Penata, III/c'),
(12, 'Penata Tingkat I, III/d'),
(13, 'Pembina, IV/a'),
(14, 'Pembina Tingkat I, IV/b'),
(15, 'Pembina Utama Muda, IV/c'),
(16, 'Pembina Utama Madya, IV/d'),
(17, 'Pembina Utama, IV/e');

-- --------------------------------------------------------

--
-- Table structure for table `t_pendidikan`
--

CREATE TABLE `t_pendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `nama_pendidikan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pendidikan`
--

INSERT INTO `t_pendidikan` (`id_pendidikan`, `nama_pendidikan`) VALUES
(1, 'MANAJEMEN PENDIDIKAN'),
(2, 'PEND.BAHASA DAN SASTRA INDONESIA'),
(3, 'PEND.EKONOMI PERUSAHAAN'),
(4, 'PEND.BAHASA INDONESIA'),
(5, 'PSIKOLOGI PEND.DAN BIMBINGAN'),
(6, 'PKN DAN HUKUM'),
(7, 'PENDIDIKAN LUAR BIASA'),
(8, 'PENGEMBANGAN KURIKULUM'),
(9, 'PENDIDIKAN MATEMATIKA'),
(10, 'PENDIDIKAN OLAH RAGA');

-- --------------------------------------------------------

--
-- Table structure for table `t_penilaian`
--

CREATE TABLE `t_penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `id_nilai` int(11) NOT NULL,
  `id_bagian` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_penilaian`
--

INSERT INTO `t_penilaian` (`id_penilaian`, `id_nilai`, `id_bagian`, `id_guru`, `nilai`) VALUES
(87, 1, 1, 3, 2),
(88, 2, 1, 3, 2),
(89, 3, 1, 3, 2),
(90, 4, 1, 3, 2),
(91, 5, 1, 3, 2),
(92, 6, 1, 3, 1),
(93, 1, 1, 1, 0),
(94, 2, 1, 1, 1),
(95, 3, 1, 1, 1),
(96, 4, 1, 1, 2),
(97, 5, 1, 1, 1),
(98, 6, 1, 1, 2),
(99, 7, 2, 3, 2),
(100, 8, 2, 3, 1),
(101, 9, 2, 3, 0),
(102, 10, 2, 3, 0),
(103, 11, 2, 3, 1),
(104, 12, 2, 3, 2),
(105, 7, 2, 1, 0),
(106, 8, 2, 1, 1),
(107, 9, 2, 1, 2),
(108, 51, 9, 1, 0),
(109, 1, 1, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `t_penilaianskp`
--

CREATE TABLE `t_penilaianskp` (
  `id_penilaian` int(11) NOT NULL,
  `id_nilskp` int(11) NOT NULL,
  `id_bagian` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_penilaian_c`
--

CREATE TABLE `t_penilaian_c` (
  `id_penilaian` int(11) NOT NULL,
  `id_komp` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `nilai` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_penilaian_c`
--

INSERT INTO `t_penilaian_c` (`id_penilaian`, `id_komp`, `id_guru`, `nilai`) VALUES
(1, 1, 1, 1),
(2, 2, 1, 2),
(3, 3, 1, 3),
(4, 4, 1, 2),
(5, 5, 1, 1),
(6, 6, 1, 3),
(7, 7, 1, 1),
(8, 8, 1, 1),
(9, 9, 1, 3),
(10, 10, 1, 2),
(11, 11, 1, 1),
(12, 12, 1, 1),
(13, 13, 1, 2),
(14, 14, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_sekolah`
--

CREATE TABLE `t_sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `provinsi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_sekolah`
--

INSERT INTO `t_sekolah` (`id_sekolah`, `nama_sekolah`, `alamat`, `kelurahan`, `kecamatan`, `kota`, `provinsi`) VALUES
(1, 'SMAN 4 BANDUNG', 'Jalan Gardujati No. 20 Bandung', 'Kebon Jeruk', 'Andir', 'Kota Bandung', 'Jawa Barat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `privmsgs`
--
ALTER TABLE `privmsgs`
  ADD UNIQUE KEY `privmsg_id` (`privmsg_id`);

--
-- Indexes for table `privmsgs_to`
--
ALTER TABLE `privmsgs_to`
  ADD UNIQUE KEY `pmto_id` (`pmto_id`);

--
-- Indexes for table `t_dataguru`
--
ALTER TABLE `t_dataguru`
  ADD PRIMARY KEY (`id_guru`,`NIP`),
  ADD KEY `id_pendidikan` (`id_pendidikan`,`id_pangkat`,`id_jabatan`,`id_tugas`,`id_sekolah`),
  ADD KEY `id_pangkat` (`id_pangkat`),
  ADD KEY `id_jabatan` (`id_jabatan`),
  ADD KEY `id_tugas` (`id_tugas`),
  ADD KEY `id_sekolah` (`id_sekolah`),
  ADD KEY `level` (`id_level`),
  ADD KEY `NIP` (`NIP`),
  ADD KEY `id_penilai` (`id_penilai`);

--
-- Indexes for table `t_jabatan`
--
ALTER TABLE `t_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `t_level`
--
ALTER TABLE `t_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `t_login`
--
ALTER TABLE `t_login`
  ADD PRIMARY KEY (`id_login`),
  ADD KEY `id_level` (`id_level`),
  ADD KEY `NIP` (`NIP`);

--
-- Indexes for table `t_matpel`
--
ALTER TABLE `t_matpel`
  ADD PRIMARY KEY (`id_tugas`);

--
-- Indexes for table `t_nilaihasil`
--
ALTER TABLE `t_nilaihasil`
  ADD PRIMARY KEY (`id_hasilnilai`),
  ADD KEY `id_guru` (`id_guru`),
  ADD KEY `id_penilaian` (`id_penilaian`);

--
-- Indexes for table `t_nilaihasilskp`
--
ALTER TABLE `t_nilaihasilskp`
  ADD PRIMARY KEY (`id_hasilskp`),
  ADD KEY `id_guru` (`id_guru`);

--
-- Indexes for table `t_nilaihasil_c`
--
ALTER TABLE `t_nilaihasil_c`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_guru` (`id_guru`);

--
-- Indexes for table `t_nilaikomp`
--
ALTER TABLE `t_nilaikomp`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `t_nilaikompskp`
--
ALTER TABLE `t_nilaikompskp`
  ADD PRIMARY KEY (`id_nilskp`);

--
-- Indexes for table `t_nilaikomp_c`
--
ALTER TABLE `t_nilaikomp_c`
  ADD PRIMARY KEY (`id_komp`);

--
-- Indexes for table `t_pangkat`
--
ALTER TABLE `t_pangkat`
  ADD PRIMARY KEY (`id_pangkat`);

--
-- Indexes for table `t_pendidikan`
--
ALTER TABLE `t_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `t_penilaian`
--
ALTER TABLE `t_penilaian`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `id_nilai` (`id_nilai`),
  ADD KEY `id_guru` (`id_guru`);

--
-- Indexes for table `t_penilaianskp`
--
ALTER TABLE `t_penilaianskp`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `id_nilai` (`id_nilskp`),
  ADD KEY `id_guru` (`id_guru`);

--
-- Indexes for table `t_penilaian_c`
--
ALTER TABLE `t_penilaian_c`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `id_komp` (`id_komp`),
  ADD KEY `id_guru` (`id_guru`);

--
-- Indexes for table `t_sekolah`
--
ALTER TABLE `t_sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `privmsgs`
--
ALTER TABLE `privmsgs`
  MODIFY `privmsg_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `privmsgs_to`
--
ALTER TABLE `privmsgs_to`
  MODIFY `pmto_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `t_dataguru`
--
ALTER TABLE `t_dataguru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `t_jabatan`
--
ALTER TABLE `t_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `t_level`
--
ALTER TABLE `t_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `t_login`
--
ALTER TABLE `t_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `t_matpel`
--
ALTER TABLE `t_matpel`
  MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `t_nilaihasil`
--
ALTER TABLE `t_nilaihasil`
  MODIFY `id_hasilnilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `t_nilaihasilskp`
--
ALTER TABLE `t_nilaihasilskp`
  MODIFY `id_hasilskp` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_nilaihasil_c`
--
ALTER TABLE `t_nilaihasil_c`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t_nilaikomp`
--
ALTER TABLE `t_nilaikomp`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `t_nilaikompskp`
--
ALTER TABLE `t_nilaikompskp`
  MODIFY `id_nilskp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `t_nilaikomp_c`
--
ALTER TABLE `t_nilaikomp_c`
  MODIFY `id_komp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `t_pangkat`
--
ALTER TABLE `t_pangkat`
  MODIFY `id_pangkat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `t_pendidikan`
--
ALTER TABLE `t_pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `t_penilaian`
--
ALTER TABLE `t_penilaian`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT for table `t_penilaianskp`
--
ALTER TABLE `t_penilaianskp`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_penilaian_c`
--
ALTER TABLE `t_penilaian_c`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `t_sekolah`
--
ALTER TABLE `t_sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_dataguru`
--
ALTER TABLE `t_dataguru`
  ADD CONSTRAINT `t_dataguru_ibfk_1` FOREIGN KEY (`id_pendidikan`) REFERENCES `t_pendidikan` (`id_pendidikan`),
  ADD CONSTRAINT `t_dataguru_ibfk_2` FOREIGN KEY (`id_pangkat`) REFERENCES `t_pangkat` (`id_pangkat`),
  ADD CONSTRAINT `t_dataguru_ibfk_3` FOREIGN KEY (`id_jabatan`) REFERENCES `t_jabatan` (`id_jabatan`),
  ADD CONSTRAINT `t_dataguru_ibfk_4` FOREIGN KEY (`id_tugas`) REFERENCES `t_matpel` (`id_tugas`),
  ADD CONSTRAINT `t_dataguru_ibfk_5` FOREIGN KEY (`id_sekolah`) REFERENCES `t_sekolah` (`id_sekolah`),
  ADD CONSTRAINT `t_dataguru_ibfk_7` FOREIGN KEY (`id_level`) REFERENCES `t_level` (`id_level`);

--
-- Constraints for table `t_login`
--
ALTER TABLE `t_login`
  ADD CONSTRAINT `t_login_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `t_level` (`id_level`),
  ADD CONSTRAINT `t_login_ibfk_2` FOREIGN KEY (`NIP`) REFERENCES `t_dataguru` (`NIP`);

--
-- Constraints for table `t_nilaihasil`
--
ALTER TABLE `t_nilaihasil`
  ADD CONSTRAINT `t_nilaihasil_ibfk_4` FOREIGN KEY (`id_guru`) REFERENCES `t_dataguru` (`id_guru`);

--
-- Constraints for table `t_nilaihasilskp`
--
ALTER TABLE `t_nilaihasilskp`
  ADD CONSTRAINT `t_nilaihasilskp_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `t_dataguru` (`id_guru`);

--
-- Constraints for table `t_nilaihasil_c`
--
ALTER TABLE `t_nilaihasil_c`
  ADD CONSTRAINT `idguru` FOREIGN KEY (`id_guru`) REFERENCES `t_dataguru` (`id_guru`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `t_penilaian`
--
ALTER TABLE `t_penilaian`
  ADD CONSTRAINT `fk_id_guru` FOREIGN KEY (`id_guru`) REFERENCES `t_dataguru` (`id_guru`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_id_nilai` FOREIGN KEY (`id_nilai`) REFERENCES `t_nilaikomp` (`id_nilai`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `t_penilaianskp`
--
ALTER TABLE `t_penilaianskp`
  ADD CONSTRAINT `t_penilaianskp_ibfk_1` FOREIGN KEY (`id_nilskp`) REFERENCES `t_nilaikompskp` (`id_nilskp`),
  ADD CONSTRAINT `t_penilaianskp_ibfk_2` FOREIGN KEY (`id_guru`) REFERENCES `t_dataguru` (`id_guru`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
