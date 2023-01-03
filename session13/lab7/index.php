<?php 
    session_start();
    //kiểm tra xem biến session sinhvien đã tồn tại chưa, nếu chưa tồn tại thì khởi tạo nó
    if(isset($_SESSION["sinhvien"]) == false)
        $_SESSION["sinhvien"] = array();
?>
<?php
    //lấy biến action truyền từ url -> biến này để điều phối các chức năng của trang
    //isset($_GET['action']) <=> isset($_GET['action']) == true
    //!isset($_GET['action']) <=> isset($_GET['action']) == false
    $action = isset($_GET['action']) ? $_GET['action'] : "";
    switch ($action){
        //khi url của trang là: index.php?action=create -> load trang danhsachsinhvien.php vào đây
        case 'create':
            //tạo biến $action để đưa vào thuộc tính action trong file themsuasinhvien.php
            $action = "index.php?action=createPost";
            //load file themsuasinhvien.php vào đây
            include "themsuasinhvien.php";
            break;
        case 'createPost':
            $hoten = $_POST["hoten"];
            $email = $_POST["email"];
            //thêm thông tin vào biến session
            $_SESSION["sinhvien"][] = ["hoten"=>$hoten,"email"=>$email];
            //di chuyển đến một url khác
            header("location:index.php");
            break;
        case 'delete':
            $key = isset($_GET["key"]) ? $_GET["key"] : "";
            //duyệt các phần tử của session array sinhvien, xóa phần tử tương ứng với key truyền vào
            foreach($_SESSION["sinhvien"] as $k=>$v){
                if($k == $key)
                    unset($_SESSION["sinhvien"][$k]);
            }
            //di chuyển đến một url khác
            header("location:index.php");
            break;
        default:
            //khi không có biến action truyền lên url
            include "danhsachsinhvien.php";
            break;
    }
?>