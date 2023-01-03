<fieldset style="width:350px;margin: 50px auto;">
	<legend>Danh sách phòng ban</legend>
	<table cellpadding="5" border="1" style="width: 100%; border-collapse:collapse;">
		<tr>
			<th> Tên phòng ban</th>
		</tr>
		<?php foreach ($phong_ban as $row): ?>
			<tr>
				<td><?php echo $row->tenphongban; ?></td>
			</tr>
			<?php endforeach; ?>
	</table>
</fieldset>