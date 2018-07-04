-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2018 at 05:54 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airlinebooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `passenger_details`
--

CREATE TABLE `passenger_details` (
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Source` varchar(20) NOT NULL,
  `Destination` varchar(20) NOT NULL,
  `NoOfSeats` int(2) NOT NULL,
  `FlightName` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `Departure` time NOT NULL,
  `Arrival` time NOT NULL,
  `Price` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `search_details`
--

CREATE TABLE `search_details` (
  `ID` int(3) NOT NULL,
  `Start` varchar(100) NOT NULL,
  `Destination` varchar(100) NOT NULL,
  `Departure_Date` date NOT NULL,
  `Airline` varchar(50) NOT NULL,
  `DepartureTime` time NOT NULL,
  `ArrivalTime` time NOT NULL,
  `Duration` varchar(10) NOT NULL,
  `Stops` varchar(20) DEFAULT NULL,
  `Price` int(10) NOT NULL,
  `Seats` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search_details`
--

INSERT INTO `search_details` (`ID`, `Start`, `Destination`, `Departure_Date`, `Airline`, `DepartureTime`, `ArrivalTime`, `Duration`, `Stops`, `Price`, `Seats`) VALUES
(1, 'Chennai', 'Bangalore', '2018-07-27', 'SpiceJet', '11:00:00', '12:00:00', '1 hr', 'Non stop', 2000, 100),
(2, 'Chennai ', 'Hyderabad', '2018-08-02', 'IndiGo', '00:30:00', '01:30:00', '1 hr', 'One Stop', 1931, 50),
(3, 'Chennai', 'Bangalore', '2018-07-29', 'Air India', '02:00:00', '03:20:00', '1hr 20m', 'Non Stop', 1500, 60),
(4, 'Banglore', 'Hyderabad', '2018-07-20', 'Kingfisher', '02:00:00', '03:20:00', '1hr 20m', 'Non Stop', 1900, 70),
(5, 'Chennai', 'Bangalore', '2018-08-02', 'GoAir', '02:00:00', '03:30:00', '1hr 30m', 'One Stop', 2000, 80);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
