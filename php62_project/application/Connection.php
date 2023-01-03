<?php 
	class Connection{
		// ham sy đung e két noi csdl , tra ve bien ket noi
		public static function getInstance(){
			$server_name = "localhost";
			$database_name = "php62_project";
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
