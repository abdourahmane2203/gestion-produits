-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 07 Octobre 2018 à 12:04
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `ecommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(150) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  `status_client` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id_client`, `nom`, `prenom`, `telephone`, `adresse`, `email`, `mdp`, `status_client`) VALUES
(33, 'Kane', 'Cheikh', '+221773010702', 'Rufisque', 'kane@uadb.edu.sn', '$2y$10$mzQGYZxD/iW2cdRL4jAN2ez8P4djQoQRq9bdqfnSbs3PUVBXo1aKS', 'dÃ©sactivÃ©'),
(34, 'Diallo', 'Fatou binta', '+221773085052', 'Pikine', 'mariam@hotmail.sn', '$2y$10$k8i.Zj94RKUMcEIvRNRM6ui/MIspTYxqMbtmqCqyNixGLHQSUKt9e', 'activÃ©'),
(35, 'gg', 'gg', '77', 'jj', 'kane@uadb.edu.gn', '$2y$10$JZiTSr5B/fT18ND4UjQZdOErgWvzjT4Asky0V8Yy.IBEO53cp4zcq', 'activÃ©'),
(36, 'dd', 'iii', '88', 'l', 'm@ok.fr', '$2y$10$5oSUnoUHQaXOONu1F8YqOu2N6r3pB0WkQdvuTRcesY92yxZO0NpeS', 'activÃ©'),
(37, 'nn', 'nn', '4', 'kk', 'l@kll.fr', '$2y$10$IjUQ.xFzlkenLdxx9rZnme6J4xktAy0KSMsygswDGMdJMEfzkx0Zq', 'activÃ©'),
(38, 'Diaw', 'Ousmane', '7730125544', 'dk', 'ouse@gmail.com', '$2y$10$R/OTR3toi8rQN4/dVNHS3O7RC1i8FCoS4CHVPQm1Ok9k20b.3sQ7u', 'activÃ©'),
(39, 'kk', 'kk', '77', 'll', 'l@kll.ff', '$2y$10$ml9JAUIOPgtoPmgMnaSBLuuL9aCs0qm3xdErPoKYFsfGKKvRd6T0W', 'activÃ©'),
(40, 'Ba', 'Aissatou', '55', 'Kolda', 'aissatou@gamil.com', '$2y$10$TEZaU81tSkRty/ZV.YrZae0F9e8Q7Ep5p5Ilfcvn.KvKxYRBY3VIO', 'activÃ©'),
(41, 'Diallo', 'Fatou', '+221773085052', 'Pikine', 'maria@hotmail.sn', '$2y$10$MZc80kwXKUpTk2pngws7uOESCDFTYYjDRoKrudeVs//agMNwBRyOK', 'activÃ©'),
(42, 'Diallo', 'Fatou', '+221773085052', 'Pikine', 'maria@hotmail.s', '$2y$10$w8jfDnTpQQmvV0jfAeh99OItC9edPvIEmAZDk5869k/dV/3FEn6zm', 'activÃ©'),
(43, 'Diallo', 'Abdourahmane', '+221773085052', 'Pikine', 'abdourahmane2203@gmail.con', '$2y$10$7MreeRy/Kx1C/VMma/5i.uOHpfoy2fCw.Hrk9LAZiDEpuKeWRw58a', 'activÃ©'),
(44, 'Ba', 'Aissatou', '+221773085052', '555', 'fatou@gmail.co', '$2y$10$qITaU3LgzPslJ04SXVtToeYTsnUEJdfOEzAuh8opXjV5L7zUlEdRq', 'activÃ©'),
(45, 'nn', 'nn', '+221773085052', 'Pikine', 'abdourahmane2203@gmail.c', '$2y$10$msPMiaKGEu4o1CthEfPuKeHDRf8a3nLGQZ30H.08eWz48SrhlWa7K', 'activÃ©'),
(46, 'nn', 'Fatou', '+221773085052', 'Pikine', 'fatou@gmail.fr', '$2y$10$EZA1zw6K.FQ5wTI4NmzIEeeVFgTrHATmmShQDVZAV77.I8hODC7I.', 'activÃ©'),
(47, 'Diop', 'Abdourahmane', '+221773085052', 'Pikine', 'mariam@hotmail.ma', '$2y$10$jGtAqJ8285Jwv/KUXJvHXOga8aUPeCTClZwNqwHvRQS4FcUzKskQO', 'activÃ©'),
(48, 'Diop', 'Abdourahmane', '+221773216548', 'Pikine', 'mariam@hotmail.ti', '$2y$10$gHDsvKYgS8163pYG0Lx0nuRdL7xj2R6z6LOKuQMbIKUwhLbW16JAe', 'activÃ©'),
(49, 'Diallo', 'Fatou', '+221773085052', 'Pikine', 'abdourahmane2203@gmail.me', '$2y$10$1hltWdXJGDZl/rTDtLvyTetpVTVAGAPjfnWNDn56DVFJSDxZhT/4.', 'activÃ©'),
(50, 'Kane', 'Abdourahmane', '+221773085052', 'Pikine', 'abdourahmane2203@gmail.ab', '$2y$10$i5XZCIdiiVnW95sq5th46ut1C7w4d5.mgYk0xPvjh/ir2doAXNnBO', 'activÃ©'),
(51, 'Diallo', 'Abdourahmane', '+221773085052', 'Pikine', 'abdourahmane2203@gmail.ko', '$2y$10$zcyNin5EjvS8Wj5MQuDs2Om9t/LwMbc.BlMnRpFIfmqiQQYZj0Why', 'activÃ©'),
(52, 'Diallo', 'Abdourahmane', '+221773085052', 'Pikine', 'abdourahmane2203@gmail.kl', '$2y$10$18.X9Bj8aH3HyXRR4yIBpevChtqg9u5p.BHJeeEwz2LyOUtBv.8Ni', 'activÃ©'),
(53, 'Diallo', 'Fatou', '+221773085052', 'Pikine', 'mariam@hotmail.kj', '$2y$10$wmL.Zpt0BhJHqJ/OhE6hBugbiBZVkW8M.jxhQJDeJTt0rSGPneA1W', 'activÃ©'),
(54, 'Diop', 'Mariama', '+221773010702', 'oii', 'mariam@hotmail.hn', '$2y$10$C9J7C9t6CUIctpvTCi5KV.oJyY2EKWKmVFix3MTMwlfu0V8uZD1fm', 'activÃ©'),
(55, 'Diallo', 'Abdourahmane', '+221773085052', 'Pikine', 'fatou@gmail.bg', '$2y$10$idtSkYGmYbXCR/SzbhxobOp.O/9bjsotkZz6ZKi70FCa/01EwqxXm', 'activÃ©'),
(56, 'Diallo', 'Ibrahima', '+221773141202', 'France', 'ibra@gmail.com', '$2y$10$Vo/Rz8xuzFWkSNM8X8KaQ.5r0Pn77YgMJhsLHUBLVvhYDcpTTZXGi', 'activÃ©'),
(58, 'Diallo', 'Abdourahmane', '+221762562224', 'Dakar-sÃ©nÃ©gal', 'diallo@gmail.com', '$2y$10$/BZ9YnnaP3HpO0SzkLK/o.GcDynUrUU0Udc2oGnCfrajxZk9JVUS2', 'activÃ©'),
(59, 'Kane', 'Cheikh', '+221773010702', 'Rufisque', 'kane@uadb.edu.fr', '$2y$10$2nELBF.tQ7xQn6nbgAHEhuhnLWMgEVpkstnqh8X/lVy.gTgWrJGV.', 'activÃ©'),
(60, 'Gningue', 'Ibrahima', '+2215784568888', 'Louga', 'ibrahima@gmail.com', '$2y$10$brFqBVwc5Qw4F3ts8jXJAeOa0ZCkzL6YEYDSzAr81KzALhNwizyH2', 'activÃ©'),
(61, 'll', 'lll', '77788888', 'mmmm', 'mmm@gmail.com', '$2y$10$ihZdeTpHQVoT/YJA7xN0eObec3auC6P7X.N0.qmhYFe/YxdfR5cKK', 'activÃ©'),
(62, 'Diallo', 'Fatou', '+6655777788999', '4mmp', 'mariam@hotmail.fr', '$2y$10$wnBB3hW1w5elp6Pq71UbFOfNxWHoMGxHT07ggv0dcTcYFkP82seue', 'activÃ©'),
(63, 'Diallo', 'Fatou', '+6655777788999', '4mmp', 'mariam@hotmail.fo', '$2y$10$3ILP/O/FUVX1jWXbASSvBuAFpZrdlPL90S5Yw97yUGJa0ychVdzC6', 'activÃ©'),
(64, 'Diallo', 'Fatou', '+6655777788999', '4mmp', 'mariam@hotmail.fy', '$2y$10$GwK/aQh1cbx5YlGlW7.gG.6qo8dGY./2zbUQJr/1/9Pp/ZnKQbg/2', 'activÃ©'),
(65, 'diop', 'Fatou binta', '+2212544558888', 'Rue 10', 'diop@ucad.edu.sn', '$2y$10$zksDJx25XUVDzyNVprfK8e1.0hL6tbk83OYL.APKtDFZyWIme/Cva', 'activÃ©'),
(66, 'ba', 'ouratou', '555555555555555', 'pikine', 'ba@gmail.com', '$2y$10$tYzRhf4w1Y8JXw14IbvuAuL5Apn7ZmY6EKABv.R3e1PUwyWkV54Mm', 'activÃ©'),
(67, 'diop', 'Khady', '+221772542326', 'Pikine rue 10', 'khady@gmail.com', '$2y$10$Uv5tm6BqI1/s3FH7tKjOV.IY2u4mW3wttmDgD1Qfeg6RrjXqV1Ie6', 'activÃ©'),
(68, 'SY', 'Mansour', '+221773211545', 'Tamba', 'mansour@yahoo.fr', '$2y$10$ddFs8h5rYsEsCg9N8M351uxR2uQaj6cK3sofq5pPULfl1plYB1uz2', 'activÃ©');

