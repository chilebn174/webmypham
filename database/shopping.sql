-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2020 at 10:38 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `a`
-- (See below for the actual view)
--
CREATE TABLE `a` (
`money` double
,`number` decimal(32,0)
,`order_id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `b`
-- (See below for the actual view)
--
CREATE TABLE `b` (
`id` bigint(20) unsigned
,`name` varchar(255)
,`phone` varchar(255)
,`address` varchar(255)
,`status` int(11)
,`fee` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(11) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `img_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `ten`, `image`, `content`, `created_at`, `updated_at`, `img_name`, `deleted_at`) VALUES
(6, 'Missha', '/storage/brand/1/L66FGR3YL4dUdF6ER2ZS.jpg', '<p>Missha khai trương cửa h&agrave;ng Missha đầu ti&ecirc;n của Hoa Kỳ v&agrave;o ng&agrave;y 4 th&aacute;ng 5 năm 2005 tại đại lộ số 5 gần nhất của th&agrave;nh phố NY.&nbsp;Cũng&nbsp;<strong style=\"color: rgb(50, 50, 50); font-family: Roboto, sans-serif; font-size: 13px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">l&agrave;</strong> nguồn gốc&nbsp;<strong>của Missha</strong> từ trang web internet beauty.net.&nbsp;V&agrave; tất cả c&aacute;c sản phẩm Missha b&aacute;n cho Trung Quốc, Bắc Mỹ, Hongkong, Singapore, &Uacute;c v&agrave; c&aacute;c quận kh&aacute;c.&nbsp;Missha kh&ocirc;ng bao giờ tự m&igrave;nh tạo ra, ch&uacute;ng t&ocirc;i chăm ch&uacute; lắng nghe phản hồi của kh&aacute;ch h&agrave;ng để tạo ra những sản phẩm tốt nhất.&nbsp;Ch&uacute;ng t&ocirc;i thề rằng Missha sẽ tiếp tục nỗ lực để đạt được sự c&ocirc;ng nhận tr&ecirc;n to&agrave;n thế giới về chất lượng tốt nhất của c&aacute;c sản phẩm mỹ phẩm.<br style=\"color: rgb(50, 50, 50); font-family: Roboto, sans-serif; font-size: 13px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\"><br style=\"color: rgb(50, 50, 50); font-family: Roboto, sans-serif; font-size: 13px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">&lt;Nh&oacute;m nhạc nữ H&agrave;n Quốc! AOA gồm 7 th&agrave;nh vi&ecirc;n l&agrave; người mẫu mới của missha. Họ l&agrave; Choa, Jimin, Yuna, Minah, Hyejung, Sulhyun, Chanmi&gt; </p>', '2020-11-01 20:19:24', '2020-11-08 00:17:16', 'about_brand_1.jpg', NULL),
(7, 'ádasdhgkhjk', '/storage/brand/1/rRytVRSFqAth45WuNO7a.png', '<p>&aacute;dasd</p>', '2020-11-02 01:03:17', '2020-11-02 01:07:03', 'Screenshot (179).png', '2020-11-02 01:07:03'),
(8, 'chisad', '/storage/brand/1/UYNlyZt3kT6l16TXALjR.png', '<p>&aacute;dsadasd</p>', '2020-11-02 01:07:25', '2020-11-02 01:07:28', 'Screenshot (190).png', '2020-11-02 01:07:28'),
(9, 'Laneige', '/storage/brand/1/Qdl0uf1shN2CLjnuhYuH.jpg', '<p>Dựa tr&ecirc;n nguy&ecirc;n tắc cơ bản rằng nước, nguồn gốc của sự sống, l&agrave; ch&igrave;a kh&oacute;a để duy tr&igrave; l&agrave;n da trẻ trung v&agrave; rạng rỡ,&nbsp;<strong style=\"color: rgb(50, 50, 50); font-family: Roboto, sans-serif; font-size: 13px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">Laneige</strong> li&ecirc;n tục thiết lập c&aacute;c xu hướng l&agrave;m đẹp mới v&agrave; cung cấp c&aacute;c sản phẩm chất lượng cao th&ocirc;ng qua đổi mới.&nbsp;Thương hiệu l&agrave;m&nbsp;<strong style=\"color: rgb(50, 50, 50); font-family: Roboto, sans-serif; font-size: 13px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">đẹp</strong> cao cấp của H&agrave;n Quốc d&agrave;nh cho phụ nữ trẻ lu&ocirc;n tận t&acirc;m l&agrave;m đẹp v&agrave; truyền niềm tin cho kh&aacute;ch h&agrave;ng. </p>', '2020-11-08 00:21:02', '2020-11-08 00:21:02', 'about_brand_58.jpg', NULL),
(10, 'Innisfree', '/storage/brand/1/3ohqkIg3S53eVb0HbaHm.jpg', '<p>Innisfree, h&ograve;n đảo trong l&agrave;nh, nơi thi&ecirc;n nhi&ecirc;n trong l&agrave;nh v&agrave; vẻ đẹp l&agrave;nh mạnh c&ugrave;ng tồn tại h&agrave;i h&ograve;a.<br style=\"color: rgb(50, 50, 50); font-family: Roboto, sans-serif; font-size: 13px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">Innisfree l&agrave; một thương hiệu tự nhi&ecirc;n chia sẻ những lợi &iacute;ch của thi&ecirc;n nhi&ecirc;n từ h&ograve;n đảo Jeju hoang sơ để mang lại vẻ đẹp khỏe mạnh v&agrave; duy tr&igrave; một cuộc sống xanh th&acirc;n thiện với m&ocirc;i trường để giữ g&igrave;n sự c&acirc;n bằng của thi&ecirc;n nhi&ecirc;n. </p>', '2020-11-08 00:22:35', '2020-11-08 00:22:35', 'about_brand_40.jpg', NULL),
(11, 'The face shop', '/storage/brand/1/N3yHxuFjLmkMTXtr3iJQ.jpg', '<p>THE FACE SHOP l&agrave; nh&agrave; b&aacute;n lẻ mỹ phẩm H&agrave;n Quốc thuộc sở hữu của LG Gia dụng &amp; Chăm s&oacute;c sức khỏe.&nbsp;Được th&agrave;nh lập tại H&agrave;n Quốc v&agrave;o năm 2003, THEFACESHOP đang mở rộng nhanh ch&oacute;ng v&agrave; hiện phục vụ kh&aacute;ch h&agrave;ng tr&ecirc;n to&agrave;n thế giới, với sự hiện diện to&agrave;n cầu của hơn 2.300 cửa h&agrave;ng tại 29 quốc gia.&nbsp;Da mất c&acirc;n bằng đồng nghĩa với việc bạn đang qu&aacute; xa rời tự nhi&ecirc;n.&nbsp;The face shop của ch&uacute;ng t&ocirc;i sẽ trở th&agrave;nh bản chất thứ hai cho những bạn quan t&acirc;m v&agrave; th&iacute;ch sự tự nhi&ecirc;n.&nbsp;Ch&uacute;ng t&ocirc;i đang truyền tải c&acirc;u chuyện thực sự của thi&ecirc;n nhi&ecirc;n.&nbsp;H&atilde;y mở rộng đ&ocirc;i mắt của bạn với c&acirc;u chuyện c&oacute; thật về thi&ecirc;n nhi&ecirc;n của ch&uacute;ng ta.&nbsp;Được kể bởi&nbsp;<strong style=\"color: rgb(50, 50, 50); font-family: Roboto, sans-serif; font-size: 13px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">THE FACE SHOP</strong> .&nbsp;The face shop đang h&agrave;nh động cho l&agrave;n da của bạn.&nbsp;ch&uacute;ng t&ocirc;i đảm bảo rằng&nbsp;<strong style=\"color: rgb(50, 50, 50); font-family: Roboto, sans-serif; font-size: 13px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">tinh chất của thi&ecirc;n nhi&ecirc;n</strong> sẽ đi v&agrave;o l&agrave;n da của bạn như bạn biết. &lt;Người đẹp Suzi. C&ocirc; ấy l&agrave; người mẫu ch&iacute;nh v&agrave;o shop quần &aacute;o c&ugrave;ng với Kim soo hyun của nam diễn vi&ecirc;n ch&iacute;nh xuất sắc nhất l&agrave; người mẫu&gt; </p>', '2020-11-08 00:23:44', '2020-11-08 00:23:44', 'about_brand_39.jpg', NULL),
(12, 'It\'s Skin', '/storage/brand/1/i4ArT3H8ZanJ2ZBeUmff.jpg', '<p>It&#39;s Skin b&aacute;n chạy nhất tại cửa h&agrave;ng miễn thuế. Cũng rất phổ biến ở Trung Quốc. Mặt h&agrave;ng tốt nhất l&agrave; d&ograve;ng tinh chất c&ocirc;ng thức Power10. Của ch&uacute;ng t&ocirc;i hiệu Kh&aacute;i niệm <strong style=\"color: rgb(50, 50, 50); font-family: Roboto, sans-serif; font-size: 13px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">N&oacute; da&nbsp;</strong><strong style=\"color: rgb(50, 50, 50); font-family: Roboto, sans-serif; font-size: 13px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">Skin Care</strong> l&agrave; &#39;+ Skin l&acirc;m s&agrave;ng = Giải ph&aacute;p&#39;. V&agrave; giải ph&aacute;p cho bạn khi bạn đang t&igrave;m kiếm v&ocirc; số thương hiệu. Đ&oacute; l&agrave; Skin thấu hiểu những lo lắng của bạn. Ngo&agrave;i ra ch&uacute;ng t&ocirc;i sẽ đưa ra c&aacute;c giải ph&aacute;p cho c&aacute;c vấn đề về da của bạn. một lần nữa, đ&atilde; tiến h&agrave;nh nghi&ecirc;n cứu xem bạn sẽ cần những th&agrave;nh phần n&agrave;o để đảm bảo an to&agrave;n. Đ&oacute; l&agrave; mỹ phẩm da giải ph&aacute;p duy nhất cho vẻ đẹp của bạn v&agrave; cả l&agrave;n da của bạn. </p>', '2020-11-08 00:24:49', '2020-11-08 00:24:49', 'about_brand_54.jpg', NULL),
(13, 'Etude House', '/storage/brand/1/09Im9449qs5LyXeN4iXr.jpg', '<p>T&ecirc;n &#39;Etude&#39; c&oacute; nghĩa l&agrave; &#39;c&ocirc;ng tr&igrave;nh&nbsp;nghi&ecirc;n cứu&nbsp;<strong style=\"color: rgb(50, 50, 50); font-family: Roboto, sans-serif; font-size: 13px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">tuyệt vời</strong> về Chopin&#39; trong tiếng Ph&aacute;p.&nbsp;Họ được nhắm mục ti&ecirc;u đến phụ nữ.<br style=\"color: rgb(50, 50, 50); font-family: Roboto, sans-serif; font-size: 13px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">V&igrave; vậy m&agrave;u chủ đạo của ch&uacute;ng l&agrave; m&agrave;u hồng.&nbsp;V&igrave; hầu hết phụ nữ đều th&iacute;ch m&agrave;u hồng.&nbsp;M&agrave;u hồng c&oacute; li&ecirc;n quan đến h&igrave;nh ảnh c&ocirc;ng ch&uacute;a từ thời thơ ấu của phụ nữ.&nbsp;Ngo&agrave;i ra&nbsp;khẩu hiệu thương hiệu của&nbsp;<strong style=\"color: rgb(50, 50, 50); font-family: Roboto, sans-serif; font-size: 13px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">Etudehouse</strong> l&agrave; &quot;Tất cả c&aacute;c bạn được sinh ra như một c&ocirc;ng ch&uacute;a!&quot;&nbsp;Họ biến Princess Fantasy th&agrave;nh hiện thực.&nbsp;V&agrave; họ ủng hộ kh&aacute;ch h&agrave;ng của họ th&iacute;ch trang điểm như chơi v&agrave; vui vẻ hơn l&agrave; coi đ&oacute; l&agrave; th&oacute;i quen nh&agrave;m ch&aacute;n lặp đi lặp lại.&nbsp;M&agrave;u sắc đa dạng, chất lượng đảm bảo, kiểu d&aacute;ng đ&aacute;ng y&ecirc;u.&nbsp;Để khiến tất cả c&aacute;c c&ocirc; g&aacute;i tr&ecirc;n thế giới n&agrave;y trở n&ecirc;n ngọt ng&agrave;o với những m&oacute;n đồ th&uacute; vị của Etude!<br style=\"color: rgb(50, 50, 50); font-family: Roboto, sans-serif; font-size: 13px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">&lt;Những ng&ocirc;i sao tham gia Etudehouse: Sulli &amp; Crystal, Shinee&#39;s onew, jonghyun, key, minho v&agrave; Taemin, v.v.&gt; </p>', '2020-11-08 00:25:35', '2020-11-08 00:25:35', 'about_brand_34.jpg', NULL),
(14, 'Peripera', '/storage/brand/1/dmEt6dBJxPukT4b6Xo1P.jpg', '<p>Được th&agrave;nh lập v&agrave;o năm 2006,&nbsp;<strong style=\"color: rgb(50, 50, 50); font-family: Roboto, sans-serif; font-size: 13px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">Peripera thu</strong> h&uacute;t c&aacute;c c&ocirc; g&aacute;i nữ t&iacute;nh với&nbsp;bộ sưu tập&nbsp;<strong style=\"color: rgb(50, 50, 50); font-family: Roboto, sans-serif; font-size: 13px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">trang điểm</strong> nhấn mạnh v&agrave;o m&agrave;u m&ocirc;i, mắt v&agrave; m&oacute;ng tay tươi s&aacute;ng gợi cảm gi&aacute;c l&atilde;ng mạn. M&agrave;u sắc bắt mắt được bổ sung bởi bao b&igrave; m&agrave;u sắc b&atilde;o h&ograve;a v&agrave; trẻ trung. Thương hiệu hướng đến những phụ nữ trẻ, độc lập, c&oacute; c&aacute; t&iacute;nh mạnh mẽ v&agrave; y&ecirc;u th&iacute;ch sự c&aacute; t&iacute;nh. </p>', '2020-11-08 00:27:03', '2020-11-08 00:27:03', 'about_brand_79.jpg', NULL),
(15, 'Huxley', '/storage/brand/1/iuzPYI34q9cB8EdPREkT.jpg', '<p><b style=\"color: rgb(50, 50, 50); font-family: Roboto, sans-serif; font-size: 13px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">Vẻ đẹp thực sự, huxley Được v&iacute;</b><br style=\"color: rgb(50, 50, 50); font-family: Roboto, sans-serif; font-size: 13px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">như &quot;Thế giới mới dũng cảm&quot; m&agrave; t&aacute;c giả Aldous Leonard Huxley đ&atilde; ti&ecirc;n đo&aacute;n trở th&agrave;nh hiện thực ng&agrave;y nay, &quot;Huxley&quot; ra đời. Lấy cảm hứng từ v&agrave; được đặt t&ecirc;n theo tầm nh&igrave;n xa tr&ocirc;ng rộng n&agrave;y, Huxley nhằm mục đ&iacute;ch giới thiệu những sản phẩm ch&iacute;nh h&atilde;ng tốt nhất trong bối cảnh tr&agrave;n ngập th&ocirc;ng tin mỹ phẩm kh&ocirc;ng li&ecirc;n quan. &quot;Huxley&quot; l&agrave; thương hiệu chăm s&oacute;c da mới v&agrave; đặc biệt lấy gi&aacute; trị tự nhi&ecirc;n của l&agrave;n da l&agrave;m ưu ti&ecirc;n h&agrave;ng đầu v&agrave; theo đuổi vẻ đẹp đ&iacute;ch thực. </p>', '2020-11-08 00:30:36', '2020-11-08 00:30:36', 'Huxley.jpg', NULL),
(16, 'A.H.C', '/storage/brand/1/CglMtL5ePMLYYzjFkogE.jpg', '<p>Thương hiệu h&agrave;ng đầu về thẩm mỹ&nbsp;<strong style=\"color: rgb(50, 50, 50); font-family: Roboto, sans-serif; font-size: 13px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">AHC</strong> Sản&nbsp;<strong>phẩm mỹ phẩm</strong><br style=\"color: rgb(50, 50, 50); font-family: Roboto, sans-serif; font-size: 13px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\"><br style=\"color: rgb(50, 50, 50); font-family: Roboto, sans-serif; font-size: 13px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">chức năng&nbsp;kết hợp với khoa học về da V&Agrave; thế mạnh của thẩm mỹ cho tất cả phụ nữ sử dụng dịch vụ m&agrave; trước đ&acirc;y chỉ d&agrave;nh cho một số &iacute;t phụ nữ.&nbsp;Phụ nữ kh&ocirc;ng ngừng t&igrave;m kiếm&nbsp;<strong>vẻ đẹp</strong> nhưng việc theo đuổi gi&aacute; trị thay đổi, ph&aacute;t triển kh&ocirc;ng ngừng. Ch&uacute;ng t&ocirc;i lu&ocirc;n đ&oacute;n nhận những th&aacute;ch thức mới để đ&aacute;p ứng nhu cầu chăm s&oacute;c da, cơ thể v&agrave; tr&iacute; tuệ của người ti&ecirc;u d&ugrave;ng, đồng thời nỗ lực tăng cường vẻ đẹp bằng việc &aacute;p dụng c&aacute;c c&ocirc;ng nghệ v&agrave; vật liệu thẩm mỹ ti&ecirc;n tiến. </p>', '2020-11-08 00:31:47', '2020-11-08 00:31:47', 'about_brand_129.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Chăm sóc da', 0, 'cham-soc-da', NULL, '2020-11-08 00:06:44', NULL),
(2, 'Tonner', 14, 'tonner', NULL, '2020-11-08 00:12:02', NULL),
(3, 'Lotion', 7, 'lotion', NULL, '2020-11-08 00:12:17', NULL),
(4, 'Serum', 7, 'serum', NULL, '2020-11-08 00:12:29', NULL),
(5, 'Kem dưỡng', 7, 'kem-duong', NULL, '2020-11-08 00:12:40', NULL),
(6, 'Chống nắng', 7, 'chong-nang', NULL, '2020-11-08 00:12:54', NULL),
(7, 'Dưỡng da', 1, 'duong-da', NULL, '2020-11-08 00:11:08', NULL),
(8, 'honda', 0, 'honda', '2020-10-01 04:26:57', '2020-10-03 01:01:35', '2020-10-03 01:01:35'),
(9, 'quan ao tre em', 1, 'quan-ao-tre-em', '2020-10-01 08:43:52', '2020-11-08 00:01:35', '2020-11-08 00:01:35'),
(10, 'quan ao nam nam', 2, 'quan-ao-nam-nam', '2020-10-01 09:44:09', '2020-11-08 00:01:33', '2020-11-08 00:01:33'),
(11, 'honda SM', 0, 'honda-sm', '2020-10-01 17:20:41', '2020-10-02 23:52:19', '2020-10-02 23:52:19'),
(13, 'honda', 2, 'honda', '2020-10-04 19:34:45', '2020-10-04 19:35:00', '2020-10-04 19:35:00'),
(14, 'Làm sạch', 1, 'lam-sach', '2020-11-08 00:11:37', '2020-11-08 00:11:37', NULL),
(15, 'Nước tẩy trang', 14, 'nuoc-tay-trang', '2020-11-08 00:13:19', '2020-11-08 00:13:19', NULL),
(16, 'Tẩy da chết', 14, 'tay-da-chet', '2020-11-08 01:14:23', '2020-11-08 01:14:23', NULL),
(17, 'set dưỡng da', 7, 'set-duong-da', '2020-11-08 01:29:26', '2020-11-08 01:29:26', NULL),
(18, 'Trang điểm', 0, 'trang-diem', '2020-11-08 01:39:43', '2020-11-08 01:39:43', NULL),
(19, 'Trang điểm mặt', 18, 'trang-diem-mat', '2020-11-08 01:42:00', '2020-11-08 01:42:00', NULL),
(20, 'Trang điểm mắt', 18, 'trang-diem-mat', '2020-11-08 01:51:25', '2020-11-08 01:51:57', NULL),
(21, 'Trang điểm môi', 18, 'trang-diem-moi', '2020-11-08 01:52:30', '2020-11-08 01:52:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `address`, `phone`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'haf', 'ha noi', '0000', NULL, '2020-11-05 02:59:00', NULL),
(2, 'Nguyễn thị M', 'bacn inh', '0862499724', '2020-11-04 09:59:02', '2020-11-05 03:24:04', '2020-11-05 03:24:04');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `parent_id`, `created_at`, `updated_at`, `slug`, `deleted_at`) VALUES
(2, 'menu 2', 0, NULL, '2020-10-03 02:41:37', '', '2020-10-03 02:41:37'),
(3, 'menu 3', 0, NULL, NULL, '', NULL),
(4, 'menu 1.1', 1, NULL, NULL, '', NULL),
(5, 'menu 1.2', 1, NULL, '2020-10-04 19:36:42', '', '2020-10-04 19:36:42'),
(6, 'menu 2.1', 2, NULL, NULL, '', NULL),
(7, 'menu 2.2', 2, NULL, NULL, '', NULL),
(8, 'menu 3.1', 3, NULL, NULL, '', NULL),
(11, 'honda', 8, '2020-10-04 19:35:12', '2020-10-04 19:35:26', 'honda', '2020-10-04 19:35:26');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2020_10_01_013042_create_categories_table', 2),
(6, '2020_10_03_064506_add_column_delete_at_table_categories', 3),
(7, '2020_10_03_072027_create_menus_table', 4),
(8, '2020_10_03_085923_add_column_slug_to_menus_table', 5),
(9, '2020_10_03_093028_add_column_delete_at_table_menus', 6),
(10, '2020_09_30_141206_create_products_table', 7),
(11, '2020_10_05_025331_create_product_images_table', 7),
(12, '2020_10_05_025642_create_tags_table', 7),
(13, '2020_10_05_025845_create_product_tags_table', 7),
(14, '2020_10_05_030214_create_brands_table', 7),
(15, '2020_10_25_170558_add_column_image_name', 8),
(16, '2020_10_26_054704_add_image_name_product_img', 9),
(17, '2020_10_31_080334_add_col_table_image_name', 10),
(18, '2020_10_31_081159_add_col_image_name', 11),
(19, '2020_10_31_081828_add_col_image_name', 12),
(20, '2020_11_01_152150_add_column_deleted_at_product', 12),
(21, '2020_11_02_014511_create_sliders_table', 13),
(22, '2020_11_02_075902_add_column_deleted_at', 14),
(23, '2020_11_02_080034_add_column_deleted_at_brands', 14),
(24, '2020_11_02_115207_create_roles_table', 15),
(25, '2020_11_02_115601_create_permissions_table', 15),
(26, '2020_11_02_115755_create_table_user_role', 15),
(27, '2020_11_02_120027_create_table_permission_role', 15),
(28, '2020_11_03_102041_add_column_deleted_at_user', 16),
(31, '2020_11_04_000859_create_orders_table', 17),
(32, '2020_11_04_001009_create_customers_table', 17),
(34, '2020_11_04_005835_create_order_details_table', 18),
(35, '2020_11_04_171403_add_column_deteted_at_customer', 19),
(36, '2020_11_05_002144_add_column_image_user', 20),
(38, '2020_11_06_154736_add_column_deleted_at_order', 21);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `fee` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `status`, `created_at`, `fee`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, NULL, 30, '2020-11-06 08:58:22', '0000-00-00 00:00:00'),
(2, 2, 1, NULL, 30000, '2020-11-06 09:02:30', '2020-11-06 09:02:30'),
(3, 2, 1, NULL, 30000, NULL, NULL),
(4, 1, 0, NULL, 3000, NULL, NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `orderview`
-- (See below for the actual view)
--
CREATE TABLE `orderview` (
`order_id` int(11)
,`name` varchar(255)
,`phone` varchar(255)
,`address` varchar(255)
,`STATUS` int(11)
,`money` double
,`number` decimal(32,0)
,`fee` int(11)
,`phi` double
);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `number`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 3, NULL, NULL),
(2, 2, 4, 8, NULL, NULL),
(4, 3, 4, 4, NULL, NULL),
(5, 3, 2, 5, NULL, NULL),
(6, 4, 1, 6, NULL, NULL),
(7, 4, 2, 7, NULL, NULL),
(8, 0, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `feature_image`, `content`, `user_id`, `category_id`, `brand_id`, `created_at`, `updated_at`, `image_name`, `deleted_at`) VALUES
(2, 'honda', '4568', '/storage/product/1/HWUD9oiynXPpRApDeluO.png', '<p>asdad</p>', 1, 10, NULL, '2020-10-25 20:06:18', '2020-11-01 08:29:07', NULL, '2020-11-01 08:29:07'),
(3, 'honda', '4568', '/storage/product/1/vbxQyCHs32RIVKR2P1nu.png', '<p>asdad</p>', 1, 10, NULL, '2020-10-25 20:12:10', '2020-11-01 08:38:00', NULL, '2020-11-01 08:38:00'),
(4, '[AHC] Time Rewind Real Eye Cream For Face 30ml', '1110000', '/storage/product/1/LG5OV36nMcplLOKDA3qm.jpg', '<p><img src=\"blob:http://localhost:8080/7530367f-0c0c-40dd-866e-b977c3e5f687\" style=\"width: 695px;\" class=\"fr-fic fr-dib\"></p>', 1, 5, NULL, '2020-10-25 20:12:49', '2020-11-08 00:56:29', 'thumb-11_230x230.jpg', NULL),
(5, '[AHC] Capture Moist Solution Max Cream 50ml', '693000', '/storage/product/1/X7SSHE7MzMXP5We8Rifr.jpg', '<div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>M&ocirc; tả</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Kem giải ph&aacute;p dưỡng ẩm giữ ẩm cho da kh&ocirc; v&agrave; mềm mại Chiết xuất l&ecirc;n men axit Hyaruroic gi&uacute;p giữ cho l&agrave;n da của bạn ẩm v&agrave; khỏe mạnh.</div><div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Đ&ecirc; nghị sử dụng</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Ở bước cuối c&ugrave;ng của quy tr&igrave;nh chăm s&oacute;c da, nhẹ nh&agrave;ng thoa một lượng kem th&iacute;ch hợp v&agrave; thoa đều từ trong ra ngo&agrave;i khu&ocirc;n mặt.&nbsp;Nhẹ nh&agrave;ng vỗ nhẹ l&ecirc;n da cho đến khi hấp thụ ho&agrave;n to&agrave;n.<br><img data-fr-image-pasted=\"true\" src=\"https://d3i908zd4kzakt.cloudfront.net/data/editor/1912/6245b5b07c10c4788130aa08c299013f_1577082447_0485.jpg\" title=\"6245b5b07c10c4788130aa08c299013f_1577082447_0485.jpg\" alt=\"6245b5b07c10c4788130aa08c299013f_1577082\" style=\"border: none; max-width: 100%;\" class=\"fr-fic fr-dii\"><br style=\"clear: both;\"></div>', 1, 5, 16, '2020-10-25 23:14:00', '2020-11-08 01:00:25', 'thumb-maxmain_230x230.jpg', NULL),
(6, '[AHC] Capture Revite Solution Max Cream 50ml', '693000', '/storage/product/1/KGuroBWbtdGPmpSL1DvE.jpg', '<div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Sự mi&ecirc;u tả</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Kem l&agrave; một dung dịch dưỡng chất gi&uacute;p quản l&yacute; l&agrave;n da căng mọng v&agrave; kh&ocirc;ng đ&agrave;n hồi với l&agrave;n da b&oacute;ng khỏe.</div><div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Đ&ecirc; nghị sử dụng</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Ở bước cuối c&ugrave;ng của quy tr&igrave;nh chăm s&oacute;c da, nhẹ nh&agrave;ng thoa một lượng kem th&iacute;ch hợp v&agrave; thoa đều từ trong ra ngo&agrave;i khu&ocirc;n mặt.&nbsp;Nhẹ nh&agrave;ng vỗ nhẹ l&ecirc;n da cho đến khi hấp thụ ho&agrave;n to&agrave;n.<br><br></div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><img src=\"blob:http://localhost:8080/f0e2bd29-a894-4916-8d06-1d379f13ce5a\" title=\"6245b5b07c10c4788130aa08c299013f_1577082172_7648.jpg\" alt=\"6245b5b07c10c4788130aa08c299013f_1577082\" style=\"border: none; max-width: 100%;\" class=\"fr-fic fr-dii\"></div>', 1, 5, 16, '2020-10-25 23:17:31', '2020-11-08 01:02:29', 'thumb-dddddddddd_230x230.jpg', NULL),
(7, '[Huxley] Dầu dưỡng cấp ẩm', '200000', '/storage/product/1/gh4WAYUWRbjzNaVGR59U.jpg', '<div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Sự mi&ecirc;u tả</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Ampule l&agrave; dung dịch dưỡng chất gi&uacute;p quản l&yacute; l&agrave;n da căng mọng v&agrave; kh&ocirc;ng đ&agrave;n hồi với l&agrave;n da b&oacute;ng khỏe.</div><div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Đ&ecirc; nghị sử dụng</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">1. Thoa đều sau bước l&agrave;m sạch v&agrave; dưỡng da.&nbsp;2. Nhẹ nh&agrave;ng massage v&agrave; vỗ nhẹ khắp mặt để dưỡng chất thẩm thấu nhanh v&agrave; chuyển sang bước dưỡng ẩm.<br><br></div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><img src=\"blob:http://localhost:8080/8cc39291-4c3e-4cb8-a817-280f8382484d\" title=\"6245b5b07c10c4788130aa08c299013f_1577080879_4381.jpg\" alt=\"6245b5b07c10c4788130aa08c299013f_1577080\" style=\"border: none; max-width: 100%;\" class=\"fr-fic fr-dii\"></div>', 1, 4, NULL, '2020-10-25 23:21:14', '2020-11-08 01:46:08', 'thumb-main_230x230.jpg', NULL),
(8, '[AHC] Natural Perfection Double Shield Sun Stick 14g', '140000', '/storage/product/1/vaXKQdFtAZJU8Zn5t4wI.jpg', '<div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Sự mi&ecirc;u tả</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">- Kem chống nắng dạng que đa chức năng cung cấp khả năng chống tia UV mạnh mẽ v&agrave; bảo vệ da chống lại c&aacute;c tia c&oacute; hại v&agrave; c&aacute;c t&aacute;c nh&acirc;n g&acirc;y hại từ gốc tự do trong m&ocirc;i trường.<br>-Patented UV IR BLOCK &trade; bảo vệ da khỏi tia UV v&agrave; IR (Bức xạ hồng ngoại).<br>-Phyto Protect Complex gi&uacute;p l&agrave;m dịu v&agrave; bảo vệ da khỏi c&aacute;c t&aacute;c nh&acirc;n b&ecirc;n ngo&agrave;i.<br>-C&ocirc;ng thức kh&ocirc;ng g&acirc;y dị ứng ph&ugrave; hợp với mọi loại da &amp; trẻ em.<br>-Giảm nếp nhăn đồng thời tăng cường sự r&otilde; n&eacute;t (Sản phẩm chức năng l&agrave;m trắng &amp; cải thiện nếp nhăn).</div><div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Đ&ecirc; nghị sử dụng</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Ở bước cuối c&ugrave;ng của quy tr&igrave;nh dưỡng da cơ bản, lướt que l&ecirc;n những v&ugrave;ng dễ tiếp x&uacute;c với tia UV (Tr&aacute;nh v&ugrave;ng mắt), trước khi hoạt động ngo&agrave;i trời 15-30 ph&uacute;t.</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div align=\"center\" style=\"word-break: keep-all; text-align: center;\"><br></div><div align=\"center\" style=\"word-break: keep-all; text-align: center;\"><img src=\"blob:http://localhost:8080/009ca285-7ecd-46ba-9b63-c6cfdf37f820\" title=\"c12073b10f6fce55c786abd9e5ce6b09_1595231368_7353.jpg\" alt=\"c12073b10f6fce55c786abd9e5ce6b09_1595231\" style=\"border: none; max-width: 100%;\" class=\"fr-fic fr-dii\"></div></div>', 1, 6, 16, '2020-10-25 23:27:49', '2020-11-08 01:09:32', 'thumb-12g_230x230.jpg', NULL),
(9, '[AHC] Natural Perfection Double Shield Sun Stick 22g', '310000', '/storage/product/1/4ZBFzQRhpKvzcGg6jYTR.jpg', '<div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Sự mi&ecirc;u tả</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Kem chống nắng bảo vệ da khỏi &aacute;nh s&aacute;ng mặt trời v&agrave; sức n&oacute;ng của mặt trời bằng c&aacute;ch bảo vệ da một c&aacute;ch đồng thời khỏi tia UV v&agrave; tia hồng ngoại gần, yếu tố ch&iacute;nh g&acirc;y l&atilde;o h&oacute;a da<br><br>1<br>) Kem&nbsp;chống nắng mạnh mẽ chống lại tia cực t&iacute;m v&agrave; tia hồng ngoại gần&nbsp;2) Phyto Protect Complex, c&ocirc;ng thức tự nhi&ecirc;n độc đ&aacute;o của AHC bảo vệ da khỏi c&aacute;c k&iacute;ch ứng b&ecirc;n ngo&agrave;i<br>3) Sun stick an to&agrave;n để sử dụng cho cả gia đ&igrave;nh</div><div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Đ&ecirc; nghị sử dụng</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Ở bước cuối c&ugrave;ng của quy tr&igrave;nh chăm s&oacute;c da của bạn, xoay n&uacute;t xoay ở đ&aacute;y hộp để nhả 5mm que, sau đ&oacute; thoa nhẹ theo hướng từ mặt trong ra ngo&agrave;i.&nbsp;Mang theo v&agrave; thoa lại bất cứ khi n&agrave;o hoặc bất cứ nơi n&agrave;o cần thiết.</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><div align=\"center\" style=\"word-break: keep-all; text-align: center;\"><img src=\"blob:http://localhost:8080/7f8fc895-ac8d-4474-8964-0dfff1577efc\" title=\"c12073b10f6fce55c786abd9e5ce6b09_1595232202_6357.jpg\" alt=\"c12073b10f6fce55c786abd9e5ce6b09_1595232\" style=\"border: none; max-width: 100%;\" class=\"fr-fic fr-dii\"><br style=\"clear: both;\"></div></div>', 1, 6, 16, '2020-10-25 23:29:07', '2020-11-08 01:11:17', 'thumb-22g_230x230.jpg', NULL),
(10, '[Huxley] Scrub Mask; Sweet Therapy', '110000', '/storage/product/1/qNp3US57kKydz9GiOZd4.png', '<div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Sự mi&ecirc;u tả</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Tẩy tế b&agrave;o chết v&agrave; mặt nạ gi&uacute;p loại bỏ tế b&agrave;o chết v&agrave; tạp chất bằng c&aacute;c th&agrave;nh phần tẩy tế b&agrave;o chết tự nhi&ecirc;n, mang lại l&agrave;n da th&ocirc;ng tho&aacute;ng v&agrave; mịn m&agrave;ng.<br>* Tẩy da chết ho&agrave;n hảo với c&aacute;c th&agrave;nh phần tẩy tế b&agrave;o chết tự nhi&ecirc;n<br>* Hiệu ứng l&agrave;m ấm bằng nhiệt<br>* Hệ thống ma trận gel tan nhanh</div><div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Đ&ecirc; nghị sử dụng</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Massage mặt nạ tẩy tế b&agrave;o chết l&ecirc;n v&ugrave;ng da ướt, ngoại trừ v&ugrave;ng mắt theo chuyển động tr&ograve;n để loại bỏ tế b&agrave;o chết tr&ecirc;n da.<br>Rửa sạch bằng nước ấm.</div><p><img src=\"blob:http://localhost:8080/ea711257-e937-45f1-b9b9-de4d0adc76d1\" title=\"8e3b6f85dceed78aa04936c11068cd41_1496301805_7357.jpg\" alt=\"8e3b6f85dceed78aa04936c11068cd41_1496301\" style=\"border: none; max-width: 100%; color: rgb(50, 50, 50); font-family: Roboto, sans-serif; font-size: 13px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\" class=\"fr-fic fr-dii\"></p>', 1, 16, 15, '2020-10-26 00:13:52', '2020-11-08 01:18:34', 'thumb-HXP05HMask_230x230.png', NULL),
(11, '[Huxley] Kem sáng da', '280000', '/storage/product/1/KuxpbNG5Puir0BB5euAe.png', '<div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Đ&ecirc; nghị sử dụng</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">&Aacute;p dụng mỗi s&aacute;ng v&agrave; tối sau khi thoa tinh chất.</div><div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Th&agrave;nh phần hoạt t&iacute;nh</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Dầu hạt l&ecirc; gai, Niacinamide, Odeetox, Glutachion, Bisabolol, SC-Glucan</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><br></div><div align=\"center\" style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; text-align: center;\"><img src=\"blob:http://localhost:8080/830d8f3d-f9af-4399-abcf-3009c0f81a49\" title=\"2087687165b944cee89e466fff9b8f9a_1495693752_0487.jpg\" alt=\"2087687165b944cee89e466fff9b8f9a_1495693\" style=\"border: none; max-width: 100%;\" class=\"fr-fic fr-dii\"><img src=\"blob:http://localhost:8080/19a9e872-2d09-457f-a976-6f201618100e\" title=\"2087687165b944cee89e466fff9b8f9a_1495693753_5075.jpg\" alt=\"2087687165b944cee89e466fff9b8f9a_1495693\" style=\"border: none; max-width: 100%;\" class=\"fr-fic fr-dii\"><img src=\"blob:http://localhost:8080/bbc9771d-dd0f-4ad4-9502-fc42b926df98\" title=\"2087687165b944cee89e466fff9b8f9a_1495693754_3897.jpg\" alt=\"2087687165b944cee89e466fff9b8f9a_1495693\" style=\"border: none; max-width: 100%;\" class=\"fr-fic fr-dii\"><img src=\"blob:http://localhost:8080/48fa75e1-686a-46f4-990d-473048a76b0e\" title=\"2087687165b944cee89e466fff9b8f9a_1495693754_5486.jpg\" alt=\"2087687165b944cee89e466fff9b8f9a_1495693\" style=\"border: none; max-width: 100%;\" class=\"fr-fic fr-dii\"></div>', 1, 5, 15, '2020-10-26 00:14:17', '2020-11-08 01:21:08', 'thumb-001_230x230.png', NULL),
(12, '[Huxley]Dầu dưỡng chống lão hóa', '590000', '/storage/product/1/d1uOUewwXkkfuqTEQT4E.png', '<div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; height: auto !important;\"><div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Sự mi&ecirc;u tả</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; height: auto !important;\"><p style=\"margin: 0px; padding: 0px; font-family: Roboto, sans-serif; color: rgb(50, 50, 50); font-size: 13px; word-break: keep-all; text-align: left;\">Tinh chất dầu với sự c&acirc;n bằng tối ưu của dầu v&agrave; tinh chất, chứa dầu hạt l&ecirc; gai, tiếp th&ecirc;m sinh lực v&agrave; phục hồi l&agrave;n da.</p><p style=\"margin: 0px; padding: 0px; font-family: Roboto, sans-serif; color: rgb(50, 50, 50); font-size: 13px; word-break: keep-all; text-align: left;\">1. Một loại tinh chất dầu mới được ph&aacute;t triển với c&ocirc;ng thức tối ưu của dầu v&agrave; tinh chất</p><p style=\"margin: 0px; padding: 0px; font-family: Roboto, sans-serif; color: rgb(50, 50, 50); font-size: 13px; word-break: keep-all; text-align: left;\">2. N&oacute; cung cấp cho l&agrave;n da tươi m&aacute;t v&agrave; mịn m&agrave;ng, cảm gi&aacute;c mượt như dầu, nhưng kh&ocirc;ng g&acirc;y nhờn v&agrave; thấm nhanh hơn dầu.</p><p style=\"margin: 0px; padding: 0px; font-family: Roboto, sans-serif; color: rgb(50, 50, 50); font-size: 13px; word-break: keep-all; text-align: left;\">3. N&oacute; giữ cho l&agrave;n da tươi m&aacute;t suốt cả ng&agrave;y d&agrave;i</p><p style=\"margin: 0px; padding: 0px; font-family: Roboto, sans-serif; color: rgb(50, 50, 50); font-size: 13px; word-break: keep-all; text-align: left;\">Tối đa h&oacute;a ưu điểm v&agrave; bổ sung nhược điểm của dầu v&agrave; tinh chất th&ocirc;ng thường</p><p style=\"margin: 0px; padding: 0px; font-family: Roboto, sans-serif; color: rgb(50, 50, 50); font-size: 13px; word-break: keep-all; text-align: left;\">Một loại tinh chất dầu chống oxy h&oacute;a mới gi&uacute;p giữ cho l&agrave;n da tươi m&aacute;t suốt cả ng&agrave;y d&agrave;i, củng cố những ưu điểm v&agrave; bổ sung những nhược điểm của dầu v&agrave; tinh chất hiện c&oacute;, đồng thời được pha chế với sự c&acirc;n bằng tối ưu của dầu v&agrave; tinh chất</p><p style=\"margin: 0px; padding: 0px; font-family: Roboto, sans-serif; color: rgb(50, 50, 50); font-size: 13px; word-break: keep-all; text-align: left;\">Đề nghị cho</p><p style=\"margin: 0px; padding: 0px; font-family: Roboto, sans-serif; color: rgb(50, 50, 50); font-size: 13px; word-break: keep-all; text-align: left;\">Những người t&igrave;m kiếm một sản phẩm nhẹ trước khi trang điểm</p><p style=\"margin: 0px; padding: 0px; font-family: Roboto, sans-serif; color: rgb(50, 50, 50); font-size: 13px; word-break: keep-all; text-align: left;\">Những người muốn l&agrave;n da tr&ocirc;ng đầy sức sống suốt cả ng&agrave;y d&agrave;i</p><p style=\"margin: 0px; padding: 0px; font-family: Roboto, sans-serif; color: rgb(50, 50, 50); font-size: 13px; word-break: keep-all; text-align: left;\">Những người sợ c&aacute;c loại dầu nặng tr&ecirc;n khu&ocirc;n mặt với kết cấu nhờn</p></div></div><div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Đ&ecirc; nghị sử dụng</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><p style=\"margin: 0px; padding: 0px; font-family: Roboto, sans-serif; color: rgb(50, 50, 50); font-size: 13px; word-break: keep-all; text-align: left;\">Sau khi sử dụng toner, lấy một lượng vừa đủ thoa đều khắp mặt v&agrave; d&ugrave;ng tay ấn nhẹ v&agrave;o da cho đến khi hấp thụ.</p></div><div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Th&agrave;nh phần</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><p style=\"margin: 0px; padding: 0px; font-family: Roboto, sans-serif; color: rgb(50, 50, 50); font-size: 13px; word-break: keep-all; text-align: left;\">* N&oacute; được giới hạn trong c&aacute;c thuộc t&iacute;nh của c&aacute;c th&agrave;nh phần.</p><p style=\"margin: 0px; padding: 0px; font-family: Roboto, sans-serif; color: rgb(50, 50, 50); font-size: 13px; word-break: keep-all; text-align: left;\">01. YERBA MATE LEAF Chống oxy h&oacute;a, tăng cường khả năng miễn dịch</p><p style=\"margin: 0px; padding: 0px; font-family: Roboto, sans-serif; color: rgb(50, 50, 50); font-size: 13px; word-break: keep-all; text-align: left;\">02. ACAI BERRY chống oxy h&oacute;a, tăng cường khả năng miễn dịch</p><p style=\"margin: 0px; padding: 0px; font-family: Roboto, sans-serif; color: rgb(50, 50, 50); font-size: 13px; word-break: keep-all; text-align: left;\">03. CAMU CAMU Chất chống oxy h&oacute;a</p><p style=\"margin: 0px; padding: 0px; font-family: Roboto, sans-serif; color: rgb(50, 50, 50); font-size: 13px; word-break: keep-all; text-align: left;\">04. Cung cấp dưỡng chất, bổ sung dưỡng chất QUINOA</p><p style=\"margin: 0px; padding: 0px; font-family: Roboto, sans-serif; color: rgb(50, 50, 50); font-size: 13px; word-break: keep-all; text-align: left;\">&nbsp;</p><p style=\"margin: 0px; padding: 0px; font-family: Roboto, sans-serif; color: rgb(50, 50, 50); font-size: 13px; word-break: keep-all; text-align: left;\"><img src=\"blob:http://localhost:8080/2810ed25-4a1a-4a3f-8bf0-f98f7a6f4981\" title=\"24b6666a27f27216e2f03195a17a6170_1489128127_3894.png\" alt=\"24b6666a27f27216e2f03195a17a6170_1489128\" style=\"border: none; max-width: 100%;\" class=\"fr-fic fr-dii\">&nbsp;</p></div>', 1, 4, 15, '2020-10-26 00:28:26', '2020-11-08 01:27:20', 'thumb-1489127415_timedeal_1604556719_230x230.png', NULL),
(13, '[Huxley] Bộ ba dưỡng ẩm (Toner Extract it 120ml + Essence Grab Water + Cream Fresh và nhiều hơn nữa)', '100000000', '/storage/product/1/QzBaO0zIo7LoPAvkMxsh.jpg', '<p><br><img src=\"blob:http://localhost:8080/28b4c495-0c0a-4a99-a9b2-747fcb576d02\" title=\"c634263f697e4319ffbb8779f0fb116a_1501467096_454.jpg\" alt=\"c634263f697e4319ffbb8779f0fb116a_1501467\" style=\"border: none; max-width: 100%; color: rgb(50, 50, 50); font-family: Roboto, sans-serif; font-size: 13px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\" class=\"fr-fic fr-dii\"> </p>', 1, 17, 15, '2020-10-26 00:29:20', '2020-11-08 01:31:43', 'thumb-6re466a8_230x230.jpg', NULL),
(14, '[Huxley] Nước tẩy trang; Sạch sẽ, Giữ ẩm', '210000', '/storage/product/1/lkqUiWLJawZPUIIiZVWx.jpg', '<div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Sự mi&ecirc;u tả</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Nước l&agrave;m sạch dưỡng ẩm s&acirc;u, được l&agrave;m gi&agrave;u với chiết xuất từ c&acirc;y xương rồng, gi&uacute;p loại bỏ hiệu quả c&aacute;c chất độc hại v&agrave; lớp trang điểm m&agrave; kh&ocirc;ng g&acirc;y k&iacute;ch ứng m&agrave; vẫn giữ được độ ẩm cho da.<br>* Nước tẩy trang được l&agrave;m gi&agrave;u với chiết xuất từ c&acirc;y xương rồng thay cho nước<br>* Tẩy tế b&agrave;o chết v&agrave;<br>l&agrave;m sạch da<br>* Nước tẩy rửa&nbsp;&iacute;t g&acirc;y k&iacute;ch ứng ph&ugrave; hợp với mọi loại da&nbsp;* Sữa rửa mặt dưỡng ẩm giữ lại độ ẩm</div><div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Đ&ecirc; nghị sử dụng</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Nh&uacute;ng một miếng b&ocirc;ng với nước tẩy trang v&agrave; nhẹ nh&agrave;ng lau sạch theo cấu tr&uacute;c da.<br>Lặp lại n&oacute; cho đến khi kh&ocirc;ng thấy cặn trang điểm tr&ecirc;n miếng b&ocirc;ng v&agrave; sau đ&oacute; vỗ nhẹ l&ecirc;n da.</div><p><img src=\"blob:http://localhost:8080/51a74c75-6822-4e53-8e6f-cbf098061e48\" title=\"8e3b6f85dceed78aa04936c11068cd41_1496300799_2083.jpg\" alt=\"8e3b6f85dceed78aa04936c11068cd41_1496300\" style=\"border: none; max-width: 100%; color: rgb(50, 50, 50); font-family: Roboto, sans-serif; font-size: 13px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\" class=\"fr-fic fr-dii\"></p>', 1, 15, 15, '2020-10-26 00:30:19', '2020-11-08 01:35:13', 'thumb-HXC04W_230x230.jpg', NULL),
(15, '[Huxley] Phấn nước cấp ẩm', '256000', '/storage/product/1/YavwEm47Me3fw0SP4ylA.jpg', '<div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Đ&ecirc; nghị sử dụng</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Nhấn b&ocirc;ng phấn v&agrave;o miếng bọt biển đ&atilde; được l&agrave;m ẩm để tiết ra lớp trang điểm lỏng.<br>Thoa đều khắp mặt, bắt đầu từ giữa khu&ocirc;n mặt, thoa đều về ph&iacute;a ch&acirc;n t&oacute;c.<br>Chỉnh sửa suốt cả ng&agrave;y nếu cần.</div><div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Th&agrave;nh phần</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><span style=\"margin: 0px; padding: 0px; font-family: Roboto, sans-serif; color: rgb(50, 50, 50); font-size: 7pt;\">Xương rồng Nopal STEM TR&Iacute;CH, NƯỚC, Titanium Dioxide (CI 77.891), Cyclopentasiloxane, ETHYLHEXYL methoxycinnamate, DIPHENYLSILOXY phenyl TRIMETHICONE, DIPROPYLENE GLYCOL, ETHYLHEXYL salicylat, CYCLOHEXASILOXANE, butylen glycol DICAPRYLATE / DICAPRATE, lauryl PEG-10 Tris (TRIMETHYLSILOXY) SILYLETHYL DIMETHICONE, METHYL TRIMETHICONE, DIMETHICONE, 1,2-HEXANEDIOL, MICA (CI 77019), IRON OXIDES (CI 77492), CENTELLA ASIATICA EXTRACT, CHAMOMILLA RECUTITA (MATRICARIA) CHIẾT XUẤT HOA, OPUNTIA FICUS-INDICA SEED OIL, DẦU HẠT BẰNG HỒNG NGOẠI 10 Dimethicone, DISTEARDIMONIUM HECTORITE, magnesium sulfate, ISODODECANE, METHYL METHACRYLATE CROSSPOLYMER, stearic Acid, nh&ocirc;m, acrylates / POLYTRIMETHYLSILOXYMETHACRYLATE copolymer, DIMETHICONE / VINYL DIMETHICONE CROSSPOLYMER, TRIETHOXYCAPRYLYLSILANE, hydroxit nh&ocirc;m, butylen glycol, ETHYLHEXYLGLYCERIN,GLYCERYL CAPRYLATE, CASSIA ANGUSTIFOLIA SEED POLYSACCHARIDE, TOCOPHEROL, DISODIUM EDTA, PHENOXYETHANOL, FRAGRANCE (PARFUM), IRON OXIDES (CI 77491), IRON OXIDES (CI 77499)</span><div align=\"center\" style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; text-align: center;\"><br><img src=\"blob:http://localhost:8080/56f685ef-4c73-40ad-9e18-5cd9ebbf0cb2\" title=\"40ab7d449e7d21b7d232e9f497692eb7_1571985258_5563.jpg\" alt=\"item0_1578019704.jpg\" style=\"border: none; max-width: 100%;\" class=\"fr-fic fr-dii\"><br style=\"clear: both;\"><img src=\"blob:http://localhost:8080/5da87fd8-3fc2-4c10-8696-7ccef0ba3e97\" title=\"3ffc796205b461cb3b9d9c67b8f28938_1528438500_1497.jpg\" alt=\"item1_1578019704.jpg\" style=\"border: none; max-width: 100%;\" class=\"fr-fic fr-dii\"><img src=\"blob:http://localhost:8080/9c54566a-1ac7-4c5e-83b7-2ab8a1f5cc3d\" title=\"3ffc796205b461cb3b9d9c67b8f28938_1528438500_1956.jpg\" alt=\"item2_1578019704.jpg\" style=\"border: none; max-width: 100%;\" class=\"fr-fic fr-dii\"></div></div>', 1, 19, 15, '2020-10-26 00:34:17', '2020-11-08 01:43:07', 'thumb-7Lg7IWY_230x230.jpg', NULL);
INSERT INTO `products` (`id`, `name`, `price`, `feature_image`, `content`, `user_id`, `category_id`, `brand_id`, `created_at`, `updated_at`, `image_name`, `deleted_at`) VALUES
(17, '[Huxley] Phấn nước cấp ẩm', '360000', '/storage/product/1/jxoECRg7tfg3We4laqM1.jpg', '<div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Sự mi&ecirc;u tả</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; height: auto !important;\">Một lớp đệm nhẹ, dưỡng ẩm với độ che phủ c&oacute; thể x&acirc;y dựng, b&aacute;m d&iacute;nh ho&agrave;n hảo tr&ecirc;n da.<br><br><strong>1.<br></strong>Dưỡng ẩm cho <strong>da đồng thời mang lại lớp nền mờ</strong> C&aacute;c polyme ph&ugrave; hợp với da tạo th&agrave;nh một lớp bảo vệ mỏng gi&uacute;p da ngậm nước m&agrave; kh&ocirc;ng g&acirc;y bết d&iacute;nh để c&oacute; được lớp trang điểm mịn m&agrave;ng k&eacute;o d&agrave;i suốt 24 giờ.<br><strong>2. Kết cấu ngậm nước tăng cường mang lại hiệu quả l&agrave;m m&aacute;t tức th&igrave;<br></strong>Dầu hạt xương rồng v&agrave; nước xương rồng được pha chế th&agrave;nh kết cấu dưỡng ẩm n&acirc;ng cao giữ cho da ngậm nước v&agrave; l&agrave;m dịu da ngay lập tức khi thoa.<br><strong>3. Che phủ mỏng nhẹ, mịn m&agrave;ng<br></strong>Hệ thống mạng lưới gel silicone được tạo ra th&ocirc;ng qua c&ocirc;ng nghệ độc quyền gi&uacute;p sản phẩm b&aacute;m đều tr&ecirc;n da đồng thời mang lại độ che phủ ho&agrave;n hảo tr&ecirc;n c&aacute;c khuyết điểm.</div><div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Đ&ecirc; nghị sử dụng</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Nhấn b&ocirc;ng phấn v&agrave;o miếng bọt biển đ&atilde; được l&agrave;m ẩm để tiết ra lớp trang điểm lỏng.<br>Thoa đều khắp mặt, bắt đầu từ giữa khu&ocirc;n mặt, thoa đều về ph&iacute;a ch&acirc;n t&oacute;c.<br>Chỉnh sửa suốt cả ng&agrave;y nếu cần.</div>', 1, 19, 15, '2020-10-26 00:47:28', '2020-11-08 01:45:31', 'thumb-66qo7J207Iqk7Yq4s_230x230.jpg', NULL),
(18, '[Huxley] Dầu tẩy trang; Làm sạch sâu, cấp ẩm sâu 200ml', '200000', '/storage/product/1/HauSY0xSscmJDxsVgzEO.jpg', '<div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Sự mi&ecirc;u tả</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Với c&ocirc;ng thức từ dầu hạt l&ecirc; gai, loại dầu tẩy trang nhẹ n&agrave;y nhẹ nh&agrave;ng h&ograve;a tan lớp trang điểm v&agrave; loại bỏ tạp chất đồng thời mang lại l&agrave;n da sạch sẽ v&agrave; mềm mượt m&agrave; kh&ocirc;ng c&oacute; cặn nặng.</div><div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Đ&ecirc; nghị sử dụng</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">D&ugrave;ng tay kh&ocirc; thoa một lượng dầu tẩy trang vừa đủ l&ecirc;n mặt. Nhẹ nh&agrave;ng massage theo chuyển động tr&ograve;n khắp mặt để l&agrave;m tan lớp trang điểm v&agrave; tạp chất. Th&ecirc;m một ch&uacute;t nước v&agrave; massage cho đến khi dầu chuyển h&oacute;a th&agrave;nh sữa rửa mặt ho&agrave;n to&agrave;n. Rửa sạch với nước ấm.</div>', 1, 15, 15, '2020-10-26 01:51:47', '2020-11-08 01:49:02', 'thumb-44WB_230x230.jpg', NULL),
(19, '[Peripera] Ink Airy Velvet (AD)', '75000', '/storage/product/1/DFa34eEOXMYwN2rmwHZj.jpg', '<div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Sự mi&ecirc;u tả</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">S&aacute;ng l&ecirc;n!&nbsp;Kết d&iacute;nh l&ecirc;n!&nbsp;Kh&ocirc;ng c&oacute; da chết tr&ecirc;n m&ocirc;i v&agrave; lưu lại l&acirc;u tr&ecirc;n m&ocirc;i!&nbsp;Son tint n&agrave;y kh&ocirc;ng l&agrave;m kh&ocirc; m&ocirc;i của bạn v&agrave; c&oacute; t&iacute;nh nhất qu&aacute;n b&aacute;n l&igrave;.</div><div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Đ&ecirc; nghị sử dụng</div><div align=\"left\" style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; text-align: left;\">Thoa từ trong ra ngo&agrave;i của m&ocirc;i v&agrave; t&aacute;n ra ngo&agrave;i để c&oacute; được m&agrave;u gradient.</div>', 1, 21, 14, '2020-10-26 02:08:55', '2020-11-08 01:56:04', 'thumb-sale_230x230.jpg', NULL),
(20, '[Peripera] Ink The Gelato (3 màu)', '75000', '/storage/product/1/Wa2WozyuCUCXTafZBN3n.jpg', '<div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Sự mi&ecirc;u tả</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Kết cấu gelato mềm mại v&agrave; thoa đều cho đ&ocirc;i m&ocirc;i HO&Agrave;N HẢO<br>1. Thoa nhẹ nh&agrave;ng như gelato để lại chỉ để lại một mảng m&agrave;u sống động!<br>2. Son tint dạng nước + sơn m&agrave;i<br>Water Tint: Kết cấu nhẹ để dễ trang điểm / Che khuyết điểm, m&ocirc;i nứt nẻ<br>Lacquer Tint: Kh&ocirc;ng bết d&iacute;nh, tạo lớp sương cho lớp nền ho&agrave;n hảo l&acirc;u d&agrave;i<br>3.&nbsp;Độ b&aacute;m ho&agrave;n&nbsp;hảo nhờ &quot;Hệ thống cấu h&igrave;nh song song&quot;</div><div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Đ&ecirc; nghị sử dụng</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Lấy một lượng vừa đủ thoa l&ecirc;n m&ocirc;i</div><div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Th&agrave;nh phần hoạt t&iacute;nh</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Dimethicone, Nước tinh khiết, Dimethicone / vinyl dimethicone crosspolymer, Cyclopentasiloxane, Glyceryn, Methyl trimethicone, Butylene glycol, Cetyl PEG / PPG-10/1 dimethicone, Pentylene glycol, Polyglyceryl-2 triisostearate, Yellow No.5, Phenoxyethanol, Red No.104 (1), Glyceryl acrylate / acrylic acid copolymer, Dimethicone crosspolymer, Caprylyl glycol, 1,2-hexanediol, Propanediol, Ethylhexylglycerin, Vipi / methacrylamide / vinylimidazol polymer, Red No 227, Silica dimethy silyramlate, Fennel extract, Mango Seed Butter Np, Chiết xuất t&aacute;o, Tocopherol, Phenylpropanol</div>', 1, 21, 14, '2020-10-26 02:28:00', '2020-11-08 01:57:58', 'thumb-00_PeriPCM29Gelato_230x230.jpg', NULL),
(21, '[Peripera] Ink Matte Blur Tint', '200000', '/storage/product/1/BVd92kdAP0uK8nBuJiOi.jpg', '<div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Sự mi&ecirc;u tả</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Son m&agrave;u mềm c&oacute; kết cấu mờ v&agrave; tạo ra đ&ocirc;i m&ocirc;i ombre ho&agrave;n hảo!&nbsp;L&agrave;m mờ ho&agrave;n hảo v&agrave; lướt nhẹ tr&ecirc;n m&ocirc;i với khả năng trả m&agrave;u đ&aacute;ng kinh ngạc chỉ trong một lần thoa!</div><div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Đ&ecirc; nghị sử dụng</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Sử dụng dụng cụ để thoa sản phẩm l&ecirc;n ph&iacute;a b&ecirc;n trong của m&ocirc;i. Sử dụng cọ hoặc b&ocirc;ng m&uacute;t để từ từ t&aacute;n đều sản phẩm ra ngo&agrave;i để tạo th&agrave;nh m&ocirc;i c&oacute; m&agrave;u gradient.</div>', 1, 21, 14, '2020-10-26 02:30:44', '2020-11-08 01:59:25', 'thumb-inkmatterblur64iE64G8_230x230.jpg', NULL),
(22, '[Peripera] Double Longwear Cover Foundation 35ml', '200000', '/storage/product/1/LTSUy50rICRQN4suPgTf.jpg', '<div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Sự mi&ecirc;u tả</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">- L&acirc;u tr&ocirc;i m&agrave; kh&ocirc;ng bị tr&ocirc;i v&igrave; lớp nền đ&atilde; được cố định hai lần với hệ thống cố định hai lớp -<br>Kem nền dạng l&igrave; gi&uacute;p ho&agrave;n thiện lớp trang điểm mỏng với phấn phủ micro wear<br><br># 01 Pure Ivory: M&agrave;u trung t&iacute;nh<br># 02 Natural Beige: M&agrave;u be s&aacute;ng mượt<br># 03 Classic Sand: Một t&ocirc;ng m&agrave;u be trung b&igrave;nh<br><br></div><div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Đ&ecirc; nghị sử dụng</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Thoa một lượng th&iacute;ch hợp l&ecirc;n to&agrave;n bộ khu&ocirc;n mặt v&agrave; thoa đều.</div>', 1, 19, 14, '2020-11-01 05:18:39', '2020-11-08 02:01:05', 'thumb-7Y6Y66as7Y6Y65287YyM642w_230x230.jpg', NULL),
(23, '[Peripera] Double Longwear Cover Cushion', '200000', '/storage/product/1/5Udi1VLSJ2AAN1Q5CRdo.jpg', '<div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Sự mi&ecirc;u tả</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">-D&ograve;ng Double Long Wear Cover c&oacute; khả năng b&aacute;m d&iacute;nh kh&ocirc;ng ngừng v&agrave; chuy&ecirc;n s&acirc;u, kh&ocirc;ng bong tr&oacute;c cũng như che phủ ho&agrave;n hảo -<br>L&acirc;u tr&ocirc;i m&agrave; kh&ocirc;ng bị tr&ocirc;i v&igrave; lớp nền đ&atilde; được cố định hai lần với hệ thống cố định hai lớp - Lớp<br>đệm n&agrave;y gi&uacute;p mọi l&agrave;n da tr&ocirc;ng mỏng m&agrave; kh&ocirc;ng bị ngột ngạt bất kể da n&agrave;o. kết cấu v&igrave; độ ẩm của n&oacute; thấm v&agrave;o da nhanh ch&oacute;ng như đang được nhuộm<br><br># 01 Pure Ivory: No.17 &amp; no.&nbsp;21 t&ocirc;ng da s&aacute;ng M&agrave;u trắng ng&agrave; trung t&iacute;nh tạo l&agrave;n da hồng h&agrave;o<br># 02 Natural Beige: t&ocirc;ng m&agrave;u da số 21 đến 22 M&agrave;u be tự nhi&ecirc;n tươi s&aacute;ng để che c&aacute;c t&ocirc;ng da trung b&igrave;nh</div><div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Đ&ecirc; nghị sử dụng</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Cho một lượng vừa đủ sản phẩm l&ecirc;n b&ocirc;ng phấn v&agrave; thoa đều khắp mặt</div>', 1, 19, 14, '2020-11-08 02:02:45', '2020-11-08 02:02:45', NULL, NULL),
(24, '[Peripera] Ink V Highlighter', '100000', '/storage/product/1/BSn3jTddGZbStW2lpUPI.jpg', '<div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Sự mi&ecirc;u tả</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">-Một b&uacute;t đ&aacute;nh s&aacute;ng tạo chiều s&acirc;u v&agrave; k&iacute;ch thước cho một điểm nhấn tinh tế, tr&ocirc;ng tự nhi&ecirc;n.<br>-Chứa c&aacute;c hạt mịn để lướt nhẹ nh&agrave;ng tr&ecirc;n khu&ocirc;n mặt của bạn.<br>-C&oacute; hiệu ứng trong suốt v&agrave; lấp l&aacute;nh tuyệt vời tạo ra lớp ho&agrave;n thiện như ngọc trai</div><div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Đ&ecirc; nghị sử dụng</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Thoa một lượng phấn highlighter vừa phải l&ecirc;n những v&ugrave;ng da mong muốn v&agrave; vỗ nhẹ.</div>', 1, 19, 14, '2020-11-08 02:04:41', '2020-11-08 02:04:41', NULL, NULL),
(25, '[Peripera] Ink Color Cara (AD)', '72000', '/storage/product/1/jBeezm3HpQybrm61jQ50.jpg', '<div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Sự mi&ecirc;u tả</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">-Cung cấp c&aacute;c lọn t&oacute;c xoăn chắc khỏe v&agrave; l&acirc;u d&agrave;i -<br>Chải mi bằng lược chải cong</div><div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Đ&ecirc; nghị sử dụng</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Uốn mi bằng dụng cụ uốn mi, lấy lượng vừa đủ thoa l&ecirc;n b&agrave;n chải rồi thoa l&ecirc;n mi.</div>', 1, 20, 14, '2020-11-08 02:06:01', '2020-11-08 02:06:01', NULL, NULL),
(26, '[Peripera] Sugar Twinkle Liquid long lanh', '43000', '/storage/product/1/1ZeOS4zBjCuBgOSgnxjb.jpg', '<div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Sự mi&ecirc;u tả</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">- Tăng độ s&aacute;ng v&agrave; b&oacute;ng cho lớp trang điểm mắt của bạn m&agrave; kh&ocirc;ng bị<br>lem - C&oacute; thể được sử dụng tr&ecirc;n m&iacute; mắt, m&oacute;ng tay v&agrave; thậm ch&iacute; cả m&ocirc;i -<br>C&oacute; đầu cọ mảnh để sử dụng ch&iacute;nh x&aacute;c</div><div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Đ&ecirc; nghị sử dụng</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Chấm đầu m&uacute;t l&ecirc;n m&iacute; mắt, sau đ&oacute; t&aacute;n đều để thoa.</div>', 1, 20, 14, '2020-11-08 02:07:37', '2020-11-08 02:07:37', NULL, NULL),
(28, '[Peripera] All Take Mood Palette', '220000', '/storage/product/1/Q2mCxiS7eTW04isd4Um6.jpg', '<div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Sự mi&ecirc;u tả</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">C&oacute; 8 sắc th&aacute;i linh hoạt của c&aacute;c lớp ho&agrave;n thiện kh&aacute;c nhau để ho&agrave;n thiện vẻ ngo&agrave;i của bạn với một bảng m&agrave;u duy nhất.<br>Một bảng m&agrave;u tốt để sử dụng h&agrave;ng ng&agrave;y.<br>N&oacute; c&oacute; sẵn cho One-Take-Eye-MakeUp!</div><div style=\'word-break: keep-all; font-weight: bold; font-size: 16pt; line-height: 18pt; color: rgb(0, 0, 0); margin: 0px 20px 10px; font-family: -webkit-pictograph, \"Playfair Display\", serif; padding: 0px 0px 5px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\'>Đ&ecirc; nghị sử dụng</div><div style=\"word-break: keep-all; font-size: 10pt; margin: 0px 20px 30px 0px; padding: 0px 20px 20px; line-height: 17pt; font-family: arial; color: rgb(50, 50, 50); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Lấy một lượng th&iacute;ch hợp thoa nhẹ l&ecirc;n v&ugrave;ng da mong muốn bằng b&agrave;n chải hoặc ng&oacute;n tay ..</div>', 1, 20, 14, '2020-11-08 02:09:49', '2020-11-08 02:09:49', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `image`, `product_id`, `created_at`, `updated_at`, `image_name`) VALUES
(7, '/storage/product/1/CoZlf4XoYAhXoYKRyJ14.png', 9, '2020-10-25 23:29:08', '2020-10-25 23:29:08', 'Screenshot (176) - Copy.png'),
(8, '/storage/product/1/CoZlf4XoYAhXoYKRyJ14.png', 9, '2020-10-25 23:29:08', '2020-10-25 23:29:08', 'Screenshot (176) - Copy.png'),
(9, '/storage/product/1/RNWTGb2vcQhJKFIKyZR9.png', 9, '2020-10-25 23:29:08', '2020-10-25 23:29:08', 'Screenshot (176).png'),
(10, '/storage/product/1/RNWTGb2vcQhJKFIKyZR9.png', 9, '2020-10-25 23:29:08', '2020-10-25 23:29:08', 'Screenshot (176).png'),
(11, '/storage/product/1/EyKpMWCKW7ZTEbimXAsR.png', 9, '2020-10-25 23:29:08', '2020-10-25 23:29:08', 'Screenshot (177) - Copy.png'),
(12, '/storage/product/1/EyKpMWCKW7ZTEbimXAsR.png', 9, '2020-10-25 23:29:08', '2020-10-25 23:29:08', 'Screenshot (177) - Copy.png'),
(21, '/storage/product/1/XTxWadpNGrUitFNPpq7x.png', 15, '2020-10-26 00:34:17', '2020-10-26 00:34:17', 'Screenshot (177) - Copy.png'),
(22, '/storage/product/1/XTxWadpNGrUitFNPpq7x.png', 15, '2020-10-26 00:34:17', '2020-10-26 00:34:17', 'Screenshot (177) - Copy.png'),
(53, '/storage/product/1/DOBRCmMn6PX40He4m81e.png', 1, '2020-10-31 03:06:34', '2020-10-31 03:06:34', 'Screenshot (176) - Copy - Copy.png'),
(54, '/storage/product/1/DOBRCmMn6PX40He4m81e.png', 1, '2020-10-31 03:06:34', '2020-10-31 03:06:34', 'Screenshot (176) - Copy - Copy.png'),
(55, '/storage/product/1/Y6A5eYlTnQ3ePLSFozaZ.png', 1, '2020-10-31 03:06:34', '2020-10-31 03:06:34', 'Screenshot (176) - Copy.png'),
(56, '/storage/product/1/Y6A5eYlTnQ3ePLSFozaZ.png', 1, '2020-10-31 03:06:34', '2020-10-31 03:06:34', 'Screenshot (176) - Copy.png'),
(57, '/storage/product/1/4nqsonyoHSK5GI75X6m5.png', 1, '2020-10-31 03:06:34', '2020-10-31 03:06:34', 'Screenshot (176).png'),
(58, '/storage/product/1/4nqsonyoHSK5GI75X6m5.png', 1, '2020-10-31 03:06:34', '2020-10-31 03:06:34', 'Screenshot (176).png'),
(66, '/storage/product/1/IfYfEu8JwnKfejJrJtBu.jpg', 4, '2020-11-08 00:51:50', '2020-11-08 00:51:50', '1601088380_1.jpg'),
(67, '/storage/product/1/eiwm2alSrEiYjCBwDclc.jpg', 4, '2020-11-08 00:51:50', '2020-11-08 00:51:50', '1602702442_1.jpg'),
(68, '/storage/product/1/9XzEItOlckH6AlK9ODKh.jpg', 4, '2020-11-08 00:51:50', '2020-11-08 00:51:50', '1592238127_1.jpg'),
(69, '/storage/product/1/yuOXqMkUZRjmiM68BDuL.jpg', 4, '2020-11-08 00:51:50', '2020-11-08 00:51:50', '1600686273_1.jpg'),
(70, '/storage/product/1/YeDVL7wqjAyp7kOvjvj3.jpg', 6, '2020-11-08 01:02:29', '2020-11-08 01:02:29', 'thumb-dddddddddd_230x230.jpg'),
(71, '/storage/product/1/hDKWRp5YfM5VKAoes6x7.jpg', 7, '2020-11-08 01:05:39', '2020-11-08 01:05:39', 'thumb-main_230x230.jpg'),
(72, '/storage/product/1/nd8zz4HMKIhTJz1Uj3lD.jpg', 8, '2020-11-08 01:09:32', '2020-11-08 01:09:32', '1603852047_1.jpg'),
(73, '/storage/product/1/sEhSCCBQMLdHlGP6WxNW.jpg', 8, '2020-11-08 01:09:32', '2020-11-08 01:09:32', '1600364555_1.jpg'),
(74, '/storage/product/1/53E8hxQUUIYYvkAXv1rw.jpg', 8, '2020-11-08 01:09:32', '2020-11-08 01:09:32', '1597645761_1.jpg'),
(75, '/storage/product/1/B3G0sbit81gewxWGVnRd.jpg', 10, '2020-11-08 01:18:34', '2020-11-08 01:18:34', '1603263965_1.jpg'),
(76, '/storage/product/1/emhDfNTNhH3G2uVifLuJ.jpg', 10, '2020-11-08 01:18:34', '2020-11-08 01:18:34', '1598952230_1.jpg'),
(77, '/storage/product/1/h889B3AW0zD98hOTjkpc.jpeg', 10, '2020-11-08 01:18:34', '2020-11-08 01:18:34', '1586324933_1.jpeg'),
(78, '/storage/product/1/cL39OXynikJK1Tbj34Ko.jpg', 10, '2020-11-08 01:18:34', '2020-11-08 01:18:34', '1541431276_1.jpg'),
(79, '/storage/product/1/UILDAjayJdAHVwt0tWC5.jpg', 10, '2020-11-08 01:18:34', '2020-11-08 01:18:34', '1545579785_1.jpg'),
(80, '/storage/product/1/ZWfkGYtyPIY4lmqMFfyY.jpeg', 11, '2020-11-08 01:21:08', '2020-11-08 01:21:08', '1594890438_1.jpeg'),
(81, '/storage/product/1/SDbFcr9MU7iUDKgxKlmR.jpeg', 11, '2020-11-08 01:21:08', '2020-11-08 01:21:08', '1541670389_1.jpeg'),
(82, '/storage/product/1/zKeRaKrwAO71KJvaWJBs.jpeg', 11, '2020-11-08 01:21:08', '2020-11-08 01:21:08', '1530610878_1.jpeg'),
(83, '/storage/product/1/yDvyGHH8Qy7O00996oQv.jpg', 11, '2020-11-08 01:21:08', '2020-11-08 01:21:08', '1522342332_1.jpg'),
(84, '/storage/product/1/5XCMhXOhZdwk1ieUcsTR.jpg', 13, '2020-11-08 01:31:43', '2020-11-08 01:31:43', 'thumb-6re466a8_230x230.jpg'),
(85, '/storage/product/1/gRO9eSkhp0B7kuAQPK5s.jpg', 14, '2020-11-08 01:35:13', '2020-11-08 01:35:13', '1596290021_1.jpg'),
(86, '/storage/product/1/lUli5RMPcfX2IPuaBn23.jpeg', 14, '2020-11-08 01:35:13', '2020-11-08 01:35:13', '1599097087_1.jpeg'),
(87, '/storage/product/1/0GDApXV7QlmizgKdrsER.jpg', 14, '2020-11-08 01:35:13', '2020-11-08 01:35:13', '1544767231_1.jpg'),
(88, '/storage/product/1/ccri7TErt23j7eFoUPsD.jpg', 14, '2020-11-08 01:35:13', '2020-11-08 01:35:13', '1587562424_1.jpg'),
(89, '/storage/product/1/BPAgtEdk0RKvvRaL3f0G.jpg', 17, '2020-11-08 01:45:31', '2020-11-08 01:45:31', 'thumb-66qo7J207Iqk7Yq4s_230x230.jpg'),
(90, '/storage/product/1/SHsMvHRJtVJUR384tXDY.jpeg', 18, '2020-11-08 01:49:02', '2020-11-08 01:49:02', '1583741870_1.jpeg'),
(91, '/storage/product/1/yTdbwbkGZwqVfPIdVUbP.png', 18, '2020-11-08 01:49:02', '2020-11-08 01:49:02', '1542899558_1.png'),
(92, '/storage/product/1/h8yYdkzhDRDhNepq0Ptf.jpg', 19, '2020-11-08 01:56:04', '2020-11-08 01:56:04', 'thumb-sale_230x230.jpg'),
(93, '/storage/product/1/fbvEGhPeppQA1HtsjBza.jpg', 20, '2020-11-08 01:57:58', '2020-11-08 01:57:58', 'thumb-00_PeriPCM29Gelato_230x230.jpg'),
(94, '/storage/product/1/Td7v6zzfGU4y3tQZF4yh.jpg', 21, '2020-11-08 01:59:25', '2020-11-08 01:59:25', 'thumb-inkmatterblur64iE64G8_230x230.jpg'),
(95, '/storage/product/1/Hg2vB5BKYSacwOyePbJf.jpg', 22, '2020-11-08 02:01:05', '2020-11-08 02:01:05', 'thumb-7Y6Y66as7Y6Y65287YyM642w_230x230.jpg'),
(96, '/storage/product/1/CpDEgerLsDYgXEO7QdbQ.jpg', 23, '2020-11-08 02:02:45', '2020-11-08 02:02:45', 'thumb-7Y6Y66as7Y6Y65287Lg7IWY_230x230.jpg'),
(97, '/storage/product/1/CpDEgerLsDYgXEO7QdbQ.jpg', 23, '2020-11-08 02:02:45', '2020-11-08 02:02:45', 'thumb-7Y6Y66as7Y6Y65287Lg7IWY_230x230.jpg'),
(98, '/storage/product/1/IIMqYPn8GBlxyTtnlAA1.jpg', 24, '2020-11-08 02:04:41', '2020-11-08 02:04:41', 'thumb-7ZWY7J2065287J207YSw_230x230.jpg'),
(99, '/storage/product/1/IIMqYPn8GBlxyTtnlAA1.jpg', 24, '2020-11-08 02:04:41', '2020-11-08 02:04:41', 'thumb-7ZWY7J2065287J207YSw_230x230.jpg'),
(100, '/storage/product/1/D0Irv3k9or66OdNGaRAp.jpg', 25, '2020-11-08 02:06:01', '2020-11-08 02:06:01', 'thumb-7J6J7YGs7Lus65s7Lm06528_230x230.jpg'),
(101, '/storage/product/1/D0Irv3k9or66OdNGaRAp.jpg', 25, '2020-11-08 02:06:01', '2020-11-08 02:06:01', 'thumb-7J6J7YGs7Lus65s7Lm06528_230x230.jpg'),
(102, '/storage/product/1/amijluw6t1guqqaxyg3g.jpg', 26, '2020-11-08 02:07:37', '2020-11-08 02:07:37', 'thumb-7Yq47JyZ7YG0_230x230.jpg'),
(103, '/storage/product/1/amijluw6t1guqqaxyg3g.jpg', 26, '2020-11-08 02:07:37', '2020-11-08 02:07:37', 'thumb-7Yq47JyZ7YG0_230x230.jpg'),
(106, '/storage/product/1/QNMe7tqDwMddRitMJgQD.jpg', 28, '2020-11-08 02:09:49', '2020-11-08 02:09:49', 'thumb-7Y6Y66as7Y6Y65281_230x230.jpg'),
(107, '/storage/product/1/QNMe7tqDwMddRitMJgQD.jpg', 28, '2020-11-08 02:09:49', '2020-11-08 02:09:49', 'thumb-7Y6Y66as7Y6Y65281_230x230.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_tags`
--

CREATE TABLE `product_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_tags`
--

INSERT INTO `product_tags` (`id`, `product_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(0, 11, 1, '2020-10-26 00:14:18', '2020-10-26 00:14:18'),
(2, 11, 2, '2020-10-26 00:14:18', '2020-10-26 00:14:18'),
(12, 1, 13, '2020-10-31 03:06:34', '2020-10-31 03:06:34'),
(13, 1, 14, '2020-10-31 03:06:34', '2020-10-31 03:06:34'),
(16, 4, 16, '2020-11-08 00:51:51', '2020-11-08 00:51:51'),
(17, 4, 17, '2020-11-08 00:51:51', '2020-11-08 00:51:51'),
(18, 4, 18, '2020-11-08 00:51:51', '2020-11-08 00:51:51'),
(19, 4, 19, '2020-11-08 00:51:51', '2020-11-08 00:51:51'),
(20, 4, 20, '2020-11-08 00:51:51', '2020-11-08 00:51:51'),
(21, 4, 21, '2020-11-08 00:51:51', '2020-11-08 00:51:51'),
(22, 5, 16, '2020-11-08 01:00:25', '2020-11-08 01:00:25'),
(23, 5, 22, '2020-11-08 01:00:25', '2020-11-08 01:00:25'),
(24, 5, 17, '2020-11-08 01:00:25', '2020-11-08 01:00:25'),
(25, 5, 19, '2020-11-08 01:00:25', '2020-11-08 01:00:25'),
(26, 5, 20, '2020-11-08 01:00:25', '2020-11-08 01:00:25'),
(27, 6, 16, '2020-11-08 01:02:29', '2020-11-08 01:02:29'),
(28, 6, 23, '2020-11-08 01:02:29', '2020-11-08 01:02:29'),
(29, 6, 22, '2020-11-08 01:02:29', '2020-11-08 01:02:29'),
(30, 6, 20, '2020-11-08 01:02:29', '2020-11-08 01:02:29'),
(31, 7, 16, '2020-11-08 01:05:39', '2020-11-08 01:05:39'),
(32, 7, 22, '2020-11-08 01:05:40', '2020-11-08 01:05:40'),
(33, 7, 23, '2020-11-08 01:05:40', '2020-11-08 01:05:40'),
(34, 7, 19, '2020-11-08 01:05:40', '2020-11-08 01:05:40'),
(35, 7, 20, '2020-11-08 01:05:40', '2020-11-08 01:05:40'),
(36, 8, 24, '2020-11-08 01:09:32', '2020-11-08 01:09:32'),
(37, 8, 25, '2020-11-08 01:09:32', '2020-11-08 01:09:32'),
(38, 8, 26, '2020-11-08 01:09:32', '2020-11-08 01:09:32'),
(39, 9, 24, '2020-11-08 01:11:17', '2020-11-08 01:11:17'),
(40, 9, 25, '2020-11-08 01:11:17', '2020-11-08 01:11:17'),
(41, 9, 26, '2020-11-08 01:11:17', '2020-11-08 01:11:17'),
(42, 10, 27, '2020-11-08 01:18:34', '2020-11-08 01:18:34'),
(43, 10, 28, '2020-11-08 01:18:34', '2020-11-08 01:18:34'),
(44, 12, 29, '2020-11-08 01:27:20', '2020-11-08 01:27:20'),
(45, 12, 19, '2020-11-08 01:27:20', '2020-11-08 01:27:20'),
(46, 12, 30, '2020-11-08 01:27:20', '2020-11-08 01:27:20'),
(47, 12, 23, '2020-11-08 01:27:20', '2020-11-08 01:27:20'),
(48, 13, 31, '2020-11-08 01:31:43', '2020-11-08 01:31:43'),
(49, 13, 22, '2020-11-08 01:31:43', '2020-11-08 01:31:43'),
(50, 13, 29, '2020-11-08 01:31:43', '2020-11-08 01:31:43'),
(51, 14, 32, '2020-11-08 01:35:13', '2020-11-08 01:35:13'),
(52, 14, 33, '2020-11-08 01:35:13', '2020-11-08 01:35:13'),
(53, 15, 34, '2020-11-08 01:39:16', '2020-11-08 01:39:16'),
(54, 15, 33, '2020-11-08 01:39:16', '2020-11-08 01:39:16'),
(55, 15, 35, '2020-11-08 01:39:16', '2020-11-08 01:39:16'),
(56, 17, 36, '2020-11-08 01:45:31', '2020-11-08 01:45:31'),
(57, 17, 34, '2020-11-08 01:45:31', '2020-11-08 01:45:31'),
(58, 18, 32, '2020-11-08 01:49:02', '2020-11-08 01:49:02'),
(59, 18, 37, '2020-11-08 01:49:02', '2020-11-08 01:49:02'),
(60, 19, 38, '2020-11-08 01:56:04', '2020-11-08 01:56:04'),
(61, 19, 39, '2020-11-08 01:56:04', '2020-11-08 01:56:04'),
(62, 20, 39, '2020-11-08 01:57:58', '2020-11-08 01:57:58'),
(63, 21, 39, '2020-11-08 01:59:25', '2020-11-08 01:59:25'),
(64, 22, 40, '2020-11-08 02:01:05', '2020-11-08 02:01:05'),
(65, 22, 41, '2020-11-08 02:01:05', '2020-11-08 02:01:05'),
(66, 23, 40, '2020-11-08 02:02:45', '2020-11-08 02:02:45'),
(67, 23, 41, '2020-11-08 02:02:45', '2020-11-08 02:02:45'),
(68, 23, 42, '2020-11-08 02:02:45', '2020-11-08 02:02:45'),
(69, 24, 43, '2020-11-08 02:04:41', '2020-11-08 02:04:41'),
(70, 24, 42, '2020-11-08 02:04:41', '2020-11-08 02:04:41'),
(71, 25, 42, '2020-11-08 02:06:01', '2020-11-08 02:06:01'),
(72, 25, 44, '2020-11-08 02:06:01', '2020-11-08 02:06:01'),
(73, 26, 45, '2020-11-08 02:07:37', '2020-11-08 02:07:37'),
(74, 28, 42, '2020-11-08 02:09:49', '2020-11-08 02:09:49');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Quản trị hệ thống', NULL, NULL),
(2, 'guest', 'Khách hàng', NULL, NULL),
(3, 'developer', 'Phát triển hệ thống', NULL, NULL),
(4, 'content', 'Chỉnh sửa nội dung', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 10, 2, NULL, NULL),
(2, 12, 1, NULL, NULL),
(3, 12, 2, NULL, NULL),
(4, 1, 1, NULL, NULL),
(5, 1, 3, NULL, NULL),
(6, 13, 2, NULL, NULL),
(7, 14, 2, NULL, NULL),
(8, 15, 2, NULL, NULL),
(9, 2, 1, NULL, NULL),
(10, 2, 3, NULL, NULL),
(11, 4, 3, NULL, NULL),
(12, 6, 3, NULL, NULL),
(13, 8, 3, NULL, NULL),
(14, 9, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `description`, `image_path`, `image_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 's1', NULL, '/storage/slider/1/GAsWjCrkLy4cFDubp52B.jpg', 'event_banner_737_1604557257.jpg', '2020-11-01 20:06:07', '2020-11-08 02:30:49', NULL),
(2, 'Nguyễnad', '<p>&aacute;da</p>', '/storage/slider/1/onkhFUGkUqIqbMSi03Jt.png', 'Screenshot (178).png', '2020-11-01 21:40:19', '2020-11-03 03:36:52', '2020-11-03 03:36:52'),
(3, 'Nguyễn thị M', '<p>sadd&aacute;</p>', '/storage/slider/1/m40Vnal3y4L3TwcUSdoZ.png', 'Screenshot (179).png', '2020-11-01 21:40:47', '2020-11-02 01:02:38', '2020-11-02 01:02:38'),
(4, 'slider2', '<p>fsdfdf</p>', '/storage/slider/1/NKIhmLtggsFTr9GUXTxh.jpg', 'event_banner_923_1604649722.jpg', '2020-11-08 02:31:40', '2020-11-08 02:31:40', NULL),
(5, 'slider3', '<p>sdasdwsd</p>', '/storage/slider/1/gChZ8AeoRZ9KDeaQVzU5.jpg', 'event_banner_922_1604563010.jpg', '2020-11-08 02:32:02', '2020-11-08 02:32:02', NULL),
(6, 'slider4', '<p>r</p>', '/storage/slider/1/ncPU0RdhDlKU0N6mDmuW.jpg', 'event_banner_903_1600666000.jpg', '2020-11-08 02:32:16', '2020-11-08 02:32:16', NULL),
(7, 'slider5', '<p>z</p>', '/storage/slider/1/cfJyfrZjOdWmft4muFnl.jpg', 'event_banner_916_1603425581.jpg', '2020-11-08 02:33:00', '2020-11-08 02:33:00', NULL),
(8, 'slider6', '<p>;</p>', '/storage/slider/1/kLgP1cKhqun406PaHmYI.jpg', 'event_banner_901_1600242969.jpg', '2020-11-08 02:33:19', '2020-11-08 02:33:19', NULL),
(9, 'slider7', '<p>f</p>', '/storage/slider/1/SSb2bPiI6D3KvIeCImAs.jpg', 'event_banner_894_1598950070.jpg', '2020-11-08 02:33:38', '2020-11-08 02:33:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'my pham gia re', '2020-10-26 00:13:52', '2020-10-26 00:13:52'),
(2, 'chinh hang', '2020-10-26 00:14:18', '2020-10-26 00:14:18'),
(3, 'sdasd sad', '2020-10-26 00:28:26', '2020-10-26 00:28:26'),
(4, 'sdj', '2020-10-26 00:28:26', '2020-10-26 00:28:26'),
(5, 'ad', '2020-10-26 00:29:20', '2020-10-26 00:29:20'),
(6, 'add', '2020-10-26 00:29:20', '2020-10-26 00:29:20'),
(7, 'chinhs', '2020-10-26 00:34:17', '2020-10-26 00:34:17'),
(8, 'sad', '2020-10-26 00:47:28', '2020-10-26 00:47:28'),
(9, 'asds', '2020-10-26 01:51:47', '2020-10-26 01:51:47'),
(10, 'asd askd', '2020-10-26 02:08:55', '2020-10-26 02:08:55'),
(11, 'asjgd\'', '2020-10-26 02:08:55', '2020-10-26 02:08:55'),
(12, 'asd', '2020-10-26 02:28:00', '2020-10-26 02:28:00'),
(13, '<hsagdj mashdka', '2020-10-31 03:06:34', '2020-10-31 03:06:34'),
(14, 'asdh cs', '2020-10-31 03:06:34', '2020-10-31 03:06:34'),
(15, 'xfc', '2020-11-08 00:45:53', '2020-11-08 00:45:53'),
(16, 'Chống nhăn', '2020-11-08 00:51:50', '2020-11-08 00:51:50'),
(17, 'làm trắng', '2020-11-08 00:51:50', '2020-11-08 00:51:50'),
(18, 'làm mềm da', '2020-11-08 00:51:50', '2020-11-08 00:51:50'),
(19, 'collagen', '2020-11-08 00:51:50', '2020-11-08 00:51:50'),
(20, 'không cồn', '2020-11-08 00:51:51', '2020-11-08 00:51:51'),
(21, 'nha đam', '2020-11-08 00:51:51', '2020-11-08 00:51:51'),
(22, 'làm mềm', '2020-11-08 01:00:25', '2020-11-08 01:00:25'),
(23, 'làm sáng', '2020-11-08 01:02:29', '2020-11-08 01:02:29'),
(24, 'kem chống nắng', '2020-11-08 01:09:32', '2020-11-08 01:09:32'),
(25, 'spf50', '2020-11-08 01:09:32', '2020-11-08 01:09:32'),
(26, 'hữu cơ', '2020-11-08 01:09:32', '2020-11-08 01:09:32'),
(27, 'mặt nạ cấp ẩm', '2020-11-08 01:18:34', '2020-11-08 01:18:34'),
(28, 'không parapen', '2020-11-08 01:18:34', '2020-11-08 01:18:34'),
(29, 'chống lão hóa', '2020-11-08 01:27:20', '2020-11-08 01:27:20'),
(30, 'làm ẩm', '2020-11-08 01:27:20', '2020-11-08 01:27:20'),
(31, 'dưỡng ẩm', '2020-11-08 01:31:43', '2020-11-08 01:31:43'),
(32, 'làm sạch', '2020-11-08 01:35:13', '2020-11-08 01:35:13'),
(33, 'giữ ẩm', '2020-11-08 01:35:13', '2020-11-08 01:35:13'),
(34, 'không bết', '2020-11-08 01:39:16', '2020-11-08 01:39:16'),
(35, 'chống nắng', '2020-11-08 01:39:16', '2020-11-08 01:39:16'),
(36, 'không nhờn', '2020-11-08 01:45:31', '2020-11-08 01:45:31'),
(37, 'cấp ẩm', '2020-11-08 01:49:02', '2020-11-08 01:49:02'),
(38, 'mượt', '2020-11-08 01:56:04', '2020-11-08 01:56:04'),
(39, 'son kem lì', '2020-11-08 01:56:04', '2020-11-08 01:56:04'),
(40, 'mỏng', '2020-11-08 02:01:05', '2020-11-08 02:01:05'),
(41, 'nhẹ', '2020-11-08 02:01:05', '2020-11-08 02:01:05'),
(42, 'lâu trôi', '2020-11-08 02:02:45', '2020-11-08 02:02:45'),
(43, 'màu đẹp', '2020-11-08 02:04:41', '2020-11-08 02:04:41'),
(44, 'dài mi', '2020-11-08 02:06:01', '2020-11-08 02:06:01'),
(45, 'hạt nhũ nhỏ', '2020-11-08 02:07:37', '2020-11-08 02:07:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `image_name`, `image_path`) VALUES
(1, 'sa', 'abc@gmail.com', NULL, '$2y$10$bvm.C8E6jDJCpZJ4qrn17uyxnl20./4bi7l15FN94BbTrlXORqMQq', NULL, NULL, '2020-11-05 00:16:29', NULL, 'download (4).jpg', '/storage/user/1/naA3i47ovDZ3FJhiNM94.jpg'),
(2, 'Lechi', 'chibee199@gmail.com', NULL, '$2y$10$qHAJ8/0fiKbTTMJ8ehWdpOtK293teznib.lnnfzCsUfLFhEt0X.Ji', NULL, '2020-11-03 01:19:40', '2020-11-03 01:19:40', NULL, 'download (2).jpg', '/storage/user/1/eXPxjZZGcDERgFWoZfUG.jpg'),
(4, 'Thu Hà', 'admin1@gmail.com', NULL, '$2y$10$Pcup8LHwRwUriJgqeoLiz.HUZN2kX.4ak4YxDhVNLiqG0mK7d1m.i', NULL, '2020-11-03 01:21:23', '2020-11-03 01:21:23', NULL, 'download (3).jpg', '/storage/user/1/hlK69NmjoZ9jLTO3Tts8.jpg'),
(6, 'Ngọc Phương', 'admin2@gmail.com', NULL, '$2y$10$LFdj99Pja7n9Ze3j9A9bQus9RegvpV4g5c3LnI.I89GbTxNm5P9UC', NULL, '2020-11-03 01:22:28', '2020-11-03 01:22:28', NULL, 'download (5).jpg', '/storage/user/1/sLeMMfXMRCYRcIe50dFi.jpg'),
(8, 'Văn Phúc', 'admin3@gmail.com', NULL, '$2y$10$XEmH9KBVDLRXQnShkE09FOj2ugqH4j4xHwYQJT0RyQkf4NGUpSKtC', NULL, '2020-11-03 01:26:21', '2020-11-03 01:26:21', NULL, 'images.jpg', '/storage/user/1/cihNwpu72RA0XGk4WZ4D.jpg'),
(9, 'Huy Hùng', 'admin4@gmail.com', NULL, '$2y$10$s6Fr9drjdTJHQeyvgBAYbOIFoiX2FjcKnhz/0faQY67KISDyeAd..', NULL, '2020-11-03 01:26:59', '2020-11-03 01:26:59', NULL, 'download (6).jpg', '/storage/user/1/0GdcWTbkSeLDj45YoH5d.jpg'),
(10, 'innisfree df', 'dhcnhn@haui.edu.vn', NULL, '$2y$10$e.aIwCiRmZ4QIsq8fEBZquf/3QNyhMKxN.iW4QTGjWO3XDrJU.7yK', NULL, '2020-11-03 01:29:50', '2020-11-03 03:43:13', '2020-11-03 03:43:13', NULL, NULL),
(12, 'hondadfa', 'admin1sdad@gmail.com', NULL, '$2y$10$Boy.dJQT1WTinnhn/kby/ukVFnQ2U/7FOqsUqG4.KxcHJb5cKKdUW', NULL, '2020-11-03 03:11:35', '2020-11-03 03:43:09', '2020-11-03 03:43:09', NULL, NULL),
(13, 'chi', 'hao@gmail.com', NULL, '$2y$10$FTax6bKOzcv.OI/aOCWISOpjAeiKaMIUOWFyktYbwVb0MOp6s/LFm', NULL, '2020-11-03 08:52:55', '2020-11-08 02:27:59', '2020-11-08 02:27:59', NULL, NULL),
(14, 'asa', 'chibee199sad@gmail.com', NULL, '$2y$10$fPWEVYELJ8ycLCx0ZhqGQuzYBMkDfYAraui54QdU7YneFzItJMyq2', NULL, '2020-11-04 17:56:34', '2020-11-08 02:28:03', '2020-11-08 02:28:03', NULL, NULL),
(15, '1', '1', NULL, '$2y$10$gH2n8HDeTjEF0bwe75x.h.L9Dfa1vXG0yn8EfGie8POT4bTF9MM6S', NULL, '2020-11-04 18:30:50', '2020-11-05 03:24:00', '2020-11-05 03:24:00', NULL, 'admins/avatar_default.jpg');

-- --------------------------------------------------------

--
-- Structure for view `a`
--
DROP TABLE IF EXISTS `a`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `a`  AS  select sum(`order_details`.`number` * `products`.`price`) AS `money`,sum(`order_details`.`number`) AS `number`,`order_details`.`order_id` AS `order_id` from (`order_details` join `products` on(`order_details`.`product_id` = `products`.`id`)) group by `order_details`.`order_id` ;

-- --------------------------------------------------------

--
-- Structure for view `b`
--
DROP TABLE IF EXISTS `b`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `b`  AS  select `orders`.`id` AS `id`,`customers`.`name` AS `name`,`customers`.`phone` AS `phone`,`customers`.`address` AS `address`,`orders`.`status` AS `status`,`orders`.`fee` AS `fee` from (`orders` join `customers` on(`orders`.`customer_id` = `customers`.`id`)) where `orders`.`deleted_at` is null ;

-- --------------------------------------------------------

--
-- Structure for view `orderview`
--
DROP TABLE IF EXISTS `orderview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `orderview`  AS  select `a`.`order_id` AS `order_id`,`b`.`name` AS `name`,`b`.`phone` AS `phone`,`b`.`address` AS `address`,`b`.`status` AS `STATUS`,`a`.`money` AS `money`,`a`.`number` AS `number`,`b`.`fee` AS `fee`,`a`.`money` - `b`.`fee` AS `phi` from (`a` join `b` on(`a`.`order_id` = `b`.`id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_tags`
--
ALTER TABLE `product_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `product_tags`
--
ALTER TABLE `product_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
