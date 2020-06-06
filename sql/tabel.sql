-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 06, 2020 at 01:19 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `retz`
--

-- --------------------------------------------------------

--
-- Table structure for table `retzz`
--

CREATE TABLE `retzz` (
  `id` int(21) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `skor` int(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `retzz`
--

INSERT INTO `retzz` (`id`, `nama`, `email`, `skor`) VALUES
(1, 'b', 'b@bb.com', -10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `retzz`
--
ALTER TABLE `retzz`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `retzz`
--
ALTER TABLE `retzz`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
