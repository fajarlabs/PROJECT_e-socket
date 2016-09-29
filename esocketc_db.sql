-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Sep 29, 2016 at 12:00 PM
-- Server version: 10.0.27-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `esocketc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_options`
--

CREATE TABLE IF NOT EXISTS `ci_options` (
  `co_id` int(11) NOT NULL AUTO_INCREMENT,
  `co_option_name` varchar(25) NOT NULL,
  `co_value` text NOT NULL,
  PRIMARY KEY (`co_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ci_options`
--

INSERT INTO `ci_options` (`co_id`, `co_option_name`, `co_value`) VALUES
(1, 'menus', '[{"title":"doMenu List Item. 5","http":""},{"title":"Logout","http":"Logout","children":[{"title":"doMenu List Item. 2","http":""}]},{"title":"doMenu List Item. 1","http":""},{"title":"doMenu List Item. 3","http":""},{"title":"doMenu List Item. 4","http":""}]');

-- --------------------------------------------------------

--
-- Table structure for table `ci_routes`
--

CREATE TABLE IF NOT EXISTS `ci_routes` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `slug` varchar(192) COLLATE utf8_unicode_ci NOT NULL,
  `controller` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `slug` (`slug`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `ci_routes`
--

INSERT INTO `ci_routes` (`id`, `slug`, `controller`) VALUES
(1, 'login', 'IOT_LoginController'),
(2, 'dashboard', 'IOT_DashboardController'),
(3, 'home', 'IOT_HomeController'),
(4, 'project', 'IOT_ProjectController'),
(5, 'logout', 'IOT_LogoutController'),
(6, 'member', 'IOT_MemberProfileController'),
(7, 'menu', 'CI_MenuController'),
(8, 'user', 'CI_UserController'),
(10, 'change_password', 'IOT_ChangePasswordController'),
(11, 'api', 'IOT_APIController'),
(12, 'signup', 'IOT_SignupController');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('ccf61032a212c310e6a105f2217e01c0', '66.249.71.27', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mob', 1475120767, ''),
('5c85414d3b2d7526b37a6c28b6ba84e9', '66.249.71.157', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mob', 1475120767, ''),
('4c05df323fc232b55ac9600cc603061f', '202.179.191.4', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', 1475123878, ''),
('ecc44d826c5dbcbfd96c504104d383f9', '202.179.191.4', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', 1475123899, 'a:2:{s:9:"user_data";s:0:"";s:14:"session_object";O:10:"IOT_Member":12:{s:15:"\0IOT_Member\0mid";s:1:"1";s:20:"\0IOT_Member\0userName";s:5:"fajar";s:21:"\0IOT_Member\0firstName";s:11:"Fajar Rizki";s:20:"\0IOT_Member\0lastName";s:12:"Dwi Prasetyo";s:17:"\0IOT_Member\0email";s:18:"fajarrdp@gmail.com";s:23:"\0IOT_Member\0phoneNumber";s:12:"089663159652";s:17:"\0IOT_Member\0photo";s:18:"default-member.png";s:20:"\0IOT_Member\0passWord";N;s:23:"\0IOT_Member\0createdDate";N;s:24:"\0IOT_Member\0modifiedDate";N;s:22:"\0IOT_Member\0modifiedBy";N;s:18:"\0IOT_Member\0active";s:1:"1";}}'),
('7fa304a736ec52165d488749e7d5398e', '66.220.156.120', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1475124841, ''),
('a2251a4a833eaa7e7b3780a7266c8cd4', '31.13.102.97', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1475124982, '');

-- --------------------------------------------------------

--
-- Table structure for table `ci_users`
--

CREATE TABLE IF NOT EXISTS `ci_users` (
  `uid` int(5) NOT NULL AUTO_INCREMENT,
  `userName` varchar(35) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneNumber` varchar(15) NOT NULL,
  `photo` text NOT NULL,
  `passWord` text NOT NULL,
  `createdDate` datetime NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ci_users`
--

INSERT INTO `ci_users` (`uid`, `userName`, `firstName`, `lastName`, `email`, `phoneNumber`, `photo`, `passWord`, `createdDate`, `modifiedDate`, `active`) VALUES
(1, 'admin', 'Fajar Rizki Dwi P.', '', 'fajarrdp@gmail.com', '089663159652', '', '21232f297a57a5a743894a0e4a801fc3', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(2, 'wawan', 'Wawan Kurniawan', '', 'wawan@gmail.com', '089777878897', '', '21232f297a57a5a743894a0e4a801fc3', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `iot_member`
--

CREATE TABLE IF NOT EXISTS `iot_member` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(50) NOT NULL,
  `firstName` varchar(35) NOT NULL,
  `lastName` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneNumber` varchar(15) NOT NULL,
  `photo` text NOT NULL,
  `passWord` text NOT NULL,
  `createdDate` datetime NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedBy` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `iot_member`
--

INSERT INTO `iot_member` (`mid`, `userName`, `firstName`, `lastName`, `email`, `phoneNumber`, `photo`, `passWord`, `createdDate`, `modifiedDate`, `modifiedBy`, `active`) VALUES
(1, 'fajar', 'Fajar Rizki', 'Dwi Prasetyo', 'fajarrdp@gmail.com', '089663159652', 'default-member.png', '24bc50d85ad8fa9cda686145cf1f8aca', '2016-07-03 00:00:00', '0000-00-00 00:00:00', 0, 1),
(2, 'fajarrdp', '', 'Rizki', 'fajarrdp@gmail.com', '', '', '24bc50d85ad8fa9cda686145cf1f8aca', '2016-07-31 05:45:35', '0000-00-00 00:00:00', 0, 1),
(3, 'agusmerdeka', '', 'Merdeka', 'agus@gmail.com', '', '', 'e10adc3949ba59abbe56e057f20f883e', '2016-08-01 09:07:45', '0000-00-00 00:00:00', 0, 1),
(4, 'Dito1234', '', 'Argiatama', 'argiatama@gmail.com', '', '', '3e5c454d185126981a91e04d56b2d6e8', '2016-08-05 05:24:01', '0000-00-00 00:00:00', 0, 1),
(5, 'Dito1234', '', 'Argiatama', 'argiatama@gmail.com', '', '', '3e5c454d185126981a91e04d56b2d6e8', '2016-08-05 05:24:21', '0000-00-00 00:00:00', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `iot_project`
--

CREATE TABLE IF NOT EXISTS `iot_project` (
  `project_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(100) NOT NULL,
  `field` text NOT NULL,
  `field_json` text NOT NULL,
  `token` varchar(25) NOT NULL,
  `description` text NOT NULL,
  `mid` int(11) NOT NULL,
  `create_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `iot_project`
--

INSERT INTO `iot_project` (`project_id`, `project_name`, `field`, `field_json`, `token`, `description`, `mid`, `create_date`, `modified_date`) VALUES
(5, 'Wemos', 'switch,notif', '{"switch":"1-1-1-1","notif":"0-1-0-0"}', '80933-10315-85366-91323', 'Untuk API Android dan Wemos Devices.                                                                                                                                                                                                                                                                                                ', 1, '2016-07-30 09:29:15', '2016-08-29 07:16:34'),
(15, 'wemos', 'data1,data2', '{"data1":"","data2":""}', '79515-86462-43431-26053', 'ini adalah uji coba', 2, '2016-07-31 05:46:40', '0000-00-00 00:00:00'),
(16, 'agus_wemos', 'motor1,motor2', '{"motor1":"","motor2":""}', '70618-25337-95749-73635', 'ini percobaan test                                ', 3, '2016-08-01 09:08:21', '2016-08-01 09:14:59');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
