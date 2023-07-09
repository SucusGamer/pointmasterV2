-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: pointmaster
-- ------------------------------------------------------
-- Server version	8.0.31

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
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category` (
  `categoryID` int NOT NULL AUTO_INCREMENT,
  `nameCategory` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `statusCategory` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`categoryID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Alimentos','1','2023-07-02 17:40:03','2023-07-02 23:19:59'),(2,'Tecnología','1','2023-07-03 00:07:51','2023-07-03 00:07:51');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `company` (
  `id_company` int NOT NULL AUTO_INCREMENT,
  `companyKey` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `business_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `short_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cellphone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rfc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `postal_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dial_code` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_company`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company`
--

LOCK TABLES `company` WRITE;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
INSERT INTO `company` VALUES (1,'Demo',NULL,NULL,'0','Esto es una prueba','687-68-667-4434-3','(999) 994-0728',NULL,'a.paredes12345@hotmail.com','United States',NULL,'2023-06-08 08:26:12','2023-06-08 03:51:25','+52'),(2,'Demo2','Prueba','NO tengo','0','Esto es una prueba','213-42-142-1412-4','(999) 994-0728',NULL,'a.paredes12345@hotmail.com','United Kingdom','97390','2023-06-08 08:29:37','2023-06-08 03:53:45','+52'),(3,'Demo3','Prueba2','NO tengo3','0','Esto es una prueba','213-42-142-1412-4','(999) 994-0728','holaaaaaaaaaa','a.paredes12345@hotmail.com','United Kingdom','97390','2023-06-08 08:30:13','2023-06-13 05:00:27','+52'),(4,'dmo15','Prueba 2','PBR','0','Esto es una prueba como mil','242-14-242-5326-5','(999) 994-0728','sdasdsdas','adasdasdasdd','Afghanistan','97390','2023-06-13 04:55:40','2023-06-13 04:56:23','+52'),(5,'JGL','LA JOTAGLl','JGL','1','ESTO ES UNA PRUEBA COMO 2K','124-12-421-4214-1','(999) 994-0728','PAAGOHOLAQUETAL','a.paredes12345@hotmail.com','MEX','97390','2023-06-15 01:38:43','2023-06-15 03:41:34','+52'),(6,'GFG','Prueba','ADASD','1','SDASDASDAS','124-12-421-4242-1','(999) 994-0728','holaaaaa','a.paredes12345@hotmail.com','MEX','97390','2023-06-15 01:44:45','2023-06-15 01:51:28','+52');
/*!40000 ALTER TABLE `company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact` (
  `id_contact` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `message` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_contact`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contactos`
--

DROP TABLE IF EXISTS `contactos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contactos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(500) DEFAULT NULL,
  `apellido` varchar(500) DEFAULT NULL,
  `correo` varchar(500) DEFAULT NULL,
  `mensaje` varchar(10000) DEFAULT NULL,
  `activo` varchar(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactos`
--

LOCK TABLES `contactos` WRITE;
/*!40000 ALTER TABLE `contactos` DISABLE KEYS */;
INSERT INTO `contactos` VALUES (1,'fernando','LLEscobedo','fdtmota@gmail.com','Ocupo saber si tiene nuevas llantas','1','2023-03-29 23:36:58','2023-03-30 05:36:58'),(2,'fernando','LLEscobedo','admin@mail.com','wasd','1','2023-07-09 17:22:27','2023-07-09 17:22:27');
/*!40000 ALTER TABLE `contactos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customers` (
  `IdCustomer` int NOT NULL AUTO_INCREMENT,
  `CustomerName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `MotherLastName` varchar(255) DEFAULT NULL,
  `RFC` varchar(255) DEFAULT NULL,
  `CURP` varchar(255) DEFAULT NULL,
  `CivilStatus` varchar(255) DEFAULT NULL,
  `BirthDate` varchar(255) DEFAULT NULL,
  `PlaceOfBirth` varchar(255) DEFAULT NULL,
  `State` varchar(255) DEFAULT NULL,
  `Country` varchar(255) DEFAULT NULL,
  `IdCP` varchar(255) DEFAULT NULL,
  `OfficePhone` varchar(255) DEFAULT NULL,
  `HomePhone` varchar(255) DEFAULT NULL,
  `CellPhone` varchar(255) DEFAULT NULL,
  `Contact1` varchar(255) DEFAULT NULL,
  `Contact2` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `CustomerStatus` varchar(255) DEFAULT NULL,
  `listPrice` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`IdCustomer`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (1,'Guillermo Aldair','Paredes','Ayala','PAAG020416LA0','PAAG020416HYNRYLA6','Soltero','16/04/2002','Umán','Yucatán','MEX','97390','(999) 994-0728','654-65-465-4654-6','(999) 994-0728','Luis Guillermo Paredes Gómez','Deysi María Ayala Tah','a.paredes12345@hotmail.com','1','lista1','2023-06-15 05:07:47','2023-06-25 01:24:55'),(2,'Sarah Margarita','Uicab','Pech','PAAG020416LA0','PAAG020416HYNRYLA6','Soltero','19/09/2002','Umán','Yucátan','MEX','99999',NULL,NULL,'(999) 994-0727',NULL,NULL,'a.paredes12345@hotmail.com','1',NULL,'2023-06-25 01:23:18','2023-06-25 01:23:18');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detallespedidoweb`
--

DROP TABLE IF EXISTS `detallespedidoweb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `detallespedidoweb` (
  `id` int NOT NULL AUTO_INCREMENT,
  `productollanta_id` int DEFAULT NULL,
  `cantidad` int DEFAULT NULL,
  `preciounitario` decimal(10,2) DEFAULT NULL,
  `pedidoweb_id` int DEFAULT NULL,
  `importe` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detallespedidoweb`
--

LOCK TABLES `detallespedidoweb` WRITE;
/*!40000 ALTER TABLE `detallespedidoweb` DISABLE KEYS */;
INSERT INTO `detallespedidoweb` VALUES (1,1,1,250.00,1,250.00,'2023-03-22 19:09:22','2023-03-22 19:09:22'),(2,1,5,250.00,2,1250.00,'2023-03-23 03:59:36','2023-03-23 03:59:36'),(3,2,2,500.50,2,1001.00,'2023-03-23 03:59:36','2023-03-23 03:59:36'),(4,1,1,250.00,3,250.00,'2023-03-23 05:40:12','2023-03-23 05:40:12'),(5,1,1,250.00,4,250.00,'2023-03-26 23:23:09','2023-03-26 23:23:09'),(6,2,2,500.50,4,1001.00,'2023-03-26 23:23:09','2023-03-26 23:23:09'),(7,2,1,500.50,5,500.50,'2023-03-27 04:35:58','2023-03-27 04:35:58'),(8,2,1,500.50,6,500.50,'2023-03-27 05:26:15','2023-03-27 05:26:15'),(9,2,1,500.50,7,500.50,'2023-03-27 05:48:21','2023-03-27 05:48:21'),(10,2,2,500.50,8,1001.00,'2023-03-27 07:15:07','2023-03-27 07:15:07'),(11,2,1,500.50,9,500.50,'2023-03-27 07:52:10','2023-03-27 07:52:10'),(12,1,1,250.00,10,250.00,'2023-03-27 09:52:27','2023-03-27 09:52:27'),(13,2,1,500.50,11,500.50,'2023-03-29 05:12:17','2023-03-29 05:12:17'),(14,3,6,250.00,11,1500.00,'2023-03-29 05:12:17','2023-03-29 05:12:17'),(15,1,4,250.00,11,1000.00,'2023-03-29 05:12:17','2023-03-29 05:12:17'),(16,5,1,250.00,11,250.00,'2023-03-29 05:12:17','2023-03-29 05:12:17'),(17,4,1,500.50,11,500.50,'2023-03-29 05:12:17','2023-03-29 05:12:17'),(18,1,1,250.00,12,250.00,'2023-03-30 04:12:40','2023-03-30 04:12:40'),(19,1,1,250.00,13,250.00,'2023-03-30 04:38:11','2023-03-30 04:38:11'),(20,1,1,250.00,14,250.00,'2023-03-30 04:40:37','2023-03-30 04:40:37'),(21,2,1,500.50,1,500.50,'2023-03-30 04:55:16','2023-03-30 04:55:16'),(22,1,2,250.00,2,500.00,'2023-03-30 05:31:09','2023-03-30 05:31:09'),(23,6,1,500.50,2,500.50,'2023-03-30 05:31:09','2023-03-30 05:31:09'),(24,1,1,250.00,3,250.00,'2023-04-24 18:03:20','2023-04-24 18:03:20'),(25,5,1,250.00,4,250.00,'2023-04-24 18:10:10','2023-04-24 18:10:10'),(26,2,1,500.50,5,500.50,'2023-04-25 23:36:21','2023-04-25 23:36:21'),(27,6,1,500.50,5,500.50,'2023-04-25 23:36:21','2023-04-25 23:36:21'),(28,1,1,250.00,6,250.00,'2023-04-26 01:11:22','2023-04-26 01:11:22'),(29,1,1,250.00,7,250.00,'2023-06-29 13:20:36','2023-06-29 13:20:36'),(30,5,1,250.00,8,250.00,'2023-06-29 13:39:51','2023-06-29 13:39:51'),(31,3,2,250.00,9,500.00,'2023-06-30 06:25:48','2023-06-30 06:25:48'),(32,2,1,500.50,9,500.50,'2023-06-30 06:25:48','2023-06-30 06:25:48'),(33,1,1,250.00,10,250.00,'2023-07-01 22:11:13','2023-07-01 22:11:13');
/*!40000 ALTER TABLE `detallespedidoweb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dimensionllanta`
--

DROP TABLE IF EXISTS `dimensionllanta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dimensionllanta` (
  `id` int NOT NULL AUTO_INCREMENT,
  `dimension` varchar(500) DEFAULT NULL,
  `numrin_id` int DEFAULT NULL,
  `activo` varchar(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dimensionllanta`
--

LOCK TABLES `dimensionllanta` WRITE;
/*!40000 ALTER TABLE `dimensionllanta` DISABLE KEYS */;
INSERT INTO `dimensionllanta` VALUES (1,'Grupo 1',NULL,'1','2023-03-26 01:14:27','2023-07-09 16:30:22'),(2,'Grupo 2',NULL,'1','2023-03-26 01:39:24','2023-07-09 16:30:29');
/*!40000 ALTER TABLE `dimensionllanta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresa`
--

DROP TABLE IF EXISTS `empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `empresa` (
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresa`
--

LOCK TABLES `empresa` WRITE;
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `families`
--

DROP TABLE IF EXISTS `families`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `families` (
  `familyID` int NOT NULL AUTO_INCREMENT,
  `nameFamily` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `statusFamily` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`familyID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `families`
--

LOCK TABLES `families` WRITE;
/*!40000 ALTER TABLE `families` DISABLE KEYS */;
INSERT INTO `families` VALUES (1,'Moda y accesorios','1','2023-07-02 18:05:31','2023-07-02 18:13:23');
/*!40000 ALTER TABLE `families` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `groups` (
  `groupID` int NOT NULL AUTO_INCREMENT,
  `nameGroup` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `statusGroup` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`groupID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (1,'Alimentos procesados','1','2023-07-02 18:19:58','2023-07-02 18:22:10');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `info`
--

DROP TABLE IF EXISTS `info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `info` (
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `info`
--

LOCK TABLES `info` WRITE;
/*!40000 ALTER TABLE `info` DISABLE KEYS */;
/*!40000 ALTER TABLE `info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `llantas`
--

DROP TABLE IF EXISTS `llantas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `llantas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombrellanta` varchar(500) DEFAULT NULL,
  `marca_id` int DEFAULT NULL,
  `dimension_id` int DEFAULT NULL,
  `imagen` varchar(1000) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `familia_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `llantas`
--

LOCK TABLES `llantas` WRITE;
/*!40000 ALTER TABLE `llantas` DISABLE KEYS */;
INSERT INTO `llantas` VALUES (1,'Llanta De Emergencia',2,2,'Sin título-1.jpg',250.00,'llanta para cualquier emergencia',1,'2023-07-09 17:04:05','2023-07-09 17:04:05',2),(2,'Llanta Michelin Ultra Fast',1,1,'michelinll.png',500.50,'Para un carro especial',1,'2023-03-25 19:41:44','2023-03-26 01:41:44',NULL),(3,'Goodyear',2,2,'logo.png',250.00,'llanta de buena calidad',1,'2023-03-25 19:39:33','2023-03-26 01:39:33',NULL),(4,'Tornel',2,2,'michelinll.png',500.50,'Para una fecha especial',1,'2023-03-26 02:55:19','2023-03-26 02:55:19',NULL),(5,'Roadking',2,2,'llanta.png',250.00,'llanta de buena calidad',1,'2023-03-26 02:55:53','2023-03-26 02:55:53',NULL),(6,'Llanta de Navidad',1,2,'balanceo.png',500.50,'llanta de buena calidad',1,'2023-03-28 23:16:40','2023-03-29 05:16:40',NULL),(7,'Llanta Michelin Ultra Fast',1,2,'nitrogenoservicio.png',250.00,'Para un carro especial',1,'2023-03-29 05:19:37','2023-03-29 05:19:37',NULL),(8,'Llanta De Emergencia',1,1,'receta.jpeg',500.50,'llanta de buena calidad',1,'2023-05-30 05:26:02','2023-05-30 05:26:02',NULL),(9,'Producto de Prueba',2,2,'Sin título-1.png',1500.00,'es un producto de prueba',1,'2023-07-09 17:04:33','2023-07-09 17:04:33',2);
/*!40000 ALTER TABLE `llantas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `marca`
--

DROP TABLE IF EXISTS `marca`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `marca` (
  `id` int NOT NULL AUTO_INCREMENT,
  `imagen` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nombremarca` varchar(500) DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marca`
--

LOCK TABLES `marca` WRITE;
/*!40000 ALTER TABLE `marca` DISABLE KEYS */;
INSERT INTO `marca` VALUES (1,'marcamiche.png','Miche',1,'2023-03-01 10:33:23','2023-03-01 11:12:42'),(2,'bri.png','Bridgestone',1,'2023-03-01 11:13:24','2023-03-01 11:13:24');
/*!40000 ALTER TABLE `marca` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (15,'2014_10_12_000000_create_users_table',1),(16,'2014_10_12_100000_create_password_resets_table',1),(17,'2014_10_12_200000_add_two_factor_columns_to_users_table',1),(18,'2019_08_19_000000_create_failed_jobs_table',1),(19,'2019_12_14_000001_create_personal_access_tokens_table',1),(20,'2023_03_17_153918_create_sessions_table',1),(21,'2023_03_17_161705_create_permission_tables',1);
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
  `model_type` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `model_type` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `model_has_roles` VALUES (1,'App\\Models\\User',1),(2,'App\\Models\\User',2),(2,'App\\Models\\User',103),(1,'App\\Models\\User',104),(2,'App\\Models\\User',105),(1,'App\\Models\\User',106),(2,'App\\Models\\User',107),(2,'App\\Models\\User',108),(2,'App\\Models\\User',109),(2,'App\\Models\\User',110);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `numerorin`
--

DROP TABLE IF EXISTS `numerorin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `numerorin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `numrin` varchar(500) DEFAULT NULL,
  `tipovehiculo_id` int DEFAULT NULL,
  `activo` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `numerorin`
--

LOCK TABLES `numerorin` WRITE;
/*!40000 ALTER TABLE `numerorin` DISABLE KEYS */;
INSERT INTO `numerorin` VALUES (1,'14',1,1,'2023-03-25 19:52:42','2023-03-26 01:52:42'),(2,'24',2,1,'2023-03-25 19:52:51','2023-03-26 01:52:51'),(3,'13',1,1,'2023-03-25 19:51:03','2023-03-26 01:51:03'),(4,'18',1,1,'2023-03-26 01:46:27','2023-03-26 01:46:27'),(5,'Rin 17',1,1,'2023-03-26 23:10:33','2023-03-27 05:10:33'),(6,'Rin 15',1,1,'2023-03-26 23:12:46','2023-03-27 05:12:46');
/*!40000 ALTER TABLE `numerorin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
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
-- Table structure for table `pedidosweb`
--

DROP TABLE IF EXISTS `pedidosweb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pedidosweb` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(500) DEFAULT NULL,
  `apellido` varchar(500) DEFAULT NULL,
  `compania` varchar(500) DEFAULT NULL,
  `direccion` varchar(500) DEFAULT NULL,
  `estado_pais` varchar(500) DEFAULT NULL,
  `cp` int DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `celular` varchar(500) DEFAULT NULL,
  `nota` varchar(500) DEFAULT NULL,
  `subtotal` varchar(500) DEFAULT NULL,
  `total` varchar(500) DEFAULT NULL,
  `ventahecha` tinyint(1) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidosweb`
--

LOCK TABLES `pedidosweb` WRITE;
/*!40000 ALTER TABLE `pedidosweb` DISABLE KEYS */;
INSERT INTO `pedidosweb` VALUES (1,'Karina','LLEscobedo','Pedrito Sa de Cv','Fracc. Pedregales, calle 62 691 x 45, y 45A, Cd Caucel, 97314 Caucel, Yuc.','yu',97314,'karinamoo414@gmail.com','99999999999',NULL,'500.50','500.50',2,'2023-07-09 15:22:55','2023-07-09 15:22:55'),(2,'Fernando','LLEscobedo','fert','Fracc. Pedregales, calle 62 691 x 45, y 45A, Cd Caucel, 97314 Caucel, Yuc.','yu',97314,'fdtmot@gmail.com','1234567890','Nueva compra','1,000.50','1,000.50',1,'2023-03-29 23:33:23','2023-03-30 05:33:23'),(3,'Karina','LLEscobedo','KarianM','Fracc. Pedregales, calle 62 691 x 45, y 45A, Cd Caucel, 97314 Caucel, Yuc.','yu',97314,'karinamoo414@gmail.com','99999999999','dwawdaqd','250.00','250.00',1,'2023-07-09 17:14:18','2023-07-09 17:14:18'),(4,'Karina','LLEscobedo','KarianM','Fracc. Pedregales, calle 62 691 x 45, y 45A, Cd Caucel, 97314 Caucel, Yuc.','yu',97314,'karinamoo414@gmail.com','99999999999','adwa','250.00','250.00',1,'2023-07-09 17:14:24','2023-07-09 17:14:24'),(5,'Fernando','LLEscobedo','KarianM','Fracc. Pedregales, calle 62 691 x 45, y 45A, Cd Caucel, 97314 Caucel, Yuc.','yu',97314,'karinamoo414@gmail.com','99999999999','koij','1,001.00','1,001.00',1,'2023-04-25 17:38:03','2023-04-25 23:38:03'),(6,'Karina','LLEscobedo','KarianM','Fracc. Pedregales, calle 62 691 x 45, y 45A, Cd Caucel, 97314 Caucel, Yuc.','yu',97314,'karinamoo414@gmail.com','99999999999',NULL,'250.00','250.00',1,'2023-04-25 19:16:29','2023-04-26 01:16:29'),(7,'Karina','LLEscobedo','KarianM','Fracc. Pedregales, calle 62 691 x 45, y 45A, Cd Caucel, 97314 Caucel, Yuc.','yu',97314,'fdtmot@gmail.com','99999999999','sss','250.00','250.00',1,'2023-07-09 17:21:36','2023-07-09 17:21:36'),(8,'Fernando','LLEscobedo','fert','Fracc. Pedregales, calle 62 691 x 45, y 45A, Cd Caucel, 97314 Caucel, Yuc.','yu',97314,'karinamoo414@gmail.com','99999999999','ssfcssc','250.00','250.00',0,'2023-06-29 13:39:51','2023-06-29 13:39:51'),(9,'Fernando','Tziu',NULL,'Calle 16 por 23 SN','Merida, Yucatan',97316,'fdtmot@gmail.com','9999964429','ddwdwd','1,000.50','1,000.50',0,'2023-06-30 06:25:48','2023-06-30 06:25:48'),(10,'Karina','LLEscobedo','KarianM','Fracc. Pedregales, calle 62 691 x 45, y 45A, Cd Caucel, 97314 Caucel, Yuc.','yu',97314,'karinamoo414@gmail.com','99999999999','fdsf','250.00','250.00',0,'2023-07-01 22:11:12','2023-07-01 22:11:12');
/*!40000 ALTER TABLE `pedidosweb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'admin.inicio','web','2023-03-17 23:09:34','2023-03-17 23:09:34');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
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
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product` (
  `id_product` int NOT NULL AUTO_INCREMENT,
  `productKey` varchar(5) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `productName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tradeName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `productFamily` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `productGroup` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `productCategory` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `iva` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `productListPrice1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `productListPrice2` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `productListPrice3` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `productListPrice4` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `productListPrice5` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_product`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,NULL,'prueba','sera','0',NULL,NULL,NULL,'16',NULL,'15','2023-07-01 06:28:05','2023-07-01 06:46:30',NULL,NULL,NULL,NULL),(2,'2','ADAPTADOR USB TP-LINK N NANO TL-WN725N 150MBPS USB 2.0','ADAPTADOR USB TP-LINK','1','1','1','1','16',NULL,'300','2023-07-01 06:47:36','2023-07-03 00:10:50','339','250','348','0'),(3,'3','prueba','sera','1','1','1','1',NULL,'3.png','305','2023-07-04 23:18:51','2023-07-04 23:25:33','339',NULL,NULL,NULL),(4,'4','prueba 2','ADAPTADOR USB TP-LINK','1','1','1','2',NULL,'4.png','305','2023-07-04 23:26:53','2023-07-04 23:27:37','3398',NULL,NULL,NULL);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `provider`
--

DROP TABLE IF EXISTS `provider`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `provider` (
  `id_provider` int NOT NULL AUTO_INCREMENT,
  `nameProvider` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `providerStatus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `shortName` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rfc` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `curp` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `providerType` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `BirthDate` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `PlaceOfBirth` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Country` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `IdCP` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `OfficePhone` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `CellPhone` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `HomePhone` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Email` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Contact1` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Contact2` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `CivilStatus` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_provider`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `provider`
--

LOCK TABLES `provider` WRITE;
/*!40000 ALTER TABLE `provider` DISABLE KEYS */;
INSERT INTO `provider` VALUES (2,'Athletics Cityy','1','PRB','XAXX010101000','PAAG020416HYNRYLA6','Acreeedor','19/12/1999','Umán','MEX','97390','(999) 999-9999',NULL,NULL,NULL,NULL,NULL,'Soltero','2023-06-25 02:56:16','2023-07-01 07:00:45');
/*!40000 ALTER TABLE `provider` ENABLE KEYS */;
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
INSERT INTO `role_has_permissions` VALUES (1,1);
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
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Administrador','web','2023-03-17 23:09:34','2023-03-17 23:09:34'),(2,'Cliente','web','2023-03-17 23:09:34','2023-03-17 23:09:34');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `satpais`
--

