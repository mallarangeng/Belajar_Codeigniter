-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2017 at 11:27 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agenda_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(3) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `nama`, `keterangan`) VALUES
(1, 'Belajar Framework', 'If you would like to get involved in helping to build the next version of CodeIgniter, join us on Github! A detailed contribution guide is in the User Guide, but the main points are to make sure your code conforms to our style guide, that it is properly documented, and that you use the Git-Flow branching model.\nIf you would like to get involved in helping to build the next version of CodeIgniter, join us on Github! A detailed contribution guide is in the User Guide, but the main points are to make sure your code conforms to our style guide, that it is properly documented, and that you use the Git-Flow branching model.\nIf you would like to get involved in helping to build the next version of CodeIgniter, join us on Github! A detailed contribution guide is in the User Guide, but the main points are to make sure your code conforms to our style guide, that it is properly documented, and that you use the Git-Flow branching model.\n'),
(2, 'Bootstrap Framework CSS', 'Bootstrap Framework CSS If you would like to get involved in helping to build the next version of CodeIgniter, join us on Github! A detailed contribution guide is in the User Guide, but the main points are to make sure your code conforms to our style guide, that it is properly documented, and that you use the Git-Flow branching model. If you would like to get involved in helping to build the next version of CodeIgniter, join us on Github! A detailed contribution guide is in the User Guide, but the main points are to make sure your code conforms to our style guide, that it is properly documented, and that you use the Git-Flow branching model. If you '),
(4, 'Welcome to CodeIgniter', 'CodeIgniter is an Application Development Framework - a toolkit - for people who build web sites using PHP. Its goal is to enable you to develop projects much faster than you could if you were writing code from scratch, by providing a rich set of libraries for commonly needed tasks, as well as a simple interface and logical structure to access these libraries. CodeIgniter lets you creatively focus on your project by minimizing the amount of code needed for a given task.\r\n\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
