<!-- Bài 1: Viết hàm tổng – tích – hiệu - thương của các phần tử trong mảng số nguyên sau, 
sử dụng hàm trong PHP: $arrs = [2, 5, 6, 9, 2, 5, 6, 12 ,5];
Kết quả hiển thị được hiển thị như sau:
Tổng các phần tử = 2 + 5 + 6 + 9 + 2 + 5 + 6 + 12 + 5 = <giá-trị>
Tích các phần tử = 2 * 5 * 6 * 9 * 2 * 5 * 6 * 12 * 5 = <giá-trị>
Hiệu các phần tử = 2 - 5 - 6 - 9 - 2 - 5 - 6 - 12 - 5 = <giá-trị>
Thương các phần tử = 2 / 5 / 6 / 9 / 2 / 5 / 6 / 12 / 5 = <giá-trị> -->

<?php
    $arrs=[2,5,6,9,2,5,6,12,5];
    //Tổng các phần tử
    $sum =array_sum($arrs);
    //Tích các phần tử
    $product =array_product($arrs);
    //Hiệu các phần tử
    $diff = $arrs[0];
    for ($i = 1; $i < count($arrs); $i++) {
        $diff -= $arrs[$i];
    }
        
    //Thương các phần tử
    $quotient = $arrs[0];
    for ($i = 1; $i < count($arrs); $i++) {
        $quotient /= $arrs[$i];
    }
   
    echo "Tổng các phần tử =". implode(" + ", $arrs) . " = ". $sum ."<br>";
    echo "Tích các phần tử =". implode(" * ", $arrs) . " = " .$product."<br>";
    echo "Hiệu các phần tử =". implode(" - ", $arrs) . " = " . $diff."<br>";
    echo "Thương các phần tử =". implode(" / ", $arrs) . " = " . $quotient;
?>