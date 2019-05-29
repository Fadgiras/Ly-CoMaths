-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 29, 2019 at 07:47 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ly-comaths`
--
CREATE DATABASE IF NOT EXISTS `ly-comaths` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ly-comaths`;

-- --------------------------------------------------------

--
-- Table structure for table `cours`
--

DROP TABLE IF EXISTS `cours`;
CREATE TABLE `cours` (
  `IdCours` int(4) NOT NULL,
  `NiveauCours` tinyint(4) NOT NULL COMMENT 'Mettre le numéro de classe : 4 pour 4e, 2 pour 2nde ou encore 0 pour terminale',
  `NomFichier` varchar(50) NOT NULL,
  `DateDepot` date NOT NULL,
  `IdUploader` int(4) NOT NULL,
  `TypeFichier` tinyint(4) NOT NULL COMMENT '0 : Fichier telechargeable, 1: vidéo, 2 figure dillustration (Geo, Pyth)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE `utilisateur` (
  `id` int(4) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  `niv` int(11) NOT NULL COMMENT ' Mettre le numéro de classe : 4 pour 4e, 2 pour 2nde ou encore 0 pour terminale et 7 pour les professeurs',
  `mail` varchar(30) NOT NULL,
  `droit` tinyint(1) NOT NULL COMMENT '2 niveaux possibles, 0 : Visiteur et élèves, 1 : Admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `mdp`, `niv`, `mail`, `droit`) VALUES
(0, 'Helldrac', 'Flo', '$argon2i$v=19$m=1024,t=2,p=2$RnlsWVFFOHV1ZS81aS9Ebw$8SdcX4Rmtw00j2arpHmFI1Tozg54p9sCVFVZeW/MPIg', 0, 'mayeuxflo17@gmail.com', 0),
(1, 'Juigne', 'Sabrina', '$argon2i$v=19$m=1024,t=2,p=2$T282a0hGRmFRbVBaNnV0bg$C075aQpVGiU8ILuFm9hfvuhClvWVmyuSMhNUlzjlKF4', 7, 'juigne.math@gmail.com', 0),
(2, 'Abbes', 'Abbes', '', 7, '', 0),
(3, 'Attouani', 'Mohamed', '', 7, '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`IdCours`),
  ADD KEY `IdUploader` (`IdUploader`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cours`
--
ALTER TABLE `cours`
  MODIFY `IdCours` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `cours_utilisateur_FK` FOREIGN KEY (`IdUploader`) REFERENCES `utilisateur` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
