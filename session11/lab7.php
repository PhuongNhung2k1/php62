<?php 
 /*
    Câu lệnh if 
    -c1 : thường sử dụng khi code thuần php
    if(các phép so sánh trả về true){
        thực hiện
    }else {
        thực hiện ở đây
    }
    -c2 : thường sử dụng khi code lồng php
    if(các phép so sánh trả về true):
        thực hiện
    else if (các phép so sánh trả về true):
        thực hiện ở đây
    else :
        thực hiện ở đây
    endif

 */
        $so = 5;
        // nếu dưới khối lệnh if chỉ có 1 dòng thì k cần dấu {} và ngược lại
        if($so %2 ==0)
            echo "<h1>$so la so chan</h1>";
            else
            echo "<h1>$so la so le</h1>";

?>
 <!-- lồng giứa php và html  -->
 <?php if($so %2 ==0):?>
 <h1><?php echo $so;?> la so chan</h1>
 <?php else :?>
 <h1><?php echo $so;?> la so le</h1>
 <?php endif ?>
