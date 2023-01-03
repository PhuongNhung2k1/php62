<?php 
	//load ModelPhongBan
	include "models/PhongBanModel.php";
 ?>
<?php 
 	//Controller nay ke thua class Controller.php
 	class PhongBanController extends Controller{
 		//ke thuc class ModelPhongBan
 		use PhongBanModel;
 		public function getPhongBan(){
 			//goi ham listPhongBan tu class ModelPhongBan de lay du lieu
 			$phong_ban = $this->listPhongBan();
 			//goi ham loadView (ham nay nam trong file Controller.php)
 			$this->loadView("PhongBanView.php",["phong_ban"=>$phong_ban]);
 		}
 	}
  ?>