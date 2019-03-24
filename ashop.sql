-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 24, 2019 at 05:07 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ashop`
--

-- --------------------------------------------------------

--
-- Table structure for table `childpages`
--

DROP TABLE IF EXISTS `childpages`;
CREATE TABLE IF NOT EXISTS `childpages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `pslug` varchar(90) DEFAULT NULL,
  `name` text,
  `slug` varchar(90) NOT NULL,
  `metak` text,
  `metad` text,
  `cover` text,
  `post` text,
  `ordr` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catid` int(11) NOT NULL,
  `catslug` varchar(90) DEFAULT NULL,
  `name` text,
  `img` text,
  `url` text,
  `ordr` int(11) DEFAULT NULL,
  `feat` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `catid`, `catslug`, `name`, `img`, `url`, `ordr`, `feat`) VALUES
(10, 9, 'test-lol', 'areset', '16905f3277b9335bad26bd23be110be31.png', 'url', 2, 1),
(11, 9, 'test-lol', 'accounting', 'a53492dd62622df3d356c1d270d6dc0e1.png', 'url234', 6, 1),
(12, 9, 'test-lol', 'areset', 'c7da45e8d79ee99b97eeecd11be75d8e1.png', 'url234345', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `clientscat`
--

DROP TABLE IF EXISTS `clientscat`;
CREATE TABLE IF NOT EXISTS `clientscat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `slug` varchar(90) DEFAULT NULL,
  `img` text,
  `ordr` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientscat`
--

INSERT INTO `clientscat` (`id`, `name`, `slug`, `img`, `ordr`) VALUES
(9, 'New 2', 'test-lol', '25a1339269188bbf7523c1794b849cce1.png', 5);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sitename` text,
  `logo` text,
  `phone` text,
  `email` text,
  `address` text,
  `gmaps` text,
  `cover` text,
  `post` text,
  `fpost` text,
  `facebook` text,
  `twitter` text,
  `insta` text,
  `youtube` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `sitename`, `logo`, `phone`, `email`, `address`, `gmaps`, `cover`, `post`, `fpost`, `facebook`, `twitter`, `insta`, `youtube`) VALUES
(1, 'Site Name', '9634a192de7dffb62363501440b6f3411.png', '03000000000', 'mail@gmail.com', 'Site Address ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3401.811535794667!2d74.42739221520551!3d31.501863731375714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190f3f511fb62b%3A0x84b33bb2d7a235e0!2sD.H.A.+Commercial+Broadway+DHA+Phase+8%2C+Lahore%2C+Punjab%2C+Pakistan!5e0!3m2!1sen!2s!4v1551120230888\" width=\"100%\" height=\"240\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>  ', '', '<p>serw</p>\r\n', ' National Development Consultants Pvt. Ltd. Pakistan (NDC). is one of the Pakistans premier consulting engineering organization, which has attained international standard and is ranked among the Pakistans top 5 consulting firms. It established in 1977 and progressing successfully for the last 41 years    ', 'fb', 'tw', 'inst', 'yt');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catid` int(11) NOT NULL,
  `catslug` varchar(90) DEFAULT NULL,
  `name` text,
  `img` text,
  `url` text,
  `ordr` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallerycat`
--

