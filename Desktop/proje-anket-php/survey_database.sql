-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 09 Haz 2022, 08:40:51
-- Sunucu sürümü: 5.7.36
-- PHP Sürümü: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `survey_database`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin_type` int(11) NOT NULL DEFAULT '0',
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `name`, `surname`, `email`, `password`, `admin_type`, `create_date`) VALUES
(1, 'superadmin', 'super', 'admin', 'superadmin@anket.tech', 'e3fed16a5d96552018762bdc5860a874', 2, '2022-05-27 11:51:38'),
(5, 'dogan', 'doganTest', 'usta', 'dgncnusta@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '2022-05-30 16:26:17'),
(6, 'dogan', 'doganTest', 'admin', 'm.furkanyener@gmail.com', 'e3fed16a5d96552018762bdc5860a874', 0, '2022-06-08 20:25:02');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `answers`
--

DROP TABLE IF EXISTS `answers`;
CREATE TABLE IF NOT EXISTS `answers` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `q_id` int(11) NOT NULL,
  `answer_title` varchar(500) CHARACTER SET utf8 NOT NULL,
  `answer_type` varchar(6) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`answer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `answers`
--

INSERT INTO `answers` (`answer_id`, `q_id`, `answer_title`, `answer_type`) VALUES
(1, 1, 'ahmet', 'radio'),
(2, 1, 'mehmet', 'radio'),
(3, 2, '23', 'check'),
(4, 2, '45', 'check'),
(5, 3, 'evet', 'check'),
(6, 3, 'hayır', 'check'),
(7, 4, 'fener', 'radio'),
(8, 4, 'cimbom', 'radio'),
(9, 5, 'kasaba', 'radio'),
(10, 5, 'izmir', 'radio'),
(11, 6, '23', 'check'),
(12, 6, '45', 'check'),
(13, 7, 'asdfdsaf', 'check'),
(14, 7, 'asfasdf', 'check'),
(15, 8, 'şimdi', 'check'),
(16, 8, 'sonra', 'check'),
(17, 9, 'evet', 'radio'),
(18, 9, 'hayır', 'radio');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_id` int(11) NOT NULL,
  `question_title` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `questions`
--

INSERT INTO `questions` (`question_id`, `s_id`, `question_title`) VALUES
(1, 1, 'senin adın ne ?'),
(2, 1, 'kaç yaşındasın ?'),
(3, 2, 'yemek yaptın mı ?'),
(4, 2, 'hangi takımlısın ?'),
(5, 3, 'nerelisin ?'),
(6, 3, 'yaşın ?'),
(7, 4, 'senin adın ne ?'),
(8, 4, 'ne geliyorsun ?'),
(9, 5, 'yemek yaptın mı ?');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `surveys`
--

DROP TABLE IF EXISTS `surveys`;
CREATE TABLE IF NOT EXISTS `surveys` (
  `survey_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `survey_title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `survey_desc` varchar(255) CHARACTER SET utf8 NOT NULL,
  `survey_start_date` date NOT NULL,
  `survey_finish_date` date NOT NULL,
  `survey_create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`survey_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `surveys`
--

INSERT INTO `surveys` (`survey_id`, `u_id`, `survey_title`, `survey_desc`, `survey_start_date`, `survey_finish_date`, `survey_create_date`) VALUES
(1, 1, 'deneme anketi 1', 'deneme anketi 1 aciklama', '2022-05-28', '2022-05-29', '2022-05-27 14:24:51'),
(2, 1, 'deneme anketi 2', 'deneme anketi 2 aciklama', '2022-06-01', '2022-06-02', '2022-05-27 14:25:58'),
(3, 1, 'deneme anketi 3', 'aciklama', '2022-06-05', '2022-06-04', '2022-05-27 16:35:42'),
(4, 1, 'deneme anketi 4', 'deneme anketi 4 aciklama', '2022-06-01', '2022-06-01', '2022-05-27 16:40:26'),
(5, 1, 'deneme anketi 5', 'aciklama', '2022-06-05', '2022-06-05', '2022-05-27 16:52:40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
