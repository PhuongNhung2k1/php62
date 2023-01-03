<?php 
    $arr1 = array("hoten" =>"Nguyen Van A");
    $arr2 = array("hoten" =>"Nguyen Van B");
    $arr3 = array("hoten" =>"Nguyen Van C");
    $arr = array($arr1,$arr2,$arr3);
    // xuat
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    // xoa phan tu co key = 1;=> NVB 
    unset($arr[1]);
    // hthi
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
?>