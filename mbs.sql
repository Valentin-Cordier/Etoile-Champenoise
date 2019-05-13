-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Lun 13 Mai 2019 à 16:56
-- Version du serveur :  5.7.25-0ubuntu0.18.04.2
-- Version de PHP :  7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mbs`
--

-- --------------------------------------------------------

--
-- Structure de la table `important`
--

CREATE TABLE `important` (
  `IDmess` int(8) UNSIGNED NOT NULL,
  `message` char(250) COLLATE latin1_general_ci NOT NULL,
  `datecrea` datetime NOT NULL,
  `dateend` datetime NOT NULL,
  `isvalid` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `important`
--

INSERT INTO `important` (`IDmess`, `message`, `datecrea`, `dateend`, `isvalid`) VALUES
(1, 'Ce site est en cours de construction, certaines sections ne sont pas disponibles ou bugées. Désolé du dérangement.', '2018-09-10 00:00:00', '2018-12-31 00:00:00', 0),
(2, 'Ceci est un message de test dont la date est périmée donc qui ne sera pas affichée si tous va bien.', '2018-09-01 00:00:00', '2018-09-08 00:00:00', 1),
(3, 'Ceci est un message pour être vraiment sur que la base de donnée fonctionne.', '2018-09-09 00:00:00', '2018-12-10 00:00:00', 0),
(4, 'Ceci est un second test afin de vérifier le bon fonctionnement du formulaire', '2018-09-25 10:31:05', '2018-09-28 00:00:00', 0),
(5, 'Test de gestion de l\'apparence de l\'interface', '2018-09-25 10:57:20', '2018-09-26 00:00:00', 0),
(6, 'Test de vérification', '2018-09-25 11:12:36', '2018-09-26 00:00:00', 0),
(7, 'Test de vérification', '2018-09-25 12:17:08', '2018-09-26 00:00:00', 0),
(8, 'test include', '2018-09-26 09:56:36', '2018-09-27 00:00:00', 0),
(9, 'test', '2018-10-01 09:43:00', '2018-10-08 00:00:00', 0),
(10, '+++++++++++++++Surcharge Carburant Octobre 2018 +6,69%+++++++++++++++++', '2018-10-03 11:05:36', '2018-10-31 00:00:00', 0),
(11, 'Surcharge Carburant Octobre 2018 +6,69%', '2018-10-03 11:07:21', '2018-10-31 00:00:00', 0),
(12, 'Surcharge Carburant Octobre 2018 +6,69%......', '2018-10-03 11:09:03', '2018-10-31 00:00:00', 1),
(13, 'Site est en cours de construction, certaines sections ne sont pas disponibles ou buggées. Désolé du dérangement.', '2018-10-22 15:45:19', '2018-12-31 00:00:00', 0),
(14, 'Site en cours de construction, certaines sections ne sont pas disponibles ou peuvent bugger. Désolé du dérangement.', '2018-10-22 15:48:28', '2018-12-31 00:00:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE `login` (
  `IDlogin` smallint(3) NOT NULL,
  `login` varchar(50) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  `islocked` tinyint(1) NOT NULL,
  `type` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `login`
--

INSERT INTO `login` (`IDlogin`, `login`, `mdp`, `islocked`, `type`) VALUES
(1, 'Administrateur', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', 0, 2),
(14, 'admin', '6133d09c2db6b59fc0b298e7a829446184d73ef9a40a72ea77987ae14a72d7a8', 0, 2),
(23, 'DefUser', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', 1, 1),
(24, 'test3', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', 0, 1),
(25, 'jeremy', 'test', 0, 2),
(26, 'lol', 'lol', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `traction`
--

CREATE TABLE `traction` (
  `id_traction` int(11) NOT NULL,
  `DPT` varchar(2) COLLATE utf8mb4_bin NOT NULL,
  `DESTINATION` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `KMS` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `TONNE` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `PALETTE` varchar(255) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Contenu de la table `traction`
--

INSERT INTO `traction` (`id_traction`, `DPT`, `DESTINATION`, `KMS`, `TONNE`, `PALETTE`) VALUES
(1, '2', 'SELLIER', '95', '39,38 €', '6,19 €'),
(2, '8', 'MBS 08', '102', '41,41 €', '8,25 €'),
(3, '10', 'TCP', '84', '34,57 €', '6,19 €'),
(4, '27', 'TRANS SERVICE', '275', '71,51 €', '13,19 €'),
(5, '51', 'MBS MARNE', '0', '10,00 €', '2,00 €'),
(6, '52', 'IMANY', '135', '46,48 €', '8,25 €'),
(7, '54', 'HEPPNER NANCY', '166', '52.31 €', '10,78 €'),
(8, '55', 'GONDRAND', '71', '31,80 €', '6,30 €'),
(9, '57', 'HEPNNER METZ', '166', '52,31 €', '10,78 €'),
(10, '59', 'HEPPNER LILLE', '243', '65,55 €', '12,03 €'),
(11, '60', 'VAUTHRIN', '195', '56,53 €', '10,06 €'),
(12, '62', 'HEPPNER LILLE', '315', '79,95 €', '14,88 €'),
(13, '67', 'HEPNNER STASBOURG', '295', '75,12 €', '13,99 €'),
(14, '68', 'HEPPNER MULHOUSE', '296', '75,12 €', '13,99 €'),
(15, '76', 'TRANS SERVICE', '275', '71,51 €', '13,19 €'),
(16, '78', 'VARILLON', '200', '71,06 €', '11,61 €'),
(17, '80', 'CST PROFRET AMIENS', '207', '65,08 €', '10,42 €'),
(18, '88', 'TMV', '221', '61,88 €', '11,22 €'),
(19, '89', 'TPS DE L\'YONNE', '158', '50,65 €', '8,45 €'),
(20, '90', 'HEPNNER MULHOUSE', '298', '75,13 €', '13,99 €'),
(21, '95', 'CLL', '155', '56,53 €', '10,42 €');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `IDuser` smallint(4) NOT NULL,
  `nom` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `Adresse1` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `Adresse2` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `zip` mediumint(5) UNSIGNED ZEROFILL DEFAULT NULL,
  `ville` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `tel` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `fax` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `siret` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nTVA` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `link` varchar(200) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`IDuser`, `nom`, `Adresse1`, `Adresse2`, `zip`, `ville`, `tel`, `fax`, `email`, `siret`, `nTVA`, `link`) VALUES