DROP TABLE IF EXISTS `satpais`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `satpais` (
  `c_Pais` varchar(20) DEFAULT NULL,
  `Descripcion` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `satpais`
--

LOCK TABLES `satpais` WRITE;
/*!40000 ALTER TABLE `satpais` DISABLE KEYS */;
INSERT INTO `satpais` VALUES ('AFG','Afganistán'),('ALA','Islas Åland'),('ALB','Albania'),('DEU','Alemania'),('AND','Andorra'),('AGO','Angola'),('AIA','Anguila'),('ATA','Antártida'),('ATG','Antigua y Barbuda'),('SAU','Arabia Saudita'),('DZA','Argelia'),('ARG','Argentina'),('ARM','Armenia'),('ABW','Aruba'),('AUS','Australia'),('AUT','Austria'),('AZE','Azerbaiyán'),('BHS','Bahamas (las)'),('BGD','Bangladés'),('BRB','Barbados'),('BHR','Baréin'),('BEL','Bélgica'),('BLZ','Belice'),('BEN','Benín'),('BMU','Bermudas'),('BLR','Bielorrusia'),('MMR','Myanmar'),('BOL','Bolivia, Estado Plurinacional de'),('BIH','Bosnia y Herzegovina'),('BWA','Botsuana'),('BRA','Brasil'),('BRN','Brunéi Darussalam'),('BGR','Bulgaria'),('BFA','Burkina Faso'),('BDI','Burundi'),('BTN','Bután'),('CPV','Cabo Verde'),('KHM','Camboya'),('CMR','Camerún'),('CAN','Canadá'),('QAT','Catar'),('BES','Bonaire, San Eustaquio y Saba'),('TCD','Chad'),('CHL','Chile'),('CHN','China'),('CYP','Chipre'),('COL','Colombia'),('COM','Comoras'),('PRK','Corea (la República Democrática Popular de)'),('KOR','Corea (la República de)'),('CIV','Côte d\'Ivoire'),('CRI','Costa Rica'),('HRV','Croacia'),('CUB','Cuba'),('CUW','Curaçao'),('DNK','Dinamarca'),('DMA','Dominica'),('ECU','Ecuador'),('EGY','Egipto'),('SLV','El Salvador'),('ARE','Emiratos Árabes Unidos (Los)'),('ERI','Eritrea'),('SVK','Eslovaquia'),('SVN','Eslovenia'),('ESP','España'),('USA','Estados Unidos (los)'),('EST','Estonia'),('ETH','Etiopía'),('PHL','Filipinas (las)'),('FIN','Finlandia'),('FJI','Fiyi'),('FRA','Francia'),('GAB','Gabón'),('GMB','Gambia (La)'),('GEO','Georgia'),('GHA','Ghana'),('GIB','Gibraltar'),('GRD','Granada'),('GRC','Grecia'),('GRL','Groenlandia'),('GLP','Guadalupe'),('GUM','Guam'),('GTM','Guatemala'),('GUF','Guayana Francesa'),('GGY','Guernsey'),('GIN','Guinea'),('GNB','Guinea-Bisáu'),('GNQ','Guinea Ecuatorial'),('GUY','Guyana'),('HTI','Haití'),('HND','Honduras'),('HKG','Hong Kong'),('HUN','Hungría'),('IND','India'),('IDN','Indonesia'),('IRQ','Irak'),('IRN','Irán (la República Islámica de)'),('IRL','Irlanda'),('BVT','Isla Bouvet'),('IMN','Isla de Man'),('CXR','Isla de Navidad'),('NFK','Isla Norfolk'),('ISL','Islandia'),('CYM','Islas Caimán (las)'),('CCK','Islas Cocos (Keeling)'),('COK','Islas Cook (las)'),('FRO','Islas Feroe (las)'),('SGS','Georgia del sur y las islas sandwich del sur'),('HMD','Isla Heard e Islas McDonald'),('FLK','Islas Malvinas [Falkland] (las)'),('MNP','Islas Marianas del Norte (las)'),('MHL','Islas Marshall (las)'),('PCN','Pitcairn'),('SLB','Islas Salomón (las)'),('TCA','Islas Turcas y Caicos (las)'),('UMI','Islas de Ultramar Menores de Estados Unidos (las)'),('VGB','Islas Vírgenes (Británicas)'),('VIR','Islas Vírgenes (EE.UU.)'),('ISR','Israel'),('ITA','Italia'),('JAM','Jamaica'),('JPN','Japón'),('JEY','Jersey'),('JOR','Jordania'),('KAZ','Kazajistán'),('KEN','Kenia'),('KGZ','Kirguistán'),('KIR','Kiribati'),('KWT','Kuwait'),('LAO','Lao, (la) República Democrática Popular'),('LSO','Lesoto'),('LVA','Letonia'),('LBN','Líbano'),('LBR','Liberia'),('LBY','Libia'),('LIE','Liechtenstein'),('LTU','Lituania'),('LUX','Luxemburgo'),('MAC','Macao'),('MDG','Madagascar'),('MYS','Malasia'),('MWI','Malaui'),('MDV','Maldivas'),('MLI','Malí'),('MLT','Malta'),('MAR','Marruecos'),('MTQ','Martinica'),('MUS','Mauricio'),('MRT','Mauritania'),('MYT','Mayotte'),('MEX','México'),('FSM','Micronesia (los Estados Federados de)'),('MDA','Moldavia (la República de)'),('MCO','Mónaco'),('MNG','Mongolia'),('MNE','Montenegro'),('MSR','Montserrat'),('MOZ','Mozambique'),('NAM','Namibia'),('NRU','Nauru'),('NPL','Nepal'),('NIC','Nicaragua'),('NER','Níger (el)'),('NGA','Nigeria'),('NIU','Niue'),('NOR','Noruega'),('NCL','Nueva Caledonia'),('NZL','Nueva Zelanda'),('OMN','Omán'),('NLD','Países Bajos (los)'),('PAK','Pakistán'),('PLW','Palaos'),('PSE','Palestina, Estado de'),('PAN','Panamá'),('PNG','Papúa Nueva Guinea'),('PRY','Paraguay'),('PER','Perú'),('PYF','Polinesia Francesa'),('POL','Polonia'),('PRT','Portugal'),('PRI','Puerto Rico'),('GBR','Reino Unido (el)'),('CAF','República Centroafricana (la)'),('CZE','República Checa (la)'),('MKD','Macedonia (la antigua República Yugoslava de)'),('COG','Congo'),('COD','Congo (la República Democrática del)'),('DOM','República Dominicana (la)'),('REU','Reunión'),('RWA','Ruanda'),('ROU','Rumania'),('RUS','Rusia, (la) Federación de'),('ESH','Sahara Occidental'),('WSM','Samoa'),('ASM','Samoa Americana'),('BLM','San Bartolomé'),('KNA','San Cristóbal y Nieves'),('SMR','San Marino'),('MAF','San Martín (parte francesa)'),('SPM','San Pedro y Miquelón'),('VCT','San Vicente y las Granadinas'),('SHN','Santa Helena, Ascensión y Tristán de Acuña'),('LCA','Santa Lucía'),('STP','Santo Tomé y Príncipe'),('SEN','Senegal'),('SRB','Serbia'),('SYC','Seychelles'),('SLE','Sierra leona'),('SGP','Singapur'),('SXM','Sint Maarten (parte holandesa)'),('SYR','Siria, (la) República Árabe'),('SOM','Somalia'),('LKA','Sri Lanka'),('SWZ','Suazilandia'),('ZAF','Sudáfrica'),('SDN','Sudán (el)'),('SSD','Sudán del Sur'),('SWE','Suecia'),('CHE','Suiza'),('SUR','Surinam'),('SJM','Svalbard y Jan Mayen'),('THA','Tailandia'),('TWN','Taiwán (Provincia de China)'),('TZA','Tanzania, República Unida de'),('TJK','Tayikistán'),('IOT','Territorio Británico del Océano Índico (el)'),('ATF','Territorios Australes Franceses (los)'),('TLS','Timor-Leste'),('TGO','Togo'),('TKL','Tokelau'),('TON','Tonga'),('TTO','Trinidad y Tobago'),('TUN','Túnez'),('TKM','Turkmenistán'),('TUR','Turquía'),('TUV','Tuvalu'),('UKR','Ucrania'),('UGA','Uganda'),('URY','Uruguay'),('UZB','Uzbekistán'),('VUT','Vanuatu'),('VAT','Santa Sede [Ciudad del Vaticano] (la)'),('VEN','Venezuela, República Bolivariana de'),('VNM','Viet Nam'),('WLF','Wallis y Futuna'),('YEM','Yemen'),('DJI','Yibuti'),('ZMB','Zambia'),('ZWE','Zimbabue');
/*!40000 ALTER TABLE `satpais` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicios`
--

DROP TABLE IF EXISTS `servicios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `servicios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombreservicio` varchar(500) DEFAULT NULL,
  `descripcionservicio` varchar(1000) DEFAULT NULL,
  `imagen` varchar(1000) DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicios`
--

LOCK TABLES `servicios` WRITE;
/*!40000 ALTER TABLE `servicios` DISABLE KEYS */;
INSERT INTO `servicios` VALUES (1,'Reparación de Llanta','Reparaciones de calidad para tus productos.','reparacionllantasservicio.png',1,'2023-03-26 18:54:59','2023-03-27 00:54:59'),(2,'Venta de llantas','Los mejores llantas, de marcas prestigiadas al mejor precio.','ventallantaservicio.png',1,'2023-03-26 18:54:33','2023-03-27 00:54:33'),(3,'Rescates en horario laboral','Lunes a viernes de 8 am a 8 pm , sábados de 8 a 6 y domingos de 9 a 2','rescateservicio.png',1,'2023-03-27 00:48:07','2023-03-27 00:48:07'),(4,'Nitrógeno','Nitrógeno para tus llantas','nitrogenoservicio.png',1,'2023-03-27 00:52:08','2023-03-27 00:52:08'),(5,'Balanceo','Contamos con la más alta tecnología a tu servicio.','balanceoservicio.png',1,'2023-03-27 00:54:05','2023-03-27 00:54:05');
/*!40000 ALTER TABLE `servicios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sesion`
--

DROP TABLE IF EXISTS `sesion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sesion` (
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sesion`
--

LOCK TABLES `sesion` WRITE;
/*!40000 ALTER TABLE `sesion` DISABLE KEYS */;
/*!40000 ALTER TABLE `sesion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('zxk6BfHgQnmwwKfbwjtGjQK9Lel3aIpqfOs1pVgv',1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUjBQdkxqd2U5b2JtRWh0aTFrV1ZFVlBLMUFSbDdNR0dqZFlCMEl0ZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9wb2ludG1hc3Rlci5jb20vdmVudGFzd2ViIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9',1688923461);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipovehiculo`
--

DROP TABLE IF EXISTS `tipovehiculo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipovehiculo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `vehiculo` varchar(500) DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipovehiculo`
--

LOCK TABLES `tipovehiculo` WRITE;
/*!40000 ALTER TABLE `tipovehiculo` DISABLE KEYS */;
INSERT INTO `tipovehiculo` VALUES (1,'Automovil',1,'2023-03-01 11:00:28','2023-03-01 11:05:50'),(2,'camioneta',1,'2023-03-25 19:52:29','2023-03-26 01:52:29');
/*!40000 ALTER TABLE `tipovehiculo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trabajadores`
--

DROP TABLE IF EXISTS `trabajadores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `trabajadores` (
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trabajadores`
--

LOCK TABLES `trabajadores` WRITE;
/*!40000 ALTER TABLE `trabajadores` DISABLE KEYS */;
/*!40000 ALTER TABLE `trabajadores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_types`
--

DROP TABLE IF EXISTS `user_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_types` (
  `role_id` int NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `patch` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_types`
--

LOCK TABLES `user_types` WRITE;
/*!40000 ALTER TABLE `user_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@mail.com',NULL,NULL,'$2y$10$yotuBu6hGw1H1EEJsodqh.mfkZu7tXqIfJZucA9j1MJIj87OFU8mK',NULL,NULL,NULL,'6Wyn4pNb9JQGmWKqubYcIidXPNI0xD6I3ZlRvaN0Ehvl5875Na3phzfTNnpm',NULL,NULL,'2023-03-17 23:09:34','2023-03-17 23:09:34'),(2,'Cliente','cliente@mail.com',NULL,NULL,'$2y$10$JJX2WEf/m7UUSf7PW1kuIur.sW0/I763hbthP48V3RTgS35qiylhi',NULL,NULL,NULL,'DqN8bHN9wm0FK4YvNzXUgy8c6p5zZ0Jmg7TEZXsoiwQDW1sGPDnNoFuSqCYF',NULL,NULL,'2023-03-17 23:09:34','2023-03-17 23:09:34'),(3,'Marc Green','abagail.windler@example.net',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'qtu1TitsaT',NULL,NULL,'2023-03-17 23:09:34','2023-03-17 23:09:34'),(4,'Vada Schuppe','meda54@example.org',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'5OE8eRGA8j',NULL,NULL,'2023-03-17 23:09:35','2023-03-17 23:09:35'),(5,'Mrs. Jeanie Smith','muhammad36@example.net',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'zZrjhlIRxA',NULL,NULL,'2023-03-17 23:09:35','2023-03-17 23:09:35'),(6,'Ms. Fiona Prosacco I','timmothy.fadel@example.com',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'fzTqQQhZZy',NULL,NULL,'2023-03-17 23:09:35','2023-03-17 23:09:35'),(7,'Claire Wyman','kpagac@example.org',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'VY5FaaXQ03',NULL,NULL,'2023-03-17 23:09:35','2023-03-17 23:09:35'),(8,'Ms. Gerda Metz','kira.dooley@example.net',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'aVi7u91zcJ',NULL,NULL,'2023-03-17 23:09:35','2023-03-17 23:09:35'),(9,'Zula Wintheiser','narciso35@example.net',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'H6dO81aIim',NULL,NULL,'2023-03-17 23:09:35','2023-03-17 23:09:35'),(10,'Prof. Jules Langosh','rowe.roberta@example.net',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'vpwuJgPrxV',NULL,NULL,'2023-03-17 23:09:35','2023-03-17 23:09:35'),(11,'Prof. Darlene Miller II','krunolfsson@example.net',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'e1TaA93n0S',NULL,NULL,'2023-03-17 23:09:35','2023-03-17 23:09:35'),(12,'Marge Stoltenberg','ronny.kemmer@example.org',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'kmEcCUR7sx',NULL,NULL,'2023-03-17 23:09:35','2023-03-17 23:09:35'),(13,'Otilia Prosacco','burnice93@example.com',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'3Ynl5pSwed',NULL,NULL,'2023-03-17 23:09:35','2023-03-17 23:09:35'),(14,'Mariano Reilly','amber88@example.org',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'bez1P3yusc',NULL,NULL,'2023-03-17 23:09:35','2023-03-17 23:09:35'),(15,'Prof. Simeon Robel V','adaline30@example.org',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'RX0Wgu0B5o',NULL,NULL,'2023-03-17 23:09:35','2023-03-17 23:09:35'),(16,'Friedrich Koepp','zita52@example.org',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'aY00lZnhqN',NULL,NULL,'2023-03-17 23:09:35','2023-03-17 23:09:35'),(17,'Sylvia Kovacek','xcremin@example.org',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'FddXPKp8XD',NULL,NULL,'2023-03-17 23:09:35','2023-03-17 23:09:35'),(18,'Juvenal Gislason','swaniawski.hershel@example.org',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'N6flgsqmDr',NULL,NULL,'2023-03-17 23:09:35','2023-03-17 23:09:35'),(19,'Prof. Rosendo Green V','vebert@example.net',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'0FOfm88Fzr',NULL,NULL,'2023-03-17 23:09:35','2023-03-17 23:09:35'),(20,'Vaughn Rath','reilly18@example.com',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'bNuv1tTkIV',NULL,NULL,'2023-03-17 23:09:35','2023-03-17 23:09:35'),(21,'Lilian Mueller','everardo.kemmer@example.com',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'26bieqbFsn',NULL,NULL,'2023-03-17 23:09:35','2023-03-17 23:09:35'),(22,'Howard Lesch','swaniawski.jazmyn@example.com',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'txkKz1ndTx',NULL,NULL,'2023-03-17 23:09:35','2023-03-17 23:09:35'),(23,'Alfred Raynor Sr.','anderson77@example.net',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'gLsR0k7EjW',NULL,NULL,'2023-03-17 23:09:35','2023-03-17 23:09:35'),(24,'Aliyah Jakubowski','ohegmann@example.org',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'yIVaLkPR6W',NULL,NULL,'2023-03-17 23:09:36','2023-03-17 23:09:36'),(25,'Miss Cortney Treutel DVM','hgoldner@example.org',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'KxwNL4mUgl',NULL,NULL,'2023-03-17 23:09:36','2023-03-17 23:09:36'),(26,'Mr. Garrick Cummings I','adriana52@example.org',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'afFTkjgOYm',NULL,NULL,'2023-03-17 23:09:36','2023-03-17 23:09:36'),(27,'Judson Hoeger','fletcher.herzog@example.net',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'0TIu6PCDD5',NULL,NULL,'2023-03-17 23:09:36','2023-03-17 23:09:36'),(28,'Anahi Rowe','hazel.koch@example.com',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'UrxdYP38WW',NULL,NULL,'2023-03-17 23:09:36','2023-03-17 23:09:36'),(29,'Mr. Lambert Leffler','dannie.herman@example.net',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'zs73FvXAGg',NULL,NULL,'2023-03-17 23:09:36','2023-03-17 23:09:36'),(30,'Mr. Hadley D\'Amore','glenda08@example.net',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'8gQAmy0Kh2',NULL,NULL,'2023-03-17 23:09:36','2023-03-17 23:09:36'),(31,'Robert Hermann','ondricka.magnus@example.com',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'vUDOU7PHPQ',NULL,NULL,'2023-03-17 23:09:36','2023-03-17 23:09:36'),(32,'Miss Marion Schaefer','sydnee.turner@example.org',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'Q4CUPKTuRx',NULL,NULL,'2023-03-17 23:09:36','2023-03-17 23:09:36'),(33,'Helmer Huel','aherzog@example.net',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'TR5aqHqQtN',NULL,NULL,'2023-03-17 23:09:36','2023-03-17 23:09:36'),(34,'Prof. Josiane Kozey','bschaefer@example.net',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'9nLth2eZvx',NULL,NULL,'2023-03-17 23:09:36','2023-03-17 23:09:36'),(35,'Barry Beer','eichmann.freeda@example.org',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'Cn1Z6d5dkG',NULL,NULL,'2023-03-17 23:09:36','2023-03-17 23:09:36'),(36,'Prof. Elisha Wiegand IV','keira11@example.net',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'T4vM8HkTQq',NULL,NULL,'2023-03-17 23:09:36','2023-03-17 23:09:36'),(37,'Darwin Ledner MD','jbahringer@example.org',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'xYwVhQOMk6',NULL,NULL,'2023-03-17 23:09:36','2023-03-17 23:09:36'),(38,'Jazmyne Reynolds','fstrosin@example.net',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'0X1Flj3FWW',NULL,NULL,'2023-03-17 23:09:36','2023-03-17 23:09:36'),(39,'Louisa Hodkiewicz','andre26@example.com',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'AXOD9F1ODm',NULL,NULL,'2023-03-17 23:09:36','2023-03-17 23:09:36'),(40,'Prof. Roscoe Mayert','claire.wisoky@example.org',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'YyJ5lRgt1i',NULL,NULL,'2023-03-17 23:09:36','2023-03-17 23:09:36'),(41,'Dr. Braden Lebsack','narciso53@example.com',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'ducT137MLZ',NULL,NULL,'2023-03-17 23:09:36','2023-03-17 23:09:36'),(42,'Pearl Feeney','lina71@example.com',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'AyXHevykXI',NULL,NULL,'2023-03-17 23:09:37','2023-03-17 23:09:37'),(43,'Raegan Bartoletti','tschinner@example.com',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'wfr5NEokQ4',NULL,NULL,'2023-03-17 23:09:37','2023-03-17 23:09:37'),(44,'Arlene Gislason','mazie.berge@example.org',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'MfRF14NcWR',NULL,NULL,'2023-03-17 23:09:37','2023-03-17 23:09:37'),(45,'Wayne Kihn V','kuvalis.ubaldo@example.org',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'0wJDvZA6MC',NULL,NULL,'2023-03-17 23:09:37','2023-03-17 23:09:37'),(46,'Paul Waters Sr.','holly.kuvalis@example.com',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'VUTLsTRoZx',NULL,NULL,'2023-03-17 23:09:37','2023-03-17 23:09:37'),(47,'Katarina Lind','frida.kunde@example.net',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'LT3Y8Z1qhi',NULL,NULL,'2023-03-17 23:09:37','2023-03-17 23:09:37'),(48,'Dayne Lehner DDS','thompson.hermina@example.net',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'KnYywp3ttI',NULL,NULL,'2023-03-17 23:09:37','2023-03-17 23:09:37'),(49,'Mr. Nathaniel Bailey DDS','qmiller@example.org',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'Mv1MfSL93Z',NULL,NULL,'2023-03-17 23:09:37','2023-03-17 23:09:37'),(50,'Juston Morissette','frankie95@example.com',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'gaBxj4ghqc',NULL,NULL,'2023-03-17 23:09:37','2023-03-17 23:09:37'),(51,'Scarlett Kuphal','iva.walter@example.net',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'mDZ909Svie',NULL,NULL,'2023-03-17 23:09:37','2023-03-17 23:09:37'),(52,'Millie Senger I','pcartwright@example.net',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'XzXVVqNF0c',NULL,NULL,'2023-03-17 23:09:37','2023-03-17 23:09:37'),(53,'Shanelle Gusikowski','luther91@example.org',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'c2UMeZiC7V',NULL,NULL,'2023-03-17 23:09:37','2023-03-17 23:09:37'),(54,'Mr. Lafayette Rolfson PhD','blaze88@example.com',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'HAOoWCW3U1',NULL,NULL,'2023-03-17 23:09:37','2023-03-17 23:09:37'),(55,'Fabian Crooks','stacy.monahan@example.net',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'snQNXUyx9L',NULL,NULL,'2023-03-17 23:09:37','2023-03-17 23:09:37'),(56,'Dr. Sylvan Pouros DDS','uterry@example.org',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'F09zrigNOk',NULL,NULL,'2023-03-17 23:09:37','2023-03-17 23:09:37'),(57,'Mr. Rick Mohr MD','smith.valentine@example.net',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'sftjeIH3qx',NULL,NULL,'2023-03-17 23:09:37','2023-03-17 23:09:37'),(58,'Karolann Wehner','octavia.kovacek@example.org',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'m8ZVHRrcb5',NULL,NULL,'2023-03-17 23:09:37','2023-03-17 23:09:37'),(59,'Hilton Wolf Jr.','lkoelpin@example.org',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'ykAboyC5I6',NULL,NULL,'2023-03-17 23:09:37','2023-03-17 23:09:37'),(60,'Mr. Stone Okuneva','marjolaine53@example.net',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'N8u9tbgK8p',NULL,NULL,'2023-03-17 23:09:37','2023-03-17 23:09:37'),(61,'Dr. Amari Funk Sr.','ikuphal@example.org',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'KcYh1w7qFI',NULL,NULL,'2023-03-17 23:09:37','2023-03-17 23:09:37'),(62,'Dr. Jamaal Gorczany','toy.fritz@example.net',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'wyBNOJmFBw',NULL,NULL,'2023-03-17 23:09:37','2023-03-17 23:09:37'),(63,'Prof. Marcelo Kohler','aniya.mcglynn@example.com',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'t7rSRrMGNS',NULL,NULL,'2023-03-17 23:09:38','2023-03-17 23:09:38'),(64,'Mrs. Daphnee Miller II','sylvester.hammes@example.org',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'1Wj9wg2ry6',NULL,NULL,'2023-03-17 23:09:38','2023-03-17 23:09:38'),(65,'Garfield Marquardt','reba82@example.com',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'GGRZ0LJ6TS',NULL,NULL,'2023-03-17 23:09:38','2023-03-17 23:09:38'),(66,'Junior Sauer','schultz.malcolm@example.com',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'jJBXHING1U',NULL,NULL,'2023-03-17 23:09:38','2023-03-17 23:09:38'),(67,'Verlie Crist','helmer.bode@example.net',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'sZX1uZnnaM',NULL,NULL,'2023-03-17 23:09:38','2023-03-17 23:09:38'),(68,'Dr. Newton Eichmann V','kbalistreri@example.com',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'jpfLngIuo1',NULL,NULL,'2023-03-17 23:09:38','2023-03-17 23:09:38'),(69,'Raphael Lang','toby.schinner@example.org',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'05JIR24Iug',NULL,NULL,'2023-03-17 23:09:38','2023-03-17 23:09:38'),(70,'Dorothy Rosenbaum DDS','pfunk@example.org',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'hLo3X9Ad1s',NULL,NULL,'2023-03-17 23:09:38','2023-03-17 23:09:38'),(71,'Ms. Bethany Bartoletti','filomena.haag@example.org',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'xXjmu1eGIg',NULL,NULL,'2023-03-17 23:09:38','2023-03-17 23:09:38'),(72,'Isaias Denesik','elaina.okon@example.org',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'OM0zkxSDEl',NULL,NULL,'2023-03-17 23:09:38','2023-03-17 23:09:38'),(73,'Gayle Dickinson','dietrich.chad@example.org',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'IoEHhiVXPZ',NULL,NULL,'2023-03-17 23:09:38','2023-03-17 23:09:38'),(74,'Alfonzo Gorczany','nolan.camilla@example.com',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'p3t5yT6Xln',NULL,NULL,'2023-03-17 23:09:38','2023-03-17 23:09:38'),(75,'Cordia Schuppe','mueller.rigoberto@example.org',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'UtPJJQrMQD',NULL,NULL,'2023-03-17 23:09:38','2023-03-17 23:09:38'),(76,'Amelie Hilpert','erdman.sienna@example.net',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'uDbXDGLYr2',NULL,NULL,'2023-03-17 23:09:38','2023-03-17 23:09:38'),(77,'Sasha Jenkins','dominique.damore@example.org',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'8MnOBJfIUL',NULL,NULL,'2023-03-17 23:09:38','2023-03-17 23:09:38'),(78,'Ms. Emelie Feil','sipes.adam@example.net',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'N1NcmFbzk5',NULL,NULL,'2023-03-17 23:09:38','2023-03-17 23:09:38'),(79,'Mohamed Barton','hailie.carter@example.net',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'3THKaahbqX',NULL,NULL,'2023-03-17 23:09:38','2023-03-17 23:09:38'),(80,'Ophelia Jerde','jacobs.cayla@example.com',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'UvHJbaaLps',NULL,NULL,'2023-03-17 23:09:38','2023-03-17 23:09:38'),(81,'Prof. Natalia Streich','alicia.rice@example.org',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'SJeCOISe6P',NULL,NULL,'2023-03-17 23:09:38','2023-03-17 23:09:38'),(82,'Prof. Dee Hermiston Jr.','botsford.autumn@example.com',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'EuHEiARq5A',NULL,NULL,'2023-03-17 23:09:38','2023-03-17 23:09:38'),(83,'Wilfredo Rolfson','carli94@example.org',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'NPz2j6ZGpG',NULL,NULL,'2023-03-17 23:09:38','2023-03-17 23:09:38'),(84,'Prof. Gaylord Stokes','aurelio15@example.org',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'CK6buW5a0K',NULL,NULL,'2023-03-17 23:09:38','2023-03-17 23:09:38'),(85,'Jamey Dach','qquigley@example.net',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'X2GrlrONWa',NULL,NULL,'2023-03-17 23:09:39','2023-03-17 23:09:39'),(86,'Sibyl Bernhard','scarlett.schamberger@example.net',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'TIRiYLGzQ3',NULL,NULL,'2023-03-17 23:09:39','2023-03-17 23:09:39'),(87,'Naomie VonRueden','pwitting@example.com',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'vsxw4tIBAd',NULL,NULL,'2023-03-17 23:09:39','2023-03-17 23:09:39'),(88,'Nadia Rice','charley03@example.net',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'1i9q0juweV',NULL,NULL,'2023-03-17 23:09:39','2023-03-17 23:09:39'),(89,'Tess Jakubowski','margot81@example.net',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'fUkQkCggA5',NULL,NULL,'2023-03-17 23:09:39','2023-03-17 23:09:39'),(90,'Zion Emard DVM','dfunk@example.org',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'Tw70U5hA7w',NULL,NULL,'2023-03-17 23:09:39','2023-03-17 23:09:39'),(91,'Niko Bernier','ogislason@example.org',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'fWxxsCzwwU',NULL,NULL,'2023-03-17 23:09:39','2023-03-17 23:09:39'),(92,'Alexandrine Fisher II','rbeahan@example.net',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'1A9at1hkXz',NULL,NULL,'2023-03-17 23:09:39','2023-03-17 23:09:39'),(93,'Arjun Bergstrom','mherzog@example.org',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'NtVGXLpXhK',NULL,NULL,'2023-03-17 23:09:39','2023-03-17 23:09:39'),(94,'Kallie Beahan','ida08@example.net',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'s6dWWDRRCq',NULL,NULL,'2023-03-17 23:09:39','2023-03-17 23:09:39'),(95,'Mireille Russel III','daphney.oconnell@example.com',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'lDsUbrXiYp',NULL,NULL,'2023-03-17 23:09:39','2023-03-17 23:09:39'),(96,'Prof. Karson Howell DVM','kohler.yvonne@example.com',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'QM38gyAA41',NULL,NULL,'2023-03-17 23:09:39','2023-03-17 23:09:39'),(97,'Cruz Monahan III','blair59@example.org',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'BJtqPD1feL',NULL,NULL,'2023-03-17 23:09:39','2023-03-17 23:09:39'),(98,'Graham Denesik DDS','kklein@example.net',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'C6uQ7Z3M29',NULL,NULL,'2023-03-17 23:09:39','2023-03-17 23:09:39'),(99,'Kale Tillman','elegros@example.com',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'MtXvyCpKzF',NULL,NULL,'2023-03-17 23:09:39','2023-03-17 23:09:39'),(100,'Ismael Stracke I','nswaniawski@example.com',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'Cf3hoAm7hl',NULL,NULL,'2023-03-17 23:09:39','2023-03-17 23:09:39'),(101,'Mrs. Mara Schamberger DDS','angel.sanford@example.com',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'03Pah9SAXu',NULL,NULL,'2023-03-17 23:09:39','2023-03-17 23:09:39'),(102,'Cindy Walter','reece02@example.net',NULL,'2023-03-17 23:09:34','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'k14PWFuZUw',NULL,NULL,'2023-03-17 23:09:39','2023-03-17 23:09:39'),(103,'Empleado2','Empleado2@12mail.com','9999923339',NULL,'$2y$10$dVnTAzNgneMS2WdbOHh0yeNT5GY3VM0RMqHWn4ajjFHmQSApUK2ty',NULL,NULL,NULL,NULL,NULL,NULL,'2023-03-17 23:11:25','2023-03-17 23:11:25'),(104,'admin204','admin204@gmail.com','9999999999',NULL,'$2y$10$ML8oiqrPGs2Zh85mHYkzWeEi5BFb.gDjkrL/na6gTrlks1b5a.ic2',NULL,NULL,NULL,NULL,NULL,NULL,'2023-03-17 23:11:50','2023-03-17 23:11:50'),(105,'pedro','pedro@gmail.com','9999999997',NULL,'$2y$10$MTCH/fgh2SenJ2Da88cPq.yq73.IztLKXKydHL2VONQ6xjiKuU3c.',NULL,NULL,NULL,NULL,NULL,NULL,'2023-03-19 23:32:08','2023-03-19 23:32:08'),(106,'Escobedo','escobedo@gmail.com','9778455548',NULL,'$2y$10$P8kz/dNkUD3z964DZ5m0V.dbLl0RYiKY.BQ7KWOIClImu4er1LLOO',NULL,NULL,NULL,NULL,NULL,NULL,'2023-03-23 04:08:10','2023-03-23 04:08:10'),(107,'LLEscobedo','fdtmota@gmail.coom','9999964429',NULL,'$2y$10$Wy9oVboUyWeQio.uevUlJuUxiuLU9HPlSbrJewWDL1U17A9ajjD52',NULL,NULL,NULL,NULL,NULL,NULL,'2023-03-27 00:01:05','2023-03-27 00:01:05'),(108,'Karina','karina.moo@cliente.mex','99999999',NULL,'$2y$10$wy7FEsDQODopsV8zQzbphOWpQYzzbDaKkNliD5drT8q5EyfM95csC',NULL,NULL,NULL,NULL,NULL,NULL,'2023-03-27 05:22:35','2023-03-27 05:22:35'),(109,'javier@cliente.com','javier@cliente.com','999999999',NULL,'$2y$10$EnbDx1jI3E4DMd.jH5hwcun.PeYMidvxPvNZ1UPbszP8J0AIGQn9W',NULL,NULL,NULL,NULL,NULL,NULL,'2023-03-30 05:21:08','2023-03-30 05:21:08'),(110,'Fernando','fdtmota@gmail.com','9999964429',NULL,'$2y$10$EUGX33cDo4KKbiMOa.eJcOUw5crQPYdVQSOuo1rZVpDUVjaB1t.x.',NULL,NULL,NULL,NULL,NULL,NULL,'2023-06-29 13:14:21','2023-06-29 13:14:21');
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

-- Dump completed on 2023-07-09 11:43:19
