<?php 
    $mauchu = isset($_POST["mauchu"]) ? $_POST["mauchu"] : "white";
    $maunen = isset($_POST["maunen"]) ? $_POST["maunen"] : "white";
    $noidung = isset($_POST["noidung"]) ? $_POST["noidung"] : "";
?>
<fieldset style="width:300px; margin:50px auto;">
<legend> Mau chu, mau nen</legend>
<form method="post" action="">
<table cellpadding ="5">
    <tr>
        <td>Mau chu</td>
        <td><input type="color" name="mauchu"></td>
    </tr>
    <tr>
        <td>Mau nen</td>
        <td><input type="color" name="maunen"></td>
    </tr>
    <tr>
        <td>Noi dung </td>
        <td><input type="text" required name="noidung"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Thuc hien"></td>
    </tr>
</table>
</form>
<h1 style="color:<?php echo $mauchu; ?>; background:<?php echo  $maunen; ?>">
<?php echo $noidung; ?></h1>
</fieldset>