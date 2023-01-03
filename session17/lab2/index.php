<?php
    //start session
    session_start();
    //load file Connection.php để kết nối csdl
    // ../ có nghĩa là nhảy lên cha 1 cấp
    include "../application/Connection.php";
    //load file Controller.php
    include "../application/Controller.php";
?>
<?php
    //gọi MVC PhongBan thì chỉ cần include file controller và tạo object cho nó
    include "controllers/ControllerChucDanh.php";
    $obj = new ControllerChucDanh();
    $obj->getChucDanh();
?>