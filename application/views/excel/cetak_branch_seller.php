<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data branch seller.xls");
?>

<h3>Data Branch Seller</h3>
		
<table border="1" cellpadding="5">
	<tr>
		<th>No</th>
		<th>Kode Branch</th>
        <th>Nama Branch</th>
      	<th>Id Seller</th>  
      	<th>Alamat</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Waktu Pengajuan</th>
        <th>Waktu Approve</th>
        <th>Status Branch</th>
        <th>Active</th>
     
	</tr>
	<?php
	$no =1;
	foreach ($branch_seller as $data) { ?>
	<tr>
		<td><?= $no++; ?></td>
		<td><?= $data['kd_branch'] ?></td>
		<td><?= $data['nama_branch']  ?></td>
		<td><?= $data['id_seller'] ?></td>
		<td><?= $data['alamat'] ?></td>
		<td><?= $data['phone'] ?></td>
		<td><?= $data['email'] ?></td>
		<td><?= $data['waktu_pengajuan'] ?></td>
		<td><?= $data['waktu_approve'] ?></td>
		<td><?= $data['status_branch'] ?></td>
		<td><?= $data['active'] ?></td>
		
	
	</tr>

<?php } ?>
</table>