(1, 'Benito', 'PEP du bois Plan', '', 33750, 'BEYCHAC ET CAILLAU', '05 56 74 20 20', '05 56 74 23 94', '', '30 01 45 035 000 | 15', '', 'http://etoilechampenoisepf.teliway.com/track.php?code=etoilechampenoisepf&rem=BENITO&sMode=remettant&clef=323934'),
(2, 'CLL', '14 rue Chauvart', '', 95505, 'GONESSE', '01 30 11 66 66', '01 60 11 66 00', '', '34 09 69 351 000 | 14', '', 'http://etoilechampenoisepf.teliway.com/track.php?code=etoilechampenoisepf&rem=CLL&sMode=remettant&clef=313735'),
(3, 'Cogepress', 'ZE Puymoyen', '', 16400, 'PUYMOYEN', '', '', '', '32 50 22 077 000 | 11', '', 'http://etoilechampenoisepf.teliway.com/track.php?code=etoilechampenoisepf&rem=COGEPRES&sMode=remettant&clef=323235'),
(4, 'CST PROFRET', '22 rue Croix de pierre', '', 80000, 'AMIENS', '03 22 67 55 08', '03 22 43 13 89', '', '38 10 41 136 000 | 15', '', 'http://etoilechampenoisepf.teliway.com/track.php?code=etoilechampenoisepf&rem=CST&sMode=remettant&clef=323339'),
(5, 'ELD51', '', '', 00000, '', '', '', '', '', '', 'http://etoilechampenoisepf.teliway.com/track.php?code=etoilechampenoisepf&rem=ELD51&sMode=remettant&clef=333030'),
(6, 'GONDRAND', 'ZI des Trois Fontaines', '', 52000, 'ST DIZIER', '03 25 56 74 00', '03 25 56 74 21', '', '60 20 02 461 005 | 67', '', 'http://etoilechampenoisepf.teliway.com/track.php?code=etoilechampenoisepf&rem=GONDRAND&sMode=remettant&clef=323039'),
(7, 'GTLS75', 'Sogaris 160', '', 94130, 'RUNGIS', '', '', '', '40 57 80 230 000 | 34', '', 'http://etoilechampenoisepf.teliway.com/track.php?code=etoilechampenoisepf&rem=GTLS75&sMode=remettant&clef=3736'),
(8, 'GTRA 01', '7 AVENUE ANDRE ROUSSIN', '', 13016, 'MARSEILLE', '04 91 96 09 60', '04 91 96 90 49', '', '50 80 01 021 000 | 01', '', 'http://etoilechampenoisepf.teliway.com/track.php?code=etoilechampenoisepf&rem=GTRA01&sMode=remettant&clef=333432'),
(9, 'GTRA 13', '', '', 00000, '', '', '', '', '', '', 'http://etoilechampenoisepf.teliway.com/track.php?code=etoilechampenoisepf&rem=GTRA13&sMode=remettant&clef=323831'),
(10, 'GTRA 59', '7 AVENUE ANDRE ROUSSIN', '', 13016, 'MARSEILLE', '04 91 96 09 60', '04 91 96 90 49', '', '50 80 01 021 000 | 59', '', 'http://etoilechampenoisepf.teliway.com/track.php?code=etoilechampenoisepf&rem=GTRA59&sMode=remettant&clef=333030'),
(11, 'GTRA 89', '7 AVENUE ANDRE ROUSSIN', 'LE PONANT LITTORAL', 13016, 'MARSEILLE', '04 91 96 09 60', '04 91 96 90 49', '', '50 80 01 021 000 | 89', '', 'http://etoilechampenoisepf.teliway.com/track.php?code=etoilechampenoisepf&rem=510208&sMode=remettant&clef=333231'),
(12, 'GTRA 95', '7 AVENUE ANDRE ROUSSIN', '', 13016, 'MARSEILLE', '04 91 96 09 60', '04 91 96 90 49', '', '50 80 01 021 000 | 95', '', 'http://etoilechampenoisepf.teliway.com/track.php?code=etoilechampenoisepf&rem=GTRA95&sMode=remettant&clef=3439'),
(13, 'GTRA 41', '', '', 00000, '', '', '', '', '', '', 'http://etoilechampenoisepf.teliway.com/track.php?code=etoilechampenoisepf&rem=510084&sMode=remettant&clef=323338'),
(14, 'HEPPNER 54', '', '', 00000, '', '', '', '', '', '', 'http://etoilechampenoisepf.teliway.com/track.php?code=etoilechampenoisepf&rem=HEPPNER54&sMode=remettant&clef=323332'),
(15, 'HEPPNER 57', 'ZI DU CARREFOUR', '', 57601, 'METZ', '03 87 30 82 00', '03 87 30 86 71', '', '76 98 00 202 000 | 87', '', 'http://etoilechampenoisepf.teliway.com/track.php?code=etoilechampenoisepf&rem=HEPPNER57&sMode=remettant&clef=333030'),
(16, 'HEPPNER 59', 'ALLEE PAUL LANGEVIN', '', 59260, 'LEZENNES', '03 20 56 59 59', '03 20 47 77 23', '', '76 98 00 202 003 | 68', '', 'http://etoilechampenoisepf.teliway.com/track.php?code=etoilechampenoisepf&rem=HEPPNER59&sMode=remettant&clef=313631'),
(17, 'HEPPNER 67', '8 RUE DE LA STATION', '', 67027, 'STRASBOURG', '03 88 31 99 99', '03 88 34 04 55', '', '76 98 00 202 000 | 20', '', 'http://etoilechampenoisepf.teliway.com/track.php?code=etoilechampenoisepf&rem=HEPPNER67&sMode=remettant&clef=323637'),
(18, 'HEPPNER 68', '1 RUE JOSUE HOFNER', '', 68057, 'MULHOUSE', '03 89 32 72 00', '03 89 30 21 11', '', '64 56 51 677 000 | 11', '', 'http://etoilechampenoisepf.teliway.com/track.php?code=etoilechampenoisepf&rem=HEPPNER68&sMode=remettant&clef=313734'),
(19, 'HEPPNER 94', 'ROUTE DE VERSAILLES', '', 94130, 'RUNGIS COMPLEXE', '01 45 13 60 60', '01 43 75 22 03', '', '76 98 00 202 003 | 76', '', 'http://etoilechampenoisepf.teliway.com/track.php?code=etoilechampenoisepf&rem=HEPPNER94&sMode=remettant&clef=323337'),
(20, 'HEPPNER 95', '3 RUE D\'ARSONVAL', '', 95505, 'GONESSE', '01 30 11 66 66', '01 30 11 66 00', '', '76 98 00 202 001 | 45', '', 'http://etoilechampenoisepf.teliway.com/track.php?code=etoilechampenoisepf&rem=HEPPNER95&sMode=remettant&clef=313034'),
(21, 'IMANY', 'BP 151', '', 52203, 'LANGRES', '03 25 87 55 86', '03 25 87 76 90', '', '52 86 98 004 000 | 17', '', 'http://etoilechampenoisepf.teliway.com/track.php?code=etoilechampenoisepf&rem=IMANY&sMode=remettant&clef=3133'),
(22, 'LAMBERT ET VALETTE', '27 RUE PIERRE SENARD', '', 69800, 'ST PRIEST', '04 72 23 40 50', '04 78 21 79 53', '', '95 75 14 458 001 | 33', '', 'http://etoilechampenoisepf.teliway.com/track.php?code=etoilechampenoisepf&rem=LAMBERT&sMode=remettant&clef=323235'),
(23, 'MBS 08', 'ZI', '', 08350, 'DONCHERY', '03 24 33 70 00', '03 24 32 33 24', '', '78 55 20 727 000 | 70', '', 'http://etoilechampenoisepf.teliway.com/track.php?code=etoilechampenoisepf&rem=MBS08&sMode=remettant&clef=313632'),
(24, 'MCL', '', '', 00000, '', '', '', '', '', '', 'http://etoilechampenoisepf.teliway.com/track.php?code=etoilechampenoisepf&rem=MCL&sMode=remettant&clef=31'),
(25, 'MERY TRANSPORTS', 'ROUTE NATIONALE 1', '', 60430, 'WARLUIS', '03 44 89 22 22', '03 44 89 20 49', 'exploitation@transportsmery.fr', '52 70 20 226 000 | 25', '', 'http://etoilechampenoisepf.teliway.com/track.php?code=etoilechampenoisepf&rem=20795&sMode=remettant&clef=313639'),
(26, 'MESSAGERIE TOULOUSAINE', '31 AVENUE LARRIEU', '', 31000, 'TOULOUSE', '05 62 87 11 90', '05 62 20 08 51', '', '38 84 99 386 000 | 18', '', 'http://etoilechampenoisepf.teliway.com/track.php?code=etoilechampenoisepf&rem=MESSTOUL&sMode=remettant&clef=3937'),
(27, 'OENOTRANS', 'RUE DE L\'INDUSTRIE', '', 51160, 'AY', '03 52 85 00 08', '', 'contact@oenotrans.fr', '81 95 34 264 000 | 18', 'FR64819534264', 'http://etoilechampenoisepf.teliway.com/track.php?code=etoilechampenoisepf&rem=OENOTRANS&sMode=remettant&clef=323235'),
(28, 'SCHENKER 51', '', '', 00000, '', '', '', '', '', '', 'http://etoilechampenoisepf.teliway.com/track.php?code=etoilechampenoisepf&rem=SCHENKER51&sMode=remettant&clef=323131'),
(29, 'SCHENKER 85', '', '', 00000, '', '', '', '', '', '', 'http://etoilechampenoisepf.teliway.com/track.php?code=etoilechampenoisepf&rem=SCHENKER85&sMode=remettant&clef=3438'),
(30, 'SELLIER', 'ZI', '', 02200, 'VILLENEUVE ST GERMAIN', '03 23 73 15 65', '03 23 73 44 75', 'laurent.sellier@transports-sellier.fr', '35 15 26 645 000 | 12', '', 'http://etoilechampenoisepf.teliway.com/track.php?code=etoilechampenoisepf&rem=SELLIER&sMode=remettant&clef=3634'),
(31, 'SIMONIN', '', '', 00000, '', '', '', '', '', '', 'http://etoilechampenoisepf.teliway.com/track.php?code=etoilechampenoisepf&rem=SIMONIN&sMode=remettant&clef=323538'),
(32, 'TCP', '111 ROUTE D\'AUXERRE', '', 10120, 'ST ANDRE LES VERGERS', '03 25 71 79 70', '03 25 49 86 12', '', '39 90 37 761 000 | 18', '', 'http://etoilechampenoisepf.teliway.com/track.php?code=etoilechampenoisepf&rem=TCP&sMode=remettant&clef=3239'),
(33, 'TDL', '3 RUE DE STRASBOURG', '', 95380, 'LOUVRES', '01 34 72 80 80', '01 34 72 32 66', '', '37 88 61 702 000 | 25', '', 'http://etoilechampenoisepf.teliway.com/track.php?code=etoilechampenoisepf&rem=TDL&sMode=remettant&clef=313036'),
(34, 'TMV', '1 RUE DU MOULIN', '', 88150, 'IGNEY', '03 29 39 00 39', '03 29 31 65 90', '', '39 90 37 761 000 | 18', '', 'http://etoilechampenoisepf.teliway.com/track.php?code=etoilechampenoisepf&rem=TMV&sMode=remettant&clef=3530'),
(35, 'TRANSSERVICE', 'ZI DU GRAND LAUNAY', '', 76123, 'GRAND QUEVILLY', '02 32 81 64 81', '02 32 81 34 82', '', '32 70 75 438 000 | 17', '', 'http://etoilechampenoisepf.teliway.com/track.php?code=etoilechampenoisepf&rem=TRANSSERVICE&sMode=remettant&clef=3833'),
(36, 'TRSP DE L\'YONNE', '160 AVENUE DE SENEGALIA', '', 89000, 'SENS', '03 86 65 32 77', '03 86 40 73 46', '', '78 80 34 477 000 | 19', '', 'http://etoilechampenoisepf.teliway.com/track.php?code=etoilechampenoisepf&rem=YONNE&sMode=remettant&clef=323138'),
(37, 'UPSILON', '45 AVENUE DE PARIS', '', 89470, 'MONETEAU', '03 86 53 98 30', '03 86 40 73 46', '', '39 65 63 477 000 | 13', '', 'http://etoilechampenoisepf.teliway.com/track.php?code=etoilechampenoisepf&rem=UPSILON&sMode=remettant&clef=3431'),
(38, 'VARILLON', 'RUE ALFRED NOBEL', '', 27016, 'EVREUX', '02 32 29 66 71', '02 32 33 77 31', '', '58 36 50 957 000 | 25', '', 'http://etoilechampenoisepf.teliway.com/track.php?code=etoilechampenoisepf&rem=VARILLON&sMode=remettant&clef=333238'),
(39, 'XP', 'BOULEVARD D\'ITALIE', '', 77127, 'LIEUSAINT', '01 64 13 83 83', '01 64 13 83 79', '', '56 20 81 984 000 | 63', '', 'http://etoilechampenoisepf.teliway.com/track.php?code=etoilechampenoisepf&rem=XP&sMode=remettant&clef=323532'),
(40, 'ETOILE LOGISTIQUE DISTRIBUTION', 'RUE DES CRAYERES', '', 51520, 'RECY', '03 26 21 73 83', '03 26 21 74 33', 'sav@etoilechampenoise.fr', '39 78 34 691 002 | 22', '', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `important`
--
ALTER TABLE `important`
  ADD PRIMARY KEY (`IDmess`);

--
-- Index pour la table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`IDlogin`);

--
-- Index pour la table `traction`
--
ALTER TABLE `traction`
  ADD PRIMARY KEY (`id_traction`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IDuser`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `important`
--
ALTER TABLE `important`
  MODIFY `IDmess` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `login`
--
ALTER TABLE `login`
  MODIFY `IDlogin` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT pour la table `traction`
--
ALTER TABLE `traction`
  MODIFY `id_traction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `IDuser` smallint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
