-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 07 fév. 2022 à 16:46
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `reseau_tram`
--

-- --------------------------------------------------------

--
-- Structure de la table `trams`
--

CREATE TABLE `trams` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `identification` varchar(255) NOT NULL,
  `flags_code` varchar(255) NOT NULL,
  `ttl` varchar(255) NOT NULL,
  `protocol_name` varchar(255) NOT NULL,
  `protocol_checksum_status` varchar(255) NOT NULL,
  `protocol_ports_from` varchar(255) NOT NULL,
  `protocol_ports_dest` varchar(255) NOT NULL,
  `headerChecksum` varchar(255) NOT NULL,
  `ip_from` varchar(255) NOT NULL,
  `ip_dest` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `trams`
--

INSERT INTO `trams` (`id`, `date`, `identification`, `flags_code`, `ttl`, `protocol_name`, `protocol_checksum_status`, `protocol_ports_from`, `protocol_ports_dest`, `headerChecksum`, `ip_from`, `ip_dest`) VALUES
(1, '1608219651', '0xf30f', '0x00', '128', 'UDP', 'disabled', '50046', '3481', 'unverified', 'c0a8014a', '3470ff25'),
(2, '1608219649', '0xf30e', '0x00', '128', 'UDP', 'disabled', '50046', '3481', 'unverified', 'c0a8014a', '3470ff25'),
(3, '1608219647', '0xf30d', '0x00', '128', 'UDP', 'disabled', '50046', '3481', 'unverified', 'c0a8014a', '3470ff25'),
(4, '1608219645', '0xf30c', '0x00', '128', 'UDP', 'disabled', '50046', '3481', 'unverified', 'c0a8014a', '3470ff25'),
(5, '1608219640', '0x92ce', '0x40', '128', 'TLSv1.2', 'disabled', '63440', '443', 'unverified', 'c0a8014a', '343111a8'),
(6, '1608219635', '0x92d0', '0x40', '128', 'TLSv1.2', 'disabled', '63440', '443', 'unverified', 'c0a8014a', '343111a8'),
(7, '1608219630', '0xa132', '0x00', '128', 'ICMP', 'good', '51062', '443', '0x0000', 'c0a8014a', 'acd913e3'),
(8, '1608219620', '0xa132', '0x00', '99', 'ICMP', 'good', '51062', '443', '0xc31d', 'acd913e3', 'c0a8014a'),
(9, '1607951036', '0x9927', '0x40', '128', 'TCP', 'disabled', '51062', '443', 'unverified', 'c0a8014a', 'd83ac6ce'),
(10, '1607951031', '0x9927', '0x00', '121', 'TCP', 'disabled', '51062', '443', 'unverified', 'd83aa80c', 'c0a8014a'),
(11, '1606910038', '0xf2f9', '0x00', '117', 'ICMP', 'good', '51062', '443', '0xc312', 'acd913e3', 'c0a8014a'),
(12, '1606910036', '0xf2f9', '0x00', '128', 'ICMP', 'good', '51062', '443', '0x0000', 'c0a8014a', 'acd913e3'),
(13, '1606910000', '0xd912', '0x00', '128', 'ICMP', 'good', '51062', '443', '0x0000', 'c0a8014a', 'acd913e3'),
(14, '1606909998', '0xd914', '0x00', '128', 'ICMP', 'good', '51062', '443', '0x0020', 'c0a8014a', 'acd913e3'),
(15, '1606906654', '0xa443', '0x00', '128', 'ICMP', 'good', '51062', '443', '0x0000', 'c0a8014a', 'acd913e3'),
(16, '1606906653', '0xa443', '0x00', '117', 'ICMP', 'good', '51062', '443', '0xc312', 'acd913e3', 'c0a8014a');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `sexe` varchar(10) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `trams`
--
ALTER TABLE `trams`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `trams`
--
ALTER TABLE `trams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=323;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
