-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2018 at 03:03 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e_counseling`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `group` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_user`, `username`, `password`, `group`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 1),
(2, 'wiwit', '98bf7a196cfd2877debebd49030ecd79', 2),
(3, 'Septi', 'cbafca7a2bf07ed34a9effaf2f7763af', 3),
(4, 'Agung', '6f5d0ad4bc971cddc51a0c5f74bdf3fd', 2),
(8, 'indra', '643ae2b352a4917874655aedec5f52e1', 3),
(9, 'khodori', 'eaab374e79184f69b43c5367eb198687', 4),
(10, 'akbar', 'f039e5f60e85d10bf7b742e65ad931ca', 4),
(11, 'joko', '278ea841c0d133059032b8a75320c3e0', 3),
(12, '', 'd41d8cd98f00b204e9800998ecf8427e', 1),
(13, '', 'd41d8cd98f00b204e9800998ecf8427e', 1);

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE IF NOT EXISTS `group` (
  `nama` varchar(20) NOT NULL,
`id_group` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`nama`, `id_group`) VALUES
('ADMIN', 1),
('GURU BK', 2),
('ORANG TUA', 3),
('P.ABSENSI', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_absensi`
--

CREATE TABLE IF NOT EXISTS `tbl_absensi` (
`id_absensi` int(10) NOT NULL,
  `id_siswa` int(10) NOT NULL,
  `id_kelas` int(10) NOT NULL,
  `absensi` enum('H','A','I','S') NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_absensi`
--

INSERT INTO `tbl_absensi` (`id_absensi`, `id_siswa`, `id_kelas`, `absensi`, `tanggal`) VALUES
(1, 1, 1, 'I', '2018-01-17'),
(2, 2, 1, 'H', '2018-01-17'),
(3, 5, 1, 'S', '2018-01-17'),
(4, 1, 1, 'I', '2018-02-11'),
(5, 2, 1, 'H', '2018-02-11'),
(6, 5, 1, 'A', '2018-02-11'),
(7, 1, 1, 'I', '2018-02-13'),
(8, 2, 1, 'H', '2018-02-13'),
(9, 5, 1, 'I', '2018-02-13'),
(10, 1, 1, 'H', '2018-02-13'),
(11, 2, 1, 'I', '2018-02-13'),
(12, 5, 1, 'H', '2018-02-13'),
(13, 1, 1, 'A', '2018-02-20'),
(14, 2, 1, 'H', '2018-02-20'),
(15, 5, 1, 'S', '2018-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE IF NOT EXISTS `tbl_berita` (
`id_berita` int(7) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `tgl_berita` date NOT NULL,
  `berita` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `judul`, `tgl_berita`, `berita`) VALUES
(6, 'Informasi Hari Libur Sekoah', '2018-02-11', 'Diberitahukan kepada seluruh civitas akademika SMA N 01 Jatibarang bahwa hari libur sekolah akan di laksanakan pada tgl 22 february 2017 s/d 18 Maret 2017');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bimbingan`
--

CREATE TABLE IF NOT EXISTS `tbl_bimbingan` (
`id_bimbingan` int(11) NOT NULL,
  `id_siswa` int(7) NOT NULL,
  `nama_pembimbing` varchar(20) NOT NULL,
  `tgl_bimbingan` date NOT NULL,
  `hal_bimbingan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bimbingan`
--

INSERT INTO `tbl_bimbingan` (`id_bimbingan`, `id_siswa`, `nama_pembimbing`, `tgl_bimbingan`, `hal_bimbingan`) VALUES
(4, 1, 'wiwit', '2018-02-13', 'tidak mempunyai waktu luang'),
(5, 1, 'wiwit', '2018-02-13', 'selalu terlambat karena bergadang'),
(13, 5, 'wiwit', '2018-02-06', 'kekurangan waktu belajar'),
(14, 3, 'wiwit', '2018-02-13', 'terlambat setiap pagi'),
(15, 1, 'wiwit', '2018-02-14', 'bekerja untuk menghidupi keluarganya'),
(16, 1, 'wiwit', '2018-02-12', 'di harus bertobat'),
(17, 1, 'wiwit', '2018-02-19', 'tobat woi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE IF NOT EXISTS `tbl_guru` (
`id_guru` int(5) NOT NULL,
  `id_user` int(7) NOT NULL,
  `nama_guru` varchar(20) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `j_kelamin_guru` enum('L','P') NOT NULL,
  `alamat_guru` text NOT NULL,
  `telepon_guru` varchar(30) NOT NULL,
  `tgl_lahir_guru` date NOT NULL,
  `tpt_lahir_guru` varchar(100) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `photo_guru` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_guru`
--

INSERT INTO `tbl_guru` (`id_guru`, `id_user`, `nama_guru`, `nip`, `j_kelamin_guru`, `alamat_guru`, `telepon_guru`, `tgl_lahir_guru`, `tpt_lahir_guru`, `agama`, `photo_guru`) VALUES
(4, 2, 'Sri wiwit S', '233111', 'P', 'Jatibarang', '08977899', '1975-05-09', 'Jatibarang', 'Islam', 'sri-wiwit-s.jpg'),
(5, 4, 'Agung Dwi', '223311', 'L', 'Tegal', '087788', '1982-10-09', 'Tegal', 'Islam', 'Agung.jpg'),
(6, 3, 'Septi Kurniasih', '44332', 'P', 'Kelampis', '088799', '1972-01-11', 'Kelampis', 'Islam', 'septi-k-s-pd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenispel`
--

CREATE TABLE IF NOT EXISTS `tbl_jenispel` (
`id_pel` int(3) NOT NULL,
  `nama_pel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE IF NOT EXISTS `tbl_kelas` (
`id_kelas` int(5) NOT NULL,
  `nama_kelas` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, 'X IPA 1'),
(12, 'XI IPS 1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_laporansiswa`
--

CREATE TABLE IF NOT EXISTS `tbl_laporansiswa` (
`id_lprnsiswa` int(7) NOT NULL,
  `id_siswa` int(7) NOT NULL,
  `kejujuran` enum('Baik','Cukup baik','Sangat Baik','') NOT NULL,
  `kesopanan` enum('Baik','Cukup baik','Sangat Baik','') NOT NULL,
  `kedisiplinan` enum('Baik','Cukup baik','Sangat Baik','') NOT NULL,
  `kerajinan` enum('Baik','Cukup baik','Sangat Baik','') NOT NULL,
  `kebersihan` enum('Baik','Cukup baik','Sangat Baik','') NOT NULL,
  `kerapian` enum('Baik','Cukup baik','Sangat Baik','') NOT NULL,
  `hasil_akhir` enum('Baik','Cukup Baik','Sangat Baik','') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_laporansiswa`
--

INSERT INTO `tbl_laporansiswa` (`id_lprnsiswa`, `id_siswa`, `kejujuran`, `kesopanan`, `kedisiplinan`, `kerajinan`, `kebersihan`, `kerapian`, `hasil_akhir`) VALUES
(1, 1, 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik'),
(2, 5, 'Baik', 'Cukup baik', 'Sangat Baik', 'Sangat Baik', 'Baik', 'Baik', 'Baik');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orang_tua`
--

CREATE TABLE IF NOT EXISTS `tbl_orang_tua` (
`id_ortu` int(5) NOT NULL,
  `id_siswa` int(7) NOT NULL,
  `nis` int(20) NOT NULL,
  `id_user` int(7) NOT NULL,
  `nama_ortu` varchar(20) NOT NULL,
  `j_kelamin_ortu` enum('L','P') NOT NULL,
  `status_keluarga` enum('Bapak','Ibu','Wali') NOT NULL,
  `alamat` text NOT NULL,
  `telepon_ortu` varchar(15) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `KIP` enum('YES','NO') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_orang_tua`
--

INSERT INTO `tbl_orang_tua` (`id_ortu`, `id_siswa`, `nis`, `id_user`, `nama_ortu`, `j_kelamin_ortu`, `status_keluarga`, `alamat`, `telepon_ortu`, `pekerjaan`, `KIP`) VALUES
(5, 1, 0, 8, 'Indra Hidayat', 'L', 'Bapak', 'Songgom Lor', '08773044321', 'Petani', 'YES'),
(6, 5, 0, 11, 'Joko Suryono', 'L', 'Bapak', 'Randu sanga', '0833712234', 'Petani', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggaran`
--

CREATE TABLE IF NOT EXISTS `tbl_pelanggaran` (
`id_pelanggaran` int(7) NOT NULL,
  `id_siswa` int(7) NOT NULL,
  `pelanggaran` text NOT NULL,
  `tgl_kejadian` date NOT NULL,
  `id_sanksi` varchar(7) NOT NULL,
  `flag` enum('1','0') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pelanggaran`
--

INSERT INTO `tbl_pelanggaran` (`id_pelanggaran`, `id_siswa`, `pelanggaran`, `tgl_kejadian`, `id_sanksi`, `flag`) VALUES
(14, 1, 'membolos', '2018-01-08', '1', '1'),
(15, 1, 'merokok', '2018-01-18', '1', '1'),
(22, 5, 'terlambat', '2018-02-13', '1', '0'),
(23, 3, 'membolos', '2018-02-06', '1', '0'),
(25, 1, 'merokok', '2018-02-19', '1', '1'),
(26, 1, 'membolos', '2018-02-18', '2', '1'),
(35, 1, 'merokok', '2018-02-20', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanksi`
--

CREATE TABLE IF NOT EXISTS `tbl_sanksi` (
`id_sanksi` int(7) NOT NULL,
  `nama_sanksi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sanksi`
--

INSERT INTO `tbl_sanksi` (`id_sanksi`, `nama_sanksi`) VALUES
(1, 'toleransi'),
(2, 'pemanggilan 1'),
(3, 'pemanggilan 3'),
(4, 'sekorsing');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE IF NOT EXISTS `tbl_siswa` (
`id_siswa` int(5) NOT NULL,
  `nama_siswa` char(20) NOT NULL,
  `id_kelas` int(5) NOT NULL,
  `nis` int(20) NOT NULL,
  `j_kelamin_siswa` enum('L','P') NOT NULL,
  `tgl_lahir_siswa` date NOT NULL,
  `tpt_lahir_siswa` varchar(50) NOT NULL,
  `alamat_siswa` text NOT NULL,
  `agama` text NOT NULL,
  `telepon_siswa` varchar(15) NOT NULL,
  `photo_siswa` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_siswa`, `nama_siswa`, `id_kelas`, `nis`, `j_kelamin_siswa`, `tgl_lahir_siswa`, `tpt_lahir_siswa`, `alamat_siswa`, `agama`, `telepon_siswa`, `photo_siswa`) VALUES
(1, 'Wildan Efendi', 1, 12233, 'L', '1999-01-24', 'Brebes', 'Songgom Lor', 'Islam', '0877676', 'nendra.jpg'),
(2, 'Prili', 1, 12213, 'P', '1999-04-21', 'Tegal', 'Selawi', 'Islam', '089778', 'Prili.jpg'),
(3, 'nana', 12, 112233, 'P', '1999-08-23', 'Brebes', 'Pemaron', 'Islam', '08999', 'nana.jpg'),
(4, 'Joyo Chandra', 12, 22331, 'L', '1999-10-18', 'Brebes', 'Songgom', 'Islam', '0008999', 'joyo.JPG'),
(5, 'Aulia Prima', 1, 223112, 'P', '1998-07-11', 'Brebes', 'Randu Sanga', 'Islam', '089999887', 'Aulia.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `group`
--
ALTER TABLE `group`
 ADD PRIMARY KEY (`id_group`);

--
-- Indexes for table `tbl_absensi`
--
ALTER TABLE `tbl_absensi`
 ADD PRIMARY KEY (`id_absensi`);

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
 ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tbl_bimbingan`
--
ALTER TABLE `tbl_bimbingan`
 ADD PRIMARY KEY (`id_bimbingan`);

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
 ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tbl_jenispel`
--
ALTER TABLE `tbl_jenispel`
 ADD PRIMARY KEY (`id_pel`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
 ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tbl_laporansiswa`
--
ALTER TABLE `tbl_laporansiswa`
 ADD PRIMARY KEY (`id_lprnsiswa`);

--
-- Indexes for table `tbl_orang_tua`
--
ALTER TABLE `tbl_orang_tua`
 ADD PRIMARY KEY (`id_ortu`);

--
-- Indexes for table `tbl_pelanggaran`
--
ALTER TABLE `tbl_pelanggaran`
 ADD PRIMARY KEY (`id_pelanggaran`);

--
-- Indexes for table `tbl_sanksi`
--
ALTER TABLE `tbl_sanksi`
 ADD PRIMARY KEY (`id_sanksi`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
 ADD PRIMARY KEY (`id_siswa`), ADD UNIQUE KEY `id_siswa` (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `group`
--
ALTER TABLE `group`
MODIFY `id_group` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_absensi`
--
ALTER TABLE `tbl_absensi`
MODIFY `id_absensi` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
MODIFY `id_berita` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_bimbingan`
--
ALTER TABLE `tbl_bimbingan`
MODIFY `id_bimbingan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
MODIFY `id_guru` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_jenispel`
--
ALTER TABLE `tbl_jenispel`
MODIFY `id_pel` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
MODIFY `id_kelas` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_laporansiswa`
--
ALTER TABLE `tbl_laporansiswa`
MODIFY `id_lprnsiswa` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_orang_tua`
--
ALTER TABLE `tbl_orang_tua`
MODIFY `id_ortu` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_pelanggaran`
--
ALTER TABLE `tbl_pelanggaran`
MODIFY `id_pelanggaran` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `tbl_sanksi`
--
ALTER TABLE `tbl_sanksi`
MODIFY `id_sanksi` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
MODIFY `id_siswa` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
