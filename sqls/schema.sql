-- MySQL dump 10.13  Distrib 5.1.54, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: garage48_evrica
-- ------------------------------------------------------
-- Server version	5.1.54-1ubuntu4

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Sample Category',0),(2,'Agriculture',0),(3,'Automobiles',0),(4,'Information Technology',0),(5,'Entertainment',0),(6,'Energy',0),(7,'Healthcare',0),(8,'Food',2),(9,'Livestock and Poultry',2),(10,'Fisheries',2),(11,'Horiculture',2),(12,'Cars',3),(13,'Motorcycles / Motorbikes',3),(14,'Driving',3),(15,'Finance',0),(17,'Banking',15),(18,'Stocks',15),(19,'Taxes',15),(20,'Audit',15),(21,'Programming',4),(22,'Graphics/Design',4),(23,'Computers/Internet',4),(24,'Telecommunications',4),(25,'Networking',4),(26,'Development',4),(27,'Fashion',5),(28,'Sports',5),(29,'Tv/Movies',5),(30,'Literature',5),(31,'Tourism',5),(32,'Oil & gas',6),(33,'Power',6),(34,'Nursing',7),(35,'Medicine',7),(36,'Dentistry',7),(37,'Pharmacy',7),(38,'Vertinary',7),(39,'Lab Services',7);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `countries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` VALUES (1,'Nigeria');
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_dates`
--

DROP TABLE IF EXISTS `event_dates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_dates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `event_id` int(10) unsigned NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `agenda` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `event_dates_FKIndex1` (`event_id`),
  CONSTRAINT `event_dates_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_dates`
--

