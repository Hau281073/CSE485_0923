/*
a. Liệt kê các bài viết về các bài hát thuộc thể loại Nhạc trữ tình 
*/
SELECT baiviet.tieude, baiviet.ten_bhat, theloai.ten_tloai
FROM baiviet INNER JOIN theloai on baiviet.ma_tloai = theloai.ma_tloai 
WHERE ten_tloai = 'Nhạc trữ tình'

/*
b. Liệt kê các bài viết của tác giả “Nhacvietplus”
*/
SELECT  tacgia.ma_tgia, tacgia.ten_tgia, baiviet.tieude
FROM baiviet INNER JOIN tacgia on baiviet.ma_tgia = tacgia.ma_tgia
WHERE ten_tgia = 'Nhacvietplus'
/*c. Liệt kê các thể loại nhạc chưa có bài viết cảm nhận nào. */
SELECT theloai.ten_tloai
FROM theloai 
LEFT JOIN baiviet  ON theloai.ma_tloai = baiviet.ma_tloai
WHERE baiviet.ma_tloai IS NULL;
/* d. Liệt kê các bài viết với các thông tin sau: mã bài viết, tên bài viết, tên bài hát, tên tác giả, tên 
thể loại, ngày viết. */
SELECT baiviet.ma_bviet, baiviet.tieude, baiviet.ten_bhat, tacgia.ten_tgia, theloai.ten_tloai, baiviet.ngayviet
FROM baiviet 
JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia;
/* e. Tìm thể loại có số bài viết nhiều nhất */
SELECT tl.ten_tloai, COUNT(bv.ma_bviet) AS so_bai_viet
FROM theloai tl
JOIN baiviet bv ON tl.ma_tloai = bv.ma_tloai
GROUP BY tl.ten_tloai
ORDER BY so_bai_viet DESC
LIMIT 1;
/* e. Tìm 2 tác giả có số bài viết nhiều nhất */

SELECT tg.ten_tgia, COUNT(bv.ma_bviet) AS so_bai_viet
FROM tacgia tg
JOIN baiviet bv ON tg.ma_tgia = bv.ma_tgia
GROUP BY tg.ten_tgia
ORDER BY so_bai_viet DESC
LIMIT 2;
/*g. Liệt kê các bài viết về các bài hát có tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”, 
“em”*/
SELECT *
FROM baiviet
WHERE ten_bhat LIKE '%yêu%' OR ten_bhat LIKE '%thương%' OR ten_bhat LIKE '%anh%' OR ten_bhat LIKE '%em%';
/*h. Liệt kê các bài viết về các bài hát có tiêu đề bài viết hoặc tựa bài hát chứa 1 trong các từ 
“yêu”, “thương”, “anh”, “em” */
SELECT *
FROM baiviet
WHERE tieude LIKE '%yêu%' OR tieude LIKE '%thương%' OR tieude LIKE '%anh%' OR tieude LIKE '%em%'
   OR ten_bhat LIKE '%yêu%' OR ten_bhat LIKE '%thương%' OR ten_bhat LIKE '%anh%' OR ten_bhat LIKE '%em%';