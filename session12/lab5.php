<?php 
    // dinh ngia array
    $arr = array();
    $arr[] = "Nguyen Van A";
    $arr[] = "Nguyen Van B";
    $arr[] = "Nguyen Van C";

    // hthi cau truc cua bien $arr
    // trai key, phai value
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
?>
<table cellpadding ="5" border ="1" style="width:300px; border-collapse:collapse;">
    <tr>
        <th>Key</th>
        <th>Value</th>
    </tr>
    <?php  foreach($arr as $key => $value): ?>
    <tr>
        <td><?php  echo $key;?></td>
        <td><?php  echo $value;?></td>
    </tr>
    <?php endforeach; ?>
</table>
<br>
<table cellpadding ="5" border ="1" style="width:300px; border-collapse:collapse;">
    <tr>
        <th>Value</th>
    </tr>
    <?php  foreach($arr as $key => $value): ?>
    <tr>
        <td><?php  echo $value;?></td>
    </tr>
    <?php endforeach; ?>
</table>