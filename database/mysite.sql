-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2022 at 01:25 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysite`
--

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` int(100) NOT NULL,
  `author` varchar(20) NOT NULL,
  `title` varchar(30) NOT NULL,
  `quote` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `author`, `title`, `quote`) VALUES
(3, 'Linkin Park', 'song: Leave out all the rest', 'when you&#039;re feeling empty, keep me in your memory and leave out all the rest.'),
(4, 'Tupac', '', 'Real eyes realize real lies.'),
(5, 'admin', '', 'The images are static but texts are dynamic.'),
(8, 'The Bible', 'Matthew 6:14', 'For if ye forgive men their trespasses, your heavenly father will also forgive you.'),
(9, 'Vir Das', 'said in a comedy event', 'They call it &quot;Learning by Heart&quot; but the ultimate goal of the education system is to replace your heart with a textbook so that you can never die. Because you never lived.'),
(10, 'Siccin', 'From Siccin 6, the movie', 'If you lit a light in the darkness, there will be a shadow. If you don&#039;t want the shadow to darken your heart, you have to turn towards the light.'),
(11, 'Paulo Coelho', 'From &#039;The Alchemist&#039;', 'The sheep spends its whole life fearing the wolf only to be eaten by the shepherd.'),
(12, 'The Platform', 'The Platform movie opening', 'There are three types of people. Those at the top, those at the bottom and those who fall.'),
(13, 'Jigsaw', 'By John Kramer in SAW VI', 'When faced with death, who should live and who will live are two entirely separate things.'),
(14, 'Linkin Park', 'song : Castle of Glass', 'I&#039;m only a crack in this castle of glass. Hardly anything else I need to be.'),
(15, 'admin', 'Welcome', 'A dynamic website. Github link in the footer.'),
(16, 'Friedrich Nietzsche', '', 'That which does not kill us makes us stronger.'),
(17, 'Auntie Mame', 'Auntie Mame movie 1958', 'Life is a banquet, and most poor suckers are starving to death!');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `author` varchar(30) NOT NULL,
  `title` varchar(30) NOT NULL,
  `quote` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
