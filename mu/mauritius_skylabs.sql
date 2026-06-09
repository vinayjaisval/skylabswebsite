-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2023 at 03:05 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mauritius_skylabs`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `role` text NOT NULL,
  `active` varchar(32) DEFAULT NULL,
  `bg_color` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`id`, `name`, `link`, `photo`, `role`, `active`, `bg_color`) VALUES
(1, 'Solisyon GIS', 'gis-solution', 'gis.png', '<p>Delivre pouvwa enf&ograve;masyon jewografik ak solisyon gis nou yo. Vizyalize, analize, ak optimize done ki baze sou kote pou pran desizyon enf&ograve;me ak jesyon resous.</p>\r\n', 'Active', 'rgb(191, 192, 255)'),
(2, 'Telematik', 'telematics', 'smart.png', '<p>Solisyon Jesyon Fl&ograve;t Avanse nou an se epit&ograve;m inovasyon, prezante kapasite avanse ki founi bay div&egrave;s z&ograve;n ak aktivite tankou swiv, siveyans, or&egrave;, analytics, siveyans, planifikasyon, ak plis ank&ograve;.</p>\r\n', 'Active', '#b8f1d0'),
(3, 'Solisyon Vil Entelijan', 'smart-city-solution', 'city.png', '<p>Transf&ograve;me peyizaj iben nan entelijan, anviw&ograve;nman ki konekte youn ak l&ograve;t ak solisyon inovat&egrave; smart city nou yo. Amelyore jesyon en&egrave;ji, rediksyon dech&egrave;, sekirite piblik, ak angajman sitwayen pou yon eksperyans lavi iben vr&egrave;man avanse.</p>\r\n', 'Active', 'rgb(191, 192, 255)'),
(4, 'Optimize Fòs Travay ou ak Operasyon HR', 'optimize-your-workforce-and-hr-operations', 'mnpower.png', '<p>Elve f&ograve;s travay ou nan s&egrave;vis konsiltasyon konpl&egrave; nou yo, ki kouvri akizisyon talan, f&ograve;masyon, jesyon p&egrave;f&ograve;mans, ak plis ank&ograve;. Rasyonalize pwosesis HR ou pou rekritman efikas, onboarding, devlopman talan, ak evalyasyon p&egrave;f&ograve;mans.</p>\r\n', 'Active', 'rgb(255, 224, 175)'),
(5, 'IoT ak LORA', 'iot-lora', 'lora.jpg', '<p>Skylabs Solisyon, yon lid&egrave; pyonye, ekselan nan bay iot ak lora solisyon ki vr&egrave;man nan yon klas pw&ograve;p yo. Av&egrave;k yon fondasyon solid nan teknoloji sa yo, Skylabs pwolonje eksp&egrave;tiz li yo ofri D&egrave;nye kri iot ak lora solisyon, ranf&ograve;se biznis nan tout gwos&egrave;.</p>\r\n', 'Active', 'rgb(219, 199, 255)'),
(6, 'SISTÈM ERP', 'erp-system', 'erp.png', '<p>Eksperyans entegrasyon san pwobl&egrave;m atrav&egrave; &ograve;ganizasyon ou ak sist&egrave;m ERP nou yo. Amelyore kolaborasyon ak koule done ant depatman, ki soti nan finans ak ch&egrave;n ekipman pou fabrikasyon ak s&egrave;vis kliyan.</p>\r\n', 'Active', 'rgb(255, 205, 214)'),
(7, 'Prezante SkyBot', 'introducing-skybot', 'logo.png', '<p>Fine-tune chatbot ou av&egrave;k fasilite l&egrave; l s&egrave;vi av&egrave;k paj anviw&ograve;nman nou an. Chatbot inovasyon nan dw&egrave;t ou!<br />\r\nAi Ki Mache Ak Teknoloji<br />\r\nRepons Rapid<br />\r\nEksperyans Itilizat&egrave; Ultim<br />\r\nEntegrasyon Fasil<br />\r\nJwenn Rezolisyon @ nenp&ograve;t L&egrave;<br />\r\nSesyon Kominikasyon Ent&egrave;aktif<br />\r\nEntegre SIT ENT&Egrave;N&Egrave;T URL</p>\r\n', 'Active', 'rgb(191, 192, 255)');

-- --------------------------------------------------------

--
-- Table structure for table `lanuage`
--

CREATE TABLE `lanuage` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `role` text DEFAULT NULL,
  `active` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lanuage`
--

