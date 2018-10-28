-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u3
-- http://www.phpmyadmin.net
--
-- Host: mydb19.surf-town.net
-- Generation Time: Oct 28, 2018 at 05:40 PM
-- Server version: 5.6.42-log
-- PHP Version: 5.6.38-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `linux_julklapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `bought`
--

CREATE TABLE IF NOT EXISTS `bought` (
  `wishid` bigint(20) NOT NULL,
  `userid` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bought`
--

INSERT INTO `bought` (`wishid`, `userid`) VALUES
(31, 1),
(348, 6),
(119, 1),
(54, 5),
(385, 6),
(181, 6),
(123, 1),
(122, 1),
(238, 6),
(82, 1),
(253, 3),
(9, 5),
(8, 5),
(2, 5),
(15, 5),
(22, 5),
(135, 5),
(56, 5),
(55, 5),
(63, 5),
(70, 5),
(190, 5),
(109, 5),
(141, 5),
(86, 5),
(71, 5),
(83, 3),
(20, 3),
(40, 3),
(175, 5),
(103, 6),
(49, 5),
(266, 5),
(192, 5),
(89, 6),
(111, 6),
(139, 1),
(68, 5),
(50, 5),
(182, 6),
(258, 3),
(100, 5),
(21, 5),
(173, 3),
(169, 3),
(140, 3),
(165, 5),
(75, 5),
(160, 5),
(87, 5),
(129, 5),
(150, 5),
(99, 6),
(93, 6),
(29, 6),
(176, 6),
(155, 6),
(37, 6),
(186, 6),
(126, 6),
(120, 6),
(408, 3),
(286, 5),
(249, 1),
(449, 3),
(295, 5),
(272, 5),
(278, 5),
(289, 5),
(273, 5),
(260, 5),
(224, 6),
(6, 6),
(189, 6),
(292, 6),
(243, 6),
(251, 6),
(274, 6),
(303, 6),
(314, 1),
(388, 6),
(27, 1),
(372, 6),
(389, 6),
(147, 1),
(144, 6),
(52, 6),
(194, 6),
(327, 6),
(315, 6),
(261, 6),
(406, 3),
(418, 5),
(320, 5),
(666, 6),
(414, 5),
(422, 5),
(413, 3),
(451, 3),
(450, 3),
(307, 3),
(356, 6),
(153, 6),
(404, 6),
(405, 6),
(459, 6),
(230, 6),
(473, 6),
(369, 6),
(432, 5),
(442, 5),
(453, 5),
(423, 5),
(443, 5),
(667, 6),
(417, 3),
(445, 3),
(344, 3),
(383, 3),
(355, 5),
(370, 3),
(379, 5),
(374, 5),
(300, 5),
(472, 5),
(367, 5),
(478, 5),
(475, 5),
(474, 6),
(354, 6),
(402, 6),
(444, 6),
(236, 6),
(504, 6),
(499, 5),
(441, 5),
(456, 6),
(524, 1),
(470, 1),
(392, 1),
(497, 1),
(505, 1),
(447, 1),
(508, 1),
(488, 1),
(506, 1),
(411, 1),
(494, 6),
(464, 6),
(333, 6),
(503, 6),
(481, 6),
(515, 1),
(340, 6),
(437, 6),
(485, 6),
(431, 3),
(51, 1),
(662, 6),
(565, 6),
(611, 6),
(624, 5),
(513, 5),
(647, 5),
(648, 5),
(604, 5),
(631, 5),
(550, 6),
(489, 6),
(567, 6),
(670, 6),
(704, 6),
(678, 6),
(622, 6),
(575, 5),
(623, 5),
(653, 5),
(500, 5),
(625, 6),
(722, 5),
(710, 5),
(724, 5),
(638, 5),
(721, 5),
(546, 5),
(686, 5),
(597, 1),
(689, 1),
(690, 1),
(649, 1),
(590, 1),
(553, 1),
(566, 1),
(719, 1),
(727, 1),
(555, 1),
(582, 1),
(735, 1),
(619, 1),
(671, 1),
(726, 1),
(733, 1),
(654, 5),
(718, 5),
(518, 3),
(709, 3),
(734, 6),
(677, 6),
(621, 6),
(762, 6),
(758, 6),
(785, 6),
(606, 6),
(605, 6),
(776, 6),
(775, 6),
(342, 6),
(635, 5),
(600, 5),
(731, 6),
(789, 6),
(750, 5),
(599, 5),
(743, 6),
(458, 5),
(792, 5),
(793, 5),
(781, 1),
(772, 1),
(770, 1),
(874, 6),
(791, 6),
(1092, 6),
(949, 5),
(937, 5),
(891, 5),
(904, 6),
(908, 5),
(929, 5),
(752, 5),
(1072, 5),
(903, 6),
(941, 6),
(1075, 6),
(1088, 5),
(1102, 5),
(827, 5),
(878, 5),
(880, 5),
(881, 5),
(888, 5),
(784, 3),
(1099, 3),
(1107, 3),
(917, 6),
(1125, 1),
(675, 1),
(902, 1),
(925, 1),
(1077, 1),
(1103, 1),
(767, 6),
(1110, 6),
(829, 5),
(1068, 6),
(665, 6),
(1065, 5),
(1126, 5),
(1120, 5),
(1095, 5),
(907, 6),
(940, 6),
(1086, 6),
(914, 6),
(1097, 6),
(858, 6),
(1140, 5),
(1210, 5),
(1223, 6),
(1256, 6),
(1179, 6),
(1180, 6),
(1292, 6),
(1317, 6),
(1345, 5),
(1228, 5),
(1324, 5),
(1369, 5),
(1245, 6),
(1338, 6),
(1186, 6),
(1244, 5),
(1260, 5),
(1205, 5),
(1248, 1),
(1196, 1),
(1243, 1),
(1265, 1),
(1283, 1),
(1277, 1),
(1164, 1),
(1333, 5),
(1255, 1),
(1321, 1),
(1311, 1),
(1318, 1),
(1215, 1),
(1330, 5),
(1284, 5),
(1271, 6),
(1285, 5),
(1201, 5),
(1268, 5),
(1356, 5),
(1181, 5),
(1335, 6),
(1360, 5),
(1161, 5),
(1383, 5),
(1315, 6),
(1401, 6),
(1331, 6),
(1378, 5),
(1352, 5),
(1329, 6),
(668, 6),
(1354, 6),
(1232, 6),
(1379, 6),
(1385, 6),
(1264, 1);

