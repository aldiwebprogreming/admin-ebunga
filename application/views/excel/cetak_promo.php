<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data promo.xls");
?>

<h3>Data Promo</h3>
		
<table border="1" cellpadding="5">
	<tr>
		<th>No</th>
		<th>Kd Promo</th>
        <th>Nama Promo</th>
        <th>Deks Promo</th>
        <th>Cakupan</th>
         <th>Id Seller </th>
         <th>Type</th>
         <th>Value</th>
         <th>Star Active</th>
         <th>End Active</th>
         <th>Status</th>
	</tr>
	<?php
	$no = 1;
	foreach ($promo as $data) { ?>
	<tr>
		<td><?= $no++; ?></td>
		<td><?= $data['kd_promo'] ?></td>
		<td><?= $data['nama_promo']  ?></td>
		<td><?= $data['deks_promo'] ?></td>
		<td><?= $data['cakupan'] ?></td>
		<td><?= $data['id_seller'] ?></td>
		<td><?= $data['tipe'] ?></td>
		<td><?= $data['value'] ?></td>
		<td><?= $data['start_active'] ?></td>
		<td><?= $data['end_active'] ?></td>
		<td><?= $data['status'] ?></td>
	</tr>

<?php } ?>
</table>
