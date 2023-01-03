<!-- su dung php de ket noi sql  -->
<?php 

	class Connection{
		// ham sy đung e két noi csdl , tra ve bien ket noi

		public static function getInstance(){
			$server_name = "localhost";
			$database_name = "php62_congty";
			$username = "root";
			$password = "";
			// ket noi csdl tra ve bien ket noi
			$conn = new PDO("mysql:host=$server_name;dbname=$database_name",$username,$password);
			// neu mmuon lay duoc tieng viet de hien thi len web thi can co dong lenh sau
			$conn->exec("set names utf8");
			// tra kq de sy dyng cho ben ngoa khi goio ham
			return $conn;
		}
	}
?>
<?php 
// vao ra du lieu
	// class su dung de thao tac voi csdl
	// trait de cai dlass duoi ke thua
	trait ModelPhongBan{
		public function listPhongBan(){
			// lay bien ket noit tu class connection
			$conn = Connection::getInstance();
			// thuc hien cau lenh sql, tra ket qua ve mot bien object
			$query = $conn->query("select * from phongban");

			// duyet tat ca cac ban ghi theo kieu object
			$result = $query->fetchAll(PDO::FETCH_OBJ);
			// tra ve ket qua
			return $result;
		}
	}

?>
<?php 
// class dung de dieu khien du lieu
	class ControllerPhongBan{
		// ke thua class ModelPhonGban
		use ModelPhongBan;
		public function getPhongBan(){
			// goi ham listPhongBan tu class ModelPhongBan de lay du lieu
			 $phong_ban = $this->listPhongBan();
			 echo "<pre>";
			 print_r($phong_ban);
			 echo "</pre>";
		}
	}
?>
<?php 
	// khoi tao doi tuong controller
	$obj = new ControllerPhongBan();
	$obj->getPhongBan();
?>