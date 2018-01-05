<title><?=$header?></title>

<?php echo form_open('laporan/proses'); ?>
	<table>
		<tr>
			<td>Nama</td>
			<td> : </td>
			<td>
				<?php echo form_input('Nama','','required="required"');?>
			</td>
		</tr>
		<tr>
			<td>Tanggal</td>
			<td> : </td>
			<td>
				<?php echo form_input('Tanggal','','required="required"');?>
			</td>
		</tr>
		<tr>
			<td>Laporan</td>
			<td> : </td>
			<td>
				<?php echo form_textarea('Laporan','','required="required"');?>
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>
				<?php echo form_input(array('type'=> 'submit','name'=>'add','value'=>'Add'));?>
			</td>
		</tr>
	</table>