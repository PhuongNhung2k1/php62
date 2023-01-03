<?php 
/*
    Biến cục bộ :
    - là biến tồn tại bên ngoài hoặc bên trong hàm, 
    Biến toàn cục :
    - khi gt biến bên trong thay đổi thì gt bên ngoài hàm thay đổi theo và ngược lại
*/

$str = "<h1>Hello world</h1>";
    function hello(){
        global $str;// phải kb biến dùng chug
        echo $str;// khai báo lỗi vì chưa kbao , do biến $str nằm ngoài thì không dùng được cho bên trong hàm
    }
    hello();
?>