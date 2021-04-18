-- phpMyAdmin SQL Dump
-- version 3.3.0
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 20 Mei 2011 om 22:10
-- Serverversie: 5.1.44
-- PHP-Versie: 5.2.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `opra`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `aanvalslog`
--

CREATE TABLE IF NOT EXISTS `aanvalslog` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip` varchar(255) NOT NULL DEFAULT '',
  `door` varchar(255) NOT NULL DEFAULT '',
  `wie` varchar(255) NOT NULL DEFAULT '',
  `wat` varchar(255) NOT NULL DEFAULT '',
  `hoeveel` int(255) NOT NULL DEFAULT '0',
  `levenverloren` int(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Gegevens worden uitgevoerd voor tabel `aanvalslog`
--


-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `adminpanel`
--

CREATE TABLE IF NOT EXISTS `adminpanel` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip` varchar(255) NOT NULL DEFAULT '',
  `login` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=202 ;

--
-- Gegevens worden uitgevoerd voor tabel `adminpanel`
--

INSERT INTO `adminpanel` (`id`, `time`, `ip`, `login`) VALUES
(1, '2011-04-01 21:39:11', '94.214.40.119', 'admin'),
(2, '2011-04-01 21:39:12', '94.214.40.119', 'admin'),
(3, '2011-04-01 21:40:34', '94.214.40.119', 'admin'),
(4, '2011-04-01 21:41:05', '94.214.40.119', 'admin'),
(5, '2011-04-02 14:36:22', '94.214.40.119', 'admin'),
(6, '2011-04-02 15:10:59', '94.214.40.119', 'admin'),
(7, '2011-04-02 15:11:03', '94.214.40.119', 'admin'),
(8, '2011-04-02 15:13:39', '94.214.40.119', 'admin'),
(9, '2011-04-02 15:14:03', '94.214.40.119', 'admin'),
(10, '2011-04-02 15:14:05', '94.214.40.119', 'admin'),
(11, '2011-04-02 15:16:27', '94.214.40.119', 'admin'),
(12, '2011-04-02 15:18:50', '94.214.40.119', 'admin'),
(13, '2011-04-02 15:54:09', '94.214.40.119', 'admin'),
(14, '2011-04-02 17:07:18', '94.214.40.119', 'admin'),
(15, '2011-04-02 18:56:39', '94.214.40.119', 'admin'),
(16, '2011-04-02 21:52:33', '94.214.40.119', 'admin'),
(17, '2011-04-02 21:52:35', '94.214.40.119', 'admin'),
(18, '2011-04-02 21:53:13', '94.214.40.119', 'admin'),
(19, '2011-04-02 21:59:34', '94.214.40.119', 'admin'),
(20, '2011-04-02 22:21:45', '94.214.40.119', 'admin'),
(21, '2011-04-02 22:36:32', '94.214.40.119', 'admin'),
(22, '2011-04-03 11:13:41', '94.214.40.119', 'admin'),
(23, '2011-04-03 11:16:39', '94.214.40.119', 'admin'),
(24, '2011-04-03 11:17:53', '94.214.40.119', 'admin'),
(25, '2011-04-03 11:19:54', '94.214.40.119', 'admin'),
(26, '2011-04-03 11:39:06', '94.214.40.119', 'admin'),
(27, '2011-04-03 11:41:44', '94.214.40.119', 'admin'),
(28, '2011-04-03 12:36:54', '94.214.40.119', 'admin'),
(29, '2011-04-03 17:36:25', '94.214.40.119', 'admin'),
(30, '2011-04-04 15:46:39', '94.214.40.119', 'admin'),
(31, '2011-04-04 15:46:47', '94.214.40.119', 'admin'),
(32, '2011-04-04 15:46:57', '94.214.40.119', 'admin'),
(33, '2011-04-05 14:16:41', '213.125.36.130', 'admin'),
(34, '2011-04-05 14:18:09', '213.125.36.130', 'admin'),
(35, '2011-04-05 14:24:09', '213.125.36.130', 'admin'),
(36, '2011-04-05 14:26:15', '213.125.36.130', 'admin'),
(37, '2011-04-05 14:29:07', '213.125.36.130', 'admin'),
(38, '2011-04-05 15:51:07', '94.214.40.119', 'admin'),
(39, '2011-04-05 15:55:17', '94.214.40.119', 'admin'),
(40, '2011-04-05 15:55:47', '94.214.40.119', 'admin'),
(41, '2011-04-16 13:29:21', '94.214.40.119', 'admin'),
(42, '2011-04-16 14:51:54', '94.214.40.119', 'admin'),
(43, '2011-04-16 15:05:34', '94.214.40.119', 'admin'),
(44, '2011-04-16 16:59:57', '94.214.40.119', 'admin'),
(45, '2011-04-16 16:57:56', '127.0.0.1', 'admin'),
(46, '2011-04-16 16:58:01', '127.0.0.1', 'admin'),
(47, '2011-04-16 16:58:02', '127.0.0.1', 'admin'),
(48, '2011-04-16 16:58:03', '127.0.0.1', 'admin'),
(49, '2011-04-16 16:58:06', '127.0.0.1', 'admin'),
(50, '2011-04-16 16:58:10', '127.0.0.1', 'admin'),
(51, '2011-04-16 16:58:14', '127.0.0.1', 'admin'),
(52, '2011-04-16 16:58:16', '127.0.0.1', 'admin'),
(53, '2011-04-16 16:58:18', '127.0.0.1', 'admin'),
(54, '2011-04-16 16:58:19', '127.0.0.1', 'admin'),
(55, '2011-04-16 16:58:33', '127.0.0.1', 'admin'),
(56, '2011-04-16 16:58:34', '127.0.0.1', 'admin'),
(57, '2011-04-16 16:58:35', '127.0.0.1', 'admin'),
(58, '2011-04-16 16:58:35', '127.0.0.1', 'admin'),
(59, '2011-04-16 16:58:38', '127.0.0.1', 'admin'),
(60, '2011-04-16 16:58:39', '127.0.0.1', 'admin'),
(61, '2011-04-16 16:58:40', '127.0.0.1', 'admin'),
(62, '2011-04-16 16:59:07', '127.0.0.1', 'admin'),
(63, '2011-04-16 16:59:46', '127.0.0.1', 'admin'),
(64, '2011-04-16 17:00:34', '127.0.0.1', 'admin'),
(65, '2011-04-16 17:01:54', '127.0.0.1', 'admin'),
(66, '2011-04-16 17:02:30', '127.0.0.1', 'admin'),
(67, '2011-04-16 17:02:35', '127.0.0.1', 'admin'),
(68, '2011-04-16 17:02:48', '127.0.0.1', 'admin'),
(69, '2011-04-16 17:03:23', '127.0.0.1', 'admin'),
(70, '2011-04-16 17:05:00', '127.0.0.1', 'admin'),
(71, '2011-04-16 17:05:02', '127.0.0.1', 'admin'),
(72, '2011-04-16 17:05:04', '127.0.0.1', 'admin'),
(73, '2011-04-16 17:05:06', '127.0.0.1', 'admin'),
(74, '2011-04-16 17:05:06', '127.0.0.1', 'admin'),
(75, '2011-04-16 17:05:07', '127.0.0.1', 'admin'),
(76, '2011-04-16 17:05:07', '127.0.0.1', 'admin'),
(77, '2011-04-16 17:05:29', '127.0.0.1', 'admin'),
(78, '2011-04-16 17:05:35', '127.0.0.1', 'admin'),
(79, '2011-04-16 17:06:16', '127.0.0.1', 'admin'),
(80, '2011-04-16 17:06:19', '127.0.0.1', 'admin'),
(81, '2011-04-16 17:06:22', '127.0.0.1', 'admin'),
(82, '2011-04-16 17:06:22', '127.0.0.1', 'admin'),
(83, '2011-04-16 17:06:24', '127.0.0.1', 'admin'),
(84, '2011-04-16 17:06:26', '127.0.0.1', 'admin'),
(85, '2011-04-16 17:06:26', '127.0.0.1', 'admin'),
(86, '2011-04-16 17:06:32', '127.0.0.1', 'admin'),
(87, '2011-04-16 17:07:07', '127.0.0.1', 'admin'),
(88, '2011-04-16 17:08:47', '127.0.0.1', 'admin'),
(89, '2011-04-16 17:10:07', '127.0.0.1', 'admin'),
(90, '2011-04-16 17:10:40', '127.0.0.1', 'admin'),
(91, '2011-04-16 17:11:31', '127.0.0.1', 'admin'),
(92, '2011-04-16 17:11:33', '127.0.0.1', 'admin'),
(93, '2011-04-16 17:12:02', '127.0.0.1', 'admin'),
(94, '2011-04-16 17:12:28', '127.0.0.1', 'admin'),
(95, '2011-04-16 17:12:32', '127.0.0.1', 'admin'),
(96, '2011-04-16 17:13:19', '127.0.0.1', 'admin'),
(97, '2011-04-16 17:13:26', '127.0.0.1', 'admin'),
(98, '2011-04-16 17:13:46', '127.0.0.1', 'admin'),
(99, '2011-04-16 17:14:08', '127.0.0.1', 'admin'),
(100, '2011-04-16 17:14:20', '127.0.0.1', 'admin'),
(101, '2011-04-16 17:14:36', '127.0.0.1', 'admin'),
(102, '2011-04-16 17:14:53', '127.0.0.1', 'admin'),
(103, '2011-04-16 17:15:07', '127.0.0.1', 'admin'),
(104, '2011-04-16 17:15:11', '127.0.0.1', 'admin'),
(105, '2011-04-16 17:15:13', '127.0.0.1', 'admin'),
(106, '2011-04-16 17:15:29', '127.0.0.1', 'admin'),
(107, '2011-04-16 17:15:33', '127.0.0.1', 'admin'),
(108, '2011-04-16 17:15:34', '127.0.0.1', 'admin'),
(109, '2011-04-16 17:15:35', '127.0.0.1', 'admin'),
(110, '2011-04-16 17:15:37', '127.0.0.1', 'admin'),
(111, '2011-04-16 17:16:27', '127.0.0.1', 'admin'),
(112, '2011-04-16 17:16:30', '127.0.0.1', 'admin'),
(113, '2011-04-16 17:17:19', '127.0.0.1', 'admin'),
(114, '2011-04-16 17:17:21', '127.0.0.1', 'admin'),
(115, '2011-04-16 17:17:21', '127.0.0.1', 'admin'),
(116, '2011-04-16 17:17:22', '127.0.0.1', 'admin'),
(117, '2011-04-16 17:17:22', '127.0.0.1', 'admin'),
(118, '2011-04-16 17:17:22', '127.0.0.1', 'admin'),
(119, '2011-04-16 17:17:23', '127.0.0.1', 'admin'),
(120, '2011-04-16 17:17:23', '127.0.0.1', 'admin'),
(121, '2011-04-16 17:17:25', '127.0.0.1', 'admin'),
(122, '2011-04-16 17:17:26', '127.0.0.1', 'admin'),
(123, '2011-04-16 17:17:28', '127.0.0.1', 'admin'),
(124, '2011-04-16 17:17:35', '127.0.0.1', 'admin'),
(125, '2011-04-16 17:17:55', '127.0.0.1', 'admin'),
(126, '2011-04-16 17:18:08', '127.0.0.1', 'admin'),
(127, '2011-04-16 17:18:39', '127.0.0.1', 'admin'),
(128, '2011-04-16 17:18:54', '127.0.0.1', 'admin'),
(129, '2011-04-16 17:18:55', '127.0.0.1', 'admin'),
(130, '2011-04-16 17:19:51', '127.0.0.1', 'admin'),
(131, '2011-04-16 17:34:59', '94.214.40.119', 'admin'),
(132, '2011-04-16 17:38:21', '94.214.40.119', 'admin'),
(133, '2011-04-16 17:38:30', '94.214.40.119', 'admin'),
(134, '2011-04-16 17:38:34', '94.214.40.119', 'admin'),
(135, '2011-04-16 17:38:35', '94.214.40.119', 'admin'),
(136, '2011-04-16 17:38:35', '94.214.40.119', 'admin'),
(137, '2011-04-16 17:38:36', '94.214.40.119', 'admin'),
(138, '2011-04-16 17:38:41', '94.214.40.119', 'admin'),
(139, '2011-04-16 17:39:28', '94.214.40.119', 'admin'),
(140, '2011-04-16 17:39:35', '94.214.40.119', 'admin'),
(141, '2011-04-16 17:39:39', '94.214.40.119', 'admin'),
(142, '2011-04-16 17:39:59', '94.214.40.119', 'admin'),
(143, '2011-04-16 17:40:35', '94.214.40.119', 'admin'),
(144, '2011-04-16 17:40:38', '94.214.40.119', 'admin'),
(145, '2011-04-16 17:41:40', '94.214.40.119', 'admin'),
(146, '2011-04-16 17:42:01', '94.214.40.119', 'admin'),
(147, '2011-04-16 17:44:19', '94.214.40.119', 'admin'),
(148, '2011-04-16 17:44:40', '94.214.40.119', 'admin'),
(149, '2011-04-16 17:45:44', '94.214.40.119', 'admin'),
(150, '2011-04-16 17:45:57', '94.214.40.119', 'admin'),
(151, '2011-04-16 17:47:36', '94.214.40.119', 'admin'),
(152, '2011-04-16 17:47:38', '94.214.40.119', 'admin'),
(153, '2011-04-16 17:48:00', '94.214.40.119', 'admin'),
(154, '2011-04-16 17:48:21', '94.214.40.119', 'admin'),
(155, '2011-04-16 17:48:24', '94.214.40.119', 'admin'),
(156, '2011-04-16 17:48:49', '94.214.40.119', 'admin'),
(157, '2011-04-16 17:48:52', '94.214.40.119', 'admin'),
(158, '2011-04-16 17:54:53', '94.214.40.119', 'admin'),
(159, '2011-04-16 17:55:06', '94.214.40.119', 'admin'),
(160, '2011-04-16 17:55:08', '94.214.40.119', 'admin'),
(161, '2011-04-16 17:55:08', '94.214.40.119', 'admin'),
(162, '2011-04-16 17:55:16', '94.214.40.119', 'admin'),
(163, '2011-04-16 17:55:17', '94.214.40.119', 'admin'),
(164, '2011-04-16 17:55:18', '94.214.40.119', 'admin'),
(165, '2011-04-16 17:55:18', '94.214.40.119', 'admin'),
(166, '2011-04-16 17:55:18', '94.214.40.119', 'admin'),
(167, '2011-04-16 17:55:29', '94.214.40.119', 'admin'),
(168, '2011-04-16 17:57:30', '94.214.40.119', 'admin'),
(169, '2011-04-16 17:57:31', '94.214.40.119', 'admin'),
(170, '2011-04-16 17:57:32', '94.214.40.119', 'admin'),
(171, '2011-04-16 17:57:32', '94.214.40.119', 'admin'),
(172, '2011-04-16 17:57:32', '94.214.40.119', 'admin'),
(173, '2011-04-16 17:57:35', '94.214.40.119', 'admin'),
(174, '2011-04-16 17:58:37', '94.214.40.119', 'admin'),
(175, '2011-04-16 17:58:40', '94.214.40.119', 'admin'),
(176, '2011-04-16 17:59:25', '94.214.40.119', 'admin'),
(177, '2011-04-16 18:08:29', '94.214.40.119', 'admin'),
(178, '2011-04-16 18:08:32', '94.214.40.119', 'admin'),
(179, '2011-04-16 18:10:42', '94.214.40.119', 'admin'),
(180, '2011-04-16 18:10:46', '94.214.40.119', 'admin'),
(181, '2011-04-16 18:13:30', '94.214.40.119', 'admin'),
(182, '2011-04-16 18:16:53', '94.214.40.119', 'admin'),
(183, '2011-04-16 18:17:50', '94.214.40.119', 'admin'),
(184, '2011-04-16 18:18:43', '94.214.40.119', 'admin'),
(185, '2011-04-16 18:19:11', '94.214.40.119', 'admin'),
(186, '2011-04-16 18:19:37', '94.214.40.119', 'admin'),
(187, '2011-04-16 18:19:53', '94.214.40.119', 'admin'),
(188, '2011-04-16 18:21:38', '94.214.40.119', 'admin'),
(189, '2011-04-16 21:42:32', '127.0.0.1', 'admin'),
(190, '2011-04-16 21:45:15', '127.0.0.1', 'admin'),
(191, '2011-04-16 21:50:44', '127.0.0.1', 'admin'),
(192, '2011-04-16 21:51:29', '127.0.0.1', 'admin'),
(193, '2011-04-16 22:18:12', '127.0.0.1', 'admin'),
(194, '2011-04-16 22:21:24', '127.0.0.1', 'admin'),
(195, '2011-04-17 10:34:22', '94.214.40.119', 'admin'),
(196, '2011-04-17 10:35:09', '94.214.40.119', 'admin'),
(197, '2011-04-17 10:56:29', '84.30.230.64', 'admin'),
(198, '2011-04-17 15:49:00', '127.0.0.1', 'admin'),
(199, '2011-04-20 08:45:00', '127.0.0.1', 'admin'),
(200, '2011-05-20 22:06:47', '127.0.0.1', 'admin'),
(201, '2011-05-20 22:08:50', '127.0.0.1', 'admin');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `autos`
--

