<?php
	trait UsersModel{
		public function modelRead($recordPerPage){
			$page = isset($_GET["p"])&& $_GET["p"]>0 ? $_GET["p"] - 1 : 0;
			// lay tong so ban ghi
			$from = $page *$recordPerPage;
			// lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from users order by id desc limit $from,$recordPerPage");
			// lay tat ca cac ban ghi
			$result = $query->fetchAll(PDO::FETCH_OBJ);
			// tra ve jet qua
			return $result;
		}
		// lay tong so ban ghi
		public function modelTotalRecord(){
			// lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from users");
			// tra ve so luong ban hhi
			return $query->rowCount();
		}
		// xoa ban ghi
		public function modelDelete(){
			$id = isset($_GET["id"])&& is_numeric($_GET["id"])? $_GET["id"]:0;
			// lay bien ket ni csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("delete from users where id=:var_id");
			$query->execute(["var_id"=>$id]);
		}
		// lay mot ban ghi tuong ung voi id truyen vao
		public function modelGetRecord($id){
			// lay bien kn csdl
			$conn = Connection::getInstance();
			// thuc hien truy van -> vi co bien truyen tu url vao nen thuc hien prepare de truyen tham so
			$query = $conn->prepare("select * from users where id=:var_id");
			//thuc hien truy van , co truyen tham si vao cau lenh sql
			$query->execute(["var_id"=>$id]);
			// tra ve 1 ban ghi
			// phai tryen vao PDO: object moi hien thi thong tin ra duoc
			return $query->fetch(PDO::FETCH_OBJ);
		}
		// chinh sua
		public function modelUpdate($id){
			$name = $_POST['name'];
			$password = $_POST['password'];
			//update name
			$conn = Connection::getInstance();
			$query = $conn->prepare("update users set name=:var_name where id=:var_id");
			// thuc thi truy vanm truyen tham so
			$query->execute(["var_id"=>$id,"var_name"=>$name]);
			// neu pasword khong rong thi update password
			if($password != ""){
				//ma hoa password
				$password = md5($password);
				$query= $conn->prepare("update users set password=:var_password where
					id=:var_id");
				// thuc thi truy van , truyen tham so
				$query->execute(["var_id"=>$id,"var_password"=>$password]);
			}
		}

		public function modelCreate(){
			$name = $_POST['name'];
			$password = $_POST['password'];
			$email = $_POST['email'];
			//ma hoa password
			$password = md5($password);
			//update name, email, password
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert into users set name=:var_name,email=:var_email,password=:var_password");
			//thuc thi truy van, truyen tham so
			$query->execute(["var_name"=>$name,"var_email"=>$email,"var_password"=>$password]);			
		}
	}
?>