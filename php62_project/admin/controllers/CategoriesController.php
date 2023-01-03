 <?php 
	//load file model
	include "models/CategoriesModel.php";
	class CategoriesController extends Controller{
		//ke thua class CategoriesModel
		use CategoriesModel;
		//hien thi danh sach
		public function index(){
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 4;
			// lay tong so ban ghi
			$totalRecord = $this->modelTotalRecord();
			// tinh so trang
			//ceil(so) de lay tran.VD (CEIL(3.6) =4)
			$numPage = ceil($totalRecord/$recordPerPage);
			//lay du lieu
			$data = $this->modelRead($recordPerPage);

			//goi view, truyen du lieu ra view
			$this->loadView("CategoriesView.php",["data"=>$data,"numPage"=>$numPage]);
		}
		//sua ban ghi - GET
		//url: index.pho>controller=user&action=update&id=number

		public function update(){
			// lay id truyen tu url
			$id = isset($_GET["id"]) ? $_GET["id"] :0;
			// tao bien $action de gan vao thuoc tinh action cua the form
			$action = "index.php?controller=categories&action=updatePost&id=$id";
			$record = $this->modelGetRecord($id);
			$this->loadView("CategoriesFormView.php",["action"=>$action,"record"=>$record]);
		}
		//sua ban ghi - POST-> khi an nut submit 
		// url : index.php?controller-categories&action=updatePost=number
		public function updatePost(){
			// lay id truyeh tu url
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			// goi ham modelUpdate de update ban ghi
			$this->modelUpdate($id);
			//quay trtr lai trang usser
			header("location:index.php?controller=categories");
		}
		//them ban ghi - GET
		public function create(){
			//tao bien $action de gan vao thuoc tinh action cua the form
			$action = "index.php?controller=categories&action=createPost";
			//print_r($record);
			$this->loadView("CategoriesFormView.php",["action"=>$action]);
		}
		//them ban ghi - POST
		public function createPost(){
			//goi ham modelUpdate de update ban ghi
			$this->modelCreate();
			//quay tro lai trang categories
			header("location:index.php?controller=categories");
		}
		//xoa ban ghi - GET
		public function delete(){
			// goi ham modelDelete
			$this->modelDelete();
			header("location:index.php?controller=categories");
		}

	}
 ?>