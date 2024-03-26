-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2024 at 10:34 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvp_exercise`
--

-- --------------------------------------------------------

--
-- Table structure for table `cvp_exercise`
--

CREATE TABLE `cvp_exercise` (
  `productID` int(8) NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `stock_status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cvp_exercise`
--

INSERT INTO `cvp_exercise` (`productID`, `product_name`, `category`, `price`, `image`, `link`, `stock_status`) VALUES
(1, 'Sony BURANO 8k Camera', 'Camera', '21490.77', 'https://cdn.cvp.com/images/products/12-09-20231694528687burano-small.jpg', 'https://cvp.com/product/sony-burano-8k-camera', 'In Stock'),
(2, 'Sony FX6 Full-Frame Cinema Camera', 'Camera', '4582.00', 'https://cdn.cvp.com/images/products/altimage/19-10-20231697703589sony-fx6-2.jpg', 'https://cvp.com/product/sony-pxw-fx6', 'In Stock'),
(3, 'Blackmagic Cinema Camera 6K', 'Camera', '1815.00', 'https://cdn.cvp.com/images/products/altimage/14-09-20231694715131cinema-camera-6k.jpg', 'https://cvp.com/product/blackmagic-cinema-camera-6k-cinecam60klfl', 'In Stock'),
(4, 'Canon EOS C70 Cinema Camera', 'Camera', '3715.83', 'https://cdn.cvp.com/images/products/altimage/19-10-20231697703813canon-c70.jpg', 'https://cvp.com/product/canon-c70', 'Out of Stock'),
(5, 'Sony FX3 Full-Frame Cinema Camera', 'Camera', '3225.00', 'https://cdn.cvp.com/images/products/altimage/23-02-20211614094573sony-fx3-full-frame-cinema-line-camera-1.jpg', 'https://cvp.com/product/sony-ilme-fx3-full-frame-cinema-camera', 'Available for Backorder'),
(6, 'RED KOMODO 6K', 'Camera', '5100.00', 'https://cdn.cvp.com/images/products/altimage/13-10-20201602581490main-hero.jpg', 'https://cvp.com/product/red-komodo-6k-black', 'In Stock'),
(7, 'RED V-RAPTOR XL (X) 8K VV V-Lock', 'Camera', '38100.00', 'https://cdn.cvp.com/images/products/altimage/23-01-20241706006971710-0394.jpg', 'https://cvp.com/product/red-v-raptor-xl-x-8k-vv-v-lock-710-0394', 'Out of Stock'),
(8, 'IRON GLASS Rehoused MKII 6 Lens Set - PL', 'Lens', '15600.00', 'https://cdn.cvp.com/images/products/altimage/09-02-20241707478967ig-mk2-6h-main.jpg', 'https://cvp.com/product/iron-glass-rehoused-mkii-6-lens-set-pl-ig-mk2-6h', 'Out of Stock'),
(9, 'Laowa Pro2be 24mm T8 2X Probe Lens Set - PL', 'Lens', '6749.17', 'https://cdn.cvp.com/images/products/altimage/28-07-20231690549853ve2480plb.jpg', 'https://cvp.com/product/laowa-pro2be-24mm-t8-2x-probe-lens-set-pl', 'In Stock');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cvp_exercise`
--
ALTER TABLE `cvp_exercise`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cvp_exercise`
--
ALTER TABLE `cvp_exercise`
  MODIFY `productID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
