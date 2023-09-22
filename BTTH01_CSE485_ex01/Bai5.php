<?php 
    $a = [
        'a' => [
        'b' => 0,
        'c' => 1
        ],
        'b' => [
        'e' => 2,
        'o' => [
        'b' => 3
        ]
        ]
    ];
    //    ❖ Hãy lấy giá trị = 3 mà có key là b từ mảng trên
    $valueB = $a['b']['o']['b'];
    //    ❖ Hãy lấy giá trị = 1 mà có key là c từ mảng trên
    $valueC = $a['a']['c'];
    //    ❖ Hãy lấy thông tin của phần tử có key là a
    $arrayA = $a['a'];
    $arrayB = $a['b'];
    echo "Giá trị của key b là $valueB <br>";
    echo "Giá trị của key c là $valueC <br>";
    echo "Thông tin của phần tử có key là 'a': <br>";
    print_r($arrayA);
    echo "Thông tin của phần tử có key là 'b': <br>";
    print_r($arrayB);


?>