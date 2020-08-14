-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2019 at 09:35 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_informasi`
--

CREATE TABLE `admin_informasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `konten_informasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_informasi`
--

INSERT INTO `admin_informasi` (`id`, `judul`, `konten_informasi`) VALUES
(25, 'Pendaftaran Beasiswa Mahaghora', 'Kabar baik, pendaftaran beasiswa Mahaghora 2019 telah dibuka. Bagi kamu siswa/siswi yang berniat melanjutkan kuliah ke jenjang Strata 1 (S1) dan Diploma (D4) tapi terkendala biaya, yuk daftar beasiswa Mahaghora. Beasiswa Mahaghora 2019 membuka pendaftaran beasiswa untuk yang akan kuliah di tahun 2020 nanti.\r\n\r\nBeasiswa Mahaghora merupakan program CSR  (Corporate Social Responsibility) dari PT Mahaghora. PT Mahaghora bergerak di bidang agrobisnis, industri makanan, dan distribusi.\r\n\r\nJadwal Pendaftaran Beasiswa Mahaghora 2019:\r\nPendaftaran dibuka pada tanggal 11 Oktober 2019 sampai 15 November 2019. \r\n\r\nPendaftaran dibuka secara online. Pendaftar mengisi data diri di laman https://pendaftaran.beasiswamahaghora.com/\r\n\r\nSyarat dan Ketentuan Pendaftar Beasiswa Mahaghora 2019:\r\nSiswa-siswi SMA/SMK/sederajat kelas 12 tahun ajaran 2019/2020\r\nLulusan SMA/SMK/sederajat tahun 2018 dan 2019\r\nMemiliki Surat Keterangan Tidak Mampu minimal dari kelurahan\r\nMemiliki visi yang jelas dan motivasi yang kuat untuk menggapai cita-citanya\r\nTidak sedang menerima/mengikuti beasiswa lain\r\nDiutamakan memiliki pengalaman dalam berorganisasi\r\nPeserta beasiswa diwajibkan untuk kuliah di Surabaya sesuai dengan minat/jurusan.\r\nMemiliki prestasi/kejuaraan dalam bidang akademik maupun non akademik selama SMA (dibuktikan dengan sertifikat)\r\nAdapun Biaya-Biaya yang ditanggung Beasiswa Mahaghora meliputi:\r\nbiaya pendaftaran kuliah\r\nbiaya kuliah hingga maksimal 8 semester\r\nBiaya-Biaya yang TIDAK ditanggung Beasiswa Mahaghora meliputi:\r\nbiaya hidup\r\nakomodasi\r\nbuku\r\nbiaya praktik\r\nkeperluan kuliah lainnya\r\nKriteria yang akan diseleksi:\r\nNilai akademis\r\nKeaktifan dan kemampuan berorganisasi\r\nMemiliki komitmen yang tinggi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_informasi`
--
ALTER TABLE `admin_informasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_informasi`
--
ALTER TABLE `admin_informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
