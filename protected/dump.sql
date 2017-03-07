-- MySQL dump 10.13  Distrib 5.7.13, for Win64 (x86_64)
--
-- Host: localhost    Database: prime
-- ------------------------------------------------------
-- Server version	5.5.50

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
-- Table structure for table `brand`
--

DROP TABLE IF EXISTS `brand`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text,
  `descriptionCollEx` text,
  `meta_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_brand_meta1_idx` (`meta_id`),
  CONSTRAINT `fk_brand_meta1` FOREIGN KEY (`meta_id`) REFERENCES `meta` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brand`
--

LOCK TABLES `brand` WRITE;
/*!40000 ALTER TABLE `brand` DISABLE KEYS */;
INSERT INTO `brand` VALUES (1,'staron','logostaron.jpg','Искусственный камень Staron пользуется огромной популярностью во всем мире. Он обладает превосходной прочностью и имеет чрезвычайно богатую палитру, представленную многообразием цветов, оттенков и текстур.\r\n                Профессиональные дизайнеры интерьеров предпочитают работать именно с изделиями из акрилового камня Staron, поскольку он поддается термоформингу (детали с изогнутыми элементами изготавливаются из плоского листка материала) и характеризуется богатством цветовой палитры Staron. Возможность разработки конструкции любой сложности без видимых швов также является несомненным преимуществом использования искусственного камня Самсунг Старон.','Искусственный камень Staron пользуется огромной популярностью во всем мире. Он обладает превосходной прочностью и имеет чрезвычайно богатую палитру, представленную многообразием цветов, оттенков и текстур.\r\n                Профессиональные дизайнеры интерьеров предпочитают работать именно с изделиями из акрилового камня Staron, поскольку он поддается термоформингу (детали с изогнутыми элементами изготавливаются из плоского листка материала) и характеризуется богатством цветовой палитры Staron. Возможность разработки конструкции любой сложности без видимых швов также является несомненным преимуществом использования искусственного камня Самсунг Старон.\r\n                Все, кто делает выбор в пользу красивого и экологически чистого искусственного камня Samsung Staron, остаются довольны результатом. Широкое распространение материал получил благодаря своим следующим свойствам:\r\n                Бесшовное соединение искусственного камня Самсунг по цене доступной и приемлемой позволяет производить разнообразные по форме поверхности.\r\n                Непористая структура акрилового камня Самсунг Старон гарантирует простой повседневный уход и долговечность конструкций.\r\n                Благодаря кварцевым частицам искусственный камень Старон обладает природной красотой и прочностью. Его эстетика и прекрасные потребительские свойства расширяют дизайнерские возможности при разработке богатых и изысканных интерьеров. Искусственный камень Самсунг используется для изготовления кухонных столешниц Samsung Staron и подоконников, барных стоек, отделки ванных комнат, торгового оборудования и т. д. Не менее привлекательны и мойки Старон, способные привнести в помещение ноту изысканности',NULL),(2,'lg_hi_macs','logo-lg-himacs.png',' LG LG LG LG LG LG LG  LG LG LG LG LG LG LG  LG LG LG LG LG LG LG  LG LG LG LG LG LG LG.\',','\r\n                изготавливаются из плоского листка материала) и характеризуется богатством цветовой палитры Staron. Возможность разработки конструкции любой сложности без видимых швов также является несомненным преимуществом использования искусственного камня Самсунг Старон.\r\n                Все, кто делает выбор в пользу красивого и экологически чистого искусственного камня Samsung Staron, остаются довольны результатом. Широкое распространение материал получил благодаря своим следующим свойствам:\r\n                Бесшовное соединение искусственного камня Самсунг по цене доступной и приемлемой позволяет производить разнообразные по форме поверхности.\r\n                Непористая структура акрилового камня Самсунг Старон гарантирует простой повседневный уход и долговечность конструкций.\r\n                Благодаря кварцевым частицам искусственный камень Старон обладает природной красотой и прочностью. Его эстетика и прекрасные потребительские свойства расширяют дизайнерские возможности при разработке богатых и изысканных интерьеров. Искусственный камень Самсунг используется для изготовления кухонных столешниц Samsung Staron и подоконников, барных стоек, отделки ванных комнат, торгового оборудования и т. д. Не менее привлекательны и мойки Старон, способные привнести в помещение ноту изысканности',NULL),(3,'hanex','logohanex.jpg','hanex hanex','Оно же',NULL),(4,'corian','logocorian.jpg','Кориан Кориан Корианище','Кориан Кориан Корианище Кориан Кориан Корианище',NULL),(5,'tristone','logotristone.jpg','Тристоун трайстоун ля ля ля','ля ля ля Тристоун трайстоун ля ля ля',NULL),(6,'grandex','logograndex.jpg','Грандекс грандекс ','Грандекс грандекс  Грандекс грандекс Грандекс грандекс ',NULL),(7,'kerrock','logokerrock.jpg','Керрок керрок керрок','керрок керрок керрок керрок керрок керрок керрок керрок',NULL),(8,'montelli','logomontelli.jpg','Монтелли монтелька','Монтелли монтелька Монтелли монтелька Монтелли монтелька',NULL),(9,'getacore','logogetacore.jpg','Гетакор гетакор','Гетакор гетакор Гетакор гетакор Гетакор гетакор Гетакор гетакор',NULL),(10,'samsung_radianz','logoradianz.jpg','Радианс радиансс','Радианс радиансс Радианс радиансс Радианс радиансс Радианс радиансс',NULL),(11,'caesarstone','logocaesarstone.png','Цезарь стоун Цезарь стоун Цезарь стоун','Цезарь стоун Цезарь стоун Цезарь стоун Цезарь стоун Цезарь стоун Цезарь стоун Цезарь стоун Цезарь стоун Цезарь стоун',NULL),(12,'cambria','logocambria.jpg','Камбрия камбрия камбрия','Камбрия камбрия камбрия Камбрия камбрия камбрия Камбрия камбрия камбрия',NULL),(13,'plazastone','logoplazastone.jpg','Плаза стоун плаза плаза Плаза стоун плаза плаза Плаза стоун плаза плаза','Плаза стоун плаза плаза Плаза стоун плаза плаза Плаза стоун плаза плаза Плаза стоун плаза плаза Плаза стоун плаза плаза Плаза стоун плаза плаза Плаза стоун плаза плаза Плаза стоун плаза плаза Плаза стоун плаза плаза',NULL),(14,'scorino','logoscorino.png','Скорино скорино скорино','Скорино скорино скорино Скорино скорино скорино Скорино скорино скорино Скорино скорино скорино',NULL);
/*!40000 ALTER TABLE `brand` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `collection`
--

DROP TABLE IF EXISTS `collection`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `collection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  `brand_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_collection_brand_idx` (`brand_id`),
  CONSTRAINT `fk_collection_brand` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `collection`
