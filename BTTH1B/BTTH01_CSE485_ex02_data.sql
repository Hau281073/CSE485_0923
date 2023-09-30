-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 25, 2023 lúc 06:12 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btth01_cse485`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `ma_bviet` int(10) UNSIGNED NOT NULL,
  `tieude` varchar(200) NOT NULL,
  `ten_bhat` varchar(100) NOT NULL,
  `ma_tloai` int(10) UNSIGNED DEFAULT NULL,
  `tomtat` text NOT NULL,
  `noidung` text DEFAULT NULL,
  `ma_tgia` int(10) UNSIGNED DEFAULT NULL,
  `ngayviet` datetime NOT NULL DEFAULT current_timestamp(),
  `hinhanh` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT INTO `baiviet` (`ma_bviet`, `tieude`, `ten_bhat`, `ma_tloai`, `tomtat`, `noidung`, `ma_tgia`, `ngayviet`, `hinhanh`) VALUES
(1, 'Chúng Ta Vượt Qua Mọi Khó Khăn', 'Lạc Trôi', 16, '\"Bài Lạc Trôi\" là một bài hát do ca sĩ Sơn Tùng M-TP thể hiện. Được phát hành vào năm 2017, bài hát nhanh chóng trở thành một hiện tượng âm nhạc và nhận được sự quan tâm rộng rãi từ công chúng.\"Lạc Trôi\" mang một thông điệp sâu sắc về cuộc sống hiện đại và những khó khăn trong việc tìm kiếm định hướng và ý nghĩa trong cuộc sống. Lời bài hát diễn tả sự lạc lõng, mất phương hướng, và cảm giác mất tình yêu thân thuộc. Nhưng qua âm nhạc và cách biểu đạt, bài hát truyền tải một thông điệp tích cực về việc tự tìm lại chính mình và khám phá ý nghĩa đích thực trong cuộc sống. \"Lạc Trôi\" kết hợp các yếu tố âm nhạc hiện đại và truyền thống, với sự kết hợp của nhạc điện tử, rap và giai điệu đồng quê. Bài hát được chú trọng vào giai điệu bắt tai và lời ca sĩ truyền cảm, tạo ra một sự kết hợp hài hòa và cuốn hút.', '[Intro]\r\nYeah, yeah, yeah\r\n[Verse 1]\r\nNgười ta nói rằng cuộc sống là đường thẳng\r\nNhưng tôi lại thấy nó quanh co\r\nNgười ta nói rằng hạnh phúc nằm trong tay mình\r\nNhưng tôi lại thấy nó xa vời\r\nNgười ta nói rằng tuổi trẻ là khoảng thời gian tươi đẹp nhất\r\nNhưng tôi lại thấy nó như cơn mưa lạnh giá\r\n[Pre-Chorus]\r\nLạc trôi giữa đời, lạc trôi giữa đời\r\nLạc trôi giữa đời, lạc trôi giữa đời\r\n[Chorus]\r\nVì đâu mà em lạc trôi?\r\nVì đâu mà ta xa cách?\r\nVì đâu mà trong tim ta cứ đau nhói?\r\nVì đâu mà em lạc trôi?\r\nVì đâu mà ta xa cách?\r\nVì đâu mà trong tim ta cứ đau nhói?\r\n[Verse 2]\r\nNgười ta nói rằng thành công nằm trong sự kiên trì\r\nNhưng tôi lại thấy nó khó khăn\r\nNgười ta nói rằng tình yêu là đẹp nhất\r\nNhưng tôi lại thấy nó phức tạp\r\nNgười ta nói rằng đôi khi phải chấp nhận buông tay\r\nNhưng tôi lại thấy nó đau lòng', 6, '2023-06-18 00:00:00', '../img/post1.jpg'),
(2, 'Chúng Ta Vượt Qua Mọi Khó Khăn', 'Ước Gì', 4, 'In quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet. Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui. Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.', 'Ut at dolor quis odio consequat varius.', 10, '2023-05-03 00:00:00', '../img/post2.jpg'),
(3, 'Hãy Ghi Sâu Trong Tim', 'Đánh Mất Em', 12, 'Nullam porttitor lacus at turpis. Donec posuere metus vitae ipsum.', 'Phasellus in felis. Donec semper sapien a libero. Nam dui. Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius. Integer ac leo. Pellentesque ultrices mattis odio. Donec vitae nisi.', 2, '2021-01-03 00:00:00', '../img/post3.jpg'),
(4, 'Vòng Tay Ấm Áp Của Em Là Nơi Anh Tìm Được Sự Bình Yên', 'Anh Nhà Ở Đâu Thế', 10, 'Cras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque. Quisque porta volutpat erat.', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis. Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor.', 16, '2022-08-16 00:00:00', '../img/post4.jpg'),
(5, 'Khi Đôi Ta Gặp Nhau Trong Những Cơn Mưa Rào Đầu Tiên', 'Lạc Trôi', 20, 'Quisque ut erat. Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem. Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat. Praesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.', 'Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.', 16, '2021-12-23 00:00:00', '../img/post5.jpg'),
(6, 'Nắm Tay Nhau Đi Qua Mọi Chông Gai', 'Đường Tôi Chở Em Về', 1, 'In est risus, auctor sed, tristique in, tempus sit amet, sem. Fusce consequat. Nulla nisl.', 'In hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante.', 9, '2023-03-20 00:00:00', '../img/post6.jpg'),
(7, 'Điều Kỳ Diệu Sẽ Xảy Ra Trên Đường Đời', 'Sóng Gió', 20, 'Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh. Quisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros. Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat. In congue. Etiam justo.', 'Sed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus. Pellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 19, '2023-04-25 00:00:00', '../img/post7.jpg'),
(8, 'Với Tình Yêu Và Niềm Tin', 'Nơi Này Có Anh', 15, 'Aliquam erat volutpat. In congue.', 'Morbi a ipsum. Integer a nibh. In quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet. Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui. Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc.', 14, '2022-05-03 00:00:00', '../img/post8.jpg'),
(9, 'Chúng Ta Tan Chảy Trong Những Nốt Nhạc Dịu Dàng', 'Cánh Hồng Phai', 3, 'Nulla ac enim.', 'In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem. Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat. Praesent blandit.', 1, '2022-03-20 00:00:00', NULL),
(10, 'Chúng Ta Tan Chảy Trong Những Nốt Nhạc Dịu Dàng', 'Có Ai Thương Em Như Anh', 6, 'Nam tristique tortor eu pede.', 'Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros. Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.', 13, '2020-11-05 00:00:00', NULL),
(12, 'Hãy Ghi Sâu Trong Tim', 'Sài Gòn Đau Lòng Quá', 20, 'Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh. Quisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros. Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.', 'Cras pellentesque volutpat dui.', 15, '2023-06-09 00:00:00', NULL),
(13, 'Chúng Ta Sẽ Chẳng Bao Giờ Rời Xa', 'Cùng Anh', 13, 'Etiam faucibus cursus urna. Ut tellus. Nulla ut erat id mauris vulputate elementum. Nullam varius.', 'Aenean auctor gravida sem. Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio. Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 19, '2021-11-06 00:00:00', NULL),
(14, 'Giữ Chặt Tình Yêu', 'Đừng Hỏi Em', 18, 'Maecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.', 'Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti. Nullam porttitor lacus at turpis.', 1, '2022-12-20 00:00:00', NULL),
(15, 'Điều Kỳ Diệu Sẽ Xảy Ra Trên Đường Đời', 'Lạc Trôi', 4, 'Proin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl. Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum. Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est. Phasellus sit amet erat.', 'Duis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit. Donec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue.', 17, '2021-04-25 00:00:00', NULL),
(16, 'Chúng Ta Vượt Qua Mọi Khó Khăn', 'Nơi Này Có Anh', 15, 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam vel augue.', 'Aliquam sit amet diam in magna bibendum imperdiet.', 5, '2021-03-10 00:00:00', NULL),
(17, 'Chúng Ta Tan Chảy Trong Những Nốt Nhạc Dịu Dàng', 'Chúng Ta Không Thuộc Về Nhau', 20, 'Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.', 'Aenean auctor gravida sem. Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio. Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin interdum mauris non ligula pellentesque ultrices.', 15, '2021-05-02 00:00:00', NULL),
(18, 'Giữ Chặt Tình Yêu', 'Để Mỵ Nói Cho Mà Nghe', 10, 'Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat. In congue. Etiam justo.', 'Ut tellus. Nulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi. Cras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque. Quisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla.', 8, '2023-04-11 00:00:00', NULL),
(19, 'Tình Yêu Là Một Câu Chuyện Dài Đẹp', 'Buồn Của Anh', 15, 'Nulla facilisi. Cras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque. Quisque porta volutpat erat.', 'Integer ac leo. Pellentesque ultrices mattis odio. Donec vitae nisi. Nam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla. Sed vel enim sit amet nunc viverra dapibus. Nulla suscipit ligula in lacus. Curabitur at ipsum ac tellus semper interdum. Mauris ullamcorper purus sit amet nulla.', 11, '2021-10-15 00:00:00', NULL),
(20, 'Một Đời Yêu Nhau', 'Đường Tôi Chở Em Về', 5, 'Morbi vel lectus in quam fringilla rhoncus. Mauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero. Nullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum.', 'Maecenas pulvinar lobortis est. Phasellus sit amet erat.', 13, '2022-12-20 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tacgia`
--

