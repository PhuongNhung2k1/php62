<?php 
// khoi tao bien cookie, tgian ton tai oi da 15p = 900s . bien cookue thi thoi gian ton tai tinh bang giay

 setcookie("lop","php62", time() + 900);
 setcookie("hello","helloworld", time() + 900);
 setcookie("monhoc","PHP", time() + 900);
?>
<!-- lan chay dau tien se bao li vi khi do moi luu cookie vè thu muc côokie cua trinh duyet, lan cahayj thu 2 thi moi hien thi duoc thong tin o dong ben duoi -->
<h1><?php  echo $_COOKIE['lop']; ?></h1>
 <!-- hien thi tat ca cac kien cookie da khoi tao  -->
 <pre>
    <?php print_r($_COOKIE); ?>
 </pre>
<!-- xoa bien cookie  -->
<?php 
    // cho thoi gian ton tai cua ben cookie ve vang thoi gian hien tai cookie se bij trin
    // duyet xoa 
    setcookie("hello","",time());
?>
 <!-- hien thi tat ca cac kien cookie da khoi tao  -->

 <pre>
    <?php print_r($_COOKIE); ?>
 </pre>