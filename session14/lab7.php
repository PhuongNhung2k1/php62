<?php 
    // tim hieu ve array
    class SinhVien{
        // dinh nghia array trong class
        public $sv = array();// co the khoi tao luon gia tri khi khai bao bien
        public function setSinhVien($ht,$m){
            $this->sv[] = array("hoten"=>$ht,"email"=>$m);
        }
        public function display(){
            foreach($this->sv as $value){
                echo "<h1>Họ tên : {$value['hoten']}- Email : {$value['email']}</h1>";
            }
        }
    }
    $obj = new SinhVien();
    $obj->setSinhVien("Nguyen Van A","aaa@gmail.com");
    $obj->setSinhVien("Nguyen Van B","bbb@gmail.com");
    $obj->setSinhVien("Nguyen Van C","ccc@gmail.com");
    $obj->display();
?>