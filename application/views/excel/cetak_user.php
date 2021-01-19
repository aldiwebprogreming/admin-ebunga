<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data user.xls");
?>

<h3>Data User</h3>
		
<table border="1" cellpadding="5">
	<tr>
		<th>No</th>
		<th>Username</th>
        <th>Type</th>
      <!--   <th>Password</th> -->
         <th>Last Login</th>
       
         <th>Active</th>
     
	</tr>
	<?php
	$no = 1;
	foreach ($user as $data) { ?>
	<tr>
		<td><?= $no++ ?></td>
		<td><?= $data['username'] ?></td>
		<td><?= $data['type']  ?></td>
		<!-- <td><?= $data['password'] ?></td> -->
		<td><?= $data['last_login'] ?></td>
		<td><?= $data['aktif'] ?></td>
	
	</tr>

<?php } ?>
</table>
