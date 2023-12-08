-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 05:54 AM
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
-- Database: `cse309`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productPrice` decimal(10,2) NOT NULL,
  `productDetails` text DEFAULT NULL,
  `productImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productName`, `productPrice`, `productDetails`, `productImage`) VALUES
(1, 'Royal Gold Reserve', 2999.00, 'A premium collection of rare and exquisite honey varieties fit for royalty. Indulge in the richness of this golden elixir.', 'C:xampphtdocscse309/uploads/6571d6426eea1_a2.png'),
(2, 'Enchanted Forest Honey', 7890.00, 'A magical blend of forest floral nectars, this honey transports you to the heart of an enchanted woodland. ', 'C:xampphtdocscse309/uploads/6571d6cb9ea08_a1.png'),
(3, 'Golden Nectar Bliss', 7898.00, 'Pure, raw honey harvested from local, organic bee farms. Rich in flavor and packed with natural goodness.', 'C:xampphtdocscse309/uploads/6571d6fc0effe_a3.png'),
(4, 'Soothing Lavender Infusion', 1234.00, 'Infused with the calming essence of lavender, this honey offers a unique and relaxing twist to traditional sweetness.', 'C:xampphtdocscse309/uploads/6571d72ce1ab4_a1.png'),
(5, 'Honey Nuts', 5555.00, 'iidshfjgsfgsj', 'C:xampphtdocscse309/uploads/6571dae85d231_a1.png'),
(6, 'HoneyComb', 6754.00, 'ffgf', 'C:xampphtdocscse309/uploads/6571ebcd856f5_a3.png');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `password`, `is_admin`) VALUES
(1, 'Bijoy Saha', '2022210@iub.edu.bd', 'joy007', 1),
(2, 'Joy Saha ', 'joysaha2570@gmail.com', 'joy007', 0),
(3, 'Asif', '2044310@iub.edu.bbd', 'asif78', 0),
(4, 'Roton', '2094310@iub.edu.bbd', '67676', 0),
(5, 'Mehedi', '2020722@iub.edu.bd', '7u7', 0),
(6, 'Mehedi', 'abc@gmail.com', 'ijii', 0),
(7, 'Fahim', 'fahim.arf50@gmail.com', 'fahim123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
