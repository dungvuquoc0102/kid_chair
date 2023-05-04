-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 04:49 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `childbike`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `status` varchar(8) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`, `status`) VALUES
(1, 'Tin tức', 'ACTIVE'),
(2, 'Dịch vụ', 'ACTIVE'),
(3, 'Phụ kiện', 'ACTIVE'),
(4, 'Sản phẩm', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `color_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `status` varchar(8) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`color_id`, `name`, `status`) VALUES
(1, 'red', 'ACTIVE'),
(2, 'blue', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `title` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `summary` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(8) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `summary`, `content`, `category_id`, `sub_category_id`, `image`, `time`, `status`) VALUES
(1, 'Tin tức', 'Tóm tắt', '<p>Nội dung</p>', 1, 5, '/images/7hJALuq4zT4UYtFPLYCu.jpg', '2023-03-12 01:17:38', 'ACTIVE'),
(2, 'Có nên mua xe đạp trợ lực Panasonic không?', 'Các dòng xe đạp trợ lực ngày càng nhận được sự quan tâm và chọn mua từ người tiêu dùng. Trên thị trường hiện nay có rất nhiều thương hiệu sản xuất và cung cấp xe đạp trợ lực điện, kể cả các thương hiệu nổi tiếng về xe hơi hay đồ điện tử. Trong bài viết hôm nay, chúng ta sẽ cùng tìm hiểu xe đạp trợ lực Panasonic có đáng để bạn “bỏ tiền” sở hữu không nhé.', '<h2>Tổng quan về xe đạp trợ lực Panasonic</h2>\r\n\r\n<p>Xe đạp điện trợ lực thương hiệu Panasonic &ndash; l&agrave; thương hiệu nổi tiếng về đồ điện tử v&agrave; thiết bị gia dụng. C&aacute;c d&ograve;ng sản phẩm trợ lực điện của Panasonic mang c&ocirc;ng nghệ từ Nhật Bản nổi tiếng về chất lượng v&agrave; sự bền bỉ theo năm th&aacute;ng. Nếu chọn mua c&aacute;c d&ograve;ng xe đạp điện trợ lực Panasonic th&igrave; bạn ho&agrave;n to&agrave;n c&oacute; thể y&ecirc;n t&acirc;m về chất lượng, sử dụng bền bỉ v&agrave; ph&ugrave; hợp với t&uacute;i tiền.</p>\r\n\r\n<p>Pin xe đạp trợ lực Panasonic d&ugrave;ng loại pin Lion đến do ch&iacute;nh thương hiệu Panasonic sản xuất. Hầu hết xe đạp trợ lực Panasonic được sản xuất tại nh&agrave; m&aacute;y Panasonic Trung Quốc, vậy n&ecirc;n bạn kh&ocirc;ng cần phải lo lắng sản phẩm k&eacute;m chất lượng.</p>\r\n\r\n<p>Xe đạp trợ lực Panasonic lu&ocirc;n c&oacute; thiết kế độc đ&aacute;o, c&oacute; những ưu điểm ri&ecirc;ng nổi bật so với c&aacute;c d&ograve;ng xe đạp điện trợ lực c&ugrave;ng ph&acirc;n kh&uacute;c kh&aacute;c. Dưới đ&acirc;y l&agrave; một số ưu điểm của xe đạp điện trợ lực Panasonic.</p>\r\n\r\n<p><img alt=\"\" src=\"/images/SWLbxTYDXdVzoEVC3YAQ.jpg\" style=\"height:485px; width:730px\" /></p>', 1, 1, '/images/fpBuTVn8yNsJec1y4HLt.jpg', '2023-03-12 01:30:44', 'INACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `price` int(11) NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `size` varchar(5) NOT NULL,
  `sub_category_id` int(11) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `status` varchar(8) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `price`, `description`, `image`, `size`, `sub_category_id`, `category_id`, `status`) VALUES
