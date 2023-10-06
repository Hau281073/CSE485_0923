<?php
    class BacSi{
        private $id;
        private $tenBacSi;
        private $chuyenKhoa;
       

        public function __construct($id,$tenBacSi,$chuyenKhoa){
            $this->id = $id;
            $this->tenBacSi = $tenBacSi;
            $this->chuyenKhoa = $chuyenKhoa;
           
        }
        public function getId(){
            return $this->id;
        }
       
        public function getTenBacSi(){
            return $this->tenBacSi;
        }
        public function getChuyenKhoa(){
            return $this-> chuyenKhoa;
        }
        
        public function setId($id){
            $this->id = $id;
        }
       
        public function setTenBacSi($tenBacSi){
            $this->tenBacSi = $tenBacSi;
        }
        public function setchuyenKhoa($chuyenKhoa){
            $this->chuyenKhoa = $chuyenKhoa;
        }
       
    }
?>