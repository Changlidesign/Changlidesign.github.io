-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 21, 2020 at 07:15 PM
-- Server version: 5.6.47-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ChangLi`
--

-- --------------------------------------------------------

--
-- Table structure for table `track_users`
--

CREATE TABLE `track_users` (
  `id` int(12) NOT NULL,
  `name` varchar(32) DEFAULT NULL,
  `gender` varchar(32) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `about` text NOT NULL,
  `username` varchar(32) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `date_create` datetime DEFAULT NULL,
  `img` varchar(128) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `track_users`
--

INSERT INTO `track_users` (`id`, `name`, `gender`, `phone`, `address`, `about`, `username`, `email`, `password`, `date_create`, `img`) VALUES
(1, 'Mildred Guthrieee', 'female', '+1 (945) 492-3037', '136 Nassau Street, Onton, Vermont, 4898', 'Commodo eu dolore qui officia ipsum qui velit pariatur aute cillum. Ullamco labore anim est elit ad aliquip laboris esse. Veniam eu et sint anim excepteur. Sit et tempor veniam pariatur aliqua exercitation est reprehenderit eiusmod. Aute voluptate dolore voluptate dolore nulla proident Lorem culpa non minim fugiat magna enim.\r\n\n', 'user1', 'user1@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', '2020-04-14 15:17:16', 'http://www.changli1995.com/aau/wnm617/uploads/1589863499.3636_13.jpeg'),
(2, 'Blevins Craig', 'male', '+1 (949) 468-3140', '424 Clermont Avenue, Gardiner, American Samoa, 6236', 'Aliqua do deserunt non consequat eu excepteur sunt ut eiusmod ullamco labore. Quis mollit quis non officia voluptate. Nulla exercitation excepteur cillum exercitation eu laboris quis aliqua eiusmod aute. Velit non consequat commodo labore quis ea sint mollit deserunt elit commodo voluptate ullamco pariatur. Et Lorem reprehenderit duis reprehenderit.\r\n\n', 'user2', 'user2@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', '2020-04-14 15:17:16', 'http://www.changli1995.com/aau/wnm617/uploads/1589511100.1452_10.jpeg'),
(3, 'Bolton Johns', 'male', '+1 (945) 479-3896', '307 Hyman Court, Dunbar, Utah, 4596', 'Tempor consequat eiusmod et adipisicing tempor mollit cillum qui id. Adipisicing fugiat ex et proident sit ad adipisicing sunt culpa sint ut qui dolor. Ullamco in do do exercitation sint. Elit in anim ea commodo culpa. Nulla elit quis magna id nostrud nostrud mollit incididunt laborum exercitation incididunt. Magna consectetur enim mollit sint quis Lorem nulla dolor ea Lorem ipsum elit tempor sint. Culpa mollit tempor velit anim.\r\n\n', 'user3', 'user3@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', '2020-04-14 15:17:16', 'http://www.changli1995.com/aau/wnm617/uploads/1589511168.885_11.jpeg'),
(4, 'Darcy Hatfield', 'female', '+1 (853) 477-3874', '392 Clarendon Road, Navarre, Massachusetts, 5789', 'Sunt amet Lorem dolor non proident ex. Et occaecat consectetur voluptate veniam. Deserunt laboris elit esse anim quis in commodo pariatur enim quis excepteur. Reprehenderit ad nulla amet in ut mollit mollit. Proident enim non reprehenderit labore amet anim voluptate velit eiusmod nulla Lorem. Lorem qui magna occaecat deserunt do magna qui sint aliquip eu ea.\r\n\n', 'user4', 'user4@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', '2020-04-14 15:17:16', 'http://www.changli1995.com/aau/wnm617/uploads/1590025922.2524_1.png'),
(5, 'Ilene Donaldson', 'female', '+1 (947) 583-2077', '235 Brigham Street, Wanamie, Texas, 6354', 'Dolore ex aliqua velit veniam incididunt sit nostrud. Id qui nostrud sit pariatur irure laboris aute aliquip irure commodo officia amet ex. Exercitation cillum sint esse eiusmod. Aute tempor id in sunt.\r\n\n', 'user5', 'user5@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', '2020-04-14 15:17:16', 'http://www.changli1995.com/aau/wnm617/uploads/1589510876.9636_8.jpeg'),
(6, 'Lilian Sosa', 'female', '+1 (954) 462-2004', '213 Dekoven Court, Innsbrook, Iowa, 6834', 'Deserunt reprehenderit culpa eiusmod nostrud consectetur ex. Incididunt amet mollit nisi mollit commodo reprehenderit. Lorem est consequat amet nulla quis ipsum pariatur dolor aliqua. Veniam culpa in sint qui non est veniam excepteur deserunt sint. Adipisicing id exercitation consequat ea.\r\n\n', 'user6', 'user6@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', '2020-04-14 15:17:16', 'https://via.placeholder.com/400/766/fff/?text=user6'),
(7, 'Sparks Wilkins', 'male', '+1 (948) 549-2663', '836 Coyle Street, Floriston, Hawaii, 6871', 'Fugiat voluptate exercitation officia reprehenderit quis duis irure labore cillum minim ipsum dolore. Non cupidatat commodo commodo proident aliquip nulla amet cupidatat consequat cupidatat id ullamco sit eiusmod. Elit excepteur nostrud aliqua irure. Id minim nulla ad quis labore ipsum consectetur pariatur labore. Aliqua velit cillum ad enim aute et laborum elit quis id consectetur minim et dolor. Incididunt deserunt reprehenderit consectetur ullamco sunt mollit nisi amet ea deserunt.\r\n\n', 'user7', 'user7@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', '2020-04-14 15:17:16', 'https://via.placeholder.com/400/852/fff/?text=user7'),
(8, 'Parker Vargas', 'male', '+1 (941) 539-2153', '882 Bills Place, Whitewater, Alabama, 2574', 'Magna amet fugiat laborum aliqua tempor eiusmod quis. Amet esse do velit officia commodo do occaecat reprehenderit sit laborum. Esse sint esse anim ullamco veniam culpa cupidatat est id cillum mollit. In culpa anim ut est laborum velit sunt sint ea tempor duis. Proident fugiat amet ea veniam proident id quis reprehenderit cillum exercitation minim quis ex excepteur. Cillum ipsum nulla officia voluptate.\r\n\n', 'user8', 'user8@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', '2020-04-14 15:17:16', 'https://via.placeholder.com/400/957/fff/?text=user8'),
(15, NULL, '', '', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '2020-05-03 16:59:10', 'https://via.placeholder.com/400/?text=USER'),
(17, 'Haha', '', '4156402051', '1 St Francis Pl', '', 'user11', 'lichangus@outlook.com', '1a1dc91c907325c69271ddf0c944bc72', '2020-05-04 22:51:23', 'https://via.placeholder.com/400/?text=USER'),
(11, 'Hua', '', '4156402051', '1 St Francis PI', '', 'user0', 'Huahua@outlook.com', '1a1dc91c907325c69271ddf0c944bc72', '2020-05-03 13:20:33', 'http://www.changli1995.com/aau/wnm617/uploads/1589939413.367_12.jpeg'),
(14, 'user9', '', '', '', '', 'user9', 'lichangus@qq.com', '1a1dc91c907325c69271ddf0c944bc72', '2020-05-03 15:35:42', 'https://via.placeholder.com/400/?text=USER'),
(18, 'Zhuo', '', '', '', '', 'ZhuoHua Li', 'lizhuohua@qq.com', '1a1dc91c907325c69271ddf0c944bc72', '2020-05-07 14:45:05', 'https://via.placeholder.com/400/?text=USER'),
(19, 'User10', '', '4156402051', '1 St Francis Pl', '', 'user10', 'lichangus@outlook.com', '1a1dc91c907325c69271ddf0c944bc72', '2020-05-14 19:37:38', 'http://www.changli1995.com/aau/wnm617/uploads/1589511313.9773_13.jpeg'),
(20, 'Girl', '', '4156402051', '1 St Francis Pl', '', 'user12', 'lichangus@outlook.com', '1a1dc91c907325c69271ddf0c944bc72', '2020-05-14 19:55:40', 'http://www.changli1995.com/aau/wnm617/uploads/1589511362.3521_8.jpeg'),
(21, 'user13', '', '4156402051', '1 St Francis Pl', '', 'user13', 'user13@qq.com', '1a1dc91c907325c69271ddf0c944bc72', '2020-05-21 11:34:05', 'http://www.changli1995.com/aau/wnm617/uploads/1590086095.0874_11.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `track_users`
--
ALTER TABLE `track_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `track_users`
--
ALTER TABLE `track_users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