--

LOCK TABLES `collection` WRITE;
/*!40000 ALTER TABLE `collection` DISABLE KEYS */;
INSERT INTO `collection` VALUES (1,'Solid','',1),(2,'Super Solid','',1),(3,'solidsolid','',2),(4,'Sanded','',1),(5,'Aspen','',1),(6,'Metallic','',1),(7,'Pebble','',1),(8,'Quarry&Mosaic','',1),(9,'Tempest','',1),(10,'Supreme','',1);
/*!40000 ALTER TABLE `collection` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meta`
--

DROP TABLE IF EXISTS `meta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meta`
--

LOCK TABLES `meta` WRITE;
/*!40000 ALTER TABLE `meta` DISABLE KEYS */;
/*!40000 ALTER TABLE `meta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stone`
--

DROP TABLE IF EXISTS `stone`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `collection_id` int(11) NOT NULL,
  `meta_id` int(11) DEFAULT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_stone_collection1_idx` (`collection_id`),
  KEY `fk_stone_meta1_idx` (`meta_id`),
  CONSTRAINT `fk_stone_collection1` FOREIGN KEY (`collection_id`) REFERENCES `collection` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_stone_meta1` FOREIGN KEY (`meta_id`) REFERENCES `meta` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stone`
--

LOCK TABLES `stone` WRITE;
/*!40000 ALTER TABLE `stone` DISABLE KEYS */;
INSERT INTO `stone` VALUES (1,'Bright White BW010','/images/samsung_staron/catalog/staron_bw010_solid_bright_white.jpg',1,NULL,'Искусственный камень Samsung Staron Bright White BW010'),(2,'Diamond White','/lg_hi_macs/images/catalog/lg_hi_macs_solid_s034_diamond_white.jpg',3,NULL,'Искусственный камень LG Hi Macs Diamond White'),(3,'Aspen Brown AB632','/images/samsung_staron/catalog/staron_ab632_aspen_brown.jpg',5,NULL,'Искусственный камень Samsung Staron Aspen Brown AB632'),(4,'Aspen Glasier White AG612','/images/samsung_staron/catalog/staron_ag612_aspen_glacier.jpg',5,NULL,'Искусственный камень Samsung Staron Aspen Glasier AG612'),(5,'Aspen Lava AL650','/images/samsung_staron/catalog/staron_al650_aspen_lava.jpg',5,NULL,'Искусственный камень Samsung Staron Aspen Lava AL650'),(6,'Aspen Mine AM633','/images/samsung_staron/catalog/staron_am633_aspen_mine.jpg',5,NULL,'Искусственный камень Samsung Staron Aspen Mine AM633'),(7,'Aspen Pepper AP640','/images/samsung_staron/catalog/staron_ap640_aspen_pepper.jpg',5,NULL,'Искусственный камень Samsung Staron Aspen Pepper AP640'),(8,'Aspen Snow AS610','/images/samsung_staron/catalog/staron_as610_aspen_snow.jpg',5,NULL,'Искусственный камень Samsung Staron Aspen Snow AS610'),(9,'Aspen Seashell AS642','/images/samsung_staron/catalog/staron_as642_aspen_seashell.jpg',5,NULL,'Искусственный камень Aspen Seashell AS642'),(10,'Aspen Sky AS670','/images/samsung_staron/catalog/staron_as670_aspen_sky.jpg',5,NULL,'Искусственный камень Samsung Staron Aspen Sky AS670'),(11,'Dark Nebula DN421','/images/samsung_staron/catalog/staron_dn421_sanded_dark_nebula.jpg',4,NULL,'Искусственный камень Samsung Staron Dark Nebula DN421'),(12,'Metallic Cosmos EC596','/images/samsung_staron/catalog/staron_e%D1%81596_metallic_cosmos.jpg',6,NULL,'Искусственный камень Samsung Staron Metallic Cosmos EC596'),(13,'Metallic Beach EB545','/images/samsung_staron/catalog/staron_eb545_metallic_beach.jpg',6,NULL,'Искусственный камень Samsung Staron Metallic Beach EB545'),(14,'Metallic Galaxy EG595','/images/samsung_staron/catalog/staron_eb595_metallic_galaxy.jpg',6,NULL,'Искусственный камень Samsung Staron Metallic Galaxy EG595'),(15,'Metallic Satingold ES558','/images/samsung_staron/catalog/staron_es558_metallic_satingold.jpg',6,NULL,'Искусственный камень Samsung Staron Metallic Satingold ES558'),(16,'Metallic Sleeksilver ES581','/images/samsung_staron/catalog/staron_es581_metallic_sleeksilver.jpg',6,NULL,'Искусственный камень Samsung Staron Metallic Sleeksilver ES581'),(17,'Metallic Youkon EY510','/images/samsung_staron/catalog/staron_ey510_metallic_yukon.jpg',6,NULL,'Искусственный камень Samsung Staron Metallic Youkon EY510'),(18,'Tempest Adamantine FA159','/images/samsung_staron/catalog/staron_fa159_tempest_adamantine.jpg',9,NULL,'Искусственный камень Samsung Staron Tempest Adamantine FA159'),(19,'Tempest Blaze FB147','/images/samsung_staron/catalog/staron_fb147_tempest_blaze.jpg',9,NULL,'Искусственный камень Samsung Staron Tempest Blaze FB147'),(20,'Tempest Bronzestar FB154','/images/samsung_staron/catalog/staron_fb154_tempest_bronzestar.jpg',9,NULL,'Искусственный камень Samsung Staron Tempest Bronzestar FB154'),(21,'Tempest Confection FC116','/images/samsung_staron/catalog/staron_fc116_tempest_confection.jpg',9,NULL,'Искусственный камень Samsung Staron Tempest Confection FC116'),(22,'Tempest Cinnamon FC153','/images/samsung_staron/catalog/staron_fc153_tempest_cinnamon.jpg',9,NULL,'Искусственный камень Samsung Staron Tempest Cinnamon FC153'),(23,'Tempest Copperplate FC156','/images/samsung_staron/catalog/staron_fc156_tempest_copperplate.jpg',9,NULL,'Искусственный камень Samsung Staron Tempest Copperplate FC156'),(24,'Tempest Coffee Bean FC158','/images/samsung_staron/catalog/staron_fc158_tempest_coffeebean.jpg',9,NULL,'Искусственный камень Samsung Staron Tempest Coffee Bean FC158'),(25,'Tempest Coviar FC188','/images/samsung_staron/catalog/staron_fc188_tempest_caviar.jpg',9,NULL,'Искусственный камень Samsung Staron Tempest Coviar FC188'),(26,'Tempest Constellation FC197 ','/images/samsung_staron/catalog/staron_fc197_tempest_constellation.jpg',9,NULL,'Искусственный камень Samsung Staron  Tempest Constellation FC197 '),(27,'Tempest Dazzle FD191','/images/samsung_staron/catalog/staron_fd191_tempest_dazzle.jpg',9,NULL,'Искусственный камень Samsung Staron Tempest Dazzle FD191'),(28,'Tempest Glimmer FG144','/images/samsung_staron/catalog/staron_fg144_tempest_glimmer.jpg',9,NULL,'Искусственный камень Samsung Staron Tempest Glimmer FG144'),(29,'Tempest Gleam FG146','/images/samsung_staron/catalog/staron_fg146_tempest_gleam.jpg',9,NULL,'Искусственный камень Samsung Staron Tempest Gleam FG146'),(30,'Tempest Genesis FG174','/images/samsung_staron/catalog/staron_fg174_tempest_genesis.jpg',9,NULL,'Искусственный камень Samsung Staron Tempest Genesis FG174'),(31,'Tempest Gold Leaf FG196','/images/samsung_staron/catalog/staron_fg196_tempest_gold_leaf.jpg',9,NULL,'Искусственный камень Samsung Staron Tempest Gold Leaf FG196'),(32,'Tempest Horizont FH114','/images/samsung_staron/catalog/staron_fh114_tempest_horizon.jpg',9,NULL,'Искусственный камень Samsung Staron Tempest Horizont FH114'),(33,'Tempest Igneus FI187','/images/samsung_staron/catalog/staron_fi187_tempest_igneus.jpg',9,NULL,'Искусственный камень Samsung Staron Tempest Igneus FI187'),(34,'Tempest Meteor FM111 ','/images/samsung_staron/catalog/staron_fm111_tempest_meteor.jpg',9,NULL,'Искусственный камень Samsung Staron Tempest Meteor FM111 '),(35,'Tempest Moonlight FM122','/images/samsung_staron/catalog/staron_fm122_tempest_moonlight.jpg',9,NULL,'Искусственный камень Samsung Staron Tempest Moonlight FM122'),(36,'Tempest Peak FP100','/images/samsung_staron/catalog/staron_fp100_tempest_peak.jpg',9,NULL,'Искусственный камень Samsung Staron Tempest Peak FP100'),(37,'Tempest Pinnacle FP112','/images/samsung_staron/catalog/staron_fp112_tempest_pinnacle.jpg',9,NULL,'Искусственный камень Samsung Staron Tempest Pinnacle FP112'),(38,'Tempest Rime FR118','/images/samsung_staron/catalog/staron_fr118_tempest_rime.jpg',9,NULL,'Искусственный камень Samsung Staron Tempest Rime FR118'),(39,'Tempest Papika FP136','/images/samsung_staron/catalog/staron_fp136_tempest_paprika.jpg',9,NULL,'Искусственный камень Samsung Staron Tempest Papika FP136'),(40,'Tempest Praire FP142','/images/samsung_staron/catalog/staron_fp142_tempest_praire.jpg',9,NULL,'Искусственный камень Samsung Staron Tempest Praire FP142'),(41,'Tempest Rattan FR124','/images/samsung_staron/catalog/staron_fr124_tempest_rattan.jpg',9,NULL,'Искусственный камень Samsung Staron Tempest Rattan FR124'),(42,'Tempest Shimmer / Radiance FR148','/images/samsung_staron/catalog/staron_fr148_tempest_shimmer_radiance.jpg',9,NULL,'Искусственный камень Samsung Staron Tempest Shimmer / Radiance FR148'),(43,'Tempest Shell FS115','/images/samsung_staron/catalog/staron_fs115_tempest_shell.jpg',9,NULL,'Искусственный камень Samsung Staron Tempest Shell FS115'),(44,'Tempest Spice FS137','/images/samsung_staron/catalog/staron_fs137_tempest_spice.jpg',9,NULL,'Искусственный камень Samsung Staron Tempest Spice FS137'),(45,'Tempest Shallot FS157','/images/samsung_staron/catalog/staron_fs157_tempest_shallot.jpg',9,NULL,'Искусственный камень Samsung Staron Tempest Shallot FS157'),(46,'Tempest Spearmint FS164','/images/samsung_staron/catalog/staron_fs164_tempest_spearmint.jpg',9,NULL,'Искусственный камень Samsung Staron Tempest Spearmint FS164'),(47,'Tempest Starfire FS198','/images/samsung_staron/catalog/staron_fs198_tempest_starfire.jpg',9,NULL,'Искусственный камень Samsung Staron Tempest Starfire FS198'),(48,'Tempest Twilight FT113','/images/samsung_staron/catalog/staron_ft113_tempest_twilight.jpg',9,NULL,'Искусственный камень Samsung Staron Tempest Twilight FT113 '),(49,'Tempest Tektite FT188','/images/samsung_staron/catalog/staron_ft188_tempest_tektite.jpg',9,NULL,'Искусственный камень Samsung Staron Tempest Tektite FT188'),(50,'Tempest Whippoorwill FW145','/images/samsung_staron/catalog/staron_fw145_tempest_whippoorwill.jpg',9,NULL,'Искусственный камень Samsung Staron Tempest Whippoorwill FW145'),(51,'Tempest Zenith FZ184','/images/samsung_staron/catalog/staron_fz184_tempest_zenith.jpg',9,NULL,'Искусственный камень Samsung Staron Tempest Zenith FZ184'),(52,'Onyx ON095','/images/samsung_staron/catalog/staron_on095_super_solid_onyx.jpg',2,NULL,'Искусственный камень Samsung Staron Onyx ON095'),(53,'Pebble Aqua PA860','/images/samsung_staron/catalog/staron_pa860_pebble_aqua.jpg',7,NULL,'Искусственный камень Samsung Staron Pebble Aqua PA860'),(54,'Pebble Terrain PT857','/images/samsung_staron/catalog/staron_pb857_pebble_terrain.jpg',7,NULL,'Искусственный камень Samsung Staron Pebble Terrain PT857'),(55,'Pebble Blue PB870','/images/samsung_staron/catalog/staron_pb870_pebble_blue.jpg',7,NULL,'Искусственный камень Samsung Staron Pebble Blue PB870'),(56,'Pebble Copper PC851','/images/samsung_staron/catalog/staron_pc851_pebble_copper.jpg',7,NULL,'Искусственный камень Samsung Staron Pebble Copper PC851'),(57,'Pebble Confetti PC880','/images/samsung_staron/catalog/staron_pc880_pebble_confetti.jpg',7,NULL,'Искусственный камень Samsung Staron Pebble Confetti PC880'),(58,'Pebble Ebone PE814','/images/samsung_staron/catalog/staron_pe814_pebble_ebony.jpg',7,NULL,'Искусственный камень Samsung Staron Pebble Ebone PE814'),(59,'Pebble Grey PG810','/images/samsung_staron/catalog/staron_pg810_pebble_grey.jpg',7,NULL,'Искусственный камень Samsung Staron Pebble Grey PG810'),(60,'Pebble Gold PG840','/images/samsung_staron/catalog/staron_pg840_pebble_gold.jpg',7,NULL,'Искусственный камень Samsung Staron Pebble Gold PG840'),(61,'Pebble Ice PI811','/images/samsung_staron/catalog/staron_pi811_pebble_ice.jpg',7,NULL,'Искусственный камень Samsung Staron  Pebble Ice PI811'),(62,'Pebble Kernel PK843','/images/samsung_staron/catalog/staron_pk843_pebble_kernel.jpg',7,NULL,'Искусственный камень Samsung Staron Pebble Kernel PK843'),(63,'Pebble Limestone PL848','/images/samsung_staron/catalog/staron_pl848_pebble_limestone.jpg',7,NULL,'Искусственный камень Samsung Staron Pebble Limestone PL848'),(64,'Pebble Ponderosa PP868','/images/samsung_staron/catalog/staron_pp868_pebble_ponderosa.jpg',7,NULL,'Искусственный камень Samsung Staron Pebble Ponderosa PP868'),(65,'Pebble Rose PR850','/images/samsung_staron/catalog/staron_pr850_pebble_rose.jpg',7,NULL,'Искусственный камень Samsung Staron Pebble Rose PR850'),(66,'Pebble Saratoga PS820','/images/samsung_staron/catalog/staron_ps820_pebble_saratoga.jpg',7,NULL,'Искусственный камень Samsung Staron Pebble Saratoga PS820'),(67,'Mosaic Black Bean QB299','/images/samsung_staron/catalog/staron_qb299_mosaic_black_bean.jpg',8,NULL,'Искусственный камень Samsung Staron Mosaic Black Bean QB299'),(68,'Mosaic Dalmatian QD212','/images/samsung_staron/catalog/staron_qd212_mosaic_dalmatian.jpg',8,NULL,'Искусственный камень Samsung Staron Mosaic Dalmatian QD212'),(69,'Quarry Esker QE240','/images/samsung_staron/catalog/staron_qe240_quarry_esker.jpg',8,NULL,'Искусственный камень Samsung Staron Quarry Esker QE240'),(70,'Quarry Minette QM289','/images/samsung_staron/catalog/staron_qm289_quarry_minette.jpg',8,NULL,'Искусственный камень Samsung Staron Quarry Minette QM289'),(71,'Mosaic Numbus QN287','/images/samsung_staron/catalog/staron_qn287_mosaic_nimbus.jpg',8,NULL,'Искусственный камень Samsung Staron Mosaic Numbus QN287'),(72,'Quarry Starred','/images/samsung_staron/catalog/staron_qs287_quarry_starred.jpg',8,NULL,'Искусственный камень Samsung Staron Quarry Starred'),(73,'Sanded Birch SB412','/images/samsung_staron/catalog/staron_sb412_sanded_birch.jpg',4,NULL,'Искусственный камень Samsung Staron Sanded Birch SB412'),(74,'Blonde SB043','/images/samsung_staron/catalog/staron_sb043_super_solid_blonde.jpg',2,NULL,'Искусственный камень Samsung Staron Blonde SB043'),(75,'California Poppy SC052','/images/samsung_staron/catalog/staron_sc052_super_solid_california_poppy.jpg',2,NULL,'Искусственный камень Samsung Staron California Poppy SC052'),(76,'Sanded Cornmeal SC433','/images/samsung_staron/catalog/staron_sc433_sanded_cornmeal.jpg',4,NULL,'Искусственный камень Samsung Staron Sanded Cornmeal SC433'),(77,'Sanded Chestnut CS457','/images/samsung_staron/catalog/staron_sc457_sanded_chestnut.jpg',4,NULL,'Искусственный камень Samsung Staron Sanded Chestnut CS457'),(78,'Dazzling White SD001','/images/samsung_staron/catalog/staron_sd001_super_solid_dazzling_white.jpg',2,NULL,'Искусственный камень Samsung Staron Dazzling White SD001'),(79,'Fog SF020','/images/samsung_staron/catalog/staron_sf020_super_solid_fog.jpg',2,NULL,'Искусственный камень Samsung Staron Fog SF020'),(80,'Green Tea SG065','/images/samsung_staron/catalog/staron_sg065_super_solid_green_tea.jpg',2,NULL,'Искусственный камень Samsung Staron Green Tea SG065'),(81,'Sanded Grey SG420','/images/samsung_staron/catalog/staron_sg420_sanded_grey.jpg',4,NULL,'Искусственный камень Samsung Staron Sanded Grey SG420'),(82,'Sanded Gold Dust SG441','/images/samsung_staron/catalog/staron_sg441__sanded_gold_dust.jpg',4,NULL,'Искусственный камень Samsung Staron Sanded Gold Dust SG441'),(83,'Ivory SI040','/images/samsung_staron/catalog/staron_si040_solid_ivory.jpg',1,NULL,'Искусственный камень Samsung Staron Ivory SI040'),(84,'Iris SI056','/images/samsung_staron/catalog/staron_si056_super_solid_iris.jpg',2,NULL,'Искусственный камень Samsung Staron Iris SI056'),(85,'Sanded Icicle SI414','/images/samsung_staron/catalog/staron_si414_sanded_icicle.jpg',4,NULL,'Искусственный камень Samsung Staron Sanded Icicle SI414'),(86,'Mountain Bluebird SM075','/images/samsung_staron/catalog/staron_sm075_super_solid_mountain_bluebird.jpg',2,NULL,'Искусственный камень Samsung Staron Mountain Bluebird SM075'),(87,'Sanded Cream SM421','/images/samsung_staron/catalog/staron_sm421__sanded_cream.jpg',4,NULL,'Искусственный камень Samsung Staron Sanded Cream SM421'),(88,'Sanded Mocha SM453','/images/samsung_staron/catalog/staron_sm453__sanded_mocha.jpg',4,NULL,'Искусственный камень Samsung Staron Sanded Mocha SM453'),(89,'Sanded Onyx SO423','/images/samsung_staron/catalog/staron_so423_sanded_onyx.jpg',4,NULL,'Искусственный камень Samsung Staron Sanded Onyx SO423'),(90,'Sanded Oatmeal SO446','/images/samsung_staron/catalog/staron_so446_sanded_oatmeal.jpg',4,NULL,'Искусственный камень Samsung Staron Sanded Oatmeal SO446'),(91,'Pearl SP011','/images/samsung_staron/catalog/staron_sp011_solid_pearl.jpg',1,NULL,'Искусственный камень Samsung Staron Pearl SP011'),(92,'Pure White SP016','/images/samsung_staron/catalog/staron_sp016_solid_pure-white.jpg',1,NULL,'Искусственный камень Samsung Staron Pure White SP016'),(93,'Sanded Pine SP462','/images/samsung_staron/catalog/staron_sp462_sanded_pine.jpg',4,NULL,'Искусственный камень Samsung Staron Sanded Pine SP462'),(94,'Quasar White SQ019','/images/samsung_staron/catalog/staron_sq019_solid_quasar_white.jpg',1,NULL,'Искусственный камень Samsung Staron Quasar White SQ019'),(95,'Sunflower SS042','/images/samsung_staron/catalog/staron_ss042_super_solid_sunflower.jpg',2,NULL,'Искусственный камень Samsung Staron Sunflower SS042'),(96,'Sanded Stratus SS418','/images/samsung_staron/catalog/staron_ss418_sanded_stratus.jpg',4,NULL,'Искусственный камень Samsung Staron Sanded Stratus SS418'),(97,'Sanded Sahara SS440','/images/samsung_staron/catalog/staron_ss440_sanded_sahara.jpg',4,NULL,'Искусственный камень Samsung Staron Sanded Sahara SS440'),(98,'Sanded Seafoam SS471','/images/samsung_staron/catalog/staron_ss471_sanded_seafoam_.jpg',4,NULL,'Искусственный камень Samsung Staron Sanded Seafoam SS471'),(99,'Tusk ST015','/images/samsung_staron/catalog/staron_st015_solid_tusk.jpg',1,NULL,'Искусственный камень Samsung Staron Tusk ST015'),(100,'Steel ST023','/images/samsung_staron/catalog/staron_st023_super_solid_steel.jpg',2,NULL,'Искусственный камень Samsung Staron Steel ST023'),(101,'Univers SU053','/images/samsung_staron/catalog/staron_su053_super_solid_univers.jpg',2,NULL,'Искусственный камень Samsung Staron Univers SU053'),(102,'Natural SV041','/images/samsung_staron/catalog/staron_sv041_solid_natural.jpg',1,NULL,'Искусственный камень Samsung Staron Natural SV041'),(103,'Sanded Vermillion SV430','/images/samsung_staron/catalog/staron_sv430_sanded_vermillion.jpg',4,NULL,'Искусственный камень Samsung Staron Sanded Vermillion SV430'),(104,'Talus Oyster TO310','/images/samsung_staron/catalog/staron_to310_quarry_oyster.jpg',8,NULL,'Искусственный камень Samsung Staron Talus Oyster TO310'),(105,'Talus Sandbar TS345','/images/samsung_staron/catalog/staron_ts345_talus_sandbar.jpg',8,NULL,'Искусственный камень Samsung Staron Talus Sandbar TS345'),(106,'Supreme Cloudbank VC118','/images/samsung_staron/catalog/staron_vc118_supreme_cloudbank_zakaz.jpg',10,NULL,'Искусственный камень Samsung Staron Supreme Cloudbank VC118'),(107,'Supreme Delphi VD111','/images/samsung_staron/catalog/staron_vd111_supreme_delphi_zakaz.jpg',10,NULL,'Искусственный камень Samsung Staron  Supreme Delphi VD111'),(108,'Supreme Dawn VD126','/images/samsung_staron/catalog/staron_vd126_supreme_dawn.jpg',10,NULL,'Искусственный камень Samsung Staron Supreme Dawn VD126'),(109,'Supreme Dandelion VD175','/images/samsung_staron/catalog/staron_vd175_supreme_dandelion.jpg',10,NULL,'Искусственный камень Samsung Staron Supreme Dandelion VD175'),(110,'Supreme Loam VL155','/images/samsung_staron/catalog/staron_vl155_supreme_loam.jpg.jpg',10,NULL,'Искусственный камень Samsung Staron Supreme Loam VL155'),(111,'Supreme Magnolia','/images/samsung_staron/catalog/staron_vm143_supreme_magnolia.jpg',10,NULL,'Искусственный камень Samsung Staron Supreme Magnolia'),(112,'Supreme Natural Bridge','/images/samsung_staron/catalog/staron_vn144_supreme_natural_bridge.jpg',10,NULL,'Искусственный камень Samsung Staron Supreme Natural Bridge'),(113,'Supreme Ocean View','/images/samsung_staron/catalog/staron_vo171_supreme_ocean_view.jpg',10,NULL,'Искусственный камень Samsung Staron Supreme Ocean View'),(114,'Supreme Presto VP159','/images/samsung_staron/catalog/staron_vp159_supreme_presto_zakaz.jpg',10,NULL,'Искусственный камень Samsung Staron Supreme Presto VP159'),(115,'Supreme Pastoral VP177','/images/samsung_staron/catalog/staron_vp177_supreme_pastoral_zakaz.jpg',10,NULL,'Искусственный камень Samsung Staron Supreme Pastoral VP177'),(116,'White Pepper WP410','/images/samsung_staron/catalog/staron_wp410_sanded_white_pepper.jpg',4,NULL,'Искусственный камень Samsung Staron White Pepper WP410');
/*!40000 ALTER TABLE `stone` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_migration`
--

DROP TABLE IF EXISTS `tbl_migration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_migration`
--

LOCK TABLES `tbl_migration` WRITE;
/*!40000 ALTER TABLE `tbl_migration` DISABLE KEYS */;
INSERT INTO `tbl_migration` VALUES ('m000000_000000_base',1488540753),('m170303_101954_init_tables',1488540762);
/*!40000 ALTER TABLE `tbl_migration` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-07 14:02:30
