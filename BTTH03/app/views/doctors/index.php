
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bác Sĩ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- <link rel="stylesheet" href="css/toastr.min.css"> -->
</head>
<body>
<?php include(APP_ROOT . "/app/views/Patient/navbar.php") ?>
    <div class="container">
        <h3 class="text-center text-upercase text-success my-3">QUẢN LÝ BÁC SĨ</h3>
        <a href="<?= DOMAIN . 'public/index.php?controller=doctor&action=insertForm'?>" class="btn btn-success" style="margin-bottom: 15px">Thêm mới</a>
        <?php
          //if(isset($_GET['success'])){
            //echo "<p style='background-color:green'>{$_GET['success']}</p>";
          //}
        ?>
       
        <table class="table" id="myTable">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">NameDoctor</th>
              <th scope="col">Specialist</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete </th>
            </tr>
          </thead>
          <tbody>
            <?php
            if(isset($doctor)){
              foreach($doctor as $dtor){
            ?>
              <tr>
                <th scope="row"><?=$dtor->getId(); ?></th>
                <td><?=$dtor->getTenBacSi(); ?></td>
                <td><?=$dtor->getChuyenKhoa(); ?></td>
                <td>
                  <a href="<?= DOMAIN.'./app/views/doctors/edit.php?id='.$dtor->getId() ?>"><i class="bi bi-pencil-square"></i></a>
                </td>
                <td>
                  <a href="<?= DOMAIN.'/public/index.php?controller=doctor&action=delete&id='.$dtor->getId() ?>"  data-bs-toggle="modal" data-bs-target="#<?= $dtor->getId() ?>"><i class="bi bi-trash3"></i></a>
                    <div class="modal fade" id="<?= $dtor->getId() ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">DELETE DOCTOR</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            Are you sure detele the doctor have id: <?= $dtor->getId()  ?>?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <a href="<?= DOMAIN .'/public/index.php?controller=doctor&action=delete&id='.$dtor->getId() ?>" class="btn btn-success">OK</a>
                          </div>
                        </div>
                      </div>
                    </div>
                </td>
              </tr>  
            <?php
              }
            }else{
              echo "Không có dữ liệu";
            }
            ?>
    
          </tbody>
        </table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<!-- <script src="js/toastr.min.js"></script> -->
<!-- <script>
  <?php //if(isset($_GET['action'])): ?>
    toastr.success('Thêm thành công');
    <?php //endif; ?>

</script> -->
<script>
    $(document).ready(function () {
      $('#myTable').DataTable({
        "paging": true, // Cho phép phân trang
        "pageLength": 10, // Số lượng hàng trên mỗi trang
      });
      
    });
  </script>
</body>
</html>