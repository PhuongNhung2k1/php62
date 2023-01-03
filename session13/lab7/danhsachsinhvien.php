<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Danh sachs sinh vien</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <fieldset style="width: 700px;margin:50px auto" >
        <legend>Danh sach sinh vien</legend>
        <div style="margin-bottom: 5px;">
        <a href="index.php?action=create">Theem sinh vien</a>
            <table cellpadding ="5" border="1" style="border-collapse:collapse;width:100%">
        <tr>
            <th>Họ tên</th>
            <th>Email </th>
            <th style="width:120px;"> </th>
        </tr>
        <?php foreach($_SESSION["sinhvien"] as $key=>$sv): ?>
        <tr>
            <td><?php echo $sv["hoten"]; ?> </td>
            <td><?php echo $sv["email"]; ?> </td>
            <td style="text-align: center;">
            <a onclick="return window.confirm('ban co chac muon xoa khong');" href="index.php?action=delete&key=<?php echo $key; ?>">Delete </a></td>
        </tr>
        <?php endforeach; ?>
    </table>
        </div>
    </fieldset>
</body>
</html>