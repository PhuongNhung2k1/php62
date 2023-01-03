<?php 
    session_start();
    // tao bien session array
    $_SESSION['sinhvien'] = array(); // <=> $_SESSION['sinhvien]= [];
    $_SESSION['sinhvien'][] = "Nguyen Van A";// moc vuong the hien thu tu so st tang
    $_SESSION['sinhvien'][] = "Nguyen Van B";
    $_SESSION['sinhvien'][] = "Nguyen Van C";
    $_SESSION['sinhvien'][] = "Nguyen Van D";
    $_SESSION['sinhvien'][] = "Nguyen Van E";

?>
<pre>
    <?Php  print_r($_SESSION['sinhvien']);?>
</pre>
<table cellpadding ="5" border="1" style="width: 200px; border-collapse: collapse">
    <?php foreach($_SESSION['sinhvien'] as $item) :?>
    <tr>
        <td><?php echo $item; ?></td>
    </tr>
    <?php endforeach; ?>
</table>