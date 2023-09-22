<!-- Viết hàm chuyển toàn bộ các ký tự trong mảng số nguyên thành mảng các ký tự
thường. Cần print_r hoặc var_dump mảng ra màn hình kiểm tra
VD: mảng 1 có các phần tử [‘a’, ‘b’, ‘ABC’] sau khi chuyển sẽ là [‘a’, ‘b’, ‘abc’]
Áp dụng với 1 số mảng sau:
$arrs = [‘1’, ‘B, ‘C’, ‘E’];
$arrs = [‘a’, 0, null, false]; -->

<?php
    function convert_to_lowercase($array){
        $lowercase_array = [];
        foreach($array as $element){
            if(is_string($element)){
                $lowercase_array[] = strtolower($element);
            }else if($element===null){
                $lowercase_array[] = 'null';
            }elseif($element===false){
                $lowercase_array[] = 'false';
            }else {
                $lowercase_array[] = (string)$element;
            }
        }
        return $lowercase_array;
    }
    $arrs = ['1','B','C','E'];
    print_r(convert_to_lowercase($arrs)) ;
    echo "<br>";

    $arrs = ['a', 0, null, false];
    print_r(convert_to_lowercase($arrs));
?>