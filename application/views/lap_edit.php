<title><?=$header?></title>

<?php echo form_open('laporan/proses','',array('id'=> $laporan->id_lap )); ?>
	<table>
		<tr>
			<td>Nama</td>
			<td> : </td>
			<td>
				<?php echo form_input('Nama',$laporan->Nama,'required="required"');?>
			</td>
		</tr>
		<tr>
			<td>Tanggal</td>
			<td> : </td>
			<td>
				<?php echo form_input('Tanggal',$laporan->Tanggal,'required="required"');?>
			</td>
		</tr>
		<tr>
			<td>Laporan</td>
			<td> : </td>
			<td>
				<?php echo form_textarea('Laporan',$laporan->Laporan,'required="required"');?>
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>
				<?php echo form_input(array('type'=> 'submit','name'=>'edit','value'=>'Edit'));?>
			</td>
		</tr>
	</table>