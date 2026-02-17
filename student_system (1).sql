-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2026 at 08:12 PM
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
-- Database: `student_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `student_number` varchar(20) DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `birth_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_number`, `full_name`, `email`, `department`, `phone`, `birth_date`) VALUES
(1, '1', 'musab', 'musab@gmail.com', 'SW', '0938450982', '2005-09-19'),
(2, '2', 'sameh', 'sameh@gmail.com', 'SW', '0961717248', '2006-04-26'),
(3, '4568', 'ali', 'ali@gmail.com', 'IT', '0916568911', '1998-12-14'),
(4, 'STU001', 'Mohamed Elamin', 'mohamed.elamin@nileuniversity.edu.sd', 'IT', '0929354112', '2006-12-04'),
(5, 'STU002', 'Aisha Abdelrahman', 'aisha.abdelrahman@nileuniversity.edu.sd', 'IT', '0948607958', '2005-09-02'),
(6, 'STU003', 'Ahmed Babikir', 'ahmed.babikir@nileuniversity.edu.sd', 'IT', '0929364230', '2008-09-03'),
(7, 'STU004', 'Rania Omer', 'rania.omer@nileuniversity.edu.sd', 'IT', '0930448785', '2000-04-29'),
(8, 'STU005', 'Yasir Mohamed Ahmed', 'yasir.mohamed@nileuniversity.edu.sd', 'IT', '0944248867', '2000-11-27'),
(9, 'STU006', 'Hala Hassan', 'hala.hassan@nileuniversity.edu.sd', 'IT', '0926689452', '1999-06-08'),
(10, 'STU007', 'Abdulrahman Musa', 'abdulrahman.musa@nileuniversity.edu.sd', 'IT', '0918859819', '1999-02-02'),
(11, 'STU008', 'Nada Othman', 'nada.othman@nileuniversity.edu.sd', 'IT', '0928131511', '2005-10-07'),
(12, 'STU009', 'Omer Salah', 'omer.salah@nileuniversity.edu.sd', 'IT', '0994760369', '2004-05-13'),
(13, 'STU010', 'Samah Ali', 'samah.ali@nileuniversity.edu.sd', 'IT', '0917263468', '2005-03-24'),
(14, 'STU011', 'Ismail Fadlallah', 'ismail.fadlallah@nileuniversity.edu.sd', 'IT', '0915162587', '2001-05-13'),
(15, 'STU012', 'Reem Khalid', 'reem.khalid@nileuniversity.edu.sd', 'IT', '0942717969', '2007-10-26'),
(16, 'STU013', 'Hisham Adam', 'hisham.adam@nileuniversity.edu.sd', 'IT', '0945178164', '2000-11-27'),
(17, 'STU014', 'Manal Ibrahim', 'manal.ibrahim@nileuniversity.edu.sd', 'IT', '0923923425', '2008-09-13'),
(18, 'STU015', 'Taha Elzubair', 'taha.elzubair@nileuniversity.edu.sd', 'IT', '0947941627', '1999-12-07'),
(19, 'STU016', 'Eman Ahmed', 'eman.ahmed@nileuniversity.edu.sd', 'IT', '0965580128', '2004-02-12'),
(20, 'STU017', 'Mazin Abdelaziz', 'mazin.abdelaziz@nileuniversity.edu.sd', 'IT', '0994547828', '1998-03-29'),
(21, 'STU018', 'Sahar Yousif', 'sahar.yousif@nileuniversity.edu.sd', 'IT', '0936187612', '2002-04-07'),
(22, 'STU019', 'Mustafa Idris', 'mustafa.idris@nileuniversity.edu.sd', 'IT', '0916634209', '2000-03-13'),
(23, 'STU020', 'Huda Elhassan', 'huda.elhassan@nileuniversity.edu.sd', 'IT', '0980361490', '2001-05-13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234'),
(2, 'musab', '12345'),
(3, 'admin9', '12345'),
(4, 'musab1', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
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
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
