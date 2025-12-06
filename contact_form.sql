-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2025 at 07:05 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `phone`, `message`, `created_at`) VALUES
(1, 'JS HemanthRao', 'hemanthraojamena@gmail.com', '09121958459', ' Hello!!!', '2025-12-05 14:22:44'),
(2, 'JS HemanthRao', 'thirupathiraojs@gmail.com', '9121958459', 'lllllllllll', '2025-12-05 16:06:16'),
(3, 'trakshala', 'tudganitrakshala@gmail.com', '9246438935', 'HI!!!!!!!!!!!!!', '2025-12-06 03:47:37'),
(4, 'JS HemanthRao', 'trakshalatudgani@gmail.com', '09121958459', 'lklklkl', '2025-12-06 03:50:03'),
(5, 'JS HemanthRao', 'tudganitrakshala@gmail.com', '09121958459', 'Helloooo!!!!!!!!11', '2025-12-06 03:54:13'),
(6, 'JS HemanthRao', 'hemanthsure26@gmail.com', '09121958459', 'Helloo!!', '2025-12-06 04:33:59'),
(7, 'JS HemanthRao', 'hemanthraojamen@gmail', '09121958459', 'jkjgcgjk', '2025-12-06 04:36:56'),
(8, 'JS HemanthRao', 'hemanthraojamena@gmail', '09121958459', '98', '2025-12-06 04:46:29'),
(9, 'JS HemanthRao', 'hemanthraojamena@gmail', '09121958459', '98', '2025-12-06 04:49:08'),
(10, 'JS HemanthRao', 'hemanthraojamena@gmail', '09121958459', '98', '2025-12-06 04:49:12'),
(11, 'JS HemanthRao', 'hemanthraojamena@gmail', '09121958459', '85', '2025-12-06 04:49:35'),
(12, 'JS HemanthRao', 'hemanthraojamena@gmail', '09121958459', '85', '2025-12-06 04:51:16'),
(13, 'JS HemanthRao', 'hemanthraojamena@gmail', '09121958459', 'oitre', '2025-12-06 04:52:08'),
(14, 'JS HemanthRao', 'hemanthraojamena@gmail.com', '09121958459', 'o985', '2025-12-06 04:52:20'),
(15, 'JS HemanthRao', 'hemanthraojamena@gmail', '09121958459', '9854', '2025-12-06 04:56:14'),
(16, 'JS HemanthRao', 'hemanthraojamena@gmail', '09121958459', '9854', '2025-12-06 04:56:35'),
(17, 'JS HemanthRao', 'hemanthraojamena@gmail', '09121958459', '9854', '2025-12-06 04:56:44'),
(18, 'JS HemanthRao', 'hemanthraojamena@gmail', '09121958459', '985', '2025-12-06 05:05:55'),
(19, 'JS HemanthRao', 'hemanthraojamena@gmail', '09121958459', '98tre', '2025-12-06 05:06:05'),
(20, 'JS HemanthRao', 'hemanthraojamena@gmail', '09121958459', 'b iojn', '2025-12-06 05:07:50'),
(21, 'JS HemanthRao', 'hemanthraojamena@gmail', '09121958459', '0985', '2025-12-06 05:10:59'),
(22, 'JS HemanthRao', 'hemanthraojamena@gmail.com', '09121958459', '098re', '2025-12-06 05:11:25'),
(23, 'JS HemanthRao', 'hemanthraojamena@gmail.com', '09121958459', '098re', '2025-12-06 05:17:14'),
(24, 'JS HemanthRao', 'hemanthraojamena@gmail', '09121958459', '098re', '2025-12-06 05:17:33'),
(25, 'JS HemanthRao', 'hemanthraojamena@gmail', '09121958459', '098re', '2025-12-06 05:17:41'),
(26, 'JS HemanthRao', 'hemanthraojamena@gmail.c', '09121958459', '098re', '2025-12-06 05:17:47'),
(27, 'JS HemanthRao', 'hemanthraojamena@gmail.com', '09121958459', 'po98tr', '2025-12-06 05:20:58'),
(28, 'JS HemanthRao', 'hemanthraojamena@gm', '09121958459', '', '2025-12-06 05:25:00'),
(29, 'JS HemanthRao', 'hemanthraojamena@gm', '09121958459', '', '2025-12-06 05:26:04'),
(30, 'JS HemanthRao', 'hemanthraojamena@gmail.com', '09121958459', 'p098', '2025-12-06 05:28:38'),
(31, 'JAMENA SUTRAVE HEMANTH RAO', 'hemanthraojamena@gmail', '09121958459', '98', '2025-12-06 05:28:53'),
(32, 'JAMENA SUTRAVE HEMANTH RAO', 'hemanthraojamena@gmail', '09121958459', '98', '2025-12-06 05:29:48'),
(33, 'JAMENA SUTRAVE HEMANTH RAO', 'hemanthraojamena@gmail', '09121958459', '98', '2025-12-06 05:29:55'),
(34, 'JAMENA SUTRAVE HEMANTH RAO', 'hemanthraojamena@gmail', '09121958459', '98', '2025-12-06 05:30:02'),
(35, 'JS HemanthRao', 'hemanthraojamena@gmail.com', '09121958459', '098tr', '2025-12-06 05:30:12'),
(36, '', '', '09121958459', '', '2025-12-06 05:30:47'),
(37, '', '', '', '', '2025-12-06 05:30:48'),
(38, '', '', '', '', '2025-12-06 05:30:49'),
(39, '', '', '', '', '2025-12-06 05:30:49'),
(40, '', '', '', '', '2025-12-06 05:30:49'),
(41, '', '', '', '', '2025-12-06 05:30:50'),
(42, '', '', '', '', '2025-12-06 05:31:22'),
(43, '', '', '', '', '2025-12-06 05:36:30'),
(44, 'JS HemanthRao', 'hemanthraojamena@gmail', '09121958459', '8', '2025-12-06 05:36:42'),
(45, 'JS HemanthRao', 'hemanthraojamena@gmail.com', '9121958459', 'p098', '2025-12-06 05:42:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
