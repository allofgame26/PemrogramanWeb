-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2024 at 09:03 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pbl`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `alumni_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `NIM` varchar(15) NOT NULL,
  `tahun_masuk` year(4) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `tahun_lulus` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `dosen_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `NIP` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `input_pakar`
--

CREATE TABLE `input_pakar` (
  `pakar_id` int(11) NOT NULL,
  `jawaban_responden_id` int(11) DEFAULT NULL,
  `nilai_md` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `mahasiswa_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `NIM` varchar(15) NOT NULL,
  `tahun_masuk` year(4) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mitra_industri`
--

CREATE TABLE `mitra_industri` (
  `mitra_industri_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `jabatan` varchar(100) NOT NULL,
  `perusahaan` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m_kategori`
--

CREATE TABLE `m_kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_kategori`
--

INSERT INTO `m_kategori` (`kategori_id`, `kategori_nama`) VALUES
(1, 'mahasiswa'),
(2, 'alumni'),
(3, 'dosen'),
(4, 'tendik'),
(5, 'ortu'),
(6, 'industri');

-- --------------------------------------------------------

--
-- Table structure for table `m_survey`
--

CREATE TABLE `m_survey` (
  `survey_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `survey_jenis` enum('survey pendidikan','survey layanan','survey fasilitas','lulusan') NOT NULL,
  `survey_deskripsi` text DEFAULT NULL,
  `survey_tanggal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_survey`
--

