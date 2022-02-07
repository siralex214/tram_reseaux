-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 07 fév. 2022 à 10:43
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
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `version` int(11) NOT NULL,
  `headerlength` int(11) NOT NULL,
  `service` varchar(4) NOT NULL,
  `identification` varchar(6) NOT NULL,
  `flags` varchar(4) NOT NULL,
  `ttl` int(11) NOT NULL,
  `protocol_name` varchar(50) NOT NULL,
  `protocol_flag` varchar(6) NOT NULL,
  `protocol_checksum_status` varchar(10) NOT NULL,
  `protocol_checksum_code` varchar(6) NOT NULL,
  `protocol_ports_from` int(6) NOT NULL,
  `protocol_ports_dest` int(3) NOT NULL,
  `protocol_type` int(11) NOT NULL,
  `protocol_code` int(11) NOT NULL,
  `protocol_headerChecksum` varchar(10) NOT NULL,
  `ip_from` varchar(8) NOT NULL,
  `ip_dest` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` int(11) NOT NULL,
  `prenom` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `sexe` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
