<h1 style="text-align:center;" >
    <?php 
        // ht trang thai cua trang 
        echo $_SERVER["REQUEST_METHOD"];
    ?>
</h1>
<?php 
    $so1 = 0;
    $so2 = 0;
    $ketqua = 0;
    // sau khi an nut submit thi trnag thai cua trang la POST
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $so1 = $_POST["so1"];
        $so2 = $_POST["so2"];
        $ketqua = $so1 + $so2;
    }
?>
<fieldset style="margin:20px auto; width:300px;">
    <legend>Cong 2 so </legend>
    <form  method="post" action="">
        <table cellpadding="5">
            <tr>
                <td>So 1</td>
                <td><input type="number" value="<?php echo $so1; ?>" name="so1" required ></td>
            </tr>
            <tr>
                <td>So 2</td>
                <!-- value cho so luu lai tren o input -->
                <td><input type="number" value="<?php echo $so2; ?>" name="so2" required ></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Thuc hien" ></td>
            </tr>
        </table>
        <h1 style="text-align:center;">
            <?php
                echo "<h1>$so1 + $so2 = $ketqua</h1>";
            ?>
        </h1>
    </form>
</fieldset>