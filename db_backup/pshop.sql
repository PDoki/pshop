-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2019 at 11:16 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `ctitle` varchar(255) NOT NULL,
  `carticle` longtext NOT NULL,
  `cimage` varchar(255) NOT NULL,
  `curl` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `ctitle`, `carticle`, `cimage`, `curl`, `updated_at`, `created_at`) VALUES
(1, 'CozyMonsters', 'Lorem ipsum dolor sit amet, te esse purto scripta sea, ad quot feugiat vix. Est illum populo ea, dico tantas cum te. Sit assum fierent percipitur in, eu justo dicunt eos, nam eu harum inimicus. Sonet omittantur no has, harum epicuri has in. Mollis voluptaria id mei, ei eum homero debitis.', '30.03.2019.13.32.20-icon1.png', 'cozymonsters', '2019-03-30 13:32:21', '2019-03-08 00:00:00'),
(2, 'Big-Deal Monsters', 'Ne eleifend postulant vis. Cum tincidunt argumentum id. Ne solet menandri duo. Eam quem propriae deserunt et, mea ut homero mandamus conceptam, sed cu everti veritus elaboraret. Propriae detracto ius ea. Id has vocibus facilis perpetua, laoreet habemus eos cu.', '30.03.2019.13.32.43-icon3.png', 'bigdealmonster', '2019-03-30 13:32:43', '2019-03-08 00:00:00'),
(3, 'Accessories', 'Ei vis similique percipitur, hinc aeque vim ea. Adhuc homero eum eu, pro eu oratio tempor utamur. Ex posse corrumpit disputando eam, illud simul habemus mea ei. Sit an munere quidam maluisset.', '30.03.2019.13.32.55-icon2.png', 'accessories', '2019-03-30 13:32:55', '2019-03-08 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` longtext NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `menu_id`, `title`, `article`, `updated_at`, `created_at`) VALUES
(1, 1, 'Our Mission', '<p><span style=\"background-color: rgb(255, 255, 0);\"><b>Lorem, ipsum dolor sit amet</b></span> consectetur adipisicing elit. </p><p>In non deserunt sit ducimus fugit iure maiores aliquam aut distinctio quae tempora, earum voluptatum corporis nesciunt nihil delectus adipisci eos! Ullam?</p><p><span style=\"background-color: rgb(255, 255, 0);\"><span style=\"font-weight: bolder;\">Lorem, ipsum dolor sit amet</span></span>&nbsp;consectetur adipisicing elit. In non deserunt sit ducimus fugit iure maiores aliquam aut distinctio quae tempora, earum voluptatum corporis nesciunt nihil delectus adipisci eos! Ullam?<br></p>', '2019-04-02 22:36:29', '2019-03-08 00:00:00'),
(2, 1, 'About Us in Irland', '<span style=\"background-color: rgb(255, 255, 0);\"><b>Lorem, ipsum dolor sit amet</b></span> consectetur adipisicing elit. In non deserunt sit ducimus fugit iure maiores aliquam aut distinctio quae tempora, earum voluptatum corporis nesciunt nihil delectus adipisci eos! Ullam?', '2019-04-02 21:29:53', '2019-03-08 00:00:00'),
(3, 3, 'Special Offers in Winter', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. In non deserunt sit ducimus fugit iure maiores aliquam aut distinctio quae tempora, earum voluptatum corporis nesciunt nihil delectus adipisci eos! Ullam?', '2019-03-29 17:24:51', '2019-03-08 00:00:00'),
(4, 2, 'Contact Us', '<div class=\"col-md-12 col-sm-6\">\r\n                                        <address>\r\n                                            Lorem ipsum dolor sit amet<br>\r\n                                            <strong>W.T.F.Shop PSD</strong><br>\r\n                                            108 ABC, Mures, Transylvania <br>\r\n                                            (+13)-666-1313-666</address>  \r\n                                    </div>', '2019-04-02 21:30:55', '2019-03-29 17:30:15'),
(5, 1, 'About Us in Romania', '<p><b><span style=\"background-color: rgb(255, 255, 0);\">Lorem, ipsum dolor sit amet</span>&nbsp;</b>consectetur adipisicing elit. In non deserunt sit ducimus fugit iure maiores aliquam aut distinctio quae tempora, earum voluptatum corporis nesciunt nihil delectus adipisci eos! Ullam?<br></p>', '2019-04-02 21:27:34', '2019-04-02 21:27:34');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `link`, `url`, `title`, `updated_at`, `created_at`) VALUES
(1, 'About Us', 'about-us', 'About Us', '2019-03-29 17:07:31', '2019-03-08 00:00:00'),
(2, 'Contacts', 'contacts', 'Contacts', '2019-03-29 17:07:49', '2019-03-08 00:00:00'),
(3, 'On Sale', 'on-sale', 'On Sale', '2019-03-29 16:57:06', '2019-03-08 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `data` text NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total`, `data`, `updated_at`, `created_at`) VALUES
(1, 3, '238888.20', 'a:3:{i:6;a:6:{s:2:\"id\";s:1:\"6\";s:4:\"name\";s:22:\"Cloack Of Invisibility\";s:5:\"price\";d:6666;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:7:\"article\";s:97:\"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque voluptates praesentium doloremque\";s:6:\"pimage\";s:24:\"cloackofinvisibility.png\";}s:10:\"conditions\";a:0:{}}i:5;a:6:{s:2:\"id\";s:1:\"5\";s:4:\"name\";s:11:\"Laser Sward\";s:5:\"price\";d:10000;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:7:\"article\";s:97:\"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque voluptates praesentium doloremque\";s:6:\"pimage\";s:14:\"lasersward.png\";}s:10:\"conditions\";a:0:{}}i:3;a:6:{s:2:\"id\";s:1:\"3\";s:4:\"name\";s:4:\"Yeti\";s:5:\"price\";d:222222.2;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:7:\"article\";s:97:\"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque voluptates praesentium doloremque\";s:6:\"pimage\";s:8:\"yeti.png\";}s:10:\"conditions\";a:0:{}}}', '2019-03-21 17:38:59', '2019-03-21 17:38:59'),
(2, 13, '45750.90', 'a:1:{i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:8:\"Home Elf\";s:5:\"price\";d:45750.9;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:7:\"article\";s:97:\"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque voluptates praesentium doloremque\";s:6:\"pimage\";s:11:\"homeelf.png\";}s:10:\"conditions\";a:0:{}}}', '2019-03-29 18:08:35', '2019-03-29 18:08:35'),
(3, 13, '57750.90', 'a:2:{i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:8:\"Home Elf\";s:5:\"price\";d:45750.9;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:7:\"article\";s:97:\"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque voluptates praesentium doloremque\";s:6:\"pimage\";s:11:\"homeelf.png\";}s:10:\"conditions\";a:0:{}}i:2;a:6:{s:2:\"id\";s:1:\"2\";s:4:\"name\";s:12:\"Black Phooka\";s:5:\"price\";d:12000;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:7:\"article\";s:97:\"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque voluptates praesentium doloremque\";s:6:\"pimage\";s:15:\"blackphooka.png\";}s:10:\"conditions\";a:0:{}}}', '2019-03-29 18:09:43', '2019-03-29 18:09:43'),
(4, 13, '45750.90', 'a:1:{i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:8:\"Home Elf\";s:5:\"price\";d:45750.9;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:7:\"article\";s:97:\"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque voluptates praesentium doloremque\";s:6:\"pimage\";s:11:\"homeelf.png\";}s:10:\"conditions\";a:0:{}}}', '2019-03-29 18:13:31', '2019-03-29 18:13:31'),
(5, 13, '57750.90', 'a:2:{i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:8:\"Home Elf\";s:5:\"price\";d:45750.9;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:7:\"article\";s:97:\"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque voluptates praesentium doloremque\";s:6:\"pimage\";s:11:\"homeelf.png\";}s:10:\"conditions\";a:0:{}}i:2;a:6:{s:2:\"id\";s:1:\"2\";s:4:\"name\";s:12:\"Black Phooka\";s:5:\"price\";d:12000;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:7:\"article\";s:97:\"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque voluptates praesentium doloremque\";s:6:\"pimage\";s:15:\"blackphooka.png\";}s:10:\"conditions\";a:0:{}}}', '2019-03-29 18:15:23', '2019-03-29 18:15:23'),
(6, 13, '45750.90', 'a:1:{i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:8:\"Home Elf\";s:5:\"price\";d:45750.9;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:7:\"article\";s:97:\"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque voluptates praesentium doloremque\";s:6:\"pimage\";s:11:\"homeelf.png\";}s:10:\"conditions\";a:0:{}}}', '2019-03-29 18:17:00', '2019-03-29 18:17:00'),
(7, 4, '12000.00', 'a:1:{i:2;a:6:{s:2:\"id\";s:1:\"2\";s:4:\"name\";s:12:\"Black Phooka\";s:5:\"price\";d:12000;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:7:\"article\";s:97:\"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque voluptates praesentium doloremque\";s:6:\"pimage\";s:15:\"blackphooka.png\";}s:10:\"conditions\";a:0:{}}}', '2019-03-29 19:41:54', '2019-03-29 19:41:54'),
(8, 4, '57750.90', 'a:2:{i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:8:\"Home Elf\";s:5:\"price\";d:45750.9;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:7:\"article\";s:97:\"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque voluptates praesentium doloremque\";s:6:\"pimage\";s:11:\"homeelf.png\";}s:10:\"conditions\";a:0:{}}i:2;a:6:{s:2:\"id\";s:1:\"2\";s:4:\"name\";s:12:\"Black Phooka\";s:5:\"price\";d:12000;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:7:\"article\";s:97:\"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque voluptates praesentium doloremque\";s:6:\"pimage\";s:15:\"blackphooka.png\";}s:10:\"conditions\";a:0:{}}}', '2019-03-29 19:45:11', '2019-03-29 19:45:11'),
(9, 14, '35679.00', 'a:1:{i:19;a:6:{s:2:\"id\";s:2:\"19\";s:4:\"name\";s:22:\"Under-Your-Bed Octopus\";s:5:\"price\";d:35679;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:7:\"article\";s:123:\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\";s:6:\"pimage\";s:28:\"30.03.2019.15.12.12-big9.png\";}s:10:\"conditions\";a:0:{}}}', '2019-03-30 15:31:53', '2019-03-30 15:31:53'),
(10, 8, '343637.00', 'a:2:{i:15;a:6:{s:2:\"id\";s:2:\"15\";s:4:\"name\";s:15:\"Cozy Home Devil\";s:5:\"price\";d:666;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:7:\"article\";s:123:\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\";s:6:\"pimage\";s:28:\"30.03.2019.13.51.50-big1.png\";}s:10:\"conditions\";a:0:{}}i:21;a:6:{s:2:\"id\";s:2:\"21\";s:4:\"name\";s:13:\"Young Vampire\";s:5:\"price\";d:342971;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:7:\"article\";s:123:\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\";s:6:\"pimage\";s:28:\"30.03.2019.15.13.28-big4.png\";}s:10:\"conditions\";a:0:{}}}', '2019-03-30 21:12:21', '2019-03-30 21:12:21');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `ptitle` varchar(255) NOT NULL,
  `particle` longtext NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `purl` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categorie_id`, `ptitle`, `particle`, `pimage`, `price`, `purl`, `updated_at`, `created_at`) VALUES
(15, 1, 'Cozy Home Devil', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '30.03.2019.13.51.50-big1.png', '666.00', 'cozy-home-devil', '2019-03-30 13:51:51', '2019-03-30 13:50:18'),
(16, 2, 'Blue Yeti', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '30.03.2019.13.59.08-big3.png', '123098.00', 'blue-yeti', '2019-03-30 13:59:08', '2019-03-30 13:59:08'),
(17, 3, 'Three Engine UFO', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '30.03.2019.14.01.06-big2.png', '99999.00', 'three-engine-ufo', '2019-03-30 14:01:06', '2019-03-30 14:01:06'),
(18, 1, 'Homie Ghost', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '30.03.2019.15.11.18-big8.png', '88346.00', 'homie-ghost', '2019-03-30 15:11:18', '2019-03-30 15:11:18'),
(19, 1, 'Under-Your-Bed Octopus', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '30.03.2019.15.12.12-big9.png', '35679.00', 'under-your-bed-octopus', '2019-03-30 15:15:31', '2019-03-30 15:12:12'),
(20, 1, 'Cozy Bad Bat', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '30.03.2019.15.12.44-big7.png', '548.00', 'cozy-bad-bat', '2019-03-30 15:12:45', '2019-03-30 15:12:45'),
(21, 2, 'Young Vampire', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '30.03.2019.15.13.28-big4.png', '342971.00', 'young-vampire', '2019-03-30 15:13:28', '2019-03-30 15:13:28'),
(22, 2, 'Zombie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '30.03.2019.15.13.56-big5.png', '66699.00', 'zombie', '2019-03-30 15:13:57', '2019-03-30 15:13:57'),
(23, 2, 'Mummie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '30.03.2019.15.14.26-big6.png', '88888.00', 'mummie', '2019-03-30 15:14:26', '2019-03-30 15:14:26'),
(24, 3, 'Pair Of Laser Swords', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '30.03.2019.15.17.09-big10.png', '44446.00', 'pair-of-laser-swords', '2019-03-30 15:17:09', '2019-03-30 15:17:09'),
(25, 3, 'Cloack Of Invisibility', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '30.03.2019.15.17.51-big11.png', '36573.00', 'cloack-of-invisibility', '2019-03-30 15:17:52', '2019-03-30 15:17:52'),
(26, 3, 'Magic Wand', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '30.03.2019.15.18.55-big12.png', '14850.37', 'magic-wand', '2019-03-30 15:18:55', '2019-03-30 15:18:55'),
(27, 3, 'Philosopher\'s Stone', '<p><span style=\"color: rgb(153, 153, 153); font-family: Asap, sans-serif; font-size: 14px;\">Consectetur adipisicing elit. In non deserunt sit ducimus fugit iure maiores aliquam aut distinctio quae tempora, earum voluptatum corporis nesciunt nihil delectus adipisci eos! Ullam?</span><br></p>', 'default_img.png', '3131.00', 'philosophers-stone', '2019-04-03 20:58:45', '2019-04-03 20:58:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `updated_at`, `created_at`) VALUES
(1, '-', '-', '-', '2019-03-08 00:00:00', '2019-03-08 00:00:00'),
(2, '--', '--', '--', '2019-03-08 00:00:00', '2019-03-08 00:00:00'),
(3, 'Admin', 'admin@gmail.com', '$2y$10$MBEROoxqfvUYenr.Om4SMepn6vhz0yTc4IKq/VGiACOopkStjQuOC', '2019-03-08 00:00:00', '2019-03-08 00:00:00'),
(4, 'Avi Cohen', 'avi@gmail.com', '$2y$10$MBEROoxqfvUYenr.Om4SMepn6vhz0yTc4IKq/VGiACOopkStjQuOC', '2019-03-08 00:00:00', '2019-03-08 00:00:00'),
(5, 'Moshe Levi', 'moshe@gmail.com', '$2y$10$MBEROoxqfvUYenr.Om4SMepn6vhz0yTc4IKq/VGiACOopkStjQuOC', '2019-03-08 00:00:00', '2019-03-08 00:00:00'),
(8, 'Polina Dk', 'polina@gmail.com', '$2y$10$bZwEYxoYUB408IZdObwIXualLSHec2AInzFIYZzGfCC3zVbBYPNR6', '2019-03-29 18:05:19', '2019-03-25 14:28:47'),
(12, 'Vered', 'vered@gmail.com', '$2y$10$J.L0XLytCNXhqAtbLREt1.UXNDkC0Det8WJtzcBGcJST5VYlZ9V4q', '2019-03-29 18:03:09', '2019-03-29 18:03:09'),
(13, 'poiu', 'poiu@mail.com', '$2y$10$.w.aPkGQ4SHGHzm072EGVe65s7hDtxEsay2vpWeht3TDfE3Qj3a2O', '2019-03-29 18:08:07', '2019-03-29 18:08:07'),
(14, 'Michal Gitel', 'masha@gmail.com', '$2y$10$qXYRrdCAWgW9kxrCUlUXTey/4wUoojGIBTjvMuNPwDrQhnrvySyIK', '2019-03-30 18:48:54', '2019-03-30 15:31:40');

-- --------------------------------------------------------

--
-- Table structure for table `users_roles`
--

CREATE TABLE `users_roles` (
  `uid` int(11) NOT NULL,
  `rid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_roles`
--

INSERT INTO `users_roles` (`uid`, `rid`) VALUES
(3, 148),
(4, 7),
(5, 7),
(6, 148),
(7, 148),
(8, 148),
(9, 7),
(10, 7),
(11, 7),
(11, 7),
(12, 7),
(13, 7),
(14, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `curl` (`curl`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `purl` (`purl`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