CREATE TABLE `tacgia` (
  `ma_tgia` int(10) UNSIGNED NOT NULL,
  `ten_tgia` varchar(100) NOT NULL,
  `hinh_tgia` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tacgia`
--

INSERT INTO `tacgia` (`ma_tgia`, `ten_tgia`, `hinh_tgia`) VALUES
(1, 'Nhacvietplus', '../img/cute-anime-profile-pictures-ocsp6rlknshumiuw.jpg'),
(2, 'WibuMusic', '../img/202109271108455348-f85d5d71-f6a6-4094-9965-2de3ab5c7450.jpeg'),
(3, 'DanCaQuanHo', '../img/9ac237406a382b7cdfc308ad35064194.jpg'),
(4, 'RapNeverDie', '../img/5_UwuAZQl.jpg'),
(5, 'HoaHaiPhong', '../img/egucation-girl.png'),
(6, 'Nhacvietplus', '../img/file.tinnhac.com-resize-600x-2021-07-09-_20210709135019-0459.jpeg'),
(7, 'DanCaQuanHo', '../img/timestudio.vn-corporate-headshot-pricing-01.jpg'),
(8, 'WibuMusic', '../img/default.jpg'),
(9, 'RapNeverDie', '../img/default.jpg'),
(10, 'WibuMusic', '../img/default.jpg'),
(11, 'WibuMusic', '../img/default.jpg'),
(12, 'WibuMusic', '../img/default.jpg'),
(13, 'Nhacvietplus', '../img/default.jpg'),
(14, 'HoaHaiPhong', '../img/default.jpg'),
(15, 'WibuMusic', '../img/default.jpg'),
(16, 'DanCaQuanHo', '../img/default.jpg'),
(17, 'RapNeverDie', '../img/default.jpg'),
(18, 'DanCaQuanHo', '../img/default.jpg'),
(19, 'CaiLuong', '../img/default.jpg'),
(20, 'CaiLuong', '../img/default.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `ma_tloai` int(10) UNSIGNED NOT NULL,
  `ten_tloai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`ma_tloai`, `ten_tloai`) VALUES
(1, 'Pops'),
(2, 'Rock'),
(3, 'Jazz'),
(4, 'Nhạc trữ tình'),
(5, 'Hip hop'),
(6, 'Country'),
(7, 'EDM'),
(8, 'Classical'),
(9, 'Blues'),
(10, 'Reggae'),
(11, 'Funk'),
(12, 'Soul'),
(13, 'Gospel'),
(14, 'Disco'),
(15, 'Punk'),
(16, 'Metal'),
(17, 'Alternative'),
(18, 'Folk'),
(19, 'Indie'),
(20, 'Electronic');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`ma_bviet`),
  ADD KEY `ma_tgia` (`ma_tgia`),
  ADD KEY `ma_tloai` (`ma_tloai`);

--
-- Chỉ mục cho bảng `tacgia`
--
ALTER TABLE `tacgia`
  ADD PRIMARY KEY (`ma_tgia`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`ma_tloai`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `baiviet_ibfk_1` FOREIGN KEY (`ma_tloai`) REFERENCES `theloai` (`ma_tloai`),
  ADD CONSTRAINT `baiviet_ibfk_2` FOREIGN KEY (`ma_tgia`) REFERENCES `tacgia` (`ma_tgia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
