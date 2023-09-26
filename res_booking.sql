-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2023 at 12:42 PM
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
-- Database: `res_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_chair`
--

CREATE TABLE `booking_chair` (
  `id` int(11) NOT NULL,
  `booking_id` int(11) DEFAULT NULL,
  `chair_id` int(11) DEFAULT NULL,
  `chair_no` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `booking_chair`
--

INSERT INTO `booking_chair` (`id`, `booking_id`, `chair_id`, `chair_no`) VALUES
(1, 11, 38, 'TBL-4-1'),
(2, 12, 39, 'TBL-4-2');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `res_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `make_date` date NOT NULL,
  `make_time` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `booking_time` varchar(30) NOT NULL,
  `bill` float NOT NULL,
  `status` int(11) NOT NULL,
  `reject` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`id`, `booking_id`, `res_id`, `c_id`, `make_date`, `make_time`, `name`, `phone`, `booking_date`, `booking_time`, `bill`, `status`, `reject`) VALUES
(1, 12, 4, 8, '2023-05-08', '12:30:20pm', 'Jack', 987568978, '2023-05-09', '1:15:00pm', 970, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `booking_menus`
--

CREATE TABLE `booking_menus` (
  `id` int(11) NOT NULL,
  `booking_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `booking_menus`
--

INSERT INTO `booking_menus` (`id`, `booking_id`, `item_id`, `qty`) VALUES
(1, '11', 4, 2),
(2, '12', 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `cuisines`
--

CREATE TABLE `cuisines` (
  `id` int(12) NOT NULL,
  `cuisine_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cuisines`
--

INSERT INTO `cuisines` (`id`, `cuisine_name`) VALUES
(1, 'Chinese'),
(2, 'Italian'),
(3, 'Japanese'),
(4, 'Korean'),
(5, 'Nepali');

-- --------------------------------------------------------

--
-- Table structure for table `menu_item`
--

CREATE TABLE `menu_item` (
  `id` int(11) NOT NULL,
  `res_id` int(11) NOT NULL,
  `item_name` varchar(200) NOT NULL,
  `madeby` varchar(300) NOT NULL,
  `food_type` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu_item`
--

INSERT INTO `menu_item` (`id`, `res_id`, `item_name`, `madeby`, `food_type`, `price`, `image`) VALUES
(4, 1, 'Hotpot', 'Soup', 'non-veg', 800, 'pothot.jpg'),
(5, 2, 'Pizza', 'Cheese', 'non-veg', 750, 'pizza.jpg'),
(6, 3, 'Sushi', 'Fish', 'non-veg', 600, 'sushi.jpg'),
(7, 4, 'Kimchi jjigae', 'Kimchi', 'non-veg', 300, 'kimchi.jpg'),
(8, 5, 'Nepali khana set', 'Rice', 'dinner', 500, 'khana.jpg'),
(9,2, 'Tiramisu', 'Egg', 'dessert', 420, 'tiramisu.jpg'),
(10,3, 'Cheese cake', 'Cream Cheese', 'dessert', 450, 'cheesecake.jpg'),
(11,5, 'Coffee', 'Milk', 'drink', 180, 'coffee.jpg'),
(12,3, 'Coke', 'Carbonated Water', 'drink', 120, 'coke.jpg'),
(13,1, 'Mango shake', 'Mango', 'drink', 300, 'mango.jpg'),
(14,5, 'Momo', 'Meat', 'dinner', 200, 'momo.jpg'),
(15,1, 'Pork ribs', 'Pork', 'dinner', 950, 'ribs.jpg'),
(16,3, 'Tonkatsu', 'Chicken','dinner', 550, 'tonkatsu.jpg'),
(17,4, 'Peach tea', 'Peach', 'drink', 220, 'peach.jpg'),
(18,5, 'Chocochip icecream','Whipped cream', 'dessert', 200, 'chocochip.jpg').
(19,5, 'Juju dhau', 'Milk', 'dessert', 100, 'juju.jpg');



-- --------------------------------------------------------

--
-- Table structure for table `restaurant_chair`
--

CREATE TABLE `restaurant_chair` (
  `id` int(11) NOT NULL,
  `tbl_id` int(11) DEFAULT NULL,
  `chair_no` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `restaurant_chair`
--

INSERT INTO `restaurant_chair` (`id`, `tbl_id`, `chair_no`) VALUES
(1, 1, 'TBL-1-1'),
(2, 1, 'TBL-1-2'),
(3, 1, 'TBL-1-3'),
(4, 1, 'TBL-1-4'),
(5, 1, 'TBL-1-5'),
(6, 1, 'TBL-1-6'),
(7, 2, 'TBL-2-1'),
(8, 2, 'TBL-2-2'),
(9, 2, 'TBL-2-3'),
(10, 2, 'TBL-2-4'),
(11, 3, 'TBL-3-1'),
(12, 3, 'TBL-3-2'),
(13, 3, 'TBL-3-3'),
(14, 3, 'TBL-3-4'),
(15, 4, 'TBL-4-1'),
(16, 4, 'TBL-4-2'),
(17, 4, 'TBL-4-3'),
(18, 5, 'TBL-1-1'),
(19, 5, 'TBL-1-2'),
(20, 5, 'TBL-1-3'),
(21, 5, 'TBL-1-4'),
(22, 5, 'TBL-1-5'),
(23, 6, 'TBL-2-1'),
(24, 6, 'TBL-2-2'),
(25, 6, 'TBL-2-3'),
(26, 7, 'TBL-3-1'),
(27, 7, 'TBL-3-2'),
(28, 7, 'TBL-3-3'),
(29, 7, 'TBL-3-4'),
(30, 8, 'TBL-1-1'),
(31, 8, 'TBL-1-2'),
(32, 8, 'TBL-1-3'),
(33, 8, 'TBL-1-4'),
(34, 9, 'TBL-2-1'),
(35, 9, 'TBL-2-2'),
(36, 10, 'TBL-3-1'),
(37, 10, 'TBL-3-2'),
(38, 10, 'TBL-3-3'),
(39, 11, 'TBL-1-1'),
(40, 11, 'TBL-1-2'),
(41, 11, 'TBL-1-3'),
(42, 12, 'TBL-2-1'),
(43, 12, 'TBL-2-2'),
(44, 12, 'TBL-2-3'),
(45, 13, 'TBL-3-1'),
(46, 13, 'TBL-3-2'),
(47, 14, 'TBL-1-1'),
(48, 14, 'TBL-1-2'),
(49, 14, 'TBL-1-3'),
(50, 14, 'TBL-1-4'),
(51, 15, 'TBL-2-1'),
(52, 15, 'TBL-2-2'),
(53, 16, 'TBL-3-1'),
(54, 16, 'TBL-3-2');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_info`
--

CREATE TABLE `restaurant_info` (
  `id` int(11) NOT NULL,
  `restaurant_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `location` varchar(50) NOT NULL,
  `cuisine_id` int(11) NOT NULL,
  `logo` varchar(500) NOT NULL,
  `password` varchar(200) NOT NULL,
  `approve_status` int(11) NOT NULL,
  `role` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `restaurant_info`
--

INSERT INTO `restaurant_info` (`id`, `restaurant_name`, `email`, `phone`, `address`, `location`, 'cuisine_id' `logo`, `password`, `approve_status`, `role`) VALUES
(1, 'Peony Chinese Restaurant and Takeaway', 'peonychinese@gmail.com', 061547985, 'Gaurighat', 'Lakeside', 1, 'china.jpeg', '123', 0, 1),
(2, 'Festa Italiana', 'festaitaliana@gmail.com', 061587496, 'Baidam Road', 'Lakeside', 2, 'italia.jpg', '123', 0, 1),
(3, 'Luffy House', 'luffyhouse@gmail.com', 061547236, 'Pragati Marga', 'New Road', 3, 'luffy.jpg', '123', 0, 1),
(4, 'Daebak Dining', 'daebakdining@gmail.com', 061598756, 'Damside', 'Birauta', 4 ,'korea.jpg', '123', 0, 1),
(5, 'Nepali Delights', 'nepalidelights@gmail.com', 061458796, 'Shanti Marga', 'AmarSingh', 5,'nepal.jpg', '123', 0, 1),
(6, 'Nihao Kitchen', 'nihaokitchen@gmail.com', 061547736, 'Barahi Marga', 'Lakeside', 1, 'nihao.jpg', '123', 0, 1),
(7, 'Vittorio Spaghetti', 'vittorio@gmail.com', 061478956, 'Hallan Chowk', 'Lakeside', 2, 'vittorio.jpg', '123', 0, 1),
(8, 'Itadakimasu', 'itadakimasu@gmail.com', 061456723, 'Phewa Marga', 'Lakeside', 3, 'itadakimasu.jpg', '123', 0, 1),
(9, 'Kimbablicious', 'kimbablicious@gmail.com', 061582355, 'Bastola Thar', 'Mahendrapool', 4, 'kimbablicious.jpg', '123', 0, 1),
(10, 'Everest Bites', 'everestbites@gmail.com', 061489744, 'Dhikopatan', 'Lakeside', 5, 'everest.jpg', '123', 0, 1),
(11, 'Wang Wok', 'wangwok@gmail.com', 061478958, 'Gharipatan', 'Birauta', 1, 'wang.jpg', '123', 0, 1),
(12, 'Labella Cucina', 'labella@gmail.com', 061598867, 'Khahare', 'Lakeside', 2, 'labella.jpg', '123', 0, 1 ),
(13, 'Oishii Takoyaki', 'oishiitakoyaki@gmail.com', 061422356, 'Niva Galli', 'Chipledhunga', 3, 'oishii.jpg', '123', 0, 1),
(14, 'Michi Go', 'michigo@gmail.com', 061596624, 'Gairapatan', 'Chipledhunga', 4, 'michigo.jpg', '123', 0, 1),
(15, 'Gurkha Gourmet', 'gurkhagourmet@gmail.com', 061488523, 'Baidam Road', 'Lakeside', 5, 'gurkha.jpg', '123', 0, 1);
-- --------------------------------------------------------

--
-- Table structure for table `restaurant_tables`
--

CREATE TABLE `restaurant_tables` (
  `id` int(11) NOT NULL,
  `res_id` int(11) DEFAULT NULL,
  `table_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `restaurant_tables`
--

INSERT INTO `restaurant_tables` (`id`, `res_id`, `table_name`) VALUES
(1, 1, 'TBL-1'),
(2, 1, 'TBL-2'),
(3, 1, 'TBL-3'),
(4, 1, 'TBL-4'),
(5, 2, 'TBL-1'),
(6, 2, 'TBL-2'),
(7, 2, 'TBL-3'),
(8, 3, 'TBL-1'),
(9, 3, 'TBL-2');
(10, 3, 'TBL-3');
(11, 4, 'TBL-1');
(12, 4, 'TBL-2');
(13, 4, 'TBL-3');
(14, 5, 'TBL-1');
(15, 5, 'TBL-2');
(16, 5, 'TBL-3');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_chair`
--
ALTER TABLE `booking_chair`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_menus`
--
ALTER TABLE `booking_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant_chair`
--
ALTER TABLE `restaurant_chair`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant_tables`
--
ALTER TABLE `restaurant_tables`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_chair`
--
ALTER TABLE `booking_chair`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking_menus`
--
ALTER TABLE `booking_menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `restaurant_chair`
--
ALTER TABLE `restaurant_chair`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `restaurant_tables`
--
ALTER TABLE `restaurant_tables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;
 --
-- AUTO_INCREMENT for table `restaurant_info`
--
ALTER TABLE `restaurant_info`
ADD CONSTRAINT `fk_cuisine_id`
FOREIGN KEY (`cuisine_id`)
REFERENCES `cuisines` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
