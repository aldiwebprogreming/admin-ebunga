<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data kategori produk.xls");
?>

<h3>Data Kategori Produk</h3>
		
<table border="1" cellpadding="5">
	<tr>
		<th>No</th>
		<th>Kode Kategori</th>
        <th>Nama Kategori</th>
      	<th>Deks</th>  
        <th>Active</th>
     
	</tr>
	<?php
	$no = 1;
	foreach ($kategori_produk as $data) { ?>
	<tr>
		<td><?= $no++; ?></td>
		<td><?= $data['kd_kategori'] ?></td>
		<td><?= $data['nama_kategori']  ?></td>
		<!-- <td><?= $data['password'] ?></td> -->
		<td><?= $data['deks'] ?></td>
		<td><?= $data['active'] ?></td>
	
	</tr>

<?php } ?>
</table>
