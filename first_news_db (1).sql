-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2022 at 04:00 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `first_news_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_username`, `a_password`, `a_name`) VALUES
(1, 'nrm555', 'fcacf366e100ec0f419f6a2c3999047df8328a4c', 'Nərmin'),
(2, 'rza_dev', 'fcacf366e100ec0f419f6a2c3999047df8328a4c', 'Rza');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `n_id` int(11) NOT NULL,
  `n_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_descr` longtext COLLATE utf8_unicode_ci NOT NULL,
  `n_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `n_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_img_format` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_create_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_creater_id` int(255) NOT NULL,
  `n_update_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_updater_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`n_id`, `n_title`, `n_descr`, `n_date`, `n_category`, `n_status`, `n_img`, `n_img_format`, `n_create_date`, `n_creater_id`, `n_update_date`, `n_updater_id`) VALUES
(18, 'Delete ', 'Delete funksiyasini yazdiq.', '2022-08-11', 'Education', 'Active', 'eee25ff9145583288aa4fca43fa32cf7.jpg', '.jpg', '2022-08-11 17:25:59', 0, '', 0),
(20, 'Filarmoniya', 'Bu pdate sekilsizdir', '2022-08-11', 'Technology', 'Active', '44a65c359172d754eee69718b5c09bf5.jpg', '.jpg', '2022-08-15 17:20:37', 0, '', 0),
(22, 'asd asd', 'as das dasd asdas dsa d', '2022-08-15', 'Education', 'Active', '0211ea80db974c908ceabed847468b38.jpg', '.jpg', '2022-08-15 17:40:01', 0, '', 0),
(24, 'sd ad a', 'sd asda dsad as d', '2022-08-16', 'Sport', 'Active', '8bf809778c955aec3d10cb081a0352cd.jpg', '.jpg', '2022-08-15 17:42:51', 0, '', 0),
(25, 'sa dsd', 'a sdsa das d', '2022-08-15', 'Technology', 'Active', '', '', '2022-08-15 17:43:57', 0, '', 0),
(26, 'a sdsa ds d', 'asd SD ASD SAD aD as d', '2022-08-15', 'Sport', 'Active', '72e03db883404f0a83cc7f502a4c5c98.jpg', '.jpg', '2022-08-15 17:44:13', 0, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`n_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
