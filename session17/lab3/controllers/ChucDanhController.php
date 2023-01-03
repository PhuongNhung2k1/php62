<?php 
	//load ModelPhongBan
	include "models/ChucDanhModel.php";
 ?>
<?php 
 	//Controller nay ke thua class Controller.php
 	class ChucDanhController extends Controller{
 		//ke thuc class ModelPhongBan
 		use ChucDanhModel;
 		public function getChucDanh(){
 			//goi ham listChucDanh tu class ModelChucDanh de lay du lieu
 			$chuc_danh = $this->listChucDanh();
 			//goi ham loadView (ham nay nam trong file Controller.php)
 			$this->loadView("ChucDanhView.php",["chuc_danh"=>$chuc_danh]);
 		}
 	}
  ?>