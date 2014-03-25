-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 25 mrt 2014 om 08:08
-- Serverversie: 5.6.12-log
-- PHP-versie: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `mark-it`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tuts`
--

CREATE TABLE IF NOT EXISTS `tuts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titel` varchar(255) DEFAULT NULL,
  `bericht` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `videolink` varchar(255) DEFAULT NULL,
  `afbeelding` varchar(255) DEFAULT NULL,
  `auteur` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Gegevens worden uitgevoerd voor tabel `tuts`
--

INSERT INTO `tuts` (`id`, `titel`, `bericht`, `type`, `videolink`, `afbeelding`, `auteur`) VALUES
(1, 'Tut', 'alalalala jordy is de beste codeur ever!', 1, '', 'http://www.startpagina.nl/athene/dochters/php/images/php-logo.jpg', 'Jordy'),
(2, 'Video: Tutorial', '', 2, '//www.youtube.com/embed/40puViieNBQ', '', 'Glenn'),
(15, 'Video: Tutorial', '', 4, '//www.youtube.com/embed/MLNy5DJ1Xxo', '', 'Glenn'),
(3, 'Video: Tutorial', '', 3, '//www.youtube.com/embed/zwQ7huWsiwY', '', 'Glenn'),
(9, 'HTML Elementen \r\n', 'In deze tutorial ga ik je uitleggen hoe HTML elementen werken, een van \r\nde belangrijkste punten van je website. \r\n \r\nEen element begin je met een <, waarna de tag komt van het element en \r\ndaarna weer afsluit met een >. Aan het einde sluit je hem weer he', 4, '', 'https://wacomdpsstorage.blob.core.windows.net/articlesmedia/content-ppe.windowsazure.com/en-us/documentation/articles/virtual-machines-python-django-web-app-linux/20140124100637/mac-linux-django-helloworld-browser.png', 'Nick');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
