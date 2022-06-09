-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2022 at 09:46 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventreport`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `program` varchar(100) NOT NULL DEFAULT '-',
  `date` varchar(30) NOT NULL DEFAULT '-',
  `students` int(20) NOT NULL,
  `guest` varchar(100) NOT NULL,
  `organizedby` varchar(100) NOT NULL,
  `scheme` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `summary` varchar(500) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL,
  `image4` varchar(100) NOT NULL,
  `image5` varchar(100) NOT NULL,
  `image6` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `program`, `date`, `students`, `guest`, `organizedby`, `scheme`, `topic`, `summary`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`) VALUES
(51, 'Work shop', '2022-06-08', 22, 'pandy', 'BAC DEP', 'learn and lead', '22', '2', 'Annotation 2019-08-20 053540.png', '', '', '', '', ''),
(53, 'Roar Of The Lions', '2022-06-08', 30, 'Ms Dhoni', 'Chennai super kings', 'Comeback', 'how the over come from the bad season 2021 & 2022', 'Ms Dhoni delivered a speech about the hard time of csk', 'download.jpg', '', '', '', '', ''),
(54, 'Roar Of The Lions', '2022-06-08', 30, 'Ms dhoni', 'Chennai super kings', 'Comeback', 'how the over come from the bad season 2021 & 2022', 'Ms Dhoni delivered a speech about the hard time of csk', 'downloadcsk.jpg', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
