<?php 
    class Hello{
    // trong class,ham tao la ham mac dinh dcuo goi dau tien khi class khoi tao
    // cu phap :  __construct() --> day la tu khoa cua pho

    public function __construct(){
        echo "<h1> Ham tao la ham đầu tiên duoc goi khi khoi tao </h1>";
    }
    
    public function sayHello(){
        echo "<h1>Hello world</h1>";
    }
    // ham huy : la ham tu dong goi truoc khi ket thuc class
    // cu phap : __destruc();// cu phap ham php

    public function __destruct()
    {
        echo "<h1>Hàm hủy là hàm mặc định được gọi cuối cùng trước khi kết thúc class</h1>";
    }
}
    // khoi tao doi tuong
    $obj = new Hello(); // -> sau do ham khoi tao construct se tu dong duoc goi den
    // goi 1 ham trong class
    $obj ->sayHello();
?>