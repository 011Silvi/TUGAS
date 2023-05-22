-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: localhost    Database: datalengkap
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.27-MariaDB

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
-- Table structure for table `data_lengkap`
--

DROP TABLE IF EXISTS `data_lengkap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_lengkap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `jenis_pendaftaran` varchar(50) DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `nis` varchar(50) DEFAULT NULL,
  `nomor_peserta` varchar(50) DEFAULT NULL,
  `no_seri_shun` varchar(50) DEFAULT NULL,
  `no_seri_ijazah` varchar(50) DEFAULT NULL,
  `hobi` varchar(100) DEFAULT NULL,
  `cita_cita` varchar(100) DEFAULT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `berkebutuhan_khusus` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `dusun` varchar(50) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `tempat_tinggal` varchar(50) NOT NULL,
  `transportasi` varchar(50) NOT NULL,
  `nomor_hp` varchar(20) NOT NULL,
  `nomor_telepon` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `penerima_kip` varchar(10) NOT NULL,
  `no_kps` varchar(50) DEFAULT NULL,
  `kewarganegaraan` varchar(50) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `tahun_lahir_ayah` int(11) DEFAULT NULL,
  `pendidikan_ayah` varchar(50) DEFAULT NULL,
  `pekerjaan_ayah` varchar(50) DEFAULT NULL,
  `penghasilan_ayah` varchar(50) DEFAULT NULL,
  `kebutuhan_khusus_ayah` varchar(50) DEFAULT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `tahun_lahir_ibu` int(11) DEFAULT NULL,
  `pendidikan_ibu` varchar(255) DEFAULT NULL,
  `pekerjaan_ibu` varchar(255) DEFAULT NULL,
  `penghasilan_ibu` varchar(255) DEFAULT NULL,
  `kebutuhan_khusus_ibu` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_lengkap`
--

LOCK TABLES `data_lengkap` WRITE;
/*!40000 ALTER TABLE `data_lengkap` DISABLE KEYS */;
INSERT INTO `data_lengkap` VALUES (1,'2023-05-15','Baru','2023-05-02','21082010011','011','21011','2108201','Menyanyi','Programmer','Silvia Ayu Ningtyas','Perempuan','0065719946','3578036407030003','SURABAYA','2003-07-24','ISLAM','Tidak','JL. NGINDEN GG III C NO 31 C','4','5','-','NGINDEN JANGKUNGAN','SUKOLILO','60118','Bersama Orang Tua','Kendaraan Pribadi','08993767231','08993767231','21082010011@student.upnjatim.ac.id','Tidak','-','Warga Negara Indonesia (WNI)','Zainul Arifin',1983,'SLTA','Wiraswasta','1-3 Juta','Tidak','Kusnul Hanifah',1980,'SLTA','Tidak Bekerja','0-1 Juta','Tidak'),(2,'2023-05-22','Baru ','2023-05-01','21082010011','2010011','21082010011','210820011','Memasak','Web Development','Silvia Ayu Ningtyas','Perempuan','00657201989','3578067807030003','SURABAYA','2003-07-24','ISLAM','Tidak','JL. Rungkut Alang Alang No. 23','2','5','-','Rungkut','Kali Rungkut','60118','Bersama Orang Tua','Kendaraan Pribadi','08993767231','-','21082010011@student.upnjatim.ac.id','Tidak','-','Warga Negara Indonesia (WNI)','Zainul Arifin',1983,'SLTA','Wiraswasta','1-3 Jt','Tidak','Kusnul Hanifah',1980,'SLTA','Tidak Bekerja','0-1 Jt','Tidak');
/*!40000 ALTER TABLE `data_lengkap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin123'),(2,'silviaayu','12345'),(3,'silviaayun','123456');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'datalengkap'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-23  4:41:46
