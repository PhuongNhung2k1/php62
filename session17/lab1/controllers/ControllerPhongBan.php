<?php 
	// load ModelPhongBan
	// nhin tu file index xuong, chay tu file index nen phai include
	include "models/ModelPhongBan.php";
 ?>
 <?php 
// class dung de dieu khien du lieu
// Controller : nam giua model va voew, co tac dung dieu khien du lieu. Lay du lieu tu Model va truyen ra view

 // controller nay ke thua class Controller.php
	class ControllerPhongBan extends Controller{
		// ke thua class ModelPhonGban
		use ModelPhongBan;
		public function getPhongBan(){
			// goi ham listPhongBan tu class ModelPhongBan de lay du lieu
			 $phong_ban = $this->listPhongBan();
			 //goi ham loadView (ham nay nam trong file Controller.php)
			 $this->loadView("ViewPhongBan.php",["phong_ban"=>$phong_ban]);
		}
	}
?>