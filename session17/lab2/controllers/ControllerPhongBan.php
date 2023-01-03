<?php
    //load ModelPhongBan
    include "models/ModelPhongBan.php";
?>

<?php
//Controller: nằm giữa model và view, có tác dụng điều khiển dữ liệu. Lấy dữ liệu từ Model và truyền ra view
//Controller này kế thừa class Controller.php
    class ControllerPhongBan extends Controller{
        //kế thừa class ModelPhongBan
        use ModelPhongBan;
        public function getPhongBan(){
            //gọi hàm listPhongBan từ class ModelPhongBan để lấy dữ liệu
            $phong_ban = $this->listPhongBan();
            //gọi hàm loadView (hàm này nằm trong file Controller.php)
            $this->loadView("ViewPhongBan.php",["phong_ban"=>$phong_ban]);
        }
    }
?>