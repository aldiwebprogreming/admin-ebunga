<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data operator.xls");
?>

<h3>Data operator</h3>
		
<table border="1" cellpadding="5">
	<tr>
		<th>No</th>
		<th>Username</th>
        <th>Nama Lengkap</th>
        <th>Hp</th>
        <th>Seller Id</th>
         <th>Alamat</th>
         <th>Posisi</th>
         <th>Bio</th>
         <th>Active</th>
        
       
	</tr>
	<?php
	$no = 1;
	foreach ($operator as $data) { ?>
	<tr>
		<td><?= $no++; ?></td>
		<td><?= $data['username'] ?></td>
		<td><?= $data['nama_lengkap']  ?></td>
		<td><?= $data['hp'] ?></td>
		<td><?= $data['seller_id'] ?></td>
		<td><?= $data['alamat'] ?></td>
		<td><?= $data['posisi'] ?></td>
		<td><?= $data['bio'] ?></td>
		<td><?= $data['active'] ?></td>
		
	</tr>

<?php } ?>
</table>
