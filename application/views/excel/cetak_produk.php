<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data produk.xls");
?>

<h3>Data Produk</h3>
		
<table border="1" cellpadding="5">
	<tr>
		<th>No</th>
		<th>Kd Produk</th>
        <th>Nama Produk</th>
        <th>Slug</th>
         <th>Deks Produk</th>
         <th>Kategori</th>
         <th>Sub Kategori</th>
         <th>Id Branch</th>
         <th>Id Seller</th>
         <th>Harga</th>
         <th>Stok</th>
         <th>Active</th>
         <th>Foto Utama</th>
     
	</tr>
	<?php
	$no = 1;
	foreach ($produk as $data) { ?>
	<tr>
		<td><?= $no++; ?></td>
		<td><?= $data['kd_produk'] ?></td>
		<td><?= $data['nama_produk']  ?></td>
		<td><?= $data['slug'] ?></td>
		<td><?= $data['deks_produk'] ?></td>
		<td><?= $data['kategori'] ?></td>
		<td><?= $data['sub_kategori'] ?></td>
		<td><?= $data['id_branch'] ?></td>
		<td><?= $data['id_seller'] ?></td>
		<td><?= $data['harga'] ?></td>
		<td><?= $data['stok'] ?></td>
		<td><?= $data['active'] ?></td>
		<td><?= $data['foto_utama'] ?></td>
	</tr>

<?php } ?>
</table>