INSERT INTO `lanuage` (`id`, `name`, `link`, `photo`, `role`, `active`) VALUES
(1, 'English', 'https://english.skylabsapp.com/', 'en.png', 'Hii1', 'Active'),
(2, 'Mauritius', 'https://mauritius.skylabsapp.com/', 'fr.png', 'Hii', 'Active'),
(3, 'Arabic', '#', 'cn.png', 'Hii', 'Active'),
(4, 'Korea', '#', 'ko.png', 'Hii', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `role` text DEFAULT NULL,
  `active` varchar(32) DEFAULT NULL,
  `type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `name`, `link`, `photo`, `role`, `active`, `type`) VALUES
(1, 's1', '#', 'jikoo.png', 'ss', 'Active', 1),
(2, 'Digify', '#', 'digifys1.jpg', 's', 'Active', 1),
(4, 's', '#', 'down1.jpg', 's', 'Active', 1),
(5, 's', '#', 'fast1.jpg', 's', 'Active', 1),
(6, 'GSM/GPS/IRNSS', '#', 'g-icon.png', 'GSM/GPS/IRNSS', 'Active', 2),
(7, 'Water Resistant', '#', 'water-r.png', 'ss', 'Active', 2),
(8, 'Real Time Tracking', '#', 'real-time.png', 'ss', 'Active', 2),
(9, 'Build in GPS/GSM', '#', 'gps-gsm.png', 'ss', 'Active', 2),
(10, 'Build in Battery', '#', 'battery.png', 'ss', 'Active', 2),
(11, 'Support Dual Band', '#', 'dual.png', 'ss', 'Active', 2),
(12, 'Wide range voltage input', '#', 'voltage.png', 'ss', 'Active', 2),
(13, 'High integration design', '#', 'deisgn.png', 'ss', 'Active', 2),
(14, 'Remote cut recover engine', '#', 'engine.png', 'ss', 'Active', 2),
(15, 'Emergency alert', '#', 'alert.png', 'ww', 'Active', 2),
(16, 'Build in eSim', '#', 'sim.png', 'ss', 'Active', 2),
(17, 'msme', '#', 'msme.png', 'ss', 'Active', 3),
(18, 'Make In India', '#', 'make-in-india.png', 'ss', 'Active', 3),
(20, 'ISO Certified', '#', 'iso-certified.png', 'ss', 'Active', 3),
(21, 'ADIE', '#', 'ADIE_BROWSWON.jpg', 'ss', 'Active', 4),
(22, 'Aeris', '#', 'AERIS.jpg', 'ss', 'Active', 4),
(23, 'aviat', '#', 'AVIAT.jpg', 'ss', 'Active', 4),
(24, 'client', '#', 'DDA.jpg', 'ss', 'Active', 4),
(25, 'dda', '#', 'DR_JAIN.jpg', 'ss', 'Active', 4),
(26, 's', '#', 'DSCL.jpg', 's', 'Active', 4),
(27, 's', '#', 'ESSEL_GROUP.jpg', 's', 'Active', 4),
(28, 's', '#', 'FASTRACKERZ.jpg', 'a', 'Active', 4),
(29, 's', '#', 'FASTWAY.jpg', 's', 'Active', 4),
(30, 's', '#', 'FENESTA.jpg', 's', 'Active', 4),
(31, 's', '#', 'GARUDA.jpg', 's', 'Active', 4),
(32, 's', '#', 'GENESIS_GLOBAL.jpg', 's', 'Active', 4),
(33, 's', '#', 'HERO_CYCLE.jpg', 's', 'Active', 4),
(34, 's', '#', 'HEWLETT_PACKARD.jpg', 's', 'Active', 4),
(35, 's', '#', 'JINDAL.jpg', 's', 'Active', 4),
(36, 's', '#', 'MATRIX.png', 's', 'Active', 4),
(37, 's', '#', 'MYCAB.png', 's', 'Active', 4),
(38, 's', '#', 'NIS_GLONASS.png', 's', 'Active', 4),
(39, 's', '#', 'NMC.png', 's', 'Active', 4),
(40, 's', '#', 'NSTPL.png', 's', 'Active', 4),
(41, 's', '#', 'TATA.png', 's', 'Active', 4),
(42, 's', '#', 'VODAFONE.png', 's', 'Active', 4),
(43, 's', '#', 'WAVE_INFRA.png', 's', 'Active', 4),
(44, 'Alpha Traders', '#', 'alfatrade1.png', 's', 'Active', 1),
(45, 'Digivine', '#', 'd21.jpg', 's', 'Active', 1),
(46, 'Geo Scan', '#', 'geoscan.png', 's', 'Active', 1),
(47, 'Green Road', '#', 'GreenRoad1.png', 's', 'Active', 1),
(48, 'HUCPL', '#', 'hucpl1.png', 's', 'Active', 1),
(49, 'Mobolite', '#', 'Mobiloitte1.png', 'ss', 'Active', 1),
(50, 'Nevion', '#', 'nevion1.png', 's', 'Active', 1),
(51, 'Romestra', '#', 'romestra.png', 's', 'Active', 1),
(52, 'Sensorise', '#', 'Sensorise1.png', 's', 'Active', 1),
(53, 'visionLabs', '#', 'visionlabs.png', 's', 'Active', 1),
(54, 'ss', '#', 'mmd_copy.png', 'ss', 'Active', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keyword` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_slug`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(1, 'Blogs', 'blogs', 'Blogs', '', ''),
(2, 'Success Story', 'success-story', 'Success Story', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_photo`
--

CREATE TABLE `tbl_category_photo` (
  `p_category_id` int(11) NOT NULL,
  `p_category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_category_photo`
--

INSERT INTO `tbl_category_photo` (`p_category_id`, `p_category_name`, `status`) VALUES
(1, 'Commercial', 'Active'),
(2, 'Design and Architecture', 'Active'),
(3, 'Technology', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_prod`
--

CREATE TABLE `tbl_category_prod` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `category_slug` varchar(255) DEFAULT NULL,
  `category_perc` double NOT NULL,
  `photo` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `cat_order` double NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keyword` mediumtext DEFAULT NULL,
  `meta_description` mediumtext DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category_prod`
--

INSERT INTO `tbl_category_prod` (`category_id`, `category_name`, `category_slug`, `category_perc`, `photo`, `description`, `cat_order`, `meta_title`, `meta_keyword`, `meta_description`, `status`) VALUES
(19, 'Tracking Veyikil', 'gps-hardware', 0, 'almond1.png', '', 1, 'Vehicle Tracking', '', '', 1),
(20, 'RFID Reader', 'rfid-reader', 0, 'logo2.png', '<p>Skylabs espesyalize nan bay solisyon versatile RFID lekt&egrave; ki san pwobl&egrave;m founi nan yon pak&egrave;t bezwen.Teknoloji inovat&egrave; nou an se pi bon match ou pou solisyon RFID efikas ak serye, ki f&egrave; operasyon ou yo pi entelijan ak pi efikas.</p>\r\n\r\n<h4>Sist&egrave;m RFID ba-frekans:</h4>\r\n\r\n<p>Skylabs Solution ofri yon seri de sist&egrave;m RFID ba frekans, ki pwepare pou satisf&egrave; bezwen swiv ak idantifikasyon ou yo.Opere nan yon seri frekans nan 30 KHz a 500 KHz, ak 125 KHz se frekans tipik la, sist&egrave;m sa yo jwenn aplikasyon nan div&egrave;s endistri.Yo patikily&egrave;man efikas pou kontw&ograve;l aks&egrave;, swiv prezans, ak jesyon byen.</p>\r\n\r\n<h4>Karakteristik kle:</h4>\r\n\r\n<ul>\r\n	<li>Gamme frekans: 30 KHz a 500 KHz</li>\r\n	<li>Frekans tipik: 125 KHz</li>\r\n	<li>Ent&egrave;raksyon ki baze sou pwoksimite Aplikasyon pou</li>\r\n	<li>kominikasyon kout ranje</li>\r\n	<li>&nbsp;Kontw&ograve;l aks&egrave;, Suivi prezans, Jesyon Byen</li>\r\n</ul>\r\n\r\n<h4>Sist&egrave;m RFID segond&egrave;-frekans:</h4>\r\n\r\n<p>Ogmante kapasite w pou swiv ak sist&egrave;m RFID segond&egrave; frekans Skylabs Solution.Opere nan yon seri frekans 3 MHz a 30 MHz, ak frekans tipik la se 13.56 MHz, sist&egrave;m sa yo briye nan endistri ki mande echanj done efikas.Teknoloji RFID segond&egrave;-frekans yo souvan itilize nan swen sante pou swiv pasyan, jesyon bibliyot&egrave;k, ak optimize ch&egrave;n ekipman pou.</p>\r\n\r\n<h4>Karakteristik kle:</h4>\r\n\r\n<ul>\r\n	<li>Gamme frekans: 3 MHz a 30 MHz</li>\r\n	<li>Frekans tipik: 13.56 MHz</li>\r\n	<li>Kapasite amelyore lekti ak ekri</li>\r\n	<li>To Transf&egrave; Done Pi vit</li>\r\n	<li>Aplikasyon: Swen Sante (Swiv Pasyan), Jesyon Bibliyot&egrave;k, Optimizasyon ch&egrave;n ekipman pou</li>\r\n</ul>\r\n\r\n<h4>Sist&egrave;m RFID UHF:</h4>\r\n\r\n<p>Eksperyans efikasite alont&egrave;m ak sist&egrave;m RFID UHF Skylabs Solution.Opere nan ranje frekans ultra-wo, sist&egrave;m sa yo pwolonje rive yo nan endistri ki mande koleksyon done ak jesyon an tan rey&egrave;l.Teknoloji RFID UHF ekselan nan lojistik, detay, ak fabrikasyon pou swiv envant&egrave;, siveyans byen, ak optimize pwosesis.</p>\r\n\r\n<h4>Karakteristik kle:</h4>\r\n\r\n<ul>\r\n	<li>Ranje frekans ultra-wo Plas lekti</li>\r\n	<li>pwolonje</li>\r\n	<li>Vit&egrave;s transf&egrave; done</li>\r\n	<li>an tan rey&egrave;l Koleksyon done ak</li>\r\n	<li>aplikasyon pou jesyon: Lojistik, Yo Vann an Detay (Swiv Envant&egrave;), Faktori (Siveyans Byen, Optimizasyon Pwosesis)</li>\r\n</ul>\r\n', 2, 'RFID Reader', '', '', 1),
(21, 'RFID Tags', 'rfid-tags', 0, '', '<p>Skylabs espesyalize nan fournir yon seri div&egrave;s solisyon kat RFID ki adapte a kondisyon biznis ou.Soti nan Low Frekans rive nan High Frekans ak Ultra High Frekans opsyon, nou ofri chwa versatile, ki gen ladan kat PVC, f&egrave;y PVC, kle ot&egrave;l, kat prezans automatisation lek&ograve;l, kat aks&egrave;, siy vil entelijan, ak plis ank&ograve;.Eksp&egrave;tiz nou an asire ou jwenn jisteman sa ou bezwen pou operasyon san pwobl&egrave;m.</p>\r\n\r\n<p><strong>Solisyon kat RFID:</strong> Solisyon Skylabs ofri yon solisyon konpl&egrave; kat RFID ki anglobe yon seri kalite kat ak matery&egrave;l, pou satisf&egrave; bezwen div&egrave;s nan div&egrave;s endistri yo.Solisyon RFID Cards nou an konbine teknoloji ak fonksyonalite pou delivre kat ki efikas, an sekirite ak versatile.</p>\r\n\r\n<p><strong>F&egrave;y PVC ak kat RFID Prelam:</strong> Solisyon kat RFID nou an gen ladan f&egrave;y PVC ak RFID Card Prelam, ki se eleman esansy&egrave;l pou fabrikasyon kat RFID.Enkruste kat RFID sa yo, ke yo rele tou pre-lams, yo itilize nan faktori kat RFID pou pwodwi kat RFID kalite sipery&egrave; av&egrave;k efikasite.</p>\r\n\r\n<p><strong>Kat PVC / Kat RFID / Kat Papye:</strong> Nou bay yon varyete opsyon kat, ki gen ladan Kat PVC, Kat RFID, ak Kat Papye.Kat sa yo s&egrave;vi plizy&egrave; rezon, soti nan kat papye debaz yo itilize pou tik&egrave; pak ak kat biznis rive nan kat sofistike ki p&egrave;m&egrave;t RFID pou aplikasyon avanse.</p>\r\n\r\n<p><strong>Kat enprime blan:</strong> Solisyon RFID Kat nou an gen ladan kat printable blan ki f&egrave;t pou enprimant t&egrave;mik ak enprimant ankr. Kat sa yo prezante bon jan kalite bor ak kouvri ki p&egrave;m&egrave;t pou enprime logo kl&egrave; ak pwofesyon&egrave;l, asire yon aparans poli.</p>\r\n\r\n<p><strong>Kat kle ot&egrave;l | Kontakte kat IC: </strong>Pou endistri Ospitalite a, kat kle RFID Hotel nou yo amelyore eksperyans envite nan bay aks&egrave; nan chanm sekirite ak pratik. Anplis de sa, nou ofri Kontakte kat IC, ideyal pou aplikasyon pou ki egzije kontak fizik pou lekti kat.</p>\r\n\r\n<h4>Z&ograve;n Aplikasyon:</h4>\r\n\r\n<ul>\r\n	<li>Kontw&ograve;l Aks&egrave;: Kat RFID ofri aks&egrave; sekirite ak efikas nan bilding, chanm, ak z&ograve;n ki gen restriksyon.</li>\r\n	<li>Ospitalite: RFID Hotel Kat kle rasyonalize tcheke-nan pwosesis ak amelyore konvenyans envite.</li>\r\n	<li>Yo Vann an Detay: kat lwayote ak solisyon peman RFID ki p&egrave;m&egrave;t bay eksperyans kliyan p&egrave;sonalize.</li>\r\n	<li>Transp&ograve;: kat RFID fasilite aks&egrave; transp&ograve; san pwobl&egrave;m piblik ak peman pri tik&egrave;.</li>\r\n	<li>Swen sante: kat RFID ede idantifikasyon pasyan ak aks&egrave; an sekirite nan enstalasyon medikal.</li>\r\n	<li>Jesyon Ev&egrave;nman: RFID kat rasyonalize antre ak jesyon foul moun nan ev&egrave;nman ak avni.</li>\r\n	<li>Edikasyon: ID el&egrave;v yo ak solisyon kontw&ograve;l aks&egrave; amelyore sekirite lakou lek&ograve;l la.</li>\r\n	<li>Pwovizyon pou Chain: RFID ki p&egrave;m&egrave;t envant&egrave; ak avantaj swiv optimize lojistik ak operasyon yo.</li>\r\n</ul>\r\n\r\n<p>Solisyon RFID Kat Solisyon Skylabs Solisyon an akeyir nan yon pak&egrave;t dom&egrave;n endistri yo ak aplikasyon pou, asire ke biznis yo ka jwenn aks&egrave; nan solisyon yo kat dwa satisf&egrave; bezwen inik yo. Angajman nou nan bon jan kalite ak inovasyon asire ke kat RFID nou yo bay fonksyonalite san pwobl&egrave;m, sekirite, ak ap&egrave;l vizy&egrave;l.</p>\r\n', 3, 'RFID Tags', '', '', 1),
(22, 'Biometri machin', 'biometrics-machine', 0, '', '<p>Skylabs ofri yon seri de solisyon byometrik ki gen ladan eskan&egrave; figi, eskan&egrave; anprent, ak RFID ki p&egrave;m&egrave;t byometrik. Chak nan solisyon sa yo s&egrave;vi diferan z&ograve;n aplikasyon, itilize teknoloji espesifik, ak tonbe anba diferan kalite machin byometrik. Isit la nan yon BECA de chak:</p>\r\n\r\n<h4>F&egrave; fas a eskan&egrave;:</h4>\r\n\r\n<ul>\r\n	<li>Z&ograve;n Aplikasyon: Eskan&egrave; figi yo te itilize pou rekonesans vizaj ak otantifikasyon. Yo jwenn aplikasyon nan sekirite ak kontw&ograve;l aks&egrave;, verifikasyon idantite, swiv prezans, ak sist&egrave;m siveyans.</li>\r\n	<li>Teknoloji: eskan&egrave; figi s&egrave;vi ak algoritm rekonesans vizaj pran ak analize karakteristik feminen. Algorithm sa yo detekte inik Landmarks feminen ak mod&egrave;l, konv&egrave;ti yo nan mod&egrave;l byometrik pou matche ak idantifikasyon.</li>\r\n	<li>Kalite machin byometrik: eskan&egrave; figi yo se yon kalite apar&egrave;y byometrik ki pa kontakte ki kaptire imaj vizaj ak f&egrave; rekonesans vizaj san ent&egrave;raksyon fizik.</li>\r\n</ul>\r\n\r\n<h4>Scanner anprent:</h4>\r\n\r\n<ul>\r\n	<li>Z&ograve;n Aplikasyon: eskan&egrave; anprent yo ap travay pou rekonesans anprent ak verifikasyon. Yo lajman itilize pou kontw&ograve;l aks&egrave;, tan ak swiv prezans, kontw&ograve;l fwonty&egrave;, ak idantifikasyon legal.</li>\r\n	<li>Teknoloji: eskan&egrave; anprent kaptire mod&egrave;l yo inik prezan nan anprent dw&egrave;t yon moun nan, tankou f&egrave;t ak fon. Mod&egrave;l sa yo konv&egrave;ti nan mod&egrave;l anprent ak yo te itilize pou konparezon ak idantifikasyon.</li>\r\n	<li>Kalite machin byometrik: eskan&egrave; anprent ka kontakte ki baze sou oswa kontakte, ak eskan&egrave; ki baze sou kontak ki egzije itilizat&egrave; a fizikman manyen sifas la optik ak eskan&egrave; kontakte kaptire simagri san kontak dir&egrave;k.</li>\r\n</ul>\r\n\r\n<h4>Biometri RFID ki p&egrave;m&egrave;t:</h4>\r\n\r\n<ul>\r\n	<li>Z&ograve;n Aplikasyon: RFID (Radyo Idantifikasyon Frekans) ki p&egrave;m&egrave;t byometrik konbine teknoloji RFID ak met&ograve;d otantifikasyon byometrik amelyore sekirite ak konvenyans. Sa yo souvan yo itilize nan kontw&ograve;l aks&egrave;, swiv avantaj, ak ekipman pou jesyon ch&egrave;n.</li>\r\n	<li>Teknoloji: RFID enplike nan l&egrave; l s&egrave;vi av&egrave;k vag radyo transm&egrave;t done ant yon tag (te pote pa yon moun oswa tache ak yon obj&egrave;) ak yon lekt&egrave;. L&egrave; konbine av&egrave;k byometrik, tag RFID la ka gen enf&ograve;masyon idantifikasyon inik ki lye ak done byometrik yon moun.</li>\r\n	<li>Kalite machin byometrik: RFID ki p&egrave;m&egrave;t sist&egrave;m byometrik gen ladan tou de lekt&egrave; RFID ak asosye teknoloji a byometrik optik. Asp&egrave; byometrik la te kapab enplike anprent oswa rekonesans vizaj pou otantifikasyon adisyon&egrave;l.</li>\r\n</ul>\r\n\r\n<h4>Benefis jeneral:</h4>\r\n\r\n<ul>\r\n	<li>Enhanced sekirite nan karakteristik inik byometrik.</li>\r\n	<li>Idantifikasyon egzat ak minim&ograve;m fo positifs / negatif.</li>\r\n	<li>Itilizat&egrave; konvenyans pa elimine modpas ak PIN.</li>\r\n</ul>\r\n\r\n<h4>Sekirite Sosyal ak Kontw&ograve;l Aks&egrave;:</h4>\r\n\r\n<ul>\r\n	<li>Redwi fwod ak aks&egrave; san otorizasyon.</li>\r\n	<li>Responsablite ak santye odit detaye.</li>\r\n	<li>Prevni &quot;zanmi pwensonaj&quot; nan tan ak prezans.</li>\r\n</ul>\r\n\r\n<h4>Done sou enf&ograve;masyon prive ak konf&ograve;mite:</h4>\r\n\r\n<ul>\r\n	<li>Bonjan vi prive done ak&ograve;z mod&egrave;l inik byometrik.</li>\r\n	<li>Konf&ograve;mite av&egrave;k r&egrave;gleman tankou GDPR.</li>\r\n</ul>\r\n\r\n<h4>Entegrasyon ak skalabilite:</h4>\r\n\r\n<ul>\r\n	<li>Entegrasyon ak div&egrave;s sist&egrave;m pou operasyon san pwobl&egrave;m.</li>\r\n	<li>Skalabilite akomode chanje baz itilizat&egrave;.</li>\r\n</ul>\r\n\r\n<h4>Efikasite ak eksperyans itilizat&egrave;:</h4>\r\n\r\n<ul>\r\n	<li>Pwosesis otantifikasyon rapid.</li>\r\n	<li>Remote ak opsyon aks&egrave; kontak.</li>\r\n	<li>P&egrave;rsonalizasyon nan anf&ograve;m bezwen endistri espesifik.</li>\r\n</ul>\r\n\r\n<h4>Tan ak Prezans:</h4>\r\n\r\n<ul>\r\n	<li>Anrejistreman egzat nan l&egrave; travay.</li>\r\n	<li>Rediksyon er&egrave; nan pew&ograve;l.</li>\r\n</ul>\r\n\r\n<h4>Avansman Teknoloji:</h4>\r\n\r\n<ul>\r\n	<li>Ogmante algoritm avanse byometrik.</li>\r\n	<li>Aplikasyon nan met&ograve;d byometrik kontakte.</li>\r\n</ul>\r\n', 4, 'Biometrics Machine', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_video`
--

CREATE TABLE `tbl_category_video` (
  `v_category_id` int(11) NOT NULL,
  `v_category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_category_video`
--

INSERT INTO `tbl_category_video` (`v_category_id`, `v_category_name`, `status`) VALUES
(1, 'Consulting Training', 'Active'),
(2, 'Consulting Service', 'Active'),
(3, 'Cost Management', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comments`
--

CREATE TABLE `tbl_comments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `reference_id` int(11) DEFAULT NULL,
  `comment_type` varchar(32) DEFAULT NULL,
  `comm_date` date NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_coupon`
--

CREATE TABLE `tbl_coupon` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `dis_type` int(11) DEFAULT NULL,
  `amount` varchar(32) DEFAULT NULL,
  `s_date` date DEFAULT NULL,
  `e_date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_coupon`
--

INSERT INTO `tbl_coupon` (`id`, `name`, `dis_type`, `amount`, `s_date`, `e_date`) VALUES
(1, 'shree50', 1, '50', '2020-06-26', '2021-10-22'),
(2, 'shree', 2, '10', '2023-04-01', '2023-04-30'),
(3, 'ankit', 1, '1000', '2023-04-01', '2023-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_coupon_history`
--

CREATE TABLE `tbl_coupon_history` (
  `id` int(11) NOT NULL,
  `coupon_id` int(11) DEFAULT NULL,
  `user_ip` varchar(255) DEFAULT NULL,
  `order_id` varchar(32) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_coupon_history`
--

INSERT INTO `tbl_coupon_history` (`id`, `coupon_id`, `user_ip`, `order_id`, `status`) VALUES
(8, 1, '127.0.0.1', NULL, 2),
(9, 1, '127.0.0.1', '79d827b5b936b64e01da', 2),
(10, 2, '127.0.0.1', '7956c2571df1d027e64c', 2),
(11, 3, '::1', NULL, 2),
(12, 2, '::1', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_designation`
--

CREATE TABLE `tbl_designation` (
  `designation_id` int(11) NOT NULL,
  `designation_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_designation`
--

INSERT INTO `tbl_designation` (`designation_id`, `designation_name`) VALUES
(10, 'Founder & CEO'),
(11, 'Director'),
(12, 'Director Technology'),
(13, 'Director Operations'),
(14, 'Consultant'),
(15, 'Advisor');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE `tbl_faq` (
  `faq_id` int(11) NOT NULL,
  `faq_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `faq_content` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `faq_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`faq_id`, `faq_title`, `faq_content`, `faq_category_id`) VALUES
(1, 'What types of grains / pulses can I grind using Aarvi Aata Chakki ?', '<p>Your family&rsquo;s health and nutrition is of paramount concern. And nobody understands it better than AARVI, the makers of India&rsquo;s No.1 Atta Chakki.</p>\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq_category`
--

CREATE TABLE `tbl_faq_category` (
  `faq_category_id` int(11) NOT NULL,
  `faq_category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_faq_category`
--

INSERT INTO `tbl_faq_category` (`faq_category_id`, `faq_category_name`) VALUES
(1, 'What types of grains / pulses can I grind using Aarvi Aata Chakki ?');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_file`
--

CREATE TABLE `tbl_file` (
  `file_id` int(11) NOT NULL,
  `file_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_live_video`
--

CREATE TABLE `tbl_live_video` (
  `video_id` int(11) NOT NULL,
  `video_title` varchar(255) DEFAULT NULL,
  `video_iframe` mediumtext DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_live_video`
--

INSERT INTO `tbl_live_video` (`video_id`, `video_title`, `video_iframe`, `category_id`) VALUES
(3, 'rgtr', 'https://www.youtube.com/embed/lvdV6oaFEow', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id` int(11) NOT NULL,
  `menu_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_id` int(11) NOT NULL,
  `menu_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `menu_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `menu_order` int(11) NOT NULL,
  `menu_parent` int(11) NOT NULL,
  `menu_target` int(11) NOT NULL,
  `menu_img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`id`, `menu_type`, `page_id`, `menu_name`, `menu_url`, `menu_order`, `menu_parent`, `menu_target`, `menu_img`) VALUES
(11, 'Other', 0, 'Sou Nou', '#', 1, 0, 0, ''),
(12, 'Page', 16, '', '', 1, 11, 0, ''),
(13, 'Page', 17, '', '', 2, 11, 0, ''),
(14, 'Page', 18, '', '', 3, 11, 0, ''),
(15, 'Page', 19, '', '', 4, 11, 0, ''),
(16, 'Page', 20, '', '', 5, 11, 0, ''),
(17, 'Page', 21, '', '', 2, 0, 0, ''),
(18, 'Page', 30, '', '', 1, 17, 0, 'icon-gis-consulting.png'),
(19, 'Page', 22, '', '', 1, 18, 0, ''),
(20, 'Page', 24, '', '', 2, 18, 0, ''),
(21, 'Page', 25, '', '', 3, 18, 0, ''),
(22, 'Page', 26, '', '', 4, 18, 0, ''),
(23, 'Page', 29, '', '', 5, 18, 0, ''),
(24, 'Page', 31, '', '', 2, 17, 0, 'icon-gis-consulting1.png'),
(25, 'Page', 32, '', '', 1, 24, 0, ''),
(26, 'Page', 33, '', '', 2, 24, 0, ''),
(27, 'Page', 34, '', '', 3, 24, 0, ''),
(28, 'Page', 35, '', '', 5, 24, 0, ''),
(29, 'Page', 36, '', '', 3, 17, 0, 'car-icon-9.png'),
(30, 'Other', 0, 'Pwodwi yo', '#', 3, 0, 0, ''),
(32, 'Page', 37, '', '', 5, 0, 0, ''),
(33, 'Page', 38, '', '', 1, 29, 0, ''),
(34, 'Page', 39, '', '', 2, 29, 0, ''),
(35, 'Page', 40, '', '', 3, 29, 0, ''),
(37, 'Page', 41, '', '', 5, 29, 0, ''),
(38, 'Page', 42, '', '', 6, 29, 0, ''),
(39, 'Page', 45, '', '', 4, 17, 0, '2726638.png'),
(40, 'Page', 46, '', '', 1, 39, 0, ''),
(41, 'Page', 49, '', '', 2, 39, 0, ''),
(42, 'Page', 50, '', '', 3, 39, 0, ''),
(43, 'Page', 54, '', '', 5, 11, 0, ''),
(45, 'Page', 57, '', '', 6, 11, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu_one`
--

CREATE TABLE `tbl_menu_one` (
  `id` int(11) NOT NULL,
  `menu_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_id` int(11) NOT NULL,
  `menu_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `menu_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `menu_order` int(11) NOT NULL,
  `menu_parent` int(11) NOT NULL,
  `menu_target` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_menu_one`
--

INSERT INTO `tbl_menu_one` (`id`, `menu_type`, `page_id`, `menu_name`, `menu_url`, `menu_order`, `menu_parent`, `menu_target`) VALUES
(8, 'Page', 16, '', '', 1, 0, 0),
(9, 'Other', 0, 'Our Services', '/services.html', 2, 0, 0),
(10, 'Page', 20, '', '', 3, 0, 0),
(11, 'Page', 37, '', '', 4, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu_three`
--

CREATE TABLE `tbl_menu_three` (
  `id` int(11) NOT NULL,
  `menu_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_id` int(11) NOT NULL,
  `menu_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `menu_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `menu_order` int(11) NOT NULL,
  `menu_parent` int(11) NOT NULL,
  `menu_target` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu_two`
--

CREATE TABLE `tbl_menu_two` (
  `id` int(11) NOT NULL,
  `menu_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_id` int(11) NOT NULL,
  `menu_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `menu_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `menu_order` int(11) NOT NULL,
  `menu_parent` int(11) NOT NULL,
  `menu_target` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_menu_two`
--

INSERT INTO `tbl_menu_two` (`id`, `menu_type`, `page_id`, `menu_name`, `menu_url`, `menu_order`, `menu_parent`, `menu_target`) VALUES
(7, 'Page', 51, '', '', 1, 0, 0),
(8, 'Page', 52, '', '', 2, 0, 0),
(9, 'Page', 53, '', '', 3, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `news_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `news_content` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `news_content_short` text COLLATE utf8_unicode_ci NOT NULL,
  `tags` text COLLATE utf8_unicode_ci NOT NULL,
  `news_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `publisher` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `total_view` int(11) NOT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keyword` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `popular` int(11) NOT NULL,
  `trending` int(11) NOT NULL,
  `news_type` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `city` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `news_title`, `news_slug`, `news_content`, `news_content_short`, `tags`, `news_date`, `photo`, `banner`, `category_id`, `sub_category_id`, `publisher`, `total_view`, `meta_title`, `meta_keyword`, `meta_description`, `popular`, `trending`, `news_type`, `state`, `city`) VALUES
(1, 'Eksplore Enpak Mondyal La nan Eleman iot.', 'exploring-the-global-impact-of-iot-components', '<p>Ent&egrave;n&egrave;t Nan Bagay (IoT) te revolusyone fason nou kominike av&egrave;k teknoloji, f&ograve;me yon mond kote apar&egrave;y, obj&egrave;, ak sist&egrave;m yo konekte youn ak l&ograve;t, sa ki p&egrave;m&egrave;t echanj done san pwobl&egrave;m ak desizyon entelijan. Konpozan IoT yo te jwenn aplikasyon toupatou atrav&egrave; endistri div&egrave;s atrav&egrave; lemond, transf&ograve;me fason nou viv ak travay. Nan blog sa a, nou pral fouye nan k&egrave;k itilizasyon remakab nan eleman IoT atrav&egrave; gl&ograve;b la ak eksplore sij&egrave; ki ab&ograve;de lan pwom&egrave;t nan iot nan peyi zend.</p>\r\n\r\n<h3>Aplikasyon IoT atrav&egrave; mond lan:</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<h4>Vil Entelijan:</h4>\r\n\r\n	<p>Nan div&egrave;s vil atrav&egrave; lemond, iot-kapab det&egrave;kt&egrave; ak apar&egrave;y yo itilize pou jere koule trafik, optimize konsomasyon en&egrave;ji, kontwole kalite l&egrave;, ak amelyore planifikasyon jeneral iben ak jesyon resous.</p>\r\n	</li>\r\n	<li>\r\n	<h4>Swen sante:</h4>\r\n\r\n	<p>Apar&egrave;y IoT yo te siyifikativman afekte endistri swen sante a, fasilite siveyans pasyan aleka, koleksyon done sante an tan rey&egrave;l, ak amelyore dyagnostik ak met&ograve;d tretman.</p>\r\n	</li>\r\n	<li>\r\n	<h4>Agrikilti:</h4>\r\n\r\n	<p>Solisyon ki baze sou IoT te revolusyone pratik agrik&ograve;l pa bay kiltivat&egrave; yo ak sur done-kondwi nan imidite t&egrave;, kondisyon move tan, ak sante rek&ograve;t, ki mennen nan pi bon optimize sede ak redwi gaspiye resous.</p>\r\n	</li>\r\n	<li>\r\n	<h4>Otomatik Endistriy&egrave;l:</h4>\r\n\r\n	<p>IoT te jwe yon w&ograve;l enp&ograve;tan nan automatisation endistriy&egrave;l, ki p&egrave;m&egrave;t biznis yo amelyore efikasite, diminye tan desann, ak rasyonalize operasyon nan antretyen prediksyon ak siveyans an tan rey&egrave;l.</p>\r\n	</li>\r\n	<li>\r\n	<h4>Yo vann an detay:</h4>\r\n\r\n	<p>IoT te transf&ograve;me sekt&egrave; a yo vann an detay pa p&egrave;m&egrave;t eksperyans mak&egrave;t p&egrave;sonalize, optimize ch&egrave;n ekipman pou, ak swiv nivo envant&egrave; nan tan rey&egrave;l, sa ki lak&ograve;z pi bon satisfaksyon kliyan ak pri-la efikasite.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>Ekspansyon Sij&egrave; ki ab&ograve;de Lan Nan IoT nan Peyi zend:</h3>\r\n\r\n<p>Lend, ak popilasyon masiv li yo ak ekosist&egrave;m teknoloji &eacute;mergentes, kenbe potansy&egrave;l imans pou adopsyon IoT ak kwasans. Plizy&egrave; fakt&egrave; kontribye nan sij&egrave; ki ab&ograve;de lan agrandi nan IoT nan peyi zend.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<h4>Enfrastrikti Entelijan:</h4>\r\n\r\n	<p>Gouv&egrave;nman Endyen an konsantre sou bati vil entelijan ak dijital enfrastrikti ouv&egrave; anpil op&ograve;tinite pou aplikasyon IoT nan z&ograve;n tankou transp&ograve;, jesyon dech&egrave;, ak sekirite piblik.</p>\r\n	</li>\r\n	<li>\r\n	<h4>Agrikilti ak Devlopman Rural:</h4>\r\n\r\n	<p>Av&egrave;k yon pousantaj siyifikatif nan popilasyon an angaje nan agrikilti, solisyon ki baze sou IoT ka revolusyone pratik agrik&ograve;l, ankouraje agrikilti dirab, ak ranf&ograve;se devlopman riral yo.</p>\r\n	</li>\r\n	<li>\r\n	<h4>Avanse Nan Swen Sante:</h4>\r\n\r\n	<p>IoT ka jwe yon w&ograve;l enp&ograve;tan nan amelyore aks&egrave; nan swen sante nan z&ograve;n aleka, fasilite telemedsin, ak amelyore s&egrave;vis swen sante nan apar&egrave;y ki ka mete ak sist&egrave;m siveyans pasyan aleka.</p>\r\n	</li>\r\n	<li>\r\n	<h4>Kwasans Endistriy&egrave;l:</h4>\r\n\r\n	<p>Sekt&egrave; manifakti ak endistriy&egrave;l pwospere peyi zend ka benefisye de entegrasyon IoT pou optimize operasyon, diminye depans pwodiksyon, ak amelyore pwodiktivite an jeneral.</p>\r\n	</li>\r\n	<li>\r\n	<h4>Iot Star ak Inovasyon:</h4>\r\n\r\n	<p>Nimewo a ap grandi nan iot star ak inisyativ rech&egrave;ch nan peyi zend reflete enter&egrave; a ap grandi ak potansy&egrave;l pou solisyon iot d&egrave;nye kri pwepare a bezwen lokal yo ak defi.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>Defi ak Op&ograve;tinite:</h3>\r\n\r\n<p>Pandan ke sij&egrave; ki ab&ograve;de Lan Nan Iot nan Peyi zend se pwom&egrave;t, gen k&egrave;k defi yo adrese, ki gen ladan sekirite done, enkyetid sou vi prive, ak bezwen an pou yon enfrastrikti iot gaya. Kolaborasyon ant gouv&egrave;nman, endistri, ak akademik yo esansy&egrave;l pou ankouraje inovasyon, bati ladr&egrave;s ki neses&egrave;, ak adrese kad regilasyon yo.</p>\r\n', 'Entènèt Nan Bagay (IoT) te revolusyone fason nou kominike avèk teknoloji, fòme yon mond kote aparèy, objè, ak sistèm yo konekte youn ak lòt, sa ki pèmèt echanj done san pwoblèm ak desizyon entelijan.', 'iot', '2023-08-29', 'iot.png', 'banner-21.jpg', 1, 0, '', 0, 'iot', 'IOT', 'Exploring the Global Impact of IoT Components.', 0, 0, 0, 0, 0),
(2, 'Avanse Endistri Ak Eleman AIDC', 'advancing-industries-with-aidc-components', '<p>Otomatik Idantifikasyon ak Done Kaptire (aidc) teknoloji te par&egrave;t k&ograve;m yon jw&egrave;t-chanjeur nan endistri div&egrave;s kalite, fasilite efikas koleksyon done, swiv, ak jesyon. Konpozan AIDC, ki gen ladan barcode, k&ograve;d QR, rfid tags, ak plis ank&ograve;, ap transf&ograve;me fason biznis yo opere, amelyore presizyon, pwodiktivite, ak pran desizyon. Nan blog sa a, nou pral eksplore siyifikasyon eleman AIDC yo, aplikasyon yo atrav&egrave; div&egrave;s sekt&egrave;, ak benefis yo pote nan biznis atrav&egrave; lemond.</p>\r\n\r\n<h3>Konprann Eleman AIDC:</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<h4>K&ograve;d bar:</h4>\r\n\r\n	<p>Barcode yo se pami eleman KI pi r&eacute;pandus AIDC, ki gen ladan yon seri de liy paral&egrave;l ak laj&egrave; varye ki reprezante done. K&ograve;d sa yo scanne pa optik barcode scanner pou jwenn enf&ograve;masyon ki estoke nan baz done.</p>\r\n	</li>\r\n	<li>\r\n	<h4>K&Ograve;D QR:</h4>\r\n\r\n	<p>K&ograve;d Repons rapid (QR) yo se k&ograve;d bidimansyon ki ka estoke plis done pase k&ograve;d bar tradisyon&egrave;l yo. Yo ka eskane pa smartphones oswa lekt&egrave; k&ograve;d QR espesyalize, sa ki p&egrave;m&egrave;t aks&egrave; enstantane nan enf&ograve;masyon, sit ent&egrave;n&egrave;t, oswa kontni miltimedya.</p>\r\n	</li>\r\n	<li>\r\n	<h4>Rfid Tags:</h4>\r\n\r\n	<p>Radyo Frekans Idantifikasyon (RFID) tags itilize vag radyo yo idantifye ak swiv obj&egrave;, b&egrave;t, oswa moun. Sist&egrave;m RFID yo konsiste de tags, lekt&egrave;, ak baz done backend, bay swiv an tan rey&egrave;l ak amelyore jesyon envant&egrave;.</p>\r\n	</li>\r\n	<li>\r\n	<h4>Teknoloji NFC:</h4>\r\n\r\n	<p>Near Field Communication (NFC) se yon subset nan teknoloji RFID ki p&egrave;m&egrave;t pou kominikasyon kout-ranje ant apar&egrave;y, sa ki p&egrave;m&egrave;t tranzaksyon kontak, kontw&ograve;l aks&egrave;, ak transf&egrave; done.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>Aplikasyon Atrav&egrave; Endistri Yo:</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<h4>Yo vann an detay:</h4>\r\n\r\n	<p>Konpozan AIDC yo lajman itilize nan sekt&egrave; a yo vann an detay rasyonalize jesyon envant&egrave;, swiv anbakman, ak amelyore efikasite nan ch&egrave;n ekipman pou an jeneral. K&ograve;d bar ak K&Ograve;D QR fasilite pi vit pwosesis ch&egrave;k-out, diminye tan ap tann pou kliyan yo.</p>\r\n	</li>\r\n	<li>\r\n	<h4>Swen sante:</h4>\r\n\r\n	<p>Teknoloji aidc jwe yon w&ograve;l enp&ograve;tan nan amelyore sekirite pasyan pa asire administrasyon medikaman egzat, swiv ekipman medikal, ak jere dosye pasyan av&egrave;k efikasite nan rfid tags ak barcode.</p>\r\n	</li>\r\n	<li>\r\n	<h4>Manifakti:</h4>\r\n\r\n	<p>Nan endistri manifakti a, eleman AIDC yo itilize pou otomatize antre done, kontwole liy pwodiksyon, ak jere nivo envant&egrave;, ki mennen nan er&egrave; redwi ak ogmante pwodiktivite.</p>\r\n	</li>\r\n	<li>\r\n	<h4>Lojistik ak Transp&ograve;:</h4>\r\n\r\n	<p>Rfid ak barcode teknoloji p&egrave;m&egrave;t san pwobl&egrave;m swiv nan pak&egrave;, optimize operasyon lojistik ak bay vizibilite anbake an tan rey&egrave;l.</p>\r\n	</li>\r\n	<li>\r\n	<h4>Gouv&egrave;nman ak Sekirite:</h4>\r\n\r\n	<p>Konpozan AIDC jwenn aplikasyon nan kat ID nasyonal, e-pasp&ograve;, ak sist&egrave;m kontw&ograve;l aks&egrave;, amelyore sekirite ak anpeche fo.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>Benefis Nan Eleman AIDC:</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<h4>Ogmante Presizyon:</h4>\r\n\r\n	<p>Konpozan AIDC siyifikativman diminye er&egrave; antre done many&egrave;l, ki mennen nan enf&ograve;masyon pi egzat ak amelyore pran desizyon.</p>\r\n	</li>\r\n	<li>\r\n	<h4>Ogmante Efikasite:</h4>\r\n\r\n	<p>Otomatik done kaptire ak swiv rasyonalize pwosesis, diminye depans operasyon&egrave;l ak ekonomize tan, sa ki lak&ograve;z amelyore efikasite an jeneral.</p>\r\n	</li>\r\n	<li>\r\n	<h4>Pi Bon Jesyon Envant&egrave;:</h4>\r\n\r\n	<p>Konpozan AIDC p&egrave;m&egrave;t swiv envant&egrave; an tan rey&egrave;l, asire nivo stock optimal ak anpeche stockouts oswa sitiyasyon overstock.</p>\r\n	</li>\r\n</ul>\r\n', 'Otomatik Idantifikasyon ak Done Kaptire (aidc) teknoloji te parèt kòm yon jwèt-chanjeur nan endistri divès kalite, fasilite efikas koleksyon done, swiv, ak jesyon.', '', '2023-08-29', 'aidc_1.png', 'middle_banner_new_51.png', 1, 0, '', 0, 'Advancing Industries with AIDC Components', 'Advancing Industries with AIDC Components', 'Automatic Identification and Data Capture (AIDC) technology has emerged as a game-changer in various industries, facilitating efficient data collection, tracking, and management.', 0, 0, 0, 0, 0),
(4, 'Telematik: Delivre Pouvwa Entèlijans Konekte', 'telematics-unleashing-the-power-of-connected-intelligence', '<p>Nan laj transf&ograve;masyon dijital, telematik te par&egrave;t k&ograve;m yon teknoloji revolisyon&egrave; ki entegre telekominikasyon ak teknoloji enf&ograve;masyon pou delivre done an tan rey&egrave;l ak sur. Soti nan espas exp.lorasyon nan aplikasyon pou chak jou, vwayaj la nan telematik se pa gen anyen mwens pase remakab. Nan blog sa a, nou pral eksplore mond lan kaptivan nan telematik, aplikasyon div&egrave;s li yo, ak enpak la transf&ograve;masyon li gen sou endistri yo ak moun ki sanble.</p>\r\n\r\n<h3>Telematik: Yon Vwayaj Soti Nan Espas Nan Lat&egrave;:</h3>\r\n\r\n<p>Telematik, ki f&egrave;t nan BEZWEN NASA pou done an tan rey&egrave;l pandan misyon espas, te vini yon fason lontan depi k&ograve;mansman li yo. Ok&ograve;mansman itilize pou transm&egrave;t enf&ograve;masyon enp&ograve;tan nan veso espasy&egrave;l, telematik te jwenn yon kay nan lavi chak jou nou, amelyore efikasite, sekirite, ak pran desizyon atrav&egrave; div&egrave;s sekt&egrave;.</p>\r\n\r\n<h3>Mobilite entelijan: Pave wout Pou Wout Ki Pi An Sekirite:</h3>\r\n\r\n<p>Telematik se nan forefront nan transf&ograve;me mobilite. Av&egrave;k sist&egrave;m telematik avanse entegre nan machin, chof&egrave; jwi benefis tankou navigasyon an tan rey&egrave;l, dyagnostik machin, ak deteksyon aksidan. Telematik jwe yon w&ograve;l enp&ograve;tan nan pwomosyon wout ki pi an sekirite ak diminye aksidan wout nan kapasite li nan kontwole konp&ograve;tman chof&egrave; ak bay sur pou amelyorasyon.</p>\r\n\r\n<h3>Jesyon fl&ograve;t: Kondwi Efikasite ak Pwodiktivite:</h3>\r\n\r\n<p>Pou biznis opere yon fl&ograve;t nan machin, telematik se yon jw&egrave;t-chanjeur. Manadj&egrave; fl&ograve;t ka swiv kote machin, kontwole konsomasyon gaz, optimize wout, ak predi bezwen antretyen, ki mennen nan amelyore efikasite operasyon&egrave;l, redwi depans, ak amelyore satisfaksyon kliyan.</p>\r\n\r\n<h3>Telematik asirans: Kouv&egrave;ti P&egrave;sonalize ak Jis:</h3>\r\n\r\n<p>Telematik te deranje endistri asirans lan l&egrave; li te p&egrave;m&egrave;t asirans ki baze sou itilizasyon (ubi). Av&egrave;k done yo kolekte nan apar&egrave;y telematik, founis&egrave; asirans yo ka ofri prim p&egrave;sonalize ki baze sou konp&ograve;tman kondwi endividy&egrave;l, ankouraje abitid kondwi pi an sekirite ak pwoteksyon asirans pi jis.</p>\r\n\r\n<h3>Agrikilti: Kiltive Agrikilti Entelijan Ak Telematik:</h3>\r\n\r\n<p>Nan agrikilti, solisyon telematik yo ap p&egrave;m&egrave;t kiltivat&egrave; yo pran desizyon ki baze sou done. Soti nan kontwole imidite t&egrave; ak tanperati pou swiv ekipman ak b&egrave;t, telematik ap optimize pratik agrik&ograve;l, ogmante pwodiksyon, ak ankouraje agrikilti dirab.</p>\r\n\r\n<h3>Vizibilite Ch&egrave;n ekipman Pou: Navigasyon Jaden Fl&egrave; Lojistik la:</h3>\r\n\r\n<p>Telematics ap revolusyone jesyon ch&egrave;n ekipman pou pa bay vizibilite an tan rey&egrave;l nan anbakman ak byen. Av&egrave;k swiv egzak, konpayi lojistik ka optimize wout, diminye tan livrezon, ak amelyore efikasite an jeneral nan ch&egrave;n ekipman pou la.</p>\r\n\r\n<h3>Vil entelijan: Bati Yon Avni Dirab:</h3>\r\n\r\n<p>K&ograve;m vil yo f&egrave; ef&ograve; pou vin pi entelijan ak plis dirab, telematik jwe yon w&ograve;l enp&ograve;tan nan planifikasyon iben ak jesyon enfrastrikti. Iot-kapab det&egrave;kt&egrave; ak apar&egrave;y telematik kontwole koule trafik, plas pakin, kalite l&egrave;, ak jesyon dech&egrave;, kreye pi entelijan, plis viv vil yo.</p>\r\n', 'Nan laj transfòmasyon dijital, telematik te parèt kòm yon teknoloji revolisyonè ki entegre telekominikasyon ak teknoloji enfòmasyon pou delivre done an tan reyèl ak sur. ', '', '29-08-2023', 'unleasing1.jpeg', '', 1, 0, '', 0, 'Unleasing power of connected intelligence', 'intelligence', 'intelligence', 0, 0, 0, 0, 0),
(14, 'Sistèm Jesyon Yo Vann An Detay', 'retail-management-system', '<p>Skylabs Solisyon Jesyon Ch&egrave;n Yo vann an Detay se poto a nan efikasite ak rentabilit&eacute; pou d&eacute;taillants mod&egrave;n. Platf&ograve;m d&egrave;nye kri nou an san pwobl&egrave;m entegre jesyon envant&egrave;, lavant swiv, angajman kliyan, ak optimize ch&egrave;n ekipman pou nan yon sist&egrave;m inifye. Av&egrave;k analiz done an tan rey&egrave;l ak sur entelijan nan dw&egrave;t ou, ou ka pran desizyon enf&ograve;me, amelyore eksperyans kliyan, ak kondwi kwasans. Si ou opere yon ti boutik oswa yon gwo ch&egrave;n yo vann an detay, solisyon nou an se pwepare pou ranf&ograve;se biznis ou, rasyonalize operasyon, ak pozisyon ou nan forefront nan endistri a yo vann an detay</p>\r\n', 'Skylabs Solisyon Jesyon Chèn Yo vann an Detay se poto a nan efikasite ak rentabilité pou détaillants modèn.', '', '29-08-2023', '3gkugp8rcqjemp31lsj910uh2c.png', '', 2, 0, '', 0, 'Retail Management System,rms', 'Retail Management System', 'Retail Management System', 0, 0, 0, 0, 0),
(15, 'Aplikasyon Pou Tikè', 'ticketing-application', '<p>Solisyon Revolisyon&egrave; Tik&egrave; Otobis nou an reprezante yon chanjman paradigm nan fason operat&egrave; fl&ograve;t yo jere s&egrave;vis yo ak fason pasaje yo f&egrave; eksperyans vwayaj otobis. Sist&egrave;m sa a d&egrave;nye kri pa s&egrave;lman p&egrave;m&egrave;t operat&egrave; fl&ograve;t men tou fasilite pasaje yo nan anrjistreman, telechaje, ak jere tik&egrave; yo pratikman sou ent&egrave;n&egrave;t.<br />\r\nPou operat&egrave; fl&ograve;t, solisyon nou an s&egrave;vi k&ograve;m yon zouti konpl&egrave; pou jesyon fl&ograve;t efikas. Li rasyonalize operasyon, sa ki p&egrave;m&egrave;t operat&egrave; yo kontwole ak kontwole fl&ograve;t yo san pwobl&egrave;m. Soti nan or&egrave; nan swiv, li bay sur an tan rey&egrave;l nan p&egrave;f&ograve;mans fl&ograve;t, sa ki p&egrave;m&egrave;t operat&egrave; yo pran desizyon done-kondwi ki amelyore efikasite ak bon jan kalite s&egrave;vis.<br />\r\nSou pasaje devan, sist&egrave;m nou an revolusyone eksperyans nan anrjistreman tik&egrave;. Li ofri transparans san par&egrave;y, ak enf&ograve;masyon jiska-a-minit sou disponiblite tik&egrave;, prix, ak or&egrave;. Pasaje yo ka liv ak jere tik&egrave; yo av&egrave;k fasilite, f&egrave; planifikasyon vwayaj pi pratik pase tout tan anvan.<br />\r\nNan sans, Solisyon Revolisyon&egrave; Tik&egrave; Otobis nou an pon diferans ki genyen ant operat&egrave; fl&ograve;t ak pasaje, ankouraje yon ekosist&egrave;m vwayaj otobis pi efikas ak pasaje-zanmitay. Li se yon solisyon genyen-genyen ki pa s&egrave;lman optimize operasyon men tou, ogmante eksperyans nan vwayaj pou tout moun</p>\r\n', 'Solisyon Revolisyonè Tikè Otobis nou an reprezante yon chanjman paradigm nan fason operatè flòt yo jere sèvis yo ak fason pasaje yo fè eksperyans vwayaj otobis. ', 'Ticketing Application', '29-08-2023', 'TICKET-BOOKING-APP-DEVELOPMENT_(2).jpg', '', 2, 0, '', 0, 'Ticketing Application', 'Ticketing Application', 'Ticketing Application', 0, 0, 0, 0, 0),
(16, 'ITMS (Entelijan Sistèm Jesyon Transpò)', 'itms-intelligent-transport-management-system', '<p>Skylabs te f&egrave;t ak deplwaye yon Revolisyon&egrave; Entelijan Transp&ograve; Jesyon Sist&egrave;m (ITMS) pwepare pou Operat&egrave; Fl&ograve;t, Konpayi Ch&egrave;n Yo vann an Detay, ak Depo Otobis Vil la. Solisyon konpl&egrave; sa a gen ladan tout asp&egrave; kritik nan jesyon fl&ograve;t, ki gen ladan:</p>\r\n\r\n<ol>\r\n	<li>Rasyonalize Operasyon &amp; Antretyen Jesyon.</li>\r\n	<li>An tan rey&egrave;l Outshedding Estati Swiv (Depo Nan &amp; Depo Soti).</li>\r\n	<li>Fonksyonalite Swiv Efikas (Nimewo Machin, Non Chof&egrave;, Nimewo Wout, Vit&egrave;s).</li>\r\n	<li>Jesyon Aktivite lis (Chak Jou, Chak Mwa, ak chak ane).</li>\r\n	<li>Aks&egrave; Nan Done GPS, Ka Done, Machin Ap viv, ak Pasaje Manje (Live &amp; Istorik).</li>\r\n	<li>Kominikasyon done pou Depo ak Otorite yo.</li>\r\n	<li>Sos Al&egrave;t ak Jenerasyon Imel pou Pi wo Jesyon.</li>\r\n	<li>Senp Manyen Plent Chof&egrave; ki gen rap&ograve; ak Pati Machin.</li>\r\n	<li>Sist&egrave;m Jesyon anplwaye (Alokasyon Devwa pou Chof&egrave; ak Anplwaye).</li>\r\n	<li>Fasil Jesyon Nan Kawotchou ak Batri Lyezon/Delinking sou Yon Baz Machin.</li>\r\n	<li>Suivi Kilom&egrave;t Total pou Rap&ograve; B&ograve;dwo.</li>\r\n	<li>Rap&ograve; konpl&egrave; pou Operasyon Depo ak Antretyen (egzanp, Estati Chanjman, Estati Vwayaj, Ar&egrave; Otobis Rate, Rap&ograve; Devwa, Rap&ograve; Enflasyon, Rap&ograve; Rete, Rap&ograve; Kote, Rap&ograve; Vyolasyon Wout).</li>\r\n</ol>\r\n\r\n<p>Solisyon itms inovat&egrave; sa a ofri yon platf&ograve;m solid ak efikas pou optimize operasyon fl&ograve;t ak asire jesyon lis, done-kondwi.<br />\r\n&nbsp;</p>\r\n', 'Skylabs te fèt ak deplwaye yon Revolisyonè Entelijan Transpò Jesyon Sistèm (ITMS) pwepare pou Operatè Flòt, Konpayi Chèn Yo vann an Detay, ak Depo Otobis Vil la.', 'ITMS (Intelligent Transport Management System)', '29-08-2023', 'itms.png', '', 2, 0, '', 0, 'ITMS (Intelligent Transport Management System)', 'ITMS (Intelligent Transport Management System)', 'ITMS (Intelligent Transport Management System)', 0, 0, 0, 0, 0),
(17, 'Elektwonik Tarif Mèt', 'electronics-fare-meter', '<p>Skylabs fy&egrave; desine, devlope, ak deplwaye Elektwonik Tarif M&egrave;t (EFMs) pou oto-riksa ak taksi, mete nouvo estanda endistri pou kalkil pri tik&egrave; egzat. Skylabs EFM distenge pa itilize li nan teknoloji d&egrave;nye kri, ki f&egrave; li yon pyonye nan jaden an nan kalkil pri tik&egrave; elektwonik.<br />\r\nM&egrave;t Pri Tik&egrave; Elektwonik nou an ekipe ak d&egrave;nye teknoloji, asire kalkil pri tik&egrave; egzak ak serye pou pasaje yo ak chof&egrave; yo. Skylabs EFM ale pi lwen pase m&egrave;t pri tik&egrave; tradisyon&egrave;l pa bay yon avanse, eksperyans itilizat&egrave;-zanmitay ki amelyore transparans ak konfyans nan s&egrave;vis la transp&ograve;.<br />\r\nPa enk&ograve;pore karakteristik inovat&egrave; ak konf&ograve;me yo ak estanda endistri ki pi wo, Skylabs EFM te vin ale-a chwa pou oto-riksa ak s&egrave;vis taksi. Angajman nou nan ekselans nan konsepsyon ak deplwaman teknoloji te redefini kalkil pri tik&egrave; nan sekt&egrave; transp&ograve; a, ofri pasaje yon sist&egrave;m pri serye ak jis pandan y ap bay chof&egrave; ak yon zouti ki gen anpil val&egrave; pou livrezon s&egrave;vis efikas.<br />\r\nSkylabs kontinye mennen wout la nan revolusyone m&egrave;t pri tik&egrave;, mete yon egzanp louabl pou endistri a ak dediksyon nou nan presizyon, transparans, ak inovasyon teknolojik.</p>\r\n', 'Skylabs fyè desine, devlope, ak deplwaye Elektwonik Tarif Mèt (EFMs) pou oto-riksa ak taksi, mete nouvo estanda endistri pou kalkil pri tikè egzat.', 'delhi efm', '29-08-2023', 'delhi_efm.png', '', 2, 0, '', 0, 'Electronics Fare Meter', 'Electronics Fare Meter', 'Electronics Fare Meter', 0, 0, 0, 0, 0),
(18, 'ERS (Sistèm Repons Ijans 102-104)', 'emergency-response-system', '<p>Skylabs Solisyon Peyi Zend Prive Ltd. te av&egrave;k siks&egrave; aplike yon Gps ki baze sou Sist&egrave;m Repons Ijans nan Bihar, yon etap pivotal nan revolusyone s&egrave;vis ijans. Nou te ekipe 2,500 anbilans ak teknoloji GPS d&egrave;nye kri, ki p&egrave;m&egrave;t pou swiv ak siveyans nan 102 anbilans nan tan rey&egrave;l. Anplis de sa nan machin swiv, nou te etabli yon sant kontw&ograve;l k&ograve;mandman dedye ki kapab efikasman jere ijans medikal kritik.<br />\r\nAngajman nou an se nan ogmante eksperyans vaste nou yo ak eksp&egrave;tiz transf&ograve;me s&egrave;vis ijans nan Peyi zend. Nou fy&egrave; pou delivre solisyon inovat&egrave; ki te sip&ograve;te pa ane eksperyans ki gen anpil val&egrave;, mete nou apa k&ograve;m lid&egrave; nan endistri a. Nou envite ou pou rantre nan nou nan f&ograve;me lavni nan repons ijans, kreye yon anviw&ograve;nman ki pi an sekirite ak pi an sekirite pou tout moun.<br />\r\nPa ezite kontakte nou jodi a pou dekouvri kijan Skylabs ND, Sist&egrave;m Repons Ijans konpl&egrave; nou an, ka pote yon revolisyon nan s&egrave;vis ijans nan rejyon ou an. Ansanm, an nou f&egrave; yon gwo diferans epi sove lavi, yon solisyon inovat&egrave; nan yon moman.</p>\r\n', 'Skylabs Solisyon Peyi Zend Prive Ltd. te avèk siksè aplike yon Gps ki baze sou Sistèm Repons Ijans nan Bihar, yon etap pivotal nan revolusyone sèvis ijans.', 'ers', '29-08-2023', 'ers.png', '', 2, 0, '', 0, 'ers', 'ers', '', 0, 0, 0, 0, 0),
(19, 'Sistèm Jesyon Dechè Solid', 'solid-waste-management-system', '<p>Jesyon Dech&egrave; Solid: nou te av&egrave;k siks&egrave; f&egrave;t ak deplwaye yon Rfid ak Gps ki baze Sou Smart Solisyon Jesyon Dech&egrave; Solid, ki reprezante yon avansman siyifikatif nan jesyon dech&egrave; iben. Pwoj&egrave; Solid Turnkey Solid Waste Management (SWM) nou an asire yon enpresyonan 99.99% efikasite operasyon&egrave;l nan vil la pandan y ap ankouraje transparans nan manyen dech&egrave; ak pwosesis jete.<br />\r\nAnplis de solisyon swm inovat&egrave; nou an, nou te devlope ak deplwaye yon aplikasyon mobil sitwayen-santre. App sa a bay rezidan vil yo pouvwa pou yo leve nenp&ograve;t enkyetid yo ka genyen kons&egrave;nan koleksyon dech&egrave; ak jesyon. Li s&egrave;vi k&ograve;m yon kanal kominikasyon dir&egrave;k ant rezidan vil la ak otorite jesyon dech&egrave;, fasilite yon sist&egrave;m koleksyon dech&egrave; ki pi reponn ak sitwayen-oryante.<br />\r\nAnsanm, Smart Solid Waste Management Solution nou an ak citizen-adressable mobile app egzanp angajman nou pou ogmante teknoloji pou efikas, transparan, ak kominote-kondwi jesyon dech&egrave; iben. Inisyativ sa yo kontribye nan pi pw&ograve;p, pi an sante, ak plis dirab anviw&ograve;nman iben pandan y ap amelyore kalite lavi pou rezidan vil la.</p>\r\n', 'Nou te avèk siksè fèt ak deplwaye yon Rfid ak Gps ki baze Sou Entelijan Solisyon Jesyon Dechè Solid, ki reprezante yon avansman siyifikatif nan jesyon dechè iben.', 'solid waste management', '29-08-2023', 'solid.png', 'solid1.png', 2, 0, '', 0, 'Solid Waste Management System', 'Solid Waste Management System', 'Solid Waste Management System', 0, 0, 0, 0, 0),
(20, 'Orissa Espas Aplikasyon Sant (ORSAC)', 'orissa-space-application-centre', '<p><strong>Orsac:</strong> Skylabs te av&egrave;k siks&egrave; deplwaye apar&egrave;y gps avanse, ki make yon reyalizasyon enp&ograve;tan nan jaden teknoloji ak sekirite pou sekt&egrave; min Nan Odisha. Av&egrave;k eksp&egrave;tiz yo ak devouman nan inovasyon, Skylabs te asire operasyon an san pwobl&egrave;m nan pr&egrave;ske 25,000 apar&egrave;y machin GPS ki baze sou, chak ekipe ak TEKNOLOJI ICAT-s&egrave;tifye ak kat sim entegre ofri koneksyon doub-rezo.<br />\r\nApar&egrave;y sa yo te jwe yon w&ograve;l enp&ograve;tan nan amelyore efikasite ak sekirite nan operasyon min atrav&egrave; rejyon an. Skylabs &#39; angajman nan ekselans se evidan nan kapasite siveyans an tan rey&egrave;l li yo, sa ki p&egrave;m&egrave;t pou swiv egzak nan kote machin, wout, ak p&egrave;f&ograve;mans. Sa a, nan vire, te mennen nan lojistik optimize ak itilizasyon resous, amelyore efikasite operasyon&egrave;l an jeneral.<br />\r\nAnplis de sa, apar&egrave;y Gps Skylabs yo kontribye siyifikativman nan kreye yon anviw&ograve;nman travay ki pi an sekirite pa bay done esansy&egrave;l pou prevansyon aksidan ak fasilite repons ijans rapid l&egrave; sa neses&egrave;. Skylabs &#39; dediksyon nan exploiter teknoloji d&egrave;nye kri te mete nouvo estanda endistri ak mete aksan sou enp&ograve;tans ki genyen nan sekirite nan operasyon min.<br />\r\nAv&egrave;k solisyon gps inovat&egrave; Skylabs nan forefront, endistri min Nan Odisha se pare pou yon avni ki make pa ogmante pwodiktivite, efikasite, ak, pi wo a tout moun, ranf&ograve;se mezi sekirite. Skylabs kontinye mennen wout la nan avansman teknolojik ak estanda sekirite nan sekt&egrave; min, mete yon egzanp louabl pou endistri a k&ograve;m yon antye.</p>\r\n', 'Skylabs te avèk siksè deplwaye aparèy gps avanse, ki make yon reyalizasyon enpòtan nan jaden teknoloji ak sekirite pou sektè min Nan Odisha. ', '', '35-02-13', 'orrisa_space.png', 'middle_banner_new_1.png', 2, 0, 'Skylabs', 0, 'ORISSA Space Application Centre ', 'ORISSA Space Application Centre ', 'ORISSA Space Application Centre ', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page`
--

CREATE TABLE `tbl_page` (
  `id` int(11) NOT NULL,
  `page_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_content` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `short_content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_layout` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keyword` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `related_page` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_page`
--

INSERT INTO `tbl_page` (`id`, `page_name`, `page_slug`, `page_content`, `short_content`, `page_layout`, `banner`, `status`, `meta_title`, `meta_keyword`, `meta_description`, `related_page`) VALUES
(16, 'Konpayi An Jeneral', 'company-overview', '<h4><strong>Konpayi An Jeneral</strong></h4>\r\n\r\n<p>Skylabs Solution se yon konpayi teknoloji dirijan ki espesyalize nan bay solisyon ak s&egrave;vis inovat&egrave; nan biznis atrav&egrave; div&egrave;s endistri. Av&egrave;k yon gwo konsantre sou teknoloji d&egrave;nye kri, Skylabs Solution gen pou objaktif pou bay &ograve;ganizasyon yo pouvwa ak kondwi transf&ograve;masyon dijital yo. Ap&egrave;si konpayi sa a pral bay yon ap&egrave;si sou misyon Skylabs Solution, val&egrave; debaz, eksp&egrave;tiz, ak angajman pou bay rezilta eksepsyon&egrave;l.</p>\r\n\r\n<p>Skylabs Solution angaje l pou l mennen inovasyon, bay solisyon eksepsyon&egrave;l, ak ankouraje patenarya alont&egrave;m ak kliyan yo. Av&egrave;k apw&ograve;ch ki santre sou kliyan nou yo ak eksp&egrave;tiz nan teknoloji d&egrave;nye kri, nou byen ekipe pou satisf&egrave; bezwen evolye biznis yo nan peyizaj dijital jodi a. Kontakte nou jodi a pou antre nan yon vwayaj transf&ograve;masyon epi debloke vr&egrave; potansy&egrave;l &ograve;ganizasyon w lan.</p>\r\n', 'Skylabs Solution se yon konpayi teknoloji dirijan ki espesyalize nan bay solisyon inovatè', 'About Us Page Layout', 'companyoverview.png', 'Active', 'Company Overview', '', '', ''),
(17, 'Ekip Lidèchip', 'leadership-team', '', 'Elevasyon Skylabs, kote lidèchip rankontre posiblite san limit', 'Team Layout', '', 'Active', 'Team', '', '', ''),
(18, 'Patnè', 'partner', '', 'Alyans estratejik, orizon san limit', 'Partner Layout', 'partner.jpg', 'Active', 'Partner', '', '', ''),
(19, 'Blogs', 'blogs', '', 'Short Content Goes Here..', 'Blog Page Layout', '', 'Active', 'Blogs', '', '', ''),
(20, 'Karyè', 'career', '', 'Debloke potansyèl ou, fòme avni ou: Eksplore posiblite karyè san limit ak Skylabs!', 'Career Layout', '', 'Active', 'Career', '', '', ''),
(21, 'Sèvis', 'services', '<p>THE RIGHT CHOICE</p>\r\n\r\n<h2>DELIVERING CUSTOMIZED DIGITAL SOLUTIONS</h2>\r\n\r\n<p>We deliver strategically, functionally, creatively and commercially</p>\r\n', '', 'Service Page Layout', 'skylabs-services.jpg', 'Active', 'Services', '', '', ''),
(22, 'Remote Sensing', 'remote-sensing', '<p>Nan Skylabs nou ofri yon sij&egrave; ki ab&ograve;de vaste segond&egrave; nan k&egrave;k aleka, photogrammetry ak s&egrave;vis rada ki pral efektivman ede asosyasyon ou nan itilize avantaj siplemant&egrave; soti nan satelit ak senbolis ki wo. Atrav&egrave; gwoupman, mozayik, re-projections ak f&ograve;m &eacute;lucidation foto nou ka bati done definitif sou peyi itilize ak rive kouv&egrave;ti. Estrateji nou yo ka louvri nouvo fen&egrave;t nan mond lan evidan, transm&egrave;t eksperyans s&egrave;k nan s&egrave;n fizik nou an.</p>\r\n\r\n<p>Sondaj fizik se pa yon opsyon solid ak efikas tan sa a k&ograve;m k&egrave;k pwoj&egrave; mande pou yon akizisyon ech&egrave;l gwo nan enf&ograve;masyon sou obj&egrave; yo. Remote k&egrave;k se yon teknik ki se tan ak pri efikas ak Se pout&egrave;t sa se avantaje pou pwoj&egrave; sa yo.</p>\r\n\r\n<p>Solisyon Skylabs ofri s&egrave;vis k&egrave;k aleka nan kliyan li yo atrav&egrave; lemond. S&egrave;vis yo asire egzat koleksyon done pri-efikas ki se opinyon enp&ograve;tan pou planifikasyon ak konsepsyon nan pwoj&egrave; kat. S&egrave;vis nou yo nan k&egrave;k aleka kouvri yon seri gwo aplikasyon pou tankou mod&egrave;l espasyal ak analiz, analiz imaj ak klasifikasyon, kat kouv&egrave;ti t&egrave; ak kategori t&egrave;ren, balanse koul&egrave;, Mozayik ak konpresyon, LiDAR koreksyon ak klasifikasyon, Feature kaptire ak aktyalizasyon, kreyasyon t&egrave;ren, koreksyon ak analiz ortorectification yo tr&egrave; k&egrave;k mezire.</p>\r\n\r\n<p>Nou ofri s&egrave;vis k&egrave;k aleka pa kreye done yo analize ak konpare done nan for&egrave;, move tan, vejetasyon, polisyon, ewozyon, itilizasyon t&egrave;, planifikasyon vil, obs&egrave;vasyon milit&egrave;, envestigasyon akeyolojik, ak sou sa ak sou. Ekip teknik nou yo gen bon eksperyans men-sou nan l&egrave; l s&egrave;vi av&egrave;k aleka k&egrave;k lojisy&egrave;l an tankou Geoserver ak OSM elatriye.</p>\r\n\r\n<p>Av&egrave;k teknik k&egrave;k aleka ou ka rekipere gwo kantite done, diminye travay jaden many&egrave;l dramatikman. Remote k&egrave;k p&egrave;m&egrave;t Rekipere nan done nan rejyon difisil oswa enposib jwenn aks&egrave; plis ou ka kolekte yon anpil plis done nan yon kout pery&ograve;d de tan.</p>\r\n\r\n<p><strong>Skylabs solisyon aleka k&egrave;k s&egrave;vis gen ladan nan v&egrave;tikal sa yo-</strong></p>\r\n\r\n<ul>\r\n	<li>Ent&egrave;pretasyon simagri satelit ak klasifikasyon</li>\r\n	<li>Klasifikasyon-sip&egrave;vize ak san sip&egrave;vizyon</li>\r\n	<li>Chanjman deteksyon</li>\r\n	<li>Klasifikasyon kouv&egrave;ti t&egrave;</li>\r\n	<li>Kat agrik&ograve;l</li>\r\n	<li>Mining ak kat g&eacute;ologie</li>\r\n</ul>\r\n\r\n<p>Skylabs gen anpil eksperyans ak eksp&egrave;tiz nan bay pri efikas, tan mare ak s&egrave;vis andomaje. Kliyan yo kontiny&egrave;lman kenbe nan bouk ak devlopman nan pwoj&egrave; a.</p>\r\n', 'Let\'s Explore New Horizons - Your Journey to GIS Excellence Starts Here', 'Full Width Page Layout', 'remote_sensing.png', 'Active', 'Remote Sensing', '', '', 'remote-sensing,sky-gis,survey,lmis,planning-tools,fleet-management-system,emergency-response-system,skylabs-mdvr-solution,depot-management-system,sky-itms-solution,automated-fare-collection-system,solid-waste-management-and-monitoring-system,rfid-ble-image-recognition,gate-automation-solution,boom-barrier-automation-solution,advance-boom-barrier-automation-solution,consulting,our-advantages,our-focused-verticals-are,outsourcing,staffing'),
(23, 'Process', 'process', '<p>Basically Remote sensors collect data by detecting the energy that is reflected from earth. These sensors can be on satellites or mounted on aircraft. Remote sensors can be either passive or active. Passive sensors respond to external stimuli. They record natural energy that is reflected or emitted from the earth&#39;s surface. The most common source of radiation detected by passive sensors is reflected sunlight.</p>\r\n', '', 'Full Width Page Layout', '', 'Active', 'Process', '', '', ''),
(24, 'Syèl GIS', 'sky-gis', '<p>Sist&egrave;m enf&ograve;masyon jeyografik (GIS) se yon branch nan jewografi ki ede nan koleksyon an, depo, jesyon, manipilasyon, ak analiz de tout kalite done espasyal oswa jewografik. GIS, yo te yon teknoloji &eacute;mergentes, se toujou ap evolye ak entwodiksyon nan nouvo teknoloji, zouti, ent&egrave;n&egrave;t la, ak apar&egrave;y mobil. GIS se te f&egrave; leve nan senk eleman enp&ograve;tan: teknoloji, lojisy&egrave;l, moun, done, ak metodoloji. GIS kouri sou py&egrave;s ki nan konpit&egrave;, ki ta ka yon s&egrave;v&egrave; &ograve;dinat&egrave; santralize oswa &ograve;dinat&egrave; Desktop oton&ograve;m. Skylabs, founis&egrave; ki pi f&egrave; konfyans nan peyi Zend nan devlopman GIS ak s&egrave;vis pwogramasyon, ede ou nan devlope lojisy&egrave;l ki ka magazen, analize, epi montre enf&ograve;masyon jeyografik.</p>\r\n\r\n<h4>Isit la nan ki jan li fonksyone:</h4>\r\n\r\n<p>S&egrave;vis Transf&ograve;masyon GIS ka ede ou jwenn enf&ograve;masyon enp&ograve;tan sou yon pwopriyete, kote, oswa avantaj pa itilize done dinamik ki espasyal &ograve;ganize. Ak k&ograve;m yon GIS Mapping Konpayi, nou ede anpil &ograve;ganizasyon ak biznis, ajans gouv&egrave;nman an, jeolojis, anviw&ograve;nman, ak l&ograve;t moun nan ef&ograve; yo nan kreye yon mond pi bon.</p>\r\n', 'Let\'s Explore New Horizons - Your Journey to GIS Excellence Starts Here', 'Full Width Page Layout', 'sky_GIS.png', 'Active', 'Sky GIS', '', '', 'remote-sensing,sky-gis,survey,lmis,planning-tools,fleet-management-system,emergency-response-system,skylabs-mdvr-solution,depot-management-system,sky-itms-solution,automated-fare-collection-system,solid-waste-management-and-monitoring-system,rfid-ble-image-recognition,gate-automation-solution,boom-barrier-automation-solution,advance-boom-barrier-automation-solution,consulting,our-advantages,our-focused-verticals-are,outsourcing,staffing'),
(25, 'Sondaj la', 'survey', '<p>Sondaj jwe yon w&ograve;l tr&egrave; enp&ograve;tan nan kolekte done ki s&ograve;ti nan z&ograve;n ki pa gen kat mete ajou. Kat sondaj yo tou tr&egrave; ede nan t&egrave; truthing z&ograve;n nan kons&egrave;ne pou kreyasyon kat enf&ograve;masyon egzat peyi. Kat sa yo tou ede konpayi yo nan konprann tandans yo mache, enf&ograve;masyon peyi pou byen imobilye, achitekti, min ak s&egrave;vis piblik endistri yo. Kat sa yo pote sou yon p&egrave;spektiv milti-dimansyon pou pran desizyon enf&ograve;me.</p>\r\n\r\n<p>Geometry depann sou yon varyete de lojisy&egrave;l ak teknoloji ranmase enf&ograve;masyon ki egziste deja, kolekte nouvo enf&ograve;masyon, analize done, pwodwi plan, jere pwoj&egrave;, ak delivre done egzat. Teknoloji sist&egrave;m enf&ograve;masyon jeyografik (GIS) pote fonksyonalite sa a ak plis ank&ograve; nan yon s&egrave;l kote, bay yon kote santral yo ka f&egrave; analiz espasyal, done kouvri, ak entegre l&ograve;t solisyon ak sist&egrave;m. GIS se bati sou yon baz done olye ke dosye pwoj&egrave; endividy&egrave;l, p&egrave;m&egrave;t Geometry fasil jere, r&eacute;utilisation, pataje, ak analize done, ekonomize yo tan.</p>\r\n\r\n<p>Geometry jwe yon w&ograve;l santral nan yon seri de ajans gouv&egrave;nman yo ak &ograve;ganizasyon prive, ki soti nan planifikasyon ak konstriksyon nan jeni ak det&egrave;minasyon fwonty&egrave; peyi. Solisyon lojisy&egrave;l SKYLABS GIS yo ka opere nan bay done nan ajans div&egrave;s kalite nan f&ograve;ma yo mande yo pandan w ap kenbe entegrite debaz done a.</p>\r\n\r\n<p>Skylabs Solisyon IT gen yon rezo tr&egrave; laj&egrave; nan Geometry ki ede div&egrave;s kalite gouv&egrave;nman an k&ograve;m byen ke &ograve;ganizasyon prive nan fini nan sondaj many&egrave;l. Yo menm tou yo jwe yon w&ograve;l enp&ograve;tan nan kreyasyon detay oryante kat navigasyon.</p>\r\n\r\n<p><strong>S&egrave;vis sondaj nou yo gen ladan nan v&egrave;tikal sa yo-</strong></p>\r\n\r\n<ul>\r\n	<li>Sondaj bilding yo</li>\r\n	<li>Mod&egrave;l Teren Digital (DTMs)</li>\r\n	<li>Sondaj Jeni</li>\r\n	<li>Analiz Sondaj Transf&ograve;masyon legal yo</li>\r\n	<li>Sondaj Resous Natir&egrave;l yo</li>\r\n	<li>Sondaj Ordnance</li>\r\n	<li>Sondaj Imobilye</li>\r\n	<li>Sondaj iben s&#39;&eacute;tal&egrave;</li>\r\n	<li>Sondaj sou Transf&ograve;masyon s&egrave;vis piblik</li>\r\n</ul>\r\n', 'Let\'s Explore New Horizons - Your Journey to GIS Excellence Starts Here', 'Full Width Page Layout', 'gis_survey_(1).png', 'Active', 'Survey', '', '', 'remote-sensing,sky-gis,survey,lmis,planning-tools,fleet-management-system,emergency-response-system,skylabs-mdvr-solution,depot-management-system,sky-itms-solution,automated-fare-collection-system,solid-waste-management-and-monitoring-system,rfid-ble-image-recognition,gate-automation-solution,boom-barrier-automation-solution,advance-boom-barrier-automation-solution,consulting,our-advantages,our-focused-verticals-are,outsourcing,staffing'),
(26, 'LMIS', 'lmis', '<p>Solisyon LMIS kons&egrave;ne &ograve;ganizasyon nan pwosesis akizisyon T&egrave; pou plizy&egrave; pwoj&egrave; li yo nan diferan kote nan Eta a. Pwoj&egrave; LMIS enplike volim tr&egrave; wo nan jesyon done, siveyans sibstansy&egrave;l ak kontw&ograve;l. Skylabs te devlope yon zouti ki ka ede jesyon f&egrave; pwosesis akizisyon peyi transparan, efektivman ak efikasite Pa Aplike pwosesis jesyon peyi GIS nou an p&egrave;m&egrave;t, yon &ograve;ganizasyon ka w&egrave; ak kontwole pwosesis la akizisyon konpl&egrave;.</p>\r\n\r\n<p>LMIS ede &ograve;ganizasyon al kontre ak kontwole konf&ograve;mite salutatory ak anviw&ograve;nman yo epi tou ede jesyon pou planifye estrikti tankou pou chak t&egrave; resous ki disponib.</p>\r\n\r\n<p><strong>Z&ograve;n fonksyon&egrave;l ki kouvri nan s&egrave;vis LMIS nou yo</strong></p>\r\n\r\n<p>Sist&egrave;m Enf&ograve;masyon sou Jesyon T&egrave; yo pwopoze a (LMIS) dwe konsantre sou asp&egrave; jesyon peyi nan z&ograve;n fonksyon&egrave;l sa yo:</p>\r\n\r\n<ul>\r\n	<li>Sist&egrave;m Enf&ograve;masyon sou T&egrave; Akizisyon / Alienasyon Siveyans &amp; Kontw&ograve;l</li>\r\n	<li>Sist&egrave;m Enf&ograve;masyon sou Retablisman &amp; Reyabilitasyon (R&amp;R) Aktivite yo</li>\r\n	<li>Sist&egrave;m Enf&ograve;masyon sou Responsablite Sosyal Corporate (CSR) Aktivite yo</li>\r\n	<li>Sist&egrave;m Jesyon Dokiman</li>\r\n</ul>\r\n\r\n<p><strong>Objektif LMIS la</strong></p>\r\n\r\n<p>Akizisyon / Alienasyon nan peyi enplike nan etap pwosesis konpl&egrave; ak yon gwo kantite pwosesis mil w&ograve;ch ki enplike yon kantite antite ak jenerasyon / antretyen nan yon gwo kantite ent&egrave;medy&egrave; pwograme pwosesis ki gen rap&ograve; ak dokiman yo. Jesyon efikas nan baz enf&ograve;masyon sa yo gwo se esansy&egrave;l pou siveyans efikas / kontw&ograve;l nan akizisyon nan peyi / pwosesis izolman, genyen santiman piblik nan fasilitasyon nan debousman al&egrave; / rasyon&egrave;l nan konpansasyon, reklamasyon koloni ak kontw&ograve;l sou finansye.</p>\r\n\r\n<p>GIS ki baze sou LMIS la pwopoze ak objektif sa yo gwo:</p>\r\n\r\n<ul>\r\n	<li>Pi bon apresyasyon nan baz la peyi ak pwosesis yo jesyon peyi nan reprezantasyon vizy&egrave;l</li>\r\n	<li>Fasilite GIS ki baze sou siveyans nan akizisyon T&egrave; / etranje trete reyentegrasyon &amp; aktivite Reyabilitasyon, Corporate Responsablite Sosyal aktivite yo</li>\r\n	<li>GIS ki baze sou Sip&ograve; Desizyon (DSS) zouti (tr&egrave; / analiz) ede jesyon an nan pwosesis pou pran desizyon</li>\r\n	<li>Remote, sekirite difizyon ent&egrave;n&egrave;t nan kat jeyografik ki baze sou enf&ograve;masyon peyi</li>\r\n	<li>Sip&ograve; pou ekip jeni / jesyon pwoj&egrave; a, ekip s&egrave;vis piblik nan pwovizyon enf&ograve;masyon peyi apwopriye</li>\r\n</ul>\r\n\r\n<p><strong>Fonksyonalite nou yo nan LMIS</strong></p>\r\n\r\n<p>Fonksyon&egrave; nan Seksyon T&egrave; a se itilizat&egrave; prensipal Sist&egrave;m Enf&ograve;masyon Jesyon T&egrave; yo pwopoze a. Anplis, sist&egrave;m lan dwe itilize tou pa seksyon IT, seksyon reyentegrasyon &amp; Reyabilitasyon (R &amp; R), seksyon Reyabilitasyon Sosyal Corporate (CSR) ak depatman S&egrave;vis S&egrave;vis S&egrave;vis S&egrave;vis. Yon deskripsyon tou kout sou enter&egrave; prensipal la nan diferan seksyon fonksyon&egrave;l se jan sa a.</p>\r\n\r\n<p><strong>Seksyon T&egrave; :</strong></p>\r\n\r\n<ul>\r\n	<li>Pou kontwole pwosesis akizisyon / izolman peyi a, idantifye z&ograve;n diferans yo, aplike mezi ratrapaj yo.</li>\r\n	<li>Pou ede ekip jeni pwoj&egrave; a nan kow&ograve;done plan akizisyon T&egrave; ak plan jeni pwoj&egrave; a.</li>\r\n	<li>Apre-up nan Govt la. akselere pwosesis akizisyon / etranje T&egrave; yo.</li>\r\n	<li>Tracking of Award Konpansasyon / Peman pou prive / Govt la. ak peyi for&egrave;.</li>\r\n	<li>Kenbe Dosye tranzaksyon finansye yo.</li>\r\n	<li>S&egrave;vi ak pi wo a k&ograve;m yon Sist&egrave;m Enf&ograve;masyon Imobilye nan lavni.</li>\r\n</ul>\r\n\r\n<p><strong>R &amp; R Seksyon:</strong></p>\r\n\r\n<ul>\r\n	<li>Tracking nan vilaj pwoj&egrave; ki gen bon konprann ki afekte fanmi (PAF) / pwoj&egrave; deplase fanmi (PDF).</li>\r\n	<li>Tracking nan konpansasyon nan plas nan peyi tankou pou politik la R &amp; R nan Govt.</li>\r\n	<li>Demenajman nan fanmi yo deplase nan koloni an R&amp;R.</li>\r\n</ul>\r\n\r\n<p><strong>Seksyon CSR:</strong></p>\r\n\r\n<ul>\r\n	<li>Planifikasyon ak Aplikasyon nan aktivite CSR nan pwoj&egrave; a ki afekte / vilaj periferik.</li>\r\n	<li>Kenbe tras nan Aktivite / Benefisy&egrave; yo / Finansye .</li>\r\n</ul>\r\n', 'Let\'s Explore New Horizons - Your Journey to GIS Excellence Starts Here', 'Full Width Page Layout', 'lmis-header.png', 'Active', 'LMIS', '', '', 'remote-sensing,sky-gis,survey,lmis,planning-tools,fleet-management-system,emergency-response-system,skylabs-mdvr-solution,depot-management-system,sky-itms-solution,automated-fare-collection-system,solid-waste-management-and-monitoring-system,rfid-ble-image-recognition,gate-automation-solution,boom-barrier-automation-solution,advance-boom-barrier-automation-solution,consulting,our-advantages,our-focused-verticals-are,outsourcing,staffing'),
(27, 'Features and Benefits of LMIS', 'features-and-benefits-of-lmis', '<p>The professional, engaged in the acquisition work, will have look and feel of the area, they are going to work on. Simultaneously, with a single click they will have all the information required to start the acquisition process.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>A whole circle of people may be involved in a acquisition process, but a few would be physically working it out. As the system is web-based, regular updating of the system will help everyone to get updated with the workflow at the end of the day.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Acquisition of any kind comes with a risk of arousal of several kinds of litigation, may be in near or far future. This system will act as an archive of documents and information which would in turn help the company personal to solve the litigations with ease.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Statistical analysis on Spatial features with web interfaces.</li>\r\n	<li>Comprehensive and flexible integration of several map layers.</li>\r\n	<li>Thematic maps with high visual impact.</li>\r\n	<li>All kinds of querying capabilities through web interfaces.</li>\r\n	<li>Capabilities to generate reports in (Web HTML) and (Microsoft Excel) formats.</li>\r\n	<li>Work area saving facilities and customized workstation as per users preferences.</li>\r\n</ul>\r\n', '', 'Full Width Page Layout', 'lmis1.jpg', 'Active', '', '', '', ''),
(28, 'Report Covered | Focused Areas', 'report-covered-focused-areas', '<h4><strong>Check the Focused areas and Reports covered so far</strong></h4>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Land Purpose Wise Acquisition Status (FOREST,GOVT. AND PRIVATE LAND)</li>\r\n	<li>Purpose wise allotment details of Land</li>\r\n	<li>Pending Land Details\r\n	<ol>\r\n		<li>Village Purpose Wise Pending Land</li>\r\n		<li>Village Wise Stage/Status Pending Land (Work Flow)</li>\r\n	</ol>\r\n	</li>\r\n	<li>Land Utilization Pattern</li>\r\n	<li>Village wise RR Beneficiaries</li>\r\n	<li>Socio Economic Report PAF /PDF</li>\r\n	<li>Tenancy Database</li>\r\n	<li>Village Wise Award List</li>\r\n	<li>Village wise Acq. Milestones Report</li>\r\n	<li>Village wise Acq. Milestones Chart</li>\r\n	<li>Village wise Estimation/ and summary Report</li>\r\n	<li>Land Beneficiary Reports</li>\r\n	<li>Parcel Listing</li>\r\n	<li>Payment Register Village wise purpose wise</li>\r\n	<li>Village Khata Wise Share</li>\r\n	<li>Village Wise Land Schedule</li>\r\n	<li>State Agency Demand Report</li>\r\n	<li>HR Beneficiary Report</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4><strong>Focused Areas</strong></h4>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Parcel Details (Land Khata)</li>\r\n	<li>Award Register</li>\r\n	<li>Social Economic Survey Data- PAF (Project affected families)/ PDF (Project displaced families)</li>\r\n	<li>R&amp;R and Beneficiaries</li>\r\n	<li>Tenancy</li>\r\n	<li>Estimation</li>\r\n	<li>Share Register</li>\r\n	<li>Payment Register (Pvt/Govt)</li>\r\n	<li>HR Beneficiaries</li>\r\n	<li>CSR (Corporate Social Responsibilities)</li>\r\n	<li>Document Management System</li>\r\n	<li>GIS Integration</li>\r\n	<li>Survey data integration</li>\r\n	<li>Better thematic mapping as per user need</li>\r\n	<li>Department wise access</li>\r\n	<li>Better reporting system and export option</li>\r\n</ol>\r\n', '', 'Full Width Page Layout', 'lmis2.jpg', 'Active', '', '', '', ''),
(29, 'Planifikasyon Zouti', 'planning-tools', '<p>Rech&egrave;ch mache montre seleksyon sit ak biznis rech&egrave;ch kote sou ent&egrave;n&egrave;t, souvan anvan yo rive jwenn soti nan im&egrave;l oswa telef&ograve;n. Nou providie zouti ent&egrave;aktif pou yo visualized ak analize done seleksyon sit, ou ka p&egrave;di mennen san yo pa janm konnen rejyon ou te konsidere. Suite nou an nan zouti done ent&egrave;aktif asire envestis&egrave; potansy&egrave;l ka jwenn enf&ograve;masyon sou krit&egrave; espesifik yo dir&egrave;kteman sou sit ent&egrave;n&egrave;t ou, ki gen ladan done sou d&eacute;mographie, mend&egrave;v, GIS, biznis / endistri, edikasyon, sal&egrave; ak plis ank&ograve;. GIS Planifikasyon liy-up nan zouti enf&ograve;masyon sou ent&egrave;n&egrave;t bay repons a kesyon kle seleksyon sit.</p>\r\n', 'Let\'s Explore New Horizons - Your Journey to GIS Excellence Starts Here', 'Full Width Page Layout', 'planning_tool.png', 'Active', 'Planning Tools', '', '', 'remote-sensing,sky-gis,survey,lmis,planning-tools,fleet-management-system,emergency-response-system,skylabs-mdvr-solution,depot-management-system,sky-itms-solution,automated-fare-collection-system,solid-waste-management-and-monitoring-system,rfid-ble-image-recognition,gate-automation-solution,boom-barrier-automation-solution,advance-boom-barrier-automation-solution,consulting,our-advantages,our-focused-verticals-are,outsourcing,staffing'),
(30, 'Solisyon GIS', 'gis-solution', '', 'GIS - Transfòmasyon lavni an: kreye patenarya solisyon GIS ou.', 'Service Page Layout', 'gis-solu.jpg', 'Active', 'GIS Solution', '', '', ''),
(31, 'Telematics Solution', 'telematics-solution', '', 'Empowering Smart Mobility with Telematics Technology', 'Service Page Layout', 'gps-taxi.jpg', 'Active', 'Telematics Solution', '', '', ''),
(32, 'FLEET MANAGEMENT SYSTEM', 'fleet-management-system', '<p>Fleet management is the management of a fleet of vehicles belonging to a company and can include a wide range of functions and tasks, such as management of staff (drivers and also mechanics in some companies), of fuel costs, purchases and policies, vehicle investment, overall fleet costs, safety... which are very important. Managing a fleet is not an easy task and requires a good understanding of company&#39;s needs and best practices.</p>\r\n\r\n<p>Skylabs Solutions Pvt Ltd has expertise into it. Fleet management solution is a comprehensive software designed to track and plan all elements related to the management of fleets of vehicles and assets of a company. The optimal solution is the software that covers all stages of planning (vehicle selection, procurement and maintenance) as well as operations (including transportation activities of the company).</p>\r\n\r\n<p>The different modules of a Fleet Management Solution are focused on different areas and activities: logistics and purchasing, human resources (drivers); finance and accounting telematics; etc. In order to get the most out of the solution, it is essential to understand its various functionalities and then determine which ones meet the specific needs of the business or organization. We know how challenging it is to be a fleet manager or, for smaller companies, simply the person in charge of running a fleet of vehicles.</p>\r\n\r\n<p>We understand how difficult it is to be a fleet manager or, in smaller businesses, simply the person in charge of running a fleet of vehicles. Keeping this in mind We made</p>\r\n\r\n<h4>TRACKNSYNC</h4>\r\n\r\n<p>Tracknsync provides real-time GPS tracking capabilities through its Smartphone Tracking &amp; Chatting App and standalone tracking devices. The Tracknsync real-time tracking app and tracking devices use GPS (Global Positioning System) and mobile data services to track, send/receive texts, images, videos, and even user locations with photos.</p>\r\n\r\n<p>The Tracknsync app is completely free to download and use (data charges may apply), and it is combined with low-cost devices, making Tracknsync the best option for you!</p>\r\n', 'Let\'s Explore New Horizons - Your Journey to GIS Excellence Starts Here', 'Full Width Page Layout', 'f23.png', 'Active', 'FLEET MANAGEMENT SYSTEM', '', '', 'remote-sensing,sky-gis,survey,lmis,planning-tools,fleet-management-system,emergency-response-system,skylabs-mdvr-solution,depot-management-system,sky-itms-solution,automated-fare-collection-system,solid-waste-management-and-monitoring-system,rfid-ble-image-recognition,gate-automation-solution,boom-barrier-automation-solution,advance-boom-barrier-automation-solution,consulting,our-advantages,our-focused-verticals-are,outsourcing,staffing'),
(33, 'Emergency Response System', 'emergency-response-system', '<h4><strong>Who Are We?</strong></h4>\r\n\r\n<p>Skylabs Solution India Pvt Ltd is a company that specializes in providing enterprise software and hardware solutions in the location-based domain. Skylabs was founded in 2013 and has a touch-base office located in New Delhi.<br />\r\nThe company offers a wide range of services and products including consulting, cloud management, hosting services, IT outsourcing, and business process solutions. The company also offers software and products that provide real-time data and analytics for various industries such as telecommunications, utilities, transportation, real estate, healthcare and retail.</p>\r\n\r\n<p>Skylabs has also collaborated with a number of other companies in various parts of the world and offers customized solutions for the clients based on their specific requirements. Some of the clients that Skylabs has worked with include Asian Paints, Mahindra Group, Intel Security, and Petronet.&quot; Skylabs has been providing software solutions to clients all over the world and has successfully delivered several projects to its customers. These projects include enterprise content management, infrastructure management, business intelligence, and others. With its expertise in delivering top-notch technology solutions to its clients, the company has become one of the leading solution providers in the industry today. In its mission to offer innovative solutions to its customers.</p>\r\n\r\n<h4><strong>Skylabs Project of ERS (Emergency Response System) in India.</strong></h4>\r\n\r\n<p>The 112 is an element of the Government of India&#39;s Emergency Response Support System (ERSS).... If available, the system forwards the emergency alert to a nearby local support system such as Ambulance, Fire, Police, and other services.<br />\r\n112 dispatchers keep a log of police, fire, and EMS services using the Computer Aided Dispatch System (CAD). It can be used to send messages to dispatchers using a mobile data terminal (MDT) or to store and retrieve data (i.e. radio logs, field interviews, client information, schedules, etc.). A dispatcher may use a two-way radio to announce the call details to field units. Some systems communicate using the selective calling features of a two-way radio system. Text messages containing call-for-service information may be sent by CAD systems to alphanumeric pagers or wireless telephony text services such as SMS.</p>\r\n\r\n<h4><strong>Components of 112 CGA</strong></h4>\r\n\r\n<p>Telephony System for Call Management</p>\r\n\r\n<p>Call management is the initial stage of any emergency case. All calls made on 112 Toll Free number will be received and distributed among the first available agent in shortest waiting time through the IVR system.</p>\r\n\r\n<h4><strong>Centralized CRM Application</strong></h4>\r\n\r\n<p>Centralized CRM Application will cover call registration, dispatch of the ambulance/Vehicle, recording of consultation &amp; comments, regular update on the case, inventory management and final verification by team leaders in the command center.</p>\r\n\r\n<h4><strong>GPS based real time Ambulance Tracking System</strong></h4>\r\n\r\n<p>Real time GPS based tracking system will play vital role in Command Center Application. Command center can monitor movement of the ambulances/vehicles through real time tracking. This system will also help in spying the ambulances through &ldquo;nearby drops&rdquo; and &ldquo;restricted&rdquo; pickup and drop locations.</p>\r\n\r\n<h4><strong>Third party integration</strong></h4>\r\n\r\n<p>Integration with dial 100, 102, 108 and other call centers: Centralized CRM application will provide API endpoint to upload/download emergency calls made on dial 112. 112 control center team will categories particular call under 100, 102,104 or 108. Further respective system can download case data from 112 command center API. Other call centers like 108, 102, 104 or dial 100 will also upload case closure data on the 112 server using 112 server&rsquo;s own API</p>\r\n\r\n<p>Live tracking link to the patient/attendant: CRM software will share a tracking link with patient/attendant. Through this link, on the all popular mobile browsers, a map view will open and real time location of the ambulance/vehicle will be displayed. By this, patient/attendant can also help ambulance staff in locating the pickup point in shortest possible time.</p>\r\n\r\n<p>Dashboard for Respective Ministry or Authority: This system will share real time effectiveness of dial 112 System with respective ministry or Authority in form of dashboard.</p>\r\n\r\n<p>Citizen App for Dial 112: Citizen App can be downloaded from App Store or Play Store for both iOS and Android mobiles. It helps citizen to initiate emergency call in easy way with actual location data. This location data will help Control Center team to detect location of the caller.</p>\r\n\r\n<p>Skylabs Solution India Private Ltd. is a set of professionals with strong Technology background, Combined IT, Telecom and GIS Experience of more than 100++ years, almost covering all India distribution and service network with 160 location Device installation base of more than 70000 units (with 25000 live devices), Integrated more than 18 different type of devices. Experience and with focus shifting from pure play of hardware to SOLUTION Organization. Our focus on loT/M2M Services enable a better return on investment for our customers using ICT to improve their business and day to day activities.</p>\r\n', 'Let\'s Explore New Horizons - Your Journey to GIS Excellence Starts Here', 'Full Width Page Layout', 'ambulance-dispatch-headr.jpg', 'Active', 'Emergency Response System', '', '', 'remote-sensing,sky-gis,survey,lmis,planning-tools,fleet-management-system,emergency-response-system,skylabs-mdvr-solution,depot-management-system,sky-itms-solution,automated-fare-collection-system,solid-waste-management-and-monitoring-system,rfid-ble-image-recognition,gate-automation-solution,boom-barrier-automation-solution,advance-boom-barrier-automation-solution,consulting,our-advantages,our-focused-verticals-are,outsourcing,staffing'),
(34, 'Skylabs MDVR Solution', 'skylabs-mdvr-solution', '<h2>MDVR (Mobile Digital Video Recorder) Solution</h2>\r\n\r\n<p>Mobile digital video recorders allow you to view live footage, store video data, and track vehicles using video management software or a web browser on any remote or local computer over a network. Skylabs MDVR Solution offers 3G mobile DVR, 4G mobile DVR in 4 and 8 channels to suit a wide variety of security needs for your vehicle.</p>\r\n\r\n<p><strong>Advantages</strong></p>\r\n\r\n<ul>\r\n	<li>24*7 video recording from multiple cameras at the same time.</li>\r\n	<li>24*7 storing of video and data on board in the cloud.</li>\r\n	<li>Online video available on multiple devices at the same time.</li>\r\n	<li>Viewing videos is synchronized with tracking the object&#39;s movements on the map.</li>\r\n	<li>Provide events notification when significant event occours on user request.</li>\r\n</ul>\r\n', 'Let\'s Explore New Horizons - Your Journey to GIS Excellence Starts Here', 'Full Width Page Layout', 'gps-taxi1.jpg', 'Active', 'Skylabs MDVR Solution', '', '', 'remote-sensing,sky-gis,survey,lmis,planning-tools,fleet-management-system,emergency-response-system,skylabs-mdvr-solution,depot-management-system,sky-itms-solution,automated-fare-collection-system,solid-waste-management-and-monitoring-system,rfid-ble-image-recognition,gate-automation-solution,boom-barrier-automation-solution,advance-boom-barrier-automation-solution,consulting,our-advantages,our-focused-verticals-are,outsourcing,staffing'),
(35, 'Depot Management System', 'depot-management-system', '<h4><br />\r\nWelcome to the Future of Depot Management</h4>\r\n\r\n<p>Are you seeking a comprehensive solution to streamline and optimize your depot management operations? Look no further. Skylabs presents the cutting-edge Depot Management System &ndash; a powerful, user-friendly, and customizable platform tailored to meet the unique needs of Fleet Operators, Retail Chain Companies, and City Bus Depots.</p>\r\n\r\n<h4><br />\r\nKey Features:</h4>\r\n\r\n<ol>\r\n	<li>&nbsp;Operation &amp; Maintenance Management: Simplify complex operational tasks and maintenance activities. Our system empowers you to efficiently manage every aspect of depot operations.</li>\r\n	<li>&nbsp;Real-time Outshedding Status Tracking: Gain real-time visibility into depot activities with precise tracking of vehicles&#39; movements &ndash; from the moment they enter to when they depart.</li>\r\n	<li>&nbsp;Efficient Tracking Functionality: Access crucial information at your fingertips, including vehicle details, driver information, route data, and real-time speed tracking.</li>\r\n	<li>&nbsp;Roster Activity Management: Seamlessly handle daily, monthly, and yearly roster activities with our intuitive interface.</li>\r\n	<li>&nbsp;GPS, CAN Data, and Live Feeds: Harness the power of GPS data, CAN data insights, and live vehicle and passenger feeds for informed decision-making.</li>\r\n	<li>Communication Hub: Facilitate seamless data communication between depots and relevant authorities, ensuring transparency and swift response.</li>\r\n	<li>&nbsp;SOS Alerts and Email Generation: Enhance safety measures with SOS alerts while keeping higher management in the loop with automated email generation.</li>\r\n	<li>Effortless Complaint Handling: Simplify the process of addressing driver complaints related to vehicle parts and performance.</li>\r\n	<li>Employee Management: Efficiently allocate duties to drivers and employees, improving workforce management.</li>\r\n	<li>Tyre and Battery Management: Easily link and delink tyres and batteries based on specific vehicle requirements.</li>\r\n	<li>&nbsp;Billing Reports: Accurately track total kilometers for precise billing and financial reporting.</li>\r\n	<li>&nbsp;Comprehensive Reporting: Access a wide range of reports, including shift status, trip status, missed bus stops, duty reports, infraction reports, stay reports, location reports, and route violation reports.</li>\r\n</ol>\r\n\r\n<p>Skylabs Depot Management System is more than just a software solution &ndash; it&#39;s a transformative tool that empowers you to optimize operations, enhance transparency, and elevate overall efficiency.</p>\r\n\r\n<h4>Discover Skylabs Depot Management System</h4>\r\n\r\n<p>Join us in the future of depot management. Explore how our innovative system can revolutionize your depot operations, streamline your processes, and position you at the forefront of your industry.<br />\r\nFor more information and to schedule a demo, contact us today.</p>\r\n', 'Let\'s Explore New Horizons - Your Journey to GIS Excellence Starts Here', 'Full Width Page Layout', 'thmss.jpg', 'Active', 'Depot Management System', '', '', 'remote-sensing,sky-gis,survey,lmis,planning-tools,fleet-management-system,emergency-response-system,skylabs-mdvr-solution,depot-management-system,sky-itms-solution,automated-fare-collection-system,solid-waste-management-and-monitoring-system,rfid-ble-image-recognition,gate-automation-solution,boom-barrier-automation-solution,advance-boom-barrier-automation-solution,consulting,our-advantages,our-focused-verticals-are,outsourcing,staffing'),
(36, 'Smart City Solution', 'smart-city-solution', '', 'Empowering Tomorrow\'s Cities with Innovation.', 'Service Page Layout', 'other-sol.jpg', 'Active', 'Smart City Solution', '', '', ''),
(37, 'Kontakte nou', 'contact-us', '', 'KONTAK AK NOU', 'Contact Us Page Layout', '', 'Active', 'Contact Us', '', '', ''),
(38, 'Sky ITMS Solution', 'sky-itms-solution', '<h4>Sky ITMS Solution</h4>\r\n\r\n<p>An effective Public Transportation Management System is the foundation of a city&#39;s appeal to its population, economy, and natural environment. Transportation management systems suffer from poorly maintained buses, unoptimized routes and frequency, and unpredictable arrival and departure of buses at bus stops, causing great pain to residents. A well-planned and effectively managed Intelligent and Integrated Public Transportation solution improves operator operating competency, fleet management, citizen satisfaction, and service dependability and on-time availability. Skylabs launched a best-in-class Transport Management System that integrates many users for a smooth ride by providing fast and convenient transit services to passengers.</p>\r\n\r\n<h4>Passenger Information System :</h4>\r\n\r\n<p>The passenger information system is an integrated service that uses vehicle tracking data to estimate departure and arrival times. At a predetermined frequency or on a bus movement basis, the central PIS sends ETA / ETD to fixed display devices mounted at bus stations. Commuters receive transportation information via electronic means such as a website, smartphone app, and SMS. This multi-channel commuter interface allows for speedy access to the transportation system and ensures that users see the public transit system as a safe and dependable option for their travel. To provide users with real-time information, the system is made up of the following units: Bus Station Display Screens Display screen on Bus Transit online site for Bus Schedule &amp; ETA, SMS, Mobile App, and IVRS.</p>\r\n\r\n<h4>Automated Vehicle Locator System:</h4>\r\n\r\n<p>This system instals GPS tracking devices on buses and uses the data collected for tracking purposes. The AVLS system allows the operations team to monitor vehicle movement in real-time and provide data to public information solution devices such as bus stops, terminals, buses, customer portals, and mobile information delivery systems.</p>\r\n\r\n<p><br />\r\nThe following components make up the AVLS for City Buses:</p>\r\n\r\n<ul>\r\n	<li>GPS-based controller mounted on a bus with a two-way communication interface.</li>\r\n	<li>Passenger Information System on Board</li>\r\n	<li>Passenger Information System Off-Board</li>\r\n	<li>Fleet Monitoring and Control System Using GIS</li>\r\n</ul>\r\n\r\n<h4>Vehicle Scheduling &amp; Dispatch System:</h4>\r\n\r\n<p>Vehicle scheduling and dispatch system are included in these public transportation solutions. Apart from the conventional capabilities necessary to supply computer assisted scheduling and dispatch services, it delivers schedule adherence reports, route condition monitoring reports, emergency / incident interfaces, and dynamic scheduling. The public transportation solution may dynamically schedule and optimise vehicle movements by rescheduling vehicle and driver assignments depending on real-time occurrences.</p>\r\n\r\n<h4>Depot Management:</h4>\r\n\r\n<p>A transportation management system allows for the automation of depot operations such as workshop management, fuel management, traffic management, and vehicle management. The module must also handle administrative tasks and storage needs.</p>\r\n', 'A Complete Integrated Transport Management Solution for PMI.', 'Full Width Page Layout', 'itms_1.png', 'Active', 'Sky ITMS Solution', '', '', 'remote-sensing,sky-gis,survey,lmis,planning-tools,fleet-management-system,emergency-response-system,skylabs-mdvr-solution,depot-management-system,sky-itms-solution,automated-fare-collection-system,solid-waste-management-and-monitoring-system,rfid-ble-image-recognition,gate-automation-solution,boom-barrier-automation-solution,advance-boom-barrier-automation-solution,consulting,our-advantages,our-focused-verticals-are,outsourcing,staffing'),
(39, 'Automated Fare Collection System', 'automated-fare-collection-system', '<h4>Automated Fare Collection System</h4>\r\n\r\n<p>At Skylabs, we are always looking for ways to improve the passenger experience. That&#39;s why we&#39;re excited to announce our new Automatic Fare Collection System (AFCS). AFCS is a state-of-the-art system that will be installed on all electric buses in our fleet in 2020. Passengers will be able to purchase tickets with their phones or mobile devices-no more waiting in line at the bus! This technology is a game changer for our riders. And we&#39;re partnering with Intel to make sure it&#39;s as seamless as possible.</p>\r\n\r\n<h4>Here&#39;s how it works:</h4>\r\n\r\n<p>When a passenger boards the bus, their mobile device will connect to the on-board NFC reader. They&#39;ll be able to purchase an e-fare card online or through the app with a tap of their phone-just like how you&#39;d order an Uber. After they board the bus, they&#39;ll be able to use the card throughout the ride the same way they use a MetroCard today. The only difference is that the cardholder will be able to use the e-card regardless of whether they&#39;re riding a bus or a train.</p>\r\n\r\n<p><strong>Capabilities</strong></p>\r\n\r\n<ul>\r\n	<li>Closed loop card-based ticketing with card.</li>\r\n	<li>Flat fare deduction per trip.</li>\r\n	<li>Integration with Enter and Exit gate (similar to metro).</li>\r\n	<li>Integrate with the depot management and the Vehicle tracking systems in busses.</li>\r\n	<li>Integrated with CCH / card issuance platform.</li>\r\n</ul>\r\n', 'Let\'s Explore New Horizons - Your Journey to GIS Excellence Starts Here', 'Full Width Page Layout', 'afcs_(1).jpg', 'Active', 'Automated Fare Collection System', '', '', 'remote-sensing,sky-gis,survey,lmis,planning-tools,fleet-management-system,emergency-response-system,skylabs-mdvr-solution,depot-management-system,sky-itms-solution,automated-fare-collection-system,solid-waste-management-and-monitoring-system,rfid-ble-image-recognition,gate-automation-solution,boom-barrier-automation-solution,advance-boom-barrier-automation-solution,consulting,our-advantages,our-focused-verticals-are,outsourcing,staffing'),
(40, 'Solid Waste Management and Monitoring System', 'solid-waste-management-and-monitoring-system', '<h4>Solid Waste Management and Monitoring System.</h4>\r\n\r\n<p>Solid waste is one of the main urban lifestyle materials. The annual amount of solid waste is about 1.3 billion tons, and it seems it will rise to 4.3 billion tonnes by the year 2025, which will cover 50% of the general population worldwide.</p>\r\n\r\n<p>Managing this waste collection process is one of the most complicated tasks because the amount of solid waste generated is huge. The collection of waste generated by industries, homes, and streets is now part of the management process. Then it is further picked up by the municipal corporations, who finally dump it in dumping areas. Managing this waste collection process is incredibly complicated. Lack of resources, ineffective groundwork, and the inability to keep track of the status of the bin manually are the issues that make this conventional way ineffective.</p>\r\n\r\n<p>Skylabs Solution&rsquo;s smart waste management and monitoring system is designed and developed to reduce the cost and time of waste collection as well as to protect both the public environment and public health and provide a safe life. Waste collection and monitoring using new technologies such as RFID offer a new way to optimise waste management systems. The authorities can keep track of the waste collection process and keep the whole process lucrative.</p>\r\n', 'Let\'s Explore New Horizons - Your Journey to GIS Excellence Starts Here', 'Full Width Page Layout', 'solidwaste_m.png', 'Active', 'Solid Waste Management and Monitoring System.', '', '', 'remote-sensing,sky-gis,survey,lmis,planning-tools,fleet-management-system,emergency-response-system,skylabs-mdvr-solution,depot-management-system,sky-itms-solution,automated-fare-collection-system,solid-waste-management-and-monitoring-system,rfid-ble-image-recognition,gate-automation-solution,boom-barrier-automation-solution,advance-boom-barrier-automation-solution,consulting,our-advantages,our-focused-verticals-are,outsourcing,staffing'),
(41, 'AIDC Technology', 'rfid-ble-image-recognition', '<h4>RFID</h4>\r\n\r\n<p>RFID (radio frequency identification) is a wireless communication technology that allows objects to be uniquely identified using radio waves. It uses electromagnetic or electrostatic coupling in the radio frequency portion of the electromagnetic spectrum to uniquely identify an object, animal or person.</p>\r\n\r\n<h4>BLE :-</h4>\r\n\r\n<p>BLE uses the same radio wavebands as Bluetooth and allows two devices to exchange data in many of the same ways. Bluetooth and BLE are wireless technologies that have been incorporated into many devices. Classic Bluetooth can handle large chunks of data but consumes a large amount of battery, while BLE handles lesser amounts of data and less energy, therefore allowing it to work with even coin cells which have long battery life.</p>\r\n\r\n<p>Skylabs Solution has developed a number of long-range RFID solutions that enable the detection of moving objects to be automated. Even in historically tough circumstances where alternative technologies cannot match the need for speed and range, our framework enables precise and exact identification.</p>\r\n', 'Let\'s Explore New Horizons - Your Journey to GIS Excellence Starts Here', 'Full Width Page Layout', 'face22.png', 'Active', 'AIDC Technology', '', '', 'remote-sensing,sky-gis,survey,lmis,planning-tools,fleet-management-system,emergency-response-system,skylabs-mdvr-solution,depot-management-system,sky-itms-solution,automated-fare-collection-system,solid-waste-management-and-monitoring-system,rfid-ble-image-recognition,gate-automation-solution,boom-barrier-automation-solution,advance-boom-barrier-automation-solution,consulting,our-advantages,our-focused-verticals-are,outsourcing,staffing'),
(42, 'Gate Automation Solution', 'gate-automation-solution', '<p>We pride ourselves on our excellent service reputation. First, by designing and building quality into all of our Automatic Gate Systems and second by insuring extreme reliability allowing us to offer our comprehensive maintenance and service agreements that are very cost effective. Our system designers will be glad to provide technical assistance and if so requested will offer a selection of Automatic Gate Systems to enable our Customers to select, not settle, for the best possible solution for their own individual Automatic Gate System.</p>\r\n\r\n<p>Skylabs Solution Intelligent Gate Automation Solution consists of RFID based cards and long range RFID readers with a read range of at least 5 to 7 meters. RFID cards will be fixed on the vehicle windshield which will be encoded with the vehicle identity. This will work as a wireless name plate and will transfer the vehicle identity to the long range reader installed at the gate. Reader will transfer the identity to the application software and instruct the boom barrier/gate to open or close accordingly. In case the vehicle is unauthorized, a light or audible alarm can be generated.</p>\r\n', 'Let\'s Explore New Horizons - Your Journey to GIS Excellence Starts Here', 'Full Width Page Layout', 'gate-automation-solution.jpg', 'Active', 'Gate Automation Solution', '', '', 'remote-sensing,sky-gis,survey,lmis,planning-tools,fleet-management-system,emergency-response-system,skylabs-mdvr-solution,depot-management-system,sky-itms-solution,automated-fare-collection-system,solid-waste-management-and-monitoring-system,rfid-ble-image-recognition,gate-automation-solution,boom-barrier-automation-solution,advance-boom-barrier-automation-solution,consulting,our-advantages,our-focused-verticals-are,outsourcing,staffing'),
(43, 'Boom Barrier Automation Solution', 'boom-barrier-automation-solution', '<hr />\r\n<p>Gate Barriers are generally employed in residential areas and parking premises for safe and authenticated access. Gate Barriers control the vehicle access at entry, exit gates. They consist a fixed metal block that carries of a pole which operates electronically and blocks the unidentified vehicles at entry, exit gates, and allows them after proper authentication.</p>\r\n\r\n<p>Skylabs Boom Barrier Gate Automation solution stands tall on the expectations and needs of the people in delivering all variants of Pass gate barriers and stop gate barriers supplies all types of Long range, Automatic, Manual &amp; maintenance free parking boom barriers.</p>\r\n', '', 'Full Width Page Layout', 'gate-automation-solution1.jpg', 'Active', '', '', '', 'remote-sensing,sky-gis,survey,lmis,planning-tools,fleet-management-system,emergency-response-system,skylabs-mdvr-solution,depot-management-system,sky-itms-solution,automated-fare-collection-system,solid-waste-management-and-monitoring-system,rfid-ble-image-recognition,gate-automation-solution,boom-barrier-automation-solution,advance-boom-barrier-automation-solution,consulting,our-advantages,our-focused-verticals-are,outsourcing,staffing');
INSERT INTO `tbl_page` (`id`, `page_name`, `page_slug`, `page_content`, `short_content`, `page_layout`, `banner`, `status`, `meta_title`, `meta_keyword`, `meta_description`, `related_page`) VALUES
(44, 'Advance Boom Barrier Automation Solution', 'advance-boom-barrier-automation-solution', '<p>Advance Gate Boom Barrier Automation System is an &lsquo;Operator Less&rsquo; or &lsquo;Man Less&rsquo; automation system, which automates the weighing process at the weighbridges. Smart Weighment Automation System is an intelligent solution that turns your weighbridge to a simple unattended terminal, eliminating the need of operator.</p>\r\n\r\n<p>The system can be customized with many add-ons like RFID, camera number plate recognition, surveillance cameras, Boom barriers, traffic lights, etc. It has a intelligent vocal guidance system which guides the user or driver through the weighment process at the Weighbridge Platform.</p>\r\n\r\n<p>To automate and streamline the automation weighing process, our system uses the following hardware devices:-</p>\r\n\r\n<ul>\r\n	<li>Radio Token Reader based on RFID Technology</li>\r\n	<li>Radio Token</li>\r\n	<li>Control Station</li>\r\n	<li>Traffic Lights (vehicle movement control system)</li>\r\n	<li>P.A. System</li>\r\n	<li>Buzzer</li>\r\n	<li>Trigger Switch</li>\r\n	<li>Automated Boom Barrier (optional)</li>\r\n	<li>Radio Token Reader for Vehicle Identification System</li>\r\n	<li>Antenna for Vehicle Identification System</li>\r\n	<li>Tag for Vehicle Identification System</li>\r\n</ul>\r\n', '', 'Full Width Page Layout', 'gate-automation-solution2.jpg', 'Active', '', '', '', 'remote-sensing,sky-gis,survey,lmis,planning-tools,fleet-management-system,emergency-response-system,skylabs-mdvr-solution,depot-management-system,sky-itms-solution,automated-fare-collection-system,solid-waste-management-and-monitoring-system,rfid-ble-image-recognition,gate-automation-solution,boom-barrier-automation-solution,advance-boom-barrier-automation-solution,consulting,our-advantages,our-focused-verticals-are,outsourcing,staffing'),
(45, 'Manpower Consulting', 'manpower-consulting', '<p>SKYLABS ADVANCE SOLUTION</p>\r\n\r\n<h2>Why Choose Us?</h2>\r\n\r\n<p>find best in RFID, Gate Automation, bio metric solution , Manpower Consulting , Animal Tagging solution, Temperature and Humidity Monitoring system , Automated Fare Collection system and many more.</p>\r\n', 'We excel in Manpower Consulting, offering tailored staffing solutions and top talent sourcing. ', 'Service Page Layout', 'other-sol_(1).jpg', 'Active', 'Manpower Consulting', '', '', ''),
(46, 'Consulting', 'consulting', '<p>Skylabs Solution India Pvt. Ltd. is a highly networked global talent recruiters and consultants with years of experience and in-depth knowledge of major industry verticals. Companies frequently approach us when they are unable to find the right match for challenging positions requiring niche skills and roles through existing partners. Our challenge-hungry team has helped us achieve and maintain a 99 percent success rate for niche level and executive positions, the highest in the recruitment industry. Our customised recruiting solutions assist our clients in meeting the staffing and manpower requirements of each project. We strive to find the right person for your vacancy on time and with as little disruption to your business as possible.</p>\r\n\r\n<p>We are in this field since last 12 years and have maintained our values of honesty and reliability.</p>\r\n\r\n<p>We go through the process of filtering, assessing, screening, and scanning the CVs of applicants to identify the best person suited for a particular job. As a result, businesses can be sure to receive a list of applicants who have already been screened and are best suited for the opened positions.</p>\r\n\r\n<p><strong>WHAT IS SPECIAL ABOUT US ?</strong></p>\r\n\r\n<p>In order to create a positive and rewarding environment for clients, candidates, and employees, we conduct business in the spirit of values. Our core value stands for the fundamental principle that directs our day-to-day operations and yields the following outcomes:</p>\r\n\r\n<p>Deliver Results: We prioritise the needs of our clients over our own. We put a lot of effort into our manpower recruitment services. We are passionate about providing excellent results, and we do this by paying close attention to what our clients need and diligently going above and beyond to meet those needs.</p>\r\n\r\n<p>Recognition: We work hard to maintain a workplace that encourages collaboration, excellence, leadership, and transparency so that passionate and smart people can flourish.</p>\r\n\r\n<p>Integrity: Skylabs Solution, both as a business and as an individual, is accountable for maintaining the loyalty and trust of its customers. We adhere to the strictest moral principles and never compromise them.</p>\r\n\r\n<p><strong>Verticals We Are Prowess in !</strong></p>\r\n\r\n<p>As a staffing and consulting firm, Skylabs Solutions is constantly faced with the challenge of finding the right mix of skilled professionals to support our clients&#39; businesses. Our customers expect us to deliver exceptional results on time and on budget, which is only possible through the efforts of our dedicated team of professionals. Our connections and the grip in various verticals, we possess capacity to provide bulk of Human Resource to various industry verticals.</p>\r\n\r\n<p>We provide B2B job opportunities to the verticals like: &ndash;</p>\r\n\r\n<ul>\r\n	<li>IT Consultant &amp; Software Development Companies</li>\r\n	<li>&nbsp;Public &amp; Private Transport Health</li>\r\n	<li>&nbsp;Mineral &amp; Mining Department</li>\r\n	<li>&nbsp;Agriculture</li>\r\n	<li>&nbsp;Real Estate</li>\r\n	<li>&nbsp;Infrastructure</li>\r\n</ul>\r\n\r\n<p>We provide a numerous number of jobs in these sectors and furnish a platform where opportunities are waiting for you.</p>\r\n', 'Let\'s Explore New Horizons - Your Journey to GIS Excellence Starts Here', 'Full Width Page Layout', 'manpower.jpg', 'Active', 'Consulting', '', '', 'remote-sensing,sky-gis,survey,lmis,planning-tools,fleet-management-system,emergency-response-system,skylabs-mdvr-solution,depot-management-system,sky-itms-solution,automated-fare-collection-system,solid-waste-management-and-monitoring-system,rfid-ble-image-recognition,gate-automation-solution,boom-barrier-automation-solution,advance-boom-barrier-automation-solution,consulting,our-advantages,our-focused-verticals-are,outsourcing,staffing'),
(47, 'Our Advantages', 'our-advantages', '<p><strong>Strong client referrals</strong></p>\r\n\r\n<p>We are extremely proud of our referral base, which includes some of the most successful and respected businesses in the world. We are committed to providing the highest quality service possible and our clients trust us to deliver on that promise. As a result, the vast majority of our business comes from referrals and repeat business from existing clients.</p>\r\n\r\n<p><strong>Large data bank</strong></p>\r\n\r\n<p>As businesses increasingly collect and store more data, they are looking for ways to effectively manage and use that information. One way to do this is to create a large data bank. This can be done by collecting data from a variety of sources, including online and offline surveys, customer data. (e.g. Customer name, email address, etc.) and HR records</p>\r\n\r\n<p><strong>PAN India presence</strong></p>\r\n\r\n<p>The larger the area, the greater the opportunity. Our PAN India presence assists candidates in choosing their preferred work location and &quot;Chasing their Dreams,&quot; as well as our clients in filling their talent pool by having a wider choice, thereby catering to an enviable Clientele.</p>\r\n\r\n<p><strong>Cost savings</strong></p>\r\n\r\n<p>HR budgets are limited; we work within them to assist companies in finding the right candidate while keeping costs under control in the shortest amount of time, allowing them to remain economically viable in the long term.</p>\r\n\r\n<p><strong>Fast &amp; quality manpower</strong></p>\r\n\r\n<p>We recognise the importance of an open position, and our professional HR team ensures that the delivery TAT is 24 hours or less and that the Candidates meet the Company&#39;s standards.</p>\r\n', '', 'Full Width Page Layout', '', 'Active', 'Our Advantages', '', '', 'remote-sensing,sky-gis,survey,lmis,planning-tools,fleet-management-system,emergency-response-system,skylabs-mdvr-solution,depot-management-system,sky-itms-solution,automated-fare-collection-system,solid-waste-management-and-monitoring-system,rfid-ble-image-recognition,gate-automation-solution,boom-barrier-automation-solution,advance-boom-barrier-automation-solution,consulting,our-advantages,our-focused-verticals-are,outsourcing,staffing'),
(48, 'Our Focused Verticals are', 'our-focused-verticals-are', '<h3>IT Consulting &amp; Software Development Companies.</h3>\r\n\r\n<h3>Public and Private Transport</h3>\r\n\r\n<h3>Mineral and Mining Department</h3>\r\n\r\n<h3>Health</h3>\r\n\r\n<h3>Agriculture</h3>\r\n\r\n<h3>Real Estate</h3>\r\n\r\n<h3>Infrastructure</h3>\r\n', '', 'Full Width Page Layout', '', 'Active', 'Our Focused Verticals are', '', '', 'remote-sensing,sky-gis,survey,lmis,planning-tools,fleet-management-system,emergency-response-system,skylabs-mdvr-solution,depot-management-system,sky-itms-solution,automated-fare-collection-system,solid-waste-management-and-monitoring-system,rfid-ble-image-recognition,gate-automation-solution,boom-barrier-automation-solution,advance-boom-barrier-automation-solution,consulting,our-advantages,our-focused-verticals-are,outsourcing,staffing'),
(49, 'Outsourcing', 'outsourcing', '<h4>Outsourcing</h4>\r\n\r\n<p>Outsourcing is the hiring of services or job functions by a company to a third party on a contract or ongoing basis. Companies may outsource services onshore (within their own country), nearshore (to a neighbouring country or one in the same time zone), or overseas (to a more distant country). Nearshore and offshore outsourcing have traditionally been pursued to save costs. The pros of outsourcing are</p>\r\n\r\n<ul>\r\n	<li>lesser expenses</li>\r\n	<li>improved efficiency,</li>\r\n	<li>variable capability</li>\r\n	<li>increased focus on core competencies</li>\r\n	<li>access to talents and resources</li>\r\n	<li>improved flexibility to meet changing business conditions</li>\r\n</ul>\r\n\r\n<p>Our solutions are built around your needs and go well beyond the physical real estate to help you create a high-performing supply chain. Our outsourcing services help you to improve financial performance, create operational excellence and develop human-centric spaces that are strategically designed to help your people thrive. Our expertise is in helping your organization build the framework that is right for your business.</p>\r\n', 'Let\'s Explore New Horizons - Your Journey to GIS Excellence Starts Here', 'Full Width Page Layout', 'outsourses.png', 'Active', 'Outsourcing', '', '', 'remote-sensing,sky-gis,survey,lmis,planning-tools,fleet-management-system,emergency-response-system,skylabs-mdvr-solution,depot-management-system,sky-itms-solution,automated-fare-collection-system,solid-waste-management-and-monitoring-system,rfid-ble-image-recognition,gate-automation-solution,boom-barrier-automation-solution,advance-boom-barrier-automation-solution,consulting,our-advantages,our-focused-verticals-are,outsourcing,staffing'),
(50, 'Staffing', 'staffing', '<h4>Staffing</h4>\r\n\r\n<p>Staffing is one of the most vital process of management. It involves the process of filling vacant positions with qualified personnel, and matching those employees with their tasks and responsibilities. It is a process of hiring eligible candidates for specific positions by evaluating skills and knowledge, offering them job roles accordingly. The term can refer to both recruiting employees by evaluating skills and knowledge, as well as the operation of recruiting employees by evaluating skills and knowledge. Each and every employee should be given the right position in the organization, so that they can achieve their goals according to their abilities, strengths, and specializations. This will help the organization to achieve its pre-set goals by giving 100% contribution of manpower.</p>\r\n\r\n<p>Our understanding of business and experience enable us to provide with significant solution to the company and assist them in hiring proficient employees which can lead the organisation to a new height.</p>\r\n', 'Let\'s Explore New Horizons - Your Journey to GIS Excellence Starts Here', 'Full Width Page Layout', 'staffing.png', 'Active', 'Staffing', '', '', 'remote-sensing,sky-gis,survey,lmis,planning-tools,fleet-management-system,emergency-response-system,skylabs-mdvr-solution,depot-management-system,sky-itms-solution,automated-fare-collection-system,solid-waste-management-and-monitoring-system,rfid-ble-image-recognition,gate-automation-solution,boom-barrier-automation-solution,advance-boom-barrier-automation-solution,consulting,our-advantages,our-focused-verticals-are,outsourcing,staffing'),
(51, 'Privacy Policy', 'privacy-policy', '<p>This Web site is provided by &quot;Skylabs Solution India Pvt. Ltd.&quot; and may be used for informational purposes only. By using the site or downloading materials from the site, you agree to abide by the terms and conditions set forth in this notice. If you do not agree to abide by these terms and conditions please do not use the site or download materials from the site.</p>\r\n\r\n<h4><strong>Limited License</strong></h4>\r\n\r\n<p>Subject to the terms and conditions set forth in this Agreement, &quot;SKYLABS&quot; grants you a non-exclusive, non-transferable, limited right to access, use and display this site and the materials thereon. You agree not to interrupt or attempt to interrupt the operation of the site in any way.</p>\r\n\r\n<h4><strong>We want you to</strong></h4>\r\n\r\n<ul>\r\n	<li>feel comfortable using our web site</li>\r\n	<li>feel secure submitting information to us</li>\r\n	<li>contact us with your questions or concerns about privacy on this site</li>\r\n	<li>know that by using our sites you are consenting to the collection of certain data</li>\r\n</ul>\r\n\r\n<p>&quot;SKYLABS&quot; authorizes you to view and download the information (&quot;materials&quot;) at this Web site (&quot;Site&quot;) only for your personal, non-commercial use. This authorization is not a transfer of title in the materials and copies of the materials and is subject to the following restrictions: 1) you must retain, on all copies of the materials downloaded, all copyright and other proprietary notices contained in the materials; 2) you may not modify the materials in any way or reproduce or publicly display, perform, or distribute or otherwise use them for any public or commercial purpose; and 3) you must not transfer the materials to any other person unless you give them notice of, and they agree to accept, the obligations arising under these terms and conditions of use. You agree to abide by all additional restrictions displayed on the Site as it may be updated from time to time. This Site, including all materials, is copyrighted and protected by worldwide copyright laws and treaty provisions. You agree to comply with all copyright laws worldwide in your use of this Site and to prevent any unauthorized copying of the materials. Except as expressly provided herein, &quot;SKYLABS&quot; does not grant any express or implied right to you under any patents, trademarks, copyrights or trade secret information.</p>\r\n\r\n<h4><strong>WHAT INFORMATION IS, OR MAY BE, COLLECTED FROM YOU?</strong></h4>\r\n\r\n<p>We will automatically receive and collect certain anonymous information in standard usage logs through our Web server, including computer-identification information obtained from &quot;cookies,&quot; sent to your browser from:</p>\r\n\r\n<ul>\r\n	<li>web server cookie stored on your hard drive</li>\r\n	<li>an IP address, assigned to the computer which you use</li>\r\n	<li>the domain server through which you access our service</li>\r\n	<li>the type of computer you&#39;re using</li>\r\n	<li>the type of web browser you&#39;re using</li>\r\n</ul>\r\n\r\n<h4><strong>We may collect the following information for your account in skylabs website:</strong></h4>\r\n\r\n<ul>\r\n	<li>about the pages you visit/access</li>\r\n	<li>the links you click on our site</li>\r\n	<li>the number of times you access the page. You can terminate your account at any time.</li>\r\n</ul>\r\n\r\n<p>However, your information may remain stored in archive on our servers even after the deletion or the termination of your account.</p>\r\n\r\n<h4><strong>Information Provided By You</strong></h4>\r\n\r\n<p>&quot;SKYLABS&quot; does not want you to, and you should not, send any confidential or proprietary information to &quot;SKYLABS&quot; via the Site. You agree that any information or materials that you or individuals acting on your behalf provide to &quot;SKYLABS&quot; will not be considered confidential or proprietary. By providing any such information or materials to &quot;SKYLABS&quot;, you grant to &quot;SKYLABS&quot; an unrestricted, irrevocable, worldwide, royalty-free license to use, reproduce, display, publicly perform, transmit and distribute such information and materials, and you further agree that &quot;SKYLABS&quot; is free to use any ideas, concepts or know-how that you or individuals acting on your behalf provide to &quot;SKYLABS&quot;.</p>\r\n\r\n<p>You further recognize that &quot;SKYLABS&quot; does not want you to, and you warrant that you shall not, provide any information or materials to &quot;SKYLABS&quot; that is defamatory, threatening, obscene, harassing, or otherwise unlawful, or that incorporates the proprietary material of another.</p>\r\n', 'Please read these policies carefully before using this site.', 'Full Width Page Layout', '', 'Active', 'Privacy Policy', '', '', 'terms-conditions,disclaimer'),
(52, 'Terms & Conditions', 'terms-conditions', '<p>All Information on this web site is intended for informational purposes only and is subject to change or withdrawal by Skylabs at any time without notice. Skylabs assumes no responsibility for the accuracy or completeness of the Information. Skylabs obligations and responsibilities regarding Skylabs&#39;s products and services are governed solely by the agreement under which they are sold or licensed.</p>\r\n\r\n<p>Skylabs expressly disclaims, in any manner and for any purpose, any and all warranties with regard to any portion of any content contained on the website and expressly cautions the visitors not to place any reliance whatsoever on the information and/or statements contained within this website, without verifying the authenticity of the information/statements from independent sources. Skylabs does not undertake the responsibility of regularly updating the content herein and does not undertake any liability in any matter arising as a result of any action / inaction which places reliance upon the information and / or statements made available on this website. Further Skylabs shall stand indemnified by the visitors against any and all claims that arise as a result of any misuse by the visitors of the contents and / or services provided within the website.</p>\r\n\r\n<p>The information is provided as is and with all faults &ldquo;AS IS&rdquo; and &ldquo;With All Faults&rdquo; without warranty of any kind, including without limitation, any implied warranties of merchantability, fitness for a particular purpose or non-infringement. Skylabs further disclaims any liability in connection with the web site or the information provided herein.</p>\r\n\r\n<p>To the maximum extent permitted by law in no event shall &ldquo;SKYLABS&rdquo;. Be liable to you or any other person, whether in contract tort or otherwise, for any direct indirect incidental consequential or punitive damages (including lost saving or profit lost data business interruption or attorney&rsquo;s fees) arising out of or in connection with the use of any information available from this web site or any other hyperlinked website even if &ldquo;SKYLABS&rdquo; was expressly advised of the possibility of such damages Trademarks.</p>\r\n\r\n<p>All content present on this site is the exclusive property of Skylabs The software, text, images, graphics, video and audio used on this site belong to Skylabs. No material from this site may be copied, modified, reproduced, republished, uploaded, transmitted, posted or distributed in any form without prior written permission from Skylabs. All rights not expressly granted herein are reserved. Unauthorized use of the materials appearing on this site may violate copyright, trademark and other applicable laws, and could result in criminal or civil penalties. Skylabs is a registered trademark of Skylabs Private Limited. This trademark may not be used in any manner without prior written consent from Skylabs Solution India Private Limited.</p>\r\n', 'Please read these terms & conditions carefully before using this site.', 'Full Width Page Layout', '', 'Active', 'Terms & Conditions', '', '', 'privacy-policy,disclaimer'),
(53, 'Disclaimer', 'disclaimer', '<p>The materials may contain inaccuracies and typographical errors.&rdquo;SKYLABS&rdquo; does not warrant the accuracy or completeness of the materials or the reliability of any advice, opinion, statement or other information displayed or distributed through the site. You acknowledge that any reliance on any such option, advice, statement, memorandum or information shall be at your sole. &quot;SKYLABS&quot; reserves the right ,in its sole discretion, to correct any errors or omissions if any portion of the site.Interlin logistics may make any other changes to the site, the materials and the products, programs, services or prices (if any) described in the site at any time without notice. This site, the information and materials on the site, and the software made available on the site, are provided &ldquo;As is without any without any representation or warranty, express or implied, of any kind, including, but not limited to warranties of merchant ability non-infringement, or fitness for any particular purpose. Some jurisdictions do not allow for the exclusive of implied warranties so the above exclusive may not apply to you.</p>\r\n\r\n<h4><strong>Third Party Sites</strong></h4>\r\n\r\n<p>As a convenience to you, &quot;SKYLABS&quot; may or may not provide, on this Site, links to Web sites operated by other entities. If you use these sites, you will leave this Site. If you decide to visit any linked site, you do so at your own risk and it is your responsibility to take all protective measures to guard against viruses or other destructive elements. &quot;SKYLABS&quot; makes no warranty or representation regarding, and does not endorse, any linked Web sites or the information appearing thereon or any of the products or services described thereon. Links do not imply that &quot;SKYLABS&quot; or this Site sponsors, endorses, is affiliated or associated with, or is legally authorized to use any trademark, trade name, logo or copyright symbol displayed in or accessible through the links, or that any linked site is authorized to use any trademark, trade name, logo or copyright symbol of &quot;SKYLABS&quot; or any of its affiliates or subsidiaries.</p>\r\n\r\n<h4><strong>External Links to the Site</strong></h4>\r\n\r\n<p>All links to the Site must be approved in writing by &quot;SKYLABS&quot;, except that &quot;SKYLABS&quot; consents to links in which:</p>\r\n\r\n<ul>\r\n	<li>the link is a text-only link containing only the name &quot;SKYLABS&quot;;</li>\r\n	<li>the link &quot;points&quot; only to https://www.skylabstech.com/ and not to deeper pages;</li>\r\n	<li>the link, when activated by a user, displays that page full-screen in a fully operable and navigable browser window and not within a &quot;frame&quot; on the linked website; and</li>\r\n	<li>the appearance, position, and other aspects of the link may neither create the false appearance that an entity or its activities or products are associated with or sponsored by &quot;SKYLABS&quot; nor be such as to damage or dilute the goodwill associated with the name and trademarks of &quot;SKYLABS&quot; or its Affiliates. &quot;SKYLABS&quot; reserves the right to revoke this consent to link at any time in its sole discretion.</li>\r\n</ul>\r\n\r\n<h4><strong>Limitations of Damages</strong></h4>\r\n\r\n<p>In no event shall &ldquo;SKYLABS&rdquo; or any of its subsidiaries be liable to any entity for direct, indirect, special consequential or other damages(including without limitation any lost profits business interruption loss of information or programs or other data on your information handling system) That are related to the use of the inability to use the content materials and functions of the site or any linked website even if interlink logistics is expressly advice of the possibility of such damages.</p>\r\n\r\n<h4><strong>Changes</strong></h4>\r\n\r\n<p>&quot;SKYLABS&quot; reserves the right, at its sole discretion, to change, modify, add or remove any portion of this Agreement in whole or in part, at any time. Changes in this Agreement will be effective when notice of such change is posted. Your continued use of the Site after any changes to this Agreement are posted will be considered acceptance of those changes. &quot;SKYLABS&quot; may terminate, change, suspend or discontinue any aspect of the skylabs&#39;s Site, including the availability of any features of the Site, at any time. &quot;SKYLABS&quot; may also impose limits on certain features and services or restrict your access to parts or the entire Site without notice or liability. &quot;SKYLABS&quot; may terminate the authorization, rights and license given above and, upon such termination; you shall immediately destroy all Materials.</p>\r\n\r\n<h4><strong>International Users and Choice of Law</strong></h4>\r\n\r\n<p>This Site is controlled, operated and administered by &quot;SKYLABS&quot; from its offices within India. &quot;SKYLABS&quot; makes no representation that materials at this site are appropriate or available for use at other locations outside INDIA and access to them from territories where their contents are illegal is prohibited. You may not use the Site or export the Materials in violation of Indian. export laws and regulations. If you access this Site from a location outside India, you are responsible for compliance with all local laws. Links to Other Sites skylabs&#39;s Web site may contain links to other sites such as its partners. While we try to link only to sites that share our high standards and respect for privacy, we are not responsible for the content, security, or privacy practices employed by other sites.</p>\r\n', 'Please read these terms carefully before using this site.', 'Full Width Page Layout', '', 'Active', 'Disclaimer', '', '', 'privacy-policy,terms-conditions'),
(54, 'Istwa siksè', 'success-stories', '', 'Istwa Ekselans: Chemen Skylabs pou Siksè.', 'Success Story Page Layout', '', 'Active', 'Success Story', '', '', ''),
(55, 'About Us', 'about-us', '<h4><strong>Company Overview</strong></h4>\r\n\r\n<p>Skylabs Solution is a leading technology company that specializes in providing innovative solutions and services to businesses across various industries. With a strong focus on cutting-edge technologies, Skylabs Solution aims to empower organizations and drive their digital transformation. This company overview will provide an insight into Skylabs Solution&#39;s mission, core values, expertise, and commitment to delivering exceptional results.</p>\r\n\r\n<p>Skylabs Solution is committed to driving innovation, delivering exceptional solutions, and fostering long-term partnerships with clients. With our customer-centric approach and expertise in cutting-edge technologies, we are well-equipped to meet the evolving needs of businesses in today&#39;s digital landscape. Contact us today to embark on a transformative journey and unlock the true potential of your organization.</p>\r\n', 'This is my Tagline', 'Full Width Page Layout', 'companyoverview1.png', 'Active', 'About Us', '', '', 'leadership-team,partner,news,career'),
(57, 'Company Timeline', 'company-timeline', '', 'Company Timeline', 'Timeline Page Layout', '', 'Active', 'Company Timeline', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_content`
--

CREATE TABLE `tbl_page_content` (
  `id` int(11) NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `page1` text DEFAULT NULL,
  `page2` text DEFAULT NULL,
  `page3` text DEFAULT NULL,
  `page4` text DEFAULT NULL,
  `page5` text DEFAULT NULL,
  `page6` text DEFAULT NULL,
  `page7` text DEFAULT NULL,
  `page8` text DEFAULT NULL,
  `page9` text DEFAULT NULL,
  `page10` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_page_content`
--

INSERT INTO `tbl_page_content` (`id`, `page_id`, `page1`, `page2`, `page3`, `page4`, `page5`, `page6`, `page7`, `page8`, `page9`, `page10`) VALUES
(1, 21, 'Telematik Sèvis anba yon do-kay', '', 'Skylabs, kote inovasyon satisfè adaptabilite. Kat presizyon GIS nou an, telematik an tan reyèl, solisyon Vil Smart, ak talan-konekte Manpower Consulting redéfinir sa ki posib pou siksè ou. Dekouvri potansyèl san limit ak Skylabs.', '', 'Skylabs ofri GIS Sèvis pou kat egzak ak analiz done, Telematik Sèvis pou an tan reyèl jesyon done machin, ak mennen inovasyon nan devlopman Vil Smart. Anplis de sa, Consulting Manpower nou an konekte biznis ak talan nan dwa pou siksè.', '', 'Elevasyon lavi ak Skylabs: Soti nan egzak Sèvis GIS, an tan reyèl solisyon telematik, ak vizyonè Smart Vil devlopman bay biznis abilite nan Manpower Consulting.', '39bcc913-f359-4719-8648-84e64d499084.png', NULL, NULL),
(2, 30, 'SKYLABS GIS SOLISYON', 'Poukisa Chwazi nou?', 'SKYLABS sistèm enfòmasyon jeyografik (GIS) solisyon se yon fondasyon pou rasanble, jere, ak analize done yo. Rasin nan syans nan jewografi.', 'Solisyon GIS eksitan', 'Aplikasyon GIS gen ladan Remote Sensing, solisyon sondaj Tè, jesyon Tè ak solisyon enfòmasyon, Planifikasyon Zouti & anpil plis..', 'Lidè nan solisyon GIS', 'Ekip nou an gen plis pase 12 ane eksperyans nan ak konsepsyon, manifakti, maketing ak lavant nan solisyon GIS atravè lemond.', 'GIS_Logo.png', NULL, NULL),
(3, 45, 'Elevate, Innovate, Transform', '', 'Empowering Organizations through Manpower Expertise. Shaping Workforces for a Brighter Future.', '', 'Innovative Manpower Consulting: We specialize in shaping tomorrow\'s workforce for success. Our tailored solutions drive organizations toward a brighter future.', 'Customized Solutions for Manpower Consulting and Sourcing Expertise.', '', 'j2.png', NULL, NULL),
(4, 31, 'Telematics Solutions', 'Redefying Telematics', 'Skylabs Solution is a leading provider of comprehensive Telematics Solutions that are shaping the future of smart mobility. With our state-of-the-art technologies and expertise, we offer a wide range of innovative solutions to address the diverse needs of businesses and organizations.', '', 'Experience limitless innovation with Skylabs Telematics Solutions. Our technology redefines connectivity for an extraordinary road ahead.', 'Empowering Smart Mobility with Telematics Technology', '', 'teles.png', NULL, NULL),
(5, 36, 'Transforming Cities into Smarter Communities', '', 'Skylabs Solution offers cutting-edge Smart City Solutions designed to transform urban environments into intelligent ecosystems. <br> <b>Explore the Possibilities</b>', '', 'Smart cities boost economic growth with advanced infrastructure and streamlined services, improving citizens\' lives in education, healthcare, and transportation while ushering in urban innovation.', '', 'Smart cities drive economic growth, reduce government operational costs, and enhance residents\' quality of life through improved services and access to education, healthcare, and transportation.', 'New_Project.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_photo`
--

CREATE TABLE `tbl_photo` (
  `photo_id` int(11) NOT NULL,
  `photo_caption` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `p_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `prod_id` int(11) NOT NULL,
  `prod_code` varchar(125) NOT NULL,
  `prod_title` varchar(255) DEFAULT NULL,
  `prod_slug` varchar(255) DEFAULT NULL,
  `prod_content` longtext DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sub_category_id` int(11) DEFAULT NULL,
  `total_view` int(11) DEFAULT NULL,
  `tags` text DEFAULT NULL,
  `colorss` text NOT NULL,
  `colors` text NOT NULL,
  `rel_prod_code` text NOT NULL,
  `size` text NOT NULL,
  `prod_price` double NOT NULL,
  `prod_price_old` double NOT NULL,
  `sub_sub_category_id` int(11) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `status` int(11) NOT NULL,
  `description` text NOT NULL,
  `details` text NOT NULL,
  `video_link` varchar(255) NOT NULL,
  `trending` int(11) DEFAULT NULL,
  `weight` varchar(32) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`prod_id`, `prod_code`, `prod_title`, `prod_slug`, `prod_content`, `category_id`, `sub_category_id`, `total_view`, `tags`, `colorss`, `colors`, `rel_prod_code`, `size`, `prod_price`, `prod_price_old`, `sub_sub_category_id`, `meta_title`, `meta_keyword`, `meta_description`, `status`, `description`, `details`, `video_link`, `trending`, `weight`, `photo`) VALUES
(1, 'skylabs-1', 'UHF Module KR9571', 'uhf-module-kr9571', 'KR9571is a high performance UHF RFID Reader Module. Based on proprietary efficient digital signal processing algorithm.', 20, NULL, NULL, '', '', '', '', '', 0, 0, NULL, 'UHF Module KR9571', '', '', 0, '', '', '', NULL, NULL, 'uhf-rfid-13.jpg'),
(2, 'skylabs-2', 'UHF RFID Integrated Reader KR123', 'uhf-rfid-integrated-reader-kr123', 'Self-intellectual property, Support ISO18000-6B, ISO18000-6C(EPC C1G2) protocol tag, 902~928MHz frequency band(frequency customization optional', 20, NULL, NULL, '', '', '', '', '', 0, 0, NULL, 'UHF RFID Integrated Reader KR123', '', '', 0, '', '', '', NULL, NULL, 'uhf-rfid-2.jpg'),
(3, 'skylabs-3', 'UHF RFID Desktop reader/writer KR270', 'uhf-rfid-desktop-readerwriter-kr270', 'KR270 is a high performance Multiple Protocol UHF RFID Reader with proprietary efficient digital signal algorithm.', 20, NULL, NULL, '', '', '', '', '', 0, 0, NULL, 'UHF RFID Desktop reader/writer KR270', '', '', 0, '', '', '', NULL, NULL, 'uhf-rfid-3.jpg'),
(4, 'skylabs-4', 'HF RFID Reader ISO 14443 NFC ACR122U', 'hf-rfid-reader-iso-14443-nfc-acr122u', 'The ACR122U NFC Reader is a PC-linked contactless smart card reader/writer developed based on 13.56 MHz Contactless (RFID) Technology.', 20, NULL, NULL, '', '', '', '', '', 0, 0, NULL, 'HF RFID Reader ISO 14443 NFC ACR122U', '', '', 0, '', '', '', NULL, NULL, 'uhf-rfid-4.jpg'),
(5, 'skylabs-5', 'Hotel key cards | contact IC cards', 'hotel-key-cards-contact-ic-cards', 'RFID cards are more durable and more expensive. Hole (punch) cards are based on a mechanical method that requires the holes on the card to fit the reader.', 21, NULL, NULL, '', '', '', '', '', 0, 0, NULL, 'Hotel key cards | contact IC cards', '', '', 0, '', '', '', NULL, NULL, 'rfid-c-4.jpg'),
(6, 'skylabs-6', 'White printable cards', 'white-printable-cards', 'Nice cards edges for thermal printers/inkjet printers High quality card overlay for logo printing.', 21, NULL, NULL, '', '', '', '', '', 0, 0, NULL, 'White printable cards', '', '', 0, '', '', '', NULL, NULL, 'rfid-c-3.jpg'),
(7, 'skylabs-7', 'PVC Cards / RFID Cards / Paper cards', 'pvc-cards-rfid-cards-paper-cards', 'The cards can be normal paper cards, plastic cards and RFID cards with chip inside. Paper cards are widely used as park tickets, business cards.', 21, NULL, NULL, '', '', '', '', '', 0, 0, NULL, 'PVC Cards / RFID Cards / Paper cards', '', '', 0, '', '', '', NULL, NULL, 'rfid-c-2.jpg'),
(8, 'skylabs-8', 'PVC Sheets & RFID Card Prelam', 'pvc-sheets-rfid-card-prelam', 'RFID card inlay , also known as RFID card pre-lam. They are half-finished products of RFID cards , used in RFID cards factories.', 21, NULL, NULL, '', '', '', '', '', 0, 0, NULL, 'PVC Sheets & RFID Card Prelam', '', '', 0, '', '', '', NULL, NULL, 'rfid-c-1.jpg'),
(9, 'skylabs-9', 'K30 PRO', 'k30-pro', '#', 22, NULL, NULL, '', '', '', '', '', 0, 0, NULL, 'K30 PRO', '', '', 0, '', '', '', NULL, NULL, 'bio-6.jpg'),
(10, 'skylabs-10', 'K21 PRO', 'k21-pro', '#', 22, NULL, NULL, '', '', '', '', '', 0, 0, NULL, 'K21 PRO', '', '', 0, '', '', '', NULL, NULL, 'bio-5.jpg'),
(11, 'skylabs-11', 'SF100', 'sf100', '#', 22, NULL, NULL, '', '', '', '', '', 0, 0, NULL, 'SF100', '', '', 0, '', '', '', NULL, NULL, 'bio-4.jpg'),
(12, 'skylabs-12', 'Uface-302', 'uface-302', '#', 22, NULL, NULL, '', '', '', '', '', 0, 0, NULL, 'Uface-302', '', '', 0, '', '', '', NULL, NULL, 'bio-3.jpg'),
(13, 'skylabs-13', 'F-18', 'f-18', '#', 22, NULL, NULL, '', '', '', '', '', 0, 0, NULL, 'F-18', '', '', 0, '', '', '', NULL, NULL, 'bio-2.jpg'),
(14, 'skylabs-14', 'X990', 'x990', '#', 22, NULL, NULL, '', '', '', '', '', 0, 0, NULL, 'X990', '', '', 0, '', '', '', NULL, NULL, 'bio-1.jpg'),
(15, 'skylabs-15', 'G500X', 'g500x', 'G500X a se yon aparèy swivi dirab, versatile, ak avanse ki ofri yon seri de karakteristik pou satisfè divès bezwen swiv ak siveyans.Karakteristik sa yo ansanm kontribye nan kapasite G500X a kòm yon aparèy swivi dirab, versatile ak avanse.Suivi an tan reyèl li yo, GPS/GSM entegre, rezistans dlo, teknoloji SIM entegre, ak sipò pou divès kalite detèktè fè li apwopriye pou divès aplikasyon pou swiv ak siveyans, pandan y ap mezi anti-vòl li yo ak sistèm alèt kritik amelyore sekirite ak repons.Anplis de sa, G500X a gen anpil rezistans dlo, ki pèmèt li fè yon bòn nan divès anviwònman ak kondisyon metewolojik.Fonksyonalite swiv an tan reyèl li bay itilizatè yo mizajou kontinyèl sou kote li yo ak mouvman, asire enfòmasyon alè pou pran desizyon efikas.', 19, NULL, NULL, '', '', '', '', '', 0, 0, NULL, 'G500X', '', '', 1, '', '', '', NULL, NULL, 'g500x1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prod_cart`
--

CREATE TABLE `tbl_prod_cart` (
  `id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `prod_title` varchar(2555) DEFAULT NULL,
  `prod_slug` varchar(255) DEFAULT NULL,
  `prod_price` varchar(255) DEFAULT NULL,
  `prod_content_short` varchar(255) DEFAULT NULL,
  `prod_image` varchar(255) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `colors` varchar(32) NOT NULL,
  `size` varchar(32) NOT NULL,
  `cup_type` varchar(32) DEFAULT NULL,
  `user_ip` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_prod_cart`
--

INSERT INTO `tbl_prod_cart` (`id`, `prod_id`, `prod_title`, `prod_slug`, `prod_price`, `prod_content_short`, `prod_image`, `qty`, `colors`, `size`, `cup_type`, `user_ip`) VALUES
(51, 8, 'Lux Exclusive ', 'lux-exclusive', '12300', '<p>Aarvi Lux Exclusive Aatta Chakki Fully Automatic Domestic Flour mill Ghar Ghanti, Atta Maker, Atta Chaki for All types of Grains and Masalas.</p>\n', 'img.jpeg', 2, '1', '1', '1', '::1'),
(53, 8, 'Lux Exclusive ', 'lux-exclusive', '12300', '<p>Aarvi Lux Exclusive Aatta Chakki Fully Automatic Domestic Flour mill Ghar Ghanti, Atta Maker, Atta Chaki for All types of Grains and Masalas.</p>\n', 'img.jpeg', 2, '1', '1', '1', '::1'),
(54, 12, 'Star Plus', 'star-plus', '11190', '<p>Aarvi Star Plus Atta Chakki Domestic Flour mill Ghar Ghanti, Atta Maker, Atta Chaki for All types of Grains and Masalas.</p>\n', 'img.jpeg', 1, '1', '1', '1', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prod_color`
--

CREATE TABLE `tbl_prod_color` (
  `id` int(11) NOT NULL,
  `name` varchar(32) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_prod_color`
--

INSERT INTO `tbl_prod_color` (`id`, `name`) VALUES
(41, 'A9A9A9'),
(49, '000059'),
(55, '478AFF'),
(53, 'FFFF00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prod_compare`
--

CREATE TABLE `tbl_prod_compare` (
  `id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `prod_title` varchar(2555) DEFAULT NULL,
  `prod_slug` varchar(255) DEFAULT NULL,
  `prod_price` varchar(255) DEFAULT NULL,
  `prod_content_short` varchar(255) DEFAULT NULL,
  `prod_image` varchar(255) DEFAULT NULL,
  `user_ip` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prod_image`
--

CREATE TABLE `tbl_prod_image` (
  `id` int(11) NOT NULL,
  `prod_id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_prod_image`
--

INSERT INTO `tbl_prod_image` (`id`, `prod_id`, `image`, `status`) VALUES
(1, 1, 'img.jpeg', 1),
(2, 1, 'img.jpeg', 1),
(3, 1, 'img.jpeg', 1),
(4, 2, 'img.jpeg', 1),
(5, 2, 'img.jpeg', 1),
(6, 2, 'img.jpeg', 1),
(7, 2, 'img.jpeg', 1),
(8, 3, 'img.jpeg', 1),
(9, 3, 'img.jpeg', 1),
(10, 3, 'img.jpeg', 1),
(11, 4, 'img.jpeg', 1),
(12, 4, 'img.jpeg', 1),
(13, 4, 'img.jpeg', 1),
(14, 5, 'img.jpeg', 1),
(15, 5, 'img.jpeg', 1),
(16, 5, 'img.jpeg', 1),
(17, 6, 'img.jpeg', 0),
(18, 6, 'img.jpeg', 0),
(19, 6, 'img.jpeg', 0),
(20, 6, 'img.jpeg', 0),
(21, 6, 'img.jpeg', 0),
(22, 6, 'img.jpeg', 0),
(23, 6, 'img.jpeg', 1),
(24, 6, 'img.jpeg', 1),
(25, 6, 'img.jpeg', 0),
(26, 6, 'img.jpeg', 1),
(27, 6, 'img.jpeg', 1),
(28, 7, 'img.jpeg', 1),
(29, 7, 'img.jpeg', 1),
(30, 8, 'img.jpeg', 1),
(31, 9, 'img.jpeg', 1),
(32, 10, 'img.jpeg', 1),
(33, 10, 'img.jpeg', 0),
(34, 10, 'img.jpeg', 1),
(35, 11, 'img.jpeg', 1),
(36, 11, 'img.jpeg', 1),
(37, 11, 'img.jpeg', 1),
(38, 12, 'img.jpeg', 1),
(39, 13, 'img.jpeg', 1),
(40, 13, 'img.jpeg', 0),
(41, 13, 'img.jpeg', 1),
(42, 13, 'img.jpeg', 1),
(43, 13, 'img.jpeg', 1),
(44, 13, 'almond2.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prod_order`
--

CREATE TABLE `tbl_prod_order` (
  `id` int(11) NOT NULL,
  `order_id` varchar(32) DEFAULT NULL,
  `prod_id` int(11) DEFAULT NULL,
  `prod_price` float NOT NULL,
  `prod_qty` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_mobile` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `payment_desc` text NOT NULL,
  `order_date` datetime DEFAULT NULL,
  `user_ip` varchar(125) NOT NULL,
  `sub_total` varchar(32) NOT NULL,
  `total_price` varchar(32) NOT NULL,
  `discount` varchar(32) NOT NULL,
  `payment_id` varchar(32) NOT NULL,
  `order_type` varchar(32) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `mess_status` int(11) NOT NULL,
  `prod_color` varchar(32) NOT NULL,
  `prod_size` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_prod_order`
--

INSERT INTO `tbl_prod_order` (`id`, `order_id`, `prod_id`, `prod_price`, `prod_qty`, `user_id`, `u_name`, `u_mobile`, `u_email`, `company_name`, `country`, `address`, `payment_desc`, `order_date`, `user_ip`, `sub_total`, `total_price`, `discount`, `payment_id`, `order_type`, `status`, `mess_status`, `prod_color`, `prod_size`) VALUES
(63, '79d827b5b936b64e01da', 6, 11420, 1, NULL, 'Shree', '7838274896', 'shriramsharma3@gmail.com', NULL, 'India', '', '', '2021-09-24 23:20:21', '127.0.0.1', '22840', '22790', '50', '', 'Online Payment', 1, 1, 'A9A9A9', '28'),
(64, '79d827b5b936b64e01da', 12, 13500, 1, NULL, 'Shree', '7838274896', 'shriramsharma3@gmail.com', NULL, 'India', '', '', '2021-09-24 23:20:21', '127.0.0.1', '22840', '22790', '50', '', 'Online Payment', 1, 1, 'FFFF00', '32'),
(65, '79d827b5b936b64e01da', 11, 13500, 1, NULL, 'Shree', '7838274896', 'shriramsharma3@gmail.com', NULL, 'India', '', '', '2021-09-24 23:20:21', '127.0.0.1', '22840', '22790', '50', '', 'Online Payment', 1, 1, 'FFFF00', '32'),
(66, 'b36df7d7eb10200e875d', 6, 11420, 1, 0, 'Shree', '7838274896', 'shriramsharma3@gmail.com', NULL, 'India', '', '', '2021-09-24 23:40:49', '127.0.0.1', '22840', '22840', '0', '', 'Online Payment', 1, 1, 'A9A9A9', '28'),
(67, 'b36df7d7eb10200e875d', 12, 13500, 1, 0, 'Shree', '7838274896', 'shriramsharma3@gmail.com', NULL, 'India', '', '', '2021-09-24 23:40:49', '127.0.0.1', '22840', '22840', '0', '', 'Online Payment', 1, 1, 'FFFF00', '32'),
(71, 'b2460c4506be69a6a9c4', 12, 13500, 1, 37, 'Shree', '7838274896', 'shriramsharma3@gmail.com', NULL, 'India', '', '', '2021-09-24 23:47:55', '127.0.0.1', '11190', '11190', '0', '', 'Online Payment', 1, 1, 'FFFF00', '32'),
(72, 'e1522e1e45822a7b07e4', 6, 11420, 1, 0, 'Shree', '7838274896', 'shriramsharma3@gmail.com', NULL, 'India', '', '', '2021-09-25 00:01:01', '127.0.0.1', '200', '200', '0', '', 'Online Payment', 1, 1, 'A9A9A9', '28'),
(73, 'b36df7d7eb10200e875d', 11, 13500, 1, 0, 'Shree', '7838274896', 'shriramsharma3@gmail.com', NULL, 'India', '', '', '2021-09-25 00:03:26', '127.0.0.1', '22840', '22840', '0', '', 'Online Payment', 1, 1, 'FFFF00', '32'),
(74, '7956c2571df1d027e64c', 6, 11420, 1, 37, 'Shree', '7838274896', 'shriramsharma3@gmail.com', NULL, 'India', '', '', '2021-10-04 22:33:29', '127.0.0.1', '22840', '840', '22000', '', 'Online Payment', 1, 1, 'A9A9A9', '28'),
(75, '7956c2571df1d027e64c', 11, 13500, 1, 37, 'Shree', '7838274896', 'shriramsharma3@gmail.com', NULL, 'India', '', '', '2021-10-04 22:33:29', '127.0.0.1', '22840', '840', '22000', '', 'Online Payment', 1, 1, 'FFFF00', '32'),
(76, '7956c2571df1d027e64c', 12, 13500, 1, 37, 'Shree', '7838274896', 'shriramsharma3@gmail.com', NULL, 'India', '', '', '2021-10-04 22:33:29', '127.0.0.1', '22840', '840', '22000', '', 'Online Payment', 1, 1, 'FFFF00', '32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prod_review`
--

CREATE TABLE `tbl_prod_review` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `rating` double DEFAULT NULL,
  `message` text DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `added_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_prod_review`
--

INSERT INTO `tbl_prod_review` (`id`, `product_id`, `rating`, `message`, `name`, `email`, `added_date`) VALUES
(13, 6, 3, 'Hiii', 'shree sharma', 'shriramsharma3@gmail.com', NULL),
(14, 6, 4, 'hey', 'shree sharma', 'shriramsharma3@gmail.com', NULL),
(15, 6, 5, 'Best Product', 'Vivek', 'vivek@litostindia.com', NULL),
(16, 6, 5, 'Amazing Product ...............', 'Vivek Chauhan', 'vivek@litostindia.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prod_size`
--

CREATE TABLE `tbl_prod_size` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_prod_size`
--

INSERT INTO `tbl_prod_size` (`id`, `name`, `description`) VALUES
(10, '32', ''),
(9, '30', ''),
(8, '28', ''),
(17, '24 INCH', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prod_whishlist`
--

CREATE TABLE `tbl_prod_whishlist` (
  `id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `prod_title` varchar(2555) DEFAULT NULL,
  `prod_slug` varchar(255) DEFAULT NULL,
  `prod_price` varchar(255) DEFAULT NULL,
  `prod_content_short` varchar(255) DEFAULT NULL,
  `prod_image` varchar(255) DEFAULT NULL,
  `qty` varchar(255) DEFAULT NULL,
  `size` varchar(32) NOT NULL,
  `colors` varchar(32) NOT NULL,
  `user_ip` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_prod_whishlist`
--

INSERT INTO `tbl_prod_whishlist` (`id`, `prod_id`, `prod_title`, `prod_slug`, `prod_price`, `prod_content_short`, `prod_image`, `qty`, `size`, `colors`, `user_ip`) VALUES
(1, 11, 'Star Plus 125', 'star-plus-125', '11450', '<p>Aarvi Star  125  Atta Chakki Domestic Flour mill Ghar Ghanti, Atta Maker, Atta Chaki for All types of Grains and Masalas.</p>\n', 'img.jpeg', '2', '1', '1', '::1'),
(2, 8, 'Lux Exclusive ', 'lux-exclusive', '12300', '<p>Aarvi Lux Exclusive Aatta Chakki Fully Automatic Domestic Flour mill Ghar Ghanti, Atta Maker, Atta Chaki for All types of Grains and Masalas.</p>\n', 'img.jpeg', '1', '1', '1', '::1'),
(3, 6, 'LUX QUEEN', 'lux-queen', '200', '<p>Aarvi Lux Queen Aatta Chakki Fully Automatic Domestic Flour mill Ghar Ghanti, Atta Maker, Atta Chaki for All types of Grains and Masalas.</p>\n', 'img.jpeg', '2', '1', '1', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings`
--

CREATE TABLE `tbl_settings` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `favicon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `footer_about` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `footer_copyright` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `contact_address` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `contact_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_fax` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_map_iframe` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `receive_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sender_email` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `receive_email_subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `receive_email_thank_you_message` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `total_recent_news_footer` int(10) NOT NULL,
  `total_popular_news_footer` int(10) NOT NULL,
  `total_recent_news_sidebar` int(11) NOT NULL,
  `total_popular_news_sidebar` int(11) NOT NULL,
  `total_recent_news_home_page` int(11) NOT NULL,
  `meta_title_home` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `meta_keyword_home` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `meta_description_home` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `home_title_service` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_subtitle_service` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_status_service` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `home_title_team_member` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_subtitle_team_member` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_status_team_member` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `home_title_testimonial` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_subtitle_testimonial` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_status_testimonial` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `home_photo_testimonial` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_title_news` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_subtitle_news` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_status_news` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `home_title_partner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_subtitle_partner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_status_partner` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `mod_rewrite` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `newsletter_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `newsletter_text` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `newsletter_photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `newsletter_status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `banner_search` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `banner_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `counter_1_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `counter_1_value` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `counter_2_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `counter_2_value` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `counter_3_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `counter_3_value` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `counter_4_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `counter_4_value` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `counter_photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `counter_status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `other1` text COLLATE utf8_unicode_ci NOT NULL,
  `other2` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_settings`
--

INSERT INTO `tbl_settings` (`id`, `logo`, `favicon`, `footer_about`, `footer_copyright`, `contact_address`, `contact_email`, `contact_phone`, `contact_fax`, `contact_map_iframe`, `receive_email`, `sender_email`, `receive_email_subject`, `receive_email_thank_you_message`, `total_recent_news_footer`, `total_popular_news_footer`, `total_recent_news_sidebar`, `total_popular_news_sidebar`, `total_recent_news_home_page`, `meta_title_home`, `meta_keyword_home`, `meta_description_home`, `home_title_service`, `home_subtitle_service`, `home_status_service`, `home_title_team_member`, `home_subtitle_team_member`, `home_status_team_member`, `home_title_testimonial`, `home_subtitle_testimonial`, `home_status_testimonial`, `home_photo_testimonial`, `home_title_news`, `home_subtitle_news`, `home_status_news`, `home_title_partner`, `home_subtitle_partner`, `home_status_partner`, `mod_rewrite`, `newsletter_title`, `newsletter_text`, `newsletter_photo`, `newsletter_status`, `banner_search`, `banner_category`, `counter_1_title`, `counter_1_value`, `counter_2_title`, `counter_2_value`, `counter_3_title`, `counter_3_value`, `counter_4_title`, `counter_4_value`, `counter_photo`, `counter_status`, `color`, `other1`, `other2`) VALUES
(1, 'logo-with-name.png', 'favicon.png', 'Objektif debaz nou se fè òganizasyon ou reyalize kwasans ki pi wo a, ki nan vire ap ede nan amelyore pèfòmans.', 'Copyright © 2022. Tout Dwa Rezève Pa Skylabs Solisyon Peyi Zend Prive Limite', 'A-62, Dda Shed, Okhla Faz 2 110020', ' info@skylabstech.com', '(+91)8800-148-139', 'B-95, B Blòk Sektè 2, Noida Uttar Pradesh 201301', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3505.2003179489334!2d77.27023441516185!3d28.533698082456972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce3fe163f0c63%3A0x3a45ca43487bc87!2sSkylabs+Solution+India+Pvt.+Ltd.!5e0!3m2!1sen!2sin!4v1536914613622', ' info@skylabstech.com', ' info@skylabstech.com', 'Sales Order From Skylabs !!!', 'Thanks For Contact Us', 0, 0, 0, 0, 0, 'Skylabs Technology Pvt Ltd.', 'Skylabs Technology Pvt Ltd.', 'Skylabs Technology Pvt Ltd.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'tbl_designation.sql', 'tbl_page.sql', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings_about`
--

CREATE TABLE `tbl_settings_about` (
  `id` int(11) NOT NULL,
  `about1` text DEFAULT NULL,
  `about2` text DEFAULT NULL,
  `about3` text DEFAULT NULL,
  `about4` text DEFAULT NULL,
  `about5` text DEFAULT NULL,
  `about6` text DEFAULT NULL,
  `about7` text DEFAULT NULL,
  `about8` text DEFAULT NULL,
  `about9` text DEFAULT NULL,
  `about10` text DEFAULT NULL,
  `about11` text DEFAULT NULL,
  `about12` text DEFAULT NULL,
  `about13` text DEFAULT NULL,
  `about14` text DEFAULT NULL,
  `about15` text DEFAULT NULL,
  `about16` text DEFAULT NULL,
  `about17` text DEFAULT NULL,
  `about18` text DEFAULT NULL,
  `about19` text DEFAULT NULL,
  `about20` text DEFAULT NULL,
  `about21` text DEFAULT NULL,
  `about22` text DEFAULT NULL,
  `about23` text DEFAULT NULL,
  `about24` text DEFAULT NULL,
  `about25` text DEFAULT NULL,
  `about26` text DEFAULT NULL,
  `about27` text DEFAULT NULL,
  `about28` text DEFAULT NULL,
  `about29` text DEFAULT NULL,
  `about30` text DEFAULT NULL,
  `about31` text DEFAULT NULL,
  `about32` text DEFAULT NULL,
  `about33` text DEFAULT NULL,
  `about34` text DEFAULT NULL,
  `about35` text DEFAULT NULL,
  `about36` varchar(255) DEFAULT NULL,
  `about37` varchar(255) DEFAULT NULL,
  `about38` varchar(255) DEFAULT NULL,
  `about39` varchar(255) DEFAULT NULL,
  `about40` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_settings_about`
--

INSERT INTO `tbl_settings_about` (`id`, `about1`, `about2`, `about3`, `about4`, `about5`, `about6`, `about7`, `about8`, `about9`, `about10`, `about11`, `about12`, `about13`, `about14`, `about15`, `about16`, `about17`, `about18`, `about19`, `about20`, `about21`, `about22`, `about23`, `about24`, `about25`, `about26`, `about27`, `about28`, `about29`, `about30`, `about31`, `about32`, `about33`, `about34`, `about35`, `about36`, `about37`, `about38`, `about39`, `about40`) VALUES
(1, 'Objektif prensipal nou se delivre yon ', 'skylab-02.png', 'Misyon', 'Nan Skylabs Solution, misyon nou se revolusyone biznis atravè solisyon teknoloji-kondwi. Nou fè efò pou ranfòse kliyan nou yo pa ogmante ekspètiz nou yo ak bay yo ak évolutive, sekirite, ak solisyon tan kap vini-prèv ki kondwi kwasans ak amelyore avantaj konpetitif yo nan mache a.', 'vision-01.png', 'Vizyon', 'Nan Skylabs Solisyon, nou envision yon avni kote biznis pwospere nan solisyon teknoloji inovatè. Nou angaje nan ranfòse òganizasyon, ankouraje kolaborasyon, ak delivre ekselans. Ansanm, nou pral redefini lavni nan biznis nan teknoloji dènye kri.', 'skylab-03.png', 'Valè Debaz Yo', '<p>\r\n   <b>Inovasyon: </b > nou inovasyon ak teknoloji émergentes. <br>\r\n<b> Siksè Kliyan: </b> bezwen Kliyan yo se priyorite nou.<br>\r\n<b>Entegrite: </b> nou kenbe etik ak konfyans.<br>\r\n<b>Kolaborasyon:</b> Travay ann Ekip kondwi rezilta eksepsyonèl.<br>\r\n<b> Ekselans: </b> nou mete estanda segondè pou solisyon enpak.</li>\r\n</p>', 'Dekouvri Solisyon SKYLABS. Li pi fasil pase ou panse.', 'Kòmanse kounye a.', 'Tcheke Tout Sèvis nou yo', 'services.html', 'BON CHWA A', 'DELIVRE SOLISYON DIJITAL CUSTOMIZED', 'Nou delivre estratejikman, fonksyonèlman, kreyativman ak komèsyalman.', 'Devlopman', '100', 'Estrateji', '100', 'Planifikasyon', '100', 'Pwosesis Kreyatif', 'Nou Delivre', 'Ak dènye teknoloji', 'Nan tan', 'Matche estanda endistri', 'Ak Bon Jan Kalite', 'Sipò prim', '24 * 7 Sipò Pou Kliyan', 'Dekouvri SKYLABS. Li pi fasil pase ou panse.', 'Rete asire w, nou toujou disponib.', 'Kontakte Nou', 'contact-us.html', 'https://www.facebook.com/skylabssolutiondelhi/', 'https://twitter.com/skylabstech', 'https://www.linkedin.com/company/skylabs-technologies', 'https://www.instagram.com/telematicsindia/', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings_contact`
--

CREATE TABLE `tbl_settings_contact` (
  `id` int(11) NOT NULL,
  `contact1` text DEFAULT NULL,
  `contact2` text DEFAULT NULL,
  `contact3` text DEFAULT NULL,
  `contact4` text DEFAULT NULL,
  `contact5` text DEFAULT NULL,
  `contact6` text DEFAULT NULL,
  `contact7` text DEFAULT NULL,
  `contact8` text DEFAULT NULL,
  `contact9` text DEFAULT NULL,
  `contact10` text DEFAULT NULL,
  `contact10_1` varchar(255) DEFAULT NULL,
  `contact11_1` varchar(255) DEFAULT NULL,
  `contact12_1` varchar(255) DEFAULT NULL,
  `contact13_1` varchar(255) DEFAULT NULL,
  `contact14_1` varchar(255) DEFAULT NULL,
  `contact15_1` varchar(255) DEFAULT NULL,
  `contact16_1` varchar(255) DEFAULT NULL,
  `contact11` text DEFAULT NULL,
  `contact12` text DEFAULT NULL,
  `contact13` text DEFAULT NULL,
  `contact14` text DEFAULT NULL,
  `contact15` text DEFAULT NULL,
  `contact16` text DEFAULT NULL,
  `contact17` text DEFAULT NULL,
  `contact18` text DEFAULT NULL,
  `contact19` text DEFAULT NULL,
  `contact20` text DEFAULT NULL,
  `contact21` text DEFAULT NULL,
  `contact22` text DEFAULT NULL,
  `contact23` text DEFAULT NULL,
  `contact24` text DEFAULT NULL,
  `contact25` text DEFAULT NULL,
  `contact26` text NOT NULL,
  `contact27` text NOT NULL,
  `contact28` text DEFAULT NULL,
  `contact29` text DEFAULT NULL,
  `contact30` text DEFAULT NULL,
  `contact31` text DEFAULT NULL,
  `contact32` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_settings_contact`
--

INSERT INTO `tbl_settings_contact` (`id`, `contact1`, `contact2`, `contact3`, `contact4`, `contact5`, `contact6`, `contact7`, `contact8`, `contact9`, `contact10`, `contact10_1`, `contact11_1`, `contact12_1`, `contact13_1`, `contact14_1`, `contact15_1`, `contact16_1`, `contact11`, `contact12`, `contact13`, `contact14`, `contact15`, `contact16`, `contact17`, `contact18`, `contact19`, `contact20`, `contact21`, `contact22`, `contact23`, `contact24`, `contact25`, `contact26`, `contact27`, `contact28`, `contact29`, `contact30`, `contact31`, `contact32`) VALUES
(1, 'KONTAKTE NOU', 'Branch Nou An', 'New Delhi Office', 'Location', 'Skylabs Solution India Pvt. Ltd.', ' A-62, DDA Shed, Okhla Phase 2 (110020)', 'info@skylabstech.com', '011-4100-58-62', '011-4100-58-62', 'Noida Office', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Location', 'Skylabs Solution India Pvt. Ltd.', 'B-95, B Block Sector 2, Noida Uttar Pradesh (201301)', 'info@skylabstech.com', '011-4100-58-62', '+91 8800-148-139', 'KONTAK RAPID', 'Voye nou yon mesaj', 'Soumèt', 'https://www.facebook.com/skylabssolutiondelhi/', 'https://twitter.com/skylabstech', 'https://www.linkedin.com/company/skylabs-technologies', 'https://www.instagram.com/telematicsindia/', 'Solisyon Telematik', 'Ranfòse Mobilite Entelijan Ak Teknoloji Telematik', 'Skylabs Solisyon se yon founisè dirijan nan Solisyon telematik konplè ki ap fòme lavni nan mobilite entelijan. Avèk teknoloji dènye kri nou yo ak ekspètiz, nou ofri yon pakèt solisyon inovatè pou adrese bezwen divès biznis ak òganizasyon yo. <br>\r\nAvèk Solisyon Skylabs, biznis yo ka itilize pouvwa teknoloji telematik pou amelyore efikasite operasyonèl, amelyore sekirite, optimize itilizasyon resous, ak kreye rezo transpò dirab. Solisyon nou yo bati sou teknoloji dènye kri, analiz done, ak algoritm entelijan pou bay sur aksyonèl pou pran desizyon enfòme. <br>\r\nPatnè Ak Skylabs Solisyon pou déblotché tout potansyèl Nan Solisyon Telematik ak anbrase mobilite entelijan. Kontakte nou jodi a pou dekouvri kijan ekspètiz nou ka ede òganizasyon ou reyalize objektif li yo, soti nan swiv machin san pwoblèm pou kreye yon avni pi entelijan, pi an sekirite, ak plis dirab.', 'INDIA KI BAZE SOU GPS APARÈY POU SWIV', 'Skylabs G500x Karakteristik', 'Nou Sètifye/Asosye Avèk', 'SÈTIFYE', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings_home`
--

CREATE TABLE `tbl_settings_home` (
  `id` int(11) NOT NULL,
  `home_1` text DEFAULT NULL,
  `home_2` text DEFAULT NULL,
  `home_3` text DEFAULT NULL,
  `home_4` text DEFAULT NULL,
  `home_5` text DEFAULT NULL,
  `home_6` text DEFAULT NULL,
  `home_7` text DEFAULT NULL,
  `home_8` text DEFAULT NULL,
  `home_9` text NOT NULL,
  `home_10` text NOT NULL,
  `home_11` text NOT NULL,
  `home_12` text NOT NULL,
  `home_13` text NOT NULL,
  `home_14` text NOT NULL,
  `home_15` text NOT NULL,
  `home_16` text NOT NULL,
  `home_17` text NOT NULL,
  `home_18` text NOT NULL,
  `home_19` text NOT NULL,
  `home_20` varchar(255) NOT NULL,
  `home_21` varchar(255) NOT NULL,
  `home_22` varchar(255) NOT NULL,
  `home_23` varchar(255) NOT NULL,
  `home_24` varchar(255) NOT NULL,
  `home_25` varchar(255) NOT NULL,
  `home_26` varchar(255) NOT NULL,
  `home_27` text DEFAULT NULL,
  `home_28` text DEFAULT NULL,
  `home_29` text DEFAULT NULL,
  `home_30` text DEFAULT NULL,
  `home_31` text DEFAULT NULL,
  `home_32` text DEFAULT NULL,
  `home_33` text DEFAULT NULL,
  `home_34` text DEFAULT NULL,
  `home_35` text DEFAULT NULL,
  `home_36` text DEFAULT NULL,
  `home_37` text DEFAULT NULL,
  `home_38` text DEFAULT NULL,
  `home_39` text DEFAULT NULL,
  `home_40` text DEFAULT NULL,
  `home_41` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_settings_home`
--

INSERT INTO `tbl_settings_home` (`id`, `home_1`, `home_2`, `home_3`, `home_4`, `home_5`, `home_6`, `home_7`, `home_8`, `home_9`, `home_10`, `home_11`, `home_12`, `home_13`, `home_14`, `home_15`, `home_16`, `home_17`, `home_18`, `home_19`, `home_20`, `home_21`, `home_22`, `home_23`, `home_24`, `home_25`, `home_26`, `home_27`, `home_28`, `home_29`, `home_30`, `home_31`, `home_32`, `home_33`, `home_34`, `home_35`, `home_36`, `home_37`, `home_38`, `home_39`, `home_40`, `home_41`) VALUES
(1, '<span style=\'color:#2d3b73\'> Solisyon Skylabs- </span> Patnè Teknoloji Ou Pou Kwasans Biznis', 'Skylabs Solutions se yon founisè versatile nan sèvis teknoloji dènye kri atravè domèn divès kalite. Nou espesyalize nan jesyon flòt, amelyore efikasite operasyonèl ak sekirite chofè. Sèvis GIS nou yo bay pouvwa pou pran desizyon ki baze sou enfòmasyon atravè analiz done espasyal ak vizyalizasyon. Nan domèn solisyon IT, nou ekselan nan ofri lojisyèl koutim, devlopman app mobil, konsepsyon entènèt, ak ekspètiz nwaj informatique. Anplis de sa, ai nou yo ak sèvis aprantisaj machin exploiter sur done pou automatisation ak desizyon enfòme, ki kouvri chatbots, analytics prediksyon, ak motè rekòmandasyon. Si ou nan vil la entelijan, solisyon ERP, oswa nenpòt lòt domèn teknoloji, Skylabs Solutions se destinasyon yon sèl-sispann ou pou yon pakèt domèn solisyon teknoloji inovatè', 'icon-gis-consulting2.png', '<span style=\'color:#2d3b73\'> GIS </span>Services', 'Harness the power of geospatial data with our GIS services. Our experts leverage cutting-edge technology to help you analyse and visualize spatial data, making informed decisions based on location intelligence. From mapping and spatial analysis to geocoding and data integration, our GIS solutions empower your business.', '439902.png', '<span style=\'color:#2d3b73\'> IT </span> Solution', 'Custom Software Development: Leverage our expertise in software development to build tailored solutions that address your specific business challenges. Our team of skilled developers specializes in creating scalable, secure, and intuitive software applications that streamline your operations and drive efficiency.\r\n<ul>\r\n<li>Mobile App Development: Stay connected with your customers on the go through our mobile app development services. From concept to deployment, we deliver engaging and feature-rich mobile applications for both iOS and Android platforms. Our mobile apps are designed to provide seamless user experiences and maximize customer engagement.</li>\r\n<li>Web Development and Design: Make a lasting impression online with our web development and design services. Our experienced web developers create visually stunning, user-friendly websites that effectively represent your brand and drive conversions. We utilize the latest web technologies to ensure your website is fast, responsive, and optimized for search engines.</li>\r\n<li>Cloud Computing Solutions: Embrace the power of the cloud with our comprehensive cloud computing solutions. Our certified cloud experts assist you in selecting and implementing the right cloud infrastructure, enabling you to scale seamlessly, improve accessibility, and enhance data security. Experience the flexibility and cost-efficiency of cloud technology with Skylabs Solutions.</li>\r\n</ul>', 'car-icon-91.png', '<span style=\'color:#2d3b73\'> Artificial Intelligence and Machine</span> Learning', 'Unlock the potential of your data through our AI and machine learning services. Our AI solutions enable you to harness insights, automate processes, and make data-driven decisions. Whether it\'s developing chatbots, predictive analytics, or recommendation engines, we deliver AI solutions that propel your business forward.', '4528793.png', '<span style=\'color:#2d3b73\'> Telematics </span> Services', 'Skylabs Solutions is a leading provider of fleet management system solutions. Our comprehensive fleet management system allows organizations to monitor, manage, and optimize their vehicle fleets. Our solution includes features such as real-time tracking, fuel monitoring, driver behavior analysis, and maintenance scheduling. With our system, organizations can improve operational efficiency, reduce costs, and enhance driver safety. Our team of experts ensures a seamless implementation and provides ongoing support to ensure maximum ROI for our clients.', 'Quick Query', 'We Usually Respond in Seconds', 'We hate spam, and we respect your privacy.', '<span style=\'color:#2d3b73\'> Nou </span> Apwòch', '<p>Nou pran yon apwòch kliyan-santre nan travay nou an. Nou travay kole kole ak kliyan nou yo pou konprann bezwen biznis yo ak objektif yo, epi nou devlope solisyon ki customized pou satisfè kondisyon yo. Nou itilize teknoloji modèn ak pi bon pratik endistri pou delivre solisyon kalite siperyè ki depase atant kliyan nou yo. </p>\r\n<h5>Poukisa Chwazi Nou:</h5>\r\n<ul>\r\n    <li>Ekspètiz endistri ak eksperyans</li>\r\n    <li>Solisyon kalite siperyè</li>\r\n    <li>Apwòch kliyan-santre</li>\r\n    <li>Teknoloji modèn ak pi bon pratik</li>\r\n    <li>Kolaborasyon ak kominikasyon</li>\r\n    <li>Pri konpetitif</li>\r\n</ul>\r\n<br>\r\n<p>Se pou Skylabs Solisyon yo dwe patnè teknoloji ou pou kwasans biznis. Kontakte nou jodi a pou pran randevou pou yon konsiltasyon epi dekouvri kijan nou ka ede biznis ou reyisi nan mond dijital jodi a.</p>', 'approchs.jpg', '20', 'Enterprise', '55', 'Corporate Govt Clients', '50', 'Solutions', '50', 'Support And Offices', '<span style=\'color:#2d3b73\'> Ekspètiz Nou: Transfòme Solisyon  </span> <br> Pou Yon Demen Pi Bon', 'Nou angaje nan kondwi inovasyon, efikasite, ak dirabilite atravè divès sektè. Join nou nan fòme yon pi bon avni ak solisyon transfòmasyon nou yo. Nan Skylabs Solisyon, nou espesyalize nan yon pakèt domèn solisyon dènye kri ki fèt pou ranfòse òganizasyon ak kominote yo. Ekspètiz konplè nou an gen ladan.', '<span style=\'color:#2d3b73\'> Nou </span> Istwa Siksè', 'Dekouvri <span style=\'color: #fff;background: #057a45;padding: 4px 10px;border-radius: 10px;\'>SKYLABS</span>. Li pi fasil pase <br> ou panse. ', 'Kòmanse kounye a jwenn solisyon ou.', 'Kontakte Nou', 'contact-us.html', 'bk2.jpg', '<span style=\'color:#2d3b73\'> Nou </span> Blog', '<span style=\'color:#2d3b73\'> Nou </span> Kliyan', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `button_text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `button_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `photo`, `heading`, `content`, `button_text`, `button_url`, `position`, `status`) VALUES
(15, 'manpwr.jpg', '', '', '', '', 'Left', 'Active'),
(16, 'telmatics_header1.jpg', '', '', '', '', 'Left', 'Active'),
(18, 'smartcity.png', '', '', '', '#', 'Left', 'Active'),
(19, 'gis1.png', '', '', '', '', 'Left', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscriber`
--

CREATE TABLE `tbl_subscriber` (
  `subs_id` int(11) NOT NULL,
  `subs_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subs_date` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `subs_date_time` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `subs_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subs_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_subscriber`
--

INSERT INTO `tbl_subscriber` (`subs_id`, `subs_email`, `subs_date`, `subs_date_time`, `subs_hash`, `subs_active`) VALUES
(9, 'suhassolanke28@gmail.com', '', '', '', 1),
(10, 'prabhatkumaragrawalfaizabad@gmail.com', '', '', '', 1),
(11, 'prabhatkumaragrawalfaizabad@gmail.com', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_category`
--

CREATE TABLE `tbl_sub_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sub_category`
--

INSERT INTO `tbl_sub_category` (`id`, `name`, `slug`, `category_id`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(8, 'Stoneless', 'stoneless', 1, 'Stoneless', '', ''),
(9, 'Stone', 'stone', 1, 'Stone', '', ''),
(10, ' PULVERIZER MACHINE', 'pulverizer-machine', 2, ' PULVERIZER MACHINE', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_category_prod`
--

CREATE TABLE `tbl_sub_category_prod` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `cat_order` double NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keyword` mediumtext DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sub_category_prod`
--

INSERT INTO `tbl_sub_category_prod` (`id`, `name`, `slug`, `category_id`, `cat_order`, `meta_title`, `meta_keyword`, `meta_description`, `status`) VALUES
(172, 'Stone', 'stone', 19, 1, '', '', '', 1),
(173, 'Stoneless', 'stoneless', 19, 2, '', '', '', 1),
(174, 'Pulveriser machine ', 'pulveriser-machine', 20, 1, 'Pulveriser machine manufacturer Ahmadabad India', 'Pulveriser machine manufacturer Ahmadabad India', 'Pulveriser machine manufacturer Ahmadabad India', 1),
(175, 'vbnm', 'vbnm', 19, 2, '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_sub_category_prod`
--

CREATE TABLE `tbl_sub_sub_category_prod` (
  `id` int(11) NOT NULL,
  `name_sub` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sub_category_id` int(11) DEFAULT NULL,
  `meta_title` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sub_sub_category_prod`
--

INSERT INTO `tbl_sub_sub_category_prod` (`id`, `name_sub`, `slug`, `category_id`, `sub_category_id`, `meta_title`, `meta_keyword`, `meta_description`, `status`) VALUES
(1, 'Title', 'title', 19, 116, '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team_member`
--

CREATE TABLE `tbl_team_member` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `designation_id` int(11) NOT NULL,
  `size_id` int(20) NOT NULL,
  `finance_id` int(20) NOT NULL,
  `award_id` int(20) NOT NULL,
  `team_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `degree` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detail` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `google_plus` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `flickr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `practice_location` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `month` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keyword` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_team_member`
--

INSERT INTO `tbl_team_member` (`id`, `name`, `slug`, `designation_id`, `size_id`, `finance_id`, `award_id`, `team_type`, `photo`, `banner`, `degree`, `detail`, `facebook`, `twitter`, `linkedin`, `youtube`, `google_plus`, `instagram`, `flickr`, `address`, `practice_location`, `phone`, `email`, `website`, `month`, `status`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(5, 'Mesye. Santosh Kumar Pandey', 'santosh-kumar-pandey', 10, 0, 0, 0, '2', 's.jpg', 'p29.jpg', 'Founder', 'Mesye Santosh se yon antreprenè seri ak enjenyè expérimentés, ki gen de deseni eksperyans ki gen anpil valè nan endistri IT.Avèk yon ekspètiz domèn fò, li chanpyon filozofi a nan livrezon solisyon senp men ki gen enpak ki satisfè bezwen itilizatè yo.Pandan tout karyè li, Mesye Santosh te dirije plizyè antrepriz siksè, sipèvize devlopman ak aplikasyon pwojè teknoloji dènye kri.Malgre eksperyans edikasyonèl li nan jeni mekanik, Mesye Santosh jwenn gwo akonplisman nan travay sou inisyativ ki gen yon enpak pozitif sou sosyete a ak otorize divès kominote, ki vize amelyore ak anrichi lavi yo.', 'https://www.facebook.com/santosh.chaitnya', 'https://twitter.com/pandesantosh', 'https://in.linkedin.com/in/santoshkpandey', 'yt', 'yt', '#', 'ty', 'ty', 'India', '+919820642246', ' saurabh.jain@we-matter.com', 'https://we.hucpl.com/team-details', 'May 12, 2023', 'Active', 'Santosh Kumar Pandey', '', ''),
(16, 'Mesye. Deepak Sharma', 'deepak-sharma', 11, 11, 0, 0, '8', 'dd.png', 'vedanta1.png', 'Large Company', 'Mesye Deepak se yon Kontab Chartered ki gen eksperyans ak yon gradye IIM-Ahmedabad, ak plis pase 30 ane eksperyans nan Sektè Finansye a. Li posede gwo ekspètiz domèn nan etabli nouvo liy biznis tankou Lwe, Acha anboche, Evalyasyon kredi endividyèl, platfòm pataje enfòmasyon sou kredi ak metodoloji jesyon biznis ki baze sou IT. Deepak espesyalize nan asire konfòmite regilasyon ak finansye.', '#', '#', 'https://in.linkedin.com/in/deepak-sharma-41302b68', '#', '#', '', '', '', '', '', '', '', 'Jun 27, 2023', 'Active', 'Deepak Sharma', '', ''),
(23, 'Mesye. RAJEEV BUNDHOO', 'mr-rajeev-bundhoo', 13, 0, 0, 0, '', 'rajiv.png', 'rajiv.png', 'Director', 'Aksyonè & Direktè Avèk plis pase 20 ane eksperyans nan jesyon pwojè gwo echèl, sektè konstriksyon, enèji ak telekominikasyon, Rajeev Bundhoo se nan tèt devlopman biznis ak ekspansyon mondyal konpayi an.', '#', '#', '#', '', '', '#', '', '', '', '', '', '', 'Sep 12, 2023', 'Active', 'Rajeev', '', ''),
(24, 'Mesye. Jasmeet S. Bajaj', 'mr-jasmeet-s-bajaj', 12, 0, 0, 0, '', 'jasmeet.jpg', 'user1.png', 'Cloud Technology', 'Espesyalize nan solisyon Cloud bay backup ak VPS sou nwaj,\r\nSèvis Cloud Jere, Espesyalize nan Cisco ak Watchdog firewall, American Megatrends Inc (AMI) San depo, cyber forensic, odit, ISO 27001 Sètifikasyon', '#', '#', 'https://www.linkedin.com/in/jasmeetsbajaj', '', '', '#', '', '', '', '', '', '', 'Sep 12, 2023', 'Active', 'Jasmeet Gill', '', ''),
(25, 'Mesye. SAMEER MATHUR', 'mr-sameer-mathur', 15, 0, 0, 0, '', 'Sameer-Mathur.png', 'user2.png', 'Advisor', 'Sameer Mathur, Fondatè/Mentor SM Consulting, gen plis pase de deseni eksperyans nan fonksyon travay menm jan an.Sameer te konplete MBA li an 1989 apre li te fin gradye nan Syans nan Hansraj College, Delhi University.\r\nSameer te travay pou òganizasyon tankou Tata Unisys Ltd. (kounye a Tata Information Ltd.) kòm Manadjè Rejyonal &amp; kòm yon Direktè(Komèsyal) nan Quantm Net Technologies Ltd.New Delhi.Li te yon antreprenè pou pifò nan lavi pwofesyonèl li.Li te gen fòmasyon fòmèl sou Depo ak tou sou Konsèp Jesyon Pwojè epi li se yon Manm nan Project Management Inc. (PMI)', '#', '#', '#', '', '', '#', '', '', '', '', '', '', 'Sep 12, 2023', 'Active', 'Sameer ', '', ''),
(27, 'Mesye. Vladimir Finov', 'mr-vladimir-finov', 14, 0, 0, 0, '', 'user4.jpg', 'user4.png', 'Consulatnt', 'Mesye Vladimir Finov gen plis pase 30 ane eksperyans nan kominikasyon satelit, sèvis vwa ak done dijital, ak sistèm telekominikasyon.Li te kòmanse karyè li an 1993 nan izin AutoVAZ nan Larisi e depi li te sèvi kòm yon konsiltan telekominikasyon pou konpayi miltinasyonal tankou Coca-Cola, General Electric, ak lòt moun.Mesye Finov espesyalize nan konsepsyon sistèm IT ak telecom, jesyon pwojè, ak operasyon, toujou priyorite 100% satisfaksyon kliyan ak jesyon kalite total.', '#', '#', '#', '', '', '#', '', '', '', '', '', '', 'Sep 12, 2023', 'Active', 'Vladmir ', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonial`
--

CREATE TABLE `tbl_testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_testimonial`
--

INSERT INTO `tbl_testimonial` (`id`, `name`, `designation`, `company`, `photo`, `comment`) VALUES
(1, 'Shree Sharma', 'Developer', 'HUCPL', 'logo2.jpg', 'The blankets and pillow covers that I ordered on Rosepetal were delivered on time and were well-packaged as well. I have been using the product for quite a long and noticed no change in product qualit');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `permission_menu` text COLLATE utf8_unicode_ci NOT NULL,
  `permission_sub_menu` text COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `email`, `password`, `photo`, `role`, `permission_menu`, `permission_sub_menu`, `status`) VALUES
(1, 'Shree Sharma', 'shriramsharma3@gmail.com', 'a3eed325674df89b7ebcc31891883637', 'axis1.jpg', 'Admin', '1,3,4,4_1,4_2,6,7,8,9,10,11,12,13,14,15,16', 's_1,s_2,s_3,s_4,s_5,s_6,s_7,6,8,9,11,14,19,20,21,22,23,24,25,26', 'Active'),
(2, 'Aarvi Kitchecn Equipment Pvt Ltd', 'arvi@gmail.com', '202cb962ac59075b964b07152d234b70', 'aarvi-logo2.png', 'useradmin', '1,2,3,4,4_1,4_2,4_3,5,6,7,8,9,10,13,14', 's_1,s_2,s_3,s_4,s_5,s_6,s_7,1,2,3,4,5,6,7,7_1,8,9,10,11,13,14,25', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_end`
--

CREATE TABLE `tbl_user_end` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) NOT NULL,
  `email` varchar(125) DEFAULT NULL,
  `mobile` varchar(32) DEFAULT NULL,
  `designation` varchar(255) NOT NULL,
  `comp_type` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `landmark` varchar(255) NOT NULL,
  `gst` varchar(255) NOT NULL,
  `acc_name` varchar(255) NOT NULL,
  `acc_no` varchar(125) NOT NULL,
  `ifsc_code` varchar(125) NOT NULL,
  `branch` varchar(125) NOT NULL,
  `user_pass` varchar(255) DEFAULT NULL,
  `user_type` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_end`
--

INSERT INTO `tbl_user_end` (`id`, `name`, `company_name`, `email`, `mobile`, `designation`, `comp_type`, `address`, `landmark`, `gst`, `acc_name`, `acc_no`, `ifsc_code`, `branch`, `user_pass`, `user_type`, `status`, `active`) VALUES
(37, 'Shree', '', 'shriramsharma3@gmail.com', '7838274896', '', '', '', '', '', '', '', '', '', '202cb962ac59075b964b07152d234b70', 1, 1, 0),
(42, NULL, '', NULL, '9881864165', '', '', '', '', '', '', '', '', '', 'fb3662c26b0d5a4e745bcf67d1865347', 1, 1, 0),
(43, NULL, '', NULL, '9125024365', '', '', '', '', '', '', '', '', '', 'd067478e6f5c45d43078fe3c28582c45', 1, 1, 0),
(44, NULL, '', NULL, '7973912664', '', '', '', '', '', '', '', '', '', 'f8f05bdd2d7e2c72de3c1e0e84f07401', 1, 1, 0),
(45, NULL, '', NULL, 'sdfsdf', '', '', '', '', '', '', '', '', '', '84d9cfc2f395ce883a41d7ffc1bbcf4e', 1, 1, 0),
(46, NULL, '', NULL, 'king', '', '', '', '', '', '', '', '', '', 'b2086154f101464aab3328ba7e060deb', 1, 1, 0),
(47, NULL, '', NULL, '9130704799', '', '', '', '', '', '', '', '', '', 'dd5eaa57bedd28924a51e4d446c8b463', 1, 1, 0),
(48, NULL, '', NULL, 'admin@jasexport.com', '', '', '', '', '', '', '', '', '', 'e6e061838856bf47e1de730719fb2609', 1, 1, 0),
(49, NULL, '', NULL, '567898', '', '', '', '', '', '', '', '', '', 'e6e061838856bf47e1de730719fb2609', 1, 1, 0),
(50, 'shree', '', 'shree@gmail.com', '123987546', '', '', '', '', '', '', '', '', '', '202cb962ac59075b964b07152d234b70', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

CREATE TABLE `tbl_video` (
  `video_id` int(11) NOT NULL,
  `video_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `video_iframe` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `v_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_video`
--

INSERT INTO `tbl_video` (`video_id`, `video_title`, `video_iframe`, `v_category_id`) VALUES
(1, 'Domestic Aata Chakki Demo', 'https://www.youtube.com/embed/CiKEKdsqe1c', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lanuage`
--
ALTER TABLE `lanuage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_category_photo`
--
ALTER TABLE `tbl_category_photo`
  ADD PRIMARY KEY (`p_category_id`);

--
-- Indexes for table `tbl_category_prod`
--
ALTER TABLE `tbl_category_prod`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_category_video`
--
ALTER TABLE `tbl_category_video`
  ADD PRIMARY KEY (`v_category_id`);

--
-- Indexes for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_coupon`
--
ALTER TABLE `tbl_coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_coupon_history`
--
ALTER TABLE `tbl_coupon_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_designation`
--
ALTER TABLE `tbl_designation`
  ADD PRIMARY KEY (`designation_id`);

--
-- Indexes for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `tbl_faq_category`
--
ALTER TABLE `tbl_faq_category`
  ADD PRIMARY KEY (`faq_category_id`);

--
-- Indexes for table `tbl_file`
--
ALTER TABLE `tbl_file`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `tbl_live_video`
--
ALTER TABLE `tbl_live_video`
  ADD PRIMARY KEY (`video_id`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_menu_one`
--
ALTER TABLE `tbl_menu_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_menu_three`
--
ALTER TABLE `tbl_menu_three`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_menu_two`
--
ALTER TABLE `tbl_menu_two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tbl_page`
--
ALTER TABLE `tbl_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page_content`
--
ALTER TABLE `tbl_page_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_photo`
--
ALTER TABLE `tbl_photo`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `tbl_prod_cart`
--
ALTER TABLE `tbl_prod_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_prod_color`
--
ALTER TABLE `tbl_prod_color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_prod_compare`
--
ALTER TABLE `tbl_prod_compare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_prod_image`
--
ALTER TABLE `tbl_prod_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_prod_order`
--
ALTER TABLE `tbl_prod_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_prod_review`
--
ALTER TABLE `tbl_prod_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_prod_size`
--
ALTER TABLE `tbl_prod_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_prod_whishlist`
--
ALTER TABLE `tbl_prod_whishlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_settings_about`
--
ALTER TABLE `tbl_settings_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_settings_contact`
--
ALTER TABLE `tbl_settings_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_settings_home`
--
ALTER TABLE `tbl_settings_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_subscriber`
--
ALTER TABLE `tbl_subscriber`
  ADD PRIMARY KEY (`subs_id`);

--
-- Indexes for table `tbl_sub_category`
--
ALTER TABLE `tbl_sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sub_category_prod`
--
ALTER TABLE `tbl_sub_category_prod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sub_sub_category_prod`
--
ALTER TABLE `tbl_sub_sub_category_prod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_team_member`
--
ALTER TABLE `tbl_team_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_end`
--
ALTER TABLE `tbl_user_end`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_video`
--
ALTER TABLE `tbl_video`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lanuage`
--
ALTER TABLE `lanuage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_category_photo`
--
ALTER TABLE `tbl_category_photo`
  MODIFY `p_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_category_prod`
--
ALTER TABLE `tbl_category_prod`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_category_video`
--
ALTER TABLE `tbl_category_video`
  MODIFY `v_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_coupon`
--
ALTER TABLE `tbl_coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_coupon_history`
--
ALTER TABLE `tbl_coupon_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_designation`
--
ALTER TABLE `tbl_designation`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_faq_category`
--
ALTER TABLE `tbl_faq_category`
  MODIFY `faq_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_file`
--
ALTER TABLE `tbl_file`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_live_video`
--
ALTER TABLE `tbl_live_video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tbl_menu_one`
--
ALTER TABLE `tbl_menu_one`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_menu_three`
--
ALTER TABLE `tbl_menu_three`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_menu_two`
--
ALTER TABLE `tbl_menu_two`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_page`
--
ALTER TABLE `tbl_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tbl_page_content`
--
ALTER TABLE `tbl_page_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_photo`
--
ALTER TABLE `tbl_photo`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_prod_cart`
--
ALTER TABLE `tbl_prod_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tbl_prod_color`
--
ALTER TABLE `tbl_prod_color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tbl_prod_compare`
--
ALTER TABLE `tbl_prod_compare`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_prod_image`
--
ALTER TABLE `tbl_prod_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tbl_prod_order`
--
ALTER TABLE `tbl_prod_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `tbl_prod_review`
--
ALTER TABLE `tbl_prod_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_prod_size`
--
ALTER TABLE `tbl_prod_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_prod_whishlist`
--
ALTER TABLE `tbl_prod_whishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_settings_about`
--
ALTER TABLE `tbl_settings_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_settings_contact`
--
ALTER TABLE `tbl_settings_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_settings_home`
--
ALTER TABLE `tbl_settings_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_subscriber`
--
ALTER TABLE `tbl_subscriber`
  MODIFY `subs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_sub_category`
--
ALTER TABLE `tbl_sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_sub_category_prod`
--
ALTER TABLE `tbl_sub_category_prod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `tbl_sub_sub_category_prod`
--
ALTER TABLE `tbl_sub_sub_category_prod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_team_member`
--
ALTER TABLE `tbl_team_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user_end`
--
ALTER TABLE `tbl_user_end`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tbl_video`
--
ALTER TABLE `tbl_video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
