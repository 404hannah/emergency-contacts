-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2024 at 01:52 PM
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
  `URL from Google Maps` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fire_departments`
--

INSERT INTO `fire_departments` (`Fire_Dept_ID`, `Municipality`, `Category`, `Institution`, `Contact Information`, `URL from Google Maps`) VALUES
(1, 'Tarlac City', 'Fire Department', 'Bureau of Fire Protection - Tarlac City', '+63 (45) 982 1356', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3844.9665023355287!2d120.5890778!3d15.4862339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396c74043ce3a0f%3A0xec1c229c37eefc6b!2sBureau%20of%20Fire%20Protection%20-%20Tarlac%20City!5e0!3m2!1sen!2sph!4v1734341750247!5m2!1sen!2sph'),
(2, 'Anao', 'Fire Department', 'Anao Fire Station - BFP R3', '0945 516 2458', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3840.5763050777923!2d120.6033322!3d15.7206233!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3391358f5a505cb5%3A0x30034628af9249e9!2sAnao%20Fire%20Station%20-%20BFP%20R3!5e0!3m2!1sen!2sph!4v1734342184156!5m2!1sen!2sph'),
(3, 'Bamban', 'Fire Department', 'BFP R3 Bamban Fire Station', '0943 137 6354', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3848.591930958412!2d120.57051829999999!3d15.290033699999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396eb7a06224d49%3A0xca1492ba5d2fd100!2sBamban%20Fire%20Station!5e0!3m2!1sen!2sph!4v1734342236730!5m2!1sen!2sph'),
(4, 'Camiling', 'Fire Department', 'Camiling Fire Station', '+63 (04593) 40959', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30729.734826280554!2d120.3814362!3d15.6866377!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396b348418c89cf%3A0x81ff95054d6b03bc!2sCamiling%20Fire%20Station!5e0!3m2!1sen!2sph!4v1734342256427!5m2!1sen!2sph'),
(5, 'Capas', 'Fire Department', 'Capas Fire Station', '+6398 258 8960', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3847.5479940000537!2d120.5927344!3d15.346780199999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396c146921809f5%3A0xdf07248bf288deba!2sCapas%20Fire%20Station!5e0!3m2!1sen!2sph!4v1734342275848!5m2!1sen!2sph'),
(6, 'Concepcion', 'Fire Department', 'Bureau of Fire Protection - Concepcion', '0943 678 8407', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3847.9017894385556!2d120.6514131!3d15.3275715!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396c2777963be1f%3A0x4d4843d6885036fe!2sBureau%20of%20Fire%20Protection!5e0!3m2!1sen!2sph!4v1734342296736!5m2!1sen!2sph'),
(7, 'Gerona', 'Fire Department', 'Gerona Fire Station', '+63 (04593) 13638', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3842.7178918391487!2d120.595223!3d15.6067144!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396cbf2f5c1b18f%3A0xf7e3a3a875723819!2sFire%20Station%20Gerona!5e0!3m2!1sen!2sph!4v1734342317974!5m2!1sen!2sph'),
(8, 'La Paz', 'Fire Department', 'La Paz Tarlac Fire Station', '0945 516 2465', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7691.862616465977!2d120.7189865!3d15.4342584!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396db078fecaa37%3A0x8829fba4d64c124f!2sLa%20Paz%20Tarlac%20Fire%20Station!5e0!3m2!1sen!2sph!4v1734342335395!5m2!1sen!2sph'),
(9, 'Mayantoc', 'Fire Department', 'Mayantoc Fire Station', '+63 (045) 491 5010', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3842.4899541001973!2d120.3778299!3d15.618876699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396b227dba27501%3A0x88f16a4d44fa8f14!2sBFP%20-%20Mayantoc%20Fire%20Station!5e0!3m2!1sen!2sph!4v1734342351963!5m2!1sen!2sph'),
(10, 'Moncada', 'Fire Department', 'Moncada Fire Station', '+63 (045) 606 5432', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3840.346789581068!2d120.5726382!3d15.732783300000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339135b5146e1b1d%3A0x3f719b48e20bf64f!2sMoncada%20Fire%20Station!5e0!3m2!1sen!2sph!4v1734342366912!5m2!1sen!2sph'),
(11, 'Paniqui', 'Fire Department', 'Paniqui Fire Station', '+63 (04593) 11110', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3841.5758117713985!2d120.5733083!3d15.667561!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396cacee6304b0b%3A0x56dd4441969362c3!2sPaniqui%20Fire%20Station!5e0!3m2!1sen!2sph!4v1734342388523!5m2!1sen!2sph'),
(12, 'Pura', 'Fire Department', 'Pura Fire Station', '0932 635 1008', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7684.375985315814!2d120.64395855!3d15.63497455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396cceb44cf68c3%3A0xb78e676d410f05eb!2sPoblacion%202%2C%20Tarlac!5e0!3m2!1sen!2sph!4v1734342405856!5m2!1sen!2sph'),
(13, 'Ramos', 'Fire Department', 'Ramos Fire Station', '0945 516 2470', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3841.5852632331!2d120.6393347!3d15.667058400000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33913319794f8f45%3A0x6a06eab2018652e1!2sRamos%20Fire%20Station!5e0!3m2!1sen!2sph!4v1734342431509!5m2!1sen!2sph'),
(14, 'San Clemente', 'Fire Department', 'San Clemente Fire Station', '0932 482 2087', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3840.7562856621776!2d120.36304679999999!3d15.711081299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33914d69d6f8c889%3A0xe518cf35a9859cf0!2sSan%20Clemente%20Fire%20Station!5e0!3m2!1sen!2sph!4v1734342447869!5m2!1sen!2sph'),
(15, 'San Jose', 'Fire Department', 'Bureau of Fire Protection San Jose, Tarlac', '0925 453 0777', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3845.1058046242347!2d120.46301749999999!3d15.47874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396b9e807f7cf97%3A0xeca9fea9c1bbeb8a!2sBureau%20of%20Fire%20Protection%20San%20Jose%2C%20Tarlac!5e0!3m2!1sen!2sph!4v1734342465810!5m2!1sen!2sph'),
(16, 'San Manuel', 'Fire Department', 'San Manuel Fire Station', '0923 422 8868', '"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d245696.24568469834!2d120.3445387!3d15.8037516!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339137259f97f1a5%3A0x7b3982a4696bbf8a!2sSan%20Manuel%20Fire%20Station!5e0!3m2!1sen!2sph!4v1734342497640!5m2!1sen!2sph'),
(17, 'Santa Ignacia', 'Fire Department', 'Sta. Ignacia Fire Station', '0932 462 7200', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3842.5363848040233!2d120.43522979999999!3d15.616399999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396b3f853730ea1%3A0x1cd8f4f132678811!2sSta.%20Ignacia%20Fire%20Station!5e0!3m2!1sen!2sph!4v1734342517668!5m2!1sen!2sph'),
(18, 'Victoria', 'Fire Department', 'Victoria Fire Station', '0925 491 4746', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3843.2815924422853!2d120.6756298!3d15.5765967!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396cddb98cfadf5%3A0x5bb5c5fc27d7dd29!2sVictoria%20Fire%20Station!5e0!3m2!1sen!2sph!4v1734342531538!5m2!1sen!2sph');

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
  `URL from Google Maps` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `government_orgs`
--

INSERT INTO `government_orgs` (`Gov.Organization_ID`, `Municipality`, `Category`, `Institution`, `Contact Information`, `URL from Google Maps`) VALUES
(1, 'Tarlac City', 'Government Organization', 'Tarlac City Disaster Risk Reduction Management Office (CDRRMO)', '0926 755 4109', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3845.236581689623!2d120.59781769999998!3d15.4717015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396c73b0fc899af%3A0x2696bd9d71f7256c!2sTarlac%20City%20Disaster%20Risk%20Reduction%20Management%20Office%20(CDRRMO)!5e0!3m2!1sen!2sph!4v1734342589823!5m2!1sen!2sph'),
(2, 'Tarlac City', 'Government Organization', 'Tarlac Provincial Disaster Risk Reduction and Management Office (PDRRMO)', '0917 806 9276', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3845.287390438153!2d120.60454139999999!3d15.468966100000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396c705afbbb6bb%3A0x69c2aaa534536015!2sTarlac%20Provicial%20Disaster%20Risk%20Reduction%20and%20Management%20Office%20(PDRRMO)!5e0!3m2!1sen!2sph!4v1734342634180!5m2!1sen!2sph'),
(3, 'Anao', 'Government Organization', 'Anao Municipal Hall', '+63 (045) 606 0590', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3840.3989572578203!2d120.6265962!3d15.7300202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339133f3ed0f3dfd%3A0x28492fe88e978f59!2sAnao%20Municipal%20Hall!5e0!3m2!1sen!2sph!4v1734342652112!5m2!1sen!2sph'),
(4, 'Bamban', 'Government Organization', 'Bamban Municipal Hall', '+63 (045) 925-0050', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3848.599601181141!2d120.57029415!3d15.289615999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396eb06cc567f25%3A0xbd8c3680d02017ab!2sBamban%20Municipal%20Hall%2C%20Bamban%2C%20Tarlac!5e0!3m2!1sen!2sph!4v1734342673590!5m2!1sen!2sph'),
(5, 'Camiling', 'Government Organization', 'Camiling Municipal Hall', '+63 (04593) 40328', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30729.77945517651!2d120.3817235!3d15.6863414!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396b34842f5ed93%3A0xf5294017cad217a2!2sCamiling%20Municipal%20Hall!5e0!3m2!1sen!2sph!4v1734342690718!5m2!1sen!2sph'),
(6, 'Capas', 'Government Organization', 'Capas Municipal Hall', '+63 (045) 925 0154', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3847.556733258956!2d120.59287769999999!3d15.346305999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396c1c30d1af76d%3A0xc227cbdb202bd5f6!2sCapas%20Municipal%20Hall!5e0!3m2!1sen!2sph!4v1734342708393!5m2!1sen!2sph'),
(7, 'Gerona', 'Government Organization', 'Gerona Municipal Hall', '+63 (045) 608 0026', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3842.72200022475!2d120.59953809999998!3d15.606495099999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396cb950351d537%3A0xe81b88bf1ed836d9!2sGerona%20Municipal%20Hall!5e0!3m2!1sen!2sph!4v1734342725938!5m2!1sen!2sph'),
(8, 'La Paz', 'Government Organization', 'La Paz Municipal Hall', '+63 (045) 611 0620', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3845.8025882500438!2d120.72952049999999!3d15.4412026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396daded4151df3%3A0x76f65c3d9f4847ac!2sLa%20Paz%20Municipal%20Hall!5e0!3m2!1sen!2sph!4v1734342742709!5m2!1sen!2sph'),
(9, 'Mayantoc', 'Government Organization', 'Mayantoc Municipal Hall', '0917 514 2245', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3842.490518428105!2d120.37817339999998!3d15.6188466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396b22875f14fdf%3A0xf4635b3a33ecc9e7!2sMayantoc%20Municipal%20Hall!5e0!3m2!1sen!2sph!4v1734342757466!5m2!1sen!2sph'),
(10, 'Moncada', 'Government Organization', 'Moncada Town Hall', '+63 (045)606 5406', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3840.3405377720323!2d120.5685141!3d15.7331144!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339135b540207a51%3A0x528ea65fdedbe13a!2sMoncada%20Town%20Hall!5e0!3m2!1sen!2sph!4v1734342770949!5m2!1sen!2sph'),
(11, 'Paniqui', 'Government Organization', 'Paniqui Municipal Hall', '+63 (045) 606 6157', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3841.569175262013!2d120.57773359999999!3d15.6679139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396cb2ba77365b9%3A0x5151dec914fff063!2sPaniqui%20Municipal%20Hall!5e0!3m2!1sen!2sph!4v1734342792378!5m2!1sen!2sph'),
(12, 'Pura', 'Government Organization', 'Pura Municipal Hall', '+63 (045) 606 0243', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3842.3993047761187!2d120.647812!3d15.623711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396ccf3ed7f736f%3A0xeeb7a870d5ead9ad!2sPura%20Municipal%20Hall!5e0!3m2!1sen!2sph!4v1734342809779!5m2!1sen!2sph'),
(13, 'Ramos', 'Government Organization', 'Ramos Municipal Hall', '+63 (045) 491 7670', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3841.592713619898!2d120.63928664999999!3d15.666662200000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33913349636f3fb1%3A0x738029651e593ccd!2sRamos%20Municipal%20Hall%2C%20Ramos%2C%20Tarlac!5e0!3m2!1sen!2sph!4v1734342831891!5m2!1sen!2sph\://maps.app.goo.gl/nfLf71KndSnegrdC6'),
(14, 'San Clemente', 'Government Organization', 'San Clemente Municipal Hall', '+63 (045) 934 1200', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3840.733689254073!2d120.356281!3d15.7122796!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33914d4f31cb943f%3A0x7a4943cd4116f599!2sSan%20Clemente%20Municipal%20Hall!5e0!3m2!1sen!2sph!4v1734342852865!5m2!1sen!2sph'),
(15, 'San Jose', 'Government Organization', 'San Jose Municipal Hall', 'N/A', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3845.1277166391055!2d120.4636617!3d15.4775609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396b90a6b8785bb%3A0xcdc39262dc710f28!2sSan%20Jose%20Municipal%20Hall!5e0!3m2!1sen!2sph!4v1734342868728!5m2!1sen!2sph'),
(16, 'San Manuel', 'Government Organization', 'San Manuel Town Hall', '+63 (045) 606 0372', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d245701.64246399413!2d120.343455!3d15.7993046!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33913725da167623%3A0xa346bf188dd7c37!2sSan%20Manuel%20Town%20Hall!5e0!3m2!1sen!2sph!4v1734342886448!5m2!1sen!2sph'),
(17, 'Santa Ignacia', 'Government Organization', 'Sta. Ignacia Municipal Hall', '+63 (045) 606 3190', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3842.537616384402!2d120.43477290000001!3d15.616334300000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396b3f8893fffff%3A0x4ed5cef043201188!2sSta%20Ignacia%20Municipal%20Hall!5e0!3m2!1sen!2sph!4v1734342912732!5m2!1sen!2sph'),
(18, 'Victoria', 'Government Organization', 'Victoria Municipal Hall', '0919 076 5146', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3843.2950796973623!2d120.6814597!3d15.575875399999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396cdd966a7f4f5%3A0xa884e26f219c5ad6!2sVictoria%2C%20Tarlac%20Municipal%20Hall!5e0!3m2!1sen!2sph!4v1734342928550!5m2!1sen!2sph');

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
  `URL from Google Maps` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`Hospital_ID`, `Municipality`, `Category`, `Institution`, `Contact Information`, `URL from Google Maps`) VALUES
(1, 'Tarlac City', 'Hospital', 'Central Luzon Doctors Hospital', '+63(045) 925 2534', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3845.1185160583964!2d120.58739599999998!3d15.478055999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396c6464a90eb69%3A0x9c71e958e91bdd30!2sCentral%20Luzon%20Doctors&#39;%20Hospital%20(CLDH)!5e0!3m2!1sen!2sph!4v1734342982136!5m2!1sen!2sph'),
(2, 'Tarlac City', 'Hospital', 'Tarlac Medical Center', '+63 (045) 809 0050', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3845.2642365255106!2d120.5889951!3d15.4702127!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396c725bf8feb57%3A0xd2b49cbe2ec507fc!2sTarlac%20Medical%20Center!5e0!3m2!1sen!2sph!4v1734343000520!5m2!1sen!2sph'),
(3, 'Tarlac City', 'Hospital', 'Jecsons Medical Center', '+63 (45) 982 5501', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3844.875154952998!2d120.59739270000001!3d15.4911461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396c618732e9559%3A0x3dd80301565b3a7!2sJecsons%20Medical%20Center!5e0!3m2!1sen!2sph!4v1734343014437!5m2!1sen!2sph'),
(4, 'Tarlac City', 'Hospital', 'Ramos General Hospital', '+63 (45) 982 5415', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3844.875058238706!2d120.5948178!3d15.4911513!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396c63e9c2d4071%3A0x518aeb1a9159c146!2sRamos%20General%20Hospital!5e0!3m2!1sen!2sph!4v1734343033034!5m2!1sen!2sph'),
(5, 'Tarlac City', 'Hospital', 'Talon General Hospital', '+63 (45) 982 5415', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3844.873823268805!2d120.59190599999998!3d15.491217699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396c623549bb29f%3A0x8633a42602e8ecf9!2sTalon%20General%20Hospital!5e0!3m2!1sen!2sph!4v1734343050443!5m2!1sen!2sph'),
(6, 'Tarlac City', 'Hospital', 'Tarlac Provincial Hospital', '+63 (045) 491 8970', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3845.1749731052328!2d120.5865725!3d15.475017699999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396c7fc3a972c49%3A0xcaf4807a9e1a2384!2sTarlac%20Provincial%20Hospital%20(TPH)!5e0!3m2!1sen!2sph!4v1734343067078!5m2!1sen!2sph'),
(7, 'Tarlac City', 'Hospital', 'Loving Mother General Hospital', '+63 (045) 982 5644', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3844.8440615364966!2d120.59334869999999!3d15.4928178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396c62340414249%3A0x5245366b15dc8ec4!2sLoving%20Mother%20General%20Hospital%20%26%20Diagnostic%20Center!5e0!3m2!1sen!2sph!4v1734343083772!5m2!1sen!2sph'),
(8, 'Anao', 'Hospital', 'Anao Municipal Hall - Rural Health Unit', '+63 (045)493 2021', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3840.399640659116!2d120.62658579999999!3d15.729984000000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339133f3ed08454f%3A0xbf8b17f82c7ec93b!2sAnao%20Municipal%20Hall%20-%20Rural%20Health%20Unit!5e0!3m2!1sen!2sph!4v1734343105683!5m2!1sen!2sph'),
(9, 'Camiling', 'Hospital', 'Salvador General Hospital', '+63 (04593) 40312', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d245834.6628645649!2d120.1511692!3d15.6893062!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396b33140a4f0c9%3A0x6fd42e2cf8bd3fcf!2sSalvador%20General%20Hospital!5e0!3m2!1sen!2sph!4v1734343138484!5m2!1sen!2sph'),
(10, 'Camiling', 'Hospital', 'Gilberto O. Teodoro Memorial Hospital', '+63 (04593) 40310', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d245834.6628645649!2d120.1511692!3d15.6893062!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396b3a2ae904749%3A0x36a0431c8a004c0f!2sGilberto%20O.%20Teodoro%20Memorial%20Hospital%20-%20Camiling%20District%20Hospital!5e0!3m2!1sen!2sph!4v1734343163103!5m2!1sen!2sph'),
(11, 'Camiling', 'Hospital', 'Señor Sto Niño Hospital, Inc', '+63 (04593) 40803', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d245834.6628645649!2d120.1511692!3d15.6893062!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396b3334897146b%3A0xa6353d46b5e94a80!2sSe%C3%B1or%20Sto%20Ni%C3%B1o%20Hospital%2C%20Inc!5e0!3m2!1sen!2sph!4v1734343177664!5m2!1sen!2sph'),
(12, 'Capas', 'Hospital', 'Ospital Ning Capas', '+63 (045) 925 0154', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15390.27024084917!2d120.5758048!3d15.3457185!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339695f519455e77%3A0x4c5f33af6f6482bd!2sOspital%20Ning%20Capas!5e0!3m2!1sen!2sph!4v1734343196445!5m2!1sen!2sph'),
(13, 'Capas', 'Hospital', 'Capas Medical Center', '+63 (045) 925 5937', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15390.27024084917!2d120.5758048!3d15.3457185!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396c1c113561489%3A0x13a103609a9dd3a1!2sCapas%20Medical%20Center!5e0!3m2!1sen!2sph!4v1734343213219!5m2!1sen!2sph'),
(14, 'Capas', 'Hospital', 'Saint Andrea Maternity and General Hospital', '+63 (045)923 1864', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15391.115484169031!2d120.5728313!3d15.3342478!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396c1d8b7220d79%3A0xe5a9998108270ad2!2sSaint%20Andrea%20Maternity%20and%20General%20Hospital!5e0!3m2!1sen!2sph!4v1734343230916!5m2!1sen!2sph'),
(15, 'Concepcion', 'Hospital', 'Concepcion District Hospital', '+63 (045) 923 0852', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d246242.69829909265!2d120.3293322!3d15.3470967!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396c2746899f5ff%3A0xb3eaa30153d7ffd3!2sConcepcion%20District%20Hospital!5e0!3m2!1sen!2sph!4v1734343249908!5m2!1sen!2sph'),
(16, 'Concepcion', 'Hospital', 'M. Napeñas Multi Specialty Hospital', '+63 (045) 923 0819', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d246274.4781824554!2d120.3938833!3d15.3201307!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396e9d6e07e2369%3A0xae6370e07ca84a57!2sM.%20Nape%C3%B1as%20Multi%20Specialty%20Hospital!5e0!3m2!1sen!2sph!4v1734343284869!5m2!1sen!2sph'),
(17, 'Concepcion', 'Hospital', 'Immaculate Concepcion Polyclinic Hospital', '+63 (045) 923 0537', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d246274.4781824554!2d120.3938833!3d15.3201307!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396c2760ac9aac5%3A0xffa4a5c17a89c55!2sImmaculate%20Concepcion%20Polyclinic%20Hospital!5e0!3m2!1sen!2sph!4v1734343301954!5m2!1sen!2sph'),
(18, 'Concepcion', 'Hospital', 'Dr. Eutiquio Ll. Atanacio Jr. Memorial Hospital', '+63 (045) 923 0240', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d246274.4781824554!2d120.3938833!3d15.3201307!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396e9d86982b6f9%3A0xa8d5212022e89211!2sDr.%20Eutiquio%20Ll.%20Atanacio%20Jr.%20Memorial%20Hospital!5e0!3m2!1sen!2sph!4v1734343323883!5m2!1sen!2sph'),
(19, 'Gerona', 'Hospital', 'Gerona Hospital of the Sacred Heart', '+63 (04593) 10977', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15370.843960296956!2d120.602374!3d15.6070828!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396cb93d388902b%3A0xf912e7c102df12d8!2sGerona%20Hospital%20of%20the%20Sacred%20Heart!5e0!3m2!1sen!2sph!4v1734343408186!5m2!1sen!2sph'),
(20, 'Gerona', 'Hospital', 'Solano Medical Clinic And Laboratory', '0916 575 2875', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15370.938101955393!2d120.579969!3d15.6058265!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396cb953d663a51%3A0xe4a0554e908d91b7!2sSolano%20Medical%20Clinic%20And%20Laboratory!5e0!3m2!1sen!2sph!4v1734343426985!5m2!1sen!2sph'),
(21, 'Gerona', 'Hospital', 'Gerona Rural Health Unit I', '+63 (04593) 13355', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15370.938101955393!2d120.579969!3d15.6058265!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396cb95034f2591%3A0xcadf2c3be84f99c2!2sGerona%20Rural%20Health%20Unit%201!5e0!3m2!1sen!2sph!4v1734343445860!5m2!1sen!2sph'),
(22, 'Gerona', 'Hospital', 'Gerona Rural Health Unit II', '+63 (045) 491 5168', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15370.938101955393!2d120.579969!3d15.6058265!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396cbc11c29f9dd%3A0x53781951185a1070!2sGerona%20Rural%20Health%20Unit%20II!5e0!3m2!1sen!2sph!4v1734343460571!5m2!1sen!2sph'),
(23, 'La Paz', 'Hospital', 'La Paz Medicare & Community Hospital', '+63 (045) 606 0659', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15382.404674378668!2d120.6961769!3d15.4520627!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396dade15555555%3A0xf8b504a56d581ab3!2sLa%20Paz%20Medicare%20%26%20Community%20Hospital!5e0!3m2!1sen!2sph!4v1734343474170!5m2!1sen!2sph'),
(24, 'La Paz', 'Hospital', 'Eudoxia M. Padua Lying-In Clinic', '0932 774 3846', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15382.195213258434!2d120.6821584!3d15.4548849!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396c56dd5b93ca5%3A0x81e872a5141efd05!2sEudoxia%20M.%20Padua%20Lying-In%20Clinic!5e0!3m2!1sen!2sph!4v1734343489307!5m2!1sen!2sph'),
(25, 'Mayantoc', 'Hospital', 'Mayantoc Rural Health Unit', '+63 (045) 606 6265', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d491666.8381659946!2d119.8784394!3d15.6903382!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396b227d0ea414b%3A0xe26e3609b2e7eeb8!2sMayantoc%20Rural%20Health%20Unit!5e0!3m2!1sen!2sph!4v1734343506225!5m2!1sen!2sph'),
(26, 'Moncada', 'Hospital', 'Congressman Enrique Henry M. Cojuanco Memorial District Hospital\r\n', '0998 593 4277', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15362.087552724808!2d120.5638991!3d15.7235072!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33913520ebc8ae27%3A0x7a1d334879d48088!2sCongressman%20Enrique%20Henry%20M.%20Cojuanco%20Memorial%20District%20Hospital!5e0!3m2!1sen!2sph!4v1734343525308!5m2!1sen!2sph'),
(27, 'Moncada', 'Hospital', 'Moncada Medical Clinic', '+63 (045) 601 0455', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15361.427005702184!2d120.5558799!3d15.7322557!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339135b51835a027%3A0x2c03f3f7d7d30c8!2sMoncada%20Medical%20Clinic!5e0!3m2!1sen!2sph!4v1734343538860!5m2!1sen!2sph'),
(28, 'Moncada', 'Hospital', 'Cuchapin-Ramos Laboratory and Diagnostic Center', '+63 (045) 491 4415', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15361.35774776752!2d120.5564666!3d15.7331727!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339135ba14a70767%3A0x4432f2f0b5f281ee!2sCuchapin-Ramos%20Laboratory%20and%20Diagnostic%20Center!5e0!3m2!1sen!2sph!4v1734343555002!5m2!1sen!2sph'),
(29, 'Moncada', 'Hospital', 'Moncada RHU I', '+63 (045) 0606 1417', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15361.35774776752!2d120.5564666!3d15.7331727!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339135b56d48df03%3A0xe7a384b9390e1514!2sMoncada%20RHU%20(Rural%20Health%20Unit)!5e0!3m2!1sen!2sph!4v1734343568615!5m2!1sen!2sph'),
(30, 'Moncada', 'Hospital', 'Moncada RHU II', '+63 (045) 606 5031', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15361.35774776752!2d120.5564666!3d15.7331727!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3391342d723b668f%3A0x299cad509497b94e!2sMoncada%20RHU%20II!5e0!3m2!1sen!2sph!4v1734343587980!5m2!1sen!2sph'),
(31, 'Paniqui', 'Hospital', 'Rayos - Valentin Hospital', '+63 (04593) 10831', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d61463.83184066454!2d120.5163697!3d15.6721506!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339134d305602a8f%3A0xea1f4d220bb3faa!2sRayos%20-%20Valentin%20Hospital!5e0!3m2!1sen!2sph!4v1734343615630!5m2!1sen!2sph'),
(32, 'Paniqui', 'Hospital', 'Jowell General Hospital', '+63 (04593) 10050', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d61463.83184066454!2d120.5163697!3d15.6721506!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396caceeb15fc5d%3A0x5b7f5603580da572!2sJowell%20General%20Hospital!5e0!3m2!1sen!2sph!4v1734343634462!5m2!1sen!2sph'),
(33, 'Paniqui', 'Hospital', 'Paniqui General Hospital', '+63 (04593) 16088', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d61463.83184066454!2d120.5163697!3d15.6721506!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396cb3cabaa9f87%3A0x931654f39d588f35!2sPaniqui%20General%20Hospital!5e0!3m2!1sen!2sph!4v1734343673063!5m2!1sen!2sph'),
(34, 'Paniqui', 'Hospital', 'Galeon Multi-Specialty Clinic', '0992 705 5657', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d61463.83184066454!2d120.5163697!3d15.6721506!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3391358099ae8a8d%3A0xf0227a68b4ce8ce1!2sGaleon%20Multi-Specialty%20Clinic!5e0!3m2!1sen!2sph!4v1734343689050!5m2!1sen!2sph'),
(35, 'Paniqui', 'Hospital', 'Sing Medical Services', '+63 (04593) 13836', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d61463.83184066454!2d120.5163697!3d15.6721506!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339134d3274c455f%3A0x48f9d28316f351d4!2sSing%20Medical%20Services!5e0!3m2!1sen!2sph!4v1734343699851!5m2!1sen!2sph'),
(36, 'Pura', 'Hospital', 'Pura Health Center', '+63 (4593) 00495', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3842.398586492789!2d120.6484087!3d15.6237493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396cce519b83167%3A0x80981a86bfa766b4!2sPura%20Health%20Center!5e0!3m2!1sen!2sph!4v1734352394749!5m2!1sen!2sph'),
(37, 'Ramos', 'Hospital', 'Ramos General Hospital', '+63 (045) 493 2565', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3844.9897595854995!2d120.59311439999999!3d15.484982999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396c63e9c2d4071%3A0x518aeb1a9159c146!2sRamos%20General%20Hospital!5e0!3m2!1sen!2sph!4v1734352661614!5m2!1sen!2sph'),
(38, 'San Clemente', 'Hospital', 'Rural Health Unit - Municipality of San Clemente', '+63 (04593) 43475', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d491614.77393896115!2d119.8329165!3d15.7119226!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33914d4f31cc7597%3A0xba2b0eb8dd9a0612!2sRural%20Health%20Unit%20-%20Municipality%20of%20San%20Clemente!5e0!3m2!1sen!2sph!4v1734352675311!5m2!1sen!2sph'),
(39, 'San Jose', 'Hospital', 'San Jose Medical Clinic', '0975 114 8800', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d492207.48650045454!2d119.922978!3d15.4644644!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396b9eaa7936b75%3A0x8eb3a0859e78af31!2sSan%20Jose%20Medical%20Clinic!5e0!3m2!1sen!2sph!4v1734352689825!5m2!1sen!2sph'),
(40, 'San Manuel', 'Hospital', 'San Manuel Community Health Center', '+63 (045) 606 3156', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15356.353821907278!2d120.5916678!3d15.7992892!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396cfeea4b5f201%3A0xf1fe050d9bb6af9b!2sSan%20Manuel%20Community%20Health%20Center!5e0!3m2!1sen!2sph!4v1734352717216!5m2!1sen!2sph'),
(41, 'San Manuel', 'Hospital', 'Rural Health Unit - San Manuel, Tarlac', '+63 (0456) 063156', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15354.537007957315!2d120.5895799!3d15.823228!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339137afc933888d%3A0x423c33123b342eff!2sRural%20Health%20Unit%20-%20San%20Manuel%2C%20Tarlac!5e0!3m2!1sen!2sph!4v1734352729090!5m2!1sen!2sph'),
(42, 'Santa Ignacia', 'Hospital', 'SSNHI Medical Clinic (Señor Sto. Niño- Satellite Clinic)', '+63 (045) 934 0803', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d245921.64057831978!2d120.1719704!3d15.6169735!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396b3f8785b1783%3A0xfe7570b2b0cabeb3!2sSSNHI%20Medical%20Clinic%20(Se%C3%B1or%20Sto.%20Ni%C3%B1o-%20Satellite%20Clinic)!5e0!3m2!1sen!2sph!4v1734352742035!5m2!1sen!2sph'),
(43, 'Santa Ignacia', 'Hospital', 'Lady Irithel Lying-in Clinic', '0968 853 5186', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d245921.64057831978!2d120.1719704!3d15.6169735!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396b5fe6c0e9e25%3A0xccb6c9a542c48076!2sLADY%20IRITHEL%20LYING-IN%20CLINIC!5e0!3m2!1sen!2sph!4v1734352754714!5m2!1sen!2sph'),
(44, 'Santa Ignacia', 'Hospital', 'Leal Medical Clinic', '0926 009 8278', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d245921.64057831978!2d120.1719704!3d15.6169735!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396b31f9623584b%3A0x2a8308135f6e8c05!2sLeal%20Medical%20Clinic!5e0!3m2!1sen!2sph!4v1734352765947!5m2!1sen!2sph'),
(45, 'Victoria', 'Hospital', 'Victoria Rural Health Unit I', '+63 (045) 606 9907', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d245981.20965343833!2d120.3998219!3d15.5672454!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396ce8722000b39%3A0x48aba660ec256dca!2sVictoria%20Rural%20Health%20Unit%20I!5e0!3m2!1sen!2sph!4v1734352780037!5m2!1sen!2sph'),
(46, 'Bamban', 'Hospital', 'Bamban RHU', '0920 286 8880', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3848.782900297265!2d120.52100589999999!3d15.279630699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33969589170ba2f5%3A0x7a397b60d2f40f4a!2sBamban%20RHU!5e0!3m2!1sen!2sph!4v1734352792401!5m2!1sen!2sph');

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
  `URL from Google Maps` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `non_government_orgs`
--

INSERT INTO `non_government_orgs` (`NGO_ID`, `Municipality`, `Category`, `Institution`, `Contact Information`, `URL from Google Maps`) VALUES
(1, 'Tarlac City', 'Non-Governmental Organization', 'Philippine Red Cross Tarlac Chapter', '+63 (043)982 0318', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3845.0741872013896!2d120.58738319999999!3d15.480441200000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396c6478ecf8a71%3A0xaf50bb2308c0b32c!2sPhilippine%20Red%20Cross%20Tarlac%20Chapter!5e0!3m2!1sen!2sph!4v1734352844105!5m2!1sen!2sph'),
(2, 'Capas', 'Non-Governmental Organization', 'Aeta Ako, Pilipino Ako Inc.', '0917 875 0183', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3847.3868805379143!2d120.54406669999999!3d15.355519799999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396c189592ddc69%3A0xb7cb55e3ea26f86a!2sAeta%20Ako%2C%20Pilipino%20Ako%20Inc.!5e0!3m2!1sen!2sph!4v1734352856205!5m2!1sen!2sph');

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
  `URL from Google Maps` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `police_stations`
--

INSERT INTO `police_stations` (`Police_Station_ID`, `Municipality`, `Category`, `Institution`, `Contact Information`, `URL from Google Maps`) VALUES
(1, 'Tarlac City', 'Police Station', 'Tarlac Provincial Police Office - Camp General F. Macabulos', '+63 (045) 982-1972', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3845.2602374342327!2d120.58397810000001!3d15.470428000000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396c64feffa251d%3A0xd5dae16d4cc392e8!2sTarlac%20Provincial%20Police%20Office%20-%20Camp%20General%20F.%20Macabulos!5e0!3m2!1sen!2sph!4v1734352912489!5m2!1sen!2sph'),
(2, 'Tarlac City', 'Police Station', 'Police Station Tarlac', '0998 598 5494', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3844.963043990113!2d120.5891929!3d15.486419900000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396c747532af6c3%3A0x77b7c716ee65ff2b!2sPolice%20Station%20Tarlac!5e0!3m2!1sen!2sph!4v1734352926561!5m2!1sen!2sph'),
(3, 'Tarlac City', 'Police Station', 'Tarlac City Police Station - Police Community Precinct 1', '+63 (045) 982 2101', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3844.575680036209!2d120.5962369!3d15.507239699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396c8989a78cf67%3A0x1bed4c2de39aee5c!2sTarlac%20City%20Police%20Station%20-%20Police%20Community%20Precinct%201!5e0!3m2!1sen!2sph!4v1734352936359!5m2!1sen!2sph'),
(4, 'Tarlac City', 'Police Station', 'Tarlac City Police Station - Tarlac Community Precinct 2', '0915 708 3875', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3844.8627231870737!2d120.58985080000001!3d15.491814500000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396c63bda1725b7%3A0x3025879242d20502!2sTarlac%20City%20Police%20Station%20-%20Tarlac%20Community%20Precinct%202!5e0!3m2!1sen!2sph!4v1734352947018!5m2!1sen!2sph'),
(5, 'Tarlac City', 'Police Station', 'Tarlac City Police Station - Police Community Precinct 3', '0926 700 0150', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3845.01529043639!2d120.6108278!3d15.483609699999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396c60e6141c8cb%3A0x9476ccdc1aead6e8!2sTarlac%20City%20Police%20Station%20-%20Police%20Community%20Precint%203!5e0!3m2!1sen!2sph!4v1734352958135!5m2!1sen!2sph'),
(6, 'Tarlac City', 'Police Station', 'Tarlac City Police Station - Tarlac Community Precinct 4', '0929 814 5791', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3845.96567985802!2d120.59815030000001!3d15.432403599999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396c75386989b85%3A0xb6861ae5603f9462!2sTarlac%20City%20Police%20Station%20-%20Tarlac%20Community%20Precinct%204!5e0!3m2!1sen!2sph!4v1734352969550!5m2!1sen!2sph'),
(7, 'Tarlac City', 'Police Station', 'Tarlac City Police Station - Police Community Precinct 5', '+63 (045) 982 3987', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3844.988802112381!2d120.5700907!3d15.4850345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396c7f0e342b5ed%3A0xcad923acbf06af57!2sTarlac%20City%20Police%20Station%20-%20Police%20Community%20Precinct%205!5e0!3m2!1sen!2sph!4v1734352980754!5m2!1sen!2sph'),
(8, 'Tarlac City', 'Police Station', 'Tarlac City Police Station - Police Community Precinct 6', '0915 708 3979', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3844.8141944904846!2d120.58127169999997!3d15.494423399999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396c62e5dbb307b%3A0x832feee4f3514f78!2sTarlac%20City%20Police%20Station%20-%20Police%20Community%20Precinct%206!5e0!3m2!1sen!2sph!4v1734352993453!5m2!1sen!2sph'),
(9, 'Tarlac City', 'Police Station', 'Tarlac City Police Station - Police Community Precinct 7', '0961 278 3934', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3846.0221152227573!2d120.652619!3d15.4293577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396c53d4168d24f%3A0xb187e1e8d715a438!2sTarlac%20City%20Police%20Station%20-%20Police%20Community%20Precinct%207!5e0!3m2!1sen!2sph!4v1734353003433!5m2!1sen!2sph'),
(10, 'Tarlac City', 'Police Station', 'Tarlac City Police Station - Police Community Precinct 8', '0929 814 5791', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3845.1656253546034!2d120.59611009999999!3d15.475520800000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396c641e849a445%3A0xeacb4ab7fcb60d0d!2sTarlac%20City%20Police%20Station%20-%20Police%20Community%20Precinct%208!5e0!3m2!1sen!2sph!4v1734353012290!5m2!1sen!2sph'),
(11, 'Tarlac City', 'Police Station', 'Tarlac City Police Station - Police Community Precinct 9', '0915 708 4008', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3845.7849372606356!2d120.62985719999999!3d15.442154600000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396c54a14afbd73%3A0x9db2dca111e52b8b!2sTarlac%20City%20Police%20Station%20-%20Police%20Community%20Precinct%209!5e0!3m2!1sen!2sph!4v1734353022428!5m2!1sen!2sph'),
(12, 'Tarlac City', 'Police Station', 'Tarlac City Police Station - Police Community Precinct 10', '0915 708 4010', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3844.883420188199!2d120.66688089999998!3d15.490701699999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396cf00665a0bcd%3A0xb2b7c9d56d3a32d!2sTarlac%20City%20Police%20Station%20-%20Police%20Community%20Precinct%2010!5e0!3m2!1sen!2sph!4v1734353032764!5m2!1sen!2sph'),
(13, 'Anao', 'Police Station', 'Anao Municipal Police Station', '+63 (045) 800 7303', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3840.418182525769!2d120.62726199999999!3d15.7290018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339133f397f8f59b%3A0xa00b1c0c8dd3ef33!2sAnao%20Municipal%20Police%20Station!5e0!3m2!1sen!2sph!4v1734353043114!5m2!1sen!2sph'),
(14, 'Bamban', 'Police Station', 'Bamban Municipal Police Station', '0921 946 5239', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d61576.31060372782!2d120.4792617!3d15.2939823!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396ebebdacb0011%3A0x75beadae0d936a3c!2sNEW%20BAMBAN%20POLICE%20STATION!5e0!3m2!1sen!2sph!4v1734353052165!5m2!1sen!2sph'),
(15, 'Camiling', 'Police Station', 'Camiling Police Station', '+63 (04593) 40693', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3841.221313547036!2d120.41528299999999!3d15.686400800000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396b348418c89cf%3A0x57306ef9f3c91062!2sCamiling%20Police%20Station!5e0!3m2!1sen!2sph!4v1734353061544!5m2!1sen!2sph'),
(16, 'Capas', 'Police Station', 'Capas Police Station', '0975 646 6439', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3847.5459888355763!2d120.5889831!3d15.346889!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396c1c3a76ae05d%3A0x8f66545b2127ab78!2sCapas%20Police%20Station!5e0!3m2!1sen!2sph!4v1734353071527!5m2!1sen!2sph'),
(17, 'Concepcion', 'Police Station', 'Concepcion Police Station', '0917 847 5757', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d246274.62042455203!2d120.3938827!3d15.3200099!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396e9d7ec068629%3A0x4e5f1619ff470cb7!2sConcepcion%20Police%20Station!5e0!3m2!1sen!2sph!4v1734353081110!5m2!1sen!2sph'),
(18, 'Gerona', 'Police Station', 'Gerona Municipal Police Station', '0939 220 4252', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3842.7176988766537!2d120.595223!3d15.6067247!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396cb93a571c6b7%3A0x2e77ab584f10f779!2sGerona%20Municipal%20Police%20Station!5e0!3m2!1sen!2sph!4v1734353094172!5m2!1sen!2sph'),
(19, 'La Paz', 'Police Station', 'La Paz Municipal Police Station', '0998 598 5484', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30772.58158296259!2d120.6858945!3d15.3996111!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396db7c94e3d183%3A0x250048ced6c430db!2sPolice%20Station!5e0!3m2!1sen!2sph!4v1734353103992!5m2!1sen!2sph'),
(20, 'Mayantoc', 'Police Station', 'Mayantoc Police Station', '0998 598 5485', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3842.4869280846237!2d120.37846700000001!3d15.6190381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396b22875712129%3A0x73a0202b219032b4!2sPNP%20-%20Mayantoc%20Police%20Station!5e0!3m2!1sen!2sph!4v1734353115927!5m2!1sen!2sph'),
(21, 'Moncada', 'Police Station', 'Moncada Police Station', '0912 506 6937', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3840.335622714028!2d120.5719589!3d15.7333747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339135b515896ffb%3A0x74d060d9704c7105!2sMoncada%20Police%20Station!5e0!3m2!1sen!2sph!4v1734353160343!5m2!1sen!2sph'),
(22, 'Paniqui', 'Police Station', 'Paniqui Municipal Police Station', '0908 988 2818', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3841.578113547358!2d120.57747560000001!3d15.667438599999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396cb2be9057e0b%3A0x387936b5b1ae004e!2sPaniqui%20Municipal%20Police%20Station!5e0!3m2!1sen!2sph!4v1734353417381!5m2!1sen!2sph'),
(23, 'Pura', 'Police Station', 'PNP Pura Station', '+63 (045) 606 9837', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3842.394828136355!2d120.6437423!3d15.6239497!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396cd6b5186e821%3A0xf246fa6832ad425f!2sPNP%20Pura%20Station!5e0!3m2!1sen!2sph!4v1734353428144!5m2!1sen!2sph'),
(24, 'Ramos', 'Police Station', 'Ramos Municipal Police Station', '+63 (045) 491 7672', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3841.6042686898368!2d120.639568!3d15.666047700000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3391333855bd0629%3A0x13854bd97f65a04b!2sRamos%20Municipal%20Police%20Station!5e0!3m2!1sen!2sph!4v1734353438782!5m2!1sen!2sph'),
(25, 'San Clemente', 'Police Station', 'San Clemente Municipal Police Station', '+63 (04593) 40989', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3840.7278640376653!2d120.3607825!3d15.712588499999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33914d35c8ac1125%3A0x729beb9b8bff0760!2sSan%20Clemente%20Municipal%20Police%20Station!5e0!3m2!1sen!2sph!4v1734353450921!5m2!1sen!2sph'),
(26, 'San Jose', 'Police Station', 'San Jose Municipal Police Station', '0908 320 7076', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d61521.94386036065!2d120.3969521!3d15.4778959!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396bcc98720c383%3A0xc99ac3c0bdd89ad2!2sSan%20Jose%20Municipal%20Police%20Station!5e0!3m2!1sen!2sph!4v1734353460999!5m2!1sen!2sph'),
(27, 'San Manuel', 'Police Station', 'San Manuel Tarlac Police Station', '0999 805 2045 / 0956 966 2247', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15356.330873077144!2d120.5908325!3d15.7995918!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33913725760619cd%3A0x69458c4bb282e283!2sSan%20Manuel%20Tarlac%20Police%20Station!5e0!3m2!1sen!2sph!4v1734353471301!5m2!1sen!2sph'),
(28, 'Santa Ignacia', 'Police Station', 'Sta Ignacia Police Station', '0939 915 7849', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3842.542060904149!2d120.4362876!3d15.616097200000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396b3f887f5be31%3A0xb47be1007752ebe3!2sSta%20Ignacia%20Police%20Station!5e0!3m2!1sen!2sph!4v1734353483107!5m2!1sen!2sph'),
(29, 'Victoria', 'Police Station', 'Victoria Police Station', '+63 (045) 606 9808', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7686.067503706884!2d120.6820509!3d15.589845449999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396cdc72331b1e5%3A0xa855796a097c7c19!2sSan%20Nicolas%20(Pob.)%2C%20Victoria%2C%20Tarlac!5e0!3m2!1sen!2sph!4v1734353491525!5m2!1sen!2sph');

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
