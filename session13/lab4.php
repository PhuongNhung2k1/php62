<?php 
// chu y khi sd sham thi phai sd 2 ben
    session_start();
    // khi khong co ham session_start thi bien session chi tuong duong vs bien toan cuc, 
    // co nghia la bien nay chi su dung duoc tren 1 trang ma ko su dung dc tren nhieu trang
    // dinh nghia 1 bien session
    $_SESSION['str'] = " Hello 2022";
    // tao mot bien cuc bo nhu bth
    $tenlop = "PHP62";
?>
<h1>Bien session : <?php echo $_SESSION['str']; ?></h1>
<h1>Bien cuc bo : <?php echo $tenlop; ?></h1>