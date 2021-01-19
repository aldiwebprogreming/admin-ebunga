<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data sub kategoroi.xls");
?>

<h3>Data Sub Kategori</h3>
		
<table border="1" cellpadding="5">
	<tr>
		<th>No</th>
		<th>Kode Sub Kategori</th>
        <th>Nama Kategori</th>
        <th>Slug</th>
         <th>Kode Kategori</th>
         <th>Photo</th>
         <th>Active</th>
     
	</tr>
	<?php
	$no = 1;
	foreach ($sub_kategori as $data) { ?>
	<tr>
		<td><?= $no++; ?></td>
		<td><?= $data['kd_sub_kategori'] ?></td>
		<td><?= $data['nama_kategori']  ?></td>
		<td><?= $data['slug'] ?></td>
		<td><?= $data['kd_kategori'] ?></td>
		<td><?= $data['foto'] ?></td>
		<td><?= $data['aktif'] ?></td>
	
	</tr>

<?php } ?>
</table>
