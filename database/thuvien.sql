-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 04:00 PM
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
(1, 'TA001', 'Tri ân 3', '<p>sssssss</p>', 0, 1, 3, 100000, 201, '3', 1, 'tri-an', 0, '', '/upload/san%20pham/DTT-5542-36177856.jpg'),
(2, 'TA002', 'Sách Tiếng Anh', '', 0, 1, 2, 120000, 1, '2', 1, 'sach-tieng-anhta002', 0, '', '/upload/san%20pham/DTT-5542-36177856.jpg');

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
(3, 'Sách Văn Học'),
(4, 'Kim Đồng'),
(5, 'Sách mới'),
(6, 'Sách Toán Học');

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
(25, 74, 'Quản lý Modules', 'Modules Management', '', '?module=module', 'active', 2, 52, '1', '', 0),
(33, 74, 'Quản lý Blog (Admin System)', 'Quản lý Blog (Admin System)', '', '?module=block', 'active', 2, 51, '0', '', 0),
(49, 0, 'Quản lý thông tin cấu hình', 'Quản lý thông tin cấu hình', 'fa fa-cogs', '', 'deactive', 1, 9, '0', '', 0),
(51, 74, 'Quản lý Tasks - Modules', 'Tasks & Modules Management', '', '?module=task', 'active', 2, 53, '0', '', 0),
(73, 49, 'Quản lý menu website', 'Quản lý menu website', '', '?module=web_menu', 'active', 2, 31, 'deactive', '', 0),
(74, 0, 'Dành cho người phát triển', 'Dành cho người phát triển', 'fa fa-cubes', '', 'deactive', 1, 10, '0', '', 0),
(87, 0, 'Tài khoản cá nhân', 'Your Profile', 'fa fa-user', '?module=profile', 'active', 1, 7, 'deactive', '', 1483904741),
(90, 49, 'Quản lý cấu hình trang chủ', 'Homepage Management', '', '?module=web_home', 'active', 2, 32, 'deactive', '', 1484751727),
(91, 49, 'Quản lý hình ảnh hệ thống', 'System Image Management', 'fa fa-picture-o', '?module=web_image', 'active', 2, 7, 'deactive', '', 1484761092),
(92, 49, 'Quản lý thông tin website', 'Website information management', 'fa fa-globe', '?module=web_information', 'active', 2, 4, '', '', 1487872412),
(99, 49, 'Quản lý mã nhúng', 'Analytics code', '', '?module=analytics_code', 'active', 2, 0, '', '', 1595491947),
(107, 0, 'Quản lý Mượn - trả', 'Order-Product Management', 'fa fa-shopping-cart', '?module=cart', 'active', 1, 4, 'deactive', '1', 1597135674),
(108, 0, 'Quản lý danh mục sách', 'Book Category Management', '', '?module=book_category', 'active', 1, 1, 'deactive', '1', 1597808591),
(109, 0, 'Danh sách sách', 'Books Management', '', '?module=book', 'active', 1, 0, 'deactive', '1', 1597808616),
(110, 0, 'Quản lý tác giả', 'Authors Management', '', '?module=book_author', 'active', 1, 3, 'deactive', '1', 1597808641),
(111, 0, 'Quản lý NXB', 'Book NXB Management', '', '?module=book_nxb', 'active', 1, 2, 'deactive', '1', 1597819881),
(112, 0, 'Quản lý nội dung sách', 'Book Content Management', 'fa fa-book', '', 'deactive', 1, 1, 'deactive', '1', 1597823910),
(113, 0, 'Quản lý sự kiện', 'Event Management', '', '?module=event', 'deactive', 1, 99, 'deactive', '1', 1597824883),
(114, 0, 'Thư viện danh ngôn', 'Quotation Management', '', '?module=quotation', 'deactive', 1, 99, 'deactive', '1', 1597828844),
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
(5, 14, 2, 1, 1, 1668194468),
(6, 14, 1, 1, 0, 1666986359),
(7, 13, 2, 1, 0, 1667031491),
(8, 13, 2, 1, 0, 1667031608),
(9, 13, 1, 1, 0, 1667031608),
(10, 13, 2, 1, 1, 1667057509),
(11, 14, 2, 1, 1, 1667057396),
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
(1, 'Nhà sách Việt'),
(2, 'Nhà sách Kim Đồng'),
(3, 'Thời đại mới');

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
(9, 'Nhân viên', 'Dành cho nhân viên quản lý thư viện', 1, '87,74', 'lien-he,dich-vu,recruitments,projects,product,profile,news', 'recruitments_add,recruitments_category_add,recruitments_category_delete,recruitments_category_edit,recruitments_category_view,recruitments_delete,recruitments_edit,recruitments_view,projects_add,projects_category_add,projects_category_delete,projects_category_edit,projects_category_view,projects_delete,projects_edit,projects_view,product_add,product_category_add,product_category_delete,product_category_edit,product_category_view,product_delete,product_edit,product_view,profile_change_pass,profile_edit,news_add,news_category_add,news_category_delete,news_category_edit,news_category_view,news_delete,news_edit,news_view'),
(10, 'Sinh viên', 'Xem thông tin sinh viên', 1, '109,87', '', '');

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
(3, 'Lão Hạc'),
(4, 'Kim Đồng'),
(5, 'Nguyễn Ngọc Ký');

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
(14, '1851062345', 'public', 'Đào Tùng Lâm', 'e10adc3949ba59abbe56e057f20f883e', '1851062345@e.tlu.edu.vn', 9, 1, 'e714f66102588512cad19bc913098fc8', NULL, NULL, NULL, '', '', NULL, NULL, 1666862294, 'admin@gmail.com', 1666862294, 'admin@gmail.com', NULL, '60TH1', 'CNTT', '0973642773', 220000),
(15, '1851061640', 'public', 'Đỗ Thị Linh', 'e10adc3949ba59abbe56e057f20f883e', '1851061640@e.tlu.edu.vn', 9, 1, '0ba7aaffef06206de764a9bbe27fe598', NULL, NULL, NULL, '', '    ', NULL, NULL, 1668191804, 'admin@gmail.com', 1668191804, 'admin@gmail.com', NULL, '60TH1', 'CNTT', '0987654331', 0);

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
