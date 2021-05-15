-- MySQL dump 10.13  Distrib 8.0.18, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: npigeneral
-- ------------------------------------------------------
-- Server version	5.7.28-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT 'Ativo',
  `profile` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (3,'Cleison Freitas','cleison51@hotmail.com',NULL,'$2y$10$K7yhHi9XKd/gIcEU.KhrjOCLXX4yHgnMxcf2zZCkPrjd1sKR30S7a','j4EpSEd4PuoVZT7w76n1y9tYCuUcfluFji457FuzAc5GI4KZevbbcQZe74lr','2021-03-25 02:49:52','2021-05-09 15:55:31','Ativo','undraw_profile_new.svg'),(10,'João Bruno','joao@gmail.com',NULL,'$2y$10$rGB/JIb6qupDbLfZru6vfehv6KKKZFo1P7uQCTItDU7KBKagkz2iK',NULL,'2021-05-06 01:21:55','2021-05-06 01:21:55','Ativo','undraw_profile_2.svg'),(11,'Thiago Costa','thiago@gmail.com',NULL,'$2y$10$4NuPxkaaI3lyFQ.AQUCG0eQqyPedcB7/a4mwkckuOHDKt0zED5rd.',NULL,'2021-05-06 01:34:24','2021-05-07 01:28:33','Ativo','undraw_profile_new.svg'),(12,'Helena Dias','helena@gmail.com',NULL,'$2y$10$vNLjCZQ/yXzhU5OK8kEMWeAW7PqcSZQm8JeMU4/4e2fRIRrpfqMS2',NULL,'2021-05-06 02:32:25','2021-05-06 02:32:25','Ativo','undraw_profile_3.svg'),(13,'Raimundo Junior','junior@gmail.com',NULL,'$2y$10$.dcA1wJcB8PkUC6zkmbOdOd5e0tEJsU1z7E8Dcmleb82Dtxeghy8G',NULL,'2021-05-09 15:46:38','2021-05-09 15:48:36','Inativo','black_man.png');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cemiterio`
--

DROP TABLE IF EXISTS `cemiterio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cemiterio` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT 'Admin',
  `menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iframe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cemiterio`
--

LOCK TABLES `cemiterio` WRITE;
/*!40000 ALTER TABLE `cemiterio` DISABLE KEYS */;
INSERT INTO `cemiterio` VALUES (1,'Admin','Cadastros','Contagem','https://www.youtube.com/embed/wDjeBNv6ip0?list=RDMM','2021-04-30 20:59:33','2021-04-30 20:59:33','cem3dd48ab31d016ffcbf3314df2b3cb9ce'),(2,'Admin','Impressões','Cobrança','https://www.youtube.com/embed/icXUkIfZxyg','2021-04-30 20:59:50','2021-04-30 20:59:50','cemc3992e9a68c5ae12bd18488bc579b30d');
/*!40000 ALTER TABLE `cemiterio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clinica`
--

DROP TABLE IF EXISTS `clinica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clinica` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT 'Admin',
  `menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iframe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `token` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clinica`
--

LOCK TABLES `clinica` WRITE;
/*!40000 ALTER TABLE `clinica` DISABLE KEYS */;
/*!40000 ALTER TABLE `clinica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contabil`
--

DROP TABLE IF EXISTS `contabil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contabil` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT 'Admin',
  `menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iframe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `token` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contabil`
--

LOCK TABLES `contabil` WRITE;
/*!40000 ALTER TABLE `contabil` DISABLE KEYS */;
/*!40000 ALTER TABLE `contabil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emissor`
--

DROP TABLE IF EXISTS `emissor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `emissor` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT 'Admin',
  `menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iframe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `token` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emissor`
--

