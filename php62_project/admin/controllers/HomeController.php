<?php 
	 class HomeController extends Controller{
	 	// ham tao la ham mac dinh dduoc goi dau tien
	 	public function __construct(){
	 		// goi ham xac thuc viec dang nhap
	 		$this->authentication();
	 		
	 	}
	 	public function index(){
	 		//load view
	 		$this->loadView('HomeView.php');
	 	}
	 }
 ?>