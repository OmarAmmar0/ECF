-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 11 août 2023 à 08:36
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecf`
--

-- --------------------------------------------------------

--
-- Structure de la table `compétence`
--

CREATE TABLE `compétence` (
  `ID_competence` int(11) NOT NULL,
  `Nom_competence` varchar(500) DEFAULT NULL,
  `Description_competence` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `compétence`
--

INSERT INTO `compétence` (`ID_competence`, `Nom_competence`, `Description_competence`) VALUES
(1, 'Gomu Gomu no Mi (Fruit du demon Gomu)', 'La résine ayant beaucoup de propriétés en commun avec le caoutchouc, cela continuerait d’expliquer comment Luffy peut étier ses membres, résister à la foudre et même résister en partie à la chaleur. Et possède de nombreuse transformation: GEAR 2, GEAR 3,GEAR 4 BOUNCE MAN, GEAR 4 TANK MAN, GEAR 4 SNAKE MAN, Nightmare Luffy, GEAR 5.'),
(2, 'Maître épéiste', 'Roronoa Zoro a toujours été un utilisateur du célèbre Santoryu, également connu sous le nom de style à trois épées. Voici les 9 lames que Roronoa Zoro a maniées dans One Piece: Les épées de Johnny et de Yosaku, Wado Ichimonji, Yubashiri, Sandai Kitetsu, Shusui, Lame Seppuku, La faux de Kamazo, Enma.'),
(3, 'technique de combat de Zeff', 'elle fait appel aux jambes, car s\'il se blessait aux mains il ne pourrait plus cuisiner ! C\'est une sorte de capoeira, donnant l\'occasion à Sanji de faire des acrobaties de folie. Sa puissance destructrice est prodigieuse, il peut facilement mettre KO un dinosaure d\'un seul coup de pied !'),
(4, 'Baguette climatique', 'Il a la capacité de percevoir les changements climatiques et parvient même à prédire l\'apparition des lieux des cyclones grand Line imprévisible. Dans un premier temps Nami l\'utilise au combat divisé en trois parties.'),
(5, 'Yomi Yomi no Mi ( Fruit du demon de la Résurrection)', 'Le Yomi Yomi no Mi, ou Fruit de la Résurrection, est un Fruit du Démon de type Paramecia qui permet à son utilisateur de revenir à la vie après sa mort, faisant de lui un Homme Ressuscité. ET lui aussi est un épéiste. '),
(6, 'Cyborg', 'Franky possède plusieurs pouvoirs il sait totalement transformer en cyborg et a créé lui mem toute c\'est attaqué suivantes: Fresh Fire, Strong Right, Weapons Left, Beans Left, Coup de Vent, Strong Hammer, Hoshi Shield, Master Nail, Ouch Finger, Transformation : Franky Centaure ect..    '),
(7, 'Hana Hana no Mi  (Fruit du demon Hana)', 'C\'est un Fruit du Démon de type Paramecia qui lui permet de faire pousser n\'importe quelle partie de son corps sur n\'importe quelle surface. Quand elle utilise ses pouvoirs, elle croise les bras en forme d\'un \"X\". Et elle a le pouvoir de déchiffrer les Ponéglyphes.'),
(8, 'Hito Hito no Mi (Fruit du demon humain)', ' Ce Fruit lui permet de se transformer en humain ou en hybride renne-humain. Cela lui permet de pouvoir passer par trois transformations de base : Walk Point, Brain Point, Heavy Point et il utilise une drogue Rumble Ball ce qui lui permet de faire d\'autre transformations comme Horn Point, Jumping Point, Guard Point, Arm Point, Kung Fu Point, Monster Point.   '),
(9, 'lance-pierre', 'Usopp est un tireur d\'élite hors pair, ayant visiblement hérité de son père, également tireur d\'élite, et est le Tireur d\'Élite de l\'Équipage. Il est capable de tirer sur un rocher éloigné avec un canon avec précision sans difficulté.Il utilise un lance-pierres qu\'il manie avec une très grande dextérité, ne ratant jamais sa cible.'),
(10, 'Maître du Karaté Amphibien', 'un art martial qui lui permet de manipuler l’eau et de frapper avec une grande force. Quoique très dangereux sur terre, le Karaté des Hommes-Poissons possède un nombre de techniques sous-marines très dévastatrices conçues pour être pratique pour la force et la vitesse des Hommes-Poissons lorsqu\'ils sont sous l\'eau.');

-- --------------------------------------------------------

--
-- Structure de la table `personnages`
--

CREATE TABLE `personnages` (
  `ID_Personnages` int(11) NOT NULL,
  `Nom_personnage` varchar(500) DEFAULT NULL,
  `Role` varchar(500) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `personnages`
--

INSERT INTO `personnages` (`ID_Personnages`, `Nom_personnage`, `Role`, `image`, `Description`) VALUES
(1, 'Luffy', 'Capitaine de l\'équipage', 'https://pnganime.com/web/images/l/luffy-gear-5-colored.png', 'Luffy est un garçon plein d’entrain qui compte bien devenir un jour le roi des pirates. Il est à la recherche du One Piece, le trésor laissé dans l\'océan le plus dangereux du monde, la Route de tous les périls, par le célèbre pirate Gol D. Roger.'),
(2, 'Zoro', 'Bras droit de luffy ', 'https://i.pinimg.com/originals/65/7e/fd/657efd53bd0cc8cd8ebd1b6044cbcbf9.png', 'Il fut le premier membre à rejoindre l\'Équipage du Chapeau de Paille, il en est le premier et principal épéiste. Son ambition est de devenir le meilleur sabreur au monde et il a d\'ailleurs montré une volonté de fer dans le but d\'y parvenir. '),
(3, 'Sanji', 'Chef cuisinier ', 'https://i.pinimg.com/originals/81/8e/1b/818e1b9ead08535835ee2301e4bac117.png', 'Sanji est un fumeur à la chaîne, 19/21 ans, chef des Straw Hat Pirates1. Il est issu d’une famille aisée de North Blue et a grandi à East Blue, où il a surpassé de nombreux chefs, dont son mentor Zeff aux pieds rouges.'),
(4, 'Nami', 'Navigatrice ', 'https://i.pinimg.com/originals/41/21/35/4121350da0dab7ba7c4fd268513467c3.png', 'Elle est décrite comme une jeune fille de taille moyenne et mince, aux cheveux oranges et aux yeux bruns clairs. Nami est l’une des personnalités principales de la série et tient le rôle de navigatrice et de cartographe dans l’équipage de Luffy.'),
(5, 'Brook', 'Musicien', 'https://vignette.wikia.nocookie.net/vsbattles/images/0/02/Brook_by_bodskih-dbcd5jq.png/revision/latest?cb=20180920065212', 'Brook est tué avec ses compagnons, mais revient à la vie grâce à la puissance du fruit du diable Yomi Yomi, rejoignant son corps quand il a été réduit à un squelette. après Monkey D. Luffy Il l\'aide à recuperer son ombre sottrattagli le membre de Shichibukai Gekko Moria, Brook rejoint Chapeau de Paille.'),
(6, 'Franky', 'Charpentier', 'https://th.bing.com/th/id/R.33837c082df1644adbcb1a1236c83c25?rik=XvRssH%2fbBDVn9g&pid=ImgRaw&r=0', 'Après avoir rejoint l\'équipage de Luffy, le rôle de Franky est de devenir le charpentier de l\'équipe (le constructeur de navires). Il est chargé de maintenir et d\'améliorer le Thousand Sunny, le navire des Mugiwara'),
(7, 'Nico Robin', 'Archéologue', 'https://i.pinimg.com/originals/79/6c/f1/796cf16c7bf75fd7361a26915843facb.png', 'Nico Robin est une archéologue qui recherche désespérément une relique légendaire : la True History Stone, qui serait la clé de tous les mystères du monde de One Piece.'),
(8, 'Chopper', 'Medecin', 'https://i.imgur.com/uJ7Au6B.png', 'Chopper est un renne qui a acquis les capacités d’un humain après avoir consommé un fruit du diable. Après avoir passé la majeure partie de sa vie à Drum Island, Chopper a finalement rejoint Monkey D. Luffy dans son voyage pour devenir le roi des pirates.'),
(9, 'Usopp', 'Canonnier', 'https://vignette.wikia.nocookie.net/vsbattles/images/2/29/Kisspng-usopp-vinsmoke-sanji-one-piece-treasure-cruise-mon-sanji-5b35581d8ef481.8077102215302226215856.png/revision/latest?cb=20181212012338', ' Il sert de tireur d’élite des Pirates du Chapeau de Paille et est le quatrième membre à rejoindre l’équipage de Luffy et le troisième officiellement après la confrontation qu’ils ont eue avec le capitaine Kuro.'),
(10, 'Jinbe', 'Sauveur de Luffy', 'https://i.imgur.com/GjapGYW.png', 'Jinbe est un Homme-Poisson de la famille des requins-baleines. Il est le chef de Hommes-Poissons ainsi qu\'un shichibukai. En effet, il doit son titre non seulement à sa force mais aussi au désir du gouvernement mondial de rapprocher les humains et les Hommes-Poissons');

-- --------------------------------------------------------

--
-- Structure de la table `possède`
--

CREATE TABLE `possède` (
  `ID_Personnages` int(11) NOT NULL,
  `ID_competence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `ID_Utilisateur` int(11) NOT NULL,
  `Pseudo` varchar(500) DEFAULT NULL,
  `Mail` varchar(500) DEFAULT NULL,
  `Password` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ID_Utilisateur`, `Pseudo`, `Mail`, `Password`) VALUES
(1, 'zzz', 'zzz@gmail.com', 'zzz');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `compétence`
--
ALTER TABLE `compétence`
  ADD PRIMARY KEY (`ID_competence`);

--
-- Index pour la table `personnages`
--
ALTER TABLE `personnages`
  ADD PRIMARY KEY (`ID_Personnages`);

--
-- Index pour la table `possède`
--
ALTER TABLE `possède`
  ADD PRIMARY KEY (`ID_Personnages`,`ID_competence`),
  ADD KEY `FK_Possède_ID_competence` (`ID_competence`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`ID_Utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `compétence`
--
ALTER TABLE `compétence`
  MODIFY `ID_competence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `personnages`
--
ALTER TABLE `personnages`
  MODIFY `ID_Personnages` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `possède`
--
ALTER TABLE `possède`
  MODIFY `ID_Personnages` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `ID_Utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `possède`
--
ALTER TABLE `possède`
  ADD CONSTRAINT `FK_Possède_ID_Personnages` FOREIGN KEY (`ID_Personnages`) REFERENCES `personnages` (`ID_Personnages`),
  ADD CONSTRAINT `FK_Possède_ID_competence` FOREIGN KEY (`ID_competence`) REFERENCES `compétence` (`ID_competence`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