-- --------------------------------------------------------

--
-- Table structure for table `relatives`
--

CREATE TABLE IF NOT EXISTS `relatives` (
  `userid` bigint(20) NOT NULL,
  `keyword` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relatives`
--

INSERT INTO `relatives` (`userid`, `keyword`) VALUES
(20, ''),
(1, '17aa6a0d057bec65511a7749980bbe6468092729'),
(2, '17aa6a0d057bec65511a7749980bbe6468092729'),
(3, '17aa6a0d057bec65511a7749980bbe6468092729'),
(4, '17aa6a0d057bec65511a7749980bbe6468092729'),
(5, '17aa6a0d057bec65511a7749980bbe6468092729'),
(6, '17aa6a0d057bec65511a7749980bbe6468092729'),
(7, '17aa6a0d057bec65511a7749980bbe6468092729'),
(8, '17aa6a0d057bec65511a7749980bbe6468092729'),
(9, '17aa6a0d057bec65511a7749980bbe6468092729'),
(27, '17aa6a0d057bec65511a7749980bbe6468092729'),
(11, '17aa6a0d057bec65511a7749980bbe6468092729'),
(32, '17aa6a0d057bec65511a7749980bbe6468092729'),
(31, '17aa6a0d057bec65511a7749980bbe6468092729'),
(14, '17aa6a0d057bec65511a7749980bbe6468092729'),
(17, '17aa6a0d057bec65511a7749980bbe6468092729'),
(24, ''),
(33, '17aa6a0d057bec65511a7749980bbe6468092729'),
(23, ''),
(26, '17aa6a0d057bec65511a7749980bbe6468092729'),
(28, '17aa6a0d057bec65511a7749980bbe6468092729'),
(29, '17aa6a0d057bec65511a7749980bbe6468092729'),
(30, '17aa6a0d057bec65511a7749980bbe6468092729'),
(34, '17aa6a0d057bec65511a7749980bbe6468092729'),
(35, '17aa6a0d057bec65511a7749980bbe6468092729'),
(37, '17aa6a0d057bec65511a7749980bbe6468092729'),
(42, '17aa6a0d057bec65511a7749980bbe6468092729'),
(41, '17aa6a0d057bec65511a7749980bbe6468092729');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
`testid` bigint(20) NOT NULL,
  `text` varchar(32) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=92 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`testid`, `text`) VALUES
(8, 'med&ouml;i'),
(13, 'test5med&ouml;i'),
(11, ''),
(12, ''),
(14, ''),
(15, ''),
(16, ''),
(17, 'rickard'),
(18, ''),
(19, 'åäö'),
(20, 'Ã¥Ã¤Ã¶'),
(21, 'asdfåäö'),
(22, 'Möbel'),
(23, 'Test'),
(24, ''),
(25, '(Inte svart eller r&amp;ouml;d)'),
(26, 'L?v'),
(27, ''),
(28, 'TEST?TEST?TEST?'),
(29, 'Rött Löv'),
(53, 'Teståäö'),
(31, ''),
(32, 'Mål'),
(55, 'Tss'),
(54, 'Testaråäö'),
(36, 'Lök'),
(71, ''),
(70, ''),
(69, ''),
(68, ''),
(67, ''),
(66, 'asd'),
(65, 'test'),
(64, ''),
(63, ''),
(62, 'test'),
(61, 'Lösöre'),
(60, ''),
(59, ''),
(58, ''),
(57, ''),
(56, ''),
(72, ''),
(73, 'asd'),
(74, ''),
(75, 'adsfasdfasdfasdf'),
(76, ''),
(77, ''),
(78, 'asf'),
(79, ''),
(80, 'ssssss'),
(81, 'ttttttt'),
(82, ''),
(83, 'Onskan'),
(84, 'Onskan'),
(85, 'Onskan'),
(86, ''),
(87, 'Test'),
(88, ''),
(89, 'Teståäö'),
(90, 'Ã¥Ã¤Ã¶'),
(91, 'Ã¥h vilken tur');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`userid` bigint(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `name` varchar(20) NOT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `familyid` bigint(20) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `name`, `lastname`, `familyid`) VALUES
(1, 'Daniel', '6cd2cc147bb93e99eb02629e479485d82af2ac20', 'Daniel', 'Nisses-Gagnér', 1),
(2, 'Linus', '', 'Linus', 'Gille', 1),
(3, 'Ronjang', '4c57f0c88d9844630327623633ce269cf826ab99', 'Ronja', 'Nisses-Gagner', 3),
(4, 'Eminja', '', 'Eminja', 'Nisses-Gagner', 3),
(5, 'mamma', 'be21e7a0765cd7cbf4562996f8364cf122e6d19c', 'Elisabeth', 'Nisses-Gagnér', 5),
(6, 'Emelie', '957f75da39d6f7ad77d8207ca298039527ef5d92', 'Emelie', 'Nisses-Gagnér', 6),
(7, 'Rickard', 'b7227b41405165fed07d09400a0787b15b22a5ec', 'Rickard', 'Nisses-Gagnér', 7),
(8, 'Eldfluga', '2c5f6996ce99bcadf04e4bf050e3051771a46e55', 'Anna', 'Spers', 8),
(9, 'Nelly', '', 'Nelly', '', 8),
(33, 'Emil', '', 'Emil', '', 3),
(11, 'Jenny', '580882c70c892b5ce2c4dc57918e5634a60cb17a', 'Jenny', 'Lundberg', 11),
(30, 'Leo', '', 'Leo', 'Nisses-Gagner', 11),
(14, 'Nemesiz', '4ac6d94a34c3c60385baa22ab85a30d229c89b76', 'Alexander', 'Nisses-Gagnér', 14),
(17, 'Patrik', '0bb9e58cdc407b04c2147ccd2df0fd50d2c9bbe4', 'Patrik', 'Gustavsson', 17),
(34, 'Leiah', '54319f44b0141a81e3a2548bb5951b2a0aefe8ae', 'Leiah', '', 34),
(20, 'Cattis', '', 'Cattis', '', 5),
(24, 'Bert-Åke ', 'fdb87dfd199045af7165780b11640b83768a0d57', 'Bert-Åke ', 'Andréasson', 24),
(23, 'Olle', '', 'Olle', '', 5),
(26, 'Timmy', '', 'Timmy', '', 8),
(32, 'Felix', '', 'Felix', 'Nisses-Gagnér', 11),
(42, 'Gabriel', '', 'Gabriel', 'Nisses-Gagnér', 8),
(40, 'Anna nr 2', '', 'Anna nr 2', 'Spers', 8),
(41, 'Kevin', 'ffb4761cba839470133bee36aeb139f58d7dbaa9', 'Kevin', 'Nisses-Gagner', 6);

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE IF NOT EXISTS `wishlists` (
`id` bigint(20) NOT NULL,
  `wish` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `bought` bigint(20) NOT NULL,
  `link` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `userid` bigint(20) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=1447 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `wish`, `bought`, `link`, `userid`) VALUES
(1295, 'Längdåkningsskidutrustning', 0, '', 0),
(1437, 'Hårband', 0, 'https://www.rituals.com/sv-se/puja---flying-crane---1104480.html', 3),
(1438, 'Utdragbar tvättlina, 2.8m', 0, 'https://letsdeal.se/deals/q82ktfvgkz6s', 3),
(1225, 'Någon Trollerilåda', 0, '', 0),
(1426, 'Rå-kaffe Etiopien Sidamo 2 kg', 0, 'http://tunestams.se/produkt/rakaffe-sidamo-grade-2-2-kg/', 8),
(1419, 'Kaffeplantor', 0, '', 8),
(1147, 'En fin vas, gärna i glas', 0, '', 0),
(1215, 'Vapenrem Härkila Läder', 0, 'https://www.jaktwebben.com/product/gevarsrem', 14),
(1149, 'Cat-eye solglasögon i rosé gold', 0, 'https://lushlity.com/collections/bestsellers/products/cat-eye-aviators-2', 0),
(1151, 'En sodastream , jag har flaskor ', 0, '', 0),
(1153, 'Biobiljetter', 0, '', 9),
(1257, 'Vo2 Max Test (länk bara ett exempel)', 0, 'http://aktivitus.se/vara-tester/', 7),
(1214, 'Swarovski Throw Lever 820:-', 0, 'https://www.pnjakt.se/art/swarovski-throw-lever-tl.php', 14),
(1190, 'BLOPENS', 0, 'https://www.toysrus.se/produkt/blopens-magisk-set?gclid=Cj0KCQjw95vPBRDVARIsAKvPd3LhUayDAbwQksXLP9RNjXqjDfyiX1qNDKUhBCsPz5zxsT9_YmREDp0aAqtxEALw_wcB&id=000000000102638001&ef_id=VuHgOQAAAPC42mm-:201710', 9),
(133, 'S&auml;g till mig om ni kan se denna &ouml;nskning. Det skall ej kunna ske. -Admin!', 0, '', 16),
(1222, 'My Fairy Garden ', 0, 'https://www.br.se/c/my-fairy-garden-aelva-traedgaard-lekset?id=000000000118115001', 4),
(365, 'test', 0, '', 31),
(1189, 'nerf gevär', 0, 'https://www.toysrus.se/produkt/nerf-nstrike-elite-retaliator?gclid=CjwKCAjwyIHPBRAIEiwAHPS-GBUFNk7zDXUiGsqX1uTp47wa-krIJy6LdcRbWTaW-ISmbpe1yhtLpxoCTdIQAvD_BwE&id=000000000108465001&ef_id=VuHgOQAAAPC42', 26),
(1260, 'Kaffekopp ”The Adventure Begins”', 5, 'https://travelingdutchies.com/product/enamel-mug-adventure-begins/', 14),
(1421, 'Bok om kaffe', 0, 'https://www.bokus.com/bok/9789171263599/konsten-att-gora-kaffe-vagen-till-den-perfekta-smaken/?source=googleps&gclid=EAIaIQobChMIztzq3uTc2QIVEZQYCh2gSQuvEAQYAiABEgIaK_D_BwE', 8),
(1211, 'Swarovski BTF 2225:-', 8, 'https://www.jakt.se/btf-ballistic-turret-flex', 14),
(1212, 'Swarovski SLP-O-50 850:-', 0, 'https://www.pnjakt.se/art/swarovski-linsskydd-slp-o.php?ref_lp=prisjakt&utm_source=prisjakt&utm_medium=cpc', 14),
(1213, 'Swarovski SLP-E-46 okularskydd 850:-', 0, 'https://www.pnjakt.se/art/swarovski-linsskydd-slp-e-46.php', 14),
(502, 'Presentkort MQ', 0, '', 11),
(1194, 'shnook mjukisdjur', 0, 'https://www.toysrus.se/produkt/shnook-mjuk-figur-shazam?id=000000000101724003', 9),
(1195, 'badbomber från lush eller liknande ', 0, '', 8),
(1197, 'MAYKA plupp-rader 2', 0, 'https://www.br.se/c/mayka-mellan-2-plupprader2-m-graa?id=000000000123234001', 26),
(1216, 'Vapenrem Härkila Läder', 0, 'https://www.jaktwebben.com/product/gevarsrem', 0),
(1217, 'Vattentäta varma jakthandskar', 0, 'https://www.widforss.se/swedteam-green-dry-m?gclid=EAIaIQobChMIvsK76uWd1wIV04eyCh2aiQ-zEAQYASABEgIwLPD_BwE', 14),
(1258, 'Laktattest ', 0, 'http://aktivitus.se/vara-tester/', 7),
(1242, 'lego city djungel', 0, 'https://www.br.se/c/lego-city-60160-djungel--mobilt-labb?id=000000000110760001', 26),
(1167, 'bobbycar', 8, 'https://lekmer.se/leksaker/barncyklar-akfordon/gabilar-sparkfordon/big-bobby-car-classic-röd', 42),
(1229, 'Ljusvässare', 0, 'https://www.smartasaker.se/sv/artiklar/ljusvassare.html?utm_medium=email&utm_source=Ungapped&utm_campaign=NB_lys%20upp&utm_custom%5Bungapped%5D=114ab2d0-875f-44ad-b25a-43f7d3623cd8', 0),
(1354, 'Necessär, stor och praktisk. Lättåtkomligt. Ev annan modell', 6, 'https://www.bjornborg.com/se/core-black-core715-01', 14),
(1270, 'Bolibompa sagospel', 0, 'https://www.lekia.se/alga-bolibompa-storytelling-game-sv', 34),
(1198, 'MAYKA plupp-rader 4', 0, 'https://www.br.se/c/mayka-stor-4-plupprader2-m-blaa?id=000000000123235002', 26),
(864, 'Presentkort IKEA', 0, '', 8),
(1238, 'easy braider', 0, 'https://lekmer.se/easy-braider-hardekorering/p/31140', 9),
(1155, 'Silverskor strl 35 ', 0, 'http://m.hm.com/se/product/66291?article=66291-A', 0),
(1233, 'lego friends vinterresort skidlift', 0, 'https://lekmer.se/41324-vinterresort-skidlift/p/77011', 9),
(1202, 'suddigum', 0, 'https://www.clasohlson.com/se/Hörlurar%20för%20barn%20iFrogz%20Little%20Rockerz%20Costume/Pr388240005', 9),
(1203, 'presentkort på lindex', 0, '', 9),
(1204, 'curio-watch', 0, 'https://lekmer.se/watch-bla/p/9090?country_override=SE&dfw_tracker=27696-31829&gclid=CjwKCAjw4KvPBRBeEiwAIqCB-Xty2-xTh4dIs83Scfuf5pKtvE9_-KEgZhXhZfjv6kXwtP_B5NYn8RoC2RYQAvD_BwE&gclsrc=aw.ds', 26),
(1193, 'beados', 0, 'https://www.toysrus.se/produkt/beados-shopkins-glassbil?id=000000000101532001', 9),
(1192, 'örhängen från glitter', 0, 'https://www.glitter.se/orhangen-bohemisk-6-pack', 9),
(1172, 'nattlampa päron ', 0, 'https://lekmer.se/barnrum/barnlampor-o-belysning/nattlampor/a-little-lovely-company-nattlampa-mini-pear-mint', 42),
(1082, 'Smash Up, The Big Geeky box', 0, '', 0),
(1083, 'Prenumeration på Bamse', 0, '', 0),
(1084, 'Personlig Tränare (för att stärka musklerna och få kondition lugnt och behagligt )', 0, '', 0),
(1428, 'Svart eller grön vagn till bobbycar', 0, '', 42),
(1152, 'Presentkort på hm ', 0, '', 9),
(1424, 'Pour over-kanna', 0, 'http://cdon.se/hushallsapparater/melitta-pour-over-vattenkanna-p41894532?ds_rl=1247131&gclid=EAIaIQobChMIlL30_ufc2QIVSGUZCh2X8Ap9EAQYDSABEgJ_2vD_BwE&gclsrc=aw.ds&dclid=CIr46Pvo3NkCFVRPGAodrH0AtQ', 8),
(1227, 'fritös', 0, 'https://www.ellos.se/champion-electronics/fritos-3-0-liter-chfr030/1513553', 8),
(1422, 'Boken om kaffets historia', 0, 'https://www.adlibris.com/se/bok/kaffeboken-9789178435081?gclid=EAIaIQobChMIztzq3uTc2QIVEZQYCh2gSQuvEAQYASABEgKZb_D_BwE', 8),
(1104, 'DUPLO lego från 2 år (ej "Min första lastbil")', 0, 'https://lekmer.se/lego-duplo/', 0),
(1239, 'lego classic-set', 0, 'https://lekmer.se/10702-fantasiset/p/75911', 9),
(1235, 'slime lab', 0, 'https://lekmer.se/funny-fart-lab/p/75326', 9),
(1185, 'Krustång', 0, 'https://www.mediamarkt.se/sv/product/_philips-multi-styler-hp8698-00-1199575.html?rbtc=%7C%7C%7C%7Cp%7C%7C&gclid=EAIaIQobChMIrNCwjP7O1gIVVF8ZCh33XwYvEAQYASABEgIfUfD_BwE&gclsrc=aw.ds&dclid=CLbAzKL-ztYC', 0),
(1199, 'MAYKA plupp-rader 2', 0, 'https://www.br.se/c/mayka-mellan-2-plupprader2-m-rosa?id=000000000123234009', 9),
(1166, 'klossar', 0, 'https://lekmer.se/leksaker/babyleksaker/traklossar/pumpkin-träklossar-123-abc-vit-blå', 42),
(1200, 'MAYKA plupp-rader 4', 0, 'https://www.br.se/c/mayka-stor-4-plupprader2-m-svart?id=000000000123235008', 9),
(1112, 'Metal cardcase grå', 0, 'http://www.accent.se/produkter/dd/dd-metal-cardcase/299477C16S-1', 0),
(1141, 'pengar till tatuering', 0, '', 8),
(1118, 'Elektrisk mangel', 0, '', 0),
(1343, 'Cleansing Milk', 0, 'http://www.unani.es/product/cleansing-milk/', 3),
(1241, 'el-trumset', 0, '', 26),
(1221, 'Spel  Soggy Doggy', 0, 'https://www.br.se/vaara-kategorier/braedspel-familjespel-saellskapsspel-och-spelkort/barnspel/soggy-doggy?id=000000000100549001', 4),
(1209, 'little live pets', 0, 'https://www.br.se/c/llp-igelkotthus?id=000000000108260001&gclid=CjwKCAjw-NXPBRB4EiwAVNRLKp_VqbVFX13gXoFUbzHbFwLMUpGVz0R6XAswSJ_ANWz4i8H4U7F7PhoCW_QQAvD_BwE&ef_id=VuHgOQAAAPC42mm-:20171029102538:s', 9),
(1420, 'Bok om kaffe', 0, 'https://www.bokus.com/bok/9789185329854/en-handbok-kaffe/?source=googleps&gclid=EAIaIQobChMIztzq3uTc2QIVEZQYCh2gSQuvEAQYAyABEgLO__D_BwE', 8),
(1240, 'Lego city vulkanhelikopter', 0, 'https://www.br.se/vaara-kategorier/byggklossar-och-byggleksaker/byggklossar/lego-city-60123-vulkan-transporthelikopter?id=000000000105627001', 26),
(1135, 'Armband (guldfärgat, enkelt)', 0, '', 0),
(1191, 'Pyssel,', 0, 'https://www.rusta.com/se/pyssellada-p771112630101.aspx', 9),
(1176, 'Fårskinnstoffel strl 38', 0, 'https://www.xxl.se/comfo-comfo01-tofflor-dam/p/1126265_1_style?gclid=EAIaIQobChMIw7rrurqg1gIVFZSyCh0HwAQnEAQYAyABEgKC3fD_BwE&gclsrc=aw.ds&dclid=CNT76Iq7oNYCFVaVGAodLH4FLw', 0),
(1139, 'En fin glittrande ring &#128540;', 0, '', 0),
(1261, 'Swedish Tonic', 0, 'http://swedishtonic.com', 14),
(1253, 'Lavalampa', 0, '', 0),
(1262, 'Spy Code - Safe Breaker', 0, 'https://www.google.se/search?q=safe+breaker+spy+code&prmd=isvn&source=lnms&tbm=isch&sa=X&ved=0ahUKEwjw-vbGn63XAhVnG5oKHXoTBw8Q_AUICSgB&biw=412&bih=670', 0),
(1432, 'Flygande älva', 0, 'http://www.toygamecenter.com/flutterbye-deluxe-light-up-rainbow-flying-fairy-doll?___store=se', 34),
(1433, 'Hatchimal baby', 0, 'https://www.toysrus.se/search?q=hatchibabies&lang=sv_SE', 34),
(1278, 'Mjuka jeans strl 80 (världens bästa barn jeans!)', 0, 'https://www.kappahl.com/sv-se/barn/byxor-leggings/fodrade-byxor/828376', 41),
(1279, 'Tröja strl 80 ', 0, 'https://www.polarnopyret.se/6man-2ar/trojor', 41),
(1286, 'Tvådelad pyjamas strl 86 eller 92', 0, '', 41),
(1293, 'Grytunderlägg 2 st', 0, 'http://m.hm.com/se/product/69781?article=69781-A', 0),
(1414, 'Strykbräda + ärmbräda', 0, '', 0),
(1299, 'Skidjacka strl S (eller M?)', 0, 'https://www.stadium.se/sport/alpint/skidklader/250175102/wearcolour.w-ida-jkt.grey-melange', 0),
(1304, 'Lökhackare 3 st', 0, 'https://m.clasohlson.com/se/Lökhackare-Coline/44-1490', 5),
(1309, '1 kg honung =)', 0, '', 8),
(1310, 'LOGG kalsonger strl 170', 0, 'http://www.hm.com/se/product/71733?article=71733-G', 26),
(1427, 'Koppnings-skedar 4 st', 0, 'https://www.cremashop.se/sv/products/motta/tasting-spoon', 8),
(1312, 'T-shirtnattlinne', 0, '', 11),
(1322, 'Boken Beauty food', 0, 'https://www.adlibris.com/se/bok/beautyfood-85-recept-for-skonhet-inifran-9789113076706', 0),
(1323, 'Stickad tröja strl 80', 0, 'https://m.zara.com/se/sv/tröja-med-pepparkaksgubbe-p06254560.html?v1=5231518&v2=269287', 0),
(1325, 'Pengar på Steam', 0, '', 30),
(1328, '2 salladslådor', 0, 'https://shop.electrolux.se/Kylskåp-och-frys/Kylskåp-och-frys/Korgar/Salladslåda-för-kyl-frys%2C-halvstor/p/2651105021', 0),
(1330, 'Planet Earth 2 4k Blue-Ray', 5, 'http://cdon.se/film/planet_earth_2_(4k_ultra_hd)_(2_disc)-42265630?gclid=CjwKCAiAo9_QBRACEiwASknDwTWFbDL6LeDGHYPQnlG8bOQJXJ-PtEjBBiGzyd_FSeZ62MleUhKl7xoCkhcQAvD_BwE#fo_c=1753&fo_k=ea17a60d4a097a65d036', 14),
(1334, 'Sicksackbuske', 0, '', 8),
(1425, '2 kg rå-kaffe Guatemala ', 0, 'http://tunestams.se/produkt/rakaffe-arabica-guatemala/', 8),
(1423, 'Bistro presskanna', 0, 'https://m.ikea.com/se/sv/catalog/products/art/60241389/', 8),
(1434, 'Mössa', 0, 'https://www.emp-shop.se/p/anti-possession---slouch-beanie/379743.html#start=10', 33),
(1435, 'Bälte', 3, 'https://www.emp-shop.se/p/anti-possession/381462.html#start=11', 33),
(1441, 'Cardigan, Armégrön stl.L', 0, 'https://letsdeal.se/deals/wkb7sfb5wj14', 3),
(1442, 'Cardigan, Armégrön stl.L', 0, 'https://letsdeal.se/deals/wkb7sfb5wj14', 0),
(1443, 'Ljuspendel', 0, 'https://royaldesign.se/sconce-pendel-massing', 6),
(1444, 'Ljushållare 2 st', 0, 'https://www.bybinett.se/ester-erik-ljushallare-blank-massing', 6),
(1445, 'Lackerade parljus kritvita', 0, 'https://www.bybinett.se/ester-erik-parljus-lackade-kritvit-42-cm', 6),
(1446, 'Lackerade parljus kritvita', 0, 'https://www.bybinett.se/ester-erik-parljus-lackade-kritvit-42-cm', 0),
(1436, 'Doftstickor, Yalda', 0, 'https://www.rituals.com/sv-se/the-ritual-of-yalda-fragrance-sticks-1102501.html?source=cop#start=1', 3),
(1409, 'Fottvättare', 0, 'https://stuffcandy.com/products/foot-scrub-exfoliating-massager', 5),
(1410, 'Fottvättare', 0, 'https://stuffcandy.com/products/foot-scrub-exfoliating-massager', 0),
(1384, 'Något med 24 logo', 0, 'http://www.shoptv.com/24/index.php?v=24', 5),
(1357, 'Tröja', 0, 'https://pro.teechip.com/24-movies?coupon=10OFFTHANK', 0),
(1359, 'Necessär, stor och praktisk. Lättåtkomligt. Ev annan modell', 0, 'https://www.bjornborg.com/se/core-black-core715-01', 0),
(1431, 'Test åöä', 0, '', 1),
(1364, 'Grå Leviströja med hood', 0, '', 0),
(1365, 'Skidstrumpa (stl: 37)', 0, 'https://www.decathlon.se/skidstrumpa-500-junior-id_8368020.html#s35%2F38.', 0),
(1366, 'Underställ i ull', 0, '', 7),
(1367, 'Underställ i ull', 0, '', 0),
(1368, 'Dymo eller liknande', 0, 'https://www.dropbox.com/s/89o05dsg5qz1kz9/2017-12-01%2013.41.46.jpg?dl=0', 7),
(1370, 'Vattenpipa', 0, '', 5),
(1372, 'Parfym la vie est Belle ', 0, 'https://www.kicks.se/lancome/parfym/dam/parfym/la-vie-est-belle-edp-50-ml', 0),
(1373, 'Ekolikigkt klämmis eller matpaket från alexandphil', 0, 'https://alexphil.se/wishlist/?action=add&id=85', 42),
(1376, 'Björn Borg-kalsonger', 0, '', 30),
(1377, 'Vattenpipa', 0, '', 0),
(1387, 'Bio-duplo', 0, 'https://goodforkids.se/bioduplo-40-pack-med-byggplatta-educational-blocks-blagron-biobuddi.html?fee=1&fep=4266&utm_medium=social&utm_source=facebook&utm_campaign=GFK-Social-4-FB006-4-14-DAYS-CAROUSEL-', 0),
(1390, 'Sopset i trä', 0, 'https://bolist.se/produkt/sopset-rustik-exklusivt-starks-halvlangt-2st/?article=7392460102251&gclid=CjwKCAiApJnRBRBlEiwAPTgmxOGnge5f2nuIfxUVfwqSon22-KhHOuLGCWvwc0E8tggoRE6fSROgHBoCux8QAvD_BwE', 8),
(1389, 'Food pharmacy receptbok', 0, 'https://www.adlibris.com/se/bok/food-pharmacy-kokboken-9789174246827?gclid=CjwKCAiApJnRBRBlEiwAPTgmxJWXwBRZz3LB0Qf500YiektdTzO-nKFjEG0y4GbVFZfQ_qjA70owXBoCjQ4QAvD_BwE', 8),
(1393, 'Smartwatch ', 0, '', 2),
(1394, 'Spel Pie face', 0, 'https://www.toysrus.se/product/spel-pie-face-showdown?id=000000000101559001&gclid=CjwKCAiA07PRBRBJEiwAS20SIAt9mFF02pt276bFGQqtaOfxYwRM4XtbZrmtDonWSsXKQoSst7lBtRoCUscQAvD_BwE&ef_id=Wi0KeAAAAH4RGTrV:201', 9),
(1395, 'Tid till Fiskspa till fötterna ', 0, '', 8),
(1397, 'Spel: Debattera mera', 3, 'https://www.smartasaker.se/sv/artiklar/debattera-mera.html?utm_medium=email&utm_source=Ungapped&utm_campaign=NB_32_julklappstips&utm_custom%5Bungapped%5D=114ab2d0-875f-44ad-b25a-43f7d3623cd8', 11),
(1400, 'Bok - The slow regard of silent things', 0, 'https://www.bokus.com/bok/9781473209336/the-slow-regard-of-silent-things/', 3),
(1416, 'Leksaksbil', 0, 'https://www.eurotoys.se/main/index.asp?site=479&vn=24-002590&gclid=EAIaIQobChMI6Kyn-_-g2QIVChQbCh2GOwATEAQYByABEgKr5fD_BwE#productstart', 42),
(1402, 'The ritual of ayurveda ', 0, 'https://www.rituals.com/sv-se/the-ritual-of-ayurveda-body-cream-5487.html#start=1', 0),
(1405, 'Stapel/bygg klossar', 0, '', 0),
(1406, 'Askhink', 0, '', 8),
(1407, 'Askhink', 0, '', 0),
(1415, 'Bok - The slow regard of silent things', 0, 'https://www.bokus.com/bok/9781473209336/the-slow-regard-of-silent-things/', 0),
(1408, 'Bok - The slow regard of silent things', 0, 'https://www.bokus.com/bok/9781473209336/the-slow-regard-of-silent-things/', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bought`
--
ALTER TABLE `bought`
 ADD PRIMARY KEY (`wishid`), ADD UNIQUE KEY `wishid` (`wishid`);

--
-- Indexes for table `relatives`
--
ALTER TABLE `relatives`
 ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
 ADD PRIMARY KEY (`testid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
MODIFY `testid` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `userid` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1447;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
