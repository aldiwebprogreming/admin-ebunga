<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data member.xls");
?>

<h3>Data Blog</h3>
		
<table border="1" cellpadding="5">
	<tr>
		<th>No</th>
		<th>Username</th>
        <th>Full Name</th>
        <th>Phone</th>
        <th>Country</th>
         <th>Provinsi</th>
         <th>Kabupaten</th>
         <th>Kecamatan</th>
         <th>Kelurahan</th>
         <th>Postal Code</th>
         <th>Alamat</th>
         <th>KTP</th>
         <th>NPWP</th>
         <th>Siup</th>
         <th>Status</th>
         <th>Suspend</th>
	</tr>
	<?php
	$no = 1;
	foreach ($member as $data) { ?>
	<tr>
		<td><?= $no++; ?></td>
		<td><?= $data['username'] ?></td>
		<td><?= $data['full_name']  ?></td>
		<td><?= $data['phone'] ?></td>
		<td><?= $data['country'] ?></td>
		<td><?= $data['provinsi'] ?></td>
		<td><?= $data['kabupaten'] ?></td>
		<td><?= $data['kecamatan'] ?></td>
		<td><?= $data['kelurahan'] ?></td>
		<td><?= $data['postal_code'] ?></td>
		<td><?= $data['alamat'] ?></td>
		<td><?= $data['ktp'] ?></td>
		<td><?= $data['npwp'] ?></td>
		<td><?= $data['siup'] ?></td>
		<td><?= $data['status'] ?></td>
		<td><?= $data['suspend'] ?></td>
	</tr>

<?php } ?>
</table>
