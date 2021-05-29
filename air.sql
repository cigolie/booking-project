-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2018 at 06:31 PM
-- Server version: 5.5.27-log
-- PHP Version: 5.4.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `air`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `Id` int(11) NOT NULL,
  `Nume` text NOT NULL,
  `Serie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `locuri`
--

CREATE TABLE IF NOT EXISTS `locuri` (
  `Cod_zbor` int(11) NOT NULL,
  `Data_plecarii` date NOT NULL,
  `Nr_locuri` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rezervare`
--

CREATE TABLE IF NOT EXISTS `rezervare` (
  `Id` int(11) NOT NULL,
  `Cod_zbor` int(11) NOT NULL,
  `Data` date NOT NULL,
  `Nr_bilete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `zbor`
--

CREATE TABLE IF NOT EXISTS `zbor` (
  `Cod_zbor` int(11) NOT NULL,
  `Plecare` text NOT NULL,
  `Destinatie` text NOT NULL,
  `Pret` double NOT NULL,
  `Nr_locuri` int(11) NOT NULL,
  `Ora` decimal(11,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zbor`
--

INSERT INTO `zbor` (`Cod_zbor`, `Plecare`, `Destinatie`, `Pret`, `Nr_locuri`, `Ora`) VALUES
(1000, 'Timisoara', 'Bucuresti', 20, 180, '17'),
(2100, 'Timisoara', 'Paris', 80, 200, '20'),
(3356, 'Paris', 'Bucuresti', 80, 180, '6'),
(1400, 'Paris', 'Timisoara', 90, 200, '9'),
(17701, 'Bucuresti', 'Paris', 75, 200, '21'),
(20100, 'Bucuresti', 'Timisoara', 10, 180, '18');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