INSERT INTO `m_survey` (`survey_id`, `user_id`, `survey_jenis`, `survey_deskripsi`, `survey_tanggal`) VALUES
(1, 1, 'survey pendidikan', 'Survey tentang kurikulum pendidikan.', '2024-05-20 10:00:00'),
(2, 2, 'survey layanan', 'Survey tentang layanan administrasi.', '2024-05-21 11:30:00'),
(3, 3, 'survey fasilitas', 'Survey tentang fasilitas kampus.', '2024-05-22 09:45:00'),
(4, 1, 'lulusan', 'Survey tentang kinerja lulusan.', '2024-05-23 14:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `m_survey_soal`
--

CREATE TABLE `m_survey_soal` (
  `soal_id` int(11) NOT NULL,
  `survey_id` int(11) DEFAULT NULL,
  `kategori_id` int(11) DEFAULT NULL,
  `soal_jenis` enum('survey pendidikan','survey layanan','survey fasilitas','lulusan') NOT NULL,
  `soal_nama` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_survey_soal`
--

INSERT INTO `m_survey_soal` (`soal_id`, `survey_id`, `kategori_id`, `soal_jenis`, `soal_nama`) VALUES
(1, 1, 1, '', 'Dosen memberitahu silabus mata kuliah di awal perkuliahan'),
(2, 1, 1, '', 'Dosen mengajar mata kuliah sesuai dengan kompetensinya'),
(3, 1, 1, '', 'Dosen memberi kesempatan mahasiswa untuk berdiskusi tentang materi yang diajarkan');

-- --------------------------------------------------------

--
-- Table structure for table `m_user`
--

CREATE TABLE `m_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `level` varchar(5) NOT NULL,
  `password` varchar(42) DEFAULT NULL,
  `salt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_user`
--

INSERT INTO `m_user` (`user_id`, `username`, `level`, `password`, `salt`) VALUES
(1, 'dengkulbabi', 'admin', 'arya123', 'random_salt_1'),
(2, 'jane_smith', 'user', '*6DFC68292371B31D0E4CA123C22E902D461856AD', 'random_salt_2'),
(3, 'alice_jones', 'user', '*6A0AA512CAA8A3F6746C499FD5DD54D987461EFE', 'random_salt_3'),
(4, 'whitehorse', 'user', 'agta123', 'Salt_level1');

-- --------------------------------------------------------

--
-- Table structure for table `ortu`
--

CREATE TABLE `ortu` (
  `ortu_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `umur` int(11) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `penghasilan` varchar(100) NOT NULL,
  `nim_mahasiswa` varchar(15) NOT NULL,
  `nama_mahasiswa` varchar(100) NOT NULL,
  `prodi_mahasiswa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tendik`
--

CREATE TABLE `tendik` (
  `tendik_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `no_pegawai` varchar(20) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_jawaban_responden`
--

CREATE TABLE `t_jawaban_responden` (
  `jawaban_responden_id` int(11) NOT NULL,
  `survey_id` int(11) DEFAULT NULL,
  `soal_id` int(11) DEFAULT NULL,
  `jawaban` tinyint(1) NOT NULL CHECK (`jawaban` in (1,2,3,4))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`alumni_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`dosen_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `input_pakar`
--
ALTER TABLE `input_pakar`
  ADD PRIMARY KEY (`pakar_id`),
  ADD KEY `jawaban_responden_id` (`jawaban_responden_id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`mahasiswa_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `mitra_industri`
--
ALTER TABLE `mitra_industri`
  ADD PRIMARY KEY (`mitra_industri_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `m_kategori`
--
ALTER TABLE `m_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `m_survey`
--
ALTER TABLE `m_survey`
  ADD PRIMARY KEY (`survey_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `m_survey_soal`
--
ALTER TABLE `m_survey_soal`
  ADD PRIMARY KEY (`soal_id`),
  ADD KEY `survey_id` (`survey_id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indexes for table `m_user`
--
ALTER TABLE `m_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `ortu`
--
ALTER TABLE `ortu`
  ADD PRIMARY KEY (`ortu_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tendik`
--
ALTER TABLE `tendik`
  ADD PRIMARY KEY (`tendik_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `t_jawaban_responden`
--
ALTER TABLE `t_jawaban_responden`
  ADD PRIMARY KEY (`jawaban_responden_id`),
  ADD KEY `survey_id` (`survey_id`),
  ADD KEY `soal_id` (`soal_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `alumni_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `dosen_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `input_pakar`
--
ALTER TABLE `input_pakar`
  MODIFY `pakar_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `mahasiswa_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mitra_industri`
--
ALTER TABLE `mitra_industri`
  MODIFY `mitra_industri_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_kategori`
--
ALTER TABLE `m_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `m_survey`
--
ALTER TABLE `m_survey`
  MODIFY `survey_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `m_survey_soal`
--
ALTER TABLE `m_survey_soal`
  MODIFY `soal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `m_user`
--
ALTER TABLE `m_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ortu`
--
ALTER TABLE `ortu`
  MODIFY `ortu_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tendik`
--
ALTER TABLE `tendik`
  MODIFY `tendik_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_jawaban_responden`
--
ALTER TABLE `t_jawaban_responden`
  MODIFY `jawaban_responden_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumni`
--
ALTER TABLE `alumni`
  ADD CONSTRAINT `alumni_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `m_user` (`user_id`);

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `m_user` (`user_id`);

--
-- Constraints for table `input_pakar`
--
ALTER TABLE `input_pakar`
  ADD CONSTRAINT `input_pakar_ibfk_1` FOREIGN KEY (`jawaban_responden_id`) REFERENCES `t_jawaban_responden` (`jawaban_responden_id`);

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `m_user` (`user_id`);

--
-- Constraints for table `mitra_industri`
--
ALTER TABLE `mitra_industri`
  ADD CONSTRAINT `mitra_industri_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `m_user` (`user_id`);

--
-- Constraints for table `m_survey`
--
ALTER TABLE `m_survey`
  ADD CONSTRAINT `m_survey_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `m_user` (`user_id`);

--
-- Constraints for table `m_survey_soal`
--
ALTER TABLE `m_survey_soal`
  ADD CONSTRAINT `m_survey_soal_ibfk_1` FOREIGN KEY (`survey_id`) REFERENCES `m_survey` (`survey_id`),
  ADD CONSTRAINT `m_survey_soal_ibfk_2` FOREIGN KEY (`kategori_id`) REFERENCES `m_kategori` (`kategori_id`);

--
-- Constraints for table `ortu`
--
ALTER TABLE `ortu`
  ADD CONSTRAINT `ortu_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `m_user` (`user_id`);

--
-- Constraints for table `tendik`
--
ALTER TABLE `tendik`
  ADD CONSTRAINT `tendik_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `m_user` (`user_id`);

--
-- Constraints for table `t_jawaban_responden`
--
ALTER TABLE `t_jawaban_responden`
  ADD CONSTRAINT `t_jawaban_responden_ibfk_1` FOREIGN KEY (`survey_id`) REFERENCES `m_survey` (`survey_id`),
  ADD CONSTRAINT `t_jawaban_responden_ibfk_2` FOREIGN KEY (`soal_id`) REFERENCES `m_survey_soal` (`soal_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
