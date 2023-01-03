<?php 
    // doc noi dung cua mot khoi vao mot bien : su dung ham ob_start()
    // bat dau doc noi dung cua khoi ben trong ham duoi
    ob_start();
?>
<h1> Cac nội dung cần đọc nằm ở bên trong hàm ob_start()</h1>
<h1>Nội dung 1</h1>
<h1>Nội dung 2</h1>
<?php 
    // doc cac noi dung o phia tren vao moy bien thi su dung ham 
    // ob_get_contents();
    $str = ob_get_contents();
    // lam rong bo dem sau khi doc du lieu
    ob_get_clean();
?>
<?php 
    // noi dung ben tren da duoc doc vao 1 bien có ten la $str.
    // co the xuat bien do len man hinh hoa su dung o muc dich khác
    echo $str;
?>