LOCK TABLES `event_dates` WRITE;
/*!40000 ALTER TABLE `event_dates` DISABLE KEYS */;
INSERT INTO `event_dates` VALUES (1,2,'2011-05-07','2011-05-11',NULL,'2011-05-07 15:49:48','2011-05-07 15:49:48');
/*!40000 ALTER TABLE `event_dates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_images`
--

DROP TABLE IF EXISTS `event_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `event_id` int(10) unsigned NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `sort_order` smallint(5) unsigned DEFAULT '0',
  `photo_url` varchar(255) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `event_images_FKIndex1` (`event_id`),
  CONSTRAINT `event_images_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_images`
--

LOCK TABLES `event_images` WRITE;
/*!40000 ALTER TABLE `event_images` DISABLE KEYS */;
/*!40000 ALTER TABLE `event_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_seats`
--

DROP TABLE IF EXISTS `event_seats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_seats` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `event_id` int(10) unsigned NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `total_seats` int(10) unsigned DEFAULT NULL,
  `fee` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `events_seats_FKIndex1` (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_seats`
--

LOCK TABLES `event_seats` WRITE;
/*!40000 ALTER TABLE `event_seats` DISABLE KEYS */;
/*!40000 ALTER TABLE `event_seats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_speakers`
--

DROP TABLE IF EXISTS `event_speakers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_speakers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `event_id` int(10) unsigned NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `profile` text,
  `sort_order` smallint(5) unsigned DEFAULT '0',
  `created` int(10) unsigned DEFAULT NULL,
  `modified` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `event_speakers_FKIndex1` (`event_id`),
  CONSTRAINT `event_speakers_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_speakers`
--

LOCK TABLES `event_speakers` WRITE;
/*!40000 ALTER TABLE `event_speakers` DISABLE KEYS */;
/*!40000 ALTER TABLE `event_speakers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `state_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `event_slug` int(10) unsigned DEFAULT NULL,
  `description` text,
  `is_free` tinyint(1) DEFAULT '0',
  `is_private` tinyint(3) unsigned DEFAULT NULL,
  `total_seats` int(10) unsigned DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `gps_coords` varchar(100) DEFAULT NULL,
  `event_url` varchar(255) DEFAULT NULL,
  `event_logo_url` int(10) unsigned DEFAULT NULL,
  `event_company` varchar(255) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `event_company_info` text,
  `theme_title` varchar(6) DEFAULT NULL,
  `theme_background` varchar(6) DEFAULT NULL,
  `theme_body` varchar(6) DEFAULT NULL,
  `theme_links` varchar(6) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `events_FKIndex1` (`user_id`),
  KEY `events_FKIndex2` (`state_id`),
  CONSTRAINT `events_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `events_ibfk_2` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (1,1,1,'Garage48  - Ghana 2011',NULL,'Sample',1,0,145,'Kofi Annan Centre',NULL,'garage48.org/accra',NULL,'Garage48',1,'',NULL,NULL,NULL,NULL,'2011-05-07 15:49:29','2011-05-07 15:49:29'),(2,1,1,'Garage48  - Ghana 2011',NULL,'Sample',1,0,145,'Kofi Annan Centre',NULL,'garage48.org/accra',NULL,'Garage48',1,'',NULL,NULL,NULL,NULL,'2011-05-07 15:49:48','2011-05-07 15:49:48');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events_categories`
--

DROP TABLE IF EXISTS `events_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL,
  `event_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `events_categories_FKIndex1` (`event_id`),
  KEY `events_categories_FKIndex2` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events_categories`
--

LOCK TABLES `events_categories` WRITE;
/*!40000 ALTER TABLE `events_categories` DISABLE KEYS */;
INSERT INTO `events_categories` VALUES (1,1,1),(2,2,1),(3,3,1),(4,4,1),(5,1,2),(6,2,2),(7,3,2),(8,4,2);
/*!40000 ALTER TABLE `events_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events_tags`
--

DROP TABLE IF EXISTS `events_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events_tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag_id` int(10) unsigned NOT NULL,
  `event_id` int(10) unsigned NOT NULL,
  `agenda` text,
  PRIMARY KEY (`id`),
  KEY `events_tags_FKIndex1` (`event_id`),
  KEY `events_tags_FKIndex2` (`tag_id`),
  CONSTRAINT `events_tags_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`),
  CONSTRAINT `events_tags_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events_tags`
--

LOCK TABLES `events_tags` WRITE;
/*!40000 ALTER TABLE `events_tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `events_tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauths`
--

DROP TABLE IF EXISTS `oauths`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauths` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `oauth_provider` tinyint(3) unsigned DEFAULT NULL,
  `oauth_uid` varchar(255) DEFAULT NULL,
  `oauth_token` varchar(100) DEFAULT NULL,
  `oauth_secret` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauths_FKIndex1` (`user_id`),
  CONSTRAINT `oauths_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauths`
--

LOCK TABLES `oauths` WRITE;
/*!40000 ALTER TABLE `oauths` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauths` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `participants`
--

DROP TABLE IF EXISTS `participants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `participants` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `event_seat_id` int(10) unsigned NOT NULL,
  `event_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `confirmed` tinyint(3) unsigned DEFAULT '0',
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `participants_FKIndex1` (`user_id`),
  KEY `participants_FKIndex2` (`event_id`),
  KEY `participants_FKIndex3` (`event_seat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `participants`
--

LOCK TABLES `participants` WRITE;
/*!40000 ALTER TABLE `participants` DISABLE KEYS */;
/*!40000 ALTER TABLE `participants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `states` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `country_id` int(10) unsigned NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `states_FKIndex1` (`country_id`),
  CONSTRAINT `states_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `states`
--

LOCK TABLES `states` WRITE;
/*!40000 ALTER TABLE `states` DISABLE KEYS */;
INSERT INTO `states` VALUES (1,1,'ABIA'),(2,1,'ADAMAWA'),(3,1,'AKWA IBOM'),(4,1,'ANAMBRA'),(5,1,'BAUCHI'),(6,1,'BAYELSA'),(7,1,'BENUE'),(8,1,'BORNO'),(9,1,'CROSS RIVER'),(10,1,'DELTA'),(11,1,'EBONYI'),(12,1,'EDO'),(13,1,'EKITI'),(14,1,'ENUGU'),(15,1,'FCT'),(16,1,'GOMBE'),(17,1,'IMO'),(18,1,'JIGAWA'),(19,1,'KADUNA'),(20,1,'KANO'),(21,1,'KATSINA'),(22,1,'KEBBI'),(23,1,'KOGI'),(24,1,'KWARA'),(25,1,'LAGOS'),(26,1,'NASARAWA'),(27,1,'NIGER'),(28,1,'OGUN'),(29,1,'ONDO'),(30,1,'OSUN'),(31,1,'OYO'),(32,1,'PLATEAU'),(33,1,'RIVERS'),(34,1,'SOKOTO'),(35,1,'TARABA'),(36,1,'YOBE'),(37,1,'ZAMFARA');
/*!40000 ALTER TABLE `states` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `created` int(10) unsigned DEFAULT NULL,
  `modified` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,'Sample Tag',1304770248,1304770248);
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `active` tinyint(3) unsigned DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,NULL,'info@evricaevents.com','password','Garage','Evrica',0,NULL,NULL),(8,NULL,'hakeemhal2@yahoo.com','7d2f525576b0f61fd2ffb0e9e99efc732c591370','Abdulhakim','Haliru',0,'2011-05-07 14:34:42','2011-05-07 14:34:42'),(9,NULL,'hakeemhal@yahoo.com','827ccb0eea8a706c4c34a16891f84e7b','Abdulhakim','Haliru',0,'2011-05-07 14:56:05','2011-05-07 14:56:05');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-05-07 16:38:38
