<?php
    /* 
        - khối lệnh switch case
        switch (giatri){
            case khoang-gt-1:
                code
                break;
            case khoang-gt-2:
                code
                break;
            .....
            default :
                code
                break;
        }
        - vòng lặp
    */

    $so = 3;
    switch($so){
        case 1:
            echo "<h1>Mot</h1>";
            break;
        case 2:
            echo "<h1>hai</h1>";
        break;
        case 3:
            echo "<h1>ba</h1>";
            break;
        default :
            echo "<h1>so khong thuoc khoang 1-3</h1>";
            break;
    }
?>