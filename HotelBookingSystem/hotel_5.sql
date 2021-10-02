-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2017 at 05:27 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_5`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(5) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `details` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `image`, `details`) VALUES
(1, 'test12', '13466520_961337613965287_6688682665605971011_n.jpg', '  <h2>About Us</h2>\r\n                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat.</p>\r\n                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet. Odit, temporibus reprehenderit dolorum!</p>\r\n                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis?</p>\r\n            </div>');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `checkin_date` varchar(100) NOT NULL,
  `adults` int(10) NOT NULL,
  `childrens` varchar(255) NOT NULL,
  `nights` int(10) NOT NULL,
  `place` varchar(100) NOT NULL,
  `hotel_id` int(200) NOT NULL,
  `package_id` int(10) NOT NULL,
  `cnic` varchar(255) NOT NULL,
  `vehicle_id` int(10) NOT NULL,
  `total_price` int(100) NOT NULL,
  `comments` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(5) NOT NULL,
  `map` longtext NOT NULL,
  `contact` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `map`, `contact`) VALUES
(1, '       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3398.0915955543396!2d74.5668395145611!3d31.603949850173592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39191297c4cb2bdd%3A0x43e1b0a2c6767fb2!2sPTDC+Motel!5e0!3m2!1sen!2s!4v1485513113640" width="100%" height="451" frameborder="0" style="border:0" allowfullscreen></iframe>', ' <p>\r\n                    00-A, Gulberg, Lahore.<br>\r\n                </p>\r\n                <p><i class="fa fa-phone"></i> \r\n                    <abbr title="Phone">P</abbr>: +92-345-0000000</p>\r\n                <p><i class="fa fa-envelope-o"></i> \r\n                    <abbr title="Email">E</abbr>: <a href="mailto:name@example.com">name@example.com</a>\r\n                </p>\r\n                <p><i class="fa fa-clock-o"></i> \r\n                    <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>');

-- --------------------------------------------------------

--
-- Table structure for table `global_settings`
--

CREATE TABLE `global_settings` (
  `id` int(5) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `about_footer` longtext NOT NULL,
  `contact_footer` longtext NOT NULL,
  `copyright` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `global_settings`
--

INSERT INTO `global_settings` (`id`, `logo`, `about_footer`, `contact_footer`, `copyright`) VALUES
(1, 'logo.png', ' <h2>About Us</h2>\r\n        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.654652</p>', ' <h3>Contact Details</h3>\r\n                <p>\r\n                  <i class="fa fa-map-marker"></i>   48-A, Gulberg, Lahore.<br>\r\n                </p>\r\n                <p><i class="fa fa-phone"></i> \r\n                    +92-345-0000000</p>\r\n                <p><i class="fa fa-envelope-o"></i> \r\n                    <a href="mailto:name@example.com">name@example.com</a>\r\n                </p>\r\n                <p><i class="fa fa-clock-o"></i> \r\n                    Monday - Friday: 9:00 AM to 6:00 PM</p>\r\n        ', 'Copyright Â© Travel Diaries 2017 - Designed by Laraib');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `hotel_id` int(5) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `slider` tinyint(1) NOT NULL,
  `place_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`hotel_id`, `title`, `image`, `slider`, `place_id`) VALUES
(26, 'PC Hotel', 'download (6).jpg', 1, 23),
(27, 'Ramada Hotel', 'download (7).jpg', 1, 22),
(28, 'Karachi Marriott Hotel', 'download (9).jpg', 1, 26),
(29, 'The Leon Hotel', 'images (10).jpg', 1, 25),
(30, 'Marvel Hotel', 'download (10).jpg', 1, 27),
(31, 'The Pierre, The Taj Hotel ', 'images (11).jpg', 0, 24);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `package_id` int(5) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `hotel_id` int(5) NOT NULL,
  `details` longtext NOT NULL,
  `price` varchar(200) NOT NULL,
  `feature` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`package_id`, `title`, `image`, `hotel_id`, `details`, `price`, `feature`) VALUES
