<?php
    require_once __DIR__ . '../config/config.php';
    require_once APP_ROOT . '../libs/DBConnection.php';
    require_once APP_ROOT . '../Services/CategoryServices.php';

    class CategoryController{
        public function addTheLoai(){
            $response = array(); 
            if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['ten_the_loai'])){
                $tenTheLoai = $_POST['ten_the_loai'];
                if(empty($tenTheLoai)){
                    $response['success'] = false;
                    $response['message'] = "Tên thể loại không được để trống.";
                }else{
                    $dbConnection = new DBConnection();
                    $conn = $dbConnection->getConnection();

                    if($conn){
                        $categoryService = new CategoryService($conn);
                        $result = $categoryService->addTheLoai($tenTheLoai);
                        if($result){
                            $response['success'] = true;
                        }else{
                            $response['success']=false;
                            $response['message']="Không thể thêm thể loại";
                        }
                    }else{
                        $response['success'] = false;
                        $response['message']= "Không thể kết nối đến CSDL";
                    }
                }
            }else{
                $response['success']=false;
                $response['message'] = "Dữ li không hợp lệ";
            }
            header('Content-Type: application/json');
            echo json_encode($response);
            exit();
        }
    }
?>