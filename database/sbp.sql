-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2024 at 02:53 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sbp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fauna`
--

CREATE TABLE `tbl_fauna` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `gambar_url` text DEFAULT NULL,
  `tempat_hidup` varchar(100) DEFAULT NULL,
  `jenis_hewan` varchar(50) DEFAULT NULL,
  `tipe_hewan` varchar(50) DEFAULT NULL,
  `jumlah_kaki` varchar(50) DEFAULT NULL,
  `jenis_kulit` varchar(50) DEFAULT NULL,
  `bentuk_telinga` varchar(50) DEFAULT NULL,
  `jenis_indra_makan` varchar(50) DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `write_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_fauna`
--

INSERT INTO `tbl_fauna` (`id`, `name`, `description`, `gambar_url`, `tempat_hidup`, `jenis_hewan`, `tipe_hewan`, `jumlah_kaki`, `jenis_kulit`, `bentuk_telinga`, `jenis_indra_makan`, `create_date`, `write_date`) VALUES
(1, 'Kelinci', 'Kelinci atau kuilu adalah hewan mamalia dari famili Leporidae, yang dapat ditemukan di banyak bagian bumi. Kelinci berkembang biak dengan cara beranak yang disebut vivipar. Dulunya, hewan ini adalah hewan liar yang hidup di Afrika hingga ke daratan Eropa. Pada perkembangannya, tahun 1912, kelinci diklasifikasikan dalam ordo Lagomorpha. Ordo ini dibedakan menjadi dua famili, yakni Ochtonidae (jenis pika yang pandai bersiul) dan Leporidae (termasuk jenis kelinci terwelu). Asal kata \'kelinci\' berasal dari bahasa Belanda, yaitu konijntje yang berarti \"anak kelinci\". Hal ini menunjukkan bahwa masyarakat Nusantara mulai mengenali kelinci saat masa kolonial, padahal di Pulau Sumatra ada satu spesies asli kelinci sumatera (Nesolagus netscheri) yang baru ditemukan pada tahun 1972.', 'uploads/65a12ac99c84b.jpg', 'darat', 'mamalia', 'herbivora', '4', 'bulu', 'panjang', 'mulut', '2024-01-12 12:04:25', '2024-01-14 03:35:46'),
(2, 'Kucing', 'Kucing disebut juga kucing domestik atau kucing rumah (nama ilmiah: Felis silvestris catus atau Felis catus) adalah sejenis mamalia karnivora dari keluarga Felidae. Kata \"kucing\" biasanya merujuk kepada \"kucing\" yang telah dijinakkan, tetapi bisa juga bisa merujuk kepada \"kucing besar\" seperti singa dan harimau yang juga termasuk jenis kucing', 'uploads/65a3577f2aa28.jpg', 'darat', 'mamalia', 'karnivora', '4', 'bulu', 'runcing', 'mulut', '2024-01-14 03:39:43', '2024-01-14 03:39:43'),
(3, 'Ayam', 'Ayam (Gallus gallus domesticus) adalah binatang unggas yang biasa dipelihara untuk dimanfaatkan daging, telur, dan bulunya. Ayam peliharaan merupakan keturunan langsung dari salah satu subspesies ayam hutan yang dikenal sebagai ayam hutan merah (Gallus gallus) atau ayam bangkiwa (bankiva fowl). Kawin silang antar ras ayam telah menghasilkan ratusan galur unggul atau galur murni dengan bermacam-macam fungsi; yang paling umum adalah ayam potong (untuk dipotong) dan ayam petelur (untuk diambil telurnya). Ayam biasa dapat pula dikawin silang dengan kerabat dekatnya, ayam hutan hijau, yang menghasilkan hibrida mandul yang jantannya dikenal sebagai ayam bekisar.', 'uploads/65a35832c37ff.jpg', 'darat', 'burung', 'omnivora', '2', 'bulu', 'tidak_telinga', 'paruh', '2024-01-14 03:42:42', '2024-01-14 03:42:42'),
(4, 'Kambing', 'Kambing ternak (Capra aegagrus hircus) merupakan salah satu subspesies yang dipelihara atau dijinakkan dari kambing liar Asia Barat Daya dan Eropa Timur. Kambing merupakan anggota dari keluarga Bovidae dan bersaudara dengan biri-biri karena keduanya tergolong dalam sub famili Caprinae. Terdapat lebih 300 jenis kambing yang berbeda-beda.Kambing adalah salah satu di antara spesies yang paling lama diternakkan, yaitu untuk susu, daging, bulu, dan kulit di seluruh dunia.Pada tahun 2011, populasi kambing yang hidup di seluruh dunia mencapai 924 juta menurut Organisasi Pangan dan Pertanian Perserikatan Bangsa-Bangsa.', 'uploads/65a3594d78770.jpg', 'darat', 'mamalia', 'herbivora', '4', 'bulu', 'panjang', 'mulut', '2024-01-14 03:47:25', '2024-01-14 03:47:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_fauna`
--
ALTER TABLE `tbl_fauna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_fauna`
--
ALTER TABLE `tbl_fauna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
