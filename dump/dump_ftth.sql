-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: ftth
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.30-MariaDB

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
-- Table structure for table `codigos`
--

DROP TABLE IF EXISTS `codigos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `codigos` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `causa` varchar(200) DEFAULT NULL,
  `sub` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `equipe`
--

DROP TABLE IF EXISTS `equipe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipe` (
  `id` int(10) unsigned NOT NULL,
  `nome` varchar(85) DEFAULT NULL,
  `equipe` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `principal`
--

DROP TABLE IF EXISTS `principal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `principal` (
  `protocolo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `celula` varchar(100) DEFAULT NULL,
  `cdoe_i` varchar(45) DEFAULT NULL,
  `endereco` varchar(200) DEFAULT NULL,
  `data_cad` datetime DEFAULT NULL,
  `causa` varchar(100) DEFAULT NULL,
  `sub_causa` varchar(100) DEFAULT NULL,
  `servico` varchar(100) DEFAULT NULL,
  `data_atv` date DEFAULT NULL,
  `tecnico` varchar(45) DEFAULT NULL,
  `obs` varchar(1000) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `cad_por` varchar(150) DEFAULT NULL,
  `tipo2` varchar(45) DEFAULT NULL,
  `atividade` varchar(45) DEFAULT NULL,
  `localidade` varchar(45) DEFAULT NULL,
  `cabo` varchar(45) DEFAULT NULL,
  `cabo_metro` varchar(45) DEFAULT NULL,
  `caixa` varchar(45) DEFAULT NULL,
  `equipe` varchar(45) DEFAULT NULL,
  `ba` int(11) DEFAULT NULL,
  `tipo_ba` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`protocolo`)
) ENGINE=InnoDB AUTO_INCREMENT=676 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(10) unsigned NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `acesso` varchar(45) DEFAULT NULL,
  `login` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-03-02 20:43:30
