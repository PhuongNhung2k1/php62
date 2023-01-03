<?php
/* 
    - vòng lặp for 
    - cách 1:
        for(bd;kt,lsao để kt){}
    - cách 2:
        for(bd;kt,lsao để kt):
            code
        endfor;

*/
        for($i = 1; $i <= 10 ; $i ++)
        echo "<h1>$i</h1>";
?>  
<?php for($i = 1; $i <= 10 ; $i ++): ?>
         <h1> <?php echo $i; ?></h1> 
<?php   endfor; ?>
