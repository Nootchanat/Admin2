-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 20, 2022 at 04:51 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `name` varchar(255) NOT NULL,
  `Time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`name`, `Time`) VALUES
('C', '2022-03-27 23:37:02'),
('Calvin john placioBarangay papaya, Nasugbu,BatangasCisco network specialist Ulagain', '2022-03-27 23:37:15'),
('Rodelyn F pondare', '2022-03-27 23:46:17'),
('https://dione.batstate-u.edu.ph/student/backend/public/view/id_copy?jwt=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzY2hvb2x5ZWFyIjoiMjAyMS0yMDIyIiwic2VtZXN0ZXIiOiJTRUNPTkQiLCJzcmNvZGUiOiIxOC0yOTgwOCJ9.F9YaT0lKJUdtqWReGCHVm0QmoosW_gXKGWt3VP1OWsU', '2022-03-27 23:53:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `urole` varchar(255) NOT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `urole`, `create_at`) VALUES
(1, 'narongrit', 'supranon', '634259004@webmail.npru.ac.th', '$2y$10$4k6hkjjQjGtCpdIbkk1/mOaAMBwQdeQGTW21knmtEu8LJS/nteKAS', 'user', '2022-12-20 04:13:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
