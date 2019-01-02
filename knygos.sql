-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2019 at 10:53 PM
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
-- Database: `knygu_baze`
--

-- --------------------------------------------------------

--
-- Table structure for table `knygos`
--

CREATE TABLE `knygos` (
  `id` int(11) NOT NULL,
  `pavadinimas` varchar(50) COLLATE utf8_bin NOT NULL,
  `autorius` varchar(30) COLLATE utf8_bin NOT NULL,
  `kaina` decimal(10,2) NOT NULL,
  `puslapiu_sk` int(11) NOT NULL,
  `pridejimo_data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `knygos`
--

INSERT INTO `knygos` (`id`, `pavadinimas`, `autorius`, `kaina`, `puslapiu_sk`, `pridejimo_data`) VALUES
(1, 'haris poeteris', 'h. rowling', '9.99', 345, '2019-01-02 00:00:00'),
(2, 'gyvuliu ukis', 'roswlrsk', '8.99', 245, '2019-01-02 14:14:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `knygos`
--
ALTER TABLE `knygos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `knygos`
--
ALTER TABLE `knygos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
