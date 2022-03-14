-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 14, 2022 at 01:50 PM
-- Server version: 5.7.33
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mover_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_trip`
--

CREATE TABLE `booking_trip` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `trip_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`) VALUES
(1, 'VOLKSWAGEN POLO'),
(2, 'Lada (ВАЗ) Vesta седан'),
(3, 'Lada (ВАЗ) Vesta Cross седан'),
(4, 'Lada (ВАЗ) Vesta Sport седан'),
(5, 'Lada (ВАЗ) Granta седан'),
(6, 'Lada (ВАЗ) Granta Cross универсал'),
(7, 'Lada (ВАЗ) Vesta SW универсал'),
(8, 'Lada (ВАЗ) Vesta SW Cross универсал'),
(9, 'Lada (ВАЗ) Largus универсал'),
(10, 'Lada (ВАЗ) Largus Cross универсал'),
(11, 'Lada (ВАЗ) Granta хэтчбек'),
(12, 'Lada (ВАЗ) Granta лифтбэк'),
(13, 'Lada (ВАЗ) Granta универсал'),
(14, 'Lada (ВАЗ) Niva внедорожник'),
(15, 'Lada (ВАЗ) XRAY кроссовер'),
(16, 'Lada (ВАЗ) XRAY Cross кроссовер'),
(17, 'Lada (ВАЗ) 2121 (4x4) внедорожник'),
(18, 'Lada (ВАЗ) 2131 (4x4) внедорожник'),
(19, 'Lada (ВАЗ) Largus фургон'),
(20, 'Lada (ВАЗ) 1111 (Oka)'),
(21, 'Lada (ВАЗ) 1922 (Bronto-Marsh)'),
(22, 'Lada (ВАЗ) 2101'),
(23, 'Lada (ВАЗ) 2102'),
(24, 'Lada (ВАЗ) 2103'),
(25, 'Lada (ВАЗ) 2104'),
(26, 'Lada (ВАЗ) 2105'),
(27, 'Lada (ВАЗ) 2106'),
(28, 'Lada (ВАЗ) 2107'),
(29, 'Lada (ВАЗ) 2108'),
(30, 'Lada (ВАЗ) 2109'),
(31, 'Lada (ВАЗ) 21099'),
(32, 'Lada (ВАЗ) 2110'),
(33, 'Lada (ВАЗ) 2111'),
(34, 'Lada (ВАЗ) 2112'),
(35, 'Lada (ВАЗ) 2113 (Samara2)'),
(36, 'Lada (ВАЗ) 2114 (Samara2)'),
(37, 'Lada (ВАЗ) 2115 (Samara2)'),
(38, 'Lada (ВАЗ) 2120 (Nadezhda)'),
(39, 'Lada (ВАЗ) 2121 (4x4)'),
(40, 'Lada (ВАЗ) 2123 (4x4)'),
(41, 'Lada (ВАЗ) 2131 (4x4)'),
(42, 'Lada (ВАЗ) 2329 (4x4)'),
(43, 'Lada (ВАЗ) 4x4 (Niva)'),
(44, 'Lada (ВАЗ) 4X4 Bronto'),
(45, 'Lada (ВАЗ) 4х4 Urban'),
(46, 'Lada (ВАЗ) Granta'),
(47, 'Lada (ВАЗ) Granta Sport'),
(48, 'Lada (ВАЗ) Kalina'),
(49, 'Lada (ВАЗ) Kalina Cross'),
(50, 'Lada (ВАЗ) Kalina NFR'),
(51, 'Lada (ВАЗ) Kalina Sport'),
(52, 'Lada (ВАЗ) Largus'),
(53, 'Lada (ВАЗ) Largus Cross'),
(54, 'Lada (ВАЗ) Priora'),
(55, 'Lada (ВАЗ) Samara II'),
(56, 'Lada (ВАЗ) Vesta'),
(57, 'Lada (ВАЗ) Vesta SW'),
(58, 'Lada (ВАЗ) XRAY'),
(59, 'Lada (ВАЗ) XRAY Cross'),
(60, 'ГАЗ «Газель-Next» микроавтобус'),
(61, 'ГАЗ «Газель-Next» грузовик'),
(62, 'ГАЗ «Газель-Next» микроавтобус'),
(63, 'ГАЗ «Газель-Next» фургон'),
(64, 'ГАЗ «Газель-Бизнес» 2705 фургон'),
(65, 'ГАЗ «Газель-Бизнес» 3302 бортовой грузовик'),
(66, 'ГАЗ «Соболь-Бизнес» 2217 микроавтобус'),
(67, 'ГАЗ «Соболь-Бизнес» 2310 бортовой грузовик'),
(68, 'ГАЗ «Газель-Бизнес» 3221 микроавтобус'),
(69, 'ГАЗ «Соболь-Бизнес» 2752 фургон'),
(70, 'ГАЗ Volga Siber'),
(71, 'ГАЗ «Волга» 3102'),
(72, 'ГАЗ «Волга» 3110'),
(73, 'ГАЗ «Волга» 31105'),
(74, 'ГАЗ «Волга» 3111'),
(75, 'ГАЗ «Газель-Бизнес» 2705'),
(76, 'ГАЗ «Газель-Бизнес» 3221'),
(77, 'ГАЗ «Газель-Бизнес» 3302'),
(78, 'ГАЗ «Газель» 2705'),
(79, 'ГАЗ «Газель» 3221'),
(80, 'ГАЗ «Газель» 3302'),
(81, 'ГАЗ «Соболь-Бизнес» 2217'),
(82, 'ГАЗ «Соболь-Бизнес» 2310'),
(83, 'ГАЗ «Соболь-Бизнес» 2752'),
(84, 'ГАЗ «Соболь/Баргузин» 2217'),
(85, 'ГАЗ «Соболь» 2310'),
(86, 'ГАЗ «Соболь» 2752'),
(87, 'УАЗ Hunter внедорожник'),
(88, 'УАЗ Patriot внедорожник'),
(89, 'УАЗ Pickup пикап'),
(90, 'УАЗ Профи бортовой грузовик'),
(91, 'УАЗ Буханка фургон'),
(92, 'УАЗ Буханка микроавтобус'),
(93, 'УАЗ Буханка бортовой грузовик'),
(94, 'УАЗ 2360'),
(95, 'УАЗ 3151'),
(96, 'УАЗ 31512'),
(97, 'УАЗ 31514'),
(98, 'УАЗ 31519'),
(99, 'УАЗ 3153'),
(100, 'УАЗ 3159'),
(101, 'УАЗ 3160'),
(102, 'УАЗ 3162'),
(103, 'УАЗ 3163'),
(104, 'УАЗ 3303'),
(105, 'УАЗ 33036'),
(106, 'УАЗ 33094'),
(107, 'УАЗ 3741'),
(108, 'УАЗ 3909'),
(109, 'УАЗ 39094'),
(110, 'УАЗ 39095'),
(111, 'УАЗ 39099'),
(112, 'УАЗ 3962'),
(113, 'УАЗ 39625'),
(114, 'УАЗ 396259'),
(115, 'УАЗ 469'),
(116, 'УАЗ Hunter'),
(117, 'УАЗ Patriot'),
(118, 'УАЗ Patriot Sport'),
(119, 'УАЗ Pickup'),
(120, 'УАЗ Буханка'),
(121, 'Audi A8 седан'),
(122, 'Audi A4 седан'),
(123, 'Audi A6 седан'),
(124, 'Audi S5  купе'),
(125, 'Audi A5  купе'),
(126, 'Audi A3 седан'),
(127, 'Audi RS 6 универсал'),
(128, 'Audi A4 универсал'),
(129, 'Audi А5 Sportback лифтбэк'),
(130, 'Audi A7 Sportback лифтбэк'),
(131, 'Audi S5  лифтбэк'),
(132, 'Audi А3  Sportback хэтчбек'),
(133, 'Audi A6 allroad quattro универсал'),
(134, 'Audi E-tron кроссовер'),
(135, 'Audi Q8 кроссовер'),
(136, 'Audi SQ8 кроссовер'),
(137, 'Audi Q3 кроссовер'),
(138, 'Audi Q3 Sportback кроссовер'),
(139, 'Audi Q5 кроссовер'),
(140, 'Audi SQ5 кроссовер'),
(141, 'Audi Q7 кроссовер'),
(142, 'Audi 100'),
(143, 'Audi 80'),
(144, 'Audi 90'),
(145, 'Audi A1 Sportback'),
(146, 'Audi A2'),
(147, 'Audi A3'),
(148, 'Audi A4'),
(149, 'Audi A4 allroad'),
(150, 'Audi A5 '),
(151, 'Audi A6'),
(152, 'Audi A6 allroad quattro'),
(153, 'Audi A7 Sportback'),
(154, 'Audi A8'),
(155, 'Audi Cabriolet'),
(156, 'Audi Q2'),
(157, 'Audi Q3'),
(158, 'Audi Q5'),
(159, 'Audi Q7'),
(160, 'Audi R8'),
(161, 'Audi R8 GT'),
(162, 'Audi RS 3'),
(163, 'Audi RS 4'),
(164, 'Audi RS 5'),
(165, 'Audi RS 6'),
(166, 'Audi RS 7 Sportback'),
(167, 'Audi RS Q3'),
(168, 'Audi RS Q3 Sportback'),
(169, 'Audi S3'),
(170, 'Audi S4'),
(171, 'Audi S5 '),
(172, 'Audi S6'),
(173, 'Audi S7 Sportback'),
(174, 'Audi S8'),
(175, 'Audi SQ5'),
(176, 'Audi SQ7'),
(177, 'Audi TT'),
(178, 'Audi TT RS'),
(179, 'Audi TT RS'),
(180, 'Audi TTS'),
(181, 'Renault Logan Stepway седан'),
(182, 'Renault Logan седан'),
(183, 'Renault Sandero хэтчбек'),
(184, 'Renault Arkana кроссовер'),
(185, 'Renault Kaptur кроссовер'),
(186, 'Renault Duster кроссовер'),
(187, 'Renault Duster кроссовер'),
(188, 'Renault Sandero Stepway кроссовер'),
(189, 'Renault Master фургон'),
(190, 'Renault 19'),
(191, 'Renault Avantime'),
(192, 'Renault Clio'),
(193, 'Renault Clio RS'),
(194, 'Renault Dokker'),
(195, 'Renault Dokker Stepway'),
(196, 'Renault Duster'),
(197, 'Renault Espace'),
(198, 'Renault Fluence'),
(199, 'Renault Grand Scenic'),
(200, 'Renault Kangoo'),
(201, 'Renault Kangoo Z.E.'),
(202, 'Renault Kaptur'),
(203, 'Renault Koleos'),
(204, 'Renault Laguna'),
(205, 'Renault Latitude'),
(206, 'Renault Logan'),
(207, 'Renault Master'),
(208, 'Renault Megane'),
(209, 'Renault Megane RS'),
(210, 'Renault Modus'),
(211, 'Renault Safrane'),
(212, 'Renault Sandero'),
(213, 'Renault Sandero Stepway'),
(214, 'Renault Scenic'),
(215, 'Renault Sport Spider'),
(216, 'Renault Symbol'),
(217, 'Renault Trafic'),
(218, 'Renault Twingo'),
(219, 'Renault TWIZY'),
(220, 'Renault Vel Satis'),
(221, 'Volkswagen Polo седан'),
(222, 'Volkswagen Jetta седан'),
(223, 'Volkswagen Passat седан'),
(224, 'Volkswagen Golf хэтчбек'),
(225, 'Volkswagen Teramont кроссовер'),
(226, 'Volkswagen Tiguan кроссовер'),
(227, 'Volkswagen Tiguan кроссовер'),
(228, 'Volkswagen Touareg внедорожник'),
(229, 'Volkswagen Transporter минивэн'),
(230, 'Volkswagen Crafter грузовик'),
(231, 'Volkswagen Crafter фургон'),
(232, 'Volkswagen California микроавтобус'),
(233, 'Volkswagen Transporter фургон'),
(234, 'Volkswagen Transporter бортовой грузовик'),
(235, 'Volkswagen Caravelle микроавтобус'),
(236, 'Volkswagen Multivan микроавтобус'),
(237, 'Volkswagen Amarok'),
(238, 'Volkswagen Arteon'),
(239, 'Volkswagen Beetle'),
(240, 'Volkswagen Bora'),
(241, 'Volkswagen Caddy'),
(242, 'Volkswagen California'),
(243, 'Volkswagen Caravelle'),
(244, 'Volkswagen Corrado'),
(245, 'Volkswagen Crafter'),
(246, 'Volkswagen Cross Touran'),
(247, 'Volkswagen CrossGolf'),
(248, 'Volkswagen CrossPolo'),
(249, 'Volkswagen Eos'),
(250, 'Volkswagen Fox'),
(251, 'Volkswagen Golf'),
(252, 'Volkswagen Golf GTE'),
(253, 'Volkswagen Golf GTI'),
(254, 'Volkswagen Golf Plus'),
(255, 'Volkswagen Golf R'),
(256, 'Volkswagen Jetta'),
(257, 'Volkswagen Lupo'),
(258, 'Volkswagen Multivan'),
(259, 'Volkswagen Passat'),
(260, 'Volkswagen Passat Alltrack'),
(261, 'Volkswagen Passat CC'),
(262, 'Volkswagen Phaeton'),
(263, 'Volkswagen Pointer'),
(264, 'Volkswagen Polo'),
(265, 'Volkswagen Polo GTI'),
(266, 'Volkswagen Routan'),
(267, 'Volkswagen Scirocco'),
(268, 'Volkswagen Sharan'),
(269, 'Volkswagen Teramont'),
(270, 'Volkswagen Tiguan'),
(271, 'Volkswagen Touareg'),
(272, 'Volkswagen Touran'),
(273, 'Volkswagen Transporter'),
(274, 'Volkswagen Vento'),
(275, 'Volkswagen W12'),
(276, 'Kia K900 седан'),
(277, 'Kia Cerato седан'),
(278, 'Kia Rio седан'),
(279, 'Kia К5 седан'),
(280, 'Kia Stinger лифтбэк'),
(281, 'Kia Rio хэтчбек'),
(282, 'Kia Rio хэтчбек'),
(283, 'Kia Stinger лифтбэк'),
(284, 'Kia ceed универсал'),
(285, 'Kia ceed хэтчбек'),
(286, 'Kia ceed универсал'),
(287, 'Kia Picanto хэтчбек'),
(288, 'Kia Seltos кроссовер'),
(289, 'Kia Mohave внедорожник'),
(290, 'Kia Soul кроссовер'),
(291, 'Kia Sorento Prime кроссовер'),
(292, 'Kia Sorento кроссовер'),
(293, 'Kia Sportage кроссовер'),
(294, 'Kia ceed кроссовер'),
(295, 'Kia Carnival минивэн'),
(296, 'Kia Avella'),
(297, 'Kia Besta'),
(298, 'Kia Bongo'),
(299, 'Kia Capital'),
(300, 'Kia Carens'),
(301, 'Kia Carnival'),
(302, 'Kia ceed'),
(303, 'Kia ceed GT'),
(304, 'Kia Cerato'),
(305, 'Kia Cerato Koup'),
(306, 'Kia Clarus'),
(307, 'Kia Concord'),
(308, 'Kia Enterprise'),
(309, 'Kia Joice'),
(310, 'Kia K2700'),
(311, 'Kia Magentis'),
(312, 'Kia Mohave'),
(313, 'Kia Opirus'),
(314, 'Kia Optima'),
(315, 'Kia Picanto'),
(316, 'Kia Potentia'),
(317, 'Kia Pregio'),
(318, 'Kia Pride'),
(319, 'Kia Quoris'),
(320, 'Kia Retona'),
(321, 'Kia Rio'),
(322, 'Kia Roadster'),
(323, 'Kia Sedona'),
(324, 'Kia Sephia'),
(325, 'Kia Shuma'),
(326, 'Kia Sorento'),
(327, 'Kia Sorento Prime'),
(328, 'Kia Soul'),
(329, 'Kia Spectra'),
(330, 'Kia Sportage'),
(331, 'Kia Stinger'),
(332, 'Kia Venga'),
(333, 'Kia Visto'),
(334, 'Mercedes-Benz CLA  AMG седан'),
(335, 'Mercedes-Benz CLS  седан'),
(336, 'Mercedes-Benz S седан'),
(337, 'Mercedes-Benz Maybach S седан'),
(338, 'Mercedes-Benz A седан'),
(339, 'Mercedes-Benz C AMG купе'),
(340, 'Mercedes-Benz C AMG седан'),
(341, 'Mercedes-Benz C седан'),
(342, 'Mercedes-Benz C купе'),
(343, 'Mercedes-Benz E AMG седан'),
(344, 'Mercedes-Benz E купе'),
(345, 'Mercedes-Benz E седан'),
(346, 'Mercedes-Benz AMG GT купе'),
(347, 'Mercedes-Benz A хэтчбек'),
(348, 'Mercedes-Benz E универсал'),
(349, 'Mercedes-Benz AMG GT хэтчбек'),
(350, 'Mercedes-Benz GLE Coupe кроссовер'),
(351, 'Mercedes-Benz GLA кроссовер'),
(352, 'Mercedes-Benz GLB внедорожник'),
(353, 'Mercedes-Benz GLE Coupe AMG кроссовер'),
(354, 'Mercedes-Benz GLS внедорожник'),
(355, 'Mercedes-Benz EQC кроссовер'),
(356, 'Mercedes-Benz GLE кроссовер'),
(357, 'Mercedes-Benz G внедорожник'),
(358, 'Mercedes-Benz G AMG внедорожник'),
(359, 'Mercedes-Benz GLC кроссовер'),
(360, 'Mercedes-Benz GLC AMG кроссовер'),
(361, 'Mercedes-Benz GLC Coupe кроссовер'),
(362, 'Mercedes-Benz GLC Coupe AMG кроссовер'),
(363, 'Mercedes-Benz Sprinter фургон'),
(364, 'Mercedes-Benz Sprinter микроавтобус'),
(365, 'Mercedes-Benz Vito фургон'),
(366, 'Mercedes-Benz Vito микроавтобус'),
(367, 'Mercedes-Benz V микроавтобус'),
(368, 'Mercedes-Benz 200'),
(369, 'Mercedes-Benz A'),
(370, 'Mercedes-Benz A AMG'),
(371, 'Mercedes-Benz AMG GT'),
(372, 'Mercedes-Benz B'),
(373, 'Mercedes-Benz C'),
(374, 'Mercedes-Benz C AMG'),
(375, 'Mercedes-Benz Citan'),
(376, 'Mercedes-Benz CL'),
(377, 'Mercedes-Benz CL AMG'),
(378, 'Mercedes-Benz CLA '),
(379, 'Mercedes-Benz CLA  AMG'),
(380, 'Mercedes-Benz CLC'),
(381, 'Mercedes-Benz CLK'),
(382, 'Mercedes-Benz CLS '),
(383, 'Mercedes-Benz CLS AMG'),
(384, 'Mercedes-Benz E'),
(385, 'Mercedes-Benz E AMG'),
(386, 'Mercedes-Benz G'),
(387, 'Mercedes-Benz G AMG'),
(388, 'Mercedes-Benz GL'),
(389, 'Mercedes-Benz GL AMG'),
(390, 'Mercedes-Benz GLA'),
(391, 'Mercedes-Benz GLA AMG'),
(392, 'Mercedes-Benz GLC'),
(393, 'Mercedes-Benz GLC AMG'),
(394, 'Mercedes-Benz GLC Coupe'),
(395, 'Mercedes-Benz GLC Coupe AMG'),
(396, 'Mercedes-Benz GLE'),
(397, 'Mercedes-Benz GLE AMG'),
(398, 'Mercedes-Benz GLE Coupe'),
(399, 'Mercedes-Benz GLE Coupe AMG'),
(400, 'Mercedes-Benz GLK'),
(401, 'Mercedes-Benz GLS'),
(402, 'Mercedes-Benz GLS AMG'),
(403, 'Mercedes-Benz M'),
(404, 'Mercedes-Benz M AMG'),
(405, 'Mercedes-Benz Maybach S'),
(406, 'Mercedes-Benz R'),
(407, 'Mercedes-Benz R AMG'),
(408, 'Mercedes-Benz S'),
(409, 'Mercedes-Benz S AMG'),
(410, 'Mercedes-Benz SL'),
(411, 'Mercedes-Benz SL AMG'),
(412, 'Mercedes-Benz SLC'),
(413, 'Mercedes-Benz SLC AMG'),
(414, 'Mercedes-Benz SLK'),
(415, 'Mercedes-Benz SLK AMG'),
(416, 'Mercedes-Benz SLR'),
(417, 'Mercedes-Benz SLS AMG'),
(418, 'Mercedes-Benz Sprinter'),
(419, 'Mercedes-Benz V'),
(420, 'Mercedes-Benz Vaneo'),
(421, 'Mercedes-Benz Vario'),
(422, 'Mercedes-Benz Viano'),
(423, 'Mercedes-Benz Vito'),
(424, 'Mercedes-Benz W100'),
(425, 'Mercedes-Benz X-class');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'Пользователь'),
(2, 'Водитель'),
(3, 'Админ');

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `id` int(11) NOT NULL,
  `from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT '0',
  `car_seats` int(11) DEFAULT NULL,
  `car_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status_id` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trip`
--

INSERT INTO `trip` (`id`, `from`, `to`, `time`, `date`, `price`, `car_seats`, `car_id`, `user_id`, `status_id`, `created_at`) VALUES
(2, 'Казань', 'Москва', '12:03', '2022-03-18', 0, NULL, NULL, 17, 1, '2022-03-13 22:30:55');

-- --------------------------------------------------------

--
-- Table structure for table `trip_status`
--

CREATE TABLE `trip_status` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trip_status`
--

