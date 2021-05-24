-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 21 mai 2021 à 00:14
-- Version du serveur :  10.4.16-MariaDB
-- Version de PHP : 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hellocse`
--

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_17_095748_create_stars_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `stars`
--

CREATE TABLE `stars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `stars`
--

INSERT INTO `stars` (`id`, `nom`, `prenom`, `image`, `description`, `created_at`, `updated_at`) VALUES
(112, 'Jolie', 'Angelina', 'Angelina-Jolie.jpg', 'Angelina Jolie voit le jour en 1975, en Californie, dans une famille de comédiens. Sa mère, Marcheline Bertrand, décédée en 2007, et son père, Jon Voight sont tous deux, des acteurs américains. Son frère, James Haven, est acteur et réalisateur. Les parents d’Angelina Jolie divorcent alors qu’elle n’a qu’un an. C’est à New York, où elle grandit aux côtés de sa mère et de son frère que va naître sa passion pour le cinéma. Elle suit des cours de théâtre et son père la fait jouer dans ses réalisations. Sa famille s’installe en Californie à la fin des années 80. Elle garde de son adolescence à Beverly Hills des souvenirs plutôt négatifs. Elle est exclue par ses camarades de classe, s’inflige des scarifications et s’habille en noir. Elle entame néanmoins une carrière de mannequin dans l’agence Finesse Model Management au début des années 90. Elle tourne dans des clips musicaux, notamment avec Lenny Kravitz avant de tourner dans les films que réalise son frère pour l’université. En 1995, Angelina Jolie apparaît pour la première fois dans une production hollywoodienne, « Hackers », où elle rencontrera son premier mari, l’acteur anglais Jonny Lee Miller. Ils se marient l’année d’après et divorceront en 1999. Pendant quelques temps, l’actrice va jouer dans des films sans réel succès, même si ses performances sont souvent félicitées. Jusqu’au film « Une vie volée » qui lui permet de recevoir un Oscar du meilleur second rôle en 1999. La reconnaissance du grand public arrive pile à ce moment-là avec la sortie de « Bone Collector », et de « 60 Secondes Chrono ». La même année, elle épouse Billy Bob Thornton. Elle est choisie en 2001 pour incarner la sulfureuse Lara Croft dans l’adaptation du jeu vidéo « Tomb Raider ». Le tournage se passe au Cambodge : il va bouleverser la vie de l’actrice. Elle y adopte son premier enfant, Maddox, et décide de s’engager pour la bonne cause.  En 2003, elle se sépare de son mari. L’actrice va se faire dès lors plus rare sur les plateaux et plus présente sur le terrain en tant qu’ambassadrice de l’ONU. En 2005, Angelina Jolie joue la femme de Brad Pitt dans « Mr & Mrs Smith », une fiction qui rejoint vite la réalité puisque les deux acteurs vont tomber amoureux l’un de l’autre. Elle adopte sa première fille, Zahara, en Ethiopie la même année. Début 2006, Brad Pitt devient légalement le père adoptif de ses deux premiers enfants. Quelques mois après, Shiloh Nouvel, le premier enfant biologique du couple, voit le jour en mai 2006 en Namibie.', '2021-05-19 18:52:53', '2021-05-19 18:52:53'),
(114, 'Pattinson', 'Robert', 'Robert_Pattinson.jpg', 'Robert Douglas Thomas Pattinson (born 13 May 1986) is an English actor. Robert Douglas Thomas Pattinson (born 13 May 1986) is an English actor. Robert Douglas Thomas Pattinson (born 13 May 1986) is an English actor. Robert Douglas Thomas Pattinson (born 13 May 1986) is an English actor. Robert Douglas Thomas Pattinson (born 13 May 1986) is an English actor. Robert Douglas Thomas Pattinson (born 13 May 1986) is an English actor. Robert Douglas Thomas Pattinson (born 13 May 1986) is an English actor. Robert Douglas Thomas Pattinson (born 13 May 1986) is an English actor. Robert Douglas Thomas Pattinson (born 13 May 1986) is an English actor. Robert Douglas Thomas Pattinson (born 13 May 1986) is an English actor. Robert Douglas Thomas Pattinson (born 13 May 1986) is an English actor. Robert Douglas Thomas Pattinson (born 13 May 1986) is an English actor. Robert Douglas Thomas Pattinson (born 13 May 1986) is an English actor. Robert Douglas Thomas Pattinson (born 13 May 1986) is an English actor. Robert Douglas Thomas Pattinson (born 13 May 1986) is an English actor. Robert Douglas Thomas Pattinson (born 13 May 1986) is an English actor. Robert Douglas Thomas Pattinson (born 13 May 1986) is an English actor.', '2021-05-19 19:02:07', '2021-05-19 20:44:40'),
(117, 'Kidman', 'Nicole', 'kicole_Kidman.jpg', 'Nicole Kidman naît le 20 juin 1967 à Hawaï. Son père est biochimiste et psychologue, sa mère enseignante dans une école d’infirmière.Nicole Kidman naît le 20 juin 1967 à Hawaï. Son père est biochimiste et psychologue, sa mère enseignante dans une école d’infirmière.Nicole Kidman naît le 20 juin 1967 à Hawaï. Son père est biochimiste et psychologue, sa mère enseignante dans une école d’infirmière.Nicole Kidman naît le 20 juin 1967 à Hawaï. Son père est biochimiste et psychologue, sa mère enseignante dans une école d’infirmière.', '2021-05-19 20:58:50', '2021-05-19 21:01:54');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `stars`
--
ALTER TABLE `stars`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `stars`
--
ALTER TABLE `stars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
