-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 20, 2021 at 10:09 AM
-- Server version: 5.7.23-23
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webcrei1_ayurvedamd`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` int(11) NOT NULL,
  `about_img` varchar(255) NOT NULL,
  `about_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `about_img`, `about_content`) VALUES
(3, 'images1/upload/ap-1.jpg', 'orem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit ame');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contact_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contact_id`, `full_name`, `mobile_number`, `email`, `message`) VALUES
(5, 'Sourabh', '8794562013', 'gajanandesai79@gmail.com', ' Hii');

-- --------------------------------------------------------

--
-- Table structure for table `counting`
--

CREATE TABLE `counting` (
  `count_id` int(11) NOT NULL,
  `happy_students` int(11) NOT NULL,
  `state_covered` int(11) NOT NULL,
  `universities` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `username`, `password`) VALUES
(1, 'ayurveda', 'Ayurveda@edu');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `portfolio_id` int(11) NOT NULL,
  `portfolio_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`portfolio_id`, `portfolio_img`) VALUES
(2, 'images1/upload/ab.jpg'),
(5, 'images1/upload/n2.jpg'),
(6, 'images1/upload/n3.jpg'),
(7, 'images1/upload/am1.jpg'),
(8, 'images1/upload/am2.jpg'),
(9, 'images1/upload/am3.jpg'),
(10, 'images1/upload/am4.jpg'),
(11, 'images1/upload/n1.jpg'),
(12, 'images1/upload/z-7.jpeg'),
(13, 'images1/upload/2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `reg_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `mobile_number` int(11) NOT NULL,
  `parents_number` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `sub_subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`reg_id`, `name`, `email`, `state`, `mobile_number`, `parents_number`, `subject`, `sub_subject`) VALUES
(1, 'maya patil', 'mayapatil1198@gmail.com', 'karanataka', 2147483647, 2147483647, 'shalya', '[\"prasooti & sthri-roga\",\"panchakarma\"]'),
(2, 'maya patil', 'mayapatil121198@gmail.com', 'karanataka', 2147483647, 2147483647, 'koumarbhritya', '[\"koumarbhritya\",\"panchakarma\"]'),
(3, 'Sangamesh swami', 'sangamesh.h7@gmail.com', 'KARNATAKA', 2147483647, 2147483647, 'panchakarma', '[\"kayachikitsa\",\"panchakarma\",\"shalya\"]'),
(4, 'maya patil', 'mayapatil121198@gmail.com', 'karanataka', 2147483647, 2147483647, 'kayachikitsa', '[\"kayachikitsa\",\"panchakarma\"]'),
(5, 'maya patil', 'mayapatil121198@gmail.com', 'karanataka', 2147483647, 2147483647, 'panchakarma', '[\"koumarbhritya\",\"panchakarma\"]'),
(6, 'maya patil', 'mayapatil121198@gmail.com', 'karanataka', 2147483647, 2147483647, 'kayachikitsa', '[\"koumarbhritya\",\"panchakarma\"]'),
(7, 'Sangamesh swami', 'sangamesh.h7@gmail.com', 'KARNATAKA', 2147483647, 2147483647, 'prasooti & sthri-roga', 'null'),
(8, 'KOMAL Patil', 'patilkomal07web@gmail.com', 'Karnataka', 2147483647, 2147483647, 'prasooti & sthri-roga', '[\"kayachikitsa\",\"panchakarma\"]'),
(9, 'KOMAL Patil', 'patilkomal07web@gmail.com', 'Karnataka', 2147483647, 2147483647, 'prasooti & sthri-roga', '[\"kayachikitsa\",\"panchakarma\"]'),
(10, 'Sangamesh swami Hiremath', 'sangamesh.h7@gmail.com', 'Karnataka', 2147483647, 2147483647, 'prasooti & sthri-roga', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `service_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `heading`, `content`, `service_img`) VALUES
(1, ' All private colleges seats bookingjj', 'we do admission in private and aided colleges only, for the\r\n                                booking all documents along with aiapgcet marks sheet ti be sent through e-mail,\r\n                                we process necessary information and will do all negotiation from your behalf after\r\n                                consulting with\r\n                                you and your parents about fees.', 'images1/upload/test.png'),
(2, 'Branch specific seat reservation even before entrance exam', 'There are many branches which are in high demand, you can reserve those seats in specific\r\n                                colleges, by paying initial token amount.(subjected qualifications in Aiapgcet)', 'images1/upload/online-booking.png'),
(3, 'Academic mentoring in all branches', 'We give necessary academic help for all branches, mentoring will be done by subject\r\n                                experts.', 'images1/upload/mortarboard.png'),
(4, 'Counselling will be given to choose branch/subject.', 'If students/parents confused about stream of branch to choose from, we offer counseling\r\n                                for them', 'images1/upload/conversation.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `counting`
--
ALTER TABLE `counting`
  ADD PRIMARY KEY (`count_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`portfolio_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `counting`
--
ALTER TABLE `counting`
  MODIFY `count_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `portfolio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
