<!-- trong model se su dung trait de ke thua  -->
<?php 
	trait LoginModel{
		public function modelLogin(){
			$email = $_POST["email"];
			$password = $_POST["password"];
			// ma hoa password
			$password = md5($password);
			// lay chuoi ket noi
			$conn = Connection::getInstance();
			// chuan bi truy van
			$query = $conn->prepare("select * from users where email=:var_email and password=:var_password");
			// truyen cac tham so vao bien truy van
			$query->execute(["var_email"=>$email,"var_password"=>$password]);
			// lay ban ghi tu ket qua tra ve
			if($query->rowCount()>0){
				// dang nhap thanh conhg
				$_SESSION["email"] = $email;
				header("location:index.php?controller=home");
			}else{
				header("location:index.php?controller=login?notify=invalid");

			}
		}
	}
 ?>