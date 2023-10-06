<?php
    require_once APP_ROOT. '/app/models/Doctor.php';
    require_once APP_ROOT. '/app/libs/DBConnection.php';


    class DoctorService{
        private $conn;
        public function __construct(){
            //B1:Ket noi du lieu
            $dbConnection = new DBConnection();
            $this->conn = $dbConnection->getConnection();
        }
        public function getAllDoctors(){
            $doctor = [];
            if(!$this->conn){
                return false;
                //echo "KHông có kết nối";
            }
            try{
                //B2: Truy vấn
                $sql = "SELECT * FROM bacsi";
                $stmt = $this->conn->query($sql);
                //B3: Xử lý kết quả
                while($row = $stmt->fetch()){
                    $Doctor = new BacSi(
                        $row['id'],
                        $row['tenBacSi'],
                        $row['chuyenKhoa'],
                    );
                    $doctor[]=$Doctor;
                }
                return $doctor;
            }catch(PDOException $e){
                echo "Lỗi: " .$e->getMessage();
                return false;
            }
        }
        public function getDoctorById($id) {
            if (!$this->conn) {
                return false;
            }
        
            try {
                $sql = "SELECT * FROM bacsi WHERE id = :id";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindParam(':id', $id);
                $stmt->execute();
        
                // Kiểm tra xem có dữ liệu trả về hay không
                if ($stmt->rowCount() > 0) {
                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                    $Doctor = new BacSi($row['id'], $row['tenBacSi'], $row['chuyenKhoa']);
                    return $Doctor;
                } else {
                    // Trả về giá trị null nếu không tìm thấy sinh viên
                    return null;
                }
            } catch (PDOException $e) {
                return false;
            }
        }
        
        //Thêm dữ liệu
public function addNewDoctor($tenBacSi, $chuyenKhoa) {
    if (!$this->conn) {
        return false;  
    }               
    try {
        $sql = "INSERT INTO bacsi(tenBacSi, chuyenKhoa) VALUES (:tenBacSi, :chuyenKhoa)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':tenBacSi',$tenBacSi);
        $stmt->bindParam(':chuyenKhoa', $chuyenKhoa);
        $stmt->execute();
        return true;
    } catch (PDOException $e) {
        echo "Lỗi truy vấn cơ sở dữ liệu: " . $e->getMessage();
        return false; 
    }
}
 //Sửa dữ liệu
 public function editNewDoctor($id,$tenBacSi,$chuyenKhoa) {
    if (!$this->conn) {
        return false;
    }

    try {
        $sql = "UPDATE bacsi SET tenBacSi = :tenBacSi, chuyenKhoa =:chuyenKhoa WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':tenBacSi', $tenBacSi);
        $stmt->bindParam(':chuyenKhoa', $chuyenKhoa);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return true;
    } catch (PDOException $e) {
        echo "Lỗi truy vấn cơ sở dữ liệu: " . $e->getMessage();
        return false;
    }
}
//Xoá dữ liệu
public function remoteNewDoctor($id){
    if(!$this->conn){
        return false;
    }

    try{
        $sql = "DELETE FROM bacsi WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return true;
    }catch(PDOException $e){
        echo "Lỗi truy vấn cơ sở dữ liệu" . $e->getMessage();
        return false;
    }
}

}


?>