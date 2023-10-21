/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.4.28-MariaDB : Database - db_rental
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_rental` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `db_rental`;

/*Table structure for table `tb_customers` */

DROP TABLE IF EXISTS `tb_customers`;

CREATE TABLE `tb_customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(20) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `foto_sim` varchar(100) DEFAULT NULL,
  `nomor_hp` varchar(15) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nik` (`nik`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `tb_customers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tb_customers` */

insert  into `tb_customers`(`id`,`nik`,`nama`,`alamat`,`tanggal_lahir`,`foto_sim`,`nomor_hp`,`user_id`) values 
(1,'12345','Ngakan Made Wisnu Mahesa Adnyana','Gianyar','0000-00-00','','082134567899',1),
(2,'12346','Rafi Faridz Utomo','Tabanan','0000-00-00','','082134567779',3),
(3,'12347','Fikri Bintang Achmada','Denpasar','0000-00-00','','082134567669',4);

/*Table structure for table `tb_driver` */

DROP TABLE IF EXISTS `tb_driver`;

CREATE TABLE `tb_driver` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(20) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `foto_sim` varchar(100) DEFAULT NULL,
  `nomor_hp` varchar(15) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nik` (`nik`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `tb_driver_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tb_driver` */

insert  into `tb_driver`(`id`,`nik`,`nama`,`alamat`,`tanggal_lahir`,`foto_sim`,`nomor_hp`,`user_id`) values 
(1,'12348','Kevin Sanjaya','Klungkung','0000-00-00','','082134567899',5),
(2,'12349','Ahmad Julianto','Buleleng','0000-00-00','','082134567779',6),
(3,'12340','Dewa Sidan','Denpasar','0000-00-00','','082134567669',7);

/*Table structure for table `tb_feedback` */

DROP TABLE IF EXISTS `tb_feedback`;

CREATE TABLE `tb_feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ulasan` varchar(200) DEFAULT NULL,
  `penilaian` enum('1','2','3','4','5') DEFAULT NULL,
  `masukan` varchar(200) DEFAULT NULL,
  `id_pesanan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pesanan` (`id_pesanan`),
  CONSTRAINT `tb_feedback_ibfk_1` FOREIGN KEY (`id_pesanan`) REFERENCES `tb_pesanan` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tb_feedback` */

/*Table structure for table `tb_kategori` */

DROP TABLE IF EXISTS `tb_kategori`;

CREATE TABLE `tb_kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_kategori` varchar(10) DEFAULT NULL,
  `jenis_kendaraan` varchar(100) DEFAULT NULL,
  `merk` varchar(100) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kode_kategori` (`kode_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tb_kategori` */

insert  into `tb_kategori`(`id`,`kode_kategori`,`jenis_kendaraan`,`merk`,`jumlah`) values 
(1,'KMB1','Roda 4','Honda',12),
(2,'KMB2','Roda 2','Yamaha',12),
(3,'KMB3','Roda 4','Toyota',12),
(7,'KMB4','Roda 4','Honda',12),
(8,'KMB5','Roda 2','Yamaha',12),
(9,'KMB6','Roda 4','Toyota',12),
(10,'KMB7','Roda 2','Yamaha',12),
(11,'KMB8','Roda 4','Toyota',10),
(12,'KMB9','Roda 4','Honda',12),
(13,'KMB10','Roda 2','Yamaha',12),
(14,'KMB11','Roda 4','Toyota',12),
(17,'KMB14','Roda 4','Toyota',4);

/*Table structure for table `tb_kendaraan` */

DROP TABLE IF EXISTS `tb_kendaraan`;

CREATE TABLE `tb_kendaraan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_plat` varchar(10) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tahun` varchar(100) DEFAULT NULL,
  `status` enum('tersedia','tidak_tersedia') DEFAULT NULL,
  `kategori_kode` varchar(10) DEFAULT NULL,
  `harga_per_jam` int(11) DEFAULT NULL,
  `harga_dgn_sopir_bbm` int(11) DEFAULT NULL,
  `deskripsi` varchar(200) DEFAULT NULL,
  `transmisi` varchar(20) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kategori_kode` (`kategori_kode`),
  CONSTRAINT `tb_kendaraan_ibfk_1` FOREIGN KEY (`kategori_kode`) REFERENCES `tb_kategori` (`kode_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tb_kendaraan` */

insert  into `tb_kendaraan`(`id`,`nomor_plat`,`nama`,`tahun`,`status`,`kategori_kode`,`harga_per_jam`,`harga_dgn_sopir_bbm`,`deskripsi`,`transmisi`,`image`) values 
(16,'DK 9876 AC','Jazz','2018','tersedia','KMB1',25000,25000,'-','Automatic','dekstop.png'),
(17,'DK 9876 AC','Jazz','2018','tersedia','KMB1',25000,25000,'-','Manual/Automatic',NULL),
(18,'DK 8594 AC','Avanza','2008','tersedia','KMB1',25000,25000,'-','Manual/Automatic',NULL),
(19,'DK 4534 AC','Alphard','2012','tidak_tersedia','KMB2',25000,25000,'-','Manual/Automatic',NULL),
(20,'DK 3455 AC','Xenia','2012','tersedia','KMB1',25000,25000,'-','Manual/Automatic',NULL),
(21,'DK 2312 AC','HR-V','2007','tersedia','KMB2',25000,25000,'-','Manual/Automatic',NULL),
(22,'DK 2323 AC','Innova','2008','tersedia','KMB3',25000,25000,'-','Manual/Automatic',NULL),
(23,'DK 1244 AC','Fortuner','2008','tidak_tersedia','KMB1',45000,25000,'-','Manual/Automatic',''),
(24,'DK 5444 AC','Ayla','2018','tersedia','KMB2',25000,25000,'-','Manual/Automatic',NULL),
(25,'DK 6767 AC','Ayla','2012','tersedia','KMB3',25000,25000,'-','Manual/Automatic',NULL),
(26,'DK 0459 AC','Jazz','2007','tersedia','KMB3',25000,25000,'-','Manual/Automatic',NULL),
(27,'DK 5494 AC','Fortuner','2018','tidak_tersedia','KMB2',25000,25000,'-','Manual/Automatic',NULL),
(29,'DK 2309 AC','Nmax','2018','tersedia','KMB2',25000,25000,'-','Manual/Automatic',NULL),
(30,'DK 2322 AC','PCX','2007','tersedia','KMB1',25000,25000,'-','Manual/Automatic',NULL),
(31,'DK 1414 KB','Jely','2003','tersedia','KMB2',20000,25000,'Mobil Jely tahun 2003 + Surat2 Lengkap + Pajak on','Manual','');

/*Table structure for table `tb_pesanan` */

DROP TABLE IF EXISTS `tb_pesanan`;

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_pesanan` varchar(50) DEFAULT NULL,
  `tanggal_ambil` date DEFAULT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  `nik_cust` varchar(20) DEFAULT NULL,
  `nik_driver` varchar(20) DEFAULT NULL,
  `kendaraan_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nik_cust` (`nik_cust`),
  KEY `nik_driver` (`nik_driver`),
  KEY `kendaraan_id` (`kendaraan_id`),
  CONSTRAINT `tb_pesanan_ibfk_1` FOREIGN KEY (`nik_cust`) REFERENCES `tb_customers` (`nik`),
  CONSTRAINT `tb_pesanan_ibfk_2` FOREIGN KEY (`nik_driver`) REFERENCES `tb_driver` (`nik`),
  CONSTRAINT `tb_pesanan_ibfk_3` FOREIGN KEY (`kendaraan_id`) REFERENCES `tb_kendaraan` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tb_pesanan` */

/*Table structure for table `tb_transaksi` */

DROP TABLE IF EXISTS `tb_transaksi`;

CREATE TABLE `tb_transaksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_transaksi` varchar(20) DEFAULT NULL,
  `jumlah_pembayaran` int(11) DEFAULT NULL,
  `tanggal_transaksi` date DEFAULT NULL,
  `bukti_transaksi` varchar(100) DEFAULT NULL,
  `status_pembayaran` enum('selesai','belum_melakukan_pembayaran') DEFAULT NULL,
  `pesanan_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pesanan_id` (`pesanan_id`),
  CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`pesanan_id`) REFERENCES `tb_pesanan` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tb_transaksi` */

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tb_user` */

insert  into `tb_user`(`id`,`username`,`password`) values 
(1,'wisnu','wisnu'),
(2,'admin','admin'),
(3,'rafi','rafi'),
(4,'fikri','fikri'),
(5,'kevin','kevin'),
(6,'ahmad','ahmad'),
(7,'sidan','sidan'),
(8,'angga','angga');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
