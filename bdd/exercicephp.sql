-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 02 avr. 2024 à 09:07
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
  `id_actualite` int(11) NOT NULL COMMENT 'Identifiant de l''actualité',
  `titre` varchar(255) NOT NULL COMMENT 'Titre de l''actualité',
  `corp_texte` text NOT NULL COMMENT 'Texte de l''actualité',
  `image` text NOT NULL COMMENT 'Image de l''actualité',
  `date_publication` date NOT NULL COMMENT 'Date de la publication',
  `date_revision` date NOT NULL COMMENT 'Date de la dernière modification',
  `id_auteur` int(11) NOT NULL COMMENT 'Identifiant de l''auteur',
  `tags` varchar(128) NOT NULL COMMENT 'Tags de l''actualité',
  `sources` varchar(128) NOT NULL COMMENT 'Sources de l''actualité'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `actualites`
--

INSERT INTO `actualites` (`id_actualite`, `titre`, `corp_texte`, `image`, `date_publication`, `date_revision`, `id_auteur`, `tags`, `sources`) VALUES
(1, 'Kylian Mbappé Rejoint le Real Madrid : Un Rêve devenu Réalité !', 'Dans un transfert qui a secoué le monde du football, Kylian Mbappé, le talent prodigieux du Paris Saint-Germain, est sur le point d\'enfiler le maillot blanc emblématique du Real Madrid. En tant que journalistes, nous sommes témoins d\'un changement monumental dans le paysage du football européen.\r\n\r\nL\'annonce ne surprend guère ceux qui ont suivi la montée en flèche de Mbappé. Depuis qu\'il a explosé sur la scène en tant qu\'adolescent, la sensation française a été saluée comme l\'avenir du football, avec sa vitesse fulgurante, son habileté impeccable et sa capacité incroyable à trouver le fond des filets. Son passage au PSG n\'a été rien de moins que spectaculaire, consolidant son statut de l\'un des talents les plus recherchés au monde.\r\n\r\nPour le Real Madrid, sécuriser la signature de Mbappé représente un coup d\'une ampleur immense. Les géants espagnols, synonymes de succès et de signatures de Galactiques, ont depuis longtemps convoité les services du jeune attaquant. Avec le départ de Cristiano Ronaldo, il y a eu un vide à combler dans le cœur des fidèles de Madrid, et Mbappé semble destiné à marcher dans ces chaussures illustres.', 'imgs/mbappe_real.webp', '2024-02-28', '2024-02-28', 1, 'foot, real, mbappe, goat', 'The Rock avec des cheveux'),
(2, 'La KCorp S\'Empare de la Scène Rocket League : Une Nouvelle Ère Débute !', 'Dans une annonce qui a fait vibrer la communauté esportive, la KCorp, l\'équipe emblématique de la scène française, entre de plain-pied dans le monde de Rocket League. En tant que journalistes, nous sommes témoins d\'une étape décisive dans l\'évolution du paysage esportif.\r\n\r\nCette incursion de la KCorp dans Rocket League ne surprend guère les observateurs attentifs. Réputée pour son expertise dans d\'autres disciplines comme Fortnite et Counter-Strike, l\'équipe a bâti sa réputation sur des performances de haut niveau et une passion indéfectible pour les compétitions en ligne.\r\n\r\nRocket League, avec sa combinaison unique de football et de conduite automobile, est le terrain de jeu idéal pour la KCorp. Avec son style de jeu rapide et technique, l\'équipe française promet d\'apporter une nouvelle dimension à la compétition, défiant les meilleures équipes du monde avec audace et détermination.\r\n\r\nPour la communauté de Rocket League, l\'arrivée de la KCorp représente une injection d\'excitation et d\'anticipation. Les fans se réjouissent de voir comment l\'équipe s\'intégrera dans le paysage déjà compétitif de Rocket League, et les autres équipes prennent note de cette nouvelle venue qui pourrait bien changer la donne.\r\n\r\nAlors que la KCorp s\'apprête à faire ses débuts sur la scène Rocket League, une nouvelle ère de compétition et de rivalité commence, prête à captiver et à inspirer les fans du monde entier.', 'imgs/KCorp.jpg', '2024-02-15', '2024-02-16', 2, 'foot, e-sport, rocketleague, kcorp', 'Le gras de kameto'),
(3, 'Nouvelle Découverte Archéologique à Rome.', 'Une équipe d\'archéologues a récemment mis au jour une découverte fascinante dans les ruines antiques de Rome. Des vestiges d\'un ancien temple romain datant de l\'ère impériale ont été trouvés sous les fondations d\'un bâtiment moderne en cours de rénovation. Les experts affirment que cette trouvaille offre un nouvel aperçu de la vie quotidienne dans la Rome antique et pourrait fournir des informations précieuses sur la société et la religion de l\'époque.', 'imgs/archeologie.jpg', '2024-02-01', '2024-02-08', 3, 'Archéologie, Rome antique, Découverte, Histoire', 'Équipe d\'archéologues de l\'Université de Rome, Service des Monuments et des Sites Archéologiques de Rome'),
(4, 'Nouvelle Avancée Médicale dans la Lutte Contre le Cancer', 'Des chercheurs ont annoncé une avancée majeure dans la lutte contre le cancer, avec le développement d\'un nouveau traitement prometteur. Cette thérapie révolutionnaire cible spécifiquement les cellules cancéreuses tout en préservant les cellules saines, offrant ainsi de meilleurs résultats et moins d\'effets secondaires pour les patients. Cette percée suscite un grand espoir dans la communauté médicale et parmi les personnes touchées par la maladie.', 'imgs/cancer.jpg', '2024-02-16', '2024-02-16', 4, 'Cancer, Recherche médicale, Traitement, Santé', 'Équipe de recherche du Centre Médical Universitaire de Genève, Institut National du Cancer'),
(5, 'Éruption Volcanique sur l\'Île de Maui !', 'Une éruption volcanique s\'est déclenchée sur l\'île de Maui, provoquant des évacuations massives et semant la panique parmi les habitants. Des colonnes de cendres et de fumée s\'élèvent dans le ciel tandis que des coulées de lave dévalent les flancs du volcan. Les autorités locales ont mis en place des mesures d\'urgence et exhortent la population à rester à l\'écart des zones dangereuses. Cette éruption rappelle la puissance redoutable de la nature et souligne l\'importance de la préparation aux catastrophes naturelles.', 'imgs/erruption.jpg', '2024-02-23', '2024-02-29', 5, 'Éruption volcanique, Maui, Sécurité publique, Catastrophe naturelle', 'Éruption volcanique, Maui, Sécurité publique, Catastrophe naturelle');

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
(2, 'Le chien de', 'Kameto'),
(3, 'Lambert', 'Éloïse'),
(4, 'Dubois', 'Mathéo'),
(5, 'Leroy', 'Manon');

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
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id_contact`, `nom`, `prenom`, `mail`) VALUES
(1, 'Tusseau', 'Elouan', 'tusseauelouan@gmail.com'),
(2, 'Bochette', 'Talmo', 'abc@bvc.cf'),
(4, 'Bochette', 'Felis', 'abc@bvc.f'),
(7, 'Walker', 'Paul', 'paul.walker@gmail.com'),
(9, 'Bonnet', 'Antoine', 'antoine.bonnet@gmail.com'),
(10, 'Mars', 'Rayan', 'rayan.mars@gmail.com'),
(11, 'G&eacute;rard', 'L&eacute;o', 'leo.gerard@gmail.com'),
(12, 'Parizet', 'Martin', 'martin.parizet@gmail.com'),
(13, 'Chevalier', 'Cl&eacute;ment', 'clement.chevalier@gmail.com'),
(15, 'Chevalier', 'Bastien', 'bastien.chevalier@gmail.com'),
(16, 'Maillard', 'fjzi', 'nauiif@dnjza.fafa'),
(18, 'Maillard', 'Felis', 'abc@bvc.ff'),
(19, 'Walker', 'Paul', 'abc@bvc.cfee'),
(20, 'Bochette', 'Th&eacute;o', 'FA@fe.fe');

-- --------------------------------------------------------

--
-- Structure de la table `menus`
--

CREATE TABLE `menus` (
  `id_menu` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `categorie_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `menus`
--

INSERT INTO `menus` (`id_menu`, `nom`, `url`, `categorie_id`) VALUES
(1, 'Sport', '', NULL),
(6, 'Informatique', '', NULL),
(7, 'Intelligence Artificielle', '', 6);

-- --------------------------------------------------------

--
-- Structure de la table `pages`
--

CREATE TABLE `pages` (
  `id_page` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `corp_texte` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_publication` date NOT NULL,
  `date_revision` date NOT NULL,
  `id_auteur` int(11) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `sources` varchar(255) NOT NULL
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
-- Index pour la table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id_menu`);

--
-- Index pour la table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id_page`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actualites`
--
ALTER TABLE `actualites`
  MODIFY `id_actualite` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identifiant de l''actualité', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `auteurs`
--
ALTER TABLE `auteurs`
  MODIFY `id_auteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `menus`
--
ALTER TABLE `menus`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `pages`
--
ALTER TABLE `pages`
  MODIFY `id_page` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
