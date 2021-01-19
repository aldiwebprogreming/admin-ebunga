<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data registrasi user.xls");
?>

<h3>Data Regigistrasi User</h3>
		
<table border="1" cellpadding="5">
	<tr>
		<th>No</th>
		<th>Kd Registrasi</th>
        <th>Token Registrasi</th>
        <th>Full Name</th>
        <th>Phone Number</th>
         <th>Email</th>
         <th>Password</th>
         <th>Waktu Registrasi</th>
         <th>Referall Code</th>
         <th>Status Activasi</th>
         <th>Waktu Activasi</th>
        
       
	</tr>
	<?php
	$no = 1;
	foreach ($registrasiuser as $data) { ?>
	<tr>
		<td><?= $no++; ?></td>
		<td><?= $data['kd_registrasi'] ?></td>
		<td><?= $data['token_registrasi']  ?></td>
		<td><?= $data['full_name'] ?></td>
		<td><?= $data['phone'] ?></td>
		<td><?= $data['email'] ?></td>
		<td><?= $data['password'] ?></td>
		<td><?= $data['referall_code'] ?></td>
		<td><?= $data['status_aktivasi'] ?></td>
		<td><?= $data['waktu_aktivasi'] ?></td>
		
	</tr>

<?php } ?>
</table>
