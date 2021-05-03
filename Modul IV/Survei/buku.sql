/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.14-MariaDB : Database - buku
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`buku` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `buku`;

/*Table structure for table `favorit` */

DROP TABLE IF EXISTS `favorit`;

CREATE TABLE `favorit` (
  `Nama` varchar(20) DEFAULT NULL,
  `Genre_Buku` varchar(12) DEFAULT NULL,
  `No` int(3) unsigned zerofill NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4;

/*Data for the table `favorit` */

insert  into `favorit`(`Nama`,`Genre_Buku`,`No`) values 
('Galang','Sejarah',001),
('Oskar','Sejarah',002),
('Queen','Romansa',003),
('Kevin','Fiksi Ilmiah',004),
('Prasetyo','Autobiografi',005),
('Sari','Romansa',006),
('Novi','Romansa',007),
('Caturangga','Sejarah',008),
('Yani','Autobiografi',009),
('Nugraha','Sejarah',010),
('Mala','Puisi',011),
('Lembah','Puisi',012),
('Ian','Sejarah',013),
('Hery','Sejarah',014),
('Raharja','Fiksi Ilmiah',015),
('Nadia','Romansa',016),
('Vanya','Fiksi Ilmiah',017),
('Aisyah','Fiksi Ilmiah',018),
('Kanda','Romansa',019),
('Yessi','Romansa',020),
('Rama','Fiksi Ilmiah',021),
('Halima','Puisi',022),
('Cawisono','Puisi',023),
('Ulva','Puisi',024),
('Zelaya','Fiksi Ilmiah',025),
('Nurul','Fiksi Ilmiah',026),
('Joko','Puisi',027),
('Catur','Romansa',028),
('Hasna','Romansa',029),
('Yuliana','Puisi',030),
('Emong','Puisi',031),
('Faizah','Autobiografi',032),
('Omar','Autobiografi',033),
('Ina','Autobiografi',034),
('Daru','Puisi',035),
('Jessica','Puisi',036),
('Diana','Romansa',037),
('Fitria','Romansa',038),
('Clara','Romansa',039),
('Karimah','Autobiografi',040),
('Bambang','Fiksi Ilmiah',041),
('Rika','Fiksi Ilmiah',042),
('Michelle','Romansa',043),
('Calista','Romansa',044),
('Jane','Fiksi Ilmiah',045),
('Carla','Fiksi Ilmiah',046),
('Rika','Romansa',047),
('Gilda','Puisi',048),
('Pandu','Puisi',049),
('Agnes','Romansa',050),
('Tina','Romansa',051),
('Ratih','Romansa',052),
('Hari','Romansa',053),
('Vanesa','Autobiografi',054),
('Aurora','Autobiografi',055),
('Karimah','Romansa',056),
('Salsa','Fiksi Ilmiah',057),
('Panji','Puisi',058),
('Cahyanto','Puisi',059),
('Dimas','Puisi',060),
('Yahya','Fiksi Ilmiah',061),
('Kayla','Fiksi Ilmiah',062),
('Genta','Fiksi Ilmiah',063),
('Rangga','Romansa',064),
('Rahmi','Romansa',065),
('Victoria','Puisi',066),
('Lantar','Puisi',067),
('Maria','Puisi',068),
('Puspita','Puisi',069),
('Alika','Romansa',070),
('Handayani','Romansa',071),
('Paulin','Romansa',072),
('Gina','Autobiografi',073),
('Vega','Autobiografi',074),
('Natalia','Autobiografi',075),
('Sari','Romansa',076),
('Permadi','Romansa',077),
('Christ','Romansa',078),
('Felicia','Fiksi Ilmiah',079),
('Siska','Fiksi Ilmiah',080),
('Yuliantina','Fiksi Ilmiah',081),
('Novitasari','Puisi',082),
('Josep','Puisi',083),
('Oni','Puisi',084),
('Mutia','Fiksi Ilmiah',085),
('Mikael','Fiksi Ilmiah',086),
('Rio','Autobiografi',087),
('Elvina','Autobiografi',088),
('Cecep','Autobiografi',089),
('Siti','Puisi',090),
('Wardi','Romansa',091),
('Iriana','Romansa',092),
('Citra','Puisi',093),
('Lala','Puisi',094),
('Tiara','Puisi',095),
('Lestari','Romansa',096),
('Syahrini','Romansa',097),
('Hartati','Autobiografi',098),
('Setiawan','Fiksi Ilmiah',099),
('Tania','Fiksi Ilmiah',100);

/*Table structure for table `jumlah` */

DROP TABLE IF EXISTS `jumlah`;

/*!50001 DROP VIEW IF EXISTS `jumlah` */;
/*!50001 DROP TABLE IF EXISTS `jumlah` */;

/*!50001 CREATE TABLE  `jumlah`(
 `Genre Buku` varchar(12) ,
 `Jumlah` bigint(21) 
)*/;

/*View structure for view jumlah */

/*!50001 DROP TABLE IF EXISTS `jumlah` */;
/*!50001 DROP VIEW IF EXISTS `jumlah` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `jumlah` AS select `favorit`.`Genre_Buku` AS `Genre Buku`,count(`favorit`.`Genre_Buku`) AS `Jumlah` from `favorit` group by `favorit`.`Genre_Buku` */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
