-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2020 at 04:01 PM
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
-- Table structure for table `administrasi_data`
--

CREATE TABLE `administrasi_data` (
  `id` int(11) NOT NULL,
  `id_jenisbeasiswa` varchar(30) NOT NULL,
  `nobp` varchar(30) NOT NULL,
  `status` enum('Lulus','Tidak Lulus') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrasi_data`
--

INSERT INTO `administrasi_data` (`id`, `id_jenisbeasiswa`, `nobp`, `status`) VALUES
(1, '1', '1711082050', 'Lulus'),
(2, '1', '1711082021', 'Lulus');

-- --------------------------------------------------------

--
-- Table structure for table `admin_informasi`
--

CREATE TABLE `admin_informasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `konten_informasi` text NOT NULL,
  `id_jenis_beasiswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_informasi`
--

INSERT INTO `admin_informasi` (`id`, `judul`, `konten_informasi`, `id_jenis_beasiswa`) VALUES
(1, 'Pendaftaran Beasiswa Mahaghora', 'zdtnjymyr,mzsyu', 1),
(2, 'ekpo', 'anETGM H ', 2);

-- --------------------------------------------------------

--
-- Table structure for table `admin_jadwalseleksi`
--

CREATE TABLE `admin_jadwalseleksi` (
  `id` int(11) NOT NULL,
  `nama_seleksi` varchar(30) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `pengumuman` date NOT NULL,
  `id_jenis_beasiswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_jadwalseleksi`
--

INSERT INTO `admin_jadwalseleksi` (`id`, `nama_seleksi`, `tanggal_mulai`, `tanggal_selesai`, `pengumuman`, `id_jenis_beasiswa`) VALUES
(1, 'Administrasi', '2019-11-06', '2019-11-21', '2019-11-22', 1),
(2, 'wawancara', '2020-01-10', '2020-01-11', '2020-01-13', 2);

-- --------------------------------------------------------

--
-- Table structure for table `admin_panduan`
--

CREATE TABLE `admin_panduan` (
  `id` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `konten_panduan` text NOT NULL,
  `id_jenis_beasiswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_panduan`
--

INSERT INTO `admin_panduan` (`id`, `judul`, `konten_panduan`, `id_jenis_beasiswa`) VALUES
(3, 'Panduan Pendaftaran Bidikmisi', '<lo>\r\n<li>Bagi siswa:\r\na. Penerima KIP: dapat langsung melakukan pendaftaran secara mandiri pada website LTMPT atau Bidikmisi. Untuk pendaftar Bidikmisi jalur PMDK-PN, UMPN dan Seleksi Mandiri dapat langsung melakukan pendaftaran secara mandiri pada website Bidikmisi sampai mendapatkan KAP dan PIN.\r\nb. Bukan Penerima KIP: mendaftar ke sekolah untuk direkomendasikan.</li>\r\n<li>Bagi sekolah:\r\na. Sudah memiliki Kode Akses Sekolah: langsung merekomendasikan masing-masing siswa melalui website Bidikmisi menggunakan kombinasi NPSN dan NISN.\r\nb. Belum memiliki Kode Akses Sekolah: mendaftarkan diri sebagai institusi pemberi rekomendasi ke website Bidikmisi dengan melampirkan scan Lampiran 1 bagian persetujuan dan tanda tangan. Ditjen Belmawa Kemenristekdikti memverifikasi pendaftaran sekolah dan mengeluarkan Kode Akses Sekolah (1Ã—24 jam pada hari dan jam kerja).\r\nPihak sekolah memberikan nomer pendaftaran dan kode akses kepada siswa yang sudah direkomendasikan.\r\nSiswa mendaftar melalui website Bidikmisi dan menyelesaikan semua tahapan dalam sistem pendaftaran.\r\nBagi pelamar Bidikmisi jalur PMDK-PN, UMPN dan Seleksi Mandiri, KAP dan PIN yang didapat dari sistem Bidikmisi (yang telah dilakukan pada poin nomer 4) digunakan dalam pendaftaran seleksi masuk perguruan tinggi.\r\nBagi calon mahasiswa penerima Bidikmisi yang telah dinyatakan diterima di Perguruan Tinggi, akan dilakukan verifikasi lebih lanjut dan penetapan kelayakan mahasiswa penerima Bidikmisi oleh perguruan tinggi dengan mempertimbangkan dokumen pendukung.</li>\r\n</lo>', 1),
(4, 'ekpo', 'hkgdyucfjh', 2),
(5, 'ekpo', 'khgcfu', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_persyaratan`
--

CREATE TABLE `admin_persyaratan` (
  `id` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `konten_persyaratan` text NOT NULL,
  `id_jenis_beasiswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_persyaratan`
--

INSERT INTO `admin_persyaratan` (`id`, `judul`, `konten_persyaratan`, `id_jenis_beasiswa`) VALUES
(2, 'Persyaratan Bidikmisi', '<lo>\r\n<li>Merupakan siswa SMA/Sederajat yang akan lulus pada tahun 2019 atau lulusan tahun 2018.</li>\r\n<li>Mempunyai potensi akademik baik namun mempunyai keterbatasan ekonomi yang didukung bukti dokumen yang sah. Bukti dokumen dapat berupa \r\n       </n> kepemilikan Kartu Indonesia Pintar (KIP) atau pendapatan kotor gabungan orang tua/wali senilai Rp 4.000.000,- (empat juta rupiah) atau pendapatan kotor \r\n        </n>gabungan orang tua/wali dibagi jumlah anggota keluarga maksimal Rp 750.000,- (tujuh ratus lima puluh ribu rupiah).</li>\r\n<li>Lulus seleksi penerimaan mahasiswa baru pada perguruan tinggi.</li>\r\n<li>Terdaftar pada sistem Bidikmisi dengan memasukkan NPSN dan NISN yang valid.</li>\r\n</lo>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_mahasiswa`
--

CREATE TABLE `data_mahasiswa` (
  `no_bp` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `agama` char(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `status_ayah` char(10) NOT NULL,
  `pendidikan_ayah` varchar(30) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `penghasilan_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `status_ibu` char(10) NOT NULL,
  `pendidikan_ibu` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `penghasilan_ibu` varchar(50) NOT NULL,
  `jumlah_tanggungan` varchar(10) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `semester` varchar(30) NOT NULL,
  `ipk` varchar(50) NOT NULL,
  `sekolah_asal` varchar(50) NOT NULL,
  `nilai_ijazah` varchar(50) NOT NULL,
  `surat_tidak_mampu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`no_bp`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `email`, `no_telepon`, `alamat`, `nama_ayah`, `status_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `nama_ibu`, `status_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `jumlah_tanggungan`, `jurusan`, `prodi`, `semester`, `ipk`, `sekolah_asal`, `nilai_ijazah`, `surat_tidak_mampu`) VALUES
('1711082007', 'farhan', 'padang', '2019-12-14', 'L', 'Islam', 'ari@gmail.com', '0812345678899', 'zdnf', 'dgntgn', 'Hidup', 'SD', 'Pensiunan', 'sBF', 'fdsBf', 'Hidup', 'SD', 'Ibu Rumah Tangga', 'zstm', 'zets', 'TI', 'RPL', '5', 'szetjetj', 'zeats', '8.0', '677439.jpg'),
('1711082021', 'iding', 'padang', '2020-01-11', 'L', 'Islam', 'idingaidil@gmail.com', '0812345678899', 'jhvh yh ', 'dgntgn', 'Hidup', 'SD', 'agnt', 'zdgndgtn', 'fdsBf', 'Hidup', 'SD', 'xhym fhy', 'zstm', 'zets', 'Teknologi Informasi', 'D4-Teknologi Rekayasa Perangkat Lunak', '5', '4.00', 'SMAN2 PADANG', '8.0', 'Hujan deras - Istimewa.jpg'),
('1711082036', 'andre', 'padang', '2019-12-03', 'L', 'Islam', 'idingaidil@gmail.com', '0812345678899', 'panyabungan   ', 'boby', 'Hidup', 'SMA', 'TNI', '2500000', 'Sarah', 'Hidup', 'SMA', 'Ibu Rumah Tangga', '-', '1', '', '', '5', '4.00', 'SMAN2 PADANG', '8.0', 'Carolina Zambelo.jpg'),
('1711082050', 'Rizkhan Hadi', 'Padang', '2019-12-27', 'L', 'Islam', 'idingaidil@gmail.com', '0812345678899', 'Taruko 1 By Pass', 'boby', 'Hidup', 'SD', 'yskmry', 'trmts', 'fdsBf', 'Hidup', 'SD', 'Ibu Rumah Tangga', '-', '1', 'Teknologi Informasi', 'Teknologi Rekayasa Perangkat Lunak', '5', '4.00', 'SMAN2 PADANG', '8.0', '2e2b223c82487a3c5906f066c4a8fbe6.png');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_beasiswa`
--

CREATE TABLE `jenis_beasiswa` (
  `id_jenis_beasiswa` int(11) NOT NULL,
  `jenis_beasiswa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_beasiswa`
--

INSERT INTO `jenis_beasiswa` (`id_jenis_beasiswa`, `jenis_beasiswa`) VALUES
(1, 'Bidikmisi'),
(2, 'Penurunan UKT');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama_jurusan`) VALUES
(2, 'Teknologi Informasi'),
(4, 'Teknik Sipil'),
(5, 'Administrasi Niaga'),
(6, 'Akuntansi'),
(7, 'Bahasa Inggris'),
(8, 'Teknik Mesin'),
(9, 'Teknik Elektro');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(11) NOT NULL,
  `nama_prodi` varchar(50) NOT NULL,
  `id_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `nama_prodi`, `id_jurusan`) VALUES
(1, 'D4-Teknologi Rekayasa Perangkat Lunak', 2),
(2, 'D3-Manajemen Informatika', 2),
(3, 'D3-Teknik Komputer', 2),
(4, 'D3-Teknik Sipil', 4),
(5, 'D4-Manajemen Rekayasa Rekonstruksi', 4),
(6, 'D4-Perencanaan Jalan Jembatan', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telepon` varchar(30) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `hash` varchar(100) NOT NULL,
  `aktif` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nama`, `username`, `password`, `level`, `email`, `telepon`, `photo`, `hash`, `aktif`) VALUES
('rama', '1711082003', '202cb962ac59075b964b07152d234b70', 'Mahasiswa', 'idingaidil@gmail.com', '081282712831', 'Hujan deras - Istimewa.jpg', 'd0fbf5766e11d88ba45e0f9a5b809c85e108e6f454a8e1d2705f9d69ef34fb8c', '0'),
('1711082013', '1711082013', '74ee55083a714aa3791f8d594fea00c9', 'Mahasiswa Mantap', 'maulsana25@gmail.com', '081209098765', 'default.jpg', 'd0fbf5766e11d88ba45e0f9a5b809c85e108e6f454a8e1d2705f9d69ef34fb8c', '0'),
('iding', '1711082021', '202cb962ac59075b964b07152d234b70', 'Mahasiswa', 'idingaidil0@gmail.com', '081234567803', 'Hujan deras - Istimewa.jpg', 'd0fbf5766e11d88ba45e0f9a5b809c85e108e6f454a8e1d2705f9d69ef34fb8c', '0'),
('ari', '1711082050', 'fc292bd7df071858c2d0f955545673c1', 'Mahasiswa', 'idingaidil89@gmail.com', '081234567891', 'Hujan deras - Istimewa.jpg', '987ffe53208ca51a32ef2e8eb0cb6eee810c8a98e011f1a5ae190b0ae7f73f24', '1'),
('gabriel', '1711082051', '639bee393eecbc62256936a8e64d17b1', 'Mahasiswa', 'idingaidi8l@gmail.com', '081234567891', 'default2.jpg', '1fe15a967e1f286da7564d663b8bccdd0a8e119837160ad1018d6acf4da031e2', '0'),
('boby', 'boby', 'c83e4046a7c5d3c4bf4c292e1e6ec681', 'Penyeleksi', 'idingaidil9@gmail.com', '0751497995', 'default2.jpg', '630d575a44c272752de6eec026eb8bb3e6e118869fc5eb132b12caa0b3fcc102', '0'),
('hamdu', 'hamdu', '24761d456b00fac899ec80b8efb38596', 'Admin', 'hamdualrozak01@gmail.com', '0751497995', 'Hujan deras - Istimewa.jpg', 'ae2c0f74808ec776b7f08badbc366779124c58cc7e8c7cec5635438ca1e85508', '0'),
('rani', 'rani', 'b9f81618db3b0d7a8be8fd904cca8b6a', 'Penyeleksi', 'idingaidil10@gmail.com', '0751497995', 'Hujan deras - Istimewa.jpg', '630d575a44c272752de6eec026eb8bb3e6e118869fc5eb132b12caa0b3fcc102', '0');

-- --------------------------------------------------------

--
-- Table structure for table `wawancara`
--

CREATE TABLE `wawancara` (
  `id` int(11) NOT NULL,
  `id_jenisbeasiswa_` varchar(30) NOT NULL,
  `nobp_` varchar(20) NOT NULL,
  `ekonomi` varchar(30) NOT NULL,
  `akademik` varchar(30) NOT NULL,
  `non_akademik` varchar(30) NOT NULL,
  `keluarga` varchar(30) NOT NULL,
  `keseharian` varchar(30) NOT NULL,
  `total` varchar(30) NOT NULL,
  `status` enum('Lulus','Tidak Lulus') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wawancara`
--

INSERT INTO `wawancara` (`id`, `id_jenisbeasiswa_`, `nobp_`, `ekonomi`, `akademik`, `non_akademik`, `keluarga`, `keseharian`, `total`, `status`) VALUES
(14, '', '1711082050', '15', '17', '13', '15', '17', '77', 'Lulus'),
(15, '', '1711082021', '20', '17', '13', '10', '10', '70', 'Lulus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrasi_data`
--
ALTER TABLE `administrasi_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jenisbeasiswa` (`id_jenisbeasiswa`);

--
-- Indexes for table `admin_informasi`
--
ALTER TABLE `admin_informasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jenis_beasiswa` (`id_jenis_beasiswa`);

--
-- Indexes for table `admin_jadwalseleksi`
--
ALTER TABLE `admin_jadwalseleksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jenis_beasiswa` (`id_jenis_beasiswa`);

--
-- Indexes for table `admin_panduan`
--
ALTER TABLE `admin_panduan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jenis_beasiswa` (`id_jenis_beasiswa`);

--
-- Indexes for table `admin_persyaratan`
--
ALTER TABLE `admin_persyaratan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jenis_beasiswa` (`id_jenis_beasiswa`);

--
-- Indexes for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  ADD PRIMARY KEY (`no_bp`),
  ADD KEY `jurusan` (`jurusan`),
  ADD KEY `prodi` (`prodi`);

--
-- Indexes for table `jenis_beasiswa`
--
ALTER TABLE `jenis_beasiswa`
  ADD PRIMARY KEY (`id_jenis_beasiswa`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `wawancara`
--
ALTER TABLE `wawancara`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrasi_data`
--
ALTER TABLE `administrasi_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_informasi`
--
ALTER TABLE `admin_informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_jadwalseleksi`
--
ALTER TABLE `admin_jadwalseleksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_panduan`
--
ALTER TABLE `admin_panduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin_persyaratan`
--
ALTER TABLE `admin_persyaratan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis_beasiswa`
--
ALTER TABLE `jenis_beasiswa`
  MODIFY `id_jenis_beasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wawancara`
--
ALTER TABLE `wawancara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_informasi`
--
ALTER TABLE `admin_informasi`
  ADD CONSTRAINT `admin_informasi_ibfk_1` FOREIGN KEY (`id_jenis_beasiswa`) REFERENCES `jenis_beasiswa` (`id_jenis_beasiswa`);

--
-- Constraints for table `admin_jadwalseleksi`
--
ALTER TABLE `admin_jadwalseleksi`
  ADD CONSTRAINT `admin_jadwalseleksi_ibfk_1` FOREIGN KEY (`id_jenis_beasiswa`) REFERENCES `jenis_beasiswa` (`id_jenis_beasiswa`);

--
-- Constraints for table `admin_panduan`
--
ALTER TABLE `admin_panduan`
  ADD CONSTRAINT `admin_panduan_ibfk_1` FOREIGN KEY (`id_jenis_beasiswa`) REFERENCES `jenis_beasiswa` (`id_jenis_beasiswa`);

--
-- Constraints for table `admin_persyaratan`
--
ALTER TABLE `admin_persyaratan`
  ADD CONSTRAINT `admin_persyaratan_ibfk_1` FOREIGN KEY (`id_jenis_beasiswa`) REFERENCES `jenis_beasiswa` (`id_jenis_beasiswa`);

--
-- Constraints for table `prodi`
--
ALTER TABLE `prodi`
  ADD CONSTRAINT `prodi_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
