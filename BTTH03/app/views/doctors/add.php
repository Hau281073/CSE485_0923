<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUẢN LÝ BÁC SĨ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
<?php include(APP_ROOT . "/app/views/Patient/navbar.php") ?>
  <div class="container">
    <h3 class='text-center text-uppercase text-success my-3'>Thêm Bác Sĩ</h3>
    <form action="<?= DOMAIN . 'public/index.php?controller=doctor&action=insert' ?>"  method="post" id="form-data">
      <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">Tên Bác Sĩ</span>
        <input type="text" class="form-control" name="tenBacSi"  aria-describedby="addon-wrapping">
      </div>
       <br>
        <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Chuyên Khoa</span>
                <input type="text" class="form-control" name="chuyenKhoa"  aria-describedby="addon-wrapping">
        </div>
       <br>
      <div class="d-flex justify-content-end mt-5"> <!-- Sử dụng lớp d-flex và justify-content-end -->
        <button type="submit" class="btn btn-success me-2" name="them" id="insert">Thêm</button> 
        <!-- <a href="../../../Controller/CategoryController.php?action=insert" name="them" id="insert"  class="btn btn-success me-2">Them</a> -->
        <a href="<?= DOMAIN .'/public/index.php?controller=doctor&action=index'?>" class="btn btn-warning">Quay Lại</a>
      </div>
    </form>
  </div>    
</body>
</html>