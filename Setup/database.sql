-- MySQL dump 10.13  Distrib 5.5.45, for Win64 (x86)
--
-- Host: localhost    Database: linux_julklapp
-- ------------------------------------------------------
-- Server version	5.5.45

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


CREATE DATABASE IF NOT EXISTS `linux_julklapp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `linux_julklapp`;

--
-- Table structure for table `bought`
--

DROP TABLE IF EXISTS `bought`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bought` (
  `wishid` bigint(20) NOT NULL,
  `userid` bigint(20) NOT NULL,
  PRIMARY KEY (`wishid`),
  UNIQUE KEY `wishid` (`wishid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bought`
--

LOCK TABLES `bought` WRITE;
/*!40000 ALTER TABLE `bought` DISABLE KEYS */;
/*!40000 ALTER TABLE `bought` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `relatives`
--

DROP TABLE IF EXISTS `relatives`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `relatives` (
  `userid` bigint(20) NOT NULL,
  `keyword` varchar(200) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `relatives`
--

LOCK TABLES `relatives` WRITE;
/*!40000 ALTER TABLE `relatives` DISABLE KEYS */;
INSERT INTO `relatives` VALUES (36,'0911aed621a145fb7a54b129692bc6e22372a4a3'),(35,'0911aed621a145fb7a54b129692bc6e22372a4a3'),(37,'0911aed621a145fb7a54b129692bc6e22372a4a3');
/*!40000 ALTER TABLE `relatives` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `userid` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `name` varchar(20) NOT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `familyid` bigint(20) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (35,'superman','16ff504b76e7521ce35600a80e14680a611b97b5','Clark','Kent',35),(36,'batman','a1c9d813e9a66ad8ac1dc79650e3a5f18d13f99e','Bruce','Wayne',36),(37,'spiderman','7104de9500f491e0416fe6f165fa2c11291bb719','Peter','Parker',37);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wishlists`
--

DROP TABLE IF EXISTS `wishlists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wishlists` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `wish` varchar(200) NOT NULL,
  `bought` bigint(20) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `userid` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=579 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wishlists`
--

LOCK TABLES `wishlists` WRITE;
/*!40000 ALTER TABLE `wishlists` DISABLE KEYS */;
INSERT INTO `wishlists` VALUES (573,'Lex love',NULL,'',35),(576,'a kiss from the Joker',NULL,'',36),(575,'A red suite',37,'',35),(577,'A spider bike',NULL,'',37),(578,'sunglasses',NULL,'http://www.amazon.co.uk/PH-3064-Wayfarer-Sunglasses-900387/dp/B00E9OZ0AI/ref=sr_1_3?s=clothing&amp;ie=UTF8&amp;qid=1445882963&amp;sr=1-3',37);
/*!40000 ALTER TABLE `wishlists` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-10-26 19:26:46