LOCK TABLES `emissor` WRITE;
/*!40000 ALTER TABLE `emissor` DISABLE KEYS */;
INSERT INTO `emissor` VALUES (1,'Admin','Vendas','Emissão de Nota Fiscal','https://www.youtube.com/embed/KId6eunoiWk?list=RDdNWTmSvaZ74','2021-05-03 00:46:05','2021-05-03 00:46:05','emi8e82ab7243b7c66d768f1b8ce1c967eb');
/*!40000 ALTER TABLE `emissor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
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
-- Table structure for table `funerario`
--

DROP TABLE IF EXISTS `funerario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `funerario` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT 'Admin',
  `modulo` enum('MA','ME') COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iframe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funerario`
--

LOCK TABLES `funerario` WRITE;
/*!40000 ALTER TABLE `funerario` DISABLE KEYS */;
INSERT INTO `funerario` VALUES (1,'Admin','MA','Cadastros','Básicos','https://www.youtube.com/embed/O2IuJPh6h_A?list=RDO2IuJPh6h_A','2021-04-29 00:27:40','2021-04-29 00:27:40','fun06997f04a7db92466a2baa6ebc8b872d'),(2,'Admin','MA','Movimentos','Caixas','https://www.youtube.com/embed/fIU2B06lgnU','2021-04-29 00:29:21','2021-04-29 00:29:21','fun65b9eea6e1cc6bb9f0cd2a47751a186f');
/*!40000 ALTER TABLE `funerario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2021_02_21_001348_create_funerals_table',1),(4,'2021_02_21_002259_create_funerals_table',2),(5,'2021_02_21_002848_create_funerals_table',3),(6,'2021_02_28_231813_create_content_mains_table',4),(7,'2021_02_28_232533_create_sistemas_table',5),(8,'2021_03_05_011813_create_cemiterio_models_table',6),(9,'2021_03_05_012202_create_clinica_models_table',7),(10,'2021_03_05_012430_create_contabil__models_table',7),(11,'2021_03_05_012819_create_mobile_models_table',7),(12,'2021_03_05_013921_create_cemiterio_models_table',7),(13,'2021_03_05_014247_create_funerario_models_table',7),(14,'2021_03_05_014622_create_tele_models_table',7),(15,'2021_03_05_014951_create_emissor_models_table',7),(16,'2021_03_07_222621_create_contato_models_table',8),(17,'2021_03_11_071752_create_sistemas_models_table',9),(18,'2019_08_19_000000_create_failed_jobs_table',10),(19,'2021_03_26_232316_create_sav_models_table',11);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mobile`
--

DROP TABLE IF EXISTS `mobile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mobile` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT 'Admin',
  `menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iframe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `token` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mobile`
--

LOCK TABLES `mobile` WRITE;
/*!40000 ALTER TABLE `mobile` DISABLE KEYS */;
/*!40000 ALTER TABLE `mobile` ENABLE KEYS */;
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
INSERT INTO `password_resets` VALUES ('cleison51@hotmail.com','$2y$10$LsTwgvyr6ZyipSFmnaILreDjlD1Bw5vzAifgHraeOKFRmBvs1hWn.','2021-05-04 02:28:43');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `requests`
--

