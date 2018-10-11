-- MySQL dump 10.15  Distrib 10.0.36-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: hms
-- ------------------------------------------------------
-- Server version	10.0.36-MariaDB-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Insurance`
--

DROP TABLE IF EXISTS `Insurance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Insurance` (
  `insuranceid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `start` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `end` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`insuranceid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Insurance`
--

LOCK TABLES `Insurance` WRITE;
/*!40000 ALTER TABLE `Insurance` DISABLE KEYS */;
/*!40000 ALTER TABLE `Insurance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Registration`
--

DROP TABLE IF EXISTS `Registration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Registration` (
  `regid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `insurance` smallint(6) DEFAULT NULL,
  `dob` date NOT NULL,
  `Insurance_insuranceid` int(11) NOT NULL,
  `user_userid` int(11) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  KEY `fk_Registration_Insurance` (`Insurance_insuranceid`),
  KEY `fk_Registration_user` (`user_userid`),
  CONSTRAINT `fk_Registration_Insurance` FOREIGN KEY (`Insurance_insuranceid`) REFERENCES `Insurance` (`insuranceid`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_Registration_user` FOREIGN KEY (`user_userid`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Registration`
--

LOCK TABLES `Registration` WRITE;
/*!40000 ALTER TABLE `Registration` DISABLE KEYS */;
/*!40000 ALTER TABLE `Registration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `appointment` (
  `appid` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `appdate` date NOT NULL,
  `apptime` time NOT NULL,
  `status` bit(1) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`appid`),
  KEY `fk_user_appointment` (`userId`),
  CONSTRAINT `fk_user_appointment` FOREIGN KEY (`userId`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `appointment`
--

LOCK TABLES `appointment` WRITE;
/*!40000 ALTER TABLE `appointment` DISABLE KEYS */;
/*!40000 ALTER TABLE `appointment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`,`ip_address`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ci_sessions`
--

LOCK TABLES `ci_sessions` WRITE;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` VALUES ('03f9vvd9vjg39s8okqqsc52ghl0dcj9r','127.0.0.1',1537645286,'__ci_last_regenerate|i:1537645286;'),('0tdqo7acoqv3doe7rhtprrnuh6rh832l','127.0.0.1',1537645656,'__ci_last_regenerate|i:1537645656;'),('14l61mtnk8mi1ghnv6egg9gh742gjsfg','127.0.0.1',1537629573,'__ci_last_regenerate|i:1537629573;'),('37ou7cokt87dlv2tn5elksa44sh53c10','127.0.0.1',1537657510,'__ci_last_regenerate|i:1537657510;'),('3kn2imamejiv1kb3trap1eekj6ruoa3g','127.0.0.1',1537630376,'__ci_last_regenerate|i:1537630173;'),('3pjiu0s7128ndod4bsh51tp4e9v26fba','127.0.0.1',1537656709,'__ci_last_regenerate|i:1537656709;'),('3spei93r5ki5jq2p9m93gmk3teqsf0t5','127.0.0.1',1537807162,'__ci_last_regenerate|i:1537807162;'),('4kfp7penqdtic57d3jf45aqo57r6p9mm','127.0.0.1',1537822568,'__ci_last_regenerate|i:1537822568;'),('67n6ci8f1hen59e40ev9hpt7m87n3n9j','127.0.0.1',1537823080,'__ci_last_regenerate|i:1537822900;'),('6f75shsejuhbc669nu9h25uptsmgk244','127.0.0.1',1537810054,'__ci_last_regenerate|i:1537810054;'),('a1dht4t78clko84e6ol6h26avsiaesmb','127.0.0.1',1537820964,'__ci_last_regenerate|i:1537820964;'),('b2jgokvkmi2on586s3n5qq0ctii4p81m','127.0.0.1',1537822900,'__ci_last_regenerate|i:1537822900;'),('d1f4bd16aqrpe9ce7n3b1dspil496en2','127.0.0.1',1537646134,'__ci_last_regenerate|i:1537646134;'),('dtiasrlctqh5v9105411nl3oupd61jem','127.0.0.1',1537628673,'__ci_last_regenerate|i:1537628673;'),('fj5cna41vcp1eedd9229vp8alrmtmphj','127.0.0.1',1537809544,'__ci_last_regenerate|i:1537809544;'),('fjj1pqvb8o4hjs86sgskihl9v9sua7h8','127.0.0.1',1537806019,'__ci_last_regenerate|i:1537806019;'),('hev2hsq41jvp87h71i9gr2v5523hsp3i','127.0.0.1',1537808044,'__ci_last_regenerate|i:1537808044;'),('i114agi105g23ns9dcq90qkc2rm9d2ha','127.0.0.1',1537630173,'__ci_last_regenerate|i:1537630173;'),('j954jg8er6h1c540aov9vkkaflv5as75','127.0.0.1',1537657515,'__ci_last_regenerate|i:1537657510;'),('jbs6ol5ogph5mad24tst5nl7cc6ppnna','127.0.0.1',1537809184,'__ci_last_regenerate|i:1537809184;'),('jgdc1m91tlrm29hdf1lj9bv3rml9irf1','127.0.0.1',1537628342,'__ci_last_regenerate|i:1537628342;'),('lg4jrp6i71b8v9l83sbtcuie4bkref32','127.0.0.1',1537810054,'__ci_last_regenerate|i:1537810054;'),('n4o8qhgtb9mm5ne0vsod11pbvmv2f8c8','127.0.0.1',1537821391,'__ci_last_regenerate|i:1537821391;'),('ntv23b19b0m5pu9s3c85no08nusks6ei','127.0.0.1',1537808828,'__ci_last_regenerate|i:1537808828;'),('puo0effpetf406mkphupl5614hk7a52i','127.0.0.1',1537652236,'__ci_last_regenerate|i:1537652236;'),('rn580u8mg2vp8e3j1hkcuaincipc385u','127.0.0.1',1537807727,'__ci_last_regenerate|i:1537807727;'),('shhedf9755q86ql21l5to0a7n61vhr6m','127.0.0.1',1537822161,'__ci_last_regenerate|i:1537822161;'),('tbns2r8tirao6pan5h0inpaleqhs19ve','127.0.0.1',1537652589,'__ci_last_regenerate|i:1537652589;');
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `drug`
--

DROP TABLE IF EXISTS `drug`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `drug` (
  `drugid` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`drugid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `drug`
--

LOCK TABLES `drug` WRITE;
/*!40000 ALTER TABLE `drug` DISABLE KEYS */;
/*!40000 ALTER TABLE `drug` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment` (
  `payid` int(11) NOT NULL AUTO_INCREMENT,
  `paytype` bit(1) DEFAULT NULL,
  `dr` decimal(12,2) DEFAULT NULL,
  `recno` int(6) DEFAULT NULL,
  `Description` varchar(45) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `user_userid` int(11) NOT NULL,
  PRIMARY KEY (`payid`),
  KEY `fk_payment_user` (`user_userid`),
  CONSTRAINT `fk_payment_user` FOREIGN KEY (`user_userid`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment`
--

LOCK TABLES `payment` WRITE;
/*!40000 ALTER TABLE `payment` DISABLE KEYS */;
/*!40000 ALTER TABLE `payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prescription`
--

DROP TABLE IF EXISTS `prescription`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prescription` (
  `prescripid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) DEFAULT NULL,
  `drugid` int(11) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `user_userid` int(11) NOT NULL,
  `drug_drugid` int(11) NOT NULL,
  PRIMARY KEY (`prescripid`),
  KEY `fk_prescription_user` (`user_userid`),
  KEY `fk_prescription_drug` (`drug_drugid`),
  CONSTRAINT `fk_prescription_drug` FOREIGN KEY (`drug_drugid`) REFERENCES `drug` (`drugid`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_prescription_user` FOREIGN KEY (`user_userid`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prescription`
--

LOCK TABLES `prescription` WRITE;
/*!40000 ALTER TABLE `prescription` DISABLE KEYS */;
/*!40000 ALTER TABLE `prescription` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type`
--

DROP TABLE IF EXISTS `type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `type` (
  `typeid` tinyint(1) NOT NULL,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`typeid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type`
--

LOCK TABLES `type` WRITE;
/*!40000 ALTER TABLE `type` DISABLE KEYS */;
/*!40000 ALTER TABLE `type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(25) NOT NULL,
  `regdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `typeid` tinyint(1) DEFAULT NULL,
  `type_typeid` tinyint(1) DEFAULT NULL,
  `account_locked` tinyint(1) DEFAULT NULL,
  `attempts` varchar(45) DEFAULT NULL,
  `lastlogin` timestamp NULL DEFAULT NULL,
  `createdby` int(11) DEFAULT NULL,
  PRIMARY KEY (`userid`),
  KEY `fk_user_type` (`type_typeid`),
  CONSTRAINT `fk_user_type` FOREIGN KEY (`type_typeid`) REFERENCES `type` (`typeid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-25  7:45:31
