-- MySQL dump 10.16  Distrib 10.1.9-MariaDB, for osx10.6 (i386)
--
-- Host: localhost    Database: io84
-- ------------------------------------------------------
-- Server version	10.1.9-MariaDB

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
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,'I am the Title','<h3>I am the Content~~</h3><p>It is true~ O(∩_∩)O</p>'),(2,'I am the Title','<h3>I am the Content~~</h3><p>It is true~ O(∩_∩)O</p>');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articles_0`
--

DROP TABLE IF EXISTS `articles_0`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles_0` (
  `id` int(11) unsigned NOT NULL DEFAULT '0',
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `content` longtext CHARACTER SET utf8
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles_0`
--

LOCK TABLES `articles_0` WRITE;
/*!40000 ALTER TABLE `articles_0` DISABLE KEYS */;
INSERT INTO `articles_0` VALUES (2,'I am the Title 2','<h3>I am the Content~~</h3><p>It is true~ O(∩_∩)O</p>'),(4,'I am the Title 4','<h3>I am the Content~~</h3><p>It is true~ O(∩_∩)O</p>');
/*!40000 ALTER TABLE `articles_0` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articles_1`
--

DROP TABLE IF EXISTS `articles_1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles_1` (
  `id` int(11) unsigned NOT NULL DEFAULT '0',
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `content` longtext CHARACTER SET utf8
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles_1`
--

LOCK TABLES `articles_1` WRITE;
/*!40000 ALTER TABLE `articles_1` DISABLE KEYS */;
INSERT INTO `articles_1` VALUES (1,'I am the Title 1','<h3>I am the Content~~</h3><p>It is true~ O(∩_∩)O</p>'),(5,'I am the Title 5','<h3>I am the Content~~</h3><p>It is true~ O(∩_∩)O</p>');
/*!40000 ALTER TABLE `articles_1` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-03 14:33:32
