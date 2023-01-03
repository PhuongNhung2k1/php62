<?php 
// ke thua trong php;1 class ke thua 1 class
    class Test1{
        public $t1 ="Bien 1";
        public function hello1(){
            echo "<h1>Hello world 1</h1>";
        }
    }
    // class Test2 ke thua class Test1
    class Test2 extends Test1{
        public $t2 ="Bien 2";
        public function hello2(){
            echo "<h1>Hello world 2</h1>";
            // class Test2 ke thua Test1 th o cac ham trong class Test2 co the tac dong vao acc bien,ham cua Test 1
            // tac dong vao ham hello1() cua class Test1
            $this->hello1();
        }
    }
     /*
        class Test2 kế thừa class Test1
        class Test2 extends Test1{}
        class Test2 ke thua class Test1 co nghia la ben trong class cua Test2 co the tac dong toi cac ham
        , bien cua test 1(tuy thuoc vao cua bien)
    */ 

    // khoi tao doi tuong class Test2
    $obj = new Test2();
    $obj->hello2();
?>