-- phpMyAdmin SQL Dump
-- version 5.0.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Jan 05, 2020 at 03:51 PM
-- Server version: 5.7.28
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema-coffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `agencies`
--

CREATE TABLE `agencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agencies`
--

INSERT INTO `agencies` (`id`, `name`, `phone`, `address`, `content`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Cinema Coffe Yên Lãng', '033831436', '136 Yên Lãng (Thái Thịnh 2) - Đống Đa - Hà Nội', '<p>Cinema Coffee Y&ecirc;n L&atilde;ng l&agrave; cơ sở đầu ti&ecirc;n của Cinema Coffee &ndash; &nbsp;hệ thống rạp chiếu phim mini h&agrave;ng đầu H&agrave; Nội. Ch&iacute;nh bởi l&agrave; cơ sở đầu ti&ecirc;n n&ecirc;n n&oacute; l&agrave; cơ sở chuy&ecirc;n về chiếu phim nhất.</p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"http://cafephim.vn/wp-content/uploads/2017/02/IMG_7552.jpg\" /></p>\r\n\r\n<p>Kh&aacute;c với c&aacute;c&nbsp;cơ sở c&ograve;n lại, Cinema Coffee Y&ecirc;n L&atilde;ng kh&ocirc;ng c&oacute; kh&ocirc;ng gian cho khu vực caf&eacute;. Nơi đ&acirc;y đơn thuần l&agrave; rạp chiếu phim mini ki&ecirc;m kh&ocirc;ng gian tổ chức sự kiện. Cũng ch&iacute;nh bởi l&iacute; do n&agrave;y m&agrave; những kh&aacute;ch h&agrave;ng muốn thưởng thức kh&ocirc;ng gian phim trọn vẹn hơn nữa, ri&ecirc;ng tư hơn nữa th&igrave; c&oacute; thể lựa chọn Cinema Coffee Y&ecirc;n L&atilde;ng.</p>\r\n\r\n<p>&nbsp;<img alt=\"\" class=\"w-100\" src=\"https://cafephim.vn/wp-content/uploads/2019/07/IMG_1465.jpg\" /></p>\r\n\r\n<p>Mặc d&ugrave; l&agrave; cơ sở đầu ti&ecirc;n nhưng hệ thống rap chiếu phim cũng như phong c&aacute;ch trang tr&iacute; của Cinema Coffee Y&ecirc;n L&atilde;ng kh&ocirc;ng hề thua k&eacute;m c&aacute;c&nbsp;cơ sở c&ograve;n lại. Hệ thống m&aacute;y m&oacute;c thiết bị chiếu phim thường xuy&ecirc;n được kiểm tra, bảo dưỡng hoặc thay mới khi cần thiết. Bạn ho&agrave;n to&agrave;n c&oacute; thể thưởng thức một bộ phim với chất lượng h&igrave;nh ảnh, &acirc;m thanh sống động như c&aacute;c rạp chiếu phim lớn.</p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"https://cafephim.vn/wp-content/uploads/2017/02/phong-chieu-phim-cafe-phim-yen-lang.jpg\" /></p>\r\n\r\n<p>Cinema Coffee Y&ecirc;n L&atilde;ng tự tin mang tới cho bạn trải nghiệm &ldquo;hơn cả rạp chiếu phim&rdquo;. Ở rạp chiếu phim, bạn c&oacute; kh&ocirc;ng gian ri&ecirc;ng tư như ở đ&acirc;y chứ? Ở rạp chiếu phim bạn kh&ocirc;ng thể nhận được sự phục vụ đồ ăn v&agrave; nước uống tận nơi chỉ sau một cuộc gọi oder tại ph&ograve;ng xem như ở Cinema Coffee Y&ecirc;n L&atilde;ng.</p>\r\n\r\n<p>Kh&ocirc;ng những thế, hệ thống m&agrave;n chiếu 150 inch chuẩn HD tại c&aacute;c ph&ograve;ng c&ugrave;ng d&agrave;n &acirc;m thanh Home Theater đảm bảo sẽ khiến bạn tận hưởng bộ phim với chất lượng như ở rạp. Ng&agrave;y nay, xem phim kh&ocirc;ng chỉ l&agrave; xem, m&agrave; c&ograve;n l&agrave; tận hưởng. V&agrave; ch&uacute;ng t&ocirc;i tin, ở Cinema Coffee Y&ecirc;n l&atilde;ng bạn được tận hưởng hơn cả một thượng đế.</p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"https://cafephim.vn/wp-content/uploads/2019/07/57272236_2339916492948005_8162034623866470400_o.jpg\" /></p>\r\n\r\n<p>Kh&ocirc;ng gian ph&ograve;ng chiếu phim cũng th&iacute;ch hợp để l&agrave;m nơi tổ chức sự kiện l&atilde;ng mạn. Bạn lu&ocirc;n muốn d&agrave;nh những điều ngọt ng&agrave;o cho nửa kia nhưng lại kh&ocirc;ng muốn g&acirc;y ồn &agrave;o, ch&uacute; &yacute; đến qu&aacute; nhiều người. Vậy th&igrave; chẳng c&oacute; l&iacute; do g&igrave; khiến bạn kh&ocirc;ng lựa chọn Cinema Coffee Y&ecirc;n L&atilde;ng.</p>\r\n\r\n<p>Hơn thế, nếu tổ chức c&aacute;c sự kiện như tỏ t&igrave;nh, cầu h&ocirc;n, sinh nhật hoặc ofline tại Cinema Coffee Y&ecirc;n L&atilde;ng, bạn c&oacute; thể thoải m&aacute;i lựa chọn c&aacute;c g&oacute;i dịch vụ hỗ trợ tổ chức sự kiện tiện lợi m&agrave; v&ocirc; c&ugrave;ng tiết kiệm của ch&uacute;ng t&ocirc;i.</p>\r\n\r\n<p>Nếu bạn chưa trải nghiệm dịch vụ từ Cinema Coffee Y&ecirc;n L&atilde;ng th&igrave; h&atilde;y nhanh tay nhấc m&aacute;y đặt ph&ograve;ng theo số hotline hoặc truy cập cafephim.vn để đặt ph&ograve;ng nhanh như nh&aacute;y mắt để hưởng th&ecirc;m ưu đ&atilde;i từ ph&iacute;a ch&uacute;ng t&ocirc;i.</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:518px; position:absolute; top:6899px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', '1.png', '2019-12-29 16:14:23', '2019-12-29 16:17:26'),
(3, 'Cinema Coffee Xã Đàn', '0333831436', '166 ven Hồ Đắc Di - Đống Đa - Hà Nội', '<p>Năm 2020&nbsp;được dự b&aacute;o l&agrave; năm b&ugrave;ng nổ của phong c&aacute;ch vintage. Đ&acirc;y l&agrave; phong c&aacute;ch &ldquo;cổ v&agrave; cũ&rdquo; , mang n&eacute;t đẹp nhẹ nh&agrave;ng, lắng đọng của thời đại. Kh&ocirc;ng chỉ thời trang, phim ảnh, ngay cả những qu&aacute;n caf&eacute; cũng đang ng&agrave;y c&agrave;ng đi theo xu hướng thời thượng m&agrave; kh&ocirc;ng bao giờ lỗi thời n&agrave;y.</p>\r\n\r\n<p>Nếu x&eacute;t tr&ecirc;n địa b&agrave;n H&agrave; Nội, c&oacute; thể bạn sẽ t&igrave;m được rất nhiều qu&aacute;n caf&eacute; theo phong c&aacute;ch n&agrave;y. Nhưng nếu để t&igrave;m một kh&ocirc;ng gian caf&eacute; phim theo phong c&aacute;ch vintage th&igrave; c&oacute; lẽ kh&ocirc;ng đ&acirc;u bằng Cinema Coffee phim X&atilde; Đ&agrave;n.</p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"https://cafephim.vn/wp-content/uploads/2017/02/cafe-phim-xa-dan.jpg\" /></p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"http://cafephim.vn/wp-content/uploads/2018/03/SAM_0011.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Đ&acirc;y l&agrave; cơ sở chiếu phim số 2 trong hệ thống 4&nbsp;cơ sở chiếu phim của Cinema Coffee &ndash; hệ thống rạp chiếu phim mini h&agrave;ng đầu H&agrave; Nội.</p>\r\n\r\n<p>Nằm tr&ecirc;n ng&otilde; X&atilde; Đ&agrave;n 2, vị tr&iacute; đối diện với Hồ X&atilde; Đ&agrave;n khiến cho tầm nh&igrave;n từ qu&aacute;n trở n&ecirc;n tho&aacute;ng đ&atilde;ng, mộng mơ v&ocirc; c&ugrave;ng. Đến với kh&ocirc;ng gian nơi đ&acirc;y, gọi một t&aacute;ch cafe nhỏ xinh, mang theo một cuốn s&aacute;ch y&ecirc;u th&iacute;ch, bạn sẽ cảm thấy cuộc sống như đang lắng lại để bạn tận hưởng những ph&uacute;t gi&acirc;y đầy thư gi&atilde;n ấy.</p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"https://cafephim.vn/wp-content/uploads/2016/09/khong-gian-cho-tai-cafe-film.jpg\" /></p>\r\n\r\n<p>Tuy nhi&ecirc;n, nếu đến Cinema Coffee&nbsp;X&atilde; Đ&agrave;n chỉ để thưởng thức caf&eacute; th&igrave; bạn đ&atilde; bỏ lỡ hệ thống rạp chiếu phim si&ecirc;u đẳng cấp của Cinema Coffee, được đầu tư tỉ mỉ, c&ocirc;ng nghệ thiết bị hiện đại. 100% c&aacute;c ph&ograve;ng đều lắp đặt m&agrave;n chiếu c&oacute; độ ph&acirc;n giải HD tỉ lệ 16:9 v&agrave; hệ thống &acirc;m thanh Home Theater mang tới cho bạn những bộ phim trọn vẹn. C&aacute;c ph&ograve;ng chiếu phim tại đ&acirc;y c&oacute; thể đ&aacute;p ứng nhu cầu sử dụng đa dạng cho nh&oacute;m từ 2&ndash; 30 người.</p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"https://cafephim.vn/wp-content/uploads/2016/09/caffe-phim-dong-da.jpg\" /></p>\r\n\r\n<p>Kh&aacute;ch h&agrave;ng đến với nơi đ&acirc;y vẫn lu&ocirc;n h&agrave;i l&ograve;ng với sự đầu tư của chủ qu&aacute;n v&agrave;o menu drink &amp; fast food. Nếu chỉ l&agrave; ngon miệng l&agrave; chưa đủ, ẩm thực nơi đ&acirc;y được đảm bảo an to&agrave;n vệ sinh thực phẩm, trang tr&iacute; đẹp mắt mang tới sự sang trọng v&agrave; đẳng cấp nhưng gi&aacute; cả lại v&ocirc; c&ugrave;ng hợp l&iacute;.</p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"http://cafephim.vn/wp-content/uploads/2018/03/Untitled-design.png\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Đi xem phim với gấu, đi xem với hội cạ cứng hay tổ chức xem phim tập thể cho lớp&hellip; sẽ l&agrave; điều tuyệt vời v&agrave; trọn vẹn khi bạn lựa cọn Cinema Coffee X&atilde; Đ&agrave;n.</p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"https://cafephim.vn/wp-content/uploads/2016/09/dia-diem-to-chuc-sinh-nhat-cho-nguoi-yeu-o-ha-noi.jpg\" /></p>\r\n\r\n<p>Suốt từ khi được th&agrave;nh lập tới nay, Cinema Coffee X&atilde; Đ&agrave;n đ&atilde; trở th&agrave;nh địa điểm hẹn h&ograve; của c&aacute;c bạn trẻ quanh khu vực X&atilde; Đ&agrave;n, Hồ Đắc Di, Đặng Văn Ngữ, T&acirc;y Sơn&hellip; Sinh vi&ecirc;n c&aacute;c trường đại học như C&ocirc;ng Đo&agrave;n, Ng&acirc;n H&agrave;ng, Đại học Y H&agrave; Nội, Đại học Kinh tế quốc d&acirc;n, B&aacute;ch khoa &ndash; X&acirc;y Dựng vẫn lu&ocirc;n truyền tay nhau về địa điểm vui chơi giải tr&iacute; gi&aacute; sinh vi&ecirc;n nhưng chất lượng cao n&agrave;y. Điều đ&oacute; đủ cho bạn thấy Cinema Coffee X&atilde; Đ&agrave;n được y&ecirc;u th&iacute;ch đến mức độ n&agrave;o.</p>\r\n\r\n<p>Địa điểm n&agrave;y cũng thường xuy&ecirc;n được lựa chọn l&agrave; nơi tổ chức sự kiện l&atilde;ng mạn cho c&aacute;c cặp đ&ocirc;i, tổ chức sinh nhật cho bạn b&egrave; hay tổ chức học nh&oacute;m, hội thảo nhỏ. Chắc chắn, những g&igrave; nơi đ&acirc;y mang lại sẽ kh&ocirc;ng khiến bạn phải thất vọng.</p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"http://cafephim.vn/wp-content/uploads/2018/03/IMG_7818.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Mỗi cơ sở của Cinema Coffee đều mang tới những trải nghiệm ri&ecirc;ng dựa tr&ecirc;n chất lượng dịch vụ đồng đều. Cinema Coffeem X&atilde; Đ&agrave;n l&agrave; nơi nhận được nhiều review tốt của c&aacute;c bạn trẻ về chất lượng phục vụ cũng như phong c&aacute;ch trang tr&iacute;. View hồ tuyệt đẹp của qu&aacute;n v&agrave; kh&ocirc;ng gian caf&eacute; ngo&agrave;i trời tho&aacute;ng đ&atilde;ng ch&iacute;nh l&agrave; điểm thu h&uacute;t c&aacute;c bạn sinh vi&ecirc;n v&agrave; giới văn ph&ograve;ng tới đ&acirc;y thường xuy&ecirc;n.</p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"http://cafephim.vn/wp-content/uploads/2018/03/SAM_0007.jpg\" /></p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"http://cafephim.vn/wp-content/uploads/2018/03/SAM_0006.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>T&oacute;m lại, bạn sẽ c&oacute; được g&igrave; khi đến Cinema Coffee? Bạn sẽ c&oacute; một kh&ocirc;ng gian caf&eacute; tho&aacute;ng đ&atilde;ng, đ&oacute;n gi&oacute; hồ. Bạn c&oacute; được một kh&ocirc;ng gian xem phim ri&ecirc;ng tư để trải nghiệm những bộ phim hay với chất lượng &acirc;m thanh h&igrave;nh ảnh cao. Bạn sẽ được kh&aacute;m ph&aacute; thế giới đồ ăn thức uống cực hot. V&agrave; bạn c&oacute; được một kh&ocirc;ng gian tổ chức sự kiện l&atilde;ng mạn, sinh nhật, offline rất hợp l&iacute; cho m&igrave;nh, bạn b&egrave;, người th&acirc;n y&ecirc;u.&nbsp;Bạn c&ograve;n t&igrave;m kiếm một nơi n&agrave;o kh&aacute;c nữa, khi tất cả đ&atilde; c&oacute; trong c&ugrave;ng 1 địa điểm???</p>\r\n\r\n<p>Đặt ph&ograve;ng online ngay để trải nghiệm kh&ocirc;ng gian đa dạng n&agrave;y của Cinema Coffee X&atilde; Đ&agrave;n. Chỉ v&agrave;i c&uacute; click chuột đơn giản hoặc nhấc m&aacute;y tới số hotline của Cinema Coffee, bạn đ&atilde; c&oacute; ngay ph&ograve;ng xem phim cực ngầu. Vậy sao bạn kh&ocirc;ng thử?</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:188px; position:absolute; top:7279px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', '2.png', '2019-12-29 16:23:14', '2019-12-29 16:23:14'),
(4, 'Cinema Coffee Chùa Láng', '033831436', '61 ngõ 82 Chùa Láng - Hà Nội', '<p>Cinema Coffee&nbsp;Ch&ugrave;a L&aacute;ng l&agrave; đứa con thứ 3 của Cinema Coffee, Cinema Coffee ch&ugrave;a l&aacute;ng bắt đầu được đưa v&agrave;o sử dụng từ ng&agrave;y 8/2/2019.&nbsp; Đ&acirc;y l&agrave; cơ sở được đầu tư c&ocirc;ng phu nhất từ vị tr&iacute;, mặt bằng đến hệ thống cơ sở hạ tầng, dịch vụ.</p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"http://cafephim.vn/wp-content/uploads/2019/03/49723835_1327009840773532_7710696250399522816_o.jpg\" /></p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"http://cafephim.vn/wp-content/uploads/2019/03/48971523_1315064648634718_4624652039362707456_o.jpg\" /></p>\r\n\r\n<p>Cinema Coffee Ch&ugrave;a L&aacute;ng&nbsp;mang tới cho bạn một kh&ocirc;ng gian l&atilde;ng mạn v&agrave; đậm chất phim ảnh. Kh&ocirc;ng gian caf&eacute; ở tầng 1 được trang tr&iacute; cầu k&igrave; v&agrave; đẹp mắt. Từ đ&acirc;y, bạn c&oacute; thể ngắm nh&igrave;n g&oacute;c đẹp nhất của hồ Quan hệ (hồ L&aacute;ng). Những bạn y&ecirc;u th&iacute;ch thi&ecirc;n nhi&ecirc;n c&oacute; thể đến với kh&ocirc;ng gian caf&eacute; ngo&agrave;i trời, thưởng thức kh&ocirc;ng gian v&ocirc; c&ugrave;ng trong l&agrave;nh v&agrave; tho&aacute;ng đ&atilde;ng.</p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"http://cafephim.vn/wp-content/uploads/2019/03/48944832_2313669535521045_6073696240355246080_o.jpg\" /></p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"http://cafephim.vn/wp-content/uploads/2019/03/48381192_1315064851968031_8808883902966923264_o.jpg\" /></p>\r\n\r\n<p>V&agrave; tất nhi&ecirc;n, đến Cinema Coffee bạn kh&ocirc;ng thể kh&ocirc;ng thưởng thức những bộ phim hấp dẫn nhất tại ph&ograve;ng chiếu ri&ecirc;ng. Với sự đầu tư vượt trội về mặt bằng, cơ sở ch&ugrave;a l&aacute;ng gi&uacute;p bạn c&oacute; được kh&ocirc;ng gian chiếu phim, tổ chức sự kiện rộng r&atilde;i, sang trọng v&agrave; đẳng cấp hơn.</p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"http://cafephim.vn/wp-content/uploads/2019/03/38717364_1212098448931339_8642728871168311296_o.jpg\" /></p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"http://cafephim.vn/wp-content/uploads/2019/03/23213444_2050940825127252_1977725236744323803_o-2.jpg\" /></p>\r\n\r\n<p>Cinema Coffee ch&ugrave;a l&aacute;ng tiếp tục đưa tới cho bạn những trải nghiệm về phim ảnh, ẩm thực, kh&ocirc;ng gian kiến tr&uacute;c với chất lượng tốt hơn. Bởi thế, bạn kh&ocirc;ng thể bỏ qua địa điểm xem phim ki&ecirc;m tổ chức sự kiện nếu đang ở trong khu vực đường Cầu Giấy, đường L&aacute;ng, Kim M&atilde; hay c&aacute;c khu vực xung quanh trường Đại học Giao th&ocirc;ng vận tải, Đại học Ngoại thương, Đại học Luật H&agrave; Nội,..</p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"http://cafephim.vn/wp-content/uploads/2018/05/hoc_nhom_cafe_phim_cine_cafe-02.jpg\" /></p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"http://cafephim.vn/wp-content/uploads/2019/03/33850115_1141857212622130_8173680603783233536_o.jpg\" /></p>\r\n\r\n<p>Tại một ph&ograve;ng Cinema Coffee ri&ecirc;ng ở địa điểm ch&ugrave;a l&aacute;ng, bạn sẽ nhận được những g&igrave;? Tiếp tục l&agrave; hệ thống m&aacute;y chiếu 150 inch chuẩn HD v&agrave; d&agrave;n &acirc;m thanh sống động như c&aacute;c&nbsp;cơ sở c&ograve;n lại nhưng m&aacute;y m&oacute;c thiết bị được cập nhật loại mới hơn. Hệ thống c&aacute;c ph&ograve;ng c&aacute;ch &acirc;m tốt, trang bị ph&ograve;ng ch&aacute;y chữa ch&aacute;y đầu đủ. Ghế sofa da cao cấp được đặt hợp l&iacute; gi&uacute;p bạn ngồi thưởng thức phim thoải m&aacute;i nhất. 100% c&aacute;c ph&ograve;ng đều được lắp m&aacute;y điều h&ograve;a v&agrave; một điện thoại b&agrave;n để kh&aacute;ch order tiện lợi.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Menu đồ uống v&agrave; đồ ăn nhanh của cơ sở n&agrave;y cũng được ph&aacute;t triển hơn so với 2 cơ sở trước. Nhiều m&oacute;n mới, độc v&agrave; lạ hơn được đưa v&agrave;o list khiến thế giới ẩm thực của Cinema Coffee ch&ugrave;a l&aacute;ng được mở rộng &ldquo;l&atilde;nh thổ&rdquo; th&ecirc;m nhiều phần.</p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"http://cafephim.vn/wp-content/uploads/2019/03/menu_do_uong_do_an_cafe_phim_ha_noi-02.jpg\" /></p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"http://cafephim.vn/wp-content/uploads/2019/03/cafe_phim_ha_noi_mien_phi_do_uong_khi_dat_phong_online_2-02.jpg\" /></p>\r\n\r\n<p>Với ưu điểm nổi trội hơn so với 2 cơ sở trước, Cinema Coffee ch&ugrave;a l&aacute;ng chắc chắn sẽ đ&aacute;p ứng mọi nhu cầu của qu&yacute; vị, từ phim ảnh, ẩm thực, kiến tr&uacute;c đến tổ chức sự kiện. C&aacute;c buổi sinh nhật, offline, tỏ t&igrave;nh sẽ trở n&ecirc;n ho&agrave;nh tr&aacute;ng v&agrave; &yacute; nghĩa hơn nữa với hệ thống ph&ograve;ng si&ecirc;u đỉnh.</p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"http://cafephim.vn/wp-content/uploads/2016/08/Cafe_phim_CINE_CAFE_su_kien_lang_man.jpg\" /></p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"http://cafephim.vn/wp-content/uploads/2019/02/SET-05.jpg\" /></p>\r\n\r\n<p>Với những g&igrave; c&oacute; tại Cinema Coffee Ch&ugrave;a L&aacute;ng, ch&uacute;ng t&ocirc;i tự tin khẳng định, bạn sẽ được tận hưởng v&agrave; trải nghiệm hơn cả rạp chiếu phim? Kh&ocirc;ng tin ư? Vậy bạn h&atilde;y nhanh tay đặt ph&ograve;ng th&ocirc;ng qua website hoặc hotline của ch&uacute;ng t&ocirc;i để kiểm chứng th&ocirc;ng tin tr&ecirc;n. Ch&uacute;ng t&ocirc;i c&aacute; với bạn rằng, Cinema Coffee Ch&ugrave;a L&aacute;ng sẽ trở th&agrave;nh địa điểm y&ecirc;u th&iacute;ch của bạn ngay sau lần trải nghiệm đầu ti&ecirc;n!</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:475px; position:absolute; top:18088px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', '11.png', '2019-12-29 16:33:16', '2019-12-29 16:33:16'),
(5, 'Cinema Coffee Hà Đông', '0333831436', 'Số 30 - An Hòa - Hà Đông - Hà Nội', '<p>Cinema Coffee H&agrave; Đ&ocirc;ng l&agrave; cơ sở thứ 4 Cinema Coffee ph&ograve;ng ri&ecirc;ng hiện đại nhất H&agrave; Nội, Cinema Coffee H&agrave; Đ&ocirc;ng hứa hẹn nhiều bất ngờ cho giới trẻ c&aacute;c trường đại học gần đ&oacute; như Học Viện An Ninh, Học Viện Y Học Cổ Truyền, Đại Học Bưu Ch&iacute;nh Viễn Th&ocirc;ng, Đại Học Kiến Tr&uacute;c, Đại Học H&agrave; Nội, Đại Học Tự Nhi&ecirc;n - Nh&acirc;n Văn...</p>\r\n\r\n<p><strong>Cinema Coffee H&agrave; Đ&ocirc;ng &nbsp;với diện mạo ho&agrave;n to&agrave;n mới</strong></p>\r\n\r\n<p><strong>Cinema Coffee H&agrave; Đ&ocirc;ng&nbsp;</strong>với kh&ocirc;ng gian trẻ trung hiện đại, sẵn s&agrave;ng l&agrave;m say m&ecirc; tr&aacute;i tim của bất k&igrave; anh ch&agrave;ng c&ocirc; n&agrave;ng n&agrave;o &nbsp;khi gh&eacute; qua. Đ&acirc;y l&agrave; địa điểm xem phim l&iacute; tưởng cho c&aacute;c bạn trẻ khi c&oacute; thể lựa chọn những bộ phim m&agrave; m&igrave;nh y&ecirc;u th&iacute;ch. Hơn thế nữa, trong kh&ocirc;ng gian &ldquo;chiến hữu&quot;, bạn c&oacute; thể thoải m&aacute;i chuyện tr&ograve;, b&igrave;nh luận s&ocirc;i nổi về bộ phim đang chiếu m&agrave; kh&ocirc;ng e ngại sẽ l&agrave;m phiền tới bất cứ ai.</p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"https://cafephim.vn/wp-content/uploads/2017/05/phong-chieu-cafe-phim-ha-dong.jpg\" /></p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"https://cafephim.vn/wp-content/uploads/2017/05/xem-phim-phong-rieng-cafe-phim-ha-dong.jpg\" /></p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"https://cafephim.vn/wp-content/uploads/2017/05/man-chieu-phim-hd-cafe-phim-phong-rieng.jpg\" /></p>\r\n\r\n<p>V&agrave; hấp dẫn hơn hết l&agrave; thực đơn của qu&aacute;n. Tất tần tật những m&oacute;n y&ecirc;u th&iacute;ch của c&aacute;c bạn trẻ đều c&oacute; trong menu&nbsp;<strong>Cinema Coffee H&agrave; Đ&ocirc;ng</strong>, được update thường xuy&ecirc;n,&nbsp;nh&igrave;n đ&atilde; thấy th&egrave;m!</p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"http://cafephim.vn/wp-content/uploads/2016/08/do-an-do-uong-cafe-phim-cine-2017-1-1024x576.jpg\" /></p>\r\n\r\n<p><strong>Trang thiết bị hiện đại tại Cinema Coffee&nbsp;H&agrave; Đ&ocirc;ng</strong></p>\r\n\r\n<p>Hệ thống m&aacute;y chiếu 150 inchs chuẩn HD hiện đại cho h&igrave;nh ảnh ch&acirc;n thực v&agrave; &acirc;m thanh sống động, qu&aacute; ho&agrave;n hảo cho một bộ phim. Điểm cộng thứ hai l&agrave; độ c&aacute;ch &acirc;m tốt v&agrave; ghế sofa rộng r&atilde;i, cho bạn tư thế xem phim thoải m&aacute;i nhất.</p>\r\n\r\n<p><strong>Party ho&agrave;nh tr&aacute;ng với hệ thống ph&ograve;ng chiếu rộng r&atilde;i, hiện đại của Cinema Coffee H&agrave; Đ&ocirc;ng</strong></p>\r\n\r\n<p>Cinema Coffee H&agrave; Đ&ocirc;ng với kh&ocirc;ng gian rộng r&atilde;i, thực đơn phong ph&uacute; với đầy đủ đồ ăn, thức uống kh&ocirc;ng những th&iacute;ch hợp để hội họp bạn b&egrave;, hẹn h&ograve; m&agrave; c&ograve;n l&agrave; một địa điểm tuyệt vời cho những buổi party nh&oacute;m. Những sự kiện quan trọng như tỏ t&igrave;nh, cầu h&ocirc;n, hay những ng&agrave;y lễ kỉ niệm th&igrave; Cinema Coffee H&agrave; Đ&ocirc;ng vẫn sẽ l&agrave; một gợi &yacute; ho&agrave;n hảo cho bạn trong việc bố tr&iacute; địa điểm với kh&ocirc;ng gian tối ưu v&agrave; đạo cụ đầy đủ.</p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"https://cafephim.vn/wp-content/uploads/2019/07/MG_8133.jpg\" /></p>\r\n\r\n<p>Cuối tuần đổi gi&oacute; một ch&uacute;t, kh&ocirc;ng cần phải đi đ&acirc;u xa, muốn thay đổi danh s&aacute;ch c&aacute;c &ldquo;tụ điểm&rdquo; ăn chơi hiện tại, bạn c&oacute; thể đến Cinema Coffee H&agrave; Đ&ocirc;ng. Chi nh&aacute;nh thứ 4 tại H&agrave; Đ&ocirc;ng, Cinema Coffee sẽ mang đến cho bạn nhiều chương tr&igrave;nh khuyến m&atilde;i đặc biệt khi đến qu&aacute;n m&agrave; chắc chắn bạn sẽ cảm thấy bất ngờ.</p>\r\n\r\n<p>Những g&oacute;i setup tổ chức sự kiện l&atilde;ng mạn sẽ để lại những trải nghiệm kh&oacute; qu&ecirc;n</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:1109px; position:absolute; top:6702px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', '17.png', '2019-12-29 16:38:03', '2019-12-29 16:38:03');

-- --------------------------------------------------------

--
-- Table structure for table `extensions`
--

CREATE TABLE `extensions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `extensions`
--

INSERT INTO `extensions` (`id`, `name`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Cafe phim phòng riêng', '<p>Mang đến cho bạn kh&ocirc;ng gian phim ho&agrave;n to&agrave;n ri&ecirc;ng tư. Ngả lưng ghế sofa rộng r&atilde;i, M&agrave;n chiếu 150 inch Full HD độ n&eacute;t cao, &acirc;m thanh 5.1 hiệu ứng sống động. Cafe phim ph&ograve;ng ri&ecirc;ng tại cine cafe c&ograve;n mang&nbsp;đến cho kh&aacute;ch h&agrave;ng kh&ocirc;ng gian xem phim gia&nbsp;đ&igrave;nh&nbsp;ấm c&uacute;ng, m&oacute;n&nbsp;ăn v&agrave;&nbsp;đồ uống&nbsp;đảm bảo vệ sinh.</p>\r\n\r\n<h3><strong>TO&Agrave;N BỘ PH&Ograve;NG CHIẾU CINEMA COFFEE PH&Ograve;NG RI&Ecirc;NG&nbsp;ĐẠT CHUẨN HOME THEATER</strong></h3>\r\n\r\n<p>Chuẩn Home Theater được Quốc tế quy định ph&ugrave; hợp cho ph&ograve;ng chiếu phim gia đ&igrave;nh để hiệu ứng &acirc;m thanh, h&igrave;nh ảnh tương đương với rạp chiếu phim. V&igrave; vậy CINEMA COFFEE chắc chắn l&agrave;m h&agrave;i l&ograve;ng c&aacute;c kh&aacute;n giả y&ecirc;u phim.</p>\r\n\r\n<p><strong>TẠI CINEMA COFFEE PH&Ograve;NG RI&Ecirc;NG HO&Agrave;N TO&Agrave;N RI&Ecirc;NG TƯ, PHIM TỰ CHỌN</strong></p>\r\n\r\n<p>Ph&ograve;ng chiếu ho&agrave;n to&agrave;n ri&ecirc;ng tư, ph&ugrave; hợp với nhu cầu tụ tập xem phim nh&oacute;m.</p>\r\n\r\n<p>List phim tự chọn của&nbsp;CINEMA COFFEE được cập nhật li&ecirc;n tục, l&ecirc;n tới tr&ecirc;n 3000 phim v&agrave; số lượng tăng trưởng kh&ocirc;ng ngừng. Đặc biệt với những bộ sưu tầm phim Bom tấn, phim điện ảnh Kinh điển, phim đạt c&aacute;c giải thưởng lớn....&nbsp;CINEMA COFFEE&nbsp;sẽ tư vấn để c&aacute;c bạn chọn được bộ phim ưng &yacute; thưởng thức c&ugrave;ng bạn b&egrave; v&agrave; người th&acirc;n theo chuẩn&nbsp;<strong>cafe phim ph&ograve;ng ri&ecirc;ng</strong>&nbsp;của bạn</p>\r\n\r\n<p><strong>H&Igrave;NH ẢNH V&Agrave; &Acirc;M THANH SỐNG ĐỘNG</strong></p>\r\n\r\n<p>&quot;N&oacute;i kh&ocirc;ng với Tivi&quot; l&agrave;&nbsp;<strong>ti&ecirc;u ch&iacute; h&agrave;ng đầu&nbsp;của CINEMA COFFEE</strong>&nbsp;, Ch&uacute;ng t&ocirc;i sử dụng 100% m&agrave;n chiếu rộng 150 inch, độ ph&acirc;n giải FULL HD &nbsp;v&agrave; tỉ lệ h&igrave;nh ảnh 16:9 (như rạp chiếu lớn) ph&ugrave; hợp nhất để chiếu phim độ n&eacute;t cao,</p>\r\n\r\n<p><strong>CAFE PHIM PH&Ograve;NG RI&Ecirc;NG&nbsp;RỘNG R&Atilde;I V&Agrave; THOẢI M&Aacute;I</strong></p>\r\n\r\n<p>Ph&ograve;ng chiếu phim ti&ecirc;u chuẩn với diện t&iacute;ch 20m2 ph&ugrave; hợp với nh&oacute;m xem đến 20 người, tầm nh&igrave;n từ ghế ngồi đến m&agrave;n chiếu 4,5 - 5m đảm bảo kh&ocirc;ng bị mỏi mắt khi xem phim.</p>\r\n\r\n<p><strong>M&Oacute;N&nbsp;ĂN TẠI CAFE PHIM PH&Ograve;NG RI&Ecirc;NG TI&Ecirc;U CHUẨN ATVSTP</strong></p>\r\n\r\n<p>cafe phim ph&ograve;ng ri&ecirc;ng quan t&acirc;m&nbsp;đặc biệt tới vệ sinh an to&agrave;n thực phẩm, ch&uacute;ng t&ocirc;i nhập nguy&ecirc;n liệu&nbsp;đảm bảo chất lượng&nbsp;v&agrave; chế biến theo quy tr&igrave;nh an to&agrave;n v&agrave; lu&ocirc;n giữ trọn vị tươi ngon trong từng m&oacute;n&nbsp;ăn</p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"http://cafephim.vn/wp-content/uploads/2018/03/Untitled-design.png\" /></p>', '20.png', '2019-12-29 16:45:23', '2019-12-29 16:45:23'),
(2, 'Xem phim gia đình', '<p>&ldquo;C&oacute; người hỏi đ&acirc;u l&agrave; hạnh ph&uacute;c</p>\r\n\r\n<p>L&agrave; bạc tiền hay l&uacute;c xa hoa?&rdquo;</p>\r\n\r\n<p>D&ugrave; bộn bề c&ocirc;ng việc hay &aacute;p lực cuộc sống đến mấy, khi ở b&ecirc;n gia đ&igrave;nh, cả nh&agrave; c&ugrave;ng vui vẻ th&igrave; những mệt nhọc đều tan biến. Khi lập gia đ&igrave;nh, điều m&agrave; người ta mong đợi nhất c&oacute; lẽ l&agrave; cuối tuần, bố mẹ th&agrave;nh thơi, con c&aacute;i được nghỉ học, cả nh&agrave; c&ugrave;ng nhau ra ngo&agrave;i &ldquo;thay đổi kh&ocirc;ng kh&iacute;&rdquo;. Nhưng bạn c&ograve;n đang băn khoăn kh&ocirc;ng biết sẽ c&ugrave;ng những th&agrave;nh vi&ecirc;n trong gia đ&igrave;nh tận hưởng khoảng thời gian cuối tuần như thế n&agrave;o, ở đ&acirc;u th&igrave;</p>\r\n\r\n<p>&ldquo;C&oacute; người hỏi đ&acirc;u l&agrave; hạnh ph&uacute;c</p>\r\n\r\n<p>L&agrave; bạc tiền hay l&uacute;c xa hoa?&rdquo;</p>\r\n\r\n<p>D&ugrave; bộn bề c&ocirc;ng việc hay &aacute;p lực cuộc sống đến mấy, khi ở b&ecirc;n gia đ&igrave;nh, cả nh&agrave; c&ugrave;ng vui vẻ th&igrave; những mệt nhọc đều tan biến. Khi lập gia đ&igrave;nh, điều m&agrave; người ta mong đợi nhất c&oacute; lẽ l&agrave; cuối tuần, bố mẹ th&agrave;nh thơi, con c&aacute;i được nghỉ học, cả nh&agrave; c&ugrave;ng nhau ra ngo&agrave;i &ldquo;thay đổi kh&ocirc;ng kh&iacute;&rdquo;. Nhưng bạn c&ograve;n đang băn khoăn kh&ocirc;ng biết sẽ c&ugrave;ng những th&agrave;nh vi&ecirc;n trong gia đ&igrave;nh tận hưởng khoảng thời gian cuối tuần như thế n&agrave;o, ở đ&acirc;u th&igrave; CINEMA COFFEE l&agrave; một lựa chọn kh&ocirc;ng thể hợp l&iacute; hơn.</p>\r\n\r\n<p><strong>C&ograve;n g&igrave; tuyệt vời hơn khi cả nh&agrave; c&ugrave;ng nhau xem phim</strong></p>\r\n\r\n<p>Khi c&ograve;n y&ecirc;u nhau, hạnh ph&uacute;c l&agrave; khi ta nắm tay c&ugrave;ng v&agrave;o rạp xem những bộ phim t&igrave;nh cảm l&atilde;ng mạn. Khi lấy nhau, c&oacute; con, cuối tuần đi xem phim vẫn l&agrave; điều ch&uacute;ng ta mong muốn nhưng hạnh ph&uacute;c l&agrave; khi được b&ecirc;n c&aacute;c con, nh&igrave;n ch&uacute;ng vui vẻ, chơi đ&ugrave;a, cười gi&ograve;n tan khi xem phim. Th&ecirc;m nữa, rạp chiếu cũng hạn chế trẻ em, suất chiếu cũng kh&ocirc;ng phải l&uacute;c n&agrave;o cũng ph&ugrave; hợp. Nhưng cuối tuần, đưa vợ con đến CINEMA COFFEE, m&agrave;n ảnh rộng 150 inch, độ ph&acirc;n giải Full HD, &acirc;m thanh v&ograve;m 5.1 sống động th&igrave; chẳng kh&aacute;c n&agrave;o rạp phim l&agrave; của nh&agrave; m&igrave;nh, thảnh thơi, kh&ocirc;ng c&ograve;n lo ngại phiền h&agrave; một ai.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Bạn đang lo m&agrave;n h&igrave;nh lớn hại mắt c&aacute;c con ư</strong>? Kh&ocirc;ng hề, v&igrave; ph&ograve;ng chiếu phim của CINEMA COFFEE kh&ocirc;ng bao giờ nhỏ hơn 20 m2, ghế ngồi thiết kế thoải m&aacute;i, b&agrave;i tr&iacute; hợp l&iacute;, so với tỉ lệ m&agrave;n 16:9 kh&ocirc;ng hề ảnh hưởng đến mắt của trẻ.</p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"http://cafephim.vn/wp-content/uploads/2017/05/man-chieu-phim-hd-cafe-phim-phong-rieng.jpg\" /></p>\r\n\r\n<p><strong>Bạn đang lo kh&ocirc;ng c&oacute; phim hay ư</strong>? Qu&ecirc;n ngay điều đ&oacute; đi, v&igrave; kho phim tại CINEMA COFFEE c&oacute; hơn 3000 bộ, cập nhật h&agrave;ng tuần v&agrave; tất cả đều c&oacute; bản quyền n&ecirc;n chất lượng h&igrave;nh ảnh, &acirc;m thanh miễn ch&ecirc;. Đ&ocirc;ng t&acirc;y, kim cổ, đủ thể loại, kinh điển hay bom tấn mới nhất đều c&oacute;. C&oacute; những l&uacute;c bạn muốn xem lại một bộ phim t&acirc;m đắc từ rất l&acirc;u rồi nhưng rạp chiếu phim l&agrave;m g&igrave; c&oacute;, chỉ c&oacute; tại CINEMA COFFEE &ndash; xem phim t&ugrave;y chọn theo y&ecirc;u cầu th&ocirc;i.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Bạn cũng kh&ocirc;ng cần băn khoăn về tiện nghi đ&acirc;u nh&eacute;</strong>. K&iacute;ch thước ph&ograve;ng rộng, sạch sẽ, s&agrave;n gỗ, ghế da, thảm l&ocirc;ng, điều h&ograve;a 2 chiều bất chấp thời tiết. Con trẻ c&oacute; thể chơi đ&ugrave;a, lăn lộn thỏa th&iacute;ch. Trong l&uacute;c xem, trẻ con rất hay ngủ, bạn c&oacute; thể đặt con l&ecirc;n ghế salon d&agrave;i &ecirc;m &aacute;i. C&oacute; bất cứ y&ecirc;u cầu n&agrave;o, bạn chỉ cần gọi nh&acirc;n vi&ecirc;n qua điện thoại đặt sẵn trong ph&ograve;ng để nhận được phục vụ nhanh nhất.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"http://cafephim.vn/wp-content/uploads/2017/05/phong-chieu-cafe-phim-ha-dong.jpg\" /></p>\r\n\r\n<p><em>Kh&ocirc;ng gian đơn giản m&agrave; tiện nghi, thoải m&aacute;i của CINEMA COFFEE</em></p>\r\n\r\n<p><strong>Thực đơn &ndash; kh&ocirc;ng chỉ l&agrave; qu&aacute;n c&agrave; ph&ecirc;</strong></p>\r\n\r\n<p>Bỏng ng&ocirc; &ndash; nước ngọt, nước c&oacute; ga ở rạp chiếu phim c&oacute; l&agrave; g&igrave; khi so với c&aacute;c qu&aacute;n c&agrave; ph&ecirc; th&ocirc;ng thường th&igrave; CINEMA COFFEE đ&atilde; hơn đứt. Sữa chua, sinh tố, tr&agrave; sữa cho con; nước &eacute;p, đồ uống đ&aacute; xay, vang ngọt thơm thơn cho mẹ; c&aacute;c loại c&agrave; ph&ecirc; đậm vị đ&uacute;ng điệu, bia l&agrave;m thủ c&ocirc;ng chất ri&ecirc;ng, hảo hạng, cho bố. Mỗi loại đều c&oacute; những lựa chọn cho hương vị kh&aacute;c biệt t&ugrave;y sở th&iacute;ch của bạn v&agrave; gia đ&igrave;nh bạn. Đồ ăn cũng phong ph&uacute; kh&ocirc;ng k&eacute;m, snack, nem chua r&aacute;n, c&aacute;c loại hạt. Đặc biệt CINEMA COFFEE c&ograve;n c&oacute; pizza, humberger, m&igrave; &Yacute;, c&aacute;c loại b&aacute;nh, c&aacute;c loại đồ ăn k&egrave;m thức uống c&oacute; cồn ph&ugrave; hợp cho tất cả mọi người trong nh&agrave;.</p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"http://cafephim.vn/wp-content/uploads/2016/08/do-an-do-uong-cafe-phim-cine-2017-1.jpg\" /></p>\r\n\r\n<p><strong>Dịch vụ đặc biệt:</strong></p>\r\n\r\n<p>Tại CINEMA COFFEE, ch&uacute;ng t&ocirc;i c&oacute; dịch vụ hỗ trợ tổ chức sinh nhật, kỉ niệm, li&ecirc;n hoan. C&aacute;c event planner sẽ c&ugrave;ng với c&aacute;c bạn l&ecirc;n &yacute; tưởng v&agrave; triển khai theo mong muốn v&agrave; sỏ th&iacute;ch của c&aacute;c bạn.</p>\r\n\r\n<p>Sẽ l&agrave; một m&oacute;n qu&agrave; đ&aacute;ng nhớ bạn d&agrave;nh cho con khi tổ chức sinh nhật cho b&eacute; tại CINEMA COFFEE. B&eacute; được xem bộ phim m&igrave;nh th&iacute;ch, thổi nến, cắt b&aacute;nh trong kh&ocirc;ng gian như cổ t&iacute;ch, th&ecirc;m một m&oacute;n qu&agrave; bất ngờ chắc chắn sẽ khiến b&eacute; th&iacute;ch th&uacute; v&ocirc; c&ugrave;ng, nhớ m&atilde;i kh&ocirc;ng qu&ecirc;n.</p>\r\n\r\n<p><strong>Li&ecirc;n hệ đặt ph&ograve;ng:&nbsp;<strong>&nbsp;0333831436</strong></strong></p>\r\n\r\n<p>Hoặc đặt ph&ograve;ng online để nhận ngay ưu đ&atilde;i</p>', '12.png', '2019-12-29 16:51:18', '2019-12-29 16:52:01'),
(3, 'Tổ chức sự kiện lãng mạn', '<p><img alt=\"\" class=\"w-100\" src=\"https://cafephim.vn/wp-content/uploads/2016/08/Cafe_phim_CINE_CAFE_su_kien_lang_man.jpg\" /></p>\r\n\r\n<h2><a href=\"https://cafephim.vn/dich-vu/to-chuc-su-kien-lang-man/\">Tổ chức sự kiện l&atilde;ng mạn l&agrave; g&igrave;?</a></h2>\r\n\r\n<p>Kh&ocirc;ng gian xem phim v&agrave; được trang tr&iacute; l&atilde;ng mạn để&nbsp;<strong>tổ chức sự kiện l&atilde;ng mạn</strong>&nbsp;sẽ l&agrave; điều bất ngờ d&agrave;nh tặng cho người ấy. Sự kết hợp tinh tế giữa Kh&ocirc;ng gian, thời gian, h&igrave;nh ảnh v&agrave; &acirc;m thanh l&agrave; những yếu tố quyết định gi&uacute;p bạn c&oacute; thể tự tin n&oacute;i những lời y&ecirc;u thương.</p>\r\n\r\n<p>Rất nhiều chủ đề Sự kiện l&atilde;ng mạn đ&atilde; được CINEMA COFFEE&nbsp;tổ chức th&agrave;nh c&ocirc;ng v&agrave; mang lại nhiều &yacute; nghĩa như sinh nhật, kỷ niệm đặc biệt, tỏ t&igrave;nh, cầu h&ocirc;n ...v...v&nbsp;</p>\r\n\r\n<p><strong>MỘT SỐ H&Igrave;NH ẢNH THỰC TẾ FEED BACK TỪ KH&Aacute;CH H&Agrave;NG:</strong></p>\r\n\r\n<ul>\r\n	<li>&nbsp;</li>\r\n	<li>\r\n	<p><img alt=\"\" class=\"w-100\" src=\"https://cafephim.vn/wp-content/uploads/2019/07/63157371_10217399863126177_5807713227861131264_n-1.jpg\" /></p>\r\n	</li>\r\n	<li>\r\n	<p><img alt=\"\" class=\"w-100\" src=\"https://cafephim.vn/wp-content/uploads/2019/08/69274802_2476915629196434_3064929580579028992_o.jpg\" /></p>\r\n	</li>\r\n	<li>\r\n	<p><img alt=\"\" class=\"w-100\" src=\"https://cafephim.vn/wp-content/uploads/2019/10/71579339_2976063489285876_5033287636064665600_o.jpg\" /></p>\r\n	</li>\r\n	<li>\r\n	<p><img alt=\"\" class=\"w-100\" src=\"https://cafephim.vn/wp-content/uploads/2019/10/71655379_1128382250685794_3039170570055843840_o-1.jpg\" /></p>\r\n	</li>\r\n	<li>\r\n	<p><img alt=\"\" class=\"w-100\" src=\"https://cafephim.vn/wp-content/uploads/2016/08/to_chuc_su_kien_lang_man_Cine_Cafe-15.jpg\" /></p>\r\n	</li>\r\n	<li>\r\n	<p><img alt=\"\" class=\"w-100\" src=\"https://cafephim.vn/wp-content/uploads/2016/08/to_chuc_su_kien_lang_man_Cine_Cafe-2.jpg\" /></p>\r\n	</li>\r\n	<li>\r\n	<p><img alt=\"\" class=\"w-100\" src=\"https://cafephim.vn/wp-content/uploads/2016/08/to_chuc_su_kien_lang_man_Cine_Cafe-6.jpg\" /></p>\r\n	</li>\r\n	<li>\r\n	<p><img alt=\"\" class=\"w-100\" src=\"https://cafephim.vn/wp-content/uploads/2016/08/to_chuc_su_kien_lang_man_Cine_Cafe-18.jpg\" /></p>\r\n	</li>\r\n	<li>\r\n	<p><img alt=\"\" class=\"w-100\" src=\"https://cafephim.vn/wp-content/uploads/2016/08/to_chuc_su_kien_lang_man_Cine_Cafe-14.jpg\" /></p>\r\n	</li>\r\n	<li>\r\n	<p><img alt=\"\" class=\"w-100\" src=\"https://cafephim.vn/wp-content/uploads/2016/08/to_chuc_su_kien_lang_man_Cine_Cafe-6.jpg\" /></p>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>C&Aacute;C MẪU TRANG TR&Iacute; TỔ CHỨC SỰ KIỆN L&Atilde;NG MẠN:</strong></p>\r\n\r\n<p>CINEMA COFFEE giới thiệu đến bạn những mẫu trang tr&iacute; ph&ograve;ng chiếu phim đẹp nhất từ nến v&agrave; hoa hồng được ch&uacute;ng t&ocirc;i chọn lọc qua nhiều năm kinh nghiệm:</p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"http://cafephim.vn/wp-content/uploads/2018/03/set_don.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Những mẫu đặc biệt d&agrave;nh cho dịp tổ chức sinh nhật:</p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"http://cafephim.vn/wp-content/uploads/2018/03/sen_don_2.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>C&Aacute;C PHỤ KIỆN C&Oacute; THỂ CHỌN TH&Ecirc;M ĐỂ KH&Ocirc;NG GIAN L&Atilde;NG MẠN HƠN NỮA:&nbsp;</strong></p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"https://cafephim.vn/wp-content/uploads/2019/10/WEB_PHU-KIEN-2019-03.jpg\" /></p>\r\n\r\n<p><strong>LỰA CHỌN HẤP DẪN VỚI C&Aacute;C COMBO SETUP TRỌN G&Oacute;I (Đ&Atilde; BAO GỒM TRỌN G&Oacute;I XEM PHIM):</strong></p>\r\n\r\n<p>Với c&aacute;c combo trọn g&oacute;i, chi ph&iacute; d&agrave;nh cho tổ chức sự kiện sẽ được tối ưu nhất cho c&aacute;c bạn</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>TỔ CHỨC SỰ KIỆN L&Atilde;NG MẠN&nbsp;BẤT NGỜ</strong></p>\r\n\r\n<p>C&ograve;n g&igrave; tự nhi&ecirc;n hơn khi bạn chủ động sắp xếp một buổi xem phim với c&ocirc;/anh ấy, chỉ kh&aacute;c đi xem phim ở rạp l&agrave; bạn c&oacute; thể thoải m&aacute;i chọn lựa phim v&agrave; thời gian chiếu phim bạn chủ động sắp xếp. Ngo&agrave;i ra c&oacute; thể tự chọn rất nhiều đồ ăn v&agrave; đồ uống hấp dẫn.</p>\r\n\r\n<p>V&agrave; Mọi kế hoạch được ch&uacute;ng t&ocirc;i giữ b&iacute; mật ho&agrave;n to&agrave;n v&agrave; ch&iacute;nh bạn l&agrave; người trong cuộc sẽ bật m&iacute; bắt đầu một buổi xem phim l&atilde;ng mạn, ho&agrave;n hảo.</p>\r\n\r\n<p><strong>&Yacute; TƯỞNG TỔ CHỨC SỰ KIỆN L&Atilde;NG MẠN&nbsp;CỦA BẠN</strong></p>\r\n\r\n<p>Ngo&agrave;i những &yacute; tưởng trang tr&iacute; cơ bản m&agrave; CINEMA COFFEE cung cấp dưới đ&acirc;y, c&aacute;c bạn ho&agrave;n to&agrave;n c&oacute; thể đưa ra &yacute; tưởng ri&ecirc;ng v&agrave; trao đổi với ch&uacute;ng t&ocirc;i để ph&ugrave; hợp với mục đ&iacute;ch của bạn nhất.</p>\r\n\r\n<p><strong>NHỮNG BỘ PHIM L&Atilde;NG MẠN PH&Ugrave; HỢP</strong></p>\r\n\r\n<p>CINEMA COFFEE đ&atilde; d&agrave;y c&ocirc;ng tuyển chọn danh s&aacute;ch những bộ phim h&agrave;i hước, l&atilde;ng mạn được y&ecirc;u th&iacute;ch tr&ecirc;n to&agrave;n thế giới. Ch&uacute;ng t&ocirc;i sẽ lắng nghe v&agrave; tư vấn cho c&aacute;c bạn những bộ phim ph&ugrave; hợp nhất với c&acirc;u chuyện của c&aacute;c cặp đ&ocirc;i&nbsp; hay ph&ugrave; hợp với th&ocirc;ng điệp m&agrave; ch&agrave;ng trai (c&ocirc; g&aacute;i) muốn gửi đến nửa kia của m&igrave;nh để đạt hiệu ứng t&acirc;m l&yacute; tuyệt vời, thăng hoa v&agrave; đồng cảm. Tất cả l&agrave;m n&ecirc;n một buổi xem phim th&agrave;nh c&ocirc;ng, th&uacute; vị v&agrave; đ&aacute;ng nhớ.</p>\r\n\r\n<h3>Dịch vụ tổ chức sự kiện l&atilde;ng mạn&nbsp;tinh tế v&agrave; chu đ&aacute;o</h3>\r\n\r\n<p>CINEMA COFFEE sẵn s&agrave;ng hỗ trợ bạn chu đ&aacute;o nhất để c&oacute; một buổi xem phim l&atilde;ng mạn, bất ngờ v&agrave; &yacute; nghĩa</p>\r\n\r\n<p>&nbsp;&nbsp;Mang lại cho bạn kh&ocirc;ng gian phim tuyệt đẹp&nbsp;<br />\r\n&nbsp; Nơi cảm x&uacute;c thăng hoa<br />\r\n&nbsp; Nơi c&oacute; thể n&oacute;i những lời từ tr&aacute;i tim<br />\r\n&nbsp;&nbsp;Nơi l&agrave;m ấm những kỷ niệm tuyệt vời</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:2px; position:absolute; top:22928.8px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', '18.png', '2019-12-29 16:54:09', '2019-12-29 16:58:06'),
(4, 'Tổ chức sinh nhật', '<p>&Yacute; tưởng mới lạ để c&oacute; buổi<strong>&nbsp;tổ chức sinh nhật</strong>&nbsp;th&uacute; vị b&ecirc;n bạn b&egrave;. Đ&oacute; l&agrave; một buổi tổ chức&nbsp;sinh nhật được thỏa th&iacute;ch h&ograve; h&eacute;t khi c&ugrave;ng bạn b&egrave; xem một bộ phim kinh dị hay tự nhi&ecirc;n vui đ&ugrave;a, b&agrave;n t&aacute;n xung quanh một bộ phim h&agrave;i hước... &nbsp;v&agrave; kh&ocirc;ng thể thiếu những m&oacute;n ăn, đồ uống cực hấp dẫn.</p>\r\n\r\n<p>Tại <strong>Cinema Coffee</strong>&nbsp;c&oacute; những ph&ograve;ng ri&ecirc;ng vừa d&ugrave;ng để chiếu phim vừa được trang tr&iacute; l&atilde;ng mạn để bạn c&oacute; thể kết hợp tổ chức sinh nhật với kh&ocirc;ng gian&nbsp;đủ cho từ 2&nbsp;đến 20 người.</p>\r\n\r\n<p>Với phim hay, m&oacute;n ăn ngon, đồ uống th&igrave; khỏi phải ch&ecirc;, bạn c&oacute; thể đặt ph&ograve;ng trang tr&iacute; theo c&aacute;ch của bạn, đặt b&aacute;nh v&agrave; c&ograve;n c&oacute; cả nến v&agrave; rượu vang nữa. Một buổi tổ chức sinh nhật như vậy thật tuyệt vời phải kh&ocirc;ng?&nbsp;&nbsp;&nbsp;<img alt=\"\" class=\"w-100\" src=\"https://cafephim.vn/wp-content/uploads/2019/07/52410477_2349013211986677_2475141179683897344_o.jpg\" />&nbsp;&nbsp;&nbsp;<img alt=\"\" class=\"w-100\" src=\"https://cafephim.vn/wp-content/uploads/2019/07/54524702_2323539931252328_4681703795057491968_o.jpg\" />&nbsp;&nbsp;<img alt=\"\" class=\"w-100\" src=\"https://cafephim.vn/wp-content/uploads/2019/07/66012048_1865545443590324_690871293725114368_o.jpg\" />&nbsp;<img alt=\"\" class=\"w-100\" src=\"https://cafephim.vn/wp-content/uploads/2019/07/65910196_1865543976923804_7073943013482823680_o.jpg\" />&nbsp;&nbsp;<img alt=\"\" class=\"w-100\" src=\"https://cafephim.vn/wp-content/uploads/2019/07/65651480_1865543146923887_213826462954815488_o.jpg\" /></p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"http://cafephim.vn/wp-content/uploads/2018/03/20776555_2014976075390394_271089132064838837_o.jpg\" /></p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"https://cafephim.vn/wp-content/uploads/2019/07/54523414_2323539954585659_1777536408030806016_o.jpg\" />&nbsp;&nbsp;&nbsp;<img alt=\"\" class=\"w-100\" src=\"https://cafephim.vn/wp-content/uploads/2019/07/65621323_10217399853405934_6583575572117454848_n.jpg\" /></p>\r\n\r\n<h3>Tổ chức sinh nhật phải vậy mới vui!</h3>\r\n\r\n<p>Tổ chức bữa tiệc sinh nhật tưng bừng b&ecirc;n bạn b&egrave;, cực vui cực thoải m&aacute;i m&agrave; chi ph&iacute; lại rất hợp l&yacute;. Đ&uacute;ng ti&ecirc;u chi &quot;Ngon, bổ, rẻ, sang&quot; nh&eacute; ^^</p>\r\n\r\n<p>&nbsp;&nbsp;Ph&ograve;ng chiếu thoải m&aacute;i cho buổi tổ chức sinh nhật&nbsp;dưới 20 người<br />\r\n&nbsp; Cine Cafe tuyển chọn list phim h&agrave;i hước hoặc kinh dị rất ph&ugrave; hợp với xem nh&oacute;m, tha hồ h&ograve; h&eacute;t<br />\r\n&nbsp; Đồ uống, đồ ăn tại Cine Cafe rất trẻ trung, đa dạng v&agrave; kh&ocirc;ng k&eacute;m phần hấp dẫn<br />\r\n&nbsp; Vui vẻ thỏa th&iacute;ch m&agrave; kh&ocirc;ng lo ảnh hưởng mọi người xung quanh</p>', '26.png', '2019-12-29 17:01:30', '2019-12-29 17:01:30'),
(5, 'Tổ chức Offline', '<ul>\r\n	<li>Ưu đ&atilde;i cực khủng cho nh&oacute;m 5 - 7 người !!!</li>\r\n</ul>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"http://cafephim.vn/wp-content/uploads/2018/05/xem_phim_nhom_cafe_phim_hanoi-05.jpg\" /></p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"http://cafephim.vn/wp-content/uploads/2018/05/xem_phim_nhom_cafe_phim_hanoi-06.jpg\" /></p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"http://cafephim.vn/wp-content/uploads/2018/06/haha.png\" /></p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"http://cafephim.vn/wp-content/uploads/2018/06/21-04.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>OFFLINE FAN CLUB</strong></p>\r\n\r\n<p>- Offline Football Fan Club<br />\r\n- Offline V-pop Fan Club<br />\r\n- Offline K-Pop Fan Club</p>\r\n\r\n<p><strong>OFFLINE TEAM GAME</strong></p>\r\n\r\n<p>- Offline Team Game<br />\r\n- Live Stream Gamming</p>\r\n\r\n<p><img alt=\"offline-hopnhom-cine-cafe-phim\" class=\"w-100\" src=\"https://cafephim.vn/wp-content/uploads/2015/01/offline-hopnhom-cine-cafe-phim.jpg\" /></p>', '6.png', '2019-12-29 17:07:31', '2019-12-29 17:07:31'),
(6, 'Tổ chức hội thảo, học nhóm', '<p><strong>TỔ CHỨC HỘI THẢO NH&Oacute;M</strong></p>\r\n\r\n<p>Tổ chức hội thảo nh&oacute;m dưới 20 người, c&oacute; m&aacute;y chiếu chuy&ecirc;n nghiệp, hỗ trợ kỹ thuật tr&igrave;nh chiếu</p>\r\n\r\n<p><strong>TỔ CHỨC HỌC NH&Oacute;M</strong></p>\r\n\r\n<p>Cinema Coffee c&oacute; c&aacute;c ph&ograve;ng học nh&oacute;m dưới 20 người, c&oacute; m&aacute;y chiếu chuy&ecirc;n nghiệp, hỗ trợ kỹ thuật tr&igrave;nh chiếu</p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"http://cafephim.vn/wp-content/uploads/2018/05/hoc_nhom_cafe_phim_cine_cafe-01.jpg\" /></p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"http://cafephim.vn/wp-content/uploads/2018/05/hoc_nhom_cafe_phim_cine_cafe-03.jpg\" /><img alt=\"\" class=\"w-100\" src=\"http://cafephim.vn/wp-content/uploads/2018/05/hoc_nhom_cafe_phim_cine_cafe-02.jpg\" /></p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"http://cafephim.vn/wp-content/uploads/2018/05/hoc_nhom_cafe_phim_cine_cafe-04.jpg\" /></p>', '1.png', '2019-12-29 17:11:42', '2019-12-29 17:11:42');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'MENU ĐỒ UỐNG – ĐỒ ĂN', '<p><img alt=\"\" class=\"w-100\" src=\"http://cafephim.vn/wp-content/uploads/2019/03/menu_do_uong_do_an_cafe_phim_ha_noi-02.jpg\" />&nbsp;<img alt=\"\" class=\"w-100\" src=\"http://cafephim.vn/wp-content/uploads/2019/03/menu_do_uong_do_an_cafe_phim_ha_noi-01.jpg\" />&nbsp;<img alt=\"\" class=\"w-100\" src=\"https://cafephim.vn/wp-content/uploads/2019/10/menu_do_an_cafe_phim_2019_10-01.jpg\" /></p>', '12.png', '2019-12-29 17:30:00', '2019-12-29 17:30:00'),
(2, 'COMBO XEM PHIM & ĂN UỐNG', '<p><img alt=\"\" class=\"w-100\" src=\"https://cafephim.vn/wp-content/uploads/2019/10/menu_do_an_cafe_phim_2019_10-02.jpg\" /></p>', '13.png', '2019-12-29 17:31:40', '2019-12-29 17:31:40'),
(3, 'KHUYẾN MÃI CỰC ĐẶC BIỆT', '<p><img alt=\"\" class=\"w-100\" src=\"http://cafephim.vn/wp-content/uploads/2019/03/cafe_phim_ha_noi_mien_phi_do_uong_khi_dat_phong_online_2-02.jpg\" /></p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"https://cafephim.vn/wp-content/uploads/2019/10/u22_don_thu_xem_phim_99k_cafe_phim_ha_noi.jpg\" /></p>', '16.png', '2019-12-29 17:32:22', '2019-12-29 17:32:22');

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
(3, '2019_12_21_090636_create_agencies_table', 1),
(4, '2019_12_21_090649_create_extensions_table', 1),
(5, '2019_12_21_090729_create_menus_table', 1),
(6, '2019_12_21_090730_create_movie_categories_table', 1),
(7, '2019_12_21_090743_create_movies_table', 1),
(8, '2019_12_21_090809_create_news_table', 1),
(9, '2019_12_21_090905_create_statuses_table', 1),
(10, '2019_12_21_090906_create_room_orders_table', 1),
(11, '2019_12_21_091004_create_room_price_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movie_category_id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `national` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imdb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trailer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `movie_category_id`, `content`, `image`, `time`, `year`, `national`, `imdb`, `trailer`, `created_at`, `updated_at`) VALUES
(1, 'Iron Man (2008)', 1, '<p>Tony Stark vừa l&agrave; chủ tập đo&agrave;n c&ocirc;ng nghệ, vừa l&agrave; một tay chơi kỳ dị. Trong chuyến thị s&aacute;t Afghanistan, &ocirc;ng bị nh&oacute;m khủng bố bắt c&oacute;c. Ch&uacute;ng đ&ograve;i Tony chế tạo thứ vũ kh&iacute; hủy diệt để tấn c&ocirc;ng nước Mỹ.<br />\r\n<br />\r\nNhận ra sự thật phũ ph&agrave;ng rằng, những vũ kh&iacute; do m&igrave;nh chế tạo đang quay ngược lại tấn c&ocirc;ng ch&iacute;nh m&igrave;nh, Tony bắt tay chế tạo bộ gi&aacute;p c&ocirc;ng nghệ cao. Tẩu tho&aacute;t khỏi nơi giam cầm, Tony trở th&agrave;nh đại diện c&ocirc;ng l&yacute; dưới biệt danh Người sắt. Trong khi đ&oacute;, người đồng sự trong tập đo&agrave;n Stark &acirc;m mưu lật đổ Tony.<br />\r\n<br />\r\nBộ phim mở ra c&acirc;u chuyện trong tương lai về nh&oacute;m si&ecirc;u anh h&ugrave;ng Avenger khi tổ chức b&iacute; mật SHIELD bắt đầu lộ diện.</p>', 'poster.medium.jpg', 120, 2008, 'Mỹ', '9.8', 'https://www.youtube.com/embed/8ugaeA-nMTc', '2019-12-29 17:38:11', '2019-12-29 17:38:11'),
(2, 'Avengers 2: Age of Ultron (2015)', 1, '<p>Trong phần n&agrave;y, biệt đội si&ecirc;u anh h&ugrave;ng của ch&uacute;ng ta sẽ phải chiến đấu với binh đo&agrave;n robot được biết đến với c&aacute;i t&ecirc;n l&agrave; Ultron.<br />\r\n&nbsp;</p>\r\n\r\n<p><img alt=\"Biệt đội siêu anh hùng 2: Đế chế Ultron - Avengers 2: Age of Ultron\" class=\"w-100\" src=\"http://static.phimmoi.net/film/1493/preview.medium.jpg\" /></p>', 'poster.medium (1).jpg', 120, 2015, 'Mỹ', '9.7', 'https://www.youtube.com/embed/tmeOjFno6Do', '2019-12-29 17:40:24', '2019-12-29 17:40:24'),
(3, 'Big Hero 6 (2014)', 2, '<p>C&acirc;u chuyện diễn ra tại một th&agrave;nh phố hư cấu c&oacute; t&ecirc;n l&agrave; San Fransokyo (t&ecirc;n viết tắt của 2 th&agrave;nh phố San Francisco của Mỹ v&agrave; Tokyo của Nhật Bản). Đ&oacute; l&agrave; nơi ở của cậu b&eacute; thần đồng Hiro Hamada c&ugrave;ng với một người bạn hết sức đặc biệt l&agrave; Baymax. Baymax tr&ocirc;ng giống như một người tuyết m&agrave;u trắng, đ&acirc;y l&agrave; ph&aacute;t minh của Tadashi &ndash; anh trai Hiro. Baymax được tạo ra nhằm mục đ&iacute;ch phục vụ cho sức khỏe của con người. Với sự th&ocirc;ng minh của Hiro, cậu nh&oacute;c đ&atilde; chế tạo ra c&aacute;c c&ocirc;ng cụ chiến đấu cho biệt đội si&ecirc;u anh h&ugrave;ng với sự đồng h&agrave;nh của 5 th&agrave;nh vi&ecirc;n c&ograve;n lại l&agrave; Baymax, Wasabi, Go Go, Fred v&agrave; Honey Lemon. Họ c&ugrave;ng điều tra về kẻ giấu mặt &ldquo;kabuki&rdquo; đ&atilde; đ&aacute;nh cắp ph&aacute;t minh &ldquo;bọ si&ecirc;u nhỏ&rdquo; của Hiro v&agrave; ngăn chặn 1 thảm họa đối với th&agrave;nh phố.<br />\r\n&nbsp;</p>\r\n\r\n<p><img alt=\"Biệt Đội Big Hero 6 - Big Hero 6\" class=\"w-100\" src=\"http://static.phimmoi.net/post/2014/11/25/2632672-cartoon-spaceship-wallpaper-2560x1600.jpg\" /></p>\r\n\r\n<p><br />\r\n<br />\r\n<br />\r\nSan Fransokyo l&agrave; sự kết hợp giữa văn h&oacute;a v&agrave; kiến tr&uacute;c Đ&ocirc;ng-T&acirc;y. Những địa danh nổi tiếng như Cầu Cổng V&agrave;ng của San Fancisco cũng được điều chỉnh một số chi tiết để ph&ugrave; hợp với nội dung nhưng đồng thời kh&aacute;n giả vẫn thấy được n&eacute;t hiện đại của Mỹ v&agrave; n&eacute;t truyền thống của văn h&oacute;a &Aacute; Đ&ocirc;ng. Những ng&ocirc;i nh&agrave; cổ, đ&egrave;n lồng v&agrave; hoa anh đ&agrave;o trong th&agrave;nh phố giả tưởng, đặc biệt những chuyến t&agrave;u Shinkansen đều được đưa l&ecirc;n phim v&agrave; mang đậm dấu ấn đặc trưng của đất nước Nhật Bản.</p>', 'poster.medium (2).jpg', 121, 2014, 'Mỹ', '9.9', 'https://www.youtube.com/embed/bT8qmoCgxZg', '2019-12-29 17:41:57', '2019-12-29 17:41:57'),
(4, 'Guardians of the Galaxy (2014)', 1, '<p>Phim n&oacute;i về một phi c&ocirc;ng phản lực được bị mắc kẹt trong kh&ocirc;ng gian, v&agrave; anh phải đo&agrave;n kết một nh&oacute;m người ngo&agrave;i h&agrave;nh tinh để tạo th&agrave;nh một đội qu&acirc;n đủ khả năng đ&aacute;nh bại c&aacute;c mối đe dọa từ vũ trụ. Phim c&oacute; sự tham gia diễn xuất của Karen Gillan, Bradley Cooper, Zoe Saldana&hellip; v&agrave; sự chỉ đạo của đạo diễn James Gunn.</p>', 'poster.medium (3).jpg', 130, 2014, 'Mỹ', '9.7', 'https://www.youtube.com/embed/2XltzyLcu0g', '2019-12-29 17:42:45', '2019-12-29 17:42:45'),
(5, 'Ant-Man (2015)', 1, '<p>Ant-Man kể về c&acirc;u chuyện của một người đ&agrave;n &ocirc;ng t&ecirc;n l&agrave; Scott Lang, c&oacute; khả năng thu nhỏ về k&iacute;ch thước nhưng lại tăng sức mạnh. Điều n&agrave;y buộc Scott Lang phải đ&oacute;n nhận yếu tố &quot;anh h&ugrave;ng&quot; trong m&igrave;nh v&agrave; gi&uacute;p cố vấn l&agrave; Tiến sĩ Hank Pym bảo vệ b&iacute; mật đằng sau bộ trang phục Ant-Man, tho&aacute;t khỏi một mối đe dọa khủng khiếp. Đối mặt với những r&agrave;o cản khổng lồ, Scott Lang v&agrave; Hank Pym phải l&ecirc;n kế hoạch ho&agrave;n th&agrave;nh một vụ cướp để c&oacute; thể cứu thế giới.<br />\r\n&nbsp;</p>\r\n\r\n<p><img alt=\"Người Kiến - Ant-Man\" class=\"w-100\" src=\"http://static.phimmoi.net/post/2015/06/08/nguoi-kien-2.jpg\" /></p>', 'poster.medium (4).jpg', 121, 2015, 'Mỹ', '8.7', 'https://www.youtube.com/embed/QfOZWGLT1JM', '2019-12-29 17:44:06', '2019-12-29 17:44:06'),
(6, 'Deadpool (2016)', 1, '<p>Deadpool xoay quanh anh ch&agrave;ng Wade Wilson, một người bị ung thư v&ocirc; phương cứu chữa được th&iacute; nghiệm trở th&agrave;nh dị nh&acirc;n với khả năng phục hồi si&ecirc;u tốc giống Wolverine, tuy nhi&ecirc;n Deadpool được rất nhiều fan h&acirc;m mộ biết đến như l&agrave; một nh&acirc;n vật cực kỳ h&agrave;i hước với c&aacute;i mồm kh&ocirc;ng bao giờ ngừng n&oacute;i nhảm của hắn.</p>', 'poster.medium (5).jpg', 115, 2016, 'Mỹ', '8.9', 'https://www.youtube.com/embed/gtTfd6tISfw', '2019-12-29 17:45:06', '2019-12-29 17:45:06'),
(7, 'The Wolverine (2013)', 1, '<p>Marvel một lần nữa đưa đến cho kh&aacute;n giả c&acirc;u chuyện mới đầy hấp dẫn về ch&agrave;ng Người S&oacute;i Logan - si&ecirc;u anh h&ugrave;ng vốn được đ&ocirc;ng đảo kh&aacute;n giả y&ecirc;u mến. Được đặt sau mốc sự kiện của X-Men: The Last Stand, bộ phim d&otilde;i theo h&agrave;nh tr&igrave;nh của Logan lưu lạc tới đất nước Nhật Bản xa x&ocirc;i, nơi anh bị lạc l&otilde;ng ho&agrave;n to&agrave;n.<br />\r\nGặp lại một cố nh&acirc;n tại xứ mặt trời mọc, Logan nhận được một đề nghị c&oacute; thể khiến anh thay đổi ho&agrave;n to&agrave;n cuộc sống c&ocirc; độc: loại bỏ tất cả c&aacute;c năng lực để anh trở th&agrave;nh người thường. Giữa mu&ocirc;n tr&ugrave;ng nguy hiểm đến từ những kẻ th&ugrave; xung quanh, liệu anh ch&agrave;ng Người S&oacute;i c&oacute; từ bỏ sự bất tử của m&igrave;nh?</p>', 'poster.medium (6).jpg', 112, 2013, 'Mỹ', '8.6', 'https://www.youtube.com/embed/toLpchTUYk8', '2019-12-29 17:46:15', '2019-12-29 17:46:15'),
(8, 'Spider-Man: Homecoming (2017)', 1, '<p>Tạm biệt hai franchise về thời sinh vi&ecirc;n, Spider-Man: Homecoming sẽ lần đầu ti&ecirc;n đưa c&aacute;c kh&aacute;n giả đến với cuộc sống trung học của Peter Paker &ndash; si&ecirc;u anh h&ugrave;ng Người Nhện. Liệu một cậu b&eacute; chưa trưởng th&agrave;nh sẽ l&agrave;m thế n&agrave;o để c&acirc;n bằng cuộc sống b&igrave;nh thường v&agrave; tr&aacute;ch nhiệm của một anh h&ugrave;ng giải cứu thế giới.<br />\r\n<br />\r\nSau những sự kiện ở Captain America: Civil War, Peter Parker trở về cuộc sống thường nhật, tiếp tục l&agrave;m cậu học sinh trung học nh&uacute;t nh&aacute;t trong mắt bạn b&egrave;. Song song đ&oacute;, ch&agrave;ng thiếu ni&ecirc;n 15 tuổi vẫn c&oacute; thể l&agrave;m người h&ugrave;ng bảo vệ New York nhờ bộ gi&aacute;p do Tony Stark / Iron Man (Robert Downey Jr.) tặng cho v&agrave; nằm dưới sự gi&aacute;m s&aacute;t từ xa của Happy Hogan (Jon Favreau).</p>', 'poster.medium (7).jpg', 125, 2017, 'Mỹ', '9.6', 'https://www.youtube.com/embed/n9DwoQ7HWvI', '2019-12-29 17:46:52', '2019-12-29 17:46:52'),
(9, 'Black Panther (2018)', 1, '<p>Vương quốc Wakanda, qu&ecirc; hương của Black Panther/ T&#39;Challa hiện ra qua lời kể của một nh&acirc;n chứng sống s&oacute;t trở về. Đ&acirc;y l&agrave; quốc gia kh&aacute; kh&eacute;p k&iacute;n v&agrave; sở hữu lượng Vibranium lớn nhất tr&ecirc;n thế giới. Black Panther - người cầm quyền của Wakanda sở hữu bộ &aacute;o gi&aacute;p chống đạn v&agrave; m&oacute;ng vuốt sắc nhọn, anh được mi&ecirc;u tả l&agrave; &ldquo;người tốt với tr&aacute;i tim nh&acirc;n hậu&rdquo;.<br />\r\n<br />\r\nNhưng cũng ch&iacute;nh v&igrave; những đức t&iacute;nh tốt n&agrave;y m&agrave; Black Panther gặp kh&oacute; khăn khi kế thừa ngai v&agrave;ng sau khi vua cha băng h&agrave;. Đối mặt với sự phản bội v&agrave; hiểm nguy, vị vua trẻ phải tập hợp c&aacute;c đồng minh v&agrave; ph&aacute;t huy to&agrave;n bộ sức mạnh của Black Panther để đ&aacute;nh bại kẻ th&ugrave;, đem lại an b&igrave;nh cho nh&acirc;n d&acirc;n của m&igrave;nh.</p>', 'poster.medium (8).jpg', 122, 2018, 'Mỹ', '8.6', 'https://www.youtube.com/embed/xjDjIWPwcPU', '2019-12-29 17:47:30', '2019-12-29 17:47:30');

-- --------------------------------------------------------

--
-- Table structure for table `movie_categories`
--

CREATE TABLE `movie_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movie_categories`
--

INSERT INTO `movie_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Hành động', '2019-12-03 00:00:00', '2019-12-09 00:00:00'),
(2, 'Hoạt hình', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `type`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Cinema Coffe tuyển nhân viên phục vụ', 'Tuyển dụng', '<p>&nbsp;</p>\r\n\r\n<p>★★★ TUYỂN DỤNG★★★ CINE CAFE th&ocirc;ng b&aacute;o tuyển dụng nh&acirc;n vi&ecirc;n phục vụ<br />\r\n★ Mức lương: Lương cứng 2-3 triệu ( Chưa c&oacute; thưởng doanh thu)<br />\r\n★ M&ocirc; tả<br />\r\n&ndash; Phục vụ đồ ăn, nước uống theo y&ecirc;u cầu của kh&aacute;ch h&agrave;ng<br />\r\n&ndash; Giải đ&aacute;p c&aacute;c th&ocirc;ng tin kh&aacute;ch h&agrave;ng<br />\r\n&ndash; C&aacute;c c&ocirc;ng việc theo sự chỉ đạo của quản l&yacute;<br />\r\n&ndash; C&ocirc;ng t&aacute;c vệ sinh tại cửa h&agrave;ng<br />\r\n&ndash; Chi tiết c&ocirc;ng việc trao đổi trong buổi phỏng vấn</p>\r\n\r\n<p>★ Thời gian l&agrave;m việc: L&agrave;m việc theo ca<br />\r\nCa l&agrave;m việc: 7:30 AM &ndash; 3:00 PM; 3:00 PM &ndash; 10: PM<br />\r\n&ndash; Ca l&agrave;m việc theo sự sắp xếp của quản ly.</p>\r\n\r\n<p>★ Kỹ năng:<br />\r\n&ndash; Đ&atilde; c&oacute; kinh nghiệm l&agrave;m trong c&aacute;c qu&aacute;n caf&eacute;, thức ăn nhanh, cửa h&agrave;ng thực phẩm.<br />\r\n&ndash; Nam/nữ tr&ecirc;n 18 tuổi<br />\r\n&ndash; Ngoại h&igrave;nh dễ nh&igrave;n<br />\r\n&ndash; Kỹ năng giao tiếp tốt.<br />\r\n&ndash; Năng động, trung thực, nhiệt t&igrave;nh v&agrave; c&oacute; tr&aacute;ch nhiệm với c&ocirc;ng việc</p>\r\n\r\n<p>★ Tr&igrave;nh độ: Lao động phổ th&ocirc;ng<br />\r\n★ Thời gian thử việc: 2 tuần<br />\r\n★ Thời hạn nộp hồ sơ: 5/9/2020</p>\r\n\r\n<p>Địa chỉ nhận Hồ sơ: 166 X&atilde; Đ&agrave;n 2 (đường ven hồ Đắc Di)<br />\r\nĐiện thoại li&ecirc;n hệ: 0333831436<br />\r\nEmail: cinema-coffee@gmail.com</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-43px; position:absolute; top:28.1719px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', '30.png', '2019-12-29 17:53:59', '2019-12-29 17:56:02'),
(2, 'Tổ chức Sự Kiện Free Bàn Trang Trí', 'Khuyến mãi', '<p>COMBO 299K &ndash; 02 GIỜ PHIM &ndash; FREE B&Agrave;N TRANG TR&Iacute;</p>\r\n\r\n<p>Được sự ủng hộ của kh&aacute;ch iu, Cine quyết định tiếp tục k&eacute;o d&agrave;i th&ecirc;m thời gian của Combo 299k huyền thoại n&agrave;y đến 31/12/2019 như l&agrave; một m&oacute;n qu&agrave; ch&agrave;o đ&oacute;n năm mới 2020 đ&atilde; gần tới</p>\r\n\r\n<p>Những ai đ&atilde; tr&oacute;t &ldquo;miss&rdquo; combo n&agrave;y v&agrave;o dịp Gi&aacute;ng Sinh th&igrave; nhanh tay book lịch n&agrave;o, thực sự combo qu&aacute; sức đ&aacute;ng iu n&agrave;y kh&ocirc;ng n&ecirc;n bỏ lỡ đ&acirc;u ạhhhh, ad khuy&ecirc;n thật sự đấyyy<br />\r\n&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;<br />\r\nInbox liền tay cho tụi m&igrave;nh nh&eacute;<br />\r\n<a href=\"https://www.facebook.com/hashtag/cinecafe?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARAGCrdIZ74mAnLMzeOFTWeHU1AiAyko8euL3UPSBQuK2XpnlcXyLNAL9ORmlXb0ucOHnJDPMuPgi5zRL9-r0OpH4YGtAQSRBszQbQxySJHZg-SiQH-cqYgnPfgc2m0HpijBnoRYPcPZqUFJm_r8NwYbwNjZI5q6BcoYmr_BSPCGMEkODhhMEQ7IjxgXgKgMYKzCJYt9obvipWiv0ejGGuE3KQK2C8VlF-E3gONuBlD58GqaDhTSxSEtmi_cpuhir70Vr4o5vdgTYkYc7IrVamW1OXBuB-ubBQ&amp;__tn__=%2ANK-R\">#CinemaCoffee</a><br />\r\n<a href=\"https://www.facebook.com/hashtag/t%E1%BB%95ch%E1%BB%A9cs%E1%BB%B1ki%E1%BB%87n?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARAGCrdIZ74mAnLMzeOFTWeHU1AiAyko8euL3UPSBQuK2XpnlcXyLNAL9ORmlXb0ucOHnJDPMuPgi5zRL9-r0OpH4YGtAQSRBszQbQxySJHZg-SiQH-cqYgnPfgc2m0HpijBnoRYPcPZqUFJm_r8NwYbwNjZI5q6BcoYmr_BSPCGMEkODhhMEQ7IjxgXgKgMYKzCJYt9obvipWiv0ejGGuE3KQK2C8VlF-E3gONuBlD58GqaDhTSxSEtmi_cpuhir70Vr4o5vdgTYkYc7IrVamW1OXBuB-ubBQ&amp;__tn__=%2ANK-R\">#TổChứcSựKiện</a><br />\r\n<a href=\"https://www.facebook.com/hashtag/h%C3%A0n%E1%BB%99i?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARAGCrdIZ74mAnLMzeOFTWeHU1AiAyko8euL3UPSBQuK2XpnlcXyLNAL9ORmlXb0ucOHnJDPMuPgi5zRL9-r0OpH4YGtAQSRBszQbQxySJHZg-SiQH-cqYgnPfgc2m0HpijBnoRYPcPZqUFJm_r8NwYbwNjZI5q6BcoYmr_BSPCGMEkODhhMEQ7IjxgXgKgMYKzCJYt9obvipWiv0ejGGuE3KQK2C8VlF-E3gONuBlD58GqaDhTSxSEtmi_cpuhir70Vr4o5vdgTYkYc7IrVamW1OXBuB-ubBQ&amp;__tn__=%2ANK-R\">#H&agrave;Nội</a><br />\r\n<a href=\"https://www.facebook.com/hashtag/t%E1%BB%8Ft%C3%ACnh?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARAGCrdIZ74mAnLMzeOFTWeHU1AiAyko8euL3UPSBQuK2XpnlcXyLNAL9ORmlXb0ucOHnJDPMuPgi5zRL9-r0OpH4YGtAQSRBszQbQxySJHZg-SiQH-cqYgnPfgc2m0HpijBnoRYPcPZqUFJm_r8NwYbwNjZI5q6BcoYmr_BSPCGMEkODhhMEQ7IjxgXgKgMYKzCJYt9obvipWiv0ejGGuE3KQK2C8VlF-E3gONuBlD58GqaDhTSxSEtmi_cpuhir70Vr4o5vdgTYkYc7IrVamW1OXBuB-ubBQ&amp;__tn__=%2ANK-R\">#TỏT&igrave;nh</a><br />\r\n<a href=\"https://www.facebook.com/hashtag/gi%C3%A1ng_sinh?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARAGCrdIZ74mAnLMzeOFTWeHU1AiAyko8euL3UPSBQuK2XpnlcXyLNAL9ORmlXb0ucOHnJDPMuPgi5zRL9-r0OpH4YGtAQSRBszQbQxySJHZg-SiQH-cqYgnPfgc2m0HpijBnoRYPcPZqUFJm_r8NwYbwNjZI5q6BcoYmr_BSPCGMEkODhhMEQ7IjxgXgKgMYKzCJYt9obvipWiv0ejGGuE3KQK2C8VlF-E3gONuBlD58GqaDhTSxSEtmi_cpuhir70Vr4o5vdgTYkYc7IrVamW1OXBuB-ubBQ&amp;__tn__=%2ANK-R\">#Gi&aacute;ng_Sinh</a><br />\r\n<a href=\"https://www.facebook.com/hashtag/noel?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARAGCrdIZ74mAnLMzeOFTWeHU1AiAyko8euL3UPSBQuK2XpnlcXyLNAL9ORmlXb0ucOHnJDPMuPgi5zRL9-r0OpH4YGtAQSRBszQbQxySJHZg-SiQH-cqYgnPfgc2m0HpijBnoRYPcPZqUFJm_r8NwYbwNjZI5q6BcoYmr_BSPCGMEkODhhMEQ7IjxgXgKgMYKzCJYt9obvipWiv0ejGGuE3KQK2C8VlF-E3gONuBlD58GqaDhTSxSEtmi_cpuhir70Vr4o5vdgTYkYc7IrVamW1OXBuB-ubBQ&amp;__tn__=%2ANK-R\">#Noel</a></p>\r\n\r\n<p>CINEMA COFFEE X&atilde; Đ&agrave;n: 166 đường ven hồ X&atilde; Đ&agrave;n, Đống Đa<br />\r\nCINEMA COFFEE Y&ecirc;n L&atilde;ng: 136 Y&ecirc;n L&atilde;ng, Đống Đa<br />\r\nCINEMA COFFEE Ch&ugrave;a L&aacute;ng: 61/82 Ch&ugrave;a L&aacute;ng, Đống Đa<br />\r\nCINEMA COFFEE An H&ograve;a: 30 phố An H&ograve;a, H&agrave; Đ&ocirc;ng</p>\r\n\r\n<p>Inbox page ngay để nhận th&ecirc;m cực nhiều ưu đ&atilde;i kh&aacute;c<br />\r\nhoặc truy cập website để t&igrave;m hiểu th&ecirc;m về cafe phim của ch&uacute;ng t&ocirc;i:&nbsp;<a href=\"https://l.facebook.com/l.php?u=https%3A%2F%2Fcafephim.vn%2F%3Ffbclid%3DIwAR3CdI0kOdYi14y3WJRkJOFXbPTNCJlXWTwJTb9Eq7G5MrmJ_YZUifele9Y&amp;h=AT2EWdE5iCVZg0rOsekZFl1IDL9jNRLnruAxaVeAH9HYVDUzoGyHcFN290xVt47KXlDZDdKhcnre6eldONXKDCUnYrzywbLw4-zqzfamnmbi8S4SCB6n2Mwuc3E0kmk49CFKNlfRkbRVr8pXu9FAnVHGYYk_-pyih-34euVsdcBA3aliDAFlIq9KAYICoR2v27Hip0FjgHojmbmGukO8dNv498J-soK_XZqkbeACnNuUQNtM1YhuheYs5abolA6fk2l1x0q6OtMvq76AYJ7bz7rHR3VkTDjRjNUIJdB8680tMM9W2ddHs5qqqNVxSv9LUV6dOVsKeg4Mpq4hOqrooIU0BzwWRnc3j9HBdlIle0JIJ2Or2pwAOcFFch_PnrbavsKbqWzVSWn0isfsm9GZphXdj43sNsGlHsZo6sEm7JJegL3RKnrmjApXFjINeP5qabSU2AulEyg7a2aW8OXvo_JAUGaSH3iT2L9S8mHBRmTC0mcbMLVUOKu3e5rOTVhmWt2rRSeHv4-UG5hAIkUNtODeNaEyw7BzJ-Jnd01M9lFdq-AATwil8dadmmo\" rel=\"noopener nofollow noreferrer\" target=\"_blank\">https://cinema-coffee.com/</a></p>\r\n\r\n<p>Nhấc m&aacute;y ngay để được tư vấn: 0333831436</p>\r\n\r\n<p><img alt=\"\" class=\"w-100\" src=\"https://cafephim.vn/wp-content/uploads/2019/12/cine_cafe_combo_299k-scaled.jpg\" />&nbsp;&nbsp;&nbsp;<img alt=\"\" class=\"w-100\" src=\"https://cafephim.vn/wp-content/uploads/2019/12/gs-03-scaled.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:200px; position:absolute; top:462.597px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', '15.png', '2019-12-29 18:01:09', '2019-12-29 18:09:17');

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
-- Table structure for table `room_orders`
--

CREATE TABLE `room_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agency_id` bigint(20) UNSIGNED NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_orders`
--

INSERT INTO `room_orders` (`id`, `user_id`, `name`, `phone`, `agency_id`, `time`, `note`, `status_id`, `created_at`, `updated_at`) VALUES
(2, 6, 'tester', '0123456789', 3, '20:00', 'test', 1, '2019-12-29 18:15:09', '2019-12-29 18:15:09'),
(3, 5, 'test', '0123456789', 2, '06:00', 'ok boy', 2, '2020-01-04 01:12:35', '2020-01-04 01:13:46');

-- --------------------------------------------------------

--
-- Table structure for table `room_price`
--

CREATE TABLE `room_price` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_price`
--

INSERT INTO `room_price` (`id`, `name`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Bảng giá phòng cafe phim, áp dụng toàn hệ thống với 04 cơ sở.', '<p><img alt=\"\" class=\"w-100\" src=\"https://cafephim.vn/wp-content/uploads/2019/10/bang_gia_cafe_phim_ha_noi-01.jpg\" /></p>', 'price.png', '2019-12-29 17:17:58', '2019-12-29 17:17:58');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Đang xử lý', '2019-12-29 13:47:23', '2019-12-29 13:47:23'),
(2, 'Đã đặt', '2019-12-29 13:47:23', '2019-12-29 13:47:23'),
(3, 'Đã hủy', '2019-12-29 13:47:23', '2019-12-29 13:47:23');

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
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `dob`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'admin', 'admin@gmail.com', NULL, '$2y$10$0U2P28qGqmSVpGLTLT5deurCoOCad5SQGwIF5ZqV3wy7n0K7i4w8C', '0123456789', '2008-02-02', 1, NULL, '2019-12-29 18:12:01', '2019-12-29 18:12:01'),
(6, 'member', 'member@gmail.com', NULL, '$2y$10$b5lW3GgPT1CORaWbvsl6UeqTWHnD7sKvR8ZY7.tXWmmVabV1Vg31y', '0123456789', '2014-01-02', 0, NULL, '2019-12-29 18:14:47', '2020-01-05 22:51:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agencies`
--
ALTER TABLE `agencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extensions`
--
ALTER TABLE `extensions`
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
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movies_movie_category_id_foreign` (`movie_category_id`);

--
-- Indexes for table `movie_categories`
--
ALTER TABLE `movie_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `room_orders`
--
ALTER TABLE `room_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_orders_agency_id_foreign` (`agency_id`),
  ADD KEY `room_orders_status_id_foreign` (`status_id`),
  ADD KEY `room_orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `room_price`
--
ALTER TABLE `room_price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
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
-- AUTO_INCREMENT for table `agencies`
--
ALTER TABLE `agencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `extensions`
--
ALTER TABLE `extensions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `movie_categories`
--
ALTER TABLE `movie_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `room_orders`
--
ALTER TABLE `room_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `room_price`
--
ALTER TABLE `room_price`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_movie_category_id_foreign` FOREIGN KEY (`movie_category_id`) REFERENCES `movie_categories` (`id`);

--
-- Constraints for table `room_orders`
--
ALTER TABLE `room_orders`
  ADD CONSTRAINT `room_orders_agency_id_foreign` FOREIGN KEY (`agency_id`) REFERENCES `agencies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `room_orders_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `room_orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

