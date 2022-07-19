-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           5.7.33 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour blog_art
CREATE DATABASE IF NOT EXISTS `blog_art` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `blog_art`;

-- Listage de la structure de la table blog_art. comments
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_name` varchar(200) NOT NULL DEFAULT '',
  `creation_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK__creations` (`creation_id`),
  CONSTRAINT `FK__creations` FOREIGN KEY (`creation_id`) REFERENCES `creations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table blog_art.comments : ~0 rows (environ)
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;

-- Listage de la structure de la table blog_art. creations
CREATE TABLE IF NOT EXISTS `creations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL DEFAULT '',
  `image` tinytext NOT NULL,
  `description` mediumtext NOT NULL,
  `creation_date` date DEFAULT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '0',
  `visibility` char(200) DEFAULT NULL,
  `section` char(50) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK__users` (`user_id`),
  CONSTRAINT `FK__users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table blog_art.creations : ~8 rows (environ)
/*!40000 ALTER TABLE `creations` DISABLE KEYS */;
INSERT INTO `creations` (`id`, `title`, `image`, `description`, `creation_date`, `enabled`, `visibility`, `section`, `user_id`) VALUES
	(1, 'first', 'pexelsphoto794079.jpeg', 'lorem ipsum', '2022-04-15', 1, 'home', '1.left', 1),
	(2, '1section', 'pexelsphoto696680.jpeg', '2nd image', '2022-06-21', 1, 'home', '1.right', 1),
	(3, 'Get inspired', 'pexelsphoto1647972.jpeg', '                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. /Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2022-06-21', 1, 'home', '2', 1),
	(4, 'third', 'pexelsphoto1451482.jpeg', 'blllaauenebyebvveye ', '2022-06-26', 1, 'home', '3.left', 1),
	(5, 'four', 'pexelsphoto730480.jpeg', 'From a young age, my true passion has always been to see and experience as much of the world as possible.', '2022-06-26', 1, 'home', '3.right', 1),
	(6, 'five', 'pexelsphoto1670845.jpeg', 'Most of all we promise we will never rush you away from a magnificent vista in a national park or an unforgettable meal at the pub. We believe one shouldn\'t have to recover from their travels! Our goal is for our guests', '2022-06-26', 1, 'home', '4', 1),
	(7, 'Meet AutoManage, the best AI management tools', 'blog-01.jpg', 'Lorem Ipsum is simply dummy text of the printing and', '2022-06-28', 1, 'gallery', NULL, 1),
	(8, 'How to earn more money as a wellness coach', 'blog-02.jpg', 'lorem', '2022-06-28', 1, 'gallery', NULL, 1),
	(9, 'The no-fuss guide to upselling and cross selling', 'blog-03.jpg', 'Lorem Ipsum is simply dummy text of the printing and', '2022-06-28', 1, 'gallery', NULL, 1);
/*!40000 ALTER TABLE `creations` ENABLE KEYS */;

-- Listage de la structure de la table blog_art. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `fullname` varchar(512) DEFAULT NULL,
  `email` varchar(250) NOT NULL,
  `birthday` date DEFAULT NULL,
  `type` char(50) NOT NULL,
  `password` varchar(512) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table blog_art.users : ~0 rows (environ)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `fullname`, `email`, `birthday`, `type`, `password`) VALUES
	(1, 'su', 'su', 'su@gmail.com', '2001-04-15', 'su', 'su');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
