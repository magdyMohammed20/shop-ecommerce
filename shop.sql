-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2022 at 12:39 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`ID`, `Name`) VALUES
(37, 'أشجار الزينة الخارجية'),
(38, 'أشجار الزينة الداخلية');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `c_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `comment_date` date NOT NULL,
  `item_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `date`) VALUES
(6, 'sdvsv', 'ewfw', 'wefewf', '2022-01-05');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Adding_Date` date NOT NULL,
  `Image` varchar(255) DEFAULT 'layout/images/unknown.png',
  `Cat_Id` int(11) DEFAULT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_Id`, `Name`, `Description`, `Price`, `Adding_Date`, `Image`, `Cat_Id`, `type`) VALUES
(93, 'ثقلقثل', 'ثقلثقل', '355$', '2022-01-23', 'admin/image/91906104886133_modern-futuristic-sci-fi-background.jpg', 37, '2'),
(95, 'fewf', 'wefwe', '355$', '2022-01-25', 'admin/image/53584597847982_٢٠٢١٠٣٠٣_١٣٤٧٢٣.jpg', 37, '1'),
(96, 'wef', 'wefwefe', '355$', '2022-01-25', 'admin/image/78786667898255_602997d5-b3ac-4300-8961-6f33d541e860.jpg', 37, '1'),
(97, 'wefw', 'ergregr', '355$', '2022-01-25', 'admin/image/89068710443512_٢٠٢١٠٣٠٣_١٢٠٨١٧.jpg', 37, '1'),
(98, 'ewfw', 'ewfwe', '355$', '2022-01-25', 'admin/image/11758538427850_٢٠٢١٠٣٠٣_١٣٤٢١٩.jpg', 37, '1'),
(99, 'wef', 'wefwef', '355$', '2022-01-25', 'admin/image/84097039876554_9be36573-f4e1-46b0-a881-6bbfdc8007e6.jpg', 38, '1'),
(100, 'hkjhk', 'wefwef', '355$', '2022-01-25', 'admin/image/5099299744517_IMG-20191201-WA0000.jpg', 38, '2'),
(101, 'wefwef', 'wefwefw', '355$', '2022-01-25', 'admin/image/40607173242876_7Z1A0856.JPG', 38, '1'),
(102, 'wefewf', 'ewfwef', '355$', '2022-01-25', 'admin/image/70299431856569_1723392a-cc64-48b4-b18b-bff06418fbfc.jpg', 38, '1');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_Id` int(11) NOT NULL,
  `itemName` varchar(255) NOT NULL,
  `itemPrice` varchar(255) NOT NULL,
  `itemCustomer` varchar(255) NOT NULL,
  `OrderDate` date NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_Id`, `itemName`, `itemPrice`, `itemCustomer`, `OrderDate`, `quantity`, `total_price`) VALUES
(26, 'Mouse', '1000$', 'AhmedAdel2020', '2022-01-06', 10, 0),
(27, 'French Perfume', '150$', 'AhmedAdel2020', '2022-01-06', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_Id` int(11) NOT NULL,
  `user_Name` varchar(255) NOT NULL,
  `user_Password` varchar(255) NOT NULL,
  `user_Email` varchar(255) NOT NULL,
  `reg_status` int(11) NOT NULL DEFAULT 0,
  `whats` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `group_Id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_Id`, `user_Name`, `user_Password`, `user_Email`, `reg_status`, `whats`, `phone`, `country`, `group_Id`) VALUES
(1, 'Magdy Mohammed', 'Bfci5555', 'magdymohammed37@yahoo.com', 1, '', '', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `items_comment` (`item_id`),
  ADD KEY `items_comment_userId` (`user_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_Id`),
  ADD KEY `cat_1` (`Cat_Id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=230;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `items_comment` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `items_comment_userId` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `cat_1` FOREIGN KEY (`Cat_Id`) REFERENCES `categories` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
