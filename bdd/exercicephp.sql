-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 28 fév. 2024 à 14:36
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `exercicephp`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualites`
--

CREATE TABLE `actualites` (
  `id_actualite` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `corp_texte` text NOT NULL,
  `image` text NOT NULL,
  `date_publication` date NOT NULL,
  `date_revision` date NOT NULL,
  `id_auteur` int(11) NOT NULL,
  `tags` varchar(128) NOT NULL,
  `sources` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `actualites`
--

INSERT INTO `actualites` (`id_actualite`, `titre`, `corp_texte`, `image`, `date_publication`, `date_revision`, `id_auteur`, `tags`, `sources`) VALUES
(1, 'Kylian Mbappé Rejoint le Real Madrid : Un Rêve devenu Réalité !', 'Dans un transfert qui a secoué le monde du football, Kylian Mbappé, le talent prodigieux du Paris Saint-Germain, est sur le point d\'enfiler le maillot blanc emblématique du Real Madrid. En tant que journalistes, nous sommes témoins d\'un changement monumental dans le paysage du football européen.\r\n\r\nL\'annonce ne surprend guère ceux qui ont suivi la montée en flèche de Mbappé. Depuis qu\'il a explosé sur la scène en tant qu\'adolescent, la sensation française a été saluée comme l\'avenir du football, avec sa vitesse fulgurante, son habileté impeccable et sa capacité incroyable à trouver le fond des filets. Son passage au PSG n\'a été rien de moins que spectaculaire, consolidant son statut de l\'un des talents les plus recherchés au monde.\r\n\r\nPour le Real Madrid, sécuriser la signature de Mbappé représente un coup d\'une ampleur immense. Les géants espagnols, synonymes de succès et de signatures de Galactiques, ont depuis longtemps convoité les services du jeune attaquant. Avec le départ de Cristiano Ronaldo, il y a eu un vide à combler dans le cœur des fidèles de Madrid, et Mbappé semble destiné à marcher dans ces chaussures illustres.', 'imgs/mbappe_real.webp', '2024-02-28', '2024-02-28', 1, 'foot, real, mbappe, goat', 'The Rock avec des cheveux'),
(2, 'La KCorp S\'Empare de la Scène Rocket League : Une Nouvelle Ère Débute !', 'Dans une annonce qui a fait vibrer la communauté esportive, la KCorp, l\'équipe emblématique de la scène française, entre de plain-pied dans le monde de Rocket League. En tant que journalistes, nous sommes témoins d\'une étape décisive dans l\'évolution du paysage esportif.\r\n\r\nCette incursion de la KCorp dans Rocket League ne surprend guère les observateurs attentifs. Réputée pour son expertise dans d\'autres disciplines comme Fortnite et Counter-Strike, l\'équipe a bâti sa réputation sur des performances de haut niveau et une passion indéfectible pour les compétitions en ligne.\r\n\r\nRocket League, avec sa combinaison unique de football et de conduite automobile, est le terrain de jeu idéal pour la KCorp. Avec son style de jeu rapide et technique, l\'équipe française promet d\'apporter une nouvelle dimension à la compétition, défiant les meilleures équipes du monde avec audace et détermination.\r\n\r\nPour la communauté de Rocket League, l\'arrivée de la KCorp représente une injection d\'excitation et d\'anticipation. Les fans se réjouissent de voir comment l\'équipe s\'intégrera dans le paysage déjà compétitif de Rocket League, et les autres équipes prennent note de cette nouvelle venue qui pourrait bien changer la donne.\r\n\r\nAlors que la KCorp s\'apprête à faire ses débuts sur la scène Rocket League, une nouvelle ère de compétition et de rivalité commence, prête à captiver et à inspirer les fans du monde entier.', 'imgs/KCorp.jpg', '2024-02-15', '2024-02-16', 2, 'foot, e-sport, rocketleague, kcorp', 'Le gras de kameto');

-- --------------------------------------------------------

--
-- Structure de la table `auteurs`
--

CREATE TABLE `auteurs` (
  `id_auteur` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `auteurs`
--

INSERT INTO `auteurs` (`id_auteur`, `nom`, `prenom`) VALUES
(1, 'Le chat de', 'The Rock'),
(2, 'Le chien de', 'Kameto');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id_contact` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actualites`
--
ALTER TABLE `actualites`
  ADD PRIMARY KEY (`id_actualite`);

--
-- Index pour la table `auteurs`
--
ALTER TABLE `auteurs`
  ADD PRIMARY KEY (`id_auteur`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id_contact`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actualites`
--
ALTER TABLE `actualites`
  MODIFY `id_actualite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `auteurs`
--
ALTER TABLE `auteurs`
  MODIFY `id_auteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;