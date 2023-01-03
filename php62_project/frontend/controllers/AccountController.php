<?php 

	// load file model
	include "models/AccountModel.php";
	class AccountController extends Controller{
		// ke thua class ACount Mode
		use AccountModel;
		//dang ky
		public function register(){
			$this->loadView("RegisterView.php");

		}
		// dang ky pos
		public function registerPost(){
			$this->modelRegister();
			header("location::index.php?controller=account&action=login");
		}
		public function login(){
			$this->loadView("LoginView.php");

		}
		// dang nhap
		public function loginPost(){
			$this->modelLogin();
		}
		// dang xaysr
		public function logout(){
			// huy bien sessiom
			unset($_GET["customer_email"]);
			unset($_GET["customer_id"]);
			header("location:index.php?controller=account&action=login");
		}
	}
?>