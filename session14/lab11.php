<?php 
    /*  tam vuc cua bien 
     - public 
        - dung duoc o ben trong clas : ham tac dong dn bien, tac dong den ham
        - dung duoc o clas ke thua ;ham tac dong den bien, tac dong den ham
        - dung duoc o ben ngoai: ljitao doi tuong de tac dong 
    - protected 
        - dung duoc o ben trong clas : ham tac dong dn bien, tac dong den ham
        - dung duoc o clas ke thua ;ham tac dong den bien, tac dong den ham
        - khong dung duoc o ben ngoai
    - private
        - dung duoc o ben trong clas : ham tac dong dn bien, tac dong den ham
        - khong ung duoc o clas ke thua 
        - khong dung duoc o ben ngoai
    
    */
    class A{
        public $str = "Hello world";
        protected function a1(){
            echo "<h1>Ham a1, class A</h1>";
        }
    }
    class B extends A{
        public function __construct()
        {
            $this->a1();
        }
    }
    $obj = new B();
    //$obj->a1();
?>