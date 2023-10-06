<?php
//gọi service tương ứng và view
//gọi service tương ứng và view
//Gọi file config



require_once(__DIR__. '/../config/config.php');
require_once APP_ROOT. '/app/libs/DBConnection.php';
require_once APP_ROOT.'/app/services/DoctorsService.php';

class DoctorController {
    private $doctorService;
    public function __construct(){
        // Gọi dữ liệu từ StudentService
        $this->doctorService = new DoctorService(); 
    }
    public function index() {
        $doctor = $this->doctorService->getAllDoctors();
        require_once APP_ROOT. '/app/views/doctors/index.php';
        
    }
    public function insertForm() {
        require_once(APP_ROOT."/app/views/doctors/add.php");
    }
    public function insert() {
        // Kiểm tra xem đã gửi biểu mẫu thêm bác sĩ chưa
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Lấy thông tin từ biểu mẫu
            $tenBacSi = $_POST['tenBacSi'];
            $chuyenKhoa = $_POST['chuyenKhoa'];
            

            // Gọi dịch vụ để thêm bác sĩ
            $doctorService = new DoctorService();
            $result = $doctorService->addNewDoctor($tenBacSi, $chuyenKhoa);

            
            if ($result) {
               
                header('Location:' . DOMAIN . 'public/index.php?action=index&controller=doctor');
                //echo "them thanh cong";
            } else {
                // Xử lý lỗi hoặc hiển thị thông báo lỗi
                echo 'Thêm thất bại';
            }
        } else {
           
            //echo 'Không tìm thấy thông tin';
            // include APP_ROOT.'/app/views/patients/add.php';
        }

    }
    public function edit() {
        // Kiểm tra xem đã gửi biểu mẫu sửa bác sĩ chưa
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['action'])) {
                // Lấy thông tin từ biểu mẫu
                $id= $_GET['id'];
                $tenBacSi = $_POST['tenBacSi'];
                $chuyenKhoa = $_POST['chuyenKhoa'];

        
                // Gọi dịch vụ để sửa bác sĩ     
                $doctorService= new DoctorService();
                $result = $doctorService->editNewDoctor($id,$tenBacSi, $chuyenKhoa);
        
                // Kiểm tra kết quả và thực hiện hành động tương ứng (chẳng hạn, hiển thị thông báo thành công hoặc lỗi)
                if ($result) {
                    // Sửa sinh viên thành công
                      //header('Location: ../../public/index.php');  
                    //echo "Sửa thành công";
                    header('Location:' . DOMAIN . 'public/index.php?action=index&controller=doctor');
                } else {
                    // Xử lý lỗi hoặc hiển thị thông báo lỗi
                    echo 'Sửa thất bại';
                }
            } else {
               
                //echo 'Không tìm thấy thông tin';
                // include APP_ROOT.'/app/views/doctors/edit.php';
            }
        }
        public function delete() {
            // Kiểm tra xem đã gửi biểu mẫu xoá bác sĩ chưa
            if (isset($_GET['id'])) {
                    // Lấy thông tin từ biểu mẫu
                $id = $_GET['id'];
                    // Gọi dịch vụ để xoá bác sĩ   
                $doctorService = new DoctorService();
                $result = $doctorService->remoteNewDoctor($id);
        
                    // Kiểm tra kết quả và thực hiện hành động tương ứng (chẳng hạn, hiển thị thông báo thành công hoặc lỗi)
                if ($result) {
                    //header('Location:' . DOMAIN . 'public/index.php?action=delete&controller=doctor');
                    
                    header('Location:' .DOMAIN .'/public/index.php?controller=doctor&action=index');
                    //echo"Xoá thành công";
                } else {
                        // Xử lý lỗi hoặc hiển thị thông báo lỗi
                    echo 'Xoá thất bại';
                }
            } else {
                    
                    //echo 'Không tìm thấy thông tin';
                   
                echo 'Không có thông tin';
            }
    
    }

}
?>