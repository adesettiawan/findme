-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table db_findme.data_customer
CREATE TABLE IF NOT EXISTS `data_customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_customer` int(11) NOT NULL,
  `Name` varchar(128) NOT NULL,
  `Address` varchar(256) NOT NULL,
  `Status` varchar(128) NOT NULL,
  `Date` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  FULLTEXT KEY `Name` (`Name`,`Date`),
  FULLTEXT KEY `Name_2` (`Name`,`Date`),
  FULLTEXT KEY `Name_3` (`Name`,`Date`),
  FULLTEXT KEY `Name_4` (`Name`,`Date`),
  FULLTEXT KEY `Name_5` (`Name`,`Date`),
  FULLTEXT KEY `Name_6` (`Name`,`Date`),
  FULLTEXT KEY `Name_7` (`Name`,`Date`),
  FULLTEXT KEY `Name_8` (`Name`,`Date`),
  FULLTEXT KEY `Name_9` (`Name`,`Date`),
  FULLTEXT KEY `Name_10` (`Name`,`Date`),
  FULLTEXT KEY `Name_11` (`Name`,`Date`),
  FULLTEXT KEY `Name_12` (`Name`,`Date`),
  FULLTEXT KEY `Name_13` (`Name`,`Date`),
  FULLTEXT KEY `Name_14` (`Name`,`Date`),
  FULLTEXT KEY `Name_15` (`Name`,`Date`),
  FULLTEXT KEY `Name_16` (`Name`,`Date`),
  FULLTEXT KEY `Name_17` (`Name`,`Date`),
  FULLTEXT KEY `Name_18` (`Name`,`Date`),
  FULLTEXT KEY `Name_19` (`Name`,`Date`),
  FULLTEXT KEY `Name_20` (`Name`,`Date`),
  FULLTEXT KEY `Name_21` (`Name`,`Date`),
  FULLTEXT KEY `Name_22` (`Name`,`Date`),
  FULLTEXT KEY `Name_23` (`Name`,`Date`),
  FULLTEXT KEY `Name_24` (`Name`,`Date`),
  FULLTEXT KEY `Name_25` (`Name`,`Date`),
  FULLTEXT KEY `Name_26` (`Name`,`Date`),
  FULLTEXT KEY `Name_27` (`Name`,`Date`),
  FULLTEXT KEY `Name_28` (`Name`,`Date`),
  FULLTEXT KEY `Name_29` (`Name`,`Date`),
  FULLTEXT KEY `Name_30` (`Name`,`Date`),
  FULLTEXT KEY `Name_31` (`Name`,`Date`),
  FULLTEXT KEY `Name_32` (`Name`,`Date`),
  FULLTEXT KEY `Name_33` (`Name`,`Date`),
  FULLTEXT KEY `Name_34` (`Name`,`Date`),
  FULLTEXT KEY `Name_35` (`Name`,`Date`),
  FULLTEXT KEY `Name_36` (`Name`,`Date`),
  FULLTEXT KEY `Name_37` (`Name`,`Date`),
  FULLTEXT KEY `Name_38` (`Name`,`Date`),
  FULLTEXT KEY `Name_39` (`Name`,`Date`),
  FULLTEXT KEY `Name_40` (`Name`,`Date`),
  FULLTEXT KEY `Name_41` (`Name`,`Date`),
  FULLTEXT KEY `Name_42` (`Name`,`Date`),
  FULLTEXT KEY `Name_43` (`Name`,`Date`),
  FULLTEXT KEY `Name_44` (`Name`,`Date`),
  FULLTEXT KEY `Name_45` (`Name`,`Date`),
  FULLTEXT KEY `Name_46` (`Name`,`Date`),
  FULLTEXT KEY `Name_47` (`Name`,`Date`),
  FULLTEXT KEY `Name_48` (`Name`,`Date`),
  FULLTEXT KEY `Name_49` (`Name`,`Date`),
  FULLTEXT KEY `Name_50` (`Name`,`Date`),
  FULLTEXT KEY `Name_51` (`Name`,`Date`),
  FULLTEXT KEY `Name_52` (`Name`,`Date`),
  FULLTEXT KEY `Name_53` (`Name`,`Date`),
  FULLTEXT KEY `Name_54` (`Name`,`Date`),
  FULLTEXT KEY `Name_55` (`Name`,`Date`),
  FULLTEXT KEY `Name_56` (`Name`,`Date`),
  FULLTEXT KEY `Name_57` (`Name`,`Date`),
  FULLTEXT KEY `Name_58` (`Name`,`Date`),
  FULLTEXT KEY `Name_59` (`Name`,`Date`),
  FULLTEXT KEY `Name_60` (`Name`,`Date`),
  FULLTEXT KEY `Name_61` (`Name`,`Date`),
  FULLTEXT KEY `Name_62` (`Name`,`Date`),
  FULLTEXT KEY `Name_63` (`Name`,`Date`)
) ENGINE=InnoDB AUTO_INCREMENT=740 DEFAULT CHARSET=latin1;

