-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: projectefinal_ceroresiduo
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

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
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Precio` varchar(45) NOT NULL,
  `Foto` varchar(45) DEFAULT NULL,
  `Descripcion` longtext DEFAULT NULL,
  `IDCategoria` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `IDCategoria_idx` (`IDCategoria`),
  CONSTRAINT `IDCategoria` FOREIGN KEY (`IDCategoria`) REFERENCES `categorias` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'Acondicionador Sólido Artesano','12,50€ ','HigPerso_AcondicionadorSolidoArtesano.webp','para Cabello Seco',1),(3,'Manteca Solar Corporal ','22,25€','HigPerso_MantecaSolarCorporal.webp','SPF 50 Amazinc!',1),(4,'Estropajo de Esparto Esterilizado','0,45€ ','Hogar_EstropajoEspartoEsterilizado.jpg','para fregar',2),(5,'Jabón Sólido Lavavajillas','6,10€ ','Hogar_JabonSolidoLavavajillas.webp','con Bicarbonato - 225 g',2),(21,'Barra de Jabón de Marsella y Aceites Vegetale','26,50€ ','HigPerso_BarraJabonMarsella.webp','2 Kg',1),(22,'Canvas Cream Hidratante','12,50€','HigPerso_CanvasCreamHidrat.webp','50 ml',1),(23,'Sérum Rejuvenecedor Intensivo','42,00€','HigPerso_SerumRejIntens.webp','15ml',1),(24,'Cepillo natural ','4,95€ ','Hogar_CepilloNatuFregaOllasCace.webp','para fregar Ollas y Cacerolas',2),(25,'Estropajo de Cobre «Nana»','6,75€','Hogar_EstropajoCobreNana.webp','Pack de 2',2);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-09-03 13:03:21
