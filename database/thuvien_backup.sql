-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2022 at 06:51 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thuvien`
--

-- --------------------------------------------------------

--
-- Table structure for table `e4_analytics_code`
--

CREATE TABLE `e4_analytics_code` (
  `id` int(5) NOT NULL,
  `title_vn` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description_vn` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `code` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `region` int(2) NOT NULL DEFAULT 0,
  `status` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_created` int(20) NOT NULL,
  `user_created` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_updated` int(20) NOT NULL,
  `user_updated` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `e4_analytics_code`
--

INSERT INTO `e4_analytics_code` (`id`, `title_vn`, `description_vn`, `code`, `position`, `region`, `status`, `date_created`, `user_created`, `date_updated`, `user_updated`) VALUES
(15, 'Map', 'Mã nhúng bản đồ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.0769262300387!2d105.83011561489695!3d20.989553286019593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad7983bf139f%3A0xd715ed4e538ae441!2zQ8O0bmcgdHkgbmdoacOqbiBj4bupdSB0aOG7iyB0csaw4budbmcgVmlldEFuYWx5dGljcw!5e0!3m2!1sen!2s!4v1592551768791!5m2!1sen!2s\" width=\"100%\" height=\"350px\"></iframe>', 'content', 0, 'active', 1598240557, 'admin@gmail.com', 1598240932, 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `e4_blocks`
--

CREATE TABLE `e4_blocks` (
  `id` int(11) NOT NULL,
  `bname` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bfilename` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bposition` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bpublish` int(1) NOT NULL,
  `region` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `e4_blocks`
--

INSERT INTO `e4_blocks` (`id`, `bname`, `bfilename`, `bposition`, `bpublish`, `region`) VALUES
(61, 'header', 'block.header.php', 'header', 1, 2),
(69, 'head', 'block.head.php', 'head', 1, 1),
(73, 'footer', 'block.footer.php', 'footer', 1, 19),
(75, 'footer_script', 'block.footer_script.php', 'footer_script', 1, 20),
(85, 'footer_product', 'block.footer_product.php', 'footer_product', 1, 6),
(97, 'right_side_bar', 'block.right_side_bar.php', 'right_side_bar', 1, 0),
(98, 'home_product_two', 'block.home_product_two.php', 'home_product_two', 1, 5),
(101, 'home_product_one', 'block.home_product_one.php', 'home_product_one', 1, 4),
(102, 'news_featured', 'block.news_featured.php', 'news_featured', 1, 0),
(103, 'sidebar_right_news', 'block.sidebar_right_news.php', 'sidebar_right_news', 1, 8),
(104, 'sidebar_left_product', 'block.sidebar_left_product.php', 'sidebar_left_product', 1, 7),
(105, 'home_category_product', 'block.home_category_product.php', 'home_category_product', 1, 3),
(106, 'home_head', 'block.home_head.php', 'home_head', 1, 0),
(107, 'home_header', 'block.header_home.php', 'home_header', 1, 0),
(108, 'home_footer_script', 'block.footer_script_home.php', 'home_footer_script', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `e4_book`
--

CREATE TABLE `e4_book` (
  `id` int(11) NOT NULL,
  `masach` varchar(255) NOT NULL,
  `tensach` text NOT NULL,
  `mota` text NOT NULL,
  `namxuatban` int(11) NOT NULL,
  `nhaxuatban` int(11) NOT NULL,
  `danhmucsach` int(11) NOT NULL,
  `giasach` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `tacgia` text NOT NULL,
  `nguoitao` int(11) NOT NULL,
  `url` text NOT NULL,
  `trangthai` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `e4_book`
--

INSERT INTO `e4_book` (`id`, `masach`, `tensach`, `mota`, `namxuatban`, `nhaxuatban`, `danhmucsach`, `giasach`, `soluong`, `tacgia`, `nguoitao`, `url`, `trangthai`, `image`) VALUES
(1, 'TA001', 'Tri ân 3', '<p>sssssss</p>', 0, 1, 3, 100000, 200, '3', 1, 'tri-an', 0, '/upload/san%20pham/DTT-5542-36177856.jpg'),
(2, 'TA002', 'Sách Tiếng Anh', '', 0, 1, 2, 120000, 123, '2', 1, 'sach-tieng-anhta002', 0, '/upload/san%20pham/DTT-5542-36177856.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `e4_comments`
--

CREATE TABLE `e4_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment_post_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `comment_author_name` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_author_email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_parent` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `comment_status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'pending',
  `comment_date` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `e4_comments`
--

INSERT INTO `e4_comments` (`id`, `comment_post_id`, `comment_author_name`, `comment_author_email`, `comment_content`, `comment_type`, `comment_parent`, `user_id`, `comment_status`, `comment_date`) VALUES
(1, 208, 'Nguyễn Hữu Thắng', 'huuthangb2k50@gmail.com', 'Nội dụng bình luận của bạn sẽ được hiển thị sau khi hệ thống kiểm duyệt. Xin chân thành cảm ơn.', 'post', NULL, 10, 'public', 1609149820),
(2, 208, 'Administrator', 'admin@gmail.com', 'Doanh nghiệp cũng như cơ thể con người, không thể nào lớn quá nhanh, trái với quy luật tự nhiên. Như tôi đã nói ở trên, khi một doanh nghiệp tăng trưởng quá nhanh nhưng năng lực quản lý của các thành viên không được cải thiện và nâng cao thì chất lượng quản lý sẽ giảm sút, việc mất kiểm soát là điều tất yếu xảy ra. Quan trọng nhất là nguồn lực trí tuệ của những tập đoàn nhà nước hiện nay lại tỷ lệ nghịch với quy mô của nó.', 'post', NULL, 1, 'public', 1609379675);

-- --------------------------------------------------------

--
-- Table structure for table `e4_contacts`
--

CREATE TABLE `e4_contacts` (
  `id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL DEFAULT 0,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_created` bigint(20) NOT NULL DEFAULT 0,
  `date_updated` bigint(20) NOT NULL DEFAULT 0,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new',
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'contact'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `e4_contacts`
--

INSERT INTO `e4_contacts` (`id`, `customer_id`, `name`, `phone`, `email`, `address`, `content`, `date_created`, `date_updated`, `comment`, `status`, `type`) VALUES
(31, 0, NULL, NULL, 'huuthangb2k50@gmail.com', NULL, NULL, 1603245693, 0, NULL, 'new', 'newsletter'),
(32, 0, NULL, NULL, 'huuthangb2kfasfasf50@gmail.com', NULL, NULL, 1603245719, 0, NULL, 'new', 'newsletter'),
(35, 0, NULL, NULL, 'Ic.tvdt@gmail.com', NULL, NULL, 1604335936, 0, NULL, 'new', 'newsletter'),
(36, 0, NULL, NULL, 'phuongmai.7395@gmail.com', NULL, NULL, 1604382678, 0, NULL, 'new', 'newsletter'),
(37, 0, NULL, NULL, 'hai.tvdtic2@gmail.com', NULL, NULL, 1604411135, 0, NULL, 'new', 'newsletter'),
(38, 0, NULL, NULL, 'elsajames.sc.163201518@mojorage.life', NULL, NULL, 1608636048, 0, NULL, 'new', 'newsletter'),
(39, 0, NULL, NULL, 'elsajames.sc.163201517@mojorage.life', NULL, NULL, 1608636048, 0, NULL, 'new', 'newsletter'),
(40, 0, NULL, NULL, 'abidoo.amrgamal1@athensmusician.us', NULL, NULL, 1609861359, 0, NULL, 'new', 'newsletter'),
(42, 0, 'Công', '0973643772', '1851062330@e.tlu.edu.vn', '', '', 1656046562, 0, NULL, 'new', 'contact');

-- --------------------------------------------------------

--
-- Table structure for table `e4_counter_visited`
--

CREATE TABLE `e4_counter_visited` (
  `id` bigint(20) NOT NULL,
  `timestamp` bigint(20) DEFAULT NULL,
  `ip` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  `referer_url` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `e4_counter_visited`
--

INSERT INTO `e4_counter_visited` (`id`, `timestamp`, `ip`, `url`, `user_id`, `referer_url`) VALUES
(1, 1609147020, '127.0.0.1', 'http://localhost/tctbgd/', 10, NULL),
(2, 1609147125, '127.0.0.1', 'http://localhost/tctbgd/', 10, NULL),
(3, 1609147129, '127.0.0.1', 'http://localhost/tctbgd/', 10, NULL),
(4, 1609147544, '127.0.0.1', 'http://localhost/tctbgd/', 10, NULL),
(5, 1609148471, '127.0.0.1', 'http://localhost/tctbgd/chi-tiet/p-v-ong-nguyen-duc-thanh-doanh-nghiep-nha-nuoc-giu-vai-tro-chu-dao-co-con-phu-hop-.html', 10, NULL),
(6, 1609148898, '127.0.0.1', 'http://localhost/tctbgd/chi-tiet/p-v-ong-nguyen-duc-thanh-doanh-nghiep-nha-nuoc-giu-vai-tro-chu-dao-co-con-phu-hop-.html', 10, NULL),
(7, 1609149780, '127.0.0.1', 'http://localhost/tctbgd/chi-tiet/p-v-ong-nguyen-duc-thanh-doanh-nghiep-nha-nuoc-giu-vai-tro-chu-dao-co-con-phu-hop-.html', 10, NULL),
(8, 1609150343, '127.0.0.1', 'http://localhost/tctbgd/chi-tiet/p-v-ong-nguyen-duc-thanh-doanh-nghiep-nha-nuoc-giu-vai-tro-chu-dao-co-con-phu-hop-.html', 10, NULL),
(9, 1609293351, '127.0.0.1', 'http://localhost/tctbgd/', 0, NULL),
(10, 1609296258, '127.0.0.1', 'http://localhost/tctbgd/', 0, NULL),
(11, 1609297452, '127.0.0.1', 'http://localhost/tctbgd/chi-tiet/p-v-ong-pham-the-anh-ho-tro-nen-kinh-te-thoi-covid-19-lua-chon-va-uu-tien-nhu-the-nao-.html', 0, NULL),
(12, 1609298157, '127.0.0.1', 'http://localhost/tctbgd/chi-tiet/p-v-ong-pham-the-anh-ho-tro-nen-kinh-te-thoi-covid-19-lua-chon-va-uu-tien-nhu-the-nao-.html', 1, NULL),
(13, 1609377636, '127.0.0.1', 'http://localhost/tctbgd/', 0, NULL),
(14, 1609379111, '127.0.0.1', 'http://localhost/tctbgd/detail/p-v-ong-nguyen-duc-thanh-doanh-nghiep-nha-nuoc-giu-vai-tro-chu-dao-co-con-phu-hop-.html', 0, NULL),
(15, 1609379529, '127.0.0.1', 'http://localhost/tctbgd/chi-tiet/p-v-ong-nguyen-duc-thanh-doanh-nghiep-nha-nuoc-giu-vai-tro-chu-dao-co-con-phu-hop-.html', 0, NULL),
(16, 1609379980, '127.0.0.1', 'http://localhost/tctbgd/user/dang-xuat.html', 1, NULL),
(17, 1609380464, '127.0.0.1', 'http://localhost/tctbgd/tin-tuc.html?keysearch=faggag', 0, NULL),
(18, 1609381556, '127.0.0.1', 'http://localhost/tctbgd/user/dang-ky.html', 0, NULL),
(19, 1609383213, '127.0.0.1', 'http://localhost/tctbgd/user/dang-ky.html', 0, NULL),
(20, 1609395853, '127.0.0.1', 'http://localhost/tctbgd/', 0, NULL),
(21, 1609817692, '127.0.0.1', 'http://localhost/tctbgd/', 0, NULL),
(27, 1609818903, '127.0.0.1', 'http://localhost/tctbgd/', 13, 'https://www.google.com'),
(30, 1609819411, '127.0.0.1', 'http://localhost/tctbgd/', 13, 'https://www.google.com'),
(31, 1609820258, '127.0.0.1', 'http://localhost/tctbgd/', 13, 'http://localhost/tctbgd/'),
(32, 1609835444, '127.0.0.1', 'http://localhost/tctbgd/', 0, ''),
(33, 1612337274, '127.0.0.1', 'http://localhost/manlio/tin-tuc.html?curPg=1&', 0, 'http://localhost/manlio/tin-tuc.html?curPg=3&'),
(34, 1612337352, '127.0.0.1', 'http://localhost/manlio/tin-tuc.html?curPg=1&', 0, 'http://localhost/manlio/tin-tuc.html?curPg=3&'),
(35, 1612337427, '127.0.0.1', 'http://localhost/manlio/tin-tuc.html?curPg=1&', 0, 'http://localhost/manlio/tin-tuc.html?curPg=3&'),
(36, 1612337471, '127.0.0.1', 'http://localhost/manlio/tin-tuc.html?curPg=1&', 0, ''),
(37, 1612337507, '127.0.0.1', 'http://localhost/manlio/tin-tuc.html?curPg=1&', 0, 'http://localhost/manlio/tin-tuc.html?curPg=3&'),
(38, 1612337511, '127.0.0.1', 'http://localhost/manlio/tin-tuc.html?curPg=1&', 0, 'http://localhost/manlio/tin-tuc.html?curPg=3&'),
(39, 1612337613, '127.0.0.1', 'http://localhost/manlio/tin-tuc.html?curPg=1&', 0, 'http://localhost/manlio/tin-tuc.html?curPg=3&'),
(40, 1612337697, '127.0.0.1', 'http://localhost/manlio/tin-tuc.html?curPg=1&', 0, 'http://localhost/manlio/tin-tuc.html?curPg=3&'),
(41, 1612337827, '127.0.0.1', 'http://localhost/manlio/tin-tuc.html?curPg=1&', 0, 'http://localhost/manlio/tin-tuc.html?curPg=3&'),
(42, 1612337850, '127.0.0.1', 'http://localhost/manlio/tin-tuc.html?curPg=1&', 0, 'http://localhost/manlio/tin-tuc.html?curPg=3&'),
(43, 1612337938, '127.0.0.1', 'http://localhost/manlio/tin-tuc.html?curPg=1&', 0, 'http://localhost/manlio/tin-tuc.html?curPg=3&'),
(44, 1612338831, '127.0.0.1', 'http://localhost/manlio/tin-tuc/meo-vat-van-phong.html', 0, 'http://localhost/manlio/tin-tuc.html?curPg=1&'),
(45, 1612338871, '127.0.0.1', 'http://localhost/manlio/tin-tuc/meo-vat-van-phong.html', 0, 'http://localhost/manlio/tin-tuc.html?curPg=1&'),
(46, 1612338893, '127.0.0.1', 'http://localhost/manlio/tin-tuc/meo-vat-van-phong.html', 0, 'http://localhost/manlio/tin-tuc.html?curPg=1&'),
(47, 1612338907, '127.0.0.1', 'http://localhost/manlio/tin-tuc/meo-vat-van-phong.html', 0, 'http://localhost/manlio/tin-tuc.html?curPg=1&'),
(48, 1612338910, '127.0.0.1', 'http://localhost/manlio/tin-tuc/meo-vat-van-phong.html', 0, ''),
(49, 1612338928, '127.0.0.1', 'http://localhost/manlio/tin-tuc/meo-vat-van-phong.html', 0, 'http://localhost/manlio/tin-tuc.html?curPg=1&'),
(50, 1612338970, '127.0.0.1', 'http://localhost/manlio/tin-tuc/meo-vat-van-phong.html?curPg=2&', 0, 'http://localhost/manlio/tin-tuc/meo-vat-van-phong.html'),
(51, 1612338983, '127.0.0.1', 'http://localhost/manlio/tin-tuc/meo-vat-van-phong.html', 0, 'http://localhost/manlio/tin-tuc.html?curPg=1&'),
(52, 1612338986, '127.0.0.1', 'http://localhost/manlio/tin-tuc.html?curPg=1&', 0, 'http://localhost/manlio/tin-tuc.html?curPg=3&'),
(53, 1612339001, '127.0.0.1', 'http://localhost/manlio/tin-tuc.html?curPg=1&', 0, 'http://localhost/manlio/tin-tuc.html?curPg=3&'),
(54, 1612339005, '127.0.0.1', 'http://localhost/manlio/tin-tuc/meo-vat-van-phong.html', 0, 'http://localhost/manlio/tin-tuc.html?curPg=1&'),
(55, 1612339120, '127.0.0.1', 'http://localhost/manlio/tin-tuc/meo-vat-van-phong.html', 0, 'http://localhost/manlio/tin-tuc.html?curPg=1&'),
(56, 1612339955, '127.0.0.1', 'http://localhost/manlio/chi-tiet/chuong-trinh-phan-mem-dau-tien.html', 0, 'http://localhost/manlio/tin-tuc/meo-vat-van-phong.html'),
(57, 1612342469, '127.0.0.1', 'http://localhost/manlio/chi-tiet/chuong-trinh-phan-mem-dau-tien.html', 0, 'http://localhost/manlio/tin-tuc/meo-vat-van-phong.html'),
(58, 1612342491, '127.0.0.1', 'http://localhost/manlio/chi-tiet/chuong-trinh-phan-mem-dau-tien.html', 0, ''),
(59, 1612342527, '127.0.0.1', 'http://localhost/manlio/chi-tiet/chuong-trinh-phan-mem-dau-tien.html', 0, 'http://localhost/manlio/tin-tuc/meo-vat-van-phong.html'),
(60, 1612342711, '127.0.0.1', 'http://localhost/manlio/chi-tiet/chuong-trinh-phan-mem-dau-tien.html', 0, 'http://localhost/manlio/tin-tuc/meo-vat-van-phong.html'),
(61, 1612342789, '127.0.0.1', 'http://localhost/manlio/chi-tiet/chuong-trinh-phan-mem-dau-tien.html', 0, 'http://localhost/manlio/tin-tuc/meo-vat-van-phong.html'),
(62, 1612342826, '127.0.0.1', 'http://localhost/manlio/chi-tiet/chuong-trinh-phan-mem-dau-tien.html', 0, 'http://localhost/manlio/tin-tuc/meo-vat-van-phong.html'),
(63, 1612342901, '127.0.0.1', 'http://localhost/manlio/chi-tiet/chuong-trinh-phan-mem-dau-tien.html', 0, 'http://localhost/manlio/tin-tuc/meo-vat-van-phong.html'),
(64, 1612342995, '127.0.0.1', 'http://localhost/manlio/chi-tiet/chuong-trinh-phan-mem-dau-tien.html', 0, 'http://localhost/manlio/tin-tuc/meo-vat-van-phong.html'),
(65, 1612343170, '127.0.0.1', 'http://localhost/manlio/chi-tiet/chuong-trinh-phan-mem-dau-tien.html', 0, 'http://localhost/manlio/tin-tuc/meo-vat-van-phong.html'),
(66, 1612343181, '127.0.0.1', 'http://localhost/manlio/trang-chu.html', 0, 'http://localhost/manlio/chi-tiet/chuong-trinh-phan-mem-dau-tien.html'),
(67, 1612343185, '127.0.0.1', 'http://localhost/manlio/chi-tiet/chuong-trinh-phan-mem-dau-tien.html', 0, 'http://localhost/manlio/tin-tuc/meo-vat-van-phong.html'),
(68, 1612343197, '127.0.0.1', 'http://localhost/manlio/chi-tiet/bao-so-8-suy-yeu-thanh-ap-thap-nhiet-doi-nhieu-tinh-mien-trung-mua-to.html', 0, 'http://localhost/manlio/chi-tiet/chuong-trinh-phan-mem-dau-tien.html'),
(69, 1612343214, '127.0.0.1', 'http://localhost/manlio/chi-tiet/bao-so-8-suy-yeu-thanh-ap-thap-nhiet-doi-nhieu-tinh-mien-trung-mua-to.html', 0, 'http://localhost/manlio/chi-tiet/chuong-trinh-phan-mem-dau-tien.html'),
(70, 1612343218, '127.0.0.1', 'http://localhost/manlio/trang-chu.html', 0, 'http://localhost/manlio/chi-tiet/bao-so-8-suy-yeu-thanh-ap-thap-nhiet-doi-nhieu-tinh-mien-trung-mua-to.html'),
(71, 1612343220, '127.0.0.1', 'http://localhost/manlio/chi-tiet/bao-so-8-suy-yeu-thanh-ap-thap-nhiet-doi-nhieu-tinh-mien-trung-mua-to.html', 0, 'http://localhost/manlio/chi-tiet/chuong-trinh-phan-mem-dau-tien.html'),
(72, 1612343228, '127.0.0.1', 'http://localhost/manlio/chi-tiet/bao-so-8-suy-yeu-thanh-ap-thap-nhiet-doi-nhieu-tinh-mien-trung-mua-to.html', 0, ''),
(73, 1612343294, '127.0.0.1', 'http://localhost/manlio/chi-tiet/bao-so-8-suy-yeu-thanh-ap-thap-nhiet-doi-nhieu-tinh-mien-trung-mua-to.html', 0, 'http://localhost/manlio/chi-tiet/chuong-trinh-phan-mem-dau-tien.html'),
(74, 1612343329, '127.0.0.1', 'http://localhost/manlio/chi-tiet/bao-so-8-suy-yeu-thanh-ap-thap-nhiet-doi-nhieu-tinh-mien-trung-mua-to.html', 0, 'http://localhost/manlio/chi-tiet/chuong-trinh-phan-mem-dau-tien.html'),
(75, 1612343400, '127.0.0.1', 'http://localhost/manlio/chi-tiet/bao-so-8-suy-yeu-thanh-ap-thap-nhiet-doi-nhieu-tinh-mien-trung-mua-to.html', 0, 'http://localhost/manlio/chi-tiet/chuong-trinh-phan-mem-dau-tien.html'),
(76, 1612343439, '127.0.0.1', 'http://localhost/manlio/chi-tiet/chuong-trinh-phan-mem-dau-tien.html', 0, 'http://localhost/manlio/tin-tuc/meo-vat-van-phong.html'),
(77, 1612343518, '127.0.0.1', 'http://localhost/manlio/chi-tiet/chuong-trinh-phan-mem-dau-tien.html', 0, 'http://localhost/manlio/tin-tuc/meo-vat-van-phong.html'),
(78, 1612343541, '127.0.0.1', 'http://localhost/manlio/lien-he.html', 0, 'http://localhost/manlio/chi-tiet/chuong-trinh-phan-mem-dau-tien.html'),
(79, 1612343742, '127.0.0.1', 'http://localhost/manlio/lien-he.html', 0, 'http://localhost/manlio/chi-tiet/chuong-trinh-phan-mem-dau-tien.html'),
(80, 1612344037, '127.0.0.1', 'http://localhost/manlio/lien-he.html', 0, 'http://localhost/manlio/chi-tiet/chuong-trinh-phan-mem-dau-tien.html'),
(81, 1612344083, '127.0.0.1', 'http://localhost/manlio/lien-he.html', 0, 'http://localhost/manlio/chi-tiet/chuong-trinh-phan-mem-dau-tien.html'),
(82, 1612344122, '127.0.0.1', 'http://localhost/manlio/lien-he.html', 0, 'http://localhost/manlio/chi-tiet/chuong-trinh-phan-mem-dau-tien.html'),
(83, 1612344582, '127.0.0.1', 'http://localhost/manlio/lien-he.html', 0, 'http://localhost/manlio/chi-tiet/chuong-trinh-phan-mem-dau-tien.html'),
(84, 1612344619, '127.0.0.1', 'http://localhost/manlio/lien-he.html', 0, 'http://localhost/manlio/chi-tiet/chuong-trinh-phan-mem-dau-tien.html'),
(85, 1612344648, '127.0.0.1', 'http://localhost/manlio/lien-he.html', 0, 'http://localhost/manlio/chi-tiet/chuong-trinh-phan-mem-dau-tien.html'),
(86, 1612344669, '127.0.0.1', 'http://localhost/manlio/lien-he.html', 0, 'http://localhost/manlio/chi-tiet/chuong-trinh-phan-mem-dau-tien.html'),
(87, 1612344706, '127.0.0.1', 'http://localhost/manlio/lien-he.html', 0, 'http://localhost/manlio/chi-tiet/chuong-trinh-phan-mem-dau-tien.html'),
(88, 1612344763, '127.0.0.1', 'http://localhost/manlio/lien-he.html', 0, 'http://localhost/manlio/chi-tiet/chuong-trinh-phan-mem-dau-tien.html'),
(89, 1612344791, '127.0.0.1', 'http://localhost/manlio/lien-he.html', 0, 'http://localhost/manlio/lien-he.html'),
(90, 1612344796, '127.0.0.1', 'http://localhost/manlio/trang-chu.html', 0, 'http://localhost/manlio/lien-he.html'),
(91, 1612344810, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/trang-chu.html'),
(92, 1612344951, '127.0.0.1', 'http://localhost/manlio/', 0, 'http://localhost/manlio/gio-hang.html'),
(93, 1612344953, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/trang-chu.html'),
(94, 1612345251, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/trang-chu.html'),
(95, 1612345311, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/trang-chu.html'),
(96, 1612345346, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/trang-chu.html'),
(97, 1612345371, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/trang-chu.html'),
(98, 1612345396, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/trang-chu.html'),
(99, 1612345407, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/trang-chu.html'),
(100, 1612345423, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/trang-chu.html'),
(101, 1612345433, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, ''),
(102, 1612345487, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/trang-chu.html'),
(103, 1612345506, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/trang-chu.html'),
(104, 1612345514, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/trang-chu.html'),
(105, 1612345531, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/trang-chu.html'),
(106, 1612345580, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/trang-chu.html'),
(107, 1612345593, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/trang-chu.html'),
(108, 1612345706, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/trang-chu.html'),
(109, 1612345772, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/trang-chu.html'),
(110, 1612345781, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/trang-chu.html'),
(111, 1612345788, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/trang-chu.html'),
(112, 1612345887, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/trang-chu.html'),
(113, 1612345981, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/trang-chu.html'),
(114, 1612346017, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/trang-chu.html'),
(115, 1612346100, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/trang-chu.html'),
(116, 1612346116, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/trang-chu.html'),
(117, 1612346368, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/trang-chu.html'),
(118, 1612346469, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/trang-chu.html'),
(119, 1612346551, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/trang-chu.html'),
(120, 1612346584, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/trang-chu.html'),
(121, 1612346598, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/trang-chu.html'),
(122, 1612346644, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/trang-chu.html'),
(123, 1612346739, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/trang-chu.html'),
(124, 1612346801, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/trang-chu.html'),
(125, 1612346819, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/trang-chu.html'),
(126, 1612346830, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/trang-chu.html'),
(127, 1612346844, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/trang-chu.html'),
(128, 1612346848, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/ajax/ajax.cart.php?quantity=11&pid=66&type=edit&quantity=12'),
(129, 1612346863, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/trang-chu.html'),
(130, 1612346918, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/trang-chu.html'),
(131, 1612346925, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/ajax/ajax.cart.php?quantity=2&pid=68&type=edit'),
(132, 1612346927, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/ajax/ajax.cart.php?quantity=3&pid=68&type=edit'),
(133, 1612346932, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/ajax/ajax.cart.php?type=delete&pid=117'),
(134, 1612347000, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/ajax/ajax.cart.php?type=delete&pid=117'),
(135, 1612347239, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/ajax/ajax.cart.php?type=delete&pid=117'),
(136, 1612347407, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/ajax/ajax.cart.php?type=delete&pid=117'),
(137, 1612347699, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/ajax/ajax.cart.php?type=delete&pid=117'),
(138, 1612347714, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/gio-hang.html'),
(139, 1612347771, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, ''),
(140, 1612347811, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/gio-hang.html'),
(141, 1612347815, '127.0.0.1', 'http://localhost/manlio/trang-chu.html', 0, 'http://localhost/manlio/gio-hang.html'),
(142, 1612347818, '127.0.0.1', 'http://localhost/manlio/gio-hang.html', 0, 'http://localhost/manlio/trang-chu.html'),
(143, 1612347820, '127.0.0.1', 'http://localhost/manlio/trang-chu.html', 0, 'http://localhost/manlio/gio-hang.html'),
(144, 1612347946, '127.0.0.1', 'http://localhost/manlio/trang-chu.html', 0, 'http://localhost/manlio/gio-hang.html'),
(145, 1612355177, '127.0.0.1', 'http://localhost/manlio/', 0, ''),
(146, 1612355207, '127.0.0.1', 'http://localhost/manlio/san-pham.html', 0, 'http://localhost/manlio/'),
(147, 1612355328, '127.0.0.1', 'http://localhost/manlio/san-pham.html', 0, 'http://localhost/manlio/'),
(148, 1612355333, '127.0.0.1', 'http://localhost/manlio/san-pham.html', 0, 'http://localhost/manlio/san-pham.html'),
(149, 1612355360, '127.0.0.1', 'http://localhost/manlio/san-pham.html', 0, ''),
(150, 1612355407, '127.0.0.1', 'http://localhost/manlio/san-pham.html', 0, ''),
(151, 1612355417, '127.0.0.1', 'http://localhost/manlio/san-pham.html', 0, ''),
(152, 1612355435, '127.0.0.1', 'http://localhost/manlio/san-pham.html', 0, 'http://localhost/manlio/san-pham.html'),
(153, 1612355578, '127.0.0.1', 'http://localhost/manlio/san-pham.html', 0, ''),
(154, 1612355593, '127.0.0.1', 'http://localhost/manlio/san-pham.html', 0, 'http://localhost/manlio/san-pham.html'),
(155, 1612355651, '127.0.0.1', 'http://localhost/manlio/san-pham.html', 0, ''),
(156, 1612355681, '127.0.0.1', 'http://localhost/manlio/san-pham.html', 0, ''),
(157, 1612355733, '127.0.0.1', 'http://localhost/manlio/san-pham.html', 0, ''),
(158, 1612355745, '127.0.0.1', 'http://localhost/manlio/san-pham.html', 0, 'http://localhost/manlio/san-pham.html'),
(159, 1612355754, '127.0.0.1', 'http://localhost/manlio/san-pham.html', 0, 'http://localhost/manlio/san-pham.html'),
(160, 1612356040, '127.0.0.1', 'http://localhost/manlio/trang-chu.html', 0, 'http://localhost/manlio/san-pham.html'),
(161, 1612356389, '127.0.0.1', 'http://localhost/manlio/trang-chu.html', 0, 'http://localhost/manlio/san-pham.html'),
(162, 1612356419, '127.0.0.1', 'http://localhost/manlio/trang-chu.html', 0, 'http://localhost/manlio/san-pham.html'),
(163, 1612356431, '127.0.0.1', 'http://localhost/manlio/trang-chu.html', 0, 'http://localhost/manlio/san-pham.html'),
(164, 1612356467, '127.0.0.1', 'http://localhost/manlio/trang-chu.html', 0, 'http://localhost/manlio/san-pham.html'),
(165, 1612356475, '127.0.0.1', 'http://localhost/manlio/san-pham.html', 0, 'http://localhost/manlio/trang-chu.html'),
(166, 1612356509, '127.0.0.1', 'http://localhost/manlio/san-pham.html', 0, 'http://localhost/manlio/trang-chu.html'),
(167, 1612356522, '127.0.0.1', 'http://localhost/manlio/trang-chu.html', 0, 'http://localhost/manlio/san-pham.html'),
(168, 1612356556, '127.0.0.1', 'http://localhost/manlio/trang-chu.html', 0, 'http://localhost/manlio/san-pham.html'),
(169, 1612356623, '127.0.0.1', 'http://localhost/manlio/trang-chu.html', 0, 'http://localhost/manlio/san-pham.html'),
(170, 1612356693, '127.0.0.1', 'http://localhost/manlio/trang-chu.html', 0, 'http://localhost/manlio/san-pham.html'),
(171, 1612356711, '127.0.0.1', 'http://localhost/manlio/trang-chu.html', 0, 'http://localhost/manlio/san-pham.html'),
(172, 1613633484, '127.0.0.1', 'http://localhost/manlio/', 0, ''),
(173, 1655744436, '::1', 'http://localhost/dchic/', 0, ''),
(174, 1655744580, '::1', 'http://localhost/dchic/', 0, ''),
(175, 1655744619, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(176, 1655744641, '127.0.0.1', 'http://127.0.0.1:8403/lien-he.html', 0, 'http://127.0.0.1:8403/'),
(177, 1655744645, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/vat-dung-khac.html', 0, 'http://127.0.0.1:8403/lien-he.html'),
(178, 1655744652, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/kep-giay.html', 0, 'http://127.0.0.1:8403/san-pham/vat-dung-khac.html'),
(179, 1655744656, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/tin-tuc-khuyen-mai.html', 0, 'http://127.0.0.1:8403/san-pham/kep-giay.html'),
(180, 1655744664, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/fit-micro-corduroy-shirt.html', 0, 'http://127.0.0.1:8403/tin-tuc/tin-tuc-khuyen-mai.html'),
(181, 1655744676, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/chi-tiet/fit-micro-corduroy-shirt.html'),
(182, 1655744686, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-photo-a4-indonesia-70gsm-ikplus.html', 0, 'http://127.0.0.1:8403/'),
(183, 1655744997, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(184, 1655745159, '127.0.0.1', 'http://127.0.0.1:8403/lien-he.html', 0, 'http://127.0.0.1:8403/'),
(185, 1655745166, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/lien-he.html'),
(186, 1655745170, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(187, 1655745197, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/tin-tuc-khuyen-mai.html', 0, 'http://127.0.0.1:8403/'),
(188, 1655745203, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuci.html', 0, ''),
(189, 1655745205, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/tin-tuc-khuyen-mai.html', 0, 'http://127.0.0.1:8403/'),
(190, 1655745210, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, ''),
(191, 1655745216, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html?curPg=2&', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(192, 1655745220, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html?curPg=3&', 0, 'http://127.0.0.1:8403/tin-tuc.html?curPg=2&'),
(193, 1655745239, '127.0.0.1', 'http://127.0.0.1:8403/trang-chu.html', 0, 'http://127.0.0.1:8403/tin-tuc.html?curPg=3&'),
(194, 1655745248, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-paper-one-a3-dl70.html', 0, 'http://127.0.0.1:8403/trang-chu.html'),
(195, 1655745780, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/chi-tiet/giay-paper-one-a3-dl70.html'),
(196, 1655745788, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/tin-tuc-khuyen-mai.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(197, 1655745793, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/tin-tuc/tin-tuc-khuyen-mai.html'),
(198, 1655745803, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/tin-tuc-khuyen-mai.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(199, 1655745809, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/tin-tuc/tin-tuc-khuyen-mai.html'),
(200, 1655745812, '127.0.0.1', 'http://127.0.0.1:8403/trang-chu.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(201, 1655746938, '127.0.0.1', 'http://127.0.0.1:8403/lien-he.html', 0, 'http://127.0.0.1:8403/trang-chu.html'),
(202, 1655747320, '127.0.0.1', 'http://127.0.0.1:8403/trang-chu.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(203, 1655747722, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/trang-chu.html'),
(204, 1655747734, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-photo-a4-indonesia-70gsm-ikplus.html', 0, 'http://127.0.0.1:8403/'),
(205, 1655747741, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/chi-tiet/giay-photo-a4-indonesia-70gsm-ikplus.html'),
(206, 1655747750, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-photo-a4-indonesia-70gsm-ikplus.html', 0, 'http://127.0.0.1:8403/'),
(207, 1655747757, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/tin-tuc-khuyen-mai.html', 0, 'http://127.0.0.1:8403/chi-tiet/giay-photo-a4-indonesia-70gsm-ikplus.html'),
(208, 1655747773, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(209, 1655747798, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html?orderby=&pageSize=24&curPg=1', 0, 'http://127.0.0.1:8403/san-pham.html'),
(210, 1655747804, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a3-double-dl-70.html', 0, 'http://127.0.0.1:8403/san-pham.html?orderby=&pageSize=24&curPg=1'),
(211, 1655776646, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(212, 1655785896, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(213, 1655786629, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(214, 1655795300, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(215, 1655864088, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(216, 1655864401, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(217, 1655864574, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(218, 1655866081, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(219, 1655866327, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/san-pham-noi-bat.html', 0, 'http://127.0.0.1:8403/'),
(220, 1655869107, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/san-pham-noi-bat.html', 0, 'http://127.0.0.1:8403/'),
(221, 1655869118, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/san-pham/san-pham-noi-bat.html'),
(222, 1655869156, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/san-pham-noi-bat.html', 0, 'http://127.0.0.1:8403/'),
(223, 1655869162, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/tin-tuc-khuyen-mai.html', 0, 'http://127.0.0.1:8403/san-pham/san-pham-noi-bat.html'),
(224, 1655869170, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/tin-tuc/tin-tuc-khuyen-mai.html'),
(225, 1655869196, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/tin-tuc/tin-tuc-khuyen-mai.html'),
(226, 1655869200, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/tin-tuc-khuyen-mai.html', 0, 'http://127.0.0.1:8403/san-pham/san-pham-noi-bat.html'),
(227, 1655887706, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/tin-tuc-khuyen-mai.html', 0, 'http://127.0.0.1:8403/san-pham/san-pham-noi-bat.html'),
(228, 1655887713, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/tin-tuc-khuyen-mai.html', 0, 'http://127.0.0.1:8403/san-pham/san-pham-noi-bat.html'),
(229, 1655887717, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/tin-tuc/tin-tuc-khuyen-mai.html'),
(230, 1655888122, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/tin-tuc/tin-tuc-khuyen-mai.html'),
(231, 1655888124, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/tin-tuc/tin-tuc-khuyen-mai.html'),
(232, 1655888146, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/tin-tuc/tin-tuc-khuyen-mai.html'),
(233, 1655888148, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(234, 1655888151, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(235, 1655888242, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(236, 1655888324, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(237, 1655888327, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(238, 1655888358, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(239, 1655888368, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(240, 1655888379, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(241, 1655888533, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(242, 1655888903, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(243, 1655888907, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(244, 1655888959, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(245, 1655888997, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(246, 1655889120, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(247, 1655889258, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(248, 1655889288, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(249, 1655889322, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(250, 1655889524, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(251, 1655891004, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(252, 1655891010, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(253, 1655891024, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(254, 1655891032, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(255, 1655891060, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(256, 1655891087, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(257, 1655891144, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(258, 1655891156, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(259, 1655891190, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(260, 1655891209, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(261, 1655891305, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(262, 1655891456, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(263, 1655891502, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(264, 1655891585, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(265, 1655891608, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(266, 1655891667, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(267, 1655891736, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(268, 1655891780, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(269, 1655891812, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(270, 1655891842, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(271, 1655891856, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(272, 1655891863, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(273, 1655891986, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(274, 1655892069, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(275, 1655892111, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(276, 1655892247, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(277, 1655892300, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(278, 1655892322, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(279, 1655892382, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(280, 1655892476, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(281, 1655892518, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(282, 1655892763, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(283, 1655892817, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(284, 1655892837, '127.0.0.1', 'http://127.0.0.1:8403/lien-he.html', 0, 'http://127.0.0.1:8403/'),
(285, 1655892892, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(286, 1655892905, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(287, 1655892917, '127.0.0.1', 'http://127.0.0.1:8403/index.html', 0, 'http://127.0.0.1:8403/'),
(288, 1655893508, '127.0.0.1', 'http://127.0.0.1:8403/bo-suu-tap.html', 0, 'http://127.0.0.1:8403/index.html'),
(289, 1655893510, '127.0.0.1', 'http://127.0.0.1:8403/index.html', 0, 'http://127.0.0.1:8403/'),
(290, 1655893831, '127.0.0.1', 'http://127.0.0.1:8403/index.html', 0, 'http://127.0.0.1:8403/'),
(291, 1655893861, '127.0.0.1', 'http://127.0.0.1:8403/index.html', 0, 'http://127.0.0.1:8403/'),
(292, 1655893867, '127.0.0.1', 'http://127.0.0.1:8403/lien-he.html', 0, 'http://127.0.0.1:8403/index.html'),
(293, 1655893869, '127.0.0.1', 'http://127.0.0.1:8403/index.html', 0, 'http://127.0.0.1:8403/'),
(294, 1655893911, '127.0.0.1', 'http://127.0.0.1:8403/index.html', 0, 'http://127.0.0.1:8403/'),
(295, 1655893925, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(296, 1655893928, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(297, 1655893962, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(298, 1655894046, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(299, 1655894097, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(300, 1655894115, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(301, 1655894869, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(302, 1655894872, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(303, 1655894884, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(304, 1655894951, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(305, 1655894965, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(306, 1655895093, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(307, 1655895119, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(308, 1655895127, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(309, 1655895143, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(310, 1655895188, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(311, 1655895218, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(312, 1655895236, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(313, 1655895254, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(314, 1655895312, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(315, 1655895323, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(316, 1655895564, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(317, 1655895625, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(318, 1655895991, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(319, 1655896026, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(320, 1655896030, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/'),
(321, 1655896042, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(322, 1655896044, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(323, 1655896061, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/so-cac-loai.html', 0, 'http://127.0.0.1:8403/'),
(324, 1655896064, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(325, 1655896098, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(326, 1655896238, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(327, 1655896685, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(328, 1655896939, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(329, 1655896967, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(330, 1655897111, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(331, 1655897163, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(332, 1655897188, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(333, 1655897244, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(334, 1655897347, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(335, 1655897352, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(336, 1655897357, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(337, 1655905412, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(338, 1655905868, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(339, 1655905943, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(340, 1655905988, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(341, 1655905994, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/water-resistant-backpack.html', 0, 'http://127.0.0.1:8403/'),
(342, 1655906241, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/chi-tiet/water-resistant-backpack.html'),
(343, 1655906392, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/chi-tiet/water-resistant-backpack.html'),
(344, 1655906435, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/chi-tiet/water-resistant-backpack.html'),
(345, 1655906490, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/chi-tiet/water-resistant-backpack.html'),
(346, 1655907077, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/chi-tiet/water-resistant-backpack.html'),
(347, 1655907253, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/chi-tiet/water-resistant-backpack.html'),
(348, 1655907884, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/chi-tiet/water-resistant-backpack.html'),
(349, 1655908006, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/chi-tiet/water-resistant-backpack.html'),
(350, 1655908085, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/chi-tiet/water-resistant-backpack.html'),
(351, 1655908105, '127.0.0.1', 'http://127.0.0.1:8403/lien-he.html', 0, 'http://127.0.0.1:8403/'),
(352, 1655908107, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/chi-tiet/water-resistant-backpack.html'),
(353, 1655908235, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/'),
(354, 1655908247, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/tin-tuc.html', 0, ''),
(355, 1655908263, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, ''),
(356, 1655908317, '127.0.0.1', 'http://127.0.0.1:8403/bo-suu-tap.html', 0, ''),
(357, 1655908322, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, ''),
(358, 1655908381, '127.0.0.1', 'http://127.0.0.1:8403/albums.html', 0, ''),
(359, 1655908463, '127.0.0.1', 'http://127.0.0.1:8403/albums.html', 0, ''),
(360, 1655908474, '127.0.0.1', 'http://127.0.0.1:8403/albums.html', 0, ''),
(361, 1655908491, '127.0.0.1', 'http://127.0.0.1:8403/albums.html', 0, ''),
(362, 1655908524, '127.0.0.1', 'http://127.0.0.1:8403/albums.html', 0, ''),
(363, 1655908534, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(364, 1655908545, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(365, 1655908564, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(366, 1655908572, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(367, 1655908586, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(368, 1655908832, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(369, 1655908854, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(370, 1655908902, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(371, 1655908981, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(372, 1655909489, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(373, 1655909491, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/san-pham.html'),
(374, 1655909514, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-paper-one-dl-70-a4.html', 0, 'http://127.0.0.1:8403/'),
(375, 1655909526, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/san-pham.html'),
(376, 1655911613, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/san-pham.html'),
(377, 1655911617, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-photo-a4-indonesia-70gsm-ikplus.html', 0, 'http://127.0.0.1:8403/'),
(378, 1655911625, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(379, 1655911714, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(380, 1655911745, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(381, 1655911878, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(382, 1655911919, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(383, 1655911933, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(384, 1655911944, '127.0.0.1', 'http://127.0.0.1:8403/index.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(385, 1655911949, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/index.html'),
(386, 1655911966, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/index.html'),
(387, 1655912161, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/index.html'),
(388, 1655912370, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/index.html'),
(389, 1655914596, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/index.html'),
(390, 1655914597, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(391, 1655914627, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/index.html'),
(392, 1655914991, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/index.html'),
(393, 1655915030, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/index.html'),
(394, 1655915031, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(395, 1655915080, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/index.html'),
(396, 1655915081, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(397, 1655915143, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/best-seller.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(398, 1655915224, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/best-seller.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(399, 1655915226, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/index.html'),
(400, 1655915227, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(401, 1655915233, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(402, 1655915341, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(403, 1655915342, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(404, 1655915364, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(405, 1655915504, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(406, 1655915638, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(407, 1655915706, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(408, 1655915804, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(409, 1655915805, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(410, 1655915869, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(411, 1655915870, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(412, 1655915888, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(413, 1655915901, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/so-cac-loai.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(414, 1655915909, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(415, 1655915910, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(416, 1655915912, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/best-seller.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(417, 1655915960, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(418, 1655915961, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(419, 1655915962, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(420, 1655915967, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(421, 1655915969, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(422, 1655915970, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(423, 1655917308, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(424, 1655917411, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(425, 1655917421, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(426, 1655917422, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(427, 1655917711, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(428, 1655917712, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(429, 1655918083, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(430, 1655918084, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(431, 1655918151, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(432, 1655918152, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(433, 1655918170, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(434, 1655918171, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(435, 1655918204, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(436, 1655918205, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(437, 1655918232, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(438, 1655918244, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(439, 1655918245, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(440, 1655918258, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(441, 1655918270, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(442, 1655918271, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(443, 1655918272, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/but-bi-ben-nghe-l28.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(444, 1655918277, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(445, 1655918383, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(446, 1655918411, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(447, 1655918512, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(448, 1655918570, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(449, 1655918571, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(450, 1655918651, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(451, 1655918808, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(452, 1655950786, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(453, 1655950806, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(454, 1655950807, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(455, 1655960077, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(456, 1655960078, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(457, 1655960081, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/so-cac-loai.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(458, 1655960082, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/so-cac-loai.html', 0, 'http://127.0.0.1:8403/san-pham/so-cac-loai.html'),
(459, 1655960086, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/best-seller.html', 0, 'http://127.0.0.1:8403/san-pham/so-cac-loai.html'),
(460, 1655960089, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/quan.html', 0, 'http://127.0.0.1:8403/san-pham/best-seller.html'),
(461, 1655960098, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/quan-sooc.html', 0, 'http://127.0.0.1:8403/san-pham/quan.html'),
(462, 1655960101, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/chan-vay.html', 0, 'http://127.0.0.1:8403/san-pham/quan-sooc.html'),
(463, 1655960104, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/jumpsuit.html', 0, 'http://127.0.0.1:8403/san-pham/chan-vay.html'),
(464, 1655960106, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/vay.html', 0, 'http://127.0.0.1:8403/san-pham/jumpsuit.html'),
(465, 1655960107, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/vay.html', 0, 'http://127.0.0.1:8403/san-pham/vay.html'),
(466, 1655960113, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/outlet-ao-khoac.html', 0, 'http://127.0.0.1:8403/san-pham/vay.html'),
(467, 1655960118, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/outlet-vay.html', 0, 'http://127.0.0.1:8403/san-pham/outlet-ao-khoac.html'),
(468, 1655960125, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/outlet-quan.html', 0, 'http://127.0.0.1:8403/san-pham/outlet-vay.html'),
(469, 1655960134, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/vay.html', 0, 'http://127.0.0.1:8403/san-pham/outlet-quan.html'),
(470, 1655970968, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/vay.html', 0, 'http://127.0.0.1:8403/san-pham/outlet-quan.html'),
(471, 1655970969, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/vay.html', 0, 'http://127.0.0.1:8403/san-pham/vay.html'),
(472, 1655972849, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/outlet-quan.html', 0, 'http://127.0.0.1:8403/san-pham/outlet-vay.html'),
(473, 1655972853, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/outlet-quan.html', 0, ''),
(474, 1655973512, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(475, 1655973513, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(476, 1655973531, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(477, 1655973532, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(478, 1655973901, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(479, 1655973974, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(480, 1655973975, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(481, 1655974000, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(482, 1655974058, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(483, 1655974224, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/contrasting-sunglasses.html', 0, 'http://127.0.0.1:8403/'),
(484, 1655974226, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(485, 1655974242, '127.0.0.1', 'http://127.0.0.1:8403/lien-he.html', 0, 'http://127.0.0.1:8403/'),
(486, 1655974244, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(487, 1655974286, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(488, 1655974708, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/'),
(489, 1655974740, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(490, 1655974742, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(491, 1655975095, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(492, 1655975096, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(493, 1655975368, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, '');
INSERT INTO `e4_counter_visited` (`id`, `timestamp`, `ip`, `url`, `user_id`, `referer_url`) VALUES
(494, 1655975369, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(495, 1655975397, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(496, 1655975398, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(497, 1655975429, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(498, 1655975430, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(499, 1655975597, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(500, 1655975598, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(501, 1655975811, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(502, 1655975812, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(503, 1655975971, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(504, 1655975972, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(505, 1655976449, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(506, 1655976450, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(507, 1655976479, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(508, 1655976509, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(509, 1655976542, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(510, 1655976551, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(511, 1655976579, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(512, 1655976580, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(513, 1655976599, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(514, 1655976645, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(515, 1655976770, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(516, 1655976814, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(517, 1655976815, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(518, 1655976839, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(519, 1655976945, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(520, 1655976971, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(521, 1655976987, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(522, 1655976988, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(523, 1655977045, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(524, 1655977046, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(525, 1655977117, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(526, 1655977155, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(527, 1655977156, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(528, 1655977215, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(529, 1655977216, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(530, 1655977234, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(531, 1655977235, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(532, 1655977252, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(533, 1655977253, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(534, 1655977272, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(535, 1655977347, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(536, 1655977367, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(537, 1655977628, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(538, 1655978007, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(539, 1655978034, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(540, 1655978035, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(541, 1655978099, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(542, 1655978100, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(543, 1655978103, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html?keysearchC%C3%B4ng', 0, 'http://127.0.0.1:8403/san-pham.html'),
(544, 1655978104, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html?keysearchC%C3%B4ng', 0, 'http://127.0.0.1:8403/san-pham.html?keysearchC%C3%B4ng'),
(545, 1655978111, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(546, 1655978319, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html?keysearch=Gi%E1%BA%A5y', 0, 'http://127.0.0.1:8403/san-pham.html'),
(547, 1655978320, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html?keysearch=Gi%E1%BA%A5y', 0, 'http://127.0.0.1:8403/san-pham.html?keysearch=Gi%E1%BA%A5y'),
(548, 1655978393, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html?keysearch=Gi%E1%BA%A5y', 0, ''),
(549, 1655978443, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html?keysearch=Gi%E1%BA%A5y', 0, ''),
(550, 1655978495, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html?keysearch=Gi%E1%BA%A5y', 0, ''),
(551, 1655978632, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html?keysearch=Gi%E1%BA%A5y', 0, ''),
(552, 1655978694, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html?keysearch=Gi%E1%BA%A5y', 0, ''),
(553, 1655978695, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html?keysearch=Gi%E1%BA%A5y', 0, 'http://127.0.0.1:8403/san-pham.html?keysearch=Gi%E1%BA%A5y'),
(554, 1655978751, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html?keysearch=Gi%E1%BA%A5y', 0, ''),
(555, 1655978752, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html?keysearch=Gi%E1%BA%A5y', 0, 'http://127.0.0.1:8403/san-pham.html?keysearch=Gi%E1%BA%A5y'),
(556, 1655978787, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html?keysearch=Gi%E1%BA%A5y', 0, ''),
(557, 1655978788, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html?keysearch=Gi%E1%BA%A5y', 0, 'http://127.0.0.1:8403/san-pham.html?keysearch=Gi%E1%BA%A5y'),
(558, 1655978798, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html?keysearch=a3', 0, ''),
(559, 1655978799, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html?keysearch=a3', 0, 'http://127.0.0.1:8403/san-pham.html?keysearch=a3'),
(560, 1655979039, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html?keysearch=a3', 0, ''),
(561, 1655979044, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html?keysearch=a3'),
(562, 1655979087, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html?keysearch=a3'),
(563, 1655979090, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(564, 1655979091, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(565, 1655979134, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(566, 1655979135, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(567, 1655979139, '127.0.0.1', 'http://127.0.0.1:8403/index.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(568, 1655979158, '127.0.0.1', 'http://127.0.0.1:8403/index.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(569, 1655979175, '127.0.0.1', 'http://127.0.0.1:8403/index.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(570, 1655979202, '127.0.0.1', 'http://127.0.0.1:8403/index.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(571, 1655979210, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/index.html'),
(572, 1655979253, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(573, 1655979259, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(574, 1655979394, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(575, 1655979403, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(576, 1655979437, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(577, 1655979438, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(578, 1655979443, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(579, 1655979831, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, ''),
(580, 1655979832, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(581, 1655979862, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(582, 1655980832, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/best-seller.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(583, 1655980834, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/so-cac-loai.html', 0, 'http://127.0.0.1:8403/san-pham/best-seller.html'),
(584, 1655980835, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/so-cac-loai.html', 0, 'http://127.0.0.1:8403/san-pham/so-cac-loai.html'),
(585, 1655980837, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/ao.html', 0, 'http://127.0.0.1:8403/san-pham/so-cac-loai.html'),
(586, 1655980839, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/vay.html', 0, 'http://127.0.0.1:8403/san-pham/ao.html'),
(587, 1655980840, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/vay.html', 0, 'http://127.0.0.1:8403/san-pham/vay.html'),
(588, 1655980842, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/quan-sooc.html', 0, 'http://127.0.0.1:8403/san-pham/vay.html'),
(589, 1655980844, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/chan-vay.html', 0, 'http://127.0.0.1:8403/san-pham/quan-sooc.html'),
(590, 1655980847, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/jumpsuit.html', 0, 'http://127.0.0.1:8403/san-pham/chan-vay.html'),
(591, 1655980853, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/outlet-ao.html', 0, 'http://127.0.0.1:8403/san-pham/jumpsuit.html'),
(592, 1655980855, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/outlet-ao-khoac.html', 0, 'http://127.0.0.1:8403/san-pham/outlet-ao.html'),
(593, 1655980859, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/vay.html', 0, 'http://127.0.0.1:8403/san-pham/outlet-ao-khoac.html'),
(594, 1655980971, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/vay.html', 0, 'http://127.0.0.1:8403/san-pham/outlet-ao-khoac.html'),
(595, 1655980985, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/quan-sooc.html', 0, 'http://127.0.0.1:8403/san-pham/vay.html'),
(596, 1655980987, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/vay.html', 0, 'http://127.0.0.1:8403/san-pham/quan-sooc.html'),
(597, 1655981050, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/vay.html', 0, 'http://127.0.0.1:8403/san-pham/quan-sooc.html'),
(598, 1655981059, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/vay.html', 0, 'http://127.0.0.1:8403/san-pham/quan-sooc.html'),
(599, 1655981060, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/vay.html', 0, 'http://127.0.0.1:8403/san-pham/vay.html'),
(600, 1655981117, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/vay.html', 0, 'http://127.0.0.1:8403/san-pham/quan-sooc.html'),
(601, 1655981222, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(602, 1655981223, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(603, 1655981231, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/vay.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(604, 1655981421, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/vay.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(605, 1655981664, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/vay.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(606, 1655981746, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/vay.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(607, 1655981936, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/vay.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(608, 1655981984, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/vay.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(609, 1655981994, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, 'http://127.0.0.1:8403/san-pham/vay.html'),
(610, 1655982005, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(611, 1655982011, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/'),
(612, 1655982018, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/quan-sooc.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(613, 1655982022, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/ao.html', 0, 'http://127.0.0.1:8403/san-pham/quan-sooc.html'),
(614, 1655982031, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/ao.html', 0, 'http://127.0.0.1:8403/san-pham/quan-sooc.html'),
(615, 1655982059, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/ao.html', 0, 'http://127.0.0.1:8403/san-pham/quan-sooc.html'),
(616, 1655982060, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/ao.html', 0, 'http://127.0.0.1:8403/san-pham/ao.html'),
(617, 1655982070, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/ao.html', 0, ''),
(618, 1655982071, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/ao.html', 0, 'http://127.0.0.1:8403/san-pham/ao.html'),
(619, 1655982099, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/ao.html', 0, ''),
(620, 1655982100, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/ao.html', 0, 'http://127.0.0.1:8403/san-pham/ao.html'),
(621, 1655982114, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, 'http://127.0.0.1:8403/san-pham/ao.html'),
(622, 1656002846, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(623, 1656003909, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, 'http://127.0.0.1:8403/'),
(624, 1656003922, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, 'http://127.0.0.1:8403/'),
(625, 1656003986, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, 'http://127.0.0.1:8403/'),
(626, 1656004040, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, 'http://127.0.0.1:8403/'),
(627, 1656004134, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, 'http://127.0.0.1:8403/'),
(628, 1656004477, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, 'http://127.0.0.1:8403/'),
(629, 1656004696, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, 'http://127.0.0.1:8403/'),
(630, 1656004826, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, 'http://127.0.0.1:8403/'),
(631, 1656004861, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, 'http://127.0.0.1:8403/'),
(632, 1656005119, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, 'http://127.0.0.1:8403/'),
(633, 1656005214, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, 'http://127.0.0.1:8403/'),
(634, 1656005425, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, 'http://127.0.0.1:8403/'),
(635, 1656005863, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, 'http://127.0.0.1:8403/'),
(636, 1656005973, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, 'http://127.0.0.1:8403/'),
(637, 1656006133, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, 'http://127.0.0.1:8403/'),
(638, 1656006297, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, 'http://127.0.0.1:8403/'),
(639, 1656006329, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, 'http://127.0.0.1:8403/'),
(640, 1656006393, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, 'http://127.0.0.1:8403/'),
(641, 1656006780, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, 'http://127.0.0.1:8403/'),
(642, 1656006971, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html?curPg=2&', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(643, 1656007228, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html?curPg=2&', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(644, 1656007260, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html?curPg=2&', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(645, 1656007306, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html?curPg=2&', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(646, 1656007333, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html?curPg=2&', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(647, 1656007346, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html?curPg=2&', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(648, 1656007389, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html?curPg=2&', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(649, 1656007394, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html?curPg=1&', 0, 'http://127.0.0.1:8403/tin-tuc.html?curPg=2&'),
(650, 1656007402, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html?curPg=3&', 0, 'http://127.0.0.1:8403/tin-tuc.html?curPg=1&'),
(651, 1656007934, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html?curPg=3&', 0, 'http://127.0.0.1:8403/tin-tuc.html?curPg=1&'),
(652, 1656007939, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html?curPg=3&', 0, ''),
(653, 1656007947, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/magazine.html', 0, 'http://127.0.0.1:8403/tin-tuc.html?curPg=3&'),
(654, 1656007948, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/magazine.html', 0, 'http://127.0.0.1:8403/san-pham/magazine.html'),
(655, 1656007996, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html?curPg=3&', 0, ''),
(656, 1656008000, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html?curPg=3&', 0, ''),
(657, 1656008001, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/gioi-thieu.html', 0, 'http://127.0.0.1:8403/tin-tuc.html?curPg=3&'),
(658, 1656008007, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/magazine.html', 0, 'http://127.0.0.1:8403/tin-tuc/gioi-thieu.html'),
(659, 1656008009, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/su-kien.html', 0, 'http://127.0.0.1:8403/tin-tuc/magazine.html'),
(660, 1656008057, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/su-kien.html', 0, 'http://127.0.0.1:8403/tin-tuc/magazine.html'),
(661, 1656008098, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/su-kien.html', 0, 'http://127.0.0.1:8403/tin-tuc/magazine.html'),
(662, 1656008124, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/su-kien.html', 0, 'http://127.0.0.1:8403/tin-tuc/magazine.html'),
(663, 1656008243, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/su-kien.html', 0, 'http://127.0.0.1:8403/tin-tuc/magazine.html'),
(664, 1656008246, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/magazine.html', 0, 'http://127.0.0.1:8403/tin-tuc/su-kien.html'),
(665, 1656008247, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/gioi-thieu.html', 0, 'http://127.0.0.1:8403/tin-tuc/magazine.html'),
(666, 1656008249, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/blog.html', 0, 'http://127.0.0.1:8403/tin-tuc/gioi-thieu.html'),
(667, 1656008250, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/ao-dai.html', 0, 'http://127.0.0.1:8403/tin-tuc/blog.html'),
(668, 1656008251, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/su-kien.html', 0, 'http://127.0.0.1:8403/tin-tuc/ao-dai.html'),
(669, 1656008484, '127.0.0.1', 'http://127.0.0.1:8403/albums.html', 0, ''),
(670, 1656008579, '127.0.0.1', 'http://127.0.0.1:8403/albums.html', 0, ''),
(671, 1656008694, '127.0.0.1', 'http://127.0.0.1:8403/albums.html', 0, ''),
(672, 1656008883, '127.0.0.1', 'http://127.0.0.1:8403/albums.html', 0, ''),
(673, 1656008978, '127.0.0.1', 'http://127.0.0.1:8403/albums.html', 0, ''),
(674, 1656009049, '127.0.0.1', 'http://127.0.0.1:8403/albums.html', 0, ''),
(675, 1656009062, '127.0.0.1', 'http://127.0.0.1:8403/albums.html', 0, ''),
(676, 1656009088, '127.0.0.1', 'http://127.0.0.1:8403/albums.html', 0, ''),
(677, 1656009157, '127.0.0.1', 'http://127.0.0.1:8403/albums.html', 0, ''),
(678, 1656009605, '127.0.0.1', 'http://127.0.0.1:8403/albums.html', 0, ''),
(679, 1656009635, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/bo-suu-tap-2.html', 0, 'http://127.0.0.1:8403/albums.html'),
(680, 1656009638, '127.0.0.1', 'http://127.0.0.1:8403/albums.html', 0, ''),
(681, 1656009733, '127.0.0.1', 'http://127.0.0.1:8403/albums.html', 0, ''),
(682, 1656009763, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, 'http://127.0.0.1:8403/albums.html'),
(683, 1656009769, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/huong-dan-dat-hang-tren-website-d-chic.html', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(684, 1656009776, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, 'http://127.0.0.1:8403/albums.html'),
(685, 1656009839, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/magazine.html', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(686, 1656009857, '127.0.0.1', 'http://127.0.0.1:8403/albums.html', 0, ''),
(687, 1656009858, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/bo-suu-tap-2.html', 0, 'http://127.0.0.1:8403/albums.html'),
(688, 1656009919, '127.0.0.1', 'http://127.0.0.1:8403/albums.html', 0, ''),
(689, 1656010106, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, 'http://127.0.0.1:8403/albums.html'),
(690, 1656010108, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/huong-dan-dat-hang-tren-website-d-chic.html', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(691, 1656010185, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/huong-dan-dat-hang-tren-website-d-chic.html', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(692, 1656010335, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/huong-dan-dat-hang-tren-website-d-chic.html', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(693, 1656010358, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/huong-dan-dat-hang-tren-website-d-chic.html', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(694, 1656010389, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/huong-dan-dat-hang-tren-website-d-chic.html', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(695, 1656010421, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/huong-dan-dat-hang-tren-website-d-chic.html', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(696, 1656010424, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/huong-dan-dat-hang-tren-website-d-chic.html', 0, ''),
(697, 1656010435, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/huong-dan-dat-hang-tren-website-d-chic.html', 0, ''),
(698, 1656010456, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/huong-dan-dat-hang-tren-website-d-chic.html', 0, ''),
(699, 1656010526, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/huong-dan-dat-hang-tren-website-d-chic.html', 0, ''),
(700, 1656010578, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/huong-dan-dat-hang-tren-website-d-chic.html', 0, ''),
(701, 1656010662, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/huong-dan-dat-hang-tren-website-d-chic.html', 0, ''),
(702, 1656010708, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/huong-dan-dat-hang-tren-website-d-chic.html', 0, ''),
(703, 1656010729, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/huong-dan-dat-hang-tren-website-d-chic.html', 0, ''),
(704, 1656010917, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/huong-dan-dat-hang-tren-website-d-chic.html', 0, ''),
(705, 1656010998, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/huong-dan-dat-hang-tren-website-d-chic.html', 0, ''),
(706, 1656011024, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/huong-dan-dat-hang-tren-website-d-chic.html', 0, ''),
(707, 1656011163, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/huong-dan-dat-hang-tren-website-d-chic.html', 0, ''),
(708, 1656011200, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/huong-dan-dat-hang-tren-website-d-chic.html', 0, ''),
(709, 1656011423, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/huong-dan-dat-hang-tren-website-d-chic.html', 0, ''),
(710, 1656011502, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/huong-dan-dat-hang-tren-website-d-chic.html', 0, ''),
(711, 1656011600, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/huong-dan-dat-hang-tren-website-d-chic.html', 0, ''),
(712, 1656011627, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/huong-dan-dat-hang-tren-website-d-chic.html', 0, ''),
(713, 1656011905, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/chi-tiet/huong-dan-dat-hang-tren-website-d-chic.html'),
(714, 1656011906, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(715, 1656011907, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(716, 1656012285, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(717, 1656012694, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(718, 1656012726, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/chi-tiet/huong-dan-dat-hang-tren-website-d-chic.html'),
(719, 1656012730, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(720, 1656013455, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(721, 1656013495, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, ''),
(722, 1656013501, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, ''),
(723, 1656013565, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, ''),
(724, 1656013690, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, ''),
(725, 1656013721, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, ''),
(726, 1656013801, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, ''),
(727, 1656013879, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, ''),
(728, 1656013973, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, ''),
(729, 1656014000, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, ''),
(730, 1656014474, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, ''),
(731, 1656014487, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, ''),
(732, 1656014499, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, ''),
(733, 1656014574, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, ''),
(734, 1656015368, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, ''),
(735, 1656015379, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, ''),
(736, 1656015421, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, ''),
(737, 1656015588, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, ''),
(738, 1656015826, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, ''),
(739, 1656015836, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, ''),
(740, 1656015873, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, ''),
(741, 1656015972, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, ''),
(742, 1656016012, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, ''),
(743, 1656016018, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, ''),
(744, 1656016148, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, ''),
(745, 1656016164, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, ''),
(746, 1656016180, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, ''),
(747, 1656016688, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, ''),
(748, 1656016860, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, ''),
(749, 1656016904, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, ''),
(750, 1656016937, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, ''),
(751, 1656017176, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, ''),
(752, 1656017193, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, ''),
(753, 1656017314, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, ''),
(754, 1656017327, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, ''),
(755, 1656017517, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, ''),
(756, 1656036065, '127.0.0.1', 'http://127.0.0.1:8403/', 0, ''),
(757, 1656036073, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/'),
(758, 1656036074, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(759, 1656036726, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(760, 1656036957, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(761, 1656037127, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(762, 1656037156, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(763, 1656037182, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(764, 1656037230, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(765, 1656037264, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(766, 1656037312, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(767, 1656037477, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(768, 1656037530, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(769, 1656037768, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(770, 1656037850, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(771, 1656037902, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(772, 1656037942, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(773, 1656038053, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(774, 1656038123, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(775, 1656038142, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(776, 1656038215, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(777, 1656038230, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(778, 1656038324, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(779, 1656038354, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(780, 1656038428, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(781, 1656038485, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(782, 1656038504, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(783, 1656038534, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/giay-in-a4-double-dl-70.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(784, 1656039053, '127.0.0.1', 'http://127.0.0.1:8403/albums.html', 0, ''),
(785, 1656039054, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/bo-suu-tap-2.html', 0, 'http://127.0.0.1:8403/albums.html'),
(786, 1656039123, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/bo-suu-tap-2.html', 0, 'http://127.0.0.1:8403/albums.html'),
(787, 1656039150, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/bo-suu-tap-2.html', 0, 'http://127.0.0.1:8403/albums.html'),
(788, 1656039214, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/bo-suu-tap-2.html', 0, 'http://127.0.0.1:8403/albums.html'),
(789, 1656039271, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/bo-suu-tap-2.html', 0, 'http://127.0.0.1:8403/albums.html'),
(790, 1656039459, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/bo-suu-tap-2.html', 0, ''),
(791, 1656039744, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/bo-suu-tap-2.html', 0, ''),
(792, 1656039843, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/bo-suu-tap-2.html', 0, ''),
(793, 1656040299, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/bo-suu-tap-2.html', 0, ''),
(794, 1656040310, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/bo-suu-tap-2.html', 0, ''),
(795, 1656040312, '127.0.0.1', 'http://127.0.0.1:8403/albums.html', 0, ''),
(796, 1656040327, '127.0.0.1', 'http://127.0.0.1:8403/albums.html', 0, ''),
(797, 1656040329, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/-.html', 0, 'http://127.0.0.1:8403/albums.html'),
(798, 1656040537, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/-.html', 0, 'http://127.0.0.1:8403/albums.html'),
(799, 1656041130, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/-.html', 0, 'http://127.0.0.1:8403/albums.html'),
(800, 1656041191, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/-.html', 0, 'http://127.0.0.1:8403/albums.html'),
(801, 1656041321, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/-.html', 0, 'http://127.0.0.1:8403/albums.html'),
(802, 1656041456, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/-.html', 0, 'http://127.0.0.1:8403/albums.html'),
(803, 1656041466, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/-.html', 0, 'http://127.0.0.1:8403/albums.html'),
(804, 1656041751, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/-.html', 0, 'http://127.0.0.1:8403/albums.html'),
(805, 1656041843, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/-.html', 0, 'http://127.0.0.1:8403/albums.html'),
(806, 1656041872, '127.0.0.1', 'http://127.0.0.1:8403/albums.html', 0, ''),
(807, 1656042243, '127.0.0.1', 'http://127.0.0.1:8403/albums.html', 0, ''),
(808, 1656042246, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/bo-suu-tap-2.html', 0, 'http://127.0.0.1:8403/albums.html'),
(809, 1656042409, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/bo-suu-tap-2.html', 0, 'http://127.0.0.1:8403/albums.html'),
(810, 1656042487, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/bo-suu-tap-2.html', 0, 'http://127.0.0.1:8403/albums.html'),
(811, 1656042512, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/bo-suu-tap-2.html', 0, 'http://127.0.0.1:8403/albums.html'),
(812, 1656042518, '127.0.0.1', 'http://127.0.0.1:8403/bo-suu-tap/-216120.html', 0, 'http://127.0.0.1:8403/chi-tiet/bo-suu-tap-2.html'),
(813, 1656042519, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/bo-suu-tap-2.html', 0, 'http://127.0.0.1:8403/albums.html'),
(814, 1656042590, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/bo-suu-tap-2.html', 0, 'http://127.0.0.1:8403/albums.html'),
(815, 1656042605, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/bo-suu-tap-2.html', 0, 'http://127.0.0.1:8403/albums.html'),
(816, 1656042608, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/bo-suu-tap-2.html', 0, ''),
(817, 1656042625, '127.0.0.1', 'http://127.0.0.1:8403/albums/-.html', 0, ''),
(818, 1656042632, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/bo-suu-tap-2.html', 0, ''),
(819, 1656042634, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/bo-suu-tap-2.html', 0, ''),
(820, 1656042643, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/bo-suu-tap-2.html', 0, ''),
(821, 1656042645, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/-.html', 0, 'http://127.0.0.1:8403/chi-tiet/bo-suu-tap-2.html'),
(822, 1656043134, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, 'http://127.0.0.1:8403/chi-tiet/-.html'),
(823, 1656043137, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/gioi-thieu.html', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(824, 1656043142, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, 'http://127.0.0.1:8403/chi-tiet/-.html'),
(825, 1656043148, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/gioi-thieu.html', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(826, 1656043150, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, 'http://127.0.0.1:8403/chi-tiet/-.html'),
(827, 1656043176, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/gioi-thieu.html', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(828, 1656043179, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, 'http://127.0.0.1:8403/chi-tiet/-.html'),
(829, 1656043186, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, 'http://127.0.0.1:8403/chi-tiet/-.html'),
(830, 1656043188, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/blog.html', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(831, 1656043190, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, 'http://127.0.0.1:8403/chi-tiet/-.html'),
(832, 1656043240, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/gioi-thieu.html', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(833, 1656043245, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, 'http://127.0.0.1:8403/chi-tiet/-.html'),
(834, 1656043278, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/gioi-thieu.html', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(835, 1656043280, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, 'http://127.0.0.1:8403/chi-tiet/-.html'),
(836, 1656043319, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/gioi-thieu.html', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(837, 1656043457, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, 'http://127.0.0.1:8403/chi-tiet/-.html'),
(838, 1656043515, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, 'http://127.0.0.1:8403/chi-tiet/-.html'),
(839, 1656043519, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/ve-chung-toi-emac.html', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(840, 1656043671, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/ve-chung-toi-emac.html', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(841, 1656043681, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/ve-chung-toi-emac.html', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(842, 1656043691, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/ve-chung-toi-emac.html', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(843, 1656043728, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/ve-chung-toi-emac.html', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(844, 1656043730, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/gioi-thieu.html', 0, 'http://127.0.0.1:8403/chi-tiet/ve-chung-toi-emac.html'),
(845, 1656043734, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/ve-chung-toi-emac.html', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(846, 1656043748, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/ve-chung-toi-emac.html', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(847, 1656043884, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/ve-chung-toi-emac.html', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(848, 1656043922, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/lien-he.html', 0, 'http://127.0.0.1:8403/chi-tiet/ve-chung-toi-emac.html'),
(849, 1656043924, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/ve-chung-toi-emac.html', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(850, 1656043940, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/index.html', 0, 'http://127.0.0.1:8403/chi-tiet/ve-chung-toi-emac.html'),
(851, 1656043941, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/ve-chung-toi-emac.html', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(852, 1656043996, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/ve-chung-toi-emac.html', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(853, 1656043998, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/chi-tiet/ve-chung-toi-emac.html'),
(854, 1656044134, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/chi-tiet/ve-chung-toi-emac.html'),
(855, 1656044141, '127.0.0.1', 'http://127.0.0.1:8403/lien-he.html', 0, 'http://127.0.0.1:8403/'),
(856, 1656044360, '127.0.0.1', 'http://127.0.0.1:8403/lien-he.html', 0, 'http://127.0.0.1:8403/'),
(857, 1656044380, '127.0.0.1', 'http://127.0.0.1:8403/lien-he.html', 0, 'http://127.0.0.1:8403/'),
(858, 1656045183, '127.0.0.1', 'http://127.0.0.1:8403/lien-he.html', 0, 'http://127.0.0.1:8403/'),
(859, 1656045363, '127.0.0.1', 'http://127.0.0.1:8403/lien-he.html', 0, ''),
(860, 1656045628, '127.0.0.1', 'http://127.0.0.1:8403/lien-he.html', 0, ''),
(861, 1656045647, '127.0.0.1', 'http://127.0.0.1:8403/lien-he.html', 0, ''),
(862, 1656045722, '127.0.0.1', 'http://127.0.0.1:8403/lien-he.html', 0, ''),
(863, 1656045730, '127.0.0.1', 'http://127.0.0.1:8403/lien-he.html', 0, ''),
(864, 1656045801, '127.0.0.1', 'http://127.0.0.1:8403/lien-he.html', 0, ''),
(865, 1656045849, '127.0.0.1', 'http://127.0.0.1:8403/lien-he.html', 0, ''),
(866, 1656046004, '127.0.0.1', 'http://127.0.0.1:8403/lien-he.html', 0, ''),
(867, 1656046048, '127.0.0.1', 'http://127.0.0.1:8403/lien-he.html', 0, ''),
(868, 1656046115, '127.0.0.1', 'http://127.0.0.1:8403/lien-he.html', 0, ''),
(869, 1656046119, '127.0.0.1', 'http://127.0.0.1:8403/lien-he.html', 0, 'http://127.0.0.1:8403/lien-he.html'),
(870, 1656046188, '127.0.0.1', 'http://127.0.0.1:8403/lien-he.html', 0, 'http://127.0.0.1:8403/lien-he.html'),
(871, 1656046190, '127.0.0.1', 'http://127.0.0.1:8403/lien-he.html', 0, 'http://127.0.0.1:8403/lien-he.html'),
(872, 1656046342, '127.0.0.1', 'http://127.0.0.1:8403/lien-he.html', 0, 'http://127.0.0.1:8403/lien-he.html'),
(873, 1656046370, '127.0.0.1', 'http://127.0.0.1:8403/lien-he.html', 0, 'http://127.0.0.1:8403/lien-he.html'),
(874, 1656046409, '127.0.0.1', 'http://127.0.0.1:8403/lien-he.html', 0, 'http://127.0.0.1:8403/lien-he.html'),
(875, 1656046503, '127.0.0.1', 'http://127.0.0.1:8403/lien-he.html', 0, 'http://127.0.0.1:8403/lien-he.html'),
(876, 1656046520, '127.0.0.1', 'http://127.0.0.1:8403/lien-he.html', 0, 'http://127.0.0.1:8403/lien-he.html'),
(877, 1656046548, '127.0.0.1', 'http://127.0.0.1:8403/lien-he.html', 0, 'http://127.0.0.1:8403/lien-he.html'),
(878, 1656046561, '127.0.0.1', 'http://127.0.0.1:8403/lien-he.html', 0, 'http://127.0.0.1:8403/lien-he.html'),
(879, 1656046565, '127.0.0.1', 'http://127.0.0.1:8403/trang-chu.html', 0, 'http://127.0.0.1:8403/lien-he.html'),
(880, 1656047000, '127.0.0.1', 'http://127.0.0.1:8403/trang-chu.html', 0, 'http://127.0.0.1:8403/lien-he.html'),
(881, 1656047007, '127.0.0.1', 'http://127.0.0.1:8403/albums.html', 0, 'http://127.0.0.1:8403/trang-chu.html'),
(882, 1656047490, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, 'http://127.0.0.1:8403/albums.html'),
(883, 1656047502, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/gioi-thieu.html', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(884, 1656047506, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/magazine.html', 0, 'http://127.0.0.1:8403/tin-tuc/gioi-thieu.html'),
(885, 1656047509, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/blog.html', 0, 'http://127.0.0.1:8403/tin-tuc/magazine.html'),
(886, 1656047799, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/blog.html', 0, 'http://127.0.0.1:8403/tin-tuc/magazine.html'),
(887, 1656047880, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/tin-tuc/blog.html'),
(888, 1656047958, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/'),
(889, 1656047990, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/'),
(890, 1656048298, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/'),
(891, 1656048301, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/ao-chiet-eo-co-v-tay-co-phong.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(892, 1656048354, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/ao-chiet-eo-co-v-tay-co-phong.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(893, 1656048405, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/ao-chiet-eo-co-v-tay-co-phong.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(894, 1656048418, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, 'http://127.0.0.1:8403/chi-tiet/ao-chiet-eo-co-v-tay-co-phong.html'),
(895, 1656054734, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(896, 1656054745, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/'),
(897, 1656054746, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(898, 1656054752, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/so-cac-loai.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(899, 1656054753, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/so-cac-loai.html', 0, 'http://127.0.0.1:8403/san-pham/so-cac-loai.html'),
(900, 1656054764, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/vay.html', 0, 'http://127.0.0.1:8403/san-pham/so-cac-loai.html'),
(901, 1656054766, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/ao-chiet-eo-co-v-tay-co-phong.html', 0, 'http://127.0.0.1:8403/san-pham/vay.html'),
(902, 1656054813, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, 'http://127.0.0.1:8403/chi-tiet/ao-chiet-eo-co-v-tay-co-phong.html'),
(903, 1656054818, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/ve-chung-toi-emac.html', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(904, 1656054820, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, 'http://127.0.0.1:8403/chi-tiet/ao-chiet-eo-co-v-tay-co-phong.html'),
(905, 1656054822, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/huong-dan-dat-hang-tren-website-d-chic.html', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(906, 1656054924, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/huong-dan-dat-hang-tren-website-d-chic.html', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(907, 1656054988, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/huong-dan-dat-hang-tren-website-d-chic.html', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(908, 1656054994, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/chi-tiet/huong-dan-dat-hang-tren-website-d-chic.html'),
(909, 1656055115, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(910, 1656055129, '127.0.0.1', 'http://127.0.0.1:8403/lien-he.html', 0, 'http://127.0.0.1:8403/'),
(911, 1656055133, '127.0.0.1', 'http://127.0.0.1:8403/lien-he.html', 0, 'http://127.0.0.1:8403/lien-he.html'),
(912, 1656055135, '127.0.0.1', 'http://127.0.0.1:8403/lien-he.html', 0, 'http://127.0.0.1:8403/lien-he.html'),
(913, 1656055145, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/lien-he.html'),
(914, 1656055169, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(915, 1656055178, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(916, 1656055235, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(917, 1656055236, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(918, 1656055251, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(919, 1656056765, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(920, 1656056930, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(921, 1656056944, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(922, 1656057070, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(923, 1656057536, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(924, 1656057566, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(925, 1656057645, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(926, 1656057700, '127.0.0.1', 'http://127.0.0.1:8403/index.html', 0, 'http://127.0.0.1:8403/'),
(927, 1656057703, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/vat-dung-khac.html', 0, 'http://127.0.0.1:8403/index.html'),
(928, 1656057726, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/vat-dung-khac.html', 0, 'http://127.0.0.1:8403/index.html'),
(929, 1656057729, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/san-pham/vat-dung-khac.html'),
(930, 1656057747, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/san-pham/vat-dung-khac.html'),
(931, 1656057773, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/'),
(932, 1656057774, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(933, 1656057811, '127.0.0.1', 'http://127.0.0.1:8403/lien-he.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(934, 1656057931, '127.0.0.1', 'http://127.0.0.1:8403/lien-he.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(935, 1656057935, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/lien-he.html'),
(936, 1656058083, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/lien-he.html'),
(937, 1656058084, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(938, 1656058257, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(939, 1656058612, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(940, 1656058636, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(941, 1656058805, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(942, 1656058851, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(943, 1656058918, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(944, 1656059046, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(945, 1656059147, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(946, 1656059160, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(947, 1656059233, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(948, 1656059364, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(949, 1656059378, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(950, 1656059403, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(951, 1656059624, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(952, 1656059644, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/'),
(953, 1656059756, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/'),
(954, 1656059757, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(955, 1656059764, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/san-pham.html');
INSERT INTO `e4_counter_visited` (`id`, `timestamp`, `ip`, `url`, `user_id`, `referer_url`) VALUES
(956, 1656059824, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/san-pham.html'),
(957, 1656059832, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/'),
(958, 1656059872, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/san-pham.html'),
(959, 1656059981, '127.0.0.1', 'http://127.0.0.1:8403/index.html', 0, 'http://127.0.0.1:8403/'),
(960, 1656060030, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/index.html'),
(961, 1656060041, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/outlet-ao-khoac.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(962, 1656060042, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/outlet-ao-khoac.html', 0, 'http://127.0.0.1:8403/san-pham/outlet-ao-khoac.html'),
(963, 1656060048, '127.0.0.1', 'http://127.0.0.1:8403/lien-he.html', 0, 'http://127.0.0.1:8403/san-pham/outlet-ao-khoac.html'),
(964, 1656060061, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/vat-dung-khac.html', 0, 'http://127.0.0.1:8403/lien-he.html'),
(965, 1656060062, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/vat-dung-khac.html', 0, 'http://127.0.0.1:8403/san-pham/vat-dung-khac.html'),
(966, 1656060065, '127.0.0.1', 'http://127.0.0.1:8403/huong-dan.html', 0, 'http://127.0.0.1:8403/san-pham/vat-dung-khac.html'),
(967, 1656060068, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/vat-dung-khac.html', 0, 'http://127.0.0.1:8403/lien-he.html'),
(968, 1656060085, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/ve-chung-toi-emac.html', 0, 'http://127.0.0.1:8403/san-pham/vat-dung-khac.html'),
(969, 1656060108, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/chi-tiet/ve-chung-toi-emac.html'),
(970, 1656060132, '127.0.0.1', 'http://127.0.0.1:8403/albums.html', 0, 'http://127.0.0.1:8403/'),
(971, 1656060235, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/albums.html'),
(972, 1656060270, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/ve-chung-toi-emac.html', 0, 'http://127.0.0.1:8403/'),
(973, 1656060288, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/blog.html', 0, 'http://127.0.0.1:8403/chi-tiet/ve-chung-toi-emac.html'),
(974, 1656060298, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/magazine.html', 0, 'http://127.0.0.1:8403/tin-tuc/blog.html'),
(975, 1656060312, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/ao-dai.html', 0, 'http://127.0.0.1:8403/tin-tuc/magazine.html'),
(976, 1656060630, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/ao-dai.html', 0, 'http://127.0.0.1:8403/tin-tuc/magazine.html'),
(977, 1656060634, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/gioi-thieu.html', 0, 'http://127.0.0.1:8403/tin-tuc/ao-dai.html'),
(978, 1656060642, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/chinh-sach-mua-hang-tai-he-thong-d-chic.html', 0, 'http://127.0.0.1:8403/tin-tuc/gioi-thieu.html'),
(979, 1656060691, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/gioi-thieu.html', 0, 'http://127.0.0.1:8403/tin-tuc/ao-dai.html'),
(980, 1656060701, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/chinh-sach-bao-mat-thong-tin-tai-d-chic.html', 0, 'http://127.0.0.1:8403/tin-tuc/gioi-thieu.html'),
(981, 1656060727, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/gioi-thieu.html', 0, 'http://127.0.0.1:8403/tin-tuc/ao-dai.html'),
(982, 1656060730, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/magazine.html', 0, 'http://127.0.0.1:8403/tin-tuc/gioi-thieu.html'),
(983, 1656060731, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/gioi-thieu.html', 0, 'http://127.0.0.1:8403/tin-tuc/magazine.html'),
(984, 1656060760, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/gioi-thieu.html', 0, 'http://127.0.0.1:8403/tin-tuc/magazine.html'),
(985, 1656060764, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/chinh-sach-bao-mat-thong-tin-tai-d-chic.html', 0, 'http://127.0.0.1:8403/tin-tuc/gioi-thieu.html'),
(986, 1656060768, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/gioi-thieu.html', 0, 'http://127.0.0.1:8403/tin-tuc/magazine.html'),
(987, 1656060770, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/gioi-thieu.html', 0, 'http://127.0.0.1:8403/tin-tuc/magazine.html'),
(988, 1656060787, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/gioi-thieu.html', 0, 'http://127.0.0.1:8403/tin-tuc/magazine.html'),
(989, 1656060791, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/chinh-sach-mua-hang-tai-he-thong-d-chic.html', 0, 'http://127.0.0.1:8403/tin-tuc/gioi-thieu.html'),
(990, 1656060830, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/chinh-sach-mua-hang-tai-he-thong-d-chic.html', 0, 'http://127.0.0.1:8403/tin-tuc/gioi-thieu.html'),
(991, 1656060836, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc.html', 0, 'http://127.0.0.1:8403/chi-tiet/chinh-sach-mua-hang-tai-he-thong-d-chic.html'),
(992, 1656060840, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/chinh-sach-mua-hang-tai-he-thong-d-chic.html', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(993, 1656060917, '127.0.0.1', 'http://127.0.0.1:8403/huong-dan.html', 0, 'http://127.0.0.1:8403/chi-tiet/chinh-sach-mua-hang-tai-he-thong-d-chic.html'),
(994, 1656060918, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/chinh-sach-mua-hang-tai-he-thong-d-chic.html', 0, 'http://127.0.0.1:8403/tin-tuc.html'),
(995, 1656060921, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/gioi-thieu.html', 0, 'http://127.0.0.1:8403/chi-tiet/chinh-sach-mua-hang-tai-he-thong-d-chic.html'),
(996, 1656060925, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/huong-dan-dat-hang-tren-website-d-chic.html', 0, 'http://127.0.0.1:8403/tin-tuc/gioi-thieu.html'),
(997, 1656060974, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/gioi-thieu.html', 0, 'http://127.0.0.1:8403/chi-tiet/chinh-sach-mua-hang-tai-he-thong-d-chic.html'),
(998, 1656060975, '127.0.0.1', 'http://127.0.0.1:8403/tin-tuc/gioi-thieu.html', 0, ''),
(999, 1656060976, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/tin-tuc/gioi-thieu.html'),
(1000, 1656060981, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/huong-dan-dat-hang-tren-website-d-chic.html', 0, 'http://127.0.0.1:8403/'),
(1001, 1656060984, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/huong-dan-dat-hang-tren-website-d-chic.html', 0, 'http://127.0.0.1:8403/chi-tiet/huong-dan-dat-hang-tren-website-d-chic.html'),
(1002, 1656060985, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/chi-tiet/huong-dan-dat-hang-tren-website-d-chic.html'),
(1003, 1656061342, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/'),
(1004, 1656061346, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/'),
(1005, 1656061363, '127.0.0.1', 'http://127.0.0.1:8403/san-pham.html', 0, 'http://127.0.0.1:8403/'),
(1006, 1656061367, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/ao.html', 0, 'http://127.0.0.1:8403/san-pham.html'),
(1007, 1656061368, '127.0.0.1', 'http://127.0.0.1:8403/san-pham/ao.html', 0, 'http://127.0.0.1:8403/san-pham/ao.html'),
(1008, 1656061369, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/ao-chiet-eo-co-v-tay-co-phong-2.html', 0, 'http://127.0.0.1:8403/san-pham/ao.html'),
(1009, 1656061483, '127.0.0.1', 'http://127.0.0.1:8403/chi-tiet/ao-chiet-eo-co-v-tay-co-phong-2.html', 0, 'http://127.0.0.1:8403/san-pham/ao.html'),
(1010, 1656061488, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/chi-tiet/ao-chiet-eo-co-v-tay-co-phong-2.html'),
(1011, 1656061811, '127.0.0.1', 'http://127.0.0.1:8403/', 0, 'http://127.0.0.1:8403/chi-tiet/ao-chiet-eo-co-v-tay-co-phong-2.html'),
(1012, 1666627536, '::1', 'http://localhost/dchic/', 0, ''),
(1013, 1666627694, '::1', 'http://localhost/dchic/', 0, ''),
(1014, 1666627792, '127.0.0.1', 'http://127.0.0.1:8400/', 0, ''),
(1015, 1666627798, '127.0.0.1', 'http://127.0.0.1:8400/chi-tiet/huong-dan-dat-hang-tren-website-d-chic.html', 0, 'http://127.0.0.1:8400/'),
(1016, 1666627801, '127.0.0.1', 'http://127.0.0.1:8400/', 0, ''),
(1017, 1666627803, '127.0.0.1', 'http://127.0.0.1:8400/chi-tiet/ao-chiet-eo-co-v-tay-co-phong.html', 0, 'http://127.0.0.1:8400/'),
(1018, 1666627860, '127.0.0.1', 'http://127.0.0.1:8400/check-out.html', 0, ''),
(1019, 1666627862, '127.0.0.1', 'http://127.0.0.1:8400/chi-tiet/ao-chiet-eo-co-v-tay-co-phong.html', 0, 'http://127.0.0.1:8400/'),
(1020, 1666627968, '127.0.0.1', 'http://127.0.0.1:8400/', 0, ''),
(1021, 1666628007, '127.0.0.1', 'http://127.0.0.1:8400/gio-hang.html', 0, ''),
(1022, 1666628010, '127.0.0.1', 'http://127.0.0.1:8400/chi-tiet/ao-chiet-eo-co-v-tay-co-phong.html', 0, 'http://127.0.0.1:8400/'),
(1023, 1666629950, '127.0.0.1', 'http://127.0.0.1:8400/', 0, 'http://127.0.0.1:8400/chi-tiet/ao-chiet-eo-co-v-tay-co-phong.html'),
(1024, 1666714857, '127.0.0.1', 'http://127.0.0.1:8400/', 0, ''),
(1025, 1666752848, '127.0.0.1', 'http://127.0.0.1:8400/', 0, ''),
(1026, 1666753020, '127.0.0.1', 'http://127.0.0.1:8400/', 0, ''),
(1027, 1666753088, '127.0.0.1', 'http://127.0.0.1:8400/', 0, ''),
(1028, 1666753132, '127.0.0.1', 'http://127.0.0.1:8400/', 0, ''),
(1029, 1666753154, '127.0.0.1', 'http://127.0.0.1:8400/', 0, ''),
(1030, 1666753184, '127.0.0.1', 'http://127.0.0.1:8400/', 0, ''),
(1031, 1666759062, '127.0.0.1', 'http://127.0.0.1:8400/', 0, ''),
(1032, 1666759064, '127.0.0.1', 'http://127.0.0.1:8400/', 0, ''),
(1033, 1666795481, '127.0.0.1', 'http://127.0.0.1:8400/', 0, ''),
(1034, 1666840553, '127.0.0.1', 'http://127.0.0.1:8400/', 0, ''),
(1035, 1666840554, '127.0.0.1', 'http://127.0.0.1:8400/', 0, ''),
(1036, 1666944733, '127.0.0.1', 'http://127.0.0.1:8400/', 0, ''),
(1037, 1666944770, '127.0.0.1', 'http://127.0.0.1:8400/', 0, ''),
(1038, 1666952236, '127.0.0.1', 'http://127.0.0.1:8400/', 0, ''),
(1039, 1666952237, '127.0.0.1', 'http://127.0.0.1:8400/', 0, ''),
(1040, 1666973641, '127.0.0.1', 'http://127.0.0.1:8400/', 0, ''),
(1041, 1667017952, '127.0.0.1', 'http://127.0.0.1:8400/', 0, ''),
(1042, 1667030512, '127.0.0.1', 'http://127.0.0.1:8400/', 0, ''),
(1043, 1667030514, '127.0.0.1', 'http://127.0.0.1:8400/', 0, ''),
(1044, 1667052585, '127.0.0.1', 'http://127.0.0.1:8400/', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `e4_danhmucsach`
--

CREATE TABLE `e4_danhmucsach` (
  `id` int(11) NOT NULL,
  `tieude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `e4_danhmucsach`
--

INSERT INTO `e4_danhmucsach` (`id`, `tieude`) VALUES
(2, 'Sách Khoa Học Thế Giới'),
(3, 'Sách Văn Học');

-- --------------------------------------------------------

--
-- Table structure for table `e4_functions`
--

CREATE TABLE `e4_functions` (
  `id` int(10) NOT NULL,
  `function_code` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `function_name` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `module_id` int(5) NOT NULL,
  `date_created` int(20) NOT NULL,
  `user_created` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Danh sach cac function duoc dinh nghia tren he thong admin';

--
-- Dumping data for table `e4_functions`
--

INSERT INTO `e4_functions` (`id`, `function_code`, `function_name`, `module_id`, `date_created`, `user_created`, `status`) VALUES
(1, 'menu_admin_add', 'Thêm mới Menu Admin', 31, 1483898597, '1', 'active'),
(2, 'menu_admin_edit', 'Sửa Menu Admin', 31, 1483898611, '1', 'active'),
(3, 'menu_admin_delete', 'Xóa Menu Admin', 31, 1483898622, '1', 'active'),
(4, 'menu_admin_view', 'Xem danh sách Menu Admin', 31, 1483898634, '1', 'active'),
(5, 'module_add', 'Thêm mới module', 34, 1483898661, '1', 'active'),
(6, 'module_edit', 'Sửa module', 34, 1483898672, '1', 'active'),
(7, 'module_delete', 'Xóa module', 34, 1483898683, '1', 'active'),
(8, 'module_view', 'Xem danh sách module', 34, 1483898693, '1', 'active'),
(9, 'roles_view', 'Xem danh sách nhóm quyền', 46, 1483898712, '1', 'active'),
(10, 'roles_add', 'Thêm mới nhóm quyền', 46, 1483898721, '1', 'active'),
(11, 'roles_edit', 'Sửa nhóm quyền', 46, 1483898731, '1', 'active'),
(12, 'roles_delete', 'Xóa nhóm quyền', 46, 1483898740, '1', 'active'),
(13, 'roles_module_action', 'Phân quyền thao tác chức năng cho nhóm quyền', 46, 1483898754, '1', 'active'),
(14, 'roles_menu_access', 'Phần quyền thao tác menu admin cho nhóm quyền', 46, 1483898762, '1', 'active'),
(15, 'task_add', 'Thêm mới Task', 50, 1483898783, '1', 'active'),
(16, 'task_edit', 'Sửa Task', 50, 1483898790, '1', 'active'),
(17, 'task_delete', 'Xóa Task', 50, 1483898806, '1', 'active'),
(18, 'task_view', 'Xem danh sách task - modules', 50, 1483898826, '1', 'active'),
(19, 'block_add', 'Thêm mới Block', 51, 1483898844, '1', 'active'),
(20, 'block_edit', 'Sửa Block', 51, 1483898853, '1', 'active'),
(21, 'block_delete', 'Xóa Block', 51, 1483898865, '1', 'active'),
(22, 'block_view', 'Xem danh sách Block', 51, 1483898880, '1', 'active'),
(23, 'user_add', 'Thêm mới người dùng', 1, 1483898897, '1', 'active'),
(24, 'user_edit', 'Sửa người dùng', 1, 1483898905, '1', 'active'),
(25, 'user_delete', 'Xóa người dùng', 1, 1483898918, '1', 'active'),
(26, 'user_publish', 'Kích hoạt người dùng', 1, 1483898929, '1', 'active'),
(27, 'user_unpublish', 'Khóa người dùng', 1, 1483898936, '1', 'active'),
(28, 'user_view', 'Xem danh sách người dùng', 1, 1483898945, '1', 'active'),
(29, 'news_add', 'Thêm mới tin tức', 115, 1483898959, '1', 'active'),
(30, 'news_category_add', 'Thêm mới danh mục tin tức', 4, 1483898970, '1', 'active'),
(31, 'news_delete', 'Xóa tin tức', 115, 1483898979, '1', 'active'),
(32, 'news_category_delete', 'Xóa danh mục tin tức', 4, 1483898988, '1', 'active'),
(33, 'news_category_edit', 'Sửa danh mục tin tức', 4, 1483898998, '1', 'active'),
(34, 'news_category_view', 'Xem danh sách danh mục tin tức', 4, 1483899008, '1', 'active'),
(35, 'news_edit', 'Sửa tin tức', 115, 1483899021, '1', 'active'),
(36, 'news_view', 'Xem danh sách tin tức', 115, 1483899032, '1', 'active'),
(37, 'profile_edit', 'Sửa thông tin tài khoản cá nhân', 108, 1483947014, '1', 'active'),
(38, 'profile_change_pass', 'Đổi mật khẩu tài khoản cá nhân', 108, 1483947040, '1', 'active'),
(39, 'product_view', 'Xem danh sách sản phẩm', 109, 1484233794, '1', 'active'),
(40, 'product_add', 'Thêm mới sản phẩm', 109, 1484233825, '1', 'active'),
(41, 'product_edit', 'Sửa sản phẩm', 109, 1484233841, '1', 'active'),
(42, 'product_delete', 'Xóa sản phẩm', 109, 1484233855, '1', 'active'),
(43, 'product_category_add', 'Thêm mới danh mục sản phẩm', 109, 1484233880, '1', 'active'),
(44, 'product_category_edit', 'Sửa danh mục sản phẩm', 109, 1484233901, '1', 'active'),
(45, 'product_category_view', 'Xem danh sách danh mục sản phẩm', 109, 1484233920, '1', 'active'),
(46, 'product_category_delete', 'Xóa danh mục sản phẩm', 109, 1484233942, '1', 'active'),
(51, 'web_menu_add', 'Thêm mới Menu website', 107, 1484681667, '1', 'active'),
(52, 'web_menu_edit', 'Sửa Menu website', 107, 1484681695, '1', 'active'),
(53, 'web_menu_delete', 'Xóa Menu website', 107, 1484681709, '1', 'active'),
(54, 'web_menu_view', 'Xem danh sách Menu website', 107, 1484681722, '1', 'active'),
(55, 'web_home_add', 'Thêm mới nội dung', 111, 1484753712, '1', 'active'),
(56, 'web_home_edit', 'Sửa nội dung', 111, 1484753724, '1', 'active'),
(57, 'web_home_delete', 'Xóa nội dung', 111, 1484753736, '1', 'active'),
(58, 'web_home_view', 'Xem danh sách nội dung', 111, 1484753747, '1', 'active'),
(59, 'web_image_add', 'Thêm mới hình ảnh', 112, 1484761002, '1', 'active'),
(60, 'web_image_edit', 'Sửa hình ảnh', 112, 1484761013, '1', 'active'),
(61, 'web_image_delete', 'Xóa hình ảnh', 112, 1484761023, '1', 'active'),
(62, 'web_image_view', 'Xem danh sách hình ảnh', 112, 1484761035, '1', 'active'),
(63, 'web_branches_add', 'Thêm mới chi nhánh', 114, 1487872320, '1', 'active'),
(64, 'web_branches_delete', 'Xóa thông tin chi nhánh', 114, 1487872338, '1', 'active'),
(65, 'web_branches_edit', 'Sửa thông tin chi nhánh', 114, 1487872352, '1', 'active'),
(66, 'web_information_edit', 'Sửa thông tin website', 114, 1487872371, '1', 'active'),
(67, 'news_group_add', 'Thêm nhóm tin tức', 116, 1595237243, '1', 'active'),
(68, 'news_group_edit', 'Sửa nhóm tin tức', 116, 1595237261, '1', 'active'),
(69, 'news_group_delete', 'Xóa nhóm tin tức', 116, 1595237301, '1', 'active'),
(70, 'news_group_view', 'Xem danh sách nhóm tin tức', 116, 1595237323, '1', 'active'),
(71, 'news_type_edit', 'Sửa loại tin tức', 117, 1595237641, '1', 'active'),
(72, 'news_type_add', 'Thêm loại tin tức', 117, 1595237654, '1', 'active'),
(73, 'news_type_delete', 'Xóa loại tin tức', 117, 1595237673, '1', 'active'),
(74, 'news_type_view', 'Xem danh sách loại tin tức', 117, 1595237694, '1', 'active'),
(76, 'news_topic_add', 'Thêm chuyên đề', 118, 1595237950, '1', 'active'),
(77, 'news_topic_delete', 'Xóa chuyên đề', 118, 1595237962, '1', 'active'),
(78, 'news_topic_edit', 'Sửa chuyên đề', 118, 1595237975, '1', 'active'),
(79, 'news_topic_view', 'Xem danh sách chuyên đề', 118, 1595237990, '1', 'active'),
(80, 'analytics_code_add', 'Thêm mã', 119, 1595491797, '1', 'active'),
(81, 'analytics_code_edit', 'Sửa mã', 119, 1595491809, '1', 'active'),
(82, 'analytics_code_delete', 'Xóa mã', 119, 1595491824, '1', 'active'),
(83, 'analytics_code_view', 'Xem danh sách mã', 119, 1595491869, '1', 'active'),
(84, 'news_tags_add', 'Thêm Tags', 120, 1595917396, '1', 'active'),
(85, 'news_tags_delete', 'Xóa Tags', 120, 1595917413, '1', 'active'),
(86, 'news_tags_edit', 'Sửa Tags', 120, 1595917426, '1', 'active'),
(87, 'news_tags_view', 'Xem danh sách tags', 120, 1595917454, '1', 'active'),
(88, 'product_category_add', 'Thêm danh mục sản phẩm', 122, 1596719752, '1', 'active'),
(89, 'product_category_edit', 'Sửa danh mục sản phẩm', 122, 1596719916, '1', 'active'),
(90, 'product_category_delete', 'Xóa danh mục sản phẩm', 122, 1596720071, '1', 'active'),
(91, 'product_category_view', 'Xem danh mục sản phẩm', 122, 1596720093, '1', 'active'),
(92, 'product_add', 'Thêm mới sản phẩm', 123, 1596720172, '1', 'active'),
(93, 'product_delete', 'Xóa sản phẩm', 123, 1596720186, '1', 'active'),
(94, 'product_edit', 'Sửa sản phẩm', 123, 1596720198, '1', 'active'),
(95, 'product_view', 'Xem danh sách sản phẩm', 123, 1596720212, '1', 'active'),
(96, 'product_group_add', 'Thêm mới nhóm sản phẩm', 126, 1596824838, '1', 'active'),
(97, 'product_group_edit', 'Sửa nhóm sản phẩm', 126, 1596824855, '1', 'active'),
(98, 'product_group_delete', 'Xóa nhóm sản phẩm', 126, 1596824870, '1', 'active'),
(99, 'product_group_view', 'Xem danh sách nhóm sản phẩm', 126, 1596824881, '1', 'active'),
(100, 'product_type_add', 'Thêm mới phân loại sản phẩm', 127, 1596869985, '1', 'active'),
(101, 'product_type_edit', 'Sửa phân loại sản phẩm', 127, 1596870006, '1', 'active'),
(102, 'product_type_delete', 'Xóa phân loại sản phẩm', 127, 1596870022, '1', 'active'),
(103, 'product_type_view', 'Danh sách phân loại sản phẩm', 127, 1596870045, '1', 'active'),
(104, 'cart_view', 'Xem danh sách đơn hàng', 130, 1597135503, '1', 'active'),
(106, 'cart_delete', 'Xóa đơn hàng', 130, 1597135582, '1', 'active'),
(107, 'cart_edit', 'Sửa đơn hàng', 130, 1597135606, '1', 'active'),
(108, 'contact_delete', 'Xóa liên hệ', 132, 1597135899, '1', 'active'),
(109, 'contact_edit', 'Sửa liên hệ', 132, 1597135913, '1', 'active'),
(110, 'contact_view', 'Xem liên hệ', 132, 1597135927, '1', 'active'),
(111, 'contact_newsletter', 'Danh sách nhận bản tin - newsletter', 132, 1597135969, '1', 'active'),
(112, 'book_author_add', 'Thêm mới tác giả', 135, 1597808391, '1', 'active'),
(113, 'book_author_delete', 'Xóa tác giả', 135, 1597808410, '1', 'active'),
(114, 'book_author_edit', 'Sửa thông tin tác giả', 135, 1597808422, '1', 'active'),
(115, 'book_author_view', 'Xem danh sách tác giả', 135, 1597808433, '1', 'active'),
(116, 'book_add', 'Thêm mới sách', 134, 1597808455, '1', 'active'),
(117, 'book_edit', 'Sửa thông tin sách', 134, 1597808467, '1', 'active'),
(118, 'book_delete', 'Xóa sách', 134, 1597808476, '1', 'active'),
(119, 'book_view', 'Xem danh sách ấn phẩm', 134, 1597808487, '1', 'active'),
(120, 'book_category_add', 'Thêm mới danh mục sách', 133, 1597808512, '1', 'active'),
(121, 'book_category_delete', 'Xóa danh mục sách', 133, 1597808524, '1', 'active'),
(122, 'book_category_edit', 'Sửa thông tin danh mục', 133, 1597808536, '1', 'active'),
(123, 'book_category_view', 'Xem danh sách danh mục', 133, 1597808547, '1', 'active'),
(124, 'book_nxb_edit', 'Sửa NXB', 136, 1597819805, '1', 'active'),
(125, 'book_nxb_add', 'Tạo mới NXB', 136, 1597819815, '1', 'active'),
(126, 'book_nxb_delete', 'Xóa MXB', 136, 1597819830, '1', 'active'),
(127, 'book_nxb_view', 'Xem danh sách NXB', 136, 1597819841, '1', 'active'),
(128, 'event_edit', 'Sửa thông tin sự kiện', 137, 1597824811, '1', 'active'),
(129, 'event_add', 'Tạo mới sự kiện', 137, 1597824822, '1', 'active'),
(130, 'event_view', 'Xem danh sách sự kiện', 137, 1597824836, '1', 'active'),
(131, 'event_delete', 'Xóa thông tin sự kiện', 137, 1597824848, '1', 'active'),
(132, 'quotation_add', 'Thêm danh ngôn', 138, 1597828788, '1', 'active'),
(133, 'quotation_delete', 'Xóa danh ngôn', 138, 1597828796, '1', 'active'),
(134, 'quotation_edit', 'Sửa danh ngôn', 138, 1597828804, '1', 'active'),
(135, 'quotation_view', 'Xem danh sách danh ngôn', 138, 1597828817, '1', 'active'),
(136, 'contact_event', 'Danh sách đăng ký events', 132, 1599100765, '1', 'active'),
(137, 'product_tags_add', 'Thêm tags', 143, 1599818544, '1', 'active'),
(138, 'product_tags_delete', 'Xóa tags', 143, 1599818556, '1', 'active'),
(139, 'product_tags_view', 'Xem danh sách tags', 143, 1599818566, '1', 'active'),
(140, 'product_tags_edit', 'Sửa tags', 143, 1599818575, '1', 'active'),
(141, 'web_link_edit', 'Cập nhật link - liên kết cho menu', 107, 1603766292, '1', 'active'),
(142, 'student_add', 'Thêm độc giả', 149, 1666857956, '1', 'active'),
(143, 'student_edit', 'Sửa đọc giả', 149, 1666857978, '1', 'active'),
(144, 'student_delete', 'Xóa độc giả', 149, 1666858006, '1', 'active'),
(145, 'cart_add', 'Thêm mượn trả', 130, 1666864803, '1', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `e4_leftmenu`
--

CREATE TABLE `e4_leftmenu` (
  `id` int(5) NOT NULL,
  `parent_id` int(5) NOT NULL DEFAULT 0,
  `title_vi` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `level` int(2) NOT NULL DEFAULT 0,
  `region` int(3) NOT NULL DEFAULT 0,
  `toolbar` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'deactive',
  `user_created` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_created` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `e4_leftmenu`
--

INSERT INTO `e4_leftmenu` (`id`, `parent_id`, `title_vi`, `title_en`, `icon`, `link`, `status`, `level`, `region`, `toolbar`, `user_created`, `date_created`) VALUES
(2, 0, 'Quản lý hệ thống', 'System Management', 'fa fa-database', '', 'active', 1, 11, '0', '', 0),
(10, 2, 'Quản lý nhóm quyền', 'Roles Group Management', '', '?module=roles', 'active', 2, 42, '0', '', 0),
(11, 0, 'Quản lý người quản trị website', 'User Management', '', '?module=user', 'active', 1, 10, 'deactive', '', 0),
(13, 2, 'Quản lý Menu Admin', 'Menu Admin Management', '', '?module=menu_admin', 'active', 2, 41, 'deactive', '', 0),
(15, 95, 'Danh mục tin tức', 'News Category Management', 'fa fa-files-o', '?module=news_category', 'active', 2, 2, 'deactive', '', 0),
(25, 74, 'Quản lý Modules', 'Modules Management', '', '?module=module', 'active', 2, 52, '1', '', 0),
(33, 74, 'Quản lý Blog (Admin System)', 'Quản lý Blog (Admin System)', '', '?module=block', 'active', 2, 51, '0', '', 0),
(49, 0, 'Quản lý thông tin cấu hình', 'Quản lý thông tin cấu hình', 'fa fa-cogs', '', 'deactive', 1, 9, '0', '', 0),
(51, 74, 'Quản lý Tasks - Modules', 'Tasks & Modules Management', '', '?module=task', 'active', 2, 53, '0', '', 0),
(72, 0, 'Quản lý liên hệ', 'Contacts Management', 'fa fa-headphones', '?module=contact', 'deactive', 1, 6, 'deactive', '', 0),
(73, 49, 'Quản lý menu website', 'Quản lý menu website', '', '?module=web_menu', 'active', 2, 31, 'deactive', '', 0),
(74, 0, 'Dành cho người phát triển', 'Dành cho người phát triển', 'fa fa-cubes', '', 'deactive', 1, 10, '0', '', 0),
(87, 0, 'Tài khoản cá nhân', 'Your Profile', 'fa fa-user', '?module=profile', 'active', 1, 7, 'deactive', '', 1483904741),
(90, 49, 'Quản lý cấu hình trang chủ', 'Homepage Management', '', '?module=web_home', 'active', 2, 32, 'deactive', '', 1484751727),
(91, 49, 'Quản lý hình ảnh hệ thống', 'System Image Management', 'fa fa-picture-o', '?module=web_image', 'active', 2, 7, 'deactive', '', 1484761092),
(92, 49, 'Quản lý thông tin website', 'Website information management', 'fa fa-globe', '?module=web_information', 'active', 2, 4, '', '', 1487872412),
(95, 0, 'Quản lý bài viết', 'News Content Management', 'fa fa-book', '', 'deactive', 1, 5, '', '', 1592553201),
(96, 95, 'Nhóm tin tức', 'News Group management', '', '?module=news_group', 'active', 2, 3, '', '', 1595237154),
(97, 95, 'Phân loại tin tức', 'News Type Management', '', '?module=news_type', 'deactive', 2, 5, '', '', 1595237446),
(98, 95, 'Chủ đề tin tức', 'News Topic Management', '', '?module=news_topic', 'deactive', 2, 4, '', '', 1595237512),
(99, 49, 'Quản lý mã nhúng', 'Analytics code', '', '?module=analytics_code', 'active', 2, 0, '', '', 1595491947),
(100, 95, 'Quản lý thẻ - tags bài viết', 'Tags Management', 'fa fa-tags', '?module=news_tags', 'deactive', 2, 6, '', '', 1595917972),
(101, 95, 'Danh sách bài viết', 'Posts Management', 'fa fa-files-o', '?module=news', 'active', 2, 1, '', '', 1595919917),
(102, 106, 'Danh mục sản phẩm', 'Product categoty management', '', '?module=product_category', 'active', 2, 2, 'deactive', '1', 1596720755),
(103, 106, 'Danh sách sản phẩm', 'Product Management', '', '?module=product', 'active', 2, 1, 'deactive', '1', 1596722636),
(104, 106, 'Nhóm sản phẩm', 'Product Group Management', '', '?module=product_group', 'active', 2, 3, 'deactive', '1', 1596824928),
(105, 106, 'Phân loại sản phẩm', 'Product Type Management', '', '?module=product_type', 'active', 2, 4, 'deactive', '1', 1596870101),
(106, 0, 'Quản lý sản phẩm', 'Product Content Management', 'fa fa-star', '', 'deactive', 1, 3, 'deactive', '1', 1596871407),
(107, 0, 'Quản lý Mượn - trả', 'Order-Product Management', 'fa fa-shopping-cart', '?module=cart', 'active', 1, 2, 'deactive', '1', 1597135674),
(108, 112, 'Quản lý danh mục sách', 'Book Category Management', '', '?module=book_category', 'active', 2, 1, 'deactive', '1', 1597808591),
(109, 112, 'Danh sách ấn phẩm', 'Books Management', '', '?module=book', 'active', 2, 0, 'deactive', '1', 1597808616),
(110, 112, 'Quản lý tác giả', 'Authors Management', '', '?module=book_author', 'active', 2, 3, 'deactive', '1', 1597808641),
(111, 112, 'Quản lý NXB', 'Book NXB Management', '', '?module=book_nxb', 'active', 2, 2, 'deactive', '1', 1597819881),
(112, 0, 'Quản lý nội dung sách', 'Book Content Management', 'fa fa-book', '', 'active', 1, 1, 'deactive', '1', 1597823910),
(113, 0, 'Quản lý sự kiện', 'Event Management', '', '?module=event', 'deactive', 1, 99, 'deactive', '1', 1597824883),
(114, 0, 'Thư viện danh ngôn', 'Quotation Management', '', '?module=quotation', 'deactive', 1, 99, 'deactive', '1', 1597828844),
(115, 106, 'Thẻ - tags sản phẩm', 'Product tags', '', '?module=product_tags', 'deactive', 2, 5, 'deactive', '1', 1599818435),
(116, 0, 'Quản lý bộ sưu tập', '', 'fa fa-book', '?module=albums', 'deactive', 1, 0, 'deactive', '1', 1655795440),
(117, 0, 'Quản lý độc giả', '', '', '?module=student', 'active', 1, 9, 'deactive', '1', 1666858318);

-- --------------------------------------------------------

--
-- Table structure for table `e4_modules`
--

CREATE TABLE `e4_modules` (
  `id` int(11) NOT NULL,
  `name` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `folder` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `e4_modules`
--

INSERT INTO `e4_modules` (`id`, `name`, `title`, `folder`, `type`, `status`) VALUES
(1, 'user', 'Quản lý người dùng hệ thống', 'mdl_user', 'admin', 'active'),
(4, 'news_category', 'Quản lý danh mục tin tức', 'mdl_news_category', 'admin', 'active'),
(31, 'menu_admin', 'Quản lý Menu admin', 'mdl_menu_admin', 'admin', 'active'),
(34, 'module', 'Quản lý modules hệ thống ( Dành cho Lập trình viên)', 'mdl_module', 'admin', 'active'),
(46, 'roles', 'Quản lý nhóm quyền', 'mdl_roles', 'admin', 'active'),
(50, 'task', 'Quản lý tasks theo module ( Dành cho Lập trình viên)', 'mdl_task', 'admin', 'active'),
(51, 'block', 'Quản lý Blocks ( Dành cho Lập trình viên)', 'mdl_block', 'admin', 'active'),
(107, 'web_menu', 'Quản lý menu website ngoài', 'mdl_web_menu', 'admin', 'active'),
(108, 'profile', 'Tài khoản cá nhân', 'mdl_profile', 'admin', 'active'),
(109, 'product', 'Quản lý sản phẩm - dịch vụ', 'mdl_product', 'admin', 'active'),
(111, 'web_home', 'Cấu hình trang chủ', 'mdl_web_home', 'admin', 'active'),
(112, 'web_image', 'Quản lý hình ảnh hệ thống', 'mdl_web_image', 'admin', 'active'),
(114, 'web_information', 'Quản lý thông tin website', 'mdl_web_information', 'admin', 'active'),
(115, 'news', 'Quản lý tin tức', 'mdl_news', 'admin', 'active'),
(116, 'news_group', 'Quản lý nhóm tin tức', 'mdl_news_group', 'admin', 'active'),
(117, 'news_type', 'Quản lý phân loại tin tức', 'mdl_news_type', 'admin', 'active'),
(118, 'news_topic', 'Quản lý chuyên đề tin tức', 'mdl_news_topic', 'admin', 'active'),
(119, 'analytics_code', 'Quản lý mã nhúng theo dõi truy cập', 'mdl_analytics_code', 'admin', 'active'),
(120, 'news_tags', 'Quản lý thẻ - tags', 'mdl_news_tags', 'admin', 'active'),
(121, 'trang-chu', 'Trang chủ', 'mdl_home', 'public', 'active'),
(122, 'product_category', 'Danh mục sản phẩm', 'mdl_product_category', 'admin', 'active'),
(123, 'product', 'Quản lý sản phẩm', 'mdl_product', 'admin', 'active'),
(124, 'san-pham', 'Sản phẩm', 'mdl_category', 'public', 'active'),
(125, 'chi-tiet', 'Chi tiết', 'mdl_detail', 'public', 'active'),
(126, 'product_group', 'Nhóm sản phẩm', 'mdl_product_group', 'admin', 'active'),
(127, 'product_type', 'Phân loại sản phẩm', 'mdl_product_type', 'admin', 'active'),
(128, 'tin-tuc', 'Tin tức', 'mdl_category', 'public', 'active'),
(129, 'lien-he', 'Liên hệ', 'mdl_contact', 'public', 'active'),
(130, 'cart', 'Quản lý đơn hàng', 'mdl_cart', 'admin', 'active'),
(132, 'contact', 'Quản lý liên hệ - Newsletter', 'mdl_contact', 'admin', 'active'),
(133, 'book_category', 'Danh mục sách', 'mdl_book_category', 'admin', 'active'),
(134, 'book', 'Quản lý sách', 'mdl_book', 'admin', 'active'),
(135, 'book_author', 'Quản lý tác giả sách', 'mdl_book_author', 'admin', 'active'),
(136, 'book_nxb', 'Quản lý NXB', 'mdl_book_nxb', 'admin', 'active'),
(137, 'event', 'Quản lý sự kiện', 'mdl_event', 'admin', 'active'),
(138, 'quotation', 'Thư viện danh ngôn', 'mdl_quotation', 'admin', 'active'),
(140, '404', '404 Page note found', 'mdl_404', 'public', 'active'),
(141, 'tim-kiem', 'Tìm kiếm', 'mdl_search', 'public', 'active'),
(143, 'product_tags', 'Danh sách tags sản phẩm', 'mdl_product_tags', 'admin', 'active'),
(144, 'gio-hang', 'Giỏ hàng', 'mdl_cart', 'public', 'active'),
(146, 'albums', 'Bộ sưu tập', 'mdl_albums', 'admin', 'active'),
(147, 'albums', 'Bộ sưu tập', 'mdl_category', 'public', 'active'),
(149, 'student', 'Quản lý Độc giả', 'mdl_student', 'admin', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `e4_muonsach`
--

CREATE TABLE `e4_muonsach` (
  `id` int(11) NOT NULL,
  `id_sinhvien` int(11) NOT NULL,
  `id_sach` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0:đang mượn;1:đã trả;2:báo mất',
  `time_update` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `e4_muonsach`
--

INSERT INTO `e4_muonsach` (`id`, `id_sinhvien`, `id_sach`, `soluong`, `status`, `time_update`) VALUES
(1, 13, 2, 1, 0, 1666985005),
(2, 13, 1, 1, 0, 1666985005),
(3, 13, 2, 1, 0, 1666985005),
(4, 13, 2, 1, 0, 1666986246),
(5, 14, 2, 1, 2, 1667059862),
(6, 14, 1, 1, 0, 1666986359),
(7, 13, 2, 1, 0, 1667031491),
(8, 13, 2, 1, 0, 1667031608),
(9, 13, 1, 1, 0, 1667031608),
(10, 13, 2, 1, 1, 1667057509),
(11, 14, 2, 1, 1, 1667057396),
(12, 14, 1, 1, 0, 1667057402);

-- --------------------------------------------------------

--
-- Table structure for table `e4_nhaxuatban`
--

CREATE TABLE `e4_nhaxuatban` (
  `id` int(11) NOT NULL,
  `tennhaxuatban` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `e4_nhaxuatban`
--

INSERT INTO `e4_nhaxuatban` (`id`, `tennhaxuatban`) VALUES
(1, 'Nhà sách Việt'),
(2, 'Nhà sách Kim Đồng');

-- --------------------------------------------------------

--
-- Table structure for table `e4_options`
--

CREATE TABLE `e4_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `option_value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `autoload` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `e4_options`
--

INSERT INTO `e4_options` (`id`, `option_name`, `option_value`, `autoload`) VALUES
(1, 'comments_notify', '1', 'yes'),
(2, 'mailserver_url', 'smtp.gmail.com', 'yes'),
(3, 'mailserver_login', 'nhaphangtaobao.contact@gmail.com', 'yes'),
(4, 'mailserver_pass', 'Nguyenhuuthang@123', 'yes'),
(5, 'mailserver_port', '465', 'yes'),
(6, 'default_comment_status', 'open', 'yes'),
(7, 'posts_per_page', '6', 'yes'),
(8, 'image_max_size', '3', 'yes'),
(9, 'name_vi', 'EMAC', 'yes'),
(10, 'name_en', 'VPP BINH AN SEATRA CO.,LTD', 'yes'),
(11, 'slogan_vi', 'Thay đổi để trưởng thành', 'yes'),
(12, 'slogan_en', 'Nothing is impossible', 'yes'),
(13, 'address_vi', 'Số 21 Phố  Ngọa Long - P. Minh Khai - Q. Bắc Từ Liêm - TP. Hà Nội', 'yes'),
(14, 'address_en', 'Số 21 Phố  Ngọa Long - P. Minh Khai - Q. Bắc Từ Liêm - TP. Hà Nội', 'yes'),
(15, 'brief_vi', '', 'yes'),
(16, 'brief_en', '', 'yes'),
(17, 'meta_title_vi', '', 'yes'),
(18, 'meta_title_en', '', 'yes'),
(19, 'meta_keyword_vi', '', 'yes'),
(20, 'meta_keyword_en', '', 'yes'),
(21, 'meta_description_vi', '', 'yes'),
(22, 'meta_description_en', '', 'yes'),
(23, 'phone', '024 62650883', 'yes'),
(24, 'hotline', '0988272826', 'yes'),
(25, 'admin_email', 'emac@gmail.com', 'yes'),
(2078, 'fax', '1122 6699', 'yes'),
(2079, 'max_file_size', '', 'yes'),
(2080, 'facebook', 'Facebook', 'yes'),
(2081, 'twitter', 'Twitter', 'yes'),
(2084, 'youtube', 'Youtube', 'yes'),
(2085, 'instagram', 'Instagram', 'yes'),
(2086, 'product_per_page', '9', 'yes'),
(2087, 'admin_per_page', '20', 'yes'),
(2088, 'facebook_count', '450', 'yes'),
(2089, 'youtube_count', '1120', 'yes'),
(2092, 'twitter_count', '585', 'yes'),
(2093, 'instagram_count', '325', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `e4_order`
--

CREATE TABLE `e4_order` (
  `id` int(20) NOT NULL,
  `id_sinhvien` int(11) NOT NULL,
  `time_update` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `e4_order`
--

INSERT INTO `e4_order` (`id`, `id_sinhvien`, `time_update`) VALUES
(1, 0, 0),
(3, 0, 0),
(4, 0, 0),
(5, 0, 0),
(6, 0, 0),
(7, 0, 0),
(8, 0, 0),
(9, 0, 0),
(10, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `e4_order_detail`
--

CREATE TABLE `e4_order_detail` (
  `id` bigint(20) NOT NULL,
  `id_sinhvien` int(11) NOT NULL,
  `id_sach` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `e4_order_detail`
--

INSERT INTO `e4_order_detail` (`id`, `id_sinhvien`, `id_sach`, `soluong`, `time`) VALUES
(1, 0, 0, 0, 0),
(4, 0, 0, 0, 0),
(5, 0, 0, 0, 0),
(6, 0, 0, 0, 0),
(7, 0, 0, 0, 0),
(8, 0, 0, 0, 0),
(9, 0, 0, 0, 0),
(10, 0, 0, 0, 0),
(11, 0, 0, 0, 0),
(12, 0, 0, 0, 0),
(13, 0, 0, 0, 0),
(14, 0, 0, 0, 0),
(15, 0, 0, 0, 0),
(16, 0, 0, 0, 0),
(17, 0, 0, 0, 0),
(18, 0, 0, 0, 0),
(19, 0, 0, 0, 0),
(20, 0, 0, 0, 0),
(21, 0, 0, 0, 0),
(22, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `e4_posts`
--

CREATE TABLE `e4_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_vi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brief_vi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brief_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_vi` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'post',
  `post_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `url_part` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT 0,
  `post_created` bigint(20) NOT NULL,
  `user_created` bigint(20) UNSIGNED NOT NULL,
  `post_modified` bigint(20) NOT NULL,
  `user_modified` bigint(20) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_thumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visited_count` bigint(20) NOT NULL DEFAULT 0,
  `product_price` int(10) DEFAULT 0,
  `product_sale` int(10) NOT NULL DEFAULT 0,
  `price_status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` int(5) NOT NULL DEFAULT 0,
  `public_date` bigint(20) DEFAULT NULL,
  `public_time` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `public_place` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` bigint(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `e4_posts`
--

INSERT INTO `e4_posts` (`id`, `title_vi`, `title_en`, `brief_vi`, `brief_en`, `content_vi`, `content_en`, `post_type`, `post_status`, `comment_status`, `url_part`, `comment_count`, `post_created`, `user_created`, `post_modified`, `user_modified`, `image`, `image_thumb`, `visited_count`, `product_price`, `product_sale`, `price_status`, `rating`, `public_date`, `public_time`, `public_place`, `order`) VALUES
(320, 'Rymthm Garden', NULL, 'Rymthm Garden', NULL, '<h4 style=\"text-align:justify;\">???????????????????????????? ???????????????????????????????????????? ???????????????? ???????????????????????????? ???????????? ????????????????????. ???????????????????????? ???????????????????????? - phép cộng hài hoà giữa sự thanh lịch nhưng không cứng nhắc của các Quý cô công sở hiện đại mang đậm phong cách riêng. Hình ảnh đầy tự do, trẻ trung với các outfit có điểm nhấn thời thượng chính là những gì Quý cô công sở ngày nay theo đuổi. Tạo phong thái chuyên nghiệp, chỉn chu nơi công sở, các items trong Bộ sưu tập ???????????????????????? ???????????????????????? được thiết kế năng động hơn với điểm nhấn tie bow, ruffle shirt, cape.,, trên các thiết kế áo sơ mi cách điệu. Phong cách Monochrome chủ đạo được D.CHIC chọn trong BST ???????????????????????? ???????????????? ???????????????????????????????????????? với gam màu cơ bản khéo léo kết hợp với chất liệu mỏng nhẹ như Tơ Organza, ren chun tạo điểm nhấn. Mỗi thiết kế của D.CHIC đều như một giai điệu không trùng lặp - sống động, tự do tạo phong thái tự tin, chuyên nghiệp và tôn lên cá tính riêng thông qua thời trang. BST Rhythm Garden đã chính thức có mặt trên toàn bộ hệ thống Online&amp;Stores D.CHIC. Tất cả sẵn sàng để đồng hành cùng Quý cô mang đến mùa Hè rực rỡ, sôi động.</h4>', NULL, 'albums', 'active', 'open', 'bo-suu-tap-2', 0, 1655830800, 1, 1656047210, 1, '/upload/albums/albums2/cover-490591303.jpg', '/upload/albums/albums2/cover-490591303.jpg', 23, 0, 0, NULL, 0, NULL, NULL, NULL, 0),
(321, 'Hướng dẫn đặt hàng trên website EMAC', 'Hướng dẫn đặt hàng trên website D.CHIC', 'Hướng dẫn đặt hàng trên website EMAC', 'Hướng dẫn đặt hàng trên website D.CHIC', '<p><strong>BƯỚC 1: TÌM KIẾM VÀ LỰA CHỌN SẢN PHẨM YÊU THÍCH</strong></p><figure class=\"image\"><img src=\"/upload/news/z2891587000248_f3f3cd28cd140ca8037b3f3260d7a1d1-921013668.jpg\"></figure><ul><li><strong>Qúy khách có thể tìm kiếm sản phẩm theo 2 cách:</strong></li></ul><p><strong>Cách 1: Nhập mã sản phẩm (06 ký tự) vào thanh công cụ tìm kiếm</strong></p><p><strong>Cách 2: Tìm theo danh mục “SẢN PHẨM” trên thanh menu (NEW IN – tất cả; SẢN PHẨM – tất cả hoặc chủng loại; PHỤ KIỆN – tinh dầu, khăn,…)</strong></p><ul><li><strong>Sau khi tìm kiếm và lựa chọn được sản phẩm yêu thích, Qúy khách vui lòng chọn kích cỡ (size) và số lượng sản phẩm muốn mua. Sau đó chọn mua bằng cách bấm chuột vào nút “ THÊM VÀO GIỎ HÀNG”</strong></li></ul><figure class=\"image\"><img src=\"/upload/news/z2891587003463_a771cf74a1298e5e69bb243e94ea4033-484756241.jpg\"></figure><ul><li><strong>Khi đã lựa chọn được đủ các sản phẩm cần mua, Qúy khách click vào icon “GIỎ HÀNG” trên góc phải màn hình. Qúy khách có thể chọn thêm/ bớt số lượng sản phẩm tại mục “XEM GIỎ HÀNG” và chọn “ĐẶT HÀNG” để tiến hàng đặt hàng Online</strong></li></ul><p><strong>BƯỚC 2: THANH TOÁN ĐƠN HÀNG</strong></p><p><strong>Trên trang thanh toán, Qúy khách đăng nhập/ tạo tài khoản theo hướng dẫn hoặc điền địa chỉ email trước khi chuyển sang bước tiếp theo</strong></p><ol><li><strong>Phương thức vận chuyển và địa chỉ giao hàng</strong></li></ol><ul><li><strong>Giao hàng tại Hà Nội hoặc các tỉnh thành khác trên toàn quốc</strong></li><li><strong>Phí vận chuyển dựa trên trọng lượng kiện hàng và địa điểm giao hàng</strong></li><li><strong>Qúy khách hàng vui lòng điền đúng, đủ thông tin để D.CHIC có thể giao hàng đến đúng thông tin Qúy khách hàng đã đăng ký</strong></li></ul><figure class=\"image\"><img src=\"../../static.dchic.vn/uploads/media/2021/10/z2891587006342_b30be625e4bcb74388c113c8edf292ca-830202102.jpg\"></figure><ol><li><strong>Phương thức thanh toán</strong></li></ol><ul><li><strong>Qúy khách có thể lựa chọn 1 trong 4 phương thức thanh toán có sẵn: (1) VISA; (2) VNPAY; (3) TELESALE; (4) QUA STORE</strong></li><li><strong>Qúy khách vui lòng nhập “MÃ GIẢM GIÁ” và “SỬ DỤNG ĐIỂM” khi đã tạo và đăng nhập tài khoản thành viên bằng số điện thoại đã có trên hệ thống. Nếu không có vui lòng để trống mục này</strong></li></ul><figure class=\"image\"><img src=\"../../static.dchic.vn/uploads/media/2021/10/z2891587019039_6cec21e52b7bdd4bfbe07f0ff6f328ed-701943735.jpg\"></figure><p><strong>BƯỚC 3: XÁC NHẬN ĐƠN HÀNG</strong></p><ul><li><strong>Sau khi hoàn tất quy trình mua hàng Online trên website, Qúy khách vui lòng kiểm tra thư điện tử (email) “XÁC NHẬN ĐƠN ĐẶT HÀNG” với thông tin chi tiết về các sản phẩm mà khách hàng đã đặt trước đó</strong></li></ul><figure class=\"image\"><img src=\"../../static.dchic.vn/uploads/media/2021/10/z2891587022430_b13ad03ed9d7d82f846fe5bf7dcb4228-236871097.jpg\"></figure>', NULL, 'post', 'active', 'open', 'huong-dan-dat-hang-tren-website-d-chic', 0, 1655830800, 1, 1656060900, 1, '/upload/banner/Banner%20ngang%20-25-107247923.jpg', '', 31, 0, 0, NULL, 0, NULL, NULL, NULL, 0),
(329, 'Retrospectus ', NULL, 'Retrospectus ', NULL, '<h3 style=\"text-align:justify;\">“<span style=\"background-color:rgb(255,255,255);color:rgb(32,33,36);\"><strong>Retrospectus </strong></span>” đưa Quý cô đến với không gian thời trang cảm nhận rõ nét nghệ thuật Retrospectus cổ điển - tự do tạo dấu ấn đi tìm những riêng nhưng vô cùng tinh tế của Quý cô Á Đông sở hữu gu thời trang hiện đại và đầy cuốn hút. Gói gọn trong thiết kế, màu sắc và hoạ tiết kẻ sọc nhí mang cảm hứng trang phục thủy thủ, một trong những xu hướng nổi bật mùa Xuân- Hè 2022 và được xem là \"biểu tượng\" của phong cách như Preppy hay Academia. Bên cạnh hoạ tiết độc đáo, BST <span style=\"background-color:rgb(255,255,255);color:rgb(32,33,36);\"><strong>Retrospectus&nbsp;</strong></span><strong> </strong>kết hợp hoàn hảo cùng chất liệu Cotton Poplin - dòng chất liệu được yêu thích nhất vào mùa Hè tại D.CHIC. Chiều lòng mọi vóc dáng - Cotton Poplin với độ bồng tự nhiên, tạo form tốt, che được những khuyết điểm trong các thiết kế váy áo sơmi, váy midi cổ vest,.. Tất cả tạo nên cái “chạm” khẽ nhẹ nhàng giữa modern và classic trong từng outfits hướng đến tinh thần tối giản, tông màu trung tính đặc trưng của mùa Hè.</h3>', NULL, 'albums', 'active', 'open', '-', 0, 1656003600, 1, 1656040323, 1, '/upload/albums/albums1/art-581775483.jpg', '/upload/albums/albums1/art-581775483.jpg', 10, 0, 0, NULL, 0, NULL, NULL, NULL, 0),
(330, 'VỀ CHÚNG TÔI - EMAC', '', '', '', '<p style=\"text-align:justify;\">D.CHIC – Delicate &amp; Chic. Sự sang trọng và tinh tế là hai yếu tố quyết định hàng đầu trong việc hình thành vẻ đẹp tự tin và thần thái quyến rũ của người phụ nữ.</p><p style=\"text-align:justify;\">Chính vì vậy, từng chi tiết trên những mẫu thiết kế do D.CHIC tạo ra đều làm nổi bật những nét đẹp tiềm ẩn, từng đường cong trên cơ thể người phụ nữ để họ luôn cảm nhận nguồn năng lượng phát ra từ trong chính bản thân họ. Những thiết kế của D.CHIC là sự kết hợp hoàn hảo của tính thời trang và tính ứng dụng giúp khách hàng có thể sử dụng trang phục của D.CHIC trong nhiều trường hợp mà vẫn đảm bảo một vẻ ngoài sang trọng, đậm chất cá tính.</p><p style=\"text-align:justify;\">Đặc biệt, D.CHIC Couture là dòng sản phẩm thủ công cao cấp, được kiểm soát chặt chẽ khâu chọn lựa vải, thiết kế chi tiết cầu kì, sang trọng và đẳng cấp, thổi vào từng sản phẩm nguồn năng lượng sáng tạo và nghệ thuật.</p><p style=\"text-align:justify;\">Hướng đến xây dựng hình ảnh thương hiệu thiết kế Made in Viet Nam, D.CHIC đang từng bước khẳng định vị trí của mình trong ngành thời trang Việt nam và nâng tầm hình ảnh thời trang Việt Nam đến với thế giới. Chính vì vậy, không chỉ tập trung xây dựng đội ngũ nhân viên chuyên nghiệp, năng động và sáng tạo, D.CHIC còn tập trung phát triển mạng lưới showroom được thiết kế theo phong cách hiện đại với nhiều dịch vụ tiện ích đem lại những trải nghiệm mua sắm mới mẻ dành cho khách hàng.</p><p style=\"text-align:justify;\">D.CHIC | NEW tiME - NEW ME.</p>', NULL, 'post', 'active', 'open', 've-chung-toi-emac', 0, 1656003600, 1, 1656058632, 1, '/upload/logo/z3508625811196_0817e0879ad2a52ef75526e577def8ca.jpg', '', 14, 0, 0, NULL, 0, NULL, NULL, NULL, 0),
(331, 'ÁO CHIẾT EO CỔ V TAY CỔ PHỒNG', '', '', '', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(33,37,41);\">ÁO CHIẾT EO CỔ V TAY CỔ PHỒNG</span></p>', NULL, 'product', 'active', 'open', 'ao-chiet-eo-co-v-tay-co-phong', 0, 1656003600, 1, 1656058300, 1, '/upload/san%20pham/DTT-4701-103314747.jpg', '', 7, 0, 0, NULL, 0, NULL, NULL, NULL, 0),
(332, 'CHÍNH SÁCH BẢO MẬT THÔNG TIN TẠI EMAC', '', 'CHÍNH SÁCH BẢO MẬT THÔNG TIN TẠI EMAC', '', '<p><strong>1. Mục đích và phạm vi thu thập</strong></p><p>- Để truy cập và sử dụng một số dịch vụ tại <a href=\"http://EMAC.vn/\">http://www.emac.vn</a>, quý khách có thể được yêu cầu cung cấp cho chúng tôi thông tin cá nhân. Bao gồm: Họ tên, email, số điện thoại liên lạc, địa chỉ, địa chỉ facebook.</p><p>- Chúng tôi cũng thu thập thông tin về số lần ghé thăm, bao gồm số trang quý khách xem, số links bạn click, những thông tin khác liên quan đến việc kết nối bạn với dchic.vn và các thông tin mà trình duyệt web (browser) sử dụng mỗi khi truy cập vào website dchic.vn, gồm: địa chỉ IP, loại browser, ngôn ngữ sử dụng, thời gian và những địa chỉ mà browser truy cập đến.</p><p><strong>2. Phạm vi sử dụng thông tin</strong></p><p>Dchic.vn sử dụng dữ liệu mà khách hàng cung cấp để:</p><p>- Hỗ trợ khách hàng khi mua sản phẩm</p><p>- Giải đáp thắc mắc khách hàng</p><p>- Cung cấp cho khách hàng thông tin mới trên website của công ty, thực hiện các khảo sát khách hàng, các hoạt động quảng bá liên quan đến các sản phẩm và dịch vụ của dchic.vn nếu quý khách chấp nhận email thông báo.</p><p><strong>3. Thời gian lưu trữ thông tin</strong></p><p>- Dữ liệu cá nhân của khách hàng được lưu trữ cho đến khi khách hàng có yêu cầu hủy bỏ. Còn lại trong mọi trường hợp thông tin cá nhân của khách hàng sẽ được bảo mật trên máy chủ của dchic.vn</p><p><strong>4. Địa chỉ của đơn vị thu thập và quản lý thông tin cá nhân</strong></p><p>Tên Công ty: CÔNG TY TNHH THỜI TRANG ATP VIỆT NAM</p><p>Tên tiếng Anh: ATP VIETNAM FASHION COMPANY LIMITED</p><p>MST: 0106581072</p><p>Địa chỉ: Số 131 Kim Mã, P.Kim Mã, Q.Ba Đình, TP Hà Nội</p><p><strong>5. Phương tiện và công cụ để người dùng tiếp cận và chỉnh sửa dữ liệu cá nhân của mình.</strong></p><p>- Khách hàng có quyền yêu cầu dchic.vn cập nhật, điều chỉnh hoặc hủy thông tin cá nhân của mình.</p><p>- Thành viên có quyền gửi khiếu nại về người bán đến Ban quản trị của website tại địa chỉ email info@dchic.vn . Khi tiếp nhận những phản hồi này, dchic.vn sẽ xác nhận lại thông tin, trường hợp đúng như phản ánh của thành viên, dchic.vn sẽ có biện pháp xử lý kịp thời.</p><p><strong>6. Cam kết bảo mật thông tin</strong></p><p>- Thông tin cá nhân của khách hàng trên dchic.vn được dchic.vn cam kết bảo mật tuyệt đối theo chính sách bảo vệ thông tin cá nhân của dchic.vn. Việc thu thập và xử lý thông tin của mỗi khách hàng chỉ được thực hiện khi có sự đồng ý của khách hàng, trừ trường hợp pháp luật có những quy định khác.</p><p>- Không sử dụng, chuyển giao, cung cấp hay tiết lộ cho bên thứ 3 nào về thông tin cá nhân của khách hàng khi không có sự cho phép đồng ý từ khách hàng.</p><p>- Trong trường hợp máy chủ lưu trữ thông tin bị hacker tấn công dẫn đến mất mát dữ liệu cá nhân khách hàng, dchic.vn sẽ có trách nhiệm thông báo vụ việc cho cơ quan chức năng điều tra xử lý kịp thời và thông báo cho khách hàng được biết.</p><p>- Ban quản trị dchic.vn yêu cầu các cá nhân khi mua hàng phải cung cấp đầy đủ thông tin cá nhân có liên quan như: họ và tên, địa chỉ liên lạc, email, điện thoại… và chịu trách nhiệm về tính pháp lý của những thông tin trên. Ban quản trị dchic.vn không chịu trách nhiệm cũng như không giải quyết mọi khiếu nại có liên quan đến quyền lợi của khách hàng đó nếu xem xét thấy tất cả thông tin cá nhân của khách hàng đó cung cấp khi đăng ký ban đầu là không chính xác.</p>', NULL, 'post', 'active', 'open', 'chinh-sach-bao-mat-thong-tin-tai-d-chic', 0, 1656003600, 1, 1656060561, 1, '/upload/logo/z3508625811196_0817e0879ad2a52ef75526e577def8ca.jpg', '', 0, 0, 0, NULL, 0, NULL, NULL, NULL, 0),
(333, 'CHÍNH SÁCH MUA HÀNG TẠI HỆ THỐNG EMAC', '', '', '', '<p><strong>I.</strong> <strong>CHÍNH SÁCH CHUNG</strong></p><p><strong>dchic.vn</strong> là website bán hàng thời trang trực tuyến chuyên cung cấp các sản phẩm thuộc thương hiệu thời trang D.CHIC.</p><p>Khách hàng tham gia giao dịch trên <strong>dchic.vn</strong> là cá nhân có đầy đủ năng lực hành vi dân sự từ đủ 15 tuổi trở lên và có tài sản để thực hiện giao dịch mua sản phẩm.</p><p>Sản phẩm giao dịch trên <strong>dchic.vn</strong> bao gồm các sản phẩm thời trang.</p><p>Mọi hoạt động mua bán sản phẩm trên <strong>dchic.vn</strong> phải được thực hiện công khai, minh bạch, đảm bảo quyền lợi của khách hàng. D.CHIC sẽ chịu trách nhiệm trước khách hàng đối với mọi vấn đề liên quan đến sản phẩm cung cấp trên <strong>dchic.vn</strong>.</p><p>Bằng việc tham gia giao dịch trên <strong>dchic.vn</strong>, khách hàng được xem là đã tìm hiểu quyền và nghĩa vụ của mình và đồng ý bị ràng buộc bởi quy chế hoạt động website cung cấp dịch vụ thương mại điện tử <strong>https:// dchic.vn</strong> đang có hiệu lực vào thời điểm khách hàng thực hiện giao dịch.</p><p>Xin vui lòng đọc kỹ Điều khoản và điều kiện giao dịch này (sau đây gọi là \"Điều Khoản Và Điều Kiện\") trước khi đặt mua bất kỳ sản phẩm/dịch vụ/phiếu quà tặng nào trên D.CHIC (sau đây gọi là \"Sản Phẩm\").</p><p><strong>1. Phạm vi áp dụng</strong></p><ul><li><strong>1.1. Điều Khoản Và Điều Kiện sẽ được áp dụng cho khách hàng:</strong><ul><li>(1.1.a) Mua sản phẩm tại D.CHIC; và</li><li>(1.1.b) Có nhu cầu được giao Sản Phẩm đến các địa điểm phù hợp với Chính sách vận chuyển đăng tải trên D.CHIC .</li></ul></li><li><strong>1.2. Khách hàng tại Điều Khoản Và Điều Kiện này (sau đây gọi là \"Khách Hàng\") bao gồm:</strong><ul><li>(1.2.a) Mọi cá nhân có đầy đủ năng lực hành vi dân sự từ đủ 15 tuổi trở lên và có tài sản để thực hiện giao dịch mua Sản Phẩm trên D.CHIC , trừ giao dịch mua các Sản Phẩm phải đăng ký hoặc sản phẩm khác theo quy định của pháp luật phải được người đại diện theo pháp luật đồng ý;</li><li>(1.2.b) Mọi tổ chức được thành lập và hoạt động hợp pháp theo quy định của pháp luật Việt Nam.</li></ul></li></ul><p><strong>2. Cách hình thành đơn hàng</strong></p><ul><li><strong>2.1. Các bước hình thành đơn hàng như sau:</strong></li></ul><p><strong>Bước 1:</strong> Khách Hàng đăt hàng tại D.CHIC (\"Đơn Đặt Hàng\")</p><p><strong>Bước 2:</strong> D.CHIC gửi xác nhận Đơn Đặt Hàng (danh sách Sản Phẩm, thời hạn giao hàng, điện thoại liên hệ) vào địa chỉ email của Khách Hàng hoặc gửi tin nhắn vào số điện thoại đặt hàng của Khách Hàng hoặc cập nhật vào tình trạng đơn hàng trong hệ thống quản lý tài khoản của Khách Hàng.</p><ul><li><strong>2.2. Việc Khách Hàng hủy Đơn Đặt Hàng (nếu có) phải được thực hiện phù hợp với quy định tại Quy định đổi hàng của D.CHIC.</strong></li></ul><p>D.CHIC có quyền hủy Đơn Đặt Hàng trong trường hợp:</p><p>-(2.2.a) Liên hệ với Khách hàng quá 3 lần ( gọi điện thoại, gửi email) mà không nhận được phản hồi. Cụ thể được tính sau 3 lần gọi điện thoại và sau 24 tiếng khi gửi email xác nhận lần cuối cùng.</p><p>-(2.2.b) Đơn vị vận chuyển không thể liên lạc được với Khách hàng 3 lần thì sản phẩm sẽ được tự động trả về cho D.CHIC và D.CHIC sẽ hủy đơn hàng. Trong trường hợp Khách hàng đã thanh toán trả trước cho sản phẩm, D.CHIC sẽ tìm cách liên hệ lại để giao hàng lại cho Khách hàng hoặc hoàn trả lại tiền cho Khách hàng bằng đúng số tiền mà Khách hàng đã thanh toán trước đó.</p><p><strong>3. Giá cả và thanh toán</strong></p><ul><li><strong>3.1. Giá của Sản Phẩm đã bao gồm 10% thuế VAT.</strong><br>Trong mọi trường hợp, giá của Sản Phẩm không bao gồm phí vận chuyển. Chi phí vận chuyển được quy định cụ thể tại Chính sách vận chuyển của D.CHIC.</li><li><strong>3.2. Khách Hàng thanh toán giá trị của Đơn Đặt Hàng tại trang d.chic.vn của D.CHIC.</strong> Khi Khách Hàng nhấn (click) vào ô “ĐẶT HÀNG” để tiến hành thanh toán Đơn Đặt Hàng có nghĩa là Khách Hàng xác nhận đã rà soát thông tin Đơn Đặt Hàng; và Khách Hàng đồng ý là Điều Khoản Và Điều Kiện sẽ được áp dụng cho giao dịch mua Sản Phẩm trong Đơn Đặt Hàng đó.</li><li><strong>3.3. D.CHIC có quyền từ chối chấp nhận cho Khách Hàng thanh toán bằng thẻ tín dụng trong một số trường hợp theo quyết định của D.CHIC.</strong></li><li><strong>3.4. Để đảm bảo an toàn thanh toán, Khách Hàng lưu ý:</strong><ul><li>(3.4.a) Chỉ thực hiện thanh toán trực tuyến tại cửa sổ liên kết từ D.CHIC chuyển đến;</li><li>(3.4.b) Sử dụng và bảo quản thẻ (thẻ tín dụng, thẻ ATM, thẻ mua hàng…) và thông tin tài khoản/thông tin thẻ cẩn thận;</li><li>(3.4.c) Không cho người khác mượn hoặc sử dụng số điện thoại tích điểm thuộc hệ thống để mua hàng tại D.CHIC . Ngay khi phát hiện giao dịch phát sinh bất thường nào tại D.CHIC , Khách Hàng cần liên hệ ngay với bộ phận chăm sóc Khách Hàng của D.CHIC để được xử lý kịp thời;</li><li>(3.4.d) Trong mọi trường hợp, với thẻ tín dụng/ghi nợ quốc tế, Khách Hàng vui lòng không để lộ số CVV/CVC/CSC (là mã số bảo mật, bộ ba kí tự số được in ở mặt sau của thẻ) để bảo mật thông tin thẻ;</li></ul></li></ul><p><strong>4. Giao nhận sản phẩm</strong></p><ul><li><strong>4.1. Sản Phẩm sẽ được giao đến địa chỉ Khách Hàng yêu cầu trong Đơn Đặt Hàng vào thời gian quy định tại Chính sách vận chuyển đăng tải trên D.CHIC hoặc vào thời gian Khách Hàng yêu cầu được nhận hàng với điều kiện thời gian giao hàng này phải phù hợp với Chính sách vận chuyển đó.</strong></li></ul><p>Trong trường hợp Khách Hàng muốn thay đổi địa chỉ nhận Sản Phẩm thì Khách Hàng phải gọi điện thông báo lại cho bộ phận CSKH hoặc bộ phận Sale Online tên và số điện thoại liên lạc của người được Khách Hàng chỉ định nhận Sản Phẩm cũng như địa chỉ nhận Sản Phẩm. Người được Khách Hàng chỉ định nhận Sản Phẩm trên Đơn Đặt Hàng hoặc bằng điện thoại như quy định tại Điều 4.1 này được gọi chung là “Người Nhận Hàng”.</p><p>Khi được D.CHIC yêu cầu, Người Nhận Hàng phải xuất trình giấy tờ tùy thân như Chứng minh nhân dân/Thẻ căn cước công dân/Hộ chiếu để nhân viên giao hàng kiểm tra trước khi nhận hàng.</p><ul><li><strong>4.2. Người Nhận Hàng ký vào Phiếu giao hàng khi nhận Sản Phẩm.</strong></li></ul><p>Rủi ro và quyền sở hữu Sản Phẩm sẽ được chuyển cho Khách Hàng từ thời điểm Người Nhận Hàng ký vào Phiếu giao hàng. Khách Hàng cần giữ lại Phiếu giao hàng để đối soát hoặc để giải quyết các vấn đề có thể phát sinh liên quan đến Sản Phẩm (nếu có). Sau thời hạn đổi trả Sản Phẩm quy định tại Chính sách đổi trả đăng tải trên D.CHIC , các vấn đề có thể phát sinh liên quan đến Sản Phẩm (nếu có) sẽ được D.CHIC hỗ trợ tư vấn giải quyết.</p><p><strong>5. Đổi, trả sản phẩm</strong></p><ul><li>Việc đổi, trả Sản Phẩm được thực hiện theo các quy định tại mục <strong>IV.2 và IV.3 thuộc chính sách khách hàng</strong>.</li></ul><p><strong>6. Chăm sóc khách hàng và xử lý khiếu nại</strong></p><ul><li><strong>6.1. Trong trường hợp có bất kỳ thắc mắc hay khiếu nại nào,</strong> bao gồm nhưng không giới hạn ở chất lượng hàng hóa/dịch vụ, việc giao Sản Phẩm, thái độ của nhân viên giao hàng, việc đổi/ trả Sản Phẩm … Khách Hàng có thể liên hệ với bộ phận chăm sóc khách hàng (\"CSKH\") theo số hotline <strong>0988445445</strong> hoặc email cskh01@dchic .vn. Khi liên hệ với CSKH, Khách Hàng phải cung cấp số Đơn Đặt Hàng ghi trong email hoặc tin nhắn xác nhận Đơn Đặt Hàng mà D.CHIC gửi cho Khách Hàng. Bộ phận CSKH sẽ tiếp nhận và phản hồi lại cho Khách Hàng trong thời gian sớm nhất.</li><li><strong>6.2. Khi có nhu cầu bảo hành hàng hóa, Khách Hàng có thể liên hệ bộ phận CSKH để được tư vấn và hỗ trợ.</strong></li></ul><p><strong>7. Bảo mật thông tin</strong></p><ul><li>Quy định về bảo mật thông tin của Khách Hàng được thực hiện theo Chính sách bảo mật đăng tải trên D.CHIC .</li></ul><p><strong>8. Giới hạn trách nhiệm</strong></p><ul><li>Trong mọi trường hợp, D.CHIC không chịu trách nhiệm đối với mọi thiệt hại/mất mát/tổn thất/hư hỏng mà Khách Hàng phải chịu sau thời điểm rủi ro được chuyển từ D.CHIC sang Khách Hàng, trừ khi do lỗi của D.CHIC gây ra.</li></ul><p><strong>II. CÁCH THỨC MUA HÀNG</strong></p><p><strong>1. MUA HÀNG TẠI SHOWROOM</strong></p><p><strong>1.1. Thanh toán bằng tiền mặt</strong></p><p><strong>1.2. Thanh toán bằng thẻ ngân hàng, thẻ ATM, thẻ Visa/ Master Card</strong></p><p>- Bạn không mất bất cứ chi phí nào khi thanh toán bằng các loại thẻ trên.</p><p>- Vui lòng ký tên chủ tài khoản và ghi số điện thoại của bạn lên trên liên thanh toán để đảm bảo chính quyền lợi của bạn khi có vấn đề xảy ra. (quên thẻ, gian lận sử dụng thẻ, ngân hàng báo lỗi,..)</p><p><strong>2. MUA HÀNG TẠI WEBSITE dchic.vn</strong></p><p>BƯỚC 1: TÌM KIẾM VÀ LỰA CHỌN SẢN PHẨM YÊU THÍCH</p><ul><li>Qúy khách có thể tìm kiếm sản phẩm theo 2 cách:</li></ul><p><strong>Cách 1</strong>: Nhập mã sản phẩm (06 ký tự) vào thanh công cụ tìm kiếm</p><p><strong>Cách 2</strong>: Tìm theo danh mục “SẢN PHẨM” trên thanh menu (NEW IN – tất cả; SẢN PHẨM – tất cả hoặc chủng loại; PHỤ KIỆN – tinh dầu, khăn,…)</p><ul><li>Sau khi tìm kiếm và lựa chọn được sản phẩm yêu thích, Qúy khách vui long chọn kích cỡ (size) và số lượng sản phẩm muốn mua. Sau đó chọn mua bằng cách bấm chuột vào nút “ THÊM VÀO GIỎ HÀNG”</li><li>Khi đã lựa chọn được đủ các sản phẩm cần mua, Qúy khách click và icon “GIỎ HÀNG” trên góc phải màn hình. Qúy khách có thể chọn thêm/ bớt số lượng sản phẩm tại mục “XEM GIỎ HÀNG” và chọn “ĐẶT HÀNG” để tiến hàng đặt hàng Online</li></ul><p>BƯỚC 2: THANH TOÁN ĐƠN HÀNG</p><p>Trên trang thanh toán, Qúy khách đăng nhập/ tạo tài khoản theo hướng dẫn hoặc điền địa chỉ email trước khi chuyển sang bước tiếp theo</p><ol><li>Phương thức vận chuyển và địa chỉ giao hàng</li></ol><ul><li>Giao hàng tại Hà Nội hoặc các tỉnh thành khác trên toàn quốc</li><li>Phí vận chuyển dự trên trọng lượng kiện hàng và địa điểm giao hàng</li><li>Qúy khách hàng vui lòng điền đúng, đủ thông tin để D.CHIC có thể giao hàng đến đúng thông tin Qúy khách hàng đã đăng ký</li></ul><ol><li>Phương thức thanh toán</li></ol><ul><li>Qúy khách có thể lựa chọn 1 trong 4 phương thức thanh toán có sẵn: (1) VISA; (2) VNPAY; (3) TELESALE; (4) QUA STORE</li><li>Qúy khách vui long nhập “MÃ GIẢM GIÁ” và “SỬ DỤNG ĐIỂM” khi đã tạo và đăng nhập tài khoản thành viên bằng số điện thoại đã có trên hệ thống. Nếu không có vui lòng để trống mục này</li></ul><p>BƯỚC 3: XÁC NHẬN ĐƠN HÀNG</p><ul><li>Sau khi hoàn tất quy trình mua hàng Online trên website, Qúy khách vui long kiểm tra thư điện tử (email) “XÁC NHẬN ĐƠN ĐẶT HÀNG” với thông tin chi tiết về các sản phẩm mà khách hàng đã đặt trước đó</li></ul><p><i><strong>Thông tin tài khoản nhận thanh toán:</strong></i></p><p>Nội dung chuyển khoản: <strong>WEB_Họ tên_Số điện thoại.</strong></p>', NULL, 'post', 'active', 'open', 'chinh-sach-mua-hang-tai-he-thong-d-chic', 0, 1656003600, 1, 1656060881, 1, '/upload/logo/z3508625811196_0817e0879ad2a52ef75526e577def8ca.jpg', '', 4, 0, 0, NULL, 0, NULL, NULL, NULL, 0),
(335, 'ÁO CHIẾT EO CỔ V TAY CỔ PHỒNG 2', '', '', '', '', NULL, 'product', 'active', 'open', 'ao-chiet-eo-co-v-tay-co-phong-2', 0, 1656003600, 1, 1656061359, 1, '/upload/san%20pham/san%20pham%201/DTT-4701-103314747.jpg', '', 2, 1350000, 1250000, NULL, 0, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `e4_posts_image`
--

CREATE TABLE `e4_posts_image` (
  `image_id` int(10) NOT NULL,
  `object_id` int(10) UNSIGNED NOT NULL,
  `image_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'related',
  `image_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` int(11) NOT NULL,
  `order` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `e4_posts_image`
--

INSERT INTO `e4_posts_image` (`image_id`, `object_id`, `image_type`, `image_link`, `color`, `order`) VALUES
(7, 22, 'related', 'http://localhost/steam/templates/buno/img/discount.jpg', 0, 1),
(8, 22, 'related', 'http://localhost/steam/templates/buno/img/blog/details/blog-details.jpg', 0, 2),
(9, 22, 'related', 'https://cafebiz.cafebizcdn.vn/zoom/380_238/162123310254002176/2020/8/10/photo1597048670035-15970486702101409803684.jpg', 0, 3),
(22, 13, 'related', 'http://localhost/steam/templates/buno/img/discount.jpg', 0, 1),
(23, 13, 'related', 'http://localhost/steam/templates/buno/img/blog/details/blog-details.jpg', 0, 2),
(24, 13, 'related', 'http://localhost/steam/templates/buno/img/logo.png', 0, 3),
(125, 97, 'related', 'http://vanphongphambinhan.com/upload/but_new/bn_sp-01.jpg', 0, 1),
(126, 99, 'related', 'http://vanphongphambinhan.com/upload/but_new/b-master_b-01.jpg', 0, 1),
(128, 108, 'related', 'http://vanphongphambinhan.com/upload/but_xoa_new/plus_mini.jpg', 0, 1),
(130, 111, 'related', 'http://vanphongphambinhan.com/upload/but_nho_dong_new/luxor.jpg', 0, 1),
(131, 110, 'related', 'http://vanphongphambinhan.com/upload/but_nho_dong_new/staedtler_364.jpg', 0, 1),
(132, 114, 'related', 'http://vanphongphambinhan.com/upload/but_nho_dong_new/stacom.jpg', 0, 1),
(134, 116, 'related', 'http://vanphongphambinhan.com/upload/da_bang_da_dau_new/pm04.jpg', 0, 1),
(136, 130, 'related', 'http://vanphongphambinhan.com/upload/bia_new/bia-mica-a3.jpg', 0, 1),
(137, 113, 'related', 'http://vanphongphambinhan.com/upload/but_nho_dong_new/hl-03.jpg', 0, 1),
(138, 117, 'related', 'http://vanphongphambinhan.com/upload/da_bang_da_dau_new/pm09_2.jpg', 0, 1),
(139, 100, 'related', 'http://vanphongphambinhan.com/upload/but_new/bl57.jpg', 0, 1),
(141, 95, 'related', 'http://vanphongphambinhan.com/upload/but_new/027.jpg', 0, 1),
(143, 70, 'related', 'http://vanphongphambinhan.com/upload/giay_in_new/a3_pagi_xanh_70_2.jpg', 0, 1),
(144, 77, 'related', 'http://vanphongphambinhan.com/upload/giay_in_new/a5_pagi_xanh_70.jpg', 0, 1),
(147, 78, 'related', 'http://vanphongphambinhan.com/upload/giay_in_new/a4_pagi_hong.jpg', 0, 1),
(148, 69, 'related', 'http://vanphongphambinhan.com/upload/giay_in_new/a4_pagi_xanh_70.jpg', 0, 1),
(149, 79, 'related', 'http://vanphongphambinhan.com/upload/giay_in_new/pagi_do_a5_2.jpg', 0, 1),
(150, 208, 'related', 'http://vanphongphambinhan.com/upload/nhac_viec_phan_trang/tomyall2.jpg', 0, 1),
(151, 82, 'related', 'http://vanphongphambinhan.com/upload/giay_than/gstar.jpg', 0, 1),
(153, 81, 'related', 'http://vanphongphambinhan.com/upload/giay_than/giay-than-thai_hou.jpg', 0, 1),
(154, 229, 'related', 'http://vanphongphambinhan.com/upload/bang_dinh_-_keo_dan/24kgduc.jpg', 0, 1),
(155, 228, 'related', 'http://vanphongphambinhan.com/upload/bang_dinh_-_keo_dan/24kgduc.jpg', 0, 1),
(156, 227, 'related', 'http://vanphongphambinhan.com/upload/bang_dinh_-_keo_dan/100ytd.jpg', 0, 1),
(157, 227, 'related', 'http://vanphongphambinhan.com/upload/bang_dinh_-_keo_dan/24kgduc.jpg', 0, 2),
(158, 289, 'related', 'http://vanphongphambinhan.com/upload/file_-_hop/hf5cm.jpg', 0, 1),
(159, 291, 'related', 'http://vanphongphambinhan.com/upload/file_-_hop/hf5cm2.jpg', 0, 1),
(160, 292, 'related', 'http://vanphongphambinhan.com/upload/file_-_hop/hf15cm.jpg', 0, 1),
(161, 293, 'related', 'http://vanphongphambinhan.com/upload/file_-_hop/hf10cm.jpg', 0, 1),
(162, 299, 'related', 'http://vanphongphambinhan.com/upload/trinh_ky_-_file_la/tknhua2mat_2.jpg', 0, 1),
(163, 305, 'related', 'http://vanphongphambinhan.com/upload/trinh_ky_-_file_la/8002xifu2.jpg', 0, 1),
(164, 305, 'related', 'http://vanphongphambinhan.com/upload/trinh_ky_-_file_la/8002xifu3.jpg', 0, 2),
(165, 306, 'related', 'http://vanphongphambinhan.com/upload/trinh_ky_-_file_la/fileladeli20.jpg', 0, 1),
(166, 306, 'related', 'http://vanphongphambinhan.com/upload/trinh_ky_-_file_la/fileladeli20_2.jpg', 0, 2),
(167, 307, 'related', 'http://vanphongphambinhan.com/upload/trinh_ky_-_file_la/fileladeli20_2.jpg', 0, 1),
(169, 309, 'related', 'http://vanphongphambinhan.com/upload/trinh_ky_-_file_la/filelasunwood602.jpg', 0, 1),
(170, 308, 'related', 'http://vanphongphambinhan.com/upload/trinh_ky_-_file_la/fileladeli20_2.jpg', 0, 1),
(171, 310, 'related', 'http://vanphongphambinhan.com/upload/trinh_ky_-_file_la/filelasunwood802.jpg', 0, 1),
(172, 310, 'related', 'http://vanphongphambinhan.com/upload/trinh_ky_-_file_la/filelasunwood803.jpg', 0, 2),
(173, 310, 'related', 'http://vanphongphambinhan.com/upload/trinh_ky_-_file_la/filelasunwood804.jpg', 0, 3),
(174, 311, 'related', 'http://vanphongphambinhan.com/upload/trinh_ky_-_file_la/filelasunwood100_2.jpg', 0, 1),
(175, 316, 'related', '/upload/banner/custom-baner2.png', 0, 1),
(200, 322, 'related', '/upload/banner/custom-baner1.png', 29, 0),
(201, 322, 'related', '/upload/banner/custom-baner2.png', 28, 1),
(207, 323, 'related', '/upload/banner/custom-baner1.png', 29, 0),
(208, 323, 'related', '/upload/banner/custom-baner2.png', 29, 1),
(212, 59, 'related', '/upload/banner/Banner%20ngang%20-25-107247923.jpg', 28, 0),
(213, 59, 'related', '/upload/banner/Banner%20ngang%20MAU-763413657.jpg', 29, 1),
(214, 59, 'related', '/upload/banner/Banner%20ngang-656009042.jpg', 29, 2),
(215, 59, 'related', '/upload/banner/banner%20ngang-689558861.jpg', 28, 3),
(216, 59, 'related', '/upload/banner/custom-baner1.png', 29, 4),
(217, 59, 'related', '/upload/banner/custom-baner2.png', 116, 5),
(488, 329, 'related', '/upload/albums/albums1/art-581775483.jpg', 0, 0),
(489, 329, 'related', '/upload/albums/albums1/DTT-3892-74277281-480x640.jpg', 0, 1),
(490, 329, 'related', '/upload/albums/albums1/DTT-3914-189530168-480x640.jpg', 0, 2),
(491, 329, 'related', '/upload/albums/albums1/DTT-4014-385652929-480x640.jpg', 0, 3),
(492, 329, 'related', '/upload/albums/albums1/DTT-4019-925490816-480x640.jpg', 0, 4),
(493, 329, 'related', '/upload/albums/albums1/DTT-4101-468741645-480x640.jpg', 0, 5),
(494, 329, 'related', '/upload/albums/albums1/DTT-4150-202697730-480x640.jpg', 0, 6),
(495, 329, 'related', '/upload/albums/albums1/DTT-4195-286674244-480x640.jpg', 0, 7),
(496, 329, 'related', '/upload/albums/albums1/DTT-4231-125168621-480x640.jpg', 0, 8),
(497, 329, 'related', '/upload/albums/albums1/DTT-4239-60785264-480x640.jpg', 0, 9),
(498, 329, 'related', '/upload/albums/albums1/DTT-4312-44870797-480x640.jpg', 0, 10),
(499, 329, 'related', '/upload/albums/albums1/DTT-4415-359639192-480x640.jpg', 0, 11),
(500, 329, 'related', '/upload/albums/albums1/DTT-4429-852290540-480x640.jpg', 0, 12),
(501, 329, 'related', '/upload/albums/albums1/DTT-4468-578843272-480x640.jpg', 0, 13),
(502, 329, 'related', '/upload/albums/albums1/DTT-4526-142049102-480x640.jpg', 0, 14),
(503, 329, 'related', '/upload/albums/albums1/DTT-4562-900538315-480x640.jpg', 0, 15),
(504, 329, 'related', '/upload/albums/albums1/DTT-4596-21580536-480x640.jpg', 0, 16),
(505, 329, 'related', '/upload/albums/albums1/DTT-4649-188628220-480x640.jpg', 0, 17),
(506, 329, 'related', '/upload/albums/albums1/DTT-4675-283139116-480x640.jpg', 0, 18),
(507, 329, 'related', '/upload/albums/albums1/DTT-4680-43744274-480x640.jpg', 0, 19),
(508, 329, 'related', '/upload/albums/albums1/DTT-4701-103314747-480x640.jpg', 0, 20),
(509, 329, 'related', '/upload/albums/albums1/DTT-4758-770102973-480x640.jpg', 0, 21),
(510, 329, 'related', '/upload/albums/albums1/DTT-4852-371812819-480x640.jpg', 0, 22),
(511, 329, 'related', '/upload/albums/albums1/DTT-4887-485162832-480x640.jpg', 0, 23),
(512, 329, 'related', '/upload/albums/albums1/DTT-4922-596182502-480x640.jpg', 0, 24),
(513, 329, 'related', '/upload/albums/albums1/DTT-4947-906422283-480x640.jpg', 0, 25),
(514, 329, 'related', '/upload/albums/albums1/DTT-5060-395515651-480x640.jpg', 0, 26),
(515, 329, 'related', '/upload/albums/albums1/DTT-5109-278131441-480x640.jpg', 0, 27),
(516, 329, 'related', '/upload/albums/albums1/DTT-5119-202093164-480x640.jpg', 0, 28),
(517, 329, 'related', '/upload/albums/albums1/DTT-5123-774087366-480x640.jpg', 0, 29),
(518, 329, 'related', '/upload/albums/albums1/DTT-5135-263501499-480x640.jpg', 0, 30),
(519, 329, 'related', '/upload/albums/albums1/DTT-5196-74010910-480x640.jpg', 0, 31),
(520, 329, 'related', '/upload/albums/albums1/DTT-5245-694124405-480x640.jpg', 0, 32),
(521, 329, 'related', '/upload/albums/albums1/DTT-5306-56010339-480x640.jpg', 0, 33),
(522, 329, 'related', '/upload/albums/albums1/DTT-5355-727868986-480x640.jpg', 0, 34),
(523, 329, 'related', '/upload/albums/albums1/DTT-5407-232606251-480x640.jpg', 0, 35),
(524, 329, 'related', '/upload/albums/albums1/DTT-5442-807196824-480x640.jpg', 0, 36),
(525, 329, 'related', '/upload/albums/albums1/DTT-5481%20copy-133941103-480x640.jpg', 0, 37),
(526, 329, 'related', '/upload/albums/albums1/DTT-5542-36177856-480x640.jpg', 0, 38),
(527, 329, 'related', '/upload/albums/albums1/DTT-5562-313209757-480x640.jpg', 0, 39),
(528, 329, 'related', '/upload/albums/albums1/DTT-5600-202835947-480x640.jpg', 0, 40),
(529, 329, 'related', '/upload/albums/albums1/DTT-5623-43076084-480x640.jpg', 0, 41),
(530, 329, 'related', '/upload/albums/albums1/DTT-5724-168026443-480x640.jpg', 0, 42),
(531, 329, 'related', '/upload/albums/albums1/DTT-5734-815382318-480x640.jpg', 0, 43),
(532, 329, 'related', '/upload/albums/albums1/DTT-5756-556545999-480x640.jpg', 0, 44),
(533, 329, 'related', '/upload/albums/albums1/DTT-5804-62841226-480x640.jpg', 0, 45),
(534, 329, 'related', '/upload/albums/albums1/DTT-5827-731109736-480x640.jpg', 0, 46),
(535, 329, 'related', '/upload/albums/albums1/DTT-5861-775044689-480x640.jpg', 0, 47),
(536, 329, 'related', '/upload/albums/albums1/DTT-5899-154176400-480x640.jpg', 0, 48),
(537, 329, 'related', '/upload/albums/albums1/DTT-5936-289441353-480x640.jpg', 0, 49),
(538, 329, 'related', '/upload/albums/albums1/DTT-5948-176074795-480x640.jpg', 0, 50),
(539, 329, 'related', '/upload/albums/albums1/DTT-5961-62819498-480x640.jpg', 0, 51),
(540, 329, 'related', '/upload/albums/albums1/DTT-5963-4845141-480x640.jpg', 0, 52),
(541, 329, 'related', '/upload/albums/albums1/DTT-6006-721121112-480x640.jpg', 0, 53),
(542, 329, 'related', '/upload/albums/albums1/DTT-6023-806713942-480x640.jpg', 0, 54),
(543, 329, 'related', '/upload/albums/albums1/DTT-6078-901647980-480x640.jpg', 0, 55),
(544, 329, 'related', '/upload/albums/albums1/DTT-6133-672938080-480x640.jpg', 0, 56),
(545, 329, 'related', '/upload/albums/albums1/DTT-6149-79887243-480x640.jpg', 0, 57),
(546, 329, 'related', '/upload/albums/albums1/DTT-6160-146206813-480x640.jpg', 0, 58),
(547, 329, 'related', '/upload/albums/albums1/DTT-6173-102162635-480x640.jpg', 0, 59),
(548, 329, 'related', '/upload/albums/albums1/DTT-6202-252103695-480x640.jpg', 0, 60),
(549, 329, 'related', '/upload/albums/albums1/DTT-6225-179778121-480x640.jpg', 0, 61),
(550, 329, 'related', '/upload/albums/albums1/DTT-6302-844370208-480x640.jpg', 0, 62),
(551, 329, 'related', '/upload/albums/albums1/DTT-6316-869705580-480x640.jpg', 0, 63),
(552, 329, 'related', '/upload/albums/albums1/DTT-6342-678899054-480x640.jpg', 0, 64),
(553, 329, 'related', '/upload/albums/albums1/DTT-6346-775323349-480x640.jpg', 0, 65),
(554, 329, 'related', '/upload/albums/albums1/DTT-6409-490002491-480x640.jpg', 0, 66),
(555, 329, 'related', '/upload/albums/albums1/DTT-6440-747147844-480x640.jpg', 0, 67),
(556, 329, 'related', '/upload/albums/albums1/DTT-6454-753182236-480x640.jpg', 0, 68),
(557, 329, 'related', '/upload/albums/albums1/DTT-6456-819329137-480x640.jpg', 0, 69),
(558, 329, 'related', '/upload/albums/albums1/DTT-6464-286244172-480x640.jpg', 0, 70),
(559, 329, 'related', '/upload/albums/albums1/DTT-6473-42322090-480x640.jpg', 0, 71),
(560, 329, 'related', '/upload/albums/albums1/DTT-6510-933899295-480x640.jpg', 0, 72),
(561, 329, 'related', '/upload/albums/albums1/DTT-6528-978081834-480x640.jpg', 0, 73),
(562, 329, 'related', '/upload/albums/albums1/DTT-6566-291342051-480x640.jpg', 0, 74),
(563, 329, 'related', '/upload/albums/albums1/DTT-6569-46945725-480x640.jpg', 0, 75),
(564, 329, 'related', '/upload/albums/albums1/DTT-6588-719568735-480x640.jpg', 0, 76),
(565, 329, 'related', '/upload/albums/albums1/DTT-6630-65967941-480x640.jpg', 0, 77),
(566, 329, 'related', '/upload/albums/albums1/DTT-6647-185725173-480x640.jpg', 0, 78),
(567, 329, 'related', '/upload/albums/albums1/DTT-6657-852489654-480x640.jpg', 0, 79),
(568, 329, 'related', '/upload/albums/albums1/DTT-6680-325962976-480x640.jpg', 0, 80),
(569, 329, 'related', '/upload/albums/albums1/DTT-6706-809588373-480x640.jpg', 0, 81),
(570, 329, 'related', '/upload/albums/albums1/DTT-6740-496503803-480x640.jpg', 0, 82),
(571, 329, 'related', '/upload/albums/albums1/DTT-6769-656933961-480x640.jpg', 0, 83),
(572, 329, 'related', '/upload/albums/albums1/DTT-6777-920084944-480x640.jpg', 0, 84),
(573, 329, 'related', '/upload/albums/albums1/DTT-6836-828840332-480x640.jpg', 0, 85),
(574, 329, 'related', '/upload/albums/albums1/DTT-6870-910385313-480x640.jpg', 0, 86),
(575, 329, 'related', '/upload/albums/albums1/DTT-6899-382143006-480x640.jpg', 0, 87),
(576, 329, 'related', '/upload/albums/albums1/garden-727630212.jpg', 0, 88),
(577, 329, 'related', '/upload/albums/albums1/helly-651855861.jpg', 0, 89),
(664, 320, 'related', '/upload/albums/albums2/art-581775483.jpg', 0, 0),
(665, 320, 'related', '/upload/albums/albums2/cover-490591303.jpg', 0, 1),
(666, 320, 'related', '/upload/albums/albums2/DTT-0511-884730194-480x640.jpg', 0, 2),
(667, 320, 'related', '/upload/albums/albums2/DTT-0611-484390542-480x640.jpg', 0, 3),
(668, 320, 'related', '/upload/albums/albums2/DTT-0677-832447489-480x640.jpg', 0, 4),
(669, 320, 'related', '/upload/albums/albums2/DTT-0701-21618990-480x640.jpg', 0, 5),
(670, 320, 'related', '/upload/albums/albums2/DTT-0745-274924272-480x640.jpg', 0, 6),
(671, 320, 'related', '/upload/albums/albums2/DTT-0849-766539233-480x640.jpg', 0, 7),
(672, 320, 'related', '/upload/albums/albums2/DTT-0868-93319313-480x640.jpg', 0, 8),
(673, 320, 'related', '/upload/albums/albums2/DTT-0896-54861696-480x640.jpg', 0, 9),
(674, 320, 'related', '/upload/albums/albums2/DTT-0908-140264219-480x640.jpg', 0, 10),
(675, 320, 'related', '/upload/albums/albums2/DTT-0949-48036223-480x640.jpg', 0, 11),
(676, 320, 'related', '/upload/albums/albums2/DTT-1001-704388349-480x640.jpg', 0, 12),
(677, 320, 'related', '/upload/albums/albums2/DTT-1133-195964018-480x640.jpg', 0, 13),
(678, 320, 'related', '/upload/albums/albums2/DTT-1191-940449489-480x640.jpg', 0, 14),
(679, 320, 'related', '/upload/albums/albums2/DTT-1200-416152199-480x640.jpg', 0, 15),
(680, 320, 'related', '/upload/albums/albums2/DTT-1249-78119531-480x640.jpg', 0, 16),
(681, 320, 'related', '/upload/albums/albums2/DTT-1261-54853048-480x640.jpg', 0, 17),
(682, 320, 'related', '/upload/albums/albums2/DTT-1333-986094194-480x640.jpg', 0, 18),
(683, 320, 'related', '/upload/albums/albums2/DTT-1349-530853192-480x640.jpg', 0, 19),
(684, 320, 'related', '/upload/albums/albums2/DTT-1354-977007103-480x640.jpg', 0, 20),
(685, 320, 'related', '/upload/albums/albums2/DTT-1389-148733543-480x640.jpg', 0, 21),
(686, 320, 'related', '/upload/albums/albums2/DTT-1405-232894284-480x640.jpg', 0, 22),
(687, 320, 'related', '/upload/albums/albums2/DTT-1425-762796280-480x640.jpg', 0, 23),
(688, 320, 'related', '/upload/albums/albums2/DTT-1522-656081542-480x640.jpg', 0, 24),
(689, 320, 'related', '/upload/albums/albums2/DTT-1642-916385278-480x640.jpg', 0, 25),
(690, 320, 'related', '/upload/albums/albums2/DTT-1648-22398-480x640.jpg', 0, 26),
(691, 320, 'related', '/upload/albums/albums2/DTT-1713-602573427-480x640.jpg', 0, 27),
(692, 320, 'related', '/upload/albums/albums2/DTT-1755-137393609-480x640.jpg', 0, 28),
(693, 320, 'related', '/upload/albums/albums2/DTT-1774-495758944-480x640.jpg', 0, 29),
(694, 320, 'related', '/upload/albums/albums2/DTT-1782-389454663-480x640.jpg', 0, 30),
(695, 320, 'related', '/upload/albums/albums2/DTT-1812-208830668-480x640.jpg', 0, 31),
(696, 320, 'related', '/upload/albums/albums2/DTT-1828-924420567-480x640.jpg', 0, 32),
(697, 320, 'related', '/upload/albums/albums2/DTT-1979-402076299-480x640.jpg', 0, 33),
(698, 320, 'related', '/upload/albums/albums2/DTT-2041-356492481-480x640.jpg', 0, 34),
(699, 320, 'related', '/upload/albums/albums2/DTT-2108-626218279-480x640.jpg', 0, 35),
(700, 320, 'related', '/upload/albums/albums2/DTT-2154-276316594-480x640.jpg', 0, 36),
(701, 320, 'related', '/upload/albums/albums2/DTT-2170-269583768-480x640.jpg', 0, 37),
(702, 320, 'related', '/upload/albums/albums2/DTT-2176-49726651-480x640.jpg', 0, 38),
(703, 320, 'related', '/upload/albums/albums2/DTT-2199-884331723-480x640.jpg', 0, 39),
(704, 320, 'related', '/upload/albums/albums2/DTT-2274-360587630-480x640.jpg', 0, 40),
(705, 320, 'related', '/upload/albums/albums2/DTT-2319-760657543-480x640.jpg', 0, 41),
(706, 320, 'related', '/upload/albums/albums2/DTT-2383-881337596-480x640.jpg', 0, 42),
(707, 320, 'related', '/upload/albums/albums2/DTT-2427-269921216-480x640.jpg', 0, 43),
(708, 320, 'related', '/upload/albums/albums2/DTT-2450-562974939-480x640.jpg', 0, 44),
(709, 320, 'related', '/upload/albums/albums2/DTT-2493-134356861-480x640.jpg', 0, 45),
(710, 320, 'related', '/upload/albums/albums2/DTT-2499-397936838-480x640.jpg', 0, 46),
(711, 320, 'related', '/upload/albums/albums2/DTT-2559-196662971-480x640.jpg', 0, 47),
(712, 320, 'related', '/upload/albums/albums2/DTT-2578-304571738-480x640.jpg', 0, 48),
(713, 320, 'related', '/upload/albums/albums2/DTT-2614-750186306-480x640.jpg', 0, 49),
(714, 320, 'related', '/upload/albums/albums2/DTT-2630-904645215-480x640.jpg', 0, 50),
(715, 320, 'related', '/upload/albums/albums2/DTT-2784-240614618-480x640.jpg', 0, 51),
(716, 320, 'related', '/upload/albums/albums2/DTT-2797-573920920-480x640.jpg', 0, 52),
(717, 320, 'related', '/upload/albums/albums2/DTT-2835-622061841-480x640.jpg', 0, 53),
(718, 320, 'related', '/upload/albums/albums2/DTT-2865-214648528-480x640.jpg', 0, 54),
(719, 320, 'related', '/upload/albums/albums2/DTT-2877-164815949-480x640.jpg', 0, 55),
(720, 320, 'related', '/upload/albums/albums2/DTT-2899-702009281-480x640.jpg', 0, 56),
(721, 320, 'related', '/upload/albums/albums2/DTT-2939-750014312-480x640.jpg', 0, 57),
(722, 320, 'related', '/upload/albums/albums2/DTT-2949-1447576-480x640.jpg', 0, 58),
(723, 320, 'related', '/upload/albums/albums2/DTT-2986-453788245-480x640.jpg', 0, 59),
(724, 320, 'related', '/upload/albums/albums2/DTT-2996-171152256-480x640.jpg', 0, 60),
(725, 320, 'related', '/upload/albums/albums2/DTT-3017-259077632-480x640.jpg', 0, 61),
(726, 320, 'related', '/upload/albums/albums2/DTT-3051-400045396-480x640.jpg', 0, 62),
(727, 320, 'related', '/upload/albums/albums2/DTT-3215-625824338-480x640.jpg', 0, 63),
(728, 320, 'related', '/upload/albums/albums2/DTT-3229-441734539-480x640.jpg', 0, 64),
(729, 320, 'related', '/upload/albums/albums2/DTT-3236-642495147-480x640.jpg', 0, 65),
(730, 320, 'related', '/upload/albums/albums2/DTT-3251-868462088-480x640.jpg', 0, 66),
(731, 320, 'related', '/upload/albums/albums2/DTT-3256-874562-480x640.jpg', 0, 67),
(732, 320, 'related', '/upload/albums/albums2/DTT-3377-461139166-480x640.jpg', 0, 68),
(733, 320, 'related', '/upload/albums/albums2/DTT-3406-219757232-480x640.jpg', 0, 69),
(734, 320, 'related', '/upload/albums/albums2/DTT-3410-636338102-480x640.jpg', 0, 70),
(735, 320, 'related', '/upload/albums/albums2/DTT-3442-914251014-480x640.jpg', 0, 71),
(736, 320, 'related', '/upload/albums/albums2/DTT-3512-561269915-480x640.jpg', 0, 72),
(737, 320, 'related', '/upload/albums/albums2/DTT-3566-281571492-480x640.jpg', 0, 73),
(738, 320, 'related', '/upload/albums/albums2/DTT-3575-294576592-480x640.jpg', 0, 74),
(739, 320, 'related', '/upload/albums/albums2/DTT-3640-199040564-480x640.jpg', 0, 75),
(740, 320, 'related', '/upload/albums/albums2/DTT-3708-335311235-480x640.jpg', 0, 76),
(741, 320, 'related', '/upload/albums/albums2/DTT-3730-990331026-480x640.jpg', 0, 77),
(742, 320, 'related', '/upload/albums/albums2/DTT-3792-117583306-480x640.jpg', 0, 78),
(743, 320, 'related', '/upload/albums/albums2/DTT-3837-776092727-480x640.jpg', 0, 79),
(744, 320, 'related', '/upload/albums/albums2/helly-651855861.jpg', 0, 80),
(757, 331, 'related', '/upload/san%20pham/DTT-4701-103314747.jpg', 29, 0),
(758, 331, 'related', '/upload/san%20pham/DTT-5542-36177856.jpg', 115, 1),
(759, 331, 'related', '/upload/san%20pham/DTT-5562-313209757.jpg', 115, 2),
(760, 331, 'related', '/upload/san%20pham/DTT-5600-202835947.jpg', 115, 3),
(761, 331, 'related', '/upload/san%20pham/DTT-5623-43076084.jpg', 115, 4),
(762, 331, 'related', '/upload/san%20pham/DTT-5724-168026443.jpg', 115, 5),
(763, 331, 'related', '/upload/san%20pham/DTT-5734-815382318.jpg', 115, 6),
(764, 331, 'related', '/upload/san%20pham/DTT-5756-556545999.jpg', 116, 7),
(765, 331, 'related', '/upload/san%20pham/DTT-6149-79887243.jpg', 135, 8),
(775, 335, 'related', '/upload/san%20pham/san%20pham%201/DTT-4701-103314747.jpg', 28, 0),
(776, 335, 'related', '/upload/san%20pham/san%20pham%201/DTT-5542-36177856.jpg', 28, 1),
(777, 335, 'related', '/upload/san%20pham/san%20pham%201/DTT-5562-313209757.jpg', 29, 2),
(778, 335, 'related', '/upload/san%20pham/san%20pham%201/DTT-5600-202835947.jpg', 29, 3),
(779, 335, 'related', '/upload/san%20pham/san%20pham%201/DTT-5623-43076084.jpg', 115, 4),
(780, 335, 'related', '/upload/san%20pham/san%20pham%201/DTT-5724-168026443.jpg', 115, 5),
(781, 335, 'related', '/upload/san%20pham/san%20pham%201/DTT-5734-815382318.jpg', 116, 6),
(782, 335, 'related', '/upload/san%20pham/san%20pham%201/DTT-5756-556545999.jpg', 116, 7),
(783, 335, 'related', '/upload/san%20pham/san%20pham%201/DTT-6149-79887243.jpg', 116, 8);

-- --------------------------------------------------------

--
-- Table structure for table `e4_posts_meta`
--

CREATE TABLE `e4_posts_meta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `e4_posts_meta`
--

INSERT INTO `e4_posts_meta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(74, 24, 'meta_list_related_news', '45,44,43,24,13,12,11,10,9'),
(96, 45, 'meta_title_vi', 'a'),
(97, 45, 'meta_title_en', 'a'),
(98, 45, 'meta_keyword_vi', 'a'),
(99, 45, 'meta_keyword_en', 'd'),
(100, 45, 'meta_description_vi', 'g'),
(101, 45, 'meta_description_en', 'h'),
(102, 45, 'meta_list_related_news', '10,11,9,8,45,44'),
(119, 46, 'meta_list_related_news', '11,12,24,43'),
(124, 4, 'meta_title_vi', 'Meta Title Tiếng Việt Men fashio'),
(125, 4, 'meta_title_en', 'Meta Title Tiếng Anh:'),
(126, 4, 'meta_keyword_vi', 'Meta Keyword Tiếng Việt:'),
(127, 4, 'meta_list_related_news', '47,46,44,43,24'),
(565, 83, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(566, 83, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(567, 83, 'meta_product_code', 'CUULONG'),
(568, 83, 'meta_product_brand', 'Việt Nam'),
(573, 84, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(574, 84, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(575, 84, 'meta_product_code', 'TL023'),
(576, 84, 'meta_product_brand', 'Việt Nam'),
(577, 85, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(578, 85, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(579, 85, 'meta_product_code', 'BIABAOKIEN'),
(580, 85, 'meta_product_brand', 'Việt Nam'),
(581, 86, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(582, 86, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(583, 86, 'meta_product_code', 'BIATT'),
(584, 86, 'meta_product_brand', 'THÁI LAN'),
(585, 87, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(586, 87, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(587, 87, 'meta_product_code', 'BIATTA3'),
(588, 87, 'meta_product_brand', 'THÁI LAN'),
(589, 88, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(590, 88, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(591, 88, 'meta_product_code', 'BIAONEA4'),
(592, 89, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(593, 89, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(594, 89, 'meta_product_code', 'BIAONEA3'),
(595, 89, 'meta_product_brand', 'Việt Nam'),
(600, 91, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(601, 91, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(602, 91, 'meta_product_code', 'L28'),
(603, 91, 'meta_product_brand', 'Việt Nam'),
(620, 96, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(621, 96, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(622, 96, 'meta_product_code', 'TL036'),
(623, 96, 'meta_product_brand', 'THIÊN LONG'),
(624, 97, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(625, 97, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(626, 97, 'meta_product_code', 'BN SP01'),
(627, 97, 'meta_product_brand', 'BẾN NGHÉ'),
(628, 98, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(629, 98, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(630, 98, 'meta_product_code', 'BUTCHUA'),
(631, 98, 'meta_product_brand', 'TRUNG QUỐC'),
(632, 99, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(633, 99, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(634, 99, 'meta_product_code', 'GEL-B01'),
(635, 99, 'meta_product_brand', 'THIÊN LONG'),
(640, 101, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(641, 101, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(642, 101, 'meta_product_code', 'BL60'),
(643, 101, 'meta_product_brand', 'NHẬT BẢN'),
(648, 103, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(649, 103, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(650, 103, 'meta_product_code', 'UB150T'),
(651, 103, 'meta_product_brand', 'NHẬT BẢN'),
(652, 104, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(653, 104, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(654, 104, 'meta_product_code', 'UB-200'),
(655, 104, 'meta_product_brand', 'NHẬT BẢN'),
(656, 105, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(657, 105, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(658, 105, 'meta_product_code', 'CP01TL'),
(659, 105, 'meta_product_brand', 'THIÊN LONG'),
(660, 106, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(661, 106, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(662, 106, 'meta_product_code', 'CP02'),
(663, 106, 'meta_product_brand', 'THIÊN LONG'),
(664, 107, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(665, 107, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(666, 107, 'meta_product_code', 'CP05'),
(667, 107, 'meta_product_brand', 'THIÊN LONG'),
(668, 108, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(669, 108, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(670, 108, 'meta_product_code', 'WH105T12'),
(671, 108, 'meta_product_brand', 'PLUS'),
(672, 109, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(673, 109, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(674, 109, 'meta_product_code', 'WH505'),
(675, 109, 'meta_product_brand', 'PLUS'),
(692, 112, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(693, 112, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(694, 112, 'meta_product_code', 'HL02'),
(695, 112, 'meta_product_brand', 'THIÊN LONG'),
(700, 111, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(701, 111, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(702, 111, 'meta_product_code', 'Luxo 4171'),
(703, 111, 'meta_product_brand', 'ẤN ĐỘ'),
(704, 110, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(705, 110, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(706, 110, 'meta_product_code', 'Steadler 364'),
(707, 110, 'meta_product_brand', 'ĐỨC'),
(708, 114, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(709, 114, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(710, 114, 'meta_product_code', 'Stacom'),
(711, 115, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(712, 115, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(713, 115, 'meta_product_code', ' WB03X'),
(714, 115, 'meta_product_brand', 'THIÊN LONG'),
(727, 118, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(728, 118, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(729, 118, 'meta_product_code', ' flex09'),
(730, 118, 'meta_product_brand', 'Flexoffice'),
(731, 119, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(732, 119, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(733, 119, 'meta_product_code', 'FOPM01'),
(734, 119, 'meta_product_brand', 'Flexoffice'),
(735, 116, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(736, 116, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(737, 116, 'meta_product_code', 'PM04'),
(738, 116, 'meta_product_brand', 'THIÊN LONG'),
(743, 121, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(744, 121, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(745, 121, 'meta_product_code', 'GHIMXC'),
(746, 121, 'meta_product_brand', 'DELI'),
(747, 122, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(748, 122, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(749, 122, 'meta_product_code', '3 Deli 50pcs'),
(750, 122, 'meta_product_brand', 'DELI'),
(755, 124, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(756, 124, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(757, 124, 'meta_product_code', 'DELI 394'),
(758, 124, 'meta_product_brand', 'DELI'),
(759, 125, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(760, 125, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(761, 125, 'meta_product_code', 'Deli -391'),
(762, 125, 'meta_product_brand', 'DELI'),
(763, 126, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(764, 126, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(765, 126, 'meta_product_code', 'Deli 395'),
(766, 126, 'meta_product_brand', 'DELI'),
(767, 127, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(768, 127, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(769, 127, 'meta_product_code', 'Deli 385'),
(770, 127, 'meta_product_brand', 'DELI'),
(771, 128, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(772, 128, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(773, 128, 'meta_product_code', 'MKA4T1'),
(774, 128, 'meta_product_brand', 'ĐÀI LOAN'),
(775, 129, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(776, 129, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(777, 129, 'meta_product_code', 'Gloxy MKA4M1'),
(781, 130, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(782, 130, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(783, 130, 'meta_product_code', 'A3 Gloxy MKA3T'),
(784, 131, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(785, 131, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(786, 131, 'meta_product_code', 'LXA4-100'),
(787, 131, 'meta_product_brand', 'HẢI TIẾN'),
(788, 132, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(789, 132, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(790, 132, 'meta_product_code', 'LXA4200HT'),
(791, 132, 'meta_product_brand', 'HẢI TIẾN'),
(796, 133, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(797, 133, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(798, 133, 'meta_product_code', 'LXA5-100'),
(799, 133, 'meta_product_brand', 'HẢI TIẾN'),
(800, 134, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(801, 134, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(802, 134, 'meta_product_code', 'LXA5-200'),
(803, 134, 'meta_product_brand', 'HẢI TIẾN'),
(804, 135, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(805, 135, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(806, 135, 'meta_product_code', 'LXA6-100'),
(807, 135, 'meta_product_brand', 'HẢI TIẾN'),
(808, 136, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(809, 136, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(810, 136, 'meta_product_code', 'LLXA6-200'),
(811, 136, 'meta_product_brand', 'HẢI TIẾN'),
(816, 138, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(817, 138, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(818, 138, 'meta_product_code', 'LXB5-200'),
(819, 138, 'meta_product_brand', 'HẢI TIẾN'),
(840, 123, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(841, 123, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(842, 123, 'meta_product_code', 'MAX10'),
(843, 123, 'meta_product_brand', 'NHẬT BẢN'),
(844, 113, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(845, 113, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(846, 113, 'meta_product_code', 'HL03'),
(847, 113, 'meta_product_brand', 'THIÊN LONG'),
(856, 117, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(857, 117, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(858, 117, 'meta_product_code', 'PM09'),
(859, 117, 'meta_product_brand', 'THIÊN LONG'),
(860, 100, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(861, 100, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(862, 100, 'meta_product_code', 'BL57'),
(863, 100, 'meta_product_brand', 'NHẬT BẢN'),
(868, 94, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(869, 94, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(870, 94, 'meta_product_code', 'TL-025'),
(871, 94, 'meta_product_brand', 'THIÊN LONG'),
(872, 137, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(873, 137, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(874, 137, 'meta_product_code', 'LXB5-100'),
(875, 137, 'meta_product_brand', 'HẢI TIẾN'),
(876, 120, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(877, 120, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(878, 120, 'meta_product_code', '10PLUS'),
(879, 120, 'meta_product_brand', 'PLUS'),
(912, 142, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(913, 142, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(914, 142, 'meta_product_code', 'Business B6 240tr'),
(915, 142, 'meta_product_brand', 'HẢI TIẾN'),
(916, 143, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(917, 143, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(918, 143, 'meta_product_code', 'Business B6 160tr'),
(919, 143, 'meta_product_brand', 'HẢI TIẾN'),
(920, 144, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(921, 144, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(922, 144, 'meta_product_code', 'Business B7 160tr'),
(923, 144, 'meta_product_brand', 'HẢI TIẾN'),
(924, 145, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(925, 145, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(926, 145, 'meta_product_code', 'Business B7 240tr'),
(927, 145, 'meta_product_brand', 'HẢI TIẾN'),
(928, 146, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(929, 146, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(930, 146, 'meta_product_code', 'Business B8 240tr'),
(931, 146, 'meta_product_brand', 'HẢI TIẾN'),
(932, 147, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(933, 147, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(934, 147, 'meta_product_code', 'Business B8 160tr'),
(935, 147, 'meta_product_brand', 'HẢI TIẾN'),
(936, 148, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(937, 148, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(938, 148, 'meta_product_code', 'Business B9 240tr'),
(939, 148, 'meta_product_brand', 'HẢI TIẾN'),
(940, 149, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(941, 149, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(942, 149, 'meta_product_code', 'Business A4 400'),
(943, 149, 'meta_product_brand', 'HẢI TIẾN'),
(944, 150, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(945, 150, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(946, 150, 'meta_product_code', 'Businees A4 240tr'),
(947, 150, 'meta_product_brand', 'HẢI TIẾN'),
(948, 151, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(949, 151, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(950, 151, 'meta_product_code', 'CK7'),
(951, 151, 'meta_product_brand', 'No brand'),
(952, 152, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(953, 152, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(954, 152, 'meta_product_code', 'CK8'),
(955, 152, 'meta_product_brand', 'No brand'),
(956, 153, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(957, 153, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(958, 153, 'meta_product_code', 'CVDEN'),
(959, 153, 'meta_product_brand', 'HẢI TIẾN'),
(960, 154, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(961, 154, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(962, 154, 'meta_product_code', 'CVDI'),
(963, 154, 'meta_product_brand', 'HẢI TIẾN'),
(972, 157, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(973, 157, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(974, 157, 'meta_product_code', 'KTTH200TR'),
(975, 157, 'meta_product_brand', 'Việt Nam'),
(976, 158, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(977, 158, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(978, 158, 'meta_product_code', 'KTTH320TR'),
(979, 158, 'meta_product_brand', 'Việt Nam'),
(980, 156, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(981, 156, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(982, 156, 'meta_product_code', 'KTTH160TR'),
(983, 156, 'meta_product_brand', 'Việt Nam'),
(984, 159, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(985, 159, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(986, 159, 'meta_product_code', 'SOA5BIACUNG'),
(987, 159, 'meta_product_brand', 'Việt Nam'),
(992, 161, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(993, 161, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(994, 161, 'meta_product_code', 'SOA4BIACUNG200BD'),
(995, 161, 'meta_product_brand', 'Việt Nam'),
(996, 162, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(997, 162, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(998, 162, 'meta_product_code', 'SOA4BIACUNG320BD'),
(999, 162, 'meta_product_brand', 'Việt Nam'),
(1000, 160, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1001, 160, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1002, 160, 'meta_product_code', 'SOA4BIACUNG160BD'),
(1003, 160, 'meta_product_brand', 'Việt Nam'),
(1004, 163, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1005, 163, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1006, 163, 'meta_product_code', 'SOA4BIACUNG160TD'),
(1007, 163, 'meta_product_brand', 'Việt Nam'),
(1008, 164, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1009, 164, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1010, 164, 'meta_product_code', 'SOA4BIACUNG240TD'),
(1011, 164, 'meta_product_brand', 'Việt Nam'),
(1012, 140, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1013, 140, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1014, 140, 'meta_product_code', 'IN240B4TD'),
(1015, 140, 'meta_product_brand', 'HẢI TIẾN'),
(1016, 139, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1017, 139, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1018, 139, 'meta_product_code', 'IN240B4BD'),
(1019, 139, 'meta_product_brand', 'HẢI TIẾN'),
(1032, 90, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1033, 90, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1034, 90, 'meta_product_code', 'BT5'),
(1035, 90, 'meta_product_brand', 'Việt Nam'),
(1036, 92, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1037, 92, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1038, 92, 'meta_product_code', 'D24'),
(1039, 92, 'meta_product_brand', 'Việt Nam'),
(1040, 93, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1041, 93, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1042, 93, 'meta_product_code', 'FO024'),
(1043, 93, 'meta_product_brand', 'Việt Nam'),
(1044, 102, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1045, 102, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1046, 102, 'meta_product_code', 'TIZO310'),
(1047, 102, 'meta_product_brand', 'TRUNG QUỐC'),
(1052, 95, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1053, 95, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1054, 95, 'meta_product_code', 'TL027'),
(1055, 95, 'meta_product_brand', 'THIÊN LONG'),
(1056, 155, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1057, 155, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1058, 155, 'meta_product_code', 'KTTH120TR'),
(1059, 155, 'meta_product_brand', 'HẢI TIẾN'),
(1060, 141, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1061, 141, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1062, 141, 'meta_product_code', 'Business B2 '),
(1063, 141, 'meta_product_brand', 'HẢI TIẾN'),
(1068, 60, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1069, 60, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1070, 60, 'meta_product_code', 'A3Double'),
(1071, 60, 'meta_product_brand', 'THÁI LAN'),
(1072, 63, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>Đặc điểm nổi bật</body>\r\n</html>\r\n'),
(1073, 63, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>Điều kiện</body>\r\n</html>\r\n'),
(1074, 63, 'meta_product_code', 'A5Double'),
(1075, 63, 'meta_product_brand', 'THÁI LAN'),
(1080, 67, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1081, 67, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1082, 67, 'meta_product_code', 'A3PP70'),
(1083, 67, 'meta_product_brand', 'Indonesia '),
(1084, 68, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1085, 68, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1086, 68, 'meta_product_code', 'A4PL70'),
(1087, 68, 'meta_product_brand', 'Indonesia '),
(1092, 70, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1093, 70, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1094, 70, 'meta_product_code', 'PAGI A3'),
(1095, 70, 'meta_product_brand', 'Việt Nam'),
(1096, 72, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1097, 72, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1098, 72, 'meta_product_code', 'PAGIDO73'),
(1099, 72, 'meta_product_brand', 'Việt Nam'),
(1100, 73, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1101, 73, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1102, 73, 'meta_product_code', 'PAGIDO73A5'),
(1103, 73, 'meta_product_brand', 'Việt Nam'),
(1104, 76, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1105, 76, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1106, 76, 'meta_product_code', 'PAGI DOA3'),
(1107, 76, 'meta_product_brand', 'Việt Nam'),
(1108, 77, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1109, 77, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1110, 77, 'meta_product_code', 'PAGIA570'),
(1111, 77, 'meta_product_brand', 'Việt Nam'),
(1119, 78, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1120, 78, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1121, 78, 'meta_product_code', 'PAGIHONG65A4'),
(1122, 69, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1123, 69, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1124, 69, 'meta_product_code', 'PAGI A4'),
(1125, 69, 'meta_product_brand', 'Việt Nam'),
(1126, 79, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1127, 79, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1128, 79, 'meta_product_code', 'PAGIHONGA5'),
(1129, 79, 'meta_product_brand', 'Việt Nam'),
(1130, 80, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1131, 80, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1132, 80, 'meta_product_code', 'PAGIHONGA365'),
(1133, 80, 'meta_product_brand', 'Việt Nam'),
(1134, 71, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1135, 71, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1136, 71, 'meta_product_code', 'A3PL70'),
(1137, 71, 'meta_product_brand', 'Indonesia '),
(1138, 165, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1139, 165, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1140, 165, 'meta_product_code', 'Deli102'),
(1141, 165, 'meta_product_brand', 'DELI'),
(1142, 166, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1143, 166, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1144, 166, 'meta_product_code', 'Deli0125'),
(1145, 166, 'meta_product_brand', 'DELI'),
(1146, 167, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1147, 167, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1148, 167, 'meta_product_code', 'deli104'),
(1149, 167, 'meta_product_brand', 'DELI'),
(1150, 168, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1151, 168, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1152, 168, 'meta_product_code', 'DELI0130'),
(1153, 168, 'meta_product_brand', 'DELI'),
(1154, 169, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1155, 169, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1156, 169, 'meta_product_code', 'TRIO952'),
(1157, 169, 'meta_product_brand', 'Kw-Trio'),
(1158, 170, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1159, 170, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1160, 170, 'meta_product_code', 'DAN10PLUS'),
(1161, 170, 'meta_product_brand', 'NHẬT BẢN'),
(1162, 171, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1163, 171, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1164, 171, 'meta_product_code', 'DAN3PLUS'),
(1165, 171, 'meta_product_brand', 'PLUS'),
(1166, 172, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1167, 172, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1168, 172, 'meta_product_code', '23/8'),
(1169, 172, 'meta_product_brand', 'Kw-Trio'),
(1170, 173, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1171, 173, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1172, 173, 'meta_product_code', '23/10'),
(1173, 173, 'meta_product_brand', 'Kw-Trio'),
(1174, 174, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1175, 174, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1176, 174, 'meta_product_code', '23/13'),
(1177, 174, 'meta_product_brand', 'Kw-Trio'),
(1182, 176, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1183, 176, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1184, 176, 'meta_product_code', '23/17'),
(1185, 176, 'meta_product_brand', 'Kw-Trio'),
(1186, 175, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1187, 175, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1188, 175, 'meta_product_code', '23/15'),
(1189, 175, 'meta_product_brand', 'Kw-Trio'),
(1190, 177, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1191, 177, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1192, 177, 'meta_product_code', '23/20'),
(1193, 177, 'meta_product_brand', 'Kw-Trio'),
(1194, 178, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1195, 178, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1196, 178, 'meta_product_code', '23/23'),
(1197, 178, 'meta_product_brand', 'Kw-Trio'),
(1198, 179, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1199, 179, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1200, 179, 'meta_product_code', 'GOGIM'),
(1201, 179, 'meta_product_brand', 'Kw-Trio'),
(1214, 182, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1215, 182, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1216, 182, 'meta_product_code', 'Deli 9532'),
(1217, 182, 'meta_product_brand', 'DELI'),
(1218, 181, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1219, 181, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1220, 181, 'meta_product_code', 'ACCONHUA'),
(1221, 181, 'meta_product_brand', 'ACCO'),
(1222, 180, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1223, 180, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1224, 180, 'meta_product_code', 'ACCOSAT'),
(1225, 180, 'meta_product_brand', 'ACCO'),
(1226, 183, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1227, 183, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1228, 183, 'meta_product_code', 'Deli 0021'),
(1229, 183, 'meta_product_brand', 'DELI'),
(1230, 184, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1231, 184, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1232, 184, 'meta_product_code', 'Deli 0022'),
(1233, 184, 'meta_product_brand', 'DELI'),
(1234, 185, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1235, 185, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1236, 185, 'meta_product_code', 'C62'),
(1237, 185, 'meta_product_brand', 'TRUNG QUỐC'),
(1238, 186, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1239, 186, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1240, 186, 'meta_product_code', 'C32'),
(1241, 186, 'meta_product_brand', 'TRUNG QUỐC'),
(1242, 187, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1243, 187, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1244, 187, 'meta_product_code', 'C82'),
(1245, 187, 'meta_product_brand', 'TRUNG QUỐC'),
(1246, 188, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1247, 188, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1248, 188, 'meta_product_code', 'GIMMAU'),
(1249, 188, 'meta_product_brand', 'DELI'),
(1250, 189, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1251, 189, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1252, 189, 'meta_product_code', 'Deli M15mm'),
(1253, 189, 'meta_product_brand', 'DELI'),
(1254, 190, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1255, 190, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1256, 190, 'meta_product_code', 'Deli M19mm'),
(1257, 190, 'meta_product_brand', 'DELI'),
(1258, 191, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1259, 191, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1260, 191, 'meta_product_code', 'Deli M25mm'),
(1261, 191, 'meta_product_brand', 'DELI'),
(1262, 192, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1263, 192, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1264, 192, 'meta_product_code', 'Deli M32mm'),
(1265, 192, 'meta_product_brand', 'DELI'),
(1266, 193, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1267, 193, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1268, 193, 'meta_product_code', 'Deli M41mm'),
(1269, 193, 'meta_product_brand', 'DELI'),
(1270, 194, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1271, 194, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1272, 194, 'meta_product_code', 'Deli M51mm'),
(1273, 194, 'meta_product_brand', 'DELI'),
(1274, 195, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1275, 195, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1276, 195, 'meta_product_code', 'KW-TriO 50LA'),
(1277, 195, 'meta_product_brand', 'Kw-Trio'),
(1278, 196, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1279, 196, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1280, 196, 'meta_product_code', 'Deli 390'),
(1281, 196, 'meta_product_brand', 'DELI'),
(1282, 197, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1283, 197, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1284, 197, 'meta_product_code', 'Deli SA 0394'),
(1285, 197, 'meta_product_brand', 'DELI'),
(1286, 198, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1287, 198, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1288, 198, 'meta_product_code', 'Echo 15mm'),
(1289, 198, 'meta_product_brand', 'ECHO'),
(1290, 199, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1291, 199, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1292, 199, 'meta_product_code', 'Echo 19mm'),
(1293, 199, 'meta_product_brand', 'ECHO'),
(1294, 200, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1295, 200, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1296, 200, 'meta_product_code', 'Echo 25mm'),
(1297, 200, 'meta_product_brand', 'ECHO'),
(1298, 201, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1299, 201, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1300, 201, 'meta_product_code', 'Echo 32mm'),
(1301, 201, 'meta_product_brand', 'ECHO'),
(1302, 202, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1303, 202, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1304, 202, 'meta_product_code', 'Echo 41mm'),
(1305, 202, 'meta_product_brand', 'ECHO'),
(1306, 203, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1307, 203, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1308, 203, 'meta_product_code', 'Echo 51mm'),
(1309, 203, 'meta_product_brand', 'ECHO'),
(1310, 204, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1311, 204, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1312, 204, 'meta_product_code', 'Pronoti 3mau'),
(1313, 204, 'meta_product_brand', 'Pronoti'),
(1314, 205, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1315, 205, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1316, 205, 'meta_product_code', 'Pronoti 4 mau'),
(1317, 205, 'meta_product_brand', 'Pronoti'),
(1318, 206, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1319, 206, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1320, 206, 'meta_product_code', 'Pronoti 5mau'),
(1321, 206, 'meta_product_brand', 'Pronoti'),
(1322, 207, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1323, 207, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1324, 207, 'meta_product_code', 'Pronoti5 nilon'),
(1325, 207, 'meta_product_brand', 'Pronoti'),
(1326, 208, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1327, 208, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1328, 208, 'meta_product_code', 'tomycacco'),
(1329, 208, 'meta_product_brand', 'Tomy'),
(1330, 209, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1331, 209, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1332, 209, 'meta_product_code', 'Tomya4'),
(1333, 209, 'meta_product_brand', 'Tomy'),
(1334, 210, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1335, 210, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1336, 210, 'meta_product_code', 'Singhere'),
(1337, 210, 'meta_product_brand', 'Pronoti'),
(1338, 211, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1339, 211, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1340, 211, 'meta_product_code', 'Note15x2'),
(1341, 211, 'meta_product_brand', 'Pronoti'),
(1342, 212, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1343, 212, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1344, 212, 'meta_product_code', 'Note3x2'),
(1345, 212, 'meta_product_brand', 'Pronoti'),
(1346, 213, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1347, 213, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1348, 213, 'meta_product_code', 'Note3x3'),
(1349, 213, 'meta_product_brand', 'Pronoti'),
(1350, 214, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1351, 214, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1352, 214, 'meta_product_code', 'Note3x4'),
(1353, 214, 'meta_product_brand', 'Pronoti'),
(1354, 215, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1355, 215, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1356, 215, 'meta_product_code', 'Note3x5'),
(1357, 215, 'meta_product_brand', 'Pronoti'),
(1358, 216, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1359, 216, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1360, 216, 'meta_product_code', 'Note4x6'),
(1361, 216, 'meta_product_brand', 'Pronoti'),
(1362, 82, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1363, 82, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1364, 82, 'meta_product_code', 'GSTAR'),
(1365, 82, 'meta_product_brand', '	 Ấn Độ'),
(1370, 81, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1371, 81, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1372, 81, 'meta_product_code', 'GIAYTHANHORSE'),
(1373, 81, 'meta_product_brand', 'THÁI LAN'),
(1378, 217, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1379, 217, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1380, 217, 'meta_product_code', 'A0150'),
(1381, 217, 'meta_product_brand', 'Việt Nam'),
(1382, 218, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1383, 218, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1384, 218, 'meta_product_code', 'A0 DL140g( 60m)'),
(1385, 218, 'meta_product_brand', 'Việt Nam'),
(1386, 219, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1387, 219, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1388, 219, 'meta_product_code', 'A0 DL 100g 83m - 120g65m'),
(1389, 219, 'meta_product_brand', 'Việt Nam'),
(1390, 220, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1391, 220, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1392, 220, 'meta_product_code', 'Epson A4 1');
INSERT INTO `e4_posts_meta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(1393, 220, 'meta_product_brand', 'Epson'),
(1398, 222, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1399, 222, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1400, 222, 'meta_product_code', 'KIMMAI260'),
(1401, 222, 'meta_product_brand', 'KIM MAI'),
(1402, 223, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1403, 223, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1404, 223, 'meta_product_code', 'KIMMAI135'),
(1405, 223, 'meta_product_brand', 'KIM MAI'),
(1406, 221, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1407, 221, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1408, 221, 'meta_product_code', 'KIMMAI230'),
(1409, 221, 'meta_product_brand', 'KIM MAI'),
(1414, 224, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1415, 224, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1416, 224, 'meta_product_code', 'BD36MM'),
(1417, 224, 'meta_product_brand', 'Việt Nam'),
(1418, 225, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1419, 225, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1420, 225, 'meta_product_code', 'BD50MM'),
(1421, 225, 'meta_product_brand', 'Việt Nam'),
(1422, 226, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1423, 226, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1424, 226, 'meta_product_code', 'BD70MM'),
(1425, 226, 'meta_product_brand', 'Việt Nam'),
(1442, 230, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1443, 230, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1444, 230, 'meta_product_code', 'BDTRANG3KG'),
(1445, 230, 'meta_product_brand', 'Việt Nam'),
(1446, 231, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1447, 231, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1448, 231, 'meta_product_code', '18MM'),
(1449, 231, 'meta_product_brand', 'Việt Nam'),
(1450, 232, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1451, 232, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1452, 232, 'meta_product_code', 'BDNANO'),
(1453, 232, 'meta_product_brand', 'No brand'),
(1454, 233, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1455, 233, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1456, 233, 'meta_product_code', 'BD2MXOP'),
(1457, 233, 'meta_product_brand', 'No brand'),
(1458, 234, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1459, 234, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1460, 234, 'meta_product_code', 'XOPXANH2CM'),
(1461, 234, 'meta_product_brand', 'No brand'),
(1462, 229, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1463, 229, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1464, 229, 'meta_product_code', 'BDTRANG2-4KG'),
(1465, 229, 'meta_product_brand', 'Việt Nam'),
(1466, 228, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1467, 228, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1468, 228, 'meta_product_code', 'BDTRANG200Y'),
(1469, 228, 'meta_product_brand', 'Việt Nam'),
(1470, 227, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1471, 227, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1472, 227, 'meta_product_code', 'BDTRANG100Y'),
(1473, 227, 'meta_product_brand', 'Việt Nam'),
(1474, 235, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1475, 235, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1476, 235, 'meta_product_code', 'bd2mat1cm'),
(1477, 235, 'meta_product_brand', 'Việt Nam'),
(1478, 236, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1479, 236, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1480, 236, 'meta_product_code', 'bd2mat2cm'),
(1481, 236, 'meta_product_brand', 'No brand'),
(1494, 240, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1495, 240, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1496, 240, 'meta_product_code', 'HKMIC'),
(1497, 240, 'meta_product_brand', 'MIC'),
(1498, 241, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1499, 241, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1500, 241, 'meta_product_code', 'HKStaedlter8g'),
(1501, 241, 'meta_product_brand', 'ĐỨC'),
(1502, 242, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1503, 242, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1504, 242, 'meta_product_code', 'HKStaedtler35g'),
(1505, 242, 'meta_product_brand', 'ĐỨC'),
(1506, 243, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1507, 243, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1508, 243, 'meta_product_code', 'HNMIC'),
(1509, 243, 'meta_product_brand', 'MIC'),
(1510, 244, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1511, 244, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1512, 244, 'meta_product_code', 'HNTLONG'),
(1513, 244, 'meta_product_brand', 'THIÊN LONG'),
(1514, 245, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1515, 245, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1516, 245, 'meta_product_code', 'HKTLONGG01'),
(1517, 245, 'meta_product_brand', 'THIÊN LONG'),
(1518, 246, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1519, 246, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1520, 246, 'meta_product_code', 'HKG014'),
(1521, 246, 'meta_product_brand', 'THIÊN LONG'),
(1522, 247, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1523, 247, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1524, 247, 'meta_product_code', '502'),
(1525, 247, 'meta_product_brand', 'Việt Nam'),
(1526, 248, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1527, 248, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1528, 248, 'meta_product_code', 'HOPGO8013'),
(1529, 248, 'meta_product_brand', 'No brand'),
(1530, 249, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1531, 249, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1532, 249, 'meta_product_code', 'Deli 906'),
(1533, 249, 'meta_product_brand', 'DELI'),
(1534, 250, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1535, 250, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1536, 250, 'meta_product_code', 'Deli 904'),
(1537, 250, 'meta_product_brand', 'DELI'),
(1538, 251, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1539, 251, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1540, 251, 'meta_product_code', 'HB360'),
(1541, 251, 'meta_product_brand', 'No brand'),
(1542, 252, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1543, 252, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1544, 252, 'meta_product_code', 'DELI9881'),
(1545, 252, 'meta_product_brand', 'DELI'),
(1546, 253, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1547, 253, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1548, 253, 'meta_product_code', 'Deli 9147'),
(1549, 253, 'meta_product_brand', 'DELI'),
(1550, 254, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1551, 254, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1552, 254, 'meta_product_code', ' Deli38253 '),
(1553, 254, 'meta_product_brand', 'DELI'),
(1554, 255, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1555, 255, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1556, 255, 'meta_product_code', 'Deli 210mm'),
(1557, 255, 'meta_product_brand', 'DELI'),
(1558, 256, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1559, 256, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1560, 256, 'meta_product_code', 'S100'),
(1561, 256, 'meta_product_brand', 'No brand'),
(1562, 257, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1563, 257, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1564, 257, 'meta_product_code', 'Deli 6009'),
(1565, 257, 'meta_product_brand', 'DELI'),
(1566, 258, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1567, 258, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1568, 258, 'meta_product_code', 'Deli 2043'),
(1569, 258, 'meta_product_brand', 'DELI'),
(1570, 259, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1571, 259, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1572, 259, 'meta_product_code', 'Deli 2031'),
(1573, 259, 'meta_product_brand', 'DELI'),
(1574, 260, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1575, 260, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1576, 260, 'meta_product_code', 'SDI0423'),
(1577, 260, 'meta_product_brand', 'No brand'),
(1578, 261, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1579, 261, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1580, 261, 'meta_product_code', 'SDI 0404'),
(1581, 261, 'meta_product_brand', 'No brand'),
(1582, 262, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1583, 262, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1584, 262, 'meta_product_code', 'SDI to'),
(1585, 262, 'meta_product_brand', 'No brand'),
(1586, 263, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1587, 263, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1588, 263, 'meta_product_code', 'LSDI 0404'),
(1589, 263, 'meta_product_brand', 'No brand'),
(1590, 239, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1591, 239, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1592, 239, 'meta_product_code', 'Deli801'),
(1593, 239, 'meta_product_brand', 'DELI'),
(1594, 238, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1595, 238, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1596, 238, 'meta_product_code', 'Deli - 811'),
(1597, 238, 'meta_product_brand', 'DELI'),
(1598, 237, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1599, 237, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1600, 237, 'meta_product_code', 'CBDDANHOA'),
(1601, 237, 'meta_product_brand', 'DÂN HOA'),
(1602, 264, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1603, 264, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1604, 264, 'meta_product_code', 'EKE5CM'),
(1605, 264, 'meta_product_brand', 'EKE'),
(1606, 265, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1607, 265, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1608, 265, 'meta_product_code', 'EKE7CM'),
(1609, 265, 'meta_product_brand', 'EKE'),
(1610, 266, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1611, 266, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1612, 266, 'meta_product_code', 'EKE10CM'),
(1613, 266, 'meta_product_brand', 'EKE'),
(1614, 267, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1615, 267, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1616, 267, 'meta_product_code', 'KOKUYO5CMA'),
(1617, 267, 'meta_product_brand', 'KOKUYO'),
(1618, 268, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1619, 268, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1620, 268, 'meta_product_code', 'KOKUYO7CMA'),
(1621, 268, 'meta_product_brand', 'KOKUYO'),
(1622, 269, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1623, 269, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1624, 269, 'meta_product_code', 'KOKUYO9CMA'),
(1625, 269, 'meta_product_brand', 'KOKUYO'),
(1626, 270, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1627, 270, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1628, 270, 'meta_product_code', 'TRAMY5CM'),
(1629, 270, 'meta_product_brand', 'TRÀ MY'),
(1630, 271, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1631, 271, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1632, 271, 'meta_product_code', 'TRAMY7CM'),
(1633, 271, 'meta_product_brand', 'TRÀ MY'),
(1634, 272, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1635, 272, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1636, 272, 'meta_product_code', 'TRAMY9CM'),
(1637, 272, 'meta_product_brand', 'TRÀ MY'),
(1638, 273, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1639, 273, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1640, 273, 'meta_product_code', 'KINGJIM5CMA'),
(1641, 273, 'meta_product_brand', 'NHẬT BẢN'),
(1642, 275, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1643, 275, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1644, 275, 'meta_product_code', 'KINGJIM7CMA'),
(1645, 275, 'meta_product_brand', 'NHẬT BẢN'),
(1646, 276, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1647, 276, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1648, 276, 'meta_product_code', 'KINGJIM9CMA'),
(1649, 276, 'meta_product_brand', 'NHẬT BẢN'),
(1650, 277, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1651, 277, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1652, 277, 'meta_product_code', 'KINGJIMONG5'),
(1653, 277, 'meta_product_brand', 'NHẬT BẢN'),
(1654, 278, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1655, 278, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1656, 278, 'meta_product_code', 'KINGJIMONG8'),
(1657, 278, 'meta_product_brand', 'NHẬT BẢN'),
(1662, 280, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1663, 280, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1664, 280, 'meta_product_code', 'KINGJIMONG15'),
(1665, 280, 'meta_product_brand', 'NHẬT BẢN'),
(1666, 279, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1667, 279, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1668, 279, 'meta_product_code', 'KINGJIMONG13'),
(1669, 279, 'meta_product_brand', 'NHẬT BẢN'),
(1670, 281, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1671, 281, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1672, 281, 'meta_product_code', 'PLUS5CM'),
(1673, 281, 'meta_product_brand', 'PLUS'),
(1674, 282, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1675, 282, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1676, 282, 'meta_product_code', 'PLUS7CM'),
(1677, 282, 'meta_product_brand', 'PLUS'),
(1682, 286, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1683, 286, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1684, 286, 'meta_product_code', 'PLUS9ACM'),
(1685, 286, 'meta_product_brand', 'NHẬT BẢN'),
(1686, 287, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1687, 287, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1688, 287, 'meta_product_code', '3302A'),
(1689, 287, 'meta_product_brand', 'TRUNG QUỐC'),
(1690, 288, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1691, 288, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1692, 288, 'meta_product_code', 'TC532 '),
(1693, 288, 'meta_product_brand', 'TRUNG QUỐC'),
(1694, 289, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1695, 289, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1696, 289, 'meta_product_code', 'HF5CM'),
(1697, 289, 'meta_product_brand', 'VIỆT NAM'),
(1698, 290, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1699, 290, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1700, 290, 'meta_product_code', 'HF7CM'),
(1701, 290, 'meta_product_brand', 'VIỆT NAM'),
(1702, 291, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1703, 291, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1704, 291, 'meta_product_code', 'HF10CM'),
(1705, 291, 'meta_product_brand', 'VIỆT NAM'),
(1706, 292, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1707, 292, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1708, 292, 'meta_product_code', 'HF15CM'),
(1709, 292, 'meta_product_brand', 'VIỆT NAM'),
(1710, 293, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1711, 293, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1712, 293, 'meta_product_code', 'HF20CM'),
(1713, 293, 'meta_product_brand', 'VIỆT NAM'),
(1714, 294, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1715, 294, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1716, 294, 'meta_product_code', 'HF25CM'),
(1717, 294, 'meta_product_brand', 'VIỆT NAM'),
(1718, 295, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1719, 295, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1720, 295, 'meta_product_code', 'HF30CM'),
(1721, 295, 'meta_product_brand', 'VIỆT NAM'),
(1722, 296, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1723, 296, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1724, 296, 'meta_product_code', '3DAYGIAY'),
(1725, 296, 'meta_product_brand', 'VIỆT NAM'),
(1726, 297, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1727, 297, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1728, 297, 'meta_product_code', '3DAYNHUA'),
(1729, 297, 'meta_product_brand', 'VIỆT NAM'),
(1730, 298, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1731, 298, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1732, 298, 'meta_product_code', 'TKEKE2M'),
(1733, 298, 'meta_product_brand', 'VIỆT NAM'),
(1734, 299, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1735, 299, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1736, 299, 'meta_product_code', 'TKNHUA2M'),
(1737, 299, 'meta_product_brand', 'VIỆT NAM'),
(1738, 300, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1739, 300, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1740, 300, 'meta_product_code', 'TKNHUA1MAT'),
(1741, 300, 'meta_product_brand', 'VIỆT NAM'),
(1742, 301, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1743, 301, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1744, 301, 'meta_product_code', 'TKShutter'),
(1745, 301, 'meta_product_brand', 'Shutter'),
(1746, 302, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1747, 302, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1748, 302, 'meta_product_code', 'MEKAA4'),
(1749, 302, 'meta_product_brand', 'Shutter'),
(1750, 303, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1751, 303, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1752, 303, 'meta_product_code', 'MIKAA5'),
(1753, 303, 'meta_product_brand', 'VIỆT NAM'),
(1754, 304, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1755, 304, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1756, 304, 'meta_product_code', 'TK1MAT'),
(1757, 304, 'meta_product_brand', 'VIỆT NAM'),
(1758, 305, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1759, 305, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1760, 305, 'meta_product_code', 'xifuda'),
(1761, 305, 'meta_product_brand', 'XIFU'),
(1762, 306, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1763, 306, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1764, 306, 'meta_product_code', 'filelaSunwood20'),
(1765, 306, 'meta_product_brand', 'Sunwood'),
(1766, 307, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1767, 307, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1768, 307, 'meta_product_code', 'filelaSunwood30'),
(1769, 307, 'meta_product_brand', 'Sunwood'),
(1774, 309, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1775, 309, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1776, 309, 'meta_product_code', 'filelaSunwood60'),
(1777, 309, 'meta_product_brand', 'Sunwood'),
(1778, 308, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1779, 308, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1780, 308, 'meta_product_code', 'filelaSunwood40'),
(1781, 308, 'meta_product_brand', 'Sunwood'),
(1782, 310, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1783, 310, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1784, 310, 'meta_product_code', 'filelaSunwood80'),
(1785, 310, 'meta_product_brand', 'Sunwood'),
(1786, 311, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1787, 311, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1788, 311, 'meta_product_code', ' filelaSunwood100'),
(1789, 311, 'meta_product_brand', 'Sunwood'),
(1798, 313, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1799, 313, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1800, 313, 'meta_product_code', 'Gran1-12'),
(1801, 313, 'meta_product_brand', 'Grand'),
(1802, 312, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1803, 312, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1804, 312, 'meta_product_code', 'Grand1-10'),
(1805, 312, 'meta_product_brand', 'Grand'),
(1814, 66, 'meta_highlight', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1815, 66, 'meta_condition', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(1816, 66, 'meta_product_code', 'A4PP70'),
(1817, 66, 'meta_product_brand', 'Indonesia '),
(1821, 322, 'meta_highlight', '<p>Miễn phí Vận chuyển Toàn quốc1111</p>'),
(1823, 323, 'meta_highlight', '<p>111</p>'),
(1826, 57, 'meta_list_related_news', '13,12,11,10,9,8'),
(1827, 47, 'meta_list_related_news', '64,57,46,44,43,24'),
(1828, 59, 'meta_product_code', 'A4Double'),
(1829, 59, 'meta_product_brand', 'THÁI LAN'),
(1830, 321, 'meta_list_related_news', '314,57,46,47'),
(1832, 335, 'meta_product_code', '1811799');

-- --------------------------------------------------------

--
-- Table structure for table `e4_roles`
--

CREATE TABLE `e4_roles` (
  `id` int(5) NOT NULL,
  `role_code` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `role_desc` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(2) NOT NULL,
  `menu_id` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `module_name_list` varchar(5000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `function_code_list` varchar(5000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `e4_roles`
--

INSERT INTO `e4_roles` (`id`, `role_code`, `role_desc`, `status`, `menu_id`, `module_name_list`, `function_code_list`) VALUES
(5, 'Quyền quản trị hệ thống', 'Dành cho người quản trị hệ thống', 1, '117,112,109,108,111,110,107,106,103,102,104,105,95,101,15,96,72,87,49,99,92,91,73,90,74,33,25,51,2,13,10,11', 'albums,student,albums,product_tags,quotation,event,book_nxb,book_author,book,book_category,contact,cart,product_type,product_group,product,product_category,news_tags,analytics_code,news_topic,news_type,news_group,news,web_information,web_image,web_home,product,profile,web_menu,block,task,roles,module,menu_admin,news_category,user', 'student_add,student_delete,student_edit,product_tags_add,product_tags_delete,product_tags_edit,product_tags_view,quotation_add,quotation_delete,quotation_edit,quotation_view,event_add,event_delete,event_edit,event_view,book_nxb_add,book_nxb_delete,book_nxb_edit,book_nxb_view,book_author_add,book_author_delete,book_author_edit,book_author_view,book_add,book_delete,book_edit,book_view,book_category_add,book_category_delete,book_category_edit,book_category_view,contact_delete,contact_edit,contact_event,contact_newsletter,contact_view,cart_add,cart_delete,cart_edit,cart_view,product_type_add,product_type_delete,product_type_edit,product_type_view,product_group_add,product_group_delete,product_group_edit,product_group_view,product_add,product_delete,product_edit,product_view,product_category_add,product_category_delete,product_category_edit,product_category_view,news_tags_add,news_tags_delete,news_tags_edit,news_tags_view,analytics_code_add,analytics_code_delete,analytics_code_edit,analytics_code_view,news_topic_add,news_topic_delete,news_topic_edit,news_topic_view,news_type_add,news_type_delete,news_type_edit,news_type_view,news_group_add,news_group_delete,news_group_edit,news_group_view,news_add,news_delete,news_edit,news_view,web_branches_add,web_branches_delete,web_branches_edit,web_information_edit,web_image_add,web_image_delete,web_image_edit,web_image_view,web_home_add,web_home_delete,web_home_edit,web_home_view,product_add,product_category_add,product_category_delete,product_category_edit,product_category_view,product_delete,product_edit,product_view,profile_change_pass,profile_edit,web_link_edit,web_menu_add,web_menu_delete,web_menu_edit,web_menu_view,block_add,block_delete,block_edit,block_view,task_add,task_delete,task_edit,task_view,roles_add,roles_delete,roles_edit,roles_menu_access,roles_module_action,roles_view,module_add,module_delete,module_edit,module_view,menu_admin_add,menu_admin_delete,menu_admin_edit,menu_admin_view,news_category_add,news_category_delete,news_category_edit,news_category_view,user_add,user_delete,user_edit,user_publish,user_unpublish,user_view'),
(9, 'Nhân viên', 'Dành cho nhân viên quản lý thư viện', 1, '87,74', 'lien-he,dich-vu,recruitments,projects,product,profile,news', 'recruitments_add,recruitments_category_add,recruitments_category_delete,recruitments_category_edit,recruitments_category_view,recruitments_delete,recruitments_edit,recruitments_view,projects_add,projects_category_add,projects_category_delete,projects_category_edit,projects_category_view,projects_delete,projects_edit,projects_view,product_add,product_category_add,product_category_delete,product_category_edit,product_category_view,product_delete,product_edit,product_view,profile_change_pass,profile_edit,news_add,news_category_add,news_category_delete,news_category_edit,news_category_view,news_delete,news_edit,news_view');

-- --------------------------------------------------------

--
-- Table structure for table `e4_tacgia`
--

CREATE TABLE `e4_tacgia` (
  `id` int(11) NOT NULL,
  `tentacgia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `e4_tacgia`
--

INSERT INTO `e4_tacgia` (`id`, `tentacgia`) VALUES
(2, 'Nam Cao'),
(3, 'Lão Hạc');

-- --------------------------------------------------------

--
-- Table structure for table `e4_term_meta`
--

CREATE TABLE `e4_term_meta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `e4_term_meta`
--

INSERT INTO `e4_term_meta` (`meta_id`, `term_id`, `meta_key`, `meta_value`) VALUES
(1, 14, 'meta_title_vi', 'Meta Title Tiếng Việt Men fashio');

-- --------------------------------------------------------

--
-- Table structure for table `e4_term_relationships`
--

CREATE TABLE `e4_term_relationships` (
  `object_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `term_order` int(11) NOT NULL DEFAULT 0,
  `object_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'post'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `e4_term_relationships`
--

INSERT INTO `e4_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`, `object_type`) VALUES
(2, 7, 0, 'post'),
(2, 10, 0, 'post'),
(2, 11, 0, 'post'),
(2, 12, 0, 'post'),
(2, 36, 0, 'post'),
(3, 4, 0, 'post'),
(3, 7, 0, 'post'),
(3, 9, 0, 'post'),
(3, 11, 0, 'post'),
(3, 38, 0, 'post'),
(4, 4, 0, 'post'),
(4, 9, 0, 'post'),
(4, 11, 0, 'post'),
(4, 12, 0, 'post'),
(4, 37, 0, 'post'),
(6, 4, 0, 'post'),
(6, 8, 0, 'post'),
(6, 13, 0, 'product'),
(6, 18, 0, 'product'),
(7, 4, 0, 'post'),
(7, 14, 0, 'product'),
(7, 18, 0, 'product'),
(7, 36, 0, 'post'),
(7, 77, 0, 'post'),
(8, 4, 0, 'post'),
(8, 13, 0, 'product'),
(8, 18, 0, 'product'),
(8, 32, 0, 'product'),
(8, 38, 0, 'post'),
(9, 4, 0, 'post'),
(9, 17, 0, 'product'),
(9, 18, 0, 'product'),
(9, 37, 0, 'post'),
(10, 16, 0, 'product'),
(10, 19, 0, 'product'),
(10, 21, 0, 'product'),
(10, 36, 0, 'post'),
(11, 14, 0, 'product'),
(11, 15, 0, 'product'),
(11, 18, 0, 'product'),
(11, 19, 0, 'product'),
(11, 20, 0, 'product'),
(11, 24, 0, 'product'),
(11, 25, 0, 'product'),
(11, 77, 0, 'post'),
(12, 14, 0, 'product'),
(12, 20, 0, 'product'),
(12, 21, 0, 'product'),
(12, 22, 0, 'product'),
(12, 23, 0, 'product'),
(12, 24, 0, 'product'),
(12, 25, 0, 'product'),
(12, 26, 0, 'product'),
(12, 28, 0, 'product'),
(12, 29, 0, 'product'),
(13, 7, 0, 'post'),
(13, 16, 0, 'product'),
(13, 18, 0, 'product'),
(13, 19, 0, 'product'),
(13, 22, 0, 'product'),
(13, 23, 0, 'product'),
(13, 24, 0, 'product'),
(13, 25, 0, 'product'),
(13, 28, 0, 'product'),
(13, 29, 0, 'product'),
(13, 51, 0, 'post'),
(13, 52, 0, 'post'),
(24, 4, 0, 'post'),
(24, 9, 0, 'post'),
(24, 10, 0, 'post'),
(25, 46, 0, 'book'),
(25, 47, 0, 'book'),
(25, 50, 0, 'book'),
(26, 45, 0, 'book'),
(26, 48, 0, 'book'),
(26, 50, 0, 'book'),
(27, 45, 0, 'book'),
(27, 49, 0, 'book'),
(27, 50, 0, 'book'),
(28, 45, 0, 'book'),
(31, 45, 0, 'book'),
(31, 47, 0, 'book'),
(31, 50, 0, 'book'),
(43, 11, 0, 'post'),
(43, 12, 0, 'post'),
(43, 51, 0, 'post'),
(43, 52, 0, 'post'),
(45, 4, 0, 'post'),
(45, 10, 0, 'post'),
(45, 11, 0, 'post'),
(46, 77, 0, 'post'),
(47, 2, 0, 'post'),
(47, 4, 0, 'post'),
(47, 62, 0, 'post'),
(47, 64, 0, 'post'),
(47, 65, 0, 'post'),
(47, 71, 0, 'post'),
(47, 77, 0, 'post'),
(57, 2, 0, 'post'),
(57, 11, 0, 'post'),
(57, 12, 0, 'post'),
(57, 36, 0, 'post'),
(57, 77, 0, 'post'),
(59, 18, 0, 'product'),
(59, 20, 0, 'product'),
(59, 94, 0, 'product'),
(60, 94, 0, 'product'),
(63, 29, 0, 'product'),
(63, 94, 0, 'product'),
(64, 2, 0, 'post'),
(64, 77, 0, 'post'),
(66, 18, 0, 'product'),
(66, 94, 0, 'product'),
(67, 20, 0, 'product'),
(67, 21, 0, 'product'),
(67, 94, 0, 'product'),
(68, 18, 0, 'product'),
(68, 20, 0, 'product'),
(68, 21, 0, 'product'),
(68, 94, 0, 'product'),
(69, 18, 0, 'product'),
(69, 19, 0, 'product'),
(69, 21, 0, 'product'),
(69, 94, 0, 'product'),
(70, 94, 0, 'product'),
(71, 94, 0, 'product'),
(72, 94, 0, 'product'),
(73, 94, 0, 'product'),
(76, 94, 0, 'product'),
(77, 94, 0, 'product'),
(78, 94, 0, 'product'),
(79, 94, 0, 'product'),
(80, 94, 0, 'product'),
(81, 96, 0, 'product'),
(82, 96, 0, 'product'),
(83, 96, 0, 'product'),
(84, 101, 0, 'product'),
(85, 95, 0, 'product'),
(86, 95, 0, 'product'),
(87, 95, 0, 'product'),
(88, 95, 0, 'product'),
(89, 95, 0, 'product'),
(90, 101, 0, 'product'),
(91, 101, 0, 'product'),
(92, 101, 0, 'product'),
(93, 101, 0, 'product'),
(94, 19, 0, 'product'),
(94, 101, 0, 'product'),
(95, 19, 0, 'product'),
(95, 101, 0, 'product'),
(96, 101, 0, 'product'),
(97, 101, 0, 'product'),
(98, 101, 0, 'product'),
(99, 101, 0, 'product'),
(100, 19, 0, 'product'),
(100, 101, 0, 'product'),
(101, 101, 0, 'product'),
(102, 101, 0, 'product'),
(103, 101, 0, 'product'),
(104, 101, 0, 'product'),
(105, 102, 0, 'product'),
(106, 102, 0, 'product'),
(107, 102, 0, 'product'),
(108, 102, 0, 'product'),
(109, 102, 0, 'product'),
(110, 103, 0, 'product'),
(111, 103, 0, 'product'),
(112, 103, 0, 'product'),
(113, 20, 0, 'product'),
(113, 21, 0, 'product'),
(113, 103, 0, 'product'),
(114, 103, 0, 'product'),
(117, 19, 0, 'product'),
(120, 20, 0, 'product'),
(123, 20, 0, 'product'),
(123, 21, 0, 'product'),
(128, 95, 0, 'product'),
(129, 95, 0, 'product'),
(130, 95, 0, 'product'),
(137, 20, 0, 'product'),
(204, 78, 0, 'product'),
(205, 78, 0, 'product'),
(206, 78, 0, 'product'),
(207, 78, 0, 'product'),
(208, 78, 0, 'product'),
(209, 78, 0, 'product'),
(210, 78, 0, 'product'),
(211, 78, 0, 'product'),
(212, 78, 0, 'product'),
(213, 78, 0, 'product'),
(214, 78, 0, 'product'),
(215, 78, 0, 'product'),
(216, 78, 0, 'product'),
(217, 94, 0, 'product'),
(218, 94, 0, 'product'),
(219, 94, 0, 'product'),
(220, 100, 0, 'product'),
(221, 100, 0, 'product'),
(222, 100, 0, 'product'),
(223, 100, 0, 'product'),
(312, 24, 0, 'product'),
(312, 28, 0, 'product'),
(321, 77, 0, 'post'),
(321, 129, 0, 'post'),
(322, 78, 0, 'product'),
(323, 18, 0, 'product'),
(323, 24, 0, 'product'),
(323, 25, 0, 'product'),
(323, 28, 0, 'product'),
(323, 94, 0, 'product'),
(323, 115, 0, 'product'),
(326, 18, 0, 'product'),
(326, 24, 0, 'product'),
(326, 25, 0, 'product'),
(326, 26, 0, 'product'),
(326, 94, 0, 'product'),
(330, 77, 0, 'post'),
(330, 129, 0, 'post'),
(331, 18, 0, 'product'),
(331, 95, 0, 'product'),
(332, 129, 0, 'post'),
(333, 129, 0, 'post'),
(335, 94, 0, 'product');

-- --------------------------------------------------------

--
-- Table structure for table `e4_term_taxonomy`
--

CREATE TABLE `e4_term_taxonomy` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `parent` bigint(20) NOT NULL DEFAULT 0,
  `title_vi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brief_vi` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brief_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_part` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` bigint(20) NOT NULL DEFAULT 0,
  `order` int(5) NOT NULL DEFAULT 0,
  `position` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `e4_term_taxonomy`
--

INSERT INTO `e4_term_taxonomy` (`id`, `taxonomy`, `parent`, `title_vi`, `title_en`, `brief_vi`, `brief_en`, `image`, `url_part`, `count`, `order`, `position`, `status`) VALUES
(1, 'category', 0, 'Magazine', 'Magazine', '     Giới thiệu Tiếng Việt', '     About education', '', 'magazine', 1, 0, 'left', 'active'),
(2, 'category', 0, 'Blog', 'Blog', '   ', '   ', '', 'blog', 3, 0, 'left', 'active'),
(4, 'group', 0, 'Our Blogs', 'Our Blogs', '     ', '     ', 'http://localhost/manlio/templates/manlio/img/blog/cat-post/cat-post-1.jpg', 'our-blogs', 9, 5, 'footer', 'active'),
(7, 'type', 0, 'Tin trong nước', 'Vietnam', '   ', '   ', NULL, 'tin-trong-nuoc', 5, 0, 'home', 'active'),
(8, 'type', 0, 'Tin quốc tế', 'International', ' ', ' ', NULL, 'tin-quoc-te', 2, 0, 'home', 'active'),
(9, 'topic', 0, 'Thời sự 24h', 'Daily news', '   ', '   ', 'http://bunomart.com/templates/buno/img/discount.jpg', 'thoi-su-24h', 3, 0, 'home', 'active'),
(10, 'topic', 0, 'Tin tức bốn phương', 'News', ' ', ' ', 'http://bunomart.com/templates/buno/img/discount.jpg', 'tin-tuc-bon-phuong', 4, 0, 'home', 'active'),
(11, 'post_tags', 0, 'Covid-19', 'Covid-19', ' ', ' ', NULL, 'covid-19', 6, 0, 'home', 'active'),
(12, 'post_tags', 0, 'Showbiz', 'Showbiz', ' ', ' ', NULL, 'showbiz', 4, 0, 'home', 'active'),
(18, 'product_group', 0, 'Sản phẩm nổi bật', 'Featured Products', ' New Hammer sole for Sports person New Hammer sole for Sports person', '    ', '', 'san-pham-noi-bat', 13, 1, 'home', 'active'),
(19, 'product_group', 0, 'Sản phẩm bán chạy', 'Best seller', '', '', NULL, 'san-pham-ban-chay', 8, 3, 'home', 'deactive'),
(20, 'product_group', 0, 'Deals of the Week', 'New Products', '  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '  ', 'http://localhost/manlio/templates/manlio/img/category/c5.jpg', 'deals-of-the-week', 9, 4, 'footer', 'deactive'),
(21, 'product_group', 0, 'Hot trend', 'Hot trend', '', '', NULL, 'hot-trend', 7, 2, 'home', 'active'),
(22, 'product_type', 0, 'Size', 'Size', '   ', '   ', NULL, 'size', 2, 0, '', 'active'),
(23, 'product_type', 0, 'Màu sắc', 'Color', '', '', NULL, 'mau-sac', 2, 0, '', 'active'),
(24, 'product_type', 22, 'S', 'S', '    ', '    ', NULL, 's', 6, 0, '', 'active'),
(25, 'product_type', 22, 'M', 'M', '   ', '   ', NULL, 'm', 5, 0, '', 'active'),
(26, 'product_type', 22, 'L', 'L', '   ', '   ', NULL, 'l', 2, 0, '', 'active'),
(28, 'product_type', 23, 'Đen', '#a1a1a1', '  ', '  ', NULL, 'den', 4, 0, '', 'active'),
(29, 'product_type', 23, 'Trắng', 'white', ' ', ' ', NULL, 'trang', 3, 0, '', 'active'),
(36, 'category', 0, 'Sự kiện', 'event', '  ', '  ', '', 'su-kien', 4, 0, 'left', 'active'),
(37, 'category', 0, 'Áo dài', '', '  ', '  ', '', 'ao-dai', 2, 0, 'left', 'active'),
(38, 'category', 0, 'HAUL', 'HAUL', '  ', '  ', '', 'haul', 2, 0, '', 'active'),
(45, 'book_category', 0, 'Kinh điển', 'Kinh điển', '  ', '  ', NULL, 'kinh-dien', 4, 0, 'header', 'active'),
(46, 'book_category', 0, 'Đương đại', 'Đương đại', ' ', ' ', NULL, 'duong-dai', 1, 0, NULL, 'active'),
(47, 'book_author', 0, 'Nguyễn Hữu Thắng', 'Nguyễn Hữu Thắng', '  Những cuộc phiêu lưu của Jonathan là một chủ nghĩa tự do cuốn sách được viết bởi Ken Schoolland , một tự do chủ nghĩa và giáo sư kinh tế học . ', '  ', 'http://bunomart.com/templates/buno/img/discount.jpg', 'nguyen-huu-thang', 2, 0, NULL, 'active'),
(48, 'book_author', 0, 'Leonel Messi', 'Leonel Messi', ' ', ' ', '', 'leonel-messi', 1, 0, NULL, 'active'),
(49, 'book_author', 0, 'Nam Cao', 'Nam Cao', ' ', ' ', '', 'nam-cao', 2, 0, NULL, 'active'),
(50, 'book_group', 0, 'Ấn phẩm đặc biệt', 'Ấn phẩm đặc biệt', 'Danh sách ấn phẩm sẽ hiển thị ở trang chủ', '', NULL, 'an-pham-dac-biet', 5, 0, 'home', 'active'),
(51, 'topic', 0, 'Sitamet, consectetur adipiscing elit, sed do eiusmod 1', '', 'Qiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totamrem aperiam, eaque ipsa quae ab illo inventore', '', 'http://bunomart.com/templates/buno/img/discount.jpg', 'sitamet-consectetur-adipiscing-elit-sed-do-eiusmod-1', 2, 0, 'home', 'active'),
(52, 'topic', 0, 'Qiciatis unde omnis iste natus sit', '', 'Qiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totamrem aperiam, eaque ipsa quae ab illo inventore', '', 'http://bunomart.com/templates/buno/img/discount.jpg', 'qiciatis-unde-omnis-iste-natus-sit', 2, 0, 'home', 'active'),
(53, 'book_category', 0, 'Phổ thông', 'Phổ thông', '', '', NULL, 'pho-thong', 0, 0, NULL, 'active'),
(62, 'post_tags', 0, 'thang', NULL, NULL, NULL, NULL, 'thang', 1, 0, NULL, 'active'),
(63, 'post_tags', 0, 'thang nguyen', NULL, NULL, NULL, NULL, 'thang-nguyen', 0, 0, NULL, 'active'),
(64, 'post_tags', 0, 'CNTT', NULL, NULL, NULL, NULL, 'cntt', 1, 0, NULL, 'active'),
(65, 'post_tags', 0, 'Phần mềm', NULL, NULL, NULL, NULL, 'phan-mem', 1, 0, NULL, 'active'),
(67, 'post_tags', 0, 'thời tiết', NULL, NULL, NULL, NULL, 'thoi-tiet', 0, 0, NULL, 'active'),
(70, 'post_tags', 0, 'Phần mềm giao duc', NULL, NULL, NULL, NULL, 'phan-mem-giao-duc', 0, 0, NULL, 'active'),
(71, 'post_tags', 0, 'nguyen', NULL, NULL, NULL, NULL, 'nguyen', 1, 0, NULL, 'active'),
(72, 'product_tags', 0, 'Thời trang nữ', '', '', '', NULL, 'thoi-trang-nu', 1, 0, '', 'active'),
(73, 'product_tags', 0, 'Handmade', 'Handmade', '', '', NULL, 'handmade', 1, 0, '', 'active'),
(74, 'product_tags', 0, 'Đồ chơi trẻ em', NULL, NULL, NULL, NULL, 'do-choi-tre-em', 1, 0, NULL, 'active'),
(75, 'product_tags', 0, 'thangnh', NULL, NULL, NULL, NULL, 'thangnh', 0, 0, NULL, 'active'),
(76, 'product_category', 0, 'BEST SELLER', 'BEST SELLER', '    ', '    ', '', 'best-seller', 1, -1, 'home', 'active'),
(77, 'group', 0, 'TIN NỔI BẬT', 'Featured news', '   ', '   ', 'http://localhost/manlio/templates/manlio/img/blog/cat-post/cat-post-1.jpg', 'tin-noi-bat', 8, 4, 'right', 'active'),
(78, 'product_category', 0, 'Sản phẩm', 'Product', '  ', '  ', '', 'san-pham', 14, 0, 'left', 'active'),
(79, 'product_category', 0, 'Last price', '', '  ', '  ', '', 'last-price', 1, 0, 'left', 'active'),
(80, 'product_tags', 0, 'anh hùng', NULL, NULL, NULL, NULL, 'anh-hung', 0, 0, NULL, 'active'),
(81, 'product_category', 0, 'Tinh dầu', '', '  ', '  ', 'http://localhost/manlio/templates/manlio/img/category/c2.jpg', 'so-cac-loai', 0, 0, 'home', 'active'),
(94, 'product_category', 78, 'Áo', 'Áo', ' ', ' ', '', 'ao', 22, 0, 'left', 'active'),
(95, 'product_category', 78, 'Váy', '', '  ', '  ', '', 'vay', 9, 0, 'left', 'active'),
(96, 'product_category', 78, 'Quan', '', '    ', '    ', 'http://vanphongphambinhan.com/chi-tiet/giay-than-cuu-long-mau-xanh.html', 'quan', 3, 0, 'left', 'active'),
(97, 'product_category', 78, 'Quần Sooc', '', ' ', ' ', '', 'quan-sooc', 0, 0, 'left', 'active'),
(98, 'product_category', 78, 'Chân Váy', '', '   ', '   ', '', 'chan-vay', 0, 0, 'left', 'active'),
(99, 'product_category', 78, 'Jumpsuit', '', '  ', '  ', '', 'jumpsuit', 0, 0, 'left', 'active'),
(100, 'product_category', 79, 'Áo Khoác', '', '  ', '  ', '', 'outlet-ao-khoac', 4, 0, 'left', 'active'),
(101, 'product_category', 79, 'Áo', '', ' ', ' ', '', 'outlet-ao', 16, 0, 'left', 'active'),
(102, 'product_category', 79, 'Váy', '', ' ', ' ', '', 'outlet-vay', 5, 0, 'left', 'active'),
(103, 'product_category', 79, 'Quần', '', ' ', ' ', '', 'outlet-quan', 5, 0, 'left', 'active'),
(115, 'product_type', 23, 'Nâu', 'brown', ' ', ' ', NULL, 'nau', 1, 0, '', 'active'),
(116, 'product_type', 23, 'Xám', 'gray', ' ', ' ', NULL, 'xam', 0, 0, '', 'active'),
(117, 'product_type', 23, 'Bạc', 'silver', '  ', '  ', NULL, 'bac', 0, 0, '', 'active'),
(129, 'category', 0, 'Giới thiệu', 'Giới thiệu', '', '', NULL, 'gioi-thieu', 4, 0, '', 'active'),
(132, 'group', 0, 'Social Life', 'Social Life', '  Let the food be finished', '  Let the food be finished', 'http://localhost/manlio/templates/manlio/img/blog/cat-post/cat-post-1.jpg', 'social-life', 0, 1, 'header', 'active'),
(133, 'group', 0, 'Politics', 'Politics', ' Let the food be finished', ' Let the food be finished', 'http://localhost/manlio/templates/manlio/img/blog/cat-post/cat-post-1.jpg', 'politics', 0, 2, 'header', 'active'),
(134, 'group', 0, 'Food', 'Food', ' Let the food be finished', ' Let the food be finished', 'http://localhost/manlio/templates/manlio/img/blog/cat-post/cat-post-1.jpg', 'food', 0, 3, 'header', 'active'),
(135, 'product_type', 23, 'Kem', 'mintcream', '', '', NULL, 'kem', 0, 0, '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `e4_thanhtoan`
--

CREATE TABLE `e4_thanhtoan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `sotien` int(11) NOT NULL,
  `ghichu` int(11) NOT NULL,
  `time_update` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `e4_thanhtoan`
--

INSERT INTO `e4_thanhtoan` (`id`, `id_user`, `sotien`, `ghichu`, `time_update`) VALUES
(1, 13, 100000, 0, 1640991601);

-- --------------------------------------------------------

--
-- Table structure for table `e4_users`
--

CREATE TABLE `e4_users` (
  `id` int(11) NOT NULL,
  `masv` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'admin' COMMENT 'admin hoac public',
  `fullname` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(36) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `permission` int(5) NOT NULL,
  `publish` int(1) NOT NULL DEFAULT 1,
  `random` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `homephone` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobifone` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_url` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `yahoo` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `skype` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_created` int(20) DEFAULT NULL,
  `user_created` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_updated` int(20) NOT NULL,
  `user_updated` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status_public` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `lop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `khoa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dienthoai` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notiensach` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `e4_users`
--

INSERT INTO `e4_users` (`id`, `masv`, `user_type`, `fullname`, `password`, `email`, `permission`, `publish`, `random`, `address`, `homephone`, `mobifone`, `image_url`, `facebook`, `yahoo`, `skype`, `date_created`, `user_created`, `date_updated`, `user_updated`, `status_public`, `lop`, `khoa`, `dienthoai`, `notiensach`) VALUES
(1, '', 'admin', 'Administrator', 'e10adc3949ba59abbe56e057f20f883e', 'admin@gmail.com', 5, 1, 'b6356128c7df86c0b1024590ad12c482adafa', 'Số 29/394 Mỹ Đình, Nam Từ Liêm, Hà Nội', '0433 839 932', '098 226 9600', '', 'nguyenhuuthang.1987', 'huuthangb2k50@yahoo.com', 'huuthangb2k50', 1512438986, '', 1594715708, 'admin@gmail.com', '', '', '', '', 0),
(2, '', 'admin', 'Nguyễn Thắng', 'e10adc3949ba59abbe56e057f20f883e', 'huuthangb2k50@gmail.com', 9, 1, 'b6356128c7df86c0b1024590ad12c482adafa', '', '0433 839 932', '098 226 9600', '', 'https://facebook.com/nguyenhuuthang.19872', '', '', 1594625935, 'admin@gmail.com', 1598758811, 'admin@gmail.com', 'quocte', '', '', '', 0),
(3, '', 'admin', 'Developer', 'e10adc3949ba59abbe56e057f20f883e', 'dev@gmail.com', 5, 1, '36d475a9172b50735e9e17a552adacb5', NULL, '', '', '', '', '', '', 1597912302, 'admin@gmail.com', 1597912302, 'admin@gmail.com', NULL, '', '', '', 0),
(4, '', 'admin', 'Nguyễn Hữu Thắng', 'e10adc3949ba59abbe56e057f20f883e', 'nguyenhuuthang@gmail.com', 5, 1, 'e357942890ae7248a15bb487249bb89f', NULL, NULL, '0982269600', 'https://upload.wikimedia.org/wikipedia/commons/a/a2/Namcao.jpg', 'https://facebook.com/nguyenhuuthang.1987', NULL, NULL, 1597933612, 'admin@gmail.com', 1603873228, 'admin@gmail.com', '', '', '', '', 0),
(5, '', 'admin', 'Nam Cao', 'e10adc3949ba59abbe56e057f20f883e', 'namcao@gmail.com', 9, 1, '5208090a665f02910bac740d9399e5d6', NULL, NULL, '', 'https://upload.wikimedia.org/wikipedia/commons/a/a2/Namcao.jpg', '', NULL, NULL, 1597945921, 'admin@gmail.com', 1598805473, 'admin@gmail.com', 'danhnhan', '', '', '', 0),
(6, '', 'admin', 'Ngô Tất Tố', '0cc175b9c0f1b6a831c399e269772661', 'ngotatto@gmail.com', 9, 1, '7dd9dee258a8b96026f846c7605fd0d1', NULL, NULL, '', 'https://upload.wikimedia.org/wikipedia/vi/9/92/NgoTatTo.jpg', '', NULL, NULL, 1597945991, 'admin@gmail.com', 1598762734, 'admin@gmail.com', 'vietnam', '', '', '', 0),
(7, '', 'admin', 'Thạch Lam', '0cc175b9c0f1b6a831c399e269772661', 'thachlam@gmail.com', 9, 1, '65df97c8e1ed609c4250b16341c75aba', NULL, NULL, '', 'https://media.ex-cdn.com/EXP/media.nongnghiep.vn/files/bao_in/2020/05/19/thachlam-0928_20200519_694-100644.jpeg', '', NULL, NULL, 1597946064, 'admin@gmail.com', 1598762740, 'admin@gmail.com', 'quocte', '', '', '', 0),
(13, '1851062330', 'public', 'Phùng Văn Công', 'e10adc3949ba59abbe56e057f20f883e', '1851062330@e.tlu.edu.vn', 9, 1, 'c739373b3a5604e8be503095dbcd92e7', NULL, NULL, NULL, '', '', NULL, NULL, 1666861526, 'admin@gmail.com', 1666861526, 'admin@gmail.com', NULL, '60TH1', 'CNTT', '0973642772', 0),
(14, '1851062345', 'public', 'Đào Tùng Lâm', 'e10adc3949ba59abbe56e057f20f883e', '1851062345@e.tlu.edu.vn', 9, 1, 'e714f66102588512cad19bc913098fc8', NULL, NULL, NULL, '', '', NULL, NULL, 1666862294, 'admin@gmail.com', 1666862294, 'admin@gmail.com', NULL, '60TH1', 'CNTT', '0973642773', 220000);

-- --------------------------------------------------------

--
-- Table structure for table `e4_users_meta`
--

CREATE TABLE `e4_users_meta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `e4_users_meta`
--

INSERT INTO `e4_users_meta` (`meta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(59, 2, 'meta_brief', ''),
(60, 2, 'meta_content', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(61, 6, 'meta_brief', 'Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totamrem aperiam, eaque ipsa quae ab illo inventore veritatis'),
(62, 6, 'meta_content', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(63, 7, 'meta_brief', 'Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totamrem aperiam, eaque ipsa quae ab illo inventore veritatis'),
(64, 7, 'meta_content', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>&nbsp;</body>\r\n</html>\r\n'),
(65, 5, 'meta_brief', 'Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totamrem aperiam, eaque ipsa quae ab illo inventore veritatis'),
(66, 5, 'meta_content', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p><em>Trump có thể thành công mà không cần nhìn lại lịch sử, nhưng nhóm cố vấn của ông thì thừa hiểu điều đó và ngay tại nội bộ của nhóm cũng tồn tại những tranh luận gay gắt về “cây gậy” hơn hay “củ cà rốt” hơn. Dù thế nào ông cũng đã chọn chính sách thương mại bảo hộ và thái độ kì thị với các hiệp định thương mại tự do. Vậy đằng</em>&nbsp;<em>sau chính sách đó thực sự là gì</em><em>?</em></p>\r\n\r\n<p><strong>Tại sao Trump lại bài xích các hiệp định thương mại tự do đến vậy?</strong></p>\r\n\r\n<p>Lý thuyết kinh tế học từ lâu đã chỉ ra rằng các nước khi tham gia thương mại tự do đều có lợi, ngay cả khi một nước có công nghệ thua kém hơn ở tất cả các ngành so với những nước còn lại trong khối thương mại<a href=\"file:///D:/Downloads/%C4%90%E1%BA%B1ng%20sau%20ch%C3%ADnh%20s%C3%A1ch%20b%E1%BA%A3o%20h%E1%BB%99%20th%C6%B0%C6%A1ng%20m%E1%BA%A1i%20c%E1%BB%A7a%20Trump%20_Linh_%C4%91%C3%A3%20s%E1%BB%ADa.docx#_ftn1\" name=\"_ftnref1\" title=\"\">[1]</a>. Ý tưởng này xuất phát từ David Ricardo - nhà kinh tế học người Anh thế kỉ XVIII, người đã dạy chúng ta rằng miễn là một nước sản xuất sản phẩm mà nước đó làm tốt nhất (lợi thế so sánh), thì nước đó sẽ hưởng lợi từ thương mại các quốc gia.</p>\r\n\r\n<p>Các nhà kinh tế có thể bất đồng với nhau về nhiều chuyện, nhưng tự do thương mại hầu như không nằm trong số đó. Vậy còn Trump, ông ấy đã nghĩ điều gì vậy?</p>\r\n\r\n<p>Trump cho rằng chính các hiệp định thương mại tự do đã mang việc làm ra khỏi nước Mỹ, và nước Mỹ bị tổn hại lớn bởi những điều khoản ràng buộc trong các hiệp định đó.</p>\r\n</body>\r\n</html>\r\n'),
(67, 4, 'meta_brief', 'Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totamrem aperiam, eaque ipsa quae ab illo inventore veritatis'),
(68, 4, 'meta_content', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>Hồ Chí Minh was born as Nguyễn Sinh Cung<sup class=\"reference\" id=\"cite_ref-BBC2005_2-1\"><a href=\"https://en.wikipedia.org/wiki/Ho_Chi_Minh#cite_note-BBC2005-2\">[2]</a></sup><sup class=\"reference\" id=\"cite_ref-HL1_4-1\"><a href=\"https://en.wikipedia.org/wiki/Ho_Chi_Minh#cite_note-HL1-4\">[a]</a></sup><sup class=\"reference\" id=\"cite_ref-HL2_5-1\"><a href=\"https://en.wikipedia.org/wiki/Ho_Chi_Minh#cite_note-HL2-5\">[4]</a></sup> in 1890 in the village of <a class=\"mw-redirect\" href=\"https://en.wikipedia.org/wiki/Ho%C3%A0ng_Tr%C3%B9\" title=\"Hoàng Trù\">Hoàng Trù</a> (the name of the local temple near Làng Sen), his mother\'s village. Although 1890 is generally accepted as his birth year, at various times he used four other birth years:<sup class=\"reference\" id=\"cite_ref-9\"><a href=\"https://en.wikipedia.org/wiki/Ho_Chi_Minh#cite_note-9\">[8]</a></sup> 1891,<sup class=\"reference\" id=\"cite_ref-10\"><a href=\"https://en.wikipedia.org/wiki/Ho_Chi_Minh#cite_note-10\">[9]</a></sup> 1892,<sup class=\"reference\" id=\"cite_ref-11\"><a href=\"https://en.wikipedia.org/wiki/Ho_Chi_Minh#cite_note-11\">[10]</a></sup> 1894<sup class=\"reference\" id=\"cite_ref-12\"><a href=\"https://en.wikipedia.org/wiki/Ho_Chi_Minh#cite_note-12\">[11]</a></sup> and 1895.<sup class=\"reference\" id=\"cite_ref-13\"><a href=\"https://en.wikipedia.org/wiki/Ho_Chi_Minh#cite_note-13\">[12]</a></sup> From 1895, he grew up in his father <a href=\"https://en.wikipedia.org/wiki/Nguy%E1%BB%85n_Sinh_S%E1%BA%AFc\" title=\"Nguyễn Sinh Sắc\">Nguyễn Sinh Sắc (Nguyễn Sinh Huy)\'s</a> village of <a class=\"mw-redirect\" href=\"https://en.wikipedia.org/wiki/L%C3%A0ng_Sen\" title=\"Làng Sen\">Làng Sen</a>, <a href=\"https://en.wikipedia.org/wiki/Kim_Li%C3%AAn,_Ngh%E1%BB%87_An\" title=\"Kim Liên, Nghệ An\">Kim Liên</a>, Nam Đàn, and <a href=\"https://en.wikipedia.org/wiki/Ngh%E1%BB%87_An_Province\" title=\"Nghệ An Province\">Nghệ An Province</a>. He had three siblings: his sister Bạch Liên (Nguyễn Thị Thanh), a clerk in the <a href=\"https://en.wikipedia.org/wiki/French_Army\" title=\"French Army\">French Army</a>; his brother <a href=\"https://en.wikipedia.org/wiki/Nguy%E1%BB%85n_Sinh_Khi%C3%AAm\" title=\"Nguyễn Sinh Khiêm\">Nguyễn Sinh Khiêm</a> (Nguyễn Tất Đạt), a <a href=\"https://en.wikipedia.org/wiki/Geomancy\" title=\"Geomancy\">geomancer</a> and <a class=\"mw-redirect\" href=\"https://en.wikipedia.org/wiki/Traditional_Chinese_herbs\" title=\"Traditional Chinese herbs\">traditional herbalist</a>; and another brother (Nguyễn Sinh Nhuận), who died in infancy. As a young child, Cung (Ho) studied with his father before more formal classes with a scholar named Vuong Thuc Do. He quickly mastered <a href=\"https://en.wikipedia.org/wiki/Written_Chinese\" title=\"Written Chinese\">Chinese writing</a>, a prerequisite for any serious study of <a href=\"https://en.wikipedia.org/wiki/Confucianism\" title=\"Confucianism\">Confucianism</a>, while honing his colloquial Vietnamese writing.<sup class=\"reference\" id=\"cite_ref-Duiker_6-1\"><a href=\"https://en.wikipedia.org/wiki/Ho_Chi_Minh#cite_note-Duiker-6\">[5]</a></sup><sup class=\"reference\" style=\"white-space:nowrap;\">:<span>21</span></sup> In addition to his studies, he was fond of adventure and loved to fly <a href=\"https://en.wikipedia.org/wiki/Kite\" title=\"Kite\">kites</a> and go fishing.<sup class=\"reference\" id=\"cite_ref-Duiker_6-2\"><a href=\"https://en.wikipedia.org/wiki/Ho_Chi_Minh#cite_note-Duiker-6\">[5]</a></sup><sup class=\"reference\" style=\"white-space:nowrap;\">:<span>21</span></sup> Following Confucian tradition, his father gave him a new name at the age of 10: <i>Nguyễn Tất Thành</i> (\"Nguyễn the Accomplished\").</p>\r\n\r\n<p>His father was a Confucian scholar and teacher and later an imperial magistrate in the small remote district of Binh Khe (<a href=\"https://en.wikipedia.org/wiki/Qui_Nh%C6%A1n\" title=\"Qui Nhơn\">Qui Nhơn</a>). He was demoted for abuse of power after an influential local figure died several days after having received 102 strokes of the <a href=\"https://en.wikipedia.org/wiki/Caning\" title=\"Caning\">cane</a> as punishment for an infraction.<sup class=\"reference\" id=\"cite_ref-Duiker_6-3\"><a href=\"https://en.wikipedia.org/wiki/Ho_Chi_Minh#cite_note-Duiker-6\">[5]</a></sup><sup class=\"reference\" style=\"white-space:nowrap;\">:<span>21</span></sup> His father was eligible to serve in the imperial bureaucracy, but he refused because it meant serving the French.<sup class=\"reference\" id=\"cite_ref-:0_14-0\"><a href=\"https://en.wikipedia.org/wiki/Ho_Chi_Minh#cite_note-:0-14\">[13]</a></sup> This exposed Thành (Ho) to rebellion at a young age and seemed to be the norm for the province. Nevertheless, he received a French education, attending <i><a href=\"https://en.wikipedia.org/wiki/Qu%E1%BB%91c_H%E1%BB%8Dc_%E2%80%93_Hu%E1%BA%BF_High_School_for_the_Gifted\" title=\"Quốc Học – Huế High School for the Gifted\">Collège Quốc học</a></i> (<i><a class=\"mw-redirect\" href=\"https://en.wikipedia.org/wiki/Lyc%C3%A9e\" title=\"Lycée\">lycée</a></i> or secondary education) in <a href=\"https://en.wikipedia.org/wiki/Hu%E1%BA%BF\" title=\"Huế\">Huế</a>. His disciples, <a href=\"https://en.wikipedia.org/wiki/Ph%E1%BA%A1m_V%C4%83n_%C4%90%E1%BB%93ng\" title=\"Phạm Văn Đồng\">Phạm Văn Đồng</a> and <a href=\"https://en.wikipedia.org/wiki/V%C3%B5_Nguy%C3%AAn_Gi%C3%A1p\" title=\"Võ Nguyên Giáp\">Võ Nguyên Giáp</a>, also attended the school, as did <a class=\"mw-redirect\" href=\"https://en.wikipedia.org/wiki/Ng%C3%B4_%C4%90%C3%ACnh_Di%E1%BB%87m\" title=\"Ngô Đình Diệm\">Ngô Đình Diệm</a>, the future President of South Vietnam (and political rival).<sup class=\"reference\" id=\"cite_ref-15\"><a href=\"https://en.wikipedia.org/wiki/Ho_Chi_Minh#cite_note-15\">[14]</a></sup></p>\r\n</body>\r\n</html>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `e4_web_home`
--

CREATE TABLE `e4_web_home` (
  `id` int(11) NOT NULL,
  `parent` int(5) NOT NULL,
  `title_vi` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `brief_vi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `brief_en` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_vi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_en` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `file_download` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_name` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` int(5) DEFAULT NULL,
  `date_created` int(20) DEFAULT NULL,
  `user_created` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_updated` int(20) DEFAULT NULL,
  `user_updated` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Lưu thông tin về cấu hình các box trên trang chủ';

--
-- Dumping data for table `e4_web_home`
--

INSERT INTO `e4_web_home` (`id`, `parent`, `title_vi`, `title_en`, `brief_vi`, `brief_en`, `content_vi`, `content_en`, `image`, `file_download`, `icon`, `link`, `link_name`, `status`, `order`, `date_created`, `user_created`, `date_updated`, `user_updated`) VALUES
(34, 0, 'Banner ', 'Top Slides', '', '', '	\r\n\r\n \r\n\r\n', '\r\n\r\n	\r\n\r\n&nbsp;\r\n\r\n', '', '', '', '', '', 'active', 1, 1575276668, 'admin@gmail.com', 1655906638, '1'),
(82, 34, 'Uy tín - Tiện ích - Giá cả hợp lý', 'The Project Jacket 1', 'Giá cả luôn tốt nhất -  Giao hàng miễn phí các quận nội thành - Phục vụ 24/24', '', '\r\n	\r\n\r\n \r\n\r\n', '\r\n\r\n	\r\n\r\n&nbsp;\r\n\r\n', '/upload/banner/banner%20ngang-689558861.jpg', '', '', '#', 'Xem thêm', 'active', 1, 1592476536, 'admin@gmail.com', 1655895919, '1'),
(84, 34, 'Nike New <br>Collection!', 'The Project Jacket 12', '► Cung cấp văn phòng phẩm\r\n► Mực in, đổ mực máy in, máy phô tô và các dịch vụ in ấn', '', '\r\n	\r\n\r\n \r\n\r\n', '\r\n\r\n	\r\n\r\n&nbsp;\r\n\r\n', '/upload/banner/Banner%20ngang%20MAU-763413657.jpg', '', '', '#', 'Xem thêm', 'active', 2, 1592476562, 'admin@gmail.com', 1655895985, '1'),
(124, 34, 'New collections', NULL, '“UY TÍN – TIỆN LỢI – GIÁ CẢ HỢP LÝ\r\nNỖ LỰC LÀM HÀI LÒNG KHÁCH HÀNG”.', NULL, '\r\n	\r\n\r\n \r\n\r\n', NULL, '/upload/banner/Banner%20ngang%20-25-107247923.jpg', NULL, '', '#', '', 'active', 0, 1603633307, '1', 1655895901, '1');

-- --------------------------------------------------------

--
-- Table structure for table `e4_web_image`
--

CREATE TABLE `e4_web_image` (
  `id` int(5) NOT NULL,
  `title_vi` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `region` int(2) NOT NULL DEFAULT 0,
  `status` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `date_created` int(20) NOT NULL DEFAULT 0,
  `user_created` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `date_updated` int(20) NOT NULL DEFAULT 0,
  `user_updated` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `e4_web_image`
--

INSERT INTO `e4_web_image` (`id`, `title_vi`, `title_en`, `image`, `link`, `position`, `region`, `status`, `date_created`, `user_created`, `date_updated`, `user_updated`) VALUES
(2, 'Logo', 'Logo', '/upload/logo/logo.png', '', 'logo', 2, 'active', 1487872000, 'admin@gmail.com', 1655887665, 'admin@gmail.com'),
(3, 'Ảnh icon cho trình duyệt', 'Ảnh icon cho trình duyệt', 'https://demo.auburnforest.com/wordpress/pivotal/wp-content/uploads/2020/02/fav-1.png', '', 'icon', 1, 'active', 1487872053, 'admin@gmail.com', 1592465484, 'admin@gmail.com'),
(4, 'Banner quảng cáo', 'Banner quảng cáo', '/upload/banner/custom-baner1.png', '#', 'right-banner-news', 4, 'active', 1612336585, 'admin@gmail.com', 1655869191, 'admin@gmail.com'),
(5, 'Hình nền đầu trang', 'Hình nền đầu trang', '/upload/banner/Banner%20ngang-656009042.jpg', '', 'background-header', 3, 'active', 1612343103, 'admin@gmail.com', 1655894519, 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `e4_web_menu`
--

CREATE TABLE `e4_web_menu` (
  `id` int(5) NOT NULL,
  `title_vi` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(5) NOT NULL DEFAULT 0,
  `parent` int(11) NOT NULL DEFAULT 0,
  `url_html` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'main' COMMENT 'Dùng để cấu hình tùy chọn các nhóm menu hiển thị trên giao diện frontpage',
  `type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `user_created` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_created` int(20) NOT NULL DEFAULT 0,
  `user_updated` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_updated` int(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `e4_web_menu`
--

INSERT INTO `e4_web_menu` (`id`, `title_vi`, `title_en`, `description`, `order`, `parent`, `url_html`, `position`, `type`, `status`, `user_created`, `date_created`, `user_updated`, `date_updated`) VALUES
(4, 'Thông tin', 'Thông tin', NULL, 2, 81, '/', 'main', '', 'active', '', 0, 'admin@gmail.com', 1655889841),
(8, 'Liên hệ', 'Contacts', NULL, 5, 84, 'lien-he', '', '', 'active', '', 0, 'admin@gmail.com', 1603766329),
(43, 'Sản phẩm', 'Products', NULL, 2, 84, 'san-pham', '', 'mega', 'active', 'admin@gmail.com', 1592465875, 'admin@gmail.com', 1603767041),
(47, 'Tin tức', 'News', NULL, 4, 81, '#', '', '', 'active', 'admin@gmail.com', 1594648747, 'admin@gmail.com', 1656046928),
(67, 'Dịch vụ khách hàng', '', NULL, 3, 85, '#', '', '', 'active', 'admin@gmail.com', 1597546841, 'admin@gmail.com', 1655907014),
(68, 'Chính sách mua hàng', '', NULL, 1, 67, 'tin-tuc/chinh-sach-mua-hang-tai-he-thong-d-chic.html', 'footer', '', 'active', 'admin@gmail.com', 1597546877, 'admin@gmail.com', 1656060815),
(69, 'EMAC', 'EMAC', NULL, 1, 85, '#', '', '', 'active', 'admin@gmail.com', 1597546920, 'admin@gmail.com', 1655906804),
(76, 'Chính sách bảo mật', '', NULL, 0, 67, '#', 'footer', '', 'active', 'admin@gmail.com', 1603081214, 'admin@gmail.com', 1655907040),
(77, 'Hỗ trợ khách hàng', 'support', NULL, 2, 85, '#', '', '', 'active', 'admin@gmail.com', 1603081364, 'admin@gmail.com', 1655906957),
(78, 'Liên hệ', 'contact', NULL, 0, 69, '/lien-he.html', '', '', 'active', 'admin@gmail.com', 1603081429, 'admin@gmail.com', 1656043937),
(79, 'Giới thiệu', '', NULL, 0, 69, '/chi-tiet/ve-chung-toi-emac.html', '', '', 'active', 'admin@gmail.com', 1603081460, 'admin@gmail.com', 1656043721),
(80, 'Hướng dẫn mua hàng', '', NULL, 0, 77, 'chi-tiet/huong-dan-dat-hang-tren-website-d-chic.html', '', '', 'active', 'admin@gmail.com', 1603081523, 'admin@gmail.com', 1656060970),
(81, 'Về EMAC', 'Home', NULL, 1, 84, 've-emac', '', '', 'active', 'admin@gmail.com', 1603620070, 'admin@gmail.com', 1655889662),
(83, 'Khác', 'Khác', NULL, 6, 84, 'san-pham/vat-dung-khac', '', '', 'active', 'admin@gmail.com', 1603699273, 'admin@gmail.com', 1603766935),
(84, 'Menu chính', NULL, 'Menu chính trên đầu trang', 1, 0, NULL, 'main', '', 'active', 'admin@gmail.com', 1603766093, 'admin@gmail.com', 1603766093),
(85, 'Menu cuối trang', NULL, 'Menu sẽ hiển thị ở khu vực cuối trang cho toàn bộ website', 2, 0, NULL, 'footer', '', 'active', 'admin@gmail.com', 1603766110, 'admin@gmail.com', 1603766110),
(86, 'Tất cả', 'All', NULL, 3, 47, 'tin-tuc', 'main', '', 'active', 'admin@gmail.com', 1603766796, 'admin@gmail.com', 1655889879),
(87, 'BEST SELLER', 'BEST SELLER', NULL, 1, 43, '#', 'main', '', 'active', 'admin@gmail.com', 1603767035, 'admin@gmail.com', 1655889947),
(88, 'Tất cả', 'All', NULL, 2, 87, '#', 'main', '', 'active', 'admin@gmail.com', 1603767055, 'admin@gmail.com', 1655889975),
(89, 'Sản phẩm', 'Sản phẩm', NULL, 3, 43, '#', 'main', '', 'active', 'admin@gmail.com', 1603767068, 'admin@gmail.com', 1655889995),
(90, 'Tất cả', 'All', NULL, 4, 89, 'san-pham', 'main', '', 'active', 'admin@gmail.com', 1603767079, 'admin@gmail.com', 1655892513),
(91, 'Bộ sưu tập', 'Albums', NULL, 4, 81, '#', 'main', '', 'active', 'admin@gmail.com', 1656046952, 'admin@gmail.com', 1656046952),
(92, 'Tất cả', 'all', NULL, 4, 91, 'albums', 'main', '', 'active', 'admin@gmail.com', 1656046986, 'admin@gmail.com', 1656046994),
(93, 'Hướng dẫn mua hàng', '', NULL, 3, 84, 'chi-tiet/huong-dan-dat-hang-tren-website-d-chic', 'main', '', 'active', 'admin@gmail.com', 1656054921, 'admin@gmail.com', 1656060951);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `e4_analytics_code`
--
ALTER TABLE `e4_analytics_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e4_blocks`
--
ALTER TABLE `e4_blocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e4_book`
--
ALTER TABLE `e4_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e4_comments`
--
ALTER TABLE `e4_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e4_contacts`
--
ALTER TABLE `e4_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e4_counter_visited`
--
ALTER TABLE `e4_counter_visited`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e4_danhmucsach`
--
ALTER TABLE `e4_danhmucsach`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e4_functions`
--
ALTER TABLE `e4_functions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Module Id` (`module_id`);

--
-- Indexes for table `e4_leftmenu`
--
ALTER TABLE `e4_leftmenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e4_modules`
--
ALTER TABLE `e4_modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e4_muonsach`
--
ALTER TABLE `e4_muonsach`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e4_nhaxuatban`
--
ALTER TABLE `e4_nhaxuatban`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e4_options`
--
ALTER TABLE `e4_options`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `option_name` (`option_name`);

--
-- Indexes for table `e4_order`
--
ALTER TABLE `e4_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e4_order_detail`
--
ALTER TABLE `e4_order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e4_posts`
--
ALTER TABLE `e4_posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url_part` (`url_part`);

--
-- Indexes for table `e4_posts_image`
--
ALTER TABLE `e4_posts_image`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `e4_posts_meta`
--
ALTER TABLE `e4_posts_meta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `e4_roles`
--
ALTER TABLE `e4_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e4_tacgia`
--
ALTER TABLE `e4_tacgia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e4_term_meta`
--
ALTER TABLE `e4_term_meta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `e4_term_relationships`
--
ALTER TABLE `e4_term_relationships`
  ADD PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  ADD KEY `term_taxonomy_id` (`term_taxonomy_id`);

--
-- Indexes for table `e4_term_taxonomy`
--
ALTER TABLE `e4_term_taxonomy`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url_part` (`url_part`);

--
-- Indexes for table `e4_thanhtoan`
--
ALTER TABLE `e4_thanhtoan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e4_users`
--
ALTER TABLE `e4_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e4_users_meta`
--
ALTER TABLE `e4_users_meta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `e4_web_home`
--
ALTER TABLE `e4_web_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e4_web_image`
--
ALTER TABLE `e4_web_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e4_web_menu`
--
ALTER TABLE `e4_web_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `e4_analytics_code`
--
ALTER TABLE `e4_analytics_code`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `e4_blocks`
--
ALTER TABLE `e4_blocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `e4_book`
--
ALTER TABLE `e4_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `e4_comments`
--
ALTER TABLE `e4_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `e4_contacts`
--
ALTER TABLE `e4_contacts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `e4_counter_visited`
--
ALTER TABLE `e4_counter_visited`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1045;

--
-- AUTO_INCREMENT for table `e4_danhmucsach`
--
ALTER TABLE `e4_danhmucsach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `e4_functions`
--
ALTER TABLE `e4_functions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `e4_leftmenu`
--
ALTER TABLE `e4_leftmenu`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `e4_modules`
--
ALTER TABLE `e4_modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `e4_muonsach`
--
ALTER TABLE `e4_muonsach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `e4_nhaxuatban`
--
ALTER TABLE `e4_nhaxuatban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `e4_options`
--
ALTER TABLE `e4_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2094;

--
-- AUTO_INCREMENT for table `e4_order`
--
ALTER TABLE `e4_order`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `e4_order_detail`
--
ALTER TABLE `e4_order_detail`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `e4_posts`
--
ALTER TABLE `e4_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=336;

--
-- AUTO_INCREMENT for table `e4_posts_image`
--
ALTER TABLE `e4_posts_image`
  MODIFY `image_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=784;

--
-- AUTO_INCREMENT for table `e4_posts_meta`
--
ALTER TABLE `e4_posts_meta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1833;

--
-- AUTO_INCREMENT for table `e4_roles`
--
ALTER TABLE `e4_roles`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `e4_tacgia`
--
ALTER TABLE `e4_tacgia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `e4_term_meta`
--
ALTER TABLE `e4_term_meta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `e4_term_taxonomy`
--
ALTER TABLE `e4_term_taxonomy`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `e4_thanhtoan`
--
ALTER TABLE `e4_thanhtoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `e4_users`
--
ALTER TABLE `e4_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `e4_users_meta`
--
ALTER TABLE `e4_users_meta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `e4_web_home`
--
ALTER TABLE `e4_web_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `e4_web_image`
--
ALTER TABLE `e4_web_image`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `e4_web_menu`
--
ALTER TABLE `e4_web_menu`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `e4_functions`
--
ALTER TABLE `e4_functions`
  ADD CONSTRAINT `Module Id` FOREIGN KEY (`module_id`) REFERENCES `e4_modules` (`id`);

--
-- Constraints for table `e4_users`
--
ALTER TABLE `e4_users`
  ADD CONSTRAINT `Role Id` FOREIGN KEY (`permission`) REFERENCES `e4_roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
