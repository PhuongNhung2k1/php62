<h1 style="text-align:left;" >
    <?php 
        // ht trang thai cua trang 
        echo $_SERVER["REQUEST_METHOD"];
    ?>
</h1>
<?php 
    // lay du lieu theo kieu POST
    // isset ktra loi dung thi true, sai fale
    $str = isset($_POST["txt"]) ? $_POST["txt"]: "";// trang thai la POST thi ms th duoc
    echo "<h1> $str</h1>";
?>
<p>
    <a href="lab1.php">Quay lai</a>
</p>