-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 08, 2019 at 05:37 PM
-- Server version: 5.7.14
-- PHP Version: 7.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carnoma`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE IF NOT EXISTS `brand` (
  `BrandId` bigint(20) NOT NULL AUTO_INCREMENT,
  `BrandTitle` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BrandLogo` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BrandDescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `CreateDateTime` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ModifiedDateTime` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`BrandId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brand_category_relation`
--

DROP TABLE IF EXISTS `brand_category_relation`;
CREATE TABLE IF NOT EXISTS `brand_category_relation` (
  `RowId` bigint(20) NOT NULL AUTO_INCREMENT,
  `BrandId` bigint(20) NOT NULL,
  `CategoryId` bigint(20) NOT NULL,
  PRIMARY KEY (`RowId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `CityId` bigint(20) NOT NULL AUTO_INCREMENT,
  `CityStateId` bigint(20) NOT NULL COMMENT 'from table state',
  `CityName` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`CityId`)
) ENGINE=InnoDB AUTO_INCREMENT=441 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`CityId`, `CityStateId`, `CityName`) VALUES
(1, 1, 'تبريز'),
(2, 1, 'كندوان'),
(3, 1, 'بندر شرفخانه'),
(4, 1, 'مراغه'),
(5, 1, 'ميانه'),
(6, 1, 'شبستر'),
(7, 1, 'مرند'),
(8, 1, 'جلفا'),
(9, 1, 'سراب'),
(10, 1, 'هاديشهر'),
(11, 1, 'بناب'),
(12, 1, 'كليبر'),
(13, 1, 'تسوج'),
(14, 1, 'اهر'),
(15, 1, 'هريس'),
(16, 1, 'عجبشير'),
(17, 1, 'هشترود'),
(18, 1, 'ملكان'),
(19, 1, 'بستان آباد'),
(20, 1, 'ورزقان'),
(21, 1, 'اسكو'),
(22, 1, 'آذر شهر'),
(23, 1, 'قره آغاج'),
(24, 1, 'ممقان'),
(25, 1, 'صوفیان'),
(26, 1, 'ایلخچی'),
(27, 1, 'خسروشهر'),
(28, 1, 'باسمنج'),
(29, 1, 'سهند'),
(30, 2, 'اروميه'),
(31, 2, 'نقده'),
(32, 2, 'ماكو'),
(33, 2, 'تكاب'),
(34, 2, 'خوي'),
(35, 2, 'مهاباد'),
(36, 2, 'سر دشت'),
(37, 2, 'چالدران'),
(38, 2, 'بوكان'),
(39, 2, 'مياندوآب'),
(40, 2, 'سلماس'),
(41, 2, 'شاهين دژ'),
(42, 2, 'پيرانشهر'),
(43, 2, 'سيه چشمه'),
(44, 2, 'اشنويه'),
(45, 2, 'چایپاره'),
(46, 2, 'پلدشت'),
(47, 2, 'شوط'),
(48, 3, 'اردبيل'),
(49, 3, 'سرعين'),
(50, 3, 'بيله سوار'),
(51, 3, 'پارس آباد'),
(52, 3, 'خلخال'),
(53, 3, 'مشگين شهر'),
(54, 3, 'مغان'),
(55, 3, 'نمين'),
(56, 3, 'نير'),
(57, 3, 'كوثر'),
(58, 3, 'كيوي'),
(59, 3, 'گرمي'),
(60, 4, 'اصفهان'),
(61, 4, 'فريدن'),
(62, 4, 'فريدون شهر'),
(63, 4, 'فلاورجان'),
(64, 4, 'گلپايگان'),
(65, 4, 'دهاقان'),
(66, 4, 'نطنز'),
(67, 4, 'نايين'),
(68, 4, 'تيران'),
(69, 4, 'كاشان'),
(70, 4, 'فولاد شهر'),
(71, 4, 'اردستان'),
(72, 4, 'سميرم'),
(73, 4, 'درچه'),
(74, 4, 'کوهپایه'),
(75, 4, 'مباركه'),
(76, 4, 'شهرضا'),
(77, 4, 'خميني شهر'),
(78, 4, 'شاهين شهر'),
(79, 4, 'نجف آباد'),
(80, 4, 'دولت آباد'),
(81, 4, 'زرين شهر'),
(82, 4, 'آران و بيدگل'),
(83, 4, 'باغ بهادران'),
(84, 4, 'خوانسار'),
(85, 4, 'مهردشت'),
(86, 4, 'علويجه'),
(87, 4, 'عسگران'),
(88, 4, 'نهضت آباد'),
(89, 4, 'حاجي آباد'),
(90, 4, 'تودشک'),
(91, 4, 'ورزنه'),
(92, 6, 'ايلام'),
(93, 6, 'مهران'),
(94, 6, 'دهلران'),
(95, 6, 'آبدانان'),
(96, 6, 'شيروان چرداول'),
(97, 6, 'دره شهر'),
(98, 6, 'ايوان'),
(99, 6, 'سرابله'),
(100, 7, 'بوشهر'),
(101, 7, 'تنگستان'),
(102, 7, 'دشتستان'),
(103, 7, 'دير'),
(104, 7, 'ديلم'),
(105, 7, 'كنگان'),
(106, 7, 'گناوه'),
(107, 7, 'ريشهر'),
(108, 7, 'دشتي'),
(109, 7, 'خورموج'),
(110, 7, 'اهرم'),
(111, 7, 'برازجان'),
(112, 7, 'خارك'),
(113, 7, 'جم'),
(114, 7, 'کاکی'),
(115, 7, 'عسلویه'),
(116, 7, 'بردخون'),
(117, 8, 'تهران'),
(118, 8, 'ورامين'),
(119, 8, 'فيروزكوه'),
(120, 8, 'ري'),
(121, 8, 'دماوند'),
(122, 8, 'اسلامشهر'),
(123, 8, 'رودهن'),
(124, 8, 'لواسان'),
(125, 8, 'بومهن'),
(126, 8, 'تجريش'),
(127, 8, 'فشم'),
(128, 8, 'كهريزك'),
(129, 8, 'پاكدشت'),
(130, 8, 'چهاردانگه'),
(131, 8, 'شريف آباد'),
(132, 8, 'قرچك'),
(133, 8, 'باقرشهر'),
(134, 8, 'شهريار'),
(135, 8, 'رباط كريم'),
(136, 8, 'قدس'),
(137, 8, 'ملارد'),
(138, 9, 'شهركرد'),
(139, 9, 'فارسان'),
(140, 9, 'بروجن'),
(141, 9, 'چلگرد'),
(142, 9, 'اردل'),
(143, 9, 'لردگان'),
(144, 9, 'سامان'),
(145, 10, 'قائن'),
(146, 10, 'فردوس'),
(147, 10, 'بيرجند'),
(148, 10, 'نهبندان'),
(149, 10, 'سربيشه'),
(150, 10, 'طبس مسینا'),
(151, 10, 'قهستان'),
(152, 10, 'درمیان'),
(153, 11, 'مشهد'),
(154, 11, 'نيشابور'),
(155, 11, 'سبزوار'),
(156, 11, 'كاشمر'),
(157, 11, 'گناباد'),
(158, 11, 'طبس'),
(159, 11, 'تربت حيدريه'),
(160, 11, 'خواف'),
(161, 11, 'تربت جام'),
(162, 11, 'تايباد'),
(163, 11, 'قوچان'),
(164, 11, 'سرخس'),
(165, 11, 'بردسكن'),
(166, 11, 'فريمان'),
(167, 11, 'چناران'),
(168, 11, 'درگز'),
(169, 11, 'كلات'),
(170, 11, 'طرقبه'),
(171, 11, 'سر ولایت'),
(172, 12, 'بجنورد'),
(173, 12, 'اسفراين'),
(174, 12, 'جاجرم'),
(175, 12, 'شيروان'),
(176, 12, 'آشخانه'),
(177, 12, 'گرمه'),
(178, 12, 'ساروج'),
(179, 13, 'اهواز'),
(180, 13, 'ايرانشهر'),
(181, 13, 'شوش'),
(182, 13, 'آبادان'),
(183, 13, 'خرمشهر'),
(184, 13, 'مسجد سليمان'),
(185, 13, 'ايذه'),
(186, 13, 'شوشتر'),
(187, 13, 'انديمشك'),
(188, 13, 'سوسنگرد'),
(189, 13, 'هويزه'),
(190, 13, 'دزفول'),
(191, 13, 'شادگان'),
(192, 13, 'بندر ماهشهر'),
(193, 13, 'بندر امام خميني'),
(194, 13, 'اميديه'),
(195, 13, 'بهبهان'),
(196, 13, 'رامهرمز'),
(197, 13, 'باغ ملك'),
(198, 13, 'هنديجان'),
(199, 13, 'لالي'),
(200, 13, 'رامشیر'),
(201, 13, 'حمیدیه'),
(202, 13, 'دغاغله'),
(203, 13, 'ملاثانی'),
(204, 13, 'شادگان'),
(205, 13, 'ویسی'),
(206, 14, 'زنجان'),
(207, 14, 'ابهر'),
(208, 14, 'خدابنده'),
(209, 14, 'طارم'),
(210, 14, 'ماهنشان'),
(211, 14, 'خرمدره'),
(212, 14, 'ايجرود'),
(213, 14, 'زرين آباد'),
(214, 14, 'آب بر'),
(215, 14, 'قيدار'),
(216, 15, 'سمنان'),
(217, 15, 'شاهرود'),
(218, 15, 'گرمسار'),
(219, 15, 'ايوانكي'),
(220, 15, 'دامغان'),
(221, 15, 'بسطام'),
(222, 16, 'زاهدان'),
(223, 16, 'چابهار'),
(224, 16, 'خاش'),
(225, 16, 'سراوان'),
(226, 16, 'زابل'),
(227, 16, 'سرباز'),
(228, 16, 'نيكشهر'),
(229, 16, 'ايرانشهر'),
(230, 16, 'راسك'),
(231, 16, 'ميرجاوه'),
(232, 17, 'شيراز'),
(233, 17, 'اقليد'),
(234, 17, 'داراب'),
(235, 17, 'فسا'),
(236, 17, 'مرودشت'),
(237, 17, 'خرم بيد'),
(238, 17, 'آباده'),
(239, 17, 'كازرون'),
(240, 17, 'ممسني'),
(241, 17, 'سپيدان'),
(242, 17, 'لار'),
(243, 17, 'فيروز آباد'),
(244, 17, 'جهرم'),
(245, 17, 'ني ريز'),
(246, 17, 'استهبان'),
(247, 17, 'لامرد'),
(248, 17, 'مهر'),
(249, 17, 'حاجي آباد'),
(250, 17, 'نورآباد'),
(251, 17, 'اردكان'),
(252, 17, 'صفاشهر'),
(253, 17, 'ارسنجان'),
(254, 17, 'قيروكارزين'),
(255, 17, 'سوريان'),
(256, 17, 'فراشبند'),
(257, 17, 'سروستان'),
(258, 17, 'ارژن'),
(259, 17, 'گويم'),
(260, 17, 'داريون'),
(261, 17, 'زرقان'),
(262, 17, 'خان زنیان'),
(263, 17, 'کوار'),
(264, 17, 'ده بید'),
(265, 17, 'باب انار/خفر'),
(266, 17, 'بوانات'),
(267, 17, 'خرامه'),
(268, 17, 'خنج'),
(269, 17, 'سیاخ دارنگون'),
(270, 18, 'قزوين'),
(271, 18, 'تاكستان'),
(272, 18, 'آبيك'),
(273, 18, 'بوئين زهرا'),
(274, 19, 'قم'),
(275, 5, 'طالقان'),
(276, 5, 'نظرآباد'),
(277, 5, 'اشتهارد'),
(278, 5, 'هشتگرد'),
(279, 5, 'كن'),
(280, 5, 'آسارا'),
(281, 5, 'شهرک گلستان'),
(282, 5, 'اندیشه'),
(283, 5, 'كرج'),
(284, 5, 'نظر آباد'),
(285, 5, 'گوهردشت'),
(286, 5, 'ماهدشت'),
(287, 5, 'مشکین دشت'),
(288, 20, 'سنندج'),
(289, 20, 'ديواندره'),
(290, 20, 'بانه'),
(291, 20, 'بيجار'),
(292, 20, 'سقز'),
(293, 20, 'كامياران'),
(294, 20, 'قروه'),
(295, 20, 'مريوان'),
(296, 20, 'صلوات آباد'),
(297, 20, 'حسن آباد'),
(298, 21, 'كرمان'),
(299, 21, 'راور'),
(300, 21, 'بابك'),
(301, 21, 'انار'),
(302, 21, 'کوهبنان'),
(303, 21, 'رفسنجان'),
(304, 21, 'بافت'),
(305, 21, 'سيرجان'),
(306, 21, 'كهنوج'),
(307, 21, 'زرند'),
(308, 21, 'بم'),
(309, 21, 'جيرفت'),
(310, 21, 'بردسير'),
(311, 22, 'كرمانشاه'),
(312, 22, 'اسلام آباد غرب'),
(313, 22, 'سر پل ذهاب'),
(314, 22, 'كنگاور'),
(315, 22, 'سنقر'),
(316, 22, 'قصر شيرين'),
(317, 22, 'گيلان غرب'),
(318, 22, 'هرسين'),
(319, 22, 'صحنه'),
(320, 22, 'پاوه'),
(321, 22, 'جوانرود'),
(322, 22, 'شاهو'),
(323, 23, 'ياسوج'),
(324, 23, 'گچساران'),
(325, 23, 'دنا'),
(326, 23, 'دوگنبدان'),
(327, 23, 'سي سخت'),
(328, 23, 'دهدشت'),
(329, 23, 'ليكك'),
(330, 24, 'گرگان'),
(331, 24, 'آق قلا'),
(332, 24, 'گنبد كاووس'),
(333, 24, 'علي آباد كتول'),
(334, 24, 'مينو دشت'),
(335, 24, 'تركمن'),
(336, 24, 'كردكوي'),
(337, 24, 'بندر گز'),
(338, 24, 'كلاله'),
(339, 24, 'آزاد شهر'),
(340, 24, 'راميان'),
(341, 25, 'رشت'),
(342, 25, 'منجيل'),
(343, 25, 'لنگرود'),
(344, 25, 'رود سر'),
(345, 25, 'تالش'),
(346, 25, 'آستارا'),
(347, 25, 'ماسوله'),
(348, 25, 'آستانه اشرفيه'),
(349, 25, 'رودبار'),
(350, 25, 'فومن'),
(351, 25, 'صومعه سرا'),
(352, 25, 'بندرانزلي'),
(353, 25, 'كلاچاي'),
(354, 25, 'هشتپر'),
(355, 25, 'رضوان شهر'),
(356, 25, 'ماسال'),
(357, 25, 'شفت'),
(358, 25, 'سياهكل'),
(359, 25, 'املش'),
(360, 25, 'لاهیجان'),
(361, 25, 'خشک بيجار'),
(362, 25, 'خمام'),
(363, 25, 'لشت نشا'),
(364, 25, 'بندر کياشهر'),
(365, 26, 'خرم آباد'),
(366, 26, 'ماهشهر'),
(367, 26, 'دزفول'),
(368, 26, 'بروجرد'),
(369, 26, 'دورود'),
(370, 26, 'اليگودرز'),
(371, 26, 'ازنا'),
(372, 26, 'نور آباد'),
(373, 26, 'كوهدشت'),
(374, 26, 'الشتر'),
(375, 26, 'پلدختر'),
(376, 27, 'ساري'),
(377, 27, 'آمل'),
(378, 27, 'بابل'),
(379, 27, 'بابلسر'),
(380, 27, 'بهشهر'),
(381, 27, 'تنكابن'),
(382, 27, 'جويبار'),
(383, 27, 'چالوس'),
(384, 27, 'رامسر'),
(385, 27, 'سواد كوه'),
(386, 27, 'قائم شهر'),
(387, 27, 'نكا'),
(388, 27, 'نور'),
(389, 27, 'بلده'),
(390, 27, 'نوشهر'),
(391, 27, 'پل سفيد'),
(392, 27, 'محمود آباد'),
(393, 27, 'فريدون كنار'),
(394, 28, 'اراك'),
(395, 28, 'آشتيان'),
(396, 28, 'تفرش'),
(397, 28, 'خمين'),
(398, 28, 'دليجان'),
(399, 28, 'ساوه'),
(400, 28, 'سربند'),
(401, 28, 'محلات'),
(402, 28, 'شازند'),
(403, 29, 'بندرعباس'),
(404, 29, 'قشم'),
(405, 29, 'كيش'),
(406, 29, 'بندر لنگه'),
(407, 29, 'بستك'),
(408, 29, 'حاجي آباد'),
(409, 29, 'دهبارز'),
(410, 29, 'انگهران'),
(411, 29, 'ميناب'),
(412, 29, 'ابوموسي'),
(413, 29, 'بندر جاسك'),
(414, 29, 'تنب بزرگ'),
(415, 29, 'بندر خمیر'),
(416, 29, 'پارسیان'),
(417, 29, 'قشم'),
(418, 30, 'همدان'),
(419, 30, 'ملاير'),
(420, 30, 'تويسركان'),
(421, 30, 'نهاوند'),
(422, 30, 'كبودر اهنگ'),
(423, 30, 'رزن'),
(424, 30, 'اسدآباد'),
(425, 30, 'بهار'),
(426, 31, 'يزد'),
(427, 31, 'تفت'),
(428, 31, 'اردكان'),
(429, 31, 'ابركوه'),
(430, 31, 'ميبد'),
(431, 31, 'طبس'),
(432, 31, 'بافق'),
(433, 31, 'مهريز'),
(434, 31, 'اشكذر'),
(435, 31, 'هرات'),
(436, 31, 'خضرآباد'),
(437, 31, 'شاهديه'),
(438, 31, 'حمیدیه شهر'),
(439, 31, 'سید میرزا'),
(440, 31, 'زارچ');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

