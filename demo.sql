# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.1.9-MariaDB)
# Database: api_io84
# Generation Time: 2016-04-12 17:27:04 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table articles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `articles`;

CREATE TABLE `articles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;

INSERT INTO `articles` (`id`, `title`, `content`)
VALUES
	(1,'I am the Title','<h3>I am the Content~~</h3><p>It is true~ O(∩_∩)O</p>'),
	(2,'I am the Title','<h3>I am the Content~~</h3><p>It is true~ O(∩_∩)O</p>');

/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table articles_0
# ------------------------------------------------------------

DROP TABLE IF EXISTS `articles_0`;

CREATE TABLE `articles_0` (
  `id` int(11) unsigned NOT NULL DEFAULT '0',
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `content` longtext CHARACTER SET utf8
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `articles_0` WRITE;
/*!40000 ALTER TABLE `articles_0` DISABLE KEYS */;

INSERT INTO `articles_0` (`id`, `title`, `content`)
VALUES
	(4,'I am the Title','<h3>I am the Content~~</h3><p>It is true~ O(∩_∩)O</p>'),
	(2,'I am the Title','<h3>I am the Content~~</h3><p>It is true~ O(∩_∩)O</p>');

/*!40000 ALTER TABLE `articles_0` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table articles_1
# ------------------------------------------------------------

DROP TABLE IF EXISTS `articles_1`;

CREATE TABLE `articles_1` (
  `id` int(11) unsigned NOT NULL DEFAULT '0',
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `content` longtext CHARACTER SET utf8
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `articles_1` WRITE;
/*!40000 ALTER TABLE `articles_1` DISABLE KEYS */;

INSERT INTO `articles_1` (`id`, `title`, `content`)
VALUES
	(1,'I am the Title','<h3>I am the Content~~</h3><p>It is true~ O(∩_∩)O</p>'),
	(5,'I am the Title','<h3>I am the Content~~</h3><p>It is true~ O(∩_∩)O</p>');

/*!40000 ALTER TABLE `articles_1` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table oauth_access_tokens
# ------------------------------------------------------------

DROP TABLE IF EXISTS `oauth_access_tokens`;

CREATE TABLE `oauth_access_tokens` (
  `access_token` varchar(40) NOT NULL,
  `client_id` varchar(80) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `expires` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `scope` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`access_token`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table oauth_authorization_codes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `oauth_authorization_codes`;

CREATE TABLE `oauth_authorization_codes` (
  `authorization_code` varchar(40) NOT NULL,
  `client_id` varchar(80) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `redirect_uri` varchar(2000) DEFAULT NULL,
  `expires` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `scope` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`authorization_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table oauth_clients
# ------------------------------------------------------------

DROP TABLE IF EXISTS `oauth_clients`;

CREATE TABLE `oauth_clients` (
  `client_id` varchar(80) NOT NULL,
  `client_secret` varchar(80) DEFAULT NULL,
  `redirect_uri` varchar(2000) NOT NULL,
  `grant_types` varchar(80) DEFAULT NULL,
  `scope` varchar(100) DEFAULT NULL,
  `user_id` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `oauth_clients` WRITE;
/*!40000 ALTER TABLE `oauth_clients` DISABLE KEYS */;

INSERT INTO `oauth_clients` (`client_id`, `client_secret`, `redirect_uri`, `grant_types`, `scope`, `user_id`)
VALUES
	('09dc4f79eaef2e2bfa4e41f2f20c94f1','34ebc4baeb5a7692e35263eb78a6532a','http://api-dev.io84.com/oauth2/access','password client_credentials authorization_code implicit refresh_token',NULL,NULL),
	('b4e83fc72fc3ee5389b155b4652b585c','6e8f52ae06998e625059fe97f3bfad42','http://api-dev.io84.com/oauth2/access','password client_credentials authorization_code implicit refresh_token',NULL,NULL);

/*!40000 ALTER TABLE `oauth_clients` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table oauth_jwt
# ------------------------------------------------------------

DROP TABLE IF EXISTS `oauth_jwt`;

CREATE TABLE `oauth_jwt` (
  `client_id` varchar(80) NOT NULL,
  `subject` varchar(80) DEFAULT NULL,
  `public_key` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table oauth_refresh_tokens
# ------------------------------------------------------------

DROP TABLE IF EXISTS `oauth_refresh_tokens`;

CREATE TABLE `oauth_refresh_tokens` (
  `refresh_token` varchar(40) NOT NULL,
  `client_id` varchar(80) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `expires` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `scope` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`refresh_token`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table oauth_scopes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `oauth_scopes`;

CREATE TABLE `oauth_scopes` (
  `scope` text,
  `is_default` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `oauth_scopes` WRITE;
/*!40000 ALTER TABLE `oauth_scopes` DISABLE KEYS */;

INSERT INTO `oauth_scopes` (`scope`, `is_default`)
VALUES
	('login',1);

/*!40000 ALTER TABLE `oauth_scopes` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table oauth_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `oauth_users`;

CREATE TABLE `oauth_users` (
  `username` varchar(255) NOT NULL,
  `password` varchar(2000) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
