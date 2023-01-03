<table cellpadding="5" border ="1" style="border-collapse: collapse">
    <tr>
        <th>Number</th>
    </tr>
    <?php for($i = 1; $i <= 10;$i ++): ?>
        <tr
            <?php if($i %2 ==0):?> style="background:yellow;"<?php else: ?>
            style="background:green;"<?php endif; 
            ?>>
            <td><?php echo $i; ?></td>
        </tr>
        <?php endfor; ?>
</table>
