<?php 
 require_once __DIR__ . '/../../config/config.php';
 require_once APP_ROOT . '/app/libs/DBConnection.php';
 require_once APP_ROOT . '/app/services/DoctorsService.php';
 if(isset($_GET['id'])){
    $id = $_GET['id'];

    $dbConnection = new DBConnection();
    $conn = $dbConnection->getConnection();

    if($conn){
        $doctorServices = new DoctorService();
        $doctor = $doctorServices->getDoctorById($id);
        if($doctor){
            $id = $doctor->getId();
            $tenBacSi = $doctor->getTenBacSi();
            $chuyenKhoa = $doctor->getChuyenKhoa();
        }else{
            echo "Không tìm thấy thông tin bác sĩ";
            exit();
        }
    }else{
        echo "Không thể kết nối đến cơ sở dữ liệu";
        exit();
    }
}else{
    echo "Không tìm thấy thông tin bác sĩ";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title>Sửa Bác Sĩ</title>
</head>
 <body>
 <?php include(APP_ROOT . "/app/views/Patient/navbar.php") ?>
 <div class="container">
    <h3 class='text-center text-uppercase text-success my-3'>Sửa Bác Sĩ</h3>
     <form action="<?= DOMAIN . 'public/index.php?controller=doctor&action=edit&id='.$id ?>"  method="post" id="form-data" >
      <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">Mã Bác Sĩ</span>
        <input type="text" class="form-control" name= "id" value="<?= $id ?>" aria-describedby="addon-wrapping" disabled style="background: white">
      </div>
       <br>
      <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">Tên Bác Sĩ</span>
        <input type="text" class="form-control" name="tenBacSi" value="<?= $tenBacSi?>"  aria-describedby="addon-wrapping">
      </div>
      <br>
      <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">Chuyên Khoa</span>
        <input type="text" class="form-control" name="chuyenKhoa" value="<?= $chuyenKhoa ?>"  aria-describedby="addon-wrapping">
      </div>
      <br>
      <div class="d-flex justify-content-end mt-5"> <!-- Sử dụng lớp d-flex và justify-content-end -->
        <button type="submit" class="btn btn-success me-2" name="edit" id="edit">Sửa</button> 
        <a href="<?= DOMAIN .'/public/index.php?controller=doctor&action=index' ?>" class="btn btn-warning">Quay Lại</a>
      </div>
    </form>
  </div>
 </body>
</html>