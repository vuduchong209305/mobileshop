-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 15, 2017 lúc 03:38 SA
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mobile1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `a_id` tinyint(1) NOT NULL,
  `a_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `a_password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `a_fullname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `a_avatar` text COLLATE utf8_unicode_ci NOT NULL,
  `a_role` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `a_phone` int(15) NOT NULL,
  `a_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `permissions` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`a_id`, `a_name`, `a_password`, `a_fullname`, `a_avatar`, `a_role`, `a_phone`, `a_created`, `permissions`) VALUES
(1, 'vuduchong', '123456789', 'Vũ Đức Hồng', '', '', 986209305, '2017-07-09 06:36:26', ''),
(2, 'duongthanhthao', '123456789', 'duongthanhthao', '', 'Mod', 2147483647, '2017-07-09 07:09:35', '{\"category\":[\"index\",\"delete\",\"del_all\"]}');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_categorys`
--

CREATE TABLE `tbl_categorys` (
  `cat_id` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `base_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `parent_id` int(11) NOT NULL,
  `type` tinyint(4) DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `sort_order` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_categorys`
--

INSERT INTO `tbl_categorys` (`cat_id`, `name`, `base_url`, `image`, `status`, `parent_id`, `type`, `description`, `details`, `sort_order`) VALUES
(1, 'Apple', 'apple', 'apple1.png', 1, 20, 1, 'Apple Inc. là tập đoàn công nghệ máy tính của Mỹ có trụ sở chính đặt tại Silicon Valley (Thung Lũng Si-li-côn) ở San Francisco, tiểu bang California. Apple được thành lập ngày 1 tháng 4 năm 1976 dưới tên Apple Computer, Inc., và đổi tên thành Apple Inc. vào đầu năm 2007. Với lượng sản phẩm bán ra toàn cầu hàng năm là 13,9 tỷ đô la Mỹ (2005), 74 triệu thiết bị iPhone được bán ra chỉ trong một quý 4 năm 2014 và có hơn 98.000 nhân viên ở nhiều quốc gia, sản phẩm là máy tính cá nhân, phần mềm, phần cứng, thiết bị nghe nhạc và nhiều thiết bị đa phương tiện khác. Sản phẩm nổi tiếng nhất là máy tính Apple Macintosh, máy nghe nhạc iPod (2001), chương trình nghe nhạc iTunes, điện thoại iPhone (2007), máy tính bảng iPad (2010) và đồng hồ thông minh Apple Watch (2014-2015) hoạt động trên nhiều quốc gia trên thế giới.\r\n\r\nTheo bảng xếp hạng do hãng nghiên cứu thị trường toàn cầu Millward Brown thực hiện vào năm 2014, Apple đã bị Google soán ngôi thương hiệu đắt giá nhất thế giới sau 3 năm liên tiếp giữ ngôi quán quân. Theo bảng xếp hạng này Google xếp vị trí đầu bảng, Apple đứng vị trí thứ hai, tiếp theo lần lượt là IBM, Microsoft, McDonald\'s, Coca Cola, Visa… e bỏ trạng thái nhé', '', 10),
(2, 'Samsung', 'samsung', 'samsung.png', 1, 20, 1, 'Tập đoàn Samsung (tiếng Hàn: 삼성 (Romaja: \"Samseong\", phiên âm chuẩn: \"Xam-xâng\"); Hanja: 三星; âm Hán Việt: \"Tam Tinh\" -nghĩa là \"3 ngôi sao\"), là một tập đoàn đa quốc gia của Hàn Quốc có tổng hành dinh đặt tại Samsung Town, Seoul. Tập đoàn có nhiều công ty con, hầu hết hoạt động dưới thương hiệu Samsung, là tập đoàn thương mại (chaebol) lớn nhất Hàn Quốc.\r\n\r\nSamsung được sáng lập bởi Lee Byung-chul năm 1938, được khởi đầu là một công ty buôn bán nhỏ. 3 thập kỉ sau, tập đoàn Samsung đa dạng hóa các ngành nghề bao gồm chế biến thực phẩm, dệt may, bảo hiểm, chứng khoán và bán lẻ. Samsung tham gia vào lĩnh vực công nghiệp điện tử vào cuối thập kỉ 60, xây dựng và công nghiệp đóng tàu vào giữa thập kỉ 70. Sau khi Lee mất năm 1987, Samsung tách ra thành 4 tập đoàn - tập đoàn Samsung, Shinsegae, CJ, Hansol. Từ thập kỉ 90, Samsung mở rộng hoạt động trên quy mô toàn cầu, tập trung vào lĩnh vực điện tử, điện thoại di động và chất bán dẫn, đóng góp chủ yếu vào doanh thu của tập đoàn.\r\n\r\nNhững chi nhánh quan trọng của Samsung bao gồm Samsung Electronics (công ty điện tử lớn nhất thế giới theo doanh thu, và lớn thứ 4 thế giới theo giá trị thị trường năm 2012), Samsung Heavy Industries (công ty đóng tàu lớn thứ 2 thế giới theo doanh thu năm 2010), Samsung Engineering và Samsung C&T (lần lượt là công ty xây dựng lớn thứ 13 và 36 thế giới). Những chi nhánh chú ý khác bao gồm Samsung Life Insurance (công ty bảo hiểm lớn thứ 14 thế giới), Samsung Everland (quản lý Everland Resort, công viên chủ đề lâu đời nhất Hàn Quốc), Samsung Techwin (công ty không gian vũ trụ, thiết bị giám sát, bảo vệ) và Cheil Worldwide (công ty quảng cáo lớn thứ 16 thế giới theo doanh thu năm 2011).\r\n\r\nSamsung có tầm ảnh hưởng lớn trong phát triển kinh tế, chính trị, truyền thông, văn hóa ở Hàn Quốc, và là động lực thúc đẩy chính đằng sau \"Kì tích sông Hàn\". Đóng góp 1/5 tổng kim ngạch xuất khẩu của Hàn Quốc. Doanh thu chiếm 17% tổng sản phẩm quốc nội (GDP) $1,082 tỷ đô la Mỹ của Hàn Quốc.', '', 9),
(3, 'Sony', 'sony', 'sony.jpg', 1, 20, 1, 'Công ty công nghiệp Sony (ソニー株式会社/Sony Corporation), gọi tắt là Sony, là một tập đoàn đa quốc gia của Nhật Bản, với trụ sở chính nằm tại Minato, Tokyo, Nhật Bản, và là tập đoàn điện tử đứng thứ 5 thế giới với 81,64 tỉ USD (2011). Sony là một trong những công ty hàng đầu thế giới về điện tử, sản xuất tivi, máy ảnh, máy tính xách tay và đồ dân dụng khác.\r\n\r\nĐược thành lập vào tháng 5/1946 tại Nihonbashi Tokyo được mang tên là Tokyo Tsushin Kogyo K.K (東京通信工業株式会社, Đông Kinh Thông tin Công nghiệp Chu Thức Hội Xã) với số vốn ban đầu là 190.000 yên. Công ty này đổi tên thành Sony vào tháng 1/1958.\r\n\r\nTừ \"Sony\" là kết hợp của từ \"sonus\" trong tiếng La-tinh (âm thanh) và từ \"sonny\" trong tiếng Anh (cậu bé nhanh nhẹn thông minh) theo cách gọi tên thân mật. Những nhà sáng lập hy vọng tên \"Sony\" thể hiện tinh thần nhiệt huyết và sáng tạo của giới trẻ.', '', 3),
(4, 'HTC', 'htc', 'htc.png', 1, 20, 1, 'Được thành lập vào năm 1997 bởi Cher Wang - Nữ chủ tịch, HT Cho – Giám đốc của ban hội đồng kiêm Chủ tịch HTC Foundation, Peter Chou – CEO kiêm Tổng Giám đốc điều hành, HTC tạo dựng tên tuổi của mình như là một công ty chuyên sản xuất các thiết bị được gắn thương hiệu của các nhà cung cấp mạng hàng đầu thế giới. HTC thành lập quan hệ đối tác độc quyền với những thương hiệu điện thoại di động lớn, bao gồm 5 nhà khai thác mạng hàng đầu ở châu Âu, 4 hàng đầu ở Mỹ, và nhiều nhà khai thác đang phát triển mạnh ở châu Á. HTC cũng đã đưa sản phẩm ra thị trường với các đối tác OEM hàng đầu ngành công nghiệp và kể từ tháng 6 năm 2006, HTC phát triển thương hiệu riêng của mình.\r\n\r\nHTC là một trong những công ty phát triển nhanh nhất trong lĩnh vực di động và đã đạt được những thanh tựu đáng kể trong vài năm qua. Business Week xếp hạng HTC là công ty công nghệ tốt thứ hai ở châu Á trong năm 2007, đồng thời xếp công ty ở vị trí số 3 trong danh sách toàn cầu vào năm 2006.\r\n\r\nKể từ khi tung ra thương hiệu riêng của mình cách đây hơn 05 năm, công ty đã giới thiệu hàng loạt những sản phẩm ấn tượng mang thương hiệu HTC trên toàn thế giới.', '', 4),
(5, 'LG', 'lg', 'lg.png', 1, 20, 1, 'LG là một tập đoàn lớn của Hàn Quốc (LG Group), các sản phẩm chính của tập đoàn gồm hàng điện tử, điện thoại và sản phẩm dầu khí. Tập đoàn này có những công ty con quan trọng như LG Electronics và LG Chemical.\r\n\r\nĐược ông Koo In-hwoi thành lập vào năm 1947 và được đặt tên gọi Lucky-Goldstar (ngôi sao vàng may mắn), sau đó được rút gọn theo dạng viết tắt thành \"LG\" vào năm 1995. LG cũng là tên viết tắt của Lucky Geumseong (럭키금성) tại Hàn Quốc, từ này dịch sang tiếng Hán Việt là Lạc Hỷ Kim Tinh.\r\n\r\nLG là Chaebol góp phần thúc đẩy nền kinh tế công nghiệp hóa của Hàn Quốc.\r\nCông nghệ tiên tiến, sản phẩm độc đáo và thiết kế tinh tế của LG chính là sự đầu tư cho tương lai.\r\nVới doanh thu toàn cầu năm 2014 là 55.91 tỉ USD (59.04 nghìn tỉ Won), LG có 4 ngành hàng kinh doanh chính: Thiết bị nghe nhìn, Thiết bị di động, Điện tử gia dụng & điều hòa, và Linh kiện ô tô. LG cũng là một trong những nhà sản xuất hàng đầu thế giới về sản phẩm: tấm nền TV, thiết bị di dộng, điều hòa không khí, máy giặt và tủ lạnh. LG Electronics là một Đối Tác Của Năm của chương trình Ngôi Sao Năng Lượng năm 2014.', '', 5),
(6, 'Xiaomi', 'xiaomi', 'xiaomi.png', 1, 20, 1, 'Xiaomi Inc. [2] (tiếng Trung: 小米科技; bính âm: Xiǎomĭ Kējì, nghĩa đen \"Xiaomi Tech\", hoặc \"Tiểu Mễ khoa kỹ\")[3] là một công ty tư nhân sản xuất hàng điện tử Trung Quốc có trụ sở tại Bắc Kinh. Xiaomi là nhà sản xuất điện thoại thông minh lớn thứ 4 thế giới; trong năm 2015 Xiaomi đã bán 70,8 triệu đơn vị và chiếm gần 5% thị trường điện thoại thông minh thế giới. Xiaomi thiết kế, phát triển, và bán điện thoại thông minh, ứng dụng di động, theo Forbes. Công ty đã bán hơn 60 triệu chiếc điện thoại thông minh trong năm 2014.\r\n\r\nKể từ khi phát hành của điện thoại thông minh đầu tiên của mình vào tháng 8 năm 2011, Xiaomi đã giành được thị phần tại Trung Quốc đại lục và mở rộng sang phát triển một phạm vi rộng lớn hơn của thiết bị điện tử tiêu dùng, bao gồm cả một hệ sinh thái thiết bị nhà thông minh (IoT). Người sáng lập công ty và giám đốc điều hành là Lei Jun, người giàu có thứ 23 của Trung Quốc\r\n\r\nCông ty có hơn 8.000 nhân viên, chủ yếu ở Trung Quốc đại lục, Ấn Độ, Malaysia, và Singapore, và đang mở rộng sang các quốc gia khác như Indonesia, Philippines và Brazil.\r\n\r\nTheo IDC, vào tháng 10 năm 2014 Xiaomi là nhà sản xuất điện thoại thông minh lớn thứ ba thế giới, sau Samsung và Apple, và tiếp theo là Lenovo và LG. Xiaomi đã vượt qua Samsung vào năm 2014, trở thành nhà cung cấp điện thoại thông minh hàng đầu tại Trung Quốc, dựa theo một báo cáo của IDC.', '', 6),
(7, 'Asus', 'asus', 'asus.png', 1, 20, 1, 'ASUS có nguồn gốc từ chữ Pegasus, ngựa thần có cánh biểu tượng cho nguồn cảm hứng nghệ thuật và học thuật trong thần thoại Hy Lạp. ASUS là hiện thân cho sức mạnh, sự thuần khiết, và tinh thần phiêu lưu mạo hiểm của sinh vật huyền thoại này, và luôn nỗ lực vươn đến tầm cao mới với mỗi sản phẩm sáng tạo nên.\r\n\r\nNgành Công nghệ Thông tin Đài Loan đã có sự tăng trưởng vượt bậc trong một vài thập kỷ qua, vươn lên thành một trong những quốc gia chủ lực trên thị trường thế giới. Cùng với sự phát triển của đất nước, ASUScũng luôn vững vàng đứng đầu đợt sóng tăng trưởng, từ khởi đầu khiêm nhường là nhà sản xuất bo mạch chủ với số lượng nhỏ nhân viên vươn lên thành một doanh nghiệp công nghệ đứng đầu Đài Loan với hơn 12.500 nhân viên trên toàn thế giới. ASUS hiện sản xuất các sản phẩm ở hầu hết các lĩnh vực công nghệthông tin, bao gồm linh kiện máy tính cá nhân, thiết bị ngoại vi, máy tính xách tay, máy tính bảng, máy chủ và điện thoại thông minh.', '', 7),
(8, 'Oppo', 'oppo', 'oppo.jpg', 1, 20, 1, 'OPPO Electronics Corp (với tên thương hiệu là Oppo - Camera Phone) (trước là: Oppo - Smartphone). là nhà sản xuất thiết bị điện tử Trung Quốc, có trụ sở đặt tại Đông Hoản, Quảng Đông. OPPO cung cấp một số sản phẩm chính như máy nghe nhạc MP3, Tivi LCD, eBook, DVD/Blu-ray và điện thoại thông minh.[1] Thành lập vào năm 2004, công ty đã đăng ký tên thương hiệu OPPO ở nhiều quốc gia trên thế giới.\r\nĐiện thoại[sửa | sửa mã nguồn]\r\nOPPO gia nhập thị trường thiết bị di động năm 2008.[3][4]\r\n\r\nOPPO Find 7 là một phablet với 3GB RAM và một vi xử lý lõi tứ 2.5 GHz.[5] OPPO Find 7 có một biến thể là Find 7a, với một màn hình 1080p và 2GB RAM khi so với Find 7 vốn có thông số kỹ thuật cao hơn. Nó đã được công bố vào ngày 19/3/2014 và được phát hành vào tháng 4/2014. Nó có thiết kế tương tự với OnePlus One phát hành vào tháng 4/2014.\r\n\r\nNgày 3/8/2016, Oppo ra mắt F1s tại India.[6] Oppo F1s là thiết bị tập trung vào tính năng selfie vốn đã mang đến sự thành công cho dòng Oppo F1. F1s hỗ trợ một camera chính 13 MP ở phía sau và camera trước 16 MP. Ngoài ra còn có một máy quét vân tay tích hợp trên nút Home mà không chỉ có thể được sử dụng để mở khóa điện thoại, mà còn mở được các ứng dụng khá tốt. Oppo F1s hoạt động trên vi xử lý tám loãi MediaTek MT6750 cùng với 3 GB RAM và chip đồ họa Mali-T860 MP2. Nó hoạt động trên Color OS 3.0 dựa trên Android 5.1 Lollipop, màn hình 5.5 inch HD IPS và pin 3075 mAh.', '', 8),
(9, 'Huawei', 'huawei', 'huawei.png', 1, 20, 1, 'Huawei, tên đầy đủ là Công ty trách nhiệm hữu hạn Kỹ thuật Hoa Vi (tiếng Hoa: 華為技術公司, Hán Việt: Hoa vi Kỹ thuật Hữu hạn Công ty, tiếng Anh: Huawei Technologies Co Ltd) là một tập đoàn đa quốc gia về thiết bị mạng và viễn thông, có trụ sở chính tại Thâm Quyến, Quảng Đông, Trung Quốc[3]. Huawei là nhà cung cấp thiết bị viễn thông lớn nhất Trung Quốc và đứng thứ ba thế giới (sau Ericsson và Nokia Siemens Networks).[4]), cung cấp các hệ thống mạng cho các nhà khai thác điện thoại di động ở 140 quốc gia.\r\nHuawei được thành lập năm 1988 bởi Nhậm Chính Phi, là một công ty thuộc sở hữu của tư nhân. Các hoạt động cốt lõi là nghiên cứu và phát triển, sản xuất và tiếp thị của thiết bị viễn thông, và cung cấp các dịch vụ mạng để các nhà khai thác viễn thông[5].\r\n\r\nHuawei phục vụ 31 trong số 50 công ty khai thác viễn thông hàng đầu thế giới[6]. Nó cũng chiếm 55% thị phần toàn cầu trong lĩnh vực nối mạng bằng dongle 3G di động. Hàng năm Huawei đầu tư khoảng 10% doanh thu hàng năm của mình để nghiên cứu và phát triển(R & D). và trong đó 46% nhân lực tham gia vào nghiên cứu và phát triển. Công ty đã nộp đơn xin cấp hơn 49.000 bằng sáng chế. Công ty có trung tâm nghiên cứu và phát triển ở Bắc Kinh, Thành Đô, Nam Kinh, Thượng Hải, Hàng Châu, Thâm Quyến, Vũ Hán và Tây An, Trung Quốc Ottawa, Canada, Bangalore, Ấn Độ; Jakarta, Indonesia, Mexico City, Mexico; Wijchen, Hà Lan, Karachi và Lahore, Pakistan, Ferbane, Cộng hòa Ireland, Moscow, Nga, Stockholm, Thụy Điển, Istanbul, Thổ Nhĩ Kỳ và Dallas và Silicon Valley, Hoa Kỳ[7].', '', 9),
(12, 'Tin Tức', 'tin-tuc', '', 1, 0, NULL, '', '', 0),
(13, 'Bảo Hành', 'bao-hanh', '', 1, 0, NULL, '', '', 0),
(14, 'Vận Chuyển', 'van-chuyen\r\n', '', 1, 0, NULL, '', '', 0),
(15, 'Thanh Toán', 'thanh-toan', '', 1, 0, NULL, '', '', 0),
(16, 'Liên Hệ', 'lien-he', '', 1, 0, NULL, '', '', 0),
(17, 'Giới Thiệu', 'gioi-thieu', '', 1, 0, NULL, '', '', 0),
(20, 'Sản Phẩm', 'san-pham', '', 1, 0, NULL, '', '', 10),
(21, 'Tin Tức Công Nghệ', 'tin-tuc-cong-nghe', '', 1, 12, NULL, '', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_config`
--