-- Dumping data for table db_findme.data_customer: ~4 rows (approximately)
/*!40000 ALTER TABLE `data_customer` DISABLE KEYS */;
INSERT INTO `data_customer` (`id`, `no_customer`, `Name`, `Address`, `Status`, `Date`) VALUES
	(736, 1119871, 'AAN SETIAWAN', 'Jl Panjang 7-9 Kedoya Elok Plaza Bl DE/11Kedoya, Bandar Lampung,,Indonesia', 'PS', '5/14/2021'),
	(737, 1119872, 'ABID GHANI ARSA', 'Jl HR Rasuna Said Kav H 1-2 Puri Matari Bandar Lampung,12920,Indonesia', 'Belum PS', ''),
	(738, 1119873, 'ADE ARYA AL-HAFIZ', 'Jl Hayam Wuruk 3-RR RT 006/02 Bandar Lampung,,Indonesia', 'PS', '6/23/2021'),
	(739, 1119874, 'ARYA ARYA AL-HAFIZ', 'Jl Hayam Wuruk 3-RR RT 006/02 Bandar Lampung,,Indonesia', 'PS', '6/23/2021');
/*!40000 ALTER TABLE `data_customer` ENABLE KEYS */;

-- Dumping structure for table db_findme.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_findme.user: ~2 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
	(1, 'Rheya Fiargananta Tumanggor', 'rheya.ryan22@gmail.com', 'default11.jpg', '$2y$10$pH5z17OMUpSKlwaJSlPaXuLPpihcKn6DX.rc5z0MQIOC9.dXqunDS', 1, 1, 1657124560),
	(2, 'Trioreza Fuadi', 'trioreza12899@gmail.com', 'default.jpg', '$2y$10$/dQPO9G7IofA.IAVGJfZXefdmGGDT2jQpoQ2ExIGBaVE.0oKG8fOO', 2, 1, 1657169750);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Dumping structure for table db_findme.user_access_menu
CREATE TABLE IF NOT EXISTS `user_access_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table db_findme.user_access_menu: ~4 rows (approximately)
/*!40000 ALTER TABLE `user_access_menu` DISABLE KEYS */;
INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
	(1, 1, 1),
	(3, 2, 2),
	(4, 1, 3),
	(5, 1, 2);
/*!40000 ALTER TABLE `user_access_menu` ENABLE KEYS */;

-- Dumping structure for table db_findme.user_menu
CREATE TABLE IF NOT EXISTS `user_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table db_findme.user_menu: ~3 rows (approximately)
/*!40000 ALTER TABLE `user_menu` DISABLE KEYS */;
INSERT INTO `user_menu` (`id`, `menu`) VALUES
	(1, 'Admin'),
	(2, 'User'),
	(3, 'Menu');
/*!40000 ALTER TABLE `user_menu` ENABLE KEYS */;

-- Dumping structure for table db_findme.user_role
CREATE TABLE IF NOT EXISTS `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_findme.user_role: ~2 rows (approximately)
/*!40000 ALTER TABLE `user_role` DISABLE KEYS */;
INSERT INTO `user_role` (`id`, `role`) VALUES
	(1, 'Administrator'),
	(2, 'Client');
/*!40000 ALTER TABLE `user_role` ENABLE KEYS */;

-- Dumping structure for table db_findme.user_sub_menu
CREATE TABLE IF NOT EXISTS `user_sub_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table db_findme.user_sub_menu: ~6 rows (approximately)
/*!40000 ALTER TABLE `user_sub_menu` DISABLE KEYS */;
INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
	(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
	(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
	(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
	(4, 3, 'Menu Management', 'Menu', 'fas fa-fw fa-folder', 1),
	(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
	(6, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
	(10, 1, 'Import Data Customer', 'admin/data_customer', 'fas fa-fw fa-upload', 1),
	(11, 2, 'Data Customer', 'user/data_customer', 'fas fa-fw fa-user-tie', 1);
/*!40000 ALTER TABLE `user_sub_menu` ENABLE KEYS */;

-- Dumping structure for table db_findme.user_token
CREATE TABLE IF NOT EXISTS `user_token` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_findme.user_token: ~0 rows (approximately)
/*!40000 ALTER TABLE `user_token` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_token` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
