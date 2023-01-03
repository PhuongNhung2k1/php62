<?php 
    // dinh nghia loop : lop dinh nghia bang tu khoa class
    class Car{
        // trong lop co ca bien (thuoc tinh)
        public $name;
        public $brand;
        // trong lop se co casc ham (PTHuc)
        public function info(){
            echo "<h1>Name : $this->name - Brand : $this->brand</h1>";
        }
        // ham truyen vao cac gia tri
        public function set($n,$b){
            $this->name = $n;
            $this->brand = $b;
        }
    }
    // muon tac dong vao ca bien trong lop can khoi tap cac bien trong lop do 
    // cu phap : $bien = tenlop();
    $obj = new Car();
    // tu doi tuong vua moi khoi tao , tax dong vao cac ham, bien trong class
    $obj-> set("Xe1 ","BMW");
    $obj->info();
?>