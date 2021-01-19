<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data country support.xls");
?>

<h3>Data Country Support</h3>
		
<table border="1" cellpadding="5">
	<tr>
		<th>No</th>
		<th>Kd Country</th>
        <th>Name Country</th>
        <th>Status</th>
         <th>Active</th>
     
	</tr>
	<?php
	$no = 1;
	foreach ($country as $data) { ?>
	<tr>
		<td><?= $no++ ?></td>
		<td><?= $data['kd_country'] ?></td>
		<td><?= $data['name_country']  ?></td>
		<td><?= $data['status'] ?></td>
		<td><?= $data['active'] ?></td>
	
	</tr>

<?php } ?>
</table>
