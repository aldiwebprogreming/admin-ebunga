<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data komplain.xls");
?>

<h3>Data Komplain</h3>
		
<table border="1" cellpadding="5">
	<tr>
		<th>No</th>
		<th>Kode Komplain</th>
        <th>Kode Transaction</th>
        <th>Customer Id</th>
        <th>Seller Id</th>
         <th>Waktu Komplain</th>
         <th>Judul</th>
         <th>Isi</th>
         <th>Status</th>
         <th>Operator Handle</th>
       
	</tr>
	<?php
	$no= 1;
	foreach ($komplain as $data) { ?>
	<tr>
		<td><?= $no++; ?></td>
		<td><?= $data['kd_komplain'] ?></td>
		<td><?= $data['kode_transaction']  ?></td>
		<td><?= $data['customer_id'] ?></td>
		<td><?= $data['seller_id'] ?></td>
		<td><?= $data['waktu_komplain'] ?></td>
		<td><?= $data['judul'] ?></td>
		<td><?= $data['isi'] ?></td>
		<td><?= $data['status'] ?></td>
		<td><?= $data['operator_handle'] ?></td>
	
	</tr>

<?php } ?>
</table>
