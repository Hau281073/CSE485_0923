<?php   
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }else{
        $page = 1;
    }
    try{
        $conn = new PDO("mysql:host=localhost;dbname=btth01_cse485","root","");
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }

// //C1:MySQLI
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "btth01_cse485";

// // Tạo kết nối
// $conn = mysqli_connect($servername, $username, $password, $dbname);

// // Kiểm tra kết nối
// if (!$conn) {
//     die("Kết nối thất bại: " . mysqli_connect_error());
// }

// // Thực thi truy vấn
// $sql = "SELECT * FROM users";
// $result = mysqli_query($conn, $sql);

// // Kiểm tra kết quả
// if (mysqli_num_rows($result) > 0) {
//     // Lặp qua các hàng kết quả
//     while($row = mysqli_fetch_assoc($result)) {
//         echo "ID: " . $row["id"]. " - Tên: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
//     }
// } else {
//     echo "Không có kết quả.";
// }

// // Đóng kết nối
// mysqli_close($conn);

//Cachs2: PDO
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "btth01_cse485";

// try {
//     // Tạo kết nối PDO
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

//     // Đặt chế độ báo lỗi cho PDO thành Exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     // // Thực thi truy vấn
//     // $stmt = $conn->query("SELECT * FROM users");

//     // // Kiểm tra kết quả
//     // if ($stmt->rowCount() > 0) {
//     //     // Lặp qua các hàng kết quả
//     //     while ($row = $stmt->fetch()) {
//     //         echo "ID: " . $row["id"]. " - Tên: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
//     //     }
//     // } else {
//     //     echo "Không có kết quả.";
//     // }
// } catch(PDOException $e) {
//     echo "Connection Faied: " . $e->getMessage();
// }

// // Đóng kết nối
// $conn = null;

// ?>