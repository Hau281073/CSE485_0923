<?php
    require_once APP_ROOT. '../Services/CategoryServices.php';
    
    class AdminController{
        public $message;

        public function index(){
            $database = new Database();
            $conn = $database->connect();
            if($database->isConnected()){
                $this->message = "Kết nối CSDL thành công!";
            }else{
                $this->message = "Ket nối CSDL thất bại!";
            }
        }
    }
    class HomeController{
        public function index(){
            $category = new CategoryService();
            $theloai = $category->getAllCategory();
            include APP_ROOT. '../views/admin/category.php';
        }
    }
?>