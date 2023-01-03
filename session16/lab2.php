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

	// Model : phan gan nhat voi csdl, chua cac ham su dung de truyen cau lenj sql vao csdl va lay ket qua tra ve
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
// Controller : nam giua model va voew, co tac dung dieu khien du lieu. Lay du lieu tu Model va truyen ra view
	class ControllerPhongBan{
		// ke thua class ModelPhonGban
		use ModelPhongBan;
		public function getPhongBan(){
			// goi ham listPhongBan tu class ModelPhongBan de lay du lieu
			 $phong_ban = $this->listPhongBan();
			 //load file view vao day de truyen du lieu ra view
			 include 'lab2_view.php';
		}
	}
?>
<?php 
	// khoi tao doi tuong controller
	$obj = new ControllerPhongBan();
	$obj->getPhongBan();
?>