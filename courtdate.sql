-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2019 at 09:52 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courtdate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` varchar(10) NOT NULL,
  `pass` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `pass`) VALUES
('0010', 'test'),
('Admin1', '0000'),
('Admin2', '0000'),
('No Name', '0000'),
('test', '01010');

-- --------------------------------------------------------

--
-- Table structure for table `casedetails`
--

CREATE TABLE `casedetails` (
  `CLID` varchar(10) DEFAULT NULL,
  `LID` varchar(10) NOT NULL,
  `caseID` varchar(10) NOT NULL,
  `JID` varchar(10) DEFAULT NULL,
  `description` varchar(150) DEFAULT NULL,
  `next_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `casedetails`
--

INSERT INTO `casedetails` (`CLID`, `LID`, `caseID`, `JID`, `description`, `next_date`) VALUES
('001', 'L009', '0004', 'ID', 'Jhon vs the state.', '2019-05-22'),
('cl001', 'L009', 'C01', 'J001', 'Vito vs the state', '2019-05-20'),
('KEVIN2', 'test', 'kev007', 'name', 'kev vs kev again.', '2019-09-20');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `CLID` varchar(10) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `address` varchar(60) NOT NULL,
  `contact` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`CLID`, `cname`, `address`, `contact`) VALUES
('0009', '01', 'New Yourk, New york', '001'),
('001', 'Jhon', '****', '*****'),
('002', 'Turk', 'test', '010'),
('010', 'test', 'New Yourk, New york', 'test'),
('Cl001', 'Vito', 'Long Island', '09914'),
('KEVIN2', 'Kavin2', 'New York, New york', 'test'),
('Mar1', 'Marbury', 'US', '0000-0000-00');

-- --------------------------------------------------------

--
-- Table structure for table `hearings`
--

CREATE TABLE `hearings` (
  `caseId` varchar(10) NOT NULL,
  `lastdate` date NOT NULL,
  `hearingdesc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hearings`
--

INSERT INTO `hearings` (`caseId`, `lastdate`, `hearingdesc`) VALUES
('0004', '2019-05-15', 'Bail'),
('C01', '2019-05-01', 'Probation'),
('C01', '2019-05-13', 'test'),
('C01', '2019-05-14', 'test'),
('C01', '2019-05-15', 'test'),
('C01', '2019-05-16', 'Bail'),
('C01', '2019-05-21', 'test'),
('C01', '2019-05-22', 'test'),
('C01', '2019-05-30', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `judges`
--

CREATE TABLE `judges` (
  `JID` varchar(40) NOT NULL,
  `jname` varchar(20) NOT NULL,
  `courtno` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `judges`
--

INSERT INTO `judges` (`JID`, `jname`, `courtno`) VALUES
('0101', 'Test', '01'),
('ID ', 'Name ', '2'),
('ID2', 'Name ', 'Court'),
('J001', 'xyz', '01'),
('name', '010100', 'court');

-- --------------------------------------------------------

--
-- Table structure for table `lawyers`
--

CREATE TABLE `lawyers` (
  `LID` varchar(10) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lawyers`
--

INSERT INTO `lawyers` (`LID`, `Lname`, `contact`) VALUES
('L009', 'Tom Heagan', '03334988023'),
('test', 'test', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `casedetails`
--
ALTER TABLE `casedetails`
  ADD PRIMARY KEY (`caseID`,`LID`),
  ADD KEY `CLID` (`CLID`),
  ADD KEY `LID` (`LID`),
  ADD KEY `JID` (`JID`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`CLID`);

--
-- Indexes for table `hearings`
--
ALTER TABLE `hearings`
  ADD PRIMARY KEY (`caseId`,`lastdate`),
  ADD KEY `caseId` (`caseId`);

--
-- Indexes for table `judges`
--
ALTER TABLE `judges`
  ADD PRIMARY KEY (`JID`);

--
-- Indexes for table `lawyers`
--
ALTER TABLE `lawyers`
  ADD PRIMARY KEY (`LID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `casedetails`
--
ALTER TABLE `casedetails`
  ADD CONSTRAINT `cc` FOREIGN KEY (`CLID`) REFERENCES `clients` (`CLID`),
  ADD CONSTRAINT `dd` FOREIGN KEY (`LID`) REFERENCES `lawyers` (`LID`),
  ADD CONSTRAINT `gg` FOREIGN KEY (`JID`) REFERENCES `judges` (`JID`);

--
-- Constraints for table `hearings`
--
ALTER TABLE `hearings`
  ADD CONSTRAINT `ca` FOREIGN KEY (`caseId`) REFERENCES `casedetails` (`caseID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
