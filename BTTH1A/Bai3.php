<!-- Cho mảng $arrs = ['PHP', 'HTML', 'CSS', 'JS']. Hãy viết code hiển thị nội dung 
như hình sau: -->
<?php
    $arr = ['PHP','HTML','CSS','JS'];
    echo "<table border ='1'>";
    echo "<tr>";
    echo "<th>Tên khoá học</th>";
    echo "</tr>";
    for($i=0;$i<count($arr);$i++){
        echo "<tr>";
        echo "<td>".$arr[$i]."</td>";
        echo "</tr>";
    }
    echo "</table>";
?>