CREATE TABLE IF NOT EXISTS `autos` (
  `owner` varchar(16) COLLATE latin1_german1_ci DEFAULT NULL,
  `schade` int(3) NOT NULL DEFAULT '0',
  `waarde` int(255) NOT NULL DEFAULT '0',
  `soort` int(5) NOT NULL DEFAULT '0',
  `id` int(255) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci AUTO_INCREMENT=1 ;

--
-- Gegevens worden uitgevoerd voor tabel `autos`
--


-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ccshoplogs`
--

CREATE TABLE IF NOT EXISTS `ccshoplogs` (
  `login` varchar(255) NOT NULL DEFAULT '',
  `ip` varchar(255) NOT NULL DEFAULT '',
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `wat` varchar(255) NOT NULL DEFAULT '',
  `credits` int(255) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `ccshoplogs`
--


-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `chatlog`
--

CREATE TABLE IF NOT EXISTS `chatlog` (
  `afzender` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `message` text CHARACTER SET latin1,
  `id` int(255) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci AUTO_INCREMENT=79 ;

--
-- Gegevens worden uitgevoerd voor tabel `chatlog`
--


-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `chat_online`
--

CREATE TABLE IF NOT EXISTS `chat_online` (
  `person` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `id` int(255) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Gegevens worden uitgevoerd voor tabel `chat_online`
--


-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `clicks`
--

CREATE TABLE IF NOT EXISTS `clicks` (
  `ip` varchar(64) CHARACTER SET latin1 DEFAULT NULL,
  `login` varchar(16) CHARACTER SET latin1 DEFAULT NULL,
  `active` int(5) NOT NULL DEFAULT '1',
  `date` datetime NOT NULL,
  `from` varchar(16) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Gegevens worden uitgevoerd voor tabel `clicks`
--


-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `codes`
--

CREATE TABLE IF NOT EXISTS `codes` (
  `prijs` varchar(200) NOT NULL DEFAULT '5',
  `code` varchar(200) NOT NULL,
  `gebruikt` int(11) NOT NULL DEFAULT '0',
  `prijssoort` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `codes`
--

INSERT INTO `codes` (`prijs`, `code`, `gebruikt`, `prijssoort`) VALUES
('125', '983573', 1, 'callcredits'),
('1200005', '932585', 1, 'contant');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `killershop` varchar(10) NOT NULL DEFAULT 'Ja',
  `ding` int(1) NOT NULL DEFAULT '1',
  `extraatje` varchar(5) NOT NULL DEFAULT 'Ja',
  `zelfmoord` varchar(5) NOT NULL DEFAULT 'Ja',
  `mac` varchar(5) NOT NULL DEFAULT 'Ja'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `config`
--

INSERT INTO `config` (`killershop`, `ding`, `extraatje`, `zelfmoord`, `mac`) VALUES
('Ja', 1, 'Nee', 'Ja', 'Ja');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `owner` varchar(16) CHARACTER SET latin1 DEFAULT NULL,
  `person` varchar(16) CHARACTER SET latin1 DEFAULT NULL,
  `level` int(5) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Gegevens worden uitgevoerd voor tabel `contacts`
--

INSERT INTO `contacts` (`owner`, `person`, `level`) VALUES
('jorisaap', 'admin', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contracten`
--

CREATE TABLE IF NOT EXISTS `contracten` (
  `from` varchar(16) CHARACTER SET latin1 DEFAULT NULL,
  `to` varchar(16) CHARACTER SET latin1 DEFAULT NULL,
  `anoniem` int(5) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Gegevens worden uitgevoerd voor tabel `contracten`
--


-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `crimes`
--

CREATE TABLE IF NOT EXISTS `crimes` (
  `owner` varchar(70) CHARACTER SET latin1 DEFAULT NULL,
  `chaufeur` varchar(70) CHARACTER SET latin1 DEFAULT NULL,
  `wapenexpert` varchar(70) CHARACTER SET latin1 DEFAULT NULL,
  `wapenklaar` int(5) NOT NULL DEFAULT '0',
  `chaufeurklaar` int(5) NOT NULL DEFAULT '0',
  `inzet` int(255) NOT NULL DEFAULT '0',
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `kans` int(60) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci AUTO_INCREMENT=1 ;

--
-- Gegevens worden uitgevoerd voor tabel `crimes`
--


-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cron`
--

CREATE TABLE IF NOT EXISTS `cron` (
  `name` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `time` bigint(255) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Gegevens worden uitgevoerd voor tabel `cron`
--

INSERT INTO `cron` (`name`, `time`) VALUES
('day', 1306008395),
('hour', 1305925595),
('week', 1306526795);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `crons`
--

CREATE TABLE IF NOT EXISTS `crons` (
  `uurtijd` datetime DEFAULT NULL,
  `dagtijd` datetime DEFAULT NULL,
  `weektijd` datetime DEFAULT NULL,
  `maandtijd` datetime DEFAULT NULL,
  `drugstijd` datetime DEFAULT NULL,
  `id` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `crons`
--


-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `drugskoers`
--

CREATE TABLE IF NOT EXISTS `drugskoers` (
  `nederwiet` int(10) NOT NULL DEFAULT '0',
  `paddo` int(10) NOT NULL DEFAULT '0',
  `xtc` int(10) NOT NULL DEFAULT '0',
  `lsd` int(10) NOT NULL DEFAULT '0',
  `speed` int(10) NOT NULL DEFAULT '0',
  `opium` int(10) NOT NULL DEFAULT '0',
  `land` int(1) NOT NULL DEFAULT '0',
  `pruimtabak` int(10) NOT NULL DEFAULT '0',
  `vannelle` int(10) NOT NULL DEFAULT '0',
  `drum` int(10) NOT NULL DEFAULT '0',
  `lm` int(10) NOT NULL DEFAULT '0',
  `kent` int(10) NOT NULL DEFAULT '0',
  `panter` int(10) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Gegevens worden uitgevoerd voor tabel `drugskoers`
--

INSERT INTO `drugskoers` (`nederwiet`, `paddo`, `xtc`, `lsd`, `speed`, `opium`, `land`, `pruimtabak`, `vannelle`, `drum`, `lm`, `kent`, `panter`) VALUES
(838, 1867, 2868, 3618, 4297, 4975, 1, 697, 1633, 2621, 3695, 4506, 4880),
(1047, 2114, 2554, 3676, 4452, 4791, 2, 1058, 1514, 2696, 3436, 4482, 4740),
(1068, 1751, 3042, 3678, 4551, 4556, 3, 682, 1825, 2745, 3504, 4119, 4698),
(932, 1957, 2665, 3878, 4011, 4668, 4, 1292, 1713, 3078, 3539, 4135, 4574),
(1130, 2105, 2796, 3677, 4032, 4638, 5, 669, 2000, 2970, 3809, 4457, 4793),
(974, 2104, 2765, 3556, 4241, 4645, 6, 1262, 1662, 2562, 3920, 4246, 4738);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `families`
--

CREATE TABLE IF NOT EXISTS `families` (
  `owner` varchar(16) CHARACTER SET latin1 DEFAULT NULL,
  `bank` bigint(255) NOT NULL DEFAULT '0',
  `contant` bigint(255) NOT NULL DEFAULT '0',
  `power` int(255) NOT NULL DEFAULT '0',
  `info` text CHARACTER SET latin1,
  `fampower` int(5) NOT NULL DEFAULT '0',
  `dcb` int(5) NOT NULL DEFAULT '0',
  `helicopter` int(5) NOT NULL DEFAULT '0',
  `gevechtsvliegtuig` int(5) NOT NULL DEFAULT '0',
  `battleship` int(5) NOT NULL DEFAULT '0',
  `vliegdekschip` int(5) NOT NULL DEFAULT '0',
  `naam` varchar(32) CHARACTER SET latin1 DEFAULT NULL,
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `kogels` int(20) NOT NULL DEFAULT '0',
  `maxleden` int(10) NOT NULL DEFAULT '5',
  `killers` int(5) NOT NULL DEFAULT '0',
  `attwins` varchar(5) COLLATE latin1_german1_ci NOT NULL DEFAULT '0',
  `attlost` varchar(5) COLLATE latin1_german1_ci NOT NULL DEFAULT '0',
  `rocketlauncher` int(5) NOT NULL DEFAULT '0',
  `tank` int(5) NOT NULL DEFAULT '0',
  `storten` int(5) NOT NULL DEFAULT '15',
  `attacked` text CHARACTER SET latin1,
  `clicks` text CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci AUTO_INCREMENT=2 ;

--
-- Gegevens worden uitgevoerd voor tabel `families`
--

INSERT INTO `families` (`owner`, `bank`, `contant`, `power`, `info`, `fampower`, `dcb`, `helicopter`, `gevechtsvliegtuig`, `battleship`, `vliegdekschip`, `naam`, `id`, `kogels`, `maxleden`, `killers`, `attwins`, `attlost`, `rocketlauncher`, `tank`, `storten`, `attacked`, `clicks`) VALUES
('admin', 0, 0, 33200, 'Welkom op Tha Don Famililz pagina.\r\nDit is de eerste en beste familie van heel Opra-crime.\r\nJoin ons nu en wordt ook een familiz!', 0, 0, 0, 0, 0, 0, 'Tha don familiz', 1, 0, 5, 1, '0', '0', 0, 0, 15, '', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `forumpolls`
--

CREATE TABLE IF NOT EXISTS `forumpolls` (
  `vraag` varchar(40) COLLATE latin1_german1_ci DEFAULT NULL,
  `opties` int(5) NOT NULL DEFAULT '0',
  `geldig` int(5) NOT NULL DEFAULT '0',
  `optie1` varchar(40) COLLATE latin1_german1_ci DEFAULT NULL,
  `optie2` varchar(40) COLLATE latin1_german1_ci DEFAULT NULL,
  `optie3` varchar(40) COLLATE latin1_german1_ci DEFAULT NULL,
  `optie4` varchar(40) COLLATE latin1_german1_ci DEFAULT NULL,
  `optie5` varchar(40) COLLATE latin1_german1_ci DEFAULT NULL,
  `optie6` varchar(40) COLLATE latin1_german1_ci DEFAULT NULL,
  `optie7` varchar(40) COLLATE latin1_german1_ci DEFAULT NULL,
  `optie8` varchar(40) COLLATE latin1_german1_ci DEFAULT NULL,
  `optie9` varchar(40) COLLATE latin1_german1_ci DEFAULT NULL,
  `optie10` varchar(40) COLLATE latin1_german1_ci DEFAULT NULL,
  `topic` int(5) NOT NULL DEFAULT '0',
  `answers1` int(50) NOT NULL DEFAULT '0',
  `answers2` int(50) NOT NULL DEFAULT '0',
  `answers3` int(50) NOT NULL DEFAULT '0',
  `answers4` int(50) NOT NULL DEFAULT '0',
  `answers5` int(50) NOT NULL DEFAULT '0',
  `answers6` int(50) NOT NULL DEFAULT '0',
  `answers7` int(50) NOT NULL DEFAULT '0',
  `answers8` int(50) NOT NULL DEFAULT '0',
  `answers9` int(50) NOT NULL DEFAULT '0',
  `answers10` int(50) NOT NULL DEFAULT '0',
  `geantwoord` text CHARACTER SET latin1
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Gegevens worden uitgevoerd voor tabel `forumpolls`
--


-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `forumreplies`
--

CREATE TABLE IF NOT EXISTS `forumreplies` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `content` text CHARACTER SET latin1,
  `auteur` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `smiles` int(5) NOT NULL DEFAULT '1',
  `ubb` int(5) NOT NULL DEFAULT '1',
  `link` int(5) NOT NULL DEFAULT '1',
  `subforum` int(5) NOT NULL DEFAULT '0',
  `topic` int(5) NOT NULL DEFAULT '0',
  `date` varchar(20) COLLATE latin1_german1_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci AUTO_INCREMENT=1 ;

--
-- Gegevens worden uitgevoerd voor tabel `forumreplies`
--


-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `forumtopics`
--

CREATE TABLE IF NOT EXISTS `forumtopics` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `content` text CHARACTER SET latin1,
  `auteur` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `smiles` int(5) NOT NULL DEFAULT '1',
  `ubb` int(5) NOT NULL DEFAULT '1',
  `link` int(5) NOT NULL DEFAULT '1',
  `subforum` int(5) NOT NULL DEFAULT '0',
  `read` int(5) NOT NULL DEFAULT '0',
  `lastreply` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `lastreplydate` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `date` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `reacties` int(5) NOT NULL DEFAULT '0',
  `categorie` varchar(60) CHARACTER SET latin1 NOT NULL DEFAULT 'topic',
  `locked` int(5) NOT NULL DEFAULT '0',
  `moved` int(5) NOT NULL DEFAULT '0',
  `lastreplydate2` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci AUTO_INCREMENT=4 ;

--
-- Gegevens worden uitgevoerd voor tabel `forumtopics`
--

INSERT INTO `forumtopics` (`id`, `title`, `content`, `auteur`, `smiles`, `ubb`, `link`, `subforum`, `read`, `lastreply`, `lastreplydate`, `date`, `reacties`, `categorie`, `locked`, `moved`, `lastreplydate2`) VALUES
(2, 'Welkom op opra-crime', 'Sinds vandaag is opra-crime op deze server geinstralleerd!\r\nVeel plezier op opra-crime!\r\n\r\nOpra crime kan je vinden op [url]http://code.google.com/p/opra-crime[/url]', 'admin', 1, 1, 1, 8, 1, 'admin', '02-04-2011', '02-04-2011 10:07', 0, 'topic', 0, 0, '2011-04-02 10:07:57');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gastenboek`
--

CREATE TABLE IF NOT EXISTS `gastenboek` (
  `to` varchar(16) CHARACTER SET latin1 DEFAULT NULL,
  `from` varchar(16) CHARACTER SET latin1 DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `content` text CHARACTER SET latin1 NOT NULL,
  `id` int(25) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci AUTO_INCREMENT=2 ;

--
-- Gegevens worden uitgevoerd voor tabel `gastenboek`
--


-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `hitlist`
--

CREATE TABLE IF NOT EXISTS `hitlist` (
  `from` text COLLATE latin1_german1_ci NOT NULL,
  `to` varchar(16) CHARACTER SET latin1 NOT NULL,
  `waarde` bigint(255) NOT NULL DEFAULT '0',
  `health` int(5) NOT NULL DEFAULT '100'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Gegevens worden uitgevoerd voor tabel `hitlist`
--


-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `instellingen`
--

CREATE TABLE IF NOT EXISTS `instellingen` (
  `sitetitle` char(25) CHARACTER SET latin1 NOT NULL DEFAULT 'Banditi',
  `online` int(5) NOT NULL DEFAULT '0',
  `drugskoerstijd` int(10) NOT NULL DEFAULT '3600'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Gegevens worden uitgevoerd voor tabel `instellingen`
--

INSERT INTO `instellingen` (`sitetitle`, `online`, `drugskoerstijd`) VALUES
('Opra-crime - Niet verande', 0, 3600);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ipbans`
--

CREATE TABLE IF NOT EXISTS `ipbans` (
  `ip` varchar(255) CHARACTER SET latin1 NOT NULL DEFAULT '000.00.00.000'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Gegevens worden uitgevoerd voor tabel `ipbans`
--

INSERT INTO `ipbans` (`ip`) VALUES
('213.125.36.130 ');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `loterij`
--

CREATE TABLE IF NOT EXISTS `loterij` (
  `winnaar1` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `winnaar2` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `winnaar3` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `lotenverkoop` int(255) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Gegevens worden uitgevoerd voor tabel `loterij`
--


-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `mac`
--

CREATE TABLE IF NOT EXISTS `mac` (
  `id` int(4) NOT NULL,
  `naam` varchar(150) NOT NULL,
  `energie` int(2) NOT NULL,
  `voorraad` int(5) NOT NULL DEFAULT '5000',
  `prijs` int(11) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `mac`
--

INSERT INTO `mac` (`id`, `naam`, `energie`, `voorraad`, `prijs`) VALUES
(1, 'Spakenburgshart', 15, 5000, 12500),
(2, 'Sausijcenbroodje', 30, 5000, 23000),
(3, 'Speculaaskoek', 12, 5000, 11000),
(4, 'Rosekoek', 13, 5000, 11500),
(5, 'Frikandelbroodje', 51, 5000, 36750),
(6, 'Kroketbroodje', 50, 5000, 36000),
(7, 'Hamburgerbroodje', 52, 5000, 37000),
(8, 'Appelkoek', 14, 5000, 11900);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `to` varchar(16) CHARACTER SET latin1 DEFAULT NULL,
  `from` varchar(16) CHARACTER SET latin1 DEFAULT NULL,
  `ip` varchar(64) CHARACTER SET latin1 DEFAULT NULL,
  `date` datetime NOT NULL,
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET latin1,
  `content` text CHARACTER SET latin1,
  `read` int(5) NOT NULL DEFAULT '0',
  `inbox` int(5) NOT NULL DEFAULT '1',
  `date2` varchar(32) CHARACTER SET latin1 DEFAULT NULL,
  `reply` int(5) NOT NULL DEFAULT '0',
  `to2` varchar(16) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci AUTO_INCREMENT=22 ;

--
-- Gegevens worden uitgevoerd voor tabel `messages`
--

INSERT INTO `messages` (`to`, `from`, `ip`, `date`, `id`, `title`, `content`, `read`, `inbox`, `date2`, `reply`, `to2`) VALUES
('Perry', 'Notificatie', '94.214.40.119', '2011-04-02 22:36:41', 5, 'demo123', 'demoafdad', 1, 2, '04/02 22:36', 0, NULL),
('admin', 'Notificatie', '94.214.40.119', '2011-04-02 22:36:41', 4, 'demo123', 'demoafdad', 1, 2, '04/02 22:36', 0, NULL),
('admin', 'gangsterclub', '', '2011-04-03 18:23:35', 6, 'linkvandesite', 'Wat is de download link ookal weer', 1, 1, '04/03 18:23', 0, NULL),
(NULL, 'gangsterclub', '', '2011-04-03 18:23:35', 7, 'linkvandesite', 'Wat is de download link ookal weer', 0, 3, '04/03 18:23', 0, 'admin'),
('gangsterclub', 'admin', '', '2011-04-03 18:27:42', 8, 'Re: linkvandesite', '[quote]Wat is de download link ookal weer[/quote]\r\nDie is http://code.google.com/p/opra-crime', 0, 1, '04/03 18:27', 1, NULL),
(NULL, 'admin', '', '2011-04-03 18:27:42', 9, 'Re: linkvandesite', '[quote]Wat is de download link ookal weer[/quote]\r\nDie is http://code.google.com/p/opra-crime', 1, 3, '04/03 18:27', 1, 'gangsterclub'),
('admin', 'jorisaap', '', '2011-04-05 14:47:36', 13, 'geld', 'mogooltje geef me geld', 1, 1, '04/05 14:47', 0, NULL),
(NULL, 'admin', '', '2011-04-05 14:46:41', 12, 'noob', 'noob', 1, 3, '04/05 14:46', 0, 'jorisaap'),
('Perry', 'jorisaap', '213.125.36.130', '2011-04-05 14:52:45', 16, 'Je bent aangevallen', 'Hallo gangster!\r\n\r\nJe bent aangevallen door jorisaap. Hij heeft gewonnen en heeft â‚¬ 25320 van je weten te stelen.\r\n\r\nGroeten,\r\nEen anonieme getuige', 1, 1, '04/05 14:52', 0, NULL),
('Perry', 'jorisaap', '213.125.36.130', '2011-04-05 14:53:37', 17, 'Je bent aangevallen', 'Hallo gangster!\r\n\r\nJe bent aangevallen door jorisaap. Hij heeft gewonnen en heeft â‚¬ 16036 van je weten te stelen.\r\n\r\nGroeten,\r\nEen anonieme getuige', 1, 1, '04/05 14:53', 0, NULL),
('Perry', 'jorisaap', '213.125.36.130', '2011-04-05 14:56:24', 18, 'Je bent aangevallen', 'Hallo gangster!\r\n\r\nJe bent aangevallen door jorisaap. Hij heeft gewonnen en heeft â‚¬ 13470 van je weten te stelen.\r\n\r\nGroeten,\r\nEen anonieme getuige', 1, 1, '04/05 14:56', 0, NULL),
('admin', 'Anoniem', '94.214.40.119', '2011-04-05 17:03:56', 19, 'Waarschuwing!', 'De inhoud\r\n\r\n\r\nPS: Word er misbruik gemaakt van het waarschuwsysteem, meld het dan bij Snake of Judge', 1, 1, '04/05 17:03', 0, NULL),
('admin', 'Anoniem', '94.214.40.119', '2011-04-05 17:28:04', 20, 'Vrijgekocht!', 'admin heeft je vrijgekocht voor â‚¬52.740,- Je bent nu weer op vrije voeten!', 1, 1, '04/05 17:28', 0, NULL),
('admin', 'Anoniem', '94.214.40.119', '2011-04-05 17:41:42', 21, 'Vrijgekocht!', 'admin heeft je vrijgekocht voor â‚¬52.020,- Je bent nu weer op vrije voeten!', 1, 1, '04/05 17:41', 0, NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `missions`
--

CREATE TABLE IF NOT EXISTS `missions` (
  `title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `geld` int(5) NOT NULL DEFAULT '0',
  `power` int(5) NOT NULL DEFAULT '0',
  `content` text CHARACTER SET latin1,
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `moeilijkheid` int(5) NOT NULL DEFAULT '3',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci AUTO_INCREMENT=42 ;

--
-- Gegevens worden uitgevoerd voor tabel `missions`
--

INSERT INTO `missions` (`title`, `geld`, `power`, `content`, `id`, `moeilijkheid`) VALUES
('Verdien geld door te werken', 250, 100, '						<i>Werken als bouwvakker of is hacken meer jou ding?<br>\r\n<br>\r\nOm bij te verdienen kun je af en toe gaan werken. Hoe meer werkervaring, hoe meer kans dat je je werk goed uitoefent.<br>\r\n<br>\r\n1. Ga naar weken bij criminaliteit<br>\r\n2. Kies het werk dat je wil doen<br>\r\n3. Vul in het vakje de vier letterige code in<br>\r\n4. Klik op werken</i>', 1, 1),
('Voer een kleine misdaad met succes uit', 375, 150, '						<i>Probeer eens een fiets te stelen of ga zakkenrollen in de stad.<br>\r\n<br>\r\nDoor het plegen van misdaden kun je flink geld verdienen. Maar denk er aan, de politie is er niet voor niets! Het aantal procenten geeft aan wat de kans is of een actie wel of niet lukt. Hoe vaker je een misdaad pleegt, hoe hoger de kans zal zijn.<br>\r\n<br>\r\n1. Ga naar misdaden bij criminaliteit<br>\r\n2. Kies welke misdaad je wil plegen<br>\r\n3. Vul in het vakje de vier letterige code in<br>\r\n4. Klik op misdaad plegen</i>', 2, 1),
('Koop een bankpas', 500, 200, '<i>Met de bankpas ben je in staat om geld op je rekening te zetten. Hierdoor kunenn andere banditi het geld niet zomaar afpakken, bovendien krijg je elke dag 5% rente over het geld!<br>\r\n<br>\r\n1. Ga voor een bankpas naar de shop.<br>\r\n2. Vul bij de bankpas het aantal 1 in en klik op kopen.</i>', 3, 1),
('Stort geld op je bankrekening', 625, 250, '<i>Probeer je pas gekochte bankpas eens uit en zet je geld op de bank.<br>\r\n<br>\r\nJe hebt de mogelijkheid contant geld op de bank te zetten. Je kan het op dat moment niet uitgeven, tenzij je het weer van je bank haalt. Je ontvangt ook rente over het geld dat op je bank staat! De standaard rente is 3%, met een betaald account is het 5% en als je in de Call Credits shop de extra rente mogelijkheid koopt ontvang je maarliefst 10% rente!<br>\r\n<br>\r\n1. Ga naar de bank bij locaties<br>\r\n2. Vul het bedrag in wat je op de bank wil zetten<br>\r\n3. Klik op storten of halen.</i>', 4, 1),
('Steel een auto', 750, 300, '<i>Heb je altijd al eens een auto willen stelen, hier heb je je kans.<br>\r\n<br>\r\nJe hebt de mogelijkheid om auto''s te stelen. Hoe hoger je rang, hoe meer slagingskans dat je de auto kan binnenhalen.<br>\r\n<br>\r\n1. Ga naar auto''s stelen bij criminaliteit<br>\r\n2. Kies welke auto je wil stelen<br>\r\n3. Vul in het vakje de vier letterige code in.<br>\r\n4. Klik op steel de auto</i>', 5, 1),
('Win een race met een gestolen auto', 875, 350, '<i>Wees sneller dan de politie en win de race.<br>\r\n<br>\r\nJe hebt de mogelijkheid om te racen met gestolen auto''s. De auto mag niet meer dan 60% schade hebben, omdat hij dan niet meer vooruit komt. Als je een race wint ontvang je daarvoor geld, afhankelijk van hoe goed je tegenstander was. Het kan echter ook zijn dat de politie je auto inneemt of dat je auto schade oploopt!<br>\r\n<br>\r\n1. Ga naar racen bij criminaliteit<br>\r\n2. Klik op racen (in het groen)</i>', 6, 1),
('Draai een keer aan het geluksrad', 1000, 400, '<i>Kom je geluk proeven bij het geluksrad, wie weet heb je meer geluk dan een ander.<br>\r\n<br>\r\nJe kan om de 3 uur gratis aan het rad draaien. Draai aan het rad en kijk welke prijs je naar binnen sleept!<br>\r\n<br>\r\n1. Ga naar geluksrad bij casino<br>\r\n2. Klik hier op aan het rad te draaien</i>', 7, 1),
('Zoek een andere speler op', 1125, 400, '<i>Ben je iemand zijn/haar profiel kwijt maar weet je de naam nog zoek hem/haar even op.<br>\r\n<br>\r\nJe hebt de mogelijkheid om te zoeken naar andere gangsters.<br>\r\n<br>\r\n1. Ga naar zoeken bij overige<br>\r\n2. Vul de naam in<br>\r\n3. Klik op zoeken</i>', 8, 1),
('Bezoek een profiel van een andere speler', 1250, 500, '<i>Bekijk eens wie je vriend of vijand is.<br>\r\n<br>\r\nJe kan andere speler hun profiel bekijken. Je kan er alles op zien van power tot bezittingen, je kan hem/haar aan vallen of geef een respect punt.<br>\r\n<br>\r\n1. Ga naar de ledenlijst bij overige.<br>\r\n2. Klik op 1 van de vele namen.</i>', 9, 1),
('Geef iemand respect', 1500, 600, '<i>Toon dat je respect hebt voor andere en deel respectpunten uit.<br>\r\n<br>\r\nJe hebt de mogelijkheid om mensen respectpunten te geven. Je ontvangt af en toe respectpunten die je aan andere leden kan geven. Bij het profiel van een lid is dan te zien hoeveel respect hij of zij heeft ontvangen.<br>\r\n<br>\r\n1. Ga naar iemand zijn profiel<br>\r\n2. Klik bovenaan op respect</i>', 10, 1),
('Klik op iemand zijn secret link', 1750, 700, '<i>Geef killers aan andere leden.<br>\r\n<br>\r\nAls je op iemand zijn Secret Link klikt krijgt die persoon een killer, die heb je nodig voor je drugcapatiteit te verhogen. Je kan elke dag opnieuw op zijn/haar Secret Link klikken.<br>\r\n<br>\r\n1. Ga naar iemand zijn profiel<br>\r\n2. Klik bovenaan op Secret Link</i>', 11, 1),
('Reis naar een andere stad', 2000, 800, '<i>Reis eens naar de stad waar je al zo lang naar toe wou.<br>\r\n<br>\r\nVoordelen van het reizen naar verschillende steden zijn onder meer dat de persoon die je probeert aan te vallen in dezelfde stad moet zijn en dat de drugs koersen per stad verschillen.<br>\r\n<br>\r\nEr zijn verschillende mogelijkheden om te reizen:<br>\r\n<br>\r\nTrein, deze vertrekt elk uur vanaf het station en kost &euro;15000,-<br>\r\nBoot, deze vertrekt elk half uur vanaf de haven en kost &euro;7500,-<br>\r\nVliegtuig, deze vertrekt elke 5 minuten vanaf het vliegveld en kost &euro;15000,-\r\n\r\n<br>\r\n1. Ga naar station, <s>haven</s> of vliegveld bij locaties<br>\r\n2. Kies naar welke stad je wil<br>\r\n3. Klik op kaartje kopen</i>', 12, 1),
('Zet iets op je persoonlijk profiel', 2500, 1000, '<i>Laat weten wie je bent op je persoonlijk profiel.<br>\r\n<br>\r\nMaak je profiel iets persoonlijker door het naar eigen keuze in te vullen.<br>\r\n<br>\r\n1. Ga naar profiel beheren bij profiel<br>\r\n2. Persoonlijke tekst</i>', 13, 1),
('Lees de regels van het spel', 3000, 1200, '<i>Weet je niet wat en niet mag?<br>\r\n<br>\r\nLees even de regels van Banditi. Wordt er niet aan de regels gehouden kunnen er straffen worden uitgedeeld.<br>\r\n<br>\r\n1. Ga naar regels bij overige.</i>', 14, 1),
('Bezoek het forum', 3750, 1500, '<i>Maak deel uit van je community.<br><br>In plaats van in je eentje te spelen, maak je deel uit van een grotere community. Kom hiervoor naar het forum, wissel ideeÃ«n uit met andere spelers, geef je mening over onderdelen of praat gewoon wat met vrienden.<br><br>1. Klik op de forum link rechtsboven</i>', 15, 1),
('Bezoek de callcredit shop', 5000, 2000, '<i>Ga eens kijken wat je allemaal met je Call Credits kan kopen.<br>\r\n<br>\r\nOm spullen uit de Call Credit shop te kopen heb je Call Credits nodig. Die kan je verkrijgen door te bellen.<br>\r\n<br>\r\n1. Ga naar de Shop bij Call Credits</i>', 16, 1),
('Stuur iemand een Priv? bericht', 6250, 2500, '<i>Ook in de maffia wereld wordt er post verzonden<br><br>Stuur iemand een Priv? bericht als je iemand persoonlijk wil aanspreken.<br><br>1. Ga naar iemand zijn profiel<br>2. Klik bovenaan op PB sturen<br>3. Type je bericht<br>4. Klik op versturen</i>', 17, 2),
('Voer een grote misdaad met succes uit', 6500, 2600, '<i>Vracht wagen kapen of overval een juwelier, hier kan het.<br>\r\n<br>\r\nDoor het plegen van misdaden kun je flink geld verdienen. Maar denk er aan, de politie is er niet voor niets! Het aantal procenten geeft aan wat de kans is of een actie wel of niet lukt. Hoe vaker je een misdaad pleegt, hoe hoger de kans zal zijn.<br>\r\n<br>\r\n1. Ga naar misdaden bij criminaliteit<br>\r\n2. Kies welke misdaad je wil plegen<br>\r\n3. Vul in het vakje de vier letterige code in<br>\r\n4. Klik op misdaad plegen</i>', 18, 2),
('Speel een potje Hoger of Lager', 7000, 2800, '<i>Zin in een simpel spelletje hoger en lager?<br>\r\n<br>\r\nBij hoger of lager krijg je een getal waarvan jij moet zeggen of het volgende getal hoger of lager wordt. Alle getallen liggen tussen 1 en 100. Zodra je het goede antwoord kiest, ga je een ronde verder. Hoe verder je komt, hoe groter de prijs zal zijn!<br>\r\n<br>\r\n1. Ga naar hoger lager bij casino.<br>\r\n2. Klik op hoger of lager tot je het verkeerde hebt gekozen.</i>', 19, 2),
('Win met Steen, papier, schaar', 7500, 3000, '<i>Speel tegen de computer en verdubbel je inzet.<br>\r\n<br>\r\nProbeer de computer te verslaan door het de juiste keuze te maken. Schaar knipt het blad stuk, het blad verbrijzelt de steen, de steen slaat de schaar stuk.<br>\r\n<br>\r\n1. Ga naar steen, paper, schaar bij casino<br>\r\n2. Maak een keuze uit schaar, papier of blad<br>\r\n3. Vul je inzet in<br>\r\n4. Klik op speel!</i>', 20, 2),
('Win met Roulette', 8000, 3200, '<i>Waag je kans bij de roulette en ga met winst naar huis.<br>\r\n<br>\r\nAls jouw gekozen getal word gedraaid ontvang je je inzet maar liefst 10 keer verdubbeld terug. Als de kleur die jij hebt gekozen wordt gedraaid ontvang je je inzet dubbel terug. Heb je geen van beide, dan verlies je je inzet. Je kan min. 1.000,- en max. 10.000,-<br>\r\n<br>\r\n1. Ga naar roulette bij casino<br>\r\n2. Vul je inzet in.<br>\r\n3. Kies een getal en kleur<br>\r\n4. Klik op draaien</i>', 21, 2),
('Win met Blackjack', 8500, 3400, '<i>Laat je verdiende geld eens rollen bij Blackjack en haal er winst of verlies uit.<br>\r\n<br>\r\nHet doel van blackjack is om de bank te verslaan. Hierbij moet men een poging zo dicht mogelijk bij de 21 komen, afwegen tegen het risico boven de 21 te geraken, want als dat gebeurt heeft men verloren, ongeacht wat de bank heeft. Als je meer punten hebt dan de bank (en niet kapot bent) win je het spel.<br>\r\n<br>\r\n1. Ga naar Blackjack bij casino<br>\r\n2. Plaats je inzet<br>\r\n3. Klik op begin<br>\r\n4. Wil je nog een kaart klik je op hit anders op stop\r\n</i>', 22, 2),
('Koop een lot voor de loterij', 9000, 3600, '<i>Maak kans op de hoofdprijs van de loterij.<br><br>Elke vrijdag avond om precies 18:00u vind de trekking plaatst. De prijswinnaars zullen hun gewonnen bedrag automatisch op hun bankrekening ontvangen (je hoeft hiervoor ook niet online te zijn). Ã‰Ã©n lot kost &euro;1.000,- en je mag er maximaal 1000 kopen.<br><br>1. Ga naar loterij bij casino<br>2. Vul het aantal loten in die je wil kopen<br>3. Klik op kopen</i>', 23, 2),
('Probeer een keer het getal te raden', 9500, 3800, '<i>Doe een gok en verdubbel je inzet.<br>\r\n<br>\r\nJe hebt hier de mogelijkheid je inzet maar liefst negen keer te verdubbelen. Bij een verlies ben je echter je inzet kwijt... De inzet moet tussen de &euro; 100 en &euro; 10000 zitten, er mag maximaal 20 keer per uur gespeeld worden, de win-kans is een op negen.<br>\r\n<br>\r\n1. Ga naar raad het getal bij casino<br>\r\n2. Kies je getal<br>\r\n3. Vul je inzet in<br>\r\n4. Klik op spelen!</i>', 24, 2),
('Val iemand aan', 10000, 4000, '<i>Het draait allemaal om aanvallen.<br>\r\n<br>\r\nUiteindelijk zal je mensen moeten aanvallen om beter te worden. Als je iemand aanvalt die zwakker is dan jij verliest hij gezondheid en steel jij een deel van zijn geld. Maar pas op, als je iemand aanvalt die sterker is dan jij, verlies jij gezondheid en raak je een deel van jouw eigen geld kwijt.<br>\r\n<br>\r\n1. Zoek een persoon uit<br>\r\n2. Zoek zijn profiel op<br>\r\n3. Klik op de aanvallen link</i>', 25, 2),
('Genees jezelf in het ziekenhuis', 11250, 4500, '<i>Ga eens langs bij de verpleegster, je ziet er een beetje zwak uit.<br>\r\n<br>\r\nIn het ziekenhuis kun je je gezondheid weer boven peil krijgen. De kosten zijn &euro;500,- per procent. Je kan er alleen terecht als je geen 100% leven meer hebt.<br>\r\n<br>\r\n1. Ga naar ziekenhuis bij locaties<br>\r\n2. Vul de vier letterige code in<br>\r\n3. Klik op Ga naar ziekenhuis</i>', 26, 2),
('Word lid van een familie', 12500, 5000, '<i>Wordt lid van een familie en profiteer mee van de voordelen.<br><br>Lid zijn van een familie heeft voor delen zoals bescherming van door sterkere leden, familie power die soms wordt uitgedeeld â€¦ maar er zijn ook nadelen aan verbonden zoals doneren.<br><br>1. Ga naar aanmelden bij familie<br>2. Vul de naam van de familie in<br>3. Klik op aanmelden</i>', 27, 2),
('<s>Verkoop een krat drank</s>', 13750, 5500, '<s><i>Begin geld te verdienen door te dealen in drank.<br>\r\n<br>\r\nEen makkelijke manier om te beginnen met geld te verdienen is met behulp van drank. Het principe is heel simpel. Elke stad heeft zijn eigen koers voor de drank, om de meeste winst te maken koop je de drank in de stad met de laagste koers en reis je vervolgens naar de stad met de hoogste koers om hem daar weer te verkopen.<br>\r\n<br>\r\n1. Ga naar de drank handel<br>\r\n2. Koop 1 of meerdere kratten van een drank in<br>\r\n3. Verkoop deze vervolgens weer</i></s>', 28, 2),
('Koop een drug upgrade', 15000, 6000, '<i>Steek je verdiende geld in drugs upgades en laat elke dag je drugs aan huis brengen.<br>\r\n<br>\r\nMet drugs upgrades produceer je elke nacht het aantal zakjes drugs wat je geupgrade hebt.<br>\r\nDeze drugs kan je dan weer verkopen om geld te verdienen. Je moet het geld cash hebben staan voor je drugs te kunnen kopen.<br>\r\n<br>\r\n1. Ga naar drug upgades bij criminaliteit<br>\r\n2. Vul bij de soort drugs hoeveel zakjes je wil upgraden<br>\r\n3. Klik op kopen</i>', 29, 2),
('Verdien geld door je drugs te verkopen', 16250, 6500, '<i>Zie hoeveel je drugs upgades waard zijn elke dag opnieuw.<br>\r\n<br>\r\nJe kunt je drugs verkopen, hoeveel geld je per zakje ontvangt hangt af van wat de zogenaamde drugskoers is in de stad. Deze kun je vinden op onder het tabblad "Drugs koersen"<br>\r\n<br>\r\n1. Ga naar drugs verkopen bij criminaliteit<br>\r\n2. Vul het aantal is dat je wilt verkopen<br>\r\n3. Klik op verkoop drugs!</i>', 30, 2),
('Betaal borg om jezelf of iemand anders uit de gevagenis te halen', 17500, 7000, '<i>Haal anderen of je zelf uit de gevangenis.<br>\r\n<br>\r\nJe hebt de gelegenheid om anderen of jezelf uit de gevangenis te kopen, het bedrag dat je daarvoor moet betalen staan achter hun naam.<br>\r\n<br>\r\n1. Ga naar gevangenis bij locaties<br>\r\n2. Kies wie je wil vrij kopen<br>\r\n3. Klik op Koop vrij</i>', 31, 2),
('Leid een georganiseerde misdaad', 20000, 8000, '<i>Op zoek naar een uitdagende misdaad maar niet sterk genoeg?<br>\r\n<br>\r\nDan kan je bij georganiseerde misdaad terecht. Hier kan jij je eigen team samenstellen om vervolgens samen met hun een misdaad uit te voeren. Kies je eigen chauffeur die zelf zijn auto mag kiezen en kies iemand die voor de wapens zal zorgen.<br>\r\n<br>\r\n1. Ga naar georganiseerde misdaad<br>\r\n2. Start een nieuwe misdaad<br>\r\n3. Kies een chauffeur en een wapenexpert<br>\r\n4. Vul een geldbedrag in<br>\r\n5. Plaats de oproep<br>\r\n<br>\r\nWanneer je partners hebben geaccepteerd of afgewezen hebben zal je hier een bericht van vinden. Als iedereen heeft geaccepteerd kan je de misdaad starten.</i>', 32, 2),
('Doe een bod op een veiling', 22500, 9000, '<i>Doe een bod en wie weet ben jij de volgende eigenaar van een station of vliegveld.<br>\r\n<br>\r\nOp de veiling kun je stations en vliegvelden kopen. Wanneer je een een van deze in je bezit hebt moet je elk uur de kaartjes prijs betalen. Als tegenprestatie ontvang je de inkomsten als mensen van je station gebruik maken. Het geld dat je bied gaat van je bank af, wordt je overboden dan krijg je het geld weer op je bank gestort.<br>\r\n<br>\r\n1. Ga naar veiling bij locaties<br>\r\n2. Kies je station of vliegveld<br>\r\n3. Klik op bied<br>\r\n4. Vul je bod in, hoger dan het laatste bod<br>\r\n5. Klik op bied</i>', 33, 2),
('Koop een kluis', 25000, 10000, '<i>Berg je geld veilig op in een kluis.<br>\r\n<br>\r\nDe kluis heeft als voordeel dat je geld hier altijd veilig staat, ook al wordt je aangevallen en vermoord. Tevens kan niemand zien hoeveel geld je in je kluis hebt liggen. Een kluis kan maximaal &euro; 50.000.000,- bevatten. Je kan er zoveel aankopen als je wil. Je krijgt echter geen rente over het geld dat in je kluis ligt.<br>\r\n<br>\r\n1. Ga naar de bankshop in Corleone<br>\r\n2. Vul bij de kluis het aantal in<br>\r\n3. Klik op kopen</i>', 34, 2),
('Open een Zwitserse rekening', 37500, 15000, '<i>Sluis geld door naar je Zwitserse rekening je persoonlijk spaarboekje.<br>\r\n<br>\r\nVia de je Zwitserse bankrekening kun je geld wegsluizen. Niemand kan namelijk het geld zien dat op deze rekening staat! Je kunt elke dag maximaal &euro; 5 miljoen storten en &euro; 50 miljoen opnemen. Op je Zwitserse rekening krijg je elke dag 2% rente over maximaal &euro; 500 miljoen. De Bankshop vind je in Corleone<br>\r\n<br>\r\n1. Ga naar de shop in Corlene<br>\r\n2. Vul 1 in en bij aantal<br>\r\n3. Klik op kopen</i>', 35, 2),
('Blaas 10 keer het FBI hoofdkantoor op', 1000000, 10000, '<i>Zit de FBI je op de hielen? Leer ze een lesje en blaas 10 FBI kantoren op!<br>\r\n<br>\r\nDoor het plegen van misdaden kun je flink geld verdienen. Maar denk er aan, de politie is er niet voor niets! Het aantal procenten geeft aan wat de kans is of een actie wel of niet lukt. Hoe vaker je een misdaad pleegt, hoe hoger de kans zal zijn.<br>\r\n<br>\r\n1. Ga naar misdaden bij criminaliteit<br>\r\n2. Tabblad hele gote misdaden<br>\r\n3. Kies de het hoofdkantoor van de FBI opblazen<br>\r\n4. Vul in het vakje de vier letterige code in<br>\r\n5. Klik op Misdaad plegen!</i>', 36, 3),
('Kraak de kluis met success', 10000000, 10000, '<i>Raad de juiste code en zie wat er in de kluis ligt voor jou.<br><br>Bij Kraak de kluis heb je vijf verschillende codes. Er is telkens ??n van de vijf codes die je toegang geeft tot de inhoud van de kluis. Je kan de kluis proberen te kraken door ??n code te kiezen en 20 Call Credits in te zetten.<br><br>1. Ga naar kraak de kluis bij casino<br>2. Klik op een code om deze automatisch in te vullen<br>3. Klik op Kraak de code!</i>', 37, 3),
('Krijg meteen blackjack bij een inzet van &euro;1.000.000,-', 5000000, 10000, '<i>Waag een kans aan de Blackjack tafel en krijg in 1x Blackjack met inzet van 1.000.000,-<br>\r\n<br>\r\nZet 1.000.000,- in en win in 1x tegen de Computer met Blackjack (21 punten)<br>\r\n<br>\r\n1. Ga naar Blackjack bij casino<br>\r\n2. Zet een bedrag van 1.000.000,- in<br>\r\n3. Klik op begin...en dan hopen dat je blackjack krijgt</i>', 38, 3),
('Verkoop minstens 1000 kaartjes via je eigen station', 1000000, 10000, '<i>Laat anderen vertrekken vanuit jouw station en krijg de inkomsten van de kaartjes verkoop.<br>\r\n<br>\r\nAls je een station in je bezit hebt kunnen anderen vanuit jouw station vertrekken, ze kopen een kaartje op met de trein te reizen, als je 1.000 kaartjes hebt verkocht ben je geslaagd in deze missie.</i>', 39, 3),
('<s>Verkoop minstens 5000 kaartjes via je haven</s>', 5000000, 10000, '<s><i>Laat anderen vertrekken van op jouw haven en krijg de inkomsten van de kaartjes verkoop.<br>\r\n<br>\r\nAls je een haven in je bezit hebt kunnen anderen van op jouw haven vertrekken, ze kopen een kaartje op met de boot te reizen, als je 5.000 kaartjes hebt verkocht ben je geslaagd in deze missie.</i></s>', 40, 3),
('Verkoop minstens 10.000 kaartjes via je vliegveld', 10000000, 10000, '<i>Laat anderen vertrekken van op jouw vliegveld en krijg de inkomsten van de kaartjes verkoop.<br>\r\n<br>\r\nAls je een vliegveld in je bezit hebt kunnen anderen van op jouw vliegveld vertrekken, ze kopen een kaartje op met de trein te reizen, als je 10.000 kaartjes hebt verkocht ben je geslaagd in deze missie.</i>', 41, 3);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `author` varchar(16) COLLATE latin1_german1_ci DEFAULT NULL,
  `place` int(5) NOT NULL DEFAULT '0',
  `title` varchar(32) COLLATE latin1_german1_ci DEFAULT NULL,
  `date` varchar(32) COLLATE latin1_german1_ci DEFAULT NULL,
  `id` int(100) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Gegevens worden uitgevoerd voor tabel `news`
--


-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `registered_ip`
--

CREATE TABLE IF NOT EXISTS `registered_ip` (
  `ip` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `max` int(255) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Gegevens worden uitgevoerd voor tabel `registered_ip`
--

INSERT INTO `registered_ip` (`ip`, `max`) VALUES
('94.214.40.119', 495),
('84.82.46.95', 0),
('85.191.73.148', 0),
('213.125.36.130', 20),
('62.251.29.75', 0),
('81.241.133.182', 0),
('77.251.105.39', 0),
('82.170.6.179', 0),
('95.154.230.253', 0),
('127.0.0.1', 999);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `respectlog`
--

CREATE TABLE IF NOT EXISTS `respectlog` (
  `van` varchar(255) NOT NULL DEFAULT '',
  `naar` varchar(255) NOT NULL DEFAULT '',
  `ip` varchar(255) NOT NULL DEFAULT '',
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `respectlog`
--


-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `scooters`
--

CREATE TABLE IF NOT EXISTS `scooters` (
  `owner` varchar(16) COLLATE latin1_german1_ci DEFAULT NULL,
  `schade` int(3) NOT NULL DEFAULT '0',
  `waarde` int(255) NOT NULL DEFAULT '0',
  `soort` int(5) NOT NULL DEFAULT '0',
  `id` int(255) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci AUTO_INCREMENT=3 ;

--
-- Gegevens worden uitgevoerd voor tabel `scooters`
--

INSERT INTO `scooters` (`owner`, `schade`, `waarde`, `soort`, `id`) VALUES
('admin', 29, 100, 1, 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `shoplogs`
--

CREATE TABLE IF NOT EXISTS `shoplogs` (
  `shopid` int(255) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `wat` varchar(255) NOT NULL,
  `hoeveel` varchar(255) NOT NULL DEFAULT '1',
  `power` varchar(255) NOT NULL,
  `geld` varchar(255) NOT NULL,
  `bijaf` varchar(255) NOT NULL DEFAULT 'Erbij',
  PRIMARY KEY (`shopid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Gegevens worden uitgevoerd voor tabel `shoplogs`
--

INSERT INTO `shoplogs` (`shopid`, `login`, `ip`, `date`, `wat`, `hoeveel`, `power`, `geld`, `bijaf`) VALUES
(1, 'admin', '213.125.36.130', '2011-04-05', 'Callcredits', '1', '0', '15', 'Eraf'),
(2, 'admin', '94.214.40.119', '2011-04-05', 'Callcredits', '1', '0', '8', 'Eraf'),
(3, 'admin', '94.214.40.119', '2011-04-05', 'Callcredits', '1', '0', '8', 'Eraf'),
(4, 'admin', '94.214.40.119', '2011-04-05', 'Callcredits', '1', '0', '8', 'Eraf'),
(5, 'admin', '94.214.40.119', '2011-04-05', 'Callcredits', '1', '0', '8', 'Eraf'),
(6, 'admin', '94.214.40.119', '2011-04-05', 'Callcredits', '1', '0', '8', 'Eraf'),
(7, 'admin', '94.214.40.119', '2011-04-05', 'Callcredits', '1', '0', '8', 'Eraf'),
(8, 'admin', '94.214.40.119', '2011-04-05', 'Callcredits', '1', '0', '8', 'Eraf'),
(9, 'admin', '94.214.40.119', '2011-04-05', 'Callcredits', '1', '0', '8', 'Eraf'),
(10, 'admin', '94.214.40.119', '2011-04-05', 'Callcredits', '1', '0', '8', 'Eraf'),
(11, 'admin', '94.214.40.119', '2011-04-05', 'Callcredits', '1', '0', '8', 'Eraf'),
(12, 'admin', '94.214.40.119', '2011-04-05', 'Callcredits', '1', '0', '8', 'Eraf'),
(13, 'admin', '94.214.40.119', '2011-04-05', 'Callcredits', '1', '0', '8', 'Eraf'),
(14, 'admin', '94.214.40.119', '2011-04-05', 'Callcredits', '1', '0', '8', 'Eraf'),
(15, 'admin', '94.214.40.119', '2011-04-05', 'Callcredits', '1', '0', '8', 'Eraf'),
(16, 'admin', '94.214.40.119', '2011-04-05', 'Callcredits', '1', '0', '8', 'Eraf'),
(17, 'admin', '94.214.40.119', '2011-04-05', 'Callcredits', '1', '0', '8', 'Eraf'),
(18, 'admin', '94.214.40.119', '2011-04-05', 'Callcredits', '1', '0', '8', 'Eraf'),
(19, 'admin', '94.214.40.119', '2011-04-05', 'Callcredits', '1', '0', '8', 'Eraf'),
(20, 'admin', '94.214.40.119', '2011-04-05', 'Callcredits', '1', '0', '8', 'Eraf'),
(21, 'admin', '94.214.40.119', '2011-04-05', 'Callcredits', '1', '0', '8', 'Eraf'),
(22, 'admin', '94.214.40.119', '2011-04-05', 'Callcredits', '1', '0', '8', 'Eraf'),
(23, 'admin', '94.214.40.119', '2011-04-05', 'Callcredits', '1', '0', '8', 'Eraf'),
(24, 'admin', '94.214.40.119', '2011-04-05', 'Callcredits', '1', '0', '8', 'Eraf'),
(25, 'admin', '94.214.40.119', '2011-04-05', 'Callcredits', '1', '0', '8', 'Eraf'),
(26, 'admin', '94.214.40.119', '2011-04-05', 'Callcredits', '1', '0', '15', 'Eraf'),
(27, 'admin', '94.214.40.119', '2011-04-05', 'Callcredits', '1', '0', '15', 'Eraf'),
(28, 'admin', '94.214.40.119', '2011-04-05', 'Callcredits', '1', '0', '15', 'Eraf'),
(29, 'admin', '94.214.40.119', '2011-04-05', 'Callcredits', '1', '0', '15', 'Eraf'),
(30, 'admin', '94.214.40.119', '2011-04-05', 'Callcredits', '1', '0', '15', 'Eraf'),
(31, 'admin', '94.214.40.119', '2011-04-05', 'Callcredits', '1', '0', '15', 'Eraf'),
(32, 'admin', '94.214.40.119', '2011-04-05', 'Callcredits', '1', '0', '15', 'Eraf'),
(33, 'admin', '94.214.40.119', '2011-04-05', 'Callcredits', '1', '0', '15', 'Eraf'),
(34, 'admin', '94.214.40.119', '2011-04-05', 'Callcredits', '1', '0', '15', 'Eraf'),
(35, 'admin', '94.214.40.119', '2011-04-05', 'Callcredits', '1', '0', '15', 'Eraf'),
(36, 'admin', '94.214.40.119', '2011-04-05', 'Callcredits', '1', '0', '15', 'Eraf'),
(37, 'admin', '94.214.40.119', '2011-04-05', 'Callcredits', '1', '0', '15', 'Eraf'),
(38, 'admin', '94.214.40.119', '2011-04-08', 'Callcredits', '1', '0', '7', 'Eraf'),
(39, 'admin', '94.214.40.119', '2011-04-08', 'Callcredits', '1', '0', '7', 'Eraf'),
(40, 'admin', '94.214.40.119', '2011-04-08', 'Callcredits', '1', '0', '7', 'Eraf'),
(41, 'admin', '94.214.40.119', '2011-04-08', 'Callcredits', '1', '0', '7', 'Eraf'),
(42, 'admin', '94.214.40.119', '2011-04-08', 'Callcredits', '1', '0', '7', 'Eraf'),
(43, 'admin', '94.214.40.119', '2011-04-08', 'Callcredits', '1', '0', '7', 'Eraf'),
(44, 'admin', '94.214.40.119', '2011-04-08', 'Callcredits', '1', '0', '7', 'Eraf'),
(45, 'admin', '94.214.40.119', '2011-04-08', 'Callcredits', '1', '0', '7', 'Eraf'),
(46, 'admin', '127.0.0.1', '2011-04-16', 'Callcredits', '1', '0', '4', 'Eraf'),
(47, 'admin', '127.0.0.1', '2011-04-16', 'Callcredits', '1', '0', '7', 'Eraf'),
(48, 'admin', '127.0.0.1', '2011-04-16', 'Callcredits', '1', '0', '11', 'Eraf');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `stad`
--

CREATE TABLE IF NOT EXISTS `stad` (
  `stad` int(1) NOT NULL,
  `drank` varchar(25) NOT NULL DEFAULT '5000',
  `drankp` int(15) NOT NULL DEFAULT '150'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `stad`
--

INSERT INTO `stad` (`stad`, `drank`, `drankp`) VALUES
(1, '5000', 252),
(2, '5000', 305),
(3, '5000', 264),
(4, '5000', 287),
(5, '5000', 308),
(6, '5000', 281);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `station`
--

CREATE TABLE IF NOT EXISTS `station` (
  `stad` int(5) NOT NULL,
  `eigenaar` varchar(20) COLLATE latin1_german1_ci NOT NULL,
  `tot` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `showtot` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `laatstebod` bigint(255) NOT NULL DEFAULT '0',
  `laatstebieder` varchar(50) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Gegevens worden uitgevoerd voor tabel `station`
--

INSERT INTO `station` (`stad`, `eigenaar`, `tot`, `showtot`, `laatstebod`, `laatstebieder`) VALUES
(1, '', '2011-05-21 00:00:00', '21-05-2011 / 00:00', 0, ''),
(2, '', '2011-05-21 00:00:00', '21-05-2011 / 00:00', 0, ''),
(3, '', '2011-05-21 00:00:00', '21-05-2011 / 00:00', 0, ''),
(4, '', '2011-05-21 00:00:00', '21-05-2011 / 00:00', 0, ''),
(5, '', '2011-05-21 00:00:00', '21-05-2011 / 00:00', 0, ''),
(6, '', '2011-05-21 00:00:00', '21-05-2011 / 00:00', 0, '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `login` varchar(16) COLLATE latin1_german1_ci DEFAULT NULL,
  `hoermissie` int(255) NOT NULL DEFAULT '0',
  `pimpdiploma` varchar(255) COLLATE latin1_german1_ci NOT NULL DEFAULT '0',
  `email` varchar(64) COLLATE latin1_german1_ci DEFAULT NULL,
  `contant` bigint(255) NOT NULL DEFAULT '100000',
  `bank` bigint(255) NOT NULL DEFAULT '20000',
  `killers` int(5) NOT NULL DEFAULT '0',
  `pass` varchar(32) COLLATE latin1_german1_ci DEFAULT NULL,
  `rank` varchar(100) COLLATE latin1_german1_ci NOT NULL DEFAULT '1',
  `health` int(11) NOT NULL DEFAULT '100',
  `bankleft` int(1) NOT NULL DEFAULT '15',
  `power` bigint(255) DEFAULT '0',
  `callcredits` int(255) NOT NULL DEFAULT '10',
  `vipdays` int(5) NOT NULL DEFAULT '0',
  `city` int(2) NOT NULL DEFAULT '1',
  `familie` varchar(26) COLLATE latin1_german1_ci NOT NULL,
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `info` text COLLATE latin1_german1_ci NOT NULL,
  `maffia` int(5) NOT NULL DEFAULT '0',
  `IP` varchar(32) CHARACTER SET latin1 DEFAULT NULL,
  `activationcode` int(10) NOT NULL DEFAULT '0',
  `signup` datetime DEFAULT NULL,
  `online` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `online2` varchar(5) CHARACTER SET latin1 NOT NULL DEFAULT 'nee',
  `rankvord` varchar(100) CHARACTER SET latin1 NOT NULL DEFAULT '0',
  `passdecoded` varchar(32) CHARACTER SET latin1 DEFAULT NULL,
  `safe` int(5) NOT NULL DEFAULT '12',
  `respect` int(5) NOT NULL DEFAULT '0',
  `geefeer` int(5) NOT NULL DEFAULT '0',
  `kogels` int(255) NOT NULL DEFAULT '0',
  `attwins` int(30) NOT NULL DEFAULT '0',
  `attlost` int(30) NOT NULL DEFAULT '0',
  `bankpas` int(5) NOT NULL DEFAULT '0',
  `kluis` int(5) NOT NULL DEFAULT '0',
  `zwitserse` int(5) NOT NULL DEFAULT '0',
  `deagle` int(5) NOT NULL DEFAULT '0',
  `pepperspray` int(5) NOT NULL DEFAULT '0',
  `knuppel` int(5) NOT NULL DEFAULT '0',
  `sigp` int(5) NOT NULL DEFAULT '0',
  `c4` int(5) NOT NULL DEFAULT '0',
  `m16` int(5) NOT NULL DEFAULT '0',
  `cornershot` int(5) NOT NULL DEFAULT '0',
  `pitbull` int(5) NOT NULL DEFAULT '0',
  `sniper` int(5) NOT NULL DEFAULT '0',
  `swatgun` int(5) NOT NULL DEFAULT '0',
  `bazooka` int(5) NOT NULL DEFAULT '0',
  `bodyguards` int(5) NOT NULL DEFAULT '0',
  `warboot` int(5) NOT NULL DEFAULT '0',
  `atoombom` int(5) NOT NULL DEFAULT '0',
  `tank` int(5) NOT NULL DEFAULT '0',
  `scud` int(5) NOT NULL DEFAULT '0',
  `satteliet` int(5) NOT NULL DEFAULT '0',
  `spacestation` int(5) NOT NULL DEFAULT '0',
  `hoerenhuis` int(5) NOT NULL DEFAULT '0',
  `switchblade` int(5) NOT NULL DEFAULT '0',
  `voornaam` varchar(32) COLLATE latin1_german1_ci DEFAULT NULL,
  `achternaam` varchar(32) COLLATE latin1_german1_ci DEFAULT NULL,
  `geslacht` varchar(32) COLLATE latin1_german1_ci DEFAULT NULL,
  `postcode` varchar(32) COLLATE latin1_german1_ci DEFAULT NULL,
  `catchmails` int(5) NOT NULL DEFAULT '1',
  `kladblok` text CHARACTER SET latin1 NOT NULL,
  `bezitiets` int(5) NOT NULL DEFAULT '0',
  `vermoord` int(5) NOT NULL DEFAULT '0',
  `admin` int(5) NOT NULL DEFAULT '0',
  `vakantie` int(5) NOT NULL DEFAULT '0',
  `bankstandard` int(5) NOT NULL DEFAULT '15',
  `dagenrente` int(5) NOT NULL DEFAULT '0',
  `maxaccounts` int(5) NOT NULL DEFAULT '0',
  `famlevel` int(5) NOT NULL DEFAULT '0',
  `moderator` int(5) NOT NULL DEFAULT '0',
  `forumposts` int(10) NOT NULL DEFAULT '0',
  `hoofdwaarde` bigint(255) NOT NULL DEFAULT '0',
  `moordenaar` varchar(16) COLLATE latin1_german1_ci DEFAULT NULL,
  `moordpremie` bigint(255) NOT NULL DEFAULT '0',
  `moorddatum` varchar(32) CHARACTER SET latin1 NOT NULL DEFAULT '00-00-00',
  `vordering` int(255) NOT NULL DEFAULT '0',
  `gevangenis` int(255) NOT NULL DEFAULT '0',
  `steel` datetime NOT NULL,
  `steeltijd` int(255) NOT NULL DEFAULT '0',
  `killcount` int(255) NOT NULL DEFAULT '0',
  `drugsmax` int(255) NOT NULL DEFAULT '1',
  `nederwietupgr` int(255) NOT NULL DEFAULT '0',
  `paddoupgr` int(255) NOT NULL DEFAULT '0',
  `xtcupgr` int(255) NOT NULL DEFAULT '0',
  `lsdupgr` int(255) NOT NULL DEFAULT '0',
  `speedupgr` int(255) NOT NULL DEFAULT '0',
  `opiumupgr` int(255) NOT NULL DEFAULT '0',
  `nederwiet` int(255) NOT NULL DEFAULT '0',
  `paddo` int(255) NOT NULL DEFAULT '0',
  `xtc` int(255) NOT NULL DEFAULT '0',
  `lsd` int(255) NOT NULL DEFAULT '0',
  `speed` int(255) NOT NULL DEFAULT '0',
  `opium` int(255) NOT NULL DEFAULT '0',
  `autojatten` int(10) NOT NULL DEFAULT '600',
  `autojattijd` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `werktijd` int(10) NOT NULL DEFAULT '180',
  `werken` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `baktijd` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `kluisgeld` bigint(255) NOT NULL DEFAULT '0',
  `zwitsersegeld` bigint(255) NOT NULL DEFAULT '0',
  `zwitsersehalen` bigint(255) NOT NULL DEFAULT '50000000',
  `zwitsersestorten` bigint(255) NOT NULL DEFAULT '5000000',
  `aankomst` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `aankomststad` int(5) NOT NULL DEFAULT '0',
  `vliegen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `puntenblackjack` int(5) NOT NULL DEFAULT '0',
  `puntencomp` int(5) NOT NULL DEFAULT '0',
  `kaarten` text CHARACTER SET latin1,
  `kaartencomp` text CHARACTER SET latin1,
  `draaitijd` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `draaien` int(40) NOT NULL DEFAULT '10800',
  `loten` int(4) NOT NULL DEFAULT '0',
  `hlronde` int(5) NOT NULL DEFAULT '0',
  `hlgetal` int(5) NOT NULL DEFAULT '0',
  `hl` int(50) NOT NULL DEFAULT '300',
  `hltijd` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `roulette` int(4) NOT NULL DEFAULT '0',
  `aangevallen` int(10) NOT NULL DEFAULT '0',
  `aanval` int(5) NOT NULL DEFAULT '15',
  `aanvaltijd` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `missionsfixed` text CHARACTER SET latin1,
  `inzet` int(10) NOT NULL DEFAULT '0',
  `fbibom` int(10) NOT NULL DEFAULT '0',
  `stationkaarten` int(40) NOT NULL DEFAULT '0',
  `vliegveldkaarten` varchar(40) COLLATE latin1_german1_ci NOT NULL DEFAULT '0',
  `chatlog` text CHARACTER SET latin1,
  `chatlog_hulp` text CHARACTER SET latin1,
  `kicked` int(5) NOT NULL DEFAULT '0',
  `oc` int(40) NOT NULL DEFAULT '0',
  `octijd` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `woning` varchar(5) COLLATE latin1_german1_ci NOT NULL DEFAULT 'Geen',
  `woningtekst` text COLLATE latin1_german1_ci NOT NULL,
  `woonplaats` varchar(255) COLLATE latin1_german1_ci NOT NULL,
  `huisnaam` text COLLATE latin1_german1_ci NOT NULL,
  `strafpunten` int(5) NOT NULL,
  `winkel` datetime NOT NULL,
  `getawaytijd` int(15) NOT NULL,
  `winkeltijd` int(15) NOT NULL,
  `famvordering` int(255) NOT NULL DEFAULT '0',
  `steel2` datetime NOT NULL,
  `steeltijd2` int(255) NOT NULL DEFAULT '0',
  `riptijd` int(15) NOT NULL,
  `ripdeal` datetime NOT NULL,
  `drank` int(15) NOT NULL,
  `zak` int(15) NOT NULL,
  `drankt` datetime NOT NULL,
  `xp` int(15) NOT NULL DEFAULT '10',
  `scooterjatten` int(10) NOT NULL DEFAULT '600',
  `scooterjattijd` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `opgehaald` int(1) NOT NULL,
  `code` int(10) NOT NULL DEFAULT '918273645',
  `opgehaald2` int(10) NOT NULL DEFAULT '0',
  `partner_trow` varchar(10) COLLATE latin1_german1_ci NOT NULL DEFAULT '',
  `grup` varchar(10) COLLATE latin1_german1_ci NOT NULL DEFAULT '',
  `mislukt` int(5) NOT NULL DEFAULT '0',
  `winst` int(255) NOT NULL DEFAULT '0',
  `fraudetijd` varchar(255) COLLATE latin1_german1_ci NOT NULL DEFAULT '0',
  `gelukt` int(5) NOT NULL DEFAULT '0',
  `type` int(1) NOT NULL DEFAULT '0',
  `ramen` int(255) NOT NULL DEFAULT '0',
  `hoeren` int(255) NOT NULL DEFAULT '0',
  `hoerenwerkend` int(255) NOT NULL DEFAULT '0',
  `hoerpimped` int(255) NOT NULL DEFAULT '0',
  `tabakmax` int(255) NOT NULL DEFAULT '1',
  `vannelleupgr` int(255) NOT NULL DEFAULT '0',
  `drumupgr` int(255) NOT NULL DEFAULT '0',
  `lmupgr` int(255) NOT NULL DEFAULT '0',
  `kentupgr` int(255) NOT NULL DEFAULT '0',
  `panterupgr` int(255) NOT NULL DEFAULT '0',
  `vannelle` int(255) NOT NULL DEFAULT '0',
  `drum` int(255) NOT NULL DEFAULT '0',
  `lm` int(255) NOT NULL DEFAULT '0',
  `kent` int(255) NOT NULL DEFAULT '0',
  `panter` int(255) NOT NULL DEFAULT '0',
  `pruimtabak` int(255) NOT NULL DEFAULT '0',
  `pruimtabakupgr` int(255) NOT NULL DEFAULT '0',
  `ban` varchar(255) COLLATE latin1_german1_ci NOT NULL DEFAULT '0',
  `ban2` text COLLATE latin1_german1_ci NOT NULL,
  `ban3` varchar(50) COLLATE latin1_german1_ci NOT NULL DEFAULT '0000-00-00',
  `banpunten` varchar(500) COLLATE latin1_german1_ci NOT NULL DEFAULT '0',
  `banreden` varchar(500) COLLATE latin1_german1_ci NOT NULL DEFAULT '',
  `forumbanpunten` varchar(500) COLLATE latin1_german1_ci NOT NULL DEFAULT '0',
  `forumbanreden` varchar(500) COLLATE latin1_german1_ci NOT NULL,
  `goud` varchar(500) COLLATE latin1_german1_ci NOT NULL DEFAULT '0',
  `goud_graven` varchar(500) COLLATE latin1_german1_ci NOT NULL DEFAULT '0',
  `waarschuwingen` varchar(10) COLLATE latin1_german1_ci NOT NULL DEFAULT '0',
  `helpdesk` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  FULLTEXT KEY `moordenaar` (`moordenaar`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci AUTO_INCREMENT=17 ;

--
-- Gegevens worden uitgevoerd voor tabel `users`
--

INSERT INTO `users` (`login`, `hoermissie`, `pimpdiploma`, `email`, `contant`, `bank`, `killers`, `pass`, `rank`, `health`, `bankleft`, `power`, `callcredits`, `vipdays`, `city`, `familie`, `id`, `info`, `maffia`, `IP`, `activationcode`, `signup`, `online`, `online2`, `rankvord`, `passdecoded`, `safe`, `respect`, `geefeer`, `kogels`, `attwins`, `attlost`, `bankpas`, `kluis`, `zwitserse`, `deagle`, `pepperspray`, `knuppel`, `sigp`, `c4`, `m16`, `cornershot`, `pitbull`, `sniper`, `swatgun`, `bazooka`, `bodyguards`, `warboot`, `atoombom`, `tank`, `scud`, `satteliet`, `spacestation`, `hoerenhuis`, `switchblade`, `voornaam`, `achternaam`, `geslacht`, `postcode`, `catchmails`, `kladblok`, `bezitiets`, `vermoord`, `admin`, `vakantie`, `bankstandard`, `dagenrente`, `maxaccounts`, `famlevel`, `moderator`, `forumposts`, `hoofdwaarde`, `moordenaar`, `moordpremie`, `moorddatum`, `vordering`, `gevangenis`, `steel`, `steeltijd`, `killcount`, `drugsmax`, `nederwietupgr`, `paddoupgr`, `xtcupgr`, `lsdupgr`, `speedupgr`, `opiumupgr`, `nederwiet`, `paddo`, `xtc`, `lsd`, `speed`, `opium`, `autojatten`, `autojattijd`, `werktijd`, `werken`, `baktijd`, `kluisgeld`, `zwitsersegeld`, `zwitsersehalen`, `zwitsersestorten`, `aankomst`, `aankomststad`, `vliegen`, `puntenblackjack`, `puntencomp`, `kaarten`, `kaartencomp`, `draaitijd`, `draaien`, `loten`, `hlronde`, `hlgetal`, `hl`, `hltijd`, `roulette`, `aangevallen`, `aanval`, `aanvaltijd`, `missionsfixed`, `inzet`, `fbibom`, `stationkaarten`, `vliegveldkaarten`, `chatlog`, `chatlog_hulp`, `kicked`, `oc`, `octijd`, `woning`, `woningtekst`, `woonplaats`, `huisnaam`, `strafpunten`, `winkel`, `getawaytijd`, `winkeltijd`, `famvordering`, `steel2`, `steeltijd2`, `riptijd`, `ripdeal`, `drank`, `zak`, `drankt`, `xp`, `scooterjatten`, `scooterjattijd`, `opgehaald`, `code`, `opgehaald2`, `partner_trow`, `grup`, `mislukt`, `winst`, `fraudetijd`, `gelukt`, `type`, `ramen`, `hoeren`, `hoerenwerkend`, `hoerpimped`, `tabakmax`, `vannelleupgr`, `drumupgr`, `lmupgr`, `kentupgr`, `panterupgr`, `vannelle`, `drum`, `lm`, `kent`, `panter`, `pruimtabak`, `pruimtabakupgr`, `ban`, `ban2`, `ban3`, `banpunten`, `banreden`, `forumbanpunten`, `forumbanreden`, `goud`, `goud_graven`, `waarschuwingen`, `helpdesk`) VALUES
('admin', 4, '1', 'info@opra-crime.tk', 0, 0, 742, '637b3dc7513c629c686b3c0e261b6a3a', '10', 97, 0, 56, 10, 3, 6, 'Tha', 1, '<p>Ik ben de owner van Opra-Crime en ben er zeer trots op!</p>', 240, '127.0.0.1', 0, '2010-02-13 09:31:58', '2011-05-20 22:10:08', 'ja', '102', 'gionet112', 0, 0, 126, 149, 0, 1, 1, 2147483647, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, 1, '', 1, 0, 1, 0, 45, -1, 0, 3, 0, 0, 0, NULL, 0, '00-00-00', 12, 180, '2011-04-16 22:35:19', 60, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 600, '0000-00-00 00:00:00', 180, '0000-00-00 00:00:00', '2011-04-16 22:35:19', 2611342225, 0, 50000000, 5000000, NULL, 0, '0000-00-00 00:00:00', 0, 0, '', '', '0000-00-00 00:00:00', 7200, 0, 0, 0, 300, '0000-00-00 00:00:00', 0, 0, 15, '2011-04-05 14:50:55', '          15 14 16 9 13 27 8 3 4 25 31 34', 0, 0, 0, '0', '', NULL, 0, 0, '0000-00-00 00:00:00', '14', '', '', 'Tha don familz', 0, '0000-00-00 00:00:00', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 10, 600, '2011-04-05 14:46:57', 0, 918273645, 0, '', '', 0, 0, '0', 0, 0, 0, 42, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '', '0000-00-00', '0', 'Onbekent', '0', 'test', '0', '1302018422', '1', 0),
('Perry', 0, '0', 'perryvandermeer@hotmail.com', 50674, 31763, 1, '590b659f79aad9e9c48852cbb73c41c1', '1', 93, 15, 2050, 86, 0, 5, '', 4, '', -1, '127.0.0.1', 0, '2011-04-02 18:51:44', '2011-04-16 18:21:20', 'nee', '0', NULL, 0, 0, 14, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, 1, '', 0, 0, 0, 0, 15, -1, 0, 0, 0, 0, 0, NULL, 0, '00-00-00', 0, 0, '0000-00-00 00:00:00', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 600, '0000-00-00 00:00:00', 180, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 50000000, 5000000, NULL, 0, '0000-00-00 00:00:00', 0, 0, NULL, NULL, '0000-00-00 00:00:00', 10800, 0, 0, 0, 300, '0000-00-00 00:00:00', 0, 0, 15, '0000-00-00 00:00:00', '                     15 9', 0, 0, 0, '0', NULL, NULL, 0, 0, '0000-00-00 00:00:00', 'Geen', '', '', '', 0, '0000-00-00 00:00:00', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 10, 600, '0000-00-00 00:00:00', 0, 918273645, 0, '', '', 0, 0, '0', 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '', '0000-00-00', '0', 'Je wacht maar', '0', 'Je wou niet kijken', '0', '0', '0', 0),
('gangsterclub', 0, '0', 'iwan_bekkers@hotmail.com', 105000, 29371, 0, 'e484c7843b4d1a4bc3c6c6851cb4ed40', '1', 100, 15, 2000, 86, 0, 6, '', 5, '', -1, '85.191.73.148', 0, '2011-04-03 13:15:54', '2011-04-03 18:26:23', 'nee', '0', NULL, 0, 0, 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, 1, '', 0, 0, 0, 0, 15, -1, 0, 0, 0, 0, 0, NULL, 0, '00-00-00', 0, 0, '0000-00-00 00:00:00', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 600, '0000-00-00 00:00:00', 180, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 50000000, 5000000, NULL, 0, '0000-00-00 00:00:00', 0, 0, NULL, NULL, '0000-00-00 00:00:00', 10800, 0, 0, 0, 300, '0000-00-00 00:00:00', 0, 0, 15, '0000-00-00 00:00:00', '   15 9', 0, 0, 0, '0', '', NULL, 0, 0, '0000-00-00 00:00:00', 'Geen', '', '', '', 0, '0000-00-00 00:00:00', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 10, 600, '0000-00-00 00:00:00', 0, 918273645, 0, '', '', 0, 0, '0', 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '', '0000-00-00', '0', '', '0', '', '5', '1301832334', '0', 0),
('jorisaap', 0, '0', 'joopie280@gmail.com', 199299550, 0, 10, '2a719a70f75d3a6680bf4d444258f64f', '1', 100, 15, 586591, 86, 0, 6, '', 7, '', -1, '213.125.36.130', 0, '2011-04-05 14:15:28', '2011-04-05 14:57:52', 'nee', '3', NULL, 0, 0, 11, 22, 4, 999, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 21, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, 1, '', 1, 0, 0, 0, 15, -1, 0, 0, 1, 0, 0, NULL, 0, '00-00-00', 5, 0, '0000-00-00 00:00:00', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 600, '0000-00-00 00:00:00', 180, '2011-04-05 14:21:02', '2011-04-05 14:28:43', 0, 0, 50000000, 5000000, NULL, 0, '0000-00-00 00:00:00', 0, 0, NULL, NULL, '0000-00-00 00:00:00', 10800, 0, 0, 0, 300, '0000-00-00 00:00:00', 0, 0, 15, '2011-04-05 14:56:24', '                   1 31 20 9 16 3 25 4', 0, 0, 0, '0', NULL, NULL, 0, 0, '0000-00-00 00:00:00', '1', '', '', '', 0, '0000-00-00 00:00:00', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 10, 600, '2011-04-05 14:40:36', 0, 918273645, 0, '', '', 0, 0, '0', 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '', '0000-00-00', '0', 'Dit account is niet verbannen', '0', 'Dit account is niet verbannen', '2', '1302006708', '0', 0),
('demo', 0, '0', 'nils_yankee@hotmail.com', 100000, 25336, 0, 'fe01ce2a7fbac8fafaed7c982a04e229', '1', 100, 15, 0, 14, 0, 1, '', 8, '', -1, '82.171.212.133', 0, '2011-04-08 10:53:25', '2011-04-15 23:45:45', 'nee', '2', NULL, 0, 0, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, 1, '', 0, 0, 0, 0, 15, -1, 0, 0, 0, 0, 0, NULL, 0, '00-00-00', 10, 0, '2011-04-15 23:45:45', 60, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 600, '0000-00-00 00:00:00', 180, '2011-04-08 11:07:02', '0000-00-00 00:00:00', 0, 0, 50000000, 5000000, NULL, 0, '0000-00-00 00:00:00', 0, 0, NULL, NULL, '0000-00-00 00:00:00', 10800, 0, 0, 0, 300, '0000-00-00 00:00:00', 0, 0, 15, '0000-00-00 00:00:00', '                 ', 0, 0, 0, '0', NULL, NULL, 0, 0, '0000-00-00 00:00:00', 'Geen', '', '', '', 0, '0000-00-00 00:00:00', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 10, 600, '0000-00-00 00:00:00', 0, 918273645, 0, '', '', 0, 0, '0', 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '', '0000-00-00', '0', '', '0', '', '0', '0', '0', 0),
('kurdoo', 0, '0', 'kurdoo_z@live.nl', 109150, 24598, 0, '5a81d5f44d635b58ca6803ccd3082c47', '1', 100, 15, 3200, 14, 0, 1, '', 10, '', -1, '77.251.105.39', 0, '2011-04-09 17:32:11', '2011-04-09 18:06:52', 'nee', '0', NULL, 0, 0, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, 1, '', 0, 1, 0, 0, 15, -1, 0, 0, 0, 0, 0, NULL, 0, '00-00-00', 0, 0, '0000-00-00 00:00:00', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 600, '0000-00-00 00:00:00', 180, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 50000000, 5000000, NULL, 0, '0000-00-00 00:00:00', 0, 0, NULL, NULL, '0000-00-00 00:00:00', 10800, 0, 0, 0, 300, '0000-00-00 00:00:00', 0, 0, 15, '0000-00-00 00:00:00', '                  14 16', 0, 0, 0, '0', NULL, NULL, 0, 0, '0000-00-00 00:00:00', 'Geen', '', '', '', 0, '0000-00-00 00:00:00', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 10, 600, '0000-00-00 00:00:00', 0, 918273645, 0, '', '', 0, 0, '0', 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '', '0000-00-00', '0', '', '0', '', '0', '1302364086', '0', 0),
('Ferhat', 0, '0', 'ferhatremory@hotmail.com', 100000, 24598, 0, 'd969c8df3fc529fc83f30270405061e2', '1', 100, 15, 0, 14, 0, 1, '', 9, '', -1, '81.241.133.182', 0, '2011-04-09 13:09:55', '2011-04-09 13:12:04', 'nee', '0', NULL, 0, 0, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, 1, '', 0, 0, 0, 0, 15, -1, 0, 0, 0, 0, 0, NULL, 0, '00-00-00', 0, 0, '0000-00-00 00:00:00', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 600, '0000-00-00 00:00:00', 180, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 50000000, 5000000, NULL, 0, '0000-00-00 00:00:00', 0, 0, NULL, NULL, '0000-00-00 00:00:00', 10800, 0, 0, 0, 300, '0000-00-00 00:00:00', 0, 0, 15, '0000-00-00 00:00:00', '       ', 0, 0, 0, '0', NULL, NULL, 0, 0, '0000-00-00 00:00:00', 'Geen', '', '', '', 0, '0000-00-00 00:00:00', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 10, 600, '0000-00-00 00:00:00', 0, 918273645, 0, '', '', 0, 0, '0', 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '', '0000-00-00', '0', '', '0', '', '0', '0', '0', 0),
('Oceans', 0, '0', 'taymi20@hotmail.com', 0, 0, 0, 'c4ceb152db108935c71875ae7eaeaaec', '1', 0, 15, 0, 12, 0, 1, '/', 11, '', -1, '82.170.6.179', 0, '2011-04-16 21:24:10', '2011-04-16 21:46:19', 'nee', '0', NULL, 3, 0, 3, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, 1, '', 1, 0, 0, 0, 15, -1, 0, 0, 0, 0, 0, NULL, 0, '00-00-00', 0, 0, '0000-00-00 00:00:00', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -99999999, 600, '0000-00-00 00:00:00', 180, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 50000000, 5000000, NULL, 0, '0000-00-00 00:00:00', 0, 0, NULL, NULL, '0000-00-00 00:00:00', 10800, 0, 0, 0, 300, '0000-00-00 00:00:00', 0, 0, 15, '0000-00-00 00:00:00', '                    3 4 30', 0, 0, 0, '0', NULL, NULL, 0, 0, '0000-00-00 00:00:00', 'Geen', '', '', '', 0, '0000-00-00 00:00:00', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 10, 600, '0000-00-00 00:00:00', 0, 918273645, 0, '', '', 0, 0, '0', 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '', '0000-00-00', '15', 'Abuse warning!', '0', '', '0', '0', '0', 0),
('OceansDOS', 0, '0', ' blabla@hotmail.com', 100000, 21855, 0, 'c4ceb152db108935c71875ae7eaeaaec', '1', 100, 15, 0, 12, 0, 1, '', 12, '', -1, '82.170.6.179', 0, '2011-04-16 21:47:53', '2011-04-16 22:20:25', 'nee', '0', NULL, 3, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, 1, '', 0, 0, 0, 0, 15, -1, 0, 0, 0, 0, 0, NULL, 0, '00-00-00', 0, 0, '0000-00-00 00:00:00', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 600, '0000-00-00 00:00:00', 180, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 50000000, 5000000, NULL, 0, '0000-00-00 00:00:00', 0, 0, NULL, NULL, '0000-00-00 00:00:00', 10800, 0, 0, 0, 300, '0000-00-00 00:00:00', 0, 0, 15, '0000-00-00 00:00:00', '  ', 0, 0, 0, '0', NULL, NULL, 0, 0, '0000-00-00 00:00:00', 'Geen', '', '', '', 0, '0000-00-00 00:00:00', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 10, 600, '0000-00-00 00:00:00', 0, 918273645, 0, '', '', 0, 0, '0', 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '', '0000-00-00', '99991', 'Proxy server detected!', '0', '', '0', '0', '0', 0),
('gnome123', 0, '0', 'giotjuh@gmail.com', 101250, 21218, 0, '072c4fe6d8f97737be029b3f8937fd43', '1', 100, 15, 500, 12, 0, 1, '', 16, '', -1, '94.214.40.119', 0, '2011-04-17 12:07:00', '2011-04-17 12:08:06', 'nee', '0', NULL, 7, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, 1, '', 0, 0, 0, 0, 15, -1, 0, 0, 0, 0, 0, NULL, 0, '00-00-00', 0, 0, '0000-00-00 00:00:00', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 600, '0000-00-00 00:00:00', 180, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 50000000, 5000000, NULL, 0, '0000-00-00 00:00:00', 0, 0, NULL, NULL, '0000-00-00 00:00:00', 10800, 0, 0, 0, 300, '0000-00-00 00:00:00', 0, 0, 15, '0000-00-00 00:00:00', '      9', 0, 0, 0, '0', NULL, NULL, 0, 0, '0000-00-00 00:00:00', 'Geen', '', '', '', 0, '0000-00-00 00:00:00', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 10, 600, '0000-00-00 00:00:00', 0, 918273645, 0, '', '', 0, 0, '0', 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '', '0000-00-00', '0', '', '0', '', '0', '0', '0', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `veilinglogs`
--

CREATE TABLE IF NOT EXISTS `veilinglogs` (
  `person` varchar(30) COLLATE latin1_german1_ci DEFAULT NULL,
  `bod` bigint(255) NOT NULL DEFAULT '0',
  `stad` int(5) NOT NULL DEFAULT '0',
  `soort` int(5) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Gegevens worden uitgevoerd voor tabel `veilinglogs`
--


-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vliegveld`
--

CREATE TABLE IF NOT EXISTS `vliegveld` (
  `stad` int(5) NOT NULL,
  `eigenaar` varchar(20) COLLATE latin1_german1_ci NOT NULL,
  `tot` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `showtot` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `laatstebod` bigint(255) NOT NULL DEFAULT '0',
  `laatstebieder` varchar(50) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Gegevens worden uitgevoerd voor tabel `vliegveld`
--

INSERT INTO `vliegveld` (`stad`, `eigenaar`, `tot`, `showtot`, `laatstebod`, `laatstebieder`) VALUES
(1, '', '2011-05-21 00:00:00', '21-05-2011 / 00:00', 0, ''),
(2, '', '2011-05-21 00:00:00', '21-05-2011 / 00:00', 0, ''),
(3, '', '2011-05-21 00:00:00', '21-05-2011 / 00:00', 0, ''),
(4, '', '2011-05-21 00:00:00', '21-05-2011 / 00:00', 0, ''),
(5, '', '2011-05-21 00:00:00', '21-05-2011 / 00:00', 0, ''),
(6, '', '2011-05-21 00:00:00', '21-05-2011 / 00:00', 0, '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `[redlight]`
--

CREATE TABLE IF NOT EXISTS `[redlight]` (
  `ramen` int(255) NOT NULL DEFAULT '1000000',
  `land` int(6) NOT NULL DEFAULT '1',
  `id` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `[redlight]`
--

INSERT INTO `[redlight]` (`ramen`, `land`, `id`) VALUES
(20000, 1, '1'),
(20000, 2, '2'),
(20000, 3, '3'),
(20000, 4, '4'),
(20000, 5, '5'),
(20000, 6, '6');
