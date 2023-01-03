<?php 
//  muon su diung bien session phai co ham session_start() 
    session_start();
    // ktao bien session
    $_SESSION['hello'] = 'Hello world';
?>
 <!-- truy xuat bien session  -->
 <h1><?php echo $_SESSION['hello']; ?></h1>