-- MySQL dump 10.13  Distrib 8.0.39, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: pagina_web
-- ------------------------------------------------------
-- Server version	8.0.39-0ubuntu0.22.04.1

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
-- Table structure for table `bolso`
--

DROP TABLE IF EXISTS `bolso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bolso` (
  `idbolso` int DEFAULT NULL,
  `img2` varchar(45) DEFAULT NULL,
  `img3` varchar(45) DEFAULT NULL,
  KEY `idbolso` (`idbolso`),
  CONSTRAINT `bolso_ibfk_1` FOREIGN KEY (`idbolso`) REFERENCES `producto` (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bolso`
--

LOCK TABLES `bolso` WRITE;
/*!40000 ALTER TABLE `bolso` DISABLE KEYS */;
INSERT INTO `bolso` VALUES (9,'/imagenes/bolsos/bolsonike2.jfif','/imagenes/bolsos/bolsonike.webp'),(10,'/imagenes/bolsos/bolsorosa2.webp','/imagenes/bolsos/bolsorosa3.webp'),(11,'/imagenes/bolsos/bolso_calcio2.webp','/imagenes/bolsos/bolso_calcio3.webp'),(12,'/imagenes/bolsos/bolso_futbol2.webp','/imagenes/bolsos/bolso_futbol3.webp');
/*!40000 ALTER TABLE `bolso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `botines`
--

DROP TABLE IF EXISTS `botines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `botines` (
  `idbotin` int DEFAULT NULL,
  `talle` int DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `img2` varchar(45) DEFAULT NULL,
  `img3` varchar(45) DEFAULT NULL,
  `img4` varchar(45) DEFAULT NULL,
  `img5` varchar(45) DEFAULT NULL,
  KEY `idbotin` (`idbotin`),
  CONSTRAINT `botines_ibfk_1` FOREIGN KEY (`idbotin`) REFERENCES `producto` (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `botines`
--

LOCK TABLES `botines` WRITE;
/*!40000 ALTER TABLE `botines` DISABLE KEYS */;
INSERT INTO `botines` VALUES (1,41,'Lo Nuevo','/imagenes/botines/botinesturquesa.2.webp','/imagenes/botines/botinesturquesa.3.webp','/imagenes/botines/botinesturquesa.4.webp','/imagenes/botines/botinesturquesa.5.webp'),(2,43,'EXCLUSIVO','/imagenes/botines/botinesdinho.2.jpg','/imagenes/botines/botinesdinho.3.jfif','/imagenes/botines/botinesdinho4.jpg','/imagenes/botines/botinesdinho5.jpg'),(3,40,'Envio Gratis para miembros','/imagenes/botines/adidasnegros.1.jpg','/imagenes/botines/adidasnegros.2.jpg','/imagenes/botines/adidasnegros.3.jpg','/imagenes/botines/adidasnegros5.avif'),(4,40,'Envio Gratis para miembros','/imagenes/botines/nikeblancos.2.webp','/imagenes/botines/nikeblancos.3.webp','/imagenes/botines/nikeblancos.4.webp','/imagenes/botines/nikeblancos.5.webp'),(5,40,'Envio Gratis para miembros','/imagenes/botines/nikerosa.2.png','/imagenes/botines/nikerosa.3.png','/imagenes/botines/nikerosa.4.png','/imagenes/botines/nikerosa.5.png');
/*!40000 ALTER TABLE `botines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `producto` (
  `id_producto` int NOT NULL,
  `precio` varchar(45) DEFAULT NULL,
  `marca` varchar(45) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(1000) DEFAULT NULL,
  `img1` varchar(100) DEFAULT NULL,
  `categoria` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` VALUES (1,'500.000','nike','Nike Mercurial Vapor 16 Academy TF','¿Queres llevar tu velocidad al siguiente nivel?\nConfeccionamos estos botines Academy con una unidad Air Zoom mejorada en el talón.\nTe dan la propulsión necesaria para abrirte paso a través de la línea de fondo.\nEl resultado son los Mercurial más reactivos que hemos creado hasta la fecha, para que puedas dictar el ritmo y el tiempo durante todo el partido.','/imagenes/botines/botinesturquesa.png','Botines'),(2,'300.000','nike','botines dinho','Ponte estos botines para desplegar toda tu magia.','/imagenes/botines/botinesdinho.png','Botines'),(3,'800.000','adidas','BOTINES PREDATOR ACCURACY.3 TERRENO FIRME','Control + precisión = confianza. Cuando el arco está en tus ojos, apuntá a la perfección con adidas Predator Accuracy. El suave exterior textil revestido de estos botines incorpora textura de alta definición en la zona de impacto. Una mezcla de elementos y el estampado en relieve te ayudan a lograr cada pase y cada tiro. ','/imagenes/botines/adidasnegros.png','Botines'),(4,'300.000','nike','Botines Fútbol Nike Zoom Mercurial Superfly 9 Academy Fg Hombre','Llega armado al partido con los Botines Fútbol Nike Zoom Mercurial Superfly 9 Academy Fg Hombre. Un calzado listo para que demuestres tus mejores jugadas, aportandote tecnología y calidad. Cuenta con una unidad Zoom Air y una NikeSkin flexible en la parte superior de sintético. ','/imagenes/botines/nikeblancos.png','Botines'),(5,'500.000','nike','Botines Nike Zoom Mercurial Vapor 15','Los deportes de campo serán tuyos cuando te amarres las agujetas del Vapor 15 Academy TF. Cuenta con una unidad Zoom Air y con una NikeSkin flexible en la parte superior para brindar un toque excepcional, de modo que puedas dominar en los últimos y más importantes minutos de un partido. La velocidad está en la Air.','/imagenes/botines/nikerosa.png','Botines'),(6,'17.000','Bayern','Atomo Desinflamante Forte X 100 Gramos','Es una crema rubefaciente, analgésica y antiinflamatoria recomendada para el alivio local del dolor e inflamación leves causados por afecciones reumáticas articulares (lumbalgias, torticolis) golpes, distensiones musculares y tendinosas, torceduras.','/imagenes/medicinal/atomo.png','medicinal'),(7,'14.000','ratisalil','Rati Salil Crema Cannabidiol CBD 150 g','Una crema humectante, de uso diario, con una exclusiva fórmula de ingredientes cosméticos de origen natural como ÁRNICA y MENTOL que se unen a nuestro CBD de alta pureza.\nSu CBD de alta pureza posee altos estándares de calidad, consistencia y homogeneidad. Nuestra formulación de origen natural es óptima, se absorbe rápidamente y deja la piel con una sensación de frescura.','/imagenes/medicinal/canabideol.png','medicinal'),(8,'30.000','Hong tai','Herbal Aroma Nasal inhalador Natural tailandés hierba','-Una mezcla de varias hierbas secas da un aroma fresco.\n-Ayuda con mareos, aturdimiento y congestión nasal.\n-Refrescante y da relajación','/imagenes/medicinal/relajantenasal.png','medicinal'),(9,'90.000','nike','Nike Academy Team','El bolso de entrenamiento Nike Academy Team ofrece un diseño duradero para organizar tus cosas. Los compartimientos designados brindan espacio para tu balón, calzado de fútbol y ropa, mientras que las múltiples correas te permiten llevar cómodamente tu equipo cuando estás en movimiento.\nBeneficios','/imagenes/bolsos/nike1.png','bolso'),(10,'80.000','adidas','Bolso Deportivo Para Entrenamiento Adidas Rosa','- Ideal para llevar a tu entrenamiento deportivo\n\n- Capacidad en vólumen: 50 lts.\n\n- Medidas: 62 x 31 x 31 cm.\n\n- Cierre SBS\n\n- 2 bolsillos impermeables\n\n- Bolsillo porta tira','/imagenes/bolsos/bolsorosa.png','bolso'),(11,'30.000','calcio','bolso calcio','Bolso con diseño de gajos, hecho en cuerina con cierre de metal y cintas de algodón.\n\nInterior forrado con motivo de gajos, bolsillo frontal.','/imagenes/bolsos/bolso_calcio.png','bolso'),(12,'20.000','marton','bolso de futbol','Bolso con diseño de gajos, hecho en cuerina con cierre de metal y cintas de algodón.\n\nInterior forrado con motivo de gajos, bolsillo frontal.','/imagenes/bolsos/bolso_futbol.png','bolso');
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-10-29 10:28:56
