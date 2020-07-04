-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 04, 2020 at 02:58 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agri`
--

-- --------------------------------------------------------

--
-- Table structure for table `regi`
--

CREATE TABLE IF NOT EXISTS `regi` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `pin` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `regi`
--

INSERT INTO `regi` (`id`, `user`, `mobile`, `email`, `pass`, `addr`, `state`, `district`, `pin`) VALUES
(1, 'Ajinkya', '7387192941', 'aic.pajinkya@gmail.com', '0000000', 'a/p:- Narodi Tal- Ambegaon Dist-Pune ,410503', 'Maharashtra', 'dist26', '410503'),
(2, 'Omkar', '8806526324', 'omkar98@gmail.com', '123456', 'Narodi', 'Maharashtra', 'dist26', '410503'),
(3, 'Rohit', '9527826292', 'rohitpokh98@gmail.com', '987654', 'Pimpalgaon', 'Maharashtra', 'dist26', '410503'),
(4, 'Aditya', '7499179745', 'aditya96@gmail.com', '997320', 'Narodi', 'Maharashtra', 'dist26', '410503'),
(5, 'Sushil Vare', '9096101291', 'aic.vsushil@gmail.com', '909610', 'Pimparkhed', 'Maharashtra', 'dist26', '410512'),
(6, 'Ajay Pokharkar', '7385259721', 'aic.pajay@gmail.com', '123456', 'Pimpalgaon', 'Maharashtra', 'dist26', '410503'),
(7, 'Aniket Pingale', '9970741969', 'aniket9970@gmail.com', '997007', 'Narodi', 'Maharashtra', 'dist26', '410503'),
(8, 'Ajinkya', '7387192941', 'aic.pajinkya@gmail.com', '191298', 'a/p:- Narodi Tal- Ambegaon Dist-Pune ,410503', 'Maharashtra', 'dist1', '410503'),
(10, 'Kiran Totre', '7972161576', 'kirantotre98@gmail.com', '181198', 'Kurawandi', 'Maharashtra', 'dist26', '410512');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` int(20) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `pin` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `user`, `mobile`, `email`, `pass`, `addr`, `state`, `district`, `pin`) VALUES
(8, 'Rohit Pokharkar', 2147483647, 'rohitpokh98@gmail.com', 952782, 'Pimpalgaon', 'Maharashtra', 'dist26', 410503),
(4, 'Omkar Pingale', 2147483647, 'omii630@gmail.com', 693190, 'a/p:- Narodi Tal- Ambegaon Dist-Pune ,410503', 'Maharashtra', 'dist26', 410503),
(5, 'Ajinkya', 2147483647, 'aic.pajinkya@gmail.com', 191298, 'a/p:- Narodi Tal- Ambegaon Dist-Pune ,410503', 'Maharashtra', 'dist1', 410503);

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE IF NOT EXISTS `signin` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `pin` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`id`, `name`, `password`, `mobile`, `email`, `addr`, `state`, `district`, `pin`) VALUES
(3, 'Omkar', '987654', '8806526324', 'omkar98@gmail.com', 'Narodi', 'Maharashtra', 'dist26', '410503'),
(2, 'Ajinkya', '191298', '7066877846', 'aic.pajinkya@gmail.com', 'a/p:- Narodi Tal- Ambegaon Dist-Pune ,410503', 'Maharashtra', 'dist26', '410503'),
(4, 'Rohit', '952782', '9527826292', 'rohitpokh98@gmail.com', 'Pimpalgaon', 'Maharashtra', 'dist26', '410503'),
(5, 'Kiran', '181198', '7972161576', 'kirantotre98@gmail.com', 'Kurawandi', 'Maharashtra', 'dist26', '410512'),
(6, 'Abhishek Bhagwat', '829059', '9975829059', 'abhibhag90@gmail.com', 'Narodi', 'Maharashtra', 'dist26', '410503'),
(7, 'Nikhil Pingale', '909610', '9096101291', 'nikhilpingale1012@gmail.com', 'Narodi', 'Maharashtra', 'dist26', '410503'),
(8, 'Sumit', '123456', '9975818476', 'sumit12@gmail.com', 'Manchar', 'Maharashtra', 'dist26', '410512'),
(9, 'Atharv Ganesh Nikam', '09092005', '7066877846', 'aic.pajinkya@gmail.com', 'Nagapur', 'Maharashtra', 'dist26', '410504');
