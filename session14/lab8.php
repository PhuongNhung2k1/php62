<?php 
 //   $sv = array();
    $sv = ["hoten"=>"Nguyen Van A","email"=>"aaa@gmail.com"];
    // ham extraxt se bien ten key thanh ten bien
    extract($sv);
    echo "<h1>$hoten - $email</h1>";
?>