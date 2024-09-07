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
  `DescripcionLarga` longtext DEFAULT NULL,
  `IDCategoria` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `IDCategoria_idx` (`IDCategoria`),
  CONSTRAINT `IDCategoria` FOREIGN KEY (`IDCategoria`) REFERENCES `categorias` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'Acondicionador Sólido Artesano','12,50€ ','HigPerso_AcondicionadorSolidoArtesano.webp','para Cabello Seco','Este acondicionador sólido vegano desenreda, suaviza y aporta brillo al cabello. Está hecho de manera artesanal a base de extractos de plantas y aceites esenciales de origen ecológico. Contiene manteca de cacao, ingrediente que agrega suavidad al pelo y sella la cutícula. También incorpora aceite de nuez de macadamia, de almendras y provitamina B5. Está libre de sulfatos y es 100 % biodegradable.',1),(2,'Barra de Jabón de Marsella y Aceites Vegetale','26,50€ ','HigPerso_BarraJabonMarsella.webp','2 Kg','El Jabón de Marsella en barra de 2 Kg se trata de un formato familiar y una opción muy económica. La barra de 2 Kg se presenta sin cortar, de modo que puede tallarse según las necesidades de cada familia. Este jabón hecho a base de aceite de oliva y aceites vegetales es una opción natural, vegana, libre de químicos y tóxicos, perfecta para la limpieza del hogar, de la ropa o incluso para la higiene personal.',1),(3,'Manteca Solar Corporal ','22,25€','HigPerso_MantecaSolarCorporal.webp','SPF 50 Amazinc!','Este protector solar en formato manteca utiliza filtro físico o mineral y su formato en lata es ideal para viajar y transportar en avión. Su factor de protección es SPF 50, así que se trata de una protección alta. Contiene aceite de almendras y extracto de vainilla, una combinación de ingredientes que cuidarán de tu piel y de los océanos. También disponible con SPF 30.',1),(4,'Estropajo de Esparto Esterilizado','0,45€ ','Hogar_EstropajoEspartoEsterilizado.jpg','para fregar','He aquí una alternativa 100% natural a los estropajos de plástico. Está elaborado en esparto esterilizado como el que utilizaban nuestras abuelas. Es perfecto para lavar cubiertos, platos, ollas y demás utensilios de la cocina. Lo mejor de todo es que es sostenible y es un artículo totalmente residuo cero, ya que no contamina el agua con microplásticos.',2),(5,'Jabón Sólido Lavavajillas','6,10€ ','Hogar_JabonSolidoLavavajillas.webp','con Bicarbonato - 225 g','Este jabón de Marsella sólido ha sido enriquecido con bicarbonato de sodio para potenciar sus propiedades desengrasantes y conseguir limpiar en profundidad platos, ollas y cacerolas, así como dar brillo a tu cubertería. Se trata de un jabón lavavajillas sin envases plásticos ideal para conseguir una cocina Residuo Cero.',2),(6,'Canvas Cream Hidratante','12,50€','HigPerso_CanvasCreamHidrat.webp','50 ml','Crema hidratante altamente antioxidante y apta para todo tipo de pieles. Se adapta a la piel cubriendo todas sus necesidades. Es vegana 100% y no testada en animales. Además, cuenta con ingredientes 100% de origen natural y ha sido dermatológicamente testada en pieles sensibles.',1),(7,'Sérum Rejuvenecedor Intensivo','42,00€','HigPerso_SerumRejIntens.webp','15ml','El sérum rejuvenecedor es ideal para pieles secas, y aquellas que quieren difuminar arrugas y mantener la firmeza y la apariencia radiante de la piel. Combina 15 óleo-activos botánicos que aumentan el colágeno y devuelven la firmeza y elasticidad a la piel. Su textura oleo-gel nutre profundamente, dejando la piel suave y radiante. 100% vegano y natural. Ha sido testado en piel sensible.',1),(8,'Cepillo natural ','4,95€ ','Hogar_CepilloNatuFregaOllasCace.webp','para fregar Ollas y Cacerolas','Elimina hasta la suciedad más incrustada de ollas y cacerolas con este cepillo duro para fregar. Está fabricado en madera de haya sin tratar, mientras que las cerdas son de fibra vegetal de dureza alta y hacen mucha espuma. Es 100 % biodegradable y de manejo cómodo, gracias al mango ergonómico.',2),(9,'Estropajo de Cobre «Nana»','6,75€','Hogar_EstropajoCobreNana.webp','Pack de 2','Pack de 2 estropajos de cobre o nanas para limpiar superficies duras con suciedad incrustada, como ollas, utensilios de cocina, fregaderos, hornos o sartenes que no lleven teflón. La nana de cobre no se oxida y funciona muy bien para eliminar la suciedad seca y resistente que se irá fácilmente con unas pocas pasadas. Utilízala con abundante agua para una mayor efectividad. También es muy útil para eliminar el óxido de los metales y puede usarse también para limpiar bicicletas o las piezas metálicas de los coches.',2),(10,'Jengibre Molido ','4,25€','Alimentacion_JengibreMolido.webp','60g ECO. Naturcid','Ramas de jengibre molidas. Sin alérgenos. No contiene organismos modificados genéticamente (No GMO) ni irradiados. Envase libre de BPA.',3),(11,'Concentrado de agave','7,26€','Alimentacion_ConcentradoAgave.webp','500 ml BIO, Cal Valls','Zumo concentrado de agave. ',3),(12,'Alubias rojas cocidas ','3,68€','Alimentacion_AlubiasRojas.webp','450 g BIO, Cal Valls','Alubia roja cocida. ',3),(13,'Mostaza Fina ','3,35€','Alimentacion_MostazaFina.webp','200 g BIO, Vegetalia','Mostaza de agricultura ecológica. ',3),(14,'Chocolate negro 86% ','3,30€','Alimentacion_ChocolateNegro86.webp','100 g BIO, Chocolates Sole','De comercio justo. 100% natural. Sin gluten, sin lecitina. Vegano.',3),(15,'Macarrones de Quinoa y Arroz ','2,48€','Alimentacion_MacarronesQuinoaArroz.webp','250 g BIO, Quinua Real','Pasta sin gluten elaborada 100% con ingredientes ecológicos. Producto apto para veganos. ',3),(16,'Harina de Trigo Blanca ','11,79€','Alimentacion_HarinaTrigoBlanca.webp','5kg ECO, La Grana','Harina de trigo de producción propia.',3),(17,'Quinoa Real Tres Colores','6,71€','Alimentacion_QuinoaReal3Colores.webp','500 g BIO, Quinua Real','Quinoa certificada sin gluten y libre de saponinas. Producto apto para veganos.',3),(18,'Chucrut ','2,35€','Alimentacion_Chucrut.webp','360 g BIO, Natursoy','Chucrut (col fermentada)',3);
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

-- Dump completed on 2024-09-07 20:07:42
