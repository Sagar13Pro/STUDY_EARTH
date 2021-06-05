# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 8.0.25)
# Database: studyearth
# Generation Time: 2021-06-05 12:32:15 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table course_materials
# ------------------------------------------------------------

DROP TABLE IF EXISTS `course_materials`;

CREATE TABLE `course_materials` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `course_detail_id` bigint unsigned NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdf_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_order` double NOT NULL,
  `isDeleted` enum('No','Yes') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `course_materials_course_detail_id_foreign` (`course_detail_id`),
  CONSTRAINT `course_materials_course_detail_id_foreign` FOREIGN KEY (`course_detail_id`) REFERENCES `course_details` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `course_materials` WRITE;
/*!40000 ALTER TABLE `course_materials` DISABLE KEYS */;

INSERT INTO `course_materials` (`id`, `course_detail_id`, `title`, `subtitle`, `pdf_path`, `display_order`, `isDeleted`, `created_at`, `updated_at`)
VALUES
	(1,1,'Complex Int','Complex integration along a Line or Parabola with Solved Example','1.pdf',1,'No',NULL,NULL),
	(2,1,'Probality Dist','Introduction to Probability Distribution','',1,'No',NULL,NULL),
	(3,1,'Probality Dist','Discrete Random Variable in Probability Distribution','',2,'No',NULL,NULL),
	(4,1,'Complex Int','Complex integration along a Circle with Solved Example','',2,'Yes',NULL,NULL),
	(7,2,'NFA','Creation','',1,'No',NULL,NULL),
	(8,3,'Cipher','Symmetric Cipher Model','Information Security/Unit 1 Symmetric Cipher Model.pdf',1,'No',NULL,NULL),
	(9,3,'Cipher','Block Cipher','Information Security/Unit 2 Block Cipher.pdf',2,'No',NULL,NULL);

/*!40000 ALTER TABLE `course_materials` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
