<h1 style="text-align:center;" >
<?php 
    // ht trang thai cua trang 
    echo $_SERVER["REQUEST_METHOD"];
?>
</h1>
<fieldset style="width:350px; margin:20px">
    <legend> form POSST</legend>
    <!-- Muoon gui dl thi cac the form control (texxtbox, sselect..) phai dat rong the form -->
     <form method="post" action="lab1.1.php">
        <!-- thuoc tinh required bat buoc nhan noi dung thi moi dubmit dc  
        -> txt se link sang trang ben
    -->
        <input type="text" name="txt" required> 
      <!--  muon submit de lay du lieu tu trang lab1.php den trang lab1.1.php thi phai co the submit sau -->
        <input type="submit" value="Send">
     </form>
</fieldset>