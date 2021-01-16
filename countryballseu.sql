-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: innodb.endora.cz:3306
-- Generation Time: Jan 16, 2021 at 10:24 AM
-- Server version: 5.6.45-86.1
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `countryballseu`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `colour` varchar(255) NOT NULL,
  `canseedashboard` int(11) DEFAULT '0',
  `caneditpermissions` int(11) DEFAULT '0',
  `cancreateadminposts` int(11) DEFAULT '0',
  `canapproveposts` int(11) DEFAULT '0',
  `canmoderateposts` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `title`, `colour`, `canseedashboard`, `caneditpermissions`, `cancreateadminposts`, `canapproveposts`, `canmoderateposts`) VALUES
(1, 'Administrátor', '#ff0000', 1, 1, 1, 1, 1),
(2, 'test', '#000000', 0, 0, 0, 0, 0),
(3, 'test', '#ff0000', 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `fileName` varchar(255) NOT NULL,
  `added` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `desc` text NOT NULL,
  `label` varchar(15) DEFAULT NULL,
  `title` varchar(25) DEFAULT NULL,
  `review` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`id`, `date`, `fileName`, `added`, `type`, `desc`, `label`, `title`, `review`) VALUES
(4, 1606036917, '1606036918.png', 9, 'cb', 'Jeden zo slovakia ballov.', 'SlovakiaBall', 'SlovakiaBall1', 0),
(5, 1606036937, '1606036937.png', 12, 'cb', 'Druhý zo slovakia ballov', 'SlovakiaBall', 'SlovakiaBall2', 0),
(10, 1606209712, '1606209712.jpg', 12, 'cb', 'I don\'t need no other, I\'m satisfied\r\nDoing it on my own\r\nOnly takes one lover to change your vibe\r\nAin\'t that the way it go\r\nI don\'t need nobody, but you on replay\r\nCaught in the memory\r\nWhen you touch my body and you say my name', 'nullednot', 'Tick Tock', 2),
(11, 1610787479, '1610787480.jpg', 9, 'cb', 'sdfsdf', 'nullednot', 'asfdsdf', 0),
(12, 1610787486, '1610787486.png', 9, 'cb', 'asdasdasd', 'nullednot', 'asdasd', 1),
(13, 1610787492, '1610787493.png', 12, 'cb', 'asdasdasdasdasd', 'nullednot', 'asdasd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `likent`
--

CREATE TABLE `likent` (
  `id` int(11) NOT NULL,
  `imgID` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `likeAID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `likent`
--

INSERT INTO `likent` (`id`, `imgID`, `type`, `date`, `likeAID`) VALUES
(31, 0, 0, 1606060855, 9),
(33, 9, 1, 1606061026, 9),
(35, 8, 1, 1606061113, 9),
(36, 4, 1, 1606063525, NULL),
(37, 4, 1, 1606063528, NULL),
(38, 4, 0, 1606063531, NULL),
(39, 4, 0, 1606063532, NULL),
(40, 4, 1, 1606063566, NULL),
(41, 4, 0, 1606063569, NULL),
(60, 5, 1, 1606209769, 9),
(61, 5, 0, 1606209776, 12),
(62, 4, 0, 1606209778, 12),
(64, 10, 1, 1606209780, 12),
(72, 10, 1, 1610787555, 9),
(73, 13, 1, 1610787603, 9),
(74, 12, 1, 1610787607, 9),
(75, 4, 1, 1610787613, 9);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `memberID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL,
  `resetToken` varchar(255) DEFAULT NULL,
  `resetComplete` varchar(3) DEFAULT 'No',
  `avatar` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `descr` text,
  `groupID` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `lang` int(11) DEFAULT NULL,
  `skills` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`memberID`, `username`, `password`, `email`, `active`, `resetToken`, `resetComplete`, `avatar`, `time`, `descr`, `groupID`, `first_name`, `last_name`, `gender`, `location`, `phone_number`, `lang`, `skills`) VALUES
(9, 'Ninjonik', '$2y$10$8Cgq6IF99AVZ9RhnyII5keb1yUZvt8QoK.r1CVZHaiC7Iz9FL80LC', 'ninjoniksvk@igportals.eu', 'Yes', NULL, 'No', 'gravatar', 1605381192, '456665655466', NULL, 'Peter', 'Kolier', NULL, 'New York, NY', '54543456', NULL, 'same'),
(10, 'Cube46', '$2y$10$JnU8d8KdShNqV0aHBvOCrefviQ.J3rMgreptlJKnTohxv.iqnciPO', 'patrikram@post.cz', 'Yes', NULL, 'No', 'gravatar', 1605524561, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'NinjonikTT', '$2y$10$atyStdFlD9VsoG87PBhCeewrPZR5LlRkn2ofwKOKq80YiYY1BV8dy', 'facel77170@tjuln.com', 'Yes', NULL, 'No', 'gravatar', 1606063053, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'TheNano111', '$2y$10$7FBXm9T6cLq2dfs15Z.cxuAPz3TV9NKG6OgmczKOC.IezaPTvYIly', 'TheNano@post.cz', 'Yes', NULL, 'No', 'gravatar', 1606209307, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `authorID` int(11) NOT NULL,
  `sectionID` int(11) NOT NULL,
  `text` text,
  `date` int(11) NOT NULL,
  `editdate` int(11) DEFAULT NULL,
  `isallowed` int(11) DEFAULT '0',
  `isuser` int(11) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likent`
--
ALTER TABLE `likent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`memberID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `likent`
--
ALTER TABLE `likent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `memberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
