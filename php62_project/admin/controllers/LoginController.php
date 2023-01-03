<?php 
	// load file model, chay tu trang index
	include "models/LoginModel.php";

	class LoginController extends Controller{
		// ke thua class LoginModel
		use LoginModel;
		//ur; : index.php?controller=login -> action ma dinh la index

		public function index(){
			// load vierw
			$this->loadView("LoginView.php");
		}

		// khi an nut submit o form login thi se den ham sau
		// url : index.php?controller=login&action=loginPost

		public function doLogin(){
			// goi ham modelLogin de kiem tra viec dang nhap 
			$this->modelLogin();
		}

		// dang xuat
		public function logout(){
			// huy bien session
			unset($_SESSION["email"]);
			header("location:index.php");
		}
	}
?>