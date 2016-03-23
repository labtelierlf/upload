-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Ven 05 Février 2016 à 16:50
-- Version du serveur :  5.5.42
-- Version de PHP :  5.5.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `modeleUtilisateurs`
--

-- --------------------------------------------------------

--
-- Structure de la table `Utilisateurs`
--

CREATE TABLE `Utilisateurs` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `nom` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `codePostal` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ville` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `pays` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `valide` tinyint(1) NOT NULL,
  `civilite` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `Utilisateurs`
--

INSERT INTO `Utilisateurs` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `nom`, `prenom`, `adresse`, `codePostal`, `ville`, `pays`, `telephone`, `valide`, `civilite`) VALUES
(2, 'Anna-Lyse', 'anna-lyse', 'annalyse200@rouge.fr', 'annalyse200@rouge.fr', 1, 'o0gtoi0djrkc0w8sgk8cg4g4s8swosc', '$2y$13$o0gtoi0djrkc0w8sgk8cguYEfxNefNMQMxXyfFduh5tN6LUokBwti', '2016-02-02 19:35:02', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'DURINE', 'Anna-Lyse', 'Labo', '17209', 'Vallée du RHIN', 'FR', '06 100 109', 1, '1'),
(3, 'joriton', 'joriton', 'joritonlf@gmail.com', 'joritonlf@gmail.com', 1, 't9p38j45irkw08osowsc8080wwok0cw', '$2y$13$t9p38j45irkw08osowsc8uKsbvL.NZWnHaEWkXR/maGVod663vcUi', '2016-02-04 18:43:11', 0, 0, NULL, 'IviaW6bpTyUNR2BNPq6QNdaAAMQck1bw7d2fCntUAPY', '2016-02-04 20:47:52', 'a:0:{}', 0, NULL, 'HENRI', 'Georges', 'rue des impasses', '666666', 'AIN', 'FR', '6666666666', 1, '0'),
(4, 'tonio', 'tonio', 'tonio@routourne.fr', 'tonio@routourne.fr', 1, 'ktwqsoef5i8g4wc804gww8co4g0goo8', '$2y$13$ktwqsoef5i8g4wc804gwwu4wamJx6vE1uAK4sgaCRs1KZdssM02ri', '2016-02-02 21:36:34', 0, 0, NULL, 'Jpgv-PMD0AUIWj7Y-PLNuoEQfjuUIe28q97mtTspbf4', '2016-02-02 21:40:00', 'a:0:{}', 0, NULL, 'KEKSCHOWZ', 'Antoine', 'Asile', '00000', 'TOUR', 'FR', '0000000000', 1, '0'),
(5, 'pascale', 'pascale', 'levobin33@or.fr', 'levobin33@or.fr', 1, 'hp09n6edr7k0888g4c04wkwk048g04s', '$2y$13$hp09n6edr7k0888g4c04weClDo6kDLfzorhwsWnaDZr.eLCH69XtG', '2016-02-02 23:18:11', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'LEVOBIN', 'Pascale', 'Part Dieu', '690000', 'LYON', 'FR', '0606060606', 1, '1'),
(6, 'riton', 'riton', 'riton@bleu.fr', 'riton@bleu.fr', 1, 'pbxx5k0mzuo0s88swooso4c84oc8ows', '$2y$13$pbxx5k0mzuo0s88swoosouivCl/Tp3/vPJR3oLJ6JJfBiNMKDPbRq', '2016-02-03 02:16:10', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'PLEY', 'Henri', 'petit écran', 'TF1', 'NICE', 'FR', '0612341234', 1, '0'),
(7, 'mehdi', 'mehdi', 'mehdi@ocre.fr', 'mehdi@ocre.fr', 1, 'ivlai8h0kfwcscs00gg4cwk4c4oockk', '$2y$13$ivlai8h0kfwcscs00gg4cup8KxcqVR3q0Wln/APg6plhuoMAYO5oG', '2016-02-03 03:19:54', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'OCRE', 'Mehdi', 'Avenue des Champs Élysées', '75000', 'PARIS', 'FR', '062341546543', 1, '0'),
(8, 'guitou', 'guitou', 'guitou@plus.bg', 'guitou@plus.bg', 1, 'tgn0kpmv1s0wosk00kccco8wc0wg0gw', '$2y$13$tgn0kpmv1s0wosk00kcccecZ/Bo7ALzqBGMq6dCL3fw2IuMA6jgPu', '2016-02-03 22:24:57', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'NANVEUX', 'Guy', 'grande frite', '45365', 'Bruxelles', 'BE', '0934236578', 1, '0'),
(10, 'eva', 'eva', 'eva-pascale@noire.fr', 'eva-pascale@noire.fr', 0, '7v8eka279ocgosk8cwgcsss4o8ocsk4', '$2y$13$7v8eka279ocgosk8cwgcseRWjXKs0Qsl3Lhj.ZJHE2pLikRBRGz5C', NULL, 0, 0, NULL, 'aBhSubD8-PTibxxdMrwYof51cZqr0uiHVreZgF9Ma_M', NULL, 'a:0:{}', 0, NULL, 'MËELLE', 'Éva-Pascale', 'ta gueule', 'CACHÉ', 'IPANDE', 'FR', '0922331144', 1, '1'),
(11, 'ron', 'ron', 'ron33@ornoir.fr', 'ron33@ornoir.fr', 0, 'hhid4pugjooossg4cgwo84cso8g8w8g', '$2y$13$hhid4pugjooossg4cgwo8uDJ0cS49abRWEUa4gbcicopRrH4UtDuS', NULL, 0, 0, NULL, 'moSHI5kQ5LDbZsHO9UpI6lOKluKOlI9w0p_nNZGkhsI', NULL, 'a:0:{}', 0, NULL, 'FLEUR', 'Ronnie', 'pétrole', '76549', 'EMPIRE', 'FR', '0922331144', 1, '0'),
(12, 'john', 'john', 'john33@jaunie.fr', 'john33@jaunie.fr', 0, 'fvahmk7s7lcs08kskwc0sc4skgg84sc', '$2y$13$fvahmk7s7lcs08kskwc0sOvQ2Ziqw53q5SZgNjqoZfV5VCUP48vmG', NULL, 0, 0, NULL, '8OsoEAOkjzbgxGyJMLejWS2kla-KTur74KlauIbrCPY', NULL, 'a:0:{}', 0, NULL, 'LEFFAY', 'Johnny', 'Casino', '76549', 'LAS VEGAS', 'BS', '0922331144', 1, '0'),
(16, 'lucas', 'lucas', 'lucas.grossot@gmail.com', 'lucas.grossot@gmail.com', 1, 'pvbjy37vr1cgo84kgkcgo080kcwk0g0', '$2y$13$pvbjy37vr1cgo84kgkcgouhhap39nJCWnvp6o1fRaTQBPvM8PLA/6', '2016-02-05 10:35:07', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'Grossot', 'Lucas', '54, rue alexandre boutin', '69100', 'villeurbanne', 'FR', '999999999', 1, '0'),
(17, 'bajard', 'bajard', 'jonathan.bajard@gmail.com', 'jonathan.bajard@gmail.com', 1, 'of7uu7sjvu8swg4oksk08wcgcwkcs4k', '$2y$13$of7uu7sjvu8swg4oksk08uqh32tid9SLs4S1d7Ya3kuHMmdDncUye', '2016-02-05 12:04:27', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'bajard', 'jonathan', 'fhj', 'jskdf', 'LYON', 'FR', '0637367695', 1, '0'),
(19, 'monsieur', 'monsieur', 'labtelier@gmail.com', 'labtelier@gmail.com', 1, 'fhly6suwjp4wwk0c0o0cog8gk8c4ww8', '$2y$13$fhly6suwjp4wwk0c0o0coeQZyxMvnIPHKJN7nAWlt5S3LfigzfSJK', '2016-02-05 16:28:59', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'TELIER', 'Lab', 'Loin', '54321', 'TERRAPOLE', 'FR', '0912341234', 1, '0');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_514AEAA692FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_514AEAA6A0D96FBF` (`email_canonical`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
