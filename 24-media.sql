-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2020 at 05:17 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `24-media`
--

-- --------------------------------------------------------

--
-- Table structure for table `apilink`
--

CREATE TABLE `apilink` (
  `urlid` int(20) NOT NULL,
  `portalname` varchar(100) NOT NULL,
  `url` varchar(500) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apilink`
--

INSERT INTO `apilink` (`urlid`, `portalname`, `url`, `image`) VALUES
(2, 'ABC News', 'abc-news', 'abcnews.png'),
(3, 'ABC News(au)', 'abc-news-au', 'ABC_News_au.png'),
(4, 'Aftenposten', 'aftenposten', 'aftenposten.png'),
(5, 'Al Jazeera English', 'al-jazeera-english', 'AlJazeera_logo.png'),
(6, 'ANSA.it ', 'ansa', 'ansa.png'),
(7, 'Argaam', 'argaam', 'argaam.jpg'),
(8, 'Ars Technica', 'ars-technica', 'ars-technica.png'),
(9, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `search_portal`
--

CREATE TABLE `search_portal` (
  `heading` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search_portal`
--

INSERT INTO `search_portal` (`heading`) VALUES
(''),
(''),
('Google News'),
('Times Of India'),
('The Hindu'),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
('ABC News'),
('NBC News'),
('National Geographic'),
('CNN'),
(''),
('Buzzfeed'),
(''),
('Bing News'),
('');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addnews`
--

CREATE TABLE `tbl_addnews` (
  `newsid` int(10) NOT NULL,
  `heading` varchar(500) NOT NULL,
  `date` varchar(500) NOT NULL,
  `data` varchar(5000) NOT NULL,
  `checkid` int(10) NOT NULL,
  `photo` varchar(1000) NOT NULL,
  `status` varchar(10) NOT NULL,
  `dt` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_addnews`
--

INSERT INTO `tbl_addnews` (`newsid`, `heading`, `date`, `data`, `checkid`, `photo`, `status`, `dt`) VALUES
(1, 'Loss of base in urban areas worries CPM', '2018-02-25', '           \r\n   The CPM is facing one of its biggest challenges to its growth in cities. The loss of base in urban areas and difficulties of workers to break into gated residential areas have found mention in the organizational report presented at the CPM state conference.\r\nâ€œWe are planning strategies to deal with specific problems faced by people in urban areas like garbage disposal,â€ said CPM central committee member A Vijayaraghavan. The CPM, which controls majority of municipal corporations in the state, can use such opportunities to win the confidence of urban people, feels the party leadership.\r\nIn the district conferences held at Thiruvananthapuram and Ernakulam, delegates pointed out the difficulty in breaking into gated communities. While party members can hold door-to door campaigns easily in residential areas, they have no access to gated communities.\r\nThe party has initiated steps to create â€˜fellow traveller groupsâ€™ within gated communities. â€œWe have groups of friends in several apartment units in Kochi. We will emulate that model in other cities soon,â€ said a senior CPM leader, who is part of the think tank working on urban issues. Vijayaraghavan said while it was easier for them to identify residents in rural areas through family connections and friends, this is not possible in apartments in cities with a largely floating population.\r\nThe state conference has decided to formulate a strategy to guide CPMâ€™s urban local committees to expand base.\r\n\r\nGet latest news & live updates on the go on your pc with News App. Download The Times of India news app for your device. Read more City news in English and other languages.\r\n           ', 11, 'cpm.jpg', '', ''),
(2, 'Civic bodies fail to control mosquito breeding', '2018-02-25', '           \r\n           \r\n           KOCHI: Mosquito density remained above the accepted levels all through 2017. In some months, it has increased by almost 25 to 35% of the accepted level in the city even as authorities claimed that they have taken vector control measures.\r\nAccording to officials with the district vector control unit, the man hour density (MHD) of the vector remained at 100 MHD in January. While the density stood at 100 MHD in December last year, it was 88 and 80 in November and October, respectively.\r\nDensity is calculated based on the number of mosquitoes caught by 10 people in an hour by using an aspirator.\r\nAccording to health officials, the larva density of culicinae which causes filariasis is 0.28, and Aedes which causes dengue is 0.45. The pupal density of culicinae is 0.04 and 0.1for Aedes.\r\nâ€œMosquito density reaches its peak during the months of November to March as it is the breeding season. Last January, the mosquito density touched 102MHD. Vector density up to 80MHD is normal but if it goes beyond that then it needs to be monitored,â€ said an official with the health department.\r\nDespite the high density of mosquitoes posing the risk of vector-borne diseases, corporation authorities are not doing enough to address the issue of garbage being piled up in the nook and corner of the city. Clogged drains and piled-up waste have become breeding grounds for mosquitoes. Failure to clean up waterbodies also worsened the situation.\r\nMeanwhile, health standing committee chairperson V K Minimol said that the corporation had started implementing vector-control measures from November first week itself.', 11, 'download.png', '', ''),
(3, 'Gold worth Rs 18 lakh seized', '2018-02-26', '           \r\n           \r\n           KOCHI: Air intelligence unit (AIU) of the customs department has foiled two more attempts to smuggle gold into the city. Gold worth Rs18 lakh was seized from two passengers in separate seizures by the AIU in the early hours of Saturday.\r\nAccording to customs sleuths, a Calicut native was caught when he landed at Cochin International Airport Ltd (Cial) from Bahrain in a Gulf Air flight on Saturday morning. He had concealed three gold bars weighing 100g each inside the battery cavity of a mobile tablet. The tablet was kept inside the baggage. The seized gold was worth Rs 9.25 lakh, said a customs official.', 11, 'gold-647_110617064308.jpg', '', ''),
(5, 'qwqwqw', '2020-04-29', '           \r\n           \r\n           qwqededfe', 13, '5.jpg', 'update', '17/05/20 1'),
(6, 'LMCA S2 SUPPLYMENTERY REGISTERTION STARTED', '2020-05-21', '           PLEASE CONTACT YOUR COLLLEGE\r\n           \r\n           ', 17, 'images.jpg', 'update', '21/05/20 1'),
(8, 'today covid cases', '2020-05-22', '           \r\n           \r\n           ahcbxsuhbcuxshcbxhh', 18, '2.jpg', 'update', '21/05/20 0'),
(9, 'sfhdjkhvb', '2020-05-21', '           \r\n           \r\n           jhcbxzhb', 18, '5.jpg', 'update', '21/05/20 1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_channel`
--

CREATE TABLE `tbl_channel` (
  `cid` int(10) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `curl` varchar(50) NOT NULL,
  `cimage` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_channel`
--

INSERT INTO `tbl_channel` (`cid`, `cname`, `curl`, `cimage`) VALUES
(4, 'Sky News', '9Auq9mYxFEE', 'sky-news-logo.png'),
(6, 'India Today', '62rmi9KMvVE', '3FtQQHyA.jpg'),
(7, 'Al Jazeera English', '2EppLNonncc', 'unnamed.jpg'),
(8, 'Asianet News', 'iL53Y28Rp84', 'Asianet_News_Logo.png'),
(9, 'Manorama News', 'jjH6v95z3Nw', 'Manorama-News-TV.png'),
(11, 'DD News', 'wtU0zh9J2uc', 'kRMrVD_a_400x400.jpg'),
(12, 'Media One', 'd1iwUB9YFnA', 'media-one.jpg'),
(13, 'REPORTER News', '4SF29XNpu-8', 'df-logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `loginid` int(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `cpass` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`loginid`, `password`, `cpass`, `status`, `username`) VALUES
(2, 'admin', 'admin', 'admin', 'admin'),
(11, 'appugeo1', 'appugeo1', 'user', ''),
(13, 'alan123', 'alan123', 'user', ''),
(14, 'mathew123', 'mathew123', 'user', ''),
(15, 'anandhu', 'anandhu', 'user', ''),
(16, 'aby1', 'aby1', 'user', ''),
(17, 'chinnu', 'chinnu', 'user', ''),
(18, 'adhi', 'adhi', 'user', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

CREATE TABLE `tbl_message` (
  `aid` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `message` varchar(50) NOT NULL,
  `dt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_message`
--

INSERT INTO `tbl_message` (`aid`, `userid`, `message`, `dt`) VALUES
(1, 11, 'hai', '16/09/18 11:48:07am'),
(2, 14, 'Hai Mathew Welcome to News Hub', '16/09/18 11:53:18am'),
(3, 13, 'Test Your Data', '16/05/20 04:06:13am'),
(4, 13, 'Test Your Data', '17/05/20 11:49:00am'),
(5, 17, 'good news', '21/05/20 01:04:17pm'),
(6, 15, 'hai', '21/05/20 04:39:26pm'),
(7, 16, 'hai adhi', '21/05/20 08:39:39pm'),
(8, 16, 'hello', '21/05/20 08:39:46pm'),
(9, 18, 'hai', '21/05/20 08:40:16pm'),
(10, 18, 'hello', '21/05/20 08:40:22pm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portal`
--

CREATE TABLE `tbl_portal` (
  `pid` int(10) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `ccode` varchar(50) NOT NULL,
  `cimage` varchar(50000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_portal`
--

INSERT INTO `tbl_portal` (`pid`, `cname`, `ccode`, `cimage`) VALUES
(1, 'Australia', 'au', 'au.svg'),
(2, 'Argentina', 'ar', 'ar.svg'),
(3, 'Austria', 'at', 'at.svg'),
(4, 'Belgium', 'be', 'be.svg'),
(5, 'Brazil', 'br', 'br.svg'),
(6, 'Bulgaria', 'bg', 'bg.svg'),
(7, 'Canada', 'ca', 'ca.svg'),
(8, 'China', 'cn', 'cn.svg'),
(9, 'Colombia', 'co', 'co.svg'),
(10, 'Cuba', 'cu', 'cu.svg'),
(11, 'Czech Republic', 'cz', 'cz.svg'),
(12, 'Egypt', 'eg', 'eg.svg'),
(13, 'France', 'fr', 'fr.svg'),
(14, 'Germany', 'de', 'de.svg'),
(15, 'Greece', 'gr', 'gr.svg'),
(16, 'Hong Kong', 'hk', 'hk.svg'),
(17, 'Hungary', 'hu', 'hu.svg'),
(18, 'India', 'in', 'in.svg'),
(22, 'Malaysia', 'my', 'my.svg'),
(23, 'Venuzuela', 've', 've.svg'),
(24, 'United States', 'us', 'us.svg'),
(25, 'United Kingdom', 'gb', 'gb.svg'),
(26, 'Ukraine', 'ua', 'ua.svg'),
(27, 'UAE', 'ae', 'ae.svg'),
(28, 'Turkey', 'tr', 'tr.svg'),
(29, 'Thailand', 'th', 'th.svg'),
(30, 'Taiwan', 'tw', 'tw.svg'),
(31, 'Switzerland', 'ch', 'ch.svg'),
(32, 'Sweden', 'se', 'se.svg'),
(33, 'morway', 'no', 'no.svg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_publishers`
--

CREATE TABLE `tbl_publishers` (
  `pid` int(10) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pcode` varchar(50) NOT NULL,
  `pimage` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_publishers`
--

INSERT INTO `tbl_publishers` (`pid`, `pname`, `pcode`, `pimage`) VALUES
(1, 'Der Tagesspiegel', 'der-tagesspiegel', '2-formatOriginal.png'),
(2, 'Bild', 'bild', '3.bild.png'),
(3, 'Fox Sports', 'fox-sports', '120x120.png'),
(4, 'Entertainment Weekly', 'entertainment-weekly', '782bdf163168ca78e52d32d27b830793.png'),
(5, 'Google News', 'google-news', '1703439073-news-thumb-128_w (1).png'),
(6, 'Google News Argentina', 'google-news-ar', '1703439073-news-thumb-128_w (2).png'),
(7, 'Google News Australia', 'google-news-au', '1703439073-news-thumb-128_w (3).png'),
(8, 'Google News Brasil', 'google-news-br', '1703439073-news-thumb-128_w (4).png'),
(9, 'Google News Canada', 'google-news-ca', '1703439073-news-thumb-128_w (5).png'),
(10, 'Google News France', 'google-news-fr', '1703439073-news-thumb-128_w (6).png'),
(11, 'Google News India', 'google-news-in', '1703439073-news-thumb-128_w (7).png'),
(12, 'Google News lsrael', 'google-news-is', '1703439073-news-thumb-128_w (8).png'),
(13, 'Google News Italy', 'google-news-it', '1703439073-news-thumb-128_w (9).png'),
(14, 'Google News Russia', 'google-news-ru', '1703439073-news-thumb-128_w (10).png'),
(15, 'Google News Saudi Arabia', 'google-news-sa', '1703439073-news-thumb-128_w (11).png'),
(16, 'Google News UK', 'google-news-uk', '1703439073-news-thumb-128_w.png'),
(17, 'Associated Press ', 'associated-press', 'A-120.png'),
(18, 'ANSA it', 'ansa', 'ansa-144-precomposed.png'),
(19, 'Ary News', 'ary-news', 'apple-icon-120x120.png'),
(20, 'Bleacher Report', 'bleacher-report', 'appleTouchIcon.png'),
(21, 'Ars Technica', 'ars-technica', 'apple-touch-icon.png'),
(22, 'Axios', 'axios', 'apple-touch-icon-120x120 (1).png'),
(23, 'Engadget', 'engadget', 'apple-touch-icon-120x120 (2).png'),
(24, 'Fox News', 'fox-news', 'apple-touch-icon-120x120 (3).png'),
(25, 'Aftenposten', 'aftenposten', 'apple-touch-icon-120x120.png'),
(26, 'Bloomberg', 'bloomberg', 'apple-touch-icon-120x120-ef3226f2bd.png'),
(27, 'El Mundo', 'el-mundo', 'apple-touch-icon-120x120-precomposed.png'),
(28, 'ABC News AU', 'abc-news-au', 'apple-touch-icon-144x144.png'),
(29, 'Australian Financial Review', 'australian-financial-review', 'apple-touch-icon-144x144-precomposed.png'),
(30, 'Breitbart News', 'breitbart-news', 'apple-touch-icon-152x152.png'),
(31, 'Globo', 'globo', 'apple-touch-icon-iphone-retina.png'),
(32, 'Business Insider', 'business-insider', 'apple-touch-icon-precomposed (1).png'),
(33, 'Business Insider UK', 'business-insider-uk', 'apple-touch-icon-precomposed (2).png'),
(34, 'Financial Post', 'financial-post', 'b4ece3189893389a03f063830eacd95c.png'),
(35, 'BBC News', 'bbc-news', 'B-120-3192b9.png'),
(36, 'BBC Sport', 'bbc-sport', 'B-120-3192b9-sp.png'),
(37, 'CNBC', 'cnbc', 'C-120-fab715.png'),
(38, 'ESPN', 'espn', 'espn_icon-152x152.min.png'),
(39, 'ESPN Cric Info', 'espn-cric-info', 'espncricinfo_icon-152x152.min.png'),
(40, 'ABC News ', 'abc-news', 'touch-icon-ipad-retina.png'),
(41, 'Al Jazeera English', 'al-jazeera-english', 'touch-icon-iphone-retina.png'),
(42, 'Die Zeit', 'die-zeit', 'zo-ipad-114x114.png'),
(43, 'Hacker News', 'hacker-news', 'Y-120-ff6600.png'),
(44, 'National Geographic', 'national-geographic', 'apple-touch-icon.ngsversion.5a8ccc30.png'),
(45, 'MSNBC', 'msnbc', 'apple-touch-icon-120x120 (4).png'),
(46, 'NBC News ', 'nbc-news', 'apple-touch-icon-precomposed.png'),
(47, 'The Times of India', 'the-times-of-india', 'I-120.png'),
(48, 'The Hindu', 'the-hindu', 'T-120-ffffff.png'),
(49, 'The New York Times', 'the-new-york-times', 'apple-touch-icon-319373aaf4524d94d38aa599c56b8655.png'),
(50, 'The Sport Bible', 'the-sport-bible', 'SB.png'),
(51, 'The Washington', 'the-washington-post', 'n-Ic9nBO.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reg`
--

CREATE TABLE `tbl_reg` (
  `regid` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneno` varchar(50) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reg`
--

INSERT INTO `tbl_reg` (`regid`, `name`, `email`, `phoneno`, `id`) VALUES
(10, 'Geo Thomas', 'geothomas181997@gmail.com', '7907581948', 11),
(12, 'Alan Mathew', 'alanmathew@gmail.com', '7788554455', 13),
(13, 'Mathew T John', 'mathew123@gmail.com', '8545621235', 14),
(14, 'Anandhu sabu', 'anandhusabu1247@gmail.com', '8086093794', 15),
(15, 'ABY', 'anandhusabu1247@gmail.com', '8086093794', 16),
(16, 'chinnu', 'chinnu@gmail.com', '9946941588', 17),
(17, 'adhi', 'adhi@gmail.com', '8086093794', 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apilink`
--
ALTER TABLE `apilink`
  ADD PRIMARY KEY (`urlid`);

--
-- Indexes for table `tbl_addnews`
--
ALTER TABLE `tbl_addnews`
  ADD PRIMARY KEY (`newsid`);

--
-- Indexes for table `tbl_channel`
--
ALTER TABLE `tbl_channel`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`loginid`);

--
-- Indexes for table `tbl_message`
--
ALTER TABLE `tbl_message`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `tbl_portal`
--
ALTER TABLE `tbl_portal`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `tbl_publishers`
--
ALTER TABLE `tbl_publishers`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `tbl_reg`
--
ALTER TABLE `tbl_reg`
  ADD PRIMARY KEY (`regid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apilink`
--
ALTER TABLE `apilink`
  MODIFY `urlid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_addnews`
--
ALTER TABLE `tbl_addnews`
  MODIFY `newsid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_channel`
--
ALTER TABLE `tbl_channel`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `loginid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_message`
--
ALTER TABLE `tbl_message`
  MODIFY `aid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_portal`
--
ALTER TABLE `tbl_portal`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_publishers`
--
ALTER TABLE `tbl_publishers`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tbl_reg`
--
ALTER TABLE `tbl_reg`
  MODIFY `regid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
