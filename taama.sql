-- MySQL dump 10.13  Distrib 5.6.21, for Win32 (x86)
--
-- Host: localhost    Database: taama
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.25-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `colis`
--

DROP TABLE IF EXISTS `colis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `colis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transporteur_id` int(11) DEFAULT NULL,
  `poids` int(11) NOT NULL,
  `ville_depart_id` int(11) DEFAULT NULL,
  `ville_arrivee_id` int(11) DEFAULT NULL,
  `date_depart` datetime DEFAULT NULL,
  `date_arrive` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_470BDFF997C86FA4` (`transporteur_id`),
  KEY `IDX_470BDFF9497832A6` (`ville_depart_id`),
  KEY `IDX_470BDFF934AC9A4B` (`ville_arrivee_id`),
  CONSTRAINT `FK_470BDFF934AC9A4B` FOREIGN KEY (`ville_arrivee_id`) REFERENCES `ville` (`id`),
  CONSTRAINT `FK_470BDFF9497832A6` FOREIGN KEY (`ville_depart_id`) REFERENCES `ville` (`id`),
  CONSTRAINT `FK_470BDFF997C86FA4` FOREIGN KEY (`transporteur_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colis`
--

LOCK TABLES `colis` WRITE;
/*!40000 ALTER TABLE `colis` DISABLE KEYS */;
INSERT INTO `colis` VALUES (1,1,15,2,1,'2012-01-01 00:00:00','2012-01-01 00:00:00'),(2,1,10,1,2,'2017-10-17 00:00:00','2017-11-05 00:00:00'),(3,1,20,2,1,'2012-01-01 00:00:00','2012-01-01 00:00:00');
/*!40000 ALTER TABLE `colis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pays`
--

DROP TABLE IF EXISTS `pays`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pays` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=256 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pays`
--

LOCK TABLES `pays` WRITE;
/*!40000 ALTER TABLE `pays` DISABLE KEYS */;
INSERT INTO `pays` VALUES (1,'Afghanistan','AF'),(2,'Albanie','AL'),(3,'Algérie','DZ'),(4,'Samoa américaines','AS'),(5,'Andorre','AD'),(6,'Angola','AO'),(7,'Anguilla','AI'),(8,'Antarctique','AQ'),(9,'Antigua-et-Barbuda','AG'),(10,'Argentine','AR'),(11,'Arménie','AM'),(12,'Aruba','AW'),(13,'Île de l’Ascension','AC'),(14,'Australie','AU'),(15,'Autriche','AT'),(16,'Azerbaïdjan','AZ'),(17,'Bahamas','BS'),(18,'Bahreïn','BH'),(19,'Bangladesh','BD'),(20,'Barbade','BB'),(21,'Biélorussie','BY'),(22,'Belgique','BE'),(23,'Belize','BZ'),(24,'Bénin','BJ'),(25,'Bermudes','BM'),(26,'Bhoutan','BT'),(27,'Bolivie','BO'),(28,'Bosnie-Herzégovine','BA'),(29,'Botswana','BW'),(30,'Brésil','BR'),(31,'Territoire britannique de l’océan Indien','IO'),(32,'Îles Vierges britanniques','VG'),(33,'Brunéi Darussalam','BN'),(34,'Bulgarie','BG'),(35,'Burkina Faso','BF'),(36,'Burundi','BI'),(37,'Cambodge','KH'),(38,'Cameroun','CM'),(39,'Canada','CA'),(40,'Îles Canaries','IC'),(41,'Cap-Vert','CV'),(42,'Pays-Bas caribéens','BQ'),(43,'Îles Caïmans','KY'),(44,'République centrafricaine','CF'),(45,'Ceuta et Melilla','EA'),(46,'Tchad','TD'),(47,'Chili','CL'),(48,'Chine','CN'),(49,'Île Christmas','CX'),(50,'Îles Cocos','CC'),(51,'Colombie','CO'),(52,'Comores','KM'),(53,'Congo-Brazzaville','CG'),(54,'Congo-Kinshasa','CD'),(55,'Îles Cook','CK'),(56,'Costa Rica','CR'),(57,'Croatie','HR'),(58,'Cuba','CU'),(59,'Curaçao','CW'),(60,'Chypre','CY'),(61,'Tchéquie','CZ'),(62,'Côte d’Ivoire','CI'),(63,'Danemark','DK'),(64,'Diego Garcia','DG'),(65,'Djibouti','DJ'),(66,'Dominique','DM'),(67,'République dominicaine','DO'),(68,'Équateur','EC'),(69,'Égypte','EG'),(70,'El Salvador','SV'),(71,'Guinée équatoriale','GQ'),(72,'Érythrée','ER'),(73,'Estonie','EE'),(74,'Éthiopie','ET'),(75,'Eurozone','EZ'),(76,'Îles Malouines','FK'),(77,'Îles Féroé','FO'),(78,'Fidji','FJ'),(79,'Finlande','FI'),(80,'France','FR'),(81,'Guyane française','GF'),(82,'Polynésie française','PF'),(83,'Terres australes françaises','TF'),(84,'Gabon','GA'),(85,'Gambie','GM'),(86,'Géorgie','GE'),(87,'Allemagne','DE'),(88,'Ghana','GH'),(89,'Gibraltar','GI'),(90,'Grèce','GR'),(91,'Groenland','GL'),(92,'Grenade','GD'),(93,'Guadeloupe','GP'),(94,'Guam','GU'),(95,'Guatemala','GT'),(96,'Guernesey','GG'),(97,'Guinée','GN'),(98,'Guinée-Bissau','GW'),(99,'Guyana','GY'),(100,'Haïti','HT'),(101,'Honduras','HN'),(102,'R.A.S. chinoise de Hong Kong','HK'),(103,'Hongrie','HU'),(104,'Islande','IS'),(105,'Inde','IN'),(106,'Indonésie','ID'),(107,'Iran','IR'),(108,'Irak','IQ'),(109,'Irlande','IE'),(110,'Île de Man','IM'),(111,'Israël','IL'),(112,'Italie','IT'),(113,'Jamaïque','JM'),(114,'Japon','JP'),(115,'Jersey','JE'),(116,'Jordanie','JO'),(117,'Kazakhstan','KZ'),(118,'Kenya','KE'),(119,'Kiribati','KI'),(120,'Kosovo','XK'),(121,'Koweït','KW'),(122,'Kirghizistan','KG'),(123,'Laos','LA'),(124,'Lettonie','LV'),(125,'Liban','LB'),(126,'Lesotho','LS'),(127,'Libéria','LR'),(128,'Libye','LY'),(129,'Liechtenstein','LI'),(130,'Lituanie','LT'),(131,'Luxembourg','LU'),(132,'R.A.S. chinoise de Macao','MO'),(133,'Macédoine','MK'),(134,'Madagascar','MG'),(135,'Malawi','MW'),(136,'Malaisie','MY'),(137,'Maldives','MV'),(138,'Mali','ML'),(139,'Malte','MT'),(140,'Îles Marshall','MH'),(141,'Martinique','MQ'),(142,'Mauritanie','MR'),(143,'Maurice','MU'),(144,'Mayotte','YT'),(145,'Mexique','MX'),(146,'États fédérés de Micronésie','FM'),(147,'Moldavie','MD'),(148,'Monaco','MC'),(149,'Mongolie','MN'),(150,'Monténégro','ME'),(151,'Montserrat','MS'),(152,'Maroc','MA'),(153,'Mozambique','MZ'),(154,'Myanmar (Birmanie)','MM'),(155,'Namibie','NA'),(156,'Nauru','NR'),(157,'Népal','NP'),(158,'Pays-Bas','NL'),(159,'Nouvelle-Calédonie','NC'),(160,'Nouvelle-Zélande','NZ'),(161,'Nicaragua','NI'),(162,'Niger','NE'),(163,'Nigéria','NG'),(164,'Niue','NU'),(165,'Île Norfolk','NF'),(166,'Corée du Nord','KP'),(167,'Îles Mariannes du Nord','MP'),(168,'Norvège','NO'),(169,'Oman','OM'),(170,'Pakistan','PK'),(171,'Palaos','PW'),(172,'Territoires palestiniens','PS'),(173,'Panama','PA'),(174,'Papouasie-Nouvelle-Guinée','PG'),(175,'Paraguay','PY'),(176,'Pérou','PE'),(177,'Philippines','PH'),(178,'Îles Pitcairn','PN'),(179,'Pologne','PL'),(180,'Portugal','PT'),(181,'Porto Rico','PR'),(182,'Qatar','QA'),(183,'Roumanie','RO'),(184,'Russie','RU'),(185,'Rwanda','RW'),(186,'La Réunion','RE'),(187,'Samoa','WS'),(188,'Saint-Marin','SM'),(189,'Arabie saoudite','SA'),(190,'Sénégal','SN'),(191,'Serbie','RS'),(192,'Seychelles','SC'),(193,'Sierra Leone','SL'),(194,'Singapour','SG'),(195,'Saint-Martin (partie néerlandaise)','SX'),(196,'Slovaquie','SK'),(197,'Slovénie','SI'),(198,'Îles Salomon','SB'),(199,'Somalie','SO'),(200,'Afrique du Sud','ZA'),(201,'Géorgie du Sud et îles Sandwich du Sud','GS'),(202,'Corée du Sud','KR'),(203,'Soudan du Sud','SS'),(204,'Espagne','ES'),(205,'Sri Lanka','LK'),(206,'Saint-Barthélemy','BL'),(207,'Sainte-Hélène','SH'),(208,'Saint-Christophe-et-Niévès','KN'),(209,'Sainte-Lucie','LC'),(210,'Saint-Martin','MF'),(211,'Saint-Pierre-et-Miquelon','PM'),(212,'Saint-Vincent-et-les-Grenadines','VC'),(213,'Soudan','SD'),(214,'Suriname','SR'),(215,'Svalbard et Jan Mayen','SJ'),(216,'Swaziland','SZ'),(217,'Suède','SE'),(218,'Suisse','CH'),(219,'Syrie','SY'),(220,'Sao Tomé-et-Principe','ST'),(221,'Taïwan','TW'),(222,'Tadjikistan','TJ'),(223,'Tanzanie','TZ'),(224,'Thaïlande','TH'),(225,'Timor oriental','TL'),(226,'Togo','TG'),(227,'Tokélaou','TK'),(228,'Tonga','TO'),(229,'Trinité-et-Tobago','TT'),(230,'Tristan da Cunha','TA'),(231,'Tunisie','TN'),(232,'Turquie','TR'),(233,'Turkménistan','TM'),(234,'Îles Turques-et-Caïques','TC'),(235,'Tuvalu','TV'),(236,'Îles mineures éloignées des États-Unis','UM'),(237,'Îles Vierges des États-Unis','VI'),(238,'Ouganda','UG'),(239,'Ukraine','UA'),(240,'Émirats arabes unis','AE'),(241,'Royaume-Uni','GB'),(242,'Nations Unies','UN'),(243,'États-Unis','US'),(244,'Uruguay','UY'),(245,'Ouzbékistan','UZ'),(246,'Vanuatu','VU'),(247,'État de la Cité du Vatican','VA'),(248,'Venezuela','VE'),(249,'Vietnam','VN'),(250,'Wallis-et-Futuna','WF'),(251,'Sahara occidental','EH'),(252,'Yémen','YE'),(253,'Zambie','ZM'),(254,'Zimbabwe','ZW'),(255,'Îles Åland','AX');
/*!40000 ALTER TABLE `pays` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `facebook_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_8D93D649C05FB297` (`confirmation_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'timtim','timtim','fkanfana@yahoo.fr','fkanfana@yahoo.fr',1,'fN7O89jaf0S8RRc./fuzECG8Rj2wmd.rAybqmbWBEto','xgcZ+k23AW/vz5O4czEqfuuiH0xbXdYZPMHex8/3oA7BEVUZP4xlAH5zG1e9BmQgLY7pj8NDfLjGQ6xlWtyYxA==','2017-10-15 14:24:37',NULL,NULL,'a:1:{i:0;s:14:\"FOS.ADMIN.ROLE\";}',NULL,'Kanfana','Fatoumata 1');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ville`
--

DROP TABLE IF EXISTS `ville`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ville` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pays_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code_postal` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_43C3D9C3A6E44244` (`pays_id`),
  CONSTRAINT `FK_43C3D9C3A6E44244` FOREIGN KEY (`pays_id`) REFERENCES `pays` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ville`
--

LOCK TABLES `ville` WRITE;
/*!40000 ALTER TABLE `ville` DISABLE KEYS */;
INSERT INTO `ville` VALUES (1,138,'Djenné','00000'),(2,80,'Rennes','35000'),(3,80,'Rouen','76000');
/*!40000 ALTER TABLE `ville` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-16 22:12:44
