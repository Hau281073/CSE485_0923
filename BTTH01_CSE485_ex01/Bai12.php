<!-- Cho mảng sau:
$numbers = [
 'key1' => 12, 
 'key2' => 30, 
 'key3' => 4, 
 'key4' => -123, 
 'key5' => 1234, 
 'key6' => -12565, 
];
❖ Lấy ra phần tử đầu tiên, phần tử cuối cùng trong mảng trên
❖ Tìm số lớn nhất, số nhỏ nhất, tổng các giá trị từ mảng trên
❖ Sắp xếp mảng theo chiều tăng, giảm các giá trị
❖ Sắp xếp mảng theo chiều tăng, giảm các key -->

<?php
    $numbers = [
        'key1' => 12, 
        'key2' => 30, 
        'key3' => 4, 
        'key4' => -123, 
        'key5' => 1234, 
        'key6' => -12565, 
    ];
    //Lấy ra phần tử đầu tiên, phần tử cuối cùng trong mảng
     $firstElement = array_shift($numbers);
     $lastElement = array_pop($numbers);

     echo "Phần tử đầu tiên: " .$firstElement. "<br>";
     echo "Phần tử cuối cùng: " .$lastElement. "<br>";
     echo "<br>";
    // $firstElement = $numbers[0];
    // $lastElement = $numbers[count($numbers) - 1];
    // echo "Phần tử đầu tiên: " . $firstElement . "\n";
    // echo "Phần tử cuối cùng: " . $lastElement . "\n";

    //Tìm số lớn nhất, số nhỏ nhất, tổng các giá trị từ mảng trên
    $maxValue = max($numbers);
    $minValue = min($numbers);
    $totalSum = array_sum($numbers);
    echo "Số lớn nhất: $maxValue<br>";
    echo "Số nhỏ nhất: $minValue<br>";
    echo "Tổng các giá trị: $totalSum<br>";

    //Sắp xếp mảng theo chiều tăng, giảm các giá trị
    $ascendingOrder = $numbers;
    asort($ascendingOrder);
    $descendingOrder = $numbers;
    arsort($descendingOrder);

    echo "<br>Sắp xếp mảng theo chiều tăng giá trị:<br>";
    print_r($ascendingOrder);

    echo "<br>Sắp xếp mảng theo chiều giảm giá trị:<br>";
    print_r($descendingOrder);
    echo "<br>";
    //Sắp xếp mảng theo chiều tăng, giảm các key 
    $ascendingKeyOrder = $numbers;
    ksort($ascendingKeyOrder);
    $descendingKeyOrder = $numbers;
    krsort($descendingKeyOrder);

    echo "<br>Sắp xếp mảng theo chiều tăng các key:<br>";
    print_r($ascendingKeyOrder);

    echo "<br>Sắp xếp mảng theo chiều giảm các key:<br>";
    print_r($descendingKeyOrder);


?>
