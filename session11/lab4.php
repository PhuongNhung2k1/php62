<?php
/*
    phép so sánh trả về true/false
    - lớn hơn :>
    - nhỏ hơn : <,>=,<=,==, !=
    - Chú ý : nếu kết quả trả về true, hthi true,
    1> nếu kq false thì k hiển thị gì
    lên màn hình
    kết hợp các phép so sánh :
     - kq và :&&
        tất cả các phép so sánh trả về true -> kq cuối cùng trả về true
     - kq hoặc : ||
        chỉ cần 1 phép so sánh trả về true -> kq cuối cùng trả về true

*/ 

    echo 3 <5 && 2 ==2 && 6>4;//true
    echo 3 <5 || 2 ==2 || 6>4;//true
?>