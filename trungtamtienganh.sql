-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3308
-- Thời gian đã tạo: Th10 11, 2021 lúc 03:13 PM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `trungtamtienganh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `id` int(11) NOT NULL,
  `tieude` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hoatdong` int(11) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT INTO `baiviet` (`id`, `tieude`, `noidung`, `hinhanh`, `hoatdong`, `time`) VALUES
(1, 'Cảm nhận học viên về trung tâm anh ngữ Venglish', '\"Mình đã học Tiếng Anh từ năm lớp 6 đến lớp 12. Đó là quãng đường 6 năm học tiếng anh nhưngmà nhìn lại thì tôi thấy – tôi không có gì ngoài Hello, Hi, My name is,...mà đôi khi đọc còn sai nữa à. Những lúc thầy cô dạy rất chán và thật sự tôi không có một tí động lực nào, để mà có thể tiếp thu một đống ngữ pháp khô khan , mà tôi thấy nó là ngán tận cổ họng.\r\n\r\nNhưng từ khi lên đại học – gặp được anh Vương . Anh ấy vừa là người thầy vừa là người anh, tôi biết anh ấy qua facebook, lúc trước tôi nhớ là lớp mình có anh bạn đi học anh ấy, sau đó tôi thấy phương pháp hay mà hấp dẫn quá, nên là tôi quyết định tham gia khóa học thử 1 tuần. Thật là không thể tin nỗi – chỉ ngay bữa đầu tiên học thử thì tôi đã nhận ra rằng – đây mới chính là cái mà mình tìm kiếm bấy lâu.', 'tintuc1.jpg', 1, '2021-09-17 14:46:37'),
(2, 'Những website tin tức giúp bạn học tốt tiếng Anh', 'Trang web này giúp cho người học có thể dễ dàng tra cứu tin tức bằng tiếng Anh hàng ngày mà không cần phải tra từ điển liên tục. Trang web lấy các bài báo từ nhiều nguồn khác nhau, bao gồm New York Times và viết lại chúng bằng những câu ngắn gọn, súc tích, sử dụng các từ vựng thông dụng. Các chủ đề bao gồm sức khỏe, giáo dục, luật pháp, nhập cư, tiền bạc và công việc. Thậm chí, bạn có thể tìm liên kết đến bài viết gốc và thực hành đọc các bản tin tiếng Anh khó hơn.', 'tintuc2.jpg', 1, '2021-09-17 14:48:44'),
(3, 'Lựa chọn tin tức tiếng Anh thực tế chất lượng cao', 'Thực tế là có rất nhiều nguồn chứa đựng nội dung tiếng Anh không tốt được đưa lên internet. Khi bạn học tiếng Anh qua tin tức, thứ bạn muốn là chất lượng. Vì thế hãy tìm kiếm các bài báo và video tiếng Anh thực tế (được thiết kế cho người bản ngữ) với ngôn ngữ rõ ràng, sắc nét. Các câu nên ngắn gọn và đầy đủ, có nghĩa là chúng nên sử dụng mẫu câu: chủ ngữ-động từ-bổ ngữ đi kèm lối hành văn dễ hiểu. Hãy cố gắng tìm kiếm các trang web tin tức nơi mà các nhân viên đến từ các nền văn hóa khác nhau và những bản tin có khả năng mở ra cái nhìn đa chiều cho bạn về một vấn đề. Dưới đây là một số trang tin tức thực tế được đánh giá cao:', 'tintuc3.jpg', 1, '2021-09-17 14:50:12'),
(4, 'Lựa chọn các trang tin tức tiếng Anh phù hợp với sở thích', 'Nếu chính trị không phải là chủ đề yêu thích của bạn, thì vẫn còn rất nhiều lựa chọn khác dành cho bạn. Hãy chọn lựa các website tin tức tiếng Anh theo chủ đề mà bạn yêu thích, đây sẽ là cách giúp bạn học tốt tiếng Anh hơn cả. Vì những chủ đề mà bạn quan tâm sẽ tạo ra động lực học tập cho bạn. Dưới đây là một số gợi ý:', 'tintuc4.jpg', 1, '2021-09-17 14:50:12'),
(5, 'Công nghệ có thực sự hỗ trợ tốt cho việc học tiếng Anh?', 'Sophie Partarrieu là nhân viên thuộc Hội đồng Anh tại Singapore, đã đưa ra ý kiến về việc giáo viên nên đóng vai trò thiết yếu trong các lớp học tiếng Anh giao tiếp thay vì đưa quá nhiều công nghệ vào việc giảng dạy cho học sinh. Vì sao Sophie Partarrieu lại đưa ra ý kiến như vậy và liệu vấn đề này có thực sự phù hợp trong thời đại công nghệ 4.0 như hiện nay?', 'tintuc5.jpg', 1, '2021-09-17 14:52:08'),
(6, 'Bí quyết hình thành thói quen học từ mới ', 'Để nói trôi chảy tiếng Anh, bạn cần có vốn từ vựng sâu rộng. Ngữ pháp có thể là yếu tố thứ yếu nhưng bạn chắc chắn không thể bỏ qua được nền tảng của mọi loại ngôn ngữ: từ vựng. Thực tế là bạn không thể nhớ hết cả quyển từ điển tiếng Anh chỉ trong một ngày.', 'tintuc6.jpg', 1, '2021-09-17 14:52:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaovien`
--

CREATE TABLE `giaovien` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `ho` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `diachi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_luong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `giaovien`
--

INSERT INTO `giaovien` (`id`, `id_user`, `ho`, `ten`, `ngaysinh`, `gioitinh`, `sdt`, `diachi`, `id_luong`) VALUES
(13, 86, 'Trần Thị', 'Mai', '1982-11-10', 'nam', 386444333, 'thanhhoa', 17),
(14, 87, 'Trần Thị', 'Hoa', '1990-11-10', 'nam', 386444333, 'ninhbinh', 16),
(15, 88, 'Nguyễn Văn', 'Phạm', '1990-11-04', 'nam', 2147483647, 'thanhhoa', 16),
(16, 96, 'Phạm Văn', 'Khoa', '1987-11-19', 'nam', 386478234, 'hà nội', 0),
(17, 101, 'Ngô Văn ', 'Nam', '1982-11-15', 'nam', 386299125, 'hà nội', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocphi`
--

CREATE TABLE `hocphi` (
  `id` int(11) NOT NULL,
  `sotien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `hocphi`
--

INSERT INTO `hocphi` (`id`, `sotien`) VALUES
(25, 5000000),
(26, 10000000),
(27, 8000000),
(28, 12000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocsinh`
--

CREATE TABLE `hocsinh` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `ho` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `diachi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `hocsinh`
--

INSERT INTO `hocsinh` (`id`, `id_user`, `ho`, `ten`, `ngaysinh`, `gioitinh`, `sdt`, `diachi`) VALUES
(28, 89, 'Trần văn', 'Bách', '2000-11-20', 'nam', 244444444, 'thanhhoa'),
(29, 90, 'Nguyễn Thị', 'Phương', '2021-11-13', 'nam', 386299125, 'namdinh'),
(30, 91, 'Trần Thị', 'Trang', '2000-11-12', 'nam', 386299125, 'namdinh'),
(31, 92, 'Phạm Thị ', 'Yến', '2000-11-11', 'nam', 386299125, 'thanhhoa'),
(32, 93, 'Lương ', 'Trung', '2000-11-20', 'nam', 386299125, 'hanam '),
(33, 94, 'Vũ ', 'Thảo', '2020-11-28', 'nam', 386299125, 'lạng sơn'),
(34, 95, 'Vũ', 'Long', '2000-11-26', 'nam', 386299125, 'namdinh'),
(35, 97, 'Hà Văn ', 'Minh', '2000-11-05', 'nam', 386299125, 'lạng sơn'),
(36, 98, 'Hà Thị', 'Thu', '2000-11-27', 'nam', 386299125, 'hà nội'),
(37, 99, 'Nguyễn Thị', 'My', '2000-11-27', 'nam', 386299125, 'hà nội'),
(38, 100, 'Trần', 'Bưởi', '2000-11-15', 'nam', 386299125, 'hà nội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `name`, `phone`, `email`, `time`) VALUES
(1, 'tranhuyentrang', 386299125, 'tuantuan@gmail.com', '2021-09-20 09:34:29'),
(2, 'trananhtuan', 24444444, 'trantrang@gmail.com', '2021-09-20 09:34:37'),
(11, 'yen', 1234567788, 'pyen@gmail.com', '2021-09-21 22:29:20'),
(13, 'trần thị bưởi', 386299125, 'tranbuoi@gmail.com', '2021-11-11 20:55:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoahoc`
--

CREATE TABLE `khoahoc` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(555) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `khoahoc`
--

INSERT INTO `khoahoc` (`id`, `title`, `img`, `content`, `active`, `time`) VALUES
(0, 'khoá học giao tiếp cơ bản', 'co1.png', 'Khả năng nghe hiểu 80 – 100% nội dung các buổi thuyết trình, các cuộc họp, đàm phán với đối tác nước ngoài. Nói nhanh, nói chuẩn, nói linh hoạt theo từng ngữ cảnh, tự tin bắt chuyện với Tây, làm chủ giao tiếp hằng ngày. Áp dụng nhuần nhuyễn hơn 300 mẫu câu giao tiếp thông dụng nhất.', 1, '2021-11-11 21:01:19'),
(1, 'Pre toiec 300-350+', '1.png', 'Khóa học TOEIC dành riêng cho người mất gốc, cam kết lấy lại căn bản tiếng Anh sau 2 tháng. Anh Ngữ Ms Hoa cam kết chất lượng đầu ra 100%, truyền động lực học tiếng Anh mỗi ngày.', 1, '2021-09-17 15:39:35'),
(2, 'Khóa 650 - 700+', '2.png', 'Khóa luyện thi TOEIC mục tiêu 650 - 700+ dành cho người mất gốc. Anh Ngữ ENGLISH cam kết đầu ra, học lại hoàn toàn MIỄN PHÍ nếu không đạt yêu cầu.', 1, '2021-09-17 15:39:35'),
(3, 'KHÓA 800+ TOEIC', '3.png', 'Khóa học TOEIC mục tiêu 800 điểm tập trung ôn tập kiến thức chuyên sâu. Anh Ngữ ENGLISH cam kết đầu ra trên 800 TOEIC chỉ từ 8 - 10 tháng!', 1, '2021-09-17 15:41:46'),
(4, 'KHÓA GIAO TIẾP - TOEIC 4 KỸ NĂNG', '4.png', 'Khóa 10 buổi TOEIC 4 kỹ năng giúp các em tiếp cận với Toeic 4 kỹ năng một cách trực quan và rõ ràng nhất, đặc biệt là 2 kỹ năng Speaking và Writing.', 1, '2021-09-17 15:41:46'),
(5, 'IELTS MASTER', '5.png', 'Đạt IELTS từ 6.0-->7.0+. Ôn luyện kỹ chiến lược làm từng dạng bài trong IELTS, Tập trung chuyên sâu vào hai kỹ năng Nói và Viết, Củng cố và bổ sung lượng từ vựng và cấu trúc ngữ pháp học thuật nhằm tăng tốc độ hiểu và làm bài', 1, '2021-09-17 15:43:20'),
(6, 'IELTS FOCUS', '6.png', 'Đạt IELTS từ 4.0--> 5.5+. Cải thiện từ vựng-ngữ pháp-phát âm IELTS và sự linh hoạt khi áp dụng speaking-writing. Cải thiện khả năng listening, luyện speaking thông qua luyện tập các dạng đề chính.Phân tích và áp dụng thành thạo kỹ thuật làm bài.', 0, '2021-09-17 15:43:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `id` int(11) NOT NULL,
  `tenlop` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `khoa` year(4) NOT NULL,
  `hoatdong` int(11) NOT NULL,
  `sobuoi` int(11) NOT NULL,
  `lichhoc` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_hocphi` int(11) NOT NULL,
  `id_giaovien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`id`, `tenlop`, `khoa`, `hoatdong`, `sobuoi`, `lichhoc`, `id_hocphi`, `id_giaovien`) VALUES
(22, 'toeic550', 2021, 1, 10, 'Tối thứ 2, 4', 25, 17),
(23, 'toeic650', 2021, 1, 10, 'Tối thứ 2, 4', 27, 14),
(24, 'toeic850', 2021, 1, 15, 'Tối thứ 4, 6', 26, 15),
(25, 'giao tiếp căn bản', 2021, 1, 10, 'Tối thứ 3, 5', 28, 13);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lopchitiet`
--

CREATE TABLE `lopchitiet` (
  `id` int(11) NOT NULL,
  `id_lop` int(11) NOT NULL,
  `id_hocsinh` int(11) NOT NULL,
  `sobuoidahoc` int(11) NOT NULL,
  `apdungvoucher` int(11) NOT NULL,
  `buoinghi` int(11) NOT NULL,
  `hocphidanop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `lopchitiet`
--

INSERT INTO `lopchitiet` (`id`, `id_lop`, `id_hocsinh`, `sobuoidahoc`, `apdungvoucher`, `buoinghi`, `hocphidanop`) VALUES
(59, 22, 28, 3, 0, 0, 5000000),
(60, 22, 29, 3, 0, 0, 2000000),
(61, 22, 30, 3, 0, 1, 0),
(62, 22, 31, 3, 0, 0, 0),
(63, 22, 32, 3, 0, 0, 5000000),
(64, 23, 34, 1, 0, 0, 8000000),
(65, 23, 33, 1, 0, 0, 0),
(66, 22, 37, 3, 0, 0, 5000000),
(67, 22, 36, 3, 0, 0, 5000000),
(68, 23, 35, 1, 0, 0, 0),
(69, 22, 38, 1, 4500000, 1, 2000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `luong`
--

CREATE TABLE `luong` (
  `id` int(11) NOT NULL,
  `luongcoban` int(11) NOT NULL,
  `hesoluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `luong`
--

INSERT INTO `luong` (`id`, `luongcoban`, `hesoluong`) VALUES
(16, 5000000, 1),
(17, 7000000, 1),
(18, 10000000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rank` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `rank`) VALUES
(2, 'admin', '111', '1'),
(86, 'tranmai', '111', '2'),
(87, 'tranhoa', '111', '2'),
(88, 'nguyenpham', '111', '2'),
(89, 'tranbach', '111', '3'),
(90, 'nguyenphuong', '111', '3'),
(91, 'trantrang', '111', '3'),
(92, 'phamyen', '111', '3'),
(93, 'luongtrung', '111', '3'),
(94, 'vuthao', '111', '3'),
(95, 'vulong', '111', '3'),
(96, 'khoapham', '111', '2'),
(97, 'haminh', '222', '3'),
(98, 'hathu', '222', '3'),
(99, 'nguyenmy', '222', '3'),
(100, 'tranbuoi', '2222', '3'),
(101, 'ngonam', '1111', '2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `voucher`
--

CREATE TABLE `voucher` (
  `id` int(11) NOT NULL,
  `magiamgia` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sotien` int(11) NOT NULL,
  `sophantram` int(11) NOT NULL,
  `solanhieuluc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `voucher`
--

INSERT INTO `voucher` (`id`, `magiamgia`, `sotien`, `sophantram`, `solanhieuluc`) VALUES
(8, 'aaa', 1000000, 0, 5),
(9, 'chaohocsinh', 500000, 0, 4);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `giaovien`
--
ALTER TABLE `giaovien`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `hocphi`
--
ALTER TABLE `hocphi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hocsinh`
--
ALTER TABLE `hocsinh`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khoahoc`
--
ALTER TABLE `khoahoc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kn_lop_hocphi` (`id_hocphi`),
  ADD KEY `id_giaovien` (`id_giaovien`);

--
-- Chỉ mục cho bảng `lopchitiet`
--
ALTER TABLE `lopchitiet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kn_lop` (`id_lop`),
  ADD KEY `kn_hocsinh` (`id_hocsinh`);

--
-- Chỉ mục cho bảng `luong`
--
ALTER TABLE `luong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Chỉ mục cho bảng `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `magiamgia` (`magiamgia`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `giaovien`
--
ALTER TABLE `giaovien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `hocphi`
--
ALTER TABLE `hocphi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `hocsinh`
--
ALTER TABLE `hocsinh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `lop`
--
ALTER TABLE `lop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `lopchitiet`
--
ALTER TABLE `lopchitiet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `luong`
--
ALTER TABLE `luong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT cho bảng `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `giaovien`
--
ALTER TABLE `giaovien`
  ADD CONSTRAINT `kn_gv` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `hocsinh`
--
ALTER TABLE `hocsinh`
  ADD CONSTRAINT `kn_hs` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `kn_lop_hocphi` FOREIGN KEY (`id_hocphi`) REFERENCES `hocphi` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `lop_ibfk_1` FOREIGN KEY (`id_giaovien`) REFERENCES `giaovien` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `lopchitiet`
--
ALTER TABLE `lopchitiet`
  ADD CONSTRAINT `kn_hocsinh` FOREIGN KEY (`id_hocsinh`) REFERENCES `hocsinh` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `kn_lop` FOREIGN KEY (`id_lop`) REFERENCES `lop` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
