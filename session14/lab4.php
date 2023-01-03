<?php 
    class PhepTinh{
        public $so1;
        public $so2;
        // ham khoi tao ban dau 
        public function __construct($so1,$so2)
        {
           $this->so1 = $so1; 
           $this->so2 = $so2; 
        }

        public function cong(){
            $ketqua = $this->so1 + $this->so2;
            echo "<h1>$this->so1 + $this->so2 = $ketqua</h1>";
        }
        public function tru(){
            $ketqua = $this->so1 - $this->so2;
            echo "<h1>$this->so1 - $this->so2 = $ketqua</h1>";
        }
        public function nhan(){
            $ketqua = $this->so1 * $this->so2;
            echo "<h1>$this->so1 * $this->so2 = $ketqua</h1>";
        }
        public function chia(){
            $ketqua = $this->so1 / $this->so2;
            echo "<h1>$this->so1 / $this->so2 = $ketqua</h1>";
        }
    }
    // khoi tao doi tuong
     $obj = new PhepTinh(6,9);
     $obj->cong();
     $obj->tru();
     $obj->nhan();
     $obj->chia();
?>