-- --------------------------------------------------------

--
-- Structure de la table `commercial`
--

CREATE TABLE IF NOT EXISTS `commercial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(100) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `commercial`
--

INSERT INTO `commercial` (`id`, `login`, `mdp`) VALUES
(1, 'fatou', '123'),
(2, 'fatou', '123');

-- --------------------------------------------------------

--
-- Structure de la table `commerciaux`
--

CREATE TABLE IF NOT EXISTS `commerciaux` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `courriel` varchar(50) NOT NULL,
  `mdp` varchar(200) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `commerciaux`
--

INSERT INTO `commerciaux` (`id_user`, `nom`, `prenom`, `telephone`, `adresse`, `courriel`, `mdp`) VALUES
(1, 'DIOP', 'Fatou', '+221777367427', 'Rue 10', 'fatou', '123');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE IF NOT EXISTS `produits` (
  `id_produit` int(11) NOT NULL AUTO_INCREMENT,
  `nomProd` varchar(150) NOT NULL,
  `categorie` varchar(150) NOT NULL,
  `stock` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id_produit`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`id_produit`, `nomProd`, `categorie`, `stock`, `prix`, `photo`, `description`) VALUES
(1, 'jj', 'pp', 77, 77, '002.jpg', 'nnn'),
(2, 'hp pro book', 'ordinateur', 45, 2000000, 'IMG-20180201-WA0000.jpg', 'hp pro core i5.\r\nEtat neuf'),
(5, 'Nokia', 'Portable windowsphone', 200, 130000, 'IMG-20180128-WA0032.jpg', 'Windows phone 5.6 ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
