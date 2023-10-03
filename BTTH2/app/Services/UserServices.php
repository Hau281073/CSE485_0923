<?php
    require_once APP_ROOT . '/app/Models/User.php';
    require_once APP_ROOT . '/app/libs/DBConnection.php';

    // public function getAllPatients(){
    //     //Buoc1: Ket noi database
    //     try{
    //         $conn = new PDO('mysql:host=localhost;dbname=btth01_cse485','root','');
    //     //Buoc 2: Truy van du lieu
    //         $sql = "SELECT *FROM user ";
    //         $stmt = $conn->query($sql);
    //     //Buoc3: Xu ly ket qua
    //         $patients = [];
    //         while($row = $stmt->fetch()){
    //             $user = new User($row['username'],$row['password'],$row['email'],$row['agreed']);
    //             $users[] = $user;
    //         }
    //         return $users;
    //     }catch(PDOException $e){
    //         return $users = [];
    //     //$conn = null;
    //     //echo $e->getMessage();

    //     }
    // }
    class UserService{
        public function __construct(){
        //Khởi tạo kết nối
            $dbConnection = new DBConnection();
            $this->conn = $dbConnection->getConnection();
        }
        public function createUser($username,$password,$email,$agreed){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            //Kiểm tra kết nối cơ sở dữ liệu
            if(!$this->conn){
                return false;
            }
            try{
            //Sử dụng cu truy vấn tham số hoá để tránh SQL injection
                 $sql = "INSERT INTO users(username, password, email, agreed) VALUES(:username, :password,:email,:agreed)";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindParam(':username',$username);
                $stmt->bindParam(':password',$hash);
                $stmt->bindParam(':email',$email);
                $stmt->bindParam(':agreed',$agreed, PDO::PARAM_BOOL);
            //Thực hien truy vấn
                if($stmt->execute()){
                    return true; 
                }else{
                    return false;
                }
            }catch(PDOException $e){
                echo "Lỗi: " . $e->getMessage();
                return false;
            }
        }
    }
?>