-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 12:23 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `palsta_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `qauthor` varchar(50) NOT NULL,
  `qtext` text NOT NULL,
  `qpubdate` datetime NOT NULL,
  `questions_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `qauthor`, `qtext`, `qpubdate`, `questions_id`) VALUES
(37, 'denis', 'pizza', '2021-11-10 11:13:19', 23),
(38, 'denis', 'jäätelö', '2021-11-10 11:13:24', 23),
(39, 'denis', 'en tiiä itekkää', '2021-11-10 11:13:42', 22),
(40, 'denis', 'java', '2021-11-10 11:13:51', 24),
(41, 'denis', 'ruby', '2021-11-10 11:13:56', 24),
(42, 'denis', 'kotlin', '2021-11-10 11:14:03', 24),
(43, 'denis', 'js', '2021-11-10 11:14:11', 24);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `q_categorie_id` int(50) NOT NULL,
  `pubdate` datetime NOT NULL,
  `author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `title`, `text`, `q_categorie_id`, `pubdate`, `author`) VALUES
(21, 'Mikä on Java?', 'Kertokaa lyhyesti mitä meinaa &#39;Java&#39;', 1, '2021-11-10 11:10:44', 'denis'),
(22, 'Miten jalkapalloa pelataan?', 'Ei mitään hajua miten se tehdään', 2, '2021-11-10 11:11:26', 'denis'),
(23, 'Sun lempiruoka?', 'Kerro lempiruokasi muille', 3, '2021-11-10 11:11:52', 'denis'),
(24, 'Millä kielellä koodaat?', 'Itse käytän php', 1, '2021-11-10 11:12:30', 'denis'),
(25, 'Kissa vai koira?', 'Omasta mielestä kissa', 6, '2021-11-10 11:13:06', 'denis');

-- --------------------------------------------------------

--
-- Table structure for table `questions_categories`
--

CREATE TABLE `questions_categories` (
  `categorie_id` int(11) NOT NULL,
  `categorie_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions_categories`
--

INSERT INTO `questions_categories` (`categorie_id`, `categorie_name`) VALUES
(1, 'Ohjelmointi'),
(2, 'Urheilu'),
(3, 'Ruoka'),
(4, 'Terveys'),
(5, 'Pelit'),
(6, 'Lemmikit');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`) VALUES
(21, 'denis', '123@', 'b4fe9a59729f52374b249426c5afec43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `questions_categories`
--
ALTER TABLE `questions_categories`
  ADD PRIMARY KEY (`categorie_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `questions_categories`
--
ALTER TABLE `questions_categories`
  MODIFY `categorie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
