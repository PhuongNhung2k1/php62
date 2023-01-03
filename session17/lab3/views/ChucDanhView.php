<?php 
	//neu muon load file Layout.php thi dua ten file nay vao bien $layout
	$layout = "Layout.php";
 ?>
<fieldset style="width:350px; margin:50px auto;">
	<legend>Danh sách chức danh</legend>
	<table cellpadding="5" border="1" style="width:100%; border-collapse: collapse;">
		<tr>
			<th>Tên chức danh</th>
		</tr>
		<?php foreach($chuc_danh as $row): ?>
		<tr>
			<td><?php echo $row->tenchucdanh; ?></td>
		<?php endforeach; ?>
	</table>
</fieldset>