(1, 'Xe đạp Bike', 2000, 'Sản phẩm đẹp, màu hồng, ghế ngồi cao su êm đềm, đây là mô tả minh họa', '/images/SWLbxTYDXdVzoEVC3YAQ.jpg', 'S', 3, 2, 'ACTIVE'),
(2, 'Xe đạp điện', 1000000, '<p>Ghế trẻ em Wall.E (NAM)</p>\r\n\r\n<p>Đ&acirc;y l&agrave; d&ograve;ng xe đạp trẻ em mới nhất của thương hiệu Wiibike, được thiết kế theo phong c&aacute;ch thể thao, năng động, kiểu d&aacute;ng ph&ugrave; hợp với c&aacute;c b&eacute; trai, bao gồm 2 m&agrave;u l&agrave; cam v&agrave; đỏ.</p>\r\n\r\n<p>Khung xe được l&agrave;m bằng th&eacute;p chắc chắn, phủ lớp tĩnh điện 3 lớp bảo đảm an to&agrave;n cho c&aacute;c b&eacute;. Lốp v&agrave; xăm xe DRC d&agrave;y dặn, c&oacute; khả năng chịu tải nặng v&agrave; chịu m&agrave;i m&ograve;n tốt, th&iacute;ch hợp để di chuyển tr&ecirc;n nhiều địa h&igrave;nh v&agrave; trong cả thời tiết khắc nghiệt.</p>\r\n\r\n<p>Mỗi xe đều được trang bị khung baga th&eacute;p cực kỳ chắc chắn, vừa tiện lợi chở người, chở đồ lại vừa đảm bảo an to&agrave;n ph&ograve;ng tr&aacute;nh c&aacute;ch trường hợp va quệt v&agrave;o b&aacute;nh xe.</p>\r\n\r\n<p>Th&ocirc;ng số kỹ thuật</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"vertical-align:baseline\">Th&ocirc;ng số kỹ thuật</td>\r\n			<td style=\"vertical-align:baseline\">Xe 20 inch&nbsp;</td>\r\n			<td style=\"vertical-align:baseline\">Xe 16 inch</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:baseline\">Chiều d&agrave;i x Chiều cao</td>\r\n			<td style=\"vertical-align:baseline\">1420mm-690mm</td>\r\n			<td style=\"vertical-align:baseline\">1150mm-550mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:baseline\">Đường k&iacute;nh b&aacute;nh xe</td>\r\n			<td style=\"vertical-align:baseline\">500mm</td>\r\n			<td style=\"vertical-align:baseline\">380mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:baseline\">Chiều cao y&ecirc;n xe</td>\r\n			<td style=\"vertical-align:baseline\">690mm</td>\r\n			<td style=\"vertical-align:baseline\">550mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:baseline\">Khung</td>\r\n			<td style=\"vertical-align:baseline\">Th&eacute;p</td>\r\n			<td style=\"vertical-align:baseline\">Th&eacute;p</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:baseline\">Sơn</td>\r\n			<td style=\"vertical-align:baseline\">C&ocirc;ng nghệ sơn tĩnh điện 3 lớp</td>\r\n			<td style=\"vertical-align:baseline\">C&ocirc;ng nghệ sơn tĩnh điện 3 lớp</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:baseline\">C&agrave;ng xe</td>\r\n			<td style=\"vertical-align:baseline\">Th&eacute;p</td>\r\n			<td style=\"vertical-align:baseline\">Th&eacute;p</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:baseline\">B&agrave;n đạp</td>\r\n			<td style=\"vertical-align:baseline\">Nhựa</td>\r\n			<td style=\"vertical-align:baseline\">Nhựa</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:baseline\">Ghi đ&ocirc;ng</td>\r\n			<td style=\"vertical-align:baseline\">Sắt</td>\r\n			<td style=\"vertical-align:baseline\">Th&eacute;p</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:baseline\">Potang</td>\r\n			<td style=\"vertical-align:baseline\">Nh&ocirc;m + Th&eacute;p</td>\r\n			<td style=\"vertical-align:baseline\">Nh&ocirc;m + Th&eacute;p</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:baseline\">Nan hoa</td>\r\n			<td style=\"vertical-align:baseline\">Mạ kẽm</td>\r\n			<td style=\"vertical-align:baseline\">Mạ kẽm</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:baseline\">V&agrave;nh xe</td>\r\n			<td style=\"vertical-align:baseline\">Nh&ocirc;m</td>\r\n			<td style=\"vertical-align:baseline\">Nh&ocirc;m</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:baseline\">Trục giữa</td>\r\n			<td style=\"vertical-align:baseline\">36 lỗ</td>\r\n			<td style=\"vertical-align:baseline\">36 lỗ</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:baseline\">Đ&ugrave;i đĩa</td>\r\n			<td style=\"vertical-align:baseline\">140</td>\r\n			<td style=\"vertical-align:baseline\">127</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:baseline\">L&iacute;p</td>\r\n			<td style=\"vertical-align:baseline\">Yamakato Ấn Độ</td>\r\n			<td style=\"vertical-align:baseline\">Yamakato Ấn Độ</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:baseline\">Baga</td>\r\n			<td style=\"vertical-align:baseline\">Th&eacute;p &ndash; Baga liền</td>\r\n			<td style=\"vertical-align:baseline\">Th&eacute;p &ndash; Baga liền</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:baseline\">Tay phanh</td>\r\n			<td style=\"vertical-align:baseline\">Nh&ocirc;m</td>\r\n			<td style=\"vertical-align:baseline\">Nhựa</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:baseline\">Lốp</td>\r\n			<td style=\"vertical-align:baseline\">DRC/tương đương</td>\r\n			<td style=\"vertical-align:baseline\">DRC/tương đương</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:baseline\">Săm</td>\r\n			<td style=\"vertical-align:baseline\">DRC</td>\r\n			<td style=\"vertical-align:baseline\">DRC</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:baseline\">B&aacute;nh phụ</td>\r\n			<td style=\"vertical-align:baseline\">Kh&ocirc;ng</td>\r\n			<td style=\"vertical-align:baseline\">Xe c&oacute; b&aacute;nh phụ</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:baseline\">Bảo h&agrave;nh Khung xe</td>\r\n			<td style=\"vertical-align:baseline\">36 th&aacute;ng</td>\r\n			<td style=\"vertical-align:baseline\">36 th&aacute;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:baseline\">Bảo h&agrave;nh phụ t&ugrave;ng</td>\r\n			<td style=\"vertical-align:baseline\">6 th&aacute;ng</td>\r\n			<td style=\"vertical-align:baseline\">6 th&aacute;ng</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Xe đạp trẻ em nam WIIBIKE WALL.E KID.<br />\r\n<br />\r\nKiểu d&aacute;ng khỏe khoắn, chất liệu an to&agrave;n.<br />\r\n<br />\r\nK&iacute;ch thước xe ph&ugrave; hợp cho c&aacute;c b&eacute; từ 4-11 tuổi.<br />\r\n<br />\r\nXuất xứ: Việt Nam.</p>', '/images/9hPqrRI9cXujXQzfZNXX.jpg', 'S', 4, 4, 'ACTIVE'),
(3, 'Xe hoa', 290000, '<p>M&ocirc; tả rất d&agrave;i</p>', '/images/6z2hPvMjZVQ8GUkB6U4K.jpg', 'S', 4, 4, 'ACTIVE'),
(4, 'Xe voi', 180000, '<p>Voi t&iacute;m</p>', '/images/nNAH0c3s0Uz6Fb9UQlKe.jpg', 'S', 4, 4, 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `product_color`
--

CREATE TABLE `product_color` (
  `product_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product_color`
--

INSERT INTO `product_color` (`product_id`, `color_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_category_id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `status` varchar(8) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_category_id`, `name`, `category_id`, `status`) VALUES
(1, 'Tin tức nóng hổi', 1, 'ACTIVE'),
(2, 'Dịch vụ bảo dưỡng xe', 2, 'ACTIVE'),
(3, 'Bộ giảm xóc', 3, 'ACTIVE'),
(4, 'Xe trẻ con', 4, 'ACTIVE'),
(5, 'Tin thời sự', 1, 'ACTIVE'),
(6, 'Tin sản phẩm', 1, 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` varchar(8) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `status`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'ACTIVE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`color_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `sub_category_id` (`sub_category_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `sub_category_id` (`sub_category_id`);

--
-- Indexes for table `product_color`
--
ALTER TABLE `product_color`
  ADD PRIMARY KEY (`product_id`,`color_id`),
  ADD KEY `color_id` (`color_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_category_id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `news_ibfk_2` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_category` (`sub_category_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_category` (`sub_category_id`);

--
-- Constraints for table `product_color`
--
ALTER TABLE `product_color`
  ADD CONSTRAINT `product_color_ibfk_1` FOREIGN KEY (`color_id`) REFERENCES `color` (`color_id`),
  ADD CONSTRAINT `product_color_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `sub_category_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
