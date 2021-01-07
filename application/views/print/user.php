<!DOCTYPE html>
<html>
<head>
	<title>Data User</title>
</head>
<body>


	<h3 style="text-align: center;">PT.EBUNGA SUKSES MAKMUR</h3>
	<h4 style="text-align: center;">Laporan Data User Ebunga</h4>
	<hr style="height: 2px; background-color: black;">

	<table border="1">
		<tr>
			<th>Username</th>
			<th>Type</th>
			<th>Last Login</th>
			<th>Active</th>
		</tr>




		<?php foreach ($user as $data) { ?>
		<tr>
			<td><?= $data['username'] ?></td>
			<td><?= $data['type'] ?></td>
			<td><?= $data['last_login'] ?></td>
			<td><?= $data['active'] ?></td>
		</tr>

	<?php } ?>
	</table>


	<script>
		window.print();
	</script>


</body>
</html>