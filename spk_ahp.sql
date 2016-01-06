-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2015 at 11:43 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spk_ahp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `namauser` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `namauser`) VALUES
('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Elang S'),
('2', 'admin1', '21232f297a57a5a743894a0e4a801fc3', 'Agus D'),
('3', 'admin2', '21232f297a57a5a743894a0e4a801fc3', 'Maria L');

-- --------------------------------------------------------

--
-- Table structure for table `perbandingan_kriteria`
--

CREATE TABLE IF NOT EXISTS `perbandingan_kriteria` (
  `id_kriteria` varchar(3) NOT NULL,
  `nilai_banding` int(5) NOT NULL,
  `kriteria1` varchar(30) NOT NULL,
  `nm_banding` varchar(30) NOT NULL,
  `kriteria2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perbandingan_kriteria`
--

INSERT INTO `perbandingan_kriteria` (`id_kriteria`, `nilai_banding`, `kriteria1`, `nm_banding`, `kriteria2`) VALUES
('B01', 1, 'IPK', '1. Sama penting dengan', 'IPK'),
('B02', 1, 'PENGHASILAN ORANGTUA', '1. Sama penting dengan', 'PENGHASILAN ORANGTUA'),
('B03', 1, 'TANGGUNGAN', '1. Sama penting dengan', 'TANGGUNGAN'),
('B04', 1, 'SEMESTER', '1. Sama penting dengan', 'SEMESTER');

-- --------------------------------------------------------

--
-- Table structure for table `perb_alternatif`
--

CREATE TABLE IF NOT EXISTS `perb_alternatif` (
  `id_alternatif` varchar(3) NOT NULL,
  `nm_banding` varchar(30) NOT NULL,
  `nb_db` int(5) NOT NULL,
  `alternatif1` varchar(30) NOT NULL,
  `alternatif2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perb_alternatif`
--

INSERT INTO `perb_alternatif` (`id_alternatif`, `nm_banding`, `nb_db`, `alternatif1`, `alternatif2`) VALUES
('A01', '1. Sama penting dengan', 1, 'Elang', 'Elang'),
('A02', '1. Sama penting dengan', 1, 'Maria', 'Maria'),
('A03', '1. Sama penting dengan', 1, 'Agus', 'Agus'),
('A04', '1. Sama penting dengan', 1, 'Widia', 'Widia'),
('A05', '1. Sama penting dengan', 1, 'Iman', 'Iman');

-- --------------------------------------------------------

--
-- Table structure for table `pw_kriteria`
--

CREATE TABLE IF NOT EXISTS `pw_kriteria` (
`id` int(2) NOT NULL,
  `pw1` varchar(5) NOT NULL,
  `pw2` varchar(5) NOT NULL,
  `pw3` varchar(5) NOT NULL,
  `pw4` varchar(5) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pw_kriteria`
--

INSERT INTO `pw_kriteria` (`id`, `pw1`, `pw2`, `pw3`, `pw4`) VALUES
(1, '0.44', '0.29', '0.17', '0.1'),
(2, '0.42', '0.23', '0.18', '0.17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kriteria`
--

CREATE TABLE IF NOT EXISTS `tbl_kriteria` (
  `id_kriteria` varchar(7) NOT NULL,
  `kd_kriteria` int(7) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kriteria`
--

INSERT INTO `tbl_kriteria` (`id_kriteria`, `kd_kriteria`, `nama_kriteria`) VALUES
('krt-001', 201, 'IPK'),
('krt-002', 202, 'PENGHASILAN ORANGTUA'),
('krt-003', 203, 'TANGGUNGAN'),
('krt-004', 204, 'SEMESTER');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mhs`
--

CREATE TABLE IF NOT EXISTS `tbl_mhs` (
  `id_mhs` varchar(7) NOT NULL,
  `nim` int(14) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mhs`
--

INSERT INTO `tbl_mhs` (`id_mhs`, `nim`, `nama`, `alamat`) VALUES
('mhs-001', 2011140204, 'Elang', 'Tangerang'),
('mhs-002', 2011140299, 'Maria', 'Tangerang'),
('mhs-003', 2011142347, 'Agus', 'Bambu Apus Pamulang'),
('mhs-004', 2011248346, 'Widia', 'Pondok Aren'),
('mhs-005', 2011323124, 'Iman', 'Tangerang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perbandingan_kriteria`
--
ALTER TABLE `perbandingan_kriteria`
 ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `perb_alternatif`
--
ALTER TABLE `perb_alternatif`
 ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `pw_kriteria`
--
ALTER TABLE `pw_kriteria`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
 ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
 ADD PRIMARY KEY (`id_mhs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pw_kriteria`
--
ALTER TABLE `pw_kriteria`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
