-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2020 at 03:35 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websispensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_ruangan`
--

CREATE TABLE `daftar_ruangan` (
  `id_ruangan` int(11) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `kode_ruangan` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_ruangan`
--

INSERT INTO `daftar_ruangan` (`id_ruangan`, `nama_kelas`, `kode_ruangan`) VALUES
(1, 'Newmont 1', '001'),
(2, 'DIKTI', '002'),
(4, 'Lab.Komputer Lanjut', '003'),
(5, 'Lab.Komputer Dasar', '004'),
(6, 'Newmont 2', '005');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `nidn` varchar(50) NOT NULL,
  `kode_dosen` varchar(11) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `tanggal_bergabung` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nidn`, `kode_dosen`, `nama_dosen`, `username`, `password`, `alamat`, `jenis_kelamin`, `email`, `telp`, `photo`, `tanggal_bergabung`) VALUES
(13, '0808078101', 'RDM', 'Rodianto, M.Kom', 'rodianto', '202cb962ac59075b964b07152d234b70', 'Sumbawa, NTB', 'Laki-laki', 'sispensiutsinfo@gmail.com', '0808080808', 'Default7.jpg', '2019-07-17 11:13:34'),
(14, '0814078603', 'SE', 'Shinta Esabella, M.Ti', 'shinta', '202cb962ac59075b964b07152d234b70', 'Sumbawa, NTB', 'Laki-laki', 'sispensiutsinfo@gmail.com', '8080808080', 'Default8.jpg', '2019-07-17 11:46:14'),
(15, '0829118502', 'YM', 'Yudi Mulyanto, M.Kom', 'yudimulyanto', '202cb962ac59075b964b07152d234b70', 'Sumbawa, NTB', 'Laki-laki', 'sispensiutsinfo@gmail.com', '080808080', 'Default9.jpg', '2019-07-20 19:57:53'),
(16, '0817088603', 'MW', 'Rahmatri Mahardiko, M.Kom/ I Made Widiarta, S.Komp', 'madewidiarta', '202cb962ac59075b964b07152d234b70', 'Sumbawa, NTB', 'Laki-laki', 'sispensiutsinfo@gmail.com', '0808080808', 'Default10.jpg', '2019-07-20 19:59:13'),
(17, '0828099001', 'TD', 'Tommy Dwi Cahyono, S.Kom.,', 'tommy', '202cb962ac59075b964b07152d234b70', 'Sumbawa, NTB', 'Laki-laki', 'sispensiutsinfo@gmail.com', '080808080', 'Default11.jpg', '2019-07-20 20:00:24'),
(18, '0802098901', 'MH', 'M. Hidayatullah, M.Sc', 'hidayatullah', '202cb962ac59075b964b07152d234b70', 'Sumbawa, NTB', 'Laki-laki', 'sispensiutsinfo@gmail.com', '08080808080', 'Default12.jpg', '2019-07-20 20:02:16'),
(19, '199205042019021313', 'ES', 'Eri Sasmita Susanto, M.Kom.', 'sasmita', '202cb962ac59075b964b07152d234b70', 'Sumbawa, NTB', 'Laki-laki', 'sispensiutsinfo@gmail.com', '08080808', 'Default13.jpg', '2019-07-20 21:48:13');

-- --------------------------------------------------------

--
-- Table structure for table `dosen_pembimbing`
--

CREATE TABLE `dosen_pembimbing` (
  `id_dosenpmb` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_sempro`
--