DROP TABLE IF EXISTS `gallerycat`;
CREATE TABLE IF NOT EXISTS `gallerycat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `slug` varchar(90) DEFAULT NULL,
  `img` text,
  `ordr` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

DROP TABLE IF EXISTS `home`;
CREATE TABLE IF NOT EXISTS `home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post` text NOT NULL,
  `img` text NOT NULL,
  `vid` text,
  `vidpost` text,
  `vidimg` text NOT NULL,
  `msg` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `post`, `img`, `vid`, `vidpost`, `vidimg`, `msg`) VALUES
(1, '<h1>Welcome To NDC (Pvt Ltd.)</h1>\r\n\r\n<p>National Development Consultants Pvt. Ltd. Pakistan (NDC). is one of the Pakistan&#39;s premier consulting engineering organization, which has attained international standard and is ranked among the Pakistan&#39;s top 5 consulting firms. It established in 1977 and progressing successfully for the last 39 years, NDC (Pvt.) Ltd. is an ISO 9001:2008 certified company having professional, technical and administrative manpower of 500 employees.</p>\r\n\r\n<p>The organization is a legal entity registered with Pakistan Engineering Council and also with several multinational funding agencies. Today, NDC (Pvt.) Ltd. stands as a multi-disciplinary Organization of Consulting Engineers providing high quality services to its clients at home and abroad.</p>\r\n', '40b5d9bb9f9298682747bdd37dfffd681.png', ' <iframe width=\"1140\" height=\"500\" src=\"https://www.youtube.com/embed/rKb1I6c_gJE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe> ', '<h2>NDC VISION</h2>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>ipsum quis varius. Quisque pharetra leo erat, non eleifend nibh interdum quis.</p>\r\n', 'f1332156a0e27a1feff056b69a9844a71.png', '<p>National Development Consultants Pvt. Ltd. Pakistan, is one of the Pakistan&#39;s premier consulting engineering organization, which has attained international standard and is ranked among the Pakistan&#39;s top 5 consulting firms.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `jewelry`
--

DROP TABLE IF EXISTS `jewelry`;
CREATE TABLE IF NOT EXISTS `jewelry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `pslug` varchar(90) DEFAULT NULL,
  `name` text,
  `slug` varchar(90) DEFAULT NULL,
  `metak` text,
  `metad` text,
  `img` text,
  `price` int(11) DEFAULT NULL,
  `desp` text,
  `code` text,
  `feat` text,
  `ordr` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jewelry`
--

INSERT INTO `jewelry` (`id`, `pid`, `pslug`, `name`, `slug`, `metak`, `metad`, `img`, `price`, `desp`, `code`, `feat`, `ordr`) VALUES
(9, 6, 'neckless', 'The Avnita Pendant', 'the-avnita-pendant', 'The Avnita Pendant', 'The Avnita Pendant', 'd608674217a79905f84aa66d9390334c1.png', 5000, '<p>hello desp</p>\r\n', 'https://kinvid0.bluestone.com/output/mp4/BIIP0359P04-VIDEO-19122.mp4/BIIP0359P04-VIDEO-19122.mp4', '1', 4),
(10, 9, 'ear-rings', 'The Vallie Stud Earrings', 'the-vallie-stud-earrings', 'The Vallie Stud Earrings', 'The Vallie Stud Earrings', '6e3bd46a2557ab6e988dcae5fe4abc3a1.png', 5000, '<h2>PRODUCT DETAILS</h2>\r\n\r\n<p>Product Code</p>\r\n\r\n<p>039401-6122105</p>\r\n\r\n<p>Height</p>\r\n\r\n<p>7.81 mm</p>\r\n\r\n<p>Product Weight (Approx.)</p>\r\n\r\n<p>2.48 gram</p>\r\n\r\n<h2>DIAMOND DETAILS</h2>\r\n\r\n<p>Total Weight0.116 Ct</p>\r\n\r\n<p>Total No. Of Diamonds14</p>\r\n', 'https://kinvid0.bluestone.com/output/mp4/BIID0461S07-VIDEO-31168.mp4/BIID0461S07-VIDEO-31168.mp4', '1', 2),
(11, 6, 'neckless', 'The Caroun Pendant', 'the-caroun-pendant', 'The Caroun Pendant', 'The Caroun Pendant', 'ceab2869d3678e51e54625a94ed7da2e1.png', 10000, '<h2>PRODUCT DETAILS</h2>\r\n\r\n<p>*Neck chain displayed is not part of the product.</p>\r\n\r\n<p>Product Code</p>\r\n\r\n<p>039369-6121593</p>\r\n\r\n<p>Height</p>\r\n\r\n<p>18.02 mm</p>\r\n\r\n<p>Width</p>\r\n\r\n<p>9.77 mm</p>\r\n\r\n<p>Product Weight (Approx.)</p>\r\n\r\n<p>1.12 gram</p>\r\n\r\n<h2>DIAMOND DETAILS</h2>\r\n\r\n<p>Total Weight0.111 Ct</p>\r\n\r\n<p>Total No. Of Diamonds13</p>\r\n\r\n<h2>METAL DETAILS</h2>\r\n', 'https://kinvid1.bluestone.com/output/mp4/BIID0461P08-VIDEO-31149.mp4/BIID0461P08-VIDEO-31149.mp4', '0', 3),
(12, 6, 'neckless', 'The Floria Pendant', 'the-floria-pendant', 'The Floria Pendant', 'The Floria Pendants', '9a503fa137572b1a920068c8b49d63971.png', 2000, '<p>desp</p>\r\n', 'https://kinvid1.bluestone.com/output/mp4/BIPG0008P10-VIDEO-3902.mp4/BIPG0008P10-VIDEO-3902.mp4', '0', 8),
(13, 6, 'neckless', 'The Fayza Pendant', 'the-fayza-pendant', 'The Fayza Pendant', 'The Fayza Pendant', '9ba8ae534df1ba179d58ac20cfdea9221.png', 10000, '<p>sedp</p>\r\n', 'https://kinvid1.bluestone.com/output/mp4/BVIG0450P04-VIDEO-29728.mp4/BVIG0450P04-VIDEO-29728.mp4', '1', 12),
(14, 6, 'neckless', 'The Bernice Pendant', 'the-bernice-pendant', 'The Bernice Pendant', 'The Bernice Pendant', '7ad3ef0fb1ab72cc99bcf2519433fff61.png', 20000, '', 'https://kinvid1.bluestone.com/output/mp4/BISP0188P04-VIDEO-33561.mp4/BISP0188P04-VIDEO-33561.mp4', '0', 18);

-- --------------------------------------------------------

--
-- Table structure for table `jewelrycat`
--

DROP TABLE IF EXISTS `jewelrycat`;
CREATE TABLE IF NOT EXISTS `jewelrycat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `slug` varchar(40) DEFAULT NULL,
  `img` text,
  `desp` text,
  `feat` text,
  `ordr` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jewelrycat`
--

INSERT INTO `jewelrycat` (`id`, `name`, `slug`, `img`, `desp`, `feat`, `ordr`) VALUES
(10, 'Others', 'others', NULL, NULL, NULL, 5),
(6, 'Neckless', 'neckless', NULL, NULL, NULL, 1),
(7, 'Rings', 'rings', NULL, NULL, NULL, 2),
(8, 'Wrist Watches', 'wrist-watches', NULL, NULL, NULL, 4),
(9, 'Ear Rings', 'ear-rings', NULL, NULL, NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `makeup`
--

DROP TABLE IF EXISTS `makeup`;
CREATE TABLE IF NOT EXISTS `makeup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `pslug` varchar(90) DEFAULT NULL,
  `name` text,
  `slug` varchar(90) DEFAULT NULL,
  `metak` text,
  `metad` text,
  `img` text,
  `price` int(11) DEFAULT NULL,
  `desp` text,
  `code` text,
  `feat` text,
  `ordr` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makeup`
--

INSERT INTO `makeup` (`id`, `pid`, `pslug`, `name`, `slug`, `metak`, `metad`, `img`, `price`, `desp`, `code`, `feat`, `ordr`) VALUES
(11, 5, 'bases', 'New 2', 'test-lol', 'meta, key, new', 'meta, desp, new', 'adc1b24bbb5a881f2fae4cea4625eb561.png', 7000, '<p>FDesep</p>\r\n\r\n<ul>\r\n	<li>gtgf</li>\r\n</ul>\r\n', 'https://media.istockphoto.com/videos/close-up-of-new-red-lipstick-in-a-beautiful-girl-hand-video-id542115910', '0', 1),
(12, 5, 'foundation', 'ULTRA HD CONCEALER ', 'ultra-hd-concealer-', 'ULTRA HD CONCEALER ', 'ULTRA HD CONCEALER ', '538c39ace93dfd4aadd6e065b23123121.png', 2000, '<p>ULTRA HD CONCEALER, the first* self-setting concealer that instantly and lastingly brightens the eye contour by capturing light: from every possible angle the eye area appears flawless and luminous</p>\r\n', 'https://media.istockphoto.com/videos/close-up-of-new-red-lipstick-in-a-beautiful-girl-hand-video-id542115910', '0', 2),
(13, 5, 'foundation', 'MATTE VELVET SKIN ', 'matte-velvet-skin-', 'MATTE VELVET SKIN ', 'MATTE VELVET SKIN ', 'a77c3b8ca597d1dbd63e563e77c68b181.png', 7000, '<p>Next-generation mattifying powder foundation* that blurs imperfections for 12 hours** and leaves a life-like second-skin water-resistant finish. Available in 30 shades.</p>\r\n', 'https://media.istockphoto.com/videos/eyeshadow-set-video-id151616546', '1', 4),
(14, 5, 'foundation', 'ULTRA HD LOOSE POWDER ', 'ultra-hd-loose-powder-', 'ULTRA HD LOOSE POWDER ', 'ULTRA HD LOOSE POWDER ', '3e922392a30206f63bddfb21b7e435661.png', 6000, '<p>A veil to matify and blurr your complexion with the Ultra HD loose powder. Choose the pressed powder for your daily touch ups on the go.</p>\r\n', 'https://media.istockphoto.com/videos/stylist-gaining-cosmetic-shadows-on-the-brush-video-id522763482', '0', 6),
(15, 5, 'foundation', 'ULTRA HD PRESSED POWDER', 'ultra-hd-pressed-powder', 'ULTRA HD PRESSED POWDER ', 'ULTRA HD PRESSED POWDER ', '15902e54487fb7d757e095de1606a57a1.png', 9000, '<p>A veil to matify and blurr your complexion with the Ultra HD loose powder. Choose the pressed powder for your daily touch ups on the go.</p>\r\n', 'https://media.istockphoto.com/videos/close-up-of-new-red-lipstick-in-a-beautiful-girl-hand-video-id542115910', '0', 8),
(16, 5, 'foundation', 'SUPER MATTE LOOSE POWDER  ', 'super-matte-loose-powder-', 'SUPER MATTE LOOSE POWDER  ', 'SUPER MATTE LOOSE POWDER  ', '45844563c9d4f0fe3ffb79b17ee7ca3d1.png', 9000, '<p>The Super Matte Loose Powders are ultra-fine, ultra-transparent powders. Very light and discreet, they set the makeup, even it out and give the complexion a matte and natural finish.</p>\r\n', 'https://media.istockphoto.com/videos/eyeshadow-set-video-id151616546', '1', 12),
(17, 4, 'lipstick', 'ARTIST ROUGE CREME ', 'artist-rouge-creme-', 'ARTIST ROUGE CREME ', 'ARTIST ROUGE CREME ', '85b1826bf8daa5b5e84d676cfb18ab1f1.png', 90000, '<p>ARTIST ROUGE CREME has a high-pigment formula for a stroke coverage and a spectacular 8 hour* wear. *Instrumental test method performed on 20 women</p>\r\n', 'https://media.istockphoto.com/videos/stylist-gaining-cosmetic-shadows-on-the-brush-video-id522763482', '0', 3),
(18, 4, 'lipstick', 'ARTIST PLEXI-GLOSS ', 'artist-plexi-gloss-', 'ARTIST PLEXI-GLOSS ', 'ARTIST PLEXI-GLOSS ', 'c5c597737775b5b05821d192aa385f0c1.png', 8000, '<p>Artist Plexi-Gloss gives lips as a vinyl-shine finish</p>\r\n', 'https://media.istockphoto.com/videos/stylist-gaining-cosmetic-shadows-on-the-brush-video-id522763482', '1', 5);

-- --------------------------------------------------------

--
-- Table structure for table `makeupcat`
--

DROP TABLE IF EXISTS `makeupcat`;
CREATE TABLE IF NOT EXISTS `makeupcat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `slug` varchar(40) DEFAULT NULL,
  `img` text,
  `desp` text,
  `feat` text,
  `ordr` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makeupcat`
--

INSERT INTO `makeupcat` (`id`, `name`, `slug`, `img`, `desp`, `feat`, `ordr`) VALUES
(5, 'Foundation', 'foundation', '806c63cffbaba8497785e57011ee9f611.png', NULL, NULL, 2),
(4, 'Lipstick', 'lipstick', '2e0b63a57ca6660e7f20260caa232ab41.png', NULL, NULL, 7),
(6, 'Eyeliners', 'eyeliner', NULL, NULL, NULL, 4),
(8, 'Brushes', 'brushes', NULL, NULL, NULL, 9);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `actid` int(11) NOT NULL,
  `type` varchar(40) DEFAULT NULL,
  `proslug` varchar(40) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `status` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `actid`, `type`, `proslug`, `qty`, `status`) VALUES
(49, 2, 'jewelry', 'the-caroun-pendant', 99, 'cart'),
(31, 2, 'makeup', 'the-caroun-pendant', 1, 'cart'),
(27, 2, 'makeup', 'artist-rouge-creme-', 2, 'confirm'),
(30, 2, 'makeup', 'the-vallie-stud-earrings', 1, 'cart'),
(26, 2, 'makeup', 'test-lol', 2, 'confirm'),
(48, 2, 'jewelry', 'the-bernice-pendant', 1, 'cart'),
(47, 2, 'jewelry', 'the-floria-pendant', 8, 'cart'),
(46, 2, 'jewelry', 'the-fayza-pendant', 1, 'cart');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `slug` varchar(90) NOT NULL,
  `metak` text,
  `metad` text,
  `cover` text,
  `post` text,
  `res` int(11) NOT NULL DEFAULT '0',
  `ordr` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `slug`, `metak`, `metad`, `cover`, `post`, `res`, `ordr`) VALUES
(1, 'Home', 'home', 'meta, key, new', 'meta, desp, new', '16221544bd7db1d546fd5d83855d330b1.png', '<h2>Hello World</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>234</p>\r\n', 1, 1),
(2, 'Customer Support', 'contacts', 'contacts', 'meta description', '', '', 1, 11),
(3, 'Manufacturer', 'clients', 'clients , test', 'meta description', '', '', 1, 5),
(15, 'Jewelry ', 'jewelry', 'Projects', 'meta description', '', '', 1, 2),
(18, 'Makeup', 'makeup', 'services', 'meta description', '', '', 1, 3),
(12, 'About Us', 'pages', 'pages, test', 'meta description pages', '', '', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `pimgs`
--

DROP TABLE IF EXISTS `pimgs`;
CREATE TABLE IF NOT EXISTS `pimgs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `pslug` varchar(90) NOT NULL,
  `img` text,
  `feat` int(11) DEFAULT NULL,
  `ordr` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pimgs`
--

INSERT INTO `pimgs` (`id`, `pid`, `pslug`, `img`, `feat`, `ordr`) VALUES
(4, 6, 'test-lol', '25994b8adc1896b5d1d0e7687de9f99f1.png', 0, 5),
(5, 6, 'test-lol', '2ef612b70bd1f23c176ead9c2a7530d51.png', 1, 8),
(7, 7, 'new-file', '15e5fb6e8fdc527bc69849c6d6313fad1.png', 1, 5),
(8, 8, 'events2', '183f3942fcd561359f8f3bd1d8d488871.png', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `simgs`
--

DROP TABLE IF EXISTS `simgs`;
CREATE TABLE IF NOT EXISTS `simgs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `pslug` varchar(90) NOT NULL,
  `img` text,
  `feat` int(11) DEFAULT NULL,
  `ordr` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `simgs`
