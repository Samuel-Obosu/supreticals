-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 17, 2017 at 08:05 PM
-- Server version: 5.6.33-cll-lve
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sunlife1`
--

-- --------------------------------------------------------

--
-- Table structure for table `cdetails`
--

CREATE TABLE IF NOT EXISTS `cdetails` (
  `CdetailId` int(11) NOT NULL AUTO_INCREMENT,
  `Pid` int(11) DEFAULT NULL,
  `Diag` varchar(200) DEFAULT NULL,
  `Descr` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`CdetailId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `currentstate`
--

CREATE TABLE IF NOT EXISTS `currentstate` (
  `CurrId` int(100) NOT NULL AUTO_INCREMENT,
  `Pid` int(100) DEFAULT NULL,
  `DiagA1` double DEFAULT NULL,
  `DiagA2` double DEFAULT NULL,
  `Bmi` double DEFAULT NULL,
  `DiagB1` varchar(500) DEFAULT NULL,
  `DiagB2` varchar(500) DEFAULT NULL,
  `DiagC1A` int(11) DEFAULT NULL,
  `DiagC1B` int(11) DEFAULT NULL,
  `DiagC2A` int(11) DEFAULT NULL,
  `DiagC2B` int(11) DEFAULT NULL,
  `DiagD1` varchar(500) DEFAULT NULL,
  `DiagD2` varchar(500) DEFAULT NULL,
  `DiagD3` varchar(500) DEFAULT NULL,
  `DiagE` varchar(500) DEFAULT NULL,
  `DiagF` varchar(500) DEFAULT NULL,
  `DiagG1` varchar(500) DEFAULT NULL,
  `DiagG2` varchar(500) DEFAULT NULL,
  `DiagG3` varchar(500) DEFAULT NULL,
  `DiagG4` varchar(500) DEFAULT NULL,
  `DiagH` varchar(500) DEFAULT NULL,
  `DiagI1` varchar(500) DEFAULT NULL,
  `DiagI2` varchar(500) DEFAULT NULL,
  `DiagI3` varchar(500) DEFAULT NULL,
  `DiagI4` varchar(500) DEFAULT NULL,
  `DiagI5` varchar(500) DEFAULT NULL,
  `DiagI6` varchar(500) DEFAULT NULL,
  `RecDate` datetime DEFAULT NULL,
  `RecPId` int(100) DEFAULT NULL,
  `RecPlace` varchar(500) DEFAULT NULL,
  `temp` float DEFAULT NULL,
  `abdominal` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`CurrId`),
  KEY `Id` (`Pid`),
  KEY `fkRecid` (`RecPId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `DetailId` int(100) NOT NULL AUTO_INCREMENT,
  `Pid` int(100) DEFAULT NULL,
  `Diag` varchar(200) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Disease` varchar(500) DEFAULT NULL,
  `Descr` varchar(500) DEFAULT NULL,
  `DocName` varchar(200) DEFAULT NULL,
  `HospName` varchar(500) DEFAULT NULL,
  `HospAddress` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`DetailId`),
  KEY `Id` (`Pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`DetailId`, `Pid`, `Diag`, `Date`, `Disease`, `Descr`, `DocName`, `HospName`, `HospAddress`) VALUES
(7, 1, 'DiagA8', '2015-02-11', 'Cancer', 'Cancer of the throat', 'team A', 'Korle-bu', 'Korle-bu');

-- --------------------------------------------------------

--
-- Table structure for table `familyinfo`
--

CREATE TABLE IF NOT EXISTS `familyinfo` (
  `FId` int(100) NOT NULL AUTO_INCREMENT,
  `PId` int(100) DEFAULT NULL,
  `Relation` varchar(200) DEFAULT NULL,
  `Age` varchar(200) DEFAULT NULL,
  `Status` varchar(200) DEFAULT NULL,
  `canc` int(11) DEFAULT NULL,
  `hd_cancer` varchar(200) DEFAULT NULL,
  `diab` int(11) DEFAULT NULL,
  `hbp` int(11) DEFAULT NULL,
  `hkd` int(11) DEFAULT NULL,
  `nmd` int(11) DEFAULT NULL,
  `tb` int(11) DEFAULT NULL,
  `hd` int(11) DEFAULT NULL,
  `hd_disorder` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`FId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE IF NOT EXISTS `lab` (
  `LabId` int(100) NOT NULL AUTO_INCREMENT,
  `Pid` int(100) DEFAULT NULL,
  `Screening` varchar(200) DEFAULT NULL,
  `Ecg` varchar(200) DEFAULT NULL,
  `Papsmear` varchar(200) DEFAULT NULL,
  `Mammogram` varchar(200) DEFAULT NULL,
  `Psa` varchar(200) DEFAULT NULL,
  `Hiv` varchar(200) DEFAULT NULL,
  `RecDate` varchar(200) DEFAULT NULL,
  `RecPId` int(100) DEFAULT NULL,
  PRIMARY KEY (`LabId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `labresults`
--

CREATE TABLE IF NOT EXISTS `labresults` (
  `labId` int(11) NOT NULL AUTO_INCREMENT,
  `Pid` int(11) DEFAULT NULL,
  `Test` varchar(200) DEFAULT NULL,
  `FileName` varchar(200) DEFAULT NULL,
  `RecPid` int(11) DEFAULT NULL,
  `RecDate` datetime DEFAULT NULL,
  PRIMARY KEY (`labId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Table structure for table `patientbios`
--

CREATE TABLE IF NOT EXISTS `patientbios` (
  `PId` int(100) NOT NULL AUTO_INCREMENT,
  `FullName` varchar(200) DEFAULT NULL,
  `Gender` varchar(200) DEFAULT NULL,
  `Dob` date DEFAULT NULL,
  `MaritalStat` varchar(100) DEFAULT NULL,
  `MfiId` varchar(100) DEFAULT NULL,
  `IdNum` varchar(200) DEFAULT NULL,
  `Employer` varchar(400) DEFAULT NULL,
  `Branch` varchar(500) DEFAULT NULL,
  `Dept` varchar(400) DEFAULT NULL,
  `Email` varchar(400) DEFAULT NULL,
  `Tel` varchar(400) DEFAULT NULL,
  `RecDate` datetime DEFAULT NULL,
  `RecPId` int(100) DEFAULT NULL,
  PRIMARY KEY (`PId`),
  KEY `fkReccid` (`RecPId`),
  KEY `MfiId` (`MfiId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `patienthist`
--

CREATE TABLE IF NOT EXISTS `patienthist` (
  `HistId` int(100) NOT NULL AUTO_INCREMENT,
  `Pid` int(100) DEFAULT NULL,
  `DiagA1` varchar(500) DEFAULT NULL,
  `DiagA2` varchar(500) DEFAULT NULL,
  `DiagA3` varchar(500) DEFAULT NULL,
  `DiagA4` varchar(500) DEFAULT NULL,
  `DiagA5` varchar(500) DEFAULT NULL,
  `DiagA6` varchar(500) DEFAULT NULL,
  `DiagA7` varchar(500) DEFAULT NULL,
  `DiagA8` varchar(500) DEFAULT NULL,
  `DiagA9` varchar(500) DEFAULT NULL,
  `DiagA10` varchar(500) DEFAULT NULL,
  `DiagA11` varchar(500) DEFAULT NULL,
  `DiagA12` varchar(500) DEFAULT NULL,
  `DiagB` varchar(500) DEFAULT NULL,
  `DiagC1` varchar(500) DEFAULT NULL,
  `DiagC2` varchar(500) DEFAULT NULL,
  `DiagD` varchar(500) DEFAULT NULL,
  `DiagE` varchar(500) DEFAULT NULL,
  `DiagF1` varchar(500) DEFAULT NULL,
  `DiagF2` varchar(500) DEFAULT NULL,
  `DiagF3` varchar(500) DEFAULT NULL,
  `DiagG` varchar(500) DEFAULT NULL,
  `DiagH` varchar(500) DEFAULT NULL,
  `DiagI` varchar(500) DEFAULT NULL,
  `DiagJ` varchar(500) DEFAULT NULL,
  `hepB` varchar(500) DEFAULT NULL,
  `hepb_diag` varchar(500) DEFAULT NULL,
  `hepb_diag_fur` varchar(500) DEFAULT NULL,
  `RecDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `RecPid` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`HistId`),
  KEY `Id` (`Pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `personel`
--

CREATE TABLE IF NOT EXISTS `personel` (
  `RecPid` int(100) NOT NULL AUTO_INCREMENT,
  `FullName` varchar(200) DEFAULT NULL,
  `Qualif` varchar(200) DEFAULT NULL,
  `Position` varchar(200) DEFAULT NULL,
  `PassWord` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`RecPid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `personel`
--

INSERT INTO `personel` (`RecPid`, `FullName`, `Qualif`, `Position`, `PassWord`, `Email`) VALUES
(1, 'Kofi Mensah', 'Dr. UG', 's5', 'medfocuss5', 'med_s5@gmail.com'),
(2, 'Kofi Mensah', 'BSC. Nursing', 's3', 'MedFocusS1', 'med_s3@gmail.com'),
(3, 'Kofi Mensah', 'mkom', 's4', 'MedFocuss1', 'med_s4@gmail.com'),
(4, 'Kofi Mensah', 'Dr', 's1', 'Ra0243840804', 'med_s1@gmail.com'),
(5, 'Kofi Mensah', 'Dr.', 's2', 'MedFocus', 'med_s2@gmail.com'),
(7, 'Kofi Mensah', 'Dr.', 's7', 'MedFocuss7', 'med_s7@gmail.com'),
(10, 'Kofi Mensah', 'Dr', 's6', 'MedFocuss6', 'med_s6@gmail.com'),
(11, 'Team 1 Registration', 'Nurse', 's1', 'MedFocuss1', 'team1reg@gmail.com'),
(12, 'Team 2 Registration', 'Nurse', 's1', 'MedFocuss1', 'team2reg@gmail.com'),
(13, 'Team 1 History', 'Nurse', 's2', 'MedFocuss2', 'team1hist@gmail.com'),
(14, 'Team 2 History', 'Nurse', 's2', 'MedFocuss2', 'team2hist@gmail.com'),
(15, 'Team 1 Vitals', 'Nurse', 's3', 'MedFocuss3', 'team1vit@gmail.com'),
(16, 'Team 2 Vitals', 'Nurse', 's3', 'MedFocuss3', 'team2vit@gmail.com'),
(17, 'Adwoa Twum-Barimah', 'Dr', 's5', 'medFocuss5', 'adwoa@gmail.com'),
(18, 'Ivy-Marie Aggrey', 'Dr', 's5', 'medFocuss5', 'ivy@gmail.com'),
(19, 'Yaw Oduro Fianko', 'Dr', 's5', 'medFocuss5', 'yaw@gmail.com'),
(20, 'Godwin Ashley', 'Dr', 's5', 'medFocuss5', 'godwin@gmail.com'),
(21, 'Nana Akua Abruquah', 'Dr', 's5', 'medFocuss5', 'akua@gmail.com'),
(22, 'Bright Boamah', 'Dr', 's5', 'medFocuss5', 'bright@gmail.com'),
(23, 'Eugene Ampofo', 'Dr', 's5', 'medFocuss5', 'eugene@gmail.com'),
(24, 'Efua Nuamah Yankah', 'Dr.', 's5', 'medFocuss5', 'efua@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `summary`
--

CREATE TABLE IF NOT EXISTS `summary` (
  `SumId` int(100) NOT NULL AUTO_INCREMENT,
  `PId` int(100) DEFAULT NULL,
  `Diag1` varchar(500) DEFAULT NULL,
  `Diag2` varchar(500) DEFAULT NULL,
  `Diag3` varchar(500) DEFAULT NULL,
  `Diag4` varchar(500) DEFAULT NULL,
  `Diag5` varchar(500) DEFAULT NULL,
  `Diag6` varchar(500) DEFAULT NULL,
  `Diag7` varchar(500) DEFAULT NULL,
  `Diag8` varchar(500) DEFAULT NULL,
  `Diag9` varchar(500) DEFAULT NULL,
  `Diag10` varchar(500) DEFAULT NULL,
  `Diag11` varchar(500) DEFAULT NULL,
  `Diag12` varchar(500) DEFAULT NULL,
  `Diag13` varchar(500) DEFAULT NULL,
  `Diag14` varchar(500) DEFAULT NULL,
  `Diag15` varchar(500) DEFAULT NULL,
  `Diag16` varchar(500) DEFAULT NULL,
  `Diag17` varchar(500) DEFAULT NULL,
  `Diag18` varchar(500) DEFAULT NULL,
  `Diag19` varchar(500) DEFAULT NULL,
  `Diag20` varchar(500) DEFAULT NULL,
  `Diag21` varchar(500) DEFAULT NULL,
  `Diag22` varchar(500) DEFAULT NULL,
  `Diag23` varchar(500) DEFAULT NULL,
  `Diag24` varchar(500) DEFAULT NULL,
  `Diag25` varchar(500) DEFAULT NULL,
  `Diag26` varchar(500) DEFAULT NULL,
  `Diag27` varchar(500) DEFAULT NULL,
  `Diag28` varchar(500) DEFAULT NULL,
  `Diag29` varchar(500) DEFAULT NULL,
  `Diag30` varchar(500) DEFAULT NULL,
  `Diag31` varchar(500) DEFAULT NULL,
  `Diag32` varchar(500) DEFAULT NULL,
  `Diag33` varchar(500) DEFAULT NULL,
  `Diag34` varchar(500) DEFAULT NULL,
  `Diag35` varchar(500) DEFAULT NULL,
  `Diag36` varchar(500) DEFAULT NULL,
  `Diag37` varchar(500) DEFAULT NULL,
  `Diag38` varchar(500) DEFAULT NULL,
  `Diag39` varchar(500) DEFAULT NULL,
  `Diag40` varchar(500) DEFAULT NULL,
  `Diag41` varchar(500) DEFAULT NULL,
  `Diag42` varchar(500) DEFAULT NULL,
  `RecPid` int(100) DEFAULT NULL,
  `RecDate` datetime DEFAULT NULL,
  PRIMARY KEY (`SumId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
