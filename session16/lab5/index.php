<?php 

 // load file connection.php -> file nay su dung de tao ket noi csdl 
    include 'application/Connection.php';
    //---
    // tao mot ham de hien thi du lieu
    function view($fileName,$data = null){
        // kiem tra
        if(is_null($data) == false)
            extract($data);
        // neu ton tai file thi load noi dung file vao day
        $content = "";
        if(file_exists("views/$fileName")){
            // load file vao day de doc noi dung
            ob_start();
            include "views/$fileName";
            $content = ob_get_contents();
            ob_get_clean();
        }

        return $content;
    }
    //---
?>
<?php 
// muon thuc hien  MVC nao thi chi can load mVC do 
    include "controllers/ControllerPhongBan.php";
    $obj = new ControllerPhongBan();
    echo $obj->getPhongBan();
 ?>