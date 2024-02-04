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
-- Table structure for table `track_animals`
--

CREATE TABLE `track_animals` (
  `id` int(12) NOT NULL,
  `uid` int(12) NOT NULL,
  `name` varchar(32) NOT NULL,
  `age` int(12) NOT NULL,
  `gender` varchar(32) NOT NULL,
  `type` varchar(32) NOT NULL,
  `color` varchar(100) NOT NULL,
  `img` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `date_create` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `track_animals`
--

INSERT INTO `track_animals` (`id`, `uid`, `name`, `age`, `gender`, `type`, `color`, `img`, `description`, `date_create`) VALUES
(1, 6, 'Anocha', 10, 'male', 'Yellow Hamster', 'yellow and brown', 'https://via.placeholder.com/400/935/fff/?text=Anocha', 'Voluptate nisi duis dolore amet sunt veniam laborum veniam deserunt laboris anim. Deserunt tempor ex duis officia consectetur dolor culpa Lorem veniam laboris. Minim minim tempor in pariatur tempor sint elit ut laboris minim aliquip et nulla. Veniam elit ea sunt incididunt enim ut eu.', '2020-04-14 14:19:35'),
(2, 9, 'Applidec', 5, 'female', 'White Dwarf Hamster', 'white and beige', 'https://via.placeholder.com/400/904/fff/?text=Applidec', 'Eiusmod laboris aliquip nulla eu irure officia eiusmod aliquip in fugiat magna et. Anim labore minim exercitation ad occaecat duis voluptate occaecat anim elit consequat cupidatat sint Lorem. Aliqua occaecat enim consequat velit ut enim sit nulla excepteur incididunt dolor. Nisi nostrud nulla Lorem velit proident qui mollit cupidatat reprehenderit ea mollit non Lorem.', '2020-04-14 14:19:35'),
(3, 10, 'Magnina', 7, 'male', 'Teddy Bear Hamster', 'brown and white', 'https://via.placeholder.com/400/730/fff/?text=Magnina', 'Reprehenderit quis esse ipsum ex sunt nostrud. Occaecat nulla proident minim est do exercitation irure proident aliqua ipsum laboris elit. Eiusmod aute quis nulla sit do. Excepteur cillum cupidatat ullamco laboris sint dolor aute magna qui velit ad qui.', '2020-04-14 14:19:35'),
(5, 7, 'Avenetro', 1, 'male', 'Golden Hamster', 'golden and white', 'https://via.placeholder.com/400/932/fff/?text=Avenetro', 'Sint deserunt sint Lorem laboris qui proident consequat mollit. Et exercitation non laborum officia culpa nisi fugiat cupidatat commodo sunt ea exercitation elit irure. Voluptate pariatur laborum esse aute. Reprehenderit aute officia ullamco ullamco voluptate in consectetur sit mollit qui in reprehenderit consectetur fugiat.', '2020-04-14 14:19:35'),
(6, 7, 'Zenthall', 8, 'female', 'White Dwarf Hamster', 'white and beige', 'https://via.placeholder.com/400/885/fff/?text=Zenthall', 'Velit deserunt ea quis ad elit. Dolore nisi nisi ipsum mollit sint commodo. Do consectetur sint do in. Nostrud quis aute incididunt quis fugiat quis id laboris sint esse.', '2020-04-14 14:19:35'),
(7, 4, 'Goko', 3, 'male', 'Golden Hamster', 'golden and white', 'http://www.changli1995.com/aau/wnm617/uploads/1589511217.62_7.jpg', 'In deserunt velit esse aliqua. Consequat exercitation tempor duis voluptate ea ex deserunt deserunt Lorem. Anim fugiat proident adipisicing minim in mollit labore duis laboris. Officia mollit enim tempor do nisi eiusmod excepteur tempor adipisicing ullamco quis irure.', '2020-04-14 14:19:35'),
(9, 10, 'Quordate', 9, 'male', 'Golden Hamster', 'golden and white', 'https://via.placeholder.com/400/887/fff/?text=Quordate', 'Fugiat commodo nisi nisi ipsum magna culpa duis elit amet et voluptate reprehenderit. Ullamco pariatur incididunt labore aliqua nisi. Pariatur fugiat aute commodo nisi. Cupidatat non sunt fugiat est ex pariatur magna adipisicing reprehenderit consequat aliqua esse sint deserunt.', '2020-04-14 14:19:35'),
(96, 1, 'text', 0, '', 'Yellow Hamster', 'red', 'https://via.placeholder.com/400/?text=ANIMAL', 'rrr', '2020-05-21 02:04:50'),
(11, 4, 'Comtrek', 2, 'female', 'White Dwarf Hamster', 'white and beige', 'https://via.placeholder.com/400/804/fff/?text=Comtrek', 'Ut cupidatat adipisicing ipsum ullamco sit sunt et ullamco officia culpa. Qui esse commodo sint aliqua exercitation excepteur velit ea ipsum id est. Enim irure amet esse Lorem occaecat nostrud ut in consectetur. Eu aute esse laborum exercitation ex.', '2020-04-14 14:19:35'),
(95, 1, 'text', 0, '', 'Yellow Hamster', 'red', 'https://via.placeholder.com/400/?text=ANIMAL', 'rrr', '2020-05-21 02:04:22'),
(13, 4, 'Limozen', 1, 'male', 'Golden Hamster', 'golden and white', 'https://via.placeholder.com/400/939/fff/?text=Limozen', 'Sunt velit officia culpa irure. Proident sunt dolore velit duis. Mollit est officia excepteur exercitation occaecat elit incididunt non. Adipisicing sit ullamco dolore elit ipsum.', '2020-04-14 14:19:35'),
(14, 9, 'Geeketron', 6, 'female', 'Yellow Hamster', 'yellow and brown', 'https://via.placeholder.com/400/811/fff/?text=Geeketron', 'Eiusmod irure ex incididunt ut. Veniam eu mollit consequat commodo veniam voluptate. Anim laborum proident do reprehenderit incididunt. Consectetur labore minim proident consectetur quis excepteur amet ipsum est aute incididunt consectetur enim.', '2020-04-14 14:19:35'),
(15, 3, 'Fortean', 9, 'male', 'Golden Hamster', 'golden and white', 'http://www.changli1995.com/aau/wnm617/uploads/1589511793.1117_1.jpeg', 'Magna tempor dolor deserunt sunt. Adipisicing id consectetur aliqua nisi in culpa duis esse et est occaecat elit in. Ipsum quis nulla Lorem duis qui. Duis non tempor reprehenderit Lorem voluptate in ullamco exercitation eiusmod qui enim in.', '2020-04-14 14:19:35'),
(16, 7, 'Comtrail', 1, 'male', 'Teddy Bear Hamster', 'brown and white', 'https://via.placeholder.com/400/783/fff/?text=Comtrail', 'Culpa mollit ea id id do sit esse. Deserunt esse irure cupidatat ad. Sit voluptate nostrud amet duis eiusmod in aute cillum Lorem Lorem minim consectetur. Commodo commodo elit adipisicing consectetur reprehenderit magna voluptate minim excepteur.', '2020-04-14 14:19:35'),
(17, 1, 'Namegen', 7, 'female', 'Teddy Bear Hamster', 'brown and white', 'http://www.changli1995.com/aau/wnm617/uploads/1589240263.3169_4.jpeg', 'Excepteur id Lorem magna qui nostrud sit id proident quis adipisicing. Proident laboris laborum officia qui in cillum ut elit est non eiusmod labore. Ex sit duis sunt elit aliquip dolor id voluptate. Cillum ut sunt ipsum occaecat incididunt reprehenderit ut fugiat officia nisi.', '2020-04-14 14:19:35'),
(18, 9, 'Cosmosis', 2, 'male', 'White Dwarf Hamster', 'white and beige', 'https://via.placeholder.com/400/833/fff/?text=Cosmosis', 'Nulla est aute veniam aliqua esse. Reprehenderit in enim fugiat nisi nostrud ipsum incididunt do amet culpa. Ea laborum reprehenderit quis reprehenderit cillum veniam nostrud elit ex. Velit aliqua aliquip elit ad est ea reprehenderit anim ipsum nostrud.', '2020-04-14 14:19:35'),
(19, 4, 'Zentia', 3, 'female', 'Teddy Bear Hamster', 'brown and white', 'https://via.placeholder.com/400/938/fff/?text=Zentia', 'Tempor ut occaecat magna nisi minim nostrud sit qui laboris. Quis enim laboris ut enim. Incididunt amet sunt fugiat aliqua Lorem incididunt nostrud ipsum adipisicing elit duis officia. Proident incididunt et ipsum quis irure ipsum id ea nisi eu sint consequat fugiat qui.', '2020-04-14 14:19:35'),
(20, 10, 'Virva', 4, 'male', 'Yellow Hamster', 'yellow and brown', 'https://via.placeholder.com/400/860/fff/?text=Virva', 'Exercitation consectetur ex veniam voluptate anim commodo eu esse commodo laborum laborum esse tempor. Laborum sint consequat in proident ut ipsum ullamco cupidatat laborum quis. Laboris et excepteur reprehenderit ullamco incididunt cillum veniam aliqua velit id adipisicing amet nulla laboris. Occaecat dolor nisi nisi esse aute enim laborum consectetur fugiat deserunt deserunt occaecat.', '2020-04-14 14:19:35'),
(21, 7, 'Shopabout', 7, 'male', 'Golden Hamster', 'golden and white', 'https://via.placeholder.com/400/967/fff/?text=Shopabout', 'Ullamco irure voluptate veniam aute esse eu enim cillum. Culpa ullamco Lorem eiusmod labore dolore consectetur fugiat est proident quis do adipisicing. Veniam sint fugiat culpa consectetur amet amet aliquip aute ea proident. Aliqua labore id sit cillum laborum tempor reprehenderit duis nostrud excepteur culpa quis ad.', '2020-04-14 14:19:35'),
(22, 9, 'Silodyne', 2, 'female', 'Yellow Hamster', 'yellow and brown', 'https://via.placeholder.com/400/896/fff/?text=Silodyne', 'Reprehenderit amet sunt velit eu laborum eiusmod non eu enim eu ex elit ea aliquip. Ea pariatur commodo pariatur tempor sint ea nostrud Lorem culpa nisi eu non magna. Magna labore officia consequat enim anim nulla est consequat. Est ut nostrud dolore qui pariatur culpa commodo elit in Lorem.', '2020-04-14 14:19:35'),
(23, 1, 'Otherway', 2, 'female', 'Golden Hamster', 'golden and white', 'http://www.changli1995.com/aau/wnm617/uploads/1589240373.1533_5.jpeg', 'Minim veniam excepteur aliqua aliquip reprehenderit voluptate. Aliqua nisi aliqua veniam eiusmod sint. Consequat qui proident cupidatat officia ipsum aliquip amet. Et non laboris in voluptate proident est mollit exercitation amet non.', '2020-04-14 14:19:35'),
(24, 8, 'Xoggle', 8, 'male', 'Teddy Bear Hamster', 'brown and white', 'https://via.placeholder.com/400/985/fff/?text=Xoggle', 'Do occaecat incididunt voluptate anim mollit deserunt aute laborum do dolore ullamco commodo et. Consequat irure nulla culpa ea commodo laboris magna et pariatur Lorem laborum Lorem adipisicing. Aliquip in irure et quis excepteur nisi. Sunt in proident cillum eiusmod est duis ullamco irure.', '2020-04-14 14:19:35'),
(25, 6, 'Flumbo', 5, 'female', 'Yellow Hamster', 'yellow and brown', 'https://via.placeholder.com/400/818/fff/?text=Flumbo', 'Cupidatat cillum enim est officia et voluptate ea cillum. Magna fugiat enim ad cupidatat voluptate aute. Voluptate sit non minim velit aliquip. Veniam reprehenderit Lorem aliquip mollit.', '2020-04-14 14:19:35'),
(26, 10, 'Cedward', 8, 'female', 'White Dwarf Hamster', 'white and beige', 'https://via.placeholder.com/400/889/fff/?text=Cedward', 'Non enim esse officia ea tempor irure in proident. Aute tempor mollit irure veniam consectetur eiusmod in. Sunt mollit incididunt culpa anim non ad sit. Excepteur dolore et culpa occaecat veniam mollit do sit nulla aute laborum adipisicing.', '2020-04-14 14:19:35'),
(27, 10, 'Brainquil', 6, 'male', 'Golden Hamster', 'golden and white', 'https://via.placeholder.com/400/946/fff/?text=Brainquil', 'Esse cillum tempor ea ut eiusmod velit labore mollit sint do culpa. Nostrud cupidatat ea enim ullamco eiusmod fugiat aliqua proident adipisicing sint. In amet laboris proident duis. Adipisicing occaecat dolor id ad consequat occaecat reprehenderit ut commodo incididunt incididunt laborum.', '2020-04-14 14:19:35'),
(28, 6, 'Bulljuice', 7, 'female', 'Yellow Hamster', 'yellow and brown', 'https://via.placeholder.com/400/752/fff/?text=Bulljuice', 'Sint incididunt ipsum ullamco minim non elit occaecat et id occaecat elit quis. Lorem reprehenderit sit consectetur eiusmod occaecat aute dolor elit et et eiusmod. Minim dolor cillum amet ut. Adipisicing id consectetur eu id ullamco id sit ad culpa deserunt officia labore fugiat.', '2020-04-14 14:19:35'),
(29, 7, 'Pheast', 7, 'male', 'Grey Dwarf Hamster', 'grey and white', 'https://via.placeholder.com/400/893/fff/?text=Pheast', 'Consectetur dolore eiusmod esse nisi cupidatat tempor nostrud dolore cillum non officia commodo. Incididunt anim deserunt laborum quis consectetur cillum commodo tempor est enim ea. Quis nulla minim cupidatat do ad consectetur velit cillum. Laboris ad elit sint minim elit.', '2020-04-14 14:19:35'),
(30, 2, 'Zillanet', 9, 'female', 'Golden Hamster', 'golden and white', 'http://www.changli1995.com/aau/wnm617/uploads/1589240564.3426_7.jpg', 'Non minim adipisicing non est do mollit esse commodo exercitation. Do ullamco id dolor cillum. Magna labore tempor irure aliquip sint. Officia excepteur do irure dolor officia pariatur sint commodo.', '2020-04-14 14:19:35'),
(31, 2, 'Zentility', 10, 'male', 'Teddy Bear Hamster', 'brown and white', 'http://www.changli1995.com/aau/wnm617/uploads/1589511120.4505_3.jpeg', 'Tempor deserunt irure tempor Lorem. Ut dolore tempor ipsum laboris deserunt. Esse ipsum exercitation laboris nisi ullamco qui eu aliqua commodo aliquip. Sint esse enim officia ut tempor occaecat.', '2020-04-14 14:19:35'),
(32, 2, 'Myopium', 7, 'male', 'Teddy Bear Hamster', 'brown and white', 'http://www.changli1995.com/aau/wnm617/uploads/1589512028.3556_1.jpeg', 'Adipisicing in elit ut culpa minim tempor. Nostrud ad ea ullamco labore dolore proident aliqua. Ullamco ea exercitation exercitation qui cillum labore. Amet eiusmod aute voluptate Lorem qui elit amet voluptate fugiat sit ipsum elit tempor.', '2020-04-14 14:19:35'),
(33, 6, 'Kage', 9, 'male', 'Yellow Hamster', 'yellow and brown', 'https://via.placeholder.com/400/943/fff/?text=Kage', 'Eu non reprehenderit voluptate aliquip do. Veniam aliqua velit est amet ut. Dolore tempor excepteur ad laboris esse Lorem sunt nisi ex ullamco qui consequat ad minim. Velit esse Lorem sint duis deserunt occaecat commodo anim nulla enim.', '2020-04-14 14:19:35'),
(34, 6, 'Mediot', 4, 'male', 'Teddy Bear Hamster', 'brown and white', 'https://via.placeholder.com/400/792/fff/?text=Mediot', 'Nostrud eiusmod sint ullamco Lorem pariatur in laboris in incididunt. Cillum non anim laborum aliquip consectetur occaecat eu Lorem sunt ut. Sit sint fugiat excepteur nostrud proident officia. Aliquip nulla qui mollit officia in eu labore quis tempor Lorem nisi nulla.', '2020-04-14 14:19:35'),
(35, 4, 'Zilencio', 4, 'female', 'Golden Hamster', 'golden and white', 'https://via.placeholder.com/400/982/fff/?text=Zilencio', 'Sint ipsum elit proident ea cillum occaecat amet laborum anim. Deserunt pariatur laborum incididunt ipsum velit est veniam mollit ea ex. Ea aliqua aute culpa dolor in. Voluptate non aliquip deserunt non.', '2020-04-14 14:19:35'),
(36, 4, 'Xumonk', 9, 'male', 'Golden Hamster', 'golden and white', 'https://via.placeholder.com/400/869/fff/?text=Xumonk', 'Lorem exercitation et quis pariatur do veniam cillum magna cillum deserunt sit nisi. Exercitation minim ad tempor sit occaecat ea proident nulla esse. Adipisicing est anim aute proident esse tempor quis officia. Aliquip esse veniam consectetur cillum quis.', '2020-04-14 14:19:35'),
(37, 7, 'Junipoor', 9, 'male', 'Grey Dwarf Hamster', 'grey and white', 'https://via.placeholder.com/400/949/fff/?text=Junipoor', 'Sint laboris officia ut anim esse minim amet. Occaecat reprehenderit laboris ea voluptate ea excepteur sit dolore nulla nisi elit. Pariatur ex proident minim incididunt nisi qui aliquip id. Elit sunt officia elit ullamco qui occaecat commodo duis eu ea consequat consequat elit.', '2020-04-14 14:19:35'),
(38, 2, 'Comdom', 4, 'male', 'Grey Dwarf Hamster', 'grey and white', 'https://via.placeholder.com/400/829/fff/?text=Comdom', 'Cillum irure do tempor velit duis amet ut cillum. Exercitation duis exercitation duis esse adipisicing id aute consectetur ea ullamco magna. Ex ut voluptate irure ullamco. Labore reprehenderit mollit consectetur non.', '2020-04-14 14:19:35'),
(39, 9, 'Illumity', 5, 'male', 'Teddy Bear Hamster', 'brown and white', 'https://via.placeholder.com/400/944/fff/?text=Illumity', 'Lorem eu voluptate proident eu tempor ea incididunt est veniam amet. Exercitation id cupidatat elit voluptate quis consectetur nostrud aute in aute. Nisi et eiusmod ipsum id adipisicing id ullamco consectetur. Ullamco eiusmod consectetur in minim sunt dolor exercitation ea laborum Lorem ex nostrud.', '2020-04-14 14:19:35'),
(40, 10, 'Undertap', 7, 'female', 'Teddy Bear Hamster', 'brown and white', 'https://via.placeholder.com/400/888/fff/?text=Undertap', 'Laboris eu laboris laborum est culpa magna ad reprehenderit laborum. Mollit ex occaecat proident occaecat aute. Ex commodo tempor consectetur dolor excepteur officia laboris excepteur ex tempor in reprehenderit eiusmod. Nisi aliqua proident esse sunt in cillum dolore commodo.', '2020-04-14 14:19:35'),
(41, 10, 'Sensate', 4, 'male', 'Golden Hamster', 'golden and white', 'https://via.placeholder.com/400/745/fff/?text=Sensate', 'Anim sunt velit consectetur ut est dolore aliquip eu eiusmod id nulla. Eu ipsum non reprehenderit amet id pariatur est velit sint cupidatat labore exercitation. Eu officia anim mollit id nisi commodo ad nisi ullamco. Cillum nisi mollit mollit ullamco tempor nostrud commodo sunt pariatur consectetur esse proident.', '2020-04-14 14:19:35'),
(88, 11, 'Jack', 0, '', 'Grey Dwarf Hamster', 'white and grey', 'http://www.changli1995.com/aau/wnm617/uploads/1589936670.3582_2.jpeg', 'Hi, this is Jack.', '2020-05-19 18:03:31'),
(86, 2, 'aa', 0, '', 'Golden Hamster', '', 'https://via.placeholder.com/400/?text=ANIMAL', '', '2020-05-18 23:10:46'),
(87, 4, '', 0, '', 'Yellow Hamster', '', 'https://via.placeholder.com/400/?text=ANIMAL', '', '2020-05-19 12:34:05'),
(89, 11, 'Jessica', 0, '', 'Golden Hamster', 'golden', 'http://www.changli1995.com/aau/wnm617/uploads/1589937076.7011_5.jpeg', 'Jessica is a little girl.', '2020-05-19 18:06:16'),
(90, 11, 'Mary', 0, '', 'White Dwarf Hamster', 'white', 'http://www.changli1995.com/aau/wnm617/uploads/1589937162.8504_3.jpeg', 'Mary likes clean area.', '2020-05-19 18:11:54'),
(91, 11, 'Jane', 0, '', 'Yellow Hamster', 'yellow and grey', 'http://www.changli1995.com/aau/wnm617/uploads/1589937534.0139_7.jpg', 'Yes, ok!', '2020-05-19 18:18:42'),
(84, 19, '', 0, '', 'Yellow Hamster', '', 'http://www.changli1995.com/aau/wnm617/uploads/1589510427.6823_3.jpeg', '', '2020-05-14 19:40:21'),
(44, 5, 'Phormula', 2, 'male', 'Golden Hamster', 'golden and white', 'https://via.placeholder.com/400/815/fff/?text=Phormula', 'Tempor est dolore minim velit cillum. Culpa ipsum culpa consequat enim labore ea ex sunt enim ad laborum non quis. Esse dolor qui anim amet elit voluptate duis fugiat magna id sint est. Aliqua duis ea officia Lorem enim.', '2020-04-14 14:19:35'),
(94, 4, 'dodopppp', 0, '', 'Yellow Hamster', 'kk', 'http://www.changli1995.com/aau/wnm617/uploads/1590021887.6991_cattwo.png', '', '2020-05-20 17:31:45'),
(48, 9, 'Stralum', 3, 'female', 'Golden Hamster', 'golden and white', 'https://via.placeholder.com/400/841/fff/?text=Stralum', 'Et et ex ex ipsum laborum culpa aliquip. Excepteur Lorem voluptate in occaecat cupidatat est elit consequat. Deserunt sint est incididunt adipisicing aliquip enim consectetur irure. Dolor commodo Lorem ut id dolor.', '2020-04-14 14:19:35'),
(49, 1, 'Zoxy', 1, 'male', 'Grey Dwarf Hamster', 'grey and white', 'https://via.placeholder.com/400/831/fff/?text=Zoxy', 'Eu cupidatat proident ut magna velit incididunt excepteur velit eiusmod esse. Amet elit in aliqua velit. Id fugiat pariatur laboris ipsum. Occaecat sit sint nulla eiusmod cupidatat cupidatat est veniam et laboris do id incididunt occaecat.', '2020-04-14 14:19:35'),
(50, 8, 'Comcur', 1, 'male', 'Golden Hamster', 'golden and white', 'https://via.placeholder.com/400/724/fff/?text=Comcur', 'Ipsum fugiat amet nisi enim reprehenderit aliqua ea. Eiusmod exercitation incididunt enim sint reprehenderit. Anim eu cupidatat enim commodo. Ipsum in fugiat adipisicing consequat amet cupidatat duis occaecat.', '2020-04-14 14:19:35'),
(92, 11, 'Lucy', 0, '', 'Teddy Bear Hamster', 'brown and white', 'http://www.changli1995.com/aau/wnm617/uploads/1589937671.5912_4.jpeg', 'Lucy is a mother.', '2020-05-19 18:21:03'),
(54, 12, 'Hamster Lili', 0, '', 'White Dwarf Hamster', 'white', 'https://via.placeholder.com/400/?text=ANIMAL', 'Lol. This is lili\'s hamster.\n', '2020-05-03 15:32:15'),
(55, 14, 'hamster9', 0, '', 'Golden Hamster', 'golden', 'https://via.placeholder.com/400/?text=ANIMAL', 'this is number 9', '2020-05-03 15:36:13'),
(56, 4, 'New One', 0, '', 'Teddy Bear Hamster', 'brown', 'https://via.placeholder.com/400/?text=ANIMAL', 'Look! This his is new one.', '2020-05-03 15:43:04'),
(71, 18, 'Zhuohua\'s hamster', 0, '', 'White Dwarf Hamster', 'golden and white', 'https://via.placeholder.com/400/?text=ANIMAL', 'lalala\n', '2020-05-07 14:45:43'),
(59, 16, 'Kitty', 0, '', 'White Dwarf Hamster', 'White, brown and yellow', 'https://via.placeholder.com/400/?text=ANIMAL', 'Kitty is such a cute hamster! She lives in Sunset, San Francisco. Lol\n', '2020-05-03 21:37:42'),
(61, 13, 'It\'s me. Lol', 0, '', 'Golden Hamster', 'white', 'https://via.placeholder.com/400/?text=ANIMAL', 'lalala', '2020-05-04 21:57:29'),
(62, 17, 'User11\'s hamster', 0, '', 'White Dwarf Hamster', 'white', 'https://via.placeholder.com/400/?text=ANIMAL', 'this is user11\'s pet', '2020-05-04 22:53:50'),
(63, 4, '', 0, '', 'Yellow Hamster', '', 'https://via.placeholder.com/400/?text=ANIMAL', '', '2020-05-06 22:53:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `track_animals`
--
ALTER TABLE `track_animals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `track_animals`
--
ALTER TABLE `track_animals`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
