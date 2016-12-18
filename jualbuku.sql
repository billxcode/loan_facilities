-- MySQL dump 10.16  Distrib 10.1.19-MariaDB, for Linux (i686)
--
-- Host: localhost    Database: localhost
-- ------------------------------------------------------
-- Server version	10.1.19-MariaDB

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
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `account` (
  `idaccount` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `token` varchar(10) NOT NULL,
  `date_account` date NOT NULL,
  `status` tinyint(2) NOT NULL,
  PRIMARY KEY (`idaccount`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `token` (`token`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `account`
--

LOCK TABLES `account` WRITE;
/*!40000 ALTER TABLE `account` DISABLE KEYS */;
INSERT INTO `account` VALUES (6,'tanthowi','tanthowi@gmail.com','tanthowi','b4c4407394','2016-04-04',1),(11,'fitri','zakiyah@gmail.com','zakiyah','fd8af6bc47','2016-04-04',1),(12,'zakiyah','hidayah@gmail.com','zakiyah','42ca92bd7f','2016-04-04',1),(13,'hello','hello@gmail.com','hello','b98190016a','2016-04-05',0),(14,'hellodunia','hellodunia@gmail.com','hello','c891fa6854','2016-04-05',0),(15,'samsung','samsung@gmail.com','samsung','e3fa53a022','2016-04-05',0),(16,'billxcode','xcodebill@gmail.com','123456','c4b09bb4d8','2016-07-10',0),(19,'xcodebill','tanthowitanthowi@gmail.com','123456','21c6ed090f','2016-07-10',0),(20,'fitrizakiyah','fitrizakiyatulhidayah@gmail.com','123456','55b7e9d81f','2016-07-20',0),(21,'fairuz zumar','fairuzumar@gmail.com','123456','52610892f1','2016-07-21',1),(23,'','','','41d8cd98f0','2016-07-23',0);
/*!40000 ALTER TABLE `account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `date_register` date NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','admin','2016-06-08');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book` (
  `idbook` int(11) NOT NULL AUTO_INCREMENT,
  `title_book` varchar(45) NOT NULL,
  `code_book` varchar(10) NOT NULL,
  `price` double NOT NULL,
  `date_release` date NOT NULL,
  `author` varchar(45) NOT NULL,
  `stock` int(255) NOT NULL,
  `publisher` varchar(45) NOT NULL,
  `photos` text NOT NULL,
  `sinopsis` text NOT NULL,
  PRIMARY KEY (`idbook`),
  UNIQUE KEY `code_book_UNIQUE` (`code_book`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book`
--

LOCK TABLES `book` WRITE;
/*!40000 ALTER TABLE `book` DISABLE KEYS */;
INSERT INTO `book` VALUES (26,'Koala Kumal','1',60000,'2016-06-28','Raditya Dika',20,'Gramedia','assets/57727e7d63ec8.jpg','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),(27,'Marmut Merah Jambu','2',70000,'2016-06-28','Raditya Dika',65000,'Gramedia','assets/57727ea9d42cc.jpg','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),(28,'Manusia Setengah Salmon','3',70000,'2016-06-28','Raditya Dika',20,'Gramedia','assets/57727ec623d15.jpg','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');
/*!40000 ALTER TABLE `book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mybook`
--

DROP TABLE IF EXISTS `mybook`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mybook` (
  `idmy` int(11) NOT NULL AUTO_INCREMENT,
  `date_buy` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `profile_idprofile` int(11) NOT NULL,
  `profile_account_idaccount` int(11) NOT NULL,
  `idbook` int(255) NOT NULL,
  PRIMARY KEY (`idmy`,`profile_idprofile`,`profile_account_idaccount`),
  KEY `fk_mybook_profile1_idx` (`profile_idprofile`,`profile_account_idaccount`),
  CONSTRAINT `fk_mybook_profile1` FOREIGN KEY (`profile_idprofile`, `profile_account_idaccount`) REFERENCES `profile` (`idprofile`, `account_idaccount`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mybook`
--

LOCK TABLES `mybook` WRITE;
/*!40000 ALTER TABLE `mybook` DISABLE KEYS */;
INSERT INTO `mybook` VALUES (1,'2016-07-20',1,1,11,27),(2,'2016-07-20',1,1,11,28),(5,'2016-07-20',0,1,11,26),(6,'2016-07-21',1,5,6,27),(7,'2016-07-21',0,5,6,28),(8,'2016-07-21',1,5,6,26),(10,'2016-07-21',0,16,12,26),(11,'2016-07-21',1,16,12,28),(12,'2016-07-23',0,16,12,27),(13,'2016-07-23',0,16,12,27),(14,'2016-07-23',0,16,12,27),(15,'2016-07-23',0,16,12,27),(16,'2016-07-23',0,16,12,27),(17,'2016-07-23',0,16,12,27),(18,'2016-07-23',0,16,12,27),(19,'2016-07-23',0,16,12,27),(20,'2016-07-23',0,16,12,27),(21,'2016-07-23',0,16,12,27),(22,'2016-08-02',0,16,12,27),(23,'2016-08-02',0,16,12,27),(24,'2016-08-02',0,16,12,27),(25,'2016-08-02',0,16,12,27),(26,'2016-08-02',0,16,12,27),(27,'2016-08-02',0,16,12,27),(28,'2016-08-02',0,16,12,27),(29,'2016-08-02',0,16,12,27),(30,'2016-08-02',0,16,12,27),(31,'2016-08-02',0,16,12,27),(32,'2016-08-02',0,16,12,28),(33,'2016-08-02',0,16,12,28),(34,'2016-08-02',0,16,12,28),(35,'2016-08-02',0,16,12,28),(36,'2016-08-02',0,16,12,28),(37,'2016-08-02',0,16,12,28),(38,'2016-08-02',0,16,12,28),(39,'2016-08-02',0,16,12,28),(40,'2016-08-02',0,16,12,28),(41,'2016-08-02',0,16,12,28);
/*!40000 ALTER TABLE `mybook` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profile` (
  `idprofile` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(45) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `postal_code` int(5) NOT NULL,
  `account_idaccount` int(11) NOT NULL,
  `date_profile` date NOT NULL,
  PRIMARY KEY (`idprofile`,`account_idaccount`),
  KEY `fk_profile_account_idx` (`account_idaccount`),
  KEY `idprofile` (`idprofile`),
  KEY `postal_code` (`postal_code`),
  KEY `account_idaccount` (`account_idaccount`),
  KEY `phone` (`phone`),
  CONSTRAINT `fk_profile_account` FOREIGN KEY (`account_idaccount`) REFERENCES `account` (`idaccount`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile`
--

LOCK TABLES `profile` WRITE;
/*!40000 ALTER TABLE `profile` DISABLE KEYS */;
INSERT INTO `profile` VALUES (1,'Fitri Zakiyah','Desa Jorongan','Kecamatan Leces','089618904236',65144,11,'2016-07-22'),(5,'','','','',0,6,'2016-07-23'),(16,'','','','',0,12,'2016-07-24'),(17,'','','','',0,23,'2016-07-24');
/*!40000 ALTER TABLE `profile` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-18 17:02:44