INSERT INTO `trip_status` (`id`, `name`) VALUES
(1, 'Опубликован'),
(2, 'Нет мест'),
(3, 'Завершен');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mid_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'user.svg',
  `rides` int(11) DEFAULT '0',
  `rating` double DEFAULT NULL,
  `car_id` int(11) DEFAULT '1',
  `role_id` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `phone`, `first_name`, `last_name`, `mid_name`, `photo_url`, `rides`, `rating`, `car_id`, `role_id`, `created_at`) VALUES
(7, 'butman90@bk.ru', '4297f44b13955235245b2497399d7a93', '79178984606', 'rogov', 'rogov', 'rogov', 'user.svg', 0, NULL, 1, 1, '2022-03-13 21:02:59'),
(8, 'butman90@bk.ru', '4297f44b13955235245b2497399d7a93', '79178984606', 'rogov', 'rogov', 'rogov', 'user.svg', 0, NULL, 1, 1, '2022-03-13 21:09:39'),
(9, 'butman90@bk.ru', '4297f44b13955235245b2497399d7a93', '123', '123', '123', '123', 'user.svg', 0, NULL, 1, 1, '2022-03-13 21:10:22'),
(10, 'butman90@bk.ru', '4297f44b13955235245b2497399d7a93', '123', '123', '123', '123', 'user.svg', 0, NULL, 1, 1, '2022-03-13 21:11:09'),
(11, 'avavionmvm@gmail.com', '47c2466da490df86916a5ade3cb73fcf', '123123123131', 'Алан', 'Богов', 'Андреевич', 'user.svg', 0, NULL, 1, 1, '2022-03-13 21:13:08'),
(12, 'butman91@bk.ru', '4c4711ea06c811b55afe1017dc3f39dc', '1231313', 'rogov', 'rogov', 'rogov', 'user.svg', 0, NULL, 1, 1, '2022-03-13 21:15:28'),
(13, 'butman92@bk.ru', '202cb962ac59075b964b07152d234b70', '123', '123', '123', '123', 'user.svg', 0, NULL, 1, 1, '2022-03-13 21:35:35'),
(14, 'butman95@bk.ru', '202cb962ac59075b964b07152d234b70', '123', '123', '123', '123', 'user.svg', 0, NULL, 1, 1, '2022-03-13 21:36:08'),
(15, 'butman96@bk.ru', '202cb962ac59075b964b07152d234b70', '123', '123', '123', '123', 'user.svg', 0, NULL, 1, 1, '2022-03-13 21:36:24'),
(16, 'butman46@bk.ru', '202cb962ac59075b964b07152d234b70', '123', '123', '123', '123', 'user.svg', 0, NULL, 1, 1, '2022-03-13 21:54:19'),
(17, 'butman1236@bk.ru', 'd41d8cd98f00b204e9800998ecf8427e', '123', 'Акакий', 'Какиев', 'Какиевич', 'user.svg', 0, NULL, 1, 1, '2022-03-13 22:24:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_trip`
--
ALTER TABLE `booking_trip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trip`
--
ALTER TABLE `trip`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `trip_status`
--
ALTER TABLE `trip_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `car_id` (`car_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_trip`
--
ALTER TABLE `booking_trip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=426;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `trip`
--
ALTER TABLE `trip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trip_status`
--
ALTER TABLE `trip_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `trip`
--
ALTER TABLE `trip`
  ADD CONSTRAINT `trip_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `trip_status` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
