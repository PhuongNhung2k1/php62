<?php
    //load ModelPhongBan
    include "models/ModelChucDanh.php";
?>

<?php
//Controller: nằm giữa model và view, có tác dụng điều khiển dữ liệu. Lấy dữ liệu từ Model và truyền ra view
//Controller này kế thừa class Controller.php
    class ControllerChucDanh extends Controller{
        //kế thừa class ModelPhongBan
        use ModelChucDanh;
        public function getChucDanh(){
            //gọi hàm listChucDanh từ class ModelChucDanh để lấy dữ liệu
            $chuc_danh = $this->listChucDanh();
            //gọi hàm loadView (hàm này nằm trong file Controller.php)
            $this->loadView("ViewChucDanh.php",["chuc_danh"=>$chuc_danh]);
        }
    }
?>