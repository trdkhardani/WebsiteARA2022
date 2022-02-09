-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2022 at 07:51 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ara_website2`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_id` int(11) NOT NULL,
  `account_table` varchar(100) NOT NULL,
  `account_keterangan` varchar(255) NOT NULL,
  `account_username` varchar(255) NOT NULL,
  `account_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ctf`
--

CREATE TABLE `ctf` (
  `ctf_id` int(11) NOT NULL,
  `ctf_nama_tim` varchar(255) NOT NULL,
  `ctf_jumlah_anggota` int(11) NOT NULL,
  `ctf_email_ketua` varchar(255) NOT NULL,
  `ctf_nama_ketua` varchar(255) NOT NULL,
  `ctf_nama_anggota_1` varchar(255) NOT NULL,
  `ctf_nama_anggota_2` varchar(255) NOT NULL,
  `ctf_suket_ketua` varchar(255) NOT NULL,
  `ctf_suket_anggota_1` varchar(255) NOT NULL,
  `ctf_suket_anggota_2` varchar(255) NOT NULL,
  `ctf_ig_ara_ketua` varchar(255) NOT NULL,
  `ctf_ig_ara_anggota_1` varchar(255) NOT NULL,
  `ctf_ig_ara_anggota_2` varchar(255) NOT NULL,
  `ctf_ig_hmit_ketua` varchar(255) NOT NULL,
  `ctf_ig_hmit_anggota_1` varchar(255) NOT NULL,
  `ctf_ig_hmit_anggota_2` varchar(255) NOT NULL,
  `ctf_intitusi` varchar(255) NOT NULL,
  `ctf_contact` varchar(255) NOT NULL,
  `ctf_status_final` tinyint(1) NOT NULL DEFAULT 0,
  `ctf_bukti_bayar` varchar(255) NOT NULL,
  `ctf_status` tinyint(1) NOT NULL DEFAULT 0,
  `ctf_date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `ctf_date_updated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `expo`
--

CREATE TABLE `expo` (
  `expo_id` int(11) NOT NULL,
  `expo_nama` varchar(255) NOT NULL,
  `expo_email` varchar(255) NOT NULL,
  `expo_contact` varchar(255) NOT NULL,
  `expo_institusi` varchar(255) NOT NULL,
  `expo_status` tinyint(1) NOT NULL DEFAULT 0,
  `expo_twibbon` varchar(255) NOT NULL,
  `expo_poster` varchar(255) NOT NULL,
  `expo_ig_ara` varchar(255) NOT NULL,
  `expo_ig_hmit` varchar(255) NOT NULL,
  `expo_sponsor` varchar(255) NOT NULL,
  `expo_date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `expo_date_updated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kti_iot`
--

CREATE TABLE `kti_iot` (
  `iot_id` int(11) NOT NULL,
  `iot_nama_tim` varchar(255) NOT NULL,
  `iot_jumlah_anggota` int(11) NOT NULL,
  `iot_email_ketua` varchar(255) NOT NULL,
  `iot_nama_ketua` varchar(255) NOT NULL,
  `iot_nama_anggota_1` varchar(255) NOT NULL,
  `iot_nama_anggota_2` varchar(255) NOT NULL,
  `iot_suket_ketua` varchar(255) NOT NULL,
  `iot_suket_anggota_1` varchar(255) NOT NULL,
  `iot_suket_anggota_2` varchar(255) NOT NULL,
  `iot_contact` varchar(20) NOT NULL,
  `iot_institusi` varchar(255) NOT NULL,
  `iot_story_ketua` varchar(255) NOT NULL,
  `iot_story_anggota_1` varchar(255) NOT NULL,
  `iot_story_anggota_2` varchar(255) NOT NULL,
  `iot_ig_ara_ketua` varchar(255) NOT NULL,
  `iot_ig_ara_anggota_1` varchar(255) NOT NULL,
  `iot_ig_ara_anggota_2` varchar(255) NOT NULL,
  `iot_ig_hmit_ketua` varchar(255) NOT NULL,
  `iot_ig_hmit_anggota_1` varchar(255) NOT NULL,
  `iot_ig_hmit_anggota_2` varchar(255) NOT NULL,
  `iot_abstrak` varchar(255) NOT NULL,
  `iot_status_penyisihan` tinyint(1) NOT NULL DEFAULT 0,
  `iot_status_final` tinyint(1) NOT NULL DEFAULT 0,
  `iot_kti_paper` varchar(255) NOT NULL,
  `iot_status_konfirmasi_abstrak` tinyint(1) NOT NULL DEFAULT 0,
  `iot_status_konfirmasi_full_paper` tinyint(1) NOT NULL DEFAULT 0,
  `iot_status_konfirmasi_final` tinyint(1) NOT NULL DEFAULT 0,
  `iot_pembayaran` varchar(255) NOT NULL,
  `iot_pembayaran_full_paper` varchar(255) DEFAULT NULL,
  `iot_pembayaran_final` varchar(255) DEFAULT NULL,
  `iot_date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `iot_date_updated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `olimpiade`
--

CREATE TABLE `olimpiade` (
  `olim_id` int(11) NOT NULL,
  `olim_nama_tim` varchar(255) NOT NULL,
  `olim_jumlah_anggota` int(11) NOT NULL,
  `olim_email_ketua` varchar(255) NOT NULL,
  `olim_nama_ketua` varchar(255) NOT NULL,
  `olim_nama_anggota_1` varchar(255) NOT NULL,
  `olim_nama_anggota_2` varchar(255) NOT NULL,
  `olim_suket_ketua` varchar(255) NOT NULL,
  `olim_suket_anggota_1` varchar(255) NOT NULL,
  `olim_suket_anggota_2` varchar(255) NOT NULL,
  `olim_contact` varchar(20) NOT NULL,
  `olim_ig_ara_ketua` varchar(255) NOT NULL,
  `olim_ig_ara_anggota_1` varchar(255) NOT NULL,
  `olim_ig_ara_anggota_2` varchar(255) NOT NULL,
  `olim_ig_hmit_ketua` varchar(255) NOT NULL,
  `olim_ig_hmit_anggota_1` varchar(255) NOT NULL,
  `olim_ig_hmit_anggota_2` varchar(255) NOT NULL,
  `olim_institusi` varchar(255) NOT NULL,
  `olim_pembayaran` varchar(255) NOT NULL,
  `olim_status_final` tinyint(1) NOT NULL DEFAULT 0,
  `olim_status` tinyint(1) NOT NULL DEFAULT 0,
  `olim_date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `olim_date_updated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `panitia_login`
--

CREATE TABLE `panitia_login` (
  `panitia_login_id` int(11) NOT NULL,
  `panitia_login_username` varchar(255) NOT NULL,
  `panitia_login_password` varchar(255) NOT NULL,
  `panitia_login_date_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `webinar`
--

CREATE TABLE `webinar` (
  `webinar_id` int(11) NOT NULL,
  `webinar_nama` varchar(255) NOT NULL,
  `webinar_email` varchar(255) NOT NULL,
  `webinar_contact` varchar(20) NOT NULL,
  `webinar_instansi` varchar(255) NOT NULL,
  `webinar_status` tinyint(1) NOT NULL DEFAULT 0,
  `webinar_story` varchar(255) NOT NULL,
  `webinar_ig_ara` varchar(255) NOT NULL,
  `webinar_ig_hmit` varchar(255) NOT NULL,
  `webinar_subscribe` varchar(255) NOT NULL,
  `webinar_sponsor` varchar(255) NOT NULL,
  `webinar_share_1` varchar(255) NOT NULL,
  `webinar_share_2` varchar(255) NOT NULL,
  `webinar_twibbon` varchar(255) DEFAULT NULL,
  `webinar_data_created` datetime NOT NULL DEFAULT current_timestamp(),
  `webinar_data_updated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `ctf`
--
ALTER TABLE `ctf`
  ADD PRIMARY KEY (`ctf_id`),
  ADD UNIQUE KEY `ctf_nama_tim` (`ctf_nama_tim`,`ctf_email_ketua`),
  ADD UNIQUE KEY `ctf_id` (`ctf_id`);

--
-- Indexes for table `expo`
--
ALTER TABLE `expo`
  ADD PRIMARY KEY (`expo_id`),
  ADD UNIQUE KEY `expo_email` (`expo_email`),
  ADD UNIQUE KEY `expo_id` (`expo_id`);

--
-- Indexes for table `kti_iot`
--
ALTER TABLE `kti_iot`
  ADD PRIMARY KEY (`iot_id`),
  ADD UNIQUE KEY `iot_email_ketua` (`iot_email_ketua`),
  ADD UNIQUE KEY `iot_nama_tim` (`iot_nama_tim`),
  ADD UNIQUE KEY `iot_id` (`iot_id`);

--
-- Indexes for table `olimpiade`
--
ALTER TABLE `olimpiade`
  ADD PRIMARY KEY (`olim_id`),
  ADD UNIQUE KEY `olim_id` (`olim_id`,`olim_nama_tim`,`olim_email_ketua`);

--
-- Indexes for table `panitia_login`
--
ALTER TABLE `panitia_login`
  ADD PRIMARY KEY (`panitia_login_id`);

--
-- Indexes for table `webinar`
--
ALTER TABLE `webinar`
  ADD PRIMARY KEY (`webinar_id`),
  ADD UNIQUE KEY `webinar_id` (`webinar_id`,`webinar_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ctf`
--
ALTER TABLE `ctf`
  MODIFY `ctf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `expo`
--
ALTER TABLE `expo`
  MODIFY `expo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kti_iot`
--
ALTER TABLE `kti_iot`
  MODIFY `iot_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `olimpiade`
--
ALTER TABLE `olimpiade`
  MODIFY `olim_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `panitia_login`
--
ALTER TABLE `panitia_login`
  MODIFY `panitia_login_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `webinar`
--
ALTER TABLE `webinar`
  MODIFY `webinar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
