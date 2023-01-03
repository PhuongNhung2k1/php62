<?php 

	class Controller{
		// ham hien thi View
		public function loadView($fileName,$data = Null){
			// neu bien $data ko Null thi extract data ttahnh ten birn
			if($data != NULL)
				extract($data);
			// kiem tra dg dan file co ton tai ko , neu ton tai thi load $fileName
			if(file_exists("views/$fileName")){
				// doc noi dung ben trong duong dan $fileName de gan vao mot bien
				// tao bien de chuan bin lay du lieu phaan vao bien nay
				$view = NULL;
				$layout = NULL;
				ob_start();
					include "views/$fileName";
					$view = ob_get_contents();
				ob_get_clean();
				// kiem tra newu vbien $layout ko NULLL thi include no
				if($layout != NULL){
					include "views/$layout";
				}else{
					echo $view;
				}
				// xuatbien $view len man hinh/
				//comment lai se trạm xuat hien 2 lan tren man hinh duoi

				//echo $view;
			}
		}
		// kiem tra xác thuc việc đăng nhập 
		public function authentication(){
			//!isset($_SESSION["email"] <=> $_SESSION["email"]==false
			//isset($_SESSION["email"] <=> $_SESSION["email"]== true
			if(!isset($_SESSION["email"])){
				header("location:index.php?controller=login");
			}
		}
	}
 ?>
