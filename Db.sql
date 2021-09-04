-- MySQL dump 10.13  Distrib 8.0.25, for Linux (x86_64)
--
-- Host: localhost    Database: dbussd
-- ------------------------------------------------------
-- Server version	8.0.25-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'kunlik','internet','ucell','2021-06-18 01:47:34','2021-06-18 01:47:34'),(2,'oylik','internet','ucell','2021-06-18 01:47:41','2021-06-18 01:47:41'),(3,'kunlik','sms','ucell','2021-06-18 01:47:49','2021-06-18 01:47:49'),(4,'oylik','sms','ucell','2021-06-18 01:47:56','2021-06-18 01:47:56'),(5,'kunlik','minute','ucell','2021-06-18 01:48:05','2021-06-18 01:48:05'),(6,'oylik','minute','ucell','2021-06-18 01:48:12','2021-06-18 01:48:12'),(7,'kunlik','tariff','ucell','2021-06-18 01:48:21','2021-06-18 01:48:21'),(8,'oylik','tariff','ucell','2021-06-18 01:48:31','2021-06-18 01:48:31'),(9,'cvc','internet','beeline','2021-06-18 01:48:39','2021-06-18 01:48:39'),(10,'kun','internet','beeline','2021-06-18 01:48:45','2021-06-18 01:48:45'),(11,'kun','sms','beeline','2021-06-18 01:48:54','2021-06-18 01:48:54'),(12,'oy','sms','beeline','2021-06-18 01:49:02','2021-06-18 01:49:02'),(13,'kun','minute','beeline','2021-06-18 01:49:10','2021-06-18 01:49:10'),(14,'oy','minute','beeline','2021-06-18 01:49:16','2021-06-18 01:49:16'),(15,'kun','tariff','beeline','2021-06-18 01:49:23','2021-06-18 01:49:23'),(16,'oy','tariff','beeline','2021-06-18 01:49:30','2021-06-18 01:49:30'),(17,'kun','internet','uzmobile','2021-06-18 01:49:42','2021-06-18 01:49:42'),(19,'oy','internet','uzmobile','2021-06-18 01:50:10','2021-06-18 01:50:10'),(20,'kun','sms','uzmobile','2021-06-18 01:50:18','2021-06-18 01:50:18'),(21,'oy','sms','uzmobile','2021-06-18 01:50:26','2021-06-18 01:50:26'),(22,'kun','minute','uzmobile','2021-06-18 01:50:35','2021-06-18 01:50:35'),(23,'oy','minute','uzmobile','2021-06-18 01:50:43','2021-06-18 01:50:43'),(24,'kun','tariff','uzmobile','2021-06-18 01:50:52','2021-06-18 01:50:52'),(25,'oy','tariff','uzmobile','2021-06-18 01:50:59','2021-06-18 01:50:59'),(26,'kun','internet','mobiuz','2021-06-18 01:51:07','2021-06-18 01:51:07'),(27,'oy','internet','mobiuz','2021-06-18 01:51:14','2021-06-18 01:51:14'),(28,'kun','sms','mobiuz','2021-06-18 01:51:20','2021-06-18 01:51:20'),(29,'oy','sms','mobiuz','2021-06-18 01:51:28','2021-06-18 01:51:28'),(30,'kun','minute','mobiuz','2021-06-18 01:51:38','2021-06-18 01:51:38'),(31,'oy','minute','mobiuz','2021-06-18 01:51:43','2021-06-18 01:51:43'),(32,'kun','tariff','mobiuz','2021-06-18 01:51:53','2021-06-18 01:51:53'),(33,'oy','tariff','mobiuz','2021-06-18 01:52:01','2021-06-18 01:52:01');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `codes`
--