CREATE TABLE `jadwal_sempro` (
  `kd_jadwal_sempro` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `dosbing1` varchar(255) NOT NULL,
  `nama_hari` date NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_akhir` time NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penguji1` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_sempro`
--

INSERT INTO `jadwal_sempro` (`kd_jadwal_sempro`, `nim`, `dosbing1`, `nama_hari`, `waktu_mulai`, `waktu_akhir`, `judul`, `penguji1`, `kelas`) VALUES
(1, 1501071089, 'Shinta Esabella, M.T', '2019-07-18', '11:00:00', '12:00:00', 'Aplikasi pendaftaran Skripsi', 'M. Hidayatullah, M.Sc', 'Newmont 1'),
(4, 1501071089, 'Yudi Mulyanto, M.Kom', '2019-08-01', '11:30:00', '12:30:00', 'Aplikasi Karyawan Berbasis Web', 'Shinta Esabella, M.Ti', 'Lab.Komputer Lanjut');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_skripsi`
--

CREATE TABLE `jadwal_skripsi` (
  `kd_jadwal_skripsi` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `dosbing1` varchar(255) NOT NULL,
  `nama_hari` date NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_akhir` time NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penguji1` varchar(255) NOT NULL,
  `penguji2` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(11) NOT NULL,
  `nama_lengkap` varchar(120) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(120) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `tanggal_bergabung` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `blokir` enum('N','Y') NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama_lengkap`, `password`, `email`, `telepon`, `tanggal_bergabung`, `blokir`, `jenis_kelamin`, `photo`) VALUES
(12, '1501071089', 'Rizal Jihadudin', 'c20ad4d76fe97759aa27a0c99bff6710', 'sispensiutsinfo@gmail.com', '0813313131313', '2019-07-24 05:42:50', 'N', 'Laki-laki', ''),
(13, '1501071090', 'Muhammad Abduh Robbani', '202cb962ac59075b964b07152d234b70', 'moch.abdoeh@rocketmail.com', '0813313131313', '2019-07-21 14:57:24', 'N', 'Laki-laki', ''),
(14, '1501071091', 'Pajar Aji Maulana', '7363a0d0604902af7b70b271a0b96480', 'pajaraji@gmail.com', '0813313131313', '2019-07-21 15:19:15', 'N', 'Laki-laki', 'IMG_1746.JPG'),
(15, '1501071099', 'rijal', '202cb962ac59075b964b07152d234b70', 'aldinnerozz@gmail.com', '', '2019-07-16 17:28:31', 'N', 'Laki-laki', ''),
(16, '1501071032', 'zzz', '202cb962ac59075b964b07152d234b70', 'sispensiutsinfo@gmail.com', '0813313131313', '2019-07-17 16:33:18', 'N', 'Laki-laki', 'Default.jpg'),
(17, '1501071023', 'Rizal Aldin', '25d55ad283aa400af464c76d713c07ad', 'rizalaldin67@gmail.com', '12345678', '2020-06-23 07:59:03', 'N', 'Laki-laki', 'DSC_0374.JPG'),
(18, '150107101', 'Rald', 'fcea920f7412b5da7be0cf42b8c93759', 'rizalaldin67@gmail.com', '12121', '2020-06-23 07:42:18', 'N', 'Laki-laki', 'DSC_0374.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE `proposal` (
  `id_proposal` int(20) NOT NULL,
  `nim` varchar(55) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `dosbing1` varchar(20) NOT NULL,
  `topik_skripsi` varchar(100) NOT NULL,
  `file_skripsi` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proposal`
--

INSERT INTO `proposal` (`id_proposal`, `nim`, `judul`, `dosbing1`, `topik_skripsi`, `file_skripsi`, `status`) VALUES
(32, '1501071023', 'Judul', 'Tommy Dwi Cahyono, S', 'Rekayasa Perangkat Lunak', 'Hadiah_Untuk_Programmer_-_Hilman_Ramadhan10.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sempro`
--

CREATE TABLE `sempro` (
  `id_sempro` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `file_sempro1` varchar(255) NOT NULL,
  `file_sempro2` varchar(255) NOT NULL,
  `file_sempro3` varchar(255) NOT NULL,
  `file_sempro4` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sidang`
--

CREATE TABLE `sidang` (
  `id_sidang` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `file_sidang1` varchar(255) NOT NULL,
  `file_sidang2` varchar(255) NOT NULL,
  `file_sidang3` varchar(255) NOT NULL,
  `file_sidang4` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id` int(3) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nidn` int(32) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`id`, `nama`, `nidn`, `photo`) VALUES
(1, 'Progam Studi', 90001, 'default.jpg'),
(2, 'rijal jihadudin', 122132, 'default.jpg\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `topik_skripsi`
--

CREATE TABLE `topik_skripsi` (
  `id_topik_skripsi` int(11) NOT NULL,
  `nama_topik` varchar(50) NOT NULL,
  `urutan` int(11) NOT NULL,
  `kode_dosen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topik_skripsi`
--

INSERT INTO `topik_skripsi` (`id_topik_skripsi`, `nama_topik`, `urutan`, `kode_dosen`) VALUES
(1, 'Jaringan', 1, 'RD'),
(2, 'Rekayasa Perangkat Lunak', 2, 'MW'),
(3, 'Artificial Intelegent', 3, 'ES');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` enum('admin','dosen','user') NOT NULL,
  `blokir` enum('N','Y') NOT NULL,
  `id_sessions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `level`, `blokir`, `id_sessions`) VALUES
(1, 'prodi', '32b404761d910d277789cd91076d1459', 'admin@gmail.com', 'admin', 'N', ''),
(2, 'raldin', '827ccb0eea8a706c4c34a16891f84e7b', 'raldzoo@infosispensi.com', 'admin', 'N', ''),
(3, 'dosen1', '202cb962ac59075b964b07152d234b70', 'sispensiutsinfo@gmail.com', 'dosen', 'N', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_ruangan`
--
ALTER TABLE `daftar_ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`),
  ADD UNIQUE KEY `nidn` (`nidn`);

--
-- Indexes for table `dosen_pembimbing`
--
ALTER TABLE `dosen_pembimbing`
  ADD PRIMARY KEY (`id_dosenpmb`);

--
-- Indexes for table `jadwal_sempro`
--
ALTER TABLE `jadwal_sempro`
  ADD PRIMARY KEY (`kd_jadwal_sempro`);

--
-- Indexes for table `jadwal_skripsi`
--
ALTER TABLE `jadwal_skripsi`
  ADD PRIMARY KEY (`kd_jadwal_skripsi`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`id_proposal`);

--
-- Indexes for table `sempro`
--
ALTER TABLE `sempro`
  ADD PRIMARY KEY (`id_sempro`);

--
-- Indexes for table `sidang`
--
ALTER TABLE `sidang`
  ADD PRIMARY KEY (`id_sidang`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topik_skripsi`
--
ALTER TABLE `topik_skripsi`
  ADD PRIMARY KEY (`id_topik_skripsi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_ruangan`
--
ALTER TABLE `daftar_ruangan`
  MODIFY `id_ruangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `dosen_pembimbing`
--
ALTER TABLE `dosen_pembimbing`
  MODIFY `id_dosenpmb` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal_sempro`
--
ALTER TABLE `jadwal_sempro`
  MODIFY `kd_jadwal_sempro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jadwal_skripsi`
--
ALTER TABLE `jadwal_skripsi`
  MODIFY `kd_jadwal_skripsi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
  MODIFY `id_proposal` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `sempro`
--
ALTER TABLE `sempro`
  MODIFY `id_sempro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=852;

--
-- AUTO_INCREMENT for table `sidang`
--
ALTER TABLE `sidang`
  MODIFY `id_sidang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `topik_skripsi`
--
ALTER TABLE `topik_skripsi`
  MODIFY `id_topik_skripsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