--

INSERT INTO `simgs` (`id`, `pid`, `pslug`, `img`, `feat`, `ordr`) VALUES
(3, 8, 'new-file', 'dd56438bb52bae457e5ec1faa05e152f1.png', 1, 1),
(4, 8, 'new-file', '06c672370fcfaee5d80c98597306ec881.png', 0, 8);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `vid` text,
  `ordr` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `name`, `vid`, `ordr`) VALUES
(4, '', 'X6QPFWuFmsFe2NS9', 5),
(5, '', 'bwr-AQsCw95lDAoV', 7),
(6, '', 'yAhqKTsOAiQ000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `lname` text,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` varchar(10) DEFAULT NULL,
  `mobile` text,
  `phone` text,
  `address` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lname`, `username`, `password`, `role`, `mobile`, `phone`, `address`) VALUES
(1, NULL, NULL, 'admin', 'admin990', 'admin', '', '', ''),
(2, 'HAMZA', 'PERVAIZ', 'hamzap', '1234', NULL, '3204157040', '3204157040', ' Al-Rehman Garden Phase 2,'),
(5, 'HAMZA PERVAIZ', NULL, 'hamzapervaiz5@gmail.com', '1234', NULL, '', '', ''),
(6, 'lol', NULL, 'lol', 'lol', NULL, '', '', ''),
(7, 'lol2', NULL, 'lol2', 'lol2', NULL, '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
