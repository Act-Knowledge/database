/*
Navicat MySQL Data Transfer

Source Server         : sdsasd
Source Server Version : 50141
Source Host           : localhost:3306
Source Database       : mark-it

Target Server Type    : MYSQL
Target Server Version : 50141
File Encoding         : 65001

Date: 2014-03-25 09:30:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tuts
-- ----------------------------
DROP TABLE IF EXISTS `tuts`;
CREATE TABLE `tuts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titel` varchar(255) DEFAULT NULL,
  `bericht` text,
  `type` int(11) DEFAULT NULL,
  `videolink` varchar(255) DEFAULT NULL,
  `afbeelding` varchar(255) DEFAULT NULL,
  `auteur` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tuts
-- ----------------------------
INSERT INTO `tuts` VALUES ('1', 'HTML Elementen ', '<p>In deze tutorial ga ik je uitleggen hoe HTML elementen werken, een van&nbsp;<br />\r\nde belangrijkste punten van je website.&nbsp;<br />\r\n&nbsp;<br />\r\nEen element begin je met een &lt;, waarna de tag komt van het element en&nbsp;<br />\r\ndaarna weer afsluit met een &gt;. Aan het einde sluit je hem weer hetzelfde&nbsp;<br />\r\naf door te beginnen met &lt;, maar daarna komt er een / om aan te geven&nbsp;<br />\r\ndat hij word afgesloten. Daarna kom je weer met de tag en sluit je weer af&nbsp;<br />\r\nmet &gt;. Tussen die 2 gedeeltes zet je bijvoorbeeld de titel van een pagina.&nbsp;<br />\r\nVoorbeeld: &lt;title&gt;Mijn eerste webpagina&lt;/html&gt;&nbsp;<br />\r\n&lt;br&gt; (een enter) is een uitzondering, deze hoeft niet afgesloten te&nbsp;<br />\r\nworden.&nbsp;<br />\r\n&nbsp;<br />\r\nLaten we eens beginnen met het standaard HTML document.&nbsp;<br />\r\n&nbsp;<br />\r\n<strong>&lt;!DOCTYPE html&gt;&nbsp;<br />\r\n&lt;html&gt;&nbsp;<br />\r\n&lt;head&gt;&nbsp;<br />\r\n&nbsp;<br />\r\n&lt;title&gt;Mijn eerste webpagina&lt;/title&gt;&nbsp;<br />\r\n&nbsp;<br />\r\n&lt;/head&gt;&nbsp;<br />\r\n&lt;body&gt;&nbsp;<br />\r\n&nbsp;<br />\r\n&lt;b&gt;My First Website&lt;/b&gt;&nbsp;<br />\r\n&nbsp;<br />\r\n&lt;/body&gt;&nbsp;<br />\r\n&nbsp;<br />\r\n&lt;/html&gt;&nbsp;</strong><br />\r\n&nbsp;<br />\r\nJe ziet hier al verschillende elementen in verwerkt, &lt;!DOCTYPE html&gt;&nbsp;<br />\r\nstaat er om te vertellen wat voor type document het is, in dit geval een&nbsp;<br />\r\nHTML 5 document.&nbsp;</p>\r\n\r\n<p><br />\r\n&lt;html&gt; beschrijft heel de webpagina, waarin de &lt;head&gt; en &lt;body&gt; weer&nbsp;<br />\r\nvoorkomen. In de head kun je elementen plaatsen die daarin thuishoren,&nbsp;<br />\r\nzoals bijvoorbeeld de titel van daarnet, de link naar je css, en scripts.</p>\r\n\r\n<p>In de&nbsp;body kun je alle content van je website zetten, in het voorbeeld staat;&nbsp;<br />\r\n&lt;b&gt;My First Website&lt;/b&gt; op je website komt My First Website er nu&nbsp;<br />\r\ndikgedrukt uit te zien.</p>\r\n<br />\r\n<p>Als je klaar met de content bent sluit je de body en&nbsp;html weer af zoals je geleerd hebt.</p>\r\n<br />\r\n<p><span style=\"line-height: 1.6em;\">Als jij alle HTML elementen wil leren verwijs ik je door naar&nbsp;</span><br />\r\n<span style=\"line-height: 1.6em;\">http://www.handleidinghtml.nl/html/elementen/elementen.html,&nbsp;</span><br />\r\n<span style=\"line-height: 1.6em;\">hier staan alle elementen piekfijn uitgelegd.</span></p>\r\n', '1', '', 'https://dl-web.dropbox.com/get/Project%20Knowledge/tutorials/HTML%20Elementen/elements.png?_subject_uid=207697628&amp;w=AABRnVVa92frz-6BukddUenrBQTu5yaP7n-RBcpLY35E_A', 'Nick');
INSERT INTO `tuts` VALUES ('24', 'jQuery Tutorial', '<p><!--? echo $descr; ?-->Dit is een&nbsp;jQuery Tutorial, waarbij je leert gebruik te maken van jQuery</p>\r\n', '4', '//www.youtube.com/embed/_iRIPJHrdXg', '', 'jordy');
INSERT INTO `tuts` VALUES ('23', 'PHP Database verbinding.', '<p>In deze&nbsp;tutorial ga ik uitleggen hoe je een database verbinding kan maken in php met behulp<br />\nvan Mysqli.</p>\n\n<p>&nbsp;</p>\n\n<p>Zorg eerst dat je een leeg .php bestand hebt. Door bijvoorbeeld een tekst bestand op te slaan als .php bestand.</p>\n\n<p>&nbsp;</p>\n\n<p>Als je dat gedaan hebt open je dat bestand en typ je:&nbsp;<strong>&lt;?php</strong>,<strong>&nbsp;</strong>Dit geeft aand dat je wilt beginnen met het schrijven van een php code Vervolgens typ je het volgende:&nbsp;</p>\n\n<p><br />\n<br />\n<strong>$mysqli = mysqli_connect(&quot;127.0.0.1&quot;,&quot;root&quot;,&quot;Mysql wachtwoord&quot;,&quot;Database naam&quot;);</strong></p>\n\n<p>&nbsp;</p>\n\n<p>We willen natuurlijk wel kijken of de verbinding het doet en dat gaan we zo doen:</p>\n\n<p>&nbsp;</p>\n\n<p><strong>if(mysqli_connect_error($mysqli))<br />\n&nbsp; {<br />\n&nbsp; // laat de error zien.<br />\n&nbsp; die(&#39;Kan niet connecten: &#39; . mysqli_connect_error());<br />\n&nbsp; }</strong></p>\n\n<p><br />\nKrijg je geen error in beeld? Dan werkt je database connectie en kun je query&#39;s uitvoeren in PHP<br />\nEen query kun je nu makkelijk uitvoeren in PHP door het volgende te doen:</p>\n\n<p><br />\n<br />\n<strong>$query = $mysqli-&gt;query(&quot;SELECT * FROM tablenaam WHERE id = &#39;1&#39;&quot;);</strong></p>\n\n<p>&nbsp;</p>\n\n<p>Als we daarna gegevens uit die table willen op halen kunnen we dat het beste op deze manier doen:</p>\n\n<p>&nbsp;</p>\n\n<p><strong>$row = mysqli_fetch_object($query);</strong><br />\n<strong style=\"line-height: 1.6em;\">echo $row-&gt;id;</strong></p>\n\n<p>&nbsp;</p>\n\n<p>Nu zal er op je pagina een getal komen te staan(het id van de row dat je net hebt opgezocht in je query in dit geval: 1)<br />\nJe kunt ook andere dingen ophalen bijvoorbeeld voornaam of achternaam (al moet dat dan wel een voornaam of achternaam in je database&nbsp;staan)</p>\n\n<p>&nbsp;</p>\n\n<p>dit doe je zo:</p>\n\n<p>&nbsp;</p>\n\n<p><strong>echo $row-&gt;voornaam;<br />\necho $row-&gt;achternaam;</strong></p>\n\n<p>&nbsp;</p>\n\n<h2>Sluit altijd je php script met:<strong>&nbsp;?&gt;</strong></h2>\n\n<p>&nbsp;</p>\n\n<p>Als het je nu lukt weet je hoe je een Database connectie maakt, query&#39;s kunt uitvoeren en data kan ophalen uit de database!</p>\n', '3', '', 'http://www.startpagina.nl/athene/dochters/php/images/php-logo.jpg', 'jordy');
INSERT INTO `tuts` VALUES ('3', 'Video: Tutorial part 2', '', '2', '//www.youtube.com/embed/40puViieNBQ', '', 'Glenn');
INSERT INTO `tuts` VALUES ('2', 'Video: Tutorial part 1', '', '2', '//www.youtube.com/embed/MLNy5DJ1Xxo', '', 'Glenn');
INSERT INTO `tuts` VALUES ('4', 'Video: Tutorial part 3', '', '2', '//www.youtube.com/embed/zwQ7huWsiwY', '', 'Glenn');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'jordy', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');
INSERT INTO `users` VALUES ('2', 'Glenn', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');
INSERT INTO `users` VALUES ('3', 'Nick', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');
