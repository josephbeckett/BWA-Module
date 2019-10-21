-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 21, 2019 at 08:27 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ArcadiusCarsDatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `Cars`
--

CREATE TABLE `Cars` (
  `carID` int(5) NOT NULL,
  `Make` varchar(50) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `Fuel_Type` varchar(15) NOT NULL,
  `Year` varchar(4) NOT NULL,
  `Engine_Size` varchar(20) NOT NULL,
  `Colour` varchar(20) NOT NULL,
  `Picture` varchar(256) NOT NULL,
  `Date_Uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Cars`
--

INSERT INTO `Cars` (`carID`, `Make`, `Model`, `Fuel_Type`, `Year`, `Engine_Size`, `Colour`, `Picture`, `Date_Uploaded`) VALUES
(1, 'Ford', 'GT', 'Petrol', '2005', '5.4', 'Red', 'assets/editedfordgt2008.jpeg', '2019-07-26'),
(2, 'Ford', 'KA', 'Petrol', '2011', '1.2', 'Blue', 'assets/carstockimg.jpg', '2019-02-27'),
(3, 'Ford', 'Fiesta', 'Petrol', '2015', '1.6', 'Silver', 'assets/carstockimg.jpg', '2019-10-16'),
(4, 'Ford', 'Focus', 'Petrol', '2018', '1.0', 'Black', 'assets/fordfocus2018.jpg', '2019-10-29'),
(5, 'Peugeot', '208', 'Petrol', '2013', '1.0', 'White', 'assets/carstockimg.jpg', '2019-11-20'),
(6, 'Peugeot', '308', 'Petrol', '2018', '1.2', 'Grey', 'assets/carstockimg.jpg', '2019-06-11'),
(7, 'Peugeot', '3008', 'Diesel', '2017', '1.6', 'Black', 'assets/carstockimg.jpg', '2019-07-09'),
(8, 'Renault', 'Clio', 'Petrol', '2018', '1.2', 'Green', 'assets/carstockimg.jpg', '2019-08-26'),
(9, 'Renault', 'Captur', 'Diesel', '2016', '1.5', 'Orange', 'assets/carstockimg.jpg', '2019-08-17'),
(10, 'Renault', 'Twingo', 'Petrol', '2017', '1.0', 'White', 'assets/carstockimg.jpg', '2019-06-17'),
(11, 'Tesla', 'S', 'Electric', '2018', 'N/a', 'Red', 'assets/carstockimg.jpg', '2019-10-02'),
(12, 'Tesla', 'X', 'Electric', '2019', 'N/a', 'White', 'assets/carstockimg.jpg', '2019-08-13'),
(13, 'Tesla', '3', 'Electric', '2019', 'N/a', 'Blue', 'assets/carstockimg.jpg', '2019-09-03'),
(14, 'Tesla', 'Roadster', 'Electric', '2008', 'N/a', 'Red', 'assets/carstockimg.jpg', '2019-08-15'),
(15, 'Citroen', 'C1', 'Petrol', '2015', '1.0', 'White', 'assets/carstockimg.jpg', '2019-09-04'),
(16, 'Citroen', 'C3', 'Diesel', '2017', '1.6', 'Blue', 'assets/carstockimg.jpg', '2019-09-17'),
(17, 'Citroen', 'DS 3', 'Petrol', '2014', '1.2', 'Green', 'assets/carstockimg.jpg', '2019-07-31'),
(18, 'Ford', 'Mustang', 'Petrol', '2017', '2.3', 'Red', 'assets/fordmustang2017.jpg', '2019-09-12');

-- --------------------------------------------------------

--
-- Table structure for table `Favourites`
--

CREATE TABLE `Favourites` (
  `favID` int(5) NOT NULL,
  `userID` int(5) NOT NULL,
  `carID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Favourites`
--

INSERT INTO `Favourites` (`favID`, `userID`, `carID`) VALUES
(1, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `userID` int(5) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `House_Name` varchar(20) NOT NULL,
  `Address_Line_1` varchar(200) NOT NULL,
  `Address_Line_2` varchar(200) NOT NULL,
  `Postcode` varchar(8) NOT NULL,
  `Date_Of_Birth` date NOT NULL,
  `Phone_Number` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`userID`, `Username`, `Password`, `Email`, `House_Name`, `Address_Line_1`, `Address_Line_2`, `Postcode`, `Date_Of_Birth`, `Phone_Number`) VALUES
(1, 'Joe', '$2y$10$KToPbW9Wtsg3BqfoEbZXI.s/WEbu/lvF2b8DFc44e2cgPwsVolCoS', 'joseph.beckett1999@gmail.com', '22', 'Kingswood Drive', 'Norton Canes', 'WS119TR', '1999-06-21', '07383555132'),
(2, 'Josh', '$2y$10$UgXcdTnii2s3ELFCgPASt.tv8qfNcG6tLM2xy0e7KYWbq8chZc.MW', 'qedbhwqdbwqihd@gmail.com', '23', 'Hall Lane', 'Great Wyrley', 'Walsall', '1999-08-24', '07734125432'),
(3, 'Ben', '$2y$10$XbJpzz1s/LtlomztcsTSH.IiHQC7ZMO1pB8LrP3Z5bnBDVEVQcETm', 'ben@ben.com', '', '', '', '', '0000-00-00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Cars`
--
ALTER TABLE `Cars`
  ADD PRIMARY KEY (`carID`);

--
-- Indexes for table `Favourites`
--
ALTER TABLE `Favourites`
  ADD PRIMARY KEY (`favID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `carID` (`carID`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Cars`
--
ALTER TABLE `Cars`
  MODIFY `carID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `Favourites`
--
ALTER TABLE `Favourites`
  MODIFY `favID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `userID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Favourites`
--
ALTER TABLE `Favourites`
  ADD CONSTRAINT `favourites_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `User` (`userID`),
  ADD CONSTRAINT `favourites_ibfk_2` FOREIGN KEY (`carID`) REFERENCES `Cars` (`carID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
