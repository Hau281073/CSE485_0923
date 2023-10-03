<?php
    class TheLoai{
        private int $ma_tloai;
        private string $ten_tloai;
        public function __construct($ma_tloai,$ten_tloai){
            $this->ma_tloai = $ma_tloai;
            $this->ten_tloai = $ten_tloai;
        }
        public function get_ma_tloai(){
            return $this->ma_tloai;
        }
        public function getTheloai(){
            return $this->ten_tloai;
        }
        public function setTheLoai($ten_tloai) {
            $this->ten_tloai = $ten_tloai;
        }
        public function setMaTloai($ma_tloai) {
            $this->ma_tloai = $ma_tloai;
        }
    }
?>