CREATE TABLE `tbl_config` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descript_web` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_page` text COLLATE utf8_unicode_ci,
  `hotline` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `footer` text COLLATE utf8_unicode_ci,
  `gmail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_config`
--

INSERT INTO `tbl_config` (`id`, `logo`, `title`, `descript_web`, `contact_page`, `hotline`, `footer`, `gmail`, `facebook`, `youtube`, `active`) VALUES
(1, 'image-techz-1460426726.jpg', 'Mobile Phone', '', '', '0986209305', '© 2017 CHLOE\'S WAY SHOP. All rights reserved.', 'vuduchong209305@gmail.com', 'https://www.facebook.com/vuduchong209305', '© 2017 CHLOE\'S WAY SHOP. All rights reserved.', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `email`, `phone`, `content`, `date`, `active`) VALUES
(6, 'Ha Hoang', 'hatron95@gmail.com', '987904839', 'sừef', '2017-02-22 13:57:08', 0),
(7, 'Ha Hoang', 'hatron95@gmail.com', '987904839', 'ưqfrgbnhjmk', '2017-02-22 13:57:08', 0),
(8, 'Ha Hoang', 'hatron95@gmail.com', '987904839', 'ưqfrgbnhjmk', '2017-02-22 13:57:08', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_detail_orders`
--

CREATE TABLE `tbl_detail_orders` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `pro_price` float(10,3) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_detail_orders`
--

INSERT INTO `tbl_detail_orders` (`id`, `order_id`, `pro_id`, `pro_name`, `quantity`, `pro_price`, `active`) VALUES
(10, 5, 57, '', 3, 10000000.000, 0),
(11, 5, 62, '', 6, 10000000.000, 0),
(12, 5, 61, '', 1, 5600000.000, 0),
(13, 6, 42, 'HTC-10', 1, 1200000.000, 0),
(14, 7, 62, 'Asus-Zenfone-3-Max', 1, 5000000.000, 0),
(15, 8, 62, 'Asus-Zenfone-3-Max', 1, 5000000.000, 0),
(16, 9, 62, 'Asus-Zenfone-3-Max', 1, 5000000.000, 0),
(17, 10, 62, 'Asus-Zenfone-3-Max', 1, 5000000.000, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_inventory`
--

CREATE TABLE `tbl_inventory` (
  `id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `so_luong_nhap` int(11) NOT NULL,
  `so_luong_xuat` int(11) NOT NULL,
  `ton_cuoi` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_inventory`
--

INSERT INTO `tbl_inventory` (`id`, `pro_id`, `so_luong_nhap`, `so_luong_xuat`, `ton_cuoi`, `active`) VALUES
(1, 55, 138, 7, 0, 1),
(2, 4, 100, 0, 0, 1),
(3, 49, 200, 0, 0, 1),
(4, 71, 150, 0, 0, 1),
(5, 50, 200, 17, 0, 1),
(6, 51, 100, 0, 0, 1),
(7, 52, 100, 0, 0, 1),
(8, 53, 100, 0, 0, 1),
(9, 190, 123, 0, 0, 1),
(10, 191, 342, 0, 0, 1),
(11, 192, 123, 0, 0, 1),
(12, 193, 123, 0, 0, 1),
(13, 194, 342, 0, 0, 1),
(14, 195, 123, 0, 0, 1),
(15, 196, 234, 0, 0, 1),
(16, 56, 100, 0, 0, 1),
(17, 57, 100, 0, 0, 1),
(18, 58, 500, 0, 0, 1),
(19, 59, 100, 4, 0, 1),
(20, 60, 100, 10, 0, 1),
(21, 61, 100, 2, 0, 1),
(22, 62, 100, 0, 0, 1),
(23, 63, 100, 0, 0, 1),
(24, 64, 100, 0, 0, 1),
(25, 65, 100, 0, 0, 1),
(26, 66, 110, 0, 0, 1),
(27, 67, 110, 0, 0, 1),
(28, 68, 111, 0, 0, 1),
(29, 69, 100, 0, 0, 1),
(30, 70, 110, 0, 0, 1),
(31, 72, 123, 0, 0, 1),
(32, 73, 123, 0, 0, 1),
(33, 74, 240, 0, 0, 1),
(34, 75, 321, 0, 0, 1),
(35, 76, 123, 0, 0, 1),
(36, 77, 123, 0, 0, 1),
(37, 78, 214, 0, 0, 1),
(38, 79, 214, 0, 0, 1),
(39, 80, 324, 0, 0, 1),
(40, 81, 324, 0, 0, 1),
(41, 82, 324, 0, 0, 1),
(42, 82, 324, 0, 0, 1),
(43, 82, 123, 0, 0, 1),
(44, 83, 123, 0, 0, 1),
(45, 84, 123, 0, 0, 1),
(46, 85, 123, 0, 0, 1),
(47, 86, 123, 0, 0, 1),
(48, 87, 123, 0, 0, 1),
(49, 88, 123, 0, 0, 1),
(50, 89, 123, 0, 0, 1),
(51, 90, 123, 0, 0, 1),
(52, 91, 123, 0, 0, 1),
(53, 92, 123, 7, 0, 1),
(54, 93, 123, 0, 0, 1),
(55, 94, 123, 0, 0, 1),
(56, 95, 123, 0, 0, 1),
(57, 96, 123, 0, 0, 1),
(58, 97, 123, 0, 0, 1),
(59, 98, 123, 0, 0, 1),
(60, 99, 123, 0, 0, 1),
(61, 100, 123, 0, 0, 1),
(62, 101, 123, 0, 0, 1),
(63, 102, 123, 0, 0, 1),
(64, 103, 123, 0, 0, 1),
(65, 104, 123, 0, 0, 1),
(66, 105, 123, 0, 0, 1),
(67, 106, 123, 0, 0, 1),
(68, 107, 123, 0, 0, 1),
(69, 108, 123, 0, 0, 1),
(70, 109, 123, 0, 0, 1),
(71, 110, 123, 0, 0, 1),
(72, 111, 123, 0, 0, 1),
(73, 112, 123, 0, 0, 1),
(74, 113, 123, 0, 0, 1),
(75, 114, 123, 0, 0, 1),
(76, 115, 123, 0, 0, 1),
(77, 116, 123, 0, 0, 1),
(78, 117, 123, 0, 0, 1),
(79, 118, 123, 0, 0, 0),
(80, 119, 123, 0, 0, 0),
(81, 120, 123, 0, 0, 0),
(82, 121, 123, 0, 0, 0),
(83, 122, 123, 0, 0, 0),
(84, 123, 123, 0, 0, 0),
(85, 124, 123, 0, 0, 0),
(86, 125, 123, 0, 0, 0),
(87, 126, 123, 0, 0, 0),
(88, 127, 123, 0, 0, 0),
(89, 128, 123, 0, 0, 0),
(90, 129, 123, 0, 0, 0),
(91, 130, 123, 0, 0, 0),
(92, 131, 123, 0, 0, 0),
(93, 132, 123, 0, 0, 0),
(94, 133, 123, 0, 0, 0),
(95, 134, 123, 0, 0, 0),
(96, 135, 123, 0, 0, 0),
(97, 136, 123, 0, 0, 0),
(98, 137, 123, 0, 0, 0),
(99, 138, 123, 0, 0, 0),
(100, 139, 123, 0, 0, 0),
(101, 140, 123, 0, 0, 0),
(102, 141, 123, 0, 0, 0),
(103, 142, 123, 0, 0, 0),
(104, 143, 123, 0, 0, 0),
(105, 144, 123, 0, 0, 0),
(106, 145, 123, 0, 0, 0),
(107, 146, 200, 0, 0, 0),
(108, 147, 200, 0, 0, 0),
(109, 148, 200, 0, 0, 0),
(110, 149, 200, 0, 0, 0),
(111, 150, 200, 0, 0, 0),
(112, 151, 200, 0, 0, 0),
(113, 152, 200, 0, 0, 0),
(114, 153, 200, 0, 0, 0),
(115, 154, 200, 0, 0, 0),
(116, 155, 200, 0, 0, 0),
(117, 157, 200, 0, 0, 0),
(118, 158, 200, 0, 0, 0),
(119, 159, 200, 0, 0, 0),
(120, 160, 200, 0, 0, 0),
(121, 161, 200, 0, 0, 0),
(122, 162, 200, 0, 0, 0),
(123, 163, 200, 0, 0, 0),
(124, 164, 200, 0, 0, 0),
(125, 165, 200, 0, 0, 0),
(126, 166, 200, 0, 0, 0),
(127, 167, 200, 0, 0, 0),
(128, 168, 200, 0, 0, 0),
(129, 169, 200, 0, 0, 0),
(130, 170, 123, 0, 0, 0),
(131, 171, 123, 0, 0, 0),
(132, 172, 123, 0, 0, 0),
(133, 173, 123, 0, 0, 0),
(134, 174, 123, 0, 0, 0),
(135, 175, 123, 0, 0, 0),
(136, 176, 123, 0, 0, 0),
(137, 177, 123, 0, 0, 0),
(138, 178, 123, 0, 0, 0),
(139, 180, 123, 0, 0, 0),
(140, 198, 200, 0, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_lienket`
--

CREATE TABLE `tbl_lienket` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vitri` tinyint(5) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_lienket`
--

INSERT INTO `tbl_lienket` (`id`, `title`, `link`, `img`, `vitri`, `status`) VALUES
(1, 'Nike', 'http://www.nike.com/us/en_us/', '8ba4d-nike.png', 2, 1),
(2, 'Adidas', 'http://www.adidas.com.vn/', '142b5-adidas.png', 1, 1),
(3, 'Zanado', 'http://zanado.com/', 'c2810-zanado.png', 3, 1),
(4, 'Seiko', 'https://www.seikowatches.com/', 'ac512-seiko.png', 4, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id` int(11) NOT NULL,
  `is_home` tinyint(1) NOT NULL,
  `view_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `base_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stt` int(11) NOT NULL,
  `menu_position` tinyint(1) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `sort_order` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_menu`
--

INSERT INTO `tbl_menu` (`id`, `is_home`, `view_type`, `name`, `parent_id`, `base_url`, `stt`, `menu_position`, `active`, `sort_order`) VALUES
(1, 1, '', 'Sản Phẩm', 0, 'san-pham', 1, 1, 1, 0),
(2, 1, '', 'Tin Tức', 0, 'tin-tuc', 2, 1, 1, 0),
(3, 1, '', 'Bảo Hành', 0, 'bao-hanh', 3, 1, 1, 0),
(4, 1, '', 'Vận Chuyển', 0, 'van-chuyen', 4, 1, 1, 0),
(5, 1, '', 'Thanh Toán', 0, 'thanh-toan', 5, 1, 1, 0),
(8, 1, '', 'Liên Hệ', 0, 'lien-he', 6, 1, 1, 0),
(9, 1, '', 'Giới Thiệu', 0, 'gioi-thieu', 7, 1, 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_news`
--

CREATE TABLE `tbl_news` (
  `news_id` int(10) UNSIGNED NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_update` varchar(255) DEFAULT NULL,
  `news_title` varchar(255) DEFAULT NULL,
  `descript` text,
  `news_detail` text,
  `news_thumbnail` varchar(255) DEFAULT NULL,
  `news_order` int(4) DEFAULT NULL,
  `base_url` varchar(255) DEFAULT NULL,
  `new_views` int(11) NOT NULL,
  `news_active` tinyint(1) NOT NULL DEFAULT '1',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `date_create`, `last_update`, `news_title`, `descript`, `news_detail`, `news_thumbnail`, `news_order`, `base_url`, `new_views`, `news_active`, `created`) VALUES
(7, '2017-07-08 07:45:21', NULL, 'Gã khổng lồ Nokia thực sự đang “lạc trôi” ở đâu? ', NULL, '<p>Theo&nbsp;<em>Bloomberg</em>, Nokia c&oacute; thể coi l&agrave; đ&atilde; tồn tại ở trong nền kinh tế c&ocirc;ng nghệ truyền th&ocirc;ng hơn 150 năm. Sở dĩ n&oacute;i &quot;c&oacute; thể&quot; l&agrave; v&igrave; n&oacute; chỉ đ&uacute;ng nếu ch&uacute;ng ta xem sản phẩm ban đầu của c&ocirc;ng ty, bột giấy, l&agrave; một sản phẩm của c&ocirc;ng nghệ truyền th&ocirc;ng. Ngo&agrave;i ra, ch&uacute;ng ta cũng cần phải biết rằng Nokia vẫn chưa hề bị hất văng khỏi lĩnh vực n&agrave;y v&agrave; Nokia đề cập trong b&agrave;i l&agrave; tập đo&agrave;n Nokia c&oacute; trụ sở ch&iacute;nh ở Phần Lan, chứ kh&ocirc;ng phải l&agrave; &quot;thương hiệu điện thoại Nokia&quot; đ&atilde; b&aacute;n cho HMD.</p>\r\n\r\n<p>Đối với những người khi nghe tới c&aacute;i t&ecirc;n Nokia th&igrave; chợt nhớ về những ho&agrave;i niệm cũ, điều n&agrave;y c&oacute; vẻ kh&ocirc;ng đ&uacute;ng. Trong 14 năm trời, g&atilde; khổng lồ c&ocirc;ng nghệ n&agrave;y đ&atilde; ở vị thế của kẻ thống trị khi l&agrave; nh&agrave; sản xuất thiết bị di động cầm tay lớn nhất thế giới v&agrave; đ&oacute;ng g&oacute;p một phần lớn v&agrave;o nền kinh tế của Phần Lan. Tuy nhi&ecirc;n, họ đ&atilde; tụt dốc kh&ocirc;ng phanh. Năm 2012, Nokia thua lỗ 4 tỉ USD, v&agrave; chỉ sau đ&oacute; 1 năm, họ đ&atilde; đồng &yacute; b&aacute;n mảng di động, với 32.000 nh&acirc;n vi&ecirc;n, cho Microsoft. Trong tuy&ecirc;n bố của m&igrave;nh, Chủ tịch của c&ocirc;ng ty, &ocirc;ng Risto Siilasmaa đ&atilde; n&oacute;i:&nbsp;<em>&quot;C&oacute; một sự thực kh&ocirc;ng thể trốn tr&aacute;nh l&agrave; Nokia kh&ocirc;ng c&oacute; đủ nguồn lực để đ&aacute;p ứng kịp thời tốc độ ph&aacute;t triển của điện thoại v&agrave; c&aacute;c thiết bị th&ocirc;ng minh.&quot;</em></p>\r\n\r\n<p>Nhưng tuy Nokia đ&atilde; thu nhỏ quy m&ocirc; của m&igrave;nh, họ vẫn l&agrave; một c&ocirc;ng ty lớn, với doanh thu l&ecirc;n đến 26,1 tỷ USD v&agrave;o năm ngo&aacute;i. Tuy nhi&ecirc;n, họ đ&atilde; rất kh&aacute;c với thời ho&agrave;ng kim của m&igrave;nh, với những chiếc điện thoại đơn giản nhưng v&ocirc; c&ugrave;ng bền bỉ. Giờ họ kh&ocirc;ng c&ograve;n l&agrave;m những thứ m&agrave; người ti&ecirc;u d&ugrave;ng c&oacute; thể mua nữa. Ng&agrave;y nay, chiếc logo Nokia quen thuộc chỉ c&ograve;n được t&igrave;m thấy ở c&aacute;c bộ xử l&yacute; mạng, bộ định tuyến, bộ truy cập v&ocirc; tuyến của trạm cơ sở v&agrave; c&aacute;c th&agrave;nh phần kh&aacute;c của hệ thống cơ sở hạ tầng &quot;v&ocirc; h&igrave;nh&quot; với vai tr&ograve; l&agrave;m gi&aacute; đỡ cho mạng Internet di động, trong c&aacute;c cơ sở viễn th&ocirc;ng doanh nghiệp, nh&agrave; mạng hoặc ch&iacute;nh phủ.</p>\r\n', '1678268.jpg', NULL, 'Gã-khổng-lồ-Nokia-thực-sự-đang-lạc-trôi-ở-đâu', 0, 1, '2017-07-03 08:26:05'),
(8, '2017-07-08 07:46:10', NULL, '6 công nghệ ấn tượng sắp phổ biến trên smartphone', NULL, '<p>C&ocirc;ng nghệ tr&ecirc;n điện thoại th&ocirc;ng minh đang ph&aacute;t triển với tốc độ cực nhanh, với những cải tiến li&ecirc;n tục về về m&aacute;y ảnh, vi xử l&yacute; v&agrave; nhiều kh&iacute;a cạnh kh&aacute;c. C&aacute;ch đ&acirc;y kh&ocirc;ng l&acirc;u, cảm biến v&acirc;n tay, m&aacute;y ảnh k&eacute;p v&agrave; thanh to&aacute;n di động vẫn c&ograve;n l&agrave; những &yacute; tưởng xa lạ nhưng đến giờ th&igrave; ch&uacute;ng đ&atilde; phổ th&ocirc;ng tr&ecirc;n smartphone. V&agrave; c&ograve;n nhiều c&ocirc;ng nghệ tuyệt vời nữa sẽ đến với smartphone trong thời gian tới.</p>\r\n\r\n<p>Dưới đ&acirc;y l&agrave; 6 c&ocirc;ng nghệ dự đo&aacute;n sẽ xuất hiện tr&ecirc;n smartphone trong thời gian tới, theo tổng hợp của trang&nbsp;<em>Android Authority.</em></p>\r\n\r\n<p><strong>M&agrave;n h&igrave;nh c&oacute; thể gập</strong></p>\r\n\r\n<p>M&agrave;n h&igrave;nh uốn cong, linh hoạt v&agrave; c&oacute; thể gập lại đ&atilde; được kỳ vọng sẽ trở th&agrave;nh t&iacute;nh năng của smartphone từ rất l&acirc;u rồi nhưng hiện tại ch&uacute;ng ta đang ở gần thời điểm c&ocirc;ng nghệ n&agrave;y trở n&ecirc;n khả thi hơn bao giờ hết. Gần đ&acirc;y, cả Samsung v&agrave; Lenovo đ&atilde; nhiều lần tr&igrave;nh diễn c&aacute;c nguy&ecirc;n mẫu thử nghiệm của loại m&agrave;n h&igrave;nh n&agrave;y trước giới c&ocirc;ng nghệ.</p>\r\n', '1678176.jpg', NULL, '6-công-nghệ-ấn-tượng-sắp-phổ-biến-trên-smartphone', 0, 1, '2017-07-03 08:26:05'),
(9, '2017-07-03 07:53:25', NULL, 'Phổi có tự lành lại nếu chúng ta bỏ hút thuốc lá không?', NULL, '<p>Tuy nhi&ecirc;n, tr&ecirc;n b&aacute;o b&aacute;o khoa học&nbsp;<em>LiveScience,&nbsp;</em>b&aacute;c sĩ Norman Edelman, cố vấn khoa học cấp cao của Hiệp hội Bệnh phổi Mỹ v&agrave; l&agrave; chuy&ecirc;n gia về thuốc li&ecirc;n quan đến phổi, đ&atilde; cung cấp một tin vui: đ&oacute; l&agrave; sau khi một người dừng h&uacute;t thuốc l&aacute;, phổi của họ c&oacute; thể tự l&agrave;nh đến một mức độ n&agrave;o đ&oacute;.</p>\r\n\r\n<p>Ngay khi một người h&iacute;t v&agrave;o những chất c&oacute; trong kh&oacute;i thuốc l&aacute;, lớp m&agrave;ng của phổi bị bỏng v&agrave; g&acirc;y k&iacute;ch ứng. Sau v&agrave;i giờ h&uacute;t thuốc, chuyển động &quot;chải&quot; của c&aacute;c l&ocirc;ng tơ nằm trong phổi trở n&ecirc;n chậm dần. Điều n&agrave;y khiến ch&uacute;ng bị t&ecirc; liệt tạm thời v&agrave; khả năng l&agrave;m sạch c&aacute;c chất nhầy hay c&aacute;c vật chất kh&aacute;c như bụi, bẩn khỏi đường h&ocirc; hấp bị suy giảm.</p>\r\n\r\n<p>Một ph&aacute;t hiện kh&aacute;c khi quan s&aacute;t l&aacute; phổi của những người h&uacute;t thuốc đ&oacute; l&agrave; độ d&agrave;y v&agrave; mức độ tiết chất nhầy tăng l&ecirc;n. Bởi v&igrave; tốc độ c&aacute;c l&ocirc;ng tơ qu&eacute;t c&aacute;c chất nhầy n&agrave;y khỏi phổi kh&ocirc;ng nhanh bằng qu&aacute; tr&igrave;nh h&igrave;nh th&agrave;nh chất nhầy, v&igrave; vậy ch&uacute;ng t&iacute;ch trữ trong đường h&ocirc; hấp, đọng lại v&agrave; g&acirc;y ho. Sự t&iacute;ch tụ chất nhầy c&ograve;n g&acirc;y ra nhiều loại vi&ecirc;m nhiễm, bao gồm cả vi&ecirc;m phế quản m&atilde;n t&iacute;nh.</p>\r\n\r\n<p><strong>Vậy phổi tự l&agrave;nh như thế n&agrave;o?</strong></p>\r\n\r\n<p>Một c&aacute;ch kh&aacute;i qu&aacute;t, b&aacute;c sĩ Edelman n&oacute;i rằng, c&aacute;c vết bỏng nhẹ c&oacute; thể tự l&agrave;nh sau khi một người dừng h&uacute;t thuốc. N&oacute;i c&aacute;ch kh&aacute;c, c&aacute;c vết sưng tr&ecirc;n bề mặt phổi v&agrave; đường h&ocirc; hấp, v&agrave; c&aacute;c tế b&agrave;o phổi tiết ra &iacute;t chất nhầy hơn. C&aacute;c l&ocirc;ng tơ mới c&oacute; thể ph&aacute;t triển trở lại với khả năng l&agrave;m sạch c&aacute;c chất nhầy tốt hơn.</p>\r\n\r\n<p>Từ một v&agrave;i ng&agrave;y cho đến một tuần sau khi dừng h&uacute;t thuốc, những người từng h&uacute;t sẽ cảm thấy &iacute;t bị hụt hơi hơn khi tập luyện thể chất. Tuy điều n&agrave;y chưa c&oacute; lời l&iacute; giải r&otilde; r&agrave;ng, nhưng một phần l&agrave; do cơ thể loại bỏ được kh&iacute; CO ra khỏi m&aacute;u. Chất kh&iacute; n&agrave;y trong kh&oacute;i thuốc c&oacute; thể g&acirc;y cản trở việc vận chuyển kh&iacute; &ocirc;xy, do kh&iacute; CO b&aacute;m v&agrave;o hồng cầu thay v&igrave; &ocirc;xy. Điều n&agrave;y c&oacute; thể giải th&iacute;ch cho hiện tượng tr&ecirc;n của những người từng h&uacute;t thuốc.</p>\r\n\r\n<p>Theo b&aacute;c sĩ Edelman, một l&yacute; do kh&aacute;c cải thiện khả năng thở của những người bỏ thuốc l&agrave; c&aacute;c vết bỏng trong đường h&ocirc; hấp giảm, do lớp m&agrave;ng kh&ocirc;ng c&ograve;n phải tiếp x&uacute;c với c&aacute;c chất k&iacute;ch th&iacute;ch từ kh&oacute;i thuốc. C&aacute;c vết sưng tấy giảm đồng nghĩa với việc kh&ocirc;ng kh&iacute; dễ d&agrave;ng lưu th&ocirc;ng qua đường h&ocirc; hấp hơn.</p>\r\n\r\n<p>Một điều kh&aacute; kỳ lạ nữa đ&oacute; l&agrave;, những người từng h&uacute;t thuốc c&oacute; thể ho nhiều hơn sau v&agrave;i tuần bỏ thuốc. Nhưng đ&acirc;y l&agrave; dấu hiệu t&iacute;ch cực, điều n&agrave;y c&oacute; nghĩa c&aacute;c l&ocirc;ng tơ của phổi đang hoạt động trở lại, v&agrave; v&igrave; ch&uacute;ng đang loại bỏ c&aacute;c chất nhầy c&oacute; trong phổi, đường h&ocirc; hấp v&agrave; cổ họng, k&iacute;ch th&iacute;ch ho v&agrave; đẩy ch&uacute;ng ra ngo&agrave;i. &Ocirc;ng Edelman n&oacute;i rằng:&nbsp;<em>&quot;Ho l&agrave; qu&aacute; tr&igrave;nh l&agrave;m sạch c&aacute;c chất nhầy trong phổi&quot;</em>.</p>\r\n\r\n<p>Một lợi &iacute;ch kh&aacute;c của việc bỏ thuốc đ&oacute; l&agrave; giảm thiểu nguy cơ g&acirc;y ra ung thư phổi. Những người bỏ h&uacute;t thuốc c&agrave;ng l&acirc;u, rủi ro ung thư phổi c&agrave;ng giảm mạnh, mặc d&ugrave; rủi ro n&agrave;y kh&ocirc;ng bao giờ tr&aacute;nh được ho&agrave;n to&agrave;n.</p>\r\n\r\n<p>V&iacute; dụ, sau 10 năm bỏ thuốc, tỉ lệ mắc ung thư của người bỏ thuốc chỉ bằng một nửa so với người h&uacute;t thuốc, theo thống k&ecirc; của Trung t&acirc;m Kiểm so&aacute;t v&agrave; Ph&ograve;ng ngừa Dịch bệnh Mỹ. Nhưng những người đ&atilde; từng h&uacute;t thuốc vẫn c&oacute; khả năng tử vong do ung thư cao hơn những người chưa bao giờ h&uacute;t thuốc l&aacute;.</p>\r\n', '1677994.jpg', NULL, 'phoi-co-tu-l-nh-lai-neu-chung-ta-bo-hut-thuoc-la-khong', 0, 1, '2017-07-03 08:26:05'),
(10, '2017-07-03 07:54:02', NULL, 'Apple đang chuẩn bị cho cái chết của iPhone', NULL, '<p>Theo&nbsp;<em>Business Insider</em>, smartphone vẫn đang l&agrave; nền tảng điện to&aacute;n phổ biến nhất thế giới hiện nay. Tuy nhi&ecirc;n, Facebook, Google v&agrave; hiện giờ l&agrave; Apple lại đang chuyển hướng sang đầu tư mạnh mẽ v&agrave;o lĩnh vực thực tế ảo tăng cường (AR). Đ&acirc;y l&agrave; loại c&ocirc;ng nghệ cho ph&eacute;p lồng gh&eacute;p những h&igrave;nh ảnh ảo được l&agrave;m bằng đồ họa m&aacute;y t&iacute;nh v&agrave;o cuộc sống thực.</p>\r\n\r\n<p>&Yacute; tưởng l&agrave; v&agrave;o một ng&agrave;y n&agrave;o đ&oacute;, c&ocirc;ng nghệ AR sẽ được t&iacute;ch hợp v&agrave;o trong những chiếc k&iacute;nh th&ocirc;ng minh nhỏ gọn v&agrave; cơ động, thứ c&oacute; thể thay thế mọi loại m&agrave;n h&igrave;nh trong sinh hoạt h&agrave;ng ng&agrave;y của con người, kể cả iPhone.</p>\r\n\r\n<p>Apple đang nh&igrave;n thấy một tương lai m&agrave; nhiều c&ocirc;ng ty c&ocirc;ng nghệ kh&aacute;c cũng đang nh&igrave;n thấy: Thị trường smartphone đ&atilde; kh&ocirc;ng c&ograve;n l&agrave; động cơ tăng trưởng như một v&agrave;i năm trước nữa v&agrave; c&aacute;c c&ocirc;ng ty c&ocirc;ng nghệ cần thứ g&igrave; đ&oacute; mới mẻ để thay thế.</p>\r\n\r\n<p>CEO Tim Cook của Apple rất th&iacute;ch n&oacute;i về c&ocirc;ng nghệ AR. &quot;<em>T&ocirc;i rất phấn kh&iacute;ch về n&oacute;. T&ocirc;i chỉ muốn h&eacute;t l&ecirc;n thật to</em>&quot;, Tim Cook cho biết trong cuộc phỏng vấn đầu th&aacute;ng n&agrave;y với h&atilde;ng tin Bloomberg.</p>\r\n\r\n<p>Đ&oacute; kh&ocirc;ng phải l&agrave; lần đầu ti&ecirc;n &ocirc;ng tiết lộ về một sản phẩm lớn trong tương lai của Apple sẽ li&ecirc;n quan tới AR.</p>\r\n', '1678068.jpg', NULL, 'apple-dang-chuan-bi-cho-cai-chet-cua-iphone', 0, 1, '2017-07-03 08:26:05'),
(11, '2017-07-03 07:54:38', NULL, 'Android đã đánh bại iPhone để giành vị thế “thống trị” như thế nào?', NULL, '<p>Theo&nbsp;<em>CNN</em>, Google đ&atilde; hợp t&aacute;c c&ugrave;ng nh&agrave; mạng T-Mobile (Mỹ) để ph&aacute;t h&agrave;nh chiếc smartphone Android đầu ti&ecirc;n v&agrave;o ng&agrave;y 23/9/2008. Chiếc điện thoại mang t&ecirc;n l&agrave; G1 v&agrave; c&oacute; thiết kế rất &quot;k&igrave; lạ&quot; với viền m&agrave;n h&igrave;nh d&agrave;y, b&agrave;n ph&iacute;m trượt v&agrave; trackball theo kiểu của BlackBerry nhưng lại được trang bị m&agrave;n h&igrave;nh cảm ứng.</p>\r\n\r\n<p>Tuy nhi&ecirc;n, thiết bị n&agrave;y ch&iacute;nh l&agrave; cột mốc đ&aacute;nh dấu cuộc chiến thế kỷ đầy khốc liệt giữa hai g&atilde; khổng lồ c&ocirc;ng nghệ l&agrave; Google v&agrave; Apple. V&agrave;o đầu năm 2011, hệ điều h&agrave;nh Android đ&atilde; trở th&agrave;nh nền tảng smartphone phổ biến nhất tại Mỹ v&agrave; CEO Steve Jobs đ&atilde; tuy&ecirc;n bố Apple sẽ tổ chức &quot;<em>chiến tranh hạt nh&acirc;n</em>&quot; để chống lại Android.</p>\r\n\r\n<p>Apple đ&atilde; th&agrave;nh c&ocirc;ng trong việc tạo ra chiếc smartphone h&agrave;ng đầu l&agrave; iPhone. Tuy nhi&ecirc;n, ưu thế tr&ecirc;n thị trường vẫn lu&ocirc;n thuộc về Android nhờ v&agrave;o những mối quan hệ của Google với nh&agrave; mạng v&agrave; c&aacute;c h&atilde;ng smartphone c&oacute; gi&aacute; rẻ hơn. Theo dữ liệu của h&atilde;ng ph&acirc;n t&iacute;ch Gartner, trong qu&yacute; 1/2017, 86% smartphone tr&ecirc;n to&agrave;n cầu chạy tr&ecirc;n nền tảng Android.</p>\r\n\r\n<p>Vị thế thống trị của Android v&agrave;o thời điểm hiện nay c&agrave;ng trở n&ecirc;n c&oacute; &yacute; nghĩa hơn nếu ch&uacute;ng ta biết rằng nh&oacute;m ph&aacute;t triển của hệ điều h&agrave;nh n&agrave;y đ&atilde; từng bị iPhone lấy hết sự ch&uacute; &yacute; của c&ocirc;ng ch&uacute;ng. &quot;Google v&agrave; Apple đ&atilde; ph&aacute;t triển smartphone gần như l&agrave; c&ugrave;ng thời điểm với nhau&quot;, Fred Vogelstein, t&aacute;c giả cuốn s&aacute;ch &quot;Apple v&agrave; Google đ&atilde; tiến h&agrave;nh chiến tranh v&agrave; bắt đầu một cuộc c&aacute;ch mạng như thế n&agrave;o&quot; cho biết.</p>\r\n\r\n<p>V&agrave;o năm 2005, Google đ&atilde; mua Android, khi đ&oacute; c&ograve;n l&agrave; một startup nhỏ, để đạt được quyền ph&aacute;t triển một nền tảng mạnh mẽ cho c&aacute;c thiết bị di động. Tới năm 2006, nh&oacute;m ph&aacute;t triển Android của Google đ&atilde; thiết kế ra được phần mềm ri&ecirc;ng v&agrave; một chiếc điện thoại mang phong c&aacute;ch của BlackBerry.</p>\r\n\r\n<p>Kh&ocirc;ng l&acirc;u sau đ&oacute;, Steve Jobs đ&atilde; c&ocirc;ng bố iPhone, một thiết bị mang t&iacute;nh c&aacute;ch mạng đối với ng&agrave;nh c&ocirc;ng nghiệp di động v&agrave;o th&aacute;ng 1/2007. Theo t&aacute;c giả Fred Vogelstein, trưởng nh&oacute;m ph&aacute;t triển Android khi đ&oacute; l&agrave; Andy Rubin đ&atilde; ngồi y&ecirc;n trong xe &ocirc; t&ocirc; khi buổi thuyết tr&igrave;nh của Steve Jobs diễn ra.</p>\r\n\r\n<p>Rubin đ&atilde; y&ecirc;u cầu l&aacute;i xe t&igrave;m c&aacute;ch cho &ocirc;ng xem trực tuyến sự kiện n&agrave;y th&ocirc;ng qua Internet. &quot;<em>&Ocirc;i trời</em>&quot;, &ocirc;ng Rubin n&oacute;i, &quot;T<em>&ocirc;i đo&aacute;n l&agrave; ch&uacute;ng ta sẽ kh&ocirc;ng b&aacute;n chiếc điện thoại đ&oacute; (&aacute;m chỉ chiếc điện thoại đang thiết kế)</em>&quot;. Sau đ&oacute;, nh&oacute;m ph&aacute;t triển Android của Andy Rubin đ&atilde; nhanh ch&oacute;ng quay trở lại với bảng vẽ, loại bỏ thiết kế cũ v&agrave; thiết kế lại một thiết bị Android ho&agrave;n to&agrave;n mới.</p>\r\n\r\n<p>Nhờ vậy, chiếc điện thoại Android đầu ti&ecirc;n đ&atilde; c&oacute; m&agrave;n h&igrave;nh cảm ứng giống như iPhone. Tuy nhi&ecirc;n, bản th&acirc;n thiết bị n&agrave;y kh&ocirc;ng phải l&agrave; thứ c&oacute; thể đe dọa Apple, điều đ&aacute;ng lo ngại ch&iacute;nh l&agrave; chiến lược được Google đặt ra ph&iacute;a sau n&oacute;.</p>\r\n', '1678035.jpg', NULL, 'android-da-danh-bai-iphone-de-gi-nh-vi-the-thong-tri-nhu-the-n-o', 0, 1, '2017-07-03 08:26:05'),
(12, '2017-07-03 09:30:38', NULL, 'Đánh giá chi tiết HTC 10 Evo: 6 triệu được gì, mất gì? ', NULL, '<p><strong>Trong v&agrave;i năm trở lại đ&acirc;y, HTC đ&atilde; đưa về thị trường Việt Nam một v&agrave;i sản phẩm được giảm gi&aacute; mạnh. Vốn l&agrave; smartphone cao cấp của năm trước, khi giảm xuống mức gi&aacute; tầm trung th&igrave; những sản phẩm n&agrave;y dễ d&agrave;ng nổi l&ecirc;n so với đối thủ c&ugrave;ng tầm về thiết kế hoặc cấu h&igrave;nh.</strong></p>\r\n\r\n<p>Năm nay, h&atilde;ng n&agrave;y tiếp tục giới thiệu HTC 10 Evo ở Việt Nam với gi&aacute; chưa tới 6 triệu đồng. Chiếc điện thoại n&agrave;y ra mắt v&agrave;o năm ngo&aacute;i ở ph&acirc;n kh&uacute;c cận cao cấp với gi&aacute; b&aacute;n ban đầu l&agrave; 600 USD (hơn 13 triệu đồng). Gi&aacute; b&aacute;n ở thị trường Việt Nam kh&aacute; hấp dẫn khi m&aacute;y sở hữu chip mạnh nhất của Qualcomm năm 2015, thiết kế giống HTC 10 của năm 2016, m&agrave;n h&igrave;nh độ ph&acirc;n giải cao v&agrave; được c&agrave;i sẵn Android 7.0.</p>\r\n\r\n<p>Mức gi&aacute; b&aacute;n lẻ ở c&aacute;c cửa h&agrave;ng c&ograve;n hấp dẫn hơn, như ở hệ thống Ho&agrave;ng H&agrave; Mobile khi kh&ocirc;ng nhận qu&agrave; khuyến m&atilde;i th&igrave; gi&aacute; chỉ c&ograve;n 5,49 triệu. Với mức gi&aacute; ở tầm thấp trong c&aacute;c smartphone tầm trung hiện nay, bạn nhận được g&igrave; v&agrave; sẽ phải đ&aacute;nh đổi những g&igrave;?</p>\r\n\r\n<p><strong>Được: Thiết kế kim loại cứng c&aacute;p, mạnh mẽ, chống bụi nước IP57</strong></p>\r\n', '1674425.jpg', NULL, 'danh-gia-chi-tiet-htc-10-evo-6-trieu-duoc-gi-mat-gi', 0, 1, '2017-07-03 09:30:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `cus_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cus_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cus_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cus_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `total_price` float(10,3) NOT NULL,
  `cus_note` text COLLATE utf8_unicode_ci NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `cus_id`, `cus_name`, `cus_address`, `cus_phone`, `cus_email`, `total_price`, `cus_note`, `create_date`, `active`) VALUES
(5, 71, 'Vũ Đức Hồng', 'Cẩm Phả', '526236236', 'vuduchong209305@gmail.com', 10000000.000, '112512', '2017-07-09 04:15:40', 0),
(6, 71, 'Vũ Đức Hồng', 'Cẩm Phả', '526236236', 'vuduchong209305@gmail.com', 1200000.000, '25523', '2017-07-09 04:18:39', 0),
(7, 71, 'Vũ Đức Hồng', 'Cẩm Phả', '526236236', 'vuduchong209305@gmail.com', 5000000.000, 'vsbbxcb', '2017-07-09 04:19:49', 0),
(8, 71, 'Vũ Đức Hồng', 'Cẩm Phả', '526236236', 'vuduchong209305@gmail.com', 5000000.000, 'vsdvsd', '2017-07-09 04:20:57', 0),
(9, 71, 'Vũ Đức Hồng', 'Cẩm Phả', '526236236', 'vuduchong209305@gmail.com', 5000000.000, 'bsdbsdb', '2017-07-09 04:21:38', 0),
(10, 0, 'Dương Thanh Thảo', 'Hà Nội', '2165987624132', 'duongthanhthao@gmail.com', 5000000.000, 'chuyển ngay đến kia', '2017-07-09 10:55:41', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_products`
--

CREATE TABLE `tbl_products` (
  `pro_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `pro_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `base_url` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pro_price` double DEFAULT NULL,
  `pro_sale` int(20) DEFAULT NULL,
  `pro_descript` text COLLATE utf8_unicode_ci,
  `pro_detail` text COLLATE utf8_unicode_ci,
  `pro_image` text COLLATE utf8_unicode_ci,
  `pro_image_list` text COLLATE utf8_unicode_ci,
  `quantity` int(11) NOT NULL,
  `pro_date` date DEFAULT NULL,
  `is_home` tinyint(1) DEFAULT '1',
  `sort_order` int(11) NOT NULL,
  `pro_view` int(255) NOT NULL,
  `pro_sell` int(255) NOT NULL,
  `pro_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `hot` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_products`
--

INSERT INTO `tbl_products` (`pro_id`, `user_id`, `cat_id`, `menu_id`, `pro_title`, `base_url`, `pro_price`, `pro_sale`, `pro_descript`, `pro_detail`, `pro_image`, `pro_image_list`, `quantity`, `pro_date`, `is_home`, `sort_order`, `pro_view`, `pro_sell`, `pro_created`, `status`, `hot`) VALUES
(41, NULL, 6, NULL, 'Xiaomi Mi5c', 'xiaomi-mi5c', 5262362, 0, '', '', 'xiaomi-mi5c.jpg', '[]', 0, NULL, 1, 0, 37, 1, '2017-07-02 15:52:30', 1, 0),
(42, NULL, 4, NULL, 'HTC 10', 'htc-10', 1200000, 0, '', '', 'htc--10.jpg', '[]', 0, NULL, 1, 0, 42, 35, '2017-07-02 15:52:57', 1, 0),
(44, NULL, 3, NULL, 'Sony XZS', 'sony-xzs', 15126556, 0, '', '', 'xperia-xzs.jpg', '[]', 0, NULL, 1, 0, 464, 15, '2017-07-02 15:55:49', 1, 0),
(45, NULL, 5, NULL, 'LG V20', 'lg-v20', 51651612, 0, '', '', 'lg-v20.png', '[]', 0, NULL, 1, 0, 16, 31, '2017-07-02 15:56:32', 1, 0),
(58, NULL, 8, NULL, 'Oppo F3 Plus', 'oppo-f3-plus', 10000000, 0, '', '', 'oppo-f3-plus.png', '[\"oppo-f3-plus-1-1-400x460.png\",\"oppo-f3-plus-mobile-phone-large-1.jpg\"]', 0, NULL, 1, 0, 0, 0, '2017-07-08 01:27:33', 1, 0),
(57, NULL, 1, NULL, 'iPhone 7 Plus', 'iphone-7-plus', 17000000, 0, '', '', 'iphone-7-plus-red-128gb.png', '[\"iphone-7-plus-matt-black_sku-header.png\",\"iphone7-plus-rosegold-select-2016.png\"]', 0, NULL, 1, 0, 14, 0, '2017-07-08 01:25:31', 1, 1),
(59, NULL, 2, NULL, 'Galaxy S8', 'galaxy-s8', 14000000, 0, '', '', 'galaxy-s8.png', '[\"galaxy-s8-2-2.jpg\",\"galaxy-s8-2.jpg\"]', 0, NULL, 1, 0, 5, 0, '2017-07-08 01:28:47', 1, 0),
(60, NULL, 6, NULL, 'Xiaomi Redmi Note 3 Pro', 'xiaomi-redmi-note-3-pro', 3500000, 0, '', '', 'remid-note-3-pro.png', '[\"note-3-pro.png\",\"note-3-pro_1452968177.jpeg\"]', 0, NULL, 1, 0, 9, 0, '2017-07-08 01:33:31', 1, 0),
(61, NULL, 3, NULL, 'Sony Z5', 'sony-z5', 5600000, 0, '', '', 'sony-xperia-z5-premium.png', '[\"sony_xperia_z5_green_1446012837.jpg\",\"sony-xperia-z5-dual-400x460.png\"]', 0, NULL, 1, 0, 2, 0, '2017-07-08 01:34:43', 1, 0),
(62, NULL, 7, NULL, 'Asus Zenfone 3 Max', 'asus-zenfone-3-max', 5000000, 0, '', '', 'asus-zenfone-3-max.jpg', '[\"asus-zenfone-3-max-zc553kl-400-400x400.png\"]', 0, NULL, 1, 0, 18, 0, '2017-07-08 02:11:19', 1, 1),
(63, NULL, 4, NULL, 'HTC One M9', 'htc-one-m9', 3626723, 0, '', '', 'htc-one-m9.png', '[\"htc-10-bac-1-1.jpg\"]', 0, NULL, 1, 0, 10, 0, '2017-07-08 07:02:50', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_slides`
--

CREATE TABLE `tbl_slides` (
  `id` int(10) UNSIGNED NOT NULL,
  `slide_title` varchar(255) DEFAULT NULL,
  `slide_descript` varchar(255) DEFAULT NULL,
  `slide_image` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_slides`
--

INSERT INTO `tbl_slides` (`id`, `slide_title`, `slide_descript`, `slide_image`, `url`, `active`) VALUES
(29, 'Apple', NULL, 'apple.jpg', 'apple', 1),
(30, 'Galaxy S8', NULL, 'galaxy-s8.jpg', 'galaxy-s8', 1),
(31, 'iPhone 7 Plus Red', NULL, 'iphone-7-plus-red.jpg', 'iphone-7-plus-red', 1),
(32, 'LG G6', NULL, 'lg-g6.jpg', 'LG-G6', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(35) CHARACTER SET utf8 NOT NULL,
  `user_email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `user_password` varchar(35) CHARACTER SET utf8 NOT NULL,
  `user_fullname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `user_image` varchar(60) CHARACTER SET utf8 NOT NULL,
  `birthday` date DEFAULT NULL,
  `sex` enum('nam','nu') CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_fullname`, `user_image`, `birthday`, `sex`, `user_address`, `phone`, `created`, `user_status`) VALUES
(71, '', 'vuduchong209305@gmail.com', '123456789', 'Vũ Đức Hồng', 'photo-0-1492658409472.jpg', '2017-07-04', 'nam', 'Cẩm Phả', '526236236', '2017-07-06 05:56:43', 1),
(68, '', 'duongthanhthao@gmail.com', '123456789', 'Dương Thanh Thảo', 'Trollface1.png', '2017-07-22', 'nam', 'cẩm phả', '09891275823', '2017-07-06 05:35:27', 1),
(67, '', 'bxxcnb@gmail.com', '123456789', 'Vũ đức hồng', 'htc-10-bac-1-1.jpg', '2017-07-03', 'nam', 'cẩm phả', '3623272', '2017-07-06 05:26:55', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Chỉ mục cho bảng `tbl_categorys`
--
ALTER TABLE `tbl_categorys`
  ADD PRIMARY KEY (`cat_id`);

--
-- Chỉ mục cho bảng `tbl_config`
--
ALTER TABLE `tbl_config`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_detail_orders`
--
ALTER TABLE `tbl_detail_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `pro_id` (`pro_id`);

--
-- Chỉ mục cho bảng `tbl_inventory`
--
ALTER TABLE `tbl_inventory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pro_id` (`pro_id`);

--
-- Chỉ mục cho bảng `tbl_lienket`
--
ALTER TABLE `tbl_lienket`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `cus_id` (`cus_id`);

--
-- Chỉ mục cho bảng `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`pro_id`);

--
-- Chỉ mục cho bảng `tbl_slides`
--
ALTER TABLE `tbl_slides`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `a_id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `tbl_categorys`
--
ALTER TABLE `tbl_categorys`
  MODIFY `cat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT cho bảng `tbl_config`
--
ALTER TABLE `tbl_config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `tbl_detail_orders`
--
ALTER TABLE `tbl_detail_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT cho bảng `tbl_inventory`
--
ALTER TABLE `tbl_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;
--
-- AUTO_INCREMENT cho bảng `tbl_lienket`
--
ALTER TABLE `tbl_lienket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT cho bảng `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `news_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT cho bảng `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT cho bảng `tbl_slides`
--
ALTER TABLE `tbl_slides`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT cho bảng `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_detail_orders`
--
ALTER TABLE `tbl_detail_orders`
  ADD CONSTRAINT `tbl_detail_orders_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `tbl_order` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
