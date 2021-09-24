-- --------------------------------------------------------
--
-- Structure de la table `annonces`
--

CREATE TABLE IF NOT EXISTS `annonces` (
  `IDAnnonce` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(200) NOT NULL,
  `texte` text NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `IDCategorie` int(11) NOT NULL,
  PRIMARY KEY (`IDAnnonce`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------
--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `IDcategorie` int(11) NOT NULL AUTO_INCREMENT,
  `categorie` varchar(200) NOT NULL,
  PRIMARY KEY (`IDcategorie`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


-- --------------------------------------------------------
--
-- Contenu
--

INSERT INTO `categories` (`IDcategorie`, `categorie`) VALUES
(1, 'Logement'),
(2, 'Multimedia'),
(3, 'Vehicule'),
(4, 'Loisir'),
(5, 'Service'),
(6, 'Autre');

INSERT INTO `annonces` (`IDAnnonce`, `titre`, `texte`, `visible`, `photo`, `date`, `IDCategorie`) VALUES
(753, 'Pièces de moto Harley', 'pièces de moto Harley softail héritage se montent sur les motos de 2000 à 2012\r\nguidon ,2 pots silencieux avec barre de fixation , filtre à air complet avec filtre KN pour softail deluxe injection 1450 , 2 amortisseurs , leviers de freins , rétroviseurs\r\nsupport phare additionel , tank panel , entourage de phare sportster , repose pieds , bloc disque , antivol U , 2 cadenas , feux de garde boue\r\n\r\nprix de 20 € à 170 €', 1, '', '2016-10-19', 3),
(751, 'Covoiturage Lille-Paris', 'J''effectue l''aller-retour Lille/Paris chaque weekend. Si vous etes int&eacute;ress&eacute; pour effectuer le voyage avec moi, contacter-moi au 03.xx.xx.xx.xx', 1, '', '2015-10-24', 3),
(752, 'Course a pieds', 'Le club CATP (Cours Avec Tes Pieds) organise des courses a pieds de 10km tous les jeudis soirs a 18h devant HEI. Venez nous rejoindre si l''aventure vous int&eacute;resse... Renseignements (voir adresse mail)', 1, 'course.jpg', '2015-10-24', 4),
(754, 'Alldaymall A88X Tablette tactile 7 pouces - Android 4.4, Quad Core, 1024x600 HD, double caméra, Bluetooth, Wi-Fi, 8GB', 'Processeur Quad-core 1.3 GHz, avec le système d''exploitation Android 4.4 KitKat\r\n7 " HD Écran , Résolution 1024 * 600\r\nCompatible avec Skype, Netflix, Facebook, YouTube et plus encore.\r\nDouble caméra, Bluetooth, Wi-Fi, 8GB internal storage expandable to 32GB with Micro SD\r\nCe que vous obtenez: Alldaymall A88X Tablet ( Rose ), câble USB, câble OTG, chargeur, manuel d''utilisation et garantie 1 an', 1, '', '2016-10-19', 2),
(755, 'Ford Kuga', 'Ford - kuga 2.0 tdci 140ch fap titanium 4x2 - diesel - 36431 kilomètres. -abs,accoudoir arrière,aide au freinage d''urgence,airbag conducteur,airbag passager,airbags latéraux avant,airbags rideaux av et ar,antidémarrage électronique,antipatinage,appuis-tête avant actifs,bacs de portes avant,banquette 1/3-2/3,banquette ar rabattable,banquette arrière 3 places,becquet arrière,boite à gants fermée,boucliers av et ar couleur caisse,capteur de luminosité,capteur de pluie,ceinture de vitrage chromée,ceintures avant ajustables en hauteur,clim automatique bi-zones,compte tours,configuration 5 places,démarrage sans clé,direction assistée asservie à la vitesse,ebd,échappement à double sortie,éclairage au sol,esp,essuie-glace arrière,feux de freinage d''urgence,filtre à particules,filtre à pollen,jantes alu 17",kit anti-crevaison,lampe de coffre,lampes de lecture à l''arrière,lampes de lecture à l''avant,miroir de courtoisie conducteur éclairé,miroir de courtoisie passager éclairé,ordinateur de bord,ouverture des vitres séquentielle,phares antibrouillard,phares halogènes,poches d’aumônières,pommeau de levier vitesse en cuir,porte-gobelets arrière', 0, '', '0000-00-00', 3),
(757, 'Moto Honda 600 cc', 'À vendre Honda 600 Hornet de 2009\r\n\r\nLa moto à 39800 km au compteur d''origine.\r\n\r\n- kit chaîne neuf (changer à 36127km) Facture\r\n- Plaquette neuf (changer à 36127km) Facture\r\n- révision des 30 000 effectué en octobre 2015 (Facture)\r\n\r\n- Passage de roue Ermax rouge\r\n- Lèche roue Ermax rouge\r\n- Filet de jante rouge\r\n\r\nAvec je donne un antivol Certifié SRA d''une valeur de 65Euro(s) (Facture)\r\n\r\nLa moto est en très bon état, entretien régulier je suis la 2ème main\r\n\r\nÀ Vendre 3400Euro(s) À débattre; ', 0, '', '2016-10-19', 3),
(759, 'Poney', 'Vends plusieurs poneys de tailles différentes ,gentils,braves.\r\n\r\nIdéale,pâturage,cadeau,loisirs,centre équestre...\r\n\r\nPrix: à partir de 250 jusque 350 euros\r\n\r\nPour plus de renseignements contactez moi que par téléphone au 06.xx.xx.xx.xx\r\n\r\nChevaux,âne,chèvres,lama,forain,cirque,poney...', 0, '', '2016-10-19', 4);
