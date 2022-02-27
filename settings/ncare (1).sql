-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 28, 2021 at 12:38 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ncare`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(11) NOT NULL,
  `ip_add` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(1, 'cosmetics'),
(2, 'bags'),
(3, 'accessories'),
(4, 'lace'),
(5, 'woodin'),
(6, 'gtp');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `invoice_no` int(255) NOT NULL,
  `Total_cost` int(20) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Name` varchar(20) CHARACTER SET armscii8 NOT NULL,
  `Phone` int(10) NOT NULL,
  `Email` varchar(255) CHARACTER SET armscii8 DEFAULT NULL,
  `City` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `Region` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `Street_Address` tinytext CHARACTER SET armscii8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `amt` double NOT NULL,
  `email` varchar(100) CHARACTER SET armscii8 NOT NULL,
  `order_id` int(11) NOT NULL,
  `currency` varchar(5) CHARACTER SET armscii8 NOT NULL DEFAULT 'GHS',
  `payment_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_email` varchar(50) CHARACTER SET armscii8 NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_contact` varchar(15) NOT NULL,
  `user_role` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_contact`, `user_role`) VALUES
(4, 'Lawrencia Cobbina', 'lawrenciacobbina3@gmail.com', '$2y$10$.m2PyPIszL1FiQGPfjjkn.AGDJ1NVUbNZobOg3.0Jf44HaR5HQbNS', '0261491282', 2),
(5, 'admin', 'admin@gmail.com', 'admin', '0261491282', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_cat` int(11) NOT NULL,
  `product_name` varchar(200) CHARACTER SET armscii8 NOT NULL,
  `product_price` double NOT NULL,
  `product_desc` varchar(500) CHARACTER SET armscii8 DEFAULT NULL,
  `product_image` varchar(100) CHARACTER SET armscii8 DEFAULT NULL,
  `product_keywords` varchar(100) CHARACTER SET armscii8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_name`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 6, 'Pink Ankara Fabric', 0.5, 'Pink Ankara Wax African Print, Red Kitenge African Fashion,African Fabric Supplier 6 yards Y 314_Fabric_', 'African Print 4.jpeg', 'ankara african print fabric'),
