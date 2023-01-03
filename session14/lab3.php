<?php 
    class Hello{
        // ham tao co tham so truyen vao
        public function __construct($str)
        {
            echo "<h1>$str</h1>";
        }
    }
        // neu ham rao co tham so thi khi khoio tao phai truyen tham so cho nos
        $h = new hello("Hello Nhung :)");
?>