
<!-- [10]. Viết hàm chuyển toàn bộ các ký tự trong mảng số nguyên thành mảng các ký tự
hoa. Cần print_r hoặc var_dump mảng ra màn hình kiểm tra
Ví dụ: mảng 1 có các phần tử [‘a’, ‘b’, ‘ABC’] sau khi chuyển sẽ là [‘A’, ‘B’, ‘ABC’]
Áp dụng với 1 số mảng sau:
$arrs = [‘1’, ‘b, ‘c’, ‘d’];
$arrs = [‘a’, 0, null, false]; -->

<?php
    function convert_to_uppercase($array){
        $uppercase_array = [];
        foreach($array as $element){
            if(is_string($element)){
                $uppercase_array[] = strtoupper($element);
            }else if($element===null){
                $uppercase_array[] = 'null';
            }elseif($element===false){
                $uppercase_array[] = 'false';
            }else {
                $uppercase_array[] = (string)$element;
            }
        }
        return $uppercase_array;
    }
    $arrs = ['1','b','c','d'];
    print_r(convert_to_uppercase($arrs)) ;
    echo "<br>";

    $arrs = ['a', 0, null, false];
    print_r(convert_to_uppercase($arrs));
?>