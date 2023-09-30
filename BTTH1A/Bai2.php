<!-- [2]. Cho mảng $arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
Viết code để hiển thị chuỗi như sau, với các màu lấy từng mảng trên:
“Màu đỏ là màu yêu thích của Anh, trắng là màu yêu thích của Sơn, cam là màu yêu 
thích của Thắng, còn màu yêu thích của tôi là màu trắng” -->

<?php
    $arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
    $name = ['Anh','Sơn','Thắng','tôi'];
    $result = "";
    for($i=0;$i<count($arrs);$i++){
        $result .= 'Màu <span style="color:red;font-style:italic;font-wieght:bold">'.$arrs[$i].'</span> là màu yêu thích của' .$name[$i];
        if($i<count($arrs)-1){
            $result .= ",";
        }else{
            $result .= ".";
        }
    }
    echo $result;
?>