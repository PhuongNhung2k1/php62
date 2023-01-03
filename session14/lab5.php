<?php

use Hello as GlobalHello;
    // neu khong khoi tao doi tuong , muon tenclass tac dong truc tiep vao ten ham trong class
    // thi phai dung tu khoa static
    class Hello{
        public static function sayHello(){
            echo "<h1>Hello world</h1>";
        }
    }

   // $obj = new Hello();
  //  $obj->sayHello();
  // khi truoc ten ham cos tu khoa statuc thi o ben ngoai ham goi ham se theo cau truc: tenlop::tenham()

    Hello::sayHello();
?>