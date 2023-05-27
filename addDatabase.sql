-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 27, 2023 at 07:48 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `howlr2`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `info` varchar(200) NOT NULL,
  `lat` float(10,6) DEFAULT NULL,
  `lng` float(10,6) DEFAULT NULL,
  `site` varchar(150) NOT NULL DEFAULT 'link.html',
  `htmlcss` int(1) DEFAULT NULL,
  `phpjs` int(1) DEFAULT NULL,
  `java` int(1) DEFAULT NULL,
  `c` int(1) DEFAULT NULL,
  `cpp` int(1) DEFAULT NULL,
  `pyth` int(1) DEFAULT NULL,
  `aiml` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `name`, `address`, `info`, `lat`, `lng`, `site`, `htmlcss`, `phpjs`, `java`, `c`, `cpp`, `pyth`, `aiml`) VALUES
(1, 'Avalon Tech', '3rd Main Road, BEML Layout, 5th Stage, Rajarajeshwari Nagar, Bengaluru, Karnataka 560098', 'We are hiring freshers in Fullstack Development. Skills: HTML,CSS,PHP,JS', 12.908173, 77.519554, '', 1, 1, 0, 0, 0, 0, 0),
(2, 'HyCubes', 'WGCQ+4FP, 13th A Cross Rd, Thimmarayagowda Layout, Ittamadu, Banashankari 3rd Stage, Banashankari, Bengaluru, Karnataka 560085', 'Looking for freshers with C/C++ skillset', 12.919383, 77.543411, '', 0, 0, 0, 1, 1, 0, 0),
(3, 'LogiMind', '#45, Ranga Rao Rd, Shankarapura, Bengaluru, Karnataka 560004', 'Ai/ML developers needed!', 12.952660, 77.568825, '', 0, 0, 0, 0, 0, 0, 1),
(4, 'SRT Solutions', 'Banashankari 6th Stage 1st Block, Bharath Housing Society Layout, Subramanyapura, Bengaluru, Karnataka 560061', 'Looking for proficient Python developers', 12.893966, 77.525398, '', 0, 0, 0, 0, 0, 1, 0),
(5, 'EZ Lyf', 'VG7H+XRG, VISL Layout, Talaghattapura, Bengaluru, Karnataka 560109', 'Freshers confident in Java', 12.864937, 77.529579, '', 0, 0, 1, 0, 0, 0, 0),
(6, 'Amity Tech', '98, Uttarahalli Main Rd, 5th Stage, Rajarajeshwari Nagar, Bengaluru, Karnataka 560098', 'Job opening for full stack developers! Skills:HTML/CSS,PHP/JS', 12.903369, 77.516861, '', 1, 1, 0, 0, 0, 0, 0),
(7, 'Sc solutions', 'near shanimathma temple, Channasandra, Rajarajeshwari Nagar, Bengaluru, Karnataka 560098', 'Full stack summer internship! Skills:HTML/CSS,PHP/JS', 12.899069, 77.522011, '', 1, 1, 0, 0, 0, 0, 0),
(8, 'Dev den', 'No.57, 2, Uttarahalli Main Rd, 5th Stage, Sunkalpalya, Bengaluru, Karnataka 560060', 'Mass hiring java developers! Skills: Java', 12.905928, 77.501511, '', 0, 0, 1, 0, 0, 0, 0),
(9, 'WebAi', 'WG37+J9, Uttarahalli Main Rd, Hemmigepura Ward 198, Srinivaspura, Bengaluru, Karnataka 560098', 'Hiring freshers who know their way around AI/ML! Skills: Python,AI/ML', 12.904000, 77.510216, '', 0, 0, 0, 0, 0, 1, 1),
(10, 'FronTech', '608, Jawaharlal Nehru Rd, BEML Layout, 5th Stage, Rajarajeshwari Nagar, Bengaluru, Karnataka 560098', 'Paid internship for students 10k stipend! Skills:C,Cpp', 12.907675, 77.521187, '', 0, 0, 0, 1, 1, 0, 0),
(11, 'Vitara Solutions', 'LAK VEN RESIDENCY, 5th Stage, Rajarajeshwari Nagar, Bengaluru, Karnataka 560098', 'Senior developer role open! Skills:C,Cpp,java', 12.903495, 77.519928, '', 0, 0, 1, 1, 1, 0, 0),
(12, 'Safari tech', 'Uttarahalli Main Rd, Channasandra, Srinivaspura, Bengaluru, Karnataka 560098', 'Hiring Front-end developers! SKills: HTML/CSS', 12.902927, 77.518120, '', 1, 0, 0, 0, 0, 0, 0),
(13, 'Camry', '78, Uttarahalli Main Rd, Channasandra, Rajarajeshwari Nagar, Bengaluru, Karnataka 560098', 'Hiring Back-end developers! SKills: PHP/JS', 12.903169, 77.516411, '', 0, 1, 0, 0, 0, 0, 0),
(14, 'Verna solutions', 'Shop No.6 Uttarahalli, TO, Kengeri Main Rd, Rajarajeshwari Nagar, Bengaluru, Karnataka 560061', 'Hiring fullstack and java developers! SKills: HTML/CSS/PHP/JS', 12.949088, 77.497231, '', 1, 1, 1, 0, 0, 0, 0),
(15, 'Virtus tech', 'WG2C+X6X, SUMUKA MEADOWS, Dr.Vishnuvardhan Rd, Channasandra, Rajarajeshwari Nagar, Bengaluru, Karnataka 560098', 'Hiring Javascript developers! SKills: PHP/JS', 12.899069, 77.522011, '', 0, 1, 0, 0, 0, 0, 0),
(16, 'GLA', 'Channasandra, Srinivaspura, Bengaluru, Karnataka 560098', 'Hiring Cpp developers! SKills: Cpp', 12.899069, 77.522011, '', 0, 0, 0, 0, 1, 0, 0),
(17, 'Horizon tech', '#190 BEML layout 10th Stage, Kengeri Main Rd, near Dominos Pizza, Channasandra, Uttarahalli Hobli, Bengaluru, Karnataka 560098', 'AI summer internship! SKills: AI/ML', 12.949088, 77.497231, '', 0, 0, 0, 0, 0, 0, 1),
(18, 'Polo tech solutions', 'WG37+J9, cross, Uttarahalli Main Rd, Srinivaspura, Bengaluru, Karnataka 560098', 'Hiring python developers! SKills: Python', 12.904083, 77.525780, '', 0, 0, 0, 0, 0, 1, 0),
(19, 'TroNiks', 'Poojar Estate 1st Cross, Uttarahalli Main Rd, Channasandra, Srinivaspura, Bengaluru, Karnataka 560098', 'Hiring interns with good knowledge in java! Skills: Java', 12.903686, 77.514435, '', 0, 0, 1, 0, 0, 0, 0),
(20, 'Tate Developers', '992, 3rd Main Road, 2nd Phase, 5th Stage, Rajarajeshwari Nagar, Bengaluru, Karnataka 560098', 'What color is your website? SKills required: HTML/CSS,PHP/JS', 12.907334, 77.515831, '', 1, 1, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `name`, `username`, `email`, `password`) VALUES
(2, 'Adithya', 'adithya211', 'adithyam211@gmail.com', 'password'),
(3, 'Akshay', 'Akshaypr', 'ap@gmail.com', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