DROP TABLE IF EXISTS `codes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `codes` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `codes`
--

LOCK TABLES `codes` WRITE;
/*!40000 ALTER TABLE `codes` DISABLE KEYS */;
INSERT INTO `codes` VALUES (1,'xcxcx','xiz','mobiuz','ssdsd','2021-07-01 01:25:30','2021-07-01 01:25:30'),(2,'sasas','ussd','beeline','sdssd','2021-07-01 01:25:39','2021-07-01 01:25:39'),(3,'dfdfdf','xiz','beeline','fdfdfd','2021-07-01 01:25:48','2021-07-01 01:25:48'),(4,'ghjjh','ussd','ucell','ghf','2021-07-01 02:03:47','2021-07-01 02:03:47'),(5,'dfdf','ussd','mobiuz','dfdfdf','2021-07-01 02:13:53','2021-07-01 02:13:53'),(6,'dfdfqdfdf','pxiz','mobiuz','dfdfd','2021-07-01 02:14:03','2021-07-01 02:14:03'),(7,'sdsd','ussd','uzmobile','sdsdsd','2021-07-01 02:14:17','2021-07-01 02:14:17'),(8,'ddsdsd','xiz','uzmobile','sdsds','2021-07-01 02:14:25','2021-07-01 02:14:25'),(9,'dfdf','pxiz','uzmobile','fdfdf','2021-07-01 02:14:33','2021-07-01 02:14:33'),(10,'sdsd','pxiz','beeline','sdsdds','2021-07-01 02:14:45','2021-07-01 02:14:45'),(11,'dsd','pxiz','ucell','sdsdsd','2021-07-01 02:14:54','2021-07-01 02:14:54'),(12,'sdsd','xiz','ucell','sddsds','2021-07-01 02:15:04','2021-07-01 02:15:04');
/*!40000 ALTER TABLE `codes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `discounts`
--

DROP TABLE IF EXISTS `discounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `discounts` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discounts`
--

