-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2022 at 07:04 PM
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
  `vitri` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `e4_book`
--

INSERT INTO `e4_book` (`id`, `masach`, `tensach`, `mota`, `namxuatban`, `nhaxuatban`, `danhmucsach`, `giasach`, `soluong`, `tacgia`, `nguoitao`, `url`, `trangthai`, `vitri`, `image`) VALUES
(1, 'TA001', 'Tri ??n 3', '<p>sssssss</p>', 0, 1, 3, 100000, 201, '3', 1, 'tri-an', 0, '', '/upload/san%20pham/DTT-5542-36177856.jpg'),
(2, 'TA002', 'S??ch Ti???ng Anh', '', 0, 1, 2, 120000, 1, '2', 1, 'sach-tieng-anhta002', 0, '', '/upload/san%20pham/DTT-5542-36177856.jpg');

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
(2, 'S??ch Khoa H???c Th??? Gi???i'),
(3, 'S??ch V??n H???c'),
(4, 'Kim ?????ng'),
(5, 'S??ch m???i'),
(6, 'S??ch To??n H???c');

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
(1, 'menu_admin_add', 'Th??m m???i Menu Admin', 31, 1483898597, '1', 'active'),
(2, 'menu_admin_edit', 'S???a Menu Admin', 31, 1483898611, '1', 'active'),
(3, 'menu_admin_delete', 'X??a Menu Admin', 31, 1483898622, '1', 'active'),
(4, 'menu_admin_view', 'Xem danh s??ch Menu Admin', 31, 1483898634, '1', 'active'),
(5, 'module_add', 'Th??m m???i module', 34, 1483898661, '1', 'active'),
(6, 'module_edit', 'S???a module', 34, 1483898672, '1', 'active'),
(7, 'module_delete', 'X??a module', 34, 1483898683, '1', 'active'),
(8, 'module_view', 'Xem danh s??ch module', 34, 1483898693, '1', 'active'),
(9, 'roles_view', 'Xem danh s??ch nh??m quy???n', 46, 1483898712, '1', 'active'),
(10, 'roles_add', 'Th??m m???i nh??m quy???n', 46, 1483898721, '1', 'active'),
(11, 'roles_edit', 'S???a nh??m quy???n', 46, 1483898731, '1', 'active'),
(12, 'roles_delete', 'X??a nh??m quy???n', 46, 1483898740, '1', 'active'),
(13, 'roles_module_action', 'Ph??n quy???n thao t??c ch???c n??ng cho nh??m quy???n', 46, 1483898754, '1', 'active'),
(14, 'roles_menu_access', 'Ph???n quy???n thao t??c menu admin cho nh??m quy???n', 46, 1483898762, '1', 'active'),
(15, 'task_add', 'Th??m m???i Task', 50, 1483898783, '1', 'active'),
(16, 'task_edit', 'S???a Task', 50, 1483898790, '1', 'active'),
(17, 'task_delete', 'X??a Task', 50, 1483898806, '1', 'active'),
(18, 'task_view', 'Xem danh s??ch task - modules', 50, 1483898826, '1', 'active'),
(19, 'block_add', 'Th??m m???i Block', 51, 1483898844, '1', 'active'),
(20, 'block_edit', 'S???a Block', 51, 1483898853, '1', 'active'),
(21, 'block_delete', 'X??a Block', 51, 1483898865, '1', 'active'),
(22, 'block_view', 'Xem danh s??ch Block', 51, 1483898880, '1', 'active'),
(23, 'user_add', 'Th??m m???i ng?????i d??ng', 1, 1483898897, '1', 'active'),
(24, 'user_edit', 'S???a ng?????i d??ng', 1, 1483898905, '1', 'active'),
(25, 'user_delete', 'X??a ng?????i d??ng', 1, 1483898918, '1', 'active'),
(26, 'user_publish', 'K??ch ho???t ng?????i d??ng', 1, 1483898929, '1', 'active'),
(27, 'user_unpublish', 'Kh??a ng?????i d??ng', 1, 1483898936, '1', 'active'),
(28, 'user_view', 'Xem danh s??ch ng?????i d??ng', 1, 1483898945, '1', 'active'),
(29, 'news_add', 'Th??m m???i tin t???c', 115, 1483898959, '1', 'active'),
(30, 'news_category_add', 'Th??m m???i danh m???c tin t???c', 4, 1483898970, '1', 'active'),
(31, 'news_delete', 'X??a tin t???c', 115, 1483898979, '1', 'active'),
(32, 'news_category_delete', 'X??a danh m???c tin t???c', 4, 1483898988, '1', 'active'),
(33, 'news_category_edit', 'S???a danh m???c tin t???c', 4, 1483898998, '1', 'active'),
(34, 'news_category_view', 'Xem danh s??ch danh m???c tin t???c', 4, 1483899008, '1', 'active'),
(35, 'news_edit', 'S???a tin t???c', 115, 1483899021, '1', 'active'),
(36, 'news_view', 'Xem danh s??ch tin t???c', 115, 1483899032, '1', 'active'),
(37, 'profile_edit', 'S???a th??ng tin t??i kho???n c?? nh??n', 108, 1483947014, '1', 'active'),
(38, 'profile_change_pass', '?????i m???t kh???u t??i kho???n c?? nh??n', 108, 1483947040, '1', 'active'),
(39, 'product_view', 'Xem danh s??ch s???n ph???m', 109, 1484233794, '1', 'active'),
(40, 'product_add', 'Th??m m???i s???n ph???m', 109, 1484233825, '1', 'active'),
(41, 'product_edit', 'S???a s???n ph???m', 109, 1484233841, '1', 'active'),
(42, 'product_delete', 'X??a s???n ph???m', 109, 1484233855, '1', 'active'),
(43, 'product_category_add', 'Th??m m???i danh m???c s???n ph???m', 109, 1484233880, '1', 'active'),
(44, 'product_category_edit', 'S???a danh m???c s???n ph???m', 109, 1484233901, '1', 'active'),
(45, 'product_category_view', 'Xem danh s??ch danh m???c s???n ph???m', 109, 1484233920, '1', 'active'),
(46, 'product_category_delete', 'X??a danh m???c s???n ph???m', 109, 1484233942, '1', 'active'),
(51, 'web_menu_add', 'Th??m m???i Menu website', 107, 1484681667, '1', 'active'),
(52, 'web_menu_edit', 'S???a Menu website', 107, 1484681695, '1', 'active'),
(53, 'web_menu_delete', 'X??a Menu website', 107, 1484681709, '1', 'active'),
(54, 'web_menu_view', 'Xem danh s??ch Menu website', 107, 1484681722, '1', 'active'),
(55, 'web_home_add', 'Th??m m???i n???i dung', 111, 1484753712, '1', 'active'),
(56, 'web_home_edit', 'S???a n???i dung', 111, 1484753724, '1', 'active'),
(57, 'web_home_delete', 'X??a n???i dung', 111, 1484753736, '1', 'active'),
(58, 'web_home_view', 'Xem danh s??ch n???i dung', 111, 1484753747, '1', 'active'),
(59, 'web_image_add', 'Th??m m???i h??nh ???nh', 112, 1484761002, '1', 'active'),
(60, 'web_image_edit', 'S???a h??nh ???nh', 112, 1484761013, '1', 'active'),
(61, 'web_image_delete', 'X??a h??nh ???nh', 112, 1484761023, '1', 'active'),
(62, 'web_image_view', 'Xem danh s??ch h??nh ???nh', 112, 1484761035, '1', 'active'),
(63, 'web_branches_add', 'Th??m m???i chi nh??nh', 114, 1487872320, '1', 'active'),
(64, 'web_branches_delete', 'X??a th??ng tin chi nh??nh', 114, 1487872338, '1', 'active'),
(65, 'web_branches_edit', 'S???a th??ng tin chi nh??nh', 114, 1487872352, '1', 'active'),
(66, 'web_information_edit', 'S???a th??ng tin website', 114, 1487872371, '1', 'active'),
(67, 'news_group_add', 'Th??m nh??m tin t???c', 116, 1595237243, '1', 'active'),
(68, 'news_group_edit', 'S???a nh??m tin t???c', 116, 1595237261, '1', 'active'),
(69, 'news_group_delete', 'X??a nh??m tin t???c', 116, 1595237301, '1', 'active'),
(70, 'news_group_view', 'Xem danh s??ch nh??m tin t???c', 116, 1595237323, '1', 'active'),
(71, 'news_type_edit', 'S???a lo???i tin t???c', 117, 1595237641, '1', 'active'),
(72, 'news_type_add', 'Th??m lo???i tin t???c', 117, 1595237654, '1', 'active'),
(73, 'news_type_delete', 'X??a lo???i tin t???c', 117, 1595237673, '1', 'active'),
(74, 'news_type_view', 'Xem danh s??ch lo???i tin t???c', 117, 1595237694, '1', 'active'),
(76, 'news_topic_add', 'Th??m chuy??n ?????', 118, 1595237950, '1', 'active'),
(77, 'news_topic_delete', 'X??a chuy??n ?????', 118, 1595237962, '1', 'active'),
(78, 'news_topic_edit', 'S???a chuy??n ?????', 118, 1595237975, '1', 'active'),
(79, 'news_topic_view', 'Xem danh s??ch chuy??n ?????', 118, 1595237990, '1', 'active'),
(80, 'analytics_code_add', 'Th??m m??', 119, 1595491797, '1', 'active'),
(81, 'analytics_code_edit', 'S???a m??', 119, 1595491809, '1', 'active'),
(82, 'analytics_code_delete', 'X??a m??', 119, 1595491824, '1', 'active'),
(83, 'analytics_code_view', 'Xem danh s??ch m??', 119, 1595491869, '1', 'active'),
(84, 'news_tags_add', 'Th??m Tags', 120, 1595917396, '1', 'active'),
(85, 'news_tags_delete', 'X??a Tags', 120, 1595917413, '1', 'active'),
(86, 'news_tags_edit', 'S???a Tags', 120, 1595917426, '1', 'active'),
(87, 'news_tags_view', 'Xem danh s??ch tags', 120, 1595917454, '1', 'active'),
(88, 'product_category_add', 'Th??m danh m???c s???n ph???m', 122, 1596719752, '1', 'active'),
(89, 'product_category_edit', 'S???a danh m???c s???n ph???m', 122, 1596719916, '1', 'active'),
(90, 'product_category_delete', 'X??a danh m???c s???n ph???m', 122, 1596720071, '1', 'active'),
(91, 'product_category_view', 'Xem danh m???c s???n ph???m', 122, 1596720093, '1', 'active'),
(92, 'product_add', 'Th??m m???i s???n ph???m', 123, 1596720172, '1', 'active'),
(93, 'product_delete', 'X??a s???n ph???m', 123, 1596720186, '1', 'active'),
(94, 'product_edit', 'S???a s???n ph???m', 123, 1596720198, '1', 'active'),
(95, 'product_view', 'Xem danh s??ch s???n ph???m', 123, 1596720212, '1', 'active'),
(96, 'product_group_add', 'Th??m m???i nh??m s???n ph???m', 126, 1596824838, '1', 'active'),
(97, 'product_group_edit', 'S???a nh??m s???n ph???m', 126, 1596824855, '1', 'active'),
(98, 'product_group_delete', 'X??a nh??m s???n ph???m', 126, 1596824870, '1', 'active'),
(99, 'product_group_view', 'Xem danh s??ch nh??m s???n ph???m', 126, 1596824881, '1', 'active'),
(100, 'product_type_add', 'Th??m m???i ph??n lo???i s???n ph???m', 127, 1596869985, '1', 'active'),
(101, 'product_type_edit', 'S???a ph??n lo???i s???n ph???m', 127, 1596870006, '1', 'active'),
(102, 'product_type_delete', 'X??a ph??n lo???i s???n ph???m', 127, 1596870022, '1', 'active'),
(103, 'product_type_view', 'Danh s??ch ph??n lo???i s???n ph???m', 127, 1596870045, '1', 'active'),
(104, 'cart_view', 'Xem danh s??ch ????n h??ng', 130, 1597135503, '1', 'active'),
(106, 'cart_delete', 'X??a ????n h??ng', 130, 1597135582, '1', 'active'),
(107, 'cart_edit', 'S???a ????n h??ng', 130, 1597135606, '1', 'active'),
(108, 'contact_delete', 'X??a li??n h???', 132, 1597135899, '1', 'active'),
(109, 'contact_edit', 'S???a li??n h???', 132, 1597135913, '1', 'active'),
(110, 'contact_view', 'Xem li??n h???', 132, 1597135927, '1', 'active'),
(111, 'contact_newsletter', 'Danh s??ch nh???n b???n tin - newsletter', 132, 1597135969, '1', 'active'),
(112, 'book_author_add', 'Th??m m???i t??c gi???', 135, 1597808391, '1', 'active'),
(113, 'book_author_delete', 'X??a t??c gi???', 135, 1597808410, '1', 'active'),
(114, 'book_author_edit', 'S???a th??ng tin t??c gi???', 135, 1597808422, '1', 'active'),
(115, 'book_author_view', 'Xem danh s??ch t??c gi???', 135, 1597808433, '1', 'active'),
(116, 'book_add', 'Th??m m???i s??ch', 134, 1597808455, '1', 'active'),
(117, 'book_edit', 'S???a th??ng tin s??ch', 134, 1597808467, '1', 'active'),
(118, 'book_delete', 'X??a s??ch', 134, 1597808476, '1', 'active'),
(119, 'book_view', 'Xem danh s??ch ???n ph???m', 134, 1597808487, '1', 'active'),
(120, 'book_category_add', 'Th??m m???i danh m???c s??ch', 133, 1597808512, '1', 'active'),
(121, 'book_category_delete', 'X??a danh m???c s??ch', 133, 1597808524, '1', 'active'),
(122, 'book_category_edit', 'S???a th??ng tin danh m???c', 133, 1597808536, '1', 'active'),
(123, 'book_category_view', 'Xem danh s??ch danh m???c', 133, 1597808547, '1', 'active'),
(124, 'book_nxb_edit', 'S???a NXB', 136, 1597819805, '1', 'active'),
(125, 'book_nxb_add', 'T???o m???i NXB', 136, 1597819815, '1', 'active'),
(126, 'book_nxb_delete', 'X??a MXB', 136, 1597819830, '1', 'active'),
(127, 'book_nxb_view', 'Xem danh s??ch NXB', 136, 1597819841, '1', 'active'),
(128, 'event_edit', 'S???a th??ng tin s??? ki???n', 137, 1597824811, '1', 'active'),
(129, 'event_add', 'T???o m???i s??? ki???n', 137, 1597824822, '1', 'active'),
(130, 'event_view', 'Xem danh s??ch s??? ki???n', 137, 1597824836, '1', 'active'),
(131, 'event_delete', 'X??a th??ng tin s??? ki???n', 137, 1597824848, '1', 'active'),
(132, 'quotation_add', 'Th??m danh ng??n', 138, 1597828788, '1', 'active'),
(133, 'quotation_delete', 'X??a danh ng??n', 138, 1597828796, '1', 'active'),
(134, 'quotation_edit', 'S???a danh ng??n', 138, 1597828804, '1', 'active'),
(135, 'quotation_view', 'Xem danh s??ch danh ng??n', 138, 1597828817, '1', 'active'),
(136, 'contact_event', 'Danh s??ch ????ng k?? events', 132, 1599100765, '1', 'active'),
(137, 'product_tags_add', 'Th??m tags', 143, 1599818544, '1', 'active'),
(138, 'product_tags_delete', 'X??a tags', 143, 1599818556, '1', 'active'),
(139, 'product_tags_view', 'Xem danh s??ch tags', 143, 1599818566, '1', 'active'),
(140, 'product_tags_edit', 'S???a tags', 143, 1599818575, '1', 'active'),
(141, 'web_link_edit', 'C???p nh???t link - li??n k???t cho menu', 107, 1603766292, '1', 'active'),
(142, 'student_add', 'Th??m ?????c gi???', 149, 1666857956, '1', 'active'),
(143, 'student_edit', 'S???a ?????c gi???', 149, 1666857978, '1', 'active'),
(144, 'student_delete', 'X??a ?????c gi???', 149, 1666858006, '1', 'active'),
(145, 'cart_add', 'Th??m m?????n tr???', 130, 1666864803, '1', 'active');

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
(2, 0, 'Qu???n l?? h??? th???ng', 'System Management', 'fa fa-database', '', 'active', 1, 11, '0', '', 0),
(10, 2, 'Qu???n l?? nh??m quy???n', 'Roles Group Management', '', '?module=roles', 'active', 2, 42, '0', '', 0),
(11, 0, 'Qu???n l?? ng?????i qu???n tr??? website', 'User Management', '', '?module=user', 'active', 1, 10, 'deactive', '', 0),
(13, 2, 'Qu???n l?? Menu Admin', 'Menu Admin Management', '', '?module=menu_admin', 'active', 2, 41, 'deactive', '', 0),
(25, 74, 'Qu???n l?? Modules', 'Modules Management', '', '?module=module', 'active', 2, 52, '1', '', 0),
(33, 74, 'Qu???n l?? Blog (Admin System)', 'Qu???n l?? Blog (Admin System)', '', '?module=block', 'active', 2, 51, '0', '', 0),
(49, 0, 'Qu???n l?? th??ng tin c???u h??nh', 'Qu???n l?? th??ng tin c???u h??nh', 'fa fa-cogs', '', 'deactive', 1, 9, '0', '', 0),
(51, 74, 'Qu???n l?? Tasks - Modules', 'Tasks & Modules Management', '', '?module=task', 'active', 2, 53, '0', '', 0),
(73, 49, 'Qu???n l?? menu website', 'Qu???n l?? menu website', '', '?module=web_menu', 'active', 2, 31, 'deactive', '', 0),
(74, 0, 'D??nh cho ng?????i ph??t tri???n', 'D??nh cho ng?????i ph??t tri???n', 'fa fa-cubes', '', 'deactive', 1, 10, '0', '', 0),
(87, 0, 'T??i kho???n c?? nh??n', 'Your Profile', 'fa fa-user', '?module=profile', 'active', 1, 7, 'deactive', '', 1483904741),
(90, 49, 'Qu???n l?? c???u h??nh trang ch???', 'Homepage Management', '', '?module=web_home', 'active', 2, 32, 'deactive', '', 1484751727),
(91, 49, 'Qu???n l?? h??nh ???nh h??? th???ng', 'System Image Management', 'fa fa-picture-o', '?module=web_image', 'active', 2, 7, 'deactive', '', 1484761092),
(92, 49, 'Qu???n l?? th??ng tin website', 'Website information management', 'fa fa-globe', '?module=web_information', 'active', 2, 4, '', '', 1487872412),
(99, 49, 'Qu???n l?? m?? nh??ng', 'Analytics code', '', '?module=analytics_code', 'active', 2, 0, '', '', 1595491947),
(107, 0, 'Qu???n l?? M?????n - tr???', 'Order-Product Management', 'fa fa-shopping-cart', '?module=cart', 'active', 1, 4, 'deactive', '1', 1597135674),
(108, 0, 'Qu???n l?? danh m???c s??ch', 'Book Category Management', '', '?module=book_category', 'active', 1, 1, 'deactive', '1', 1597808591),
(109, 0, 'Danh s??ch s??ch', 'Books Management', '', '?module=book', 'active', 1, 0, 'deactive', '1', 1597808616),
(110, 0, 'Qu???n l?? t??c gi???', 'Authors Management', '', '?module=book_author', 'active', 1, 3, 'deactive', '1', 1597808641),
(111, 0, 'Qu???n l?? NXB', 'Book NXB Management', '', '?module=book_nxb', 'active', 1, 2, 'deactive', '1', 1597819881),
(112, 0, 'Qu???n l?? n???i dung s??ch', 'Book Content Management', 'fa fa-book', '', 'deactive', 1, 1, 'deactive', '1', 1597823910),
(117, 0, 'Qu???n l?? ?????c gi???', '', '', '?module=student', 'active', 1, 9, 'deactive', '1', 1666858318);

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
(1, 'user', 'Qu???n l?? ng?????i d??ng h??? th???ng', 'mdl_user', 'admin', 'active'),
(4, 'news_category', 'Qu???n l?? danh m???c tin t???c', 'mdl_news_category', 'admin', 'active'),
(31, 'menu_admin', 'Qu???n l?? Menu admin', 'mdl_menu_admin', 'admin', 'active'),
(34, 'module', 'Qu???n l?? modules h??? th???ng ( D??nh cho L???p tr??nh vi??n)', 'mdl_module', 'admin', 'active'),
(46, 'roles', 'Qu???n l?? nh??m quy???n', 'mdl_roles', 'admin', 'active'),
(50, 'task', 'Qu???n l?? tasks theo module ( D??nh cho L???p tr??nh vi??n)', 'mdl_task', 'admin', 'active'),
(51, 'block', 'Qu???n l?? Blocks ( D??nh cho L???p tr??nh vi??n)', 'mdl_block', 'admin', 'active'),
(107, 'web_menu', 'Qu???n l?? menu website ngo??i', 'mdl_web_menu', 'admin', 'active'),
(108, 'profile', 'T??i kho???n c?? nh??n', 'mdl_profile', 'admin', 'active'),
(109, 'product', 'Qu???n l?? s???n ph???m - d???ch v???', 'mdl_product', 'admin', 'active'),
(111, 'web_home', 'C???u h??nh trang ch???', 'mdl_web_home', 'admin', 'active'),
(112, 'web_image', 'Qu???n l?? h??nh ???nh h??? th???ng', 'mdl_web_image', 'admin', 'active'),
(114, 'web_information', 'Qu???n l?? th??ng tin website', 'mdl_web_information', 'admin', 'active'),
(115, 'news', 'Qu???n l?? tin t???c', 'mdl_news', 'admin', 'active'),
(116, 'news_group', 'Qu???n l?? nh??m tin t???c', 'mdl_news_group', 'admin', 'active'),
(117, 'news_type', 'Qu???n l?? ph??n lo???i tin t???c', 'mdl_news_type', 'admin', 'active'),
(118, 'news_topic', 'Qu???n l?? chuy??n ????? tin t???c', 'mdl_news_topic', 'admin', 'active'),
(119, 'analytics_code', 'Qu???n l?? m?? nh??ng theo d??i truy c???p', 'mdl_analytics_code', 'admin', 'active'),
(120, 'news_tags', 'Qu???n l?? th??? - tags', 'mdl_news_tags', 'admin', 'active'),
(121, 'trang-chu', 'Trang ch???', 'mdl_home', 'public', 'active'),
(122, 'product_category', 'Danh m???c s???n ph???m', 'mdl_product_category', 'admin', 'active'),
(123, 'product', 'Qu???n l?? s???n ph???m', 'mdl_product', 'admin', 'active'),
(124, 'san-pham', 'S???n ph???m', 'mdl_category', 'public', 'active'),
(125, 'chi-tiet', 'Chi ti???t', 'mdl_detail', 'public', 'active'),
(126, 'product_group', 'Nh??m s???n ph???m', 'mdl_product_group', 'admin', 'active'),
(127, 'product_type', 'Ph??n lo???i s???n ph???m', 'mdl_product_type', 'admin', 'active'),
(128, 'tin-tuc', 'Tin t???c', 'mdl_category', 'public', 'active'),
(129, 'lien-he', 'Li??n h???', 'mdl_contact', 'public', 'active'),
(130, 'cart', 'Qu???n l?? ????n h??ng', 'mdl_cart', 'admin', 'active'),
(132, 'contact', 'Qu???n l?? li??n h??? - Newsletter', 'mdl_contact', 'admin', 'active'),
(133, 'book_category', 'Danh m???c s??ch', 'mdl_book_category', 'admin', 'active'),
(134, 'book', 'Qu???n l?? s??ch', 'mdl_book', 'admin', 'active'),
(135, 'book_author', 'Qu???n l?? t??c gi??? s??ch', 'mdl_book_author', 'admin', 'active'),
(136, 'book_nxb', 'Qu???n l?? NXB', 'mdl_book_nxb', 'admin', 'active'),
(137, 'event', 'Qu???n l?? s??? ki???n', 'mdl_event', 'admin', 'active'),
(138, 'quotation', 'Th?? vi???n danh ng??n', 'mdl_quotation', 'admin', 'active'),
(140, '404', '404 Page note found', 'mdl_404', 'public', 'active'),
(141, 'tim-kiem', 'T??m ki???m', 'mdl_search', 'public', 'active'),
(143, 'product_tags', 'Danh s??ch tags s???n ph???m', 'mdl_product_tags', 'admin', 'active'),
(144, 'gio-hang', 'Gi??? h??ng', 'mdl_cart', 'public', 'active'),
(146, 'albums', 'B??? s??u t???p', 'mdl_albums', 'admin', 'active'),
(147, 'albums', 'B??? s??u t???p', 'mdl_category', 'public', 'active'),
(149, 'student', 'Qu???n l?? ?????c gi???', 'mdl_student', 'admin', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `e4_muonsach`
--

CREATE TABLE `e4_muonsach` (
  `id` int(11) NOT NULL,
  `id_sinhvien` int(11) NOT NULL,
  `id_sach` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0:??ang m?????n;1:???? tr???;2:b??o m???t',
  `time_update` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `e4_muonsach`
--

INSERT INTO `e4_muonsach` (`id`, `id_sinhvien`, `id_sach`, `soluong`, `status`, `time_update`) VALUES
(1, 13, 2, 1, 3, 1666985005),
(2, 13, 1, 1, 3, 1666985005),
(3, 13, 2, 1, 3, 1666985005),
(4, 13, 2, 1, 3, 1666986246),
(5, 14, 2, 1, 1, 1668194468),
(6, 14, 1, 1, 3, 1666986359),
(7, 13, 2, 1, 3, 1667031491),
(8, 13, 2, 1, 3, 1667031608),
(9, 13, 1, 1, 3, 1667031608),
(10, 13, 2, 1, 3, 1667057509),
(11, 14, 2, 1, 3, 1667057396),
(12, 14, 1, 1, 1, 1668194450);

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
(1, 'Nh?? s??ch Vi???t'),
(2, 'Nh?? s??ch Kim ?????ng'),
(3, 'Th???i ?????i m???i');

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
(3, 'mailserver_login', 'tapchi.ibst@gmail.com', 'yes'),
(4, 'mailserver_pass', 'zxgezvempiqjjsmf', 'yes'),
(5, 'mailserver_port', '465', 'yes'),
(6, 'default_comment_status', 'open', 'yes'),
(7, 'posts_per_page', '6', 'yes'),
(8, 'image_max_size', '3', 'yes'),
(9, 'name_vi', 'EMAC', 'yes'),
(10, 'name_en', 'VPP BINH AN SEATRA CO.,LTD', 'yes'),
(11, 'slogan_vi', 'Thay ?????i ????? tr?????ng th??nh', 'yes'),
(12, 'slogan_en', 'Nothing is impossible', 'yes'),
(13, 'address_vi', 'S??? 21 Ph???  Ng???a Long - P. Minh Khai - Q. B???c T??? Li??m - TP. H?? N???i', 'yes'),
(14, 'address_en', 'S??? 21 Ph???  Ng???a Long - P. Minh Khai - Q. B???c T??? Li??m - TP. H?? N???i', 'yes'),
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
(5, 'Quy???n qu???n tr??? h??? th???ng', 'D??nh cho ng?????i qu???n tr??? h??? th???ng', 1, '117,112,109,108,111,110,107,106,103,102,104,105,95,101,15,96,72,87,49,99,92,91,73,90,74,33,25,51,2,13,10,11', 'albums,student,albums,product_tags,quotation,event,book_nxb,book_author,book,book_category,contact,cart,product_type,product_group,product,product_category,news_tags,analytics_code,news_topic,news_type,news_group,news,web_information,web_image,web_home,product,profile,web_menu,block,task,roles,module,menu_admin,news_category,user', 'student_add,student_delete,student_edit,product_tags_add,product_tags_delete,product_tags_edit,product_tags_view,quotation_add,quotation_delete,quotation_edit,quotation_view,event_add,event_delete,event_edit,event_view,book_nxb_add,book_nxb_delete,book_nxb_edit,book_nxb_view,book_author_add,book_author_delete,book_author_edit,book_author_view,book_add,book_delete,book_edit,book_view,book_category_add,book_category_delete,book_category_edit,book_category_view,contact_delete,contact_edit,contact_event,contact_newsletter,contact_view,cart_add,cart_delete,cart_edit,cart_view,product_type_add,product_type_delete,product_type_edit,product_type_view,product_group_add,product_group_delete,product_group_edit,product_group_view,product_add,product_delete,product_edit,product_view,product_category_add,product_category_delete,product_category_edit,product_category_view,news_tags_add,news_tags_delete,news_tags_edit,news_tags_view,analytics_code_add,analytics_code_delete,analytics_code_edit,analytics_code_view,news_topic_add,news_topic_delete,news_topic_edit,news_topic_view,news_type_add,news_type_delete,news_type_edit,news_type_view,news_group_add,news_group_delete,news_group_edit,news_group_view,news_add,news_delete,news_edit,news_view,web_branches_add,web_branches_delete,web_branches_edit,web_information_edit,web_image_add,web_image_delete,web_image_edit,web_image_view,web_home_add,web_home_delete,web_home_edit,web_home_view,product_add,product_category_add,product_category_delete,product_category_edit,product_category_view,product_delete,product_edit,product_view,profile_change_pass,profile_edit,web_link_edit,web_menu_add,web_menu_delete,web_menu_edit,web_menu_view,block_add,block_delete,block_edit,block_view,task_add,task_delete,task_edit,task_view,roles_add,roles_delete,roles_edit,roles_menu_access,roles_module_action,roles_view,module_add,module_delete,module_edit,module_view,menu_admin_add,menu_admin_delete,menu_admin_edit,menu_admin_view,news_category_add,news_category_delete,news_category_edit,news_category_view,user_add,user_delete,user_edit,user_publish,user_unpublish,user_view'),
(9, 'Nh??n vi??n', 'D??nh cho nh??n vi??n qu???n l?? th?? vi???n', 1, '87,74', 'lien-he,dich-vu,recruitments,projects,product,profile,news', 'recruitments_add,recruitments_category_add,recruitments_category_delete,recruitments_category_edit,recruitments_category_view,recruitments_delete,recruitments_edit,recruitments_view,projects_add,projects_category_add,projects_category_delete,projects_category_edit,projects_category_view,projects_delete,projects_edit,projects_view,product_add,product_category_add,product_category_delete,product_category_edit,product_category_view,product_delete,product_edit,product_view,profile_change_pass,profile_edit,news_add,news_category_add,news_category_delete,news_category_edit,news_category_view,news_delete,news_edit,news_view'),
(10, 'Sinh vi??n', 'Xem th??ng tin sinh vi??n', 1, '109,107,87', 'book,cart,profile', 'book_view,cart_edit,profile_change_pass,profile_edit');

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
(3, 'L??o H???c'),
(4, 'Kim ?????ng'),
(5, 'Nguy???n Ng???c K??');

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
(1, '', 'admin', 'Administrator', 'e10adc3949ba59abbe56e057f20f883e', 'admin@gmail.com', 5, 1, 'b6356128c7df86c0b1024590ad12c482adafa', 'S??? 29/394 M??? ????nh, Nam T??? Li??m, H?? N???i', '0433 839 932', '098 226 9600', '', 'nguyenhuuthang.1987', 'huuthangb2k50@yahoo.com', 'huuthangb2k50', 1512438986, '', 1594715708, 'admin@gmail.com', '', '', '', '', 0),
(2, '', 'admin', 'Nguy???n Th???ng', 'e10adc3949ba59abbe56e057f20f883e', 'huuthangb2k50@gmail.com', 9, 1, 'b6356128c7df86c0b1024590ad12c482adafa', '', '0433 839 932', '098 226 9600', '', 'https://facebook.com/nguyenhuuthang.19872', '', '', 1594625935, 'admin@gmail.com', 1598758811, 'admin@gmail.com', 'quocte', '', '', '', 0),
(3, '', 'admin', 'Developer', 'e10adc3949ba59abbe56e057f20f883e', 'dev@gmail.com', 5, 1, '36d475a9172b50735e9e17a552adacb5', NULL, '', '', '', '', '', '', 1597912302, 'admin@gmail.com', 1597912302, 'admin@gmail.com', NULL, '', '', '', 0),
(4, '', 'admin', 'Nguy???n H???u Th???ng', 'e10adc3949ba59abbe56e057f20f883e', 'nguyenhuuthang@gmail.com', 5, 1, 'e357942890ae7248a15bb487249bb89f', NULL, NULL, '0982269600', 'https://upload.wikimedia.org/wikipedia/commons/a/a2/Namcao.jpg', 'https://facebook.com/nguyenhuuthang.1987', NULL, NULL, 1597933612, 'admin@gmail.com', 1603873228, 'admin@gmail.com', '', '', '', '', 0),
(5, '', 'admin', 'Nam Cao', 'e10adc3949ba59abbe56e057f20f883e', 'namcao@gmail.com', 9, 1, '5208090a665f02910bac740d9399e5d6', NULL, NULL, '', 'https://upload.wikimedia.org/wikipedia/commons/a/a2/Namcao.jpg', '', NULL, NULL, 1597945921, 'admin@gmail.com', 1598805473, 'admin@gmail.com', 'danhnhan', '', '', '', 0),
(6, '', 'admin', 'Ng?? T???t T???', '0cc175b9c0f1b6a831c399e269772661', 'ngotatto@gmail.com', 9, 1, '7dd9dee258a8b96026f846c7605fd0d1', NULL, NULL, '', 'https://upload.wikimedia.org/wikipedia/vi/9/92/NgoTatTo.jpg', '', NULL, NULL, 1597945991, 'admin@gmail.com', 1598762734, 'admin@gmail.com', 'vietnam', '', '', '', 0),
(7, '', 'admin', 'Th???ch Lam', '0cc175b9c0f1b6a831c399e269772661', 'thachlam@gmail.com', 9, 1, '65df97c8e1ed609c4250b16341c75aba', NULL, NULL, '', 'https://media.ex-cdn.com/EXP/media.nongnghiep.vn/files/bao_in/2020/05/19/thachlam-0928_20200519_694-100644.jpeg', '', NULL, NULL, 1597946064, 'admin@gmail.com', 1598762740, 'admin@gmail.com', 'quocte', '', '', '', 0),
(13, '1851062330', 'admin', 'Ph??ng V??n C??ng', 'e10adc3949ba59abbe56e057f20f883e', '1851062330@e.tlu.edu.vn', 10, 1, 'c739373b3a5604e8be503095dbcd92e7', NULL, NULL, NULL, '', '', NULL, NULL, 1666861526, 'admin@gmail.com', 1666861526, 'admin@gmail.com', NULL, '60TH1', 'CNTT', '0973642772', 0),
(14, '1851062345', 'admin', '????o T??ng L??m', 'e10adc3949ba59abbe56e057f20f883e', '1851062345@e.tlu.edu.vn', 10, 1, 'e714f66102588512cad19bc913098fc8', NULL, NULL, NULL, '', '', NULL, NULL, 1666862294, 'admin@gmail.com', 1666862294, 'admin@gmail.com', NULL, '60TH1', 'CNTT', '0973642773', 220000),
(15, '1851061640', 'admin', '????? Th??? Linh', 'e10adc3949ba59abbe56e057f20f883e', '1851061640@e.tlu.edu.vn', 10, 1, '0ba7aaffef06206de764a9bbe27fe598', NULL, NULL, NULL, '', '    ', NULL, NULL, 1668191804, 'admin@gmail.com', 1668191804, 'admin@gmail.com', NULL, '60TH1', 'CNTT', '0987654331', 0);

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
(66, 5, 'meta_content', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p><em>Trump c?? th??? th??nh c??ng m?? kh??ng c???n nh??n l???i l???ch s???, nh??ng nh??m c??? v???n c???a ??ng th?? th???a hi???u ??i???u ???? v?? ngay t???i n???i b??? c???a nh??m c??ng t???n t???i nh???ng tranh lu???n gay g???t v??? ???c??y g???y??? h??n hay ???c??? c?? r???t??? h??n. D?? th??? n??o ??ng c??ng ???? ch???n ch??nh s??ch th????ng m???i b???o h??? v?? th??i ????? k?? th??? v???i c??c hi???p ?????nh th????ng m???i t??? do. V???y ?????ng</em>&nbsp;<em>sau ch??nh s??ch ???? th???c s??? l?? g??</em><em>?</em></p>\r\n\r\n<p><strong>T???i sao Trump l???i b??i x??ch c??c hi???p ?????nh th????ng m???i t??? do ?????n v???y?</strong></p>\r\n\r\n<p>L?? thuy???t kinh t??? h???c t??? l??u ???? ch??? ra r???ng c??c n?????c khi tham gia th????ng m???i t??? do ?????u c?? l???i, ngay c??? khi m???t n?????c c?? c??ng ngh??? thua k??m h??n ??? t???t c??? c??c ng??nh so v???i nh???ng n?????c c??n l???i trong kh???i th????ng m???i<a href=\"file:///D:/Downloads/%C4%90%E1%BA%B1ng%20sau%20ch%C3%ADnh%20s%C3%A1ch%20b%E1%BA%A3o%20h%E1%BB%99%20th%C6%B0%C6%A1ng%20m%E1%BA%A1i%20c%E1%BB%A7a%20Trump%20_Linh_%C4%91%C3%A3%20s%E1%BB%ADa.docx#_ftn1\" name=\"_ftnref1\" title=\"\">[1]</a>. ?? t?????ng n??y xu???t ph??t t??? David Ricardo - nh?? kinh t??? h???c ng?????i Anh th??? k??? XVIII, ng?????i ???? d???y ch??ng ta r???ng mi???n l?? m???t n?????c s???n xu???t s???n ph???m m?? n?????c ???? l??m t???t nh???t (l???i th??? so s??nh), th?? n?????c ???? s??? h?????ng l???i t??? th????ng m???i c??c qu???c gia.</p>\r\n\r\n<p>C??c nh?? kinh t??? c?? th??? b???t ?????ng v???i nhau v??? nhi???u chuy???n, nh??ng t??? do th????ng m???i h???u nh?? kh??ng n???m trong s??? ????. V???y c??n Trump, ??ng ???y ???? ngh?? ??i???u g?? v???y?</p>\r\n\r\n<p>Trump cho r???ng ch??nh c??c hi???p ?????nh th????ng m???i t??? do ???? mang vi???c l??m ra kh???i n?????c M???, v?? n?????c M??? b??? t???n h???i l???n b???i nh???ng ??i???u kho???n r??ng bu???c trong c??c hi???p ?????nh ????.</p>\r\n</body>\r\n</html>\r\n'),
(67, 4, 'meta_brief', 'Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totamrem aperiam, eaque ipsa quae ab illo inventore veritatis'),
(68, 4, 'meta_content', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>H??? Ch?? Minh was born as Nguy???n Sinh Cung<sup class=\"reference\" id=\"cite_ref-BBC2005_2-1\"><a href=\"https://en.wikipedia.org/wiki/Ho_Chi_Minh#cite_note-BBC2005-2\">[2]</a></sup><sup class=\"reference\" id=\"cite_ref-HL1_4-1\"><a href=\"https://en.wikipedia.org/wiki/Ho_Chi_Minh#cite_note-HL1-4\">[a]</a></sup><sup class=\"reference\" id=\"cite_ref-HL2_5-1\"><a href=\"https://en.wikipedia.org/wiki/Ho_Chi_Minh#cite_note-HL2-5\">[4]</a></sup> in 1890 in the village of <a class=\"mw-redirect\" href=\"https://en.wikipedia.org/wiki/Ho%C3%A0ng_Tr%C3%B9\" title=\"Ho??ng Tr??\">Ho??ng Tr??</a> (the name of the local temple near L??ng Sen), his mother\'s village. Although 1890 is generally accepted as his birth year, at various times he used four other birth years:<sup class=\"reference\" id=\"cite_ref-9\"><a href=\"https://en.wikipedia.org/wiki/Ho_Chi_Minh#cite_note-9\">[8]</a></sup> 1891,<sup class=\"reference\" id=\"cite_ref-10\"><a href=\"https://en.wikipedia.org/wiki/Ho_Chi_Minh#cite_note-10\">[9]</a></sup> 1892,<sup class=\"reference\" id=\"cite_ref-11\"><a href=\"https://en.wikipedia.org/wiki/Ho_Chi_Minh#cite_note-11\">[10]</a></sup> 1894<sup class=\"reference\" id=\"cite_ref-12\"><a href=\"https://en.wikipedia.org/wiki/Ho_Chi_Minh#cite_note-12\">[11]</a></sup> and 1895.<sup class=\"reference\" id=\"cite_ref-13\"><a href=\"https://en.wikipedia.org/wiki/Ho_Chi_Minh#cite_note-13\">[12]</a></sup> From 1895, he grew up in his father <a href=\"https://en.wikipedia.org/wiki/Nguy%E1%BB%85n_Sinh_S%E1%BA%AFc\" title=\"Nguy???n Sinh S???c\">Nguy???n Sinh S???c (Nguy???n Sinh Huy)\'s</a> village of <a class=\"mw-redirect\" href=\"https://en.wikipedia.org/wiki/L%C3%A0ng_Sen\" title=\"L??ng Sen\">L??ng Sen</a>, <a href=\"https://en.wikipedia.org/wiki/Kim_Li%C3%AAn,_Ngh%E1%BB%87_An\" title=\"Kim Li??n, Ngh??? An\">Kim Li??n</a>, Nam ????n, and <a href=\"https://en.wikipedia.org/wiki/Ngh%E1%BB%87_An_Province\" title=\"Ngh??? An Province\">Ngh??? An Province</a>. He had three siblings: his sister B???ch Li??n (Nguy???n Th??? Thanh), a clerk in the <a href=\"https://en.wikipedia.org/wiki/French_Army\" title=\"French Army\">French Army</a>; his brother <a href=\"https://en.wikipedia.org/wiki/Nguy%E1%BB%85n_Sinh_Khi%C3%AAm\" title=\"Nguy???n Sinh Khi??m\">Nguy???n Sinh Khi??m</a> (Nguy???n T???t ?????t), a <a href=\"https://en.wikipedia.org/wiki/Geomancy\" title=\"Geomancy\">geomancer</a> and <a class=\"mw-redirect\" href=\"https://en.wikipedia.org/wiki/Traditional_Chinese_herbs\" title=\"Traditional Chinese herbs\">traditional herbalist</a>; and another brother (Nguy???n Sinh Nhu???n), who died in infancy. As a young child, Cung (Ho) studied with his father before more formal classes with a scholar named Vuong Thuc Do. He quickly mastered <a href=\"https://en.wikipedia.org/wiki/Written_Chinese\" title=\"Written Chinese\">Chinese writing</a>, a prerequisite for any serious study of <a href=\"https://en.wikipedia.org/wiki/Confucianism\" title=\"Confucianism\">Confucianism</a>, while honing his colloquial Vietnamese writing.<sup class=\"reference\" id=\"cite_ref-Duiker_6-1\"><a href=\"https://en.wikipedia.org/wiki/Ho_Chi_Minh#cite_note-Duiker-6\">[5]</a></sup><sup class=\"reference\" style=\"white-space:nowrap;\">:<span>21</span></sup> In addition to his studies, he was fond of adventure and loved to fly <a href=\"https://en.wikipedia.org/wiki/Kite\" title=\"Kite\">kites</a> and go fishing.<sup class=\"reference\" id=\"cite_ref-Duiker_6-2\"><a href=\"https://en.wikipedia.org/wiki/Ho_Chi_Minh#cite_note-Duiker-6\">[5]</a></sup><sup class=\"reference\" style=\"white-space:nowrap;\">:<span>21</span></sup> Following Confucian tradition, his father gave him a new name at the age of 10: <i>Nguy???n T???t Th??nh</i> (\"Nguy???n the Accomplished\").</p>\r\n\r\n<p>His father was a Confucian scholar and teacher and later an imperial magistrate in the small remote district of Binh Khe (<a href=\"https://en.wikipedia.org/wiki/Qui_Nh%C6%A1n\" title=\"Qui Nh??n\">Qui Nh??n</a>). He was demoted for abuse of power after an influential local figure died several days after having received 102 strokes of the <a href=\"https://en.wikipedia.org/wiki/Caning\" title=\"Caning\">cane</a> as punishment for an infraction.<sup class=\"reference\" id=\"cite_ref-Duiker_6-3\"><a href=\"https://en.wikipedia.org/wiki/Ho_Chi_Minh#cite_note-Duiker-6\">[5]</a></sup><sup class=\"reference\" style=\"white-space:nowrap;\">:<span>21</span></sup> His father was eligible to serve in the imperial bureaucracy, but he refused because it meant serving the French.<sup class=\"reference\" id=\"cite_ref-:0_14-0\"><a href=\"https://en.wikipedia.org/wiki/Ho_Chi_Minh#cite_note-:0-14\">[13]</a></sup> This exposed Th??nh (Ho) to rebellion at a young age and seemed to be the norm for the province. Nevertheless, he received a French education, attending <i><a href=\"https://en.wikipedia.org/wiki/Qu%E1%BB%91c_H%E1%BB%8Dc_%E2%80%93_Hu%E1%BA%BF_High_School_for_the_Gifted\" title=\"Qu???c H???c ??? Hu??? High School for the Gifted\">Coll??ge Qu???c h???c</a></i> (<i><a class=\"mw-redirect\" href=\"https://en.wikipedia.org/wiki/Lyc%C3%A9e\" title=\"Lyc??e\">lyc??e</a></i> or secondary education) in <a href=\"https://en.wikipedia.org/wiki/Hu%E1%BA%BF\" title=\"Hu???\">Hu???</a>. His disciples, <a href=\"https://en.wikipedia.org/wiki/Ph%E1%BA%A1m_V%C4%83n_%C4%90%E1%BB%93ng\" title=\"Ph???m V??n ?????ng\">Ph???m V??n ?????ng</a> and <a href=\"https://en.wikipedia.org/wiki/V%C3%B5_Nguy%C3%AAn_Gi%C3%A1p\" title=\"V?? Nguy??n Gi??p\">V?? Nguy??n Gi??p</a>, also attended the school, as did <a class=\"mw-redirect\" href=\"https://en.wikipedia.org/wiki/Ng%C3%B4_%C4%90%C3%ACnh_Di%E1%BB%87m\" title=\"Ng?? ????nh Di???m\">Ng?? ????nh Di???m</a>, the future President of South Vietnam (and political rival).<sup class=\"reference\" id=\"cite_ref-15\"><a href=\"https://en.wikipedia.org/wiki/Ho_Chi_Minh#cite_note-15\">[14]</a></sup></p>\r\n</body>\r\n</html>\r\n');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='L??u th??ng tin v??? c???u h??nh c??c box tr??n trang ch???';

--
-- Dumping data for table `e4_web_home`
--

INSERT INTO `e4_web_home` (`id`, `parent`, `title_vi`, `title_en`, `brief_vi`, `brief_en`, `content_vi`, `content_en`, `image`, `file_download`, `icon`, `link`, `link_name`, `status`, `order`, `date_created`, `user_created`, `date_updated`, `user_updated`) VALUES
(34, 0, 'Banner ', 'Top Slides', '', '', '	\r\n\r\n??\r\n\r\n', '\r\n\r\n	\r\n\r\n&nbsp;\r\n\r\n', '', '', '', '', '', 'active', 1, 1575276668, 'admin@gmail.com', 1655906638, '1'),
(82, 34, 'Uy t??n - Ti???n ??ch - Gi?? c??? h???p l??', 'The Project Jacket 1', 'Gi?? c??? lu??n t???t nh???t -  Giao h??ng mi???n ph?? c??c qu???n n???i th??nh - Ph???c v??? 24/24', '', '\r\n	\r\n\r\n??\r\n\r\n', '\r\n\r\n	\r\n\r\n&nbsp;\r\n\r\n', '/upload/banner/banner%20ngang-689558861.jpg', '', '', '#', 'Xem th??m', 'active', 1, 1592476536, 'admin@gmail.com', 1655895919, '1'),
(84, 34, 'Nike New <br>Collection!', 'The Project Jacket 12', '??? Cung c???p v??n ph??ng ph???m\r\n??? M???c in, ????? m???c m??y in, m??y ph?? t?? v?? c??c d???ch v??? in ???n', '', '\r\n	\r\n\r\n??\r\n\r\n', '\r\n\r\n	\r\n\r\n&nbsp;\r\n\r\n', '/upload/banner/Banner%20ngang%20MAU-763413657.jpg', '', '', '#', 'Xem th??m', 'active', 2, 1592476562, 'admin@gmail.com', 1655895985, '1'),
(124, 34, 'New collections', NULL, '???UY T??N ??? TI???N L???I ??? GI?? C??? H???P L??\r\nN??? L???C L??M H??I L??NG KH??CH H??NG???.', NULL, '\r\n	\r\n\r\n??\r\n\r\n', NULL, '/upload/banner/Banner%20ngang%20-25-107247923.jpg', NULL, '', '#', '', 'active', 0, 1603633307, '1', 1655895901, '1');

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
(3, '???nh icon cho tr??nh duy???t', '???nh icon cho tr??nh duy???t', 'https://demo.auburnforest.com/wordpress/pivotal/wp-content/uploads/2020/02/fav-1.png', '', 'icon', 1, 'active', 1487872053, 'admin@gmail.com', 1592465484, 'admin@gmail.com'),
(4, 'Banner qu???ng c??o', 'Banner qu???ng c??o', '/upload/banner/custom-baner1.png', '#', 'right-banner-news', 4, 'active', 1612336585, 'admin@gmail.com', 1655869191, 'admin@gmail.com'),
(5, 'H??nh n???n ?????u trang', 'H??nh n???n ?????u trang', '/upload/banner/Banner%20ngang-656009042.jpg', '', 'background-header', 3, 'active', 1612343103, 'admin@gmail.com', 1655894519, 'admin@gmail.com');

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
  `position` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'main' COMMENT 'D??ng ????? c???u h??nh t??y ch???n c??c nh??m menu hi???n th??? tr??n giao di???n frontpage',
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
(4, 'Th??ng tin', 'Th??ng tin', NULL, 2, 81, '/', 'main', '', 'active', '', 0, 'admin@gmail.com', 1655889841),
(8, 'Li??n h???', 'Contacts', NULL, 5, 84, 'lien-he', '', '', 'active', '', 0, 'admin@gmail.com', 1603766329),
(43, 'S???n ph???m', 'Products', NULL, 2, 84, 'san-pham', '', 'mega', 'active', 'admin@gmail.com', 1592465875, 'admin@gmail.com', 1603767041),
(47, 'Tin t???c', 'News', NULL, 4, 81, '#', '', '', 'active', 'admin@gmail.com', 1594648747, 'admin@gmail.com', 1656046928),
(67, 'D???ch v??? kh??ch h??ng', '', NULL, 3, 85, '#', '', '', 'active', 'admin@gmail.com', 1597546841, 'admin@gmail.com', 1655907014),
(68, 'Ch??nh s??ch mua h??ng', '', NULL, 1, 67, 'tin-tuc/chinh-sach-mua-hang-tai-he-thong-d-chic.html', 'footer', '', 'active', 'admin@gmail.com', 1597546877, 'admin@gmail.com', 1656060815),
(69, 'EMAC', 'EMAC', NULL, 1, 85, '#', '', '', 'active', 'admin@gmail.com', 1597546920, 'admin@gmail.com', 1655906804),
(76, 'Ch??nh s??ch b???o m???t', '', NULL, 0, 67, '#', 'footer', '', 'active', 'admin@gmail.com', 1603081214, 'admin@gmail.com', 1655907040),
(77, 'H??? tr??? kh??ch h??ng', 'support', NULL, 2, 85, '#', '', '', 'active', 'admin@gmail.com', 1603081364, 'admin@gmail.com', 1655906957),
(78, 'Li??n h???', 'contact', NULL, 0, 69, '/lien-he.html', '', '', 'active', 'admin@gmail.com', 1603081429, 'admin@gmail.com', 1656043937),
(79, 'Gi???i thi???u', '', NULL, 0, 69, '/chi-tiet/ve-chung-toi-emac.html', '', '', 'active', 'admin@gmail.com', 1603081460, 'admin@gmail.com', 1656043721),
(80, 'H?????ng d???n mua h??ng', '', NULL, 0, 77, 'chi-tiet/huong-dan-dat-hang-tren-website-d-chic.html', '', '', 'active', 'admin@gmail.com', 1603081523, 'admin@gmail.com', 1656060970),
(81, 'V??? EMAC', 'Home', NULL, 1, 84, 've-emac', '', '', 'active', 'admin@gmail.com', 1603620070, 'admin@gmail.com', 1655889662),
(83, 'Kh??c', 'Kh??c', NULL, 6, 84, 'san-pham/vat-dung-khac', '', '', 'active', 'admin@gmail.com', 1603699273, 'admin@gmail.com', 1603766935),
(84, 'Menu ch??nh', NULL, 'Menu ch??nh tr??n ?????u trang', 1, 0, NULL, 'main', '', 'active', 'admin@gmail.com', 1603766093, 'admin@gmail.com', 1603766093),
(85, 'Menu cu???i trang', NULL, 'Menu s??? hi???n th??? ??? khu v???c cu???i trang cho to??n b??? website', 2, 0, NULL, 'footer', '', 'active', 'admin@gmail.com', 1603766110, 'admin@gmail.com', 1603766110),
(86, 'T???t c???', 'All', NULL, 3, 47, 'tin-tuc', 'main', '', 'active', 'admin@gmail.com', 1603766796, 'admin@gmail.com', 1655889879),
(87, 'BEST SELLER', 'BEST SELLER', NULL, 1, 43, '#', 'main', '', 'active', 'admin@gmail.com', 1603767035, 'admin@gmail.com', 1655889947),
(88, 'T???t c???', 'All', NULL, 2, 87, '#', 'main', '', 'active', 'admin@gmail.com', 1603767055, 'admin@gmail.com', 1655889975),
(89, 'S???n ph???m', 'S???n ph???m', NULL, 3, 43, '#', 'main', '', 'active', 'admin@gmail.com', 1603767068, 'admin@gmail.com', 1655889995),
(90, 'T???t c???', 'All', NULL, 4, 89, 'san-pham', 'main', '', 'active', 'admin@gmail.com', 1603767079, 'admin@gmail.com', 1655892513),
(91, 'B??? s??u t???p', 'Albums', NULL, 4, 81, '#', 'main', '', 'active', 'admin@gmail.com', 1656046952, 'admin@gmail.com', 1656046952),
(92, 'T???t c???', 'all', NULL, 4, 91, 'albums', 'main', '', 'active', 'admin@gmail.com', 1656046986, 'admin@gmail.com', 1656046994),
(93, 'H?????ng d???n mua h??ng', '', NULL, 3, 84, 'chi-tiet/huong-dan-dat-hang-tren-website-d-chic', 'main', '', 'active', 'admin@gmail.com', 1656054921, 'admin@gmail.com', 1656060951);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `e4_thanhtoan`
--
ALTER TABLE `e4_thanhtoan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e4_users`
--
ALTER TABLE `e4_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Role Id` (`permission`);

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
-- AUTO_INCREMENT for table `e4_danhmucsach`
--
ALTER TABLE `e4_danhmucsach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `e4_roles`
--
ALTER TABLE `e4_roles`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `e4_tacgia`
--
ALTER TABLE `e4_tacgia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `e4_thanhtoan`
--
ALTER TABLE `e4_thanhtoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `e4_users`
--
ALTER TABLE `e4_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
