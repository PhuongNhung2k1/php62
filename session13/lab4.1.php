<?php 
    session_start();
?>
<!-- 
    khi chat trang nay se hien thi thong bao loi vi bien session co ten la str khong ton tai
    .Nguyen nhan la bien session str tao o trang lab4.php nhuwng khong dung ham session_start() nen no khong dung duoc cho cac trang khac
    =>> tuong duong sv bien toan cuc

 -->
 <h1> Bien session : <?php echo $_SESSION['str']; ?></h1>