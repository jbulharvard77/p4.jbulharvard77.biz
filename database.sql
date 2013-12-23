-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 23, 2013 at 03:09 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jbulharv_p4_jbulharvard77_biz`
--
CREATE DATABASE IF NOT EXISTS `jbulharv_p4_jbulharvard77_biz` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `jbulharv_p4_jbulharvard77_biz`;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `created` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `city` varchar(255) NOT NULL,
  `selected` varchar(255) NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `created`, `user_id`, `date`, `city`, `selected`) VALUES
(1, 1387405620, 4, '2013-12-19', '', '0'),
(2, 1387408580, 4, '2013-12-19', '', '0'),
(3, 1387412885, 4, '2013-12-19', '', '0'),
(4, 1387413363, 4, '2013-12-19', '', '0'),
(5, 1387413502, 4, '2013-12-20', '', '0'),
(6, 1387414823, 4, '2013-12-21', '', '0'),
(7, 1387414885, 4, '2013-12-21', '', '0'),
(8, 1387415149, 4, '2013-12-25', '', '0'),
(9, 1387417969, 8, '2013-12-31', '', '0'),
(10, 1387419071, 9, '2014-01-02', '', '0'),
(11, 1387420006, 9, '2013-12-29', '', '0'),
(12, 1387421993, 9, '2013-12-27', '', '0'),
(13, 1387424366, 9, '2014-01-04', '', '0'),
(14, 1387424433, 9, '2014-01-16', '', '0'),
(15, 1387460598, 9, '2014-01-22', '', '0'),
(16, 1387460658, 9, '2014-01-14', '', '0'),
(17, 1387460724, 9, '2014-01-29', '', '0'),
(18, 1387461020, 9, '2014-01-17', '', '0'),
(19, 1387461123, 9, '2014-02-12', '', '0'),
(20, 1387461253, 9, '2014-02-26', '', '0'),
(21, 1387461267, 9, '2013-12-19', '', '0'),
(22, 1387461289, 9, '2013-12-19', '', '0'),
(23, 1387486260, 8, '2013-12-26', '', '0'),
(24, 1387489130, 1, '2013-12-26', '', '0'),
(25, 1387495022, 1, '2013-12-26', '', '0'),
(26, 1387495192, 1, '2013-12-26', '', '0'),
(27, 1387495376, 1, '2013-12-26', '', '0'),
(28, 1387639359, 1, '2013-12-12', '', '0'),
(29, 1387654131, 13, '2013-12-31', '', '0'),
(30, 1387654162, 13, '2014-01-16', '', '0'),
(36, 1387679611, 13, '2013-12-27', 'danvers', ''),
(38, 1387680376, 13, '2014-01-17', 'danvers', ''),
(39, 1387681261, 13, '2014-01-14', 'danvers', ''),
(40, 1387682422, 13, '2014-01-09', 'danvers', ''),
(41, 1387729549, 13, '2013-12-10', 'danvers', ''),
(42, 1387732601, 13, '2013-12-09', 'danvers', ''),
(43, 1387733678, 13, '2014-01-22', 'danvers', ''),
(44, 1387733856, 13, '2014-02-14', 'danvers', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip` varchar(11) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `token`, `name`, `address`, `city`, `zip`, `user_type`) VALUES
(1, 'test@gmail.com', '0509c4b51e15f17b7c84c164bff88dd3f39b1f5f', '86e51375b4079fd7ec97681656a1302c0f6b9dcc', 'joe buld', '12 test ave', 'danville', '2155', ''),
(2, 'joe@gmail.com', '945fdbb2b6ae2941b7ff0b2f94a3fc6a646d63f2', '1f66841e5031c933dc117e9b5ae1b29fcebfde5a', 'joe', '33 red', 'medford', '2155', ''),
(3, 'test1@gmail.com', '7c287f4605908f92db3384ce34bffbf525b523f4', 'a94a8da3113ea6d3cbc1b309ae2b363d0a9757b6', 'ty webb', '34 red st', 'danville', '3819', ''),
(4, 'test2@gmail.com', 'd7036a7fc8fc6301e8a9ab9b53ce844ac4f5fde7', 'd1ef203fd06a3cd8b9481335301400f6445a432a', 'joe b', '56 test', 'medford', '2155', ''),
(5, 'test2@gmail.com', 'd7036a7fc8fc6301e8a9ab9b53ce844ac4f5fde7', '9c62a1012dcce6a8efe9f9db0ae36c0bffb23f33', 'joe b', '56 test', 'medford', '2155', ''),
(6, 'test3@gmail.com', '6cfb24ef948eaf3307ce3bc74aa7fdfd60c6dd9c', '723b120d3f669b9bb99cc3b5ddda1bc4c07453e2', '', '25 tet', 'danville', '03819', ''),
(7, 'test9@gmail.com', 'd36d526960b9613c10cd1c67d95b49ae9d28020b', 'c06823c548e66f9a5831abc506f38e74f692cf72', 'hhh', '34 test', 'exeter', '03792', ''),
(8, 'test20@gmail.com', '0e22d8648b801d384fa6bec37964cc3db258df30', '8c3abaa631d99d19f3d3efa78da59c91da6002b2', 'ksksk', '34 red st', 'medford', '02155', ''),
(9, 'test30@gmail.com', '4e385172552279f937a035f972122dfa5e4fc38b', 'f3bba453e76bb0d74b16f989cea8de7b6932771f', 'kev', '25 rerofokoj st', 'salem', '02222', ''),
(10, 'test50@gmail.com', '844fd195f96075635cc1eb3d04d5fcf36ff27afb', '693a1fd59d0a72bd361f8585429531148d5d1717', 'joe jfrokjf', '37 heokfrj', 'danville', '03819', 'customer'),
(11, 'plow@gmail.com', '21a2429338d49c392d22a03fb984b051f69133cc', 'debab3b3782939616b07fbb55a580fe5fd3ed354', 'test 12234', '', '', '', 'plower'),
(12, 'test99@gmail.com', 'ed77d4be404a2ff22623c0d2daf921915ed964d5', '2b0c1f1522326d5fda5d2bd0f2a401180937116f', 'ty weebb', '', '', '', 'plower'),
(13, 'test999@gmail.com', '9068d4eb8c4977191a2406856c50f43270330530', '8980f7fa25d3c889d0d05ad8235897b9604dbde2', 'mike cangiano', '25 delaware', 'danvers', '02144', 'customer'),
(14, 'plow999@gmail.com', 'e475062028e050e212607871a424692c3f6e3eb4', '592a2e7476faba96cd8550ca7c210518579b517c', 'teststs', '', '', '', 'plower'),
(15, 'plow888@gmail.com', '46907768fbd44bd258e9e06131e80abff725c567', '3db86f338144e6a920b780bf227feef4842177a4', 'ty webb', '', '', '', 'plower'),
(16, 'test44@gmail.com', '673b8e349fe9b5431e6b2fbf4ee1a2ab363cbdaf', 'f830ba177710259687989971427a0ca33b8061f9', 'testhghgh', '415 by', '', '', 'customer'),
(17, 'test444@gmail.com', '673b8e349fe9b5431e6b2fbf4ee1a2ab363cbdaf', '418ef45c3c2e575b157f526cbea8fc252669dd26', 'tueoem', 'ddd', '', '', 'customer'),
(18, 'test57@gmail', '673b8e349fe9b5431e6b2fbf4ee1a2ab363cbdaf', 'fb87a14341813204d3fb83617588ad6a8bf40acd', 'ty kkkkkkk', '', '', '', 'customer'),
(19, 'test7777@gmail.com', '673b8e349fe9b5431e6b2fbf4ee1a2ab363cbdaf', '44f6e11a615cf2c6208043b2af639f839c0eb88c', '', '3444', '', '', 'customer'),
(20, 'jbul4444@g.com', '673b8e349fe9b5431e6b2fbf4ee1a2ab363cbdaf', '26d43da1b76e859dc566cd01d9440b3501c8998f', '', '', '', '', 'customer'),
(21, '', '673b8e349fe9b5431e6b2fbf4ee1a2ab363cbdaf', '71445f0e4f82ec22dc2e886797d959241e2d95f5', '', '', '', '', 'customer'),
(22, '', '673b8e349fe9b5431e6b2fbf4ee1a2ab363cbdaf', '264f5ff7c57ae28267ea21aac776bdc3ae2f09da', '', '', '', '', 'customer'),
(23, 'tttt', '673b8e349fe9b5431e6b2fbf4ee1a2ab363cbdaf', '045f46ffd845ce9d4fc82b379c059c541df0e01f', '', '', '', '', 'customer'),
(24, 'tests@gmail', 'd8886a4d20ca21de9f65eda44cb7acf47df3aa16', '3314cd0ec25ed9136279252ae340200dc033fd9e', 'fffff', '333', 'medford', '02155', 'customer'),
(25, 'new@gmail.com', '946ee7bbbd7a5ec91bb07e80a4dc967bde744b59', '72b58a6b8726259e723fc753ca6062ee34ac8e79', 'leah test', '34 test st', 'medford', '02155', 'customer'),
(26, 'new1@gmail.com', '584c9eb2ef43c667b6ba9bd29ee7b7b0b6596b8f', '9f5d1576bf89428721305d032a7b71067bea1f75', 'leah2', '36 test st', 'danville', '03819', 'customer'),
(27, 'yyyyy', '0509c4b51e15f17b7c84c164bff88dd3f39b1f5f', '4e11f08134bc655109012eea01cf8748c046214b', 'dddd', 'eeeeee', 'fff', '02155', 'customer');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
