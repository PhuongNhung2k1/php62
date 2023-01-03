<?php 
 	//Model: phan gan nhat voi csdl, chua cac ham su dung de truyen cau lenh sql vao csdl va lay ket qua tra ve
 	trait PhongBanModel{
 		public function listPhongBan(){
 			//lay bien ket noi tu class Connection
 			$conn = Connection::getInstance();
 			//thuc hien cau lenh sql, tra ket qua ve mot bien object
 			$query = $conn->query("select * from phongban");
 			//duyet tat ca cac ban ghi theo kieu object
 			$result = $query->fetchAll(PDO::FETCH_OBJ);
 			//tra ve ket qua
 			return $result;
 		}
 	}
  ?>