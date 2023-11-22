-- MySQL dump 10.13  Distrib 8.0.35, for Linux (x86_64)
--
-- Host: localhost    Database: edms
-- ------------------------------------------------------
-- Server version	8.0.35-0ubuntu0.22.04.1

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
-- Temporary view structure for view `content`
--

DROP TABLE IF EXISTS `content`;
/*!50001 DROP VIEW IF EXISTS `content`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `content` AS SELECT 
 1 AS `id`,
 1 AS `name`,
 1 AS `document`,
 1 AS `ext`,
 1 AS `user_id`,
 1 AS `department_id`,
 1 AS `created_at`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `departments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `departments_user_id_foreign` (`user_id`),
  CONSTRAINT `departments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departments`
--

LOCK TABLES `departments` WRITE;
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` VALUES (1,1,'IT Department','2023-09-28 19:56:47','2023-09-28 19:56:47'),(2,1,'HR Department','2023-09-28 21:25:44','2023-10-10 12:37:32');
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `folderas`
--

DROP TABLE IF EXISTS `folderas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `folderas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `department_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document` text COLLATE utf8mb4_unicode_ci,
  `ext` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `folderas_user_id_foreign` (`user_id`),
  KEY `folderas_department_id_foreign` (`department_id`),
  CONSTRAINT `folderas_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  CONSTRAINT `folderas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `folderas`
--

LOCK TABLES `folderas` WRITE;
/*!40000 ALTER TABLE `folderas` DISABLE KEYS */;
INSERT INTO `folderas` VALUES (1,2,1,'Reports',NULL,NULL,'2023-09-28 21:34:27','2023-10-10 10:44:08'),(2,2,1,'Database Dumps',NULL,NULL,'2023-09-28 21:34:53','2023-09-28 21:34:53'),(3,2,1,'General',NULL,NULL,'2023-10-03 09:02:38','2023-10-03 09:02:38'),(4,4,2,'Staff Details',NULL,NULL,'2023-10-03 14:21:32','2023-10-03 14:21:32'),(5,1,1,'Submissions','files/folder1/Submissions.docx','docx','2023-10-10 11:37:37','2023-10-10 11:56:19'),(6,4,2,'Admin details',NULL,NULL,'2023-10-10 14:22:14','2023-10-10 14:22:14');
/*!40000 ALTER TABLE `folderas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `folderbs`
--

DROP TABLE IF EXISTS `folderbs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `folderbs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `department_id` bigint unsigned NOT NULL,
  `foldera_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document` text COLLATE utf8mb4_unicode_ci,
  `ext` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `folderbs_user_id_foreign` (`user_id`),
  KEY `folderbs_department_id_foreign` (`department_id`),
  KEY `folderbs_foldera_id_foreign` (`foldera_id`),
  CONSTRAINT `folderbs_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  CONSTRAINT `folderbs_foldera_id_foreign` FOREIGN KEY (`foldera_id`) REFERENCES `folderas` (`id`),
  CONSTRAINT `folderbs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `folderbs`
--

LOCK TABLES `folderbs` WRITE;
/*!40000 ALTER TABLE `folderbs` DISABLE KEYS */;
INSERT INTO `folderbs` VALUES (1,2,1,2,'UNSR DB DUMPS',NULL,NULL,'2023-09-28 21:35:19','2023-10-10 11:59:00'),(2,2,1,1,'UNSR',NULL,NULL,'2023-09-28 21:35:35','2023-10-10 11:11:13'),(3,2,1,3,'SQL Final Dump','files/folder2/SQL Final Dump.xlsx','xlsx','2023-10-03 09:03:07','2023-10-10 11:58:14'),(4,3,1,3,'too','files/folder2/too.xlsx','xlsx','2023-10-03 09:16:07','2023-10-03 09:16:07'),(5,2,1,1,'NDR',NULL,NULL,'2023-10-05 07:12:43','2023-10-05 07:12:43'),(6,3,1,1,'KLS',NULL,NULL,'2023-10-05 07:13:09','2023-10-05 07:13:09'),(7,4,2,4,'IT Team Details',NULL,NULL,'2023-10-06 15:42:40','2023-10-06 15:42:40'),(8,4,2,4,'HR Team Details',NULL,NULL,'2023-10-06 15:42:55','2023-10-06 15:42:55'),(9,1,1,3,'Golden',NULL,NULL,'2023-10-10 11:43:24','2023-10-10 11:43:24');
/*!40000 ALTER TABLE `folderbs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `foldercs`
--

DROP TABLE IF EXISTS `foldercs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `foldercs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `department_id` bigint unsigned NOT NULL,
  `foldera_id` bigint unsigned NOT NULL,
  `folderb_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document` text COLLATE utf8mb4_unicode_ci,
  `ext` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `foldercs_user_id_foreign` (`user_id`),
  KEY `foldercs_department_id_foreign` (`department_id`),
  KEY `foldercs_foldera_id_foreign` (`foldera_id`),
  KEY `foldercs_folderb_id_foreign` (`folderb_id`),
  CONSTRAINT `foldercs_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  CONSTRAINT `foldercs_foldera_id_foreign` FOREIGN KEY (`foldera_id`) REFERENCES `folderas` (`id`),
  CONSTRAINT `foldercs_folderb_id_foreign` FOREIGN KEY (`folderb_id`) REFERENCES `folderbs` (`id`),
  CONSTRAINT `foldercs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `foldercs`
--

LOCK TABLES `foldercs` WRITE;
/*!40000 ALTER TABLE `foldercs` DISABLE KEYS */;
INSERT INTO `foldercs` VALUES (1,2,1,1,2,'UNSR2.0',NULL,NULL,'2023-09-28 21:35:50','2023-10-10 11:31:57'),(2,4,2,4,7,'Odubiyi Ifeoluwa',NULL,NULL,'2023-10-06 15:43:37','2023-10-06 15:43:37');
/*!40000 ALTER TABLE `foldercs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `folderds`
--

DROP TABLE IF EXISTS `folderds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `folderds` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `department_id` bigint unsigned NOT NULL,
  `foldera_id` bigint unsigned NOT NULL,
  `folderb_id` bigint unsigned NOT NULL,
  `folderc_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document` text COLLATE utf8mb4_unicode_ci,
  `ext` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `folderds_user_id_foreign` (`user_id`),
  KEY `folderds_department_id_foreign` (`department_id`),
  KEY `folderds_foldera_id_foreign` (`foldera_id`),
  KEY `folderds_folderb_id_foreign` (`folderb_id`),
  KEY `folderds_folderc_id_foreign` (`folderc_id`),
  CONSTRAINT `folderds_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  CONSTRAINT `folderds_foldera_id_foreign` FOREIGN KEY (`foldera_id`) REFERENCES `folderas` (`id`),
  CONSTRAINT `folderds_folderb_id_foreign` FOREIGN KEY (`folderb_id`) REFERENCES `folderbs` (`id`),
  CONSTRAINT `folderds_folderc_id_foreign` FOREIGN KEY (`folderc_id`) REFERENCES `foldercs` (`id`),
  CONSTRAINT `folderds_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `folderds`
--

LOCK TABLES `folderds` WRITE;
/*!40000 ALTER TABLE `folderds` DISABLE KEYS */;
INSERT INTO `folderds` VALUES (1,2,1,1,2,1,'Ministry Contact List','files/folder4/Ministry Contact List.xlsx','xlsx','2023-09-28 21:36:24','2023-10-10 11:35:54'),(2,4,2,4,7,2,'CV','files/folder4/CV.docx','docx','2023-10-06 15:43:57','2023-10-06 15:43:57'),(3,4,2,4,7,2,'Passport','files/folder4/Passport.jpeg','jpeg','2023-10-06 16:39:59','2023-10-06 16:39:59');
/*!40000 ALTER TABLE `folderds` ENABLE KEYS */;
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
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2014_10_12_100000_create_password_resets_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2023_09_15_150716_create_departments_table',1),(7,'2023_09_15_150738_create_folderas_table',1),(8,'2023_09_15_150743_create_folderbs_table',1),(9,'2023_09_15_150747_create_foldercs_table',1),(10,'2023_09_18_141514_create_folderds_table',1),(11,'2023_09_25_124349_create_permission_tables',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (1,'App\\Models\\User',1),(2,'App\\Models\\User',2),(2,'App\\Models\\User',3),(3,'App\\Models\\User',4);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
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
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'Permission-view','web','2023-09-28 19:56:07','2023-09-28 19:56:07'),(2,'Regular-User','web','2023-09-28 20:48:58','2023-09-28 20:48:58'),(3,'Departments-View','web','2023-09-28 20:53:19','2023-09-28 20:53:19'),(4,'Roles-View','web','2023-09-28 20:53:29','2023-09-28 20:53:29'),(5,'Permissions-View','web','2023-09-28 20:54:00','2023-09-28 20:54:00'),(6,'Users-View','web','2023-09-28 20:54:29','2023-09-28 20:54:29'),(7,'AllContent_View','web','2023-09-28 20:54:42','2023-09-28 20:54:42'),(8,'Permissionsd-Viewdddd','web','2023-09-28 21:07:18','2023-10-05 11:49:07'),(9,'Documents_ViewAll','web','2023-10-03 12:03:47','2023-10-03 12:03:47');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions_back_up`
--

DROP TABLE IF EXISTS `permissions_back_up`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions_back_up` (
  `id` bigint unsigned NOT NULL DEFAULT '0',
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions_back_up`
--

LOCK TABLES `permissions_back_up` WRITE;
/*!40000 ALTER TABLE `permissions_back_up` DISABLE KEYS */;
INSERT INTO `permissions_back_up` VALUES (1,'Permission-view','web','2023-09-28 19:56:07','2023-09-28 19:56:07'),(2,'Regular-User','web','2023-09-28 20:48:58','2023-09-28 20:48:58'),(3,'Departments-View','web','2023-09-28 20:53:19','2023-09-28 20:53:19'),(4,'Roles-View','web','2023-09-28 20:53:29','2023-09-28 20:53:29'),(5,'Permissions-View','web','2023-09-28 20:54:00','2023-09-28 20:54:00'),(6,'Users-View','web','2023-09-28 20:54:29','2023-09-28 20:54:29'),(7,'AllContent_View','web','2023-09-28 20:54:42','2023-09-28 20:54:42'),(8,'Permissionsd-View','web','2023-09-28 21:07:18','2023-09-28 21:07:18');
/*!40000 ALTER TABLE `permissions_back_up` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES (3,1),(4,1),(5,1),(6,1),(7,1),(9,1),(2,2),(2,3),(2,4);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Admin','web','2023-09-28 19:56:07','2023-09-28 19:56:07'),(2,'IT','web','2023-09-28 19:56:07','2023-10-03 08:12:56'),(3,'HR','web','2023-10-03 13:14:09','2023-10-03 13:14:09'),(4,'Logistics Reps','web','2023-10-05 11:39:54','2023-10-05 11:40:02');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shared`
--

DROP TABLE IF EXISTS `shared`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `shared` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `department_id` bigint unsigned NOT NULL,
  `foldera_id` bigint unsigned NOT NULL,
  `folderb_id` bigint unsigned NOT NULL,
  `folderc_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document` text COLLATE utf8mb4_unicode_ci,
  `ext` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `folderds_user_id_foreign` (`user_id`),
  KEY `folderds_department_id_foreign` (`department_id`),
  KEY `folderds_foldera_id_foreign` (`foldera_id`),
  KEY `folderds_folderb_id_foreign` (`folderb_id`),
  KEY `folderds_folderc_id_foreign` (`folderc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shared`
--

LOCK TABLES `shared` WRITE;
/*!40000 ALTER TABLE `shared` DISABLE KEYS */;
/*!40000 ALTER TABLE `shared` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@gmail.com','0','2023-09-28 19:56:07','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,'2023-09-28 19:56:07','2023-09-28 19:56:07'),(2,'Ifeoluwa','odubiyiifeolu@gmail.com','1',NULL,'$2y$10$zGU3GwnMD68sBfsxlXODh.sllbCw0Om0KCUfZgHTJ.ePc7IXwRaPK',NULL,'2023-09-28 19:57:24','2023-09-28 19:57:24'),(3,'tonia','tonia@mail.com','1',NULL,'$2y$10$Ybbwn8akQOUZglJ8nJrwzeVNCd7GkQKE/zw/PD/CStwkr1mdK8wLK',NULL,'2023-10-03 09:11:19','2023-10-05 07:59:46'),(4,'Biola','biola@gmail.com','2',NULL,'$2y$10$xHQheKedSq6.oyokS8iFVOCqQBQKDmxW/uYvyKNKb9ei9sqt0QBrO',NULL,'2023-10-03 13:13:44','2023-10-06 13:48:38'),(8,'joy','joy@mail.com','0',NULL,'$2y$10$9TEBhJDnIOxyvbJX1EWw3eq3TqB1MjDWKxhSJ4PRvwpewa83xxgJq',NULL,'2023-10-05 11:19:28','2023-10-05 11:19:28');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `content`
--

/*!50001 DROP VIEW IF EXISTS `content`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `content` AS select `folderas`.`id` AS `id`,`folderas`.`name` AS `name`,`folderas`.`document` AS `document`,`folderas`.`ext` AS `ext`,`folderas`.`user_id` AS `user_id`,`folderas`.`department_id` AS `department_id`,`folderas`.`created_at` AS `created_at` from `folderas` union select `folderbs`.`id` AS `id`,`folderbs`.`name` AS `name`,`folderbs`.`document` AS `document`,`folderbs`.`ext` AS `ext`,`folderbs`.`user_id` AS `user_id`,`folderbs`.`department_id` AS `department_id`,`folderbs`.`created_at` AS `created_at` from `folderbs` union select `foldercs`.`id` AS `id`,`foldercs`.`name` AS `name`,`foldercs`.`document` AS `document`,`foldercs`.`ext` AS `ext`,`foldercs`.`user_id` AS `user_id`,`foldercs`.`department_id` AS `department_id`,`foldercs`.`created_at` AS `created_at` from `foldercs` union select `folderds`.`id` AS `id`,`folderds`.`name` AS `name`,`folderds`.`document` AS `document`,`folderds`.`ext` AS `ext`,`folderds`.`user_id` AS `user_id`,`folderds`.`department_id` AS `department_id`,`folderds`.`created_at` AS `created_at` from `folderds` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-22 11:13:36
