<!-- Cho mảng $array = array(1, 2, 3, 4, 5);
Thực hiện xóa phần tử thứ 3 trong mảng trên, sau khi xóa hãy đảm bảo key của mảng 
là tuần tự
Ví dụ:
Mảng ban đầu 
array (size=5)
0 => int 1
1 => int 2
2 => int 3
3 => int 4
4 => int 5
sau khi xóa phần tử thứ 3 sẽ có kết quả như sau
array (size=4)
0 => int 1
1 => int 2
2 => int 3
3 => int 5 -->
<?php
    $array = array(1, 2, 3, 4, 5);

    echo "Hàm trước khi xóa: <br>";
    print_r($array);

// Xóa phần tử thứ 3 (với index 2)
    unset($array[3]);

//  key của mảng là tuần tự
    $array = array_values($array);

    echo "<br> Hàm sau khi xóa:<br>";
    print_r($array);

?>