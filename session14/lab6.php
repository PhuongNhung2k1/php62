<?php 
    // khai bao bien cuc bo 
    $str ="<h1>Hello world</h1>";
    class Hello{
        public function __construct()
        {
           // echo $str;// bao loi do bien $str la bien cuc bo khai bao ben ngoai class
            // do bien $str lla bien cuc bo khai bao ngoai class, thi o day phai khai bao bien $str la bien toancyc bang tu khoa global
            global $str;
            echo $str;
        }
    }
    // co the chi can khoi tao class ma kho can gancho doi tuong
    new Hello();
?>