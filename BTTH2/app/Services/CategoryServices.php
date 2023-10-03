<?php
    require_once APP_ROOT. '../Models/Category.php';
    require_once APP_ROOT. '../libs/DBConnection.php';

    class CategoryService{
        private $conn;

        public function __construct(){
            $dbConnection = new DBConnection();
            $this->conn = $dbConnection->getConnection();
        }
        //Hiển thị
        public function getAllCategory(){
            $theloai = [];
            if(!$this->conn){
                return $theloai;
            }

            try{
                $sql = "SELECT * FROM theloai";
                $stmt = $this->conn->query($sql);
                while($row=$stmt->fetch()){
                    $category = new TheLoai($row['ma_theloai'],$row['ten_tloai']);
                    $theloai[] = $category;
                }
                return $theloai;
            }catch(PDOException $e){
                echo "Lỗi: ". $e->getMessage();
                return $theloai;
            }
        }
        public function getCategoryById($ma_tloai){
            $category = null;
            if(!$this->conn){
                return $category;
            }
    
            try{
                $sql = "SELECT * FROM theloai WHERE ma_tloai = :ma_tloai";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindParam(':ma_tloai',$ma_tloai);
                $stmt->execute();
                $row = $stmt->fetch();
                if($row){
                    $category = new Theloai($row['ma_tloai'],$row['ten_tloai']);
                }
                return $category;	
    
            }catch(PDOException $e){
                echo "Lỗi : " . $e->getMessage();
                return $category;
            }
        }
        //Thêm thể loại
        public function addTheLoai($ten_tloai){
            if(!$this->conn){
                return false;
            }
            try{
                $sql = "INSERT INTO theloai(ten_tloai) VALUES (:ten_the_loai)";
                $stmt=$this->conn->prepare($sql);
                $stmt->bindParam(':ten_the_loai', $ten_tloai);
                $stmt->execute();
                return true;
            }catch(PDOException $e){
                echo "Lỗi: ". $e->getMessage();
                return false;
            }
        }
    }
?>