-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: unisale
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
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `idusuarios` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cpf` varchar(11) DEFAULT NULL,
  `nome` varchar(40) DEFAULT NULL,
  `celular` varchar(32) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL,
  `login` varchar(60) NOT NULL,
  `senha` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`idusuarios`),
  UNIQUE KEY `login` (`login`),
  KEY `documento` (`cpf`),
  KEY `endemail` (`email`),
  KEY `login_2` (`login`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'12345678901','Manoel da Silveira','(18)989897766','manoel@usuarios.com.br','manoel@usuarios.com.br','c4ca4238a0b923820dcc509a6f75849b'),(2,'12345678902','Maria da Silva','(18)989897755','maria@usuarios.com.br','maria@usuarios.com.br','c4ca4238a0b923820dcc509a6f75849b'),(3,'12345678903','Andreia da Silva','(18)989897744','andreia@usuarios.com.br','andreia@usuarios.com.br','c4ca4238a0b923820dcc509a6f75849b'),(4,'12345678904','Carlos da Silva','(18)989897733','carlos@usuarios.com.br','carlos@usuarios.com.br','c4ca4238a0b923820dcc509a6f75849b'),(5,'12345678905','Caio da Silva','(18)989897722','caio@usuarios.com.br','caio','c4ca4238a0b923820dcc509a6f75849b'),(6,'12345678906','Moura da Silva','(18)989897711','moura@usuarios.com.br','moura','c4ca4238a0b923820dcc509a6f75849b'),(8,'12345678908','Regina da Silva','(18)989897710','regina@usuarios.com.br','regina','c4ca4238a0b923820dcc509a6f75849b'),(9,'1','Armando da Silva','19882568456','armando.silva@gmail.com','armandinz','c4ca4238a0b923820dcc509a6f75849b'),(44,'37729345870','Diego da Mata Pontes ','(18)996045519','diegodamatapontes@hotmail.com','diegodamatapontes@hotmail.com','c4ca4238a0b923820dcc509a6f75849b'),(45,'','','','','','d41d8cd98f00b204e9800998ecf8427e'),(53,'87345923443','Maria da Silva Junior','(18)996045519','maria@gmail.com','Maria','2d3c7cd7e9224d7100570660d4530455');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-17  0:25:58
