<?php 
    /* 
    - Hàm:
        - đặt ten :function tenham(co tso hoặc k){code}
        - gọi hàm :function teenham(co tso hoặc k)
    - các loại hàm:
        - có ts
        - k ts
        - có gt trả về
        - k có gttv
    */

    // ham k có tso, k có gttv
    function test1(){
        // neu kp là biến thì k cần '$'
        echo "<h1> Ham ko có tso, ko có gtri trả về</h1>";
    }
    // goi hàm
    test1();

    // ham có tso truyền vào, ko có gtri trả về
    function tets2(){
        //return "Hello world";
        return "<h1>Hello world</h1>";// cho h1 vào để đậm lên
    }
    // phải gán 1 biến để lấy ra gtri được gọi
    echo tets2();

    // hàm có tso

    function test3($a, $b){
        $ketqua = $a + $b;
        echo "<h1>$a + $b = $ketqua</h1>";
    }
    test3(4,5);
    // hàm có tso truyền vào, có gttv

    function test4($so){
        ++$so;
        return $so;
    }

    echo "<h1>".test4(5)."</h1>";

?>