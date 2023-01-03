<?php 
    // ke thua trong php , 1 class ke thua nhieu class khac
    // class , trai ve ban chat la giong nhau. Khac nhau
    // class su dung cp the khoi tao object, trait khoi tao cho viec ke thua

    class A{
        public function a1(){
            echo "<h1>Hàm a1, class A</h1>";
        }
    }
    trait B{
        public function b1(){
            echo "<h1>Hàm b1, class B</h1>";
        }
    }
    trait C{
        public function c1(){
            echo "<h1>Hàm c1, class C</h1>";
        }
    }
    // class Test ke thua class A

    class Test extends A{
        // co the ke thua nhieu class bang casch su sung tu khoa use
        // ke thua class B
       // use B;
        // ke thua C
        use C;
        public function __construct()
        {
            // do class Test ke thua class A nen co the goi lai ham a1 cua class A
            $this->a1();
            $this->b1();
            $this->c1();
        }
    }
    $obj= new Test();
?>