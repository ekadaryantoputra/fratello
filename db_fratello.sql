-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2016 at 10:58 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_fratello`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `id_anggota` varchar(10) NOT NULL,
  `nama_anggota` varchar(30) NOT NULL,
  `photo_profile` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_anggota`, `photo_profile`) VALUES
('0002', 'Kream Sore', '1471931512.jpg'),
('0001', 'Kream Malam', '1471940772.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id_blog` varchar(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `create_date` date NOT NULL,
  `create_by` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `foto_anggota`
--

CREATE TABLE IF NOT EXISTS `foto_anggota` (
  `id_photo` varchar(10) NOT NULL,
  `nama_photo` varchar(100) NOT NULL,
  `id_anggota` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `icon_sosmed`
--

CREATE TABLE IF NOT EXISTS `icon_sosmed` (
  `id_icon` varchar(10) NOT NULL,
  `nama_icon` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sosmed_anggota`
--

CREATE TABLE IF NOT EXISTS `sosmed_anggota` (
  `id_sosmed` varchar(10) NOT NULL,
  `nama_sosmed` varchar(100) NOT NULL,
  `id_anggota` varchar(10) NOT NULL,
  `id_icon` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
 ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
 ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `foto_anggota`
--
ALTER TABLE `foto_anggota`
 ADD PRIMARY KEY (`id_photo`);

--
-- Indexes for table `icon_sosmed`
--
ALTER TABLE `icon_sosmed`
 ADD PRIMARY KEY (`id_icon`);

--
-- Indexes for table `sosmed_anggota`
--
ALTER TABLE `sosmed_anggota`
 ADD PRIMARY KEY (`id_sosmed`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
