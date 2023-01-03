<fieldset style="width:300px; margin:50px auto">
<legend>
    Them sua sinh vien
</legend>
<form method="post" action="<?php echo $action; ?>">
<table cellpadding="5" >
    <tr>
        <td>Ho ten</td>
        <td><input type="text" name="hoten" required> </td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="email" name="email" required> </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit"  value="Thuc hien" > </td>
    </tr>
</table>
</form>
</fieldset>