LOCK TABLES `discounts` WRITE;
/*!40000 ALTER TABLE `discounts` DISABLE KEYS */;
INSERT INTO `discounts` VALUES (1,'ak','ucell','sdsdsd','sdssdsd','2021-07-01 01:04:07','2021-07-01 01:04:07'),(2,'yan','ucell','dfdf','fdfdf','2021-07-01 01:04:16','2021-07-01 02:11:49'),(3,'yan','beeline','sdfsdf','sdsdf','2021-07-01 01:06:03','2021-07-01 01:06:03'),(4,'yan','beeline','sdfsdf','xcxc','2021-07-01 01:06:13','2021-07-01 02:10:57'),(5,'yan','mobiuz','asasas','aaaas','2021-07-01 02:10:15','2021-07-01 02:10:15'),(6,'ak','mobiuz','cxcxc','xcxcx','2021-07-01 02:10:21','2021-07-01 02:10:21'),(7,'yan','uzmobile','xcxc','xcxcx','2021-07-01 02:10:31','2021-07-01 02:10:31'),(8,'ak','uzmobile','xcxc','xcxcx','2021-07-01 02:10:40','2021-07-01 02:10:40');
/*!40000 ALTER TABLE `discounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `internets`
--

DROP TABLE IF EXISTS `internets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `internets` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `turnon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clear` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `internets_category_id_foreign` (`category_id`),
  CONSTRAINT `internets_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `internets`
--

LOCK TABLES `internets` WRITE;
/*!40000 ALTER TABLE `internets` DISABLE KEYS */;
INSERT INTO `internets` VALUES (1,'ucell',1,'500 mb','24500','30 kun','*121*78*454#','*12445*45#',NULL,'*100#','2021-06-18 01:53:00','2021-06-18 01:53:00'),(2,'ucell',2,'5 gb','85000','30 kun','*121*454#','*1245*545#','ushbu paket 30 kunda o\'chadi','*125*54#','2021-06-18 01:54:02','2021-06-18 01:54:02'),(3,'beeline',9,'50 mb`','655000','30 kun','*151*','*1565*','dlfsfslfk','*165*','2021-06-18 02:02:04','2021-06-18 02:02:04'),(4,'beeline',10,'87 mb','89865','30 kun','*15*','*151*','ddl;flldf','*1565*','2021-06-18 02:02:31','2021-06-18 02:02:31'),(5,'uzmobile',17,'8998 mb','564564','901 kun','*154*','*1554*','\';fl;dl;f','*15544#','2021-06-18 02:03:08','2021-06-18 02:03:08'),(6,'uzmobile',19,'30 mb','9874','62 kun','*154*','*14*','fdflkdflj','*154*','2021-06-18 02:03:41','2021-06-18 02:03:41'),(7,'mobiuz',27,'98 mb','987','656 kun','*78798*',NULL,NULL,NULL,'2021-06-18 02:04:13','2021-07-01 00:00:55'),(8,'mobiuz',26,'78 mb','4564','4564','*154*',NULL,NULL,NULL,'2021-06-18 02:04:41','2021-07-01 02:07:14'),(9,'ucell',1,'dfdf','ssd','ssd','fdssd','ssdsds','dffddddddddddddddddddddddddddddddddddddddddddddddddddd','dfdf','2021-06-30 23:16:44','2021-06-30 23:16:44');
/*!40000 ALTER TABLE `internets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `messages` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `turnon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delete` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `messages_category_id_foreign` (`category_id`),
  CONSTRAINT `messages_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (1,'mobiuz',28,'sdsd','SSDSD','SSDS','SSS','SSS','SS','2021-06-30 23:21:54','2021-06-30 23:21:54'),(2,'mobiuz',29,'fdfd','ddf','dfdf','sdfdf','dfdf','ddfdf','2021-07-01 02:12:08','2021-07-01 02:12:08'),(3,'ucell',3,'sdsds','sdsds','sdsds','sdsds','sdsdsd','sdsdsd','2021-07-01 02:12:20','2021-07-01 02:12:20'),(4,'ucell',4,'dfdfdf','dfdfd','sfsfdf','sffdf','fdfdf','fdfd','2021-07-01 02:12:32','2021-07-01 02:12:32'),(5,'beeline',11,'dfdfdf','dfdfd','dfddf','ddfdfd','dfdfdf','dfdfdf','2021-07-01 02:12:45','2021-07-01 02:12:45'),(6,'beeline',12,'dfdf','dfdf','dfdfdf','fdfd','fdfdfd','sdfdfdf','2021-07-01 02:12:57','2021-07-01 02:12:57'),(7,'uzmobile',20,'dfdf','dfdfd','fdfdf','fdfdf','dfdfd','dfdfd','2021-07-01 02:13:14','2021-07-01 02:13:14'),(8,'uzmobile',21,'dfdfdf','dfdfd','sfddf','ssdfd',NULL,NULL,'2021-07-01 02:13:30','2021-07-01 02:13:39');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2020_05_10_065730_create_categories_table',1),(4,'2021_04_15_092436_create_internets_table',1),(5,'2021_04_15_103158_create_tariffs_table',1),(6,'2021_04_15_103345_create_minutes_table',1),(7,'2021_04_15_103419_create_messages_table',1),(10,'2021_05_08_095253_create_discounts_table',2),(11,'2021_04_15_103713_create_codes_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `minutes`
--

DROP TABLE IF EXISTS `minutes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `minutes` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `turnon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `minutes_category_id_foreign` (`category_id`),
  CONSTRAINT `minutes_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `minutes`
--

LOCK TABLES `minutes` WRITE;
/*!40000 ALTER TABLE `minutes` DISABLE KEYS */;
INSERT INTO `minutes` VALUES (2,'mobiuz',30,'sdsd','sdsd','sdsd','sdsd','sdsd','2021-07-01 00:04:01','2021-07-01 00:04:01'),(3,'ucell',5,'SDSSD','SDSD','ADSD','SSDS','SDSDD','2021-07-01 02:08:51','2021-07-01 02:08:51'),(4,'ucell',6,'SDSD','SDSD','SDSD','SDSD','SDDSD','2021-07-01 02:09:02','2021-07-01 02:09:02'),(5,'beeline',13,'SDSD','SDSDS','SDSDS','SSSD','SDSS','2021-07-01 02:09:15','2021-07-01 02:09:15'),(6,'beeline',14,'SDSD','SSDSD','SDSD','SDSD','SDSDSD','2021-07-01 02:09:25','2021-07-01 02:09:25'),(7,'uzmobile',23,'SDSDSD','SDSDSD','SDSDS','SDSD','SDSDSD','2021-07-01 02:09:38','2021-07-01 02:09:38'),(8,'uzmobile',22,'SSDSD','ADSDSD','SDSD','SDSDS','SDSD','2021-07-01 02:09:48','2021-07-01 02:09:48'),(9,'mobiuz',31,'ZXZXZXzx','zzxzx','zxzxz','zxzxzx','zxzx','2021-07-01 02:10:04','2021-07-01 02:10:04');
/*!40000 ALTER TABLE `minutes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('baxa@gmail.com','$2y$10$tAxhAfR5qoXfZA/haOh2juxhgEizeT96Y7ODNxYqj2WYyNHzqtI5i','2021-06-14 09:24:17');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tariffs`
--

DROP TABLE IF EXISTS `tariffs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tariffs` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minute1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `internet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `changing` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tariflars_category_id_foreign` (`category_id`),
  CONSTRAINT `tariflars_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tariffs`
--

LOCK TABLES `tariffs` WRITE;
/*!40000 ALTER TABLE `tariffs` DISABLE KEYS */;
INSERT INTO `tariffs` VALUES (1,'mobiuz',32,'1000','32600','124','154','10000','154','*154*','fgkgl','2021-06-21 10:06:14','2021-06-21 10:06:14'),(2,'mobiuz',33,'5487','46000','125','324','154','4654645','*154*','fgfg','2021-06-21 10:07:43','2021-07-01 02:07:47'),(3,'ucell',7,'789','12365','154','1644','1654','6547','*154*','kjhjghfggf','2021-06-21 10:08:28','2021-06-21 10:08:28'),(4,'ucell',8,'97978','78000','154','165444','1654','121','*154*','hgfgdf','2021-06-21 10:09:22','2021-06-21 10:09:22'),(5,'beeline',16,'898989','565656','21231','2112','1512','2135','*154*',NULL,'2021-06-21 10:10:15','2021-06-21 10:10:15'),(6,'beeline',15,'689','566656','656565','5656565','565656','5665656','*787*',NULL,'2021-06-21 10:10:42','2021-07-01 02:08:32'),(7,'uzmobile',24,'zxczxc','SSFSDFD','CSXCX','XCZXC','XCXC','XCXC','XCXC','XCXC','2021-07-01 02:08:06','2021-07-01 02:08:06'),(8,'uzmobile',25,'SDSD','SDSD','SDSD','SDSD','SDSD','SDS','SDSD','SDSD','2021-07-01 02:08:20','2021-07-01 02:08:20');
/*!40000 ALTER TABLE `tariffs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Bahrom','baxa@gmail.com',NULL,'$2y$10$JczDuR0G/Dh.72jeaUuHR.OLNVF3Vfy6kbgA5wJYphaDke.2SyDpe','u1gxk7170w3ftjkzmjYxu27ftEuEyITLShkvB1ABaYUJ6fXSvNGP7cf4gzyQ','2021-06-14 08:19:36','2021-06-14 08:19:36'),(2,'Akaxon','sdf@gmail.com',NULL,'$2y$10$Wf37uIffacVl0az8igy3t.Fa5rMnUl/K1dyzSgtRQfIDhZ2jjzn42','YtmTXatcR2PaYeyoLn1jm14Cs7HC6W1APP5rB3QBAvtGuLnse1TSZXFsNMT9','2021-06-14 09:18:23','2021-06-14 09:18:23'),(3,'ewre','sjhdf@gmail.com',NULL,'$2y$10$VMcF5yJ4tewrXtqznsqWX.DTVJWhAp6xNkEUmW2oVKmLRYOmZu0lm','BFoafp4VvLfKAHLJrZW5STt8YWfTU0pIImcFiwrbhy1ESmBIJ9vlRfhPh14F','2021-06-14 09:20:24','2021-06-14 09:20:24');
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

-- Dump completed on 2021-07-01 12:30:39
