-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2019 at 06:34 PM
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
-- Database: `arcadiuscarsdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
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
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`carID`, `Make`, `Model`, `Fuel_Type`, `Year`, `Engine_Size`, `Colour`, `Picture`, `Date_Uploaded`) VALUES
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
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `favID` int(5) NOT NULL,
  `userID` int(5) NOT NULL,
  `carID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `favourites`
--

INSERT INTO `favourites` (`favID`, `userID`, `carID`) VALUES
(2, 1, 12),
(3, 1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `recentsearch`
--

CREATE TABLE `recentsearch` (
  `searchID` int(8) NOT NULL,
  `userID` int(4) NOT NULL,
  `searchQuery` varchar(255) NOT NULL,
  `amountSearched` varchar(255) NOT NULL,
  `timeSearched` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recentsearch`
--

INSERT INTO `recentsearch` (`searchID`, `userID`, `searchQuery`, `amountSearched`, `timeSearched`) VALUES
(1, 1, 'Ford', '3', '2019-11-16 12:45:26.000000'),
(23, 1, 'Cit', '3', '2019-11-16 11:41:24.584591'),
(24, 1, 'Tesla', '4', '2019-11-16 12:44:52.000000'),
(25, 1, 'Fo', '1', '2019-11-16 11:47:08.106546');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
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
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `Username`, `Password`, `Email`, `House_Name`, `Address_Line_1`, `Address_Line_2`, `Postcode`, `Date_Of_Birth`, `Phone_Number`) VALUES
(1, 'Joe', '$2y$10$KToPbW9Wtsg3BqfoEbZXI.s/WEbu/lvF2b8DFc44e2cgPwsVolCoS', 'joseph.beckett1999@gmail.com', '22', 'Kingswood Drive', 'Norton Canes', 'WS119TR', '1999-06-21', '01231231231'),
(2, 'Josh', '$2y$10$UgXcdTnii2s3ELFCgPASt.tv8qfNcG6tLM2xy0e7KYWbq8chZc.MW', 'qedbhwqdbwqihd@gmail.com', '23', 'Hall Lane', 'Great Wyrley', 'Walsall', '1999-08-24', '03123214554'),
(3, 'Ben', '$2y$10$XbJpzz1s/LtlomztcsTSH.IiHQC7ZMO1pB8LrP3Z5bnBDVEVQcETm', 'ben@ben.com', '', '', '', '', '0000-00-00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`carID`);

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`favID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `carID` (`carID`);

--
-- Indexes for table `recentsearch`
--
ALTER TABLE `recentsearch`
  ADD PRIMARY KEY (`searchID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `carID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `favID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `recentsearch`
--
ALTER TABLE `recentsearch`
  MODIFY `searchID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favourites`
--
ALTER TABLE `favourites`
  ADD CONSTRAINT `favourites_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`),
  ADD CONSTRAINT `favourites_ibfk_2` FOREIGN KEY (`carID`) REFERENCES `cars` (`carID`);

--
-- Constraints for table `recentsearch`
--
ALTER TABLE `recentsearch`
  ADD CONSTRAINT `recentsearch_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