DROP TABLE IF EXISTS `requests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `requests` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sistema` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `title` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `nome` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `email` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `descricao` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT 'Pendente',
  `login` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `whatsapp` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=302 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requests`
--

LOCK TABLES `requests` WRITE;
/*!40000 ALTER TABLE `requests` DISABLE KEYS */;
INSERT INTO `requests` VALUES (238,'Sistema de Controle Funerario','Melhoria na ferramenta de Backup','Cleison Freitas ferreira','','O sistema poderia ter um gerenciamento de Backup com amplas funções de Gerenciamento.','2021-03-08 23:56:31','2021-03-08 23:56:31','Anulada','Cleison','',''),(239,'Sistema de Controle Funerario','Melhoria na ferramenta de Backup','Cleison Freitas ferreira','','O sistema poderia ter um gerenciamento de Backup com amplas funções de Gerenciamento.','2021-03-09 00:01:28','2021-03-09 00:01:28','Anulada','Cleison','',''),(240,'Sistema de Gerenciamento de Cemitério','Melhoria na ferramenta de Backup','Cleison Freitas ferreira','','Aperfeiçoamento da ferramenta de backup.','2021-03-09 00:02:11','2021-03-09 00:02:11','Anulada','Cleison','',''),(241,'Clinica','Implantação de nova Ferramenta','Eugênio da Silva Dias','','Solicitamos a implantação imediata do sistema Clínica.','2021-03-09 00:03:51','2021-03-09 00:03:51','Anulada','Cleison','',''),(242,'Mutare','Implantação de nova Ferramenta','Eugênio da Silva Dias','','Solicitamos a implantação imediata do sistema Mutare.','2021-03-09 00:20:04','2021-03-09 00:20:04','Anulada','Cleison','',''),(243,'Sistema de Gerenciamento de Cemitério','Implantação de nova Ferramenta','Maiara dias da Cunha','','Solicitamos a implantação imediata do sistema SGC.','2021-03-09 00:21:30','2021-03-09 00:21:30','Anulada','Cleison','',''),(244,'Emissor Fiscal','Teste de Mensagem','Cleison Freitas ferreira','','Qualquer um','2021-03-09 00:21:51','2021-03-09 00:21:51','Anulada','Cleison','',''),(245,'Telemarketing','Implantação de nova Ferramenta','Cleison Freitas ferreira','','Qualquer coisa','2021-03-09 00:47:07','2021-03-09 00:47:07','Anulada','Cleison','',''),(246,'Telemarketing','Implantação de nova Ferramenta','Cleison Freitas ferreira','','Qualquer coisa','2021-03-09 00:47:07','2021-03-09 00:47:07','Anulada','Cleison','',''),(247,'Sistema de Controle Funerário','Implantação de nova Ferramenta','Eugênio da Silva Dias','gunskullig@gmail.com','Tentativa número 1','2021-03-10 01:31:21','2021-03-10 01:31:21','Anulada','Cleison','',''),(248,'Sistema de Controle Funerário','Implantação de nova Ferramenta','Eugênio da Silva Dias','gunskullig@gmail.com','Tentativa número 1','2021-03-10 01:32:07','2021-03-10 01:32:07','Anulada','Cleison','',''),(249,'Sistema de Controle Funerário','Implantação de nova Ferramenta','Eugênio da Silva Dias','gunskullig@gmail.com','Tentativa número 1','2021-03-10 01:32:52','2021-03-10 01:32:52','Anulada','Cleison','',''),(250,'Clinica','Teste de Mensagem','Eugênio da Silva Dias','gunskullig@gmail.com','Tentativa número 1','2021-03-10 01:34:47','2021-03-10 01:34:47','Anulada','Cleison','',''),(251,'Mutare','Teste de Mensagem','Cleison Freitas ferreira','cleison51@hotmail.com','Tentativa número 100','2021-03-10 01:39:54','2021-03-10 01:39:54','Anulada','Cleison','',''),(252,'Vit','ti','no','ce','s','2021-03-10 01:56:56','2021-03-10 01:56:56','Anulada','Cleison','',''),(253,'Vit','ti','no','ce','s','2021-03-10 01:57:43','2021-03-10 01:57:43','Anulada','Cleison','',''),(254,'Emissor Fiscal','Utilização da Ferramenta','Joziani Pontes','josypontes@silva.com','Gostaria de Solicitar um treinamento, não só para mim mas para toda a minha equipe. De qual forma posso estar agendando?','2021-03-20 01:54:34','2021-04-13 13:12:27','Em análise','Cleison','',''),(256,'Telemarketing','Melhoria na ferramenta de Backup','Eugênio da Silva Dias','eugencio@hotmail.com','Treinamento sobre a nova ferramenta.','2021-03-20 11:18:01','2021-03-20 11:18:01','Anulada','Cleison','',''),(257,'Telemarketing','Implantação de nova Ferramenta','Fabrício Queroz','sa@sdasd.com','Teste de Implantação.','2021-03-20 11:29:11','2021-03-20 11:29:11','Anulada','Cleison','',''),(258,'Emissor Fiscal','Teste de Mensagem','Cleison Freitas ferreira','cleison51@hotmail.com','Teste de Mensagem!','2021-03-20 11:55:46','2021-03-20 11:55:46','Anulada','Cleison','',''),(259,'Emissor Fiscal','Teste de Mensagem','Cleison Freitas ferreira','cleison51@hotmail.com','Testes','2021-03-20 12:06:29','2021-03-20 12:06:29','Anulada','Cleison','',''),(260,'Clinica','Melhoria na ferramenta de Backup','Cleison Freitas ferreira','gunskullig@gmail.com','Teste de Ferramenta','2021-03-20 12:08:41','2021-03-20 12:08:41','Anulada','Cleison','',''),(261,'Telemarketing','Teste de Mensagem','Cleison Freitas ferreira','cleison51@hotmail.com','Teste de Mensagem!','2021-03-20 12:10:01','2021-03-20 12:10:01','Anulada','Cleison','',''),(262,'Sistema de Controle Funerário','Implantação de nova Ferramenta','Cleison Freitas ferreira','gunskullig@gmail.com','Teste de Ferramenta','2021-03-20 12:11:01','2021-03-20 12:11:01','Anulada','Cleison','',''),(263,'Emissor Fiscal','Melhoria na ferramenta de Backup','Eugênio da Silva Dias','eugencio@hotmail.com','Teste de ferra','2021-03-20 12:12:31','2021-03-20 12:12:31','Anulada','Cleison','',''),(264,'Clinica','sda','Eugênio da Silva Dias','eugencio@hotmail.com','Sdsdasdasda','2021-03-20 12:13:14','2021-03-20 12:13:14','Anulada','Cleison','',''),(265,'Emissor Fiscal','Teste de Mensagem','Eugênio da Silva Dias','gunskullig@gmail.com','Teste de Mensagem.','2021-03-20 12:15:03','2021-03-20 12:15:03','Anulada','Cleison','',''),(266,'Emissor Fiscal','sda','Eugênio da Silva Dias','eugencio@hotmail.com','Tetstess','2021-03-20 12:16:27','2021-03-20 12:16:27','Anulada','Cleison','',''),(267,'Sistema de Gerenciamento de Cemitério','Teste de Mensagem','Cleison Freitas ferreira','cleison51@hotmail.com','Teste','2021-03-20 12:17:27','2021-03-20 12:17:27','Anulada','Cleison','',''),(268,'Sistema de Gerenciamento de Cemitério','Teste de Mensagem','Cleison Freitas ferreira','cleison51@hotmail.com','Testateae','2021-03-20 12:19:03','2021-03-20 12:19:03','Anulada','Cleison','',''),(269,'Emissor Fiscal','Implantação de nova Ferramenta','Cleison Freitas ferreira','cleison51@hotmail.com','DSasdsadas','2021-03-20 12:20:54','2021-03-20 12:20:54','Anulada','Cleison','',''),(271,'Sistema de Controle Funerário','Implantação de nova Ferramenta','Cleison Freitas ferreira','cleison51@hotmail.com','Testetete','2021-03-20 12:22:08','2021-03-20 12:22:08','Desenvolvida','Cleison','',''),(272,'Sistema de Controle Funerário','Implantação de nova Ferramenta','Cleison Freitas ferreira','cleison51@hotmail.com','Testete','2021-03-20 12:23:36','2021-03-20 12:23:36','Desenvolvida','Cleison','',''),(273,'Sistema de Gerenciamento de Cemitério','Teste de Mensagem','Cleison Freitas ferreira','cleison51@hotmail.com','Testetete','2021-03-20 12:24:16','2021-03-20 12:24:16','Desenvolvida','Cleison','',''),(274,'Sistema de Controle Funerário','tete','testete','cleison51@hotmail.com','tetaststas','2021-03-20 12:24:59','2021-03-20 12:24:59','Desenvolvida','Cleison','',''),(275,'Sistema de Gerenciamento de Cemitério','Implantação de nova Ferramenta','Cleison Freitas ferreira','cleison51@hotmail.com','sdfsdfgsdfgsdg','2021-03-20 12:26:34','2021-03-20 12:26:34','Desenvolvida','Cleison','',''),(276,'Sistema de Gerenciamento de Cemitério','Implantação de nova Ferramenta','Cleison Freitas ferreira','cleison51@hotmail.com','Tetdtdstsd','2021-03-20 12:27:57','2021-03-20 12:27:57','Desenvolvida','Cleison','',''),(277,'Sistema de Gerenciamento de Cemitério','Implantação de nova Ferramenta','sdasdas','cleison51@hotmail.com','sasfsdgsdgsdgsd','2021-03-20 12:28:24','2021-03-20 12:28:24','Desenvolvida','Cleison','',''),(278,'Sistema de Controle Funerário','Implantação de nova Ferramenta','Cleison Freitas ferreira','cleison51@hotmail.com','sdasdsadasdasd','2021-03-20 12:28:51','2021-03-20 12:28:51','Desenvolvida','Cleison','',''),(279,'Sistema de Gerenciamento de Cemitério','Implantação de nova Ferramenta','Cleison Freitas ferreira','cleison51@hotmail.com','sdasdasdasdas','2021-03-20 12:29:33','2021-03-20 12:29:33','Desenvolvida','Cleison','',''),(280,'Sistema de Controle Funerário','Implantação de nova Ferramenta','Cleison Freitas ferreira','gunskullig@gmail.com','sdasdasdas','2021-03-20 12:30:01','2021-04-12 00:39:24','Anulada','Cleison','',''),(286,'Sistema de Gerenciamento de Cemitério','Implantação de nova Ferramenta','Cleison Freitas ferreira','cleison51@hotmail.com','sdasdsadsa','2021-03-20 16:09:13','2021-04-12 00:42:39','Anulada','Cleison','',''),(293,'Sistema de Gerenciamento de Cemitério','Implantação de nova Ferramenta','Cleison Freitas ferreira','cleison51@hotmail.com','sdasda','2021-03-20 16:24:37','2021-04-30 19:16:20','Desenvolvida','Admin','',''),(294,'Sistema de Controle Funerário','Implantação de nova Ferramenta','Gustavo Dias','cleison51@hotmail.com','Ajuste de Menu!','2021-03-20 16:26:22','2021-04-30 19:39:54','Em análise','Admin','',''),(297,'Sistema de Controle Funerário','Implantação de nova Ferramenta','Cleison Freitas ferreira','cleison51@hotmail.com','sadasdasdas','2021-03-20 16:28:34','2021-04-30 19:42:04','Pendente','Admin','',''),(298,'Sistema de Gerenciamento de Cemitério','Implantação de nova Ferramenta','Cleison Freitas ferreira','cleison51@hotmail.com','Teste','2021-03-20 16:30:30','2021-04-30 19:41:05','Em análise','Admin','',''),(299,'Sistema de Gerenciamento de Cemitério','Implantação de nova Ferramenta','Cleison Freitas ferreira','cleison51@hotmail.com','sdasdasdsa','2021-03-20 16:30:48','2021-04-30 19:41:38','Anulada','Admin','',''),(300,'Sistema de Controle Funerário','Implantação de nova Ferramenta','Cleison Freitas ferreira','cleison51@hotmail.com','Problema Com Sistema','2021-03-27 03:12:54','2021-04-30 19:41:50','Pendente','Admin','',''),(301,'Clinica','Facilidade de Acesso','Maria do Carmo de Freitas','maria@gmail.com','Algumas facilidades poderiam ser aplicadas ao clínica.','2021-04-09 23:55:19','2021-04-09 23:55:19','Em análise','Cleison','','');
/*!40000 ALTER TABLE `requests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sistemas`
--

DROP TABLE IF EXISTS `sistemas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sistemas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(40) DEFAULT 'Admin',
  `descricao` varchar(70) DEFAULT NULL,
  `modulo` varchar(15) DEFAULT NULL,
  `menu` varchar(20) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `iframe` varchar(80) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `token` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sistemas`
--

LOCK TABLES `sistemas` WRITE;
/*!40000 ALTER TABLE `sistemas` DISABLE KEYS */;
INSERT INTO `sistemas` VALUES (1,'Admin','Funerário','MA','Cadastros',NULL,NULL,'2021-04-29 00:27:40','2021-04-29 00:27:40','fun06997f04a7db92466a2baa6ebc8b872d'),(2,'Admin','Funerário','MA','Movimentos',NULL,NULL,'2021-04-29 00:29:21','2021-04-29 00:29:21','fun65b9eea6e1cc6bb9f0cd2a47751a186f'),(3,'Admin','Cemiterio',NULL,'Cadastros',NULL,NULL,'2021-04-30 20:59:33','2021-04-30 20:59:33','cem3dd48ab31d016ffcbf3314df2b3cb9ce'),(4,'Admin','Cemiterio',NULL,'Impressões',NULL,NULL,'2021-04-30 20:59:50','2021-04-30 20:59:50','cemc3992e9a68c5ae12bd18488bc579b30d'),(6,'Admin','Emissor',NULL,'Vendas',NULL,NULL,'2021-05-03 00:46:05','2021-05-03 00:46:05','emi8e82ab7243b7c66d768f1b8ce1c967eb');
/*!40000 ALTER TABLE `sistemas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `telemarketing`
--

DROP TABLE IF EXISTS `telemarketing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `telemarketing` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT 'Admin',
  `menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iframe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `telemarketing`
--

LOCK TABLES `telemarketing` WRITE;
/*!40000 ALTER TABLE `telemarketing` DISABLE KEYS */;
/*!40000 ALTER TABLE `telemarketing` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (19,'Cleison Freitas','cleison51@hotmail.com',NULL,'$2y$10$jj3ELP765mPlE8q1BMlzkuyK9/O0AV0puUBRdTul.yJ4hy3Y7Qr6e',NULL,'2021-05-08 02:26:41','2021-05-08 02:26:41');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `veicular`
--

DROP TABLE IF EXISTS `veicular`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `veicular` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT 'Admin',
  `menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iframe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `token` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `veicular`
--

LOCK TABLES `veicular` WRITE;
/*!40000 ALTER TABLE `veicular` DISABLE KEYS */;
/*!40000 ALTER TABLE `veicular` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-09 20:15:25
