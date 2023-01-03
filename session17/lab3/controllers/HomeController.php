<?php 
	class HomeController extends Controller{
		public function index(){
			//goi view
			$this->loadView("HomeView.php");
		}
	}
 ?>