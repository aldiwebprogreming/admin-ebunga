<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data bank account.xls");
?>

<h3>Data Bank Account</h3>
		
<table border="1" cellpadding="5">
	<tr>
		<th>No</th>
		<th>Kd Bank Account</th>
        <th>Type User</th>
        <th>Id User</th>
        <th>Kd Bank</th>
         <th>Account Name</th>
         <th>Account Number</th>
         <th>Main</th>
         <th>Active</th>
	</tr>
	<?php
	$no = 1;
	foreach ($bank_account as $data) { ?>
	<tr>
		<td><?= $no++; ?></td>
		<td><?= $data['kd_bank-account'] ?></td>
		<td><?= $data['tipe_user']  ?></td>
		<td><?= $data['id_user'] ?></td>
		<td><?= $data['kd_bank'] ?></td>
		<td><?= $data['account_name'] ?></td>
		<td><?= $data['account_number'] ?></td>
		<td><?= $data['main'] ?></td>
		<td><?= $data['active'] ?></td>
	</tr>

<?php } ?>
</table>