(2, 6, 'Blue African Print', 0.2, 'African Ankara Wax 100% Cotton Kitenge Dress Fabric _Pagnes_Tissues Africain_ Lapa_Chitenge DF 73_Fabric_', 'African Print 1.jpeg', 'african print ankara fabric'),
(3, 6, 'Yellow African Print', 0.5, 'Fashion African wax print fabric,Yellow Ankara cotton fabrics Batik wax kitenge fabric 6 yards whole LBL 105_wax print fabric_kitenge fabricafrican wax prints fabric ', 'African Print 2.jpeg', 'ankara african print fabric'),
(4, 6, 'Red African Print', 0.1, 'Exotic red African wax print fabric by the yard', 'African Print 5.jpeg', 'ankara african print fabric'),
(5, 6, 'Horse inspired African Print', 0.4, 'Fun Bibae Designed african print fabric sold by the yard', 'African Print 6.jpeg', 'ankara african print fabric'),
(6, 6, 'Sun Inspired African Print', 0.15, 'Latest african ankara print fabric White Ankara wax java print fabrics_kitenge_vitenge_lapa_Chitenge 6 yards  Y 330_Fabric_', 'African Print 3.jpeg', 'ankara african print fabric'),
(7, 2, 'Forever Clutch Bag', 2, 'Forever New cage clutch in pink marble ', 'bag1.jpeg', 'bag pink'),
(8, 2, 'Blue Clutch', 1, 'Light blue square clutch bag', 'bag2.jpeg', 'bag bags blue'),
(9, 2, 'Valentino Pink Clutch', 0.5, 'Valentino clutch bag in pink by Mario Valentino Divina fold-over clutch bag in pink ', 'bag3.jpeg', 'bag pink'),
(10, 2, 'Saint Laurent cassandra bag', 0.2, 'Saint Laurent CASSANDRA top handle Medium bag in grain de poudre embossed leather YSL532752B-cream', 'bag4.jpeg', 'bag bags white'),
(11, 4, 'Beautiful Red Lace', 0.5, 'Fancy Beaded Fabric Red - Embroidery Beads Mesh Fabric - Prom-Gown-Dress Sold By 2 Reathers', 'lace3.jpeg', 'lace red'),
(12, 4, 'Beautiful Black Lace', 0.1, '/home/lawrencia/Downloads/Beaded Fabric - Black - Embroidered Flower Lace Fabric with Beads On A Mesh Sold By The Yard.jpeg', 'lace1.jpeg', 'lace black'),
(13, 4, 'Ivory Beaded Lace', 0.4, 'Fancy Beaded Fabric Ivory - Embroidery Beads Mesh Fabric - Prom-Gown-Dress Sold By 2 Reathers', 'lace4.jpeg', 'lace white'),
(14, 4, 'Lavender Floral Lace ', 1, 'Lavander 3D Floral Design Embroider With Pearls On A Mesh Lace Dresses-Prom-Nightgown By Yard', 'lace2.jpeg', 'lavendar lace'),
(15, 5, 'Beautiful Brown Print Woodin Fabric', 0.4, 'African Fabric Bogolon de Woodin 6 Yards Classic Vlisco_Mudcloth Design', 'woodin1.jpeg', 'woodin fabric'),
(16, 5, 'BLue Print Woodin Fabric', 0.2, 'Ayinke Ankara Fusion', 'woodin2.jpeg', 'woodin'),
(17, 5, 'Exotic Woodin Print in Green', 0.5, 'Vlisco Wax Print Fabrics _ Vlisco Holland', 'woodin3.jpeg', 'woodin'),
(18, 3, 'White Beaded Necklace', 0.1, 'Double-sided Beaded Butterfly Necklace _ Etsy', 'bead3.jpeg', 'necklace bead accessories'),
(19, 3, 'Pearl White Butterfly Necklace', 0.12, 'White Pearl Butterfly Choker White Pretty Pearl Necklace _ Etsy', 'bead2.jpeg', 'bead necklace accessories'),
(20, 3, 'Butterfly Necklace', 0.1, 'Butterfly Pearl necklace in pink and blue', 'bead1.jpeg', 'necklace bead'),
(21, 6, 'Black and White African Print Fabric', 0.12, 'Black and White African Print Fabric for funerals and other occassions', 'white1.jpeg', 'white fabric black'),
(22, 6, 'Black and White African Print Fabric', 0.15, 'Black and White African Print Fabric for funerals', 'white2.jpeg', 'white funeral'),
(23, 6, 'Black and Red Fabric', 0.5, 'Black and Red funeral clothe for funeral occassions', 'black1.jpeg', 'black'),
(24, 6, 'Pure Black Funeral Fabric', 0.1, 'Ghanaian Balck FUneral Clothe for all your funeral occassions', 'black2.jpeg', 'black fabric'),
(30, 1, 'Dove Hydrating Care Body Wash', 0.12, 'This moisturising body wash combines NutriumMoisture with mild cleansers to help your skin retain its natural moisture, leaving you with softer, smoother skin after just one shower. The caring formula in this Dove body wash helps maintain your skins moisture barrier while delivering natural skin nourishment that goes deep into the surface layers of your skin. It creates a rich lather that replenishes your skins nutrients while also leaving it feeling cared for and clean. ', 'cos1.png', 'dove body wash bodywash shower gel showergel'),
(31, 1, 'Dove Restoring Body Wash, Coconut Butter and Cocoa Butter ', 0.1, 'This moisturising body wash combines NutriumMoisture with mild cleansers to help your skin retain its natural moisture, leaving you with softer, smoother skin after just one shower. The caring formula in this Dove body wash helps maintain your skins moisture barrier while delivering natural skin nourishment that goes deep into the surface layers of your skin. It creates a rich lather that replenishes your skins nutrients while also leaving it feeling cared for and clean. ', 'cos2.png', 'dove body wash bodywash shower gel showergel'),
(32, 1, 'Dove Nourishing Shea Butter Shower Gel 500ml', 0.2, 'This moisturising body wash combines NutriumMoisture with mild cleansers to help your skin retain its natural moisture, leaving you with softer, smoother skin after just one shower. The caring formula in this Dove body wash helps maintain your skins moisture barrier while delivering natural skin nourishment that goes deep into the surface layers of your skin. It creates a rich lather that replenishes your skins nutrients while also leaving it feeling cared for and clean. ', 'cos3.png', 'dove body wash bodywash shower gel showergel'),
(33, 1, 'Dove Pistachio Cream & Magnolia Shower Gel 500ml', 50, 'This moisturising body wash combines NutriumMoisture with mild cleansers to help your skin retain its natural moisture, leaving you with softer, smoother skin after just one shower. The caring formula in this Dove body wash helps maintain your skins moisture barrier while delivering natural skin nourishment that goes deep into the surface layers of your skin. It creates a rich lather that replenishes your skins nutrients while also leaving it feeling cared for and clean. ', 'cos4.png', 'dove body wash bodywash shower gel showergel'),
(34, 1, 'Dove Beauty Cream Bar', 0.2, 'This moisturising body wash combines NutriumMoisture with mild cleansers to help your skin retain its natural moisture, leaving you with softer, smoother skin after just one shower. The caring formula in this Dove body wash helps maintain your skins moisture barrier while delivering natural skin nourishment that goes deep into the surface layers of your skin. It creates a rich lather that replenishes your skins nutrients while also leaving it feeling cared for and clean. ', 'cos5.png', 'dove soap dovesoap coconut'),
(35, 1, 'Coco Channel', 200, ' An intense new facet of the COCO MADEMOISELLE personality emerges to forge a powerful, deep, addictive fragrance that is irresistible in every way. The warm, soft and feminine Amber accordan intoxicating blend of Tonka Bean and Vanilla from Madagascarwraps the scent in sensuality. ART OF PERFUMING: The Eau de Parfum Intense comes in a spray bottle for effortless application on skin or clothing. 3.4 oz. Made in France ', 'coco.png', 'coco channel cocochannel perfumes perfume'),
(36, 1, 'Channel No. 5', 350, 'Since its creation in 1921, N՛5 has exuded the very essence of femininity: An abstract, mysterious scent, alive with countless subtle facets, radiating an extravagant floral richness. In 1986, Jacques Polge, reinterpreted his predecessor Ernest Beaux\'s composition to create a fuller, more voluminous version of the now and forever women\'s fragrance: the Eau de Parfum.With its unprecedented use of aldehydes, which add layers of complexity, N՛5 was the world\'s first abstract fragrance. The Eau de P', 'channel.png', 'channel perfumes perfume'),
(37, 1, 'Nivea Pearl Beauty Deodorant Spray (150 ml)', 0.2, 'Nivea Pearl & Beauty spray anti-perspirant/deodorant keeps your underarms beautiful. It offers reliable all-day protection and a comfortably soft dryness, while its innovative formula with precious pearl extracts evens skintone, for underarms too lovely to hide.', 'spray1.png', 'spray nivea deodorant '),
(38, 1, 'Nivea Dry Fresh Anti-Perspirant Deodorant Spray', 50, 'Nivea Dry Fresh Anti-Perspirant Deodorant Spray keeps your underarms beautiful. It offers reliable all-day protection and a comfortably soft dryness, while its innovative formula with precious pearl extracts evens skintone, for underarms too lovely to hide.', 'spray2.png', 'spray nivea deodorant '),
(39, 1, 'NIVEA Men Invisible Black & White Deodorante Roll-on 50ml', 0.2, 'Nivea Black & white 50Ml roll-O | Nivea Invisible For Clear Roll-On Anti-Perspirant In Black & white Size 50Ml', 'sure.png', 'sure roll on deodorant');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `Person_Name` varchar(255) CHARACTER SET armscii8 DEFAULT NULL,
  `Product_Name` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `Mail` varchar(255) CHARACTER SET armscii8 DEFAULT NULL,
  `Rating` tinyint(1) NOT NULL,
  `Message` mediumtext CHARACTER SET armscii8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`Person_Name`, `Product_Name`, `Mail`, `Rating`, `Message`) VALUES
('Lawrencia Cobbina', 'Blue Clutch', 'lawrenciacobbina3@gmail.com', 1, 'haha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `customer_email` (`customer_email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_cat` (`product_cat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `people` (`customer_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `payment_ibfk_3` FOREIGN KEY (`email`) REFERENCES `people` (`customer_email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`product_cat`) REFERENCES `categories` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
