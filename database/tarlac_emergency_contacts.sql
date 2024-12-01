-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2024 at 08:04 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tarlac_emergency_contacts`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `User_ID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`User_ID`, `Username`, `Password`) VALUES
(1, 'shane', 'blanco'),
(2, 'hannah', 'pulmano'),
(3, 'stephen', 'nierras'),
(4, 'princess', 'pasamonte');

-- --------------------------------------------------------

--
-- Table structure for table `fire_departments`
--

CREATE TABLE `fire_departments` (
  `Fire_Dept_ID` int(11) NOT NULL,
  `Municipality` varchar(50) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Institution` varchar(50) NOT NULL,
  `Contact Information` varchar(50) NOT NULL,
  `URL from Google Maps` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fire_departments`
--

INSERT INTO `fire_departments` (`Fire_Dept_ID`, `Municipality`, `Category`, `Institution`, `Contact Information`, `URL from Google Maps`) VALUES
(1, 'Tarlac City', 'Fire Department', 'Bureau of Fire Protection - Tarlac City', '+63 (45) 982 1356', 'https://maps.app.goo.gl/UhkABYD7pSaqKEYv5'),
(2, 'Anao', 'Fire Department', 'Anao Fire Station - BFP R3', '0945 516 2458', 'https://maps.app.goo.gl/FMu3FbMJcPvxw6427'),
(3, 'Bamban', 'Fire Department', 'BFP R3 Bamban Fire Station', '0943 137 6354', 'https://maps.app.goo.gl/TtgGQVvM7WSEhZ1u7'),
(4, 'Camiling', 'Fire Department', 'Camiling Fire Station', '+63 (04593) 40959', 'https://maps.app.goo.gl/CcZtgSyGtZmQwYy37'),
(5, 'Capas', 'Fire Department', 'Capas Fire Station', '+6398 258 8960', 'https://maps.app.goo.gl/eZuPicdeTdsLPfEm9'),
(6, 'Concepcion', 'Fire Department', 'Bureau of Fire Protection - Concepcion', '0943 678 8407', 'https://maps.app.goo.gl/3bUKVdFmRfMUuhfBA'),
(7, 'Gerona', 'Fire Department', 'Gerona Fire Station', '+63 (04593) 13638', 'https://maps.app.goo.gl/q4c1Xqq6eyTzsyVc7'),
(8, 'La Paz', 'Fire Department', 'La Paz Tarlac Fire Station', '0945 516 2465', 'https://maps.app.goo.gl/UdgJUqCSzbPvhC4C7'),
(9, 'Mayantoc', 'Fire Department', 'Mayantoc Fire Station', '+63 (045) 491 5010', 'https://maps.app.goo.gl/tFYieQC8VMPdh4UY9'),
(10, 'Moncada', 'Fire Department', 'Moncada Fire Station', '+63 (045) 606 5432', 'https://maps.app.goo.gl/TCTNVbiXbe3G9DKDA'),
(11, 'Paniqui', 'Fire Department', 'Paniqui Fire Station', '+63 (04593) 11110', 'https://maps.app.goo.gl/fEJcDj8Nqd2nwT359'),
(12, 'Pura', 'Fire Department', 'Pura Fire Station', '0932 635 1008', 'https://maps.app.goo.gl/ccbky1ruR5U3B7Ux7'),
(13, 'Ramos', 'Fire Department', 'Ramos Fire Station', '0945 516 2470', 'https://maps.app.goo.gl/2QXbgiJJg1rUFCZw7'),
(14, 'San Clemente', 'Fire Department', 'San Clemente Fire Station', '0932 482 2087', 'https://maps.app.goo.gl/NxwmqxYzD5DrUyBPA'),
(15, 'San Jose', 'Fire Department', 'Bureau of Fire Protection San Jose, Tarlac', '0925 453 0777', 'https://maps.app.goo.gl/TFMSiLtfn7SC72L26'),
(16, 'San Manuel', 'Fire Department', 'San Manuel Fire Station', '0923 422 8868', 'https://maps.app.goo.gl/JCy3sd65211FuQtDA'),
(17, 'Santa Ignacia', 'Fire Department', 'Sta. Ignacia Fire Station', '0932 462 7200', 'https://maps.app.goo.gl/nA78H8mBdjR25pTe8'),
(18, 'Victoria', 'Fire Department', 'Victoria Fire Station', '0925 491 4746', 'https://maps.app.goo.gl/hzg5rU1qHGSyWUxGA');

-- --------------------------------------------------------

--
-- Table structure for table `government_orgs`
--

CREATE TABLE `government_orgs` (
  `Gov.Organization_ID` int(11) NOT NULL,
  `Municipality` varchar(50) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Institution` varchar(100) NOT NULL,
  `Contact Information` varchar(50) NOT NULL,
  `URL from Google Maps` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `government_orgs`
--

INSERT INTO `government_orgs` (`Gov.Organization_ID`, `Municipality`, `Category`, `Institution`, `Contact Information`, `URL from Google Maps`) VALUES
(1, 'Tarlac City', 'Government Organization', 'Tarlac City Disaster Risk Reduction Management Office (CDRRMO)', '0926 755 4109', 'https://maps.app.goo.gl/EoFFrS4aGQGRdbCq8'),
(2, 'Tarlac City', 'Government Organization', 'Tarlac Provincial Disaster Risk Reduction and Management Office (PDRRMO)', '0917 806 9276', 'https://maps.app.goo.gl/wuDxsPguCB8iwgpQ7'),
(3, 'Anao', 'Government Organization', 'Anao Municipal Hall', '+63 (045) 606 0590', 'https://maps.app.goo.gl/qPJXdJRaAwAMN1WK7'),
(4, 'Bamban', 'Government Organization', 'Bamban Municipal Hall', '+63 (045) 925-0050', 'https://maps.app.goo.gl/T2enzHncBqHB8xt19'),
(5, 'Camiling', 'Government Organization', 'Camiling Municipal Hall', '+63 (04593) 40328', 'https://maps.app.goo.gl/ZcyS77uDkZk2qkfb8'),
(6, 'Capas', 'Government Organization', 'Capas Municipal Hall', '+63 (045) 925 0154', 'https://maps.app.goo.gl/B6Wx8otQWSrYD4Qq6'),
(7, 'Gerona', 'Government Organization', 'Gerona Municipal Hall', '+63 (045) 608 0026', 'https://maps.app.goo.gl/Jdy33gEZNJgTcA9K8'),
(8, 'La Paz', 'Government Organization', 'La Paz Municipal Hall', '+63 (045) 611 0620', 'https://maps.app.goo.gl/zA67rVyi5BpPDMZg6'),
(9, 'Mayantoc', 'Government Organization', 'Mayantoc Municipal Hall', '0917 514 2245', 'https://maps.app.goo.gl/wVisXRCK3axyRvkp6'),
(10, 'Moncada', 'Government Organization', 'Moncada Town Hall', '+63 (045)606 5406', 'https://maps.app.goo.gl/f5JRcoi2XJQU5gV38'),
(11, 'Paniqui', 'Government Organization', 'Paniqui Municipal Hall', '+63 (045) 606 6157', 'https://maps.app.goo.gl/zv2MCJbqSXKWGkcZ6'),
(12, 'Pura', 'Government Organization', 'Pura Municipal Hall', '+63 (045) 606 0243', 'https://maps.app.goo.gl/CvvCG6iw9gtinW688'),
(13, 'Ramos', 'Government Organization', 'Ramos Municipal Hall', '+63 (045) 491 7670', 'https://maps.app.goo.gl/nfLf71KndSnegrdC6'),
(14, 'San Clemente', 'Government Organization', 'San Clemente Municipal Hall', '+63 (045) 934 1200', 'https://maps.app.goo.gl/cwbDR7EPj8vqR3oAA'),
(15, 'San Jose', 'Government Organization', 'San Jose Municipal Hall', 'N/A', 'https://maps.app.goo.gl/o9Jt5crb4dQd4TMY6'),
(16, 'San Manuel', 'Government Organization', 'San Manuel Town Hall', '+63 (045) 606 0372', 'https://maps.app.goo.gl/Knp2njFRkWkX9FB56'),
(17, 'Santa Ignacia', 'Government Organization', 'Sta. Ignacia Municipal Hall', '+63 (045) 606 3190', 'https://maps.app.goo.gl/DzqaYCMkKFSfyXuX9'),
(18, 'Victoria', 'Government Organization', 'Victoria Municipal Hall', '0919 076 5146', 'https://maps.app.goo.gl/jnBJL7p4mjj8suNRA');

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `Hospital_ID` int(11) NOT NULL,
  `Municipality` varchar(50) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Institution` varchar(100) NOT NULL,
  `Contact Information` varchar(50) NOT NULL,
  `URL from Google Maps` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`Hospital_ID`, `Municipality`, `Category`, `Institution`, `Contact Information`, `URL from Google Maps`) VALUES
(1, 'Tarlac City', 'Hospital', 'Central Luzon Doctors Hospital', '+63(045) 925 2534', 'https://maps.app.goo.gl/qQLfiStWko9Wuqkm7'),
(2, 'Tarlac City', 'Hospital', 'Tarlac Medical Center', '+63 (045) 809 0050', 'https://maps.app.goo.gl/RWjyHxWXFTLC9Mgh9'),
(3, 'Tarlac City', 'Hospital', 'Jecsons Medical Center', '+63 (45) 982 5501', 'https://maps.app.goo.gl/Ef8gkJxCgzCoYbmWA'),
(4, 'Tarlac City', 'Hospital', 'Ramos General Hospital', '+63 (45) 982 5415', 'https://maps.app.goo.gl/7kLy6a1moVN19vrj8'),
(5, 'Tarlac City', 'Hospital', 'Talon General Hospital', '+63 (45) 982 5415', 'https://maps.app.goo.gl/m5edN4y6MPUE3CnT8'),
(6, 'Tarlac City', 'Hospital', 'Tarlac Provincial Hospital', '+63 (045) 491 8970', 'https://maps.app.goo.gl/sd7e1Q7QbUNB7RCt6'),
(7, 'Tarlac City', 'Hospital', 'Loving Mother General Hospital', '+63 (045) 982 5644', 'https://maps.app.goo.gl/7KnukAkZDAsrhFnZ6'),
(8, 'Anao', 'Hospital', 'Anao Municipal Hall - Rural Health Unit', '+63 (045)493 2021', 'https://maps.app.goo.gl/3p8S2LYbg3rxYRoX7'),
(9, 'Camiling', 'Hospital', 'Salvador General Hospital', '+63 (04593) 40312', 'https://maps.app.goo.gl/4CYVJ3XpttVp5bLe9'),
(10, 'Camiling', 'Hospital', 'Gilberto O. Teodoro Memorial Hospital', '+63 (04593) 40310', 'https://maps.app.goo.gl/axg8Nrq6YejQmzMr5'),
(11, 'Camiling', 'Hospital', 'Señor Sto Niño Hospital, Inc', '+63 (04593) 40803', 'https://maps.app.goo.gl/3NxogmNnN9zXCzHQ7'),
(12, 'Capas', 'Hospital', 'Ospital Ning Capas', '+63 (045) 925 0154', 'https://maps.app.goo.gl/dJwQcKSbfPNkRDSB7'),
(13, 'Capas', 'Hospital', 'Capas Medical Center', '+63 (045) 925 5937', 'https://maps.app.goo.gl/ZajDqJGxfPGmNk7u8'),
(14, 'Capas', 'Hospital', 'Saint Andrea Maternity and General Hospital', '+63 (045)923 1864', 'https://maps.app.goo.gl/dysZrKjXf1egiu5E8'),
(15, 'Concepcion', 'Hospital', 'Concepcion District Hospital', '+63 (045) 923 0852', 'https://maps.app.goo.gl/dp8n8rYnmw4AEaZ2A'),
(16, 'Concepcion', 'Hospital', 'M. Napeñas Multi Specialty Hospital', '+63 (045) 923 0819', 'https://maps.app.goo.gl/ATbGmsTMM8XqLvLW6'),
(17, 'Concepcion', 'Hospital', 'Immaculate Concepcion Polyclinic Hospital', '+63 (045) 923 0537', 'https://maps.app.goo.gl/yjtyws2NFQiZPkr39'),
(18, 'Concepcion', 'Hospital', 'Dr. Eutiquio Ll. Atanacio Jr. Memorial Hospital', '+63 (045) 923 0240', 'https://maps.app.goo.gl/mxFti7DCghC8xmho9'),
(19, 'Gerona', 'Hospital', 'Gerona Hospital of the Sacred Heart', '+63 (04593) 10977', 'https://maps.app.goo.gl/DXt7rVRz6mQfP7JY6'),
(20, 'Gerona', 'Hospital', 'Solano Medical Clinic And Laboratory', '0916 575 2875', 'https://maps.app.goo.gl/zZA246xS36dQUU3N6'),
(21, 'Gerona', 'Hospital', 'Gerona Rural Health Unit I', '+63 (04593) 13355', 'https://maps.app.goo.gl/JDkDfwxmqH774YFf7'),
(22, 'Gerona', 'Hospital', 'Gerona Rural Health Unit II', '+63 (045) 491 5168', 'https://maps.app.goo.gl/FMrTGu4S58rAYvy87'),
(23, 'La Paz', 'Hospital', 'La Paz Medicare & Community Hospital', '+63 (045) 606 0659', 'https://maps.app.goo.gl/SquL8b29duDkQoc87'),
(24, 'La Paz', 'Hospital', 'Eudoxia M. Padua Lying-In Clinic', '0932 774 3846', 'https://maps.app.goo.gl/zbkHmPknY8kFYE2o8'),
(25, 'Mayantoc', 'Hospital', 'Mayantoc Rural Health Unit', '+63 (045) 606 6265', 'https://maps.app.goo.gl/XqRq2AxTHHKF5aBGA'),
(26, 'Moncada', 'Hospital', 'Congressman Enrique Henry M. Cojuanco Memorial District Hospital\r\n', '0998 593 4277', 'https://maps.app.goo.gl/wM6c5de57k6qjHZq6'),
(27, 'Moncada', 'Hospital', 'Moncada Medical Clinic', '+63 (045) 601 0455', 'https://maps.app.goo.gl/nNnJCGoMfgut3bCf6'),
(28, 'Moncada', 'Hospital', 'Cuchapin-Ramos Laboratory and Diagnostic Center', '+63 (045) 491 4415', 'https://maps.app.goo.gl/GwZG78xcQJ588W8G9'),
(29, 'Moncada', 'Hospital', 'Moncada RHU I', '+63 (045) 0606 1417', 'https://maps.app.goo.gl/La7a8dD6d2iP9ZTP9'),
(30, 'Moncada', 'Hospital', 'Moncada RHU II', '+63 (045) 606 5031', 'https://maps.app.goo.gl/CdDpscapZsA3jegB8'),
(31, 'Paniqui', 'Hospital', 'Rayos - Valentin Hospital', '+63 (04593) 10831', 'https://maps.app.goo.gl/eU2xUXn2jPgD8NjN9'),
(32, 'Paniqui', 'Hospital', 'Jowell General Hospital', '+63 (04593) 10050', 'https://maps.app.goo.gl/AtiEtWFqXy2HgwWr9'),
(33, 'Paniqui', 'Hospital', 'Paniqui General Hospital', '+63 (04593) 16088', 'https://maps.app.goo.gl/MUSmf3aDPYjLxf7v7'),
(34, 'Paniqui', 'Hospital', 'Galeon Multi-Specialty Clinic', '0992 705 5657', 'https://maps.app.goo.gl/XNegD8bBRiMYdz7B7'),
(35, 'Paniqui', 'Hospital', 'Sing Medical Services', '+63 (04593) 13836', 'https://maps.app.goo.gl/ypNuqk8a1ccjMc5Z8'),
(36, 'Pura', 'Hospital', 'Pura Health Center', '+63 (4593) 00495', 'https://maps.app.goo.gl/VuEeYhLiQUCkNfFM7'),
(37, 'Ramos', 'Hospital', 'Ramos General Hospital', '+63 (045) 493 2565', 'https://maps.app.goo.gl/F8pEs58eFxRs3ckJ7'),
(38, 'San Clemente', 'Hospital', 'Rural Health Unit - Municipality of San Clemente', '+63 (04593) 43475', 'https://maps.app.goo.gl/Yz4TbbY283bQfrjh6'),
(39, 'San Jose', 'Hospital', 'San Jose Medical Clinic', '0975 114 8800', 'https://maps.app.goo.gl/Ln2wwWGJo6KzTewx5'),
(40, 'San Manuel', 'Hospital', 'San Manuel Community Health Center', '+63 (045) 606 3156', 'https://maps.app.goo.gl/wGhfc7m86cqL6C8z8'),
(41, 'San Manuel', 'Hospital', 'Rural Health Unit - San Manuel, Tarlac', '+63 (0456) 063156', 'https://maps.app.goo.gl/PEGnQsi8V8NRBMnJ9'),
(42, 'Santa Ignacia', 'Hospital', 'SSNHI Medical Clinic (Señor Sto. Niño- Satellite Clinic)', '+63 (045) 934 0803', 'https://maps.app.goo.gl/rHF4yG5Rd7Wk312Y6'),
(43, 'Santa Ignacia', 'Hospital', 'Lady Irithel Lying-in Clinic', '0968 853 5186', 'https://maps.app.goo.gl/TJCu5Fe6tQHTTrAn9'),
(44, 'Santa Ignacia', 'Hospital', 'Leal Medical Clinic', '0926 009 8278', 'https://maps.app.goo.gl/1MBDtrYFb2HwmU6u8'),
(45, 'Victoria', 'Hospital', 'Victoria Rural Health Unit I', '+63 (045) 606 9907', 'https://maps.app.goo.gl/z4TgxQSMyQjwL1TV6'),
(46, 'Bamban', 'Hospital', 'Bamban RHU', '0920 286 8880', 'https://maps.app.goo.gl/8EXNJnbcPhWxouRz6');

-- --------------------------------------------------------

--
-- Table structure for table `non_government_orgs`
--

CREATE TABLE `non_government_orgs` (
  `NGO_ID` int(11) NOT NULL,
  `Municipality` varchar(50) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Institution` varchar(100) NOT NULL,
  `Contact Information` varchar(50) NOT NULL,
  `URL from Google Maps` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `non_government_orgs`
--

INSERT INTO `non_government_orgs` (`NGO_ID`, `Municipality`, `Category`, `Institution`, `Contact Information`, `URL from Google Maps`) VALUES
(1, 'Tarlac City', 'Non-Governmental Organization', 'Philippine Red Cross Tarlac Chapter', '+63 (043)982 0318', 'https://maps.app.goo.gl/L85QoooCf6VaJ23P7'),
(2, 'Capas', 'Non-Governmental Organization', 'Aeta Ako, Pilipino Ako Inc.', '0917 875 0183', 'https://maps.app.goo.gl/AkHj85cyX2NZJq4EA');

-- --------------------------------------------------------

--
-- Table structure for table `police_stations`
--

CREATE TABLE `police_stations` (
  `Police_Station_ID` int(11) NOT NULL,
  `Municipality` varchar(50) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Institution` varchar(100) NOT NULL,
  `Contact Information` varchar(50) NOT NULL,
  `URL from Google Maps` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `police_stations`
--

INSERT INTO `police_stations` (`Police_Station_ID`, `Municipality`, `Category`, `Institution`, `Contact Information`, `URL from Google Maps`) VALUES
(1, 'Tarlac City', 'Police Station', 'Tarlac Provincial Police Office - Camp General F. Macabulos', '+63 (045) 982-1972', 'https://maps.app.goo.gl/84PKGrpKQncybM4HA'),
(2, 'Tarlac City', 'Police Station', 'Police Station Tarlac', '0998 598 5494', 'https://maps.app.goo.gl/SpyZH7BcGrYtJ2Gx5'),
(3, 'Tarlac City', 'Police Station', 'Tarlac City Police Station - Police Community Precinct 1', '+63 (045) 982 2101', 'https://maps.app.goo.gl/NfjQzcSGzZ1q9UsdA'),
(4, 'Tarlac City', 'Police Station', 'Tarlac City Police Station - Tarlac Community Precinct 2', '0915 708 3875', 'https://maps.app.goo.gl/YifdDLZFbhj24uAx6'),
(5, 'Tarlac City', 'Police Station', 'Tarlac City Police Station - Police Community Precinct 3', '0926 700 0150', 'https://maps.app.goo.gl/9njo8BDyqXJytK869'),
(6, 'Tarlac City', 'Police Station', 'Tarlac City Police Station - Tarlac Community Precinct 4', '0929 814 5791', 'https://maps.app.goo.gl/7EcXjH2TmV6jthZD8'),
(7, 'Tarlac City', 'Police Station', 'Tarlac City Police Station - Police Community Precinct 5', '+63 (045) 982 3987', 'https://maps.app.goo.gl/gBwW6RQiega7doUd7'),
(8, 'Tarlac City', 'Police Station', 'Tarlac City Police Station - Police Community Precinct 6', '0915 708 3979', 'https://maps.app.goo.gl/KoiwepStPuvoagEw9'),
(9, 'Tarlac City', 'Police Station', 'Tarlac City Police Station - Police Community Precinct 7', '0961 278 3934', 'https://maps.app.goo.gl/U8kF6RKrXR5eUbTA9'),
(10, 'Tarlac City', 'Police Station', 'Tarlac City Police Station - Police Community Precinct 8', '0929 814 5791', 'https://maps.app.goo.gl/vYYXuWF1KvqTXyfe6'),
(11, 'Tarlac City', 'Police Station', 'Tarlac City Police Station - Police Community Precinct 9', '0915 708 4008', 'https://maps.app.goo.gl/XcgEn8tuj3PCGzBG6'),
(12, 'Tarlac City', 'Police Station', 'Tarlac City Police Station - Police Community Precinct 10', '0915 708 4010', 'https://maps.app.goo.gl/fmVyryjPQREugqrz8'),
(13, 'Anao', 'Police Station', 'Anao Municipal Police Station', '+63 (045) 800 7303', 'https://maps.app.goo.gl/LPMMm7SrKybgf2mU8'),
(14, 'Bamban', 'Police Station', 'Bamban Municipal Police Station', '0921 946 5239', 'https://maps.app.goo.gl/cLVVW3jsBxGmGv516'),
(15, 'Camiling', 'Police Station', 'Camiling Police Station', '+63 (04593) 40693', 'https://maps.app.goo.gl/bUT1CoGYkTXScu5e9'),
(16, 'Capas', 'Police Station', 'Capas Police Station', '0975 646 6439', 'https://maps.app.goo.gl/zHXZQxdbuPzB8bpn8'),
(17, 'Concepcion', 'Police Station', 'Concepcion Police Station', '0917 847 5757', 'https://maps.app.goo.gl/v1co46p1kkZPyj2j8'),
(18, 'Gerona', 'Police Station', 'Gerona Municipal Police Station', '0939 220 4252', 'https://maps.app.goo.gl/dQVTpydXpgvdnhUe9'),
(19, 'La Paz', 'Police Station', 'La Paz Municipal Police Station', '0998 598 5484', 'https://maps.app.goo.gl/on9Rykrin9gAc9YZ7'),
(20, 'Mayantoc', 'Police Station', 'Mayantoc Police Station', '0998 598 5485', 'https://maps.app.goo.gl/XTir36ipAkjxgenx8'),
(21, 'Moncada', 'Police Station', 'Moncada Police Station', '0912 506 6937', 'https://maps.app.goo.gl/wjdpCujhEcPwLrg37'),
(22, 'Paniqui', 'Police Station', 'Paniqui Municipal Police Station', '0908 988 2818', 'https://maps.app.goo.gl/7DFsnLeRjiCBw1Ar6'),
(23, 'Pura', 'Police Station', 'PNP Pura Station', '+63 (045) 606 9837', 'https://maps.app.goo.gl/KuTZpFPJLNRTJRAZ7'),
(24, 'Ramos', 'Police Station', 'Ramos Municipal Police Station', '+63 (045) 491 7672', 'https://maps.app.goo.gl/VciZ3k8L7uwR8pqf7'),
(25, 'San Clemente', 'Police Station', 'San Clemente Municipal Police Station', '+63 (04593) 40989', 'https://maps.app.goo.gl/eWEEQh8xfZnbG7Y28'),
(26, 'San Jose', 'Police Station', 'San Jose Municipal Police Station', '0908 320 7076', 'https://maps.app.goo.gl/fDbY22Pv2CEvV1ms9'),
(27, 'San Manuel', 'Police Station', 'San Manuel Tarlac Police Station', '0999 805 2045 / 0956 966 2247', 'https://maps.app.goo.gl/TuNuWHx4oECVJ7Md9'),
(28, 'Santa Ignacia', 'Police Station', 'Sta Ignacia Police Station', '0939 915 7849', 'https://maps.app.goo.gl/wLHxEPPGNVH3JkmT9'),
(29, 'Victoria', 'Police Station', 'Victoria Police Station', '+63 (045) 606 9808', 'https://maps.app.goo.gl/ooP6PjFeERDKWrN86');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `fire_departments`
--
ALTER TABLE `fire_departments`
  ADD PRIMARY KEY (`Fire_Dept_ID`);

--
-- Indexes for table `government_orgs`
--
ALTER TABLE `government_orgs`
  ADD PRIMARY KEY (`Gov.Organization_ID`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`Hospital_ID`);

--
-- Indexes for table `non_government_orgs`
--
ALTER TABLE `non_government_orgs`
  ADD PRIMARY KEY (`NGO_ID`);

--
-- Indexes for table `police_stations`
--
ALTER TABLE `police_stations`
  ADD PRIMARY KEY (`Police_Station_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fire_departments`
--
ALTER TABLE `fire_departments`
  MODIFY `Fire_Dept_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `government_orgs`
--
ALTER TABLE `government_orgs`
  MODIFY `Gov.Organization_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `Hospital_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `non_government_orgs`
--
ALTER TABLE `non_government_orgs`
  MODIFY `NGO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `police_stations`
--
ALTER TABLE `police_stations`
  MODIFY `Police_Station_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
