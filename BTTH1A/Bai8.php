<!-- Tìm chuỗi có độ dài lớn nhất, nhỏ nhất và độ dài tương ứng đó từ mảng sau:
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
Kết quả mong đợi: 
Chuỗi lớn nhất là program is PHP, độ dài = 14
Chuỗi lớn nhất là is, độ dài = 2 -->
<?php
    $arrays = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
    $minLength = PHP_INT_MAX;
    $maxLength = 0;
    foreach($arrays as $array){
        $length = strlen($array);
        if($length<$minLength){
            $minLength=$length;
        }
        if($length>$maxLength){
            $maxLength = $length;
        }
    }
    echo "Chuỗi lớn nhất là program is PHP, độ dài = $maxLength <br> ";
    echo "Chuỗi nhỏ nhất là is, độ dài = $minLength <br>";
?>
