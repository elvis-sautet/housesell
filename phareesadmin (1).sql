-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2020 at 03:20 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phareesadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Meritei', 'merinnick3@gmail.com', '$2y$10$zGiCJ3kXH4Ro1RZyQo07/OX93LTSwYjdckGvhBlU0oooYtCragtLC'),
(2, 'sautet', 'sautet@gmail.com', '$2y$10$mZYC8lLd0KJJSzhx1GgVc.9L2se3wilbdziAUUxvQ8HUY8umKDfGS'),
(3, 'sautet', 'mmtuts@gmail.com', '$2y$10$SnEA8WmWR8sBnj.If1QBceZP.fzt5ChV6jpDVoVAFKpmarhlkyIVi'),
(4, 'pharees', 'pharees@gmail.com', '$2y$10$YAt3sMHg2.zUAniuRhEZ9O/HFR2ZU4vVDXjvtGT0xSVvRHlMhUXhq');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(50) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'sautet', 'sautetelvis@zetech.ac.ke', 768692323, 'i really love creating websites'),
(2, 'Meritei', 'zetech@mail.com', 768692323, 'hello there alpine estates');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email`, `password`) VALUES
(1, 'sautetelvis', 'sautet@gmail.com', '$2y$10$WJliEKd4Stke9fAcHZHeH.FilXGQ/wSvjvZ8e98SMxtVXPclzivWm'),
(2, 'sami', 'sautet@gmail.com', '$2y$10$mSNlJS/Z20XdXC7c/l.bQOnEuQeCgt4sl/FdqTEFybumpPZiYiGvS'),
(3, 'pauline', 'pauline@gmail.com', '$2y$10$XrMzzEsse1POfzfY0TsGOeOA.bV6RdyHJO2y2jqOlonI8Y3bE85uS'),
(4, 'ihinya', 'ihinya@gmail.com', '$2y$10$BEtoG1f654Bhgx5b7QlJSuh5WW82UI/vYXnDf5E6dc7IdwTmSFt3m'),
(5, 'pharees', 'pharees@gmail.com', '$2y$10$XVlCpcT9F8n4qpGYF2JoCeU5WP26iIggS4cP4EBRAX3Cf6VHJX2gm'),
(6, 'sau', 'sautet@gmail.com', '$2y$10$gSTLRSa5.muvGtaRzOF1HuRyS8r9l.xcwZqL/hdZyaAla29KTarRC'),
(7, 'esamm', 'sautet@gmail.com', '$2y$10$8GRhqQ2I/5Vid6Ul4r1NFujQ55atzBEmf6AaVys2L4jfUqXEAXiN.'),
(8, 'lengete', 'lengete@gmail.com', '$2y$10$AIwZIELy9qGmvJDyeeQD8eqD7wVf2Xd5FFx.4OMsRr0xvdxhd5I2C'),
(9, 'samm', 'sam@gmail.com', '$2y$10$GfBtbp8wm76Il3I.gMrFuu.61WRGFkUvFO3zV8gmb4BiKq0xi1vq2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
