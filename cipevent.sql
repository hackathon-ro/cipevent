-- phpMyAdmin SQL Dump
-- version 3.4.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 28, 2012 at 06:49 AM
-- Server version: 5.0.92
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cipcir93_cipevent`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL auto_increment,
  `id_location` int(11) NOT NULL,
  `event_name` varchar(500) collate utf8_unicode_ci NOT NULL,
  `time_start` bigint(32) NOT NULL,
  `time_end` bigint(32) NOT NULL,
  `status` int(11) NOT NULL,
  `type` varchar(20) collate utf8_unicode_ci NOT NULL,
  `link` varchar(500) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id_location` (`id_location`,`time_start`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=70 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `id_location`, `event_name`, `time_start`, `time_end`, `status`, `type`, `link`) VALUES
(1, 11, 'Expoziţia temporară de fotografie “Apeducte din Portugalia”, de Pedro Inácio', 1351411200, 1351418400, 0, '', ''),
(2, 12, 'Expoziția temporară În întuneric', 1351411200, 1351418400, 0, '', ''),
(3, 13, 'Întâlnirea de Duminică', 1351414800, 1351422000, 0, '', ''),
(4, 14, 'Cloud no.9 - pop-up store &amp; more', 1351414800, 1351422000, 0, '', ''),
(5, 15, 'Andrei Șerban - atelier pe șantier', 1351454400, 1351461600, 0, '', ''),
(6, 16, 'Festivalul de Muzica Veche 2012', 1351094400, 1351101600, 0, '', ''),
(7, 17, 'Festivalul International de Psihanaliza si Film', 1351269000, 1351276200, 0, '', ''),
(8, 18, 'Festivalul de Muzica Veche 2012', 1351094400, 1351101600, 0, '', ''),
(9, 19, 'The White Rabbit and The Black Magic', 1351357200, 1351364400, 0, '', ''),
(10, 20, 'BZN', 1351432800, 1351440000, 0, '', ''),
(11, 21, 'Live Espressione Quartet', 1351445400, 1351452600, 0, '', ''),
(12, 22, 'Jezebel', 1351447200, 1351454400, 0, '', ''),
(13, 23, 'Acoustic Chill Night', 1351447200, 1351454400, 0, '', ''),
(14, 24, 'Una Historia de Tango', 1351443600, 1351450800, 0, '', ''),
(15, 25, 'St. Art', 1351443600, 1351450800, 0, '', ''),
(16, 26, 'Blind', 1351447200, 1351454400, 0, '', ''),
(17, 27, 'Stand Up Comedy', 1351450800, 1351458000, 0, '', ''),
(18, 28, 'Improvisneyland', 1351450800, 1351458000, 0, '', ''),
(19, 29, 'Stand-Up Night', 1351450800, 1351458000, 0, '', ''),
(20, 30, 'St.art!', 1351452600, 1351459800, 0, '', ''),
(21, 31, 'Risipitorul', 1351324800, 1351332000, 0, '', ''),
(22, 32, 'Canarul albastru', 1351414800, 1351422000, 0, '', ''),
(23, 33, 'Ingeri in America (partea a II a)', 1351440000, 1351447200, 0, '', ''),
(24, 34, 'Risipitorul', 1351443600, 1351450800, 0, '', ''),
(25, 35, 'Blestemul iubirii', 1351443600, 1351450800, 0, '', ''),
(26, 36, 'Sabotaj din iubire', 1351443600, 1351450800, 0, '', ''),
(27, 37, 'Voiajul Domnului Perrichon', 1351443600, 1351450800, 0, '', ''),
(28, 38, 'Micul Print', 1351445400, 1351452600, 0, '', ''),
(29, 39, 'Barbatii sunt de pe Marte, femeile sunt de pe Venus', 1351447200, 1351454400, 0, '', ''),
(30, 40, 'Declar pe propria raspundere', 1351447200, 1351454400, 0, '', ''),
(31, 41, 'camil. un oarecare', 1351450800, 1351458000, 0, '', ''),
(32, 42, 'The White Rabbit and The Black Magic', 1351357200, 1351364400, 0, '', ''),
(33, 43, 'Afterhours Reloaded', 1351389600, 1351396800, 0, '', ''),
(34, 44, 'The morning after', 1351393200, 1351400400, 0, '', ''),
(35, 45, 'Morning Fiesta', 1351396800, 1351404000, 0, '', ''),
(36, 46, 'Dan Basu | OMU GNOM', 1351454400, 1351461600, 0, '', ''),
(37, 47, 'Spatiu expandat – individ si masa', 1346947200, 1346954400, 0, '', ''),
(38, 48, 'Picu Patrut. Ultimul mare miniaturist al Europei', 1347570000, 1347577200, 0, '', ''),
(39, 49, 'Traces', 1347634800, 1347642000, 0, '', ''),
(40, 50, 'Tarana', 1348158600, 1348165800, 0, '', ''),
(41, 51, 'Votezi, deci existi!', 1348740600, 1348747800, 0, '', ''),
(42, 52, 'Artistul si Puterea', 1348758000, 1348765200, 0, '', ''),
(43, 53, 'Unpolished', 1348848000, 1348855200, 0, '', ''),
(44, 54, 'Expozitia temporara "In intuneric" la Muzeul Antipa', 1349074800, 1349082000, 0, '', ''),
(45, 55, 'Cu Caragiale de la Washington la Bucuresti', 1349852400, 1349859600, 0, '', ''),
(46, 56, 'Ultimul Etaj. Bucuresti: o cartare fotografica, 2004-2012', 1349971200, 1349978400, 0, '', ''),
(47, 57, 'Lumea insectelor', 1350111600, 1350118800, 0, '', ''),
(48, 58, 'Bucurestiul in alb si negru', 1350487800, 1350495000, 0, '', ''),
(49, 59, '"New Works on Wood" - Matei Serban', 1350644400, 1350651600, 0, '', ''),
(50, 60, 'Serii. Multiplii. Realisme.', 1350657000, 1350664200, 0, '', ''),
(51, 61, 'Efigii', 1350892800, 1350900000, 0, '', ''),
(52, 62, 'Bad News', 1351065600, 1351072800, 0, '', ''),
(53, 63, 'Cehi mari prin ochii cehilor mici', 1351148400, 1351155600, 0, '', ''),
(54, 64, 'British Documentary', 1350316800, 1350324000, 0, '', ''),
(55, 65, 'Omagiu Fassbinder', 1350374400, 1350381600, 0, '', ''),
(56, 66, 'Movieplex Movie Maraton', 1351346400, 1351353600, 0, '', ''),
(57, 67, 'Ziua Internationala a Animatiei', 1351440000, 1351447200, 0, '', ''),
(58, 68, 'Ultimul Etaj. Bucuresti: o cartare fotografica, 2004-2012', 1349971200, 1349978400, 0, '', ''),
(59, 69, 'Parintele Jucaus', 1350057600, 1350064800, 0, '', ''),
(60, 70, 'Transformam tricouri', 1351429200, 1351436400, 0, '', ''),
(61, 71, 'Targul de Sfantul Dumitru', 1351231200, 1351238400, 0, '', ''),
(62, 72, 'Sweet Fest', 1351234800, 1351242000, 0, '', ''),
(63, 73, 'Targul de produse si mestesuguri traditionale "Priveste Horezu. Placerea de a trai"', 1351261800, 1351269000, 0, '', ''),
(64, 74, 'Cloud no°9', 1351324800, 1351332000, 0, '', ''),
(65, 75, 'Bienala Tinerilor Artisti', 1349967600, 1349974800, 0, '', ''),
(66, 76, 'De Halloween', 1351083600, 1351090800, 0, '', ''),
(67, 77, 'Stagiu de Daoyin - Qigong', 1351267200, 1351274400, 0, '', ''),
(68, 78, 'T-Lounge', 1351436400, 1351443600, 0, '', ''),
(69, 79, 'Festivalul International de Psihanaliza si Film', 1351269000, 1351276200, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE IF NOT EXISTS `locations` (
  `id` int(11) NOT NULL auto_increment,
  `location_name` varchar(500) collate utf8_unicode_ci NOT NULL,
  `adress` varchar(500) collate utf8_unicode_ci NOT NULL,
  `country` varchar(500) collate utf8_unicode_ci NOT NULL,
  `city` varchar(500) collate utf8_unicode_ci NOT NULL,
  `street` varchar(500) collate utf8_unicode_ci NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=80 ;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `location_name`, `adress`, `country`, `city`, `street`, `latitude`, `longitude`) VALUES
(1, 'Muzeul Naţional de Istorie a României', '', '', '', '', 0, 0),
(2, 'Muzeul de Istorie Naturală &quot;Grigore Antipa&quot;', '', '', '', '', 0, 0),
(3, 'Muzeul de Istorie Naturală &quot;Grigore Antipa&quot;', '', '', '', '', 0, 0),
(4, 'Godot Cafe-Teatru', '', '', '', '', 0, 0),
(5, 'Teatrul Naţional Ion Luca Caragiale - Sala Amfiteatru', '', '', '', '', 0, 0),
(6, 'Muzeul Naţional de Istorie a României', '', '', '', '', 0, 0),
(7, 'Muzeul de Istorie Naturală &quot;Grigore Antipa&quot;', '', '', '', '', 0, 0),
(8, 'Muzeul de Istorie Naturală &quot;Grigore Antipa&quot;', '', '', '', '', 0, 0),
(9, 'Godot Cafe-Teatru', '', '', '', '', 0, 0),
(10, 'Teatrul Naţional Ion Luca Caragiale - Sala Amfiteatru', '', '', '', '', 0, 0),
(11, 'Muzeul Naţional de Istorie a României', '', '', 'Bucuresti', '', 44.431447, 26.0974538),
(12, 'Muzeul de Istorie Naturală &quot;Grigore Antipa&quot;', '', '', 'Bucuresti', '', 44.431447, 26.0974538),
(13, 'Muzeul de Istorie Naturală &quot;Grigore Antipa&quot;', '', '', 'Bucuresti', '', 44.431447, 26.0974538),
(14, 'Godot Cafe-Teatru', '', '', 'Bucuresti', '', 44.437711, 26.0973669),
(15, 'Teatrul Naţional Ion Luca Caragiale - Sala Amfiteatru', '', '', 'Bucuresti', '', 0, 0),
(16, 'Bucuresti', '', '', 'Bucuresti', '', 44.437711, 26.0973669),
(17, 'Baneasa Shopping City', '', '', 'Bucuresti', '', 0, 0),
(18, 'Bucuresti', '', '', 'Bucuresti', '', 44.437711, 26.0973669),
(19, 'Sala Polivalenta', '', '', 'Bucuresti', '', 0, 0),
(20, 'Sala Palatului', '', '', 'Bucuresti', '', 0, 0),
(21, 'InLight Theater Pub', '', '', 'Bucuresti', '', 44.437711, 26.0973669),
(22, 'La Historia de Cuba', '', '', 'Bucuresti', '', 44.437711, 26.0973669),
(23, 'Bohemia Tea House', '', '', 'Bucuresti', '', 44.437711, 26.0973669),
(24, 'Masca', '', '', 'Bucuresti', '', 44.4385127, 26.0299522),
(25, 'Club Légère Live', '', '', 'Bucuresti', '', 44.437711, 26.0973669),
(26, 'Club Prometheus', '', '', 'Bucuresti', '', 44.437711, 26.0973669),
(27, 'St. Patrick Irish Pub', '', '', 'Bucuresti', '', 44.437711, 26.0973669),
(28, 'Club 99 - The Comedy Club', '', '', 'Bucuresti', '', 44.4462105, 26.1078957),
(29, 'Red Island', '', '', 'Bucuresti', '', 44.437711, 26.0973669),
(30, 'Open Pub', '', '', 'Bucuresti', '', 0, 0),
(31, 'Constantin Tanase - sala Rapsodia', '', '', 'Bucuresti', '', 44.437711, 26.0973669),
(32, 'Masca', '', '', 'Bucuresti', '', 44.4385127, 26.0299522),
(33, 'Teatrul Metropolis', '', '', 'Bucuresti', '', 44.4359402, 26.1052215),
(34, 'Constantin Tanase - sala Rapsodia', '', '', 'Bucuresti', '', 44.437711, 26.0973669),
(35, 'Teatrul Evreiesc de Stat', '', '', 'Bucuresti', '', 0, 0),
(36, 'In culise', '', '', 'Bucuresti', '', 44.437711, 26.0973669),
(37, 'Bulandra - Liviu Ciulei', '', '', 'Bucuresti', '', 44.437711, 26.0973669),
(38, 'Odeon', '', '', 'Bucuresti', '', 44.437711, 26.0973669),
(39, 'Godot Cafe Teatru', '', '', 'Bucuresti', '', 44.437711, 26.0973669),
(40, 'Green Hours', '', '', 'Bucuresti', '', 0, 0),
(41, 'Verde Cafe', '', '', 'Bucuresti', '', 44.437711, 26.0973669),
(42, 'Sala Polivalenta', '', '', 'Bucuresti', '', 0, 0),
(43, 'Barocco Club', '', '', 'Bucuresti', '', 44.437711, 26.0973669),
(44, 'Colors', '', '', 'Bucuresti', '', 44.437711, 26.0973669),
(45, 'Space', '', '', 'Bucuresti', '', 44.437711, 26.0973669),
(46, 'Goblin', '', '', 'Bucuresti', '', 44.437711, 26.0973669),
(47, 'Hanul lui Manuc', '', '', 'Bucuresti', '', 0, 0),
(48, 'Muzeul Taranului Roman', '', '', 'Bucuresti', '', 44.4544247, 26.0836504),
(49, 'Anca Poterasu Gallery', '', '', 'Bucuresti', '', 44.437711, 26.0973669),
(50, 'Melenia Art Gallery', '', '', 'Bucuresti', '', 44.437711, 26.0973669),
(51, 'Cuptorul cu Lemne - Pache', '', '', 'Bucuresti', '', 0, 0),
(52, 'Biblioteca Nationala a Romaniei - Sediul nou', '', '', 'Bucuresti', '', 44.433393, 26.1005517999999),
(53, 'MNAC (Muzeul National de Arta Contemporana)', '', '', 'Bucuresti', '', 44.437711, 26.0973669),
(54, 'Muzeul Antipa', '', '', 'Bucuresti', '', 44.4531131, 26.0846382),
(55, 'Biblioteca Nationala a Romaniei - Sediul nou', '', '', 'Bucuresti', '', 44.433393, 26.1005517999999),
(56, 'MNAC (Muzeul National de Arta Contemporana)', '', '', 'Bucuresti', '', 44.437711, 26.0973669),
(57, 'Muzeul Antipa', '', '', 'Bucuresti', '', 44.4531131, 26.0846382),
(58, 'Carturesti - Verona', '', '', 'Bucuresti', '', 0, 0),
(59, 'Artexpert', '', '', 'Bucuresti', '', 44.437711, 26.0973669),
(60, 'Muzeul Taranului Roman', '', '', 'Bucuresti', '', 44.4544247, 26.0836504),
(61, 'Simeza', '', '', 'Bucuresti', '', 44.437711, 26.0973669),
(62, 'Galeria "26"', '', '', 'Bucuresti', '', 0, 0),
(63, 'Bucuresti', '', '', 'Bucuresti', '', 44.437711, 26.0973669),
(64, 'Muzeul Taranului Roman', '', '', 'Bucuresti', '', 44.4544247, 26.0836504),
(65, 'Cinemateca Union', '', '', 'Bucuresti', '', 44.437711, 26.0973669),
(66, 'Movieplex Cinema Plaza Romania', '', '', 'Bucuresti', '', 0, 0),
(67, 'Control', '', '', 'Bucuresti', '', 44.437711, 26.0973669),
(68, 'MNAC (Muzeul National de Arta Contemporana)', '', '', 'Bucuresti', '', 44.437711, 26.0973669),
(69, 'Incubator 107', '', '', 'Bucuresti', '', 44.4340247, 26.1208501),
(70, 'Incubator 107', '', '', 'Bucuresti', '', 44.4340247, 26.1208501),
(71, 'Muzeul Satului', '', '', 'Bucuresti', '', 44.470528, 26.0786588999999),
(72, 'Hanul lui Manuc', '', '', 'Bucuresti', '', 0, 0),
(73, 'Ateneul Roman', '', '', 'Bucuresti', '', 44.4414002, 26.0973465),
(74, 'Godot Cafe Teatru', '', '', 'Bucuresti', '', 44.437711, 26.0973669),
(75, 'Bucuresti', '', '', 'Bucuresti', '', 44.437711, 26.0973669),
(76, 'Sun Plaza', '', '', 'Bucuresti', '', 0, 0),
(77, 'Bucuresti', '', '', 'Bucuresti', '', 44.437711, 26.0973669),
(78, 'Tchaikovsky', '', '', 'Bucuresti', '', 44.437711, 26.0973669),
(79, 'Baneasa Shopping City', '', '', 'Bucuresti', '', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
