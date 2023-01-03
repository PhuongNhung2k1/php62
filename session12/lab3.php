<?php
$bg = "";
if (isset($_POST["color"])) {
    $color = $_POST["color"];
    switch ($color) {
        case 'green':
            $gb = "background:green;";
            break;
        case 'red':
            $gb = "background:red;";
            break;
        case 'purple':
            $gb = "background:purple;";
            break;
        case 'yellow':
            $gb = "background:yellow;";
            break;
    }
}
?>
<style type="text/css">
    .box{
        width:300px; height:300px; border:1px solid #dddddd;
        margin:auto; border-radius:50%;
        /* xuat ra kwt qua dc set  */
        <?php  echo $gb; ?>
    }
</style>
<fieldset style="width:300px; margin:50px auto;">
    <legend>Set color</legend>
    <form method="post" action="">
        <div style="margin-bottom:5px;">
        <!-- cung name de thay doi giat tri khi click vaoo chu trong label -->
            <input type="radio" name="color" value="green" id="green">
            <label for="green">Green </label>  
            <input type="radio" name="color" value="red" id="red">
            <label for="red">Red </label>
            <input type="radio" name="color" value="purple" id="purple">
            <label for="purple">Purple </label>
            <input type="radio" name="color" value="yellow" id ="yellow">
            <label for="yellow">Yellow </label>
            <input type="submit" value="Set color">
            
        </div>
        <div class="box"></div>
    </form>
</fieldset>
