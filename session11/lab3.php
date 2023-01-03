<!-- 
    Quy tắc đặt tên biến
    - Biến : sd để lưu giá trị
    - biến được đặt tên qua các ký tự từ a -z
    Chú ý :
        - số k được đứng đầu tên biến : VD 4a -> sai
        - số có thể đứng sau tên biến : a4 -> đúng
        - biến ko có các ký tự đặc biệt, khoảng trắng, shif...
    các loại biến
    - số nguyên : int
    - số thực : float
    - bien string
    - biến boolean
    - biến array
    - biến object , array
    -> kết quả cuối cùng sẽ quy định kiểu biến
 -->

 <?php
    // khai báo biến số nguyên
    $a =5;
    // chuyển số nguyên sang số thực
    $a = 5.5;
    // chuyển sang kiểu string
        $a = "Hello world";
        echo "<h1>".$a."</h1>";// dấu + phép nối chuôĩ
        // có thể xuất biến $str bên trong chuỗi
        echo "<h1>$a</h1>";// chú ý: phải sủ dụng dấu nháy kép, k đc sd dấu nháy đơn

 ?>