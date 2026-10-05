-- Fashion Store database (products + one admin + one demo customer).
-- Import this file in phpMyAdmin on your hosting.
-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: ecommerece
-- ------------------------------------------------------
-- Server version	10.4.28-MariaDB

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
-- Table structure for table `admin_register`
--

DROP TABLE IF EXISTS `admin_register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_register` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pswrd` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_register`
--

LOCK TABLES `admin_register` WRITE;
/*!40000 ALTER TABLE `admin_register` DISABLE KEYS */;
INSERT INTO `admin_register` VALUES (1,'Sadia','admin@fashionstore.local','$2y$10$Cd6JtHnIwVSNzEQbjWAeneeHAtLix3uFBMBjqR/YIbCENk/FxyaDW');
/*!40000 ALTER TABLE `admin_register` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cart` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `pid` int(255) NOT NULL,
  `cid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `details`
--

DROP TABLE IF EXISTS `details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `details` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `dead` varchar(255) NOT NULL,
  `sale` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `sub-category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `slider_1` varchar(255) NOT NULL,
  `slider_2` varchar(255) NOT NULL,
  `slider_3` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `details`
--

LOCK TABLES `details` WRITE;
/*!40000 ALTER TABLE `details` DISABLE KEYS */;
INSERT INTO `details` VALUES (2,'Silky Black Shirt','Best Quality For You!','3000','2500','5%','westren','Silky Black Shirt','simple black.webp','simple black.webp','simple black.webp','simple black.webp'),(6,'Silky Blue Shirt','Best Quality For You!','4000','3500','5%','westren','Silky Blue Shirt','simple navy.webp','simple navy.webp','simple navy.webp','simple navy.webp'),(7,'Brown-grey Suit','Best Quality For You!','8000','6000','20%','westren','Brown-grey Suit','man-westren.webp','man-westren.webp','man-westren.webp','man-westren.webp'),(8,'Floral Shirt','Best Quality For You!','4000','3000','10%','westren','Floral Shirt','men-floral.jpg','men-floral.jpg','men-floral.jpg','men-floral.jpg'),(9,'Plain Black Shoes','Best Quality For You!','3000','2000','10%','shoes','Plain Black Shoes','black-shoes.webp','black-shoes.webp','black-shoes.webp','black-shoes.webp'),(10,'Simple Brown Shoes','Best Quality For You!','4000','3000','10%','shoes','Simple Brown Shoes','brown shoes.webp','brown shoes.webp','brown shoes.webp','brown shoes.webp'),(11,'Black Leather Shoes','Best Quality For You!','5000','4500','5%','shoes','Black Leather Shoes','black shoe.jpeg','black shoe.jpeg','black shoe.jpeg','black shoe.jpeg'),(12,'Brown Laces Shoes ','Best Quality For You!','5000','4500','5%','shoes','Brown Laces Shoes ','brown-style shoes.webp','brown-style shoes.webp','brown-style shoes.webp','brown-style shoes.webp'),(13,'Red Joggers ','Best Quality For You!','5000','4000','10%','jogger','Red Joggers ','red-jogger.webp','red-jogger.webp','red-jogger.webp','red-jogger.webp'),(14,'White Joggers  ','Best Quality For You!','5000','4000','10%','jogger','White Joggers  ','white-blue-line.webp','white-blue-line.webp','white-blue-line.webp','white-blue-line.webp'),(15,'Grey Joggers','Best Quality For You!','5000','4800','2%','jogger','Grey Joggers','grey-jogger.webp','grey-jogger.webp','grey-jogger.webp','grey-jogger.webp'),(16,'Black Joggers','Best Quality For You!','4500','3500','10%','jogger','Black Joggers','pure-black.webp','pure-black.webp','pure-black.webp','pure-black.webp'),(21,'Black-White Bow','Best Quality For You!','1000','800','12%','bows','Black-White Bow','black white tie.webp','black white tie.webp','black white tie.webp','black white tie.webp'),(22,'Blue Bow','Best Quality For You!','1500','1000','8%','bows','Blue Bow','blue tie.webp','blue tie.webp','blue tie.webp','blue tie.webp'),(24,'Red Bow','Best Quality For You!','1000','900','10%','bows','Red Bow','red tie.webp','red tie.webp','red tie.webp','red tie.webp'),(25,'Light Brown Wallet','Best Quality For You!','800','500','30%','wallet','Light Brown Wallet','bangkok wallet.jpg','bangkok wallet.jpg','bangkok wallet.jpg','bangkok wallet.jpg'),(26,'Brown-Cut Wallet','Best Quality For You!','400','350','12%','wallet','Brown-Cut Wallet','brown cut.jpg','brown cut.jpg','brown cut.jpg','brown cut.jpg'),(27,'Black Wallet','Best Quality For You!','500','400','10%','wallet','Black Wallet','red-strip.jpg','red-strip.jpg','red-strip.jpg','red-strip.jpg'),(28,'Blue Wallet','Best Quality For You!','800','400','50%','wallet','Blue Wallet','blue travel.jpg','blue travel.jpg','blue travel.jpg','blue travel.jpg'),(29,'Off-White Tie','Best Quality For You!','1200','600','50%','bows','Off-White Tie','off-white tie.avif','off-white tie.avif','off-white tie.avif','off-white tie.avif'),(36,'Light Gold-Flora Sherwani','Best Quality For You!','5500','4000','15%','eastren','Light Gold-Flora Sherwani','light gold flora.webp','light gold flora.webp','light gold flora.webp','light gold flora.webp'),(37,'Emerald Green Sherwani','Best Quality For You!','2500','2000','5%','eastren','Emerald Green Sherwani','emerald green.webp','emerald green.webp','emerald green.webp','emerald green.webp'),(38,'Cotton Black Kurta','Best Quality For You!','3000','2000','10%','eastren','Cotton Black Kurta','cotton-black.jpg','cotton-black.jpg','cotton-black.jpg','cotton-black.jpg'),(39,'Cotton Light Blue Kurta','Best Quality For You!','5000','2000','30%','eastren','Cotton Light Blue Kurta','cotton light blue.jpg','cotton light blue.jpg','cotton light blue.jpg','cotton light blue.jpg'),(46,'Black-Strip Golden Dial','Best Quality For You!','3000','1000','20%','watch','Black-Strip Golden Dial','nobleman-swiss watch.jpg','nobleman-swiss watch.jpg','pure black watch.jpg','pure gold watch.jpg'),(47,'Pure Black Watch','Best Quality for you!','2000','1500','5%','watch','Pure Black Watch','pure black watch.jpg','pure black watch.jpg','man-watch.webp','pure black watch.jpg'),(48,'Blue Watch','Best Quality For You!','3000','2000','10%','watch','Blue Watch','man-watch.webp','man-watch.webp','man-watch.webp','man-watch.webp'),(49,'Golden Watch','Best Quality For You!','8000','5000','3%','watch','Golden Watch','pure gold watch.jpg','pure gold watch.jpg','man-watch.webp','pure gold watch.jpg');
/*!40000 ALTER TABLE `details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `home`
--

DROP TABLE IF EXISTS `home`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `home` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `home`
--

LOCK TABLES `home` WRITE;
/*!40000 ALTER TABLE `home` DISABLE KEYS */;
/*!40000 ALTER TABLE `home` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `k_details`
--

DROP TABLE IF EXISTS `k_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `k_details` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `dead` varchar(255) NOT NULL,
  `sale` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `sub-category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `k_details`
--

LOCK TABLES `k_details` WRITE;
/*!40000 ALTER TABLE `k_details` DISABLE KEYS */;
INSERT INTO `k_details` VALUES (1,'PLAY Sweatshirt','Best Quality For You!','2000','1500','5%','new-arrival','PLAY Sweatshirt','play-shirt.avif'),(2,'Cool Tiger Sweatshirt','Best Quality For You!','2500','1500','15%','new-arrival','Cool Tiger Sweatshirt','cool-tiger.avif'),(3,'FUN Sweatshirt','Best Quality For You!','3000','2000','10%','new-arrival','FUN Sweatshirt','fun-shirt.avif'),(4,'Spider Man T-Shirt','Best Quality For You!','2000','1500','5%','new-arrival','Spider Man T-Shirt','spiderman-boy.avif'),(5,'Aqua Cotton Pants','Best Quality For You!','2500','2000','5%','new-arrival','Aqua Cotton Pants','aqua-pants-1.avif'),(7,'Dark Blue Ripped Pants','Best Quality For You!','3000','2500','5%','new-arrival','Dark Blue Ripped Pants','dark-blue-pants-2.avif'),(8,'Khaki Chino','Best Quality For You!','3000','1500','25%','new-arrival','Khaki Chino','khaki chino.webp'),(9,'Commando Shorts','Best Quality For You!','3000','2000','10%','new-arrival','Commando Shorts','commando-short1.webp'),(10,'Superman Cool Blue T-Shirt','Best Quality For You!','2500','2200','3%','toddler-shirt','Superman Cool Blue T-Shirt','superman-cool-toddler wearing.avif'),(11,'Green Polo Shirt','Best Quality For You!','4000','3000','10%','toddler-shirt','Green Polo Shirt','green-polo-shirt-shirt.webp'),(12,'Cute Dino T-Shirt','Best Quality For You!','2500','2000','5%','toddler-shirt','Cute Dino T-Shirt','cute-dino-toddler.webp'),(13,'Stay wild T-Shirt','Best Quality For You!','2000','2500','5%','toddler-shirt','Stay wild T-Shirt','stay-wild-toddler.avif'),(14,'Flamingo T-Shirt','Best Quality For You!','3000','2000','10%','toddler-shirt','Flamingo T-Shirt','flamingo-toddler-shirt.webp'),(15,'Pink Panther T-Shirt','Best Quality For You!','2000','1000','10%','toddler-shirt','Pink Panther T-Shirt','pink panther-toddler.webp'),(16,'Giraffe Graphic T-Shirt','Best Quality For You!','2500','2000','5%','toddler-shirt','Giraffe Graphic T-Shirt','girrafe- toddler-shirt.avif'),(17,'Batman T-Shirt','Best Quality For You!','3500','2000','15%','toddler-shirt','Batman T-Shirt','batman-tshirt-toddler.avif'),(18,'Blue Checkered Shirt','Best Quality For You!','3000','2000','10%','toddler-top','Blue Checkered Shirt','blue-check-toddler-dress.webp'),(19,'Flannel Checkered Shirt','Best Quality For You!','2500','2000','5%','toddler-top','Flannel Checkered Shirt','blue-fannel-toddler-dress.webp'),(20,'Black Floral Printed Top','Best Quality For You!','3000','2000','10%','toddler-top','Black Floral Printed Top','black-floral-toddler-dress.jpg'),(21,'Peach Embroidered Dress','Best Quality For You!','3500','3000','5%','toddler-top','Peach Embroidered Dress','peach-toddler-dress.webp'),(22,'Printed Watermelon Top','Best Quality For You!','2500','2000','5%','toddler-top','Printed Watermelon Top','watermelon-toddler-dress.webp'),(23,'Neon Printed Top','Best Quality For You!','3000','2500','5%','toddler-top','Neon Printed Top','neon-printed-toddler-dress.webp'),(24,'Sea Green Printed Shirt','Best Quality For You!','4000','3000','10%','toddler-top','Sea Green Printed Shirt','sea-green shirt-toddler-dress.webp'),(25,'Ducky Printed Shirt','Best Quality For You!','3500','2000','15%','toddler-top','Ducky Printed Shirt','ducky-graphic-toddler.webp'),(26,'Ducky Printed Shirt','Best Quality For You!','3500','2000','15%','toddler-top','Ducky Printed Shirt','ducky-graphic-toddler.webp'),(27,'Bicycle Sweatshirt','Best Quality For You!','3000','2000','10%','hoodies','Bicycle Sweatshirt','toddler bicycle hoddie.avif'),(28,'Girls Purple Fleece Hoodie','Best Quality For You!','1200','1000','2%','hoodies','Girls Purple Fleece Hoodie','toddler girls-purple-hoddie.webp'),(29,'Fun All Day Sweatshirt','Best Quality For You!','2000','1200','8%','hoodies','Fun All Day Sweatshirt','toddler-fun all day -hoddie.avif'),(30,'Good Vibes Hoodie','Best Quality For You!','3000','2000','10%','hoodies','Good Vibes Hoodie','toddler-good vibes only-hoddie.webp'),(31,'Rainbow Fleece Hoodie Girls','Best Quality For You!','3000','2500','5%','hoodies','Rainbow Fleece Hoodie Girls','toddler-rainbow-hoddie.avif'),(32,'Stars Printed Hoodie','Best Quality For You!','3000','2500','5%','hoodies','Stars Printed Hoodie','toddler-striped fleece hoddie.avif'),(33,'Unicorn Sweatshirt','Best Quality For You!','4000','2000','50%','hoodies','Unicorn Sweatshirt','toddler-unicorn-sweatshirt.webp'),(34,'Black & Yellow Hoodie','Best Quality For You!','2500','1000','15%','hoodies','Black & Yellow Hoodie','toodler-black&yellow hoddie.avif'),(35,'Plain Aqua Shirt','Best Quality For You!','3000','2000','10%','boy-shirt','Plain Aqua Shirt','boys-shirts-plain aqua.webp'),(36,'Black-Blue Boxes','Best Quality For You!','2500','2000','5%','boy-shirt','Black-Blue Boxes','boys-shirts-flannel.webp'),(37,'Plain Lemon Shirt','Best Quality For You!','2000','1500','5%','boy-shirt','Plain Lemon Shirt','boys-shirts-plain yellow.webp'),(38,'Blue Check  Shirt','Best Quality For You!','3000','2000','10%','boy-shirt','Blue Check Shirt','blue-check-toddler-dress.webp'),(39,'Aqua Cotton Pants','Best Quality For You!','3000','2000','10%','boy-pant','Aqua Cotton Pants','aqua-pants-1.avif'),(40,'Dark Blue Ripped Pants','Best Quality For You!','2500','2000','5%','boy-pant','Dark Blue Ripped Pants','dark-blue-pants-2.avif'),(41,'Khaki Chino','Best Quality For You!','2000','1500','5%','boy-pant','Khaki Chino','khaki chino.webp'),(42,'Commando Shorts','Best Quality For You!','2500','2000','5%','boy-pant','Commando Shorts','commando-short-2.jpg'),(43,'Floral T-Shirt','Best Quality For You!','2000','1500','5%','girl-top','Floral T-Shirt','floral-shirt-girl.avif'),(44,'Love yourself T-shirt','Best Quality For You!','3000','2000','10%','girl-top','Love yourself T-shirt','love-yourself.avif'),(45,'Sunglasses T-Shirt','Best Quality For You!','2500','2000','5%','girl-top','Sunglasses T-Shirt','sun-glasses.avif'),(46,'Stay wild Top','Best Quality For You!','3000','2000','10%','girl-top','Stay wild Top','stay-wild-toddler.avif'),(47,'Peach Twill Pants','Best Quality For You!','3000','2000','10%','girl-pant','Peach Twill Pants','girls-pants-peach-twill.webp'),(48,'Pink Twill Pants','Best Quality For You!','3000','2500','5%','girl-pant','Pink Twill Pants','girls-pants-pink-twill.avif'),(49,'Printed Twill Pant','Best Quality For You!','2500','2000','5%','girl-pant','Printed Twill Pant','girls-pants-twillpaint.avif'),(50,'Purple Twill Shorts','Best Quality For You!','4000','3000','10%','girl-pant','Purple Twill Shorts','purple-twill-girl-2.jpg'),(51,'Lime Green Kurti','Best Quality For You!','3000','2000','10%','satarangi','Lime Green Kurti','lime-green-kurti-new arrival.webp'),(52,'Aqua Blue Kurta','Best Quality For You!','3000','2500','5%','satarangi','Aqua Blue Kurta','aqua blue kurta-new arrival.webp'),(53,'Mustard Embroidered Kurti','Best Quality For You!','3000','2000','10%','satarangi','Mustard Embroidered Kurti','mustard kurti-new arrival.webp'),(54,'Peach Kurta','','4000','2000','50%','satarangi','Peach Kurta','peach kurta.webp'),(55,'Pink Embroidered Kurti','Best Quality For You!','3000','2000','10%','satarangi','Pink Embroidered Kurti','pink embroided kurti-new arrival.webp'),(56,'Black Kurta','Best Quality For You!','3000','2000','10%','satarangi','Black Kurta','black-kurta new arrival.webp'),(57,'maroon kurta','Best Quality For You!','2500','2000','5%','satarangi','maroon kurta','maroon kurta.webp'),(58,'Red Floral Kurti','Best Quality For You!','3000','2000','10%','satarangi','Red Floral Kurti','red-floral-new arrival.webp');
/*!40000 ALTER TABLE `k_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `cid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `totalprice` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prod_reviews`
--

DROP TABLE IF EXISTS `prod_reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prod_reviews` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `review` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prod_reviews`
--

LOCK TABLES `prod_reviews` WRITE;
/*!40000 ALTER TABLE `prod_reviews` DISABLE KEYS */;
/*!40000 ALTER TABLE `prod_reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_contact`
--

DROP TABLE IF EXISTS `user_contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_contact` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sbj` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_contact`
--

LOCK TABLES `user_contact` WRITE;
/*!40000 ALTER TABLE `user_contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_register`
--

DROP TABLE IF EXISTS `user_register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_register` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pswd` varchar(255) NOT NULL,
  `cpswd` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_register`
--

LOCK TABLES `user_register` WRITE;
/*!40000 ALTER TABLE `user_register` DISABLE KEYS */;
INSERT INTO `user_register` VALUES (1,'Demo Customer','demo@fashionstore.local','$2y$10$VOr/qKYOMMuInNCgi.FAkevdEjgXdKne6VMtwHFlBzQ/m/O6bP5bi','');
/*!40000 ALTER TABLE `user_register` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `w_details`
--

DROP TABLE IF EXISTS `w_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `w_details` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `dead` varchar(255) NOT NULL,
  `sale` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `sub-category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `w_details`
--

LOCK TABLES `w_details` WRITE;
/*!40000 ALTER TABLE `w_details` DISABLE KEYS */;
INSERT INTO `w_details` VALUES (2,'Parrot Printed Shirt ','Best Quality For You!','6000','5000','5000','eastren','Parrot Printed Shirt ','parrot printed shirt.jpg'),(3,'White Silver Dress','Best Quality For You!','8000','5000','5000','eastren','White Silver Dress','white-silver dress.jpg'),(4,'Black Red Embrioded Shirt','Best Quality For You!','5000','4500','4500','eastren','Black Red Embrioded Shirt','black red embroidered shirt.webp'),(5,'Tea-Pink Shalwar Kameez','Best Quality For You!','5000','4500','4500','eastren','Tea-Pink Shalwar Kameez','tea-pink shalwar kameez.webp'),(6,'Embroided Kurta','Best Quality For You!','5500','5000','5000','eastren','Embroided Kurta','embrioded kurta.jpg'),(7,'Solid High Rise Trouser','Best Quality For You!','6000','5000','5000','westren','Solid High Rise Trouser','madame-black solid high rise trouser wearing3.webp'),(8,'Camla Mint Dress','Best Quality For You!','5000','4500','54','select','Camla Mint Dress',''),(9,'Camla Mint Dress','Best Quality For You!','5000','4500','4500','westren','Camla Mint Dress','camla-mint-dress-woman-wearing.webp'),(10,'Elegent Peach Dress','Best Quality For You!','8000','6000','6000','westren','Elegent Peach Dress','madame-peach-dress-wearing.webp'),(11,'Elegant Violet Dress','Best Quality For You!','8000','7000','7000','westren','Elegent Violet Dress','madame-violet-dress-wearing.webp'),(12,'Navy Night Suit','Best Quality For You!','7000','6500','6500','westren','Navy Night Suit','navy night suit.webp'),(13,'Woman Rusty Dress','Best Quality For You!','9000','8000','8000','westren','Woman Rusty Dress','madame-rust-dress-wearing.webp'),(14,'Woman Rusty Dress','Best Quality For You!','9000','8000','8000','westren','Woman Rusty Dress','madame-rust-dress-wearing.webp'),(16,'Blue-stone Ring','','2000','1000','50%','ring','Blue-stone Ring','blue-stone-ring.webp'),(17,'Dragon Crystal Ring','Best Quality For You!','1500','1000','10%','ring','Dragon Crystal Ring','dragon-crystal-ring.webp'),(19,'Multi-color-cocktail Ring','Best Quality For You!','4000','2000','20%','select','Multi-color-cocktail Ring','multi-color-cocktail-ring.webp'),(20,'Pearl-two-finger Ring','Best Quality For You!','6000','3000','30%','ring','Pearl-two-finger Ring','pearl-two-finger-ring.webp'),(21,'Connecting-heart Ring','Best Quality For You!','5000','4500','5%','ring','Connecting-heart Ring','connecting-hearts-couple-ring.webp'),(22,'Black Sunflower','Best Quality For You!','5000','3000','20%','khussa','Black Sunflower','black sunflower.webp'),(23,'Khussa Daffodill','Best Quality For You!','3000','2000','10%','khussa','Khussa Daffodill','khussa daffodill.webp'),(24,'Khussa Fairy Lights','Best Quality For You!','5000','4000','10%','khussa','Khussa Fairy Lights','khussa fairy lights.webp'),(25,'khussa magic','Best Quality For You!','4000','2000','20%','khussa','khussa magic','khussa magic.webp'),(26,'Khussa Titli','Best Quality For You!','8000','4000','50%','khussa','Khussa Titli','khussa titli.webp'),(27,'Khussa Tulip','Best Quality For You!','5000','2000','30%','khussa','Khussa Tulip','khussa tulip.webp'),(28,'khussa-mystery','Best Quality For You!','4000','2000','20%','khussa','khussa-mystery','khussa-mystery.webp'),(29,'Pink Snakey Sandal','Best Quality For You!','6000','3000','50%','sanndal','Pink Snakey Sandal','tea-pink sandal.webp'),(30,'Dull-gold Sandals','Best Quality For You!','10000','8000','20%','sanndal','Dull-gold Sandals','dull-gold sandals.webp'),(31,'Lilac Simple Sandal','Best Quality For You!','6000','5000','10%','sanndal','Lilac Simple Sandal','lilac simple sandal.webp'),(32,'Maroon-buckle Sandal','Best Quality For You!','5000','4000','10%','sanndal','Maroon-buckle Sandal','maroon-buckle sandal.webp'),(33,'Tea-pink Skywalk Sandal','','4000','3000','10%','sanndal','Tea-pink Skywalk Sandal','tea-pink skywalk sandal.webp'),(35,'black soft-high heels','Best Quality For You!','','6000','20','select','black soft-high heels','black soft-high heels.jpg'),(36,'Black Soft-High Heels','Best Quality For You!','7000','5000','20%','heel','Black Soft-High Heels','black soft-high heels.jpg'),(37,'Black Velvet Heels','Best Quality For You!','6000','5000','10%','heel','Black Velvet Heels','black velvet heels.jpg'),(38,'Skin-Block High Heels','Best Quality For You!','10000','8000','20%','heel','Skin-Block High Heels','skin-block high heels.jpg'),(39,'Long-Mesh Black Heels','Best Quality For You!','8000','7000','10%','heel','Long-Mesh Black Heels','long-mesh black heels.jpg'),(40,'Transparent Stylish Heels','Best Quality For You!','8000','5000','30%','heel','Transparent Stylish Heels','transparent stylish heels.jpg'),(43,'Red Glamour Heels','Best Quality For You!','6000','5000','10%','heel','Red Glamour Heels','red glamour heels.jpg'),(44,'Butterfly-Flower Earings','Best Quality For You!','1000','800','20%','earing','Butterfly-Flower Earings','butterfly-flower earing.jpg'),(45,'Crystal Butterfly Earings','Best Quality For You!','2500','2000','2%','earing','Crystal Butterfly Earings','crystal butterfly earings.jpg'),(46,'Ear-Cuff Leaf Tassel','Best Quality For You!','1500','1000','5%','earing','Ear-Cuff Leaf Tassel','ear-cuff-leaf tassel.jpg'),(47,'Mermaid Tail Earings','Best Quality For You!','2500','1500','15%','earing','Mermaid Tail Earings','mermaid tail earings.jpg'),(48,'Opal Flower Earings','Best Quality For You!','3000','2500','5%','earing','Opal Flower Earings','opal flower earings.jpg'),(50,'Pink Flower Earings','Best Quality For You!','2500','1000','10%','earing','Pink Flower Earings','pink flower earings.jpg'),(51,'Brown Shoulder Bag','Best Quality For You!','8000','5000','20%','bag','Brown Shoulder Bag','brown-shoulder-bag.jpg'),(52,'Acrylic Bag Brown','Best Quality For You!','7000','6000','10%','bag','Acrylic Bag Brown','acrylic-bag-brown.webp'),(53,'Shaded Shoulder Bag','Best Quality For You!','8000','5000','30%','bag','Shaded Shoulder Bag','shaded-shoulder-bag.jpg'),(54,'Dotted Bag Peach','Best Quality For You!','5000','4000','10%','bag','Dotted Bag Peach','dotted-bag-peach.webp');
/*!40000 ALTER TABLE `w_details` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-10-04 22:28:28
