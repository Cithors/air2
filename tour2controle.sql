-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2019 at 09:54 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tour2controle`
--

-- --------------------------------------------------------

--
-- Table structure for table `avion`
--

CREATE TABLE `avion` (
  `numav` int(11) NOT NULL,
  `nomav` varchar(15) COLLATE utf8_bin NOT NULL,
  `capacite` varchar(10) COLLATE utf8_bin NOT NULL,
  `loc` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `avion`
--

INSERT INTO `avion` (`numav`, `nomav`, `capacite`, `loc`) VALUES
(100, 'Boeing', '320', 'Nice'),
(220, 'Airbus', '300', 'Paris'),
(250, 'Boeing', '400', 'Paris'),
(300, 'Boeing', '300', 'Nice'),
(320, 'Airbus', '400', 'Nice'),
(400, 'Airbus', '370', 'Nice');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `ville` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `nom`, `ville`) VALUES
(1, 'Le testeur', 'Paris'),
(2, 'Le Testeur', 'Nice');

-- --------------------------------------------------------

--
-- Table structure for table `pilote`
--

CREATE TABLE `pilote` (
  `numpil` int(11) NOT NULL,
  `nompil` varchar(30) COLLATE utf8_bin NOT NULL,
  `adr` varchar(40) COLLATE utf8_bin NOT NULL,
  `sal` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `pilote`
--

INSERT INTO `pilote` (`numpil`, `nompil`, `adr`, `sal`) VALUES
(100, 'JOURDAN', 'Paris', '3500'),
(204, 'GASTON', 'Lyon', '3500'),
(302, 'DUPONT', 'Nice', '2000'),
(304, 'Gaston', 'Paris', '3000'),
(402, 'DUBOIS', 'Paris', '2000'),
(502, 'DUBOIS', 'Nice', '2500'),
(506, 'DANNY', 'Nice', '4000'),
(600, 'Durand', 'Paris', '2000'),
(607, 'SPRING', 'Paris', '4000'),
(708, 'TSUNO', 'Paris', '4500');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `ref` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `type` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `id_client` int(11) DEFAULT NULL,
  `nbadultes` int(11) DEFAULT NULL,
  `nbenfants` int(11) DEFAULT NULL,
  `datedep` varchar(12) COLLATE utf8_bin DEFAULT NULL,
  `datearr` varchar(12) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `ref`, `type`, `id_client`, `nbadultes`, `nbenfants`, `datedep`, `datearr`) VALUES
(1, 'NICPAR450', 'vol', 2, 2, 0, '04-11-2019', '11-11-2019'),
(6, 'PAR1', 'hotel', 2, 1, 2, '17-04-2019', '23-04-2019');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(255) COLLATE utf8_bin NOT NULL,
  `mail` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` text COLLATE utf8_bin NOT NULL,
  `role` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `mail`, `password`, `role`) VALUES
(1, 'test', 'test', 'test@test.fr', '098f6bcd4621d373cade4e832627b4f6', 'client'),
(2, 'admin', 'admin', 'admin@air.fr', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(3, 'client', 'client', 'client@client.fr', 'db76c1d440bb3a00b3888bc701afc9f3', 'client'),
(4, 'client2', 'client2', 'client2@client.fr', '61fd490d77fe37e5b3936381f9f27f5c', 'client');

-- --------------------------------------------------------

--
-- Table structure for table `vol`
--

CREATE TABLE `vol` (
  `numvol` int(11) NOT NULL,
  `numpil` int(11) NOT NULL,
  `numav` int(11) NOT NULL,
  `ville_dep` varchar(40) COLLATE utf8_bin NOT NULL,
  `ville_arr` varchar(40) COLLATE utf8_bin NOT NULL,
  `h_dep` tinyint(2) NOT NULL,
  `h_arr` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `vol`
--

INSERT INTO `vol` (`numvol`, `numpil`, `numav`, `ville_dep`, `ville_arr`, `h_dep`, `h_arr`) VALUES
(450, 506, 300, 'Nice', 'Paris', 19, 21),
(451, 506, 300, 'Nice', 'Paris', 6, 7),
(528, 600, 320, 'Lyon', 'Rome', 12, 16),
(550, 100, 400, 'Nice', 'Paris', 8, 9),
(551, 100, 400, 'Nice', 'Paris', 15, 16),
(552, 100, 300, 'Nice', 'Paris', 17, 19),
(720, 302, 100, 'Nice', 'Paris', 21, 23),
(727, 607, 220, 'Paris', 'Lyon', 17, 19),
(810, 204, 250, 'Paris', 'Lyon', 8, 9),
(920, 402, 320, 'Nice', 'Lyon', 11, 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avion`
--
ALTER TABLE `avion`
  ADD PRIMARY KEY (`numav`),
  ADD KEY `numav` (`numav`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pilote`
--
ALTER TABLE `pilote`
  ADD PRIMARY KEY (`numpil`),
  ADD KEY `numpil` (`numpil`),
  ADD KEY `numpil_2` (`numpil`),
  ADD KEY `numpil_3` (`numpil`),
  ADD KEY `numpil_4` (`numpil`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`,`mail`);

--
-- Indexes for table `vol`
--
ALTER TABLE `vol`
  ADD PRIMARY KEY (`numvol`),
  ADD KEY `numpil` (`numpil`),
  ADD KEY `numav` (`numav`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `vol`
--
ALTER TABLE `vol`
  ADD CONSTRAINT `vol_ibfk_1` FOREIGN KEY (`numpil`) REFERENCES `pilote` (`numpil`),
  ADD CONSTRAINT `vol_ibfk_2` FOREIGN KEY (`numav`) REFERENCES `avion` (`numav`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
