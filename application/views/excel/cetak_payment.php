<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data payment.xls");
?>

<h3>Data Country Support</h3>
		
<table border="1" cellpadding="5">
	<tr>
		<th>No</th>
		<th>Nama payment</th>
        <th>Scope</th>
        <th>Kode Payment</th>
        <th>Token</th>
        <th>Api</th>
         <th>Active</th>
     
	</tr>
	<?php
	$no = 1;
	foreach ($payment as $data) { ?>
	<tr>
		<td><?= $no++ ?></td>
		<td><?= $data['nama_payment'] ?></td>
		<td><?= $data['scope']  ?></td>
		<td><?= $data['kd_payment'] ?></td>
		<td><?= $data['token'] ?></td>
		<td><?= $data['api'] ?></td>
		<td><?= $data['active'] ?></td>
	
	</tr>

<?php } ?>
</table>
