<title><?=$header?></title>

<style type="text/css">
table.data{
	border-collapse: collapse;
}
table.data th, table.data td{
	padding:5px;
}
</style>
<div style="margin-bottom:20pv;">
<a href="<?=site_url('Laporan/add')?>"><button><i class="fa fa-plus" aria-hidden="true"></i>
Tambah</button></a>
</div>
<br>
<table class="data" border="1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/font-awesome-4.7.0/css/font-awesome.min.css">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Tanggal</th>
		<th>Laporan</th>
		<th></th>
	</tr>
	<?php
	$no = 1;
		foreach($laporan as $b => $row){
	?>
	<tr>
		<td><?=$no++;?></td>
		<td><?=$row->Nama;?></td>
		<td><?=$row->Tanggal;?></td>
		<td><?=$row->Laporan;?></td>
		<td>
			<a href="<?=site_url('laporan/edit/'.$row->id_lap);?>"><button><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit </button></a>
			<a href="<?=site_url('laporan/del/'.$row->id_lap);?>" onclick="return confirm('Anda yakin akan menghapus data?')"><button><i class="fa fa-trash" aria-hidden="true"></i> Hapus </button></a>
		</td>
	</tr>
	<?php
		}?>
</table>