DROP TABLE IF EXISTS `discount`;
CREATE TABLE IF NOT EXISTS `discount` (
  `DiscountId` bigint(20) NOT NULL AUTO_INCREMENT,
  `DiscountCode` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiscountType` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiscountUserId` bigint(20) DEFAULT NULL,
  `DiscountStartTime` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DiscountEndTime` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DiscountPercent` int(11) NOT NULL DEFAULT '1',
  `DiscountPrice` int(11) NOT NULL DEFAULT '0',
  `DiscountCategoryId` bigint(20) DEFAULT NULL,
  `DiscountProductId` bigint(20) DEFAULT NULL,
  `CreateDateTime` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`DiscountId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

DROP TABLE IF EXISTS `manager`;
CREATE TABLE IF NOT EXISTS `manager` (
  `ManagerId` bigint(20) NOT NULL AUTO_INCREMENT,
  `ManagerFullName` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ManagerPhone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ManagerEmail` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ManagerPassword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ManagerId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`ManagerId`, `ManagerFullName`, `ManagerPhone`, `ManagerEmail`, `ManagerPassword`) VALUES
(1, 'محمدرضا اسماعیلی', '09120572107', 'info@carnoma.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
CREATE TABLE IF NOT EXISTS `media` (
  `MediaId` bigint(20) NOT NULL AUTO_INCREMENT,
  `MediaType` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MediaTypeId` bigint(20) NOT NULL,
  `MediaExtension` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MediaUrl` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`MediaId`)
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`MediaId`, `MediaType`, `MediaTypeId`, `MediaExtension`, `MediaUrl`) VALUES
(14, 'Product', 9, 'jpg', 'http://localhost:8080/Carnoma/media/responsivefilemanager/source/s9.jpg'),
(15, 'Product', 9, 'jpg', 'http://localhost:8080/Carnoma/media/responsivefilemanager/source/s3.jpg'),
(16, 'Product', 10, 'jpg', 'http://localhost:8080/Carnoma/media/responsivefilemanager/source/google-map.jpg'),
(17, 'Product', 11, 'jpg', 'http://localhost:8080/Carnoma/media/responsivefilemanager/source/google-map.jpg'),
(18, 'Product', 13, 'jpg', 'http://localhost:8080/Carnoma/media/responsivefilemanager/source/s9.jpg'),
(19, 'Product', 13, 'jpg', 'http://localhost:8080/Carnoma/media/responsivefilemanager/source/s3.jpg'),
(20, 'Product', 14, 'jpg', 'http://localhost:8080/Carnoma/media/responsivefilemanager/source/google-map.jpg'),
(21, 'Product', 15, 'jpg', 'http://localhost:8080/Carnoma/media/responsivefilemanager/source/google-map.jpg'),
(28, 'Product', 19, 'jpg', 'http://localhost:8080/Carnoma/media/responsivefilemanager/source/s10.jpg'),
(29, 'Product', 19, 'jpg', 'http://localhost:8080/Carnoma/media/responsivefilemanager/source/s4.jpg'),
(30, 'Product', 20, 'jpg', 'http://localhost:8080/Carnoma/media/responsivefilemanager/source/s5.jpg'),
(31, 'Product', 20, 'jpg', 'http://localhost:8080/Carnoma/media/responsivefilemanager/source/main-page-ship.png'),
(32, 'Product', 18, 'jpg', 'http://localhost:8080/Carnoma/media/responsivefilemanager/source/s9.jpg'),
(33, 'Product', 18, 'jpg', 'http://localhost:8080/Carnoma/media/responsivefilemanager/source/s4.jpg'),
(36, 'Product', 21, 'jpg', 'http://localhost:8080/Carnoma/media/responsivefilemanager/source/s9.jpg'),
(37, 'Product', 21, 'jpg', 'http://localhost:8080/Carnoma/media/responsivefilemanager/source/s4.jpg'),
(38, 'Product', 22, 'jpg', 'http://localhost:8080/Carnoma/media/responsivefilemanager/source/s9.jpg'),
(39, 'Product', 22, 'jpg', 'http://localhost:8080/Carnoma/media/responsivefilemanager/source/s4.jpg'),
(44, 'Product', 30, 'jpg', 'http://localhost:8080/Carnoma/media/responsivefilemanager/source/s9.jpg'),
(45, 'Product', 30, 'jpg', 'http://localhost:8080/Carnoma/media/responsivefilemanager/source/s5.jpg'),
(50, 'Product', 31, 'jpg', 'http://localhost:8080/Carnoma/media/responsivefilemanager/source/s9.jpg'),
(51, 'Product', 31, 'jpg', 'http://localhost:8080/Carnoma/media/responsivefilemanager/source/s5.jpg'),
(57, 'Product', 36, 'jpg', 'http://localhost:8080/Carnoma/media/responsivefilemanager/source/s4.jpg'),
(67, 'Product', 35, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/Beautiful.Nature.P30download.com 006.jpg'),
(68, 'Product', 25, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/Beautiful.Nature.P30download.com 006.jpg'),
(69, 'Product', 25, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/Beautiful.Nature.P30download.com 005.jpg'),
(70, 'Product', 25, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/Beautiful.Nature.P30download.com 004.jpg'),
(71, 'Product', 37, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/Beautiful.Nature.P30download.com 002.jpg'),
(72, 'Product', 37, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/Beautiful.Nature.P30download.com 006.jpg'),
(75, 'Product', 39, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80.jpg'),
(76, 'Product', 39, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_2.jpg'),
(77, 'Product', 40, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_4.jpg'),
(78, 'Product', 40, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_5.jpg'),
(79, 'Product', 40, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_6.jpg'),
(80, 'Product', 41, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_8.jpg'),
(81, 'Product', 41, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_9.jpg'),
(82, 'Product', 41, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_10.jpg'),
(83, 'Product', 41, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_11.jpg'),
(84, 'Product', 42, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_13.jpg'),
(85, 'Product', 42, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_14.jpg'),
(86, 'Product', 43, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_16.jpg'),
(87, 'Product', 43, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_17.jpg'),
(88, 'Product', 44, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_19.jpg'),
(89, 'Product', 44, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_20.jpg'),
(90, 'Product', 45, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_23.jpg'),
(91, 'Product', 45, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_24.jpg'),
(92, 'Product', 46, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_26.jpg'),
(93, 'Product', 46, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_27.jpg'),
(94, 'Product', 46, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_28.jpg'),
(95, 'Product', 47, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_30.jpg'),
(96, 'Product', 48, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_32.jpg'),
(97, 'Product', 48, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_33.jpg'),
(98, 'Product', 49, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_36.jpg'),
(99, 'Product', 49, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_37.jpg'),
(100, 'Product', 50, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_39.jpg'),
(101, 'Product', 50, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_40.jpg'),
(102, 'Product', 51, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_42.jpg'),
(103, 'Product', 52, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_45.jpg'),
(107, 'Product', 56, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_54.jpg'),
(108, 'Product', 57, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_56.jpg'),
(109, 'Product', 57, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_57.jpg'),
(110, 'Product', 58, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_59.jpg'),
(111, 'Product', 58, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_60.jpg'),
(112, 'Product', 59, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_62.jpg'),
(113, 'Product', 59, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_63.jpg'),
(114, 'Product', 62, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_68.jpg'),
(115, 'Product', 64, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_71.jpg'),
(119, 'Product', 54, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_49.jpg'),
(120, 'Product', 54, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_50.jpg'),
(121, 'Product', 54, 'jpg', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_51.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `MessageId` int(11) NOT NULL,
  `MessageTitle` int(11) NOT NULL,
  `MessageContent` int(11) NOT NULL,
  `MessageType` int(11) NOT NULL,
  `MessageUserId` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `OrderId` bigint(20) NOT NULL AUTO_INCREMENT,
  `OrderUserId` bigint(20) NOT NULL,
  `OrderTotalPrice` int(11) NOT NULL DEFAULT '0',
  `OrderDateTime` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OrderStatus` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OrderRequiredDateTime` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OrderShippedDateTime` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`OrderId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders_sending_method`
--

DROP TABLE IF EXISTS `orders_sending_method`;
CREATE TABLE IF NOT EXISTS `orders_sending_method` (
  `OrderSendMethodId` int(11) NOT NULL AUTO_INCREMENT,
  `OrderSendMethodTitle` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OrderSendMethodPrice` int(11) NOT NULL,
  `OrderSendMethodActive` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `CreateDateTime` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ModifiedDateTime` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`OrderSendMethodId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
CREATE TABLE IF NOT EXISTS `order_items` (
  `RowId` bigint(11) NOT NULL AUTO_INCREMENT,
  `OrderId` bigint(20) NOT NULL,
  `ProductId` bigint(20) NOT NULL,
  `ProductQuantity` int(11) NOT NULL DEFAULT '0',
  `ProductPrice` int(11) NOT NULL,
  `ProductUploadImage` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ProductMaterialId` int(11) NOT NULL,
  `ProductSizeId` int(11) NOT NULL,
  `ProductHeight` int(11) NOT NULL,
  `ProductWidth` int(11) NOT NULL,
  `ProductDiscountPrice` int(11) NOT NULL,
  `ProductDiscountCode` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`RowId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `PageId` bigint(20) NOT NULL AUTO_INCREMENT,
  `PageTitle` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PageContent` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`PageId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `ProductId` bigint(20) NOT NULL AUTO_INCREMENT,
  `ProductTitle` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ProductSubTitle` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ProductQuantity` int(11) NOT NULL DEFAULT '1',
  `ProductCatalogUrl` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ProductPrimaryImage` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ProductBrief` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ProductDescription` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ProductType` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DesignFreeSize/DesignFixSize/NormalUpload/Normal)',
  `ProductMaxHeight` int(11) NOT NULL DEFAULT '0',
  `ProductMaxWidth` int(11) NOT NULL DEFAULT '0',
  `ProductHasInstallation` int(11) NOT NULL DEFAULT '0',
  `ProductInstallationPrice` int(11) NOT NULL DEFAULT '0',
  `ProductLikeCount` int(11) NOT NULL DEFAULT '0',
  `ProductViewCount` int(11) NOT NULL DEFAULT '0',
  `CreateDateTime` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ModifiedDateTime` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ProductId`),
  KEY `ProductId` (`ProductId`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductId`, `ProductTitle`, `ProductSubTitle`, `ProductQuantity`, `ProductCatalogUrl`, `ProductPrimaryImage`, `ProductBrief`, `ProductDescription`, `ProductType`, `ProductMaxHeight`, `ProductMaxWidth`, `ProductHasInstallation`, `ProductInstallationPrice`, `ProductLikeCount`, `ProductViewCount`, `CreateDateTime`, `ModifiedDateTime`) VALUES
(39, 'بیسکوییت کرمدار با طعم کاکائو گرجی مقدار 390 گرم', 'Gorji Cocoa Flavor Cream Biscuit 390gr', 1500, '', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_1.jpg', 'فاصله صبحانه تا نهار یا نهار تا شام طولانی است و حتما در این زمان گرسنه می‌شوید. بیسکوییت‌ها و ویفرها از خوراکی‌های پرانرژِی و خوشمزه‌ای هستند که بیشترمان دوست داریم و می‌توان آن را با چای، شیر و شیرکاکائو همراه کرد. بیسکوییت‌ها ترد و سیرکننده هستند و خیلی‌ها دوست دارند آن را داخل چای ببرند و بعد میل کنند. بیسکوییت‌ها انواع بسیار متنوعی دارند، از شکل و رنگ و طرح آن‌ها گرفته تا مزه و طعم آن؛ بعضی از بیسکوییت‌ها ساده هستند و بعضی دیگر کرم‌دارند. ویفر از بیسکوییت تردتر و شکننده‌تر است و معمولا خودش مزه خاصی ندارد و با طعم‌های میوه‌ای یا شکلات و قهوه مزه‌دار می‌شود.', '<p style=\"text-align:justify\">بیسکوییت‌های گرجی میان بچه‌ها و بزرگترها طرفدار داشت و بیسکوییت باغ وحش گرجی هم یکی از نوآوری‌های این شرکت برای جذب بچه‌ها بود و همه ما با بیسکوییت باغ وحش گرجی که با حیوانات بامزه بچه‌ها را غافل‌گیر می‌کرد، خاطره داریم. گرجی علاوه بر بیسکوییت، انواع ویفر، کراکر، کوکی‌ و شکلا‌ت‌ را تولید و عرضه می‌کند و اخیرا با تولید طعم‌ها و شکل‌های جدید از این محصولات، سعی کرده همچنان جایگاه خود را حفظ کند.</p>\n\n<p style=\"text-align:justify\"><img alt=\"\" src=\"http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80.jpg\" style=\"height:700px; width:1280px\"></p>\n\n<p style=\"text-align:justify\">بیسکوییت کرم‌دار خشکی بیسکوییت‌های ساده را ندارند و می‌توان آن را خالی خورد. بیسکوییت کرم‌دار در واقع از دو بیسکوییت تشکیل شده است و کرم کاکائویی این بیسکوییت این دو را به هم وصل کرده است. خیلی‌ها دوست دارند در دو مرحله بیسکوییت کرم‌دار را در دو مرحله بخورند تا کرم شیرین و خوشمزه میانی آن بیشتر خود را نشان دهد!</p>\n\n<p> </p>\n', 'Normal', 0, 0, 0, 0, 0, 0, '1398/08/16 12:18:02', '1398/08/16 12:44:55'),
(40, 'ویفر کارامل رنگینک گرجی مقدار 525 گرم', 'Gorji Ranginak Wafer With Caramel 525gr', 2000, '', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_3.jpg', 'فاصله صبحانه تا نهار یا نهار تا شام طولانی است و حتما در این زمان گرسنه می‌شوید. بیسکوییت‌ها و ویفرها از خوراکی‌های پرانرژِی و خوشمزه‌ای هستند که بیشترمان دوست داریم و می‌توان آن را با چای، شیر و شیرکاکائو همراه کرد. بیسکوییت‌ها ترد و سیرکننده هستند و خیلی‌ها دوست دارند آن را داخل چای ببرند و بعد میل کنند. بیسکوییت‌ها انواع بسیار متنوعی دارند، از شکل و رنگ و طرح آن‌ها گرفته تا مزه و طعم آن؛ بعضی از بیسکوییت‌ها ساده هستند و بعضی دیگر کرم‌دارند. ویفر از بیسکوییت تردتر و شکننده‌تر است و معمولا خودش مزه خاصی ندارد و با طعم‌های میوه‌ای یا شکلات و قهوه مزه‌دار می‌شود.', '<p>شرکت «گرجی» در سال 1340 خورشیدی به عرصه تولید مواد غذایی قدم گذاشت و کارخانه آن در رباط کریم واقع شد که در آن زمان منطقه‌ای متفاوت با شهر صنعتی امروزی بود. گرجی با سابقه بیش از 50 سال یکی از قدیمی‌ترین و خاطره‌انگیزترین برندهای ایرانی است. محصولی که گرجی با تولید آن به شهرت رسید، «بیسکوییت» بود.</p>\n\n<p><br>\n<img alt=\"\" src=\"http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_5.jpg\" style=\"height:700px; width:1280px\"></p>\n\n<p> </p>\n\n<p> </p>\n\n<p> </p>\n\n<p>بیسکوییت‌های گرجی میان بچه‌ها و بزرگترها طرفدار داشت و بیسکوییت باغ وحش گرجی هم یکی از نوآوری‌های این شرکت برای جذب بچه‌ها بود و همه ما با بیسکوییت باغ وحش گرجی که با حیوانات بامزه بچه‌ها را غافل‌گیر می‌کرد، خاطره داریم. گرجی علاوه بر بیسکوییت، انواع ویفر، کراکر، کوکی‌ و شکلا‌ت‌ را تولید و عرضه می‌کند و اخیرا با تولید طعم‌ها و شکل‌های جدید از این محصولات، سعی کرده همچنان جایگاه خود را حفظ کند.</p>\n\n<p> </p>\n', 'Normal', 0, 0, 0, 0, 0, 0, '1398/08/16 12:54:46', '1398/08/16 12:54:46'),
(41, 'کنسرو ماهی تون در روغن گیاهی طبیعت مقدار 180 گرم', 'Tabiat Tuna Fish in Vegetable Oil 180gr', 1500, '', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_7.jpg', 'حتما برای شما هم پیش آمده است که زمان یا انرژی کافی برای تهیه غذا نداشته باشید. برند طبیعت برای این مواقع محصولی مغذی و زود مصرف تهیه کرده‌است. یعنی می‌توانید در کم‌ترین زمان ممکن یک غذا با ارزش غذایی بالا داشته‌باشید. ماهی یکی از محبوب‌ترین غذاهای ایرانی است که توسط شرکت طبیعت به‌صورت کنسرو درآمده است. محصولی که می‌بینیم کنسرو ماهی تون در روغن گیاهی طبیعت مقدار 180 گرمی است. این محصول سرشار از امگا 3 است و یک غذای کامل و مقوی به حساب می‌آید.', '<p>حتما برای شما هم پیش آمده است که زمان یا انرژی کافی برای تهیه غذا نداشته باشید. برند طبیعت برای این مواقع محصولی مغذی و زود مصرف تهیه کرده‌است. یعنی می‌توانید در کم‌ترین زمان ممکن یک غذا با ارزش غذایی بالا داشته‌باشید. ماهی یکی از محبوب‌ترین غذاهای ایرانی است که توسط شرکت طبیعت به‌صورت کنسرو درآمده است. محصولی که می‌بینیم کنسرو ماهی تون در روغن گیاهی طبیعت مقدار 180 گرمی است. این محصول سرشار از امگا 3 است و یک غذای کامل و مقوی به حساب می‌آید. اسیدهای چرب امگا 3 از آن دسته از چربی‌های مفید برای بدن ما هستند و کنسروهای تن ماهی سرشار از امگا 3 هستند. تن ماهی غنی از پروتئین است. سطح پروتئین موجود در تن ماهی تقریبا 2 برابر تخم مرغ است. از فواید کنسرو تن ماهی می‌توان به خاصیت سم زدایی، حفظ سلامت قلب، پیش‌گیری از سرطان، کمک به سلامت بینایی، پیشگیری از فشار خون بالا و سکته مغزی و حفظ سلامت ماهیچه‌ها اشاره کرد.</p>\n\n<p><img alt=\"\" src=\"http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_9.jpg\" style=\"height:700px; width:1280px\"></p>\n\n<p> </p>\n', 'Normal', 0, 0, 0, 0, 0, 0, '1398/08/16 12:58:52', '1398/08/16 12:58:52'),
(42, 'دستمال کاغذی 200 برگ ایزی پیک مدل 2Ply بسته 10 عددی', 'Easypick 2Ply Tissue Paper pack of 10', 800, '', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_12.jpg', 'دستمال کاغذی 200 برگ ایزی پیک مدل 2Ply بسته 10 عددی', '<p style=\"text-align:justify\"><img alt=\"\" src=\"http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_14.jpg\" style=\"height:700px; width:1280px\"></p>\n\n<p> </p>\n\n<ul>\n <li>\n <p>تعداد در بسته :200 برگ</p>\n </li>\n <li>\n <p>مورد مصرف: آشپزخانه , پذیرایی</p>\n </li>\n <li>\n <p>طرح برگ: دارد</p>\n </li>\n <li>\n <p>توضیحات :طرح دارای طرح برگ و گلدار صورتی و سفید</p>\n </li>\n <li>\n <p>سایر توضیحات : دارای رنگبندی</p>\n </li>\n <li>\n <p>- ارسال به صورت رندوم</p>\n </li>\n</ul>\n', 'Normal', 0, 0, 0, 0, 0, 0, '1398/08/16 13:07:45', '1398/08/16 13:07:45'),
(43, 'کنسرو رب گوجه فرنگی طبیعت مقدار 800 گرم', 'Tabiat Tomato Paste 800gr', 1500, '', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_15.jpg', 'فاصله صبحانه تا نهار یا نهار تا شام طولانی است و حتما در این زمان گرسنه می‌شوید. بیسکوییت‌ها و ویفرها از خوراکی‌های پرانرژِی و خوشمزه‌ای هستند که بیشترمان دوست داریم و می‌توان آن را با چای، شیر و شیرکاکائو همراه کرد. بیسکوییت‌ها ترد و سیرکننده هستند و خیلی‌ها دوست دارند آن را داخل چای ببرند و بعد میل کنند. بیسکوییت‌ها انواع بسیار متنوعی دارند، از شکل و رنگ و طرح آن‌ها گرفته تا مزه و طعم آن؛ بعضی از بیسکوییت‌ها ساده هستند و بعضی دیگر کرم‌دارند. ویفر از بیسکوییت تردتر و شکننده‌تر است و معمولا خودش مزه خاصی ندارد و با طعم‌های میوه‌ای یا شکلات و قهوه مزه‌دار می‌شود.', '<p style=\"text-align:justify\"><img alt=\"\" src=\"http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_17.jpg\" style=\"height:700px; width:1280px\"></p>\n\n<p> </p>\n', 'Normal', 0, 0, 0, 0, 0, 0, '1398/08/16 13:10:41', '1398/08/16 13:10:41'),
(44, 'بادام زمینی مزمز وزن 400 گرم', 'Maz Maz Peanuts 400gr', 50, '', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_18.jpg', 'آجیل و خشکبار همواره جزء محبوب‌ترین خوراکی‌ها بوده‌اند که در جشن‌ها و اعیاد پرمصرف هستند. این خوراکی‌ها سرشار از مواد مغذی‌اند که برای بدن بسیار مفید است و می‌تواند ویتامین‌های موردنیاز بدن را تامین کند. آجیل و خشکبار در جمع‌های دوستانه و خانوادگی بسیار محبوب است و می‌تواند یک میان وعده‌ی کامل برای بچه‌ها در مدرسه یا برای بزرگ‌ترها هنگام کار باشد.', '<p style=\"text-align:justify\">مغز‌ها نیز جزء این دسته‌اند که بسیار مقوی هستند اما ترکیب آن‌ها بسیار جذاب است و طرفداران بیشتری دارد. این خوراکی‌ها یک منبع سرشار از مواد مغذی و ویتامین‌ها هستند که مصرف آن می‌تواند کمبودهای بدن را بهبود دهد و برطرف کند؛ به همین دلیل می‌تواند جایگزین بسیاری از دارو‌ها و قرص‌های شیمیایی برای برطرف کردن کمبودها باشد. مزمز هم دست به تولید آجیل و خشکبار بسته‌بندی زده است تا استفاده و جابه‌جایی آن‌ها آسان‌تر باشد و بچه‌ها به‌راحتی بتوانند از آن در مدرسه استفاده کنند. بادام زمینی «مزمز» چهارصد گرم وزن دارد و ترکیب آن با سایر مغزها، یک منبع پرانرژی برای یک روز خوب را فراهم می‌کند.</p>\n\n<p style=\"text-align:justify\"><img alt=\"\" src=\"http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_21.jpg\" style=\"height:700px; width:1280px\"></p>\n\n<p> </p>\n', 'Normal', 0, 0, 0, 0, 0, 0, '1398/08/16 13:12:13', '1398/08/16 13:12:13'),
(45, 'برنج صدری هاشمی آقاجانیان وزن 5 کیلوگرم', 'Aghajanian Sadri Hashemi Rice 5 kg', 1500, '', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_22.jpg', 'فاصله صبحانه تا نهار یا نهار تا شام طولانی است و حتما در این زمان گرسنه می‌شوید. بیسکوییت‌ها و ویفرها از خوراکی‌های پرانرژِی و خوشمزه‌ای هستند که بیشترمان دوست داریم و می‌توان آن را با چای، شیر و شیرکاکائو همراه کرد. بیسکوییت‌ها ترد و سیرکننده هستند و خیلی‌ها دوست دارند آن را داخل چای ببرند و بعد میل کنند. بیسکوییت‌ها انواع بسیار متنوعی دارند، از شکل و رنگ و طرح آن‌ها گرفته تا مزه و طعم آن؛ بعضی از بیسکوییت‌ها ساده هستند و بعضی دیگر کرم‌دارند. ویفر از بیسکوییت تردتر و شکننده‌تر است و معمولا خودش مزه خاصی ندارد و با طعم‌های میوه‌ای یا شکلات و قهوه مزه‌دار می‌شود.', '<ul>\n <li>\n <p>رنگ برنج:سفید</p>\n </li>\n <li>\n <p>نوع برنج:ساده</p>\n </li>\n <li>\n <p>عنوان برنج:هاشمی</p>\n </li>\n <li>\n <p>اندازه دانه:دانه کامل</p>\n </li>\n <li>\n <p>وزن:5 کیلوگرم</p>\n </li>\n <li>\n <p>بازه‌ی وزن:تا 5 کیلوگرم</p>\n </li>\n <li>\n <p>توضیحات نوع برنج:برنج ایرانی هاشمی</p>\n </li>\n <li>\n <p>شماره پروانه بهداشت:47/14052</p>\n </li>\n</ul>\n\n<p><img alt=\"\" src=\"http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_24.jpg\" style=\"height:700px; width:1280px\"></p>\n\n<p> </p>\n', 'Normal', 0, 0, 0, 0, 0, 0, '1398/08/16 13:13:59', '1398/08/16 13:13:59'),
(46, 'زعفران سرگل کاور سحرخیز مقدار 4.608 گرم', 'Saharkhiz Cover Saffron 4.608gr', 5200, '', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_25.jpg', 'زعفران گیاهی کوچک و چند ساله به ارتفاع ۱۰ تا ۳۰ سانتی‌متر است. از وسط پیاز یا قاعده ساقه، تعدادی برگ باریک و دراز خارج می‌شوند. از وسط برگ‌ها، ساقه گلدار خارج شده که به یک تا سه گل منتهی می‌شود. گل‌ها دارای ۶ گلبرگ بنفش رنگ هستند که ممکن است در بعضی واریته‌ها به رنگ گلی یا ارغوانی باشند. گل‌ها دارای ۳ پرچم و یک مادگی منتهی به کلالهٔ سه شاخه به رنگ قرمز متمایل به نارنجی است.', '<p style=\"text-align:justify\">شرکت سحرخیز فعالیت خود را از سال 1311 با تهیه و تولید زعفران آغاز کرده است به همین دلیل طبیعی به نظر می‌رسد که پس از گذشت این‌همه سال کیفیت بالای محصولات و رضایت مشتریان منجر به ماندگاری این شرکت و حالا گسترش آن شده باشد. زعفران به‌عنوان یکی از اصلی‌تری محصولات تولیدی این شرکت سهم بزرگ و بالایی در این ماندگاری دارد. کیفیت بالا، بسته‌بندی مناسب، رضایت مشتریان از دلایل علاقه‌مندی خلل‌ناپذیر مشتریان به محصولات این شرکت بوده است.</p>\n\n<p style=\"text-align:justify\">زعفران یکی از گیاهانی است که به‌صورت سنتی از ارزش و قدر بالایی در پیش ایرانیان و سایر ملت‌های دنیا برخوردار بوده است. شاید یکی از دلایل این امر را باید کم بودن محیطی که امکان کشت زعفران را داشته باشند در کره‌ی زمین دانست. همچنین انجام تمامی پروسه‌های تولید این چاشنی به‌صورت دستی و نیروی انسانی زیادی که لازم است برای مدت‌های دراز به مراقبت از این گیاه مشغول باشند آن را به عصاره و دسترنج کشاورزان سخت‌کوش خراسانی تبدیل کرده است. به همین دلیل قیمت تمام‌شده‌ی زعفران همیشه بسیار بالا بوده است و مسافران دیار خراسان آن را به‌عنوان تحفه و سوغاتی ارزشمند برای همشهریان خود به ارمغان برده‌اند.</p>\n\n<p style=\"text-align:justify\">زعفران یک چاشنی خوش‌طعم و عطر است که تمام و کمال ارزش قیمت خود را دارد. استفاده از آن حتی در موارد کوچک باعث رفع افسردگی، تقویت بینایی، از بین بردن رادیکال آزاد و کاهش ریسک سرطان خواهد بود. البته مانند تمام مواد غذایی دیگر باید در استفاده‌ی بیش‌ازاندازه‌ی زعفران نیز محتاط بود.</p>\n\n<p style=\"text-align:justify\"><img alt=\"\" src=\"http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_28.jpg\" style=\"height:700px; width:1280px\"></p>\n\n<p> </p>\n', 'Normal', 0, 0, 0, 0, 0, 0, '1398/08/16 13:15:38', '1398/08/16 13:15:38'),
(47, 'ماگ حرارتی لومانا مدل MAG0281', 'Lomana MAG0281 Heat Sensetive Mug', 800, '', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_29.jpg', '', '<ul>\n <li>\n <p>وزن:340 گرم</p>\n </li>\n <li>\n <p>ابعاد بسته‌بندی:13 × 12 × 9 سانتی‌متر</p>\n </li>\n <li>\n <p>وزن بسته‌بندی:480 گرم</p>\n </li>\n <li>\n <p>جنس:سرامیک</p>\n </li>\n <li>\n <p>تعداد:یک عدد</p>\n </li>\n <li>\n <p>در:ندارد</p>\n </li>\n <li>\n <p>قاشق</p>\n </li>\n <li>\n <p>ندارد</p>\n </li>\n <li>\n <p>سایر توضیحات:- قابل استفاده در مایکروویو</p>\n </li>\n <li>\n <p>- غیر قابل شست و شو با مواد سفید کننده</p>\n </li>\n <li>\n <p>- ظاهر شدن طرح به محض سرو نوشیدنی‌های گرم</p>\n </li>\n</ul>\n\n<p><img alt=\"\" src=\"http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_31.jpg\" style=\"height:700px; width:1280px\"></p>\n', 'NormalUpload', 0, 0, 0, 0, 0, 0, '1398/08/16 14:16:11', '1398/08/16 14:16:11'),
(48, 'ماگ حرارتی آئورا مدل FB36', 'Lomana MAG0281 Heat Sensetive Mug', 6000, '', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_34.jpg', 'شرکت \" آئورا\" یکی از بزرگترین تولید کننده ماگ های سرامیکی در جهان است. ماگ\"FB36\" از جمله همین ماگ هاست که دارای طرح اینستاگرام و سایر شبکه های اجتماعی بوده و بسیار جذاب است.', '<p style=\"text-align:justify\">شرکت \" آئورا\" یکی از بزرگترین تولید کننده ماگ های سرامیکی در جهان است. ماگ\"FB36\" از جمله همین ماگ هاست که دارای طرح اینستاگرام و سایر شبکه های اجتماعی بوده و بسیار جذاب است. این ماگ سرامیکی مشکی ،ماگ حرارتی است و کافیست نوشیدنی داغ به آن اضافه کنید تا عکس های روی آن نمایان شود که بهترین هدیه برای عزیزانتان است</p>\n', 'NormalUpload', 0, 0, 0, 0, 0, 0, '1398/08/16 14:18:18', '1398/08/16 14:18:18'),
(49, 'ماگ حرارتی زیزیپ مدل جدول مندلیوف 918M', 'ZeeZip Mendeleev Tabelle 918M Heat Sensitive Mug', 800, '', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_35.jpg', 'ZeeZip Mendeleev Tabelle 918M Heat Sensitive Mug', '<ul>\n <li>\n <p>وزن:340 گرم</p>\n </li>\n <li>\n <p>ابعاد بسته‌بندی:13 × 12 × 9 سانتی‌متر</p>\n </li>\n <li>\n <p>وزن بسته‌بندی:480 گرم</p>\n </li>\n <li>\n <p>جنس:سرامیک</p>\n </li>\n <li>\n <p>تعداد:یک عدد</p>\n </li>\n <li>\n <p>در:ندارد</p>\n </li>\n <li>\n <p>قاشق</p>\n </li>\n <li>\n <p>ندارد</p>\n </li>\n <li>\n <p>سایر توضیحات:- قابل استفاده در مایکروویو</p>\n </li>\n <li>\n <p>- غیر قابل شست و شو با مواد سفید کننده</p>\n </li>\n <li>\n <p>- ظاهر شدن طرح به محض سرو نوشیدنی‌های گرم</p>\n </li>\n</ul>\n', 'NormalUpload', 0, 0, 0, 0, 0, 0, '1398/08/16 14:20:10', '1398/08/16 14:20:10'),
(50, 'ماگ حرارتی آتوسا مدل جغد Temp Owl 005', 'Atusa Temp Owl 005 Mug', 800, '', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_38.jpg', '۴ امتیاز پس از فعال‌سازی و خرید این کالا', '<ul>\n <li>\n <p>وزن:340 گرم</p>\n </li>\n <li>\n <p>ابعاد بسته‌بندی:13 × 12 × 9 سانتی‌متر</p>\n </li>\n <li>\n <p>وزن بسته‌بندی:480 گرم</p>\n </li>\n <li>\n <p>جنس:سرامیک</p>\n </li>\n <li>\n <p>تعداد:یک عدد</p>\n </li>\n <li>\n <p>در:ندارد</p>\n </li>\n <li>\n <p>قاشق</p>\n </li>\n <li>\n <p>ندارد</p>\n </li>\n <li>\n <p>سایر توضیحات:- قابل استفاده در مایکروویو</p>\n </li>\n <li>\n <p>- غیر قابل شست و شو با مواد سفید کننده</p>\n </li>\n <li>\n <p>- ظاهر شدن طرح به محض سرو نوشیدنی‌های گرم</p>\n </li>\n</ul>\n\n<p><img alt=\"\" src=\"http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_31.jpg\" style=\"height:700px; width:1280px\"></p>\n', 'NormalUpload', 0, 0, 0, 0, 0, 0, '1398/08/16 14:21:34', '1398/08/16 14:21:34'),
(51, 'تی شرت استین بلند مردانه طرح پتک کد 78078', 'تی شرت استین بلند مردانه طرح پتک کد 78078', 800, '', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_41.jpg', 'بیش از ۲۰ نفر از خریداران این محصول را پیشنهاد داده‌اند شناسه کالا :۹۰۷۵۹۰', '<ul>\n <li>کیفیت دوخت مناسب</li>\n <li>تن پوش بسیار عالی</li>\n <li>بدون ایجاد حساسیت</li>\n <li>رنگ چاپ ثابت با گذر زمان</li>\n</ul>\n\n<p><img alt=\"\" src=\"http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_43.jpg\" style=\"height:700px; width:1280px\"></p>\n', 'NormalUpload', 0, 0, 0, 0, 0, 0, '1398/08/16 14:24:56', '1398/08/16 14:24:56'),
(52, 'تی شرت آستین بلند مردانه طرح Blood کد AL79', 'تی شرت آستین بلند مردانه طرح Blood کد AL79', 800, '', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_44.jpg', 'جنس: پلی استر -  قد: روی باسن', '<p><img alt=\"\" src=\"http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_45.jpg\" style=\"height:1100px; width:1700px\"></p>\n', 'NormalUpload', 0, 0, 0, 0, 0, 0, '1398/08/16 14:27:10', '1398/08/16 14:27:10'),
(53, 'تی شرت نگار ایرانی طرح J7', 'تی شرت نگار ایرانی طرح J7', 150, '', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_46.jpg', 'بیش از ۲۰ نفر از خریداران این محصول را پیشنهاد داده‌اند شناسه کالا :۹۰۷۵۹۰', '<ul>\n <li>کیفیت دوخت مناسب</li>\n <li>تن پوش بسیار عالی</li>\n <li>بدون ایجاد حساسیت</li>\n <li>رنگ چاپ ثابت با گذر زمان</li>\n</ul>\n\n<p><img alt=\"\" src=\"http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_47.jpg\" style=\"height:700px; width:1280px\"></p>\n', 'NormalUpload', 0, 0, 0, 0, 0, 0, '1398/08/16 14:28:12', '1398/08/16 14:28:12'),
(55, 'تابلو فرش ماشینی دنیای فرش طرح وان یکاد کد 286', 'تابلو فرش ماشینی دنیای فرش طرح وان یکاد کد 286', 1, '', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_52.jpg', 'محل بافت: کاشان', '<p><img alt=\"\" src=\"http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_52.jpg\" style=\"height:1280px; width:1280px\"></p>\n\n<ul>\n <li>\n <p>محل بافت:کاشان</p>\n </li>\n <li>\n <p>نوع بافت:ماشینی</p>\n </li>\n <li>\n <p>ابعاد تابلو:55×70 سانتی متر</p>\n </li>\n <li>\n <p>ابعاد فرش:35×50 سانتی متر</p>\n </li>\n <li>\n <p>وزن تقریبی:3 کیلوگرم</p>\n </li>\n <li>\n <p>تراکم بافت در هفت سانتی‌متر:50 رج</p>\n </li>\n <li>\n <p>جنس پرز:پلی‌استر</p>\n </li>\n <li>\n <p>جنس نخ تار (چله):پلی‌استر</p>\n </li>\n <li>\n <p>جنس نخ پود:پلی‌استر</p>\n </li>\n <li>\n <p>جنس نخ خاب:پلی‌استر</p>\n </li>\n <li>\n <p>تراکم طولی فرش (تراکم):2550</p>\n </li>\n <li>\n <p>تراکم عرضی فرش (شانه):1000</p>\n </li>\n <li>\n <p>جنس قاب:PVC</p>\n </li>\n</ul>\n', 'DesignFixSize', 0, 0, 0, 0, 0, 0, '1398/08/16 15:08:25', '1398/08/16 15:08:25'),
(56, 'تابلو فرش ماشینی طرح پس از باران کد 230', 'تابلو فرش ماشینی طرح پس از باران کد 230', 1, '', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_53.jpg', 'محل بافت: کاشان', '<p><img alt=\"\" src=\"http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_52.jpg\" style=\"height:1280px; width:1280px\"></p>\n\n<ul>\n <li>\n <p>محل بافت:کاشان</p>\n </li>\n <li>\n <p>نوع بافت:ماشینی</p>\n </li>\n <li>\n <p>ابعاد تابلو:55×70 سانتی متر</p>\n </li>\n <li>\n <p>ابعاد فرش:35×50 سانتی متر</p>\n </li>\n <li>\n <p>وزن تقریبی:3 کیلوگرم</p>\n </li>\n <li>\n <p>تراکم بافت در هفت سانتی‌متر:50 رج</p>\n </li>\n <li>\n <p>جنس پرز:پلی‌استر</p>\n </li>\n <li>\n <p>جنس نخ تار (چله):پلی‌استر</p>\n </li>\n <li>\n <p>جنس نخ پود:پلی‌استر</p>\n </li>\n <li>\n <p>جنس نخ خاب:پلی‌استر</p>\n </li>\n <li>\n <p>تراکم طولی فرش (تراکم):2550</p>\n </li>\n <li>\n <p>تراکم عرضی فرش (شانه):1000</p>\n </li>\n <li>\n <p>جنس قاب:PVC</p>\n </li>\n</ul>\n', 'DesignFixSize', 0, 0, 1, 4200, 0, 0, '1398/08/16 15:11:06', '1398/08/16 15:11:06'),
(57, 'تابلو فرش ماشینی نقش نگار رضوی طرح گل کد 452KC', 'تابلو فرش ماشینی نقش نگار رضوی طرح گل کد 452KC', 1, '', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_55.jpg', 'نوع بافت: ماشینی', '<p><img alt=\"\" src=\"http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_57.jpg\" style=\"height:700px; width:1280px\"></p>\n\n<ul>\n <li>\n <p>محل بافت:کاشان</p>\n </li>\n <li>\n <p>نوع بافت:ماشینی</p>\n </li>\n <li>\n <p>ابعاد تابلو:55×70 سانتی متر</p>\n </li>\n <li>\n <p>ابعاد فرش:35×50 سانتی متر</p>\n </li>\n <li>\n <p>وزن تقریبی:3 کیلوگرم</p>\n </li>\n <li>\n <p>تراکم بافت در هفت سانتی‌متر:50 رج</p>\n </li>\n <li>\n <p>جنس پرز:پلی‌استر</p>\n </li>\n <li>\n <p>جنس نخ تار (چله):پلی‌استر</p>\n </li>\n <li>\n <p>جنس نخ پود:پلی‌استر</p>\n </li>\n <li>\n <p>جنس نخ خاب:پلی‌استر</p>\n </li>\n <li>\n <p>تراکم طولی فرش (تراکم):2550</p>\n </li>\n <li>\n <p>تراکم عرضی فرش (شانه):1000</p>\n </li>\n <li>\n <p>جنس قاب:PVC</p>\n </li>\n</ul>\n', 'DesignFixSize', 0, 0, 0, 0, 0, 0, '1398/08/16 15:12:28', '1398/08/16 15:12:28'),
(58, 'تابلو فرش ماشینی شبیر مدل M23-6635', 'تابلو فرش ماشینی شبیر مدل M23-6635', 1, '', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_58.jpg', 'محل بافت: کاشان', '<p><img alt=\"\" src=\"http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_59.jpg\" style=\"height:700px; width:1280px\"></p>\n\n<ul>\n <li>\n <p>محل بافت:کاشان</p>\n </li>\n <li>\n <p>نوع بافت:ماشینی</p>\n </li>\n <li>\n <p>ابعاد تابلو:55×70 سانتی متر</p>\n </li>\n <li>\n <p>ابعاد فرش:35×50 سانتی متر</p>\n </li>\n <li>\n <p>وزن تقریبی:3 کیلوگرم</p>\n </li>\n <li>\n <p>تراکم بافت در هفت سانتی‌متر:50 رج</p>\n </li>\n <li>\n <p>جنس پرز:پلی‌استر</p>\n </li>\n <li>\n <p>جنس نخ تار (چله):پلی‌استر</p>\n </li>\n <li>\n <p>جنس نخ پود:پلی‌استر</p>\n </li>\n <li>\n <p>جنس نخ خاب:پلی‌استر</p>\n </li>\n <li>\n <p>تراکم طولی فرش (تراکم):2550</p>\n </li>\n <li>\n <p>تراکم عرضی فرش (شانه):1000</p>\n </li>\n <li>\n <p>جنس قاب:PVC</p>\n </li>\n</ul>\n', 'DesignFixSize', 0, 0, 1, 4500, 0, 0, '1398/08/16 15:14:14', '1398/08/16 15:14:14'),
(59, 'کاغذ دیواری سه بعدی', 'مدل 2418052', 1, '', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_61.jpg', 'مقاومت در برابر رطوبت وتابش  دم مقاومت در برابر ضربه', '<p><img alt=\"\" src=\"http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_62.jpg\" style=\"height:700px; width:1280px\"></p>\n', 'DesignFreeSize', 500, 400, 1, 25, 0, 0, '1398/08/16 15:19:48', '1398/08/16 15:19:48'),
(60, 'کاغذ دیواری بی ان کد 45474', 'کد 45474', 1, '', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_64.jpg', 'مقاومت در برابر رطوبت وتابش  دم مقاومت در برابر ضربه', '<p><img alt=\"\" src=\"http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_62.jpg\" style=\"height:700px; width:1280px\"></p>\n', 'DesignFreeSize', 240, 300, 0, 0, 0, 0, '1398/08/16 15:22:56', '1398/08/16 15:22:56'),
(61, 'کاغذ دیواری بی ان کد 45474', 'کد 45474', 1, '', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_65.jpg', 'مقاومت در برابر رطوبت وتابش  دم مقاومت در برابر ضربه', '<p><img alt=\"\" src=\"http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_66.jpg\" style=\"height:1406px; width:2500px\"></p>\n', 'DesignFreeSize', 340, 400, 1, 10, 0, 0, '1398/08/16 15:23:47', '1398/08/16 15:23:47'),
(62, 'کاغذ دیواری مدل 2318021', 'مدل 2318021', 1, '', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_67.jpg', 'مقاومت در برابر رطوبت وتابش  دم مقاومت در برابر ضربه', '<p> <img alt=\"\" src=\"http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_68.jpg\" style=\"height:700px; width:1280px\"></p>\n', 'DesignFreeSize', 340, 400, 0, 0, 0, 0, '1398/08/16 15:25:33', '1398/08/16 15:25:33'),
(63, 'کاغذ دیواری ماربورگ کد 51810', 'کاغذ دیواری ماربورگ کد 51810', 1, '', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_69.jpg', 'مقاومت در برابر رطوبت وتابش  دم مقاومت در برابر ضربه', '<h1>کاغذ دیواری ماربورگ کد 51810</h1>\n', 'DesignFreeSize', 140, 500, 0, 0, 0, 0, '1398/08/16 15:26:26', '1398/08/16 15:26:26'),
(64, 'کاغذ دیواری سالسو طرحA002 lovely flower', 'A002 lovely flower', 1, '', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_70.jpg', 'مقاومت در برابر رطوبت وتابش  دم مقاومت در برابر ضربه', '<p><img alt=\"\" src=\"http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_71.jpg\" style=\"height:700px; width:1280px\"></p>\n', 'DesignFreeSize', 240, 300, 0, 0, 0, 0, '1398/08/16 15:27:15', '1398/08/16 15:27:15'),
(65, 'کاغذ دیواری چسب دار مدل RA367', 'مدل RA367', 1, '', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_72.jpg', 'مقاومت در برابر رطوبت وتابش  دم مقاومت در برابر ضربه', '<p><img alt=\"\" src=\"http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_72.jpg\" style=\"height:1200px; width:1200px\"></p>\n', 'DesignFreeSize', 240, 300, 0, 0, 0, 0, '1398/08/16 15:27:49', '1398/08/16 15:27:49'),
(66, 'کاغذ دیواری ماربورگ کد 51839', 'کد 51839', 1, '', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_73.jpg', 'مقاومت در برابر رطوبت وتابش  دم مقاومت در برابر ضربه', '<p><img alt=\"\" src=\"http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_74.jpg\" style=\"height:689px; width:1259px\"></p>\n', 'DesignFreeSize', 400, 400, 1, 100, 0, 0, '1398/08/16 15:28:52', '1398/08/16 15:28:52');

-- --------------------------------------------------------

--
-- Table structure for table `productspecialsale`
--

DROP TABLE IF EXISTS `productspecialsale`;
CREATE TABLE IF NOT EXISTS `productspecialsale` (
  `RowId` bigint(20) NOT NULL AUTO_INCREMENT,
  `ProductId` bigint(20) DEFAULT NULL,
  `ProductSpecialPrice` int(11) NOT NULL DEFAULT '0',
  `ProductSpecialStartDate` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ProductSpecialEndDate` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`RowId`),
  KEY `ProductId` (`ProductId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

DROP TABLE IF EXISTS `product_category`;
CREATE TABLE IF NOT EXISTS `product_category` (
  `CategoryId` bigint(20) NOT NULL AUTO_INCREMENT,
  `CategoryTitle` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CategoryParentId` bigint(20) NOT NULL DEFAULT '0',
  `CategoryImage` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CategoryIsFavorite` int(11) NOT NULL DEFAULT '0',
  `CategoryDescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `CreateDateTime` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`CategoryId`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`CategoryId`, `CategoryTitle`, `CategoryParentId`, `CategoryImage`, `CategoryIsFavorite`, `CategoryDescription`, `CreateDateTime`) VALUES
(1, 'محصولات', 0, '', 0, 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '1398/06/24  20:45:47'),
(5, 'کاغذ دیواری', 1, 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_71.jpg', 1, 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '1398/08/30 11:55:22'),
(6, 'کاغذ دیواری سه بعدی', 5, '', 0, 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '1398/07/09 12:07:06'),
(7, 'کاغذ دیواری اتاق کودک', 5, '', 0, 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '1398/07/09 12:07:28'),
(8, 'کاغذ دیواری چهره ها', 5, '', 0, 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '1398/07/09 12:07:45'),
(9, 'تیشرت', 1, 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_45.jpg', 1, 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '1398/08/30 11:55:51'),
(10, 'تایپوگرافی', 9, '', 0, 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '1398/07/09 12:08:31'),
(11, 'اوریگامی', 9, '', 0, 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '1398/07/09 12:08:51'),
(12, 'سنتی ایرانی', 9, '', 0, 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '1398/07/09 12:09:03'),
(13, 'کوسن', 1, 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_31.jpg', 1, 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '1398/09/08 12:09:47'),
(14, 'چهره ها', 13, '', 0, 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '1398/07/09 12:09:45'),
(15, 'سنتی ایرانی', 13, '', 0, 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '1398/07/09 12:09:56'),
(16, 'مینیمال', 13, '', 0, 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '1398/07/09 12:10:11'),
(17, 'آرت', 13, '', 0, 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '1398/07/09 12:10:20'),
(18, 'قاب و شاسی', 1, 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_56.jpg', 1, 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '1398/08/30 11:56:06'),
(19, 'نقاشی رئال', 18, '', 0, 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '1398/07/09 12:11:00'),
(20, 'نقاشی مدرن', 18, 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_61.jpg', 0, 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '1398/08/30 11:56:22'),
(21, 'طبیعت', 18, '', 0, 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '1398/07/09 12:11:27'),
(22, 'کودک', 18, '', 0, 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '1398/07/09 12:11:35'),
(23, 'ماگ', 1, 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_38.jpg', 1, 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '1398/08/30 11:56:37'),
(24, 'ماگ آرت', 23, '', 0, 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '1398/07/09 12:46:13'),
(25, 'محصولات غذایی', 1, 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_24.jpg', 1, 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '1398/09/08 12:09:59'),
(26, 'تنقلات', 25, 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/normal_upload/qualityq_80_18.jpg', 0, 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '1398/08/30 11:57:04'),
(27, 'شیلات', 25, '', 0, 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '1398/08/16 12:44:32');

-- --------------------------------------------------------

--
-- Table structure for table `product_category_property`
--

DROP TABLE IF EXISTS `product_category_property`;
CREATE TABLE IF NOT EXISTS `product_category_property` (
  `PropertyId` bigint(20) NOT NULL AUTO_INCREMENT,
  `PropertyTitle` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PropertyCategoryId` bigint(20) NOT NULL,
  `CreateDateTime` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`PropertyId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_category_property_options`
--

DROP TABLE IF EXISTS `product_category_property_options`;
CREATE TABLE IF NOT EXISTS `product_category_property_options` (
  `CategoryPropertyOptionId` bigint(20) NOT NULL AUTO_INCREMENT,
  `CategoryPropertyOptionTitle` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CategoryPropertyId` bigint(20) NOT NULL,
  PRIMARY KEY (`CategoryPropertyOptionId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_category_relation`
--

DROP TABLE IF EXISTS `product_category_relation`;
CREATE TABLE IF NOT EXISTS `product_category_relation` (
  `RowId` bigint(20) NOT NULL AUTO_INCREMENT,
  `ProductId` bigint(20) NOT NULL,
  `CategoryId` bigint(20) NOT NULL,
  PRIMARY KEY (`RowId`)
) ENGINE=InnoDB AUTO_INCREMENT=442 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_category_relation`
--

INSERT INTO `product_category_relation` (`RowId`, `ProductId`, `CategoryId`) VALUES
(329, 39, 1),
(330, 39, 25),
(331, 39, 26),
(332, 40, 1),
(333, 40, 25),
(334, 40, 26),
(335, 41, 1),
(336, 41, 25),
(337, 41, 27),
(338, 42, 1),
(339, 42, 25),
(340, 43, 1),
(341, 43, 25),
(342, 43, 26),
(343, 44, 1),
(344, 44, 25),
(345, 44, 26),
(346, 45, 1),
(347, 45, 25),
(348, 45, 26),
(349, 46, 1),
(350, 46, 25),
(351, 46, 27),
(352, 47, 1),
(353, 47, 23),
(354, 47, 24),
(355, 48, 1),
(356, 48, 23),
(357, 48, 24),
(358, 49, 1),
(359, 49, 23),
(360, 49, 24),
(361, 50, 1),
(362, 50, 23),
(363, 50, 24),
(364, 51, 1),
(365, 51, 9),
(366, 51, 10),
(367, 52, 1),
(368, 52, 9),
(369, 52, 11),
(370, 53, 1),
(371, 53, 9),
(372, 53, 12),
(377, 55, 1),
(378, 55, 18),
(379, 55, 21),
(380, 55, 22),
(381, 56, 1),
(382, 56, 18),
(383, 56, 19),
(384, 56, 21),
(385, 57, 1),
(386, 57, 18),
(387, 57, 21),
(388, 57, 22),
(389, 58, 1),
(390, 58, 18),
(391, 58, 21),
(392, 58, 22),
(393, 59, 1),
(394, 59, 5),
(395, 59, 6),
(396, 59, 7),
(402, 60, 1),
(403, 60, 5),
(404, 60, 6),
(405, 60, 7),
(406, 60, 8),
(407, 61, 1),
(408, 61, 5),
(409, 61, 6),
(410, 61, 7),
(411, 61, 8),
(412, 62, 1),
(413, 62, 5),
(414, 62, 6),
(415, 62, 7),
(416, 62, 8),
(417, 63, 1),
(418, 63, 5),
(419, 63, 6),
(420, 63, 8),
(421, 64, 1),
(422, 64, 5),
(423, 64, 6),
(424, 64, 7),
(425, 64, 8),
(426, 65, 1),
(427, 65, 5),
(428, 65, 6),
(429, 65, 7),
(430, 65, 8),
(431, 66, 1),
(432, 66, 5),
(433, 66, 6),
(438, 54, 1),
(439, 54, 18),
(440, 54, 19),
(441, 54, 20);

-- --------------------------------------------------------

--
-- Table structure for table `product_comment`
--

DROP TABLE IF EXISTS `product_comment`;
CREATE TABLE IF NOT EXISTS `product_comment` (
  `CommentId` bigint(20) NOT NULL AUTO_INCREMENT,
  `CommentContent` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `CommentProductId` bigint(20) NOT NULL,
  `CommentStatus` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CommentUserId` bigint(20) NOT NULL,
  `CommentType` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`CommentId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_main_slider`
--

DROP TABLE IF EXISTS `product_main_slider`;
CREATE TABLE IF NOT EXISTS `product_main_slider` (
  `SlideId` int(11) NOT NULL AUTO_INCREMENT,
  `SlideTitle` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SlideImage` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SlideUrl` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SlideButtonTitle` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`SlideId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_main_slider`
--

INSERT INTO `product_main_slider` (`SlideId`, `SlideTitle`, `SlideImage`, `SlideUrl`, `SlideButtonTitle`) VALUES
(3, 'شب  های روشن', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/slider/s1.jpg', 'google.com', 'مشاهده'),
(4, 'تجربه خانه رویایی', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/slider/s2.jpg', 'یک', 'خرید'),
(5, 'زمستان گرم و دلپذیر', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/slider/s3.jpg', 'هه', 'جزئیات'),
(6, 'یلدای شگفت انگیر', 'http://localhost:8080/KoofaDesign/media/responsivefilemanager/source/slider/watermelon.jpg', 'غغغ', 'محصولات');

-- --------------------------------------------------------

--
-- Table structure for table `product_material`
--

DROP TABLE IF EXISTS `product_material`;
CREATE TABLE IF NOT EXISTS `product_material` (
  `MaterialId` int(11) NOT NULL AUTO_INCREMENT,
  `MaterialTitle` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`MaterialId`),
  UNIQUE KEY `MaterialTitle` (`MaterialTitle`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_material`
--

INSERT INTO `product_material` (`MaterialId`, `MaterialTitle`) VALUES
(12, 'آلمانی'),
(11, 'ایرانی'),
(14, 'پشمی'),
(10, 'ترکیه'),
(9, 'چینی'),
(16, 'حریر'),
(13, 'کتان'),
(15, 'کنف');

-- --------------------------------------------------------

--
-- Table structure for table `product_price`
--

DROP TABLE IF EXISTS `product_price`;
CREATE TABLE IF NOT EXISTS `product_price` (
  `PriceId` int(11) NOT NULL AUTO_INCREMENT,
  `PriceValue` int(11) NOT NULL DEFAULT '0',
  `MaterialId` int(11) NOT NULL DEFAULT '0',
  `SizeId` int(11) NOT NULL DEFAULT '0',
  `ProductId` bigint(20) NOT NULL,
  PRIMARY KEY (`PriceId`)
) ENGINE=InnoDB AUTO_INCREMENT=263 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_price`
--

INSERT INTO `product_price` (`PriceId`, `PriceValue`, `MaterialId`, `SizeId`, `ProductId`) VALUES
(186, 9500, 0, 0, 39),
(187, 10800, 0, 0, 40),
(188, 13500, 0, 0, 41),
(189, 39500, 0, 0, 42),
(190, 14000, 0, 0, 43),
(191, 32000, 0, 0, 44),
(192, 151000, 0, 0, 45),
(193, 75100, 0, 0, 46),
(194, 30800, 0, 0, 47),
(195, 39000, 0, 0, 48),
(196, 29000, 0, 0, 49),
(197, 31800, 0, 0, 50),
(198, 86000, 0, 0, 51),
(199, 150000, 0, 0, 52),
(200, 86000, 0, 0, 53),
(205, 540000, 9, 39, 55),
(206, 530000, 9, 39, 55),
(207, 520000, 9, 42, 55),
(208, 5120000, 9, 41, 55),
(209, 8120000, 11, 39, 55),
(210, 540000, 9, 39, 56),
(211, 530000, 9, 39, 56),
(212, 520000, 9, 42, 56),
(213, 5120000, 9, 41, 56),
(214, 8120000, 11, 39, 56),
(215, 540000, 9, 39, 57),
(216, 5120000, 9, 41, 57),
(217, 8120000, 11, 39, 57),
(218, 8120000, 11, 39, 58),
(219, 20, 9, 0, 59),
(220, 30, 10, 0, 59),
(221, 40, 11, 0, 59),
(222, 50, 12, 0, 59),
(223, 55, 13, 0, 59),
(224, 65, 14, 0, 59),
(225, 85, 16, 0, 59),
(230, 20, 9, 0, 60),
(231, 55, 13, 0, 60),
(232, 65, 14, 0, 60),
(233, 85, 16, 0, 60),
(234, 20, 9, 0, 61),
(235, 55, 13, 0, 61),
(236, 65, 14, 0, 61),
(237, 85, 16, 0, 61),
(238, 20, 9, 0, 62),
(239, 55, 13, 0, 62),
(240, 65, 14, 0, 62),
(241, 85, 16, 0, 62),
(242, 20, 9, 0, 63),
(243, 65, 14, 0, 63),
(244, 85, 16, 0, 63),
(245, 20, 9, 0, 64),
(246, 55, 13, 0, 64),
(247, 65, 14, 0, 64),
(248, 85, 16, 0, 64),
(249, 65, 14, 0, 65),
(250, 85, 16, 0, 65),
(251, 20, 9, 0, 66),
(252, 55, 13, 0, 66),
(253, 65, 14, 0, 66),
(254, 85, 16, 0, 66),
(259, 95000, 9, 0, 54),
(260, 12000, 10, 0, 54),
(261, 18000, 10, 0, 54),
(262, 156000, 11, 0, 54);

-- --------------------------------------------------------

--
-- Table structure for table `product_property`
--

DROP TABLE IF EXISTS `product_property`;
CREATE TABLE IF NOT EXISTS `product_property` (
  `RowId` bigint(20) NOT NULL AUTO_INCREMENT,
  `PropertyId` bigint(20) NOT NULL,
  `PropertyOptionId` bigint(20) NOT NULL,
  `ProductId` bigint(20) NOT NULL,
  PRIMARY KEY (`RowId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_size`
--

DROP TABLE IF EXISTS `product_size`;
CREATE TABLE IF NOT EXISTS `product_size` (
  `SizeId` int(11) NOT NULL AUTO_INCREMENT,
  `SizeTitle` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`SizeId`),
  UNIQUE KEY `SizeTitle` (`SizeTitle`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_size`
--

INSERT INTO `product_size` (`SizeId`, `SizeTitle`) VALUES
(31, '200*300'),
(33, '245*350'),
(37, '270*260'),
(34, '300*200'),
(35, '360*230'),
(36, '380*240'),
(38, '400*250'),
(32, '400*280'),
(39, 'LARGE'),
(42, 'MEDIUM'),
(41, 'SMALL'),
(40, 'XLARGE');

-- --------------------------------------------------------

--
-- Table structure for table `product_tags`
--

DROP TABLE IF EXISTS `product_tags`;
CREATE TABLE IF NOT EXISTS `product_tags` (
  `TagId` bigint(20) NOT NULL AUTO_INCREMENT,
  `TagTitle` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TagProductId` bigint(20) NOT NULL,
  PRIMARY KEY (`TagId`)
) ENGINE=InnoDB AUTO_INCREMENT=244 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_tags`
--

INSERT INTO `product_tags` (`TagId`, `TagTitle`, `TagProductId`) VALUES
(185, 'بیسکوییت', 39),
(186, 'گرجی', 39),
(187, 'بیسکوییت', 40),
(188, 'گرجی', 40),
(189, 'ویتانا', 40),
(190, 'تن ماهی', 41),
(191, 'دستمال کاغذی', 42),
(192, 'دستمال کاغذی طرح دار', 42),
(193, 'رب', 43),
(194, 'مرمز', 44),
(195, 'آجیل', 44),
(196, 'برنج', 45),
(197, 'هاشمی', 45),
(198, 'زعفران', 46),
(199, 'ماگ', 47),
(200, 'ماگ', 48),
(201, 'ماگ', 49),
(202, 'ماگ مندلیف', 49),
(203, 'ماگ', 50),
(204, 'ماگ', 51),
(205, 'تیشرت', 51),
(206, 'ماگ', 52),
(207, 'تیشرت', 52),
(208, 'تیشرت', 53),
(211, 'تابلو فرش', 55),
(212, 'تابلو فرش حریر', 55),
(213, 'تابلو فرش چوبی', 55),
(214, 'تابلو فرش', 56),
(215, 'تابلو فرش حریر', 56),
(216, 'تابلو فرش چوبی', 56),
(217, 'تابلو فرش', 57),
(218, 'تابلو فرش حریر', 57),
(219, 'تابلو فرش چوبی', 57),
(220, 'تابلو فرش', 58),
(221, 'تابلو فرش حریر', 58),
(222, 'کاغذ دیواری', 59),
(223, 'کاغذ دیواری', 59),
(224, 'کاغذ دیواری معما', 59),
(227, 'کاغذ دیواری', 60),
(228, 'کاغذ دیواری', 60),
(229, 'کاغذ دیواری', 61),
(230, 'کاغذ دیواری', 61),
(231, 'کاغذ دیواری', 62),
(232, 'کاغذ دیواری', 62),
(233, 'کاغذ دیواری', 63),
(234, 'کاغذ دیواری', 64),
(235, 'کاغذ دیواری', 64),
(236, 'کاغذ دیواری', 65),
(237, 'کاغذ دیواری', 65),
(238, 'کاغذ دیواری', 66),
(239, 'کاغذ دیواری', 66),
(242, 'تابلو فرش', 54),
(243, 'تابلو فرش حریر', 54);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
CREATE TABLE IF NOT EXISTS `state` (
  `StateId` bigint(20) NOT NULL AUTO_INCREMENT,
  `StateName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`StateId`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`StateId`, `StateName`) VALUES
(1, 'آذربايجان شرقي'),
(2, 'آذربايجان غربي'),
(3, 'اردبيل'),
(4, 'اصفهان'),
(5, 'البرز'),
(6, 'ايلام'),
(7, 'بوشهر'),
(8, 'تهران'),
(9, 'چهارمحال بختياري'),
(10, 'خراسان جنوبي'),
(11, 'خراسان رضوي'),
(12, 'خراسان شمالي'),
(13, 'خوزستان'),
(14, 'زنجان'),
(15, 'سمنان'),
(16, 'سيستان و بلوچستان'),
(17, 'فارس'),
(18, 'قزوين'),
(19, 'قم'),
(20, 'كردستان'),
(21, 'كرمان'),
(22, 'كرمانشاه'),
(23, 'كهكيلويه و بويراحمد'),
(24, 'گلستان'),
(25, 'گيلان'),
(26, 'لرستان'),
(27, 'مازندران'),
(28, 'مركزي'),
(29, 'هرمزگان'),
(30, 'همدان'),
(31, 'يزد');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `UserId` bigint(20) NOT NULL AUTO_INCREMENT,
  `UserFirstName` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserLastName` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserPhone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserHomePhone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserEmail` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserPassword` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserActivationCode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserIsActive` int(11) NOT NULL DEFAULT '0',
  `ModifiedDateTime` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CreateDateTime` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`UserId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserId`, `UserFirstName`, `UserLastName`, `UserPhone`, `UserHomePhone`, `UserEmail`, `UserPassword`, `UserActivationCode`, `UserIsActive`, `ModifiedDateTime`, `CreateDateTime`) VALUES
(4, '1محمدرضا', '1اسماعیلی', '09120572107', '', 'info@mail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1803', 1, '1398-08-19 21:19', '1398-08-19 21:19');

-- --------------------------------------------------------

--
-- Table structure for table `user_address`
--

DROP TABLE IF EXISTS `user_address`;
CREATE TABLE IF NOT EXISTS `user_address` (
  `AddressId` bigint(20) NOT NULL AUTO_INCREMENT,
  `AddressFullName` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AddressEmail` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AddressPhone` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AddressHomePhone` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AddressPostalCode` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AddressStateId` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AddressCityId` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserId` bigint(20) NOT NULL,
  PRIMARY KEY (`AddressId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_address`
--

INSERT INTO `user_address` (`AddressId`, `AddressFullName`, `AddressEmail`, `AddressPhone`, `AddressHomePhone`, `AddressPostalCode`, `AddressStateId`, `AddressCityId`, `Address`, `UserId`) VALUES
(1, '1', '2', '3', '4', '5', '6', '7', '8', 4),
(2, '564', '3654', '6', '44', '77', '88', '99', '1010', 4),
(3, 'محمدرضا', 'اسماعیلی', '09120572107', '02165228155', '3355156695', 'تهران', 'تهران', 'شهریار خیابان ولعصر خیابان 17 شهریور کوچه شایسته', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_meta`
--

DROP TABLE IF EXISTS `user_meta`;
CREATE TABLE IF NOT EXISTS `user_meta` (
  `UserMetaId` int(11) NOT NULL AUTO_INCREMENT,
  `UserMetaKey` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserMetaValue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserId` bigint(20) NOT NULL,
  PRIMARY KEY (`UserMetaId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_wish_list`
--

DROP TABLE IF EXISTS `user_wish_list`;
CREATE TABLE IF NOT EXISTS `user_wish_list` (
  `RowId` bigint(20) NOT NULL AUTO_INCREMENT,
  `ProductId` bigint(20) NOT NULL,
  `UserId` bigint(20) NOT NULL,
  PRIMARY KEY (`RowId`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_wish_list`
--

INSERT INTO `user_wish_list` (`RowId`, `ProductId`, `UserId`) VALUES
(4, 54, 4),
(5, 39, 4),
(6, 48, 4),
(7, 64, 4),
(8, 40, 4);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `productspecialsale`
--
ALTER TABLE `productspecialsale`
  ADD CONSTRAINT `productspecialsale_ibfk_1` FOREIGN KEY (`ProductId`) REFERENCES `product` (`ProductId`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
