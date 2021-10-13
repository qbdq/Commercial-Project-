

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";




CREATE TABLE IF NOT EXISTS `client` (
  `numclient` int(30) NOT NULL,
  `raison_sociale` varchar(60) NOT NULL,
  `adresse_client` varchar(60) NOT NULL,
  `ville_client` varchar(60) NOT NULL,
  `pays` varchar(30) NOT NULL,
  `telephone` int(30) NOT NULL,
  PRIMARY KEY (`numclient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `client` (`numclient`, `raison_sociale`, `adresse_client`, `ville_client`, `pays`, `telephone`) VALUES
(1, 'marie', 'hay maghreb arabi massira 2 ', 'temara', 'maroc', 662348188),
(2, 'divorce', 'new york time square', 'new york', 'usa', 1505682654);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `num_commande` int(60) NOT NULL,
  `num_client` int(60) NOT NULL,
  `date_commande` varchar(60) NOT NULL,
  PRIMARY KEY (`num_commande`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commande`
--

INSERT INTO `commande` (`num_commande`, `num_client`, `date_commande`) VALUES
(2, 1, '13/12/2015'),
(3, 2, '30/1/2016');

-- --------------------------------------------------------

--
-- Structure de la table `details_commande`
--

CREATE TABLE IF NOT EXISTS `details_commande` (
  `num_commande` int(30) NOT NULL,
  `ref_produit` int(30) NOT NULL,
  `qte_commande` int(30) NOT NULL,
  PRIMARY KEY (`num_commande`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `details_commande`
--

INSERT INTO `details_commande` (`num_commande`, `ref_produit`, `qte_commande`) VALUES
(1, 1, 12),
(2, 22, 10);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `ref_produit` int(60) NOT NULL,
  `nom_produit` varchar(60) NOT NULL,
  `prix_unitaire` int(30) NOT NULL,
  `qte_stocke` int(30) NOT NULL,
  `indisponible` varchar(30) NOT NULL,
  PRIMARY KEY (`ref_produit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`ref_produit`, `nom_produit`, `prix_unitaire`, `qte_stocke`, `indisponible`) VALUES
(1, 'Samsung galaxy s6', 5000, 120, 'non'),
(2, 'iphone 6 plus ', 6000, 100, 'non');
