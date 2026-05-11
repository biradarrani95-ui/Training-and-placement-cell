-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2026 at 05:49 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tpsms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment_text` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `likes` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment_text`, `created_at`, `likes`) VALUES
(1, 'very Nice👍', '2026-01-05 08:08:54', 1),
(2, 'Excellence👌', '2026-01-05 08:27:43', 7),
(3, 'good', '2026-01-05 10:04:31', 3),
(4, 'hii rani', '2026-01-09 05:10:44', 0);

-- --------------------------------------------------------

--
-- Table structure for table `company_data`
--

CREATE TABLE `company_data` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `contact` varchar(60) NOT NULL,
  `website` varchar(70) NOT NULL,
  `cmp_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company_data`
--

INSERT INTO `company_data` (`id`, `Name`, `Address`, `Email`, `contact`, `website`, `cmp_status`) VALUES
(1, 'Wipro', 'hyderabad,Maharashtra', 'wipro@gmail.com', '9346344332', 'www.wipro.com', 0),
(2, 'Accenture', 'Benglore', 'Acc@gmail.com', '9364622455', 'www.Acc.net', 1),
(3, 'Amazon', 'Nagpur,Maharashtra', 'amazin@gmail.com', '9786544676', 'www.amazon.com', 1),
(4, 'Microsoft', 'Kolhapur,Maharashtra', 'micro@gmail.com', '976534674', 'www.micro.net', 1),
(5, 'Cognizant', 'Pune,Maharashtra', 'cognizant@gmail.com', '968754356', 'www.cognizant.com', 1),
(6, 'google', 'Latur', 'sh@gm.cm', '9498437325', 'www.google.com', 0),
(7, '', '', '', '93847902', 'www.deloitte.com', 0),
(8, 'TCS', 'Latur Ram Nagar', 'tcs@gmail.com', '976534674', 'www.cognizant.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `user_type` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `title`, `message`, `user_type`, `status`, `created_at`) VALUES
(1, 'TCS Hiring-Registration open', 'TCS is conducting an off-campus placement drive for 2024 graduates. Eligible student can now register. Last date:10 January 2026', 'student', 0, '2026-01-05 07:41:19'),
(2, 'Infosys off-campus drive', 'Infosys has Announced a mega recuritment drive for BCA/B.Tech student . Apply through the official infosys career  portal', 'student', 0, '2026-01-05 07:43:27'),
(3, 'Selected student list published', 'The final list of student selected for infosys campus Drive has been uploaded on the notice board. \r\nstudent are requested to check the list and report to the TPO office tomorrow at 10.30 AM', 'student', 0, '2026-01-05 16:04:27'),
(4, 'Aptitude test tomorrow', 'An Aptitude training will be conducted tomorrow at 11.00 AM in Lab-3. Attendence is compulsory for registered students.', 'student', 0, '2026-01-05 16:06:11');

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `course` varchar(50) NOT NULL,
  `Division` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `number` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_data`
--

INSERT INTO `student_data` (`id`, `Name`, `course`, `Division`, `Email`, `number`) VALUES
(1, 'Rani Patil', 'BCA(TY)', 'D', 'vanketpatil4@gmail.com', '9371581205'),
(2, 'Rani Biradar', 'BCA(TY)', 'D', 'biradarrani@gmail.com', '7387856957'),
(3, 'megha', 'BCA(TY)', 'D', 'vanketpatil4@gmail.com', '9371581205'),
(4, 'Rani', 'BCA(TY)', 'D', 'biradarrani@gmail.com', '7387856957'),
(5, 'prajakta', 'BCA(TY)', 'D', 'prajakta@gmail.com', '803747382'),
(6, 'poonam', 'BSC', 'A', 'poonam@gmail.com', '8530425617'),
(7, 'pratiksha', 'Traing', 'A', 'sh@gm.cm', '849836382'),
(8, 'pratiksha', 'bsc', 'A', 'aa@a.a', '9837493889');

-- --------------------------------------------------------

--
-- Table structure for table `student_tb`
--

CREATE TABLE `student_tb` (
  `id` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Course` varchar(60) NOT NULL,
  `username` varchar(70) NOT NULL,
  `password` varchar(10) NOT NULL,
  `std_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_tb`
--

INSERT INTO `student_tb` (`id`, `Name`, `Email`, `Course`, `username`, `password`, `std_status`) VALUES
(1, 'megha', 'vanketpatil4@gmail.com', 'BCA(TY)', 'megha', '1234', 1),
(2, 'megha', 'vanketpatil4@gmail.com', 'BCA(TY)', 'shinde', '1234', 1),
(3, 'shinde', 'sh@gm.cm', 'Traing', 'shinde', '1234', 1),
(4, 'poonam', 'poonam@gmail.com', 'BSC', 'poonam', '8530', 0),
(5, 'shinde', 'vanketpatil4@gmail.com', 'BCA(TY)', 'shinde', '12345', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_data`
--
ALTER TABLE `company_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_tb`
--
ALTER TABLE `job_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_data`
--
ALTER TABLE `student_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_tb`
--
ALTER TABLE `student_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `company_data`
--
ALTER TABLE `company_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `job_tb`
--
ALTER TABLE `job_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student_data`
--
ALTER TABLE `student_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `student_tb`
--
ALTER TABLE `student_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
