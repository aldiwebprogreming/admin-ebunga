<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data variant produk.xls");
?>

<h3>Data Variant Produk</h3>
		
<table border="1" cellpadding="5">
	<tr>
		<th>No</th>
		<th>Kode Variant</th>
        <th>Kode Produk</th>
      	<th>Nama Variant</th>  
      	<th>Deks</th>
        <th>Active</th>
     
	</tr>
	<?php
		$no = 1;
	foreach ($variant_produk as $data) { ?>
	<tr>
		<td><?= $no++  ?></td>
		<td><?= $data['kd_variant'] ?></td>
		<td><?= $data['kd_produk']  ?></td>
		<td><?= $data['nama_variant'] ?></td>
		<td><?= $data['deks'] ?></td>
		<td><?= $data['active'] ?></td>
	
	</tr>

<?php } ?>
</table>