(7, 'Pearl Continental Hotel Karachi', '1493812842download (6).jpg', 26, '<span class="cr_review_quote left" style="padding: 0px 2px 0px 0px; color: rgb(0, 53, 128); font-family: BlinkMacSystemFont, -apple-system, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif; font-size: small; background-color: rgb(255, 255, 255);">â€œ</span><span style="color: rgb(0, 53, 128); font-family: BlinkMacSystemFont, -apple-system, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif; font-size: small; background-color: rgb(255, 255, 255);">Great reception. Everyone is so nice. The hotel has its own security team. The checking procedures are trustworthy. . BBQ is great. Close to airport. Great time in Ramada</span><span class="cr_review_quote right" style="padding: 0px 0px 0px 2px; color: rgb(0, 53, 128); font-family: BlinkMacSystemFont, -apple-system, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif; font-size: small; background-color: rgb(255, 255, 255);">â€</span>', '10000', 1),
(8, 'Marrioutt Hotel Karachi', '1493812904download (8).jpg', 28, '<span class="cr_review_quote left" style="padding: 0px 2px 0px 0px; color: rgb(0, 53, 128); font-family: BlinkMacSystemFont, -apple-system, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif; font-size: small; background-color: rgb(255, 255, 255);">â€œ</span><span style="color: rgb(0, 53, 128); font-family: BlinkMacSystemFont, -apple-system, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif; font-size: small; background-color: rgb(255, 255, 255);">Great reception. Everyone is so nice. The hotel has its own security team. The checking procedures are trustworthy. . BBQ is great. Close to airport. Great time in Ramada</span><span class="cr_review_quote right" style="padding: 0px 0px 0px 2px; color: rgb(0, 53, 128); font-family: BlinkMacSystemFont, -apple-system, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif; font-size: small; background-color: rgb(255, 255, 255);">â€</span>', '12000', 1),
(9, 'Ramada Hotel Multan', '1493812942download (7).jpg', 27, '<span class="cr_review_quote left" style="padding: 0px 2px 0px 0px; color: rgb(0, 53, 128); font-family: BlinkMacSystemFont, -apple-system, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif; font-size: small; background-color: rgb(255, 255, 255);">â€œ</span><span style="color: rgb(0, 53, 128); font-family: BlinkMacSystemFont, -apple-system, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif; font-size: small; background-color: rgb(255, 255, 255);">Great reception. Everyone is so nice. The hotel has its own security team. The checking procedures are trustworthy. . BBQ is great. Close to airport. Great time in Ramada</span><span class="cr_review_quote right" style="padding: 0px 0px 0px 2px; color: rgb(0, 53, 128); font-family: BlinkMacSystemFont, -apple-system, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif; font-size: small; background-color: rgb(255, 255, 255);">â€</span>', '8000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `place_id` int(5) NOT NULL,
  `image` varchar(200) NOT NULL,
  `heading` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`place_id`, `image`, `heading`) VALUES
(22, 'images (1).jpg', 'Ramada Hotel'),
(23, 'download (1).jpg', 'PC Hotel in Karachi'),
(24, 'download.jpg', 'New Yourk'),
(25, 'images (4).jpg', 'China Town'),
(26, 'images (3).jpg', 'Cliphton Krachi'),
(27, 'images.jpg', 'Deface Lahore');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `gender`, `date`) VALUES
(1, 'ali ch', 'test@test.com', 'abcd1234', 'male', '2016-11-28 06:00:53'),
(3, 'Laraib', 'laraib@test.com', 'abcd1234', 'female', '2017-01-27 12:34:13');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vehicle_id` int(5) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` int(50) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vehicle_id`, `image`, `category`, `price`, `name`) VALUES
(3, 'CAC70HOC021B121001.jpg', 'Standard', 5000, 'Honda Civic 1.8'),
(4, '033.png', 'Luxury', 15000, 'Prado'),
(5, 'images (6).jpg', 'Luxury', 4000, 'Honda Civiv'),
(6, 'images (9).jpg', 'Economy', 10000, 'Prado Toyota'),
(7, 'images (8).jpg', 'Standard', 7000, 'Chatswood Toyota'),
(8, 'images (7).jpg', 'Economy', 9000, 'Prado Carmudi'),
(9, 'download (4).jpg', 'Economy', 6000, 'Toyota 2015'),
(10, 'download (5).jpg', 'Luxury', 5000, 'Toyota 1.8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `global_settings`
--
ALTER TABLE `global_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `global_settings`
--
ALTER TABLE `global_settings`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `hotel_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `place_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `vehicle_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
