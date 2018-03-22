-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: hhs_main
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

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
-- Table structure for table `hhs_blog`
--

DROP TABLE IF EXISTS `hhs_blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hhs_blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` text,
  `category` text,
  `info` text,
  `title` text,
  `approved` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hhs_blog`
--

LOCK TABLES `hhs_blog` WRITE;
/*!40000 ALTER TABLE `hhs_blog` DISABLE KEYS */;
INSERT INTO `hhs_blog` VALUES (3,'zackt','Hermiston High School','Good Day Fellow Students!','Day 1',0),(4,'zackt','Football\r\n','Struggle Bus. No joke.','Jabril Peppers',0),(6,'dianag','Ocean\r\n','Hello world','My first blog.',0),(8,'zackt','Football\r\n','Adrian Peterson signs with NO Saints.','AP',0),(9,'angelv','skateboard\r\n','skateboards are cool','Skateboards',0),(10,'angelv','skateboard\r\n','Monday, October 12. After hugging his father and Boulala at the top, he attacked the 25 again. The set fought back, though, and Jaws slammed forward onto the bricks several times. On one occasion he completely lost the board from under his feet. On another attempt, the force of his landing sheared a wheel off its axle, leaving the bearings on either side somehow still in place—a peculiar display of the power of the drop.\r\n\r\n\"I\'ve never seen that,\" said fellow skater Clint Walker, holding up Jaws\'s board in the YouTube video of the trick, which Thrasher Magazine published last week.\r\n\r\nJaws changed out his wheel and replaced his eighth-inch spacers—plastic pads that prevent the wheels from biting into the board—with quarter-inch ones given to him by French Fred. To reduce friction, he rubbed deodorant into the grooves that the wheels had cut into the underside of the board. His next attempt, made to screams of encouragement, was closer. He landed the drop and rolled momentarily before crashing.\r\n\r\n\"Oh my god,\" he said after fall. \"I can do it though!\"\r\n\r\nAnd then he did.\r\n\r\nHe snapped off the top, grabbed the board, floated the roughly three seconds to the landing, and rolled away. His dad charged down the stairs behind him. Walker sprayed some champagne. According to Boulala, Jaws and his father were in tears.\r\n\r\nLater, Jaws received a text message from Tony Hawk, whose Birdhouse Skateboard company Jaws skates for.\r\n\r\n\"Congrats,\" it said. \"That is one of the greatest feats in skateboarding history.\"','Jaws jumps the Lyon 25',0),(11,'mirandaa','Sports\r\n','Hi','Hi',0),(12,'','skateboard\r\n','hi','skateboard',0),(13,'','skateboard\r\n','hi','skateboard',0),(14,'angelv','skateboard\r\n','hello','skateboard',0),(15,'zackt','Football\r\n','That concludes the 2017 NFL Draft!\r\nHow\'d your team do? See @\r\n<a href=\"http://www.nfl.com/draft/2017\" style=\"color:red;\"><h1>2017 NFL Draft</h1></a>','Draft',0),(16,'angelv','injuries\r\n','Aaron homoki tore his mcl trying to jump 25 stairs','injury',0),(17,'zackt','Football\n','Goes from Panthers to browns? Suspicious #wheretheyattho','Junior is a bandwagon',0),(18,'zackt','Hermiston High School','Hermiston School District:\r\n<a href=\"http://hermiston.k12.or.us/\"><strong>Hermiston</strong></a>\r\nEnjoy!','Link',0),(19,'zackt','Football\r\n','<h3 style=\'color:blue;\'>Deshaun Watson to wear #4 for the Texans!</h3>\r\n<h2 style=\'color:pink;\'Christian McCaffrey to wear #22 for the Panthers!</h2>','Numbers',0),(20,'zackt','Football\r\n','<h3 style=\'color:blue;\'>Deshaun Watson to wear #4 for the Texans!</h3>\r\n<h2 style=\'color:pink;\'Christian McCaffrey to wear #22 for the Panthers!</h2>','Numbers',0),(21,'zackt','Football\r\n','<h3 style=\'color:blue;\'>Deshaun Watson to wear #4 for the Texans!</h3>\r\n<h2 style=\'color:pink;\'Christian McCaffrey to wear #22 for the Panthers!</h2>','Numbers',0);
/*!40000 ALTER TABLE `hhs_blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hhs_user`
--

DROP TABLE IF EXISTS `hhs_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hhs_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` text,
  `pw` text,
  `level` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hhs_user`
--

LOCK TABLES `hhs_user` WRITE;
/*!40000 ALTER TABLE `hhs_user` DISABLE KEYS */;
INSERT INTO `hhs_user` VALUES (1,'zackt','HermistonSD1',NULL),(2,'angelv','HermistonSD1',NULL),(3,'dianag','HermistonSD1',NULL),(4,'mirandaa','HermistonSD1',NULL),(5,'WebDev','HermistonSD1',NULL);
/*!40000 ALTER TABLE `hhs_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'hhs_main'
--

--
-- Dumping routines for database 'hhs_main'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-21  0:00:01
