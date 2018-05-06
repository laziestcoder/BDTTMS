-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2017 at 04:56 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sust_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_comment`
--

CREATE TABLE `blog_comment` (
  `id` int(11) NOT NULL,
  `blog_comment` varchar(255) NOT NULL,
  `blog_post_id` int(5) NOT NULL,
  `blog_user_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_comment`
--

INSERT INTO `blog_comment` (`id`, `blog_comment`, `blog_post_id`, `blog_user_id`) VALUES
(2, 'dsdfsfefdef', 38, 1),
(3, 'sdfdfsdfs', 38, 1),
(4, 'sdsdfdfdf', 38, 1),
(5, 'zasas', 38, 1),
(6, 'sdsdsdsdsdsdsd', 38, 1),
(7, 'hello', 38, 1),
(8, 'hi how are u ????\r\n', 38, 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_like`
--

CREATE TABLE `blog_like` (
  `id` int(11) NOT NULL,
  `blog_like` int(5) NOT NULL DEFAULT '0',
  `blog_post_id` int(5) NOT NULL,
  `blog_user_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `mobileno` int(20) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `admin_category` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `active` int(2) NOT NULL DEFAULT '0',
  `admin_image` varchar(255) NOT NULL DEFAULT 'user.png',
  `cov_image` varchar(255) NOT NULL DEFAULT 'cover.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `fullname`, `admin_name`, `occupation`, `gender`, `admin_password`, `admin_email`, `mobileno`, `nationality`, `address`, `bio`, `admin_category`, `hash`, `active`, `admin_image`, `cov_image`) VALUES
(18, '', 'admin', '', '', 'adminTowfiq', 'iiucbees@gmail.com', 0, '', '', '', '', '', 1, 'user.png', 'cover.jpg'),
(26, '', 'Towfiq', '', '', 'qwerty', 'towfiq.106@gmail.com', 0, '', '', '', '', 'c9f0f895fb98ab9159f51fd0297e236d', 1, 'user.png', 'cover.jpg'),
(27, 'Kalyan Brata Chakraborty', 'amit', 'Student', 'Male', 'amitpassword', 'amitchakraborty147@gmail.com', 1712440471, 'Bangladeshi', 'Sylhet', 'don\'t know ;* ', '', 'cfcd208495d565ef66e7dff9f98764da', 1, '21df6d3071.JPG', 'cover.jpg'),
(28, '', 'irfanul', '', '', '101726', 'raws2030@gmail.com', 0, '', '', '', '', 'c4ca4238a0b923820dcc509a6f75849b', 1, 'user.png', 'cover.jpg'),
(31, '', 'tdrana', '', '', 'rana123', 'tanmoydhr@gmail.com', 0, '', '', '', '', '8f14e45fceea167a5a36dedd4bea2543', 1, 'user.png', 'cover.jpg'),
(32, 'Towfiqul Islam', 'laziestcoder', 'B.Sc in CSE', 'Male', 'asd', 'towfiq.shares@gmail.com', 1823923023, 'Bangladeshi', 'Chittagong , Bangladesh', 'No Bio.', '', '1679091c5a880faf6fb5e6087eb1b2dc', 1, '36fd77437d.jpg', 'cover.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id` int(11) NOT NULL,
  `blog_title` text CHARACTER SET utf8 NOT NULL,
  `blog_post` text CHARACTER SET utf8 NOT NULL,
  `blog_image` varchar(255) CHARACTER SET utf8 NOT NULL,
  `blog_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`id`, `blog_title`, `blog_post`, `blog_image`, `blog_user_id`) VALUES
(2, 'dfdfdfdf', 'dddddddddddddddddddddddddddddddddddfffffffffffffffffffffffdd fdfdf df df df d', '1f8098525e.jpg', 2),
(38, 'sdsd', 'sdsds sds d sdsdsd sd sds dsd sds ds dsdsedwd  r r', '81151d84b9.jpg, 278657a59a.jpg', 3),
(56, 'sust', '<p>hello sust</p>', 'Untitled-1 copy.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book`
--

CREATE TABLE `tbl_book` (
  `id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `number_of_room` int(3) NOT NULL,
  `number_of_persons` int(3) NOT NULL,
  `code` varchar(255) NOT NULL,
  `hotel_id` int(3) NOT NULL,
  `pending_info` varchar(3) NOT NULL,
  `confirm_booking` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_book`
--

INSERT INTO `tbl_book` (`id`, `user_email`, `room_type`, `number_of_room`, `number_of_persons`, `code`, `hotel_id`, `pending_info`, `confirm_booking`) VALUES
(9, 'amitchakraborty147@gmail.com', 'standard', 1, 2, '845418', 4, '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE `tbl_city` (
  `id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `city_description` text NOT NULL,
  `div_id` int(11) NOT NULL,
  `city_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`id`, `city_name`, `city_description`, `div_id`, `city_image`) VALUES
(5, 'Sylhet', 'Sylhet is a beautiful city. and we are here.', 16, '87a9ff7723.jpg'),
(6, 'Chittagong', 'Chittagong is a beautiful city', 14, '96b99f6253.jpg'),
(7, 'Khagracory', 'good', 12, '4d13d4d971.jpg'),
(8, 'Rangamati', 'beautiful place', 12, '6db183f6cd.jpg'),
(9, 'Sunamganj', 'beautiful city', 16, '10dd47c1ea.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_codegenerator`
--

CREATE TABLE `tbl_codegenerator` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `is_used` bit(3) NOT NULL,
  `hotel_id` int(3) NOT NULL,
  `transport_id` int(3) NOT NULL,
  `user_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `id` int(11) NOT NULL,
  `div_id` int(11) NOT NULL,
  `district_name` varchar(255) NOT NULL,
  `district_description` text NOT NULL,
  `district_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`id`, `div_id`, `district_name`, `district_description`, `district_image`) VALUES
(1, 15, 'Barguna', '', ''),
(2, 15, 'Barisal', '', ''),
(3, 15, 'Bhola', '', ''),
(4, 15, 'Jhalokati', '', ''),
(5, 15, 'Patuakhali', '', ''),
(6, 15, 'Pirojpur', '', ''),
(7, 12, 'Bandarban', '', ''),
(8, 12, 'Brahmanbaria', '', ''),
(9, 12, 'Chandpur', '', ''),
(10, 12, 'Chittagong', '', ''),
(11, 12, 'Comilla', '', ''),
(12, 12, 'Cox\'s Bazar', '', ''),
(13, 12, 'Feni', '', ''),
(14, 12, 'Khagrachhari', '', ''),
(15, 12, 'Lakshmipur', '', ''),
(16, 12, 'Noakhali', '', ''),
(17, 12, 'Rangamati', '', ''),
(18, 11, 'Dhaka', '', ''),
(19, 11, 'Faridpur', '', ''),
(20, 11, 'Gazipur', '', ''),
(21, 11, 'Gopalganj', '', ''),
(22, 11, 'Kishoreganj', '', ''),
(23, 11, 'Madaripur', '', ''),
(24, 11, 'Manikganj', '', ''),
(25, 11, 'Munshiganj', '', ''),
(26, 11, 'Narayanganj', '', ''),
(27, 11, 'Narsingdi', '', ''),
(28, 11, 'Rajbari', '', ''),
(29, 11, 'Shariatpur', '', ''),
(30, 11, 'Tangail', '', ''),
(31, 14, 'Bagerhat', '', ''),
(32, 14, 'Chuadanga', '', ''),
(33, 14, 'Jessore', '', ''),
(34, 14, 'Jhenaidah', '', ''),
(35, 14, 'Khulna', '', ''),
(36, 14, 'Kushtia', '', ''),
(37, 14, 'Magura', '', ''),
(38, 14, 'Meherpur', '', ''),
(39, 14, 'Narail', '', ''),
(40, 14, 'Satkhira', '', ''),
(41, 18, 'Jamalpur', '', ''),
(42, 18, 'Mymensingh', '', ''),
(43, 18, 'Netrakona', '', ''),
(44, 18, 'Sherpur', '', ''),
(45, 13, 'Bogra', '', ''),
(46, 13, 'Joypurhat', '', ''),
(47, 13, 'Naogaon', '', ''),
(48, 13, 'Natore', '', ''),
(49, 13, 'Chapainawabganj', '', ''),
(50, 13, 'Pabna', '', ''),
(51, 13, 'Rajshahi', '', ''),
(52, 13, 'Sirajgonj', '', ''),
(53, 17, 'Dinajpur', '', ''),
(54, 17, 'Gaibandha', '', ''),
(55, 17, 'Kurigram', '', ''),
(56, 17, 'Lalmonirhat', '', ''),
(57, 17, 'Nilphamari', '', ''),
(58, 17, 'Panchagarh', '', ''),
(59, 17, 'Rangpur', '', ''),
(60, 17, 'Thakurgaon', '', ''),
(61, 16, 'Habiganj', '', ''),
(62, 16, 'Moulvibazar', '', ''),
(63, 16, 'Sunamganj', '', ''),
(64, 16, 'Sylhet', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_division`
--

CREATE TABLE `tbl_division` (
  `id` int(11) NOT NULL,
  `div_name` varchar(255) NOT NULL,
  `div_description` text NOT NULL,
  `div_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_division`
--

INSERT INTO `tbl_division` (`id`, `div_name`, `div_description`, `div_image`) VALUES
(11, 'Dhaka', 'Dhaka is the capital city of Bangladesh, in southern Asia. Set beside the Buriganga River, itâ€™s at the center of national government, trade and culture. The 17th-century old city was the Mughal capital of Bengal, and many palaces and mosques remain. American architect Louis Khanâ€™s National Parliament House complex typifies the huge, fast-growing modern metropolis.\r\nLocal time: Saturday 12:16 AM\r\nDistrict: Dhaka District\r\nWeather: 84Â°F (29Â°C), Wind S at 0 mph (0 km/h), 82% Humidity\r\nPopulation: 8.906 million (2011)\r\nPostal code: 1000, 1100, 12xx, 13xx    ', '5e48217b09.jpg'),
(12, 'Chittagong', 'Chittagong is large port city on the southeastern coast of Bangladesh. The Ethnological Museum has exhibits about the many different ethnic tribes across the country. Zia Memorial Museum, inside the former Old Circuit House, displays items belonging to former president Ziaur Rahman, who was assassinated on the site in 1981. The landmark Chandanpura Mosque has many onion-shaped domes and brightly painted minarets.\r\nWeather: 83Â°F (28Â°C), Wind SW at 5 mph (8 km/h), 91% Humidity\r\nGranted city status: 1863\r\nPostal code: 4000, 4100, 42xx', 'a3f6b8e013.jpg'),
(13, 'Rajshahi', 'Rajshahi is a metropolitan city in Bangladesh and a major urban, commercial and educational centre of North Bengal. It is the administrative seat of Rajshahi Division and Rajshahi District. \r\nArea: 37.33 miÂ²\r\nElevation: 59â€²\r\nWeather: 83Â°F (28Â°C), Wind S at 3 mph (5 km/h), 87% Humidity\r\nLocal time: Saturday 12:22 AM\r\nPopulation: 763,952 (2011)', '92260605f4.jpg'),
(14, 'Khulna', 'Khulna is the third-largest city of Bangladesh. It is the administrative seat of Khulna District and Khulna Division. As of the 2011 census, the city has a population of 663,342. Khulna is an old river port located on the Rupsha River.\r\nCity Corporation: 6 August 1990\r\nDivision: Khulna Division\r\nMunicipal Corporation: 12 December 1984\r\nWeather: 82Â°F (28Â°C), Wind SW at 4 mph (6 km/h), 89% Humidity\r\nDistrict: Khulna District', '278657a59a.jpg'),
(15, 'Barishal', 'Barisal is a major city that lies on the bank of Kirtankhola river in south-central Bangladesh. It is the largest city and the administrative headquarter of both Barisal district and Barisal Division. Wikipedia\r\nArea: 6.32 miÂ²\r\nPostal code: 8200\r\nWeather: 82Â°F (28Â°C), Wind SW at 4 mph (6 km/h), 88% Humidity\r\nDistrict: Barisal District\r\nPopulation: 328,278 (2011)', 'f9ab5f962d.jpg'),
(16, 'Sylhet', 'Sylhet is a city in eastern Bangladesh, on the Surma River. Itâ€™s known for its Sufi shrines, like the ornate tomb and mosque of 14th-century saint Hazrat Shah Jalal, now a major pilgrimage site near Dargah Gate. The tiny Museum of Rajas contains belongings of the local folk poet Hasan Raja. A 3-domed gateway stands at the 17th-century Shahi Eidgah, a huge open-air hilltop mosque built by Emperor Aurangzeb.\r\nWeather: 82Â°F (28Â°C), Wind NE at 1 mph (2 km/h), 87% Humidity\r\nDistrict: Sylhet District', '2933cf01fd.jpg'),
(17, 'Rangpur', 'Rangpur is one of the major cities in Bangladesh and Rangpur Division. Rangpur was declared a district headquarters on 16 December 1769, and established as a municipality in 1869, making it one of the oldest municipalities in Bangladesh. Wikipedia\r\nWeather: 82Â°F (28Â°C), Wind S at 1 mph (2 km/h), 86% Humidity\r\nPostal code: 5400\r\nCity Corporation: 1 July 2012\r\nDivision: Rangpur Division\r\nDistrict: Rangpur District', 'ceff6ab065.jpg'),
(19, 'Mymensingh', 'Mymensingh is situated on the river Brahmaputra and is the headquarters of the Mymensingh District under Mymensingh Division of Bangladesh. Mymensingh city is located about 120 km north of Dhaka which is the capital of the country. \r\nDistrict: Mymensingh District\r\nWeather: 82Â°F (28Â°C), Wind NE at 1 mph (2 km/h), 87% Humidity\r\nPostal code: 2200\r\nDivision: Mymensingh Division\r\nCalling code: 091 ', 'f78d0af0af.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_place`
--

CREATE TABLE `tbl_place` (
  `id` int(11) NOT NULL,
  `place_name` varchar(255) NOT NULL,
  `place_description` text NOT NULL,
  `city_id` int(3) NOT NULL,
  `place_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_place`
--

INSERT INTO `tbl_place` (`id`, `place_name`, `place_description`, `city_id`, `place_image`) VALUES
(1, 'Jaflong', 'Jaflong is a beautiful place.', 5, '1f8098525e.jpg'),
(2, 'Lalakhal', 'Lalakhal is Almost so beautiful.', 5, 'b2e206c84e.jpg'),
(3, 'Potenga', 'Potenga is a sea beach', 6, '3d33634b49.jpg'),
(4, 'Ratargul', 'good place', 5, '759961d136.JPG'),
(5, 'Bichanakandi', 'awesome place', 6, '841af12834.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_plan`
--

CREATE TABLE `tbl_plan` (
  `id` int(11) NOT NULL,
  `from_city` varchar(255) NOT NULL,
  `destination_city` varchar(255) NOT NULL,
  `first_place` varchar(255) NOT NULL,
  `second_place` varchar(255) NOT NULL,
  `days` varchar(255) NOT NULL,
  `plan_description` text NOT NULL,
  `stay` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_plan`
--

INSERT INTO `tbl_plan` (`id`, `from_city`, `destination_city`, `first_place`, `second_place`, `days`, `plan_description`, `stay`) VALUES
(1, 'Chittagong', 'Sylhet', 'Jaflong', 'Lalakhal', '1st', 'go for a trip', 2),
(2, 'Chittagong', 'Sylhet', 'Bichanakandi', 'Ratargul', '2nd', 'quick', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registered_hotel`
--

CREATE TABLE `tbl_registered_hotel` (
  `id` int(11) NOT NULL,
  `hotel_name` varchar(255) NOT NULL,
  `hotel_admin_name` varchar(255) NOT NULL,
  `phone_number` int(20) NOT NULL,
  `hotel_email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hotel_location` text NOT NULL,
  `hotel_description` text NOT NULL,
  `city_id` int(11) NOT NULL,
  `hotel_image` varchar(255) NOT NULL,
  `pending_info` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_registered_hotel`
--

INSERT INTO `tbl_registered_hotel` (`id`, `hotel_name`, `hotel_admin_name`, `phone_number`, `hotel_email`, `password`, `hotel_location`, `hotel_description`, `city_id`, `hotel_image`, `pending_info`) VALUES
(1, 'Amiter Hotel', 'Amit', 2147483647, 'amit@mail.com', '123', 'asd', 'asd', 5, '5fadbce18d.jpg', '1'),
(2, 'saddddddd', 'sssssss', 2345678, 'irfan@mail.com', '123', 'asd', 'asd', 6, '858011e00d.jpg', '1'),
(4, 'Hotel Supreme', 'supreme', 123, 'supreme@gmail.com', '123', 'good', 'good', 5, 'b26ad4d4b1.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registered_transport`
--

CREATE TABLE `tbl_registered_transport` (
  `id` int(11) NOT NULL,
  `transport_email` varchar(255) NOT NULL,
  `transport_category` int(11) NOT NULL,
  `transport_description` text NOT NULL,
  `pending_info` bit(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_site_review`
--

CREATE TABLE `tbl_site_review` (
  `id` int(11) NOT NULL,
  `count_review` int(3) NOT NULL,
  `feedback` text NOT NULL,
  `user_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transport_category`
--

CREATE TABLE `tbl_transport_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `hash` varchar(255) NOT NULL,
  `active` int(2) NOT NULL DEFAULT '0',
  `user_image` varchar(255) NOT NULL DEFAULT 'pic.jpg',
  `cov_image` varchar(255) NOT NULL DEFAULT 'pic2.jpg',
  `bio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `fullname`, `occupation`, `gender`, `username`, `email`, `password`, `mobile_no`, `nationality`, `address`, `hash`, `active`, `user_image`, `cov_image`, `bio`) VALUES
(2, 'Towfiqul Islam', 'Student', 'Male', 'laziestcoder', 'towfiq.106@gmail.com', '12345', '+8801521487682', 'Bangladeshi', 'Chittagong , Bangladesh', 'c4ca4238a0b923820dcc509a6f75849b', 1, '2e590dda1c.JPG', '2e590dda1c.jpg', 'I am a quick learner.......!!!!!'),
(5, 'Kalyan Brata Chakraborty', '', 'Male', 'amit', 'amitchakraborty147@gmail.com', 'asd', '', '', '', '45c48cce2e2d7fbdea1afc51c7c6ad26', 1, 'cec4848211.JPG', 'cec4848211.JPG', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_comment`
--
ALTER TABLE `blog_comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_user_id` (`blog_user_id`),
  ADD KEY `blog_post_id` (`blog_post_id`),
  ADD KEY `blog_post_id_2` (`blog_post_id`),
  ADD KEY `blog_user_id_2` (`blog_user_id`),
  ADD KEY `blog_post_id_3` (`blog_post_id`);

--
-- Indexes for table `blog_like`
--
ALTER TABLE `blog_like`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_user_id` (`blog_user_id`),
  ADD KEY `blog_post_id` (`blog_post_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_name` (`admin_name`),
  ADD UNIQUE KEY `admin_email` (`admin_email`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_user_id` (`blog_user_id`);

--
-- Indexes for table `tbl_book`
--
ALTER TABLE `tbl_book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_id` (`hotel_id`);

--
-- Indexes for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD PRIMARY KEY (`id`),
  ADD KEY `div_id` (`div_id`);

--
-- Indexes for table `tbl_codegenerator`
--
ALTER TABLE `tbl_codegenerator`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_id` (`hotel_id`),
  ADD KEY `transport_id` (`transport_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_division`
--
ALTER TABLE `tbl_division`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_place`
--
ALTER TABLE `tbl_place`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `place_name` (`place_name`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `tbl_plan`
--
ALTER TABLE `tbl_plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_registered_hotel`
--
ALTER TABLE `tbl_registered_hotel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hotel_name` (`hotel_name`),
  ADD UNIQUE KEY `hotel_email` (`hotel_email`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `tbl_registered_transport`
--
ALTER TABLE `tbl_registered_transport`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `transport_email` (`transport_email`),
  ADD KEY `transport_category` (`transport_category`);

--
-- Indexes for table `tbl_site_review`
--
ALTER TABLE `tbl_site_review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_transport_category`
--
ALTER TABLE `tbl_transport_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_name` (`category_name`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_comment`
--
ALTER TABLE `blog_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `blog_like`
--
ALTER TABLE `blog_like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `tbl_book`
--
ALTER TABLE `tbl_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_codegenerator`
--
ALTER TABLE `tbl_codegenerator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `tbl_division`
--
ALTER TABLE `tbl_division`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tbl_place`
--
ALTER TABLE `tbl_place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_plan`
--
ALTER TABLE `tbl_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_registered_hotel`
--
ALTER TABLE `tbl_registered_hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_registered_transport`
--
ALTER TABLE `tbl_registered_transport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_site_review`
--
ALTER TABLE `tbl_site_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_transport_category`
--
ALTER TABLE `tbl_transport_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_book`
--
ALTER TABLE `tbl_book`
  ADD CONSTRAINT `tbl_book_ibfk_1` FOREIGN KEY (`hotel_id`) REFERENCES `tbl_registered_hotel` (`id`);

--
-- Constraints for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD CONSTRAINT `tbl_city_ibfk_1` FOREIGN KEY (`div_id`) REFERENCES `tbl_division` (`id`);

--
-- Constraints for table `tbl_codegenerator`
--
ALTER TABLE `tbl_codegenerator`
  ADD CONSTRAINT `tbl_codegenerator_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id`),
  ADD CONSTRAINT `tbl_codegenerator_ibfk_2` FOREIGN KEY (`hotel_id`) REFERENCES `tbl_registered_hotel` (`id`),
  ADD CONSTRAINT `tbl_codegenerator_ibfk_3` FOREIGN KEY (`transport_id`) REFERENCES `tbl_registered_transport` (`id`);

--
-- Constraints for table `tbl_place`
--
ALTER TABLE `tbl_place`
  ADD CONSTRAINT `tbl_place_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `tbl_city` (`id`);

--
-- Constraints for table `tbl_registered_hotel`
--
ALTER TABLE `tbl_registered_hotel`
  ADD CONSTRAINT `tbl_registered_hotel_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `tbl_city` (`id`);

--
-- Constraints for table `tbl_registered_transport`
--
ALTER TABLE `tbl_registered_transport`
  ADD CONSTRAINT `tbl_registered_transport_ibfk_1` FOREIGN KEY (`transport_category`) REFERENCES `tbl_transport_category` (`id`);

--
-- Constraints for table `tbl_site_review`
--
ALTER TABLE `tbl_site_review`
  ADD CONSTRAINT `tbl_site_review_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
