/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.24-MariaDB : Database - rumahsakit
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`rumahsakit` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `rumahsakit`;

/*Table structure for table `dokter` */

DROP TABLE IF EXISTS `dokter`;

CREATE TABLE `dokter` (
  `kd_dokter` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama_dokter` varchar(128) DEFAULT NULL,
  `jumlah_pasien_perdokter` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`kd_dokter`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `dokter` */

insert  into `dokter`(`kd_dokter`,`nama_dokter`,`jumlah_pasien_perdokter`) values 
(1,'Dr. DERYANT IMAGODEI NORON',2),
(2,'Dr. PANJI GUGAH BHASKARA, Sp. PD',0),
(3,'Dr. MOHAMMAD WAHYU F. Sp. OG',0);

/*Table structure for table `pasien` */

DROP TABLE IF EXISTS `pasien`;

CREATE TABLE `pasien` (
  `kd_pasien` bigint(20) NOT NULL AUTO_INCREMENT,
  `no_registrasi` bigint(20) DEFAULT NULL,
  `no_identitas` bigint(20) DEFAULT NULL,
  `kd_dokter` bigint(20) DEFAULT NULL,
  `nama_pasien` varchar(128) DEFAULT NULL,
  `jenis_kelamin` enum('Laki - Laki','Perempuan') DEFAULT NULL,
  `kelompok_pasien` enum('BPJS','Umum/Pribadi') DEFAULT NULL,
  `tgl_registrasi` date DEFAULT NULL,
  `kd_ruangan` bigint(20) DEFAULT NULL,
  `diaknosis` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`kd_pasien`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `pasien` */

insert  into `pasien`(`kd_pasien`,`no_registrasi`,`no_identitas`,`kd_dokter`,`nama_pasien`,`jenis_kelamin`,`kelompok_pasien`,`tgl_registrasi`,`kd_ruangan`,`diaknosis`) values 
(1,NULL,3305678765456765,1,'CHAERUNNISA','Perempuan','BPJS','2022-11-28',1,'Other Specified Counselling'),
(7,NULL,3305123009990004,1,'WAHYU SETIYANTO','Laki - Laki','BPJS','2022-11-30',1,'Other Specified Counselling');

/*Table structure for table `ruangan` */

DROP TABLE IF EXISTS `ruangan`;

CREATE TABLE `ruangan` (
  `kd_ruangan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ruangan` varchar(128) DEFAULT NULL,
  `jumlah_pasien_peruangan` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`kd_ruangan`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `ruangan` */

insert  into `ruangan`(`kd_ruangan`,`nama_ruangan`,`jumlah_pasien_peruangan`) values 
(1,'IGD UMUM',NULL),
(2,'Poliklinik Penyakit Dalam',NULL),
(3,'Poliklinik Kebidanan & Kandungan',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
