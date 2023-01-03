<?php 
	trait ProductsModel{
		public function modelRead($recordPerPage,$categoryId){
			$page = isset($_GET["p"])&&$_GET["p"] > 0 ? $_GET["p"] - 1 : 0;
			$from = $page * $recordPerPage;
			//---
			$order = isset($_GET["order"]) ? $_GET["order"] : "";
			$sqlOrder = "order by id desc";
			switch ($order){
				case 'nameAsc':
					$sqlOrder = "order by name asc";
					break;
				case 'nameDesc':
					$sqlOrder = "order by name desc";
					break;
				case 'priceAsc':
					$sqlOrder = "order by price asc";
					break;
				case 'priceDesc':
					$sqlOrder = "order by price desc";
					break;
			}
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where category_id = $categoryId $sqlOrder limit $from, $recordPerPage");
			//lay tat ca cac ban ghi
			$result = $query->fetchAll(PDO::FETCH_OBJ);
			//tra ve ket qua
			return $result;
		}
		//lay tong so ban ghi
		public function modelTotalRecord($categoryId){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where category_id = $categoryId");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi tuong ung voi id truyen vao
		public function modelGetRecord($id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van -> vi co bien truyen tu url vao nen thuc hien prepare de truyen tham so
			$query = $conn->prepare("select * from products where id=:var_id");
			//thuc hien truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$id]);
			//tra ve mot ban ghi
			return $query->fetch(PDO::FETCH_OBJ);
		}
		public function modelGetCategory($categoryId){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van -> vi co bien truyen tu url vao nen thuc hien prepare de truyen tham so
			$query = $conn->prepare("select * from categories where id=:var_id");
			//thuc hien truy van, co truyen tham so vao cau lenh sql
			$query->execute(["var_id"=>$categoryId]);
			//tra ve mot ban ghi
			return $query->fetch(PDO::FETCH_OBJ);
		}
		//đánh giá số sao sản phẩm
		public function modelRating(){
			$productId = isset($_GET["productId"]) ? $_GET["productId"] : 0;
			$star = isset($_GET["star"]) ? $_GET["star"] : 0;
			//insert dữ liệu vào bảng rating
			//lấy biến kết nối csdl
			$conn = Connection::getInstance();
			//thực hiện truy vấn -> vì có biến truyền từ url vào nên thực hiện prepare để truyền tham số
			$query = $conn->prepare("insert into rating(product_id, star values(:var_id,:var_star)");
			//thực hiện truy vấn, có truyền tham số vào câu lệnh sql
			$query->execute(["var_id"=>$productId,"var_star"=>$star]);
		}
		//lấy số sao sản phẩm
		public function modelGetStar($product_id, $star){
			//lấy biến kết nối csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select *from rating where product_id=$product_id and star=$star");
			return $query->rowCount();
		}
	}
 ?>