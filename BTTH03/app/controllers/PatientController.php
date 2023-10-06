<?php
    require_once __DIR__ . '/../config/config.php';
    require_once APP_ROOT . '/app/libs/DBConnection.php';
    require_once APP_ROOT . '/app/services/PatientServices.php';
    class PatientController{
        private $patientService;
        public function __construct(){
            $this->patientService = new PatientService();
        }
        public function index(){
            $patient= $this->patientService->getAllPatient();
            require_once APP_ROOT. '/app/views/Patient/index.php';
        }
        public function insertForm() {
            require_once(APP_ROOT."/app/views/Patient/add.php");
        }
        public function insert() {
            // Kiểm tra xem đã gửi biểu mẫu thêm bệnh nhân chưa
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
                // Lấy thông tin từ biểu mẫu
                $tenBenhNhan = $_POST['tenBenhNhan'];
                $ngayKham = $_POST['ngayKham'];
                $trieuChung = $_POST['trieuChung'];
                $idBacSi = $_POST['idBacSi'];
        
                // Gọi dịch vụ để thêm bệnh nhân
                $patientService = new PatientService();
                $result = $patientService->addNewPatient($tenBenhNhan, $ngayKham, $trieuChung, $idBacSi);
        
                if ($result) {
                    header('Location:' . DOMAIN . 'public/index.php?action=index&controller=patient');
                    exit();
                } else {
                    // Xử lý lỗi hoặc hiển thị thông báo lỗi
                    echo 'Thêm thất bại';
                }
            } else {
                // Không tìm thấy thông tin
                // Có thể hiển thị thông báo lỗi hoặc chuyển hướng người dùng đến trang thêm bệnh nhân
                // Ví dụ:
                // header('Location: ' . DOMAIN . 'public/index.php?action=showAddForm&controller=patient');
                // exit();
            }
        }
    public function edit() {
        // Kiểm tra xem đã gửi biểu mẫu sửa bệnh nhân chưa
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['action'])) {
                // Lấy thông tin từ biểu mẫu
                $id= $_GET['id'];
                $tenBenhNhan = $_POST['tenBenhNhan'];
                $ngayKham = $_POST['ngayKham'];
                $trieuChung = $_POST['trieuChung'];
                $idBacSi = $_POST['idBacSi'];
                // Gọi dịch vụ để sửa bệnh nhân     
                $patientService= new PatientService();
                $result = $patientService->editNewPatient($id,$tenBenhNhan,$ngayKham,$trieuChung,$idBacSi);
        
                // Kiểm tra kết quả và thực hiện hành động tương ứng (chẳng hạn, hiển thị thông báo thành công hoặc lỗi)
                if ($result) {
                    // Sửa sinh viên thành công
                      //header('Location: ../../public/index.php');  
                    //echo "Sửa thành công";
                    header('Location:' . DOMAIN . 'public/index.php?action=index&controller=class');
                } else {
                    // Xử lý lỗi hoặc hiển thị thông báo lỗi
                    echo 'Sửa thất bại';
                }
            } else {
               
                //echo 'Không tìm thấy thông tin';
                // include APP_ROOT.'/app/views/patients/edit.php';
            }
        }
        public function delete() {
            // Kiểm tra xem đã gửi biểu mẫu xoá bệnh nhân chưa
            if (isset($_GET['id'])) {
                    // Lấy thông tin từ biểu mẫu
                $id = $_GET['id'];
                    // Gọi dịch vụ để xoá bệnh nhân   
                $patientService = new PatientService();
                $result = $patientService->remoteNewPatient($id);
        
                    // Kiểm tra kết quả và thực hiện hành động tương ứng (chẳng hạn, hiển thị thông báo thành công hoặc lỗi)
                if ($result) {
                    //header('Location:' . DOMAIN . 'public/index.php?action=delete&controller=patient');
                    
                    header('Location:' .DOMAIN .'/public/index.php?controller=patient&action=index');
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